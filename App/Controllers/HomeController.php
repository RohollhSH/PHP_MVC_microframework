<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/07/2019
 * Time: 06:12 PM
 */

namespace App\Controllers;


class HomeController
{
    public function __construct()
    {
        echo "autoloader works <br>";
    }

    public function index()
    {
        echo"HomeController_index";
    }
}