<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__.'/../part/header.php');?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
            <div class="skill-wrap clearfix">
                <div class="toolbar clearfix section">
                    <a class="btn btn-raised left" href="<?php echo URL; ?>/jenis/tambah"><i
                            class="md md-search"></i>Tambah Produk</a>
                </div>
            </div>
            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>Jenis Sound</th>
                                <th>Ukuran Sound</th>
                                <th>Warna</th>
                                <th>Daya</th>
                                <th>Ukuran Trafo</th>
                                <th>Ukuran Speaker</th>
                                <th>Jumlah Speaker</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->data as $key => $value){?>
                            <tr>
                                <td><?php echo $value['jenis_sound'] ?></td>
                                <td><?php echo $value['ukuran_box'] ?></td>
                                <td><?php echo $value['warna'] ?></td>
                                <td><?php echo $value['daya'] ?></td>
                                <td><?php echo $value['ukuran_trafo'] ?></td>
                                <td><?php echo $value['ukuran_speaker'] ?></td>
                                <td><?php echo $value['jumlah_speaker'] ?></td>
                                <td><?php echo $value['kategori'] ?></td>
                                <td><?php echo $value['harga'] ?></td>
                                <td><img style="max-width: 100px;" src="<?php echo URL.'/public/file/'.$value['gambar']; ?>" alt=""></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
