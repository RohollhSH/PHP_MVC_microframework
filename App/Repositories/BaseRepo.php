<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/29/2019
 * Time: 11:53 PM
 */

namespace App\Repositories;


abstract class BaseRepo
{
    protected static $model;

    public function insert($data)
    {
        return static::$model::insert($data);
    }

    public function find($id)
    {
        return static::$model::find($id);
    }

    public function findFirst($id)
    {
        return static::$model::find($id)->first();
    }

    public function findLast($id)
    {
        return static::$model::find($id)->last();
    }

    public function all()
    {
        return static::$model::all();
    }

/*    public function update($data , $id)
    {
        return static::$model->update($data , $id);
    }*/
}