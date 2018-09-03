<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__.'/../part/header.php');?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>

    <div id="main">
        <div class="container">
            <div class="skill-wrap clearfix">
            </div>
        </div>
        <div class="center" style="margin-top: -75px">
            <h2>Tambah Produk</h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form class="contact-form" method="post" enctype="multipart/form-data" action="<?php echo URL; ?>/jenis/submit">
                <div class="form-group">
                    <label>Jenis Sound</label>
                    <select class="form-control" name="jenis">
                        <option value="aktif">Aktif</option>
                        <option value="pasif">Pasif</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ukuran Box</label>
                    <select class="form-control" name="id_box">
                        <?php foreach ($this->box as $value) { ?>
                            <option value="<?php echo $value ['id_box'] ?>"> <?php echo $value['ukuran_box'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Warna</label>
                    <input type="text" name="warna" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Daya</label>
                    <input type="text" name="daya" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Ukuran Trafo</label>
                    <select class="form-control" name="id_trafo">
                        <?php foreach ($this->trafo as $value) { ?>
                            <option
                                value="<?php echo $value ['id_trafo'] ?>"> <?php echo $value['ukuran_trafo'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Ukuran Speaker</label>
                    <select class="form-control" name="id_speaker">
                        <?php foreach ($this->speaker as $value) { ?>
                            <option value="<?php echo $value ['id_speaker'] ?>"> <?php echo $value['ukuran_speaker'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah Speaker</label>
                    <input type="text" name="jumlah_speaker" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori">
                        <option value="single">Single</option>
                        <option value="double">Double</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                </div>
                <div class="form-group">
                    <label>Upload Gambar</label>
                </div>
                <div class="form-group">
                <input required type="file" name="gambar" id="fileToUpload" accept="image/*">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Tambah</button>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</div>
