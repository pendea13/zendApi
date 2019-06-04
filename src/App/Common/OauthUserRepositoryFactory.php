<?php

declare(strict_types=1);

namespace App\Common;

use Psr\Container\ContainerInterface;
use Zend\Expressive\Authentication\OAuth2\Repository\Pdo\PdoService;

/**
 * Class OauthUserRepositoryFactory
 * @package App\Common
 */
class OauthUserRepositoryFactory
{
    /**
     * @param ContainerInterface $container
     * @return OauthUserRepository
     */
    public function __invoke(ContainerInterface $container) : OauthUserRepository
    {
        return new OauthUserRepository(
            $container->get(PdoService::class)
        );
    }
}
