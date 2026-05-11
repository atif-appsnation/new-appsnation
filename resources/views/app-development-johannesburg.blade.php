@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 johannesburg-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-sm-12 col-xl-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Mobile App Development Company in Johannesburg</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">AppsNation is your trusted mobile app development company in Johannesburg, delivering custom solutions across iOS, Android, IoT, AR/VR, gaming, wearables, and eCommerce platforms. Our skilled team crafts scalable, cross-platform mobile applications tailored to your business needs. From strategy and design to development and QA testing, we ensure a seamless, end-to-end app development journey. Let’s turn your innovative app idea into a powerful digital product!</p>
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
						<h2>Top<span class="flup-theme">Johannesburg's Leading <span>Mobile App Development</span> Company</h2>
					</div>
					<p>We at AppsNation give startups, entrepreneurs, investors, and SMEs all over Johannesburg the tools they need to grow faster, smarter, and more effectively by providing them with high-performance mobile apps. Our true strength lies in our expert team, agile processes, and client-focused approach, even though our technical expertise has improved over time. We are able to deliver scalable mobile solutions up to 10 times faster and with greater dependability than conventional Johannesburg development companies.</p>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					 <img loading="lazy" src="images/locations/johannesburg/johannesburg.webp" alt="Johannesburg" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About-->
