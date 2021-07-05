<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.min.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>CAA</h1>
                    <label>Credit Authority Approval</label>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Credit Authority Approval</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <?php if ($get_user['data']['divisi_id'] == 'CA' || $get_user['data']['divisi_id'] == 'IT') : ?>
                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-id="00" data-target="#modal_caa">Pengajuan CAA</button>
                                <?php endif ?>
                            </div>
                            <div class="col-md-9">
                                <?php if ($get_user['data']['kd_cabang'] == '00') : ?>
                                    <form class="form-filter" id="form_filter">
                                        <div class="input-group mb-5">
                                            <input type="text" class="form-control" style="width:200px" placeholder="Date started" id="datepicker1" data-language="en" data-date-format="dd-mm-yyyy" name="start">
                                            <div class="text-alert"></div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control" style="width:200px" placeholder="Date ended" id="datepicker2" data-language="en" data-date-format="dd-mm-yyyy" name="end">
                                            <div class="text-alert"></div>
                                            <select class="form-control select2 select2-danger" style="width:255px" name="nama_cabang" id="nama_cabang">
                                                <option value="SEMUA CABANG">SEMUA CABANG</option>
                                                <?php foreach ($cabang as $key => $value) { ?>
                                                    <option value="<?= $value->id ?>"><?= $value->nama ?></option>
                                                <?php } ?>
                                                <option>x</option>
                                            </select>
                                            <div class="text-alert"></div>
                                            <div class="input-group-prepend">
                                                <button class="input-group-text btn-primary" type="submit"><i class="fa fa-location-arrow"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="box-body table-responsive no-padding">
                            <table id="table_caa" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="10px"></th>
                                        <th>Nomor SO</th>
                                        <th>Cabang</th>
                                        <th>Nama Cadeb</th>
                                        <th>Plafon</th>
                                        <th>Tenor</th>
                                        <th>Rekomendasi AO</th>
                                        <th>Rekomendasi CA</th>
                                        <th>DSH</th>
                                        <!-- <th>DOO MGR</th> -->
                                        <th>AM</th>
                                        <th>CRM</th>
                                        <!-- <th>KEPATUHAN</th> -->
                                        <th>DIR BIS</th>
                                        <th>DIR RISK</th>
 					<th>KEPATUHAN</th>
                                        <th>DIRUT</th>
                                    </tr>
                                </thead>
                                <tbody id="data_table_caa" style="font-size: 13px" style="cursor:pointer">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade in" id="modal_caa" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl" style="max-width: 1285px;">
        <div class="modal-content" id="view_modal_caa"></div>
    </div>
</div>

<div class="modal fade in" id="modal_caa_add" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl" style="max-width: 1285px;">
        <div class="modal-content" id="view_modal_caa_add"></div>
    </div>
</div>

<div class="modal fade in" id="modal_trans_caa" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl" style="max-width: 1285px;">
        <div class="modal-content" id="view_modal_trans_caa"></div>
    </div>
</div>
<!-- jquery-validation -->
<script src="<?= base_url(); ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
<?php $this->view('master/caa/table_js.php'); ?>