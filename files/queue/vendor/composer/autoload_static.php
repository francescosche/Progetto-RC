<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97924069212403284272d1c95b557e57
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit97924069212403284272d1c95b557e57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit97924069212403284272d1c95b557e57::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
