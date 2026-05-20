@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 mike-mathis-app">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                    <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/logo.webp')}}" class="logo" alt="Mike Mathis Logo">
                    <h1 class="my-3">Mentoring <br> with the Mentees Space to Grow </h1>
                    <p> Appsnation undertook the development of “Mentoring with the Mentees,” a mobile-first platform designed to simplify and humanize the mentorship experience. The app connects aspiring learners with experienced mentors, enabling structured learning, real-time conversations, and measurable growth — all within an intuitive, transparent, and engaging interface.</p>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 mike-mathis-hero-img">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-hero-img.webp')}}" class="img-fluid" alt="Mike Mathis">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->
 
<!--Start UI/UX Design Phase Section -->
<section class="mike-mathis-design-phase py-5">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="">
                    <h2 class="mb-3">UI/UX Design Phase</h2>
                    <h5 class="mb-3">Prototyping</h5>
                    <p class="mb-3"> We started by creating low‑fidelity wireframes to outline the user flow for Mentoring with the Mentees, focusing on effortless navigation between the mentor search, chat, and progress tracking features. The goal was to design a minimal and intuitive interface that feels approachable for both students and professionals. The transition to high‑fidelity prototypes allowed us to implement a calm and professional color palette, readable typography, and clear visual hierarchy—reinforcing trust and ease of use throughout the mentorship experience.</p>
                    <h5 class="mb-3">Testing and Feedback</h5>
                    <p class="mb-3">User testing sessions were conducted with both mentors and mentees to evaluate usability and engagement. Feedback highlighted the value of streamlined communication tools and visual progress tracking. Based on insights, improvements were made to onboarding clarity, session scheduling, and dashboard accessibility, ensuring a smooth and motivating learning journey for every user.</p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 mike-mathis-design-phase-left-container">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/design-phase.webp')}}" class="img-fluid" alt="Design Phase">
            </div>
        </div>
    </div>
</section>
<!--End UI/UX Design Phase Section -->
 
<!-- Start Project Description Section -->
<section class="mike-mathis-project">
    <div class="container">
        <div class="row align-items-center text-start">
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-project-description.webp')}}" class="img-fluid" alt="Project">
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <h2>Project Description</h2>
                <p>Royal Ride began with a single realization: though Qatar was a country with the top transportation services, the digital experience was yet to be matched. Visitors in Doha, who are business people or VIP visitors, want to have a smooth, high-end and dependable experience when making a luxury ride. The popularity of reservation transfer system Qatar App keeps growing year after year, and the requests are to be addressed by the novel Qatar ride booking app. </p>
            </div>
        </div>
    </div>
</section>
<!-- End Project Description section -->

<!--Start Project Goals section-->
<section class="Objectives-section mike-mathis-Objectives mike-mathis-goals py-5">
    <div class="container">
        <h3 class="mb-4"> Project Goals</h3>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="card-number-circle">01</div>
                            <h5 class="card-title">Simplify Mentorship Access</h5>
                            <p class="card-description"> Create an easy-to-use digital platform that connects mentees with verified mentors from diverse fields, removing barriers of location and availability.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="card-number-circle">02</div>
                            <h5 class="card-title">Easy & Elegant Booking</h5>
                            <p class="card-description">Encourage long-term mentor–mentee relationships through personalized matching, transparent communication, and shared learning goals.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="card-number-circle">03</div>
                            <h5 class="card-title">Easy & Elegant Booking</h5>
                            <p class="card-description">Provide tools for progress tracking, milestone setting, and feedback to help both mentors and mentees monitor and measure development effectively.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-card">
                            <div class="card-number-circle">04</div>
                            <h5 class="card-title">Easy & Elegant Booking</h5>
                            <p class="card-description">Develop a supportive ecosystem where users can exchange insights, share achievements, and inspire continuous learning within an interactive community space.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center mb-5 mb-lg-0">
                <div class="phone-screen">
                    <img loading="lazy" src="{{ asset('images/case-studies/mike-mathis-app/mike-mathis-project-goals.webp') }}" alt="Project Goals">
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Goals section-->

<!-- Start Project Challenges Statement Section -->
<section class="Project-Challenges mike-mathis-challanges">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6 uiux-text-col">
                <h2>Project Challenges</h2>
                <p>Royal Ride began with a single realization: though Qatar was a country with the top transportation services, the digital experience was yet to be matched. Visitors in Doha, who are business people or VIP visitors, want to have a smooth, high-end and dependable experience when making a luxury ride. The popularity of reservation transfer system Qatar App keeps growing year after year, and the requests are to be addressed by the novel Qatar ride booking app.</p>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-project-challenges.webp')}}" class="img-fluid" alt="Project Challanges">
            </div>
        </div>
    </div>
</section>
<!-- End Project Challenges Statement section -->

<!-- Start User Research Section -->
<section class="user-research mike-mathis-user-research my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h2>User Research</h2>
                <ul class="user-research-ul">
                    <li>Conduct user interviews to learn about goals and frustrations</li>
                    <li>Run surveys to validate ideas and collect quantitative insights</li>
                    <li>Perform usability tests to see how users interact with designs</li>
                    <li>Map user journeys to identify key touchpoints and pain points</li>
                    <li>Analyze feedback to improve features, content, and flows</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-user-research.webp')}}" class="img-fluid" alt="User Research">
            </div>
        </div>
    </div>
</section>
<!-- End User Research Section -->

<!-- Start Wireframes Section -->
<section class="mike-mathis-wireframe py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="mb-3">Wire Frame</h2>
                    <p>We created low‑fidelity wireframes to map out the complete user flow of Mentoring with the Mentees, focusing on smooth navigation between mentor discovery, chat interaction, and progress tracking. These early sketches helped define a simple, goal‑oriented structure and ensured a clear, engaging experience for both mentors and mentees from the very start..</p>
                    <h4 class="mb-4">App Wireframes</h4>
                </div>
            </div>
        </div>
        <div class="row g-3 mike-mathis-wireframe-gallery">
            <div class="col-6 col-md-6 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-wireframe-01.webp')}}" alt="Mike Mathis Wireframe" class="wire-img">
            </div>
            <div class="col-6 col-md-6 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-wireframe-02.webp')}}" alt="Mike Mathis Wireframe" class="wire-img">
            </div>
            <div class="col-6 col-md-6 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-wireframe-03.webp')}}" alt="Mike Mathis Wireframe" class="wire-img">
            </div>
            <div class="col-6 col-md-6 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-wireframe-04.webp')}}" alt="Mike Mathis Wireframe" class="wire-img">
            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->
 
<!-- Start App Screens -->
<section class="boujee-beachin-apps mike-mathis-apps py-5">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-01.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-02.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-03.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-04.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-05.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-06.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-07.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-08.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-09.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-10.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-11.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-12.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-13.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-14.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-15.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-app-screen-16.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End App Screens -->

<!-- Start Mockup Section -->
<section class="py-5 boujee-beachin-mockup mike-mathis-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/mike-mathis-app/mike-mathis-mockup.webp')}}" alt="Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection