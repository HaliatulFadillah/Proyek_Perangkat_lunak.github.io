<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPS Batako - Merpati Putih</title>
    
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
 
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/css.css">

     <style type="text/css">
          <?php $this->load->view('templates/source/style_ex.css'); ?>
     </style>
</head>

<body style="background-image:url('image/system/bgulm.jpg'); background-size:cover; background-attachment: fixed;">
    <div class="login-box">
        <div class="login-box-body" id="kotak-login">

            <div class="login-logo">
                <img src="<?= base_url('image/system/logofix.png') ?>" alt="" width="40%"><br>
                <b style="font-size: 18px;">Aplikasi Unit Kegiatan Mahasiswa</b> <br>    
                <div href="#" style="font-size: 17px;">PPS Batako Merpati Putih</div>
            </div><!-- /.login-logo -->
                       
            <form action="<?php echo base_url('registrasi/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username . . ." name="username" required="">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password . . ." name="password" required="">
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nama Lengkap . . ." name="nama_lengkap"required="">
                </div> 
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email . . ." name="email"required="">
                </div>
                
                <div class="form-group has-feedback">
                    <input type="file" class="form-control" name="foto" required="">
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <a href="<?php echo base_url('auth/validasi') ?>">
                            <div class="btn btn-block" id="tmb-login">
                            BATAL
                        </div></a>
                    </div><!-- /.col -->
                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-block" id="tmb-login">
                            DAFTAR
                        </button>
                    </div><!-- /.col -->
                </div>
            </form>
                
            <br>

            <?= $this->session->flashdata('message_login_gagal'); ?>
            <?= $this->session->flashdata('message_logout'); ?>
            <?= $this->session->flashdata('message_ganti_password_admin'); ?>
            <?= $this->session->flashdata('message_ganti_password_user'); ?>

            <div align="center">
               
                Copyright &copy; <strong>Proyek Perangkat Lunak</strong>
                
            </div>
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <?php 
        $this->session->unset_userdata('message_login_gagal'); 
        $this->session->unset_userdata('message_logout');    
        $this->session->unset_userdata('message_ganti_password_admin');    
        $this->session->unset_userdata('message_ganti_password_user');    
    ?>
    <!-- jQuery 3 -->
    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
    </script>

</body>

</html>
