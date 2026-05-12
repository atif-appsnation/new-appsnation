@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 digital-marketing-banner hero-1">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="mike-shape">
		<img src="images/hero/mike-shape.png" alt="img" class="" loading="lazy">
	</div>
	<div class="arrow-shape">
		<img src="images/hero/arrow-shape.png" alt="img" loading="lazy">
	</div>
	<div class="arrow-shape-2 ">
		<img src="images/hero/arrow-shape.png" alt="img" loading="lazy">
	</div>
	<div class="energy-shape float-bob-y">
		<img src="images/hero/energy-shape.png" alt="img" loading="lazy">
	</div>
	<div class="rocket-shape">
		<img src="images/hero/rocket.png" alt="img" class="float-bob-y" loading="lazy">
	</div>
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-lg-6 col-xl-4">
				<div class="hero-content">
					<h1 class="wow img-custom-anim-right text-white" data-wow-duration="1.5s" data-wow-delay="0.2s">Best SEO & Digital Marketing Services for Small Businesses</h1>
					<p class="wow text-white" data-wow-delay=".3s">Partner with a leading digital marketing agency offering SEO services for small businesses, affordable SEO services for small business, Google Ads management, social media marketing services packages, and content creation all designed to deliver measurable growth.</p>
				</div>
			</div>
			<div class="col-lg-6 col-xl-4">
				<div class="hero-image">
					<img src="images/team/1.png" alt="img" class=" wow img-custom-anim-left"
						data-wow-duration="1.5s" data-wow-delay="0.3s" loading="lazy">
					<div class="bg-shape">
						<img src="images/hero/bg-shape.png" alt="img" loading="lazy">
					</div>
				</div>
			</div>
			<div class="col-xl-4 mt-n4 mt-lg-0">
				<div class="video-right">
					<div class="niwax23form shadow">
						<div class="common-heading text-l">
							<h2 class="mt0 mb0">Book a Free <span>Consultation</span></h2>
						</div>
						<div class="form-block contact-us-form">
							<form id="contactForm" class="contactForm" method="post" data-bs-toggle="validator"
								action="form_submit.php">
								<input type="hidden" name="_token" value="vJbHhszTSBUDasAiVb6To1mO8NuAeGYjmRD3GpQD">
								<div class="row">
									<div class="form-group col-sm-6">
										<input type="text" name="full_name" id="full_name" placeholder="Enter Full Name" required="" data-error="Please fill Out" maxlength="50" class="form-control">
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group col-sm-6">
										<input type="text" id="mobile" name="mobile" placeholder="Enter Mobile" required="" data-error="Please fill Out" maxlength="20" class="form-control">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-sm-12">
										<input type="email" name="email" id="email" placeholder="Enter Email" required="" maxlength="50" class="form-control">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12">
										<textarea id="message" name="message" rows="1" placeholder="Enter Your Message" required="" maxlength="500" class="w-100" class="form-control"></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<button type="submit" class="btn button-arounder lnk">Schedule a Call
									<i class="fas fa-chevron-right fa-icon"></i>
								</button>
							</form>
							<div id="responseMessage" class="mt-3"></div>
						</div>
					</div>
					<div class="client-items wow" data-wow-delay=".7s">
						<div class="client-logo">
							<img src="images/hero/logo.png" alt="img" loading="lazy">
						</div>
						<div class="client-img">
							<img src="images/hero/client.png" alt="img" loading="lazy">
							<div class="star-icon">
								<div class="star">
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-solid fa-star"></i>
									<i class="fa-regular fa-star"></i>
								</div>
								<span>450+ reviews</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!-- Start  Marquee -->
<div class="marquee-section-1">
	<div class="mycustom-marque style-2">
		<div class="scrolling-wrap">
			<div class="comm">
				<div class="cmn-textslide"><img src="images/reviews/clutch.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/bark.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/designrush.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/goodfirms.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sitejabber.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sortlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/techbehemoths.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustpilot.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/upcity.webp" alt="img" loading="lazy"></div>
			</div>
			<div class="comm">
				<div class="cmn-textslide"><img src="images/reviews/clutch.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/bark.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/designrush.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/goodfirms.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sitejabber.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sortlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/techbehemoths.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustpilot.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/upcity.webp" alt="img" loading="lazy"></div>
			</div>
			<div class="comm">
				<div class="cmn-textslide"><img src="images/reviews/clutch.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/bark.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/designrush.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/goodfirms.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sitejabber.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sortlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/techbehemoths.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustpilot.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/upcity.webp" alt="img" loading="lazy"></div>
			</div>
			<div class="comm">
				<div class="cmn-textslide"><img src="images/reviews/clutch.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/bark.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/designrush.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/goodfirms.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sitejabber.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/sortlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/techbehemoths.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustlist.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/trustpilot.webp" alt="img" loading="lazy"></div>
				<div class="cmn-textslide"><img src="images/reviews/upcity.webp" alt="img" loading="lazy"></div>
			</div>
		</div>
	</div>
</div>
<!-- End Marquee-->

<!-- Start Services -->
<section class="case-study-section fix section-padding">
	<div class="overlay-shape">
		<img src="images/services/digital-marketing/overlay-shape.png" alt="img" loading="lazy">
	</div>
	<div class="left-shape float-bob-x">
		<img src="images/services/digital-marketing/left-shape.png" alt="img" loading="lazy">
	</div>
	<div class="right-shape float-bob-x">
		<img src="images/services/digital-marketing/right-shape.png" alt="img" loading="lazy">
	</div>
	<div class="container">
		<div class="section-title-area">
			<div class="section-title">
				<div class="sub-title wow">
					<span>Our Services</span>
				</div>
				<h2 class="wow" data-wow-delay=".3s">Comprehensive Digital Marketing <br>Services
				</h2>
			</div>
		</div>
		<p class="mt-3 mt-md-0 wow" data-wow-delay=".5s">
			Dubai’s market rewards precision. Our agency provides AI-driven SEO services in Houston for small businesses, expert SEO consulting services, and manual link building service that combine data-driven insights with creative strategies.
		</p>
		<div class="case-study-wrapper">
			<div class="row">
				<div class="col-xxl-6 wow">
					<div class="case-study-box-items">
						<div class="thumb">
							<img src="images/services/digital-marketing/seo.webp" alt="img" loading="lazy">
							<div class="post-box-items">
								<ul>
									<li>
										<a>SEO auditing services</a>
									</li>
									<li>
										<a>Expert on-page SEO services</a>
									</li>
								</ul>
								<ul>
									<li>
										<a>White hat link building service</a>
									</li>
									<li>
										<a>Search engine marketing consulting services
										</a>
									</li>
								</ul>
							</div>
							<h3 class="project-title">
								<a>
									<img src="images/services/digital-marketing/icon.png" alt="img" loading="lazy">
									Digital Marketing
								</a>
							</h3>
							<span class="number">01</span>
						</div>
					</div>
				</div>
				<div class="col-xxl-6">
					<div class="main-box">
						<div class="box active wow">
							<div class="title-items">
								<h3>
									<a href="javascript:void(0)">SEO</a>
								</h3>
								<span class="number">02</span>
							</div>
							<span class="number-hover">02</span>
							<div class="project-content">
								<h3>SEO</h3>
								<p>Increase your website visibility with best SEO services for small business and reach your target audience effectively.</p>
							</div>
						</div>
						<div class="box bg-1 wow wow" data-wow-delay=".2s">
							<div class="title-items">
								<h3>
									<a href="javascript:void(0)">SMM</a>
								</h3>
								<span class="number">03</span>
							</div>
							<span class="number-hover">03</span>
							<div class="project-content">
								<h3>Social Media Marketing (SMM)</h3>
								<p>Engage your audience with social media management, content creation, and advertising across all platforms.</p>
							</div>
						</div>
						<div class="box bg-2  wow wow" data-wow-delay=".4s">
							<div class="title-items">
								<h3>
									<a href="javascript:void(0)">Google Ads</a>
								</h3>
								<span class="number">04</span>
							</div>
							<span class="number-hover">04</span>
							<div class="project-content">
								<h3>Google Ads</h3>
								<p>Maximize your ROI with Google Ads management services near me and Google local service ads management.</p>
							</div>
						</div>
						<div class="box bg-3 wow wow" data-wow-delay=".6s">
							<div class="title-items">
								<h3>
									<a href="javascript:void(0)">Lead Generation</a>
								</h3>
								<span class="number">05</span>
							</div>
							<span class="number-hover">05</span>
							<div class="project-content">
								<h3>Lead Generation</h3>
								<p>Generate high-quality leads through data-driven campaigns and performance marketing strategies.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-center gap-4 wow mt-4" data-wow-delay=".7s">
			<div class="main-button">
				<a href="tel:+971543589543" class="btn-br bg-btn3 btshad-b2 lnk py-2">
					<span>Call Us</span>
				</a>
			</div>
			<div class="main-button">
				<a data-bs-toggle="modal" data-bs-target="#myModal" class="btn-br bg-btn3 btshad-b2 lnk py-2">
					<span class="">Schedule A Call</span>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- End Services-->

