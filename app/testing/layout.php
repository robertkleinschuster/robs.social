<?php

declare(strict_types=1);

use Robs\Component\App\Components\Link;
use Robs\Component\App\Plugin\Url;
use Robs\Component\Renderer\Renderer;
use Robs\Component\Router\Reactive;

return #[Reactive] function (Renderer $renderer, $children) {
    yield new Link(new Url('/testing'));
    yield new Link(new Url('/testing/imprint'));
    yield new Link(new Url('/testing/about'));
    yield $children;
};