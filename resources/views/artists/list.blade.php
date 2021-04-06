@extends('layouts.app')

@section('content')
    <ul class="grid">
        @foreach($artists as $artist)
            <li class="grid__item"><a class="grid__link" href="/artist/{{ $artist->id }}">
                    <img class="grid__img  grid__img--rect"
                         src="/img/artists/thumb/{{ $artist->photo_url }}"
                         alt="{{ $artist->name }}"
                         width="300" height="400">
                    <h2 class="grid__title">{{ $artist->name }}</h2></a>
            </li>
        @endforeach
    </ul>
@endsection
