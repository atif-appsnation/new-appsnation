@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class=" grave-love-app breadcrumb-areav2">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-lg-6 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                     <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/logo1.webp')}}" class=" logo" alt="grave-love-app logo">
                    <h1>Grave Love
                    </h1>
                    <p class="pt-3">
                        Appsnation undertook the development of “Mentoring with the Mentees,” a mobile-first platform designed to simplify and humanize the mentorship experience. The app connects aspiring learners with experienced mentors, enabling structured learning, real-time conversations, and measurable growth — all within an intuitive, transparent, and engaging interface.
                    </p>
                    <h4 class="mt-2">Platform: </h4>
                    <div class="playStore-img">
                         <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/d.webp')}}" class=" playstore" alt="playstore morkup">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 grave-love-hero-img">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/hero-img.webp')}}"
                    class="img-fluid hero-img"
                    alt="grave-love-app">
            </div>

        </div>
    </div>

</section>
<!-- End Breadcrumb Area-->


<!--Start grave love problem section -->

<section class="grave-love-problem-section my-5  wow fadeInUp">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">


            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="grave-love-problem-contant">
                    <h2> Problem Statement</h2>
                    <p>Many people are unable to visit the graves of their deceased loved ones due to distance, health, or time constraints. Grave maintenance, cleanliness, or simply a flower can be difficult — yet these gestures hold deep emotional meaning.</p>
                    <p>There is currently no acces si ble digital platform that allows people to easily schedule grave care services and receive assurance of their fulfillment. </p>
                </div>


            </div>
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 grave-love-problem-img">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/problem-statment-img.webp')}}" class="img-fluid" alt="grave love problem">
            </div>
        </div>
    </div>
</section>
<!--end grave love problem section -->

<!-- start grave-love-problem-solution -->
<section class="grave-problem-solution my-5 wow fadeInUp">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="mb-1">Problem Solution</h2>
            <p class=" ">Grave Love is a respectful, user-friendly mobile app that connects users to verified local grave care providers. It allows users to:</p>
        </div>
        <div class="section-wrapper">


            <div class="start-connector">
                <div class="start-plus-circle">+</div>
            </div>

            <div class="row row-five-cols g-0">

                <!-- Card 01 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">01</div>
                            <h4 class="card-title-custom">Why do users prefer Royal Ride in Qatar?</h4>
                        </div>
                        <p class="card-text-custom">Because it offers luxury cars, trained chauffeurs, and a premium ride
                            experience.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div>
                            <div class="number-circle">02</div>
                            <h4 class="card-title-custom">Why is this premium app experience valuable to users?</h4>
                        </div>
                        <p class="card-text-custom">Because Qatar's users expect fast, professional, and high-quality
                            service.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">03</div>
                            <h4 class="card-title-custom">Why is a smooth booking flow important for these users?</h4>
                        </div>
                        <p class="card-text-custom">Because elite users want to book rides quickly without any complexity.
                        </p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 04 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div>
                            <div class="number-circle">04</div>
                            <h4 class="card-title-custom">Why is trust and transparency a key factor in Royal Ride?</h4>
                        </div>
                        <p class="card-text-custom">Because users value safety, fare clarity, and detailed chauffeur
                            information.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 05 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">05</div>
                            <h4 class="card-title-custom">Why do users come back to Royal Ride again?</h4>
                        </div>
                        <p class="card-text-custom">Because it delivers consistent, reliable, and high-class service every
                            time.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End grave-love-problem-solution -->





<!-- Start  Target Audience section -->
<section class="user-research my-5">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="mb-1">Target Audience</h2>
            <p class="mb-5 ">This app is designed for individuals who wish to honor and care for their loved ones' <br> graves, regardless of distance, time, or physical ability.</p>

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
<!-- End Target Audience section -->

<!-- Start App Screens -->
<section class="grave-love-apps py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen4.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen5.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen6.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen7.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen8.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen9.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen10.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen11.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen12.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen13.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen14.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/app-screen15.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app2.webp')}}" alt="App Screens" class="img-fluid"></div>

        </div>
    </div>
</section>
<!-- End App Screens -->

<!-- by hassan USER PERSONA -->
<section class="my-5">
    <div class="container">
        <div class="persona-card-main wow fadeInUp">
            <div class="row persona-top-heading">
                <div class="col-md-6 ">
                    <h3>USER PERSONA</h3>
                </div>
                <div class="col-md-6">
                    <p>This section highlights three core user personas that guided the design of Royal Ride. By understanding their goals and frustrations, we tailored the app experience to meet the unique needs of Qatar’s diverse riders.</p>
                </div>
            </div>

        </div>
        <div class="container persona-section-wrapper my-4 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                             <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/Avatar1.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>John</h4>
                            <p>International Visitor </p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
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
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Qatar conference or tourist land.</li>
                            <li>requires easy airport transfer reservation,</li>
                            <li>driver tracking, multilingualism and the credibility of a licensed service.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
                        <ul>
                            <li>As a visitor, he finds it hard to trust local apps and worries about hidden charges and unclear pickup instructions.</li>
                            <li>Language barriers and lack of proper in-app English support reduce his confidence in booking rides.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container persona-section-wrapper my-4 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                             <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/Avatar2.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Ahmed </h4>
                            <p> Corporate Executive</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
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
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Transportation between meetings in West bay, Lusail and airport.</li>
                            <li>Desires that the service is delivered on time, with Wi-Fi-equipped vehicles,</li>
                            <li> high-quality fleet, and a comprehensive weekly schedule of buses.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
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
<!-- end hassan USER PERSONA -->

