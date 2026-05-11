@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 oman-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-12 col-xl-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Top Mobile App Development Company in Oman</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">AppsNation is a trusted app development company based in Oman, delivering custom mobile apps for iOS, Android, IoT, AR/VR, wearables, gaming, and eCommerce. Our expert team transforms your ideas into powerful, user-friendly digital solutions with end-to-end services from UI/UX design and development to testing and deployment.</p>
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
						<h2>Best<span class="flup-theme"> Mobile App Development</span><br> Firm in Oman</h2>
					</div>
					<p>AppsNation is a leading mobile app development company in Oman, trusted by startups, SMEs, and entrepreneurs. We develop cutting-edge, scalable apps that accelerate and optimise business expansion. With expert teams and streamlined processes, we deliver high-quality mobile solutions 10x quicker than typical developers in Oman.	 </p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					 <img loading="lazy" src="images/locations/oman/oman.webp" alt="Oman" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About-->
<section class="oman-about pt60 pb60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2 class="text-white">Grow Your Business with a Trusted <span class="flup-theme">Mobile App Development</span> Company in Oman</h2>
					</div>
					<p class="text-white">Going digital is no longer an option because 84% of businesses in Oman rely on mobile apps and 96% of people use smartphones. Partner with a top mobile app development company in Oman to turn your business ideas into powerful digital solutions and stay ahead of the competition.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn">
				 <img loading="lazy" src="images/locations/riyadh/scale-your-business.webp" alt="Scale Your Business" class="img-fluid" width="100%" height="100%">
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
						<h2>App Development Services in <span>Oman</span></h2>
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
							<p>Kotlin and Java are used by AppsNation to provide high-quality Android apps in Oman. Our apps offer responsive design, smooth navigation, and advanced features to help businesses engage users and stay competitive in the local market.</p>
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
							<p>Utilising Swift and the most recent Apple frameworks, we offer secure and dependable iOS app development in Oman. Whether it’s for iPhone, iPad, or Apple Watch, our custom iOS solutions are crafted for superior performance and user experience.</p>
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
							<p>AppsNation builds powerful cross-platform apps in Oman using React Native.  These apps run smoothly on both Android and iOS, allowing you to reach a wider audience with a single, cost-effective codebase.</p>
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
							<p>Our game development services in Oman bring your creative ideas to life using Unity, Unreal Engine, and CryEngine.  From casual games to immersive open-world experiences, we design engaging games tailored to your vision.</p>
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
							<p>We create fast, reliable, and scalable web applications in Oman to elevate your digital presence.  Our solutions include real-time features, user dashboards, and seamless integrations to support business growth.</p>
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
							<p>Our wearable app development services in Oman deliver smart, data-driven experiences for devices like smartwatches and fitness trackers. Through interactive features and real-time insights, we help you keep in touch with users.</p>
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
							<p>Explore immersive technology with our AR app development in Oman. We create augmented reality applications that enhance user engagement through interactive 3D experiences by utilising tools like ARKit and ARCore.</p>
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
							<p>AppsNation offers advanced VR app development in Oman using Unity 3D and Vuforia.  We create virtual environments that are perfect for training, real estate, education, and entertainment.</p>
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
							<p>Oman's mixed reality (MR) app development is a step into the future. We combine real and virtual elements to deliver rich, interactive experiences that drive innovation and user interaction.</p>
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
						<h2 class="text-white">We've <span>partnered</span> up with some of the <span>biggest names</span> in the tech world</h2>
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
						<h2 class="mb20 text-center">Our Latest Creative Work</h2>
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
								<h3 class="mt30 mb30">Gym App Development in Oman</h3>
								<p class="mb30">Your go-to fitness companion in Oman!  Our interactive gym app is designed for modern users seeking personalized workouts, dynamic training sessions, and expert guidance. We assist you in effectively achieving your fitness objectives through intelligent features and live coaching.</p>
								<ul class="info-list-ul">
									<li>Personalized workout plans</li>
									<li>Premium in-app features</li>
									<li>Smart fitness tracking</li>
									<li>Nutrition & meal planning</li>
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
								<h3 class="mt30 mb30">Real Estate App Development in Oman</h3>
								<p class="mb30">Our real estate app is built for Oman’s evolving property market, offering a seamless user experience and instant access to listings. It is the ultimate tool for making better decisions when buying and selling real estate, thanks to cutting-edge features like 3D tours and advanced search filters.</p>
								<ul class="info-list-ul">
									<li>Map-based property search</li>
									<li>3D virtual home tours</li>
									<li>Mortgage calculator</li>
									<li>Secure payment system</li>
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
								<h3 class="mt30 mb30">Gym Web Development in Oman</h3>
								<p class="mb30">Take your gym business online with our advanced web solution tailored for the Oman fitness industry.  It serves as a booking manager, digital trainer, and nutritionist all in one.</p>
								<ul class="info-list-ul">
									<li>Content Management</li>
									<li>User Management</li>
									<li>Bookings System</li>
									<li>Promotions Dashboard</li>
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
								<h3 class="mt30 mb30">Real Estate Web Development in Oman</h3>
								<p class="mb30">Our all-in-one real estate web solution, "Avenue", simplifies the buying and selling of properties. Designed for Oman's market, it brings a smart, scalable platform to manage listings and client interactions with ease.</p>
								<ul class="info-list-ul">
									<li>Intuitive Dashboard</li>
									<li>Property Management System</li>
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
						<h2 class="text-white">We're the top <span>mobile app</span> developers in Oman, and we're excited to be at the number one spot! Reach out to us.</h2>
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
						<h2>App <span>Development</span> Services in Oman </h2>
					</div>
					<p>AppsNation provides clients with a straightforward and flexible approach to Android app development, focusing on achieving tangible results.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">We create apps with the user in mind, tailoring them to the specific audience and purpose. We break down the necessary components, features, and user interface design, and we use cutting-edge technology to bring it all to life. We also develop UX/UI wireframes to visualise user flow and ensure the app is primed for high user volume and optimal performance, ultimately attracting more users and improving data utilisation for energy efficiency.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">We'll thoroughly analyse your business, your target audience, and your competition to create a carefully considered, results-orientated Android app development plan that's customised just for you. Our experienced mobile development experts will deliver a solution engineered to increase your conversion rates.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">Our skilled UI/UX designers craft truly captivating designs and prototypes. These are loaded with cutting-edge technology, readily scalable, and utterly reliable in delivering outstanding results. Following any necessary tweaks and improvements, the client then signs off on and completes the initial design phase.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">We create Android apps that are specifically designed to meet our customers' unique needs and demands, always following the best coding practices. We use the newest technologies and tools to make sure these apps are effective. Our apps are essential in solving our customers' difficult problems and significantly improving the value of their businesses.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">To make sure our Android app is super secure and runs without a hitch, our crack team of quality assurance pros puts it through rigorous testing, going the extra mile to ensure it's totally bug-free. Our highly skilled QA experts are on top of all the testing curveballs, from start to finish.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">After the customer has fully tested and given the green light, the app will be launched on the Google Play Store, meeting all its guidelines. AppsNation boasts extensive experience in publishing Android apps to the Google Play Store.</p>
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
			<p class="text-center text-lg-start text-white">Where Promises Meet<br> Excellence</p>
		</div>
		<div class="hire-developer-img d-none d-xl-block">
			 <img loading="lazy" src="images/locations/oman/hire-developer.webp" alt="Hire Developer" class="img-fluid" width="auto" height="auto">
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
						<h2>Services We <span>Offer</span> in Oman</h2>
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
<section class="oman-partner pt60 pb60 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Partner" class="light-bg-text bg-text">
						<h2 class="text-white">Trusted <span>Mobile App Developers</span> in Oman</h2>
					</div>
					<p class="text-white">Join hundreds of businesses across Oman that rely on AppsNation for expert mobile app development.  We are a top-rated Oman app development company that focuses on creating scalable, high-performance mobile apps that are tailored to your company's objectives. Partner with us to turn your vision into a powerful digital solution that drives real growth.</p>
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
					<p class="text-center text-lg-start">Need a developer? Let's Find You a Great Fit! </p>
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
                        <h2 class="text-white">Here's what <span>our clients</span> have to say about AppsNation:</h2>
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
						<h2>Explore our <span>cutting-edge</span> portfolio—see why we're <span>Oman’s</span> top choice for custom mobile app development.</h2>
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
								<p class="text-white">Make your journey smooth and stress-free with Travelicious, our innovative app designed for travellers worldwide. It's more than just an app; it's your go-to partner for an effortless travel experience tailored to the modern adventurer.</p>
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
								<p class="text-white">Meet Gymnasium, our brand new fitness app that's designed to be your ultimate workout buddy! With brand-new and contemporary interface, it's here to keep you on track with your health goals, training schedules, and overall drive to stay fit and healthy.</p>
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
								<p class="text-white">Our Mover App takes the stress out of moving by handling every aspect of your moving orders in one place. With our app, you can easily book your move and then sit back and relax, knowing that it offers streamlined order management and excellent customer interaction.</p>
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
						<h2>Connect with us—explore the <span>industries</span> we serve across Oman.</h2>
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
					<h3 class="text-center text-lg-start text-white">Get help from our skilled mobile app development company based in Oman. Let's get in touch!</h3>
				</div>
				<div class="lets-connect-img d-none d-xl-block">
					 <img loading="lazy" src="images/locations/let-connect-image.webp" alt="Hire Developer" class="img-fluid" width="auto" height="auto">
				</div>
			</div>
			
		</div>
	</div>
