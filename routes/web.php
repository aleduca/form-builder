<?php

use app\controllers\HomeController;
use app\controllers\UserController;
use app\database\Connection;
use core\template\TemplateInterface;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

$container = new ContainerBuilder();
$container->addDefinitions([
  TemplateInterface::class => function () {
    return new \core\template\Template();
  },
  PDO::class => Connection::get()
]);

// $container->addDefinitions($containers);
$container = $container->build();

AppFactory::setContainer($container);
$app = AppFactory::create();

$app->get('/', [HomeController::class, 'index']);
$app->get('/user/create', [UserController::class, 'create']);
$app->post('/user', [UserController::class, 'store']);

$app->run();
