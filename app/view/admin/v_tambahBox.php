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
            <h2>Tambah Stock Box</h2>
        </div>
        <div class="row contact-wrap">
            <div class="status alert alert-success" style="display: none"></div>
            <form class="contact-form" method="post" action="<?php echo URL ?>/stock/tambahBox">
                <div class="form-group">
                    <label>Ukuran Box</label>
                    <select class="form-control" name="id_box">
                        <?php foreach ($this->data as $value) { ?>
                            <option value="<?php echo $value ['id_box'] ?>"> <?php echo $value['ukuran_box'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="text" class="form-control" name="jumlah">
                </div>


                <div class="form-group">
                    <button class="btn btn-raised" type="submit" name="submit">Tambah</button>
                </div>
            </form>
        </div><!--/.row-->
    </div><!--/.container-->
</div>
