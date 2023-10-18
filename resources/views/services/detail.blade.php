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
        <div class="service-detail">
            <div class="service-detail-picture">
                <img src="{{ Voyager::image( $service->inner_picture ) }}" alt="">
            </div>
            <div class="service-detail-text">
                <div class="service-detail-title-button">
                    <div class="service-detail-title"> {{ $service->title }}</div>
                    <div class="service-detail-button">
                        <a href="{{ route('service') }}">
                            {{ __('messages.all_services') }}
                        </a>
                    </div>
                </div>
                <div class="service-text">
                    {{$service->text}}
                </div>
            </div>
            <div class="service-detail-button-mobile">
                <a href="{{ route('service') }}">
                    {{ __('messages.all_services') }}
                </a>
            </div>
        </div>
        <div class="service-slider">
            @foreach($service->gallery as $g)
                <div class="slider-item">
                    <img src="{{Voyager::image( $g->image )}}" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>




@endsection