<!-- Start Wireframes Section -->
<section class="grave-love-wireframe  my-5  wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-start">
                    <h2 class="mb-3">Wire Frame</h2>
                    <p class=" ">We created low‑fidelity wireframes to map out the complete user flow of Mentoring with the Mentees, focusing on smooth navigation between mentor discovery, chat interaction, and progress tracking. These early sketches helped define a simple, goal‑oriented structure and ensured a clear, engaging experience for both mentors and mentees from the very start..</p>
                    <h4 class="mb-5">App Wireframes</h4>
                </div>
            </div>
        </div>

        <div class="row g-3 grave-love-wireframe-gallery">
            <div class="col-6 col-md-3 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/wirefram1.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/wirefram2.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/wirefram3.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/wirefram4.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/wirefram5.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/wirefram6.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->

<!-- Start vender App  -->
<section class="grave-love-apps py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">Vendor App</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app4.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app5.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app6.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app7.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/vendor-app8.webp')}}" alt="App Screens" class="img-fluid"></div>

        </div>
    </div>
</section>
<!-- End vendor App -->

<!--Start Project Goals section -->
<section class="py-5 wow fadeIn">
    <div class="container grave-love-project-goals">
        <div class="common-heading text-center">
            <h2 class="mb30">Project Goals</h2>

        </div>
        <div class="row align-items-start">

            <!-- Left Image -->
            <div class="col-lg-6 mb-md-4 mt-5 mt-lg-0">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/project-goal.webp')}}"
                    class="img-fluid"
                    alt="  project-goals">


            </div>

            <!-- Right Content -->
            <div class="col-lg-6 my-auto">

                <!-- Card 1 -->
                <div class="row">
                    <div class="col-12 col-lg-10  ">
                        <div class="info-card grave-light">
                            <p>Build a digital platform that lets users care for their loved ones' graves from anywhere in the world.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card grave-brown">
                            <p>Design a respectful, calm, and emotionally sensitive user experience that supports grief and remembrance.</p>

                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card grave-light">
                            <p>Create a bridge of connection between families and caretakers by using trust, transparency, and technology.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="row mt-4">
                    <div class="col-12 col-lg-10   ">
                        <div class="info-card grave-brown">
                            <p>Enable local service providers to receive, accept, and complete grave care requests with photo/video proof.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- End Right Column -->

        </div>
    </div>
</section>
<!--End Project Goals section -->

<!-- by hassan Tech Behind the App section  -->
<section class="boujee-beachin-tech py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-4">Tech Behind the App</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Frontend</h6>
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/react-native.webp')}}" alt="React Native">
                    <p>React Native</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Backend</h6>
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/node-js.webp')}}" alt="Node.js">
                    <p>Node.js</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Database</h6>
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/mongo-db.webp')}}" alt="MongoDB">
                    <p>MongoDB</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Cloud</h6>
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/aws.webp')}}" alt="AWS">
                    <p>AWS</p>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="tech-card text-center">
                    <h6>Payments</h6>
                     <img loading="lazy" src="{{asset('images/case-studies/boujee-beachin/payment.png')}}" alt="payment">
                    <p>Stripe • G Pay</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End hassan Tech Behind the App section  -->

<!-- Start Key Features Section -->
<section class="py-5 wow fadeIn grave-Key-Features-mockup">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-4">Key Features of Grave Love</h2>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/key-feature-img.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Key Features Section -->


<!--Start Project Goals section-->
<section class="grave-result-section py-5 wow fadeInUp">
    <div class="container">
        
        <!-- Heading -->
        <div class="text-center mb-5">
            <h3 class="fw-bold">The Results (Metrics & Achievements) </h3>
            <p class="text-muted">Key metrics and achievements</p>
        </div>

        <div class="row align-items-center">
            
            <!-- Result Cards -->
            <div class="col-lg-6">
                <div class="row g-4">

                    <div class="col-12 col-sm-6">
                        <div class="grave-result-card grave-brown  h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/Vector1.webp') }}" alt="Global adoption">
                            <h6>Global Adoption</h6>
                            <p>UK and US expats form 75% of first-time users.</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="grave-result-card grave-light h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/Vector2.webp') }}" alt="User engagement">
                            <h6>User Engagement</h6>
                            <p>High engagement during the first month.</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="grave-result-card  grave-light h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/Vector3.webp') }}" alt="Retention rate">
                            <h6>Retention Rate</h6>
                            <p>Strong emotional-driven user retention.</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6">
                        <div class="grave-result-card grave-brown  h-100">
                             <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/Vector4.webp') }}" alt="Organic growth">
                            <h6>Organic Growth</h6>
                            <p>Steady growth without paid marketing.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Mobile Image -->
            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <div class="grave-result-image">
                     <img loading="lazy" src="{{ asset('images/case-studies/grave-love-app/the-result-img.webp') }}" 
                         class="img-fluid" 
                         alt="Grave Love App results">
                </div>
            </div>

        </div>
    </div>
</section>

<!--End Project Goals section-->

<!-- Start Mockup Section -->
<section class="py-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/grave-love-app/grave-love-morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection