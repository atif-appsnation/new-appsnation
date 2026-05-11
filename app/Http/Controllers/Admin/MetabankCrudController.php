<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MetabankRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MetabankCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MetabankCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Metabank::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/metabank');
        CRUD::setEntityNameStrings('metabank', 'metabanks');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('slug');

        CRUD::addColumn([
            'name' => 'name',
            'label' => 'Meta Name',
        ]);

        CRUD::addColumn([
            'name' => 'description',
            'label' => 'Title/Content',
        ]);
        CRUD::column('type');
        CRUD::column('comments');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MetabankRequest::class);

        // CRUD::field('id');
        // CRUD::field('slug');
        CRUD::addField([
            'name' => 'slug',
            'label' => 'Slug',
            'type' => 'select_from_array',

            'options' => [
                'Main' => 'Main',
                'Aboutus' => 'Aboutus',
                'Contactus' => 'Contactus',
                'Portfolio' => 'Portfolio',
                'Ourprocess' => 'Ourprocess',
                'Clients' => 'Clients',
                'Testimonial' => 'Testimonial',
                'Career' => 'Career',
                'Terms&Condition' => 'Terms&Condition',
                'TechStack' => 'TechStack',
                'Services' => 'Services',
                'MobileApp' => 'MobileApp',
                'AndroidApp' => 'AndroidApp',
                'IosApp' => 'IosApp',
                'GameApp' => 'GameApp',
                'CrossApp' => 'CrossApp',
                'WebPortalApp' => 'WebPortalApp',
                'E-CommerceApp' => 'E-CommerceApp',
                'WebApp' => 'WebApp',
                'Ar-VrApp' => 'Ar-VrApp',
                'ArApp' => 'ArApp',
                'VrApp' => 'VrApp',
                'MrApp' => 'MrApp',
                'XrApp' => 'XrApp',
                'ConnectedDevice' => 'ConnectedDevice',
                'IotApp' => 'IotApp',
                'WearableApp' => 'WearableApp',
                'IndustrialAutomation	' => 'IndustrialAutomation',
                'DesignAndAnimation' => 'DesignAndAnimation',
                'DigitalMarketing' => 'DigitalMarketing',
                'Animation' => 'Animation',
                'Exterior-3d' => 'Exterior-3d',
                'interior-3d' => 'Interior-3d',
                'FloorPlan' => 'FloorPlan',
                'Art-2d' => 'Art-2d',
                'Art-3d' => 'Art-3d',
                'Industries' => 'Industries',
                'Advertising' => 'Advertising',
                'HealthCareAndLifeScience' => 'HealthCareAndLifeScience',
                'E-commerceAndRetail' => 'E-commerceAndRetail',
                'Education' => 'Education',
                'SoftwareAndHighTech' => 'SoftwareAndHighTech',
                'AutomativeAndTransport' => 'AutomativeAndTransport',
                'GamingAndLeisure' => 'GamingAndLeisure',
                'FinancialSoftwareDevelopment' => 'FinancialSoftwareDevelopment',
                'MediaAndEntertainment' => 'MediaAndEntertainment',
                'TravelAndHospitality' => 'TravelAndHospitality',
                'RealEstateAndProperty' => 'RealEstateAndProperty',
                'SportTeamAndLeagues' => 'SportTeamAndLeagues',
                'Solutions' => 'Solutions',
                'BookingApp' => 'BookingApp',
                'FitnessApp' => 'FitnessApp',
                'FleetApp' => 'FleetApp',
                'LoyaltyApp' => 'LoyaltyApp',
                'MoverApp' => 'MoverApp',
                'RealEstateApp' => 'RealEstateApp',
                'RestaurantApp' => 'RestaurantApp',
                'ShoppingExpressApp' => 'ShoppingExpressApp',
                'SportApp' => 'SportApp',
                'Automation' => 'Automation',
                'Metaverse' => 'Metaverse',
                'travelAgencyApp' => 'travelAgencyApp',
                'travelAgencyWeb' => 'travelAgencyWeb',
                'realEstateApp' => 'realEstateApp',
                'realEstateWeb' => 'realEstateWeb',
                'loyaltyApps' => 'loyaltyApps',
                'loyaltyWeb' => 'loyaltyWeb',
                'gymApp' => 'gymApp',
                'gymWeb' => 'gymWeb',
                'moverApps' => 'moverApps',
                'moverWeb' => 'moverWeb',
                'royalRideApp' => 'royalRideApp',
                'boujeeBeachinApp' => 'boujeeBeachinApp'
            ],

            'allows_null' => false,

        ]);
        // CRUD::field('name');
        CRUD::addField([
            'name' => 'name',
            'label' => 'Meta Name',

        ]);

        // CRUD::field('description');
        CRUD::addField([
            'name' => 'description',
            'label' => 'Title/Content',
        ]);

        // CRUD::field('type');

        CRUD::addField([
            'name' => 'type',
            'label' => 'Type',
            'type' => 'select_from_array',
            'options' => ['Tag' => 'Tag', 'Meta' => 'Meta'],
            'allows_null' => false,

        ]);

        CRUD::field('comments');
        // CRUD::field('created_at');
        // CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
