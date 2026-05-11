@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<!-- start hero royal relax spa section  -->

<section class="royal-relax-spa breadcrumb-areav2 ">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-lg-6 my-lg-auto">
                <div class="bread-titlev2 mt-4">

                    <h1>Royal Relax <br>
                        <span>Book. Manage. Relax.</span>
                    </h1>
                    <p class="pt-3">Royal Relax is a seamless spa booking and management platform that allows clients to schedule services effortlessly while giving spa managers complete control over appointments, staff, and payments. Designed with a focus on calm, luxury, and ease, the app delivers a branded experience that enhances both customer satisfaction and business efficiency. </p>
                    <h4 class="royal-relax-spa-tag">Explore the Platform <i class="fa-solid fa-arrow-right"></i> </h4>
                </div>
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 royal-relax-spa-hero-img">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/royal-spa-hero-img.webp')}}"
                    class="img-fluid hero-img"
                    alt="royal-relax-spa">
            </div>

        </div>
    </div>

</section>
<!-- End Breadcrumb Area-->
<!-- end hero royal relax spa section  -->


<!--start royal relax project Description section -->

<section class="royal-relax-project-description-section  royal-relax-spaceing wow fadeInUp ">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">


            <div class="col-12 col-md-12 col-lg-6 mt-md-4 ">
                <div class="royal-relax-project-description-contant">
                    <h2 class="my-4">Project Description</h2>
                    <p>Royal Relax is a modern spa booking and management app designed to simplify <br> appointments for clients and streamline operations for spa owners. With <br> a calming, user-friendly interface, the app offers complete control over bookings,<br> schedules, and payments—all in one seamless platform. </p>
                </div>


            </div>
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 royal-relax-project-description-img">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/project-dec-img.webp')}}" class="img-fluid" alt="royal relax project Description">
            </div>
        </div>
    </div>
</section>
<!--end  royal relax project Description section -->

<!-- start royal relax spa problem solution -->
<section class="royal-relax-spa-problem-solution royal-relax-spaceing wow fadeInUp">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="my-3">Problem Solution</h2>
            <p class=" ">Royal Relax addresses common challenges in spa management by <br> a seamless experience for both clients and service providers.</p>
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

                        </div>
                        <p class="card-text-custom">Instantly confirm appointments through a centralized booking system.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-white">
                        <div>
                            <div class="number-circle">02</div>

                        </div>
                        <p class="card-text-custom">A clean interface with categorized services and time slots for quick booking.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">03</div>

                        </div>
                        <p class="card-text-custom">Geo-tag graves on the map for future visits.

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

                        </div>
                        <p class="card-text-custom">Set recurring services like monthly or annual grave maintenance.</p>

                        <!-- Connector -->
                        <div class="card-connector-plus">+</div>
                    </div>
                </div>

                <!-- Card 05 -->
                <div class="col-custom">
                    <div class="card-custom bg-custom-gray">
                        <div>
                            <div class="number-circle">05</div>

                        </div>
                        <p class="card-text-custom">Subscribe to care packages based on user needs and budget.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- start royal relax spa problem solution-->





<!-- Start  Target Audience section -->
<section class="user-research royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="common-heading text-center">
            <h2 class="my-3">Target Audience</h2>
            <p class="mb-5 ">Royal Relax is designed for users who value time, ease, and high-quality self-care <br> experiences, as well as spa businesses looking to modernize their operations.</p>

        </div>
        <div class="row align-items-center">

            <div class="col-md-6 mb-4 mb-md-0">

                <ul class="user-research-ul">
                    <li>Working clients ( women aged 25–45) who want a fast, stress-free way </li>
                    <li>People busy lifes who value on-the-go mobile solutions for personal care</li>

                </ul>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">

                <ul class="user-research-ul">
                    <li>Small to medium wellness businesses needing to manage bookings .</li>
                    <li>coordinators managing appointment schedules and payments.</li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Target Audience section -->


<!--Start Project Goals section -->
<section class="royal-relax-spa-project-goals royal-relax-spaceing wow fadeIn">
    <div class="container grave-love-project-goals">
        <div class="common-heading text-center">
            <h2 class="my-5">Project Goals</h2>

        </div>
        <div class="row align-items-start">

            <!-- Left Image -->
            <div class="col-lg-6 mb-md-4 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/project-goal.webp')}}"
                    class="img-fluid"
                    alt="  project-goals">


            </div>

            <!-- Right Content -->
            <div class="col-lg-6 my-auto">

                <!-- Card 1 -->
                <div class="row">
                    <div class="col-12 col-lg-10  ">
                        <div class="info-card grave-light">
                            <p>Create a frictionless and user-friendly appointment system for spa clients.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card grave-brown">
                            <p>Provide spa managers with tools to manage bookings, staff, services, and payments in one place.</p>

                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="row mt-4">
                    <div class="col-12 col-lg-11 offset-lg-1">
                        <div class="info-card grave-light">
                            <p>Design a relaxing, visually elegant interface that reflects premium spa aesthetics.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="row mt-4">
                    <div class="col-12 col-lg-10   ">
                        <div class="info-card grave-brown">
                            <p>Enable live tracking of bookings, reminders, and status updates for both staff and clients.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- End Right Column -->

        </div>
    </div>
