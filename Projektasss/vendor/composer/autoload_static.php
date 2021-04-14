<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcb835a7050486dc79b926e671538381
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imones\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imones\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcb835a7050486dc79b926e671538381::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcb835a7050486dc79b926e671538381::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdcb835a7050486dc79b926e671538381::$classMap;

        }, null, ClassLoader::class);
    }
}