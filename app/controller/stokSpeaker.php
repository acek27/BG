<?php

class stokSpeaker extends controller
{
    function __construct()
    {
        parent::__construct();
        session::set('bg-title', 'Stok Speaker');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('stock');
    }

    function index()
    {
        $this->view->data = $this->model->showUkuranSpeaker();
        $this->view->display('stokSpeaker', 'admin');
    }
}