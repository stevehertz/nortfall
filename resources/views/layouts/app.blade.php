<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo D3.84.0">
    <meta name="theme-color" content="#003366">
    <title>Nortfall Systems</title>
    <!-- Favicons -->
    <link href="{{ asset('storage/logo/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ asset('storage/logo/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png" />
    <link href="{{ asset('storage/logo/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png" />
    <link href="{{ asset('storage/logo/favicon.ico') }}" rel="icon" /><!-- fonts -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('fonts/Ionicons/css/ionicons.min.css') }}" rel="stylesheet" /><!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />

    <style>
        .dropbtn {

            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>

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
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio </a>
                        </li>
                        <div class="dropdown">
                            <li class="nav-item dropbtn"><a class="nav-link" href="#products">Products <i
                                        class="fa fa-caret-down"></i></a></li>
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
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>
