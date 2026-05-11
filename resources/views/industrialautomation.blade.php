@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 industrial-automation">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Industrial Automation App Development services
					</h1>
					<p class="mt20 my-5 text-white" data-wow-delay=".4s">Ready to streamline operations and unlock more
						value from your plant? Our industrial automation solutions are built to improve uptime,
						accuracy, and process visibility. At AppsNation, our engineers assess your workflow, identify
						bottlenecks, and recommend practical systems that fit your production goals.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section class="automation-services service py-5">
	<div class=" container">
		<div class="row mb-3">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/services/industrial-automation/automation-service-img.webp"
						alt="Android App Development" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Automation" class="light-bg-text bg-text">
						<h2>Scale-Up With Our<br> <span class="flup-theme">Industrial Automation</span> Development
							Services</h2>
					</div>
					<p>From reducing repetitive manual work to improving connected workflows, we help businesses adopt
						smarter automation in the industry. Our team delivers industrial automation design services that
						support measurable performance, safer operations, and long-term growth. If you want clear
						industrial automation solutions efficiency benefits, we build systems around reliability,
						output, and control.
					</p>
				</div>
			</div>
		</div>
		<div class="row mt-5 wow fadeIn">
			<div class="col-12 col-md-6 col-lg-3">
				<div class="card">
					<div class="card-body text-center mt-3 mt-md-0">
						<img loading="lazy" src="images/services/industrial-automation/scada-hmi-icon.webp" alt="SCADA/HMI"
							class="img-fluid py-3 ind-auto-img" width="auto" height="auto">
						<h3>SCADA/HMI</h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="card">
					<div class="card-body text-center">
						<img loading="lazy" src="images/services/industrial-automation/industrial-controls-icon.webp"
							alt="Industrial Controls" class="img-fluid py-3 ind-auto-img" width="auto" height="auto">
						<h3>Industrial Controls</h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-3 mt-lg-0">
				<div class="card">
					<div class="card-body text-center">
						<img loading="lazy" src="images/services/industrial-automation/system-automation-icon.webp"
							alt="System Automation" class="img-fluid py-3 ind-auto-img" width="auto" height="auto">
						<h3>System Automation</h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3 mt-md-3 mt-lg-0">
				<div class="card">
					<div class="card-body text-center">
						<img loading="lazy" src="images/services/industrial-automation/upgrade-and-repair-icon.webp"
							alt="Upgrade and Repair" class="img-fluid py-3 ind-auto-img" width="auto" height="auto">
						<h3>Upgrade and Repair </h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center mt-3 mt-md-0">
						<img loading="lazy" src="images/services/industrial-automation/machine-vision-icon.webp" alt="Machine Vision"
							class="img-fluid py-3 ind-auto-img" width="auto" height="auto">
						<h3>Machine Vision</h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center">
						<img loading="lazy" src="images/services/industrial-automation/extended-reality-automatio-icon.webp"
							alt="Extended Reality Automation" class="img-fluid py-3 ind-auto-img" width="auto"
							height="auto">
						<h3>Extended Reality Automation</h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center">
						<img loading="lazy" src="images/services/industrial-automation/embedded-systems-icon.webp"
							alt="Embedded Systems" class="img-fluid py-3 ind-auto-img" width="auto" height="auto">
						<h3>Embedded Systems</h3>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-3">
				<div class="card">
					<div class="card-body text-center">
						<img loading="lazy" src="images/services/industrial-automation/industrial-40-icon.webp" alt="Industrial 4.0"
							class="img-fluid py-3 ind-auto-img" width="auto" height="auto">
						<h3>Industrial 4.0</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!-- <section class="emergency-services py-5">
		<div class="container">
			<div class="row justify-content-center wow fadeIn">
				<div class="col-lg-8">
					<h2 class="common-heading text-white text-center">Our Emergency Service Capabilities</h2>
				</div>
			</div>
			<div class="row wow fadeIn mt-3">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 my-auto">
									<img loading="lazy" src="images/services/industrial-automation/trouble-shooting-icon.webp" alt="Enterprise App Development" class="d-block mx-auto">
								</div>
								<div class="col-md-8">
									<h5 class="pb-3 pt-3 pt-md-0">Troubleshooting</h5>
									<p>PLCs, robots, HMIs, and more.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3 mt-md-0 mt-lg-0">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 my-auto">
									<img loading="lazy" src="images/services/industrial-automation/production-emergency-icon.webp" alt="App Development For Startups" class="d-block mx-auto">
								</div>
								<div class="col-md-8">
									<h5 class="pb-3 pt-3 pt-md-0">Production Startup Emergencies</h5>
									<p>We can assist you because startups are difficult and may need to be corrected.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3 mt-xl-0">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 my-auto">
									<img loading="lazy" src="images/services/industrial-automation/hardware-replacement-icon.webp" alt="App Development For Kids" class="d-block mx-auto">
								</div>
								<div class="col-md-8">
									<h5 class="pb-3 pt-3 pt-md-0">Hardware Replacements</h5>
									<p>We take pride in providing the proper hardware for your operations to run flawlessly.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 my-auto">
									<img loading="lazy" src="images/services/industrial-automation/on-site-help-icon.webp" alt="On-Site Help" class="d-block mx-auto">
								</div>
								<div class="col-md-8">
									<h5 class="pb-3 pt-3 pt-md-0">On-Site Help</h5>
									<p>We are available offline, too, with an engineer present on-site to assist you.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 my-auto">
									<img loading="lazy" src="images/services/industrial-automation/debugging-icon.webp" alt="Debugging" class="d-block mx-auto">
								</div>
								<div class="col-md-8">
									<h5 class="pb-3 pt-3 pt-md-0">Debugging</h5>
									<p>Standalone controllers, robots, PCLs, etc.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-3">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-4 my-auto">
									<img loading="lazy" src="images/services/industrial-automation/downtime-icon.webp" alt="Unplanned Downtime Support" class="d-block mx-auto">
								</div>
								<div class="col-md-8">
									<h5 class="pb-3 pt-3 pt-md-0">Unplanned Downtime Support</h5>
									<p>We get the engines running regardless of any urgency.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our <span>Emergency Service</span> </h2>
					</div>
					<p>AppsNation Industrial Automation development services are the light of hope for you to reshape
						your business with more digital traction.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-designing-img"></div>
					</div>
					<div class="service-heading">
						<h3>Troubleshooting</h3>
					</div>
					<div class="services-text-div">
						<p>PLCs, robots, HMIs, drives, sensors, and networked systems.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-web-img"></div>
					</div>
					<div class="service-heading">
						<h3>Production Startup Emergencies</h3>
					</div>
					<div class="services-text-div">
						<p>Commissioning delays can disrupt output. We step in quickly to diagnose faults, correct
							logic, and stabilize new production lines.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-porting-img"></div>
					</div>
					<div class="service-heading">
						<h3>Hardware Replacements</h3>
					</div>
					<div class="services-text-div">
						<p>We source and install the right industrial automation equipment to keep your operation
							running with minimal disruption.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-testing-img"></div>
					</div>
					<div class="service-heading">
						<h3>On-Site Help</h3>
					</div>
					<div class="services-text-div">
						<p>When remote access is not enough, an engineer can be deployed on-site to support testing,
							integration, and recovery.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h3>Debugging</h3>
					</div>
					<div class="services-text-div">
						<p>We troubleshoot standalone controllers, PLC programs, robots, HMIs, and industrial automation
							software with a structured approach.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-dev-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h3>Unplanned Downtime Support</h3>
					</div>
					<div class="services-text-div">
						<p>Fast response matters. Our team works to restore movement, resolve alarms, and reduce
							downtime before it impacts delivery targets</p>
					</div>
				</div>
			</div>
			<!-- <div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="custom-android-app-dev-img"></div>
						</div>
						<div class="service-heading">
							<h4>Custom Android App Development</h4>
						</div>
						<div class="services-text-div">
							<p>Convert your brand into a tap with our outstanding custom android app development services that serves your purpose, solves your problem, and meet your needs.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="android-multi-platform-img"></div>
						</div>
						<div class="service-heading">
							<h4>Multi-Platform Deployment</h4>
						</div>
						<div class="services-text-div">
							<p>We help you deploy a mobile app project across different platforms with ease in the shortest time possible to make your app available to multiple devices.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
					<div class="service-card-app home-services gradient-border h-100">
						<div class="services-img-div">
							<div class="android-watch-img"></div>
						</div>
						<div class="service-heading">
							<h4>Android Watch App Deployment</h4>
						</div>
						<div class="services-text-div">
							<p>With best-in-Class watchOS expert developers, our Android Watch app development services enhance your business's accessibility and mobility.</p>
						</div>
					</div>
				</div> -->
		</div>
	</div>
