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
            <th colspan="12"><?php echo $tgl ?></th>
        </tr>
        <tr>
            <th>NO.</th>
            <th>KANTOR</th>
            <th>NO REKENING</th>
            <th>NAMA NASABAH</th>
            <th>BAKI DEBET</th>
            <th>KOLEK BI</th>
            <th>FTB LALU</th>
            <th>FTB NOW</th>
            <th>FTP LALU</th>
            <th>FTP NOW</th>
            <th>STATUS</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;foreach($result->result() as $row): ?>
        <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row->nama_area_kerja;?></td>
                    <td><?php echo $row->no_rekening;?></td>
                    <td><?php echo $row->nama_nasabah;?></td>
                    <td><?php echo $row->tgl_realisasi;?></td>
                    <td><?php echo number_format($row->baki_debet, 0, ',', '.');?></td>
                    <td><?php echo $row->kolek_bi;?></td>
                    <td><?php echo $row->ftb_lalu;?></td>
                    <td><?php echo $row->ftb_now;?></td>
                    <td><?php echo $row->ftp_lalu;?></td>
                    <td><?php echo $row->ftp_now;?></td>
                    <td><?php echo $row->stt;?></td>
        </tr>
        <?php $i++; endforeach ?>
    </tbody>
</table>