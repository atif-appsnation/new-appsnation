@extends('app.main')
@section('body-id', 'toy-sort-puzzle')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="toy-sort-puzzle wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn" data-wow-delay="0.2s">
        <div class="row align-items-center">

            <div class="col-md-3 text-center text-md-start">
                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/puzzle.webp')}}" alt="Puzzle Toy">
                </div>
            </div>

            <div class="col-md-6 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/logo.webp')}}" class="logo" alt="Toy Sort Puzzle Logo">
            </div>

            <div class="col-md-3 text-center text-md-end">
                <div class="imageFloteRight wow fadeInRight" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/duck.webp')}}" alt="Duck Toy">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12 ">
                <div class="bread-titlev2 mt-4 text-center">
                    <h1>Sort, Match & Play!</h1>
                    <p class="p-3"><b>Now Available on iOS & Google Play</b></p>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 toy-sort-playstore">
                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s ">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/car.webp')}}" alt="Duck Toy">
                </div>
            </div>
            <div class="col-md-4">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/appstore.webp')}}" class="logo" alt="App Store">

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>

<!--End hero section bomb defuse -->
<!-- End Breadcrumb Area-->

<!--start toy sort introduction  -->
<section class="toy-sort-introduction  py-5  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">
            <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-4 car-mehanic-img  order-1 order-md-1 order-lg-1 ">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/Introduction-img-1.webp')}}" class="img-fluid" alt="project description">
            </div>
            <div class="col-12 col-md-12 col-lg-6 order-2 order-md-2 order-lg-2">
                <div class="car-mehanic-content">
                  <div class="row">
                      <div class="col-8">
                          <h2 class="toy-sort-title">Introduction<span> Play Sort Fun 3D</span></h2>
                        </div>
                        <div class="col-4">
                            <div class="imageFloteRight wow fadeInRight" data-wow-delay="0.6s">
                        <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/Introduction-img-2.webp')}}" alt="Duck Toy">
                    </div>
                        </div>
                    </div>
                    <p class="toy-sort-paragraph">
                       Play Sort Fun 3D is a visually immersive and mentally engaging puzzle game developed by <span>AppexGames,</span> where players match and sort realistic 3D objects to clear levels. The game is designed for casual players who enjoy tidying, organizing, and solving matching challenges. With smooth mechanics, satisfying visual effects, and hundreds of fun levels, it offers a perfect balance of brain training and relaxation.
                    </p>
                </div>


            </div>


        </div>
    </div>
</section>
<!--End toy sort introduction -->


<!--start project idea toy sort puzzle Section -->
<section class="toy-sort-project-idea container wow fadeInUp">
    <div class="row align-items-center text-center text-md-start">

        <!-- Content Column -->
        <div class="col-12 col-md-12 col-lg-6 order-2 order-md-2 order-lg-1">
            <div class="car-mehanic-content">
                <div class="row">
                    <div class="col-8">
                        <h2 class="toy-sort-title">Project <span>Idea</span></h2>
                    </div>
                    <div class="col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/taddy.webp')}}" alt="Duck Toy">
                        </div>
                    </div>
                </div>
                <p class="toy-sort-paragraph">
                    The core idea behind Play Sort Fun 3D was to create a tactile, satisfying sorting experience that would feel like digital decluttering. 
                    <span>AppexGames</span> aimed to introduce gameplay that involves dragging, rotating, and matching 3D items—like fruits, toys, animals, and everyday objects—against the clock. 
                    The game was designed to be relaxing, yet stimulating, with the right amount of challenge to keep players engaged while providing a sense of order and achievement.
                </p>
                <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/red-doll.webp')}}" alt="Duck Toy">
                </div>
            </div>
        </div>

        <!-- Image Column -->
        <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-4 car-mehanic-img order-1 order-md-1 order-lg-2">
            <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/project-idea-img.webp')}}" class="img-fluid" alt="project description">
        </div>

    </div>
</section>

<!--End project idea toy sort puzzle Section -->


<!--start  game goal  section -->

