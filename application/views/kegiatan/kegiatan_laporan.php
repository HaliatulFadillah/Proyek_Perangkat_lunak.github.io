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
                <th colspan="5"><br><u style="font-size: 15px;">LAPORAN DATA KEGIATAN</u></th>
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
                                <th>Tanggal Kegiatan</th>
                                <th>Deskripsi Kegiatan</th>
                                <th>Tempat</th>
                                <th>Hasil</th>
                                <th>Pembina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($kegiatan as $k) { ?>
                            <tr>
                                <td style="text-align: center;"><?= $no++ ?></td>
                                <td style="text-align: center;"><?= $k->tgl_kegiatan ?></td>
                                <td style="text-align: center;"><?= $k->deskripsi_kegiatan ?></td>
                                <td style="text-align: center;"><?= $k->tempat_kegiatan ?></td>
                                <td style="text-align: center;"><?= $k->hasil_kegiatan ?></td>
<?php 
    foreach ($pembina as $key) {
       if ($key->id_pembina==$k->id_pembina) {
           $nama_pembina=$key->nama_pembina;
       }
    }
 ?>
                                <td style="text-align: center;"><?= $nama_pembina; ?></td>
                            </tr>
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