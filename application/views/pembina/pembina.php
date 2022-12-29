<section class="content">
  <div class="row">
    <div class="col-md-12">

      <?= 
        $this->session->flashdata('message_pembina_tambah');
        $this->session->unset_userdata('message_pembina_tambah');  
      ?>
      <?= 
        $this->session->flashdata('message_pembina_edit'); 
        $this->session->unset_userdata('message_pembina_edit');  
      ?>
      <?=   
        $this->session->flashdata('message_pembina_hapus');
        $this->session->unset_userdata('message_pembina_hapus');    
      ?>

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Data Pembina</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <a href="<?= base_url('pembina/tambah') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fa fa-plus"></span> Tambah Data
            </button>
          </a>
<!--           <a href="<?= base_url('user/print') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fas fa-print" title="Cetak"></span> Cetak Laporan
            </button>
          </a> -->
          <table id="data-tables" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%" style="text-align: center;">No</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Jabatan</th>
                <th style="text-align: center;">Foto</th>
                <th width="12%" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($pembina as $p) { ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $p->nama_pembina; ?></td>
                  <td style="text-align: center;"><?php echo $p->jabatan; ?></td>
                  <td style="text-align: center;">
                      <img src="<?= base_url('image/pembina/') . $p->gambar; ?>" height="100px;"></td>
                  <td style="text-align: center;">
                    <div class="btn-group">
                      <a href="<?= base_url('pembina/edit/') . $p->id_pembina; ?>" title="Edit">
                        Edit
                      </a>
                      |
                      <a href="<?= base_url('pembina/hapus/') . $p->id_pembina; ?>" onclick="return confirm('Anda yakin ingin menghapus data pembina ini ...?')" title="Hapus">
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