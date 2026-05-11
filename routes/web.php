<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/a', function () {
    return view('welcome');
});
Route::get('/','HomeController@index');

Route::get('/advertising','HomeController@advertising');
Route::get('/healthcare-and-life-science','HomeController@healthCareAndLifeScience');
Route::get('/ecommerce-and-retail','HomeController@ecommerceAndRetail');
Route::get('/education','HomeController@education');
Route::get('/software-and-high-tech','HomeController@softwareAndHighTech');
Route::get('/automative-and-transport','HomeController@automativeAndtransport');
Route::get('/gaming-and-leisure','HomeController@gamingAndLeisure');
Route::get('/financial-software-development','HomeController@financialSoftwareDevelopment');
Route::get('/media-and-entertainment','HomeController@mediaAndEntertainment');
Route::get('/travel-and-hospitality','HomeController@travelAndHospitality');
Route::get('/real-estate-and-property','HomeController@realStateAndProperty');
Route::get('/sports-teams-and-leagues','HomeController@sportsTeamsAndLeagues');
Route::get('/booking-app','HomeController@bookingApp');
Route::get('/fitness-app','HomeController@fitnessApp');
Route::get('/fleet-app','HomeController@fleetApp');
Route::get('/loyaltyapp','HomeController@loyaltyApp');
Route::get('/moverapp','HomeController@moverApp');
Route::get('/realestate-app','HomeController@realEstateApp');
Route::get('/restaurant-app','HomeController@restaurantApp');
Route::get('/shopping-express-app','HomeController@shoppingExpressApp');
Route::get('/sport-app','HomeController@sportApp');
Route::get('/mobile-app-development','HomeController@mainmobileapp');
Route::get('/web-portal-app-development','HomeController@mainwebapp');
Route::get('/ar-vr-app-development','HomeController@mainarvrapp');
Route::get('/connected-devices','HomeController@mainconnecteddevices');
Route::get('/design-and-animation','HomeController@maindesignandanimation');
Route::get('/android-app-development','HomeController@androidApp');
Route::get('/ios-app-development','HomeController@iosApp');
Route::get('/game-app-development','HomeController@gameApp');
Route::get('/cross-platform-app-development','HomeController@crossApp');
Route::get('/e-commerce-app-development','HomeController@ecommerceApp');
Route::get('/web-app-development','HomeController@webApp');
Route::get('/ar-app-development','HomeController@arApp');
Route::get('/vr-app-development','HomeController@vrApp');
Route::get('/iot-app-development','HomeController@iotApp');
Route::get('/wearable-app-development','HomeController@wearableApp');
Route::get('/portfolio','HomeController@portfolio');
Route::get('/contact-us','HomeController@contactus');
Route::get('/about-us','HomeController@aboutus');
Route::get('/clients','HomeController@clients');
Route::get('/our-process','HomeController@ourprocess');
Route::get('/testimonials','HomeController@testimonials');
Route::get('/career','HomeController@career');
Route::get('/privacy-policy','HomeController@privacypolicy');
Route::post("/leads","HomeController@leads")->name('leads');
Route::post("/leadsmobile","HomeController@leadsmobile")->name('leadsmobile');
Route::post("/leadsservices","HomeController@leadsservices")->name('leadsservices');
Route::post("/applicant","HomeController@applicant")->name('applicant');
Route::get('/blog-1','HomeController@blog_1');
Route::get('/blog-2','HomeController@blog_2');
Route::get('/blog-3','HomeController@blog_3');
Route::get('/thank-you','HomeController@thankyou');
Route::get('/tech-stack','HomeController@techStack');
Route::get('/terms-and-conditions','HomeController@termsandcondition');
Route::get('/company-policy','HomeController@companypolicy');
Route::get('/exterior-3d','HomeController@exterior3d');
Route::get('/interior-3d','HomeController@interior3d');
Route::get('/animation-services','HomeController@animationServices');
Route::get('/industrial-automation','HomeController@industrialAutomation');
Route::get('/floor-plan','HomeController@floorPlan');
Route::get('/metaverse-development','HomeController@metaverseDevelopment');
Route::get('/mr-app-development','HomeController@mrAppDevelopment');
Route::get('/xr-app-development','HomeController@xrAppDevelopment');
Route::get('/digital-marketing','HomeController@digitalMarketing');
Route::get('/2d-art','HomeController@art2d');
Route::get('/3d-art','HomeController@art3d');
Route::get('/case-studies/travel-agency-app','HomeController@travelAgencyApp');
Route::get('/case-studies/travel-agency-web','HomeController@travelAgencyWeb');
Route::get('/case-studies/real-estate-app','HomeController@realEstateAppPortfolio');
Route::get('/case-studies/real-estate-web','HomeController@realEstateWeb');
Route::get('/case-studies/loyalty-app','HomeController@loyaltyApps');
Route::get('/case-studies/loyalty-web','HomeController@loyaltyWeb');
Route::get('/case-studies/gym-app','HomeController@gymApp');
Route::get('/case-studies/gym-web','HomeController@gymWeb');
Route::get('/case-studies/mover-app','HomeController@moverApps');
Route::get('/case-studies/mover-web','HomeController@moverWeb');
Route::get('/case-studies/abc-web','HomeController@abcWeb');
Route::get('/solutions','HomeController@solutions');
Route::get('/industries','HomeController@industries');
Route::get('/services','HomeController@services');
Route::get('/app-development-new-york','HomeController@new_york');
Route::get('/app-development-los-angeles','HomeController@los_angeles');
Route::get('/app-development-houston','HomeController@houston');
Route::get('/app-development-austin','HomeController@austin');
Route::get('/app-development-dallas','HomeController@dallas');
Route::get('/app-development-birmingham','HomeController@birmingham');
Route::get('/app-development-dubai','HomeController@dubai');
Route::get('/app-development-johannesburg','HomeController@johannesburg');
Route::get('/app-development-karachi','HomeController@karachi');
Route::get('/app-development-leeds','HomeController@leeds');
Route::get('/app-development-london','HomeController@london');
Route::get('/app-development-melbourne','HomeController@melbourne');
Route::get('/app-development-miami','HomeController@miami');
Route::get('/app-development-qatar','HomeController@qatar');
Route::get('/app-development-riyadh','HomeController@riyadh');
Route::get('/app-development-rome','HomeController@rome');
Route::get('/app-development-san-francisco','HomeController@san_francisco');
Route::get('/app-development-washington','HomeController@washington');
Route::get('/app-development-bahrain','HomeController@bahrain');
Route::get('/app-development-oman','HomeController@oman');
Route::get('/app-development-sydney','HomeController@sydney');
Route::get('/app-development-toronto','HomeController@toronto');
Route::get('/app-development-montana','HomeController@montana');
Route::get('/app-development-kuwait','HomeController@kuwait');
Route::get('/app-development-usa','HomeController@usa');
Route::get('/app-development-gcc','HomeController@gcc');
Route::get('/app-development-uk','HomeController@uk');
Route::get('/app-development-africa','HomeController@africa');
Route::get('/app-development-europe','HomeController@europe');
Route::get('/app-development-australia','HomeController@australia');
Route::get('/app-development-canada','HomeController@canada');
Route::get('/app-development-pakistan','HomeController@pakistan');
Route::get('/app-development-morocco','HomeController@morocco');
Route::get('/app-development-germany','HomeController@germany');
Route::get('/app-development-saudi-arabia','HomeController@saudi_arabia');
Route::get('/app-development-uae','HomeController@uae');
Route::get('/app-development-italy','HomeController@italy');
Route::get('/locations','HomeController@locations');
Route::get('/cost-calculator', 'HomeController@cost_calculator')->name('cost-calculator');
Route::get('/review-data2','ScraperController@scrapeTestimonials2');
Route::get('/review-data','ScraperController@scrapeTestimonials');
Route::get('/upcity-review-data','ScraperController@upCityTestimonials');
Route::post('/submit-cost-calculator', [App\Http\Controllers\CostCalculatorController::class, 'submit'])->name('cost-calculator.submit');

// new case study
Route::get('/case-studies/royal-ride-app','HomeController@royalRideApp');
Route::get('/case-studies/boujee-beachin-app','HomeController@boujeeBeachinApp');
Route::get('/case-studies/wood-land-app','HomeController@woodLandApp');
Route::get('/case-studies/neuro-knights-app','HomeController@neuroKnightsApp');
Route::get('/case-studies/mike-mathis-app','CaseStudyController@mikeMathisApp');
Route::get('/case-studies/grave-love-app','CaseStudyController@graveLoveApp');
Route::get('/case-studies/bomb-defuse-app','CaseStudyController@bombDefuse');
Route::get('/case-studies/couple-app','CaseStudyController@coupleApp');
Route::get('/case-studies/car-mechanic-app','CaseStudyController@carMechanic');
Route::get('/case-studies/toy-sort-puzzle','CaseStudyController@toySortPuzzle');
Route::get('/case-studies/royal-relax-spa','CaseStudyController@royalrelaxspa');
Route::get('/case-studies/load-board','CaseStudyController@Loadboard');
Route::get('/case-studies/all-traders-app','CaseStudyController@alltraders');