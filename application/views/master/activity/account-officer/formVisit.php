<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Form visit</h3>
  </div>
  <!-- form start -->
  <form id="form-visit">
    <div class="card-body table-responsive">
      <table class="table">
        <tr>
          <th>Tanggal Visit</th>
          <td>
            <div class="form-group">
              <input type="text" name="tanggal_visit" class="form-control" value="<?= date('Y-m-d'); ?>" disabled readonly id="tanggal_visit">
            </div>
          </td>
        </tr>
        <tr>
          <th>No Kontrak</th>
          <td>
            <div class="input-group">
              <input type="text" name="no_kontrak" class="form-control" placeholder="sesuai assignment HM/HB" disabled readonly id="no_kontrak">
              <div class="input-group-append">
                <button type="button" class="input-group-text" data-id="form-visit" id="basic-addon">Cari No. Kontrak</button>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th>Nama Debitur</th>
          <td>
            <div class="form-group">
              <input type="text" name="nama_debitur" class="form-control" placeholder="sesuai assignment HM/HB" disabled readonly id="nama_debitur">
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
          <th>Hasil Visit</th>
          <td>
            <div class="form-group">
              <select name="hasil_visit" class="form-control" id="hasil_visit">
                <option value="">Pilih hasil</option>
                <option value="HOT PROSPECT">Hot Prospek</option>
                <option value="INTEREST">Interes</option>
                <option value="TIDAK MAU">Tidak Mau</option>
                <option value="TIDAK BERTEMU">TIdak Bertemu</option>
              </select>
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
