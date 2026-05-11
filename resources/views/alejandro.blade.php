@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<!-- start hero Alejandro section  -->

<section class="Alejandro-hero-section breadcrumb-areav2 ">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-12">
                <div class="bread-titlev2 mt-4">
                     <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/logo.webp')}}" class="img-fluid logo" alt="Alejandro logo">
                    <h1>Effortless Appraisal Management at Your Fingertips</h1>
                    <p class="pt-3">Schedule, assign, and track appraisal tasks all from a mobile first platform. </p>
                </div>
                 <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/hero-images.webp')}}" class="img-fluid hero-img" alt="Alejandro hero img">
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->
<!-- end hero Alejandro section  -->

<!--Start Client Overview Section -->
<section class="Alejandro-client-overview  royal-relax-spaceing wow fadeIn " data-wow-delay="0.4s">
    <div class="container">

        <div class="row client-wood-land-wrapper">
            <div class="col-lg-6 my-lg-auto ">
                <div class="common-heading">
                    <h2>Client Overview</h1>
                        <p>Woodland is a concept-driven mobile app allowing users to dive into books through reading or listening — while connecting with fellow readers. The goal was to create a minimal, distraction-free design that feels personal, modern, and deeply immersive. </p>
                </div>
                <div class="left-border-clint-overview">
                    <h6>Industry</h6>
                    <p>Digital Publishing & Audio Content</p>
                </div>
                <div class="left-border-clint-overview">
                    <h6>App Type</h6>
                    <p>Concept Project for Book Lovers</p>
                </div>
                <div class="left-border-clint-overview">
                    <h6>Services</h6>
                    <p>UX Research, UI Design, Design System, Mobile App UI (iOS + Android)</p>
                </div>
            </div>
            <div class="col-lg-6">
                 <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/clients-overview.webp')}}" alt="client-overview" width="100%" height="100%">
            </div>

        </div>

    </div>
</section>
<!--End Client Overview Section -->

<!-- start royal relax spa problem solution -->
<section class="Alejandro-problem-solution royal-relax-spaceing wow fadeInUp">
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
                        <p class="card-text-custom">Centralized task assignment replaced scattered manual coordination.</p>

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
                        <p class="card-text-custom">Live status updates eliminated confusion around progress tracking.</p>

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
                        <p class="card-text-custom">Appraisers now access digital templates and checklists anytime.

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
                        <p class="card-text-custom">In-app alerts keep both admin and appraisers in sync in real time.</p>

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
                        <p class="card-text-custom">Reports and documents are uploaded, stored, and tracked digitally.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- start royal relax spa problem solution-->


