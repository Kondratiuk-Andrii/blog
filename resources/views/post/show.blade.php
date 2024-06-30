@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">
                {{ $post->created_at->format('M d, Y. H:i') }} • {{ $post->category->title }}
            </p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img class="w-100" src="{{ asset('storage/' . $post->main_image) }}" alt="featured image">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        {!! $post->content !!}
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Related Posts</h2>
                        <div class="row">
                            @foreach ($relatedPosts as $relatedPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img class="post-thumbnail" src="{{ asset('storage/' . $relatedPost->preview_image) }}"
                                        alt="related post">
                                    <p class="post-category">{{ $relatedPost->category->title }}</p>
                                    <a class="post-permalink" href="{{ route('post.show', $relatedPost) }}">
                                        <h5 class="post-title">{{ $relatedPost->title }}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    @if ($post->comments->count() > 0)
                        <section class="comment-list mb-5" data-aos="fade-up">
                            <h2 class="section-title mb-4">
                                Comments ({{ $post->comments->count() }})
                            </h2>
                            @foreach ($post->comments as $comment)
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $comment->user->name }}</h5>
                                        <p class="card-text">{{ $comment->content }}</p>
                                        <p class="card-text text-muted">{{ $comment->dateAsCarbon->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    @endif
                    @auth()
                        <section class="comment-section">
                            <h2 class="section-title mb-5" data-aos="fade-up">Leave a Reply</h2>
                            <form action="{{ route('post.comment.store', $post) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12" data-aos="fade-up">
                                        <label class="sr-only" for="comment">Comment</label>
                                        <textarea class="form-control" id="comment" name="content" placeholder="Leave a Comment" rows="10"></textarea>
                                    </div>
                                    <input name="post_id" type="hidden" value="{{ $post->id }}">
                                    <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">
                                </div>
                                <div class="row">
                                    <div class="col-12" data-aos="fade-up">
                                        <input class="btn btn-warning" type="submit" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </section>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
