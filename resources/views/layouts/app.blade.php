<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo D3.84.0">
    <meta name="theme-color" content="#003366">
    <title>{{ config('app.name') }}</title>
    <!-- Favicons -->
    <link href="{{ asset('storage/logo/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ asset('storage/logo/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png" />
    <link href="{{ asset('storage/logo/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png" />
    <link href="{{ asset('storage/logo/favicon.ico') }}" rel="icon" /><!-- fonts -->
    <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('fonts/Ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('storage/logo/logo.png') }}" alt="Nortfall Systems">
                </a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a aria-current="page" class="nav-link active" href="#">Home </a>
                        </li>
                        <div class="dropdown">
                            <li class="nav-item">
                                <a class="nav-link dropbtn" href="#">
                                    Services <i class="fa fa-caret-down"></i>
                                </a>
                            </li>
                            <div class="mega-menu">
                                <div class="row">

                                    <div class="col-md-4">
                                        <h4>Category 1</h4>
                                        <a href="#">Operations Performance Management</a>
                                        <a href="#">Digital Worker Solutions</a>
                                        <a href="#">Remote Operations</a>
                                        <a href="#">Grid Analytics</a>
                                        <a href="#">Spares and repairs</a>
                                        <a href="#">Multibrand Maintenance</a>                                        </a>
                                        <a href="#">Asset optimization</a>
                                    </div>

                                    <div class="col-md-4">
                                        <h4>Category 2</h4>
                                        <a href="#">Power Audit Services</a>
                                        <a href="#">Oil and Gas Security Systems Audit</a>
                                        <a href="#">Building Technology Services</a>
                                        <a href="#">Digital Enterprise Services</a>
                                        <a href="#">Data Analytics</a>
                                        <a href="#">Digital Consulting & Solutions</a>
                                        <a href="#">Mobility Services</a>
                                    </div>

                                    <div class="col-md-4">
                                        <h4>Category 3</h4>
                                        <a href="#">Technology Accelerator</a>
                                        <a href="#">Building Management System Services</a>
                                        <a href="#">Critical Power and Cooling Services</a>
                                        <a href="#">Electrical Distribution Services</a>
                                        <a href="#">Industrial Automation Services</a>
                                        <a href="#">Safety Services</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio </a>
                        </li>

                        <div class="dropdown">
                            <li class="nav-item dropbtn">
                                <a class="nav-link" href="#products">
                                    Products <i class="fa fa-caret-down"></i>
                                </a>
                            </li>
                            <div class="dropdown-content">
                                <a href="storage/sliding/Ensmart Power EV Charging Power Module.pdf">EV Charging
                                    Power</a>
                                <a href="storage/sliding/Solar - ENS72-18X-1.pdf">Solar ENS72</a>
                                <a href="storage/sliding/MultiGrid-Hybrid.pdf">Multigrid Systems</a>
                                <a href="storage/sliding/IsolationTransformer EN.pdf">Isolation Transformer</a>
                            </div>
                        </div>
                        <li class="nav-item"><a class="nav-link" href="#about_us">About Us </a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact_us">Contact Us </a></li>
                    </ul>
                    <button aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarCollapse" data-bs-toggle="collapse"
                        type="button"></button>

                </div>
            </div>
        </nav>
    </header>

    <main>

        @yield('content')

        @include('layouts.footer')

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
