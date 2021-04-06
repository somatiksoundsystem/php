<li class="grid__item">
    <a class="grid__link" href="/album/{{ $album->name }}"><img class="grid__img  grid__img--square"
                                                                  src="/img/albums/thumb/{{$album->image_url}}"
                                                                  alt="{{ $album->name }}" width="300"
                                                                  height="300"/>
        <h3 class="grid__subtitle">{{ $album->authors->map(function ($it) {
                return $it->nickname;
            })->join(', ') }}</h3>
        <h2 class="grid__title">{{ $album->name }}</h2></a>
</li>
