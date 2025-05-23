<?php

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Providers\ConsoleServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Module Namespace
    |--------------------------------------------------------------------------
    |
    | Default module namespace.
    |
    */
    'namespace' => 'Modules',

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */
    'stubs' => [
        'enabled' => true,
        'path' => base_path('stubs/nwidart-stubs'),
        'files' => [
            'routes/api' => 'routes/api.php',
            'scaffold/config' => 'config/config.php',
            'composer' => 'composer.json',
        ],
        'replacements' => [
            'routes/api' => ['LOWER_NAME', 'STUDLY_NAME', 'KEBAB_NAME', 'MODULE_NAMESPACE', 'CONTROLLER_NAMESPACE'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
                'APP_FOLDER_NAME',
            ],
        ],
        'gitkeep' => true,
    ],
    'paths' => [
        /*
        |--------------------------------------------------------------------------
        | Modules path
        |--------------------------------------------------------------------------
        |
        | This path is used to save the generated module.
        | This path will also be added automatically to the list of scanned folders.
        |
        */
        'modules' => base_path('Modules'),

        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules' assets path.
        |
        */
        'assets' => public_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | The migrations' path
        |--------------------------------------------------------------------------
        |
        | Where you run the 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */
        'migration' => base_path('database/migrations'),

        /*
        |--------------------------------------------------------------------------
        | The App path
        |--------------------------------------------------------------------------
        |
        | App folder name
        | for example can change it to 'src' or 'App'
        */
        'app_folder' => 'App/',

        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Setting the generate key to false will not generate that folder
        */
        'generator' => [
            // App/
            'actions' => ['path' => 'App/Actions', 'generate' => false],
            'casts' => ['path' => 'App/Casts', 'generate' => false],
            'channels' => ['path' => 'App/Broadcasting', 'generate' => false],
            'class' => ['path' => 'App/Classes', 'generate' => false],
            'command' => ['path' => 'App/Console', 'generate' => false],
            'component-class' => ['path' => 'App/View/Components', 'generate' => false],
            'emails' => ['path' => 'App/Emails', 'generate' => false],
            'event' => ['path' => 'App/Events', 'generate' => false],
            'enums' => ['path' => 'App/Enums', 'generate' => false],
            'exceptions' => ['path' => 'App/Exceptions', 'generate' => false],
            'jobs' => ['path' => 'App/Jobs', 'generate' => false],
            'helpers' => ['path' => 'App/Helpers', 'generate' => false],
            'interfaces' => ['path' => 'App/Interfaces', 'generate' => true],
            'listener' => ['path' => 'App/Listeners', 'generate' => false],
            'model' => ['path' => 'App/Models', 'generate' => false],
            'notifications' => ['path' => 'App/Notifications', 'generate' => false],
            'observer' => ['path' => 'App/Observers', 'generate' => false],
            'policies' => ['path' => 'App/Policies', 'generate' => false],
            'provider' => ['path' => 'App/Providers', 'generate' => true],
            'repository' => ['path' => 'App/Repositories', 'generate' => true],
            'resource' => ['path' => 'App/Transformers', 'generate' => false],
            'route-provider' => ['path' => 'App/Providers', 'generate' => true],
            'rules' => ['path' => 'App/Rules', 'generate' => false],
            'services' => ['path' => 'App/Services', 'generate' => false],
            'scopes' => ['path' => 'App/Models/Scopes', 'generate' => false],
            'traits' => ['path' => 'App/Traits', 'generate' => false],

            // App/Http/
            'controller' => ['path' => 'App/Http/Controllers', 'generate' => true],
            'filter' => ['path' => 'App/Http/Middleware', 'generate' => false],
            'request' => ['path' => 'App/Http/Requests', 'generate' => false],

            // config/
            'config' => ['path' => 'config', 'generate' => true],

            // database/
            'factory' => ['path' => 'database/factories', 'generate' => true],
            'migration' => ['path' => 'database/migrations', 'generate' => true],
            'seeder' => ['path' => 'database/seeders', 'generate' => true],

            // lang/
            'lang' => ['path' => 'lang', 'generate' => false],

            // resource/
            'assets' => ['path' => 'resources/assets', 'generate' => false],
            'component-view' => ['path' => 'resources/views/components', 'generate' => false],
            'views' => ['path' => 'resources/views', 'generate' => false],

            // routes/
            'routes' => ['path' => 'routes', 'generate' => true],

            // tests/
            'test-feature' => ['path' => 'tests/Feature', 'generate' => true],
            'test-unit' => ['path' => 'tests/Unit', 'generate' => true],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Auto Discover of Modules
    |--------------------------------------------------------------------------
    |
    | Here you configure auto discover of module
    | This is useful for simplify module providers.
    |
    */
    'auto-discover' => [
        /*
        |--------------------------------------------------------------------------
        | Migrations
        |--------------------------------------------------------------------------
        |
        | This option for register migration automatically.
        |
        */
        'migrations' => true,

        /*
        |--------------------------------------------------------------------------
        | Translations
        |--------------------------------------------------------------------------
        |
        | This option for register lang file automatically.
        |
        */
        'translations' => false,

    ],

    /*
    |--------------------------------------------------------------------------
    | Package commands
    |--------------------------------------------------------------------------
    |
    | Here you can define which commands will be visible and used in your
    | Application. You can add your own commands to merge section.
    |
    */
    'commands' => ConsoleServiceProvider::defaultCommands()
        ->merge([
            // New commands go here
        ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Scan Path
    |--------------------------------------------------------------------------
    |
    | Here you define which folder will be scanned. By default will scan vendor
    | directory. This is useful if you host the package in packagist website.
    |
    */
    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | Here is the config for the composer.json file, generated by this package
    |
    */
    'composer' => [
        'vendor' => env('MODULE_VENDOR', 'nwidart'),
        'author' => [
            'name' => env('MODULE_AUTHOR_NAME', 'Fozilov Meroj'),
            'email' => env('MODULE_AUTHOR_EMAIL', 'fozilovmerodz@gmail.com'),
        ],
        'composer-output' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Choose what laravel-modules will register as custom namespaces.
    | Setting one to false will require you to register that part
    | in your own Service Provider class.
    |--------------------------------------------------------------------------
    */
    'register' => [
        'translations' => true,
        /**
         * load files on boot or register method
         */
        'files' => 'register',
    ],

    /*
    |--------------------------------------------------------------------------
    | Activators
    |--------------------------------------------------------------------------
    |
    | You can define new types of activators here, file, database, etc. The only
    | required parameter is 'class'.
    | The file activator will store the activation status in storage/installed_modules
    */
    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
        ],
    ],

    'activator' => 'file',
];
