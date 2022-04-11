@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="...">
        <h5>By <a href="/authors/{{ $post->author->username }}">{{ $post->name }}</a> in <a
                href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        {!! $post->body !!} {{-- menjalankan script html jg --}}
    </article>
    <a href="/posts">kembali ke Post</a>
@endsection
