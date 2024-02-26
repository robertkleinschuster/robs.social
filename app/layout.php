<?php

declare(strict_types=1);

use Robs\Component\Renderer\Renderer;

return fn($children, Renderer $renderer, array $params, array $queryParams) => $renderer->fragment(<<<HTML
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{$renderer->placeholder('meta.title')}</title>
        <meta name="description" content="{$renderer->placeholder('meta.description')}">
        {$renderer->placeholder('head')}
    </head>
    <body>
        {$renderer->render($children, $renderer->args(['params' => $params, 'queryParams' => $queryParams]))}
    </body>
</html>
HTML
);
