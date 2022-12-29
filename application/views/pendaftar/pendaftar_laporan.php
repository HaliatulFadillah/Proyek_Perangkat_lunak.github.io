<!DOCTYPE html>
<html><head>
    <title></title>
</head><body>

    <table>
        <thead>
            <tr>
                <th width="30px"></th>
                <th width="100px"></th>
                <th width="180px"></th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th rowspan="2" colspan="2">
                    <img src="<?= base_url('image/system/logofix.PNG') ?>" alt="" height="130px">
                </th>
                <th colspan="3" style="font-size: 22px;">
                UNIVERSITAS LAMBUNG MANGKURAT <br>
                    UNIT KEGIATAN MAHASISWA <BR>
                    PPS BATAKO MERPATI PUTIH
                </th>
            </tr>
            <tr>
                <th colspan="3" style="font-size: 21px;">
                </th>
            </tr>
            <tr>
                <th colspan="5"><hr size="2px" color="black"></th>
            </tr>
    
        </thead>
        <tbody>
            <tr>
                <th colspan="5" style="text-align: right;">
                    
                </th>
            </tr>
            <tr>
                <th colspan="5"><br><u style="font-size: 15px;">LAPORAN DATA PENDAFTAR CALON ANGGOTA</u></th>
            </tr>
            <tr>
                <td colspan="5">
                    <br>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <table border='1' width="100%">
                        <thead>
                            <tr>
                                <th width="35px">No</th>
                <th style="text-align: center;">NIM</th>
                <th style="text-align: center;">Nama Anggota</th>
                <th style="text-align: center;">Jurusan</th>
                <th style="text-align: center;">Alasan Daftar</th>
                <th style="text-align: center;">Tanggal Daftar</th>
                <th style="text-align: center;">Tempat, Tgl Lahir</th>
                <th style="text-align: center;">Status Daftar</th>
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
                </tr>                  
                <?php endif ?>
              <?php } ?>
            </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5"><br></td>
            </tr>
            <tr>
                <td colspan="4" style="text-align: center;">
                    <br>
                    Ketua UKM PPS BATAKO, <br> <br> <br> <br> <br>
                    <u>(............................................)</u> <br>                
                </td>
                <td width="250px" style="text-align: center;">
                    Banjarmasin, <?php $tgl=date('d-m-Y'); echo indo_date($tgl,"half")?> <br>
                    Mengetahui Pembina, <br> <br> <br> <br> <br>
                    <u>(............................................)</u> <br>
                </td>
            </tr>
        </tfoot>
    </table>

<script type="text/javascript">
    window.print();
</script>

</body></html>