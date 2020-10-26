<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
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
<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>

<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Marketing E-Reporting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Yang Belum Tersedia</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
    	<div class="row">
    		<div class="col-md">
    			<div class="card">
	                <div class="card-header">
	                    <h5>Report Marketing [Per Tahun] (Filter NOA, Amount, Target, Ratio, dan Baki Debet)</h5>
	                </div>
	                <div class="card-body">
	                    <div class="box-body table-responsive no-padding">
	                        <table id="table_pengajuan_lpdk" class="table table-bordered table-hover table-sm" style="white-space: nowrap; width: 100%;">
	                            <thead style="font-size: 12px" class="bg-danger">
	                            	<tr>
	                                    <th rowspan="2" style="text-align:center;">Area Kerja</th>
	                                    <th rowspan="2" style="text-align:center;" width="10%">Saldo Awal/(Baki debet)/Rp</th>
	                                    <th colspan="12" style="text-align:center;">2020 (Filter pertahun) </th>
	                                    <th rowspan="2">Total (Lending)</th>
	                                </tr>
	                                <tr>
	                                    <th>Januari</th>
	                                    <th>Februari</th>
	                                    <th>Maret</th>
	                                    <th>April</th>
	                                    <th>Mei</th>
	                                    <th>Juni</th>
	                                    <th>Juli</th>
	                                    <th>Agustus</th>
	                                    <th>September</th>
	                                    <th>Oktober</th>
	                                    <th>November</th>
	                                    <th>Desember</th>
	                                </tr>
	                            </thead>
	                            <tbody style="font-size: 12px" id="data_hari_kerja">
	                                <?php for ($i=0; $i <10 ; $i++) {?> 
	                                <tr>
	                                    <td>01/07/2020</td>
	                                    <td>1</td>
	                                    <td>3,3%</td>
	                                    <td>P1</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                    <td>20.000</td>
	                                </tr>
	                                <?php } ?>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
    		</div>
    	</div>
	    <div class="row">
	    	<div class="col-md-6">
	    		<div class="card">
	                <div class="card-header">
	                    <h5>Report Target & Achivement Lending (Filter perbulan)</h5>
	                </div>
	                <div class="card-body">
	                    <div class="box-body table-responsive no-padding">
	                        <table id="table_target" class="table table-bordered table-hover table-sm" style="font-size: 12px;white-space: nowrap; width: 100%;">
	                            <thead class="bg-danger">
	                                <tr>
	                                    <th colspan="5" style="text-align:center;">Lending</th>
	                                </tr>
	                                <tr>
	                                	<th style="text-align:center;">Area Kerja</th>
	                                	<th style="text-align:center;">NoA</th>
	                                	<th style="text-align:center;">Target (Rp)</th>
	                                	<th style="text-align:center;">Ach (Rp)</th>
	                                	<th style="text-align:center;">% Ach</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<!-- serverside rendered -->
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	    	</div>
	    	<div class="col-md-6">
	    		<div class="card">
	                <div class="card-header">
	                    <h5>Report Rekap LPDK (Filter perbulan)</h5>
	                </div>
	                <div class="card-body">
	                    <div class="box-body table-responsive no-padding">
	                        <table id="table_target" class="table table-bordered table-hover table-sm" style="font-size: 12px;white-space: nowrap; width: 100%;">
	                            <thead class="bg-danger">
	                                <tr>
	                                	<th style="text-align:center;">Area Kerja</th>
	                                	<th style="text-align:center;">NoA</th>
	                                	<th style="text-align:center;">Amount</th>
	                                </tr>
	                            </thead>
	                        </table>
	                    </div>
	                </div>
	            </div>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="card">
	                <div class="card-header">
	                    <h5>Report Lending by SoA (Filter perbulan)</h5>
	                </div>
	                <div class="card-body">
	                    <div class="box-body table-responsive no-padding">
	                        <table id="table_target" class="table table-bordered table-hover table-sm" style="font-size: 12px;white-space: nowrap; width: 100%;">
	                            <thead class="bg-danger">
	                                <tr>
	                                	<th style="text-align:center;" rowspan="2">Area Kerja</th>
	                                	<th style="text-align:center;" colspan="3">MB</th>
	                                	<th style="text-align:center;" colspan="3">Mitra Fintech</th>
	                                	<th style="text-align:center;" colspan="3">Repeat Order</th>
	                                	<th style="text-align:center;" colspan="3">Lain-lain</th>
	                                </tr>
	                                <tr>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>%</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>%</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>%</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>%</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<!-- serverside rendered -->
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="card">
	                <div class="card-header">
	                    <h5>Funnel Lending (Filter perbulan)</h5>
	                </div>
	                <div class="card-body">
	                    <div class="box-body table-responsive no-padding">
	                        <table id="table_target" class="table table-bordered table-hover table-sm" style="font-size: 12px;white-space: nowrap; width: 100%;">
	                            <thead class="bg-danger">
	                                <tr>
	                                	<th style="text-align:center;" rowspan="2">Area Kerja</th>
	                                	<th style="text-align:center;" colspan="2">Leads</th>
	                                	<th style="text-align:center;" colspan="2">Prospek</th>
	                                	<th style="text-align:center;" colspan="2">Rec.AO</th>
	                                	<th style="text-align:center;" colspan="2">Rec.CA</th>
	                                	<th style="text-align:center;" colspan="2">Rec.CA</th>
	                                	<th style="text-align:center;" colspan="2">Approval</th>
	                                	<th style="text-align:center;" colspan="2">Lending</th>
	                                </tr>
	                                <tr>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                	<th>NoA</th>
	                                	<th>Nominal</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<!-- serverside rendered -->
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	    	</div>
	    </div>

	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="card">
	                <div class="card-header">
	                    <h5>Report Lending Harian (Filter perbulan)</h5>
	                </div>
	                <div class="card-body">
	                    <div class="box-body table-responsive no-padding">
	                        <table id="table_target" class="table table-bordered table-hover table-sm" style="font-size: 12px;white-space: nowrap; width: 100%;">
	                            <thead class="bg-danger">
	                                <tr>
	                                	<th style="text-align:center;" rowspan="3">Kode Area Kerja</th>
	                                	<th style="text-align:center;" rowspan="3">Area Kerja</th>
	                                	<th style="text-align:center;" colspan="2">HK 1 </th>
	                                	<th style="text-align:center;" colspan="2">HK 2 </th>
	                                	<th style="text-align:center;" colspan="2">HK 3 </th>
	                                	<th style="text-align:center;" colspan="2">HK 4 </th>
	                                	<th style="text-align:center;" colspan="2">HK 5 </th>
	                                	<th style="text-align:center;" colspan="2">HK 6 </th>
	                                	<th style="text-align:center;" colspan="2">P 1 </th>
	                                </tr>
	                                <tr>
	                                	<th style="text-align:center;" colspan="2">tanggal </th>
	                                	<th style="text-align:center;" colspan="2">tanggal </th>
	                                	<th style="text-align:center;" colspan="2">tanggal </th>
	                                	<th style="text-align:center;" colspan="2">tanggal </th>
	                                	<th style="text-align:center;" colspan="2">tanggal </th>
	                                	<th style="text-align:center;" colspan="2">tanggal </th>
	                                	<th style="text-align:center;" colspan="2">periode </th>
	                                </tr>
	                                <tr>
	                                	<th style="text-align:center;">Noa </th>
	                                	<th style="text-align:center;">Nominal </th>
	                                	<th style="text-align:center;">Noa </th>
	                                	<th style="text-align:center;">Nominal </th>
	                                	<th style="text-align:center;">Noa </th>
	                                	<th style="text-align:center;">Nominal </th>
	                                	<th style="text-align:center;">Noa </th>
	                                	<th style="text-align:center;">Nominal </th>
	                                	<th style="text-align:center;">Noa </th>
	                                	<th style="text-align:center;">Nominal </th>
	                                	<th style="text-align:center;">Noa </th>
	                                	<th style="text-align:center;">Nominal </th>
	                                	<th style="text-align:center;">Noa </th>
	                                	<th style="text-align:center;">Nominal </th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<!-- serverside rendered -->
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	    	</div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="card">
	                <div class="card-header">
	                    <h5>Report Baki Debet</h5>
	                </div>
	                <div class="card-body">
	                    <div class="box-body table-responsive no-padding">
	                        <table id="table_target" class="table table-bordered table-hover table-sm" style="font-size: 12px;white-space: nowrap; width: 100%;">
	                            <thead class="bg-danger">
	                                <tr>
	                                	<th style="text-align:center;">Area Kerja</th>
	                                	<th style="text-align:center;">Baki Debet Awal Tahun</th>
	                                	<th style="text-align:center;">% Pertumbuhan Kredit vs Juli 2020</th>
	                                	<th style="text-align:center;">Baki Debet s/d 1 Juli 2020</th>
	                                	<th style="text-align:center;">Target Baki Debet Juli 2020</th>
	                                	<th style="text-align:center;">Baki Debet Now vs Target Juli 2020</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                            	<!-- serverside rendered -->
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	    	</div>
	    </div>
    </section>
</div>