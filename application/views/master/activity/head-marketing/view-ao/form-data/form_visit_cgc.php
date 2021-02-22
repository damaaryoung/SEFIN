<form id="form-visit-cgc">
  <div class="modal-body">
    <div class="container-fluid">
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Account Officer - Visit CGC
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control no_kontrak" placeholder="No kontrak" name="no_kontrak" id="no_kontrak">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary find_kontrak_visit" onclick="find_kontrak_visit();"> Cari</button>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control nama_debitur" id="nama_debitur" placeholder="Nama debitur" name="nama_debitur">
                <div class="input-group-append">
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control alamat_debitur" placeholder="Alamat debitur" name="alamat_debitur" id="alamat_debitur">
                <div class="input-group-append">
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control pic account_officer" placeholder="Pilih PIC" name="pic" id="pic-picker-data">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary find-pic-ao" onclick="findPICAO();"><i class="fas fa-search"></i></button>
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
