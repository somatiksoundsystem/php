@extends('layouts.app')

@section('content')
    <div class="artist">
        <h1 class="artist__nickname">{{ $artist->nickname }}</h1><img class="artist__img"
                                                                      src="/img/artists/thumb/{{ $artist->photo_url }}"
                                                                      alt="{{ $artist->nickname }}" width="300"
                                                                      height="400">
        <div class="artist__social">
            @include('block.social_link', ['socialLinks' => $artist->socialLinks])
        </div>
        <h1 class="artist__name">{{ $artist->name }}</h1>
        <p class="artist__info">{{ $artist->info }}</p>
    </div>
    @includeWhen($artist->player_url, 'block.player', ['playerUrl' => $artist->player_url])
    <div class="artist__albums">
        <ul class="albums">
            @each('block.album', $artist->albums, 'album')
        </ul>
    </div>
    <p class="artist__schedule"></p>
    <div class="photos__carousel"></div>
@endsection