<!-- Start Our Design Objectives Section -->
<section class="Alejandro-objectives-section  royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading">
                    <h2 class="mb-5 text-center">Our Design Objectives</h2>
                </div>
            </div>
        </div>
        <div class="central-line"></div>
        <div class="row">
            <div class="col-lg-6">
                <div class="feature-box-group">
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme  mb-3">User-Centric Interface</h4>
                        <p class="text-muted mb-0">Deliver a clean and intuitive UI tailored for both beginner investors and experienced traders.</p>
                    </div>
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme  mb-3">Quick Trade Execution </h4>
                        <p class="text-muted mb-0">Enable users to place buy/sell orders in just a few simple taps, with real-time confirmation.</p>
                    </div>
                    <div class="feature-box mb-5 left-item">
                        <h4 class="text-theme  mb-3">Simplified Onboarding</h4>
                        <p class="text-muted mb-0">Create a beginner-friendly onboarding process to guide first-time users through key features.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 right-column-wrapper">
                <div class="feature-box-group">
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme  mb-3">Real-Time Market Integration</h4>
                        <p class="text-muted mb-0">Present beach content tailored to users' lifestyle preferences, including luxury, aesthetics, and social relevance.</p>
                    </div>
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme  mb-3">Customizable Portfolio Dashboard</h4>
                        <p class="text-muted mb-0">Allow users to personalize their view of assets, gains, losses, and performance graphs.</p>
                    </div>
                    <div class="feature-box mb-5 right-item">
                        <h4 class="text-theme  mb-3">Mobile-First Performance</h4>
                        <p class="text-muted mb-0">Optimize layout and flow for speed, responsiveness, and seamless use across all mobile devices. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Design Objectives Section -->


 
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
                             <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/Avatar-1.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Mark Sullivan</h4>
                            <p>Appraisal Firm Owner</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
                            <p>
                                <b>Age</b>: 42
                            </p>
                            <p>
                                <b>Marital status</b>: Married
                            </p>
                            <p>
                                <b>Location</b>Dallas, Texas
                            </p>
                            <p>
                                <b>Occupation</b>: Business Owner
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Assign property inspections efficiently to mobile appraisers.</li>
                            <li>Get a clear overview of all orders, assignments, and deadlines.</li>
                            <li>Upload and manage inspection templates in one place.</li>
                            <li>Monitor appraiser progress and receive real-time updates.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
                        <ul>
                            <li>Manages everything manually through spreadsheets and phone calls.</li>
                            <li>No visibility into what’s happening after a task is assigned.</li>
                            <li>Needs centralized system without switching between apps and tools.</li>
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
                             <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/Avatar-2.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>Jessica Reed</h4>
                            <p>Mobile Field Appraiser</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
                            <p>
                                <b>Age</b>: 22
                            </p>
                            <p>
                                <b>Marital status</b>: Single
                            </p>
                            <p>
                                <b>Location</b>: Phoenix, Arizona
                            </p>
                            <p>
                                <b>Occupation</b>: – Field Appraiser
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="persona-card persona-goals-section mb-4">
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Quickly view assigned properties and their deadlines.</li>
                            <li>Upload reports and images directly from her mobile device.</li>
                            <li>Stay alerted for new assignments and incomplete tasks.</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
                        <ul>
                            <li>Often misses updates when using email or text-based task assignment.</li>
                            <li>Delays sending reports due to complex document handling.</li>
                            <li>Lacks an organized system to manage day-to-day fieldwork.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hassan USER PERSONA -->



<!-- Start Wireframes Section -->
<section class="Alejandro-wireframe   royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="my-3">Wire Frame</h2>
                    <p class=" ">Early wireframes helped us plan the layout, navigation flow, and app structure allowing us to validate ideas before investing in visuals.</p>
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

<!-- Start Key Features Section -->
<section class="Alejandro-Designs-section  wow fadeIn royal-relax-Features-mockup royal-relax-spaceing">
    <div class="container">
        <div class="common-heading my-4">
            <h2 class="text-center ">Final UI Designs</h2>
            <p>The final product delivers a seamless and task-focused experience for both admins and field appraisers, optimized for clarity, mobile performance, and operational efficiency.</p>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/final-ui-design.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Key Features Section -->


<!-- Start App Screens -->
<section class="grave-love-apps royal-relax-spaceing wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="my-3 text-center">App Screens  </h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-4.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-5.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-6.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-7.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-8.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-9.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-10.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-11.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-12.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-13.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-14.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-15.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/appscreen-16.webp')}}" alt="App Screens" class="img-fluid"></div>

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

 






<!--Start UI/UX Design Phase section -->
<section class="mike-mathis-design-phase wow fadeInUp royal-relax-spaceing">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">

            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="Project-Description-content-block">

                    <h2 class="mike-mathis-design-phase-title">UI/UX Design Phase</h2>
                    <h5 class="mike-mathis-design-phase-title">Prototyping</h5>
                    <p class="mike-mathis-design-phase-paragraph">
                       We translated key user flows creating an expense, attaching receipts, and submitting for approval—into low‑fidelity wireframes to validate layout and information hierarchy. After aligning on the flow, we built high‑fidelity prototypes with clear states (draft, submitted, approved/rejected) and minimal steps to reduce friction for frequent users.</p>
                    <h5 class="mike-mathis-design-phase-title">Testing and Feedback</h5>
                    <p class="mike-mathis-design-phase-paragraph">
                     We conducted quick usability checks with 4–6 participants (employees and approvers) to evaluate task completion and clarity of approval status. Feedback helped us improve form field grouping, reduce cognitive load with better labels and helper text, and refine navigation so users could quickly track approvals and reimbursements.
                    </p>


                </div>


            </div>
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 mike-mathis-design-phase-left-container">
                 <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/uiux-pase-image.webp')}}" class="img-fluid" alt="project description">
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
                 <img loading="lazy" src="{{asset('images/case-studies/alejandro-app/morkup.jpg')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection