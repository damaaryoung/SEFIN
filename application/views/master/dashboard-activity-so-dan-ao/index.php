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
<div id='ajax_loader' style="position: fixed; left: 50%; top: 50%; display: none;">
  <div class="spinner-grow" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><img src="<?= base_url(); ?>assets/dist/img/monitor.svg" width="10%"> Dashboard SO & AO</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Sales Officer & Account Officer</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
      <div class="callout callout-success">
        <form id="dashboard-filter-data-activity-so-ao">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <select class="custom-select form" name="datafilter">
                  <option value="">Select Data</option>
                  <option value="so">Data Sales Officer</option>
                  <option value="ao">Data Account Officer</option>
                </select>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <select class="custom-select form" name="bulan">
                  <option value="">Pilih Bulan</option>
                  <?php
                  $bln=array(1=>"Januari","Februari","Maret","April","Mei","Juni","July","Agustus","September","Oktober","November","Desember");
                  for($bulan=1; $bulan<=12; $bulan++){
                    if($bulan<=9) { echo "<option value=".$bulan.">".$bln[$bulan]."</option>"; }
                    else { echo "<option value=".$bulan.">".$bln[$bulan]."</option>"; }
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <select class="custom-select form" name="tahun">
                  <option value="">Pilih Tahun</option>
                  <?php
                    $now=date('Y');
                    for ($a=2010;$a<=$now;$a++)
                    {
                      echo "<option value=".$a.">".$a."</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <select class="custom-select form" name="area" id="area-picker">
                  <option value="">Pilih Area</option>
                  <?php foreach ($get_area as $key): ?>
                    <option value="<?= $key->id; ?>"><?= $key->nama; ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <select class="custom-select form" name="cabang" id="cabang-picker">
                  <option value="">Pilih Cabang</option>
                </select>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Filter</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
    <section>
      <div class="callout callout-success">
        <div class="tabel-data">
        </div>
      </div>
    </section>
</div>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/dashboard-activity-so-dan-ao/index_js.php'); ?>
