@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 qatar-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-12 col-xl-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Mobile App Development Company in Qatar</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">AppsNation is a top-rated mobile app development company in Qatar, delivering custom apps for iOS, Android, AR/VR, IoT, gaming, wearables, and eCommerce. We build scalable, high-performance mobile solutions that align with your business goals. Our team makes sure that the app runs smoothly on every platform, from design and development to testing and deployment. Make a powerful digital product out of your app idea by working with us.</p>
				</div>
				<div class="row mt-3">
					<div class="col-md-4">
						<div class="card h-100">
							<div class="card-body">
								 <img loading="lazy" src="images/locations/clutch.webp" alt="Clutch" class="img-fluid d-block mx-auto" width="auto" height="auto">
								 <img loading="lazy" src="images/locations/star.webp" alt="Star" class="img-fluid d-block mx-auto mt-3" width="auto" height="auto">
								<p class="text-white text-center pt-2">Recognized as Top App Developers by Clutch</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								 <img loading="lazy" src="images/locations/goodfirms.webp" alt="GoodFirms" class="img-fluid d-block mx-auto" width="auto" height="auto">
								 <img loading="lazy" src="images/locations/star.webp" alt="Star" class="img-fluid d-block mx-auto mt-3" width="auto" height="auto">
								<p class="text-white text-center pt-2">Recognized as Top App Developers by GoodFirms</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								 <img loading="lazy" src="images/locations/designrush.webp" alt="DesignRush" class="img-fluid d-block mx-auto" width="auto" height="auto">
								 <img loading="lazy" src="images/locations/star.webp" alt="Star" class="img-fluid d-block mx-auto mt-3" width="auto" height="auto">
								<p class="text-white text-center pt-2">Recognized as Top App Developers by DesignRush</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-12 col-xl-4 mt-3 mt-xl-0 wow fadeIn">
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
                        <div class="form-group mb-2 captchaContainer3" id="captchaContainer" >
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
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section class="about py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2>Top<span class="flup-theme"> Mobile App Developers</span> for iOS & Android in Qatar</h2>
					</div>
					<p>In this day and age, technology is evolving at lightning speed, and so are the needs of our clients. But don't worry, we're right there alongside you, keeping up with the latest trends. If you're aiming to boost your revenue in Qatar, our app development team is the best partner you could ask for. Our expert app developers are leaders in crafting truly outstanding mobile applications. So, tell us what you're looking for. Get in touch with us now!</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					 <img loading="lazy" src="images/locations/qatar/qatar.webp" alt="Qatar" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About-->
