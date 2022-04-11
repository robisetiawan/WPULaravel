@extends('layouts.main')

@section('content')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <small class="text-muted">
                    By <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a
                        href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}

                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

            </div>
        </div>
    @else
        <p class="text-center fs-4">No Posts Found</p>
    @endif

    @foreach ($posts->skip(1) as $post)
        <article class="mb-5 border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            {{-- <h5>By : Robi Setiawan {{ $post->author }}</h5> --}}
            <h5>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            {!! $post->excerpt !!} {{-- menjalankan script html jg --}}

        </article>
    @endforeach
@endsection