</section>
<!--End Service-->

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

<!--Start Features-->
<!-- <section class="features-section-app dark-bg2 py-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-5 wow fadeIn">
					<div class="tab-content" id="imagetab">
						@foreach($agencystack as $k=>$items)
						@if($k==0)

						<div class="tab-pane active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
							<img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
						</div>
						@else
						<div class="tab-pane fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
							<img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
						</div>
						@endif

						@endforeach

					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
					<h2>Creative Industrial Automation Development Agency</h2>
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
						<div class="tab-pane active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
							<h3>{!!$items['heading']!!}</h3>
							<p>{!!$items['content']!!}</p>
						</div>
						@else
						<div class="tab-pane fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
							<h3>{!!$items['heading']!!}</h3>
							<p>{!!$items['content']!!}</p>
						</div>
						@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section> -->
<!--End Features-->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">We specialize in enhancing your production efficiency with advanced automation
						solutions, leveraging cutting-edge technologies such as IoT, AI, and Machine Learning. </p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/free-mobile-app-consultation.svg" alt="Free Mobile App Consultation"
							class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Free Consultation Services</h3>
					<p class="description">Speak with an industrial automation consultant to review your current
						process, define priorities, and plan the next step with confidence.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/50+-expert-android-developers.svg"
							alt="50+ Expert Android Developers" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Experienced Automation Engineers</h3>
					<p class="description">Our team works across industrial automation and robotics, controls
						engineering, system integration, and plant-floor optimization.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/flexible-hiring-models.svg" alt="Flexible Hiring Models"
							class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Flexible Project Engagements</h3>
					<p class="description">We support pilot projects, plant upgrades, and full-scale rollouts with
						pricing models tailored to your scope and timeline.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/247-technical-support.svg" alt="24/7 Technical Support"
							class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Our support team is available around the clock to resolve issues, answer
						technical questions, and protect operational continuity.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/100-transparency.svg" alt="100% Transparency" class="img-fluid"
							width="100%" height="100%">
					</div>
					<h3 class="title">Transparent Operations</h3>
					<p class="description">You stay informed throughout the project with clear milestones, reporting,
						and practical recommendations at every stage.
						n.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/3-months-free-delivery.svg"
							alt="3-Months Free Support After Delivery" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">3-Months Free Maintenance Post-Delivery</h3>
					<p class="description">After go-live, we provide three months of maintenance support to help protect
						performance, reliability, and user adoption.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why Choose-->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-126">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>Industrial Automation</span> Development Process</h2>
					</div>
					<p>AppsNation follows a practical, result-driven delivery model built for industrial automation and control services.
					</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">We study your process, production goals, and existing infrastructure to identify automation opportunities, risk points, and integration needs.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">Solution Design and Strategy</h3>
					<p class="description">We design the right architecture using PLCs, SCADA, HMIs, IIoT, and connected platforms. Where relevant, we also evaluate artificial intelligence in industrial automation to support monitoring, prediction, and smarter decisions.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">System Architecture and Development</h3>
					<p class="description">Our engineers configure control logic, communication layers, dashboards, and reporting tools so every system remains scalable and easy to maintain.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Testing and Quality Assurance</h3>
					<p class="description">We run functional, integration, and performance testing to verify reliability, safety, and readiness before deployment.

					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">Implementation and Deployment</h3>
					<p class="description">We install, configure, and commission your solution with minimal disruption, then train your team for a smooth handover.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">Support and Maintenance</h3>
					<p class="description">Post-deployment, we provide preventive maintenance, updates, and optimization support to protect long-term efficiency.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Our Work-->

