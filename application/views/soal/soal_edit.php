<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Edit Data Soal</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <?php foreach($soal as $s) { ?>
            <!-- form start -->
            <form action="<?=base_url('soal/update');?>" method="post" class="form-horizontal">
              <input type="hidden" name="id_soal" value="<?= $s->id_soal; ?>">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Pertanyaan
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pertanyaan" value="<?= $s->pertanyaan; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban A
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_a" value="<?= $s->jawab_a; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban B
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_b" value="<?= $s->jawab_b; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban C
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_c" value="<?= $s->jawab_c; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban D
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jawab_d" value="<?= $s->jawab_d; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Kunci Jawaban
                  </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kunci_jawab" value="<?= $s->kunci_jawab; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Point
                  </label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="point" value="<?= $s->point; ?>" required>
                  </div>
                </div>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <a href="<?=base_url('soal')?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Batal</a>
                  <button type="submit" class="btn btn-default btn-flat" title="Update Data Soal"><span class="fa fa-save"></span> Update</button>
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