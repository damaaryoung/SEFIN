<form id="form-maintain-mb-so">
  <div class="modal-body">
    <div class="container-fluid">
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Sales Officer - Maintain MB
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control nama_mb" id="nama_mb" placeholder="Nama MB" name="nama_mb">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary find_nama_mb" onclick="find_nama_mb();"> Cari</button>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control alamat_mb" placeholder="Alamat MB" name="alamat_mb">
                <div class="input-group-append">
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control sales_officer" placeholder="Pilih PIC" name="pic" id="pic-picker-data">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary find-pic-ao" onclick="findPICSO();"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Save <i class="fas fa-save"></i></button>
  </div>
</form>
