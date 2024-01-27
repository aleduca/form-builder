<?php

namespace app\controllers;

use core\template\TemplateInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class HomeController
{
    public function __construct(
        private TemplateInterface $template
    ) {
    }

    public function index(Request $request, Response $response)
    {
        $this->template->render('home');

        return $response;
    }
}
