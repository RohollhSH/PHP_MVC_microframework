<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/28/2019
 * Time: 07:04 PM
 */

namespace App\Services\Database;


use App\Services\Config\Config;

class DbConnection
{
    public $connection;

    public function __construct()
    {
        $dbInfo = Config::get('database');
        $this->connection = mysqli_connect($dbInfo['host'] , $dbInfo['dbuser'] , $dbInfo['dbpass'] , $dbInfo['dbname']);
        if (! $this->connection){
            echo 'Connection failure <br>';
            die();
        }
    }

    public function query($sql)
    {
        return $this->connection->query($sql);
    }
}