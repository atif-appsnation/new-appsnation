@extends('app.main')
@section('content')
<!--Start Breadcrumb Area-->
<section class="breadcrumb-areav2 floor-plan">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Best 2D to 3D Floor Plans Development Services</h1>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				 <img loading="lazy" src="images/services/2d-3d-floor-plan-services/twod-threed-floor-plan-banner-img.webp" class="img-fluid" alt="2D & 3D FLOOR PLAN" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Breadcrumb-->

<!--Start About-->
<section class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5">
				<div class="wow fadeIn">
					 <img loading="lazy" src="images/services/2d-3d-floor-plan-services/twod-threed-floor-plan-banner-img.webp" class="img-fluid" alt="2D & 3D FLOOR PLAN" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="FLOOR PLAN" class="light-bg-text bg-text">
						<h2>Enhance Your Space with Our<br> <span class="flup-theme">Custom 2D & 3D Floor Plan Services</span></h2>
					</div>
					<p><strong>Get the floor plan you deserve—clear, precise, and tailored to your specific needs. Our designs are functional, aesthetically pleasing, and highly detailed.</strong></p>
					<p>Did you know? Accurate floor plans are essential for any successful architectural or interior design project. We leverage cutting-edge technology and top talent to deliver the best in 2D and 3D floor planning. Our team, akin to design wizards, strives to bring your vision to life with innovative and unique layouts.</p>
					<p>We are a data-driven design firm that uses analytics and insights to craft plans that perfectly align with your project goals. Whether for residential or commercial spaces, we help you optimize your environment. Our plans are visually compelling and ensure flawless execution in real life.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About-->

<!--Start Service-->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text text-center">
						<h2 class="text-center mb-5">Showcase <span> 2D & 3D </span> Floor Plan Services</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-text-div">
						<p>3D floor plans, 3D home designs, real estate floor plans, and rendering services go to the heart of architectural layouts. Horizontal and vertical spaces are precisely projected in 3D design for 360-degree development, leaving no crevice uncovered.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-text-div">
						<p>Virtual Building Studio is an AEC outsourcing firm based in India that provides clients with high-quality 3D floor plan services. We have a track record of successfully completing large-scale architectural floor plan projects.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-text-div">
						<p>Each 3D floor plan project benefits from our experienced team's combined skill set of software, creativity, and aesthetics understanding. Our success is based on "attention to detail."</p>
					</div>
				</div>
			</div>
			<div class="row mt-5 justify-content-center">
            <!-- <div class="col-lg-8 text-center">
                <a href="https://futurealiti.com/uploads/pdf/Real-Estate-Profile-Futurealiti.pdf" target="_blank" class="niwax-btn wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">Download Real Estate Profile <i class="fas fa-chevron-right fa-ani" aria-hidden="true"></i></a>
            </div> -->
        </div>
		</div>
	</div>
</section>
<!--End Service-->

<!--Start Features-->
<!-- <section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 wow fadeIn">
				<div class="tab-content" id="imagetab">
					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@else
					<div class="tab-pane fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@endif

					@endforeach

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
				<h2>Expert 2D & 3D Floor Plan Services</h2>
				<p class="py-3">We provide 2D and 3D floor plans to help visualize and optimize your space efficiently.</p>
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
					<div class="tab-pane active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p>{!!$items['content']!!}</p>
					</div>
					@else
					<div class="tab-pane fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p>{!!$items['content']!!}</p>
					</div>
					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section> -->
<!--End Features-->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Benefits" class="dark-bg-text bg-text">
						<h2 class="text-white">Benefits of <span> 2D & 3D Floor Plan </span> Services</span></h2>
					</div>
					<p class="text-white">We offer 2D and 3D floor plans to help visualize and optimize your space, ensuring functionality and aesthetic appeal. Our plans provide clear project representations.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<!-- <div class="timeline-year">
						<div class="free-mobile-app-consultation"></div>
					</div> -->
					<h3 class="title">ACHIEVE PERFECTION</h3>
					<p class="description">2D and 3D floor plan services help in achieving perfection in architectural and interior design projects by providing precise and detailed visual representations. These plans ensure that every aspect of the design is carefully considered and accurately depicted, allowing for precise measurements and clear communication of ideas.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<!-- <div class="timeline-year">
						<div class="expert-android-developers"></div>
					</div> -->
					<h3 class="title">VERSATILITY</h3>
					<p class="description">2D and 3D floor plans offer versatility, allowing designers to experiment with different layouts and styles. This flexibility makes it easy to explore various design options, adapt to client preferences, and make changes without the need for physical alterations. It also helps in visualizing different configurations and optimizing space usage.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<!-- <div class="timeline-year">
						<div class="flexible-hiring-models"></div>
					</div> -->
					<h3 class="title">BENEFICIAL SPACES</h3>
					<p class="description">Utilizing 2D and 3D floor plan services leads to the creation of beneficial spaces that are functional and aesthetically pleasing. These plans enable designers to plan layouts that maximize space efficiency and cater to the specific needs of the users, ultimately enhancing the overall quality and usability of the environment.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why Choose-->

