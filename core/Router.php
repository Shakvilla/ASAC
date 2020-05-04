<?php



class Router{


public static function route($link){


//controller
$controller = (isset($link[0]) && $link[0] != '')? ucwords($link[0]) : DEFAULT_CONTROLLER;

$controller_name = $controller;
array_shift($link);

//action

$action = (isset($link[0]) && $link[0] != '')?  $link[0] . 'Action': 'indexAction';
$action_name = $controller;
array_shift($link);

//params

$queryParams = $link;

$dispatch = new $controller($controller_name, $action);
if(method_exists($controller, $action)){

  call_user_func_array([$dispatch, $action], $queryParams);
} else{

  die('That Method does not exists in the controller \"' . $controller_name . '\"');
}

   }

   public static function redirect($location){
     if(!headers_sent()){
       header('Location: '.SROOT.$location);
       exit();
     } else{
       echo '<script type="text/javascript">';
       echo 'window.location.href="'.SROOT.$location.'";';
       echo '</script>';
       echo '<noscript>';
       echo '<meta http-equiv="refresh" content="0;url='.$location.'" />';
       echo '</noscript>';exit;
     }
   }

}
