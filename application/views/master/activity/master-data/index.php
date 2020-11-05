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
<script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><img src="<?= base_url(); ?>assets/dist/img/monitor.svg" width="10%"> Master Data Activity</h1>
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
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <button class="btn btn-primary h2" onclick="create()"><i class="fas fa-plus"></i> Create</button>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="input-group mb-3">
            <select class="form-control cari-berdasarkan" onchange="filter();">
              <option value="">ALL</option>
              <option value="SO">SO</option>
              <option value="AO">AO</option>
              <option value="Teller">Teller</option>
              <option value="Admin">Admin</option>
              <option value="Head Opr">Head Opr</option>
              <option value="Centro Staff">Centro Staff</option>
            </select>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <div class="tabel-data-activity"></div>
      </div>
    </div>
  </section>
</div>

<!-- modal started -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body card card-primary"></div>
    </div>
  </div>
</div>
<!-- modal ended -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/activity/master-data/index_js.php'); ?>
