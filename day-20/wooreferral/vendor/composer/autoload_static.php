<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f3f3fd5b04f5619e5a505a80dc74c7b
{
    public static $files = array (
        '9671c57088561004b2664529feab3f19' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Woo\\Referral\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Woo\\Referral\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f3f3fd5b04f5619e5a505a80dc74c7b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f3f3fd5b04f5619e5a505a80dc74c7b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}