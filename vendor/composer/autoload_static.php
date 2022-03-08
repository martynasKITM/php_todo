<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1eaedd8d584b4b1798522bb229d7980
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'ToDo\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ToDo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1eaedd8d584b4b1798522bb229d7980::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1eaedd8d584b4b1798522bb229d7980::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
