<section class="content">
  <div class="row">
    <div class="col-md-12">

      <?= 
        $this->session->flashdata('message_jadwal_tambah');
        $this->session->unset_userdata('message_jadwal_tambah');  
      ?>
      <?= 
        $this->session->flashdata('message_jadwal_edit'); 
        $this->session->unset_userdata('message_jadwal_edit');  
      ?>
      <?=   
        $this->session->flashdata('message_jadwal_hapus');
        $this->session->unset_userdata('message_jadwal_hapus');    
      ?>

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Jadwal Tes</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <a href="<?= base_url('jadwal/tambah') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fa fa-plus"></span> Tambah Data
            </button>
          </a>
          <table id="data-tables" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%" style="text-align: center;">No</th>
                <th style="text-align: center;">Nama Kegiatan</th>
                <th style="text-align: center;">Tanggal Mulai</th>
                <th style="text-align: center;">Tanggal Selesai</th>
                <th style="text-align: center;">Tempat</th>
                <th style="text-align: center;">Narahubung</th>
                <th width="12%" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($jadwal as $j) { ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $j->nama; ?></td>
                  <td style="text-align: center;"><?php echo $j->tgl_mulai; ?></td>
                  <td style="text-align: center;"><?php echo $j->tgl_selesai; ?></td>
                  <td style="text-align: center;"><?php echo $j->tempat; ?></td>
                  <td style="text-align: center;"><?php echo $j->narahubung; ?></td>
                  <td style="text-align: center;">
                    <div class="btn-group">
                      <a href="<?= base_url('jadwal/edit/') . $j->id_jadwal; ?>" title="Edit">
                        Edit
                      </a>
                      |
                      <a href="<?= base_url('jadwal/hapus/') . $j->id_jadwal;; ?>" onclick="return confirm('Anda yakin ingin menghapus data jadwal ini ...?')" title="Hapus">
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