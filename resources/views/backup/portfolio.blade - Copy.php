@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 portfolio">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row">
			<div class="col-lg-6 wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="text-white">Portfolio</h1>
					<p class="banner-para mt20 w-100 pt-3">We create IoT Apps and help you connect with people, systems, and other applications to collect or share data.</p>
					<a href="{{url('/contact-us')}}" class="btn-main button-arounder lnk mt20">Discuss Your Project With Us
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start Portoflio -->
<section class="portfolio-page pad-tb">
	<div class="container">
		<div class="row justify-content-left">
			<div class="col-lg-5 my-auto">
				<div class="common-heading pp">
					<!-- <span>Our Work</span> -->
					<h2>Portfolio</h2>
				</div>
			</div>
			<div class="col-lg-7 v-center text-end">
				<div class="filters">
					<ul class="filter-menu1 mt-3">
						<a href="?a=Mobile">
							<li data-filter=".Mobile" class="is-checked">Mobile Apps</li>
						</a>
						<!-- <a href="?a=AR/VR">
							<li data-filter=".AR/VR" class="mt-2 mt-md-0">AR/VR Apps</li>
						</a>
						<a href="?a=Game">
							<li data-filter=".Game" class="mt-2 mt-md-0">Game Apps</li>
						</a> -->
						<a href="?a=Web">
							<li data-filter=".Web" class="mt-2 mt-md-0">Web Apps</li>
						</a>
						<!-- <a href="?a=Portfolio">
							<li data-filter=".Portfolio" class="mt-2 mt-md-0">Portfolio</li>
						</a> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="row card-list">
			<div class="col-lg-12 col-md-12 grid-sizer"></div>
			@foreach($portfolio as $items)
			<div class="col-lg-12 col-sm-12 single-card-item {!!$items['type']!!}">
				<div class="portfolio-block bg-gradient6">
					<div class="portfolio-item-info">

						<div class="mb20">
							<img src="uploads/{!!$items['icon']!!}" alt="logo" class="img-fluid">
							<!-- <h3 class="logowide mb30">
								AppsNation
							</h3> -->

						</div>

						<!-- <center> -->
						<h3 class="mt30 mb30">
							{{$items['title']}}
							<!-- AppsNation -->
						</h3>
						<!-- </center> -->
						<h4><b>Project Description</b></h4>

						<br>
						<p>
							{{$items['content']}}
						</p>
						<br>
						<h5><b>Key Features</b></h5>

						<br>
						<ul class="info-list-ul">
							<li>{{$items['bullet_1']}}</li>
							<li>{{$items['bullet_2']}}</li>
							<li>{{$items['bullet_3']}}</li>
							<li>{{$items['bullet_4']}}</li>
						</ul>
						@if(isset($items['comments']))
						<div class="row">
							<div class="col-12 pt-4">
								<a href="{{url('/').'/'.$items['comments']}}" class="btn-main button-arounder lnk ">View Casestudy
									<i class="fas fa-chevron-right fa-icon"></i>
									<span class="circle"></span>
								</a>
							</div>
						</div>
						@endif
					</div>
					<div class="portfolio-item-image">
						<img src="uploads/{!!$items['image']!!}" alt="portfolio" class="img-fluid">
					</div>
				</div>
			</div>
			@endforeach
		</div>
		{!! $portfolio->links() !!}

		<div class="isotope-pager" style="padding-top: 15px; text-align:center;">

		</div>
	</div>

</section>
<!-- End Portfolio -->

@endsection