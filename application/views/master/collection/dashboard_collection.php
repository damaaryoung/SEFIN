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
          <div class="col-md-6">
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">NPL</h3>
              </div><!-- /.card-header -->
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
                                  </div>
                              </div>
                            </div>
                          </div>
                          <?php $b++;} ?>  
                          </div><!-- /.card-body -->
                        </div>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <?php $this->view('master/collection/dashboard_collection_js.php'); ?>

