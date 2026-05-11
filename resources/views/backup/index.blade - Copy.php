@extends('app.main')
@section('content')




<?php $randomNumber = rand(1, 12) ?>

<!-- <section class="hero-slider hero-style mobile-app-{{$randomNumber}}" id="hero-slider">
	<img src="images/banner/main-banner-background.jpg" alt="banner" class="lower-banner"> 
	<img src="images/banner/upper-layer-05.webp" alt="banner" class="upper-banner img-fluid"> -->
	<div class="hero-main-rp container main-ban hidden">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-12 col-lg-6 v-center">
				<div class="hero-heading-sec2 niwax" data-rellax-speed="3">
					@if($randomNumber == 1)
						<h1 class="wow fadeIn">Top Rated <br> <span>Android App </span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 2)
						<h1 class="wow fadeIn">Top Rated <br> <span>iOS App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 3)
						<h1 class="wow fadeIn">Top Rated <br> <span>Game App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 4)
						<h1 class="wow fadeIn">Top Rated <br> <span>Cross Platform App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 5)
						<h1 class="wow fadeIn">Top Rated <br> <span>E-Commerce App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 6)
						<h1 class="wow fadeIn">Top Rated <br> <span>Web App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 7)
						<h1 class="wow fadeIn">Top Rated <br> <span>MR App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 8)
						<h1 class="wow fadeIn">Top Rated <br> <span>AR App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 9) 
						<h1 class="wow fadeIn">Top Rated <br> <span>VR App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 10)
						<h1 class="wow fadeIn">Top Rated <br> <span>IoT App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 11)
						<h1 class="wow fadeIn">Top Rated <br> <span>Wearables App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@elseif($randomNumber == 12)
						<h1 class="wow fadeIn">Top Rated <br> <span>Mobile App</span> Development Company</h1>
						<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
					@endif
				</div>
				<div class="awrd-sec text-w mt40 wow fadeIn">
					<h5>Our Achievements</h5>
					<div class="bages-slider owl-carousel mt20">
						<div class="img-badge-">
							<a href="#"> <img src="images/icons/badge1.webp" alt="niwax mobile app development company" class="img100w"></a>
						</div>
						<div class="img-badge-">
							<a href="#"> <img src="images/icons/badge2.webp" alt="niwax mobile app development company" class="img100w"></a>
						</div>
						<div class="img-badge-">
							<a href="#"> <img src="images/icons/badge3.webp" alt="niwax mobile app development company" class="img100w"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $randomNumber = rand(1, 12) ?>
<!-- 
{{--
	@if($randomNumber==1)
<section class="hero-slider hero-style mobile-app-1">
@elseif($randomNumber==2)
<section class="hero-slider hero-style mobile-app-2">
@elseif($randomNumber==3)
<section class="hero-slider hero-style mobile-app-3">
@elseif($randomNumber==4)
<section class="hero-slider hero-style mobile-app-4">
@elseif($randomNumber==5)
<section class="hero-slider hero-style mobile-app-5">
@elseif($randomNumber==6)
<section class="hero-slider hero-style mobile-app-6">
@elseif($randomNumber==7)
<section class="hero-slider hero-style mobile-app-7">
@elseif($randomNumber==8)
<section class="hero-slider hero-style mobile-app-8">
@elseif($randomNumber==9)
<section class="hero-slider hero-style mobile-app-9">
@elseif($randomNumber==10)
<section class="hero-slider hero-style mobile-app-10">
@elseif($randomNumber==11)
<section class="hero-slider hero-style mobile-app-11">
@elseif($randomNumber==12)
<section class="hero-slider hero-style mobile-app-12">
@endif --}}

<section class="hero-slider hero-style mobile-app" id="hero-slider">
	
	<div class="hero-main-rp container main-ban hidden">
		<div class="row align-items-center">
			<div class="col-sm-12 col-md-12 col-lg-6 v-center">
				<div class="hero-heading-sec2 niwax" data-rellax-speed="3">
					<h1 class="wow fadeIn">Top Rated <span>Mobile App</span> Development Company</h1>
					<p class="wow fadeIn">Our Game app developers are glad to state that they are always accessible to meet and discuss project requirements and progress.</p>
				</div>
				<div class="awrd-sec text-w mt40 wow fadeIn">
					<h5>Our Achievements</h5>
					<div class="bages-slider owl-carousel mt20">
						<div class="img-badge-">
							<a href="#"> <img src="images/icons/badge1.webp" alt="niwax mobile app development company" class="img100w"></a>
						</div>
						<div class="img-badge-">
							<a href="#"> <img src="images/icons/badge2.webp" alt="niwax mobile app development company" class="img100w"></a>
						</div>
						<div class="img-badge-">
							<a href="#"> <img src="images/icons/badge3.webp" alt="niwax mobile app development company" class="img100w"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>  -->

