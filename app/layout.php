<?php

declare(strict_types=1);

use Robs\Component\App\Components\Dependencies;
use Robs\Component\App\Components\Document;
use Robs\Component\Renderer\Renderer;

return fn($children, Renderer $renderer, array $params, array $queryParams) => new Document(
    lang: 'de',
    children: [
        $renderer->capture('head', $renderer->fragment('<link rel="icon" href="/favicon.ico" sizes="any">')),
        $children
    ],
    dependencies: new Dependencies(
        scripts: [],
        stylesheets: ['/styles.css']
    ),
);
