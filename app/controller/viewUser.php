<?php
class viewUser extends controller{
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Daftar User');

		if (session::get('bg-loggedIn') == false) {
			header('location:' . URL . '/login');
		}
        $this->model = $this->model->load('user');
    }
    function index(){
        $this->view->data = $this->model->getUser();
        $this->view->display('viewUser','admin');
    }
}