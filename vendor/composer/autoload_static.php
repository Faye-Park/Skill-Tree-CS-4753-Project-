<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit69525d5d6d852e283e2952aa078742bc
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit69525d5d6d852e283e2952aa078742bc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit69525d5d6d852e283e2952aa078742bc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
