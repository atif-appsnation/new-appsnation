@extends('app.main')
@section('content')
<!--Start Breadcrumb Area -->
<section class="breadcrumb-areav2 e-commerce-app-banner">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 my-auto wow fadeIn">
				<div class="bread-titlev2">
					<h1 class="banner-heading pt-3" data-wow-delay=".2s">Ecommerce Mobile App Development Company</h1>
					<p class="mt20 text-white" data-wow-delay=".4s"><a href="{{url('/')}}" target="_blank">AppsNation</a> focuses on creating <a href="{{url('/ecommerce-and-retail')}}" target="_blank">E-commerce solutions</a> that are both technically powerful and unique in the market, giving you a competitive advantage. You require someone to manage your existing digital assets and provide your company with a positive client experience.</p>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 wow fadeIn">
				 <img loading="lazy" src="images/services/e-commerce-app-development/e-commerce-app-banner-img.webp" class="img-fluid" alt="E-Commerce App Development" width="100%" height="100%">
			</div>
		</div>
	</div>
	</div>
</section>
<!--End Breadcrumb Area -->

<!--Start About -->
<section  id="mycounterSection"  class="service py-5">
	<div class=" container">
		<div class="row">
			<div class="col-lg-5 wow fadeIn">
				<div class="image-block">
					 <img loading="lazy" src="images/services/e-commerce-app-development/e-commerce-app-development.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
				</div>
			</div>
			<div class="col-lg-7 block-1 wow fadeIn my-auto">
				<div class="common-heading text-l pl25">
					<div data-text="ECommerce" class="light-bg-text bg-text">
						<h2>Scale-Up With Our<br> <span class="flup-theme">E-Commerce Application Development Services</span></h2>
					</div>
					<p><a href="{{url('/')}}" target="_blank">AppsNation</a> is a custom <a href="{{url('/e-commerce-app-development')}}" target="_blank">e-Commerce development company</a> that specialises in creating beautiful platforms and accelerating e-Commerce initiatives.</p>
					<p>As a reputable ecommerce website design company, we unlock the power of eCommerce platforms to provide you with feature-rich, distinctive, and dependable eCommerce websites.</p>
					<p>Using Drupal, Magento development, WooCommerce, Shopify, and BigCommerce, our skilled team of highly qualified <a href="{{url('/web-app-development')}}" target="_blank">web developers</a> produces customer-focused digital products Ecommerce web apps.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center   wow fadeIn  achievements-count mt-3 " style="visibility: visible; animation-name: fadeIn;">
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
<!--End About -->

