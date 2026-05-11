@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 android-app-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Top-Rated Android App Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Leverage the most used mobile platform—Android—to expand your business’s boundaries with our exceptional Android app development services.</p>
				</div>

			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				 <img loading="lazy" src="images/services/android-app-development/android-app-banner-img.webp" class="img-fluid" alt="Android App Development" width="100%" height="100%">
			</div>
			 

		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section id="mycounterSection" class="py-5 scale-up-services-section">
	<div class="container">
		<div class="row">
			<!-- Left Content -->
			<div class="col-lg-7 col-md-12 order-2 order-lg-1 ">
				<div data-text="Android" class="light-bg-text bg-text">
					<h2>Scale-Up With Our<br> <span class="flup-theme">Custom Android App</span> Development Services</h2>
				</div>
				<p><strong>Get an android app that you deserve - appealing user interface, robust responsiveness and functionality, feature-rich, and highly scalable.</strong></p>
				<p>Did you know? Android accounts for 88% of the global smartphone market, with Google Android OS powering over 2 billion smart devices. AppsNation is making the most out of it with the top-talented android developers, more like android wizards - striving to create your innovative, unique android app.</p>
				<br>
				<p>AppsNation is a data-driven android app development agency that solely relies on analytics and numbers to create an app. We offer startups, SMBS, and major enterprises the solution to thrive in the industry and make a statement with a remarkable android application. AppsNation builds android apps with visually appealing UI/UX that works flawlessly on all devices regardless of the screen size.</p>
				<!-- Button -->
				<div class="square mt-4">
					<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="btn-br bg-btn3 bg-btn-scalup btshad-b2 lnk">Let's Connect
						<span class="circle"> </span>
					</a>
				</div>
			</div>

			<!-- Right Image -->
			<div class="col-lg-5 col-md-12 text-center order-1 order-lg-2">
				<div class="wow fadeIn">
					 <img loading="lazy" src="images/services/android-app-development/android-app-development.webp" alt="Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
		</div>

		<div class="row justify-content-center wow fadeIn  achievements-count mt-3">
			<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
				<h2 id="count1" class="numbers-count">10+</h2>
				<p class="numbers-about">Years On The market</p>
			</div>
			<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
				<h2 id="count2" class="numbers-count">900+</h2>
				<p class="numbers-about">People On Board</p>
			</div>
			<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
				<h2 id="count3" class="numbers-count">10k</h2>
				<p class="numbers-about">Projects Delivered</p>
			</div>
			<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
				<h2 id="count4" class="numbers-count">67</h2>
				<p class="numbers-about">Our Current NPS Score</p>
			</div>
		</div>
	</div>
</section>

<!--End About-->


<!--Start Service-->
<section class="service-section-app py-5 dark-bg2 overflow-x-hidden">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our Unrivaled <span>Android App</span> Development Services</h2>
					</div>
					<p><a href="{{url('/')}}" target="_blank">AppsNation</a> Android App development services are the light of hope for you to reshape your business with more digital traction.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/android-ui-ux-designing.svg" alt="Android UI/UX Designing" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Android UI/UX Designing</h3>
					</div>
					<div class="services-text-div">
						<p>We design alluring and intuitive UI/UX designs to grab users' attention with a client-focused approach in our minds to preserve the integrity of the brand.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/android-web-based-apps.svg" alt="Android Web-Based Apps" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Android Web-Based Apps</h3>
					</div>
					<div class="services-text-div">
						<p>In case you want the app to run on multiple platforms and devices, AppsNation is your ideal choice for web-based Android app development.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/app-porting.svg" alt="App Porting" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>App Porting</h3>
					</div>
					<div class="services-text-div">
						<p>Owning an app already? Want the same app on another platform or Android? We offer you adequate app porting services, offering the app cross-platform abilities.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/app-testing.svg" alt="App Testing" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>App Testing</h3>
					</div>
					<div class="services-text-div">
						<p>With the most experienced quality assurance experts in the industry, we test your Android app thoroughly with manual and automated testing to ensure a seamless user experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/app-consultation.svg" alt="App Consultation" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>App Consultation</h3>
					</div>
					<div class="services-text-div">
						<p>Get yourself professional guidance on the bespoke Android app development from the most experienced and competent experts with in-depth analysis of your business.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/android-app-development-consultation.svg" alt="Android App Development Consultation" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Android App Development Consultation</h3>
					</div>
					<div class="services-text-div">
						<p>Our Android app development services are based primarily on research and data analysis. Therefore, we offer you result-driven strategies for a custom Android application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/custom-android-app-development.svg" alt="Custom Android App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Custom Android App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Convert your brand into a tap with our outstanding custom Android app development services that serves your purpose, solves your problem, and meet your needs.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/multi-platform-deployment.svg" alt="Multi-Platform Deployment" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Multi-Platform Deployment</h3>
					</div>
					<div class="services-text-div">
						<p>We help you deploy a mobile app project across different platforms with ease in the shortest time possible to make your app available to multiple devices.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/android-app-development/android-watch-app-development.svg" alt="Android Watch App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Android Watch App Deployment</h3>
					</div>
					<div class="services-text-div">
						<p>With best-in-class watchOS expert developers, our Android Watch app development services enhance your business's accessibility and mobility.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

 

<!--Start Features-->
<section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 fadeIn">
				<div class="tab-content" id="imagetab">

					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane features-content active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@else
					<div class="tab-pane features-content fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@endif

					@endforeach

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
				<h2>Different Industries We Serve:</h2>
				<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
				<ul class="nav nav-tabs features-tab" id="headingtab" role="tablist">

					@foreach($agencystack as $k=>$items)
					@if($k==0)
					<li class="nav-item">
						<a class="nav-link active" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
					</li>

					@else
					<li class="nav-item">
						<a class="nav-link" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
					</li>
					@endif
					@endforeach

				</ul>
				<div class="tab-content pt-3" id="texttab">

					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane image-content active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p class="py-3">{!!$items['content']!!}</p>
					</div>
					@else

					<div class="tab-pane image-content fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p class="py-3">{!!$items['content']!!}</p>
					</div>

					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Features-->


<!--Start Let's Work Together-->
<section class="my-4">
	<div class="container">

		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-9">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-8 my-auto">
							<p class="text-center text-lg-start">Let's Start a <span>New Project</span> Together</span> </p>
						</div>
						<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
							<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
								<i class="fas fa-chevron-right fa-icon"></i>
								<span class="circle"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!--End Let's Work Together-->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">We assist you in using Android's distinct set of characteristics by merging it with cutting-edge technologies such as <a href="{{url('/ar-app-development')}}" target="_blank">Augmented Reality</a>, <a href="{{url('/vr-app-development')}}" target="_blank">Virtual Reality</a>, <a href="{{url('/mr-app-development')}}" target="_blank">Mixed Reality</a>, and Blockchain.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/free-mobile-app-consultation.svg" alt="Free Mobile App Consultation" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Free Mobile App Consultation</h3>
					<p class="description">With AppsNation, you can consult your way to success for free.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/50+-expert-android-developers.svg" alt="50+ Expert Android Developers" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">50+ Expert Android Developers</h3>
					<p class="description">Unleash your true potential with best-in-class Android developers across the globe.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/flexible-hiring-models.svg" alt="Flexible Hiring Models" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Flexible Hiring Models</h3>
					<p class="description">AppsNation is accessible to everyone regardless of the business size and the industry with personalized pricing packages.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/247-technical-support.svg" alt="24/7 Technical Support" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Never feel overwhelmed; our technical staff is available 24/7 to resolve any issues with the application.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/100-transparency.svg" alt="100% Transparency" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">100% Transparency</h3>
					<p class="description">With customer satisfaction our utmost priority, we keep ourselves transparent to the client to trust us with the app.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/3-months-free-delivery.svg" alt="3-Months Free Support After Delivery" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">3-Month Free Support After Delivery</h3>
					<p class="description">We offer 3-month of free support after app launch to ensure the app's integrity.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why Choose-->
 
