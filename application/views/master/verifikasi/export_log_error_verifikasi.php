<?php

    header("Content-type: application/vnd-ms-excel");

    header("Content-Disposition: attachment; filename=EXPORT LOG ERROR VERIFIKASI.xls");
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

            .str{ 
                mso-number-format:\@; 
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <table class="border" style="width: 100%;">
            <tr style="background-color: #1e3762; color: #ffffff; font-size: 14px; height: 40px">
                <th class="border" colspan="11">
                    REPORT LOG ERROR VERIFIKASI
                </th>
            </tr>
            <tr style="background-color: #f39c12">
                <th class="border" style="height: 50px">NO.</th>
                <th class="border" style="width: 120px">KANTOR</th>
                <th class="border" style="width: 120px">JENIS CALL</th>
                <th class="border" style="width: 150px">NIK</th>
                <th class="border" style="width: 150px">NPWP</th>
                <th class="border" style="width: 150px">NOP</th>
                <th class="border" style="width: 80px">STATUS</th>
                <th class="border" style="width: 250px">PESAN</th>
                <th class="border" style="width: 200px">DIVERIFIKASI OLEH</th>
                <th class="border" style="width: 135px">WAKTU</th>
                <th class="border" style="width: 120px">TOTAL</th>
            </tr>
            <?php $no=1; ?>
            <?php $total_akhir=0; ?>

            <?php foreach($result_error as $r): ?>
                <?php $total=0; ?>
                <tr>
                    <td class="border" style ="text-align: center"><?php echo $no++ ?></td>
                    <td class="border"><?php echo $r->nama_kantor ?></td>
                    <td class="border"><?php echo $r->jenis_call ?></td>
                    <?php if ($r->nik == null) { ?>
                        <td class="border" style ="text-align: center">-</td>
                    <?php } else { ?>
                        <td class="str"><?php echo $r->nik ?></td>
                    <?php } ?>
                    <?php if ($r->npwp == null) { ?>
                        <td class="border" style ="text-align: center">-</td>
                    <?php } else { ?>
                        <td class="str"><?php echo $r->npwp ?></td>
                    <?php } ?>
                    <?php if ($r->nop == null) { ?>
                        <td class="border" style ="text-align: center">-</td>
                    <?php } else { ?>
                        <td class="str"><?php echo $r->nop ?></td>
                    <?php } ?>
                    <td class="border" style="text-align: center"><?php echo $r->status_call ?></td>
                    <td class="border"><?php echo $r->pesan ?></td>
                    <td class="border"><?php echo $r->nama_verif?></td>
                    <td class="border"><?php echo $r->waktu?></td>
                    <?php if ($r->nik != null && $r->status_call == 200 && $r->pesan == "Data not found") { ?>
                        <?php $total += 7000 ?>
                        <td class="border" style="text-align: right">Rp 7.000,00</td>
                    <?php } else if ($r->npwp != null && $r->status_call == 200 && $r->pesan == "Data not found") { ?>
                        <?php $total += 11500 ?>
                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                    <?php } else if ($r->nop != null && $r->status_call == 200 && $r->pesan == "Data not found") { ?>
                        <?php $total += 11500 ?>
                        <td class="border" style="text-align: right">Rp 11.500,00</td>
                    <?php } else { ?>
                        <td class="border" style="text-align: right">-</td>
                    <?php } ?>
                    <?php $total_akhir += $total?>
                </tr>
            <?php endforeach?>
            <tr>
                <td class="border" style="text-align: right" colspan="10"><b>TOTAL AKHIR</b></td>
                <td class="border" style="text-align: center"><b><?php echo "Rp ".number_format($total_akhir, 2, ',', '.') ?></b></td>
            </tr> 
        </table>
    </body>

</html>