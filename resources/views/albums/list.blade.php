@extends('layouts.app')

@section('content')
    <ul class="grid">
        @each('block.album', $albums, 'album')
    </ul>
@endsection