<!-- Start Technologies -->
<section class="technologies certificates py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6">
				<div class="common-heading">
					<h2>We Partner with the <span>World's technology</span> leaders</h2>
				</div>
			</div>
		</div>
		<div class="row pt-3 wow fadeIn">
			<div class="col-12">
				<div id="tech" class="carousel slide tech" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/google-certifie-agency.webp" alt="Google Developers" width="auto" height="auto">
									<h6 class="pt-3">Google Developer<br>Certified Agency</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/adobe-logos.webp" alt="Adobe Solution Partner" width="auto" height="auto">
									<h6 class="pt-3">Adobe Solution<br>Partner Program</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/microsoft-certified-partner.webp" alt="Microsoft Certified Consulting" width="auto" height="auto">
									<h6 class="pt-3">Microsoft Certified<br>Consulting Partner</h6>
								</div>
								<div class="col-md-6 col-lg-3 mt-3 text-center">
									<img src="images/home/amazon-web-services.webp" alt="Amazon Web Service" width="auto" height="auto">
									<h6 class="pt-3">Amazon Web<br>Service Partner</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--<div class="col-12 text-center mt-3">-->
			<!--	<a class="btn mb-3 mr-1" href="#tech" role="button" data-bs-slide="prev">-->
			<!--		<i class="fa fa-arrow-left"></i>-->
			<!--	</a>-->
			<!--	<a class="btn mb-3" href="#tech" role="button" data-bs-slide="next">-->
			<!--		<i class="fa fa-arrow-right"></i>-->
			<!--	</a>-->
			<!--</div>-->
		</div>
	</div>
</section>
<!-- End Technologies -->

<!--Start Badges-->
<section class="badges-section py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6">
				<div class="common-heading w-tdxt">
					<h2>Ranked as #1 <span>Mobile App</span> Development Company</h2>
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
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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
									<img src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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

		<div class="-cta-btn mt70">
			<div class="free-cta-title v-center wow fadeIn" data-wow-delay="1s">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<p class="text-center text-lg-start">We <span>Promise.</span> We <span>Deliver.</span> </p>
					</div>
					<div class="col-lg-5 text-center text-lg-start mt-lg-0">
						<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk">Let's Work Together
							<i class="fas fa-chevron-right fa-icon"></i>
							<span class="circle"></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Badges-->

<!--Start Service-->
<section class="py-5 dark-bg2">
	<div class="sctxt">App Development</div>
</section>
<!--End Service-->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container mt-3">
		<div class="row">
			<div class="col-lg-6 mt-5 mt-sm-3 mt-md-5 wow fadeIn">
				<div class="common-heading ptag">
					<h2>Our Expertise</h2>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-sm-3 mt-md-5 wow fadeIn">
				<div class="common-heading ptag">
					<p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="android-img"></div>
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
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="ios-img"></div>
					</div>
					<div class="service-heading">
						<h3>iOS App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We specialize in developing full-featured iOS mobile apps that are reliable, scalable, and compatible with iPhone, iPad, Apple TV, and Apple Watch.</p>
						<a href="{{url('/ios-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="cross-platform-img"></div>
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
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="game-app-img"></div>
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
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="web-app-img"></div>
					</div>
					<div class="service-heading">
						<h3>Web App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our web app development services assist with the design, development, and evolution of web-based software. You can rely on us to create web apps that are effective, efficient, and simple to use.</p>
						<a href="{{url('/web-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="wearable-img"></div>
					</div>
					<div class="service-heading">
						<h3>Wearable App Development</h3>
					</div>
					<div class="services-text-div">
						<p>Our wearable device app development services are powered by new technology, allowing us to create amazing wearable apps for both iOS and Android.</p>
						<a href="{{url('/wearable-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="ar-app-img"></div>
					</div>
					<div class="service-heading">
						<h3>AR App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We create high-end augmented reality applications with an emphasis on 3D model design and algorithm implementation, for overlaying the best virtual content.</p>
						<a href="{{url('/ar-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="vr-app-img"></div>
					</div>
					<div class="service-heading">
						<h3>VR App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We focus on the construction of software that allows users to interact with simulated worlds and deliver competitive VR apps with high and swift user adoption.</p>
						<a href="{{url('/vr-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						<div class="metaverse-img"></div>
					</div>
					<div class="service-heading">
						<h3>MR App Development</h3>
					</div>
					<div class="services-text-div">
						<p>We are at the forefront of pioneering MR App development, crafting cutting-edge software that enables users to seamlessly interact with immersive digital worlds.</p>
						<a href="{{url('/mr-app-development')}}" class="mt20 link-prbs">Read More
							<i class="fas fa fa-arrow-circle-right"></i>
						</a>
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
			<div class="col-sm-12 col-md-12 col-lg-5 wow fadeIn">
				<div class="tab-content" id="imagetab">

					@foreach($agencystack as $k=>$items)
                    @if($k==0)

                    <div class="tab-pane features-content active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
                        <img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
                    </div>
                    @else
                    <div class="tab-pane features-content fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
                        <img src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
                    </div>
                    @endif

                    @endforeach

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
				<h2>Different Industries We Serve:</h2>
				<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
				<ul class="nav nav-tabs features-tab" id="headingtab" role="tablist">
					
					@foreach($agencystack as $k=>$items)
                    @if($k==0)
                    <li class="nav-item">
                        <a class="nav-link active" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="nav-link" id="{!!$items['id']!!}-tab" data-bs-target="#panel_b_{!!$items['id']!!}" data-bs-secondary="#panel_a_{!!$items['id']!!}" data-bs-toggle="tab" href="#{!!$items['id']!!}" role="tab" aria-controls="{!!$items['id']!!}" aria-selected="false">{!!$items['heading']!!}</a>
                    </li>
                    @endif
                    @endforeach

				</ul>
				<div class="tab-content pt-3" id="texttab">

					@foreach($agencystack as $k=>$items)
                    @if($k==0)

                    <div class="tab-pane image-content active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
                        <h3>{!!$items['heading']!!}</h3>
                        <p class="py-3">{!!$items['content']!!}</p>
                    </div>
                    @else

                    <div class="tab-pane image-content fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
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

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<h2>Our <span>Mobile App</span> Development Process</h2>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="common-heading ptag wow fadeIn">
					<p>Our Mobile app development process is a well-structured journey that begins with a thorough project scope determination early in the project life cycle. We then venture into a series of iterative cycles, leveraging Agile methodologies and sprints, to bring your product to life.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">01</p>
						<h3 class="title">Project Analysis of Requirements</h3>
						<p class="description">Knowing your UX&UI depending on your target audience is one of the most crucial aspects of the study. Based on your target region, you must know your target audience, age, languages, design, and typefaces. This phase also entails determining which technology you'll use to create your app.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">02</p>
						<h3 class="title">Wireframing & Designing</h3>
						<p class="description">The following stage should be to draw a rough sketch of your user journey on paper. Sketching is capable of much more than simply tracking your user's movements. This aids in the refinement of concepts and the proper arrangement of all design components.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">03</p>
						<h3 class="title">App Development</h3>
						<p class="description">The app passes through several stages as development develops. The essential functionality is usually not properly tested in the early stages. Much of the anticipated functionality is added in the second stage. We work in an agile manner. It facilitates flexible planning.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">04</p>
						<h3 class="title">App Testing</h3>
						<p class="description">Usability, compatibility, security, and performance should all be checked on the program. Your beta users' input can assist you to determine whether your app's function is working properly in a real-world circumstance.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">05</p>
						<h3 class="title">App Development</h3>
						<p class="description">The last step consists of the deployment of the app after it has been tested. Launch your app with us and go live or beta live as per your requirement.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="card timeline wow fadeIn h-100">
					<div class="card-body">
						<p class="timeline-year">06</p>
						<h3 class="title">Maintenance</h3>
						<p class="description">We offer the excellent solution of maintenance in your app development procedures and facilitate you with our best options and services.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!-- Start Why Choose -->
<section class="why-choose-section py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-12">
				<div class="card py-3">
					<div class="card-body">
						<div class="row">
							<div class="col-lg-6">
								<h2>Why Choose <span>Appsnation</span> As Your <span>Development Partner</span></h2>
								<p class="pt-2">Appsnation has been working in the software development field since 2016. We have worked with 300+ businesses. Moreover, AppsNation has its own play store where we have 50+ different apps and software, which most development companies don't have. Appsnation has its own 50+ certified developers and designers team that helps you convert the idea into reality.</p>
								<img src="images/why-choose/why-choose.webp" class="img-fluid mt-4">
								<a href="pdf/company-profile-appsnation.pdf" target="_blank" class="btn-main button-arounder lnk mt-4">Download Company Profile
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
							<div class="col-lg-6 mt-3">
								<div class="row">
									<div class="col-md-6">
										<h3>Team Scalability</h3>
										<img src="images/why-choose/team-scalibility.webp" class="img-fluid my-3" alt="Team Scalability">
										<p class="mb-0">Boost your team with domain specialists whenever required.</p>
									</div>
									<div class="col-md-6 mt-3 mt-sm-0">
										<h3>Quick Time to Market</h3>
										<img src="images/why-choose/quick-time-to-market.webp" class="img-fluid my-3" alt="Quick Time to Market">
										<p class="mb-0">Streamlined delivery is intended to achieve efficiency on time.</p>
									</div>
									<div class="col-md-6 mt-3">
										<h3>Cost Saving</h3>
										<img src="images/why-choose/cost-saving.webp" class="img-fluid my-3" alt="Cost Saving">
										<p class="mb-0">Get experienced and competent developers at a reasonable price.</p>
									</div>
									<div class="col-md-6 mt-3">
										<h3>Skilled Resources</h3>
										<img src="images/<img src="images/why-choose/skilled-resources.webp" class="img-fluid my-3" width="100%" height="auto" alt="Skilled Resources">" class="img-fluid my-3" alt="Skilled Resources">
										<p class="mb-0">Get access to skilled mobile gaming experts with domain knowledge.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose -->

<!--Start Portfolio-->
<section class="portfolio-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading">
					<!-- <span>Our Work</span> -->
					<h2 class="mb20 text-center">Our Latest Creative Work</h2>
				</div>
			</div>
		</div>
	</div>

	<section class="container-fluid py-lg-5">
		<ul class="nav nav-pills justify-content-center wow fadeIn" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" data-bs-toggle="pill" href="#app">App</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#web">Web</a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#mobile-apps">Mobile Apps</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#website">Website</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="pill" href="#design">Design</a>
			</li> -->
		</ul>
		<div class="tab-content mt-5 wow fadeIn">
			<div id="app" class="tab-pane active"><br>
				<div class="scrollHalf">
					<div class="scrollHalf__grupo row h-100" data-scroll>
						<div class="scrollHalf__grupo__imagen col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-auto app-first-cs">
							<img src="images/case-studies/gym-app/header-phone.webp" class="img-fluid" alt="Gym App" />
						</div>
						<div class="scrollHalf__grupo__contenido col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 offset-xl-1 my-auto">
							<img src="images/case-studies/gym-logo.webp" alt="Gym App" class="icon-img">
							<h2 class="pt-3 case-study-heading">Gym App</h2>
							<p class="pt-3 case-study-text">Gymnasium emerges as the definitive application dedicated to offering a comprehensive guide for enhancing physical health and overall well-being. This platform excels by integrating innovative tools and expert insights designed to empower users on their journey toward optimal fitness and wellness. Engage with Gymnasium to transform your health through structured guidance and supportive community features. Whether you're starting your fitness journey or aiming to reach new goals, Gymnasium provides the tools and support you need to succeed. From personalized workout plans to expert nutritional advice and real-time progress tracking, it's your all-in-one companion for achieving and maintaining a healthier lifestyle.</p>
							<a target="_blank" href="{{url('/case-studies/gym-app')}}" class="btn btn-naked text-uppercase pt-5">
								<span class="btn-line btn-line-before"></span>
								<span class="btn-txt view-cs-btn"> &mdash;&#32;View Case Study</span>
								<span class="btn-line btn-line-after"></span>
							</a>
						</div>
					</div>
					<div class="scrollHalf__grupo row h-100" data-scroll>
						<div class="scrollHalf__grupo__imagen col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-auto app-second-cs">
							<img src="images/case-studies/real-estate-app/header-phone.webp" class="img-fluid" alt="Real Estate App" />
						</div>
						<div class="scrollHalf__grupo__contenido col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 offset-xl-1 my-auto">
							<img src="images/case-studies/real-estate-logo.webp" alt="Real Estate App" class="icon-img">
							<h2 class="pt-3 case-study-heading">Real Estate App</h2>
							<p class="pt-3 case-study-text">Our project goals for the real estate initiative are to integrate seamlessly with MLS platforms for accurate property listings, optimize mobile usability, implement robust security measures, and provide an intuitive interface for easy property searches. We aim to enhance visibility through effective digital marketing and maintain a transparent feedback system for continuous improvement based on user insights. These objectives are designed to elevate the real estate experience and deliver exceptional value to our users.</p>
							<a target="_blank" href="{{url('/case-studies/real-estate-app')}}" class="btn btn-naked text-uppercase pt-5">
								<span class="btn-line btn-line-before"></span>
								<span class="btn-txt view-cs-btn"> &mdash;&#32;View Case Study</span>
								<span class="btn-line btn-line-after"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div id="web" class="tab-pane fade"><br>
				<div class="scrollHalf">
					<div class="scrollHalf__grupo row h-100" data-scroll>
						<div class="scrollHalf__grupo__imagen col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-auto web-first-cs">
							<img src="images/case-studies/gym-web/header-web.webp" class="img-fluid" alt="Gym App" />
						</div>
						<div class="scrollHalf__grupo__contenido col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 offset-xl-1 my-auto">
							<img src="images/case-studies/gym-logo.webp" alt="Gym Web" class="icon-img">
							<h2 class="pt-3 case-study-heading">Gym Web</h2>
							<p class="pt-3 case-study-text">More than just a fitness app, Gymnasium acts as your personal trainer, nutritionist, and motivational coach—all conveniently housed within a user-friendly interface. We understand that starting and sticking to a fitness regimen can be challenging, which is why Gymnasium simplifies the complexities of fitness, making it accessible and enjoyable for everyone, anywhere, and anytime. From personalized workout plans tailored to your fitness level and goals to expert dietary recommendations, Gymnasium empowers you to take charge of your health with confidence and ease.</p>
							<a target="_blank" href="{{url('/case-studies/gym-web')}}" class="btn btn-naked text-uppercase pt-5">
								<span class="btn-line btn-line-before"></span>
								<span class="btn-txt view-cs-btn"> &mdash;&#32;View Case Study</span>
								<span class="btn-line btn-line-after"></span>
							</a>
						</div>
					</div>
					<div class="scrollHalf__grupo row h-100" data-scroll>
						<div class="scrollHalf__grupo__imagen col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-auto web-second-cs">
							<img src="images/case-studies/real-estate-web/header-web.webp" class="img-fluid" alt="Real Estate App" />
						</div>
						<div class="scrollHalf__grupo__contenido col-12 col-sm-12 col-md-6 col-lg-6 col-xl-5 offset-xl-1 my-auto">
							<img src="images/case-studies/real-estate-logo.webp" alt="Real Estate Web" class="icon-img">
							<h2 class="pt-3 case-study-heading">Real Estate Web</h2>
							<p class="pt-3 case-study-text">Discover Avenue, the ultimate app for all your property buying and selling needs. Our platform offers a seamless and efficient experience with a user-friendly interface, extensive property listings, and powerful tools. Avenue simplifies real estate transactions, making it easy for you to navigate the market confidently. Join us today and explore a smarter way to buy and sell properties.</p>
							<a target="_blank" href="{{url('/case-studies/real-estate-web')}}" class="btn btn-naked text-uppercase pt-5">
								<span class="btn-line btn-line-before"></span>
								<span class="btn-txt view-cs-btn"> &mdash;&#32;View Case Study</span>
								<span class="btn-line btn-line-after"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>
<!--End Portfolio-->

<!--Start Clients-->
<section class="py-5 bg-gradient3">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6">
				<div class="common-heading">
					<h2 class="mb30">Some of our Clients</h2>
				</div>
			</div>
		</div>
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-12">
				<div class="client-logoset">
					<ul class="row text-center clearfix apppg justify-content-center">

						@foreach($clients as $item)
						<li class="col-lg-2 col-md-3 col-sm-4 col-6 custom-border" data-wow-delay=".2s">
							<div class="brand-logo hoshd">
								<img src="uploads/{{$item['image']}}" alt="{{$item['alt']}}" class="img-fluid">
							</div>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Clients-->

<!-- Start Key Highlights -->
<section class="key-highlights py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 wow fadeIn">
							<div class="common-heading text-l">
								<h2 class="key-highlight">Our Achievements</h2>
								<h6 class="key-numbers">Our work in numbers.</h6>
							</div>
						</div>
						<div class="col-lg-6 wow fadeIn my-auto">
							<p class="key-desc">With the help of <strong>50 plus</strong> highly trained professional team we're able to achieve these amazing numbers which is enough proof of our success.We donot speak about our success, our work speaks about our success.</p>
						</div>
					</div>
					<div class="row justify-content-center mt-5 wow fadeIn">
						<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
							<h2 class="numbers-count">8+</h2>
							<p class="numbers-about">Years on the market</p>
						</div>
						<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
							<h2 class="numbers-count">900+</h2>
							<p class="numbers-about">People on Board</p>
						</div>
						<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
							<h2 class="numbers-count">1k+</h2>
							<p class="numbers-about">Projects Delivered</p>
						</div>
						<div class="col-6 col-sm-6 col-md-3 pb-3 pb-md-3 pb-lg-0">
							<h2 class="numbers-count">67</h2>
							<p class="numbers-about">Our Current NPS Score</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>
<!-- End Key Highlights -->

