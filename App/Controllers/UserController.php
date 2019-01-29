<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/07/2019
 * Time: 06:12 PM
 */

namespace App\Controllers;


use App\Core\Request;
use App\Repositories\UserRepo;
use App\Services\View\View;

class UserController
{
    private $userRepo;

    public function __construct()
    {
        $this->userRepo = new UserRepo();
    }

    public function orders($request)
    {
        $users = $this->userRepo->findAll();
    }

    public function register(Request $request)
    {
        $user_name = 'amir amiri';
        $msg = View::render("templates.mail.auth-success.blue",compact('user_name'));
        echo $msg;
//        mail("user@gmail", "title", $msg);
    }
}