<!--Start Service -->
<section class="service-section-app py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Our Services" class="light-bg-text bg-text">
						<h2>Our Unrivaled <span>E-Commerce Development</span> Services</h2>
					</div>
					<p>Empower your online business with cutting-edge e-commerce solutions designed for seamless user experiences and accelerated growth. Our expertise in e-commerce development ensures secure, scalable, and high-performing platforms that drive conversions and customer engagement. Leverage the latest technologies to create a digital marketplace that stands out in the competitive landscape.</p>
				</div>
			</div>
		</div>
		<div class="row mt-5 flex justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/custom-e-commerce-development.svg" alt="Custom E-Commerce Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Custom E-Commerce Development</h4>
					</div>
					<div class="services-text-div">
						<p>We build tailored eCommerce solutions for startups and enterprises, helping you choose the right technology platform to create scalable, high-performing digital products.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/m-commerce-services.svg" alt="M-commerce Services" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>M-commerce Services</h4>
					</div>
					<div class="services-text-div">
						<p>We deliver mobile commerce solutions with features like online ordering, secure payments, location tracking, delivery apps, and real-time updates for seamless user experiences.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/development-of-multi-store-e-commerce-platform.svg" alt="Development of Multi Store E-Commerce Platform" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Development of Multi Store E-Commerce Platform</h4>
					</div>
					<div class="services-text-div">
						<p>We create scalable multi-store eCommerce platforms that manage multiple businesses efficiently, ensuring smooth operations and centralized control.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 mt- wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/custom-e-commerce-design-and-development.svg" alt="Custom E-Commerce Design and Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Custom E-Commerce Design and Development</h4>
					</div>
					<div class="services-text-div">
						<p>Our team builds fully customized eCommerce solutions with advanced features, ERP integrations, and flexible designs tailored to your brand and business goals.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/magento-e-commerce-development.svg" alt="Magento E-Commerce Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Magento E-Commerce Development</h4>
					</div>
					<div class="services-text-div">
						<p>We develop scalable Magento solutions that are flexible, user-friendly, and designed to support business growth with advanced eCommerce capabilities.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/saas-e-commerce-solutions.svg" alt="SAAS E-Commerce Solutions" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>SAAS E-Commerce Solutions</h4>
					</div>
					<div class="services-text-div">
						<p>Our SaaS eCommerce solutions offer seamless front-end and back-end integration, enabling faster deployment and easy scalability for your online business.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/modules-and-plugins-development.svg" alt="Modules and Plugins Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Modules and Plugins Development</h4>
					</div>
					<div class="services-text-div">
						<p>We develop high-quality plugins and modules for platforms like WooCommerce, Magento, Drupal, WordPress, and Joomla to enhance functionality.
							.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/data-analytics.svg" alt="Data Analytics" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h4>Data Analytics</h4>
					</div>
					<div class="services-text-div">
						<p>We use advanced analytics tools to transform complex data into actionable insights, helping businesses make smarter decisions and improve performance.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start Service -->
<section class="service-section py-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/maintenance-and-migration.svg" alt="Maintenance & Migration" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Maintenance & Migration</h3>
					</div>
					<div class="services-text-div">
						<p>We provide reliable maintenance and smooth migration services to ensure your website or application runs efficiently without downtime or data loss.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/e-commerce-integration.svg" alt="E-commerce Integrations" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>E-commerce Integrations</h3>
					</div>
					<div class="services-text-div">
						<p>We integrate systems like CRM, ERP, CMS, and POS to streamline workflows and create a unified, efficient business ecosystem.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/e-commerce-recommendation-system.svg" alt="E-commerce Recommendation System" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>E-commerce Recommendation System</h3>
					</div>
					<div class="services-text-div">
						<p>We implement AI-powered recommendation engines that suggest products based on user behavior, preferences, and purchase history.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/marketplace-development.svg" alt="Marketplace Development" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Marketplace Development</h3>
					</div>
					<div class="services-text-div">
						<p>We build robust marketplace platforms that allow you to onboard sellers quickly and manage operations efficiently from a single system.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/shopping-cart-development.svg" alt="Shopping Cart Developments" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Shopping Cart Development</h3>
					</div>
					<div class="services-text-div">
						<p>We create secure and user-friendly shopping cart solutions with smooth checkout experiences and optimized performance for better conversions.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/online-store-customization.svg" alt="Online Store Customization" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Online Store Customization</h3>
					</div>
					<div class="services-text-div">
						<p>We customize online stores with innovative features and designs, ensuring high performance and alignment with your business goals.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/payment-gateway-integration.svg" alt="Payment Gateway Integration" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Payment Gateway Integration</h3>
					</div>
					<div class="services-text-div">
						<p>We integrate secure payment gateways compliant with PCI DSS standards to ensure safe, fast, and reliable transactions.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/application-maintenance-and-support.svg" alt="Application Maintenance and Support" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Application Maintenance and Support</h3>
					</div>
					<div class="services-text-div">
						<p>We offer continuous maintenance and support services to keep your eCommerce apps updated, secure, and aligned with evolving business needs.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/customize-and-optimize-existing-e-commerce-applications.svg" alt="Customize and Optimize Existing E-Commerce Applications" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>E-Commerce Optimization & Customization</h3>
					</div>
					<div class="services-text-div">
						<p>We optimize existing eCommerce applications with advanced cloud technologies to improve performance, scalability, and overall efficiency.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Service -->

