@extends('app.main')
@section('body-id', 'toy-sort-puzzle')
@section('content')

<!--Breadcrumb Area-->
<section class="toy-sort-puzzle">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-3 text-center text-md-start">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-puzzle.webp')}}" alt="Toy Sort Puzzle" class="img-fluid animate">
            </div>
            <div class="col-md-6 text-center mt-5 mt-md-0">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-logo.webp')}}" class="logo img-fluid" alt="Toy Sort Puzzle Logo">
            </div>
            <div class="col-md-3 text-center text-md-end mt-5 mt-md-0">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-duck.webp')}}" alt="Toy Sort Puzzle Duck" class="img-fluid animate">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="bread-titlev2 mt-4 text-center">
                    <h1 class="pb-3">Sort, Match & Play!</h1>
                    <p><b>Now Available on iOS & Google Play</b></p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 text-center text-md-start">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-car.webp')}}" alt="Toy Sort Puzzle Card" class="img-fluid animate">
            </div>
            <div class="col-md-4">
                <img loading="lazy" src="{{asset('images/case-studies/play-and-app-store.webp')}}" class="logo img-fluid" alt="App & Play Store">
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->

<!--Start Toy Sort Puzzle Introduction -->
<section class="toy-sort-introduction toy-sort-puzzle py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 text-center order-1 order-md-1 order-lg-1 ">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-introduction-01.webp')}}" class="img-fluid" alt="Toy Sort Puzzle Introduction">
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-lg-0 order-2 order-md-2 order-lg-2">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-introduction-02.webp')}}" alt="Toy Sort Puzzle Introduction" class="img-fluid animate animate-right">
                <h2 class="text-center text-lg-end">Introduction<span> Play Sort Fun 3D</span></h2>
                <p class="text-center text-lg-end">Play Sort Fun 3D is a visually immersive and mentally engaging puzzle game developed by <span>AppexGames,</span> where players match and sort realistic 3D objects to clear levels. The game is designed for casual players who enjoy tidying, organizing, and solving matching challenges. With smooth mechanics, satisfying visual effects, and hundreds of fun levels, it offers a perfect balance of brain training and relaxation. </p>
            </div>
        </div>
    </div>
</section>
<!--End Toy Sort Puzzle Introduction -->

<!-- Start Toy Sort Puzzle Project Idea -->
<section class="toy-sort-project-idea toy-sort-puzzle py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-12 col-lg-6">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-bear.webp')}}" alt="Toy Sort Puzzle Bear" class="img-fluid animate animate-left">
                <h2 class="text-center text-lg-start">Project <span>Idea</span></h2>
                <p class="text-center text-lg-start pb-4">The core idea behind Play Sort Fun 3D was to create a tactile, satisfying sorting experience that would feel like digital decluttering. <span>AppexGames</span> aimed to introduce gameplay that involves dragging, rotating, and matching 3D items—like fruits, toys, animals, and everyday objects—against the clock. The game was designed to be relaxing, yet stimulating, with the right amount of challenge to keep players engaged while providing a sense of order and achievement.</p>
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-red-doll.webp')}}" alt="Toy Sort Puzzle Red Doll" class="img-fluid animate animate-left">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-project-idea.webp')}}" class="img-fluid" alt="Toy Sort Puzzle Project">
            </div>
        </div>
    </div>
</section>
<!-- End Toy Sort Puzzle Project Idea -->

<!-- Start Toy Sort Puzzle Goals -->
<section class="toy-sort-project-idea toy-sort-puzzle py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-12 col-lg-6">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-game-goal.webp')}}" class="img-fluid" alt="Toy Sort Puzzle Game Goal">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-white-doll.webp')}}" alt="Toy Sort Puzzle White Doll" class="img-fluid animate animate-right">
                <h2 class="text-center text-lg-end pb-3"> Game <span>Goal</span> </h2>
                <p class="text-center text-lg-end"><span>AppexGames</span> set out to design a game that could improve focus, memory, and visual recognition through simple, clutter-clearing mechanics. The main goals were intuitive 3D interactions, colorful objects, and gradually increasing difficulty without pressure. </p>
            </div>
        </div>
    </div>
