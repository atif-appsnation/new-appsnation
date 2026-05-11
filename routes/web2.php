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

//casestudies
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

// solutions and industries pages
Route::get('/solutions','HomeController@solutions');
Route::get('/industries','HomeController@industries');
Route::get('/services','HomeController@services');

