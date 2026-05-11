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
					Development Company</h1>
					<p class="wow fadeIn">Our app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start Key Highlights -->
<section class="key-highlights py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 fadeIn">
				<div class="common-heading">
					<div data-text="Achievements" class="light-bg-text bg-text text-center">
						<h2 class="key-highlight text-center mt-5">Our Achievements</h2>
					</div>
					<h3 class="key-numbers text-center mt-5">Our work in numbers</h3>
				</div>
			</div>
			<div class="col-lg-8 wow fadeIn mt-3">
				<p class="key-desc text-center">With the help of <strong>50 plus</strong> highly trained professional team we're able to achieve these amazing numbers which is enough proof of our success. We do not speak about our success, our work speaks about our success.</p>
			</div>
		</div>

		<div class="row justify-content-center mt-5 wow fadeIn achievements-count">
			<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
				<h2 class="numbers-count">8+</h2>
				<p class="numbers-about">Years On The market</p>
			</div>
			<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
				<h2 class="numbers-count">900+</h2>
				<p class="numbers-about">People On Board</p>
			</div>
			<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
				<h2 class="numbers-count">1k+</h2>
				<p class="numbers-about">Projects Delivered</p>
			</div>
			<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
				<h2 class="numbers-count">67</h2>
				<p class="numbers-about">Our Current NPS Score</p>
			</div>
		</div>
	</div>
</section>
<!-- End Key Highlights -->

<!--Start Service-->
<section class="py-5 dark-bg2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div data-text="Our Services" class="light-bg-text bg-text text-center">
					<div class="sctxt">App Development</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Service-->
