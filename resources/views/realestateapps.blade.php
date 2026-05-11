@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 real-estate-apps">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-auto">
			<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/header-logo.webp')}}" class="img-fluid w-50" alt="Real Estate App Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white">Welcome To
						<span class="span">AVENUE</span>
					</h1>
					<h3 class="text-white pt-3">RealEstate</h3>
					<!-- <h3 class="mt50 text-white">Real EstateICIOUS</h3>
					<p class="text-white">EXPERIENCE THE WORLD</p> -->
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/header-phone.webp')}}" class="img-fluid" alt="Real Estate App" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="real-estate-about py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading">
					<h2>Best App<br>For Real Estate</h2>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/about-real-estate.webp')}}" alt="Real Estate App" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start About Project-->
<section class="real-estate-goal py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-white text-center">Project Goal</h1>
					<p class="text-white text-center">Our project goals for the real estate initiative are to integrate seamlessly with MLS platforms for accurate property listings, optimize mobile usability, implement robust security measures, and provide an intuitive interface for easy property searches. We aim to enhance visibility through effective digital marketing and maintain a transparent feedback system for continuous improvement based on user insights. These objectives are designed to elevate the real estate experience and deliver exceptional value to our users.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Project Idea-->
<section class="real-estate-project-idea py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea: Real Estate Platform</h2>
					<p class="text-middle">Our project aims to revolutionize the real estate experience with an innovative platform that simplifies property transactions. Featuring intuitive search tools, real-time listings, and robust user management capabilities, our platform caters to both buyers and sellers alike. We prioritize data accuracy, security, and scalability to ensure a seamless user experience across various devices. By integrating advanced technology and user-centric design, we aim to redefine how properties are bought, sold, and managed in the modern market.
					</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-1.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="real-estate-target-audience py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-2.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Targeted Audience</h2>
					<p class="text-middle">Our real estate app is designed for a broad audience. It caters to homebuyers looking for an intuitive platform, property sellers needing effective listing tools, and real estate agents seeking robust property management solutions. Investors benefit from comprehensive market insights, while mortgage brokers connect seamlessly with clients for financing options. Whether buying, selling, or managing properties, our app offers tailored solutions for all in the real estate market.
					</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->


<!--Start Project Challenges-->
<section class="real-estate-project-challanges py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Challenges in Developing a Real Estate App</h2>
					<p class="text-middle">Creating a successful real estate app involves overcoming several key challenges. Ensuring the accuracy and currency of property listings is essential to build user trust. Balancing advanced features with a user-friendly interface is critical to meet diverse user needs. Implementing stringent security measures to protect user data is non-negotiable. Scaling the app to accommodate growing user numbers and data volumes without compromising performance is a significant challenge. Additionally, maintaining a consistent and superior user experience across different devices and platforms is essential for retention and satisfaction. Addressing these challenges strategically is pivotal to the app's success in the competitive real estate market.
					</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-3.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="real-estate-solutions-delivered py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-1.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Delivering Solutions for Our Real Estate App</h2>
					<p class="text-middle">In response to challenges, our real estate app has introduced transformative solutions. We've prioritized real-time updates to ensure accurate property listings, fostering trust among users. Our intuitive interface strikes a balance between complexity and ease of use, catering to diverse user needs seamlessly. Robust security measures safeguard sensitive data, enhancing user confidence. Scalable infrastructure supports increased user traffic and data volumes efficiently. Consistent user experiences across devices and effective SEO strategies amplify market visibility. By adhering to real estate regulations, we ensure reliability and compliance. Our app continues to innovate, delivering unparalleled convenience and reliability in property transactions.
					</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="real-estate-results-impact py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Results/Impact</h2>
					<p class="text-middle">The implementation of our real estate app has delivered significant positive outcomes across the board. Users experience enhanced convenience and efficiency in property transactions, facilitated by seamless MLS integration and optimized mobile usability. Robust security measures ensure trust and data protection, contributing to high user satisfaction and retention rates. Effective digital marketing strategies have expanded our app's visibility, attracting a growing user base and fostering increased engagement.
					</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-2.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="real-estate-conclusion py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-3.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion: Real Estate App
					</h2>
					<p class="text-middle">In conclusion, our real estate app has overcome challenges with innovative solutions, ensuring data accuracy, user trust, and robust security. Scalable and user-friendly, it sets new standards in property transactions, poised for future growth. With a commitment to excellence and customer satisfaction, we're reshaping real estate technology for a seamless user experience and market leadership.
					</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Design-->
<section class="real-estate-design-process py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="real-estate-app-sketching-icon">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/sketching-icon.webp')}}" alt="Sketching" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Sketching</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="real-estate-app-wireframe-icon">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/wireframe-icon.webp')}}" alt="Wireframe" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Wireframe</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="real-estate-app-branding-icon">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/branding-icon.webp')}}" alt="Branding" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Branding</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="real-estate-app-visuals-icon">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/visuals-icon.webp')}}" alt="Visuals" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Visuals</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Sketching-->
<section class="real-estate-sketching py-5">
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
		<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/sketching.webp')}}" alt="Sketching" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Sketching-->

<!--Start Wireframe-->
<section class="real-estate-wireframe py-5">
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
		<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/wireframes.webp')}}" alt="Wireframe" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Wireframe-->

<!--Start Color Pallate-->
<section class="real-estate-color py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn text-center" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/tints-01.webp')}}" alt="Tints" class="img-fluid" width="100%" height="100%">
				<h4 class="text-center mt-5">Shades</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/shades-01.webp')}}" alt="Shades" class="img-fluid mt-3" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Tints</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/tints-02.webp')}}" alt="Tints" class="img-fluid" width="100%" height="100%">
				<h4 class="text-center mt-5">Shades</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/shades-02.webp')}}" alt="Shades" class="img-fluid mt-3" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="real-estate-typography py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/typography.webp')}}" alt="Typography" class="img-fluid" width="100%" height="100%">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Components-->
<section class="real-estate-components py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Components</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/components.webp')}}" alt="Components" class="img-fluid" width="100%" height="100%">
			</div>
		</div> 
	</div>
</section>
<!--End Components-->

<!--Start Visuals-->
<section class="real-estate-visuals py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visual-text">
					<h2 class="mb30">Visuals</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="real-estate-visuals-background pt50 pb50">
		<div class="container">
			<div class="row mt-4 mt-lg-0">
				<div class="col-12 wow fadeIn" data-wow-delay="0.4s">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals.webp')}}" alt="Real Estate App Visuals" class="img-fluid real-estate-app-visuals d-block mx-auto" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Features-->
<section class="real-estate-features py-5">
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
				<h5 class="real-estate-sub-heading">Search Properties</h5>
				<p>Users can utilize a quick and easy search option to find the properties they want.</p>
				<hr class="my-5">
				<h5 class="real-estate-sub-heading">Properties Listing</h5>
				<p>A large and diverse property list for our valued users to search for various homes.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-1.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-2.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="real-estate-sub-heading">Property Information</h5>
				<p class="text-end">Detailed property details to learn everything there is to know about the property.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="real-estate-sub-heading">Amenities Information</h5>
				<p class="text-end">Customers may take advantage of a longer variety of amenities to get the most out of their residences.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="real-estate-sub-heading">Mortgage</h5>
				<p>Mortgage center with a logical and coherent approach to calculating and obtaining the best mortgage rates.</p>
				<hr class="my-5">
				<h5 class="real-estate-sub-heading">Map Integration</h5>
				<p>Maps that are dynamic and responsive to help you find the best routes and pinpoint specific locations.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-3.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="1.0s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/real-estate-app-visuals-1.webp')}}" alt="Real Estate App Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="real-estate-sub-heading">Check Out</h5>
				<p class="text-end">Users can utilize a variety of dynamic filters to find the services they want based on their needs and wants.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="real-estate-sub-heading">Payment Gateways</h5>
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