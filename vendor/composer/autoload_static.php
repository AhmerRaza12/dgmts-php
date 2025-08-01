<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e612b94b6b8c158154f97c0e0f28fec
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e612b94b6b8c158154f97c0e0f28fec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e612b94b6b8c158154f97c0e0f28fec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e612b94b6b8c158154f97c0e0f28fec::$classMap;

        }, null, ClassLoader::class);
    }
}