</section>
<!-- End Toy Sort Puzzle Goals -->
 
<!-- Start Toy Sort Puzzle Target Audience -->
 <section class="toy-sort-audience-target toy-sort-puzzle py-5">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-2 mb-4 mb-lg-0">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-robot.webp')}}" alt="Toy Sort Puzzle Robot" class="img-fluid animate animate-left">
                </div>
                <div class="col-md-8 mb-5 mb-lg-0 text-center">
                    <h2>Target <span>Audience</span></h2>
                </div>
                <div class="col-md-2 text-lg-end mb-4 mb-lg-0">
                    <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-plane.webp')}}" alt="Toy Sort Puzzle Plane" class="img-fluid animate animate-right">
                </div>
                <div class="col-md-12">
                    <p>The game is tailored for casual mobile gamers of all ages, particularly those who enjoy sorting, organizing, or playing visually satisfying games like ASMR or minimal puzzlers. It’s ideal for kids, adults, and elderly players alike who want to relax and sharpen their focus during short breaks or daily downtime.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-mockup.webp')}}" alt="Toy Sort Puzzle Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End audience target section -->

<!-- Start Toy Sort Puzzle Target Element -->
<section class="toy-sort-element toy-sort-puzzle py-5">
    <div class="container">
         <div class="row mb-4">
            <div class="col-md-4">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-elephant.webp')}}" alt="Toy Sort Puzzle Elephant" class="img-fluid animate animate-left">
            </div>
            <div class="col-md-4 text-center">
                <h2>Elements</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-element.webp')}}" alt="Toy Sort Puzzle Element" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Toy Sort Puzzle Target Element -->

<!-- Start Toy Sort Puzzle Feedback -->
<section class="toy-sort-player-feedback toy-sort-puzzle py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-2 mb-4 mb-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-ball.webp')}}" alt="Toy Sort Puzzle Ball" class="img-fluid animate animate-left">
            </div>
            <div class="col-md-8 text-center mb-5 mb-lg-0">
                <h2>Player <span>Feedback</span></h2>
            </div>
            <div class="col-md-2">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-dog.webp')}}" alt="Toy Sort Puzzle Dog" class="img-fluid animate animate-right">
            </div>
        </div>
        <div class="row toy-sort-user-feedback-img">
            <div class="col-6 col-lg-4 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-screen-01.webp')}}" alt="Toy Sort Puzzle Screen" class="img-fluid">
            </div>
            <div class="col-6 col-lg-4 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-screen-02.webp')}}" alt="Toy Sort Puzzle Screen" class="img-fluid">
            </div>
            <div class="col-6 col-lg-4 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-screen-03.webp')}}" alt="Toy Sort Puzzle Screen" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Toy Sort Puzzle Feedback -->

<!-- Start Toy Sort Puzzle Result -->
 <section class="toy-sort-result toy-sort-puzzle py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 mb-4 mb-lg-0">
                        <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-ring-puzzle.webp')}}" alt="Toy Sort Puzzle Ring Puzzle" class="img-fluid animate animate-left">
                    </div>
                    <div class="col-md-8 text-center mb-5 mb-lg-0">
                        <h2>Results<span> & Impact </span></h2>
                    </div>
                    <div class="col-md-2 text-lg-end">
                        <img loading="lazy" src="{{asset('images/case-studies/toy-sort-puzzle/toy-sort-puzzle-truck.webp')}}" alt="Toy Sort Puzzle Truck" class="img-fluid animate animate-right">
                    </div>
                </div>
                <p class="text-center">Play Sort Fun 3D has received strong user retention and positive feedback, especially for its satisfying gameplay and clean design. Players appreciated how the game balances relaxation and challenge, offering a therapeutic yet stimulating experience. Many users report improved concentration and memory through regular play, aligning with the game’s brain-training goals. With growing downloads and high engagement metrics, the title continues to thrive among casual gamers.</p>
            </div>
        </div>   
    </div>
</section>
<!-- End Toy Sort Puzzle Result -->

@endsection