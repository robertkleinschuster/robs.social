<?php

declare(strict_types=1);

use Robs\Component\App\AppConfig;
use Slim\Psr7\Response;

return function(AppConfig $config, array $data) {
    $key = $data['deployKey'] ?? null;
    if ($key === $config->get('DEPLOY_KEY')) {
        if (function_exists('opcache_reset')) {
            opcache_reset();
            touch('opcache_reset');
        }
        return new Response(200);
    } else {
        return new Response(400);
    }
};