<!--Start About -->
<section class="service py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Core Expertise" class="light-bg-text bg-text">
						<h2>Our <span>E-Commerce</span> Core Expertise</h2>
					</div>
					<p>We offer e-commerce applications in several formats:</p>
				</div>
			</div>
		</div>
		<div class="row mt70">
			<div class="col-12">
				<ul class="nav nav-pills justify-content-center custom-pills">
					<li class="nav-item">
						<a class="nav-link active" data-bs-toggle="pill" href="#b2b">B2B</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#b2c">B2C</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#c2c">C2C</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#c2b">C2B</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="pill" href="#b2a">B2A</a>
					</li>
					<li class="nav-item">
						<a class="nav-link mt-3 mt-md-0" data-bs-toggle="pill" href="#c2a">C2A</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="b2b">
						<div class="row">
							<div class="col-lg-6">
								<div class="image-block">
									 <img loading="lazy" src="images/services/e-commerce-app-development/b2b.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
								</div>
							</div>
							<div class="col-lg-6 block-1 my-auto">
								<div class="common-heading text-l pl25">
									<h3>Business to Business E-commerce (B2B) Application</h3>
									<p>Accelerate your digital transformation with B2B e-commerce solutions. Quickly persuade and convert. Branding that is consistent. Channels of information that are very engaging and appealing.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="b2c">
						<div class="row">
							<div class="col-lg-6">
								<div class="image-block">
									 <img loading="lazy" src="images/services/e-commerce-app-development/b2c.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
								</div>
							</div>
							<div class="col-lg-6 block-1 my-auto">
								<div class="common-heading text-l pl25">
									<h3>Business to Consumer E-Commerce (B2C) Application</h3>
									<p>With our mobile-based B2C e-commerce solutions, you can provide a better buying experience. Catalogues that are appealing. Shopping carts with artificial intelligence. Interfaces that change the game.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="c2c">
						<div class="row">
							<div class="col-lg-6">
								<div class="image-block">
									 <img loading="lazy" src="images/services/e-commerce-app-development/c2c.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
								</div>
							</div>
							<div class="col-lg-6 block-1 my-auto">
								<div class="common-heading text-l pl25">
									<h3>Consumer to Consumer E-Commerce (C2C) Application</h3>
									<p>Create a user-friendly e-commerce mobile app that provides a better shopping experience so that users may sell products and services to one another.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="c2b">
						<div class="row">
							<div class="col-lg-6">
								<div class="image-block">
									 <img loading="lazy" src="images/services/e-commerce-app-development/c2b.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
								</div>
							</div>
							<div class="col-lg-6 block-1  my-auto">
								<div class="common-heading text-l pl25">
									<h3>Consumer to Business E-Commerce (C2B) Application</h3>
									<p>Create a user-friendly interface for your customers to provide direct feedback or product suggestions to your company.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="b2a">
						<div class="row">
							<div class="col-lg-6">
								<div class="image-block">
									 <img loading="lazy" src="images/services/e-commerce-app-development/b2a.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
								</div>
							</div>
							<div class="col-lg-6 block-1 my-auto">
								<div class="common-heading text-l pl25">
									<h3>Business to Administration E-Commerce (B2A) Application</h3>
									<p>Development of cutting-edge e-commerce mobile apps to let businesses communicate with government agencies and administration for improved tendering and contracting.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane container fade" id="c2a">
						<div class="row">
							<div class="col-lg-6">
								<div class="image-block">
									 <img loading="lazy" src="images/services/e-commerce-app-development/c2a.webp" alt="image" class="img-fluid no-shadow" width="100%" height="100%">
								</div>
							</div>
							<div class="col-lg-6 block-1 my-auto">
								<div class="common-heading text-l pl25">
									<h3>Consumer to Administration E-Commerce (C2A) Application</h3>
									<p>Create a user-friendly mobile experience that allows your customers to contact directly with administration for information and utility purposes and usage.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End About -->

<!--Start E-Commerce Data Security -->
<section class="service-section web-servic py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading wow fadeIn">
					<div data-text="Data Security" class="light-bg-text bg-text">
						<h2 class="mb80">We Do Best Practices for <span>E-Commerce</span> Data Security</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 flex justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/avoid-storing-sensitive-data.svg" alt="Avoid Storing Sensitive Data" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Avoid Storing Sensitive Data</h3>
					</div>
					<div class="services-text-div">
						<p>We avoid storing sensitive data like banking or credit card details to reduce security risks and protect users from potential cyberattacks.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/integrate-trusted-payment-processors.svg" alt="Integrate Trusted Payment Processors" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Integrate Trusted Payment Processors</h3>
					</div>
					<div class="services-text-div">
						<p>We use secure and trusted payment gateways to ensure every step of the transaction process is protected and user financial data stays safe.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/two-factor-authentication.svg" alt="Two-Factor Authentication" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Two-Factor Authentication</h3>
					</div>
					<div class="services-text-div">
						<p>We implement two-factor authentication to add an extra layer of security, protecting accounts from unauthorized access and threats.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/updated-platform-frameworks-and-libraries.svg" alt="Updated Platform, Frameworks, & Libraries" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Updated Platform, Frameworks, & Libraries</h3>
					</div>
					<div class="services-text-div">
						<p>We keep all platforms, frameworks, and libraries updated to prevent vulnerabilities and ensure your eCommerce system remains secure and stable.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End E-Commerce Data Security -->

<!--Start Advanced Features -->
<section class="service-block py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Data Security" class="light-bg-text bg-text">
						<h2 class="mb100">Advanced Features Of Our <span>E-Commerce App</span> that Maximise User Base</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt100">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/smart-search.svg" alt="Smart Search" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Advanced Search & Filtering
						</h3>
					</div>
					<div class="services-text-div">
						<p>We implement smart search with filters, sorting, and advanced algorithms to help users quickly find products, improving navigation and boosting conversions.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/instant-support.svg" alt="Instant Support" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Instant Support</h3>
					</div>
					<div class="services-text-div">
						<p>We build powerful chatbot solutions that enable real-time communication, helping businesses provide instant support while saving time and effort.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/multiple-payment-options.svg" alt="Multiple Payment Options" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Multiple Payment Options</h3>
					</div>
					<div class="services-text-div">
						<p>We integrate multiple payment methods like net banking, credit cards, and debit cards to provide users with a convenient and flexible checkout experience.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/social-media-integration.svg" alt="Social Media Integration" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Social Media Integration</h3>
					</div>
					<div class="services-text-div">
						<p>We enable social media integration for quick login, easy sharing, and promoting offers, helping boost brand visibility and user engagement.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/quick-checkout.svg" alt="Quick Checkout" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Quick Checkout</h3>
					</div>
					<div class="services-text-div">
						<p>We optimize checkout processes to be fast and simple, reducing cart abandonment and improving overall user experience and conversions.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/e-wallet.svg" alt="E-Wallet" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>E-Wallet Integration
						</h3>
					</div>
					<div class="services-text-div">
						<p>We integrate secure digital wallets to enable fast payments, easy checkouts, EMI options, and a smooth shopping experience.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/chatbots.svg" alt="Chatbots" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Chatbots Integration
						</h3>
					</div>
					<div class="services-text-div">
						<p>We develop AI-powered chatbots that provide 24/7 support, enhance customer engagement, and improve service by guiding users effectively.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/pos-integration.svg" alt="POS Integration" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>POS Integration</h3>
					</div>
					<div class="services-text-div">
						<p>We integrate Point-of-Sale systems to streamline operations, improve sales tracking, and connect online and offline business processes.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card gradient-border">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/erp-crm-integration.svg" alt="ERP/CRM Integration" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>ERP & CRM Integration</h3>
					</div>
					<div class="services-text-div">
						<p>We connect ERP and CRM systems to ensure automated data flow, centralized information, and better business decision-making.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Advanced Features -->
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

<!--Start Let's Work Together-->
<section class="my-3">
	<div class="container">

		<div class="row py-5 justify-content-center hire-developer">
			<div class="col-lg-9">
				<div class="free-cta-title v-center wow fadeIn">
					<div class="row justify-content-center">
						<div class="col-lg-8 my-auto">
							<p class="text-center text-lg-start">Hire a <span>Dedicated Developer.</span> </p>
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

<!--Start Why Choose -->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">AppsNation is a global leader in the design, launch, and optimization of eCommerce applications, enabling businesses to take advantage of the increasing online purchasing market while also delighting their consumers with innovative features. </p>
				</div>
			</div>
		</div>
		<div class="row mt-5 flex justify-content-center">
			<div class="col-sm-12 col-md-12 col-lg-4 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/scalable-solutions.svg" alt="Scalable Solutions" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Scalable Solutions</h3>
					</div>
					<div class="services-text-div">
						<p>We provide scalable eCommerce solutions that grow with your business, ensuring flexibility, performance, and the ability to handle increasing users and transactions.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/mobile-friendly.svg" alt="Mobile Friendly" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Mobile Friendly</h3>
					</div>
					<div class="services-text-div">
						<p>We create mobile-optimized websites that improve SEO rankings and deliver seamless shopping experiences for users on all devices.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 mt-lg-0 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/superior-ui-ux.svg" alt="Superior UI/UX" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Superior UI/UX</h3>
					</div>
					<div class="services-text-div">
						<p>We design fast, intuitive interfaces that guide users smoothly from browsing to checkout, enhancing engagement and boosting conversions.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3   wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/quick-deployment.svg" alt="Quick Deployment" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Quick Deployment</h3>
					</div>
					<div class="services-text-div">
						<p>We ensure fast deployment of your eCommerce platform, helping you launch quickly and start reaching customers without delays.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/specialized-in-e-commerce.svg" alt="Specialized in E-Commerce" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Specialized in E-Commerce</h3>
					</div>
					<div class="services-text-div">
						<p>Our expert developers specialize in eCommerce, delivering high-quality solutions that drive growth and ensure successful outcomes.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/innovative-designs.svg" alt="Innovative Designs" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Innovative Designs</h3>
					</div>
					<div class="services-text-div">
						<p>We deliver creative and feature-rich designs with advanced functionality, custom integrations, and engaging user experiences.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/on-time-delivery.svg" alt="On-time Delivery" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>On-time Delivery</h3>
					</div>
					<div class="services-text-div">
						<p>We are committed to delivering your project on schedule, ensuring timely completion without compromising quality.
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-4 mt-3 wow fadeIn">
				<div class="service-card-app home-services gradient-border h-100">
					<div class="services-img-div">
						 <img loading="lazy" src="images/services/e-commerce-app-development/dedicated-team.svg" alt="Dedicated Team" class="img-fluid" width="100%" height="100%">
					</div>
					<div class="service-heading">
						<h3>Dedicated Team</h3>
					</div>
					<div class="services-text-div">
						<p>Our dedicated team provides ongoing support, aligned with your time zone, along with post-deployment assistance for smooth operations.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Why Choose -->

<!--Start Process-->
 
