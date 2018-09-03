<?php

class jenis extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Jenis Produk');

        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('jenis');
    }
    function index(){
        $this->view->data = $this->model->getData();
        $this->view->display('jenisProduk','admin');
    }
    function tambah(){
        $this->view->speaker = $this->model->ukuranSpeaker();
        $this->view->trafo = $this->model->ukuranTrafo();
        $this->view->box = $this->model->ukuranBox();
        $this->view->display('tambahProduk','admin');
    }
    
    function submit(){
        if (session::get('bg-akses') == 'admin') {
            if (isset($_POST['submit'])) {
                $jenis = $_POST['jenis'];
                $box = $_POST['id_box'];
                $speaker = $_POST['id_speaker'];
                $trafo = $_POST['id_trafo'];
                $warna = $_POST['warna'];
                $daya = $_POST['daya'];
                $jumlah_speaker = $_POST['jumlah_speaker'];
                $kategori = $_POST['kategori'];
                $harga = $_POST['harga'];
                $temp = $_FILES['gambar']['tmp_name'];
                $file = $_FILES['gambar']['name'];
                $this->model->tambah($jenis, $box, $warna, $trafo, $daya, $speaker, $jumlah_speaker, $kategori, $harga, $temp, $file);
                echo "<script>window.alert('Berhasil menambah stok');window.location.replace('" . URL . "/jenis');</script>";
            } else {
                header('location:' . URL . '/jenis');
            }
        } else {
            echo "<script>window.alert('Maaf, anda tidak memiliki akses ke halaman ini.');window.location.replace('" . URL . "');</script>";
        }
    }

}