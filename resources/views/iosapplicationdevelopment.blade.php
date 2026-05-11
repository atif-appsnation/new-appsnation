@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 ios-app-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">iOS App Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Our iOS app development services serve businesses with appealing, user-friendly, robust iOS apps to build strong consumer trust by having the app of the most secure platform.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<img loading="lazy" src="images/services/ios-app-development/ios-app-banner-img.webp" class="img-fluid" alt="iOS App Development" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Breadcruumb Area-->

<!--Start About-->
<section class="service py-5" id="mycounterSection">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/services/ios-app-development/ios-app-development.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<span>Overview</span>
					<div data-text="iOS" class="light-bg-text bg-text">
						<h2>Top-Notch<br><span class="flup-theme">iOS App Development Services</span></h2>
					</div>
					<p><strong>Get yourself an industry-standard iOS application with AppsNation's most competent and expert iOS developers.</strong></p>
					<p><a href="{{url('/')}}" target="_blank">AppsNation</a> creates appealing iOS apps depending on your company's needs. Our highly skilled iOS developers create incredibly functional and user-friendly iPhone applications that can be deployed on various platforms. AppsNation is renowned for producing quality iOS apps for any business.</p>
					<p>We are the leading iOS app development company with cost-effective methodologies to make our top iOS developers connect with everyone. We thrive on digitalizing businesses with our innovative iOS applications with edge-cutting technology and tools, including tempting UI/UX designs. We automate your business processes with your envisioned ideal iOS application. What you dream and imagine will be in the palm of your hands with our custom <a href="{{url('/mobile-app-development')}}" target="_blank">mobile app development service.</a></p>
					<a href="pdf/ios-app.pdf" target="_blank" class="btn-main button-arounder lnk mt-4">Download iOS App Profile
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
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
<section class="service-section-app py-5 dark-bg2">
	<div class="container mt-3">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Custom <span>iOS App</span> Development Services</h2>
					</div>
					<p class="mb-0"><a href="{{url('/')}}" target="_blank">AppsNation</a> is the top iOS app development company with a pool of services to create a bespoke iOS application</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/ios-app-development-consultation.svg" alt="iOS App Development Consultation" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>iOS App Development Consultation</h3>
					</div>
					<div class="services-text-div">
						<p>Our iOS professionals provide you with the best counsel for your custom iOS app, including feasibility and determination of best practices and ways to design a viable solution.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/ios-ui-ux-design.svg" alt="iOS UI/UX Design" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>iOS UI/UX Design</h3>
					</div>
					<div class="services-text-div">
						<p>We offer user-friendly iOS app designs with an intuitive user interface that is aesthetically attractive and increases your application's accessibility.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/custom-ios-application-development.svg" alt="Custom iOS Application Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Custom iOS Application Development</h3>
					</div>
					<div class="services-text-div">
						<p>We build iOS apps from scratch that exclusively cater to your business and its values by analyzing your business along with the competitors.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/ios-software-testing.svg" alt="iOS Software Testing" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>iOS Software Testing</h3>
					</div>
					<div class="services-text-div">
						<p>We utilize parallel testing to run many versions of the application simultaneously. In addition, we employ native Apple ecosystem technologies to prepare code coverage communication.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/multi-platform-deployment.svg" alt="Multi-platform Deployment" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Multi-platform Deployment</h3>
					</div>
					<div class="services-text-div">
						<p>The iOS app we build can be deployed to multiple platforms other than Apple to enable accessibility of your business via any device regardless of the screen size.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/native-iphone-app-development.svg" alt="Native iPhone App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Native iPhone App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We have years of experience in iPhone app deployment by adequately following the strict guidelines of Apple's App Store with complete documentation.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/hybrid-iphone-app-development.svg" alt="Hybrid iPhone App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Hybrid iPhone App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We have skilled hybrid iOS developers that can create a top-class cross-platform iPhone app that performs brilliantly across several platforms.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/apple-watch-app-development.svg" alt="Apple Watch App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Apple Watch App Development</h3>
					</div>
					<div class="services-text-div">
						<p>With best-in-class watchOS expert developers, our Apple Watch app development services enhance your business's accessibility and mobility.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/ios-app-development/apple-tv-app-development.svg" alt="Apple TV App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Apple TV App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Take your video streaming app to a BIGGER screen with our professional Apple TV development services offered by our proficient tvOS developers.</p>
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
<section class="my-2">
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
					<div data-text="Choose Us" class="dark-bg-text bg-text ">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">We assist you in using Android's distinct set of characteristics by merging it with cutting-edge technologies such as augmented reality, virtual reality, mixed reality, and blockchain.</p>
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
						<img loading="lazy" src="images/why-choose/50+-expert-android-developers.svg" alt="50+ Expert iOS Developers" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">50+ Expert iOS Developers</h3>
					<p class="description">Unleash your true potential with best-in-class iOS developers across the globe.</p>
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

