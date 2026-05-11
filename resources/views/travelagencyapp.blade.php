@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 travel-agency-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-auto">
			<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/header-logo.webp')}}" class="img-fluid w-25" alt="Travel Agency App Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white banner-heading">Welcome to Travelicious</h1>
					<h3 class="pt-4 text-white banner-heading">Your Ultimate Travel Companion!</h3>
					<!-- <h3 class="mt50 text-white">TRAVELICIOUS</h5> -->
					<p class="pt-4 text-white">Whether you're planning a spontaneous weekend getaway or a meticulously planned international adventure, Travelicious is here to make your travel experience seamless and memorable. With our intuitive platform, you can explore the world with confidence, knowing that every aspect of your journey is taken care of effortlessly.</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/header-phone.webp')}}" class="img-fluid" alt="Travel Agency App" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="about-travel wow fadeIn py-5" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<h2>Best App</h2>
					<h2 class="span">For Travelling</h2>
					<p>Travelicious stands out as the ultimate travel planning tool, designed to cater to the diverse needs of modern travelers. From booking flights and accommodations to discovering local attractions and hidden gems, Travelicious simplifies every step of your journey. Our commitment to user experience excellence ensures that every interaction with the app is intuitive, efficient, and tailored to enhance your travel experience. With Travelicious, travel planning becomes not just a task but an enjoyable part of your adventure.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/about-travel-app.webp')}}" alt="Travel App" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About Project-->
<section class="about-goal-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-white text-center">Project Goal</h1>
					<p class="text-white text-center">At Travelicious, our goal is to revolutionize the travel experience by providing a comprehensive, user-friendly app that takes the stress out of travel planning. Through extensive research and development, we've crafted a platform that integrates cutting-edge technology with user-centric design principles. Our vision is to empower travelers of all backgrounds to explore the world with ease, confidence, and excitement. Whether you're a seasoned globetrotter or a first-time explorer, Travelicious is your go-to companion for unlocking new destinations and creating unforgettable memories.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Project Idea-->
<section class="project-idea-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">Travelicious is more than just a travel app—it's a gateway to personalized travel experiences tailored to your preferences. With features like personalized itinerary builders, real-time updates, and curated recommendations, Travelicious ensures that every journey is planned and executed flawlessly. Our platform is designed to inspire adventure and discovery, offering insights and suggestions that go beyond traditional travel services. From business travelers seeking efficiency to families planning memorable vacations, Travelicious adapts to your needs, ensuring that every trip is as enriching and enjoyable as possible.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-1.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
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
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-2.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Target Audience</h2>
					<p class="text-middle">Travelicious caters to today's discerning travelers who value convenience, personalization, and seamless travel experiences. Whether you're traveling solo, with family, or for business, Travelicious provides the tools and resources to make your journey stress-free and rewarding. Our platform is designed to accommodate diverse travel preferences and styles, ensuring that every user finds value in our comprehensive suite of travel solutions. With Travelicious, you can explore new destinations confidently, knowing that you have a reliable companion to guide you through every step of your adventure.</p>
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
					<p class="text-middle">Developing an app like Travelicious posed several challenges, from designing a user-friendly interface to integrating complex travel services seamlessly. Ensuring real-time updates, robust data security, and scalability were critical components in overcoming these challenges. Our team dedicated extensive resources to research and development, ensuring that Travelicious meets the highest standards of functionality, reliability, and user satisfaction. By addressing these challenges strategically, Travelicious has emerged as a leader in the travel app industry, offering innovative solutions that redefine travel planning for users worldwide.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-3.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
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
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-4.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Solution Delivered</h2>
					<p class="text-middle">Travelicious leverages advanced technology and innovative design to deliver a seamless travel planning experience. From the moment you start using Travelicious, you'll notice the difference in how easy it is to plan and manage your trips. With features like personalized recommendations, real-time travel alerts, and hassle-free booking options, Travelicious ensures that every aspect of your journey is taken care of with precision and care. Our commitment to excellence extends to every detail of the app, ensuring that users can navigate unfamiliar destinations confidently and enjoy stress-free travel experiences. With Travelicious, travel planning becomes not just a task but an enjoyable part of your journey.</p>
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
			<div class="col-lg-6 my-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Result Conclusion</h2>
					<p class="text-middle">Since its launch, Travelicious has redefined travel planning by providing users with a reliable companion that enhances their travel experiences and fosters exploration. Our platform continues to evolve with new features and updates that cater to the changing needs of travelers worldwide. Join Travelicious today and discover how easy and rewarding travel planning can be. Whether you're dreaming of a tropical getaway, a cultural expedition, or a city escape, Travelicious is your ultimate travel companion, ready to guide you through every step of your journey. Experience the world with Travelicious and redefine the way you travel, where every destination is just a tap away.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-1.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<!-- <section class="conclusion-travel py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-2.webp')}}" alt="Travel App Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion</h2>
					<p class="text-middle">In conclusion, the project of integrating a travel booking company into our mobile application was a resounding success. It not only met the initial project goals but also set the stage for future enhancements and expansions. Moving forward, the project can explore adding more personalized features and expanding service offerings to cover more geographical locations. This case study serves as a testament to the potential benefits of integrating comprehensive service offerings into a user-friendly mobile application.</p>
				</div>
			</div>
		</div>
	</div>
