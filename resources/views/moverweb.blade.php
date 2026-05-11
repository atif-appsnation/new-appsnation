@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 mover-web">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container wow fadeIn" data-wow-delay="0.2s">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
			<img loading="lazy" src="{{asset('images/case-studies/mover-web/header-logo.webp')}}" class="img-fluid" alt="Mover Web Logo" width="100%" height="100%">
				<div class="bread-titlev2 mt-4">
					<h1>Welcome To
						<span class="span">Deliverables</span>
					</h1>
					<p class="pt-3">Relocate, Transfer, Packing</p>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/header-web.webp')}}" class="img-fluid" alt="Mover Web" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About Project-->
<section class="mover-about py-5 wow fadeIn" data-wow-delay="0.4s">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-8">
				<div class="common-heading">
					<h2 class="text-center">About Deliverables</h1>
					<p class="text-center">At Mover Web, we are committed to transforming the moving experience with our innovative platform. Our goal is to connect customers with trustworthy moving professionals effortlessly. We focus on creating a smooth, efficient, and stress-free journey from the initial booking to the final move-in. Experience the future of moving with us, where every step is designed for convenience and reliability.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About Project-->

<!--Start Design-->
<section class="mover-design-process py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center design-text">
					<h2 class="mb30">Design Process</h2>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<div class="mover-web-user-and-research">
					<img loading="lazy" src="{{asset('images/case-studies/mover-web/user-and-research-analytics-icon.webp')}}" alt="User And Reseaarch Analysis" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">User And Research Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<div class="mover-web-problem-and-solutions">
					<img loading="lazy" src="{{asset('images/case-studies/mover-web/problem-and-solutions-icon.webp')}}" alt="Problem And Solution" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Problem And Solution</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="0.8s">
				<div class="mover-web-competitive-analysis">
					<img loading="lazy" src="{{asset('images/case-studies/mover-web/competitive-analysis-icon.webp')}}" alt="Competitive Analysis" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Competitive Analysis</h5>
			</div>
			<div class="col-12 col-md-6 col-lg-3 mt-5 text-center wow fadeIn" data-wow-delay="1.0s">
				<div class="mover-web-wireframe-icons">
					<img loading="lazy" src="{{asset('images/case-studies/mover-web/wireframe-icon.webp')}}" alt="Wire Frame" class="img-fluid" width="100%" height="100%">
				</div>
				<h5 class="pt-3">Wire Frame</h5>
			</div>
		</div>
	</div>
</section>
<!--End Design-->

<!--Start Project Idea-->
<section class="mover-project-idea py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Idea</h2>
					<p class="text-middle">Elevate your mover website with an innovative project: an interactive moving assistant combined with a dynamic quote generator. This assistant will serve as a comprehensive guide, offering personalized checklists, packing tips, and moving day reminders. The quote generator provides instant, accurate cost estimates based on user inputs such as location, distance, and belongings. This project not only helps users plan their moves efficiently but also builds trust by offering transparency and convenience. By integrating these features, your website will become an essential tool for anyone planning a move, driving engagement, and converting visitors into customers.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-1.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Idea-->

<!--Start Target Audience-->
<section class="mover-target-audience py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-2.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Target Audience</h2>
					<p class="text-middle">Our target audience includes young professionals who are balancing busy careers and life changes. They need a moving solution that fits seamlessly into their schedules. By offering an interactive guide and real-time quote generator, we provide the tools they need to organize their moves efficiently. Personalized checklists, quick packing tutorials, and transparent pricing help them make informed decisions. This project aims to turn your website into a go-to resource for young professionals, ensuring a stress-free moving experience and converting them into loyal customers.</p>
				</div>
			</div>	
		</div>
	</div>
</section> 
<!--End Target Audience-->

<!--Start Project Challenges-->
<section class="mover-project-challanges py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Project Challenges</h2>
					<p class="text-middle">Several challenges accompany this project. Ensuring the interactive guide and quote generator perform flawlessly across all devices, especially mobile, is vital. Young professionals often use smartphones, and a subpar mobile experience could deter potential leads. Keeping the guide’s content accurate and up-to-date is another challenge. Regulations and service details frequently change, necessitating regular updates. Integrating the quote generator with your existing pricing system may also require advanced technical skills. By focusing on a responsive mobile design, allocating resources for content updates, and collaborating with skilled developers, these challenges can be effectively managed, turning this project into a valuable asset.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-1.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Project Challenges-->

<!--Start Solutions Delivered-->
<section class="mover-solutions-delivered py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-2.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Solution Delivered</h2>
					<p class="text-middle">Our solution focuses on delivering a responsive design for the interactive guide and quote generator. Ensuring a smooth mobile experience is key for young professionals who rely on their smartphones. We also provide a user-friendly CMS, enabling your team to keep the guide’s content current and relevant. For the quote generator, we leverage APIs to seamlessly integrate it with your existing pricing system, ensuring real-time, accurate cost estimates. These solutions will help you overcome the challenges, offering a powerful tool that simplifies the moving process for users and positions your business as a market leader.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Solutions Delivered-->

<!--Start Results/Impact-->
<section class="mover-results-impact py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 my-lg-auto">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Results/Impact</h2>
					<p class="text-middle">The implementation of the Mover Web platform has produced outstanding results, significantly impacting the moving industry. Enhanced accuracy and real-time updates have increased user trust and engagement, resulting in higher booking volumes. The user-friendly interface has attracted a diverse audience, expanding our reach. Robust security measures have protected user data, boosting confidence and satisfaction. Our scalable solutions ensure the platform can grow without compromising performance. Improved SEO has heightened visibility, attracting more organic traffic. Adhering to regulatory standards has built strong relationships with users and stakeholders. These outcomes demonstrate our successful transformation of the moving experience.</p>
				</div>
			</div>
			<div class="col-lg-6 text-center text-lg-end mt-5 mt-lg-0">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-1.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section> 
<!--End Results/Impact-->

<!--Start Conclusion-->
<section class="mover-conclusion py-5 wow fadeIn" data-wow-delay="0.2s">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 text-center text-lg-start">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-2.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 my-lg-auto mt-5">
				<div class="common-heading ptag">
					<h2 class="mb30 txt-heading">Conclusion</h2>
					<p class="text-middle">In summary, the Mover Web platform has revolutionized the moving process by addressing key challenges with innovative solutions. Our user-friendly, secure, and efficient platform has enhanced user satisfaction and engagement, establishing Mover Web as a leader in the industry. The scalable infrastructure ensures we are prepared for future growth and technological advancements. Positive feedback and a growing user base highlight our platform's effectiveness. Moving forward, Mover Web will continue to innovate, leveraging the latest technologies to refine and expand our offerings, maintaining our position at the forefront of the moving industry.</p>
				</div>
			</div>
		</div>
	</div>
</section> 
<!--End Conclusion-->

<!--Start Project Timeline-->
<section class="mover-project-timeline py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb25">Project Timeline</h2>
				</div>
			</div>
			<div class="col-12 wow fadeIn" data-wow-delay="0.4s">
				<div class="project-timeline-img-div pt-3">
					<img loading="lazy" src="{{asset('images/case-studies/mover-web/timeline.webp')}}" alt="Project Timeline" class="img-fluid w-100" width="100%" height="100%">
				</div>
			</div>
		</div>
	</div>
	
</section>
<!--End Project Timeline-->

<!--Start Sitemap-->
<section class="mover-sitemap py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center">
					<h2 class="mb25">Sitemap</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="mover-sitemap-img pt-3 wow fadeIn" data-wow-delay="0.4s">
		<img loading="lazy" src="{{asset('images/case-studies/mover-web/sitemap.webp')}}" alt="Sitemap" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Sitemap-->

<!--Start Wireframe-->
<section class="mover-wireframe py-5">
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
		<img loading="lazy" src="{{asset('images/case-studies/mover-web/wireframes.webp')}}" alt="Wireframe" class="img-fluid w-100" width="100%" height="100%">
	</div>
</section>
<!--End Wiregrame-->

<!--Start UI/UX-->
<!-- <section class="mover-visuals py-5">
	<div class="container">
		<div class="row wow fadeIn" data-wow-delay="0.2s">
			<div class="col-12">
				<div class="common-heading text-center visuals-text">
					<h2 class="mb30">UI/UX</h2>
				</div>
			</div>
		</div>
	</div>

	<div class="pt50">
		<div class="row mt-4 mt-lg-0 wow fadeIn" data-wow-delay="0.4s">
			<div class="col-12">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/ui-ux.webp')}}" alt="Mover Web UI/UX" class="img-fluid w-100">
			</div>
		</div>
	</div>
</section> -->
<!--End Visuals-->

<!--Start Color Pallate-->
<section class="mover-color py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2">
				<div class="common-heading text-center">
					<h2 class="mb30">Color Pallate</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 wow fadeIn text-center" data-wow-delay="0.4s">
				<h4 class="text-center">Tints</h4>
				<img loading="lazy" src="{{asset('images/case-studies/mover-app/tints.webp')}}" alt="Tints" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 text-center wow fadeIn" data-wow-delay="0.6s">
				<h4 class="text-center">Shades</h4>
				<img loading="lazy" src="{{asset('images/case-studies/mover-app/shades.webp')}}" alt="Shades" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Color Pallate-->

<!--Start Typography-->
<section class="mover-typography py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn" data-wow-delay="0.2s">
				<div class="common-heading text-center">
					<h2 class="mb30">Typography</h2>
				</div>
			</div>
			<div class="col-12 mt-5 text-center wow fadeIn" data-wow-delay="0.4s">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/typography.webp')}}" alt="Typography" class="img-fluid" width="100%" height="100%">
			</div>
		</div> 
	</div>
</section>
<!--End Typography-->

<!--Start Features-->
<section class="mover-features py-5">
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
				<h5 class="mover-sub-heading">Customers Management</h5>
				<p>Premium User's Management option offers Block User Enable / Disable User.</p>
				<hr class="my-5">
				<h5 class="mover-sub-heading">Riders Management</h5>
				<p>Block User Enable / Disable User option is available in this feature.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/admin-features-01.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/admin-features-03.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="mover-sub-heading">Notifications</h5>
				<p class="text-end">Send Push Notifications to Customers or Riders for the convenience of both parties.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="mover-sub-heading">Promotions</h5>
				<p class="text-end">Management of Discount, Promo Codes, Management of Coupons, and Premium Packages available.</p>
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.8s">
			<div class="col-lg-6 my-lg-auto">
				<h5 class="mover-sub-heading">Orders Management</h5>
				<p>Create unique promos and discounts to entice customers to purchase your products and take advantage of varied discounts./p>
				<hr class="my-5">
				<h5 class="mover-sub-heading">Reports Management</h5>
				<p>Reporting on product usage on a daily, weekly, and monthly basis.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/admin-features-02.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Features-->

<!--Start Features-->
<section class="mover-features py-5">
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
				<h5 class="mover-sub-heading">Profile Management</h5>
				<p>Change your password or edit your profile. You can also View Courier's Reviews and Ratings.</p>
				<hr class="my-5">
				<h5 class="mover-sub-heading">Nearby Courier</h5>
				<p>For the customer’s ease, the app searches for close or nearby courier persons.</p>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0 text-end">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-1.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
		</div>

		<div class="row mt-5 wow fadeIn" data-wow-delay="0.6s">
			<div class="col-lg-6 text-start">
				<img loading="lazy" src="{{asset('images/case-studies/mover-web/mover-web-visuals-2.webp')}}" alt="Mover Web Visuals" class="img-fluid" width="100%" height="100%">
			</div>
			<div class="col-lg-6 mt-5 my-lg-auto text-end">
				<h5 class="mover-sub-heading">Track Order</h5>
				<p class="text-end">With the Live Tracking of Courier person feature on Map, you can keep an eye on the movement of your order.</p>
				<hr class="my-5 d-block ms-auto">
				<h5 class="mover-sub-heading">Subscription</h5>
				<p class="text-end">Customers can avail of Promo Code and Discount Coupons of Premium with the availability of User Subscription plans.</p>
			</div>
		</div>
	</div>
</section>
<!--End Features-->
@endsection