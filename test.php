<?php

include_once "App/Core/Request.php";

$request = new \App\Core\Request();

var_dump($request);

echo "age : {$request->param('age')}";
echo "<br>";
echo "page : $request->page";