<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/29/2019
 * Time: 11:55 PM
 */

namespace App\Repositories;



use App\Models\UserModel;

class UserRepo extends BaseRepo
{
    protected static $model = UserModel::class ;
}