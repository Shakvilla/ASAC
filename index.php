<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));




require_once(ROOT . DS . 'config' . DS . 'config.php');  //requires config file
require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'helpers' . DS . 'functions.php');  // loads helpeer function files

//autoload classes

function autoload($className){

  if(file_exists(ROOT . DS . 'core' . DS . $className . '.php' )){
    require_once(ROOT . DS . 'core' . DS . $className . '.php');
  } elseif(file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php' )){
    require_once(ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.php');

  }elseif(file_exists(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php' )){
    require_once(ROOT . DS . 'app' . DS . 'models' . DS . $className . '.php');

  }

}


spl_autoload_register('autoload');
session_start();

$link = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : [];



Router::route($link);
