<form id="form-submit-data-survey-45345234234234234543534">
  <div class="modal-body">
    <div class="container-fluid">
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Account Officer - Survey
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control no_kontrak" placeholder="Nomor kontrak" name="no_kontrak">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary find-cadeb-ao" onclick="findCadeb();"> Cari</button>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control nama_debitur" placeholder="Nama debitur" name="nama_debitur" id="nama_debitur">
                <div class="input-group-append">
                  <!-- <button type="button" class="btn btn-primary find-cadeb-ao" onclick="findCadeb();"><i class="fas fa-search"></i></button> -->
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control alamat_debitur" placeholder="Alamat debitur" name="alamat_debitur">
                <div class="input-group-append">
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control account_officer" placeholder="Pilih PIC" name="account_officer" id="account_officer">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary find-ao" onclick="findAO();"><i class="fas fa-search"></i></button>
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
