<?php

class m_katalog extends model {

    function __construct() {
        parent::__construct();
    }
    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_produk p join tb_box b ON p.id_box = b.id_box
          JOIN tb_speaker s ON s.id_speaker = p.id_speaker JOIN tb_trafo t ON t.id_trafo = p.id_trafo");
    }
    function pesan($id){
        $user = session::get('bg-username');

        $stmt = $this->db->prepare("SELECT * FROM tb_pemesanan");
        $stmt->execute();
        $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rslt as $key => $value) {
            $produk = $value['id_produk'];
        }
        if ($produk != $id){

        $stmt = $this->db->prepare("INSERT INTO tb_pemesanan (id_pemesanan, id_user, id_produk, tgl_pesan, id_status) VALUES (null, '$user', '$id', CURRENT_DATE , '1')");
        $stmt->execute();
        echo "<script>window.alert('Sukses order');window.location.replace('" . URL . "/pesan');</script>";
        }else{
            echo "<script>window.alert('Tidak Boleh Beli Produk yang Sama');window.location.replace('" . URL . "/pesan');</script>";
        }
    }
}