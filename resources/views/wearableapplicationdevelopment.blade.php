@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 wearable-app-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Wearable App Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Make your brand more mobile with a robust wearable
						app that works with a lot of different devices and platforms. Our solutions are fast, easy to
						use, responsive, and look good.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section id="mycounterSection" class="service py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 my-auto wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/services/wearable-app-development/wearable-app-development.webp"
						alt="Wearable App Development" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn">
				<div class="common-heading text-l pl25">
					<div data-text="Wearables" class="light-bg-text bg-text">
						<h2><span class="flup-theme">Wearable App Development </span>Services at a
							Low Cost</h2>
					</div>
					<p><strong>Many firms that have used wearable technology have shown demonstrable success. Wearable gadgets are enabling brands to give smarter, faster, and more personalised digital experiences given that technology is moving so quickly. Wearable gadgets are smart technologies that act like mobile devices but have a more specific usage.</strong></p>
					<p> People use them a lot to keep track of their fitness, health, work productivity, safety, payments, and communication in real time. Wearable technology is more than just health and fitness these days. It is now a part of everyday life. Wearable app development solutions can help you get more people to interact with your business and have a better experience, no matter what field you're in. AppsNation is a reliable firm that makes wearable apps with smart sensors, bespoke integrations, and the ability to work on several devices.</p>
					<p>Our services for developing wearable apps help organisations improve customer interactions, make their employees more mobile, and boost productivity.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center   wow fadeIn  achievements-count mt-3 "
			style="visibility: visible; animation-name: fadeIn;">
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
		<div class="row justify-content-center">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our Unmatched
							<span>App Development Services </span> for Wearable Devices
						</h2>
					</div>
					<p>With smart wearable devices app development services, you can step into the future of digital innovation and help your business stand out, compete better, and expand quicker.
					</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/custom-wearable-device-app-development.svg"
							alt="Custom Wearable Device App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Creating Apps for Wearable Devices That Are Unique to You</h3>
					</div>
					<div class="services-text-div">
						<p>A personalised wearable app that fits your business goals will provide your customers a smarter digital experience. Our company makes wearable apps that are reliable, scalable, and full of features for a variety of industries.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/wearable-app-ui-ux-design.svg"
							alt="Wearable App UI/UX Design" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Designing the UI and UX for Wearable Apps</h3>
					</div>
					<div class="services-text-div">
						<p>Our skilled UI/UX designers make wearable app interfaces that are clean, straightforward, and easy on the eyes. We build things that are straightforward to use and make it easy to find your way around on small screens.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/android-wearable-app-development.svg"
							alt="Android Wearable App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Building Apps for Android Wearable Devices</h3>
					</div>
					<div class="services-text-div">
						<p>Our expert Android developers are specialists in making apps for smartwatches, fitness bands, and other connected devices. We make apps for modern wearable platforms that are smooth, safe, and fast.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/apple-watch-application-development.svg"
							alt="Apple Watch Application Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Making Apps for the Apple Watch
						</h3>
					</div>
					<div class="services-text-div">
						<p>We create high-quality Apple Watch apps with polished functionality, seamless performance, and beautiful user experiences. We make watchOS apps that are useful to people.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/iot-based-werable-app-development.svg"
							alt="IoT based Wearable App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Making Apps for Wearables that Use the Internet of Things
						</h3>
					</div>
					<div class="services-text-div">
						<p>Our IoT experts make wearable apps that work with smart devices, sensors, and cloud platforms. We make IoT wearable app development solutions that fit your business needs.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/augument-reality-app-development.svg"
							alt="Augmented Reality App Development for Wearables" class="img-fluid" width="100%"
							height="100%">
					</div>
					<div class="service-heading">
						<h3>Making Augmented Reality Apps for Wearable Devices
						</h3>
					</div>
					<div class="services-text-div">
						<p>Augmented Reality lets organisations make experiences that are both immersive and interactive. With our AR wearable app development services, your brand can give people sophisticated digital experiences on wearable devices.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/wearables-apps-compatibility-testing.svg"
							alt="Wearable Apps Compatibility Testing" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Making Apps for Healthcare Wearables
						</h3>
					</div>
					<div class="services-text-div">
						<p>We make healthcare wearable apps that help with fitness tracking, remote monitoring, getting patients involved, and managing health data. Our apps are made to help with accuracy, safety, and better care for users.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/recreating-existing-apps.svg"
							alt="Recreating Existing Apps for Wearables" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Testing Compatibility of Wearable Apps
						</h3>
					</div>
					<div class="services-text-div">
						<p>We offer full testing services for wearable apps to make sure they work well on all devices, platforms, screen sizes, sensors, and operating systems.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/wearable-app-development/maintenance-and-support.svg"
							alt="Maintenance and Support" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Support and Maintenance
						</h3>
					</div>
					<div class="services-text-div">
						<p>We offer ongoing support and maintenance to make sure your wearable app is safe, up-to-date, free of bugs, and works with the newest devices and platforms.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start Services-->
