<?php

declare(strict_types=1);

namespace Zestic\CorsMiddleware;

use Zestic\CorsMiddleware\Factory\CorsMiddlewareFactory;
use Zestic\Middleware\CorsMiddleware;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    private function getDependencies(): array
    {
        return [
            'factories' => [
                CorsMiddleware::class => CorsMiddlewareFactory::class,
            ],
        ];
    }
}
