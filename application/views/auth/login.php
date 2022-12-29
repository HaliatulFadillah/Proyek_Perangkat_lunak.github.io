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

<body style="background-image:url(<?= base_url('image/system/bgulm.jpg') ?>); background-size:cover; background-attachment: fixed;">
    <div class="login-box">
        <div class="login-box-body" id="kotak-login">

            <div class="login-logo">
                <img src="<?= base_url('image/system/logofix.png') ?>" alt="" width="40%"><br>
                <b style="font-size: 18px;">Aplikasi Unit Kegiatan Mahasiswa</b> <br>    
                <div href="#" style="font-size: 17px;">PPS Batako Merpati Putih</div>
            </div><!-- /.login-logo -->
           
            <table style="width: 100%;">
            <form action="<?php echo base_url('auth') ?>" method="post">
                <div class="form-group has-feedback">
                    <tr>
                        <td id="pd-login">Username</td>
                        <td id="pd-login"></td>
                        <td id="pd-login">
                            <input type="text" class="form-control" placeholder="Username" name="username" required="">
                        </td>
                    </tr>
                </div>
                <div class="form-group has-feedback">
                    <tr>
                        <td id="pd-login">Password</td>
                        <td id="pd-login"></td>
                        <td id="pd-login">
                            <input type="password" class="form-control" placeholder="Password" name="password" required="">
                        </td>
                    </tr>
                </div>
                <div class="row">
                    <tr>
                        <td colspan="3" id="pd-login">
                            <div>
                                <button type="submit" class="btn btn-block" id="tmb-login">
                                    LOGIN
                                </button>
                            </div><!-- /.col -->
                        </td>
                    </tr>
                </div>
            </form>
                <div class="row">
                    <tr>
                        <td colspan="3" id="pd-login">
                            <div>
                                <a href="<?php echo base_url('registrasi') ?>">
                                <button type="submit" class="btn btn-block">
                                    <b>Daftar </b>
                                </button></a>
                            </div><!-- /.col -->
                        </td>
                    </tr>
                </div>

            </table>
            <br>

            <?= $this->session->flashdata('message_login_gagal'); ?>
            <?= $this->session->flashdata('message_logout'); ?>
            <?= $this->session->flashdata('message_ganti_password_admin'); ?>
            <?= $this->session->flashdata('message_ganti_password_user'); ?>
            <?= $this->session->flashdata('message_peserta_tambah'); ?>

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
        $this->session->unset_userdata('message_peserta_tambah');  
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
