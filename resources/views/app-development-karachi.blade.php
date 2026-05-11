@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 karachi-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-12 col-xl-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Mobile App Development Company in Karachi</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Hello and welcome to AppsNation, a leading mobile app development firm nestled in the heart of Karachi, Pakistan! We specialize in bringing your digital visions to life, whether it's for iOS, Android, IoT, AR/VR, gaming, cross-platform, wearable tech, or even eCommerce. Our team, a blend of creative minds and detail-oriented experts, is dedicated to crafting unique and powerful mobile solutions tailored precisely to your business's unique requirements. We're with you every step of the way, from development and rigorous quality assurance testing to providing expert design consultations. Consider AppsNation your go-to partner for transforming your innovative concepts into captivating digital experiences. Let's collaborate and forge the future together!</p>
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
						<h2>Top<span class="flup-theme"> Mobile App Development</span><br> Company in Karachi</h2>
					</div>
					<p>AppsNation, a top-tier mobile app development company located in Karachi, caters specifically to the business world. Our mission is to help startups, individual entrepreneurs, founders, investors, and small to medium-sized businesses reach their revenue objectives using mobile apps – faster, smarter, and more efficiently. We've spent years sharpening our technical skills in the industry, but we've also built a strong team, streamlined our processes, and put in place policies that make us 100% more reliable and 10 times faster than your typical mobile app developers in Karachi.</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					 <img loading="lazy" src="images/locations/karachi/karachi.webp" alt="Karachi" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About-->
