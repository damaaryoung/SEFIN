<table id="table_activity" class="table table-sm table-hover table-bordered" style="white-space: nowrap;">
  <thead style="font-size: 14px" class="bg-danger">
    <tr>
        <th width="5px">
            No
        </th>
        <th>
            Waktu Telepon
        </th>
        <th>
            No. Kontrak
        </th>
        <th>
            Nama Debitur
        </th>
        <th>
            Tanggal Jatuh Tempo
        </th>
        <th>
            Contacted
        </th>
        <th>
            Uncontacted
        </th>
        <th>
            Unconnected
        </th>
        <th>
            Aksi
        </th>
    </tr>
  </thead>
  <tbody id="data_activity" style="font-size: 13px">
    <?php
    $limit = 10;
    $limit_start = ($page - 1) * $limit;
    $no = $limit_start + 1;
     ?>
    <?php foreach ($data as $key): ?>
      <tr>
        <td style="text-align: center">
          <?= $no; ?>
        </td>
        <td><?= $key['tanggal_telpon']; ?></td>
        <td><?= $key['nomor_kontrak']; ?></td>
        <td><?= $key['nama_debitur']; ?></td>
        <td><?= $key['tgl_jatuh_tempo']; ?></td>
        <td><?= empty($key['contacted']) ? "-" : $key['contacted']; ?></td>
        <td><?= empty($key['uncontacted']) ? "-" : $key['uncontacted']; ?></td>
        <td><?= empty($key['unconnected']) ? "-" : $key['unconnected']; ?></td>
        <td style="text-align: center">
          <button type="button" class="btn btn-warning btn-sm detail" onclick="click_detail()" id="click_detail_activity" data="<?= $key['id']?>"><i style="color: #fff;" class="fas fa-eye"></i></button>
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
      echo '<li class="page-item disabled" onclick="pagination_tabel_activity(1);"><a class="page-link" href="#">First</a></li>';
      echo '<li class="page-item disabled" onclick="pagination_tabel_activity(1);"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    } else {
      $link_prev = ($page > 1)? $page - 1 : 1;
      echo '<li class="page-item halaman" onclick="pagination_tabel_activity(1);"><a class="page-link" href="#">First</a></li>';
      echo '<li class="page-item halaman" onclick="pagination_tabel_activity('.$link_prev.');"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
    }

    for($i = $start_number; $i <= $end_number; $i++){
      $link_active = ($page == $i)? ' active' : '';
      echo '<li class="page-item halaman '.$link_active.'" onclick="pagination_tabel_activity('.$i.');"><a class="page-link" href="#">'.$i.'</a></li>';
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

<script>

  formatTanggalTelepon = function(tanggalTelepon) {
      var splittedTanggalTelepon = tanggalTelepon.split(" ");

      var objTanggalTelepon = {
          tanggal : splittedTanggalTelepon[0],
          waktu   : splittedTanggalTelepon[1]
      }

      var formattedTanggal = objTanggalTelepon.tanggal.split("-").reverse().join("-");

      return `${formattedTanggal} | ${objTanggalTelepon.waktu}`
  }
  
</script>
