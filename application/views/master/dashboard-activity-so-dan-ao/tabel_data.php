<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Activity</th>
        <th scope="col">Target</th>
        <th scope="col">Durasi 1/Act (Dlm Jam)</th>
        <?php for ($i=1; $i <=22 ; $i++) { ?>
          <th scope="col"><?= $i ?></th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Prospek</th>
        <td>2</td>
        <td>2</td>
        <?php for ($i=1; $i <=22 ; $i++) { ?>
          <th scope="col">0</th>
        <?php } ?>
      </tr>
      <tr>
        <th scope="row">Visit RO</th>
        <td>2</td>
        <?php for ($i=1; $i <=22 ; $i++) { ?>
          <th scope="col">0</th>
        <?php } ?>
      </tr>
      <tr>
        <td colspan="3"><center>Total</center></td>
        <?php for ($i=1; $i <=22 ; $i++) { ?>
          <th scope="col">0</th>
        <?php } ?>
      </tr>
      <tr>
        <td colspan="3"><center>Durasi</center></td>
        <?php for ($i=1; $i <=22 ; $i++) { ?>
          <th scope="col">0</th>
        <?php } ?>
      </tr>
    </tbody>
  </table>
</div>
