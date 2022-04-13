@extends('layouts.main')

@section('content')
    <h1 class="mb-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/posts">

                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif


                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search...." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>



    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top mt-3"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
                <small class="text-muted">
                    By <a href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                    <a
                        href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>{{ $posts[0]->created_at->diffForHumans() }}

                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

            </div>
        </div>


        @foreach ($posts->skip(1) as $post)
            <article class="mb-5 border-bottom">
                <h2>
                    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                </h2>
                {{-- <h5>By : Robi Setiawan {{ $post->author }}</h5> --}}
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-3"
                        alt="{{ $post->category->name }}">
                @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                        alt="{{ $post->category->name }}">
                @endif
                <h5>By <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                {!! $post->excerpt !!} {{-- menjalankan script html jg --}}

            </article>
        @endforeach
    @else
        <p class="text-center fs-4">No Posts Found</p>
    @endif

    {{ $posts->links() }}

@endsection
