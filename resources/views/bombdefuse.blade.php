@extends('app.main')
@section('body-id', 'bomb-defuse-background')
@section('content')

<!--Breadcrumb Area-->
<!--start hero section bomb defuse -->
<section class="bomb-defuse-app  wow fadeIn">
    @if ($errors->has('g-recaptcha-response'))
    <div class="alert alert-danger">
        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
    </div>
    @endif

    <div class="container wow fadeIn " data-wow-delay="0.2s">
        <div class="row">

            <div class="col-lg-12 my-lg-auto">
                <div class="bread-titlev2 mt-4">
                     <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/logo.webp')}}" class="logo" alt="bomb-defuse-app logo">
                    <h1>
                        Every second counts!
                    </h1>
                    <p class="pt-3">
                     <b>Can you defuse the bomb before time runs out?</b> 
                    </p>
                    <p>Test your speed and logic – start playing now!</p>
                         <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/appstore.webp')}}" class="logo" alt="appstore logo">
                </div>
            </div>
 

        </div>
    </div>

</section>
<!--End hero section bomb defuse -->
<!-- End Breadcrumb Area-->
 
<!--Start introduction bomb squad Section -->
<section class="introduction-bomb-squad  py-5  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">
          
            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="introduction-bomb-squad-content">

                    <h2 class="bomb-squad-title">Introduction<span> Bomb Squad</span></h2>
                    <p class="bomb-squad-paragraph">
                       Bomb Squad: Defuse the Bomb 3D is a high-intensity mobile game developed by <span>Appex Games</span>  that immerses players into the role of a bomb disposal expert. With its realistic 3D visuals, detailed mechanics, and time-sensitive challenges, the game provides a gripping simulation of real-world bomb defusal. Players must stay calm under pressure, solve intricate wiring puzzles, and make split-second decisions — all while a countdown clock ticks away, creating a tense and thrilling experience.
                    </p>
                </div>


            </div>
              <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 introduction-bomb-squad-img">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/bomb-squad.webp')}}" class="img-fluid" alt="project description">
            </div>

        </div>
    </div>
</section>
<!--End introduction bomb squad Section -->


<!--start project idea bomb defuse squad Section -->
<section class="project-idea-bomb-defuse  bomb-defuse-spaceing  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">
        
              <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 project-idea-bomb-defuse-img">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Project-Idea.webp')}}" class="img-fluid" alt="project description">
            </div>
              
            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="project-idea-content">

                    <h2 class="bomb-defuse-title">Project <span> Idea</span></h2>
                    <p class="bomb-defuse-paragraph">The core idea behind this project was to develop a realistic and strategic game that mimics the life-or-death pressure of bomb defusal scenarios. <span> AppexGames</span> aimed to go beyond casual entertainment by offering users an experience that tests their mental agility and composure under pressure. The goal was to design gameplay that includes a variety of bomb models, multiple defusal tools, and puzzle logic — all integrated into an interactive 3D environment that keeps users fully engaged.
                    </p>
                </div>


            </div>

        </div>
    </div>
</section>
<!--End project idea bomb defuse squad Section -->


<!--start bomb-defuse-mockup section -->
<section class="bomb-defuse-Ranking-section bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <div class="common-heading">
					<h2>Rewards, Milestones & Rankings</h1>
					 </div>
        <div class="row">
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Ranking-img.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Ranking-img-1.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Ranking-img-2.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
        </div>
    </div>
</section>
<!-- End bomb-defuse-mockup section -->
 

<!-- Start bomb defuse character section -->
<section class="bomb-defuse-Ranking-section bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <div class="common-heading">
					<h2>Character</h1>
					 </div>
        <div class="row">
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Character1.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Character2.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
            <div class="col-md-4">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Character3.webp')}}" class="img-fluid" alt="Ranking-img">
            </div>
        </div>
    </div>
</section>
<!-- End bomb defuse character section -->





<!-- start bomb defuse Elements section -->
<section class=" wow fadeIn bomb-defuse-mockup bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <h2>Elements</h2>
        <div class="row">
            <div class="col-12 text-center">
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/element.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End bomb defuse Elements section -->


<!-- start bomb defuse Achievements section -->
<section class="achievements-bomb-defuse bomb-defuse-spaceing  wow fadeIn">
    <div class="container wow fadeInUp">
        <div class="row align-items-center text-center text-md-start">
        
              <div class="col-12 col-md-12 col-lg-6 mb-4 mb-md-0 ">
                  <h2 class="bomb-defuse-title"><span>Achievements</span></h2>
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/Achievements.webp')}}" class="img-fluid" alt="project description">
            </div>
              
            <div class="col-12 col-md-12 col-lg-6  ">
                <div class="project-idea-content">

                    <h2 class="bomb-defuse-title">Target  <span> Audience</span></h2>
                    <p class="bomb-defuse-paragraph">The game was developed for players between the ages of 13 and 40 who enjoy strategic, puzzle-based, and simulation games. It appeals particularly to those who are fans of escape room challenges, brain games, or suspense-driven experiences. Whether casual gamers looking for something different or puzzle enthusiasts craving a realistic challenge, Bomb Squad offers a rewarding experience for users who enjoy solving problems under pressure.
                    </p>
                </div>


            </div>

        </div>
    </div>
</section>
<!-- End bomb defuse Achievements section -->


<section class="bomb-defuse-result-section bomb-defuse-spaceing  wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 <h2 class="bomb-defuse-title">Results   <span>& Impact</span></h2>
                    <p class="bomb-defuse-paragraph">The launch of Bomb Squad: Defuse the Bomb 3D saw impressive results in both downloads and user engagement. Within the first six months, the game achieved over 500,000 downloads and maintained an average rating of 4.5+ stars across major app platforms. User feedback consistently praised the game’s realism, creativity, and replay value. The game also performed well on social media, with players sharing gameplay clips, reaction videos, and high-score challenges. Appex Games successfully built a growing community of players while generating sustainable revenue through its balanced in-app purchase model.
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
                 <img loading="lazy" src="{{asset('images/case-studies/bomb-defuse-app/morkup.webp')}}" alt="wood-land morkup" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- End Mockup Section -->
@endsection