<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Jawablah soal dibawah ini :</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?=base_url('tes_online/kirim_jawaban');?>" method="post" class="form-horizontal">
              <div class="box-body">

            <?php $no = 1;foreach($soal as $s) { ?>
                <div class="form-group">
                  <label class="col-sm-12 control-label" style="text-align: left;">
                    <?= $no++.') '.$s->pertanyaan; ?> ( Point <?= $s->point; ?> )
                  </label>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban A
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                      <input type="radio" name="jawab_<?= $s->id_soal; ?>" value='A'><?= $s->jawab_a; ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban B
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                      <input type="radio" name="jawab_<?= $s->id_soal; ?>" value='B'><?= $s->jawab_b; ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban C
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                      <input type="radio" name="jawab_<?= $s->id_soal; ?>" value='C'><?= $s->jawab_c; ?>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label" style="text-align: left;">
                    Jawaban D
                  </label>
                  <div class="col-sm-10">
                    <div class="form-control">
                      <input type="radio" name="jawab_<?= $s->id_soal; ?>" value='C'><?= $s->jawab_c; ?>
                    </div>
                  </div>
                </div>

                <?php } ?>

                <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10" style="text-align: right;">
                  <button type="submit" class="btn btn-default btn-flat" title="Kirim Jawaban"><span class="fa fa-save"></span> Kirim Jawaban</button>
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