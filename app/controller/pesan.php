<?php

class pesan extends controller
{
    function __construct()
    {
        parent::__construct();
        session::set('bg-title', 'Pemesanan');
//
        if (session::get('bg-loggedIn') == false) {
            header('location:' . URL . '/login');
        }
        $this->model = $this->model->load('pesan');
    }

    function index()
    {
        $this->view->data = $this->model->showOrder();
        $this->view->display('pesan', 'user');
    }

    function proses($id)
    {
        $this->view->data = $id;
        $this->view->display('prosesPesan', 'user');
    }

    function submit()
    {
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $tanggal = $_POST['tanggal'];
            $nominal = $_POST['nominal'];
            $temp = $_FILES['gambar']['tmp_name'];
            $file = $_FILES['gambar']['name'];
            $this->model->tambah($tanggal, $nominal, $temp, $file,$id);
            echo "<script>window.alert('Berhasil');window.location.replace('" . URL . "/pesan');</script>";
        } else {
            header('location:' . URL . '/pesan');
        }
    }

    function deleteOrder($id)
    {
        $this->model->deleteOrder($id);
        echo "<script>window.alert('Pesanan berhasil dibatalkan');window.location.replace('" . URL . "/pesan');</script>";
    }
}