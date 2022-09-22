<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87f28d838ab535a85ecf30e6f0f7e30e
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Mustache' => 
            array (
                0 => __DIR__ . '/..' . '/mustache/mustache/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit87f28d838ab535a85ecf30e6f0f7e30e::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit87f28d838ab535a85ecf30e6f0f7e30e::$classMap;

        }, null, ClassLoader::class);
    }
}
