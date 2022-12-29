<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Form Pendaftaran</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <?php foreach($pendaftar as $p) { ?>
            <!-- form start -->
            <form action="<?=base_url('daftar/update');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <input type="hidden" name="id_pendaftaran" value="<?= $p->id_pendaftaran; ?>">
              <input type="hidden" name="id_user" value="<?= $p->id_user; ?>">
              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    NIM
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nim" value="<?= $p->nim?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Mahasiswa
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_mahasiswa" value="<?= $p->nama_mahasiswa?>" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tempat Lahir
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat_lahir" value="<?= $p->tempat_lahir?>" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tanggal Lahir
                  </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal_lahir" value="<?= $p->tanggal_lahir?>" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Alamat
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat_mahasiswa" value="<?= $p->alamat_mahasiswa?>" required>
                  </div>
                </div>

                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jenis Kelamin
                  </label>
                  <div class="col-sm-10">
                    <select class="select2 form-control" name="jenis_kelamin" required="">
                      <?php if ($p->jenis_kelamin=='-') { ?>
                        <option selected="selected" disabled="" value="">- Pilih Jenis Kelamin -</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>                        
                      <?php } elseif ($p->jenis_kelamin=='Laki-laki') { ?>
                            <option value="Laki-laki" selected="selected">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        
                      <?php } else { ?>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan" selected="selected">Perempuan</option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Ayah
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ayah" value="<?= $p->nama_ayah?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Ibu
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_ibu" value="<?= $p->nama_ibu?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jurusan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jurusan" value="<?= $p->jurusan?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Alasan Daftar
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alasan_daftar" value="<?= $p->alasan_daftar?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Status Daftar
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_daftar" value="<?= $p->status_daftar?>" required>
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
                  <button type="submit" class="btn btn-default btn-flat" title="Update Data Pendaftaran"><span class="fa fa-save"></span> Update</button>
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