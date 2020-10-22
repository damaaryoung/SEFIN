<style type="text/css">
    #container {
        height: 400px;
    }

    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
</style>

<script src="<?php echo base_url('assets/dist/canvasjs.min.js') ?>"></script>
<div class="content-wrapper" id="content">
  <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1>Dashboard Restruktur</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard Restruktur</li>
                  </ol>
              </div>
          </div>
      </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h4 id="os_total"></h4>
                    <p>OS TOTAL (RP.)</p>
                </div>
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h4 id="os_normal">53</h4>
                    <p>OS NORMAL (RP.)</p>
                </div>
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4 id="os_restruktur">44</h4>
                    <p>OS RESTRUKTUR (RP.)</p>
                </div>
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
        </div>
      </div>
    </div>
    <div class="callout callout-danger">
      <h5 class="text-center"><strong>Restruktur</strong></h5>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Komposisi Normal & Restruktur</h3>
              <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item dropdown">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Filter :</div>
                      <div class="p-3">
                          <input type="date" name="date_komposisi_normal_dan_restruktur" onchange="komposisi_normal_dan_restruktur()" class="form-control form-control-sm" value="<?php echo date('Y-m-d') ?>">
                      </div>
                      <div class="p-3">
                          <a href="javascript:void(0)" onclick="daftar_nasabah_restruktur()" class="btn btn-success btn-block btn-sm">Daftar Nasabah</a>
                      </div>
                  </div>
                </li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="loading-data-normal" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <!-- chart start -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Model Restruktur</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="modelRestrukturByNoa" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
          <!-- chart end -->
        </div>
        <div class="col-md-6">
          <!-- chart start -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">By Baki Debet</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="restrukturKumulatifByBakiDebet" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
          <!-- chart end -->
        </div>
        <div class="col-md-6">
          <!-- chart start -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">By Noa</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="restrukturKumulatifByNoa" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
          <!-- chart end -->
        </div>
        <div class="col-md-6">
          <!-- chart start -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">By Amount</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="chart5cabangByAmount" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
          <!-- chart end -->
        </div>
        <div class="col-md-6">
          <!-- chart start -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">By Noa</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="chart5cabangByNoa" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
          <!-- chart end -->
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">By Amount</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="chartAreaTerbesarByAmount" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">By Noa</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="chartAreaTerbesarByNoa" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Noa Restruktur Kredit By Plafon</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="NoaRestrukturKreditByPlafon" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Collection Rasio</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="CollectionRasio" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Current Rasio</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="CurrentRasio" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">NS Restruktur</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="NSRestruktur" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>

    <div class="callout callout-info">
      <h5 class="text-center"><strong>Collection</strong></h5>
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">NPL</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="NPL" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Bucket 0</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="Bucket_0" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>

    <div class="callout callout-success">
      <h5 class="text-center"><strong>RISK</strong></h5>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">0 NS</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="ZeroNS" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">FID Ever</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="fid-ever" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">FID Compre</h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div id="fid-compre" style="height: 300px; width: 100%;"></div>
            </div><!-- /.card-body -->
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php $this->view('master/restruktur/dashboard_restruktur_js.php'); ?>
