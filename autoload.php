<?php
function my_autoload($class){
    $class_path = "$class.php";
    echo $class_path."<br>";
    if (file_exists($class_path) && is_readable($class_path)){
        require_once $class_path;
    }else{
        echo "class not found";
//        header("Location : /404.php");
    }
}

spl_autoload_register('my_autoload');