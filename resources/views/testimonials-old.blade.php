@extends('app.main')
@section('content')
<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 testimonials-banner">
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
						<h1 class="text-white">Testimonials</h1>
						<p class="text-white pt-3">We settle for a 100% client satisfaction only! Our clients love working with us because we treat their projects like our own</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start Testimonials -->
<section class="reviews-block py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="common-heading ptag">
					<!-- <span>Reviews</span> -->
					<!-- <h2>Client Testimonials</h2>
					<p class="mb30">Check our customers success stories.</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($testimonials as $item)

			<div class="col-md-6 col-lg-4 mt30">
				<div class="reviews-card card h-100 pr-shadow">
					<div class="card-body">
						<div class="row v-center">
							<div class="col"><span class="revbx-lr"><i class="fas fa-quote-left"></i></span></div>
							<!-- <div class="col"><span class="revbx-rl"><img loading="lazy" src="images/client/freelancer-logo.webp" alt="review service logo"></span></div> -->
						</div>
						<div class="review-text">
							<p>{{$item['title']}}</p>
							<!--<div class="scrollbar">-->
							<!--	<p>{{$item['title']}}</p>-->
							<!--</div>-->
						</div>
						<div class="-client-details-">
							<div class="reviewer-text">
								<h4>{{$item['name']}}</h4>
								<p>{{$item['location']}}
									<!-- <small>Jaipur</small> -->
								</p>
								<div class="star-rate">
									<ul>
										<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>
										<li><a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a></li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>

		<div class="row mt-4">
			<h3>Clutch Reviews</h3>
			<div class="clutch-widget mt-3" data-url="https://widget.clutch.co" data-widget-type="8" data-height="300" data-nofollow="true" data-expandifr="true" data-scale="100" data-scale="100" data-reviews="326969" data-clutchcompany-id="1991663"></div>
		</div>

		<div class="row mt-4">
			<h3>GoodFirms Reviews</h3>
			<div class="goodfirm-widget mt-3" data-widget-type="goodfirms-widget-t7" data-widget-pattern="carousel-basic" data-height="380" data-company-id="103093"></div>
		</div>

	</div>
</section>
<!-- End Testimonials -->

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
	<div class="col-lg-7">
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



@endsection