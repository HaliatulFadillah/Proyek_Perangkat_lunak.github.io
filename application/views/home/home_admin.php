<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Home</h2>
          <hr style="margin-bottom: -10px; margin-top: 5px">
        </div>
        <!-- /.box-header -->

        <div class="box-body justify-content-between">

            <div class="col-sm-4" id="kotak-luar-dashboard">
                <a href="<?=base_url('pembina')?>">
                <div class="col-sm-12" id="kotak-dalam-dashboard" style="background-color: #2F4F4F;">
                    <div id="dash-atas">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <div id="dash-bawah">
                        <h4><b>Data Pembina</b></h4>
                        <h5 style="margin-top: -5px">
                            Total : <?= $pembina; ?>
                        </h5>
                    </div>
                </div>
                </a>
            </div>
        
            <div class="col-sm-4" id="kotak-luar-dashboard">
                <a href="<?=base_url('anggota')?>">
                <div class="col-sm-12" id="kotak-dalam-dashboard" style="background-color: #708090;">
                    <div id="dash-atas">
                        <i class="fas fa-users"></i>
                    </div>
                    <div id="dash-bawah">
                        <h4><b>Data Anggota</b></h4>
                        <h5 style="margin-top: -5px">
                            Total : <?= $anggota; ?>
                        </h5>
                    </div>
                </div>
                </a>
            </div>

            <div class="col-sm-4" id="kotak-luar-dashboard">
                <a href="<?=base_url('kegiatan')?>">
                <div class="col-sm-12" id="kotak-dalam-dashboard" style="background-color: #4682B4;">
                    <div id="dash-atas">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div id="dash-bawah">
                        <h4><b>Data Kegiatan</b></h4>
                        <h5 style="margin-top: -5px">
                            Total : <?= $kegiatan; ?>
                        </h5>
                    </div>
                </div>
                </a>
            </div>

        </div>
      </div>
    </div>
  </div>

</section><!-- /.content -->
