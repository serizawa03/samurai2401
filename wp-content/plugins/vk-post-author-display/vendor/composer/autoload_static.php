<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9519b07921e75f296eaf60913bbfea6b
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VektorInc\\VK_Font_Awesome_Versions\\' => 35,
            'VektorInc\\VK_Admin\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VektorInc\\VK_Font_Awesome_Versions\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/font-awesome-versions/src',
        ),
        'VektorInc\\VK_Admin\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-admin/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'VektorInc\\VK_Admin\\VkAdmin' => __DIR__ . '/..' . '/vektor-inc/vk-admin/src/VkAdmin.php',
        'VektorInc\\VK_Font_Awesome_Versions\\VkFontAwesomeVersions' => __DIR__ . '/..' . '/vektor-inc/font-awesome-versions/src/VkFontAwesomeVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9519b07921e75f296eaf60913bbfea6b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9519b07921e75f296eaf60913bbfea6b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9519b07921e75f296eaf60913bbfea6b::$classMap;

        }, null, ClassLoader::class);
    }
}
