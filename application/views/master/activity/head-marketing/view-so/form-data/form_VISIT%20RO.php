<form id="form-visit-ro-so">
  <div class="modal-body">
    <div class="container-fluid">
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Visit RO Sales Officer
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control no_kontrak" placeholder="nomor kontrak.." name="no_kontrak">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control nama_debitur cadeb" id="nama_debitur" placeholder="nama debitur.." name="nama_debitur">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control alamat_debitur" placeholder="alamat debitur.." name="alamat_debitur">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control pic sales_officer" placeholder="PIC.." name="pic" id="pic-picker-data">
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
