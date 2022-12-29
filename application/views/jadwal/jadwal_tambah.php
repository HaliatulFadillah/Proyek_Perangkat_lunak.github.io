<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Tambah Jadwal Tes</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=base_url('jadwal/tambah_aksi');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                
              <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Nama Kegiatan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tanggal Mulai
                  </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_mulai" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tanggal Selesai
                  </label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tgl_selesai" value="" required>
                  </div>
                </div>
                

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Tempat
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempat" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Narahubung
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="narahubung" value="" required>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('jadwal')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> BATAL</a>
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