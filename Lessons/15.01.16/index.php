<?php
/**
 * Created by PhpStorm.
 * User: rod
 * Date: 15.01.16
 * Time: 18:40
 */
//PSR1 and PSR2
//function t ($a = null)
//{
//    if (!$a) {
//        $a = fopen('etc/passwd', 'r');
//    }
//}
//localhost:8080/INDEX.PHP?ACTION=SHOW&ID=1

//localhost:8080/show/1
//localhost:8080/about
ini_set('display_errors',1);

//include 'actions.php';
//include_once 'actions.php';
//require 'actions.php';
require_once 'actions.php';

function runAction($name= null)
{
    $name=$name ?: 'index';
    $action = $name. 'Action';
    $args = array_slice(func_get_args(),1);

    if(!function_exists($action)){
        header ('HTTP1.1 404 Not found');
        exit('404 Not found');

    }
    //$action(...$args);
    call_user_func_array($action,$args);
}
$action = isset($_GET['action'])? $_GET['action'] : null;

runAction($action);
runAction('show', 56);


