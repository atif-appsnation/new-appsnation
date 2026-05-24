@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 boujee-beachin-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
			<img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/header-logo.webp')}}" class="boujee-beachin-logo" alt="Boujee Beachin App Logo">
				<div class="bread-titlev2 mt-4">
					<h1>
                        <span>100+</span> Goals Achieved,
                        <span>1,000+</span> Active Users, and
                        <span>2</span> Magnificent Years of Innovation.
                    </h1>
					<p class="pt-3">Discover Rise Up Kings, Where Personal Development Meets Community!</p>
                    <p class="case-tag mt-3">Case Study</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/header-web.webp')}}" class="img-fluid" alt="Boujee Beachin App" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb Area-->

<!-- Start Problem Section -->
<section class="boujee-beachin-problem py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/problem-statement.webp')}}" alt="Boujee Beachin Problem Statement" width="100%" height="100%">
			</div>
            <div class="col-lg-6 my-lg-auto">
                <div class="common-heading text-center text-lg-start">
					<h2 class="mb-3">Problem Statement</h1>
					<p>Many beachgoers struggle with finding aesthetically pleasing, exclusive, and well-reviewed beach experiences. Standard apps don’t cater to the trendy, upscale, Instagram-worthy lifestyle many modern beach lovers seek.</p>
                    <p>Boujee Beachin’ aims to provide curated, premium beach experience discovery with features like reservations, fashion tips, and local recommendations.</p>
				</div>
            </div>
		</div>
	</div>
</section>
<!-- End Problem Section -->

<!-- Start Objective & Goal Section -->
<section class="boujee-beachin-objectives wow fadeIn py-5">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8 my-auto">
                <div class="common-heading text-center text-lg-start">
                    <h2 class="my-4">Objectives & Goals</h2>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="info-card">
                            <div class="card-number-circle">01</div>
                            <h5>Royal Experience in Qatar</h5>
                            <p>Create Qatar's most luxurious ride-booking app with a smooth, stylish, and safe user experience.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="info-card">
                            <div class="card-number-circle">02</div>
                            <h5>Easy & Elegant Booking</h5>
                            <p>Simplify ride booking with an elegant UI, fast navigation, car previews, and real-time tracking.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="info-card">
                            <div class="card-number-circle">03</div>
                            <h5>VIP Features for Trust</h5>
                            <p>Build user trust with features like chauffeur info, elite car options, and premium support.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="info-card">
                            <div class="card-number-circle">04</div>
                            <h5>Premium User Support</h5>
                            <p>Deliver a top-tier support experience to enhance user satisfaction and reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-objectives.webp')}}" alt="Boujee Beachin Objectives" class="img-fluid d-block mx-auto">
            </div>
        </div>
    </div>
</section>
<!-- End Objectives & Goals Section -->

<!-- Start Design Goals Section -->
<section class="boujee-beachin-designs py-5 wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center text-lg-start">
                    <h2 class="mb-3">Design Goals</h2>
                </div>
            </div>
        </div>
        <div class="central-line"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-box-group">
                    <div class="feature-box mb-3 left-item">
                        <h4 class="text-theme-blue mb-3">User-Centric Interface</h4>
                        <p class="text-muted mb-0">Create a clean, intuitive, and visually aesthetic interface that prioritizes user experience and ease of navigation.</p>
                    </div>
                    <div class="feature-box mb-3 left-item">
                        <h4 class="text-theme-blue mb-3">Seamless Booking Flow</h4>
                        <p class="text-muted mb-0">Design a simple yet efficient beach reservation system that enables quick planning with minimal steps.</p>
                    </div>
                    <div class="feature-box mb-3 left-item">
                        <h4 class="text-theme-blue mb-3">Community Interaction</h4>
                        <p class="text-muted mb-0">Allow users to upload photos, write reviews, and engage with a like-minded beachgoer community.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 right-column-wrapper">
                <div class="feature-box-group">
                    <div class="feature-box mb-3 right-item">
                        <h4 class="text-theme-blue mb-3">Lifestyle-Based Curation</h4>
                        <p class="text-muted mb-0">Present beach content tailored to users' lifestyle preferences, including luxury, aesthetics, and social relevance.</p>
                    </div>
                    <div class="feature-box mb-3 right-item">
                        <h4 class="text-theme-blue mb-3">Style Guidance</h4>
                        <p class="text-muted mb-0">Offer fashion and beachwear recommendations aligned with trends, trip types, and destination vibes.</p>
                    </div>
                    <div class="feature-box mb-3 right-item">
                        <h4 class="text-theme-blue mb-3">Visual Storytelling</h4>
                        <p class="text-muted mb-0">Use imagery, animations, and transitions to convey luxury and create emotional resonance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Design Goals Section -->

