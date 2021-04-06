@extends('layouts.app')

@section('content')
    <div class="item">
        <h1 class="item__title">{{ $album->name }}</h1>
        <img class="item__img  item__img--square"
             src="/img/albums/thumb/{{ $album->image_url }}"
             alt="{{ $album->name }}" width="300"
             height="300">
        <div class="item__social">
            @include('block.social_link', ['socialLinks' => $album->socialLinks])
        </div>
        <h2 class="item__name">
            @foreach($album->authors as $it)
                <a class="item__link"
                   href="/artist/{{ $it->nickname }}">{{ $it->nickname }}</a>@if(!$loop->last) @endif
            @endforeach
        </h2>
        <h2 class="item__subtitle">Release date: {{ $album->released_at }}</h2>
    </div>

    @includeWhen($album->player_url, 'block.player', ['playerUrl' => $album->player_url])
@endsection
