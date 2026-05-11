@extends('app.main')
@section('content')

<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 connected-devices-banner">
@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Top-Rated Connected Devices Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Offer your consumers a real-time immersive user experience of your business via connected device developed by our expert AR app developers.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Breadcrumb Area-->

<!--Start About-->
<section class="service py-5">
	<div class="">
		<div class="row">
			<div class="col-lg-5 my-auto">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/services/connected-devices/connected-devices.webp" alt="Connected Devices" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-lg-auto">
				<div class="common-heading text-l px-3 px-lg-0 pr-lg-4">
					<div data-text="Connected" class="light-bg-text bg-text">
						<h2>Scale-Up With Our<br> <span class="flup-theme">Connected Device</span> Development Services</h2>
					</div>
					<p>Turning your cellphone application and software related development cost into a foreseen revenue with strategically designed and modified algorithms to let you stand out in the competition. Our app developers are well equipped with the most recent tech gadgets to fulfill any of your required finest application development services.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section-app py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our Unrivaled <span>Connected Device</span> Development Services</h2>
					</div>
					<p class="mb30">AppsNation connected devices development services are the light of hope for you to reshape your business with more digital traction.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/connected-devices/iot-app-development.svg" alt="IoT App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>IoT App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our iOT device app development services are powered by new technology, allowing us to create amazing wearable apps for both iOS and Android.</p>
						<a href="{{url('/iot-app-development')}}" class="mt20 link-prbs">
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/connected-devices/wearable-app-development.svg" alt="Wearable App Developmen" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Wearable App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our wearable device app development services are powered by new technology, allowing us to create amazing wearable apps for both iOS and Android.</p>
						<a href="{{url('/wearable-app-development')}}" class="mt20 link-prbs">
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/connected-devices/industrial-automation.svg" alt="Industrial Automation" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Industrial Automation</h3>
					</div>
					<div class="services-text-div">
						<p>From automating mundane tasks to optimizing your workflow, we have the tools and experience to make it happen. Avoid letting manual labor hold you back any longer.</p>
						<a href="{{url('/industrial-automation')}}" class="mt20 link-prbs">
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Let's Work Together-->
<section class="my-1">
	<div class="container">

		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-8">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-8 my-auto">
							<p class="text-center text-lg-start">Hire a <span>Dedicated Developer</span> </p>
						</div>
						<div class="col-lg-4 text-center text-lg-start mt-5 mt-lg-0">
							<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
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
					<img loading="lazy" src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
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
					<img loading="lazy" src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
					<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 text-center certificate">
				<div>
					<img loading="lazy" src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
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

					@if($k%2==0)
					
					 @if($item['heading']=="Top Website design Agencies")
					 <a href="{{$item['comment']}}" target="_blank">
					 <div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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
									<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
									<h5 class="text-center pt-3">{{$item['heading']}}</h5>
								</div>
							</div>
						</div>
					 </div>
					 @endif

					@else
					@if($item['heading']=="Top Website design Agencies")
					 <a href="{{$item['comment']}}" target="_blank">
					<div class="award-item">
						<div class="item">
							<div class="card">
								<div class="card-body">
									<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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
									<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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
							<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
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
										<img loading="lazy" src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch"
											width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch
										</p>
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
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
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
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms
										</p>
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
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist
										</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
							<div class="card h-100">
								<div class="card-body">
									<a href="https://upcity.com/profiles/appsnation" target="_blank">
										<img loading="lazy" src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity"
											width="auto" height="auto">
										<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star"
											width="auto" height="auto">
										<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity
										</p>
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
	</section>
	<!--End Testinomial-->


@endsection