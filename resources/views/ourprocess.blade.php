@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 our-process-banner">

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
                        <h1 class="text-white">Our Process</h1>
                        <!-- <p class="text-white pt-3">The great revolution starts here process that meets quality.</p> -->
                        <p class="text-white pt-3">AppsNation, work on all of our Apps development projects professionally with creative moralistic methods to provide accurate results to our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb -->

<!--Start Process-->
<section class="our-process-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="common-heading ptag">
                    <!-- <h2>Our <span>Process</span></h2> -->
                    <!-- <p>Appsnation, work on all of our Web and App development projects professionally with creative moralistic methods to provide accurate results to our clients.</p> -->
                </div>
            </div>
        </div>

        <div class="main-timeline mt-5">
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">01</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Project Analysis of Requirements</h5>
                    <p class="description">Appsnation's experienced team will assist you in conceptualizing ideas and making them into a functional application. Our web development company will help your company establish a huge customer base by making an app loaded with features. The project begins with the initial planning process. Our creative team will initially analyze your needs, goals, and requirements. Based on these details, we'll develop a plan for the whole application development process, including design and technical implementation.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">02</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Wireframing & Designing</h5>
                    <p class="description text-end">After gathering sufficient information, it is time to create the wireframes. A wireframe is a visual representation of the user interface. It provides a visual description of an application. This step can be a crucial task in setting up your business application, but the process will go smoothly if you know what you want to achieve. We start working on the User Interface. The UI design will determine how easily users can connect with your application, so we plan excellent care.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">03</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">App Development</h5>
                    <p class="description">We are now ready to start making your application according to your needs. Elements designed in the previous steps are now utilized to create an actual app design. This is the most crucial step in development as, at this stage, programmers run the codes to make the application fully functional and run smoothly. After designing, our app developers work with your feedback and make changes accordingly. They will also put different features of your project into practice that will make your application user-friendly.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">04</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">App Testing</h5>
                    <p class="description text-end">Our QA team will check the application for zero functionality errors at this stage. Every Task and Page are tested before launching the application to ensure everything works smoothly. Our application testing team will ensure your application is free of any technical errors before publishing it. Our App testing process ensures that your app is ready to launch by testing it across multiple devices.</p>
                </div>
            </div>
            <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">05</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">App Deployment</h5>
                    <p class="description">Our team of experts considers it their main duty to ensure that the app meets the standards of professional app development. We adhere to all of your requirements, including design and content. The application is now entirely built using advanced technologies and frameworks, equipped with excellent design, and successfully passes the standards of the Quality Assurance section. So at this stage, we will deploy the application.</p>
                </div>
            </div>
            <!-- <div class="process-timeline">
                <div class="icon"></div>
                <div class="date-content">
                    <div class="date-outer">
                        <span class="date">
                            <span class="month">06</span>
                        </span>
                    </div>
                </div>
                <div class="timeline-content">
                    <h5 class="title">Deployment</h5>
                    <p class="description">When the ultimate practical product successfully passes the standards of the Assurance section, we tend to locate the project and build it live. We also take further steps to ensure that there isn't any single error or bug once your project is prepared to satisfy your targeted audience. Our team conjointly likes to keep in grips with our valuable client to assist on the means. Now it's time to hit the Launch button!</p>
                </div>
            </div> -->
        </div>

    </div>
</section>
<!--End Process-->

@endsection