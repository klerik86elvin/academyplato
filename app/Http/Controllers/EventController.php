<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index($id=null)
    {
        $locale = app()->getlocale();

        if ($id) {
            $event = Event::find($id)->first();
            if ($event) {
                $event = $event->translate('locale', $locale);
                return view('event.detail', [
                    'event' => $event
                ]);
            }
          
        }
        abort(404);
        
    }
}
