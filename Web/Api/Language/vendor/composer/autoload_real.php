<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitfde0e9b3ee268bd223238f966a53181a
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

        spl_autoload_register(array('ComposerAutoloaderInitfde0e9b3ee268bd223238f966a53181a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitfde0e9b3ee268bd223238f966a53181a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitfde0e9b3ee268bd223238f966a53181a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}