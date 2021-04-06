<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=EXPORT VERIFIKASI - PROPERTI.xls");
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EXPORT VERIFIKASI - PROPERTI</title>
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
                <th class="border" style="height: 30px">Nomor SO</th>
                <th class="border">Nama Debitur</th>
                <th class="border">Diverifikasi Oleh</th>
                <th class="border">Waktu</th>
            </tr>
            <?php foreach($result_properti as $r): ?>
                <tr>
                    <td class="border" style="text-align: center"><?php echo $r->nomor_so ?></td>
                    <td class="border"><?php echo $r->nama_debitur ?></td>
                    <td class="border"><?php echo $r->verif_properti ?></td>
                    <td class="border" style="text-align: left"><?php echo $r->update_verif_properti ?></td>
                </tr>
            <?php endforeach?>
        </table>

    </body>
</html>