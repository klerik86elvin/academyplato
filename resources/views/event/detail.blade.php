@extends('layouts.app')

@section('title', __('messages.service'))



@section('content')



<div class="outer">
    <div class="inner">
        <div class="breadcrumb">
            {{ Breadcrumbs::render('event-category') }}
        </div>
        <div class="article-body">
            <div class="article-body-picture">
                <img src="{{ Voyager::image( $event->preview_image ) }}" alt="">
                <div class="article-body-title">
                    {{ $event->event_name }}
                </div>
            </div>
            <div class="article-inner-body">
                {!! $event->text !!}
            </div>

            <div class="article-detail-bottom">
                <div class="article-detail-date">
                    {{ $event->event_date }} - {{ $event->event_end_date }}
                </div>

                <a href="https://www.facebook.com/dialog/share?app_id=592715725648401&display=popup&href={{URL::current()}}
                &redirect_uri={{URL::current()}}">
                    {{ __('messages.share') }}
                </a>

            </div>
            
        </div>

    </div>
</div>

@endsection
<script>

    
</script>