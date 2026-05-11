@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class=" couple-app breadcrumb-areav2">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-md-6 col-lg-6 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                     <img loading="lazy" src="{{asset('images/case-studies/couple-app/logo.webp')}}" class=" logo" alt="couple-app logo">
                    <h1>One App, for <br> Both of You
                    </h1>
                    <p class="pt-3">
                       Plan your dream wedding with <br>ease track guests, manage <br> tasks, and celebrate every big <br> moment.
                    </p>
                    <h4 class="mt-2 couple-tag">Plan Your Dream Wedding Now </h4>
                    
                </div>
            </div>

            <div class="col-md-6  col-lg-6 mt-5 mt-lg-0  couple-app-hero-img">     
                 <img loading="lazy" src="{{asset('images/case-studies/couple-app/hero-img.webp')}}"
                    class="img-fluid hero-img"
                    alt="couple-app-app">
            </div>

        </div>
    </div>

</section>
<!-- End Breadcrumb Area-->

 

 <!--Start Client Overview Section -->
<section class="couple-app-client-overview py-5 wow fadeIn" data-wow-delay="0.4s">
    <div class="container">
       
            <div class="row couple-app-land-wrapper">
                <div class="col-lg-6 my-lg-auto ">
                    <div class="common-heading">
                        <h2>Client Overview</h1>
                            <p>Wedding Couple App is a concept-based mobile platform designed to help modern couples plan, organize, and celebrate their journey together. From engagements to anniversaries, the app creates a romantic and emotionally meaningful experience that keeps couples connected.</p>
                    </div>
                    <div class="left-border-clint-overview">
                        <h6>Industry</h6>
                        <p>Wedding Planning, Event Management, Couple Lifestyle</p>
                    </div>
                    <div class="left-border-clint-overview">
                        <h6>App Type</h6>
                        <p>Concept Project for Couples & Wedding Planners</p>
                    </div>
                    <div class="left-border-clint-overview">
                        <h6>Services</h6>
                        <p>UX Research, UI Design, Design System, Mobile App UI (iOS + Android)</p>
                    </div>
                </div>
                <div class="col-lg-6 couple-app-clint-overview-img">
                     <img loading="lazy" src="{{asset('images/case-studies\couple-app/client-overview-img.webp')}}" alt="client-overview" width="100%" height="100%">
                </div>

            </div>
        
    </div>
</section>
<!--End Client Overview Section -->


<!-- Start Key Problems  Section -->
<section class=" wow fadeIn py-5">
    <div class="container couple-app-key-problems">
        <div class="row align-items-start">

            <div class="col-lg-6 my-lg-auto">
                <div class="common-heading development-challenges-left">
                    <h2>Key Problems  </h1>
                        <p>Couples often face stress while planning weddings due to scattered tools, lack of personalization, and emotional disconnect. Most apps focus heavily on logistics, leaving out the shared experience and romantic details that make the journey memorable. </p>
                </div>

            </div>
            <div class="col-lg-6 my-auto">

                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="info-card3">
                            <div class="card-number-circle">01</div>
                            <p>Couples manage wedding tasks across different apps, leading to confusion.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card3">
                            <div class="card-number-circle">02</div>
                            <p>No shared platform for couples to plan and communicate emotionally.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card3">
                            <div class="card-number-circle">03</div>
                            <p>Existing apps lack personal touches like love notes and countdowns.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="info-card3">
                            <div class="card-number-circle">04</div>
                            <p>Planning tools focus on logistics, not the couple’s overall experience.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- End Key Problems Section -->

<!-- Start Challenges & Iterations Section -->
<section class="wood-land-challenges wow fadeIn py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="common-heading">
                    <h2>How Our App Thoughtfully Solves These Problems</h2>
                </div>
                <div class="challenges">
                    <ul>
                        <li>
                             <img loading="lazy" src="{{asset('images/case-studies\couple-app/vactor.webp')}}" alt="vector">
                            <p>A single platform to manage everything: guests, tasks, notes, and scheduling.</p>
                        </li>
                        <li>
                             <img loading="lazy" src="{{asset('images/case-studies\couple-app/vactor.webp')}}" alt="vector">
                            <p>Shared couple dashboard for real-time planning and emotional connection.</p>
                        </li>
                        <li>
                             <img loading="lazy" src="{{asset('images/case-studies\couple-app/vactor.webp')}}" alt="vector">
                            <p>Built-in features like love notes, countdowns, and memory timelines.</p>
                        </li>
                        <li>
                             <img loading="lazy" src="{{asset('images/case-studies\couple-app/vactor.webp')}}" alt="vector">
                            <p>Romantic, stress-free UX designed around the couple, not just logistics.</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-md-6 text-center text-md-end">
                 <img loading="lazy" class="img-fluid" src="{{asset('images/case-studies/Couple-app/app-thoughtfully-img.webp')}}" alt="wood-land-challenges">
            </div>
        </div>
    </div>