<!-- Start Services -->
<section class="banner-box-section dm-banner-box-section p-100 text-white py-5">
	<div class="h-100 container">
		<div class="mb-4 row">
			<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-12">
				<h2>Where Creativity Meets Growth?</h2>
			</div>
		</div>
		<div class="banner-slider owl-carousel owl-theme wow fadeIn">

			<div class="banner-box-image seo-banner">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2>SEO 
							<span>(Search Engine Optimization)</span>
						</h2>
						<p>Boost your Google rankings, website traffic, and online visibility with data-driven SEO strategies designed to generate qualified leads, improve authority, and increase long-term business growth.</p>
					</div>
				</div>
			</div>
			<div class="banner-box-image content-writing-banner">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2> 
							<span> Content Marketing</span>
						</h2>
						<p>Engage your audience with high-quality content marketing that builds trust, strengthens brand authority, improves SEO performance, and drives meaningful customer engagement and conversions.</p>
					</div>
				</div>
			</div>
			<div class="banner-box-image smm-banner">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2>SMM
							<span> (Social Media Marketing)</span>
						</h2>
						<p>Grow your brand awareness and customer engagement with strategic social media marketing campaigns tailored to attract targeted audiences, increase reach, and drive measurable business results.</p>
					</div>
				</div>
			</div>
			<div class="banner-box-image advertisement-banner">
				<div class="h-100 align-items-center row">
					<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8 col-12">
						<h2> 
							<span> Advertisement</span>
						</h2>
						<p>Maximize leads, sales, and ROI with expertly managed Google Ads and Meta Ads campaigns designed for targeted reach, brand growth, local visibility, and high-converting customer acquisition.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Services -->

<!-- start Portfolio -->
<section class="container dm-portfolio-carousel">
	<div id="dmPortfolioCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
		<div class="container my-2">
			<div class="section-title-area">
				<div class="section-title">
					<div class="sub-title wow">
						<span>Our Case Studys</span>
					</div>
					<h2 class="wow" data-wow-delay=".3s">Results That Speak: <br> <span>Our Client Success Stories</span></h2>
					<p class="mt-3 mt-md-0 wow" data-wow-delay=".5s"> Discover how our AI-powered, data-driven marketing strategies helped businesses across Dubai achieve measurable growth through Meta and Google Ads campaigns optimized for performance, ROI, and lead generation. </p>
				</div>
			</div>
		</div>

		<div class="carousel-inner rounded-4 overflow-hidden">
			<div class="carousel-item active">
				<div class="row align-items-center bg-white">
					<div class="col-sm-12 col-md-12 col-lg-6 text-center p-4">
						<img src="images/services/digital-marketing/digital-marketing-portfolio-01.webp" class="img-fluid rounded-3" alt="Digital Marketing" loading="lazy">
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 p-4">
						<h4 class="pt-3 case-study-heading">How Our <span>Google Ads</span> Generated 168 Qualified Leads for AED 8M+ Luxury Properties	</h4>
						<p class="pt-3 case-study-text">Apps Nation helped a luxury real estate developer in Dubai generate 168 high-intent leads through a strategic Google Ads campaign targeting premium properties valued at AED 8 million and above. Using AI-powered audience targeting, Smart Bidding, and conversion-focused ad creatives, the campaign delivered exceptional ROI while attracting affluent property buyers in Dubai’s competitive real estate market.</p>
						<div class="stats-container my-5 md-ms-5">
							<div class="row">
								<div class="col-6 stat-item">
									<div class="stat-number">AED 129,000</div>
									<div class="stat-description">Total Spend</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">168</div>
									<div class="stat-description">Qualified Leads Generated</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 773.65</div>
									<div class="stat-description">Cost per Lead (CPL)</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">2.7</div>
									<div class="stat-description">Conversion Rate</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row align-items-center bg-white">
					<div class="col-sm-12 col-md-12 col-lg-6 text-center p-4">
						<img src="images/services/digital-marketing/digital-marketing-portfolio-02.webp" class="img-fluid rounded-3" alt="Digital Marketing" loading="lazy">
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 p-4">
						<h4 class="pt-3 case-study-heading">How Apps Nation Generated 567+ Leads for a Leading  <span> Aesthetic Clinic</span>     </h4>
						<p class="pt-3 case-study-text">Apps Nation managed high-performing Meta ad campaigns for advanced aesthetic treatments including BBL Moxi, Ultherapy, EMS, and Chemical Peels. Through engaging creatives, precision audience targeting, and continuous campaign optimization, the campaigns generated 567+ qualified leads while maintaining strong ROI and consistent conversion performance.</p>
						<div class="stats-container my-5 md-ms-5">
							<div class="row">
								<div class="col-6 stat-item">
									<div class="stat-number">187K+</div>
									<div class="stat-description">Combined Reach</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">567+</div>
									<div class="stat-description">Total Leads Generated</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 75–130</div>
									<div class="stat-description">Average Cost per Lead</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 39,400+</div>
									<div class="stat-description">Total Ad Spend</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row align-items-center bg-white">
					<div class="col-sm-12 col-md-12 col-lg-6 text-center p-4">
						<img src="images/services/digital-marketing/digital-marketing-portfolio-03.webp" class="img-fluid rounded-3" alt="Digital Marketing" loading="lazy">
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 p-4">
						<h4 class="pt-3 case-study-heading">152K+ Conversions Generated for a  <span>Rent-a-Car </span> Brand </h4>
						<p class="pt-3 case-study-text">Quick Digital Solutions executed large-scale Google Ads campaigns for a Dubai-based rent-a-car company using Search, Display, and Performance Max strategies. The campaigns focused on maximizing conversions, increasing brand visibility, and driving cost-effective customer acquisition across multiple vehicle rental categories.</p>
						<div class="stats-container my-5 md-ms-5">
							<div class="row">
								<div class="col-6 stat-item">
									<div class="stat-number">738K+</div>
									<div class="stat-description">Total Clicks</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">152K+</div>
									<div class="stat-description">Total Conversions</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 75–130</div>
									<div class="stat-description">Average Cost per Conversion</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 1.25M+</div>
									<div class="stat-description">Total Ad Spend</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row align-items-center bg-white">
					<div class="col-sm-12 col-md-12 col-lg-6 text-center p-4">
						<img src="images/services/digital-marketing/digital-marketing-portfolio-04.webp" class="img-fluid rounded-3" alt="Digital Marketing" loading="lazy">
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 p-4">
						<h4 class="pt-3 case-study-heading">73+ High-Intent  <span> Spa Leads Generated Through </span> Meta Ads </h4>
						<p class="pt-3 case-study-text">Quick Digital Solutions managed targeted Meta advertising campaigns for a luxury spa brand in Dubai, focusing on WhatsApp and Messenger lead generation. Through audience optimization, creative testing, and strategic campaign delivery, the campaigns achieved strong engagement and cost-efficient messaging conversions.
						<div class="stats-container my-5 md-ms-5">
							<div class="row">
								<div class="col-6 stat-item">
									<div class="stat-number">73+</div>
									<div class="stat-description">Messaging Conversions	</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">7,172++</div>
									<div class="stat-description">Total Reach</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 18.27</div>
									<div class="stat-description">Average Cost per Result</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 1,333+</div>
									<div class="stat-description">Total Ad Spend</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<div class="row align-items-center bg-white">
					<div class="col-sm-12 col-md-12 col-lg-6 text-center p-4">
						<img src="images/services/digital-marketing/digital-marketing-portfolio-05.webp" class="img-fluid rounded-3" alt="Owl" loading="lazy">
					</div>
					<div class="col-sm-12 col-md-12 col-lg-6 p-4">
						<h4 class="pt-3 case-study-heading">33 Qualified Luxury  <span>Real Estate Leads Generated </span> with Optimized Ad Spend</h4>
						<p class="pt-3 case-study-text">Apps Nation delivered 33 qualified property inquiries for Danube Properties through a highly targeted Google Ads campaign focused on luxury real estate buyers in Dubai. With strategic audience segmentation, demographic targeting, and AI-driven campaign optimization, the campaign maintained a cost per lead below AED 175 while maximizing ROI on a limited advertising budget.</p>
						<div class="stats-container my-5 md-ms-5">
							<div class="row">
								<div class="col-6 stat-item">
									<div class="stat-number">AED 5,630</div>
									<div class="stat-description">Total Ad Spend</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">33</div>
									<div class="stat-description">Qualified Leads</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">AED 170.62</div>
									<div class="stat-description">Cost per Lead (CPL)</div>
								</div>
								<div class="col-6 stat-item">
									<div class="stat-number">1,393</div>
									<div class="stat-description">Total Clicks</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="carousel-indicators ps-5 ">
			<button type="button" data-bs-target="#dmPortfolioCarousel" data-bs-slide-to="0" class="active"></button>
			<button type="button" data-bs-target="#dmPortfolioCarousel" data-bs-slide-to="1"></button>
			<button type="button" data-bs-target="#dmPortfolioCarousel" data-bs-slide-to="2"></button>
			<button type="button" data-bs-target="#dmPortfolioCarousel" data-bs-slide-to="3"></button>
			<button type="button" data-bs-target="#dmPortfolioCarousel" data-bs-slide-to="4"></button>
		</div>
	</div>
</section>
<!-- Start Portfolio -->

<!-- Start Industries -->
<section class="case-study-section fix section-padding">
	<div class="left-shape float-bob-x">
		<img src="images/services/digital-marketing/left-shape.png" alt="img " loading="lazy">
	</div>
	<div class="right-shape float-bob-x">
		<img src="images/services/digital-marketing/right-shape.png" alt="img" loading="lazy">
	</div>
	<div class="container">
		<div class="section-title-area">
			<div class="section-title">
				<div class="sub-title wow">
					<span>Industries We Serve</span>
				</div>
				<h2 class="wow" data-wow-delay=".3s">Digital Marketing Solutions for Every Industry</h2>
			</div>
		</div>
		<p class="mt-3 mt-md-0 wow" data-wow-delay=".5s">At <b>AppsNation</b>, we help businesses of all sizes and sectors grow online. From startups to established brands, our <b>AI-driven digital marketing services</b> deliver results across multiple industries.</p>
		<div class="industries wow mt-4" data-wow-delay="0.7s">
			<div class="row ">
				<div class="col-6 col-md-4 col-lg-3 ">
					<ul class="industries-point">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M9.12,16.27a1.22,1.22,0,0,0-.5-.11H7.38A1.45,1.45,0,0,0,6,17.66a.5.5,0,0,1-1,0,2.45,2.45,0,0,1,2.38-2.5H8.62a2.22,2.22,0,0,1,1.29.41A4,4,0,0,0,9.12,16.27ZM5.5,11.66A2.5,2.5,0,1,1,8,14.16,2.5,2.5,0,0,1,5.5,11.66Zm1,0A1.5,1.5,0,1,0,8,10.16,1.5,1.5,0,0,0,6.5,11.66Zm9.17,9.5a5.82,5.82,0,0,0,1.36,1H10.5A1.5,1.5,0,0,1,9,20.66v-1.4a3.58,3.58,0,0,1,.61-2,3.46,3.46,0,0,1,2.88-1.46,4.34,4.34,0,0,1,1.29.21,4.54,4.54,0,0,0,0,1,5.15,5.15,0,0,0-1.28-.22,2.44,2.44,0,0,0-2.05,1A2.6,2.6,0,0,0,10,19.26v1.4a.5.5,0,0,0,.5.5Zm-4.17-9.5a3.49,3.49,0,0,1,6.83-1,5.28,5.28,0,0,0-.94.34,2.49,2.49,0,1,0-3.07,3.07A5.83,5.83,0,0,0,14,15,3.5,3.5,0,0,1,11.5,11.66ZM25,18.21a5.36,5.36,0,0,1-1.14,2,.73.73,0,0,1-.9.13L22.4,20a4.76,4.76,0,0,1-.69.4V21a.73.73,0,0,1-.57.71,5.45,5.45,0,0,1-1.14.12,5.54,5.54,0,0,1-1.15-.12.74.74,0,0,1-.57-.71v-.59a4.76,4.76,0,0,1-.69-.4l-.51.29a.74.74,0,0,1-.91-.13,5.36,5.36,0,0,1-1.14-2,.73.73,0,0,1,.33-.85l.52-.29a3.57,3.57,0,0,1,0-.8l-.52-.3a.72.72,0,0,1-.33-.85,5.24,5.24,0,0,1,1.14-2,.73.73,0,0,1,.9-.14l.52.3a3.65,3.65,0,0,1,.69-.4v-.6a.72.72,0,0,1,.57-.7,5.21,5.21,0,0,1,2.29,0,.71.71,0,0,1,.57.7v.6a4,4,0,0,1,.69.4l.52-.3a.73.73,0,0,1,.9.14,5.26,5.26,0,0,1,1.15,2,.74.74,0,0,1-.33.85l-.52.29a5.34,5.34,0,0,1,0,.8l.51.3A.72.72,0,0,1,25,18.21ZM23,15.74l.92-.53A4.2,4.2,0,0,0,23.23,14l-.92.53a3.51,3.51,0,0,0-1.6-.92V12.52a4.83,4.83,0,0,0-1.42,0v1.07a3.58,3.58,0,0,0-1.6.92L16.77,14a4.2,4.2,0,0,0-.71,1.23l.92.53a3.74,3.74,0,0,0,0,1.85l-.92.53a4.33,4.33,0,0,0,.71,1.23l.92-.53a3.51,3.51,0,0,0,1.6.92V20.8a3.77,3.77,0,0,0,1.42,0V19.74a3.58,3.58,0,0,0,1.6-.92l.92.53a4.43,4.43,0,0,0,.71-1.23L23,17.59A3.74,3.74,0,0,0,23,15.74Zm-1,.92a2,2,0,1,1-2-2A2,2,0,0,1,22,16.66Zm-1,0a1,1,0,1,0-1,1A1,1,0,0,0,21,16.66Z"></path>
							</svg> Engineering
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M25,21.67a1.73,1.73,0,0,1-.18.7,1.68,1.68,0,0,1-1.35.79H6.53a1.68,1.68,0,0,1-1.35-.79,1.45,1.45,0,0,1,.06-1.5l8.47-13a1.6,1.6,0,0,1,2.58,0l8.47,13.05A1.74,1.74,0,0,1,25,21.67Zm-1,0a.61.61,0,0,0-.08-.26l-8.46-13a.56.56,0,0,0-.92,0L6.08,21.41a.45.45,0,0,0,0,.48.57.57,0,0,0,.46.27h17a.57.57,0,0,0,.46-.27A.6.6,0,0,0,24,21.67Zm-9.5-2h0v1a.5.5,0,0,1-1,0v-1l-1.45-.94-.57,2.1a.53.53,0,0,1-.48.37h0l-.13,0a.53.53,0,0,1-.37-.48.51.51,0,0,1,0-.13l.93-3.42L14,18.79A1.09,1.09,0,0,1,14.5,19.63Zm7.22.76a.65.65,0,0,1,.08.27.5.5,0,0,1-.5.5H15.5L16,19.83a.65.65,0,0,1,.56-.39h.68L15,18.08h0l-3.25-2a.56.56,0,0,1-.24-.42.6.6,0,0,1,.1-.3l.36-.49a1.7,1.7,0,0,1,1.2-.6,1.84,1.84,0,0,1,.33,0l.77.23a1.5,1.5,0,0,1,1.11,1.17l.33,1.65,2.48,1.53.89-1.33a.46.46,0,0,1,.18-.16l.23-.06h0a.75.75,0,0,1,.16,0,.36.36,0,0,1,.26.19Zm-7.19-3.77-.14-.74A.5.5,0,0,0,14,15.5H14l-.73-.21h-.08a.57.57,0,0,0-.4.2l0,0ZM13.75,13h0a.88.88,0,1,1,.88.88h0A.87.87,0,0,1,13.75,13Zm6.63,7.15-.91-1.42L18.63,20l-.11.16Z"></path>
							</svg> Construction
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M12.21,22.16a3.84,3.84,0,0,0,.63,1H8a1,1,0,0,1-1-.92l-1-10v-.06H5.25A.25.25,0,0,1,5,11.91v-.5a.25.25,0,0,1,.25-.25h5.36l.81-3.24a1,1,0,0,1,1-.76h1.36a.25.25,0,0,1,.25.25v.5a.25.25,0,0,1-.25.25H12.39l-.75,3h4.11a.25.25,0,0,1,.25.25v.5a.25.25,0,0,1-.25.25H7l1,10Zm12.36-2.11A1.52,1.52,0,0,1,25,21a2.13,2.13,0,0,1-2.13,2.12H15.12A2.12,2.12,0,0,1,13,21a1.52,1.52,0,0,1,.43-1A2,2,0,0,1,13,18.91a2,2,0,0,1,.58-1.29A2.06,2.06,0,0,1,13,16.28a2.11,2.11,0,0,1,.36-1.08A7,7,0,0,1,19,12.66a7,7,0,0,1,5.65,2.54A2.19,2.19,0,0,1,25,16.28a2.1,2.1,0,0,1-.58,1.34A2,2,0,0,1,25,18.91,2,2,0,0,1,24.57,20.05Zm-9.68-2.89h8.22a.87.87,0,0,0,.72-1.38A6,6,0,0,0,19,13.66a6.05,6.05,0,0,0-4.84,2.12A.88.88,0,0,0,14.89,17.16ZM24,18.91a.76.76,0,0,0-.75-.75h-8.5a.75.75,0,1,0,0,1.5h8.5A.75.75,0,0,0,24,18.91ZM24,21a.38.38,0,0,0-.38-.38H14.37A.38.38,0,0,0,14,21a1.12,1.12,0,0,0,1.12,1.12h7.75A1.13,1.13,0,0,0,24,21Zm-8-5.38a.5.5,0,0,1,.5-.5.51.51,0,0,1,.5.5.5.5,0,0,1-.5.5A.5.5,0,0,1,16,15.66Zm2.5-.5a.5.5,0,0,1,.5-.5.51.51,0,0,1,.5.5.5.5,0,0,1-.5.5A.5.5,0,0,1,18.5,15.16Zm2.5.5a.5.5,0,0,1,.5-.5.51.51,0,0,1,.5.5.5.5,0,0,1-.5.5A.5.5,0,0,1,21,15.66Z"></path>
							</svg> Food &amp; Beverage
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M13.2,16.77a4,4,0,0,1,.8,2.4v3.75a.25.25,0,0,1-.25.25h-.5a.25.25,0,0,1-.25-.25V19.17a3,3,0,0,0-.61-1.82l-1.32-1.82a.5.5,0,0,0-.81.59l1,1.32,0,0C12,18.7,10.17,20.17,9,18.79L7,16.36V11.69a.5.5,0,1,0-1,0V17a.51.51,0,0,0,.11.31l3.34,4.18A2.77,2.77,0,0,1,10,22.89a.25.25,0,0,1-.25.27h-.5A.24.24,0,0,1,9,23a1.86,1.86,0,0,0-.32-.85L5.33,17.93A1.48,1.48,0,0,1,5,17V11.66a1.49,1.49,0,0,1,1.52-1.49A1.55,1.55,0,0,1,8,11.72V16l1.94,2.3a.27.27,0,0,0,.42-.34l-.89-1.23a1.52,1.52,0,0,1,.07-1.91,1.5,1.5,0,0,1,2.33.12Zm5.6-5.35L15.39,15a.54.54,0,0,1-.79,0l-3.4-3.57a2.59,2.59,0,0,1,.17-3.71,2.18,2.18,0,0,1,1.45-.55,2.61,2.61,0,0,1,1.83.8l.35.36L15.34,8a2.64,2.64,0,0,1,1.83-.79,2.16,2.16,0,0,1,1.45.55A2.58,2.58,0,0,1,18.8,11.42ZM18,8.47a1.22,1.22,0,0,0-.82-.31,1.61,1.61,0,0,0-1.11.49L15,9.75,14,8.65a1.61,1.61,0,0,0-1.12-.48,1.19,1.19,0,0,0-.82.31,1.58,1.58,0,0,0-.11,2.25L15,14l3.09-3.24A1.58,1.58,0,0,0,18,8.47ZM25,17a1.43,1.43,0,0,1-.33.93L21.33,22.1A1.82,1.82,0,0,0,21,23a.24.24,0,0,1-.25.21h-.5a.25.25,0,0,1-.25-.27,2.77,2.77,0,0,1,.54-1.41l3.34-4.18A.51.51,0,0,0,24,17V11.66a.5.5,0,1,0-1,0v4.68l-2,2.42c-1.15,1.39-3-.08-2.21-1.32,0,0,0,0,0,0l.95-1.32a.48.48,0,0,0-.11-.69.49.49,0,0,0-.7.11l-1.32,1.82A3,3,0,0,0,17,19.16v3.75a.25.25,0,0,1-.25.25h-.5a.25.25,0,0,1-.25-.25V19.16a4,4,0,0,1,.8-2.4l1.32-1.82a1.51,1.51,0,0,1,2.33-.13,1.52,1.52,0,0,1,.08,1.92L19.64,18a.27.27,0,0,0,.42.33L22,16V11.72a1.56,1.56,0,0,1,1.47-1.56A1.51,1.51,0,0,1,25,11.66Z"></path>
							</svg> Health Care
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M13.75,18.36a3.43,3.43,0,0,0,.48.93l-3.18,3.18a2.39,2.39,0,0,1-3.36,0,2.39,2.39,0,0,1,0-3.36l4.57-4.57.71.71L8.4,19.82a1.38,1.38,0,0,0,0,1.94,1.4,1.4,0,0,0,1.94,0Zm9,2.39-2.12,2.12a1,1,0,0,1-1.42,0L15.28,19A2.49,2.49,0,0,1,15,15.84l-2.68-2.68H10l-3-4,2-2,4,3v2.3l2.67,2.67a2.48,2.48,0,0,1,3.15.32l3.89,3.89A1,1,0,0,1,22.71,20.75ZM12,10.66,9.09,8.49l-.77.77,2.18,2.9H12v-1.5Zm-2.5,9.5a.51.51,0,0,1,.5.5.5.5,0,0,1-1,0A.51.51,0,0,1,9.5,20.16Zm5.19-7.43L14,12V9.92a4.67,4.67,0,0,1,5.42-2.61.84.84,0,0,1,.61.6.86.86,0,0,1-.22.83l-2,2,.23,1.38,1.38.23,2-2a.87.87,0,0,1,.84-.22.88.88,0,0,1,.6.61,4.7,4.7,0,0,1-1.24,4.48,4.61,4.61,0,0,1-.91.7L20,15.19a3.88,3.88,0,0,0,.94-.68,3.66,3.66,0,0,0,1-3.26l-2.16,2.16L17.18,13l-.43-2.59,2.17-2.17a3.68,3.68,0,0,0-4.23,4.51ZM22,20l-3.89-3.89a1.5,1.5,0,0,0-2.12,0,1.52,1.52,0,0,0-.44,1.06A1.5,1.5,0,0,0,16,18.27l3.89,3.89Z"></path>
							</svg> Facility Management
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-4 col-lg-3">
					<ul class="industries-point">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M11,22.66a.5.5,0,0,1-1,0,1.45,1.45,0,0,0-1.38-1.5H7.38A1.45,1.45,0,0,0,6,22.66a.5.5,0,0,1-1,0,2.45,2.45,0,0,1,2.38-2.5H8.62A2.45,2.45,0,0,1,11,22.66Zm-5.5-6A2.5,2.5,0,1,1,8,19.16,2.5,2.5,0,0,1,5.5,16.66ZM7,13.33a3.53,3.53,0,0,0-1,.47V8.66a1.5,1.5,0,0,1,1.5-1.5h15A1.5,1.5,0,0,1,24,8.66V13.8a3.53,3.53,0,0,0-1-.47V8.66a.5.5,0,0,0-.5-.5H7.5a.5.5,0,0,0-.5.5Zm-.5,3.33A1.5,1.5,0,1,0,8,15.16,1.5,1.5,0,0,0,6.5,16.66Zm11.5,6a.5.5,0,0,1-1,0,1.45,1.45,0,0,0-1.38-1.5H14.38A1.45,1.45,0,0,0,13,22.66a.5.5,0,0,1-1,0,2.45,2.45,0,0,1,2.38-2.5h1.24A2.45,2.45,0,0,1,18,22.66Zm-3-8.5a2.5,2.5,0,1,1-2.5,2.5A2.5,2.5,0,0,1,15,14.16Zm0,1a1.5,1.5,0,1,0,1.5,1.5A1.5,1.5,0,0,0,15,15.16Zm10,7.5a.5.5,0,0,1-1,0,1.45,1.45,0,0,0-1.38-1.5H21.38A1.45,1.45,0,0,0,20,22.66a.5.5,0,0,1-1,0,2.45,2.45,0,0,1,2.38-2.5h1.24A2.45,2.45,0,0,1,25,22.66Zm-.5-6a2.5,2.5,0,1,1-2.5-2.5A2.49,2.49,0,0,1,24.5,16.66Zm-1,0a1.5,1.5,0,1,0-1.5,1.5A1.5,1.5,0,0,0,23.5,16.66Z"></path>
							</svg> Human Resource
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M23,20a3.28,3.28,0,0,1-3.43,3.12H10.43A3.28,3.28,0,0,1,7,20c0-.61-.29-5.36,5.53-9.07L11.17,8.72A1,1,0,0,1,12,7.16h6a1,1,0,0,1,.83,1.56L17.47,11C23.26,14.66,23,19.44,23,20ZM22,20c0-1.88-.64-5.43-5.28-8.29H13.28C8.63,14.53,8,18.06,8,19.93V20a2.29,2.29,0,0,0,2.43,2.12h9.14A2.29,2.29,0,0,0,22,20Zm-8.46-9.29h2.92L18,8.16H12ZM17,18.33a1.51,1.51,0,0,1-1.46,1.52v.54a.27.27,0,0,1-.27.27h-.54a.27.27,0,0,1-.27-.27v-.54a2.28,2.28,0,0,1-1.07-.39.27.27,0,0,1-.11-.21.28.28,0,0,1,.09-.19l.4-.38a.32.32,0,0,1,.19-.07.3.3,0,0,1,.15.05,1,1,0,0,0,.44.12h.95a.43.43,0,0,0,.41-.44.45.45,0,0,0-.3-.43l-1.53-.45A1.52,1.52,0,0,1,13,16a1.51,1.51,0,0,1,1.45-1.52v-.55a.28.28,0,0,1,.27-.27h.55a.27.27,0,0,1,.27.27v.55a2.42,2.42,0,0,1,1.07.38.3.3,0,0,1,.1.22.33.33,0,0,1-.08.19l-.4.38a.32.32,0,0,1-.19.07.3.3,0,0,1-.15-.05,1.11,1.11,0,0,0-.44-.12H14.5a.42.42,0,0,0-.4.44.44.44,0,0,0,.29.43l1.54.45A1.53,1.53,0,0,1,17,18.33Z"></path>
							</svg> Banking &amp; Finance
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M23,14.52a.31.31,0,0,1-.06.16l-.31.39a.29.29,0,0,1-.2.09.28.28,0,0,1-.15-.06l-1.28-1v7.59a.5.5,0,0,1-.5.5h-4a.5.5,0,0,1-.5-.5v-4H14v4a.5.5,0,0,1-.5.5h-4a.5.5,0,0,1-.5-.5V14.06l-1.28,1a.25.25,0,0,1-.15.06.26.26,0,0,1-.2-.1l-.31-.38A.31.31,0,0,1,7,14.52a.26.26,0,0,1,.09-.19l7.28-5.94A1.09,1.09,0,0,1,15,8.17a1.12,1.12,0,0,1,.63.22l7.28,5.94A.26.26,0,0,1,23,14.52Zm-3-1.28L15,9.16l-5,4.08v7.92h3v-4a.5.5,0,0,1,.5-.5h3a.5.5,0,0,1,.5.5v4h3Z"></path>
							</svg> Real Estate
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M9,20.16A4,4,0,0,1,5,16.5a1,1,0,0,1,.17-.61l3.41-5.5a.5.5,0,0,1,.84,0l3.41,5.5a1,1,0,0,1,.17.61A4,4,0,0,1,9,20.16Zm0-1a3,3,0,0,0,2.83-2H6.16A3,3,0,0,0,9,19.16Zm-2.82-3h5.66L9,11.61ZM22,22.41v.5a.25.25,0,0,1-.25.25H8.25A.25.25,0,0,1,8,22.91v-.5a.25.25,0,0,1,.25-.25H14.5V11.09A2,2,0,0,1,13,9.16H8.25A.25.25,0,0,1,8,8.91v-.5a.25.25,0,0,1,.25-.25h5a1.76,1.76,0,0,1,.6-.65,2,2,0,0,1,2.24,0,1.76,1.76,0,0,1,.6.65h5a.25.25,0,0,1,.25.25v.5a.25.25,0,0,1-.25.25H17a2,2,0,0,1-1.5,1.93V22.16h6.25A.25.25,0,0,1,22,22.41ZM15,10.16a1,1,0,1,0-1-1A1,1,0,0,0,15,10.16ZM25,16.5a4,4,0,0,1-8,0,1,1,0,0,1,.17-.61l3.41-5.5a.5.5,0,0,1,.84,0l3.41,5.5A1,1,0,0,1,25,16.5Zm-1.17.66H18.16a3,3,0,0,0,5.67,0Zm0-1L21,11.61l-2.82,4.55Z"></path>
							</svg> Law Firm
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M23,12.66v8a1.5,1.5,0,0,1-1.5,1.5H8.5A1.5,1.5,0,0,1,7,20.66v-8a1.5,1.5,0,0,1,1.5-1.5H12V8.91a.76.76,0,0,1,.75-.75h4.5a.75.75,0,0,1,.75.75v2.25h3.5A1.5,1.5,0,0,1,23,12.66Zm-1,0a.5.5,0,0,0-.5-.5H8.5a.5.5,0,0,0-.5.5v2.5H22Zm0,3.5H17v1.25a.75.75,0,0,1-.75.75h-2.5a.75.75,0,0,1-.75-.75V16.16H8v4.5a.5.5,0,0,0,.5.5h13a.5.5,0,0,0,.5-.5Zm-9-5h4v-2H13Zm3,6v-1H14v1Z"></path>
							</svg> Business Setup
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-4 col-lg-3 mt-3 mt-md-0">
					<ul class="industries-point">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M24,15.16c0,1.48-2,2-3.55,2H17.06l-1,2a.38.38,0,0,1,.37.38v1.25a.37.37,0,0,1-.38.37H15l-.83,1.59a.86.86,0,0,1-.73.41H11.7a.86.86,0,0,1-.83-1l.88-5c-.65,0-1.28-.09-1.84-.16l-1,1.81a.88.88,0,0,1-.73.41H6.93a.86.86,0,0,1-.84-1l.42-2.09A1.15,1.15,0,0,1,6,15.16a1.14,1.14,0,0,1,.51-.9l-.42-2.09a.86.86,0,0,1,.84-1H8.18a.88.88,0,0,1,.73.41v0l1,1.79c.56-.07,1.19-.13,1.84-.16l-.88-5a.86.86,0,0,1,.83-1.05h1.7a.86.86,0,0,1,.74.44L15,9.16h1a.38.38,0,0,1,.38.38v1.25a.38.38,0,0,1-.37.37l1,2h3.39C21.94,13.17,24,13.68,24,15.16Zm-1,0c0-.65-1.53-1-2.55-1h-4l-3.13-6H11.88l1,6a24.26,24.26,0,0,0-3.55.29L8.09,12.15h-1l.61,3-.61,3h1l1.29-2.31a23.93,23.93,0,0,0,3.55.29l-1,6h1.43l3.13-6h4C21.25,16.15,23,15.89,23,15.16Z"></path>
							</svg> Travel &amp; Tourism
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M25,20.41v.5a.25.25,0,0,1-.25.25H21.91a1.7,1.7,0,0,1,.09.5,1.5,1.5,0,0,1-3,0,1.7,1.7,0,0,1,.09-.5H12.91a1.7,1.7,0,0,1,.09.5,1.5,1.5,0,0,1-3,0,1.7,1.7,0,0,1,.09-.5H8.25A.25.25,0,0,1,8,20.91V8.16H5.25A.25.25,0,0,1,5,7.91v-.5a.25.25,0,0,1,.25-.25h3.5A.25.25,0,0,1,9,7.41V20.16H24.75A.25.25,0,0,1,25,20.41ZM11,17.16v-6a1,1,0,0,1,1-1h2V8.66a1.5,1.5,0,0,1,1.5-1.5h3A1.5,1.5,0,0,1,20,8.66v1.5h2a1,1,0,0,1,1,1v6a1,1,0,0,1-1,1H12A1,1,0,0,1,11,17.16Zm1,4.5a.5.5,0,1,0-1,0,.5.5,0,0,0,1,0Zm0-4.5h2v-6H12Zm3-7h4V8.66a.5.5,0,0,0-.5-.5h-3a.5.5,0,0,0-.5.5Zm0,7h4v-6H15Zm5,0h2v-6H20Zm1,4.5a.5.5,0,1,0-1,0,.5.5,0,0,0,1,0Z"></path>
							</svg> Hospitality
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M22.87,13.47l-.18.36a1.49,1.49,0,0,1-.53.58,2.54,2.54,0,0,1,.34,1.25v4a1.5,1.5,0,0,1-1.5,1.5h-.5a1.5,1.5,0,0,1-1.5-1.5v-.5H11v.5a1.5,1.5,0,0,1-1.5,1.5H9a1.5,1.5,0,0,1-1.5-1.5v-4a2.45,2.45,0,0,1,.35-1.25,1.38,1.38,0,0,1-.54-.58l-.18-.36a1.24,1.24,0,0,1,.06-1.21,1.22,1.22,0,0,1,1.06-.6H9.8l.26-.77a2.49,2.49,0,0,1,2.37-1.73h5.14A2.51,2.51,0,0,1,20,10.89l.25.77h1.55a1.26,1.26,0,0,1,1.12,1.81Zm-14.31.17a3,3,0,0,1,.72-.36l.2-.62H8.25A.25.25,0,0,0,8,13l.18.36A.51.51,0,0,0,8.56,13.64Zm12.94,2a1.5,1.5,0,0,0-1.5-1.5H10a1.5,1.5,0,0,0-1.5,1.5v2.5h13v-2.5ZM10,19.16H8.5v.5a.5.5,0,0,0,.5.5h.5a.5.5,0,0,0,.5-.5Zm2.5-2.75c0,.38-.18,1-1.41,1h-.31a1.26,1.26,0,1,1,0-2.5A1.82,1.82,0,0,1,12.5,16.41Zm-.75,0c0-.3-.58-.75-1-.75s-.65.2-.65.5.26.5.65.5h.31C11.42,16.66,11.75,16.64,11.75,16.41Zm-1.38-3.25h9.26l-.64-2a1.49,1.49,0,0,0-1.42-1H12.43a1.49,1.49,0,0,0-1.42,1Zm10.25,3a1.28,1.28,0,0,1-1.4,1.25h-.31c-1.23,0-1.41-.62-1.41-1a1.82,1.82,0,0,1,1.72-1.5A1.29,1.29,0,0,1,20.62,16.16Zm-.74,0c0-.3-.26-.5-.66-.5s-1,.45-1,.75.33.25.66.25h.31C19.62,16.66,19.88,16.46,19.88,16.16Zm1.62,3H20v.5a.5.5,0,0,0,.5.5H21a.5.5,0,0,0,.5-.5ZM22,12.78a.25.25,0,0,0-.21-.12H20.52l.2.62a2.32,2.32,0,0,1,.72.36.51.51,0,0,0,.35-.25L22,13A.25.25,0,0,0,22,12.78Z"></path>
							</svg> Automotive
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M23,10.66v3a1.5,1.5,0,0,1-1.5,1.5H15a.5.5,0,0,0-.5.5v1.5H15a1,1,0,0,1,1,1v4a1,1,0,0,1-1,1H13a1,1,0,0,1-1-1v-4a1,1,0,0,1,1-1h.5v-1.5a1.5,1.5,0,0,1,1.5-1.5h6.5a.5.5,0,0,0,.5-.5v-3a.5.5,0,0,0-.5-.5H20v.5a1.5,1.5,0,0,1-1.5,1.5H8.5A1.5,1.5,0,0,1,7,10.66v-2a1.5,1.5,0,0,1,1.5-1.5h10A1.5,1.5,0,0,1,20,8.66v.5h1.5A1.5,1.5,0,0,1,23,10.66Zm-4-2a.5.5,0,0,0-.5-.5H8.5a.5.5,0,0,0-.5.5v2a.5.5,0,0,0,.5.5h10a.5.5,0,0,0,.5-.5v-2Zm-4,9.5H13v4h2Z"></path>
							</svg> E-commerce
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M24,10.51v1.15a.5.5,0,0,1-.5.5H6.5a.5.5,0,0,1-.5-.5V10.51A.56.56,0,0,1,6.32,10l8.33-2.81a.91.91,0,0,1,.7,0L23.68,10A.51.51,0,0,1,24,10.51Zm0,11.9v.5a.25.25,0,0,1-.25.25H6.25A.25.25,0,0,1,6,22.91v-.5a.25.25,0,0,1,.25-.25H7v-2a1.08,1.08,0,0,1,1.14-1H8.5v-6h1v6h3v-6h1v6h3v-6h1v6h3v-6h1v6h.36a1.08,1.08,0,0,1,1.14,1v2h.75A.25.25,0,0,1,24,22.41ZM23,10.87,15,8.16,7,10.87v.29H23ZM22,20.2a.29.29,0,0,0-.14,0H8.14a.29.29,0,0,0-.14,0v2H22Z"></path>
							</svg> Governments
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-4 col-lg-3 mt-3 mt-lg-0 hidden-industries">
					<ul class="industries-point">
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M17.5,19.66h-.41v1.85a1.65,1.65,0,0,1-1.65,1.65h-.88a1.65,1.65,0,0,1-1.65-1.65V19.66H12.5A1.5,1.5,0,0,1,11,17.82l1.25-5.14a1.73,1.73,0,0,1,.52-.83l.15-.1a2.75,2.75,0,1,1,4.08,0l.15.1a1.81,1.81,0,0,1,.52.83L19,17.82A1.5,1.5,0,0,1,17.5,19.66ZM18,18.05l-1.25-5.14a.53.53,0,0,0-.49-.38h-.39a3.58,3.58,0,0,1-.86.13,3.51,3.51,0,0,1-.86-.13h-.39a.53.53,0,0,0-.49.38L12,18.05a.5.5,0,0,0,.49.61h1.41v2.85a.65.65,0,0,0,.65.65h.88a.65.65,0,0,0,.65-.65V18.66H17.5A.5.5,0,0,0,18,18.05ZM13.25,9.91A1.75,1.75,0,1,0,15,8.16,1.75,1.75,0,0,0,13.25,9.91Z"></path>
							</svg> Fashion
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M8,16.16h8v1H6a1,1,0,0,0,1,1h9v1H7a2,2,0,0,1-2-2v-.5a.5.5,0,0,1,.5-.5H7v-8a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1v2H20v-2H8Zm17-4v10a1,1,0,0,1-1,1H18a1,1,0,0,1-1-1v-10a1,1,0,0,1,1-1h6A1,1,0,0,1,25,12.16Zm-1,0H18v10h6Z"></path>
							</svg> Technology
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M25,16.16v2.5a.5.5,0,0,1-.5.5H23a3,3,0,0,1-6,0H13a3,3,0,0,1-6,0H5.5a.5.5,0,0,1-.5-.5v-3.5a2,2,0,0,1,2-2L8.5,9.42a2,2,0,0,1,1.85-1.26h6.19a2.27,2.27,0,0,1,1.56.75l3.4,4.25H22A3,3,0,0,1,25,16.16Zm-1,0a2,2,0,0,0-2-2H7a1,1,0,0,0-1,1v3H7.18a3,3,0,0,1,5.64,0h4.36a3,3,0,0,1,5.64,0H24Zm-12,3a2,2,0,1,0-2,2A2,2,0,0,0,12,19.16Zm-3.92-6H13v-4H10.35a1,1,0,0,0-.92.63Zm5.92,0h6.22l-2.9-3.62a1,1,0,0,0-.78-.38H14Zm8,6a2,2,0,1,0-2,2A2,2,0,0,0,22,19.16Z"></path>
							</svg> Car Rental
						</li>
						<li>
							<svg id="fi_2415292" enable-background="new 0 0 50 50" height="512" viewBox="0 0 50 50" width="512" xmlns="http://www.w3.org/2000/svg">
								<g>
									<path d="m48 38.2h-29.4l-1.1-4.1h24.1c.4 0 .8-.3.9-.6l6.5-16.3c.1-.3.1-.7-.1-.9-.2-.3-.5-.4-.8-.4h-4.5c-.6-7.2-6.5-12.8-13.7-12.8s0 0-.1 0c-7 0-13.1 5.4-13.6 12.8h-3.7l-3.4-12.5c-.1-.5-.5-.8-1-.8h-6.1c-.6 0-1 .4-1 1s.4 1 1 1h5.4l9.5 34.8c.1.4.5.7 1 .7h2c-.5.7-.8 1.6-.8 2.6 0 2.5 2.1 4.6 4.6 4.6s4.6-2.1 4.6-4.6c0-1-.3-1.8-.8-2.6h10.9c-.5.7-.8 1.6-.8 2.6 0 2.5 2.1 4.6 4.6 4.6s4.6-2.1 4.6-4.6c0-1-.3-1.8-.8-2.6h2c.6 0 1-.4 1-1s-.5-.9-1-.9zm-6.5-22.4h-4.2c0-1-.1-2.1-.3-3h3.8c.4.9.6 2 .7 3zm-4.5 5c.2-1 .3-2 .3-3h4.2c-.1 1.1-.3 2.1-.7 3zm2.9 2c-1.2 2.1-3.1 3.7-5.3 4.7.9-1.3 1.6-2.9 2-4.7zm0-12h-3.3c-.5-1.9-1.2-3.5-2-4.7 2.2.9 4.1 2.6 5.3 4.7zm-9-5.5c1.5.6 2.9 2.6 3.7 5.5h-3.7zm0 7.5h4.1c.2.9.3 1.9.3 3h-4.5v-3zm0 5h4.5c0 1.1-.2 2.1-.3 3h-4.1v-3zm0 5h3.7c-.8 2.9-2.2 4.9-3.7 5.5zm-2-17.5v5.5h-3.7c.8-2.9 2.2-4.9 3.7-5.5zm-4.2 15.5c-.2-.9-.3-2-.3-3h4.5v3zm4.2 2v5.5c-1.5-.6-2.9-2.6-3.7-5.5zm-5.8 0c.5 1.9 1.2 3.5 2 4.7-2.2-1-4.1-2.7-5.3-4.7zm-4.2-2c-.3-1-.6-2-.7-3h4.2c0 1 .1 2.1.3 3zm5.5-5c0-1.1.2-2.1.3-3h4.1v3zm.7-9.8c-.9 1.3-1.6 2.9-2 4.7h-3.3c1.2-2 3.1-3.7 5.3-4.7zm-6.2 6.8h3.8c-.2 1-.2 2-.3 3h-4.2c.1-1 .3-2.1.7-3zm-2 19.3-3.9-14.3h3.2c.5 7.3 6.6 12.7 13.6 12.8h.1c7 0 13.1-5.5 13.6-12.8h3l-5.7 14.3zm6.7 13.3c-1.4 0-2.6-1.2-2.6-2.6s1.2-2.6 2.6-2.6 2.6 1.2 2.6 2.6-1.2 2.6-2.6 2.6zm18.4 0c-1.4 0-2.6-1.2-2.6-2.6s1.2-2.6 2.6-2.6 2.6 1.2 2.6 2.6-1.1 2.6-2.6 2.6z"></path>
								</g>
							</svg> Sports
						</li>
						<li>
							<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 30 30">
								<path d="M23,12.66a2,2,0,0,1-2,2H20v7.5a1,1,0,0,1-1,1H17a1,1,0,0,1-1-1v-3H13v3a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1v-5a3.45,3.45,0,0,1,.42-1.5A2.53,2.53,0,0,1,7,13.16a.5.5,0,0,1,1,0,1.5,1.5,0,0,0,1.5,1.5h.85a3.54,3.54,0,0,1,1.65-.5h2.5L7.09,8A.28.28,0,0,1,7,7.8a.31.31,0,0,1,.06-.16l.32-.39a.28.28,0,0,1,.19-.09.31.31,0,0,1,.16.06L15.5,13.7v-5a.5.5,0,0,1,.5-.5h0a.56.56,0,0,1,.35.15l.86.85h2.17a1.11,1.11,0,0,1,.9.56l.22.44h2a.5.5,0,0,1,.5.5Zm-11,2.5a2,2,0,0,0-2,2v5h2v-4h3v-3Zm4,.08v2.92h1v4h2V16Zm3.88-4.08-.5-1H16.79l-.29-.29v4.47L19,15v-1.3h2a1,1,0,0,0,1-1v-1.5Zm-1.38.5a.5.5,0,0,1-.5-.5.5.5,0,0,1,1,0A.5.5,0,0,1,18.5,11.66Z"></path>
							</svg> Animal Care
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="d-flex justify-content-center wow mt-4" data-wow-delay=".7s">
					<div class="main-button">
						<a href="tel:+971543589543" class="theme-btn">
							<span>Call Us</span>
						</a>
					</div>
					<div class="main-button">
						<a data-bs-toggle="modal" data-bs-target="#myModal" class="ms-3">
							<span class="theme-btn">Schedule A Call</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
