<?php

declare(strict_types=1);

use Faker\Factory;
use FrameworkX\App;
use React\Http\Message\Response;

require dirname(__DIR__) . '/vendor/autoload.php';

$faker = Factory::create();

$app = new App();
$app->get('/', static fn () => Response::plaintext($faker->sentence() . "\n"));
$app->run();
