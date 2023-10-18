@extends('layouts.app')

@section('title', __('messages.corporate-responsibility'))



@section('content')

    <div class="outer news">
        <div class="inner">
            <div class="breadcrumb">
                {{ Breadcrumbs::render('corporate-responsibility') }}
            </div>
            <div class="news-detail-background" style="background-image: url({{ asset('img/news-detail-body.jpg') }})">
                <div class="news-name">
                    <p>{{$data->name}}</p>
                </div>
            </div>
            <div class="mobile-news-name">
                <p>{{$data->name}}</p>
            </div>
            <div class="news-text my-4">
                {!! $data->text !!}
            </div>
        </div>
    </div>


@endsection
