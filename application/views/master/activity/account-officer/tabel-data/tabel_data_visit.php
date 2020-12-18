<table class="table table-sm table-hover table-bordered">
  <thead>
      <tr>
          <th>Detail</th>
          <th width="10">Swafoto</th>
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
        <td>
          <table class="table table-sm" width="100%">
            <tr>
              <th>Tanggal</th>
              <td>: <?= $key['tanggal']; ?></td>
            </tr>
            <tr>
              <th>Nomor SO</th>
              <td>: <?= $key['nomor_so']; ?></td>
            </tr>
            <tr>
              <th>Nama Debitur</th>
              <td>: <?= $key['nama_debitur']; ?></td>
            </tr>
            <tr>
              <th>Alamat Domisili</th>
              <td>: <?= $key['alamat_domisili']; ?></td>
            </tr>
            <tr>
              <th>Hasil Visit</th>
              <td>: <?= $key['hasil_visit']; ?></td>
            </tr>
          </table>
        </td>
        <td>
          <img src="<?= 'http://103.31.232.146/API_WEBTOOL3'.$key['swafoto']; ?>" class="rounded mx-auto d-block" alt="..." width="100%">
        </td>
        <td>
          <div class="btn-group">
              <button type="button" class="btn btn-warning btn-sm" onclick="edit('<?= $key['id']; ?>','visit');" data-toggle="tooltip" data-placement="left" title="Edit Data <?= $key['nomor_so']; ?>"><i class="fas fa-wrench"></i></button>
              <button type="button" class="btn btn-danger btn-sm" onclick="destroy('<?= $key['id']; ?>','visit');" data-toggle="tooltip" data-placement="left" title="Hapus Data <?= $key['nomor_so']; ?>"><i class="fas fa-trash"></i></button>
            </div>
        </td>
      </tr>
    <?php $no++; endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>Detail</th>
      <th width="10">Swafoto</th>
      <th width="10">ACT</th>
    </tr>
  </tfoot>
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