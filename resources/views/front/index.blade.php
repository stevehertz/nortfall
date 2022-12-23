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
    <link href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="/docs/5.0/assets/img/favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="/docs/5.0/assets/img/favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="/docs/5.0/assets/img/favicons/manifest.json" rel="manifest" />
    <link color="#7952b3" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" rel="mask-icon" />
    <link href="/docs/5.0/assets/img/favicons/favicon.ico" rel="icon" /><!-- fonts -->
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
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
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
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner mb-3">
                <div class="carousel-item active">
                    <img alt="" src="{{ asset('storage/sliding/datacenter2.jpg') }}" />
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mask mb-5 pb-4" style="background-color: rgba(0, 0, 0, 0.7);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white">
                                    <h1>
                                        <strong>
                                            Outsource business power needs by utilizing data centers.
                                        </strong>
                                    </h1>
                                    <p>
                                        We will help your business outsource its power needs to relieve you the
                                        stress of technological maintenance and instead focus on consumer
                                        objectives.
                                    </p>
                                    <p>
                                        <a class="btn btn-lg btn-primary"
                                            href="storage/sliding/IsolationTransformer EN.pdf">
                                            Learn more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="carousel-item mb-3">
                    <img alt="" src="{{ asset('storage/sliding/multigrid.jpg') }}" />
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mask mb-5 pb-4" style="background-color: rgba(0, 0, 0, 0.7);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white">
                                    <h1><strong>Multigrid System Solutions</strong></h1>
                                    <p>
                                        We ensure efficient Hybrid Power Conversion with System integrated with
                                        DC/DC converter
                                    </p>
                                    <p>
                                        <a class="btn btn-lg btn-primary" href="storage/sliding/MultiGrid-Hybrid.pdf">
                                            Learn more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item mb-3">
                    <img alt="" src="{{ asset('storage/sliding/ev.jpg') }}" />
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mask mb-5 pb-4" style="background-color: rgba(0, 0, 0, 0.7);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white">
                                    <h1><strong>EV Charging Solutions</strong></h1>
                                    <p>We ensure efficient EV Charging.</p>
                                    <p><a class="btn btn-lg btn-primary"
                                            href="storage/sliding/Ensmart Power EV Charging Power Module.pdf">Learn
                                            more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item mb-3">
                    <img alt="" src="{{ asset('storage/sliding/datacenter2.jpg') }}" />
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mask mb-5 pb-4" style="background-color: rgba(0, 0, 0, 0.7);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white">
                                    <h1><strong>Data Center Power BackUp Solutions</strong></h1>
                                    <p>
                                        We will help your business outsource its power needs to relieve you the
                                            stress of technological maintenance and instead focus on consumer
                                            objectives.
                                    </p>
                                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item mb-3">
                    <img alt="" src="{{ asset('storage/sliding/imageone.jpg') }}" />
                    <div class="carousel-caption d-none d-md-block">
                        <div class="mask mb-5 pb-4" style="background-color: rgba(0, 0, 0, 0.7);">
                            <div class="d-flex justify-content-center align-items-center h-100">
                                <div class="text-white">
                                    <h1><strong>Solar System Solutions</strong></h1>
                                    <p>
                                        We will help your business outsource its power needs to relieve you the
                                            stress of technological maintenance and instead focus on consumer
                                            objectives.
                                    </p>
                                    <p><a class="btn btn-lg btn-primary"
                                            href="storage/sliding/Solar - ENS72-18X-1.pdf">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container">
            <div class=" row">
                <div class="bg-image col-md-6">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-mdb-interval="5">
                                <img src="storage/sliding/ev.jpg" class="w-70px" style=" height:80vh"
                                    alt=" " />
                            </div>
                            <div class="carousel-item" data-mdb-interval="5">
                                <img src="storage/sliding/ups.png" class="w-70px" style=" height:80vh"
                                    alt=" " />
                            </div>
                            <div class="carousel-item" data-mdb-interval="5">
                                <img src="storage/sliding/data center-slide 3.png" class="w-70px"
                                    style=" height:80vh" alt=" " />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="bg-image col-md-6  mb-4  "
                    style="background-image: url('storage/sliding/imageseven.jpg'); height:100%; width:50%;">
                    <div>
                        <br>
                        <br>
                        <br>
                        <p class="mx-5 bg-dark px-2 pb-3" style="color:white;">
                                <br>From designing to deploying and commissioning industry-specific solutions for
                                asset-intensive industries to ultra-efficient work processes,
                                NortFall Systems Limited is ready to tackle any challenge and put your business on the
                                path to success.
                        </p>
                        <br>
                        <p class="mx-5 bg-dark px-2 pb-3" style="color:white;">
                                <br>Since 2020, Nortfall Systems Limited, is the leading distributor and reseller of
                                renewable energy solutions,
                                including Scada systems and an integrator of a wide range of telecommunications
                                solutions.
                        </h5>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>

            </div>
        </div>

        <div class="container works ">
            <div class="row">
                <div class="col-lg-3">
                    <div class="work-2">
                        <div class="works-content">

                            <div class="work-1">
                                <div class="works-images"><img alt=""
                                        src="{{ asset('storage/sliding/imagethree.jpg') }}" /></div>
                                <h2><strong>Systems automation</strong></h2>

                                <p class="pt-4">
                                    We help you find better ways of doing business by autotomizing
                                    systems to reduce Operational Costs and
                                    Increase Productivity
                                </p>
                                <p><a class="btn btn-secondary mb-3" href="#">View details &raquo; </a></p> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work-2">
                        <div class="works-content">

                            <div class="work-1">
                                <div class="works-images"><img alt=""
                                        src="{{ asset('storage/sliding/imageseven.jpg') }}" /></div>
                                <h2><strong>Telecommunication Systems</strong></h2>
                                <p class="pt-4">We will ensure efficient communication between the employees and
                                    clients.</p>
                                <p><a class="btn btn-secondary mb-4" href="#">View details &raquo; </a></p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work-2">
                        <div class="works-content">
                            <div class="work-1">
                                <div class="works-images"><img alt=""
                                        src="{{ asset('storage/heading/imagethree.jpg') }}" /></div>
                                <h2><strong>Low and Medium Energy Storage Systems </strong></h2>
                                <p class="pt-3">Save your business operational costs in powering the grid, as well as
                                    save money for electricity consumers by using our energy storage systems.</p>
                                <p><a class="btn btn-secondary" href="#">View details &raquo; </a></p> <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="work-2">
                        <div class="works-content">
                            <div class="work-1">
                                <div class="works-images"><img alt=""
                                        src="{{ asset('storage/sliding/datacenter.jpg') }}" /></div>
                                <h2><strong>Data Center Systems</strong></h2>
                                <p class="pt-4">Outsource your business power needs by utilizing our data centers and
                                    improve efficiency.</p>
                                <p><a class="btn btn-secondary" href="#">View details &raquo; </a></p> <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid projects" id="our_projects">
                <!-- START THE FEATURETTES -->
                <div class="row featured-projects">
                    <div class="col-md-12">
                        <h2 class="featured-projects-heading">OUR FEATURED <span class="text-muted">PROJECTS</span>
                        </h2>
                        <hr class="rf-line" />
                    </div>

                    <div class="col-md-6 featured-projects-images">
                        <div class="featured-img"><img alt=""
                                src="{{ asset('storage/featured/imageone.jpg') }}" /></div>
                    </div>

                    <div class="col-md-6 featured-projects-images">
                        <div class="featured-img"><img alt=""
                                src="{{ asset('storage/featured/imagetwo.jpg') }}" /></div>
                    </div>

                    <div>&nbsp;
                        <h3 class="featured-projects-images-heading col-12" style="text-align:center">SKID SOLUTION
                            FOR PHOTOVOLTAIC SYSTEM</h3>

                        <p style="text-align:center">We are working on n. 12 transformation cabins STC-Skid 6MVA
                            30/0,8-0,8kV for a photovoltaic system in Spain.</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid portfolio" id="portfolio">
                <div class="row portfolio-row">
                    <div class="col-md-12">
                        <h2 class="portfolio-heading">OUR PORTFOLIO</h2>
                        <hr class="rf-line" />
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="portfolio-item"><a href="#"><img alt="" class="img-fluid"
                                        src="{{ asset('storage/portfolio/imageone.jpg') }}" /> </a></div>
                        </div>

                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img alt="" class="img-fluid" src="{{ asset('storage/portfolio/imagetwo.jpg') }}" /> 
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img alt="" class="img-fluid" src="{{ asset('storage/portfolio/imagethree.jpg') }}" /> 
                                </a>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="portfolio-item"><a href="#"><img alt="" class="img-fluid"
                                        src="{{ asset('storage/portfolio/imagefour.jpg') }}" /> </a></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="portfolio-item"><a href="#"><img alt="" class="img-fluid"
                                        src="{{ asset('storage/portfolio/imagefive.jpg') }}" /> </a></div>
                        </div>

                        <div class="col-md-3">
                            <div class="portfolio-item"><a href="#"><img alt="" class="img-fluid"
                                        src="{{ asset('storage/portfolio/imagesix.jpg') }}" /> </a></div>
                        </div>

                        <div class="col-md-3">
                            <div class="portfolio-item"><a href="#"><img alt="" class="img-fluid"
                                        src="{{ asset('storage/portfolio/imageseven.jpg') }}" /> </a></div>
                        </div>

                        <div class="col-md-3">
                            <div class="portfolio-item"><a href="#"><img alt="" class="img-fluid"
                                        src="{{ asset('storage/portfolio/imageeight.jpg') }}" /> </a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid news" id="about_us">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="news-heading">ABOUT US</h2>
                        <hr class="rf-line" />
                    </div>
                </div>

                <div class="container">
                    <div class="row featurette">
                        <div class="col-md-7 order-md-2">
                            <h2 class="featurette-heading">Who are <span class="text-muted">we?</span></h2>
                            <hr class="rf-line" />

                            <p class="lead">
                                Founded in 2020 by Telecommunications Engineer, NSL designs, deploys and
                                commissions industry-specific solutions for asset-intensive industries such as the
                                Energy, Telecoms, Utilities, Transportation and other market sectors. We help our
                                clients streamline their operations and businesses through our portfolio of solutions,
                                managed services, and consultancy practice.
                            </p>
                        </div>

                        <div class="col-md-5 order-md-1 featurette-img"><img alt=""
                                src="{{ asset('storage/featured/imageone.jpg') }}" /></div>
                    </div>

                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading">What we do?</h2>
                            <hr class="rf-line" />

                            <p class="lead">We deliver a comprehensive scope and range of end-to-end industry
                                solutions that meet customer demand for streamlining operational and business
                                efficiencies.</p>

                            <p class="lead">Our technical capabilities, extensive experience and knowledge of the
                                market, as well as our partnership with global leaders in the areas of systems
                                automation, communication Systems, Low and Medium Energy Storage Systems, Data Center
                                Systems, CVT Transformers, Smart Miters, SCADA Systems infrastructure among other
                                emerging industry capabilities.</p>
                        </div>

                        <div class="col-md-5 featurette-img"><img alt=""
                                src="{{ asset('storage/featured/imagetwo.jpg') }}" /></div>
                    </div>
                </div>
            </div>
            &nbsp;


            <div class="container-fluid-contact mb-3" id="contact_us">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-4 p-5 bg-dark text-white rounded">

                            <h2 class="contact-heading" style="text-align:center">Contact US</h2>
                            <hr class="px-3" />
                            <div class="container pt-4" style="text-align:center">
                                <p>49 Riverside Drive-P.O Box 35509-00100<br />
                                    <strong>Nairobi, Kenya</strong><br />
                                    <strong>E-mail us on:</strong> inquiry@nortfallsystems.co.ke,
                                    info@nortfallsystems.co.ke
                                </p>

                                <ul>
                                    <li>Tel: +254 (020)8008081</li>
                                    <li>Mobile: +254 722345782, 733345782</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER -->

            <div class="container-fluid rf bg-dark">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-3 logo"><a class="rf-logo" href="{{ route('home') }}">NortFall System
                            </a>

                            <hr class="rf-line" />
                            <p>Nortfall Systems Limited, is a leading distributor and reseller of renewable energy
                                solutions, including Scada systems and an integrator of a wide range of
                                telecommunications solutions.</p>
                        </div>

                        <div class="col-lg-3">
                            <h5>About</h5>

                            <ul class="list-unstyled">
                                <li><a href="#">Team</a></li>

                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <h5>Social</h5>

                            <div class="row">
                                <div class="col-md-4">

                                </div>

                                <div class="col-md-4"></div>

                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="float-end"><a href="#">Back to top</a></p>

                            <p>&copy; 2DC3E22 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a
                                    href="#">Terms</a></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!--END FOOTER-->
    </main>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
