@extends('app.main')
@section('content')

<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 game-app-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-4 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Mobile Game Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s">Be the top trend among the gamers and streamers with an ultimate game developed by our most reliable game developers.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-8 wow fadeIn">
				 <img loading="lazy" src="images/services/game-app-development/game-app-banner-img.webp" class="img-fluid" alt="Game App Development" width="100%" height="100%">
			</div>
		</div>
	</div>
</section>
<!--End Hero-->

<!--Start About-->
<section class="service py-5 game-intro-section" id="mycounterSection">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6 wow fadeIn">
				<div class="image-block wow fadeIn">
					 <img loading="lazy" src="images/services/game-app-development/game-app-development.webp" alt="Game Development" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6 my-auto block-1 wow fadeIn">
				<div class="common-heading text-l pl25">
					<div data-text="Game" class="light-bg-text bg-text mb-5">
						<h2>Grab The Gamers With Our <br> <span class="flup-theme">Ultimate Game Development Services</span></h2>
					</div>
					<p><strong>Announce your crazy and game-changing idea of a game among the gamers and the industry with our stellar game development services.</strong></p>
					<p>AppsNation is a renowned and reliable team of game developers, offering a wide range of game development services. Our mission is to turn those out-of-the-box ideas into reality with a highly functional and robust game developed by our exceptional game development services.</p>
					<p>We are on the verge of converting unique gaming ideas into reality to make it the next viral thing among gamers and the gaming industry. Our game developers are ingenious and go beyond conventional creativity to design your game with alluring aesthetics, perfect animation, and character design. The graphics depend on your requirements, yet we give it a realistic look to impress players.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center wow fadeIn  achievements-count mt-3">
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

<!--Start Why Choose-->
<section class="service-block py-5 game-choose-section">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Choose Us" class="dark-bg-text bg-text mb-5">
						<h2 class="text-white">Why Choose AppsNation</h2>
					</div>
					<p class="text-white">We provide high-quality game development to clients all around the world. To produce excellent tales and exceptional gaming experiences, our team of tech-savvy game developers goes beyond the frontier of imagination.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<div class="timeline-centered">
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/cross-platform-support.svg" alt="Cross Platform Support" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">Cross Platform Support</h3>
								<p class="text-white">We are famous for developing games across different platforms using a single code-base for iOS, Android, Windows, and Blackberry.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/design-and-animation.svg" alt="Design And Animation" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">Design And Animation</h3>
								<p class="text-white">Our designers and animators create user-friendly top-class graphics of a game to impress players with the game design and animation.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/ui-ux-integration.svg" alt="UI/UX Integration" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">UI/UX Integration</h3>
								<p class="text-white">We power up the gaming experience with great UI/UX integration into the game and ensure no glitches while playing the game.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/visuals-and-graphics.svg" alt="Visuals And Graphics" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">Visuals And Graphics</h3>
								<p class="text-white">Our visual artists and graphics designers follow the latest graphics demand of players to ensure their addictiveness towards the game.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				<div class="timeline-centered">
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/robust-game-development.svg" alt="Robust Game Development" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">Robust Game Development</h3>
								<p class="text-white">We are top-rated for developing bug-free, highly functional, and responsive games to offer players a flawless and amazing gaming experience.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/push-notification-support.svg" alt="Push Notification Support" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">Push Notification Support</h3>
								<p class="text-white">We leverage the push notification feature with exciting alerts to preserve players' interest and engagement.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/social-media-integration.svg" alt="Social Media Integration" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">Social Media Integration</h3>
								<p class="text-white">Itis essential to connect gamers to increase users, and we do it the right way with seamless social media integration.</p>
							</div>
						</div>
					</article>
					<article class="timeline-entry">
						<div class="timeline-entry-inner">
							<div class="timeline-icon">
								 <img loading="lazy" src="images/services/game-app-development/montezation-of-the-game.svg" alt="Monetization Of The Game" class="why-choose-img" width="100%" height="100%">
							</div>
							<div class="timeline-label">
								<h3 class="text-white">Monetization Of The Game</h3>
								<p class="text-white">We create result-driven monetization strategies for the game, including in-app purchases and ads.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose-->


<!--Start Features-->
<section class="features-section-app dark-bg2 py-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-5 fadeIn">
				<div class="tab-content" id="imagetab">

					@foreach($agencystack as $k=>$items)
					@if($k==0)

					<div class="tab-pane features-content active" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@else
					<div class="tab-pane features-content fade" id="panel_a_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						 <img loading="lazy" src="uploads/{!!$items['image']!!}" alt="img" class="img-fluid">
					</div>
					@endif

					@endforeach

				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 my-auto pl-3 pl-sm-3 pl-md-5 pt-3 pt-sm-3 pt-md-3 pt-lg-0 wow fadeIn">
				<h2>Different Industries We Serve:</h2>
				<p class="py-3">We help a diverse clientele build result-driven mobile apps for different industries.</p>
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

					<div class="tab-pane image-content active" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p class="py-3">{!!$items['content']!!}</p>
					</div>
					@else

					<div class="tab-pane image-content fade" id="panel_b_{!!$items['id']!!}" role="tabpanel" aria-labelledby="{!!$items['id']!!}-tab">
						<h3>{!!$items['heading']!!}</h3>
						<p class="py-3">{!!$items['content']!!}</p>
					</div>

					@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Features-->