<!-- End Industries -->

<!-- Start Team -->
<section class="team-section fix section-padding">
	<div class="container">
		<div class="team-wrapper">
			<div class="row g-4">
				<div class="col-lg-6">
					<div class="team-image">
						<img src="images/team/2.png" alt="img" class="wow img-custom-anim-left" data-wow-duration="1.5s" data-wow-delay="0.3s" loading="lazy">
						<div class="shape-image">
							<img src="images/team/shape-img.png" alt="img" loading="lazy">
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-4 mt-lg-0">
					<div class="team-content">
						<div class="section-title">
							<div class="sub-title wow">
								<span>Marketing Pros</span>
							</div>
							<h2 class="wow" data-wow-delay=".3s">Let’s Grow Your Business with AI-Powered Digital Marketing</h2>
						</div>
						<p class="mt-3 mt-md-0 wow" data-wow-delay=".5s">Partner with <b>AppsNation</b> to scale your business with performance-driven <b>SEO, Google Ads, Meta Ads, and social media marketing</b> solutions designed to increase<b> traffic, leads,  and conversions.</b></p>
						<div class="list-items wow" data-wow-delay=".7s">
							<ul>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED" />
									</svg>
									AI-powered campaigns
								</li>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED" />
									</svg>
									24/7 monitoring & optimization
								</li>
							</ul>
							<ul>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED" />
									</svg>
									Digital marketing solutions
								</li>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
										<path d="M7.38397 14.1797C7.34153 14.1797 7.29954 14.171 7.26066 14.1539C7.22178 14.1369 7.18683 14.1121 7.15803 14.0809L1.06612 7.49119C1.02551 7.44726 0.99859 7.39244 0.988651 7.33344C0.978712 7.27445 0.986187 7.21384 1.01016 7.15902C1.03414 7.10421 1.07357 7.05758 1.12364 7.02483C1.17371 6.99208 1.23223 6.97464 1.29206 6.97464H4.22437C4.26839 6.97464 4.31191 6.98409 4.35197 7.00234C4.39204 7.0206 4.42772 7.04723 4.45661 7.08045L6.49255 9.42273C6.71258 8.95239 7.13852 8.16925 7.88597 7.21497C8.99095 5.8042 11.0463 3.7294 14.5627 1.85642C14.6307 1.82023 14.7097 1.81083 14.7843 1.83009C14.8588 1.84936 14.9235 1.89587 14.9654 1.96046C15.0073 2.02504 15.0235 2.103 15.0108 2.17894C14.998 2.25488 14.9573 2.32328 14.8966 2.37064C14.8831 2.38113 13.5273 3.44882 11.967 5.40448C10.5309 7.20417 8.62191 10.1469 7.68255 13.946C7.66605 14.0128 7.62767 14.0721 7.57354 14.1144C7.5194 14.1568 7.45263 14.1799 7.38388 14.1799L7.38397 14.1797Z" fill="#6A47ED" />
									</svg>
									Strategies with measurable ROI
								</li>
							</ul>
						</div>
						<!-- <div class="main-button wow" data-wow-delay=".5s">
                                    <a href="team.html"> <span class="theme-btn"> EXPLORE MORE </span><span class="arrow-btn"><i class="fa-regular fa-arrow-up-right"></i></span></a>
                                </div> -->
						<div class="d-flex">
							<div class="main-button wow" data-wow-delay=".3s">
								<a href="tel:+971543589543" class="theme-btn">
									<span>Call Us</span>
								</a>
							</div>
							<div class="main-button wow" data-wow-delay=".3s">
								<a data-bs-toggle="modal" data-bs-target="#myModal" class="ms-3">
									<span class="theme-btn">Schedule A Call</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Team-->

