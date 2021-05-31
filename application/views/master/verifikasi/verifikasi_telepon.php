<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=VERIFIKASI TELEPON.xls");
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
                <th class="border" colspan="9">
                    REPORT VERIFIKASI TELEPON
                </th>
            </tr>
            <tr style="background-color: #f39c12">
                <th class="border" style="height: 50px">NO.</th>
                <th class="border">NOMOR SO</th>
                <th class="border">NAMA DEBITUR</th>
                <th class="border">CABANG</th>
                <th class="border">PLAFON</th>
                <th class="border">NAMA SO</th>
                <th class="border">NAMA AO</th>
                <th class="border">TANGGAL MEMO AO</th>
                <th class="border">NAMA CA</th>
                <?php foreach($result_params as $r): ?>
                    <th class="border"><?php echo $r->detail?></th>
                <?php endforeach?> 
            </tr>
            <?php $no=1; ?>

            <?php foreach($result_debitur as $r): ?>
                <tr>
                    <td class="border" style ="text-align: center"><?php echo $no++ ?></td>
                    <td class="border"><?php echo $r->nomor_so ?></td>
                    <td class="border"><?php echo $r->nama_debitur ?></td>
                    <td class="border"><?php echo $r->kantor_cabang ?></td>
                    <td class="border"><?php echo $r->plafon ?></td>
                    <td class="border"><?php echo $r->nama_so ?></td>
                    <td class="border"><?php echo $r->nama_ao ?></td>
                    <td class="border"><?php echo $r->tgl_memo_ao ?></td>
                    <td class="border"><?php echo $r->nama_ca ?></td>

                    <?php if ($result_telp != null) { ?>
                        <?php foreach($result_telp as $row): ?>
                            <?php if ($r->id_trans_so == $row->id_trans_so) { ?>
                                <?php if ($row->hasil == 1) { ?>
                                    <td class="border" style="text-align: center">Sesuai</td>
                                <?php } else if ($row->hasil == 2) { ?>
                                    <td class="border" style="text-align: center">Tidak Sesuai</td>
                                <?php } else if ($row->hasil == 3) { ?>
                                    <td class="border" style="text-align: center">Ada Kejanggalan</td>
                                <?php } else { ?>
                                    <td class="border"><?php echo $row->keterangan ?></td>
                                <?php } ?>
                            <?php } ?>
                        <?php endforeach?>
                    <?php } ?>
                </tr>
            <?php endforeach?>
        </table>
    </body>
</html>
