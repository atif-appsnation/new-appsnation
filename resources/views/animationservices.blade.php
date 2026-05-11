@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 animation-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Best Video Animation Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">With years of expertise in the enormous digital
						world, we have specialized in sophisticated video animations intending to increase your sales by
						enhancing user experience. So allow us to design your company's future lifeblood.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section id="mycounterSection" class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="image-block wow fadeIn">
					<img loading="lazy" src="images/banner/animation-banner-img.png" alt="Animation Development"
						class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="Android" class="light-bg-text bg-text">
						<h2>Top-Rated Video<br> <span class="flup-theme"> Animation </span>Company</h2>
					</div>
					<p>AppsNation is an expert in 3D animation and a wide variety of other animation services that may
						help your company get more attention and engage more users online. We use our years of expertise
						in the business to combine cutting-edge methods with creativity to make animations that look
						great and get results. We can create precisely what you need, whether it's animated movie
						creation, motion graphics animation services, or corporate animation services.
					</p>
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

<!-- Start Service -->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">

		<!-- Heading -->
		<div class="row">
			<div class="col-12 text-center">
				<div class="common-heading">
					<h2>Our Full Range of <span class="flup-theme">Animation</span> Services</h2>
					<p>
						We have a lot of different animation services that are made to fit your business's demands and get the most people involved:

					</p>
				</div>
			</div>
		</div>

		<!-- Services -->
		<div class="row d-flex justify-content-center mt-5">

			<!-- Service Card -->

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>3D Animation</h3>
					<p>Our 3D animation services will help your brand grow. Our talented team makes high-quality 3D animations that help people understand complicated ideas, bring products to life, and keep your audience's attention. We make 3D graphics that stand out, from commercial animation videos to immersive experiences.
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>2D Animation</h3>
					<p>Our 2D animation services are great for organizations who want a more conventional but yet interesting form of animation. Our team makes high-quality 2D animations that effectively get your point across, whether you require simple character animations, explainer movies, or instructional material.
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>Explainer Videos</h3>
					<p>Our explainer video services may help you make your complicated concepts easier to understand. We make animated explainer movies that are fun to watch and simple to share. They teach complicated concepts in a manner that is easy to grasp. Our explainer films help you connect with your audience, whether you're a new company or an old one.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>Motion Graphics</h3>
					<p>With dynamic motion graphics animation services, you can make your brand's message stronger. Our motion graphics make your material come to life by adding moving parts that make it more interesting and encourage people to act. Motion graphics are great for product demonstrations, promotional films, and digital marketing campaigns because they grab people's attention and keep them interested.
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>Whiteboard Animation</h3>
					<p>We turn your thoughts into unique, hand-drawn pictures with our whiteboard animation services. These movies are great for breaking down hard ideas into simple terms. Our whiteboard animations make communication easier and add an interesting touch to your material with clear drawings and professional voiceovers.
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>Corporate Animation</h3>
					<p>Corporate animation services may help your business stand out. We make professional, high-quality animations for businesses that show off your brand's strengths and services. We make sure that your animated corporate movie or business entrance video fits with your firm's vision and aims, whether you need it for marketing or anything else.
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>Animated Logo</h3>
					<p>Our unique 3D animated logo design services can help you make your brand stand out. A logo that moves and changes may make your firm stand out and create a memorable impression. We'll help you create a one-of-a-kind, creative animated logo that precisely reflects your brand's values and grabs the attention of your target audience.
					</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 mb-4">
				<div class="service-card-app h-100">
					<h3>Flat Design Animation</h3>
					<p>Our bespoke flat design video animation services are a great choice if you want a clean, simple look. Our flat design animations get your point over in a visually interesting manner while maintaining loyal to your brand's style. They are both simple and sophisticated.
					</p>
				</div>
			</div>


		</div>
	</div>
</section>
<!-- End Service -->
<!--Start Features-->
<section class="motion-animation py-5" id="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 block-1 wow fadeIn pt-3 pt-sm-3 pt-md-3 pt-lg-0">
				<img loading="lazy" src="images/banner/animation-graphic.png" alt="AR Game Changer" class="img-fluid" width="100%"
					height="100%">
			</div>
			<div class="col-lg-6 wow fadeIn my-auto">
				<h2><span>Motion Graphic</span> Services</h2>
				<p class="pt-2">Our motion graphic services enable you to add an appealing graphical element to your
					product pages to pique your customers' interest and send that all-important purchase decision their
					way. We offer a variety of motion graphics, visual effects, and design services to assist you in
					developing dynamic brand events or productions.</p>
				<a data-bs-toggle="modal" data-bs-target="#leadModal"
					class="btn-main button-arounder lnk wow fadeIn mt-3" data-wow-delay="0.8s">Let's Start Your
					Project</a>
			</div>
		</div>
	</div>
</section>

