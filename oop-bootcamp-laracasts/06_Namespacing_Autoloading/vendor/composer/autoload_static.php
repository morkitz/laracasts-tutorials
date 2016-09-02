<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd37aa5a2b84a68c90d63f5edab66539d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd37aa5a2b84a68c90d63f5edab66539d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd37aa5a2b84a68c90d63f5edab66539d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
