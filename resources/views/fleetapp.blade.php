@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 fleet-app">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Fleet App Development Services</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Fleet a mentoring car software that allows users to earn money while delivering a straightforward, cost-effective, and entertaining experience for customers.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn text-end">
				 <img loading="lazy" src="images/solutions/fleet-app-1.webp" alt="Fleet App" class="img-fluid no-shadow" width="100%" height="100%" />
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start Why-->
<section class="solutions py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<h2>App Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					 <img loading="lazy" src="images/solutions/fleet-app-1.webp" alt="Fleet App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/booking.svg" width="100%" height="100%" alt="search" data-was-processed="true">
							<p> <span>Work Orders</span>Drivers can instantly obtain the job and start working on it thanks to an easy real-time request accepting function.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/services.svg" width="100%" height="100%" alt="services" data-was-processed="true">
							<p> <span>Preventive Maintenance</span>Regular servicing, inspections, and repairs, such as lubrication, adjustments, cleaning, testing, and the replacement of old parts, are all part of automobile servicing.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Fuel Management</span>Fuel-management systems are intended to properly measure and manage fuel consumption in transportation. On each filling, an automated system evaluates the average gasoline consumption.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="booking" data-was-processed="true">
							<p> <span>Accidental Maintenance</span>Adding accident maintenance reports is a simple and quick function that keeps the admin up to date.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="mortgage" data-was-processed="true">
							<p> <span>GPS Integration</span>Find the best routes, get precise locations, and share your present location with others using flexible and adaptive maps.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Push Notifications / Alerts</span>Drivers receive instant messages regarding their activity and developments linked to their demands, among other things.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why-->

<!--Start Why-->
<section class="solutions py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12">
				<h2>Admin Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					 <img loading="lazy" src="images/solutions/fleet-app-2.webp" alt="Fleet App" class="img-fluid no-shadow" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard &amp; Analytics</span>Through a full admin dashboard, you can manage and analyze your app statistics and analytics, as well as get quick information on all of your users, sales, and earnings.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="content" data-was-processed="true">
							<p> <span>User Management</span>By using a user management system, you can control and manage all application users, as well as view their activities and learn about their interests.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="user" data-was-processed="true">
							<p> <span>Driver Management</span>Through driver management, you can monitor and control all of your drivers' activity, order fulfillment, and so on.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/services.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Vehicle Management</span>Manage all of your vehicles and review each driver's service class record.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 my-auto wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Work Order Management</span>Create, manage, and track all of your work orders, as well as allocate them to your drivers.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/services.svg" width="100%" height="100%" alt="bookings" data-was-processed="true">
							<p> <span>Maintenance Management</span>View all of your vehicles' maintenance records and create daily, weekly, and month-by-month summaries.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Fuel Management</span>Through a simple and user-friendly fuel management system, you can view all of your vehicles' fuel statistics.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Accidental Management</span>Through a simple and user-friendly accident management system, you can view all of your vehicle's accident records and overall spending.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Notifications / Alerts</span>The notification/alerts tool will keep you up to date on your driver's acts and status.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block wow fadeIn">
					 <img loading="lazy" src="images/solutions/fleet-app-3.webp" alt="Fleet App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why-->

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
					 <img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="100%" height="100%">
					<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					 <img loading="lazy" src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="100%" height="100%">
					<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					 <img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="100%" height="100%">
					<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					 <img loading="lazy" src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="100%" height="100%">
					<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Technologies -->

<!-- Start Why Choose -->
<section class="why-choose-section py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-6 my-auto">
				<div data-text="Partner" class="light-bg-text bg-text">
					<h2>Why Choose <span>AppsNation</span> As Your <span>Development Partner</span></h2>
				</div>
				<p class="pt-2">AppsNation has been working in the software development field since 2016. We have worked with 300+ businesses. Moreover, AppsNation has its own play store where we have 50+ different apps and software, which most development companies don't have. AppsNation has its own 50+ certified developers and designers team that helps you convert the idea into reality.</p>
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
@endsection