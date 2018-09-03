<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__ . '/../part/header.php'); ?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
            <div class="skill-wrap clearfix" style="margin-top: 1px">

            </div><!--/.our-skill-->
            <div class="center wow fadeInDown">
                <p class="lead"><i class="md md-people"></i>Status Pemesanan
                    - <?php echo strtoupper(session::get('bg-nama')) ?></p>
            </div>
            <!--            <div class="toolbar clearfix section" style="margin-bottom: 10px">-->
            <!--                <a class="btn btn-raised left" href="--><?php //echo URL; ?><!--/pesan/proses"><i-->
            <!--                    class="md md-search"></i>Pesan Disini</a>-->
            <!--            </div>-->
            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>Nama User</th>
                                <th>Tanggal Pemesanan</th>
                                <th>Jenis Sound System</th>
                                <th>Kategori</th>
                                <th>Warna</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->data as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value['id_user'] ?></td>
                                    <td><?php echo $value['tgl_pesan'] ?></td>
                                    <td><?php echo $value['jenis_sound'] ?></td>
                                    <td><?php echo $value['kategori'] ?></td>
                                    <td><?php echo $value['warna'] ?></td>
                                    <td><?php echo $value['nama_status'] ?></td>
                                    <td>
                                        <?php
                                        if ($value['id_status'] == 1) { ?>
                                            <a href="pesan/deleteOrder/<?php echo $value['id_pemesanan'] ?>">Batal</a>
                                        <?php } else if ($value['id_status'] == 2) { ?>
                                            <a href="pesan/proses/<?php echo $value['id_pemesanan'] ?>">Pembayaran</a>
                                        <?php } else { ?>
                                            <p> -- </p>
                                            <?php
                                        }
                                        ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php if ($value['id_status'] == 2) { ?>
            <br>
            <div style="margin-left: 100px">
            <p>Notice :</p>
            <p>Untuk melakukan pembayaran, silakan transfer ke No. Rekening BRI berikut :</p>
            <p>Atas Nama : BG Elektronik</p>
            <p>No. Rekening : 132410101085</p>
            </div>
        <?php } ?>
        </div>
    </div>
