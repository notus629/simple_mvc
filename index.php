<?php
/*
 * Everyday program, 001.
 * MVC framework test.
 * Author: Notus(hehe_xiao@qq.com), bugber.com
 * Create at: 2017-03-01
 * Update at: 2017-03-03
 */

require_once('./function.php');

// $control = new testController();

// $control->show();

//http://localhost/index.php?controller=test&method=show

$whiteAddr = ['test@index', 'index@index', 'test@show'];

// controller
$controller = isset($_GET['controller'])? sAddSlashes($_GET['controller']) : 'index';

// model 
$method = isset($_GET['method'])? sAddSlashes($_GET['method']) : 'index';

if( !in_array($controller."@".$method, $whiteAddr) ){
	$controller = 'index';
	$method = 'index';
}
//echo callUrl($controller, $method);
//echo "<br />";
C($controller, $method);
