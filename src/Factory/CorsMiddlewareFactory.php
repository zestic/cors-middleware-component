<?php

declare(strict_types=1);

namespace Zestic\CorsMiddleware\Factory;

use Psr\Container\ContainerInterface;
use Zestic\Middleware\CorsMiddleware;

class CorsMiddlewareFactory
{
    public function __invoke(ContainerInterface $container): CorsMiddleware
    {
        $config = $container->get('config');

        return new CorsMiddleware($config['middleware']['cors']);
    }
}
