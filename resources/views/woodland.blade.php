@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 wood-land-app">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="bread-titlev2 mt-4 text-center text-lg-start">
                    <h1>Read. Listen. <br>
                        <span>Connect</span> — Your
                        <span>Personal Book </span>Space
                    </h1>
                    <p class="pt-3">Designed for <span>readers</span> who love to explore <br> <span>stories</span> in every form </p>
                    <p class="wood-land-button mt-3">Start Your Journey Today</p>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 wood-land-hero-img">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-hero.webp')}}" class="img-fluid w-75" alt="Wood Land App">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->

<!--Start Client Overview Section -->
<section class="wood-land-client-overview py-5 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto ">
                <div class="common-heading">
                    <h2>Client Overview</h1>
                    <p>Woodland is a concept-driven mobile app allowing users to dive into books through reading or listening — while connecting with fellow readers. The goal was to create a minimal, distraction-free design that feels personal, modern, and deeply immersive. </p>
                </div>
                <div class="left-border-client-overview">
                    <h6>Industry</h6>
                    <p>Digital Publishing & Audio Content</p>
                </div>
                <div class="left-border-client-overview">
                    <h6>App Type</h6>
                    <p>Concept Project for Book Lovers</p>
                </div>
                <div class="left-border-client-overview">
                    <h6>Services</h6>
                    <p>UX Research, UI Design, Design System, Mobile App UI (iOS + Android)</p>
                </div>
            </div>
            <div class="col-lg-6 mt-3 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-client-overview.webp')}}" alt="Client Overview" width="100%" height="100%">
            </div>
        </div>
    </div>
</section>
<!--End Client Overview Section -->

<!-- Start Development Challenges Section -->
<section class="wood-land-development-challenges wow fadeIn py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="common-heading development-challenges-left text-center text-lg-start">
                    <h2 class="mb-3">Development Challenges We Solved</h1>
                    <p>Woodland is a concept-driven mobile app allowing users to dive into books through reading or listening — while connecting with fellow readers. The goal was to create a minimal, distraction-free design that feels personal, modern, and deeply immersive. </p>
                </div>
            </div>
            <div class="col-lg-6 my-auto">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">01</div>
                            <h5>Royal Experience in Qatar</h5>
                            <p>Create Qatar's most luxurious ride-booking app with a smooth, stylish, and safe user experience.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">02</div>
                            <h5>Easy & Elegant Booking</h5>
                            <p>Simplify ride booking with an elegant UI, fast navigation, car previews, and real-time tracking.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">03</div>
                            <h5>VIP Features for Trust</h5>
                            <p>Build user trust with features like chauffeur info, elite car options, and premium support.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">04</div>
                            <h5>Premium User Support</h5>
                            <p>Deliver a top-tier support experience to enhance user satisfaction and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Development Whallenges Section -->

<!-- Start Wireframes Section -->
<section class="wood-land-wireframe py-5 wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="mb-3">Initial Wireframes & User Flow</h2>
                    <p class>We started with low-fidelity wireframes to plan the app’s structure, layout, and core functionality. This helped us visualize each step of the user journey — from browsing books to reading, listening, and chatting.</p>
                </div>
            </div>
        </div>
        <div class="row g-3 wireframe-gallery">
            <div class="col-6 col-md-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-wireframe-01.webp')}}" alt="Wood Land Wireframe" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-wireframe-02.webp')}}" alt="Wood Land Wireframe" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-wireframe-03.webp')}}" alt="Wood Land Wireframe" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-wireframe-04.webp')}}" alt="Wood Land Wireframe" class="wire-img">
            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->

<!--Start Project Goals section -->
<section class="py-5 wow fadeIn">
    <div class="container wood-land-project-goals">
        <div class="common-heading text-center">
            <h2 class="mb30">Project Goals</h2>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-project-goals.webp')}}" class="img-fluid" alt="Wood Land Projects Goal">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="row">
                    <div class="col-12 ">
                        <div class="info-card green">
                            <h5>Develop a personalized fitness app tailored to user preferences</h5>
                            <p>The main aim was to create a unique fitness solution that adapts to users' fitness levels, dietary restrictions, and individual goals while ensuring a smooth yet intuitive experience.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 ">
                        <div class="info-card black">
                            <h5>Develop a personalized fitness app tailored to user preferences</h5>
                            <p>The main aim was to create a unique fitness solution that adapts to users' fitness levels, dietary restrictions, and individual goals while ensuring a smooth yet intuitive experience.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12  ">
                        <div class="info-card green">
                            <h5>Develop a personalized fitness app tailored to user preferences</h5>
                            <p>The main aim was to create a unique fitness solution that adapts to users' fitness levels, dietary restrictions, and individual goals while ensuring a smooth yet intuitive experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Goals section -->

