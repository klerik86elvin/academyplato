@extends('layouts.app')

@section('title', __('messages.service'))



@section('content')

<div class="outer">
    <div class="inner">
        <div class="breadcrumb">
            {{ Breadcrumbs::render('month-workers') }}
        </div>
        <div class="d-flex justify-content-center my-4">
            <img src="{{asset('/img/main/teams.svg')}}" alt="">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <p class="border-b-1" style="font-size: 30px">{{__('messages.month-workers')}}</p>
        </div>
       {{-- <div class="worker-month-background" style="background-image: url({{ asset('img/worker-month-background.jpg') }})"></div>--}}
{{--        <div class=" d-flex flex-column mt-4 align-items-center">--}}
{{--            <img height="100" width="100" src="{{asset('img/main/teams.svg')}}" alt="">--}}
{{--            <p class="worker-month-title">{{__('messages.month-workers')}}</p>--}}
{{--            <hr style="width: 22.5rem;--}}
{{--                        background: #C4C4C4;">--}}
{{--        </div>--}}
        <div class="worker-month-list">
            @for ($i=1; $i <= 12; $i++ )
                <a
                @if(in_array($i, $workers))
                	href="/worker-month/{{ $i }}"
                @endif
                 class="worker-month-item" >
                    <div class="worker-month-image">
                        <img src="{{asset('img/mouths-icons')}}/{{$i}}.svg" alt="">
                        <p class="worker-month-title">{{__('messages.month_'.$i)}}</p>
                    </div>
                </a>
            @endfor

        </div>
    </div>
</div>


@endsection
