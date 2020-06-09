<li class="albums__item">
    <a class="albums__link" href="/album/{{ $album->name }}"><img class="albums__img"
                                                                  src="/img/albums/thumb/{{$album->image_url}}"
                                                                  alt="{{ $album->name }}" width="300"
                                                                  height="300"/>
        <h3 class="albums__author">{{ $album->authors->map(function ($it) {
                return $it->nickname;
            })->join(', ') }}</h3>
        <h2 class="albums__title">{{ $album->name }}</h2></a>
</li>
