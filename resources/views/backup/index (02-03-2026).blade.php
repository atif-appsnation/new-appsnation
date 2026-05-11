@extends('app.main')
@section('content')
@if(session('success'))
<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header border-0">
				<!-- <h5 class="modal-title w-100 text-center" id="successModalLabel">Success</h5> -->
			</div>
			<div class="modal-body text-center">
				<div class="alert alert-success mb-0" style="font-size: 1.1rem;">
					{{ session('success') }}
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var modal = new bootstrap.Modal(document.getElementById('successModal'));
		modal.show();
		setTimeout(function() {
			modal.hide();
		}, 3500); // 3.5 seconds
	});
</script>
@endif
<section class="hero-slider hero-style" id="hero-slider">
	<video playsinline autoplay muted loop width="100%" height="100%">
		<source src="video/banner.mp4" type="video/mp4">
	</video>
	<div class="hero-main-rp container main-ban">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-12 col-lg-8 v-center" data-rellax-speed="-3">
				<div class="hero-heading-sec2 niwax" data-rellax-speed="3">
					<h1 class="wow fadeIn cd-headline clip">Top Rated
						<span class="cd-words-wrapper">
							<b class="is-visible">Mobile App</b>
							<b>Android App</b>
							<b>iOS App</b>
							<b>Game App</b>
							<b>Cross Platform App</b>
							<b>Web App</b>
							<b>E-Commerce App</b>
							<b>XR App</b>
							<b>MR App</b>
							<b>VR App</b>
							<b>AR App</b>
						</span>
						Development Company
					</h1>
					<p class="wow fadeIn">Our App Developers Are Glad To State That They Are Always Accessible To Meet And Discuss Project Requirements And Progress.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>

					<div class="row hero-bages-slides-div">
						<div class="col-md-4">
							<p class="hero-bage-p">Recognized for Excellence</p>
						</div>

						<div class="col-md-8">
							<div class="hero-bages-slider owl-carousel owl-theme wow fadeIn">
								<div class="h-img">
									<img src="images/reviews/wordpress-awards.png" alt="Awards">
								</div>
								<div class="h-img">
									<img src="images/reviews/mobile-app-awards.png" alt="Awards">
								</div>
								<div class="h-img">
									<img src="images/reviews/react-js-awards.png" alt="Awards">
								</div>
								<div class="h-img">
									<img src="images/reviews/mobile-app-dev-winner.png" alt="Awards">
								</div>
								<div class="h-img">
									<img src="images/reviews/custom-software-dev-winner.png" alt="Awards">
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>



		</div>

	</div>
</section>




<!-- Start Key Highlights -->
		<section id="mycounterSection" class="key-highlights my-5">
			<div class="container ">
				<!-- <div class="row justify-content-center">
					<div class="col-12 fadeIn">
						<div class="common-heading">
							<div data-text="Achievements" class="light-bg-text bg-text text-center">
								<h2 class="key-highlight text-center mt-5">Our Achievements</h2>
							</div>
							<h3 class="key-numbers text-center mt-5">Our Work In Numbers</h3>
						</div>
					</div>
					<div class="col-lg-8 wow fadeIn mt-3">
						<p class="key-desc text-center">With the help of <strong>50 plus</strong> highly trained professional team we're able to achieve these amazing numbers which is enough proof of our success. We do not speak about our success, our work speaks about our success.</p>
					</div>
				</div> -->
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-4">
						<div class="common-heading ptag fadeIn py-5">
							<div data-text="Goals" class="light-bg-text bg-text">
								<h2>Our <span>Progress </span> </h2>
							</div>
							<p>AppsNation delivers real results and real impact by transforming ideas into scalable digital products, driving growth, engagement, and measurable success for startups.</p>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-8">


						<div class="row justify-content-center   wow fadeIn achievements-count m-3">
							<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
								<h2 id="count1" class="numbers-count">0+</h2>
								<p class="numbers-about">Years On The market</p>
							</div>
							<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
								<h2 id="count2" class="numbers-count">0+</h2>
								<p class="numbers-about">People On Board</p>
							</div>
							<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
								<h2 id="count3" class="numbers-count">0k</h2>
								<p class="numbers-about">Projects Delivered</p>
							</div>
							<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
								<h2 id="count4" class="numbers-count">0</h2>
								<p class="numbers-about">Our Current NPS Score</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- End Key Highlights -->

		<section class="banner-box-section p-100 text-white py-5">
			<div class="h-100 container">
				<div class="mb-4 row">
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
						<h2 style="color: rgb(49, 66, 82);">What's New at AppsNation</h2>
					</div>
				</div>
				<div class="banner-slider owl-carousel owl-theme wow fadeIn">

					<div class="banner-box-image" style="background-image: url(images/banner/boujee-beachin-banner.png); background-repeat: no-repeat; background-size: cover;">
						<div class="h-100 align-items-center row">
							<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
								<h2>Experience the World of <span>Boujee Beachin</span></h2>
								<p>A stylish shopping experience designed to bring premium beach essentials right to your fingertips with ease and elegance. From discovering trending products to finding everything for your perfect beach day/p>
								<div class="banner-btn">
									<a href="{{url('/case-studies/boujee-beachin-app')}}" target="_blank" aria-label="Appsnation Contact">Explore App</a>
									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect" class="active">Request A Quote</a>
								</div>
							</div>
						</div>
					</div>


					<div class="banner-box-image" style="background-image: url(images/banner/wood-land-banner.png); background-repeat: no-repeat; background-size: cover;">
						<div class="h-100 align-items-center row">
							<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
								<h2>Discover What <span> Wood Land </span>Can Do For You</h2>
								<p>A smart digital solution designed to simplify your daily needs by combining innovation with seamless user experience. From managing tasks efficiently to accessing services faster, Wood Land is built to make your life easier and more productive.</p>
								<div class="banner-btn">
									<a href="{{url('/case-studies/wood-land-app')}}" target="_blank" aria-label="Appsnation Contact">Explore App</a>
									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect" class="active">Request A Quote</a>
								</div>
							</div>
						</div>
					</div>
					<div class="banner-box-image" style="background-image: url(images/banner/neuro-knight-banner.png); background-repeat: no-repeat; background-size: cover;">
						<div class="h-100 align-items-center row">
							<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
								<h2>Explore the World of <span> Neuro Knights </span></h2>
								<p>An engaging learning experience designed to strengthen young minds by blending fun gameplay with cognitive development. From sharpening memory skills to boosting problem-solving abilities, Neuro Knights is built to make learning exciting and impactful.</p>
								<div class="banner-btn">
									<a href="{{url('/case-studies/neuro-knights-app')}}" target="_blank" aria-label="Appsnation Contact">Explore App</a>
									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect" class="active">Request A Quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


<!--Start Service-->
		<section class="service-section-app py-5 mt-4 dark-bg2">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 fadeIn my-5">
						<div data-text="Our Services" class="light-bg-text bg-text text-start">
							<div class="sctxt">Our Expertise</div>
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
											<img src="images/home/android-app-development-icon.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>Android App Development</h3>
										</div>
									</div>

									<div class="services-text-div">
										<p>Our Android app developers use the most up-to-date technologies to produce native apps with strong and adaptive architecture.</p>
										<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
											<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
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
											<img src="images/home/ios-app-development-icon.svg" alt="iOS App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>iOS App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>We specialize in developing full-featured iOS mobile apps that are reliable, scalable, and compatible with iPhone, iPad, Apple TV, and Apple Watch.</p>
										<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
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
											<img src="images/home/cross-platform-app-development-icon.svg" alt="Cross Platform App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>Cross-Platform App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>We create cross-platform and hybrid apps that help you save money by using a single code base and reducing time to market.</p>
										<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
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
											<img src="images/home/game-app-development-icon.svg" alt="Game App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>Game App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>We have the top mobile game app developers working for us, and they've created a wide range of highly entertaining games.</p>
										<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
											<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12   wow fadeIn servive-card-col service-five">
							<div class="card ">
								<div class="card-body">
									<div class="services-tital ">
										<div class="services-img-div">
											<img src="images/home/web-app-development-icon.svg" alt="Web App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>Web App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>Our web app development services assist with the design, development, and evolution of web-based software. </p>
										<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
											<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
										</a>
									</div>
								</div>

							</div>
						</div>
						<div class="col-12  wow fadeIn servive-card-col service-six">
							<div class="card  ">
								<div class="card-body">
									<div class="services-tital">
										<div class="services-img-div">
											<img src="images/home/wearable-app-development-icon.svg" alt="Wearable App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>Wearable App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>Our wearable device app development services are powered by new technology, allowing us to create amazing wearable apps for both iOS and Android.</p>
										<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
											<i class="fa-solid fa-arrow-right" style="color: #b6c0c8;"></i>
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12  fadeIn servive-card-col service-seven">
							<div class="card  ">
								<div class="card-body">
									<div class="services-tital">
										<div class="services-img-div">
											<img src="images/home/ar-app-development-icon.svg" alt="AR App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>AR App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>We create high-end augmented reality applications with an emphasis on 3D model design and algorithm implementation for overlaying the best virtual content.</p>
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
											<img src="images/home/vr-app-development-icon.svg" alt="VR App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>VR App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>We focus on the construction of software that allows users to interact with simulated worlds and deliver competitive VR apps with high and swift user adoption.</p>
										<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">
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
											<img src="images/home/mr-app-development-icon.svg" alt="MR App Development" class="img-fluid" width="100%" height="100%">
										</div>
										<div class="service-heading">
											<h3>MR App Development</h3>
										</div>
									</div>
									<div class="services-text-div">
										<p>We are at the forefront of pioneering MR App development, crafting cutting-edge software that enables users to seamlessly interact with immersive digital worlds.</p>
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
<!--End Service-->

