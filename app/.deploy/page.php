<?php

declare(strict_types=1);

use Psr\Http\Message\ServerRequestInterface;
use Slim\Exception\HttpMethodNotAllowedException;

return fn(ServerRequestInterface $request) => throw new HttpMethodNotAllowedException($request);