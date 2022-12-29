<section class="content">
  <div class="row">
    <div class="col-md-12">

      <?= 
        $this->session->flashdata('message_anggota_tambah');
        $this->session->unset_userdata('message_anggota_tambah');  
      ?>
      <?= 
        $this->session->flashdata('message_anggota_edit'); 
        $this->session->unset_userdata('message_anggota_edit');  
      ?>
      <?=   
        $this->session->flashdata('message_anggota_hapus');
        $this->session->unset_userdata('message_anggota_hapus');    
      ?>

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Data Anggota</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <a href="<?= base_url('anggota/tambah') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fa fa-plus"></span> Tambah Data
            </button>
          </a>
          <a href="<?= base_url('anggota/print') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fas fa-print" title="Cetak"></span> Cetak Laporan
            </button>
          </a>
          <table id="data-tables" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%" style="text-align: center;">No</th>
                <th style="text-align: center;">NIM</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Pengalaman Jabatan</th>
                <th style="text-align: center;">Pengalaman Panitia</th>
                <th style="text-align: center;">Pengalaman Kegiatan</th>
                <th style="text-align: center;">Prestasi</th>
                <th style="text-align: center;">Status</th>
                <th style="text-align: center;">Foto</th>
                <th width="12%" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($anggota as $a) { ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $a->nim; ?></td>
                  <td style="text-align: center;"><?php echo $a->nama_anggota; ?></td>
                  <td style="text-align: center;"><?php echo $a->p_jabatan; ?></td>
                  <td style="text-align: center;"><?php echo $a->p_panitia; ?></td>
                  <td style="text-align: center;"><?php echo $a->p_kegiatan; ?></td>
                  <td style="text-align: center;"><?php echo $a->prestasi; ?></td>
                  <td style="text-align: center;"><?php echo $a->status_anggota; ?></td>
                  <td style="text-align: center;">
                      <img src="<?= base_url('image/anggota/') . $a->gambar; ?>" height="100px;"></td>
                  <td style="text-align: center;">
                    <div class="btn-group">
                      <a href="<?= base_url('anggota/edit/') . $a->id_anggota; ?>" title="Edit">
                        Edit
                      </a>
                      |
                      <a href="<?= base_url('anggota/hapus/') . $a->id_anggota; ?>" onclick="return confirm('Anda yakin ingin menghapus data anggota ini ...?')" title="Hapus">
                        Hapus
                      </a>
                    </div>
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