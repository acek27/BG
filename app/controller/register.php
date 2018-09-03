<?php

class register extends controller {
    function __construct()
    {
        parent::__construct();
        session::set('bg-title','Daftar di BG - Sound System');
//
//        if (session::get('bg-loggedIn') == false) {
//            header('location:' . URL . '/login');
//        }
        $this->model = $this->model->load('user');
    }
    function index(){
        if (isset($_GET['username']) && isset($_GET['nama']) && isset($_GET['email']) && isset($_GET['alamat']) || isset($_GET['err'])) {
            if (isset($_GET['username'])) {
                $this->view->username = $_GET['username'];
            } else {
                $this->view->username = '';
            }
            if (isset($_GET['nama'])) {
                $this->view->nama = $_GET['nama'];
            } else {
                $this->view->nama = '';
            }
            if (isset($_GET['email'])) {
                $this->view->email = $_GET['email'];
            } else {
                $this->view->email = '';
            }
            if (isset($_GET['alamat'])) {
                $this->view->alamat = $_GET['alamat'];
            } else {
                $this->view->alamat = '';
            }
            if (isset($_GET['err'])) {
                $this->view->kesalahan = $_GET['err'];
            } else {
                $this->view->kesalahan = '';
            }
        } else {
            $this->view->username = '';
            $this->view->nama = '';
            $this->view->email = '';
            $this->view->alamat = '';
            $this->view->kesalahan = '';
        }
        $this->view->display('register');
    }

    function submit() {
        if (isset($_POST['register'])) {
            $username = $_POST['username'];
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];
            $password = $_POST['password'];

            if ($username != '') {
                $cekUsername = $this->model->cekID($username);
                if ($cekUsername['cekID'] != true) {
                    if ($nama != '') {
                        if ($email != '') {
                            $cekEmail = $this->model->cekID($email);
                            if ($cekEmail['cekID'] != true) {
                                if ($alamat != '') {
                                    if ($password != '') {
                                        $this->model->register($username, $nama, $email, $alamat, $password);
                                        echo "<script>window.alert('Selamat, anda sekarang telah terdaftar. Silahkan login menggunakan username dan password anda');window.location.replace('" . URL . "/login');</script>";
                                    } else {
                                        header('location:' . URL . '/register?username=' . $username . '&nama=' . $nama . '&email=' . $email . '&alamat=' . $alamat . '&err=form register tidak boleh kosong!');
                                    }
                                } else {
                                    header('location:' . URL . '/register?username=' . $username . '&nama=' . $nama . '&email=' . $email . '&alamat=' . $alamat . '&err=form register tidak boleh kosong!');
                                }
                            } else {
                                header('location:' . URL . '/register?username=' . $username . '&nama=' . $nama . '&email=' . $email . '&alamat=' . $alamat . '&err=email sudah digunakan');
                            }
                        } else {
                            header('location:' . URL . '/register?username=' . $username . '&nama=' . $nama . '&email=' . $email . '&alamat=' . $alamat . '&err=form register tidak boleh kosong!');
                        }
                    } else {
                        header('location:' . URL . '/register?username=' . $username . '&nama=' . $nama . '&email=' . $email . '&alamat=' . $alamat . '&err=form register tidak boleh kosong!');
                    }
                } else {
                    header('location:' . URL . '/register?username=' . $username . '&nama=' . $nama . '&email=' . $email . '&alamat=' . $alamat . '&err=form register tidak boleh kosong!');
                }
            } else if ($username == '' && $nama != '' && $email != '' && $alamat != '') {
                header('location:' . URL . '/register?username=' . $username . '&nama=' . $nama . '&email=' . $email . '&alamat=' . $alamat . '&err=username tidak boleh kosong');
            } else if ($username == '' && $nama == '' && $email == '' && $alamat == '' && $password == '') {
                header('location:' . URL . '/register?err=form register tidak boleh kosong!');
            }
        } else {
            header('location:' . URL . '/register');
        }
    }

}