<!-- Start App Screens -->
<section class="wood-land-apps py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-01.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-02.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-03.webp')}}" alt="App Screens" class="img-fluid"
                >
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-04.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-05.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-06.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-07.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-08.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-09.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-10.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-11.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-screen-12.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End App Screens -->

<!-- Start Challenges & Iterations Section -->
<section class="wood-land-challenges wow fadeIn py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-4 mb-md-0">
                <div class="common-heading">
                    <h2 class="mb-3">Project Challenges <br> Woodland App</h2>
                    <p>Briefly explain the main design challenges faced during the process:</p>
                </div>
                <div class="challenges">
                    <ul>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/arrow.webp')}}" alt="vector">
                            <p>Keeping the design boujee but still very user-friendly</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/arrow.webp')}}" alt="vector">
                            <p>Ensuring a premium look without affecting loading speed</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/arrow.webp')}}" alt="vector">
                            <p>Making the interface consistent across all devices</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/arrow.webp')}}" alt="vector">
                            <p>Maintaining visual balance with vibrant brand colors</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                <img loading="lazy" class="img-fluid" src="{{asset('images/case-studies/wood-land-app/wood-land-app-project-challenges.webp')}}" alt="wood-land-challenges">
            </div>
        </div>
    </div>
</section>
<!-- End Challenges & Iterations Section -->

<!-- Start Tech Behind The App section -->
<section class="boujee-beachin-tech py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-4">Tech Behind the App</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Frontend</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/react-native.webp')}}" alt="React Native">
                    <p>React Native</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Backend</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/node-js.webp')}}" alt="Node.js">
                    <p>Node.js</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Database</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/mongo-db.webp')}}" alt="MongoDB">
                    <p>MongoDB</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Cloud</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/aws.webp')}}" alt="AWS">
                    <p>AWS</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Payments</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/payment.png')}}" alt="payment">
                    <p>Stripe • G Pay</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Tech Behind The App section -->

<!-- Start Design Goals Section -->
<section class="wood-land-designs py-5 wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="text-center  mb40">Building a Unified, Calming & <br> Connected Book Experience</h2>
                </div>
            </div>
        </div>
        <div class="wood-land-central-line"></div>
        <div class="row">
            <div class="col-lg-6 left-column-wood-land">
                <div class="wood-land-feature-box-group">
                    <div class="wood-land-feature-box mb-5 left-item">
                        <h4 class="wood-land-text-theme  mb-3">User-Centric Interface</h4>
                        <p class="text-muted mb-0">Create a clean, intuitive, and visually aesthetic interface that prioritizes user experience and ease of navigation.</p>
                    </div>
                    <div class="wood-land-feature-box mb-5 left-item">
                        <h4 class="wood-land-text-theme mb-3">Seamless Booking Flow</h4>
                        <p class="text-muted mb-0">Design a simple yet efficient beach reservation system that enables quick planning with minimal steps.</p>
                    </div>
                    <div class="wood-land-feature-box mb-5 left-item">
                        <h4 class="wood-land-text-theme mb-3">Community Interaction</h4>
                        <p class="text-muted mb-0">Allow users to upload photos, write reviews, and engage with a like-minded beachgoer community.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-column-wood-land">
                <div class="wood-land-feature-box-group">
                    <div class="wood-land-feature-box mb-5 right-item">
                        <h4 class="wood-land-text-theme mb-3">Lifestyle-Based Curation</h4>
                        <p class="text-muted mb-0">Present beach content tailored to users' lifestyle preferences, including luxury, aesthetics, and social relevance.</p>
                    </div>
                    <div class="wood-land-feature-box mb-5 right-item">
                        <h4 class="wood-land-text-theme mb-3">Style Guidance</h4>
                        <p class="text-muted mb-0">Offer fashion and beachwear recommendations aligned with trends, trip types, and destination vibes.</p>
                    </div>
                    <div class="wood-land-feature-box mb-5 right-item">
                        <h4 class="wood-land-text-theme mb-3">Visual Storytelling</h4>
                        <p class="text-muted mb-0">Use imagery, animations, and transitions to convey luxury and create emotional resonance.</p>
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
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/wood-land-app/wood-land-app-mockup.webp')}}" alt="Wood Land Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection