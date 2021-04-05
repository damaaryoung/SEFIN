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
                  <h1>Dashboard Collection</h1>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard Collection</li>
                  </ol>
              </div>
          </div>
      </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="callout callout-info">
                <h5 class="text-center"><strong>Collection</strong></h5>
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Bucket 0 NS</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date_bucket0_ns_console" onchange="ZeroNS()" value="">
                                        </div>
                                        <div class="dropdown-item">
                                          <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_0ns_console">Lihat Data</button>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="ZeroNS" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="btn_0ns_area" data-toggle="modal">Tampilkan Area</button>
                                <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_0ns" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="ZeroNS_area"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Bucket 0 ALL</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date_0_all_console" onchange="Bucket_0()" value="">
                                        </div>
                                        <div class="dropdown-item">
                                          <button type="button" class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_0_all_console">Lihat Data</button>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="Bucket_0" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="btn_Bucket_0_Area" data-toggle="modal">Tampilkan Area</button>
                                <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_0_all" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="Bucket_0_area"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">FID Compre</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date-fid-compre" onchange="fidcompre()" value="">
                                        </div>
                                        <div class="dropdown-item">
                                          <button type="button" class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_fid_compre_console">Lihat Data</button>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="fid-compre" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="btn_fid-compre_area" data-toggle="modal">Tampilkan Area</button>
                                <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_fid_compre" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="fid-compre_area"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">FID Ever</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date-fid-ever" onchange="fidever()" value="">
                                        </div>
                                        <div class="dropdown-item">
                                          <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_fid_ever_console">Lihat Data</button>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="fid-ever" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="btn_fid-ever_area" data-toggle="modal">Tampilkan Area</button>
                                <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_fid_ever" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="div_fid-ever_area"></div>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">NPL</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date_npl_console" onchange="npl_console()" value="">
                                        </div>
                                        <div class="dropdown-item">
                                          <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_npl_console">Lihat Data</button>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="NPL" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="NPL_AREA" data-toggle="modal">Tampilkan Area</button>
                                <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_npl" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="div_npl_area"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Current Ratio</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date-current-ratio" onchange="current_ratio_console()" value="">
                                        </div>
                                        <div class="dropdown-item">
                                          <button class="btn btn-success btn-block btn-sm" id="preview_list_current_ratio_console" href="javascript:void(0)">Lihat Data</button>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="current_rasio" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="btn_current_rasio_area" data-toggle="modal">Tampilkan Area</button>
                                <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_current_ratio" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="div_current_ratio_area"></div>
                            </div>
                        </div>
                    </div>
              <div class="card-body">
                <div id="NPL" style="height: 300px; width: 100%;"></div>
                <button type="button" class="btn btn-md btn-danger col-12" data-toggle="modal" data-target="#modal-Npl-Area">Tampilkan Area</button>
            <div class="modal fade" id="modal-Npl-Area">
              <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Area NPL Collection</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                    <?php
                      $a = 0;

                      for($i = 1; $i <= count($output_npl_area); $i++)
                      {?>
                    
                      <div class="col-md-6">
                        <div class="card">
                          <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3"><?php echo 'NPL '.$output_npl_area[$a]->kode_area;?></h3>
                          </div><!-- /.card-header -->
                          <div class="card-body">
                            <div id="NPL_AREA_<?php echo $a;?>" style="width:400px;height:400px"></div>
                              <button type="button" class="btn btn-md btn-danger col-12" data-toggle="modal" data-target="#modal-Npl-cabang-<?php echo $output_npl_area[$a]->kode_area;?>">Tampilkan Area</button>  
                          </div>
                        </div>
                      </div>
                      <div class="modal fade cabang" id="modal-Npl-cabang-<?php echo $output_npl_area[$a]->kode_area;?>">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Cabang NPL Collection</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <div class="row">
                                <?php $url_npl_cabang = "http://103.234.254.186/riskcan/dashboard/kredit/kredit_controller/npl_console_cabang";
                                  $post_npl_cabang[$a] = array(
                                    'api'=>'Y',
                                     'kode_area'=>$output_npl_area[$a]->kode_area
                                  );
                                  $ch_npl_cabang = curl_init();
                                  curl_setopt($ch_npl_cabang, CURLOPT_URL, $url_npl_cabang);
                                  curl_setopt($ch_npl_cabang, CURLOPT_HEADER, 0);
                                  curl_setopt($ch_npl_cabang, CURLOPT_RETURNTRANSFER, 1);
                                  curl_setopt($ch_npl_cabang, CURLOPT_POST, count($post_npl_cabang[$a]));
                                  curl_setopt($ch_npl_cabang, CURLOPT_POSTFIELDS, $post_npl_cabang[$a]);
                                  $output_npl_cabang = curl_exec($ch_npl_cabang);
                                  curl_close($ch_npl_cabang);
                                  $data_npl_cabang = json_decode($output_npl_cabang);
                                   // echo count($data_cabang);
                                   $cab_arr = 0;
                                   for($cabang = 1; $cabang <= count($data_npl_cabang); $cabang++){
                                      echo '
                                      
                                        <div class="card">
                                          <div class="card-header d-flex p-0"><h3 class="card-title p-3">'.$data_npl_cabang[$cab_arr]->nama_area_kerja.'</h3></div>
                                          <div class="card-body">
                                            <div id="NPL_AREA_'.$a.'_CABANG_'.$cab_arr.'" style="width:500px;height:500px"></div>
                                          </div>
                                        </div>
                                     
                                      ';
                                      $cab_arr++;
                                   }
                                ?>
                                 </div>

                            </div>
                          </div>
                        </div>
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Deliquency</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date_deliquency" onchange="deliquency_console()" value="">
                                        </div>
                                        <div class="dropdown-item">
                                          <button class="btn btn-success btn-block btn-sm" id="preview_list_deliquency_console" href="javascript:void(0)">Lihat Data</button>
                                        </div>
                                      </div>
                                    </div>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="deliquency" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="btn_deliquency_area" data-toggle="modal">Tampilkan Area</button>
                                 <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_deliquency" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="div_deliquency_area"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Roll Console</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                        <i class="fas fa-wrench"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <div class="dropdown-item">
                                          <input type="date" class="form-control" name="date_roll_console" onchange="roll_console()" value="">
                      </div>
                    <?php
                      $a++;
                      }
                     
                    ?>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
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
                <button type="button" class="btn btn-md btn-danger col-12" data-toggle="modal" data-target="#modal-Bucket0-Area">
                Tampilkan Area</button>
                  <div class="modal fade" id="modal-Bucket0-Area">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Area Bucket 0 Collection</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="row">
                          <?php
                          $b = 0;
                            for($i = 1; $i <= count($output_bucket_nol_area); $i++)
                          {?>
                          <div class="col-md-6">
                            <div class="card">
                              <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3"><?php echo 'Bucket '.$output_bucket_nol_area[$b]->kode_area;?></h3>
                              </div><!-- /.card-header -->
                              <div class="card-body">
                                <div id="BUCKET_0_AREA_<?php echo $b;?>" style="width:400px;height:400px"></div>
                                 <button type="button" class="btn btn-md btn-danger col-12" data-toggle="modal" data-target="#modal-bucket0-cabang-<?php echo $output_bucket_nol_area[$b]->kode_area;?>">Tampilkan Area</button>
                                  <div class="modal fade cabang" id="modal-bucket0-cabang-<?php echo $output_bucket_nol_area[$b]->kode_area;?>">
                                    <div class="modal-dialog modal-xl">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Cabang Bucket 0 Collection</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <?php $url_bucket_nol_cabang = "http://103.234.254.186/riskcan/dashboard/kredit/kredit_controller/npl_console_cabang";
                                              $post_bucket_nol_cabang[$b] = array(
                                                'api'=>'Y',
                                                 'kode_area'=>$output_bucket_nol_area[$b]->kode_area
                                              );
                                              $ch_bucket_nol_cabang = curl_init();
                                              curl_setopt($ch_bucket_nol_cabang, CURLOPT_URL, $url_bucket_nol_cabang);
                                              curl_setopt($ch_bucket_nol_cabang, CURLOPT_HEADER, 0);
                                              curl_setopt($ch_bucket_nol_cabang, CURLOPT_RETURNTRANSFER, 1);
                                              curl_setopt($ch_bucket_nol_cabang, CURLOPT_POST, count($post_bucket_nol_cabang[$b]));
                                              curl_setopt($ch_bucket_nol_cabang, CURLOPT_POSTFIELDS, $post_bucket_nol_cabang[$b]);
                                              $output_bucket_nol_cabang = curl_exec($ch_bucket_nol_cabang);
                                              curl_close($ch_bucket_nol_cabang);
                                              $data_bucket_nol_cabang = json_decode($output_bucket_nol_cabang);
                                               // echo count($data_cabang);
                                               $cab_arr = 0;
                                               for($cabang = 1; $cabang <= count($data_bucket_nol_cabang); $cabang++){
                                                  echo '
                                                  
                                                    <div class="card">
                                                      <div class="card-header d-flex p-0"><h3 class="card-title p-3">'.$data_bucket_nol_cabang[$cab_arr]->nama_area_kerja.'</h3></div>
                                                      <div class="card-body">
                                                        <div id="BUCKET0_AREA_'.$b.'_CABANG_'.$cab_arr.'" style="width:500px;height:500px"></div>
                                                      </div>
                                                    </div>
                                                 
                                                  ';
                                                  $cab_arr++;
                                               }
                                            ?>
                                             </div>
                                        </div>
                                      </div>
                                    </div>

                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div id="bucket_roll" style="height: 300px; width: 100%;"></div>
                                <button type="button" class="btn btn-md btn-danger col-4" id="btn_bucket_roll_area" data-toggle="modal">Tampilkan Area</button>
                                <button type="button" class="btn btn-md btn-danger col-6" id="btn_compare_roll" data-toggle="modal">Compare Per 3 Bulan</button>
                                <div id="div_bucket_roll_area"></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-6 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Bucket Roll 3 Month</h3>
                                <div class="card-tools">                                 
                                    <button type="button" class="btn btn-box-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="Roll_Bucket_3month" style="height: 300px; width: 100%;"></div>

                                  </div>
                              </div>
                            </div>
                          </div>
                          <?php $b++;} ?>  
                          </div>
                        </div>
                    </div> -->
                </div>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
