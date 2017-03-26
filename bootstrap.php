<?php

$configuration = array(
  'db_dsn'  => 'mysql:host=localhost;dbname=Services_Dependency_Injection_AND_Containers',
  'db_user' => 'root',
  'db_pass' => 'mysql',
);


spl_autoload_register(function($className){
  $path = __DIR__.'/lib/'.str_replace('\\', '/', $className).'.php';
  
  if(file_exists($path)){
    require $path;
  }
});