</section>
<!--End Project Goals section -->

<!-- by hassan USER PERSONA -->
<section class="royal-relax-spa-persona royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="persona-card-main wow fadeInUp">
            <div class="row persona-top-heading">
                <div class="col-md-6 text-center">
                    <h3 class="my-4">USER PERSONA</h3>
                </div>

            </div>

        </div>
        <div class="container persona-section-wrapper my-4 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                            <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/avatar1.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Emily Thompson</h4>
                            <p>USA-Based User</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
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
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Effortless Booking: Wants to schedule spa appointments quickly during breaks or after work hours.</li>
                            <li>Service Transparency: Prefers knowing pricing, staff availability, and service details before booking.</li>
                            <li>Clean UI: Expects a modern, intuitive interface with smooth user flow.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
                        <ul>
                            <li>Busy Lifestyle: Has limited time to call spas or check availability manually.</li>
                            <li>Inconsistent Spa Apps: Finds most booking apps outdated or confusing.</li>
                            <li>No Central Management: Dislikes managing appointments through email or text across platforms.</li>
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
                            <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/avatar2.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Michael Rivera </h4>
                            <p>Business-Focused User</p>
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
                            <li>She feels uncomfortable using apps where there is no female-friendly or family-oriented experience.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hassan USER PERSONA -->



<!-- Start Wireframes Section -->
<section class="royal-relax-spa-wireframe   royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="my-3">Wire Frame</h2>
                    <p class=" ">These low-fidelity wireframes outline the core user flow and layout structure, helping to visualize the app experience before high-fidelity design.</p>
                    <h4 class="mb-5">App Wireframes</h4>
                </div>
            </div>
        </div>

        <div class="row g-3 grave-love-wireframe-gallery">
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/wirefram1.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/wirefram2.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/wirefram3.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/wirefram4.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/wirefram5.webp')}}" alt="Boujee Beachin Wireframe 3" class="wire-img">
            </div>
            <div class="col-6 col-md-3 col-xl-2">
               <img loading="lazy" src="{{asset('images/case-studies/couple-app/wireframe1.webp')}}" alt="couple app Wireframe" class="wire-img">  
            </div>
            

        </div>
    </div>
</section>
<!-- End Wireframes Section -->

 <!-- Start App Screens -->
<section class="grave-love-apps royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="my-3 text-center">App Screens Phase 1</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen4.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen5.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen6.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen7.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen8.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen9.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen10.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen11.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen12.webp')}}" alt="App Screens" class="img-fluid"></div>

        </div>
    </div>
</section>
<!-- End App Screens -->


<!-- by hassan Tech Behind the App section  -->
<section class="boujee-beachin-tech royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center my-4">Tech Behind the App</h2>
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

 <!-- Start App Screens -->
<section class="grave-love-apps royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="my-3 text-center">App Screens Phase 2</h2>
        </div>
        <div class="row">
            <div class="col-md-2 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen-fase-2-1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-2 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen-fase-2-2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-2 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen-fase-2-3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-2 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen-fase-2-4.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-2 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen-fase-2-5.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-2 col-6 my-3"><img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/appscreen-fase-2-6.webp')}}" alt="App Screens" class="img-fluid"></div>
        </div>
    </div>
</section>
<!-- End App Screens -->


 

<!-- Start Key Features Section -->
<section class="  wow fadeIn royal-relax-Features-mockup royal-relax-spaceing">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center my-4">Key Features of Royal Relax Spa</h2>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/key-features-img.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Key Features Section -->

 <!--Start UI/UX Design Phase section -->
<section class="mike-mathis-design-phase wow fadeInUp royal-relax-spaceing">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
          
            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="Project-Description-content-block">

                    <h2 class="mike-mathis-design-phase-title">UI/UX Design Phase</h2>
                    <h5 class="mike-mathis-design-phase-title">Prototyping</h5>
                    <p class="mike-mathis-design-phase-paragraph">
                        We began the design process by creating low-fidelity wireframes to define the app’s structure, flow, and interaction points. The goal was to map out both client-side and admin-side journeys, ensuring a smooth navigation experience.</p>
                    <h5 class="mike-mathis-design-phase-title">Testing and Feedback</h5>
                    <p class="mike-mathis-design-phase-paragraph">
                      Client feedback emphasized the need for fast booking flow and visual clarity, while spa managers valued functional dashboards and appointment overview simplicity. Based on this, we made key UI adjustments to button sizing, menu hierarchy, and screen transitions for better engagement and satisfaction.
                    </p>


                </div>


            </div>
              <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 mike-mathis-design-phase-left-container">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/UIUX-IMAGE.webp')}}" class="img-fluid" alt="project description">
            </div>

        </div>
    </div>
</section>
<!--End UI/UX Design Phase section -->


<!-- Start Mockup Section -->
<section class=" wow fadeIn boujee-beachin-mockup royal-relax-spaceing">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/royal-relax-spa/morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection