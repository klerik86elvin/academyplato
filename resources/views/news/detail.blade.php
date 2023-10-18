@extends('layouts.app')

@section('title', __('messages.service'))



@section('content')

    <div class="outer news">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('news') }}
            </div>
            <div class="news-detail-background" style="background-image: url({{ asset('img/news-detail-body.jpg') }})">
                <div class="news-name">
                    <p>{{$news->name}}</p>
                </div>
            </div>
            <div class="mobile-news-name">
                <p>{{$news->name}}</p>
            </div>
            <div class="news-text my-4">
                {!! $news->text !!}
            </div>
        </div>
    </div>


@endsection