<section class="toy-sort-project-idea container wow fadeInUp">
    <div class="row align-items-center text-center text-md-start">

        <!-- Image Column -->
        <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-4 car-mehanic-img
                      order-1 order-md-1 order-lg-1 ">
            <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/game-goal-img.webp')}}"
                 class="img-fluid" alt="project description">
        </div>

        <!-- Content Column -->
        <div class="col-12 col-md-12 col-lg-6
                    order-2 order-md-2 order-lg-2">
            <div class="car-mehanic-content">

                <div class="row">
                    <div class="offset-8 col-4">
                        <div class="imageFloteRight wow fadeInLeft" data-wow-delay="0.6s">
                            <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/white-doll.webp')}}"
                                 alt="Duck Toy">
                        </div>
                    </div>
                </div>

                <h2 class="toy-sort-title text-lg-end text-start">
                    Game <span>Goal</span>
                </h2>

                <p class="toy-sort-paragraph">
                    <span>AppexGames</span> set out to design a game that could improve focus,
                    memory, and visual recognition through simple, clutter-clearing mechanics.
                    The main goals were intuitive 3D interactions, colorful objects, and
                    gradually increasing difficulty without pressure.
                </p>

            </div>
        </div>

    </div>
</section>

<!-- End  game goal  section -->
 
<!-- start audience target section -->
 <section class="toy-sort-audience-target bomb-defuse-spaceing  wow fadeIn text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                         <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/robot.webp')}}" alt="Duck Toy">
                </div>
                    </div>
                    <div class="col-md-4">
                <h2 class="bomb-defuse-title">Target  <span>Audience</span></h2>

                    </div>
                    <div class="offset-md-2 col-md-2 ">
                         <div class="imageFloteRight wow fadeInRight " data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/plane.webp')}}" alt="Duck Toy">
                </div>
                    </div>
                </div>
                <p class="bomb-defuse-paragraph">The game is tailored for casual mobile gamers of all ages, particularly those who enjoy sorting, organizing, or playing visually satisfying games like ASMR or minimal puzzlers. It’s ideal for kids, adults, and elderly players alike who want to relax and sharpen their focus during short breaks or daily downtime.</p>
            </div>
        </div>
             <div class="row mt-4">
            <div class="col-12 text-center toy-sort-target-audience-img">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>

    </div>
</section>
<!-- End audience target section -->


<!-- start toy sort puzzle Elements section -->
<section class="toy-sort-Element wow fadeIn  bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
         <div class="row">
                    <div class="col-md-4">
                         <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/elefent.webp')}}" alt="Duck Toy">
                </div>
                    </div>
                    <div class="col-md-4">
                <h2 class="bomb-defuse-title mb-sm-4">Elements </h2>

                    </div>
                    <div class="offset-md-2 col-md-2 ">
                        
                    </div>
                </div>
        <div class="row ">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/element-img.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End toy sort puzzle Elements section -->


<!-- start toy sort player feedback section  -->
<section class="toy-sort-player-feedback wow fadeIn  bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
         <div class="row">
                    <div class="col-md-4">
                         <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/boll.webp')}}" alt="Duck Toy">
                </div>
                    </div>
                    <div class="col-md-4">
                <h2 class="bomb-defuse-title mb-sm-4">Player Feedback </h2>

                    </div>
                    <div class="offset-md-2 col-md-2 ">
                         <div class="imageFloteRight wow fadeInRight" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/dog.webp')}}" alt="Duck Toy">
                </div>
                    </div>
                </div>
        <div class="row toy-sort-user-feedback-img">
            <div class="col-4 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/screen1.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
            <div class="col-4 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/screen2.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
            <div class="col-4 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/screen3.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End toy sort player feedback section  -->

 

<!-- start audience target section -->
 <section class="toy-sort-audience-target bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                         <div class="imageFloteLeft wow fadeInLeft" data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/ring-puzzle.webp')}}" alt="Duck Toy">
                </div>
                    </div>
                    <div class="col-md-4 text-center">
                <h2 class="bomb-defuse-title">Results<span> & Impact  </span></h2>

                    </div>
                    <div class="offset-md-2 col-md-2 ">
                         <div class="imageFloteRight wow fadeInRight " data-wow-delay="0.6s">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/truck.webp')}}" alt="Duck Toy">
                </div>
                    </div>
                </div>
                <p class="bomb-defuse-paragraph">Play Sort Fun 3D has received strong user retention and positive feedback, especially for its satisfying gameplay and clean design. Players appreciated how the game balances relaxation and challenge, offering a therapeutic yet stimulating experience. Many users report improved concentration and memory through regular play, aligning with the game’s brain-training goals. With growing downloads and high engagement metrics, the title continues to thrive among casual gamers.</p>
            </div>
        </div>
              

    </div>
</section>
<!-- End audience target section -->


<!-- start
 
 
@endsection