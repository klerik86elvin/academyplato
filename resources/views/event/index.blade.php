@extends('layouts.app')
@section('title', __('messages.service'))
@section('content')
<div class="outer">
    <div class="inner">
        <div class="breadcrumb">
            {{ Breadcrumbs::render('event-category') }}
        </div>
{{--        <div class="service-background" style="background-image: url(https://academyplato.az/img/service_background.png)">--}}
{{--            <div class="service-top-title">--}}
{{--                {{__('messages.event-top-title')}}--}}
{{--            </div>--}}
{{--            <div class="service-main-title">--}}
{{--                {{__('messages.event-main-title')}}--}}
{{--            </div>--}}

{{--        </div>--}}
        <div class="d-flex justify-content-center my-4">
            <img src="{{asset('/img/main/events.svg')}}" alt="">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <p class="border-b-1" style="font-size: 30px">{{__('PLATO Events')}}</p>
        </div>
    </div>
</div>
<div class="outer mb-4">
    <div class="inner">
        <div class="event-categories">
            @foreach ($categories as $category)
                <a href="{{ route('event-category', ['id'=>$category->id]) }}" class="event-category {{request()->segment(2) == $category->id ? "active" : ""}}" style="--background-color: {{$category->color}}">
                    <div>
                        <div class="category-image">
                            <img class="" src="{{ Voyager::image( $category->icon ) }}" alt="" style="--background-color: {{$category->color}}">
                        </div>
                        <p class="category-name">
                        {{ $category->category_name }}
                    </p>
                    </div>
                    <div class="bottom-icon" style="--background-color: {{$category->color}}">
                        <img src="{{asset('img/arrow-bottom.svg')}}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
        <div>
            <p class="text-center text-30 font-bold text-blue">{{request()->segment(2) == null ? __('All events') : $name}}</p>
        </div>
        <div class="flex justify-center event-calendar">
            <a id="" class="flex gap-x-1 decoration-none mb-3" href="">
                <img src="{{asset('img/calendar.svg')}}" alt="">
                <span class="text-dark underline">{{__('Show event calendar')}}</span>
            </a>
        </div>
        <div class="events">
        @foreach ($events as $event)
            <div class="event">
                <div class="event-image">
                    <img src="{{ Voyager::image( $event->preview_image ) }}" alt="">
                </div>
                <div class="event-preview-content">
                    <div class="event-time">
                        <div>
                            {{$event->event_date}} - {{$event->event_end_date}}
                        </div>
                        <div>
                            {{$event->event_time_range}}
                        </div>
                    </div>
                    <a href="{{ route('event', ['id' => $event->id]) }}" class="event-content">
                        <span class="event-name">{{ $event->event_name }}</span>
                        <span class="event-content-text">
                            {!! mb_substr(strip_tags($event->text), 0, 300) !!}...
                        </span>
                    </a>
                    <div class="event-socs">
                        @if($event->linkedin)
                            <a href="{{ $event->linkedin }}" class="event-soc">
                            <img src="{{ asset('img/soc/link.svg') }}" alt="">
                            </a>
                        @endif
                        @if($event->instagram)
                            <a href="{{ $event->instagram }}"  class="event-soc">
                                <img src="{{ asset('img/soc/inst.svg') }}" alt="">
                            </a>
                        @endif
                        @if($event->youtube)
                            <a href="{{ $event->youtube }}"  class="event-soc">
                                <img src="{{ asset('img/soc/yout.svg') }}" alt="">
                            </a>
                        @endif
                        @if($event->facebook)
                            <a href="{{ $event->facebook }}"  class="event-soc">
                                <img src="{{ asset('img/soc/fb.svg') }}" alt="">
                            </a>
                        @endif
                        @if($event->twitter)
                            <a href="{{ $event->twitter }}"  class="event-soc">
                            <img src="{{ asset('img/soc/tw.svg') }}" alt="">
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
        {{ $events->links('paginate/custom') }}
    </div>
