@extends('layouts.app')

@section('title', __('messages.service'))



@section('content')



<div class="outer">
    <div class="inner">
        <div class="breadcrumb">
            {{ Breadcrumbs::render('article-category') }}
        </div>
        <div class="service-background" style="background-image: url({{ asset('img/service_background.png') }})">

            <div class="service-main-title">
                {{ __('messages.article-category') }}
            </div>
            <div class="service-top-title">
                {{__('messages.article-top-title')}}
            </div>
        </div>
        {{--<div class="article-background" style="background-image: url({{ asset('img/article-bg.jpg') }})">
        </div>--}}

{{--        <div class="category-hr">--}}
{{--            <hr>--}}
{{--        </div>--}}
        <div class="article-categories">
            @foreach ($categories as $category)
{{--                <a href="{{ route('article-category', ['id'=>$category->id]) }}" class="article-category {{$category->id == request()->segment(2) ? "active": ""}}">--}}
{{--                    <span class="category-image">--}}
{{--                        <img src="{{ Voyager::image( $category->preview_image ) }}" alt="">--}}
{{--                    </span>--}}
{{--                    <span class="category-name">--}}
{{--                        {{ $category->category_name }}--}}
{{--                    </span>--}}
{{--                </a>--}}
                <a href="{{ route('article-category', ['id'=>$category->id]) }}" class="article-category {{request()->segment(2) == $category->id ? "active" : ""}}">
                    <div>
                        <div class="category-image">
                            <img class="" src="{{ Voyager::image( $category->preview_image ) }}" alt="">
                        </div>
                        <p class="category-name">
                            {{ $category->category_name }}
                        </p>
                    </div>
                    <div class="bottom-icon">
                        <img src="{{asset('img/arrow-bottom.svg')}}" alt="">
                    </div>
                </a>
            @endforeach
             <a href="{{ route('article-category', ['id'=>$category->id]) }}" class="article-category">
                 <div>
                     <div class="category-image">
                         <img class="" src="{{asset('img/other.png')}}" alt="">
                     </div>
                     <p class="category-name">
                         {{ __('messages.various') }}
                     </p>
                 </div>
                 <div class="bottom-icon">
                     <img src="{{asset('img/arrow-bottom.svg')}}" alt="">
                 </div>
            </a>
        </div>
        <div class="separator mx-auto my-30"></div>
        <div class="articles">
            @foreach ($articles as $article)
                <div class="article">
                    <div class="article-image">
                        <img src="{{ Voyager::image( $article->preview_image ) }}" alt="">
                    </div>
                    <div class="article-preview-content">
                        <div class="article-name">
                            {{ $article->name }}
                        </div>
                        <div class="article-content">
                            {!! mb_substr(strip_tags($article->text), 0, 300) !!}...
                        </div>
                        <div class="article-button-date">
                            <a href="{{ route('article', ['slug'=> $article->slug]) }}" class="news-detail">
                                {{ __('messages.read_more') }}
                            </a>
                            <div class="article-date">
                                {{ \Carbon\Carbon::createFromDate($article->created_at)->format('d-m-Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $articles->links('paginate/custom') }}
        </div>

    </div>
</div>

@endsection
