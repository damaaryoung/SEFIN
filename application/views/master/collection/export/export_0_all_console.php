<?php
    header('Pragma: public');
    header('Cache-control: private');
    header("Content-Type: application/vnd.ms-excel; charset=utf-8");
    header("Content-type: application/x-msexcel; charset=utf-8");
    header("Content-Disposition: attachment; filename=".$file_export.".xlsx");
    header("Pragma: no-cache");
    header("Expires: 0");
?>

<table>
    <tr>
        <th>AREA KERJA</th>
        <th>NO REKENING</th>
        <th>NAMA NASABAH</th>
        <th>TGL REALISASI</th>
        <th>KOLEK BI</th>
        <th>FT HARI</th>
        <th>FT ANGSURAN</th>
        <th>PLAFON</th>
        <th>TENOR</th>
        <th>BAKI DEBET</th>
        <th>ANGSURAN</th>
        <th>ASAL DATA</th>
        <th>NAMA ASAL DATA</th>
        <th>TUJUAN PENGGUNAAN</th>
        <th>PRODUK</th>
        <th>SEGMENTASI</th>
        <th>STATUS</th>
    </tr>
    <?php foreach($bucket_0_all_console->result() as $res): ?>
    <tr>
        <td><?php echo $res->nama_area_kerja ?></td>
        <td><?php echo $res->no_rekening ?></td>
        <td><?php echo $res->nama_nasabah ?></td>
        <td><?php echo date('d-m-Y', strtotime($res->tgl_realisasi)) ?></td>
        <td><?php echo $res->kolek_bi ?></td>
        <td><?php echo $res->ft_hari ?></td>
        <td><?php echo $res->ft_angsuran ?></td>
        <td class="text-right"><?php echo number_format($res->jml_pinjaman,0,',','.') ?></td>
        <td class="text-right"><?php echo $res->jml_angsuran ?></td>
        <td class="text-right"><?php echo number_format($res->baki_debet,0,',','.') ?></td>
        <td class="text-right"><?php echo number_format($res->jumlah_angsuran,0,',','.') ?></td>
        <td><?php echo $res->asal_data ?></td>
        <td><?php echo $res->nama_asal_data ?></td>
        <td><?php echo $res->tujuan ?></td>
        <td><?php echo $res->produk ?></td>
        <td><?php echo $res->segmentasi ?></td>
        <td><?php echo $res->status;?></td>
    </tr>
    <?php endforeach ?>
</table>