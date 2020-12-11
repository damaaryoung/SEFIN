<form id="form-maintain-mb-so">
  <div class="modal-body">
    <div class="container-fluid">
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Maintain MB Sales Officer
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control nama_mb" id="nama_mb" placeholder="nama mb.." name="nama_mb">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control alamat_mb" placeholder="alamat mb.." name="alamat_mb">
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
