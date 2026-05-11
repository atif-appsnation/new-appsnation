@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 loyalty-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Loyalty App Service</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">The goal of a loyalty app is to improve marketing strategies that encourage customers to make purchases. The app aims to persuade users to buy more products that are part of the loyalty program, either in addition to or instead of non-loyalty program products.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn text-end">
				<img loading="lazy" src="images/solutions/loyalty-app-1.webp" alt="Loyalty App" class="img-fluid no-shadow" width="100%" height="100%" />
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
				<h2>Loyalty App Feature Listing</h2>
			</div>
		</div>
		<div class="row mt-5 wow fadeIn">
			<div class="col-lg-6">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/loyalty-app-1.webp" alt="Loyalty App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/history.svg" width="100%" height="100%" alt="search" data-was-processed="true">
							<p> <span>Promotional Offers</span>Exciting promotions and offers await you as soon as you sign up for our loyalty program.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/payment-gateways.svg" width="100%" height="100%" alt="services" data-was-processed="true">
							<p> <span>Earn & Redeem Points</span>Enjoy a wide range of offers with our user-friendly earn and redeem points system.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Rewards</span>Our rewards' system is designed to be systematic and well-balanced, offering users a wide range of offers to enjoy.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="booking" data-was-processed="true">
							<p> <span>Share with Friends</span>Easily invite your friends to join the app and earn points for both them and yourself.</p>
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
				<h2>Admin Panel Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 my-auto wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/loyalty-app-2.webp" alt="Loyalty App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard &amp; Analytics</span>Effortlessly track and analyze your app's performance with our comprehensive admin dashboard. Get rapid reports on your users, sales, profits, and more.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="content" data-was-processed="true">
							<p> <span>Content Management</span>Easily create, upload, and manage all your app content with our simple and user-friendly content management system. Make changes in real-time with ease.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="user" data-was-processed="true">
							<p> <span>User Management</span>Effortlessly manage all your app users and stay informed about their interests with our user-friendly user management system.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Promotions &amp; Discounts Management</span>Create irresistible promotions and offers to attract users and encourage them to purchase your products, unlocking various discounts.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Reviews &amp; Ratings Management</span>Stay updated with your valuable customers' thoughts and experiences, and manage their reviews and ratings with our easy-to-use management system.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Notifications/Alerts</span>Stay informed about your customers' activities and statuses with our notification/alert feature.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/loyalty-app-3.webp" alt="Loyalty App" class="img-fluid no-shadow" width="100%" height="100%" />
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
					<img loading="lazy" src="images/home/google-certifie-agency.webp" width="100%" height="100%" alt="Google Developers">
					<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img loading="lazy" src="images/home/adobe-logos.webp" width="100%" height="100%" alt="Adobe Solution Partner">
					<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img loading="lazy" src="images/home/microsoft-certified-partner.webp" width="100%" height="100%" alt="Microsoft Certified Consulting">
					<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img loading="lazy" src="images/home/amazon-web-services.webp" width="100%" height="100%" alt="Amazon Web Service">
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