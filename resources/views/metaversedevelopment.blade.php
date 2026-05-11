@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Top-Rated Metaverse App Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Leverage the most used mobile platform – Android – to expand your business’s boundaries with our exceptional android app development services.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<img loading="lazy" src="images/android-app-development/android-app-banner-img.webp" class="img-fluid" alt="Android App Development">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/android-app-development/android-app-development.webp" alt="Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<!-- <span>Overview</span> -->
					<h2>Scale-Up With Our<br> <span class="flup-theme">Custom Android App Development Services</span></h2>
					<p><strong>Get an android app that you deserve - appealing user interface, robust responsiveness and functionality, feature-rich, and highly scalable.</strong></p>
					<p>Did you know? Android accounts for 88% of the global smartphone market, with Google Android OS powering over 2 billion smart devices. AppsNation is making the most out of it with the top-talented android developers, more like android wizards - striving to create your innovative, unique android app.</p>
					<p>AppsNation is a data-driven android app development agency that solely relies on analytics and numbers to create an app. We offer startups, SMBS, and major enterprises the solution to thrive in the industry and make a statement with a remarkable android application. AppsNation builds android apps with visually appealing UI/UX that works flawlessly on all devices regardless of the screen size.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeIn">
				<div class="common-heading ptag">
					<h2>Our Unrivaled Android Development Services</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-3 wow fadeIn">
				<div class="common-heading ptag">
					<p>AppsNation Android App development services are the light of hope for you to reshape your business with more digital traction.</p>
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
						<h4>Android UI/UX Designing</h4>
					</div>
					<div class="services-text-div">
						<p>We design alluring and intuitive UI/UX designs to grab users' attention with a client-focused approach in our minds to preserve the integrity of the brand.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-web-img"></div>
					</div>
					<div class="service-heading">
						<h4>Android Web-Based Apps</h4>
					</div>
					<div class="services-text-div">
						<p>In case you want the app to run on multiple platforms and devices, AppsNation is your ideal choice for web-based android app development.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-porting-img"></div>
					</div>
					<div class="service-heading">
						<h4>App Porting</h4>
					</div>
					<div class="services-text-div">
						<p>Owning an app already? Want the same app on another platform or Android? We offer you adequate app porting services offering the app cross-platform abilities.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-testing-img"></div>
					</div>
					<div class="service-heading">
						<h4>App Testing</h4>
					</div>
					<div class="services-text-div">
						<p>With the most experienced Quality Assurance experts in the industry, we test your android app thoroughly with manual and automated testing to ensure a seamless user experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h4>App Consultation</h4>
					</div>
					<div class="services-text-div">
						<p>Get yourself professional guidance on the bespoke android app development from the most experienced and competent experts with in-depth analysis of your business.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-app-dev-consultation-img"></div>
					</div>
					<div class="service-heading">
						<h4>Android App Development Consultation</h4>
					</div>
					<div class="services-text-div">
						<p>Our android app development services are based primarily on research and data analysis. Therefore, we offer you result-driven strategies for a custom android application.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
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
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Hire Dedicated Developer -->
<section class="service-block">
	<div class="container">
		<div class="-cta-btn mt50 mb50">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.1s">
				<p>Hire a
					<span>Dedicated Developer</span>
				</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Hire Now
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Hire Dedicated Developer -->

<!--Start Features-->
<section class="features-section-app dark-bg2 py-5">
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
				<h2>Creative Mobile App Development Agency</h2>
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
</section>
<!--End Features-->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<p class="text-white">We assist you in using Android's distinct set of characteristics by merging it with cutting-edge technologies such as Augmented Reality, Virtual Reality, Mixed Reality, and Blockchain.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="free-mobile-app-consultation"></div>
					</div>
					<h3 class="title">Free Mobile App Consultation</h3>
					<p class="description">With AppsNation, you can consult your way to success for free.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="expert-android-developers"></div>
					</div>
					<h3 class="title">50+ Expert Android Developers</h3>
					<p class="description">Unleash your true potential with best-in-class android developers across the globe.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="flexible-hiring-models"></div>
					</div>
					<h3 class="title">Flexible Hiring Models</h3>
					<p class="description">AppsNation is accessible to everyone regardless of the business size and the industry with personalized pricing packages.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="technical-support"></div>
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Never feel overwhelmed; our technical staff is available 24/7 to resolve any issues with the application.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="transparency"></div>
					</div>
					<h3 class="title">100% Transparency</h3>
					<p class="description">With customer satisfaction our utmost priority, we keep ourselves transparent to the client to trust us with the app.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<div class="free-delivery-support"></div>
					</div>
					<h3 class="title">3-Months Free Support After Delivery</h3>
					<p class="description">We offer 3-months of free support after app launch to ensure the app's integrity.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why Choose-->

<!--Start New Project-->
<section class="service-block py-5">
	<div class="container">
		<div class="-cta-btn">
			<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s">
				<p>Let's Start a <span>New Project</span> Together</p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End New Project-->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<h2>Our <span>Android App</span> Development Process</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<p>AppsNation offers clients an easy and agile android app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Knowing your UX&UI depending on your target audience is one of the most crucial aspects of the study. Based on your target region, you must know your target audience, age, languages, design, and typefaces. This phase also entails determining which technology you'll use to create your app. Reach out to AppsNation to present your valuable Android app ideas to our competent project managers. We give full authority to the client to convey his requirements effectively while we prepare a business document with a project brief in it.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">We conduct an in-depth analysis of your business, target audience, and competitors to deliver a mindful result-driven android app development strategy for your bespoke application. Our experienced professionals in mobile development offer you a solution that maximizes the conversion rate.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">Our skilled UI/UX designers develop the most attractive designs and prototypes that are technology-rich, scalable, and reliable to get outstanding outcomes. The preliminary design is updated and completed by the customer after any necessary modifications and moderations.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">According to coding standards, we create android apps based on customer specifications and requirements with cutting-edge technology and tools. The application we develop is vital in solving complex customer problems and increasing the total value of businesses.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">To guarantee that the Android app we developed is secure and functional, our skilled Quality Assurance team rigorously tests the application inside and out to verify that it is bug-free. Our highly qualified QA staff understands varied testing issues from start to finish.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">Once the application has been thoroughly tested and authorized by the customer, it will be released on the Google Play Store in accordance with its requirements. AppsNation has a long history of submitting Android apps to the Google Play Store.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Tech-->
<div class="techonology-used- py-5">
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
</div>
<!--End Tech-->

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6">
				<div class="common-heading">
					<h2>We Partner with the <span>World's technology</span> leaders</h2>
				</div>
			</div>
		</div>
		<div class="row pt-3 wow fadeIn">
			<div class="col-12">
				<div id="tech" class="carousel slide tech" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-3 mt-3 text-center">
									<img loading="lazy" src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Technologies -->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6">
				<div class="common-heading w-tdxt">
					<h2>Ranked as #1 <span>Android App</span> Development Company</h2>
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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


		<div class="-cta-btn mt70">
			<div class="free-cta-title v-center wow fadeIn" data-wow-delay="1s">
				<p>We <span>Promise.</span> We <span>Deliver.</span> </p>
				<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Badges-->

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
            <!-- <div class="row mt-3 px-3"> -->
			@foreach($testimonials as $item)
                <!-- <div class="col-lg-6 mt-3 wow fadeIn"> -->
					<div class="tcd card h-100">
						<div class="testimonial-card card-body">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<!-- <div class="user-image bdr-radius"> <img loading="lazy" src="images/user-thumb/girl.webp" alt="girl" class="img-fluid rounded-circle" /> </div> -->
									<div class="media-body user-info v-center">
										<h5>{{$item['name']}}</h5>
										<p>{{$item['location']}}</p> <i class="fas fa-quote-right posiqut"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                <!-- </div> -->
            @endforeach
            <!-- </div> -->
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
                    <h2 class="mb0 common-heading">Frequently Asked Questions</h2>
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
@if($data['status'] && count($data['data']) > 0)
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading wow fadeIn">
					<h2 class="mb30">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-lg-4 col-sm-6 mt30 wow fadeIn">
				<div class="card h-100">
					<a href="{{ $post['guid'] }}">
						<img loading="lazy" src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
					</a>
					<div class="entry-blog-post dg-bg2">
						<span class="bypost-">
							<a href="{{ $post['guid'] }}"><i class="fas fa-tag"></i> Appsnation</a>
						</span>
						<span class="posted-on-">
							<a href="{{ $post['guid'] }}"><i class="fas fa-clock"></i> {{ date('M d, Y', strtotime($post['post_date'])) }}</a>
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
			<a href="https://blog.appsnation.co/category/android-app/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

@endsection