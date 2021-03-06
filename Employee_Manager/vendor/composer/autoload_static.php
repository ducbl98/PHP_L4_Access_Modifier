<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfa1bc86e00146530867cf790db40ffc3
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfa1bc86e00146530867cf790db40ffc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfa1bc86e00146530867cf790db40ffc3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
