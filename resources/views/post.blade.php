@extends('layouts.main')

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!} {{-- menjalankan script html jg --}}
    </article>
    <a href="/posts">kembali ke Post</a>
@endsection
