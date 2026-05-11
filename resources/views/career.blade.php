@extends('app.main')
@section('content')
<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 career-banner">
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
						<h1 class="text-white">Career</h1>
						<p class="text-white pt-3">Let's join the great team of 100+ experts.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start Recruitment -->
<section class="recruitment-process py-5 wow fadeIn">
	<div class="container">
		<div class="row pt-3">
			<div class="col-12">
				<div data-text="Recruitment" class="light-bg-text bg-text">
					<h2>Our Recruitment Process</h2>
				</div>
				<p>AppsNation aims to build high-quality software while also fostering an enjoyable work environment that allows everyone the opportunity to reach their highest potential.</p>
			</div>
		</div>
		<div class="row mt70">
			<div class="col-sm-12 col-md-4">
				<div class="card">
					<div class="card-body">
						 <img loading="lazy" src="images/career/application.svg" class="career-icons" alt="Application" width="100%" height="100%">
						<h3 class="py-3">Application</h3>
						<p>Submit your application through our website. Your application is being read by real humans.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 mt-3 mt-md-0">
				<div class="card">
					<div class="card-body">
						 <img loading="lazy" src="images/career/interview.svg" class="career-icons" alt="Interview" width="100%" height="100%">
						<h3 class="py-3">Interview</h3>
						<p>Let us get familiar with your competencies and experience in the field.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 mt-3 mt-md-0">
				<div class="card">
					<div class="card-body">
						 <img loading="lazy" src="images/career/offer.svg" class="career-icons" alt="Offer" width="100%" height="100%">
						<h3 class="py-3">Offer</h3>
						<p>Congratulations! You have made it. Sign the agreement and you are on-board with us.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Recruitment -->

<!-- Start Career Form -->
<section class="career-form block-1 dark-bg3 py-5">
	<div class="container-fluid py-5">
		<div class="row justify-content-center">
			<div class="col-lg-6">
			    <div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Apply Here</h5>
					</div>
			        <div class="card-body">
        				<form action="{{route('applicant')}}" class="mt-3" method="post" enctype="multipart/form-data">
						@csrf
							<div class="row my-3">
        						<div class="col-sm-12 col-md-6">
        							<label for="name" class="">Your Full Name: <span class="asterick">*</span></label>
        							<input type="text" name="name" class="form-control mt-2" placeholder="" id="name" required="">
        						</div>
        						<div class="col-sm-12 col-md-6 mt-3 mt-md-0">
        							<label for="email" class="">Your Email: <span class="asterick">*</span></label>
        							<input type="email" name="email" class="form-control mt-2" placeholder="" id="email" required="">
        						</div>
        
								<div class="col-sm-12 col-md-6 mt-3">
									<label for="phone" class="">Phone Number: <span class="asterick">*</span></label>
									<input type="tel" name="phone" class="form-control mt-2" placeholder="" id="phone" required="">
								</div>
								<div class="col-sm-12 col-md-6 mt-3">
									<label for="job" class="form-label" >Job Role Applying for:</label>
									<select class="form-select" id="job" name="job">
									<option selected>Select</option>
										<option value="Graphic Designer">Graphic Designer</option>
										<option value="Content Writer">Content Writer</option>
										<option value="Website Developer">Website Developer</option>
										<option value="SEO Specialist">SEO Specialist</option>
										<option value="Social Media Manager">Social Media Manager</option>
										<option value="Ads Specialized">Ads Specialized</option>
										<option value="Email Marketer">Email Marketer</option>
										<option value="Project Manager">Project Manager</option>
										<option value="QA">QA</option>
										<option value="Accountant">Accountant</option>
										<option value="Business Development">Business Development</option>
									</select>
								</div>
        
        						<div class="col-sm-12 mt-3">
        							<label for="position" class="pb-2" >Position:</label>
        							<br>
        							<div class="form-check form-check-inline">
        								<input class="form-check-input" type="radio" name="position" id="inlineRadio1" value="Full Time">
        								<label class="form-check-label pt-1" for="inlineRadio1" >Full Time</label>
        							</div>
        							<div class="form-check form-check-inline">
        								<input class="form-check-input" type="radio" name="position" id="inlineRadio2" value="Part Time">
        								<label class="form-check-label pt-1" for="inlineRadio2" >Part Time</label>
        							</div>
        							<div class="form-check form-check-inline">
        								<input class="form-check-input" type="radio" name="position" id="inlineRadio3" value="Internship">
        								<label class="form-check-label pt-1" for="inlineRadio3" >Internship</label>
        							</div>
        							<div class="form-check form-check-inline">
        								<input class="form-check-input" type="radio" name="position" id="inlineRadio3" value="Remote">
        								<label class="form-check-label pt-1" for="inlineRadio3" >Remote</label>
        							</div>
        						</div>

        						<div class="col-sm-12 mt-3">
        							<div class="custom-file">
        								<p>Attach your CV (Max 1.5MB)</p>
        								<!--<input type="file" class="custom-file-input" id="customFile" name="filename">-->
        								<!--<label class="custom-file-label" for="customFile">Choose file</label>-->
        								<input class="form-control" type="file" id="customFile" name="filename">
        							</div>
        						</div>

        						<div class="col-sm-12 mt-3">
        							<button type="submit" name="submit" class="btn btn-primary btn-main bg-btn2 niwax-btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
        						</div>
        					</div>
        				</form>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</section>
<!-- End Career Form -->

<!-- Start Hire Developers -->
<section class="hire-developers py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-xl-6 my-auto">
				<div class="common-heading">
					<div data-text="Developers" class="dark-bg-text bg-text">
						<h2 class="text-white">Hire Developers For <span>Custom IT Projects</span></h2>
					</div>
					<!--<p class="pt-2">AppsNation offers you to hire your dedicated development team. Which would connect with you 24 hours to ensure your development solution quality up to the mark. The benefit of hiring a dedicated team is you can contact them you will get a dedicated project manager for your project that makes sure your project satisfaction.</p>-->
					<p class="pt-2 text-white">Our team of skilled and experienced developers specializes in creating tailored IT solutions that perfectly align with your business requirements. From software development to web applications, mobile apps, database management, and more, we have the expertise to deliver innovative solutions that meet your unique needs.</p>
					<a href="{{url('/contact-us')}}" class="niwax-btn button-arounder btn wow fadeIn mt-3 py-2 px-3" data-wow-delay="0.8s">Get Consultation <i class="fas fa-chevron-right fa-ani"></i></a>
				</div>
			</div>
			<div class="col-xl-6 mt-3">
				<div class="row scroller">
					<div class="col-6 col-sm-6 col-md-6 col-lg-4">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/unity-logo.webp" class="img-fluid d-block mx-auto" alt="Unity" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Unity</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-sm-0">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/unreal-engine-logo.webp" class="img-fluid d-block mx-auto" alt="Unreal Engine" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Unreal Engine</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3 mt-lg-0">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/wordpress-logo.webp" class="img-fluid d-block mx-auto" alt="WordPress" width="auto" height="auto">
								<!-- <p class="text-center pt-2">WordPress</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/php-logo.webp" class="img-fluid d-block mx-auto" alt="PHP" width="auto" height="auto">
								<!-- <p class="text-center pt-2">PHP</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/angular-logo.webp" class="img-fluid d-block mx-auto" alt="Angular" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Angular JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/c++-logo.webp" class="img-fluid d-block mx-auto" alt="C++" width="auto" height="auto">
								<!-- <p class="text-center pt-2">C++</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/blender-logo.webp" class="img-fluid d-block mx-auto" alt="Blender" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Blender</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/python-logo.webp" class="img-fluid d-block mx-auto" alt="Python" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Python</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/node-js-logo.webp" class="img-fluid d-block mx-auto" alt="Node Js" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Node JS</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/photon-logo.webp" class="img-fluid d-block mx-auto" alt="Photon" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Photon</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/react-native-logo.webp" class="img-fluid d-block mx-auto" alt="React Native" width="auto" height="auto">
								<!-- <p class="text-center pt-2">React Native</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/js-logo.webp" class="img-fluid d-block mx-auto" alt="JS" width="auto" height="auto">
								<!-- <p class="text-center pt-2">JavaScript</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/html-logo.webp" class="img-fluid d-block mx-auto" alt="HTML" width="auto" height="auto">
								<!-- <p class="text-center pt-2">HTML</p> -->
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-6 col-md-6 col-lg-4 mt-3">
						<div class="card stack-hov">
							<div class="card-body">
								 <img loading="lazy" src="images/tech/laravel-logo.webp" class="img-fluid d-block mx-auto" alt="Laravel" width="auto" height="auto">
								<!-- <p class="text-center pt-2">Laravel</p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Hire Us -->