<section class="service-section-app py-5 mt-4 dark-bg2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 fadeIn">
				<div class="common-heading ptag">
					<h2>Our Expertise</h2>
					<p class="mb-0">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-6 col-lg-4 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/android-app-development-icon.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Android App Development</h3>
						</div>
						<div class="services-text-div">
							<p>Our Android app developers use the most up-to-date technologies to produce native apps with strong and adaptive architecture.</p>
							<a href="{{url('/android-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 mt-md-0 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/ios-app-development-icon.svg" alt="iOS App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>iOS App Development</h3>
						</div>
						<div class="services-text-div">
							<p>We specialize in developing full-featured iOS mobile apps that are reliable, scalable, and compatible with iPhone, iPad, Apple TV, and Apple Watch.</p>
							<a href="{{url('/ios-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 mt-lg-0 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/cross-platform-app-development-icon.svg" alt="Cross Platform App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Cross-Platform App Development</h3>
						</div>
						<div class="services-text-div">
							<p>We create cross-platform and hybrid apps that help you save money by using a single code base and reducing time to market.</p>
							<a href="{{url('/cross-platform-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 wow fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/game-app-development-icon.svg" alt="Game App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Game App Development</h3>
						</div>
						<div class="services-text-div">
							<p>We have the top mobile game app developers working for us, and they've created a wide range of highly entertaining games.</p>
							<a href="{{url('/game-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 wow fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/web-app-development-icon.svg" alt="Web App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Web App Development</h3>
						</div>
						<div class="services-text-div">
							<p>Our web app development services assist with the design, development, and evolution of web-based software. You can rely on us to create web apps that are effective, efficient, and simple to use.</p>
							<a href="{{url('/web-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 wow fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/wearable-app-development-icon.svg" alt="Wearable App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Wearable App Development</h3>
						</div>
						<div class="services-text-div">
							<p>Our wearable device app development services are powered by new technology, allowing us to create amazing wearable apps for both iOS and Android.</p>
							<a href="{{url('/wearable-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/ar-app-development-icon.svg" alt="AR App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>AR App Development</h3>
						</div>
						<div class="services-text-div">
							<p>We create high-end augmented reality applications with an emphasis on 3D model design and algorithm implementation for overlaying the best virtual content.</p>
							<a href="{{url('/ar-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/vr-app-development-icon.svg" alt="VR App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>VR App Development</h3>
						</div>
						<div class="services-text-div">
							<p>We focus on the construction of software that allows users to interact with simulated worlds and deliver competitive VR apps with high and swift user adoption.</p>
							<a href="{{url('/vr-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-3 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							<img src="images/home/mr-app-development-icon.svg" alt="MR App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>MR App Development</h3>
						</div>
						<div class="services-text-div">
							<p>We are at the forefront of pioneering MR App development, crafting cutting-edge software that enables users to seamlessly interact with immersive digital worlds.</p>
							<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">Read More
								<i class="fas fa fa-arrow-circle-right"></i>
							</a>
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
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag fadeIn">
					<div data-text="Process" class="light-bg-text bg-text">
						<h2>Our <span>Mobile App</span> Development Process</h2>
					</div>
					<p>Our Mobile app development process is a well-structured journey that begins with a thorough project scope determination early in the project life cycle. We then venture into a series of iterative cycles, leveraging Agile methodologies and sprints, to bring your product to life.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Project Analysis of Requirements</h3>
						<p class="description">Knowing your UX&UI depending on your target audience is one of the most crucial aspects of the study. Based on your target region, you must know your target audience, age, languages, design, and typefaces. This phase also entails determining which technology you'll use to create your app.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">Wireframing & Designing</h3>
						<p class="description">The following stage should be to draw a rough sketch of your user journey on paper. Sketching is capable of much more than simply tracking your user's movements. This aids in the refinement of concepts and the proper arrangement of all design components.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">App Development</h3>
						<p class="description">The app passes through several stages as development develops. The essential functionality is usually not properly tested in the early stages. Much of the anticipated functionality is added in the second stage. We work in an agile manner. It facilitates flexible planning.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">App Testing</h3>
						<p class="description">Usability, compatibility, security, and performance should all be checked on the program. Your beta users' input can assist you in determining whether your app's function is working properly in a real-world circumstance.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">App Deployment</h3>
						<p class="description">The last step consists of the deployment of the app after it has been tested. Launch your app with us and go live or beta live as per your requirement.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">Maintenance</h3>
						<p class="description">We offer the excellent solution of maintenance in your app development procedures and facilitate you with our best options and services.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

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
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Mobile App Development</span>
								</div>
								<h3 class="mt30 mb30">Gym App</h3>
								<p class="mb30">Gymnasium emerges as the definitive application dedicated to offering a comprehensive guide for enhancing physical health and overall well-being.</p>
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
											<img src="images/home/gym-app.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/real-estate-logo.webp" alt="Real Estate App" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Mobile App Development</span>
								</div>
								<h3 class="mt30 mb30">Real Estate App</h3>
								<p class="mb30">Our project goals for the real estate initiative are to integrate seamlessly with MLS platforms for accurate property listings, optimize mobile usability, implement robust security measures, and provide an intuitive interface for easy property searches.</p>
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
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/real-estate-app.webp" alt="Real Estate App" class="img-fluid" width="100%" height="100%">
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
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Gym Web</h3>
								<p class="mb30">More than just a fitness app, Gymnasium acts as your personal trainer, nutritionist, and motivational coach—all conveniently housed within a user-friendly interface.</p>
								<ul class="info-list-ul">
									<li>Content Management</li>
									<li>User Management</li>
									<li>Bookings Management</li>
									<li>Promotions</li>
								</ul>
								<a href="{{url('/case-studies/gym-web')}}" class="btn-outline lnk mt30">View Case Study 
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
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									<img src="images/case-studies/real-estate-logo.webp" alt="Real Estate Web" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Real Estate Web</h3>
								<p class="mb30">Discover Avenue, the ultimate app for all your property buying and selling needs.</p>
								<ul class="info-list-ul">
									<li>Dashboard</li>
									<li>Properties Management</li>
									<li>Mortgage</li>
									<li>User Management</li>
								</ul>
								<a href="{{url('/case-studies/real-estate-web')}}" class="btn-outline lnk mt30">View Case Study 
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="portfolio-wide-image">
								<div class="img-wide-blocktt tilt-outer">
									<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
										<div>
											<img src="images/home/real-estate-web.webp" alt="Real Estate Web" class="img-fluid" width="100%" height="100%">
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
</section>
<!--End Portfolio-->