<!-- Start Mockup Section  -->
<section class="py-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-mockup.webp')}}" alt="Boujee Beachin Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->

<!-- Start Wireframes Section -->
<section class="boujee-beachin-wireframe py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center text-lg-start">
                    <h2 class="mb-3">Wireframes</h2>
                    <p class="mb-4">An overview of the initial wireframes created during the design process:</p>
                    <ul class="mb-4">
                        <li>Low-fidelity sketches</li>
                        <li>Iterative design process</li>
                        <li>Feedback received from peers</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-1.webp')}}" alt="Boujee Beachin Wireframe 1" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-2.webp')}}" alt="Boujee Beachin Wireframe 2" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-3.webp')}}" alt="Boujee Beachin Wireframe 3" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-4.webp')}}" alt="Boujee Beachin Wireframe 4" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-5.webp')}}" alt="Boujee Beachin Wireframe 5" class="img-fluid rounded">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-wireframe-6.webp')}}" alt="Boujee Beachin Wireframe 6" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->

<!-- Start Target Users Section -->
<section class="boujee-beachin-target py-5 wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="mb-3">Target Users</h2>
                </div>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-md-6 col-lg-3">
                <div class="target-users-card">
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/target-users.webp')}}" alt="Target Users">
                    <p>Age Group: 20–35 Years</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="target-users-card">
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/target-users.webp')}}" alt="Target Users">
                    <p>Primary Users: Beach Tourists</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="target-users-card">
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/target-users.webp')}}" alt="Target Users">
                    <p>Frequent Travelers</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="target-users-card">
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/target-users.webp')}}" alt="Target Users">
                    <p>Vacation Planners</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Target Users Section -->

<!-- Start Challenges & Iterations Section -->
<section class="boujee-beachin-challenges wow fadeIn py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-4 mb-md-0">
                <div class="common-heading text-center text-lg-start">
                    <h2 class="mb-3">Challenges & Iterations</h2>
                    <p>Briefly explain the main design challenges faced during the process:</p>
                </div>
                <div class="challenges">
                    <ul>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/vector.webp')}}" alt="vector">
                            <p>Keeping the design boujee but still very user-friendly</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/vector.webp')}}" alt="vector">
                            <p>Ensuring a premium look without affecting loading speed</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/vector.webp')}}" alt="vector">
                            <p>Making the interface consistent across all devices</p>
                        </li>
                        <li>
                            <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/vector.webp')}}" alt="vector">
                            <p>Maintaining visual balance with vibrant brand colors</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-3 mt-lg-0">
                 <img loading="lazy" class="img-fluid" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-challenges.webp')}}" alt="boujee-beachin-challenges">
            </div>
        </div>
    </div>
</section>
<!-- End Challenges & Iterations Section -->

