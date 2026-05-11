@extends('app.main')
@section('content')
	<!--Start Breadcrumb Area-->
	<section class="breadcrumb-areav2 xr-app-banner">
		@if ($errors->has('g-recaptcha-response'))
			<div class="alert alert-danger">
				<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
			</div>
		@endif
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
					<div class="bread-titlev2">
						<h1 class="banner-heading pt-3" data-wow-delay=".2s">XR Extended Reality App Development Services
						</h1>
						<p class="mt20 text-white" data-wow-delay=".4s">Enhance productivity and transform your business
							processes with the most renowned Extended Reality (XR) services provider – Dream, design,
							deliver the experience of new dimensions with <a href="{{url('/')}}"
								target="_blank">AppsNation</a>.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb-->

	<!--Start About-->
	<section id="mycounterSection" class="service py-5">
		<div class=" container">
			<div class="row">
				<div class="col-lg-5">
					<div class="image-block wow fadeIn">
						 <img loading="lazy" src="images/services/xr-app-development/xr-development-services-img.webp"
							alt="Extended Reality App Development" class="img-fluid no-shadow" width="100%" height="100%">
					</div>
				</div>
				<div class="col-lg-7 block-1 wow fadeIn my-auto">
					<div class="common-heading text-l pl25">
						<div data-text="XR" class="light-bg-text bg-text">
							<h2>Scale-Up With Our <span class="flup-theme">Extended Reality (XR) </span>Development Services
							</h2>
						</div>
						<p>What is Extended Reality (XR)? XR encompasses <a href="{{url('/vr-app-development')}}"
								target="_blank">VR</a>, <a href="{{url('/ar-app-development')}}" target="_blank">AR</a>, and
							<a href="{{url('/mr-app-development')}}" target="_blank">MR</a>, plus any emerging immersive
							technologies.</p>
						<p><a href="{{url('/')}}" target="_blank">AppsNation</a> empowers businesses with custom XR
							solutions, delivering AR, VR, and MR development strategies to boost productivity, engagement,
							connectivity, and results.</p>
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
		<div class="container">
			<div class="row mt-5">
				<div class="col-12">
					<ul class="nav nav-pills justify-content-center custom-pills">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="pill" href="#ar">AR</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#vr">VR</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#mr">MR</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="ar">
							<div class="row mt-5">
								<div class="col-lg-6 my-auto">
									<div class="common-heading ptag">
										 <img loading="lazy" src="images/services/xr-app-development/xr-ar-development-img.webp"
											alt="Extended Reality App Development" class="img-fluid" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 mt-3">
									<div class="common-heading ptag">
										<div class="light-bg-text bg-text">
											<h2><span>Augmented Reality (AR)</span> Development</h2>
										</div>
										<p>We are a full-service <a href="{{url('/ar-app-development')}}"
												target="_blank">augmented reality</a> <a
												href="{{url('/game-app-development')}}" target="_blank">game development
												company</a> making your AR gaming dreams a reality. Our experts build AR
											games across various themes and concepts.</p>
										<p><a href="{{url('/')}}" target="_blank">AppsNation</a> transforms your business
											with <a href="{{url('/ar-app-development')}}" target="_blank">AR development
												services</a>, enhancing human perceptions and delivering unmatched
											engagement.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="vr">
							<div class="row mt-5">
								<div class="col-lg-6 my-auto">
									<div class="common-heading ptag">
										<div class="light-bg-text bg-text">
											<h2><span>Virtual Reality (VR)</span> Development</h2>
										</div>
										<p>Virtual Reality (VR) delivers immersive experiences through computer-generated 3D
											worlds, allowing users to interact via VR headsets.</p>
										<p>We are an expert VR development company, turning innovative business ideas into
											reality and maximizing customer engagement with cutting-edge technology.</p>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="common-heading ptag">
										 <img loading="lazy" src="images/services/xr-app-development/xr-vr-development-img.webp"
											alt="Extended Reality App Development" class="img-fluid" width="100%"
											height="100%">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mr">
							<div class="row mt-5">
								<div class="col-lg-6">
									<div class="common-heading ptag">
										 <img loading="lazy" src="images/services/xr-app-development/xr-mr-development-img.webp"
											alt="Extended Reality App Development" class="img-fluid" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 my-auto">
									<div class="common-heading ptag">
										<div class="light-bg-text bg-text">
											<h2><span>Mixed Reality (MR)</span> Development</h2>
										</div>
										<p>Mixed Reality (MR) blends the real and virtual worlds, letting users see virtual
											objects interact naturally with real environments via holographic lenses.</p>
										<p>We leverage MR to empower businesses with innovative marketing, collaborations,
											market leadership, and access to the growing holographic apps industry.</p>
									</div>
								</div>
							</div>
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

 

	<!--Start Why Choose-->
	<section class="why-choose bg-gradient3 py-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="common-heading ptag wow fadeIn">
						<div data-text="Choose Us" class="dark-bg-text bg-text">
							<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
						</div>
						<p class="text-white">You receive a state-of-the-art solution with a cutting-edge appeal that
							engages more people online when you work with professional web developers and digital artists.
							Under packaged web app development services, take advantage of powerful technologies and a solid
							architecture to create a web solution that meets your needs.</p>
					</div>
				</div>
			</div>
			<div class="row upset justify-content-center mt30">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/services/xr-app-development/experience.svg" alt="Experience" class="img-fluid"
								width="100%" height="100%">
						</div>
						<h3 class="title">Experience</h3>
						<p class="description">When you hire us, you receive access to our extensive experience developing
							sophisticated custom apps.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/services/xr-app-development/focus-on-expertise.svg" alt="Focus on Expertise"
								class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">Focus on Expertise</h3>
						<p class="description">We cultivate a mobile expert culture that maintains a great commitment to
							stay at the forefront of our business through specialization.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/services/xr-app-development/cost-reduction.svg" alt="Cost Reduction"
								class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">Cost Reduction</h3>
						<p class="description">We offer a cost-effective way to develop excellent mobile apps thanks to our
							time-tested development competence and large code repository.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/services/xr-app-development/lower-the-risk.svg" alt="Lower The Risk"
								class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">Lower The Risk</h3>
						<p class="description">We eliminate risk and give quick time-to-value to step-out into the
							continually shifting market by delivering quickly and efficiently.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/services/xr-app-development/reliable-and-flexile.svg"
								alt="Reliable and Flexile" class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">Reliable and Flexile</h3>
						<p class="description">We avoid difficulties and are adaptive to client needs by using the most
							up-to-date practises and technological skills.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/services/xr-app-development/one-partner-for-everyone.svg"
								alt="One Partner For Everyone" class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">One Partner For Everyone</h3>
						<p class="description">Avoid costly resource onboarding and inefficiencies caused by many vendors.
							Our team is ready to help you with end-to-end business solutions.</p>
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
							<h2>Our <span>XR App</span> Development Process</h2>
						</div>
						<p>AppsNation offers clients an easy and agile android extended reality development process with a
							result-driven ideology.</p>
					</div>
				</div>
			</div>
			<div class="row upset justify-content-center mt30">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">01</p>
						<h3 class="title">Requirement Analysis</h3>
						<p class="description">Understanding UX and UI for your app and audience is essential. Consider
							region, demographics, language, design, and typography. Choose the right technology stack.
							Connect with AppsNation to share Android ideas and create a clear project brief today.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">02</p>
						<h3 class="title">App Development Strategies</h3>
						<p class="description">We analyze your business, audience, and competitors to craft a result-driven
							Android app strategy. Our experienced mobile developers provide tailored solutions that boost
							performance and maximize conversion rates for your custom application.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">03</p>
						<h3 class="title">Wireframing And Designing</h3>
						<p class="description">Our skilled UI/UX designers create attractive, scalable, and reliable designs
							and prototypes for outstanding results. Initial designs are refined based on client feedback,
							ensuring all necessary changes are made before final approval and completion.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">04</p>
						<h3 class="title">Development Phase</h3>
						<p class="description">We develop Android apps following coding standards, tailored to client
							requirements using advanced tools and technologies. Our applications effectively solve complex
							problems and enhance overall business value, delivering reliable and impactful solutions for
							long-term growth.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">05</p>
						<h3 class="title">App Testing</h3>
						<p class="description">Our skilled QA team rigorously tests Android apps to ensure they are secure,
							functional, and bug-free. Our experts handle all testing challenges from start to finish,
							guaranteeing reliable performance and a flawless user experience for every application.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">06</p>
						<h3 class="title">App Deployment</h3>
						<p class="description">After thorough testing and client approval, the app is released on the Google
							Play Store following all requirements. AppsNation has extensive experience in submitting Android
							apps, ensuring smooth deployment and compliance with store guidelines for every project.</p>
					</div>
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
							<h2 class="text-white">Ranked as #1 <span>Android App</span> Development Company</h2>
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
														<!-- <p class="text-center pt-2">{{$item['content']}}</p> -->
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
													<!-- <p class="text-center pt-2">{{$item['content']}}</p> -->
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
														<!-- <p class="text-center pt-2">{{$item['content']}}</p> -->
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
													<!-- <p class="text-center pt-2">{{$item['content']}}</p> -->
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
									Will we sign an NDA to keep my Android app idea confidential?
								</button>
							</h2>
							<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>A Non-Disclosure Agreement (NDA) is a legal document that we employ when working
											on various projects to ensure that your ideas are not duplicated or leaked to
											rivals.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
									How do you allocate the resources for my app development in Android?
								</button>
							</h2>
							<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>For us, resource allocation is both an art and a science. Therefore, we
											thoroughly research your company and its competitors, including the target
											audience and their psychology, to provide an app that efficiently performs its
											objective.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
									Which tools and technologies do you use?
								</button>
							</h2>
							<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AppsNation is equipped with developers that use the high-end latest technologies
											and tools to foster your ideal android application.</p>
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
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
									Will you assist me to upload my Android app on the Play Store?
								</button>
							</h2>
							<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Submitting your android app on Google Play Store is a vital part of our inclusive
											android app development services. AppsNation has years of experience launching
											android apps on the Play Store, sufficiently following the guidelines.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
									Will I be getting any support after project completion?
								</button>
							</h2>
							<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Our top-notch mobile app development services include a 3-months free support and
											maintenance program to guarantee a successful app journey by minimizing the
											glitches based on user feedback.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
									How much does it cost to make an Android App?
								</button>
							</h2>
							<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>The pricing is influenced by various factors, including the complexity of the
											android app development. Typically, firms estimate the number of APIs and
											screens in an application and price accordingly. On the other hand, a standard
											app would cost you $5,000 or more.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
									Why your company might need Android application services?
								</button>
							</h2>
							<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Most businesses like the Android app because it allows them to reach many
											customers by expanding dedicated applications and growing their business.
											Android app development may help a company reach out to more people, increase
											revenue, boost brand image, and build a loyal client base.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
									What should I pay attention to while looking for Android application developers?
								</button>
							</h2>
							<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Hiring top Android developers will assist you in developing a great app that will
											stand out from the crowd and earn a sizable profit. Here's how to find one for
											yourself.</p>
										<ul class="ps-5">
											<li>Developers must be conversant with fundamental programming languages such as
												syntax and basics, frameworks, multithreading and concurrency, functional
												programming, and generics.</li>
											<li>To accelerate development processes, your developers will need to employ an
												SDK. Ascertain that they are familiar with Android SDKs.</li>
											<li>Android Studio knowledge is required.</li>
											<li>The developer must be well-versed in all APIs because they link applications
												to third-party services or apps.</li>
											<li>Developers must be familiar with databases to manage significant volumes of
												data and interact with a database located outside of the smartphone.</li>
											<li>Developers must comprehend the reasoning behind your company's actions. It
												will assist them in identifying key features, planning the development
												process, and delivering a mobile app solution that completely fulfils
												business needs.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
									Will you assist me to upload my Android app on the Play Store?
								</button>
							</h2>
							<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We approach an agile android app development process to ease our clients for the
											smoothest interaction with us that includes;</p>
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
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
									How AppsNation meet the current trends in native Android app development?
								</button>
							</h2>
							<div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AppsNation is equipped with a team of extremely tech-savvy individuals ready to
											learn and grow. As a result, self-study is what they do in their spare time.
											Furthermore, they are very engaged and driven in the subject; as a result, they
											crave evolution and keep up with the current developments in native Android app
											development.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
									Will you assist me to upload my Android app on the Play Store?
								</button>
							</h2>
							<div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AppsNation is equipped with top-rated android developers having years of
											experience in developing android developers for various industries. We have them
											on board to make the most out of them for your ideal android app. Besides, we
											offer our clients undeniable benefits such as;</p>
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
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
									How can I hire Android app developers from AppsNation?
								</button>
							</h2>
							<div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We are easy to reach, just a click away. Tap on chat now or request a free quote
											by filling up the form mentioning your requirements for your bespoke Android
											app. </p>
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
									 <img loading="lazy" src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}"
										alt="{{$post['post_title']}}" class="img-fluid">
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