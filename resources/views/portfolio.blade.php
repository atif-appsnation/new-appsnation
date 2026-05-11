@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 portfolio-new-section">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8 order-2 order-lg-1 my-auto">
				<div class="bread-titlev2">
					<h1 class="text-white">Portfolio</h1>
					<p class="banner-para mt20 w-100 pt-3">Discover a collection of high-performance applications and digital solutions built using modern technologies to solve real-world business challenges.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20">Discuss Your Project With
						Us
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
			<div class="col-md-12 col-lg-4 order-1 order-lg-2 wow fadeIn">

				<div class="niwax23form shadow">
					<div class="common-heading text-l">
						{!! NoCaptcha::renderJs() !!}
						<h2 class="mt0 mb0">Book a Free <span>Consultation</span></h2>
					</div>
					<div class="form-block contact-us-form">
						<form id="contactForm33" method="post" data-toggle="validator" class="shake" action="{{route('leads')}}">
							@csrf
							<div class="row">
								<div class="form-group col-sm-6">
									<input type="text" name="first_name" id="first_name" placeholder="Enter First Name" required="" data-error="Please fill Out" maxlength="50">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group col-sm-6">
									<input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" required="" data-error="Please fill Out" maxlength="50">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-12">
									<input type="email" name="email" id="email" placeholder="Enter email" required="" maxlength="50">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-sm-12">
									<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required="" data-error="Please fill Out" maxlength="20">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="form-group">
								<textarea id="message" name="message" rows="5" placeholder="Enter your message" required="" maxlength="500"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group mb-2 captchaContainer3" id="captchaContainer">
								{!! NoCaptcha::display() !!}
							</div>
							<button type="submit" name="submit" id="form-submit" class="btn button-arounder lnk">Submit
								<i class="fas fa-chevron-right fa-icon"></i>
							</button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->
 
<!--Start Portfolio-->
<section class="portfolio-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-12 fadeIn">
				<div class="common-heading">
					<div data-text="Our Portfolio" class="light-bg-text bg-text text-center">
						<h2 class="mb20 text-center">Our Latest Creative Work</h2>
					</div>
				</div>
			</div>

		</div>
	</div>

	<section class="container py-lg-5 mt-5">
		<ul class="nav nav-pills justify-content-center fadeIn" role="tablist">
			<li class="nav-item ms-2">
				<a class="nav-link active" data-bs-toggle="-" href="?a=Mobile">App</a>
			</li>
			<li class="nav-item ms-2">
				<a class="nav-link active" data-bs-toggle="-" href="?a=Web">Web</a>
			</li>
		</ul>
		<div class="tab-content mt-5 wow fadeIn">
			<div class="tab-pane active">
				<div class="row mt60">
					@foreach($portfolio as $items)
					<div class="col-sm-12 col-md-6 wptbb">
						<div id="{!!$items['type']!!}">
							<div class="isotope_item up-hor">
								<div class="card-inner">
									<div class="item-image-front">
										<a href="{{url('/').'/'.$items['comments']}}">
											<img loading="lazy" src="uploads/{!!$items['image']!!}" alt="{{$items['title']}}" alt="Neuro Knights App Front"
												class="img-fluid">
										</a>
									</div>
									<div class="item-image-back">
										<a href="{{url('/').'/'.$items['comments']}}">
											<img loading="lazy" src="uploads/{!!$items['back_image']!!}" alt="{{$items['title']}}"
												class="img-fluid">
										</a>
									</div>
								</div>
								<div class="item-info-div  ">
									<div class="left">
										<h3>
											<a href="{{url('/').'/'.$items['comments']}}">{{$items['title']}}</a>
										</h3>
										<h5 class="mt10">{!!$items['type']!!}</h5>
										<p class="mt10">{{$items['content']}}</p>
										<div class="casestudyButton">
											<a href="{{url('/').'/'.$items['comments']}}">View case Study</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- <div class="col-sm-12 col-md-6 wptbb">
							<div id="{!!$items['type']!!}">
								<div class="isotope_item up-hor">
									<div class="item-image">
										<a href="{{url('/').'/'.$items['comments']}}">
											<img loading="lazy" src="uploads/{!!$items['image']!!}" alt="{{$items['title']}}"
												class="img-fluid">
											</a>
										</div>
										<div class="item-info-div shdo">
											<h4><a href="{{url('/').'/'.$items['comments']}}">{{$items['title']}}</a></h4>
											<h5 class="mt10">{!!$items['type']!!}</h5>
											<p class="mt10">{{$items['content']}}</p>
										</div>
									</div>
								</div>
							</div> --}}
							@endforeach
						</div>
					</div>

		<!-- <div id="web" class="tab-pane fade">
					<div class="row mt60">
						<div class="col-lg-12 col-sm-12 wptbb">
							<div class="pbwide shadow bg-gradient1">
								<div class="portfolio-item-info-tt">
									<div class="logowide mb20">
										<img loading="lazy" src="images/case-studies/gym-logo.webp" alt="Gym App" class="img-fluid" width="100%" height="100%">
									</div>
									<div class="widebloktag">
										<span class="text-white">UI/UX Design</span>
									</div>
									<div class="widebloktag mt-4">
										<span class="text-white">Website Development</span>
									</div>
									<h3 class="mt30 mb30">Gym Web</h3>
									<p class="mb30">More than just a fitness app, Gymnasium acts as your personal trainer, nutritionist, and motivational coach—all conveniently housed within a user-friendly interface.</p>
									<ul class="info-list-ul">
										<li>Content Management</li>
										<li>User Management</li>
										<li>Bookings Management</li>
										<li>Promotions</li>
									</ul>
									<a href="{{url('/').'/'.$items['comments']}}" class="btn-outline lnk mt30">View Case Study
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
								<div class="portfolio-wide-image">
									<div class="img-wide-blocktt tilt-outer">
										<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
											<div>
												<img loading="lazy" src="images/home/gym-web.webp" alt="Gym Web" class="img-fluid" width="100%" height="100%">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-sm-12 wptbb">
							<div class="pbwide shadow bg-gradient1">
								<div class="portfolio-item-info-tt">
									<div class="logowide mb20">
										<img loading="lazy" src="images/case-studies/real-estate-logo.webp" alt="Real Estate Web" class="img-fluid" width="100%" height="100%">
									</div>
									<div class="widebloktag">
										<span class="text-white">UI/UX Design</span>
									</div>
									<div class="widebloktag mt-4">
										<span class="text-white">Website Development</span>
									</div>
									<h3 class="mt30 mb30">Real Estate Web</h3>
									<p class="mb30">Discover Avenue, the ultimate app for all your property buying and selling needs.</p>
									<ul class="info-list-ul">
										<li>Dashboard</li>
										<li>Properties Management</li>
										<li>Mortgage</li>
										<li>User Management</li>
									</ul>
									<a href="{{url('/case-studies/real-estate-web')}}" class="btn-outline lnk mt30">View Case Study
										<i class="fas fa-chevron-right fa-icon"></i>
										<span class="circle"></span>
									</a>
								</div>
								<div class="portfolio-wide-image">
									<div class="img-wide-blocktt tilt-outer">
										<div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
											<div>
												<img loading="lazy" src="images/home/real-estate-web.webp" alt="Real Estate Web" class="img-fluid" width="100%" height="100%">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
		</div>
		<div class="mt-5">
			<center>
				{!! $portfolio->links() !!}
			</center>
		</div>
	</section>
</section>
<!--End Portfolio-->
@endsection