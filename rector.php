<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Laravel\Set\LaravelSetList;
use Rector\Laravel\Set\LaravelLevelSetList;
use Rector\Laravel\Rector\Class_\AnonymousMigrationsRector;
use Rector\Core\ValueObject\PhpVersion;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__,
    ]);

    $rectorConfig->importNames();

    $rectorConfig->skip([
        __DIR__ . '/vendor',
        __DIR__ . '/config',
        __DIR__ . '/storage',
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_81);

    // register a single rule
    $rectorConfig->rule(AnonymousMigrationsRector::class);

    // define sets of rules
    $rectorConfig->sets([
        // LevelSetList::UP_TO_PHP_73,
        // LevelSetList::UP_TO_PHP_74,
        // LevelSetList::UP_TO_PHP_80,
        LevelSetList::UP_TO_PHP_81,
        // LaravelSetList::LARAVEL_80,
        LaravelLevelSetList::UP_TO_LARAVEL_90,
        // LaravelSetList::LARAVEL_LEGACY_FACTORIES_TO_CLASSES,
        // LaravelSetList::ARRAY_STR_FUNCTIONS_TO_STATIC_CALL
        // LaravelSetList::LARAVEL_ARRAY_STR_FUNCTION_TO_STATIC_CALL,
        // LaravelSetList::LARAVEL_CODE_QUALITY,
        // LaravelSetList::LARAVEL_STATIC_TO_INJECTION,
    ]);
};
