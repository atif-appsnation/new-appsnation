@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 all-traders-app">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-logo.webp')}}" class="logo" alt="All Traders App Logo">
                <div class="bread-titlev2 mt-4">
                    <h1>All Traders <br> Smarter Investing. <br> Simplified.</h1>
                    <p class="mt-3">A smart trading solution built for users at every stage of their investment journey.</p>
                    <p class="tagcase mt-3">Explore the Experience</p>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 hero-img">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-hero-img.webp')}}" class="img-fluid" alt="All Traders App" width="100%" height="100%">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->

<!-- Start All Traders Clients Overview Section -->
<section class="all-traders-clients-overview py-5" >
    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="box">
                    <h2>Client Overview</h2>
                    <p>All Traders, created as a mobile-first experience for modern investors, streamlines stock tracking, trading, and portfolio management for users at various experience levels. Whether you’re new to the market or an active day trader, the platform offers a simplified, focused environment to help users make smarter investment decisions.</p>
                    <div class="points-client-review mt-3">
                        <h5>Industry</h5>
                        <p>Fintech | Investment & Trading</p>
                    </div>
                    <div class="points-client-review">
                        <h5>Business Type</h5>
                        <p>Multi-role Trading Platform for Retail Investors</p>
                    </div>
                    <div class="points-client-review">
                        <h5>Services</h5>
                        <p>UX Research, UI Design, Design System, Mobile App UI (iOS + Android)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 client-overview-img mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-client-overview.webp')}}" alt="All Traders Problem Statement">
            </div>
        </div>
    </div>
</section>
<!-- End All Traders Clients Overview Section -->

<!-- Start All Trader Problem Section -->
<section class="all-traders-problem-section py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <img loading="lazy" src="{{ asset('images/case-studies/all-traders-app/all-traders-app-the-problem.webp') }}" alt="All Traders Problem Statement" class="img-fluid">
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-12">
                        <div class="all-traders-problem-box-wrapper">
                            <div class="all-traders-problem-box">
                                <h2 class="mb-3">The Problem</h2>
                                <ul class="all-traders-box list-unstyled mb-0">
                                    <li>
                                        <p>1</p> Too many steps to complete a trade
                                    </li>
                                    <li>
                                        <p>2</p> Lack of guidance for new investors
                                    </li>
                                    <li>
                                        <p>3</p> Scattered portfolio views
                                    </li>
                                    <li>
                                        <p>4</p> Cluttered UI and hidden actions
                                    </li>
                                </ul>
                            </div>
                            <div class="all-traders-problem-box mt-3 mt-md-0">
                                <h2 class="mb-3">The Solution</h2>
                                <ul class="all-traders-box list-unstyled mb-0">
                                    <li>
                                        <p>1</p> 1-click Quick Trade Interface
                                    </li>
                                    <li>
                                        <p>2</p> Smart onboarding & beginner flows
                                    </li>
                                    <li>
                                        <p>3</p> Unified portfolio with visual stats
                                    </li>
                                    <li>
                                        <p>4</p> Minimal interface with task clarity
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- All Trader Problem Section -->

<!-- Start Our Design Objectives Section -->
<section class="all-traders-app-design-objectives py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="mb-4 text-center">Our Design Objectives</h2>
                </div>
            </div>
        </div>
        <div class="central-line"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-box-group">
                    <div class="feature-box mb-4 left-item">
                        <h4 class="text-theme mb-3">User-Centric Interface</h4>
                        <p class="text-muted mb-0">Deliver a clean and intuitive UI tailored for both beginner investors and experienced traders.</p>
                    </div>
                    <div class="feature-box mb-4 left-item">
                        <h4 class="text-theme mb-3">Quick Trade Execution </h4>
                        <p class="text-muted mb-0">Enable users to place buy/sell orders in just a few simple taps, with real-time confirmation.</p>
                    </div>
                    <div class="feature-box mb-4 left-item">
                        <h4 class="text-theme mb-3">Simplified Onboarding</h4>
                        <p class="text-muted mb-0">Create a beginner-friendly onboarding process to guide first-time users through key features.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-column-wrapper">
                <div class="feature-box-group">
                    <div class="feature-box mb-4 right-item">
                        <h4 class="text-theme mb-3">Real-Time Market Integration</h4>
                        <p class="text-muted mb-0">Present beach content tailored to users' lifestyle preferences, including luxury, aesthetics, and social relevance.</p>
                    </div>
                    <div class="feature-box mb-4 right-item">
                        <h4 class="text-theme mb-3">Customizable Portfolio Dashboard</h4>
                        <p class="text-muted mb-0">Allow users to personalize their view of assets, gains, losses, and performance graphs.</p>
                    </div>
                    <div class="feature-box mb-0 right-item">
                        <h4 class="text-theme mb-3">Mobile-First Performance</h4>
                        <p class="text-muted mb-0">Optimize layout and flow for speed, responsiveness, and seamless use across all mobile devices. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Design Objectives Section -->

