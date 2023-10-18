@extends('layouts.app')

@section('title', __('messages.service'))



@section('content')

<div class="outer">
    <div class="inner">
        <div class="breadcrumb">
            {{ Breadcrumbs::render('service') }}
        </div>
        <div class="service-background" style="background-image: url({{ asset('img/service_background.png') }})">
            <div class="service-main-title">
                {{ __('messages.service_main_title') }}
            </div>
            <div class="service-top-title">
                {{ __('messages.service_top_title') }}
            </div>

        </div>
        <div class="service-list">
            @foreach ($services as $service )
                <a class="service-item" href="{{route('service', $service->id)}}">
                    <div class="content">
                        <div class="service-bg">
                            <span class="service-image"></span>
                            <img src="{{ Voyager::image( $service->picture ) }}" alt="">
                        </div>
                        <span id="service-title" class="service-title">
                        {{ $service->title }}
                    </span>
                    </div>

                </a>
            @endforeach
        </div>
    </div>
</div>


@endsection
