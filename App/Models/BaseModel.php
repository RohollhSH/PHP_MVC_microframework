<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/28/2019
 * Time: 10:39 PM
 */

namespace App\Models;


use App\Services\Database\DbConnection;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $table;
    protected $primaryKey;

    public $timestamps = false;
}