<!-- Start All Traders App Persona Section -->
<section class="py-5 all-traders-persona case-studies-persona">
    <div class="container">
        <div class="mb-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h3>USER PERSONA</h3>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-avatar-01.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Lauren Mitchell</h4>
                            <p>Full-Time Trader</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h4>Background</h3>
                            <p>
                                <b>Age</b>:36
                            </p>
                            <p>
                                <b>Marital status</b>: Married
                            </p>
                            <p>
                                <b>Location</b>: Chicago, Illinois
                            </p>
                            <p>
                                <b>Occupation</b>: Financial Analyst
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h5>Goals and Needs</h5>
                        <ul>
                            <li>A customizable dashboard with alerts and multi-asset support.</li>
                            <li>Performance analytics and portfolio tracking.</li>
                            <li>A clean UI with advanced tools (watchlists, limit orders, candlestick charts).</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h5>Pain Points / Challenges</h5>
                        <ul>
                            <li>Most trading apps are too slow during peak hours.</li>
                            <li>Needs app that cuts down extra steps when buying/selling.</li>
                            <li>Constantly toggling between apps to analyze and trade.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper mt-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                             <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-avatar-02.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Emily Carter</h4>
                            <p>University Student</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h4>Background</h3>
                            <p>
                                <b>Age</b>:22
                            </p>
                            <p>
                                <b>Marital status</b>: Single
                            </p>
                            <p>
                                <b>Location</b>: Austin, Texas
                            </p>
                            <p>
                                <b>Occupation</b>: –Finance Student
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h5>Goals and Needs</h3>
                        <ul>
                            <li>Wants to build confidence in investing through a guided, beginner-friendly approach..</li>
                            <li>Prefers a simple onboarding flow with progress tracking and helpful nudges.</li>
                            <li>Seeks curated recommendations from trending assets and starter portfolios.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h5>Pain Points / Challenges</h3>
                        <ul>
                            <li>Finds most trading UIs intimidating and full of jargon.</li>
                            <li>Worried about making accidental risky trades.</li>
                            <li>Has trouble keeping track of portfolio movement in basic apps.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End All Traders App Persona Section -->

<!-- Start Wireframes Section -->
<section class="all-traders-wireframe py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="mb-3">Wire Frame</h2>
                    <p class="mb-4">These low-fidelity wireframes establish the foundational layout and user flow of the app. They provide a clear vision of how users will interact with the core features, helping the team identify structural improvements early on. This step ensures functionality and usability are prioritized before moving into high-fidelity design stages.</p>
                    <h5 class="mb-4">App Wireframes</h5>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-4 col-lg-4 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-wireframe-01.webp')}}" alt="All Traders Wireframe 1" class="img-fluid rounded d-block mx-auto">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-wireframe-02.webp')}}" alt="All Traders Wireframe 2" class="img-fluid rounded d-block mx-auto">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-wireframe-03.webp')}}" alt="All Traders Wireframe 3" class="img-fluid rounded d-block mx-auto">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-wireframe-04.webp')}}" alt="All Traders Wireframe 4" class="img-fluid rounded d-block mx-auto">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-wireframe-05.webp')}}" alt="All Traders Wireframe 5" class="img-fluid rounded d-block mx-auto">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-wireframe-06.webp')}}" alt="All Traders Wireframe 6" class="img-fluid rounded d-block mx-auto">
            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->

<!-- Start All Traders App Challanges Section -->
<section class="py-5 all-traders-challanges">
    <div class="container">
         <div class="common-heading">
            <h2 class="my-5 text-center">Challenges Turned Into Winning Solutions</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="challenges-turned-box">
                     <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-challenge-01.webp')}}" alt="All Traders Wireframe 1" class="img-fluid rounded">
                    <div class="challenges-turned-contant">
                        <div class="challenges-turned-title">
                            <span>01</span>
                            <h4>Simplifying   Trade Execution</h4>
                        </div>
                        <p>We designed a 3-tap trade system that allows users to buy/sell  </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="challenges-turned-box">
                     <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-challenge-02.webp')}}" alt="All Traders Wireframe 1" class="img-fluid rounded">
                    <div class="challenges-turned-contant">
                        <div class="challenges-turned-title">
                            <span>02</span>
                            <h4>Making Market Data Digestible</h4>
                        </div>
                        <p>High-volume stock data turned into smart charts and alerts for better focus.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="challenges-turned-box">
                     <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-challenge-03.webp')}}" alt="All Traders Wireframe 1" class="img-fluid rounded">
                    <div class="challenges-turned-contant">
                        <div class="challenges-turned-title"> 
                            <span>03</span><h4>Guiding First-Time Investors</h4>
                        </div>
                        <p>Guided onboarding and in-app hints enabled confident investing.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End All Traders App Challanges Section -->

<!-- Start All Traders App Screens -->
<section class="py-5 all-traders-app-screens">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-01.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-02.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-03.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-04.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-05.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-06.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-07.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-08.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-09.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-10.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-11.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-12.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-13.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-14.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-15.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-app-screen-16.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- All Traders App Screens -->

<!-- Start Client Testimonial Section -->
<section class="py-5 all-traders-testimonial case-studies-testimonial">
    <div class="container">
        <div class="common-heading">
            <h2 class="py-5 text-center">Testing & User Feedback</h2>
        </div>
        <div class="text-center mb-3">
            <img loading="lazy" src="{{asset('images/case-studies/star.webp')}}" alt="Rating" class="star img-fluid">
        </div>
        <div class="row justify-content-center g-3">
            <div class="col-md-6 col-12">
                <div class="testimonial-card text-center p-4">
                    <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-avatar-02.webp')}}" alt="Liked" class="rounded-circle img-fluid mb-3">
                    <p class="testimonial-text text-center">It was my first time investing, and this app made me feel in control. </p>
                    <b class="d-block mt-3">Emily C., Student Investor</b>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="testimonial-card text-center p-4">
                    <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-avatar-01.webp')}}" alt="Liked" class="rounded-circle img-fluid mb-3">
                    <p class="testimonial-text text-center"> Smooth design. I can place a trade in under 10 seconds. </p>
                    <b class="d-block mt-3">Michael R., Active Day Trader </b>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Client Testimonial Section-->

<!-- Start Mockup Section -->
<section class=" py-5 all-traders-app-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/all-traders-app/all-traders-app-mockup.webp')}}" alt="All Traders App Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection 