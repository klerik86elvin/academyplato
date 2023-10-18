@extends('layouts.app')
@section('title', __('messages.main'))
@section('content')
<div class="main-slider-area">
    <div class="main-slider">
        @foreach ($main_sliders as $slide )
            <div class="outer" style="background-image: url('{{ Voyager::image( $slide->background_image ) }}')">
                <div class="inner">
                    <div class="main-slider-flex">
                        <div class="main-slider-table">
                            <div class="title">
                                <p>
                                    {{ $slide->title }}
                                </p>
                            </div>
                            <div class="main-slider-buttons">
                                @if($slide->left_button_link)
                                    <a href="{{$slide->left_button_link}}">{{$slide->left_button_name}}</a>
                                @endif
                                @if($slide->right_button_link)
                                    <a href="{{$slide->right_button_link}}">{{$slide->right_button_name}}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="scroll-down-from-main">
        <a href="" class="main-scroller">
            <span>{{ __('messages.scroll') }}</span>
            <img src="{{ asset('img/slide_down.svg') }}" alt="">
        </a>
    </div>
</div>

<div class="outer about-block">
    <div class="inner">
        <h2 class="uppercase tac">{{ __('messages.about') }}</h2>
        <div class="main-about">
            <hr>
            <div class="about-text">
            {{ __('messages.about_text') }}
            </div>
            <hr>
        </div>
    </div>
</div>

<div id="page-menu" class="outer page-menu">
    <div class="inner">
        <div class="page-menu-bar">
            @foreach($platoIntro as $p)
             <a href="{{$p->url}}" class="page-menu-item">
                <div class="page-menu-img">
                    <img class="visible-1" src="\storage\{{ json_decode($p->icon)[0]->download_link}}" alt="">
                    <img class="invisible-1" src="\storage\{{ json_decode($p->active_icon)[0]->download_link}}" alt="">
                </div>
                <span class="page-menu-title">
                    {{$p->name}}
                </span>
                <span class="page-menu-description">
                   {{$p->title}}
                </span>
            </a>
            @endforeach
        </div>
    </div>
</div>

<div class="outer main-description">
    <div class="inner">
        <div class="main-description-item">
            <div class="md-image">
                <img src="{{ asset('img/earth-svgrepo-com 1.svg') }}" alt="">
            </div>
            <div class="md-title">
                {{ __('messages.ferq_title') }}
            </div>
            <div class="md-text">
                {{ __('messages.ferq_text') }}
            </div>
        </div>
        <div class="main-description-item">
            <div class="md-image">
                <img src="{{ asset('img/goals-svgrepo-com 1.svg') }}" alt="">
            </div>
            <div class="md-title">
                {{ __('messages.goal_title') }}
            </div>
            <div class="md-text">
                {{ __('messages.goal_text') }}
            </div>
        </div>
        <div class="main-description-item">
            <div class="md-image">
                <img src="{{ asset('img/heart-svgrepo-com 1.svg') }}" alt="">
            </div>
            <div class="md-title">
                {{ __('messages.deyer_title') }}
            </div>
            <div class="md-text">
                {{ __('messages.deyer_text') }}
            </div>
        </div>
    </div>
</div>
@include('includes.workers', ['workers' => $workers])

<div class="outer main-submenu-list">
    <div class="inner">
        <div class="main-submenu-wrapper">
            @foreach($platoIntro as $p)
            <div class="main-submenu">
                <div class="img">
                    <img src="{{ Voyager::image($p->image) }}" alt="">
                </div>
                <div class="sub-menu-text-part">
                    <div class="title-and-button">
                        <div class="sub-menu-title">
                            {{$p->name}}
                        </div>
                        <a href="{{$p->url}}" class="empty-blue">
                            {{ __('messages.read_more')}}
                        </a>
                    </div>
                    <div class="submenu-description">
                        {{ $p->text}}
                    </div>

                </div>
                <div class="visible-mobile">
                    <a href="{{$p->url}}" class="empty-blue">
                        {{ __('messages.read_more')}}
                    </a>
                </div>
            </div>
            <hr>
            @endforeach
            <div class="our-company-centralize">
                <a href="" class="empty-black">
                    {{ __('messages.join_our_company') }}
                </a>
            </div>
        </div>
    </div>
</div>
<div class="outer map-block">
    <div class="inner">
        <div class="wrapper-map">
            <div class="map-left">
                <div class="logo">
                    <img src="{{ asset('img/logo_black.svg') }}" alt="">
                </div>
                <div class="contact-item location-item">
                    <img src="{{ asset('img/location.svg') }}" alt="">
                    <div>
                        {{ __('messages.location_text') }}
                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('img/phone.svg') }}" alt="">
                    <div>
                        +99451 505 21 11
                    </div>
                </div>
                <div class="contact-item">
                    <img src="{{ asset('img/email.svg') }}" alt="">
                    <div>
                        hello@academyplato.az
                    </div>
                </div>
            </div>
            <div class="map-right">
                <img src="{{ asset('img/cbe59dc4-b27b-49fa-9917-a23460754818.jpeg') }}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

<script>

    document.addEventListener("DOMContentLoaded", function() {
        let a = document.querySelector('.main-scroller');
        a.addEventListener("click", (event) => {
            event.preventDefault();
            window.scrollTo({
                top: 1650,
                left: 0,
                behavior: 'smooth'
            });
        })

    });


</script>
