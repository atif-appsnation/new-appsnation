@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 mobile-app-banner">

    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 my-auto wow fadeIn">
                <div class="bread-titlev2">
                    <h1 class="banner-heading pt-3" data-wow-delay=".2s">Top-Rated Mobile App Development Company</h1>
                    <p class="mt2 text-white" data-wow-delay=".4s">Leverage the most used mobile platform to expand your business’s boundaries with our exceptional mobile app development services.</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 mt-4 mt-md-auto wow fadeIn">
				<img loading="lazy" src="images/services/mobile-app-development/mobile-app-banner-img.webp" class="img-fluid" alt="Mobile App Development" width="100%" height="100%">
			</div>
        </div>
    </div>
</section>
<!--End Hero-->

<!--Start About-->
<section class="service py-5">
    <div class="">
        <div class="row">
            <div class="col-lg-6">
                <div class="wow fadeIn">
                    <img loading="lazy" src="images/services/mobile-app-development/mobile-app-development.webp" alt="Mobile App Development" class="img-fluid" width="100%" height="100%">
                </div>
            </div>
            <div class="col-lg-6 block-1 wow fadeIn my-lg-auto">
                <div class="common-heading text-l px-3 px-lg-0 pr-lg-4">
					<div data-text="Mobile" class="light-bg-text bg-text mt-0">
						<h2>Scale-Up With Our<br> <span class="flup-theme">Custom Mobile App Development Services</span></h2>
					</div>
                    <p>Turning your cellphone application and software related development cost into a foreseen revenue with strategically designed and modified algorithms to let you stand out in the competition. Our app developers are well equipped with the most recent tech gadgets to fulfill any of your required finest application development services.</p>
					<a href="pdf/mobile-app.pdf" target="_blank" class="btn-main button-arounder lnk mt-4">Download Mobile App Profile
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
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
            <div class="col-12 wow fadeIn">
                <div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
                    	<h2>Our Unrivaled <span>Mobile App</span> Development Services</h2>
					</div>
					<p class="mb30">AppsNation mobile app development services are the light of hope for you to reshape your business with more digital traction.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/android-app-development.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Android App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our Android app developers use the most up-to-date technologies to produce native apps with strong and adaptive architecture.</p>
						<a href="{{url('/android-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/ios-app-development.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>iOS App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We specialize in developing full-featured iOS mobile apps that are reliable, scalable and compatible with iPhone, iPad, Apple TV and Apple Watch.</p>
						<a href="{{url('/ios-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/cross-platform-app-development.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Cross-Platform App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We create cross-platform and hybrid apps that help you save money by using a single code base and reducing time to market.</p>
						<a href="{{url('/cross-platform-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<img loading="lazy" src="images/services/mobile-app-development/game-app-development.svg" alt="Android App Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Game App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We have the top mobile game app developers working for us, and they've created a wide range of highly entertaining games.</p>
						<a href="{{url('/game-app-development')}}" class="mt20 link-prbs">Read More
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
						<h2 class="text-white">Ranked as #1 <span>Mobile App</span> Development Company</h2>
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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
            <!-- <div class="row mt-3 px-3"> -->
			@foreach($testimonials as $item)
                <!-- <div class="col-lg-6 mt-3 wow fadeIn"> -->
					<div class="tcd card h-100">
						<div class="testimonial-card card-body">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<!-- <div class="user-image bdr-radius"> <img loading="lazy" src="images/user-thumb/girl.webp" alt="girl" class="img-fluid rounded-circle" /> </div> -->
									<div class="media-body user-info v-center">
										<h5>{{$item['name']}}</h5>
										<p>{{$item['location']}}</p> <i class="fas fa-quote-right posiqut"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                <!-- </div> -->
            @endforeach
            <!-- </div> -->
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://clutch.co/profile/appsnation#highlights" target="_blank">
									<img loading="lazy" src="images/reviews/clutch.webp" class="img-fluid d-block mx-auto" alt="Clutch" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Clutch</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.bark.com/en/us/company/appsnation/wGVQn/" target="_blank">
									<img loading="lazy" src="images/reviews/bark.webp" class="img-fluid d-block mx-auto" alt="Bark" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Bark</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.designrush.com/agency/profile/appsnation" target="_blank">
									<img loading="lazy" src="images/reviews/designrush.webp" class="img-fluid d-block mx-auto" alt="DesignRush" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by DesignRush</p>
								</a>
							</div>
						</div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3 mt-xl-0">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.goodfirms.co/company/appsnation-co" target="_blank">
									<img loading="lazy" src="images/reviews/goodfirms.webp" class="img-fluid d-block mx-auto" alt="GoodFirms" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by GoodFirms</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.trustpilot.com/review/appsnation.co" target="_blank">
									<img loading="lazy" src="images/reviews/trustpilot.webp" class="img-fluid d-block mx-auto" alt="Trustpilot" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Trustpilot</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sortlist.com/agency/appsnation" target="_blank">
									<img loading="lazy" src="images/reviews/sortlist.webp" class="img-fluid d-block mx-auto" alt="Sortlist" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by Sortlist</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://upcity.com/profiles/appsnation" target="_blank">
									<img loading="lazy" src="images/reviews/upcity.webp" class="img-fluid d-block mx-auto" alt="UpCity" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by UpCity</p>
								</a>
							</div>
						</div>
                    </div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
						<div class="card h-100">
							<div class="card-body">
								<a href="https://www.sitejabber.com/reviews/appsnation.co" target="_blank">
									<img loading="lazy" src="images/reviews/sitejabber.webp" class="img-fluid d-block mx-auto" alt="SiteJabber" width="auto" height="auto">
									<img loading="lazy" src="images/reviews/star.webp" class="img-fluid d-block mx-auto" alt="Star" width="auto" height="auto">
									<p class="text-center pt-2 text-black">Recognized as Top App Developers by SiteJabber</p>
								</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 fadeIn my-auto text-center">
                <div class="review-title-ref mt40">
                    <a href="{{url('/testimonials')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3">Read More Reviews <i class="fas fa-chevron-right fa-ani"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testinomial-->

<!--Start Blogs-->
<section class="blogs-section py-5">
@if(count($data['data']) > 0)
	<div class="container">
		<div class="row mb100">
			<div class="col-lg-6">
				<div class="common-heading wow fadeIn">
					<div data-text="Blogs" class="light-bg-text bg-text">
                    	<h2 class="mb0 common-heading">Latest Stories</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-12 col-md-6 col-lg-4 mt30 wow fadeIn">
				<div class="card h-100">
					<a href="{{ $post['guid'] }}">
						<img loading="lazy" src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
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