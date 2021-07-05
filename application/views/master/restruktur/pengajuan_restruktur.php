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
                                        <!-- <th>
                                            Aksi
                                        </th> -->
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

<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

<script>
    show_data_pengajuan();
    //function show all product
    function show_data_pengajuan() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo site_url('Restruktur') ?>',
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td>' + data[i].area + '</td>' +
                        '<td>' + data[i].no_restruktur + '</td>' +
                        '<td>' + data[i].tgl_pengajuan + '</td>' +
                        '<td>' + data[i].no_rekening + '</td>' +
                        '<td>' + data[i].nama_nasabah + '</td>' +
                        '<td>' + data[i].plafon_awal + '</td>' +
                        '<td>' + data[i].tenor_awal + '</td>' +
                        '<td>' + data[i].baki_debet + '</td>' +
                        '<td>' + data[i].angsuran + '</td>' +
                        '<td>' + data[i].ft + '</td>' +
                        '<td>' + data[i].ket_nasabah + '</td>' +
                        '</tr>';
                }
                $('#data_pengajuan_restruktur').html(html);
            }
        });
    }
</script>