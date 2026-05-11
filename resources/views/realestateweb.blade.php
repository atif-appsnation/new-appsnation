@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 real-estate-web">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
			<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/header-logo.webp')}}" class="img-fluid" alt="Real Estate Web Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1 class="text-white">Welcome To
						<span class="span">AVENUE</span>
					</h1>
					<h3 class="text-white pt-3">RealEstate</h3>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/header-web.webp')}}" class="img-fluid" alt="Real Estate Web">
			</div>
		</div>
	</div>

</section>
<!--End Breadcrumb Area-->

<!--Start About Project-->
<section class="real-estate-about py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-center">About Avenue</h1>
					<p class="text-center">Discover Avenue, the ultimate app for all your property buying and selling needs. Our platform offers a seamless and efficient experience with a user-friendly interface, extensive property listings, and powerful tools. Avenue simplifies real estate transactions, making it easy for you to navigate the market confidently. Join us today and explore a smarter way to buy and sell properties.
 					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Design-->
<section class="real-estate-design-process py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="real-estate-web-user-and-research">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/user-and-research-analytics-icon.webp')}}" alt="User And Reseaarch Analysis" class="img-fluid">
				</div>
				<h5 class="pt-3">User And Research Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="real-estate-web-problem-and-solutions">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/problem-and-solutions-icon.webp')}}" alt="Problem And Solution" class="img-fluid">
				</div>
				<h5 class="pt-3">Problem And Solution</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="real-estate-web-competitive-analysis">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/competitive-analysis-icon.webp')}}" alt="Competitive Analysis" class="img-fluid">
				</div>
				<h5 class="pt-3">Competitive Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="real-estate-web-wireframe-icons">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/wireframe-icon.webp')}}" alt="Wire Frame" class="img-fluid">
				</div>
				<h5 class="pt-3">Wire Frame</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Project Idea-->
<section class="real-estate-project-idea py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Avenue: Simplifying Real Estate for Everyone</h2>
					<p class="text-middle">Avenue is designed to make buying, selling, and managing properties easy and stress-free. Our user-friendly platform lets you quickly find the perfect property with advanced search filters and comprehensive, up-to-date listings featuring detailed descriptions and high-quality images. For property managers and sellers, Avenue offers easy content management for instant updates and edits. Our platform also includes tools to track user activity and preferences, ensuring a personalized experience. Plus, direct communication channels between buyers and agents make it easy to connect and get quick responses. Avenue is here to make real estate transactions simple, smooth, and accessible for everyone.
					</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-1.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
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
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-2.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Who Avenue is For?</h2>
					<p class="text-middle">Avenue is designed for a wide range of users with diverse needs in the real estate market. Whether you're a homebuyer looking for an easy and informative way to find your dream home, a property seller, or a real estate agent needing a powerful platform to list and manage properties, Avenue has you covered. Real estate investors will appreciate the comprehensive market insights and investment opportunities available. First-time buyers will find the guided navigation and detailed property insights especially helpful. Mortgage brokers and financial institutions can connect with clients and provide the latest financing options. For those seeking rental properties, Avenue offers detailed listings and direct contact information to make the rental process smooth and efficient. Avenue's comprehensive features are designed to meet the needs of everyone involved in the real estate market.
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
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">Developing a real estate website presents several key challenges. It requires seamless integration with multiple listing services(MLS) and property databases for accurate listings, optimization for mobile usability and fast loading times, robust security measures to protect user data, a user-friendly interface for easy property searches, and effective digital marketing strategies to attract users and manage feedback effectively. These factors are crucial for success in the competitive real estate industry.
					</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-1.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
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
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-2.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Solution Delivered</h2>
					<p class="text-middle">Creating a standout real estate app involves strategic solutions to overcome industry challenges. Seamless integration with MLS platforms ensures users access current property listings. Optimizing for mobile usability guarantees a smooth experience across devices. Implementing stringent security protocols safeguards user data. An intuitive interface simplifies property searches, enhancing user satisfaction. Effective digital marketing strategies maximize app visibility. Incorporating a streamlined feedback system enables continuous enhancement, ensuring the app remains relevant and competitive in the real estate market.
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
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Real Estate App: Achieving Success</h2>
					<p class="text-middle">Our real estate app has revolutionized the property market with outstanding results. Prioritizing data accuracy and user engagement, we've built trust through timely property listings. The app's intuitive design balances complexity with ease of use for all users. Robust security measures protect user information, while scalability ensures seamless performance during peak usage. Consistent, high-quality user experiences across devices and effective SEO strategies enhance visibility and user satisfaction. Compliance with real estate regulations underscores our commitment to reliability and trustworthiness. Our app continues to set new benchmarks, offering unmatched convenience and efficiency in property transactions.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-1.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
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
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-2.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion: Advancing Real Estate</h2>
					<p class="text-middle">In summary, the evolution of real estate apps marks a significant leap forward in property transactions. By integrating cutting-edge technology and user-friendly design, these apps streamline property searches, enhance security, and elevate user satisfaction. Seamless MLS integration ensures accurate listings, while intuitive interfaces simplify the buying and selling process. With robust security measures and effective marketing strategies, these apps foster trust and visibility in a competitive market. Moving forward, these innovations promise to redefine how buyers, sellers, and agents interact, setting new standards in real estate convenience and efficiency.
					</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Project Timeline-->
<section class="real-estate-project-timeline py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb25">Project Timeline</h2>
				</div>
			</div>
			<div class="col-12 wow fadeIn" data-wow-delay="0.4s">
				<div class="project-timeline-img-div pt-3">
					<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/project-timeline.webp')}}" alt="Project Timeline" class="img-fluid w-100">
				</div>
			</div>
		</div>
	</div>
	
</section>
<!--End Project Timeline-->

<!--Start Sitemap-->
<section class="real-estate-sitemap py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb25">Sitemap</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="real-estate-sitemap-img pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/sitemap.webp')}}" alt="Sitemap" class="img-fluid w-100">
	</div>
</section>
<!--End Sitemap-->

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
	<div class="pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/wireframes.webp')}}" alt="Wireframe" class="img-fluid w-100">
	</div>
</section>
<!--End Wiregrame-->

<!--Start UI/UX-->
<section class="real-estate-visuals py-5">
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
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/ui-ux.webp')}}" alt="Real Estate Web UI/UX" class="img-fluid w-100">
			</div>
		</div>
	</div>
</section>
<!--End Visuals-->

<!--Start Color Pallate-->
<section class="real-estate-color py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn text-center" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/tints-01.webp')}}" alt="Tints" class="img-fluid">
				<h4 class="text-center mt-5">Shades</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/shades-01.webp')}}" alt="Shades" class="img-fluid mt-3">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Tints</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/tints-02.webp')}}" alt="Tints" class="img-fluid">
				<h4 class="text-center mt-5">Shades</h4>
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-app/shades-02.webp')}}" alt="Shades" class="img-fluid mt-3">
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
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/typography.webp')}}" alt="Typography" class="img-fluid">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Features-->
<section class="real-estate-features py-5">
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
				<h5 class="real-estate-sub-heading">Dashboard</h5>
				<p>Through a full admin dashboard, you can manage and examine your app statistics and analytics as well as get quick information on all of your users, sales earnings, and so on.</p>
				<hr class="my-5">
				<h5 class="real-estate-sub-heading">Content Management</h5>
				<p>Generate, edit, and organize all of the user's content, as well as make changes in real-time, using a simple and user-friendly content management system.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/admin-features-01.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/admin-features-03.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="real-estate-sub-heading">User Management</h5>
				<p class="text-end">By using the user management system, you can see and control all of the application users, as well as their behaviors and learn about their preferences.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="real-estate-sub-heading">Properties Management</h5>
				<p class="text-end">Property management allows you to maintain and examine a variety of real estate listings.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="real-estate-sub-heading">Contact Agent</h5>
				<p>To reach the agents right away, use the call, message, or email options.</p>
				<hr class="my-5">
				<h5 class="real-estate-sub-heading">Mortgage</h5>
				<p>Maintain awareness of users' mortgage/finance needs and keep them up to speed with the latest finance rates and plans via the mortgage current mortgage rates and strategies management system.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/admin-features-02.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<!--End Features-->

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
				<p>Find the perfect property with ease using advanced search options.</p>
				<hr class="my-5">
				<h5 class="real-estate-sub-heading">Properties Listing</h5>
				<p>A dynamic and diverse listing of properties, updated in real-time to reflect the latest market conditions.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-1.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/real-estate-web/real-estate-web-visual-2.webp')}}" alt="Real Estate Web Visuals" class="img-fluid">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="real-estate-sub-heading">Properties Information</h5>
				<p class="text-end">Access detailed information on properties, including specifications, price, and amenities.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="real-estate-sub-heading">Amenities Information</h5>
				<p class="text-end">Detailed insights into property amenities, helping users make informed decisions.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->
@endsection