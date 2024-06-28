<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>

<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo.svg') }}"
                        alt="Edica"></a>
                <button class="navbar-toggler d-lg-none" data-toggle="collapse" data-target="#edicaMainNav"
                    type="button" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="edicaMainNav">
                    <ul class="navbar-nav mt-lg-0 mx-auto mt-2">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                        </li>
                        @can('view', auth()->user())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.main.index') }}">Admin Page</a>
                            </li>
                        @endcan
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="blogDropdown" data-toggle="dropdown" href="#"
                                    aria-haspopup="true" aria-expanded="false">Blog</a>
                                <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                    <a class="dropdown-item" href="blog.html">Blog Archive</a>
                                    <a class="dropdown-item" href="blog-single.html">Blog Post</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="pagesDropdown" data-toggle="dropdown" href="#"
                                    aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                    <a class="dropdown-item" href="404.html">404</a>
                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('personal.main.index') }}">Personal Page</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mt-lg-0 mt-2">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')

        <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

    </html>
