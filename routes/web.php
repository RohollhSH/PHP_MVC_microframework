<?php
// define routes in lowercase
return $routes = [
    '/' => [
        'http_method'=>'get|post',
        'target'=>'HomeController@index',
        'middleware'=>'SecurityMiddleware'
    ],
    '/contact' => [
        'http_method'=>'get',
        'target'=>'HomeController@contact',
    ],
    '/user/orders' => [
        'http_method'=>'get|post',
        'target'=>'UserController@orders',
//        'middleware'=>'Handler$indexCheck'
    ],
    '/user/register' => [
        'http_method'=>'post|get',
        'target'=>'UserController@register',
        'middleware'=>'SecurityMiddleware'
    ],
    '/product/item' => [
        'http_method'=>'get',
        'target'=>'ProductController@item',
//        'middleware'=>'SecurityMiddleware'
    ],
];