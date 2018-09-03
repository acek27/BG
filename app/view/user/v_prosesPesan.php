<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__ . '/../part/header.php'); ?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>

    <div id="main">
        <div class="container">
            <div class="skill-wrap clearfix">
            </div>
        </div>
        <div class="center" style="margin-top: -75px">
            <h2>Proses Pesan</h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form class="contact-form"  method="post" enctype="multipart/form-data"  action="<?php echo URL; ?>/pesan/submit">

                <div class="form-group">
                    <label>ID Pemesanan</label>
                    <input value="<?php echo $this->data?>" name="id" readonly type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Pembayaran</label>
                    <input id="datepicker" name="tanggal" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nominal Pembayaran</label>
                    <input type="text" name="nominal" class="form-control">
                </div>
                <div class="form-group">
                    <label>Upload Bukti Pembayaran</label>
                </div>
                <div class="form-group">
                    <input required type="file" name="gambar" id="fileToUpload" accept="image/*">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Konfirmasi Pembayaran</button>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</div>

