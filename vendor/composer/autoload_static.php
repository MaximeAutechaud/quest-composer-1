<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0dccf44bf5298d3f878f0df21e16ac7c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0dccf44bf5298d3f878f0df21e16ac7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0dccf44bf5298d3f878f0df21e16ac7c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
