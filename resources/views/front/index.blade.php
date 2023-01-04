@extends('layouts.app')

@section('content')
    @include('layouts.hero')

    <div class="container-fluid detailsSesction">
        <div class="container">
            <div class="row">
                <div class="detailsImage col-md-6">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-mdb-interval="5">
                                <img src="{{ asset('storage/sliding/ev-grid.png') }}" class="w-70px" />
                            </div>
                            <div class="carousel-item" data-mdb-interval="5">
                                <img src="{{ asset('storage/sliding/multigrid.png') }}" class="w-70px" />
                            </div>
                            <div class="carousel-item" data-mdb-interval="5">
                                <img src="{{ asset('storage/sliding/server-room.png') }}" class="w-70px" />
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 detailsInfo"
                    style="background-image: url('{{ asset('storage/sliding/imageseven.jpg') }}')">
                    <div>
                        <br>
                        <br>
                        <br>
                        <p class="mx-5 bg-dark px-2 pb-3" style="color:white;">
                            <br>
                            From designing to deploying and commissioning industry-specific solutions for
                            asset-intensive industries to ultra-efficient work processes,
                            NortFall Systems Limited is ready to tackle any challenge and put your business on the
                            path to success.
                        </p>
                        <br>
                        <p class="mx-5 bg-dark px-2 pb-3" style="color:white;">
                            <br>
                            Since 2020, Nortfall Systems Limited, is the leading distributor and reseller of
                            renewable energy solutions,
                            including Scada systems and an integrator of a wide range of telecommunications
                            solutions.
                            <br>
                            <br>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid works">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="work-2">
                        <div class="works-content">

                            <div class="work-1">
                                <div class="works-images">
                                    <img alt="" src="{{ asset('storage/sliding/imagethree.jpg') }}" />
                                </div>
                                <h2><strong>Systems automation</strong></h2>

                                <p class="pt-4">
                                    We help you find better ways of doing business by autotomizing
                                    systems to reduce Operational Costs and
                                    Increase Productivity. <a href="#">Read More &raquo; </a>
                                </p>
                                <br>
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
                                    clients. <br><a href="#">Read More &raquo; </a></p>
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
                                    save money for electricity consumers by using our energy storage systems.<br> <a
                                        href="#">Read More &raquo; </a></p>
                                <br>
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
                                    improve efficiency. <br><a href="#">Read More &raquo; </a></p>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--.row -->
        </div>
    </div>
    <!--.container .works -->

    <div class="container-fluid projects" id="our_projects">
        <!-- START THE FEATURETTES -->
        <div class="row featured-projects">
            <div class="col-md-12">
                <h2 class="featured-projects-heading">
                    OUR FEATURED PROJECTS
                </h2>
                <hr class="rf-line" />
            </div>

            <div class="col-md-6 featured-projects-images">
                <div class="featured-img">
                    <img alt="" src="{{ asset('storage/featured/imageone.jpg') }}" />
                </div>
            </div>

            <div class="col-md-6 featured-projects-images">
                <div class="featured-img">
                    <img alt="" src="{{ asset('storage/featured/imagetwo.jpg') }}" />
                </div>
            </div>

            <div>&nbsp;
                <h3 class="featured-projects-images-heading col-12" style="text-align:center">
                    SKID SOLUTION FOR PHOTOVOLTAIC SYSTEM
                </h3>

                <p style="text-align:center">
                    We are working on n. 12 transformation cabins STC-Skid 6MVA
                    30/0,8-0,8kV for a photovoltaic system in Spain.
                </p>
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
                            <img alt="" class="img-fluid"
                                src="{{ asset('storage/portfolio/imagethree.jpg') }}" />
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
                    <h2 class="featurette-heading">
                        Who we are
                    </h2>
                    <hr class="rf-line" />

                    <p class="lead">
                        Founded in 2020 by Telecommunications Engineer, NSL designs, deploys and
                        commissions industry-specific solutions for asset-intensive industries such as the
                        Energy, Telecoms, Utilities, Transportation and other market sectors. We help our
                        clients streamline their operations and businesses through our portfolio of solutions,
                        managed services, and consultancy practice.
                    </p>
                </div>

                <div class="col-md-5 order-md-1 featurette-img">
                    <img alt="" src="{{ asset('storage/featured/imageone.jpg') }}" />
                </div>
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

                <div class="col-md-5 featurette-img">
                    <img alt="" src="{{ asset('storage/featured/imagetwo.jpg') }}" />
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid blogs">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="blog-heading">Recent Blog</h2>
                    <hr class="rf-line" />
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-12">
                    <div class="blog-image">
                        <img src="{{ asset('storage/blog/image_1.jpg') }}" alt="">
                    </div>

                    <div class="blog-content">
                        <div class="meta mb-3">
                            <div><a href="#">Oct. 29, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div>
                                <a href="#" class="meta-chat">
                                    <i class="fa fa-envelope"></i> 3
                                </a>
                            </div>
                        </div>
                        <h3 class="blog-title mt-2">
                            <a href="#">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="blog-image">
                        <img src="{{ asset('storage/blog/image_2.jpg') }}" alt="">
                    </div>

                    <div class="blog-content">
                        <div class="meta mb-3">
                            <div><a href="#">Oct. 29, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><i class="fa fa-envelope"></i> 3</a></div>
                        </div>
                        <h3 class="blog-title mt-2">
                            <a href="#">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="blog-image">
                        <img src="{{ asset('storage/blog/image_3.jpg') }}" alt="">
                    </div>

                    <div class="blog-content">
                        <div class="meta mb-3">
                            <div><a href="#">Oct. 29, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><i class="fa fa-envelope"></i> 3</a></div>
                        </div>
                        <h3 class="blog-title mt-2">
                            <a href="#">Why Lead Generation is Key for Business Growth</a>
                        </h3>
                        <p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div> --}}

    <div class="container-fluid partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="partners-heading">Our Partners</h2>
                    <hr class="rf-line" />
                </div>
            </div>

            <div class="partners-logo owl-carousel owl-theme">
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/abb-logo.png') }}" alt=""/>
                </div>
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/ensmart.png') }}" class="ensmart-logo" alt=""/>
                </div>
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/hitach.png') }}" alt="Hitach">
                </div>
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/png-clipart-honeywell-nyse-hon-industry-s-c-a-m-e-sistemi-s-r-l-others-text-logo.png') }}"
                        alt=""/>
                </div>
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/schneider_electric_2007.svg.png') }}" alt=""/>
                </div>
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/siemens.png') }}" alt=""/>
                </div>
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/ge.png') }}" alt="" class="ge_logo"/>
                </div>
                <div class="partner-logo-item">
                    <img src="{{ asset('storage/partners/ziv.png') }}" alt=""/>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            const navEl = document.querySelector('.navbar');

            window.addEventListener('scroll', function() {
                if (window.scrollY >= 100) {
                    navEl.classList.add('navbar-scrolled')
                } else if (window.scrollY < 100) {
                    navEl.classList.remove('navbar-scrolled');
                }
            });
        });
    </script>
@endsection
