@extends('app.main')
@section('content')

	<!--Start Breadcrumb Area-->
	<section class="breadcrumb-areav2 iot-app-banner">
		@if ($errors->has('g-recaptcha-response'))
			<div class="alert alert-danger">
				<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
			</div>
		@endif
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
					<div class="bread-titlev2">
						<h1 class="banner-heading pt-3" data-wow-delay=".2s">Best IoT Development Company</h1>
						<p class="mt20 text-white" data-wow-delay=".4s">Enrich your brand’s mobility with a wearable app
							running across various wearables and connectivity with multi-platform devices - responsive,
							fast, and visually appealing.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb Area-->

	<!--Start About-->
	<section id="mycounterSection" class="service py-5">
		<div class=" container">
			<div class="row">
				<div class="col-lg-5">
					<div class="image-block wow fadeIn">
						<img loading="lazy" src="images/services/iot-app-development/iot-app-development.webp" alt="image"
							class="img-fluid no-shadow" width="100%" height="100%">
					</div>
				</div>
				<div class="col-lg-7 block-1 wow fadeIn my-auto">
					<div class="common-heading text-l pl25">
						<div data-text="IoT" class="light-bg-text bg-text">
							<h2>Scale-Up With Our<br> <span class="flup-theme">IoT App</span> Development Services</h2>
						</div>
						<p><strong>They understand a lot about IoT and are meticulous using modern tools and
								techniques.</strong></p>
						<p> We are lucky to have strong resolutions. They were remarkable partners who enabled us to achieve
							our goals and helped us every step of the way. They planned to promote their app with
							effortlessly-conceptualized, captivating surveys.</p>
						<p> When you work with them, you imagine yourself with an amazing team and also have personal
							interests. If there is a threat to you, you must take advantage of it.</p>
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

	<!--Start Service -->
	<section class="service-section-app py-5">
		<div class="container">
			<div class="row ">
				<div class="col-12 wow fadeIn">
					<div class="common-heading ptag">
						<div data-text="Our Services" class="light-bg-text bg-text">
							<h2>Our Unrivaled <span>IoT App</span> Services</h2>
						</div>
						<p>Our IoT software development company allows you to empower innovation within the IoT ecosystem
							and drive business growth. Leverage the power of our IoT solutions to create unbreakable virtual
							bridges between machines and devices through cutting-edge technology.</p>
					</div>
				</div>
			</div>
			<div class="row mt-5 d-flex justify-content-center">
				<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-consulting.svg" alt="IoT Consulting"
								class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Consulting</h3>
						</div>
						<div class="services-text-div">
							<p>Plan your IoT process with guidance from the top IoT software development company, covering
								connected devices, sensors, lifecycle management, and seamless integration.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/poc-and-prototype-development.svg"
								alt="PoC & Prototype Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>PoC & Prototype Development</h3>
						</div>
						<div class="services-text-div">
							<p>Our IoT development company focuses on delivering products that enhance your core
								functionality, ensuring you gain maximum value from your IoT device.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-firmware-development-and-integration.svg"
								alt="IoT Firmware Development & Integration" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Firmware Development & Integration</h3>
						</div>
						<div class="services-text-div">
							<p>Partner with our IoT experts to develop firmware and embedded applications for IoT devices.
								Whatever your project needs, we help get it running faster.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-mobile-and-web-apps.svg"
								alt="IoT Mobile & Web Apps" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Mobile & Web Apps</h3>
						</div>
						<div class="services-text-div">
							<p>Our IoT application development services for mobile and web streamline your business
								operations. We deliver durable solutions using advanced digital technologies.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/ip-product-development-and-integration.svg"
								alt="IP Product Development & Integration" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IP Product Development & Integration</h3>
						</div>
						<div class="services-text-div">
							<p>Leverage our software interface architecture to enhance connectivity between IoT sensors and
								components. Our IoT developers excel in strengthening IP strategies.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-wearable-apps.svg" alt="IoT Wearable Apps"
								class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Wearable Apps</h3>
						</div>
						<div class="services-text-div">
							<p>Capitalize on the health and fitness trend with exceptional wearable IoT device apps. Create
								engaging, shareable experiences for your users.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-architecture-development.svg"
								alt="IoT Architecture Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Architecture Development</h3>
						</div>
						<div class="services-text-div">
							<p>We manage device connectivity end-to-end, from UI/UX to architecture design. Our IoT
								solutions are thoroughly tested to ensure flawless performance.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/backend-and-api-integration.svg"
								alt="Backend & API Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Backend & API Development</h3>
						</div>
						<div class="services-text-div">
							<p>Our skilled IoT developers provide complete backend and API development services to support
								your connected ecosystem.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Service -->

	<!--Start Service -->
	<section class="service-section py-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-data-analytics-and-data-visualization.svg"
								alt="IoT Data Analytics & Data Visualization" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Data Analytics & Data Visualization</h3>
						</div>
						<div class="services-text-div">
							<p>Data is central to our IoT approach. We specialize in building business-friendly analytics
								and visualization tools to transform IoT data into actionable insights.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-module-development.svg"
								alt="IoT Module Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Module Development</h3>
						</div>
						<div class="services-text-div">
							<p>As a one-stop IoT development company, we design IoT gateways and modules tailored to your
								application needs.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-implementation-and-support.svg"
								alt="IoT Implementation & Support" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Implementation & Support</h3>
						</div>
						<div class="services-text-div">
							<p>Our clients benefit not only from app development but also from comprehensive support and
								maintenance services.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-architecture-for-connected-ecosystems.svg"
								alt="Backend & API Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Architecture for Connected Ecosystems</h3>
						</div>
						<div class="services-text-div">
							<p>From UI/UX to backend architecture, we provide robust IoT development services that ensure a
								seamless, bug-free user experience.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/user-experience-for-iot.svg"
								alt="User Experience for IoT" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>User Experience for IoT</h3>
						</div>
						<div class="services-text-div">
							<p>We enhance user experience by helping clients configure IoT devices, analyze sensor data with
								business intelligence tools, manage IoT systems remotely, and display data on responsive
								dashboards.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/testing-and-maintenance.svg"
								alt="Testing & Maintenance" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Testing & Maintenance</h3>
						</div>
						<div class="services-text-div">
							<p>Our experts conduct rigorous testing covering usability, reliability, data integrity,
								security, performance, and network efficiency before deployment.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/industrial-iot-solutions.svg"
								alt="Industrial IoT Solutions" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Industrial IoT Solutions</h3>
						</div>
						<div class="services-text-div">
							<p>Implement IoT to gain actionable insights from supply chain monitoring and manufacturing
								performance, boosting efficiency.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iomt-solutions.svg" alt="IoMT Solutions"
								class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoMT Solutions</h3>
						</div>
						<div class="services-text-div">
							<p>Enhance patient care, employee productivity, and asset utilization by integrating IoMT
								solutions into your business processes.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/iot-cloud-solutions.svg" alt="IoT Cloud Solutions"
								class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>IoT Cloud Solutions</h3>
						</div>
						<div class="services-text-div">
							<p>We leverage Amazon AWS IoT, Microsoft Azure, Google Cloud, and IBM Bluemix for scalable IoT
								cloud solutions.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/voice-enabled-technology-solutions.svg"
								alt="Voice-Enabled Technology Solutions" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Voice-Enabled Technology Solutions</h3>
						</div>
						<div class="services-text-div">
							<p>Our IoT app development company delivers advanced mobile IoT solutions, including
								voice-enabled technologies.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app gradient-border">
						<div class="services-img-div">
							<img loading="lazy" src="images/services/iot-app-development/api-development-and-integration.svg"
								alt="API Development & Integration" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>API Development & Integration</h3>
						</div>
						<div class="services-text-div">
							<p>Collaborate with us to hire IoT developers skilled in creating IoT solutions that integrate
								with cloud, big data, and emerging technologies.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Service -->


	<!--Start Features-->
	<section class="features-section-app dark-bg2 py-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-5 fadeIn">
					<div class="tab-content" id="imagetab">

						@foreach($agencystack as $k => $items)
							@if($k == 0)

								<div class="tab-pane features-content active" id="panel_a_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
									<img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
								</div>
							@else
								<div class="tab-pane features-content fade" id="panel_a_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
									<img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
								</div>
							@endif

						@endforeach

					</div>
				</div>
				<div
					class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
					<h2>Different Industries We Serve:</h2>
					<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.
					</p>
					<ul class="nav nav-tabs features-tab" id="headingtab" role="tablist">

						@foreach($agencystack as $k => $items)
							@if($k == 0)
								<li class="nav-item">
									<a class="nav-link active" id="{!!$items['id']!!}-tab"
										data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}"
										data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab"
										aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
								</li>

							@else
								<li class="nav-item">
									<a class="nav-link" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}"
										data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab"
										href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}"
										aria-selected="false">{!!$items['heading']!!}</a>
								</li>
							@endif
						@endforeach

					</ul>
					<div class="tab-content pt-3" id="texttab">

						@foreach($agencystack as $k => $items)
							@if($k == 0)

								<div class="tab-pane image-content active" id="panel_b_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
									<h3>{!!$items['heading']!!}</h3>
									<p class="py-3">{!!$items['content']!!}</p>
								</div>
							@else

								<div class="tab-pane image-content fade" id="panel_b_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
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
	<section class="my-1">
		<div class="container">

			<div class="row py-5 justify-content-center hire-developer">
				<div class="col-lg-9">
					<div class="free-cta-title v-center wow fadeIn">
						<div class="row justify-content-center">
							<div class="col-lg-8 my-auto">
								<p class="text-center text-lg-start">Let's Start a <span>New Project</span> Together</span>
								</p>
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

	<!--Start Why Choose -->
	<section class="why-choose bg-gradient3 py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="common-heading ptag wow fadeIn">
						<div data-text="Choose Us" class="dark-bg-text bg-text">
							<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
						</div>
						<p class="text-white">We have transformed the IoT sector by delivering exceptional digital products,
							platforms, and IoT-based services. Trust us to create an IoT ecosystem linking people,
							equipment, and processes to optimize your business. Our integrated IoT systems convert data into
							actionable insights, enabling automation and real-time decision-making.</p>
					</div>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="effect-cont-comm-img"></div>
						</div>
						<div class="service-heading">
							<h3>Effective & Continuous Communication</h3>
						</div>
						<div class="services-text-div">
							<p> Full range of IoT app development services.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="delivered-on-time-img"></div>
						</div>
						<div class="service-heading">
							<h3>Excellent Quality Delivered on Time</h3>
						</div>
						<div class="services-text-div">
							<p>Apps developed across all platforms and devices.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="experienced-team-img"></div>
						</div>
						<div class="service-heading">
							<h3>Experienced Team</h3>
						</div>
						<div class="services-text-div">
							<p>Single-code apps that work seamlessly across platforms.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="absolute-support-img"></div>
						</div>
						<div class="service-heading">
							<h3>Absolute Support</h3>
						</div>
						<div class="services-text-div">
							<p>Serving industries globally to leverage innovative technology.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="complete-technical-img"></div>
						</div>
						<div class="service-heading">
							<h3>Complete Technical Competency</h3>
						</div>
						<div class="services-text-div">
							<p>Affordable services with on-time delivery.
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="full-confidential-img"></div>
						</div>
						<div class="service-heading">
							<h3>Full Confidentiality</h3>
						</div>
						<div class="services-text-div">
							<p> Impeccable testing ensures error-free IoT apps.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Why Choose -->

	<!--Start Process-->
	<section class="process-block bg-gradient3 py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="common-heading ptag wow fadeIn">
						<div data-text="Process" class="light-bg-text bg-text mt-5">
							<h2>Our <span>iOT App</span> Development Process</h2>
						</div>
						<p>We offer a streamlined wearable app development process to enhance your software capabilities.
						</p>
					</div>
				</div>
			</div>
			<div class="row upset d-flex justify-content-center mt30">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">01</p>
							<h3 class="title">Define and Research the problem</h3>
							<p class="description">We engage with you to understand business needs and perform research to
								propose effective solutions.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">02</p>
							<h3 class="title">Devising A Smart Solution</h3>
							<p class="description"> We plan and design a smart solution tailored to your specific
								requirements.
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">03</p>
							<h3 class="title">Hardware Software Selection</h3>
							<p class="description">We strategize app development to optimize functionality, connectivity,
								budget, and security.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 ">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">04</p>
							<h3 class="title">User-Centric Design (PoC)</h3>
							<p class="description"> We collaborate to create interactive prototypes, refining your use case
								and building tangible outcomes.
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">05</p>
							<h3 class="title">Development of Featured IoT Device</h3>
							<p class="description"> IoT engineers enhance core features, validate functionality, and
								continuously improve the product.
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">06</p>
							<h3 class="title">Integration</h3>
							<p class="description"> Professional developers integrate mobile apps, web interfaces, firmware,
								and hardware.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">07</p>
							<h3 class="title">Deployment And Testing</h3>
							<p class="description"> We conduct thorough bug fixes and performance tests, deploying only
								after your approval.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="card timeline wow fadeIn h-100">
						<div class="card-body">
							<p class="timeline-year">08</p>
							<h3 class="title">Maintenance Support and Enhancements</h3>
							<p class="description"> Post-deployment, we ensure smooth operations and continuous improvements
								based on your feedback.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Process-->

	<!--Start Tech-->
	<section class="techonology-used py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 wow fadeIn">
					<div class="common-heading">
						<div data-text="Technologies" class="light-bg-text bg-text mb-5">
							<h2>Technologies We Work With</h2>
						</div>
						<p>Creating high-performance IoT applications requires expertise. Our IoT developers use the latest
							technology stack to build connected and smart devices efficiently.
						</p>
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-lg-12">
					<ul class="nav nav-tabs features-tab justify-content-center wow fadeIn" role="tablist">
						<li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab"
								href="#connectivity">Connectivity</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#hardware">Hardware</a> </li>
						<li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#protocols">Protocols And
								Standards</a> </li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content wow fadeIn">
						<div id="connectivity" class="container tab-pane active">
							<div class="row mt-3 d-flex justify-content-center">
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 text-center fadeInUp">
									<img loading="lazy" src="images/tech/4g-lte-logo.webp" alt="4G LTE Logo" class="tech-logo">
									<h6 class="pt-3">4G LTE</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 text-center fadeInUp">
									<img loading="lazy" src="images/tech/wifi-logo.webp" alt="WIFI Logo" class="tech-logo">
									<h6 class="pt-3">WI-FI</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div text-center fadeInUp">
									<img loading="lazy" src="images/tech/bluetooth-logo.webp" alt="Bluetooth Logo" class="tech-logo">
									<h6 class="pt-3">Bluetooth</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div text-center fadeInUp">
									<img loading="lazy" src="images/tech/nfc-logo.webp" alt="NFC Logo" class="tech-logo">
									<h6 class="pt-3">NFC</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/gsm-logo.webp" alt="GSM Logo" class="tech-logo">
									<h6 class="pt-3">GSM</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/ethernet-logo.webp" alt="Ethernet Logo" class="tech-logo">
									<h6 class="pt-3">Ethernet</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/iot-gateway.webp" alt="IoT Gateway Logo" class="tech-logo">
									<h6 class="pt-3">IoT Gateway</h6>
								</div>
							</div>
						</div>
						<div id="hardware" class="container tab-pane fade">
							<br>
							<div class="row mt-3 d-flex justify-content-center">
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 text-center fadeInUp">
									<img loading="lazy" src="images/tech/raspberry-pi-logo.webp" alt="angular-js-logo" class="tech-logo">
									<h6 class="pt-3">Raspberry PI</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 text-center fadeInUp">
									<img loading="lazy" src="images/tech/react-native-logo.webp" alt="react-js-logo" class="tech-logo">
									<h6 class="pt-3">Arduino</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div text-center fadeInUp">
									<img loading="lazy" src="images/tech/type-script-logo.webp" alt="type-script-logo" class="tech-logo">
									<h6 class="pt-3">Beacons</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div text-center fadeInUp">
									<img loading="lazy" src="images/tech/vue-js-logo.webp" alt="vue-js-logo" class="tech-logo">
									<h6 class="pt-3">NodeMCU</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/html-logo.webp" alt="html5-logo" class="tech-logo">
									<h6 class="pt-3">KNX</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/html-logo.webp" alt="html5-logo" class="tech-logo">
									<h6 class="pt-3">Crestron</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
									<h6 class="pt-3">Microcontrollers</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-3 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
									<h6 class="pt-3">Miniature Boards</h6>
								</div>
							</div>
						</div>
						<div id="protocols" class="container tab-pane fade">
							<br>
							<div class="row mt-3 justify-content-center">
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
									<img loading="lazy" src="images/tech/mangodb-logo.webp" alt="mangodb-logo" class="tech-logo">
									<h6 class="pt-3">MQTT</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp">
									<img loading="lazy" src="images/tech/mysql-logo.webp" alt="mysql-logo" class="tech-logo">
									<h6 class="pt-3">Modbus</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
									<img loading="lazy" src="images/tech/mssql-logo.webp" alt="mssql-logo" class="tech-logo">
									<h6 class="pt-3">SNMP</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp">
									<img loading="lazy" src="images/tech/firebase-logo.webp" alt="firebase-logo" class="tech-logo">
									<h6 class="pt-3">AMQP</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
									<img loading="lazy" src="images/tech/dynamodb-logo.webp" alt="dynamodb-logo" class="tech-logo">
									<h6 class="pt-3">HTTP,HTTPS</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp">
									<img loading="lazy" src="images/tech/redis-logo.webp" alt="redis-logo" class="tech-logo">
									<h6 class="pt-3">Z-Wave</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
									<h6 class="pt-3">ZigBee</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
									<h6 class="pt-3">LoRAWAN</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
									<h6 class="pt-3">iBeacon</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
									<h6 class="pt-3">TCP & UDP</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
									<h6 class="pt-3">CoAp</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
									<h6 class="pt-3">BLE</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
									<h6 class="pt-3">Cellular 2G,3G,4G,5G</h6>
								</div>
								<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp">
									<img loading="lazy" src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
									<h6 class="pt-3">UDS</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Tech-->

	<!--Start Let's Work Together-->
	<section class="my-1">
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

	<!--Start Badges-->
	<section class="badges-section py-5">
		<div class="container">
			<div class="row fadeIn">
				<div class="col-12">
					<div class="common-heading w-tdxt text-center">
						<div data-text="Awards" class="dark-bg-text bg-text text-center">
							<h2 class="text-white">Ranked as #1 <span>IoT App</span> Development Company</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 wow fadeIn">
				<div class="col-12">
					<div class="awards-slider owl-carousel owl-theme">

						@foreach($awards as $k => $item)

							@if($k % 2 == 0)

								@if($item['heading'] == "Top Website design Agencies")
									<a href="{{$item['comment']}}" target="_blank">
										<div class="award-item">
											<div class="item">
												<div class="card">
													<div class="card-body">
														<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto"
															height="auto">
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
								@if($item['heading'] == "Top Website design Agencies")
									<a href="{{$item['comment']}}" target="_blank">
										<div class="award-item">
											<div class="item">
												<div class="card">
													<div class="card-body">
														<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto"
															height="auto">
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
	<section class="my-1">
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
								<div class="video-overlay" data-target="player-{{$key}}"
									style="position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;z-index:2;">
								</div>

								<!-- YouTube Video -->
								<iframe id="player-{{$key}}" class="youtube-player testimonial-video"
								loading="lazy"
									src="{{$item['comments']}}" title="Client Testimonial" frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
									referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
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
										<img loading="lazy" src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch"
											width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch
										</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
										<img loading="lazy" src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark"
											width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
										<img loading="lazy" src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto"
											alt="DesignRush" width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by
											DesignRush</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
										<img loading="lazy" src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto"
											alt="GoodFirms" width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms
										</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
										<img loading="lazy" src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto"
											alt="Trustpilot" width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by
											Trustpilot</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
										<img loading="lazy" src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto"
											alt="Sortlist" width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist
										</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://upcity.com/profiles/appsnation" target="_blank">
										<img loading="lazy" src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity"
											width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity
										</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
										<img loading="lazy" src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto"
											alt="SiteJabber" width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by
											SiteJabber</p>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 fadeIn my-auto text-center">
					<div class="review-title-ref mt40">
						<a href="{{url('/testimonials')}}"
							class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i
								class="fas fa-chevron-right fa-ani"></i></a>
					</div>
				</div>
			</div>
		</div>
		</div>
		</div>

		</div>
	</section>
	<!--End Testinomial-->

	<!--Start FAQS-->
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
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
									How much does it cost for IoT App Development?
								</button>
							</h2>
							<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>It can cost between $40K and $60K to design a basic IoT app with basic must-have
											functionality like device on/off, timer, schedule, OTA update, and so forth.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
									How much time it will take to build IoT Application?
								</button>
							</h2>
							<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>It will take roughly 12 weeks for a startup to develop an IoT app with basic
											capabilities and a standard user interface. With more modifications, it can take
											up to 16 weeks.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
									What is the general process for IoT Application Development?
								</button>
							</h2>
							<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>The process of developing an IoT app begins with selecting a platform, then
											selecting hardware and development boards. You must also consider scalability
											ahead of time and ensure that your app is quick and ready to launch.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
									Which factors to consider while choosing an IoT app development company?
								</button>
							</h2>
							<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Gather information about their staff's competence in several technologies,
											experience dealing with various business areas, and use cases before calling.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
									Do you provide flexible hiring models for IoT app development?
								</button>
							</h2>
							<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Yes, we provide a variety of recruiting alternatives, including hourly, fixed
											price, and dedicated teams, from which our clients can select the one that best
											suits their project needs.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
									How can I track the progress of the IoT project?
								</button>
							</h2>
							<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We constantly share reports with our clients during the IoT app development
											process so that we may gain immediate feedback and make any repairs and
											upgrades.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
									What are the maintenance and support requirements for IoT Solution Development?
								</button>
							</h2>
							<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>A competent-driven software development environment and a system runtime
											environment for enabling the highly secure and robust modular software
											construction are among the maintenance and support needs for IoT solution
											development.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
									How do I begin my project with you?
								</button>
							</h2>
							<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>You can either call us or send an email to us. Our team will respond as quickly
											as possible.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
									Which IoT development platforms are used by AppsNation?
								</button>
							</h2>
							<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>For our clients, our usual agile methodology has always backed our services as
											open-ended. We've worked with a number of clients that already had an app or a
											website and needed us to integrate their existing tools, CRM, and systems into
											the project.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
									Can I hire Your IoT app developers in less than 48 hours?
								</button>
							</h2>
							<div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Yes, you can hire your IoT app developer in less than 48 hours.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
									What is the no-risk trial period for AppsNation IoT developers?
								</button>
							</h2>
							<div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>The no-risk trial period duration is 2 weeks.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
									What other services does AppsNation provide?
								</button>
							</h2>
							<div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We use the Internet of Things to collect and process data at the network's edge,
											allowing us to make smarter and faster business choices across industries.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-13a" aria-expanded="true" aria-controls="collapseOne">
									How are AppsNation IoT developers different from other companies?
								</button>
							</h2>
							<div id="collapse-13a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We're experts at creating custom IoT products and integrating them with your
											existing systems. We help organisations develop a plan for utilising and
											exploring the Internet of Things in order to stay competitive in their
											respective markets.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-14a" aria-expanded="true" aria-controls="collapseOne">
									Will you develop my IoT app idea for profit share?
								</button>
							</h2>
							<div id="collapse-14a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Yes. How about we meet for a cup of coffee and discuss it.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-15a" aria-expanded="true" aria-controls="collapseOne">
									How is my IoT application idea protected?
								</button>
							</h2>
							<div id="collapse-15a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Your IoT application idea is protect under our policy of full confidentiality.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-16a" aria-expanded="true" aria-controls="collapseOne">
									Do you have examples you could show me of IoT app projects you’ve created?
								</button>
							</h2>
							<div id="collapse-16a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Yes we have the client projects examples we’ve worked on.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-17a" aria-expanded="true" aria-controls="collapseOne">
									Will we sign an NDA to keep my IoT application idea confidential?
								</button>
							</h2>
							<div id="collapse-17a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Yes, we will sign the NDA to keep your idea protected.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-18a" aria-expanded="true" aria-controls="collapseOne">
									What are the stages of IoT app creation, and how do they affect the costs?
								</button>
							</h2>
							<div id="collapse-18a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Yes, we provide quality assurance with ongoing support, maintenance and updates.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-19a" aria-expanded="true" aria-controls="collapseOne">
									What are the stages of IoT app creation, and how do they affect the costs?
								</button>
							</h2>
							<div id="collapse-19a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Depending on the 4 stages, and the additional features, you app cost may vary
											than the average cost.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-20a" aria-expanded="true" aria-controls="collapseOne">
									Do you have any online portfolio?
								</button>
							</h2>
							<div id="collapse-20a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Yes, we do have online portfolio. You can view it on our website.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End FAQS -->


@endsection