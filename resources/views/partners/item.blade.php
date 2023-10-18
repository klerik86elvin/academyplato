<div class="partner-item">
    <div>
        <p class="title">
            {{$partner->title}}
        </p>
    </div>
    <p class="text">{{$partner->text}}</p>
    <div class="partner-slider">
        @foreach($partner->slider as $s)
            <div class="slider-item">
                <img src="{{Voyager::image( $s->image ) }}" alt="">
            </div>
        @endforeach
    </div>
    <div class="mobile-partners-gallery">
        @foreach($partner->slider as $s)
            <div class="slider-item">
                <img src="{{Voyager::image( $s->image ) }}" alt="">
            </div>
        @endforeach
    </div>
</div>

