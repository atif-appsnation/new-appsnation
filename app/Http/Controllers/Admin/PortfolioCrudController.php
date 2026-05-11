<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PortfolioRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class PortfolioCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class PortfolioCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ReorderOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Portfolio::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/portfolio');
        CRUD::setEntityNameStrings('portfolio', 'portfolios');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */

    protected function setupReorderOperation()
    {
        // model attribute to be shown on draggable items
        $this->crud->set('reorder.label', 'title');
        // $this->crud->set('reorder.label', 'id');

        // maximum number of nesting allowed
        // $this->crud->set('reorder.max_level', 2);

        // extras:
        // $this->crud->disableReorder();
        $this->crud->isReorderEnabled();
    }
    protected function setupListOperation()
    {
        CRUD::column('id');
        // CRUD::column('icon');
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
        // CRUD::column('image');
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
                'name'      => 'back_image',
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
        CRUD::column('title');
        CRUD::column('content');

        CRUD::addColumn(
            [   // Upload
                'name'      => 'lft',
                'label'     => 'Order',
            ]
        );
        CRUD::column('bullet_1');
        CRUD::column('bullet_2');
        CRUD::column('bullet_3');
        CRUD::column('bullet_4');

        CRUD::column('type');
        CRUD::column('is_show');
        // CRUD::column('orderby');

        // CRUD::column('comments');
        CRUD::addColumn(
            [   // Upload
                'name'      => 'comments',
                'label'     => 'Comments(URLs)',
            ]
        );
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
        CRUD::setValidation(PortfolioRequest::class);

        // CRUD::field('id');
        // CRUD::field('icon');
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
        // CRUD::field('image');
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
                'name'      => 'back_image',
                'label'     => 'Back Image',
                'type'      => 'upload',
                'upload'    => true,
                'disk'      => 'uploads', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // 'prefix'    => 'uploads/',
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ],
            'both'
        );
        CRUD::field('title');
        CRUD::field('content');
        CRUD::field('bullet_1');
        CRUD::field('bullet_2');
        CRUD::field('bullet_3');
        CRUD::field('bullet_4');
        // CRUD::field('type');
        $this->crud->addField(
            [   // Upload
                'name'      => 'type',
                'label'     => 'Type',
                'type'      => 'select_from_array',
                'options' => [
                    'Mobile' => 'Mobile',
                    // 'AR/VR' => 'AR/VR',
                    // 'Game' => 'Game',
                    'Web' => 'Web',
                    //"Portfolio" => "Portfolio"

                ],
                'allows_null' => false,
                // 'prefix'    => 'uploads/',
                // optional:
                // 'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ]
        );
        
        CRUD::field('is_show');
        // CRUD::field('orderby');
        $this->crud->addField(
            [   // Upload
                'name'      => 'orderby',
                'type' => 'number',
                'label'     => 'Order By',
            ]
        );
        // CRUD::field('comments');
        $this->crud->addField(
            [   // Upload
                'name'      => 'comments',
                'label'     => 'Comments(URLs)',
            ]
        );
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
        CRUD::addColumn(
            [   // Upload
                'name'      => 'icon',
                'label'     => 'Icon',
                'type'      => 'image',

                'prefix' => 'uploads/',
            ],
            'both'
        );
        CRUD::addColumn(
            [   // Upload
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'image',

                'prefix' => 'uploads/',
            ],
            'both'
        );
        CRUD::column('title');

        CRUD::column('content');
        CRUD::column('bullet_1');
        CRUD::column('bullet_2');
        CRUD::column('bullet_3');
        CRUD::column('bullet_4');

        CRUD::column('type');
        CRUD::column('is_show');
        CRUD::column('orderby');
        // CRUD::column('comments');
        CRUD::addColumn(
            [   // Upload
                'name'      => 'comments',
                'label'     => 'Comments(URLs)',
            ]
        );
        CRUD::column('created_at');
        CRUD::column('updated_at');
    }
}
