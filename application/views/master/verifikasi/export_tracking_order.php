<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=EXPORT TRACKING ORDER MEMO CA.xls");
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
                <th class="border" colspan="12">
                    REPORT TRACKING ORDER MEMO CA
                </th>
            </tr>
            <tr style="background-color: #f39c12">
                <th class="border" style="height: 50px">NO.</th>
                <th class="border" style="width: 150px">TANGGAL</th>
                <th class="border" style="width: 150px">NOMOR SO</th>
                <th class="border" style="width: 250px">NAMA DEBITUR</th>
                <th class="border" style="width: 150px">TANGGAL MEMO AO</th>
                <th class="border" style="width: 250px">NAMA AO</th>
                <th class="border" style="width: 150px">PLAFON</th>
                <th class="border" style="width: 250px">CABANG</th>
                <th class="border" style="width: 250px">NAMA CA</th>
                <th class="border" style="width: 80px">POSISI CA</th>
                <th class="border" style="width: 200px">STATUS</th>
                <th class="border" style="width: 300px">KETERANGAN</th>
            </tr>
            <?php $no=1; ?>

            <?php foreach($result_tracking_order as $r): ?>
                <tr>
                    <td class="border" style ="text-align: center"><?php echo $no++ ?></td>
                    <td class="border"><?php echo $r->tanggal ?></td>
                    <td class="border"><?php echo $r->nomor_so ?></td>
                    <td class="border"><?php echo $r->nama_debitur ?></td>
                    <td class="border"><?php echo $r->tgl_memo_ao ?></td>
                    <td class="border"><?php echo $r->nama_ao ?></td>
                    <td class="border"><?php echo "Rp ".number_format($r->plafon, 2, ',', '.') ?></td>
                    <td class="border"><?php echo $r->cabang ?></td>
                    <td class="border"><?php echo $r->nama_ca ?></td>
                    <td class="border" style ="text-align: center"><?php echo $r->posisi_ca ?></td>
                    <td class="border"><?php echo $r->status_memo ?></td>
                    <td class="border"><?php echo $r->keterangan ?></td>
                </tr>
            <?php endforeach?>
        </table>
    </body>

</html>