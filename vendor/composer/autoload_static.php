<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c491b8531eec05ba41a11d9276a5749
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\Seeders\\' => 17,
            'Database\\Factories\\' => 19,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/seeders',
        ),
        'Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/factories',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Console\\Commands\\Inspire' => __DIR__ . '/../..' . '/app/Console/Commands/Inspire.php',
        'App\\Console\\Kernel' => __DIR__ . '/../..' . '/app/Console/Kernel.php',
        'App\\Events\\Event' => __DIR__ . '/../..' . '/app/Events/Event.php',
        'App\\Exceptions\\Handler' => __DIR__ . '/../..' . '/app/Exceptions/Handler.php',
        'App\\Http\\Controllers\\Auth\\AuthController' => __DIR__ . '/../..' . '/app/Http/Controllers/Auth/AuthController.php',
        'App\\Http\\Controllers\\Auth\\PasswordController' => __DIR__ . '/../..' . '/app/Http/Controllers/Auth/PasswordController.php',
        'App\\Http\\Controllers\\Controller' => __DIR__ . '/../..' . '/app/Http/Controllers/Controller.php',
        'App\\Http\\Kernel' => __DIR__ . '/../..' . '/app/Http/Kernel.php',
        'App\\Http\\Middleware\\Authenticate' => __DIR__ . '/../..' . '/app/Http/Middleware/Authenticate.php',
        'App\\Http\\Middleware\\EncryptCookies' => __DIR__ . '/../..' . '/app/Http/Middleware/EncryptCookies.php',
        'App\\Http\\Middleware\\RedirectIfAuthenticated' => __DIR__ . '/../..' . '/app/Http/Middleware/RedirectIfAuthenticated.php',
        'App\\Http\\Middleware\\VerifyCsrfToken' => __DIR__ . '/../..' . '/app/Http/Middleware/VerifyCsrfToken.php',
        'App\\Http\\Requests\\Request' => __DIR__ . '/../..' . '/app/Http/Requests/Request.php',
        'App\\Jobs\\Job' => __DIR__ . '/../..' . '/app/Jobs/Job.php',
        'App\\Providers\\AppServiceProvider' => __DIR__ . '/../..' . '/app/Providers/AppServiceProvider.php',
        'App\\Providers\\AuthServiceProvider' => __DIR__ . '/../..' . '/app/Providers/AuthServiceProvider.php',
        'App\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/app/Providers/EventServiceProvider.php',
        'App\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/app/Providers/RouteServiceProvider.php',
        'App\\Task' => __DIR__ . '/../..' . '/app/Task.php',
        'App\\User' => __DIR__ . '/../..' . '/app/User.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c491b8531eec05ba41a11d9276a5749::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c491b8531eec05ba41a11d9276a5749::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c491b8531eec05ba41a11d9276a5749::$classMap;

        }, null, ClassLoader::class);
    }
}