<section class="qatar-about pt60 pb60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2 class="text-white">Expert <span class="flup-theme"> App Development Services</span> in Qatar.</h2>
					</div>
					<p class="text-white">With 96% of Qatar's population using smartphones and 84% of businesses regarding mobile apps as essential for operations, falling behind is simply not an option. To keep pace, it's crucial to invest in mobile app development in Qatar and embrace the digital transformation.</p>
					<p class="text-white">By collaborating with a top-tier mobile app development company in Qatar, you can turn your specific business requirements into cutting-edge solutions, ultimately positioning yourself as a leader in your field.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn">
				 <img loading="lazy" src="images/locations/qatar/scale-your-business.webp" alt="Scale Your Business" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section py-5 dark-bg2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text text-center">
						<h2>Our app development service in <span>Qatar</span></h2>
						<p>Our all-encompassing mobile app development services are draughted to cater to businesses across Qatar, including Doha, Al Rayyan, and beyond.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-4 fadeIn">
				<div class="card h-100">
					<div class="card-body">
						<div class="services-img-div">
							 <img loading="lazy" src="images/home/android-app-development-icon.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Android App Development</h3>
						</div>
						<div class="services-text-div">
							<p>In Qatar, AppsNation provides Kotlin and Java-based expert Android app development. We build innovative, responsive apps tailored for business success, ensuring smooth performance and user engagement across all Android devices.</p>
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
							 <img loading="lazy" src="images/home/ios-app-development-icon.svg" alt="iOS App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>iOS App Development</h3>
						</div>
						<div class="services-text-div">
							<p>With AppsNation, you can get scalable and safe iOS app development in Qatar. Our Swift-based applications for iPhones, iPads, and other devices provide seamless user experiences and are in perfect alignment with your company's objectives.</p>
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
							 <img loading="lazy" src="images/home/cross-platform-app-development-icon.svg" alt="Cross Platform App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Cross-Platform App Development</h3>
						</div>
						<div class="services-text-div">
							<p>AppsNation offers cross-platform app development in Qatar using React Native.  We build high-quality apps for Android and iOS, saving time and cost while delivering a unified user experience.</p>
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
							 <img loading="lazy" src="images/home/game-app-development-icon.svg" alt="Game App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Game App Development</h3>
						</div>
						<div class="services-text-div">
							<p>Leading game app development in Qatar starts here.  AppsNation creates immersive games using Unity, Unreal, and CryEngine, bringing dynamic and engaging gaming experiences to life across platforms.</p>
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
							 <img loading="lazy" src="images/home/web-app-development-icon.svg" alt="Web App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Web App Development</h3>
						</div>
						<div class="services-text-div">
							<p>With our Qatari web app development, you can increase your online presence. AppsNation builds secure, scalable, and fast web applications with real-time features to enhance business performance and user engagement.</p>
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
							 <img loading="lazy" src="images/home/wearable-app-development-icon.svg" alt="Wearable App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>Wearable App Development</h3>
						</div>
						<div class="services-text-div">
							<p>Stay ahead with wearable app development in Qatar by AppsNation.  We design responsive, real-time apps for smartwatches and fitness devices to support modern, mobile lifestyles and smarter decisions.</p>
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
							 <img loading="lazy" src="images/home/ar-app-development-icon.svg" alt="AR App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>AR App Development</h3>
						</div>
						<div class="services-text-div">
							<p>Experience innovation with AR app development in Qatar.  AppsNation crafts interactive, augmented reality apps that enhance customer engagement and deliver immersive, next-level brand experiences.</p>
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
							 <img loading="lazy" src="images/home/vr-app-development-icon.svg" alt="VR App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>VR App Development</h3>
						</div>
						<div class="services-text-div">
							<p>Take users beyond reality with VR app development in Qatar.  AppsNation builds realistic, interactive virtual environments using Unity 3D and Vuforia to boost engagement in gaming, training, and more.</p>
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
							 <img loading="lazy" src="images/home/mr-app-development-icon.svg" alt="MR App Development" class="img-fluid" width="100%" height="100%">
						</div>
						<div class="service-heading">
							<h3>MR App Development</h3>
						</div>
						<div class="services-text-div">
							<p>AppsNation leads MR app development in Qatar, building mixed-reality solutions that merge digital and physical worlds.  ideal for businesses looking for digital interaction that is more immersive and cutting-edge.</p>
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

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading text-center">
					<div data-text="Partners" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">We partner with  <span>the world's leading</span> technology companies. Reach out to us!</h2>
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

