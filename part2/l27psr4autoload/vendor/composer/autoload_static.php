<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd89d32b45a4d3759f5182ba02a926fc1
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'config\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\gallery\\animateshow\\portrait' => __DIR__ . '/../..' . '/app/gallery/animateshow/portrait.php',
        'app\\gallery\\photo' => __DIR__ . '/../..' . '/app/gallery/photo.php',
        'app\\gallery\\slideshow\\image' => __DIR__ . '/../..' . '/app/gallery/slideshow/image.php',
        'app\\gallery\\slideshow\\picture' => __DIR__ . '/../..' . '/app/gallery/slideshow/picture.php',
        'app\\models\\Article' => __DIR__ . '/../..' . '/app/models/Article.php',
        'app\\music' => __DIR__ . '/../..' . '/app/music.php',
        'app\\video' => __DIR__ . '/../..' . '/app/video.php',
        'config\\auth' => __DIR__ . '/../..' . '/config/auth.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd89d32b45a4d3759f5182ba02a926fc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd89d32b45a4d3759f5182ba02a926fc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd89d32b45a4d3759f5182ba02a926fc1::$classMap;

        }, null, ClassLoader::class);
    }
}
