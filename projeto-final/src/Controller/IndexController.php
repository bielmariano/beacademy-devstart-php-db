<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController extends AbstractController {
    public function indexAction(): void
    {
        //__DIR__  sinaliza a pasta onde está, e a cada dirname voltará uma pasta.
        // include dirname(__DIR__).'/View/index/index.php';
        parent::render('index/index');
    }

    public function loginAction(): void
    {
        // include dirname(__DIR__).'/View/index/login.php';
        parent::render('index/login');
    }
}