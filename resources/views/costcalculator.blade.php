@extends('app.main')
@section('content')

<!-- Start Breadcrumb -->
<section class="breadcrumb-areav2 contact-us">
	@if ($errors->has('g-recaptcha-response'))
	<div class="alert alert-danger">
		<strong>{{ $errors->first('g-recaptcha-response') }}</strong>
	</div>
	@endif

    <div class="container">
		<div class="row">
			<div class="col-lg-6 v-center wow fadeIn">
				<div class="bread-inner">
					<div class="bread-title">
						<h1 class="text-white">Cost Calculator</h1>
						<!-- <p class="text-white pt-3">We make all your dreams come true in a successful project.</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Breadcrumb -->

<!-- Start Cost Calculator -->
<section class="cost-calculator cost-calculator-new py-5">
	<div class="container">
		<div class="row">
			<div class="col-xl-8">
				<div class="wizard-form">
					<form id="example-advanced-form" action="#" role="application" class="wizard clearfix" data-hs-cf-bound="true">
						<div class="content clearfix">
							<h3>Business</h3>
							<fieldset class="form-input body current more-than-6-labels" id="example-advanced-form-p-0" role="tabpanel" aria-labelledby="example-advanced-form-h-0" aria-hidden="false" style="display: block;">
								<div class="text-cont">
									<h2>Choose Your <span>Business</span></h2>
									<p>Choose any (1) one.</p>
								</div>
								<div class="radio-buttons">
									<input type="radio" id="radio-1" name="radio-group" value="Shopping" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-1">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/shopping-bag.png" alt="Shopping" class="icon">
											<p>Shopping</p>
										</div>
									</label>
									<input type="radio" id="radio-2" name="radio-group" value="Finance" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-2">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/finance.png" alt="Finance" class="icon">
											<p>Finance</p>
										</div>
									</label>
									<input type="radio" id="radio-3" name="radio-group" value="Health" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-3">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/health.png" alt="health" class="icon">
											<p>Health</p>
										</div>
									</label>
									<input type="radio" id="radio-4" name="radio-group" value="Events" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-4">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/events.png" alt="Events" class="icon">
											<p>Events</p>
										</div>
									</label>
									<input type="radio" id="radio-5" name="radio-group" value="Social Media" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-5">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/social-media.png" alt="Social Media" class="icon">
											<p>Social Media</p>
										</div>
									</label>
									<input type="radio" id="radio-6" name="radio-group" value="Real Estate" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-6">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/home.png" alt="Real Estate" class="icon">
											<p>Real Estate</p>
										</div>
									</label>
									<input type="radio" id="radio-7" name="radio-group" value="On Demand Services" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-7">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/on-demand-service.png" alt="On Demand Services">
											<p>On Demand Services</p>
										</div>
									</label>
									<input type="radio" id="radio-8" name="radio-group" value="Food Delivery" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-8">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/food-delivery.png" alt="Food Delivery" class="icon">
											<p>Food Delivery</p>
										</div>
									</label>
									<input type="radio" id="radio-9" name="radio-group" value="Game" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-9">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/game.png" alt="Food Delivery" class="icon">
											<p>Game</p>
										</div>
									</label>
									<input type="radio" id="radio-10" name="radio-group" value="Other" data-money="1000" data-timesaved="1" data-projecttimeline="1" class="business_selection required">
									<label for="radio-10">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/other.png" alt="Other" class="icon">
											<p>Other</p>
										</div>
									</label>
								</div>
							</fieldset>
							<h3 id="example-advanced-form-h-1" tabindex="-1" class="title">Platform</h3>
							<fieldset class="form-input body" id="example-advanced-form-p-1" role="tabpanel" aria-labelledby="example-advanced-form-h-1" aria-hidden="true" style="display: none;">
								<div class="text-cont">
									<h2>Platform <span>Do You Need?</span></h2>
									<p>Select one or more.</p>
								</div>
								<div class="radio-buttons">
									<input type="checkbox" id="radio-11" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="iOS App" class="required select_platform">
									<label for="radio-11">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/ios-app.png" alt="ios app">
											<p>iOS App</p>
										</div>
									</label>
									<input type="checkbox" id="radio-12" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Android App" class="required select_platform">
									<label for="radio-12">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/android-app.png" alt="Android App">
											<p>Android App</p>
										</div>
									</label>
									<input type="checkbox" id="radio-13" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Web App" class="required select_platform">
									<label for="radio-13">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/web-app.png" alt="Web App">
											<p>Web App</p>
										</div>
									</label>
								</div>
							</fieldset>
							<h3 id="example-advanced-form-h-2" tabindex="-1" class="title">Audience</h3>
							<fieldset class="form-input body" id="example-advanced-form-p-2" role="tabpanel" aria-labelledby="example-advanced-form-h-2" aria-hidden="true" style="display: none;">
								<div class="text-cont">
									<h2>Who Will Use Your <span> Product?</span></h2>
									<p>Select one or more.</p>
								</div>
								<div class="radio-buttons">
									<input type="checkbox" id="radio-14" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Visitors" class="required select_audience">
									<label for="radio-14">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/visitors.png" alt="Visitors">
											<p>Visitors</p>
										</div>
									</label>
									<input type="checkbox" id="radio-15" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Moderators" class="required select_audience">
									<label for="radio-15">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/moderators.png" alt="Moderators">
											<p>Moderators</p>
										</div>
									</label>
									<input type="checkbox" id="radio-16" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Registered Users" class="required select_audience">
									<label for="radio-16">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/registered-users.png" alt="Registered Users">
											<p>Registered Users</p>
										</div>
									</label>
									<input type="checkbox" id="radio-17" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Administrators" class="required select_audience">
									<label for="radio-17">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/administrators.png" alt="Administrators">
											<p>Administrators</p>
										</div>
									</label>
									<input type="checkbox" id="radio-18" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Other" class="required select_audience">
									<label for="radio-18">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/other.png" alt="Other">
											<p>Other</p>
										</div>
									</label>
								</div>
							</fieldset>
							<h3 id="example-advanced-form-h-3" tabindex="-1" class="title">Features</h3>
							<fieldset class="form-input body more-than-6-labels" id="example-advanced-form-p-3" role="tabpanel" aria-labelledby="example-advanced-form-h-3" aria-hidden="true" style="display: none;">
								<div class="shopping-features d-none" id="shopping-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-19" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Mobile Pay" class="required shopfeat_select">
										<label for="radio-19">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/mobile-pay.png" alt="Mobile Pay">
												<p>Mobile Pay</p>
											</div>
										</label>
										<input type="checkbox" id="radio-20" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="AR View" class="required shopfeat_select">
										<label for="radio-20">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/augmented-reality.png" alt="AR View">
												<p>AR View</p>
											</div>
										</label>
										<input type="checkbox" id="radio-21" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Rewards" class="required shopfeat_select">
										<label for="radio-21">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/rewards.png" alt="Rewards">
												<p>Rewards</p>
											</div>
										</label>
										<input type="checkbox" id="radio-22" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Price Compare" class="required shopfeat_select">
										<label for="radio-22">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/price-compare.png" alt="Price Compare">
												<p>Price Compare</p>
											</div>
										</label>
										<input type="checkbox" id="radio-23" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="User Reviews" class="required shopfeat_select">
										<label for="radio-23">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/user-reviews.png" alt="User Reviews">
												<p>User Reviews</p>
											</div>
										</label>
										<input type="checkbox" id="radio-24" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Product Search" class="required shopfeat_select">
										<label for="radio-24">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/product-search.png" alt="Product Search">
												<p>Product Search</p>
											</div>
										</label>
										<input type="checkbox" id="radio-25" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Wishlists" class="required shopfeat_select">
										<label for="radio-25">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/wishlists.png" alt="Wishlists">
												<p>Wishlists</p>
											</div>
										</label>
										<input type="checkbox" id="radio-26" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Notifications" class="required shopfeat_select">
										<label for="radio-26">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/notifications.png" alt="Notifications">
												<p>Notifications</p>
											</div>
										</label>
										<input type="checkbox" id="radio-27" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Reviews" class="required shopfeat_select">
										<label for="radio-27">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reviews.png" alt="Reviews">
												<p>Reviews</p>
											</div>
										</label>
										<input type="checkbox" id="radio-28" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Loyalty Program" class="required shopfeat_select">
										<label for="radio-28">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/loyalty-program.png" alt="Loyalty Program">
												<p>Loyalty Program</p>
											</div>
										</label>
									</div>
								</div>
								<div class="finance-features d-none" id="finance-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-29" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Budgeting" class="required finfeat_select">
										<label for="radio-29">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/budgeting.png" alt="Budgeting">
												<p>Budgeting</p>
											</div>
										</label>
										<input type="checkbox" id="radio-30" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Bill Pay" class="required finfeat_select">
										<label for="radio-30">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/bill-pay.png" alt="Bill Pay">
												<p>Bill Pay</p>
											</div>
										</label>
										<input type="checkbox" id="radio-31" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Secure Login" class="required finfeat_select">
										<label for="radio-31">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/secure-login.png" alt="Secure Login">
												<p>Secure Login</p>
											</div>
										</label>
										<input type="checkbox" id="radio-32" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Investing Tools" class="required finfeat_select">
										<label for="radio-32">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/" alt="Investing Tools">
												<p>Investing Tools</p>
											</div>
										</label>
										<input type="checkbox" id="radio-33" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Cheque Deposit" class="required finfeat_select">
										<label for="radio-33">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/check-deposit.png" alt="Cheque Deposit">
												<p>Cheque Deposit</p>
											</div>
										</label>
										<input type="checkbox" id="radio-34" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Money Transfer" class="required finfeat_select">
										<label for="radio-34">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/money-transfer.png" alt="Money Transfer">
												<p>Money Transfer</p>
											</div>
										</label>
										<input type="checkbox" id="radio-35" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Transactions" class="required finfeat_select">
										<label for="radio-35">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/transaction.png" alt="Transactions">
												<p>Transactions</p>
											</div>
										</label>
										<input type="checkbox" id="radio-36" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Credit Score" class="required finfeat_select">
										<label for="radio-36">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/credit-score.png" alt="Credit Score">
												<p>Credit Score</p>
											</div>
										</label>
										<input type="checkbox" id="radio-37" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Credit Score" class="required finfeat_select">
										<label for="radio-37">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/credit-scores.png" alt="Credit Score">
												<p>Credit Score</p>
											</div>
										</label>
										<input type="checkbox" id="radio-38" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="OCR" class="required finfeat_select">
										<label for="radio-38">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/ocr.png" alt="OCR">
												<p>OCR</p>
											</div>
										</label>
										<input type="checkbox" id="radio-39" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Approval" class="required finfeat_select">
										<label for="radio-39">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/approval.png" alt="Approval">
												<p>Approval</p>
											</div>
										</label>
										<input type="checkbox" id="radio-40" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Expense" class="required finfeat_select">
										<label for="radio-40">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/expense.png" alt="Expense">
												<p>Expense</p>
											</div>
										</label>
									</div>
								</div>
								<div class="health-features d-none" id="health-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-41" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Navigation" class="required heafear_select">
										<label for="radio-41">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/navigation.png" alt="Navigation">
												<p>Navigation</p>
											</div>
										</label>
										<input type="checkbox" id="radio-42" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Chat &amp; Message" class="required heafear_select">
										<label for="radio-42">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/chat-and-message.png" alt="Chat &amp; Message">
												<p>Chat &amp; Message</p>
											</div>
										</label>
										<input type="checkbox" id="radio-43" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Stream Media" class="required heafear_select">
										<label for="radio-43">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/stream-media.png" alt="Stream Media">
												<p>Stream Media</p>
											</div>
										</label>
										<input type="checkbox" id="radio-44" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Dynamic Forms" class="required heafear_select">
										<label for="radio-44">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/dynamic-forms.png" alt="Dynamic Forms">
												<p>Dynamic Forms</p>
											</div>
										</label>
										<input type="checkbox" id="radio-45" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Reservations" class="required heafear_select">
										<label for="radio-45">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reservations.png" alt="Reservations">
												<p>Reservations</p>
											</div>
										</label>
										<input type="checkbox" id="radio-46" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="eCommerce" class="required heafear_select">
										<label for="radio-46">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/e-commerce.png" alt="eCommerce">
												<p>eCommerce</p>
											</div>
										</label>
										<input type="checkbox" id="radio-47" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Reviews" class="required heafear_select">
										<label for="radio-47">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reviews.png" alt="Reviews">
												<p>Reviews</p>
											</div>
										</label>
										<input type="checkbox" id="radio-48" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="System Creation" class="required heafear_select">
										<label for="radio-48">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/system-creation.png" alt="System Creation">
												<p>System Creation</p>
											</div>
										</label>
										<input type="checkbox" id="radio-49" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Other" class="required heafear_select">
										<label for="radio-49">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/other.png" alt="Other">
												<p>Other</p>
											</div>
										</label>
									</div>
								</div>
								<div class="events-features d-none" id="events-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-50" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Digital Tickets" class="required evefeat_select">
										<label for="radio-50">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/digital-tickets.png" alt="Digital Tickets">
												<p>Digital Tickets</p>
											</div>
										</label>
										<input type="checkbox" id="radio-51" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Event Schedule" class="required evefeat_select">
										<label for="radio-51">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/event-schedule.png" alt="Event Schedule">
												<p>Event Schedule</p>
											</div>
										</label>
										<input type="checkbox" id="radio-52" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Venue Maps" class="required evefeat_select">
										<label for="radio-52">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/venue-maps.png" alt="Venue Maps">
												<p>Venue Maps</p>
											</div>
										</label>
										<input type="checkbox" id="radio-53" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Networking" class="required evefeat_select">
										<label for="radio-53">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/networking.png" alt="Networking">
												<p>Networking</p>
											</div>
										</label>
										<input type="checkbox" id="radio-54" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Live Polls" class="required evefeat_select">
										<label for="radio-54">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/live-polls.png" alt="Live Polls">
												<p>Live Polls</p>
											</div>
										</label>
										<input type="checkbox" id="radio-55" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Speaker Info" class="required evefeat_select">
										<label for="radio-55">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/speaker-info.png" alt="Speaker Info">
												<p>Speaker Info</p>
											</div>
										</label>
										<input type="checkbox" id="radio-56" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Reminders" class="required evefeat_select">
										<label for="radio-56">
											<div class="v-center"> 
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reminders.png" alt="Reminders">
												<p>Reminders</p>
											</div>
										</label>
										<input type="checkbox" id="radio-57" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="AR Wayfinding" class="required evefeat_select">
										<label for="radio-57">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/augmented-reality.png" alt="AR Wayfinding">
												<p>AR Wayfinding</p>
											</div>
										</label>
										<input type="checkbox" id="radio-58" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Gamification" class="required evefeat_select">
										<label for="radio-58">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/gamifications.png" alt="Gamification">
												<p>Gamification</p>
											</div>
										</label>
										<input type="checkbox" id="radio-59" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Live Streaming" class="required evefeat_select">
										<label for="radio-59">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/live-streaming.png" alt="Live Streaming">
												<p>Live Streaming</p>
											</div>
										</label>
										<input type="checkbox" id="radio-60" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="QR Code" class="required evefeat_select">
										<label for="radio-60">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/qr-code.png" alt="QR Code">
												<p>QR Code</p>
											</div>
										</label>
										<input type="checkbox" id="radio-61" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Downloads" class="required evefeat_select">
										<label for="radio-61">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/downloads.png" alt="Downloads">
												<p>Downloads</p>
											</div>
										</label>
									</div>
								</div>
								<div class="socialmedia-features d-none" id="socialmedia-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-062" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Stories" class="required smfeat_select">
										<label for="radio-062">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/stories.png" alt="Stories">
												<p>Stories</p>
											</div>
										</label>
										<input type="checkbox" id="radio-62" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="AR Filters" class="required smfeat_select">
										<label for="radio-62">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/ar-filters.png" alt="AR Filters">
												<p>AR Filters</p>
											</div>
										</label>
										<input type="checkbox" id="radio-63" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Groups" class="required smfeat_select">
										<label for="radio-63">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/groups.png" alt="Groups">
												<p>Groups</p>
											</div>
										</label>
										<input type="checkbox" id="radio-64" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Mention" class="required smfeat_select">
										<label for="radio-64">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/mention.png" alt="Mention">
												<p>Mention</p>
											</div>
										</label>
										<input type="checkbox" id="radio-65" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Hashtags" class="required smfeat_select">
										<label for="radio-65">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/hastags.png" alt="Hashtags">
												<p>Hashtags</p>
											</div>
										</label>
										<input type="checkbox" id="radio-66" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Profile" class="required smfeat_select">
										<label for="radio-66">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/profile.png" alt="Profile">
												<p>Profile</p>
											</div>
										</label>
										<input type="checkbox" id="radio-67" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Chat" class="required smfeat_select">
										<label for="radio-67">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/chat-and-message.png" alt="Chat">
												<p>Chat</p>
											</div>
										</label>
										<input type="checkbox" id="radio-68" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Notifications" class="required smfeat_select">
										<label for="radio-68">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/notifications.png" alt="Notifications">
												<p>Notifications</p>
											</div>
										</label>
										<input type="checkbox" id="radio-69" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Swipe" class="required smfeat_select">
										<label for="radio-69">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/swipe.png" alt="Swipe">
												<p>Swipe</p>
											</div>
										</label>
										<input type="checkbox" id="radio-70" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Photo Editing" class="required smfeat_select">
										<label for="radio-70">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/photo-editing.png" alt="Photo Editing">
												<p>Photo Editing</p>
											</div>
										</label>
										<input type="checkbox" id="radio-71" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Video Editing" class="required smfeat_select">
										<label for="radio-71">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/video-editing.png" alt="Video Editing">
												<p>Video Editing</p>
											</div>
										</label>
									</div>
								</div>
								<div class="realestate-features d-none" id="realestate-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-72" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="AR Tours" class="required reafeat_select">
										<label for="radio-72">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/ar-tours.png" alt="AR Tours">
												<p>AR Tours</p>
											</div>
										</label>
										<input type="checkbox" id="radio-73" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Mortgage Calc" class="required reafeat_select">
										<label for="radio-73">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/mortgage-calculator.png" alt="Mortgage Calc">
												<p>Mortgage Calc</p>
											</div>
										</label>
										<input type="checkbox" id="radio-74" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Scheduling" class="required reafeat_select">
										<label for="radio-74">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/event-schedule.png" alt="Scheduling">
												<p>Scheduling</p>
											</div>
										</label>
										<input type="checkbox" id="radio-75" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Property Search" class="required reafeat_select">
										<label for="radio-75">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/product-search.png" alt="Property Search">
												<p>Property Search</p>
											</div>
										</label>
										<input type="checkbox" id="radio-76" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Sales" class="required reafeat_select">
										<label for="radio-76">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/sales.png" alt="Sales">
												<p>Sales</p>
											</div>
										</label>
										<input type="checkbox" id="radio-77" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Digital Doc" class="required reafeat_select">
										<label for="radio-77">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/digital-doc.png" alt="Digital Doc">
												<p>Digital Doc</p>
											</div>
										</label>
										<input type="checkbox" id="radio-78" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Virtual Staging" class="required reafeat_select">
										<label for="radio-78">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/virtual-staging.png" alt="Virtual Staging">
												<p>Virtual Staging</p>
											</div>
										</label>
										<input type="checkbox" id="radio-79" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Notifications" class="required reafeat_select">
										<label for="radio-79">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/notifications.png" alt="Notifications">
												<p>Notifications</p>
											</div>
										</label>
										<input type="checkbox" id="radio-80" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="3D Floorplans" class="required reafeat_select">
										<label for="radio-80">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/3d-floor-plans.png" alt="3D Floorplans">
												<p>3D Floorplans</p>
											</div>
										</label>
										<input type="checkbox" id="radio-81" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Vendor Portal" class="required reafeat_select">
										<label for="radio-81">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/vendor-portal.png" alt="Vendor Portal">
												<p>Vendor Portal</p>
											</div>
										</label>
										<input type="checkbox" id="radio-82" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Bidding" class="required reafeat_select">
										<label for="radio-82">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/bidding.png" alt="Bidding">
												<p>Bidding</p>
											</div>
										</label>
									</div>
								</div>
								<div class="ondemandservices-features d-none" id="ondemandservices-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-83" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Scheduling" class="required odsfeat_select">
										<label for="radio-83">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/events.png" alt="Scheduling">
												<p>Scheduling</p>
											</div>
										</label>
										<input type="checkbox" id="radio-84" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Tracking" class="required odsfeat_select">
										<label for="radio-84">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/tracking.png" alt="Tracking">
												<p>Tracking</p>
											</div>
										</label>
										<input type="checkbox" id="radio-85" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Reviews" class="required odsfeat_select">
										<label for="radio-85">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reviews.png" alt="Reviews">
												<p>Reviews</p>
											</div>
										</label>
										<input type="checkbox" id="radio-86" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Pricing Estimates" class="required odsfeat_select">
										<label for="radio-86">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/pricing-estimations.png" alt="Pricing Estimates">
												<p>Pricing Estimates</p>
											</div>
										</label>
										<input type="checkbox" id="radio-87" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Payment" class="required odsfeat_select">
										<label for="radio-87">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/payment.png" alt="Payment">
												<p>Payment</p>
											</div>
										</label>
										<input type="checkbox" id="radio-88" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Support" class="required odsfeat_select">
										<label for="radio-88">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/support.png" alt="Support">
												<p>Support</p>
											</div>
										</label>
										<input type="checkbox" id="radio-89" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Service Provider" class="required odsfeat_select">
										<label for="radio-89">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/service-provider.png" alt="Service Provider">
												<p>Service Provider</p>
											</div>
										</label>
										<input type="checkbox" id="radio-90" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Appointment" class="required odsfeat_select">
										<label for="radio-90">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/appointment.png" alt="Appointment">
												<p>Appointment</p>
											</div>
										</label>
										<input type="checkbox" id="radio-91" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Recurring" class="required odsfeat_select">
										<label for="radio-91">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/recurring.png" alt="Recurring">
												<p>Recurring</p>
											</div>
										</label>
									</div>
								</div>
								<div class="fooddelivery-features d-none" id="fooddelivery-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-92" name="radio-group" data-money="1000" data-timesaved="1" data-projecttimeline="1" value="Courier Tracking" class="required fdfeat_select">
										<label for="radio-92">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/courier-tracking.png" alt="Courier Tracking">
												<p>Courier Tracking</p>
											</div>
										</label>
										<input type="checkbox" id="radio-93" name="radio-group" data-money="1000" data-timesaved="1" value="Order Scheduling" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-93">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/order-scheduling.png" alt="Order Scheduling">
												<p>Order Scheduling</p>
											</div>
										</label>
										<input type="checkbox" id="radio-94" name="radio-group" data-money="1000" data-timesaved="1" value="Group Ordering" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-94">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/group-ordering.png" alt="Group Ordering">
												<p>Group Ordering</p>
											</div>
										</label>
										<input type="checkbox" id="radio-95" name="radio-group" data-money="1000" data-timesaved="1" value="Loyalty Programs" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-95">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/loyalty-program.png" alt="Loyalty Programs">
												<p>Loyalty Programs</p>
											</div>
										</label>
										<input type="checkbox" id="radio-96" name="radio-group" data-money="1000" data-timesaved="1" value="Suggestion" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-96">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/suggestion.png" alt="Suggestion">
												<p>Suggestion</p>
											</div>
										</label>
										<input type="checkbox" id="radio-97" name="radio-group" data-money="1000" data-timesaved="1" value="Rating &amp; Reviews" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-97">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reviews.png" alt="Rating &amp; Reviews">
												<p>Rating &amp; Reviews</p>
											</div>
										</label>
										<input type="checkbox" id="radio-98" name="radio-group" data-money="1000" data-timesaved="1" value="Order Tracking" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-98">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/order-tracking.png" alt="Order Tracking">
												<p>Order Tracking</p>
											</div>
										</label>
										<input type="checkbox" id="radio-99" name="radio-group" data-money="1000" data-timesaved="1" value="Push Notifications" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-99">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/push-notifications.png" alt="Push Notifications">
												<p>Push Notifications</p>
											</div>
										</label>
										<input type="checkbox" id="radio-100" name="radio-group" data-money="1000" data-timesaved="1" value="Bundles" data-projecttimeline="1" class="required fdfeat_select">
										<label for="radio-100">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/bundles.png" alt="Bundles">
												<p>Bundles</p>
											</div>
										</label>
									</div>
								</div>
								<div class="game-features d-none" id="game-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-101" name="radio-group" data-money="1000" data-timesaved="1" value="Multiplayer" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-101">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/multiplayer.png" alt="Multiplayer">
												<p>Multiplayer</p>
											</div>
										</label>
										<input type="checkbox" id="radio-102" name="radio-group" data-money="1000" data-timesaved="1" value="Leaderboards" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-102">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/leaderboard.png" alt="Leaderboards">
												<p>Leaderboards</p>
											</div>
										</label>
										<input type="checkbox" id="radio-103" name="radio-group" data-money="1000" data-timesaved="1" value="Achievements" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-103">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/achievement.png" alt="Achievements">
												<p>Achievements</p>
											</div>
										</label>
										<input type="checkbox" id="radio-104" name="radio-group" data-money="1000" data-timesaved="1" value="Customization" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-104">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/customization.png" alt="Customization">
												<p>Customization</p>
											</div>
										</label>
										<input type="checkbox" id="radio-105" name="radio-group" data-money="1000" data-timesaved="1" value="Notifications" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-105">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/notifications.png" alt="Notifications">
												<p>Notifications</p>
											</div>
										</label>
										<input type="checkbox" id="radio-106" name="radio-group" data-money="1000" data-timesaved="1" value="Chat" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-106">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/chat-and-message.png" alt="Chat">
												<p>Chat</p>
											</div>
										</label>
										<input type="checkbox" id="radio-107" name="radio-group" data-money="1000" data-timesaved="1" value="3D Graphics" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-107">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/3d-graphics.png" alt="3D Graphics">
												<p>3D Graphics</p>
											</div>
										</label>
										<input type="checkbox" id="radio-108" name="radio-group" data-money="1000" data-timesaved="1" value="AR Integration" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-108">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/ar-integration.png" alt="AR Integration">
												<p>AR Integration</p>
											</div>
										</label>
										<input type="checkbox" id="radio-109" name="radio-group" data-money="1000" data-timesaved="1" value="Live Events" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-109">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/live-events.png" alt="Live Events">
												<p>Live Events</p>
											</div>
										</label>
										<input type="checkbox" id="radio-110" name="radio-group" data-money="1000" data-timesaved="1" value="In-App Purchase" data-projecttimeline="1" class="required gamefeat_select">
										<label for="radio-110">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/in-app-purchase.png" alt="In-App Purchase">
												<p>In-App Purchase</p>
											</div>
										</label>
									</div>
								</div>
								<div class="other-features d-none" id="other-features">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-111" name="radio-group" data-money="1000" data-timesaved="1" value="Navigation" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-111">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/navigation.png" alt="Navigation">
												<p>Navigation</p>
											</div>
										</label>
										<input type="checkbox" id="radio-112" name="radio-group" data-money="1000" data-timesaved="1" value="Chat &amp; Message" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-112">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/chat-and-message.png" alt="Chat &amp; Message">
												<p>Chat &amp; Message</p>
											</div>
										</label>
										<input type="checkbox" id="radio-113" name="radio-group" data-money="1000" data-timesaved="1" value="Stream Media" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-113">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/stream-media.png" alt="Stream Media">
												<p>Stream Media</p>
											</div>
										</label>
										<input type="checkbox" id="radio-114" name="radio-group" data-money="1000" data-timesaved="1" value="Dynamic Forms" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-114">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/dynamic-forms.png" alt="Dynamic Forms">
												<p>Dynamic Forms</p>
											</div>
										</label>
										<input type="checkbox" id="radio-115" name="radio-group" data-money="1000" data-timesaved="1" value="Reservations" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-115">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reservations.png" alt="Reservations">
												<p>Reservations</p>
											</div>
										</label>
										<input type="checkbox" id="radio-116" name="radio-group" data-money="1000" data-timesaved="1" value="eCommerce" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-116">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/e-commerce.png" alt="eCommerce">
												<p>eCommerce</p>
											</div>
										</label>
										<input type="checkbox" id="radio-117" name="radio-group" data-money="1000" data-timesaved="1" value="Reviews" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-117">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/reviews.png" alt="Reviews">
												<p>Reviews</p>
											</div>
										</label>
										<input type="checkbox" id="radio-118" name="radio-group" data-money="1000" data-timesaved="1" value="System Creation" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-118">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/system-creation.png" alt="System Creation">
												<p>System Creation</p>
											</div>
										</label>
										<input type="checkbox" id="radio-119" name="radio-group" data-money="1000" data-timesaved="1" value="Other" data-projecttimeline="1" class="required othfeat_select">
										<label for="radio-119">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/other.png" alt="Other">
												<p>Other</p>
											</div>
										</label>
									</div>
								</div>
							</fieldset>
							<h3 id="example-advanced-form-h-4" tabindex="-1" class="title">Integration</h3>
							<fieldset class="form-input body more-than-6-labels" id="example-advanced-form-p-4" role="tabpanel" aria-labelledby="example-advanced-form-h-4" aria-hidden="true" style="display: none;">
								<div class="shopping-integrations d-none" id="shopping-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-120" name="radio-group" data-money="1000" data-timesaved="1" value="Paypal" data-projecttimeline="1" class="required shopint_select">
										<label for="radio-120">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/paypal.png" alt="PayPal">
												<p>Paypal</p>
											</div>
										</label>
										<input type="checkbox" id="radio-121" name="radio-group" data-money="1000" data-timesaved="1" value="Stripe" data-projecttimeline="1" class="required shopint_select">
										<label for="radio-121">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/stripe.png" alt="Stripe">
												<p>Stripe</p>
											</div>
										</label>
										<input type="checkbox" id="radio-122" name="radio-group" data-money="1000" data-timesaved="1" value="USPS" data-projecttimeline="1" class="required shopint_select">
										<label for="radio-122">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/usps.png" alt="USPS">
												<p>USPS</p>
											</div>
										</label>
										<input type="checkbox" id="radio-123" name="radio-group" data-money="1000" data-timesaved="1" value="UPS" data-projecttimeline="1" class="required shopint_select">
										<label for="radio-123">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/ups.png" alt="UPS">
												<p>UPS</p>
											</div>
										</label>
										<input type="checkbox" id="radio-124" name="radio-group" data-money="1000" data-timesaved="1" value="FedEX" data-projecttimeline="1" class="required shopint_select">
										<label for="radio-124">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/fedex.png" alt="FedEX">
												<p>FedEX</p>
											</div>
										</label>
									</div>
								</div>
								<div class="finance-integrations d-none" id="finance-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-125" name="radio-group" data-money="1000" data-timesaved="1" value="QuickBooks" data-projecttimeline="1" class="required finint_select">
										<label for="radio-125">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/quickbooks.png" alt="QuickBooks">
												<p>QuickBooks</p>
											</div>
										</label>
										<input type="checkbox" id="radio-126" name="radio-group" data-money="1000" data-timesaved="1" value="LendingClub" data-projecttimeline="1" class="required finint_select">
										<label for="radio-126">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/lendingclub.png" alt="LendingClub">
												<p>LendingClub</p>
											</div>
										</label>
										<input type="checkbox" id="radio-127" name="radio-group" data-money="1000" data-timesaved="1" value="SAP" data-projecttimeline="1" class="required finint_select">
										<label for="radio-127">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/sap.png" alt="SAP">
												<p>SAP</p>
											</div>
										</label>
									</div>
								</div>
								<div class="health-integrations d-none" id="health-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-128" name="radio-group" data-money="1000" data-timesaved="1" value="Camera" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-128">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/camera.png" alt="Camera">
												<p>Camera</p>
											</div>
										</label>
										<input type="checkbox" id="radio-129" name="radio-group" data-money="1000" data-timesaved="1" value="GPS" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-129">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/gps.png" alt="GPS">
												<p>GPS</p>
											</div>
										</label>
										<input type="checkbox" id="radio-130" name="radio-group" data-money="1000" data-timesaved="1" value="Bluetooth" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-130">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/bluetooth.png" alt="Bluetooth">
												<p>Bluetooth</p>
											</div>
										</label>
										<input type="checkbox" id="radio-131" name="radio-group" data-money="1000" data-timesaved="1" value="Gyroscope" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-131">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/gyroscope.png" alt="Gyroscope">
												<p>Gyroscope</p>
											</div>
										</label>
										<input type="checkbox" id="radio-132" name="radio-group" data-money="1000" data-timesaved="1" value="Accelerometer" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-132">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/accelerometer.png" alt="Accelerometer">
												<p>Accelerometer</p>
											</div>
										</label>
										<input type="checkbox" id="radio-133" name="radio-group" data-money="1000" data-timesaved="1" value="Public APIs" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-133">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/public-api.png" alt="Public API's">
												<p>Public API's</p>
											</div>
										</label>
										<input type="checkbox" id="radio-134" name="radio-group" data-money="1000" data-timesaved="1" value="Backend Systems" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-134">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/backend-system.png" alt="Backend Systems">
												<p>Backend Systems</p>
											</div>
										</label>
										<input type="checkbox" id="radio-135" name="radio-group" data-money="1000" data-timesaved="1" value="Other" data-projecttimeline="1" class="required heaint_select">
										<label for="radio-135">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/other.png" alt="Other">
												<p>Other</p>
											</div>
										</label>
									</div>
								</div>
								<div class="events-integrations d-none" id="events-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-136" name="radio-group" data-money="1000" data-timesaved="1" value="Eventbrite" data-projecttimeline="1" class="required eveint_select">
										<label for="radio-136">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/data:image/webp;base64,UklGRhwCAABXRUJQVlA4WAoAAAAQAAAAHAAAHAAAQUxQSN4AAAABcFBrW9a8EWiwr8FsABFsoA1YA2zgGrgGRiCCEYhghF++92MNIoKB20aKJgfdw8FPgOK6EARthLkcD3seGlQ+GMUS38OiCItxPWxKp209WtiVnLQf8+B9zFq6x0SpiBopR0V6bLFDR669dOQsPJvkFJXvysaNfRDINCdu2unLCajcWJvU85peS4uCqy0sB4OVvPaQKw9FfdlSlMxtecMg8uh15caHADimzCgSW3Yg/FglxezJkA9ayc+hxNyHnvURd7+he//sXUIybRNQhNdgjzDxi5606NCE896/wABWUDggGAEAABAJAJ0BKh0AHQA+USSPRaOiIRQEADgFBLYATplCOvPAPxV/VXmCRx/cB2gPEi/sfUA8wH6gfsBwgH9r/t3WAegB5WH67fA9+0XsAfqYFZaY4AD+8mat6jbiWiHIjprV0J//6jQ+zR/tVwK4wYMfZf8TSfdGnQaTNYekVFiE+6/3JzZDvNb/4Iu2zv5H7yFZx2Sbx+4APZm7VWLVFIf+9S/q+jDf6j72DHfdZfRpc5cEwnbtZpdg/3ODBJRBx3KF9rCdIjiD/m68si5hTYP/Lk2W53FnWVimD82ctcCmLldj9mPRN9C++wi9eVQTUmLFjp0yeKttGmY9t4Bg53bSTQM4lrD0H+6GoDi2MaXsP+W3xqnF6/oAAAA=" alt="Mobile Pay">
												<p>Eventbrite</p>
											</div>
										</label>
										<input type="checkbox" id="radio-137" name="radio-group" data-money="1000" data-timesaved="1" value="Meetup" data-projecttimeline="1" class="required eveint_select">
										<label for="radio-137">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/meetup.png" alt="Meetup">
												<p>Meetup</p>
											</div>
										</label>
										<input type="checkbox" id="radio-138" name="radio-group" data-money="1000" data-timesaved="1" value="Slack" data-projecttimeline="1" class="required eveint_select">
										<label for="radio-138">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/slack.png" alt="Slack">
												<p>Slack</p>
											</div>
										</label>
										<input type="checkbox" id="radio-139" name="radio-group" data-money="1000" data-timesaved="1" value="Dropbox" data-projecttimeline="1" class="required eveint_select">
										<label for="radio-139">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/dropbox.png" alt="Dropbox">
												<p>Dropbox</p>
											</div>
										</label>
										<input type="checkbox" id="radio-140" name="radio-group" data-money="1000" data-timesaved="1" value="MailChimp" data-projecttimeline="1" class="required eveint_select">
										<label for="radio-140">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/mailchimp.png" alt="MailChimp">
												<p>MailChimp</p>
											</div>
										</label>
									</div>
								</div>
								<div class="socialmedia-integrations d-none" id="socialmedia-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-141" name="radio-group" data-money="1000" data-timesaved="1" value="Social Platform APIs" data-projecttimeline="1" class="required smint_select">
										<label for="radio-141">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/social-platform-api.png" alt="Social Platform APIs">
												<p>Social Platform APIs</p>
											</div>
										</label>
										<input type="checkbox" id="radio-142" name="radio-group" data-money="1000" data-timesaved="1" value="Photo Sharing" data-projecttimeline="1" class="required smint_select">
										<label for="radio-142">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/photo-sharing.png" alt="Photo Sharing">
												<p>Photo Sharing</p>
											</div>
										</label>
										<input type="checkbox" id="radio-143" name="radio-group" data-money="1000" data-timesaved="1" value="Video Sharing" data-projecttimeline="1" class="required smint_select">
										<label for="radio-143">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/video-sharing.png" alt="Video Sharing">
												<p>Video Sharing</p>
											</div>
										</label>
										<input type="checkbox" id="radio-144" name="radio-group" data-money="1000" data-timesaved="1" value="Messaging" data-projecttimeline="1" class="required smint_select">
										<label for="radio-144">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/messaging.png" alt="Messaging">
												<p>Messaging</p>
											</div>
										</label>
										<input type="checkbox" id="radio-145" name="radio-group" data-money="1000" data-timesaved="1" value="Location" data-projecttimeline="1" class="required smint_select">
										<label for="radio-145">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/location.png" alt="Location">
												<p>Location</p>
											</div>
										</label>
									</div>
								</div>
								<div class="realestate-integrations d-none" id="realestate-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-146" name="radio-group" data-money="1000" data-timesaved="1" value="Zillow API" data-projecttimeline="1" class="required reaint_select">
										<label for="radio-146">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/zillow-api.png" alt="Zillow API">
												<p>Zillow API</p>
											</div>
										</label>
										<input type="checkbox" id="radio-147" name="radio-group" data-money="1000" data-timesaved="1" value="Docusign" data-projecttimeline="1" class="required reaint_select">
										<label for="radio-147">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/docusign.png" alt="Docusign">
												<p>Docusign</p>
											</div>
										</label>
										<input type="checkbox" id="radio-148" name="radio-group" data-money="1000" data-timesaved="1" value="MooveGuru" data-projecttimeline="1" class="required reaint_select">
										<label for="radio-148">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/moove-guru.png" alt="MooveGuru">
												<p>MooveGuru</p>
											</div>
										</label>
										<input type="checkbox" id="radio-149" name="radio-group" data-money="1000" data-timesaved="1" value="Maps APIs" data-projecttimeline="1" class="required reaint_select">
										<label for="radio-149">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/maps-api.png" alt="Maps APIs">
												<p>Maps APIs</p>
											</div>
										</label>
									</div>
								</div>
								<div class="ondemandservices-integrations d-none" id="ondemandservices-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-150" name="radio-group" data-money="1000" data-timesaved="1" value="Social Media" data-projecttimeline="1" class="required odsint_select">
										<label for="radio-150">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/social-media.png" alt="Social Media">
												<p>Social Media</p>
											</div>
										</label>
										<input type="checkbox" id="radio-151" name="radio-group" data-money="1000" data-timesaved="1" value="Analytics" data-projecttimeline="1" class="required odsint_select">
										<label for="radio-151">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/analytics.png" alt="Analytics">
												<p>Analytics</p>
											</div>
										</label>
										<input type="checkbox" id="radio-152" name="radio-group" data-money="1000" data-timesaved="1" value="Chatbots" data-projecttimeline="1" class="required odsint_select">
										<label for="radio-152">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/chatbots.png" alt="Chatbots">
												<p>Chatbots</p>
											</div>
										</label>
										<input type="checkbox" id="radio-153" name="radio-group" data-money="1000" data-timesaved="1" value="Cloud Storage" data-projecttimeline="1" class="required odsint_select">
										<label for="radio-153">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/cloud-storage.png" alt="Cloud Storage">
												<p>Cloud Storage</p>
											</div>
										</label>
										<input type="checkbox" id="radio-154" name="radio-group" data-money="1000" data-timesaved="1" value="Shipping Carriers" data-projecttimeline="1" class="required odsint_select">
										<label for="radio-154">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/shipping-carriers.png" alt="Shipping Carriers">
												<p>Shipping Carriers</p>
											</div>
										</label>
									</div>
								</div>
								<div class="fooddelivery-integrations d-none" id="fooddelivery-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-155" name="radio-group" data-money="1000" data-timesaved="1" value="Yelp" data-projecttimeline="1" class="required fdint_select">
										<label for="radio-155">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/yelp.png" alt="Yelp">
												<p>Yelp</p>
											</div>
										</label>
										<input type="checkbox" id="radio-156" name="radio-group" data-money="1000" data-timesaved="1" value="Facebook Account Kit" data-projecttimeline="1" class="required fdint_select">
										<label for="radio-156">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/facebook.png" alt="Facebook">
												<p>Facebook Account Kit</p>
											</div>
										</label>
										<input type="checkbox" id="radio-157" name="radio-group" data-money="1000" data-timesaved="1" value="Mailchimp" data-projecttimeline="1" class="required fdint_select">
										<label for="radio-157">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/mailchimp.png" alt="MailChimp">
												<p>Mailchimp</p>
											</div>
										</label>
									</div>
								</div>
								<div class="game-integrations d-none" id="game-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-158" name="radio-group" data-money="1000" data-timesaved="1" value="Game Engine" data-projecttimeline="1" class="required gameint_select">
										<label for="radio-158">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/game-engine.png" alt="Game Engine">
												<p>Game Engine</p>
											</div>
										</label>
										<input type="checkbox" id="radio-159" name="radio-group" data-money="1000" data-timesaved="1" value="Video Chat" data-projecttimeline="1" class="required gameint_select">
										<label for="radio-159">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/video-chat.png" alt="Video Chat">
												<p>Video Chat</p>
											</div>
										</label>
										<input type="checkbox" id="radio-160" name="radio-group" data-money="1000" data-timesaved="1" value="Community Building" data-projecttimeline="1" class="required gameint_select">
										<label for="radio-160">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/community-building.png" alt="Community Building">
												<p>Community Building</p>
											</div>
										</label>
										<input type="checkbox" id="radio-161" name="radio-group" data-money="1000" data-timesaved="1" value="Distribution Platforms" data-projecttimeline="1" class="required gameint_select">
										<label for="radio-161">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/distribution-platform.png" alt="Distribution Platforms">
												<p>Distribution Platforms</p>
											</div>
										</label>
										<input type="checkbox" id="radio-163" name="radio-group" data-money="1000" data-timesaved="1" value="Ad Networks" data-projecttimeline="1" class="required gameint_select">
										<label for="radio-163">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/ad-network.png" alt="Ad Networks">
												<p>Ad Networks</p>
											</div>
										</label>
									</div>
								</div>
								<div class="other-integrations d-none" id="other-integrations">
									<div class="text-cont">
										<h2>Feature(s) <span>You Want To Add</span></h2>
										<p>Select one or more.</p>
									</div>
									<div class="radio-buttons">
										<input type="checkbox" id="radio-164" name="radio-group" data-money="1000" data-timesaved="1" value="Camera" data-projecttimeline="1" class="required othint_select">
										<label for="radio-164">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/camera.png" alt="Camera">
												<p>Camera</p>
											</div>
										</label>
										<input type="checkbox" id="radio-165" name="radio-group" data-money="1000" data-timesaved="1" value="GPS" data-projecttimeline="1" class="required othint_select">
										<label for="radio-165">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/gps.png" alt="GPS">
												<p>GPS</p>
											</div>
										</label>
										<input type="checkbox" id="radio-166" name="radio-group" data-money="1000" data-timesaved="1" value="Bluetooth" data-projecttimeline="1" class="required othint_select">
										<label for="radio-166">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/bluetooth.png" alt="Bluetooth">
												<p>Bluetooth</p>
											</div>
										</label>
										<input type="checkbox" id="radio-167" name="radio-group" data-money="1000" data-timesaved="1" value="Gyroscope" data-projecttimeline="1" class="required othint_select">
										<label for="radio-167">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/gyroscope.png" alt="Gyroscope">
												<p>Gyroscope</p>
											</div>
										</label>
										<input type="checkbox" id="radio-168" name="radio-group" data-money="1000" data-timesaved="1" value="Accelerometer" data-projecttimeline="1" class="required othint_select">
										<label for="radio-168">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/accelerometer.png" alt="Accelerometer">
												<p>Accelerometer</p>
											</div>
										</label>
										<input type="checkbox" id="radio-169" name="radio-group" data-money="1000" data-timesaved="1" value="Public APIs" data-projecttimeline="1" class="required othint_select">
										<label for="radio-169">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/public-api.png" alt="Public API's">
												<p>Public API's</p>
											</div>
										</label>
										<input type="checkbox" id="radio-170" name="radio-group" data-money="1000" data-timesaved="1" value="Backend Systems" data-projecttimeline="1" class="required othint_select">
										<label for="radio-170">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/backend-system.png" alt="Backend Systems">
												<p>Backend Systems</p>
											</div>
										</label>
										<input type="checkbox" id="radio-171" name="radio-group" data-money="1000" data-timesaved="1" value="Other" data-projecttimeline="1" class="required othint_select">
										<label for="radio-171">
											<div class="v-center">
												 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/other.png" alt="Other">
												<p>Other</p>
											</div>
										</label>
									</div>
								</div>
							</fieldset>
							<h3 id="example-advanced-form-h-5" tabindex="-1" class="title">Revenue</h3>
							<fieldset class="form-input body" id="example-advanced-form-p-5" role="tabpanel" aria-labelledby="example-advanced-form-h-5" aria-hidden="true" style="display: none;">
								<div class="text-cont">
									<h2>Generate <span>Revenue</span></h2>
									<p>Select one or more.</p>
								</div>
								<div class="radio-buttons">
									<input type="checkbox" id="radio-172" name="radio-group" data-money="1000" data-timesaved="1" value="Recurring Payments" data-projecttimeline="1" class="required select_revenue">
									<label for="radio-172">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/recurring.png" alt="Recurring Payments">
											<p>Recurring Payments</p>
										</div>
									</label>
									<input type="checkbox" id="radio-173" name="radio-group" data-money="1000" data-timesaved="1" value="Upfront Custom Fees" data-projecttimeline="1" class="required select_revenue">
									<label for="radio-173">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/upfront-and-custom-fees.png" alt="Upfront &amp; Custom Fees">
											<p>Upfront &amp; Custom Fees</p>
										</div>
									</label>
									<input type="checkbox" id="radio-174" name="radio-group" data-money="1000" data-timesaved="1" value="Shopping Cart System" data-projecttimeline="1" class="required select_revenue">
									<label for="radio-174">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/shopping-cart-system.png" alt="Shopping Cart System">
											<p>Shopping Cart System</p>
										</div>
									</label>
									<input type="checkbox" id="radio-175" name="radio-group" data-money="1000" data-timesaved="1" value="Other" data-projecttimeline="1" class="required select_revenue">
									<label for="radio-175">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/other.png" alt="Other">
											<p>Other</p>
										</div>
									</label>
								</div>
							</fieldset>
							<h3 id="example-advanced-form-h-6" tabindex="-1" class="title">Security </h3>
							<fieldset class="form-input body" id="example-advanced-form-p-6" role="tabpanel" aria-labelledby="example-advanced-form-h-6" aria-hidden="true" style="display: none;">
								<div class="text-cont">
									<h2>Secure<span> Your APP</span></h2>
									<p>Choose any (1) one.</p>
								</div>
								<div class="radio-buttons">
									<input type="radio" id="radio-176" name="radio-group" data-money="1000" data-timesaved="1" value="Security Not Important" data-projecttimeline="1" class="required select_security">
									<label for="radio-176">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/security-not-important.png" alt="Security Not Important">
											<p>Security Not Important</p>
										</div>
									</label>
									<input type="radio" id="radio-177" name="radio-group" data-money="1000" data-timesaved="1" value="Basic Security Measures" data-projecttimeline="1" class="required select_security">
									<label for="radio-177">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/basic-security-measures.png" alt="Basic Security Measures">
											<p>Basic Security Measures</p>
										</div>
									</label>
									<input type="radio" id="radio-178" name="radio-group" data-money="1000" data-timesaved="1" value="Encrypted Communication" data-projecttimeline="1" class="required select_security">
									<label for="radio-178">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/encrypted-communication.png" alt="Encrypted Communication">
											<p>Encrypted Communication</p>
										</div>
									</label>
									<input type="radio" id="radio-179" name="radio-group" data-money="1000" data-timesaved="1" value="Complete Protection" data-projecttimeline="1" class="required select_security">
									<label for="radio-179">
										<div class="v-center">
											 <img loading="lazy" loading="lazy" class="cost-icons" src="images/cost-calculator/completed-protection.png" alt="Complete Protection">
											<p>Complete Protection</p>
										</div>
									</label>
								</div>
							</fieldset>
						</div>
					</form>
				</div>
			</div>

			<div class="col-xl-4 my-xl-auto">
				<div class="rough-estimate">
					<h2>ROUGH <span>ESTIMATE</span></h2>
					<form data-hs-cf-bound="true">
						<input type="hidden" placeholder="Business" id="businessselect_cst">
						<input type="hidden" placeholder="Platform" id="platformselect_cst">
						<input type="hidden" placeholder="Audience" id="audienceselect_cst">
						<input type="hidden" placeholder="Features" id="featuresselect_cst">
						<input type="hidden" placeholder="Integration" id="integrationselect_cst">
						<input type="hidden" placeholder="Revenue" id="revenueselect_cst">
						<input type="hidden" placeholder="Security" id="securityselect_cst">
						<div class="form-row">
							<div class="col-auto">
								<p>Money saved with Trango Tech</p>
								<div class="input-group">
									<input type="text" class="form-control" id="inlineFormInputGroupA" placeholder="0.00" value="0" readonly="">
									<div class="input-group-prepend">
										<div class="input-group-text">$</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<p>Time saved with Trango Tech</p>
								<div class="input-group">
									<input type="text" class="form-control" id="inlineFormInputGroupB" placeholder="0" value="0" readonly="">
									<div class="input-group-prepend">
										<div class="input-group-text">hrs</div>
									</div>
								</div>
							</div>
							<div class="col-auto">
								<p>Project Timeline</p>
								<div class="input-group">
									<input type="text" class="form-control" id="inlineFormInputGroupC" placeholder="0" value="0" readonly="">
									<div class="input-group-prepend">
										<div class="input-group-text">Weeks</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#next-project-modal">Book Now</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End Cost Calculator -->

