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
                    <h1>Data Pengajuan Restruktur</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengajuan Restruktur</li>
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
                        <div class="box-body table-responsive no-padding">
                            <button class="btn btn-primary tambah" id="modal_pengajuan" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="table_pengajuan_lpdk" class="table table-bordered table-hover table-sm" style="white-space: nowrap; width: 100%;">
                                <thead style="font-size: 12px" class="bg-danger">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Area
                                        </th>
                                        <th>
                                            No App
                                        </th>
                                        <th>
                                            Tanggal Pengajuan
                                        </th>
                                        <th>
                                            No Rekening
                                        </th>
                                        <th>
                                            Nama Nasabah
                                        </th>
                                        <th>
                                            Plafon Awal
                                        </th>
                                        <th>
                                            Tenor Awal
                                        </th>
                                        <th>
                                            Baki Debet
                                        </th>
                                        <th>
                                            Angsuran
                                        </th>
                                        <th>
                                            FT
                                        </th>
                                        <th>
                                            Ket Nasabah
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 12px" id="data_pengajuan_restruktur">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade in" id="modal_tambah_pengajuan_lpdk" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pengajuan LPDK</h5>
                <button type="button" class="close" data-dismiss="modal" style="color: #ff0c17" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height:500px; overflow-y:scroll">
                <form id="form_pengajuan">
                    <input type="hidden" name="id_trans_so" id="id_trans_so">
                    <input type="hidden" value="" name="status_edit" id="status_edit">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <small font-weight: 700;>Area Kerja :</small>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="area_kerja_p" value="" class="form-control form-control-sm" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <small font-weight: 700;>Nama SO :</small>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="nama_so_p" value="" class="form-control form-control-sm" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <small font-weight: 700;>Asal Data :</small>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="asal_data_p" class="form-control form-control-sm" readonly="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <small font-weight: 700;>Nama Marketing:</small>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="nama_mb_p" class="form-control form-control-sm" readonly="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <small font-weight: 700;>Plafon :</small>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="plafon_p" class="form-control form-control-sm" readonly="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <small font-weight: 700;>Tenor :</small>
                                </div>
                                <div class="col-md-2">
                                    <input type="text" name="tenor_p" class="form-control form-control-sm" readonly="">
                                </div>
                                <small>Bulan</small>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Rincian Pengajuan LPDK</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-primary card-outline card-outline-tabs" style="border-top: 3px solid #dc3545;">
                                        <div class="card-header p-0 border-bottom-0">
                                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Data Cadeb</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-three-penjamin-tab" data-toggle="pill" href="#custom-tabs-three-penjamin" role="tab" aria-controls="custom-tabs-three-penjamin" aria-selected="false">Data Penjamin</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Kronologis</a>
                                                </li>
                                                <li class="nav-item" id="lamp_data_nasabah">
                                                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Lamp Data Nasabah</a>
                                                </li>
                                                <li class="nav-item" id="lamp_data_jaminan">
                                                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Lamp Data Jaminan</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <small style="font-weight: 700;">Nama Cadeb :</small>
                                                                <div class="input-group">
                                                                    <input type="text" name="nama_cadeb_p" class="form-control" onkeyup="this.value = this.value.toUpperCase()" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <small style="font-weight: 700;">Status Pernikahan :</small>
                                                                <select name="status_nikah_p" id="status_nikah_p" class="form-control select2 select2-danger" style="width: 100%;" disabled>
                                                                    <option value="">--Pilih--</option>
                                                                    <option id="single_p" value="Single">Single</option>
                                                                    <option id="menikah_p" value="Menikah">Menikah</option>
                                                                    <option id="janda_duda_p" value="Janda/Duda">Janda/Duda</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <small style="font-weight: 700;">Nama Pasangan :</small>
                                                                <div class="input-group">
                                                                    <input type="text" name="nama_pasangan_p" class="form-control" onkeyup="this.value = this.value.toUpperCase()" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <small style="font-weight: 700;">Nama Produk Kredit :</small>
                                                                <div class="input-group">
                                                                    <select name="nama_produk_kredit_p" id="nama_produk_kredit_p" class="form-control select2 select2-danger" style="width: 100%;" disabled>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <small style="font-weight: 700;">Alamat KTP sama dengan alamat jaminan :</small>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <input type="radio" value="TIDAK" id="alamat_tidak_sama_jaminan" name="alamat_ktp_vs_jaminan"> <small>TIDAK</small>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="radio" value="YA" id="alamat_ktp_sama_jaminan" name="alamat_ktp_vs_jaminan"> <small>YA</small>
                                                                    </div>
                                                                </div>
                                                                <div id="penyimpangan_optional"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                                                    <div class="row">
                                                        <div class="box-body table-responsive no-padding">
                                                            <table class="table table-bordered table-hover table-sm" style="min-width: 1000px">
                                                                <thead style="font-size: 12px" class="bg-danger">
                                                                    <tr>
                                                                        <th id="aksi_jaminan">
                                                                            Aksi
                                                                        </th>
                                                                        <th>
                                                                            Jaminan
                                                                        </th>
                                                                        <th>
                                                                            No Sertifikat
                                                                        </th>
                                                                        <th>
                                                                            Nama Pemilik Sertifikat
                                                                        </th>
                                                                        <th>
                                                                            Nama Pasangan Pemilik Sertifikat
                                                                        </th>
                                                                        <th>
                                                                            Hubungan Cadeb
                                                                        </th>
                                                                        <th>
                                                                            Tanggal SHGB
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="data_jaminan_sertifikat" style="font-size: 12px">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <small style="font-weight: 700;">Akta Notaris (Yang Akan Dibuat) :</small>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="SKMHT" id="skmht" name="akta_notaris[]"> <small>SKMHT</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="APHT" id="apht" name="akta_notaris[]"> <small>APHT</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="Cabut Roya" id="cabut_roya" name="akta_notaris[]"> <small>Cabut Roya</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="Akta Jual Beli" id="akta_jual_beli" name="akta_notaris[]"> <small>Akta Jual Beli</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="Balik Nama Waris" id="balik_nama_waris" name="akta_notaris[]"> <small>Balik Nama Waris</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="Peningkatan Hak" id="peningkatan_hak" name="akta_notaris[]"> <small>Peningkatan Hak</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="Adendum" id="adendum" name="akta_notaris[]"> <small>Adendum</small>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <input type="checkbox" value="Lain-Lain" id="lain_lain_notaris" name="akta_notaris[]"> <small>Lain-Lain</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" id="form_notes_lain2">
                                                            <div class="form-group row">
                                                                <div class="col-md-2">
                                                                    <small font-weight: 700;>Notes Lain-lain :</small>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <textarea style="width:100%" name="notes_lain2"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">KTP Debitur</small>
                                                                <label for="lamp_ktp_deb">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_ktp_debitur">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_ktp">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4" id="form_ktp_pasangan_deb">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">KTP Pasangan</small>
                                                                <label for="lamp_ktp_pas">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_ktp_pas">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_ktp_pas">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4" id="form_ktp_pasangan_deb">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">KTP Penjamin</small>
                                                                <label for="lamp_ktp_pen">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" id="tampil_modal_ktp_penjamin">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_ktp_pen">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4" id="form_ktp_pasangan_deb">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Buku Nikah Penjamin</small>
                                                                <label for="lamp_ktp_pas">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" id="tampil_modal_buku_nikah_penjamin">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_buku_nikah_pen">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4" id="form_ktp_pemilik_sertifikat">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">KTP Pemilik Sertifikat</small>
                                                                <label for="lamp_ktp_pem_sertifikat">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" id="tampil_modal_ktp_pem_sertifikat">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_ktp_pem_sertifikat">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4" id="form_ktp_pasangan_pemilik_sertifikat">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">KTP Pasangan Pemilik Sertifikat</small>
                                                                <label for="lamp_ktp_pas_pem_sertifikat">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" id="tampil_modal_ktp_pas_pem_sertifikat">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_ktp_pas_pem_sertifikat">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Kartu Keluarga</small>
                                                                <label for="lamp_kk">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_kk">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_kk">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">NPWP</small>
                                                                <label for="lamp_npwp">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_npwp">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_npwp">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Surat Nikah</small>
                                                                <label for="lamp_surat_nikah">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_surat_nikah">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_surat_nikah">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Surat Cerai</small>
                                                                <label for="lamp_surat_cerai">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_surat_cerai">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_surat_cerai">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Surat Lahir</small>
                                                                <label for="lamp_surat_lahir">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_surat_lahir">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_surat_lahir">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Surat Kematian</small>
                                                                <label for="lamp_surat_kematian">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_surat_kematian">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_surat_kematian">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Surat Ket Desa/PM1/PM2</small>
                                                                <label for="lamp_surat_ket_desa">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_surat_ket_desa">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_surat_ket_desa">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-three-penjamin" role="tabpanel" aria-labelledby="custom-tabs-three-penjamin-tab">
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered table-sm" style="white-space: nowrap;">
                                                                <thead style="font-size: 12px" class="bg-danger">
                                                                    <tr>
                                                                        <th id="aksi_penjamin">
                                                                            Aksi
                                                                        </th>
                                                                        <th>
                                                                            Nama Penjamin
                                                                        </th>
                                                                        <th>
                                                                            Nama Pasangan Penjamin
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="data_penjamin" style="font-size: 12px">
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Sertifikat</small>
                                                                <label for="lamp_sertifikat">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_sertifikat">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_sertifikat">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">PBB</small>
                                                                <label for="lamp_pbb">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_pbb">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_pbb">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">IMB</small>
                                                                <label for="lamp_imb">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_imb">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_imb">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">AJB/PPJB</small>
                                                                <label for="lamp_ajb_ppjb">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_ajb">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_ajb_ppjb">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Ahli Waris</small>
                                                                <label for="lamp_ahli_waris">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_ahli_waris">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_ahli_waris">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <div class="image-upload">
                                                                <small style="font-weight: 700;">Akta Pengakuan Hak Bersama/Akta Hibah</small>
                                                                <label for="lamp_akta_hibah">
                                                                    <img src="<?php echo base_url('assets/dist/img/upload.png') ?>" data-toggle="modal" data-target="#modal_akt_hibah">
                                                                </label>
                                                            </div>
                                                            <div class="form-group" id="file_akta_hibah">
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
                    <div id="btn_simpan_pengajuan">
                    </div>
                    <div class="form-group">
                        <div class="btn_simpan_pengajuan">
                            <button id="simpan_pengajuan" type="submit" class="btn btn-primary btn-sm submit button" style="float: right;">Simpan</button>
                            <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger btn-sm button" style="float: right; margin-right: 4px">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<form id="form_tambah_ktp_deb">

    <div class="modal fade rotate" id="modal_ktp_debitur">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <input type="hidden" id="id_debitur_ktp" name="id_debitur_ktp">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload KTP Debitur</label>
                        <div class="input-group">
                            <input type="file" id="lamp_ktp_deb" name="lamp_ktp_deb" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_ktp_pas">
    <input type="hidden" id="id_debitur_ktp_pas" name="id_debitur_ktp_pas">
    <div class="modal fade rotate" id="modal_ktp_pas">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload KTP Pasangan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_pas" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_ktp_pen">
    <input type="hidden" id="id_debitur_ktp_pen" name="id_debitur_ktp_pen">
    <div class="modal fade rotate" id="modal_ktp_pen">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Penjamin<span class="required_notification">*</span></label>
                        <select name="select_nama_penjamin" id="select_nama_penjamin" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload KTP Penjamin</label>
                        <div class="input-group">
                            <input type="file" id="lamp_ktp_pen_1" name="lamp_ktp_pen" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_buku_nikah_pen">
    <input type="hidden" id="id_debitur_buku_nikah_pen" name="id_debitur_buku_nikah_pen">
    <div class="modal fade rotate" id="modal_buku_nikah_pen">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Penjamin<span class="required_notification">*</span></label>
                        <select name="select_nama_penjamin_buk_nik" id="select_nama_penjamin_buk_nik" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Buku Nikah Penjamin</label>
                        <div class="input-group">
                            <input type="file" id="lamp_buku_nikah_pen" name="lamp_buku_nikah_pen" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_ktp_pem_sertifikat">
    <input type="hidden" id="id_debitur_ktp_pem_sertifikat" name="id_debitur_ktp_pem_sertifikat">
    <div class="modal fade rotate" id="modal_ktp_pem_sertifikat">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_ktp" id="select_nama_pemilik_sertifikat_ktp" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload KTP Pemilik Sertifikat</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_pem_sertifikat" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_ktp_pas_pem_sertifikat">
    <input type="hidden" id="id_debitur_ktp_pas_pem_sertifikat" name="id_debitur_ktp_pas_pem_sertifikat">
    <div class="modal fade rotate" id="modal_ktp_pas_pem_sertifikat">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_ktp_pas" id="select_nama_pemilik_sertifikat_ktp_pas" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload KTP Pasangan Pemilik Sertifikat</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_pas_pem_sertifikat" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_kk">
    <input type="hidden" id="id_debitur_kk" name="id_debitur_kk">
    <div class="modal fade rotate" id="modal_kk">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Kartu Keluarga</label>
                        <div class="input-group">
                            <input type="file" name="lamp_kk" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_npwp">
    <input type="hidden" id="id_debitur_npwp" name="id_debitur_npwp">
    <div class="modal fade rotate" id="modal_npwp">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload NPWP</label>
                        <div class="input-group">
                            <input type="file" id="lamp_npwp" name="lamp_npwp" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_surat_nikah">
    <input type="hidden" id="id_debitur_nikah" name="id_debitur_nikah">
    <div class="modal fade rotate" id="modal_surat_nikah">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Surat Nikah</label>
                        <div class="input-group">
                            <input type="file" name="lamp_surat_nikah" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_surat_cerai">
    <input type="hidden" id="id_debitur_cerai" name="id_debitur_cerai">
    <div class="modal fade rotate" id="modal_surat_cerai">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Surat Cerai</label>
                        <div class="input-group">
                            <input type="file" name="lamp_surat_cerai" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_surat_lahir">
    <input type="hidden" id="id_debitur_lahir" name="id_debitur_lahir">
    <div class="modal fade rotate" id="modal_surat_lahir">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Surat Lahir</label>
                        <div class="input-group">
                            <input type="file" name="lamp_surat_lahir" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_surat_kematian">
    <input type="hidden" id="id_debitur_kematian" name="id_debitur_kematian">
    <div class="modal fade rotate" id="modal_surat_kematian">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Surat Kematian</label>
                        <div class="input-group">
                            <input type="file" name="lamp_surat_kematian" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_surat_ket_desa">
    <input type="hidden" id="id_debitur_ket_desa" name="id_debitur_ket_desa">
    <div class="modal fade rotate" id="modal_surat_ket_desa">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Surat Ket Desa/PM1/PM2</label>
                        <div class="input-group">
                            <input type="file" name="lamp_surat_ket_desa" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_sertifikat">
    <input type="hidden" id="id_debitur_sertifikat" name="id_debitur_sertifikat">
    <div class="modal fade rotate" id="modal_sertifikat">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_sertifikat" id="select_nama_pemilik_sertifikat_sertifikat" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tambah Sertifikat</label>
                        <div class="input-group">
                            <input type="file" name="lamp_sertifikat" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_pbb">
    <input type="hidden" id="id_debitur_pbb" name="id_debitur_pbb">
    <div class="modal fade rotate" id="modal_pbb">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_pbb" id="select_nama_pemilik_sertifikat_pbb" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tambah PBB</label>
                        <div class="input-group">
                            <input type="file" name="lamp_pbb" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_imb">
    <input type="hidden" id="id_debitur_imb" name="id_debitur_imb">
    <div class="modal fade rotate" id="modal_imb">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_imb" id="select_nama_pemilik_sertifikat_imb" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tambah IMB</label>
                        <div class="input-group">
                            <input type="file" name="lamp_imb" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_ajb">
    <input type="hidden" id="id_debitur_ajb" name="id_debitur_ajb">
    <div class="modal fade rotate" id="modal_ajb">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_ajb" id="select_nama_pemilik_sertifikat_ajb" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tambah AJB/PPJB</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ajb" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_ahli_waris">
    <input type="hidden" id="id_debitur_ahli_waris" name="id_debitur_ahli_waris">
    <div class="modal fade rotate" id="modal_ahli_waris">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_ahli_waris" id="select_nama_pemilik_sertifikat_ahli_waris" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tambah Ahli Waris</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ahli_waris" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_tambah_akta_hibah">
    <input type="hidden" id="id_debitur_akta_hibah" name="id_debitur_akta_hibah">
    <div class="modal fade rotate" id="modal_akt_hibah">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                        <select name="select_nama_pemilik_sertifikat_akta_hibah" id="select_nama_pemilik_sertifikat_akta_hibah" class="form-control select2 select2-danger" style="width: 100%;">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Tambah Akta Hibah</label>
                        <div class="input-group">
                            <input type="file" name="lamp_akta_hibah" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_note">
    <input type="hidden" id="id_trans_so_note" name="id_trans_so_note">
    <div class="modal fade rotate" id="modal_note">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <h4 for="exampleInputFile">Note</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" id="note_progress1" name="note_progress1">
                        <div class="input-group">
                            <textarea type="file" name="notes_counter" class="form-control" style="height: 188px"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>



<div class="modal fade in" id="modal_input_penjamin" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Penjamin</h5>
                <button type="button" class="close close_deb" data-dismiss="modal" style="color: #ff0c17" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_penjamin">
                <div class="modal-body">
                    <input type="hidden" name="id_penjamin" id="id_penjamin">
                    <input type="hidden" name="id_penjamin_so" id="id_penjamin_so">
                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>Nama Penjamin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</small>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="edit_nama_penjamin" value="" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>Nama Pasangan Penjamin :</small>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="edit_nama_pas_penjamin" value="" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group" style="height:0px;">
                        <button type="submit" class="btn btn-primary btn-sm submit" style="float: right;">Simpan</button>
                        <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger btn-sm" style="float: right; margin-right: 4px">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade in" id="modal_input_jaminan" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input Jaminan</h5>
                <button type="button" class="close close_deb" data-dismiss="modal" style="color: #ff0c17" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_jaminan">
                <div class="modal-body">
                    <input type="hidden" name="id_jaminan" id="id_jaminan">
                    <input type="hidden" name="id_jaminan_so" id="id_jaminan_so">
                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>Jaminan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</small>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control form-control-sm" id="edit_jaminan" name="edit_jaminan">
                                <option id="edit_pilih_jaminan" value="">--Pilih--</option>
                                <option id="edit_shm" value="SHM">SHM</option>
                                <option id="edit_shgb" value="SHGB">SHGB</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>No Sertifikat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</small>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="edit_no_sertifikat" value="" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>Nama Pemilik Sertifikat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</small>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="edit_nama_pemilik_sertifikat" value="" onkeyup="this.value = this.value.toUpperCase()" class="form-control form-control-sm">
                            <input type="Radio" value="Hidup" id="status_pemilik_hidup" name="edit_status_hidup[]"> <small>Hidup</small>
                            <input type="Radio" value="Meninggal Dunia" id="status_pemilik_meninggal" name="edit_status_hidup[]"> <small>Meninggal Dunia</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>Nama Pas Pemilik Sertifikat :</small>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="edit_nama_pas_pemilik_sertifikat" value="" onkeyup="this.value = this.value.toUpperCase()" class="form-control form-control-sm">
                            <input type="Radio" value="Hidup" id="status_pas_pemilik_hidup" name="edit_status_hidup_pas[]"> <small>Hidup</small>
                            <input type="Radio" value="Meninggal Dunia" id="status_pas_pemilik_meninggal" name="edit_status_hidup_pas[]"> <small>Meninggal Dunia</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>Hubungan Cadeb &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</small>
                        </div>
                        <div class="col-md-7">
                            <select class="form-control form-control-sm" id="edit_hubungan_cadeb" name="edit_hubungan_cadeb">
                                <option id="edit_hub_pilih" value="">--Pilih--</option>
                                <option id="edit_hub_pas" value="Pasangan">Pasangan</option>
                                <option id="edit_hub_ibu" value="Ibu">Ibu</option>
                                <option id="edit_hub_bapak" value="Bapak">Bapak</option>
                                <option id="edit_hub_anak" value="Anak">Anak</option>
                                <option id="edit_hub_saudara_kandung" value="Saudara Kandung">Saudara Kandung</option>
                                <option id="edit_hub_orang_lain" value="Orang Lain">Orang Lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <small font-weight: 700;>Tanggal SHGB &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</small>
                        </div>
                        <div class="col-md-7">
                            <input type="text" name="edit_tgl_shgb" value="" class="datepicker-here form-control form-control-sm" data-language="en" data-date-format="dd-mm-yyyy">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group" style="height:0px;">
                        <button type="submit" class="btn btn-primary btn-sm submit" style="float: right;">Simpan</button>
                        <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger btn-sm" style="float: right; margin-right: 4px">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade rotate" id="modal_note_cancel">
    <div class="modal-dialog">
        <form id="form_note_cancel">
            <input type="hidden" id="id_trans_so_note_cancel" name="id_trans_so_note_cancel">
            <div class="modal-content sm">
                <div class="modal-header">
                    <h4 for="exampleInputFile">Note Cancel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <textarea type="text" id="notes_cancel" name="notes_cancel" class="form-control" style="height: 188px"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="button" id="simpan_cancel" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>
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