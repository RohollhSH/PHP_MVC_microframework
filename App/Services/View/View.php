<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/25/2019
 * Time: 07:16 PM
 */

namespace App\Services\View;


class View
{
    public static function load(string $viewPath, array $data)
    {
        $viewPath = str_replace('.',DS ,$viewPath);
        $fullViewPath = ABSPATH . DS . "views" . DS .$viewPath.".php";
        if (file_exists($fullViewPath) and is_readable($fullViewPath)) {
//        include_once ABSPATH.DS."views".DS."user".DS."orders.php";
            extract($data);
            include_once $fullViewPath;
        }
    }
}