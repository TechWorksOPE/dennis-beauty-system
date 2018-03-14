<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5a44fe8b6bb6fda6a72fd64b0158c2d
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Predis\\' => 7,
        ),
        'M' => 
        array (
            'Modules\\' => 8,
            'Migrations\\' => 11,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
        ),
        'E' => 
        array (
            'Elasticsearch\\' => 14,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Commons\\' => 8,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Application/Predis',
        ),
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Application/Modules',
        ),
        'Migrations\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Application/App/Migrations',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'Elasticsearch\\' => 
        array (
            0 => __DIR__ . '/..' . '/elasticsearch/elasticsearch/src/Elasticsearch',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Application/Core',
        ),
        'Commons\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Application/Commons',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Application/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5a44fe8b6bb6fda6a72fd64b0158c2d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5a44fe8b6bb6fda6a72fd64b0158c2d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