</section>
<!-- End Challenges & Iterations Section -->


<!-- Start Wireframes Section -->
<section class="  my-5  wow fadeIn">
    <div class="love-app-wireframe-wrapper">
    <div class="container">
        <div class="row ">
            <div class="col-12">
                <div class="common-heading text-center">
                    <h2 class="mb-3">Wireframes</h2>
                    <p class="mb-5">Low-fidelity wireframes were created to visualize the app's structure, user journey, and screen flow—laying the foundation for a smooth and intuitive design experience.</p>
                </div>
            </div>
        </div>

        <div class="row g-3 love-app-wireframe-gallery">
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                 <img loading="lazy" src="{{asset('images/case-studies/couple-app/wireframe1.webp')}}" alt="couple app Wireframe" class="wire-img">
            </div>
            
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                 <img loading="lazy" src="{{asset('images/case-studies/couple-app/wireframe2.webp')}}" alt="couple app Wireframe" class="wire-img">
            </div>
            
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                 <img loading="lazy" src="{{asset('images/case-studies/couple-app/wireframe3.webp')}}" alt="couple app Wireframe" class="wire-img">
            </div>
            
            <div class="col-6 col-md-3 col-lg-3 col-xl-3">
                 <img loading="lazy" src="{{asset('images/case-studies/couple-app/wireframe4.webp')}}" alt="couple app Wireframe" class="wire-img">
            </div>
            
             
            
            
             
        </div>
        </div>
    </div>
</section>
<!-- End Wireframes Section -->
 <!-- Start Design Goals Section -->
        <section class="couple-app-designs py-5 wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="common-heading">
                            <h2 class="text-center  mb40">Designing a Thoughtful & Emotion Centered <span> Wedding App </span>Experience</h2>
                        </div>
                    </div>
                </div>

                <div class="neuro-night-central-line"></div>

                <div class="row">
                    <div class="col-lg-6 left-column-neuro-night">
                        <div class="neuro-night-feature-box-group">
                            <div class="neuro-night-feature-box mb-5 left-item">
                                <h4 class="neuro-night-text-theme  mb-3">Discovery & Research</h4>
                                <p class="  mb-0">We identified key challenges couples face during wedding planning and analyzed apps that lacked emotional personalization and shared control.</p>
                            </div>

                            <div class="neuro-night-feature-box mb-5 left-item">
                                <h4 class="neuro-night-text-theme mb-3">Wireframes & User Flows</h4>
                                <p class="  mb-0">Built low-fidelity wireframes and mapped out journeys  from onboarding to guest tracking, task lists, and personal note sharing.</p>
                            </div>

                            <div class="neuro-night-feature-box mb-5 left-item">
                                <h4 class="neuro-night-text-theme mb-3">Feature Integration</h4>
                                <p class="  mb-0">Integrated custom features such as love notes, countdowns, budget tracking, and shared to-do lists  all designed to support joint experiences.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 right-column-neuro-night">
                        <div class="neuro-night-feature-box-group">
                            <div class="neuro-night-feature-box mb-5 right-item">
                                <h4 class="neuro-night-text-theme mb-3">Defining User Personas</h4>
                                <p class="  mb-0">Created realistic personas representing engaged and married couples to better understand their daily rituals, planning behavior, and emotional needs.</p>
                            </div>

                            <div class="neuro-night-feature-box mb-5 right-item">
                                <h4 class="neuro-night-text-theme mb-3">UI Design Direction</h4>
                                <p class="  mb-0">Developed a soft, romantic UI using soothing tones and curved elements to create a sense of warmth, love, and clarity throughout the experience.</p>
                            </div>

                            <div class="neuro-night-feature-box mb-5 right-item">
                                <h4 class="neuro-night-text-theme mb-3">Prototyping & Handoff</h4>
                                <p class=" mb-0">Created interactive prototypes using Figma, tested with simulated users, and refined interactions for a smooth and emotionally intuitive final product.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Design Goals Section -->
 
