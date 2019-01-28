<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/28/2019
 * Time: 10:39 PM
 */

namespace App\Models;


use App\Services\Database\DbConnection;

abstract class BaseModel
{
    protected $connection;
    protected $table;
    protected $primary_key;
    public function __construct()
    {
        $this->connection = new DbConnection();
    }

    public function insert($data)
    {
        
    }

    public function find($id)
    {
        $sql = "select * from {$this->table} where {$this->primary_key} = '$id'";
        return $this->connection->query($sql);
    }

    public function finaAll()
    {
        $sql = "select * from {$this->table}";
        return $this->connection->query($sql);
    }

    public function update($data,$id)
    {
        
    }

    public function delete($id)
    {

    }
}