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
            <h2>Ambil Stok Barang</h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form class="contact-form"  method="post" action="<?php echo URL ?>/ambilStok/kurang">
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
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlahTrafo">
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
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlahSpeaker">
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
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlahBox">
                </div>

                <div class="form-group">
                    <button class="btn btn-raised" type="submit" name="submit">Ambil</button>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</div>
