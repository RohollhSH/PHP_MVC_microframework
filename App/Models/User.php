<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/29/2019
 * Time: 12:40 AM
 */

namespace App\Models;


class User extends BaseModel
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public $timestamps =true;

    //creating costume property for a table
    public function getUciFirstNameAttribute()
    {

    }
}