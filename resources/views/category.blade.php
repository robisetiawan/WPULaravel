@extends('layouts.main')

@section('content')
    <h1 class="mb-5">Posts Category : {{ $category }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            {{-- <h5>By : Robi Setiawan {{ $post->author }}</h5> --}}
            <p>By : {{ $post->author }}"</p>
            {!! $post->excerpt !!} {{-- menjalankan script html jg --}}
        </article>
    @endforeach
@endsection