<section class="karachi-about pt60 pb60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2 class="text-white">Elevate your business to greater success with our <span class="flup-theme">mobile app</span> designed for growth Development Company in Karachi</h2>
					</div>
					<p class="text-white">In Karachi, where 96% of the population uses smartphones and 84% of businesses see mobile apps as vital for their operations, it's simply not possible to lag behind. Investing in mobile app development in Karachi is essential to keep up with the digital times. Partner with a leading mobile app development company in Karachi, and they'll transform your unique business needs into innovative solutions, setting you apart as an industry front-runner.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn">
				 <img loading="lazy" src="images/locations/rome/scale-your-business.webp" alt="Scale Your Business" class="img-fluid" width="100%" height="100%">
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
						<h2>Mobile Application Development Services in <span>Karachi</span></h2>
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
							<p>Here at AppsNation, we leverage Kotlin and Java to craft distinctive Android applications. These apps boast interfaces that are not only visually engaging but also exceptionally responsive. Based in Karachi, we deliver Android app development services that cater to businesses seeking cost-effective solutions. Our focus is on creating features that elevate customer experiences, fostering those all-important return visits.</p>
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
							<p>Our iOS app development services in Karachi are designed to lead the way, giving you the push you need to grow your business. We use Swift's speed and innovative frameworks to create a safe, reliable, and flexible UI/UX design for iPhones, iPads, and Macs, including those that run Apple TV and Apple Watch. </p>
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
							<p>We create high-quality apps that work seamlessly across many different devices, helping you reach more people without breaking the bank. Using tools such as React Native, our apps are not only interactive and full of features but also cost-effective and deliver excellent performance, no matter what device they're used on.</p>
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
							<p>Are you a gaming enthusiast? We are too! We're thrilled to unveil our top-notch gaming app development services right here in Karachi. Here at AppsNation, we're brilliant at creating massive, captivating, and interactive open-world games that push the limits of what's possible in gaming. We turn gaming dreams into reality by using robust engines like CryEngine, Unreal, and Unity.</p>
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
							<p>Give your business a boost with our flexible, constantly evolving, and top-notch web app development services. Our cutting-edge web solutions enhance user engagement through push notifications and WebSockets, providing you with a robust web app development journey tailored to your business's ever-shifting needs.</p>
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
							<p>We're pioneering innovation by creating top-tier apps for wearables. Our development team focuses on designing smart, engaging apps that bring real-time updates directly to your wrist. We're genuinely pushing the boundaries of wearable app development, and doing it exceptionally well.</p>
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
							<p>With our top-notch AR app creation, you can empower your company. Through our advanced augmented reality app development, we revolutionize digital interactions by crafting lifelike, immersive experiences that set new standards for user engagement.</p>
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
							<p>Imagine a world where your dreams and reality blend seamlessly together. If you're looking to offer your users an unparalleled VR experience, you should explore our virtual reality app services in Karachi. We specialize in creating hyper-realistic environments, allowing you to experience a truly immersive and realistic difference.</p>
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
							<p>We're all about pushing mixed reality forward, creating richer augmented experiences than ever before. We're reshaping the Metaverse, making room for more sophisticated digital interactions that open up countless opportunities in virtual worlds for businesses, creators, and communities.</p>
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
						<h2 class="text-white">We team up with the  globe's <span>Leading Technology</span> companies</h2>
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
						<h2 class="mb20 text-center">Check out our newest creative projects!
						</h2>
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
								<p class="mb30">Your perfect fitness companion, offering personalized workouts and dynamic training. Our interactive gym app is designed with Karachi's modern users in mind, delivering bespoke exercise routines and live coaching to help you accurately and effectively achieve your fitness goals.</p>
								<ul class="info-list-ul">
									<li>Customized workout plans</li>
									<li>In-app purchases are available for premium plans</li>
									<li>Clever Reminders</li>
									<li>Nutrition and Meal Planning</li>
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
								<p class="mb30">Our goal is to ensure that our real estate project integrates seamlessly with the widely used MLS systems, guaranteeing accurate property listings. Additionally, we want to confirm that the system is very easy to use on mobile devices, maintain top-notch security, and simplify property searches with an intuitive, user-friendly design.</p>
								<ul class="info-list-ul">
									<li>Map-Based Search</li>
									<li>Virtual Tours and 3D Walkthroughs</li>
									<li>Calculators for mortgages</li>
									<li>Safe Payment Gateway</li>
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
								<h3 class="mt30 mb30">Gym Web</h3>
								<p class="mb30">We're the top-rated mobile app development company in
								Karachi, taking the number one spot!</p>
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
						<h2 class="text-white">We're the top-rated <span>mobile app development</span> company in Karachi, ranked number one</h2>
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

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our Approach to Building <span>Apps<span> in Karachi</h2>
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
					<p class="description">We create applications by considering the needs of the users and the target audience, which varies depending on the purpose of the application. We then determine the components, functionalities, and user interface design, utilizing cutting-edge technology for development. Additionally, we develop UX/UI wireframes to visualize user navigation and ensure the application is scalable and performs optimally. This approach not only attracts more users but also enhances data efficiency for power conservation.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">Our development team is really skilled when it comes to cloud-based solutions. Because of this, they can release new features much faster. We create detailed plans that focus on innovation to boost productivity and turn ideas into applications that stand out in the market.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">We put a lot of care into our wireframes to make sure they lead to excellent UI/UX designs. We strive for a harmonious balance in our designs, making them well-organized, complete, and simple to understand. If you're looking to start your mobile app project in Karachi, our experienced app development team is ready to help turn your vision into reality. We consider your specific needs to create custom app development solutions just for you.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">We're fully equipped to develop your applications, smoothly and hassle-free. The server-side and client-side structures we create are rock-solid, ensuring your users enjoy a flawless experience. We handle all the intricate technicalities, such as database management and integrating different software parts, allowing you to sit back and watch us deliver exceptional results.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">To make sure our Android app is super secure and runs without a hitch, our top-notch Quality Assurance team runs it through rigorous testing. They meticulously check every detail to ensure it's completely bug-free. Our highly skilled QA pros are experts in all areas of testing, from start to finish.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">Before we release our apps to the public, we rigorously test and refine them to ensure the best possible user experience. A crucial aspect of maintaining smooth app performance involves adjusting the underlying infrastructure, such as fine-tuning database configurations and APIs as needed to keep everything running optimally.</p>
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
			<p class="text-center text-lg-start text-white">We Keep Our Promises to <br><span>Excellence</span> </p>
		</div>
		<div class="hire-developer-img d-none d-xl-block">
			 <img loading="lazy" src="images/locations/hire-developer.webp" alt="Hire Developer" class="img-fluid" width="auto" height="auto">
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
						<h2><span>Services</span> we offer in Karachi</h2>
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
<section class="karachi-partner pt60 pb60 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Partner" class="light-bg-text bg-text">
						<h2 class="text-white">Partner with a Leading<span class="flup-theme"> Mobile App Development</span>Company in Karachi</h2>
					</div>
					<p class="text-white">Join the ranks of hundreds of Karachi businesses that rely on AppsNation. We've consistently surpassed expectations, and we're ready to do the same for you. Our team of experts is eager to hear about your business needs so we can develop cutting-edge, scalable mobile applications that drive your success.</p>
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
<!--End Let's Work Together-->

