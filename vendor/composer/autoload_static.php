<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8cc4fdeb1dc1e2ebf75c2a906ce22470
{
    public static $files = array (
        'f3dcffb69c47112032db91110db703e5' => __DIR__ . '/..' . '/freemius/wordpress-sdk/start.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fragen\\Git_Updater\\Additions\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fragen\\Git_Updater\\Additions\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Additions',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8cc4fdeb1dc1e2ebf75c2a906ce22470::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8cc4fdeb1dc1e2ebf75c2a906ce22470::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8cc4fdeb1dc1e2ebf75c2a906ce22470::$classMap;

        }, null, ClassLoader::class);
    }
}