<!-- Start Hire Developers -->
<section class="hire-developers py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-xl-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2 class="text-white">Hire Developers For <span>Custom IT Projects</span></h2>
					</div>
					<!--<p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
					<p class="pt-2 text-white">Our team of skilled and experienced developers specializes in creating tailored IT solutions that perfectly align with your business requirements. From software development to web applications, mobile apps, database management, and more, we have the expertise to deliver innovative solutions that meet your unique needs.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-xl-6 mt-3">
				<div class="row scroller">
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/unity-logo.webp" class="img-fluid d-block mx-auto" alt="Unity" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Unity</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-sm-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/unreal-engine-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Unreal Engine</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-lg-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/wordpress-logo.webp" class="img-fluid d-block mx-auto" alt="WordPress" width="auto" height="auto">
								<!-- <p class="text-center pt-2">WordPress</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/php-logo.webp" class="img-fluid d-block mx-auto" alt="PHP" width="auto" height="auto">
								<!-- <p class="text-center pt-2">PHP</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/angular-logo.webp" class="img-fluid d-block mx-auto" alt="Angular" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Angular JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/c++-logo.webp" class="img-fluid d-block mx-auto" alt="C++" width="auto" height="auto">
								<!-- <p class="text-center pt-2">C++</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/blender-logo.webp" class="img-fluid d-block mx-auto" alt="Blender" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Blender</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/python-logo.webp" class="img-fluid d-block mx-auto" alt="Python" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Python</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/node-js-logo.webp" class="img-fluid d-block mx-auto" alt="Node Js" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Node JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/photon-logo.webp" class="img-fluid d-block mx-auto" alt="Photon" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Photon</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/react-native-logo.webp" class="img-fluid d-block mx-auto" alt="React Native" width="auto" height="auto">
								<!-- <p class="text-center pt-2">React Native</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/js-logo.webp" class="img-fluid d-block mx-auto" alt="JS" width="auto" height="auto">
								<!-- <p class="text-center pt-2">JavaScript</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/html-logo.webp" class="img-fluid d-block mx-auto" alt="HTML" width="auto" height="auto">
								<!-- <p class="text-center pt-2">HTML</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								<img src="images/tech/laravel-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
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

