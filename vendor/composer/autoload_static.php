<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc49205bbdb34b4417b9bc38cbbad9737
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wjdnw\\Xiaochengxu\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wjdnw\\Xiaochengxu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc49205bbdb34b4417b9bc38cbbad9737::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc49205bbdb34b4417b9bc38cbbad9737::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
