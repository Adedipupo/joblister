<?php
  
  require_once 'config.php';

 function __autoload($class_name){
    require_once 'libs/'.$class_name. '.php';
 }


?>