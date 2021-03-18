<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col"><p class="text-center">Activity</p></th>
        <th scope="col"><p class="text-center">Target</p></th>
        <th scope="col" width="100%"><p class="text-center">Durasi 1/Act <i>(Dlm Jam)</i></p></th>
          <?php for ($i=1; $i <=30 ; $i++) { ?>
            <th scope="col"><?= $i; ?></th>
          <?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Prospek</th>
        <td>2</td>
        <td>2</td>

        <?php
        $date_now = date('Y-m-d');
        $hari_pertama = $this->db->query("SELECT dpm_online.get_som('$date_now') as som")->row();
        $hari_terakhir = $this->db->query("SELECT dpm_online.get_eom('$date_now') as eom")->row();
        $total_kerja = $this->db->query("SELECT dpm_online.get_jumlah_kerja ('$hari_pertama->som','$hari_terakhir->eom') as total")->row()->total;

        $arrayProspek = array();
        if (!empty($prospek)){
          foreach ($prospek as $key) {
            $hk[]=$key->hk;
            $p[]=$key->prospek;
          }
          $index=0;
          for ($i=1; $i <= 30; $i++) { 
            if(array_key_exists($index, $hk)){
              if (!($i == $hk[$index])) {
                array_push($arrayProspek,0);
                echo "<th scope='col'>0</th>";
                continue;
              }else{
                array_push($arrayProspek,$p[$index]);
                echo "<th scope='col' style='background-color: green;color: white;'>".$p[$index]."</th>";
              }
            }else{
              array_push($arrayProspek,0);
              echo "<th scope='col'>0</th>";
            }
            $index++;
          }
        }else{
          for ($i=1; $i <= 30; $i++) {
              array_push($arrayProspek,0); 
              echo "<th scope='col'>0</th>";
          }
        } 
        ?>
      </tr>
      <tr>
        <th scope="row">Visit RO</th>
        <td>2</td>
        <td>2</td>
        <?php
        $arrayVisit = array();
         if (!empty($visitro)){
          foreach ($visitro as $key) {
            $hkvisit[]=$key->hk;
            $visit[]=$key->visit;
          }
          $index=0;
          for ($i=1; $i <= 30; $i++) { 
            if(array_key_exists($index, $hkvisit)){
              if (!($i == $hkvisit[$index])) {
                array_push($arrayVisit, 0);
                echo "<th scope='col'>0</th>";
                continue;
              }else{
                array_push($arrayVisit, $visit[$index]);
                echo "<th scope='col' style='background-color: green;color: white;'>".$visit[$index]."</th>";
              }
            }else{
              array_push($arrayVisit, 0);
              echo "<th scope='col'>0</th>";
            }
            $index++;
          }
        }else{
          for ($i=1; $i <= 30; $i++) {
              array_push($arrayVisit, 0); 
              echo "<th scope='col'>0</th>";
          }
        } 
        ?>
      </tr>
      <tr>
        <th scope="row">Maintain MB</th>
        <td>2</td>
        <td>2</td>
        <?php
        $arrayMaintain = array(); 
        if (!empty($maintainmb)){
          foreach ($maintainmb as $key) {
            $hkmb[]=$key->hk;
            $mb[]=$key->maintain_mb;
          }
          $index=0;
          for ($i=1; $i <= 30; $i++) { 
            if(array_key_exists($index, $hkmb)){
              if (!($i == $hkmb[$index])) {
                array_push($arrayMaintain, 0);
                echo "<th scope='col'>0</th>";
                continue;
              }else{
                array_push($arrayMaintain, $mb[$index]);
                echo "<th scope='col' style='background-color: green;color: white;'>".$mb[$index]."</th>";
              }
            }else{
              array_push($arrayMaintain, 0);
              echo "<th scope='col'>0</th>";
            }
            $index++;
          }
        }else{
          for ($i=1; $i <= 30; $i++) {
          array_push($arrayMaintain, 0); 
            echo "<th scope='col'>0</th>";
          }
        } 
        ?>
      </tr>
      <tr>
        <th scope="row">Leads</th>
        <td>2</td>
        <td>2</td>
        <?php 
        $arrayLeads = array();
        if (!empty($leads)){
          foreach ($leads as $key) {
            $hkleads[]=$key->hk;
            $leadss[]=$key->leads;
          }
          $index=0;
          for ($i=1; $i <= 30; $i++) { 
            if(array_key_exists($index, $hkleads)){
              if (!($i == $hkleads[$index])) {
                array_push($arrayLeads, 0);
                echo "<th scope='col'>0</th>";
                continue;
              }else{
                array_push($arrayLeads, $leadss[$index]);
                echo "<th scope='col' style='background-color: green;color: white;'>".$leadss[$index]."</th>";
              }
            }else{
              array_push($arrayLeads, 0);
              echo "<th scope='col'>0</th>";
            }
            $index++;
          }
        }else{
          for ($i=1; $i <= 30; $i++) {
            array_push($arrayLeads, 0); 
            echo "<th scope='col'>0</th>";
          }
        } 
        ?>
      </tr>
      <tr>
        <th scope="row">Promosi</th>
        <td>2</td>
        <td>2</td>
        <?php 
        $arrayPromosi = array();
        if (!empty($promosi)){
          foreach ($promosi as $key) {
            $hkpromosis[]=$key->hk;
            $promosis[]=$key->promosi;
          }
          $index=0;
          for ($i=1; $i <= 30; $i++) { 
            if(array_key_exists($index, $hkpromosis)){
              if (!($i == $hkpromosis[$index])) {
                array_push($arrayPromosi, 0);
                echo "<th scope='col'>0</th>";
                continue;
              }else{
                array_push($arrayPromosi, $promosis[$index]);
                echo "<th scope='col' style='background-color: green;color: white;'>".$promosis[$index]."</th>";
              }
            }else{
              array_push($arrayPromosi, 0);
              echo "<th scope='col'>0</th>";
            }
            $index++;
          }
        }else{
          for ($i=1; $i <= 30; $i++) {
            array_push($arrayPromosi, 0); 
            echo "<th scope='col'>0</th>";
          }
        } 
        ?>
      </tr>
      <tr>
        <td colspan="3"><center>Total</center></td>
        <?php 
        $arrayTotal = array();
        for ($i=0; $i < 30; $i++) {
              array_push($arrayTotal, $arrayProspek[$i]+$arrayVisit[$i]+$arrayMaintain[$i]+$arrayLeads[$i]+$arrayPromosi[$i]);
          }
        for ($i=0; $i < 30; $i++) { 
          echo "<th scope='col' style='background-color: green;color: white;'>".$arrayTotal[$i]."</th>";
          }
        ?>
      </tr>
      <tr>
        <td colspan="3"><center>Durasi</center></td>
        <?php
        $arrayDurasi = array(); 
        for ($i=0; $i < 30; $i++) {
          array_push($arrayDurasi, $arrayTotal[$i]*2);
        }
        for ($i=0; $i < 30; $i++) { 
          echo "<th scope='col' style='background-color: green;color: white;'>".$arrayDurasi[$i]."</th>";
          }
        ?>
      </tr>
    </tbody>
  </table>
</div>
