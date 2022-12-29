<section class="content">
  <div class="row">
    <div class="col-md-12">

      <?= 
        $this->session->flashdata('message_soal_tambah');
        $this->session->unset_userdata('message_soal_tambah');  
      ?>
      <?= 
        $this->session->flashdata('message_soal_edit'); 
        $this->session->unset_userdata('message_soal_edit');  
      ?>
      <?=   
        $this->session->flashdata('message_soal_hapus');
        $this->session->unset_userdata('message_soal_hapus');    
      ?>

      <!-- Default box -->
      <div class="box" style="overflow-x: scroll;">
        <div class="box-header">
          <h2 class="box-title">Data Soal</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body">
          <a href="<?= base_url('soal/tambah') ?>">
            <button class="btn btn-flat" id="tmb-tambah">
              <span class="fa fa-plus"></span> Tambah Data
            </button>
          </a>

          <table id="data-tables" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th width="1%" style="text-align: center;">No</th>
                <th style="text-align: center;">Pertanyaan</th>
                <th style="text-align: center;">Jawab A</th>
                <th style="text-align: center;">Jawab B</th>
                <th style="text-align: center;">Jawab C</th>
                <th style="text-align: center;">Jawab D</th>
                <th style="text-align: center;">Kunci Jawaban</th>
                <th style="text-align: center;">Point</th>
                <th width="12%" style="text-align: center;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($soal as $s) { ?>
                <tr>
                  <td style="text-align: center;"><?php echo $no++; ?></td>
                  <td style="text-align: center;"><?php echo $s->pertanyaan; ?></td>
                  <td style="text-align: center;"><?php echo $s->jawab_a; ?></td>
                  <td style="text-align: center;"><?php echo $s->jawab_b; ?></td>
                  <td style="text-align: center;"><?php echo $s->jawab_c; ?></td>
                  <td style="text-align: center;"><?php echo $s->jawab_d; ?></td>
                  <td style="text-align: center;"><?php echo $s->kunci_jawab; ?></td>
                  <td style="text-align: center;"><?php echo $s->point; ?></td>

                  <td style="text-align: center;">
                    <div class="btn-group">
                      <a href="<?= base_url('soal/edit/') . $s->id_soal; ?>" title="Edit">
                        Edit
                      </a>
                      |
                      <a href="<?= base_url('soal/hapus/') . $s->id_soal; ?>" onclick="return confirm('Anda yakin ingin menghapus data soal ini ...?')" title="Hapus">
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