<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Tambah Data Soal</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=base_url('soal/tambah_aksi');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="box-body">
                
                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pertanyaan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pertanyaan" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban A
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_a" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban B
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_b" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban C
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_c" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban D
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_d" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Kunci Jawaban
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kunci_jawab" value="" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Point
                  </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="point" value="" required>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('soal')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> BATAL</a>
                  <button type="submit" class="btn btn-default btn-flat" title="Simpan Data Soal"><span class="fa fa-save"></span> SIMPAN</button>
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