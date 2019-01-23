<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/07/2019
 * Time: 10:17 PM
 */

namespace App\Middleware;


class SecurityMiddleware extends BaseMiddleware
{

    function handle($request)
    {
        if ($request->keyExists('badParam')){
            unset($_SERVER['badParam']);
            $request->removeParam('badParam');
        }
        return $request;
    }
}