@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 fitness-app">

	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="text-white" data-wow-delay=".2s">Fitness App Service</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">AppsNation uses innovative technology to design and develop fitness apps that become a go-to for fitness and sports enthusiasts, with all the necessary features to meet their needs. We are here to put your idea into action if you want it to be validated.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn text-end">
				 <img loading="lazy" src="images/solutions/fitness-app-1.webp" alt="Fitness App" class="img-fluid no-shadow" width="100%" height="100%" />
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
				<h2>Fitness App Feature Listing</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<div class="image-block my-auto wow fadeIn">
					 <img loading="lazy" src="images/solutions/fitness-app-1.webp" alt="Fitness App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>
							 <img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="search" data-was-processed="true">
							<p> <span>Management of Profile</span>Set and edit your profile information and change your account password with this feature. Our profile system allows you to connect with your friends.</p>
						</li>
						<li>
							 <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="services" data-was-processed="true">
							<p> <span>Management of Health</span>Set and track your fitness goals with the help of a calorie counter, a sleep tracker, and a heart rate monitor. You can also look at your prior work.</p>
						</li>
						<li>
							 <img loading="lazy" class="lazy loaded" src="images/solutions/booking.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Management of Timeline</span>Create and share updates/statuses with your friends to keep your timeline up to date.</p>
						</li>
						<li>
							 <img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="booking" data-was-processed="true">
							<p> <span>Management of Newsfeed</span>Configure your newsfeed items and read the Admin's recipes, meals, blogs, and articles. Also, like and share your friends' posts and statuses on your page.</p>
						</li>
						<li>
							 <img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="mortgage" data-was-processed="true">
							<p> <span>Favorites Panel</span>Workouts, Meal Plans, and Recipes that have been designated as favorites can be seen at any time.</p>
						</li>
						<li>
							 <img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Generate and Get the Meal Plan</span>Make your meal plan based on your preferences and save it as a favorite.</p>
						</li>
						<li>
							 <img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>View Recipes</span>Recipes can be found by browsing, searching, and marking them as favorites.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="check" data-was-processed="true">
							<p> <span>View Videos</span>Recipes, meal plans, and workouts are all available in video format.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="payment" data-was-processed="true">
							<p> <span>Live Workout Sessions</span>Live training sessions for the public, with the option to rate or book a trainer for a one-on-one session.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/booking.svg" width="100%" height="100%" alt="wallet" data-was-processed="true">
							<p> <span>Management of Timetable</span>View your previous and prospective private sessions' schedules.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="history" data-was-processed="true">
							<p> <span>Food Logs</span>In your meal record, you may search for, add, and examine food, as well as see a consumption analysis.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/services-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Blogs and Articles</span>Read your favorite health and fitness blogs and publications.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Subscription and Memberships</span>Use a promo code or a discount coupon to get a discount on a premium subscription and have access to all services.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="property" data-was-processed="true">
							<p> <span>Management of Notifications</span>Even if you're not using the app, you'll get vital notifications. You won’t miss any critical notifications with our notifications panel.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block my-auto wow fadeIn">
					 <img loading="lazy" src="images/solutions/fitness-app-2.webp" alt="Fitness App" class="img-fluid no-shadow" width="100%" height="100%"/>
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
				<h2>Fitness App Features</h2>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6">
				<div class="image-block wow fadeIn ">
					 <img loading="lazy" src="images/solutions/fitness-app-3.webp" alt="Fitness App" class="img-fluid no-shadow" width="100%" height="100%" />
				</div>
			</div>
			<div class="col-lg-6 block-1 my-auto wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/user-management.svg" width="100%" height="100%" alt="analytics" data-was-processed="true">
							<p> <span>User Management Option</span>Manage your users. View your premium customers and block or unblock any user.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/bookings-management.svg" width="100%" height="100%" alt="content" data-was-processed="true">
							<p> <span>Trainer Management Option</span>Trainers must be managed. View the trainer leaderboard based on user ratings and block/unblock any trainer.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/history.svg" width="100%" height="100%" alt="user" data-was-processed="true">
							<p> <span>Recipes Management Option</span>Manage Recipes with the ability to add/remove recipes.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Meal Plans Management Option</span>Manage your meal plans with the ability to add and remove them.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Workouts Management Option</span>Manage public and private workout sessions, as well as the ability to add and remove the workouts.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-and-ratings.svg" width="100%" height="100%" alt="management" data-was-processed="true">
							<p> <span>Video Management Option</span>Manage Recipes, Meal Plans, and Workout Videos, as well as the ability to add and remove them.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-6 block-1 my-auto wow fadeIn">
				<div class="common-heading listSec text-l pl25">
					<ul>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/history.svg" width="100%" height="100%" alt="promotions" data-was-processed="true">
							<p> <span>Blogs / Articles Management Option</span>Manage your blogs and articles with the ability to add and remove them.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/notifications-alerts.svg" width="100%" height="100%" alt="bookings" data-was-processed="true">
							<p> <span>Notifications Management Option</span>Plan and send messages to clients informing them of new promotions and adverts.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/reviews-ratings-management.svg" width="100%" height="100%" alt="reviews" data-was-processed="true">
							<p> <span>Subscription Management Option</span>To market your goods, manage promo codes, discount coupons, and premium packages.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/dashboard-analytics.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Trainer Booking Management Option</span>Trainer bookings can be managed and prior bookings can be viewed.</p>
						</li>
						<li>  <img loading="lazy" class="lazy loaded" src="images/solutions/content-management.svg" width="100%" height="100%" alt="notifications" data-was-processed="true">
							<p> <span>Reports Management Option</span>Analyze product utilization via visual and graphic analysis.</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="image-block wow fadeIn">
					 <img loading="lazy" src="images/solutions/fitness-app-4.webp" alt="Fitness App" class="img-fluid no-shadow" width="100%" height="100%" />
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