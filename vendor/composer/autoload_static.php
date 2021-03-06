<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01ace89c3f2b24c9d981660aa6faf3c4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
            'MVC\\' => 4,
        ),
        'C' => 
        array (
            'Controllers\\' => 12,
            'Config\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libs/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit01ace89c3f2b24c9d981660aa6faf3c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit01ace89c3f2b24c9d981660aa6faf3c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit01ace89c3f2b24c9d981660aa6faf3c4::$classMap;

        }, null, ClassLoader::class);
    }
}
