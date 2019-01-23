<?php
/**
 * Created by PhpStorm.
 * User: Rohollah
 * Date: 01/07/2019
 * Time: 10:25 PM
 */

namespace App\Core;


class Request
{
    public $http_method;
    public $request_uri;
    private $params;
    public $ip_address;

    public function __construct()
    {
        $this->http_method = $_SERVER['REQUEST_METHOD'];
        $this->request_uri = $_SERVER['REQUEST_URI'];
        $this->params = $_REQUEST;
        $this->ip_address = $_SERVER['REMOTE_ADDR'];
    }

    public function param($key)
    {
        return $this->params[$key];
    }

    public function __get($name)
    {
        if (array_key_exists($name , $this->params)) {
            return $this->param($name);
        }
    }

    public function keyExists($key)
    {
        return isset($this->param[$key]);
    }
    public function removeParam($key)
    {
        unset($this->param[$key]);
    }
}