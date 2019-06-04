<?php
/**
 * This file generated by Zend\Expressive\Tooling\Factory\ConfigInjector.
 *
 * Modifications should be kept at a minimum, and restricted to adding or
 * removing factory definitions; other dependency types may be overwritten
 * when regenerating this file via zend-expressive-tooling commands.
 */
 
declare(strict_types=1);

return [
    'dependencies' => [
        'factories' => [
            App\Test\Handler\TestHandler::class => App\Test\Factory\TestHandlerFactory::class,
            App\User\Handler\UserAvatarHandler::class => App\User\Factory\UserAvatarHandlerFactory::class,
            App\User\Handler\UserHandler::class => App\User\Factory\UserHandlerFactory::class,
        ],
    ],
];
