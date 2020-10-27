<link href="<?= base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" rel="stylesheet" type="text/css">
<div id='contentData'>
    <div id="lihat_data_target" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Target Lending</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Target Lending</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" id="load_edit">
                            <div class="box-body table-responsive no-padding">
                                <button class="btn btn-primary tambah" id="addButton" style="margin-bottom: 9px;" onclick="create();"><i class="fa fa-user-plus">Tambah</i></button>
                                <div class="d-flex justify-content-center">
                                    <div class="spinner-grow text-primary" role="status" id="loading" style="display: none;">
                                      <span class="sr-only">Loading...</span>
                                  </div>
                              </div>
                              <div id="data-target-lending"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>
</div>
<!-- MODAL STARTED -->
<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content"></div>
  </div>
</div>
<!-- MODAL ENDED -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/target_lending/target_lending_template_js.php'); ?>
