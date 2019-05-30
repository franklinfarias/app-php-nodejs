<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5d9a5f2aa8460e7041f0d363e1bc201
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'F' => 
        array (
            'FKS\\' => 4,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'FKS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/fks',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5d9a5f2aa8460e7041f0d363e1bc201::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5d9a5f2aa8460e7041f0d363e1bc201::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
