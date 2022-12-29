<section class="content">
  <div class="row">
    <div class="col-md-12">

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Data Kegiatan</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">

          <table id="data-tables" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%" style="text-align: center;">No</th>
                <th style="text-align: center;">Tanggal Kegiatan</th>
                <th style="text-align: center;">Deskripsi Kegiatan</th>
                <th style="text-align: center;">Tempat</th>
                <th style="text-align: center;">Hasil</th>
                <th style="text-align: center;">Pembina</th>
                <th style="text-align: center;">Foto</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($kegiatan as $k) { ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $k->tgl_kegiatan; ?></td>
                  <td style="text-align: center;"><?php echo $k->deskripsi_kegiatan; ?></td>
                  <td style="text-align: center;"><?php echo $k->tempat_kegiatan; ?></td>
                  <td style="text-align: center;"><?php echo $k->hasil_kegiatan; ?></td>
                  <?php foreach ($pembina as $key) { ?>
                    <?php if ($k->id_pembina == $key->id_pembina) {
                      $nama_pembina=$key->nama_pembina;
                    } ?>
                  <?php } ?>
                  <td style="text-align: center;"><?php echo $nama_pembina; ?></td>
                  <td style="text-align: center;">
                      <img src="<?= base_url('image/kegiatan/') . $k->gambar; ?>" height="100px;">
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->