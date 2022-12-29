<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Edit Data Anggota</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <?php foreach($anggota as $a) { ?>
            <!-- form start -->
            <form action="<?=base_url('anggota/update');?>" method="post" class="form-horizontal">
              <input type="hidden" name="id_anggota" value="<?= $a->id_anggota; ?>">
              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    NIM
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nim" value="<?= $a->nim; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tanggal Anggota
                  </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_anggota" value="<?= $a->tgl_anggota; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Lengkap
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" value="<?= $a->nama_anggota; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pengalaman Jabatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_jabatan" value="<?= $a->p_jabatan; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pengalaman Panitia
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_panitia" value="<?= $a->p_panitia; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pengalaman Kegiatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_kegiatan" value="<?= $a->p_kegiatan; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Prestasi
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="prestasi" value="<?= $a->prestasi; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Status Anggota
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_anggota" value="<?= $a->status_anggota; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Foto
                  </label>
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="foto" value="<?= $a->gambar ?>" required>
                    <input type="file" class="form-control" name="foto_new" value="">
                    <font color="red">*Jika Foto tidak dirubah kosongkan saja...!</font>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('anggota')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Batal</a>
                  <button type="submit" class="btn btn-default btn-flat" title="Update Data Anggota"><span class="fa fa-save"></span> Update</button>
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