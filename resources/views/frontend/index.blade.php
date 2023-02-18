@extends('frontend.frontend_master')


@section('content')

        <div class="container">
            
            <main>
                <div class="left">
                    <h1>Hey, I'm<br>
                        Lilyana Vankova
                    </h1>
                    <h2>
                        Web Developer with PHP & Laravel
                    </h2>
                    <div>
                        <button class="cv"><a id="pdf" href="{{ asset('frontend/assets/images/Lilyana-Vankova-Resume.pdf') }}" target="_fblank" download>Download Resume</a></button>
                        <button class="contact"><a href="#about-me">Get in Touch</a></button>
                    </div>
                </div>
                <div class="right">
                    <img src="{{ asset('frontend/assets/images/lv-welcome-img.gif') }}" alt="Lilyana Vankova">
                </div>
            </main>

            <!-- About me -->
            <section class="about-me">
                <h2 id="about-me" class="target">About me</h2>
                <p>I am a web developer in progress. <br> I have masters degree in "Business informatics with English" 
                    and а solid Applied Mahtematics background. <br> I love logic! Analytical thinking for me is a way of live. 
                    I build web applications with passion, dedication and precision.
                </p>
            </section>

            <!-- Contacts -->
            <section class="contacts" id="contacts">
                <div class="contact">
                    <div class="icon">
                        <i class="far fa-smile"></i>
                    </div>
                    <span class="title">My name</span>
                    <span class="description">Lilyana Vankova</span>
                </div>
                <div class="contact">
                    <div class="icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <span class="title"><a href="mailto:lilyah.boz@gmail.com">E-mail</a></span>            
                    <span class="description">lilyah.boz@gmail.com</span>            
                </div>
                <div class="contact">
                    <div class="icon">
                        <i class="fab fa-github"></i>
                    </div>
                    <span class="title"><a href="https://github.com/Lilyah" target="_fblank">GitHub</a></span>
                    <span class="description">@Lilyah</span>
                </div>
            </section>

            <!-- Projects -->
            <section class="projects">
                <h2 id="projects" class="target">Projects</h2>

                <div class="cards">
                
                    <div class="card">

                        <div class="img-project">
                            <a href="{{ url('/projects/mariosofa')}}">
                                <img src="{{ asset('frontend/assets/images/mariosofa-main.webp') }}" alt="Mario Sofa & Bed">
                            </a>
                        </div>

                        <div class="description-project">
                            <a href="{{ url('/projects/mariosofa')}}">
                                <span class="title-project">Mario Sofa & Bed</span>
                            </a>
                            <a href="{{ url('/projects/mariosofa')}}">
                                <span class="sub-title-project">A representative website for custom furnitures</span>
                            </a>
                            <a href="{{ url('/projects/mariosofa')}}">
                                <span class="tag-project">Technologies: Laravel 8, PHP 8, Bootstrap 4</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Skills -->
            <section class="skills">
                <h2 id="skills" class="target" >My skills</h2>
                <div class="cards-skills">
                    <div class="card-skill"><i class="fab fa-php"></i></div>
                    <div class="card-skill"><i class="fab fa-laravel"></i></div>
                    <div class="card-skill"><i class="fab fa-html5"></i></div>
                    <div class="card-skill"><i class="fab fa-css3-alt"></i></div>
                </div>
            </section>

        </div>


      
@endsection