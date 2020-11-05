<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Master <small>RO</small></h3>
  </div>
  <!-- form start -->
  <form id="form-ro">
    <div class="card-body table-responsive">
      <table class="table">
        <tr>
          <th>Tanggal Visit</th>
          <td>
            <div class="form-group">
              <input type="text" name="tanggal_visit" class="form-control" placeholder="Enter Tanggal Visit">
            </div>
          </td>
        </tr>
        <tr>
          <th>No Kontrak</th>
          <td>
            <div class="form-group">
              <input type="number" name="no_kontak" class="form-control" placeholder="Enter No Kontrak">
            </div>
          </td>
        </tr>
        <tr>
          <th>Nama Debitur</th>
          <td>
            <div class="form-group">
              <input type="text" name="nama_debitur" class="form-control" placeholder="Enter Nama Debitur">
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
          <th>Hasil Visit</th>
          <td>
            <div class="form-group">
              <textarea name="hasil_visit" class="form-control"></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th>Swafoto</th>
          <td>
            <div class="form-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="swafoto">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
