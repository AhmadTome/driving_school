<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit683d1f7ee9e0d6663fb4acb82316f3e3
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit683d1f7ee9e0d6663fb4acb82316f3e3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit683d1f7ee9e0d6663fb4acb82316f3e3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