<!--Start Let's Work Together-->
		<section class="contact-div">
			<div class="container-fluid">
				<div class="row justify-content-center ">
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

<!--Start Features-->
		<section class="features-section-app dark-bg2 py-5">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-5 fadeIn">
						<div class="tab-content" id="imagetab">

							@foreach($agencystack as $k=>$items)
							@if($k==0)

							<div class="tab-pane features-content active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
								<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
							</div>
							@else
							<div class="tab-pane features-content fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
								<img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
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

<!--Start Process-->
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

									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect">Call a Schedule
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

									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect">Call a Schedule
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
									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect">Call a Schedule
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

									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect">Call a Schedule
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


									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect">Call a Schedule
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

									<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect">Call a Schedule
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

 <!-- Start Hire Developers -->
		<section class="hire-developers py-5">
			<div class="container">
				<div class="row justify-content-center wow fadeIn">
					<div class="col-xl-6 my-auto">
						<div class="common-heading">
							<div data-text="Developers" class="dark-bg-text bg-text">
								<h2 class="text-white">Hire Developers For <span>Custom IT Projects</span></h2>
							</div>
							<p class="pt-2 text-white">Our team of skilled and experienced developers specializes in creating tailored IT solutions that perfectly align with your business requirements. From software development to web applications, mobile apps, database management, and more, we have the expertise to deliver innovative solutions that meet your unique needs.</p>
							<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
						</div>
					</div>
					<div class="col-xl-6 mt-3">
						<div class="row scroller">
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/unity-logo.webp" class="img-fluid d-block mx-auto" alt="Unity" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-sm-0">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/unreal-engine-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3 mt-lg-0">
								<div class="card stacFk-hov">
									<div class="card-body">
										<img src="images/tech/wordpress-logo.webp" class="img-fluid d-block mx-auto" alt="WordPress" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3 ">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/php-logo.webp" class="img-fluid d-block mx-auto" alt="PHP" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/angular-logo.webp" class="img-fluid d-block mx-auto" alt="Angular" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/c++-logo.webp" class="img-fluid d-block mx-auto" alt="C++" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/blender-logo.webp" class="img-fluid d-block mx-auto" alt="Blender" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/python-logo.webp" class="img-fluid d-block mx-auto" alt="Python" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/node-js-logo.webp" class="img-fluid d-block mx-auto" alt="Node Js" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/photon-logo.webp" class="img-fluid d-block mx-auto" alt="Photon" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/react-native-logo.webp" class="img-fluid d-block mx-auto" alt="React Native" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/js-logo.webp" class="img-fluid d-block mx-auto" alt="JS" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/html-logo.webp" class="img-fluid d-block mx-auto" alt="HTML" width="auto" height="auto">
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/laravel-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
										<!-- <p class="text-center pt-2">Laravel</p> -->
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/sql-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
										<!-- <p class="text-center pt-2">Laravel</p> -->
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4 mt-3">
								<div class="card stack-hov">
									<div class="card-body">
										<img src="images/tech/vuejs-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
										<!-- <p class="text-center pt-2">Laravel</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- End Hire Us -->