<!-- Start Personal Section -->
<section class="boujee-beachin-personal py-5 wow fadeIn">
    <div class="container">
        <div class="personal-wrapper">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="card personal-card text-center h-100">
                        <div class="card-body d-flex flex-column justify-content-center">
                            <div class="profile-img-container">
                                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/user.webp')}}" alt="James Whitmore" class="profile-img">
                            </div>
                            <h3 class="personal-heading">James Whitmore</h3>
                            <p class="text-secondary-light mb-4">Luxury Travel Enthusiast & Digital Marketer</p>
                            <div class="personal-info">
                                <div class="left-info">
                                    <table class="demographics-table">
                                        <tr>
                                            <td class="demo-label">Age</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-label">Gender</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-label">Status</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-label">Education</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-label">Location</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="right-info">
                                    <table class="demographics-table">
                                        <tr>
                                            <td class="demo-value">29</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-value">Male</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-value">Single</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-value">BA(Hons)</td>
                                        </tr>
                                        <tr>
                                            <td class="demo-value">London</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center flex-wrap gap-2 mt-auto">
                                <span class="badge rounded-pill personality-tag">Empathetic</span>
                                <span class="badge rounded-pill personality-tag">Independent</span>
                                <span class="badge rounded-pill personality-tag">Organised</span>
                                <span class="badge rounded-pill personality-tag">Punctual</span>
                                <span class="badge rounded-pill personality-tag">Practical</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="card personal-card border-top-accent">
                                <div class="card-body">
                                    <h4 class="personal-heading">Bio</h4>
                                    <p class="text-secondary-light">James is a digital marketing professional with a passion for travel and content creation. On weekends and during holidays, he explores premium beach destinations with his partner and documents his trips through Instagram and his blog. He's always on the lookout for a stylish and seamless way to plan, book, and style every trip he takes. He dislikes clunky, boring apps and expects design to match his lifestyle.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 row-cols-1 row-cols-md-3">
                                <div class="col">
                                    <div class="card personal-card h-100">
                                        <div class="card-body">
                                            <h4 class="personal-heading">Frustrations</h4>
                                            <span class="progress-label">Generic beach apps</span>
                                            <div class="progress" role="progressbar" aria-label="Generic beach apps" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-accent" style="width: 85%"></div>
                                            </div>
                                            <span class="progress-label">Slow trip planning</span>
                                            <div class="progress" role="progressbar" aria-label="Slow trip planning" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-accent" style="width: 75%"></div>
                                            </div>
                                            <span class="progress-label">Poor, cluttered design</span>
                                            <div class="progress" role="progressbar" aria-label="Poor, cluttered design" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-accent" style="width: 90%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card personal-card h-100 border-top-accent">
                                        <div class="card-body">
                                            <h4 class="personal-heading">Influences</h4>
                                            <ul class="custom-list">
                                                <li>Instagram</li>
                                                <li>Pinterest</li>
                                                <li>Airbnb</li>
                                                <li>Google Maps</li>
                                                <li>YouTube</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card personal-card h-100">
                                        <div class="card-body">
                                            <h4 class="personal-heading">Interests</h4>
                                            <ul class="custom-list">
                                                <li>Fashion & Coastal Styling</li>
                                                <li>Social Media Curation</li>
                                                <li>Beach Getaways</li>
                                                <li>Photography & Editing</li>
                                                <li>Slow Luxury Travel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row g-4 row-cols-1 row-cols-md-2">
                                <div class="col">
                                    <div class="card personal-card h-100">
                                        <div class="card-body">
                                            <h4 class="personal-heading">Goals</h4>
                                            <ul class="custom-list">
                                                <li>Discover premium, stylish beach destinations with ease</li>
                                                <li>Plan, book, and organize trips all in one seamless flow</li>
                                                <li>Ensure every trip fits his personal and social brand aesthetic</li>
                                                <li>Save valuable time during the beach planning process</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card personal-card h-100">
                                        <div class="card-body">
                                            <h4 class="personal-heading">Motivations</h4>
                                            <span class="progress-label">Boost content engagement</span>
                                            <div class="progress" role="progressbar" aria-label="Boost content engagement" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-accent" style="width: 80%"></div>
                                            </div>
                                            <span class="progress-label">Quality time with partner</span>
                                            <div class="progress" role="progressbar" aria-label="Quality time with partner" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-accent" style="width: 70%"></div>
                                            </div>
                                            <span class="progress-label">Brand collaborations</span>
                                            <div class="progress" role="progressbar" aria-label="Brand collaborations" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-accent" style="width: 60%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Personal Section -->

