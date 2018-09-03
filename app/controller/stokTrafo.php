<?php

class stokTrafo extends controller
{
    function __construct()
    {
        parent::__construct();
        session::set('bg-title', 'Stok Trafo');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('stock');
    }

    function index()
    {
        $this->view->data = $this->model->showukurantrafo();
        $this->view->display('stokTrafo', 'admin');
    }
}