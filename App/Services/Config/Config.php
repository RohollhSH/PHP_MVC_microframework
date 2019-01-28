<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/28/2019
 * Time: 08:57 PM
 */

namespace App\Services\Config;


class Config
{
    public static function get($config)
    {
        return include CONFIG.DS.$config.'.php';
    }
    public static function getConfigItem($config,$item)
    {
        $config = include CONFIG.DS.$config.'.php';
        if (array_key_exists($item,$config)){
            return $config[$item];
        }else{
            return "no such item in this config";
        }
    }
}