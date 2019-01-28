<?php
// define routes in lowercase
return $routes = [
    '/' => [
        'http_method'=>'get|post',
        'target'=>'HomeController@index',
        'middleware'=>'SecurityMiddleware'
    ],
    '/user/orders' => [
        'http_method'=>'get|post',
        'target'=>'UserController@orders',
//        'middleware'=>'Handler$indexCheck'
    ],
    '/posts/archive' => 'PostController@archive'
];