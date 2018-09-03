<?php

class home extends controller {
	function __construct()
	{
		parent::__construct();
		session::set('bg-title','Selamat Datang di BG - Sound System');
//
//		if (session::get('bg-loggedIn') == false) {
//			header('location:' . URL . '/login');
//		}
	}
	function index(){
		$this->view->display('home');
	}
}