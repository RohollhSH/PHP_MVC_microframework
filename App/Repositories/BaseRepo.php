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
        return $model->insert($data);
    }

    public function find($id)
    {
        return $model->find($id);
    }

    public function findAll()
    {
        return $model->findAll();
    }

    public function update($data , $id)
    {
        return $model->update($data , $id);
    }
}