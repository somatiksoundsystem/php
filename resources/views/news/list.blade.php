@extends('layouts.app')

@section('content')
    <ul class="news">
        @foreach($news as $post)
            <li class="news__item">
                <header class="news__header">
                    <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="news__img">
                    <span class="news__date">{{ $post->created_at }}</span>
                </header>
                <div class="news__main">
                    @if($post->title)
                        <h2 class="news__title">
                            {{ $post->title }}
                        </h2>
                    @endif
                    <div class="news__text">
                        {!! \App\Markdown::toHTML($post->text) !!}
                    </div>
                    @if($post->extra)
                        <div class="news__links">
                            {!! \App\Markdown::toHTML($post->extra) !!}
                        </div>
                    @endif
                </div>
            </li>
    @endforeach
@endsection
