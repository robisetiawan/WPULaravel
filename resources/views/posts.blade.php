@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Halaman Blog Posts</h1>
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
            </h2>
            {{-- <h5>By : Robi Setiawan {{ $post->author }}</h5> --}}
            <h5>By <a href="{{ $post->user->name }}">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
            {!! $post->excerpt !!} {{-- menjalankan script html jg --}}

        </article>
    @endforeach
@endsection
