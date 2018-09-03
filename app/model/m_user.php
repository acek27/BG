<?php

class m_user extends model {

    function __construct() {
        parent::__construct();
    }

    function cekID($username) {
        $rslt = $this->db->selectWhere("SELECT * FROM tb_user u JOIN tb_akses a on u.id_akses = a.id_akses WHERE (id_user = :username OR email = :username) LIMIT 1", array('username' => $username));
        if ($rslt['row'] > 0) {
            foreach ($rslt['data'] as $key => $value) {
                return array('cekID' => true, 'akses' => $value['akses']);
            }
        }
    }

    function cekUsername($username) {
        $stmt = $this->db->prepare("SELECT * FROM tb_user u JOIN tb_akses a on u.id_akses = a.id_akses WHERE id_user = '$username'");
        $stmt->execute();
        $rslt = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return 'benar';
        } else {
            return 'salah';
        }

//        $rslt = $this->db->selectWhere("SELECT * FROM tb_user u JOIN tb_akses a on u.id_akses = a.id_akses WHERE id_user = :username", array('username' => $username));
//        if ($rslt['row'] > 0) {
//            return true;
//        }else{
//            return false;
//        }
    }

    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_user WHERE id_akses <> 1");
    }
    function getUser() {
        return $this->db->selectAll("SELECT * FROM tb_user where id_user != 'admin'");
    }


    function login($username, $password) {
        $rslt = $this->db->selectWhere("SELECT * FROM tb_user u JOIN tb_akses a on u.id_akses = a.id_akses WHERE (id_user = :username OR email = :username) AND password = left(md5(:password),25) LIMIT 1", array('username' => $username, 'password' => $password));

        if ($rslt['row'] > 0) {
            foreach ($rslt['data'] as $key => $value) {
                return array('cek' => true, 'nama' => $value['nama'], 'akses' => $value['akses']);
            }
        }
    }

    function register($username, $nama, $email, $alamat, $password) {
//        return $this->db->insert('tb_user', array($username, $nama, $email, $alamat, left(md5($password), 25), 2));
        $stmt = $this->db->prepare("INSERT INTO tb_user (id_user, nama, email, alamat, password, id_akses) VALUES ('$username', '$nama', '$email', '$alamat', left(md5('$password'), 25), 2)");
        $stmt->execute();
    }

}