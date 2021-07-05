<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>
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
						<!-- <img src="<?= base_url() ?>assets/dist/img/qualification.svg" width="100%"> -->
					</div>
					<div class="col-md-9">
						<div class="box-body table-responsive no-padding">
							
								<form class="form-filter" id="form_filter">
<div class="input-group mb-5">
									<input type="text" class="form-control" style="width:200px" placeholder="Date started" id="datepicker1" data-language="en" data-date-format="yyyy-mm-dd" name="start">
									<div class="text-alert"></div>
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
									</div>
									<input type="text" class="form-control" style="width:200px" placeholder="Date ended" id="datepicker2" data-language="en" data-date-format="yyyy-mm-dd" name="end">
									<div class="text-alert"></div>

									<div class="text-alert"></div>
									<div class="input-group-prepend">
										<button class="input-group-text btn-primary" type="submit"><i class="fa fa-location-arrow"></i></button>
									</div>
							</div>
							</form>
						</div>
					</div>
					<table id="table_proses" class="table table-bordered table-hover table-sm" style="font-size: 12px">
						<thead style="font-size: 12px" class="bg-danger">
							<tr>
								<th>
									Tanggal Transaksi
								</th>
<th>
									No. Aplikasi
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
									Kolektabilitas
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
<script src="<?= base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/Credit_Scoring/credit_scoring_js.php'); ?>