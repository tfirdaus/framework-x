<?php

declare(strict_types=1);

use FrameworkX\App;
use React\Http\Message\Response;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require dirname(__DIR__) . '/vendor/autoload.php';

$users = [['name' => 'Alice'], ['name' => 'Bob']];
$loader = new FilesystemLoader(dirname(__DIR__) . '/resources/templates');
$twig = new Environment($loader, ['cache' => dirname(__DIR__) . '/resources/templates/.cache']);
$template = $twig->load('index.twig');

$app = new App();
$app->get('/', static fn () => Response::html($template->render(['users' => $users])));
$app->run();
