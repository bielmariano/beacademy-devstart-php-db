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

        
        parent::render('category/list', $result);
    }


}