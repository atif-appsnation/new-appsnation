@extends('app.main')
@section('content')
<!-- Start Hero Section -->
<section class="load-board-hero-section breadcrumb-areav2">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container " data-wow-delay="0.2s">
        <div class="row">
            <div class="col-lg-12 my-lg-auto  ">
                <div class="bread-titlev2 mt-4">
                    <div class="logo">
                        <img loading="lazy" src="{{asset('images/case-studies/load-board/logo.webp')}}" class="img-fluid " alt="Load Board Logo">
                    </div>
                    <h1>Loadboard — Logistics. Smarter. Faster</h1>
                    <p class="pt-3">Loadboard is a modern mobile and web-based platform built to simplify freight booking, real-time tracking, and load management. Designed for logistics teams, dispatchers, carriers, and drivers, the system centralizes operations into one unified experience making it easier to assign loads, track deliveries, and streamline communication from dispatch to delivery. </p>
                    <h5>Explore the Platform <i class="fa-solid fa-arrow-right ps-3"></i> </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="load-board-hero-img">
                    <img loading="lazy" src="{{asset('images/case-studies/load-board/hero-img.webp')}}" class="img-fluid " alt="Load Board">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Hero Section -->

<!-- Start Load Board Project Overview --> 
<section class="load-board-project-overview-section py-5  royal-relax-spaceing">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6 mt-md-4 ">
                <div class="load-board-project-overview-contant">
                    <h2 class="my-4">Project Overview</h2>
                    <h4 class="my-4">About the App</h4>
                    <p>Loadboard is a cross-platform logistics and load management tool built for dispatchers, fleet operators, and truck drivers. It simplifies the complex process of assigning, tracking, and delivering freight by centralizing everything into one seamless, easy-to-navigate system.<br>Loadboard is a cross-platform logistics and load management tool built for dispatchers, fleet operators, and truck drivers. It simplifies the complex process of assigning, tracking, and delivering freight by centralizing everything into one seamless, easy-to-navigate system. From load posting to live route tracking and driver confirmation, Loadboard helps logistics teams stay agile, connected, and in control whether in the office or on the road. </p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 load-board-project-overview-img">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/project-overview-img.webp')}}" class="img-fluid" alt="royal relax project Description">
            </div>
        </div>
    </div>
</section>
<!-- End Load Board Project Overview -->

<!-- Start Load Board Problem Challenges --> 
<section class="load-board-problem-challenges-section py-5 royal-relax-spaceing">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 load-board-problem-challenges-img">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/problem-challenges-img.webp')}}" class="img-fluid" alt="royal relax project Description">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-md-4 ">
                <div class="load-board-problem-challenges-contant">
                    <h2 class="my-4">Problem Challenges</h2>
                    <h4 class="my-4">About the App</h4>
                    <p>Designing the Loadboard required balancing powerful functionality with simplicity for two very different user types: dispatchers and drivers. Dispatchers, working on desktop, needed deep visibility into loads, real-time status updates, and tools to manage fleets efficiently. Drivers, using a mobile app, prioritized speed, clarity, and ease of use while on the move<br>We also had to account for low-connectivity environments, ensuring the platform remained responsive and usable for drivers even with limited network access.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Load Board Problem Challenges -->

<!-- Start Load Board Key Challanges --> 
<section class="Key-Challenges-Faced-section py-5 royal-relax-spaceing">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Key Challenges Faced</h2>
        </div>
        <div class="row g-4 Key-Challenges-Face">
            <div class="col-md-12  col-lg-6 key-challenge-box">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h4 class="mb-3">Dual User Experiences</h4>
                    <p class="mb-0"> Creating an interface that works seamlessly for both desktop-based dispatchers and mobile-first drivers required unique component workflows, UI scaling, and role-specific features. </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 key-challenge-box">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h4 class="mb-3">Clean UX for Complex Workflows</h4>
                    <p class="mb-0"> Managing load creation, assignments, routing, document handling, and tracking all within a few taps demanded thoughtful structuring of the platform’s IA and layout. </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 key-challenge-box">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h4 class="mb-3">Real-Time Data Sync</h4>
                    <p class="mb-0"> Ensuring load statuses, driver locations, and document uploads updated instantly across devices without delays or lags in communication was a major technical and UX hurdle. </p>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 key-challenge-box">
                <div class="card h-100 border-0 shadow-sm p-4">
                    <h4 class="mb-3">Connectivity in Low-Bandwidth Areas</h4>
                    <p class="mb-0"> Many drivers operate in remote zones with weak signals. Designing a system that still functions and syncs well under poor network conditions was critical. </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Load Board Key Challanges -->
 
