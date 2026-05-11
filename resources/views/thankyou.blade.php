@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 thank-you">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	
    <div class="container">
        <div class="row">
            <div class="col-lg-6 v-center wow fadeIn">
                <div class="bread-inner">
                    <div class="bread-title">
                        <h1 class="text-white">Thank You</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!--Start Blog Details-->
<section class="blog-page py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- <div class="blog-header"> -->
                <!-- <h1 class="text-center mb-5">Thank You</h1> -->
                <p class="text-center">AppsNation have successfully received your request and will contact you shortly to discuss your requirements. Meanwhile, if you have any questions or concerns, please feel free to give us a call.</p>
                <div class="-cta-btn mt70">
                    <a href="{{url('/')}}" class="btn-main button-arounder lnk">Back to Site
                        <i class="fas fa-chevron-right fa-icon"></i>
                        <span class="circle"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection