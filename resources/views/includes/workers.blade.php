<div class="outer plato-team">
    <div class="inner">
        <div class="plato-team-block">
            <h2 class="tac uppercase">{{__('PLATO Komandası')}}</h2>
            <div class="worker-list worker-slider">
                @foreach ($workers as $worker)
                    <a class="plato-worker">
                        <div style="display: flex;justify-content: center">
                            <span class="plato-worker-img" style="background-image: url({{ Voyager::image( $worker->picture ) }});"></span>
                        </div>
                        <span class="plato-worker-text">
                            {{ $worker->name." ".$worker->surname }}
                        </span>
                        <span class="plato-worker-position">
                            {{ $worker->position }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
