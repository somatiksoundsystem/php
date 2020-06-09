@extends('layouts.app')

@section('content')
    <div class="album">
        <h1 class="album__name">{{ $album->name }}</h1>
        <img class="album__img"
             src="/img/albums/thumb/{{ $album->image_url }}"
             alt="{{ $album->name }}" width="300"
             height="300">
        <div class="album__social">
            @foreach(\Somatik\Model\SocialLink::VALUES as $linkName)
                @includeWhen($album->socialLinks[$linkName], 'block.social_link', ['name' => $linkName, 'value' => $album->socialLinks[$linkName]])
            @endforeach
        </div>
        <h2 class="album__author">
            @foreach($album->authors as $it)
                <a class="albums__link"
                   href="/artist/{{ $it->nickname }}">{{ $it->nickname }}</a>@if(!$loop->last) @endif
            @endforeach
        </h2>
        <h2 class="album__release-date">Release date: {{ $album->released_at }}</h2>
    </div>

    @includeWhen($album->player_url, 'block.player', ['playerUrl' => $album->player_url])
@endsection
