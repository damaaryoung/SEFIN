<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form promosi</h3>
  </div>
  <!-- form start -->
  <form id="form-promosi">
    <div class="card-body table-responsive">
      <table class="table">
        <tr>
          <th>Tanggal Promosi</th>
          <td>
            <div class="form-group">
              <input type="text" name="tanggal_promosi" class="form-control" value="<?= date('Y-m-d'); ?>" disabled readonly id="tanggal_promosi">
            </div>
          </td>
        </tr>
        <tr>
          <th>Lokasi Promosi Latitude</th>
          <td>
            <div class="form-group">
              <input type="text" name="lokasi_promosi" class="form-control" placeholder="latitude & longitude cordinates" disabled readonly id="latitude">
            </div>
          </td>
        </tr>
        <tr>
          <th>Lokasi Promosi Longitude</th>
          <td>
            <div class="form-group">
              <input type="text" name="lokasi_promosi" class="form-control" placeholder="latitude & longitude cordinates" disabled readonly id="longitude">
            </div>
          </td>
        </tr>
      </table>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <!-- form ended -->
</div>
