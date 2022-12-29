<section class="content">
  <div class="row">
    <div class="col-md-12">

      <?= 
        $this->session->flashdata('message_user_tambah');
        $this->session->unset_userdata('message_user_tambah');  
      ?>
      <?= 
        $this->session->flashdata('message_user_edit'); 
        $this->session->unset_userdata('message_user_edit');  
      ?>
      <?=   
        $this->session->flashdata('message_user_hapus');
        $this->session->unset_userdata('message_user_hapus');    
      ?>

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Manajemen User</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <a href="<?= base_url('user/tambah') ?>">
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
                <th style="text-align: center;">Username</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">Email</th>
                <th style="text-align: center;">Foto</th>
                <th style="text-align: center;">Level</th>
                <th width="12%" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($user as $u) { ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $u->username; ?></td>
                  <td style="text-align: center;"><?php echo $u->nama; ?></td>
                  <td style="text-align: center;"><?php echo $u->email; ?></td>
                  <td style="text-align: center;">
                    <?php if ($u->level=='Admin') { ?>
                      <img src="<?= base_url('image/admin/') . $u->foto; ?>" height="100px;"></td>                   
                    <?php }else{ ?>
                      <img src="<?= base_url('image/user/') . $u->foto; ?>" height="100px;"></td>
                    <?php } ?>
                  <td style="text-align: center;"><?php echo $u->level; ?></td>
                  <td style="text-align: center;">
                    <div class="btn-group">
                      <a href="<?= base_url('user/edit/') . $u->id_user; ?>" title="Edit">
                        Edit
                      </a>
                      |
                      <a href="<?= base_url('user/hapus/') . $u->id_user; ?>" onclick="return confirm('Anda yakin ingin menghapus data user ini ...?')" title="Hapus">
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