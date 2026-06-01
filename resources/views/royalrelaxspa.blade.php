@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="royal-relax-spa breadcrumb-areav2">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                    <h1>Royal Relax <br>
                        <span>Book. Manage. Relax.</span>
                    </h1>
                    <p>Royal Relax is a seamless spa booking and management platform that allows clients to schedule services effortlessly while giving spa managers complete control over appointments, staff, and payments. Designed with a focus on calm, luxury, and ease, the app delivers a branded experience that enhances both customer satisfaction and business efficiency. </p>
                    <h4 class="royal-relax-spa-tag">Explore the Platform <i class="fa-solid fa-arrow-right"></i> </h4>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-hero.webp')}}" class="img-fluid royal-relax-spa-hero-img" alt="Royal Relax Spa Hero">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->

<!-- Start Royal Relax Spa Project Description -->
<section class="royal-relax-project-description-section royal-relax-spa-project py-5">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-md-12 col-lg-6 mt-md-4">
                <h2 class="mb-4">Project Description</h2>
                <p>Royal Relax is a modern spa booking and management app designed to simplify appointments for clients and streamline operations for spa owners. With a calming, user-friendly interface, the app offers complete control over bookings, schedules, and payments—all in one seamless platform. </p>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-project-decription.webp')}}" class="img-fluid royal-relax-project-description" alt="royal relax project Description">
            </div>
        </div>
    </div>
</section>
<!-- End Royal Relax Spa Project Description -->

<!-- Start Royal Relax Spa Problem -->
<section class="royal-relax-spa-problem-solution royal-relax-spa-problem case-studies-problem py-5">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="mb-3">Problem Solution</h2>
            <p class="mb-0">Royal Relax addresses common challenges in spa management by a seamless experience for both clients and service providers.</p>
        </div>
        <div class="section-wrapper">
            <div class="start-connector">
                <div class="start-plus-circle">+</div>
            </div>
            <div class="row row-five-cols g-0">
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div class="number-circle">01</div>
                        <p class="card-text-custom">Instantly confirm appointments through a centralized booking system.</p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div class="number-circle">02</div>
                        <p class="card-text-custom">A clean interface with categorized services and time slots for quick booking.</p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div class="number-circle">03</div>
                        <p class="card-text-custom">Geo-tag graves on the map for future visits.</p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div class="number-circle">04</div>
                        <p class="card-text-custom">Set recurring services like monthly or annual grave maintenance.</p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div class="number-circle">05</div>
                        <p class="card-text-custom">Subscribe to care packages based on user needs and budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Royal Relax Spa Problem-->

<!-- Start Royal Relax Spa Target Audience -->
<section class="user-research royal-relax-spa-target case-studies-user-research py-5">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="my-3">Target Audience</h2>
            <p class="mb-5">Royal Relax is designed for users who value time, ease, and high-quality self-care experiences, as well as spa businesses looking to modernize their operations.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <ul class="user-research-ul">
                    <li>Working clients ( women aged 25–45) who want a fast, stress-free way </li>
                    <li>People busy lifes who value on-the-go mobile solutions for personal care</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="user-research-ul">
                    <li>Small to medium wellness businesses needing to manage bookings .</li>
                    <li>coordinators managing appointment schedules and payments.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Royal Relax Spa Target Audience -->

<!--Start Royal Relax Spa Project Goals section -->
<section class="royal-relax-spa-project-goals case-studies-goals py-5">
    <div class="container grave-love-project-goals">
        <div class="common-heading text-center">
            <h2 class="mb-5">Project Goals</h2>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-6">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-project-goal.webp')}}" class="img-fluid" alt="Royal Relax Spa Goals">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="info-card light">
                            <p>Create a frictionless and user-friendly appointment system for spa clients.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card brown">
                            <p>Provide spa managers with tools to manage bookings, staff, services, and payments in one place.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card light">
                            <p>Design a relaxing, visually elegant interface that reflects premium spa aesthetics.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-10">
                        <div class="info-card brown">
                            <p>Enable live tracking of bookings, reminders, and status updates for both staff and clients.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Royal Relax Spa Project Goals section -->

<!-- Start Royal Relax Spa User Persona -->
<section class="royal-relax-spa-persona case-studies-persona py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mb-4">USER PERSONA</h3>
            </div>
        </div>
        <div class="container persona-section-wrapper mb-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-avatar-01.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Emily Thompson</h4>
                            <p>USA-Based User</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h4>Background</h4>
                            <p>
                                <b>Age</b>: 34
                            </p>
                            <p>
                                <b>Marital status</b>: Married
                            </p>
                            <p>
                                <b>Location</b>Austin, Texas
                            </p>
                            <p>
                                <b>Occupation</b>: UX Designer
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h4>Goals and Needs</h4>
                        <ul>
                            <li>Effortless Booking: Wants to schedule spa appointments quickly during breaks or after work hours.</li>
                            <li>Service Transparency: Prefers knowing pricing, staff availability, and service details before booking.</li>
                            <li>Clean UI: Expects a modern, intuitive interface with smooth user flow.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h4>Pain Points / Challenges</h4>
                        <ul>
                            <li>Busy Lifestyle: Has limited time to call spas or check availability manually.</li>
                            <li>Inconsistent Spa Apps: Finds most booking apps outdated or confusing.</li>
                            <li>No Central Management: Dislikes managing appointments through email or text across platforms.</li>
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
                            <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-avatar-02.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Michael Rivera </h4>
                            <p>Business-Focused User</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h4>Background</h4>
                            <p>
                                <b>Age</b>: 41
                            </p>
                            <p>
                                <b>Marital status</b>: Married
                            </p>
                            <p>
                                <b>Location</b>: California
                            </p>
                            <p>
                                <b>Occupation</b>: – Engineer
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h4>Goals and Needs</h4>
                        <ul>
                            <li>Transportation between meetings in West bay, Lusail and airport.</li>
                            <li>Desires that the service is delivered on time, with Wi-Fi-equipped vehicles,</li>
                            <li> high-quality fleet, and a comprehensive weekly schedule of buses.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h4>Pain Points / Challenges</h4>
                        <ul>
                            <li>It’s difficult to find drivers who understand the priorities of a mother traveling with small children.</li>
                            <li>Most apps don’t offer clear options for child safety features like car seats.</li>
                            <li>She feels uncomfortable using apps where there is no female-friendly or family-oriented experience.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Royal Relax Spa User Persona -->

<!-- Start Royal Relax Spa Wireframes -->
<section class="royal-relax-spa-wireframe py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="pt-3">Wire Frame</h2>
                    <p class="pt-3">These low-fidelity wireframes outline the core user flow and layout structure, helping to visualize the app experience before high-fidelity design.</p>
                    <h4 class="pt-3 pb-4">App Wireframes</h4>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-6 col-md-4 col-xl">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-wireframe-01.webp')}}" alt="Royal Relax Spa Wireframes" class="wire-img img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-wireframe-02.webp')}}" alt="Royal Relax Spa Wireframes" class="wire-img img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-wireframe-03.webp')}}" alt="Royal Relax Spa Wireframes" class="wire-img img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-wireframe-04.webp')}}" alt="Royal Relax Spa Wireframes" class="wire-img img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-wireframe-05.webp')}}" alt="Royal Relax Spa Wireframes" class="wire-img img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Royal Relax Spa Wireframes -->

 <!-- Start Royal Relax Spa App Screens -->
<section class="grave-love-apps royal-relax-spa-apps py-5">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-5 text-center">App Screens Phase 1</h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-01.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-02.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-03.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-04.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-05.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-06.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-07.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-08.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-09.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-10.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-11.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-12.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Royal Relax Spa App Screens -->

<!-- Start Royal Relax Spa Tech Behind The App -->
<section class="boujee-beachin-tech royal-relax-spa-tech">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-5">Tech Behind the App</h2>
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
<!-- End Royal Relax Spa Tech Behind The App -->

 <!-- Start Royal Relax Spa App Screens -->
<section class="grave-love-apps royal-relax-spa app py-5">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-5 text-center">App Screens Phase 2</h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-13.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-14.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-15.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-16.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-17.webp')}}" alt="App Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-screen-18.webp')}}" alt="App Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- Start Royal Relax Spa App Screens -->

<!-- Start Royal Relax Spa Key Features Section -->
<section class="royal-relax-Features-mockup">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center my-4">Key Features of Royal Relax Spa</h2>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-key-features.webp')}}" alt="Royal Relax Spa Key Features" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Royal Relax Spa Key Features Section -->

 <!--Start Royal Relax Spa UI/UX Design Phase section -->
<section class="mike-mathis-design-phase royal-relax-spa-design-phase py-5">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-md-12 col-lg-6">
                <h2 class="mb-3">UI/UX Design Phase</h2>
                <h5>Prototyping</h5>
                <p>We began the design process by creating low-fidelity wireframes to define the app’s structure, flow, and interaction points. The goal was to map out both client-side and admin-side journeys, ensuring a smooth navigation experience.</p>
                <h5 class="my-3">Testing and Feedback</h5>
                <p>Client feedback emphasized the need for fast booking flow and visual clarity, while spa managers valued functional dashboards and appointment overview simplicity. Based on this, we made key UI adjustments to button sizing, menu hierarchy, and screen transitions for better engagement and satisfaction.</p>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-ui-ux.webp')}}" class="img-fluid" alt="Royal Relax Spa UI/UX">
            </div>
        </div>
    </div>
</section>
<!--End Royal Relax Spa UI/UX Design Phase section -->

<!-- Start Royal Relax Spa Mockup Section -->
<section class="royal-relax-spa-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-relax-spa-mockup.webp')}}" alt="Royal Relax Spa Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Royal Relax Spa Mockup Section -->
@endsection