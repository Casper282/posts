<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d2fde02c50c47663ab815b659442c51
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d2fde02c50c47663ab815b659442c51::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d2fde02c50c47663ab815b659442c51::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}