<div class="d-flex justify-content-center">
	<div class="spinner-grow" role="status" id="loading-pic" style="display:none">
		<span class="sr-only">Loading...</span>
	</div>
</div>	
<table class="table table-sm table-hover table-bordered" width="100%" id="table-pic">
	<thead>
		<tr>
			<th>No. SO</th>
			<th>Nama</th>
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
				<td><?= $key['nomor_so']; ?></td>
				<td><?= $key['nama_lengkap']; ?></td>
				<td>
					<div class="btn-group">
						<button type="button" class="btn btn-secondary btn-sm" onclick="pickDeb('<?= $key['nama_lengkap']; ?>','<?= $key['nomor_so']; ?>','<?= $key['alamat_debitur']; ?>');" data-toggle="tooltip" data-placement="left" title="Pick Data <?= $key['nama_lengkap']; ?>"><i class="fas fa-hand-pointer"></i></button>
					</div>
				</td>
			</tr>
			<?php $no++; endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<th>No. SO</th>
				<th>Nama</th>
				<th width="10">ACT</th>
			</tr>
		</tfoot>
	</table>
	<div class="text-center">
		<ul class="pagination pagination-sm">
			<?php
			$jumlah_page = $pagination;

    $jumlah_number = 3 ; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
    $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

    if($page == 1){
    	echo '<li class="page-item disabled" onclick="paginationCadeb(1);"><a class="page-link" href="#">First</a></li>';
    	echo '<li class="page-item disabled" onclick="paginationCadeb(1);"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    } else {
    	$link_prev = ($page > 1)? $page - 1 : 1;
    	echo '<li class="page-item halaman" onclick="paginationCadeb(1);"><a class="page-link" href="#">First</a></li>';
    	echo '<li class="page-item halaman" onclick="paginationCadeb('.$link_prev.');"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    }

    for($i = $start_number; $i <= $end_number; $i++){
    	$link_active = ($page == $i)? ' active' : '';
    	echo '<li class="page-item halaman '.$link_active.'" onclick="paginationCadeb('.$i.');"><a class="page-link" href="#">'.$i.'</a></li>';
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
