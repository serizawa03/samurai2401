<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b6de7f62ea91ada6bd71489f8a8446d
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VektorInc\\VK_Term_Color\\' => 24,
            'VektorInc\\VK_Helpers\\' => 21,
            'VektorInc\\VK_Font_Awesome_Versions\\' => 35,
            'VektorInc\\VK_CSS_Optimize\\' => 26,
            'VektorInc\\VK_Breadcrumb\\' => 24,
            'VektorInc\\VK_Admin\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VektorInc\\VK_Term_Color\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-term-color/src',
        ),
        'VektorInc\\VK_Helpers\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-helpers/src',
        ),
        'VektorInc\\VK_Font_Awesome_Versions\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/font-awesome-versions/src',
        ),
        'VektorInc\\VK_CSS_Optimize\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src',
        ),
        'VektorInc\\VK_Breadcrumb\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-breadcrumb/src',
        ),
        'VektorInc\\VK_Admin\\' => 
        array (
            0 => __DIR__ . '/..' . '/vektor-inc/vk-admin/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'VektorInc\\VK_Admin\\VkAdmin' => __DIR__ . '/..' . '/vektor-inc/vk-admin/src/VkAdmin.php',
        'VektorInc\\VK_Breadcrumb\\VkBreadcrumb' => __DIR__ . '/..' . '/vektor-inc/vk-breadcrumb/src/VkBreadcrumb.php',
        'VektorInc\\VK_CSS_Optimize\\CustomHtmlControl' => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src/CustomHtmlControl.php',
        'VektorInc\\VK_CSS_Optimize\\CustomTextControl' => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src/CustomTextControl.php',
        'VektorInc\\VK_CSS_Optimize\\VkCssOptimize' => __DIR__ . '/..' . '/vektor-inc/vk-css-optimize/src/VkCssOptimize.php',
        'VektorInc\\VK_Font_Awesome_Versions\\VkFontAwesomeVersions' => __DIR__ . '/..' . '/vektor-inc/font-awesome-versions/src/VkFontAwesomeVersions.php',
        'VektorInc\\VK_Helpers\\VkHelpers' => __DIR__ . '/..' . '/vektor-inc/vk-helpers/src/VkHelpers.php',
        'VektorInc\\VK_Term_Color\\VkTermColor' => __DIR__ . '/..' . '/vektor-inc/vk-term-color/src/VkTermColor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b6de7f62ea91ada6bd71489f8a8446d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b6de7f62ea91ada6bd71489f8a8446d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b6de7f62ea91ada6bd71489f8a8446d::$classMap;

        }, null, ClassLoader::class);
    }
}
