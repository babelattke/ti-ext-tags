<?php

namespace Yak0d3\Allergenics\Controllers;

use AdminMenu;

/**
 * Allergenics Admin Controller
 */
class Allergenics extends \Admin\Classes\AdminController
{
    public $implement = [
        'Admin\Actions\FormController',
        'Admin\Actions\ListController'
    ];

    public $listConfig = [
        'list' => [
            'model'        => 'Yak0d3\Allergenics\Models\Allergenic',
            'title'        => 'Allergenics',
            'emptyMessage' => 'lang:admin::lang.list.text_empty',
            'defaultSort'  => ['id', 'DESC'],
            'configFile'   => 'allergenic',
        ],
    ];

    public $formConfig = [
        'name'       => 'Allergenics',
        'model'      => 'Yak0d3\Allergenics\Models\Allergenic',
        'create'     => [
            'title'         => 'lang:admin::lang.form.create_title',
            'redirect'      => 'yak0d3/allergenics/allergenics/edit/{id}',
            'redirectClose' => 'yak0d3/allergenics/allergenics',
        ],
        'edit'       => [
            'title'         => 'lang:admin::lang.form.edit_title',
            'redirect'      => 'yak0d3/allergenics/allergenics/edit/{id}',
            'redirectClose' => 'yak0d3/allergenics/allergenics',
        ],
        'preview'    => [
            'title'    => 'lang:admin::lang.form.preview_title',
            'redirect' => 'yak0d3/allergenics/allergenics',
        ],
        'delete'     => [
            'redirect' => 'yak0d3/allergenics/allergenics',
        ],
        'configFile' => 'allergenic',
    ];

    protected $requiredPermissions = 'Yak0d3.Allergenics';

    public function __construct()
    {
        parent::__construct();

        AdminMenu::setContext('allergenics', 'restaurant');
    }
}
