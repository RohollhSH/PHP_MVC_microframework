<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/07/2019
 * Time: 06:12 PM
 */

namespace App\Controllers;


use App\Services\View\View;

class HomeController
{

    public function index($request)
    {
        View::load('home.index',array(),'frontend');
    }

    public function contact($request)
    {
        View::load('home.contact');
    }
}