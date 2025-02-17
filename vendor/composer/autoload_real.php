<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5ce521b4bb79ba7d2de1843f115b5cfd
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit5ce521b4bb79ba7d2de1843f115b5cfd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5ce521b4bb79ba7d2de1843f115b5cfd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5ce521b4bb79ba7d2de1843f115b5cfd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
