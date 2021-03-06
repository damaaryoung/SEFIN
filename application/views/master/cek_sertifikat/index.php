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
<!-- <link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script> -->

<link href="<?php echo base_url('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?= base_url(); ?>assets/dist/img/monitor.svg" width="10%"> Data Credit Checking</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Credit Checking</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="callout callout-success">
                  <div class="row">
                    <div class="col-md">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control cari-berdasarkan" placeholder="Cari berdasarkan nomor so.....">
                        <div class="input-group-append">
                          <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="box-body no-padding table-responsive">
                            <div class="data"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- modal started -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body" id="view-data"></div>
    </div>
  </div>
</div>
<!-- modal ended -->
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/cek_sertifikat/index_js.php'); ?>