<!--Start Process-->
<!-- <section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>iOS App</span> Development Process</h2>
					</div>
					<p>AppsNation offers clients an easy and agile iOS app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Gathering</h3>
					<p class="description">Contact AppsNation to propose your significant iOS app ideas to our capable project managers and analysts. We provide the customer complete authority to properly communicate his requirements as we develop a business document containing a project brief.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">With an in-depth investigation of the client's business, rivals, and target audience, we create an excellent iOS app development plan for your custom app. Our skilled iOS app development specialists provide you with a solution that increases the conversion rate for a higher ROI.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">Expert UI, UX, visual, and interaction designers develop your product's first look and feel, model the user experience and journey, and prioritize features to keep the user engaged with its appealing user interface. Before we go any further, we make sure our client is happy with it.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">Using cutting-edge technology and techniques, our skilled iOS developers provide the functionality to the unique app design with faultless coding. They create incredibly scalable and well-optimized apps to work on every Apple device and screen size.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">This is an essential component of a successful app launch. We assist in avoiding faults and problems from reaching your target audience through a defective iOS app by utilizing our skilled Quality Assurance team, which ensures the app's excellent results.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">Our responsibility is to release the iOS app to the Apple App Store while adhering to all of the standards. Our staff creates the necessary paperwork, descriptions, and screenshots for App Store publishing and ongoing support and maintenance.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End Process-->


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
						<span>Requirement Gathering</span>
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

<!--Start Tech-->
<div class="techonology-used py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Technologies" class="light-bg-text bg-text mb-5">
						<h2>Technology Stack</h2>
					</div>
					<p class="mb30">We create mobile apps with scalable and tested technology stack to deliver apps par excellence.</p>
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
							<img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack">
						</a>
					</li>

					@else

					<li class="nav-item">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo nav-link">
							<img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack">
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
							<img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>
							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@else
					<div id="a{{$items['id']}}" class="tab-pane fade">
						<div class="boxseo-data text-start">
							<img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
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
						<h2 class="text-white">Ranked as #1 <span>iOS App</span> Development Company</h2>
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
										<p class="text-center pt-2">{{$item['content']}}</p>
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
							id="player-{{$key}}"
							class="youtube-player testimonial-video"
							loading="lazy"

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
								I want to keep my iOS app idea confidential. Will you sign an NDA with me?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>A Non-Disclosure Agreement (NDA) is a legally binding contract that we use while working on different projects to ensure that your ideas are not copied or leaked to competitors. As a result, you should not be concerned about the security of your iOS app.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Do I own the ownership and the code of my application?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Without a doubt, you are the only owner of the iOS app we created for you based on the agreement you signed and agreed to the AppsNation terms and conditions. We are an award-winning mobile app development studio for a reason: we adore and respect our clients.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Do you have flexible hiring models?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Flexible hiring is a novel employment technique that benefits businesses and resource providers. It enables you to satisfy immediate business requirements or make alternate arrangements in emergency scenarios. AppsNation offers flexible employment options to help you manage your staff, support new initiatives, and meet your short-term or seasonal needs.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								How do you allocate the resources for my app development in iOS?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>For us, allocating resources is both an art and a science. As a result, we conduct extensive research about your company and rivals, as well as the target demographic and their psychology, to deliver an app that effectively achieves its goal.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Which tools and technologies do you use?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>AppsNation has developers who employ cutting-edge technology and tools to create your dream iOS application.</p>
									<p class="pt-2">Programming Languages</p>
									<ul class="ps-5">
										<li>Swift</li>
										<li>Objective C</li>
									</ul>
									<p class="pt-2">Technologies</p>
									<ul class="ps-5">
										<li>iOS SDK</li>
										<li>iOS Native Dev Kit</li>
									</ul>
									<p class="pt-2">Database</p>
									<ul class="ps-5">
										<li>SQLite</li>
										<li>Core Data</li>
										<li>Realm</li>
									</ul>
									<p class="pt-2">IDE</p>
									<ul class="ps-5">
										<li>Xcode</li>
									</ul>
									<p class="pt-2">OS</p>
									<ul class="ps-5">
										<li>iOS 8.0-12.4.1-Support</li>
									</ul>
									<p class="pt-2">Libraries</p>
									<ul class="ps-5">
										<li>Alamofire</li>
										<li>Firebase</li>
										<li>Google Map</li>
										<li>Kingfisher</li>
										<li>Charts</li>
										<li>Fabric</li>
										<li>AF-networking</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Will I be getting regular updates from you?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Our design and development team is led by a project manager who oversees the whole process of developing your iOS app. Indeed, we provide our clients with an engaging atmosphere in which project managers coordinate every step of the ongoing project's development.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me to upload my iOS app on the App store?
							</button>
						</h2>
						<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Submitting your iOS software to the Apple App Store is a critical component of our comprehensive iOS app development services. AppsNation has years of expertise in successfully publishing iPhone apps on the App Store while adhering to the requirements.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								How much does an iPhone app development cost?
							</button>
						</h2>
						<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We can only provide an estimate for the cost of app development because each app development process contains several aspects that jointly determine a final cost amount. However, the breakdown of app development costs is as follows:</p>
									<ul class="ps-5">
										<li>Functionality and purpose of the app Points of integration, the complexity of visual elements inside an app, the number of features such as GPS navigation, NFC technology, motion co-processors, Augmented Reality technology, and other technologies, and the maintenance plan.</li>
										<li>However, a simple iOS app with a minimal User Interface and a set of must-have features costs $5,000 or more.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								How many hours does it take to develop an app?
							</button>
						</h2>
						<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>The average time it takes to construct an app is between 4-6 months, although this might vary depending on the various elements that influence how long it takes to design an app which includes;</p>
									<ul class="ps-5">
										<li>The definition of the scope of the app, setting down precisely what is required, finalizing UI/UX designs, selecting the platform, features, integrations, project team efficiency, and, of course, project friction. All of this has an impact on the app's development time.</li>
									</ul>
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
				<div class="common-heading wow fadeIn">
					<div data-text="Blogs" class="light-bg-text bg-text">
						<h2 class="mb0 common-heading">Latest Stories</h2>
					</div>
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