<!--Start Let's Work Together-->
<section class="my-1">
	<div class="container">

		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-9">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-8 my-auto">
							<p class="text-center text-lg-start">Let's Start a <span>New Project</span> Together</span> </p>
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

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text">
						<h2>Our <span> 2D & 3D Floor Plan</span> Development Process</h2>
					</div>
					<p>We offer a streamlined and efficient process for developing 2D and 3D floor plans, ensuring a result-driven approach that meets our clients' specific needs and preferences.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Understanding your space and project goals is crucial. We begin by assessing your needs, including layout preferences, functional requirements, and aesthetic desires. This phase involves gathering detailed information to ensure we capture your vision accurately.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">Design Strategy</h3>
					<p class="description">Based on the analysis, we develop a design strategy tailored to your project. This includes selecting the appropriate tools and techniques for creating 2D and 3D floor plans. Our goal is to provide a comprehensive representation that meets your specifications.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Conceptualization & Drafting</h3>
					<p class="description">Our design team creates initial drafts, showcasing different layout options and design elements. This stage allows for experimentation with space utilization and visual styles, ensuring all aspects align with your expectations.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Review & Feedback</h3>
					<p class="description">We present the draft designs to you for review. This collaborative phase involves discussing the proposed layouts, making adjustments based on your feedback, and refining the plans to better suit your needs.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">Finalization</h3>
					<p class="description">After incorporating your input, we finalize the 2D and 3D floor plans. This includes detailing every aspect of the design, from room dimensions to interior elements, ensuring accuracy and completeness.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">Delivery & Support</h3>
					<p class="description">The completed floor plans are delivered to you in your preferred format. We also provide ongoing support to address any questions or adjustments needed, ensuring the plans are ready for implementation.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Floor Plan-->
<section class="floor-plan py-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeIn my-auto"fadeIn>
				<p class="text-white">One of the first tasks in the construction, remodeling, and interior design of a home is to create a rendered floor plan. A 3D graphic of the property layout gives a good idea of the area, convenience, and functionality. Another method of visualizing rooms and furniture, as well as the decor of any house, is to use 3D floor plan drawings.</p>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeIn v-center pt-3 pt-sm-3 pt-md-3 pt-lg-0"fadeIn>
				 <img loading="lazy" src="images/services/2d-3d-floor-plan-services/threed-floor-plan-drawing.webp" alt="3D Floor Plan" height="100%" width="100%">
			</div>
		</div>

		<div class="row pt-5">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeIn v-center"fadeIn>
				 <img loading="lazy" src="images/services/2d-3d-floor-plan-services/threed-floor-plan-layout.webp" alt="3D Floor Plan" height="100%" width="100%">
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-12 wow fadeIn my-auto pt-3 pt-sm-3 pt-md-3 pt-lg-0"fadeIn>
				<p class="text-white">Our business floor designs service covers 3D floor plans for restaurants, offices, mansions, cafes, and hospitals. Doors, stairwells, windows, walls, elevators, columns, and fittings are common features. By including furniture, you can demonstrate the magnitude of a room and how to correctly design it. While looking at the 3D floor plan layout, you or your customers can have a sense of being in that same room.</p>
			</div>
		</div>
	</div>
</section>
<!--End Floor Plan-->

<!--Start Floor Plan Services-->
<section class="floor-plan-service service-section-app py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 wow fadeIn"fadeIn>
				<div class="common-heading">
					<div data-text="Services" class="light-bg-text bg-text text-center">
						<h2 class="text-center"> Our <span>3D House Plans</span> Services</h2>
					</div>
					<p class="mt10 py-5 text-center">People find it difficult to comprehend and imagine a location from sketches, thus floor plans with 3D effects are a solution to this problem, displaying the whole property layout in a simple and visually appealing manner. Applet 3D gives you a stunning overview of your requirements and a greater knowledge of the scale, texture, and color of a space, as well as its possibilities. It's a fantastic opportunity to get a true sense of the entire home or just the ground level 3D design.</p>
				</div>
			</div>

			<!-- <div class="col-lg-12 wow fadeIn"fadeIn>
				<iframe width="100%" height="515" src="https://www.youtube.com/embed/_RSCkfc4g7E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
			</div> -->

			<div class="col-12 wow fadeIn">
				<p class="text-center">Before making large project investments, 3D floor plan design services can detect any design faults. Without an interactive 3D floor plan, clients and buyers will have a tough time determining the property's size and exact furniture and décor arrangement. Bring your client's vision to life with realistic and detailed 3D house plans that are tailored to their specific requirements and lifestyles. Use our 3D rendering services to create a floor plan. Get a quote for your project by filling out the form.</p>
			</div>
		</div>
	</div>
</section>
<!--End Floor Plan Services-->

<!--Start Floor Plan Configuration-->
<section class="floor-plan-configuration py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="common-heading ptag wow fadeIn">
                    <h2 class="text-center">Furniture Configuration</h2>
                </div>
                <div class="image-spliter wow fadeIn">
                    <div class="mover"></div>
                     <img loading="lazy" class="img-left" src="images/services/2d-3d-floor-plan-services/3d-floor-plan-color-2.webp" alt="3d Floor Plan Color">
                     <img loading="lazy" class="img-right img-fluid" src="images/services/2d-3d-floor-plan-services/3d-floor-plan-color-1.webp" alt="3d Floor Plan Color">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="container">
					<div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12">
							 <img loading="lazy" class="img-right img-fluid" src="images/services/2d-3d-floor-plan-services/2d-3d-floor-plan-center-banner.webp" alt="2D 3D Floor Plan Center Image">
						</div>
		</div>
	</div>
</section>
<!--Start Floor Plan Configuration-->

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
						<div class="video-overlay"
							data-target="player-{{$key}}"
							style="position:absolute;top:0;left:0;width:100%;height:100%;cursor:pointer;z-index:2;">
						</div>

						<!-- YouTube Video -->
						<iframe
							id="player-{{$key}}"
							class="youtube-player testimonial-video"
							loading="lazy"

						src="{{$item['comments']}}"	
						title="Client Testimonial"

							frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
							referrerpolicy="strict-origin-when-cross-origin"
							allowfullscreen>
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

@endsection