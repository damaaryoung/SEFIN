<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Credit Scoring</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Credit Scoring</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="card">
            <div class="card-body">
            	<div class="row">
            		<div class="col-md-2">
            			<img src="<?= base_url() ?>assets/dist/img/qualification.svg" width="100%">
            		</div>
            		<div class="col-md-10">
            			<div class="box-body table-responsive no-padding">
		                    <table id="table_proses" class="table table-bordered table-hover table-sm" style="font-size: 12px">
		                        <thead style="font-size: 12px" class="bg-danger">
		                            <tr>
		                                <th>
		                                    No. Aplikasi
		                                </th>
		                                <th>
		                                    Tanggal Transaksi
		                                </th>
		                                <th>
		                                    Nama Debitur
		                                </th>
		                                <th>
		                                    Area
		                                </th>
		                                <th>
		                                    Cabang
		                                </th>
		                                <th>
		                                    Nama SO
		                                </th>
		                                <th>
		                                    Nama AO
		                                </th>
		                                <th>
		                                    Rekomendasi
		                                </th>
		                            </tr>
		                        </thead>
		                        <tbody id="data_credit_scoring" style="font-size: 12px">
		                        </tbody>
		                    </table>
		                </div>
            		</div>
            	</div>
            </div>
        </div>
    </section>
</div>

<?php $this->view('master/Credit_Scoring/credit_scoring_js.php'); ?>
