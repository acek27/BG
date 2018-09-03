<?php

class m_jenis extends model {

    function __construct() {
        parent::__construct();
    }

    function tambah($jenis, $box, $warna, $trafo, $daya, $speaker, $jumlah_speaker, $kategori, $harga, $temp, $file) {
        $stmt = $this->db->prepare("INSERT INTO tb_produk (id_produk, jenis_sound, warna, daya, jumlah_speaker, kategori, harga, gambar,  id_speaker, id_trafo, id_box) VALUES (null, '$jenis', '$warna', '$daya', '$jumlah_speaker', '$kategori', '$harga', '$file', '$speaker', '$trafo', '$box')");
        $stmt->execute();
        move_uploaded_file($temp, 'public/file/'. basename($file));
    }


    function getData() {
        return $this->db->selectAll("SELECT * FROM tb_produk p join tb_box b ON p.id_box = b.id_box
          JOIN tb_speaker s ON s.id_speaker = p.id_speaker JOIN tb_trafo t ON t.id_trafo = p.id_trafo");
    }
    function ukuranSpeaker()
    {
        return $this->db->selectAll("SELECT * FROM tb_speaker");
    }
    function ukuranTrafo()
    {
        return $this->db->selectAll("SELECT * FROM tb_trafo");
    }
    function ukuranBox()
    {
        return $this->db->selectAll("SELECT * FROM tb_box");
    }

}