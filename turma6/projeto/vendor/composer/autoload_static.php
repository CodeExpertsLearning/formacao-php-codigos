<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68e863e77e4a8a1c9bf3ec4b3cd73160
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit68e863e77e4a8a1c9bf3ec4b3cd73160::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}