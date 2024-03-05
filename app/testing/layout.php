<?php

declare(strict_types=1);

use Zenith\Components\Link;
use Zenith\Plugin\Url;
use Mosaic\Renderer;
use Compass\Reactive;

return #[Reactive] function (Renderer $renderer, $children) {
    yield new Link(new Url('/testing'));
    yield new Link(new Url('/testing/imprint'));
    yield new Link(new Url('/testing/about'));
    yield $children;
};