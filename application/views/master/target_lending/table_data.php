<table class="table table-sm table-hover table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Kode Kantor</th>
      <th>Area Kerja</th>
      <th>Area</th>
      <th>Target</th>
      <th>Bulan</th>
      <th>Tahun</th>
      <th width="10">Act</th>
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
        <td><?= $no; ?></td>
        <td>
          <button type="button" class="btn btn-block btn-default btn-xs">
            <?= $key['kode_kantor']; ?>
          </button>
        </td>
        <td><?= $key['area_kerja']; ?></td>
        <td><?= $key['area']; ?></td>
        <td>Rp. <?= number_format($key['target']); ?></td>
        <td>
          <?php
          if ($key['bulan']==1) {
            echo "januari";
          }elseif ($key['bulan']==2) {
            echo "februari";
          }elseif ($key['bulan']==3) {
            echo "maret";
          }elseif ($key['bulan']==4) {
            echo "april";
          }elseif ($key['bulan']==5) {
            echo "mei";
          }elseif ($key['bulan']==6) {
            echo "juni";
          }elseif ($key['bulan']==7) {
            echo "juli";
          }elseif ($key['bulan']==8) {
            echo "agustus";
          }elseif ($key['bulan']==9) {
            echo "september";
          }elseif ($key['bulan']==10) {
            echo "oktober";
          }elseif ($key['bulan']==11) {
            echo "november";
          }elseif ($key['bulan']==12) {
            echo "desember";
          }
          ?>
        </td>
        <td><?= $key['tahun']; ?></td>
        <td>
          <div class="btn-group">
            <button type="button" class="btn btn-warning btn-sm" onclick="edit('<?= $key['id']; ?>');" data-toggle="modal" data-target="#modal-xl">
              <i class="fas fa-edit"></i>
            </button>
            <button type="button" class="btn btn-danger btn-sm" onclick="hapus('<?= $key['id']; ?>');" data-toggle="tooltip" data-placement="left" title="Hapus Data">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </td>
      </tr>
      <?php $no++; endforeach; ?>
    </tbody>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Kode Kantor</th>
        <th>Area Kerja</th>
        <th>Area</th>
        <th>Target</th>
        <th>Bulan</th>
        <th>Tahun</th>
        <th width="10">Act</th>
      </tr>
    </tfoot>
  </table>
  <div class="text-center">
    <ul class="pagination">
      <?php
      $jumlah_page = $pagination;
      $jumlah_number = 3 ;
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
        echo '<li class="page-item halaman" onclick="pagination('.$link_next.');"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
        echo '<li class="page-item halaman" onclick="pagination('.$jumlah_page.');"><a class="page-link" href="#">Last</a></li>';
      }
      ?>
    </ul>
  </div>