<!--Start Portfolio-->
		<section class="portfolio-section py-5">
			<div class="container">
				<div class="row">
					<div class="col-12 fadeIn">
						<div class="common-heading">
							<div data-text="Our Portfolio" class="light-bg-text bg-text text-center">
								<h2 class="mb20 text-center">Our Latest Creative Work</h2>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="container pb-5 mt100">
				<ul class="nav nav-pills justify-content-center fadeIn" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="pill" href="#app">App</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#web">Web</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#mobile-apps">Mobile Apps</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#website">Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#design">Design</a>
					</li> -->
				</ul>
				<div class="tab-content mt-5 wow fadeIn">
					<div id="app" class="tab-pane active">
						<div class="row mt60">
							<div class="col-lg-12 col-sm-12 wptbb">
								<div class="pbwide ">
									<div class="portfolio-item-info-tt">
										<div class="logowide mb20">
										</div>
										<h3 class="mt30 mb30">Boujee Beachin</h3>

										<div class="portfolio-main-tag">
											<div class="widebloktag">
												<span class="">UI/UX Design</span>
											</div>
											<div class="widebloktag green-tag ">
												<span class=""># Mobile App Development</span>
											</div>
										</div>
										<p class="my-3">A stylish shopping experience designed to bring premium beach essentials right to your fingertips with ease and elegance. From discovering trending products to finding everything for your perfect beach day, Boujee Beachin is built to make every moment effortless and luxurious.</p>
										<ul class="info-list-ul">
											<li>Management of Profile</li>
											<li>Management of Timeline</li>
											<li>Meal Plan</li>
											<li>View Recipes</li>
										</ul>
										<a href="{{url('/case-studies/boujee-beachin-app')}}" class="btn-outline lnk mt30">View Case Study
											<i class="fas fa-chevron-right fa-icon"></i>
											<span class="circle"></span>
										</a>
									</div>
									<div class="portfolio-wide-image">
										<div class="img-wide-blocktt tilt-outer">
											<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
												<div>
													<img src="images/case-studies/boujee-beachin/boujee-bouchen-thumbnail.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 wptbb gap-5">
								<div class="pbwide ">
									<div class="portfolio-wide-image">
										<div class="img-wide-blocktt tilt-outer">
											<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
												<div>
													<img src="images/case-studies/royal-ride/royal-ride-thumbnail.webp" alt="Real Estate App" class="img-fluid" width="100%" height="100%">
												</div>
											</div>
										</div>
									</div>
									<div class="portfolio-item-info-tt ps-5">
										<div class="logowide mb20">
										</div>
										<h3 class="mt30 mb30">Royal Ride App</h3>

										<div class="portfolio-main-tag">
											<div class="widebloktag">
												<span class=" ">UI/UX Design</span>
											</div>
											<div class="widebloktag  green-tag ">
												<span class=""># Mobile App Development</span>
											</div>
										</div>
										<p class="my-3">Royal Ride is a luxury ride-booking app designed for business and VIP visitors in Qatar, delivering a seamless and dependable digital experience. It offers high-end transportation with a refined reservation system tailored to premium travel needs in Doha.</p>
										<ul class="info-list-ul">
											<li>Management of Profile</li>
											<li>Management of Timeline</li>
											<li>Meal Plan</li>
											<li>View Recipes</li>
										</ul>
										<a href="{{url('/case-studies/royal-ride-app')}}" class="btn-outline lnk mt30">View Case Study
											<i class="fas fa-chevron-right fa-icon"></i>
											<span class="circle"></span>
										</a>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-sm-12 wptbb">
								<div class="pbwide ">
									<div class="portfolio-item-info-tt">
										<div class="logowide mb20">
										</div>
										<h3 class="mt30 mb30">Wood Land App</h3>

										<div class="portfolio-main-tag">
											<div class="widebloktag">
												<span class="">UI/UX Design</span>
											</div>
											<div class="widebloktag green-tag ">
												<span class=""># Mobile App Development</span>
											</div>
										</div>
										<p class="my-3">A smart digital solution designed to simplify your daily needs by combining innovation with seamless user experience. From managing tasks efficiently to accessing services faster, Wood Land is built to make your life easier and more productive.</p>
										<ul class="info-list-ul">
											<li>Management of Profile</li>
											<li>Management of Timeline</li>
											<li>Meal Plan</li>
											<li>View Recipes</li>
										</ul>
										<a href="{{url('/case-studies/wood-land-app')}}" class="btn-outline lnk mt30">View Case Study
											<i class="fas fa-chevron-right fa-icon"></i>
											<span class="circle"></span>
										</a>
									</div>
									<div class="portfolio-wide-image">
										<div class="img-wide-blocktt tilt-outer">
											<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
												<div>
													<img src="images/case-studies/wood-land-app/wood-land-thumbnail.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div id="web" class="tab-pane fade">
						<div class="row mt60">
							<div class="col-lg-12 col-sm-12 wptbb">
								<div class="pbwide ">
									<div class="portfolio-item-info-tt">
										<div class="logowide mb20">
										</div>
										<h3 class="mt30 mb30">Gym App</h3>

										<div class="portfolio-main-tag">
											<div class="widebloktag">
												<span class="">UI/UX Design</span>
											</div>
											<div class="widebloktag green-tag ">
												<span class=""># web Development</span>
											</div>
										</div>
										<p class="my-3">Gymnasium emerges as the definitive application dedicated to offering a comprehensive guide for enhancing physical health and overall well-being.</p>
										<ul class="info-list-ul">
											<li>Management of Profile</li>
											<li>Management of Timeline</li>
											<li>Meal Plan</li>
											<li>View Recipes</li>
										</ul>
										<a href="{{url('/case-studies/gym-app')}}" class="btn-outline lnk mt30">View Case Study
											<i class="fas fa-chevron-right fa-icon"></i>
											<span class="circle"></span>
										</a>
									</div>
									<div class="portfolio-wide-image">
										<div class="img-wide-blocktt tilt-outer">
											<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
												<div>
													<img src="images/home/gym-web.webp" alt="Gym Web" class="img-fluid" width="100%" height="100%">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 wptbb">
								<div class="pbwide ">
									<div class="portfolio-wide-image">
										<div class="img-wide-blocktt tilt-outer">
											<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
												<div>
													<img src="images/home/real-estate-web.webp" alt="Real Estate Web" class="img-fluid" width="100%" height="100%">
												</div>
											</div>
										</div>
									</div>
									<div class="portfolio-item-info-tt ps-5">
										<div class="logowide mb20">
										</div>
										<h3 class="mt30 mb30">Real Estate App</h3>

										<div class="portfolio-main-tag">
											<div class="widebloktag">
												<span class=" ">UI/UX Design</span>
											</div>
											<div class="widebloktag  green-tag ">
												<span class=""># web Development</span>
											</div>
										</div>
										<p class="my-3">Our project goals for the real estate initiative are to integrate seamlessly with MLS platforms for accurate property listings, optimize mobile usability, implement robust security measures, and provide an intuitive interface for easy property searches.</p>
										<ul class="info-list-ul">
											<li>Management of Profile</li>
											<li>Management of Timeline</li>
											<li>Meal Plan</li>
											<li>View Recipes</li>
										</ul>
										<a href="{{url('/case-studies/real-estate-app')}}" class="btn-outline lnk mt30">View Case Study
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
		</section>
<!--End Portfolio-->

 

<!-- Start Why Choose -->
		<section class="why-choose-section py-5">
			<div class="container">
				<div class="row justify-content-center wow fadeIn">
					<div class="col-lg-6 my-auto">
						<div data-text="Partner" class="light-bg-text bg-text">
							<h2>Why Choose <span>AppsNation</span> As Your <span>Development Partner</span></h2>
						</div>
						<p class="pt-2">AppsNation has been working in the software development field since 2016. We have worked with 300+ businesses. Moreover, AppsNation has its own play store where we have 50+ different apps and software, which most development companies don't have. AppsNation has its own 50+ certified developers and designers team that helps you convert the idea into reality.</p>
						<a href="pdf/company-profile-appsnation.pdf" target="_blank" class="btn-main button-arounder lnk mt-4">Download Company Profile
							<i class="fas fa-chevron-right fa-icon"></i>
							<span class="circle"></span>
						</a>
					</div>
					<div class="col-lg-6">
						<img src="images/why-choose/why-choose.webp" class="img-fluid mt-4" width="100%" height="100%">
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-6 col-lg-3">
						<div class="card h-100">
							<div class="card-body">
								<img src="images/why-choose/team-scalibility.webp" class="img-fluid my-3" width="100%" height="100%" alt="Team Scalability">
								<h3>Team Scalability</h3>
								<p class="mb-0">Boost your team with domain specialists whenever required.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								<img src="images/why-choose/quick-time-to-market.webp" class="img-fluid my-3" width="100%" height="100%" alt="Quick Time to Market">
								<h3>Quick Time to Market</h3>
								<p class="mb-0">Streamlined delivery is intended to achieve efficiency on time.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
						<div class="card h-100">
							<div class="card-body">
								<img src="images/why-choose/cost-saving.webp" class="img-fluid my-3" width="100%" height="100%" alt="Cost Saving">
								<h3>Cost Saving</h3>
								<p class="mb-0">Get experienced and competent developers at a reasonable price.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
						<div class="card h-100">
							<div class="card-body">
								<img src="images/why-choose/skilled-resources.webp" class="img-fluid my-3" width="100%" height="100%" alt="Skilled Resources">
								<h3>Skilled Resources</h3>
								<p class="mb-0">Get access to skilled mobile gaming experts with domain knowledge.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- End Why Choose -->


