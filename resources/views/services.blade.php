@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 services-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-12 col-lg-6 order-2 order-lg-1 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Empower Your Business with Next-Gen Digital Services</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Here at <a href="{{url('/')}}" target="_blank"> AppsNation</a>, we love creating experiences that really
						make a difference and help businesses thrive. We're all about
						fresh ideas and making sure our clients are happy, which helps
						you tackle the tricky bits of the digital world. We get things done
						that truly count and make a real impact</p>
					<ul class="mt20 services-content-list text-white">
						<li><a href="#appSection">Custom App Development</a></li>
						<li><a href="#design">Modern UI UX</a></li>
						<li><a href="#digital-growth">Digital Brand Growth</a></li>
						<li><a href="#ai-powerd">AI Powered Solutions</a></li>

					</ul>
				</div>
			</div>
			<div class="col-md-12 col-lg-4 order-1 order-lg-2 wow fadeIn">
				<div class="niwax23form shadow">
					<div class="common-heading text-l">
						{!! NoCaptcha::renderJs() !!}
						<h2 class="mt0 mb0">Book a Free <span>Consultation</span></h2>
					</div>
					<div class="form-block contact-us-form">
						<form id="contactForm33" method="post" data-toggle="validator" class="shake" action="{{route('leads')}}">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="first_name" id="first_name" placeholder="Enter First Name" required="" data-error="Please fill Out" maxlength="50">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" required="" data-error="Please fill Out" maxlength="50">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-12">
									<input type="email" name="email" id="email" placeholder="Enter email" required="" maxlength="50">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-12">
									<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required="" data-error="Please fill Out" maxlength="20">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<textarea id="message" name="message" rows="5" placeholder="Enter your message" required="" maxlength="500"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group mb-2 captchaContainer3" id="captchaContainer">
								{!! NoCaptcha::display() !!}
							</div>
							<button type="submit" name="submit" id="form-submit" class="btn button-arounder lnk">Submit
								<i class="fas fa-chevron-right fa-icon"></i>
							</button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<!-- <section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/services/android-app-development/android-app-development.webp" alt="Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Services" class="light-bg-text bg-text">
						<h2>Scale-Up With Our<br> <span class="flup-theme">Services</span></h2>
					</div>
					<p><strong>Snag an Android app that's truly worth your while – boasting an attractive user interface, impressive responsiveness and functionality, packed with features, and built for scalability.</strong></p>
					<p>Get this: Android owns a whopping 88% of the world's smartphone market, and Google's Android OS is the brains behind over 2 billion smart devices. AppsNation is riding this wave with an all-star team of Android developers - think of them as Android sorcerers - dedicated to conjuring up your cutting edge, one-of-a-kind Android app.</p>
					<p>AppsNation is an Android app development company that uses data and analytics as its guiding principles to build top-notch data and analytics as its guiding principles to build top-notch applications. We help startups, small and medium-sized businesses, and large corporations succeed and stand out with exceptional Android apps. Our team creates Android apps with attractive user interfaces and user experiences that perform seamlessly across all devices, no matter the screen size.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End About-->

<!-- Start Scale Up -->
<section id="mycounterSection" class="py-5 scale-up-services">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7 col-md-12 order-2 order-lg-1">
				<div data-text="" class="light-bg-text bg-text">
					<h2><span class="flup-theme">AppsNation</span></h2>
				</div>
				<div data-text="" class="light-bg-text bg-text">
					<h2>Scale-Up With Our Services</h2>
				</div>
				<p>AppsNation offers end-to-end digital solutions designed to help businesses scale. From mobile app development and web solutions to UI/UX design, data analytics, and digital marketing, our expert teams deliver high-performance, scalable, and results-driven services across industries.</p>
				<div class="square mt-4">
					<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="btn-br bg-btn3 bg-btn-scalup btshad-b2 lnk">Book Mobile App Consultation
						<span class="circle"> </span>
					</a>
				</div>
				<div class="row justify-content-center achievements-count mt-3">
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
			<div class="col-lg-5 col-md-12 text-center order-1 order-lg-2">
				<div class="image-block">
					<img loading="lazy" data-text="Appsnation" src="images/service/services-imgs.png" alt="Android App Development" class="img-fluid no-shadow mx-auto" />
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Scale Up -->


