<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda5ea2391220b986dbd1dd1a3cc609f3
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '32dcc8afd4335739640db7d200c1971d' => __DIR__ . '/..' . '/symfony/polyfill-apcu/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Stopwatch\\' => 28,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\HttpKernel\\' => 29,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Debug\\' => 24,
            'Symfony\\Component\\Config\\' => 25,
            'Symfony\\Component\\ClassLoader\\' => 30,
            'Symfony\\Component\\Cache\\' => 24,
            'Symfony\\Bundle\\FrameworkBundle\\' => 31,
        ),
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
            'Psr\\Cache\\' => 10,
        ),
        'K' => 
        array (
            'Knp\\Snappy\\' => 11,
            'Knp\\Bundle\\SnappyBundle\\' => 24,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\HttpKernel\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-kernel',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Debug\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/debug',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Symfony\\Component\\ClassLoader\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/class-loader',
        ),
        'Symfony\\Component\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/cache',
        ),
        'Symfony\\Bundle\\FrameworkBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/framework-bundle',
        ),
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Knp\\Snappy\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/knp-snappy/src/Knp/Snappy',
        ),
        'Knp\\Bundle\\SnappyBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/knp-snappy-bundle',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda5ea2391220b986dbd1dd1a3cc609f3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda5ea2391220b986dbd1dd1a3cc609f3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
