<?php

class ManajemenPesan extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Pemesanan');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }

        $this->model = $this->model->load('pesan');
    }
    function index(){
        $this->view->pesan = $this->model->viewValidasi();
        $this->view->bayar = $this->model->viewKonfirmasi();
        $this->view->display('manajemenPesan','admin');
    }
    function validasiPermintaan($id){
        $this->model->validasiPermintaan($id);
        echo "<script>window.alert('berhasil');window.location.replace('" . URL . "/ManajemenPesan');</script>";
    }
    function validasiPembayaran($id){
        $this->model->validasiPembayaran($id);
        echo "<script>window.alert('berhasil');window.location.replace('" . URL . "/ManajemenPesan');</script>";
    }
    function pengiriman($id){
        $this->model->pengiriman($id);
        echo "<script>window.alert('berhasil');window.location.replace('" . URL . "/ManajemenPesan');</script>";
    }
    
    function kwitansi ($id){
        $data = $this->model->kwitansi($id);
        include 'app/view/admin/kwitansi.php';
    }
    
}