<!-- Start Cost Calculator -->
<section class="service-section-app py-5 dark-bg2">
	<div class="container">
		<div class="row">
			<div class="col-12 wow fadeIn">
				<div class="common-heading ptag">
					<div data-text="Cost Calculator" class="light-bg-text bg-text">
						<h2>App Development <span>Cost Calculator</span></h2>
					</div>
					<p>Have an app idea and wondering what it might cost to build? Our app development cost calculator is designed to give you a clear and accurate estimate. Whether you're launching a startup or expanding an existing business, this tool helps you understand the potential investment required. By considering key factors like platform (iOS or Android), features, complexity, and design, it delivers a reliable cost estimate to guide your planning. With this insight, you can budget effectively, set realistic expectations, and take the first step toward transforming your idea into a successful digital product.</p>
				</div>
			</div>
			<div class="col-12 wow fadeIn mt-3">
				<div class="common-heading ptag">
					<h2>Get an Instant Price Breakdown with Our <span>Mobile App Development Cost Calculator</span></h2>
					<p>Our mobile app development cost calculator is a simple yet powerful tool designed to deliver accurate cost estimates tailored to your app's specific features and requirements. Whether you're building a straightforward app or a complex mobile solution, this tool provides a quick and transparent breakdown of expected expenses.</p>
					<p>Just input key project details—such as app complexity, features, target platforms (iOS, Android, or both), UI/UX design needs, and more—to instantly receive a personalized cost estimate. The calculator covers all major stages of development, including design, coding, testing, and deployment.</p>
					<p>Whether you're planning a basic app, a robust enterprise solution, or a cross-platform experience, this tool helps you make informed decisions about budgeting, timelines, and project scope. It's the perfect first step toward transforming your app idea into a market-ready product.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Start Cost Calculator -->

