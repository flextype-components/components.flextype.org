<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87856fd8c74771382658f44140e04833
{
    public static $files = array (
        'd89bc1c93c985a6081695a032655c6c5' => __DIR__ . '/..' . '/force/arr/Arr.php',
        '41383ea590ab15546f7fd24763c5cd38' => __DIR__ . '/..' . '/force/session/Session.php',
        'fa7a96292b9ab72605a7e3f56883bdb0' => __DIR__ . '/..' . '/force/errorhandler/ErrorHandler.php',
        '5b1a7ef43fdb190eebcb3d8580e72298' => __DIR__ . '/..' . '/force/http/Request.php',
        'a146f1cbd76d5caba4c6a68cf7f609ba' => __DIR__ . '/..' . '/force/http/Response.php',
        'df2e3621b9acf882aad1af34b58cb70c' => __DIR__ . '/..' . '/force/token/Token.php',
        'f632497f26100cf16773001ede15070d' => __DIR__ . '/..' . '/force/url/Url.php',
        '27889c667ac3bf52a46253c17c022f6c' => __DIR__ . '/../..' . '/flextype/boot/defines.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Thunder\\Shortcode\\Tests\\' => 24,
            'Thunder\\Shortcode\\' => 18,
        ),
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Thunder\\Shortcode\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/tests',
        ),
        'Thunder\\Shortcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/thunderer/shortcode/src',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Flextype\\Cache' => __DIR__ . '/../..' . '/flextype/Cache.php',
        'Flextype\\Config' => __DIR__ . '/../..' . '/flextype/Config.php',
        'Flextype\\Events' => __DIR__ . '/../..' . '/flextype/Events.php',
        'Flextype\\Filters' => __DIR__ . '/../..' . '/flextype/Filters.php',
        'Flextype\\Flextype' => __DIR__ . '/../..' . '/flextype/Flextype.php',
        'Flextype\\I18n' => __DIR__ . '/../..' . '/flextype/I18n.php',
        'Flextype\\Markdown' => __DIR__ . '/../..' . '/flextype/Markdown.php',
        'Flextype\\Pages' => __DIR__ . '/../..' . '/flextype/Pages.php',
        'Flextype\\Plugins' => __DIR__ . '/../..' . '/flextype/Plugins.php',
        'Flextype\\Shortcodes' => __DIR__ . '/../..' . '/flextype/Shortcodes.php',
        'Flextype\\Templates' => __DIR__ . '/../..' . '/flextype/Templates.php',
        'Flextype\\Themes' => __DIR__ . '/../..' . '/flextype/Themes.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87856fd8c74771382658f44140e04833::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87856fd8c74771382658f44140e04833::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit87856fd8c74771382658f44140e04833::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit87856fd8c74771382658f44140e04833::$classMap;

        }, null, ClassLoader::class);
    }
}
