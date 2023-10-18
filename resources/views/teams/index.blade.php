@extends('layouts.app')

@section('title', __('messages.team'))

@section('content')
<div class="outer">
    <div class="inner">
        <div class="breadcrumb">
            {{ Breadcrumbs::render('team') }}
        </div>
        <div class="d-flex justify-content-center my-4">
            <img src="{{asset('/img/main/teams.svg')}}" alt="">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <p class="border-b-1" style="font-size: 30px">{{__('PLATO Komandası')}}</p>
        </div>
    </div>
{{--    @include('includes.workers', ['workers' => $workers])--}}
    <div class="inner">
{{--        <div class="my-4 d-flex flex-column align-items-center">--}}
{{--            <img src="{{asset('img/main/teams.svg')}}" alt="" style="margin: 0 auto">--}}
{{--            <h2 class="tac uppercase" style="border-bottom: 1px solid #C4C4C4; font-size: 30px">PLATO Team</h2>--}}
{{--        </div>--}}
        <div class="team-list t-col-3" style="">
        @foreach($workers as $w)
                <div class="team-item" style="margin: 0 auto">
                    <img src="{{ Voyager::image( $w->picture )}}" alt="">
                    <p class="name">{{ $w->name." ".$w->surname }}</p>
                    <p class="position">{{ $w->position }}</p>
                    <p class="about">{{__('messages.about')}}</p>
                    <p class="description">{{ $w->description }}</p>
                </div>
{{--            @if($loop->iteration === 1)--}}
{{--                <div class="team-list t-col-1">--}}
{{--                    <div class="team-item" style="margin: 0 auto">--}}
{{--                        <img src="{{ Voyager::image( $w->picture )}}" alt="">--}}
{{--                        <p class="name">{{ $w->name." ".$w->surname }}</p>--}}
{{--                        <p class="position">{{ $w->position }}</p>--}}
{{--                        <p class="about">{{__('messages.about')}}</p>--}}
{{--                        <p class="description">{{ $w->description }}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @if($loop->iteration === 2)--}}
{{--                <div class="team-list t-col-2">--}}
{{--                    <div class="team-item" style="margin: 0 auto">--}}
{{--                        <img src="{{ Voyager::image( $workers[1]->picture )}}" alt="">--}}
{{--                        <p class="name">{{ $workers[1]->name." ".$workers[1]->surname }}</p>--}}
{{--                        <p class="position">{{ $workers[1]->position }}</p>--}}
{{--                        <p class="about">{{__('messages.about')}}</p>--}}
{{--                        <p class="description">{{ $workers[1]->description }}</p>--}}
{{--                    </div>--}}
{{--                    <div class="team-item" style="margin: 0 auto">--}}
{{--                        <img src="{{ Voyager::image( $workers[2]->picture )}}" alt="">--}}
{{--                        <p class="name">{{ $workers[2]->name." ".$workers[2]->surname }}</p>--}}
{{--                        <p class="position">{{ $workers[2]->position }}</p>--}}
{{--                        <p class="about">{{__('messages.about')}}</p>--}}
{{--                        <p class="description">{{ $workers[2]->description }}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            @if($loop->iteration === 4)--}}
{{--                <div class="team-list t-col-3" style="">--}}
{{--                    <div class="team-item" style="margin: 0 auto">--}}
{{--                        <img src="{{ Voyager::image( $w->picture )}}" alt="">--}}
{{--                        <p class="name">{{ $w->name." ".$w->surname }}</p>--}}
{{--                        <p class="position">{{ $w->position }}</p>--}}
{{--                        <p class="about">{{__('messages.about')}}</p>--}}
{{--                        <p class="description">{{ $w->description }}</p>--}}
{{--                    </div>--}}
{{--            @endif--}}
{{--            @if($loop->iteration > 4)--}}
{{--                    <div class="team-item" style="margin: 0 auto">--}}
{{--                        <img src="{{ Voyager::image( $w->picture )}}" alt="">--}}
{{--                        <p class="name">{{ $w->name." ".$w->surname }}</p>--}}
{{--                        <p class="position">{{ $w->position }}</p>--}}
{{--                        <p class="about">{{__('messages.about')}}</p>--}}
{{--                        <p class="description">{{ $w->description }}</p>--}}
{{--                    </div>--}}
{{--            @endif--}}
        @endforeach
        </div>
    </div>
</div>
@endsection