<!--Start Portfolio-->
<section class="portfolio-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 fadeIn">
				<div class="common-heading">
					<div data-text="Our Portfolio" class="light-bg-text bg-text text-center">
						<h2 class="mb20 text-center">View our newest collection of creative work.</h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="container pb-5">
		<ul class="nav nav-pills justify-content-center fadeIn" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="pill" href="#app">App</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#web">Web</a>
			</li>
		</ul>
		<div class="tab-content mt-5 wow fadeIn">
			<div id="app" class="tab-pane active">
				<div class="row mt60">
					<div class="col-lg-12 col-sm-12 wptbb">
						<div class="pbwide shadow bg-gradient1">
							<div class="portfolio-item-info-tt">
								<div class="logowide mb20">
									 <img loading="lazy" src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Mobile App Development</span>
								</div>
								<h3 class="mt30 mb30">Gym App Development</h3>
								<p class="mb30">AppsNation offers custom gym app development in Qatar, featuring personalised workout plans, live coaching, and progress tracking.  Designed for modern fitness enthusiasts, our gym apps help users achieve their health goals with real-time support and interactive features that enhance motivation.</p>
								<ul class="info-list-ul">
									<li>Custom Workouts</li>
									<li>Premium Plans (In-App)</li>
									<li>Smart Reminders</li>
									<li>Meal & Nutrition Plans</li>
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
											 <img loading="lazy" src="images/home/gym-app.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
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
									 <img loading="lazy" src="images/case-studies/real-estate-logo.webp" alt="Real Estate App" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Mobile App Development</span>
								</div>
								<h3 class="mt30 mb30">Real Estate Application</h3>
								<p class="mb30">AppsNation provides advanced real estate app development in Qatar that includes IDX-based property searches, MLS listings, and virtual tours. Our apps simplify property browsing with smart filters and intuitive design, giving users instant access to listings and a competitive edge in the market.</p>
								<ul class="info-list-ul">
									<li>3D Virtual Tours</li>
									<li>Mortgage Calculator</li>
									<li>IDX Listings</li>
									<li>Secure In-App Payments</li>
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
											 <img loading="lazy" src="images/home/real-estate-app.webp" alt="Real Estate App" class="img-fluid" width="100%" height="100%">
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
									 <img loading="lazy" src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Gym Web Development</h3>
								<p class="mb30">More than just a fitness platform, our gym web solution acts as a personal trainer, nutritionist, and coach—all in one.  With a sleek interface, it includes features like content management, user management, bookings, and promotions to streamline operations and boost client engagement.</p>
								<ul class="info-list-ul">
									<li>Content Management</li>
									<li>User Management</li>
									<li>Booking System</li>
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
											 <img loading="lazy" src="images/home/gym-web.webp" alt="Gym Web" class="img-fluid" width="100%" height="100%">
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
									 <img loading="lazy" src="images/case-studies/real-estate-logo.webp" alt="Real Estate Web" class="img-fluid" width="100%" height="100%">
								</div>
								<div class="widebloktag">
									<span class="text-white">UI/UX Design</span>
								</div>
								<div class="widebloktag mt-4">
									<span class="text-white">Website Development</span>
								</div>
								<h3 class="mt30 mb30">Real Estate Web Development</h3>
								<p class="mb30">Avenue is your all-in-one real estate web solution for seamless property buying and selling. With an intuitive dashboard, it offers powerful features like property management, mortgage tools, and user management—designed to simplify operations and enhance the digital property experience.</p>
								<ul class="info-list-ul">
									<li>Dashboard</li>
									<li>Properties Management</li>
									<li>Mortgage Tools</li>
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
											 <img loading="lazy" src="images/home/real-estate-web.webp" alt="Real Estate Web" class="img-fluid" width="100%" height="100%">
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

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div data-text="Awards" class="dark-bg-text bg-text text-center">
						<h2 class="text-white">We're the top <span>mobile app developers</span> in Qatar, and we're thrilled to be at number one!</h2>
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

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our Proven <span>Mobile App Development</span> Process in Qatar</h2>
					</div>
					<p>Qatar AppsNation takes a simple and adaptable approach to developing Android apps for its clients, all while keeping a clear focus on delivering real, noticeable outcomes.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">We begin by analysing your app’s purpose, audience, and technical needs.  From feature planning to UX/UI wireframes, we ensure smooth functionality, scalability, and energy efficiency—laying the foundation for a user-friendly, high-performance app optimised for success.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">Deliveries are accelerated, and new ideas are sparked by our cloud-based, agile development method. With a focus on market-ready solutions, our strategies turn ideas into functional, scalable apps that are built to compete and grow in today’s fast-moving digital environment.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">We design intuitive, cross-device UI/UX experiences.  With user flow wireframes and collaborative input, our team translates your vision into sleek, responsive designs that are both visually appealing and functionally seamless—tailored to your business needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">Using robust architectures, we construct secure, scalable applications from front to back. Databases, application programming interfaces (APIs), and integrations are handled by our team to guarantee the app's flawless operation and an efficient user experience.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">Our process is centred on quality. Our QA team performs in-depth testing to catch bugs, ensure security, and optimize performance.  We test each function to make sure your app is ready for the market and stable.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">We conduct final testing and optimize infrastructure for scalability prior to launch. From server configuration to database tuning, we prepare every element to deliver a smooth user experience and ensure high performance after deployment.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Let's Work Together-->
