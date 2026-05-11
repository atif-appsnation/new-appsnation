@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 travel-hospitality">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeIn">
				<div class="bread-titlev2 industry-title">
					<h1 class="banner-heading">Travel and Hospitality App Development Services</h1>
					<p class="banner-para mt20">Our developers keep customers engaged and informed with custom apps tailored for the travel and hospitality industry. We connect hotel and restaurant owners with their target audience through innovative mobile app development solutions.</p>
					<a href="{{url('/contact-us')}}" class="btn-main bg-btn3 lnk mt20">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start Hero-->
<div class="statistics-wrap my-5">
	<div class="container">
		<div class="row small mt0">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 my-auto wow fadeIn">
				<h2>Customer-Centric Travel And Hospitality Application Development</h2>
				<p class="pt-3">We offer diverse iOS and Android app development services in the travel and hospitality industry, ranging from assisting customers in finding the right hotel using GPS tracking to discovering the newest restaurants in the region. Our track record in this industry includes:</p>
				<ul class="content-list mt-3">
					<li>GPS enabled Hotel Finder Applications on iOS and Android.</li>
					<li>Region Based Restaurant Location Apps.</li>
					<li>NFC Payment enabled apps for smoother transactions.</li>
					<li>Hotel Reviews Community Application.</li>
					<li>Bed and Breakfast Application.</li>
				</ul>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4	mt-4 mt-md-4 mt-lg-0 wow fadeIn">
				<img loading="lazy" class="img-fluid" src="images/industries/travel-app-1.webp" width="100%" height="100%">
			</div>
		</div>
	</div>
</div>
<!--End Hero-->

<!--Start Why-->
<section class="service">
	<div class="row wow fadeIn">
		<div class="col-12 col-sm-12 col-md-6 img-container">
			<img loading="lazy" src="images/industries/travel-app-2.webp" class="img-fluid image" width="100%" height="100%">
		</div>
		<div class="col-12 col-sm-12 col-md-6 img-container">
			<img loading="lazy" src="images/industries/travel-app-3.webp" class="img-fluid image" width="100%" height="100%">
		</div>
	</div>
</section>
<!--End Why-->

<!--Start Why-->
<section class="industries py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeIn">
				<h2>Striving To Achieve Innovative And Cutting-Edge Solutions</h2>
			</div>
			<div class="col-lg-6 wow fadeIn mt-4 mt-lg-0">
				<p>Our expert team specializes in creating a strong, long-lasting online presence for brands. We offer top-notch iOS, Android, and wearable app design and development services, ensuring your brand stays ahead in the industry.</p>
			</div>
		</div>
		<div class="row mt-5 wow fadeIn">
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2">
				<div class="s-block wide-sblock industry-type-block">
					<div class="mobile-app-development"></div>
					<h6 class="pt-3">Mobile App Development</h6>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 mt-4 mt-sm-4 mt-md-0">
				<div class="s-block wide-sblock industry-type-block">
					<div class="mobile-product-strategy"></div>
					<h6 class="pt-3">Mobile Product Strategy</h6>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 mt-4 mt-sm-4 mt-md-0">
				<div class="s-block wide-sblock industry-type-block">
					<div class="strategic-design-consultancy"></div>
					<h6 class="pt-3">Strategic Design Consultancy</h6>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 mt-4 mt-sm-4 mt-md-4 mt-lg-4 mt-xl-0">
				<div class="s-block wide-sblock industry-type-block">
					<div class="mobile-app-qa-testing"></div>
					<h6 class="pt-3">Mobile App QA & Testing</h6>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 mt-4 mt-sm-4 mt-md-4 mt-lg-4 mt-xl-0">
				<div class="s-block wide-sblock industry-type-block">
					<div class="connected-devices"></div>
					<h6 class="pt-3">Connected Devices</h6>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-2 mt-4 mt-sm-4 mt-md-4 mt-lg-4 mt-xl-0">
				<div class="s-block wide-sblock industry-type-block">
					<div class="web-portal-development"></div>
					<h6 class="pt-3">Web Portal and Development</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why-->
@endsection