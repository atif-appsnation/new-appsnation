@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 travel-agency-web">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
			<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/header-logo.webp')}}" class="img-fluid" alt="Travel Agency Web Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white banner-heading">Welcome to Travelicious</h1>
					<h3 class="pt-4 text-white banner-heading">Where Unforgettable Journeys Await!</h3>
					<!-- <h3 class="mt50 text-white">TRAVELICIOUS</h5> -->
					<p class="pt-4 text-white">Discover the world with us and redefine how you travel. Our platform is designed to simplify every aspect of your travel experience, from planning to exploration.</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/header-web.webp')}}" class="img-fluid" alt="Travel Agency Web" width="100%" height="100%">
			</div>
		</div>
	</div>

</section>
<!--End Breadcrumb Area-->

<!--Start About Project-->
<section class="about-travel py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-center">About Travellicious</h1>
					<p class="text-center">Introducing Travelicious, your ultimate travel web for seamless planning and unforgettable adventures. From personalized recommendations tailored to your preferences, to easy booking and exclusive deals, Travelicious ensures that every journey is hassle-free and filled with excitement. Explore with confidence and discover new horizons with Travelicious by your side. Start your next travel experience today and transform the way you explore the world.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Design-->
<section class="design-process-travel py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="travel-web-user-and-research">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/user-and-research-analytics-icon.webp')}}" alt="User And Reseaarch Analysis" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">User And Research Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="travel-web-problem-and-solutions">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/problem-and-solutions-icon.webp')}}" alt="Problem And Solution" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Problem And Solution</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="travel-web-competitive-analysis">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/competitive-analysis-icon.webp')}}" alt="Competitive Analysis" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Competitive Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="travel-web-wireframe-icons">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/wireframe-icon.webp')}}" alt="Wire Frame" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Wire Frame</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Project Idea-->
<section class="project-idea-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">Travelicious is developing a cutting-edge travel booking platform grounded in meticulous user research. Through extensive case studies, online surveys, and interviews, we've pinpointed the pain points and preferences of travelers worldwide. Our platform will feature intuitive tools like personalized itinerary builders and real-time alerts, addressing the unique needs of each traveler. Beyond logistics, our aim is to inspire adventure with curated experiences that go beyond traditional services. With a strong emphasis on user-centered design, Travelicious is dedicated to delivering convenience, reliability, and excitement for every journey.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-1.webp')}}" alt="Travel Web Visuals" class="img-fluid about-phone" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="target-audience-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-2.webp')}}" alt="Travel Web Visuals" class="img-fluid about-phone" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Meet Our Audience: Your Ultimate Travel Companions</h2>
					<p class="text-middle">Our travel agency app caters to a diverse audience of modern travelers who value seamless planning and personalized experiences. From tech-savvy millennials and adventurous Gen Z travelers who embrace digital solutions, to busy professionals seeking efficient trip management, and families in search of family-friendly options—we cater to all travel preferences. Whether you're a solo explorer, luxury seeker, or budget-conscious traveler, Travelicious offers intuitive tools for personalized itinerary planning, real-time updates, and exclusive deals. We're committed to simplifying travel logistics and inspiring unforgettable adventures, ensuring that every journey with us is as smooth and rewarding as possible.</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->

<!--Start Project Challenges-->
<section class="project-challanges-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">Creating a travel agency app like Travelicious presents several challenges. These include designing a user-friendly interface that strikes a balance between simplicity and comprehensive features, seamless integration with various third-party services for booking and updates, ensuring robust data security, personalizing recommendations based on user preferences, scaling the platform to accommodate increased traffic, and navigating complex global travel regulations. Overcoming these obstacles requires a dedicated team committed to delivering a reliable and personalized travel booking experience for users worldwide.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-3.webp')}}" alt="Travel Web Visuals" class="img-fluid about-phone" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="solutions-delivered-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-1.webp')}}" alt="Travel Web Visuals" class="img-fluid about-phone" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Enhancing Your Travel Experience: Our Solution</h2>
					<p class="text-middle">Travelicious enhances every journey with personalized itinerary planning, real-time travel alerts, and a seamless booking process. Our app ensures hassle-free travel planning and management, providing curated experiences and reliable customer support to make every trip memorable and stress-free. Whether you're a frequent flyer or planning your dream vacation, Travelicious serves as your essential travel companion.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="results-impact-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Results/Impact</h2>
					<p class="text-middle">Travelicious has revolutionized travel by offering unparalleled convenience through easy booking and personalized recommendations. Users enjoy exclusive deals and real-time updates that make their journeys smoother and more enjoyable. With a global reach and positive user feedback, Travelicious continues to redefine travel experiences, connecting adventurers worldwide to unforgettable destinations with just a tap.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-2.webp')}}" alt="Travel Web Visuals" class="img-fluid about-phone" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="conclusion-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-3.webp')}}" alt="Travel Web Visuals" class="img-fluid about-phone" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion: Elevate Your Journeys with Travelicious</h2>
					<p class="text-middle">At Travelicious, we're committed to transforming the way you travel. With a focus on innovation, convenience, and personalization, our app empowers you to explore the world with confidence and ease. Whether you're seeking adventure, relaxation, or cultural immersion, Travelicious offers comprehensive solutions—from personalized itineraries to real-time updates and curated experiences—to ensure every trip is seamless and unforgettable. Join us in redefining travel experiences and embark on your next journey with Travelicious, where every destination is just a tap away.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Project Timeline-->
<section class="project-timeline py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb25">Project Timeline</h2>
				</div>
			</div>
			<div class="col-12 wow fadeIn" data-wow-delay="0.4s">
				<div class="project-timeline-img-div pt-3">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/project-timeline.webp')}}" alt="Project Timeline" class="img-fluid" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
	
</section>
<!--End Project Timeline-->

<!--Start Sitemap-->
<section class="sitemap-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb25">Sitemap</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="travel-sitemap-img-div pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/sitemap.webp')}}" alt="Sitemap" class="img-fluid d-block mx-auto" width="100%" height="100%">
	</div>
</section>
<!--End Sitemap-->

<!--Start Sketching-->
<section class="wireframe-travel py-5 wow fadeIn">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Wireframes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="sketching-img-div pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/wireframes.webp')}}" alt="Wireframe" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Sketching-->

<!--Start Visuals-->
<section class="visuals-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visual-text">
					<h2 class="mb30">UI/UX</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="sitemap-img-div pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/web-page.webp')}}" alt="Web Page" class="img-fluid w-100" width="100%" height="100%">
	</div>

	<!-- <div class="visuals-travel-background pt50 pb50">
		<div class="container">
			<div class="row mt-4 mt-lg-0">
				<div class="col-12 col-md-4 wow fadeIn" data-wow-delay="0.4s">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-1.webp')}}" alt="Travel Web Visuals" class="img-fluid">
				</div>
				<div class="col-12 col-md-4 wow fadeIn" data-wow-delay="0.6s">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-2.webp')}}" alt="Travel Web Visuals" class="img-fluid">
				</div>
				<div class="col-12 col-md-4 wow fadeIn" data-wow-delay="0.8s">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-3.webp')}}" alt="Travel Web Visuals" class="img-fluid">
				</div>
			</div>
		</div>
	</div> -->
</section>
<!--End Visuals-->

<!--Start Color Pallate-->
<section class="color-travel py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/tints.webp')}}" alt="Tints" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Shades</h4>
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/shades.webp')}}" alt="Shades" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="typography-travel py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/typography.webp')}}" alt="Typography" class="img-fluid" width="100%" height="100%">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Features-->
<section class="features-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb-0">Admin Features</h2>
				</div>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="travel-sub-heading">Dashboard</h5>
				<p>Through a full admin dashboard, you can manage and examine your app statistics and analytics,as well as get quick information on all of your users, sales earnings, and so on.</p>
				<hr class="my-5">
				<h5 class="travel-sub-heading">Content Management</h5>
				<p>Using an easy and user-friendly content management system, you can create, upload, and manage all of the information on the app, as well as make run-time modifications.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/admin-features-1.webp')}}" alt="Travel Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/admin-features-2.webp')}}" alt="Travel Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="travel-sub-heading">User Management</h5>
				<p class="text-end">By using a user management system, you can control and manage all application users, as well as observe their activities and learn about their interests.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="travel-sub-heading">Services Management</h5>
				<p class="text-end">Create, maintain, and modify services as well as their data that are presented on the app for users to view and book.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="travel-sub-heading">Promotions</h5>
				<p>Create unique promos and discounts to entice customers to purchase your products and take advantage of varied discounts.</p>
				<hr class="my-5">
				<h5 class="travel-sub-heading">Bookings Management</h5>
				<p>Start managing all bookings made on the application by different users, as well as accept/reject bookings based on service availability, using the booking management platform.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/admin-features-3.webp')}}" alt="Travel Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Features-->
<section class="features-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb-0">Features</h2>
				</div>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="travel-sub-heading">Search</h5>
				<p>Users can utilize a quick and easy search option to find the services they need.</p>
				<hr class="my-5">
				<h5 class="travel-sub-heading">Services</h5>
				<p>A large and diverse selection of services is available for valuable users to search for their chosen services.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-1.webp')}}" alt="Travel Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-web/travel-web-visuals-2.webp')}}" alt="Travel Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="travel-sub-heading">Filters</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="travel-sub-heading">Booking</h5>
				<p class="text-end">To avoid queuing and ruining the mood, an instant pre-booking method is available.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->

@endsection