<section class="content">
  <div class="row">
    <div class="col-md-12">

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Data Hasil Tes</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">
        <a href="<?= base_url('hasil_tes/print') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fas fa-print" title="Cetak"></span> Cetak Laporan
            </button>
          </a>
          <table id="data-tables" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%" style="text-align: center;">No</th>
                <th style="text-align: center;">NIM</th>
                <th style="text-align: center;">Nama Mahasiswa</th>
                <th style="text-align: center;">Jawab Benar</th>
                <th style="text-align: center;">Jawab Salah</th>
                <th style="text-align: center;">Point</th>
                <th style="text-align: center;">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($hasil as $h) { ?>
                <?php if ($h->status_tes!='-'): ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $no++; ?></td>
  <?php 
    foreach ($pendaftar as $key) {
      if ($h->id_user==$key->id_user) {
        $nama_mahasiswa = $key->nama_mahasiswa;
        $nim_mahasiswa  = $key->nim;
      }
    }
  ?>
                    <td style="text-align: center;"><?php echo $nim_mahasiswa; ?></td>
                    <td style="text-align: center;"><?php echo $nama_mahasiswa; ?></td>
                    <td style="text-align: center;"><?php echo $h->jawab_benar; ?></td>
                    <td style="text-align: center;"><?php echo $h->jawab_salah; ?></td>
                    <td style="text-align: center;"><?php echo $h->point_hasil; ?></td>
                    <td style="text-align: center;"><?php echo $h->status_tes; ?></td>
                  </tr>
                  
                <?php endif ?>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->