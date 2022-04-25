<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit670f329ff599e1c6251448204d8fdac4
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amine\\Pokedex\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amine\\Pokedex\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit670f329ff599e1c6251448204d8fdac4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit670f329ff599e1c6251448204d8fdac4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit670f329ff599e1c6251448204d8fdac4::$classMap;

        }, null, ClassLoader::class);
    }
}
