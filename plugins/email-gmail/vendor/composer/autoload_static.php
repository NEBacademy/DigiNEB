<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82b505398bd7a10ce41480fe62e3480f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Mailer\\Bridge\\Google\\' => 39,
        ),
        'G' => 
        array (
            'Grav\\Plugin\\EmailGmail\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Mailer\\Bridge\\Google\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/google-mailer',
        ),
        'Grav\\Plugin\\EmailGmail\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\EmailGmailPlugin' => __DIR__ . '/../..' . '/email-gmail.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82b505398bd7a10ce41480fe62e3480f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82b505398bd7a10ce41480fe62e3480f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit82b505398bd7a10ce41480fe62e3480f::$classMap;

        }, null, ClassLoader::class);
    }
}
