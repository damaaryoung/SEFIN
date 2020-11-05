<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form visit</h3>
  </div>
  <!-- form start -->
  <form id="form-survey">
    <div class="card-body table-responsive">
      <table class="table">
        <tr>
          <th>Tanggal Survey</th>
          <td>
            <div class="form-group">
              <input type="text" name="tanggal_survey" class="form-control" value="<?= date('Y-m-d'); ?>" disabled readonly>
            </div>
          </td>
        </tr>
        <tr>
          <th>Nama Debitur</th>
          <td>
            <div class="form-group">
              <input type="text" name="nama_debitur" class="form-control" value="sesuai assignment HM/HB" disabled readonly>
            </div>
          </td>
        </tr>
        <tr>
          <th>Alamat Domisili</th>
          <td>
            <div class="form-group">
              <input type="text" name="alamat_domisili" class="form-control" value="sesuai assignment HM/HB" disabled readonly>
            </div>
          </td>
        </tr>
        <tr>
          <th>Plafon Pengajuan</th>
          <td>
            <div class="form-group">
              <input type="text" name="plafon_pengajuan" class="form-control" value="sesuai assignment HM/HB" disabled readonly>
            </div>
          </td>
        </tr>
        <tr>
          <th>Hasil Survey</th>
          <td>
            <div class="form-group">
              <select name="hasil_survey" class="form-control">
                <option>On Progress</option>
                <option>Cancel</option>
                <option>Reject</option>
                <option>Proses Memo</option>
                <option>Rescheadule</option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <th>Keterangan Hasil Survey</th>
          <td>
            <div class="form-group">
              <textarea name="keterangan_hasil_survey" class="form-control"></textarea>
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
