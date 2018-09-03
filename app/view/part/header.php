<header id="header">

    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo IMG_URL; ?>/logo.png" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="/BG/">Home</a></li>
                    <?php if (session::get('bg-akses') == 'admin') { ?>
<!--                                                <li><a href="--><?php //echo URL; ?><!--/stock"></a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Stock Barang<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo URL; ?>/ambilStok">Ambil Stok</a></li>
                                <li><a href="<?php echo URL; ?>/stock">Box</a></li>
                                <li><a href="<?php echo URL; ?>/stokSpeaker">Speaker</a></li>
                                <li><a href="<?php echo URL; ?>/stokTrafo">Trafo</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo URL; ?>/jenis">Jenis Produk</a></li>
                        <li><a href="<?php echo URL; ?>/ManajemenPesan">Manajemen Pemesanan</a></li>
                        <li><a href="<?php echo URL; ?>/viewUser">User</a></li>
                        <li><a href="<?php echo URL; ?>/login/logout">Logout</a></li>
                    <?php } else { ?>
                        <li><a href="<?php echo URL; ?>/pemesanan">Cara Pemesanan</a></li>
                        <li><a href="<?php echo URL; ?>/katalog">Katalog</a></li>
                        <li><a href="<?php echo URL; ?>/pesan">Pemesanan</a></li>
                        <li><a href="<?php echo URL; ?>/about">Kontak Kami</a></li>
                        <?php if (session::get('bg-loggedIn') == false) { ?>
                            <li><a href="<?php echo URL; ?>/login">Login</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo URL; ?>/login/logout">Logout</a></li>
                        <?php } ?>

                    <?php } ?>

                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->