<!--Start Tech-->
<section class="technologies-stack py-5">
	<div class="container">
		<div class="row wow fadeIn">
			<div class="col-lg-6">
				<div class="common-heading">
					<h2 class="mb30"><span>Technologies</span> we work with</h2>
				</div>
			</div>
		</div>
		<div class="row wow fadeIn">
			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">App Development</h3>
								<p class="text-center pt-2">For App development, our developers use the latest technologies, which provide top notch app development solution.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/apple-logo.webp" alt="iOS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">iOS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/android-logo.webp" alt="Android Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Android</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/flutter-logo.webp" alt="Flutter Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Flutter</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/ionic-logo.webp" alt="Ionic Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Ionic</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/swift-logo.webp" alt="Swift Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Swift</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/kotlin-logo.webp" alt="Kotlin Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Kotlin</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/objective-c-logo.webp" alt="Objective C Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Objective C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">React Native</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/google-fit-sdk.webp" alt="Google Fit SDK Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Google Fit SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/xcode-logo.webp" alt="XCode Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">XCode</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/node-red-logo.webp" alt="Node-Red Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Node-Red</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/graphql-logo.webp" alt="Graph QL Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Graph QL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/grafana-logo.webp" alt="Grafana Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Grafana</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/tensorflow-logo.webp" alt="Tensor Flow Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Tensor Flow</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/tableau-logo.webp" alt="Tableau Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Tableau</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/android-sdk-logo.webp" alt="Android SDK Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Android SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/apache-kafka-logo.webp" alt="Apache Kafka Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Apache Kafka</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/android-studio.webp" alt="Android Studio Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Android Studio</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/xamarin-native-c-logo.webp" alt="Xamarin Native C Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Xamarin Native C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/amazon-sumerian-logo.webp" alt="Amazon Sumerian Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Amazon Sumerian</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/apache-hadoop-logo.webp" alt="Apache Hadoop Logo" class="tech-logo"width="auto" height="auto">
										<h4 class="mt-2">Apache Hadoop</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Frontend Development</h3>
								<p class="text-center pt-2">To make the interactive user interface, our developers use all proven tools and languages that are helpful to enhance user focus and grab their attention.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/angular-logo.webp" alt="Angular Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Angular JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">React JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/html-logo.webp" alt="HTML Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">HTML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/css-logo.webp" alt="CSS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">CSS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/js-logo.webp" alt="JavaScript Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">JavaScript</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/next-js-logo.webp" alt="Next JS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Next JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/json-logo.webp" alt="JSON Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">JSON</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/rest-logo.webp" alt="Rest Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Rest</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/soap-logo.webp" alt="Soap Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Soap</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/xml-logo.webp" alt="XML Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">XML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/spark-ml-logo.webp" alt="Spark ML Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Spark ML</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Database Development</h3>
								<p class="text-center pt-2">Our database experts are trained to provide robust database management solutions. We use all modern technologies to provide you secure database solution.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/firebase-logo.webp" alt="Firebase Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Firebase</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/sqlite-logo.webp" alt="SQLite Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">SQLite</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/core-data-logo.webp" alt="CoreData Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">CoreData</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/realm-logo.webp" alt="Realm Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Realm</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/mysql-logo.webp" alt="MySQL Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">MySQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/sql-logo.webp" alt="SQL Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">SQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/opentsdb-logo.webp" alt="OpenTSDB Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">OpenTSDB</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Backend Development</h3>
								<p class="text-center pt-2">Backend development is key that makes you unable to automate your system. Our backend developers use all modern techniques to develop top-notch solutions.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/php-logo.webp" alt="PHP Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">PHP</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/java-logo.webp" alt="Java Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Java</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/node-js-logo.webp" alt="Node JS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Node JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/python-logo.webp" alt="Python Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Python</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/c-sharp-logo.webp" alt="C# Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">C#</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/c++-logo.webp" alt="C/C++ Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">C/C++</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">CMS Development</h3>
								<p class="text-center pt-2">Our CMS engineers have first-hand knowledge of putting in place specialized solutions that make it easier to create, store, organize, edit, and publish web content.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/wordpress-logo.webp" alt="WordPress Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">WordPress</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/magento-logo.webp" alt="Magento Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Magento</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/shopify-logo.webp" alt="Shopify Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Shopify</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-120 h-100 ">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Infra and Devops Development</h3>
								<p class="text-center pt-2">The utilization of the most recent technologies and techniques by our infrastructure and DevOps developers improve an organization's capacity to offer apps and services at a highspeed.</p>
							</div>
						</div>
						<div class="row pt-6 pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/aws-logo.webp" alt="AWS Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">AWS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/azure-logo.webp" alt="Azure Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Azure</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/google-cloud-logo.webp" alt="Google Cloud Logo" class="tech-logo" width="auto" height="auto">
										<h4 class="mt-2">Google Cloud</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="col-lg-6 mt-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Games Development</h3>
								<p class="text-center pt-2">Our game developers use the most recent technology to define a game's concept, production, and publication. They are incredibly competent in the art of game creation.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/unreal-engine-logo.webp" alt="Unreal Engine Logo" class="tech-logo">
										<h4 class="mt-2">Unreal Engine</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/unity-logo.webp" alt="Unity Logo" class="tech-logo">
										<h4 class="mt-2">Unity</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/cryengine-logo.webp" alt="CRYENGINE Logo" class="tech-logo">
										<h4 class="mt-2">CRYENGINE</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">AR/VR Development</h3>
								<p class="text-center pt-2">Our AR/VR developer uses cutting-edge technology, whereas a VR developer builds entirely new digital worlds for consumers to view through a device, while an AR developer builds a layer of digital experience using mobile applications in our actual world.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider3 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/artoolkit-logo.webp" alt="ARToolkit Logo" class="tech-logo">
										<h4 class="mt-2">ARToolkit</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/oculus-logo.webp" alt="Oculus Logo" class="tech-logo">
										<h4 class="mt-2">Oculus</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/photon-logo.webp" alt="Photon Logo" class="tech-logo">
										<h4 class="mt-2">Photon</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/vuforia-logo.webp" alt="Vuforia Logo" class="tech-logo">
										<h4 class="mt-2">Vuforia</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/arkit-logo.webp" alt="ARKit Logo" class="tech-logo">
										<h4 class="mt-2">ARKit</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img src="images/tech/arcore-logo.webp" alt="ARCore Logo" class="tech-logo">
										<h4 class="mt-2">ARCore</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<!-- <div class="row">
			<div class="col-lg-12 fadeInDown">
				<ul class="nav nav-tabs justify-content-center" role="tablist">
					<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#mobile">Mobile</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#frontend">Frontend</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#database">Database</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#backend">Backend</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cms">CMS</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#infra">Infra and Devops</a> </li>
				</ul>
				<div class="tab-content">
					<div id="mobile" class="container tab-pane active">
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/apple-logo.webp" alt="ios-logo" class="tech-logo">
								<h6>iOS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/android-logo.webp" alt="android-logo" class="tech-logo">
								<h6>Android</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/react-native-logo.webp" alt="react-native-logo" class="tech-logo">
								<h6>React Native</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/flutter-logo.webp" alt="flutter-logo" class="tech-logo">
								<h6>Flutter</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
								<h6>Ionic</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
								<h6>Swift</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp"> <img src="images/tech/kotlin-logo.webp" alt="kotlin-logo" class="tech-logo">
								<h6>Kotlin</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp"> <img src="images/tech/objective-c-logo.webp" alt="objective-c-logo" class="tech-logo">
								<h6>Objective C</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp"> <img src="images/tech/windows-logo.webp" alt="windows-logo" class="tech-logo">
								<h6>Windows</h6>
							</div>
						</div>
					</div>
					<div id="frontend" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/angular-logo.webp" alt="angular-js-logo" class="tech-logo">
								<h6>Angular JS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/react-native-logo.webp" alt="react-js-logo" class="tech-logo">
								<h6>React JS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/type-script-logo.webp" alt="type-script-logo" class="tech-logo">
								<h6>TypeScript</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/vue-js-logo.webp" alt="vue-js-logo" class="tech-logo">
								<h6>Vue</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img src="images/tech/html-logo.webp" alt="html5-logo" class="tech-logo">
								<h6>HTML5</h6>
							</div>
						</div>
					</div>
					<div id="database" class="container tab-pane fade">
						<br>
						<div class="row mt-3 justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/mangodb-logo.webp" alt="mangodb-logo" class="tech-logo">
								<h6>Mongo DB</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/mysql-logo.webp" alt="mysql-logo" class="tech-logo">
								<h6>MySQL</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/mssql-logo.webp" alt="mssql-logo" class="tech-logo">
								<h6>MsSQL Logo</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/firebase-logo.webp" alt="firebase-logo" class="tech-logo">
								<h6>Firebase</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img src="images/tech/dynamodb-logo.webp" alt="dynamodb-logo" class="tech-logo">
								<h6>Dynamodb</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img src="images/tech/redis-logo.webp" alt="redis-logo" class="tech-logo">
								<h6>Redis</h6>
							</div>
						</div>
					</div>
					<div id="backend" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/php-logo.webp" alt="php-logo" class="tech-logo">
								<h6>PHP</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/java-logo.webp" alt="java-logo" class="tech-logo">
								<h6>Java</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/node-js-logo.webp" alt="node-js-logo" class="tech-logo">
								<h6>Node JS</h6>
							</div>
						</div>
					</div>
					<div id="cms" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/wordpress-logo.webp" alt="wordpress-logo" class="tech-logo">
								<h6>WordPress</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/magento-logo.webp" alt="magento-logo" class="tech-logo">
								<h6>Magento</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img src="images/tech/shopify-logo.webp" alt="shopify-logo" class="tech-logo">
								<h6>Shopify</h6>
							</div>
						</div>
					</div>
					<div id="infra" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/aws-logo.webp" alt="aws-logo" class="tech-logo">
								<h6>AWS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img src="images/tech/azure-logo.webp" alt="azure-logo" class="tech-logo">
								<h6>Azure</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<!--End Tech-->

