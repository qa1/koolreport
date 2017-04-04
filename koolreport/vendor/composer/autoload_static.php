<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6edea910baf314688fb64fdb74248a71
{
    public static $files = array (
        '3a37ebac017bc098e9a86b35401e7a68' => __DIR__ . '/..' . '/mongodb/mongodb/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MongoDB\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MongoDB\\' => 
        array (
            0 => __DIR__ . '/..' . '/mongodb/mongodb/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPExcel' => 
            array (
                0 => __DIR__ . '/..' . '/phpoffice/phpexcel/Classes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6edea910baf314688fb64fdb74248a71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6edea910baf314688fb64fdb74248a71::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6edea910baf314688fb64fdb74248a71::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
