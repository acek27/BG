<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__ . '/../part/header.php'); ?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
            <br>
            <br>
            <br>
            <br>

            <div class="center wow fadeInDown">

                <h2>Validasi Pemesanan</h2>
            </div>

            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>ID User</th>
                                <th>ID Pemesanan</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Harga Produk</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->pesan as $value) { ?>
                                <tr>
                                    <td><?php echo $value['id_user'] ?></td>
                                    <td><?php echo $value['id_pemesanan'] ?></td>
                                    <td><?php echo $value['tgl_pesan'] ?></td>
                                    <td><?php echo $value['harga'] ?></td>
                                    <td><?php echo $value['nama_status'] ?></td>
                                    <td>
                                        <?php
                                        if ($value['id_status'] == 1) { ?>
                                            <a href="ManajemenPesan/validasiPermintaan/<?php echo $value['id_pemesanan'] ?>">Validasi
                                                Permintaan</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="center wow fadeInDown">

                <h2>Validasi Pembayaran</h2>
            </div>

            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>ID User</th>
                                <th>ID Pembayaran</th>
                                <th>ID Pemesanan</th>
                                <th>Tanggal Pemesanan</th>
                                <th>ID Produk</th>
                                <th>Harga Produk</th>
                                <th>Tanggal Pembayaran</th>
                                <th>Nominal Pembayaran</th>
                                <th>Status</th>
                                <th>Bukti Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->bayar as $value) { ?>
                                <tr>
                                    <td><?php echo $value['id_user'] ?></td>
                                    <td><?php echo $value['id_pembayaran'] ?></td>
                                    <td><?php echo $value['pesan'] ?></td>
                                    <td><?php echo $value['tgl_pesan'] ?></td>
                                    <td><?php echo $value['produk'] ?></td>
                                    <td><?php echo $value['harga'] ?></td>
                                    <td><?php echo $value['tanggal_pembayaran'] ?></td>
                                    <td><?php echo $value['nominal_pembayaran'] ?></td>
                                    <td><?php echo $value['nama_status'] ?></td>
                                    <td><img style="max-width: 100px;"
                                             src="<?php echo URL . '/public/file/bukti/' . $value['bukti_pembayaran']; ?>"
                                             alt=""></td>

                                    <td>
                                        <?php
                                        if ($value['status'] == 2) { ?>
                                            <a href="ManajemenPesan/validasiPembayaran/<?php echo $value['pesan'] ?>">Validasi
                                                Pembayaran</a>
                                        <?php } else if ($value['status'] == 3) { ?>
                                            <a href="ManajemenPesan/pengiriman/<?php echo $value['pesan'] ?>">Kirim
                                                Barang</a>
                                        <?php } else if ($value['status'] == 4) { ?>
                                            <a class="glyphicon glyphicon-print"
                                               href="ManajemenPesan/kwitansi/<?php echo $value['pesan'] ?>"><br>Cetak
                                                Kwitansi</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
