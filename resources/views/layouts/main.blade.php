<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica - Blog</title>
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
            <nav class="navbar navbar-expand navbar-light d-flex justify-content-between">
                <div class="navbar-brand">
                    <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.svg') }}"
                            alt="Edica"></a>
                </div>
                <div class="navbar-collapse d-flex justify-content-end collapse" id="edicaMainNav">
                    <ul class="navbar-nav mt-lg-0 mt-2">
                        @guest
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-regular fa-bars fa-2x"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Route::has('login'))
                                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif

                                    @if (Route::has('register'))
                                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <i class="fas fa-chevron-down ml-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('personal.main.index') }}">Personal Area</a>

                                    @can('view', auth()->user())
                                        <a class="dropdown-item" href="{{ route('admin.main.index') }}">Admin Page</a>
                                    @endcan

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form class="d-none" id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </div>
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
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>

</html>
