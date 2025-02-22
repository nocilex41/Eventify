<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfabafa372a481d25421bfba07eb768fe
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'c15d4a1253e33e055d05e547c61dcb71' => __DIR__ . '/..' . '/smarty/smarty/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Smarty\\' => 7,
        ),
        'E' => 
        array (
            'Eventify\\models\\' => 16,
            'Eventify\\core\\' => 14,
            'Eventify\\controllers\\pages\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Smarty\\' => 
        array (
            0 => __DIR__ . '/..' . '/smarty/smarty/src',
        ),
        'Eventify\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Eventify\\core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'Eventify\\controllers\\pages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers/pages',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfabafa372a481d25421bfba07eb768fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfabafa372a481d25421bfba07eb768fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfabafa372a481d25421bfba07eb768fe::$classMap;

        }, null, ClassLoader::class);
    }
}
