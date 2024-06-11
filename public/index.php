<?php

declare(strict_types=1);

use FrameworkX\App;
use React\Http\Message\Response;

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new App();
$app->get('/', static function () {
	return Response::plaintext('Hello world!');
});
$app->run();
