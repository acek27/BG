<?php

class pemesanan extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Pemesanan');
//
//		if (session::get('bg-loggedIn') == false) {
//			header('location:' . URL . '/login');
//		}
    }
    function index(){
        $this->view->display('caraPemesanan','user');
    }
}