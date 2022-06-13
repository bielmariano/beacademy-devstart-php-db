<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;
use App\Connection\Connection;


class CategoryController extends AbstractController {

    public function listAction(): void
    {
        $con = Connection::getConnection();
        
        $result = $con->prepare('SELECT * FROM tb_category');
        $result->execute();

        //\PDO::FETCH_ASSOC irá trazer só os dados de forma associativa 
        $cat = $result->fetch(\PDO::FETCH_ASSOC);
        
        echo $cat['id'];
        echo $cat['name'];
        echo $cat['description'];
    }

    public function addAction(): void
    {
        parent::render('category/add');
    }

    public function editAction(): void
    {
        parent::render('category/edit');
    }
}