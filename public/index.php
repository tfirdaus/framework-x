<?php

declare(strict_types=1);

use Faker\Factory;
use FrameworkX\App;
use React\Http\Message\Response;

require dirname(__DIR__) . '/vendor/autoload.php';

$faker = Factory::create();

$app = new App();
$app->get('/', static function () use ($faker) {
	return Response::plaintext($faker->sentence());
});
$app->run();