<!-- Start Badges -->
<section class="badges-section new-bages-section pt-5 section-padding">
	<div class="container">
		<div class="row wow" data-wow-delay=".3s">
			<div class="col-12">
				<div class="common-heading w-tdxt text-center">
					<div class="text-center">
						<h2 class="text-white">Our Global Partners</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row wow mt-5" data-wow-delay=".5s">
			<div class="col-12">
				<div class="partners-slider owl-carousel owl-theme owl-loaded owl-drag">
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-01.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-02.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-03.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-04.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-05.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-06.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-07.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-08.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-09.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-10.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-11.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-12.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-13.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-14.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-15.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-16.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-17.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-18.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-19.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
					<div class="partner-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="images/web-partners/icons-20.png" class="partner-img w-lg-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Badges -->

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
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">We help a diverse clientele build result-driven web development products for different industries. </p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/digital-marketing/certified-professionals.svg"
							alt="Certified Professionals" class="img-fluid" width="100%" height="100%" loading="lazy">
					</div>
					<h3 class="title">Certified Professionals</h3>
					<p class="description"> Experienced experts delivering affordable SEO services company for small business USA.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/digital-marketing/best-marketing-packages.svg"
							alt="Best Marketing Packages" class="img-fluid" width="100%" height="100%" loading="lazy">
					</div>
					<h3 class="title">Best Marketing Packages</h3>
					<p class="description"> Tailored social media marketing packages and Google Ads solutions.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/digital-marketing/24x7-customer-support.svg"
							alt="24x7 Customer Support" class="img-fluid" width="100%" height="100%" loading="lazy">
					</div>
					<h3 class="title">24x7 Customer Support</h3>
					<p class="description">Ensuring campaigns run smoothly and goals are met.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/digital-marketing/free-consultation.svg" alt="Free Consultation"
							class="img-fluid" width="100%" height="100%" loading="lazy">
					</div>
					<h3 class="title">Free Consultation</h3>
					<p class="description"> Understand your needs and receive expert SEO consulting services.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						<img src="images/services/digital-marketing/transparency.svg" alt="We Believe in Transparency"
							class="img-fluid" width="100%" height="100%" loading="lazy">
					</div>
					<h3 class="title">We Believe in Transparency</h3>
					<p class="description">Track improvements and ROI through measurable analytics.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why Choose-->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>Digital Marketing</span> Process</h2>
					</div>
					<p>We identify competition, audience, and search engine marketing services opportunities to build high-impact campaigns.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Reaserch</h3>
					<p class="description">The first step is research. We need to know what is the market, what is the competition, what are the best strategies to use, and so on.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">Marketing Framework</h3>
					<p class="description">Once the research is done then, we start creating our marketing plan, and strategy. In this step, we create our entire marketing framework where we decide how will work on the marketing.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Executions</h3>
					<p class="description">Campaigns are implemented and continuously optimized with SEO auditing services and manual link building service to maximize results.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Analyse</h3>
					<p class="description">We track performance metrics, adjust strategies, and improve social media marketing services packages to achieve your goals efficiently.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">Optimize</h3>
					<p class="description">In the last Step, our senior marketing expert audit our whole marketing campaign or strategy in order to get more profit or ROI.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Let's Work Together-->
