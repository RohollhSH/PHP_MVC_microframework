<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/07/2019
 * Time: 10:15 PM
 */

namespace App\Middleware;


abstract class BaseMiddleware
{
    abstract function handle($request);
}