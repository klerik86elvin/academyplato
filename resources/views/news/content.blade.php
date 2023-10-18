@extends('layouts.app')

@section('title', __('messages.service'))



@section('content')

    <div class="outer news">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('news') }}
            </div>
            <div class="service-background" style="background-image: url({{ asset('img/service_background.png') }})">
                <div class="service-main-title">
                    {{ __('messages.news') }}
                </div>
                <div class="service-top-title">
                    {{__('messages.news-top-title')}}
                </div>
            </div>
            <div class="news-list">
                @foreach($news as $n)
                    <div class="news-item p-4">
                        <div style="margin-right: 48px;" class="">
                            <img style="width: 300px" src="{{Voyager::image( $n->image ) }}" alt="">
                        </div>
                        <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="name">{{$n->name}}</p>
                                    <p class="text">{{\Illuminate\Support\Str::limit($n->title, 300)}}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a class="news-detail" href="{{route('news', $n->id)}}"><span>{{__('messages.Ətraflı oxu')}}</span></a>
                                    <div class="d-flex align-items-center">
                                        <img class="" src="{{asset('img/date_icon.svg')}}" alt="">
                                        <span class="date">{{$n->created_at->format('d.m.Y')}}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                @endforeach
            </div>
            {{$news->links('paginate/custom')}}
        </div>
    </div>


@endsection
