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
              <input type="text" name="tanggal_promosi" class="form-control" value="<?= date('Y-m-d'); ?>" disabled readonly>
            </div>
          </td>
        </tr>
        <tr>
          <th>Lokasi Promosi</th>
          <td>
            <div class="form-group">
              <input type="text" name="lokasi_promosi" class="form-control" value="latitude & longitude cordinates" disabled readonly>
            </div>
          </td>
        </tr>
        <tr>
          <th>Swafoto</th>
          <td>
            <div class="form-group">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="swafoto">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
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
