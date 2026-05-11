@extends('app.main')
@section('content')

	<!--Start Breadcrumb Area-->
	<section class="breadcrumb-areav2 ar-app-banner">
		@if ($errors->has('g-recaptcha-response'))
			<div class="alert alert-danger">
				<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
			</div>
		@endif
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 my-auto my-auto wow fadeIn">
					<div class="bread-titlev2">
						<h1 class="banner-heading pt-3" data-wow-delay=".2s">Augmented Reality (AR) Development</h1>
						<p class="mt20 text-white" data-wow-delay=".4s">Offer your consumers a real-time immersive user
							experience of your business via an augmented reality app developed by our expert AR app
							developers.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Breadcrumb Area-->

	<!--Start About-->
	<section id="mycounterSection" class="service py-5 ar-i ntro-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 block-1 wow fadeIn">
					<div class="common-heading text-l pl25">
						<div data-text="AR" class="light-bg-text bg-text">
							<h2>Scale-Up With Our <span class="flup-theme">Augumented Reality (AR) </span>Development
								Services</h2>
						</div>
						<p><strong>Ignite your business reality with highly interactive AR apps to solve complex problems
								and enhance brand loyalty. </strong></p>
						<p>AppsNation is a famous company for producing best-in-industry custom Augmented Reality apps for
							various niches. We create AR apps across different platforms that convert and boost leads and
							sales with robust functionality and appealing designs. </p>
						<p>Being the AR app development industry pioneer, we have set a standard with our years of
							experienced and highly tech-savvy AR app developers. We strive to build the innovative dreams of
							others and make it possible for them to thrive among the best. We create AR apps that support
							every device, such as AR headsets, smart glasses, smart lenses, tablets, smartphones, and other
							augmented reality compatible devices to achieve customer satisfaction. Our primary focus is to
							flourish the AR technology into the businesses and among the audience.</p>
					</div>
				</div>
				<div class="col-lg-5 my-auto">
					<div class="image-block wow fadeIn">
						 <img loading="lazy" src="images/services/ar-app-development/ar-app-development.webp" alt="AR App Development"
							class="img-fluid no-shadow" width="100%" height="100%">
					</div>
				</div>
			</div>
			<div class="row justify-content-center   wow fadeIn  achievements-count mt-3 "
				style="visibility: visible; animation-name: fadeIn;">
				<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
					<h2 id="count1" class="numbers-count">10+</h2>
					<p class="numbers-about">Years On The market</p>
				</div>
				<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
					<h2 id="count2" class="numbers-count">900+</h2>
					<p class="numbers-about">People On Board</p>
				</div>
				<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
					<h2 id="count3" class="numbers-count">10k</h2>
					<p class="numbers-about">Projects Delivered</p>
				</div>
				<div class="col-6 col-sm-6 col-md-3 pt-3 pt-md-0 pb-3 pb-md-3 pb-lg-0">
					<h2 id="count4" class="numbers-count">67</h2>
					<p class="numbers-about">Our Current NPS Score</p>
				</div>
			</div>
		</div>
	</section>
	<!--End About-->

	<!-- Start AR Games Section -->
<section class="service-block py-5 ar-game-section">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left Image -->
      <div class="col-lg-6 mb-4 mb-lg-0">
         <img loading="lazy" 
          src="images/services/ar-app-development/ar-game-development.webp" 
          alt="AR Game Development" 
          class="img-fluid w-100">
      </div>

      <!-- Right Content -->
      <div class="col-lg-6">

        <!-- Heading -->
        <h2 class="text-white mb-4">
          Our <span>AR Games</span> Development Services
        </h2>

        <!-- Games Grid -->
        <div class="row g-4">

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-action.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Action">
            <p class="mb-0 text-white">AR Action</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-fps.webp" class="img-fluid d-block mx-auto mb-2" alt="AR FPS">
            <p class="mb-0 text-white">AR FPS</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-adventure.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Adventure">
            <p class="mb-0 text-white">AR Adventure</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-puzzle.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Puzzle">
            <p class="mb-0 text-white">AR Puzzle</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-sports.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Sports">
            <p class="mb-0 text-white">AR Sports</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-arcade.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Arcade">
            <p class="mb-0 text-white">AR Arcade</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-simulation.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Simulation">
            <p class="mb-0 text-white">AR Simulation</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-brain.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Brain">
            <p class="mb-0 text-white">AR Brain</p>
          </div>

          <div class="col-6 col-md-4 text-center">
             <img loading="lazy" src="images/services/ar-app-development/ar-combat.webp" class="img-fluid d-block mx-auto mb-2" alt="AR Combat">
            <p class="mb-0 text-white">AR Combat</p>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>
