<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit288ad2b19ea4e9f2ac39ba9b416e4e3c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PlanetApp\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PlanetApp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'PlanetApp\\Planet' => __DIR__ . '/../..' . '/src/Planet.php',
        'PlanetApp\\PlanetHydrator' => __DIR__ . '/../..' . '/src/PlanetHydrator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit288ad2b19ea4e9f2ac39ba9b416e4e3c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit288ad2b19ea4e9f2ac39ba9b416e4e3c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit288ad2b19ea4e9f2ac39ba9b416e4e3c::$classMap;

        }, null, ClassLoader::class);
    }
}