<div class="row justify-content-center hire-developer hire-developer-app-development">
	<div class="col-lg-7">
		<div class="free-cta-title v-center wow fadeIn">
			<p class="text-center text-lg-start text-white">Where <span>Promises</span><br> Meet Excellence</p>
		</div>
		<div class="hire-developer-img d-none d-xl-block">
			 <img loading="lazy" src="images/locations/qatar/hire-developer.webp" alt="Hire Developer" class="img-fluid" width="auto" height="auto">
		</div>
	</div>
</div>
<!--End Let's Work Together-->

<!--Start Services-->
<section class="services-section mb-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn text-center">
					<div data-text="Services" class="light-bg-text bg-text mt-5 text-center">
						<h2>Services We <span>Offer</span> in Qatar</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel owl-theme services-carousel">
					<div class="item">
						 <img loading="lazy" src="images/locations/services/mobile-app-development.webp" alt="Mobile App Development" class="img-fluid" width="100%" height="100%">
						<div class="text">
							<h3>Mobile App Development</h3>
							<a href="{{url('/mobile-app-development')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						 <img loading="lazy" src="images/locations/services/web-portal-development.webp" alt="Mobile App Development" class="img-fluid" width="100%" height="100%">
						<div class="text">
							<h3>Web Portal Development</h3>
							<a href="{{url('/web-portal-app-development')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						 <img loading="lazy" src="images/locations/services/xr-app-development.png" alt="Mobile App Development" class="img-fluid" width="100%" height="100%">
						<div class="text">
							<h3>XR Development</h3>
							<a href="{{url('/xr-app-development')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						 <img loading="lazy" src="images/locations/services/connected-devices.webp" alt="Mobile App Development" class="img-fluid" width="100%" height="100%">
						<div class="text">
							<h3>Connected Devices</h3>
							<a href="{{url('/connected-devices')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
					<div class="item">
						 <img loading="lazy" src="images/locations/services/design-and-animation-services.webp" alt="Mobile App Development" class="img-fluid" width="100%" height="100%">
						<div class="text">
							<h3>Design & Animation Services</h3>
							<a href="{{url('/design-and-animation')}}" class="btn btn-light text-black">Read More <i class="fa-solid fa-arrow-right ps-2"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Services-->

<!--Start About-->
<section class="qatar-partner pt60 pb60 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Partner" class="light-bg-text bg-text">
						<h2 class="text-white">Team up with a Top-Tier <span class="flup-theme">Mobile App Development</span> Firm in Qatar</h2>
					</div>
					<p class="text-white">Join the ranks of hundreds of Qatar-based businesses that rely on AppsNation. We've not only met but surpassed expectations, and we're ready to do the same for you. Share your business needs with us, and our team of experts will develop cutting-edge, scalable mobile applications to drive your company's growth.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn mt-3 py-2 px-3">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Let's Work Together-->
<div class="row py-5 justify-content-center hire-developer">
	<div class="col-lg-8">
		<div class="free-cta-title v-center wow fadeIn">
			<div class="row justify-content-center">
				<div class="col-lg-8 my-auto">
					<p class="text-center text-lg-start">Need a <span>developer</span> working just for you? Let's find one.</p>
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
<!--End Let's Work Together-->

<!--Start Testinomial-->
<section class="testimonials-section-app pt100 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <div data-text="Testimonials" class="dark-bg-text bg-text text-center">
                        <h2 class="text-white">Here's what <span>Our Clients</span> have to say about AppsNation:
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
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-md-0">
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