</div>
    <div class="outer">
        <div class="inner overflow-hidden-calendar">
            <div class="calendar">
                {{-- previous --}}
                <div class="month prev">
                    <div class="month-top">
                        <a href="" class="move-left calendar-arrow">
                            <img src="{{ asset('img/cal-left.svg') }}" alt="">
                        </a>
                        <span>{{ __('messages.month_'.$prev->copy()->month) }}</span>
                        <a href="" class="move-right calendar-arrow">
                            <img src="{{ asset('img/cal-right.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="week">
                        @foreach (range(1,  7) as  $weekDay)
                            <div class="weekDay">
                                {{__('messages.weekDay_'.$weekDay)}}
                            </div>
                        @endforeach
                    </div>
                    <div class="days-of-month">
                        @php
                            $prevPrevMonth = $prev->copy()->subMonth();
                            $lastDayOfPrevPrevMonthEndDay = $prevPrevMonth->endOfMonth();
                            $dayOfWeek = $lastDayOfPrevPrevMonthEndDay->dayOfWeek;
                            $prevDays = [];
                            for ( $i = $dayOfWeek; $i >= 1; $i--){
                                if ($i == $dayOfWeek) {
                                    array_push($prevDays, $lastDayOfPrevPrevMonthEndDay->day);
                                }
                                else {
                                    array_push($prevDays, $lastDayOfPrevPrevMonthEndDay->subDay()->day);
                                }
                            }
                        @endphp
                        @for ( $i = 0; $i < $dayOfWeek; $i++)
                            <div class="month-day just-to-fill">
                                {{ array_reverse($prevDays)[$i] }}
                            </div>
                        @endfor
                        @foreach (range(1, now()->copy()->subMonth()->daysInMonth ) as  $day)
                            <div class="month-day">
                <span class="month-day-number">
                    {{ $day }}
                </span>
                                <span class="event-colored"
                 @php
                     $year = now()->copy()->subMonth()->year;
                     $month = now()->copy()->subMonth()->month;
                     foreach ($events_array as $k=>$event){
                         /* var_dump(\Carbon\Carbon::createFromDate($year, $month, $day)->format("Y-m-d"));
                         var_dump( $event->format("Y-m-d").'=' );
                         var_dump($event->eq(\Carbon\Carbon::createFromDate($year, $month, $day))); */
                         if($event->format("Y-m-d") ==  \Carbon\Carbon::createFromDate($year, $month, $day)->format("Y-m-d")  ){
                             echo 'style="background-color: '.$events_array_colors[$k]['color'].'" title = '.$events_array_colors[$k]['name'].'';
                         }
                     }
                 @endphp
                >
                </span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="month current">
                    <div class="month-top">
                        <a href="" class="move-left calendar-arrow">
                            <img src="{{ asset('img/cal-left.svg') }}" alt="">
                        </a>
                        <span>{{ __('messages.month_'.now()->month) }}</span>
                        <a href="" class="move-right calendar-arrow">
                            <img src="{{ asset('img/cal-right.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="week">
                        @foreach (range(1,  7) as  $weekDay)
                            <div class="weekDay">
                                {{__('messages.weekDay_'.$weekDay)}}
                            </div>
                        @endforeach
                    </div>
                    <div class="days-of-month">
                        @php
                            $lastDayOfPrevMonthEndDay = now()->copy()->subMonth()->endOfMonth();
                           // dd($lastDayOfPrevMonthEndDay->dayOfWeek);
                            $dayOfWeek = $lastDayOfPrevMonthEndDay->dayOfWeek;
                            //dd($dayOfWeek);

                            $prevDays = [];
                            for ( $i = $dayOfWeek; $i >= 1; $i--){
                                    if ($i == $dayOfWeek) {
                                        array_push($prevDays, $lastDayOfPrevPrevMonthEndDay->day);
                                    }
                                    else {
                                        array_push($prevDays, $lastDayOfPrevPrevMonthEndDay->subDay()->day);
                                    }
                            }

                          //  dd($prevDays);
                        @endphp
                        @for ( $i = 0; $i < $dayOfWeek; $i++)
                            <div class="month-day just-to-fill">
                                {{ array_reverse($prevDays)[$i] }}

                            </div>

                        @endfor
                        @foreach (range(1, $now->daysInMonth ) as  $day)

                            <div class="month-day">
                <span class="month-day-number">
                    {{ $day }}
                </span>
                                <span class="event-colored"


                 @php

                     $year = now()->copy()->year;
                     $month = now()->copy()->month;
                     // dd(\Carbon\Carbon::createFromDate($year, $month, $day));

                     foreach ($events_array as $k=>$event){
                         /* var_dump(\Carbon\Carbon::createFromDate($year, $month, $day)->format("Y-m-d"));
                         var_dump( $event->format("Y-m-d").'=' );
                         var_dump($event->eq(\Carbon\Carbon::createFromDate($year, $month, $day))); */
                          if($event->format("Y-m-d") ==  \Carbon\Carbon::createFromDate($year, $month, $day)->format("Y-m-d")  ){
                             echo 'style="background-color: '.$events_array_colors[$k]['color'].'" title = '.$events_array_colors[$k]['name'].'';
                         }
                     }
                 @endphp


                >

                    </span>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- next --}}
                <div class="month next">
                    <div class="month-top">
                        <a href="" class="move-left calendar-arrow">
                            <img src="{{ asset('img/cal-left.svg') }}" alt="">
                        </a>
                        <span>{{ __('messages.month_'.$next->month) }}</span>
                        <a href="" class="move-right calendar-arrow">
                            <img src="{{ asset('img/cal-right.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="week">
                        @foreach (range(1,  7) as  $weekDay)
                            <div class="weekDay">
                                {{__('messages.weekDay_'.$weekDay)}}
                            </div>
                        @endforeach
                    </div>
                    <div class="days-of-month">
                        @php
                            $lastDayCurrentMonth = $next->copy()->subMonth()->endOfMonth();
                           // dd($lastDayOfPrevMonthEndDay->dayOfWeek);
                            $dayOfWeek = $lastDayCurrentMonth->dayOfWeek;
                            $currentDays = [];
                            for ( $i = $dayOfWeek; $i >= 1; $i--){
                                    if ($i == $dayOfWeek) {
                                        array_push($currentDays, $lastDayCurrentMonth->day);
                                    }
                                    else {
                                        array_push($currentDays, $lastDayCurrentMonth->subDay()->day);
                                    }
                            }
                        @endphp
                        @for ( $i = 0; $i < $dayOfWeek; $i++)
                            <div class="month-day just-to-fill">
                                {{ array_reverse($currentDays)[$i] }}
                            </div>
                        @endfor
                        @foreach (range(1, $next->daysInMonth ) as  $day)
                            <div class="month-day">
                <span class="month-day-number">
                    {{ $day }}
                </span>
                                <span class="event-colored"
                 @php
                     $year = now()->addMonth()->copy()->year;
                     $month = now()->addMonth()->copy()->month;
                     // dd(\Carbon\Carbon::createFromDate($year, $month, $day));

                     foreach ($events_array as $k=>$event){

                         if($event->format("Y-m-d") ==  \Carbon\Carbon::createFromDate($year, $month, $day)->format("Y-m-d")  ){
                             echo 'style="background-color: '.$events_array_colors[$k]['color'].'" title = '.$events_array_colors[$k]['name'].'';
                         }
                     }
                 @endphp
                >
                </span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="outer">
        <div class="inner event-category-colors-block">
            <div class="event-category-colors">
                @foreach ($categories as $category)
                    <div class="event-category-color-item">
                        <span class="event-category-color" style="background-color: {{ $category->color }}"></span>
                        <span>{{$category->category_name}}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
<script>
    document.querySelector('.event-calendar a').addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 1100,
            left: 0,
            behavior: 'smooth'
        });
    })
</script>
