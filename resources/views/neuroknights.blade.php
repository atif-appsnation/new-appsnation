@extends('app.main')
@section('content')

        <!--Breadcrumb Area-->
        <section class="breadcrumb-areav2 neuro-knight-app">
            @if ($errors->has('g-recaptcha-response'))
            <div class="alert alert-danger">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </div>
            @endif

            <div class="container wow fadeIn " data-wow-delay="0.2s">
                <div class="row">
                    <div class="col-lg-6 my-lg-auto">
                        <div class="bread-titlev2 mt-4">
                            <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-logo.webp')}}" class="img-fluid logo" alt="Neuro Knights logo">
                            <h1>
                                <span>NeuroKnights</span> — Your Safe<br>
                                Space to Grow
                            </h1>
                            <p class="pt-3">
                                <span> NeuroKnights </span> is an inclusive mental wellness app designed for neurodiverse teens, combining therapeutic tools, mood tracking, journaling, and engaging brain games in a safe and accessible environment. The platform empowers young users to build emotional awareness, express themselves freely, and grow through playful, interactive experiences—while giving parents insight and support through secure progress tracking and guided features.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0 neuro-night-hero-img">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-header-image.webp')}}" class="img-fluid" alt="Neuro Knights">
                    </div>
                </div>
            </div>

        </section>
        <!-- End Breadcrumb Area-->

        <!--Start project idea Section -->
        <section class="py-5 wow fadeIn" data-wow-delay="0.4s">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12 my-lg-auto">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-project-idea-img.webp')}}" class="img-fluid" alt="">
                    </div>
                </div>
        </section>
        <!--End  project idea Section -->

        <!-- Start Problem Statement section -->
        <section class="my-5 NeuroKnights-problem">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 ">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-problem-img-1.webp')}}" class="img-fluid" alt="Problem Statement">
                    </div>
                    <div class="col-md-12 col-lg-6 neuro-knight-right">
                        <div class="common-heading">
                            <h2 class="mb-3"><span>Problem </span> Statement</h2>
                            <p >Teens with neurodiverse conditions often struggle to find safe, supportive online communities. Existing apps either lack empathy, structure, or accessibility. NeuroKnights fills this gap with an inclusive, therapeutic experience.</p>
                        </div>
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-problem-img-2.webp')}}" class="img-fluid" alt="Problem Statement">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Problem Statement section -->

        <!--Start Project Goals section-->
        <section class="my-5">
            <div class="container">
                 <div class="common-heading">
                    <h2 class="mb-3">Project Goals</h2>       
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="neuro-night-project-card my-3">
                            <div class="card-number-circle">01</div>
                            <p> Create a safe, sensory-friendly environment for neurodiverse teens to feel comfortable and supported.</p>
                        </div>
                    </div>
                    <div class="col-md-12 offset-lg-4 col-lg-8  ">
                        <div class="neuro-night-project-card my-3">
                            <div class="card-number-circle">02</div>
                            <p> Integrate gamified therapy tools and wellness trackers that keep users engaged in their mental health journey.</p>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8">
                        <div class="neuro-night-project-card my-3">
                            <div class="card-number-circle">03</div>
                            <p>Build a safe and sensory-friendly space for neurodiverse teens</p>
                        </div>
                    </div>
                    <div class="col-md-12 offset-lg-4 col-lg-8  ">
                        <div class="neuro-night-project-card my-3">
                            <div class="card-number-circle">04</div>
                            <p> Build a safe and sensory-friendly space for neurodiverse teens</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Project Goals section-->
        
        <!-- Start Wireframes Section -->
        <section class="wood-land-wireframe py-5  wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="common-heading text-center">
                            <h2 class="mb-3">What Did We Design?</h2>
                            <p>We started with low-fidelity wireframes to plan the structure, flow, and functionality of NeuroKnights. These initial sketches helped us shape the user journey for both kids and parents — focusing on clarity, safety, and ease of use.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-3 wireframe-gallery">
                    <div class="col-6 col-md-6 col-xl-3">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-wireframe-1.webp')}}" alt="Neuro Knights Wireframe" class="wire-img">
                    </div>
                    <div class="col-6 col-md-6 col-xl-3">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-wireframe-2.webp')}}" alt="Neuro Knights Wireframe" class="wire-img">
                    </div>
                    <div class="col-6 col-md-6 col-xl-3">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-wireframe-3.webp')}}" alt="Neuro Knights Wireframe" class="wire-img">
                    </div>
                    <div class="col-6 col-md-6 col-xl-3">
                        <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wireframe-wood-land-1.webp')}}" alt="Neuro Knights Wireframe" class="wire-img">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Wireframes Section -->

         <!-- Start Design Goals Section -->
        <section class="neuro-night-designs py-5 wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="common-heading">
                            <h2 class="text-center  mb40">The Journey From Vision to Reality<br>NeuroKnights Edition </h2>
                        </div>
                    </div>
                </div>

                <div class="neuro-night-central-line"></div>

                <div class="row">
                    <div class="col-lg-6 left-column-neuro-night">
                        <div class="neuro-night-feature-box-group">
                            <div class="neuro-night-feature-box mb-5 left-item">
                                <h4 class="neuro-night-text-theme  mb-3">Understanding the Challenge</h4>
                                <p class="  mb-0">We began by identifying the needs of neurodiverse teens and their caregivers—focusing on emotional safety, accessibility, and the importance of self-expression through therapeutic tools.</p>
                            </div>
                            <div class="neuro-night-feature-box mb-5 left-item">
                                <h4 class="neuro-night-text-theme mb-3">Mapping the User Journey</h4>
                                <p class="  mb-0">We crafted multiple user flows tailored to both kids and parents, ensuring that onboarding, tracking, and interaction remained intuitive, engaging, and calm.</p>
                            </div>
                            <div class="neuro-night-feature-box mb-5 left-item">
                                <h4 class="neuro-night-text-theme mb-3">Defining Core Features</h4>
                                <p class="  mb-0">Based on research and expert input, we prioritized features like mood journaling, brain games, assessments, and a parent dashboard—ensuring value for all user roles.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 right-column-neuro-night">
                        <div class="neuro-night-feature-box-group">
                            <div class="neuro-night-feature-box mb-5 right-item">
                                <h4 class="neuro-night-text-theme mb-3">Wireframing & UI/UX Design</h4>
                                <p class="  mb-0">Low-fidelity wireframes were created to test structure before shaping a fun, accessible, and adventure-themed interface that stayed aligned with calming, inclusive design.</p>
                            </div>
                            <div class="neuro-night-feature-box mb-5 right-item">
                                <h4 class="neuro-night-text-theme mb-3">Design Iteration & Testing</h4>
                                <p class="  mb-0">Offer fashion and beachwear recommendations aligned with trends, trip types, and destination vibes.</p>
                            </div>
                            <div class="neuro-night-feature-box mb-5 right-item">
                                <h4 class="neuro-night-text-theme mb-3">Polishing & Delivery</h4>
                                <p class=" mb-0">Final high-fidelity screens, icons, and interaction flows were prepared. The result was an empowering, gamified mental wellness app designed for emotional growth and safe engagement.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Design Goals Section -->

        <!-- Start Mockup Section -->
        <section class="py-5 wow fadeIn boujee-beachin-mockup">
            <div class="container">
                <div class="common-heading text-center">
                    <h2 class="mb-3">Key Features of NeuroKnights</h2>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-key-features.webp')}}" alt="wood-land morkup" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mockup Section -->

        <!-- Start App Screens -->
        <section class="boujee-beachin-apps py-5 wow fadeIn">
            <div class="container">
                <div class="common-heading">
                    <h2 class="mb-3 text-center">App Screens</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-1.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-2.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-3.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-4.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-5.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-6.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-7.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-8.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-9.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-10.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-11.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-12.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-13.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-14.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-15.webp')}}" alt="App Screens" class="img-fluid"></div>
                    <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-16.webp')}}" alt="App Screens" class="img-fluid"></div>
                </div>
            </div>
        </section>
        <!-- End App Screens -->

        <!-- Start Tech Stack Used section -->
        <section class="my-5">
            <div class="container ">
                <div class="common-heading">
                    <h2 class="text-center  mb40">Tech Stack Used</h2>
                </div>
                <div class="Tech-Stack-section">
                    <div class="row">
                        <div class="col-12 d-flex">
                            <div class="tech-img-box d-flex">
                                <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/figma.webp')}}" class="img-fluid" alt="neuro knight project-goals">
                                <div class="common-heading">
                                    <h6 class="mb4">Tools & Testing</h6>
                                    <p>Figma, Unity Game Engine, FlayFab</p>
                                </div>
                            </div>
                            <div class="tech-img-box d-flex">
                                <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/unity.webp')}}" class="img-fluid" alt="neuro knight project-goals">
                                <div class="common-heading">
                                    <h6 class="mb4">Tools & Testing</h6>
                                    <p>Figma, Unity Game Engine, FlayFab</p>
                                </div>
                            </div>
                            <div class="tech-img-box d-flex">
                                <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/flutter.webp')}}" class="img-fluid" alt="neuro knight project-goals">
                                <div class="common-heading">
                                    <h6 class="mb4">Tools & Testing</h6>
                                    <p>Figma, Unity Game Engine, FlayFab</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Tech Stack Used section -->

        <!-- Start Mockup Section -->
        <section class="py-5 wow fadeIn boujee-beachin-mockup">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img loading="lazy" src="{{asset('images/case-studies/neuro-knights-app/neuro-knights-app-morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Mockup Section -->
@endsection