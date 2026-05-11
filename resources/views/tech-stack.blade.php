@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 tech-stack-banner">
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
						<h1 class="text-white">Tech Stack</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!--Start Tech-->
<section class="technologies-stack py-5 mt-5">
	<div class="container">
		<div class="row fadeIn">
			<div class="col-12">
				<div class="common-heading">
					<div data-text="Technologies" class="light-bg-text bg-text text-center">
						<h2 class="mb30 text-center"><span>Technologies</span> We Work With</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row wow fadeIn">
			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">App Development</h3>
								<p class="text-center pt-2">For App development, our developers use the latest technologies, which provide top notch app development solution.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/apple-logo.webp" alt="iOS Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">iOS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/android-logo.webp" alt="Android Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Android</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/flutter-logo.webp" alt="Flutter Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Flutter</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/ionic-logo.webp" alt="Ionic Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Ionic</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/swift-logo.webp" alt="Swift Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Swift</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/kotlin-logo.webp" alt="Kotlin Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Kotlin</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/objective-c-logo.webp" alt="Objective C Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Objective C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">React Native</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/google-fit-sdk.webp" alt="Google Fit SDK Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Google Fit SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/xcode-logo.webp" alt="XCode Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">XCode</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/node-red-logo.webp" alt="Node-Red Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Node-Red</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/alamofire-logo.webp" alt="Alamofire Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Alamofire</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/graphql-logo.webp" alt="Graph QL Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Graph QL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/grafana-logo.webp" alt="Grafana Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Grafana</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/tensorflow-logo.webp" alt="Tensor Flow Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Tensor Flow</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/tableau-logo.webp" alt="Tableau Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Tableau</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/android-sdk-logo.webp" alt="Android SDK Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Android SDK</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/apache-kafka-logo.webp" alt="Apache Kafka Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Apache Kafka</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/android-studio.webp" alt="Android Studio Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Android Studio</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/xamarin-native-c-logo.webp" alt="Xamarin Native C Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Xamarin Native C</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/amazon-sumerian-logo.webp" alt="Amazon Sumerian Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Amazon Sumerian</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/apache-hadoop-logo.webp" alt="Apache Hadoop Logo" class="tech-logo" width="100%" height="100%"
										>
										<h4 class="mt-2">Apache Hadoop</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Frontend Development</h3>
								<p class="text-center pt-2">To make the interactive user interface, our developers use all proven tools and languages that are helpful to enhance user focus and grab their attention.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/angular-logo.webp" alt="Angular Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Angular JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/react-native-logo.webp" alt="React Native Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">React JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/html-logo.webp" alt="HTML Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">HTML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/css-logo.webp" alt="CSS Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">CSS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/js-logo.webp" alt="JavaScript Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">JavaScript</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/next-js-logo.webp" alt="Next JS Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Next JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/json-logo.webp" alt="JSON Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">JSON</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/rest-logo.webp" alt="Rest Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Rest</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/soap-logo.webp" alt="Soap Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Soap</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/xml-logo.webp" alt="XML Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">XML</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/spark-ml-logo.webp" alt="Spark ML Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Spark ML</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Database Development</h3>
								<p class="text-center pt-2">Our database experts are trained to provide robust database management solutions. We use all modern technologies to provide you secure database solution.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/firebase-logo.webp" alt="Firebase Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Firebase</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/sqlite-logo.webp" alt="SQLite Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">SQLite</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/core-data-logo.webp" alt="CoreData Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">CoreData</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/realm-logo.webp" alt="Realm Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Realm</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/mysql-logo.webp" alt="MySQL Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">MySQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/sql-logo.webp" alt="SQL Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">SQL</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/opentsdb-logo.webp" alt="OpenTSDB Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">OpenTSDB</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Backend Development</h3>
								<p class="text-center pt-2">Backend development is key that makes you unable to automate your system. Our backend developers use all modern techniques to develop top-notch solutions.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider1 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/php-logo.webp" alt="PHP Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">PHP</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/java-logo.webp" alt="Java Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Java</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/node-js-logo.webp" alt="Node JS Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Node JS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/python-logo.webp" alt="Python Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Python</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/c-sharp-logo.webp" alt="C# Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">C#</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/c++-logo.webp" alt="C/C++ Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">C/C++</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">CMS Development</h3>
								<p class="text-center pt-2">Our CMS engineers have first-hand knowledge of putting in place specialized solutions that make it easier to create, store, organize, edit, and publish web content.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/wordpress-logo.webp" alt="WordPress Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">WordPress</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/magento-logo.webp" alt="Magento Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Magento</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/shopify-logo.webp" alt="Shopify Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Shopify</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card h-100 ">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Infra and Devops Development</h3>
								<p class="text-center pt-2">The utilization of the most recent technologies and techniques by our infrastructure and DevOps developers improve an organization's capacity to offer apps and services at a highspeed.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/aws-logo.webp" alt="AWS Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">AWS</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/azure-logo.webp" alt="Azure Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Azure</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/google-cloud-logo.webp" alt="Google Cloud Logo" class="tech-logo" width="100%" height="100%">
										<h4 class="mt-2">Google Cloud</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- <div class="col-lg-6 mt-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">Games Development</h3>
								<p class="text-center pt-2">Our game developers use the most recent technology to define a game's concept, production, and publication. They are incredibly competent in the art of game creation.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider2 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/unreal-engine-logo.webp" alt="Unreal Engine Logo" class="tech-logo">
										<h4 class="mt-2">Unreal Engine</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/unity-logo.webp" alt="Unity Logo" class="tech-logo">
										<h4 class="mt-2">Unity</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/cryengine-logo.webp" alt="CRYENGINE Logo" class="tech-logo">
										<h4 class="mt-2">CRYENGINE</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 mt-4">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="con-h">
								<h3 class="text-center">AR/VR Development</h3>
								<p class="text-center pt-2">Our AR/VR developer uses cutting-edge technology, whereas a VR developer builds entirely new digital worlds for consumers to view through a device, while an AR developer builds a layer of digital experience using mobile applications in our actual world.</p>
							</div>
						</div>
						<div class="row pt-3">
							<div class="tech-slider3 owl-carousel">
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/artoolkit-logo.webp" alt="ARToolkit Logo" class="tech-logo">
										<h4 class="mt-2">ARToolkit</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/oculus-logo.webp" alt="Oculus Logo" class="tech-logo">
										<h4 class="mt-2">Oculus</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/photon-logo.webp" alt="Photon Logo" class="tech-logo">
										<h4 class="mt-2">Photon</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/vuforia-logo.webp" alt="Vuforia Logo" class="tech-logo">
										<h4 class="mt-2">Vuforia</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/arkit-logo.webp" alt="ARKit Logo" class="tech-logo">
										<h4 class="mt-2">ARKit</h4>
									</div>
								</div>
								<div class="tech-item">
									<div class="item">
										<img loading="lazy" src="images/tech/arcore-logo.webp" alt="ARCore Logo" class="tech-logo">
										<h4 class="mt-2">ARCore</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<!-- <div class="row">
			<div class="col-lg-12 fadeInDown">
				<ul class="nav nav-tabs justify-content-center" role="tablist">
					<li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#mobile">Mobile</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#frontend">Frontend</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#database">Database</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#backend">Backend</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cms">CMS</a> </li>
					<li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#infra">Infra and Devops</a> </li>
				</ul>
				<div class="tab-content">
					<div id="mobile" class="container tab-pane active">
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/apple-logo.webp" alt="ios-logo" class="tech-logo">
								<h6>iOS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/android-logo.webp" alt="android-logo" class="tech-logo">
								<h6>Android</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/react-native-logo.webp" alt="react-native-logo" class="tech-logo">
								<h6>React Native</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/flutter-logo.webp" alt="flutter-logo" class="tech-logo">
								<h6>Flutter</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img loading="lazy" src="images/tech/ionic-logo.webp" alt="ionic-logo" class="tech-logo">
								<h6>Ionic</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img loading="lazy" src="images/tech/swift-logo.webp" alt="swift-logo" class="tech-logo">
								<h6>Swift</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp"> <img loading="lazy" src="images/tech/kotlin-logo.webp" alt="kotlin-logo" class="tech-logo">
								<h6>Kotlin</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp"> <img loading="lazy" src="images/tech/objective-c-logo.webp" alt="objective-c-logo" class="tech-logo">
								<h6>Objective C</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-4 text-center fadeInUp"> <img loading="lazy" src="images/tech/windows-logo.webp" alt="windows-logo" class="tech-logo">
								<h6>Windows</h6>
							</div>
						</div>
					</div>
					<div id="frontend" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/angular-logo.webp" alt="angular-js-logo" class="tech-logo">
								<h6>Angular JS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/react-native-logo.webp" alt="react-js-logo" class="tech-logo">
								<h6>React JS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/type-script-logo.webp" alt="type-script-logo" class="tech-logo">
								<h6>TypeScript</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/vue-js-logo.webp" alt="vue-js-logo" class="tech-logo">
								<h6>Vue</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img loading="lazy" src="images/tech/html-logo.webp" alt="html5-logo" class="tech-logo">
								<h6>HTML5</h6>
							</div>
						</div>
					</div>
					<div id="database" class="container tab-pane fade">
						<br>
						<div class="row mt-3 justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/mangodb-logo.webp" alt="mangodb-logo" class="tech-logo">
								<h6>Mongo DB</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/mysql-logo.webp" alt="mysql-logo" class="tech-logo">
								<h6>MySQL</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/mssql-logo.webp" alt="mssql-logo" class="tech-logo">
								<h6>MsSQL Logo</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/firebase-logo.webp" alt="firebase-logo" class="tech-logo">
								<h6>Firebase</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img loading="lazy" src="images/tech/dynamodb-logo.webp" alt="dynamodb-logo" class="tech-logo">
								<h6>Dynamodb</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div mt-md-4 mt-lg-0 text-center fadeInUp"> <img loading="lazy" src="images/tech/redis-logo.webp" alt="redis-logo" class="tech-logo">
								<h6>Redis</h6>
							</div>
						</div>
					</div>
					<div id="backend" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/php-logo.webp" alt="php-logo" class="tech-logo">
								<h6>PHP</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/java-logo.webp" alt="java-logo" class="tech-logo">
								<h6>Java</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/node-js-logo.webp" alt="node-js-logo" class="tech-logo">
								<h6>Node JS</h6>
							</div>
						</div>
					</div>
					<div id="cms" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/wordpress-logo.webp" alt="wordpress-logo" class="tech-logo">
								<h6>WordPress</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/magento-logo.webp" alt="magento-logo" class="tech-logo">
								<h6>Magento</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 tech-div text-center fadeInUp"> <img loading="lazy" src="images/tech/shopify-logo.webp" alt="shopify-logo" class="tech-logo">
								<h6>Shopify</h6>
							</div>
						</div>
					</div>
					<div id="infra" class="container tab-pane fade">
						<br>
						<div class="row mt-3 d-flex justify-content-center">
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/aws-logo.webp" alt="aws-logo" class="tech-logo">
								<h6>AWS</h6>
							</div>
							<div class="col-6 col-sm-4 col-md-3 col-lg-2 text-center fadeInUp"> <img loading="lazy" src="images/tech/azure-logo.webp" alt="azure-logo" class="tech-logo">
								<h6>Azure</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<!--End Tech-->

@endsection