<!--start banner section  -->
		<section class="banner-box-section p-100 text-white my-5 py-5">
			<div class="h-100 container">
				<div class="mb-4 row">
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
					</div>
				</div>
				<div class="banner-box-image" style="background-image: url(images/banner/royal-spa-banner.png); background-repeat: no-repeat; background-size: cover;">
					<div class="h-100 align-items-center row">
						<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
							<h2>Indulge in the <span> Royal Spa </span> Experience</h2>
							<p>A luxurious well-being destination designed to rejuvenate your body and mind with premium treatments and tranquil ambiance. From soothing therapies to personalized care, Royal Spa is built to deliver unparalleled relaxation and pure serenity.</p>
							<div class="banner-btn">
								<a
									href="#" target="_blank" aria-label="Appsnation Contact">Explore App</a>
								<a data-bs-toggle="modal" data-bs-target="#myModal" class="process-btn-effect" class="active">Request A Quote</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!--End banner section  -->


<!--Start Tech-->
		<section class="technologies-stack py-5">
			<div class="container">
				<div class="row fadeIn">
					<div class="col-12">
						<div class="common-heading">
							<div data-text="Technologies" class="light-bg-text bg-text text-center">
								<h2 class="mb30 text-center"><span>Technologies</span> We Work With</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row wow fadeIn">
					<div class="col-lg-6 mt-4">
						<div class="card h-100">
							<div class="card-body">
								<div class="row">
									<div class="con-h">
										<h3 class="text-center">App Development</h3>
										<p class="text-center pt-2">For App development, our developers use the latest technologies, which provide top notch app development solution.</p>
									</div>
								</div>
								<div class="row pt-3">
									<div class="tech-slider1 owl-carousel">
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/apple-logo.webp" alt="iOS Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">iOS</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/android-logo.webp" alt="Android Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Android</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/flutter-logo.webp" alt="Flutter Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Flutter</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/ionic-logo.webp" alt="Ionic Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Ionic</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/swift-logo.webp" alt="Swift Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Swift</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/kotlin-logo.webp" alt="Kotlin Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Kotlin</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/objective-c-logo.webp" alt="Objective C Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Objective C</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">React Native</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/google-fit-sdk.webp" alt="Google Fit SDK Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Google Fit SDK</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Alamofire</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/xcode-logo.webp" alt="XCode Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">XCode</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/node-red-logo.webp" alt="Node-Red Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Node-Red</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Alamofire</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/graphql-logo.webp" alt="Graph QL Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Graph QL</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/grafana-logo.webp" alt="Grafana Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Grafana</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/tensorflow-logo.webp" alt="Tensor Flow Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Tensor Flow</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/tableau-logo.webp" alt="Tableau Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Tableau</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/android-sdk-logo.webp" alt="Android SDK Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Android SDK</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/apache-kafka-logo.webp" alt="Apache Kafka Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Apache Kafka</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/android-studio.webp" alt="Android Studio Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Android Studio</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/xamarin-native-c-logo.webp" alt="Xamarin Native C Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Xamarin Native C</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/amazon-sumerian-logo.webp" alt="Amazon Sumerian Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Amazon Sumerian</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/apache-hadoop-logo.webp" alt="Apache Hadoop Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Apache Hadoop</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="card h-100">
							<div class="card-body">
								<div class="row">
									<div class="con-h">
										<h3 class="text-center">Frontend Development</h3>
										<p class="text-center pt-2">To make the interactive user interface, our developers use all proven tools and languages that are helpful to enhance user focus and grab their attention.</p>
									</div>
								</div>
								<div class="row pt-3">
									<div class="tech-slider1 owl-carousel">
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/angular-logo.webp" alt="Angular Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Angular JS</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">React JS</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/html-logo.webp" alt="HTML Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">HTML</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/css-logo.webp" alt="CSS Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">CSS</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/js-logo.webp" alt="JavaScript Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">JavaScript</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/next-js-logo.webp" alt="Next JS Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Next JS</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/json-logo.webp" alt="JSON Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">JSON</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/rest-logo.webp" alt="Rest Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Rest</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/soap-logo.webp" alt="Soap Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Soap</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/xml-logo.webp" alt="XML Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">XML</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/spark-ml-logo.webp" alt="Spark ML Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Spark ML</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="card h-100">
							<div class="card-body">
								<div class="row">
									<div class="con-h">
										<h3 class="text-center">Database Development</h3>
										<p class="text-center pt-2">Our database experts are trained to provide robust database management solutions. We use all modern technologies to provide you secure database solution.</p>
									</div>
								</div>
								<div class="row pt-3">
									<div class="tech-slider1 owl-carousel">
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/firebase-logo.webp" alt="Firebase Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Firebase</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/sqlite-logo.webp" alt="SQLite Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">SQLite</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/core-data-logo.webp" alt="CoreData Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">CoreData</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/realm-logo.webp" alt="Realm Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Realm</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/mysql-logo.webp" alt="MySQL Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">MySQL</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/sql-logo.webp" alt="SQL Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">SQL</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/opentsdb-logo.webp" alt="OpenTSDB Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">OpenTSDB</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="card h-100">
							<div class="card-body">
								<div class="row">
									<div class="con-h">
										<h3 class="text-center">Backend Development</h3>
										<p class="text-center pt-2">Backend development is key that makes you unable to automate your system. Our backend developers use all modern techniques to develop top-notch solutions.</p>
									</div>
								</div>
								<div class="row pt-3">
									<div class="tech-slider1 owl-carousel">
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/php-logo.webp" alt="PHP Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">PHP</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/java-logo.webp" alt="Java Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Java</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/node-js-logo.webp" alt="Node JS Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Node JS</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/python-logo.webp" alt="Python Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Python</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/c-sharp-logo.webp" alt="C# Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">C#</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/c++-logo.webp" alt="C/C++ Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">C/C++</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="card h-100">
							<div class="card-body">
								<div class="row">
									<div class="con-h">
										<h3 class="text-center">CMS Development</h3>
										<p class="text-center pt-2">Our CMS engineers have first-hand knowledge of putting in place specialized solutions that make it easier to create, store, organize, edit, and publish web content.</p>
									</div>
								</div>
								<div class="row pt-3">
									<div class="tech-slider2 owl-carousel">
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/wordpress-logo.webp" alt="WordPress Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">WordPress</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/magento-logo.webp" alt="Magento Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Magento</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/shopify-logo.webp" alt="Shopify Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Shopify</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 mt-4">
						<div class="card h-100 ">
							<div class="card-body">
								<div class="row">
									<div class="con-h">
										<h3 class="text-center">Infra and DevOps Development</h3>
										<p class="text-center pt-2">The utilization of the most recent technologies and techniques by our infrastructure and DevOps developers improve an organization's capacity to offer apps and services at a highspeed.</p>
									</div>
								</div>
								<div class="row pt-3">
									<div class="tech-slider2 owl-carousel">
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/aws-logo.webp" alt="AWS Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">AWS</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/azure-logo.webp" alt="Azure Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Azure</h4>
											</div>
										</div>
										<div class="tech-item">
											<div class="item">
												<img src="images/tech/google-cloud-logo.webp" alt="Google Cloud Logo" class="tech-logo" width="auto" height="auto">
												<h4 class="mt-2">Google Cloud</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!--End Tech-->

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
							<img src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
							<h3 class="pt-3">Google Developer<br>Certified Agency</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
						<div>
							<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
							<h3 class="pt-3">Adobe Solution<br>Partner Program</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
						<div>
							<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
							<h3 class="pt-3">Microsoft Certified<br>Consulting Partner</h3>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
						<div>
							<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
							<h3 class="pt-3">Amazon Web<br>Service Partner</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- End Technologies -->


