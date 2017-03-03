<?php
/*
 * Test Controller.
 * Author: Notus(hehe_xiao@qq.com), bugber.com
 * Create at: 2017-03-01
 * Update at: 2017-03-02
 */


class testController
{
	public function index(){
		echo "<h1>Hello, bugber</h1>";
		return;
	}

	public function show(){
		$mname ='test';
		$m = M($mname);
		$msg = $m->index();

		$vname = 'test';
		$v = V($vname);
		$v->display($msg);
	}
}