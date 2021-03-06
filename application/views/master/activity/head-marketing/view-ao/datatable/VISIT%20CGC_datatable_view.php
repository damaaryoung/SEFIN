<table class="table table-sm table-hover table-bordered" width="100%">
	<thead>
		<tr>
			<th>Tanggal</th>
			<th>NO. Kontrak</th>
			<th>Nama Debitur</th>
			<th>Alamat Debitur</th>
			<th>PIC</th>
			<th width="10">ACT</th>
		</tr>
	</thead>
	<tbody style="font-size: 13px !important;">
		<?php
		$limit = 10;
		$limit_start = ($page - 1) * $limit;
		$no = $limit_start + 1;
		?>
		<?php foreach ($data as $key): ?>
			<tr>
				<td><?= date('d F Y', strtotime($key['tgl_assign'])); ?> - <?= substr($key['tgl_assign'],11);?></td>
				<td><?= $key['no_kontrak']; ?></td>
				<td><?= $key['nama_debitur']; ?></td>
				<td><?= $key['alamat_debitur']; ?></td>
				<td><?= $key['nama_pic']; ?></td>
				<td>
					<div class="btn-group">
						<button type="button" class="btn btn-warning btn-sm" onclick="edit('<?= $key['id']; ?>','VISIT CGC');" data-toggle="tooltip" data-placement="left" title="Edit Data <?= $key['nama_debitur']; ?>"><i class="fas fa-wrench"></i></button>
						<button type="button" class="btn btn-danger btn-sm" onclick="destroy('<?= $key['id']; ?>','ao');" data-toggle="tooltip" data-placement="left" title="Hapus Data <?= $key['nama_debitur']; ?>"><i class="fas fa-trash"></i></button>
					</div>
				</td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
	</table>
	<div class="text-center">
		<ul class="pagination">
			<?php
			$jumlah_page = $pagination;

    $jumlah_number = 3 ; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
    $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

    if($page == 1){
    	echo '<li class="page-item disabled" onclick="pagination(1);"><a class="page-link" href="#">First</a></li>';
    	echo '<li class="page-item disabled" onclick="pagination(1);"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    } else {
    	$link_prev = ($page > 1)? $page - 1 : 1;
    	echo '<li class="page-item halaman" onclick="pagination(1);"><a class="page-link" href="#">First</a></li>';
    	echo '<li class="page-item halaman" onclick="pagination('.$link_prev.');"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    }

    for($i = $start_number; $i <= $end_number; $i++){
    	$link_active = ($page == $i)? ' active' : '';
    	echo '<li class="page-item halaman '.$link_active.'" onclick="pagination('.$i.');"><a class="page-link" href="#">'.$i.'</a></li>';
    }

    if($page == $jumlah_page){
    	echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
    	echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
    } else {
    	$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
    	echo '<li class="page-item halaman" id="'.$link_next.'"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
    	echo '<li class="page-item halaman" id="'.$jumlah_page.'"><a class="page-link" href="#">Last</a></li>';
    }
    ?>
</ul>
</div>
