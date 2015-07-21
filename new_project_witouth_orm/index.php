<?php 
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1); 
require 'vendor/autoload.php'; 
Twig_Autoloader::register();  
$app = new \Slim\Slim();  
//BASE URL
define('BASE_URL', 'http://localhost:8080/new_project/');  //Sobreescribir por la ruta de su proyecto.
$app->get('/', function() { 
 	$loader = new Twig_Loader_Filesystem('templates');  
  	$twig = new Twig_Environment($loader, array(  
    //'cache' => 'cache',  
  	));  
    $data['BASE_URL'] = constant('BASE_URL');
    echo $twig->render('home.html',$data);  
});



$app->run();  