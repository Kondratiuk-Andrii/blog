<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Edica :: Home</title>
    <link href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}"
          rel="stylesheet">
    <link href="{{ asset('assets/vendors/aos/aos.css') }}"
          rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}"
          rel="stylesheet">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
</head>

<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand"
                   href="index.html"><img src="{{ asset('assets/images/logo.svg') }}"
                         alt="Edica"></a>
                <button class="navbar-toggler d-lg-none"
                        data-toggle="collapse"
                        data-target="#edicaMainNav"
                        type="button"
                        aria-controls="collapsibleNavId"
                        aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                     id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link"
                               href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="{{ route('admin.index') }}">Admin Page</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                               id="blogDropdown"
                               data-toggle="dropdown"
                               href="#"
                               aria-haspopup="true"
                               aria-expanded="false">Blog</a>
                            <div class="dropdown-menu"
                                 aria-labelledby="blogDropdown">
                                <a class="dropdown-item"
                                   href="blog.html">Blog Archive</a>
                                <a class="dropdown-item"
                                   href="blog-single.html">Blog Post</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"
                               id="pagesDropdown"
                               data-toggle="dropdown"
                               href="#"
                               aria-haspopup="true"
                               aria-expanded="false">Pages</a>
                            <div class="dropdown-menu"
                                 aria-labelledby="pagesDropdown">
                                <a class="dropdown-item"
                                   href="404.html">404</a>
                                <a class="dropdown-item"
                                   href="coming-soon.html">Coming Soon</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="#"><span
                                      class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="#">Download</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner"
                 data-aos="fade-up">
                <h1 class="banner-title">Download it now.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"><img class="mr-2"
                             src="{{ asset('assets/images/apple@1x.svg') }}"
                             alt="ios"> App Store
                    </button>
                    <button class="btn btn-success"><img class="mr-2"
                             src="{{ asset('assets/images/android@1x.svg') }}"
                             alt="android"> Google Play
                    </button>
                </div>
                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or
                    service.</p>
            </div>
        </div>
    </section>
    <footer class="edica-footer"
            data-aos="fade-up">
        <div class="container">
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <a class="footer-brand-wrapper"
                       href="index.html">
                        <img src="{{ asset('assets/images/logo.svg') }}"
                             alt="edica logo">
                    </a>
                    <p class="contact-details">hello@edica.com</p>
                    <p class="contact-details">+23 3000 000 00</p>
                    <nav class="footer-social-links">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-behance"></i></a>
                        <a href="#!"><i class="fab fa-dribbble"></i></a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a class="nav-link"
                           href="#!">Company</a>
                        <a class="nav-link"
                           href="#!">Android App</a>
                        <a class="nav-link"
                           href="#!">ios App</a>
                        <a class="nav-link"
                           href="#!">Blog</a>
                        <a class="nav-link"
                           href="#!">Partners</a>
                        <a class="nav-link"
                           href="#!">Careers</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a class="nav-link"
                           href="#!">FAQ</a>
                        <a class="nav-link"
                           href="#!">Reporting</a>
                        <a class="nav-link"
                           href="#!">Block Storage</a>
                        <a class="nav-link"
                           href="#!">Tools & Integrations</a>
                        <a class="nav-link"
                           href="#!">API</a>
                        <a class="nav-link"
                           href="#!">Pricing</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <div class="dropdown footer-country-dropdown">
                        <button class="btn btn-secondary dropdown-toggle"
                                id="footerCountryDropdown"
                                data-toggle="dropdown"
                                type="button"
                                aria-haspopup="true"
                                aria-expanded="false">
                            <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i
                               class="fas fa-chevron-down ml-2"></i>
                        </button>
                        <div class="dropdown-menu"
                             aria-labelledby="footerCountryDropdown">
                            <button class="dropdown-item"
                                    href="#">
                                <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                            </button>
                            <button class="dropdown-item"
                                    href="#">
                                <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-content">
                <nav class="nav footer-bottom-nav">
                    <a href="#!">Privacy & Policy</a>
                    <a href="#!">Terms</a>
                    <a href="#!">Site Map</a>
                </nav>
                <p class="mb-0">© Edica. 2020 <a class="text-reset"
                       href="https://www.bootstrapdash.com"
                       target="_blank"
                       rel="noopener noreferrer">bootstrapdash</a> . All rights
                    reserved.</p>
            </div>
        </div>
    </footer>
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
