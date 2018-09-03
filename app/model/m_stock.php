<?php

class m_stock extends model
{

    function __construct()
    {
        parent::__construct();
    }

    //khusus box
    function showBox()
    {
        return $this->db->selectAll("SELECT * FROM tb_box");
    }

    function tambahBox($id_box, $jumlah)
    {
        $this->db->update("UPDATE tb_box SET stok_box = stok_box + $jumlah WHERE id_box = $id_box");
    }

    //khusus speaker
    function showukuranSpeaker()
    {
        return $this->db->selectAll("SELECT * FROM tb_speaker");
    }

    function tambahSpeaker($id_speaker, $jumlah)
    {
        $this->db->update("UPDATE tb_speaker SET stok_speaker = stok_speaker + $jumlah WHERE id_speaker = :id_speaker", array('id_speaker' => $id_speaker));
    }

//khusus trafo
    function showukurantrafo()
    {
        return $this->db->selectAll("SELECT * FROM tb_trafo");
    }

    function tambahTrafo($id_trafo, $jumlah)
    {
        $this->db->update("UPDATE tb_trafo SET stok_trafo = stok_trafo + $jumlah WHERE id_trafo = :id_trafo", array('id_trafo' => $id_trafo));
    }

    function kurang($idtrafo, $jumlahTrafo, $idBox, $jumlahBox, $idSpeaker, $jumlahSpeaker)
    {
        $stmt2 = $this->db->prepare("SELECT * FROM tb_trafo");
        $stmt2->execute();
        $rslt2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        $stmt = $this->db->prepare("SELECT * FROM tb_speaker");
        $stmt->execute();
        $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $stmt3 = $this->db->prepare("SELECT * FROM tb_box");
        $stmt3->execute();
        $rslt3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rslt2 as $key => $value) {
            $trafo = $value['stok_trafo'];
        }
        foreach ($rslt as $key => $value) {
            $speaker = $value['stok_speaker'];
        }

        foreach ($rslt3 as $key => $value) {
            $box = $value['stok_box'];
        }


        if (($box < $jumlahBox) || ($speaker < $jumlahSpeaker) || ($trafo < $jumlahTrafo)) {
            echo "<script>window.alert('Stok tidak mencukupi');window.location.replace('" . URL . "/ambilStok');</script>";
        } else {
            $this->db->update("UPDATE tb_trafo, tb_speaker, tb_box SET tb_trafo.stok_trafo = tb_trafo.stok_trafo - $jumlahTrafo, tb_speaker.stok_speaker = tb_speaker.stok_speaker - $jumlahSpeaker, tb_box.stok_box  = tb_box.stok_box - $jumlahBox  WHERE tb_trafo.id_trafo = $idtrafo AND tb_speaker.id_speaker = $idSpeaker AND tb_box.id_box = $idBox");
            echo "<script>window.alert('Berhasil ambil stok');window.location.replace('" . URL . "/ambilStok');</script>";
        }
    }

}