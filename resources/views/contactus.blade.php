@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 contact-us">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-lg-6 v-center wow fadeIn">
				<div class="bread-inner">
					<div class="bread-title">
						<h1 class="text-white">How can we help?</h1>
						<p class="text-white pt-3">We make all your dreams come true in a successful project.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start Locations -->
<div class="container py-5 wow fadeIn">
	<div class="common-heading text-l text-center">
		<!-- <span>Contact Now</span> -->
		{!! NoCaptcha::renderJs() !!}
		<h2 class="mt0 mb0 text-center"><span>Let’s Grow <br>
			</span> Your Business Digitally</h2>
		<p class="mb20 mt20 text-center">We build powerful digital products and execute marketing strategies that deliver real results.
		</p>
	</div>
</div>
<section class="map-new my-5">
	<div class="container">
		<div class="row">
			<div class="col-12 distribution-map">
				<img loading="lazy" src="images/contact-us/map-bg.png" class="d-block mx-auto img-fluid" alt="">
				<button class="map-point map-button-first">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11690.619418161337!2d-1.8458442!3d52.4456049!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bbcc98d70ba3%3A0x4f7a3b223ad6df38!2sAppsNation%20Birmingham%20UK!5e1!3m2!1sen!2s!4v1772091456328" width="600" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info" onclick="window.open('https://maps.app.goo.gl/JXGHweLtiAdgJ7bb9', '_blank')">
							<h2>AppsNation – Birmingham</h2>
							<p>Driving digital innovation in Birmingham with cutting-edge mobile apps, games, and enterprise solutions.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-second">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14274.095804780358!2d12.524164!3d41.9087828!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61405472417d%3A0xe4857110bc425f2d!2sAppsNation%20Rome%20Italy%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772171521448!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/i99thaBkVxyCL66T8', '_blank')">AppsNation – Rome Italy</h2>
							<p>Transforming ideas into high-performance mobile and enterprise solutions across Rome.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-third">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15153.144248123956!2d144.966442!3d-37.8107359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad643013f466353%3A0xfe6b56f1b8b557e5!2sAppsNation%20Melbourne%2C%20Victoria%2C%20Australia%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772171679284!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/FvvHHDP1gKUH1w4QA', '_blank')">AppsNation – Melbourne, Victoria, Australia</h2>
							<p>Delivering innovative mobile, gaming, and enterprise technologies for businesses in Melbourne.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-four">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content ">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13878.542938178958!2d-79.3817439!3d43.6486362!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b359c37db700f%3A0xc5b596e5fa6b45b9!2sAppsNation%20Toronto%2C%20Canada%20%7C%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%7C%20Web%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772171740700!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/ommbXCEzZHravCBaA', '_blank')">AppsNation – Toronto, Canada</h2>
							<p>Delivering next-gen mobile apps, games, and enterprise systems for growing brands in Toronto. </p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-five">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.316295705815!2d-118.42416170000001!3d34.020604899999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf4180cfb6b3%3A0x697ef1b840cadba5!2sAppsNation%20California%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772171789940!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/iPtnoiHP7d3M9aF48', '_blank')">AppsNation – California</h2>
							<p>Empowering businesses across California with scalable apps, immersive games, and enterprise technology.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-six">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11329.650966461091!2d-1.5566791!3d53.7936914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795fe11df69c89%3A0x2512f4713f704572!2sAppsNation%20Leads%20UK%20%7C%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%7C%20Web%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772171836547!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/YCm3BqGsYNYmexW16', '_blank')">AppsNation – Leads UK</h2>
							<p>Building powerful digital products and enterprise solutions for forward-thinking businesses in Leeds.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-seven">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17429.325859458597!2d46.7554717!3d24.6718273!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f07eec9c38d6b%3A0x7e0e73b0c0039eb9!2sAppsNation%20-%20DAK%20(Saudi%20Arabia)%20%7C%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%7C%20Web%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772171890372!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/4x7FAfvoYZRMMSNE8', '_blank')">AppsNation – DAK (Saudi Arabia)</h2>
							<p>Enabling digital transformation in Saudi Arabia with smart apps and enterprise-grade systems.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-eight">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73626204.69556536!2d19.4136454053761!3d20.41822444147691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4312d8c0053f%3A0x77db15d689880e9!2sAppsNation%20Dubai%20%7C%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%7C%20Web%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772184498946!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/eZg1SofJeCJK6b8v5', '_blank')">AppsNation – Dubai</h2>
							<p>Accelerating business growth in Dubai through advanced apps, games, and enterprise solutions.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-nine">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2983.6686596909567!2d-0.10854269999999999!3d51.52020170000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761bdfe7610d2b%3A0x69c74dab4d1016bf!2sAppsNation%20London%20UK%7C%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%7C%20Web%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772172511803!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/M7Y2gLTxS11AC3rR9', '_blank')">AppsNation – London UK</h2>
							<p>Creating innovative apps, games, and enterprise platforms for global brands from London.</p>
						</div>
					</div>
				</button>
				<button class="map-point map-button-ten">
					<i class="fa-solid fa-location-dot"></i>
					<div class="content">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4350.111723759623!2d67.07638947596762!3d24.877692444566698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fa63bb04945%3A0xb8d931eabee961a0!2sAppsNation%20Karachi%20%7C%20(Mobile%20Apps%20%7C%20Games%20%7C%20VR%20%2FAR%20%7C%20Metaverse%20%7C%20Web%20%26%20Software%20Development%20Company)!5e1!3m2!1sen!2s!4v1772518664410!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="info">
							<h2 onclick="window.open('https://maps.app.goo.gl/ix1FuxjXWYjeweXm6', '_blank')">AppsNation – Karachi, Pakistan</h2>
							<p>Powering digital success in Karachi with scalable apps, interactive games, and enterprise platforms. </p>
						</div>
					</div>
				</button>
			</div>
		</div>
	</div>
