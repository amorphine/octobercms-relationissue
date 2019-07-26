<?php namespace Amorphine\Relationissue;

use Backend;
use System\Classes\PluginBase;

/**
 * Relationissue Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Relation Issue Demo',
            'description' => 'No description provided yet...',
            'author'      => 'Amorphine',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Amorphine\Relationissue\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'amorphine.relationissue.some_permission' => [
                'tab' => 'Relationissue',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'relationissue' => [
                'label'       => 'Relationissue',
                'url'         => Backend::url('amorphine/relationissue/reviews'),
                'icon'        => 'icon-leaf',
                'permissions' => ['amorphine.relationissue.*'],
                'order'       => 500,
                'sideMenu' => [
                    'reviews' => [
                        'label'       => 'Reviews',
                        'url'         => Backend::url('amorphine/relationissue/reviews'),
                        'icon'        => 'icon-cubes',
                        'permissions' => ['amorphine.relationissue.*'],
                        'order'       => 500,
                    ],
                ],
            ],
        ];
    }
}