<!--Start Testinomial-->
<section class="testinomial-section-app bg-none py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 wow fadeIn">
				<div class="common-heading text-l"> <span>What our clients say about AppsNation.</span>
					<h2>Over 1200+ Satisfied Clients and Growing</h2>
				</div>
				<div class="review-title-ref mt40">
					<h4>Read More Reviews</h4>
				</div>
				<div class="row mt30 justify-content-center">
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".2s"> <img src="images/about/reviews-icon-1.webp" alt="review" class="img-fluid"> </a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".4s"> <img src="images/about/reviews-icon-2.webp" alt="review" class="img-fluid"> </a>
					<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".6s"> <img src="images/about/reviews-icon-3.webp" alt="review" class="img-fluid"> </a>
				</div>
			</div>
			<div class="col-lg-7 wow fadeIn">
				<div class="pl50">
					<div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"></div>
					<div class="testimonial-card-a tcd owl-carousel">

						@foreach($testimonials as $item)
						<div class="testimonial-card">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<!-- <div class="user-image bdr-radius"> <img src="images/user-thumb/girl.webp" alt="girl" class="img-fluid rounded-circle" /> </div> -->
									<div class="media-body user-info v-center">
										<h5>{{$item['name']}}</h5>
										<p>{{$item['location']}}</p> <i class="fas fa-quote-right posiqut"></i>
									</div>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Testinomial-->

