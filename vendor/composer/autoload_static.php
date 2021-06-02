<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf6bfdb5daaeab7217797dab252466be
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'ArthurVieira\\GetHub\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ArthurVieira\\GetHub\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf6bfdb5daaeab7217797dab252466be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf6bfdb5daaeab7217797dab252466be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf6bfdb5daaeab7217797dab252466be::$classMap;

        }, null, ClassLoader::class);
    }
}