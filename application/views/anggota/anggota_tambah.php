<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Tambah Data Anggota</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=base_url('anggota/tambah_aksi');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    NIM
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nim" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tanggal Anggota
                  </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_anggota" value="" required>
                  </div>
                </div>

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
                    Pengalaman Jabatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_jabatan" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pengalaman Panitia
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_panitia" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pengalaman Kegiatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="p_kegiatan" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Prestasi
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="prestasi" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Status Anggota
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="status_anggota" value="" required>
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
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('anggota')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> BATAL</a>
                  <button type="submit" class="btn btn-default btn-flat" title="Simpan Data Pembina"><span class="fa fa-save"></span> SIMPAN</button>
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