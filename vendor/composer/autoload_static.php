<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit816a2c7879010f445504109bf556af4b
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit816a2c7879010f445504109bf556af4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit816a2c7879010f445504109bf556af4b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
