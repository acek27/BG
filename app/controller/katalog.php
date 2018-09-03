<?php

class katalog extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Jenis Produk');
        $this->model = $this->model->load('katalog');
    }
    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('katalog','user');
    }
    function add ($id){
//        echo $id;
        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model->pesan($id);
    }
}