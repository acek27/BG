<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__.'/../part/header.php'); ?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
            <div class="skill-wrap clearfix">

            </div><!--/.our-skill-->

            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>ID Produk</th>
                                <th>Jenis</th>
                                <th>Ukuran Sound</th>
                                <th>Warna</th>
                                <th>Daya</th>
                                <th>Ukuran Speaker</th>
                                <th>Jumlah Speaker</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->data as $key => $value) { ?>
                                <tr>
                                    <td><img style="max-width: 100px;" src="<?php echo URL.'/public/file/'.$value['gambar']; ?>" alt=""></td>
                                    <td><?php echo $value['id_produk'] ?></td>
                                    <td><?php echo $value['jenis_sound'] ?></td>
                                    <td><?php echo $value['ukuran_box'] ?></td>
                                    <td><?php echo $value['warna'] ?></td>
                                    <td><?php echo $value['daya'] ?></td>
                                    <td><?php echo $value['ukuran_speaker'] ?></td>
                                    <td><?php echo $value['jumlah_speaker'] ?></td>
                                    <td><?php echo $value['kategori'] ?></td>
                                    <td><?php echo $value['harga'] ?></td>
                                    <td><a href="<?php echo URL; ?>/katalog/add/ <?php echo $value ['id_produk'] ?>" name='submit' class="glyphicon glyphicon-shopping-cart"></a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
