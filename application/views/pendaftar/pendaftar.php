<section class="content">
  <div class="row">
    <div class="col-md-12">

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Data Pendaftaran</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <a href="<?= base_url('pendaftaran/print') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fas fa-print" title="Cetak"></span> Cetak Laporan
            </button>
          </a>
          <table id="data-tables" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%" style="text-align: center;">No</th>
                <th style="text-align: center;">NIM</th>
                <th style="text-align: center;">Nama Anggota</th>
                <th style="text-align: center;">Jurusan</th>
                <th style="text-align: center;">Alasan Daftar</th>
                <th style="text-align: center;">Tanggal Daftar</th>
                <th style="text-align: center;">Tempat, Tgl Lahir</th>
                <th style="text-align: center;">Status Daftar</th>
                <th style="text-align: center;">Foto</th>
                <th width="12%" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pendaftar as $p) { ?>
                <?php if (($p->nim!='-')&&($p->gambar!='-')): ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $p->nim; ?></td>
                  <td style="text-align: center;"><?php echo $p->nama_mahasiswa; ?></td>
                  <td style="text-align: center;"><?php echo $p->jurusan; ?></td>
                  <td style="text-align: center;"><?php echo $p->alasan_daftar; ?></td>
                  <td style="text-align: center;"><?php echo $p->tgl_daftar; ?></td>
                  <td style="text-align: center;"><?php echo $p->tempat_lahir.', '.$p->tanggal_lahir; ?></td>
                  <td style="text-align: center;"><?php echo $p->status_daftar; ?></td>
                  <td style="text-align: center;">
                      <img src="<?= base_url('image/pendaftar/') . $p->gambar; ?>" height="100px;"></td>
                  <td style="text-align: center;">
                    <div class="btn-group">
                      <a href="<?= base_url('pendaftaran/detail/') . $p->id_pendaftaran; ?>" title="Edit">
                        Detail
                      </a>
                    </div>
                  </td>
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