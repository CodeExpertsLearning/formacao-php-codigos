<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9439874fd227edd0eed58ac3c6518f4c
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit9439874fd227edd0eed58ac3c6518f4c::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
