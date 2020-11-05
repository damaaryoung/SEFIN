<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Master <small>MB</small></h3>
  </div>
  <!-- form start -->
  <form id="form-mb">
    <div class="card-body table-responsive">
      <table class="table">
        <tr>
          <th>Tanggal Maintain</th>
          <td>
            <div class="form-group">
              <input type="text" name="tangga_maintain" class="form-control" placeholder="Tanggal Maintain">
            </div>
          </td>
        </tr>
        <tr>
          <th>Nama MB</th>
          <td>
            <div class="form-group">
              <input type="text" name="nama_mb" class="form-control" placeholder="Nama MB">
            </div>
          </td>
        </tr>
        <tr>
          <th>Alamat Domisili</th>
          <td>
            <div class="form-group">
              <textarea name="alamat_domisili" class="form-control"></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th>Hasil Maintain</th>
          <td>
            <div class="form-group">
              <textarea name="hasil_maintain" class="form-control"></textarea>
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
