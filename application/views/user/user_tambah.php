<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Tambah Data User</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=base_url('user/tambah_aksi');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Lengkap
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Username
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Password
                  </label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Email
                  </label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Foto
                  </label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="foto" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Level User
                  </label>
                  <div class="col-sm-10">
                    <select class="select2 form-control" name="level" required="">
                        <option selected="selected" disabled="" value="">- Pilih Level User -</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('user')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> BATAL</a>
                  <button type="submit" class="btn btn-default btn-flat" title="Simpan Data User"><span class="fa fa-save"></span> SIMPAN</button>
                </div>
              </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
              </div> 
              <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>

</section><!-- /.content -->