<?php
/*
 * functions.
 * Author: Notus(hehe_xiao@qq.com), bugber.com
 * Create at: 2017-03-01
 * Update at: 2017-03-02
 */

require 'libs/Controller/testController.class.php';
require 'libs/Model/testModel.class.php';
require 'libs/View/testView.class.php';
require 'config.php';

// simplified controller object creating function
function C($name, $method){
	$controller = $name.'Controller';
	require_once 'libs/Controller/' . $controller . '.class.php';
	$controller = $name.'Controller';
	$ob = new $controller;
	$ob->$method();
}

// simplified model object creating function
function M($name){
	$model = $name.'Model';
	require_once('libs/Model/'.$model.'.class.php');
	return new $model();
}

//simplified view object creating function
function V($name){
	$view = $name.'View';
	require_once('libs/View/'.$view.'.class.php');
	return new $view();
}

function sAddSlashes($str){
	return get_magic_quotes_gpc()? $str : addslashes($str);
}

// combine a integrated url
function url(){
	return "http://" . $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
}

// url of calling controller of specified method
function callUrl($name, $method){
	return url() . "?controller=". $name . "&method=" . $method;
}
