<?php

class ambilStok extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Ambil Stok');
//
		if (session::get('bg-loggedIn') == false) {
			header('location:' . URL . '/login');
		}
        $this->model = $this->model->load('stock');
    }
    function index(){
        $this->view->trafo = $this->model->showukurantrafo();
        $this->view->box = $this->model->showBox();
        $this->view->speaker = $this->model->showUkuranSpeaker();
        $this->view->display('kurangStok','admin');
    }

    function kurang (){
        $idtrafo =$_POST['id_trafo'];
        $jumlahTrafo =$_POST['jumlahTrafo'];
        $idSpeaker =$_POST['id_speaker'];
        $jumlahSpeaker=$_POST['jumlahSpeaker'];
        $idBox=$_POST['id_box'];
        $jumlahBox=$_POST['jumlahBox'];
        $this->model->kurang($idtrafo, $jumlahTrafo, $idBox, $jumlahBox, $idSpeaker, $jumlahSpeaker);
//        echo "<script>window.alert('Berhasil ambil stok');window.location.replace('" . URL . "/ambilStok');</script>";
    }
}