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
        <th scope="row">Survey</th>
        <td>2</td>
        <td>2</td>

        <?php
        $arraySurvey = array();
        if (!empty($survey)){
          foreach ($survey as $key) {
            $hk[]=$key->hk;
            $p[]=$key->survey;
          }
          $index=0;
          for ($i=1; $i <= 30; $i++) { 
            if(array_key_exists($index, $hk)){
              if (!($i == $hk[$index])) {
                array_push($arraySurvey,0);
                echo "<th scope='col'>0</th>";
                continue;
              }else{
                array_push($arraySurvey,$p[$index]);
                echo "<th scope='col' style='background-color: green;color: white;'>".$p[$index]."</th>";
              }
            }else{
              array_push($arraySurvey,0);
              echo "<th scope='col'>0</th>";
            }
            $index++;
          }
        }else{
          for ($i=1; $i <= 30; $i++) {
              array_push($arraySurvey,0); 
              echo "<th scope='col'>0</th>";
          }
        } 
        ?>
      </tr>
      <tr>
        <th scope="row">Visit CGC</th>
        <td>2</td>
        <td>2</td>
        <?php
        $arrayVisit = array();
         if (!empty($visitcgc)){
          foreach ($visitcgc as $key) {
            $hkvisit[]=$key->hk;
            $visit[]=$key->visit_cgc;
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
              array_push($arrayTotal, $arraySurvey[$i]+$arrayVisit[$i]+$arrayPromosi[$i]);
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