<!--Start Testinomial-->
<section class="testimonials-section-app pt100 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="common-heading text-center">
                    <div data-text="Testimonials" class="dark-bg-text bg-text text-center">
                        <h2 class="text-white">Here's how our <span>clients</span> feel about <span>AppsNation</span></h2>
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
						<h2>Here are some of the <span>challenges</span> we've successfully tackled as a top-tier custom <span>mobile app development</span> company in <span>Karachi</h2>
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
									<p class="text-white">Make your travels easy and enjoyable with Travelicious, our global, innovative app. It's more than just an app, it's a travel buddy designed for today's wanderers, ensuring a smooth and worry-free trip.</p>
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
									<p class="text-white">Meet Gymnasium, our vibrant and engaging fitness app! With its stylish, contemporary look, it's like a personal fitness companion, keeping you on track with your health goals, workout schedules, and overall wellness motivation.</p>
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
									<p class="text-white">Whether you're looking for the latest trends, timeless classics, or anything in between, our all-in-one E-commerce and Loyalty app has you covered. Trusted by millions of users, our app provides exclusive deals and cashback rewards just for shopping. Now, all your favorite stores are conveniently accessible right from your fingertips.</p>
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
									<p class="text-white">Our Mover App takes the stress out of moving by handling every aspect of your moving orders. Simply book through the app and then sit back and relax, knowing that it offers seamless order management and keeps you engaged throughout the process.</p>
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
									<p class="text-white">Imagine the future of real estate, simplified just for you. Our app is designed to make buying, selling, or investing in property a breeze. It's your go-to tool for staying ahead in the real estate market, no matter what your goals are.</p>
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
						<h2> We work with a variety of <span>Industries</span> in Karachi</h2>
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
					<h3 class="text-center text-lg-start text-white">Get Help from Our Expert Mobile App Development Company in Karachi. Let's Talk!</h3>
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
		<div class="row wow fadeIn">
			<div class="col-12">
				<div class="common-heading">
					<div data-text="Technologies" class="light-bg-text bg-text text-center">
						<h2 class="mb30 text-center"><span>Technologies</span> We Work With</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row wow fadeIn tech-row">
			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">App Development</h3>
								<p class="text-center pt-2">Our developers utilize cutting-edge technologies to create superior app development solutions.</p>
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
								<p class="text-center pt-2">To create an interactive user interface, our developers utilize all  established tools and languages that enhance user engagement  and capture their attention.</p>
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
								<p class="text-center pt-2">Our team of database specialists are skilled in crafting sturdy,  reliable database management systems. We leverage the latest  technologies to ensure your database is secure and robust.</p>
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
								<p class="text-center pt-2">Backend development is the crucial element that can prevent you from automating your system. Our backend developers employ all the latest techniques to create high-quality solutions.</p>
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
								<p class="text-center pt-2">Our CMS engineers have hands-on experience implementing specialized solutions that streamline the creation, storage, organization, editing, and publication of web content.</p>
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
								<p class="text-center pt-2">By incorporating the newest technologies and methods into our  infrastructure and DevOps, our developers boost an  organization's ability to deliver applications and services rapidly.</p>
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
						<h2 class="text-white">Our top-notch mobile app development company in <span>Karachi </span> can significantly boost your presence in the <span>market</span></h2>
					</div>
					<!--<p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
					<p class="pt-2 text-white">Look no further for Karachi's top-tier, unique mobile app development services. We provide both cross-platform solutions and robust, feature-rich apps for iOS and Android. Our custom mobile apps are crafted to fit your business's exact needs, enhance your brand, and drive user engagement within Karachi's thriving tech landscape. Why wait? Contact us today to fuel your business's expansion!</p>
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
						<h2 class="mb30 text-center">Here are a few of the folks <span>we've helped</span></h2>
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

<!-- Start Hire Developers -->
<section class="location py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2>We're Karachi's best <span>mobile app development company</span>. Let us help you expand your <span>market presence</span></h2>
					</div>
					<p class="pt-2">We're the leading mobile app developers in Karachi, celebrated for our exceptional work and affordable prices. We build high-quality, user-friendly mobile apps that fuel your growth, engage more customers, and generate substantial revenue. With our award-winning solutions and extensive industry expertise, we ensure you stay ahead of the curve.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 mt-3 mt-lg-0">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380.5933028430845!2d-73.9566717760113!3d40.67620832536594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b992569c5a3%3A0x62621967b4b600be!2sWork%20Heights%2C%20Your%20Neighborhood%20Coworking%20Company!5e1!3m2!1sen!2s!4v1735656717767!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</section>
<!-- End Hire Developers -->

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
								Will we sign an NDA to keep my Android app idea confidential?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A Non-Disclosure Agreement, or NDA, is a legal contract we use when collaborating on different projects. Its purpose is to safeguard your concepts, preventing them from being copied or disclosed to competitors.</p>
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
                                    <p>We see Resource allocation as both a craft and a systematic process. That's why we dive deep into understanding your company, your competitors, your target audience, and what makes them tick. This allows us to create an app that does its job effectively.  </p>
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
                                    <p>At AppsNation, our team of developers utilizes cutting-edge technologies and tools to build your perfect Android application.</p>
									<p class="pt-2">Mobile Frontend</p>
									<ul class="ps-5">
										<li>Xamarin Native (C#)</li>
										<li>Xamarin.Forms for Android</li>
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
										<li>Amazon WebServices (AWS)</li>
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
								How much does it cost to make an Android App?
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
								Why your company might need Android application services?
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
                                    <p>Employing the best Android developers can help you create an exceptional app that stands out and brings in a good profit. Let's look at how to find one. Developers need to be proficient in essential programming areas like syntax and basics, frameworks, multithreading and concurrency, functional programming, and generics. To speed up development, your developers should use an SDK. Make sure they're familiar with Android SDKs. They must know howtouseAndroid Studio. APIs are crucial as they connect apps to external services or applications, so the developer needs to be well-acquainted with them. Developers must understand how to work with databases to handle large amounts of data and interact with a database outside of the phone. It's important for developers to grasp the logic behind your business decisions. This understanding will help them pinpoint essential features, streamline the development process, and deliver a mobile app that fully meets your business needs.</p>
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
                                    <p>We use an agile approach to Android app development, making it as easy as possible for our clients to work with us. This process includes: - Figuring out exactly what's needed.</p>
									<ul class="ps-5">
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
								Will you assist me to upload my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>At AppsNation, we boast a team of highly skilled Android developers with extensive experience creating apps across a variety of sectors. We've brought them together to leverage their expertise and build the perfect Android app for you. On top of that, we provide our clients with some compelling advantages, including:</p>
									<ul class="ps-5">
										<li>Complimentary Consultation.</li>
										<li>ARoster of Over 50 Android Specialists.</li>
										<li>Adaptable Staffing Options.</li>
										<li>Dedicated Technical Assistance.</li>
										<li>100% Transparency.</li>
										<li>Complete Openness and Clarity.</li>
										<li>Ongoing Support Following Launch.</li>

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
                                    <p>We're super accessible, just a tap away! Click on the chat button now or ask for a free quote by filling out the form with your specific needs for your custom Android app </p>
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