<!--Start Let's Work Together-->
<section class="y-1">
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
					<p class="text-white">We assist you in using Android's distinct set of characteristics by merging it
						with cutting-edge technologies such as Augmented Reality, Virtual Reality, Mixed Reality, and
						Blockchain.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<h3 class="title">Free Animation Consultation</h3>
					<p class="description">Get expert advice on your animation project with our free consultation
						service. We'll help you refine your ideas and plan your project for success.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<h3 class="title">Expert Animators</h3>
					<p class="description">Work with our team of skilled animators, experienced in various styles and
						techniques. We bring creativity and precision to every project, ensuring high-quality results.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<h3 class="title">Flexible Engagement Models</h3>
					<p class="description">We offer flexible engagement options tailored to your project's needs and
						budget. Whether you're a small startup or a large corporation, we provide customized solutions.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Our dedicated support team is available around the clock to assist you with
						any technical issues, ensuring your animation project runs smoothly from start to finish.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<h3 class="title">100% Transparency</h3>
					<p class="description">We believe in clear and open communication. Our clients are kept informed at
						every stage of the animation process, ensuring trust and satisfaction.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<h3 class="title">Post-Delivery Support</h3>
					<p class="description">Enjoy 3 months of free support after the project's completion. We ensure that
						your animation remains flawless and fully functional, providing peace of mind.</p>
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
						<h2>Our <span>Animation Service</span> Development Process</h2>
					</div>
					<p>We provide a streamlined and agile animation development process focused on achieving exceptional
						results. Our team is committed to delivering high-quality animations tailored to your needs,
						ensuring a seamless and efficient experience from start to finish.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">The first step is to know your objectives and who you want to reach. We look
						at what you need for your project to find the best animation style and method.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">Making a plan
					</h3>
					<p class="description">We make a custom plan that fits with your company objectives based on what
						you tell us. We make sure that everything, from stylistic decisions to technical execution, is
						in accordance with your vision.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Design and Storyboarding
					</h3>
					<p class="description">We make thorough storyboards to plan out every part of the animation. This
						helps us picture the finished result and makes sure you agree with the design before we go on.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Making Animations
					</h3>
					<p class="description">We bring the storyboard to life using innovative animation methods, giving
						people, objects, and backdrops life with style and accuracy.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">Quality Control
					</h3>
					<p class="description">We do a lot of testing and make changes to make sure everything works
						flawlessly. This involves checking the visuals, making sure the sound is in sync, and making
						sure it works on multiple platforms.
					</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">Last Delivery
					</h3>
					<p class="description">After we have your approval, we make the animation work better for different
						formats and send it to all the platforms you need, making sure it's ready to be shared.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

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
						<h2 class="text-white">Ranked as #1 <span>Animation Services</span> Company</h2>
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
									<img loading="lazy" src="uploads/{{$item['image']}}" class="award-img" width="auto" height="auto">
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
		<div class="row">
			<div class="col-sm-12 mt20 wow fadeIn">
				<div class="accordion" id="accordionExample-a">
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-b">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
								How long does an animated video take to produce?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>It is not easy to estimate how long it takes to create an animated video without
										knowing the project's size and scope. For example, a simple explainer video with
										a narrator, music, and moving graphics is created in a week. Still, an entirely
										written animated short film or video ad campaign might take months (or more) to
										complete.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How many revisions do we get?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>We ensure that you receive everything from your project by using our most
										comprehensive video animation services in the market. Therefore, we offer
										unlimited revisions to ensure the client is satisfied with us while maintaining
										our outstanding customer satisfaction bar.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How long will I be waiting throughout the different stages?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>The different stages should take a variable amount of time based on the length,
										scope, and complexity of the video animation project. Consider the script and
										storyboard stage for a rough estimate; it may take up to a week, while the
										production stage can take 1-2 weeks.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Do you write scripts, or do they need to be provided?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Our video animation services are reciprocal. We write scripts and respect the
										ones you have already written. Besides, we produce scripts that emphasize the
										benefits of your company. The script is used to describe product features and
										benefits in a tone consistent with the company's voice.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Do you work with the white-label?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>YES! We work on white-label projects and have access to the most incredible
										resources. In addition, our specialist designers have extensive expertise
										working with leading businesses to create a result-driven solution.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to make an animated video?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Depending on the style of video you want, the cost of an animated video can range
										from hundreds to tens of thousands of dollars. Furthermore, the length and
										intricacy of a video are the primary elements that influence its pricing.
										Scripting, storyboarding, voice-overs, and animation all cost more the longer or
										more complicated they are.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Can you make an explainer animation in any style I like?
							</button>
						</h2>
						<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes, we can create animated videos in any style. You want to make a video
										explainer animation that suits your brand, goals, and target audience; we
										provide our clients with high-quality services at a reasonable price,
										guaranteeing that they get the desired outcomes.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse"
								data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								Can you do a voice-over in any accent or language?
							</button>
						</h2>
						<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c"
							data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Our voice artists can do any accent or language to meet your animation and video
										demands, and they are available in over 35 languages from around the world.
										Contact us whenever you want a professional voice-over for your website, app, or
										music to learn more about our reasonable pricing and quick turnaround.</p>
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

@endsection