<section class="new-york-about pt60 pb60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Mobile" class="light-bg-text bg-text">
						<h2 class="text-white">Grow Your Business Seamlessly with a Top <span>Mobile App Development</span> Company in Johannesburg</h2>
					</div>
					<p class="text-white">With 96% of Johannesburg's population using smartphones and 84% of businesses relying on mobile apps, going digital isn’t optional it’s essential.</p>
					<p class="text-white">Partner with Johannesburg’s trusted mobile app development experts to turn your business vision into powerful digital solutions that drive growth and set you apart in a competitive market.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn">
				 <img loading="lazy" src="images/locations/johannesburg/scale-your-business.webp" alt="Scale Your Business" class="img-fluid" width="100%" height="100%">
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
						<h2>App Development Services in <span>Johannesburg</span></h2>
						<p>In Johannesburg, are you looking for innovative and dependable mobile app development services? With cutting-edge solutions tailored to your business objectives, AppsNation has you covered.</p>
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
							<p>Using Kotlin and Java, AppsNation Johannesburg creates robust Android apps to meet your specific business requirements. Our low-cost solutions are packed with features, easy to use, and made to help customers stay with us longer.</p>
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
							<p>Using Swift and the most recent frameworks from Apple, we create iOS applications in Johannesburg that perform well. Our safe and scalable apps meet your brand's objectives and are available for the iPhone, iPad, Apple Watch, and Apple TV.</p>
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
							<p>With our cross-platform mobile app development services in Johannesburg, you can reach a wider audience. We create cost-effective, high-quality apps that work consistently across iOS and Android platforms by utilizing frameworks like React Native.</p>
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
							<p>Our Johannesburg-based game development team uses Unity, Unreal, and CryEngine to create immersive, interactive mobile games. We create engaging gaming experiences that increase user engagement and realize your creative vision.</p>
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
							<p>Our Johannesburg-based web app developers create modern, scalable, and secure web applications specifically for your business. We guarantee an engaging user experience across all devices by utilizing WebSockets, push notifications, and responsive design.</p>
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
							<p>Innovative wearable apps for smartwatches and fitness devices are created by AppsNation Johannesburg. Our real-time, user-centered solutions for healthcare, fitness, and lifestyle brands improve connectivity and interaction.</p>
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
							<p>With our advanced augmented reality app development in Johannesburg, transform user experiences. With our lifelike augmented reality applications that combine the digital and physical worlds, we assist your brand in boldly engaging users.</p>
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
							<p>For games, training, and simulation, our VR app developers in Johannesburg create highly immersive and realistic virtual environments. The VR solutions offered by AppsNation push the boundaries to create memorable digital experiences that captivate users.</p>
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
							<p>With our MR app development services in Johannesburg, you can step into the future. We create cutting-edge mixed reality experiences that enable businesses to innovate within the ever-evolving Metaverse by seamlessly integrating digital and real interactions.</p>
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
						<h2 class="text-white">We team up with the globe's top tech companies. Get in touch!</h2>
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
						<h2 class="mb20 text-center">Check out our newest, most imaginative projects!</h2>
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
								<p class="mb30">This is your ultimate fitness companion, providing you with engaging workouts tailored specifically to your needs. Our gym app is made for the active lifestyle of today in Johannesburg. It has intuitive features, personalized training plans, coaching in real time, and helps users easily reach fitness goals.</p>
								<ul class="info-list-ul">
									<li>Custom Workouts</li>
									<li>Premium Subscriptions</li>
									<li>Smart Alerts</li>
									<li>Nutrition Tracking</li>
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
								<p class="mb30">With our powerful real estate app, you can easily explore Johannesburg's real estate market. The app has advanced search tools, integration with the Multiple Listing Service (MLS), and virtual walkthroughs designed to help you locate the ideal property quickly and with confidence</p>
								<ul class="info-list-ul">
									<li>Map Search</li>
									<li>Virtual Tours</li>
									<li>Mortgage Tools</li>
									<li>Secure Payments</li>
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
								<h3 class="mt30 mb30">Gym Web App</h3>
								<p class="mb30">Gymnasium is more than just a digital trainer; it is also your all-in-one wellness companion. It makes gym operations more efficient and increases user satisfaction by providing tools for managing workouts, diet, and client engagement.</p>
								<ul class="info-list-ul">
									<li>Content Scheduling</li>
									<li>Member Management</li>
									<li>Booking System</li>
									<li>Promo Tracking</li>
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
								<h3 class="mt30 mb30">Real Estate Web App</h3>
								<p class="mb30">Meet Avenue, your all-in-one real estate web app for smooth Johannesburg property transactions. Through a sophisticated, centralized platform, effortlessly manage mortgages, users, and listings.</p>
								<ul class="info-list-ul">
									<li>Admin Dashboard</li>
									<li>Listings Manager</li>
									<li>EMI Calculator</li>
									<li>User Access Control</li>
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
						<h2 class="text-white">Ranked #1 <span>Mobile App</span> Development Company in Johannesburg</h2>
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
						<h2>Creating Apps in Johannesburg: <span>Our Process</span></h2>
					</div>
					<p>We at AppsNation offer a structured and adaptable Android app development process in Johannesburg that is designed to give your business tangible, measurable results.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">We begin by conducting in-depth research on your company's goals, audience, and rivals. This helps us define the app's architecture, user flow, and most important features. We outline a development strategy that is centered on performance and user engagement, making use of the most recent technologies. In order to enhance user satisfaction and operational efficiency, every aspect, from the UI/UX design to the functional flow, is meticulously planned.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">Cloud-based architecture and agile methodologies are the areas of expertise of our Johannesburg-based skilled developers. We are able to quickly roll out new features while maintaining high quality thanks to this. We put innovation and scalability first, so your app can keep up with the demands of the market and stay ahead of rivals in the fast-paced mobile landscape.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">The interface for your app is laid out in detail in wireframes, which are created by our design team first. The development of visually appealing, brand-aligned designs is guided by these wireframes, which ensure an intuitive user experience. We provide individualized UI/UX designs that are tailored for optimal performance and engagement in the Johannesburg market, whether you're starting a new app project or making improvements to one you already have.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">Using cutting-edge frameworks, we construct robust front- and back-end systems to guarantee the speed, dependability, and scalability of your application. We handle all technical complexities, from API integration to server-side logic and database management, so you can concentrate on running your business while we provide a seamless mobile experience.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">Every app we build goes through rigorous QA testing to ensure it's bug-free, secure, and runs smoothly on all Android devices.  Our quality assurance team, which is based in Johannesburg, uses cutting-edge software and manual testing methods to find issues early and guarantee that the app will run at its best right from the start.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">We carry out real-device testing, finalize optimizations, and ensure compliance with Google Play Store guidelines prior to going live. In order to maintain your app's scalability, responsiveness, and high performance after launch, our team provides ongoing backend maintenance—updating APIs, optimizing databases, and fine-tuning server resources.</p>
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
			<p class="text-center text-lg-start text-white">We Keep Our Promises to Excellence </p>
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
						<h2>Johannesburg <span>Services</span> Offered</h2>
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
<section class="new-york-partner pt60 pb60 mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Partner" class="light-bg-text bg-text">
						<h2 class="text-white">Partner with a Top<span class="flup-theme"> Mobile App Development </span>Company in Johannesburg</h2>
					</div>
					<p class="text-white">Join the hundreds of successful Johannesburg businesses that rely on AppsNation to develop their mobile apps. Our skilled team is prepared to turn your specific business needs into powerful, scalable mobile solutions that will propel growth, boost engagement, and provide long-term value.</p>
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
                        <h2 class="text-white">What <span> Clients</span> Say About <span>AppsNation</span></h2>
                    </div>
                    <h5 class="text-white">Trusted by over 1,200 satisfied clients and counting, AppsNation continues to deliver exceptional mobile app solutions that drive success and build long-term partnerships.</h5>
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
						<h2>Explore our <span>portfolio</span> to see why <span>Johannesburg</span> businesses trust us for top-tier custom app development.</h2>
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
									<p class="text-white">Travelicious is here to transform your travels from stressful ordeals into pure delights! This state-of-the-art app, designed for the modern-day explorer, is your ultimate travel buddy. Wherever you roam in this world, it ensures a smooth and worry-free adventure. Think of it as your personal assistant, dedicated to making your journeys absolutely seamless.</p>
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
									<p class="text-white">Meet Gymnasium, your go-to fitness app that's as lively and engaging as your workouts! With its stylish, contemporary look, it's like carrying a personal fitness guru wherever you go, ensuring you're always on track with your health goals, exercise schedules, and that extra boost to feel great and stay motivated.</p>
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
									<p class="text-white">Whether you're on the hunt for the hottest new trends, enduring classics, or a fusion of both, this app is a favorite among countless individuals. It provides you with exclusive discounts and cashback on your regular shopping. Now, accessing all your preferred stores is easier than ever, directly from your phone.</p>
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
									<p class="text-white">Our Mover App is crafted to make your moving experience entirely stress-free by handling every aspect of your moving orders. Simply book your move through the app, then sit back, confident that it will manage everything seamlessly and keep you in the loop throughout the entire process.</p>
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
									<p class="text-white">Imagine a real estate world that's simplified, designed specifically with you in mind. Our app is built to make buying, selling, or investing in property a breeze. Consider it your go-to sidekick for getting a leg up in the real estate market, no matter your goals.</p>
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
						<h2><span>Industries</span> We Work With in Johannesburg</h2>
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
					<h3 class="text-center text-lg-start text-white">Connect with our expert mobile app development team in Johannesburg — we’d love to hear from you!</h3>
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
								<p class="text-center pt-2">High-quality app development solutions that are tailored to your specific business goals and requirements are provided by our developers who make use of cutting-edge technologies.</p>
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
								<p class="text-center pt-2">Using the best tools and programming languages, we create interactive, user-friendly interfaces that engage users and enhance their experience.</p>
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
								<p class="text-center pt-2">Utilizing the most recent technologies, our database specialists create scalable, secure, and dependable database systems to optimize and safeguard your data.</p>
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
								<p class="text-center pt-2">Our team uses cutting-edge methods to create powerful and effective backend systems, which are necessary for efficient automation.</p>
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
								<p class="text-center pt-2">Our CMS developers develop custom solutions that make it easier to create, organize, edit, and publish content on a variety of digital platforms.</p>
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
								<p class="text-center pt-2">By implementing cutting-edge infrastructure and DevOps technologies, we speed up application delivery for businesses.</p>
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
						<h2 class="text-white">Looking for <span>expert developers</span> for your custom IT projects in <span>Johannesburg</span>? Connect with us today!</h2>
					</div>
					<!--<p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
					<p class="pt-2 text-white">At AppsNation, we specialize in custom mobile app development for iOS, Android, and cross-platform solutions tailored to Johannesburg businesses. Our feature-rich, user-centric apps help you stand out and engage effectively with your target audience in Johannesburg’s thriving tech market. Boost your digital presence and grow your business—contact us now to get started!</p>
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
						<h2 class="mb30 text-center">Some of <span>Our Clients</span></h2>
						<p>trusted by Johannesburg businesses for high-quality app solutions. We deliver innovative and dependable outcomes for leading brands, small and medium-sized businesses, and startups.</p>
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
								Will you sign an NDA to keep my Android app idea confidential in Johannesburg?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, at AppsNation Johannesburg, we always sign a Non-Disclosure Agreement (NDA) before starting your project.  This legal contract ensures your Android app concept stays private and protected from unauthorized use or exposure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How do you allocate resources for my Android app development project in Johannesburg?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We follow a strategic and data-driven approach by analyzing your Johannesburg-based business, target audience, and competitors.  This enables us to assign the right team of developers, designers, and project managers to deliver exceptional results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								What technologies do you use to build Android apps in Johannesburg?
                            </button>
                        </h2>
                        <div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Our Johannesburg Android app developers use top-tier tools such as Android Studio, Kotlin, Java, React Native, Firebase, AWS, ML Kit, and ARCore.  This allows us to build scalable, secure, and innovative mobile apps for South African businesses.</p>
								
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist in publishing my Android app on the Google Play Store?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Absolutely.  We take care of the entire Play Store submission process—from asset preparation to final launch—ensuring your app complies with Google’s policies and is easily accessible to users in Johannesburg and beyond.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide post-launch support for Android apps in Johannesburg?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Yes, we offer 3 months of free post-launch support and maintenance to ensure your Android app runs smoothly, adapts to user feedback, and performs well in real-world usage across South Africa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to develop an Android app in Johannesburg?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Basic Android apps typically start at ZAR 90,000 (USD $5,000) for development in Johannesburg. Pricing varies based on the number of development hours required, features, integrations, and the complexity of the design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Why should Johannesburg businesses invest in Android app development?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>With over 80% smartphone users in South Africa using Android devices, building an app helps Johannesburg businesses increase digital reach, boost brand awareness, improve customer engagement, and drive higher sales conversions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								 What should I consider when hiring Android app developers in Johannesburg?

                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Look for developers who are knowledgeable about Android SDKs, Java/Kotlin, REST APIs, UI/UX design, and integrating mobile databases. A local team that understands the South African market adds extra value to your project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								How does AppsNation stay ahead of Android development trends in Johannesburg?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Our Johannesburg development team continuously researches the latest Android frameworks, tools, and security protocols.  We implement updates, attend virtual tech events, and invest in ongoing learning to stay ahead of local and global trends.</p>
									
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								How can I hire expert Android developers in Johannesburg from AppsNation?
                            </button>
                        </h2>
                        <div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Hiring with AppsNation is simple—just contact us via live chat, or request a free consultation by submitting your app requirements.  We offer flexible engagement models to suit startups, SMEs, and enterprises across Johannesburg.</p>
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

@endsection