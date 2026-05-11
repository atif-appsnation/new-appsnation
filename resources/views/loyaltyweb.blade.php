@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 loyalty-web">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
			<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/header-logo.webp')}}" class="img-fluid" alt="Loyalty Web Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white">Shop Smarter, Earn More</h1>
					<h3 class="pt-4 text-white">Bonus Buddy: Your Essential E-commerce Ally.</h3>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/header-web.webp')}}" class="img-fluid" alt="Loyalty Web" width="100%" height="100%">
			</div>
		</div>
	</div>

</section>
<!--End Breadcrumb Area-->

<!--Start About Project-->
<section class="loyalty-about py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-center">About Bonus Buddy</h1>
					<p class="text-center">Bonus Buddy goes beyond just offering cashback deals; it's about building a trusted relationship with our users. Our commitment to excellence is reflected in every aspect of the app, from the intuitive interface that simplifies your shopping journey to the robust security measures safeguarding your transactions. Experience peace of mind as you shop with Bonus Buddy, knowing that we're dedicated to providing you with a seamless, rewarding, and secure experience every time you use our app. Join Bonus Buddy today and discover a new level of convenience and savings in your shopping endeavors.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Design-->
<section class="loyalty-design-process py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="loyalty-web-user-and-research">
					<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/user-and-research-analytics-icon.webp')}}" alt="User And Reseaarch Analysis" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">User And Research Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="loyalty-web-problem-and-solutions">
					<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/problem-and-solutions-icon.webp')}}" alt="Problem And Solution" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Problem And Solution</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="loyalty-web-competitive-analysis">
					<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/competitive-analysis-icon.webp')}}" alt="Competitive Analysis" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Competitive Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="loyalty-web-wireframe-icons">
					<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/wireframe-icon.webp')}}" alt="Wire Frame" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Wire Frame</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Project Idea-->
<section class="loyalty-project-idea py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">Welcome to Bonus Buddy, where maximizing your savings is our mission. Dive into a world of personalized deals tailored to your preferences and interests. Seamlessly integrated with top e-commerce platforms, Bonus Buddy offers real-time cashback tracking, ensuring you never miss out on savings. Rate and review deals to enhance your shopping experience, while our advanced analytics continuously refine your offers based on your shopping habits. Join Bonus Buddy today to unlock a smarter, more rewarding way to shop online, where every purchase counts towards greater savings and satisfaction.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-1.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="loyalty-target-audience py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-2.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Target Audience</h2>
					<p class="text-middle">Introducing Bonus Buddy, the essential tool for savvy online shoppers. Tailored for tech enthusiasts and savvy consumers aged 18-55, our platform provides instant cashback rewards across a wide range of e-commerce purchases. Whether you're a student watching your budget, a young professional on the hunt for savings, or a busy parent managing household expenses, Bonus Buddy makes saving effortless with every transaction. Join a vibrant community where convenience meets cashback, ensuring every online purchase is not only seamless but also financially rewarding. Start maximizing your savings today with Bonus Buddy!</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->

<!--Start Project Challenges-->
<section class="loyalty-project-challanges py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">Bonus Buddy excels in overcoming intricate obstacles through its seamless integration with diverse e-commerce platforms, guaranteeing precise, up-to-the-minute cashback tracking alongside stringent security and user confidentiality measures. By employing strategic marketing initiatives and fostering ongoing user interaction, Bonus Buddy not only captivates but also maintains a loyal user base in a fiercely competitive landscape. Skillfully managing retailer collaborations to secure advantageous deals, it adeptly handles substantial transaction volumes with a scalable infrastructure that ensures peak efficiency and reliability.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-1.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="loyalty-solutions-delivered py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-2.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Unveiling Bonus Buddy's Solution</h2>
					<p class="text-middle">At Bonus Buddy, we excel in addressing challenges through innovative solutions. Our platform features robust integration modules that seamlessly connect with multiple e-commerce platforms, offering real-time cashback tracking to maximize savings. Security is our top priority, with advanced measures ensuring user data protection and compliance with privacy regulations. Effective marketing strategies and engaging user initiatives foster a vibrant community of savvy shoppers. Partnering with leading retailers secures exclusive deals, enhancing the value of every transaction. Our scalable infrastructure guarantees smooth operations, supporting our commitment to delivering a seamless and rewarding shopping experience.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="loyalty-results-impact py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Innovative Impact of Bonus Buddy: Redefining Savings and Trust</h2>
					<p class="text-middle">Since its inception, Bonus Buddy has transformed the landscape of cashback rewards with its innovative approach. By offering reliable cashback offers, users have experienced substantial savings, significantly enhancing their shopping satisfaction. The platform's seamless integration with a variety of e-commerce platforms has not only expanded its reach but also attracted a growing user base seeking effortless savings.<br>
					Central to its success is Bonus Buddy's commitment to robust security measures, ensuring user trust and safeguarding personal data, which has resulted in high retention rates.<br>
					As a result, Bonus Buddy has firmly established itself as a trusted and invaluable companion for users looking to maximize savings and enjoy a secure, rewarding shopping experience.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-1.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="loyalty-conclusion py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-2.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion: <br>Redefining Cashback Rewards</h2>
					<p class="text-middle">Bonus Buddy's commitment to innovation extends beyond integration and security; we're dedicated to fostering a community where smart shopping is effortless and rewarding. Through ongoing research and development, we aim to introduce even more intuitive features that anticipate and meet the needs of our diverse user base. By staying responsive to feedback and trends, Bonus Buddy is poised to lead the way in redefining how consumers shop online, ensuring that every interaction with our platform adds value and enriches the shopping experience. Join us in shaping the future of smart shopping with Bonus Buddy, where savings and satisfaction converge seamlessly.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Project Timeline-->
<section class="loyalty-project-timeline py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb25">Project Timeline</h2>
				</div>
			</div>
			<div class="col-12 wow fadeIn" data-wow-delay="0.4s">
				<div class="project-timeline-img-div pt-3">
					<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/timeline.webp')}}" alt="Project Timeline" class="img-fluid w-100" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
	
</section>
<!--End Project Timeline-->

<!--Start Sitemap-->
<section class="loyalty-sitemap py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb25">Sitemap</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="loyalty-sitemap-img pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/sitemap.webp')}}" alt="Sitemap" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Sitemap-->

<!--Start Wireframe-->
<section class="loyalty-wireframe py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb30">Wireframes</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/wireframes.webp')}}" alt="Wireframe" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Wiregrame-->

<!--Start UI/UX-->
<section class="loyalty-visuals py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visual-text">
					<h2 class="mb30">UI/UX</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="pt50">
		<div class="row mt-4 mt-lg-0 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-12">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/ui-ux.webp')}}" alt="Loyalty Web UI/UX" class="img-fluid w-100" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Color Pallate-->
<section class="loyalty-color py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn text-center" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-app/tints.webp')}}" alt="Tints" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Shades</h4>
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-app/shades.webp')}}" alt="Shades" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="loyalty-typography py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/typography.webp')}}" alt="Typography" class="img-fluid" width="100%" height="100%">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Features-->
<section class="loyalty-features py-5">
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
				<h5 class="loyalty-sub-heading">Dashboard</h5>
				<p>Manage and view your app statistics and analytics and get the rapid reports of all your users, sales, profits etc. through extensive admin dashboard.</p>
				<hr class="my-5">
				<h5 class="loyalty-sub-heading">Content Management</h5>
				<p>Create, upload and manage all the content on the application and make run-time changes through simple and user-friendly content management system.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/admin-features-01.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/admin-features-03.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="loyalty-sub-heading">User Management</h5>
				<p class="text-end">Control and manage all the application users and view their activities to know about their interests by user management system.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="loyalty-sub-heading">Promotions</h5>
				<p class="text-end">Create drooling promotions and offers to attract users to buy your product and avail various discounts.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="loyalty-sub-heading">Reviews</h5>
				<p>To reach the agents right away, use the call, message, or email options.</p>
				<hr class="my-5">
				<h5 class="loyalty-sub-heading">Notifications</h5>
				<p>Get notified with your customers' activities and statuses through the notification/alerts feature.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/admin-features-02.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Features-->
<section class="loyalty-features py-5">
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
				<h5 class="loyalty-sub-heading">Search Properties</h5>
				<p>Find the perfect property with ease using advanced search options.</p>
				<hr class="my-5">
				<h5 class="loyalty-sub-heading">Properties Listing</h5>
				<p>A dynamic and diverse listing of properties, updated in real-time to reflect the latest market conditions.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-1.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/loyalty-web/loyalty-web-visual-2.webp')}}" alt="Loyalty Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="loyalty-sub-heading">Properties Information</h5>
				<p class="text-end">Access detailed information on properties, including specifications, price, and amenities.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="loyalty-sub-heading">Amenities Information</h5>
				<p class="text-end">Detailed insights into property amenities, helping users make informed decisions.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->
@endsection