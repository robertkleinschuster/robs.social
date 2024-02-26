<?php

declare(strict_types=1);

use Robs\Component\Renderer\Renderer;

return function (Renderer $renderer) {
    yield $renderer->capture('meta.title', 'Hello world!');
    yield $renderer->capture('meta.description', 'Hello to the world!');
    yield $renderer->fragment('<h1>Hello world!</h1>');
};
