@extends('dashboard.layouts.main')

@section('content')
    <article>
        <h2 class="mb-3">{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="btn btn-success">Back to my Posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm ('Are You sure')">Delete <span
                    data-feather="x-circle"></span></button>
        </form>

        @if ($post->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3" alt="...">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top mt-3"
                alt="...">
        @endif
        {!! $post->body !!} {{-- menjalankan script html jg --}}
    </article>
    <a href="/dashboard/posts" class="btn btn-primary mt-2 mb-5">kembali ke Post</a>
@endsection
