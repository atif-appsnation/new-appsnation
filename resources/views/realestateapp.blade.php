@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 real-estate-app">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Best Real Estate App Development Services</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">The project's goal is to establish a unique and dynamic platform that allows users to easily search for houses for sale and rent. The project's goal is to develop a mobile application for users that allows them to conveniently seek for and search for properties, such as homes, offices, and apartments, based on their needs and requirements, and interact with real estate agents quickly and easily.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn text-end">
				<img loading="lazy" src="images/solutions/real-estate-app-1.webp" alt="Real Estate App" class="img-fluid no-shadow" width="100%" height="100%" />
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
				<h2>Real Estate App Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/real-estate-app-1.webp" alt="Real Estate App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/search.svg" alt="search" width="100%" height="100%" data-was-processed="true">
							<p> <span>Search properties</span>Users can utilize a quick and easy search option to find the properties they want.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="services" data-was-processed="true">
							<p> <span>Properties Listing</span>A large and diverse property list for our valued users to search for various homes.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Property Information</span>Detailed property details to learn everything there is to know about the property.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="booking" data-was-processed="true">
							<p> <span>Amenities Information</span>Customers may take advantage of a longer variety of amenities to get the most out of their residences</p>
						</li>
						<!-- <li> <img loading="lazy" class="lazy loaded" src="images/solutions/mortgage-finance-center.webp" alt="mortgage" data-was-processed="true">
							<p> <span>Mortgage</span>Mortgage center with a logical and coherent approach to calculating and obtaining the best mortgage rates.</p>
						</li> -->
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Contact Agent</span>To contact the agents right away, use the call, message, or email options.</p>
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
							<img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="check" data-was-processed="true">
							<p> <span>Map Integration</span>Maps that are dynamic and responsive to help you find the best routes and pinpoint specific locations.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="payment" data-was-processed="true">
							<p> <span>Gallery</span>Beautiful photographs and videos of real estate locales are displayed in a prominent and gazing gallery.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="wallet" data-was-processed="true">
							<p> <span>Favorites</span>The Favorites option allows you to save and create a list of your favorite properties so that you can discover them easily afterward.</p>
						</li>
						<li> 
							<img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="history" data-was-processed="true">
							<p> <span>Push Notifications</span>Get instant information about your customers' actions, contacts, and reviews.</p>
						</li>
						<!-- <li> <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" alt="reviews" data-was-processed="true">
							<p> <span>Testimonials</span>Testimonials</p>
						</li> -->
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="property" data-was-processed="true">
							<p> <span>Reviews &amp; Ratings</span>Users will receive instant notifications regarding their actions and reservations.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/real-estate-app-2.webp" alt="Real Estate App" class="img-fluid no-shadow" width="100%" height="100%" />
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
					<img loading="lazy" src="images/solutions/real-estate-app-3.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn my-auto">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="analytics" data-was-processed="true">
							<p> <span>Dashboard &amp; statistics</span>Through a full admin dashboard, you can manage and analyze your app statistics and analytics, as well as get quick information on all of your users, sales, and earnings.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="content" data-was-processed="true">
							<p> <span>Content Management</span>Generate, edit, and organize all the user's content, as well as make changes in real-time, using a simple and user-friendly content management system.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="user" data-was-processed="true">
							<p> <span>User Management</span>By using the user management system, you can see and control all the application users, as well as their behaviors, and learn about their preferences.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Properties Management</span>Property management allows you to maintain and examine a variety of real estate listings.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Amenities Management</span>Through amenities management, you may see and control a large number of amenities.</p>
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
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" alt="promotions" data-was-processed="true">
							<p> <span>Contact Agent</span>To reach the agents right away, use the call, message, or email options.</p>
						</li>
						<!-- <li> <img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" alt="bookings" data-was-processed="true">
							<p> <span>Mortgage/Finance Management</span>Maintain awareness of users' mortgage/finance needs and keep them up to speed with the latest finance rates and plans via the mortgage current mortgage rates and strategies management system.</p>
						</li> -->
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Gallery Management</span>Through the gallery management system, you may view, update, upload, and manage a large number of photographs and movies.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Testimonials Management</span>Upload, review, and manage valuable testimonials to help users better understand and market the software.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Review &amp; Ratings Management</span>Using a review and rating management system, you may stay up to speed on your important customers' thoughts and experiences, as well as manage their services-based reviews.</p>
						</li>
						<li>
							<img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Notifications / Alerts</span>Use the notification tool to stay up to date on your customers' operations and status.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn">
				<div class="image-block">
					<img loading="lazy" src="images/solutions/real-estate-app-4.webp" alt="Real Estate App" class="img-fluid no-shadow" width="100%" height="100%" />
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