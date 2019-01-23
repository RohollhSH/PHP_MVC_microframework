<?php
return $routes = [
    '/' => [
        'http_method'=>'get|post',
        'target'=>'HomeController@index',
        'middleware'=>'SecurityMiddleware'
    ],
    '/post/archive' => [
        'http_method'=>'get',
        'target'=>'PostController@archive',
//        'middleware'=>'Handler$indexCheck'
    ],
    '/posts/archive' => 'PostController@archive'
];