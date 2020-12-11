<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form Survey</h3>
  </div>
  <!-- form start -->
  <form id="form-survey">
    <div class="card-body table-responsive">
      <table class="table">
        <tr>
          <th>Tanggal Survey</th>
          <td>
            <div class="form-group">
              <input type="text" name="tanggal_survey" class="form-control" value="<?= date('Y-m-d'); ?>" disabled readonly id="tanggal_survey">
            </div>
          </td>
        </tr>
        <tr>
          <th>Nama Debitur</th>
          <td>
            <div class="input-group">
              <input type="text" name="nama_debitur" class="form-control" placeholder="sesuai assignment HM/HB" disabled readonly id="nama_debitur">
              <div class="input-group-append">
                <button type="button" class="input-group-text" data-id="form-survey" id="basic-addon">Cari Debitur</button>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th>Alamat Domisili</th>
          <td>
            <div class="form-group">
              <input type="text" name="alamat_domisili" class="form-control" placeholder="sesuai assignment HM/HB" disabled readonly id="alamat_domisili">
            </div>
          </td>
        </tr>
        <tr>
          <th>Plafon Pengajuan</th>
          <td>
            <div class="form-group">
              <input type="text" name="plafon_pengajuan" class="form-control" placeholder="sesuai assignment HM/HB" disabled readonly id="plafon_pengajuan">
            </div>
          </td>
        </tr>
        <tr>
          <th>Hasil Survey</th>
          <td>
            <div class="form-group">
              <select name="hasil_survey" class="form-control" id="hasil_survey">
                <option value="ON-PROGRESS">On Progress</option>
                <option value="CANCEL">Cancel</option>
                <option value="REJECT">Reject</option>
                <option value="PROSES MEMO">Proses Memo</option>
                <option value="RESCHEDULE">Rescheadule</option>
              </select>
            </div>
          </td>
        </tr>
        <tr>
          <th>Keterangan Hasil Survey</th>
          <td>
            <div class="form-group">
              <textarea name="keterangan_hasil_survey" class="form-control" id="keterangan_hasil_survey"></textarea>
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
