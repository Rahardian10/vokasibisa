<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb87e975f3d0dcee41ed3795a634515d
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb87e975f3d0dcee41ed3795a634515d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb87e975f3d0dcee41ed3795a634515d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
