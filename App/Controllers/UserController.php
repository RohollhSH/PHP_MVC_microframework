<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/07/2019
 * Time: 06:12 PM
 */

namespace App\Controllers;


use App\Models\UserModel;
use App\Services\Database\DbConnection;
use App\Services\View\View;

class UserController
{
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function orders($request)
    {
        $orders = [
            ['order_id'=>2 , 'order_pay_amount' => 150550],
            ['order_id'=>11 , 'order_pay_amount' => 15000],
            ['order_id'=>18 , 'order_pay_amount' => 223323],
        ];
        $age = 20;
        $name = 'amir';

        $users = $this->model->finaAll();

        View::load("user.orders",compact('orders','age','name','users'));
    }

}