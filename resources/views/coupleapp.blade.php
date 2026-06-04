@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="couple-app-hero-section breadcrumb-areav2">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="bread-titlev2">
                    <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-logo.webp')}}" class="logo pb-3" alt="Couple App Logo">
                    <h1 class="pb-3">One App, for <br> Both of You </h1>
                    <p> Plan your dream wedding with ease track guests, manage tasks, and celebrate every big moment.</p>
                    <h4 class="couple-tag mt-3">Plan Your Dream Wedding Now </h4>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">     
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-hero.webp')}}" class="img-fluid couple-app-hero-img" alt="Couple App">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->

<!--Start Couple App Client Overview -->
<section class="couple-app-client-overview py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="common-heading mb-3">
                    <h2>Client Overview</h2>
                    <p>Wedding Couple App is a concept-based mobile platform designed to help modern couples plan, organize, and celebrate their journey together. From engagements to anniversaries, the app creates a romantic and emotionally meaningful experience that keeps couples connected.</p>
                </div>
                <div class="left-border-client-overview">
                    <h6>Industry</h6>
                    <p>Wedding Planning, Event Management, Couple Lifestyle</p>
                </div>
                <div class="left-border-client-overview">
                    <h6>App Type</h6>
                    <p>Concept Project for Couples & Wedding Planners</p>
                </div>
                <div class="left-border-client-overview">
                    <h6>Services</h6>
                    <p>UX Research, UI Design, Design System, Mobile App UI (iOS + Android)</p>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-client-overview.webp')}}" alt="Couple App Client Overview" width="100%" height="100%" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!--End Couple App Client Overview -->

<!-- Start Couple App Key Problems -->
<section class="couple-app-key-problems case-studies-problem py-5">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-6 my-lg-auto">
                <div class="common-heading">
                    <h2 class="mb-3">Key Problems</h2>
                    <p>Couples often face stress while planning weddings due to scattered tools, lack of personalization, and emotional disconnect. Most apps focus heavily on logistics, leaving out the shared experience and romantic details that make the journey memorable. </p>
                </div>
            </div>
            <div class="col-lg-6 my-auto">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">01</div>
                            <p>Couples manage wedding tasks across different apps, leading to confusion.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">02</div>
                            <p>No shared platform for couples to plan and communicate emotionally.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">03</div>
                            <p>Existing apps lack personal touches like love notes and countdowns.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card">
                            <div class="card-number-circle">04</div>
                            <p>Planning tools focus on logistics, not the couple’s overall experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Couple App Key Problems -->

<!-- Start Couple App Challenges & Iterations -->
<section class="couple-app-challenges case-studies-challanges py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6">
                <div class="common-heading">
                    <h2>How Our <span>App</span> Thoughtfully Solves These <span>Problems</span></h2>
                </div>
                <div class="challenges">
                    <ul>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-arrow.webp')}}" alt="vector">
                            <p>A single platform to manage everything: guests, tasks, notes, and scheduling.</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-arrow.webp')}}" alt="vector">
                            <p>Shared couple dashboard for real-time planning and emotional connection.</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-arrow.webp')}}" alt="vector">
                            <p>Built-in features like love notes, countdowns, and memory timelines.</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-arrow.webp')}}" alt="vector">
                            <p>Romantic, stress-free UX designed around the couple, not just logistics.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" class="img-fluid" src="{{asset('images/case-studies/Couple-app/couple-app-app-thoughtfully.webp')}}" alt="Couple App Challanges">
            </div>
        </div>
    </div>
</section>
<!-- End Couple App Challenges & Iterations -->

<!-- Start Couple App Wireframes -->
<section class="couple-app-wireframe py-5">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="mb-3">Wireframes</h2>
                    <p class="mb-5">Low-fidelity wireframes were created to visualize the app's structure, user journey, and screen flow—laying the foundation for a smooth and intuitive design experience.</p>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-wireframe-01.webp')}}" alt="Couple App Wireframe" class="img-fluid">
            </div>
            
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-wireframe-02.webp')}}" alt="Couple App Wireframe" class="img-fluid">
            </div>
            
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-wireframe-03.webp')}}" alt="Couple App Wireframe" class="img-fluid">
            </div>
            
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-wireframe-04.webp')}}" alt="Couple App Wireframe" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Couple App Wireframes -->

