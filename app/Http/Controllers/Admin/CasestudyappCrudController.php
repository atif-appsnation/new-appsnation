<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CasestudyappRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CasestudyappCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CasestudyappCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Casestudyapp::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/casestudyapp');
        CRUD::setEntityNameStrings('casestudyapp', 'casestudyapps');
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
        // CRUD::column('image');
        // CRUD::column('icon');
        CRUD::addColumn(
            [   // Upload
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'image',
                // 'upload'    => true,
                // 'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified

                'prefix' => 'uploads/',
            ],
            'both'
        );
        CRUD::addColumn(
            [   // Upload
                'name'      => 'icon',
                'label'     => 'Icon',
                'type'      => 'image',
                // 'upload'    => true,
                // 'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified

                'prefix' => 'uploads/',
            ],
            'both'
        );  
        CRUD::column('tag');
        CRUD::column('heading');
        CRUD::column('content');
        CRUD::column('link');
        
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
        CRUD::setValidation(CasestudyappRequest::class);

        // CRUD::field('id');
        // CRUD::field('image');
        // CRUD::field('icon');
        $this->crud->addField(
            [   // Upload
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'upload',
                'upload'    => true,
                'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // 'prefix'    => 'uploads/',
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ],
            'both'
        );
        $this->crud->addField(
            [   // Upload
                'name'      => 'icon',
                'label'     => 'Icon',
                'type'      => 'upload',
                'upload'    => true,
                'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // 'prefix'    => 'uploads/',
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ],
            'both'
        );
        CRUD::field('tag');
        CRUD::field('heading');
        CRUD::field('content');
        CRUD::field('link');

        // CRUD::field('created_at');
        // CRUD::field('updated_at');


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
        // CRUD::column('image');
        // CRUD::column('icon');
        CRUD::addColumn(
            [   // Upload
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'image',
                'prefix' => 'uploads/',
            ],
            'both'
        );
        CRUD::addColumn(
            [   // Upload
                'name'      => 'icon',
                'label'     => 'Icon',
                'type'      => 'image',
                'prefix' => 'uploads/',
            ],
            'both'
        );
        CRUD::column('tag');
        CRUD::column('heading');
        CRUD::column('content');
        CRUD::column('link');
        CRUD::column('created_at');
        CRUD::column('updated_at');
    }
}