<!--Start Solutions-->
<section class="solutions-section py-5">
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn text-center">
					<div data-text="Solutions" class="light-bg-text bg-text mt-5 text-center">
						<h2><span>Innovative Solutions</span> Delivered by a Leading Custom <span>Mobile App Development</span> Company in Qatar</h2>
					</div>
				</div>
			</div>
		</div>
    </div>
	<div class="row">
		<div class="col-12">
			<div class="owl-carousel owl-theme solutions-carousel">
				<div class="item booking-app-bg">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								 <img loading="lazy" src="images/locations/booking-app/booking-app-1.webp" alt="Booking App" class="img-fluid d-block mx-auto" width="100%" height="100%">
							</div>
							<div class="col-lg-6 my-auto">
								<h3 class="mb-4 text-white">Booking App</h3>
								<p class="text-white">Make your journey smooth and stress-free with Travelicious, our innovative app designed for travel worldwide. It's more than just an app; it's your go-to partner for an effortless travel experience tailored to the modern adventurer.</p>
								<a href="{{url('/case-studies/travel-agency-app')}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item fitness-app-bg">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								 <img loading="lazy" src="images/locations/fitness-app/fitness-app-1.webp" alt="Fitness App" class="img-fluid d-block mx-auto" width="100%" height="100%">
							</div>
							<div class="col-lg-6 my-auto">
								<h3 class="mb-4 text-white">Fitness App</h3>
								<p class="text-white">Meet Gymnasium, our brand new fitness app that's designed to be your ultimate workout buddy! With its stylish and contemporary interface, it's here to keep you on track with your health goals, training schedules, and overall drive to stay fit and healthy.</p>
								<a href="{{url('/case-studies/gym-app')}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item loyalty-app-bg">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								 <img loading="lazy" src="images/locations/loyalty-app/loyalty-app-1.webp" alt="Loyalty App" class="img-fluid d-block mx-auto" width="100%" height="100%">
							</div>
							<div class="col-lg-6 my-auto">
								<h3 class="mb-4 text-white">Loyalty App</h3>
								<p class="text-white">From the latest trends to timeless classics, our all-in-one e-commerce and loyalty app is your go-to destination. Trusted by millions, it provides customers with exclusive deals and cashback rewards. Your favourite stores are now just a tap away.</p>
								<a href="{{url('/case-studies/loyalty-app')}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item mover-app-bg">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								 <img loading="lazy" src="images/locations/mover-app/mover-app-1.webp" alt="Mover App" class="img-fluid d-block mx-auto" width="100%" height="100%">
							</div>
							<div class="col-lg-6 my-auto">
								<h3 class="mb-4 text-white">Mover App</h3>
								<p class="text-white">Our Mover App takes the stress out of moving by handling every aspect of your moving orders in one place. With our app, you can easily book your move and then sit back and relax, knowing that it offers streamlined order management and excellent customer interaction</p>
								<a href="{{url('/case-studies/mover-app')}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item real-estate-app-bg">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								 <img loading="lazy" src="images/locations/real-estate-app/real-estate-app-1.webp" alt="Real Estate App" class="img-fluid d-block mx-auto" width="100%" height="100%">
							</div>
							<div class="col-lg-6 my-auto">
								<h3 class="mb-4 text-white">Real Estate App</h3>
								<p class="text-white">Discover the new way to navigate the world of real estate! Our app simplifies the entire process, whether you're looking to buy, sell, or invest. It's designed to give you an edge in today's market with smooth, user-friendly solutions.</p>
								<a href="{{url('/case-studies/real-estate-app')}}" class="btn-outline lnk mt30">View Case Study
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="counter" class="owl-counter"></div>
		</div>
	</div>
</section>
<!--End Solutions-->