<!--Start Games-->
<section class="service-block py-5 game-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row wow fadeIn">
					<div class="ptag text-center common-heading">
						<div data-text="Our Services" class="light-bg-text bg-text mb-5">
							<h2 class="text-white pt-3">Our <span>Game App</span> Development Services</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="row mt-5 wow fadeIn">
					<div class="col-md-3 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/casual.webp" alt="Causal Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Causal
						<p>
					</div>

					<div class="col-md-3 mt-3 mt-md-0 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/action.webp" alt="Action Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Action
						<p>
					</div>

					<div class="col-md-3 mt-3 mt-md-0 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/arcade.webp" alt="Arcade Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Arcade
						<p>
					</div>

					<div class="col-md-3 mt-3 mt-md-0 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/adventure.webp" alt="Adventure Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Adventure
						<p>
					</div>

					<div class="col-md-3 mt-3 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/puzzle.webp" alt="Puzzle Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Puzzle
						<p>
					</div>

					<div class="col-md-3 mt-3 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/multiplayer.webp" alt="Multiplayer Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Multiplayer
						<p>
					</div>

					<div class="col-md-3 mt-3 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/racing.webp" alt="Racing Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Racing
						<p>
					</div>

					<div class="col-md-3 mt-3 game-development-col">
						 <img loading="lazy" src="images/services/game-app-development/sports.webp" alt="Sports Game" class="img-fluid" width="100%" height="100%">
						<p class="center-text">Sports
						<p>
					</div>

					<!-- <div class="col-md-4 mt-3 game-development-col">
							 <img loading="lazy" src="images/services/game-app-development/combat.webp" alt="Combat Game" class="img-fluid">
							<p class="center-text">Combact<p>
						</div> -->
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<!--End Games-->

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
<section class="service-block py-5 game-process-section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mb-5">
						<h2 class="text-white">Our Game Development Process</h2>
					</div>
					<p class="text-white">AppsNation offers clients an easy and smooth game development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="ptag wow fadeIn">
					<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column mt-4">
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">1</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Requirement Analysis</h4>
									<p class="description text-white">Bring your unique gaming idea to AppsNation. Our expert game analysts will analyze your game development requirements based on your target audience, type of game, platform choice, competition, and budget.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">2</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Technical Requirements Analysis</h4>
									<p class="description text-white">Once you define your budget and goal, we now analyze your technical requirements such as the character design, technology to implement, level of graphics, features to include, and many other aspects based on your budget and targeted audience.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">3</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Game Development Strategies</h4>
									<p class="description text-white">When every requirement is finalized, our game development expert analysts offer you a promising and result-driven plan to capture a remarkable share of the gaming industry. We help you become the new trend among gamers and streamers.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">4</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Game Designing</h4>
									<p class="description text-white">Our creative designers foster user-centric and client-focused game designs with the most preferable and recommended design studios and software. We provide games and gamers with a realistic feel for graphics and game design.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">5</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Concept Art</h4>
									<p class="description text-white">Concept art is the drawing that gives an idea of the game environment, characters, surroundings, and overall map or world. We have highly ingenious individuals born as concept artists to sketch out your game.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ptag wow fadeIn">
					<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column mt-4">
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">6</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Art Asset Creation</h4>
									<p class="description text-white">Most games need a large number of creative materials. Artists, music composers, and voice actors must collaborate with designers and developers to ensure that all parts fit together. We have got you covered with the best of the bests.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">7</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Game Development</h4>
									<p class="description text-white">The programmers will be busy developing ideas, implementing new features, and addressing issues discovered along the way. We make sure to apply cutting-edge and customized technologies to build your perfect game.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">8</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Quality Assurance Testing</h4>
									<p class="description text-white">It is vital to ensure that the game operates as planned. Therefore, our quality assurance team never waits until the game is done; instead, testers begin their work as soon as anything is playable to save time and make the entire process go smoothly.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">9</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Final Delivery</h4>
									<p class="description text-white">Once the entire game is thoroughly tested on multiple devices and platforms with different settings, it is set to launch in the stores on the client's approval. Again, we follow all the guidelines and have years of experience launching games on various platforms.</p>
								</div>
							</div>
						</div>
						<div class="vertical-timeline-item vertical-timeline-element">
							<div>
								<span class="vertical-timeline-element-icon bounce-in">
									<div class="numbers">
										<p class="number text-white">10</p>
									</div>
								</span>
								<div class="vertical-timeline-element-content bounce-in">
									<h4 class="title text-white">Support & Maintenance</h4>
									<p class="description text-white">Following the release of the game's final version, it enters the last step of the game development process – post-production – which includes discovering and squashing defects and frequent software or content upgrades.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>




