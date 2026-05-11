@extends('app.main')
@section('content')
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div class="bread-titlev2 solutions-title">
					<h1 class="banner-heading wow fadeIn" data-wow-delay=".2s">Terms and Conditions</h1>
					<p class="mt20 wow fadeIn solution-desc" data-wow-delay=".4s">terms and condition content</p>
					<a href="{{url('/contact-us')}}" class="btn-main bg-btn3 lnk mt20 wow zoomInDown" data-wow-delay=".6s">Get Quote
						<i class="fas fa-chevron-right fa-icon"></i>
						<span class="circle"></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why-->
<center>
	<h1>Content goes here</h1>
	<h3>Page is under construct</h3>
</center>
@endsection