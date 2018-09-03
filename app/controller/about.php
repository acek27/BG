<?php

class about extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Kontak Kami');
//
//        if (session::get('bg-loggedIn') == false) {
//            header('location:' . URL . '/login');
//        }
    }
    function index(){
        $this->view->display('about','user');
    }
}