@extends('app.main')
@section('content')

<!--Breadcrumb Area-->

<section class="breadcrumb-areav2 about-us-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-12 col-lg-8 mt-5  order-2 order-lg-1 my-sm-auto wow fadeIn ">
				<div class="bread-inner">
					<div class="bread-title">
						<h1 class="text-white">About <span>AppsNation</span></h1>
						<p class="pt-3 text-white">AppsNation is a software and mobile app development company with a world-class team of talented data scientists, developers, designers, mathematicians, engineers, and creative artists. We are motivated to build elegant and functional digital products that solve complex problems.</p>
					</div>
				</div>
				<div class="row about-bages-slides-div">
					<div class="col-md-8">
						<div class="about-bages-slider owl-carousel owl-theme wow fadeIn">
							<div class="h-img">
								 <img loading="lazy" src="images/reviews/bark.webp" alt="">
								 <img loading="lazy" src="images/reviews/star.webp" alt="">
							</div>
							<div class="h-img">
								 <img loading="lazy" src="images/reviews/clutch.webp" alt="">
								 <img loading="lazy" src="images/reviews/star.webp" alt="">
							</div>
							<div class="h-img">
								 <img loading="lazy" src="images/reviews/designrush.webp" alt="">
								 <img loading="lazy" src="images/reviews/star.webp" alt="">
							</div>
							<div class="h-img">
								 <img loading="lazy" src="images/reviews/goodfirms.webp" alt="">
								 <img loading="lazy" src="images/reviews/star.webp" alt="">
							</div>
							<div class="h-img">
								 <img loading="lazy" src="images/reviews/sortlist.webp" alt="">
								 <img loading="lazy" src="images/reviews/star.webp" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 col-lg-4 order-1 order-lg-2 wow fadeIn">
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
							<div class="form-group mb-2 captchaContainer3" id="captchaContainer">
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
<!--End Breadcrumb Area-->

<section id="mycounterSection" class="py-5 scale-up-services-section">
	<div class="container">
		<div class="row">
			<!-- Left Content -->
			<div class="col-lg-7 col-md-12 order-2 order-lg-1 d-flex align-items-center">
				<div>
					<div data-text=" " class="light-bg-text bg-text">
						<h2> <span class="flup-theme">AppsNation</span></h2>
					</div>
					<div data-text="" class="light-bg-text bg-text">
						<h2>NOT JUST WELL-KNOWN WE’LL MAKE YOU FAMOUS</h2>
					</div>
					<p>AppsNation is a leading USA mobile app development company delivering iOS, Android, IoT, AR/VR, game, cross-platform, wearable, and eCommerce solutions. We provide QA testing and design consultancy, managing projects from idea to launch with expert teams across 50+ industries at competitive prices.</p>
					<br>
					<p>In only a few years, AppsNation has earned the agree with of a hundred businesses global. We concentrate on method, product improvement, and layout for startups and enterprises. By combining deep know-how with proven layout practices, we construct secure, remarkable mobile apps that boost up time to marketplace and reduce charges.</p>
					<div class="square mt-4">
						<a data-bs-toggle="modal" data-bs-target="#menu-popup" class="btn-br bg-btn3 bg-btn-scalup btshad-b2 lnk">Let's Connect
							<span class="circle"> </span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 text-center order-1 order-lg-2">
				<div class="wow fadeIn">
					 <img loading="lazy" src="images/about-us/a.png" width="auto" height="auto" alt="About Us" class="img-fluid block mx-auto ">
				</div>
			</div>
		</div>
		<div class="row justify-content-center   wow fadeIn  achievements-count mt-3 " style="visibility: visible; animation-name: fadeIn;">
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

