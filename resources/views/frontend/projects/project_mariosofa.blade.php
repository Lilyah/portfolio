@extends('frontend.frontend_master')


@section('content')

<div class="container">
            
            <main>
                <div class="left">
                    <h1>Mario Sofa & Bed</h1>
                    <p class="subtitle">A representative Dynamic website for custom furnitures</p>
                    <h2>
                    Technologies: Laravel 8, PHP 8, Bootstrap 4
                    </h2>
                    <div>
                        <button class="live-website"><a href="{{ url('https://mariosofa.com/') }}">View Live site</a></button>
                    </div>
                </div>
                <div class="right mb-5">
                    <img src="{{ asset('frontend/assets/images/mariosofa-main-own-page.webp') }}" alt="Mario Sofa & Bed Project main image">
                </div>
            </main>

            <!-- About the project -->
            <section class="projects">
                <h2 id="projects" class="target">About the Project</h2>

                <p>Representative website of an upholstered furniture manufacturer. The purpose of the project is to promote the services of a company "М дизайн 2019 - ЕООД" also known as "Марио 81" and "Mario Sofa & Bed".
                    <br>
                The project contains two parts - User side & Admin Panel. The purpose of the Admin Panel is to manipulate all the content of the User side.
                </p>                
            </section>


            <!-- About the design -->
            <section class="projects">
                <h2 id="projects" class="target">The Design</h2>

                <!-- Color Palette -->
                <div class="d-flex flex-row flex-wrap justify-content-between">

                    <div class="col-xl-5 text-center mb-5 mb-lg-0">
                        <img class="img-fluid float-xl-right float-sm-none" src="{{ asset('frontend/assets/images/mariosofa-colorpalette.webp') }}" alt="Mario Sofa & Bed Project Color Palette">
                    </div>

                    <div class="col-xl-5 align-self-center">
                        <h2 class="text-left mb-1">
                            Color Palette
                        </h2>
                        <p class="text-left cs-fs-5">
                            The color palette is decided in classical premium tones that bring a luxurious feeling.
                        </p>

                    </div>

                </div>

                <!-- Fonts -->
                <div class="d-flex flex-row flex-wrap justify-content-between mt-5">

                    <div class="col-xl-5 text-center mb-5 mb-lg-0">
                        <img class="img-fluid float-xl-right float-sm-none" src="{{ asset('frontend/assets/images/mariosofa-fonts.webp') }}" alt="Mario Sofa & Bed Project Fonts">
                    </div>

                    <div class="col-xl-5 align-self-center">
                        <h2 class="text-left mb-1">
                            Fonts
                        </h2>
                        <p class="text-left cs-fs-5">
                            The fonts are classic, simple and clean. With only two fonts and combinations of size, weight and style is achieved a harmony.
                        </p>
                    </div>

                </div>

            </section>


            <!-- About the design -->
            <section class="projects">
                <h2 id="projects" class="target">Features</h2>

                <ul>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Swiperjs - Slider on the index page</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Mailgun - Email service</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Sitemap</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Google ReCaptcha</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Jetstream - Liveware register system for Admin Panel</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> ToastrJS - Pop-up messages for Admin panel</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Summernote - WYSIWYG edito for Admin panel</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Venobox - jQuery Plugin type Lightbox</samp></li>
                    <li><i class="fas fa-angle-double-right" style="color:gray"></i><samp> Google map integration</samp></li>
                </ul>

                <!-- Admin Panel Images -->
                <div class="d-flex flex-row flex-wrap justify-content-between mt-5">


                    <!-- First/Left image -->
                    <div class="col-xl-4 text-center mb-5 mb-lg-0 p-2">
                        <img class="img-fluid float-xl-right float-sm-none" data-bs-toggle="modal" data-bs-target="#firstModal" src="{{ asset('frontend/assets/images/mariosofa-admin1.webp') }}" alt="Mario Sofa & Bed Project Admin Panel">                    
                    </div>

                    <!-- Modal for the second image -->
                    <div class="modal fade" id="firstModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid float-xl-right float-sm-none" src="{{ asset('frontend/assets/images/mariosofa-admin1.webp') }}" alt="Mario Sofa & Bed Project Admin Panel">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second/Center image -->
                    <div class="col-xl-4 text-center mb-5 mb-lg-0 p-2">
                        <img class="img-fluid float-xl-right float-sm-none" data-bs-toggle="modal" data-bs-target="#secondModal" src="{{ asset('frontend/assets/images/mariosofa-admin2.webp') }}" alt="Mario Sofa & Bed Project Admin Panel">                    
                    </div>

                    <!-- Modal for the second image -->
                    <div class="modal fade" id="secondModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid float-xl-right float-sm-none" src="{{ asset('frontend/assets/images/mariosofa-admin2.webp') }}" alt="Mario Sofa & Bed Project Admin Panel">
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Third/Right image -->
                    <div class="col-xl-4 text-center mb-5 mb-lg-0 p-2">
                        <img class="img-fluid float-xl-right float-sm-none" data-bs-toggle="modal" data-bs-target="#thirdModal" src="{{ asset('frontend/assets/images/mariosofa-admin3.webp') }}" alt="Mario Sofa & Bed Project Admin Panel">                    
                    </div>

                    <!-- Modal for the first image -->
                    <div class="modal fade" id="thirdModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid float-xl-right float-sm-none" src="{{ asset('frontend/assets/images/mariosofa-admin3.webp') }}" alt="Mario Sofa & Bed Project Admin Panel">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </section>

</div>

      
@endsection