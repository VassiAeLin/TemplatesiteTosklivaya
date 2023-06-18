<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4e3bd31f81f187763706646322e2c073
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Photos\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Photos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4e3bd31f81f187763706646322e2c073::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4e3bd31f81f187763706646322e2c073::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4e3bd31f81f187763706646322e2c073::$classMap;

        }, null, ClassLoader::class);
    }
}