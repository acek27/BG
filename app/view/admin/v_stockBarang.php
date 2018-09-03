<!--<body class="login-page" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">-->
<?php require_once(__DIR__ . '/../part/header.php'); ?>
<div id="page-login" class="page-logreg">
    <!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
            <div class="skill-wrap clearfix">
                <div class="toolbar clearfix section">
                    <a class="btn btn-raised left" href="<?php echo URL; ?>/stock/box"><i
                            class="md md-search"></i>Tambah Stock Box</a>
                </div>
            </div>
            <div class="card clearfix section">
                <div class="card-body">
                    <div class="desktop">
                        <table>
                            <thead>
                            <tr>
                                <th>ID Box</th>
                                <th>Ukuran Box</th>
                                <th>Stok Box</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($this->data as $value) { ?>
                                <tr>
                                    <td><?php echo $value['id_box'] ?></td>
                                    <td><?php echo $value['ukuran_box'] ?></td>
                                    <td><?php echo $value['stok_box'] ?></td>

                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
