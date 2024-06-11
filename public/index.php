<?php

declare(strict_types=1);

use FrameworkX\App;
use React\Http\Message\Response;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new App();
$app->get('/', static fn () => Response::plaintext('Hello World!' . "\n"));
$app->run();
