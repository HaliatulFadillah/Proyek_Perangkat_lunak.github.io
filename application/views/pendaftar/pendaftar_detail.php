<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Detail Data Pendaftar</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <?php foreach($pendaftar as $p) { ?>
            <!-- form start -->
            <form action="" method="post" class="form-horizontal">
              <div class="box-body">

                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    NIM
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->nim ?>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->nama_mahasiswa ?>
                    </div>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tempat, Tanggal Lahir
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->tempat_lahir ?>, <?= $p->tanggal_lahir ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Alamat
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->alamat_mahasiswa ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jenis Kelamin
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->jenis_kelamin ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Ayah
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->nama_ayah ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Ibu
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->nama_ibu ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jurusan
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->jurusan ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Alasan Daftar
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->alasan_daftar ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Status Daftar
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->status_daftar ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tanggal Daftar
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                        <?= $p->tgl_daftar ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Foto
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control" style="height: 100px;">
                        <img src="<?= base_url('image/pendaftar/') . $p->gambar; ?>" height="100%;">
                    </div>
                  </div>
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