<!-- Start Tech Behind the App -->
<section class="load-board-tech py-5 royal-relax-spaceing">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center my-4">Tools & Technologies We Used</h2>
            <p>Take a look behind the scenes of the Loadboard platform — a high-performance logistics system built to support smart dispatching, real-time tracking, and seamless operations. Each technology was carefully selected to ensure fast performance, reliable data sync, and a consistent experience across both web and mobile platforms.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="load-board-tech-card text-center">
                    <img loading="lazy" src="{{asset('images/case-studies/load-board/flutter.webp')}}" alt="React Native">
                    <p>Flutter</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="load-board-tech-card text-center">
                    <img loading="lazy" src="{{asset('images/case-studies/load-board/react-native.webp')}}" alt="Node.js">
                    <p>React Native</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="load-board-tech-card text-center">
                    <img loading="lazy" src="{{asset('images/case-studies/load-board/NestJs.webp')}}" alt="MongoDB">
                    <p>NestJS</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="load-board-tech-card text-center">
                    <img loading="lazy" src="{{asset('images/case-studies/load-board/MongoDB.webp')}}" alt="AWS">
                    <p>MongoDB</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2  ">
                <div class="load-board-tech-card text-center">
                    <img loading="lazy" src="{{asset('images/case-studies/load-board/cloud-services.webp   ')}}" alt="payment">
                    <p>Cloud Services</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Tech Behind the App -->

<!-- Start Load Board Infographics -->
<section class="load-board-infographic-section py-5  royal-relax-spaceing ">
	<div class="container">
		<div class="load-board-infographic-container position-relative">
			<h2>The Road to Loadboard:</h2>
			<h4>Project Goals</h4>
			<div class="load-board-vertical-line"></div>
			<div class="row g-3">
				<div class="col-12 col-md-6 position-relative load-board-step-left">
					<div class="load-board-step-content">
						<h5>Centralizing Freight Operations</h5>
						<p>The goal was to eliminate fragmented systems by creating a unified platform that connects dispatchers, carriers, and drivers in real-time.</p>
					</div>
					<div class="load-board-step-number">01</div>
				</div>
				<div class="col-12 col-md-6 position-relative load-board-step-right">
					<div class="load-board-step-content">
						<h5>Automating Load Assignments</h5>
						<p>We aimed to reduce manual errors and time-wasting by introducing logic-based, automated load dispatching and filter-based driver selection.</p>
					</div>
					<div class="load-board-step-number">02</div>
				</div>
				<div class="col-12 col-md-6 position-relative load-board-step-left">
					<div class="load-board-step-content">
						<h5>Streamlining Driver Experience</h5>
						<p>Design a mobile-first interface to help drivers easily view, accept, and complete tasks while navigating their routes with minimal friction.</p>
					</div>
					<div class="load-board-step-number">03</div>
				</div>
				<div class="col-12 col-md-6 position-relative load-board-step-right">
					<div class="load-board-step-content">
						<h5>Enabling Live Tracking & Updates</h5>
						<p>Give dispatchers full visibility into delivery progress with GPS tracking, status changes, and alerts—keeping every load transparent.</p>
					</div>
					<div class="load-board-step-number">04</div>
				</div>
				<div class="col-12 col-md-6 position-relative load-board-step-left">
					<div class="load-board-step-content">
						<h5>Digitizing PODs & Load Documents</h5>
						<p>We set out to replace paper-based proof of delivery and legal workflows, in-app upload, and simplified document storage.</p>
					</div>
					<div class="load-board-step-number">05</div>
				</div>
				<div class="col-12 col-md-6 position-relative load-board-step-right">
					<div class="load-board-step-content">
						<h5>Making the System Scalable & Modular</h5>
						<p>The platform is designed to adapt to fleet size, service types, and future feature expansions without disrupting core operations.</p>
					</div>
					<div class="load-board-step-number">06</div>
				</div>
			</div>
		</div>
	</div>
</section>
  
