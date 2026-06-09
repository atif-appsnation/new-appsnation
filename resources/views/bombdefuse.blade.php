@extends('app.main')
@section('body-id', 'bomb-defuse-background')
@section('content')

<!--Breadcrumb Area-->
<section class="bomb-defuse-app">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-lg-12 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                    <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-logo.webp')}}" class="logo pb-4" alt="Bomb Defuse Bomb Logo">
                    <h1 class="pb-4"> Every second counts! </h1>
                    <p class="pb-4"><b>Can you defuse the bomb before time runs out?</b> </p>
                    <p class="pb-4">Test your speed and logic – start playing now!</p>
                    <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-app-store.webp')}}" class="logo" alt="App Store">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area-->
 
<!-- Start Bomb Defuse Introduction -->
<section class="introduction-bomb-squad py-5">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-md-12 col-lg-6">
                <div class="introduction-bomb-squad-content">
                    <h2 class="pb-3">Introduction<span> Bomb Squad</span></h2>
                    <p class="pb-3"> Bomb Squad: Defuse the Bomb 3D is a high-intensity mobile game developed by <span>Appex Games</span>  that immerses players into the role of a bomb disposal expert. With its realistic 3D visuals, detailed mechanics, and time-sensitive challenges, the game provides a gripping simulation of real-world bomb defusal. Players must stay calm under pressure, solve intricate wiring puzzles, and make split-second decisions — all while a countdown clock ticks away, creating a tense and thrilling experience.
                    </p>
                </div>
            </div>
              <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-bomb-squad.webp')}}" class="img-fluid introduction-bomb-squad-img" alt="Introduction">
            </div>
        </div>
    </div>
</section>
<!-- End Bomb Defuse Introduction -->

<!-- Start Bomb Defuse Project -->
<section class="project-idea-bomb-defuse bomb-defuse-spacing">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-md-12 col-lg-6">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-project-idea.webp')}}" class="img-fluid project-idea-bomb-defuse-img" alt="project description">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0">
                <h2>Project <span> Idea</span></h2>
                <p>The core idea behind this project was to develop a realistic and strategic game that mimics the life-or-death pressure of bomb defusal scenarios. <span> AppexGames</span> aimed to go beyond casual entertainment by offering users an experience that tests their mental agility and composure under pressure. The goal was to design gameplay that includes a variety of bomb models, multiple defusal tools, and puzzle logic — all integrated into an interactive 3D environment that keeps users fully engaged.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Bomb Defuse Project -->

<!-- Start Bomb Defuse Ranking -->
<section class="bomb-defuse-ranking bomb-defuse-spacing">
    <div class="container">
        <div class="common-heading mb-4">
			<h2>Rewards, Milestones & Rankings</h1>
		</div>
        <div class="row">
            <div class="col-lg-4">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-ranking-01.webp')}}" class="img-fluid" alt="Bomb Defuse Ranking">
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-ranking-02.webp')}}" class="img-fluid" alt="Bomb Defuse Ranking">
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-ranking-03.webp')}}" class="img-fluid" alt="Bomb Defuse Ranking">
            </div>
        </div>
    </div>
</section>
<!-- Start Bomb Defuse Ranking -->
 
<!-- Start Bomb Defuse Character -->
<section class="bomb-defuse-ranking bomb-defuse-spacing">
    <div class="container">
        <div class="common-heading mb-4">
			<h2>Character</h1>
		</div>
        <div class="row">
            <div class="col-lg-4">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-character-01.webp')}}" class="img-fluid" alt="Bomb Defuse Character">
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-character-02.webp')}}" class="img-fluid" alt="Bomb Defuse Character">
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-character-03.webp')}}" class="img-fluid" alt="Bomb Defuse Character">
            </div>
        </div>
    </div>
</section>
<!-- End Bomb Defuse Character -->

<!-- Start Bomb Defuse Elements -->
<section class="bomb-defuse-mockup bomb-defuse-spacing">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <h2>Elements</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-element.webp')}}" alt="Bomb Defuse Elements" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Bomb Defuse Elements -->

<!-- Start Bomb Defuse Achievements -->
<section class="achievements-bomb-defuse bomb-defuse-spaceing">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-md-12 col-lg-6">
                <h2 class="mb-4 mb-lg-0"><span>Achievements</span></h2>
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-achievements.webp')}}" class="img-fluid" alt="project description">
            </div>
            <div class="col-12 col-md-12 col-lg-6 mt-5 mt-lg-0">
                <div class="project-idea-content">
                    <h2 class="mb-4">Target <span> Audience</span></h2>
                    <p>The game was developed for players between the ages of 13 and 40 who enjoy strategic, puzzle-based, and simulation games. It appeals particularly to those who are fans of escape room challenges, brain games, or suspense-driven experiences. Whether casual gamers looking for something different or puzzle enthusiasts craving a realistic challenge, Bomb Squad offers a rewarding experience for users who enjoy solving problems under pressure.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Bomb Defuse Achievements -->

<!-- Start Bomb Defuse Results & Impacts -->
<section class="bomb-defuse-result-section bomb-defuse-spacing">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-3">Results <span>& Impact</span></h2>
                <p>The launch of Bomb Squad: Defuse the Bomb 3D saw impressive results in both downloads and user engagement. Within the first six months, the game achieved over 500,000 downloads and maintained an average rating of 4.5+ stars across major app platforms. User feedback consistently praised the game’s realism, creativity, and replay value. The game also performed well on social media, with players sharing gameplay clips, reaction videos, and high-score challenges. Appex Games successfully built a growing community of players while generating sustainable revenue through its balanced in-app purchase model.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Bomb Defuse Results & Impacts -->

<!-- Start Bomb Defuse Mockup Section -->
<section class=" boujee-beachin-mockup bomb-defuse-spacing">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-defuse-app-mockup.webp')}}" alt="Bomb Defuse Mockup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Bomb Defuse Mockup Section -->
@endsection