@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class=" grave-love-app breadcrumb-areav2">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-lg-6 my-lg-auto">
                <div class="bread-titlev2">
                    <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-logo.webp')}}" class="logo pb-3" alt="Grave Love App logo">
                    <h1 class="pb-3">Grave Love</h1>
                    <p class="pb-3"> Appsnation undertook the development of “Mentoring with the Mentees,” a mobile-first platform designed to simplify and humanize the mentorship experience. The app connects aspiring learners with experienced mentors, enabling structured learning, real-time conversations, and measurable growth — all within an intuitive, transparent, and engaging interface.</p>
                    <h4 class="pb-3">Platform: </h4>
                    <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-download.webp')}}" class="playstore" alt="Download">
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-hero.webp')}}" class="img-fluid grave-love-hero-img" alt="Grave Love App">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->

<!-- Start Grave Love App Problem -->
<section class="grave-love-problem-section py-5">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="grave-love-problem-content">
                    <h2 class="pb-3">Problem Statement</h2>
                    <p class="pb-3">Many people are unable to visit the graves of their deceased loved ones due to distance, health, or time constraints. Grave maintenance, cleanliness, or simply a flower can be difficult — yet these gestures hold deep emotional meaning.</p>
                    <p class="pb-3">There is currently no acces si ble digital platform that allows people to easily schedule grave care services and receive assurance of their fulfillment. </p>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-problem-statment.webp')}}" class="img-fluid" alt="Grave Love App Problem">
            </div>
        </div>
    </div>
</section>
<!-- End Grave Love App Problem -->

<!-- start Grave Lop App Solution -->
<section class="grave-love-app-problem case-studies-problem py-5">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="mb-3">Problem Solution</h2>
            <p>Grave Love is a respectful, user-friendly mobile app that connects users to verified local grave care providers. It allows users to:</p>
        </div>
        <div class="section-wrapper">
            <div class="start-connector">
                <div class="start-plus-circle">+</div>
            </div>
            <div class="row row-five-cols g-0">
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">01</div>
                            <h4 class="card-title-custom">Why do users prefer Royal Ride in Qatar?</h4>
                        </div>
                        <p class="card-text-custom">Because it offers luxury cars, trained chauffeurs, and a premium ride experience.</p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div>
                            <div class="number-circle">02</div>
                            <h4 class="card-title-custom">Why is this premium app experience valuable to users?</h4>
                        </div>
                        <p class="card-text-custom">Because Qatar's users expect fast, professional, and high-quality service.</p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">03</div>
                            <h4 class="card-title-custom">Why is a smooth booking flow important for these users?</h4>
                        </div>
                        <p class="card-text-custom">Because elite users want to book rides quickly without any complexity. </p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div>
                            <div class="number-circle">04</div>
                            <h4 class="card-title-custom">Why is trust and transparency a key factor in Royal Ride?</h4>
                        </div>
                        <p class="card-text-custom">Because users value safety, fare clarity, and detailed chauffeur information.</p>
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">05</div>
                            <h4 class="card-title-custom">Why do users come back to Royal Ride again?</h4>
                        </div>
                        <p class="card-text-custom">Because it delivers consistent, reliable, and high-class service every time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Grave Love App Solution -->

<!-- Start Grave Love App Target Audience -->
<section class="user-research case-studies-user-research py-5">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="pb-3">Target Audience</h2>
            <p class="pb-5">This app is designed for individuals who wish to honor and care for their loved ones' <br> graves, regardless of distance, time, or physical ability.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <ul class="user-research-ul">
                    <li>People living away from their loved ones' graves, in other cities or countries.</li>
                    <li>Busy professionals who want to stay connected despite tight schedules.</li>
                </ul>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
                <ul class="user-research-ul">
                    <li>Elderly or physically limited individuals unable to visit graves regularly.</li>
                    <li>Emotionally individuals who spiritual acts of remembrance and care.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Grave Love App Target Audience -->

<!-- Start Grave Love App Screens -->
<section class="grave-love-apps py-5">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-5 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-01.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-02.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-03.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-04.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-05.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-06.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-07.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-08.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-09.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-10.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-11.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-12.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-13.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-14.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-screen-15.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Grave Love App Screens -->

