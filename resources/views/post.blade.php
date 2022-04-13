@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="...">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3"
                alt="...">
        @endif
        <h5>By <a href="/posts?author={{ $post->author->username }}">{{ $post->name }}</a> in <a
                href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>

        {!! $post->body !!} {{-- menjalankan script html jg --}}
    </article>
    <a href="/posts">kembali ke Post</a>
@endsection