<!-- Start Couple App Design Goals -->
<section class="couple-app-designs py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="text-center mb-5">Designing a Thoughtful & Emotion Centered <span> Wedding App </span>Experience</h2>
                </div>
            </div>
        </div>
        <div class="central-line"></div>
        <div class="row">
            <div class="col-lg-6 left-column-wrapper">
                <div class="feature-box-group">
                    <div class="feature-box mb-3 left-item">
                        <h4 class="text-theme mb-3">Discovery & Research</h4>
                        <p class="mb-0">We identified key challenges couples face during wedding planning and analyzed apps that lacked emotional personalization and shared control.</p>
                    </div>
                    <div class="feature-box mb-3 left-item">
                        <h4 class="text-theme mb-3">Wireframes & User Flows</h4>
                        <p class="mb-0">Built low-fidelity wireframes and mapped out journeys  from onboarding to guest tracking, task lists, and personal note sharing.</p>
                    </div>
                    <div class="feature-box mb-3 mb-lg-0 left-item">
                        <h4 class="text-theme mb-3">Feature Integration</h4>
                        <p class="mb-0">Integrated custom features such as love notes, countdowns, budget tracking, and shared to-do lists  all designed to support joint experiences.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-column-wrapper">
                <div class="feature-box-group">
                    <div class="feature-box mb-3 right-item">
                        <h4 class="text-theme mb-3">Defining User Personas</h4>
                        <p class="mb-0">Created realistic personas representing engaged and married couples to better understand their daily rituals, planning behavior, and emotional needs.</p>
                    </div>
                    <div class="feature-box mb-3 right-item">
                        <h4 class="text-theme mb-3">UI Design Direction</h4>
                        <p class="mb-0">Developed a soft, romantic UI using soothing tones and curved elements to create a sense of warmth, love, and clarity throughout the experience.</p>
                    </div>
                    <div class="feature-box mb-0 right-item">
                        <h4 class="text-theme mb-3">Prototyping & Handoff</h4>
                        <p class="mb-0">Created interactive prototypes using Figma, tested with simulated users, and refined interactions for a smooth and emotionally intuitive final product.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Couple App Design Goals -->
 
<!-- Start Couple App Behind The App -->
<section class="couple-app-tech py-5">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-4">Tools and Technologies Used</h2>
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
<!--End Couple App Tech Behind the App -->

<!-- Start Couple App App Screens -->
<section class="couple-app-screen py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="mb-4 text-center">App Screens</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-01.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-02.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-03.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-04.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-05.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-06.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-07.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-08.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-09.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-10.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-11.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-12.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-13.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-14.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-15.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-app-screen-16.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Couple App App Screens -->

<!-- Start Couple App User Persona -->
<section class="couple-persona-section case-studies-persona py-5">
    <div class="container">
        <div class="persona-card-main">
            <div class="row persona-top-heading">
                <div class="col-md-12 text-center">
                    <h2 class="mb-4">USER PERSONA</h2>
                </div> 
            </div>
        </div>
        <div class="container persona-section-wrapper mb-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-avatar-01.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Emma</h4>
                            <p>Freelance Graphic Designer </p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h4>Background</h4>
                            <p>
                                <b>Age</b>: 28
                            </p>
                            <p>
                                <b>Marital status</b>: Engaged
                            </p>
                            <p>
                                <b>Occupation</b>: Designer
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h4>Goals and Needs</h4>
                        <ul>
                            <li>Centralized wedding planning platform for checklists, budgeting, and event coordination</li>
                            <li>Aesthetic and modern interface that suits her design sensibility</li>
                            <li>Emotional features like love notes, countdowns, and photo gallery</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h4>Challenges</h4>
                        <ul>
                            <li>Finds using multiple tools (notes, chats, Google Sheets) scattered and time-consuming</li>
                            <li>Difficult to share progress or planning details with her partner in real-time</li>
                            <li>Overwhelmed by too many features in complex wedding planning tools</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-avatar-02.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>David</h4>
                            <p>Software Engineer</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h4>Background</h4>
                            <p>
                                <b>Age</b>: 30
                            </p>
                            <p>
                                <b>Marital status</b>: Engaged
                            </p>
                            <p>
                                <b>Occupation</b>: Startup dev.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h4>Goals and Needs</h4>
                        <ul>
                            <li>Simplified task tracking and deadlines to stay on top of wedding prep</li>
                            <li>A shared space with his partner to coordinate budget, checklist, and vendors</li>
                            <li> Clear visual dashboard for event timelines and pending tasks</li>
                            <li>Discreet and non-distracting design that's easy to use across devices</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h4>Pain Points / Challenges</h4>
                        <ul>
                            <li>ItGets overwhelmed with too many tools/documents for various wedding tasks</li>
                            <li>Not always able to track what’s done or left when partner handles most of the planning</li>
                            <li>Complex apps or too many features lead to confusion and missed tasks</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Couple App User Persona -->

<!-- Start Couple App UI/UX Design Phase -->
<section class="couple-app-uiux-section-wrapper py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="mb-3">UI/UX Design Phase</h2>
                <h5 class="mb-3">Prototyping</h5>
                <p class="mb-3">We started by creating low-fidelity wireframes to map out the couple’s journey — from onboarding and event planning to shared tasks and emotional connection features. These early sketches helped define a simple, structured flow tailored to couples’ real needs.</p>
                <h5 class="mb-3">Testing and Feedback</h5>
                <p>User testing sessions were conducted with both mentors and mentees to evaluate usability and engagement. Feedback highlighted the value of streamlined communication tools and visual progress tracking.  </p>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{ asset('images/case-studies/couple-app/couple-app-wedding-concept.webp') }}" alt="Couple App UI/UX Design" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Couple App UI/UX Design Phase -->

<!-- Start Couple App Vendor App -->
<section class="couple-app-vendor py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="mb-4 text-center">Vendor App</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-vendor-app-01.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-vendor-app-02.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-vendor-app-03.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-vendor-app-04.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Couple App Vendor App -->

<!-- Start Couple App Mockup -->
<section class="py-5 couple-app-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/couple-app/couple-app-mockup.webp')}}" alt="Couple App Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup -->
@endsection