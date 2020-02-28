<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiControllerTrait;
use App\Http\Controllers\Controller;
use App\Models\Products;

class ProductsController extends Controller
{
    use ApiControllerTrait;

    protected $model;

    protected $relationships = ['categories'];

    public function __construct(Products $model)
    {
        $this->model = $model;
    }
}
