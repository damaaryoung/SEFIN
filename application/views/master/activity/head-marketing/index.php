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
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><img src="<?= base_url(); ?>assets/dist/img/monitor.svg" width="10%"> Activity Head Marketing</h1>
				</div>
				<div class="col-sm-6">
					<div class="float-sm-right" style="margin-top: 20px; margin-bottom: -20px">
						<div class="input-group mb-3">
							<select class="custom-select form template-selected-data" onchange="template();">
								<option value="so">Sales Officer</option>
								<option value="ao">Account Officer</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="callout callout-success">
			<div class="row" id="ao-data-filtered-selected" style="display: none;">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<button type="button" class="input-group-text btn-primary btn-ao"><i class="fas fa-plus" style="margin-right: 5px"></i>Tambah Assignment</button>
						</div>
						<select class="custom-select data-selected-view-ao" onchange="filter('ao');">
							<option value="SURVEY">Survey</option>
							<option value="VISIT%20CGC">Visit CGC</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row" id="so-data-filtered-selected" style="display: none;">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
							<button type="button" class="input-group-text btn-primary btn-so"><i class="fas fa-plus" style="margin-right: 5px"></i>Tambah Assignment</button>
						</div>
						<select class="custom-select data-selected-view-so" onchange="filter('so');">
							<option value="VISIT%20RO">Visit RO</option>
							<option value="MAINTAIN%20MB">Maintain MB</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row rendered-template"></div>
		</div>
	</section>
</div>

<!-- modal started -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="overflow: scroll !important;">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-body">
				<section id="html-rendered-form-data"></section>
			</div>
		</div>
	</div>
</div>
<!-- modal ended -->
<script src="<?= base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/activity/head-marketing/index_js.php'); ?>
<script>
console.log("<?php echo $this->session->userdata('SESSION_TOKEN');?>");
</script>
