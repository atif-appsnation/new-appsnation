@extends('app.main')
@section('body-id', 'car-mechanic-background')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="car-mechanic  wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-lg-12 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                     <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/logo.webp')}}" class="logo " alt="car-mechanic logo">
                    <h1>
                        <span>Grease Up, Gears On </span><br>
                        Let the Fixing Fun Begin!
                    </h1>
                    <p class="pt-3">
                        <b>Step into the garage where every tool tells a story! In Car Mechanic, you’ll repair, upgrade, and transform cars into powerful machines. It’s fast, fun, and full of challenges — perfect for players who love engines, speed, and a little grease on their hands!</b>
                    </p>
                    <p class="car-mechanic-hero-tag">Start Wrenching Now</p>

                </div>
            </div>


        </div>
    </div>

</section>
<!--End hero section bomb defuse -->
<!-- End Breadcrumb Area-->

<!--Start introduction bomb squad Section -->
<section class="car-mehanic  py-5  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-4 car-mehanic-img">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/introduction-img.webp')}}" class="img-fluid" alt="project description">
            </div>
            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="car-mehanic-content">

                    <h2 class="bomb-squad-title">Introduction<span> Car Mechanic</span></h2>
                    <p class="bomb-squad-paragraph">
                        Car Mechanic Game is a realistic <span>automotive simulation </span> that invites players to run a fully equipped 3D garage. The game bridges the gap between casual gaming and authentic <span>car maintenance,</span> allowing players to inspect vehicles, diagnose mechanical problems, and transform damaged cars into road-ready masterpieces. <br>
                        With a focus on data privacy and smooth performance, the game offers a secure and immersive environment where players can scrutinize parts, replace broken glass, and engage in detailed <span> vehicle restoration</span> without compromising performance or security.

                    </p>
                </div>


            </div>


        </div>
    </div>
</section>
<!--End introduction bomb squad Section -->


<!--start project idea bomb defuse squad Section -->
<section class="project-idea-car-mechanic  bomb-defuse-spaceing  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">


            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="project-idea-content">

                    <h2 class="bomb-defuse-title">Project <span> Idea</span></h2>
                    <p>Goal set for AppexGames</p>
                    <p class="bomb-defuse-paragraph"> The vision behind this project was to create a game that is more than just a pastime it is a <span> car maintenance simulator</span> designed to teach players how a real garage works. appsnation aimed to build a loop where players develop precision, patience, and attention to detail. <br>
                        From simple city cars to complex SUVs, the project focuses on interactive repair steps. We wanted players to feel the satisfaction of swapping out suspension parts, installing new rims, and waxing a car to perfection. The concept creates a sense of career progression, moving from quick fixes to full-scale <span> engine upgrades</span> and bodywork restoration.
                    </p>
                </div>


            </div>
            <div class="col-12 col-md-12 col-lg-6 mb-4 mt-md-4 project-idea-car-mechanic-img">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/project-idea-img.webp')}}" class="img-fluid pt-4" alt="project description">
            </div>


        </div>
    </div>
</section>
<!--End project idea bomb defuse squad Section -->


<!--start car selection section -->
<section class="bomb-defuse-Ranking-section bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <div class="common-heading">
            <h2>Car Selection</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/car1.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/car2.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/car3.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
        </div>
    </div>
</section>
<!-- End bomb-defuse-mockup section -->

<!--Start introduction bomb squad Section -->
<section class="car-mehanic  py-5  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 car-mehanic-img">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/game-goal-img.webp')}}" class="img-fluid" alt="project description">
            </div>
            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="car-mehanic-content">

                    <h2 class="bomb-squad-title">Game <span> Goal</span></h2>
                    <p class="bomb-squad-paragraph">
                        The primary goal of Car Mechanic Game is to simulate the growth of a professional mechanic's career. Players start by performing basic tasks like replacing cracked windshields or worn-out tires. <br>
                        As they progress, the goal shifts to mastering <span> auto diagnostics</span> and business growth. Players earn rewards for every completed job, allowing them to unlock advanced tools and upgrade their workshop setup. The ultimate objective is to rise as an expert mechanic, turning rust buckets into high-value custom vehicles using a vast array of paints, stickers, and decals.

                    </p>
                </div>


            </div>


        </div>
    </div>
</section>
<!--End introduction bomb squad Section -->





<!-- start car mechanic Elements section -->
<section class=" wow fadeIn bomb-defuse-mockup bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <h2>Elements</h2>
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/element-img.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End car mechanic Elements section -->


<!--Start introduction bomb squad Section -->
<section class="car-mehanic  py-5  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 car-mehanic-img">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/target-audience-img.webp')}}" class="img-fluid" alt="project description">
            </div>
            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="car-mehanic-content">

                    <h2 class="bomb-squad-title">Target <span>Audience </span></h2>
                    <p class="bomb-squad-paragraph">
                        The game targets <span>automotive enthusiasts,</span>  DIY mechanics, and fans of <span> simulation games.</span> It appeals specifically to players who enjoy "fixing" and "creating" rather than just racing. <br>
                        It is also designed for an educational audience looking to learn about component functions and maintenance. By offering a safe, data-encrypted environment with no third-party data sharing, it is suitable for a wide demographic of players looking to improve their hand-eye coordination and mechanical knowledge in a virtual space.
                    </p>
                </div>


            </div>


        </div>
    </div>
</section>
<!--End introduction bomb squad Section -->




<section class="car-mechanic-result-section bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="bomb-defuse-title">Results <span>& Impact</span></h2>
                <p class="bomb-defuse-paragraph">Since its launch and subsequent updates through November 2025, Car Mechanic Game has delivered a highly optimized experience. The latest build features <span> enhanced sound design </span>with balanced ambient audio and a graphics upgrade that includes sharper textures and refined lighting effects. <br>
                <p>Technical improvements include reduced loading times and improved frame rate stability. Players have responded positively to the "Data Safety" commitment, ensuring a secure gaming experience. The game has successfully created a community of virtual mechanics who enjoy the authentic feel of the garage, driving consistent engagement and retention.</p>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Start Mockup Section -->
<section class=" wow fadeIn boujee-beachin-mockup bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/car-mechanic-app/morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection