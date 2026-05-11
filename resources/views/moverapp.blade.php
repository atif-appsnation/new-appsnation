@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 mover-app">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Mover App Development Services</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Do you have any plans to relocate your residence? Or do you require assistance with packing and transferring items from your home to a friend's home? All of this is possible with Apps Nation.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn text-end">
				<img loading="lazy" src="images/solutions/mover-app-1.webp" alt="Mover App" width="100%" height="100%" class="img-fluid no-shadow" />
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
				<h2>Mover App Customer Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/mover-app-1.webp" alt="Mover App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 my-auto wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="search" data-was-processed="true">
							<p> <span>Profile Management</span>Change your password or edit your profile. You can also the view Courier's Reviews and Ratings.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="services" data-was-processed="true">
							<p> <span>Order Management</span>Create a new order and choose an order type based on your item. View your Order History and there is also an option to Cancel Order.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/search.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Search Nearby Courier persons</span>For the customer’s ease, the app searches for close or nearby courier persons.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="booking" data-was-processed="true">
							<p> <span>Track Order / Live Tracking of Courier</span>With the Live Tracking of Courier person feature on Map, you can keep an eye on the movement of your order. </p>
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
							<img loading="lazy" class="lazy loaded" src="images/solutions/check-out.svg" width="100%" height="100%" alt="check" data-was-processed="true">
							<p> <span>Rate your experience with Courier</span>You can easily rate your experience with the person courier so you get the best service next time.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/payment-gateways.svg" width="100%" height="100%" alt="payment" data-was-processed="true">
							<p> <span>Membership & Subscription</span>Customers can avail of promo code and discount coupons premium with the availability of user subscription plans.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/e-wallet.svg" width="100%" height="100%" alt="wallet" data-was-processed="true">
							<p> <span>Notifications Management</span>With the notification listing section, and push notifications options, you can manage the foreground and background app data.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/mover-app-2.webp" alt="Mover App" class="img-fluid no-shadow" width="100%" height="100%"/>
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
				<h2>App Courier Person Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/mover-app-3.webp" alt="Mover App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 my-auto wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="analytics" data-was-processed="true">
							<p> <span>Profile Management</span>Change your password or edit your profile. Customer reviews & ratings are available to view.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="content" data-was-processed="true">
							<p> <span>Request Management</span>Look at the customer requests. Answer customer's requests, request cancelled / rejected history of rrequests.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="user" data-was-processed="true">
							<p> <span>Manage & Plan Travel Route</span>Make a travel itinerary. Respond to requests in the vicinity of the travel route. Cancellation of travel plans view the travel plan timeline.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Live Navigation</span>With a live navigation option, it becomes easier for the users to navigate their orders.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 my-auto wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Live Tracking on Map</span>With this feature, tracking the order becomes feasible.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="bookings" data-was-processed="true">
							<p> <span>Rate your experience with Customer</span>You can rate your customer experience as well to ensure better performance next time.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Chat with Customer</span>Talk with the customer to ensure full assistance during the service.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Notifications Management</span>Push Notifications are a section of the notification listing. Scenarios for Foreground Apps App scenarios in the background.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/mover-app-4.webp" alt="Mover App" class="img-fluid no-shadow" width="100%" height="100%"/>
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
				<h2>App Admin Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/mover-app-2.webp" alt="Mover App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="analytics" data-was-processed="true">
							<p> <span>Customers Management</span>Premium Users Management option offers Block User, Enable / Disable User.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="content" data-was-processed="true">
							<p> <span>Riders Management</span>Block User, Enable / Disable User option is available in this feature.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="user" data-was-processed="true">
							<p> <span>Notifications Management</span>Send Push Notifications to Customers or Riders for the convenience of both parties.</p>
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
							<img loading="lazy" class="lazy loaded" src="images/solutions/promotions-and-discounts.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Promotions / Subscription Management</span>Management of Discount, Promo Codes, Management of Coupons, and Premium Packages available.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="bookings" data-was-processed="true">
							<p> <span>Orders Management</span>Orders that are currently being processed can be viewed here. </p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Reports Management</span>Reporting on product usage on a daily, weekly, and monthly basis.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/mover-app-4.webp" alt="Mover App" class="img-fluid no-shadow" width="100%" height="100%" />
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