</div>

<!--End Let's Connect-->

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
								<p class="text-center pt-2">We specialise in building robust and scalable mobile and web applications using the latest technologies.  Our team ensures each app is user-centric, high-performing, and aligned with your business goals.</p>
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
								<p class="text-center pt-2">Using cutting-edge tools like Vue.js, React, and Angular, we create interfaces that are both interactive and visually appealing. Our focus is on making user experiences that flow seamlessly and keep users engaged and returning.</p>
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
								<p class="text-center pt-2">Our database developers implement secure and efficient data management systems using MySQL, MongoDB, PostgreSQL, and more. We guarantee the security, optimisation, and accessibility of your data at all times.</p>
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
								<p class="text-center pt-2">Using advanced technologies like Node.js, Laravel, Python, and others, our backend team develops robust server-side solutions. We guarantee the uninterrupted, secure, and efficient operation of your systems.</p>
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
								<p class="text-center pt-2">From WordPress to custom CMS solutions, we provide content with flexible and intuitive platforms. Content creation, editing, organisation, and publication are made simple and free of technical difficulties by our systems.</p>
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
								<p class="text-center pt-2">DevOps and infrastructure services are two of our offerings that make application deployment and scalability easier. Using tools like Docker, Kubernetes, Jenkins, and AWS, we help your team deliver faster with reduced downtime.</p>
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
						<h2 class="text-white">Need developers for your <span>custom IT projects?</span> We can help!</h2>
					</div>
					<!--<p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
					<p class="pt-2 text-white">Our mobile app development services in Oman are truly cutting-edge and    one of a kind. No matter if you're after a versatile cross-platform app or a powerful, packed-with-features application for either iOS or Android, we've got you covered. We craft bespoke mobile apps that align perfectly with your business goals, boosting your brand and capturing user attention in Oman's dynamic tech scene. So, why hesitate? Reach out to us now, and let's unlock new levels of growth for your business!</p>
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
						<h2 class="mb30 text-center">Discover some of the <span>top brands</span> and clients we've partnered with for <span>custom mobile</span> app development.</h2>
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
								Will we sign an NDA to keep my Android app idea confidential
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We use a legal contract called a Non-Disclosure Agreement (NDA) when we're collaborating on different projects. This helps us keep your concepts safe, preventing them from being copied or shared with competitors.</p>
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
                                    <p>We see resource allocation as both a creative and a systematic process. That's why we dive deep into understanding your company, your competition, your target audience, and what makes them tick. All of this research goes into creating an app that effectively achieves its goals.</p>
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
                                    <p>We build high-performance Android apps using tools like React Native, Android Studio, Firebase, AWS, and Google Cloud. Our tech stack includes ARCore, ML Kit, Google Fit, and more, ensuring your app is smart, scalable, and future-ready.</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me in uploading my Android app to the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We see getting your Android app onto Google Play as a key piece of our overall Android app development puzzle. At AppsNation, we've spent years mastering the art of launching Android apps on the Play Store, always playing by their rules.</p>
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
                                    <p>We offer a fantastic mobile app development service, complete with a free 3-month support and maintenance package. This ensures your app runs smoothly by addressing any hiccups based on user feedback, setting you up for success.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to make an Android app?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The cost of developing an Android app can vary quite a bit, mostly depending on how complex the app is. Usually, companies figure out the price by looking at how many APIs and screens the app will have. In contrast, a pretty basic app might set you back $5,000 or higher.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Why might your company need Android application services?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Businesses generally favor the Android app since it enables them to connect with a vast customer base through specialized applications, ultimately expanding their operations. Developing an Android app can assist a firm in connecting with a larger audience, driving up sales, enhancing brand reputation, and cultivating a dedicated customer following.</p>
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
                                    <p>Hiring skilled Android developers ensures your app stands out and performs well. The best developers are experts in Android SDKs, Android Studio, APIs, and databases, with strong knowledge of multithreading, frameworks, and business logic. They build apps faster, smarter, and aligned with your business goals.</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me in uploading my Android app to the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We use an agile approach to Android app development, making it as easy as possible for our clients to work with us. This process includes:</p>
									<ul class="ps-5">
										<li>Figuring out exactly what's needed.</li>
										<li>Planning the app's development.</li>
										<li>Sketching out and designing the app.</li>
										<li>Building the app.</li>
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
                                    <p>AppsNation boasts a team brimming with tech enthusiasts who are always eager to expand their knowledge and skills. In their free time, they dive into self-study, demonstrating their high level of engagement and drive. This passion fuels their desire for constant improvement, ensuring they stay abreast of the latest advancements in native Android app development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me in uploading my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>At AppsNation, our expert team of 50+ Android developers delivers high-quality apps across all industries. - Free Consultation - Flexible Hiring Models - Dedicated Technical Support  Full Transparency  3 Months Post-Launch Support We combine deep experience with reliable service to build the perfect Android app for your business.</p>
								
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
                                    <p>We're super accessible, just a tap away! Click on the chat button now or ask for a free quote by filling out the form with your specific needs for your custom Android app.</p>
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