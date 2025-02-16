<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88906b50006b2803e883665f2755e07b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88906b50006b2803e883665f2755e07b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88906b50006b2803e883665f2755e07b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88906b50006b2803e883665f2755e07b::$classMap;

        }, null, ClassLoader::class);
    }
}
