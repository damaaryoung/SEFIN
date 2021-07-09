<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=EXPORT TRACKING ORDER.xls");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EXPORT DATA TRACKING ORDER</title>
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
            <tr style="font-size: 14px; height: 25px">
                <th class="border" colspan="7">
                    REPORT TRACKING ORDER
                </th>
            </tr>
            <tr>
                <th class="border" style="height: 35px">NO.</th>
                <th class="border">TANGGAL</th>
                <th class="border">KANTOR</th>
                <th class="border">NOMOR SO</th>
                <th class="border">NAMA DEBITUR</th>
                <th class="border">NAMA CA</th>
                <th class="border">STATUS</th>
            </tr>
            <?php $no=1; ?>
            
            <?php foreach($data_tracking_order as $r): ?>
                <tr>
                    <td class="border" style ="text-align: center"><?php echo $no++ ?></td>
                    <td class="border"><?php echo $r->tgl_transaksi?></td>
                    <td class="border"><?php echo $r->nama_cabang?></td>
                    <td class="border"><?php echo $r->nomor_so ?></td>
                    <td class="border"><?php echo $r->nama_debitur ?></td>
                    <?php if($r->nama_ca != null) { ?>
                        <td class="border"><?php echo $r->nama_ca ?></td>
                    <?php } else if ($r->nama_assign != null) { ?>
                        <td class="border"><?php echo $r->nama_assign ?></td>
                    <?php } else { ?>
                        <td class="border">-</td>
                    <?php } ?>
                    <?php if($r->cancel_debitur == 2) { ?>
                        <td class="border" style="background-color: #dc4836; text-align: center">Cancel By Debitur</td>
                    <?php } else { ?>
                        <?php if($r->id_trans_so != null && $r->id_verif != null && $r->id_caa == null) { ?>
                            <td class="border" style="text-align: center; vertical-align: middle">Proses Pengajuan CAA</td>
                        <?php } else if ($r->id_trans_so == null && $r->tgl_pending == null && $r->status_return == null || $r->nama_assign != null && $r->id_trans_so == null && $r->tgl_pending == null && $r->status_return == null) { ?>
                            <td class="border" style="text-align: center; vertical-align: middle">Proses Memorandum CA</td>
                        <?php } else if ($r->plafon_kredit == "0") { ?>
                            <td class="border" style="background-color: #dc4836; text-align: center; vertical-align: middle">Not Recommend CA</td>
                        <?php } else if ($r->id_trans_so != null && $r->id_verif == null) { ?>
                            <td class="border" style="text-align: center; vertical-align: middle">Proses Verifikasi</td>
                        <?php } else if ($r->id_caa != null && $r->id_trans_so != null) { ?>
                            <td class="border" style="background-color: #00d807; text-align: center; vertical-align: middle">Sudah Pengajuan CAA</td>
                        <?php } else if ($r->tgl_pending != null && $r->id_trans_so == null) { ?>
                            <td class="border" style="background-color: #a8b4ae; text-align: center; vertical-align: middle">Pending</td>
                        <?php } else if ($r->status_return != null && $r->id_trans_so == null) { ?>
                            <td class="border" style="background-color: #a8b4ae; text-align: center; vertical-align: middle">Return</td>
                        <?php } else { ?>
                            <td class="border" style="text-align: center; vertical-align: middle">Status Lain</td>
                        <?php } ?>
                    <?php } ?>
                </tr>
            <?php endforeach?>
        </table>
    </body>
</html>