<!-- Start Perk -->
<section class="perk py-3 py-md-4 py-lg-4">
	<div class="container">
		<div class="row pt-3">
			<div class="col-lg-6">
				<div class="common-heading">
					<div data-text="Perks" class="light-bg-text bg-text">
						<h2>Our Perks</h2>
					</div>
					<p>Since loving your job doesn’t pay your expenses, here are some amazing perks offered by AppsNation.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/career/bonus.svg" class="career-icons" width="auto" height="auto">
						<h3 class="py-3">Bonuses</h3>
						<p>Pay rise, promotions, and top opportunities for professional development.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-4 mt-md-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/career/vehicle.svg" class="career-icons" width="auto" height="auto">
						<h3 class="py-3">Vehicle</h3>
						<p>Company maintained car.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/career/medical.svg" class="career-icons" width="auto" height="auto">
						<h3 class="py-3">Health insurance</h3>
						<p>We ensure all your healthcare needs, we believe in human right.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-4">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/career/leaves.svg" class="career-icons" width="auto" height="auto">
						<h3 class="py-3">Parental leaves</h3>
						<p>When it comes to feelings, work isn’t the priority.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-4">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/career/funds.svg" class="career-icons" width="auto" height="auto">
						<h3 class="py-3">Gratuity funds</h3>
						<p>A company sponsored fund that enables you to maximize benefits.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-4">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/career/training.svg" class="career-icons" width="auto" height="auto">
						<h3 class="py-3">Training</h3>
						<p>Mentors to guide and support you. Training programs to polish your skills.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Perk -->

<!-- Start Why Choose -->
<section class="why-choose-section py-5">
	<div class="container">
		<div class="row justify-content-center wow fadeIn">
			<div class="col-lg-6 my-auto">
				<div data-text="Partner" class="light-bg-text bg-text">
					<h2>Why Choose <span>AppsNation</span> As Your <span>Development Partner</span></h2>
				</div>
				<p class="pt-2">Appsnation has been working in the software development field since 2016. We have worked with 300+ businesses. Moreover, AppsNation has its own play store where we have 50+ different apps and software, which most development companies don't have. Appsnation has its own 50+ certified developers and designers team that helps you convert the idea into reality.</p>
				<a href="pdf/company-profile-appsnation.pdf" target="_blank" class="btn-main button-arounder lnk mt-4">Download Company Profile
					<i class="fas fa-chevron-right fa-icon"></i>
					<span class="circle"></span>
				</a>
			</div>
			<div class="col-lg-6">
				 <img loading="lazy" src="images/why-choose/why-choose.webp" class="img-fluid mt-4 d-block mx-auto ms-lg-auto" width="auto" height="auto">
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-md-6 col-lg-3">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/team-scalibility.webp" class="img-fluid my-3" width="100%" height="100%" alt="Team Scalability" width="auto" height="auto">
						<h3>Team Scalability</h3>
						<p class="mb-0">Boost your team with domain specialists whenever required.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-md-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/quick-time-to-market.webp" class="img-fluid my-3" width="100%" height="100%" alt="Quick Time to Market" width="auto" height="auto">
						<h3>Quick Time to Market</h3>
						<p class="mb-0">Streamlined delivery is intended to achieve efficiency on time.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/cost-saving.webp" class="img-fluid my-3" width="100%" height="100%" alt="Cost Saving" width="auto" height="auto">
						<h3>Cost Saving</h3>
						<p class="mb-0">Get experienced and competent developers at a reasonable price.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 mt-3 mt-lg-0">
				<div class="card h-100">
					<div class="card-body">
						 <img loading="lazy" src="images/why-choose/skilled-resources.webp" class="img-fluid my-3" width="auto" height="auto" alt="Skilled Resources">
						<h3>Skilled Resources</h3>
						<p class="mb-0">Get access to skilled mobile gaming experts with domain knowledge.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Why Choose -->

@endsection