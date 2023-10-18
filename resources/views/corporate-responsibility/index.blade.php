@extends('layouts.app')

@section('title', __('messages.corporate-responsibility'))

@section('content')
    <div class="outer">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('corporate-responsibility') }}
            </div>
           <!-- <div class="article-background my-4" style="background-image: url({{ asset('img/image-7.jpg') }})"></div>-->
            <div class="d-flex justify-content-center my-4">
                <img src="{{asset('/img/main/korp-sosial.svg')}}" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <p class="border-b-1" style="font-size: 30px">{{__('messages.corporate-responsibility')}}</p>
            </div>
            <div class="news-list">
                @foreach($data as $n)
                    <div class="news-item p-4">
                        <div style="margin-right: 48px;">
                            <img style="width: 300px" src="{{Voyager::image( $n->image ) }}" alt="">
                        </div>

                        <div class="d-flex flex-column justify-content-between">
                            <div>
                                <p class="name">{{$n->name}}</p>
                                <p class="text">{{\Illuminate\Support\Str::limit($n->title, 300)}}</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a class="news-detail" href="{{route('corporate-responsibility', $n->id)}}"><span>{{__('messages.Ətraflı oxu')}}</span></a>
                                <div class="d-flex align-items-center">
                                    <img class="" src="{{asset('img/date_icon.svg')}}" alt="">
                                    <span class="date">{{$n->created_at->format('d.m.Y')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{$data->links('paginate/custom')}}
        </div>
    </div>
@endsection
