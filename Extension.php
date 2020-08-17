<?php namespace Yak0d3\Allergenics;

use System\Classes\BaseExtension;

/**
 * Allergenics Extension Information File
 */
class Extension extends BaseExtension
{
    /**
     * Returns information about this extension.
     *
     * @return array
     */
    public function extensionMeta()
    {
        return [
            'name'        => 'Allergenics',
            'author'      => 'Yak0d3',
            'description' => 'Create, edit, delete and attach allergenics to your menus to keep your clients safe',
            'icon'        => [
                'class' => 'fa fa-allergies',
                'color' => '#fff',
                'backgroundColor' => '#48557B',
            ],
            'version'     => '1.0.0'
        ];
    }

    /**
     * Register method, called when the extension is first registered.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Registers back-end navigation menu items for this extension.
     * 
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'restaurant' => [
                'child' => [
                    'allergenics' => [
                        'priority' => 35,
                        'class' => 'allergenics',
                        'href' => admin_url('yak0d3/allergenics/allergenics'),
                        'title' => 'Allergenics',
                        'permission' => 'Yak0d3.Allergenics.*',
                    ]
                ]
            ]
        ];
    }

    /**
     * Registers any front-end components implemented in this extension.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
// Remove this line and uncomment the line below to activate
//            'Yak0d3\Allergenics\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any admin permissions used by this extension.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
           'Yak0D3.Allergenics.Manage' => [
               'description' => 'Manage allergenics',
               'group' => 'module',
           ],
        ];
    }
}
