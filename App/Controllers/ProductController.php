<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/31/2019
 * Time: 07:19 PM
 */

namespace App\Controllers;


use App\Repositories\ProductRepo;
use App\Services\View\View;

class ProductController
{
    private $productRepo;

    public function __construct()
    {
        $this->productRepo = new ProductRepo();
    }

    public function item($request)
    {
        $product_name = $this->productRepo->findFirst(1)->name;
        View::load('product.item',compact('product_name'),'frontend');
    }
}