<!-- Start bages Section  -->
		<section class="badges-section py-5">
			<div class="container">
				<div class="row fadeIn">
					<div class="col-12">
						<div class="common-heading w-tdxt text-center">
							<div data-text="Awards" class="dark-bg-text bg-text text-center">
								<h2 class="text-white">
									Ranked as #1 <span>Mobile App</span> Development Company
								</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt-5 wow fadeIn">
					<div class="col-12">

						<div class="awards-slider  owl-carousel owl-theme">

							@foreach($awards as $item)

							@php
							$isLink = $item['heading'] === 'Top Website design Agencies';
							@endphp

							@if($isLink)
							<a href="{{ $item['comment'] }}" target="_blank">
								@endif

								<div class="award-item">
									<div class="item">
										<div class="card">
											<div class="card-body text-center">
												<img
													src="{{ asset('uploads/'.$item['image']) }}"
													class="award-img"
													alt="{{ $item['heading'] }}" />
												<h5 class="pt-3">{{ $item['heading'] }}</h5>
											</div>
										</div>
									</div>
								</div>

								@if($isLink)
							</a>
							@endif

							@endforeach

						</div>

					</div>
				</div>

			</div>
		</section>
<!-- End bages Section  -->



<!--Start Clients-->
		<section class="py-5 bg-gradient3 client">
			<div class="container">
				<div class="row fadeIn">
					<div class="col-12">
						<div class="common-heading">
							<div data-text="Clients" class="light-bg-text bg-text text-center">
								<h2 class="mb30 text-center">Some of <span>Our Clients</span></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center wow fadeIn mt-xl-5">
					<div class="col-lg-12">
						<div class="client-logoset">
							<div class="row">
								@foreach($clients as $item)
								<div class="col-lg-2 col-md-3 col-sm-4 col-6 mt-4">
									<div class="brand-logo hoshd">
										<img src="uploads/{{$item['image']}}" alt="{{$item['alt']}}" class="img-fluid d-block mx-auto" width="auto" height="auto">
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!--End Clients-->

<!--Start Testinomial-->
		<section class="testimonials-section-app pt100 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="common-heading text-center">
							<div data-text="Testimonials" class="dark-bg-text bg-text text-center">
								<h2 class="text-white">What <span> Our Clients</span> Say About <span>AppsNation</span></h2>
							</div>
							<h3 class="text-white">Over 1200+ Satisfied Clients and Growing</h3>
						</div>
					</div>
				</div>


				<div class="testimonial-card-a owl-carousel owl-theme">
					@foreach($testimonials as $key => $item)

					<div class="tcd card h-100">
						<div class="row ">
							<div class="col-lg-6 position-relative">



								<!-- YouTube Video -->
								<iframe
									id="player-{{$key}}"
									class="youtube-player testimonial-video"

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
		</section>
<!--End Testinomial-->



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
								<img src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
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
								<h3 class="mb-0">
									<a href="{{ $post['guid'] }}">{{$post['post_title']}}</a>
								</h3>
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

<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-5ZVNH97');
</script>


<script>
	// Load YouTube API
	var tag = document.createElement('script');
	tag.src = "https://www.youtube.com/iframe_api";
	document.getElementsByTagName('script')[0].parentNode.insertBefore(tag, null);

	var players = {};

	function onYouTubeIframeAPIReady() {
		document.querySelectorAll('.youtube-player').forEach(function(iframe) {
			var playerId = iframe.getAttribute('id');

			players[playerId] = new YT.Player(playerId, {
				playerVars: {
					autoplay: 1,
					mute: 1,
					loop: 1,
					controls: 0,
					rel: 0,
					modestbranding: 1,
					playsinline: 1
				}
			});
		});
	}

	// CLICK → Unmute video
	document.addEventListener('click', function(e) {
		if (e.target.classList.contains('video-overlay')) {
			var targetId = e.target.getAttribute('data-target');
			if (players[targetId]) {
				players[targetId].unMute();
				e.target.style.display = 'none';
			}
		}
	});
</script>



<!-- End Google Tag Manager -->
@endsection