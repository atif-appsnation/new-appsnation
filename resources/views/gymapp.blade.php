@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 gym-app">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-auto">
			 <img loading="lazy" src="{{asset('images/case-studies/gym-app/header-logo.webp')}}" class="img-fluid" alt="Gym App Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white">Welcome to
						<span class="span">GYMNASIUM<span>
					</h1>
					<h3 class="pt-4 text-white banner-heading">Your Ultimate Fitness Companion</h3>
					<p class="pt-4 text-white">Welcome to Gymnasium, your ultimate fitness companion that revolutionizes how you approach health and wellness goals. Whether you're stepping into the world of fitness for the first time or a seasoned athlete looking to enhance your routine, Gymnasium is meticulously designed to support every aspect of your journey towards a healthier, stronger you. Our app blends cutting-edge technology with expert guidance to ensure that achieving and maintaining your fitness aspirations isn't just a goal, but a sustainable lifestyle choice.</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/header-phone.webp')}}" class="img-fluid" alt="Gym App" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="gym-about py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<h2>Best App</h2>
					<h2 class="span">For Fitness</h2>
					<p class="pt-4">More than just a fitness app, Gymnasium acts as your personal trainer, nutritionist, and motivational coach—all conveniently housed within a user-friendly interface. We understand that starting and sticking to a fitness regimen can be challenging, which is why Gymnasium simplifies the complexities of fitness, making it accessible and enjoyable for everyone, anywhere, and anytime. From personalized workout plans tailored to your fitness level and goals to expert dietary recommendations, Gymnasium empowers you to take charge of your health with confidence and ease.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/about-gym.webp')}}" alt="Gym App" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About Project-->
<section class="gym-goal py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-white text-center">Project Goal</h1>
					<p class="text-white text-center">At Gymnasium, our primary goal is to empower individuals to lead healthier lives through personalized fitness solutions. We are committed to revolutionizing the way people approach their fitness goals by harnessing the synergy between cutting-edge technology and expert fitness knowledge. Our vision is to set new standards in digital fitness by delivering innovative solutions that inspire and educate users on their journey toward better health and well-being. By integrating advanced innovations with intuitive design principles, Gymnasium strives to make fitness accessible, effective, and enjoyable for users of all backgrounds and fitness levels.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Project Idea-->
<section class="gym-project-idea py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">The concept of Gymnasium was born from a visionary idea—to create a fitness app that not only provides users with essential workout routines and dietary guidance but also motivates and educates them throughout their fitness journey. By leveraging the power of mobile technology, Gymnasium brings the full spectrum of gym facilities and expert guidance directly to users' fingertips, allowing them to access professional advice and resources conveniently. The app's intuitive features are meticulously crafted to enhance user engagement and motivation, fostering a supportive community where fitness goals are not just achieved but exceeded.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-1.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="gym-target-audience py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-2.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Target Audience</h2>
					<p class="text-middle">Gymnasium caters to a diverse audience of fitness enthusiasts, ranging from beginners seeking foundational guidance to seasoned athletes aiming for peak performance. Whether your goal is weight management, muscle building, cardiovascular fitness, or overall wellness improvement, Gymnasium adapts to your unique preferences and objectives. Our platform is designed to accommodate busy schedules and varied lifestyles, ensuring that every user can benefit from personalized fitness solutions that align with their individual needs and goals.</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->


<!--Start Project Challenges-->
<section class="gym-project-challanges py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">The development of the Gymnasium presented several challenges that demanded innovative solutions. Integrating advanced workout algorithms with an intuitive user interface was critical to delivering a seamless user experience. Ensuring scalability across different devices and operating systems required meticulous planning and testing to guarantee consistent performance and accessibility. Furthermore, standing out in a competitive market saturated with fitness apps necessitated strategic marketing initiatives and continuous refinement based on user feedback and industry trends.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-3.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="gym-solutions-delivered py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-4.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Solution Delivered</h2>
					<p class="text-middle">To overcome these challenges, Gymnasium underwent rigorous development phases, collaborating closely with fitness experts and leveraging state-of-the-art technology. The result is a robust platform that not only meets but exceeds user expectations, offering dynamic workout plans, personalized nutrition advice, and comprehensive progress-tracking tools. These features are complemented by an engaging user interface that enhances user motivation and commitment to their fitness goals, thereby fostering long-term success and satisfaction.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="gym-results-impact py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Results/Impact</h2>
					<p class="text-middle">Since its launch, Gymnasium has made a profound impact on thousands of users worldwide, empowering them to achieve and surpass their fitness milestones. Users consistently report increased motivation, improved fitness levels, and a deeper understanding of their health and wellness needs. By providing a holistic approach to fitness management, Gymnasium has earned acclaim for its effectiveness and user-centric design, solidifying its position as a leading app in the digital fitness landscape.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-1.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="gym-conclusion py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-2.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion</h2>
					<p class="text-middle">Join the Gymnasium community today and embark on a transformative journey towards a healthier lifestyle. Whether you prefer working out at home, hitting the gym, or staying active on the go, Gymnasium is your steadfast companion. Download the app now and experience firsthand how Gymnasium can elevate your fitness journey, empower you to achieve sustainable health and wellness goals and redefine your approach to personal fitness.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Design-->
<section class="gym-design-process py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="gym-app-sketching-icon">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/sketching-icon.webp')}}" alt="Sketching" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Sketching</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="gym-app-wireframe-icon">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/wireframe-icon.webp')}}" alt="Wireframe" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Wireframe</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="gym-app-branding-icon">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/branding-icon.webp')}}" alt="Branding" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Branding</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="gym-app-visuals-icon">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/visuals-icon.webp')}}" alt="Visuals" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Visuals</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Sketching-->
<section class="gym-sketching py-5">
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
		 <img loading="lazy" src="{{asset('images/case-studies/gym-app/sketching.webp')}}" alt="Sketching" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Sketching-->

<!--Start Wireframe-->
<section class="gym-wireframe py-5">
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
		 <img loading="lazy" src="{{asset('images/case-studies/gym-app/wireframes.webp')}}" alt="Wireframe" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Wireframe-->

<!--Start Color Pallate-->
<section class="gym-color py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn text-center" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/tints.webp')}}" alt="Tints" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Shades</h4>
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/shades.webp')}}" alt="Shades" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="gym-typography py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/typography.webp')}}" alt="Typography" class="img-fluid" width="100%" height="100%">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Visuals-->
<section class="gym-visuals py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visual-text">
					<h2 class="mb30">Visuals</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="gym-visuals-background pt50 pb50">
		<div class="container">
			<div class="row mt-4 mt-lg-0">
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-1.webp')}}" alt="Gym App Visuals" class="img-fluid gym-app-visuals-1" width="100%" height="100%">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-2.webp')}}" alt="Gym App Visuals" class="img-fluid gym-app-visuals-2" width="100%" height="100%">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.8s">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-3.webp')}}" alt="Gym App Visuals" class="img-fluid gym-app-visuals-3" width="100%" height="100%">
				</div>
				<div class="col-12 col-md-6 col-lg-3 wow fadeIn" data-wow-delay="1.0s">
					 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-4.webp')}}" alt="Gym App Visuals" class="img-fluid gym-app-visuals-4" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Features-->
<section class="gym-features py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12 wow fadeIn">
				<div class="common-heading text-center">
					<h2 class="mb-0">Features</h2>
				</div>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="gym-sub-heading">Management of Profile</h5>
				<p>Set and Edit your profile information and change your account password with this feature. Our profile system allows you to connect with your friends.</p>
				<hr class="my-5">
				<h5 class="gym-sub-heading">Management of Health</h5>
				<p>Set and track your fitness goals with the help of a calorie counter, a sleep tracker, and a heart rate monitor. You can also look at your prior work.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-1.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-2.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="gym-sub-heading">Management of Timeline</h5>
				<p class="text-end">Create and share updates/statuses with your friends to keep your timeline up to date.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="gym-sub-heading">Management of Newsfeed</h5>
				<p class="text-end">Configure your newsfeed items and read Admin's replies, messages, and articles. Also, like and share your friends' posts and statuses on your page.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="gym-sub-heading">Favourite Panel</h5>
				<p>This feature facilitates the user with a logical and systematic approach to calculating and obtaining the best mortgage rates.</p>
				<hr class="my-5">
				<h5 class="gym-sub-heading">Meal Plan</h5>
				<p>To entice your loyal consumers, offer exclusive promotions and discounts.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-3.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="1.0s">
			<div class="col-lg-6 text-start">
				 <img loading="lazy" src="{{asset('images/case-studies/gym-app/gym-app-visuals-4.webp')}}" alt="Gym App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="gym-sub-heading">View Recipes</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="gym-sub-heading">View Videos</h5>
				<p class="text-end">Recipes, meal plans, and workouts are all available in video format.</p>
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