<!--Start Industries-->
<section class="industries-section py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag text-center">
					<div data-text="Our Industries" class="light-bg-text bg-text">
						<h2>Get in Touch: <span>Industries</span> We Work With in Qatar</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 wow fadeIn">
				<a href="{{url('/advertising')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/advertising.webp" alt="Advertising" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Advertising</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-md-0 wow fadeIn">
				<a href="{{url('/automative-and-transport')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/automative-and-transport.webp" alt="Automative and Transport" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Automative and Transport</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-lg-0 wow fadeIn">
				<a href="{{url('/ecommerce-and-retail')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/ecommerce-and-retail.webp" alt="Ecommerce and Retail" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Ecommerce and Retail</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0 wow fadeIn">
				<a href="{{url('/education')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/education.webp" alt="Education" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Education</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/financial-software-development')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/financial-software-development.webp" alt="Financial Software Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Financial Software Development</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/gaming-and-leisure')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/gaming-and-leisure.webp" alt="Gaming and Leisure" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Gaming and Leisure</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/healthcare-and-life-science')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/healthcare-and-life-science.webp" alt="Healthcare and Life Science" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Healthcare and Life Science</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/media-and-entertainment')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/media-and-entertainment.webp" alt="Media and Entertainment" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Media and Entertainment</h3>
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/real-estate-and-property')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/real-estate-and-property.webp" alt="Real Estate and Property" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Real Estate and Property</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/software-and-high-tech')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/software-and-high-tech.webp" alt="Software and High Tech" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Software and High Tech</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/sports-teams-and-leagues')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/sports-teams-and-leagues.webp" alt="Sports Teams and Leagues" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Sports Teams and Leagues</h3>	
					</div><div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 wow fadeIn">
				<a href="{{url('/travel-and-hospitality')}}" class="industries-link">
					<div class="industries-image">
						 <img loading="lazy" src="images/industries/travel-and-hospitality.webp" alt="Travel and Hospitality" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="industries-text">
						<h3 class="text-center text-white text-center">Travel and Hospitality</h3>	
					</div>
					<div class="industries-links">
						<i class="fa-solid fa-circle-arrow-up-right"></i>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
<!--End Industries-->

<!--Start Let's Connect-->
<div class="lets-connect">
	<div class="row justify-content-center pt50 pb50">
		<div class="col-12">
			<div class="container">
				<div class="free-cta-title v-center wow fadeIn">
					<h3 class="text-center text-lg-start text-white">Get help from our skilled mobile app development company in Qatar. Let's get in touch!</h3>
				</div>
				<div class="lets-connect-img d-none d-xl-block">
					 <img loading="lazy" src="images/locations/let-connect-image.webp" alt="Hire Developer" class="img-fluid" width="auto" height="auto">
				</div>
			</div>
			
		</div>
	</div>
</div>

