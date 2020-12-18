<table class="table table-sm">
	<thead>
		<tr>
			<th>Nama</th>
			<th width="10"><i class="fas fa-hand-pointer"></i></th>
		</tr>
	</thead>
	<tbody>
		<?php
    $limit = 10;
    $limit_start = ($page - 1) * $limit;
    $no = $limit_start + 1;
     ?>
    <?php foreach ($data as $key): ?>
		<tr>
			<td><?= $key['nomor_kontrak']; ?> - <?= $key['nama_debitur']; ?></td>
			<td>
				<button type="button" class="btn btn-outline-primary btn-sm" onclick="clickDaftarNamaFormVisit('<?= $key["nomor_kontrak"]; ?>');"><i class="fas fa-check"></i></button>
			</td>
		</tr>
	<?php $no++; endforeach; ?>
	</tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination pagination-sm justify-content-center">
    <?php
    $jumlah_page = $pagination;

    $jumlah_number = 3 ; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
    $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
    $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

    if($page == 1){
      echo '<li class="page-item disabled" onclick="paginationFormVisit(1);"><a class="page-link" href="#">First</a></li>';
      echo '<li class="page-item disabled" onclick="paginationFormVisit(1);"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    } else {
      $link_prev = ($page > 1)? $page - 1 : 1;
      echo '<li class="page-item halaman" onclick="paginationFormVisit(1);"><a class="page-link" href="#">First</a></li>';
      echo '<li class="page-item halaman" onclick="paginationFormVisit('.$link_prev.');"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    }

    for($i = $start_number; $i <= $end_number; $i++){
      $link_active = ($page == $i)? ' active' : '';
      echo '<li class="page-item halaman '.$link_active.'" onclick="paginationFormVisit('.$i.');"><a class="page-link" href="#">'.$i.'</a></li>';
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
</nav>