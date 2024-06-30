@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($data['posts'] as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                            </div>
                            <div class="d-flex justify-content-between mx-1">
                                <p class="blog-post-category">{{ $post->category->title }}</p>
                                @auth()
                                    <form action="{{ route('post.like.store', $post) }}" method="POST">
                                        @csrf
                                        <button class="like-button border-0 bg-transparent" type="submit">
                                            <i class="fa{{ auth()->user()->likedPosts->contains($post->id)? 's': 'r' }} fa-heart"
                                                role="button"></i>
                                        </button>
                                        {{ $post->likes_count }}
                                    </form>
                                @endauth
                                @guest()
                                    <div>
                                        <a class="like-button d-inline text-dark text-decoration-none border-0 bg-transparent"
                                            href="{{ route('login') }}">
                                            <i class="far fa-heart"></i>
                                        </a>
                                        {{ $post->likes_count }}
                                    </div>
                                @endguest
                            </div>
                            <a class="blog-post-permalink" href="{{ route('post.show', $post) }}">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="margin-top: -40px; margin-bottom: 40px">
                        {{ $data['posts']->links() }}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>
                        <div class="row blog-post-row">
                            @foreach ($data['randomPosts'] as $post)
                                <div class="col-md-6 blog-post" data-aos="fade-up">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                                    </div>
                                    <p class="blog-post-category">{{ $post->category->title }}</p>
                                    <a class="blog-post-permalink" href="{{ route('post.show', $post) }}">
                                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Most Liked Posts</h5>
                        <ul class="post-list">
                            @foreach ($data['topLikedPosts'] as $post)
                                <li class="post">
                                    <a class="post-permalink media pr-2" href="{{ route('post.show', $post) }}">
                                        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="blog post">
                                        <div class="media-body d-flex justify-content-between">
                                            <h6 class="post-title">{{ $post->title }}</h6>
                                            <h6 class="post-likes text-muted">
                                                <i class="fas fa-thumbs-up"></i>
                                                {{ $post->likes_count }}
                                            </h6>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