<section class="service py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Our Expertise" class="light-bg-text bg-text">
						<h2>Our Main Area of Expertise is <span>Wearable App</span> Development</h2>
					</div>
					<p class="mb30">AppsNation is one of the best businesses for developing wearable apps. They have a lot of experience making smart, scalable, and engaging wearable apps for a variety of business purposes.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6">
			<div class="image-block wow fadeIn">
				<img loading="lazy" src="images/services/wearable-app-development/smart-band-apps.webp" alt="Smart Band Apps"
					class="img-fluid no-shadow" width="100%" height="100%">
			</div>
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h2>Apps for Smart Bands
				</h2>
				<p>We make smart band apps that let you keep track of your fitness, health, activities, and performance in real time.
				</p>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h2>Apps for the Apple Watch
				</h2>
				<p>Our watchOS professionals make Apple Watch apps that have unique features, work well, and are easy to use, all of which improve the user experience.
				</p>
			</div>
		</div>
		<div class="col-lg-6 mt-4 mt-sm-4 mt-md-3">
			<div class="image-block wow fadeIn">
				<img loading="lazy" src="images/services/wearable-app-development/apple-watch-apps.webp" alt="Apple Watch Apps"
					class="img-fluid no-shadow" width="100%" height="100%">
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6">
			<div class="image-block wow fadeIn">
				<img loading="lazy" src="images/services/wearable-app-development/google-glass-apps.webp" alt="Google Glass Apps"
					class="img-fluid no-shadow" width="100%" height="100%">
			</div>
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h2>Apps for Google Glass
				</h2>
				<p>We make apps that work with Google Glass and other smart wearable equipment to help businesses learn about more advanced ways to connect with digital technology.
				</p>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h2>Apps for Virtual Reality</h2>
				<p>We make fun VR apps for devices like the Oculus Quest, HTC Vive, Valve Index, and other virtual reality headsets.
				</p>
			</div>
		</div>
		<div class="col-lg-6 mt-4 mt-sm-4 mt-md-3">
			<div class="image-block wow fadeIn">
				<img loading="lazy" src="images/services/wearable-app-development/virtual-reality-apps.webp" alt="Virtual Reality Apps"
					class="img-fluid no-shadow" width="100%" height="100%">
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6">
			<div class="image-block wow fadeIn">
				<img loading="lazy" src="images/services/wearable-app-development/iot-wearable-apps.webp" alt="IoT Wearable Apps"
					class="img-fluid no-shadow" width="100%" height="100%">
			</div>
		</div>
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h2>Apps for IoT Wearables
				</h2>
				<p>Use easy-to-use IoT wearable apps that work with a lot of devices, sensors, and operating systems to grow your business.
				</p>
			</div>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 block-1 wow fadeIn my-auto">
			<div class="common-heading text-l pl25">
				<h2>App for Payment on the Go
				</h2>
				<p>Wearable payment app development for smart devices can help you offer fast, safe, and easy ways to pay.
				</p>
			</div>
		</div>
		<div class="col-lg-6 mt-4 mt-sm-4 mt-md-3">
			<div class="image-block wow fadeIn">
				<img loading="lazy" src="images/services/wearable-app-development/wearable-payment-app.webp" alt="Wearable Payment App"
					class="img-fluid no-shadow" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Services-->


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
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Pick <span>AppsNation</span></h2>
					</div>
					<p class="text-white">AppsNation is a top firm that makes wearable apps for organisations all around the world. These apps are original, scalable, and high-performing.
					</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="comprehensive-experties-img"></div>
					</div>
					<div class="service-heading">
						<h3>Full Range of Knowledge
						</h3>
					</div>
					<div class="services-text-div">
						<p>We offer a whole spectrum of services for developing wearable apps, from coming up with ideas and designing the user interface to coding, testing, deploying, and maintaining the app.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="extensive-versatility-img"></div>
					</div>
					<div class="service-heading">
						<h3>Very Adaptable
						</h3>
					</div>
					<div class="services-text-div">
						<p>Our team makes wearable apps for a wide range of devices, platforms, industries, and business models.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cross-device-img"></div>
					</div>
					<div class="service-heading">
						<h3>Ability to Work on Several Devices
						</h3>
					</div>
					<div class="services-text-div">
						<p>We make wearable apps that perform well on a variety of platforms, devices, and linked systems.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cross-industry-img"></div>
					</div>
					<div class="service-heading">
						<h3>Experience in Many Fields
						</h3>
					</div>
					<div class="services-text-div">
						<p>We work with organisations in the healthcare, fitness, retail, finance, logistics, entertainment, and enterprise sectors.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="competitive-delivery-img"></div>
					</div>
					<div class="service-heading">
						<h3>Prices that Are Fair and Delivery on Time
						</h3>
					</div>
					<div class="services-text-div">
						<p>Our wearable app development solutions are affordable, reliable, and delivered on time without compromising quality.

						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="bug-free-img"></div>
					</div>
					<div class="service-heading">
						<h3>Wearable App Development Without Bugs
						</h3>
					</div>
					<div class="services-text-div">
						<p>Our testing team makes sure that every wearable app is safe, stable, responsive, and doesn't have any big performance problems.
						</p>
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
						<h2>Our <span>Wearable App</span> Development Process</h2>
					</div>
					<p>We use a seamless and planned development process to turn your idea for a wearable app into a working, scalable, and market-ready product.
					</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Collecting Requirements
						</h3>
						<p class="description">Get in touch with AppsNation and tell our skilled project managers and analysts about your wearable app idea. Before we write a clear project brief, we make sure we know your goals, audience, features, and what you expect.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">Strategies for Making Apps
						</h3>
						<p class="description">After looking at your business, competition, target demographic, and technological needs, we come up with a solid plan for developing a wearable app. This helps us make an app that is useful to your users.
							.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">Designing and Wireframing
						</h3>
						<p class="description">The first appearance and feel of your wearable app comes from our UI/UX designers. We make user journeys, screen layouts, and simple interfaces that look well on small wearable screens.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">Phase of Development
						</h3>
						<p class="description">Our wearable app developers leverage cutting-edge tools like AI, ML, IoT, and sensor-based integrations to make smart and dependable wearable apps. Client coordination is done at every stage.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">Testing Apps
						</h3>
						<p class="description">To make sure the final product is smooth, we test your wearable app for speed, performance, usability, security, device compatibility, and connectivity.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">Putting Apps on Devices
						</h3>
						<p class="description">We put your wearable app on the proper platforms and make sure it meets all technical and retail criteria. We also write documentation, app descriptions, and screenshots, and we help with support after the app is out.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

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
						<h2 class="text-white">Ranked as #1 <span>Wearables App</span> Development Company</h2>
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
								What is wearable technology? How does wearable technology work?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Wearable technology is at the vanguard of the Internet of Things (IoT) due to its
										rapid adoption in smart devices and computers. A wearable is a form of
										electronic gadget worn as an accessory, implanted in the user's body, and
										sometimes even tattooed on the skin. Wearable technology offers many
										applications and advantages in navigation systems, healthcare, and textile.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								What are the challenges faced by wearable app developers?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>There are several problems in developing wearable apps that need greater caution,
										superior resources, and a customer audience that is well aware of the
										technology. However, the most common challenges include:</p>
									<ul class="ps-5">
										<li>The smaller screen size makes the UI/UX development difficult</li>
										<li>Minimal battery life</li>
										<li>Few wearable device app developers</li>
										<li>Unavailability of updates of the wearable app</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide maintenance and support after developing a wearable app?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>3-months of free support and maintenance are an essential part of our unrivalled
										wearable device app development services to guarantee a successful app journey
										ahead.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Why choose AppsNation for iOS and Android wearable app development?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>AppsNation offers clients countless benefits and, on top, the wearable app
										development services that incorporate the AI that connects the machine with
										humans efficiently. Furthermore, our exceptional wearable app development
										services are inclined to empower businesses and their consumers with a more
										simulating experience of their services by combining the latest technologies to
										the renowned iOS and Android platforms.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								What are different types of wearable app development services do you provide?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We offer a wide range of wearable app development services that include:</p>
									<ul class="ps-5">
										<li>Custom Wearable Device App Development</li>
										<li>Wearable App UI/UX Design</li>
										<li>Android wear app Development</li>
										<li>Apple Watch Application Development</li>
										<li>Android Watch Applications</li>
										<li>Wearable App Development for iOS</li>
										<li>IoT based Wearable App Development</li>
										<li>Augmented Reality App Development for Wearables</li>
										<li>Testing of Apps for Wearable Device Compatibility </li>
										<li>Recreating Existing Apps for Wearables</li>
										<li>Maintenance and Support</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost for developing a wearable app?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>To determine the cost of a wearable device app development, you must consider the
										app's purpose, features, and functionalities. Besides, UI/UX design, wear apps,
										non-visual interfaces, offline usage, and the choice of platform and device
										influence the cost of wearable app development.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to build a wearable app?
							</button>
						</h2>
						<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>The development duration of a wearable device app depends on many factors such
										as; defining the purpose, designing the user interface and experience,
										functionalities and features to incorporate, platform compatibility, and
										testing. Typically, a standard wearable app may take around 3-6 months to
										develop.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								What are the benefits of outsourcing wearable app development?
							</button>
						</h2>
						<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>There are countless benefits of outsourcing any project, and hiring an agency for
										wearable app development comes along with remarkable benefits such as:</p>
									<ul class="ps-5">
										<li>Cost-effective.</li>
										<li>Flexible.</li>
										<li>Quick turnaround time.</li>
										<li>Extensive developers and technologies.</li>
										<li>Highly secure development.</li>
										<li>Adequate support and maintenance system.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Do you guarantee app approval in the app store?
							</button>
						</h2>
						<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Publishing apps on different platforms and marketplaces are part of our core
										wearable app development services. We strictly follow the guidelines of all the
										app stores to approve the wearable app adequately.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								Do you develop wearable apps on multiple platforms?
							</button>
						</h2>
						<div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Our extensive wearable app development services include the development of
										wearable apps for different platforms and devices. AppsNation is on the verge to
										offer businesses to make the most out of wearable technology and thrive among
										the best. In contrast, we develop wearable apps for iOS, Android, smart bands
										and watches, Google Smart glasses, and VR headsets.</p>
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