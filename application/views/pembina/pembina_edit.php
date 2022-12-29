<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Edit Data Pembina</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <?php foreach($pembina as $p) { ?>
            <!-- form start -->
            <form action="<?=base_url('pembina/update');?>" method="post" class="form-horizontal">
              <input type="hidden" name="id_pembina" value="<?= $p->id_pembina; ?>">
              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Lengkap
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $p->nama_pembina?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jabatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jabatan" value="<?= $p->jabatan?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Foto
                  </label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="foto" value="<?= $p->gambar ?>" required>
                    <input type="file" class="form-control" name="foto_new" value="">
                    <font color="red">*Jika Foto tidak dirubah kosongkan saja...!</font>
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