<!--Start why-choose-->
<section class="why-choose-us py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading">
					<div data-text="Choose Us" class="light-bg-text bg-text">
						<h2 class="mb30">Why Choose Us</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row upset mt-lg-5">
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						 <img loading="lazy" src="images/about-us/client-first.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Client First</h3>
					<p>Clients are central to every successful business. As a leading web and mobile app development company, we go beyond expectations analyzing your vision and end-user pain points to deliver strategic solutions that drive measurable growth.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						 <img loading="lazy" src="images/about-us/effective-synergy.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-2">Effective Synergy</h3>
					<p>Effective communication way know how what’s unsaid. We frequently over-talk, ensuring readability and transparency. Our improvement team remains connected throughout all channels and time zones, fixing actual-global issues effectively.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						 <img loading="lazy" src="images/about-us/on-time-delivery.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">On Time Delivery</h3>
					<p>We don’t just promise we over-deliver. With a decade of IT software experience and robust internal frameworks, we consistently deliver high-quality solutions, avoiding errors and repeating success every time.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						 <img loading="lazy" src="images/about-us/strong-experties.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Strong Expertise</h3>
					<p>Specializing in Ruby on Rails, Angular, and React, our experts stay ahead of tech trends, delivering high-quality solutions with full ownership, efficiency, and best practices always prioritizing value over quantity.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						 <img loading="lazy" src="images/about-us/total-ownership-and-feedback-based.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Total Ownership &amp; Feedback Based</h3>
					<p>We take complete possession of every undertaking, actively incorporating remarks from clients, their customers, and stakeholders. By prioritizing input, we make certain the product stays at the right song, saving what virtually topics.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						 <img loading="lazy" src="images/about-us/results-focused.svg" alt="service" width="100%" height="100%" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Results Focused</h3>
					<p>We build digitally adaptable products that solve real-world problems with futuristic solutions. No matter the challenges, we ensure delivery, keeping your goals on track and your company’s long-term success as our priority.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End why-choose-->

<section class="vision-section py-5">
	<div class="container">
		<ul class="nav nav-pills justify-content-center mb-4 vision-tabs" id="visionTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" data-bs-toggle="pill" data-bs-target="#mission" type="button">
					Mission
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" data-bs-toggle="pill" data-bs-target="#vision" type="button">
					Vision
				</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" data-bs-toggle="pill" data-bs-target="#values" type="button">
					Values
				</button>
			</li>
		</ul>
		<div class="tab-content">
			<!-- Mission -->
			<div class="tab-pane fade show active" id="mission">
				<div class="row align-items-center g-4">
					<div class="col-lg-6">
						<h2 class="vision-title text-center text-lg-start">Our Mission</h2>
						<h3 class="vision-title text-center text-lg-start">Complete Digital Solutions Under One Roof</h3>
						<p class="vision-text text-center text-lg-start">At AppsNation, our challenge is to provide end-to-give up digital services which include App Development, Web Development, digital marketing, and many more. We construct modern, scalable, and performance-pushed solutions tailor-made to each commercial enterprise need. Our aim is to empower startups and organizations with generation that drives increase, strengthens emblem effect, and provides measurable lengthy-time period success.</p>
					</div>
					<div class="col-lg-6 text-center">
						 <img loading="lazy" src="images/about-us/mission.png" class="img-fluid vision-img" alt="Mission">
					</div>
				</div>
			</div>

			<!-- Vision -->
			<div class="tab-pane fade" id="vision">
				<div class="row align-items-center g-4">
					<div class="col-lg-6">
						<h2 class="vision-title">Our Vision</h2>
						<h3 class="vision-title">Shaping the Future Through Innovation</h3>
						<p class="vision-text">Our vision is to push the boundaries of technology and create effective digital solutions that lift businesses and local communities around the world. Our mission is to empower millions of people through innovation, enable sustainable growth opportunities, scale high-performing businesses globally, and establish a workplace culture recognized for excellence, creativity and long-term value in the digital economy.</p>
					</div>
					<div class="col-lg-6 text-center">
						 <img loading="lazy" src="images/about-us/vision.png" class="img-fluid vision-img" alt="Vision">
					</div>
				</div>
			</div>

			<!-- Values -->
			<div class="tab-pane fade" id="values">
				<div class="row align-items-center g-4">
					<div class="col-lg-6">
						<h2 class="vision-title">Our Values</h2>
						<h3 class="vision-title">Principles That Define Us</h3>
						<p class="vision-text">At AppsNation, our values shape every solution we create and every partnership we build. We believe in innovation with purpose, transparency in communication, and commitment to excellence. Collaboration, integrity, and continuous improvement drive our team to deliver measurable results while maintaining long-term relationships built on trust, accountability, and shared success.</p>
					</div>
					<div class="col-lg-6 text-center">
						 <img loading="lazy" src="images/about-us/value.png" class="img-fluid vision-img" alt="Values">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
 

<section class="my-4">
	<div class="container">
		<div class="row">
			<h3 class="my-4">Meet Our Appnation Team</h3>
			<div class="col-12">
				 <img loading="lazy" src="images/about-us/colage-about-us.png" class="img-fluid d-block mx-auto">
			</div>
		</div>
	</div>
</section>


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
 

@endsection