<section class="py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>E-Commerce App</span> Development Process</h2>
					</div>
					<p>AppsNation offers clients an easy and agile android app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row mt30 g-4">

			<!-- Repeat Card -->
			<div class="col-12 col-md-6 col-lg-4">
				<div class="modern-card">
					 <img loading="lazy" src="images/services/e-commerce-app-development/Consultancy.jpg" alt="Consultancy" class="w-100 h-100">
					<div class="overlay">
						<h4>01. Consultancy</h4>
						<p>We provide expert consultation to understand your business goals and recommend the best eCommerce app solutions for optimal results.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="modern-card">
					 <img loading="lazy" src="images/services/e-commerce-app-development/requirement-analysis.jpg" alt="requirement analysis" class="w-100 h-100">

					<div class="overlay">
						<h4>02. Requirement Analysis</h4>
						<p>We analyze your business needs, target audience, and goals to plan a tailored eCommerce app that fits your requirements perfectly.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="modern-card">
					 <img loading="lazy" src="images/services/e-commerce-app-development/wireframing.jpg" alt="wireframing" class="w-100 h-100">

					<div class="overlay">
						<h4>03. Wireframing</h4>
						<p>We create detailed wireframes for each screen and feature, giving you a clear structure of the app before development begins.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="modern-card">
					 <img loading="lazy" src="images/services/e-commerce-app-development/design-and-development.jpg" alt="design and development" class="w-100 h-100">

					<div class="overlay">
						<h4>04. Design & Development</h4>
						<p>Our designers and developers build visually appealing, high-performing apps optimized for both Android and iOS platforms.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="modern-card">
					 <img loading="lazy" src="images/services/e-commerce-app-development/testing-and-review.jpg" alt="testing and review" class="w-100 h-100">

					<div class="overlay">
						<h4>05. Testing & Review
						</h4>
						<p>We thoroughly test the app to fix bugs, improve performance, and ensure it meets quality and functionality standards.
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-lg-4">
				<div class="modern-card">
					 <img loading="lazy" src="images/services/e-commerce-app-development/Deploying.jpg" alt="Deploying" class="w-100 h-100">

					<div class="overlay">
						<h4>06. Deployment</h4>
						<p>Once approved, we launch your app on the App Store and Play Store, ensuring compliance with all guidelines.
						</p>
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
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Technologies" class="light-bg-text bg-text mb-5">
						<h2>Technology Stack</h2>
					</div>
					<p class="mb30">We build cross-platform mobile apps using a scalable and robust technology stack to produce high-quality apps.</p>
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
	<section class="my-3">
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

</div>
</section>
<!--End Testinomial-->

<!--Start FAQS-->
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
								What is E-Commerce development?
							</button>
						</h2>
						<div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Ecommerce development is the process of correctly structuring and operating an online retail firm. Various components of the process are covered, including increasing supplies, cooperating with a transportation firm, and expanding the network.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								Which technology is the best for E-Commerce application development?
							</button>
						</h2>
						<div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Front-end and back-end technologies are critical for eCommerce website development. The front-end is responsible for app development, while the back-end is responsible for the organization's digital foundations and management. Another technological consideration is the operating system (OS), such as macOS, Microsoft Windows, or Android, on which the entire system can run.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to build an E-Commerce application?
							</button>
						</h2>
						<div id="collapse-3a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Because there are so many variables to designing an eCommerce website, the pricing might vary greatly. The cost of development is also determined by the size of the website and the options available to customers.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Can my E-Commerce application be hacked/ attacked by a virus?
							</button>
						</h2>
						<div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes, your eCommerce website can be easily hacked and infected with a virus. Websites are frequently targeted by hackers as a source of large amounts of data.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Does your company offer custom E-Commerce application development solutions?
							</button>
						</h2>
						<div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes, our company provides a bespoke E-Commerce development service that can assist you in effectively managing your business.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much time will it take to develop an E-Commerce application?
							</button>
						</h2>
						<div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>In most cases, an efficient team can create a high-performing E-Commerce website in 6 to 10 weeks.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Will I get dedicated resources for my project?
							</button>
						</h2>
						<div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>When it comes to E-Commerce website development, you may rest assured that the project will be adequately resourced. You can clarify your vision for the E-Commerce business and the goal you want to attain while speaking with our executives.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								Do you provide E-Commerce application development services in the USA?
							</button>
						</h2>
						<div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Yes, AppsNation provides E-Commerce development services in the United States. All you have to do is go to our website and look up our contact information. You can reach out to our team directly for assistance with the E-Commerce development process.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Will you support me after the E-Commerce application is developed?
							</button>
						</h2>
						<div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>All of the company's leaders have extensive expertise designing E-Commerce websites. Our devoted team will work with you to minimise any negative situations that arise as a result of an issue with your website.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								Why choose AppsNation as an E-Commerce development company for online store development?
							</button>
						</h2>
						<div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>With their E-Commerce knowledge, development, and execution skills, AppsNation has altered a number of organisations. This ability benefits E-Commerce businesses, allowing them to pursue the route of recognition and achievement.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
								Which platform is best for E-Commerce web development for my project?
							</button>
						</h2>
						<div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>The challenge of selecting a platform necessitates the advice of a professional. Experts can look at a variety of aspects, including functions, design, structure, and features, to determine which platform is best for your E-Commerce web development project.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
								How can I hire E-Commerce website developers from AppsNation?
							</button>
						</h2>
						<div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>With only a few clicks, you can hire an E-Commerce website developer from AppsNation. You can either send us an email or call us and we will assist you.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-13a" aria-expanded="true" aria-controls="collapseOne">
								Are your E-Commerce developers certified?
							</button>
						</h2>
						<div id="collapse-13a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>Our E-Commerce programmers are certified and have a lot of experience. AppsNation is a haven for skilled and competent developers who can help your company make the most of E-Commerce dynamics.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="accordion-item bdr0">
						<h2 class="accordion-header" id="heading-c">
							<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-14a" aria-expanded="true" aria-controls="collapseOne">
								What are the benefits of hiring E-Commerce web developers?
							</button>
						</h2>
						<div id="collapse-14a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
							<div class="accordion-body">
								<div class="data-reqs">
									<p>The most obvious benefit of hiring E-Commerce web developers is that you can avoid costly mistakes. They have a brilliant grasp of what works and apply it to E-Commerce businesses. This way, the well-designed E-Commerce website might bring in much-needed revenue for your company.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End FAQS -->

<!--Start Blogs-->
<section class="blogs-section py-5">
	@if(count($data['data']) > 0)
	<div class="container">
		<div class="row mb100">
			<div class="col-lg-6">
				<div data-text="Blogs" class="light-bg-text bg-text">
					<h2 class="mb0 common-heading">Latest Stories</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach($data['data'] as $post)
			<div class="col-12 col-md-6 col-lg-4 mt30 wow fadeIn">
				<div class="card h-100">
					<a href="{{ $post['guid'] }}">
						 <img loading="lazy" src="https://blog.appsnation.co/wp-content/uploads/{{$post['featured_image_url']}}" alt="{{$post['post_title']}}" class="img-fluid">
					</a>
					<div class="entry-blog-post dg-bg2">
						<span class="bypost-">
							<a href="{{ $post['guid'] }}">
								<i class="fas fa-tag"></i> Appsnation
							</a>
						</span>
						<span class="posted-on-">
							<a href="{{ $post['guid'] }}">
								<i class="fas fa-clock"></i> {{ date('M d, Y', strtotime($post['post_date'])) }}
							</a>
						</span>
					</div>
					<div class="card-body">
						<h4 class="mb-0">
							<a href="{{ $post['guid'] }}">{{$post['post_title']}}</a>
						</h4>
					</div>
				</div>
			</div>
			@endforeach
			@else
		</div>
	</div>
	@endif
</section>

<div class="container">
	<div class="row mb-4 text-center wow fadeIn">
		<div class="col-12">
			<a href="https://blog.appsnation.co/" class="btn-main button-arounder lnk">View More
				<i class="fas fa-chevron-right fa-icon"></i>
				<span class="circle"></span>
			</a>
		</div>
	</div>
</div>
<!--End Blogs-->

@endsection