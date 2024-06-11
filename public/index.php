<?php

declare(strict_types=1);

use FrameworkX\App;
use React\Http\Message\Response;

require dirname(__DIR__) . '/vendor/autoload.php';

$users = [['name' => 'Alice'], ['name' => 'Bob']];

$app = new App();
$app->get('/', static fn () => Response::json($users));
$app->run();
