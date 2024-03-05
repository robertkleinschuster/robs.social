<?php

declare(strict_types=1);

use Mosaic\Renderer;

return function (Renderer $renderer) {
    yield $renderer->capture('meta.title', 'robs.social');
    yield $renderer->capture('meta.description', 'Links zu meinen Social Media-Profilen.');
    yield $renderer->fragment(<<<HTML
<h1>robs.social</h1>
<section>
    <a href="https://instagram.com/robertkleinschuster">Instagram</a>
    <a href="https://www.facebook.com/robert.kleinschuster">Facebook</a>
    <a href="https://t.me/robkleee">Telegram</a>
    <a href="https://github.com/robertkleinschuster">GitHub</a>
</section>
HTML
    );
};
