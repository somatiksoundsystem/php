@extends('layouts.app')

@section('content')
    <ul class="albums">
        @each('block.album', $albums, 'album');
    </ul>
@endsection
