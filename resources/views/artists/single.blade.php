@extends('layouts.app')

@section('content')
    <div class="artist  item">
        <h1 class="item__title">{{ $artist->nickname }}</h1><img class="item__img  item__img--rect"
                                                                      src="/img/artists/thumb/{{ $artist->photo_url }}"
                                                                      alt="{{ $artist->nickname }}" width="300"
                                                                      height="400">
        <div class="item__social">
            @include('block.social_link', ['socialLinks' => $artist->socialLinks])
        </div>
        <h1 class="item__name">{{ $artist->name }}</h1>
        <p class="item__info">{{ $artist->info }}</p>
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
