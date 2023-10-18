@extends('layouts.app')

@section('title', __('messages.etik-kodex'))



@section('content')

    <div class="outer">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('faq') }}
            </div>
            {{--<div class="etik-kodex-top-banner">
                <img style="width: 100%" src="{{asset('img/etik-kodex-top-banner.jpg')}}" alt="">
            </div>--}}
            <div class="d-flex justify-content-center my-4">
                <img src="{{asset('/img/question.svg')}}" alt="" style="width: 73px;background: linear-gradient(180deg, #FFFFFF -2.72%, #82CAE0 96%);
    border-radius: 50%;">
            </div>
            <div class="d-flex justify-content-center">
                <p class="border-b-1" style="font-size: 30px">{{__('FAQ')}}</p>
            </div>
            <div class="">
                <p class="" style="color: #2A3D52">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                    sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <div class="d-flex justify-content-center my-4">
                    <div style="width: 100px; height: 2px; background-color: #C4C4C4"></div>
                </div>
            </div>
            <div class="accordion mb-4" id="accordionExample">
                @foreach($data as $q)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{$q->id}}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$q->id}}" aria-controls="collapse-{{$q->id}}">
                                {{$q->question}}
                            </button>
                        </h2>
                        <div id="collapse-{{$q->id}}" class="accordion-collapse collapse" aria-labelledby="heading-{{$q->id}}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{$q->answer}}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


@endsection
