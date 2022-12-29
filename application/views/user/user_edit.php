<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Edit Data User</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <?php foreach($user as $u) { ?>
            <!-- form start -->
            <form action="<?=base_url('user/update');?>" method="post" class="form-horizontal">
              <input type="hidden" name="id_user" value="<?= $u->id_user; ?>">
              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Lengkap
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $u->nama?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Username
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" value="<?= $u->username?>" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Password
                  </label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" value="<?= $u->password ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Email
                  </label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?= $u->email ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Foto
                  </label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="foto" value="<?= $u->foto ?>" required>
                    <input type="file" class="form-control" name="foto_new" value="">
                    <font color="red">*Jika Foto tidak dirubah kosongkan saja...!</font>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Level User
                  </label>
                  <div class="col-sm-10">
                    <select class="select2 form-control" name="level" required="">
                      <?php if ($u->level=='Admin') { ?>
                        <option value="Admin" selected="selected">Admin</option>
                        <option value="User">User</option>                        
                      <?php } else { ?>
                        <option value="Admin">Admin</option>
                        <option value="User" selected="selected">User</option>  
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('user')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Batal</a>
                  <button type="submit" class="btn btn-default btn-flat" title="Update Data User"><span class="fa fa-save"></span> Update</button>
                </div>
              </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
              </div> 
              <!-- /.box-footer -->
            </form>
            <?php } ?>
        </div>
    </div>
</div>

</section><!-- /.content -->