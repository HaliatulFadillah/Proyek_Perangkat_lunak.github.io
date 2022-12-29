<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Edit Data Kegiatan</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <?php foreach($kegiatan as $k) { ?>
            <!-- form start -->
            <form action="<?=base_url('kegiatan/update');?>" method="post" class="form-horizontal">
              <input type="hidden" name="id_kegiatan" value="<?= $k->id_kegiatan; ?>">
              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tanggal Kegiatan
                  </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_kegiatan" value="<?= $k->tgl_kegiatan; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pembina
                  </label>
                  <div class="col-sm-10">
                    <select class="select2 form-control" name="id_pembina" required="">
                        <option selected="selected" disabled="" value="">- Pilih Pembina -</option>
                        <?php foreach ($pembina as $p) { ?>
                            <option value="<?= $p->id_pembina ?>"><?= $p->nama_pembina; ?></option>
                        <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Deskripsi Kegiatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="deskripsi_kegiatan" value="<?= $k->deskripsi_kegiatan; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tempat Kegiatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_kegiatan" value="<?= $k->tempat_kegiatan; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Hasil Kegiatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="hasil_kegiatan" value="<?= $k->hasil_kegiatan; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Foto
                  </label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="foto" value="<?= $k->gambar ?>" required>
                    <input type="file" class="form-control" name="foto_new" value="">
                    <font color="red">*Jika Foto tidak dirubah kosongkan saja...!</font>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('kegiatan')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Batal</a>
                  <button type="submit" class="btn btn-default btn-flat" title="Update Data Kegiatan"><span class="fa fa-save"></span> Update</button>
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