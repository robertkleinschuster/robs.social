<?php

declare(strict_types=1);

use Robs\Component\App\BootstrapFactory;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

$factory = new BootstrapFactory();
$bootstrap = $factory->create(dirname(__DIR__) . '/app');
$bootstrap->run();