<!-- End AR Games Section -->

	<!--Start Service-->
	<section class="service-block py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 wow fadeIn">
					<div class="common-heading ptag">
						<div data-text="Our Services" class="light-bg-text bg-text">
							<h2>Our <span>Augument Reality (AR)</span> Development Services</h2>
						</div>
						<p class="mb30">Own an interactive AR app for your consumers to have an interactive experience of
							your business and maximize customer engagement.</p>
					</div>
				</div>
			</div>

			<div class="row mt-5">
				<div class="col-12">
					<ul class="nav nav-pills justify-content-center ar-pills">
						<li class="nav-item">
							<a class="nav-link active" data-bs-toggle="pill" href="#apps">AR Apps</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#marker">Marker</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#markerless">Markerless</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#ecommerce">E-commerce</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#game">AR Game</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#support">AR Support</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#superimposition">Superimposition</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#recognition">Recognition</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#projection">Projection</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-bs-toggle="pill" href="#location">Location</a>
						</li>
					</ul>
					<div class="tab-content mt-5">
						<div class="tab-pane active" id="apps">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/ar-apps-for-android-and-ios.webp"
											alt="AR Apps For Android & iOS" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>AR Apps For Android & iOS</h2>
										<p>We are proficient in powering up Android and iOS with a stimulating technology of
											AR to empower businesses with a new trend of marketing and engagement.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="marker">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/market-based-augumented-reality-apps.webp"
											alt="Marker-based Augmented Reality Apps" class="img-fluid no-shadow"
											width="100%" height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>Marker-based Augmented Reality Apps</h2>
										<p>Offer your users a simulating experience of your product/service with a
											marker-based AR app that transforms the 3D object into real-life material by
											pointing the camera to a QR code.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="markerless">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/markless-augmented-reality-apps.webp"
											alt="Markerless Augmented Reality Apps" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>Markerless Augmented Reality Apps</h2>
										<p>Power up your user experience with a markerless AR app that works through a link
											or AR option within the app developed by our professional AR app developers.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="ecommerce">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/e-commerce-ar-integration.webp"
											alt="E-Commerce AR Integration" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>E-Commerce AR Integration</h2>
										<p>Transform your e-commerce store by implementing AR technology for the consumers
											to experience shopping in an augmented environment.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="game">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/ar-game-app-development.webp"
											alt="AR Game App Development" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>AR Game App Development</h2>
										<p>Be the trend like Pokémon GO did with our outstanding AR game app development
											services for the simplest and even the most complex game stories.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane container fade" id="support">
							<div class="row mt-3">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/ar-support-and-maintenance.webp"
											alt="AR Support & Maintenance" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>AR Support & Maintenance</h2>
										<p>We offer reliable and sustainable AR app support and maintenance services to
											ensure the app flawlessly delivers its purpose and functionality.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane container fade" id="superimposition">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/super-imposition-based-ar.webp"
											alt="Superimposition-based AR" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>Superimposition-based AR</h2>
										<p>Leverage the object recognition in superimposition-based AR app to replace the
											source picture with an augmented view to help consumers make the right choice of
											the product.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane container fade" id="recognition">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/recognition-based-ar.webp"
											alt="Recognition-based AR" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>Recognition-based AR</h2>
										<p>We create highly responsive recognition-based AR apps with faultless
											functionality to deliver a seamless user experience of Augmented Reality to the
											audience.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane container fade" id="projection">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/projection-based-ar.webp"
											alt="Projection-based AR" class="img-fluid no-shadow" width="100%"
											height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>Projection-based AR</h2>
										<p>We design and build intuitive projection-based AR apps for industries to leverage
											and make learning, analyzing, and other processes simpler and smoother.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane container fade" id="location">
							<div class="row">
								<div class="col-lg-6">
									<div class="image-block">
										 <img loading="lazy" src="images/services/ar-app-development/location-based-ar.webp" alt="image"
											class="img-fluid no-shadow" width="100%" height="100%">
									</div>
								</div>
								<div class="col-lg-6 block-1 my-auto">
									<div class="common-heading text-l pl25">
										<h2>Location-based AR</h2>
										<p>We develop the most precise location-based AR apps to enable your business to
											track consumers accurately to deliver them the right offers.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Service-->




	<!--Start Features-->
	<section class="features-section-app dark-bg2 py-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-5 fadeIn">
					<div class="tab-content" id="imagetab">

						@foreach($agencystack as $k => $items)
							@if($k == 0)

								<div class="tab-pane features-content active" id="panel_a_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
									 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
								</div>
							@else
								<div class="tab-pane features-content fade" id="panel_a_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
									 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
								</div>
							@endif

						@endforeach

					</div>
				</div>
				<div
					class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
					<h2>Different Industries We Serve:</h2>
					<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.
					</p>
					<ul class="nav nav-tabs features-tab" id="headingtab" role="tablist">

						@foreach($agencystack as $k => $items)
							@if($k == 0)
								<li class="nav-item">
									<a class="nav-link active" id="{!!$items['id']!!}-tab"
										data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}"
										data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab"
										aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
								</li>

							@else
								<li class="nav-item">
									<a class="nav-link" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}"
										data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab"
										href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}"
										aria-selected="false">{!!$items['heading']!!}</a>
								</li>
							@endif
						@endforeach

					</ul>
					<div class="tab-content pt-3" id="texttab">

						@foreach($agencystack as $k => $items)
							@if($k == 0)

								<div class="tab-pane image-content active" id="panel_b_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
									<h3>{!!$items['heading']!!}</h3>
									<p class="py-3">{!!$items['content']!!}</p>
								</div>
							@else

								<div class="tab-pane image-content fade" id="panel_b_{!!$items['id']!!}" role="tabpanel"
									aria-labelledby="{!!$items['id']!!}-tab">
									<h3>{!!$items['heading']!!}</h3>
									<p class="py-3">{!!$items['content']!!}</p>
								</div>

							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Features-->


	<!--Start Let's Work Together-->
	<section class="mt-2">
		<div class="container">
			<div class="row py-5 justify-content-center hire-developer">
				<div class="col-lg-9">
					<div class="free-cta-title v-center wow fadeIn">
						<div class="row justify-content-center">
							<div class="col-lg-8 my-auto">
								<p class="text-center text-lg-start">Let's Start a <span>New Project</span> Together</span>
								</p>
							</div>
							<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
								<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Inquire Now
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End Let's Work Together-->

	<!--Start Why Choose-->
	<section class="why-choose bg-gradient3 py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="common-heading ptag wow fadeIn">
						<div data-text="Choose Us" class="dark-bg-text bg-text">
							<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
						</div>
						<p class="text-white">We help you overcome the most challenging difficulties in AR, such as
							object/scene identification, occlusion, and content production and management.</p>
					</div>
				</div>
			</div>
			<div class="row upset justify-content-center mt30">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/why-choose/free-mobile-app-consultation.svg" alt="Free Mobile App Consultation"
								class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">Free AR App Consultation</h3>
						<p class="description">With AppsNation, you can consult your way to success for free.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/why-choose/50+-expert-android-developers.svg" alt="50+ AR App Developers"
								class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">50+ AR App Developers</h3>
						<p class="description">Unleash your true potential with best-in-class android developers across the
							globe.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/why-choose/flexible-hiring-models.svg" alt="Flexible Hiring Models"
								class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">Flexible Hiring Models</h3>
						<p class="description">AppsNation is accessible to everyone regardless of the business size and the
							industry with personalized pricing packages.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/why-choose/247-technical-support.svg" alt="24/7 Technical Support"
								class="img-fluid" width="100%" height="100%">
						</div>
						<h3 class="title">24/7 Technical Support</h3>
						<p class="description">Never feel overwhelmed; our technical staff is available 24/7 to resolve any
							issues with the application.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/why-choose/100-transparency.svg" alt="100% Transparency" class="img-fluid">
						</div>
						<h3 class="title">100% Transparency</h3>
						<p class="description">With customer satisfaction our utmost priority, we keep ourselves transparent
							to the client to trust us with the app.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<div class="timeline-year">
							 <img loading="lazy" src="images/why-choose/3-months-free-delivery.svg"
								alt="3-Months Free Support After Delivery" class="img-fluid">
						</div>
						<h3 class="title">3-Months Free Support After Delivery</h3>
						<p class="description">We offer 3-months of free support after app launch to ensure the app's
							integrity.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Start Why Choose-->

	<!--Start Process-->
	<section class="process-block bg-gradient3 py-5">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="common-heading ptag wow fadeIn">
						<div data-text="Process" class="light-bg-text bg-text mt-5">
							<h2>Our <span>AR App</span> Development Process</h2>
						</div>
						<p>AppsNation guarantees that our AR app development process is fluid, resulting in an application
							being developed and delivered on time.</p>
					</div>
				</div>
			</div>
			<div class="row upset justify-content-center mt30">
				<div class="col-12 col-md-6 col-lg-4">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">01</p>
						<h3 class="title">Project Analysis of Requirements</h3>
						<p class="description">We assist you in choosing the most appropriate AR application with pertinent
							functionalities for your business by extensively studying your industry and rivals to give you a
							result-driven approach. Finally, we present you with a business document containing all the
							project information.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">02</p>
						<h3 class="title">Wireframing & Designing</h3>
						<p class="description">We understand the art of augmented reality and have a track record of
							developing successful apps that combine realistic experience design, high-quality 3D
							presentation, and fluid user interactions. Our UI/UX designers can create high-quality AR apps
							that accurately portray virtual components in a real-world setting.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">03</p>
						<h3 class="title">App Development</h3>
						<p class="description">Our expert team of AR app developers can help you achieve your business
							goals. We create highly scalable, functional, and well-optimized AR apps with experienced AR app
							developers from many sectors that operate remarkably well on all devices and platforms.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">04</p>
						<h3 class="title">App Testing</h3>
						<p class="description">We test the AR app using the most recent trends and methodology to verify
							that it is well-optimized and performs adequately across many platforms and devices. With
							extensive app testing, our superior quality assurance team ensures the integrity of the AR app,
							including its augmented environment.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">05</p>
						<h3 class="title">App Deployment</h3>
						<p class="description">Deploying your custom AR app on the right platform while adhering to the
							platform's stringent requirements for a successful launch is a critical component of our premium
							AR app development services. For marketplace publishing, our team creates the necessary
							paperwork, descriptions, and screenshots.</p>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-4 mt-3">
					<div class="timeline wow fadeIn h-100">
						<p class="timeline-year">06</p>
						<h3 class="title">Post-launch Support and Maintenance</h3>
						<p class="description">Our commitment extends beyond deployment as we provide ongoing support and
							maintenance services. We address any issues, implement updates, and enhance the app's
							performance based on user feedback and emerging technologies. You can rely on us to ensure the
							continued success and optimization of your AR application.</p>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!--End Process-->

	<!--Start Tech-->
	<div class="techonology-used py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 wow fadeIn">
					<div class="common-heading ptag">
						<div data-text="Technologies" class="light-bg-text bg-text mb-5">
							<h2>Technology Stack</h2>
						</div>
						<p>With great technology comes a great tool stack. Therefore, we serve you with the most advanced
							technology and tools for VR app development.</p>
					</div>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-12 wow fadeIn">
					<ul class="nav nav-tabs android-tech-tabs mt-5 justify-content-center">
						@foreach($techstack as $k => $item)

							@if($k == 0)
								<li class="nav-item">
									<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo nav-link active">
										 <img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack">
									</a>
								</li>

							@else

								<li class="nav-item">
									<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo nav-link">
										 <img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack">
									</a>
								</li>
							@endif
						@endforeach
					</ul>

					<div class="tab-content tab-body mt-4">

						@foreach($techstack as $k => $items)
							@if($k == 0)
								<div id="a{{$items['id']}}" class="tab-pane fade in active">
									<div class="boxseo-data text-start">
										 <img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
										<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>
										<p class="mt-4">{{$items['content']}}</p>
									</div>
								</div>

							@else
								<div id="a{{$items['id']}}" class="tab-pane fade">
									<div class="boxseo-data text-start">
										 <img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo">
										<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>

										<p class="mt-4">{{$items['content']}}</p>
									</div>
								</div>

							@endif

						@endforeach
					</div>
				</div>
			</div>
		</div>
		<!--End Tech-->

		<!--Start Let's Work Together-->
		<section class="my-2">
			<div class="container">
				<div class="row py-5 justify-content-center hire-developer">
					<div class="col-lg-8">
						<div class="free-cta-title v-center wow fadeIn">
							<div class="row justify-content-center">
								<div class="col-lg-8 my-auto">
									<p class="text-center text-lg-start">Hire a <span>Dedicated Developer</span> </p>
								</div>
								<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
									<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work
										Together
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Let's Work Together-->

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
							 <img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto"
								height="auto">
							<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
						<div>
							 <img loading="lazy" src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
							<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
						<div>
							 <img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting"
								width="auto" height="auto">
							<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
						<div>
							 <img loading="lazy" src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto"
								height="auto">
							<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Technologies -->

		<!--Start Badges-->
		<section class="badges-section py-5">
			<div class="container">
				<div class="row fadeIn">
					<div class="col-12">
						<div class="common-heading w-tdxt text-center">
							<div data-text="Awards" class="dark-bg-text bg-text text-center">
								<h2 class="text-white">Ranked as #1 <span>Android App</span> Development Company</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5 wow fadeIn">
					<div class="col-12">
						<div class="awards-slider owl-carousel owl-theme">

							@foreach($awards as $k => $item)

								@if($k % 2 == 0)

									@if($item['heading'] == "Top Website design Agencies")
										<a href="{{$item['comment']}}" target="_blank">
											<div class="award-item">
												<div class="item">
													<div class="card">
														<div class="card-body">
															 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto"
																height="auto">
															<h5 class="text-center pt-3">{{$item['heading']}}</h5>
														</div>
													</div>
												</div>
											</div>
										</a>

									@else
										<div class="award-item">
											<div class="item">
												<div class="card">
													<div class="card-body">
														 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto"
															height="auto">
														<h5 class="text-center pt-3">{{$item['heading']}}</h5>
													</div>
												</div>
											</div>
										</div>
									@endif

								@else
									@if($item['heading'] == "Top Website design Agencies")
										<a href="{{$item['comment']}}" target="_blank">
											<div class="award-item">
												<div class="item">
													<div class="card">
														<div class="card-body">
															 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto"
																height="auto">
															<h5 class="text-center pt-3">{{$item['heading']}}</h5>
														</div>
													</div>
												</div>
											</div>
										</a>
									@else
										<div class="award-item">
											<div class="item">
												<div class="card">
													<div class="card-body">
														 <img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto"
															height="auto">
														<h5 class="text-center pt-3">{{$item['heading']}}</h5>
													</div>
												</div>
											</div>
										</div>
									@endif
								@endif
							@endforeach

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Badges-->

		<!--Start Let's Work Together-->
		<section class="my-1">
			<div class="container">
				<div class="row py-5 justify-content-center hire-developer">
					<div class="col-lg-8">
						<div class="free-cta-title v-center wow fadeIn">
							<div class="row justify-content-center">
								<div class="col-lg-7 my-auto">
									<p class="text-center text-lg-start">We Promise. <span>We Deliver.</span> </p>
								</div>
								<div class="col-lg-5 text-center text-lg-start mt-5 mt-lg-0">
									<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work
										Together
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Let's Work Together-->

		<!--Start Testinomial-->
		<section class="testimonials-section-app pt100 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="common-heading text-center">
							<div data-text="Testimonials" class="dark-bg-text bg-text text-center">
								<h2 class="text-white">What <span> Our Clients</span> Say About <span>AppsNation</span></h2>
							</div>
							<h5 class="text-white">Over 1200+ Satisfied Clients and Growing</h5>
						</div>
					</div>
				</div>


				<div class="testimonial-card-a owl-carousel owl-theme">
					@foreach($testimonials as $key => $item)

						<div class="tcd card h-100">
							<div class="row">
								<div class="col-lg-6 position-relative">

									<!-- Overlay -->
									<div class="video-overlay" data-target="player-{{$key}}"
										style="position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;z-index:2;">
									</div>

									<!-- YouTube Video -->
									<iframe id="player-{{$key}}" class="youtube-player testimonial-video"
									loading="lazy"
										src="{{$item['comments']}}" title="Client Testimonial" frameborder="0"
										allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
										referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
									</iframe>

								</div>

								<div class="col-lg-6">
									<div class="testimonial-card card-body">
										<div class="tt-text">
											<p>{{$item['title']}}</p>
										</div>

										<div class="client-thumbs mt30">
											<div class="media v-center upset">
												<div class="media-body user-info v-center">
													<h3>{{$item['name']}}</h3>
													<p>{{$item['location']}}</p>
													<i class="fas fa-quote-right posiqut"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					@endforeach
				</div>
				<div class="row mt-5">
					<div class="col-12">
						<div class="row">
							<div class="col-12 col-md-6 col-lg-4 col-xl-3">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://clutch.co/profile/appsnation#highlights" target="_blank">
											 <img loading="lazy" src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto"
												alt="Clutch" width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by
												Clutch</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
											 <img loading="lazy" src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark"
												width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark
											</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
											 <img loading="lazy" src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto"
												alt="DesignRush" width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by
												DesignRush</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
											 <img loading="lazy" src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto"
												alt="GoodFirms" width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by
												GoodFirms</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
											 <img loading="lazy" src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto"
												alt="Trustpilot" width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by
												Trustpilot</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
											 <img loading="lazy" src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto"
												alt="Sortlist" width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by
												Sortlist</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://upcity.com/profiles/appsnation" target="_blank">
											 <img loading="lazy" src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto"
												alt="UpCity" width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by
												UpCity</p>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
								<div class="card h-100">
									<div class="card-body">
										<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
											 <img loading="lazy" src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto"
												alt="SiteJabber" width="auto" height="auto">
											 <img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
												width="auto" height="auto">
											<p class="text-center pt-2 text-black">Recognized as Top App Developers by
												SiteJabber</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 fadeIn my-auto text-center">
						<div class="review-title-ref mt40">
							<a href="{{url('/testimonials')}}"
								class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i
									class="fas fa-chevron-right fa-ani"></i></a>
						</div>
					</div>
				</div>
			</div>

	</div>
	</section>
	<!--End Testinomial-->

	<!-- Start FAQS-->
	<section class="faq-section py-5" id="faqs">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 wow fadeIn">
					<div class="common-heading">
						<div data-text="FAQ" class="light-bg-text bg-text">
							<h2>Frequently Asked Questions</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt100">
				<div class="col-sm-12 wow fadeIn">
					<div class="accordion" id="accordionExample-a">
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-b">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
									What is the difference between AR and VR?
								</button>
							</h2>
							<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>The user can be transported into another reality using virtual reality. Take us
											somewhere else, in other words. VR closes out the area and relocates our
											presence elsewhere by employing closed visors or goggles.</p>
										<p class="pt-2">On the other hand, augmented reality enhances our current reality by
											adding something to it. It does not lead us anyplace. It simply "enhances" our
											current state of presence, often with clear visors.</p>
										<p class="pt-2">The same thing unites augmented and virtual reality: they are both
											immersive experiences. They both have the incredible ability to alter our
											perception of the world. The sense of our presence, on the other hand, varies.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
									Which is better - AR or VR?
								</button>
							</h2>
							<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AR uses phones and tablets to supplement reality, whereas VR uses headgear to
											create a new universe. AR is better for discrete, technical concerns, but VR is
											better for comprehensive, soft-skill information. Both AR training and VR
											training provide an excellent long-term ROI.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
									How much does a AR app Cost to Develop?
								</button>
							</h2>
							<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>The cost of developing an AR app is mostly determined by the demands; project
											complexity, modules, reporting, back-end system, hardware setup, integration,
											etc. After you know precisely what you want, you can estimate how much it will
											cost.</p>
										<p class="pt-2">The cost of developing a smartphone AR application, for example,
											might range from $5,000 to $100,000.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
									How much does it cost to build a custom AR app?
								</button>
							</h2>
							<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>The cost of developing an augmented reality application will be determined by
											your business concept and the technology, talents, and time required to make it
											a reality.</p>
										<p class="pt-2">These considerations have a significant influence on the expenses of
											developing an AR app:</p>
										<ul class="ps-5">
											<li>The nature of your augmented reality app: Marker-based or Markerless</li>
											<li>AR app complexity </li>
											<li>Software permits</li>
										</ul>
										<p class="pt-2">The development cost might range from a few thousand dollars for a
											simple AR software to $300,000 or more for a feature-rich, tailored AR solution.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
									How long does it take to make AR app?
								</button>
							</h2>
							<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AR app designing and programming can take 1-8 weeks or more depending on the
											scope of the virtual environment, features, models, purpose, amount of digital
											assets, and the number of interactions.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
									What’s the latest tech you’re using?
								</button>
							</h2>
							<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>To develop your unique AR apps, we employ the following technological stack:</p>
										<p class="pt-2">Framework</p>
										<ul class="ps-5">
											<li>Vuforia</li>
											<li>Android Studio</li>
											<li>Unity 3D</li>
											<li>ARKit</li>
											<li>ARCore</li>
										</ul>
										<p class="pt-2">Language</p>
										<ul class="ps-5">
											<li>Java</li>
											<li>JavaScript</li>
											<li>C+</li>
										</ul>
										<p class="pt-2">Database</p>
										<ul class="ps-5">
											<li>SQLite</li>
											<li>MySQL</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
									What kind of testing will you do?
								</button>
							</h2>
							<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>When it comes to mobile AR apps, we constantly consider special checklists for
											testing, such as the appropriate operation of multiple screen orientations,
											Internet connection and interruptions, and varying degrees of memory and battery
											consumption. Let us go through the critical features of AR app testing:</p>
										<ul class="ps-5">
											<li>A great deal of try and error</li>
											<li>Session recording - UI and other automation testing tools</li>
											<li>Putting the app through its paces in various situations</li>
											<li>Put a variety of devices through their paces.</li>
											<li>Tools for gathering user feedback</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse"
									data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
									Will we sign an NDA to keep my AR software/application idea confidential?
								</button>
							</h2>
							<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c"
								data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>A Non-Disclosure Agreement (NDA) is a legally enforceable document that we
											utilize to ensure that your ideas are not duplicated or leaked to rivals while
											working on various projects. As a result, you should be less concerned about the
											security of your AR app.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End FAQS -->

	<!--Start Blogs-->
	<section class="blogs-section py-5">
		@if(count($data['data']) > 0)
			<div class="container">
				<div class="row mb100">
					<div class="col-lg-6">
						<div data-text="Blogs" class="light-bg-text bg-text">
							<h2 class="mb0 common-heading">Latest Stories</h2>
						</div>
					</div>
				</div>
				<div class="row">
					@foreach($data['data'] as $post)
						<div class="col-12 col-md-6 col-lg-4 mt30 wow fadeIn">
							<div class="card h-100">
								<a href="{{ $post['guid'] }}">
									 <img loading="lazy" src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}"
										alt="{{$post['post_title']}}" class="img-fluid">
								</a>
								<div class="entry-blog-post dg-bg2">
									<span class="bypost-">
										<a href="{{ $post['guid'] }}">
											<i class="fas fa-tag"></i> Appsnation
										</a>
									</span>
									<span class="posted-on-">
										<a href="{{ $post['guid'] }}">
											<i class="fas fa-clock"></i> {{ date('M d, Y', strtotime($post['post_date'])) }}
										</a>
									</span>
								</div>
								<div class="card-body">
									<h4 class="mb-0">
										<a href="{{ $post['guid'] }}">{{$post['post_title']}}</a>
									</h4>
								</div>
							</div>
						</div>
					@endforeach
		@else
						</div>
					</div>
				@endif
	</section>

	<div class="container">
		<div class="row mb-4 text-center wow fadeIn">
			<div class="col-12">
				<a href="https://blog.appsnation.co/" class="btn-main button-arounder lnk">View More
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
		</div>
	</div>
	<!--End Blogs-->

@endsection