<div id="modal-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-1"></div>
    </div>
</div>

<div id="modal-1-list" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-1-list" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-1-list"></div>
    </div>
</div>

<div id="modal-2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-2" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-2"></div>
    </div>
</div>
<div id="modal-2-list" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-2-list" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-2-list"></div>
    </div>
</div>

<div id="modal-3" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-3" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-3"></div>
    </div>
</div>

<?php $this->view('master/collection/dashboard_collection_js.php'); ?>
<script type="text/javascript">

$('#NPL_AREA').click(function(){
    var date_npl = $('input[name="date_npl_console"]').val();
    $.ajax({  
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_npl_console",
        type:"POST",
        data:{
            'api': 'Y',
            'tgl': date_npl
        },
    beforeSend: function() {
        $('#modal-1').modal('show');
        $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
    },
    success: function(response)
    {
        $('.modal-1').html(response);
        $('.title-chart-area').text('NPL AREA');

    },
    error: function()
    {
        alert('gagal');
    }
    });
});

$('#btn_compare_npl').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_npl_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-3').html(response);
            $('.title-chart-area').text('Compare NPL');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

$('#btn_0ns_area').click(function(){
    var date_0ns = $('input[name="date_0ns_console"]').val();
    $.ajax({  
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_0ns_console",
        type:"POST",
        data:{
            'api': 'Y',
            'tgl': date_0ns
        },
        beforeSend: function() {
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
        $('.modal-1').html(response);
        $('.title-chart-area').text('Bucket 0 NS AREA');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

$('#btn_compare_0ns').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_ns0_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
        $('.modal-3').html(response);
        $('.title-chart-area').text('Compare Bucket 0 NS');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

$('#btn_compare_0_all').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_0_all_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
        $('.modal-3').html(response);
        $('.title-chart-area').text('Compare Bucket 0 ALL');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

  $('#btn_Bucket_0_Area').click(function(){
    var date_bucket0_all = $('input[name="date_0ns_console"]').val();
    $.ajax({  
      url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_bucket0_all_console",
      type:"POST",
      data:{
        'api': 'Y',
        'tgl': date_bucket0_all
      },
      beforeSend: function() {
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
      success: function(response)
      {
       $('.modal-1').html(response);
        $('.title-chart-area').text('Bucket 0 ALL AREA');

      },
      error: function()
      {
        alert('gagal');
      }
    });
  });

  $('#btn_fid-compre_area').click(function(){
    var date_fid_compre = $('input[name="date-fid-compre"]').val();
    $.ajax({  
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_fid_compre_console",
        type:"POST",
        data:{
            'api': 'Y',
            'tgl': date_fid_compre
        },
        beforeSend: function() {
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-1').html(response);
            $('.title-chart-area').text('FID COMPRE AREA');
        },
      error: function()
      {
        alert('gagal');
      }
    });
  });

  $('#btn_compare_fid_compre').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_fid_compre_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-3').html(response);
            $('.title-chart-area').text('Compare FID Compre');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

  $('#btn_fid-ever_area').click(function(){
    var date_fid_ever = $('input[name="date-fid-ever"]').val();
    $.ajax({  
      url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_fid_ever_console",
      type:"POST",
      data:{
        'api': 'Y',
        'tgl': date_fid_ever
      },
      beforeSend: function() {
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-1').html(response);
            $('.title-chart-area').text('FID EVER AREA');
        },
      error: function()
      {
        alert('gagal');
      }
    });
  });

$('#btn_compare_fid_ever').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_fid_ever_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-3').html(response);
            $('.title-chart-area').text('Compare FID Ever');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

$('#btn_compare_fid_ever').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_fid_ever_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-3').html(response);
            $('.title-chart-area').text('Compare FID Ever');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});


  $('#btn_current_rasio_area').click(function(){
    var date_current_rasio = $('input[name="date-current-ratio"]').val();
    $.ajax({  
      url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_current_ratio_console",
      type:"POST",
      data:{
        'api': 'Y',
        'tgl': date_current_rasio
      },
      beforeSend: function() {
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-1').html(response);
            $('.title-chart-area').text('CURRENT RATIO AREA');
        },
      error: function()
      {
        alert('gagal');
      }
    });
  });

$('#btn_compare_current_ratio').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_current_ratio_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-3').html(response);
            $('.title-chart-area').text('Compare Current Ratio');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

$('#btn_deliquency_area').click(function(){
    var date_deliquency = $('input[name="date_deliquency"]').val();
    $.ajax({  
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_deliquency_console",
        type:"POST",
        data:{
            'api': 'Y',
            'tgl': date_deliquency
        },
        beforeSend: function() {
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-1').html(response);
            $('.title-chart-area').text('DELIQUENCY AREA');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

$('#btn_compare_deliquency').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_deliquency_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-3').html(response);
            $('.title-chart-area').text('Compare deliquency');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});


  $('#btn_bucket_roll_area').click(function(){
    var date_roll_console = $('input[name="date_roll_console"]').val();
    $.ajax({  
      url: "<?php echo base_url();?>modal_bootstrap_controller/modal_area_bucket_roll_console",
      type:"POST",
      data:{
        'api': 'Y',
        'tgl': date_roll_console
      },
      beforeSend: function() {
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-1').html(response);
            $('.title-chart-area').text('FID COMPRE AREA');
        },
      error: function()
      {
        alert('gagal');
      }
    });
  });

$('#btn_compare_roll').click(function(){
    $.ajax({
        url: "<?php echo base_url();?>modal_bootstrap_controller/modal_roll_3month",
        beforeSend: function() {
            $('#modal-3').modal('show');
            $('.modal-3').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response)
        {
            $('.modal-3').html(response);
            $('.title-chart-area').text('Compare Roll');
        },
        error: function()
        {
            alert('gagal');
        }
    });
});

$('#preview_list_npl_console').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_npl_console";

    $.ajax({
        url      : url,
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        }
    });
});

$('#preview_list_0ns_console').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_0ns_console";

    $.ajax({
        url      : url,
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        }
    });
});

$('#preview_list_0_all_console').click(function(){
    var date = $('input[name="date_0_all_console"]').val();
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_0_all_console";
    var data = {
    
    'tgl' : date
    
  };
    $.ajax({
        url      : url,
        data     : data,
        type     : "POST",
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        }
    });
});

