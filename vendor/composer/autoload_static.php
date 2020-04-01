<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda9ca4ea1a81148d5237c09483991240
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda9ca4ea1a81148d5237c09483991240::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda9ca4ea1a81148d5237c09483991240::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}