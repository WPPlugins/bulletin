<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefe7ec7ea253c655f2b24b379bc5d96f
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bulletin\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bulletin\\' => 
        array (
            0 => __DIR__ . '/..' . '/eresults/bulletin-api-php/lib/Bulletin',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefe7ec7ea253c655f2b24b379bc5d96f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefe7ec7ea253c655f2b24b379bc5d96f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
