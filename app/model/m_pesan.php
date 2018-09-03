<?php

class m_pesan extends model
{

    function __construct()
    {
        parent::__construct();
    }

    function getData()
    {
        return $this->db->selectAll("SELECT * FROM tb_pemesanan");
    }

    function showOrder()
    {
        $user = session::get('bg-username');
        return $this->db->selectAll("SELECT * FROM tb_pemesanan pm 
            JOIN tb_produk pr on pm.id_produk = pr.id_produk JOIN tb_status st on pm.id_status = st.id_status 
            JOIN tb_user us on us.id_user = pm.id_user where us.id_user = '$user'");
    }

    function deleteOrder($id)
    {
        $this->db->delete("DELETE FROM tb_pemesanan WHERE id_pemesanan= $id");
    }

    function tambah($tanggal, $nominal, $temp, $file, $id)
    {
        $stmt = $this->db->prepare("INSERT INTO tb_pembayaran (id_pembayaran, tanggal_pembayaran, bukti_pembayaran, id_pemesanan, nominal_pembayaran) VALUES (null, '$tanggal', '$file', $id, $nominal)");
        $stmt->execute();
        move_uploaded_file($temp, 'public/file/bukti/' . basename($file));
    }

    //manajemen pemesanan
    function viewValidasi()
    {
        return $this->db->selectAll("SELECT * FROM tb_pemesanan pm JOIN tb_produk p ON p.id_produk = pm.id_produk
          JOIN tb_status s ON s.id_status = pm.id_status
          WHERE pm.id_status = 1");
    }

    function viewKonfirmasi()
    {
        return $this->db->selectAll("SELECT id_user, id_pembayaran, pm.id_pemesanan as pesan, tgl_pesan, pm.id_produk as produk, harga, tanggal_pembayaran,
        nominal_pembayaran, nama_status, bukti_pembayaran, pm.id_status as status FROM tb_pemesanan pm JOIN tb_produk p ON p.id_produk = pm.id_produk
          JOIN tb_status s ON s.id_status = pm.id_status JOIN tb_pembayaran pb ON pm.id_pemesanan = pb.id_pemesanan
          WHERE pm.id_status > 1");
    }

    function validasiPermintaan($id)
    {
        $this->db->update("UPDATE tb_pemesanan SET id_status = 2 WHERE id_pemesanan = $id");
    }

    function validasiPembayaran($id)
    {
        $this->db->update("UPDATE tb_pemesanan SET id_status = 3 WHERE id_pemesanan = $id");
    }

    function pengiriman($id)
    {
        $this->db->update("UPDATE tb_pemesanan SET id_status = 4 WHERE id_pemesanan = $id");
    }

    function kwitansi($id)
    {
        $statement = $this->db->prepare("select * from tb_pemesanan pm join tb_user us on pm.id_user = us.id_user join tb_produk
 tb on pm. id_produk = tb.id_produk where id_pemesanan = $id");
        $statement->execute();
        return $statement->fetchAll();
    }

}