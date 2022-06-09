<?php

declare(strict_types=1);

namespace App\Controller;

// mesmo sem este use funcionaria pois eles estão dentro da mesma pasta, conseguem se comunicar por isso.
use App\Controller\AbstractController;

class ProductController extends AbstractController {
    public function listAction(): void
    {
        parent::render('product/list');
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