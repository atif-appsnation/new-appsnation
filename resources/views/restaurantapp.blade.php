@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 restaurant-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Restaurant App Service</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">This special platform allows you to select from a variety of organic and non-organic food establishments throughout the city. Importantly, it allows customers to select their meal and pay for it directly through the app. In addition, users can rate restaurants based on their food, hygiene, and service.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn text-end">
				<img loading="lazy" src="images/solutions/restaurant-app-1.webp" alt="Restaurant App" class="img-fluid no-shadow" width="100%" height="100%"/>
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
				<h2>Restaurant App Feature Listing</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/restaurant-app-1.webp" alt="Restaurant App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/search.svg" width="100%" height="100%" alt="search" data-was-processed="true">
							<p> <span>Restaurant Menu Option</span>Foodies can browse for their favorite meals in this intuitive and classified menu book.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" width="100%" height="100%" alt="services" data-was-processed="true">
							<p> <span>Discounts & Coupons Option</span>To entice your loyal consumers, offer exclusive discounts and vouchers.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Gallery Option</span>A prominent and eye-catching gallery to display delicious meals and your restaurant's atmosphere.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="mortgage" data-was-processed="true">
							<p> <span>Favorites Option</span>Favorites meals allow you to save and create a list of your favorite foods so you can easily reorder again.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/check-out.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Real Time Order Option</span>With our simple ordering system, you can order food in real-time, track your orders, and check the progress of your orders.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/history.svg" width="100%" height="100%" alt="check" data-was-processed="true">
							<p> <span>Table Reservation Option</span>To avoid queuing and disturbing your party vibe, use our quick pre-booking system.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="payment" data-was-processed="true">
							<p> <span>Reviews & Rating Option</span>With an easy review and rating system, you can stay up to current on your customers' experiences.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/e-wallet.svg" width="100%" height="100%" alt="wallet" data-was-processed="true">
							<p> <span>Payment Gateway Option</span>Easy payments and check-outs with popular and advanced payment methods.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="history" data-was-processed="true">
							<p> <span>Push Notifications Option</span>The history of previously booked services is maintained in an active and very well form.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Digital Receipts Option</span>By using digital receipts and invoicing, you can keep track of your food budget and costs.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/restaurant-app-2.webp" alt="Restaurant App" class="img-fluid no-shadow" width="100%" height="100%"/>
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
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/restaurant-app-3.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard Option</span>Through the Admin Dashboard, you can manage and examine your restaurant's app statistics and analytics, as well as get information on your users, sales, and profitability.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="content" data-was-processed="true">
							<p> <span>Branch Management Option</span>Organize your restaurant locations using an intuitive branch management solution.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="user" data-was-processed="true">
							<p> <span>User Management Option</span>View and manage all the application users and view their activities to know about their interests by the user management system.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Menu Management Option</span>Menu management allows you to create and manage menus with comprehensive categories, food items, and pricing.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Discounts Management Option</span>Monitor and generate a variety of promotional offers and discounts for customers to entice them to use the app by managing deals and coupons.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="bookings" data-was-processed="true">
							<p> <span>Promo Codes Management Option</span>Create and manage coupons and promo codes for app users to help them market the app using a coupon and promo code control system.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Order Management Option</span>The fast order management system allows you to keep track of, manage, and view all of your orders.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Reservation Management Option</span>Reservation management allows you to check availability and make bookings for your valued consumers.</p>
						</li>
						<li> <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Reviews & Ratings Management Option</span>Using our review and rating management system, you can stay up to speed on your valuable customers' ideas and experiences, as well as manage their reviews and ratings on your restaurant's cuisine and services.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block ">
					<img loading="lazy" src="images/solutions/restaurant-app-4.webp" alt="Restaurant App" class="img-fluid no-shadow" width="100%" height="100%" />
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