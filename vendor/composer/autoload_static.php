<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4601022ce4ec193a40f30f4f18cf5ca3
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'benhall14\\' => 10,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'benhall14\\' => 
        array (
            0 => __DIR__ . '/..' . '/benhall14/php-pagination/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4601022ce4ec193a40f30f4f18cf5ca3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4601022ce4ec193a40f30f4f18cf5ca3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4601022ce4ec193a40f30f4f18cf5ca3::$classMap;

        }, null, ClassLoader::class);
    }
}
