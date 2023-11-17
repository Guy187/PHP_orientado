<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1e00fb0595fe23d8cb481c4ad999217f
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1e00fb0595fe23d8cb481c4ad999217f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1e00fb0595fe23d8cb481c4ad999217f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1e00fb0595fe23d8cb481c4ad999217f::$classMap;

        }, null, ClassLoader::class);
    }
}
