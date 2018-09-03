<body class="login-page">
<div id="page-login" class="page-logreg">
    <div id="main">
        <div class="container clearfix">
            <div id="title">
                <h3>SIGN UP</h3>
                <p>Temukan Kualitas Sound Terbaik, daftar GRATIS!</p>
            </div>
            <form action="<?php echo URL; ?>/register/submit" method="POST" style="margin-bottom: 50px">
                <?php if ($this->kesalahan != '') { ?>
                    <div class="kesan" style="text-align: center;margin: -5px 0px 15px">
                        <label style="color: #F00; font-weight: normal"><?php echo $this->kesalahan; ?></label>
                    </div>
                <?php } ?>
                <div class="form-group clearfix">
                    <label>Username</label>
                    <?php if ($this->username != '') { ?>
                        <input class="input-area input" name="username" type="text" value="<?php echo $this->username; ?>" placeholder="Masukkan username">
                    <?php } else { ?>
                        <input class="input-area input" name="username" type="text" placeholder="Masukkan username">
                    <?php } ?>
                </div>
                <div class="form-group clearfix">
                    <label>Nama</label>
                    <?php if ($this->nama != '') { ?>
                        <input class="input-area input" name="nama" type="text" value="<?php echo $this->nama; ?>" placeholder="Masukkan nama anda">
                    <?php } else { ?>
                        <input class="input-area input" name="nama" type="text" placeholder="Masukkan nama anda">
                    <?php } ?>
                </div>
                <div class="form-group clearfix">
                    <label>Email</label>
                    <?php if ($this->email != '') { ?>
                        <input class="input-area input" name="email" type="text" value="<?php echo $this->email; ?>" placeholder="Masukkan email anda">
                    <?php } else { ?>
                        <input class="input-area input" name="email" type="text" placeholder="Masukkan email anda">
                    <?php } ?>
                </div>
                <div class="form-group clearfix">
                    <label>Alamat</label>
                    <?php if ($this->alamat != '') { ?>
                        <textarea class="input-area" name="alamat" cols="50" rows="4"><?php echo $this->alamat; ?></textarea>
                    <?php } else { ?>
                        <textarea class="input-area" name="alamat" cols="50" rows="4"></textarea>
                    <?php } ?>
                </div>
                <div class="form-group clearfix">
                    <label>Password</label>
                    <input class="input-area" name="password" type="password" placeholder="Masukkan password anda">
                </div>
                <div class="form-group checkbox clearfix">
                    <input type="checkbox" name="remember" value="remember"/>Biarkan saya tetap masuk
                </div>
                <div class="form-group clearfix">
                    <button class="btn btn-raised" type="submit" name="register">Register</button>
                </div>
                <div class="clearfix">
                    <div class="left">Sudah punya akun? Login <a href="<?php echo URL; ?>/login">disini</a></div>
                </div>
            </form>
        </div>
    </div>