<section class="our-work py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading">
					<div data-text="Work" class="light-bg-text bg-text mt-5">
						<h2>Our Work</h2>
					</div>
					<p>AppsNation helps manufacturers and industrial operators solve process challenges with practical engineering and dependable execution. Whether you are comparing eastern industrial automation providers, reviewing top industrial automation companies, or shortlisting industrial automation companies in usa, the right partner should offer clear delivery standards, responsive support, and proven technical depth.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!--End Our Work-->

<!-- Start Works -->
<section class="our-works py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow fadeIn">
				<div class="card green-bg p-4">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<img loading="lazy" src="images/services/industrial-automation/industrial-automation-img-1.webp"
									alt="Unplanned Downtime Support" class="d-block mx-auto" width="auto" height="auto">
							</div>
							<div class="col-lg-6 mt-4 mt-lg-0">
								<h2 class="common-heading">Delta Robot</h2>
								<p>Our Delta Robot solution is built for high-speed pick-and-place applications where precision and repeatability matter. As part of our industrial automation and robotics capability, this parallel robot uses three synchronized arms, motors, and sensors to move products quickly and accurately. It helps manufacturers reduce manual handling, improve cycle times, and lower repetitive labor costs through one scalable investment.
								</p>
								<a data-bs-toggle="modal" data-bs-target="#leadModal"
									class="btn-main button-arounder lnk wow fadeIn mt-4" data-wow-delay="0.8s">View Case
									Study</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row pt-5">
			<div class="col-lg-12 wow fadeIn">
				<div class="card green-bg p-4">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6 my-auto">
								<h2 class="common-heading">Cartesian Robot</h2>
								<p>Our Cartesian Robot is designed for linear motion tasks that require consistent positioning across the x, y, and z axes. It is a practical choice for assembly, packaging, inspection, and material handling applications. With strong accuracy and predictable movement, this solution supports manufacturers looking for dependable industrial automation software integration and efficient product transfer between stations or containers.
								</p>
								<a data-bs-toggle="modal" data-bs-target="#leadModal"
									class="btn-main button-arounder lnk wow fadeIn mt-4" data-wow-delay="0.8s">View Case
									Study</a>
							</div>
							<div class="col-lg-6 mt-4 mt-lg-0">
								<img loading="lazy" src="images/services/industrial-automation/industrial-automation-img-2.webp"
									alt="Unplanned Downtime Support" class="d-block mx-auto" width="auto" height="auto">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row pt-5">
			<div class="col-lg-12 wow fadeIn">
				<div class="card green-bg p-4">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<img loading="lazy" src="images/services/industrial-automation/industrial-automation-img-3.webp"
									alt="Unplanned Downtime Support" class="d-block mx-auto" width="auto" height="auto">
							</div>
							<div class="col-lg-6 mt-4 my-lg-auto">
								<h2 class="common-heading">Automated Guided Vehicle</h2>
								<p>Our Automated Guided Vehicle solution helps businesses move materials, products, and equipment across warehouses and production facilities with less manual effort. Using sensors, mapped routes, and intelligent control systems, AGVs support safer transport and better flow control. For businesses investing in industrial automation, this is a reliable way to improve internal logistics, reduce handling delays, and strengthen plant efficiency.

								</p>
								<a data-bs-toggle="modal" data-bs-target="#leadModal"
									class="btn-main button-arounder lnk wow fadeIn mt-4" data-wow-delay="0.8s">View Case
									Study</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Works -->