<!--End et's Connect-->

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
								<p class="text-center pt-2">We develop custom mobile and web applications using the latest technologies.  In order to assist you in achieving digital success with powerful and dependable software products, our solutions are tailored to your business objectives and place an emphasis on performance, scalability, and user experience.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/apple-logo.webp" alt="iOS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">iOS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/android-logo.webp" alt="Android Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Android</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/flutter-logo.webp" alt="Flutter Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Flutter</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/ionic-logo.webp" alt="Ionic Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Ionic</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/swift-logo.webp" alt="Swift Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Swift</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/kotlin-logo.webp" alt="Kotlin Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Kotlin</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/objective-c-logo.webp" alt="Objective C Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Objective C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">React Native</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/google-fit-sdk.webp" alt="Google Fit SDK Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Google Fit SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/xcode-logo.webp" alt="XCode Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">XCode</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/node-red-logo.webp" alt="Node-Red Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Node-Red</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/graphql-logo.webp" alt="Graph QL Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Graph QL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/grafana-logo.webp" alt="Grafana Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Grafana</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/tensorflow-logo.webp" alt="Tensor Flow Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Tensor Flow</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/tableau-logo.webp" alt="Tableau Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Tableau</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/android-sdk-logo.webp" alt="Android SDK Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Android SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/apache-kafka-logo.webp" alt="Apache Kafka Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Apache Kafka</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/android-studio.webp" alt="Android Studio Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Android Studio</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/xamarin-native-c-logo.webp" alt="Xamarin Native C Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Xamarin Native C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/amazon-sumerian-logo.webp" alt="Amazon Sumerian Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Amazon Sumerian</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/apache-hadoop-logo.webp" alt="Apache Hadoop Logo" class="tech-logo"width="auto" height="auto">
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
								<p class="text-center pt-2">Using cutting-edge tools and frameworks, our frontend development team creates responsive interfaces that are appealing to the eye. We focus on making user experiences that are fun, easy to use, interactive, and optimized for all devices. This helps businesses easily get more customers and keep them coming back.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/angular-logo.webp" alt="Angular Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Angular JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">React JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/html-logo.webp" alt="HTML Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">HTML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/css-logo.webp" alt="CSS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">CSS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/js-logo.webp" alt="JavaScript Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">JavaScript</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/next-js-logo.webp" alt="Next JS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Next JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/json-logo.webp" alt="JSON Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">JSON</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/rest-logo.webp" alt="Rest Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Rest</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/soap-logo.webp" alt="Soap Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Soap</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/xml-logo.webp" alt="XML Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">XML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/spark-ml-logo.webp" alt="Spark ML Logo" class="tech-logo" width="auto" height="auto">
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
								<p class="text-center pt-2">We provide robust database development services using secure, scalable technologies.  Databases designed and managed by our professionals guarantee data integrity, quick access, and continuous availability, ensuring the smooth operation of your application and the protection of vital business data.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/firebase-logo.webp" alt="Firebase Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Firebase</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/sqlite-logo.webp" alt="SQLite Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">SQLite</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/core-data-logo.webp" alt="CoreData Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">CoreData</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/realm-logo.webp" alt="Realm Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Realm</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/mysql-logo.webp" alt="MySQL Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">MySQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/sql-logo.webp" alt="SQL Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">SQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/opentsdb-logo.webp" alt="OpenTSDB Logo" class="tech-logo" width="auto" height="auto">
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
								<p class="text-center pt-2">Backend systems that power your applications quickly and reliably are our area of expertise. From APIs to server logic, we ensure seamless integration, security, and performance, enabling smooth automation and dependable user interactions across all platforms.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/php-logo.webp" alt="PHP Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">PHP</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/java-logo.webp" alt="Java Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Java</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/node-js-logo.webp" alt="Node JS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Node JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/python-logo.webp" alt="Python Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Python</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/c-sharp-logo.webp" alt="C# Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">C#</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/c++-logo.webp" alt="C/C++ Logo" class="tech-logo" width="auto" height="auto">
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
								<p class="text-center pt-2">Custom content management systems are available as part of our CMS development services, making it simple to create, edit, and organise digital content. You will be able to manage your website without having to deal with any technical jargon thanks to the adaptable platforms we create.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/wordpress-logo.webp" alt="WordPress Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">WordPress</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/magento-logo.webp" alt="Magento Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Magento</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/shopify-logo.webp" alt="Shopify Logo" class="tech-logo" width="auto" height="auto">
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
								<h3 class="text-center">Infra and Devops Development</h3>
								<p class="text-center pt-2">Our infrastructure and DevOps team builds scalable deployment environments using CI/CD pipelines and automation.  We assist businesses in delivering apps more quickly while also improving their reliability, security, and performance. As a result, your system will function effectively regardless of the workload or demand.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/aws-logo.webp" alt="AWS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">AWS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/azure-logo.webp" alt="Azure Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Azure</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										 <img loading="lazy" src="images/tech/google-cloud-logo.webp" alt="Google Cloud Logo" class="tech-logo" width="auto" height="auto">
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