<section class="container my-1">
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
					<img src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto"
						height="auto" loading="lazy">
					<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto" loading="lazy">
					<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting"
						width="auto" height="auto" loading="lazy">
					<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto" loading="lazy">
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
						<h2 class="text-white">Ranked as #1 <span>Digital Marketing</span> Company</h2>
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
						<div class="awards-item">
							<div class="item">
								<div class="card">
									<div class="card-body">
										<img src="uploads/{{$item['image']}}" class="awards-img w-75 d-block mx-auto" width="auto"
											height="auto" loading="lazy">
										<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									</div>
								</div>
							</div>
						</div>
					</a>

					@else
					<div class="awards-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="awards-img w-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
								</div>
							</div>
						</div>
					</div>
					@endif

					@else
					@if($item['heading'] == "Top Website design Agencies")
					<a href="{{$item['comment']}}" target="_blank">
						<div class="awards-item">
							<div class="item">
								<div class="card">
									<div class="card-body">
										<img src="uploads/{{$item['image']}}" class="awards-img w-75 d-block mx-auto" width="auto"
											height="auto" loading="lazy">
										<h5 class="text-center pt-3">{{$item['heading']}}</h5>
									</div>
								</div>
							</div>
						</div>
					</a>
					@else
					<div class="awards-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img src="uploads/{{$item['image']}}" class="awards-img w-75 d-block mx-auto" width="auto" height="auto" loading="lazy">
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

						<div class="video-overlay" data-target="player-{{$key}}"
							style="position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;z-index:2;">
						</div>

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
									<img src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch </p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-md-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
									<img src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-lg-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
									<img src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto" alt="DesignRush" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by DesignRush</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
									<img src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto" alt="GoodFirms" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms </p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
									<img src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto" alt="Trustpilot" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Trustpilot</p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
									<img src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto" alt="Sortlist" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist </p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://upcity.com/profiles/appsnation" target="_blank">
									<img src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity </p>
								</a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
									<img src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto" alt="SiteJabber" width="auto" height="auto" loading="lazy">
									<img src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto" loading="lazy">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by SiteJabber</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 fadeIn my-auto text-center">
				<div class="review-title-ref mt40">
					<a href="{{url('/testimonials')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews
						<i class="fas fa-chevron-right fa-ani"></i>
					</a>
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
		<div class="row">
			<div class="col-sm-12 mt20 wow fadeIn">
				<div class="accordion" id="accordionExample-a">
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-b">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								What Does A Digital Marketer Do?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>A digital marketer is a person who is responsible for promoting your product or
										services on the internet by using various social media platforms. They are also
										responsible for driving traffic to your website.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Would My Business Benefit From Digital Marketing Services?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>If you are a business owner then you know the importance of digital marketing and
										its various services. Digital marketing is the best way to reach to your target
										audience and to promote your business online. There are a lot of benefits
										associated with digital marketing. And it is also the best way to market your
										business in an efficient manner.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How Cost-Effective Is Digital Marketing Compared With Traditional Marketing?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Digital marketing has gained popularity in the past few years and it has become
										the most effective way to reach out to the target audience.</p>
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
								data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								How Do You Identify A Successful Digital Marketing Company?
							</button>
						</h2>
						<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Here are the key factors that you should consider while selecting a good digital
										marketing company for your business:</p>
									<ul class="ps-5">
										<li>Does the company have a portfolio?</li>
										<li>Does the company have a team of experts?</li>
										<li>What is the duration of the contract?</li>
										<li>Is the company affordable?</li>
									</ul>
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