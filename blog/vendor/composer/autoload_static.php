<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6442ebb950f450c363c80af89e73e075
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gjun\\Blog\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gjun\\Blog\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6442ebb950f450c363c80af89e73e075::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6442ebb950f450c363c80af89e73e075::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6442ebb950f450c363c80af89e73e075::$classMap;

        }, null, ClassLoader::class);
    }
}
