<style type="text/css">
  td.details-control {
    background: url('./assets/dist/img/details_open.png') no-repeat center center;
    cursor: pointer;
  }

  tr.shown td.details-control {
    background: url('./assets/dist/img/details_close.png') no-repeat center center;
  }

  .card-primary.card-outline-tabs>.card-header a.active {
    border-top: 3px solid #d93444;
  }

  .nav-link {
    display: block;
    padding: 0.5rem 0.9rem;
  }

  .image-upload>input {
    display: none;
  }

  .image-upload img {
    width: 40px;
    cursor: pointer;
  }
</style>
<link href="<?php echo base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>" rel="stylesheet" type="text/css">
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><img src="<?= base_url(); ?>assets/dist/img/monitor.svg" width="10%"> Activity Sales Officer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Activity</a></li>
            <li class="breadcrumb-item active">Sales Officer</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="callout callout-success">
      <div class="row">
        <div class="col-md-3">
          <div class="input-group mb-3">
            <select class="form-control form cari-berdasarkan-data" onchange="filter();">
              <option value="formRO">Visit RO</option>
              <option value="formMB">Maintain MB</option>
              <option value="formPromosi">Promosi</option>
            </select>
            <div class="input-group-append">
              <button class="btn btn-primary" onclick="clickForm();"><i class="fas fa-plus"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="callout callout-success">
      <div class="tabel-data"></div>
    </div>
  </section>
</div>

<!-- modal started create-->
<!-- VISIT RO :: STARTED -->
<div class="modal fade bd-example-modal-lg form-visit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow: scroll !important;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form id="form-visit">
        <div class="modal-header">
          <h4 class="modal-title">Visit RO</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="No Kontrak.." readonly name="no_kontrak" id="no_kontrak">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama Debitur.." readonly name="nama_debitur" id="nama_debitur">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <button class="input-group-text btn btn-primary btn-find-debitur-visit-ro" type="button" data-toggle="tooltip" data-placement="top" title="Cari data debitur"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <textarea class="form-control" placeholder="Alamat Domisili.." readonly name="alamat_debitur" id="alamat_debitur" ></textarea>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <textarea class="form-control" placeholder="Hasil Visit.." name="hasil_visit" id="hasil_visit"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" id="swafoto-visit-ro">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div id="camera-swafoto-form-visit-ro" style="margin-right: 50;margin-bottom: 20;"></div>
        <div class="row">
          <div class="col-md">
            <div class="input-group mb-3">
              <input type="text" class="form-control latitude" placeholder="Latitude.." readonly name="latitude-form-visit-ro" id="latitude-form-visit-ro">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="input-group mb-3">
              <input type="text" class="form-control longitude" placeholder="Longitude.." readonly name="longitude-form-visit-ro" id="longitude-form-visit-ro">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="shoot-camera-swafoto-form-visit-ro">Shoot <i class="fas fa-camera"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- VISIT RO :: ENDED -->
<!-- MAINTAIN MB :: STARTED -->
<div class="modal fade bd-example-modal-lg form-maintain" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow: scroll !important;">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <form id="form-maintain">
        <div class="modal-header">
          <h4 class="modal-title">Maintain MB</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="nama_mb" placeholder="Nama MB" readonly id="nama_mb">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <button type="button" class="input-group-text btn-primary btn-find-debitur-maintain-mb" data-toggle="tooltip" data-placement="top" title="Cari data debitur"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3">
                <input type="text" class="form-control" name="alamat_domisili" placeholder="Alamat Domisili" readonly id="alamat_domisili">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="input-group mb-3">
                <select class="form-control" name="hasil_maintain" id="hasil_maintain">
                  <option value="Memberikan Leads">Memberikan Leads</option>
                  <option value="Komitmen MB">Komitmen MB</option>
                  <option value="Tidak Bertemu">Tidak Bertemu</option>
                </select>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-marker"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" id="swafoto-maintain-mb">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body">
        <div id="camera-swafoto-form-maintain-mb" style="margin-right: 50;margin-bottom: 20;"></div>
        <div class="row">
          <div class="col-md">
            <div class="input-group mb-3">
              <input type="text" class="form-control latitude" placeholder="Latitude.." readonly name="latitude-form-maintain-mb" id="latitude-form-maintain-mb">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="input-group mb-3">
              <input type="text" class="form-control longitude" placeholder="Longitude.." readonly name="longitude-form-maintain-mb" id="longitude-form-maintain-mb">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="shoot-camera-swafoto-form-maintain-mb">Shoot <i class="fas fa-camera"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- MAINTAIN MB :: ENDED -->

<div class="modal fade bd-example-modal-sm form-promosi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow: scroll !important;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Promosi</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      <div class="modal-body">
        <div id="camera-swafoto-form-promosi" style="margin-right: 50;margin-bottom: 20;"></div>
        <div class="row">
          <div class="col-md">
            <div class="input-group mb-3">
              <input type="text" class="form-control latitude" placeholder="Latitude.." readonly name="latitude-form-promosi" id="latitude-form-promosi">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="input-group mb-3">
              <input type="text" class="form-control longitude" placeholder="Longitude.." readonly name="longitude-form-promosi" id="longitude-form-promosi">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="shoot-camera-swafoto-form-promosi">Shoot <i class="fas fa-camera"></i></button>
      </div>
    </div>
  </div>
</div>
<!-- modal ended create-->

<!-- modal show data debitur::started -->
<div class="modal fade" id="staticBackdrop-modal-debitur" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel title-modal">Data Debitur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." id="search-data-debitur" onchange="filterModals();">
          <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-search"></i></span>
          </div>
        </div>
        <div id="content-modal-data-selected"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal show data debitur::ended -->
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/activity/sales-officer/index_js.php'); ?>
