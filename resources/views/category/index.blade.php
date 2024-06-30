@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Categories</h1>
            <section class="featured-posts-section d-flex align-items-center justify-content-center">
                <ul class="list-group list-group-flush">
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            <a class="text-dark text-decoration-none" href="{{ route('category.post.index', $category) }}">
                                {{ $category->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </section>
        </div>
    </main>
@endsection