<section class="py-5 process-tabs-section">
	<div class="container">
		<div class="row my-5">
			<div class="col-12">
				<div class="common-heading ptag fadeIn">
					<div data-text="Process" class="light-bg-text bg-text">
						<h2>Our <span>Mobile App</span> Development Process</h2>
					</div>
					<p>Our Mobile app development process is a well-structured journey that begins with a thorough project scope determination early in the project life cycle. We then venture into a series of iterative cycles, leveraging Agile methodologies and sprints, to bring your product to life.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-4">
				<div class="process-btns">

					<button class="tabBtn active" onclick="openTab('tab1',this)">
						<i class="fa-solid fa-chart-line"></i>
						<span>Requirement Analysis</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab2',this)">
						<i class="fa-solid fa-pen-ruler"></i>
						<span>App Development Strategies</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab3',this)">
						<i class="fa-solid fa-mobile-screen-button"></i>
						<span>Wireframing And Designing</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab4',this)">
						<i class="fa-solid fa-check-to-slot"></i>
						<span>Development Phase</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab5',this)">
						<i class="fa-solid fa-cloud-arrow-up"></i>
						<span>App Testing</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab6',this)">
						<i class="fa-solid fa-wrench"></i>
						<span>App Deployment</span>
					</button>

				</div>

			</div>
			<div class="col-md-12 col-lg-8">
				<div class="process-tabs">
					<div id="tab1" class="tabs ">
						<div class="tabs-inner">
							<h2>Project Analysis of Requirements</h2>
							<ul>
								<li>Identify target audience, region, age, and language.</li>
								<li>Define UX/UI design strategy.</li>
								<li>Select suitable typography and visual style.</li>
								<li>Choose the right technology stack.</li>
							</ul>

							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect">Call a Schedule
								<i class="fa-solid fa-angles-right vibrate-arrow"></i>
							</a>
							<div class="tabs-icons">
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-chart-line"></i>
									<span>Trend Analysis</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-clipboard-list"></i>
									<span>Requirement Analysis</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-clipboard-check"></i>
									<span>Task Validation</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-lightbulb"></i>
									<span>Idea Generation</span>
								</div>
							</div>

						</div>
					</div>
					<div id="tab2" class="tabs">
						<div class="tabs-inner">
							<h2>Wireframing & Designing</h2>
							<ul>
								<li>Analyze business goals, target audience, and competitors.</li>
								<li>Create a result-driven Android app strategy.</li>
								<li>Develop a custom solution tailored to your app needs.</li>
								<li>Maximize user engagement and conversion rates.</li>
							</ul>


							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect">Call a Schedule
								<i class="fa-solid fa-angles-right vibrate-arrow"></i>
							</a>
							<div class="tabs-icons">
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-pen-ruler"></i>
									<span>UI Design</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-palette"></i>
									<span>Color Scheme</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-object-group"></i>
									<span>Layout Structure</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-pencil-alt"></i>
									<span>Wireframe Draft</span>
								</div>
							</div>
						</div>
					</div>
					<div id="tab3" class="tabs">
						<div class="tabs-inner">
							<h2>App Development</h2>
							<ul>
								<li>Create visually appealing UI/UX designs and prototypes.</li>
								<li>Ensure designs are scalable, reliable, and technology-rich.</li>
								<li>Incorporate client feedback and required revisions.</li>
								<li>Finalize designs after customer approval.</li>
							</ul>

							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect">Call a Schedule
								<i class="fa-solid fa-angles-right vibrate-arrow"></i>
							</a>
							<div class="tabs-icons">
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-mobile-screen-button"></i>
									<span>Mobile App</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-code"></i>
									<span>App Coding</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-laptop-code"></i>
									<span>Build Setup</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-plug"></i>
									<span>API Integration</span>
								</div>
							</div>
						</div>
					</div>
					<div id="tab4" class="tabs">
						<div class="tabs-inner">
							<h2>App Testing</h2>
							<ul>
								<li>Develop Android apps following coding standards.</li>
								<li>Build solutions based on client requirements.</li>
								<li>Use cutting-edge tools and technologies.</li>
								<li>Solve complex problems and enhance business value.</li>
							</ul>


							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect">Call a Schedule
								<i class="fa-solid fa-angles-right vibrate-arrow"></i>
							</a>
							<div class="tabs-icons">
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-bug"></i>
									<span>Bug Check</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-vial"></i>
									<span>Test Cases</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-clipboard-check"></i>
									<span>QA Approval</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-chart-line"></i>
									<span>Test Report</span>
								</div>
							</div>
						</div>
					</div>
					<div id="tab5" class="tabs">
						<div class="tabs-inner">
							<h2>App Deployment</h2>
							<ul>
								<li>Test the app thoroughly for security and performance.</li>
								<li>Detect and resolve bugs with rigorous QA processes.</li>
								<li>Validate functionality across multiple scenarios.</li>
								<li>Ensure quality through expert end-to-end testing.</li>
							</ul>



							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect">Call a Schedule
								<i class="fa-solid fa-angles-right vibrate-arrow"></i>
							</a>
							<div class="tabs-icons">
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-rocket"></i>
									<span>App Launch</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-cloud-arrow-up"></i>
									<span>Cloud Upload</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-server"></i>
									<span>Server Setup</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-box-open"></i>
									<span>App Delivery</span>
								</div>
							</div>
						</div>
					</div>
					<div id="tab6" class="tabs">
						<div class="tabs-inner">
							<h2>Maintenance</h2>
							<ul>
								<li>Release the app after successful testing and client approval.</li>
								<li>Deploy the application on the Google Play Store.</li>
								<li>Ensure compliance with Google Play guidelines.</li>
								<li>Leverage proven experience in Play Store submissions.</li>
							</ul>


							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect">Call a Schedule
								<i class="fa-solid fa-angles-right vibrate-arrow"></i>
							</a>
							<div class="tabs-icons">
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-wrench"></i>
									<span>System Fix</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-gear"></i>
									<span>Configuration</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-rotate-right"></i>
									<span>System Update</span>
								</div>
								<div class="tabs-icons-wrapper">
									<i class="fa-solid fa-shield-halved"></i>
									<span>Security Check</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- Start Hire Developers -->
