<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8bc6390ef3aa110c65c0080e10044294
{
    public static $files = array (
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/functions.php',
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
        '3fad0ebbff9928a94a9d8941fb314bd8' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Bundle\\SwiftmailerBundle\\' => 33,
            'Symfony\\Bundle\\MonologBundle\\' => 29,
            'Symfony\\Bundle\\AsseticBundle\\' => 29,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'D' => 
        array (
            'Doctrine\\Bundle\\DoctrineBundle\\' => 31,
            'DoctrineExtensions\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Bundle\\SwiftmailerBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/swiftmailer-bundle',
        ),
        'Symfony\\Bundle\\MonologBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/monolog-bundle',
        ),
        'Symfony\\Bundle\\AsseticBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/assetic-bundle',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Doctrine\\Bundle\\DoctrineBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/doctrine-bundle',
        ),
        'DoctrineExtensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/beberlei/DoctrineExtensions/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'Symfony\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/symfony/src',
            ),
            'SymfonyStandard' => 
            array (
                0 => __DIR__ . '/../..' . '/app',
            ),
            'Sensio\\Bundle\\GeneratorBundle' => 
            array (
                0 => __DIR__ . '/..' . '/sensio/generator-bundle',
            ),
            'Sensio\\Bundle\\FrameworkExtraBundle' => 
            array (
                0 => __DIR__ . '/..' . '/sensio/framework-extra-bundle',
            ),
            'Sensio\\Bundle\\DistributionBundle' => 
            array (
                0 => __DIR__ . '/..' . '/sensio/distribution-bundle',
            ),
            'SensioLabs\\Security' => 
            array (
                0 => __DIR__ . '/..' . '/sensiolabs/security-checker',
            ),
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
        'I' => 
        array (
            'Incenteev\\ParameterHandler' => 
            array (
                0 => __DIR__ . '/..' . '/incenteev/composer-parameter-handler',
            ),
        ),
        'D' => 
        array (
            'Doctrine\\ORM\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/orm/lib',
            ),
            'Doctrine\\DBAL\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/dbal/lib',
            ),
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
            'Doctrine\\Common\\Collections\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/collections/lib',
            ),
            'Doctrine\\Common\\Cache\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/cache/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
            'Doctrine\\Common\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/common/lib',
            ),
            'Doctrine\\Bundle\\DoctrineCacheBundle' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/doctrine-cache-bundle',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/assetic/src',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Collator' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/Collator.php',
        'IntlDateFormatter' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/IntlDateFormatter.php',
        'Locale' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/Locale.php',
        'NumberFormatter' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/Intl/Resources/stubs/NumberFormatter.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/symfony/src/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
        'SqlFormatter' => __DIR__ . '/..' . '/jdorn/sql-formatter/lib/SqlFormatter.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8bc6390ef3aa110c65c0080e10044294::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8bc6390ef3aa110c65c0080e10044294::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit8bc6390ef3aa110c65c0080e10044294::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit8bc6390ef3aa110c65c0080e10044294::$fallbackDirsPsr0;
            $loader->classMap = ComposerStaticInit8bc6390ef3aa110c65c0080e10044294::$classMap;

        }, null, ClassLoader::class);
    }
}
