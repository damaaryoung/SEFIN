<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=EXPORT VERIFIKASI - PENJAMIN.xls");
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EXPORT VERIFIKASI - PENJAMIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="<?php echo base_url('favicon.ico') ?>" rel="shortcut icon">
        <style>
            .border{

                border: 1px solid black;

            }
        </style>
    </head>

    <body>
        <table class="border" style="width: 100%;">
            <tr>
                <th class="border" colspan="17" style="height: 35px" >
                    REPORT E-KYC
                </th>
            </tr>
            <tr>
                <th class="border" style="height: 50px">NO.</th>
                <th class="border">KANTOR</th>
                <th class="border">NOMOR SO</th>
                <th class="border">NAMA DEBITUR</th>
                <th class="border">NAMA PENJAMIN</th>
                <th class="border">TEMPAT LAHIR</th>
                <th class="border">TANGGAL LAHIR</th>
                <th class="border" style="width: 400px">ALAMAT</th>
                <th class="border" style="width: 150px">VERIFIKASI NIK</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NIK</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">VERIFIKASI NPWP</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NPWP</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">PEMAKAIAN SALDO</th>
            </tr>
            <?php $no=1; ?>
            <?php foreach($result_penjamin as $r): ?>
                <tr>
                    <td class="border" style ="text-align: center"><?php echo $no++ ?></td>
                    <td class="border"><?php echo $r->nama_kantor ?></td>
                    <td class="border" style="text-align: center"><?php echo $r->nomor_so ?></td>
                    <td class="border"><?php echo $r->nama_debitur ?></td>
                    <td class="border"><?php echo $r->nama_penjamin ?></td>
                    <td class="border"><?php echo $r->tempat_lahir_penjamin?></td>
                    <td class="border"><?php echo $r->tgl_lahir_penjamin ?></td>
                    <td class="border"><?php echo $r->alamat_penjamin?></td>
                    <td class="border"><?php echo $r->no_ktp_penjamin ?></td>
                    <td class="border" style="text-align: center"><?php echo $r->jml_verif_penjamin ?></td>
                    <td class="border"><?php echo $r->verif_penjamin ?></td>
                    <td class="border" style="text-align: left"><?php echo $r->update_verif_penjamin ?></td>
                    <td class="border"><?php echo $r->no_npwp_penjamin ?></td>
                    <td class="border" style="text-align: center"><?php echo $r->jml_verif_npwp_penjamin ?></td>
                    <td class="border"><?php echo $r->verif_npwp_penjamin ?></td>
                    <td class="border" style="text-align: left"><?php echo $r->update_verif_npwp_penjamin ?></td>
                    <?php if ($r->jml_verif_penjamin == 1 && $r->jml_verif_npwp_penjamin == 1) { ?>
                        <td class="border" style="text-align: right">Rp 18.500,00</td>
                    <?php } else if ($r->jml_verif_penjamin == 1 && $r->jml_verif_npwp_penjamin == 2) {?>
                        <td class="border" style="text-align: right">Rp 30.000,00</td>
                    <?php } else if ($r->jml_verif_penjamin == 2 && $r->jml_verif_npwp_penjamin == 1) {?>
                        <td class="border" style="text-align: right">Rp 25.500,00</td>
                    <?php } else if ($r->jml_verif_penjamin == 2 && $r->jml_verif_npwp_penjamin == 2) {?>
                        <td class="border" style="text-align: right">Rp 37.000,00</td>
                    <?php } else if ($r->jml_verif_penjamin == 1) {?>
                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                    <?php } else if ($r->jml_verif_penjamin == 2) {?>
                        <td class="border" style="text-align: right">Rp 14.000,00</td>
                    <?php } else if ($r->jml_verif_npwp_penjamin == 1) {?>
                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                    <?php } else if ($r->jml_verif_npwp_penjamin == 2) {?>
                        <td class="border" style="text-align: right">Rp 23.000,00</td>
                    <?php } ?>
                </tr>
            <?php endforeach?>
            <th class="border" colspan="16" style="text-align: right; height: 35px">TOTAL</th>
                <th class="border"></th>
            </tr>
        </table>

    </body>
</html>