<!-- Start Grave Love App Persona -->
<section class="py-5 grave-love-app-persona case-studies-persona">
    <div class="container">
        <div class="persona-card-main">
            <div class="row persona-top-heading">
                <div class="col-12 text-center pb-4">
                    <h3>USER PERSONA</h3>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper mb-4">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                             <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-avatar-01.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>John</h4>
                            <p>International Visitor </p>
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
                                <b>Occupation</b>: International Visitor
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h4>Goals and Needs</h4>
                        <ul>
                            <li>Qatar conference or tourist land.</li>
                            <li>requires easy airport transfer reservation,</li>
                            <li>driver tracking, multilingualism and the credibility of a licensed service.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h4>Pain Points / Challenges</h4>
                        <ul>
                            <li>As a visitor, he finds it hard to trust local apps and worries about hidden charges and unclear pickup instructions.</li>
                            <li>Language barriers and lack of proper in-app English support reduce his confidence in booking rides.</li>
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
                            <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-avatar-02.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Ahmed </h4>
                            <p> Corporate Executive</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h4>Background</h4>
                            <p>
                                <b>Age</b>: 39
                            </p>
                            <p>
                                <b>Marital status</b>: Single
                            </p>
                            <p>
                                <b>Occupation</b>: – Corporate Executive
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
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Grave Love App Persona -->

<!-- Start Grave Love App Wireframes Section -->
<section class="grave-love-wireframe py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="pb-3">Wire Frame</h2>
                    <p class="pb-3">We created low‑fidelity wireframes to map out the complete user flow of Mentoring with the Mentees, focusing on smooth navigation between mentor discovery, chat interaction, and progress tracking. These early sketches helped define a simple, goal‑oriented structure and ensured a clear, engaging experience for both mentors and mentees from the very start..</p>
                    <h4 class="pb-5">App Wireframes</h4>
                </div>
            </div>
        </div>
        <div class="row g-3 grave-love-wireframe-gallery">
            <div class="col-6 col-md-4 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-wireframe-01.webp')}}" alt="Boujee Beachin Wireframe" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-wireframe-02.webp')}}" alt="Boujee Beachin Wireframe" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-wireframe-03.webp')}}" alt="Boujee Beachin Wireframe" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-wireframe-04.webp')}}" alt="Boujee Beachin Wireframe" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-wireframe-05.webp')}}" alt="Boujee Beachin Wireframe" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-wireframe-06.webp')}}" alt="Boujee Beachin Wireframe" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Grave Love App Wireframes Section -->

<!-- Start Grave Love App Vender App -->
<section class="grave-love-apps py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="mb-5 text-center">Vendor App</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-01.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-02.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-03.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-04.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-05.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-06.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-07.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
            <div class="col-6 col-md-4 col-xl-3 mb-3">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-vendor-app-08.webp')}}" alt="Grave Love App Vendor Screens" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Grave Love App Vender App -->

<!--Start Project Goals section -->
<section class="py-5 grave-love-project-goals case-studies-goals">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="mb-5">Project Goals</h2>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-6 mb-md-4 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-project-goal.webp')}}" class="img-fluid" alt="Project Goals">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="info-card light">
                            <p>Build a digital platform that lets users care for their loved ones' graves from anywhere in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card brown">
                            <p>Design a respectful, calm, and emotionally sensitive user experience that supports grief and remembrance.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card light">
                            <p>Create a bridge of connection between families and caretakers by using trust, transparency, and technology.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-10">
                        <div class="info-card brown">
                            <p>Enable local service providers to receive, accept, and complete grave care requests with photo/video proof.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Project Goals -->

<!-- Start Grave App Love Tech Behind The App -->
<section class="grave-love-app-tech py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="text-center mb-5">Tech Behind the App</h2>
                </div>
            </div>
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
<!-- End Grave App Love Tech Behind The App -->

<!-- Start Grave App Love Key Features -->
<section class="py-5 grave-key-features">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="text-center mb-5">Key Features of Grave Love</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-key-feature.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Grave App Love Key Features -->

<!--Start Grave App Love Project Goals-->
<section class="grave-love-app-result py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h3 class="fw-bold pb-3">The Results (Metrics & Achievements)</h3>
                    <p class="text-muted">Key metrics and achievements</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12 col-md-6">
                        <div class="grave-result-card grave-brown h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/grave-love-app-vector-01.webp') }}" alt="Global adoption">
                            <h6>Global Adoption</h6>
                            <p>UK and US expats form 75% of first-time users.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="grave-result-card grave-light h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/grave-love-app-vector-02.webp') }}" alt="User engagement">
                            <h6>User Engagement</h6>
                            <p>High engagement during the first month.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="grave-result-card  grave-light h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/grave-love-app-vector-03.webp') }}" alt="Retention rate">
                            <h6>Retention Rate</h6>
                            <p>Strong emotional-driven user retention.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="grave-result-card grave-brown  h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/grave-love-app-vector-04.webp') }}" alt="Organic growth">
                            <h6>Organic Growth</h6>
                            <p>Steady growth without paid marketing.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/grave-love-app-the-result.webp') }}" class="img-fluid" alt="Grave Love App Results">
            </div>
        </div>
    </div>
</section>
<!--End Grave App Love Project Goals-->

<!-- Start Grave App Love Mockup -->
<section class="py-5 grave-love-app-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-app-mockup.webp')}}" alt="Grave Love App Mockuo" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Grave App Love Mockup -->
@endsection