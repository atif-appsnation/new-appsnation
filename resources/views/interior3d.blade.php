@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 interior-3d-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Best 3D Interior Rendering Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">3D interior renderings have become an essential part of modern project visualization. These services are primarily used to bring design concepts to life, enhancing client collaboration and helping to understand their preferences.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start Showcase-->
<section class="threed-interior-showcase py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn" wow fadeIn>
			<div class="col-12">
				<div class="common-heading">
					<div data-text="3D Exterior" class="light-bg-text bg-text text-center">
						<h2 class="text-center">Scale-Up With Our <span class="flup-theme">3D Interior Rendering</span> Services</h2>
					</div>
					<p class="pt-2 text-center">In today’s competitive market, 3D interior renderings are a key tool for visualizing project concepts. They facilitate customer collaboration and provide valuable insights into design preferences. Through CGI, 3D interior visualization generates volumetric images of any object, sparking creativity and enabling experimentation. This approach allows designers to explore ideas in ways that traditional methods cannot.
					</p>
				</div>
			</div>
		</div>

		<div class="row pt-5 wow fadeIn">
			<div class="col-md-3">
				<img loading="lazy" src="images/services/3d interior-rendering-services/interior-building-1.webp" width="100%" height="100%">
			</div>
			<div class="col-md-3 mt-2 mt-md-0">
				<img loading="lazy" src="images/services/3d interior-rendering-services/interior-building-2.webp" width="100%" height="100%">
			</div>
			<div class="col-md-6 mt-2 mt-md-0">
				<img loading="lazy" src="images/services/3d interior-rendering-services/interior-building-3.webp" width="100%" height="100%">
			</div>
			<div class="col-md-6 mt-2">
				<img loading="lazy" src="images/services/3d interior-rendering-services/interior-building-4.webp" width="100%" height="100%">
			</div>
			<div class="col-md-3 mt-2">
				<img loading="lazy" src="images/services/3d interior-rendering-services/interior-building-5.webp" width="100%" height="100%">
			</div>
			<div class="col-md-3 mt-2">
				<img loading="lazy" src="images/services/3d interior-rendering-services/interior-building-6.webp">
			</div>
		</div>

		<div class="row mt-5 justify-content-center">
			<div class="col-lg-8 text-center">
				<a href="https://appsnation.com/uploads/pdf/Real-Estate-Profile-AppsNation.pdf" target="_blank" class="btn-main button-arounder lnk wow fadeIn">Download Real Estate Profile <i class="fas fa-chevron-right fa-ani" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section>
<!--End Showcase-->

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

<!--Start Visualization-->
<section class="threed-interior-visualizations common-heading py-5">
	<div class="container">
		<div class="row py-3">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 v-center wow fadeIn" wow fadeIn>
				<img loading="lazy" src="images/services/3d interior-rendering-services/threed-interior-visualization-1.webp" alt="3D Interior Visualizations" class="img-fluid d-block mx-auto" width="auto" height="auto">
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeIn v-center my-auto pt-3 pt-sm-3 pt-md-3 pt-lg-0">
				<h3>Advantages of <span>Interior Visualization</span></h3>
				<ul class="advantages-list pt-3">
					<li><i class="fa-solid fa-circle"></i> Interior visualization offers numerous benefits. Quickly redesign a space and see how various finishes and furnishings will blend. Rearrange thousands of furniture pieces to match your vision. Experiment with different lighting scenarios to create the perfect ambiance. Adapt any design style to the space, and make easy alterations like reupholstering a couch or repainting walls—without physically modifying the room.
					</li>

				</ul>
			</div>
		</div>

		<div class="row py-3">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 wow fadeIn v-center my-auto" wow fadeIn>
				<h3>How to Start Your <span>Interior 3D Visualization</span> Project</h3>
				<ul class="advantages-list pt-3">
					<li><i class="fa-solid fa-circle"></i>Define project scope and objectives.
					</li>
					<li><i class="fa-solid fa-circle"></i>Gather project information.
					</li>
					<li><i class="fa-solid fa-circle"></i>Choose the right 3D visualization tools.
					</li>
					<li><i class="fa-solid fa-circle"></i>Develop a detailed 3D model.
					</li>
					<li><i class="fa-solid fa-circle"></i>Add furniture and fixtures.
					</li>
					<li><i class="fa-solid fa-circle"></i>Apply textures and lighting.
					</li>
					<li><i class="fa-solid fa-circle"></i>Review final renders or animations.
					</li>
					<!--<li><i class="fa-solid fa-circle"></i>Finalize and deliver the project.</li>-->
				</ul>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-6 v-center wow fadeIn pt-3 pt-sm-3 pt-md-3 pt-lg-0">
				<img loading="lazy" src="images/services/3d interior-rendering-services/threed-interior-visualization-2.webp" alt="3D Interior Visualizations" class="img-fluid d-block mx-auto" width="auto" height="auto">
			</div>
		</div>
	</div>
</section>
<!--End Visualization-->

<!--Start About-->
<!-- <section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/android-app-development/android-app-development.webp" alt="Android App Development" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					
					<h2>Scale-Up With Our<br> <span class="flup-theme">Custom Android App Development Services</span></h2>
					<p><strong>Get an android app that you deserve - appealing user interface, robust responsiveness and functionality, feature-rich, and highly scalable.</strong></p>
					<p>Did you know? Android accounts for 88% of the global smartphone market, with Google Android OS powering over 2 billion smart devices. AppsNation is making the most out of it with the top-talented android developers, more like android wizards - striving to create your innovative, unique android app.</p>
					<p>AppsNation is a data-driven android app development agency that solely relies on analytics and numbers to create an app. We offer startups, SMBS, and major enterprises the solution to thrive in the industry and make a statement with a remarkable android application. AppsNation builds android apps with visually appealing UI/UX that works flawlessly on all devices regardless of the screen size.</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End About-->

<!--Start Service-->
<!-- <section class="service-section-app py-5 dark-bg2">
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
</section> -->
<!--End Service-->

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
</section> -->
<!--End Features-->

<!--Start Service-->
<section class="threed-interior-rendering service-section-app py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 wow fadeIn" wow fadeIn>
				<div class="common-heading">
					<div data-text="Our Services" class="light-bg-text bg-text text-center">
						<h2 class="text-center">Our <span>3D Interior</span> Rendering Services</h2>
					</div>
					<p class="pt- text-center">We specialize in creating traditional 3D models of various systems. Whether it’s a holiday home, a multi-storey building or a large block of flats, our professional team uses advanced design techniques and unique visual strategies to create realistic interiors.
					</p>
				</div>
			</div>
			<!-- <div class="col-lg-12 pt-5 wow fadeIn">
				<h3 class="text-center pb-5">Interactive 360 Interior</h3>
				<iframe width="100%" height="515" src="https://www.youtube.com/embed/96DZGFM3XZ0?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
			</div> -->
		</div>
	</div>
</section>
<!--End Service-->



<!--Start Why Choose -->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">AppsNation has revolutionized the IoT sector, providing exceptional digital products, platforms, and IoT-based services. Our IoT ecosystem connects people, devices, and processes to optimize business operations. By converting data into actionable insights, our integrated systems enable automation and real-time decision-making.
					</p>
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

<!--Start New Project-->
<!-- <section class="service-block py-5">
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
</section> -->
<!--End New Project-->

<!--Start Process-->
<!-- <section class="process-block bg-gradient3 py-5">
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
</section> -->
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
</section>
<!--End Testinomial-->

@endsection