<?php

declare(strict_types=1);

namespace App\Controller;

use App\Connection\Connection;

// mesmo sem este use funcionaria pois eles estão dentro da mesma pasta, conseguem se comunicar por isso.
use App\Controller\AbstractController;

class ProductController extends AbstractController {
    public function listAction(): void
    {
        $con = Connection::getConnection();
        $result = $con->prepare('SELECT * FROM tb_product');
        $result->execute();


        parent::render('product/list',$result);
    }

    public function addAction(): void
    {
        parent::render('product/add');
    }

    public function editAction(): void
    {
        parent::render('product/edit');
    }
}