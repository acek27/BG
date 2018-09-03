<?php

class login extends controller {

	function __construct() {
		parent::__construct();
		session::set('bg-title', 'Silahkan login');
		session::set('bg-log', true);

		if (session::get('bg-loggedIn') == true) {
			header('location:' . URL . '/');
		}

		$this->model = $this->model->load('user');
	}

	function index() {
		if (isset($_GET['msg']) || isset($_GET['username']) || isset($_GET['err'])) {
			if (isset($_GET['msg'])) {
				$this->view->pesan = $_GET['msg'];
			} else {
				$this->view->pesan = '';
			}
			if (isset($_GET['username'])) {
				$this->view->username = $_GET['username'];
			} else {
				$this->view->username = '';
			}
			if (isset($_GET['err'])) {
				$this->view->kesalahan = $_GET['err'];
			} else {
				$this->view->kesalahan = '';
			}
		} else {
			$this->view->pesan = '';
			$this->view->username = '';
			$this->view->kesalahan = '';
		}
		$this->view->display('login');
	}

	function submit() {
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			if ($username != '') {
				$cekID = $this->model->cekID($username);
				if ($cekID['cekID'] == true) { // jika username terdaftar
					if ($password != '') {
						$hasil = $this->model->login($username, $password);

						if ($hasil['cek'] == true) { // jika login berhasil
							session::set('bg-username', $username);
							session::set('bg-nama', $hasil['nama']);
							session::set('bg-akses', $hasil['akses']);
							session::set('bg-loggedIn', true);
							header('location:' . URL . '/');
						} else { // jika password salah
							header('location:' . URL . '/login?username=' . $username . '&err=password yang anda masukkan salah');
						}
					} else {
						header('location:' . URL . '/login?username=' . $username . '&err=password tidak boleh kosong');
					}
				} else {
					header('location:' . URL . '/login?username=' . $username . '&err=username \'' . $username . '\' belum terdaftar');
				}
			} else if ($username == '' && $password == '') { // jika username belum terdaftar
				header('location:' . URL . '/login?err=username dan password tidak boleh kosong');
			} else if ($username == '' && $password != '') {
				header('location:' . URL . '/login?err=username tidak boleh kosong');
			}
		} else {
			header('location:' . URL . '/login?msg=silahkan login terlebih dahulu');
		}
	}

	function logout() {
		session::destroy();
		header('location:' . URL);
		exit;
	}

}