<!--Start Tech-->
<!-- <div class="techonology-used- py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="common-heading ptag wow fadeIn">
						<h2>Technology Stack</h2>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="common-heading ptag wow fadeIn">
						<p class="mb30">We create mobile apps with scalable and tested technology stack to deliver apps par excellence.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-5 wow fadeIn">
					<ul class="nav nav-tabs android-tech-tabs mt-5">
						@foreach($techstack as $k=>$item)

						@if($k==0)
						<li class="active">
							<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed  stack-hov">
								<img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack">
							</a>
						</li>

						@else

						<li>
							<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo zoomed stack-hov">
								<img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack">
							</a>
						</li>
						@endif

						@if(($k+1)%3==0 )
						@if($k==0)

						@else
					</ul>
					<ul class="nav nav-tabs android-tech-tabs mt-5">
						@endif
						@endif
						@endforeach
					</ul>
				</div>

				<div class="col-md-7 mt-4 my-lg-auto wow fadeIn">
					<div class="tab-content tab-body">

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
	</div> -->
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
					<img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto"
						height="auto">
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
					<img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting"
						width="auto" height="auto">
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
						<h2 class="text-white">Ranked as #1 <span>Industrial Automation</span> Development Company</h2>
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
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What kind of industrial automation work can Appsation do?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Appsnation can provide a wide range of industrial automation services, including
										designing, developing, testing, and maintaining automation systems, as well as
										providing hardware and software integration, machine vision, and robotics
										solutions.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How do Appsnation approach industrial automation projects?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Appsnation typically use a structured approach to industrial automation projects,
										starting with a detailed analysis of the client's needs and requirements. They
										then design and develop customized solutions, test them thoroughly, and
										implement them in the client's facility.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Can Appsnation provide customized solutions for specific industrial automation needs?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes, Appsnation can provide customized solutions tailored to the specific needs
										and requirements of the client. They work closely with the client to understand
										their needs and develop solutions that are effective, efficient, and
										cost-effective.</p>

								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								What are the benefits of outsourcing industrial automation work to Appsnation?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Outsourcing industrial automation work to Appsnation can offer several benefits,
										including access to specialized expertise, reduced costs, improved efficiency,
										and faster time-to-market.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								How long does it typically take for Appsnation to complete an industrial automation
								project?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>The time it takes to complete an industrial automation project can vary depending
										on the complexity and scope of the project. However, Appsnation typically
										provide a detailed timeline and schedule upfront and work closely with the
										client to ensure that the project is completed on time and within budget.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Can Appsnation provide ongoing maintenance and support for industrial automation
								systems?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes, Appsnation can provide ongoing maintenance and support for industrial
										automation systems, including software updates, troubleshooting, and repairs.
										They work closely with the client to ensure that the system is running smoothly
										and efficiently at all times.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								What kind of software and hardware expertise do Appsnation have in industrial
								automation?
							</button>
						</h2>
						<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Appsnation have expertise in a wide range of software and hardware technologies
										used in industrial automation, including PLC programming, SCADA systems, HMI
										design, machine vision, robotics, and artificial intelligence.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								What are the costs associated with industrial automation work done by Appsnation?
							</button>
						</h2>
						<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>The costs associated with industrial automation work done by Appsnation can vary
										depending on the scope and complexity of the project, as well as the specific
										needs and requirements of the client. Software houses typically provide a
										detailed cost estimate upfront and work closely with the client to ensure that
										the project is completed within the agreed-upon budget.</p>
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

@endsection