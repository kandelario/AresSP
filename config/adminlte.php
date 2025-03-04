<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'Agencia Ares SP',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Agencia Ares</b> SP',
    'logo_img' => 'img/doverman.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AresSP Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => true,
        'img' => [
            'path' => 'img/doverman.png',
            'alt' => 'AresSP Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'img/doverman.png',
            'alt' => 'AresSP Preloader Image',
            'effect' => 'animation__shake',
            'width' => 150,
            'height' => 150,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-warning',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-warning',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-warning',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 600,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => false,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        // [
        //     'type'         => 'navbar-search',
        //     'text'         => 'search',
        //     'topnav_right' => false,
        // ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => false,
        ],

        // Sidebar items:
        // [
        //     'type' => 'sidebar-menu-search',
        //     'text' => 'search',
        // ],
        // [
        //     'text' => 'blog',
        //     'url'  => 'admin/blog',
        //     'can'  => 'manage-blog',//si cuentas con este permiso, aparece la opción en el menú
        // ],

        // [
        //     'text'        => 'Dashboard',
        //     'url'         => 'admin/dashboard',
        //     'icon'        => 'far fa-fw fa-file text-warning',
        //     'label'       => 4,
        //     'label_color' => 'success',
        // ],
        ['header' => 'Administrador del Sistema'],
        [
            'text'    => 'Usuarios',
            'icon'    => 'fas fa-fw fa-users text-warning',
            // 'url'  => 'admin/users',
            'submenu' => [
                [
                    'text' => 'Ver',
                    'icon'    => 'fas fa-fw fa-search ml-3',
                    'url'  => 'admin/users',
                ],
                [
                    'text' => 'Roles y Permisos',
                    'icon' => 'fa fa-check-square ml-3',
                    'submenu' => [
                        [
                            'text' => 'Roles',
                            'icon' => 'fa fa-user-secret ml-4',
                            // 'icon' => 'fa fa-user-secret ml-3',
                            'url'  => 'admin/roles',
                        ],
                        [
                            'text' => 'Permisos',
                            'icon' => 'fa fa-eye-slash ml-4',
                            // 'icon' => 'fa fa-eye-slash ml-3',
                            'url'  => 'admin/permissions',
                        ],
                        
                    ]
                ],
                // [
                //     'text' => 'Reportes',
                //     'icon' => 'fas fa-fw fa-file text-warning ml-3',
                //     'url' => '#',
                // ],
                
            ],
            
        ],//[
        //     'text' => 'Inventario',
        //     'icon' => 'fas fa-fw fa-vest text-warning',
        //     'url' => 'admin/inventarios',
        // ],
        [
            'text'       => 'Almacen',
            'icon' => 'fas fa-fw fa-vest text-warning',
            //'url'        => 'admin/personals',
            'submenu' => [
                [
                    'text' => 'Entradas',
                    'icon' => 'fas fa-fw fa-plus ml-3',
                    'url' => 'admin/inventarios',
                ],
                [
                    'text' => 'Salidas',
                    'icon' => 'fas fa-fw fa-minus ml-3',
                    'url' => 'admin/movimientos',
                ],
                // [
                //     'text' => 'Reportes',
                //     'icon' => 'fas fa-fw fa-file text-warning ml-3',
                //     'url' => '#',
                // ],
                
            ],
        ],
        [
            'text'    => 'Razón Social',
            'icon'    => 'fas fa-fw fa-users text-warning',
            'url'  => 'admin/razon-socials',
        ],
        [
            // 'text' => 'Perfiles de usuario',
            // 'icon' => 'fas fa-fw fa-lock text-warning',
            // 'url'  => 'admin/users/destroy',
            // 'submenu' => [
            //     [
            //         'text' => 'Nuevo',
            //         'icon' => 'fas fa-fw fa-plus ml-3',
            //         'url'  => 'admin/profiles/create',
            //     ],
            //     [
            //         'text' => 'Editar',
            //         'icon' => 'fas fa-fw fa-pen ml-3',
            //         'url'  => 'admin/profiles/edit',
            //     ],
            //     [
            //         'text' => 'Eliminar',
            //         'icon' => 'fas fa-fw fa-trash ml-3',
            //         'url'  => 'admin/profiles/delete',
            //     ],
            // ],
        ],
        ['header' => 'Seguridad Privada'],
        [
            'text'       => 'Clientes',
            'icon' => 'fas fa-fw fa-address-book text-warning',
            'url'        => 'admin/clientes',
            // 'submenu' => [
            //     [
            //     'text'       => 'Listar',
            //     'icon' => 'fas fa-fw fa-list ml-3',
            //     'url'        => '#',
            //     ],
            //     [
            //     'text'       => 'Asignar',
            //     'icon' => 'fas fa-fw fa-check ml-3',
            //     'url'        => '#',
            //     ],
            //     [
            //     'text'       => 'Horarios',
            //     'icon' => 'fas fa-fw fa-clock ml-3',
            //     'url'        => '#',
            //     ],
            // ],
        ],
        [
            'text'       => 'Personal',
            'icon' => 'fas fa-fw fa-archive text-warning',
            //'url'        => 'admin/personals',
            'submenu' => [
                [
                'text'       => 'Ver',
                'icon' => 'fas fa-fw fa-search ml-3',
                'url'        => 'admin/personals',
                ],
                [
                'text'       => 'Asignar a Servicio',
                'icon' => 'fas fa-fw fa-check ml-3',
                'url'        => 'admin/assignments',
                ],
                [
                'text'       => 'Asistencias',
                'icon' => 'fa fa-calendar ml-3',
                'url'        => 'admin/asistencias',
                ],
                [
                'text' => 'Formulario Asistencias',
                'icon' => 'fa fa-table ml-3',
                'url' => 'admin/asistencias/formulario',
                ],
                [
                'text'       => 'Siglas (Asistencias)',
                'icon' => 'fa fa-tags ml-3',
                'url'        => 'admin/sigla-asistencias-personals',
                ],
                // [
                // 'text'       => 'Vacaciones',
                // 'icon' => 'fas fa-fw fa-plane ml-3',
                // 'url'        => 'admin/vacaciones',
                // ],
                // [
                // 'text'       => 'Horarios',
                // 'icon' => 'fas fa-fw fa-clock ml-3',
                // 'url'        => '#',
                // ],
            ],
        ],
        
        [
            'text' => 'Nóminas',
            'icon' => 'fas fa-fw fa-file text-warning',
            'url' => 'admin/nominas',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/jquery.min.3.7.1.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/dataTables.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assetsjs/dataTables.buttons.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/buttons.dataTables.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/jszip.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/pdfmake.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/vfs_fonts.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/buttons.html5.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => '/assets/js/buttons.print.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    // 'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    // 'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                    'location' => '/assets/css/dataTables.dataTables.css',
                ],
                [
                    'type' => 'css',
                    'asset' => true,
                    // 'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                    'location' => '/assets/css/buttons.dataTables.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
