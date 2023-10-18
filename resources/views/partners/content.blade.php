@extends('layouts.app')

@section('title', __('messages.partners'))



@section('content')

    <div class="outer">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('partners') }}
            </div>
            <div class="d-flex justify-content-center my-4">
                <img src="{{asset('/img/main/partners.svg')}}" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <p class="border-b-1" style="font-size: 30px">{{__('PLATO Partners')}}</p>
            </div>
{{--            <div class="partners-background" style="background-image: url({{ asset('img/service_background.png') }}); background-repeat: no-repeat">--}}
{{--                <div class="partners-top-title">--}}
{{--                    <p>--}}
{{--                        {{ __('PLATO Partners') }}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="partners-content">
                @foreach($partners as $p)
                    @include('partners.item', ['partner' => $p])
                @endforeach
            </div>
        </div>
    </div>
@endsection
