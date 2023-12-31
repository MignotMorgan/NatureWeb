<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit002e7cfa1ed3ef1e05d46a4c4d62647e
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

        spl_autoload_register(array('ComposerAutoloaderInit002e7cfa1ed3ef1e05d46a4c4d62647e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit002e7cfa1ed3ef1e05d46a4c4d62647e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit002e7cfa1ed3ef1e05d46a4c4d62647e::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInit002e7cfa1ed3ef1e05d46a4c4d62647e::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequire002e7cfa1ed3ef1e05d46a4c4d62647e($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequire002e7cfa1ed3ef1e05d46a4c4d62647e($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
