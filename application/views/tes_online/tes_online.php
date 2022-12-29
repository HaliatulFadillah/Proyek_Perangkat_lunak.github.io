<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="box" style="overflow-x: scroll;">
            <div class="box-header with-border">
              <h2 class="box-title">Form Tes Online</h2>
              <hr style="margin-bottom: -10px; margin-top: 5px">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <?php foreach($hasil as $h) { ?>
              <?php if ($id_user==$h->id_user): ?>
              <?php if (($h->id_user==$id_user)&&($h->status_tes=='-')) { ?>
                <a href="<?= base_url('tes_online/mulai') ?>" onclick="return confirm('Anda yakin ingin mulai mengerjakan soal tes ...?')" >
                  <button class="btn btn-flat" id="tmb-tambah">
                    Mulai Tes Online
                  </button>
                </a>
              <?php }else{ ?>
                  <button class="btn btn-flat" id="tmb-tambah">
                    Tes Sudah Dilaksanakan
                  </button>
              <?php } ?>
                
              <?php endif ?>
            <?php } ?>
          </div>
        </div>
    </div>
</div>

</section><!-- /.content -->