<section class="hire-developers py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-xl-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2 class="text-white">Hire Developers For <span>Android App Development</span></h2>
					</div>
					<p class="pt-2 text-white">Our team of skilled and experienced developers specializes in creating tailored IT solutions that perfectly align with your business requirements. From software development to web applications, mobile apps, database management, and more, we have the expertise to deliver innovative solutions that meet your unique needs.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-xl-6 mt-3">
				<div class="row scroller">
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/android-studio.webp" class="img-fluid d-block mx-auto" alt="Unity" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-sm-0">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/android-sdk-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3 mt-lg-0">
						<div class="card stacFk-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/google-fit-sdk.webp" class="img-fluid d-block mx-auto" alt="WordPress" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3 ">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/c4dcef19-0ae5-4291-bb16-0221a5f7faf5-cover.png" class="img-fluid d-block mx-auto" alt="PHP" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/kotlin-logo.webp" class="img-fluid d-block mx-auto" alt="Angular" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/firebase-logo.webp" class="img-fluid d-block mx-auto" alt="C++" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/objective-c-logo.webp" class="img-fluid d-block mx-auto" alt="Blender" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/python-logo.webp" class="img-fluid d-block mx-auto" alt="Python" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/node-js-logo.webp" class="img-fluid d-block mx-auto" alt="Node Js" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/photon-logo.webp" class="img-fluid d-block mx-auto" alt="Photon" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/react-native-logo.webp" class="img-fluid d-block mx-auto" alt="React Native" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/js-logo.webp" class="img-fluid d-block mx-auto" alt="JS" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/html-logo.webp" class="img-fluid d-block mx-auto" alt="HTML" width="auto" height="auto">
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/laravel-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Laravel</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/sql-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Laravel</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/vuejs-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Laravel</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Hire Us -->

	<!--Start Tech-->
	<div class="techonology-used py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="common-heading ptag wow fadeIn">
						<div data-text="Technologies" class="light-bg-text bg-text mb-5">
							<h2>Technology Stack</h2>
						</div>
						<p>We create mobile apps with scalable and tested technology stack to deliver apps par excellence.</p>
					</div>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-12 wow fadeIn">
					<ul class="nav nav-tabs android-tech-tabs mt-5 justify-content-center">
						@foreach($techstack as $k=>$item)

						@if($k==0)
						<li class="nav-item">
							<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo nav-link active">
								<img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack" width="100%" height="100%">
							</a>
						</li>

						@else

						<li class="nav-item">
							<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo nav-link">
								<img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack" width="100%" height="100%">
							</a>
						</li>
						@endif
						@endforeach
					</ul>

					<div class="tab-content tab-body mt-4">

						@foreach($techstack as $k=>$items)
						@if($k==0)
						<div id="a{{$items['id']}}" class="tab-pane fade in active">
							<div class="boxseo-data text-start">
								<img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo" width="100%" height="100%">
								<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>
								<p class="mt-4">{{$items['content']}}</p>
							</div>
						</div>

						@else
						<div id="a{{$items['id']}}" class="tab-pane fade">
							<div class="boxseo-data text-start">
								<img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo" width="100%" height="100%">
								<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>

								<p class="mt-4">{{$items['content']}}</p>
							</div>
						</div>

						@endif

						@endforeach
					</div>
				</div>
			</div>
		 </div>
	</div>
		<!--End Tech-->

	<!--Start Let's Work Together-->
	<section class="my-4">
		<div class="container">
			<div class="row py-5 justify-content-center hire-developer">
				<div class="col-lg-8">
					<div class="free-cta-title v-center wow fadeIn">
						<div class="row justify-content-center">
							<div class="col-lg-8 my-auto">
								<p class="text-center text-lg-start">Hire a <span>Dedicated Developer</span> </p>
							</div>
							<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
								<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Let's Work Together-->

	<!-- Start Technologies -->
	<section class="technologies certificates py-5">
		<div class="container">
			<div class="row fadeIn">
				<div class="col-12">
					<div class="common-heading text-center">
						<div data-text="Partners" class="dark-bg-text bg-text text-center">
							<h2 class="text-white">We Partner With The <span>World's Technology</span> Leaders</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
					<div>
						 <img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
						<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
					<div>
						 <img loading="lazy" src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
						<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
					<div>
						 <img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
						<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
					<div>
						 <img loading="lazy" src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
						<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Technologies -->

	<!--Start Badges-->
	<section class="badges-section py-5">
		<div class="container">
			<div class="row fadeIn">
				<div class="col-12">
					<div class="common-heading w-tdxt text-center">
						<div data-text="Awards" class="dark-bg-text bg-text text-center">
							<h2 class="text-white">Ranked as #1 <span>Android App</span> Development Company</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 wow fadeIn">
				<div class="col-12">
					<div class="awards-slider owl-carousel owl-theme">

						@foreach($awards as $k => $item)

						@if($k%2==0)

						@if($item['heading']=="Top Website design Agencies")
						<a href="{{$item['comment']}}" target="_blank">
							<div class="award-item">
								<div class="item">
									<div class="card">
										<div class="card-body">
											 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
											<h5 class="text-center pt-3">{{$item['heading']}}</h5>
										</div>
									</div>
								</div>
							</div>
						</a>

						@else
						<div class="award-item">
							<div class="item">
								<div class="card">
									<div class="card-body">
										 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
										<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									</div>
								</div>
							</div>
						</div>
						@endif

						@else
						@if($item['heading']=="Top Website design Agencies")
						<a href="{{$item['comment']}}" target="_blank">
							<div class="award-item">
								<div class="item">
									<div class="card">
										<div class="card-body">
											 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
											<h5 class="text-center pt-3">{{$item['heading']}}</h5>
										</div>
									</div>
								</div>
							</div>
						</a>
						@else
						<div class="award-item">
							<div class="item">
								<div class="card">
									<div class="card-body">
										 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
										<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									</div>
								</div>
							</div>
						</div>
						@endif
						@endif
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Badges-->

	<!--Start Let's Work Together-->
	<section class="my-4">
		<div class="container">
			<div class="row py-5 justify-content-center hire-developer">
				<div class="col-lg-8">
					<div class="free-cta-title v-center wow fadeIn">
						<div class="row justify-content-center">
							<div class="col-lg-7 my-auto">
								<p class="text-center text-lg-start">We Promise. <span>We Deliver.</span> </p>
							</div>
							<div class="col-lg-5 text-center text-lg-start mt-5 mt-lg-0">
								<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Let's Work Together-->

	<!--Start Testinomial-->
	<section class="testimonials-section-app pt100 pb-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="common-heading text-center">
						<div data-text="Testimonials" class="dark-bg-text bg-text text-center">
							<h2 class="text-white">What <span> Our Clients</span> Say About <span>AppsNation</span></h2>
						</div>
						<h5 class="text-white">Over 1200+ Satisfied Clients and Growing</h5>
					</div>
				</div>
			</div>

			<div class="testimonial-card-a owl-carousel owl-theme">
				@foreach($testimonials as $key => $item)

				<div class="tcd card h-100">
					<div class="row">
						<div class="col-lg-6 position-relative">

							<!-- Overlay -->
							<div class="video-overlay"
								data-target="player-{{$key}}"
								style="position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;z-index:2;">
							</div>

							<!-- YouTube Video -->
							<iframe
							loading="lazy"
								id="player-{{$key}}"
								class="youtube-player testimonial-video"

								src="{{$item['comments']}}"
								title="Client Testimonial"

								frameborder="0"
								allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
								referrerpolicy="strict-origin-when-cross-origin"
								allowfullscreen>
							</iframe>

						</div>

						<div class="col-lg-6">
							<div class="testimonial-card card-body">
								<div class="tt-text">
									<p>{{$item['title']}}</p>
								</div>

								<div class="client-thumbs mt30">
									<div class="media v-center upset">
										<div class="media-body user-info v-center">
											<h3>{{$item['name']}}</h3>
											<p>{{$item['location']}}</p>
											<i class="fas fa-quote-right posiqut"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				@endforeach
			</div>

			<div class="row mt-5">
				<div class="col-12">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-4 col-xl-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://clutch.co/profile/appsnation#highlights" target="_blank">
										 <img loading="lazy" src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
										 <img loading="lazy" src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
										 <img loading="lazy" src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto" alt="DesignRush" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by DesignRush</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
										 <img loading="lazy" src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto" alt="GoodFirms" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
										 <img loading="lazy" src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto" alt="Trustpilot" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Trustpilot</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
										 <img loading="lazy" src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto" alt="Sortlist" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://upcity.com/profiles/appsnation" target="_blank">
										 <img loading="lazy" src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
										 <img loading="lazy" src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto" alt="SiteJabber" width="auto" height="auto">
										 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by SiteJabber</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 fadeIn my-auto text-center">
					<div class="review-title-ref mt40">
						<a href="{{url('/testimonials')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i class="fas fa-chevron-right fa-ani"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Testinomial-->

	<!-- Start FAQS-->
	<section class="faq-section py-5" id="faqs">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 wow fadeIn">
					<div class="common-heading">
						<div data-text="FAQ" class="light-bg-text bg-text">
							<h2>Frequently Asked Questions</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt100">
				<div class="col-sm-12 wow fadeIn">
					<div class="accordion" id="accordionExample-a">
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-b">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
									Will we sign an NDA to keep my Android app idea confidential?
								</button>
							</h2>
							<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>A Non-Disclosure Agreement (NDA) is a legal document that we employ when working on various projects to ensure that your ideas are not duplicated or leaked to rivals.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
									How do you allocate the resources for my app development in Android?
								</button>
							</h2>
							<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>For us, resource allocation is both an art and a science. Therefore, we thoroughly research your company and its competitors, including the target audience and their psychology, to provide an app that efficiently performs its objective.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
									Which tools and technologies do you use?
								</button>
							</h2>
							<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AppsNation is equipped with developers that use the high-end latest technologies and tools to foster your ideal android application.</p>
										<p class="pt-2">Mobile Frontend</p>
										<ul class="ps-5">
											<li>Native (Java/Kotlin)</li>
											<li>Xamarin Native C</li>
											<li>Xamarin Forms for Android</li>
											<li>Cordova/PhoneGap</li>
											<li>Ionic</li>
											<li>React Native</li>
										</ul>
										<p class="pt-2">Operating System</p>
										<ul class="ps-5">
											<li>Android OS</li>
										</ul>
										<p class="pt-2">SDKs/Tools/Framework</p>
										<ul class="ps-5">
											<li>Android Studio</li>
											<li>Google Fit SDK</li>
											<li>Xamarin Forms for Android</li>
											<li>OpenGL</li>
											<li>ARCorec</li>
											<li>Android Auto</li>
										</ul>
										<p class="pt-2">Platforms</p>
										<ul class="ps-5">
											<li>Amazon Web</li>
											<li>Services (AWS)</li>
											<li>Microsoft Azure</li>
											<li>Google Cloud</li>
											<li>Platform (GCP)</li>
											<li>Firebase</li>
											<li>AppCenter for CI/CD</li>
											<li>Kubernetes</li>
										</ul>
										<p class="pt-2">Others</p>
										<ul class="ps-5">
											<li>Google Assistant</li>
											<li>Google VR</li>
											<li>Machine Language (ML Kit)</li>
											<li>Cordova/PhoneGap</li>
											<li>Google Cloud</li>
											<li>Google Analytics</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
									Will you assist me to upload my Android app on the Play Store?
								</button>
							</h2>
							<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Submitting your android app on Google Play Store is a vital part of our inclusive android app development services. AppsNation has years of experience launching android apps on the Play Store, sufficiently following the guidelines.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
									Will I be getting any support after project completion?
								</button>
							</h2>
							<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Our top-notch mobile app development services include a 3-months free support and maintenance program to guarantee a successful app journey by minimizing the glitches based on user feedback.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
									How much does it cost to make an Android App?
								</button>
							</h2>
							<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>The pricing is influenced by various factors, including the complexity of the android app development. Typically, firms estimate the number of APIs and screens in an application and price accordingly. On the other hand, a standard app would cost you $5,000 or more.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
									Why your company might need Android application services?
								</button>
							</h2>
							<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Most businesses like the Android app because it allows them to reach many customers by expanding dedicated applications and growing their business. Android app development may help a company reach out to more people, increase revenue, boost brand image, and build a loyal client base.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
									What should I pay attention to while looking for Android application developers?
								</button>
							</h2>
							<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Hiring top Android developers will assist you in developing a great app that will stand out from the crowd and earn a sizable profit. Here's how to find one for yourself.</p>
										<ul class="ps-5">
											<li>Developers must be conversant with fundamental programming languages such as syntax and basics, frameworks, multithreading and concurrency, functional programming, and generics.</li>
											<li>To accelerate development processes, your developers will need to employ an SDK. Ascertain that they are familiar with Android SDKs.</li>
											<li>Android Studio knowledge is required.</li>
											<li>The developer must be well-versed in all APIs because they link applications to third-party services or apps.</li>
											<li>Developers must be familiar with databases to manage significant volumes of data and interact with a database located outside of the smartphone.</li>
											<li>Developers must comprehend the reasoning behind your company's actions. It will assist them in identifying key features, planning the development process, and delivering a mobile app solution that completely fulfils business needs.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
									Will you assist me to upload my Android app on the Play Store?
								</button>
							</h2>
							<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We approach an agile android app development process to ease our clients for the smoothest interaction with us that includes;</p>
										<ul class="ps-5">
											<li>Analysis of Requirements.</li>
											<li>App Development Strategies.</li>
											<li>Wireframing & Designing.</li>
											<li>Development.</li>
											<li>Testing.</li>
											<li>Deployment.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
									How AppsNation meet the current trends in native Android app development?
								</button>
							</h2>
							<div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AppsNation is equipped with a team of extremely tech-savvy individuals ready to learn and grow. As a result, self-study is what they do in their spare time. Furthermore, they are very engaged and driven in the subject; as a result, they crave evolution and keep up with the current developments in native Android app development.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
									Will you assist me to upload my Android app on the Play Store?
								</button>
							</h2>
							<div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AppsNation is equipped with top-rated android developers having years of experience in developing android developers for various industries. We have them on board to make the most out of them for your ideal android app. Besides, we offer our clients undeniable benefits such as;</p>
										<ul class="ps-5">
											<li>Free Consultation.</li>
											<li>50+ Expert Android Developers.</li>
											<li>Flexible Hiring Models.</li>
											<li>Technical Support.</li>
											<li>100% Transparency.</li>
											<li>3-Month Support After Delivery.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
									How can I hire Android app developers from AppsNation?
								</button>
							</h2>
							<div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We are easy to reach, just a click away. Tap on chat now or request a free quote by filling up the form mentioning your requirements for your bespoke Android app. </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End FAQS -->

	<!--Start Blogs-->
	<section class="blogs-section py-5">
		@if(count($data['data']) > 0)
		<div class="container">
			<div class="row mb100">
				<div class="col-lg-6">
					<div data-text="Blogs" class="light-bg-text bg-text">
						<h2 class="mb0 common-heading">Latest Stories</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($data['data'] as $post)
				<div class="col-12 col-md-6 col-lg-4 mt30 wow fadeIn">
					<div class="card h-100">
						<a href="{{ $post['guid'] }}">
							 <img loading="lazy" src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
						</a>
						<div class="entry-blog-post dg-bg2">
							<span class="bypost-">
								<a href="{{ $post['guid'] }}">
									<i class="fas fa-tag"></i> Appsnation
								</a>
							</span>
							<span class="posted-on-">
								<a href="{{ $post['guid'] }}">
									<i class="fas fa-clock"></i> {{ date('M d, Y', strtotime($post['post_date'])) }}
								</a>
							</span>
						</div>
						<div class="card-body">
							<h4 class="mb-0">
								<a href="{{ $post['guid'] }}">{{$post['post_title']}}</a>
							</h4>
						</div>
					</div>
				</div>
				@endforeach
				@else
			</div>
		</div>
		@endif
	</section>

	<div class="container">
		<div class="row mb-4 text-center wow fadeIn">
			<div class="col-12">
				<a href="https://blog.appsnation.co/" class="btn-main button-arounder lnk">View More
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
	<!--End Blogs-->

	@endsection