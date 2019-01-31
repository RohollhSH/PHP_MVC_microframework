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
    public static function load(string $viewPath, array $data = array(), $layout = null)
    {
        $viewPath     = str_replace('.', DS, $viewPath);
        $fullViewPath = ABSPATH . DS . "views" . DS . $viewPath . ".php";
        if (file_exists($fullViewPath) and is_readable($fullViewPath)) {
            extract($data);
            if ($layout == null) {
                include_once $fullViewPath;
            } else {
                $fullLayoutPath = ABSPATH . DS . "views" . DS . 'layout' . DS . $layout . ".php";
                $view           = View::render($viewPath,$data);
                include $fullLayoutPath;
            }

        }
    }

    public static function render(string $viewPath, array $data = array())
    {
        $viewPath     = str_replace('.', DS, $viewPath);
        $fullViewPath = ABSPATH . DS . "views" . DS . $viewPath . ".php";
        if (file_exists($fullViewPath) and is_readable($fullViewPath)) {
            extract($data);
            ob_start();
            include_once $fullViewPath;
            $rendered_view = ob_get_clean();

            return $rendered_view;
        }
    }
}