<!-- Start Load Board User Persona -->
<section class="royal-relax-spa-persona py-5 royal-relax-spaceing">
    <div class="container">
        <div class="persona-card-mainUp">
            <div class="row persona-top-heading">
                <div class="col-md-6 text-center">
                    <h3 class="my-4">USER PERSONA</h3>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper my-4Up">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/load-board/avatar1.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Lauren Mitchell</h4>
                            <p>Logistics Coordinator</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
                            <p>
                                <b>Age</b>: 35
                            </p>
                            <p>
                                <b>Marital status</b>: Married
                            </p>
                            <p>
                                <b>Location</b>Dallas, Texas
                            </p>
                            <p>
                                <b>Occupation</b>: Dispatcher
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Efficient Load Dispatching: Wants to assign loads quickly without back-and-forth communication.</li>
                            <li>Centralized Dashboard: Needs a single place to manage drivers, loads, and statuses.</li>
                            <li>Clean UX: Prefers a modern interface that’s easy to learn and navigate.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
                        <ul>
                            <li>Too Many Tools: Using spreadsheets, SMS, and maps causes disorganization..</li>
                            <li>Overload & Errors: Manual data entry leads to occasional load assignment issues.</li>
                            <li>Limited Oversight: Can’t always track which driver has documents or who’s en route.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper my-4Up">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/load-board/avatar2.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Jason Carter</h4>
                            <p>Independent Long-Haul Driver</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
                            <p>
                                <b>Age</b>: 43
                            </p>
                            <p>
                                <b>Marital status</b>: Single
                            </p>
                            <p>
                                <b>Location</b>: California
                            </p>
                            <p>
                                <b>Occupation</b>: – Owner-Operator
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Quick Load Access: Wants to view and accept load offers easily from mobile.</li>
                            <li>On-the-Go Functionality: Uses mobile exclusively while driving.</li>
                            <li>Navigation Integration: Wants map access without switching apps.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
                        <ul>
                            <li>Confusing Interfaces: Struggles with busy or outdated driver apps..</li>
                            <li>Confusing Interfaces: Struggles with busy or outdated driver apps.</li>
                            <li>No Central App: Currently uses calls, emails, and multiple apps just to finish 1 load.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Load Board User Persona -->

<!-- Start App Screens -->
<section class="load-board-carrier-screen royal-relax-spaceing py-5">
    <div class="container">
        <div class="common-heading">
            <h2 class="my-3 text-center">Carrier Module Screen</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen5.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen1.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen2.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen3.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen4.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen6.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen7.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/carrier-module-screen8.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End App Screens -->
 
<!-- Start App Screens -->
<section class="load-board-carrier-screen royal-relax-spaceing py-5">
    <div class="container">
        <div class="common-heading">
            <h2 class="my-3 text-center">Brooker Module</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/brooker-module1.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/brooker-module2.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/brooker-module3.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-md-6 col-12 my-3">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/brooker-module4.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End App Screens -->

 <!-- Start Client Testimonial Section -->
<section class="load-board-testing py-5 boujee-beachin-testimonial">
    <div class="container">
        <div class="common-heading">
            <h2 class="py-5 text-center">Testing & User Feedback</h2>
        </div>
        <div class="text-center mb-3">
            <img loading="lazy" src="{{asset('images/case-studies/star.webp')}}" alt="Rating" class="star">
        </div>
        <div class="row justify-content-center g-3">
            <div class="col-md-6 col-12">
                <div class="testimonial-card text-center p-4">
                    <div class="testimonials-img-section mb-3">
                        <img loading="lazy" src="{{asset('images/case-studies/load-board/avatar2.webp')}}" alt="Liked" class="rounded-circle img-fluid">
                    </div>
                    <p class="testimonial-text text-center"> I didn’t need to call  anymore — I knew my next load and where to go.</p>
                    <b class="d-block mt-3">Jason (Driver, Tennessee)</b>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="testimonial-card text-center p-4">
                    <div class="testimonials-img-section mb-3">
                        <img loading="lazy" src="{{asset('images/case-studies/load-board/avatar1.webp')}}" alt="Liked" class="rounded-circle img-fluid">
                    </div>
                    <p class="testimonial-text text-center"> The dashboard reduced our manual work by almost half. </p>
                    <b class="d-block mt-3">Lauren (Dispatcher, Texas)  </b>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Client Testimonial Section-->

<!-- Start Mockup Section -->
<section class="load-board-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/load-board/morkup.webp')}}" alt="Load Board Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection 