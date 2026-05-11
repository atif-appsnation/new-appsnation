@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 about-us-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeIn">
				<div class="bread-inner">
					<div class="bread-title">
						<h1 class="text-white">About <span>AppsNation</span></h1>
						<p class="pt-3 text-white">AppsNation is a software and mobile app development company with a world-class team of talented data scientists, developers, designers, mathematicians, engineers, and creative artists. We are motivated to build elegant and functional digital products that solve complex problems.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb Area-->

<!--Start About-->
<section class="about-agency py-5 bg-gradient1 block-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 v-center">
				<div class="about-image">
					<img src="images/about-us/about-us.webp" width="auto" height="auto" alt="About Us" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6 mt-30 mt-lg-0">
				<div class="common-heading text-l">
					<div data-text="About Us" class="light-bg-text bg-text">
						<h2>NOT JUST WELL-KNOWN WE’LL MAKE YOU FAMOUS</h2>
					</div>
					<p>AppsNation is the USA's top leading mobile application development company providing multiple mobile app development services in IOs, Android, IoT, AR/VR, game, cross-platform, wearable, and eCommerce. We also provide mobile app QA Testing and strategic design consultancy services. Our enterprise-class solutions enable seamless user experiences across all modern platforms and devices. We run the entire mobile app development process from ideation to delivery and ongoing support. We have a team of the most dedicated and trained mobile engineers, designers, and marketers who create impact with stunning products for your business. We meet your business needs and strategies by providing the quickest solutions at very reasonable prices. AppsNation offers its services in 50+ industries, including healthcare, transport, travel, media, education, and more.</p>
					<p>We have achieved some remarkable goals within a few years, and now we are trusted by 100+ businesses. AppsNation has proven expertise in strategy, product development, and design for startups and enterprise clients. By leveraging our experience and design best practices, we deliver innovative mobile applications that enable big ideas to be built faster, better, and more secure. Global brands trust us to create and support apps that reduce time to market, improve quality, and lower costs.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Statistics-->
<section class="py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn achievements-count">
			<div class="col-6 col-sm-6 col-md-4 pb-3 pb-md-3 pb-lg-0">
				<h2 class="numbers-count">450</h2>
				<p class="numbers-about">Happy Clients</p>
			</div>
			<div class="col-6 col-sm-6 col-md-4 pb-3 pb-md-3 pb-lg-0">
				<h2 class="numbers-count">95k+</h2>
				<p class="numbers-about">Hours Worked</p>
			</div>
			<div class="col-6 col-sm-6 col-md-4 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
				<h2 class="numbers-count">850</h2>
				<p class="numbers-about">Projects Done</p>
			</div>
		</div>
	</div>
</section>
<!--End Statistics-->

<!--Start why-choose-->
<section class="why-choose-us py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading">
					<div data-text="Choose Us" class="light-bg-text bg-text">
						<h2 class="mb30">Why Choose Us</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row upset mt-lg-5">
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						<img src="images/about-us/client-first.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Client First</h3>
					<p>For any business, Clients are always at the core. Being a leading developer of web and mobile applications, our concept goes beyond our direct customers.We always start from where you are with your ideas and we think from the viewpoints of your end users, their areas of pain, and formulate a solution that solves key issues to help your business.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						<img src="images/about-us/effective-synergy.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-2">Effective Synergy</h3>
					<p>Communication is to hear what isn't being said. We appear at times to over-communicate. While it sounds overwhelming, it works wonders for our clients and our company ultimately. With communication alone we solve real-world problems. Our Development team remains in contact with customers through channels and media that allow performance, transparency and accuracy, feasible with all time zones across the World.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						<img src="images/about-us/on-time-delivery.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">On Time Delivery</h3>
					<p>We do not over promise we over-deliver our promise.We have a great collection of internal frameworks with best-in-class infrastructure with a decade of experience in the IT software development industry that helps us to deliver solutions with superior quality at all times. We have learned how to avoid mistakes and repeat success all these years. We don't brag about consistency alone. In time, we describe and produce it. Our Products are here to notify the same.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						<img src="images/about-us/strong-experties.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Strong Expertise</h3>
					<p>With our core field of expertise being Ruby on Rails, Angular, React, our coding experts remain on the cutting edge of the newest and most successful technology trends and popular applications on the market. So you can expect a greater level of ownership, commitments &amp; deliveries in less time with higher quality while following all the best practices for the development. Thereby providing the best values for our customers. It is always that we believe in Quality &gt; Quantity &amp; “Value” is what is valued.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						<img src="images/about-us/total-ownership-and-feedback-based.svg" width="100%" height="100%" alt="service" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Total Ownership &amp; Feedback Based</h3>
					<p>We do not follow the criteria or requirements just like that. Right from the beginning we have a direct influence on the project. We take spontaneous feedback from our clients, their customers, and other stakeholders that have an impact on the product. And we take your product and its feedback seriously. With this we make sure that we all are heading towards the right direction. Which saves really everything that matters.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6 mt30">
				<div class="choose-us">
					<div class="s-card-icon">
						<img src="images/about-us/results-focused.svg" alt="service" width="100%" height="100%" class="img-fluid about-icon">
					</div>
					<h3 class="mb-2 mt-3">Results Focused</h3>
					<p>We create digitally adaptable products, not just features. These are the real world problems and the solutions are futuristic.And we make sure we deliver them regardless of any factors that may hinder the development or progress. Everything is in control. You know your destination? We know how to take you there. In the long term, our priority is on making your company succeed.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End why-choose-->


@endsection