<!-- by hassan Tech Behind the App section  -->
<section class="boujee-beachin-tech py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="text-center mb-4">Tools and Technologies Used</h2>
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
<section class="grave-love-apps py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">App Screens</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen4.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen5.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen6.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen7.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen8.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen9.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen10.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen11.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen12.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen13.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen14.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen15.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/appscreen16.webp')}}" alt="App Screens" class="img-fluid"></div>

        </div>
    </div>
</section>
<!-- End App Screens -->

<!-- by hassan USER PERSONA -->
<section class="my-5 couple-persona-section">
    <div class="container">
        <div class="persona-card-main wow fadeInUp">
            <div class="row persona-top-heading">
                <div class="col-md-12 text-center">
                    <h3>USER PERSONA</h3>
                </div>
                 
            </div>

        </div>
        <div class="container persona-section-wrapper my-4 wow fadeInUp">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="persona-card persona-left-column-card">
                        <div class="persona-name-section">
                             <img loading="lazy" src="{{asset('images/case-studies/couple-app/avtar1.webp')}}" alt="Avatar" class="img-fluid">
                            <h4>Emma</h4>
                            <p>Freelance Graphic Designer </p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
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
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Centralized wedding planning platform for checklists, budgeting, and event coordination</li>
                            <li>Aesthetic and modern interface that suits her design sensibility</li>
                            <li>Emotional features like love notes, countdowns, and photo gallery</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Challenges</h3>
                        <ul>
                            <li>Finds using multiple tools (notes, chats, Google Sheets) scattered and time-consuming</li>
                            <li>Difficult to share progress or planning details with her partner in real-time</li>
                            <li>Overwhelmed by too many features in complex wedding planning tools</li>
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
                             <img loading="lazy" src="{{asset('images/case-studies/couple-app/avtar2.webp')}}" alt="Ahmed Al-Kuwari Avatar">
                            <h4>David </h4>
                            <p>Software Engineer</p>
                        </div>
                        <div class="persona-background-section mt-auto">
                            <h3>Background</h3>
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
                        <h3>Goals and Needs</h3>
                        <ul>
                            <li>Simplified task tracking and deadlines to stay on top of wedding prep</li>
                            <li>A shared space with his partner to coordinate budget, checklist, and vendors</li>
                            <li> Clear visual dashboard for event timelines and pending tasks</li>
                            <li>Discreet and non-distracting design that's easy to use across devices</li>
                        </ul>
                    </div>
                    <div class="persona-card persona-painpoints-section">
                        <h3>Pain Points / Challenges</h3>
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
<!-- end hassan USER PERSONA -->


	<!-- by hassan UI/UX Design Phase section -->
	<section class="couple-app-uiux-section-wrapper my-5 wow fadeInUp">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 uiux-text-col">
					<h3 class="uiux-main-title">UI/UX Design Phase</h3>

					<div class="uiux-content-block">
						<h3 class="uiux-subtitle">Prototyping</h3>
						<p class="uiux-paragraph">
							We started by creating low-fidelity wireframes to map out the couple’s journey — from onboarding and event planning to shared tasks and emotional connection features. These early sketches helped define a simple, structured flow tailored to couples’ real needs.
                            <br>
                            
						</p>
					</div>

					<div class="uiux-content-block">
						<h3 class="uiux-subtitle">Testing and Feedback
						</h3>
						<p class="uiux-paragraph">User testing sessions were conducted with both mentors and mentees to evaluate usability and engagement. Feedback highlighted the value of streamlined communication tools and visual progress tracking.  </p>
					</div>
				</div>

				<div class="col-md-6 uiux-image-col">
					<div class="uiux-image-card">
						 <img loading="lazy" src="{{ asset('images/case-studies/couple-app/design-section-img1.webp') }}" alt="UI/UX Design Mockup"
							class="uiux-image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End hassan UI/UX Design Phase section -->


<!-- Start vender App  -->
<section class="grave-love-apps py-5 wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2 class="mb-3 text-center">Vendor App</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/vendor-app1.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/vendor-app2.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/vendor-app3.webp')}}" alt="App Screens" class="img-fluid"></div>
            <div class="col-md-3 col-6 my-3"> <img loading="lazy" src="{{asset('images/case-studies/couple-app/vendor-app4.webp')}}" alt="App Screens" class="img-fluid"></div>
          
           
          
             

        </div>
    </div>
</section>
<!-- End vendor App -->

 


 




<!-- Start Mockup Section -->
<section class="py-5 wow fadeIn boujee-beachin-mockup">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/couple-app/morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection