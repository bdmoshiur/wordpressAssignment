<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc0b2c4e144c0011f5dcbd84dca615cc
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Recent\\Posts\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Recent\\Posts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc0b2c4e144c0011f5dcbd84dca615cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc0b2c4e144c0011f5dcbd84dca615cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc0b2c4e144c0011f5dcbd84dca615cc::$classMap;

        }, null, ClassLoader::class);
    }
}
