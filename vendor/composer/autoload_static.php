<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite1a52dc664ae950e70ba1d7e8ae2954d
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Heito\\SistemaDeCompra\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Heito\\SistemaDeCompra\\' => 
        array (
            0 => __DIR__ . '/../..' . '/public',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite1a52dc664ae950e70ba1d7e8ae2954d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite1a52dc664ae950e70ba1d7e8ae2954d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite1a52dc664ae950e70ba1d7e8ae2954d::$classMap;

        }, null, ClassLoader::class);
    }
}
