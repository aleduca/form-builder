<?php

namespace app\controllers;

use core\form\Form;
use core\form\Select;
use core\template\TemplateInterface;
use PDO;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class UserController
{
  public function __construct(
    private TemplateInterface $template,
    private PDO $connection,
  ) {
  }

  public function create(Request $request, Response $response)
  {

    $prepare = $this->connection->prepare('SELECT id,name FROM users');
    $prepare->execute();
    $users = $prepare->fetchAll(PDO::FETCH_ASSOC);

    $this->template->render('user/create', data: [
      'users' => $users,
    ], options: [
      'select' => Select::make(),
    ]);

    return $response;
  }

  public function store()
  {
    dd($_POST);
  }
}
