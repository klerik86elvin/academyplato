@extends('layouts.app')

@section('title', __('messages.service'))
@section('content')
<div class="outer">
    <div class="inner">
        <div class="breadcrumb">
            {{ Breadcrumbs::render('ambassador') }}
        </div>
        <div class="d-flex justify-content-center my-4">
            <img src="{{asset('/img/main/ambassador.svg')}}" alt="">
        </div>
        <div class="d-flex justify-content-center">
            <p class="border-b-1" style="font-size: 30px">{{__('PLATO Ambassador')}}</p>
        </div>
{{--        <div class="service-background" style="background-image: url({{ asset('img/service_background.png') }})">--}}
{{--            <div class="ambassador-top-title">--}}
{{--                {{ __('messages.ambassador') }}--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="ambassador-list">
            @foreach($data as $d)
                @include('ambassador.item', ['d' => $d])
            @endforeach
        </div>
</div>
</div>
@endsection