</section>
<!-- End Locations -->

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
				<img loading="lazy" src="images/why-choose/why-choose.webp" class="img-fluid mt-4" width="100%" height="100%">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 col-lg-3">
				<div class="card h-100">
					<div class="card-body">
						<img loading="lazy" src="images/why-choose/team-scalibility.webp" class="img-fluid my-3" width="100%" height="100%" alt="Team Scalability">
						<h3>Team Scalability</h3>
						<p class="mb-0">Boost your team with domain specialists whenever required.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="card h-100">
					<div class="card-body">
						<img loading="lazy" src="images/why-choose/quick-time-to-market.webp" class="img-fluid my-3" width="100%" height="100%" alt="Quick Time to Market">
						<h3>Quick Time to Market</h3>
						<p class="mb-0">Streamlined delivery is intended to achieve efficiency on time.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card h-100">
					<div class="card-body">
						<img loading="lazy" src="images/why-choose/cost-saving.webp" class="img-fluid my-3" width="100%" height="100%" alt="Cost Saving">
						<h3>Cost Saving</h3>
						<p class="mb-0">Get experienced and competent developers at a reasonable price.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card h-100">
					<div class="card-body">
						<img loading="lazy" src="images/why-choose/skilled-resources.webp" class="img-fluid my-3" width="100%" height="100%" alt="Skilled Resources">
						<h3>Skilled Resources</h3>
						<p class="mb-0">Get access to skilled mobile gaming experts with domain knowledge.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose -->

<!--Start Enquire Form-->
<!-- <section class="contact-page py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 v-center">
				 <img loading="lazy" src="images/why-choose/why-choose.webp" width="100%" height="100%" class="img-fluid">
			</div>
			<div class="col-lg-6 v-center">
				<div class="contact-details">
					<div class="email-card wow fadeIn" data-wow-delay=".2s">
						<div class="info-card v-center text-white">
							<span><i class="fas fa-phone-alt"></i> Phone:</span>
							<div class="info-body">
								<p>Assistance hours: Monday – Friday, 9 AM to 5 PM</p>
								<a href="tel:+13237989803">+1 (323) 798-9803 </a>
							</div>
						</div>
					</div>
					<div class="email-card mt20 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
						<div class="info-card v-center text-white">
							<span><i class="fas fa-envelope"></i> Email:</span>
							<div class="info-body">
								<p>Our support team will get back to you in 24-h during standard business hours.</p>
								<a href="mailto:info@appsnation.co">info@appsnation.co</a>
							</div>
						</div>
					</div>
					<div class="skype-card mt20 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
						<div class="info-card v-center">
							<a href="https://www.facebook.com/appsnation.co" target="_blank">
								<span><i class="fa-brands fa-facebook"></i> Facebook</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://www.instagram.com/appsnation.us/" target="_blank">
								<span><i class="fa-brands fa-instagram"></i> Instagram</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://www.linkedin.com/company/appsnation/" target="_blank">
								<span><i class="fa-brands fa-linkedin-in"></i> LinkedIn</span>
							</a>
						</div>
						<div class="info-card v-center">
							<a href="https://twitter.com/AppsnationCo" target="_blank">
								<span><i class="fa-brands fa-x-twitter"></i> Twitter</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End Enquire Form-->

@endsection