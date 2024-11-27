<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4429cb2b21634ec3c77c5c01453ba8b1
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ericb\\M07Uf2MonologEb\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ericb\\M07Uf2MonologEb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4429cb2b21634ec3c77c5c01453ba8b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4429cb2b21634ec3c77c5c01453ba8b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4429cb2b21634ec3c77c5c01453ba8b1::$classMap;

        }, null, ClassLoader::class);
    }
}