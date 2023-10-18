@extends('layouts.app')
@section('title', __('messages.service'))
@section('content')
    <div class="outer">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('career') }}
            </div>
{{--            <div class="service-background" style="background-image: url(https://academyplato.az/img/service_background.png)">--}}
{{--                <div class="service-top-title">--}}
{{--                    {{__('messages.event-top-title')}}--}}
{{--                </div>--}}
{{--                <div class="service-main-title">--}}
{{--                    {{__('messages.event-main-title')}}--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="d-flex justify-content-center my-4">
                <img src="{{asset('/img/main/career.svg')}}" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <p class="border-b-1" style="font-size: 30px">{{__('Career')}}</p>
            </div>
            <div class="accordion mb-4" id="accordionExample">
                @foreach($data as $q)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{$q->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$q->id}}" aria-controls="collapse-{{$q->id}}">
                                <p>{{$q->name}}</p>
                                <div class="date">
                                    <img src="{{asset('img/clock.svg')}}" alt="">
                                    <span class="">{{$q->created_at->format('d.m.Y')}}</span>
                                </div>
                            </button>

                        </h2>
                        <div id="collapse-{{$q->id}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$q->id}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {!! $q->text !!}
                                <a class="career-url" href="{{route('send-mail')}}">{{__('Mündəricət Göndər')}}</a>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
