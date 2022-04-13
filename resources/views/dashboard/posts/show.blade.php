@extends('dashboard.layouts.main')

@section('content')
    <article>
        <h2 class="mb-3">{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="btn btn-success">Back to my Posts</a>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="...">
        {!! $post->body !!} {{-- menjalankan script html jg --}}
    </article>
    <a href="/posts">kembali ke Post</a>
@endsection
