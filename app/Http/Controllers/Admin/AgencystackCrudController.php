<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AgencystackRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class AgencystackCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class AgencystackCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Agencystack::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/agencystack');
        CRUD::setEntityNameStrings('agencystack', 'agencystacks');
    }
    protected function setupReorderOperation()
    {
        // model attribute to be shown on draggable items
        $this->crud->set('reorder.label', 'heading');
        // maximum number of nesting allowed
        // $this->crud->set('reorder.max_level', 2);

        // extras:
        // $this->crud->disableReorder();
        $this->crud->isReorderEnabled();
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->enableExportButtons();
        $this->crud->addFilter(
            [
                'type'  => 'date',
                'name'  => 'created_at',
                'label' => 'Date'
            ],
            true,
            function ($value) { // if the filter is active, apply these constraints
                $this->crud->addClause('where', 'created_at', 'LIKE', '%' . $value . '%');
            }
        );
        CRUD::column('id');
        CRUD::column('heading');

        CRUD::addColumn([
            'name' => 'image',
            'type' => 'image',
            'label' => 'Image',
            'prefix' => '/uploads/',
        ]);
        CRUD::addColumn([
            'name' => 'lft',
            'label' => 'Order',
        ]);
        CRUD::column('content');
        CRUD::column('comment');

        CRUD::column('main');
        CRUD::column('android');
        CRUD::column('ios');
        CRUD::column('game');
        CRUD::column('crossapp');
        CRUD::column('ecommerce');
        CRUD::column('web');
        CRUD::column('ar');
        CRUD::column('vr');
        CRUD::column('iot');
        CRUD::column('wearable');

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
        CRUD::setValidation(AgencystackRequest::class);

        // CRUD::field('id');
        CRUD::field('heading');
        // CRUD::field('image');
        CRUD::addField(
            [
                'name' => 'image',
                'type' => 'upload',
                'label' => 'Image',
                'upload'    => true,
                'disk'      => 'uploads',
            ],
            'both'
        );

        CRUD::field('content');
        CRUD::field('comment');
        CRUD::field('main');
        CRUD::field('android');
        CRUD::field('ios');
        CRUD::field('game');
        CRUD::field('crossapp');
        CRUD::field('ecommerce');
        CRUD::field('web');
        CRUD::field('ar');
        CRUD::field('vr');
        CRUD::field('iot');
        CRUD::field('wearable');


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
    protected function setupShowOperation()
    {
        CRUD::column('id');
        CRUD::column('heading');

        CRUD::addColumn([
            'name' => 'image',
            'type' => 'image',
            'label' => 'Image',
            'prefix' => '/uploads/',
        ]);
        CRUD::column('content');
        CRUD::column('comment');

        CRUD::column('main');
        CRUD::column('android');
        CRUD::column('ios');
        CRUD::column('game');
        CRUD::column('crossapp');
        CRUD::column('ecommerce');
        CRUD::column('web');
        CRUD::column('ar');
        CRUD::column('vr');
        CRUD::column('iot');
        CRUD::column('wearable');

        CRUD::column('created_at');
        CRUD::column('updated_at');
    }
}
