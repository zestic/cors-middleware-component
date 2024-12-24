<?php

declare(strict_types=1);

namespace Zestic\CorsMiddleware;

use Tuupola\Middleware\CorsMiddleware;
use Zestic\CorsMiddleware\Factory\CorsMiddlewareFactory;

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