<?php
    header('Pragma: public');
    header('Cache-control: private');
    header("Content-Type: application/vnd.ms-excel; charset=utf-8");
    header("Content-type: application/x-msexcel; charset=utf-8");
    header("Content-Disposition: attachment; filename=".$file_export.".xlsx");
    header("Pragma: no-cache");
    header("Expires: 0");
?>

<table id="myTable" width="100%" class="table table-striped table-bordered" style="white-space: nowrap; font-size:10px">
    <thead class="text-center">
        <tr>
            <th colspan="12"><?php echo $tgl; ?></th>
        </tr>
        <tr>
            <th rowspan="2" style="vertical-align:middle">AREA KERJA</th>
            <th rowspan="2" style="vertical-align:middle">OS KREDIT</th>
            <th colspan="2">0</th>
            <th colspan="2">0+</th>
            <th colspan="2">30+</th>
            <th colspan="2">60+</th>
            <th colspan="2">90+</th>
        </tr>
        <tr>
            <th>BAKI DEBET</th>
            <th>%</th>

            <th>BAKI DEBET</th>
            <th>%</th>

            <th>BAKI DEBET</th>
            <th>%</th>

            <th>BAKI DEBET</th>
            <th>%</th>

            <th>BAKI DEBET</th>
            <th>%</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($result->result() as $res): ?>
        <tr>
            <td><?php echo $res->nama_kantor ?></td>
            <td style="text-align: right"><?php echo number_format($res->bd_all, 0, ',', '.') ?></td>
            <td style="text-align: right"><?php echo number_format($res->bd_current, 0, ',', '.') ?></td>
            <td style="text-align: right"><?php echo $res->rasio_current ?></td>
            <td style="text-align: right"><?php echo number_format($res->bd_0_plus, 0, ',', '.') ?></td>
            <td style="text-align: right"><?php echo $res->rasio_0_plus ?></td>
            <td style="text-align: right"><?php echo number_format($res->bd_30_plus, 0, ',', '.') ?></td>
            <td style="text-align: right"><?php echo $res->rasio_30_plus ?></td>
            <td style="text-align: right"><?php echo number_format($res->bd_60_plus, 0, ',', '.') ?></td>
            <td style="text-align: right"><?php echo $res->rasio_60_plus ?></td>
            <td style="text-align: right"><?php echo number_format($res->bd_90_plus, 0, ',', '.') ?></td>
            <td style="text-align: right"><?php echo $res->rasio_90_plus ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>