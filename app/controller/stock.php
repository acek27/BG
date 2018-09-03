<?php

class stock extends controller
{
    function __construct()
    {
        parent::__construct();
        session::set('bg-title', 'Stok Barang');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('stock');
    }
    

    function index()
    {
        $this->view->data = $this->model->showBox();
        $this->view->display('stockBarang', 'admin');
    }
//khusus kayu
    function box()
    {
        $this->view->data = $this->model->showBox();
        $this->view->display('tambahBox', 'admin');
    }
    function tambahBox()
    {
        if (isset($_POST['submit'])) {
            $id_box= $_POST['id_box'];
            $jumlah = $_POST['jumlah'];
            $this->model->tambahBox($id_box, $jumlah);
            echo "<script>window.alert('Berhasil menambah stok');window.location.replace('" . URL . "/stock');</script>";
        }
    }
    
    //khusus speaker
    function speaker(){
        $this->view->data = $this->model->showukuranSpeaker();
        $this->view->display('tambahSpeaker', 'admin');
    }
    function tambahSpeaker()
    {
        if (isset($_POST['submit'])) {
            $id_speaker = $_POST['id_speaker'];
            $jumlah = $_POST['jumlah'];
            $this->model->tambahSpeaker($id_speaker, $jumlah);
            echo "<script>window.alert('Berhasil menambah stok');window.location.replace('" . URL . "/stokSpeaker');</script>";
        } else {
            header('location:' . URL . '/stokSpeaker');
        }
    }
    
    
    //khusus trafo
    function trafo()
    {
        $this->view->data = $this->model->showukurantrafo();
        $this->view->display('tambahTrafo', 'admin');
    }
    function tambahTrafo()
    {
        if (isset($_POST['submit'])) {
            $id_trafo = $_POST['id_trafo'];
            $jumlah = $_POST['jumlah'];
            $this->model->tambahTrafo($id_trafo, $jumlah);
        } else {
            header('location:' . URL . '/stokTrafo');
        }
    }
}