<!--Start Let's Work Together-->
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
<!--End Let's Work Together-->

<!--Start Why Choose-->
<section class="why-choose bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Choose Us" class="dark-bg-text bg-text">
						<h2 class="text-white">Why Choose <span>AppsNation</span></h2>
					</div>
					<p class="text-white">We assist you in using Android's distinct set of characteristics by merging it with cutting-edge technologies such as <a href="{{url('/ar-app-development')}}" target="_blank">Augmented Reality</a>, <a href="{{url('/vr-app-development')}}" target="_blank">Virtual Reality</a>, <a href="{{url('/mr-app-development')}}" target="_blank">Mixed Reality</a>, and Blockchain.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/free-mobile-app-consultation.svg" alt="Free Mobile App Consultation" class="img-fluid">
					</div>
					<h3 class="title">Free Mobile App Consultation</h3>
					<p class="description">With AppsNation, you can consult your way to success for free.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/50+-expert-android-developers.svg" alt="50+ Expert Android Developers" class="img-fluid">
					</div>
					<h3 class="title">50+ Expert Android Developers</h3>
					<p class="description">Unleash your true potential with best-in-class Android developers across the globe.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/flexible-hiring-models.svg" alt="Flexible Hiring Models" class="img-fluid">
					</div>
					<h3 class="title">Flexible Hiring Models</h3>
					<p class="description">AppsNation is accessible to everyone regardless of the business size and the industry with personalized pricing packages.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/247-technical-support.svg" alt="24/7 Technical Support" class="img-fluid">
					</div>
					<h3 class="title">24/7 Technical Support</h3>
					<p class="description">Never feel overwhelmed; our technical staff is available 24/7 to resolve any issues with the application.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/100-transparency.svg" alt="100% Transparency" class="img-fluid">
					</div>
					<h3 class="title">100% Transparency</h3>
					<p class="description">With customer satisfaction our utmost priority, we keep ourselves transparent to the client to trust us with the app.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<div class="timeline-year">
						 <img loading="lazy" src="images/why-choose/3-months-free-delivery.svg" alt="3-Months Free Support After Delivery" class="img-fluid">
					</div>
					<h3 class="title">3-Month Free Support After Delivery</h3>
					<p class="description">We offer 3-month of free support after app launch to ensure the app's integrity.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--Start Why Choose-->

<!--Start Process-->
<section class="process-block bg-gradient3 py-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="common-heading ptag wow fadeIn">
					<div data-text="Process" class="light-bg-text bg-text mt-5">
						<h2>Our <span>Android App</span> Development Process</h2>
					</div>
					<p>AppsNation offers clients an easy and agile Android app development process with a result-driven ideology.</p>
				</div>
			</div>
		</div>
		<div class="row upset justify-content-center mt30">
			<div class="col-12 col-md-6 col-lg-4">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">01</p>
					<h3 class="title">Requirement Analysis</h3>
					<p class="description">Knowing your UX&UI depending on your target audience is one of the most crucial aspects of the study. Based on your target region, you must know your target audience, age, languages, design, and typefaces. This phase also entails determining which technology you'll use to create your app. Reach out to AppsNation to present your valuable Android app ideas to our competent project managers. We give full authority to the client to convey his requirements effectively while we prepare a business document with a project brief in it.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-md-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">02</p>
					<h3 class="title">App Development Strategies</h3>
					<p class="description">We conduct an in-depth analysis of your business, target audience, and competitors to deliver a mindful result-driven Android app development strategy for your bespoke application. Our experienced professionals in mobile development offer you a solution that maximizes the conversion rate.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3 mt-lg-0">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">03</p>
					<h3 class="title">Wireframing And Designing</h3>
					<p class="description">Our skilled UI/UX designers develop the most attractive designs and prototypes that are technology-rich, scalable, and reliable to get outstanding outcomes. The preliminary design is updated and completed by the customer after any necessary modifications and moderations.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">04</p>
					<h3 class="title">Development Phase</h3>
					<p class="description">According to coding standards, we create Android apps based on customer specifications and requirements with cutting-edge technology and tools. The application we develop is vital in solving complex customer problems and increasing the total value of businesses.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">05</p>
					<h3 class="title">App Testing</h3>
					<p class="description">To guarantee that the Android app we developed is secure and functional, our skilled quality assurance team rigorously tests the application inside and out to verify that it is bug-free. Our highly qualified QA staff understands varied testing issues from start to finish.</p>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-4 mt-3">
				<div class="timeline wow fadeIn h-100">
					<p class="timeline-year">06</p>
					<h3 class="title">App Deployment</h3>
					<p class="description">Once the application has been thoroughly tested and authorized by the customer, it will be released on the Google Play Store in accordance with its requirements. AppsNation has a long history of submitting Android apps to the Google Play Store.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Process-->

<!--Start Let's Work Together-->
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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
									<p class="text-center pt-2">{{$item['content']}}</p>
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
            <!-- <div class="row mt-3 px-3"> -->
			@foreach($testimonials as $item)
                <!-- <div class="col-lg-6 mt-3 wow fadeIn"> -->
					<div class="tcd card h-100">
						<div class="testimonial-card card-body">
							<div class="tt-text">
								<p>{{$item['title']}}</p>
							</div>
							<div class="client-thumbs mt30">
								<div class="media v-center upset">
									<!-- <div class="user-image bdr-radius">  <img loading="lazy" src="images/user-thumb/girl.webp" alt="girl" class="img-fluid rounded-circle" /> </div> -->
									<div class="media-body user-info v-center">
										<h5>{{$item['name']}}</h5>
										<p>{{$item['location']}}</p> <i class="fas fa-quote-right posiqut"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
                <!-- </div> -->
            @endforeach
            <!-- </div> -->
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
								Will we sign an NDA to keep my Android app idea confidential?
                            </button>
                        </h2>
                        <div id="collapse-1a" class="accordion-collapse collapse" aria-labelledby="heading-b" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>A Non-Disclosure Agreement (NDA) is a legal document that we employ when working on various projects to ensure that your ideas are not duplicated or leaked to rivals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2a" aria-expanded="true" aria-controls="collapseOne">
								How do you allocate the resources for my app development in Android?
                            </button>
                        </h2>
                        <div id="collapse-2a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>For us, resource allocation is both an art and a science. Therefore, we thoroughly research your company and its competitors, including the target audience and their psychology, to provide an app that efficiently performs its objective.</p>
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
                                    <p>AppsNation is equipped with developers that use the high-end latest technologies and tools to foster your ideal android application.</p>
									<p class="pt-2">Mobile Frontend</p>
									<ul class="ps-5">
										<li>Native (Java/Kotlin)</li>
										<li>Xamarin Native C</li>
										<li>Xamarin Forms for Android</li>
										<li>Cordova/PhoneGap</li>
										<li>Ionic</li>
										<li>React Native</li>
									</ul>
									<p class="pt-2">Operating System</p>
									<ul class="ps-5">
										<li>Android OS</li>
									</ul>
									<p class="pt-2">SDKs/Tools/Framework</p>
									<ul class="ps-5">
										<li>Android Studio</li>
										<li>Google Fit SDK</li>
										<li>Xamarin Forms for Android</li>
										<li>OpenGL</li>
										<li>ARCorec</li>
										<li>Android Auto</li>
									</ul>
									<p class="pt-2">Platforms</p>
									<ul class="ps-5">
										<li>Amazon Web</li>
										<li>Services (AWS)</li>
										<li>Microsoft Azure</li>
										<li>Google Cloud</li>
										<li>Platform (GCP)</li>
										<li>Firebase</li>
										<li>AppCenter for CI/CD</li>
										<li>Kubernetes</li>
									</ul>
									<p class="pt-2">Others</p>
									<ul class="ps-5">
										<li>Google Assistant</li>
										<li>Google VR</li>
										<li>Machine Language (ML Kit)</li>
										<li>Cordova/PhoneGap</li>
										<li>Google Cloud</li>
										<li>Google Analytics</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me to upload my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-4a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Submitting your android app on Google Play Store is a vital part of our inclusive android app development services. AppsNation has years of experience launching android apps on the Play Store, sufficiently following the guidelines.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5a" aria-expanded="true" aria-controls="collapseOne">
								Will I be getting any support after project completion?
                            </button>
                        </h2>
                        <div id="collapse-5a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Our top-notch mobile app development services include a 3-months free support and maintenance program to guarantee a successful app journey by minimizing the glitches based on user feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6a" aria-expanded="true" aria-controls="collapseOne">
								How much does it cost to make an Android App?
                            </button>
                        </h2>
                        <div id="collapse-6a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>The pricing is influenced by various factors, including the complexity of the android app development. Typically, firms estimate the number of APIs and screens in an application and price accordingly. On the other hand, a standard app would cost you $5,000 or more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7a" aria-expanded="true" aria-controls="collapseOne">
								Why your company might need Android application services?
                            </button>
                        </h2>
                        <div id="collapse-7a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Most businesses like the Android app because it allows them to reach many customers by expanding dedicated applications and growing their business. Android app development may help a company reach out to more people, increase revenue, boost brand image, and build a loyal client base.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8a" aria-expanded="true" aria-controls="collapseOne">
								What should I pay attention to while looking for Android application developers?
                            </button>
                        </h2>
                        <div id="collapse-8a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>Hiring top Android developers will assist you in developing a great app that will stand out from the crowd and earn a sizable profit. Here's how to find one for yourself.</p>
									<ul class="ps-5">
										<li>Developers must be conversant with fundamental programming languages such as syntax and basics, frameworks, multithreading and concurrency, functional programming, and generics.</li>
										<li>To accelerate development processes, your developers will need to employ an SDK. Ascertain that they are familiar with Android SDKs.</li>
										<li>Android Studio knowledge is required.</li>
										<li>The developer must be well-versed in all APIs because they link applications to third-party services or apps.</li>
										<li>Developers must be familiar with databases to manage significant volumes of data and interact with a database located outside of the smartphone.</li>
										<li>Developers must comprehend the reasoning behind your company's actions. It will assist them in identifying key features, planning the development process, and delivering a mobile app solution that completely fulfils business needs.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-9a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me to upload my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-9a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We approach an agile android app development process to ease our clients for the smoothest interaction with us that includes;</p>
									<ul class="ps-5">
										<li>Analysis of Requirements.</li>
										<li>App Development Strategies.</li>
										<li>Wireframing & Designing.</li>
										<li>Development.</li>
										<li>Testing.</li>
										<li>Deployment.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-10a" aria-expanded="true" aria-controls="collapseOne">
								How AppsNation meet the current trends in native Android app development?
                            </button>
                        </h2>
                        <div id="collapse-10a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation is equipped with a team of extremely tech-savvy individuals ready to learn and grow. As a result, self-study is what they do in their spare time. Furthermore, they are very engaged and driven in the subject; as a result, they crave evolution and keep up with the current developments in native Android app development.</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-11a" aria-expanded="true" aria-controls="collapseOne">
								Will you assist me to upload my Android app on the Play Store?
                            </button>
                        </h2>
                        <div id="collapse-11a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>AppsNation is equipped with top-rated android developers having years of experience in developing android developers for various industries. We have them on board to make the most out of them for your ideal android app. Besides, we offer our clients undeniable benefits such as;</p>
									<ul class="ps-5">
										<li>Free Consultation.</li>
										<li>50+ Expert Android Developers.</li>
										<li>Flexible Hiring Models.</li>
										<li>Technical Support.</li>
										<li>100% Transparency.</li>
										<li>3-Month Support After Delivery.</li>
									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="accordion-item bdr0">
                        <h2 class="accordion-header" id="heading-c">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-12a" aria-expanded="true" aria-controls="collapseOne">
								How can I hire Android app developers from AppsNation?
                            </button>
                        </h2>
                        <div id="collapse-12a" class="accordion-collapse collapse" aria-labelledby="heading-c" data-bs-parent="#accordionExample-a">
                            <div class="accordion-body">
                                <div class="data-reqs">
                                    <p>We are easy to reach, just a click away. Tap on chat now or request a free quote by filling up the form mentioning your requirements for your bespoke Android app. </p>
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

