<?php

namespace App\Http\Controllers;

use App\Models\Agencystack;
use App\Models\Award;
use App\Models\Casestudyapp;
use App\Models\Client;
use App\Models\Portfolio;

use Illuminate\Http\Request;
use App\Models\Career;
use App\Models\Lead;
use App\Models\Metabank;
use App\Models\Techstack;
use App\Models\Testimonial;
use App\Models\Metatag;
use App\Models\Metatitle;

use Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;


use App\Mail\SendMail;
use App\Mail\ReceivedMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    //
    public function index()
    {
        $agencystack = Agencystack::where('main', 1)->orderBy('lft', 'asc')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $clients = Client::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();

        $metabank = Metabank::where('slug', 'Main')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Main')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Main')->get();
        $metatitle = Metatitle::where('slug', 'Main')->get();
        $data = $this->blogApi();
        return view('index', [
            'agencystack' => $agencystack,
            'awards' => $awards,
            'clients' => $clients,
            'casestudy' => $casestudy,
            'testimonials' => $testimonials,
            'metabank' => $metabank,
            'metabank2' => $metabank2,
            'metatitle' => $metatitle,
            'metatag' => $metatag,
            'data' => $data,


        ]);
    }
    //industries pages
    public function advertising()
    {
        $metabank = Metabank::where('slug', 'Advertising')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Advertising')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Advertising')->get();
        $metatitle = Metatitle::where('slug', 'Advertising')->get();

        return view('advertising', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function healthCareAndlifeScience()
    {
        $metabank = Metabank::where('slug', 'HealthCareAndLifeScience')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'HealthCareAndLifeScience')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'HealthCareAndLifeScience')->get();
        $metatitle = Metatitle::where('slug', 'HealthCareAndLifeScience')->get();

        return view('healthcareandlifescience', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function ecommerceAndRetail()
    {
        $metabank = Metabank::where('slug', 'E-commerceAndRetail')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'E-commerceAndRetail')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'commerceAndRetail')->get();
        $metatitle = Metatitle::where('slug', 'commerceAndRetail')->get();

        return view('ecommerceandretail', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function education()
    {
        $metabank = Metabank::where('slug', 'Education')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Education')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Education')->get();
        $metatitle = Metatitle::where('slug', 'Education')->get();

        return view('education', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function softwareAndHighTech()
    {
        $metabank = Metabank::where('slug', 'SoftwareAndHighTech')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'SoftwareAndHighTech')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'SoftwareAndHighTech')->get();
        $metatitle = Metatitle::where('slug', 'SoftwareAndHighTech')->get();

        return view('softwareandhightech', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function automativeAndtransport()
    {

        $metabank = Metabank::where('slug', 'AutomativeAndTransport')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'AutomativeAndTransport')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'AutomativeAndTransport')->get();
        $metatitle = Metatitle::where('slug', 'AutomativeAndTransport')->get();

        return view('automativeandtransport', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function gamingAndLeisure()
    {
        $metabank = Metabank::where('slug', 'GamingAndLeisure')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'GamingAndLeisure')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'GamingAndLeisure')->get();
        $metatitle = Metatitle::where('slug', 'GamingAndLeisure')->get();

        return view('gamingandleisure', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function financialSoftwareDevelopment()
    {
        $metabank = Metabank::where('slug', 'FinancialSoftwareDevelopment')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'FinancialSoftwareDevelopment')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'FinancialSoftwareDevelopment')->get();
        $metatitle = Metatitle::where('slug', 'FinancialSoftwareDevelopment')->get();

        return view('financialsoftwaredevelopment', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function mediaAndEntertainment()
    {
        $metabank = Metabank::where('slug', 'MediaAndEntertainment')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'MediaAndEntertainment')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'MediaAndEntertainment')->get();
        $metatitle = Metatitle::where('slug', 'MediaAndEntertainment')->get();

        return view('mediaandentertainment', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function travelAndHospitality()
    {
        $metabank = Metabank::where('slug', 'TravelAndHospitality')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'TravelAndHospitality')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'TravelAndHospitality')->get();
        $metatitle = Metatitle::where('slug', 'TravelAndHospitality')->get();

        return view('travelandhospitality', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function realStateAndProperty()
    {
        $metabank = Metabank::where('slug', 'RealEstateAndProperty')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'RealEstateAndProperty')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'RealEstateAndProperty')->get();
        $metatitle = Metatitle::where('slug', 'RealEstateAndProperty')->get();

        return view('realstateandproperty', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function sportsTeamsAndLeagues()
    {

        $metabank = Metabank::where('slug', 'SportTeamAndLeagues')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'SportTeamAndLeagues')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'SportTeamAndLeagues')->get();
        $metatitle = Metatitle::where('slug', 'SportTeamAndLeagues')->get();

        return view('sportsteamsandleagues', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }
    //solution pages
    public function bookingApp()
    {

        $metabank = Metabank::where('slug', 'BookingApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'BookingApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'BookingApp')->get();
        $metatitle = Metatitle::where('slug', 'BookingApp')->get();

        return view('bookingapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function fitnessApp()
    {
        $metabank = Metabank::where('slug', 'FitnessApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'FitnessApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'FitnessApp')->get();
        $metatitle = Metatitle::where('slug', 'FitnessApp')->get();

        return view('fitnessapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function fleetApp()
    {
        $metabank = Metabank::where('slug', 'FleetApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'FleetApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'FleetApp')->get();
        $metatitle = Metatitle::where('slug', 'FleetApp')->get();

        return view('fleetapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function loyaltyApp()
    {
        $metabank = Metabank::where('slug', 'LoyaltyApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'LoyaltyApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'LoyaltyApp')->get();
        $metatitle = Metatitle::where('slug', 'LoyaltyApp')->get();

        return view('loyaltyapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function moverApp()
    {
        $metabank = Metabank::where('slug', 'MoverApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'MoverApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'MoverApp')->get();
        $metatitle = Metatitle::where('slug', 'MoverApp')->get();

        return view('moverapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function realEstateApp()
    {
        $metabank = Metabank::where('slug', 'RealEstateApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'RealEstateApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'RealEstateApp')->get();
        $metatitle = Metatitle::where('slug', 'RealEstateApp')->get();

        return view('realestateapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function restaurantApp()
    {
        $metabank = Metabank::where('slug', 'RestaurantApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'RestaurantApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'RestaurantApp')->get();
        $metatitle = Metatitle::where('slug', 'RestaurantApp')->get();

        return view('restaurantapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function shoppingExpressApp()
    {
        $metabank = Metabank::where('slug', 'ShoppingExpressApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'ShoppingExpressApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'ShoppingExpressApp')->get();
        $metatitle = Metatitle::where('slug', 'ShoppingExpressApp')->get();

        return view('shoppingexpressapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function sportApp()
    {
        $metabank = Metabank::where('slug', 'SportApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'SportApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'SportApp')->get();
        $metatitle = Metatitle::where('slug', 'SportApp')->get();

        return view('sportapp', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    //services pages

    public function androidApp()
    {
        $metabank = Metabank::where('slug', 'AndroidApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'AndroidApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'AndroidApp')->get();
        $metatitle = Metatitle::where('slug', 'AndroidApp')->get();



        $techstack = Techstack::where('android', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('android', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('android-app');



        return view(
            'androidapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,


            ]
        );
    }

    public function iosApp()
    {
        $metabank = Metabank::where('slug', 'IosApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'IosApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'IosApp')->get();
        $metatitle = Metatitle::where('slug', 'IosApp')->get();

        $techstack = Techstack::where('ios', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('ios', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('ios-app');

        return view(
            'iosapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }

    public function gameApp()
    {

        $metabank = Metabank::where('slug', 'GameApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'GameApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'GameApp')->get();
        $metatitle = Metatitle::where('slug', 'GameApp')->get();

        $techstack = Techstack::where('game', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('game', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('game-app');


        return view(
            'gameapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }

    public function crossApp()
    {

        $metabank = Metabank::where('slug', 'CrossApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'CrossApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'CrossApp')->get();
        $metatitle = Metatitle::where('slug', 'CrossApp')->get();

        $techstack = Techstack::where('crossapp', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('crossapp', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('cross-platform-app');

        return view(
            'crossplatformapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }

    public function ecommerceApp()
    {
        $metabank = Metabank::where('slug', 'E-commerceApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'E-commerceApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'E-commerceApp')->get();
        $metatitle = Metatitle::where('slug', 'E-commerceApp')->get();


        $techstack = Techstack::where('ecommerce', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('ecommerce', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('e-commerce-app');

        return view(
            'ecommerceapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }
    //
    public function webApp()
    {
        $metabank = Metabank::where('slug', 'WebApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'WebApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'WebApp')->get();
        $metatitle = Metatitle::where('slug', 'WebApp')->get();

        $techstack = Techstack::where('web', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('web', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('web-app');


        return view(
            'webapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }
    public function arApp()
    {
        $metabank = Metabank::where('slug', 'ArApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'ArApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'ArApp')->get();
        $metatitle = Metatitle::where('slug', 'ArApp')->get();


        $techstack = Techstack::where('ar', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('ar', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('ar-app');


        return view(
            'arapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }
    public function vrApp()
    {
        $metabank = Metabank::where('slug', 'VrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'VrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'VrApp')->get();
        $metatitle = Metatitle::where('slug', 'VrApp')->get();

        $techstack = Techstack::where('vr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('vr', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('vr-app');


        return view(
            'vrapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }
    public function iotApp()
    {
        $metabank = Metabank::where('slug', 'IotApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'IotApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'IotApp')->get();
        $metatitle = Metatitle::where('slug', 'IotApp')->get();

        $techstack = Techstack::where('iot', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('iot', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('iot-app');


        return view(
            'iotapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }
    public function wearableApp()
    {
        $metabank = Metabank::where('slug', 'WearableApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'WearableApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'WearableApp')->get();
        $metatitle = Metatitle::where('slug', 'WearableApp')->get();

        $techstack = Techstack::where('wearable', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('wearable', 1)->orderBy('lft', 'asc')->get()->toArray();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('wearable-app');


        return view(
            'wearableapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,

            ]
        );
    }


    ////////////////////
    public function contactus()
    {
        $metabank = Metabank::where('slug', 'Contactus')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Contactus')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Contactus')->get();
        $metatitle = Metatitle::where('slug', 'Contactus')->get();

        return view('contactus', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function aboutus()
    {
        $metabank = Metabank::where('slug', 'Aboutus')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Aboutus')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Aboutus')->get();
        $metatitle = Metatitle::where('slug', 'Aboutus')->get();

        return view('aboutus', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function clients()
    {
        $metabank = Metabank::where('slug', 'Clients')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Clients')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Clients')->get();
        $metatitle = Metatitle::where('slug', 'Clients')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();

        $clients = Client::orderBy('lft', 'asc')->get()->toArray();

        return view('clients', ['clients' => $clients, 'metabank' => $metabank, 'metabank2' => $metabank2, 'awards' => $awards, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function ourprocess()
    {
        $metabank = Metabank::where('slug', 'Ourprocess')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ourprocess')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Ourprocess')->get();
        $metatitle = Metatitle::where('slug', 'Ourprocess')->get();

        return view('ourprocess', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }
    public function testimonials()
    {

        $testimonials = Testimonial::all();

        $metabank = Metabank::where('slug', 'Testimonial')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Testimonial')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Testimonial')->get();
        $metatitle = Metatitle::where('slug', 'Testimonial')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();

        return view('testimonials', ['metabank' => $metabank, 'metabank2' => $metabank2, 'testimonials' => $testimonials, 'awards' => $awards, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function career()
    {
        $metabank = Metabank::where('slug', 'Career')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Career')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Career')->get();
        $metatitle = Metatitle::where('slug', 'Career')->get();

        return view('career', ['metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }


    public function portfolio()
    {
        $metabank = Metabank::where('slug', 'Portfolio')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Portfolio')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Portfolio')->get();
        $metatitle = Metatitle::where('slug', 'Portfolio')->get();


        if (request()->has('a')) {
            $portfolio = Portfolio::where('type', request('a'))->orderBy('lft', 'asc')->paginate(3)->appends('a', request('a'));
        } else {

            $portfolio = Portfolio::orderBy('lft', 'asc')->paginate(3);
        }
        return view('portfolio', ['portfolio' => $portfolio, 'metabank' => $metabank, 'metabank2' => $metabank2, 'metatitle' => $metatitle, 'metatag' => $metatag,]);
    }

    public function leads(Request $request)
    {
        // return "hello world";
        // dd($request);

        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            'subject' => 'required|max:255',
            'service' => 'max:255',
            'company' => 'max:255',
            'message' => '',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'captcha.required' => 'Please complete the CAPTCHA.',
            'captcha.captcha' => 'The CAPTCHA verification failed. Please try again.',
        ]);

        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = $field['subject'];
        $visit->service = $field['service'];
        $visit->company = $field['company'];
        $visit->message = $field['message'];
        $visit->save();

        $details = [

            "name" => $field['name'],
            "email" => $field['email'],
            "mobile" => $field['mobile'],
            "service" => $field['service'],
            "company" => $field['company'],
            "subject" => $field['subject'],
            "message" => $field['message'],

        ];

        // Mail::to("waqar@futurealiti.com")->send(new ReceivedMail($details));
        // Mail::to("info@appsnation.co")->send(new ReceivedMail($details));
        // Mail::to("sales@appsnation.co")->send(new ReceivedMail($details));
        // Mail::to($field['email'])->send(new SendMail($details));

        return Redirect::to('/thank-you')->withSuccess('Great! Form successfully submit.');
        // // return view('welcome');
    }
    public function leadsmobile(Request $request)
    {
        // return "hello world";
        // dd($request);

        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            // 'mobile' => 'required|regex:/(01)[0-9]{9}/'
            'subject' => 'required|max:255',
            // 'service' => 'max:255',
            // 'company' => 'max:255',
            'message' => ''
        ]);
        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = $field['subject'];
        $visit->service = '-';
        $visit->company = '-';
        $visit->message = $field['message'];
        $visit->save();

        $details = [

            "name" => $field['name'],
            "email" => $field['email'],
            "mobile" => $field['mobile'],
            "service" => "-",
            "company" => "-",
            "subject" => $field['subject'],
            "message" => $field['message'],

        ];
        // Mail::to("waqar@futurealiti.com")->send(new ReceivedMail($details));
        // Mail::to("info@appsnation.co")->send(new ReceivedMail($details));
        // Mail::to("sales@appsnation.co")->send(new ReceivedMail($details));

        // Mail::to($field['email'])->send(new SendMail($details));
        return Redirect::to('/thank-you')->withSuccess('Great! Form successfully submit.');
        // // return view('welcome');
    }
    public function leadsservices(Request $request)
    {
        // return "hello world";
        // dd($request);

        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            // 'mobile' => 'required|regex:/(01)[0-9]{9}/'
            // 'subject' => 'required|max:255',
            // 'service' => 'max:255',
            // 'company' => 'max:255',
            'message' => '',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'captcha.required' => 'Please complete the CAPTCHA.',
            'captcha.captcha' => 'The CAPTCHA verification failed. Please try again.',
        ]);
        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = '-';
        $visit->service = '-';
        $visit->company = '-';
        $visit->message = $field['message'];
        $visit->save();

        $details = [

            "name" => $field['name'],
            "email" => $field['email'],
            "mobile" => $field['mobile'],
            "service" => "-",
            "company" => "-",
            "subject" => "-",
            "message" => $field['message'],

        ];

        // Mail::to("info@digitroopers.com")->send(new ReceivedMail($details));
        // Mail::to($field['email'])->send(new SendMail($details));

        // Mail::to("waqar@futurealiti.com")->send(new ReceivedMail($details));
        // Mail::to("info@appsnation.co")->send(new ReceivedMail($details));
        // Mail::to("sales@appsnation.co")->send(new ReceivedMail($details));

        return Redirect::to('/thank-you')->with('success', 'Item created successfully!');
        // // return view('welcome');
    }


    public function mainmobileapp()
    {
        $metabank = Metabank::where('slug', 'MobileApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'MobileApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'MobileApp')->get();
        $metatitle = Metatitle::where('slug', 'MobileApp')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('mobile-app');

        return view(
            'mainmobileapp',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }


    public function mainwebapp()
    {
        $metabank = Metabank::where('slug', 'WebPortalApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'WebPortalApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'WebPortalApp')->get();
        $metatitle = Metatitle::where('slug', 'WebPortalApp')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('cross-platform-app');


        return view(
            'mainwebapp',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }



    public function mainarvrapp()
    {
        $metabank = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Ar-VrApp')->get();
        $metatitle = Metatitle::where('slug', 'Ar-VrApp')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('ar-vr-app');


        return view(
            'mainarvrapp',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }

    public function mainconnecteddevices()
    {
        $metabank = Metabank::where('slug', 'ConnectedDevice')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'ConnectedDevice')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'ConnectedDevice')->get();
        $metatitle = Metatitle::where('slug', 'ConnectedDevice')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('connect-devices');



        return view(
            'mainconnecteddevices',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }

    public function maindesignandanimation()
    {
        $metabank = Metabank::where('slug', 'DesignAndAnimation')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'DesignAndAnimation')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'DesignAndAnimation')->get();
        $metatitle = Metatitle::where('slug', 'DesignAndAnimation')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('design-and-animation');



        return view(
            'maindesignandanimationservices',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }


    public function applicant(Request $request)
    {

        if ($request->file('filename')) {
            $filePath = $request->file('filename');
            $imageName = $filePath->getClientOriginalName();
            $fileName = md5(time()) . '.' . $request->file('filename')->extension();
            $fileName2 = URL::to('/') . '/uploads/uploads/' . $fileName;
            $path = $request->file('filename')->storeAs('uploads', $fileName, 'uploads');
        } else {
            $fileName2 = "";
        }



        $applicant = Career::create([


            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
            'jobrole' => $request->job,
            'file' => $fileName2,
            'position' => $request->position,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return Redirect::to('/thank-you')->with('success', 'Item created successfully!');
    }
    public function blog_1()
    {
        $metabank = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Main')->get();
        $metatitle = Metatitle::where('slug', 'Main')->get();

        return view('blog-1', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,

            'metatitle' => $metatitle,
            'metatag' => $metatag,
        ]);
    }
    public function blog_2()
    {
        $metabank = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Main')->get();
        $metatitle = Metatitle::where('slug', 'Main')->get();

        return view('blog-2', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,

            'metatitle' => $metatitle,
            'metatag' => $metatag,
        ]);
    }
    public function blog_3()
    {
        $metabank = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Main')->get();
        $metatitle = Metatitle::where('slug', 'Main')->get();

        return view('blog-3', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,

            'metatitle' => $metatitle,
            'metatag' => $metatag,
        ]);
    }
    public function thankyou()
    {
        $metabank = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Main')->get();
        $metatitle = Metatitle::where('slug', 'Main')->get();

        return view('thankyou', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,

            'metatitle' => $metatitle,
            'metatag' => $metatag,
        ]);
    }

    public function privacypolicy()
    {
        $metabank = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Ar-VrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Main')->get();
        $metatitle = Metatitle::where('slug', 'Main')->get();

        return view('privacypolicy', [
            'metabank' => $metabank,
            'metabank2' => $metabank2,

            'metatitle' => $metatitle,
            'metatag' => $metatag,
        ]);
    }
    // new page teckstack
    public function techStack()
    {
        $metabank = Metabank::where('slug', 'TechStack')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'TechStack')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'TechStack')->get();
        $metatitle = Metatitle::where('slug', 'TechStack')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();

        return view(
            'tech-stack',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
            ]
        );
    }

    public function companypolicy()
    {
        $metabank = Metabank::where('slug', 'CompanyPolicy')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'CompanyPolicy')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'CompanyPolicy')->get();
        $metatitle = Metatitle::where('slug', 'CompanyPolicy')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();

        return view(
            'company-policy',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
            ]
        );
    }
    public function termsandcondition()
    {
        $metabank = Metabank::where('slug', 'Terms&Condition')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Terms&Condition')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Terms&Condition')->get();
        $metatitle = Metatitle::where('slug', 'Terms&Condition')->get();

        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();

        return view(
            'terms-condition',
            [
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,

                'metatitle' => $metatitle,
                'metatag' => $metatag,
            ]
        );
    }
    public function blogApi($category = null)
    {
        if($category == null){
            $response = Http::get('https://blog.appsnation.co/api/get-blogs-api.php');
        }
        else{
            $response = Http::get('https://blog.appsnation.co/api/get-blogs-api.php?category=' . urlencode($category));
        }
        $data = $response->json();
        return $data;
    }
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////
    //////////////////////////////////////////////////

    // new pages
    public function exterior3d()
    {
        $metabank = Metabank::where('slug', 'Exterior-3d')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Exterior-3d')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Exterior-3d')->get();
        $metatitle = Metatitle::where('slug', 'Exterior-3d')->get();



        $techstack = Techstack::where('exterior', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('exterior', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('exterior-3d');



        return view(
            'exterior3d',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,


            ]
        );
    }
    public function interior3d()
    {
        $metabank = Metabank::where('slug', 'Interior-3d')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Interior-3d')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Interior-3d')->get();
        $metatitle = Metatitle::where('slug', 'Interior-3d')->get();



        $techstack = Techstack::where('interior', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('interior', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('interior-3d');



        return view(
            'interior3d',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,


            ]
        );
    }
    public function animationServices()
    {
        $metabank = Metabank::where('slug', 'Animation')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Animation')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Animation')->get();
        $metatitle = Metatitle::where('slug', 'Animation')->get();



        $techstack = Techstack::where('animation', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('animation', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('animation');



        return view(
            'animationservices',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }

    public function industrialAutomation()
    {
        $metabank = Metabank::where('slug', 'Automation')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Automation')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Automation')->get();
        $metatitle = Metatitle::where('slug', 'Automation')->get();



        $techstack = Techstack::where('automation', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('automation', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('automation');



        return view(
            'industrialautomation',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,


            ]
        );
    }
    public function floorPlan()
    {
        $metabank = Metabank::where('slug', 'FloorPlan')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'FloorPlan')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'FloorPlan')->get();
        $metatitle = Metatitle::where('slug', 'FloorPlan')->get();



        $techstack = Techstack::where('floorplan', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('floorplan', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('floorplan');

        return view(
            'floorplan-2d-3d',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,


            ]
        );
    }
    public function metaverseDevelopment()
    {
        $metabank = Metabank::where('slug', 'Metaverse')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Metaverse')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'Metaverse')->get();
        $metatitle = Metatitle::where('slug', 'Metaverse')->get();

        $techstack = Techstack::where('metaverse', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('metaverse', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('metaverse');

        return view(
            'metaversedevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,


            ]
        );
    }

    public function mrAppDevelopment()
    {
        $metabank = Metabank::where('slug', 'MrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'MrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'MrApp')->get();
        $metatitle = Metatitle::where('slug', 'MrApp')->get();

        $techstack = Techstack::where('mr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('mr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('mr-app');

        return view(
            'mixedrealityapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }

    public function xrAppDevelopment()
    {
        $metabank = Metabank::where('slug', 'XrApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'XrApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'XrApp')->get();
        $metatitle = Metatitle::where('slug', 'XrApp')->get();

        $techstack = Techstack::where('xr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('xr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('xr-app');

        return view(
            'extendedrealityapplicationdevelopment',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }

    public function digitalMarketing()
    {
        $metabank = Metabank::where('slug', 'DigitalMarketing')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'DigitalMarketing')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'DigitalMarketing')->get();
        $metatitle = Metatitle::where('slug', 'DigitalMarketing')->get();

        $techstack = Techstack::where('xr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('xr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('xr-app');

        return view(
            'digitalmarketing',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }


    public function travelAgencyApp()
    {
        $metabank = Metabank::where('slug', 'travelAgencyApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'travelAgencyApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'travelAgencyApp')->get();
        $metatitle = Metatitle::where('slug', 'travelAgencyApp')->get();

        return view(
            'travelagencyapp',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,

            ]
        );
    }

    public function travelAgencyWeb()
    {
        $metabank = Metabank::where('slug', 'travelAgencyWeb')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'travelAgencyWeb')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'travelAgencyWeb')->get();
        $metatitle = Metatitle::where('slug', 'travelAgencyWeb')->get();

        return view(
            'travelagencyweb',
            [
               
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,


            ]
        );
    }

    // public function travelAgencyPortfolio()
    // {
    //     $metabank = Metabank::where('slug', 'travelAgencyPortfolio')->where('type', 'Tag')->get();
    //     $metabank2 = Metabank::where('slug', 'travelAgencyPortfolio')->where('type', 'Meta')->get();

    //     $metatag = Metatag::where('slug', 'travelAgencyPortfolio')->get();
    //     $metatitle = Metatitle::where('slug', 'travelAgencyPortfolio')->get();

    //     return view(
    //         'travelagencyportfolio',
    //         [
                
    //             'metabank' => $metabank,
    //             'metabank2' => $metabank2,
    //             'metatitle' => $metatitle,
    //             'metatag' => $metatag,
    //             // 'data' => $data,


    //         ]
    //     );
    // }

    public function realEstateAppPortfolio()
    {
        $metabank = Metabank::where('slug', 'realEstateApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'realEstateApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'realEstateApp')->get();
        $metatitle = Metatitle::where('slug', 'realEstateApp')->get();

        return view(
            'realestateapps',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,

            ]
        );
    }
    
    public function realEstateWeb()
    {
        $metabank = Metabank::where('slug', 'realEstateWeb')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'realEstateWeb')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'realEstateWeb')->get();
        $metatitle = Metatitle::where('slug', 'realEstateWeb')->get();

        return view(
            'realestateweb',
            [
               
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,


            ]
        );
    }

    public function loyaltyApps()
    {
        $metabank = Metabank::where('slug', 'loyaltyApps')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'loyaltyApps')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'loyaltyApps')->get();
        $metatitle = Metatitle::where('slug', 'loyaltyApps')->get();

        return view(
            'loyaltyapps',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                // 'data' => $data,
            ]
        );
    }

    public function loyaltyWeb()
    {
        $metabank = Metabank::where('slug', 'loyaltyWeb')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'loyaltyWeb')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'loyaltyWeb')->get();
        $metatitle = Metatitle::where('slug', 'loyaltyWeb')->get();

        return view(
            'loyaltyweb',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                // 'data' => $data,
            ]
        );
    }

    public function gymApp()
    {
        $metabank = Metabank::where('slug', 'gymApp')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'gymApp')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'gymApp')->get();
        $metatitle = Metatitle::where('slug', 'gymApp')->get();

        return view(
            'gymapp',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                // 'data' => $data,
            ]
        );
    }

    public function gymWeb()
    {
        $metabank = Metabank::where('slug', 'gymWeb')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'gymWeb')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'gymWeb')->get();
        $metatitle = Metatitle::where('slug', 'gymWeb')->get();

        return view(
            'gymweb',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                // 'data' => $data,
            ]
        );
    }

    public function moverApps()
    {
        $metabank = Metabank::where('slug', 'moverApps')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'moverApps')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'moverApps')->get();
        $metatitle = Metatitle::where('slug', 'moverApps')->get();

        return view(
            'moverapps',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                // 'data' => $data,
            ]
        );
    }

    public function moverWeb()
    {
        $metabank = Metabank::where('slug', 'moverWeb')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'moverWeb')->where('type', 'Meta')->get();

        $metatag = Metatag::where('slug', 'moverWeb')->get();
        $metatitle = Metatitle::where('slug', 'moverWeb')->get();

        return view(
            'moverweb',
            [
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                // 'data' => $data,
            ]
        );
    }

    public function art3d()
    {
        $metabank = Metabank::where('slug', 'Art-3D')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Art-3D')->where('type', 'Meta')->get();
        $metatag = Metatag::where('slug', 'Art-3D')->get();
        $metatitle = Metatitle::where('slug', 'Art-3D')->get();
        $techstack = Techstack::where('mr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('mr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('art-3d');
        return view(
            '3d-art',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }
    
    public function art2d()
    {
        $metabank = Metabank::where('slug', 'Art-2D')->where('type', 'Tag')->get();
        $metabank2 = Metabank::where('slug', 'Art-2D')->where('type', 'Meta')->get();
        $metatag = Metatag::where('slug', 'Art-2D')->get();
        $metatitle = Metatitle::where('slug', 'Art-2D')->get();
        $techstack = Techstack::where('mr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $agencystack = Agencystack::where('mr', 1)->orderBy('lft', 'asc')->get()->toArray();
        $awards = Award::orderBy('lft', 'asc')->get()->toArray();
        $casestudy = Casestudyapp::all();
        $testimonials = Testimonial::orderBy('lft', 'asc')->get()->toArray();
        $data = $this->blogApi('art-2d');
        return view(
            '2d-art',
            [
                'techstack' => $techstack,
                'agencystack' => $agencystack,
                'awards' => $awards,
                'casestudy' => $casestudy,
                'testimonials' => $testimonials,
                'metabank' => $metabank,
                'metabank2' => $metabank2,
                'metatitle' => $metatitle,
                'metatag' => $metatag,
                'data' => $data,
            ]
        );
    }
}
