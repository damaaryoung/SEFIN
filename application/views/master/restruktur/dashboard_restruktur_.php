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

<script src="<?php echo base_url('assets/plugins/code/highcharts.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/canvasJs/canvasjs.js') ?>"></script>
<!-- <script src="<?php echo base_url('assets/plugins/code/highcharts-3d.js') ?>"></script> -->
<script src="<?php echo base_url('assets/plugins/code/modules/exporting.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/modules/drilldown.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/modules/export-data.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/modules/accessibility.js') ?>"></script>
<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>

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
                    <!-- small box -->
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
                    <!-- small box -->
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
                    <!-- small box -->
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
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            KOMPOSISI NORMAL & RESTRUKTUR
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container"></div>
                                <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur"><span class="mr-2"><i class="fas fa-circle" style="color:#4d86bd"></i> Normal</span><span class="mr-2"><i class="fas fa-circle" style="color:#3d3d42"></i> Restruktur</span></div>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" onclick="modal_area_komposisi_normal_dan_restruktur()" class="btn btn-danger btn-block btn-sm">Tampilkan Area</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            MODEL RESTRUKTUR KREDIT By NOA
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            5 CABANG TERBESAR BY AMOUNT
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            5 CABANG TERBESAR BY NOA
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            AREA TERBESAR BY AMOUNT(Query for revision)
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            AREA TERBESAR BY NOA(Query for revision)
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            NOA RESTRUKTUR KREDIT BY PLAFON(Query for revision)
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container7"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            COLLECTION RASIO (Query for revision)
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container10"></div>
                                <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur"><span class="mr-2"><i class="fas fa-circle" style="color:#4d86bd"></i> Normal</span><span class="mr-2"><i class="fas fa-circle" style="color:#3d3d42"></i> Restruktur</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            CURRENT RASIO(Query for revision)
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container11"></div>
                                <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur"><span class="mr-2"><i class="fas fa-circle" style="color:#4d86bd"></i> Normal</span><span class="mr-2"><i class="fas fa-circle" style="color:#3d3d42"></i> Restruktur</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            NS RESTRUKTUR(Query for revision)
                        </div>
                        <div class="box-body">
                            <div id="canvas-holder">
                                <div id="container12"></div>
                                <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur"><span class="mr-2"><i class="fas fa-circle" style="color:#4d86bd"></i> Normal</span><span class="mr-2"><i class="fas fa-circle" style="color:#3d3d42"></i> Restruktur</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>

<div class="modal fade in " id="modal_komposisi_per_area" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Komposisi Per Area</h6>
                <button type="button" title="Tutup" data-dismiss="modal" aria-hidden="true" class="close" style="color: #ff0c17">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-header text-primary">
                                        <b>BANDUNG</b>
                                    </div>
                                    <div class="card-body">
                                        <div id="canvas-holder">
                                            <div id="container_bandung" style="height:327px;"></div>
                                            <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur" id="span_bandung">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-header text-primary">
                                        <b>BEKASI</b>
                                    </div>
                                    <div class="card-body">
                                        <div id="canvas-holder">
                                            <div id="container_bekasi" style="height:327px;"></div>
                                            <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur" id="span_bekasi"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-header text-primary">
                                        <b>BOGOR</b>
                                    </div>
                                    <div class="card-body">
                                        <div id="canvas-holder">
                                            <div id="container_bogor" style="height:327px;"></div>
                                            <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur" id="span_bogor"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-header text-primary">
                                        <b>CIREBON</b>
                                    </div>
                                    <div class="card-body">
                                        <div id="canvas-holder">
                                            <div id="container_cirebon" style="height:327px;"></div>
                                            <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur" id="span_cirebon"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-header text-primary">
                                        <b>KARAWANG</b>
                                    </div>
                                    <div class="card-body">
                                        <div id="canvas-holder">
                                            <div id="container_karawang" style="height:327px;"></div>
                                            <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur" id="span_karawang"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-header text-primary">
                                        <b>TANGERANG</b>
                                    </div>
                                    <div class="card-body">
                                        <div id="canvas-holder">
                                            <div id="container_tangerang" style="height:327px;"></div>
                                            <div class="mt-4 text-center small detail_komposisi_normal_dan_restruktur" id="span_tangerang"></div>
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
</div>


<div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="load_data">
            <div width='100%' class='text-center'>
                <i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>
                <a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>
<?php $this->view('master/restruktur/dashboard_restruktur_js.php'); ?>