<!-- Start Hire Developers -->
<section class="hire-developers py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-xl-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2 class="text-white">Need <span>Custom IT Solutions</span>? Hire Skilled Developers for Tailored Projects.</h2>
					</div>
					<!--<p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
					<p class="pt-2 text-white">We offer the most innovative and unique mobile app development services in Qatar. Whether you need cross-platform app solutions or feature-rich and robust apps for iOS or Android, we can help you find the perfect fit. We offer customised mobile apps that cater to your business needs and enhance your brand to forge user engagement in the thriving tech landscape of Qatar. What are you waiting for? Contact us today to spur growth in your business.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-xl-6 mt-3">
				<div class="row scroller">
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/unity-logo.webp" class="img-fluid d-block mx-auto" alt="Unity" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Unity</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-sm-0">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/unreal-engine-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Unreal Engine</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-lg-0">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/wordpress-logo.webp" class="img-fluid d-block mx-auto" alt="WordPress" width="auto" height="auto">
								<!-- <p class="text-center pt-2">WordPress</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/php-logo.webp" class="img-fluid d-block mx-auto" alt="PHP" width="auto" height="auto">
								<!-- <p class="text-center pt-2">PHP</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/angular-logo.webp" class="img-fluid d-block mx-auto" alt="Angular" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Angular JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/c++-logo.webp" class="img-fluid d-block mx-auto" alt="C++" width="auto" height="auto">
								<!-- <p class="text-center pt-2">C++</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/blender-logo.webp" class="img-fluid d-block mx-auto" alt="Blender" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Blender</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/python-logo.webp" class="img-fluid d-block mx-auto" alt="Python" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Python</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/node-js-logo.webp" class="img-fluid d-block mx-auto" alt="Node Js" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Node JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/photon-logo.webp" class="img-fluid d-block mx-auto" alt="Photon" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Photon</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/react-native-logo.webp" class="img-fluid d-block mx-auto" alt="React Native" width="auto" height="auto">
								<!-- <p class="text-center pt-2">React Native</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/js-logo.webp" class="img-fluid d-block mx-auto" alt="JS" width="auto" height="auto">
								<!-- <p class="text-center pt-2">JavaScript</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/html-logo.webp" class="img-fluid d-block mx-auto" alt="HTML" width="auto" height="auto">
								<!-- <p class="text-center pt-2">HTML</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/laravel-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
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

<!--Start Clients-->
<section class="py-5 bg-gradient3 client">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading">
					<div data-text="Clients" class="light-bg-text bg-text text-center">
						<h2 class="mb30 text-center">Some of Our <span>Clients</span></h2>
						<p>Trusted by startups, enterprises, and global brands for delivering reliable and innovative digital solutions.</p>
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
								 <img loading="lazy" src="uploads/{{$item['image']}}" alt="{{$item['alt']}}" class="img-fluid d-block mx-auto" width="auto" height="auto">
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
 

<!-- Start FAQS-->
<section class="faq-section py-5">
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
								Will you sign an NDA to secure my Android app concept in Qatar?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we sign an NDA to ensure that your Android application will be kept confidential during the entire development process and even after it is completed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How do you assign Android app developers in Qatar?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We gather information about your business niche and determine relevant competitors within the industry, which enables us to configure a team of Android developers and UI/UI designers, as well as other specialists suitable for your Qatari business.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								Which tools do you utilize for Android app development in Qatar?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>For the development of scalable and secure applications, we use advanced market tools such as Android Studio, Kotlin, Java, Firebase, AWS, ARCore, and Google Fit.</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide Android app support services for data after launch in Qatar?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Sure thing! In Qatar, we provide a 3-month bug-fixing plan free of charge whereby we will monitor performance and implement necessary changes as guided by users feedback</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								What Are The Charges Of Developing An Android Application In Qatar?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>In Qatar, the costs associated with developing an Android app differ based on its features and functionality. A basic-level application could be developed for around QAR 18,000 (roughly $5,000), whereas more sophisticated applications that include API integrations and user panels would cost a lot more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								Why Would Any Qatari Professional Or Business Consider An Android App Development Service?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Mobile usage is prevalent in Qatar; thus, providing businesses with Android apps allows companies to enhance customer engagement, digitally reach out to their audiences and drive sales through tailored mobile touches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								What Steps Do You Include In The Android Development Services For Your Clients From Qatar?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We have structured our agile process, which comprises requirement gathering, wireframe creation, UI/UX design, coding, quality assurance testing, application deployment and post-launch services, to cater specifically to Qatar’s market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								How May I Obtain The Services Of Your Team Working As Android Application Developers Based In Qatar?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>By chatting with us directly or completing the quote form with project details, you can get immediate consultations on hiring dedicated Android developers based in Qatar.</p>
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