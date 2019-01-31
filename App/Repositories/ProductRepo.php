<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/31/2019
 * Time: 07:20 PM
 */

namespace App\Repositories;


use App\Models\Product;

class ProductRepo extends BaseRepo
{
    protected static $model = Product::class;
}