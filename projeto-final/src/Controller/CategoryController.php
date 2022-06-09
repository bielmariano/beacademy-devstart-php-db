<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AbstractController;

class CategoryController extends AbstractController {

    public function listAction(): void
    {
        parent::render('category/list');
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