</section>  -->
<!--End Conclusion-->

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
				<div class="travel-app-sketching-icon">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/sketching-icon.webp')}}" alt="Sketching" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Sketching</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="travel-app-wireframe-icon">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/wireframe-icon.webp')}}" alt="Wireframe" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Wireframe</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="travel-app-branding-icon">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/branding-icon.webp')}}" alt="Branding" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Branding</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="travel-app-visuals-icon">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/visuals-icon.webp')}}" alt="Visuals" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Visuals</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Sketching-->
<section class="sketching-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb25">Sketching</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="sketching-img-div pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/sketching.webp')}}" alt="Sketching" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Sketching-->

<!--Start Wireframe-->
<section class="wireframe-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Wireframes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="sketching-img-div pt-3 wow fadeIn" data-wow-delay="0.6s">
		<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/wireframes.webp')}}" alt="Wireframe" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Wireframe-->

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
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/typography.webp')}}" alt="Typography" class="img-fluid" width="100%" height="100%">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Visuals-->
<section class="visuals-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visual-text">
					<h2 class="mb30">Visuals</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="visuals-travel-background pt50">
		<div class="container">
			<div class="row mt-4 mt-lg-0">
				<div class="col-12 wow fadeIn" data-wow-delay="0.4s">
					<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals.webp')}}" alt="Travel App Visuals" class="img-fluid travel-app-visuals mx-auto d-block" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Features-->
<section class="features-travel py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-end">
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
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-1.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-4.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="travel-sub-heading">Filters</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="travel-sub-heading">Booking</h5>
				<p class="text-end">To avoid queuing and ruining the mood, an instant pre-booking method is available.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="travel-sub-heading">Mortgage</h5>
				<p>This feature facilitates the user with a logical and systematic approach to calculating and obtaining the best mortgage rates.</p>
				<hr class="my-5">
				<h5 class="travel-sub-heading">Promotions & Discounts</h5>
				<p>To entice your loyal consumers, offer exclusive promotions and discounts.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-2.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="1.0s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/travel-agency-app/travel-app-visuals-3.webp')}}" alt="Travel App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="travel-sub-heading">Check Out</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="travel-sub-heading">Payment Gateways</h5>
				<p class="text-end">Convenient transactions and check-outs with popular and advanced payment methods.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Download App-->
<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-end wow fadeIn" data-wow-delay="0.2s">
				<img loading="lazy" src="{{asset('images/case-studies/app-store.webp')}}" alt="App Store" class="w-25" width="100%" height="100%">
			</div>
			
			<div class="col-md-6 text-start wow fadeIn" data-wow-delay="0.4s">
				<img loading="lazy" src="{{asset('images/case-studies/google-play.webp')}}" alt="Google Play" class="w-25" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Download App-->
@endsection