<!--Start Service-->
<!-- <section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our Unrivaled <span>Services</span></h2>
					</div>
					<p><a href="{{url('/android-app-development')}}" target="_blank">AppsNation Android App development</a> services can be the
						beacon of hope you need to revitalize your business through
						increased digital engagement</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn service-one">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/android-app-development.svg" alt="Android App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>Android App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our Android app developers leverage cutting-edge technologies
							to create native applications with robust and flexible architecture.</p>
						<a href="{{url('/android-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5  wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/ios-app-development.svg" alt="Android App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>iOS App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We focus on crafting comprehensive iOS mobile applications that
							are dependable, able to grow with your needs, and work
							seamlessly across iPhone, iPad, Apple TV, and Apple Watch</p>
						<a href="{{url('/ios-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5  wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/cross-platform-app-development.svg" alt="Android App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>Cross-Platform App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We develop apps that work on multiple platforms and devices,
							saving you cash by needing just one set of code and getting your
							product out there faster</p>
						<a href="{{url('/cross-platform-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5   wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/game-app-development.svg" alt="Android App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>Game App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We've got some of the best mobile game developers around, and
							they've cooked up a whole bunch of super fun games.
						</p>
						<a href="{{url('/game-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-portal-development/e-commerce-app-development.svg" alt="E-Commerce App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>E-Commerce App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our e-commerce app development services help with
							designing,developing, and evolving web-based software. Count
							on us to build web apps that are effective, efficient, and easy to
							use.</p>
						<a href="{{url('/e-commerce-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-portal-development/web-app-development.svg" alt="Web App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>Web App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our web app development team is here to help you with every
							step of creating online software, from the initial design to ongoing
							improvements. We're committed to building web apps that work
							well, are efficient, and are a breeze to use.</p>
						<a href="{{url('/web-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/xr-app-development/mixed-reality-app-development.svg" alt="MR App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>MR App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We help businesses design, build, and grow their online
							stores.You can trust us to create web apps that work well, run
							smoothly,and are easy for your customers to use.
						</p>
						<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/xr-app-development/augmented-reality-app-development.svg" alt="AR App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>AR App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We help businesses design, build, and refine web-based software
							through our web application development services. Count on us
							to deliver web apps that are not only powerful and efficient but
							also a breeze to use.</p>
						<a href="{{url('/ar-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/xr-app-development/virtual-reality-app-development.svg" alt="VR App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>VR App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We're here to help you with every stage of creating web-based
							software, from the initial design to ongoing development and
							updates. Count on us to build web applications that are not only
							powerful and efficient but also a breeze to use.</p>
						<a href="{{url('/vr-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/connected-devices/iot-app-development.svg" alt="IoT App Development" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>IoT App Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our IoT device app development services leverage cutting-edge
							technology, enabling us to craft exceptional wearable apps for
							both iOS and Android platforms.</p>
						<a href="{{url('/iot-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/connected-devices/wearable-app-development.svg" alt="Wearable App Developmen" class="img-fluid">
					</div>
					<div class="service-heading">
						<h3>Wearable App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our cutting-edge technology enables us to craft truly exceptional
							wearable apps for both iOS and Android platforms.</p>
						<a href="{{url('/wearable-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/connected-devices/industrial-automation.svg" alt="Industrial Automation" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>Industrial Automation</h4>
					</div>
					<div class="services-text-div">
						<p>Whether it's automating repetitive chores or fine-tuning your
							processes, we've got the know-how and the right tools to get it
							done. Don't let manual work slow you down anymore.</p>
						<a href="{{url('/industrial-automation')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/design-and-animation-services/digital-marketing.svg" alt="Digital Marketing" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>Digital Marketing</h4>
					</div>
					<div class="services-text-div">
						<p>Make your mark on the web and see real results by partnering
							with our comprehensive digital marketing agency. We offer a full
							suite of services, such as SEO, PPC and paid ads, social media
							management, email campaigns, and beyond. Our team of
							seasoned professionals knows exactly how to propel your
							business towards success.</p>
						<a href="{{url('/digital-marketing')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/design-and-animation-services/animation-services.svg" alt="Animation Services" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>Animation Services</h4>
					</div>
					<div class="services-text-div">
						<p>Turn your fantastic ideas into captivating stories with our
							animated films. Whether you're thinking about 2D or 3D
							animation, or perhaps motion graphics, our team of expert artists
							is here to collaborate with you. Together, we'll craft stunning
							animations that are sure to make a big impact on your audience.</p>
						<a href="{{url('/animation-services')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/design-and-animation-services/3d-exterior-rendering.svg" alt="3D Exterior Rendering" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>3D Exterior Rendering</h4>
					</div>
					<div class="services-text-div">
						<p>At 3D exterior rendering services, we bring your architectural
							blueprints to life through breathtakingly realistic 3D visualizations,
							meticulously attending to every single detail. Our architectural
							visualization services provide end-users with an unparalleled
							experience, thanks to the creation of high-definition visuals of
							your designs.
						</p>
						<a href="{{url('/exterior-3d')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/design-and-animation-services/3d-interior-rendering.svg" alt="3D Interior Rendering" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>3D Interior Rendering</h4>
					</div>
					<div class="services-text-div">
						<p>Think of 3D floor plans as comprehensive 2D and 3D
							representations that really bring a property to life. Using real
							estate floor plans significantly boosts interest from potential
							buyers and investors, ultimately making your property more
							appealing. Our floor plans are perfect for realtors, designers
							architects, and builders, making it a breeze to showcase and
							describe different spaces.</p>
						<a href="{{url('/interior-3d')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/design-and-animation-services/2d-3d-floor-plan.svg" alt="2D 3D Floor Plan" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>2D 3D Floor Plan</h4>
					</div>
					<div class="services-text-div">
						<p>Think of 3D floor plans as intricate 2D and 3D representations
							that bring a property to life, making it more engaging for
							everyone involved. By using real estate floor plans, you can
							significantly boost interest from potential buyers and
							investors,ultimately making your property stand out. Our floor
							plans are perfect for realtors, designers, architects, and builders,
							simplifying the process of showcasing and discussing spaces.</p>
						<a href="{{url('/floor-plan')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/design-and-animation-services/2d-art-services.svg" alt="2D Art Services" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>2D Art Services</h4>
					</div>
					<div class="services-text-div">
						<p>Our 2D art services bring your ideas to life through captivating
							artwork and illustrations. Whether it's character design, page
							layout, digital art, or anything else, we're dedicated to crafting
							stunning visuals that resonate with your audience. From gaming
							to branding and advertising, our 2D art services enhance your
							project's visual appeal, showcasing intricate detail and boundless
							creativity.</p>
						<a href="{{url('/2d-art')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-5 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/design-and-animation-services/3d-art-services.svg" alt="3D Art Services" class="img-fluid">
					</div>
					<div class="service-heading">
						<h4>3D Art Services</h4>
					</div>
					<div class="services-text-div">
						<p>Unleash the full potential of your project with our adaptable 3D
							art services, designed with our clients in mind. We provide a
							comprehensive suite of 3D solutions, encompassing everything
							from 3D modeling and drafting to 3D visualization and animation,
							all tailored to fulfill your specific objectives. Whether you're
							working on a game, an advertisement, or a product design, our
							team of 3D rendering experts creates stunning visualizations that
							bring your concept to life with meticulous precision.</p>
						<a href="{{url('/3d-art')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End Service-->


<section class="service-section-app py-5 mt-4 dark-bg2" id="appSection">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 fadeIn my-5">
				<div data-text="App Services" class="light-bg-text bg-text text-start">
					<div class="sctxt">Mobile App Development</div>
				</div>

			</div>
		</div>
		<div class="row  mt-5 wow fadeIn">
			<div class="services-card-rows owl-carousel owl-theme">
				<div class="col-12 fadeIn servive-card-col service-one">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">

								<div class="services-img-div">
									<img loading="lazy" src="images/home/android-app-development-icon.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="service-heading">
									<h3>Android App Development</h3>
								</div>
							</div>

							<div class="services-text-div">
								<p>Professional Android App Development Services offering custom, secure, and scalable native Android apps using latest technologies and clean architecture.
								</p>
								<a href="{{url('/android-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-eloarrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12  fadeIn servive-card-col service-two">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/home/ios-app-development-icon.svg" alt="iOS App Development" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="service-heading">
									<h3>iOS App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Professional iOS App Development Services delivering secure, scalable native apps for iPhone, iPad, Apple Watch, and Apple TV using latest Apple technologies.

								</p>
								<a href="{{url('/iot-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12  fadeIn servive-card-col service-three">
					<div class="card  ">

						<div class="card-body">
							<div class="services-tital ">
								<div class="services-img-div">
									<img loading="lazy" src="images/home/cross-platform-app-development-icon.svg" alt="Cross Platform App Development" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="service-heading">
									<h3>Cross-Platform App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Cross Platform App Development Services using Flutter and React Native to build fast, cost effective mobile apps for Android and iOS with a single codebase.
								</p>
								<a href="{{url('/cross-platform-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12   wow fadeIn servive-card-col service-four">
					<div class="card ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/home/game-app-development-icon.svg" alt="Game App Development" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="service-heading">
									<h3>Game App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Game App Development Services creating engaging, high-performance mobile games for Android and iOS using Unity and Unreal Engine with stunning graphics.
								</p>
								<a href="{{url('/game-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--start banner section  -->
<section class="services-box-section p-100 text-white my-5 py-5">
	<div class="h-100 container">
		<div class="mb-4 row">
			<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
			</div>
		</div>

		<div class="service-banner-slider owl-carousel owl-theme wow fadeIn">

			<div class="banner-box-image" style="background-image: url(images/services-banner/android-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>AR App </span>Development Services</h2>
						<p>We design interactive AR apps that blend digital factors with the actual world. Our AR app improvement complements consumer engagement, boosts emblem enjoy, and creates immersive solutions for advertising and marketing, gaming, and schooling.

						</p>
						<div class="banner-btn">
							<a
								href="{{url('/ar-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-box-image" style="background-image: url(images/services-banner/ar-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>Android App </span>Development Services</h2>
						<p>A luxurious well-being destination designed to rejuvenate your body and mind with premium treatments and tranquil ambiance. From soothing therapies to personalized care, Royal Spa is built to deliver unparalleled relaxation and pure serenity.</p>
						<div class="banner-btn">
							<a
								href="{{url('/android-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-box-image" style="background-image: url(images/services-banner/cross-platform-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>Cross Platform App </span>Development Services</h2>
						<p>Our move-platform app improvement lets you attain Android and iOS customers with one effective answer. We build price-effective, rapid, and scalable apps that supply steady performance across all devices.
						</p>
						<div class="banner-btn">
							<a
								href="{{url('/cross-platform-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!--End banner section  -->




<section class="service-section-app py-5 mt-4 dark-bg2" id="ai-powerd">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 fadeIn my-5">
				<div data-text="XR - Services" class="light-bg-text bg-text text-start">
					<div class="sctxt">XR (AR & VR) App Development</div>
				</div>

			</div>
		</div>

		<div class="row  mt-5 wow fadeIn">
			<div class="services-card-rows owl-carousel owl-theme">

				<div class="col-12  fadeIn servive-card-col service-seven">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/home/ar-app-development-icon.svg" alt="AR App Development" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="service-heading">
									<h3>AR App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>AR app development services for powerful, efficient, and user-friendly web apps. Custom design, smooth functionality, and immersive augmented reality experiences.
								</p>
								<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col service-eight">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/home/vr-app-development-icon.svg" alt="VR App Development" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="service-heading">
									<h3>VR App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>VR app development services for efficient, powerful, and user-friendly web apps. Custom design, immersive experiences, and seamless virtual reality solutions.

								</p>
								<a href="{{url('/vr-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col service-nine">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/home/mr-app-development-icon.svg" alt="MR App Development" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="service-heading">
									<h3>MR App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>MR app development services for smooth, efficient, and user-friendly web apps. Custom design, secure functionality, and seamless online store experiences.</p>
								<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service-section-app py-5 mt-4 dark-bg2" id="digital-growth">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 fadeIn my-5">
				<div data-text="Connected service" class="light-bg-text bg-text text-start">
					<div class="sctxt">Connected Devices</div>
				</div>

			</div>
		</div>

		<div class="row  mt-5 wow fadeIn">
			<div class="services-card-rows owl-carousel owl-theme">

				<div class="col-12  fadeIn servive-card-col iot-app-development">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/connected-devices/iot-app-development.svg" alt="IoT App Development" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>IoT App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>IoT app development services for innovative, secure, and user-friendly apps. Custom wearable solutions for iOS and Android, powered by cutting-edge technology.
								</p>
								<a href="{{url('/iot-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col service-six">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/connected-devices/wearable-app-development.svg" alt="Wearable App Developmen" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>Wearable App Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Wearable app development services for innovative, secure, and user-friendly apps. Custom solutions for iOS and Android using cutting-edge technology</p>
								<a href="{{url('/wearable-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col industrial-app-development">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/connected-devices/industrial-automation.svg" alt="Industrial Automation" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>Industrial Automation</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Industrial automation services to streamline processes, reduce manual work, and improve efficiency. Smart solutions for manufacturing and industrial operations.
								</p>
								<a href="{{url('/industrial-automation')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="services-box-section p-100 text-white my-5 py-5">
	<div class="h-100 container">
		<div class="mb-4 row">
			<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
			</div>
		</div>

		<div class="service-banner-slider owl-carousel owl-theme wow fadeIn">

			<div class="banner-box-image" style="background-image: url(images/services-banner/e-commerce-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>E-Commerce App</span>Development Services</h2>
						<p>We expand stable and consumer-pleasant e-commerce apps that force income and customer loyalty. From clean checkout to clever product management, our e-commerce app development helps develop your on-line commercial enterprise.


						</p>
						<div class="banner-btn">
							<a
								href="{{url('/e-commerce-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-box-image" style="background-image: url(images/services-banner/game-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>Game App </span>Development Services</h2>
						<p>We create attractive and outstanding sport apps with immersive visuals, smooth controls, and addictive gameplay. From informal to competitive video games, our recreation app development turns thoughts into experiences players love.
						</p>
						<div class="banner-btn">
							<a
								href="{{url('/game-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-box-image" style="background-image: url(images/services-banner/ios-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>IOS App </span>Development Services</h2>
						<p>Our iOS app development can provide smooth, stable, and excessive-acting apps for iPhone and iPad. We recognition on smooth layout, smooth navigation, and Apple standards to assist your brand stand out in the App Store.
						</p>
						<div class="banner-btn">
							<a
								href="{{url('/ios-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>



		</div>



		>
	</div>
	</div>
</section>
<!--End banner section  -->

<section class="service-section-app py-5 mt-4 dark-bg2" id="design">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 fadeIn my-5">
				<div data-text="Design service" class="light-bg-text bg-text text-start">
					<div class="sctxt"> Design & Animation Services</div>
				</div>

			</div>
		</div>

		<div class="row  mt-5 wow fadeIn">
			<div class="services-card-rows owl-carousel owl-theme">

				<div class="col-12  fadeIn servive-card-col animation-services">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/design-and-animation-services/animation-services.svg" alt="Animation Services" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>Animation Services</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Our Animation services bring your ideas to life. Expert 2D, 3D, and motion graphics create captivating visuals that engage and impress your audience.</p>
								<a href="{{url('/animation-services')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col Three-D-exterior">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/design-and-animation-services/3d-exterior-rendering.svg" alt="3D Exterior Rendering" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>3D Exterior Rendering</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>3D exterior rendering services create realistic architectural visualizations. High-definition, detailed designs bring blueprints to life for an immersive experience.
								</p>
								<a href="{{url('/exterior-3d')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col Three-D-Interior">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/design-and-animation-services/3d-interior-rendering.svg" alt="3D Interior Rendering" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>3D Interior Rendering</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>3D interior rendering services create realistic floor plans and visuals. Perfect for realtors, architects, and designers to showcase properties and boost interest.
								</p>
								<a href="{{url('/interior-3d')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col floor-Plan">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/design-and-animation-services/2d-3d-floor-plan.svg" alt="2D 3D Floor Plan" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>2D 3D Floor Plan</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>2D & 3D Floor Plan
									2D & 3D floor plan services create detailed property visuals for realtors, architects, and designers, boosting engagement and making spaces easy to showcase.
								</p>
								<a href="{{url('/floor-plan')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col two-d-art">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/design-and-animation-services/2d-art-services.svg" alt="2D Art Services" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>2D Art Services</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>2D art services create stunning illustrations, character designs, and digital artwork for gaming, branding, and advertising, enhancing your project’s visual appeal.
								</p>
								<a href="{{url('/2d-art')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col three-d-art">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/design-and-animation-services/3d-art-services.svg" alt="3D Art Services" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>3D Art Services</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>3D art services for modeling, visualization, and animation. Bring games, ads, and product designs to life with stunning, precise, and client-focused 3D solutions</p>
								<a href="{{url('/3d-art')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="service-section-app py-5 mt-4 dark-bg2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 fadeIn my-5">
				<div data-text="Web service" class="light-bg-text bg-text text-start">
					<div class="sctxt">Web Development Service</div>
				</div>

			</div>
		</div>

		<div class="row  mt-5 wow fadeIn">
			<div class="services-card-rows owl-carousel owl-theme">

				<div class="col-12  fadeIn servive-card-col animation-services">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/design-and-animation-services/animation-services.svg" alt="Animation Services" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>Web Portal Development </h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Web portal development services to create secure, scalable, and user-friendly portals. Custom solutions for businesses, education, healthcare, and enterprise needs.</p>
								<a href="{{url('/web-portal-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col e-commerce-service">
					<div class="card  ">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/web-portal-development/e-commerce-app-development.svg" alt="E-Commerce App Development" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>E-commerce app Development</h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>E-commerce app development services for secure, scalable, and user-friendly web apps. Custom design, fast performance, and seamless payment integration.

								</p>
								<a href="{{url('/e-commerce-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12   fadeIn servive-card-col service-five">
					<div class="card">
						<div class="card-body">
							<div class="services-tital">
								<div class="services-img-div">
									<img loading="lazy" src="images/services/web-portal-development/web-app-development.svg" alt="Web App Development" class="img-fluid">
								</div>
								<div class="service-heading">
									<h3>Web App Development </h3>
								</div>
							</div>
							<div class="services-text-div">
								<p>Web app development services for secure, scalable, and high performance applications. Custom design, smooth functionality, and user-friendly solutions.
								</p>
								<a href="{{url('/web-app-development')}}" class="mt20 link-prbs">
									<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>

<section class="services-box-section p-100 text-white my-5 py-5">
	<div class="h-100 container">
		<div class="mb-4 row">
			<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
			</div>
		</div>

		<div class="service-banner-slider owl-carousel owl-theme wow fadeIn">

			<div class="banner-box-image" style="background-image: url(images/services-banner/iot-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>IoT App </span>Development Services</h2>
						<p>We create smart IoT apps that connect gadgets, facts, and customers seamlessly. Our IoT app development allows you monitor, manipulate, and automate structures in real time for better performance and smarter selections.


						</p>
						<div class="banner-btn">
							<a
								href="{{url('/iot-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-box-image" style="background-image: url(images/services-banner/vr-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>VR App </span>Development Services</h2>
						<p>Our VR app improvement brings thoughts to lifestyles via immersive virtual experiences. From gaming to education apps, we build remarkable VR answers that experience real, attractive, and future-ready.

						</p>
						<div class="banner-btn">
							<a
								href="{{url('/vr-app-development')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-box-image" style="background-image: url(images/services-banner/web-app-development-background.png); background-repeat: no-repeat; background-size: cover;">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2><span>Web App </span>Development Services</h2>
						<p>Our web app development makes a speciality of rapid, responsive, and scalable solutions. We construct modern-day internet apps with clean UI, sturdy security, and clean performance to help your commercial enterprise boom on-line.

						</p>
						<div class="banner-btn">
							<a
								href="{{url('/web-app-development	t')}}" target="_blank" aria-label="Appsnation Contact">Explore Our Services</a>
							<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="process-btn-effect" class="active">Request A Quote</a>
						</div>
					</div>
				</div>
			</div>



		</div>



		>
	</div>
	</div>
</section>
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
					<p class="text-white">We help you make the most of Android's unique features by
						combining them with the latest tech like Augmented Reality,
						Virtual Reality, Mixed Reality, and Blockchain.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/free-mobile-app-consultation.svg" alt="Free Mobile App Consultation" class="img-fluid">
					</div>
					<h3 class="title">Free Mobile App Consultation</h3>
					<p class="description">AppsNation offers you the chance to chart your path to success
						without spending a dime</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/50+-expert-android-developers.svg" alt="50+ Expert Android Developers" class="img-fluid">
					</div>
					<h3 class="title">50+ Expert Android Developers</h3>
					<p class="description">Unlock your full potential by teaming up with the world's top
						Android developers.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/flexible-hiring-models.svg" alt="Flexible Hiring Models" class="img-fluid">
					</div>
					<h3 class="title">Flexible Hiring Models</h3>
					<p class="description">AppsNation offers personalized pricing packages, making it
						accessible to everyone, no matter the size of your business or the
						industry you're in.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/247-technical-support.svg" alt="24/7 Technical Support" class="img-fluid">
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Don't stress, our tech team is there for you around the clock to
						sort out any problems you might have with the app.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/100-transparency.svg" alt="100% Transparency" class="img-fluid">
					</div>
					<h3 class="title">100% Transparency</h3>
					<p class="description">We prioritize customer satisfaction above all else, maintaining
						transparency with our clients to foster trust in our app.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/why-choose/3-months-free-delivery.svg" alt="3-Months Free Support After Delivery" class="img-fluid">
					</div>
					<h3 class="title">3-Months Free Support After Delivery</h3>
					<p class="description">For three months following the app's release, we provide
						complimentary support to maintain its stability and proper
						functioning.</p>
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
						<h2>Our <span>Android App</span> Development Process</h2>
					</div>
					<p>AppsNation provides clients with a simple, agile process for
						Android app development, guided by a results-focused approach.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Understanding how your app's user experience (UX) and user
						interface (UI) should be tailored to your target audience is a
						cornerstone of the research process. It's vital to consider your
						target region and subsequently identify details such as the age,
						language preferences, design aesthetics, and typefaces that will
						resonate with them. This stage also involves selecting the
						technology stack that will bring your app to life. If you have a
						brilliant Android app concept, contact AppsNation and share it
						with our seasoned project managers. We believe in empowering
						our clients to clearly articulate their vision, and while you do that,
						we'll compile a comprehensive business document that outlines
						the project's scope.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">We dive deep into understanding your business, your target
						audience, and your competition. This allows us to create a
						thoughtful, results-oriented Android app development strategy
						tailored specifically to your needs. Our seasoned mobile
						development experts are committed to delivering a solution that
						boosts your conversion rates.
						</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">Our expert UI/UX designers create incredibly appealing designs
						and prototypes. These are packed with the latest
						technology,easily scalable, and utterly dependable, ensuring
						remarkable results. After making any needed tweaks and
						adjustments, the customer finalizes and completes the initial
						design.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">Following coding best practices, we build Android applications
						tailored to our clients' specific needs and requests, utilizing the
						latest technologies and tools. The apps we design are
						instrumental in addressing our clients' intricate challenges and
						boosting the overall value of their businesses.
						</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">To make sure the Android app we built is safe and works right, our
						expert Quality Assurance team puts it through tough tests,
						checking everything to confirm there are no errors. Our well
						trained QA folks know a lot about different testing problems,from
						beginning to end.
						</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">After the app has been rigorously tested and given the green light
						by the client, we'll launch it on the Google Play Store, following all
						of their guidelines. AppsNation has extensive experience in
						submitting Android apps to the Google Play Store</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
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
						<span>Project Analysis of Requirements</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab2',this)">
						<i class="fa-solid fa-pen-ruler"></i>
						<span>Wireframing & Designing</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab3',this)">
						<i class="fa-solid fa-mobile-screen-button"></i>
						<span>App Development</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab4',this)">
						<i class="fa-solid fa-check-to-slot"></i>
						<span>App Testing</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab5',this)">
						<i class="fa-solid fa-cloud-arrow-up"></i>
						<span>App Deployment</span>
					</button>

					<button class="tabBtn" onclick="openTab('tab6',this)">
						<i class="fa-solid fa-wrench"></i>
						<span>Maintenance</span>
					</button>

				</div>

			</div>
			<div class="col-md-12 col-lg-8">
				<div class="process-tabs">
					<div id="tab1" class="tabs ">
						<div class="tabs-inner">
							<h2>Project Analysis of Requirements</h2>
							<ul>
								<li>Analyze target audience, region, age, and language.</li>
								<li>Define UX/UI design direction.</li>
								<li>Choose appropriate typography for the app.</li>
								<li>Select the right technology stack.</li>
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
									<i class="fa-solid fa-magnifying-glass"></i>
									<span>Requirement Research</span>
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
								<li>Draw a rough sketch of the user journey on paper.</li>
								<li>Identify key steps and touchpoints for users.</li>
								<li>Use sketching to explore ideas beyond tracking movements.</li>
								<li>Refine concepts and arrange all design components properly.</li>
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
								<li>The app goes through multiple development stages.</li>
								<li>Essential functionality is often not fully tested in early stages.</li>
								<li>Additional functionality is added in the second stage.</li>
								<li>We follow an agile approach for flexible planning.</li>
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
								<li>Test app usability, compatibility, security, and performance.</li>
								<li>Check essential functionality in early stages.</li>
								<li>Gather feedback from beta users.</li>
								<li>Ensure app functions correctly in real-world scenarios.</li>
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
								<li>Complete final testing of the app.</li>
								<li>Prepare deployment procedures.</li>
								<li>Deploy the app to production or beta environment.</li>
								<li>Go live and monitor initial performance.</li>
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
								<li>Provide excellent app maintenance solutions.</li>
								<li>Support you throughout the development process.</li>
								<li>Offer top-quality options and services.</li>
								<li>Ensure smooth app performance and updates.</li>
							</ul>

							<a data-bs-toggle="modal" data-bs-target="#menu-popup
							" class="process-btn-effect">Call a Schedule
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
<!--End Process-->


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
										<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}" width="auto" height="auto">
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
									<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}" width="auto" height="auto">
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
										<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}" width="auto" height="auto">
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
									<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" alt="{{$item['alt']}}" width="auto" height="auto">
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
			<div class="col-lg-12">
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
		<div class="row">
			<div class="col-sm-12 mt20 wow fadeIn">
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
									<p>A Non-Disclosure Agreement, or NDA, is a legal contract we use
										when collaborating on different projects. Its purpose is to
										safeguard your concepts, preventing them from being copied or
										disclosed to competitors.
									</p>
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
									<p>We see resource allocation as both a craft and a systematic
										process. That's why we dive deep into understanding your
										company, your competitors, your target audience, and what
										makes them tick. This allows us to create an app that does its job
										effectively.</p>
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
									<p>At AppsNation, our team of developers utilizes cutting-edge
										technologies and tools to build your perfect Android application.</p>
									<p class="pt-2">Mobile Frontend</p>
									<ul class="ps-5">
										<li>Native (Java/Kotlin)</li>
										<li>Xamarin Native C#</li>
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
										<li>- Amazon Web Services (AWS)</li>
										<li>Microsoft Azure</li>
										<li>Google Cloud Platform (GCP)</li>
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
									<p>We see getting your Android app onto Google Play as a key piece
										of our overall Android app development puzzle. At AppsNation,
										we've spent years mastering the art of launching Android apps on
										the Play Store, always playing by their rules.</p>
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
									<p>We offer a fantastic mobile app development service, complete
										with a free 3-month support and maintenance package. This
										ensures your app runs smoothly by addressing any hiccups based
										on user feedback, setting you up for success.</p>
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
									<p>The cost of developing an Android app can vary quite a bit, mostly
										depending on how complex the app is. Usually, companies figure
										out the price by looking at how many APIs and screens the app
										will have. In contrast, a pretty basic app might set you back
										$5,000 or higher.</p>
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
									<p>Businesses generally favor the Android app since it enables them
										to connect with a vast customer base through specialized
										applications, ultimately expanding their operations. Developing
										an Android app can assist a firm in connecting with a larger
										audience, driving up sales, enhancing brand reputation, and
										cultivating a dedicated customer following.
									</p>
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
									<p>Employing the best Android developers can help you create an
										exceptional app that stands out and brings in a good profit. Let's
										look at how to find one.
										Developers need to be proficient in essential programming areas
										like syntax and basics, frameworks, multithreading and
										concurrency, functional programming, and generics.
										To speed up development, your developers should use an SDK.
										Make sure they're familiar with Android SDKs.
										They must know how to use Android Studio.
										APIs are crucial as they connect apps to external services or
										applications, so the developer needs to be well-acquainted with
										them.
										Developers must understand how to work with databases to
										handle large amounts of data and interact with a database
										outside of the phone.
										It's important for developers to grasp the logic behind your
										business decisions. This understanding will help them pinpoint
										essential features, streamline the development process, and
										deliver a mobile app that fully meets your business needs.</p>
									{{-- <ul class="ps-5">
										<li>Developers must be conversant with fundamental programming languages such as syntax and basics, frameworks, multithreading and concurrency, functional programming, and generics.</li>
										<li>To accelerate development processes, your developers will need to employ an SDK. Ascertain that they are familiar with Android SDKs.</li>
										<li>Android Studio knowledge is required.</li>
										<li>The developer must be well-versed in all APIs because they link applications to third-party services or apps.</li>
										<li>Developers must be familiar with databases to manage significant volumes of data and interact with a database located outside of the smartphone.</li>
										<li>Developers must comprehend the reasoning behind your company's actions. It will assist them in identifying key features, planning the development process, and delivering a mobile app solution that completely fulfils business needs.</li>
									</ul> --}}
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
									<p>We use an agile approach to Android app development, making it
										as easy as possible for our clients to work with us. This process
										includes:</p>
									<ul class="ps-5">
										<li>Figuring out exactly what's needed.</li>
										<li>Planning the app's development.</li>
										<li>Sketching out and designing the app.</li>
										<li>- Building the app.</li>
										<li>Thoroughly testing the app.</li>
										<li>Releasing the app to the world.</li>
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
									<p>AppsNation boasts a team brimming with tech enthusiasts who
										are always eager to expand their knowledge and skills. In their
										free time, they dive into self-study, demonstrating their high level
										of engagement and drive. This passion fuels their desire for
										constant improvement, ensuring they stay abreast of the latest
										advancements in native Android app development.</p>
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
									<p>At AppsNation, we boast a team of highly skilled Android
										developers with extensive experience creating apps across a
										variety of sectors. We've brought them together to leverage their
										expertise and build the perfect Android app for you. On top of
										that, we provide our clients with some compelling advantages,
										including:</p>
									<ul class="ps-5">
										<li>Complimentary Consultation: We offer free initial
											consultations.</li>
										<li>A Roster of Over 50 Android Specialists: We have more than
											50 expert Android developers on staf</li>
										<li>Adaptable Staffing Options: We provide flexible hiring
											models to suit your needs.</li>
										<li>Dedicated Technical Assistance: You'll receive ongoing
											technical support from our team.</li>
										<li>Complete Openness and Clarity: We maintain 100%
											transparency throughout the process.</li>
										<li>Ongoing Support Following Launch: We include a 3-month
											support period after your app's delivery.</li>
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
									<p>We're super accessible, just a tap away! Click on the chat button
										now or ask for a free quote by filling out the form with your
										specific needs for your custom Android app.</p>
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