$('#preview_list_fid_compre_console').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_fid_compre_console";
    $.ajax({
        url      : url,
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        }
    });
});

$('#preview_list_fid_ever_console').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_fid_ever_console";
    $.ajax({
        url      : url,
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        }
    });
});

$('#preview_list_current_ratio_console').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_current_ratio_console";
    $.ajax({
        url      : url,
        data     : {
            'tgl' : $('input[name="date-current-ratio"]').val()
        },
        type    : "POST",
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        }
    });
});

$('#preview_list_deliquency_console').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_deliquency_console";

    $.ajax({
        url      : url,
        data     : {
            'tgl' : $('input[name="date_deliquency"]').val()
        },
        type : "POST",
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
             var errorMessage = xhr.status + ': ' + xhr.statusText
             alert('Error - ' + errorMessage);
        }
    });
});

$('#preview_list_bucket_roll_console').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_bucket_roll_console";

    $.ajax({
        url      : url,
        data     : {
            'tgl' : $('input[name="date_roll_console"]').val()
        },
        type : "POST",
        beforeSend: function(){
            $('#modal-1').modal('show');
            $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-1').html(response);
        },
        error: function(xhr, status, error){
             var errorMessage = xhr.status + ': ' + xhr.statusText
             alert('Error - ' + errorMessage);
        }
    });
});

function bucket_roll_console_export() {
    var data_tgl = $('input[name="date_roll_console"]').val();
    var winURL        = "<?php echo base_url('modal_bootstrap_controller/bucket_roll_console_export') ?>";
    var winName       = "LAPORAN";
    var windowoption  = 'toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,height=350px, width=350px';

    var input=[];
    input.push("<input type='hidden' name='tgl' value='"+data_tgl+"'>");


    $('<form/>').css({'position':'relative'}).attr({'id':'frmprint','method':'post', 'action':winURL, 'target':winName})
       .html(input.join(''))
       .appendTo($('body'));
    }
    <?php $this->view('master/collection/dashboard_collection_js.php'); ?>