<!-- Start App Screens -->
<section class="boujee-beachin-apps py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-1.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-2.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-3.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-4.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-4.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-6.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-7.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-8.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-9.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-10.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-11.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-app-12.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End App Screens -->

<!-- Start User Testing & Feedback Section -->
<section class="boujee-beachin-testing py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-5 text-center">User Testing & Feedback</h2>
        </div>
        <div class="row g-4 mt-3">
            <div class="col-md-6">
                <div class="user-testing-card">
                    <div class="user-testing-img">
                        <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/heart.webp')}}" alt="Liked">
                        <p>Liked</p>
                    </div>
                    <ul>
                        <li>Aesthetic, clean, and modern interface</li>
                        <li>Easy navigation and booking flow</li>
                        <li>Fashion-travel combo felt fresh and useful</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="user-testing-card">
                    <div class="user-testing-img">
                         <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/reset.webp')}}" alt="Reset">
                        <p>Liked</p>
                    </div>
                    <ul>
                        <li>Home screen felt slightly crowded initially</li>
                        <li>Users wanted clearer call-to-action buttons</li>
                        <li>Some icons were unclear without labels</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End User Testing & Feedback Section -->

<!-- Start Tech Behind The App Section -->
<section class="boujee-beachin-tech py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-4">Tech Behind The App</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Frontend</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/react-native.webp')}}" alt="">
                    <p>React Native</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Backend</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/node-js.webp')}}" alt="">
                    <p>Node.js</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Database</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/mongo-db.webp')}}" alt="">
                    <p>MongoDB</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Cloud</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/aws.webp')}}" alt="">
                    <p>AWS</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Payments</h6>
                    <img loading="lazy" src="{{asset('images/case-studies/payment.png')}}" alt="">
                    <p>Stripe • G Pay</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Tech Behind The App Section -->

<!-- Start Conclusion Section -->
<section class="py-5 boujee-beachin-conclusion">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <div class="common-heading">
                    <h2 class="mb-3 text-center text-lg-start">Conclusion</h2>
                    <p>Boujee Beachin’ blends luxury travel and fashion into one clean, curated app. This project taught me how to balance premium aesthetics with practical UX, prioritize user needs, and improve design through testing and iteration. It was a valuable experience in designing for a modern, lifestyle-driven audience. </p>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="conclusion-right">
                    <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-conclusion.webp')}}" alt="Boujee Beachin Conclusion Image" class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Conclusion Section -->

<!-- Start Vendor App Section -->
<section class="py-5 wow fadeIn boujee-beachin-vendor">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">VENDOR APP</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-1.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-2.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-3.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-4.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-5.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-6.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-7.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
            <div class="col-md-3 col-6 my-3"> 
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-vendor-app-8.webp')}}" class="img-fluid" alt="Vendor App">
            </div>
        </div>
    </div>
</section>
<!-- End Vendor App Section -->

<!-- Start Client Testimonial Section -->
<section class="py-5 wow fadeIn boujee-beachin-testimonial">
    <div class="container">
        <div class="common-heading">
            <h2 class="py-5 text-center">Client Testimonial</h2>
        </div>
        <div class="text-center mb-3">
            <img loading="lazy" src="{{asset('images/case-studies/star.webp')}}" alt="Rating" class="star">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="testimonial-card text-center p-4">
                    <div class="testimonials-img-section mb-3">
                        <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/user-2.webp')}}" alt="Liked" class="rounded-circle img-fluid">
                    </div>
                    <p class="testimonial-text">“I’ve tried a ton of travel apps, but Boujee Beachin’ stands out. It combines luxury beach discovery, outfit planning, and smooth booking — all in one clean interface. It saves me time and makes my trips look 10x better on social media!”</p>
                    <b class="d-block mt-3">— James W., Digital Marketer & Travel Blogger</b>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Client Testimonial Section-->

<!-- Start Mockup Section -->
<section class="py-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/boujee-beachin-mockup-2.webp')}}" alt="Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection