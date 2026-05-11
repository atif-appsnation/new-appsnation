@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 mr-app-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">MR Mixed Reality Development Services</h1>
					<p class="mt20 text-white" data-wow-delay=".4s"><a href="{{url('/vr-app-development')}}" target="_blank">Virtual Reality (VR)</a> and <a href="{{url('/ar-app-development')}}" target="_blank">Augmented Reality (AR)</a> are the future of interactive marketing, and Mixed Reality (MR) helps users interact with the physical, virtual, and augmented worlds. Our MR development company focuses on creating new experiences for consumers, with a primary focus on your business needs.</p>
				</div>
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
					<img loading="lazy" src="images/services/mr-app-development/ar-game-changer.webp" alt="Android App Development" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="MR" class="light-bg-text bg-text">
						<h2>Scale-Up With Our <span class="flup-theme">Mixed Reality (MR) </span>Development Services</h2>
					</div>
					<p>Although the concept of Mixed Reality (MR) is both exciting and promising, many businesses lack the expertise to develop this kind of technology. Fortunately, we not only have the experience, but we also understand the challenges you face and can help bring your MR project to life.</p>
					<p>At AppsNation, we are passionate about MR to help you take advantage of it by creating experiences that blend real people with computer-generated environments. We design, engineer, and deliver for companies that need a fully immersive experience that brings products to life.</p>
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
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our<span> Mixed Reality (MR)</span> Development Services</h2>
					</div>
					<p>We produce high-quality Mixed Reality (MR) experiences with our <a href="{{url('/3d-art')}}" target="_blank">3D</a> and <a href="{{url('/2d-art')}}" target="_blank">2D</a> visualizers. With our capabilities, you can create a diverse range of Mixed Reality experiences, a powerful blend of real-life objects, realistic environments, and computer-generated animation.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/mixed-reality-apps-development.svg" alt="Mixed Reality Apps Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Mixed Reality Apps Development</h3>
					</div>
					<div class="services-text-div">
						<p> Leverage our expertise to develop high-end holographic apps, VR, and AR solutions that boost productivity and sales</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/mixed-reality-games-development.svg" alt="Mixed Reality Games Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Mixed Reality Games Development</h3>
					</div>
					<div class="services-text-div">
						<p>Tailored mixed reality games to immerse consumers with exceptional storytelling, enhancing brand interaction.
</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/custom-mr-development.svg" alt="Custom MR Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Custom MR Development</h3>
					</div>
					<div class="services-text-div">
						<p> Transform your business with custom MR solutions, from large installations to mobile apps, saving time and money.
</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/mr-support-and-maintenance.svg" alt="MR Support & Maintenance" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>MR Support & Maintenance</h3>
					</div>
					<div class="services-text-div">
						<p> Ensure seamless user experiences with ongoing support and maintenance throughout your Mixed Reality product's journey.
</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/mixed-reality-experience-design.svg" alt="Mixed Reality Experience Design" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Mixed Reality Experience Design</h3>
					</div>
					<div class="services-text-div">
						<p>Turning your MR ideas into reality with expert design, including 3D prototyping, UI/UX, and development expertise.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/training-solutions.svg" alt="Training Solutions" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Training Solutions</h3>
					</div>
					<div class="services-text-div">
						<p>Develop immersive, interactive training solutions that enhance skills and understanding through modern MR learning experiences.
</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/remote-assistants.svg" alt="Remote Assistants" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Remote Assistants</h3>
					</div>
					<div class="services-text-div">
						<p> Provide real-time visibility and remote support with Mixed Reality to assist employees, no matter the project size.
</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/product-configurators.svg" alt="Product Configurators" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Product Configurators</h3>
					</div>
					<div class="services-text-div">
						<p> Create customized, interactive digital prototypes with our MR product configurators, offering clients a visual experience.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mr-app-development/digital-twins.svg" alt="Digital Twins" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Digital Twins</h3>
					</div>
					<div class="services-text-div">
						<p> Specializing in developing Digital Twins for manufacturing and operations to enable efficient maintenance and monitoring.</p>
					</div>
				</div>
			</div>
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
				<h2>Creative MR App Development Agency</h2>
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
						<img loading="lazy" src="images/services/xr-app-development/experience.svg" alt="Experience" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Experience</h3>
					<p class="description">Gain access to our vast experience in developing sophisticated custom apps tailored to your business needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/xr-app-development/focus-on-expertise.svg" alt="Focus on Expertise" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Focus on Expertise</h3>
					<p class="description">We nurture a mobile expert culture, ensuring we stay ahead of the curve with specialization and innovation.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/xr-app-development/cost-reduction.svg" alt="Cost Reduction" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Cost Reduction</h3>
					<p class="description">We offer cost-effective mobile app development, leveraging our extensive experience and a vast code repository.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/xr-app-development/lower-the-risk.svg" alt="Lower The Risk" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Lower The Risk</h3>
					<p class="description">Minimize risk and accelerate time-to-market with our fast, efficient development process tailored for a shifting market</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/xr-app-development/reliable-and-flexile.svg" alt="Reliable and Flexile" class="img-fluid" width="100%" height="100%">
					</div>
					<h3 class="title">Reliable and Flexile</h3>
					<p class="description">We stay adaptable to client needs, using the latest practices and tech skills to avoid issues and deliver results.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img loading="lazy" src="images/services/xr-app-development/one-partner-for-everyone.svg" alt="One Partner For Everyone" class="img-fluid" width="100%" height="100%">
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
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>MR App</span> Development Process</h2>
					</div>
					<p>AppsNation offers clients an easy and agile mixed reality app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Analyze your target audience, design, and technology needs to effectively create an app that meets your goals.
</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description"> In-depth analysis of your business and competitors to create a result-driven Android app development strategy.
</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description"> Our skilled designers create attractive, scalable, and reliable UI/UX designs, ensuring an outstanding user experience.
</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description"> We build Android apps using cutting-edge technology, adhering to coding standards to solve complex customer challenges.
</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">Our expert QA team rigorously tests your app to ensure security, functionality, and bug-free performance before deployment.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description"> After thorough testing and customer approval, we deploy your app to the Google Play Store with proven experience.
</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

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
								What is MR?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Mixed reality, or MR, is a technology that blends natural and virtual realities. It is often described as new technologies that combine physical and digital elements to create immersive experiences. For example, augmented reality (AR) integrates computer graphics into the user's view of the real world or virtual reality (VR), immersing people in an entirely digital environment.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								What is difference between AR, MR and VR?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>If you are new to augmented and mixed reality, you have probably heard these three terms thrown around a lot. But what do they mean?</p>
									<p class="pt-2">Let us breakdown each of these terms;</p>
									<ul class="ps-5">
										<li><strong>Augmented Reality (AR)</strong> is when virtual objects are overlaid on top of real-world objects. You can see the real world with virtual things, like Pokémon Go! or Snapchat filters.</li>
										<li><strong>Mixed Reality (MR)</strong> is a more advanced version of AR. Whereas AR adds objects to your field of vision, MR overlays them directly onto your body to look like they are there.</li>
										<li><strong>Virtual Reality (VR)</strong> is an entirely immersive experience where you're completely cut off from the real world around you and transported into another world.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to develop an MR application?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>There is no set price for developing a mixed reality application. The cost depends on the size and type of the project, the project's scope, and how much time you have before the launch date. In addition, the price can be anywhere from $1000 to $1 million.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								How long does it take to make an MR project?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>It depends on the scope of your project, but generally, it can take anywhere from 2-6 months.</p>
									<p class="pt-2">It is essential to keep in mind that this is just an estimate, and your timeline will depend on many factors: goal, type, size, complexity, of the project, and many other elements.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								What kind of testing will you do?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We use many different types of testing for each project that helps us get closer to ensuring the product is ready for market. Our testing methods are as below:</p>
									<ul class="ps-5">
										<li>Usability Testing</li>
										<li>Regression Testing</li>
										<li>Performance Testing</li>
										<li>Compatibility Testing</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Will we sign an NDA to keep my MR software/application idea confidential?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>A non-disclosure agreement (NDA) is a contract where two parties agree not to disclose certain information. Yes, we will sign an NDA with you. Without such an agreement, there could be enforceable technical issues. We cannot have those kinds of problems in this project because the exact idea and steps to accomplish your goals can be crucial for authentication.</p>
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