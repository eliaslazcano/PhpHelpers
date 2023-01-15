<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit081e2ddc8281d612c78ac6d0b30bc1c4
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Eliaslazcano\\Helpers\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Eliaslazcano\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit081e2ddc8281d612c78ac6d0b30bc1c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit081e2ddc8281d612c78ac6d0b30bc1c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit081e2ddc8281d612c78ac6d0b30bc1c4::$classMap;

        }, null, ClassLoader::class);
    }
}
