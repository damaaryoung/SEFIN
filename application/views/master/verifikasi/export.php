<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=EXPORT VERIFIKASI.xls");
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EXPORT VERIFIKASI</title>
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
            <tr style="background-color: #1e3762; color: #ffffff; font-size: 14px; height: 40px">
                <th class="border" colspan="16">
                    REPORT E-KYC
                </th>
            </tr>
            <tr style="background-color: #f39c12">
                <th class="border" style="height: 50px">NO.</th>
                <th class="border">KANTOR</th>
                <th class="border">NOMOR SO</th>
                <th class="border">NAMA</th>
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
                <th class="border">NAMA PASANGAN</th>
                <th class="border">TEMPAT LAHIR PASANGAN</th>
                <th class="border">TANGGAL LAHIR PASANGAN</th>
                <th class="border" style="width: 400px">ALAMAT PASANGAN</th>
                <th class="border" style="width: 150px">VERIFIKASI NIK PASANGAN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NIK PASANGAN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">VERIFIKASI NPWP PASANGAN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NPWP PASANGAN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">PEMAKAIAN SALDO</th>
                <th class="border">NAMA PENJAMIN 1</th>
                <th class="border">TEMPAT LAHIR PENJAMIN</th>
                <th class="border">TANGGAL LAHIR PENJAMIN</th>
                <th class="border" style="width: 400px">ALAMAT PENJAMIN</th>
                <th class="border" style="width: 150px">VERIFIKASI NIK PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NIK PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">VERIFIKASI NPWP PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NPWP PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">PEMAKAIAN SALDO</th>
                <th class="border">NAMA PENJAMIN 2</th>
                <th class="border">TEMPAT LAHIR PENJAMIN</th>
                <th class="border">TANGGAL LAHIR PENJAMIN</th>
                <th class="border" style="width: 400px">ALAMAT PENJAMIN</th>
                <th class="border" style="width: 150px">VERIFIKASI NIK PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NIK PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">VERIFIKASI NPWP PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NPWP PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">PEMAKAIAN SALDO</th>
                <th class="border">NAMA PENJAMIN 3</th>
                <th class="border">TEMPAT LAHIR PENJAMIN</th>
                <th class="border">TANGGAL LAHIR PENJAMIN</th>
                <th class="border" style="width: 400px">ALAMAT PENJAMIN</th>
                <th class="border" style="width: 150px">VERIFIKASI NIK PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NIK PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">VERIFIKASI NPWP PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NPWP PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">PEMAKAIAN SALDO</th>
                <th class="border">NAMA PENJAMIN 4</th>
                <th class="border">TEMPAT LAHIR PENJAMIN</th>
                <th class="border">TANGGAL LAHIR PENJAMIN</th>
                <th class="border" style="width: 400px">ALAMAT PENJAMIN</th>
                <th class="border" style="width: 150px">VERIFIKASI NIK PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NIK PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">VERIFIKASI NPWP PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NPWP PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">PEMAKAIAN SALDO</th>
                <th class="border">NAMA PENJAMIN 5</th>
                <th class="border">TEMPAT LAHIR PENJAMIN</th>
                <th class="border">TANGGAL LAHIR PENJAMIN</th>
                <th class="border" style="width: 400px">ALAMAT PENJAMIN</th>
                <th class="border" style="width: 150px">VERIFIKASI NIK PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NIK PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">VERIFIKASI NPWP PENJAMIN</th>
                <th class="border" style="width: 150px">JUMLAH VERIFIKASI NPWP PENJAMIN</th>
                <th class="border">DIVERIFIKASI OLEH</th>
                <th class="border">WAKTU</th>
                <th class="border" style="width: 150px">PEMAKAIAN SALDO</th>
                <th class="border" style="width: 200px"> TOTAL</th>
            </tr>
            <?php $no=1; ?>
            <?php $total_akhir=0; ?>

            <?php foreach($result_debitur as $r): ?>
                <?php $total=0; ?>
                
                <?php 
                    $count_penjamin = $this->db->query("SELECT COUNT(id_penjamin) AS jml_penjamin
                    FROM verif_penjamin 
                    WHERE id_trans_so = $r->id_trans_so 
                        AND MONTH(updated_at) = $bulan
                        AND YEAR(updated_at) = $tahun")->row(); 

                    $count_pasangan = $this->db->query("SELECT COUNT(id_trans_so) AS jml_pasangan
                    FROM verif_pasangan 
                    WHERE id_trans_so = $r->id_trans_so
                        AND MONTH(updated_at) = $bulan
                        AND YEAR(updated_at) = $tahun")->row();
                ?>
                <tr>
                    <td class="border" style ="text-align: center"><?php echo $no++ ?></td>
                    <td class="border"><?php echo $r->nama_kantor ?></td>
                    <td class="border" style="text-align: center"><?php echo $r->nomor_so ?></td>
                    <td class="border"><?php echo $r->nama_debitur ?></td>
                    <td class="border"><?php echo $r->tempat_lahir_debitur?></td>
                    <td class="border"><?php echo $r->tgl_lahir_debitur ?></td>
                    <td class="border"><?php echo $r->alamat_debitur?> RT 0<?php echo $r->rt_debitur?>/RW 0<?php echo $r->rw_debitur?> KECAMATAN <?php echo $r->kecamatan_debitur?> KELURAHAN <?php echo $r->kelurahan_debitur?> <?php echo $r->kabupaten_debitur?> PROVINSI <?php echo $r->provinsi_debitur?></td>
                    <td class="border"><?php echo $r->no_ktp_debitur ?></td>
                    <td class="border" style="text-align: center"><?php echo $r->jml_verif_debitur ?></td>
                    <td class="border"><?php echo $r->verif_debitur ?></td>
                    <td class="border" style="text-align: left"><?php echo $r->update_verif_debitur ?></td>
                    <td class="border"><?php echo $r->no_npwp_debitur ?></td>
                    <td class="border" style="text-align: center"><?php echo $r->jml_verif_npwp_debitur ?></td>
                    <td class="border"><?php echo $r->verif_npwp_debitur ?></td>
                    <td class="border" style="text-align: left"><?php echo $r->update_verif_npwp_debitur ?></td>
                    <?php if ($r->jml_verif_debitur == 1 && $r->jml_verif_npwp_debitur == 1) { ?>
                        <?php $total += 18500 ?>
                        <td class="border" style="text-align: right">Rp 18.500,00</td>
                    <?php } else if ($r->jml_verif_debitur == 1 && $r->jml_verif_npwp_debitur == 2) {?>
                        <?php $total += 30000 ?>
                        <td class="border" style="text-align: right">Rp 30.000,00</td>
                    <?php } else if ($r->jml_verif_debitur == 2 && $r->jml_verif_npwp_debitur == 1) {?>
                        <?php $total += 25500 ?>
                        <td class="border" style="text-align: right">Rp 25.500,00</td>
                    <?php } else if ($r->jml_verif_debitur == 2 && $r->jml_verif_npwp_debitur == 2) {?>
                        <?php $total += 37000 ?>
                        <td class="border" style="text-align: right">Rp 37.000,00</td>
                    <?php } else if ($r->jml_verif_debitur == 1) {?>
                        <?php $total += 7000 ?>
                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                    <?php } else if ($r->jml_verif_debitur == 2) {?>
                        <?php $total += 14000 ?>
                        <td class="border" style="text-align: right">Rp 14.000,00</td>
                    <?php } else if ($r->jml_verif_npwp_debitur == 1) {?>
                        <?php $total += 11500 ?>
                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                    <?php } else if ($r->jml_verif_npwp_debitur == 2) {?>
                        <?php $total += 23000 ?>
                        <td class="border" style="text-align: right">Rp 23.000,00</td>
                    <?php } ?>

                    <?php if ($count_pasangan->jml_pasangan != 0) { ?>
                        <?php foreach($result_pasangan as $rpas): ?> 
                            <?php if ($rpas->id_trans_so == $r->id_trans_so) { ?>
                                <td class="border"><?php echo $rpas->nama_pasangan ?></td>
                                <td class="border"><?php echo $rpas->tempat_lahir_pasangan?></td>
                                <td class="border"><?php echo $rpas->tgl_lahir_pasangan ?></td>
                                <td class="border"><?php echo $rpas->alamat_pasangan?></td>
                                <td class="border"><?php echo $rpas->no_ktp_pasangan ?></td>
                                <td class="border" style="text-align: center"><?php echo $rpas->jml_verif_pasangan ?></td>
                                <td class="border"><?php echo $rpas->verif_pasangan ?></td>
                                <td class="border" style="text-align: left"><?php echo $rpas->update_verif_pasangan ?></td>
                                <td class="border"><?php echo $rpas->no_npwp_pasangan ?></td>
                                <td class="border" style="text-align: center"><?php echo $rpas->jml_verif_npwp_pasangan ?></td>
                                <td class="border"><?php echo $rpas->verif_npwp_pasangan ?></td>
                                <td class="border" style="text-align: left"><?php echo $rpas->update_verif_npwp_pasangan ?></td>
                                <?php if ($rpas->jml_verif_pasangan == 1 && $rpas->jml_verif_npwp_pasangan == 1) { ?>
                                    <?php $total += 18500 ?>
                                    <td class="border" style="text-align: right">Rp 18.500,00</td>
                                <?php } else if ($rpas->jml_verif_pasangan == 1 && $rpas->jml_verif_npwp_pasangan == 2) {?>
                                    <?php $total += 30000 ?>
                                    <td class="border" style="text-align: right">Rp 30.000,00</td>
                                <?php } else if ($rpas->jml_verif_pasangan == 2 && $rpas->jml_verif_npwp_pasangan == 1) {?>
                                    <?php $total += 25500 ?>
                                    <td class="border" style="text-align: right">Rp 25.500,00</td>
                                <?php } else if ($rpas->jml_verif_pasangan == 2 && $rpas->jml_verif_npwp_pasangan == 2) {?>
                                    <?php $total += 37000 ?>
                                    <td class="border" style="text-align: right">Rp 37.000,00</td>
                                <?php } else if ($rpas->jml_verif_pasangan == 1) {?>
                                    <?php $total += 7000 ?>
                                    <td class="border" style="text-align: right">Rp 7.000,00</td>
                                <?php } else if ($rpas->jml_verif_pasangan == 2) {?>
                                    <?php $total += 14000 ?>
                                    <td class="border" style="text-align: right">Rp 14.000,00</td>
                                <?php } else if ($rpas->jml_verif_npwp_pasangan == 1) {?>
                                    <?php $total += 11500 ?>
                                    <td class="border" style="text-align: right">Rp 11.500,00</td>
                                <?php } else if ($rpas->jml_verif_npwp_pasangan == 2) {?>
                                    <?php $total += 23000 ?>
                                    <td class="border" style="text-align: right">Rp 23.000,00</td>
                                    <?php } ?>
                            <?php } ?>
                        <?php endforeach?>
                    <?php } else { ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    <?php } ?>

                    <?php if ($count_penjamin->jml_penjamin != 0) { ?>
                        <?php if ($count_penjamin->jml_penjamin == 1) { ?>
                            <?php foreach($result_penjamin as $rpen): ?>
                                <?php if($rpen->id_trans_so == $r->id_trans_so) { ?>
                                    <td class="border"><?php echo $rpen->nama_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->tempat_lahir_penjamin?></td>
                                    <td class="border"><?php echo $rpen->tgl_lahir_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->alamat_penjamin?></td>
                                    <td class="border"><?php echo $rpen->no_ktp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->no_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_npwp_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_npwp_penjamin ?></td>
                                    <?php if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 1) { ?>
                                        <?php $total += 18500 ?>
                                        <td class="border" style="text-align: right">Rp 18.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 30000 ?>
                                        <td class="border" style="text-align: right">Rp 30.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 25500 ?>
                                        <td class="border" style="text-align: right">Rp 25.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 37000 ?>
                                        <td class="border" style="text-align: right">Rp 37.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1) {?>
                                        <?php $total += 7000 ?>
                                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2) {?>
                                        <?php $total += 14000 ?>
                                        <td class="border" style="text-align: right">Rp 14.000,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 11500 ?>
                                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 23000 ?>
                                        <td class="border" style="text-align: right">Rp 23.000,00</td>
                                    <?php } ?>
                                <?php } ?>
                            <?php endforeach?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <?php } else if ($count_penjamin->jml_penjamin == 2){ ?>
                            <?php foreach($result_penjamin as $rpen): ?>
                                <?php if($rpen->id_trans_so == $r->id_trans_so) { ?>
                                    <td class="border"><?php echo $rpen->nama_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->tempat_lahir_penjamin?></td>
                                    <td class="border"><?php echo $rpen->tgl_lahir_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->alamat_penjamin?></td>
                                    <td class="border"><?php echo $rpen->no_ktp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->no_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_npwp_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_npwp_penjamin ?></td>
                                    <?php if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 1) { ?>
                                        <?php $total += 18500 ?>
                                        <td class="border" style="text-align: right">Rp 18.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 30000 ?>
                                        <td class="border" style="text-align: right">Rp 30.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 25500 ?>
                                        <td class="border" style="text-align: right">Rp 25.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 37000 ?>
                                        <td class="border" style="text-align: right">Rp 37.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1) {?>
                                        <?php $total += 7000 ?>
                                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2) {?>
                                        <?php $total += 14000 ?>
                                        <td class="border" style="text-align: right">Rp 14.000,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 11500 ?>
                                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 23000 ?>
                                        <td class="border" style="text-align: right">Rp 23.000,00</td>
                                    <?php } ?>
                                <?php } ?>
                            <?php endforeach?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <?php } else if ($count_penjamin->jml_penjamin == 3){ ?>
                            <?php foreach($result_penjamin as $rpen): ?>
                                <?php if($rpen->id_trans_so == $r->id_trans_so) { ?>
                                    <td class="border"><?php echo $rpen->nama_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->tempat_lahir_penjamin?></td>
                                    <td class="border"><?php echo $rpen->tgl_lahir_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->alamat_penjamin?></td>
                                    <td class="border"><?php echo $rpen->no_ktp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->no_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_npwp_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_npwp_penjamin ?></td>
                                    <?php if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 1) { ?>
                                        <?php $total += 18500 ?>
                                        <td class="border" style="text-align: right">Rp 18.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 30000 ?>
                                        <td class="border" style="text-align: right">Rp 30.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 25500 ?>
                                        <td class="border" style="text-align: right">Rp 25.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 37000 ?>
                                        <td class="border" style="text-align: right">Rp 37.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1) {?>
                                        <?php $total += 7000 ?>
                                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2) {?>
                                        <?php $total += 14000 ?>
                                        <td class="border" style="text-align: right">Rp 14.000,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 11500 ?>
                                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 23000 ?>
                                        <td class="border" style="text-align: right">Rp 23.000,00</td>
                                    <?php } ?>
                                <?php } ?>
                            <?php endforeach?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <?php } else if ($count_penjamin->jml_penjamin == 4){ ?>
                            <?php foreach($result_penjamin as $rpen): ?>
                                <?php if($rpen->id_trans_so == $r->id_trans_so) { ?>
                                    <td class="border"><?php echo $rpen->nama_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->tempat_lahir_penjamin?></td>
                                    <td class="border"><?php echo $rpen->tgl_lahir_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->alamat_penjamin?></td>
                                    <td class="border"><?php echo $rpen->no_ktp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->no_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_npwp_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_npwp_penjamin ?></td>
                                    <?php if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 1) { ?>
                                        <?php $total += 18500 ?>
                                        <td class="border" style="text-align: right">Rp 18.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 30000 ?>
                                        <td class="border" style="text-align: right">Rp 30.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 25500 ?>
                                        <td class="border" style="text-align: right">Rp 25.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 37000 ?>
                                        <td class="border" style="text-align: right">Rp 37.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1) {?>
                                        <?php $total += 7000 ?>
                                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2) {?>
                                        <?php $total += 14000 ?>
                                        <td class="border" style="text-align: right">Rp 14.000,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 11500 ?>
                                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 23000 ?>
                                        <td class="border" style="text-align: right">Rp 23.000,00</td>
                                    <?php } ?>
                                <?php } ?>
                            <?php endforeach?>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        <?php } else if ($count_penjamin->jml_penjamin == 5){ ?>
                            <?php foreach($result_penjamin as $rpen): ?>
                                <?php if($rpen->id_trans_so == $r->id_trans_so) { ?>
                                    <td class="border"><?php echo $rpen->nama_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->tempat_lahir_penjamin?></td>
                                    <td class="border"><?php echo $rpen->tgl_lahir_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->alamat_penjamin?></td>
                                    <td class="border"><?php echo $rpen->no_ktp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->no_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: center"><?php echo $rpen->jml_verif_npwp_penjamin ?></td>
                                    <td class="border"><?php echo $rpen->verif_npwp_penjamin ?></td>
                                    <td class="border" style="text-align: left"><?php echo $rpen->update_verif_npwp_penjamin ?></td>
                                    <?php if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 1) { ?>
                                        <?php $total += 18500 ?>
                                        <td class="border" style="text-align: right">Rp 18.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 30000 ?>
                                        <td class="border" style="text-align: right">Rp 30.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 25500 ?>
                                        <td class="border" style="text-align: right">Rp 25.500,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2 && $rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 37000 ?>
                                        <td class="border" style="text-align: right">Rp 37.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 1) {?>
                                        <?php $total += 7000 ?>
                                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                                    <?php } else if ($rpen->jml_verif_penjamin == 2) {?>
                                        <?php $total += 14000 ?>
                                        <td class="border" style="text-align: right">Rp 14.000,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 1) {?>
                                        <?php $total += 11500 ?>
                                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                                    <?php } else if ($rpen->jml_verif_npwp_penjamin == 2) {?>
                                        <?php $total += 23000 ?>
                                        <td class="border" style="text-align: right">Rp 23.000,00</td>
                                    <?php } ?>
                                <?php } ?>
                            <?php endforeach?>
                        <?php } ?>
                        
                        <td class="border" style="text-align: center"><b><?php echo "Rp ".number_format($total, 2, ',', '.') ?><b></td>
                    <?php } else { ?>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="border" style="text-align: center"><b><?php echo "Rp ".number_format($total, 2, ',', '.') ?><b></td>
                    <?php } ?>
                    <?php $total_akhir += $total?>
                </tr>
                <?php endforeach?>
                <tr>
                    <td class="border" style="text-align: right" colspan="94"><b>TOTAL AKHIR</b></td>
                    <td class="border" style="text-align: center"><b><?php echo "Rp ".number_format($total_akhir, 2, ',', '.') ?></b></td>
                </tr>   
        </table>
    </body>
</html>