<div class="modal" id="submissionModal">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<div class="common-heading ptag">
					<h2 class="mb-4">Enter Data To Get a <span>Detailed Breakdown of Your App Cost</span></h2>
				</div>
				<div class="form-block header-quote-form">
					<form action="{{ route('cost-calculator.submit') }}" method="post" id="contactForm" data-toggle="validator" class="shake">
						@csrf
						<div class="row">
							<div class="form-group col-sm-6 col-xl-4">
								<input type="text" id="name" name="name" placeholder="Enter name" required="" data-error="Please fill Out" class="form-control" maxlength="50">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6 col-xl-4">
								<input type="email" id="email" name="email" placeholder="Enter email" required="" maxlength="50">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6 col-xl-4">
								<input type="text" id="mobile" name="mobile" placeholder="Enter mobile" required="" data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-12">
								<textarea id="message" name="message" rows="5" placeholder="Enter your message" required="" maxlength="500"></textarea>
								<div class="help-block with-errors"></div>
							</div>
							
							<!-- Hidden input for selected calculator inputs -->
							<input type="hidden" id="selected_inputs_data" name="selected_inputs_data" value="">
							<!-- <input type="hidden" id="completeformdata" name="completeformdata" value=""> -->
						</div>
						<div class="modal-footer">
							<button type="submit" name="submit" id="form-submit" class="btn lnk button-arounder bg-btn">Submit <i class="fas fa-chevron-right fa-icon"></i></button>
						</div>
						
					</form>
				</div>
			</div>
			<!-- Modal footer -->
		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('example-advanced-form');
    
    // Function to collect all selected inputs
    function collectSelectedInputs() {
        const selectedInputs = {
            business: [],
            platform: [],
            audience: [],
            features: [],
            integrations: [],
            revenue: [],
            security: []
        };

        // Collect selected business (radio buttons)
        const selectedBusiness = document.querySelector('input[name="radio-group"]:checked');
        if (selectedBusiness) {
            selectedInputs.business.push(selectedBusiness.value);
        }

        // Collect selected platforms (checkboxes)
        document.querySelectorAll('.select_platform:checked').forEach(checkbox => {
            selectedInputs.platform.push(checkbox.value);
        });

        // Collect selected audience (checkboxes)
        document.querySelectorAll('.select_audience:checked').forEach(checkbox => {
            selectedInputs.audience.push(checkbox.value);
        });

        // Collect selected features (checkboxes)
        document.querySelectorAll('.shopfeat_select:checked, .heaint_select:checked, .eveint_select:checked, .othint_select:checked').forEach(checkbox => {
            selectedInputs.features.push(checkbox.value);
        });

        // Collect selected integrations (checkboxes)
        document.querySelectorAll('.select_integration:checked').forEach(checkbox => {
            selectedInputs.integrations.push(checkbox.value);
        });

        // Collect selected revenue options (checkboxes)
        document.querySelectorAll('.select_revenue:checked').forEach(checkbox => {
            selectedInputs.revenue.push(checkbox.value);
        });

        // Collect selected security options (checkboxes)
        document.querySelectorAll('.select_security:checked').forEach(checkbox => {
            selectedInputs.security.push(checkbox.value);
        });

        console.log('Selected Inputs:', selectedInputs);
        return selectedInputs;
    }

    // Add change event listeners to all inputs
    const allInputs = form.querySelectorAll('input[type="radio"], input[type="checkbox"]');
    allInputs.forEach(input => {
        input.addEventListener('change', collectSelectedInputs);
    });

    // Handle form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            phone: document.getElementById('phone').value,
            selected_inputs: collectSelectedInputs()
        };

        // Show loading state
        const submitButton = document.getElementById('form-submit');
        const originalButtonText = submitButton.innerHTML;
        submitButton.innerHTML = 'Submitting...';
        submitButton.disabled = true;

        // Send data to server
        fetch('/submit-cost-calculator', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Form submitted successfully! We will contact you soon.');
                form.reset();
            } else {
                alert('Error: ' + (data.message || 'Something went wrong'));
            }
        })
        .catch(error => {
            alert('Error: ' + error.message+'ahahha');
        })
        .finally(() => {
            // Reset button state
            submitButton.innerHTML = originalButtonText;
            submitButton.disabled = false;
        });
    });
});
</script>

@endsection