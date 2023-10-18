@extends('layouts.app')

@section('title', __('messages.service'))



@section('content')

    <div class="outer">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('month-workers') }}
            </div>
            <div class="worker-month-background-detail" style="background-image: url({{ asset('img/service_background.png') }})">
                <p>{{__('messages.month_'.request()->segment(2))}}</p>
            </div>
            <div>

            </div>
            <div class="worker-month-detail-list">
                <div class="line"></div>
                @foreach($workers as $w)
                    <div class="worker-month-detail-item">
                        <div class="position">
                            <p>{{$w->worker->status == 1 ? 'Junior' : 'Senior'}}</p>
                        </div>
                        <img src="{{Voyager::image( $w->worker->picture)}}" alt="">
                        <p class="worker-month-detail-name">{{$w->worker->name.' '.$w->worker->surname}}</p>
                        <p class="worker-month-detail-position">{{$w->worker->position}}</p>
                        <p class="worker-month-detail-text">{{$w->worker->description}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
