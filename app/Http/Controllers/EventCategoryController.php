<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Event;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class EventCategoryController extends Controller
{
    public function index($id=null)
    {
        $locale = app()->getlocale();


        $categories = EventCategory::all()->translate('locale', $locale);
        $catName = '';
        $now = Carbon::now();
        $prevMonthObj = Carbon::now()->subMonth();
        $nextMonthObj = Carbon::now()->addMonth();
        if ($id) {
            $category = EventCategory::withTranslations($locale)->find($id);
            $catName = $category->category_name;
            $events = EventCategory::withTranslations($locale)->find($id)->events()->whereBetween('event_date', [$prevMonthObj->startOfMonth()->format("Y-m-d"), $nextMonthObj->endOfMonth()->format("Y-m-d")])->paginate(6);

        } else {
            $events = Event::withTranslations($locale)->whereBetween('event_date', [$prevMonthObj->startOfMonth()->format("Y-m-d"), $nextMonthObj->endOfMonth()->format("Y-m-d")])->paginate(6);
        }

        $calendar_events = Event::whereBetween('event_date', [$prevMonthObj->startOfMonth(), $nextMonthObj->endOfMonth()])->get();
        $events_array = [];
        $events_array_colors = [];
        foreach ($calendar_events as $event) {
            $period = new CarbonPeriod($event->event_date, $event->event_end_date);
            foreach ($period as $date) {
                array_push($events_array, $date);
                $category = EventCategory::where('id', $event->event_category_id)->first();
                // if ($event->category) {
                array_push($events_array_colors, [
                        'color' => $category->color,
                        'name' => $event->event_name,
                    ]);
                // }
                /* dump($event);
                dump($event->category); */
                /*  */
            }

            //
            //dump($period);
        }
        //    dd(12);

        //dd($events_array_colors);
        // dd($events_array);
        /* dump($now->month); // current month
        dump($prevMonthObj->month); //prev month
        dump($nextMonthObj->month); //next month


        //start of month
        dump($now->startOfMonth()->dayOfWeek); //day of week of 1st day of month
        dump($prevMonthObj->startOfMonth()->dayOfWeek); //day of week of 1st day of previous month
        dump($nextMonthObj->startOfMonth()->dayOfWeek); //day of week of 1st day of next month


        //current month days
        dump($now->daysInMonth);

        dd('end'); */
        //  dd($events_array);
        return view('event.index', [
            'now' => $now,
            'prev' => $prevMonthObj,
            'next' => $nextMonthObj,
            'name' => $catName,
            'categories' => $categories,
            'events' => $events,
            'events_array' => $events_array,
            'events_array_colors' => $events_array_colors
        ]);
    }
}