<!-- Start Hire Developers -->
<section class="hire-developers py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-12">
				<div class="card py-3">
					<div class="card-body">
						<div class="row">
							<div class="col-xl-6">
								<div class="common-heading">
									<h2>Hire Developers For <span>Custom IT Projects</span></h2>
									<!--<p class="pt-2">Appsnation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
									<p class="pt-2">Our team of skilled and experienced developers specializes in creating tailored IT solutions that perfectly align with your business requirements. From software development to web applications, mobile apps, database management, and more, we have the expertise to deliver innovative solutions that meet your unique needs.</p>
									<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
								</div>
							</div>
							<div class="col-xl-6 mt-3">
								<div class="row scroller">
									<div class="col-sm-6 col-md-6 col-lg-4">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/unity-logo.webp" class="img-fluid d-block mx-auto" alt="Unity" width="auto" height="auto">
												<p class="text-center pt-2">Unity</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-sm-0">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/unreal-engine-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine" width="auto" height="auto">
												<p class="text-center pt-2">Unreal Engine</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/wordpress-logo.webp" class="img-fluid d-block mx-auto" alt="WordPress" width="auto" height="auto">
												<p class="text-center pt-2">WordPress</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/php-logo.webp" class="img-fluid d-block mx-auto" alt="PHP" width="auto" height="auto">
												<p class="text-center pt-2">PHP</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/angular-logo.webp" class="img-fluid d-block mx-auto" alt="Angular" width="auto" height="auto">
												<p class="text-center pt-2">Angular JS</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/c++-logo.webp" class="img-fluid d-block mx-auto" alt="C++" width="auto" height="auto">
												<p class="text-center pt-2">C++</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/blender-logo.webp" class="img-fluid d-block mx-auto" alt="Blender" width="auto" height="auto">
												<p class="text-center pt-2">Blender</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/python-logo.webp" class="img-fluid d-block mx-auto" alt="Python" width="auto" height="auto">
												<p class="text-center pt-2">Python</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/node-js-logo.webp" class="img-fluid d-block mx-auto" alt="Node Js" width="auto" height="auto">
												<p class="text-center pt-2">Node JS</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/photon-logo.webp" class="img-fluid d-block mx-auto" alt="Photon" width="auto" height="auto">
												<p class="text-center pt-2">Photon</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/react-native-logo.webp" class="img-fluid d-block mx-auto" alt="React Native" width="auto" height="auto">
												<p class="text-center pt-2">React Native</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/js-logo.webp" class="img-fluid d-block mx-auto" alt="JS" width="auto" height="auto">
												<p class="text-center pt-2">JavaScript</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/html-logo.webp" class="img-fluid d-block mx-auto" alt="HTML" width="auto" height="auto">
												<p class="text-center pt-2">HTML</p>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-4 mt-3">
										<div class="card stack-hov">
											<div class="card-body">
												<img src="images/tech/laravel-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
												<p class="text-center pt-2">Laravel</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Hire Us -->

<!--Start Blogs-->
<section class="blogs-section py-5">
@if($data['status'] && count($data['data']) > 0)
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading wow fadeIn">
					<h2 class="mb30">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-12 col-md-6 col-lg-4 mt30 wow fadeIn">
				<div class="card h-100">
					<a href="{{ $post['guid'] }}">
						<img src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
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

<!-- Google Tag Manager -->
<script>
	(function(w, d, s, l, i) {
		w[l] = w[l] || [];
		w[l].push({
			'gtm.start': new Date().getTime(),
			event: 'gtm.js'
		});
		var f = d.getElementsByTagName(s)[0],
			j = d.createElement(s),
			dl = l != 'dataLayer' ? '&l=' + l : '';
		j.async = true;
		j.src =
			'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
		f.parentNode.insertBefore(j, f);
	})(window, document, 'script', 'dataLayer', 'GTM-5ZVNH97');
</script>
<!-- End Google Tag Manager -->
@endsection