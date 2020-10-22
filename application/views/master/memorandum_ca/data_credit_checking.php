<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>

<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Credit Analist</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Credit Analist</li>
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
                            <table id="table_ca" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Tanggal Transaksi
                                        </th>
                                        <th>
                                            No SO
                                        </th>
                                        <th>
                                            No Rev SO
                                        </th>
                                        <th>
                                            Nama Marketing
                                        </th>
                                        <th>
                                            Nama Debitur
                                        </th>
                                        <th>
                                            Cabang
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_creditchecking" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="modal_data_pengajuan">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Data Pengajuan Credit Checking</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <table id="table_pengajuan" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 12px" class="bg-danger">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Tanggal Transaksi
                                        </th>
                                        <th>
                                            No SO
                                        </th>
                                        <th>
                                            Asal Data
                                        </th>
                                        <th>
                                            Nama SO
                                        </th>
                                        <th>
                                            Nama Debitur
                                        </th>
                                        <th>
                                            Cabang
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_pengajuan" style="font-size: 12px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" id="close_pengajuan" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="lihat_detail" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Credit Analist</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Credit Analist</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div id="form_detail" method="GET">
        <div class="col-md-12">
            <div class="box box-primary" style="background-color: #ffffff1f">
                <div class="box-header with-border">
                    <h3 class="box-title brand-text font-weight-light" style="font-size: 20px; height: 9px;">Data Debitur</h3>
                </div>
                <div class="box-body">
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_1" role="button" aria-expanded="false" aria-controls="collapse_1">
                            <a class="text-light">
                                <b>DATA CA</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_1">
                            <form id="form_fasilitas">
                                <input type="hidden" name="id_fasilitas_pinjaman" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">No Sales Officer</label>
                                            <input type="text" class="form-control" name="nomor_so" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Nama Sales Officer</label>
                                            <input type="text" class="form-control" name="nama_sales_officer" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Nama Marketing 1/CGC/EGC/Tele Sales</label>
                                            <input type="text" class="form-control" name="nama_marketing" aria-describedby="emailHelp" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Data<span class="required_notification">*</span></label>
                                            <select name="asal_data" id="select_asal_data" class="form-control" style="width: 100%;" readonly>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-8">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Plafon</label>
                                                <input type="text" class="form-control uang" name="plafon" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Tenor<span class="required_notification">*</span></label>
                                                <select name="tenor" id="tenor" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Pinjaman<span class="required_notification">*</span></label>
                                            <select name="jenis_pinjaman" id="select_jenis_pinjaman" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tujuan Pinjaman</label>
                                            <textarea name="tujuan_pinjaman" class="form-control " style="height: 122px" cols="40"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Segmentasi BPR<span class="required_notification">*</span></label>
                                            <select name="segmentasi" id="segmentasi" class="form-control select2 select2-danger" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Sektor Ekonomi<span class="required_notification">*</span></label>
                                            <select name="sektor_ekonomi" id="sektor_ekonomi" class="form-control select2 select2-danger" style="width: 100%;">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_3" role="button" aria-expanded="false" aria-controls="collapse_3">
                            <a class="text-light">
                                <b>DATA CALON DEBITUR</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_3">
                            <form id="form_debitur">
                                <input type="hidden" id="id_debitur" name="id_debitur" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap <small><i>(Sesuai KTP Tanpa Gelar)</i></small></label>
                                            <input type="text" name="nama_debitur" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Gelar Keagamaan</label>
                                                <input type="text" class="form-control" name="gelar_keagamaan" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Gelar Pendidikan</label>
                                                <input type="text" class="form-control" name="gelar_pendidikan" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Jenis Kelamin<span class="required_notification">*</span></label>
                                                <select name="jenis_kelamin" id="jenis_kelamin1" class="form-control" onchange="showDiv()">
                                                    <option value="">-- Pilih Status Kelamin --</option>
                                                    <option id="Ldeb" value="L">LAKI-LAKI</option>
                                                    <option id="Pdeb" value="P">PEREMPUAN</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Status Pernikahan</label>
                                                <input type="text" class="form-control" name="status_nikah">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tinggi Badan (cm)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="tinggi_badan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Berat Badan (kg)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="berat_badan" 3 onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Ibu Kandung</label>
                                            <input type="text" name="ibu_kandung" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>No KTP</label>
                                                <input type="text" class="form-control" name="no_ktp" maxlength="16" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>No KTP KK</label>
                                                <input type="text" class="form-control" name="no_ktp_kk" maxlength="15" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>No KK</label>
                                                <input type="text" class="form-control" name="no_kk" maxlength="16" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>No NPWP</label>
                                                <input type="text" class="form-control" name="no_npwp" maxlength="15" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="tgl_lahir_deb" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Agama<span class="required_notification">*</span></label>
                                            <select id="select_agama" name="agama" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="KATHOLIK">KATHOLIK</option>
                                                <option value="KRISTEN">KRISTEN</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDHA">BUDHA</option>
                                                <option value="LAIN2 KEPERCAYAAN">LAIN2 KEPERCAYAAN</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat<small><i>(Sesuai KTP)</i></small></label>
                                                <input type="text" class="form-control" name="alamat_ktp" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RT</label>
                                                <input type="text" class="form-control" name="rt_ktp" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RW</label>
                                                <input type="text" class="form-control" name="rw_ktp" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group" id="select_provinsi_ktp">
                                            <label>Provinsi<span class="required_notification">*</span><span class="required_notification">*</span></label>
                                            <select name="provinsi_ktp" id="provinsi_ktp" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group" id="select_provinsi_ktp_dup">
                                            <label>Provinsi<span class="required_notification">*</span></label>
                                            <select name="provinsi_ktp" id="provinsi_ktp_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kabupaten_ktp">
                                                <label>Kabupaten<span class="required_notification">*</span></label>
                                                <select name="kabupaten_ktp" id="kabupaten_ktp" class="form-control">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kabupaten_ktp_dup">
                                                <label>Kabupaten<span class="required_notification">*</span></label>
                                                <select name="kabupaten_ktp" id="kabupaten_ktp_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kecamatan_ktp">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="kecamatan_ktp" id="kecamatan_ktp" class="form-control">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kecamatan_ktp_dup">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="kecamatan_ktp" id="kecamatan_ktp_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kelurahan_ktp">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="kelurahan_ktp" id="kelurahan_ktp" class="form-control">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kelurahan_ktp_dup">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="kelurahan_ktp" id="kelurahan_ktp_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kode POS<span class="required_notification">*</span></label>
                                                <input type="text" name="kode_pos_ktp" id="kode_pos_ktp" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat<small><i>(Domisili)</i></small></label>
                                                <input type="text" class="form-control" name="alamat_domisili" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RT</label>
                                                <input type="text" class="form-control" name="rt_domisili" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RW</label>
                                                <input type="text" class="form-control" name="rw_domisili" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group" id="select_provinsi_domisili">
                                            <label>Provinsi<span class="required_notification">*</span></label>
                                            <select name="provinsi_domisili" id="provinsi_domisili" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group" id="select_provinsi_domisili_dup">
                                            <label>Provinsi<span class="required_notification">*</span></label>
                                            <select name="provinsi_domisili" id="provinsi_domisili_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kabupaten_domisili">
                                                <label>Kabupaten<span class="required_notification">*</span></label>
                                                <select name="kabupaten_domisili" id="kabupaten_domisili" class="form-control">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kabupaten_domisili_dup">
                                                <label>Kabupaten<span class="required_notification">*</span></label>
                                                <select name="kabupaten_domisili" id="kabupaten_domisili_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kecamatan_domisili">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="kecamatan_domisili" id="kecamatan_domisili" class="form-control">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kecamatan_domisili_dup">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="kecamatan_domisili" id="kecamatan_domisili_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kelurahan_domisili">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="kelurahan_domisili" id="kelurahan_domisili" class="form-control">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kelurahan_domisili_dup">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="kelurahan_domisili" id="kelurahan_domisili_dup" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kode POS</label>
                                                <input type="text" class="form-control" id="kode_pos_domisili" name="kode_pos_domisili" maxlength="5" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Pendidikan Terakhir<span class="required_notification">*</span></label>
                                                <select id="select_pendidikan_terakhir" name="pendidikan_terakhir" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Jumlah Tanggungan</label>
                                                <input type="text" class="form-control" name="jumlah_tanggungan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>No Telpon</label>
                                                <input type="text" class="form-control" name="no_telp" maxlength="13" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>No Handphone</label>
                                                <input type="text" class="form-control" name="no_hp" maxlength="13" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInput1">Alamat Korespondensi</label>
                                                <select id="alamat_surat" name="alamat_surat" class="form-control ">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInput1">Pekerjaan<span class="required_notification">*</span></label>
                                                <select name="pekerjaan_deb" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Perusahaan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="nama_perusahaan">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Posisi<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="posisi">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Jenis Usaha<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="jenis_usaha">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat Usaha/Kantor<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="alamat_usaha_kantor">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RT<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="rt_usaha_kantor" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RW<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="rw_usaha_kantor" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group" id="select_provinsi_kantor">
                                            <label>Provinsi<span class="required_notification">*</span></label>
                                            <select name="provinsi_kantor" id="provinsi_kantor" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kabupaten_kantor">
                                                <label>Kabupaten<span class="required_notification">*</span></label>
                                                <select name="kabupaten_kantor" id="kabupaten_kantor" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kecamatan_kantor">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="kecamatan_kantor" id="kecamatan_kantor" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kelurahan_kantor">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="kelurahan_kantor" id="kelurahan_kantor" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kode POS</label>
                                                <input type="text" class="form-control" id="kode_pos_kantor" name="kode_pos_kantor" maxlength="5" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Mulai Bekerja<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="masa_kerja_usaha" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>No Telpon Kantor/Usaha<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="no_telp_kantor_usaha" maxlength="13" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="example3" class="table table-bordered table-hover table-sm" style="min-width: 50%">
                                            <thead style="font-size: 14px" class="bg-success">
                                                <tr>
                                                    <th>
                                                        Nama Anak
                                                    </th>
                                                    <th>
                                                        Tanggal Lahir
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_anak" style="font-size: 13px">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3" id="form_data_pasangan">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_4" role="button" aria-expanded="false" aria-controls="collapse_4">
                            <a class="text-light">
                                <b>DATA PASANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_4">
                            <form id="form_pasangan">
                                <input type="hidden" id="id_pasangan" name="id_pasangan" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Lengkap <small><i>(Sesuai KTP)</i></small></label>
                                            <input type="text" name="nama_lengkap_pas" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Ibu Kandung</label>
                                            <input type="text" name="nama_ibu_kandung_pas" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Jenis Kelamin</label>
                                            <select name="jenis_kelamin_pas" class="form-control ">
                                                <option value="">Pilih</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Alamat<small><i>(Sesuai KTP)</i></small></label>
                                            <textarea name="alamat_ktp_pas" class="form-control " rows="5" cols="40"></textarea>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>No KTP</label>
                                                <input type="text" name="no_ktp_pas" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>NIK KTP di KK</label>
                                                <input type="text" name="no_ktp_kk_pas" class="form-control" maxlength="16" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInput1">NO NPWP</label>
                                                <input type="text" name="no_npwp_pas" class="form-control " maxlength="15" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInput1">No Telpon</label>
                                                <input type="text" name="no_telp_pas" class="form-control " maxlength="13" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tempat Lahir<span class="required_notification">*</span></label>
                                                <input type="text" name="tempat_lahir_pas" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="tgl_lahir_pas" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Pekerjaan</label>
                                            <select name="pekerjaan_pas" class="form-control ">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Nama Perusahaan/Usaha</label>
                                            <input type="text" name="nama_perusahaan_pas" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="bmd-label-floating">Posisi Pekerjaan</label>
                                                    <input type="text" class="form-control" name="posisi_pekerjaan_pas">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="bmd-label-floating">Jenis Usaha</label>
                                                    <input type="text" class="form-control" name="jenis_usaha_pas">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat Usaha/Kantor</label>
                                                <input type="text" class="form-control" name="alamat_usaha_kantor_pas">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RT</label>
                                                <input type="text" class="form-control" name="rt_kantor_usaha_pas" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RW</label>
                                                <input type="text" class="form-control" name="rw_kantor_usaha_pas" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group" id="select_provinsi_kantor_pasangan">
                                            <label>Provinsi</label>
                                            <select name="provinsi_kantor_pasangan" id="provinsi_kantor_pasangan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kabupaten_kantor_pasangan">
                                                <label>Kabupaten/Kota</label>
                                                <select name="kabupaten_kantor_pasangan" id="kabupaten_kantor_pasangan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6" id="select_kecamatan_kantor_pasangan">
                                                <label>Kecamatan</label>
                                                <select name="kecamatan_kantor_pasangan" id="kecamatan_kantor_pasangan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" id="select_kelurahan_kantor_pasangan">
                                                <label>Kelurahan</label>
                                                <select name="kelurahan_kantor_pasangan" id="kelurahan_kantor_pasangan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kode POS</label>
                                                <input type="text" id="kode_pos_kantor_usaha_pas" name="kode_pos_kantor_usaha_pas" class="form-control" maxlength="5" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Mulai Bekerja</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="masa_kerja_lama_usaha_pas" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">No Telpon</label>
                                                <input type="text" class="form-control" name="no_telp_kantor_usaha_pas" maxlength="13" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div style="float: right;">
                                            <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form id="form_penjamin">
                        <div class="card mb-3" id="formku">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_5" role="button" aria-expanded="false" aria-controls="collapse_5">
                                <a class="text-light">
                                    <b>DATA PENJAMIN</b>
                                </a>
                            </div>
                            <input type="hidden" id="id_trans_so_pen" name="id_trans_so_pen">
                            <div class="card-body collapse" id="collapse_5">
                                <div class="box-body table-responsive no-padding">
                                    <button type="button" class="btn btn-primary" id="tambah_penjamin" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                    <table id="example4" class="table table-bordered table-hover table-sm" style="min-width: 2300px">
                                        <thead style="font-size: 11px" class="bg-success">
                                            <tr>
                                                <th>
                                                    Aksi
                                                </th>
                                                <th>
                                                    Nama KTP
                                                </th>
                                                <th>
                                                    Nama Ibu Kandung
                                                </th>
                                                <th>
                                                    No KTP
                                                </th>
                                                <th>
                                                    No NPWP
                                                </th>
                                                <th>
                                                    Tempat Lahir
                                                </th>
                                                <th>
                                                    Tanggal Lahir
                                                </th>
                                                <th>
                                                    Jenis Kelamin
                                                </th>
                                                <th>
                                                    Alamat KTP
                                                </th>
                                                <th>
                                                    No Telpon
                                                </th>
                                                <th>
                                                    Hubungan Debitur
                                                </th>
                                                <th>
                                                    Lampiran KTP
                                                </th>
                                                <th>
                                                    Lampiran KTP Pasangan
                                                </th>
                                                <th>
                                                    Lampiran KK
                                                </th>
                                                <th>
                                                    Lampiran Buku Nikah
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody id="data_penjamin" style="font-size: 11px">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_8" role="button" aria-expanded="false" aria-controls="collapse_8">
                            <a class="text-light">
                                <b>AGUNAN JAMINAN SERTIFIKAT</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_8">
                            <form id="form_agunan_jaminan_sertifikat">
                                <input type="hidden" name="id_agunan_tanah[]" value="">

                                <div class="box-body table-responsive no-padding">
                                    <button type="button" class="btn btn-primary" id="tambah_agunan_sertifikat" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                    <table class="table table-bordered table-hover table-sm" style="width: 3000px">
                                        <thead style="font-size: 11px" class="bg-success">
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Lokasi Agunan
                                                </th>
                                                <th>
                                                    Alamat
                                                </th>
                                                <th>
                                                    Luas Tanah
                                                </th>
                                                <th>
                                                    Luas Bangunan
                                                </th>
                                                <th>
                                                    Nama Pemilik Sertifikat
                                                </th>
                                                <th>
                                                    Jenis Sertifikat
                                                </th>
                                                <th>
                                                    No Sertifikat
                                                </th>
                                                <th>
                                                    Tanggal & No Ukur Sertifikat
                                                </th>
                                                <th>
                                                    Tanggal Berlaku SHGB
                                                </th>
                                                <th>
                                                    No IMB
                                                </th>

                                                <th>
                                                    NJOP
                                                </th>
                                                <th>
                                                    NOP
                                                </th>
                                                <th>
                                                    Agunan Bagian Depan
                                                </th>
                                                <th>
                                                    Agunan Bagian Jalan
                                                </th>
                                                <th>
                                                    Agunan Bagian Ruang Tamu
                                                </th>
                                                <th>
                                                    Agunan Bagian Kamar Mandi
                                                </th>
                                                <th>
                                                    Agunan Bagian Dapur
                                                </th>
                                                <th id="aksi">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_agunan_sertifikat" style="font-size: 11px">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-4" id="ktp">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Foto Agunan Rumah</label>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_foto_agunan_rumah">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 ao">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_10" role="button" aria-expanded="false" aria-controls="collapse_10">
                            <a class="text-light">
                                <b>PEMERIKSAAN TANAH DAN BANGUNAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_10">
                            <form id="form_pemeriksaan_agunan_tanah">
                                <input type="hidden" id="id_pemeriksaan_agunan" name="id_pemeriksaan_agunan" value="">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Penghuni<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="nama_penghuni_agunan" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>Status Penghuni<span class="required_notification">*</span></label>
                                            <select name="status_penghuni_agunan" class="form-control ">
                                                <option value="">--Pilih Status Penghuni--</option>
                                                <option id="pemilik" value="PEMILIK">PEMILIK</option>
                                                <option id="penyewa" value="PENYEWA">PENYEWA</option>
                                                <option id="tidak_dihuni" value="TIDAK DIHUNI">TIDAK DIHUNI</option>
                                                <option id="keluarga" value="KELUARGA">KELUARGA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bentuk Agunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="bentuk_bangunan_agunan" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Kondisi Agunan<span class="required_notification">*</span></label>
                                            <select name="kondisi_bangunan_agunan" class="form-control ">
                                                <option id="sangat_terawat" value="SANGAT TERAWAT">SANGAT TERAWAT</option>
                                                <option id="cukup_terawat" value="CUKUP TERAWAT">CUKUP TERAWAT</option>
                                                <option id="kurang_terawat" value="KURANG TERAWAT">KURANG TERAWAT</option>
                                                <option id="tidak_terawat" value="TIDAK TERAWAT">TIDAK TERAWAT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Fasilitas<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="fasilitas_agunan" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Listrik (Kwh)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="listrik_agunan" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Taksasi Bangunan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" name="nilai_taksasi_bangunan" aria-describedby="" placeholder="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Taksasi Agunan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" id="nilai_taksasi_agunan" name="nilai_taksasi_agunan" aria-describedby="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Taksasi Agunan<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="tgl_taksasi_agunan" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Likuidasi<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" name="nilai_likuidasi_agunan" aria-describedby="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Perusahaan Penililai Independen</label>
                                                <input type="text" class="form-control" name="perusahaan_penilai_independen" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Agunan Independen</label>
                                                <input type="text" class="form-control uang" name="nilai_agunan_independen" aria-describedby="" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3" hidden>
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_9" role="button" aria-expanded="false" aria-controls="collapse_9">
                            <a class="text-light">
                                <b>AGUNAN KENDARAAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_9">
                            <form id="form_agunan_jaminan_kendaraan">
                                <input type="hidden" name="id_agunan_kendaraan" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No BPKB</label>
                                            <input type="text" class="form-control" name="no_bpkb" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat Pemilik</label>
                                            <input type="text" class="form-control" name="alamat_pemilik_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merk/Type</label>
                                            <input type="text" class="form-control" name="merk/type_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis/Silinder</label>
                                            <input type="text" class="form-control" name="jenis/silinder_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Rangka</label>
                                            <input type="text" class="form-control" name="no_rangka_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Mesin</label>
                                            <input type="text" class="form-control" name="no_mesin_ken" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Warna</label>
                                            <input type="text" class="form-control" name="warna_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tahun</label>
                                            <input type="text" class="form-control" name="tahun_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Polisi</label>
                                            <input type="text" class="form-control" name="no_polisi_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No STNK</label>
                                            <input type="text" class="form-control" name="no_stnk_ken" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Expired Pajak</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="tgl_expired_pajak_ken" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Expired STNK</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="tgl_expired_stnk_ken" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Faktur</label>
                                            <input type="text" class="form-control" name="no_faktur_ken" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card mb-3" hidden>
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_11" role="button" aria-expanded="false" aria-controls="collapse_11">
                            <a class="text-light">
                                <b>PEMERIKSAAN KENDARAAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_11">
                            <form id="form_pemeriksaan_kendaraan">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Pengguna</label>
                                            <input type="text" class="form-control" name="nama_pengguna_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Status Pengguna</label>
                                            <select name="status_pengguna_ken[]" class="form-control " style="margin-top: -11px;">
                                                <option value="">-- Pilih --</option>
                                                <option value="PEMILIK">PEMILIK</option>
                                                <option value="PENYEWA">PENYEWA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Roda Kendaraan</label>
                                            <input type="text" class="form-control" name="jml_roda_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kondisi Kendaraan</label>
                                            <input type="text" class="form-control" name="kondisi_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keberadaan Kendaraan</label>
                                            <input type="text" class="form-control" name="keberadaan_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Body</label>
                                            <input type="text" class="form-control" name="body_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Interior</label>
                                            <input type="text" class="form-control" name="interior_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">KM</label>
                                            <input type="text" class="form-control" name="km_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Modifikasi</label>
                                            <input type="text" class="form-control" style="margin-bottom: 7px;" name="modifikasi_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelengkapan Aksesoris</label>
                                            <input type="text" class="form-control" name="aksesoris_ken[]" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 ao">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_12" role="button" aria-expanded="false" aria-controls="collapse_12">
                            <a class="text-light">
                                <b>KAPASITAS BULANAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_12">
                            <form id="form_kapasitas_bulanan">
                                <input type="hidden" id="id_kapasitas_bulanan" name="id_kapasitas_bulanan" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-header bg-gradient-danger">
                                            <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                                <b>Pemasukan</b>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Calon Debitur<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_debitur" name="pemasukan_debitur" onkeyup="total_pemasukan_kapasitas_bulanan();">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pasangan</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_pasangan" id="pemasukan_pasangan" onkeyup="total_pemasukan_kapasitas_bulanan();">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penjamin</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_penjamin" id="pemasukan_penjamin" onkeyup="total_pemasukan_kapasitas_bulanan();">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Pemasukan</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pemasukan" name="total_pemasukan" style="color: #000; font-weight: 500;" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-header bg-gradient-danger">
                                            <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                                <b>Pengeluaran</b>
                                            </a>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Rumah Tangga<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_rumah_tangga" name="biaya_rumah_tangga" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Transportasi<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_transport" name="biaya_transport" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Pendidikan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_pendidikan" name="biaya_pendidikan" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Telpon, Listrik dan Air<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_telp_listr_air" name="biaya_telp_listr_air" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lain-Lain<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_lain" name="biaya_lain" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Pengeluaran</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pengeluaran" name="total_pengeluaran" style="color: #000; font-weight: 500;" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3 ao">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_13" role="button" aria-expanded="false" aria-controls="collapse_13">
                            <a class="text-light">
                                <b>PENDAPATAN & PENGELUARAN USAHA(JIKA PENGUSAHA)</b>
                            </a>
                        </div>

                        <div class="card-body collapse" id="collapse_13">
                            <form id="form_pendapatan_usaha">
                                <input type="hidden" id="id_pendapatan_usaha" name="id_pendapatan_usaha" value="">
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pendapatan Usaha</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tunai</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_tunai" name="pemasukan_tunai" value="0" onkeyup="total_pendapatan_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kredit</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_kredit" name="pemasukan_kredit" value="0" onkeyup="total_pendapatan_usaha();">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pengeluaran Usaha</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sewa/Kontrak</label>
                                            <input type="text" class="form-control uang" id="biaya_sewa" name="biaya_sewa" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gaji Pegawai</label>
                                            <input type="text" class="form-control uang" id="biaya_gaji_pegawai" name="biaya_gaji_pegawai" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Belanja Barang</label>
                                            <input type="text" class="form-control uang" id="biaya_belanja_brg" name="biaya_belanja_brg" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Telpon, Listrik dan Air</label>
                                            <input type="text" class="form-control uang" id="tlp_listrik_air" name="tlp_listrik_air" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Sampah & Keamanan</label>
                                            <input type="text" class="form-control uang" id="biaya_sampah_keamanan" name="biaya_sampah_keamanan" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Biaya Kirim Barang</label>
                                            <input type="text" class="form-control uang" id="biaya_kirim_barang" name="biaya_kirim_barang" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pembayaran Hutang Dagang</label>
                                            <input type="text" class="form-control uang" id="biaya_hutang_dagang" name="biaya_hutang_dagang" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Angsuran Lain</label>
                                            <input type="text" class="form-control uang" id="biaya_angsuran" name="biaya_angsuran" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lainnya</label>
                                            <input type="text" class="form-control uang" id="biaya_lain_lain" name="biaya_lain_lain" aria-describedby="" value="0" onkeyup="total_pengeluaran_usaha();">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Total</label>
                                <div class="row">
                                    <div class="col-md-4" style="float: right;">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pendapatan Usaha</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pendapatan_usaha" name="pendapatan_usaha" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                            <input type="hidden" value="0" id="pendapatan_usaha_hide">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pengeluaran Usaha</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pengeluaran_usaha" name="pengeluaran_usaha" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                            <input type="hidden" value="0" id="pengeluaran_usaha_hide">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keuntungan Usaha</label>
                                            <input type="text" class="form-control auto" data-a-sep="." data-a-dec="," id="keuntungan_usaha" name="keuntungan_usaha" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" onclick="total_keuntungan_usaha();" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_6" role="button" aria-expanded="false" aria-controls="collapse_5">
                            <a class="text-light">
                                <b>LAMPIRAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_6">
                            <div class="row">
                                <div class="col-md-3" id="ktp">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">KTP</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_ktp"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_ktp">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="kk">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kartu Keluarga</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_kk" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_kk">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="sertifikat">
                                    <div class="form-group">
                                        <label>Sertifikat</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_sertifikat" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_sertifikat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="pbb">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">PBB</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_pbb " data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_pbb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="imb">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">IMB</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_imb " data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_imb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="form_ktp_pasangan">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">KTP Pasangan</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_ktp_pas" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_ktp_pasangan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="form_buku_nikah">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Buku Nikah</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_buku_nikah" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_buku_nikah">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="surat_keterangan_kerja">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Surat Keterangan Kerja</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_skk" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_surat_keterangan_kerja">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="slip_gaji">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Slip Gaji</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_slip_gaji" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_slip_gaji">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="buku_tabungan">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Buku Tabungan</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_buku_tabungan" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_buku_tabungan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="surat_keterangan_usaha">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Surat Keterangan Usaha</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_sku" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_keterangan_usaha">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="pembukuan_usaha">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Pembukuan Usaha</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_pembukuan_usaha" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_pembukuan_usaha">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="foto_usaha">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Foto Usaha</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_foto_usaha" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_foto_usaha">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="foto_usaha">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Form Persetujuan IDEB</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_form_persetujuan_ideb" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_form_persetujuan_ideb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="lampiran_ideb">
                                    <div class="form-group">
                                        <label>Lampiran IDEB</label>
                                        <div id="dataideb">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3" id="lampiran_pefindo">
                                    <div class="form-group">
                                        <label>Lampiran PEFINDO</label>
                                        <div id="datapefindo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group" style="margin-top: 20px;">
            <label style="font-style: italic; color: #383a3a;">Catatan SO</label>
            <textarea name="notes_so" style="width: 100%" rows="5"></textarea>
        </div>

        <div class="col-md-12" id="input_ca">
            <form id="form_input_ca">
                <input type="hidden" id="id_trans_so" name="id" value="">
                <div class="box box-primary" style="background-color: #ffffff1f">
                    <div class="box-header with-border">
                        <h3 class="box-title font-weight-light" style="font-size: 20px; height: 9px;">Input Memorandum CA</h3>
                    </div>
                    <div class="box-body">
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_14" role="button" aria-expanded="false" aria-controls="collapse_14">
                                <a class="text-light">
                                    <b>MUTASI BANK</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_14">
                                <div class="row">
                                    <input type="hidden" name="urutan_mutasi[]" value="1">
                                    <div class="form-group col-md-4">
                                        <label>Bank</label>
                                        <input type="text" class="form-control" name="nama_bank_mutasi[]" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>No Rekening</label>
                                        <input type="text" class="form-control" name="no_rekening_mutasi[]" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama Pemilik Mutasi</label>
                                        <input type="text" class="form-control" name="nama_pemilik_mutasi[]" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                    <table id="table-mutasi" class="table table-bordered table-hover" style="width: 970px">
                                        <thead style="font-size: 14px">
                                            <tr>
                                                <th rowspan="2">
                                                    Periode Bulanan
                                                </th>
                                                <th colspan="2" style="text-align: center;">
                                                    Mutasi Debet
                                                </th>
                                                <th colspan="2" style="text-align: center;">
                                                    Mutasi Kredit
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    Saldo Rp.(000)
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Frekuensi
                                                </th>
                                                <th>
                                                    Rp.(000)
                                                </th>
                                                <th>
                                                    Frekuensi
                                                </th>
                                                <th>
                                                    Rp.(000)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="mutasi" style="font-size: 13px">
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode1" name="periode_mutasi[0][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_1deb" name="frek_debet_mutasi[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_1deb" name="nominal_debet_mutasi[0][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_1kred" name="frek_kredit_mutasi[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_1kred" name="nominal_kredit_mutasi[0][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo1" name="saldo_mutasi[0][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode2" name="periode_mutasi[0][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_2deb" name="frek_debet_mutasi[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_2deb" name="nominal_debet_mutasi[0][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_2kred" name="frek_kredit_mutasi[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_2kred" name="nominal_kredit_mutasi[0][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo2" name="saldo_mutasi[0][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode3" name="periode_mutasi[0][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_3deb" name="frek_debet_mutasi[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_3deb" name="nominal_debet_mutasi[0][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_3kred" name="frek_kredit_mutasi[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_3kred" name="nominal_kredit_mutasi[0][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo3" name="saldo_mutasi[0][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <button type="button" class="btn btn-primary" onclick="rata_rata_bank1()">Rata-Rata</button>
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="total_frekuensi_1deb" name="rata_rata_frekuensi_deb" readonly />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control" type="text" id="total_nominal_1deb" name="rata_rata_nominal_deb" readonly />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="total_frekuensi_1kred" name="rata_rata_frekuensi_kredit" readonly />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control" type="text" id="total_nominal_1kred" name="rata_rata_nominal_kredit" readonly />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control" type="text" id="total_saldo1" name="rata_rata_saldo" readonly />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Bank</label>
                                        <input type="text" class="form-control" name="nama_bank_mutasi[]" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>No Rekening</label>
                                        <input type="text" class="form-control" name="no_rekening_mutasi[]" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama Pemilik Mutasi</label>
                                        <input type="text" class="form-control" name="nama_pemilik_mutasi[]" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                    <table id="table-mutasi" class="table table-bordered table-hover" style="width: 970px">
                                        <thead style="font-size: 14px">
                                            <tr>
                                                <th rowspan="2">
                                                    Periode Bulanan
                                                </th>
                                                <th colspan="2" style="text-align: center;">
                                                    Mutasi Debet
                                                </th>
                                                <th colspan="2" style="text-align: center;">
                                                    Mutasi Kredit
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    Saldo Rp.(000)
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Frekuensi
                                                </th>
                                                <th>
                                                    Rp.(000)
                                                </th>
                                                <th>
                                                    Frekuensi
                                                </th>
                                                <th>
                                                    Rp.(000)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="mutasi" style="font-size: 13px">
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode1_b2" name="periode_mutasi[1][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_1deb_b2" name="frek_debet_mutasi[1][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_1deb_b2" name="nominal_debet_mutasi[1][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_1kred_b2" name="frek_kredit_mutasi[1][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_1kred_b2" name="nominal_kredit_mutasi[1][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo1_b2" name="saldo_mutasi[1][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode2_b2" name="periode_mutasi[1][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_2deb_b2" name="frek_debet_mutasi[1][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_2deb_b2" name="nominal_debet_mutasi[1][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_2kred_b2" name="frek_kredit_mutasi[1][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_2kred_b2" name="nominal_kredit_mutasi[1][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo2_b2" name="saldo_mutasi[1][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode3_b2" name="periode_mutasi[1][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_3deb_b2" name="frek_debet_mutasi[1][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_3deb_b2" name="nominal_debet_mutasi[1][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_3kred_b2" name="frek_kredit_mutasi[1][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_3kred_b2" name="nominal_kredit_mutasi[1][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo3_b2" name="saldo_mutasi[1][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <button type="button" class="btn btn-primary" onclick="rata_rata_bank2()">Rata-Rata</button>
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="total_frekuensi_1deb_b2" name="rata_rata_frekuensi_deb" readonly />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control" type="text" id="total_nominal_1deb_b2" name="rata_rata_nominal_deb" readonly />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="total_frekuensi_1kred_b2" name="rata_rata_frekuensi_kredit" readonly />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control" type="text" id="total_nominal_1kred_b2" name="rata_rata_nominal_kredit" readonly />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control" type="text" id="total_saldo2" name="rata_rata_saldo" readonly />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_15" role="button" aria-expanded="false" aria-controls="collapse_15">
                                <a class="text-light">
                                    <b>DATA KEUANGAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Tujuan Pembukaan Rekening</label>
                                            <input type="text" class="form-control" name="tujuan_pembukaan_rek" value="PENCAIRAN KREDIT" onkeyup="this.value = this.value.toUpperCase()" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Penghasilan Per Tahun</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="penghasilan_per_tahun" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Sumber Penghasilan<span class="required_notification">*</span></label>
                                            <select name="sumber_penghasilan" class="form-control" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <?php foreach ($data_sumber_penghasilan->result() as $p) { ?>
                                                    echo "
                                                    <option value="<?php echo $p->kode_sumber_penghasilan ?>"><?php echo $p->desk_sumber_penghasilan ?></option>";
                                                <?php  } ?>

                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label>Pemasukan Per Bulan<span class="required_notification">*</span></label>
                                                <select name="pemasukan_per_bulan" class="form-control" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_pemasukan_perbulan->result() as $p) { ?>
                                                        echo "
                                                        <option value="<?php echo $p->kode_pemasukan_per_bulan ?>"><?php echo $p->desk_pemasukan_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="exampleInput1" class="bmd-label-floating">Frek. Trans Pemasukan</label>
                                                <select name="frek_trans_pemasukan" class="form-control ">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_frek_trans_pemasukan->result() as $p) { ?>
                                                        echo "
                                                        <option value="<?php echo $p->kode_frek_pemasukan_per_bulan ?>"><?php echo $p->desk_frek_pemasukan_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label>Pengeluaran Per Bulan<span class="required_notification">*</span></label>
                                                <select name="pengeluaran_per_bulan" class="form-control select2 select2-danger" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_pengeluaran_per_bulan->result() as $p) { ?>
                                                        echo "
                                                        <option value="<?php echo $p->kode_pengeluaran_per_bulan ?>"><?php echo $p->desk_pengeluaran_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="exampleInput1" class="bmd-label-floating">Frek. Trans Pengeluaran</label>
                                                <select name="frek_trans_pengeluaran" class="form-control ">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_frek_pengeluaran->result() as $p) { ?>
                                                        echo "
                                                        <option value="<?php echo $p->kode_frek_pengeluaran_per_bulan ?>"><?php echo $p->desk_frek_pengeluaran_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Sumber Dana Setoran</label>
                                            <select name="sumber_dana_setoran" class="form-control ">
                                                <option value="">--Pilih--</option>
                                                <?php foreach ($data_sumber_data_untuk_setoran->result() as $p) { ?>
                                                    echo "
                                                    <option value="<?php echo $p->kode_sumber_dana_untuk_setoran ?>"><?php echo $p->desk_sumber_dana_untuk_setoran ?></option>";
                                                <?php  } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Tujuan Pengeluaran Dana</label>
                                            <select name="tujuan_pengeluaran_dana" class="form-control ">
                                                <option value="">--Pilih--</option>
                                                <option value="KONSUMTIF">KONSUMTIF</option>
                                                <option value="MODAL KERJA">MODAL KERJA</option>
                                                <option value="INVESTASI">INVESTASI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">No Rek Bank</label>
                                            <input type="text" class="form-control" name="no_rekening" aria-describedby="emailHelp" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_16" role="button" aria-expanded="false" aria-controls="collapse_16">
                                <a class="text-light">
                                    <b>INFORMASI DAN ANALISA CREDIT CHECKING</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_16">
                                <div class="col-md-12" id="">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <button type="button" class="btn btn-success add-row"><i class="fa fa-plus"></i>&nbsp; Tambah </button>&nbsp;
                                                <button type="button" class="btn btn-danger delete-row"><i class="fa fa-trash"></i>&nbsp; Delete </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="table" class="table table-hover table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th style="font-size:12px" width="5">#</th>
                                                    <th style="font-size:12px">Nama Bank</th>
                                                    <th style="font-size:12px">Plafon</th>
                                                    <th style="font-size:12px">Baki Debet</th>
                                                    <th style="font-size:12px">Angsuran</th>
                                                    <th style="font-size:12px">Collectabilitas</th>
                                                    <th style="font-size:12px">Jenis Kredit</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="record" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="nama_bank_acc[]" value="-" onkeyup="this.value = this.value.toUpperCase()">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control uang" id="plafon_acc[]" name="plafon_acc[]" value="0">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control uang" name="baki_debet_acc[]" value="0">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control uang" name="angsuran_acc[]" aria-describedby="emailHelp" placeholder="" value="0">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="collectabilitas_acc[]" value="0" onkeypress="return hanyaAngka(event)">
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" name="jenis_kredit_acc[]" value="-" onkeyup="this.value = this.value.toUpperCase()">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 ao">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_23" role="button" aria-expanded="false" aria-controls="collapse_23">
                                <a class="text-light">
                                    <b>KAPASITAS BULANAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_23">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-header bg-gradient-danger">
                                            <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                                <b>Pemasukan</b>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Calon Debitur<span class="required_notification">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_debitur_ca" name="pemasukan_debitur_ca" onkeyup="total_pemasukan_kapasitas_bulanan_ca();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Pasangan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_pasangan_ca" id="pemasukan_pasangan_ca" onkeyup="total_pemasukan_kapasitas_bulanan_ca();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Penjamin</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_penjamin_ca" id="pemasukan_penjamin_ca" onkeyup="total_pemasukan_kapasitas_bulanan_ca();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Pemasukan</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pemasukan_ca" name="total_pemasukan_ca" style="color: #000; font-weight: 500;" readonly value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-header bg-gradient-danger">
                                            <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                                <b>Pengeluaran</b>
                                            </a>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Rumah Tangga</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_rumah_tangga_ca" name="biaya_rumah_tangga_ca" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Transportasi<span class="required_notification">*</span></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_transportasi_ca" name="biaya_transportasi_ca" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-top: -16px;">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Pendidikan</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_pendidikan_ca" name="biaya_pendidikan_ca" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Telpon, Listrik dan Air<span class="required_notification">*</span></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_telp_listr_air_ca" name="biaya_telp_listr_air_ca" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" style="margin-top: -17px;">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Angsuran Lain</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="angsuran_lain_ca" value="0" name="angsuran_lain_ca" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6" style="margin-top: -17px;">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Lain-Lain</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_lain_ca" value="0" name="biaya_lain_ca" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: -16px;">
                                            <label for="exampleInputEmail1">Total Pengeluaran</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pengeluaran_ca" value="0" name="total_pengeluaran_ca" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 ao">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_30" role="button" aria-expanded="false" aria-controls="collapse_30">
                                <a class="text-light">
                                    <b>PENDAPATAN & PENGELUARAN USAHA(JIKA PENGUSAHA)</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_30">
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pendapatan Usaha</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Tunai</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_tunai_ca" name="pemasukan_tunai_ca" value="0" aria-describedby="" onkeyup="total_pendapatan_usaha_ca();">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Kredit</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_kredit_ca" name="pemasukan_kredit_ca" value="0" aria-describedby="" onkeyup="total_pendapatan_usaha_ca();">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pengeluaran Usaha</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Sewa/Kontrak</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_sewa_ca" name="biaya_sewa_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Gaji Pegawai</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_gaji_pegawai_ca" name="biaya_gaji_pegawai_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Belanja Barang</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_belanja_brg_ca" name="biaya_belanja_brg_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Telpon, Listrik dan Air</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_telp_listr_air_usaha_ca" name="biaya_telp_listr_air_usaha_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Sampah & Keamanan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_sampah_keamanan_ca" name="biaya_sampah_keamanan_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Kirim Barang</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_kirim_barang_ca" name="biaya_kirim_barang_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Pembayaran Hutang Dagang</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_hutang_dagang_ca" name="biaya_hutang_dagang_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Angsuran Lain</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_angsuran_ca" name="biaya_angsuran_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Lainnya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_lain_lain_ca" name="biaya_lain_lain_ca" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_usaha_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Total</label>
                                <div class="row">
                                    <div class="col-md-4" style="float: right;">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pendapatan Usaha</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pendapatan_usaha_ca" name="pendapatan_usaha_ca" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" value="0" readonly>
                                            <input type="hidden" value="0" id="pendapatan_usaha_ca_hide">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pengeluaran Usaha</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pengeluaran_usaha_ca" name="pengeluaran_usaha_ca" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" value="0" readonly>
                                            <input type="hidden" value="0" id="pengeluaran_usaha_ca_hide">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keuntungan Usaha</label>
                                            <input type="text" class="form-control" data-a-sep="." data-a-dec="," id="keuntungan_usaha_ca" name="keuntungan_usaha_ca" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" onclick="total_keuntungan_usaha();" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_18" role="button" aria-expanded="false" aria-controls="collapse_18">
                                <a class="text-light">
                                    <b>RINGKASAN ANALISA ASPEK KUALITATIF</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_18">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Analisa Kualitatif(1P+5C)</label>
                                            <textarea id="kualitatif_analisa" name="kualitatif_analisa" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Strength</label>
                                            <textarea id="kualitatif_strenght" name="kualitatif_strenght" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Weakness</label>
                                            <textarea id="kualitatif_weakness" name="kualitatif_weakness" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Opportunity</label>
                                            <textarea id="kualitatif_opportunity" name="kualitatif_opportunity" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Threatness</label>
                                            <textarea id="kualitatif_threatness" name="kualitatif_threatness" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_19" role="button" aria-expanded="false" aria-controls="collapse_19">
                                <a class="text-light">
                                    <b>PENYIMPANGAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_19">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="bmd-label-floating">Penyimpangan Struktur Dan Resiko</label>
                                    <textarea type="text" class="form-control" name="penyimpangan_struktur" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_21" role="button" aria-expanded="false" aria-controls="collapse_21">
                                <a class="text-light">
                                    <b>STRUKTUR PINJAMAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_21">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label>Produk<span class="required_notification">*</span></label>
                                                <select id="produk" name="produk" class="form-control">
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Plafon Kredit</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" name="plafon_kredit" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jangka Waktu<span class="required_notification">*</span></label>
                                                <select name="jangka_waktu" id="jangka_waktu" class="form-control select2 select2-danger" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <option value="12">12</option>
                                                    <option value="18">18</option>
                                                    <option value="24">24</option>
                                                    <option value="30">30</option>
                                                    <option value="36">36</option>
                                                    <option value="48">48</option>
                                                    <option value="60">60</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Suku Bunga</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="suku_bunga">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Pembayaran Angsuran / Bulan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="pembayaran_bunga" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Akad Kredit<span class="required_notification">*</span></label>
                                            <select name="akad_kredit" id="akad_kredit" class="form-control select2 select2-danger" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <option value="ADENDUM">ADENDUM</option>
                                                <option value="NOTARIS">NOTARIS</option>
                                                <option value="INTERNAL">INTERNAL</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ikatan Agunan<span class="required_notification">*</span></label>
                                            <select name="ikatan_agunan" id="ikatan_agunan" class="form-control select2 select2-danger" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <option value="APHT">APHT</option>
                                                <option value="SKMHT">SKMHT</option>
                                                <option value="FIDUSIA">FIDUSIA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Provisi</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_provisi" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Administrasi</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_administrasi" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Credit Checking</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_credit_checking" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Notaris</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="notaris" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Tabungan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_tabungan" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Asuransi Jiwa</label>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label class="bmd-label-floating">Nama Asuransi</label>
                                                <select name="nama_asuransi_jiwa" id="nama_asuransi_jiwa" class="form-control" style="width: 100%;">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label class="bmd-label-floating">Jangka Waktu / Bulan</label>
                                                <input type="text" class="form-control" name="jangka_waktu_as_jiwa" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Nilai Pertanggungan</label>
                                                <input type="text" class="form-control uang" name="nilai_pertanggungan_as_jiwa" value="0">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Premi</label>
                                                <input type="text" class="form-control uang" name="premi_asuransi_jiwa" value="0">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Tanggal Jatuh Tempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="jatuh_tempo_as_jiwa" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Umur Nasabah</label>
                                                <input type="text" class="form-control" name="umur_nasabah_as_jiwa" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Berat Badan (KG)</label>
                                                <input type="text" class="form-control" name="berat_badan_as_jiwa" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Tingggi Badan (CM)</label>
                                                <input type="text" class="form-control" name="tinggi_badan_as_jiwa" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Asuransi Jaminan Kebakaran</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Asuransi</label>
                                            <select name="nama_asuransi_keb" id="nama_asuransi_keb" class="form-control" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Jangka Waktu / Bulan</label>
                                                <input type="text" class="form-control" name="jangka_waktu_asuransi_keb" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Tanggal Jatuh Tempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="jatuh_tempo_keb" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nilai Pertanggungan</label>
                                            <input type="text" class="form-control uang" name="nilai_pertanggungan_keb" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Premi</label>
                                            <input type="text" class="form-control uang" name="premi_asuransi_kebakaran" value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Asuransi Jaminan Kendaraan</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Asuransi</label>
                                            <select name="nama_asuransi_ken" id="nama_asuransi_ken" class="form-control" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Jangka Waktu / Bulan</label>
                                                <input type="text" class="form-control" name="jangka_waktu_asuransi_ken" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Tanggal Jatuh Tempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="jatuh_tempo_ken" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nilai Pertanggungan</label>
                                            <input type="text" class="form-control uang" name="nilai_pertanggungan_ken" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Premi</label>
                                            <input type="text" class="form-control uang" name="premi_asuransi_kendaraan" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_20" role="button" aria-expanded="false" aria-controls="collapse_20">
                                <a class="text-light">
                                    <b>REKOMENDASI PINJAMAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_20">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Rekomendasi Nilai Pinjaman</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" id="recom_nilai_pinjaman" name="recom_nilai_pinjaman" value="0" onkeyup="angsuran_perbulan();">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Rekomendasi Tenor<span class="required_notification">*</span></label>
                                                <select name="recom_tenor" id="recom_tenor" class="form-control select2 select2-danger" style="width: 100%;" onchange="angsuran_perbulan()" ;>
                                                    <option id="recomtenor12" value="12">12</option>
                                                    <option id="recomtenor18" value="18">18</option>
                                                    <option id="recomtenor24" value="24">24</option>
                                                    <option id="recomtenor30" value="30">30</option>
                                                    <option id="recomtenor36" value="36">36</option>
                                                    <option id="recomtenor48" value="48">48</option>
                                                    <option id="recomtenor60" value="60">60</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Bunga Pinjaman<span class="required_notification">*</span></label>
                                                <div class="input-group ">
                                                    <input type="text" class="form-control" id="recom_bunga_pinjaman" name="recom_bunga_pinjaman" value="0" onkeyup="angsuran_perbulan();">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Rekomendasi Produk Kredit<span class="required_notification">*</span></label>
                                                <select id="recom_produk_kredit" name="recom_produk_kredit" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Rekomendasi Angsuran</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="recom_angsuran" name="recom_angsuran" aria-describedby="emailHelp" value="0" readonly="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Note Rekomendasi</label>
                                            <textarea type="text" class="form-control" style="height: 185px" name="note_recom" onkeyup="this.value = this.value.toUpperCase()"> </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_17" role="button" aria-expanded="false" aria-controls="collapse_17">
                                <a class="text-light">
                                    <b>RINGKASAN ANALISA ASPEK KUANTITATIF</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_17">
                                <button type="button" class="btn btn-primary" onclick="hitung_kuantitatif()">Hitung</button>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Total Pendapatan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_ttl_pendapatan" name="kuantitatif_ttl_pendapatan" onkeypress="return hanyaAngka(event)" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Total Pengeluaran</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_ttl_pengeluaran" name="kuantitatif_ttl_pengeluaran" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Disposible Income</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_pendapatan" name="kuantitatif_pendapatan" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Angsuran Perbulan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_angsuran" name="kuantitatif_angsuran" value="0" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">LTV</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="kuantitatif_ltv" name="kuantitatif_ltv" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">DSR</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="kuantitatif_dsr" name="kuantitatif_dsr" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">IDIR</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="kuantitatif_idir" name="kuantitatif_idir" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Hasil</label>
                                            <input type="text" class="form-control" id="kuantitatif_hasil" name="kuantitatif_hasil" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 57px">
                            <button type="submit" id="submit_ca" class="btn btn-primary submit" style="float: right; margin-right: 7px">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- DETAIL CA -->
        <div class="col-md-12" id="detail_ca">
            <input type="hidden" id="id_trans_so" name="id" value="">
            <div class="box box-primary" style="background-color: #ffffff1f">
                <div class="box-header with-border">
                    <h3 class="box-title font-weight-light" style="font-size: 20px; height: 9px;">Input Memorandum CA</h3>
                </div>
                <div class="box-body">
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_14" role="button" aria-expanded="false" aria-controls="collapse_14">
                            <a class="text-light">
                                <b>MUTASI BANK</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_14">
                            <form id="form_edit_mutasi_bank1">
                                <input type="hidden" name="id_mutasi_bank1">
                                <div class="row">
                                    <input type="hidden" name="urutan_mutasi[]" value="1">
                                    <div class="form-group col-md-4">
                                        <label>Bank</label>
                                        <input type="text" class="form-control" id="nama_bank_mutasi_ca_1" name="nama_bank_mutasi_ca[]" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>No Rekerning</label>
                                        <input type="text" class="form-control" id="no_rekening_mutasi_ca_1" name="no_rekening_mutasi_ca[]" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>Nama Pemilik Mutasi</label>
                                        <input type="text" class="form-control" id="nama_pemilik_mutasi_ca_1" name="nama_pemilik_mutasi_ca[]" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                </div>
                                <div class="box-body table-responsive no-padding">
                                    <table id="table-mutasi" class="table table-bordered table-hover" style="width: 970px">
                                        <thead style="font-size: 14px">
                                            <tr>
                                                <th rowspan="2">
                                                    Periode Bulanan
                                                </th>
                                                <th colspan="2" style="text-align: center;">
                                                    Mutasi Debet
                                                </th>
                                                <th colspan="2" style="text-align: center;">
                                                    Mutasi Kredit
                                                </th>
                                                <th rowspan="2" style="text-align: center;">
                                                    Saldo Rp.(000)
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    Frekuensi
                                                </th>
                                                <th>
                                                    Rp.(000)
                                                </th>
                                                <th>
                                                    Frekuensi
                                                </th>
                                                <th>
                                                    Rp.(000)
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="mutasi" style="font-size: 13px">
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode1_ca" name="periode_mutasi_ca[0][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_1deb_ca" name="frek_debet_mutasi_ca[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_1deb_ca" name="nominal_debet_mutasi_ca[0][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_1kred_ca" name="frek_kredit_mutasi_ca[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_1kred_ca" name="nominal_kredit_mutasi_ca[0][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo1_ca" name="saldo_mutasi_ca[0][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode2_ca" name="periode_mutasi_ca[0][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_2deb_ca" name="frek_debet_mutasi_ca[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_2deb_ca" name="nominal_debet_mutasi_ca[0][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_2kred_ca" name="frek_kredit_mutasi_ca[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_2kred_ca" name="nominal_kredit_mutasi_ca[0][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo2_ca" name="saldo_mutasi_ca[0][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <input class="form-control" type="text" id="periode3_ca" name="periode_mutasi_ca[0][]" onkeyup="this.value = this.value.toUpperCase()" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_3deb_ca" name="frek_debet_mutasi_ca[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_3deb_ca" name="nominal_debet_mutasi_ca[0][]" />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="frekuensi_3kred_ca" name="frek_kredit_mutasi_ca[0][]" onkeypress="return hanyaAngka(event)" />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control uang" type="text" id="nominal_3kred_ca" name="nominal_kredit_mutasi_ca[0][]" />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control uang" type="text" id="saldo3_ca" name="saldo_mutasi_ca[0][]" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="190px">
                                                    <button type="button" class="btn btn-primary" id="rata_rata_mutasi_bank1" onclick="rata_rata_mutasi_bank11()">Rata-Rata</button>
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="total_frekuensi_1deb_ca" name="rata_rata_frekuensi_deb_ca1" readonly />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control" type="text" id="total_nominal_1deb_ca" name="rata_rata_nominal_deb_ca1" readonly />
                                                </td>
                                                <td width="100px">
                                                    <input class="form-control" type="text" id="total_frekuensi_1kred_ca" name="rata_rata_frekuensi_kredit_ca1" readonly />
                                                </td>
                                                <td width="300px">
                                                    <input class="form-control" type="text" id="total_nominal_1kred_ca" name="rata_rata_nominal_kredit_ca1" readonly />
                                                </td>
                                                <td width="400px">
                                                    <input class="form-control" type="text" id="total_saldo1_ca" name="rata_rata_saldo_ca1" readonly />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="float: right;">
                                        <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Bank</label>
                                    <input type="text" class="form-control" id="nama_bank_mutasi_ca_2" name="nama_bank_mutasi_ca[]" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>No Rekerning</label>
                                    <input type="text" class="form-control" id="no_rekening_mutasi_ca_2" name="no_rekening_mutasi_ca[]" onkeypress="return hanyaAngka(event)">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nama Pemilik Mutasi</label>
                                    <input type="text" class="form-control" id="nama_pemilik_mutasi_ca_2" name="nama_pemilik_mutasi_ca[]" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                            </div>
                            <div class="box-body table-responsive no-padding">
                                <table id="table-mutasi" class="table table-bordered table-hover" style="width: 970px">
                                    <thead style="font-size: 14px">
                                        <tr>
                                            <th rowspan="2">
                                                Periode Bulanan
                                            </th>
                                            <th colspan="2" style="text-align: center;">
                                                Mutasi Debet
                                            </th>
                                            <th colspan="2" style="text-align: center;">
                                                Mutasi Kredit
                                            </th>
                                            <th rowspan="2" style="text-align: center;">
                                                Saldo Rp.(000)
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                Frekuensi
                                            </th>
                                            <th>
                                                Rp.(000)
                                            </th>
                                            <th>
                                                Frekuensi
                                            </th>
                                            <th>
                                                Rp.(000)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="mutasi" style="font-size: 13px">
                                        <tr>
                                            <td width="190px">
                                                <input class="form-control" type="text" id="periode1_b2_ca" name="periode_mutasi_ca[1][]" onkeyup="this.value = this.value.toUpperCase()" />
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="frekuensi_1deb_b2_ca" name="frek_debet_mutasi_ca[1][]" onkeypress="return hanyaAngka(event)" />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control uang" type="text" id="nominal_1deb_b2_ca" name="nominal_debet_mutasi_ca[1][]" />
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="frekuensi_1kred_b2_ca" name="frek_kredit_mutasi_ca[1][]" onkeypress="return hanyaAngka(event)" />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control uang" type="text" id="nominal_1kred_b2_ca" name="nominal_kredit_mutasi_ca[1][]" />
                                            </td>
                                            <td width="400px">
                                                <input class="form-control uang" type="text" id="saldo1_b2_ca" name="saldo_mutasi_ca[1][]" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="190px">
                                                <input class="form-control" type="text" id="periode2_b2_ca" name="periode_mutasi_ca[1][]" onkeyup="this.value = this.value.toUpperCase()" />
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="frekuensi_2deb_b2_ca" name="frek_debet_mutasi_ca[1][]" onkeypress="return hanyaAngka(event)" />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control uang" type="text" id="nominal_2deb_b2_ca" name="nominal_debet_mutasi_ca[1][]" />
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="frekuensi_2kred_b2_ca" name="frek_kredit_mutasi_ca[1][]" onkeypress="return hanyaAngka(event)" />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control uang" type="text" id="nominal_2kred_b2_ca" name="nominal_kredit_mutasi_ca[1][]" />
                                            </td>
                                            <td width="400px">
                                                <input class="form-control uang" type="text" id="saldo2_b2_ca" name="saldo_mutasi_ca[1][]" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="190px">
                                                <input class="form-control" type="text" id="periode3_b2_ca" name="periode_mutasi_ca[1][]" onkeyup="this.value = this.value.toUpperCase()" />
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="frekuensi_3deb_b2_ca" name="frek_debet_mutasi_ca[1][]" onkeypress="return hanyaAngka(event)" />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control uang" type="text" id="nominal_3deb_b2_ca" name="nominal_debet_mutasi_ca[1][]" />
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="frekuensi_3kred_b2_ca" name="frek_kredit_mutasi_ca[1][]" onkeypress="return hanyaAngka(event)" />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control uang" type="text" id="nominal_3kred_b2_ca" name="nominal_kredit_mutasi_ca[1][]" />
                                            </td>
                                            <td width="400px">
                                                <input class="form-control uang" type="text" id="saldo3_b2_ca" name="saldo_mutasi_ca[1][]" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="190px">
                                                <button type="button" class="btn btn-primary" id="rata_rata_mutasi_bank2" onclick="rata_rata_mutasi_bank2()">Rata-Rata</button>
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="total_frekuensi_1deb_b2_ca" name="rata_rata_frekuensi_deb_ca2" readonly />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control" type="text" id="total_nominal_1deb_b2_ca" name="rata_rata_nominal_deb_ca2" readonly />
                                            </td>
                                            <td width="100px">
                                                <input class="form-control" type="text" id="total_frekuensi_1kred_b2_ca" name="rata_rata_frekuensi_kredit_ca2" readonly />
                                            </td>
                                            <td width="300px">
                                                <input class="form-control" type="text" id="total_nominal_1kred_b2_ca" name="rata_rata_nominal_kredit_ca2" readonly />
                                            </td>
                                            <td width="400px">
                                                <input class="form-control" type="text" id="total_saldo2_ca" name="rata_rata_saldo_ca2" readonly />
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_15" role="button" aria-expanded="false" aria-controls="collapse_15">
                            <a class="text-light">
                                <b>DATA KEUANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_15">
                            <form id="form_edit_data_keuangan">
                                <input type="hidden" id="id_data_keuangan" name="id_data_keuangan">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Tujuan Pembukaan Rekening</label>
                                            <input type="text" class="form-control" name="tujuan_pembukaan_rek_ca" value="PENCAIRAN KREDIT" onkeyup="this.value = this.value.toUpperCase()" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Penghasilan Per Tahun</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="penghasilan_per_tahun_ca" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Sumber Penghasilan<span class="required_notification">*</span></label>
                                            <select name="sumber_penghasilan_ca" class="form-control" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <?php foreach ($data_sumber_penghasilan->result() as $p) { ?>
                                                    echo "
                                                    <option id="sumber_penghasilan<?php echo $p->kode_sumber_penghasilan ?>" value="<?php echo $p->id_detail_params ?>"><?php echo $p->nama_detail ?></option>";
                                                <?php  } ?>

                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label>Pemasukan Per Bulan<span class="required_notification">*</span></label>
                                                <select name="pemasukan_per_bulan_ca" class="form-control" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_pemasukan_perbulan->result() as $p) { ?>
                                                        <option id="pemasukan_perbulan<?php echo $p->kode_pemasukan_per_bulan ?>" value="<?php echo $p->kode_pemasukan_per_bulan ?>"><?php echo $p->desk_pemasukan_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="exampleInput1" class="bmd-label-floating">Frek. Trans Pemasukan</label>
                                                <select name="frek_trans_pemasukan_ca" class="form-control ">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_frek_trans_pemasukan->result() as $p) { ?>
                                                        echo "
                                                        <option id="frek_pemasukan_perbulan<?php echo $p->kode_frek_pemasukan_per_bulan ?>" value="<?php echo $p->kode_frek_pemasukan_per_bulan ?>"><?php echo $p->desk_frek_pemasukan_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label>Pengeluaran Per Bulan<span class="required_notification">*</span></label>
                                                <select name="pengeluaran_per_bulan_ca" class="form-control" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_pengeluaran_per_bulan->result() as $p) { ?>
                                                        echo "
                                                        <option id="pengeluaran_perbulan<?php echo $p->kode_pengeluaran_per_bulan ?>" value="<?php echo $p->kode_pengeluaran_per_bulan ?>"><?php echo $p->desk_pengeluaran_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="exampleInput1" class="bmd-label-floating">Frek. Trans Pengeluaran</label>
                                                <select name="frek_trans_pengeluaran_ca" class="form-control ">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($data_frek_pengeluaran->result() as $p) { ?>
                                                        echo "
                                                        <option id="frek_pengeluaran<?php echo $p->kode_frek_pengeluaran_per_bulan ?>" value="<?php echo $p->kode_frek_pengeluaran_per_bulan ?>"><?php echo $p->desk_frek_pengeluaran_per_bulan ?></option>";
                                                    <?php  } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Sumber Dana Setoran</label>
                                            <select name="sumber_dana_setoran_ca" class="form-control ">
                                                <option value="">--Pilih--</option>
                                                <?php foreach ($data_sumber_data_untuk_setoran->result() as $p) { ?>
                                                    echo "
                                                    <option id="sumber_dana_setoran<?php echo $p->kode_sumber_dana_untuk_setoran ?>" value="<?php echo $p->kode_sumber_dana_untuk_setoran ?>"><?php echo $p->desk_sumber_dana_untuk_setoran ?></option>";
                                                <?php  } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Tujuan Pengeluaran Dana</label>
                                            <select name="tujuan_pengeluaran_dana_ca" class="form-control ">
                                                <option value="">--Pilih--</option>
                                                <option id="konsumtif_detail" value="KONSUMTIF">KONSUMTIF</option>
                                                <option id="modal_kerja_detail" value="MODAL KERJA">MODAL KERJA</option>
                                                <option id="investasi_detail" value="INVESTASI">INVESTASI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">No Rek Bank</label>
                                            <input type="text" class="form-control" name="no_rekening_ca" aria-describedby="emailHelp" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_16" role="button" aria-expanded="false" aria-controls="collapse_16">
                            <a class="text-light">
                                <b>INFORMASI DAN ANALISA CREDIT CHECKING</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_16">
                            <div class="col-md-12" id="">
                                <div class="box-body table-responsive no-padding">
                                    <button type="button" class="btn btn-primary" id="tambah_informasi_cc" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                    <table id="example4" class="table table-bordered table-hover table-sm">
                                        <thead style="font-size: 11px" class="bg-success">
                                            <tr>
                                                <th>
                                                    Aksi
                                                </th>
                                                <th>
                                                    Nama Bank
                                                </th>
                                                <th>
                                                    Plafon
                                                </th>
                                                <th>
                                                    Baki Debet
                                                </th>
                                                <th>
                                                    Angsuran
                                                </th>
                                                <th>
                                                    Collectabilitas
                                                </th>
                                                <th>
                                                    Jenis Kredit
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_informasi_analisa_credit" style="font-size: 12px">
                                        </tbody>
                                        <tfoot id="data_informasi_analisa_credit_tot" style="font-size: 12px; font-weight: 600">
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3 ao">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_23" role="button" aria-expanded="false" aria-controls="collapse_23">
                            <a class="text-light">
                                <b>KAPASITAS BULANAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_23">
                            <form id="form_edit_kapasitas_bulanan_ca">
                                <input type="hidden" name="id_kapasitas_bulanan_ca" id="id_kapasitas_bulanan_ca">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-header bg-gradient-danger">
                                            <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                                <b>Pemasukan</b>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Calon Debitur<span class="required_notification">*</span></label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_debitur_ca_detail" name="pemasukan_debitur_ca_detail" onkeyup="total_pemasukan_kapasitas_bulanan_detail_ca();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Pasangan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_pasangan_ca_detail" id="pemasukan_pasangan_ca_detail" onkeyup="total_pemasukan_kapasitas_bulanan_detail_ca();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Penjamin</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_penjamin_ca_detail" id="pemasukan_penjamin_ca_detail" onkeyup="total_pemasukan_kapasitas_bulanan_detail_ca();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Pemasukan</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pemasukan_ca_detail" name="total_pemasukan_ca_detail" style="color: #000; font-weight: 500;" readonly value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-header bg-gradient-danger">
                                            <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                                <b>Pengeluaran</b>
                                            </a>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Rumah Tangga</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_rumah_tangga_ca_detail" name="biaya_rumah_tangga_ca_detail" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_detail_ca();">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Transportasi<span class="required_notification">*</span></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_transportasi_ca_detail" name="biaya_transportasi_ca_detail" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_detail_ca();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row" style="margin-top: -16px;">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Pendidikan</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_pendidikan_ca_detail" name="biaya_pendidikan_ca_detail" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_detail_ca();">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Telpon, Listrik dan Air<span class="required_notification">*</span></label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_telp_listr_air_ca_detail" name="biaya_telp_listr_air_ca_detail" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_detail_ca();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6" style="margin-top: -17px;">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Angsuran Lain</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="angsuran_lain_ca_detail" value="0" name="angsuran_lain_ca_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_detail_ca();">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6" style="margin-top: -17px;">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Lain-Lain</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" id="biaya_lain_ca_detail" value="0" name="biaya_lain_ca_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_detail_ca();">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: -16px;">
                                            <label for="exampleInputEmail1">Total Pengeluaran</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pengeluaran_ca_detail" value="0" name="total_pengeluaran_ca_detail" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <form id="form_edit_pendapatan_usaha_ca">
                        <input type="hidden" name="id_pendapatan_usaha_ca">
                        <div class="card mb-3 ao">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_30" role="button" aria-expanded="false" aria-controls="collapse_30">
                                <a class="text-light">
                                    <b>PENDAPATAN & PENGELUARAN USAHA(JIKA PENGUSAHA)</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_30">
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pendapatan Usaha</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Tunai</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_tunai_ca_detail" name="pemasukan_tunai_ca_detail" value="0" aria-describedby="" onkeyup="total_pendapatan_usaha_detail_ca();">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Kredit</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_kredit_ca_detail" name="pemasukan_kredit_ca_detail" value="0" aria-describedby="" onkeyup="total_pendapatan_usaha_detail_ca();">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pengeluaran Usaha</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Sewa/Kontrak</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_sewa_ca_detail" name="biaya_sewa_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Gaji Pegawai</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_gaji_pegawai_ca_detail" name="biaya_gaji_pegawai_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Belanja Barang</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_belanja_brg_ca_detail" name="biaya_belanja_brg_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Telpon, Listrik dan Air</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_telp_listr_air_usaha_ca_detail" name="biaya_telp_listr_air_usaha_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Sampah & Keamanan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_sampah_keamanan_ca_detail" name="biaya_sampah_keamanan_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Kirim Barang</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_kirim_barang_ca_detail" name="biaya_kirim_barang_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Pembayaran Hutang Dagang</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_hutang_dagang_ca_detail" name="biaya_hutang_dagang_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Angsuran Lain</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_angsuran_ca_detail" name="biaya_angsuran_ca_detail" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Lainnya</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="biaya_lain_lain_ca_detail" name="biaya_lain_lain_ca_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_usaha_detail_ca();" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Total</label>
                                <div class="row">
                                    <div class="col-md-4" style="float: right;">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pendapatan Usaha</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pendapatan_usaha_ca_detail" name="pendapatan_usaha_ca_detail" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" value="0" readonly>
                                            <input type="hidden" value="0" id="pendapatan_usaha_ca_hide_detail">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pengeluaran Usaha</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pengeluaran_usaha_ca_detail" name="pengeluaran_usaha_ca_detail" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" value="0" readonly>
                                            <input type="hidden" value="0" id="pengeluaran_usaha_ca_hide_detail">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keuntungan Usaha</label>
                                            <input type="text" class="form-control" data-a-sep="." data-a-dec="," id="keuntungan_usaha_ca_detail" name="keuntungan_usaha_ca_detail" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" onclick="total_keuntungan_usaha();" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_18" role="button" aria-expanded="false" aria-controls="collapse_18">
                            <a class="text-light">
                                <b>RINGKASAN ANALISA ASPEK KUALITATIF</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_18">
                            <form id="form_edit_data_kualitatif">
                                <input type="hidden" id="id_data_kualitatif" name="id_data_kualitatif">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Analisa Kualitatif(1P+5C)</label>
                                            <textarea id="kualitatif_analisa_detail" name="kualitatif_analisa_detail" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Strength</label>
                                            <textarea id="kualitatif_strenght_detail" name="kualitatif_strenght_detail" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Weakness</label>
                                            <textarea id="kualitatif_weakness_detail" name="kualitatif_weakness_detail" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Opportunity</label>
                                            <textarea id="kualitatif_opportunity_detail" name="kualitatif_opportunity_detail" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Threatness</label>
                                            <textarea id="kualitatif_threatness_detail" name="kualitatif_threatness_detail" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <form id="form_edit_penyimpangan">
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_19" role="button" aria-expanded="false" aria-controls="collapse_19">
                                <a class="text-light">
                                    <b>PENYIMPANGAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_19">
                                <input type="hidden" id="id_data_penyimpangan" name="id_data_penyimpangan">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="bmd-label-floating">Penyimpangan Struktur Dan Resiko</label>
                                    <textarea type="text" class="form-control" id="penyimpangan_struktur_detail" name="penyimpangan_struktur_detail" rows="5" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" id="btn_penyimpangan" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form id="form_edit_struktur_pinjaman">
                        <input type="hidden" name="id_struktur_pinjaman" id="id_struktur_pinjaman">
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_21" role="button" aria-expanded="false" aria-controls="collapse_21">
                                <a class="text-light">
                                    <b>STRUKTUR PINJAMAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_21">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <label>Produk<span class="required_notification">*</span></label>
                                                <select id="produk_struktur" name="produk_struktur" class="form-control">
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Plafon Kredit</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" name="plafon_kredit_struktur" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jangka Waktu<span class="required_notification">*</span></label>
                                                <select name="jangka_waktu" id="jangka_waktu_struktur" class="form-control select2 select2-danger" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <option id="tenor12_struktur" value="12">12</option>
                                                    <option id="tenor18_struktur" value="18">18</option>
                                                    <option id="tenor24_struktur" value="24">24</option>
                                                    <option id="tenor30_struktur" value="30">30</option>
                                                    <option id="tenor36_struktur" value="36">36</option>
                                                    <option id="tenor48_struktur" value="48">48</option>
                                                    <option id="tenor60_struktur" value="60">60</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Suku Bunga</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" name="suku_bunga_struktur">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Pembayaran Angsuran/ Bulan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="pembayaran_bunga_struktur" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Akad Kredit<span class="required_notification">*</span></label>
                                            <select name="akad_kredit_struktur" id="akad_kredit_struktur" class="form-control select2 select2-danger" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <option value="ADENDUM">ADENDUM</option>
                                                <option value="NOTARIS">NOTARIS</option>
                                                <option value="INTERNAL">INTERNAL</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ikatan Agunan<span class="required_notification">*</span></label>
                                            <select name="ikatan_agunan_struktur" id="ikatan_agunan_struktur" class="form-control select2 select2-danger" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <option value="APHT">APHT</option>
                                                <option value="SKMHT">SKMHT</option>
                                                <option value="FIDUSIA">FIDUSIA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Provisi</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_provisi_struktur" id="biaya_provisi_struktur" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Administrasi</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_administrasi_struktur" id="biaya_administrasi_struktur" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Credit Checking</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_credit_checking_struktur" id="biaya_credit_checking_struktur" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Notaris</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="notaris_struktur" id="notaris_struktur" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Biaya Tabungan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" name="biaya_tabungan_struktur" id="biaya_tabungan_struktur" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Asuransi Jiwa</label>
                                        <div class="row">
                                            <div class="form-group col-md-7">
                                                <label class="bmd-label-floating">Nama Asuransi</label>
                                                <select name="nama_asuransi_jiwa_struktur" id="nama_asuransi_jiwa_struktur" class="form-control" style="width: 100%;">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label class="bmd-label-floating">Jangka Waktu</label>
                                                <input type="text" class="form-control" name="jangka_waktu_as_jiwa_struktur" id="jangka_waktu_as_jiwa_struktur" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Nilai Pertanggungan</label>
                                                <input type="text" class="form-control uang" name="nilai_pertanggungan_as_jiwa_struktur" id="nilai_pertanggungan_as_jiwa_struktur">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Premi</label>
                                                <input type="text" class="form-control uang" name="premi_asuransi_jiwa_sturktur" value="0">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Tanggal Jatuh Tempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="jatuh_tempo_as_jiwa_struktur" id="jatuh_tempo_as_jiwa_struktur" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Umur Nasabah</label>
                                                <input type="text" class="form-control" name="umur_nasabah_as_jiwa_struktur" id="umur_nasabah_as_jiwa_struktur" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Berat Badan (KG)</label>
                                                <input type="text" class="form-control" name="berat_badan_as_jiwa_struktur" id="berat_badan_as_jiwa_struktur" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Tingggi Badan (CM)</label>
                                                <input type="text" class="form-control" name="tinggi_badan_as_jiwa_struktur" id="tinggi_badan_as_jiwa_struktur" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Asuransi Jaminan Kebakaran</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Asuransi</label>
                                            <select name="nama_asuransi_kebakaran_struktur" id="nama_asuransi_kebakaran_struktur" class="form-control" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Jangka Waktu</label>
                                                <input type="text" class="form-control" name="jangka_waktu_as_kebakaran_struktur" id="jangka_waktu_as_kebakaran_struktur" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Tanggal Jatuh Tempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="jatuh_tempo_as_kebakaran_struktur" id="jatuh_tempo_as_kebakaran_struktur" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Nilai Pertanggungan</label>
                                                <input type="text" class="form-control uang" name="nilai_pertanggungan_as_kebakaran_struktur" id="nilai_pertanggungan_as_kebakaran_struktur" value="0">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Premi</label>
                                                <input type="text" class="form-control uang" name="premi_asuransi_kebakaran_sturktur" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Asuransi Jaminan Kendaraan</label>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nama Asuransi</label>
                                            <select name="nama_asuransi_kendaraan_struktur" id="nama_asuransi_kendaraan_struktur" class="form-control" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Jangka Waktu</label>
                                                <input type="text" class="form-control" name="jangka_waktu_as_kendaraan_struktur" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Tanggal Jatuh Tempo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="jatuh_tempo_as_kendaraan_struktur" id="jatuh_tempo_as_kendaraan_struktur" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Nilai Pertanggungan</label>
                                                <input type="text" class="form-control uang" name="nilai_pertanggungan_as_kendaraan_struktur" id="nilai_pertanggungan_as_kendaraan_struktur">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="bmd-label-floating">Premi</label>
                                                <input type="text" class="form-control uang" name="premi_asuransi_kendaraan_sturktur" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form id="form_edit_data_rekomendasi_pinjaman">
                        <input type="hidden" id="id_data_rekomendasi_pinjaman" name="id_data_rekomendasi_pinjaman">
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_20" role="button" aria-expanded="false" aria-controls="collapse_20">
                                <a class="text-light">
                                    <b>REKOMENDASI PINJAMAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_20">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Rekomendasi Nilai Pinjaman</label>
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Rp.</span>
                                                    </div>
                                                    <input type="text" class="form-control uang" id="recom_nilai_pinjaman_detail" name="recom_nilai_pinjaman_detail" value="0" onkeyup="angsuran_perbulan_detail_ca()">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Rekomendasi Tenor<span class="required_notification">*</span></label>
                                                <select name="recom_tenor_detail" id="recom_tenor_detail" class="form-control select2 select2-danger" style="width: 100%;" onchange="angsuran_perbulan_detail_ca();">
                                                    <option id="recomtenor12" value="12">12</option>
                                                    <option id="recomtenor18" value="18">18</option>
                                                    <option id="recomtenor24" value="24">24</option>
                                                    <option id="recomtenor30" value="30">30</option>
                                                    <option id="recomtenor36" value="36">36</option>
                                                    <option id="recomtenor48" value="48">48</option>
                                                    <option id="recomtenor60" value="60">60</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1" class="bmd-label-floating">Bunga Pinjaman<span class="required_notification">*</span></label>
                                                <div class="input-group ">
                                                    <input type="number" class="form-control" id="recom_bunga_pinjaman_detail" name="recom_bunga_pinjaman_detail" onkeyup="angsuran_perbulan_detail_ca();">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">%</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label>Rekomendasi Produk Kredit<span class="required_notification">*</span></label>
                                                <select id="recom_produk_kredit_detail" name="recom_produk_kredit_detail" class="form-control">
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Rekomendasi Angsuran</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="recom_angsuran_detail" name="recom_angsuran_detail" value="0" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Note Rekomendasi</label>
                                            <textarea type="text" class="form-control" style="height: 185px" id="note_recom_detail" name="note_recom_detail" onkeyup="this.value = this.value.toUpperCase()"> </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" id="btn_rekomendasi_pinjaman" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <form id="form_edit_data_kuantitatif">
                        <input type="hidden" name="id_data_kuantitatif">
                        <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_17" role="button" aria-expanded="false" aria-controls="collapse_17">
                                <a class="text-light">
                                    <b>RINGKASAN ANALISA ASPEK KUANTITATIF</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_17">
                                <button type="button" class="btn btn-primary" onclick="hitung_kuantitatif_ca()">Hitung</button>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Total Pendapatan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_ttl_pendapatan_detail" name="kuantitatif_ttl_pendapatan_detail" onkeypress="return hanyaAngka(event)" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Total Pengeluaran</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_ttl_pengeluaran_detail" name="kuantitatif_ttl_pengeluaran_detail" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Disposible Income</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_pendapatan_detail" name="kuantitatif_pendapatan_detail" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Angsuran Perbulan</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp.</span>
                                                </div>
                                                <input type="text" class="form-control uang" id="kuantitatif_angsuran_detail" name="kuantitatif_angsuran_detail" value="0" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">LTV</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="kuantitatif_ltv_detail" name="kuantitatif_ltv_detail" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">DSR</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="kuantitatif_dsr_detail" name="kuantitatif_dsr_detail" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">IDIR</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" id="kuantitatif_idir_detail" name="kuantitatif_idir_detail" readonly>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Hasil</label>
                                            <input type="text" class="form-control" id="kuantitatif_hasil_detail" name="kuantitatif_hasil_detail" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--  -->
        <form id="form_edit_ktp_deb">
            <input type="hidden" id="id_debitur_ktp" name="id_debitur_ktp">
            <div class="modal fade in" id="modal_edit_ktp" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran KTP Debitur</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_ktp_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_ktp_pasangan">
            <input type="hidden" id="id_debitur_ktp_pasangan" name="id_debitur_ktp_pasangan">
            <div class="modal fade in" id="modal_edit_ktp_pasangan" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran KTP Pasangan</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_foto_ktp_pasangan" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_foto_usaha">
            <input type="hidden" id="id_debitur_foto_usaha" name="id_debitur_foto_usaha">
            <div class="modal fade in" id="modal_edit_foto_usaha" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran Foto Usaha</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_foto_usaha_edit" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_form_persetujuan_ideb">
            <input type="hidden" id="id_debitur_form_persetujuan_ideb" name="id_debitur_form_persetujuan_ideb">
            <div class="modal fade in" id="modal_edit_form_persetujuan_ideb" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran Form Persetujuan IDEB</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_form_persetujuan_edit" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_kk_deb">
            <input type="hidden" id="id_debitur_kk" name="id_debitur_kk">
            <div class="modal fade in" id="modal_edit_kk" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran KK Debitur</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_kk_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_sertifikat_deb">
            <input type="hidden" id="id_debitur_sertifikat" name="id_debitur_sertifikat">
            <div class="modal fade in" id="modal_edit_sertifikat" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran Sertifikat</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_sertifikat_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_pbb_deb">
            <input type="hidden" id="id_debitur_pbb" name="id_debitur_pbb">
            <div class="modal fade in" id="modal_edit_pbb" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran PBB</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_pbb_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_imb_deb">
            <input type="hidden" id="id_debitur_imb" name="id_debitur_imb">
            <div class="modal fade in" id="modal_edit_imb" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran IMB</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_imb_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_skk_deb">
            <input type="hidden" id="id_debitur_skk" name="id_debitur_skk">
            <div class="modal fade in" id="modal_edit_skk" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran Surat Keterangan Kerja</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_skk_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_slip_gaji_deb">
            <input type="hidden" id="id_debitur_slip_gaji" name="id_debitur_slip_gaji">
            <div class="modal fade in" id="modal_edit_slip_gaji" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran Slip Gaji</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_slip_gaji_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_sku_deb">
            <input type="hidden" id="id_debitur_sku" name="id_debitur_sku">
            <div class="modal fade in" id="modal_edit_sku" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran Surat Keterangan Usaha</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_sku_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_pembukuan_usaha_deb">
            <input type="hidden" id="id_debitur_pembukuan_usaha" name="id_debitur_pembukuan_usaha">
            <div class="modal fade in" id="modal_edit_pembukuan_usaha" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran Pembukuan Usaha</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_pembukuan_usaha_deb" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_penjamin">
            <div class="modal fade in" id="modal_penjamin" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Penjamin</h5>
                            <button type="button" class="close close_deb" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:500px; overflow-y:scroll">
                            <div class="row">
                                <input type="hidden" id="edit_id_penjamin" name="edit_id_penjamin">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                        <input type="text" name="nama_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                        <input type="text" name="nama_ibu_kandung_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No KTP<span class="required_notification">*</span></label>
                                        <input type="text" name="no_ktp_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control " maxlength="16">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No NPWP</label>
                                        <input type="text" name="no_npwp_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control " maxlength="15">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tempat Lahir<span class="required_notification">*</span></label>
                                        <input type="text" name="tempat_lahir_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="tgl_lahir_pen" id="tgl_lahir_pen" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hubungan<span class="required_notification">*</span></label>
                                        <div class="input-group">
                                            <select name="hubungan_penjamin" id="hubungan_penjamin" class="form-control" style="width: 100%;" onchange="showDiv()">
                                                <option value="">-- Pilih --</option>
                                                <option id="hub_ortu_penj" value="ORANG TUA">ORANG TUA</option>
                                                <option id="hub_kakak_penj" value="KAKAK">KAKAK</option>
                                                <option id="hub_adik_penj" value="ADIK">ADIK</option>
                                                <option id="hub_mertua_penj" value="MERTUA">MERTUA</option>
                                                <option id="hub_anak_penj" value="ANAK">ANAK</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kelamin<span class="required_notification">*</span></label>
                                        <select name="jenis_kelamin_pen" id="select_jenis_kel_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No Telpon<span class="required_notification">*</span></label>
                                        <input type="text" name="notelp_pen" class="form-control" maxlength="13" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Alamat<small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                <textarea id="alamat_ktp_pen" name="alamat_ktp_pen" class="form-control" onkeyup="this.value = this.value.toUpperCase()" style="height: 125px;"></textarea>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInput1">Pekerjaan</label>
                                        <select id="pekerjaan_pen" name="pekerjaan_pen" class="form-control ">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Perusahaan</label>
                                        <input type="text" class="form-control" name="nama_perusahaan_pen" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Posisi</label>
                                        <input type="text" class="form-control" name="posisi_usaha_pen" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Usaha</label>
                                        <input type="text" class="form-control" name="jenis_usaha_pen" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Alamat Usaha/Kantor</label>
                                    <input type="text" class="form-control" name="alamat_usaha_kantor_pen" onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>RT</label>
                                    <input type="text" class="form-control" name="rt_usaha_kantor_pen" maxlength="3" onkeypress="return hanyaAngka(event)">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>RW</label>
                                    <input type="text" class="form-control" name="rw_usaha_kantor_pen" maxlength="3" onkeypress="return hanyaAngka(event)">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6" id="select_provinsi_kantor_pen">
                                    <label>Provinsi</label>
                                    <select name="provinsi_kantor_pen" id="provinsi_kantor_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        <option>--Pilih--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6" id="select_kabupaten_kantor_pen">
                                    <label>Kabupaten</label>
                                    <select name="kabupaten_kantor_pen" id="kabupaten_kantor_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        <option>--Pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6" id="select_kecamatan_kantor_pen">
                                    <label>Kecamatan</label>
                                    <select name="kecamatan_kantor_pen" id="kecamatan_kantor_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        <option>--Pilih--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6" id="select_kelurahan_kantor_pen">
                                    <label>Kelurahan</label>
                                    <select name="kelurahan_kantor_pen" id="kelurahan_kantor_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        <option>--Pilih--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-3">
                                    <label>Kode POS</label>
                                    <input type="text" name="kode_pos_kantor_pen" id="kode_pos_kantor_pen" class="form-control">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Tanggal Mulai Bekerja</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        <input type="text" id="tgl_mulai_kerja_pen" name="tgl_mulai_kerja_pen" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>No Telpon Kantor/Usaha</label>
                                    <input type="text" class="form-control" name="no_telp_tempat_kerja_pen" maxlength="13" onkeypress="return hanyaAngka(event)">
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-4" id="ktp_pen">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">KTP Penjamin</label>
                                            <button type="button" id="lamp-ktp-pen" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_ktp_pen" data-id="65"><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="kk_pen">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">KK Penjamin</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_kk_pen"><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-4" id="ktp_pas_pen">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">KTP Pasangan Penjamin</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_ktp_pasangan_pen"><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="bukunikah_pen">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Buku Nikah Penjamin</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_buku_nikah_pen"><i class="fa fa-paperclip"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_ktp_penjamin">
            <div class="modal fade in" id="modal_edit_ktp_pen" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Ubah Lampiran KTP Penjamin</label>
                                <input type="hidden" id="id_ktp_pen" name="id_ktp_pen">
                                <div class="input-group">
                                    <input type="file" name="lamp_ktp_pen" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_ktp_pas_penjamin">
            <div class="modal fade in" id="modal_edit_ktp_pasangan_pen" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" id="id_ktp_pasangan_pen" name="id_ktp_pasangan_pen">
                                <label for="exampleInputFile">Ubah KTP Pasangan Penjamin</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_ktp_pasangan_pen" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_buku_nikah_penjamin">
            <div class="modal fade in" id="modal_edit_buku_nikah_pen" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" id="id_buku_nikah_pen" name="id_buku_nikah_pen">
                                <label for="exampleInputFile">Ubah Lampiran Buku Nikah Penjamin</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_buku_nikah_pen" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_kk_penjamin">
            <div class="modal fade in" id="modal_edit_kk_pen" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" id="id_kk_pen" name="id_kk_pen">
                                <label for="exampleInputFile">Ubah Lampiran KK Penjamin</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_kk_pen" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_buku_tabungan_deb">
            <input type="hidden" id="id_debitur_buku_tabungan" name="id_debitur_buku_tabungan">
            <div class="modal fade in" id="modal_edit_buku_tabungan" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <label for="exampleInputFile">Lampiran Buku Tabungan</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_buku_tabungan_deb[]" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_agunan">
            <input type="hidden" name="id_agunan" id="id_agunan">
            <div class="modal fade in" id="modal_edit_agunan" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Agunan Sertifikat</h5>
                            <button type="button" class="close close_deb" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:500px; overflow-y:scroll">
                            <div class="col-md-12" id="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Lokasi Agunan<span class="required_notification">*</span></label>
                                            <select name="tipe_lokasi_agunan" class="form-control ">
                                                <option value="">-- Pilih --</option>
                                                <option id="lok_perum" value="PERUM">PERUMAHAN</option>
                                                <option id="lok_biasa" value="BIASA">NON PERUMAHAN</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat Sesuai KTP<span class="required_notification">*</span></label>
                                                <input type="text" name="alamat_agunan" class="form-control" id="inputEmail4" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RT<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="rt_agunan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RW<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="rw_agunan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi<span class="required_notification">*</span></label>
                                            <select name="id_prov_agunan" id="select_provinsi_agunan" class="form-control select2 select2-danger">
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Kabupaten/Kota<span class="required_notification">*</span></label>
                                                <select id="select_kabupaten_agunan" name="id_kab_agunan" class="form-control select2 select2-danger">
                                                    <option value="">--Pilih--</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="id_kec_agunan" id="select_kecamatan_agunan" class="form-control select2 select2-danger">
                                                    <option value="">--Pilih--</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="id_kel_agunan" id="select_kelurahan_agunan" class="form-control select2 select2-danger">
                                                    <option value="">--Pilih--</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kode POS<span class="required_notification">*</span></label>
                                                <input type="text" name="kode_pos_agunan" class="form-control" maxlength="5" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Luas Tanah (m2)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="luas_tanah" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Luas Bangunan (m2)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="luas_bangunan" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                                            <input type="text" name="nama_pemilik_sertifikat" class="form-control " onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Jenis Sertifikat</label>
                                            <select id="jenis_sertifikat" name="jenis_sertifikat" class="form-control " onchange="showshgb()">
                                                <option value="">-- Pilih --</option>
                                                <option id="jenis_shm" value="SHM">SHM</option>
                                                <option id="jenis_shgb" value="SHGB">SHGB</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nomor Sertifikat<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_sertifikat" aria-describedby="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal & Nomor Ukur sertifikat</label>
                                            <input type="text" class="form-control" name="no_ukur_sertifikat">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Berlaku SHGB<span id="wajib_shgb" class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="tgl_berlaku_shgb" class="datepicker-here form-control" data-language="en" data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nomor IMB<small><i>(Jika Ada)</i></small></label>
                                                <input type="text" class="form-control" name="no_imb">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">NJOP<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" name="njop">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">NOP<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="nop">
                                            </div>
                                        </div>
                                    </div>
                                    <script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
                                </div>
                                <div class="form-group">
                                    <label>LAMPIRAN<span class="required_notification">*</span></label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-4" id="ktp_pen">
                                            <div class="form-group">
                                                <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Tampak Depan</label>
                                                <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_foto_agunan_tampak_depan" data-id="65"><i class="fa fa-paperclip"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="kk_pen">
                                            <div class="form-group">
                                                <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Tampak Jalan</label>
                                                <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_foto_agunan_tampak_jalan"><i class="fa fa-paperclip"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-4" id="ktp_pas_pen">
                                            <div class="form-group">
                                                <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Tampak Ruang Tamu</label>
                                                <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_foto_agunan_tampak_ruang_tamu"><i class="fa fa-paperclip"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="bukunikah_pen">
                                            <div class="form-group">
                                                <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Tampak Dapur</label>
                                                <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_foto_agunan_tampak_dapur"><i class="fa fa-paperclip"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4" id="bukunikah_pen">
                                            <div class="form-group">
                                                <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Tampak Kamar Mandi</label>
                                                <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_foto_agunan_tampak_kamar_mandi"><i class="fa fa-paperclip"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div style="float: right; margin-right: 7px;">
                                    <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_agunan_tampak_depan">
            <div class="modal fade in" id="modal_edit_foto_agunan_tampak_depan" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" id="id_agunan_depan" name="id_agunan_depan">
                                <label for="exampleInputFile">Ubah Foto Agunan Tampak Depan</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_agunan_tampak_depan" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_agunan_tampak_jalan">
            <div class="modal fade in" id="modal_edit_foto_agunan_tampak_jalan" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" name="id_agunan_jalan">
                                <label for="exampleInputFile">Ubah Foto Agunan Tampak Jalan</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_agunan_tampak_jalan" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_agunan_tampak_ruang_tamu">
            <div class="modal fade in" id="modal_edit_foto_agunan_tampak_ruang_tamu" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" id="id_agunan_ruang_tamu" name="id_agunan_ruang_tamu">
                                <label for="exampleInputFile">Ubah Foto Agunan Tampak Ruang Tamu</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_agunan_tampak_ruang_tamu" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_agunan_tampak_dapur">
            <div class="modal fade in" id="modal_edit_foto_agunan_tampak_dapur" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" id="id_agunan_dapur" name="id_agunan_dapur">
                                <label for="exampleInputFile">Ubah Foto Agunan Tampak Dapur</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_agunan_tampak_dapur" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_agunan_tampak_kamar_mandi">
            <div class="modal fade in" id="modal_edit_foto_agunan_tampak_kamar_mandi" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class='modal-body text-center'>
                            <div class="form-group">
                                <input type="hidden" id="id_agunan_kamar_mandi" name="id_agunan_kamar_mandi">
                                <label for="exampleInputFile">Ubah Foto Agunan Tampak Kamar Mandi</label>
                                <div class="input-group">
                                    <input type="file" name="lamp_agunan_tampak_kamar_mandi" class="form-control" style="height: 45px">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_modal_agunan_sertifikat">
            <input type="hidden" name="id_trans_so_aguanan" id="id_trans_so_aguanan">
            <div class="modal fade in" id="modal_tambah_agunan_sertifikat" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Jaminan Agunan Sertifikat</h5>
                            <button type="button" class="close close_deb" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:500px; overflow-y:scroll">
                            <div class="col-md-12" id="">
                                <input type="hidden" name="id_so_agunan_sertifikat">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Lokasi Agunan<span class="required_notification">*</span></label>
                                            <select id="tipe_lokasi_agunan_tbh" name="tipe_lokasi_agunan" class="form-control ">
                                                <option value="">-- Pilih --</option>
                                                <option value="PERUM">PERUMAHAN</option>
                                                <option value="BIASA">NON PERUMAHAN</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat Agunan<span class="required_notification">*</span></label>
                                                <input type="text" id="alamat_agunan_tbh" name="alamat_agunan" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RT<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="rt_agunan_tbh" name="rt_agunan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RW<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="rw_agunan_tbh" name="rw_agunan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Provinsi<span class="required_notification">*</span></label>
                                            <select name="id_prov_agunan" id="select_provinsi_agunan_tbh" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">

                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Kabupaten/Kota<span class="required_notification">*</span></label>
                                                <select id="select_kabupaten_agunan_tbh" name="id_kab_agunan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                    <option value="">--Pilih--</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="id_kec_agunan" id="select_kecamatan_agunan_tbh" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                    <option value="">--Pilih--</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="id_kel_agunan" id="select_kelurahan_agunan_tbh" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                    <option value="">--Pilih--</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kode POS<span class="required_notification">*</span></label>
                                                <input type="text" id="kode_pos_agunan_tbh" name="kode_pos_agunan" class="form-control" maxlength="5" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Luas Tanah (m2)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="luas_tanah_tbh" name="luas_tanah" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Luas Bangunan (m2)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="luas_bangunan_tbh" name="luas_bangunan" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                                            <input type="text" id="nama_pemilik_sertifikat_tbh" name="nama_pemilik_sertifikat" class="form-control " onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Jenis Sertifikat</label>
                                            <select id="jenis_sertifikat_tbh" name="jenis_sertifikat" class="form-control " onchange="showshgb()">
                                                <option value="">-- Pilih --</option>
                                                <option value="SHM">SHM</option>
                                                <option value="SHGB">SHGB</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nomor Sertifikat<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="no_sertifikat_tbh" name="no_sertifikat" aria-describedby="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal & Nomor Ukur sertifikat</label>
                                            <input type="text" class="form-control" id="no_ukur_sertifikat_tbh" name="no_ukur_sertifikat">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Berlaku SHGB<span id="wajib_shgb" class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="far fa-calendar-alt"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" id="tgl_berlaku_shgb_tbh" name="tgl_berlaku_shgb" class="datepicker-here form-control" data-language="en" data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nomor IMB<small><i>(Jika Ada)</i></small></label>
                                                <input type="text" class="form-control" name="no_imb">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">NJOP<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" id="njop_tbh" name="njop">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">NOP<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="nop_tbh" name="nop">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="add-lamp-agunan">
                                    <h5>LAMPIRAN</h5>
                                    <input type="hidden" id="input-id-lamp-agunan" name="input_id_lamp_agunan">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Foto Agunan Tampak Depan<span class="required_notification add-lamp-agunan-depan">*</span></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="agunan_bag_depan" class="custom-file-input add_lamp_agunan_depan">
                                                        <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto Agunan Tampak Jalan<span class="required_notification add-lamp-agunan-jalan">*</span></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="agunan_bag_jalan" class="custom-file-input add_lamp_agunan_jalan">
                                                        <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto Agunan Tampak Ruang Tamu<span class="required_notification add-lamp-agunan-rtamu">*</span></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="agunan_bag_ruangtamu" class="custom-file-input add_lamp_agunan_rtamu">
                                                        <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Foto Agunan Tampak Dapur<span class="required_notification add-lamp-agunan-dapur">*</span></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="agunan_bag_dapur" class="custom-file-input add_lamp_agunan_dapur">
                                                        <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Foto Agunan Tampak Kamar Mandi<span class="required_notification add-lamp-agunan-rmandi">*</span></label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="agunan_bag_kamarmandi" class="custom-file-input add_lamp_agunan_rmandi">
                                                        <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div style="float: right; margin-right: 7px;">
                                    <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success add-lamp-agunan-save">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_modal_tambah_penjamin">
            <div class="modal fade in" id="modal_tambah_penjamin" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Penjamin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:500px; overflow-y:scroll">
                            <div id="form_input_data_penjamin">
                                <div class="row">
                                    <input type="hidden" id="add_id_so_penjamin" name="add_id_so_penjamin">
                                    <input type="hidden" id="add_id_penjamin" name="add_id_penjamin">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                            <input type="text" name="add_nama_penjamin" id="add_nama_penjamin" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                            <input type="text" name="add_nama_ibu_kandung_penjamin" id="add_nama_ibu_kandung_penjamin" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No KTP<span class="required_notification">*</span></label>
                                            <input type="text" name="add_no_ktp_penjamin" id="add_no_ktp_penjamin" onkeypress="return hanyaAngka(event)" class="form-control " maxlength="16">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No NPWP</label>
                                            <input type="text" name="add_no_npwp_penjamin" id="add_no_npwp_penjamin" onkeypress="return hanyaAngka(event)" class="form-control " maxlength="15">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tempat Lahir<span class="required_notification">*</span></label>
                                            <input type="text" name="add_tempat_lahir_penjamin" id="add_tempat_lahir_penjamin" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" name="add_tgl_lahir_penjamin" id="add_tgl_lahir_penjamin" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Hubungan<span class="required_notification">*</span></label>
                                            <div class="input-group">
                                                <select name="add_hubungan_penjamin" id="add_hubungan_penjamin" class="form-control" style="width: 100%;" onchange="showDiv()">
                                                    <option value="">-- Pilih --</option>
                                                    <option value="ORANG TUA">ORANG TUA</option>
                                                    <option value="KAKAK">KAKAK</option>
                                                    <option value="ADIK">ADIK</option>
                                                    <option value="MERTUA">MERTUA</option>
                                                    <option value="ANAK">ANAK</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin<span class="required_notification">*</span></label>
                                            <select name="add_jenis_kelamin_penjamin" id="add_jenis_kelamin_penjamin" class="form-control" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <option id="L" value="L">LAKI-LAKI</option>
                                                <option id="P" value="P">PEREMPUAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No Telpon<span class="required_notification">*</span></label>
                                            <input type="text" name="add_notelp_penjamin" id="add_notelp_penjamin" class="form-control" maxlength="13" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Alamat<small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                    <textarea name="add_alamat_ktp_penjamin" id="add_alamat_ktp_penjamin" class="form-control" onkeyup="this.value = this.value.toUpperCase()" style="height: 125px;"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Pekerjaan</label>
                                            <select name="add_pekerjaan_pen" id="add_pekerjaan_pen" class="form-control ">
                                                <option value="">--Pilih--</option>
                                                <option id="pek_pen_karyawan" value="KARYAWAN">KARYAWAN</option>
                                                <option id="pek_pen_pns" value="PNS">PNS</option>
                                                <option id="pek_pen_wiraswasta" value="WIRASWASTA">WIRASWASTA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Perusahaan</label>
                                            <input type="text" class="form-control" id="add_nama_perusahaan_penjamin" name="add_nama_perusahaan_penjamin" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Posisi</label>
                                            <input type="text" class="form-control" id="add_posisi_usaha_penjamin" name="add_posisi_usaha_penjamin" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jenis Usaha</label>
                                            <input type="text" class="form-control" id="add_jenis_usaha_penjamin" name="add_jenis_usaha_penjamin" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Alamat Usaha/Kantor</label>
                                        <input type="text" class="form-control" id="add_alamat_usaha_kantor_penjamin" name="add_alamat_usaha_kantor_penjamin" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>RT</label>
                                        <input type="text" class="form-control" id="add_rt_usaha_kantor_penjamin" name="add_rt_usaha_kantor_penjamin" maxlength="3" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>RW</label>
                                        <input type="text" class="form-control" id="add_rw_usaha_kantor_penjamin" name="add_rw_usaha_kantor_penjamin" maxlength="3" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Provinsi</label>
                                        <select name="add_provinsi_kantor_penjamin" id="add_provinsi_kantor_penjamin" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten</label>
                                        <select name="add_kabupaten_kantor_penjamin" id="add_kabupaten_kantor_penjamin" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>Kecamatan</label>
                                        <select name="add_kecamatan_kantor_penjamin" id="add_kecamatan_kantor_penjamin" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan</label>
                                        <select name="add_kelurahan_kantor_penjamin" id="add_kelurahan_kantor_penjamin" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label>Kode POS</label>
                                        <input type="text" name="add_kode_pos_kantor_pen" id="add_kode_pos_kantor_pen" class="form-control">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label>Tanggal Mulai Bekerja</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" id="add_tgl_mulai_kerja" name="add_tgl_mulai_kerja" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>No Telpon Kantor/Usaha</label>
                                        <input type="text" class="form-control" id="add_no_telp_kantor_usaha" name="add_no_telp_kantor_usaha" maxlength="13" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                            </div>
                            <div id="add-lamp-penjamin">
                                <h5>LAMPIRAN</h5>
                                <input type="hidden" id="input-id-lamp-agunan-detail" name="input_id_lamp_agunan_detail">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>KTP Penjamin<span class="required_notification add-lamp-ktp-penjamin">*</span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="add_lamp_ktp_penjamin" class="custom-file-input add_lamp_ktp_penjamin">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>KK Penjamin<span class="required_notification add-lamp-kk-penjamin">*</span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="add_lamp_kk_penjamin" class="custom-file-input add_lamp_kk_penjamin">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>KTP Pasangan Penjamin<span class="required_notification add-lamp-ktp-pas-penjamin"></span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="add_lamp_ktp_pas_penjamin" class="custom-file-input add_lamp_ktp_pas_penjamin">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Buku Nikah Penjamin<span class="required_notification add-lamp-buku-nikah-penjamin"></span></label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="add_lamp_buku_nikah_penjamin" class="custom-file-input add_lamp_buku_nikah_penjamin">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="add_simpan_penjamin" class="btn btn-primary submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_edit_penjamin">
            <div class="modal fade in" id="modal_penjamin" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Data Penjamin</h5>
                            <button type="button" class="close close_deb" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="height:500px; overflow-y:scroll">
                            <div class="row">
                                <input type="hidden" id="edit_id_penjamin" name="edit_id_penjamin">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                        <input type="text" name="nama_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                        <input type="text" name="nama_ibu_kandung_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary submit">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form id="form_modal_tambah_analisa_cc">
            <div class="modal fade in" id="modal_tambah_analisa_cc" data-keyboard="false" data-backdrop="static">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Input Informasi Analisa Credit Checking</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <input type="hidden" id="add_id_so_analisa_cc" name="add_id_so_analisa_cc">
                                <input type="hidden" id="edit_id_info_analisa_cc" name="edit_id_info_analisa_cc">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Bank <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                        <input type="text" name="add_nama_bank" id="add_nama_bank" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Plafon<span class="required_notification">*</span></label>
                                        <input type="text" name="add_plafon" id="add_plafon" class="form-control uang">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Baki Debet<span class="required_notification">*</span></label>
                                        <input type="text" name="add_baki_debet" id="add_baki_debet" class="form-control uang">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Angsuran<span class="required_notification">*</span></label>
                                        <input type="text" name="add_angsuran" id="add_angsuran" class="form-control uang">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Collectabilitas<span class="required_notification">*</span></label>
                                        <input type="text" name="add_collectabilitas" id="add_collectabilitas" onkeypress="return hanyaAngka(event)" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Kredit<span class="required_notification">*</span></label>
                                        <input type="text" name="add_jenis_kredit" id="add_jenis_kredit" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" id="load_data"></div>
            </div>
        </div>

        <script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
        <script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

        <script type="text/javascript">
            tambah_penjamin = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/penjamin/tambah/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            tambah_analisa_cc = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/info_cc/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            edit_analisa_cc = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/info_cc/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'PUT',
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            hide_all = function() {
                $('#lihat_data_credit').hide();
                $('#lihat_detail').hide();
            }
            hide_all();
            $('#lihat_data_credit').show();

            $("#tambah_informasi_cc").click(function() {
                $('#modal_tambah_analisa_cc').modal('show');
            });

            $("#tambah_penjamin").click(function() {
                $('#form_modal_tambah_penjamin')[0].reset();
                $('#modal_tambah_penjamin').modal('show');
                $('#add-lamp-penjamin').hide();
                $("#form_input_data_penjamin").show();
                $("#add_simpan_penjamin").show();
                $(".add-lamp-ktp-penjamin").html('');
                $(".add-lamp-kk-penjamin").html('');
                $(".add-lamp-ktp-pas-penjamin").html('');
                $(".add-lamp-buku-nikah-penjamin").html('');
                get_provinsi()
                    .done(function(res) {
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_modal_tambah_penjamin select[id=add_provinsi_kantor_penjamin]').html(select1 + select);
                    })

                $('#add_provinsi_kantor_penjamin').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(res) {
                            var select = [];
                            var select1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select.push(option);
                            });
                            $('#form_modal_tambah_penjamin select[id=add_kabupaten_kantor_penjamin]').html(select1 + select);
                        }
                    });
                });

                $('#add_kabupaten_kantor_penjamin').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(res) {
                            var select = [];
                            var select1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select.push(option);
                            });
                            $('#form_modal_tambah_penjamin select[id=add_kecamatan_kantor_penjamin]').html(select1 + select);
                        }
                    });
                });

                $('#add_kecamatan_kantor_penjamin').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(res) {
                            var select = [];
                            var select1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select.push(option);
                            });
                            $('#form_modal_tambah_penjamin select[id=add_kelurahan_kantor_penjamin]').html(select1 + select);
                        }
                    });
                });

                $('#add_kelurahan_kantor_penjamin').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',

                        success: function(response) {
                            var data = response.data;
                            $('#form_modal_tambah_penjamin input[name=add_kode_pos_kantor_pen]').val(data.kode_pos);
                        }
                    });
                });
            })

            get_credit_checking = function(opts, id) {
                var url = '<?php echo config_item('api_url') ?>api/master/mca/';
                if (id != undefined) {
                    url += id;
                }

                if (opts != undefined) {
                    var data = opts;
                }

                return $.ajax({
                    // type : 'GET',
                    url: url,
                    data: data,
                    dataSrc: "",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            get_pekerjaan = function(opts) {
                var url = '<?php echo $this->config->item('api_url'); ?>pekerjaan';
                return $.ajax({
                    type: 'GET',
                    url: url,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            get_ca = function(opts, id) {
                var url = '<?php echo config_item('api_url') ?>api/master/mca/status/ca/recommend/';
                if (id != undefined) {
                    url += id;
                }

                if (opts != undefined) {
                    var data = opts;
                }

                return $.ajax({
                    // type : 'GET',
                    url: url,
                    data: data,
                    dataSrc: "",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            get_detail_ca = function(opts, id) {
                var url = '<?php echo config_item('api_url') ?>api/master/mca/' + id + '/detail';
                if (opts != undefined) {
                    var data = opts;
                }

                return $.ajax({
                    url: url,
                    data: data,
                    dataSrc: "",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            // //LOAD DATA
            $('#lihat_data_credit').show();
            // load_data_ca();
            // $('#table_data_ca').dataTable({

            // });


            tampil_data_ca();

            function tampil_data_ca() {
                $('#table_ca').DataTable({

                    "processing": true,
                    "serverSide": true,
                    'destroy': true,
                    "order": [],

                    "ajax": {
                        "url": "<?php echo site_url('Ca_controller/get_data_ca') ?>",
                        "type": "POST"
                    },

                    "columnDefs": [{
                        "targets": [0],
                        "orderable": false,
                    }, ],

                })
            };

            function tampil_data_pengajuan() {
                $('#table_pengajuan').DataTable({

                    "processing": true,
                    "serverSide": true,
                    'destroy': true,
                    "order": [],

                    "ajax": {
                        "url": "<?php echo site_url('Ca_controller/get_data_pengajuan') ?>",
                        "type": "POST"
                    },

                    "columnDefs": [{
                        "targets": [0],
                        "orderable": false,
                    }, ],

                })
            };

            function load_data_ca() {
                $.ajax({
                    type: 'GET',
                    url: '<?php echo $this->config->item('api_url'); ?>api/master/mca/status/ca/recommend',
                    async: false,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    success: function(response) {
                        data = response.data;
                        var html = '';
                        var no = 0;
                        var i;
                        for (i = 0; i < data.length; i++) {
                            var revisi = data[i].no_rev[0].revisi;
                            if (revisi == null) {
                                var no_ref = "-";
                            } else {
                                var no_ref = data[i].no_rev[0].revisi;
                            }
                            no++;
                            html += '<tr>' +
                                '<td>' + no + '</td>' +
                                '<td>' + data[i].tgl_transaksi + '</td>' +
                                '<td>' + data[i].nomor_so + '</td>' +
                                '<td>' + no_ref + '</td>' +
                                '<td>' + data[i].nama_marketing + '</td>' +
                                '<td>' + data[i].nama_debitur + '</td>' +
                                '<td>' + data[i].cabang + '</td>' +
                                '<td style="text-align:left;">' +
                                '<form method="post" target="_blank" action="<?php echo base_url() . 'index.php/report/memo_ca' ?>"> <button type="button" class="btn btn-info btn-sm edit"   data-target="#update" data="' + data[i].id_trans_so + '"><i class="fas fa-pencil-alt"></i></button> &nbsp' +

                                '<input type="hidden" name ="id" value="' + data[i].id_trans_so + '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>' +
                                '</td>' +
                                '</tr>';
                        }
                        $('#data_creditchecking').html(html);
                    }

                });
            }


            get_pengajuan = function(opts, id) {
                var url = '<?php echo config_item('api_url') ?>api/master/mca/status/ca/waiting/';
                // var url = '<?php echo config_item('api_url') ?>api/master/mao/status/ao/waiting';
                if (id != undefined) {
                    url += id;
                }

                if (opts != undefined) {
                    var data = opts;
                }

                return $.ajax({
                    // type : 'GET',
                    url: url,
                    data: data,
                    dataSrc: "",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                });
            }

            $("#modal_pengajuan").click(function() {
                load_data_pengajuan = function() {
                    get_pengajuan()
                        .done(function(response) {
                            var data = response.data;
                            console.log(data);
                            var html = [];
                            var no = 0;
                            if (data.length === 0) {
                                var tr = [
                                    '<tr valign="midle">',
                                    '<td colspan="4">No Data</td>',
                                    '</tr>'
                                ].join('\n');
                                $('#data_pengajuan').html(tr);

                                return;
                            }
                            $.each(data, function(index, item) {
                                no++;

                                var tr = [
                                    '<tr>',
                                    '<td>' + no + '</td>',
                                    '<td>' + item.tgl_transaksi + '</td>',
                                    '<td>' + item.nomor_so + '</td>',
                                    '<td>' + item.asal_data + '</td>',
                                    '<td>' + item.pic + '</td>',
                                    '<td>' + item.nama_debitur + '</td>',
                                    '<td>' + item.cabang + '</td>',
                                    '<td style="width: 60px;">',
                                    '<button type="button" class="btn btn-info btn-sm edit"   data-target="#update" data="' + item.id_trans_so + '"><i class="fas fa-plus-circle"></i></button>',
                                    '</td>',
                                    '</tr>'
                                ].join('\n');
                                html.push(tr);
                            });
                            $('#data_pengajuan').html(html);
                            $('#table_pengajuan').DataTable({
                                "paging": true,
                                "retrieve": true,
                                "lengthChange": true,
                                "searching": true,
                                "ordering": true,
                                "info": true,
                                "autoWidth": false,
                            });
                            $('#batal').on('click');
                        })
                        .fail(function(response) {
                            $('#data_pengajuan').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                            $('#batal').on('click');
                        });
                }
                load_data_pengajuan();
                // tampil_data_pengajuan();
                $("#modal_data_pengajuan").modal('show');
            })


            //RIBUAN
            $('.uang').mask('0.000.000.000', {
                reverse: true
            });
            // =============================================================

            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            });

            //PERIODE MUTASI BANK
            function validasi() {
                var periode1 = document.getElementById("periode1").value;
                var periode2 = document.getElementById("periode2").value;
                var periode3 = document.getElementById("periode3").value;
                if (periode1 != "" && periode2 != "" && periode3 != "") {
                    return true;
                } else {
                    alert('Data Harus Diisi 3 Periode !');
                }
            }


            function hanyaAngka(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))

                    return false;
                return true;
            }


            function rubah(angka) {
                var reverse = angka.toString().split('').reverse().join(''),
                    ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');
                return ribuan;
            }

            //RATA-RATA MUTASI BANK1
            function rata_rata_bank1() {

                var periode1 = document.getElementById("periode1").value;
                var periode2 = document.getElementById("periode2").value;
                var periode3 = document.getElementById("periode3").value;
                if (periode1 != "" && periode2 != "" && periode3 != "") {
                    //DEBET
                    var frekuensi_1deb = Math.floor(document.getElementById('frekuensi_1deb').value);
                    var frekuensi_2deb = Math.floor(document.getElementById('frekuensi_2deb').value);
                    var frekuensi_3deb = Math.floor(document.getElementById('frekuensi_3deb').value);
                    var total_frekuensi_deb = (frekuensi_1deb + frekuensi_2deb + frekuensi_3deb) / 3;
                    var total_frekuensi_deb1 = total_frekuensi_deb.toFixed(2);
                    document.getElementById('total_frekuensi_1deb').value = total_frekuensi_deb1;

                    var nominal_1deb = (document.getElementById('nominal_1deb').value).replace(/[^\d]/g, "");
                    nominal_1deb = Math.floor(nominal_1deb);

                    var nominal_2deb = (document.getElementById('nominal_2deb').value).replace(/[^\d]/g, "");
                    nominal_2deb = Math.floor(nominal_2deb);
                    var nominal_3deb = (document.getElementById('nominal_3deb').value).replace(/[^\d]/g, "");
                    nominal_3deb = Math.floor(nominal_3deb);
                    var formatter = new Intl.NumberFormat('id-ID', {
                        //style: 'decimal', //tanpa decimal, tanpa Rp
                        style: 'currency', //dengan 2 decimal, dengan Rp
                        currency: 'IDR',

                    });
                    var total_nominal_deb = (nominal_1deb + nominal_2deb + nominal_3deb) / 3;
                    var total_nominal_rp = formatter.format(Math.abs(total_nominal_deb));
                    document.getElementById('total_nominal_1deb').value = total_nominal_rp;
                    //=====================================================================

                    //KREDIT
                    var frekuensi_1kred = Math.floor(document.getElementById('frekuensi_1kred').value);
                    var frekuensi_2kred = Math.floor(document.getElementById('frekuensi_2kred').value);
                    var frekuensi_3kred = Math.floor(document.getElementById('frekuensi_3kred').value);
                    var total_frekuensi_kred = (frekuensi_1kred + frekuensi_2kred + frekuensi_3kred) / 3;
                    var total_frekuensi_kred1 = total_frekuensi_kred.toFixed(2);
                    document.getElementById('total_frekuensi_1kred').value = total_frekuensi_kred1;

                    var nominal_1kred = (document.getElementById('nominal_1kred').value).replace(/[^\d]/g, "");
                    nominal_1kred = Math.floor(nominal_1kred);

                    var nominal_2kred = (document.getElementById('nominal_2kred').value).replace(/[^\d]/g, "");
                    nominal_2kred = Math.floor(nominal_2kred);
                    var nominal_3kred = (document.getElementById('nominal_3kred').value).replace(/[^\d]/g, "");
                    nominal_3kred = Math.floor(nominal_3kred);
                    var formatter = new Intl.NumberFormat('id-ID', {
                        //style: 'decimal', //tanpa decimal, tanpa Rp
                        style: 'currency', //dengan 2 decimal, dengan Rp
                        currency: 'IDR',

                    });
                    var total_nominal_kred = (nominal_1kred + nominal_2kred + nominal_3kred) / 3;
                    var total_nominal__kred_rp = formatter.format(Math.abs(total_nominal_kred));
                    document.getElementById('total_nominal_1kred').value = total_nominal__kred_rp;
                    //============================================================================

                    //SALDO
                    var saldo1 = (document.getElementById('saldo1').value).replace(/[^\d]/g, "");
                    saldo1 = Math.floor(saldo1);

                    var saldo2 = (document.getElementById('saldo2').value).replace(/[^\d]/g, "");
                    saldo2 = Math.floor(saldo2);
                    var saldo3 = (document.getElementById('saldo3').value).replace(/[^\d]/g, "");
                    saldo3 = Math.floor(saldo3);


                    var formatter = new Intl.NumberFormat('id-ID', {
                        //style: 'decimal', //tanpa decimal, tanpa Rp
                        style: 'currency', //dengan 2 decimal, dengan Rp
                        currency: 'IDR',

                    });
                    var total_saldo = (saldo1 + saldo2 + saldo3) / 3;
                    var total_saldo_rp = formatter.format(Math.abs(total_saldo));
                    document.getElementById('total_saldo1').value = total_saldo_rp;

                    //==============================================================================
                    // return true;
                } else {
                    alert('Data Harus Diisi 3 Periode !');
                }
            }
            // =============================================================

            //RATA-RATA MUTASI BANK2
            function rata_rata_bank2() {

                var periode1_b2 = document.getElementById("periode1_b2").value;
                var periode2_b2 = document.getElementById("periode2_b2").value;
                var periode3_b2 = document.getElementById("periode3_b2").value;
                if (periode1_b2 != "" && periode2_b2 != "" && periode3_b2 != "") {
                    //DEBET
                    var frekuensi_1deb_b2 = Math.floor(document.getElementById('frekuensi_1deb_b2').value);
                    var frekuensi_2deb_b2 = Math.floor(document.getElementById('frekuensi_2deb_b2').value);
                    var frekuensi_3deb_b2 = Math.floor(document.getElementById('frekuensi_3deb_b2').value);
                    var total_frekuensi_deb = (frekuensi_1deb_b2 + frekuensi_2deb_b2 + frekuensi_3deb_b2) / 3;
                    var total_frekuensi_deb1 = total_frekuensi_deb.toFixed(2);
                    document.getElementById('total_frekuensi_1deb_b2').value = total_frekuensi_deb1;

                    var nominal_1deb_b2 = (document.getElementById('nominal_1deb_b2').value).replace(/[^\d]/g, "");
                    nominal_1deb_b2 = Math.floor(nominal_1deb_b2);

                    var nominal_2deb_b2 = (document.getElementById('nominal_2deb_b2').value).replace(/[^\d]/g, "");
                    nominal_2deb_b2 = Math.floor(nominal_2deb_b2);
                    var nominal_3deb_b2 = (document.getElementById('nominal_3deb_b2').value).replace(/[^\d]/g, "");
                    nominal_3deb_b2 = Math.floor(nominal_3deb_b2);
                    var formatter = new Intl.NumberFormat('id-ID', {
                        //style: 'decimal', //tanpa decimal, tanpa Rp
                        style: 'currency', //dengan 2 decimal, dengan Rp
                        currency: 'IDR',

                    });
                    var total_nominal_deb = (nominal_1deb_b2 + nominal_2deb_b2 + nominal_3deb_b2) / 3;
                    var total_nominal_rp = formatter.format(Math.abs(total_nominal_deb));
                    document.getElementById('total_nominal_1deb_b2').value = total_nominal_rp;
                    //=====================================================================

                    //KREDIT
                    var frekuensi_1kred_b2 = Math.floor(document.getElementById('frekuensi_1kred_b2').value);
                    var frekuensi_2kred_b2 = Math.floor(document.getElementById('frekuensi_2kred_b2').value);
                    var frekuensi_3kred_b2 = Math.floor(document.getElementById('frekuensi_3kred_b2').value);
                    var total_frekuensi_kred = (frekuensi_1kred_b2 + frekuensi_2kred_b2 + frekuensi_3kred_b2) / 3;
                    var total_frekuensi_kred1 = total_frekuensi_kred.toFixed(2);
                    document.getElementById('total_frekuensi_1kred_b2').value = total_frekuensi_kred1;

                    var nominal_1kred_b2 = (document.getElementById('nominal_1kred_b2').value).replace(/[^\d]/g, "");
                    nominal_1kred_b2 = Math.floor(nominal_1kred_b2);

                    var nominal_2kred_b2 = (document.getElementById('nominal_2kred_b2').value).replace(/[^\d]/g, "");
                    nominal_2kred_b2 = Math.floor(nominal_2kred_b2);
                    var nominal_3kred_b2 = (document.getElementById('nominal_3kred_b2').value).replace(/[^\d]/g, "");
                    nominal_3kred_b2 = Math.floor(nominal_3kred_b2);
                    var formatter = new Intl.NumberFormat('id-ID', {
                        //style: 'decimal', //tanpa decimal, tanpa Rp
                        style: 'currency', //dengan 2 decimal, dengan Rp
                        currency: 'IDR',

                    });
                    var total_nominal_kred = (nominal_1kred_b2 + nominal_2kred_b2 + nominal_3kred_b2) / 3;
                    var total_nominal__kred_rp = formatter.format(Math.abs(total_nominal_kred));
                    document.getElementById('total_nominal_1kred_b2').value = total_nominal__kred_rp;
                    //============================================================================

                    //SALDO
                    var saldo1_b2 = (document.getElementById('saldo1_b2').value).replace(/[^\d]/g, "");
                    saldo1_b2 = Math.floor(saldo1_b2);

                    var saldo2_b2 = (document.getElementById('saldo2_b2').value).replace(/[^\d]/g, "");
                    saldo2_b2 = Math.floor(saldo2_b2);
                    var saldo3_b2 = (document.getElementById('saldo3_b2').value).replace(/[^\d]/g, "");
                    saldo3_b2 = Math.floor(saldo3_b2);


                    var formatter = new Intl.NumberFormat('id-ID', {
                        //style: 'decimal', //tanpa decimal, tanpa Rp
                        style: 'currency', //dengan 2 decimal, dengan Rp
                        currency: 'IDR',

                    });
                    var total_saldo = (saldo1_b2 + saldo2_b2 + saldo3_b2) / 3;
                    var total_saldo_rp = formatter.format(Math.abs(total_saldo));
                    document.getElementById('total_saldo2').value = total_saldo_rp;

                    //==============================================================================
                    // return true;
                } else {
                    alert('Data Harus Diisi 3 Periode !');
                }
            }
            // =============================================================

            function rata_rata_mutasi_bank11() {

                var periode1 = document.getElementById("periode1_ca").value;
                var periode2 = document.getElementById("periode2_ca").value;
                var periode3 = document.getElementById("periode3_ca").value;

                //DEBET
                var frekuensi_1deb = Math.floor(document.getElementById('frekuensi_1deb_ca').value);
                var frekuensi_2deb = Math.floor(document.getElementById('frekuensi_2deb_ca').value);
                var frekuensi_3deb = Math.floor(document.getElementById('frekuensi_3deb_ca').value);
                var total_frekuensi_deb = (frekuensi_1deb + frekuensi_2deb + frekuensi_3deb) / 3;
                var total_frekuensi_deb1 = total_frekuensi_deb.toFixed(2);
                document.getElementById('total_frekuensi_1deb_ca').value = total_frekuensi_deb1;

                var nominal_1deb = (document.getElementById('nominal_1deb_ca').value).replace(/[^\d]/g, "");
                nominal_1deb = Math.floor(nominal_1deb);

                var nominal_2deb = (document.getElementById('nominal_2deb_ca').value).replace(/[^\d]/g, "");
                nominal_2deb = Math.floor(nominal_2deb);
                var nominal_3deb = (document.getElementById('nominal_3deb_ca').value).replace(/[^\d]/g, "");
                nominal_3deb = Math.floor(nominal_3deb);
                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });
                var total_nominal_deb = (nominal_1deb + nominal_2deb + nominal_3deb) / 3;
                var total_nominal_rp = formatter.format(Math.abs(total_nominal_deb));
                document.getElementById('total_nominal_1deb_ca').value = total_nominal_rp;
                //=====================================================================

                //KREDIT
                var frekuensi_1kred = Math.floor(document.getElementById('frekuensi_1kred_ca').value);
                var frekuensi_2kred = Math.floor(document.getElementById('frekuensi_2kred_ca').value);
                var frekuensi_3kred = Math.floor(document.getElementById('frekuensi_3kred_ca').value);
                var total_frekuensi_kred = (frekuensi_1kred + frekuensi_2kred + frekuensi_3kred) / 3;
                var total_frekuensi_kred1 = total_frekuensi_kred.toFixed(2);
                document.getElementById('total_frekuensi_1kred_ca').value = total_frekuensi_kred1;

                var nominal_1kred = (document.getElementById('nominal_1kred_ca').value).replace(/[^\d]/g, "");
                nominal_1kred = Math.floor(nominal_1kred);

                var nominal_2kred = (document.getElementById('nominal_2kred_ca').value).replace(/[^\d]/g, "");
                nominal_2kred = Math.floor(nominal_2kred);
                var nominal_3kred = (document.getElementById('nominal_3kred_ca').value).replace(/[^\d]/g, "");
                nominal_3kred = Math.floor(nominal_3kred);
                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });
                var total_nominal_kred = (nominal_1kred + nominal_2kred + nominal_3kred) / 3;
                var total_nominal__kred_rp = formatter.format(Math.abs(total_nominal_kred));
                document.getElementById('total_nominal_1kred_ca').value = total_nominal__kred_rp;
                //============================================================================

                //SALDO
                var saldo1 = (document.getElementById('saldo1_ca').value).replace(/[^\d]/g, "");
                saldo1 = Math.floor(saldo1);

                var saldo2 = (document.getElementById('saldo2_ca').value).replace(/[^\d]/g, "");
                saldo2 = Math.floor(saldo2);
                var saldo3 = (document.getElementById('saldo3_ca').value).replace(/[^\d]/g, "");
                saldo3 = Math.floor(saldo3);


                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });
                var total_saldo = (saldo1 + saldo2 + saldo3) / 3;
                var total_saldo_rp = formatter.format(Math.abs(total_saldo));
                document.getElementById('total_saldo1_ca').value = total_saldo_rp;

                //==============================================================================
            }

            //RATA-RATA MUTASI BANK2
            function rata_rata_mutasi_bank2() {

                var periode1_b2 = document.getElementById("periode1_b2_ca").value;
                var periode2_b2 = document.getElementById("periode2_b2_ca").value;
                var periode3_b2 = document.getElementById("periode3_b2_ca").value;

                //DEBET
                var frekuensi_1deb_b2 = Math.floor(document.getElementById('frekuensi_1deb_b2_ca').value);
                var frekuensi_2deb_b2 = Math.floor(document.getElementById('frekuensi_2deb_b2_ca').value);
                var frekuensi_3deb_b2 = Math.floor(document.getElementById('frekuensi_3deb_b2_ca').value);
                var total_frekuensi_deb = (frekuensi_1deb_b2 + frekuensi_2deb_b2 + frekuensi_3deb_b2) / 3;
                var total_frekuensi_deb1 = total_frekuensi_deb.toFixed(2);
                document.getElementById('total_frekuensi_1deb_b2_ca').value = total_frekuensi_deb1;

                var nominal_1deb_b2 = (document.getElementById('nominal_1deb_b2_ca').value).replace(/[^\d]/g, "");
                nominal_1deb_b2 = Math.floor(nominal_1deb_b2);

                var nominal_2deb_b2 = (document.getElementById('nominal_2deb_b2_ca').value).replace(/[^\d]/g, "");
                nominal_2deb_b2 = Math.floor(nominal_2deb_b2);
                var nominal_3deb_b2 = (document.getElementById('nominal_3deb_b2_ca').value).replace(/[^\d]/g, "");
                nominal_3deb_b2 = Math.floor(nominal_3deb_b2);
                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });
                var total_nominal_deb = (nominal_1deb_b2 + nominal_2deb_b2 + nominal_3deb_b2) / 3;
                var total_nominal_rp = formatter.format(Math.abs(total_nominal_deb));
                document.getElementById('total_nominal_1deb_b2_ca').value = total_nominal_rp;
                //=====================================================================

                //KREDIT
                var frekuensi_1kred_b2 = Math.floor(document.getElementById('frekuensi_1kred_b2_ca').value);
                var frekuensi_2kred_b2 = Math.floor(document.getElementById('frekuensi_2kred_b2_ca').value);
                var frekuensi_3kred_b2 = Math.floor(document.getElementById('frekuensi_3kred_b2_ca').value);
                var total_frekuensi_kred = (frekuensi_1kred_b2 + frekuensi_2kred_b2 + frekuensi_3kred_b2) / 3;
                var total_frekuensi_kred1 = total_frekuensi_kred.toFixed(2);
                document.getElementById('total_frekuensi_1kred_b2_ca').value = total_frekuensi_kred1;

                var nominal_1kred_b2 = (document.getElementById('nominal_1kred_b2_ca').value).replace(/[^\d]/g, "");
                nominal_1kred_b2 = Math.floor(nominal_1kred_b2);

                var nominal_2kred_b2 = (document.getElementById('nominal_2kred_b2_ca').value).replace(/[^\d]/g, "");
                nominal_2kred_b2 = Math.floor(nominal_2kred_b2);
                var nominal_3kred_b2 = (document.getElementById('nominal_3kred_b2_ca').value).replace(/[^\d]/g, "");
                nominal_3kred_b2 = Math.floor(nominal_3kred_b2);
                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });
                var total_nominal_kred = (nominal_1kred_b2 + nominal_2kred_b2 + nominal_3kred_b2) / 3;
                var total_nominal__kred_rp = formatter.format(Math.abs(total_nominal_kred));
                document.getElementById('total_nominal_1kred_b2_ca').value = total_nominal__kred_rp;
                //============================================================================

                //SALDO
                var saldo1_b2 = (document.getElementById('saldo1_b2_ca').value).replace(/[^\d]/g, "");
                saldo1_b2 = Math.floor(saldo1_b2);

                var saldo2_b2 = (document.getElementById('saldo2_b2_ca').value).replace(/[^\d]/g, "");
                saldo2_b2 = Math.floor(saldo2_b2);
                var saldo3_b2 = (document.getElementById('saldo3_b2_ca').value).replace(/[^\d]/g, "");
                saldo3_b2 = Math.floor(saldo3_b2);


                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });
                var total_saldo = (saldo1_b2 + saldo2_b2 + saldo3_b2) / 3;
                var total_saldo_rp = formatter.format(Math.abs(total_saldo));
                document.getElementById('total_saldo2_ca').value = total_saldo_rp;

                //==============================================================================

            }
            // =============================================================

            //TOTAL PEMASUKAN KAPASITAS BULANAN
            function total_pemasukan_kapasitas_bulanan_ca() {

                var pemasukan_debitur_ca = (document.getElementById('pemasukan_debitur_ca').value);
                pemasukan_debitur_ca = pemasukan_debitur_ca.replace(/[^\d]/g, "");

                var pemasukan_pasangan_ca = (document.getElementById('pemasukan_pasangan_ca').value);
                pemasukan_pasangan_ca = pemasukan_pasangan_ca.replace(/[^\d]/g, "");

                var pemasukan_penjamin_ca = (document.getElementById('pemasukan_penjamin_ca').value);
                pemasukan_penjamin_ca = pemasukan_penjamin_ca.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var cadeb = Math.floor(pemasukan_debitur_ca);
                var pasangan = Math.floor(pemasukan_pasangan_ca);
                var penjamin = Math.floor(pemasukan_penjamin_ca);

                var total = cadeb + pasangan + penjamin;
                var total_pemasukan = formatter.format(Math.abs(total));

                document.getElementById('total_pemasukan_ca').value = total_pemasukan;
            }
            // =============================================================

            //TOTAL PENGELUARAN KAPASITAS BULANAN
            function total_pengeluaran_kapasitas_bulanan_ca() {

                var pengeluaran_rumah_tangga = (document.getElementById('biaya_rumah_tangga_ca').value);
                pengeluaran_rumah_tangga = pengeluaran_rumah_tangga.replace(/[^\d]/g, "");

                var pengeluaran_transportasi = (document.getElementById('biaya_transportasi_ca').value);
                pengeluaran_transportasi = pengeluaran_transportasi.replace(/[^\d]/g, "");

                var pengeluaran_pendidikan = (document.getElementById('biaya_pendidikan_ca').value);
                pengeluaran_pendidikan = pengeluaran_pendidikan.replace(/[^\d]/g, "");

                var pengeluaran_telpon_listrik_air = (document.getElementById('biaya_telp_listr_air_ca').value);
                pengeluaran_telpon_listrik_air = pengeluaran_telpon_listrik_air.replace(/[^\d]/g, "");

                var pengeluaran_lain_lain = (document.getElementById('biaya_lain_ca').value);
                pengeluaran_lain_lain = pengeluaran_lain_lain.replace(/[^\d]/g, "");

                var pengeluaran_angsuran_lain_ca = (document.getElementById('angsuran_lain_ca').value);
                pengeluaran_angsuran_lain_ca = pengeluaran_angsuran_lain_ca.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var rumah_tangga = Math.floor(pengeluaran_rumah_tangga);
                var transportasi = Math.floor(pengeluaran_transportasi);
                var pendidikan = Math.floor(pengeluaran_pendidikan);
                var telpon_listrik_air = Math.floor(pengeluaran_telpon_listrik_air);
                var lain_lain = Math.floor(pengeluaran_lain_lain);
                var angsuran_lain_ca = Math.floor(pengeluaran_angsuran_lain_ca);

                var total = rumah_tangga + transportasi + pendidikan + telpon_listrik_air + lain_lain + angsuran_lain_ca;
                var total_pengeluaran = formatter.format(Math.abs(total));

                document.getElementById('total_pengeluaran_ca').value = total_pengeluaran;
            }
            // ======================================================================================

            //TOTAL PEMASUKAN KAPASITAS BULANAN CA DETAIL
            function total_pemasukan_kapasitas_bulanan_detail_ca() {

                var pemasukan_debitur_ca = (document.getElementById('pemasukan_debitur_ca_detail').value);
                pemasukan_debitur_ca = pemasukan_debitur_ca.replace(/[^\d]/g, "");

                var pemasukan_pasangan_ca = (document.getElementById('pemasukan_pasangan_ca_detail').value);
                pemasukan_pasangan_ca = pemasukan_pasangan_ca.replace(/[^\d]/g, "");

                var pemasukan_penjamin_ca = (document.getElementById('pemasukan_penjamin_ca_detail').value);
                pemasukan_penjamin_ca = pemasukan_penjamin_ca.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var cadeb = Math.floor(pemasukan_debitur_ca);
                var pasangan = Math.floor(pemasukan_pasangan_ca);
                var penjamin = Math.floor(pemasukan_penjamin_ca);

                var total = cadeb + pasangan + penjamin;
                var total_pemasukan = formatter.format(Math.abs(total));

                document.getElementById('total_pemasukan_ca_detail').value = total_pemasukan;
            }
            // =============================================================
            //TOTAL PENGELUARAN KAPASITAS BULANAN
            function total_pengeluaran_kapasitas_bulanan_detail_ca() {

                var pengeluaran_rumah_tangga = (document.getElementById('biaya_rumah_tangga_ca_detail').value);
                pengeluaran_rumah_tangga = pengeluaran_rumah_tangga.replace(/[^\d]/g, "");

                var pengeluaran_transportasi = (document.getElementById('biaya_transportasi_ca_detail').value);
                pengeluaran_transportasi = pengeluaran_transportasi.replace(/[^\d]/g, "");

                var pengeluaran_pendidikan = (document.getElementById('biaya_pendidikan_ca_detail').value);
                pengeluaran_pendidikan = pengeluaran_pendidikan.replace(/[^\d]/g, "");

                var pengeluaran_telpon_listrik_air = (document.getElementById('biaya_telp_listr_air_ca_detail').value);
                pengeluaran_telpon_listrik_air = pengeluaran_telpon_listrik_air.replace(/[^\d]/g, "");

                var pengeluaran_lain_lain = (document.getElementById('biaya_lain_ca_detail').value);
                pengeluaran_lain_lain = pengeluaran_lain_lain.replace(/[^\d]/g, "");

                var pengeluaran_angsuran_lain_ca = (document.getElementById('angsuran_lain_ca_detail').value);
                pengeluaran_angsuran_lain_ca = pengeluaran_angsuran_lain_ca.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var rumah_tangga = Math.floor(pengeluaran_rumah_tangga);
                var transportasi = Math.floor(pengeluaran_transportasi);
                var pendidikan = Math.floor(pengeluaran_pendidikan);
                var telpon_listrik_air = Math.floor(pengeluaran_telpon_listrik_air);
                var lain_lain = Math.floor(pengeluaran_lain_lain);
                var angsuran_lain_ca = Math.floor(pengeluaran_angsuran_lain_ca);

                var total = rumah_tangga + transportasi + pendidikan + telpon_listrik_air + lain_lain + angsuran_lain_ca;
                var total_pengeluaran = formatter.format(Math.abs(total));

                document.getElementById('total_pengeluaran_ca_detail').value = total_pengeluaran;
            }
            // ======================================================================================

            function hitung_kuantitatif() {

                var d = document.getElementById("total_pemasukan_ca").value;
                var tot_pemasukan_ca = d.substring(0, d.length - 3);
                var a_tot_pemasukan_ca = tot_pemasukan_ca.replace(/[^\d]/g, "");
                a_tot_pemasukan_ca += "";
                s_tot_pemasukan_ca = "";
                while (a_tot_pemasukan_ca.length > 3) {
                    s_tot_pemasukan_ca = "." + a_tot_pemasukan_ca.substr(a_tot_pemasukan_ca.length - 3, 3) + s_tot_pemasukan_ca;
                    a_tot_pemasukan_ca = a_tot_pemasukan_ca.substring(0, a_tot_pemasukan_ca.length - 3);
                }
                s_tot_pemasukan_ca = a_tot_pemasukan_ca + s_tot_pemasukan_ca;
                document.getElementById("kuantitatif_ttl_pendapatan").value = s_tot_pemasukan_ca;
                // document.getElementById("kuantitatif_ttl_pendapatan").value = document.getElementById("total_pemasukan_ca").value;

                var e = document.getElementById("total_pengeluaran_ca").value;
                var tot_pengeluaran_ca = e.substring(0, e.length - 3);
                var a_tot_pengeluaran_ca = tot_pengeluaran_ca.replace(/[^\d]/g, "");
                a_tot_pengeluaran_ca += "";
                s_tot_pengeluaran_ca = "";
                while (a_tot_pengeluaran_ca.length > 3) {
                    s_tot_pengeluaran_ca = "." + a_tot_pengeluaran_ca.substr(a_tot_pengeluaran_ca.length - 3, 3) + s_tot_pengeluaran_ca;
                    a_tot_pengeluaran_ca = a_tot_pengeluaran_ca.substring(0, a_tot_pengeluaran_ca.length - 3);
                }
                s_tot_pengeluaran_ca = a_tot_pengeluaran_ca + s_tot_pengeluaran_ca;
                document.getElementById("kuantitatif_ttl_pengeluaran").value = s_tot_pengeluaran_ca;
                // document.getElementById("kuantitatif_ttl_pengeluaran").value = document.getElementById("total_pengeluaran_ca").value;

                var kuantitatif_ttl_pendapatan = document.getElementById("kuantitatif_ttl_pendapatan").value;
                a = kuantitatif_ttl_pendapatan.replace(/[^\d]/g, "");
                var kuantitatif_ttl_pengeluaran = document.getElementById("kuantitatif_ttl_pengeluaran").value;
                b = kuantitatif_ttl_pengeluaran.replace(/[^\d]/g, "");
                var recom_angsuran = document.getElementById("recom_angsuran").value;
                c = recom_angsuran.replace(/[^\d]/g, "");
                var recom_pinjaman = document.getElementById("recom_nilai_pinjaman").value;
                f = recom_pinjaman.replace(/[^\d]/g, "");
                var nilai_taksasi_agunan = document.getElementById("nilai_taksasi_agunan").value;
                g = nilai_taksasi_agunan.replace(/[^\d]/g, "");
                var angsuran_lain_ca = document.getElementById("angsuran_lain_ca").value;
                h = angsuran_lain_ca.replace(/[^\d]/g, "");

                var idir = c / (a - b) * 100;
                document.getElementById("kuantitatif_idir").value = idir.toFixed(2);

                var ltv = f / g * (100);
                document.getElementById("kuantitatif_ltv").value = ltv.toFixed(2);

                var dsr = c / (a - h) * (100);
                document.getElementById("kuantitatif_dsr").value = dsr.toFixed(2);

                kuantitatif_disposible_income = a - b - c;
                kuantitatif_disposible_income += "";
                tot_disposible_income = "";
                while (kuantitatif_disposible_income.length > 3) {
                    tot_disposible_income = "." + kuantitatif_disposible_income.substr(kuantitatif_disposible_income.length - 3, 3) + tot_disposible_income;
                    kuantitatif_disposible_income = kuantitatif_disposible_income.substring(0, kuantitatif_disposible_income.length - 3);
                }
                tot_disposible_income = kuantitatif_disposible_income + tot_disposible_income;
                document.getElementById("kuantitatif_pendapatan").value = tot_disposible_income;

                c += "";
                rec_angsuran = "";
                while (c.length > 3) {
                    rec_angsuran = "." + c.substr(c.length - 3, 3) + rec_angsuran;
                    c = c.substring(0, c.length - 3);
                }
                rec_angsuran = c + rec_angsuran;
                document.getElementById("kuantitatif_angsuran").value = rec_angsuran;

                if (dsr <= 35 && ltv <= 70 && idir > 0 && idir < 80) {
                    document.getElementById("kuantitatif_hasil").value = 'LAYAK';
                } else if (dsr <= 35 && ltv > 70) {
                    document.getElementById("kuantitatif_hasil").value = 'DIPERTIMBANGKAN';
                } else if (dsr > 35 && ltv <= 70) {
                    document.getElementById("kuantitatif_hasil").value = 'DIPERTIMBANGKAN';
                } else if (dsr <= 35 && ltv <= 70) {
                    document.getElementById("kuantitatif_hasil").value = 'DIPERTIMBANGKAN';
                } else {
                    document.getElementById("kuantitatif_hasil").value = 'RESIKO TINGGI';
                }

            }


            function hitung_kuantitatif_ca() {

                // var d = document.getElementById("total_pemasukan_ca_detail").value;
                // var tot_pemasukan_ca = d.substring (0, d.length-3);
                // var a_tot_pemasukan_ca = tot_pemasukan_ca.replace(/[^\d]/g,"");
                // a_tot_pemasukan_ca += ""; 
                // s_tot_pemasukan_ca = "";
                // while(a_tot_pemasukan_ca.length>3) {
                // s_tot_pemasukan_ca = "." + a_tot_pemasukan_ca.substr(a_tot_pemasukan_ca.length - 3, 3) + s_tot_pemasukan_ca;
                // a_tot_pemasukan_ca = a_tot_pemasukan_ca.substring(0, a_tot_pemasukan_ca.length - 3);
                // }
                // s_tot_pemasukan_ca = a_tot_pemasukan_ca + s_tot_pemasukan_ca;
                document.getElementById("kuantitatif_ttl_pendapatan_detail").value = document.getElementById("total_pemasukan_ca_detail").value;

                // var e = document.getElementById("total_pengeluaran_ca_detail").value;
                // var tot_pengeluaran_ca = e.substring (0, e.length-3);
                // var a_tot_pengeluaran_ca = tot_pengeluaran_ca.replace(/[^\d]/g,"");
                // a_tot_pengeluaran_ca += ""; 
                // s_tot_pengeluaran_ca = "";
                // while(a_tot_pengeluaran_ca.length>3) {
                // s_tot_pengeluaran_ca = "." + a_tot_pengeluaran_ca.substr(a_tot_pengeluaran_ca.length - 3, 3) + s_tot_pengeluaran_ca;
                // a_tot_pengeluaran_ca = a_tot_pengeluaran_ca.substring(0, a_tot_pengeluaran_ca.length - 3);
                // }
                // s_tot_pengeluaran_ca = a_tot_pengeluaran_ca + s_tot_pengeluaran_ca;        
                document.getElementById("kuantitatif_ttl_pengeluaran_detail").value = document.getElementById("total_pengeluaran_ca_detail").value;

                var kuantitatif_ttl_pendapatan = document.getElementById("kuantitatif_ttl_pendapatan_detail").value;
                a = kuantitatif_ttl_pendapatan.replace(/[^\d]/g, "");
                var kuantitatif_ttl_pengeluaran = document.getElementById("kuantitatif_ttl_pengeluaran_detail").value;
                b = kuantitatif_ttl_pengeluaran.replace(/[^\d]/g, "");
                var recom_angsuran = document.getElementById("recom_angsuran_detail").value;
                c = recom_angsuran.replace(/[^\d]/g, "");
                var recom_pinjaman = document.getElementById("recom_nilai_pinjaman_detail").value;
                f = recom_pinjaman.replace(/[^\d]/g, "");
                var nilai_taksasi_agunan = document.getElementById("nilai_taksasi_agunan").value;
                g = nilai_taksasi_agunan.replace(/[^\d]/g, "");
                var angsuran_lain_ca = document.getElementById("angsuran_lain_ca_detail").value;
                h = angsuran_lain_ca.replace(/[^\d]/g, "");

                var idir = c / (a - b) * 100;
                document.getElementById("kuantitatif_idir_detail").value = idir.toFixed(2);

                var ltv = f / g * (100);
                document.getElementById("kuantitatif_ltv_detail").value = ltv.toFixed(2);

                var dsr = c / (a - h) * (100);
                document.getElementById("kuantitatif_dsr_detail").value = dsr.toFixed(2);

                kuantitatif_disposible_income = a - b - c;
                kuantitatif_disposible_income += "";
                tot_disposible_income = "";
                while (kuantitatif_disposible_income.length > 3) {
                    tot_disposible_income = "." + kuantitatif_disposible_income.substr(kuantitatif_disposible_income.length - 3, 3) + tot_disposible_income;
                    kuantitatif_disposible_income = kuantitatif_disposible_income.substring(0, kuantitatif_disposible_income.length - 3);
                }
                tot_disposible_income = kuantitatif_disposible_income + tot_disposible_income;
                document.getElementById("kuantitatif_pendapatan_detail").value = tot_disposible_income;

                c += "";
                rec_angsuran = "";
                while (c.length > 3) {
                    rec_angsuran = "." + c.substr(c.length - 3, 3) + rec_angsuran;
                    c = c.substring(0, c.length - 3);
                }
                rec_angsuran = c + rec_angsuran;
                document.getElementById("kuantitatif_angsuran_detail").value = rec_angsuran;

                if (dsr <= 35 && ltv <= 70 && idir > 0 && idir < 80) {
                    document.getElementById("kuantitatif_hasil_detail").value = 'LAYAK';
                } else if (dsr <= 35 && ltv > 70) {
                    document.getElementById("kuantitatif_hasil_detail").value = 'DIPERTIMBANGKAN';
                } else if (dsr > 35 && ltv <= 70) {
                    document.getElementById("kuantitatif_hasil_detail").value = 'DIPERTIMBANGKAN';
                } else if (dsr <= 35 && ltv <= 70) {
                    document.getElementById("kuantitatif_hasil_detail").value = 'DIPERTIMBANGKAN';
                } else {
                    document.getElementById("kuantitatif_hasil_detail").value = 'RESIKO TINGGI';
                }

            }

            //TOTAL PEMASUKAN KAPASITAS BULANAN
            function angsuran_perbulan() {

                var recom_plafon = (document.getElementById('recom_nilai_pinjaman').value);
                recom_plafon = recom_plafon.replace(/[^\d]/g, "");

                var t = (document.getElementById('recom_tenor').value);
                console.log(t)

                var b = (document.getElementById('recom_bunga_pinjaman').value);

                var formatter = new Intl.NumberFormat('id-ID', {
                    style: 'decimal', //tanpa decimal, tanpa Rp
                    // style: 'currency', //dengan 2 decimal, dengan Rp
                    // currency: 'IDR',

                });

                var p = Math.floor(recom_plafon);


                var total = (p + (p * t * (b / 100))) / t;
                var pembulatan = Math.round(total);
                var angsuran = formatter.format(Math.abs(pembulatan));

                document.getElementById('recom_angsuran').value = angsuran;
            }
            // =============================================================

            //TOTAL PEMASUKAN KAPASITAS BULANAN
            function angsuran_perbulan_detail_ca() {

                var recom_plafon = (document.getElementById('recom_nilai_pinjaman_detail').value);
                recom_plafon = recom_plafon.replace(/[^\d]/g, "");

                var t = (document.getElementById('recom_tenor_detail').value);
                console.log(t)

                var b = (document.getElementById('recom_bunga_pinjaman_detail').value);

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'decimal', //dengan 2 decimal, dengan Rp
                    /*        currency: 'IDR',*/

                });

                var p = Math.floor(recom_plafon);


                var total = (p + (p * t * (b / 100))) / t;
                var pembulatan = Math.round(total);
                var angsuran = formatter.format(Math.abs(pembulatan));

                document.getElementById('recom_angsuran_detail').value = angsuran;
            }
            // =============================================================

            $(".add-row").click(function() {

                var markup = '<tr><td><input type="checkbox" name="record" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()"></td><td><input type="text" class="form-control" name="nama_bank_acc[]" onkeyup="this.value = this.value.toUpperCase()"></td><td><input type="text" class="form-control uang" id="plafon_acc[]" name="plafon_acc[]" value="0"></td><td><input type="text" class="form-control uang" name="baki_debet_acc[]" value="0"></td><td><input type="text" class="form-control uang" name="angsuran_acc[]" aria-describedby="emailHelp" placeholder="" value="0"></td><td><input type="text" class="form-control" name="collectabilitas_acc[]" onkeypress="return hanyaAngka(event)"></td><td><input type="text" class="form-control" name="jenis_kredit_acc[]" onkeyup="this.value = this.value.toUpperCase()"></td></tr>';
                $("#table tbody").append(markup);

                //RIBUAN
                $('.uang').mask('0.000.000.000', {
                    reverse: true
                });
            });


            $(".delete-row").click(function() {
                $("table tbody").find('input[name="record"]').each(function() {
                    if ($(this).is(":checked")) {
                        $(this).parents("tr").remove();
                    }
                });
            });
            //=====================================================================================


            // Click Data Pengajuan
            $('#data_pengajuan').on('click', '.edit', function(e) {
                e.preventDefault();
                $("#detail_ca").hide();
                $("#close_pengajuan").click();
                var id = $(this).attr('data');
                var htmldata = [];
                var html = [];
                var html1 = [];
                var html2 = [];
                var html3 = [];
                var html4 = [];
                var html5 = [];
                var html6 = [];
                var html7 = [];
                var html8 = [];
                var html9 = [];
                var html10 = [];
                var html11 = [];
                var html12 = [];
                var html13 = [];
                var html14 = [];
                var html15 = [];
                var html16 = [];
                var html17 = [];
                var html18 = [];
                var html19 = [];
                var html20 = [];
                var html21 = [];
                var html22 = [];
                var html23 = []
                var htmlideb = [];
                var htmlpefindo = [];

                get_credit_checking({}, id)
                    .done(function(response) {
                        var data = response.data;

                        var id = data.id_trans_so;
                        var id_das = data.id_trans_so;
                        var id_debitur = data.data_debitur.id;
                        var id_pasangan = data.data_pasangan.id;
                        var id_credit = data.id;
                        var id_fasilitas = data.fasilitas_pinjaman.id;
                        // var id_agunan_tanah = data.data_agunan.agunan_tanah[0].id;
                        var id_pemeriksaan_agunan = data.pemeriksaan.agunan_tanah[0].id;
                        // var id_pemeriksaan_agunan_kendaraan = data.pemeriksaan.agunan_kendaraan[0].id;
                        var id_kapasitas_bulanan = data.kapasitas_bulanan.id;
                        var id_pendapatan_usaha = data.pendapatan_usaha.id;

                        $('#form_detail input[type=hidden][name=id]').val(data.id_trans_so);
                        $('#form_modal_tambah_penjamin input[type=hidden][name=add_id_so_penjamin]').val(data.id_trans_so);
                        $('#form_modal_agunan_sertifikat input[type=hidden][name=id_trans_so_aguanan]').val(data.id_trans_so);
                        $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val(data.id_trans_so);
                        $('#form_detail input[type=hidden][name=id_debitur]').val(data.data_debitur.id);
                        $('#form_detail input[type=hidden][name=id_pasangan]').val(data.data_pasangan.id);
                        // $('#form_detail input[type=hidden][name="id_agunan_tanah[]"]').val(data.data_agunan.agunan_tanah[0].id);
                        $('#form_detail input[type=hidden][name="id_pemeriksaan_agunan"]').val(data.pemeriksaan.agunan_tanah[0].id);
                        $('#form_detail input[type=hidden][name=id_kapasitas_bulanan]').val(data.kapasitas_bulanan.id);
                        $('#form_detail input[type=hidden][name=id_pendapatan_usaha]').val(data.pendapatan_usaha.id);
                        $('#form_detail input[type=hidden][name=id_fasilitas_pinjaman]').val(data.fasilitas_pinjaman.id);

                        $('#form_edit_ktp_deb input[type=hidden][name=id_debitur_ktp]').val(data.data_debitur.id);
                        $('#form_edit_kk_deb input[type=hidden][name=id_debitur_kk]').val(data.data_debitur.id);
                        $('#form_edit_sertifikat_deb input[type=hidden][name=id_debitur_sertifikat').val(data.data_debitur.id);
                        $('#form_edit_pbb_deb input[type=hidden][name=id_debitur_pbb').val(data.data_debitur.id);
                        $('#form_edit_imb_deb input[type=hidden][name=id_debitur_imb').val(data.data_debitur.id);
                        $('#form_edit_buku_tabungan_deb input[type=hidden][name=id_debitur_buku_tabungan').val(data.data_debitur.id);

                        $('#form_detail input[name=nomor_so]').val(data.nomor_so);
                        $('#form_detail input[name=nama_sales_officer]').val(data.nama_so);
                        $('#form_detail textarea[name=notes_so]').val(data.notes_so);

                        get_nama_asuransi = function(opts) {
                            var url = '<?php echo $this->config->item('api_url'); ?>namaAsuransi';
                            return $.ajax({
                                type: 'GET',
                                url: url,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                }
                            });
                        }

                        get_nama_asuransi()
                            .done(function(res) {
                                var select1 = '<option value="">--Pilih--</option>';
                                var select_nama_asuransi_jiwa = [];
                                $.each(res.data, function(i, e) {
                                    var option1 = [
                                        '<option id="' + e.kode_asuransi + '" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                                    ].join('\n');
                                    select_nama_asuransi_jiwa.push(option1);
                                });
                                $('#form_input_ca select[id=nama_asuransi_jiwa]').html(select1 + select_nama_asuransi_jiwa);
                            })

                        get_nama_asuransi()
                            .done(function(res) {
                                var select1 = '<option value="">--Pilih--</option>';
                                var select_nama_asuransi_kebakaran = [];
                                $.each(res.data, function(i, e) {
                                    var option2 = [
                                        '<option id="' + e.kode_asuransi + '" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                                    ].join('\n');
                                    select_nama_asuransi_kebakaran.push(option2);
                                });
                                $('#form_input_ca select[id=nama_asuransi_keb]').html(select1 + select_nama_asuransi_kebakaran);
                            })

                        get_nama_asuransi()
                            .done(function(res) {
                                var select1 = '<option value="">--Pilih--</option>';
                                var select_nama_asuransi_kendaraan = [];
                                $.each(res.data, function(i, e) {
                                    var option3 = [
                                        '<option id="' + e.kode_asuransi + '" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                                    ].join('\n');
                                    select_nama_asuransi_kendaraan.push(option3);
                                });
                                $('#form_input_ca select[id=nama_asuransi_ken]').html(select1 + select_nama_asuransi_kendaraan);
                            })

                        var htmlpenjamin = [];
                        var id_penjamin = {};
                        $.each(data.data_penjamin, function(index, item) {
                            var id_penjamin = [];
                            id_penjamin = item.id;

                            var jenis_kelamin_pen = "";

                            if (item.jenis_kelamin == 'L') {
                                jenis_kelamin_pen = 'LAKI-LAKI';
                            } else {
                                jenis_kelamin_pen = 'PEREMPUAN';
                            }

                            var tr = [

                                '<tr>',
                                '<td style="width:50px"><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_penjamin"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '<td style="width:210px">' + item.nama_ktp + '</td>',
                                '<td style="width:210px">' + item.nama_ibu_kandung + '</td>',
                                '<td>' + item.no_ktp + '</td>',
                                '<td>' + item.no_npwp + '</td>',
                                '<td style="width:135px">' + item.tempat_lahir + '</td>',
                                '<td style="width:137px">' + item.tgl_lahir + '</td>',
                                '<td style="width:160px">' + jenis_kelamin_pen + '</td>',
                                '<td style="width:285px">' + item.alamat_ktp + '</td>',
                                '<td>' + item.no_telp + '</td>',
                                '<td style="width:185px">' + item.hubungan_debitur + '</td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" /> </a> </td>',
                                '<td style="width:200px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp_pasangan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp_pasangan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px"style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_kk + '" /> </a> </td>',
                                '<td style="width:180px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_buku_nikah + '" /> </a> </td>',

                                '</tr>'
                            ].join('\n');
                            htmlpenjamin.push(tr);
                        })
                        $('#data_penjamin').html(htmlpenjamin);

                        var htmlagunantanah = [];
                        var id_agunan_tanah = {};
                        var no = 0;
                        $.each(data.data_agunan.agunan_tanah, function(index, item) {

                            var id_agunan_tanah = [];
                            id_agunan_tanah = item.id;

                            var njop = (rubah(item.njop));
                            no++;

                            var tr = [

                                '<tr>',
                                '<td>' + no + '</td>',
                                '<td>' + item.tipe_lokasi + '</td>',
                                '<td>' + item.alamat + '</td>',
                                '<td>' + item.luas_tanah + '</td>',
                                '<td>' + item.luas_bangunan + '</td>',
                                '<td>' + item.nama_pemilik_sertifikat + '</td>',
                                '<td>' + item.jenis_sertifikat + '</td>',
                                '<td>' + item.no_sertifikat + '</td>',
                                '<td>' + item.tgl_ukur_sertifikat + '</td>',
                                '<td>' + item.tgl_berlaku_shgb + '</td>',
                                '<td>' + item.no_imb + '</td>',
                                '<td>' + njop + '</td>',
                                '<td>' + item.nop + '</td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_dapur + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_dapur + '" /> </a> </td>',
                                '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '</tr>'
                            ].join('\n');
                            htmlagunantanah.push(tr);
                        })
                        $('#data_agunan_sertifikat').html(htmlagunantanah);

                        //LAMPIRAN
                        if (data.data_debitur.lampiran.lamp_ktp == null) {
                            var a = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html1.push(a);
                            $('#gambar_ktp').html(html1);
                        } else {
                            var a = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Pasangan"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" /> </a>'
                            ].join('\n');
                            html1.push(a);
                            $('#gambar_ktp').html(html1);
                        }

                        if (data.data_debitur.lampiran.lamp_kk == null) {
                            var b = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html2.push(b);
                            $('#gambar_kk').html(html2);
                        } else {
                            var b = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_kk + '" /> </a>'
                            ].join('\n');
                            html2.push(b);
                            $('#gambar_kk').html(html2);
                        }

                        if (data.data_debitur.lampiran.lamp_sertifikat == null) {
                            var c = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html3.push(c);
                            $('#gambar_sertifikat').html(html3);
                        } else {
                            var c = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                            ].join('\n');
                            html3.push(c);
                            $('#gambar_sertifikat').html(html3);
                        }

                        if (data.data_debitur.lampiran.lamp_sttp_pbb == null) {
                            var d = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html4.push(d);
                            $('#gambar_pbb').html(html4);
                        } else {
                            var d = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                            ].join('\n');
                            html4.push(d);
                            $('#gambar_pbb').html(html4);
                        }

                        if (data.data_debitur.lampiran.lamp_imb == null) {
                            var e = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html5.push(e);
                            $('#gambar_imb').html(html5);
                        } else {
                            var e = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_imb + '" /> </a>'
                            ].join('\n');
                            html5.push(e);
                            $('#gambar_imb').html(html5);
                        }

                        if (data.data_pasangan.lampiran.lamp_ktp == null) {
                            var f = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html6.push(f);
                            $('#gambar_ktp_pasangan').html(html6);
                        } else {
                            var f = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                            ].join('\n');
                            html6.push(f);
                            $('#gambar_ktp_pasangan').html(html6);
                        }

                        if (data.data_pasangan.lampiran.lamp_buku_nikah == null) {
                            var g = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html7.push(g);
                            $('#gambar_buku_nikah').html(html7);
                        } else {
                            var g = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                            ].join('\n');
                            html7.push(g);
                            $('#gambar_buku_nikah').html(html7);
                        }

                        var h = [
                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.lamp_ideb + '"><p style="font-size: 13px; font-weight: 400;">' + data.lampiran_ao.lamp_ideb + '</p></a>',
                        ].join('\n');
                        html8.push(h);
                        $('#dataideb').html(html8);

                        var i = [
                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.lamp_pefindo + '"><p style="font-size: 13px; font-weight: 400;">' + data.lampiran_ao.lamp_pefindo + '</p></a>',
                        ].join('\n');
                        html9.push(i);
                        $('#datapefindo').html(html9);

                        if (data.data_debitur.lampiran.lamp_skk == null) {
                            var j = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html10.push(j);
                            $('#gambar_surat_keterangan_kerja').html(html10);
                        } else {
                            var j = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_skk + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_skk + '" /> </a>'
                            ].join('\n');
                            html10.push(j);
                            $('#gambar_surat_keterangan_kerja').html(html10);
                        }

                        if (data.data_debitur.lampiran.lamp_slip_gaji == null) {
                            var k = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html11.push(k);
                            $('#gambar_slip_gaji').html(html11);
                        } else {
                            var k = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_slip_gaji + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_slip_gaji + '" /> </a>'
                            ].join('\n');
                            html11.push(k);
                            $('#gambar_slip_gaji').html(html11);
                        }

                        if (data.data_debitur.lampiran.lamp_buku_tabungan == null) {
                            var l = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html12.push(l);
                            $('#gambar_buku_tabungan').html(html12);
                        } else {
                            var l = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_buku_tabungan + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_buku_tabungan + '" /> </a>'
                            ].join('\n');
                            html12.push(l);
                            $('#gambar_buku_tabungan').html(html12);
                        }

                        if (data.data_debitur.lampiran.lamp_sku == null) {
                            var m = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html13.push(m);
                            $('#gambar_keterangan_usaha').html(html13);
                        } else {
                            var m = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sku + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sku + '" /> </a>'
                            ].join('\n');
                            html13.push(m);
                            $('#gambar_keterangan_usaha').html(html13);
                        }

                        if (data.data_debitur.lampiran.lamp_foto_usaha == null) {
                            var n = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html15.push(n);
                            $('#gambar_foto_usaha').html(html15);
                        } else {
                            var n = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_foto_usaha + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_foto_usaha + '" /> </a>'
                            ].join('\n');
                            html15.push(n);
                            $('#gambar_foto_usaha').html(html15);
                        }

                        if (data.lampiran_ao.form_persetujuan_ideb == null) {
                            var o = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html16.push(o);
                            $('#gambar_form_persetujuan_ideb').html(html16);
                        } else {
                            var o = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" /> </a>'
                            ].join('\n');
                            html16.push(o);
                            $('#gambar_form_persetujuan_ideb').html(html16);
                        }

                        if (data.data_debitur.lampiran.foto_agunan_rumah == null) {
                            var z = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html20.push(z);
                            $('#gambar_foto_agunan_rumah').html(html20);
                        } else {
                            var z = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_agunan_rumah + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_agunan_rumah + '" /> </a>'
                            ].join('\n');
                            html20.push(z);
                            $('#gambar_foto_agunan_rumah').html(html20);
                        }

                        if (data.data_debitur.lampiran.foto_pembukuan_usaha == null) {
                            var y = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html21.push(y);
                            $('#gambar_pembukuan_usaha').html(html21);
                        } else {
                            var y = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_pembukuan_usaha + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_pembukuan_usaha + '" /> </a>'
                            ].join('\n');
                            html21.push(y);
                            $('#gambar_pembukuan_usaha').html(html21);
                        }

                        get_asaldata = function(opts) {
                            var url = '<?php echo $this->config->item('api_url'); ?>/api/master/asal_data';
                            return $.ajax({
                                type: 'GET',
                                url: url,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                }
                            });
                        }

                        get_asaldata()
                            .done(function(res) {
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.id + '" value="' + e.id + '">' + e.nama + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#form_detail select[id=select_asal_data]').html(select);
                                if (data.asaldata.id == '' + data.asaldata.id + '') {
                                    document.getElementById('' + data.asaldata.id + '').selected = "true";
                                }
                            })


                        $('#form_detail input[name=nama_marketing]').val(data.nama_marketing);

                        get_data_fasilitas = function(opts, id_fasilitas) {
                            var url = '<?php echo config_item('api_url') ?>api/faspin/' + id_fasilitas;
                            var data = opts;

                            return $.ajax({
                                type: 'GET',
                                url: url,
                                data: data,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                }
                            });
                        }

                        load_fasilitas = function() {
                            get_data_fasilitas({}, id_fasilitas)
                                .done(function(response) {
                                    var data_fasilitas = response.data;
                                    var angka = (rubah(data_fasilitas.plafon));
                                    $('#form_detail input[name=plafon]').val(angka);

                                    var select_tenor = [];
                                    var option_tenor = [
                                        '<option id="tenor12" value="12">12</option>',
                                        '<option id="tenor18" value="18">18</option>',
                                        '<option id="tenor24" value="24">24</option>',
                                        '<option id="tenor30" value="30">30</option>',
                                        '<option id="tenor36" value="36">36</option>',
                                        '<option id="tenor48" value="48">48</option>',
                                        '<option id="tenor60" value="60">60</option>'
                                    ].join('\n');
                                    select_tenor.push(option_tenor);
                                    $('#form_detail  select[id=tenor]').html(select_tenor);

                                    if (data_fasilitas.tenor == "12") {
                                        document.getElementById("tenor12").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "18") {
                                        document.getElementById("tenor18").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "24") {
                                        document.getElementById("tenor24").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "30") {
                                        document.getElementById("tenor30").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "36") {
                                        document.getElementById("tenor36").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "48") {
                                        document.getElementById("tenor48").selected = "true";
                                    }
                                    if (data_fasilitas.tenor == "60") {
                                        document.getElementById("tenor60").selected = "true";
                                    }

                                    var select_jenis_pinjaman = [];
                                    var option_jenis_pinjaman = [
                                        '<option value="">--Pilih--</option>',
                                        '<option id="konsumtif" value="KONSUMTIF">KONSUMTIF</option>',
                                        '<option id="modal_kerja" value="MODAL KERJA">MODAL KERJA</option>',
                                        '<option id="investasi" value="INVESTASI">INVESTASI</option>'
                                    ].join('\n');
                                    select_jenis_pinjaman.push(option_jenis_pinjaman);
                                    $('#form_detail  select[id=select_jenis_pinjaman]').html(select_jenis_pinjaman);

                                    if (data_fasilitas.jenis_pinjaman == "KONSUMTIF") {
                                        document.getElementById("konsumtif").selected = "true";
                                    } else
                                    if (data_fasilitas.jenis_pinjaman == "MODAL KERJA") {
                                        document.getElementById("modal_kerja").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor = "INVESTASI") {
                                        document.getElementById("investasi").selected = "true";
                                    }

                                    $('#form_detail textarea[name=tujuan_pinjaman]').val(data_fasilitas.tujuan_pinjaman);

                                    get_segmentasi = function(opts) {
                                        var url = '<?php echo $this->config->item('api_url'); ?>segmentasi';
                                        return $.ajax({
                                            type: 'GET',
                                            url: url,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            }
                                        });
                                    }

                                    get_segmentasi()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.nama + '" value="' + e.nama + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[id=segmentasi]').html(select);
                                            if (data_fasilitas.segmentasi_bpr == '' + data_fasilitas.segmentasi_bpr + '') {
                                                document.getElementById('' + data_fasilitas.segmentasi_bpr + '').selected = "true";
                                            }
                                        })

                                    get_sektor_ekonomi = function(opts) {
                                        var url = '<?php echo $this->config->item('api_url'); ?>sektorEkonomi';
                                        return $.ajax({
                                            type: 'GET',
                                            url: url,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            }
                                        });
                                    }

                                    get_sektor_ekonomi()
                                        .done(function(res) {
                                            var select = [];
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.kode + '" value="' + e.kode + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[id=sektor_ekonomi]').html(select);
                                            if (data_fasilitas.validasi_sektor_ekonomi == '' + data_fasilitas.validasi_sektor_ekonomi + '') {
                                                document.getElementById('' + data_fasilitas.validasi_sektor_ekonomi + '').selected = "true";
                                            }
                                        })
                                })
                        }

                        load_debitur = function() {

                            $('#select_provinsi_ktp_dup').hide();
                            $('#select_kabupaten_ktp_dup').hide();
                            $('#select_kecamatan_ktp_dup').hide();
                            $('#select_kelurahan_ktp_dup').hide();

                            $('#select_provinsi_ktp').show();
                            $('#select_kabupaten_ktp').show();
                            $('#select_kecamatan_ktp').show();
                            $('#select_kelurahan_ktp').show();

                            $('#select_provinsi_domisili_dup').hide();
                            $('#select_kabupaten_domisili_dup').hide();
                            $('#select_kecamatan_domisili_dup').hide();
                            $('#select_kelurahan_domisili_dup').hide();

                            $('#select_provinsi_domisili').show();
                            $('#select_kabupaten_domisili').show();
                            $('#select_kecamatan_domisili').show();
                            $('#select_kelurahan_domisili').show();

                            $('#select_provinsi_kantor').show();
                            $('#select_kabupaten_kantor').show();
                            $('#select_kecamatan_kantor').show();
                            $('#select_kelurahan_kantor').show();
                            //calon debitur    

                            get_data_debitur = function(opts, id_debitur) {
                                var url = '<?php echo config_item('api_url') ?>api/debitur/' + id_debitur;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }

                            get_data_debitur({}, id_debitur)
                                .done(function(response) {
                                    var data_debitur = response.data;
                                    $('#form_detail input[name=nama_debitur]').val(data_debitur.nama_lengkap);
                                    $('#form_detail input[name=gelar_keagamaan]').val(data_debitur.gelar_keagamaan);
                                    $('#form_detail input[name=gelar_pendidikan]').val(data_debitur.gelar_pendidikan);
                                    if (data_debitur.jenis_kelamin == "L") {
                                        document.getElementById("Ldeb").selected = "true";
                                    } else {
                                        document.getElementById("Pdeb").selected = "true";
                                    }
                                    // $('#form_detail input[type=radio][name=jenis_kelamin]:checked').val(data_debitur.jenis_kelamin);
                                    $('#form_detail input[name=status_nikah]').val(data_debitur.status_nikah);
                                    $('#form_detail input[name=ibu_kandung]').val(data_debitur.ibu_kandung);
                                    $('#form_detail input[name=no_ktp]').val(data_debitur.no_ktp);
                                    $('#form_detail input[name=no_ktp_kk]').val(data_debitur.no_ktp_kk);
                                    $('#form_detail input[name=no_kk]').val(data_debitur.no_kk);
                                    $('#form_detail input[name=no_npwp]').val(data_debitur.no_npwp);
                                    $('#form_detail input[name=tempat_lahir]').val(data_debitur.tempat_lahir);
                                    $('#form_detail input[name=tgl_lahir_deb]').val(data_debitur.tgl_lahir);

                                    var select_agama = [];
                                    var option_agama = [
                                        '<option value="">--Pilih--</option>',
                                        '<option id="islam" value="ISLAM">ISLAM</option>',
                                        '<option id="kristen_katholik" value="KATHOLIK">KATHOLIK</option>',
                                        '<option id="kristen_protestan" value="KRISTEN">KRISTEN</option>',
                                        '<option id="hindu" value="HINDU">HINDU</option>',
                                        '<option id="budha" value="BUDHA">BUDHA</option>',
                                        '<option id="kepercayaan_lain_lain" value="LAIN2 KEPERCAYAAN">LAIN2 KEPERCAYAAN</option>'
                                    ].join('\n');
                                    select_agama.push(option_agama);
                                    $('#form_detail  select[id=select_agama]').html(select_agama);

                                    if (data_debitur.agama == "ISLAM") {
                                        document.getElementById("islam").selected = "true";
                                    } else
                                    if (data_debitur.agama == "KATHOLIK") {
                                        document.getElementById("kristen_katholik").selected = "true";
                                    } else
                                    if (data_debitur.agama = "KRISTEN") {
                                        document.getElementById("kristen_protestan").selected = "true";
                                    } else
                                    if (data_debitur.agama = "HINDU") {
                                        document.getElementById("hindu").selected = "true";
                                    } else
                                    if (data_debitur.agama = "BUDHA") {
                                        document.getElementById("budha").selected = "true";
                                    } else
                                    if (data_debitur.agama = "LAIN2 KEPERCAYAAN") {
                                        document.getElementById("kepercayaan_lain_lain").selected = "true";
                                    }

                                    $('#form_detail input[name=tinggi_badan]').val(data_debitur.tinggi_badan);
                                    $('#form_detail input[name=berat_badan]').val(data_debitur.berat_badan);
                                    $('#form_detail input[name=alamat_ktp]').val(data_debitur.alamat_ktp.alamat_singkat);
                                    $('#form_detail input[name=rt_ktp]').val(data_debitur.alamat_ktp.rt);
                                    $('#form_detail input[name=rw_ktp]').val(data_debitur.alamat_ktp.rw);

                                    var select_provinsi = [];
                                    var option_provinsi = [
                                        '<option value="' + data_debitur.alamat_ktp.provinsi.id + '">' + data_debitur.alamat_ktp.provinsi.nama + '</option>'
                                    ].join('\n');
                                    select_provinsi.push(option_provinsi);
                                    $('#form_detail  select[id=provinsi_ktp]').html(select_provinsi);

                                    var select_kabupaten_ktp = [];
                                    var option_kabupaten_ktp = [
                                        '<option value="' + data_debitur.alamat_ktp.kabupaten.id + '">' + data_debitur.alamat_ktp.kabupaten.nama + '</option>'
                                    ].join('\n');
                                    select_kabupaten_ktp.push(option_kabupaten_ktp);
                                    $('#form_detail select[name=kabupaten_ktp]').html(select_kabupaten_ktp);

                                    var select_kecamatan_ktp = [];
                                    var option_kecamatan_ktp = [
                                        '<option value="' + data_debitur.alamat_ktp.kecamatan.id + '">' + data_debitur.alamat_ktp.kecamatan.nama + '</option>'
                                    ].join('\n');
                                    select_kecamatan_ktp.push(option_kecamatan_ktp);
                                    $('#form_detail select[name=kecamatan_ktp]').html(select_kecamatan_ktp);

                                    var select_kelurahan_ktp = [];
                                    var option_kelurahan_ktp = [
                                        '<option value="' + data_debitur.alamat_ktp.kelurahan.id + '">' + data_debitur.alamat_ktp.kelurahan.nama + '</option>'
                                    ].join('\n');
                                    select_kelurahan_ktp.push(option_kelurahan_ktp);
                                    $('#form_detail select[name=kelurahan_ktp]').html(select_kelurahan_ktp);

                                    $('#form_detail input[name=kode_pos_ktp]').val(data_debitur.alamat_ktp.kode_pos);
                                    $('#form_detail input[name=alamat_domisili]').val(data_debitur.alamat_domisili.alamat_singkat);
                                    $('#form_detail input[name=rt_domisili]').val(data_debitur.alamat_domisili.rt);
                                    $('#form_detail input[name=rw_domisili]').val(data_debitur.alamat_domisili.rw);

                                    var select_provinsi_domisili = [];
                                    var option_provinsi_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.provinsi.id + '">' + data_debitur.alamat_domisili.provinsi.nama + '</option>'
                                    ].join('\n');
                                    select_provinsi_domisili.push(option_provinsi_domisili);
                                    $('#form_detail  select[id=provinsi_domisili]').html(select_provinsi_domisili);

                                    var select_kabupaten_domisili = [];
                                    var option_kabupaten_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.kabupaten.id + '">' + data_debitur.alamat_domisili.kabupaten.nama + '</option>'
                                    ].join('\n');
                                    select_kabupaten_domisili.push(option_kabupaten_domisili);
                                    $('#form_detail  select[id=kabupaten_domisili]').html(select_kabupaten_domisili);

                                    var select_kecamatan_domisili = [];
                                    var option_kecamatan_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.kecamatan.id + '">' + data_debitur.alamat_domisili.kecamatan.nama + '</option>'
                                    ].join('\n');
                                    select_kecamatan_domisili.push(option_kecamatan_domisili);
                                    $('#form_detail select[id=kecamatan_domisili]').html(select_kecamatan_domisili);

                                    var select_kelurahan_domisili = [];
                                    var option_kelurahan_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.kelurahan.id + '">' + data_debitur.alamat_domisili.kelurahan.nama + '</option>'
                                    ].join('\n');
                                    select_kelurahan_domisili.push(option_kelurahan_domisili);
                                    $('#form_detail select[id=kelurahan_domisili]').html(select_kelurahan_domisili);

                                    $('#form_detail input[name=kode_pos_domisili]').val(data_debitur.alamat_domisili.kode_pos);

                                    var select_pendidikan_terakhir = [];
                                    var option_pendidikan_terakhir = [
                                        '<option value="' + data_debitur.pendidikan_terakhir + '">' + data_debitur.pendidikan_terakhir + '</option>',
                                        '<option value="TIDAK TAMAT SD">TIDAK TAMAT SD</option>',
                                        '<option value="SD">SD</option>',
                                        '<option value="SMP">SMP</option>',
                                        '<option value="SMA SEDERAJAT">SMA SEDERAJAT</option>',
                                        '<option value="D1">D1</option>',
                                        '<option value="D2">D2</option>',
                                        '<option value="D3">D3</option>',
                                        '<option value="S1">S1</option>',
                                        '<option value="S2">S2</option>',
                                        '<option value="S3">S3</option>'
                                    ].join('\n');
                                    select_pendidikan_terakhir.push(option_pendidikan_terakhir);
                                    $('#form_detail select[name=pendidikan_terakhir]').html(select_pendidikan_terakhir);

                                    $('#form_detail input[name=jumlah_tanggungan]').val(data_debitur.jumlah_tanggungan);
                                    $('#form_detail input[name=no_telp]').val(data_debitur.no_telp);
                                    $('#form_detail input[name=no_hp]').val(data_debitur.no_hp);
                                    $('#form_detail input[name=email]').val(data_debitur.email);

                                    var select_alamat_surat = [];
                                    var option_alamat_surat = [
                                        '<option value="' + data_debitur.alamat_surat + '">' + data_debitur.alamat_surat + '</option>',
                                        '<option value="KTP">KTP</option>',
                                        '<option value="DOMISILI">DOMISILI</option>',
                                        '<option value="KANTOR">KANTOR</option>'
                                    ].join('\n');
                                    select_alamat_surat.push(option_alamat_surat);
                                    $('#form_detail select[name=alamat_surat]').html(select_alamat_surat);

                                    get_pekerjaan()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.kode_group1 + 'pekerjaan_deb" value="' + e.kode_group1 + '">' + e.deskripsi_group1 + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=pekerjaan_deb]').html(select1 + select);
                                            if (data_debitur.pekerjaan.nama_pekerjaan = '' + data_debitur.pekerjaan.nama_pekerjaan + '') {
                                                document.getElementById('' + data_debitur.pekerjaan.nama_pekerjaan + 'pekerjaan_deb').selected = "true";
                                            }
                                        })

                                    $('#form_detail input[name=posisi]').val(data_debitur.pekerjaan.posisi_pekerjaan);
                                    $('#form_detail input[name=nama_perusahaan]').val(data_debitur.pekerjaan.nama_tempat_kerja);
                                    $('#form_detail input[name=jenis_usaha]').val(data_debitur.pekerjaan.jenis_pekerjaan);
                                    $('#form_detail input[name=masa_kerja_usaha]').val(data_debitur.pekerjaan.tgl_mulai_kerja);
                                    $('#form_detail input[name=no_telp_kantor_usaha]').val(data_debitur.pekerjaan.no_telp_tempat_kerja);
                                    $('#form_detail input[name=alamat_usaha_kantor]').val(data_debitur.pekerjaan.alamat.alamat_singkat);
                                    $('#form_detail input[name=rt_usaha_kantor]').val(data_debitur.pekerjaan.alamat.rt);
                                    $('#form_detail input[name=rw_usaha_kantor]').val(data_debitur.pekerjaan.alamat.rw);
                                    $('#form_detail input[name=kode_pos_kantor]').val(data_debitur.pekerjaan.alamat.kode_pos);

                                    get_provinsi()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.id + 'prov_pek_deb" value="' + e.id + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=provinsi_kantor]').html(select1 + select);
                                            if (data_debitur.pekerjaan.alamat.provinsi.id = '' + data_debitur.pekerjaan.alamat.provinsi.id + '') {
                                                document.getElementById('' + data_debitur.pekerjaan.alamat.provinsi.id + 'prov_pek_deb').selected = "true";
                                            }
                                        })

                                    if (data_debitur.pekerjaan.alamat.kabupaten.id == null) {
                                        var select_kabupaten_kantor_deb = [];
                                        var option_kabupaten_kantor_deb = [
                                            '<option value=""></option>'
                                        ].join('\n');
                                        select_kabupaten_kantor_deb.push(option_kabupaten_kantor_deb);
                                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor_deb);
                                    } else {
                                        var select_kabupaten_kantor_deb = [];
                                        var option_kabupaten_kantor_deb = [
                                            '<option value="' + data_debitur.pekerjaan.alamat.kabupaten.id + '">' + data_debitur.pekerjaan.alamat.kabupaten.nama + '</option>'
                                        ].join('\n');
                                        select_kabupaten_kantor_deb.push(option_kabupaten_kantor_deb);
                                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor_deb);
                                    }

                                    if (data_debitur.pekerjaan.alamat.kecamatan.id == null) {
                                        var select_kecamatan_kantor_deb = [];
                                        var option_kecamatan_kantor_deb = [
                                            '<option value=""></option>'
                                        ].join('\n');
                                        select_kecamatan_kantor_deb.push(option_kecamatan_kantor_deb);
                                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor_deb);
                                    } else {
                                        var select_kecamatan_kantor_deb = [];
                                        var option_kecamatan_kantor_deb = [
                                            '<option value="' + data_debitur.pekerjaan.alamat.kecamatan.id + '">' + data_debitur.pekerjaan.alamat.kecamatan.nama + '</option>'
                                        ].join('\n');
                                        select_kecamatan_kantor_deb.push(option_kecamatan_kantor_deb);
                                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor_deb);
                                    }

                                    if (data_debitur.pekerjaan.alamat.kelurahan.id == null) {
                                        var select_kelurahan_kantor_deb = [];
                                        var option_kelurahan_kantor_deb = [
                                            '<option value=""></option>'
                                        ].join('\n');
                                        select_kelurahan_kantor_deb.push(option_kelurahan_kantor_deb);
                                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor_deb);
                                    } else {
                                        var select_kelurahan_kantor_deb = [];
                                        var option_kelurahan_kantor_deb = [
                                            '<option value="' + data_debitur.pekerjaan.alamat.kelurahan.id + '">' + data_debitur.pekerjaan.alamat.kelurahan.nama + '</option>'
                                        ].join('\n');
                                        select_kelurahan_kantor_deb.push(option_kelurahan_kantor_deb);
                                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor_deb);
                                    }

                                    $('#form_detail input[name=kode_pos_kantor]').val(data_debitur.pekerjaan.alamat.kode_pos);

                                    $('#form_detail select[name=kabupaten_ktp]').html(select_kabupaten_ktp);
                                    $('#form_detail input[name=kelurahan_kantor]').val(data_debitur.pekerjaan.alamat.kelurahan.nama);
                                    $('#form_detail input[name=kecamatan_kantor]').val(data_debitur.pekerjaan.alamat.kecamatan.nama);
                                    $('#form_detail input[name=kabupaten_kantor]').val(data_debitur.pekerjaan.alamat.kabupaten.nama);
                                    $('#form_detail input[name=provinsi_kantor]').val(data_debitur.pekerjaan.alamat.provinsi.nama);


                                    $.each(data_debitur.anak, function(index, item) {

                                        var tr = [
                                            '<tr>',
                                            '<td style="width:210px">' + item.nama + '</td>',
                                            '<td style="width:210px">' + item.tgl_lahir + '</td>',
                                            '</tr>'
                                        ].join('\n');
                                        html14.push(tr);

                                        $('#data_anak').html(html14);
                                    })
                                })
                        }
                        load_pasangan = function() {

                            // $('#select_provinsi_kantor_pasangan_dup').hide();
                            $('#select_kabupaten_kantor_pasangan_dup').hide();
                            $('#select_kecamatan_kantor_pasangan_dup').hide();
                            $('#select_kelurahan_kantor_pasangan_dup').hide();

                            get_data_pasangan = function(opts, id_pasangan) {
                                var url = '<?php echo config_item('api_url') ?>api/pasangan/' + id_pasangan;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }

                            get_data_pasangan({}, id_pasangan)
                                .done(function(response) {
                                    var data_pasangan = response.data;

                                    $('#form_detail input[name=nama_lengkap_pas]').val(data_pasangan.nama_lengkap);
                                    $('#form_detail input[name=nama_ibu_kandung_pas]').val(data_pasangan.nama_ibu_kandung);

                                    var select_jk_pas = [];
                                    var option_jk_pas = [
                                        '<option id="L_pas" value="L">LAKI-LAKI</option>',
                                        '<option id="P_pas" value="P">PEREMPUAN</option>'
                                    ].join('\n');
                                    select_jk_pas.push(option_jk_pas);
                                    $('#form_detail select[name=jenis_kelamin_pas]').html(select_jk_pas);

                                    if (data_pasangan.jenis_kelamin == "L") {
                                        document.getElementById("L_pas").selected = "true";
                                    } else {
                                        document.getElementById("P_pas").selected = "true";
                                    }

                                    $('#form_detail input[name=no_ktp_pas]').val(data_pasangan.no_ktp);
                                    $('#form_detail input[name=no_ktp_kk_pas]').val(data_pasangan.no_ktp_kk);
                                    $('#form_detail input[name=no_npwp_pas]').val(data_pasangan.no_npwp);
                                    $('#form_detail input[name=tempat_lahir_pas]').val(data_pasangan.tempat_lahir);
                                    $('#form_detail input[name=tgl_lahir_pas]').val(data_pasangan.tgl_lahir);
                                    $('#form_detail textarea[name=alamat_ktp_pas]').val(data_pasangan.alamat_ktp);
                                    $('#form_detail input[name=no_telp_pas]').val(data_pasangan.no_telp);
                                    $('#form_detail select[name=pekerjaan_pas]').val(data_pasangan.pekerjaan.nama_pekerjaan);
                                    $('#form_detail input[name=posisi_pekerjaan_pas]').val(data_pasangan.pekerjaan.posisi_pekerjaan);
                                    $('#form_detail input[name=nama_perusahaan_pas]').val(data_pasangan.pekerjaan.nama_tempat_kerja);
                                    $('#form_detail input[name=jenis_usaha_pas]').val(data_pasangan.pekerjaan.jenis_pekerjaan);
                                    $('#form_detail input[name=tgl_mulai_kerja_pas]').val(data_pasangan.tgl_mulai_kerja);
                                    $('#form_detail input[name=no_telp_tempat_kerja_pas]').val(data_pasangan.no_telp_tempat_kerja);
                                    $('#form_detail input[name=masa_kerja_lama_usaha_pas]').val(data_pasangan.pekerjaan.tgl_mulai_kerja);

                                    get_pekerjaan()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.kode_group1 + 'pekerjaan_pas" value="' + e.kode_group1 + '">' + e.deskripsi_group1 + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=pekerjaan_pas]').html(select1 + select);
                                            if (data_pasangan.pekerjaan.nama_pekerjaan = '' + data_pasangan.pekerjaan.nama_pekerjaan + '') {
                                                document.getElementById('' + data_pasangan.pekerjaan.nama_pekerjaan + 'pekerjaan_pas').selected = "true";
                                            }
                                        })

                                    $('#form_detail input[name=jenis_usaha_pas]').val(data_pasangan.pekerjaan.jenis_pekerjaan);
                                    $('#form_detail input[name=no_telp_kantor_usaha_pas]').val(data_pasangan.pekerjaan.no_telp_tempat_kerja);
                                    $('#form_detail input[name=alamat_usaha_kantor_pas]').val(data_pasangan.pekerjaan.alamat.alamat_singkat);
                                    $('#form_detail input[name=rt_kantor_usaha_pas]').val(data_pasangan.pekerjaan.alamat.rt);
                                    $('#form_detail input[name=rw_kantor_usaha_pas]').val(data_pasangan.pekerjaan.alamat.rw);

                                    get_provinsi()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.id + 'prov_pek_pas" value="' + e.id + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=provinsi_kantor_pasangan]').html(select1 + select);
                                            if (data_pasangan.pekerjaan.alamat.provinsi.id = '' + data_pasangan.pekerjaan.alamat.provinsi.id + '') {
                                                document.getElementById('' + data_pasangan.pekerjaan.alamat.provinsi.id + 'prov_pek_pas').selected = "true";
                                            }
                                        })

                                    if (data_pasangan.pekerjaan.alamat.kabupaten.id == null) {
                                        var select_kabupaten_kantor_pas = [];
                                        var option_kabupaten_kantor_pas = [
                                            '<option value=""></option>',
                                        ].join('\n');
                                        select_kabupaten_kantor_pas.push(option_kabupaten_kantor_pas);
                                        $('#form_detail select[name=kabupaten_kantor_pasangan]').html(select_kabupaten_kantor_pas);
                                    } else {
                                        var select_kabupaten_kantor_pas = [];
                                        var option_kabupaten_kantor_pas = [
                                            '<option value="' + data_pasangan.pekerjaan.alamat.kabupaten.id + '">' + data_pasangan.pekerjaan.alamat.kabupaten.nama + '</option>',
                                        ].join('\n');
                                        select_kabupaten_kantor_pas.push(option_kabupaten_kantor_pas);
                                        $('#form_detail select[name=kabupaten_kantor_pasangan]').html(select_kabupaten_kantor_pas);
                                    }

                                    if (data_pasangan.pekerjaan.alamat.kecamatan.id == null) {
                                        var select_kecamatan_kantor_pas = [];
                                        var option_kecamatan_kantor_pas = [
                                            '<option value=""></option>',
                                        ].join('\n');
                                        select_kecamatan_kantor_pas.push(option_kecamatan_kantor_pas);
                                        $('#form_detail select[name=kecamatan_kantor_pasangan]').html(select_kecamatan_kantor_pas);
                                    } else {
                                        var select_kecamatan_kantor_pas = [];
                                        var option_kecamatan_kantor_pas = [
                                            '<option value="' + data_pasangan.pekerjaan.alamat.kecamatan.id + '">' + data_pasangan.pekerjaan.alamat.kecamatan.nama + '</option>',
                                        ].join('\n');
                                        select_kecamatan_kantor_pas.push(option_kecamatan_kantor_pas);
                                        $('#form_detail select[name=kecamatan_kantor_pasangan]').html(select_kecamatan_kantor_pas);
                                    }

                                    if (data_pasangan.pekerjaan.alamat.kelurahan.id == null) {
                                        var select_kelurahan_kantor_pas = [];
                                        var option_kelurahan_kantor_pas = [
                                            '<option value=""></option>',
                                        ].join('\n');
                                        select_kelurahan_kantor_pas.push(option_kelurahan_kantor_pas);
                                        $('#form_detail select[name=kelurahan_kantor_pasangan]').html(select_kelurahan_kantor_pas);
                                    } else {
                                        var select_kelurahan_kantor_pas = [];
                                        var option_kelurahan_kantor_pas = [
                                            '<option value="' + data_pasangan.pekerjaan.alamat.kelurahan.id + '">' + data_pasangan.pekerjaan.alamat.kelurahan.nama + '</option>',
                                        ].join('\n');
                                        select_kelurahan_kantor_pas.push(option_kelurahan_kantor_pas);
                                        $('#form_detail select[name=kelurahan_kantor_pasangan]').html(select_kelurahan_kantor_pas);
                                    }
                                    $('#form_detail input[name=kode_pos_kantor_usaha_pas').val(data_pasangan.pekerjaan.alamat.kode_pos);

                                })
                        }

                        load_pemeriksaan_agunan = function() {
                            get_data_pemeriksaan_agunan = function(opts, id_pemeriksaan_agunan) {
                                var url = '<?php echo config_item('api_url') ?>api/periksa/tanah/' + id_pemeriksaan_agunan;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }


                            get_data_pemeriksaan_agunan({}, id_pemeriksaan_agunan)
                                .done(function(response) {
                                    var data_pemeriksaan_agunan = response.data;

                                    //pemeriksaan agunan
                                    $('#form_detail input[name="nama_penghuni_agunan"]').val(data_pemeriksaan_agunan.nama_penghuni);

                                    if (data_pemeriksaan_agunan.status_penghuni == "PEMILIK") {
                                        document.getElementById("pemilik").selected = "true";
                                    } else
                                    if (data_pemeriksaan_agunan.status_penghuni == "PENYEWA") {
                                        document.getElementById("penyewa").selected = "true";
                                    } else
                                    if (data_pemeriksaan_agunan.status_penghuni == "TIDAK DIHUNI") {
                                        document.getElementById("tidak_dihuni").selected = "true";
                                    } else
                                    if (data_pemeriksaan_agunan.status_penghuni == "KELUARGA") {
                                        document.getElementById("keluarga").selected = "true";
                                    }

                                    $('#form_detail input[name="bentuk_bangunan_agunan"]').val(data_pemeriksaan_agunan.bentuk_bangunan);

                                    if (data_pemeriksaan_agunan.kondisi_bangunan == "SANGAT TERAWAT") {
                                        document.getElementById("sangat_terawat").selected = "true";
                                    } else
                                    if (data_pemeriksaan_agunan.kondisi_bangunan == "CUKUP TERAWAT") {
                                        document.getElementById("cukup_terawat").selected = "true";
                                    } else
                                    if (data_pemeriksaan_agunan.kondisi_bangunan == "KURANG TERAWAT") {
                                        document.getElementById("kurang_terawat").selected = "true";
                                    } else
                                    if (data_pemeriksaan_agunan.kondisi_bangunan == "TIDAK TERAWAT") {
                                        document.getElementById("tidak_terawat").selected = "true";
                                    }

                                    $('#form_detail input[name="fasilitas_agunan"]').val(data_pemeriksaan_agunan.fasilitas);
                                    $('#form_detail input[name="listrik_agunan"]').val(data_pemeriksaan_agunan.listrik);

                                    var nilai_taksasi_agunan = (rubah(data_pemeriksaan_agunan.nilai_taksasi_agunan));
                                    $('#form_detail input[name=nilai_taksasi_agunan]').val(nilai_taksasi_agunan);
                                    var nilai_taksasi_bangunan = (rubah(data_pemeriksaan_agunan.nilai_taksasi_bangunan));
                                    $('#form_detail input[name=nilai_taksasi_bangunan]').val(nilai_taksasi_bangunan);
                                    var nilai_likuidasi_agunan = (rubah(data_pemeriksaan_agunan.nilai_likuidasi));
                                    $('#form_detail input[name=nilai_likuidasi_agunan]').val(nilai_likuidasi_agunan);
                                    $('#form_detail input[name="tgl_taksasi_agunan"]').val(data_pemeriksaan_agunan.tgl_taksasi);
                                    var nilai_agunan_independen = (rubah(data_pemeriksaan_agunan.nilai_agunan_independen));
                                    $('#form_detail input[name=nilai_agunan_independen]').val(nilai_agunan_independen);


                                    // $('#form_detail input[name="nilai_taksasi_agunan"]').val(data_pemeriksaan_agunan.nilai_taksasi_agunan);
                                    // $('#form_detail input[name="nilai_taksasi_bangunan"]').val(data_pemeriksaan_agunan.nilai_taksasi_bangunan);

                                    // $('#form_detail input[name="nilai_likuidasi_agunan"]').val(data_pemeriksaan_agunan.nilai_likuidasi);
                                    // $('#form_detail input[name="nilai_agunan_independen"]').val(data_pemeriksaan_agunan.nilai_agunan_independen);
                                    $('#form_detail input[name="perusahaan_penilai_independen"]').val(data_pemeriksaan_agunan.perusahaan_penilai_independen);
                                })
                        }

                        load_kapasitas_bulanan = function() {
                            get_data_kapasitas_bulanan = function(opts, id_kapasitas_bulanan) {
                                var url = '<?php echo config_item('api_url') ?>api/kap_bul/' + id_kapasitas_bulanan;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }
                            get_data_kapasitas_bulanan({}, id_kapasitas_bulanan)
                                .done(function(response) {
                                    var data_kapasitas_bulanan = response.data;
                                    //pemeriksaan agunan
                                    var pemasukan_debitur = (rubah(data_kapasitas_bulanan.pemasukan.debitur));
                                    $('#form_detail input[name=pemasukan_debitur]').val(pemasukan_debitur);

                                    var pemasukan_pasangan = (rubah(data_kapasitas_bulanan.pemasukan.pasangan));
                                    $('#form_detail input[name=pemasukan_pasangan]').val(pemasukan_pasangan);

                                    var pemasukan_penjamin = (rubah(data_kapasitas_bulanan.pemasukan.penjamin));
                                    $('#form_detail input[name=pemasukan_penjamin]').val(pemasukan_penjamin);

                                    var total_pemasukan = (rubah(data_kapasitas_bulanan.pemasukan.total));
                                    $('#form_detail input[name=total_pemasukan]').val(total_pemasukan);

                                    var biaya_rumah_tangga = (rubah(data_kapasitas_bulanan.pengeluaran.rumah_tangga));
                                    $('#form_detail input[name=biaya_rumah_tangga]').val(biaya_rumah_tangga);

                                    var biaya_transport = (rubah(data_kapasitas_bulanan.pengeluaran.transport));
                                    $('#form_detail input[name=biaya_transport]').val(biaya_transport);

                                    var biaya_pendidikan = (rubah(data_kapasitas_bulanan.pengeluaran.pendidikan));
                                    $('#form_detail input[name=biaya_pendidikan]').val(biaya_pendidikan);

                                    var biaya_telp_listr_air = (rubah(data_kapasitas_bulanan.pengeluaran.telp_list_air));
                                    $('#form_detail input[name=biaya_telp_listr_air]').val(biaya_telp_listr_air);

                                    var angsuran_lain_lain = (rubah(data_kapasitas_bulanan.pengeluaran.lain_lain));
                                    $('#form_detail input[name=biaya_lain]').val(angsuran_lain_lain);



                                    var total_pengeluaran = (rubah(data_kapasitas_bulanan.pengeluaran.total));
                                    $('#form_detail input[id=total_pengeluaran]').val(total_pengeluaran);

                                    var biaya_telp_listr_air = (rubah(data_kapasitas_bulanan.pengeluaran.telp_list_air));
                                    $('#form_detail input[name=biaya_telp_listr_air]').val(biaya_telp_listr_air);

                                    var pendapatan_bersih = (rubah(data_kapasitas_bulanan.penghasilan_bersih));
                                    $('#form_detail input[name=pendapatan_bersih]').val(pendapatan_bersih);

                                    $('#form_detail input[name="pendapatan_bersih"]').val(data_kapasitas_bulanan.penghasilan_bersih);
                                })
                        }

                        load_pendapatan_usaha = function() {
                            get_pendapatan_usaha = function(opts, id_pendapatan_usaha) {
                                var url = '<?php echo config_item('api_url') ?>api/usaha_cadebt/' + id_pendapatan_usaha;
                                var data = opts;
                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }


                            get_pendapatan_usaha({}, id_pendapatan_usaha)
                                .done(function(response) {
                                    var data_pendapatan_usaha = response.data;

                                    //pendapatan
                                    var pemasukan_tunai = (rubah(data_pendapatan_usaha.pendapatan.tunai));
                                    $('#form_detail input[name=pemasukan_tunai]').val(pemasukan_tunai);

                                    var pemasukan_kredit = (rubah(data_pendapatan_usaha.pendapatan.kredit));
                                    $('#form_detail input[name=pemasukan_kredit]').val(pemasukan_kredit);

                                    var total_pendapatan = (rubah(data_pendapatan_usaha.pendapatan.total));
                                    $('#form_detail input[name=pendapatan_usaha]').val(total_pendapatan);
                                    $('#form_detail input[type=hidden][id=pendapatan_usaha_hide]').val(data_pendapatan_usaha.pendapatan.total);

                                    //pengeluaran
                                    var biaya_sewa = (rubah(data_pendapatan_usaha.pengeluaran.biaya_sewa));
                                    $('#form_detail input[name=biaya_sewa]').val(biaya_sewa);

                                    var biaya_gaji_pegawai = (rubah(data_pendapatan_usaha.pengeluaran.biaya_gaji_pegawai));
                                    $('#form_detail input[name=biaya_gaji_pegawai]').val(biaya_gaji_pegawai);

                                    var tlp_listrik_air = (rubah(data_pendapatan_usaha.pengeluaran.biaya_telp_listr_air));
                                    $('#form_detail input[name=tlp_listrik_air]').val(tlp_listrik_air);

                                    var biaya_belanja_brg = (rubah(data_pendapatan_usaha.pengeluaran.biaya_belanja_brg));
                                    $('#form_detail input[name=biaya_belanja_brg]').val(biaya_belanja_brg);

                                    var biaya_sampah_keamanan = (rubah(data_pendapatan_usaha.pengeluaran.biaya_sampah_kemanan));
                                    $('#form_detail input[name=biaya_sampah_keamanan]').val(biaya_sampah_keamanan);

                                    var biaya_kirim_barang = (rubah(data_pendapatan_usaha.pengeluaran.biaya_kirim_barang));
                                    $('#form_detail input[name=biaya_kirim_barang]').val(biaya_kirim_barang);

                                    var biaya_hutang_dagang = (rubah(data_pendapatan_usaha.pengeluaran.biaya_hutang_dagang));
                                    $('#form_detail input[name=biaya_hutang_dagang]').val(biaya_hutang_dagang);

                                    var biaya_angsuran = (rubah(data_pendapatan_usaha.pengeluaran.angsuran));
                                    $('#form_detail input[name=biaya_angsuran]').val(biaya_angsuran);

                                    var biaya_lain_lain = (rubah(data_pendapatan_usaha.pengeluaran.lain_lain));
                                    $('#form_detail input[name=biaya_lain_lain]').val(biaya_lain_lain);

                                    var total_pengeluaran_usaha = (rubah(data_pendapatan_usaha.pengeluaran.total));
                                    $('#form_detail input[name=pengeluaran_usaha]').val(total_pengeluaran_usaha);

                                    var keuntungan_usaha = (rubah(data_pendapatan_usaha.penghasilan_bersih));
                                    $('#form_detail input[name=keuntungan_usaha]').val(keuntungan_usaha);

                                })
                        }
                        // var select_recomtenor = [];
                        // var option_recomtenor= [
                        //     '<option id="recomtenor12" value="12">12</option>',
                        //     '<option id="recomtenor18" value="18">18</option>',
                        //     '<option id="recomtenor24" value="24">24</option>',
                        //     '<option id="recomtenor30" value="30">30</option>',
                        //     '<option id="recomtenor36" value="36">36</option>',
                        //     '<option id="recomtenor48" value="48">48</option>',
                        //     '<option id="recomtenor60" value="60">60</option>'
                        // ].join('\n');
                        // select_recomtenor.push(option_recomtenor);
                        // $('#form_detail  select[id=recom_tenor]').html(select_recomtenor);
                        load_ideb_pefindo = function() {
                            get_das = function(opts, id_das) {
                                var url = '<?php echo config_item('api_url') ?>api/master/das/' + id_das;
                                var data = opts;
                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }
                            get_das({}, id_das)
                                .done(function(response) {
                                    var data_das = response.data;
                                    $.each(data_das.lampiran.ideb, function(item) {
                                        var a = [
                                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data_das.lampiran.ideb[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data_das.lampiran.ideb[item] + '</p></a>',
                                        ].join('\n');
                                        htmlideb.push(a);
                                    });
                                    $('#dataideb').html(htmlideb);

                                    $.each(data_das.lampiran.pefindo, function(item) {
                                        var b = [
                                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data_das.lampiran.pefindo[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data_das.lampiran.pefindo[item] + '</p></a>',
                                        ].join('\n');
                                        htmlpefindo.push(b);
                                    });
                                    $('#datapefindo').html(htmlpefindo);
                                })

                            $('#close_pengajuan').on('click');
                        }
                        load_fasilitas();
                        load_debitur();
                        if (data.data_pasangan.id == null) {
                            $('#form_data_pasangan').hide();
                            $('#form_ktp_pasangan').hide();
                            $('#form_buku_nikah').hide();
                        } else {
                            load_pasangan();
                        }
                        load_pemeriksaan_agunan();
                        load_kapasitas_bulanan();
                        load_pendapatan_usaha();
                        load_ideb_pefindo();
                        $('#close_pengajuan').on('click');

                    })

                    .fail(function(jqXHR) {
                        $('#modal_data_credit').modal('toggle');
                        // $('#modal_data_credit').modal('close');
                        bootbox.alert('Data tidak ditemukan, coba refresh kembali!!', function() {
                            $('.close').on('click');
                        });

                    });
                hide_all();
                $('#lihat_detail').show();

            });

            $('#data_creditchecking').on('click', '.edit', function(e) {
                e.preventDefault();
                var id = $(this).attr('data');
                var htmldata = [];
                var html = [];
                var html1 = [];
                var html2 = [];
                var html3 = [];
                var html4 = [];
                var html5 = [];
                var html6 = [];
                var html7 = [];
                var html8 = [];
                var html9 = [];
                var html10 = [];
                var html11 = [];
                var html13 = [];
                var html14 = [];
                var html15 = [];
                var html16 = [];
                var html17 = [];
                var html18 = [];
                var html19 = [];
                var html20 = [];
                var html21 = [];
                var html22 = [];
                var html23 = [];
                var html24 = [];
                var htmlideb = [];
                var htmlpefindo = [];
                $("#input_ca").hide();
                $("#detail_ca").show();
                // $("#aksi").hide();

                get_credit_checking({}, id)
                    .done(function(response) {
                        var data = response.data;
                        console.log(data);
                        var id = data.id_trans_so;
                        var id_das = data.id_trans_so;
                        var id_debitur = data.data_debitur.id;
                        var id_pasangan = data.data_pasangan.id;
                        var id_credit = data.id;
                        var id_fasilitas = data.fasilitas_pinjaman.id;
                        // var id_agunan_tanah = data.data_agunan.agunan_tanah[0].id;
                        var id_pemeriksaan_agunan = data.pemeriksaan.agunan_tanah[0].id;
                        // var id_pemeriksaan_agunan_kendaraan = data.pemeriksaan.agunan_kendaraan[0].id;
                        var id_kapasitas_bulanan = data.kapasitas_bulanan.id;
                        var id_pendapatan_usaha = data.pendapatan_usaha.id;

                        $('#form_detail input[type=hidden][name=id]').val(data.id_trans_so);
                        $('#form_modal_tambah_penjamin input[type=hidden][name=add_id_so_penjamin]').val(data.id_trans_so);
                        $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val(data.id_trans_so);
                        $('#form_modal_tambah_analisa_cc input[type=hidden][name=add_id_so_analisa_cc]').val(data.id_trans_so);
                        $('#form_modal_agunan_sertifikat input[type=hidden][name=id_trans_so_aguanan]').val(data.id_trans_so);
                        $('#form_edit_form_persetujuan_ideb input[type=hidden][name=id_debitur_form_persetujuan_ideb]').val(data.id_trans_so);
                        // $('#form_detail input[type=hidden][name=id]').val(data.id);
                        $('#form_detail input[type=hidden][name=id_debitur]').val(data.data_debitur.id);
                        $('#form_edit_ktp_deb input[type=hidden][name=id_debitur_ktp]').val(data.data_debitur.id);
                        $('#form_edit_kk_deb input[type=hidden][name=id_debitur_kk]').val(data.data_debitur.id);
                        $('#form_edit_sertifikat_deb input[type=hidden][name=id_debitur_sertifikat').val(data.data_debitur.id);
                        $('#form_edit_pbb_deb input[type=hidden][name=id_debitur_pbb').val(data.data_debitur.id);
                        $('#form_edit_imb_deb input[type=hidden][name=id_debitur_imb').val(data.data_debitur.id);
                        $('#form_edit_buku_tabungan_deb input[type=hidden][name=id_debitur_buku_tabungan').val(data.data_debitur.id);

                        $('#form_edit_foto_usaha input[type=hidden][name=id_debitur_foto_usaha]').val(data.data_debitur.id);
                        $('#form_edit_skk_deb input[type=hidden][name=id_debitur_skk]').val(data.data_debitur.id);
                        $('#form_edit_slip_gaji_deb input[type=hidden][name=id_debitur_slip_gaji]').val(data.data_debitur.id);
                        $('#form_edit_sku_deb input[type=hidden][name=id_debitur_sku]').val(data.data_debitur.id);
                        $('#form_edit_pembukuan_usaha_deb input[type=hidden][name=id_debitur_pembukuan_usaha]').val(data.data_debitur.id);
                        $('#form_detail input[type=hidden][name=id_pasangan]').val(data.data_pasangan.id);
                        // $('#form_detail input[type=hidden][name="id_agunan_tanah[]"]').val(data.data_agunan.agunan_tanah[0].id);
                        $('#form_detail input[type=hidden][name="id_pemeriksaan_agunan"]').val(data.pemeriksaan.agunan_tanah[0].id);
                        $('#form_detail input[type=hidden][name=id_kapasitas_bulanan]').val(data.kapasitas_bulanan.id);
                        $('#form_detail input[type=hidden][name=id_pendapatan_usaha]').val(data.pendapatan_usaha.id);
                        $('#form_detail input[type=hidden][name=id_fasilitas_pinjaman]').val(data.fasilitas_pinjaman.id);

                        $('#form_detail input[name=nomor_so]').val(data.nomor_so);
                        $('#form_detail input[name=nama_sales_officer]').val(data.nama_so);
                        $('#form_detail textarea[name=notes_so]').val(data.notes_so);

                        if (data.lampiran_ao.form_persetujuan_ideb == null) {
                            var o = [
                                '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                            ].join('\n');
                            html24.push(o);
                            $('#gambar_form_persetujuan_ideb').html(html24);
                        } else {
                            var o = [
                                '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" /> </a>'
                            ].join('\n');
                            html24.push(o);
                            $('#gambar_form_persetujuan_ideb').html(html24);
                        }

                        var htmlpenjamin = [];
                        var id_penjamin = {};
                        $.each(data.data_penjamin, function(index, item) {
                            var id_penjamin = [];
                            id_penjamin = item.id;

                            var jenis_kelamin_pen = "";

                            if (item.jenis_kelamin == 'L') {
                                jenis_kelamin_pen = 'LAKI-LAKI';
                            } else {
                                jenis_kelamin_pen = 'PEREMPUAN';
                            }

                            var tr = [

                                '<tr>',
                                '<td style="width:50px"><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_penjamin"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '<td style="width:210px">' + item.nama_ktp + '</td>',
                                '<td style="width:210px">' + item.nama_ibu_kandung + '</td>',
                                '<td>' + item.no_ktp + '</td>',
                                '<td>' + item.no_npwp + '</td>',
                                '<td style="width:135px">' + item.tempat_lahir + '</td>',
                                '<td style="width:137px">' + item.tgl_lahir + '</td>',
                                '<td style="width:160px">' + jenis_kelamin_pen + '</td>',
                                '<td style="width:285px">' + item.alamat_ktp + '</td>',
                                '<td>' + item.no_telp + '</td>',
                                '<td style="width:185px">' + item.hubungan_debitur + '</td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" /> </a> </td>',
                                '<td style="width:200px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp_pasangan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp_pasangan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px"style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_kk + '" /> </a> </td>',
                                '<td style="width:180px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_buku_nikah + '" /> </a> </td>',

                                '</tr>'
                            ].join('\n');
                            htmlpenjamin.push(tr);
                        })
                        $('#data_penjamin').html(htmlpenjamin);

                        var htmlagunantanah = [];
                        var id_agunan_tanah = {};
                        var no = 0;
                        $.each(data.data_agunan.agunan_tanah, function(index, item) {
                            var id_agunan_tanah = [];
                            id_agunan_tanah = item.id;

                            var njop = (rubah(item.njop));
                            no++;

                            var tr = [

                                '<tr>',
                                '<td>' + no + '</td>',
                                '<td>' + item.tipe_lokasi + '</td>',
                                '<td>' + item.alamat + '</td>',
                                '<td>' + item.luas_tanah + '</td>',
                                '<td>' + item.luas_bangunan + '</td>',
                                '<td>' + item.nama_pemilik_sertifikat + '</td>',
                                '<td>' + item.jenis_sertifikat + '</td>',
                                '<td>' + item.no_sertifikat + '</td>',
                                '<td>' + item.tgl_ukur_sertifikat + '</td>',
                                '<td>' + item.tgl_berlaku_shgb + '</td>',
                                '<td>' + item.no_imb + '</td>',
                                '<td>' + njop + '</td>',
                                '<td>' + item.nop + '</td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_dapur + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_dapur + '" /> </a> </td>',
                                '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '</tr>'
                            ].join('\n');
                            htmlagunantanah.push(tr);
                        })
                        $('#data_agunan_sertifikat').html(htmlagunantanah);


                        get_asaldata = function(opts) {
                            var url = '<?php echo $this->config->item('api_url'); ?>/api/master/asal_data';
                            return $.ajax({
                                type: 'GET',
                                url: url,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                }
                            });
                        }

                        get_asaldata()
                            .done(function(res) {
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.id + '" value="' + e.id + '">' + e.nama + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#form_detail select[id=select_asal_data]').html(select);
                                if (data.asaldata.id == '' + data.asaldata.id + '') {
                                    document.getElementById('' + data.asaldata.id + '').selected = "true";
                                }
                            })

                        $('#form_detail input[name=nama_marketing]').val(data.nama_marketing);

                        get_data_fasilitas = function(opts, id_fasilitas) {
                            var url = '<?php echo config_item('api_url') ?>api/faspin/' + id_fasilitas;
                            var data = opts;

                            return $.ajax({
                                type: 'GET',
                                url: url,
                                data: data,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                }
                            });
                        }

                        load_fasilitas = function() {
                            get_data_fasilitas({}, id_fasilitas)
                                .done(function(response) {
                                    var data_fasilitas = response.data;
                                    var angka = (rubah(data_fasilitas.plafon));
                                    $('#form_detail input[name=plafon]').val(angka);

                                    var select_tenor = [];
                                    var option_tenor = [
                                        '<option id="tenor12" value="12">12</option>',
                                        '<option id="tenor18" value="18">18</option>',
                                        '<option id="tenor24" value="24">24</option>',
                                        '<option id="tenor30" value="30">30</option>',
                                        '<option id="tenor36" value="36">36</option>',
                                        '<option id="tenor48" value="48">48</option>',
                                        '<option id="tenor60" value="60">60</option>'
                                    ].join('\n');
                                    select_tenor.push(option_tenor);
                                    $('#form_detail  select[id=tenor]').html(select_tenor);

                                    if (data_fasilitas.tenor == "12") {
                                        document.getElementById("tenor12").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "18") {
                                        document.getElementById("tenor18").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "24") {
                                        document.getElementById("tenor24").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "30") {
                                        document.getElementById("tenor30").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "36") {
                                        document.getElementById("tenor36").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor == "48") {
                                        document.getElementById("tenor48").selected = "true";
                                    }
                                    if (data_fasilitas.tenor == "60") {
                                        document.getElementById("tenor60").selected = "true";
                                    }

                                    var select_jenis_pinjaman = [];
                                    var option_jenis_pinjaman = [
                                        '<option value="">--Pilih--</option>',
                                        '<option id="konsumtif" value="KONSUMTIF">KONSUMTIF</option>',
                                        '<option id="modal_kerja" value="MODAL KERJA">MODAL KERJA</option>',
                                        '<option id="investasi" value="INVESTASI">INVESTASI</option>'
                                    ].join('\n');
                                    select_jenis_pinjaman.push(option_jenis_pinjaman);
                                    $('#form_detail  select[id=select_jenis_pinjaman]').html(select_jenis_pinjaman);

                                    if (data_fasilitas.jenis_pinjaman == "KONSUMTIF") {
                                        document.getElementById("konsumtif").selected = "true";
                                    } else
                                    if (data_fasilitas.jenis_pinjaman == "MODAL KERJA") {
                                        document.getElementById("modal_kerja").selected = "true";
                                    } else
                                    if (data_fasilitas.tenor = "INVESTASI") {
                                        document.getElementById("investasi").selected = "true";
                                    }

                                    $('#form_detail textarea[name=tujuan_pinjaman]').val(data_fasilitas.tujuan_pinjaman);

                                    get_segmentasi = function(opts) {
                                        var url = '<?php echo $this->config->item('api_url'); ?>segmentasi';
                                        return $.ajax({
                                            type: 'GET',
                                            url: url,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            }
                                        });
                                    }

                                    get_segmentasi()
                                        .done(function(res) {
                                            var select = [];
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.nama + '" value="' + e.nama + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[id=segmentasi]').html(select);
                                            if (data_fasilitas.segmentasi_bpr == '' + data_fasilitas.segmentasi_bpr + '') {
                                                document.getElementById('' + data_fasilitas.segmentasi_bpr + '').selected = "true";
                                            }
                                        })

                                    get_sektor_ekonomi = function(opts) {
                                        var url = '<?php echo $this->config->item('api_url'); ?>sektorEkonomi';
                                        return $.ajax({
                                            type: 'GET',
                                            url: url,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            }
                                        });
                                    }

                                    get_sektor_ekonomi()
                                        .done(function(res) {
                                            var select = [];
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.kode + '" value="' + e.kode + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[id=sektor_ekonomi]').html(select);
                                            if (data_fasilitas.validasi_sektor_ekonomi == '' + data_fasilitas.validasi_sektor_ekonomi + '') {
                                                document.getElementById('' + data_fasilitas.validasi_sektor_ekonomi + '').selected = "true";
                                            }
                                        })

                                })
                        }

                        load_debitur = function() {

                            $('#select_provinsi_ktp_dup').hide();
                            $('#select_kabupaten_ktp_dup').hide();
                            $('#select_kecamatan_ktp_dup').hide();
                            $('#select_kelurahan_ktp_dup').hide();

                            $('#select_provinsi_ktp').show();
                            $('#select_kabupaten_ktp').show();
                            $('#select_kecamatan_ktp').show();
                            $('#select_kelurahan_ktp').show();

                            $('#select_provinsi_domisili_dup').hide();
                            $('#select_kabupaten_domisili_dup').hide();
                            $('#select_kecamatan_domisili_dup').hide();
                            $('#select_kelurahan_domisili_dup').hide();

                            $('#select_provinsi_domisili').show();
                            $('#select_kabupaten_domisili').show();
                            $('#select_kecamatan_domisili').show();
                            $('#select_kelurahan_domisili').show();
                            //calon debitur    

                            get_data_debitur = function(opts, id_debitur) {
                                var url = '<?php echo config_item('api_url') ?>api/debitur/' + id_debitur;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }

                            get_data_debitur({}, id_debitur)
                                .done(function(response) {
                                    var data_debitur = response.data;

                                    $('#form_detail input[name=nama_debitur]').val(data_debitur.nama_lengkap);
                                    $('#form_detail input[name=gelar_keagamaan]').val(data_debitur.gelar_keagamaan);
                                    $('#form_detail input[name=gelar_pendidikan]').val(data_debitur.gelar_pendidikan);
                                    if (data.data_debitur.jenis_kelamin == "L") {
                                        document.getElementById("Ldeb").selected = "true";
                                    } else {
                                        document.getElementById("Pdeb").selected = "true";
                                    }
                                    $('#form_detail input[name=status_nikah]').val(data_debitur.status_nikah);
                                    $('#form_detail input[name=ibu_kandung]').val(data_debitur.ibu_kandung);
                                    $('#form_detail input[name=no_ktp]').val(data_debitur.no_ktp);
                                    $('#form_detail input[name=no_ktp_kk]').val(data_debitur.no_ktp_kk);
                                    $('#form_detail input[name=no_kk]').val(data_debitur.no_kk);
                                    $('#form_detail input[name=no_npwp]').val(data_debitur.no_npwp);
                                    $('#form_detail input[name=tempat_lahir]').val(data_debitur.tempat_lahir);
                                    $('#form_detail input[name=tgl_lahir_deb]').val(data_debitur.tgl_lahir);
                                    $('#form_detail input[name=email]').val(data_debitur.email);

                                    var select_agama = [];
                                    var option_agama = [
                                        '<option value="">--Pilih--</option>',
                                        '<option id="islam" value="ISLAM">ISLAM</option>',
                                        '<option id="kristen_katholik" value="KATHOLIK">KATHOLIK</option>',
                                        '<option id="kristen_protestan" value="KRISTEN">KRISTEN</option>',
                                        '<option id="hindu" value="HINDU">HINDU</option>',
                                        '<option id="budha" value="BUDHA">BUDHA</option>',
                                        '<option id="kepercayaan_lain_lain" value="LAIN2 KEPERCAYAAN">LAIN2 KEPERCAYAAN</option>'
                                    ].join('\n');
                                    select_agama.push(option_agama);
                                    $('#form_detail  select[id=select_agama]').html(select_agama);

                                    if (data_debitur.agama == "ISLAM") {
                                        document.getElementById("islam").selected = "true";
                                    } else
                                    if (data_debitur.agama == "KATHOLIK") {
                                        document.getElementById("kristen_katholik").selected = "true";
                                    } else
                                    if (data_debitur.agama = "KRISTEN") {
                                        document.getElementById("kristen_protestan").selected = "true";
                                    } else
                                    if (data_debitur.agama = "HINDU") {
                                        document.getElementById("hindu").selected = "true";
                                    } else
                                    if (data_debitur.agama = "BUDHA") {
                                        document.getElementById("budha").selected = "true";
                                    } else
                                    if (data_debitur.agama = "LAIN2 KEPERCAYAAN") {
                                        document.getElementById("kepercayaan_lain_lain").selected = "true";
                                    }

                                    $('#form_detail input[name=tinggi_badan]').val(data_debitur.tinggi_badan);
                                    $('#form_detail input[name=berat_badan]').val(data_debitur.berat_badan);
                                    $('#form_detail input[name=alamat_ktp]').val(data_debitur.alamat_ktp.alamat_singkat);
                                    $('#form_detail input[name=rt_ktp]').val(data_debitur.alamat_ktp.rt);
                                    $('#form_detail input[name=rw_ktp]').val(data_debitur.alamat_ktp.rw);

                                    var select_provinsi = [];
                                    var option_provinsi = [
                                        '<option value="' + data_debitur.alamat_ktp.provinsi.id + '">' + data_debitur.alamat_ktp.provinsi.nama + '</option>'
                                    ].join('\n');
                                    select_provinsi.push(option_provinsi);
                                    $('#form_detail  select[id=provinsi_ktp]').html(select_provinsi);

                                    var select_kabupaten_ktp = [];
                                    var option_kabupaten_ktp = [
                                        '<option value="' + data_debitur.alamat_ktp.kabupaten.id + '">' + data_debitur.alamat_ktp.kabupaten.nama + '</option>'
                                    ].join('\n');
                                    select_kabupaten_ktp.push(option_kabupaten_ktp);
                                    $('#form_detail select[name=kabupaten_ktp]').html(select_kabupaten_ktp);

                                    var select_kecamatan_ktp = [];
                                    var option_kecamatan_ktp = [
                                        '<option value="' + data_debitur.alamat_ktp.kecamatan.id + '">' + data_debitur.alamat_ktp.kecamatan.nama + '</option>'
                                    ].join('\n');
                                    select_kecamatan_ktp.push(option_kecamatan_ktp);
                                    $('#form_detail select[name=kecamatan_ktp]').html(select_kecamatan_ktp);

                                    var select_kelurahan_ktp = [];
                                    var option_kelurahan_ktp = [
                                        '<option value="' + data_debitur.alamat_ktp.kelurahan.id + '">' + data_debitur.alamat_ktp.kelurahan.nama + '</option>'
                                    ].join('\n');
                                    select_kelurahan_ktp.push(option_kelurahan_ktp);
                                    $('#form_detail select[name=kelurahan_ktp]').html(select_kelurahan_ktp);

                                    $('#form_detail input[name=kode_pos_ktp]').val(data_debitur.alamat_ktp.kode_pos);
                                    $('#form_detail input[name=alamat_domisili]').val(data_debitur.alamat_domisili.alamat_singkat);
                                    $('#form_detail input[name=rt_domisili]').val(data_debitur.alamat_domisili.rt);
                                    $('#form_detail input[name=rw_domisili]').val(data_debitur.alamat_domisili.rw);

                                    var select_provinsi_domisili = [];
                                    var option_provinsi_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.provinsi.id + '">' + data_debitur.alamat_domisili.provinsi.nama + '</option>'
                                    ].join('\n');
                                    select_provinsi_domisili.push(option_provinsi_domisili);
                                    $('#form_detail  select[id=provinsi_domisili]').html(select_provinsi_domisili);

                                    var select_kabupaten_domisili = [];
                                    var option_kabupaten_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.kabupaten.id + '">' + data_debitur.alamat_domisili.kabupaten.nama + '</option>'
                                    ].join('\n');
                                    select_kabupaten_domisili.push(option_kabupaten_domisili);
                                    $('#form_detail  select[id=kabupaten_domisili]').html(select_kabupaten_domisili);

                                    var select_kecamatan_domisili = [];
                                    var option_kecamatan_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.kecamatan.id + '">' + data_debitur.alamat_domisili.kecamatan.nama + '</option>'
                                    ].join('\n');
                                    select_kecamatan_domisili.push(option_kecamatan_domisili);
                                    $('#form_detail select[id=kecamatan_domisili]').html(select_kecamatan_domisili);

                                    var select_kelurahan_domisili = [];
                                    var option_kelurahan_domisili = [
                                        '<option value="' + data_debitur.alamat_domisili.kelurahan.id + '">' + data_debitur.alamat_domisili.kelurahan.nama + '</option>'
                                    ].join('\n');
                                    select_kelurahan_domisili.push(option_kelurahan_domisili);
                                    $('#form_detail select[id=kelurahan_domisili]').html(select_kelurahan_domisili);

                                    $('#form_detail input[name=kode_pos_domisili]').val(data_debitur.alamat_domisili.kode_pos);

                                    var select_pendidikan_terakhir = [];
                                    var option_pendidikan_terakhir = [
                                        '<option value="' + data_debitur.pendidikan_terakhir + '">' + data_debitur.pendidikan_terakhir + '</option>',
                                        '<option value="TIDAK TAMAT SD">TIDAK TAMAT SD</option>',
                                        '<option value="SD">SD</option>',
                                        '<option value="SMP">SMP</option>',
                                        '<option value="SMA SEDERAJAT">SMA SEDERAJAT</option>',
                                        '<option value="D1">D1</option>',
                                        '<option value="D2">D2</option>',
                                        '<option value="D3">D3</option>',
                                        '<option value="S1">S1</option>',
                                        '<option value="S2">S2</option>',
                                        '<option value="S3">S3</option>'
                                    ].join('\n');
                                    select_pendidikan_terakhir.push(option_pendidikan_terakhir);
                                    $('#form_detail select[name=pendidikan_terakhir]').html(select_pendidikan_terakhir);

                                    $('#form_detail input[name=jumlah_tanggungan]').val(data_debitur.jumlah_tanggungan);
                                    $('#form_detail input[name=no_telp]').val(data_debitur.no_telp);
                                    $('#form_detail input[name=no_hp]').val(data_debitur.no_hp);

                                    var select_alamat_surat = [];
                                    var option_alamat_surat = [
                                        '<option value="' + data_debitur.alamat_surat + '">' + data_debitur.alamat_surat + '</option>',
                                        '<option value="KTP">KTP</option>',
                                        '<option value="DOMISILI">DOMISILI</option>',
                                        '<option value="KANTOR">KANTOR</option>'
                                    ].join('\n');
                                    select_alamat_surat.push(option_alamat_surat);
                                    $('#form_detail select[name=alamat_surat]').html(select_alamat_surat);

                                    get_pekerjaan()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.kode_group1 + 'pekerjaan_deb_detail" value="' + e.kode_group1 + '">' + e.deskripsi_group1 + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=pekerjaan_deb]').html(select1 + select);
                                            if (data_debitur.pekerjaan.nama_pekerjaan = '' + data_debitur.pekerjaan.nama_pekerjaan + '') {
                                                document.getElementById('' + data_debitur.pekerjaan.nama_pekerjaan + 'pekerjaan_deb_detail').selected = "true";
                                            }
                                        })

                                    $('#form_detail input[name=posisi]').val(data_debitur.pekerjaan.posisi_pekerjaan);
                                    $('#form_detail input[name=nama_perusahaan]').val(data_debitur.pekerjaan.nama_tempat_kerja);
                                    $('#form_detail input[name=jenis_usaha]').val(data_debitur.pekerjaan.jenis_pekerjaan);
                                    $('#form_detail input[name=masa_kerja_usaha]').val(data_debitur.pekerjaan.tgl_mulai_kerja);
                                    $('#form_detail input[name=no_telp_kantor_usaha]').val(data_debitur.pekerjaan.no_telp_tempat_kerja);
                                    $('#form_detail input[name=alamat_usaha_kantor]').val(data_debitur.pekerjaan.alamat.alamat_singkat);
                                    $('#form_detail input[name=rt_usaha_kantor]').val(data_debitur.pekerjaan.alamat.rt);
                                    $('#form_detail input[name=rw_usaha_kantor]').val(data_debitur.pekerjaan.alamat.rw);
                                    $('#form_detail input[name=kode_pos_kantor]').val(data_debitur.pekerjaan.alamat.kode_pos);
                                    get_provinsi()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.id + 'prov_pek_deb" value="' + e.id + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=provinsi_kantor]').html(select1 + select);
                                            if (data_debitur.pekerjaan.alamat.provinsi.id = '' + data_debitur.pekerjaan.alamat.provinsi.id + '') {
                                                document.getElementById('' + data_debitur.pekerjaan.alamat.provinsi.id + 'prov_pek_deb').selected = "true";
                                            }
                                        })

                                    if (data_debitur.pekerjaan.alamat.kabupaten.id == null) {
                                        var select_kabupaten_kantor_deb = [];
                                        var option_kabupaten_kantor_deb = [
                                            '<option value=""></option>'
                                        ].join('\n');
                                        select_kabupaten_kantor_deb.push(option_kabupaten_kantor_deb);
                                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor_deb);
                                    } else {
                                        var select_kabupaten_kantor_deb = [];
                                        var option_kabupaten_kantor_deb = [
                                            '<option value="' + data_debitur.pekerjaan.alamat.kabupaten.id + '">' + data_debitur.pekerjaan.alamat.kabupaten.nama + '</option>'
                                        ].join('\n');
                                        select_kabupaten_kantor_deb.push(option_kabupaten_kantor_deb);
                                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor_deb);
                                    }

                                    if (data_debitur.pekerjaan.alamat.kecamatan.id == null) {
                                        var select_kecamatan_kantor_deb = [];
                                        var option_kecamatan_kantor_deb = [
                                            '<option value=""></option>'
                                        ].join('\n');
                                        select_kecamatan_kantor_deb.push(option_kecamatan_kantor_deb);
                                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor_deb);
                                    } else {
                                        var select_kecamatan_kantor_deb = [];
                                        var option_kecamatan_kantor_deb = [
                                            '<option value="' + data_debitur.pekerjaan.alamat.kecamatan.id + '">' + data_debitur.pekerjaan.alamat.kecamatan.nama + '</option>'
                                        ].join('\n');
                                        select_kecamatan_kantor_deb.push(option_kecamatan_kantor_deb);
                                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor_deb);
                                    }

                                    if (data_debitur.pekerjaan.alamat.kelurahan.id == null) {
                                        var select_kelurahan_kantor_deb = [];
                                        var option_kelurahan_kantor_deb = [
                                            '<option value=""></option>'
                                        ].join('\n');
                                        select_kelurahan_kantor_deb.push(option_kelurahan_kantor_deb);
                                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor_deb);
                                    } else {
                                        var select_kelurahan_kantor_deb = [];
                                        var option_kelurahan_kantor_deb = [
                                            '<option value="' + data_debitur.pekerjaan.alamat.kelurahan.id + '">' + data_debitur.pekerjaan.alamat.kelurahan.nama + '</option>'
                                        ].join('\n');
                                        select_kelurahan_kantor_deb.push(option_kelurahan_kantor_deb);
                                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor_deb);
                                    }

                                    $('#form_detail input[name=kode_pos_kantor]').val(data_debitur.pekerjaan.alamat.kode_pos);

                                    $('#form_detail select[name=kabupaten_ktp]').html(select_kabupaten_ktp);
                                    $('#form_detail input[name=kelurahan_kantor]').val(data_debitur.pekerjaan.alamat.kelurahan.nama);
                                    $('#form_detail input[name=kecamatan_kantor]').val(data_debitur.pekerjaan.alamat.kecamatan.nama);
                                    $('#form_detail input[name=kabupaten_kantor]').val(data_debitur.pekerjaan.alamat.kabupaten.nama);
                                    $('#form_detail input[name=provinsi_kantor]').val(data_debitur.pekerjaan.alamat.provinsi.nama);

                                    if (data_debitur.lampiran.lamp_ktp == null) {
                                        var a = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html.push(a);
                                        $('#gambar_ktp').html(html);
                                    } else {
                                        var a = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" /> </a>'
                                        ].join('\n');
                                        html.push(a);
                                        $('#gambar_ktp').html(html);
                                    }


                                    if (data_debitur.lampiran.lamp_kk == null) {
                                        var b = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html1.push(b);
                                        $('#gambar_kk').html(html1);
                                    } else {
                                        var b = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KK Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" /> </a>'
                                        ].join('\n');
                                        html1.push(b);
                                        $('#gambar_kk').html(html1);
                                    }

                                    if (data_debitur.lampiran.lamp_sertifikat == null) {
                                        var c = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html2.push(c);
                                        $('#gambar_sertifikat').html(html2);
                                    } else {
                                        var c = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Sertifkat Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                                        ].join('\n');
                                        html2.push(c);
                                        $('#gambar_sertifikat').html(html2);
                                    }

                                    if (data_debitur.lampiran.lamp_sttp_pbb == null) {
                                        var d = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html3.push(d);
                                        $('#gambar_pbb').html(html3);
                                    } else {
                                        var d = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran PBB Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                                        ].join('\n');
                                        html3.push(d);
                                        $('#gambar_pbb').html(html3);
                                    }

                                    if (data_debitur.lampiran.lamp_imb == null) {
                                        var e = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html4.push(e);
                                        $('#gambar_imb').html(html4);
                                    } else {
                                        var e = [
                                            '<a class="example-image-link target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" /> </a>'
                                        ].join('\n');
                                        html4.push(e);
                                        $('#gambar_imb').html(html4);
                                    }

                                    if (data_debitur.lampiran.lamp_buku_tabungan == null) {
                                        var h = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html7.push(h);
                                        $('#gambar_buku_tabungan').html(html7);
                                    } else {
                                        var h = [
                                            '<a class="example-image-link target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_buku_tabungan + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_buku_tabungan + '" /> </a>'
                                        ].join('\n');
                                        html7.push(h);
                                        $('#gambar_buku_tabungan').html(html7);
                                    }

                                    if (data_debitur.lampiran.lamp_skk == null) {
                                        var r = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html18.push(r);
                                        $('#gambar_surat_keterangan_kerja').html(html18);
                                    } else {
                                        var r = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_skk + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_skk + '" /> </a>'
                                        ].join('\n');
                                        html18.push(r);
                                        $('#gambar_surat_keterangan_kerja').html(html18);
                                    }

                                    if (data_debitur.lampiran.lamp_slip_gaji == null) {
                                        var s = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html19.push(s);
                                        $('#gambar_slip_gaji').html(html19);
                                    } else {
                                        var s = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_slip_gaji + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_slip_gaji + '" /> </a>'
                                        ].join('\n');
                                        html19.push(s);
                                        $('#gambar_slip_gaji').html(html19);
                                    }

                                    if (data_debitur.lampiran.lamp_sku == null) {
                                        var t = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html20.push(t);
                                        $('#gambar_keterangan_usaha').html(html20);
                                    } else {
                                        var t = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sku + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sku + '" /> </a>'
                                        ].join('\n');
                                        html20.push(t);
                                        $('#gambar_keterangan_usaha').html(html20);
                                    }

                                    if (data_debitur.lampiran.foto_pembukuan_usaha == null) {
                                        var u = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html21.push(u);
                                        $('#gambar_pembukuan_usaha').html(html21);
                                    } else {
                                        var u = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_pembukuan_usaha + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_pembukuan_usaha + '" /> </a>'
                                        ].join('\n');
                                        html21.push(u);
                                        $('#gambar_pembukuan_usaha').html(html21);
                                    }

                                    if (data_debitur.lampiran.lamp_foto_usaha == null) {
                                        var v = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html22.push(v);
                                        $('#gambar_foto_usaha').html(html22);
                                    } else {
                                        var v = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_foto_usaha + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_foto_usaha + '" /> </a>'
                                        ].join('\n');
                                        html22.push(v);
                                        $('#gambar_foto_usaha').html(html22);
                                    }

                                    if (data_debitur.lampiran.foto_agunan_rumah == null) {
                                        var z = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html15.push(z);
                                        $('#gambar_foto_agunan_rumah').html(html15);
                                    } else {
                                        var z = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" /> </a>'
                                        ].join('\n');
                                        html15.push(z);
                                        $('#gambar_foto_agunan_rumah').html(html15);
                                    }

                                    $.each(data_debitur.anak, function(index, item) {

                                        var tr = [
                                            '<tr>',
                                            '<td style="width:210px">' + item.nama + '</td>',
                                            '<td style="width:210px">' + item.tgl_lahir + '</td>',
                                            '</tr>'
                                        ].join('\n');
                                        html14.push(tr);

                                        $('#data_anak').html(html14);
                                    })

                                })
                        }


                        load_pasangan = function() {

                            get_data_pasangan = function(opts, id_pasangan) {
                                var url = '<?php echo config_item('api_url') ?>api/pasangan/' + id_pasangan;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }

                            get_data_pasangan({}, id_pasangan)
                                .done(function(response) {
                                    var data_pasangan = response.data;

                                    $('#form_detail input[name=nama_lengkap_pas]').val(data_pasangan.nama_lengkap);
                                    $('#form_detail input[name=nama_ibu_kandung_pas]').val(data_pasangan.nama_ibu_kandung);

                                    var select_jk_pas = [];
                                    var option_jk_pas = [
                                        '<option id="L_pas" value="L">LAKI-LAKI</option>',
                                        '<option id="P_pas" value="P">PEREMPUAN</option>'
                                    ].join('\n');
                                    select_jk_pas.push(option_jk_pas);
                                    $('#form_detail select[name=jenis_kelamin_pas]').html(select_jk_pas);

                                    if (data_pasangan.jenis_kelamin == "L") {
                                        document.getElementById("L_pas").selected = "true";
                                    } else {
                                        document.getElementById("P_pas").selected = "true";
                                    }

                                    $('#form_detail input[name=no_ktp_pas]').val(data_pasangan.no_ktp);
                                    $('#form_detail input[name=no_ktp_kk_pas]').val(data_pasangan.no_ktp_kk);
                                    $('#form_detail input[name=no_npwp_pas]').val(data_pasangan.no_npwp);
                                    $('#form_detail input[name=tempat_lahir_pas]').val(data_pasangan.tempat_lahir);
                                    $('#form_detail input[name=tgl_lahir_pas]').val(data_pasangan.tgl_lahir);
                                    $('#form_detail textarea[name=alamat_ktp_pas]').val(data_pasangan.alamat_ktp);
                                    $('#form_detail input[name=no_telp_pas]').val(data_pasangan.no_telp);
                                    $('#form_detail select[name=pekerjaan_pas]').val(data_pasangan.pekerjaan.nama_pekerjaan);
                                    $('#form_detail input[name=posisi_pekerjaan_pas]').val(data_pasangan.pekerjaan.posisi_pekerjaan);
                                    $('#form_detail input[name=nama_perusahaan_pas]').val(data_pasangan.pekerjaan.nama_tempat_kerja);
                                    $('#form_detail input[name=jenis_usaha_pas]').val(data_pasangan.pekerjaan.jenis_pekerjaan);
                                    $('#form_detail input[name=tgl_mulai_kerja_pas]').val(data_pasangan.tgl_mulai_kerja);
                                    $('#form_detail input[name=no_telp_tempat_kerja_pas]').val(data_pasangan.no_telp_tempat_kerja);
                                    $('#form_detail input[name=masa_kerja_lama_usaha_pas]').val(data_pasangan.pekerjaan.tgl_mulai_kerja);

                                    get_pekerjaan()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.kode_group1 + 'pekerjaan_pas_detail" value="' + e.kode_group1 + '">' + e.deskripsi_group1 + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=pekerjaan_pas]').html(select1 + select);
                                            if (data_pasangan.pekerjaan.nama_pekerjaan = '' + data_pasangan.pekerjaan.nama_pekerjaan + '') {
                                                document.getElementById('' + data_pasangan.pekerjaan.nama_pekerjaan + 'pekerjaan_pas_detail').selected = "true";
                                            }
                                        })

                                    $('#form_detail input[name=jenis_usaha_pas]').val(data_pasangan.pekerjaan.jenis_pekerjaan);
                                    $('#form_detail input[name=no_telp_kantor_usaha_pas]').val(data_pasangan.pekerjaan.no_telp_tempat_kerja);
                                    $('#form_detail input[name=alamat_usaha_kantor_pas]').val(data_pasangan.pekerjaan.alamat.alamat_singkat);
                                    $('#form_detail input[name=rt_kantor_usaha_pas]').val(data_pasangan.pekerjaan.alamat.rt);
                                    $('#form_detail input[name=rw_kantor_usaha_pas]').val(data_pasangan.pekerjaan.alamat.rw);

                                    get_provinsi()
                                        .done(function(res) {
                                            var select = [];
                                            var select1 = '<option value="">--Pilih--</option>';
                                            $.each(res.data, function(i, e) {
                                                var option = [
                                                    '<option id="' + e.id + 'prov_pek_pas" value="' + e.id + '">' + e.nama + '</option>'
                                                ].join('\n');
                                                select.push(option);
                                            });
                                            $('#form_detail select[name=provinsi_kantor_pasangan]').html(select1 + select);
                                            if (data_pasangan.pekerjaan.alamat.provinsi.id = '' + data_pasangan.pekerjaan.alamat.provinsi.id + '') {
                                                document.getElementById('' + data_pasangan.pekerjaan.alamat.provinsi.id + 'prov_pek_pas').selected = "true";
                                            }
                                        })

                                    if (data_pasangan.pekerjaan.alamat.kabupaten.id == null) {
                                        var select_kabupaten_kantor_pas = [];
                                        var option_kabupaten_kantor_pas = [
                                            '<option value=""></option>',
                                        ].join('\n');
                                        select_kabupaten_kantor_pas.push(option_kabupaten_kantor_pas);
                                        $('#form_detail select[name=kabupaten_kantor_pasangan]').html(select_kabupaten_kantor_pas);
                                    } else {
                                        var select_kabupaten_kantor_pas = [];
                                        var option_kabupaten_kantor_pas = [
                                            '<option value="' + data_pasangan.pekerjaan.alamat.kabupaten.id + '">' + data_pasangan.pekerjaan.alamat.kabupaten.nama + '</option>',
                                        ].join('\n');
                                        select_kabupaten_kantor_pas.push(option_kabupaten_kantor_pas);
                                        $('#form_detail select[name=kabupaten_kantor_pasangan]').html(select_kabupaten_kantor_pas);
                                    }

                                    if (data_pasangan.pekerjaan.alamat.kecamatan.id == null) {
                                        var select_kecamatan_kantor_pas = [];
                                        var option_kecamatan_kantor_pas = [
                                            '<option value=""></option>',
                                        ].join('\n');
                                        select_kecamatan_kantor_pas.push(option_kecamatan_kantor_pas);
                                        $('#form_detail select[name=kecamatan_kantor_pasangan]').html(select_kecamatan_kantor_pas);
                                    } else {
                                        var select_kecamatan_kantor_pas = [];
                                        var option_kecamatan_kantor_pas = [
                                            '<option value="' + data_pasangan.pekerjaan.alamat.kecamatan.id + '">' + data_pasangan.pekerjaan.alamat.kecamatan.nama + '</option>',
                                        ].join('\n');
                                        select_kecamatan_kantor_pas.push(option_kecamatan_kantor_pas);
                                        $('#form_detail select[name=kecamatan_kantor_pasangan]').html(select_kecamatan_kantor_pas);
                                    }

                                    if (data_pasangan.pekerjaan.alamat.kelurahan.id == null) {
                                        var select_kelurahan_kantor_pas = [];
                                        var option_kelurahan_kantor_pas = [
                                            '<option value=""></option>',
                                        ].join('\n');
                                        select_kelurahan_kantor_pas.push(option_kelurahan_kantor_pas);
                                        $('#form_detail select[name=kelurahan_kantor_pasangan]').html(select_kelurahan_kantor_pas);
                                    } else {
                                        var select_kelurahan_kantor_pas = [];
                                        var option_kelurahan_kantor_pas = [
                                            '<option value="' + data_pasangan.pekerjaan.alamat.kelurahan.id + '">' + data_pasangan.pekerjaan.alamat.kelurahan.nama + '</option>',
                                        ].join('\n');
                                        select_kelurahan_kantor_pas.push(option_kelurahan_kantor_pas);
                                        $('#form_detail select[name=kelurahan_kantor_pasangan]').html(select_kelurahan_kantor_pas);
                                    }

                                    $('#form_detail input[name=kode_pos_kantor_usaha_pas').val(data_pasangan.pekerjaan.alamat.kode_pos);

                                    if (data_pasangan.lampiran.lamp_ktp == null) {
                                        $('#ktp_pasangan').hide();
                                    } else {
                                        var i = [
                                            '<a class="example-image-link target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                                        ].join('\n');
                                        html8.push(i);
                                        $('#gambar_ktp_pasangan').html(html8);
                                    }


                                    if (data_pasangan.lampiran.lamp_buku_nikah == null) {
                                        $('#buku_nikah').hide();
                                    } else {
                                        var j = [
                                            '<a class="example-image-link target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                                        ].join('\n');
                                        html9.push(j);
                                        $('#gambar_buku_nikah').html(html9);
                                    }

                                })
                        }

                        load_pemeriksaan_agunan = function() {
                            get_data_pemeriksaan_agunan = function(opts, id_pemeriksaan_agunan) {
                                var url = '<?php echo config_item('api_url') ?>api/periksa/tanah/' + id_pemeriksaan_agunan;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }


                            get_data_pemeriksaan_agunan({}, id_pemeriksaan_agunan)
                                .done(function(response) {
                                    var data_pemeriksaan_agunan = response.data;
                                    //pemeriksaan agunan
                                    $('#form_detail input[name="nama_penghuni_agunan"]').val(data_pemeriksaan_agunan.nama_penghuni);
                                    var select_status_penghuni = [];
                                    var option_status_penghuni = [
                                        '<option value="' + data_pemeriksaan_agunan.status_penghuni + '">' + data_pemeriksaan_agunan.status_penghuni + '</option>',
                                        '<option value="SANGAT TERAWAT">SANGAT TERAWAT</option>',
                                        '<option value="PEMILIK">PEMILIK</option>',
                                        '<option value="PENYEWA">PENYEWA</option>',
                                        '<option value="TIDAK DIHUNI">TIDAK DIHUNI</option>'
                                    ].join('\n');
                                    select_status_penghuni.push(option_status_penghuni);
                                    $('#form_detail select[name="status_penghuni_agunan"]').html(select_status_penghuni);

                                    $('#form_detail input[name="bentuk_bangunan_agunan"]').val(data_pemeriksaan_agunan.bentuk_bangunan);

                                    var select_kondisi_agunan = [];
                                    var option_kondisi_agunan = [
                                        '<option value="' + data_pemeriksaan_agunan.kondisi_bangunan + '">' + data_pemeriksaan_agunan.kondisi_bangunan + '</option>',
                                        '<option value="SANGAT TERAWAT">SANGAT TERAWAT</option>',
                                        '<option value="CUKUP TERAWAT">CUKUP TERAWAT</option>',
                                        '<option value="KURANG TERAWAT">KURANG TERAWAT</option>',
                                        '<option value="TIDAK TERAWAT">TIDAK TERAWAT</option>'
                                    ].join('\n');
                                    select_kondisi_agunan.push(option_kondisi_agunan);
                                    $('#form_detail select[name="kondisi_bangunan_agunan"]').html(select_kondisi_agunan);


                                    $('#form_detail input[name="fasilitas_agunan"]').val(data_pemeriksaan_agunan.fasilitas);
                                    $('#form_detail input[name="listrik_agunan"]').val(data_pemeriksaan_agunan.listrik);
                                    $('#form_detail input[name="nilai_taksasi_agunan"]').val(data_pemeriksaan_agunan.nilai_taksasi_agunan);
                                    $('#form_detail input[name="nilai_taksasi_bangunan"]').val(data_pemeriksaan_agunan.nilai_taksasi_bangunan);
                                    $('#form_detail input[name="tgl_taksasi_agunan"]').val(data_pemeriksaan_agunan.tgl_taksasi);
                                    $('#form_detail input[name="nilai_likuidasi_agunan"]').val(data_pemeriksaan_agunan.nilai_likuidasi);
                                    $('#form_detail input[name="nilai_agunan_independen"]').val(data_pemeriksaan_agunan.nilai_agunan_independen);
                                    $('#form_detail input[name="perusahaan_penilai_independen"]').val(data_pemeriksaan_agunan.perusahaan_penilai_independen);
                                })
                        }

                        load_kapasitas_bulanan = function() {
                            get_data_kapasitas_bulanan = function(opts, id_kapasitas_bulanan) {
                                var url = '<?php echo config_item('api_url') ?>api/kap_bul/' + id_kapasitas_bulanan;
                                var data = opts;

                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }
                            get_data_kapasitas_bulanan({}, id_kapasitas_bulanan)
                                .done(function(response) {
                                    var data_kapasitas_bulanan = response.data;
                                    //pemeriksaan agunan
                                    var pemasukan_debitur = (rubah(data_kapasitas_bulanan.pemasukan.debitur));
                                    $('#form_detail input[name=pemasukan_debitur]').val(pemasukan_debitur);

                                    var pemasukan_pasangan = (rubah(data_kapasitas_bulanan.pemasukan.pasangan));
                                    $('#form_detail input[name=pemasukan_pasangan]').val(pemasukan_pasangan);

                                    var pemasukan_penjamin = (rubah(data_kapasitas_bulanan.pemasukan.penjamin));
                                    $('#form_detail input[name=pemasukan_penjamin]').val(pemasukan_penjamin);

                                    var total_pemasukan = (rubah(data_kapasitas_bulanan.pemasukan.total));
                                    $('#form_detail input[name=total_pemasukan]').val(total_pemasukan);

                                    var biaya_rumah_tangga = (rubah(data_kapasitas_bulanan.pengeluaran.rumah_tangga));
                                    $('#form_detail input[name=biaya_rumah_tangga]').val(biaya_rumah_tangga);

                                    var biaya_transport = (rubah(data_kapasitas_bulanan.pengeluaran.transport));
                                    $('#form_detail input[name=biaya_transport]').val(biaya_transport);

                                    var biaya_pendidikan = (rubah(data_kapasitas_bulanan.pengeluaran.pendidikan));
                                    $('#form_detail input[name=biaya_pendidikan]').val(biaya_pendidikan);

                                    var biaya_telp_listr_air = (rubah(data_kapasitas_bulanan.pengeluaran.telp_list_air));
                                    $('#form_detail input[name=biaya_telp_listr_air]').val(biaya_telp_listr_air);

                                    var angsuran_lain_lain = (rubah(data_kapasitas_bulanan.pengeluaran.lain_lain));
                                    $('#form_detail input[name=biaya_lain]').val(angsuran_lain_lain);

                                    var total_pengeluaran1 = (rubah(data_kapasitas_bulanan.pengeluaran.total));
                                    $('#form_detail input[name=total_pengeluaran]').val(total_pengeluaran1);


                                    var pendapatan_bersih = (rubah(data_kapasitas_bulanan.penghasilan_bersih));
                                    $('#form_detail input[name=pendapatan_bersih]').val(pendapatan_bersih);

                                    $('#form_detail input[name="pendapatan_bersih"]').val(data_kapasitas_bulanan.penghasilan_bersih);
                                })
                        }

                        load_pendapatan_usaha = function() {
                            get_pendapatan_usaha = function(opts, id_pendapatan_usaha) {
                                var url = '<?php echo config_item('api_url') ?>api/usaha_cadebt/' + id_pendapatan_usaha;
                                var data = opts;
                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }


                            get_pendapatan_usaha({}, id_pendapatan_usaha)
                                .done(function(response) {
                                    var data_pendapatan_usaha = response.data;
                                    //pendapatan
                                    var pemasukan_tunai = (rubah(data_pendapatan_usaha.pendapatan.tunai));
                                    $('#form_detail input[name=pemasukan_tunai]').val(pemasukan_tunai);

                                    var pemasukan_kredit = (rubah(data_pendapatan_usaha.pendapatan.kredit));
                                    $('#form_detail input[name=pemasukan_kredit]').val(pemasukan_kredit);

                                    var total_pendapatan = (rubah(data_pendapatan_usaha.pendapatan.total));
                                    $('#form_detail input[name=pendapatan_usaha]').val(total_pendapatan);

                                    //pengeluaran
                                    var biaya_sewa = (rubah(data_pendapatan_usaha.pengeluaran.biaya_sewa));
                                    $('#form_detail input[name=biaya_sewa]').val(biaya_sewa);

                                    var biaya_gaji_pegawai = (rubah(data_pendapatan_usaha.pengeluaran.biaya_gaji_pegawai));
                                    $('#form_detail input[name=biaya_gaji_pegawai]').val(biaya_gaji_pegawai);

                                    var tlp_listrik_air = (rubah(data_pendapatan_usaha.pengeluaran.biaya_telp_listr_air));
                                    $('#form_detail input[name=tlp_listrik_air]').val(tlp_listrik_air);

                                    var biaya_belanja_brg = (rubah(data_pendapatan_usaha.pengeluaran.biaya_belanja_brg));
                                    $('#form_detail input[name=biaya_belanja_brg]').val(biaya_belanja_brg);

                                    var biaya_sampah_keamanan = (rubah(data_pendapatan_usaha.pengeluaran.biaya_sampah_kemanan));
                                    $('#form_detail input[name=biaya_sampah_keamanan]').val(biaya_sampah_keamanan);

                                    var biaya_kirim_barang = (rubah(data_pendapatan_usaha.pengeluaran.biaya_kirim_barang));
                                    $('#form_detail input[name=biaya_kirim_barang]').val(biaya_kirim_barang);

                                    var biaya_hutang_dagang = (rubah(data_pendapatan_usaha.pengeluaran.biaya_hutang_dagang));
                                    $('#form_detail input[name=biaya_hutang_dagang]').val(biaya_hutang_dagang);

                                    var biaya_angsuran = (rubah(data_pendapatan_usaha.pengeluaran.angsuran));
                                    $('#form_detail input[name=biaya_angsuran]').val(biaya_angsuran);

                                    var biaya_lain_lain = (rubah(data_pendapatan_usaha.pengeluaran.lain_lain));
                                    $('#form_detail input[name=biaya_lain_lain]').val(biaya_lain_lain);

                                    var total_pengeluaran_usaha = (rubah(data_pendapatan_usaha.pengeluaran.total));
                                    $('#form_detail input[name=pengeluaran_usaha]').val(total_pengeluaran_usaha);

                                    var keuntungan_usaha = (rubah(data_pendapatan_usaha.penghasilan_bersih));
                                    $('#form_detail input[name=keuntungan_usaha]').val(keuntungan_usaha);

                                })
                        }
                        load_ideb_pefindo = function() {
                            get_das = function(opts, id_das) {
                                var url = '<?php echo config_item('api_url') ?>api/master/das/' + id_das;
                                var data = opts;
                                return $.ajax({
                                    type: 'GET',
                                    url: url,
                                    data: data,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    }
                                });
                            }
                            get_das({}, id_das)
                                .done(function(response) {
                                    var data_das = response.data;
                                    $.each(data_das.lampiran.ideb, function(item) {
                                        var a = [
                                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data_das.lampiran.ideb[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data_das.lampiran.ideb[item] + '</p></a>',
                                        ].join('\n');
                                        htmlideb.push(a);
                                    });
                                    $('#dataideb').html(htmlideb);

                                    $.each(data_das.lampiran.pefindo, function(item) {
                                        var b = [
                                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data_das.lampiran.pefindo[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data_das.lampiran.pefindo[item] + '</p></a>',
                                        ].join('\n');
                                        htmlpefindo.push(b);
                                    });
                                    $('#datapefindo').html(htmlpefindo);
                                })
                        }
                        load_fasilitas();
                        load_debitur();
                        if (data.data_pasangan.id == null) {
                            $('#form_data_pasangan').hide();
                            $('#form_ktp_pasangan').hide();
                            $('#form_buku_nikah').hide();
                        } else {
                            load_pasangan();
                        }
                        load_pemeriksaan_agunan();
                        load_kapasitas_bulanan();
                        load_pendapatan_usaha();
                        load_ideb_pefindo();

                    })
                    .fail(function(jqXHR) {
                        $('#modal_data_credit').modal('toggle');
                        // $('#modal_data_credit').modal('close');
                        bootbox.alert('Data tidak ditemukan, coba refresh kembali!!', function() {
                            $('.close').on('click');
                        });

                    });
                get_detail_ca({}, id)
                    .done(function(response) {
                        var data = response.data;
                        console.log(data);
                        $('#submit_ca').hide();

                        //INFORMASI & ANALISA CREDIT CHECKING
                        var htmlinformasi_analisa_credit = [];
                        var htmlinformasi_analisa_credit_tot = [];
                        $.each(data.informasi_analisa_cc.table, function(index, item) {
                            var plafon = (rubah(item.plafon));
                            var baki_debet = (rubah(item.baki_debet));
                            var angsuran = (rubah(item.angsuran));
                            var tr = [
                                '<tr>',
                                '<td style="width:50px"><button type="button" class="btn btn-info btn-sm edit" data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '<td width="250">' + item.nama_bank + '</td>',
                                '<td width="200">' + plafon + '</td>',
                                '<td width="200">' + baki_debet + '</td>',
                                '<td width="200">' + angsuran + '</td>',
                                '<td width="30">' + item.collectabilitas + '</td>',
                                '<td width="150">' + item.jenis_kredit + '</td>',
                                '</tr>',
                            ].join('\n');
                            htmlinformasi_analisa_credit.push(tr);
                        })
                        var total_plafon = (rubah(data.informasi_analisa_cc.total_plafon));
                        var total_baki_debet = (rubah(data.informasi_analisa_cc.total_baki_debet));
                        var total_angsuran = (rubah(data.informasi_analisa_cc.angsuran));
                        var tr = [
                            '<tr style="font-size:15px">',
                            '<td>-</td>',
                            '<td>-</td>',
                            '<td>' + total_plafon + '</td>',
                            '<td>' + total_baki_debet + '</td>',
                            '<td>' + total_angsuran + '</td>',
                            '<td>' + data.informasi_analisa_cc.collectabitas_tertinggi + '</td>',
                            '<td>-</td>',
                            '</tr>',
                        ].join('\n');
                        htmlinformasi_analisa_credit_tot.push(tr);
                        $('#data_informasi_analisa_credit').html(htmlinformasi_analisa_credit);
                        $('#data_informasi_analisa_credit_tot').html(htmlinformasi_analisa_credit_tot);
                        //===========================================================================

                        //KAPASTAS BULANAN
                        $('#detail_ca input[id=id_kapasitas_bulanan_ca]').val(data.kapasitas_bulanan.id);

                        var pemasukan_debitur_ca = (rubah(data.kapasitas_bulanan.pemasukan_cadebt));
                        $('#detail_ca input[name=pemasukan_debitur_ca_detail]').val(pemasukan_debitur_ca);

                        var pemasukan_pasangan_ca = (rubah(data.kapasitas_bulanan.pemasukan_pasangan));
                        $('#detail_ca input[name=pemasukan_pasangan_ca_detail]').val(pemasukan_pasangan_ca);

                        var pemasukan_penjamin_ca = (rubah(data.kapasitas_bulanan.pemasukan_penjamin));
                        $('#detail_ca input[name=pemasukan_penjamin_ca_detail]').val(pemasukan_penjamin_ca);

                        var total_pemasukan_ca = (rubah(data.kapasitas_bulanan.total_pemasukan));
                        $('#detail_ca input[name=total_pemasukan_ca_detail]').val(total_pemasukan_ca);

                        var biaya_rumah_tangga_ca = (rubah(data.kapasitas_bulanan.biaya_rumah_tangga));
                        $('#detail_ca input[name=biaya_rumah_tangga_ca_detail]').val(biaya_rumah_tangga_ca);

                        var biaya_transportasi_ca = (rubah(data.kapasitas_bulanan.biaya_transport));
                        $('#detail_ca input[name=biaya_transportasi_ca_detail]').val(biaya_transportasi_ca);

                        var biaya_pendidikan_ca = (rubah(data.kapasitas_bulanan.biaya_pendidikan));
                        $('#detail_ca input[name=biaya_pendidikan_ca_detail]').val(biaya_pendidikan_ca);

                        var biaya_telp_listr_air_ca = (rubah(data.kapasitas_bulanan.telp_listr_air));
                        $('#detail_ca input[name=biaya_telp_listr_air_ca_detail]').val(biaya_telp_listr_air_ca);

                        var angsuran_lain_ca = (rubah(data.kapasitas_bulanan.angsuran));
                        $('#detail_ca input[name=angsuran_lain_ca_detail]').val(angsuran_lain_ca);

                        var biaya_lain_ca = (rubah(data.kapasitas_bulanan.biaya_lain));
                        $('#detail_ca input[name=biaya_lain_ca_detail]').val(biaya_lain_ca);

                        var total_pengeluaran_ca = (rubah(data.kapasitas_bulanan.total_pengeluaran));
                        $('#detail_ca input[name=total_pengeluaran_ca_detail]').val(total_pengeluaran_ca);
                        //==============================================================

                        // PENDAPATAN USAHA
                        $('#detail_ca input[name=id_pendapatan_usaha_ca]').val(data.pendapatan_usaha.id);

                        var pemasukan_tunai_ca = (rubah(data.pendapatan_usaha.pemasukan_tunai));
                        $('#detail_ca input[name=pemasukan_tunai_ca_detail]').val(pemasukan_tunai_ca);

                        var pemasukan_kredit_ca = (rubah(data.pendapatan_usaha.pemasukan_kredit));
                        $('#detail_ca input[name=pemasukan_kredit_ca_detail]').val(pemasukan_kredit_ca);

                        var biaya_sewa_ca = (rubah(data.pendapatan_usaha.biaya_sewa));
                        $('#detail_ca input[name=biaya_sewa_ca_detail]').val(biaya_sewa_ca);

                        var biaya_gaji_pegawai_ca = (rubah(data.pendapatan_usaha.biaya_gaji_pegawai));
                        $('#detail_ca input[name=biaya_gaji_pegawai_ca_detail]').val(biaya_gaji_pegawai_ca);

                        var biaya_belanja_brg_ca = (rubah(data.pendapatan_usaha.biaya_belanja_brg));
                        $('#detail_ca input[name=biaya_belanja_brg_ca_detail]').val(biaya_belanja_brg_ca);

                        var biaya_telp_listr_air = (rubah(data.pendapatan_usaha.biaya_telp_listr_air));
                        $('#detail_ca input[name=biaya_telp_listr_air_usaha_ca_detail]').val(biaya_telp_listr_air);

                        var biaya_sampah_kemanan = (rubah(data.pendapatan_usaha.biaya_sampah_kemanan));
                        $('#detail_ca input[name=biaya_sampah_keamanan_ca_detail]').val(biaya_sampah_kemanan);

                        var biaya_kirim_barang_ca = (rubah(data.pendapatan_usaha.biaya_kirim_barang));
                        $('#detail_ca input[name=biaya_kirim_barang_ca_detail]').val(biaya_kirim_barang_ca);

                        var biaya_hutang_dagang = (rubah(data.pendapatan_usaha.biaya_hutang_dagang));
                        $('#detail_ca input[name=biaya_hutang_dagang_ca_detail]').val(biaya_hutang_dagang);

                        var biaya_angsuran_ca = (rubah(data.pendapatan_usaha.biaya_angsuran));
                        $('#detail_ca input[name=biaya_angsuran_ca_detail]').val(biaya_angsuran_ca);

                        var biaya_lain_lain_ca = (rubah(data.pendapatan_usaha.biaya_lain_lain));
                        $('#detail_ca input[name=biaya_lain_lain_ca_detail]').val(biaya_lain_lain_ca);

                        var pendapatan_usaha_ca = (rubah(data.pendapatan_usaha.total_pemasukan));
                        $('#detail_ca input[name=pendapatan_usaha_ca_detail]').val(pendapatan_usaha_ca);

                        var pengeluaran_usaha_ca = (rubah(data.pendapatan_usaha.total_pengeluaran));
                        $('#detail_ca input[name=pengeluaran_usaha_ca_detail]').val(pengeluaran_usaha_ca);

                        var keuntungan_usaha_ca = (rubah(data.pendapatan_usaha.laba_usaha));
                        $('#detail_ca input[name=keuntungan_usaha_ca_detail]').val(keuntungan_usaha_ca);
                        // =========================================================================



                        //DATA KEUANGAN
                        $('#detail_ca input[name=id_data_keuangan]').val(data.data_keuangan.id);
                        $('#detail_ca input[name=no_rekening_ca]').val(data.data_keuangan.no_rekening);

                        var penghasilan_per_tahun = (rubah(data.data_keuangan.penghasilan_per_tahun));
                        $('#detail_ca input[name=penghasilan_per_tahun_ca]').val(penghasilan_per_tahun);

                        if (data.data_keuangan.sumber_penghasilan == "1") {
                            document.getElementById("sumber_penghasilan1").selected = "true";
                        } else
                        if (data.data_keuangan.sumber_penghasilan == "2") {
                            document.getElementById("sumber_penghasilan2").selected = "true";
                        } else
                        if (data.data_keuangan.sumber_penghasilan == "3") {
                            document.getElementById("sumber_penghasilan3").selected = "true";
                        }

                        if (data.data_keuangan.pemasukan_per_bulan == "1") {
                            document.getElementById("pemasukan_perbulan1").selected = "true";
                        } else
                        if (data.data_keuangan.pemasukan_per_bulan == "2") {
                            document.getElementById("pemasukan_perbulan2").selected = "true";
                        } else
                        if (data.data_keuangan.pemasukan_per_bulan == "3") {
                            document.getElementById("pemasukan_perbulan3").selected = "true";
                        } else
                        if (data.data_keuangan.pemasukan_per_bulan == "4") {
                            document.getElementById("pemasukan_perbulan4").selected = "true";
                        } else
                        if (data.data_keuangan.pemasukan_per_bulan == "5") {
                            document.getElementById("pemasukan_perbulan5").selected = "true";
                        }

                        if (data.data_keuangan.frek_trans_pemasukan == "1") {
                            document.getElementById("frek_pemasukan_perbulan1").selected = "true";
                        } else
                        if (data.data_keuangan.frek_trans_pemasukan == "2") {
                            document.getElementById("frek_pemasukan_perbulan2").selected = "true";
                        } else
                        if (data.data_keuangan.frek_trans_pemasukan == "3") {
                            document.getElementById("frek_pemasukan_perbulan3").selected = "true";
                        }

                        if (data.data_keuangan.pengeluaran_per_bulan == "1") {
                            document.getElementById("pengeluaran_perbulan1").selected = "true";
                        } else
                        if (data.data_keuangan.pengeluaran_per_bulan == "2") {
                            document.getElementById("pengeluaran_perbulan2").selected = "true";
                        } else
                        if (data.data_keuangan.pengeluaran_per_bulan == "3") {
                            document.getElementById("pengeluaran_perbulan3").selected = "true";
                        } else
                        if (data.data_keuangan.pengeluaran_per_bulan == "4") {
                            document.getElementById("pengeluaran_perbulan4").selected = "true";
                        } else
                        if (data.data_keuangan.pengeluaran_per_bulan == "5") {
                            document.getElementById("pengeluaran_perbulan5").selected = "true";
                        }

                        if (data.data_keuangan.frek_trans_pengeluaran == "1") {
                            document.getElementById("frek_pengeluaran1").selected = "true";
                        } else
                        if (data.data_keuangan.frek_trans_pengeluaran == "2") {
                            document.getElementById("frek_pengeluaran2").selected = "true";
                        } else
                        if (data.data_keuangan.frek_trans_pengeluaran == "3") {
                            document.getElementById("frek_pengeluaran3").selected = "true";
                        } else
                        if (data.data_keuangan.frek_trans_pengeluaran == "4") {
                            document.getElementById("frek_pengeluaran4").selected = "true";
                        }

                        if (data.data_keuangan.sumber_dana_setoran == "1") {
                            document.getElementById("sumber_dana_setoran1").selected = "true";
                        } else
                        if (data.data_keuangan.sumber_dana_setoran == "2") {
                            document.getElementById("sumber_dana_setoran2").selected = "true";
                        } else
                        if (data.data_keuangan.sumber_dana_setoran == "3") {
                            document.getElementById("sumber_dana_setoran3").selected = "true";
                        }

                        if (data.data_keuangan.tujuan_pengeluaran_dana == "KONSUMTIF") {
                            document.getElementById("konsumtif_detail").selected = "true";
                        } else
                        if (data.data_keuangan.tujuan_pengeluaran_dana == "MODAL KERJA") {
                            document.getElementById("modal_kerja_detail").selected = "true";
                        } else
                        if (data.data_keuangan.tujuan_pengeluaran_dana == "INVESTASI") {
                            document.getElementById("investasi_detail").selected = "true";
                        }
                        //=========================================================================
                        //PENYIMPANGAN
                        $('#detail_ca input[name=id_data_penyimpangan]').val(data.rekomendasi_pinjaman.id);
                        $('#detail_ca textarea[name=penyimpangan_struktur_detail]').val(data.rekomendasi_pinjaman.penyimpangan_struktur);
                        //=========================================================================
                        //REKOMENDASI PINJAMAN
                        $('#detail_ca input[name=id_data_rekomendasi_pinjaman]').val(data.rekomendasi_pinjaman.id);

                        var recom_nilai_pinjaman = (rubah(data.rekomendasi_pinjaman.recom_nilai_pinjaman));
                        $('#detail_ca input[name=recom_nilai_pinjaman_detail]').val(recom_nilai_pinjaman);

                        var select_recomtenor = [];
                        var option_recomtenor = [
                            '<option id="recomtenor12_ca" value="12">12</option>',
                            '<option id="recomtenor18_ca" value="18">18</option>',
                            '<option id="recomtenor24_ca" value="24">24</option>',
                            '<option id="recomtenor30_ca" value="30">30</option>',
                            '<option id="recomtenor36_ca" value="36">36</option>',
                            '<option id="recomtenor48_ca" value="48">48</option>',
                            '<option id="recomtenor60_ca" value="60">60</option>'
                        ].join('\n');
                        select_recomtenor.push(option_recomtenor);
                        $('#detail_ca  select[id=recom_tenor_detail]').html(select_recomtenor);

                        if (data.rekomendasi_pinjaman.recom_tenor == "12") {
                            document.getElementById("recomtenor12_ca").selected = "true";
                        } else
                        if (data.rekomendasi_pinjaman.recom_tenor == "18") {
                            document.getElementById("recomtenor18_ca").selected = "true";
                        } else
                        if (data.rekomendasi_pinjaman.recom_tenor == "24") {
                            document.getElementById("recomtenor24_ca").selected = "true";
                        } else
                        if (data.rekomendasi_pinjaman.recom_tenor == "30") {
                            document.getElementById("recomtenor30_ca").selected = "true";
                        } else
                        if (data.rekomendasi_pinjaman.recom_tenor == "36") {
                            document.getElementById("recomtenor36_ca").selected = "true";
                        } else
                        if (data.rekomendasi_pinjaman.recom_tenor == "48") {
                            document.getElementById("recomtenor48_ca").selected = "true";
                        }
                        if (data.rekomendasi_pinjaman.recom_tenor == "60") {
                            document.getElementById("recomtenor60_ca").selected = "true";
                        }

                        var recom_angsuran = (rubah(data.rekomendasi_pinjaman.recom_angsuran));
                        $('#detail_ca input[name=recom_angsuran_detail]').val(recom_angsuran);

                        get_produk()
                            .done(function(res) {
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.nama_produk + 'recom_produk" value="' + e.nama_produk + '">' + e.nama_produk + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#detail_ca select[id=recom_produk_kredit_detail]').html(select);

                                if (data.rekomendasi_pinjaman.recom_produk_kredit == '' + data.rekomendasi_pinjaman.recom_produk_kredit + '') {
                                    document.getElementById('' + data.rekomendasi_pinjaman.recom_produk_kredit + 'recom_produk').selected = "true";
                                }
                            })

                        $('#detail_ca input[name=recom_bunga_pinjaman_detail]').val(data.rekomendasi_pinjaman.bunga_pinjaman);

                        $('#detail_ca textarea[name=note_recom_detail]').val(data.rekomendasi_pinjaman.note_recom);
                        //==================================================================       

                        //RINGKASAN ANALISA KUALITATIF
                        console.log(data.ringkasan_analisa.id)
                        $('#detail_ca input[name=id_data_kualitatif]').val(data.ringkasan_analisa.id);
                        $('#detail_ca textarea[name=kualitatif_analisa_detail]').val(data.ringkasan_analisa.kualitatif_analisa);
                        $('#detail_ca textarea[name=kualitatif_strenght_detail]').val(data.ringkasan_analisa.kualitatif_strenght);
                        $('#detail_ca textarea[name=kualitatif_weakness_detail]').val(data.ringkasan_analisa.kualitatif_weakness);
                        $('#detail_ca textarea[name=kualitatif_opportunity_detail]').val(data.ringkasan_analisa.kualitatif_opportunity);
                        $('#detail_ca textarea[name=kualitatif_threatness_detail]').val(data.ringkasan_analisa.kualitatif_threatness);
                        //=========================================================================



                        //ANALISA KUANTITATIF     
                        console.log(data.ringkasan_analisa.id);
                        $('#detail_ca input[name=id_data_kuantitatif]').val(data.ringkasan_analisa.id)

                        var kuantitatif_ttl_pendapatan = (rubah(data.ringkasan_analisa.kuantitatif_ttl_pendapatan));
                        $('#detail_ca input[name=kuantitatif_ttl_pendapatan_detail]').val(kuantitatif_ttl_pendapatan);

                        var kuantitatif_ttl_pengeluaran = (rubah(data.ringkasan_analisa.kuantitatif_ttl_pengeluaran));
                        $('#detail_ca input[name=kuantitatif_ttl_pengeluaran_detail]').val(kuantitatif_ttl_pengeluaran);

                        var kuantitatif_pendapatan = (rubah(data.ringkasan_analisa.kuantitatif_pendapatan_bersih));
                        $('#detail_ca input[name=kuantitatif_pendapatan_detail]').val(kuantitatif_pendapatan);

                        var kuantitatif_angsuran = (rubah(data.ringkasan_analisa.kuantitatif_angsuran));
                        $('#detail_ca input[name=kuantitatif_angsuran_detail]').val(kuantitatif_angsuran);

                        $('#detail_ca input[name=kuantitatif_ltv_detail]').val(data.ringkasan_analisa.kuantitatif_ltv);
                        $('#detail_ca input[name=kuantitatif_dsr_detail]').val(data.ringkasan_analisa.kuantitatif_dsr);
                        $('#detail_ca input[name=kuantitatif_idir_detail]').val(data.ringkasan_analisa.kuantitatif_idir);
                        $('#detail_ca input[name=kuantitatif_idir_detail]').val(data.ringkasan_analisa.kuantitatif_idir);
                        $('#detail_ca input[name=kuantitatif_hasil_detail]').val(data.ringkasan_analisa.kuantitatif_hasil);
                        //==================================================================

                        //STRUKTUR PINJAMAN
                        $('#detail_ca input[name=id_struktur_pinjaman]').val(data.id_trans_so);
                        get_produk()
                            .done(function(res) {
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.nama_produk + 'produk_detail" value="' + e.nama_produk + '">' + e.nama_produk + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#detail_ca select[id=produk_struktur]').html(select);
                                if (data.rekomendasi_ca.produk == '' + data.rekomendasi_ca.produk + '') {
                                    document.getElementById('' + data.rekomendasi_ca.produk + 'produk_detail').selected = "true";
                                }
                            })

                        var plafon_kredit = (rubah(data.rekomendasi_ca.plafon_kredit));
                        $('#detail_ca input[name=plafon_kredit_struktur]').val(plafon_kredit);

                        var select_strukturtenor = [];
                        var option_strukturtenor = [
                            '<option id="tenor12_struktur" value="12">12</option>',
                            '<option id="tenor18_struktur" value="18">18</option>',
                            '<option id="tenor24_struktur" value="24">24</option>',
                            '<option id="tenor30_struktur" value="30">30</option>',
                            '<option id="tenor36_struktur" value="36">36</option>',
                            '<option id="tenor48_struktur" value="48">48</option>',
                            '<option id="tenor60_struktur" value="60">60</option>'
                        ].join('\n');
                        select_strukturtenor.push(option_strukturtenor);
                        $('#detail_ca  select[id=jangka_waktu_struktur]').html(select_strukturtenor);

                        if (data.rekomendasi_ca.jangka_waktu == "12") {
                            document.getElementById("tenor12_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.jangka_waktu == "18") {
                            document.getElementById("tenor18_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.jangka_waktu == "24") {
                            document.getElementById("tenor24_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.jangka_waktu == "30") {
                            document.getElementById("tenor30_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.jangka_waktu == "36") {
                            document.getElementById("tenor36_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.jangka_waktu == "48") {
                            document.getElementById("tenor48_struktur").selected = "true";
                        }
                        if (data.rekomendasi_ca.jangka_waktu == "60") {
                            document.getElementById("tenor60_struktur").selected = "true";
                        }

                        $('#detail_ca input[name=suku_bunga_struktur]').val(data.rekomendasi_ca.suku_bunga);

                        var pembayaran_bunga = (rubah(data.rekomendasi_ca.pembayaran_bunga));
                        $('#detail_ca input[name=pembayaran_bunga_struktur]').val(pembayaran_bunga);

                        var select_akad_kredit = [];
                        var option_akad_kredit = [
                            '<option value="">--Pilih--</option>',
                            '<option id="adendum_struktur" value="ADENDUM">ADENDUM</option>',
                            '<option id="notaris_struktur" value="NOTARIS">NOTARIS</option>',
                            '<option id="internal_struktur" value="INTERNAL">INTERNAL</option>'
                        ].join('\n');
                        select_akad_kredit.push(option_akad_kredit);
                        $('#detail_ca  select[id=akad_kredit_struktur]').html(select_akad_kredit);

                        if (data.rekomendasi_ca.akad_kredit == "ADENDUM") {
                            document.getElementById("adendum_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.akad_kredit == "NOTARIS") {
                            document.getElementById("notaris_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.akad_kredit = "INTERNAL") {
                            document.getElementById("internal_struktur").selected = "true";
                        }

                        var select_ikatan_agunan = [];
                        var option_ikatan_agunan = [
                            '<option value="">--Pilih--</option>',
                            '<option id="apht_struktur" value="APHT">APHT</option>',
                            '<option id="skmht_struktur" value="SKMHT">SKMHT</option>',
                            '<option id="fidusia_struktur" value="FIDUSIA">FIDUSIA</option>'
                        ].join('\n');
                        select_ikatan_agunan.push(option_ikatan_agunan);
                        $('#detail_ca  select[id=ikatan_agunan_struktur]').html(select_ikatan_agunan);

                        if (data.rekomendasi_ca.ikatan_agunan == "APHT") {
                            document.getElementById("apht_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.ikatan_agunan == "SKMHT") {
                            document.getElementById("skmht_struktur").selected = "true";
                        } else
                        if (data.rekomendasi_ca.ikatan_agunan = "FIDUSIA") {
                            document.getElementById("fidusia_struktur").selected = "true";
                        }

                        var biaya_provisi = (rubah(data.rekomendasi_ca.biaya_provisi));
                        $('#detail_ca input[name=biaya_provisi_struktur]').val(biaya_provisi);

                        var biaya_administrasi = (rubah(data.rekomendasi_ca.biaya_administrasi));
                        $('#detail_ca input[name=biaya_administrasi_struktur]').val(biaya_administrasi);

                        var biaya_credit_checking = (rubah(data.rekomendasi_ca.biaya_credit_checking));
                        $('#detail_ca input[name=biaya_credit_checking_struktur]').val(biaya_credit_checking);

                        var notaris = (rubah(data.rekomendasi_ca.notaris));
                        $('#detail_ca input[name=notaris_struktur]').val(notaris);

                        var biaya_tabungan = (rubah(data.rekomendasi_ca.biaya_tabungan));
                        $('#detail_ca input[name=biaya_tabungan_struktur]').val(biaya_tabungan);

                        //ASURANSI JIWA
                        get_nama_asuransi = function(opts) {
                            var url = '<?php echo $this->config->item('api_url'); ?>namaAsuransi';
                            return $.ajax({
                                type: 'GET',
                                url: url,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                }
                            });
                        }

                        get_nama_asuransi()
                            .done(function(res) {
                                var select1 = '<option value="">--Pilih--</option>'
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.kode_asuransi + '1" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#detail_ca select[id=nama_asuransi_jiwa_struktur]').html(select1 + select);
                                if (data.asuransi_jiwa.nama_asuransi == '' + data.asuransi_jiwa.nama_asuransi + '') {
                                    document.getElementById('' + data.asuransi_jiwa.nama_asuransi + '1').selected = "true";
                                }
                            })

                        $('#detail_ca input[name=nama_asuransi_jiwa_struktur]').val(data.asuransi_jiwa.nama_asuransi);
                        $('#detail_ca input[name=jangka_waktu_as_jiwa_struktur]').val(data.asuransi_jiwa.jangka_waktu);

                        var nilai_pertanggungan_as_jiwa = (rubah(data.asuransi_jiwa.nilai_pertanggungan));
                        $('#detail_ca input[name=nilai_pertanggungan_as_jiwa_struktur]').val(nilai_pertanggungan_as_jiwa);

                        var premi_asuransi_jiwa_sturktur = (rubah(data.rekomendasi_ca.biaya_asuransi_jiwa));
                        $('#detail_ca input[name=premi_asuransi_jiwa_sturktur]').val(premi_asuransi_jiwa_sturktur);

                        $('#detail_ca input[name=jatuh_tempo_as_jiwa_struktur]').val(data.asuransi_jiwa.jatuh_tempo);
                        $('#detail_ca input[name=umur_nasabah_as_jiwa_struktur]').val(data.asuransi_jiwa.umur_nasabah);
                        $('#detail_ca input[name=berat_badan_as_jiwa_struktur]').val(data.asuransi_jiwa.berat_badan);
                        $('#detail_ca input[name=tinggi_badan_as_jiwa_struktur]').val(data.asuransi_jiwa.tinggi_badan);

                        //ASURANSI KEBAKARAN


                        get_nama_asuransi()
                            .done(function(res) {
                                var select1 = '<option value="">--Pilih--</option>'
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.kode_asuransi + '2" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#detail_ca select[id=nama_asuransi_kebakaran_struktur]').html(select1 + select);
                                if (data.asuransi_jaminan_kebakaran[0].nama_asuransi == '' + data.asuransi_jaminan_kebakaran[0].nama_asuransi + '') {
                                    document.getElementById('' + data.asuransi_jaminan_kebakaran[0].nama_asuransi + '2').selected = "true";
                                }
                            })

                        $('#detail_ca input[name=jangka_waktu_as_kebakaran_struktur]').val(data.asuransi_jaminan_kebakaran[0].jangka_waktu);

                        var nilai_pertanggungan_as_kebakaran = (rubah(data.asuransi_jaminan_kebakaran[0].nilai_pertanggungan));
                        $('#detail_ca input[name=nilai_pertanggungan_as_kebakaran_struktur]').val(nilai_pertanggungan_as_kebakaran);

                        var premi_asuransi_kebakaran_sturktur = (rubah(data.rekomendasi_ca.biaya_asuransi_jaminan_kebakaran));
                        $('#detail_ca input[name=premi_asuransi_kebakaran_sturktur]').val(premi_asuransi_kebakaran_sturktur);

                        $('#detail_ca input[name=f]').val(data.asuransi_jaminan_kebakaran[0].jatuh_tempo);

                        //ASURANSI KENDARAAN
                        get_nama_asuransi()
                            .done(function(res) {
                                var select1 = '<option value="">--Pilih--</option>'
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.kode_asuransi + '3" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#detail_ca select[id=nama_asuransi_kendaraan_struktur]').html(select1 + select);
                                if (data.asuransi_jaminan_kendaraan[0].nama_asuransi == '' + data.asuransi_jaminan_kendaraan[0].nama_asuransi + '') {
                                    document.getElementById('' + data.asuransi_jaminan_kendaraan[0].nama_asuransi + '3').selected = "true";
                                }
                            })
                        $('#detail_ca input[name=nama_asuransi_kendaraan_struktur]').val(data.asuransi_jaminan_kendaraan[0].nama_asuransi);
                        $('#detail_ca input[name=jangka_waktu_as_kendaraan_struktur]').val(data.asuransi_jaminan_kendaraan[0].jangka_waktu);

                        var nilai_pertanggungan_as_kendaraan = (rubah(data.asuransi_jaminan_kendaraan[0].nilai_pertanggungan));
                        $('#detail_ca input[name=nilai_pertanggungan_as_kendaraan_struktur]').val(nilai_pertanggungan_as_kendaraan);

                        var premi_asuransi_kendaraan_sturktur = (rubah(data.rekomendasi_ca.biaya_asuransi_jaminan_kendaraan));
                        $('#detail_ca input[name=premi_asuransi_kendaraan_sturktur]').val(premi_asuransi_kendaraan_sturktur);

                        $('#detail_ca input[name=jatuh_tempo_as_kendaraan_struktur]').val(data.asuransi_jaminan_kendaraan[0].jatuh_tempo);

                        //MUTASI BANK
                        //BANK 1

                        $('#detail_ca input[name=id_mutasi_bank1]').val(data.mutasi_bank[0].id);
                        $('#detail_ca input[id=nama_bank_mutasi_ca_1]').val(data.mutasi_bank[0].nama_bank);
                        $('#detail_ca input[id=no_rekening_mutasi_ca_1]').val(data.mutasi_bank[0].no_rekening);
                        $('#detail_ca input[id=nama_pemilik_mutasi_ca_1]').val(data.mutasi_bank[0].nama_pemilik);

                        $('#detail_ca input[id=periode1_ca]').val(data.mutasi_bank[0].table[0].periode);
                        $('#detail_ca input[id=frekuensi_1deb_ca]').val(data.mutasi_bank[0].table[0].frek_debet);
                        var nominal_1deb_ca = (rubah(data.mutasi_bank[0].table[0].nominal_debet));
                        $('#detail_ca input[id=nominal_1deb_ca]').val(nominal_1deb_ca);
                        $('#detail_ca input[id=frekuensi_1kred_ca]').val(data.mutasi_bank[0].table[0].frek_kredit);
                        var nominal_1kred_ca = (rubah(data.mutasi_bank[0].table[0].nominal_kredit));
                        $('#detail_ca input[id=nominal_1kred_ca]').val(nominal_1kred_ca);
                        var saldo1_ca = (rubah(data.mutasi_bank[0].table[0].saldo));
                        $('#detail_ca input[id=saldo1_ca]').val(saldo1_ca);
                        $('#detail_ca input[id=periode2_ca]').val(data.mutasi_bank[0].table[1].periode);
                        $('#detail_ca input[id=frekuensi_2deb_ca]').val(data.mutasi_bank[0].table[1].frek_debet);
                        var nominal_2deb_ca = (rubah(data.mutasi_bank[0].table[1].nominal_debet));
                        $('#detail_ca input[id=nominal_2deb_ca]').val(nominal_2deb_ca);
                        $('#detail_ca input[id=frekuensi_2kred_ca]').val(data.mutasi_bank[0].table[1].frek_kredit);
                        var nominal_2kred_ca = (rubah(data.mutasi_bank[0].table[1].nominal_kredit));
                        $('#detail_ca input[id=nominal_2kred_ca]').val(nominal_2kred_ca);
                        var saldo2_ca = (rubah(data.mutasi_bank[0].table[1].saldo));
                        $('#detail_ca input[id=saldo2_ca]').val(saldo2_ca);
                        $('#detail_ca input[id=periode3_ca]').val(data.mutasi_bank[0].table[2].periode);
                        $('#detail_ca input[id=frekuensi_3deb_ca]').val(data.mutasi_bank[0].table[2].frek_debet);
                        var nominal_3deb_ca = (rubah(data.mutasi_bank[0].table[2].nominal_debet));
                        $('#detail_ca input[id=nominal_3deb_ca]').val(nominal_3deb_ca);
                        $('#detail_ca input[id=frekuensi_3kred_ca]').val(data.mutasi_bank[0].table[2].frek_kredit);
                        var nominal_3kred_ca = (rubah(data.mutasi_bank[0].table[2].nominal_kredit));
                        $('#detail_ca input[id=nominal_3kred_ca]').val(nominal_3kred_ca);
                        var saldo3_ca = (rubah(data.mutasi_bank[0].table[2].saldo));
                        $('#detail_ca input[id=saldo3_ca]').val(saldo3_ca);
                        rata_rata_mutasi_bank11();

                        // //BANK 2
                        $('#detail_ca input[id=nama_bank_mutasi_ca_2]').val(data.mutasi_bank[1].nama_bank);
                        $('#detail_ca input[id=no_rekening_mutasi_ca_2]').val(data.mutasi_bank[1].no_rekening);
                        $('#detail_ca input[id=nama_pemilik_mutasi_ca_2]').val(data.mutasi_bank[1].nama_pemilik);
                        $('#detail_ca input[id=periode1_b2_ca]').val(data.mutasi_bank[1].table[0].periode);
                        $('#detail_ca input[id=frekuensi_1deb_b2_ca]').val(data.mutasi_bank[1].table[0].frek_debet);
                        $('#detail_ca input[id=nominal_1deb_b2_ca]').val(data.mutasi_bank[1].table[0].nominal_debet);
                        $('#detail_ca input[id=frekuensi_1kred_b2_ca]').val(data.mutasi_bank[1].table[0].frek_kredit);
                        $('#detail_ca input[id=nominal_1kred_b2_ca]').val(data.mutasi_bank[1].table[0].nominal_kredit);
                        $('#detail_ca input[id=saldo1_b2_ca').val(data.mutasi_bank[1].table[0].saldo);
                        $('#detail_ca input[id=periode2_b2_ca]').val(data.mutasi_bank[1].table[1].periode);
                        $('#detail_ca input[id=frekuensi_2deb_b2_ca]').val(data.mutasi_bank[1].table[1].frek_debet);
                        $('#detail_ca input[id=nominal_2deb_b2_ca]').val(data.mutasi_bank[1].table[1].nominal_debet);
                        $('#detail_ca input[id=frekuensi_2kred_b2_ca]').val(data.mutasi_bank[1].table[1].frek_kredit);
                        $('#detail_ca input[id=nominal_2kred_b2_ca]').val(data.mutasi_bank[1].table[1].nominal_kredit);
                        $('#detail_ca input[id=saldo2_b2_ca]').val(data.mutasi_bank[1].table[1].saldo);
                        $('#detail_ca input[id=periode3_b2_ca]').val(data.mutasi_bank[1].table[2].periode);
                        $('#detail_ca input[id=frekuensi_3deb_b2_ca]').val(data.mutasi_bank[1].table[2].frek_debet);
                        $('#detail_ca input[id=nominal_3deb_b2_ca]').val(data.mutasi_bank[1].table[2].nominal_debet);
                        $('#detail_ca input[id=frekuensi_3kred_b2_ca]').val(data.mutasi_bank[1].table[2].frek_kredit);
                        $('#detail_ca input[id=nominal_3kred_b2_ca]').val(data.mutasi_bank[1].table[2].nominal_kredit);
                        $('#detail_ca input[id=saldo3_b2_ca]').val(data.mutasi_bank[1].table[2].saldo);
                        $('#rata_rata_mutasi_bank2').click();
                        //============================================================
                    })
                hide_all();
                $('#lihat_detail').show();

            });



            //UPDATE FASILITAS

            $('#form_fasilitas').on('submit', function(e) {

                update_fasilitas = function(opts, id) {
                    var data = opts;
                    var url = '<?php echo $this->config->item('api_url'); ?>api/faspin/' + id;
                    return $.ajax({
                        url: url,
                        data: data,
                        type: 'POST',
                        processData: false,
                        contentType: false,
                        cache: false,
                        beforeSend: function() {
                            let html =
                                "<div width='100%' class='text-center'>" +
                                "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                                "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                                "</div>";

                            $('#load_data').html(html);
                            $('#modal_load_data').modal('show');
                        },
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        }
                    });
                }


                var id = $('input[name=id_fasilitas_pinjaman]', this).val();
                e.preventDefault();
                var formData = new FormData();
                formData.append('id_asal_data', $('select[name=asal_data]', this).val());
                var plafon = $('input[name=plafon]', this).val();
                plafon = plafon.replace(/[^\d]/g, "");
                formData.append('plafon_pinjaman', plafon);

                formData.append('tenor_pinjaman', $('select[name=tenor]', this).val());
                formData.append('jenis_pinjaman', $('select[name=jenis_pinjaman]', this).val());
                formData.append('tujuan_pinjaman', $('textarea[name=tujuan_pinjaman]', this).val());
                formData.append('segmentasi_bpr', $('select[name=segmentasi]', this).val());
                formData.append('validasi_sektor_ekonomi', $('select[name=sektor_ekonomi]', this).val());

                update_fasilitas(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            // hide_all();

                            // $('#lihat_detail').show();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //=========================================================================================================




            //UPDATE DEBITUR
            update_debitur = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/debitur/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            //submit ubah data debitur
            $('#form_debitur ').on('submit', function(e) {
                var id = $('input[name=id_debitur]', this).val();
                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('nama_lengkap', $('input[name=nama_debitur]', this).val());
                formData.append('gelar_keagamaan', $('input[name=gelar_keagamaan]', this).val());
                formData.append('gelar_pendidikan', $('input[name=gelar_pendidikan]', this).val());
                formData.append('jenis_kelamin', $('select[name=jenis_kelamin]', this).val());
                formData.append('status_nikah', $('input[name=status_nikah]', this).val());
                formData.append('ibu_kandung', $('input[name=ibu_kandung]', this).val());
                formData.append('no_ktp', $('input[name=no_ktp]', this).val());
                formData.append('no_ktp_kk', $('input[name=no_ktp_kk]', this).val());
                formData.append('no_kk', $('input[name=no_kk]', this).val());
                formData.append('no_npwp', $('input[name=no_npwp]', this).val());
                formData.append('tempat_lahir', $('input[name=tempat_lahir]', this).val());
                formData.append('tgl_lahir', $('input[name=tgl_lahir_deb]', this).val());
                formData.append('agama', $('select[name=agama]', this).val());
                formData.append('alamat_ktp', $('input[name=alamat_ktp]', this).val());
                formData.append('rt_ktp', $('input[name=rt_ktp]', this).val());
                formData.append('rw_ktp', $('input[name=rw_ktp]', this).val());
                formData.append('id_prov_ktp', $('select[name=provinsi_ktp]', this).val());
                formData.append('id_kab_ktp', $('select[name=kabupaten_ktp]', this).val());
                formData.append('id_kec_ktp', $('select[name=kecamatan_ktp]', this).val());
                formData.append('id_kel_ktp', $('select[name=kelurahan_ktp]', this).val());
                formData.append('alamat_domisili', $('input[name=alamat_domisili]', this).val());
                formData.append('rt_domisili', $('input[name=rt_domisili]', this).val());
                formData.append('rw_domisili', $('input[name=rw_domisili]', this).val());
                formData.append('id_prov_domisili', $('select[name=provinsi_domisili]', this).val());
                formData.append('id_kab_domisili', $('select[name=kabupaten_domisili]', this).val());
                formData.append('id_kec_domisili', $('select[name=kecamatan_domisili]', this).val());
                formData.append('id_kel_domisili', $('select[name=kelurahan_domisili]', this).val());
                formData.append('pendidikan_terakhir', $('select[name=pendidikan_terakhir]', this).val());
                formData.append('jumlah_tanggungan', $('input[name=jumlah_tanggungan]', this).val());
                formData.append('tinggi_badan', $('input[name=tinggi_badan]', this).val());
                formData.append('berat_badan', $('input[name=berat_badan]', this).val());

                // $.each($('input[name="nama_anak[]"]'), function(i, e){
                //     formData.append('nama_anak[]', e.value);
                // });
                // $.each($('input[name="tgl_lahir_anak[]"]'), function(i, e){
                //     formData.append('tgl_lahir_anak[]', e.value);
                // });
                formData.append('no_telp', $('input[name=no_telp]', this).val());
                formData.append('no_hp', $('input[name=no_hp]', this).val());
                formData.append('alamat_surat', $('select[name=alamat_surat]', this).val());
                formData.append('pekerjaan', $('select[name=pekerjaan_deb]', this).val());
                formData.append('nama_tempat_kerja', $('input[name=nama_perusahaan]', this).val());
                formData.append('posisi_pekerjaan', $('input[name=posisi]', this).val());
                formData.append('jenis_pekerjaan', $('input[name=jenis_usaha]', this).val());
                formData.append('alamat_tempat_kerja', $('input[name=alamat_usaha_kantor]', this).val());
                formData.append('rt_tempat_kerja', $('input[name=rt_usaha_kantor]', this).val());
                formData.append('rw_tempat_kerja', $('input[name=rw_usaha_kantor]', this).val());
                formData.append('id_prov_tempat_kerja', $('select[name=provinsi_kantor]', this).val());
                formData.append('id_kab_tempat_kerja', $('select[name=kabupaten_kantor]', this).val());
                formData.append('id_kec_tempat_kerja', $('select[name=kecamatan_kantor]', this).val());
                formData.append('id_kel_tempat_kerja', $('select[name=kelurahan_kantor]', this).val());
                formData.append('tgl_mulai_kerja', $('input[name=masa_kerja_usaha]', this).val());
                formData.append('no_telp_tempat_kerja', $('input[name=no_telp_kantor_usaha]', this).val());
                formData.append('email', $('input[name=email]', this).val());

                update_debitur(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();

                            load_debitur();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        })
                    });
            });
            //===============================================================================================

            //FUNGSI PROVINSI, KAB.KEC, KEL BERDASARKAN KTP DEBITUR
            get_provinsi = function(opts) {
                var url = '<?php echo $this->config->item('api_url'); ?>wilayah/provinsi';
                return $.ajax({
                    type: 'GET',
                    url: url,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            $('#form_detail select[id=provinsi_ktp ]').on('click', function(e) {
                get_provinsi()
                    .done(function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=provinsi_ktp_dup]').html(select);
                    })
                $('#select_provinsi_ktp').remove();
                $('#select_provinsi_ktp_dup').show();
                $('#select_kabupaten_ktp').remove();
                $('#select_kabupaten_ktp_dup').show();
                $('#select_kecamatan_ktp').remove();
                $('#select_kecamatan_ktp_dup').show();
                $('#select_kelurahan_ktp').remove();
                $('#select_kelurahan_ktp_dup').show();
                $('#kode_pos_ktp').val('');
            })

            $('#provinsi_ktp_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail  select[id=kabupaten_ktp_dup]').html(select);
                    }
                });
            });

            $('#kabupaten_ktp_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kecamatan_ktp_dup]').html(select);
                    }
                });
            });

            $('#kecamatan_ktp_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kelurahan_ktp_dup]').html(select);
                    }
                });
            });

            $('#kelurahan_ktp_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',

                    success: function(response) {
                        var data = response.data;

                        $('#form_detail input[id=kode_pos_ktp]').val(data.kode_pos);
                    }
                });
            });
            //==========================================================================================

            //FUNGSI PROVINSI, KAB.KEC, KEL BERDASARKAN DOMISILI DEBITUR
            $('#form_detail select[id=provinsi_domisili ]').on('click', function(e) {
                get_provinsi()
                    .done(function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=provinsi_domisili_dup]').html(select);
                    })
                $('#select_provinsi_domisili').remove();
                $('#select_provinsi_domisili_dup').show();
                $('#select_kabupaten_domisili').remove();
                $('#select_kabupaten_domisili_dup').show();
                $('#select_kecamatan_domisili').remove();
                $('#select_kecamatan_domisili_dup').show();
                $('#select_kelurahan_domisili').remove();
                $('#select_kelurahan_domisili_dup').show();
                $('#kode_pos_domisili').val('');
            })

            $('#provinsi_domisili_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail  select[id=kabupaten_domisili_dup]').html(select);
                    }
                });
            });

            $('#kabupaten_domisili_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kecamatan_domisili_dup]').html(select);
                    }
                });
            });

            $('#kecamatan_domisili_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kelurahan_domisili_dup]').html(select);
                    }
                });
            });

            $('#kelurahan_domisili_dup').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',

                    success: function(response) {
                        var data = response.data;

                        $('#form_detail input[id=kode_pos_domisili]').val(data.kode_pos);
                    }
                });
            });
            //=========================================================================================================

            //FUNGSI PROVINSI, KAB.KEC, KEL BERDASARKAN PEKERJAAN DEBITUR

            $('#provinsi_kantor').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail  select[id=kabupaten_kantor]').html(select);
                    }
                });
            });

            $('#kabupaten_kantor').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kecamatan_kantor]').html(select);
                    }
                });
            });

            $('#kecamatan_kantor').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kelurahan_kantor]').html(select);
                    }
                });
            });

            $('#kelurahan_kantor').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',

                    success: function(response) {
                        var data = response.data;

                        $('#form_detail input[id=kode_pos_kantor]').val(data.kode_pos);
                    }
                });
            });
            //=========================================================================================================

            //UPDATE PASANGAN
            update_pasangan = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/pasangan/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            //UPDATE PASANGAN
            $('#form_pasangan').on('submit', function(e) {
                var id = $('input[name=id_pasangan]', this).val();
                e.preventDefault();
                var formData = new FormData();

                formData.append('nama_lengkap_pas', $('input[name=nama_lengkap_pas]', this).val());
                formData.append('nama_ibu_kandung_pas', $('input[name=nama_ibu_kandung_pas]', this).val());
                formData.append('jenis_kelamin_pas', $('select[name=jenis_kelamin_pas]', this).val());
                formData.append('alamat_ktp_pas', $('textarea[name=alamat_ktp_pas]', this).val());
                formData.append('no_ktp_pas', $('input[name=no_ktp_pas]', this).val());
                formData.append('no_ktp_kk_pas', $('input[name=no_ktp_kk_pas]', this).val());
                formData.append('no_npwp_pas', $('input[name=no_npwp_pas]', this).val());
                formData.append('tempat_lahir_pas', $('input[name=tempat_lahir_pas]', this).val());
                formData.append('tgl_lahir_pas', $('input[name=tgl_lahir_pas]', this).val());
                formData.append('no_telp_pas', $('input[name=no_telp_pas]', this).val());
                formData.append('pekerjaan_pas', $('select[name=pekerjaan_pas]', this).val());
                formData.append('nama_tempat_kerja_pas', $('input[name=nama_perusahaan_pas]', this).val());
                formData.append('posisi_pekerjaan_pas', $('input[name=posisi_pekerjaan_pas]', this).val());
                formData.append('jenis_pekerjaan_pas', $('input[name=jenis_usaha_pas]', this).val());
                formData.append('alamat_tempat_kerja_pas', $('input[name=alamat_usaha_kantor_pas]', this).val());
                formData.append('rt_tempat_kerja_pas', $('input[name=rt_kantor_usaha_pas]', this).val());
                formData.append('rw_tempat_kerja_pas', $('input[name=rw_kantor_usaha_pas]', this).val());
                formData.append('id_prov_tempat_kerja_pas', $('select[name=provinsi_kantor_pasangan]', this).val());
                formData.append('id_kab_tempat_kerja_pas', $('select[name=kabupaten_kantor_pasangan]', this).val());
                formData.append('id_kec_tempat_kerja_pas', $('select[name=kecamatan_kantor_pasangan]', this).val());
                formData.append('id_kel_tempat_kerja_pas', $('select[name=kelurahan_kantor_pasangan]', this).val());
                formData.append('tgl_mulai_kerja_pas', $('input[name=masa_kerja_lama_usaha_pas]', this).val());
                formData.append('no_telp_tempat_kerja_pas', $('input[name=no_telp_kantor_usaha_pas]', this).val());

                update_pasangan(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();

                            load_pasangan();
                            // hide_all();

                            // $('#lihat_detail').show();
                            $('#select_provinsi_kantor_pasangan').show();
                            $('#select_kabupaten_kantor_pasangan').show();
                            $('#select_kecamatan_kantor_pasangan').show();
                            $('#select_kelurahan_kantor_pasangan').show();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //========================================================================================

            //FUNGSI PROVINSI, KAB.KEC, KEL BERDASARKAN KTP DEBITUR

            // $('#form_detail select[id=provinsi_kantor_pasangan ]').on('click', function(e){
            //     get_provinsi()
            //     .done(function(res){
            //         var select = [];
            //         $.each(res.data, function(i,e){
            //             var option = [
            //             '<option value="'+e.id+'">'+e.nama+'</option>'
            //             ].join('\n');
            //             select.push(option);
            //         });
            //         $('#form_detail select[id=provinsi_kantor_pasangan_dup]').html(select);
            //     })
            //     $('#select_provinsi_kantor_pasangan').remove();
            //     $('#select_provinsi_kantor_pasangan_dup').show();
            //     $('#select_kabupaten_kantor_pasangan').remove();
            //     $('#select_kabupaten_kantor_pasangan_dup').show();
            //     $('#select_kecamatan_kantor_pasangan').remove();
            //     $('#select_kecamatan_kantor_pasangan_dup').show();
            //     $('#select_kelurahan_kantor_pasangan').remove();
            //     $('#select_kelurahan_kantor_pasangan_dup').show();
            //     $('#kode_pos_kantor_usaha_pas').val('');
            // })

            $('#provinsi_kantor_pasangan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail  select[id=kabupaten_kantor_pasangan]').html(select);
                    }
                });
            });

            $('#kabupaten_kantor_pasangan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kecamatan_kantor_pasangan]').html(select);
                    }
                });
            });

            $('#kecamatan_kantor_pasangan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_detail select[id=kelurahan_kantor_pasangan]').html(select);
                    }
                });
            });

            $('#kelurahan_kantor_pasangan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',

                    success: function(response) {
                        var data = response.data;

                        $('#form_detail input[id=kode_pos_kantor_usaha_pas]').val(data.kode_pos);
                    }
                });
            });
            //==========================================================================================


            //TOTAL PEMASUKAN KAPASITAS BULANAN
            function total_pemasukan_kapasitas_bulanan() {

                var pemasukan_debitur = (document.getElementById('pemasukan_debitur').value);
                pemasukan_debitur = pemasukan_debitur.replace(/[^\d]/g, "");

                var pemasukan_pasangan = (document.getElementById('pemasukan_pasangan').value);
                pemasukan_pasangan = pemasukan_pasangan.replace(/[^\d]/g, "");

                var pemasukan_penjamin = (document.getElementById('pemasukan_penjamin').value);
                pemasukan_penjamin = pemasukan_penjamin.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var cadeb = Math.floor(pemasukan_debitur);
                var pasangan = Math.floor(pemasukan_pasangan);
                var penjamin = Math.floor(pemasukan_penjamin);

                var total = cadeb + pasangan + penjamin;
                var total_pemasukan = formatter.format(Math.abs(total));

                document.getElementById('total_pemasukan').value = total_pemasukan;
            }
            // =============================================================

            //TOTAL PENGELUARAN KAPASITAS BULANAN
            function total_pengeluaran_kapasitas_bulanan() {

                var pengeluaran_rumah_tangga = (document.getElementById('biaya_rumah_tangga').value);
                pengeluaran_rumah_tangga = pengeluaran_rumah_tangga.replace(/[^\d]/g, "");

                var pengeluaran_transportasi = (document.getElementById('biaya_transport').value);
                pengeluaran_transportasi = pengeluaran_transportasi.replace(/[^\d]/g, "");

                var pengeluaran_pendidikan = (document.getElementById('biaya_pendidikan').value);
                pengeluaran_pendidikan = pengeluaran_pendidikan.replace(/[^\d]/g, "");

                var pengeluaran_telpon_listrik_air = (document.getElementById('biaya_telp_listr_air').value);
                pengeluaran_telpon_listrik_air = pengeluaran_telpon_listrik_air.replace(/[^\d]/g, "");

                var pengeluaran_lain_lain = (document.getElementById('biaya_lain').value);
                pengeluaran_lain_lain = pengeluaran_lain_lain.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var rumah_tangga = Math.floor(pengeluaran_rumah_tangga);
                var transportasi = Math.floor(pengeluaran_transportasi);
                var pendidikan = Math.floor(pengeluaran_pendidikan);
                var telpon_listrik_air = Math.floor(pengeluaran_telpon_listrik_air);
                var lain_lain = Math.floor(pengeluaran_lain_lain);

                var total = rumah_tangga + transportasi + pendidikan + telpon_listrik_air + lain_lain;
                var total_pengeluaran = formatter.format(Math.abs(total));

                document.getElementById('total_pengeluaran').value = total_pengeluaran;
            }
            // ============================================================================================


            //UPDATE KAPASITAS BULANAN
            update_kapasitas_bulanan_ao = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/kap_bul/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            //UPDATE KAPASITAS BULANAN
            $('#form_kapasitas_bulanan').on('submit', function(e) {
                var id = $('input[name=id_kapasitas_bulanan]', this).val();
                e.preventDefault();
                var formData = new FormData();

                var pemasukan_debitur = $('input[name=pemasukan_debitur]', this).val();
                pemasukan_debitur = pemasukan_debitur.replace(/[^\d]/g, "");
                formData.append('pemasukan_debitur', pemasukan_debitur);

                var pemasukan_pasangan = $('input[name=pemasukan_pasangan]', this).val();
                pemasukan_pasangan = pemasukan_pasangan.replace(/[^\d]/g, "");
                formData.append('pemasukan_pasangan', pemasukan_pasangan);

                var pemasukan_penjamin = $('input[name=pemasukan_penjamin]', this).val();
                pemasukan_penjamin = pemasukan_penjamin.replace(/[^\d]/g, "");
                formData.append('pemasukan_penjamin', pemasukan_penjamin);

                var biaya_rumah_tangga = $('input[name=biaya_rumah_tangga]', this).val();
                biaya_rumah_tangga = biaya_rumah_tangga.replace(/[^\d]/g, "");
                formData.append('biaya_rumah_tangga', biaya_rumah_tangga);

                var biaya_transportasi = $('input[name=biaya_transport]', this).val();
                biaya_transportasi = biaya_transportasi.replace(/[^\d]/g, "");
                formData.append('biaya_transport', biaya_transportasi);

                var biaya_pendidikan = $('input[name=biaya_pendidikan]', this).val();
                biaya_pendidikan = biaya_pendidikan.replace(/[^\d]/g, "");
                formData.append('biaya_pendidikan', biaya_pendidikan);

                var biaya_telp_listr_air = $('input[name=biaya_telp_listr_air]', this).val();
                biaya_telp_listr_air = biaya_telp_listr_air.replace(/[^\d]/g, "");
                formData.append('telp_listr_air', biaya_telp_listr_air);

                var biaya_lain = $('input[name=biaya_lain]', this).val();
                biaya_lain = biaya_lain.replace(/[^\d]/g, "");
                formData.append('biaya_lain', biaya_lain);

                update_kapasitas_bulanan_ao(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            load_kapasitas_bulanan();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //========================================================================================


            //UPDATE PENDAPATAN USAHA
            update_usaha_cadeb = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/usaha_cadebt/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            //UPDATE PENDAPATAN USAHA
            $('#form_pendapatan_usaha').on('submit', function(e) {
                var id = $('input[name=id_pendapatan_usaha]', this).val();
                e.preventDefault();
                var formData = new FormData();

                var pemasukan_tunai = $('input[name=pemasukan_tunai]', this).val();
                pemasukan_tunai = pemasukan_tunai.replace(/[^\d]/g, "");
                formData.append('pemasukan_tunai', pemasukan_tunai);

                var pemasukan_kredit = $('input[name=pemasukan_kredit]', this).val();
                pemasukan_kredit = pemasukan_kredit.replace(/[^\d]/g, "");
                formData.append('pemasukan_kredit', pemasukan_kredit);

                var biaya_sewa = $('input[name=biaya_sewa]', this).val();
                biaya_sewa = biaya_sewa.replace(/[^\d]/g, "");
                formData.append('biaya_sewa', biaya_sewa);

                var biaya_gaji_pegawai = $('input[name=biaya_gaji_pegawai]', this).val();
                biaya_gaji_pegawai = biaya_gaji_pegawai.replace(/[^\d]/g, "");
                formData.append('biaya_gaji_pegawai', biaya_gaji_pegawai);

                var biaya_belanja_brg = $('input[name=biaya_belanja_brg]', this).val();
                biaya_belanja_brg = biaya_belanja_brg.replace(/[^\d]/g, "");
                formData.append('biaya_belanja_brg', biaya_belanja_brg);

                var biaya_telp_listr_air_us = $('input[name=tlp_listrik_air]', this).val();
                biaya_telp_listr_air_us = biaya_telp_listr_air_us.replace(/[^\d]/g, "");
                formData.append('biaya_telp_listr_air_us', biaya_pendidikan);

                var biaya_sampah_keamanan = $('input[name=biaya_sampah_keamanan]', this).val();
                biaya_sampah_keamanan = biaya_sampah_keamanan.replace(/[^\d]/g, "");
                formData.append('biaya_sampah_keamanan', biaya_sampah_keamanan);

                var biaya_kirim_barang = $('input[name=biaya_kirim_barang]', this).val();
                biaya_kirim_barang = biaya_kirim_barang.replace(/[^\d]/g, "");
                formData.append('biaya_kirim_barang', biaya_kirim_barang);

                var biaya_hutang_dagang = $('input[name=biaya_hutang_dagang]', this).val();
                biaya_hutang_dagang = biaya_hutang_dagang.replace(/[^\d]/g, "");
                formData.append('biaya_hutang_dagang', biaya_hutang_dagang);

                var angsuran = $('input[name=biaya_angsuran]', this).val();
                angsuran = angsuran.replace(/[^\d]/g, "");
                formData.append('angsuran', angsuran);

                var biaya_lain_lain = $('input[name=biaya_lain_lain]', this).val();
                biaya_lain_lain = biaya_lain_lain.replace(/[^\d]/g, "");
                formData.append('biaya_lain_lain', biaya_lain_lain);

                update_usaha_cadeb(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            load_pendapatan_usaha();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //========================================================================================

            //TOTAL PENDAPATAN USAHA
            function total_pendapatan_usaha() {

                var pemasukan_tunai = (document.getElementById('pemasukan_tunai').value);
                pemasukan_tunai = pemasukan_tunai.replace(/[^\d]/g, "");

                var pemasukan_kredit = (document.getElementById('pemasukan_kredit').value);
                pemasukan_kredit = pemasukan_kredit.replace(/[^\d]/g, "");


                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var tunai = Math.floor(pemasukan_tunai);
                var kredit = Math.floor(pemasukan_kredit);


                var total = tunai + kredit;
                var total_pemasukan = formatter.format(Math.abs(total));

                document.getElementById('pendapatan_usaha').value = total_pemasukan;
                document.getElementById('pendapatan_usaha_hide').value = total;

                var pengeluaran_usaha = (document.getElementById('pengeluaran_usaha_hide').value);
                pengeluaran_usaha = pengeluaran_usaha.replace(/[^\d]/g, "");

                var pengeluaran = Math.floor(pengeluaran_usaha);

                var total_keuntungan = total - pengeluaran;
                total_keuntungan = formatter.format(Math.abs(total_keuntungan));
                document.getElementById('keuntungan_usaha').value = total_keuntungan;
            }
            // =============================================================

            //TOTAL PENGELUARAN USAHA
            function total_pengeluaran_usaha() {

                var pengeluaran_sewa = (document.getElementById('biaya_sewa').value);
                pengeluaran_sewa = pengeluaran_sewa.replace(/[^\d]/g, "");

                var pengeluaran_gaji_pegawai = (document.getElementById('biaya_gaji_pegawai').value);
                pengeluaran_gaji_pegawai = pengeluaran_gaji_pegawai.replace(/[^\d]/g, "");

                var pengeluaran_belanja_barang = (document.getElementById('biaya_belanja_brg').value);
                pengeluaran_belanja_barang = pengeluaran_belanja_barang.replace(/[^\d]/g, "");

                var pengeluaran_tlp_listrik_air_usaha = (document.getElementById('tlp_listrik_air').value);
                pengeluaran_tlp_listrik_air_usaha = pengeluaran_tlp_listrik_air_usaha.replace(/[^\d]/g, "");

                var pengeluaran_sampah_keamanan = (document.getElementById('biaya_sampah_keamanan').value);
                pengeluaran_sampah_keamanan = pengeluaran_sampah_keamanan.replace(/[^\d]/g, "");

                var pengeluaran_biaya_kirim_barang = (document.getElementById('biaya_kirim_barang').value);
                pengeluaran_biaya_kirim_barang = pengeluaran_biaya_kirim_barang.replace(/[^\d]/g, "");

                var pengeluaran_pembayaran_hutang_dagang = (document.getElementById('biaya_hutang_dagang').value);
                pengeluaran_pembayaran_hutang_dagang = pengeluaran_pembayaran_hutang_dagang.replace(/[^\d]/g, "");

                var pengeluaran_angsuran_lain = (document.getElementById('biaya_angsuran').value);
                pengeluaran_angsuran_lain = pengeluaran_angsuran_lain.replace(/[^\d]/g, "");

                var pengeluaran_lainnya = (document.getElementById('biaya_lain_lain').value);
                pengeluaran_lainnya = pengeluaran_lainnya.replace(/[^\d]/g, "");

                var pendapatan_usaha = (document.getElementById('pendapatan_usaha').value);
                pendapatan_usaha = pendapatan_usaha.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var sewa = parseInt(pengeluaran_sewa);
                var gaji_pegawai = parseInt(pengeluaran_gaji_pegawai);
                var belanja_barang = Math.floor(pengeluaran_belanja_barang);
                var tlp_listrik_air = Math.floor(pengeluaran_tlp_listrik_air_usaha);
                var sampah_keamanan = Math.floor(pengeluaran_sampah_keamanan);
                var biaya_kirim_barang = Math.floor(pengeluaran_biaya_kirim_barang);
                var pembayaran_hutang_dagang = Math.floor(pengeluaran_pembayaran_hutang_dagang);
                var angsuran_lain = Math.floor(pengeluaran_angsuran_lain);
                var lainnya = Math.floor(pengeluaran_lainnya);

                var total = sewa + gaji_pegawai + belanja_barang + tlp_listrik_air + sampah_keamanan + biaya_kirim_barang + pembayaran_hutang_dagang + angsuran_lain + lainnya;

                var total_pengeluaran = formatter.format(Math.abs(total));

                document.getElementById('pengeluaran_usaha').value = total_pengeluaran;
                document.getElementById('pengeluaran_usaha_hide').value = total;

                var pendapatan_usaha = (document.getElementById('pendapatan_usaha_hide').value);
                pendapatan_usaha = pendapatan_usaha.replace(/[^\d]/g, "");

                var pendapatan = Math.floor(pendapatan_usaha);

                var total_keuntungan = pendapatan - total;
                total_keuntungan = formatter.format(Math.abs(total_keuntungan));
                document.getElementById('keuntungan_usaha').value = total_keuntungan;
            }
            // =============================================================


            //UPDATE PEMERIKSAAN AGUNAN TANAH
            update_pemeriksaan_agunan_tanah = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/periksa/tanah/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            //UPDATEPEMERIKSAAN AGUNAN TANAH
            $('#form_pemeriksaan_agunan_tanah').on('submit', function(e) {
                var id = $('input[name=id_pemeriksaan_agunan]', this).val();
                e.preventDefault();
                var formData = new FormData();

                formData.append('nama_penghuni_agunan', $('input[name=nama_penghuni_agunan]', this).val());
                formData.append('status_penghuni_agunan', $('select[name=status_penghuni_agunan]', this).val());
                formData.append('bentuk_bangunan_agunan', $('input[name=bentuk_bangunan_agunan]', this).val());
                formData.append('kondisi_bangunan_agunan', $('select[name=kondisi_bangunan_agunan]', this).val());
                formData.append('fasilitas_agunan', $('input[name=fasilitas_agunan]', this).val());
                formData.append('listrik_agunan', $('input[name=listrik_agunan]', this).val());
                var nilai_taksasi_agunan = $('input[name=nilai_taksasi_agunan]', this).val();
                nilai_taksasi_agunan = nilai_taksasi_agunan.replace(/[^\d]/g, "");
                formData.append('nilai_taksasi_agunan', nilai_taksasi_agunan);

                var nilai_taksasi_bangunan = $('input[name=nilai_taksasi_bangunan]', this).val();
                nilai_taksasi_bangunan = nilai_taksasi_bangunan.replace(/[^\d]/g, "");
                formData.append('nilai_taksasi_bangunan', nilai_taksasi_bangunan);

                formData.append('tgl_taksasi_agunan', $('input[name=tgl_taksasi_agunan]', this).val());

                var nilai_likuidasi_agunan = $('input[name=nilai_likuidasi_agunan]', this).val();
                nilai_likuidasi_agunan = nilai_likuidasi_agunan.replace(/[^\d]/g, "");
                formData.append('nilai_likuidasi_agunan', nilai_likuidasi_agunan);


                update_pemeriksaan_agunan_tanah(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            load_pemeriksaan_agunan();

                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //========================================================================================

            $('#form_edit_ktp_deb ').on('submit', function(e) {
                var id = $('input[id=id_debitur_ktp]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_ktp', $('input[name=lamp_ktp_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_ktp_deb();
                            $("#batal").click();
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });
                $(".close_deb").click();
            });

            $('#form_edit_kk_deb ').on('submit', function(e) {
                var id = $('input[name=id_debitur_kk]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_kk', $('input[name=lamp_kk_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_kk_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });
            });

            $('#form_edit_sertifikat_deb ').on('submit', function(e) {
                var id = $('input[name=id_debitur_sertifikat]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_sertifikat', $('input[name=lamp_sertifikat_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_sertifikat_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });

            //UPDATE LAMPIRAN
            $('#form_edit_pbb_deb').on('submit', function(e) {
                var id = $('input[name=id_debitur_pbb]', this).val();
                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_pbb', $('input[name=lamp_pbb_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_pbb_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });

            $('#form_edit_imb_deb').on('submit', function(e) {
                var id = $('input[name=id_debitur_imb]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_imb', $('input[name=lamp_imb_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_imb_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });

            $('#form_edit_skk_deb').on('submit', function(e) {
                var id = $('input[name=id_debitur_skk]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_skk', $('input[name=lamp_skk_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_skk_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });

            $('#form_edit_slip_gaji_deb').on('submit', function(e) {
                var id = $('input[name=id_debitur_slip_gaji]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_slip_gaji', $('input[name=lamp_slip_gaji_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_slip_gaji_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });

            $('#form_edit_sku_deb ').on('submit', function(e) {
                var id = $('input[name=id_debitur_sku]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('lamp_sku[]', $('input[name=lamp_sku_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_sku_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });

            $('#form_edit_pembukuan_usaha_deb ').on('submit', function(e) {
                var id = $('input[name=id_debitur_pembukuan_usaha]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                formData.append('foto_pembukuan_usaha[]', $('input[name=lamp_pembukuan_usaha_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_pembukuan_usaha_deb();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });

            $('#form_edit_buku_tabungan_deb').on('submit', function(e) {
                var id = $('input[name=id_debitur_buku_tabungan]', this).val();

                e.preventDefault();
                var formData = new FormData();
                //Data Debitur
                $.each($('input[name="lamp_buku_tabungan_deb[]"]', this), function(i, e) {
                    formData.append('lamp_buku_tabungan[]', e.files[0]);
                });

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_lampiran_buku_tabungan();
                            $("#batal").click()
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                        // bootbox.alert(error);
                    });

            });
            //===============================================================================================

            // klik submit update
            $('#form_input_ca').on('submit', function(e) {
                update_ca = function(opts, idca) {
                    var data = opts;
                    var url = '<?php echo $this->config->item('api_url'); ?>api/master/mca/' + idca;
                    return $.ajax({
                        url: url,
                        data: data,
                        type: 'POST',
                        processData: false,
                        contentType: false,
                        cache: false,
                        beforeSend: function() {
                            let html =
                                "<div width='100%' class='text-center'>" +
                                "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                                "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                                "</div>";

                            $('#load_data').html(html);
                            $('#modal_load_data').modal('show');
                        },
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        }
                    });
                }
                var idca = $('input[name=id]', this).val();
                e.preventDefault();
                var formData = new FormData();
                //MUTASI BANK
                // $.each($('input[name="urutan_mutasi[]"]'), function(i, e){
                //     formData.append('nama_bank_mutasi[]', e.value);
                // });
                $.each($('input[name="nama_bank_mutasi[]"]'), function(i, e) {
                    formData.append('nama_bank_mutasi[]', e.value);
                });
                $.each($('input[name="no_rekening_mutasi[]"]'), function(i, e) {
                    formData.append('no_rekening_mutasi[]', e.value);
                });
                $.each($('input[name="nama_pemilik_mutasi[]"]'), function(i, e) {
                    formData.append('nama_pemilik_mutasi[]', e.value);
                });
                $.each($('input[name="periode_mutasi[0][]"]'), function(i, e) {
                    formData.append('periode_mutasi[0][]', e.value);
                });
                $.each($('input[name="frek_debet_mutasi[0][]"]'), function(i, e) {
                    formData.append('frek_debet_mutasi[0][]', e.value);
                });
                $.each($('input[name="nominal_debet_mutasi[0][]'), function(i, e) {
                    formData.append('nominal_debet_mutasi[0][]', e.value.replace(/[^\d]/g, ""));
                });
                $.each($('input[name="frek_kredit_mutasi[0][]"]'), function(i, e) {
                    formData.append('frek_kredit_mutasi[0][]', e.value);
                });
                $.each($('input[name="nominal_kredit_mutasi[0][]"]'), function(i, e) {
                    formData.append('nominal_kredit_mutasi[0][]', e.value.replace(/[^\d]/g, ""));
                });
                $.each($('input[name="saldo_mutasi[0][]"]'), function(i, e) {
                    formData.append('saldo_mutasi[0][]', e.value.replace(/[^\d]/g, ""));
                });

                $.each($('input[name="periode_mutasi[1][]"]'), function(i, e) {
                    formData.append('periode_mutasi[1][]', e.value);
                });
                $.each($('input[name="frek_debet_mutasi[1][]"]'), function(i, e) {
                    formData.append('frek_debet_mutasi[1][]', e.value);
                });
                $.each($('input[name="nominal_debet_mutasi[1][]'), function(i, e) {
                    formData.append('nominal_debet_mutasi[1][]', e.value.replace(/[^\d]/g, ""));
                });
                $.each($('input[name="frek_kredit_mutasi[1][]"]'), function(i, e) {
                    formData.append('frek_kredit_mutasi[1][]', e.value);
                });
                $.each($('input[name="nominal_kredit_mutasi[1][]"]'), function(i, e) {
                    formData.append('nominal_kredit_mutasi[1][]', e.value.replace(/[^\d]/g, ""));
                });
                $.each($('input[name="saldo_mutasi[1][]"]'), function(i, e) {
                    formData.append('saldo_mutasi[1][]', e.value.replace(/[^\d]/g, ""));
                });
                //===================================

                //KEUANGAN

                formData.append('tujuan_pembukaan_rek', $('input[name=tujuan_pembukaan_rek]', this).val());

                var pemasukan_debitur_ca = $('input[name=pemasukan_debitur_ca]', this).val();
                pemasukan_debitur_ca = pemasukan_debitur_ca.replace(/[^\d]/g, "");
                formData.append('pemasukan_debitur_ca', pemasukan_debitur_ca);

                var penghasilan_per_tahun = $('input[name="penghasilan_per_tahun"]', this).val();
                formData.append('penghasilan_per_tahun', penghasilan_per_tahun.replace(/[^\d]/g, ""));

                formData.append('sumber_penghasilan', $('select[name=sumber_penghasilan]', this).val());
                formData.append('pemasukan_per_bulan', $('select[name=pemasukan_per_bulan]', this).val());
                formData.append('frek_trans_pemasukan', $('select[name=frek_trans_pemasukan]', this).val());
                formData.append('pengeluaran_per_bulan', $('select[name=pengeluaran_per_bulan]', this).val());
                formData.append('frek_trans_pengeluaran', $('select[name=frek_trans_pengeluaran]', this).val());
                formData.append('sumber_dana_setoran', $('select[name=sumber_dana_setoran]', this).val());
                formData.append('tujuan_pengeluaran_dana', $('select[name=tujuan_pengeluaran_dana]', this).val());
                formData.append('no_rekening', $('input[name=no_rekening]', this).val());
                //==============================================================================================

                //INFORMASI DAN ANALISA

                $.each($('input[name="nama_bank_acc[]"]'), function(i, e) {
                    formData.append('nama_bank_acc[]', e.value);
                });

                $.each($('input[name="plafon_acc[]"]'), function(i, e) {
                    formData.append('plafon_acc[]', e.value.replace(/[^\d]/g, ""));
                });

                $.each($('input[name="baki_debet_acc[]"]'), function(i, e) {
                    formData.append('baki_debet_acc[]', e.value.replace(/[^\d]/g, ""));
                });

                $.each($('input[name="angsuran_acc[]"]'), function(i, e) {
                    formData.append('angsuran_acc[]', e.value.replace(/[^\d]/g, ""));
                });

                $.each($('input[name="collectabilitas_acc[]"]'), function(i, e) {
                    formData.append('collectabilitas_acc[]', e.value);
                });

                $.each($('input[name="jenis_kredit_acc[]"]'), function(i, e) {
                    formData.append('jenis_kredit_acc[]', e.value);
                });
                //===============================================================================================

                //Kapasitas Bulanan
                var pemasukan_debitur_ca = $('input[name=pemasukan_debitur_ca]', this).val();
                pemasukan_debitur_ca = pemasukan_debitur_ca.replace(/[^\d]/g, "");
                formData.append('pemasukan_debitur', pemasukan_debitur_ca);

                var pemasukan_pasangan_ca = $('input[name=pemasukan_pasangan_ca]', this).val();
                pemasukan_pasangan_ca = pemasukan_pasangan_ca.replace(/[^\d]/g, "");
                formData.append('pemasukan_pasangan', pemasukan_pasangan_ca);

                var pemasukan_penjamin_ca = $('input[name=pemasukan_penjamin_ca]', this).val();
                pemasukan_penjamin_ca = pemasukan_penjamin_ca.replace(/[^\d]/g, "");
                formData.append('pemasukan_penjamin', pemasukan_penjamin_ca);

                var biaya_rumah_tangga_ca = $('input[name=biaya_rumah_tangga_ca]', this).val();
                biaya_rumah_tangga_ca = biaya_rumah_tangga_ca.replace(/[^\d]/g, "");
                formData.append('biaya_rumah_tangga', biaya_rumah_tangga_ca);

                var biaya_transportasi_ca = $('input[name=biaya_transportasi_ca]', this).val();
                biaya_transportasi_ca = biaya_transportasi_ca.replace(/[^\d]/g, "");
                formData.append('biaya_transport', biaya_transportasi_ca);

                var biaya_pendidikan_ca = $('input[name=biaya_pendidikan_ca]', this).val();
                biaya_pendidikan_ca = biaya_pendidikan_ca.replace(/[^\d]/g, "");
                formData.append('biaya_pendidikan', biaya_pendidikan_ca);

                var biaya_telp_listr_air_ca = $('input[name=biaya_telp_listr_air_ca]', this).val();
                biaya_telp_listr_air_ca = biaya_telp_listr_air_ca.replace(/[^\d]/g, "");
                formData.append('telp_listr_air', biaya_telp_listr_air_ca);

                var angsuran_lain_ca = $('input[name=angsuran_lain_ca]', this).val();
                angsuran_lain_ca = angsuran_lain_ca.replace(/[^\d]/g, "");
                formData.append('angsuran', angsuran_lain_ca);

                var biaya_lain_ca = $('input[name=biaya_lain_ca]', this).val();
                biaya_lain_ca = biaya_lain_ca.replace(/[^\d]/g, "");
                formData.append('biaya_lain', biaya_lain_ca);
                //=================================================================================================

                //PENDAPATAN USAHA
                var pemasukan_tunai_ca = $('input[name=pemasukan_tunai_ca]', this).val();
                pemasukan_tunai_ca = pemasukan_tunai_ca.replace(/[^\d]/g, "");
                formData.append('pemasukan_tunai', pemasukan_tunai_ca);

                var pemasukan_kredit_ca = $('input[name=pemasukan_kredit_ca]', this).val();
                pemasukan_kredit_ca = pemasukan_kredit_ca.replace(/[^\d]/g, "");
                formData.append('pemasukan_kredit', pemasukan_kredit_ca);

                var biaya_sewa_ca = $('input[name=biaya_sewa_ca]', this).val();
                biaya_sewa_ca = biaya_sewa_ca.replace(/[^\d]/g, "");
                formData.append('biaya_sewa', biaya_sewa_ca);

                var biaya_gaji_pegawai_ca = $('input[name=biaya_gaji_pegawai_ca]', this).val();
                biaya_gaji_pegawai_ca = biaya_gaji_pegawai_ca.replace(/[^\d]/g, "");
                formData.append('biaya_gaji_pegawai', biaya_gaji_pegawai_ca);

                var biaya_belanja_brg_ca = $('input[name=biaya_belanja_brg_ca]', this).val();
                biaya_belanja_brg_ca = biaya_belanja_brg_ca.replace(/[^\d]/g, "");
                formData.append('biaya_belanja_brg', biaya_belanja_brg_ca);

                var biaya_telp_listr_air_usaha_ca = $('input[name=biaya_telp_listr_air_usaha_ca]', this).val();
                biaya_telp_listr_air_usaha_ca = biaya_telp_listr_air_usaha_ca.replace(/[^\d]/g, "");
                formData.append('biaya_telp_listr_air', biaya_telp_listr_air_usaha_ca);

                var biaya_sampah_keamanan_ca = $('input[name=biaya_sampah_keamanan_ca]', this).val();
                biaya_sampah_keamanan_ca = biaya_sampah_keamanan_ca.replace(/[^\d]/g, "");
                formData.append('biaya_sampah_kemanan', biaya_sampah_keamanan_ca);

                var biaya_kirim_barang_ca = $('input[name=biaya_kirim_barang_ca]', this).val();
                biaya_kirim_barang_ca = biaya_kirim_barang_ca.replace(/[^\d]/g, "");
                formData.append('biaya_kirim_barang', biaya_kirim_barang_ca);

                var biaya_hutang_dagang_ca = $('input[name=biaya_hutang_dagang_ca]', this).val();
                biaya_hutang_dagang_ca = biaya_hutang_dagang_ca.replace(/[^\d]/g, "");
                formData.append('biaya_hutang_dagang', biaya_hutang_dagang_ca);

                var biaya_angsuran_ca = $('input[name=biaya_angsuran_ca]', this).val();
                biaya_angsuran_ca = biaya_angsuran_ca.replace(/[^\d]/g, "");
                formData.append('biaya_angsuran', biaya_angsuran_ca);

                var biaya_lain_lain_ca = $('input[name=biaya_lain_lain_ca]', this).val();
                biaya_lain_lain_ca = biaya_lain_lain_ca.replace(/[^\d]/g, "");
                formData.append('biaya_lain_lain', biaya_lain_lain_ca);
                //=================================================================================================

                // RINGKASAN ANALISA KUANTITATIF
                var kuantitatif_ttl_pendapatan = $('input[name=kuantitatif_ttl_pendapatan]', this).val();
                kuantitatif_ttl_pendapatan = kuantitatif_ttl_pendapatan.replace(/[^\d]/g, "");
                formData.append('kuantitatif_ttl_pendapatan', kuantitatif_ttl_pendapatan);

                var kuantitatif_ttl_pengeluaran = $('input[name=kuantitatif_ttl_pengeluaran]', this).val();
                kuantitatif_ttl_pengeluaran = kuantitatif_ttl_pengeluaran.replace(/[^\d]/g, "");
                formData.append('kuantitatif_ttl_pengeluaran', kuantitatif_ttl_pengeluaran);

                var kuantitatif_pendapatan = $('input[name=kuantitatif_pendapatan]', this).val();
                kuantitatif_pendapatan = kuantitatif_pendapatan.replace(/[^\d]/g, "");
                formData.append('kuantitatif_pendapatan', kuantitatif_pendapatan);

                var kuantitatif_angsuran = $('input[name=kuantitatif_angsuran]', this).val();
                kuantitatif_angsuran = kuantitatif_angsuran.replace(/[^\d]/g, "");
                formData.append('kuantitatif_angsuran', kuantitatif_angsuran);

                formData.append('kuantitatif_ltv', $('input[name=kuantitatif_ltv]', this).val());
                formData.append('kuantitatif_dsr', $('input[name=kuantitatif_dsr]', this).val());
                formData.append('kuantitatif_idir', $('input[name=kuantitatif_idir]', this).val());
                formData.append('kuantitatif_hasil', $('input[name=kuantitatif_hasil]', this).val());


                //ringkasan analisa aspek kualitatif
                formData.append('kualitatif_analisa', $('textarea[name=kualitatif_analisa]', this).val());
                formData.append('kualitatif_strenght', $('textarea[name=kualitatif_strenght]', this).val());
                formData.append('kualitatif_weakness', $('textarea[name=kualitatif_weakness]', this).val());
                formData.append('kualitatif_opportunity', $('textarea[name=kualitatif_opportunity]', this).val());
                formData.append('kualitatif_threatness', $('textarea[name=kualitatif_threatness]', this).val());
                //PENYIMPANGAN
                formData.append('penyimpangan_struktur', $('textarea[name=penyimpangan_struktur]', this).val());

                //REKOMENDASI PINJAMAN
                var recom_nilai_pinjaman = $('input[name=recom_nilai_pinjaman]', this).val();
                recom_nilai_pinjaman = recom_nilai_pinjaman.replace(/[^\d]/g, "");
                formData.append('recom_nilai_pinjaman', recom_nilai_pinjaman);

                formData.append('recom_tenor', $('select[name=recom_tenor]', this).val());

                formData.append('bunga_pinjaman', $('input[name=recom_bunga_pinjaman]', this).val());

                var recom_angsuran = $('input[name=recom_angsuran]', this).val();
                recom_angsuran = recom_angsuran.replace(/[^\d]/g, "");
                formData.append('recom_angsuran', recom_angsuran);

                formData.append('recom_produk_kredit', $('select[name=recom_produk_kredit]', this).val());
                formData.append('note_recom', $('textarea[name=note_recom]', this).val());
                //asuransi jiwa
                formData.append('nama_asuransi_jiwa', $('select[name=nama_asuransi_jiwa]', this).val());
                formData.append('jangka_waktu_as_jiwa', $('input[name=jangka_waktu_as_jiwa]', this).val());

                var nilai_pertanggungan_as_jiwa = $('input[name=nilai_pertanggungan_as_jiwa]', this).val();
                nilai_pertanggungan_as_jiwa = nilai_pertanggungan_as_jiwa.replace(/[^\d]/g, "");
                formData.append('nilai_pertanggungan_as_jiwa', nilai_pertanggungan_as_jiwa);

                var premi_asuransi_jiwa = $('input[name=premi_asuransi_jiwa]', this).val();
                premi_asuransi_jiwa = premi_asuransi_jiwa.replace(/[^\d]/g, "");
                formData.append('biaya_asuransi_jiwa', premi_asuransi_jiwa);

                formData.append('jatuh_tempo_as_jiwa', $('input[name=jatuh_tempo_as_jiwa]', this).val());
                formData.append('berat_badan_as_jiwa', $('input[name=berat_badan_as_jiwa]', this).val());
                formData.append('tinggi_badan_as_jiwa', $('input[name=tinggi_badan_as_jiwa]', this).val());
                formData.append('umur_nasabah_as_jiwa', $('input[name=umur_nasabah_as_jiwa]', this).val());
                //asuransi jaminan kebakaran
                formData.append('nama_asuransi_keb', $('input[name=nama_asuransi_keb]', this).val());
                formData.append('jangka_waktu_asuransi_keb', $('input[name=jangka_waktu_asuransi_keb]', this).val());

                var nilai_pertanggungan_keb = $('input[name=nilai_pertanggungan_keb]', this).val();
                nilai_pertanggungan_keb = nilai_pertanggungan_keb.replace(/[^\d]/g, "");
                formData.append('nilai_pertanggungan_keb', nilai_pertanggungan_keb);

                var premi_asuransi_kebakaran = $('input[name=premi_asuransi_kebakaran]', this).val();
                premi_asuransi_kebakaran = premi_asuransi_kebakaran.replace(/[^\d]/g, "");
                formData.append('biaya_asuransi_jaminan_kebakaran', premi_asuransi_kebakaran);

                formData.append('jatuh_tempo_keb', $('input[name=jatuh_tempo_keb]', this).val());
                //asuransi jaminan kendaraan
                formData.append('nama_asuransi_ken', $('input[name=nama_asuransi_ken]', this).val());
                formData.append('jangka_waktu_asuransi_ken', $('input[name=jangka_waktu_asuransi_ken]', this).val());

                var nilai_pertanggungan_ken = $('input[name=nilai_pertanggungan_ken]', this).val();
                nilai_pertanggungan_ken = nilai_pertanggungan_ken.replace(/[^\d]/g, "");
                formData.append('nilai_pertanggungan_ken', nilai_pertanggungan_ken);

                var premi_asuransi_kendaraan = $('input[name=premi_asuransi_kendaraan]', this).val();
                premi_asuransi_kendaraan = premi_asuransi_kendaraan.replace(/[^\d]/g, "");
                formData.append('biaya_asuransi_jaminan_kendaraan', premi_asuransi_kendaraan)

                formData.append('jatuh_tempo_ken', $('input[name=jatuh_tempo_ken]', this).val());
                //recomendasi ca
                formData.append('produk', $('select[name=produk]', this).val());

                var plafon_kredit = $('input[name=plafon_kredit]', this).val();
                plafon_kredit = plafon_kredit.replace(/[^\d]/g, "");
                formData.append('plafon_kredit', plafon_kredit);

                formData.append('jangka_waktu', $('select[name=jangka_waktu]', this).val());
                formData.append('suku_bunga', $('input[name=suku_bunga]', this).val());

                var pembayaran_bunga = $('input[name=pembayaran_bunga]', this).val();
                pembayaran_bunga = pembayaran_bunga.replace(/[^\d]/g, "");
                formData.append('pembayaran_bunga', pembayaran_bunga);

                formData.append('akad_kredit', $('select[name=akad_kredit]', this).val());

                formData.append('ikatan_agunan', $('select[name=ikatan_agunan]', this).val());

                var biaya_provisi = $('input[name=biaya_provisi]', this).val();
                biaya_provisi = biaya_provisi.replace(/[^\d]/g, "");
                formData.append('biaya_provisi', biaya_provisi);

                var biaya_administrasi = $('input[name=biaya_administrasi]', this).val();
                biaya_administrasi = biaya_administrasi.replace(/[^\d]/g, "");
                formData.append('biaya_administrasi', biaya_administrasi);

                var biaya_credit_checking = $('input[name=biaya_credit_checking]', this).val();
                biaya_credit_checking = biaya_credit_checking.replace(/[^\d]/g, "");
                formData.append('biaya_credit_checking', biaya_credit_checking);

                var notaris = $('input[name=notaris]', this).val();
                notaris = notaris.replace(/[^\d]/g, "");
                formData.append('notaris', notaris);

                var biaya_tabungan = $('input[name=biaya_tabungan]', this).val();
                biaya_tabungan = biaya_tabungan.replace(/[^\d]/g, "");
                formData.append('biaya_tabungan', biaya_tabungan);

                update_ca(formData, idca)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil disimpan', function() {
                            $("#batal").click();
                            // $('#form_input_ca')[0].reset();
                            // hide_all();
                            // load_data_ca();
                            // $('#lihat_data_credit').show();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        })
                        // bootbox.alert(error);
                    });
            });

            //GET PRODUK

            get_produk = function(opts) {
                var url = '<?php echo $this->config->item('api_url'); ?>produk';
                return $.ajax({
                    type: 'GET',
                    url: url
                });
            }
            get_produk()
                .done(function(res) {
                    var select = [];
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.nama_produk + '">' + e.nama_produk + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=recom_produk_kredit]').html(select);
                })

            get_produk()
                .done(function(res) {
                    var select = [];
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.nama_produk + '">' + e.nama_produk + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=produk]').html(select);
                })
            //==================================================


            //TOTAL PENDAPATAN USAHA
            function total_pendapatan_usaha_ca() {

                var pemasukan_tunai_ca = (document.getElementById('pemasukan_tunai_ca').value);
                pemasukan_tunai_ca = pemasukan_tunai_ca.replace(/[^\d]/g, "");

                var pemasukan_kredit_ca = (document.getElementById('pemasukan_kredit_ca').value);
                pemasukan_kredit_ca = pemasukan_kredit_ca.replace(/[^\d]/g, "");


                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var tunai = Math.floor(pemasukan_tunai_ca);
                var kredit = Math.floor(pemasukan_kredit_ca);


                var total = tunai + kredit;
                var total_pemasukan = formatter.format(Math.abs(total));

                document.getElementById('pendapatan_usaha_ca').value = total_pemasukan;
                document.getElementById('pendapatan_usaha_ca_hide').value = total;

                var pengeluaran_usaha = (document.getElementById('pengeluaran_usaha_ca_hide').value);
                pengeluaran_usaha = pengeluaran_usaha.replace(/[^\d]/g, "");

                var pengeluaran = Math.floor(pengeluaran_usaha);

                var total_keuntungan = total - pengeluaran;
                total_keuntungan = formatter.format(Math.abs(total_keuntungan));
                document.getElementById('keuntungan_usaha_ca').value = total_keuntungan;
            }
            // =============================================================

            //TOTAL PENGELUARAN USAHA
            function total_pengeluaran_usaha_ca() {

                var pengeluaran_sewa_ca = (document.getElementById('biaya_sewa_ca').value);
                pengeluaran_sewa_ca = pengeluaran_sewa_ca.replace(/[^\d]/g, "");

                var pengeluaran_gaji_pegawai_ca = (document.getElementById('biaya_gaji_pegawai_ca').value);
                pengeluaran_gaji_pegawai_ca = pengeluaran_gaji_pegawai_ca.replace(/[^\d]/g, "");

                var pengeluaran_belanja_barang_ca = (document.getElementById('biaya_belanja_brg_ca').value);
                pengeluaran_belanja_barang_ca = pengeluaran_belanja_barang_ca.replace(/[^\d]/g, "");

                var pengeluaran_tlp_listrik_air_usaha_ca = (document.getElementById('biaya_telp_listr_air_usaha_ca').value);
                pengeluaran_tlp_listrik_air_usaha_ca = pengeluaran_tlp_listrik_air_usaha_ca.replace(/[^\d]/g, "");

                var pengeluaran_sampah_keamanan_ca = (document.getElementById('biaya_sampah_keamanan_ca').value);
                pengeluaran_sampah_keamanan_ca = pengeluaran_sampah_keamanan_ca.replace(/[^\d]/g, "");

                var pengeluaran_biaya_kirim_barang_ca = (document.getElementById('biaya_kirim_barang_ca').value);
                pengeluaran_biaya_kirim_barang_ca = pengeluaran_biaya_kirim_barang_ca.replace(/[^\d]/g, "");

                var pengeluaran_pembayaran_hutang_dagang_ca = (document.getElementById('biaya_hutang_dagang_ca').value);
                pengeluaran_pembayaran_hutang_dagang_ca = pengeluaran_pembayaran_hutang_dagang_ca.replace(/[^\d]/g, "");

                var pengeluaran_angsuran_lain_ca = (document.getElementById('biaya_angsuran_ca').value);
                pengeluaran_angsuran_lain_ca = pengeluaran_angsuran_lain_ca.replace(/[^\d]/g, "");

                var pengeluaran_lainnya_ca = (document.getElementById('biaya_lain_lain_ca').value);
                pengeluaran_lainnya_ca = pengeluaran_lainnya_ca.replace(/[^\d]/g, "");

                var pendapatan_usaha_ca = (document.getElementById('pendapatan_usaha_ca').value);
                pendapatan_usaha_ca = pendapatan_usaha_ca.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var sewa_ca = parseInt(pengeluaran_sewa_ca);
                var gaji_pegawai_ca = parseInt(pengeluaran_gaji_pegawai_ca);
                var belanja_barang_ca = Math.floor(pengeluaran_belanja_barang_ca);
                var tlp_listrik_air_ca = Math.floor(pengeluaran_tlp_listrik_air_usaha_ca);
                var sampah_keamanan_ca = Math.floor(pengeluaran_sampah_keamanan_ca);
                var biaya_kirim_barang_ca = Math.floor(pengeluaran_biaya_kirim_barang_ca);
                var pembayaran_hutang_dagang_ca = Math.floor(pengeluaran_pembayaran_hutang_dagang_ca);
                var angsuran_lain_ca = Math.floor(pengeluaran_angsuran_lain_ca);
                var lainnya_ca = Math.floor(pengeluaran_lainnya_ca);

                var total_ca = sewa_ca + gaji_pegawai_ca + belanja_barang_ca + tlp_listrik_air_ca + sampah_keamanan_ca + biaya_kirim_barang_ca + pembayaran_hutang_dagang_ca + angsuran_lain_ca + lainnya_ca;

                var total_pengeluaran_ca = formatter.format(Math.abs(total_ca));

                document.getElementById('pengeluaran_usaha_ca').value = total_pengeluaran_ca;
                document.getElementById('pengeluaran_usaha_ca_hide').value = total_ca;

                var pendapatan_usaha = (document.getElementById('pendapatan_usaha_ca_hide').value);
                pendapatan_usaha = pendapatan_usaha.replace(/[^\d]/g, "");

                var pendapatan = Math.floor(pendapatan_usaha);

                var total_keuntungan = pendapatan - total_ca;
                total_keuntungan = formatter.format(Math.abs(total_keuntungan));
                document.getElementById('keuntungan_usaha_ca').value = total_keuntungan;

            }
            // =============================================================

            //TOTAL PENDAPATAN USAHA
            function total_pendapatan_usaha_detail_ca() {

                var pemasukan_tunai_ca = (document.getElementById('pemasukan_tunai_ca_detail').value);
                pemasukan_tunai_ca = pemasukan_tunai_ca.replace(/[^\d]/g, "");

                var pemasukan_kredit_ca = (document.getElementById('pemasukan_kredit_ca_detail').value);
                pemasukan_kredit_ca = pemasukan_kredit_ca.replace(/[^\d]/g, "");


                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var tunai = Math.floor(pemasukan_tunai_ca);
                var kredit = Math.floor(pemasukan_kredit_ca);


                var total = tunai + kredit;
                var total_pemasukan = formatter.format(Math.abs(total));

                document.getElementById('pendapatan_usaha_ca_detail').value = total_pemasukan;
                document.getElementById('pendapatan_usaha_ca_hide_detail').value = total;

                var pengeluaran_usaha = (document.getElementById('pengeluaran_usaha_ca_hide_detail').value);
                pengeluaran_usaha = pengeluaran_usaha.replace(/[^\d]/g, "");

                var pengeluaran = Math.floor(pengeluaran_usaha);

                var total_keuntungan = total - pengeluaran;
                total_keuntungan = formatter.format(Math.abs(total_keuntungan));
                document.getElementById('keuntungan_usaha_ca_detail').value = total_keuntungan;
            }
            // =============================================================

            //TOTAL PENGELUARAN USAHA
            function total_pengeluaran_usaha_detail_ca() {

                var pengeluaran_sewa_ca = (document.getElementById('biaya_sewa_ca_detail').value);
                pengeluaran_sewa_ca = pengeluaran_sewa_ca.replace(/[^\d]/g, "");

                var pengeluaran_gaji_pegawai_ca = (document.getElementById('biaya_gaji_pegawai_ca_detail').value);
                pengeluaran_gaji_pegawai_ca = pengeluaran_gaji_pegawai_ca.replace(/[^\d]/g, "");

                var pengeluaran_belanja_barang_ca = (document.getElementById('biaya_belanja_brg_ca_detail').value);
                pengeluaran_belanja_barang_ca = pengeluaran_belanja_barang_ca.replace(/[^\d]/g, "");

                var pengeluaran_tlp_listrik_air_usaha_ca = (document.getElementById('biaya_telp_listr_air_usaha_ca_detail').value);
                pengeluaran_tlp_listrik_air_usaha_ca = pengeluaran_tlp_listrik_air_usaha_ca.replace(/[^\d]/g, "");

                var pengeluaran_sampah_keamanan_ca = (document.getElementById('biaya_sampah_keamanan_ca_detail').value);
                pengeluaran_sampah_keamanan_ca = pengeluaran_sampah_keamanan_ca.replace(/[^\d]/g, "");

                var pengeluaran_biaya_kirim_barang_ca = (document.getElementById('biaya_kirim_barang_ca_detail').value);
                pengeluaran_biaya_kirim_barang_ca = pengeluaran_biaya_kirim_barang_ca.replace(/[^\d]/g, "");

                var pengeluaran_pembayaran_hutang_dagang_ca = (document.getElementById('biaya_hutang_dagang_ca_detail').value);
                pengeluaran_pembayaran_hutang_dagang_ca = pengeluaran_pembayaran_hutang_dagang_ca.replace(/[^\d]/g, "");

                var pengeluaran_angsuran_lain_ca = (document.getElementById('biaya_angsuran_ca_detail').value);
                pengeluaran_angsuran_lain_ca = pengeluaran_angsuran_lain_ca.replace(/[^\d]/g, "");

                var pengeluaran_lainnya_ca = (document.getElementById('biaya_lain_lain_ca_detail').value);
                pengeluaran_lainnya_ca = pengeluaran_lainnya_ca.replace(/[^\d]/g, "");

                var pendapatan_usaha_ca = (document.getElementById('pendapatan_usaha_ca_detail').value);
                pendapatan_usaha_ca = pendapatan_usaha_ca.replace(/[^\d]/g, "");

                var formatter = new Intl.NumberFormat('id-ID', {
                    //style: 'decimal', //tanpa decimal, tanpa Rp
                    style: 'currency', //dengan 2 decimal, dengan Rp
                    currency: 'IDR',

                });

                var sewa_ca = parseInt(pengeluaran_sewa_ca);
                var gaji_pegawai_ca = parseInt(pengeluaran_gaji_pegawai_ca);
                var belanja_barang_ca = Math.floor(pengeluaran_belanja_barang_ca);
                var tlp_listrik_air_ca = Math.floor(pengeluaran_tlp_listrik_air_usaha_ca);
                var sampah_keamanan_ca = Math.floor(pengeluaran_sampah_keamanan_ca);
                var biaya_kirim_barang_ca = Math.floor(pengeluaran_biaya_kirim_barang_ca);
                var pembayaran_hutang_dagang_ca = Math.floor(pengeluaran_pembayaran_hutang_dagang_ca);
                var angsuran_lain_ca = Math.floor(pengeluaran_angsuran_lain_ca);
                var lainnya_ca = Math.floor(pengeluaran_lainnya_ca);

                var total_ca = sewa_ca + gaji_pegawai_ca + belanja_barang_ca + tlp_listrik_air_ca + sampah_keamanan_ca + biaya_kirim_barang_ca + pembayaran_hutang_dagang_ca + angsuran_lain_ca + lainnya_ca;

                var total_pengeluaran_ca = formatter.format(Math.abs(total_ca));

                document.getElementById('pengeluaran_usaha_ca_detail').value = total_pengeluaran_ca;
                document.getElementById('pengeluaran_usaha_ca_hide_detail').value = total_ca;

                var pendapatan_usaha = (document.getElementById('pendapatan_usaha_ca_hide_detail').value);
                pendapatan_usaha = pendapatan_usaha.replace(/[^\d]/g, "");

                var pendapatan = Math.floor(pendapatan_usaha);

                var total_keuntungan = pendapatan - total_ca;
                total_keuntungan = formatter.format(Math.abs(total_keuntungan));
                document.getElementById('keuntungan_usaha_ca_detail').value = total_keuntungan;

            }
            // =============================================================

            // Click ubah 
            get_data_penjamin = function(opts, id_penjamin) {
                var url = '<?php echo config_item('api_url') ?>api/penjamin/' + id_penjamin;
                var data = opts;
                return $.ajax({
                    // type : 'GET',
                    url: url,
                    data: data,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            $('#data_penjamin').on('click', '.edit', function(e) {

                e.preventDefault();

                var id_penjamin = $(this).attr('data');
                var html1 = [];
                var html2 = [];
                var html3 = [];
                var html4 = [];

                get_data_penjamin({}, id_penjamin)
                    .done(function(response) {
                        var data = response.data;

                        $('#form_edit_penjamin input[type=hidden][name=edit_id_penjamin]').val(data.id);
                        $('#form_edit_penjamin input[name=nama_pen]').val(data.nama_ktp);
                        $('#form_edit_penjamin input[name=nama_ibu_kandung_pen]').val(data.nama_ibu_kandung);
                        $('#form_edit_penjamin input[name=no_ktp_pen]').val(data.no_ktp);
                        $('#form_edit_penjamin input[name=no_npwp_pen]').val(data.no_npwp);
                        $('#form_edit_penjamin input[name=tempat_lahir_pen]').val(data.tempat_lahir);
                        $('#form_edit_penjamin input[name=tgl_lahir_pen]').val(data.tgl_lahir);

                        if (data.hubungan_debitur == "ORANG TUA") {
                            document.getElementById("hub_ortu_penj").selected = "true";
                        } else
                        if (data.hubungan_debitur == "KAKAK") {
                            document.getElementById("hub_kakak_penj").selected = "true";
                        } else
                        if (data.hubungan_debitur == "ADIK") {
                            document.getElementById("hub_adik_penj").selected = "true";
                        } else
                        if (data.hubungan_debitur == "MERTUA") {
                            document.getElementById("hub_mertua_penj").selected = "true";
                        } else
                        if (data.hubungan_debitur == "ANAK") {
                            document.getElementById("hub_anak_penj").selected = "true";
                        }

                        $('#form_edit_ktp_penjamin input[type=hidden][name=id_ktp_pen]').val(data.id);
                        $('#form_edit_kk_penjamin input[type=hidden][name=id_kk_pen]').val(data.id);
                        $('#form_edit_ktp_pas_penjamin input[type=hidden][name=id_ktp_pasangan_pen]').val(data.id);
                        $('#form_edit_buku_nikah_penjamin input[type=hidden][name=id_buku_nikah_pen]').val(data.id);

                        get_provinsi()
                            .done(function(res) {
                                var select = [];
                                var select1 = '<option value="">--Pilih--</option>';
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.id + 'provinsi_kantor_pen" value="' + e.id + '">' + e.nama + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#form_edit_penjamin select[id=provinsi_kantor_pen]').html(select1 + select);
                                if (data.pekerjaan.alamat.provinsi.id + 'provinsi_kantor_pen' == '' + data.pekerjaan.alamat.provinsi.id + 'provinsi_kantor_pen') {
                                    document.getElementById('' + data.pekerjaan.alamat.provinsi.id + 'provinsi_kantor_pen').selected = "true";
                                }
                            })

                        $('#provinsi_kantor_pen').change(function() {
                            var id = $(this).val();
                            $.ajax({
                                url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                                method: "GET",
                                data: {
                                    id: id
                                },
                                async: false,
                                dataType: 'json',
                                success: function(res) {
                                    var select = [];
                                    var select1 = '<option value="">--Pilih--</option>';
                                    $.each(res.data, function(i, e) {
                                        var option = [
                                            '<option value="' + e.id + '">' + e.nama + '</option>'
                                        ].join('\n');
                                        select.push(option);
                                    });
                                    $('#form_edit_penjamin  select[id=kabupaten_kantor_pen]').html(select1 + select);
                                }
                            });
                        });

                        $('#kabupaten_kantor_pen').change(function() {
                            var id = $(this).val();
                            $.ajax({
                                url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                                method: "GET",
                                data: {
                                    id: id
                                },
                                async: false,
                                dataType: 'json',
                                success: function(res) {
                                    var select = [];
                                    var select1 = '<option value="">--Pilih--</option>';
                                    $.each(res.data, function(i, e) {
                                        var option = [
                                            '<option value="' + e.id + '">' + e.nama + '</option>'
                                        ].join('\n');
                                        select.push(option);
                                    });
                                    $('#form_edit_penjamin select[id=kecamatan_kantor_pen]').html(select1 + select);
                                }
                            });
                        });

                        $('#kecamatan_kantor_pen').change(function() {
                            var id = $(this).val();
                            $.ajax({
                                url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                                method: "GET",
                                data: {
                                    id: id
                                },
                                async: false,
                                dataType: 'json',
                                success: function(res) {
                                    var select = [];
                                    var select1 = '<option value="">--Pilih--</option>';
                                    $.each(res.data, function(i, e) {
                                        var option = [
                                            '<option value="' + e.id + '">' + e.nama + '</option>'
                                        ].join('\n');
                                        select.push(option);
                                    });
                                    $('#form_edit_penjamin select[id=kelurahan_kantor_pen]').html(select1 + select);
                                }
                            });
                        });

                        $('#kelurahan_kantor_pen').change(function() {
                            var id = $(this).val();
                            $.ajax({
                                url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                                method: "GET",
                                data: {
                                    id: id
                                },
                                async: false,
                                dataType: 'json',

                                success: function(response) {
                                    var data = response.data;

                                    $('#form_edit_penjamin input[id=kode_pos_kantor_pen]').val(data.kode_pos);
                                }
                            });
                        });
                        var select_jenis_kel_pen = [];
                        var option_jenis_kel_pen = [
                            '<option id="L_pen" value="L">LAKI-LAKI</option>',
                            '<option id="P_pen" value="P">PEREMPUAN</option>',
                        ].join('\n');
                        select_jenis_kel_pen.push(option_jenis_kel_pen);
                        $('#form_edit_penjamin select[id=select_jenis_kel_pen]').html(select_jenis_kel_pen);


                        if (data.jenis_kelamin == "L") {
                            document.getElementById("L_pen").selected = "true";
                        } else {
                            document.getElementById("P_pen").selected = "true";
                        }
                        $('#form_edit_penjamin textarea[name=alamat_ktp_pen]').val(data.alamat_ktp);
                        $('#form_edit_penjamin input[name=notelp_pen]').val(data.no_telp);

                        $('#form_edit_penjamin input[name=tgl_lahir_pen]').val(data.tgl_lahir);

                        var select_pekerjaan_pen = [];
                        var option_pekerjaan_pen = [
                            '<option id="karyawan_pen" value="KARYAWAN">KARYAWAN</option>',
                            '<option id="pns_pen" value="PNS">PNS</option>',
                            '<option id="wiraswasta_pen" value="WIRASWASTA">WIRASWASTA</option>',
                        ].join('\n');
                        select_pekerjaan_pen.push(option_pekerjaan_pen);
                        $('#form_edit_penjamin select[id=pekerjaan_pen]').html(select_pekerjaan_pen);


                        if (data.pekerjaan.nama_pekerjaan == "KARYAWAN") {
                            document.getElementById("karyawan_pen").selected = "true";
                        } else if (data.pekerjaan.nama_pekerjaan == "PNS") {
                            document.getElementById("pns_pen").selected = "true";
                        } else if (data.pekerjaan.nama_pekerjaan == "WIRASWASTA") {
                            document.getElementById("wiraswasta_pen").selected = "true";
                        }

                        $('#form_edit_penjamin input[name=posisi_usaha_pen]').val(data.pekerjaan.posisi_pekerjaan);
                        $('#form_edit_penjamin input[name=jenis_usaha_pen]').val(data.pekerjaan.jenis_pekerjaan);
                        $('#form_edit_penjamin input[name=nama_perusahaan_pen]').val(data.pekerjaan.nama_tempat_kerja);
                        $('#form_edit_penjamin input[name=tgl_mulai_kerja_pen]').val(data.pekerjaan.tgl_mulai_kerja);
                        $('#form_edit_penjamin input[name=no_telp_tempat_kerja_pen]').val(data.pekerjaan.no_telp_tempat_kerja);
                        $('#form_edit_penjamin input[name=alamat_usaha_kantor_pen]').val(data.pekerjaan.alamat.alamat_singkat);
                        $('#form_edit_penjamin input[name=rt_usaha_kantor_pen]').val(data.pekerjaan.alamat.rt);
                        $('#form_edit_penjamin input[name=rw_usaha_kantor_pen]').val(data.pekerjaan.alamat.rw);
                        $('#form_edit_penjamin input[name=kode_pos_kantor_pen]').val(data.pekerjaan.alamat.kode_pos);

                        var select_kabupaten_kantor_pen = [];
                        var option_kabupaten_kantor_pen = [
                            '<option value="' + data.pekerjaan.alamat.kabupaten.id + '">' + data.pekerjaan.alamat.kabupaten.nama + '</option>'
                        ].join('\n');
                        select_kabupaten_kantor_pen.push(option_kabupaten_kantor_pen);
                        $('#form_edit_penjamin select[id=kabupaten_kantor_pen]').html(select_kabupaten_kantor_pen);
                        var select_kecamatan_kantor_pen = [];
                        var option_kecamatan_kantor_pen = [
                            '<option value="' + data.pekerjaan.alamat.kecamatan.id + '">' + data.pekerjaan.alamat.kecamatan.nama + '</option>'
                        ].join('\n');
                        select_kecamatan_kantor_pen.push(option_kecamatan_kantor_pen);
                        $('#form_edit_penjamin select[id=kecamatan_kantor_pen]').html(select_kecamatan_kantor_pen);
                        var select_kelurahan_kantor_pen = [];
                        var option_kelurahan_kantor_pen = [
                            '<option value="' + data.pekerjaan.alamat.kecamatan.id + '">' + data.pekerjaan.alamat.kecamatan.nama + '</option>'
                        ].join('\n');
                        select_kelurahan_kantor_pen.push(option_kelurahan_kantor_pen);
                        $('#form_edit_penjamin select[id=kelurahan_kantor_pen]').html(select_kelurahan_kantor_pen);

                    })
                    .fail(function(jqXHR) {
                        bootbox.alert('Data tidak ditemukan');
                    });
                // hide_all();
                // $('#lihat_ubah_asaldata').show();
            });

            load_lampiran_ktp_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_ktp').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_kk_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_kk').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_sertifikat_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_sertifikat').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_pbb_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_pbb').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_imb_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_imb').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_skk_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_skk + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_skk + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_surat_keterangan_kerja').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_slip_gaji_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_slip_gaji + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_slip_gaji + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_slip_gaji').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_sku_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sku + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sku + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_keterangan_usaha').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_pembukuan_usaha_deb = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_pembukuan_usaha + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_pembukuan_usaha + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_pembukuan_usaha').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_lampiran_buku_tabungan = function() {
                var id = $('#form_detail input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;

                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_buku_tabungan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_buku_tabungan + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_buku_tabungan').html(html);

                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }


            // Click ubah agunan dipengajuan
            get_data_agunan = function(opts, id) {
                var url = '<?php echo config_item('api_url') ?>api/agunan/tanah/' + id;
                var data = opts;
                return $.ajax({
                    // type : 'GET',
                    url: url,
                    data: data,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            $('#data_agunan_sertifikat').on('click', '.edit', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');
                var html = [];

                get_data_agunan({}, id)
                    .done(function(response) {
                        var data = response.data;

                        $('#form_edit_agunan input[type=hidden][name=id_agunan]').val(data.id);
                        $('#form_edit_agunan_tampak_depan input[type=hidden][name=id_agunan_depan]').val(data.id);
                        $('#form_edit_agunan_tampak_jalan input[type=hidden][name=id_agunan_jalan]').val(data.id);
                        $('#form_edit_agunan_tampak_ruang_tamu input[type=hidden][name=id_agunan_ruang_tamu]').val(data.id);
                        $('#form_edit_agunan_tampak_dapur input[type=hidden][name=id_agunan_dapur]').val(data.id);
                        $('#form_edit_agunan_tampak_kamar_mandi input[type=hidden][name=id_agunan_kamar_mandi]').val(data.id);

                        if (data.tipe_lokasi == "PERUM") {
                            document.getElementById("lok_perum").selected = "true";
                        } else if (data.tipe_lokasi == "BIASA") {
                            document.getElementById("lok_biasa").selected = "true";
                        }

                        $('#form_edit_agunan input[name=alamat_agunan]').val(data.alamat.alamat_singkat);
                        $('#form_edit_agunan input[name=rt_agunan]').val(data.alamat.rt);
                        $('#form_edit_agunan input[name=rw_agunan]').val(data.alamat.rw);

                        get_provinsi()
                            .done(function(res) {
                                var select = [];
                                $.each(res.data, function(i, e) {
                                    var option = [
                                        '<option id="' + e.id + 'agunan" value="' + e.id + '">' + e.nama + '</option>'
                                    ].join('\n');
                                    select.push(option);
                                });
                                $('#form_edit_agunan select[id=select_provinsi_agunan]').html(select);
                                if (data.alamat.provinsi.id == '' + data.alamat.provinsi.id + '') {
                                    document.getElementById('' + data.alamat.provinsi.id + 'agunan').selected = "true";
                                }
                            })

                        // var select_provinsi_agunan = [];
                        // var option_provinsi_agunan = [
                        //     '<option value="'+data.alamat.provinsi.id+'">'+data.alamat.provinsi.nama+'</option>'
                        // ].join('\n');
                        // select_provinsi_agunan.push(option_provinsi_agunan);
                        // $('#form_edit_agunan select[name=id_prov_agunan]').html(select_provinsi_agunan);

                        var select_kabupaten_agunan = [];
                        var option_kabupaten_agunan = [
                            '<option value="' + data.alamat.kabupaten.id + '">' + data.alamat.kabupaten.nama + '</option>'
                        ].join('\n');
                        select_kabupaten_agunan.push(option_kabupaten_agunan);
                        $('#form_edit_agunan select[name=id_kab_agunan]').html(select_kabupaten_agunan);

                        var select_kecamatan_agunan = [];
                        var option_kecamatan_agunan = [
                            '<option value="' + data.alamat.kecamatan.id + '">' + data.alamat.kecamatan.nama + '</option>'
                        ].join('\n');
                        select_kecamatan_agunan.push(option_kecamatan_agunan);
                        $('#form_edit_agunan select[name=id_kec_agunan]').html(select_kecamatan_agunan);

                        var select_kelurahan_agunan = [];
                        var option_kelurahan_agunan = [
                            '<option value="' + data.alamat.kecamatan.id + '">' + data.alamat.kecamatan.nama + '</option>'
                        ].join('\n');
                        select_kelurahan_agunan.push(option_kelurahan_agunan);
                        $('#form_edit_agunan select[name=id_kel_agunan]').html(select_kelurahan_agunan);


                        $('#form_edit_agunan input[name=kode_pos_agunan]').val(data.alamat.kode_pos);
                        $('#form_edit_agunan input[name=luas_tanah]').val(data.luas_tanah);
                        $('#form_edit_agunan input[name=luas_bangunan]').val(data.luas_bangunan);
                        $('#form_edit_agunan input[name=nama_pemilik_sertifikat]').val(data.nama_pemilik_sertifikat);

                        if (data.jenis_sertifikat == "SHM") {
                            document.getElementById("jenis_shm").selected = "true";
                        } else if (data.jenis_sertifikat == "SHGB") {
                            document.getElementById("jenis_shgb").selected = "true";
                        }

                        $('#form_edit_agunan input[name=no_sertifikat]').val(data.no_sertifikat);
                        $('#form_edit_agunan input[name=no_ukur_sertifikat]').val(data.tgl_ukur_sertifikat);
                        $('#form_edit_agunan input[name=tgl_berlaku_shgb]').val(data.tgl_berlaku_shgb);
                        $('#form_edit_agunan input[name=no_imb]').val(data.no_imb);
                        $('#form_edit_agunan input[name=nop]').val(data.nop);

                        var njop = (rubah(data.njop));
                        $('#form_edit_agunan input[name=njop]').val(njop);

                        // get_provinsi()
                        // .done(function(res){
                        //     var select = [];
                        //     var select1 = '<option value="">--Pilih--</option>';
                        //     $.each(res.data, function(i,e){
                        //         var option = [
                        //         '<option value="'+e.id+'">'+e.nama+'</option>'
                        //         ].join('\n');
                        //         select.push(option);
                        //     });
                        //     $('#form_edit_penjamin select[id=provinsi_kantor_pen_dup]').html(select1+select);
                        // })

                        // $('#provinsi_kantor_pen_dup').change(function(){
                        //     var id=$(this).val();
                        //     $.ajax({
                        //         url : "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/"+id+"/kabupaten",
                        //         method : "GET",
                        //         data : {id: id},
                        //         async : false,
                        //         dataType : 'json',
                        //         success: function(res){
                        //             var select = [];
                        //             var select1 = '<option value="">--Pilih--</option>';
                        //             $.each(res.data, function(i,e){
                        //                 var option = [
                        //                 '<option value="'+e.id+'">'+e.nama+'</option>'
                        //                 ].join('\n');
                        //                 select.push(option);
                        //             });
                        //             $('#form_edit_penjamin  select[id=kabupaten_kantor_pen_dup]').html(select1+select);      
                        //         }
                        //     });
                        // });

                        // $('#kabupaten_kantor_pen_dup').change(function(){
                        //     var id=$(this).val();
                        //     $.ajax({
                        //         url : "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/"+id+"/kecamatan",
                        //         method : "GET",
                        //         data : {id: id},
                        //         async : false,
                        //         dataType : 'json',
                        //         success: function(res){
                        //             var select = [];
                        //             var select1 = '<option value="">--Pilih--</option>';
                        //             $.each(res.data, function(i,e){
                        //                 var option = [
                        //                 '<option value="'+e.id+'">'+e.nama+'</option>'
                        //                 ].join('\n');
                        //                 select.push(option);
                        //             });
                        //             $('#form_edit_penjamin select[id=kecamatan_kantor_pen_dup]').html(select1+select);      
                        //         }
                        //     });
                        // });

                        // $('#kecamatan_kantor_pen_dup').change(function(){
                        //     var id=$(this).val();
                        //     $.ajax({
                        //         url : "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/"+id+"/kelurahan",
                        //         method : "GET",
                        //         data : {id: id},
                        //         async : false,
                        //         dataType : 'json',
                        //         success: function(res){
                        //             var select = [];
                        //             var select1 = '<option value="">--Pilih--</option>';
                        //             $.each(res.data, function(i,e){
                        //                 var option = [
                        //                 '<option value="'+e.id+'">'+e.nama+'</option>'
                        //                 ].join('\n');
                        //                 select.push(option);
                        //             });
                        //             $('#form_edit_penjamin select[id=kelurahan_kantor_pen_dup]').html(select1+select);      
                        //         }
                        //     });
                        // });

                        // $('#kelurahan_kantor_pen_dup').change(function(){
                        //     var id=$(this).val();
                        //     $.ajax({
                        //         url : "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/"+id,
                        //         method : "GET",
                        //         data : {id: id},
                        //         async : false,
                        //         dataType : 'json',

                        //         success: function(response){
                        //         var data = response.data; 

                        //             $('#form_edit_penjamin input[id=kode_pos_kantor_pen]').val(data.kode_pos);   
                        //         }
                        //     });
                        // }); 

                    })
                    .fail(function(jqXHR) {
                        bootbox.alert('Data tidak ditemukan');
                    });
                // hide_all();
                // $('#lihat_ubah_asaldata').show();
            });

            update_agunan = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/agunan/tanah/' + id + '/updateTambah';
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            $('#select_provinsi_agunan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select1 = '<option value="">--Pilih--</option>';
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_edit_agunan  select[id=select_kabupaten_agunan]').html(select1 + select);
                    }
                });
            });

            $('#select_kabupaten_agunan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select1 = '<option value="">--Pilih--</option>';
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_edit_agunan select[id=select_kecamatan_agunan]').html(select1 + select);
                    }
                });
            });

            $('#select_kecamatan_agunan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(res) {
                        var select1 = '<option value="">--Pilih--</option>';
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_edit_agunan select[id=select_kelurahan_agunan]').html(select1 + select);
                    }
                });
            });

            $('#select_kelurahan_agunan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                    method: "GET",
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',

                    success: function(response) {
                        var data = response.data;

                        $('#form_edit_agunan input[name=kode_pos_agunan]').val(data.kode_pos);
                    }
                });
            });


            //UPDATE AGUNAN
            $('#form_edit_agunan').on('submit', function(e) {

                var id = $('input[name=id_agunan]', this).val();
                e.preventDefault();

                var formData = new FormData();
                formData.append('tipe_lokasi_agunan', $('select[name=tipe_lokasi_agunan]', this).val());
                formData.append('alamat_agunan', $('input[name=alamat_agunan]', this).val());
                formData.append('id_prov_agunan', $('select[name=id_prov_agunan]', this).val());
                formData.append('id_kab_agunan', $('select[name=id_kab_agunan]', this).val());
                formData.append('id_kec_agunan', $('select[name=id_kec_agunan]', this).val());
                formData.append('id_kel_agunan', $('select[name=id_kel_agunan]', this).val());
                formData.append('rt_agunan', $('input[name=rt_agunan]', this).val());
                formData.append('rw_agunan', $('input[name=rw_agunan]', this).val());
                formData.append('luas_tanah', $('input[name=luas_tanah]', this).val());
                formData.append('luas_bangunan', $('input[name=luas_bangunan]', this).val());
                formData.append('nama_pemilik_sertifikat', $('input[name=nama_pemilik_sertifikat]', this).val());
                formData.append('jenis_sertifikat', $('select[name=jenis_sertifikat]', this).val());
                formData.append('no_sertifikat', $('input[name=no_sertifikat]', this).val());
                formData.append('tgl_ukur_sertifikat', $('input[name=no_ukur_sertifikat]', this).val());
                formData.append('tgl_berlaku_shgb', $('input[name=tgl_berlaku_shgb]', this).val());
                formData.append('no_imb', $('input[name=no_imb]', this).val());
                var njop = $('input[name=njop]', this).val();
                njop = njop.replace(/[^\d]/g, "");
                formData.append('njop', njop);

                formData.append('nop', $('input[name=nop]', this).val());

                update_agunan(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_data_agunan();
                            $("#batal").click();
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //============================================================================================

            $('#form_edit_agunan_tampak_depan').on('submit', function(e) {
                var id = $('input[name=id_agunan_depan]', this).val();
                e.preventDefault();
                var formData = new FormData();

                formData.append('agunan_bag_depan', $('input[name=lamp_agunan_tampak_depan]', this)[0].files[0]);

                update_agunan(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            $(".close_deb").click();
                            load_data_agunan();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $('#form_edit_ktp_pas_penjamin')[0].reset();
                            $("#batal").click();
                        });
                    });
            });

            $('#form_edit_agunan_tampak_jalan').on('submit', function(e) {
                var id = $('input[name=id_agunan_jalan]', this).val();
                e.preventDefault();
                var formData = new FormData();

                formData.append('agunan_bag_jalan', $('input[name=lamp_agunan_tampak_jalan]', this)[0].files[0]);

                update_agunan(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            $(".close_deb").click();
                            load_data_agunan();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $('#form_edit_ktp_pas_penjamin')[0].reset();
                            $("#batal").click();
                        });
                    });
            });

            $('#form_edit_agunan_tampak_ruang_tamu').on('submit', function(e) {
                var id = $('input[name=id_agunan_ruang_tamu]', this).val();
                e.preventDefault();
                var formData = new FormData();

                formData.append('agunan_bag_ruangtamu', $('input[name=lamp_agunan_tampak_ruang_tamu]', this)[0].files[0]);

                update_agunan(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            $(".close_deb").click();
                            load_data_agunan();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $('#form_edit_ktp_pas_penjamin')[0].reset();
                            $("#batal").click();
                        });
                    });
            });

            $('#form_edit_agunan_tampak_dapur').on('submit', function(e) {
                var id = $('input[name=id_agunan_dapur]', this).val();
                e.preventDefault();
                var formData = new FormData();

                formData.append('agunan_bag_dapur', $('input[name=lamp_agunan_tampak_dapur]', this)[0].files[0]);

                update_agunan(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            $(".close_deb").click();
                            load_data_agunan();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $('#form_edit_ktp_pas_penjamin')[0].reset();
                            $("#batal").click();
                        });
                    });
            });

            $('#form_edit_agunan_tampak_kamar_mandi').on('submit', function(e) {
                var id = $('input[name=id_agunan_kamar_mandi]', this).val();
                e.preventDefault();
                var formData = new FormData();

                formData.append('agunan_bag_kamarmandi', $('input[name=lamp_agunan_tampak_kamar_mandi]', this)[0].files[0]);

                update_agunan(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            $(".close_deb").click();
                            load_data_agunan();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $('#form_edit_ktp_pas_penjamin')[0].reset();
                            $("#batal").click();
                        });
                    });
            });

            load_agunan = function() {
                var id = $('#form_detail input[type=hidden][name=id]').val();
                get_data_agunan({}, id)
                    .done(function(response) {
                        var data = response.data;
                        console.log(data)

                        var htmlagunantanah = [];
                        var id_agunan_tanah = {};
                        var no = 0;
                        $.each(data.data_agunan.agunan_tanah, function(index, item) {

                            var id_agunan_tanah = [];
                            id_agunan_tanah = item.id;

                            var njop = (rubah(item.njop));
                            no++;

                            var tr = [

                                '<tr>',
                                '<td>' + no + '</td>',
                                '<td>' + item.tipe_lokasi + '</td>',
                                '<td>' + item.alamat + '</td>',
                                '<td>' + item.luas_tanah + '</td>',
                                '<td>' + item.luas_bangunan + '</td>',
                                '<td>' + item.nama_pemilik_sertifikat + '</td>',
                                '<td>' + item.jenis_sertifikat + '</td>',
                                '<td>' + item.no_sertifikat + '</td>',
                                '<td>' + item.tgl_ukur_sertifikat + '</td>',
                                '<td>' + item.tgl_berlaku_shgb + '</td>',
                                '<td>' + item.no_imb + '</td>',
                                '<td>' + njop + '</td>',
                                '<td>' + item.nop + '</td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" /> </a> </td>',
                                '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '</tr>'
                            ].join('\n');
                            htmlagunantanah.push(tr);
                        })
                        $('#data_agunan_sertifikat').html(htmlagunantanah);


                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            //UPDATE DATA REKOMENDASI PINJAMAN
            $(function() {
                update_mutasi_bank = function(opts, id) {
                    var data = opts;
                    var url = '<?php echo $this->config->item('api_url'); ?>api/mutasi_bank/' + id;
                    return $.ajax({
                        url: url,
                        data: data,
                        type: 'POST',
                        processData: false,
                        contentType: false,
                        cache: false,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        beforeSend: function() {
                            let html =
                                "<div width='100%' class='text-center'>" +
                                "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                                "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                                "</div>";

                            $('#load_data').html(html);
                            $('#modal_load_data').modal('show');
                        },
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        }
                    });
                }

                //SUBMIT DATA KEUANGAN
                $('#form_edit_mutasi_bank1').on('submit', function(e) {
                    var id = $('input[name=id_mutasi_bank1]', this).val();
                    e.preventDefault();
                    var formData = new FormData();

                    formData.append('nama_bank_mutasi', $('input[type=text][id=nama_bank_mutasi_ca_1]', this).val());
                    formData.append('no_rekening_mutasi', $('input[type=text][id=no_rekening_mutasi_ca_1]', this).val());
                    formData.append('nama_pemilik_mutasi', $('input[type=text][id=nama_pemilik_mutasi_ca_1]', this).val());


                    $.each($('input[name="periode_mutasi_ca[0][]"]'), function(i, e) {
                        formData.append('periode_mutasi[]', e.value);
                    });
                    $.each($('input[name="frek_debet_mutasi_ca[0][]"]'), function(i, e) {
                        formData.append('frek_debet_mutasi[]', e.value);
                    });
                    $.each($('input[name="nominal_debet_mutasi_ca[0][]'), function(i, e) {
                        formData.append('nominal_debet_mutasi[]', e.value.replace(/[^\d]/g, ""));
                    });
                    $.each($('input[name="frek_kredit_mutasi_ca[0][]"]'), function(i, e) {
                        formData.append('frek_kredit_mutasi[]', e.value);
                    });
                    $.each($('input[name="nominal_kredit_mutasi_ca[0][]"]'), function(i, e) {
                        formData.append('nominal_kredit_mutasi[]', e.value.replace(/[^\d]/g, ""));
                    });
                    $.each($('input[name="saldo_mutasi_ca[0][]"]'), function(i, e) {
                        formData.append('saldo_mutasi[]', e.value.replace(/[^\d]/g, ""));
                    });

                    update_mutasi_bank(formData, id)
                        .done(function(res) {
                            var data = res.data;
                            bootbox.alert('Data berhasil diubah', function() {
                                $("#batal").click();
                            });
                        })
                        .fail(function(jqXHR) {
                            var data = jqXHR.responseJSON;
                            var error = "";

                            if (typeof data == 'string') {
                                error = '<p>' + data + '</p>';
                            } else {
                                $.each(data, function(index, item) {
                                    error += '<p>' + item + '</p>' + "\n";
                                });
                            }
                            bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                                $("#batal").click();
                            });
                        });
                });
            });

            //UPDATE DATA KEUANGAN
            $(function() {
                update_data_keuangan = function(opts, id) {
                    var data = opts;
                    var url = '<?php echo $this->config->item('api_url'); ?>api/data_keuangan/' + id;
                    return $.ajax({
                        url: url,
                        data: data,
                        type: 'PUT',
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        beforeSend: function() {
                            let html =
                                "<div width='100%' class='text-center'>" +
                                "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                                "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                                "</div>";

                            $('#load_data').html(html);
                            $('#modal_load_data').modal('show');
                        },
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        }
                    });
                }

                //SUBMIT DATA KEUANGAN
                $('#form_edit_data_keuangan').on('submit', function(e) {
                    var id = $('input[name=id_data_keuangan]', this).val();
                    e.preventDefault();
                    var formData = new FormData();
                    var penghasilan_per_tahun_ca = $('input[name=penghasilan_per_tahun_ca]', this).val();
                    penghasilan_per_tahun_ca = penghasilan_per_tahun_ca.replace(/[^\d]/g, "");
                    var data = {
                        no_rekening: $('input[name=no_rekening_ca]', this).val(),
                        tujuan_pembukaan_rek: $('input[name=tujuan_pembukaan_rek_ca]', this).val(),
                        penghasilan_per_tahun: penghasilan_per_tahun_ca,
                        sumber_penghasilan: $('select[name=sumber_penghasilan_ca]', this).val(),
                        pemasukan_per_bulan: $('select[name=pemasukan_per_bulan_ca]', this).val(),
                        frek_trans_pemasukan: $('select[name=frek_trans_pemasukan_ca]', this).val(),
                        pengeluaran_per_bulan: $('select[name=pengeluaran_per_bulan_ca]', this).val(),
                        frek_trans_pengeluaran: $('select[name=frek_trans_pengeluaran_ca]', this).val(),
                        sumber_dana_setoran: $('select[name=sumber_dana_setoran_ca]', this).val(),
                        tujuan_pengeluaran_dana: $('select[name=tujuan_pengeluaran_dana_ca]', this).val(),

                    }


                    update_data_keuangan(data, id)
                        .done(function(res) {
                            var data = res.data;
                            bootbox.alert('Data berhasil diubah', function() {
                                $("#batal").click();
                            });
                        })
                        .fail(function(jqXHR) {
                            var data = jqXHR.responseJSON;
                            var error = "";

                            if (typeof data == 'string') {
                                error = '<p>' + data + '</p>';
                            } else {
                                $.each(data, function(index, item) {
                                    error += '<p>' + item + '</p>' + "\n";
                                });
                            }
                            bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                                $("#batal").click();
                            });
                        });
                });
            });
            //=========================================================================================================

            //KAPASITAS BULANAN CA
            $(function() {
                update_kapasitas_bulanan_ca = function(opts, id) {
                    var data = opts;
                    var url = '<?php echo $this->config->item('api_url'); ?>api/kapasitas_bulanan/' + id;
                    return $.ajax({
                        url: url,
                        data: data,
                        type: 'PUT',
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        beforeSend: function() {
                            let html =
                                "<div width='100%' class='text-center'>" +
                                "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                                "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                                "</div>";

                            $('#load_data').html(html);
                            $('#modal_load_data').modal('show');
                        },
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        }
                    });
                }

                //SUBMIT KAPASITAS BULANAN CA
                $('#form_edit_kapasitas_bulanan_ca').on('submit', function(e) {
                    var id = $('input[name=id_kapasitas_bulanan_ca]', this).val();
                    e.preventDefault();
                    var formData = new FormData();
                    var pemasukan_debitur_ca_detail = $('input[name=pemasukan_debitur_ca_detail]', this).val();
                    pemasukan_debitur_ca_detail = pemasukan_debitur_ca_detail.replace(/[^\d]/g, "");

                    var pemasukan_pasangan_ca_detail = $('input[name=pemasukan_pasangan_ca_detail]', this).val();
                    pemasukan_pasangan_ca_detail = pemasukan_pasangan_ca_detail.replace(/[^\d]/g, "");

                    var pemasukan_penjamin_ca_detail = $('input[name=pemasukan_penjamin_ca_detail]', this).val();
                    pemasukan_penjamin_ca_detail = pemasukan_penjamin_ca_detail.replace(/[^\d]/g, "");

                    var biaya_rumah_tangga_ca_detail = $('input[name=biaya_rumah_tangga_ca_detail]', this).val();
                    biaya_rumah_tangga_ca_detail = biaya_rumah_tangga_ca_detail.replace(/[^\d]/g, "");

                    var biaya_transportasi_ca_detail = $('input[name=biaya_transportasi_ca_detail]', this).val();
                    biaya_transportasi_ca_detail = biaya_transportasi_ca_detail.replace(/[^\d]/g, "");

                    var biaya_pendidikan_ca_detail = $('input[name=biaya_pendidikan_ca_detail]', this).val();
                    biaya_pendidikan_ca_detail = biaya_pendidikan_ca_detail.replace(/[^\d]/g, "");

                    var biaya_telp_listr_air_ca_detail = $('input[name=biaya_telp_listr_air_ca_detail]', this).val();
                    biaya_telp_listr_air_ca_detail = biaya_telp_listr_air_ca_detail.replace(/[^\d]/g, "");

                    var angsuran_lain_ca_detail = $('input[name=angsuran_lain_ca_detail]', this).val();
                    angsuran_lain_ca_detail = angsuran_lain_ca_detail.replace(/[^\d]/g, "");

                    var biaya_lain_ca_detail = $('input[name=biaya_lain_ca_detail]', this).val();
                    biaya_lain_ca_detail = biaya_lain_ca_detail.replace(/[^\d]/g, "");

                    var data = {
                        pemasukan_debitur: pemasukan_debitur_ca_detail,

                        pemasukan_pasangan: pemasukan_pasangan_ca_detail,
                        pemasukan_penjamin: pemasukan_penjamin_ca_detail,
                        biaya_rumah_tangga: biaya_rumah_tangga_ca_detail,
                        biaya_transport: biaya_transportasi_ca_detail,
                        biaya_pendidikan: biaya_pendidikan_ca_detail,
                        telp_listr_air: biaya_telp_listr_air_ca_detail,
                        angsuran: angsuran_lain_ca_detail,
                        biaya_lain: biaya_lain_ca_detail,
                    }


                    update_kapasitas_bulanan_ca(data, id)
                        .done(function(res) {
                            var data = res.data;
                            bootbox.alert('Data berhasil diubah', function() {
                                $("#batal").click();
                            });
                        })
                        .fail(function(jqXHR) {
                            var data = jqXHR.responseJSON;
                            var error = "";

                            if (typeof data == 'string') {
                                error = '<p>' + data + '</p>';
                            } else {
                                $.each(data, function(index, item) {
                                    error += '<p>' + item + '</p>' + "\n";
                                });
                            }
                            bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                                $("#batal").click();
                            });
                        });
                });
            });
            //=========================================================================================================

            //PENDAPATAN PENGUSAHA CA
            update_pendapatan_usaha_ca = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/pendapatanUsahaCA/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            //UPDATE PENDAPATAN USAHA
            $('#form_edit_pendapatan_usaha_ca').on('submit', function(e) {
                var id = $('input[name=id_pendapatan_usaha_ca]', this).val();
                e.preventDefault();
                var formData = new FormData();

                var pemasukan_tunai_ca_detail = $('input[name=pemasukan_tunai_ca_detail]', this).val();
                pemasukan_tunai_ca_detail = pemasukan_tunai_ca_detail.replace(/[^\d]/g, "");
                formData.append('pemasukan_tunai', pemasukan_tunai_ca_detail);

                var pemasukan_kredit_ca_detail = $('input[name=pemasukan_kredit_ca_detail]', this).val();
                pemasukan_kredit_ca_detail = pemasukan_kredit_ca_detail.replace(/[^\d]/g, "");
                formData.append('pemasukan_kredit', pemasukan_kredit_ca_detail);

                var biaya_sewa_ca_detail = $('input[name=biaya_sewa_ca_detail]', this).val();
                biaya_sewa_ca_detail = biaya_sewa_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_sewa', biaya_sewa_ca_detail);

                var biaya_gaji_pegawai_ca_detail = $('input[name=biaya_gaji_pegawai_ca_detail]', this).val();
                biaya_gaji_pegawai_ca_detail = biaya_gaji_pegawai_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_gaji_pegawai', biaya_gaji_pegawai_ca_detail);

                var biaya_belanja_brg_ca_detail = $('input[name=biaya_belanja_brg_ca_detail]', this).val();
                biaya_belanja_brg_ca_detail = biaya_belanja_brg_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_belanja_brg', biaya_belanja_brg_ca_detail);

                var biaya_telp_listr_air_usaha_ca_detail = $('input[name=biaya_telp_listr_air_usaha_ca_detail]', this).val();
                biaya_telp_listr_air_usaha_ca_detail = biaya_telp_listr_air_usaha_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_telp_listr_air_us', biaya_telp_listr_air_usaha_ca_detail);

                var biaya_sampah_keamanan_ca_detail = $('input[name=biaya_sampah_keamanan_ca_detail]', this).val();
                biaya_sampah_keamanan_ca_detail = biaya_sampah_keamanan_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_sampah_kemanan', biaya_sampah_keamanan_ca_detail);

                var biaya_kirim_barang_ca_detail = $('input[name=biaya_kirim_barang_ca_detail]', this).val();
                biaya_kirim_barang_ca_detail = biaya_kirim_barang_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_kirim_barang', biaya_kirim_barang_ca_detail);

                var biaya_hutang_dagang_ca_detail = $('input[name=biaya_hutang_dagang_ca_detail]', this).val();
                biaya_hutang_dagang_ca_detail = biaya_hutang_dagang_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_hutang_dagang', biaya_hutang_dagang_ca_detail);

                var biaya_angsuran_ca_detail = $('input[name=biaya_angsuran_ca_detail]', this).val();
                biaya_angsuran_ca_detail = biaya_angsuran_ca_detail.replace(/[^\d]/g, "");
                formData.append('angsuran', biaya_angsuran_ca_detail);

                var biaya_lain_lain_ca_detail = $('input[name=biaya_lain_lain_ca_detail]', this).val();
                biaya_lain_lain_ca_detail = biaya_lain_lain_ca_detail.replace(/[^\d]/g, "");
                formData.append('biaya_lain_lain', biaya_lain_lain_ca_detail);

                update_pendapatan_usaha_ca(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                            // load_pendapatan_usaha();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //=========================================================================================================

            //UPDATE DATA KEUANGAN
            update_data_kualitatif = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/ring_analisa/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'PUT',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            //SUBMIT ASPEK KUALITATIF
            $('#form_edit_data_kualitatif').on('submit', function(e) {
                var id = $('input[name=id_data_kualitatif]', this).val();
                console.log(id)
                e.preventDefault();
                var formData = new FormData();

                var data = {
                    kualitatif_analisa: $('textarea[name=kualitatif_analisa_detail]', this).val(),
                    kualitatif_strenght: $('textarea[name=kualitatif_strenght_detail]', this).val(),
                    kualitatif_weakness: $('textarea[name=kualitatif_weakness_detail]', this).val(),
                    kualitatif_opportunity: $('textarea[name=kualitatif_opportunity_detail]', this).val(),
                    kualitatif_threatness: $('textarea[name=kualitatif_threatness_detail]', this).val(),
                }


                update_data_kualitatif(data, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //=========================================================================================================

            //UPDATE PENYIMPANGAN
            $('#btn_penyimpangan').on('click', function() {
                var id = $('#id_data_penyimpangan').val();
                var penyimpangan_struktur = $('#penyimpangan_struktur_detail').val();

                console.log(penyimpangan_struktur);
                console.log(id);

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Transaksi/update_penyimpangan') ?>",
                    dataType: "JSON",
                    data: {
                        id: id,
                        penyimpangan_struktur: penyimpangan_struktur
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    success: function(data) {
                        $('#batal').click();
                    }
                });
                return false;
            });

            update_struktu_pinjaman = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/master/update/OL/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }


            // klik submit update
            $('#form_edit_struktur_pinjaman').on('submit', function(e) {
                var id = $('input[name=id_struktur_pinjaman]', this).val();
                console.log(id);
                e.preventDefault();
                var formData = new FormData();
                //STRUKTUR PINJAMAN
                formData.append('produk', $('select[name=produk_struktur]', this).val());

                var plafon_kredit = $('input[name=plafon_kredit_struktur]', this).val();
                plafon_kredit = plafon_kredit.replace(/[^\d]/g, "");
                formData.append('plafon_kredit', plafon_kredit);

                formData.append('jangka_waktu', $('select[name=jangka_waktu_struktur]', this).val());

                formData.append('suku_bunga', $('input[name=suku_bunga_struktur]', this).val());

                var pembayaran_bunga = $('input[name=pembayaran_bunga_struktur]', this).val();
                pembayaran_bunga = pembayaran_bunga.replace(/[^\d]/g, "");
                formData.append('pembayaran_bunga', pembayaran_bunga);

                formData.append('akad_kredit', $('select[name=akad_kredit_struktur]', this).val());
                formData.append('ikatan_agunan', $('select[name=ikatan_agunan_struktur]', this).val());

                var biaya_provisi_struktur = $('input[name=biaya_provisi_struktur]', this).val();
                biaya_provisi_struktur = biaya_provisi_struktur.replace(/[^\d]/g, "");
                formData.append('biaya_provisi', biaya_provisi_struktur);

                var biaya_administrasi = $('input[name=biaya_administrasi_struktur]', this).val();
                biaya_administrasi = biaya_administrasi.replace(/[^\d]/g, "");
                formData.append('biaya_administrasi', biaya_administrasi);

                var biaya_credit_checking = $('input[name=biaya_credit_checking_struktur]', this).val();
                biaya_credit_checking = biaya_credit_checking.replace(/[^\d]/g, "");
                formData.append('biaya_credit_checking', biaya_credit_checking);

                var notaris = $('input[name=notaris_struktur]', this).val();
                notaris = notaris.replace(/[^\d]/g, "");
                formData.append('notaris', notaris);

                var biaya_tabungan = $('input[name=biaya_tabungan_struktur]', this).val();
                biaya_tabungan = biaya_tabungan.replace(/[^\d]/g, "");
                formData.append('biaya_tabungan', biaya_tabungan);

                //ASURANSI JIWA
                formData.append('nama_asuransi', $('select[name=nama_asuransi_jiwa_struktur]', this).val());
                formData.append('jangka_waktu', $('input[name=jangka_waktu_as_jiwa_struktur]', this).val());

                var nilai_pertanggungan_as_jiwa = $('input[name=nilai_pertanggungan_as_jiwa_struktur]', this).val();
                nilai_pertanggungan_as_jiwa = nilai_pertanggungan_as_jiwa.replace(/[^\d]/g, "");
                formData.append('nilai_pertanggungan', nilai_pertanggungan_as_jiwa);

                var premi_asuransi_jiwa = $('input[name=premi_asuransi_jiwa_sturktur]', this).val();
                premi_asuransi_jiwa = premi_asuransi_jiwa.replace(/[^\d]/g, "");
                formData.append('biaya_asuransi_jiwa', premi_asuransi_jiwa);

                formData.append('jatuh_tempo', $('input[name=jatuh_tempo_as_jiwa_struktur]', this).val());
                formData.append('berat_badan', $('input[name=berat_badan_as_jiwa_struktur]', this).val());
                formData.append('tinggi_badan', $('input[name=tinggi_badan_as_jiwa_struktur]', this).val());
                formData.append('umur_nasabah', $('input[name=umur_nasabah_as_jiwa_struktur]', this).val());
                //asuransi jaminan kebakaran
                formData.append('nama_asuransi_keb', $('select[name=nama_asuransi_kebakaran_struktur]', this).val());
                formData.append('jangka_waktu_asuransi_keb', $('input[name=jatuh_tempo_as_kebakaran_struktur]', this).val());

                var nilai_pertanggungan_keb = $('input[name=nilai_pertanggungan_as_kebakaran_struktur]', this).val();
                nilai_pertanggungan_keb = nilai_pertanggungan_keb.replace(/[^\d]/g, "");
                formData.append('nilai_pertanggungan_keb', nilai_pertanggungan_keb);

                var premi_asuransi_kebakaran = $('input[name=premi_asuransi_kebakaran_sturktur]', this).val();
                premi_asuransi_kebakaran = premi_asuransi_kebakaran.replace(/[^\d]/g, "");
                formData.append('biaya_asuransi_jaminan_kebakaran', premi_asuransi_kebakaran);


                //asuransi jaminan kendaraan
                formData.append('nama_asuransi_ken', $('select[name=nama_asuransi_kendaraan_struktur]', this).val());
                formData.append('jangka_waktu_asuransi_ken', $('input[name=jangka_waktu_as_kendaraan_struktur]', this).val());

                var nilai_pertanggungan_ken = $('input[name=nilai_pertanggungan_as_kendaraan_struktur]', this).val();
                nilai_pertanggungan_ken = nilai_pertanggungan_ken.replace(/[^\d]/g, "");
                formData.append('nilai_pertanggungan_ken', nilai_pertanggungan_ken);

                var premi_asuransi_kendaraan = $('input[name=premi_asuransi_kendaraan_sturktur]', this).val();
                premi_asuransi_kendaraan = premi_asuransi_kendaraan.replace(/[^\d]/g, "");
                formData.append('biaya_asuransi_jaminan_kendaraan', premi_asuransi_kendaraan)



                update_struktu_pinjaman(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil disimpan', function() {
                            $("#batal").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        })
                    });
            });
            //==============================================================================

            //UPDATE DATA REKOMENDASI PINJAMAN
            update_data_rekomendasi_pinjaman = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/rekom_pinjaman/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'PUT',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            //UPDATE PENYIMPANGAN
            $('#btn_rekomendasi_pinjaman').on('click', function() {
                var id = $('#id_data_rekomendasi_pinjaman').val();
                var recom_nilai_pinjaman_detail = $('#recom_nilai_pinjaman_detail').val();
                recom_nilai_pinjaman_detail = recom_nilai_pinjaman_detail.replace(/[^\d]/g, "");

                var recom_angsuran_detail = $('#recom_angsuran_detail').val();
                recom_angsuran_detail = recom_angsuran_detail.replace(/[^\d]/g, "");

                var recom_nilai_pinjaman = recom_nilai_pinjaman_detail;
                var recom_tenor = $('#recom_tenor_detail').val();
                var recom_angsuran = recom_angsuran_detail;
                var recom_produk_kredit = $('#recom_produk_kredit_detail').val();
                var bunga_pinjaman = $('#recom_bunga_pinjaman_detail').val();
                var note_recom = $('#note_recom_detail').val();

                console.log(id);
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Transaksi/update_rekomendasi_pinjaman') ?>",
                    dataType: "JSON",
                    data: {
                        id: id,
                        recom_nilai_pinjaman: recom_nilai_pinjaman,
                        recom_tenor: recom_tenor,
                        recom_angsuran: recom_angsuran,
                        recom_produk_kredit: recom_produk_kredit,
                        bunga_pinjaman: bunga_pinjaman,
                        note_recom: note_recom
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='batal text-primary batal' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    success: function(data) {
                        bootbox.alert('Data berhasil disimpan', function() {
                            $("#batal").click();
                        });
                    }
                });
                return false;
            });

            // //SUBMIT DATA KEUANGAN
            // $('#form_edit_data_rekomendasi_pinjaman').on('submit', function(e) {
            //     var id = $('input[name=id_data_rekomendasi_pinjaman]', this).val();
            //     e.preventDefault();
            //     var formData = new FormData();
            //     var recom_nilai_pinjaman_detail = $('input[name=recom_nilai_pinjaman_detail]', this).val();
            //     recom_nilai_pinjaman_detail = recom_nilai_pinjaman_detail.replace(/[^\d]/g, "");

            //     var recom_angsuran_detail = $('input[name=recom_angsuran_detail]', this).val();
            //     recom_angsuran_detail = recom_angsuran_detail.replace(/[^\d]/g, "");

            //     var data = {
            //         recom_nilai_pinjaman: recom_nilai_pinjaman_detail,
            //         recom_tenor: $('select[name=recom_tenor_detail]', this).val(),
            //         recom_angsuran: recom_angsuran_detail,
            //         recom_produk_kredit: $('select[name=recom_produk_kredit_detail]', this).val(),
            //         note_recom: $('textarea[name=note_recom_detail]', this).val(),
            //         bunga_pinjaman: $('input[name=recom_bunga_pinjaman_detail]', this).val(),
            //     }


            //     update_data_rekomendasi_pinjaman(data, id)
            //         .done(function(res) {
            //             var data = res.data;
            //             bootbox.alert('Data berhasil diubah', function() {
            //                 $("#batal").click();
            //             });
            //         })
            //         .fail(function(jqXHR) {
            //             var data = jqXHR.responseJSON;
            //             var error = "";

            //             if (typeof data == 'string') {
            //                 error = '<p>' + data + '</p>';
            //             } else {
            //                 $.each(data, function(index, item) {
            //                     error += '<p>' + item + '</p>' + "\n";
            //                 });
            //             }
            //             bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
            //                 $("#batal").click();
            //             });
            //         });
            // });
            //=========================================================================================================

            //UPDATE KUANTITATIF
            update_data_kuantitatif = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/ring_analisa/' + id;
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'PUT',
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary batal' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            //SUBMIT ASPEK KUALITATIF
            $('#form_edit_data_kuantitatif').on('submit', function(e) {
                var id = $('input[name=id_data_kuantitatif]', this).val();
                console.log(id)
                e.preventDefault();
                var formData = new FormData();
                var kuantitatif_ttl_pendapatan_detail = $('input[name=kuantitatif_ttl_pendapatan_detail]', this).val();
                kuantitatif_ttl_pendapatan_detail = kuantitatif_ttl_pendapatan_detail.replace(/[^\d]/g, "");

                var kuantitatif_ttl_pengeluaran_detail = $('input[name=kuantitatif_ttl_pengeluaran_detail]', this).val();
                kuantitatif_ttl_pengeluaran_detail = kuantitatif_ttl_pengeluaran_detail.replace(/[^\d]/g, "");

                var kuantitatif_pendapatan_detail = $('input[name=kuantitatif_pendapatan_detail]', this).val();
                kuantitatif_pendapatan_detail = kuantitatif_pendapatan_detail.replace(/[^\d]/g, "");

                var kuantitatif_angsuran_detail = $('input[name=kuantitatif_angsuran_detail]', this).val();
                kuantitatif_angsuran_detail = kuantitatif_angsuran_detail.replace(/[^\d]/g, "");


                var data = {
                    kuantitatif_ttl_pendapatan: kuantitatif_ttl_pendapatan_detail,
                    kuantitatif_ttl_pengeluaran: kuantitatif_ttl_pengeluaran_detail,
                    kuantitatif_pendapatan_bersih: kuantitatif_pendapatan_detail,
                    kuantitatif_angsuran: kuantitatif_angsuran_detail,
                    kuantitatif_ltv: $('input[name=kuantitatif_ltv_detail]', this).val(),
                    kuantitatif_dsr: $('input[name=kuantitatif_dsr_detail]', this).val(),
                    kuantitatif_idir: $('input[name=kuantitatif_idir_detail]', this).val(),
                    kuantitatif_hasil: $('input[name=kuantitatif_hasil_detail]', this).val(),
                }


                update_data_kuantitatif(data, id)
                    .done(function(res) {
                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            $("#batal").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });
            //=========================================================================

            $('#form_edit_foto_usaha ').on('submit', function(e) {
                var id = $('input[name=id_debitur_foto_usaha]', this).val();

                e.preventDefault();
                var formData = new FormData();

                $.each($('input[name="lamp_foto_usaha_edit"]', this), function(i, e) {
                    formData.append('lamp_foto_usaha[]', e.files[0]);
                });

                update_debitur(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_data_lampiran_foto_usaha();
                            $("#batal").click();
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON.message;
                        var error = "";
                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        }
                        bootbox.alert(error, function() {
                            $("#batal").click();
                        });
                    });

            });

            update_form_persetujuan_ideb = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/master/mao/' + id + '/pers_ideb';
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }
            $('#form_edit_form_persetujuan_ideb ').on('submit', function(e) {
                var id = $('input[name=id_debitur_form_persetujuan_ideb]', this).val();

                e.preventDefault();
                var formData = new FormData();

                formData.append('form_persetujuan_ideb', $('input[name=lamp_form_persetujuan_edit]', this)[0].files[0]);

                update_form_persetujuan_ideb(formData, id)
                    .done(function(res) {

                        var data = res.data;
                        bootbox.alert('Data berhasil diubah', function() {
                            load_data_lampiran_form_persetujuan_ideb();
                            $("#batal").click();
                            $(".close_deb").click();
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON.message;
                        var error = "";
                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        }
                        bootbox.alert(error, function() {
                            $("#batal").click();
                        });
                    });

            });

            load_data_lampiran_foto_usaha = function() {
                var id = $('#form_debitur input[type=hidden][name=id_debitur]').val();
                get_data_debitur({}, id)
                    .done(function(response) {
                        var data_debitur = response.data;
                        console.log(data_debitur)
                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_foto_usaha + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_foto_usaha + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_foto_usaha').html(html);


                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            load_data_lampiran_form_persetujuan_ideb = function() {
                var id = $('#form_detail input[type=hidden][name=id]').val();
                get_credit_checking({}, id)
                    .done(function(response) {
                        var data = response.data;
                        var html = [];

                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_form_persetujuan_ideb').html(html);


                    })
                    .fail(function(response) {
                        $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }


            $("#tambah_agunan_sertifikat").click(function() {
                $('#modal_tambah_agunan_sertifikat').modal('show');
                $('#form_modal_agunan_sertifikat')[0].reset();
                $('#add-lamp-agunan').hide();
                $('.add-lamp-agunan-save').attr('disabled', false);
                $('.add-lamp-agunan-depan').html('<span class="text-danger">*</span>');
                $('.add-lamp-agunan-jalan').html('<span class="text-danger">*</span>');
                $('.add-lamp-agunan-rtamu').html('<span class="text-danger">*</span>');
                $('.add-lamp-agunan-dapur').html('<span class="text-danger">*</span>');
                $('.add-lamp-agunan-rmandi').html('<span class="text-danger">*</span>');

                get_provinsi()
                    .done(function(res) {
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_modal_agunan_sertifikat select[id=select_provinsi_agunan_tbh]').html(select1 + select);
                    })

                $('#select_provinsi_agunan_tbh').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/provinsi/" + id + "/kabupaten",
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(res) {
                            var select = [];
                            var select1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select.push(option);
                            });
                            $('#form_modal_agunan_sertifikat select[id=select_kabupaten_agunan_tbh]').html(select1 + select);
                        }
                    });
                });

                $('#select_kabupaten_agunan_tbh').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/kabupaten/" + id + "/kecamatan",
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(res) {
                            var select = [];
                            var select1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select.push(option);
                            });
                            $('#form_modal_agunan_sertifikat select[id=select_kecamatan_agunan_tbh]').html(select1 + select);
                        }
                    });
                });

                $('#select_kecamatan_agunan_tbh').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/kecamatan/" + id + "/kelurahan",
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',
                        success: function(res) {
                            var select = [];
                            var select1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select.push(option);
                            });
                            $('#form_modal_agunan_sertifikat select[id=select_kelurahan_agunan_tbh]').html(select1 + select);
                        }
                    });
                });

                $('#select_kelurahan_agunan_tbh').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        url: "<?php echo $this->config->item('api_url'); ?>wilayah/kelurahan/" + id,
                        method: "GET",
                        data: {
                            id: id
                        },
                        async: false,
                        dataType: 'json',

                        success: function(response) {
                            var data = response.data;
                            $('#form_modal_agunan_sertifikat input[id=kode_pos_agunan_tbh]').val(data.kode_pos);
                        }
                    });
                });
            });
            tambah_agunan_tanah = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/agunan/tanah/' + id + '/store';
                return $.ajax({
                    url: url,
                    data: data,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";
                        $('#modal_load_data').modal('show');
                    },
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            $('#form_modal_agunan_sertifikat ').on('submit', function(e) {
                var id = $('input[name=id_trans_so_aguanan]', this).val();

                e.preventDefault();
                var formData = new FormData();

                if (document.getElementById('tipe_lokasi_agunan_tbh').value == "") {
                    bootbox.alert("Tipe Lokasi Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('alamat_agunan_tbh').value == "") {
                    bootbox.alert("Alamat Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('rt_agunan_tbh').value == "") {
                    bootbox.alert("RT Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('rw_agunan_tbh').value == "") {
                    bootbox.alert("RW Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('select_provinsi_agunan_tbh').value == "") {
                    bootbox.alert("Provinsi Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('select_kabupaten_agunan_tbh').value == "") {
                    bootbox.alert("Kabupaten Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('select_kecamatan_agunan_tbh').value == "") {
                    bootbox.alert("Kecamatan Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('select_kelurahan_agunan_tbh').value == "") {
                    bootbox.alert("Kelurahan Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('luas_tanah_tbh').value == "") {
                    bootbox.alert("Luas Tanah Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('luas_bangunan_tbh').value == "") {
                    bootbox.alert("Luas Tanah Bangunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('nama_pemilik_sertifikat_tbh').value == "") {
                    bootbox.alert("Nama Pemelik Sertifikat Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('jenis_sertifikat_tbh').value == "") {
                    bootbox.alert("Jenis Sertifikat Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('no_sertifikat_tbh').value == "") {
                    bootbox.alert("No Sertifikat Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('njop_tbh').value == "") {
                    bootbox.alert("NJOP Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('nop_tbh').value == "") {
                    bootbox.alert("NOP Belum Di Isi !!!");
                    return (false);
                }

                formData.append('tipe_lokasi_agunan', $('select[name=tipe_lokasi_agunan]', this).val());
                formData.append('alamat_agunan', $('input[name=alamat_agunan]', this).val());
                formData.append('rt_agunan', $('input[name=rt_agunan]', this).val());
                formData.append('rw_agunan', $('input[name=rw_agunan]', this).val());
                formData.append('id_prov_agunan', $('select[name=id_prov_agunan]', this).val());
                formData.append('id_kab_agunan', $('select[name=id_kab_agunan]', this).val());
                formData.append('id_kec_agunan', $('select[name=id_kec_agunan]', this).val());
                formData.append('id_kel_agunan', $('select[name=id_kel_agunan]', this).val());
                formData.append('luas_tanah', $('input[name=luas_tanah]', this).val());
                formData.append('luas_bangunan', $('input[name=luas_bangunan]', this).val());
                formData.append('nama_pemilik_sertifikat', $('input[name=nama_pemilik_sertifikat]', this).val());
                formData.append('jenis_sertifikat', $('select[name=jenis_sertifikat]', this).val());
                formData.append('no_sertifikat', $('input[name=no_sertifikat]', this).val());
                formData.append('tgl_ukur_sertifikat', $('input[name=no_ukur_sertifikat]', this).val());
                formData.append('tgl_berlaku_shgb', $('input[name=tgl_berlaku_shgb]', this).val());
                formData.append('no_imb', $('input[name=no_imb]', this).val());
                var njop = $('input[name=njop]', this).val();
                njop = njop.replace(/[^\d]/g, "");
                formData.append('njop', njop);
                formData.append('nop', $('input[name=nop]', this).val());
                // formData.append('agunan_bag_depan',$('input[name=agunan_bag_depan]',this)[0].files[0]);
                // formData.append('agunan_bag_jalan',$('input[name=agunan_bag_jalan]',this)[0].files[0]);
                // formData.append('agunan_bag_ruangtamu',$('input[name=agunan_bag_ruangtamu]',this)[0].files[0]);
                // formData.append('agunan_bag_kamarmandi',$('input[name=agunan_bag_kamarmandi]',this)[0].files[0]);
                // formData.append('agunan_bag_dapur',$('input[name=agunan_bag_dapur]',this)[0].files[0]);


                tambah_agunan_tanah(formData, id)
                    .done(function(res) {
                        let html = "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-check text-success fa-4x'></i><br><br>" +
                            "<h5>Jaminan agunan sertifikat berhasil disimpan. Lanjut upload lampiran</h5>" +
                            "<a id='batal' href='javascript:void(0)' class='btn btn-primary' data-dismiss='modal'>Ok</a>" +
                            "</div>";
                        $('#load_data').html(html);
                        load_data_agunan();
                        $('#add-lamp-agunan').show();
                        $('#input-id-lamp-agunan').val(res.data.id);
                        $('.add-lamp-agunan-save').attr('disabled', true);
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON.message;
                        var error = "Harap isi semua kolom yg tersedia";
                        bootbox.alert(error, function() {
                            $("#batal").click();
                        });

                    });

            });

            get_agunan = function(opts, id) {
                var url = '<?php echo config_item('api_url') ?>api/master/mca/' + id;
                var data = opts;

                return $.ajax({
                    // type : 'GET',
                    url: url,
                    data: data,
                    dataSrc: "",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    }
                });
            }

            load_data_agunan = function() {
                var id = $('#form_detail input[type=hidden][name=id]').val();
                get_agunan({}, id)
                    .done(function(response) {
                        var data = response.data.data_agunan.agunan_tanah;
                        console.log(data);
                        var html = [];
                        var no = 0;

                        $.each(data, function(index, item) {
                            no++;
                            var njop = (rubah(item.njop));
                            var tr = [
                                '<tr>',
                                '<td>' + no + '</td>',
                                '<td>' + item.tipe_lokasi + '</td>',
                                '<td>' + item.alamat + '</td>',
                                '<td>' + item.luas_tanah + '</td>',
                                '<td>' + item.luas_bangunan + '</td>',
                                '<td>' + item.nama_pemilik_sertifikat + '</td>',
                                '<td>' + item.jenis_sertifikat + '</td>',
                                '<td>' + item.no_sertifikat + '</td>',
                                '<td>' + item.tgl_ukur_sertifikat + '</td>',
                                '<td>' + item.tgl_berlaku_shgb + '</td>',
                                '<td>' + item.no_imb + '</td>',
                                '<td>' + njop + '</td>',
                                '<td>' + item.nop + '</td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_depan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_jalan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_ruangtamu + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_kamarmandi + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_dapur + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.agunan_bag_dapur + '" /> </a> </td>',
                                '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '</tr>'
                            ].join('\n');
                            html.push(tr);
                        });
                        $('#data_agunan_sertifikat').html(html);
                    })
                    .fail(function(response) {
                        $('#data_agunan_sertifikat').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                    });
            }

            // Upload Jaminan Agunan
            $('.add_lamp_agunan_depan').on('change', function(e) {
                e.preventDefault();
                var id = $('#input-id-lamp-agunan').val();
                var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

                var formData = new FormData();
                formData.append('agunan_bag_depan', $('input[name="agunan_bag_depan"]')[0].files[0]);

                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);

                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_agunan();
                    $(".add-lamp-agunan-depan").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    console.log(e);
                })
            });

            $('.add_lamp_agunan_jalan').on('change', function(e) {
                e.preventDefault();
                var id = $('#input-id-lamp-agunan').val();
                var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

                var formData = new FormData();
                formData.append('agunan_bag_jalan', $('input[name="agunan_bag_jalan"]')[0].files[0]);

                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);

                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_agunan();
                    $(".add-lamp-agunan-jalan").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    console.log(e);
                })
            });

            $('.add_lamp_agunan_rtamu').on('change', function(e) {
                e.preventDefault();
                var id = $('#input-id-lamp-agunan').val();
                var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

                var formData = new FormData();
                formData.append('agunan_bag_ruangtamu', $('input[name="agunan_bag_ruangtamu"]')[0].files[0]);

                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_agunan();
                    $(".add-lamp-agunan-rtamu").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    console.log(e);
                })
            });

            $('.add_lamp_agunan_dapur').on('change', function(e) {
                e.preventDefault();
                var id = $('#input-id-lamp-agunan').val();
                var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

                var formData = new FormData();
                formData.append('agunan_bag_dapur', $('input[name="agunan_bag_dapur"]')[0].files[0]);

                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_agunan();
                    $(".add-lamp-agunan-dapur").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    console.log(e);
                })
            });

            $('.add_lamp_agunan_rmandi').on('change', function(e) {
                e.preventDefault();
                var id = $('#input-id-lamp-agunan').val();
                var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

                var formData = new FormData();
                formData.append('agunan_bag_kamarmandi', $('input[name="agunan_bag_kamarmandi"]')[0].files[0]);

                $.ajax({
                    type: "post",
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_agunan();
                    $(".add_lamp_agunan_rmandi").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    console.log(e);
                })
            });

            load_data_penjamin = function() {
                var id = $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val();
                get_penjamin({}, id)
                    .done(function(response) {
                        var data = response.data;
                        var htmlpenjamin1 = [];
                        var id_penjamin = {};
                        $.each(data.data_penjamin, function(index, item) {
                            var id_penjamin = [];
                            id_penjamin = item.id;
                            console.log(id_penjamin);

                            var jenis_kelamin_pen = "";

                            if (item.jenis_kelamin == 'L') {
                                jenis_kelamin_pen = 'LAKI-LAKI';
                            } else {
                                jenis_kelamin_pen = 'PEREMPUAN';
                            }

                            var tr = [

                                '<tr>',
                                '<td style="width:50px"><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_penjamin"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '<td style="width:210px">' + item.nama_ktp + '</td>',
                                '<td style="width:210px">' + item.nama_ibu_kandung + '</td>',
                                '<td>' + item.no_ktp + '</td>',
                                '<td>' + item.no_npwp + '</td>',
                                '<td style="width:135px">' + item.tempat_lahir + '</td>',
                                '<td style="width:137px">' + item.tgl_lahir + '</td>',
                                '<td style="width:160px">' + jenis_kelamin_pen + '</td>',
                                '<td style="width:285px">' + item.alamat_ktp + '</td>',
                                '<td>' + item.no_telp + '</td>',
                                '<td style="width:185px">' + item.hubungan_debitur + '</td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" /> </a> </td>',
                                '<td style="width:200px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp_pasangan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp_pasangan + '" /> </a> </td>',
                                '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px"style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_kk + '" /> </a> </td>',
                                '<td style="width:180px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_buku_nikah + '" /> </a> </td>',


                                '</tr>'
                            ].join('\n');
                            htmlpenjamin1.push(tr);
                        })
                        $('#data_penjamin').html(htmlpenjamin1);
                    })
            }

            //SUBMIT TAMBAH PENJAMIN
            $('#form_modal_tambah_penjamin ').on('submit', function(e) {
                var id = $('input[name=add_id_so_penjamin]', this).val();
                e.preventDefault();
                var formData = new FormData();

                if (document.getElementById('add_nama_penjamin').value == "") {
                    bootbox.alert("Nama Penjamin Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_nama_ibu_kandung_penjamin').value == "") {
                    bootbox.alert("Nama Ibu Kandung Penjamin Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_no_ktp_penjamin').value == "") {
                    bootbox.alert("No KTP Penjamin Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_no_ktp_penjamin').value.length < 16) {
                    bootbox.alert("No KTP Penjamin Harus 16 Digit !!!");
                    return (false);
                }
                if (document.getElementById('add_tempat_lahir_penjamin').value == "") {
                    bootbox.alert("Tempat Lahir Penjamin Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_tgl_lahir_penjamin').value == "") {
                    bootbox.alert("Tanggal Lahir Penjamin Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_jenis_kelamin_penjamin').value == "") {
                    bootbox.alert("Jenis Kelamin Penjamin Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('add_alamat_ktp_penjamin').value == "") {
                    bootbox.alert("Alamat Penjamin Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_notelp_penjamin').value == "") {
                    bootbox.alert("No Telpon Penjamin Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_hubungan_penjamin').value == "") {
                    bootbox.alert("Hubungan Penjamin Belum Di Pilih !!!");
                    return (false);
                }
                // if (document.getElementById('add_pekerjaan_pen').value == "") {
                //     bootbox.alert("Pekerjaan Penjamin Belum Di Pilih !!!");
                //     return (false);
                // }
                // if (document.getElementById('add_nama_perusahaan_penjamin').value == "") {
                //     bootbox.alert("Nama Perusahaan Penjamin Tidak Boleh Kosong !!!");
                //     return (false);
                // }
                // if (document.getElementById('add_posisi_usaha_penjamin').value == "") {
                //     bootbox.alert("Posisi Pekerjaan Penjamin Tidak Boleh Kosong !!!");
                //     return (false);
                // }
                // if (document.getElementById('add_jenis_usaha_penjamin').value == "") {
                //     bootbox.alert("Jenis Usaha Perusahaan Penjamin Tidak Boleh Kosong !!!");
                //     return (false);
                // }
                //Data Debitur
                formData.append('nama_ktp_pen', $('input[name=add_nama_penjamin]', this).val());
                formData.append('nama_ibu_kandung_pen', $('input[name=add_nama_ibu_kandung_penjamin]', this).val());
                formData.append('no_ktp_pen', $('input[name=add_no_ktp_penjamin]', this).val());
                formData.append('no_npwp_pen', $('select[name=add_no_npwp_penjamin]', this).val());
                formData.append('tempat_lahir_pen', $('input[name=add_tempat_lahir_penjamin]', this).val());
                formData.append('tgl_lahir_pen', $('input[name=add_tgl_lahir_penjamin]', this).val());
                formData.append('jenis_kelamin_pen', $('input[name=add_jenis_kelamin_penjamin]', this).val());
                formData.append('alamat_ktp_pen', $('textarea[name=add_alamat_ktp_penjamin]', this).val());
                formData.append('no_telp_pen', $('input[name=add_notelp_penjamin]', this).val());
                formData.append('hubungan_debitur_pen', $('select[name=add_hubungan_penjamin]', this).val());
                formData.append('pekerjaan_pen', $('select[name=add_pekerjaan_pen]', this).val());
                formData.append('nama_tempat_kerja_pen', $('input[name=add_nama_perusahaan_penjamin]', this).val());
                formData.append('posisi_pekerjaan_pen', $('input[name=add_posisi_usaha_penjamin]', this).val());
                formData.append('jenis_pekerjaan_pen', $('input[name=add_jenis_usaha_penjamin]', this).val());
                formData.append('alamat_tempat_kerja_pen', $('input[name=add_alamat_usaha_kantor_penjamin]', this).val());
                formData.append('id_prov_tempat_kerja_pen', $('select[name=add_provinsi_kantor_penjamin]', this).val());
                formData.append('id_kab_tempat_kerja_pen', $('select[name=add_kabupaten_kantor_penjamin]', this).val());
                formData.append('id_kec_tempat_kerja_pen', $('select[name=add_kecamatan_kantor_penjamin]', this).val());
                formData.append('id_kel_tempat_kerja_pen', $('select[name=add_kelurahan_kantor_penjamin]', this).val());
                formData.append('rt_tempat_kerja_pen', $('input[name=add_rt_usaha_kantor_penjamin]', this).val());
                formData.append('rw_tempat_kerja_pen', $('input[name=add_rw_usaha_kantor_penjamin]', this).val());
                formData.append('tgl_mulai_kerja_pen', $('input[name=add_tgl_mulai_kerja]', this).val());
                formData.append('no_telp_tempat_kerja_pen', $('input[name=add_no_telp_kantor_usaha]', this).val());

                tambah_penjamin(formData, id)
                    .done(function(res) {
                        var data = res.data;
                        console.log(data);
                        bootbox.alert('Lanjut lengkapi lampiran !!!', function() {
                            $("#batal").click();
                            $("#lamp_penjamin").click();
                            load_data_penjamin();
                            $("#add-lamp-penjamin").show();
                            $("#form_input_data_penjamin").hide();
                            $("#add_simpan_penjamin").hide();
                            $('#form_modal_tambah_penjamin input[name=add_id_penjamin]').val(data.id);
                        });
                    })
                    .fail(function(jqXHR) {
                        var data = jqXHR.responseJSON;
                        var error = "";

                        if (typeof data == 'string') {
                            error = '<p>' + data + '</p>';
                        } else {
                            $.each(data, function(index, item) {
                                error += '<p>' + item + '</p>' + "\n";
                            });
                        }
                        bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                            $("#batal").click();
                        });
                    });
            });

            //CHANGE KTP PENJAMIN
            $('.add_lamp_ktp_penjamin').on('change', function(e) {
                e.preventDefault();
                var id = $('#add_id_penjamin').val();
                var url = '<?php echo $this->config->item('api_url'); ?>api/penjamin/' + id;


                var formData = new FormData();
                formData.append('lamp_ktp_pen', $('input[name="add_lamp_ktp_penjamin"]')[0].files[0]);

                $.ajax({
                    url: url,
                    data: formData,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_penjamin();
                    $(".add-lamp-ktp-penjamin").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                })
            });

            //CHANGE KK PENJAMIN
            $('.add_lamp_kk_penjamin').on('change', function(e) {
                e.preventDefault();
                var id = $('#add_id_penjamin').val();
                var url = '<?php echo $this->config->item('api_url'); ?>api/penjamin/' + id;

                var formData = new FormData();
                formData.append('lamp_kk_pen', $('input[name="add_lamp_kk_penjamin"]')[0].files[0]);

                $.ajax({
                    url: url,
                    data: formData,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_penjamin();
                    $(".add-lamp-kk-penjamin").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                })
            });

            //CHANGE KTP PAS PENJAMIN
            $('.add_lamp_ktp_pas_penjamin').on('change', function(e) {
                e.preventDefault();
                var id = $('#add_id_penjamin').val();
                var url = '<?php echo $this->config->item('api_url'); ?>api/penjamin/' + id;

                var formData = new FormData();
                formData.append('lamp_ktp_pasangan_pen', $('input[name="add_lamp_ktp_pas_penjamin"]')[0].files[0]);

                $.ajax({
                    url: url,
                    data: formData,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_penjamin();
                    $(".add-lamp-ktp-pas-penjamin").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                })
            });

            //CHANGE BUKU NIKAH PENJAMIN
            $('.add_lamp_buku_nikah_penjamin').on('change', function(e) {
                e.preventDefault();
                var id = $('#add_id_penjamin').val();
                var url = '<?php echo $this->config->item('api_url'); ?>api/penjamin/' + id;

                var formData = new FormData();
                formData.append('lamp_buku_nikah_pen', $('input[name="add_lamp_buku_nikah_penjamin"]')[0].files[0]);

                $.ajax({
                    url: url,
                    data: formData,
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    headers: {
                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                    },
                    beforeSend: function() {
                        let html =
                            "<div width='100%' class='text-center'>" +
                            "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                            "Mohon tunggu sedang upload...<br><br>" +
                            "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                            "</div>";

                        $('#load_data').html(html);
                        $('#modal_load_data').modal('show');
                    }
                }).done(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-check fa-4x text-success'></i><br><br>" +
                        "Upload berhasil<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                    load_data_penjamin();
                    $(".add-lamp-buku-nikah-penjamin").html(' <i class="fa fa-check text-success"></i>');
                }).fail(function(e) {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-times fa-4x text-danger'></i><br><br>" +
                        "Upload gagal<br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a><br><br>" +
                        "</div>";
                    $('#load_data').html(html);
                })
            });

            //SUBMIT TAMBAH PENJAMIN
            $('#form_modal_tambah_analisa_cc ').on('submit', function(e) {

                if (document.getElementById('add_nama_bank').value == "") {
                    bootbox.alert("Nama Bank Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_plafon').value == "") {
                    bootbox.alert("Plafon Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_baki_debet').value == "") {
                    bootbox.alert("Baki Debet Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_angsuran').value == "") {
                    bootbox.alert("Angsuran Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_collectabilitas').value == "") {
                    bootbox.alert("Collectabilitas Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('add_jenis_kredit').value == "") {
                    bootbox.alert("Jenis Kredit Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('edit_id_info_analisa_cc').value == "") {
                    var id = $('input[name=add_id_so_analisa_cc]', this).val();
                    e.preventDefault();
                    var formData = new FormData();
                    formData.append('nama_bank_acc', $('input[name=add_nama_bank]', this).val());
                    var plafon = $('input[name=add_plafon]', this).val();
                    plafon = plafon.replace(/[^\d]/g, "");
                    formData.append('plafon_acc', plafon);

                    var baki_debet_acc = $('input[name=add_baki_debet]', this).val();
                    baki_debet_acc = baki_debet_acc.replace(/[^\d]/g, "");
                    formData.append('baki_debet_acc', baki_debet_acc);

                    var angsuran_acc = $('input[name=add_angsuran]', this).val();
                    angsuran_acc = angsuran_acc.replace(/[^\d]/g, "");
                    formData.append('angsuran_acc', angsuran_acc);

                    formData.append('collectabilitas_acc', $('input[name=add_collectabilitas]', this).val());
                    formData.append('jenis_kredit_acc', $('input[name=add_jenis_kredit]', this).val());

                    tambah_analisa_cc(formData, id)
                        .done(function(res) {
                            var data = res.data;
                            console.log(data);
                            bootbox.alert('Data berhasil disimpan', function() {
                                $("#batal").click();
                                $('#form_modal_tambah_analisa_cc')[0].reset();
                                load_informasi_cc();
                            });
                        })
                        .fail(function(jqXHR) {
                            var data = jqXHR.responseJSON;
                            var error = "";

                            if (typeof data == 'string') {
                                error = '<p>' + data + '</p>';
                            } else {
                                $.each(data, function(index, item) {
                                    error += '<p>' + item + '</p>' + "\n";
                                });
                            }
                            bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                                $("#batal").click();
                            });
                        });
                } else {
                    var id = $('input[name=edit_id_info_analisa_cc]', this).val();
                    e.preventDefault();
                    var formData = new FormData();
                    var add_plafon = $('input[name=add_plafon]', this).val();
                    add_plafon = add_plafon.replace(/[^\d]/g, "");
                    var add_baki_debet = $('input[name=add_baki_debet]', this).val();
                    add_baki_debet = add_baki_debet.replace(/[^\d]/g, "");
                    var add_angsuran = $('input[name=add_angsuran]', this).val();
                    add_angsuran = add_angsuran.replace(/[^\d]/g, "");
                    var data = {
                        nama_bank_acc: $('input[name=add_nama_bank]', this).val(),
                        plafon_acc: add_plafon,
                        baki_debet_acc: add_baki_debet,
                        angsuran_acc: add_angsuran,
                        collectabilitas_acc: $('input[name=add_collectabilitas]', this).val(),
                        jenis_kredit_acc: $('input[name=add_jenis_kredit]', this).val(),

                    }
                    edit_analisa_cc(data, id)
                        .done(function(res) {
                            var data = res.data;
                            console.log(data);
                            bootbox.alert('Data berhasil diubah', function() {
                                $("#batal").click();
                                $('#form_modal_tambah_analisa_cc')[0].reset();
                                load_informasi_cc();
                            });
                        })
                        .fail(function(jqXHR) {
                            var data = jqXHR.responseJSON;
                            var error = "";

                            if (typeof data == 'string') {
                                error = '<p>' + data + '</p>';
                            } else {
                                $.each(data, function(index, item) {
                                    error += '<p>' + item + '</p>' + "\n";
                                });
                            }
                            bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!', function() {
                                $("#batal").click();
                            });
                        });
                }
            });

            load_informasi_cc = function() {
                var id = $('#form_detail input[type=hidden][name=id]').val();
                get_detail_ca({}, id)
                    .done(function(response) {
                        var data = response.data;
                        var htmlinformasi_analisa_credit = [];
                        var htmlinformasi_analisa_credit_tot = [];
                        $.each(data.informasi_analisa_cc.table, function(index, item) {
                            var plafon = (rubah(item.plafon));
                            var baki_debet = (rubah(item.baki_debet));
                            var angsuran = (rubah(item.angsuran));
                            var tr = [
                                '<tr>',
                                '<td style="width:50px"><button type="button" class="btn btn-info btn-sm edit" data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '<td width="250">' + item.nama_bank + '</td>',
                                '<td width="200">' + plafon + '</td>',
                                '<td width="200">' + baki_debet + '</td>',
                                '<td width="200">' + angsuran + '</td>',
                                '<td width="30">' + item.collectabilitas + '</td>',
                                '<td width="150">' + item.jenis_kredit + '</td>',
                                '</tr>',
                            ].join('\n');
                            htmlinformasi_analisa_credit.push(tr);
                        })
                        var total_plafon = (rubah(data.informasi_analisa_cc.total_plafon));
                        var total_baki_debet = (rubah(data.informasi_analisa_cc.total_baki_debet));
                        var total_angsuran = (rubah(data.informasi_analisa_cc.angsuran));
                        var tr = [
                            '<tr style="font-size:15px">',
                            '<td>-</td>',
                            '<td>-</td>',
                            '<td>' + total_plafon + '</td>',
                            '<td>' + total_baki_debet + '</td>',
                            '<td>' + total_angsuran + '</td>',
                            '<td>' + data.informasi_analisa_cc.collectabitas_tertinggi + '</td>',
                            '<td>-</td>',
                            '</tr>',
                        ].join('\n');
                        htmlinformasi_analisa_credit_tot.push(tr);
                        $('#data_informasi_analisa_credit').html(htmlinformasi_analisa_credit);
                        $('#data_informasi_analisa_credit_tot').html(htmlinformasi_analisa_credit_tot);
                    })
            }

            $('#data_informasi_analisa_credit').on('click', '.edit', function(e) {
                e.preventDefault();
                $('#form_modal_tambah_analisa_cc')[0].reset();
                $('#modal_tambah_analisa_cc').modal('show');
                $('#form_modal_tambah_analisa_cc input[name=edit_id_info_analisa_cc]').val($(this).attr('data'));
            });
        </script>