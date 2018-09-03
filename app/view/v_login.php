<body class="login-page">
<div id="page-login" class="page-logreg">
<!--    --><?php //require_once 'part/header.php';?>
    <div id="main">
        <div class="container clearfix">
            <div id="title">
                <h3>SIGN IN</h3>
                <p style="color: white;">Dapatkan Kualitas Terbaik Sound System <i>BG - Elektronik</i></p>
            </div>
            <form action="<?php echo URL; ?>/login/submit" method="POST" tyle="margin-bottom: 50px">
                <?php if ($this->kesalahan != '') { ?>
                    <div class="kesan" style="text-align: center;margin: -5px 0px 15px">
                        <label style="color: #F00; font-weight: normal"><?php echo $this->kesalahan; ?></label>
                    </div>
                <?php } else if ($this->pesan != '') { ?>
                    <div class="kesan" style="text-align: center;margin: -5px 0px 15px">
                        <label style="color: #36BEEA; font-weight: normal"><?php echo $this->pesan; ?></label>
                    </div>
                <?php } ?>
                <div class="form-group clearfix">
                    <label>Username atau Email</label>
                    <?php if ($this->username != '') { ?>
                        <input class="input-area input" name="username" type="text" value="<?php echo $this->username; ?>" placeholder="Masukkan username atau email anda">
                    <?php } else { ?>
                        <input class="input-area input" name="username" type="text" placeholder="Masukkan username atau email anda">
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
                    <button class="btn btn-raised" type="submit" name="login">Masuk</button>
                </div>
                <div class="clearfix">
                    <div class="left">Belum punya akun? Daftar <a href="<?php echo URL; ?>/register">disini</a></div>
                    <div class="right"><a href="">Lupa Password?</a></div>
                </div>
            </form>
        </div>
    </div>