<!--End Process-->

<!--Start Tech-->

<div class="techonology-used py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Technologies" class="light-bg-text bg-text mb-5">
						<h2>Technology Stack</h2>
					</div>
					<p class="mb30">We use a variety of technologies to create the perfect game based on your specifications.</p>
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-12 wow fadeIn">
				<ul class="nav nav-tabs android-tech-tabs mt-5 justify-content-center">
					@foreach($techstack as $k=>$item)

					@if($k==0)
					<li class="nav-item">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo nav-link active">
							 <img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack" width="100%" height="100%">
						</a>
					</li>

					@else

					<li class="nav-item">
						<a data-bs-toggle="tab" href="#a{{$item['id']}}" class="boximageicon-seo nav-link">
							 <img loading="lazy" src="uploads/{{$item['image']}}" alt="Tech Stack" width="100%" height="100%">
						</a>
					</li>
					@endif
					@endforeach
				</ul>

				<div class="tab-content tab-body mt-4">

					@foreach($techstack as $k=>$items)
					@if($k==0)
					<div id="a{{$items['id']}}" class="tab-pane fade in active">
						<div class="boxseo-data text-start">
							 <img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo" width="100%" height="100%">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>
							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@else
					<div id="a{{$items['id']}}" class="tab-pane fade">
						<div class="boxseo-data text-start">
							 <img loading="lazy" src="uploads/{{$items['image']}}" alt="{{$items['heading']}} Logo" width="100%" height="100%">
							<h3 class="font-size-24 mt-0 head-size">{{$items['heading']}}</h3>

							<p class="mt-4">{{$items['content']}}</p>
						</div>
					</div>

					@endif

					@endforeach
				</div>
			</div>
		</div>
</div>
	<!--End Tech-->

	<!--Start Let's Work Together-->
	<section class="my-3">
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
											<p class="text-center pt-2">{{$item['content']}}</p>
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
	<section class="my-2">
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
			<div class="row mt100">
				<div class="col-sm-12 wow fadeIn">
					<div class="accordion" id="accordionExample-a">
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-b">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1a" aria-expanded="true" aria-controls="collapseOne">
									How is my game application idea protected?
								</button>
							</h2>
							<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>A Non-Disclosure Agreement (NDA) is a legally binding document that we use to ensure that your ideas are not copied or leaked to competitors when working on other projects. As a result, you should be less worried about the safety of your game concept.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
									How long does it take to develop a game?
								</button>
							</h2>
							<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Most current PC or console games take three to five years to build, but a mobile game may be created in months. Various factors impact the duration of game development, such as; production time, including genre, scope, development platform, and asset count.</p>
										<p class="pt-2">The scale primarily determines the number of features, levels, visual assets, and technological sophistication of the game and the team's size, talent, and stability. For example, the average casual game usually takes 2–6 months to create, but the average AAA game takes 18–36 months to develop.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
									Which tools and technologies do you use?
								</button>
							</h2>
							<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>We use various technologies to create the perfect game based on your specifications.</p>
										<p class="pt-2">Technologies We Used For Game Development:</p>
										<ul class="ps-5">
											<li>Unity</li>
											<li>Unreal Engine</li>
											<li>HTML5</li>
											<li>Java/J2EE</li>
											<li>Swift</li>
											<li>Photon</li>
											<li>WebRTC</li>
											<li>Ejjaberd</li>
											<li>AWS</li>
											<li>Google App Engine</li>
											<li>Azure</li>
											<li>Python</li>
											<li>Node.js</li>
											<li>Lens Studio</li>
											<li>Amazon Sumerian</li>
											<li>Vuforia</li>
											<li>ARToolkit</li>
											<li>Spark AR</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
									Do you provide ongoing support, maintenance, and updates?
								</button>
							</h2>
							<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>AppsNation is here to help businesses grow and thrive. As a result, we provide three months of free support and maintenance to keep your game updated and bug-free. Furthermore, the assistance term can be extended or modified based on the customer's needs.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion-item bdr0">
							<h2 class="accordion-header" id="heading-c">
								<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
									How Much Does It Really Cost to Create a Mobile Game?
								</button>
							</h2>
							<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
								<div class="accordion-body">
									<div class="data-reqs">
										<p>Mobile games are often developed for the iOS and Android platforms, with expenses ranging from $ 3,000 for basic mini-games to $ 150,000 for more complicated, multi-player games. Prices can also vary based on the features you wish to include, payment methods, administrative functions, game kind and complexity, marketing, and the development studio.</p>
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