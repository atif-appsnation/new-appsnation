@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 web-app-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Web App Development Company </h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Expand your customer base with less expense and cross-platform apps that offer users an actual experience of a native application.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<img loading="lazy" src="images/services/web-app-development/web-app-banner-img.webp" class="img-fluid" alt="Web App Development" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="service py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/services/web-app-development/web-app-development.webp" alt="Web App Development" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Web App" class="light-bg-text bg-text">
						<h2>Why You Must Have A <span class="flup-theme">Web App</span></h2>
					</div>
					<p><strong>Trying to find the best web app development company? </strong></p>
					<p><a href="{{url('/')}}" target="_blank">AppsNation</a> is a custom web application development company that provides unique web applications for a variety of businesses. </p>
					<p>We provide technological consultancy, customized web apps, <a href="{{url('/e-commerce-app-development')}}" target="_blank">eCommerce solutions</a>, CMS web apps, and web portal creation as well as end-to-end custom web development and <a href="{{url('/mobile-app-development')}}" target="_blank">app development services</a>.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section-app py-3">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our Unrivaled <span>Web Application</span> Development Services</h2>
					</div>
					<p class="mb30">Our custom web application developers have extensive expertise in creating <a href="{{url('/cross-platform-app-development')}}" target="_blank">cross-platform apps</a> utilizing cutting-edge technology.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-app-development/custom-web-app-development.svg" alt="Custom Web App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Custom Web App Development</h4>
					</div>
					<div class="services-text-div">
						<p>: Tailored web applications for businesses in healthcare, finance, retail, and manufacturing to improve operations.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-app-development/cross-platform-apps.svg" alt="Cross-platform Apps" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Cross-platform Apps</h4>
					</div>
					<div class="services-text-div">
						<p>We build cross-platform apps for Android, iOS, and Windows to ensure a seamless user experience across devices.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-app-development/e-commerce-solutions.svg" alt="E-commerce Solutions" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>E-commerce Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>Full eCommerce solutions with secure payment gateway integration to streamline shopping, cart, and product operations.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-app-development/web-portal-development.svg" alt="Web Portal Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Web Portal Development</h4>
					</div>
					<div class="services-text-div">
						<p>We create B2B, B2C, and other web portals for easy communication and business growth with clients and partners.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-app-development/custom-cms-web-development.svg" alt="Custom CMS Web Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Custom CMS Web Development</h4>
					</div>
					<div class="services-text-div">
						<p> Unique CMS development tailored to your business needs, ensuring complete control and seamless content management.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/web-app-development/technology-consulting.svg" alt="Technology Consulting" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Technology Consulting</h4>
					</div>
					<div class="services-text-div">
						<p>Offering expert technology consulting to help you navigate OS, server, and platform decisions with tailored advice.</p>
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
<section class="my-1">
	<div class="container">

		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-9">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-8 my-auto">
							<p class="text-center text-lg-start">Let's Start a <span>New Project</span> Together</span> </p>
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

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">You receive a state-of-the-art solution with a cutting-edge appeal that engages more people online when you work with professional web developers and digital artists. Under packaged web app development services, take advantage of powerful technologies and a solid architecture to create a web solution that meets your needs.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/web-app-development/experience.svg" alt="Experience" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Experience</h3>
					<p class="description">Access our extensive experience in developing sophisticated custom apps to meet your business needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/web-app-development/focus-on-expertise.svg" alt="Focus on Expertise" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Focus on Expertise</h3>
					<p class="description"> We foster a mobile expert culture, committed to staying ahead through specialization and innovation.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/web-app-development/cost-reduction.svg" alt="Cost Reduction" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Cost Reduction</h3>
					<p class="description">Develop high-quality mobile apps cost-effectively with our proven expertise and vast code repository.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/web-app-development/lower-the-risk.svg" alt="Lower The Risk" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Lower The Risk</h3>
					<p class="description">We reduce risk and ensure quick time-to-value by delivering fast and efficient solutions in a changing market.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/web-app-development/reliable-and-flexile.svg" alt="Reliable and Flexile" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Reliable and Flexile</h3>
					<p class="description">Using the latest practices and tech skills, we stay adaptable to client needs and avoid unnecessary challenges.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/web-app-development/one-partner-for-everyone.svg" alt="One Partner For Everyone" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">One Partner For Everyone</h3>
					<p class="description">Streamline your process with one partner offering end-to-end solutions, avoiding inefficiencies from multiple vendors.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose-->

<!--Start Process-->
<section class="process-block dark-bg2 my-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>Web App</span> Development Process</h2>
					</div>
					<p>AppsNation offers clients an easy and agile web app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Research and development</h3>
						<p class="description"> A step-by-step procedure for assessing, validating, and developing a strategy to bring your idea to life.
						</p>
						<ul class="order-list pt-2">
							<strong>
								<li>Assessing your requirements</li>
							</strong>
							<strong>
								<li>Validation of the concept</li>
							</strong>
							<strong>
								<li>Developing a strategy for execution</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">Front-end Development</h3>
						<p class="description">Crafting the user journey, setting up front-end architecture, and designing an intuitive UI/UX for seamless interaction.</p>
						<ul class="order-list pt-2">
							<strong>
								<li>The user's journey is being charted.</li>
							</strong>
							<strong>
								<li>Front-end architecture setup.</li>
							</strong>
							<strong>
								<li>UI/UX design</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">Back-end Development</h3>
						<p class="description">Executing back-end development by integrating third-party plugins and ensuring smooth configuration and implementation.
						</p>
						<ul class="order-list pt-2">
							<strong>
								<li>Integration of third-party plugins in the backend setup and configuration</li>
							</strong>
							<strong>
								<li>Effortless implementation</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">Manual and automated QA</h3>
						<p class="description"> Ensuring smooth app functionality across browsers and screens with comprehensive manual and automated QA testing.
						</p>
						<ul class="order-list pt-2">
							<strong>
								<li>Testing of Functionality</li>
							</strong>
							<strong>
								<li>Evaluation of the code</li>
							</strong>
							<strong>
								<li>Error correction</li>
							</strong>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">Web App Development</h3>
						<p class="description">Building proof-of-concept web apps to evaluate your idea's long-term potential and viability for execution.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">Maintenance and Support</h3>
						<p class="description"> Providing continuous assessment and support to ensure your web application operates efficiently with the right web stack.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Tech-->
<div class="techonology-used py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Technologies" class="light-bg-text bg-text mb-5">
						<h2>Technology Stack</h2>
					</div>
					<p>Apps Nation Technology Stack is divided into three main categories. Let’s take a look:</p>
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
								How much do you charge for custom web app development services?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Web development, design, QA, and product deployment to your servers are all included in the cost estimate. You can reach out to us to learn more about the cost of developing a custom web application. development of web applications.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Will you sign an NDA with me?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes. As a leading web app development firm, we place a high priority on protecting your intellectual property, which is included in our services.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Do I get to be a part of the web application development process?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes, you certainly can. Our web application development company, in fact, encourages it to the benefit of our customers. On our server, we create web apps and supply you with authorization codes and credentials. As a result, you'll be able to log in and see the progress of your website's continuing development.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								What if I need some changes in the web-app after the development process is complete?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Our professional team members respond to your questions and provide assistance based on the modifications you want to make to your app and the services you choose.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								I Have Only a Partial App Idea. Can You Help Me with That?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We've assisted a number of people who had no idea how to establish a business. It's much better to collaborate with someone who has only a sliver of an idea. This way, we can work together to fill in the gaps in your idea and create an app.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Do I have to pay 3rd party cost?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>When it comes to web app development, don't be afraid to ask for a precise estimate. This tiny action could help you save a lot of time, money, and worries.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Which Industries Have You Served to Date?
							</button>
						</h2>
						<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We served the happy clients in the following industries:</p>
									<ul class="ps-5">
										<li>Food</li>
										<li>E-Commerce</li>
										<li>Marketplace</li>
										<li>Education</li>
										<li>Healtcare</li>
										<li>Transport & Logistic</li>
										<li>Travel & Tourism</li>
										<li>Banking & Finance</li>
										<li>Real Estate</li>
										<li>On-Demand Delivery</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								How Will I Be Paying You for the Services?
							</button>
						</h2>
						<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We accept payments from our clients in these ways: PayPal, Stripe, and direct bank transfer. However, depending on the client's preferences, we can be flexible with different payment methods.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								What Is the Payment Procedure?
							</button>
						</h2>
						<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We follow milestones for project completion, thus the client must pay 30% upfront when the project begins, 40% when the first milestone is completed, and the final 30% at the time of delivery.</p>
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