<!--Start Tech-->
<!-- <section class="technologies-stack py-5">
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
		<div class="row wow fadeIn mt50">
			<div class="col-12">
				<ul class="nav nav-pills justify-content-center" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="pill" href="#apps">App</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#frontent">Frontent</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#database">Database</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#backend">Backend</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#cms">CMS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#infra">Infra and Devops</a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="apps" class="tab-pane active mt-4">
						<div class="con-h">
							<h3 class="text-center">App Development</h3>
							<p class="text-center pt-2">For app development, our developers use the latest technologies, which provide top-notch app development solutions.</p>
						</div>
						<div class="row">
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/apple-logo.webp" alt="iOS Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">iOS</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/android-logo.webp" alt="Android Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Android</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/flutter-logo.webp" alt="Flutter Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Flutter</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/ionic-logo.webp" alt="Ionic Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Ionic</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/swift-logo.webp" alt="Swift Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Swift</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/kotlin-logo.webp" alt="Kotlin Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Kotlin</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/objective-c-logo.webp" alt="Objective C Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Objective C</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">React Native</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/google-fit-sdk.webp" alt="Google Fit SDK Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Google Fit SDK</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Alamofire</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/xcode-logo.webp" alt="XCode Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">XCode</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/node-red-logo.webp" alt="Node-Red Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Node-Red</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Alamofire</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/graphql-logo.webp" alt="Graph QL Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Graph QL</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/grafana-logo.webp" alt="Grafana Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Grafana</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/tensorflow-logo.webp" alt="Tensor Flow Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Tensor Flow</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/tableau-logo.webp" alt="Tableau Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Tableau</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/android-sdk-logo.webp" alt="Android SDK Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Android SDK</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/apache-kafka-logo.webp" alt="Apache Kafka Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Apache Kafka</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/android-studio.webp" alt="Android Studio Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Android Studio</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/xamarin-native-c-logo.webp" alt="Xamarin Native C Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Xamarin Native C</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/amazon-sumerian-logo.webp" alt="Amazon Sumerian Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Amazon Sumerian</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/apache-hadoop-logo.webp" alt="Apache Hadoop Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Apache Hadoop</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/unity-logo.webp" alt="Unity Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Unity</h4>
							</div>
						</div>
					</div>
					<div id="frontent" class="tab-pane fade mt-4">
						<div class="con-h">
							<h3 class="text-center">Frontend Development</h3>
							<p class="text-center pt-2">To make the interactive user interface, our developers use all proven tools and languages that are helpful to enhance user focus and grab their attention.</p>
						</div>
						<div class="row">
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/angular-logo.webp" alt="Angular Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Angular JS</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">React JS</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/html-logo.webp" alt="HTML Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">HTML</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/css-logo.webp" alt="CSS Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">CSS</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/js-logo.webp" alt="JavaScript Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">JavaScript</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/next-js-logo.webp" alt="Next JS Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Next JS</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/json-logo.webp" alt="JSON Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">JSON</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/rest-logo.webp" alt="Rest Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Rest</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/soap-logo.webp" alt="Soap Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Soap</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/xml-logo.webp" alt="XML Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">XML</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-2 mt-4">
								<img src="images/tech/spark-ml-logo.webp" alt="Spark ML Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Spark ML</h4>
							</div>
						</div>
					</div>
					<div id="database" class="tab-pane fade mt-4">
						<div class="con-h">
							<h3 class="text-center">Database Development</h3>
							<p class="text-center pt-2">Our database experts are trained to provide robust database management solutions. We use all modern technologies to provide you secure database solution.</p>
						</div>
						<div class="row">
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-3 mt-4">
								<img src="images/tech/firebase-logo.webp" alt="Firebase Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Firebase</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-3 mt-4">
								<img src="images/tech/sqlite-logo.webp" alt="SQLite Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">SQLite</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-3 mt-4">
								<img src="images/tech/core-data-logo.webp" alt="CoreData Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">CoreData</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-3 mt-4">
								<img src="images/tech/realm-logo.webp" alt="Realm Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Realm</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-3 mt-4">
								<img src="images/tech/mysql-logo.webp" alt="MySQL Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">MySQL</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-3 mt-4">
								<img src="images/tech/sql-logo.webp" alt="SQL Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">SQL</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 col-xl-3 mt-4">
								<img src="images/tech/opentsdb-logo.webp" alt="OpenTSDB Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">OpenTSDB</h4>
							</div>
						</div>
					</div>
					<div id="backend" class="tab-pane fade mt-4">
						<div class="con-h">
							<h3 class="text-center">Backend Development</h3>
							<p class="text-center pt-2">Backend development is key to making you unable to automate your system. Our backend developers use all modern techniques to develop top-notch solutions.</p>
						</div>
						<div class="row">
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/php-logo.webp" alt="PHP Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">PHP</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/java-logo.webp" alt="Java Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Java</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/node-js-logo.webp" alt="Node JS Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Node JS</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/python-logo.webp" alt="Python Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Python</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/c-sharp-logo.webp" alt="C# Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">C#</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/c++-logo.webp" alt="C/C++ Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">C/C++</h4>
							</div>
						</div>
					</div>
					<div id="cms" class="tab-pane fade mt-4">
						<div class="con-h">
							<h3 class="text-center">CMS Development</h3>
							<p class="text-center pt-2">Our CMS engineers have first-hand knowledge of putting in place specialized solutions that make it easier to create, store, organize, edit, and publish web content.</p>
						</div>
						<div class="row">
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/wordpress-logo.webp" alt="WordPress Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">WordPress</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/magento-logo.webp" alt="Magento Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Magento</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/shopify-logo.webp" alt="Shopify Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Shopify</h4>
							</div>
						</div>
					</div>
					<div id="infra" class="tab-pane fade mt-4">
						<div class="con-h">
							<h3 class="text-center">Infra and Devops Development</h3>
							<p class="text-center pt-2">The utilization of the most recent technologies and techniques by our infrastructure and DevOps developers improves an organization's capacity to offer apps and services at a high speed.</p>
						</div>
						<div class="row">
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/aws-logo.webp" alt="AWS Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">AWS</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/azure-logo.webp" alt="Azure Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Azure</h4>
							</div>
							<div class="col-6 col-sm-6 col-md-3 col-lg-4 mt-4">
								<img src="images/tech/google-cloud-logo.webp" alt="Google Cloud Logo" class="tech-logo d-block mx-auto">
								<h4 class="mt-2">Google Cloud</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End Tech-->

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
										<img src="images/tech/apache-hadoop-logo.webp" alt="Apache Hadoop Logo" class="tech-logo"width="auto" height="auto">
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

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div data-text="Awards" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">Ranked as #1 <span>Mobile App</span> Development Company</h2>
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
										<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
										<h3 class="text-center pt-3">{{$item['heading']}}</h3>
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
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
									<h3 class="text-center pt-3">{{$item['heading']}}</h3>
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
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
									<h3 class="text-center pt-3">{{$item['heading']}}</h3>
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
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
									<h3 class="text-center pt-3">{{$item['heading']}}</h3>
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
	</div>
</section>
<!--End Badges-->

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
		
        <div class="testimonial-card-a owl-carousel owl-theme owl-theme">
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
									<!-- <div class="user-image bdr-radius"> <img src="images/user-thumb/girl.webp" alt="girl" class="img-fluid rounded-circle" /> </div> -->
									<div class="media-body user-info v-center">
										<h3>{{$item['name']}}</h3>
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
									<img src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
									<img src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
									<img src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto" alt="DesignRush" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by DesignRush</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
									<img src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto" alt="GoodFirms" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
									<img src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto" alt="Trustpilot" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Trustpilot</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
									<img src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto" alt="Sortlist" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://upcity.com/profiles/appsnation" target="_blank">
									<img src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
									<img src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto" alt="SiteJabber" width="auto" height="auto">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
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
<!-- End Google Tag Manager -->
@endsection