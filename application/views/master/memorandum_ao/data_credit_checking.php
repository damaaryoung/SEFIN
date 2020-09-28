<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Account Officer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Account Officer</li>
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
                            <table id="table_ao" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
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
                                            Nama SO
                                        </th>
                                        <th>
                                            Asal Data
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
                                <tbody id="data_creditchecking" style="font-size: 12px">
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
                                            Nama SO
                                        </th>
                                        <th>
                                            Asal Data
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
    <!--     <section class="content-header"> -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Account Officer</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Account Officer</li>
                </ol>
            </div>
        </div>
    </div>
    <div id="form_detail" method="GET">
        <div class="col-md-12">
            <div class="box box-primary" style="background-color: #ffffff1f">
                <div class="box-header with-border">
                    <h3 class="box-title brand-text font-weight-light" style="font-size: 20px; height: 9px;">Data Pengajuan</h3>
                </div>
                <div class="box-body">
                    <form id="form_fasilitas">
                        <div class="card mb-3" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_1" role="button" aria-expanded="false" aria-controls="collapse_1">
                                <a class="text-light">
                                    <b>DATA AO</b>
                                </a>
                            </div>
                            <input type="hidden" name="id_fasilitas_pinjaman" value="">
                            <div class="card-body collapse" id="collapse_1">
                                <div class="row" id="data_user">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No SO</label>
                                            <input type="text" class="form-control" name="nomor_so" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama SO</label>
                                            <input type="text" class="form-control" name="nama_so" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Asal Data<span class="required_notification">*</span></label>
                                            <select name="asal_data" id="select_asal_data" class="form-control" style="width: 100%;" readonly>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Marketing 1/CGC/EGC/Tele Sales</label>
                                            <div class="input-group">
                                                <input type="text" name="nama_marketing" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Plafon</label>
                                            <input type="text" id="plafon_deb" name="plafon" class="form-control uang">
                                        </div>
                                        <div class="form-group">
                                            <label>Tenor<span class="required_notification">*</span></label>
                                            <select name="tenor" id="tenor" class="form-control select2 select2-danger" style="width: 100%;">

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Pinjaman<span class="required_notification">*</span></label>
                                            <select name="jenis_pinjaman" id="select_jenis_pinjaman" class="form-control select2 select2-danger" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan Pinjaman</label>
                                            <textarea name="tujuan_pinjaman" class="form-control " onkeyup="this.value = this.value.toUpperCase()" rows="5" cols="40"></textarea>
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
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_2" role="button" aria-expanded="false" aria-controls="collapse_2">
                            <a class="text-light">
                                <b>DATA CALON DEBITUR</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_2">
                            <form id="form_debitur">
                                <input type="hidden" id="id_debitur" name="id_debitur" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Lengkap <small><i>(Sesuai KTP Tanpa Gelar)</i></small><span class="required_notification">*</span></label>
                                            <input type="text" name="nama_debitur" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Gelar Keagamaan</label>
                                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="gelar_keagamaan">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Gelar Pendidikan</label>
                                                <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="gelar_pendidikan">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Jenis Kelamin<span class="required_notification">*</span></label>
                                                <select name="jenis_kelamin" id="jenis_kelamin1" class="form-control" onchange="showDiv()">
                                                    <option value="">-- Pilih Status Kelamin --</option>
                                                    <option id="L" value="L">LAKI-LAKI</option>
                                                    <option id="P" value="P">PEREMPUAN</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Status Pernikahan<span class="required_notification">*</span></label>
                                                <select name="status_nikah" id="status_nikah" class="form-control" onchange="showDiv()">
                                                    <option value="">--Pilih--</option>
                                                    <option id="nikah" value="Menikah">Menikah</option>
                                                    <option id="single" value="Single">Single</option>
                                                    <option id="cerai" value="Janda/Duda">Janda/Duda</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tinggi Badan (cm)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Berat Badan (kg)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="berat_badan" name="berat_badan" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Ibu Kandung<span class="required_notification">*</span></label>
                                            <input type="text" name="ibu_kandung" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>No KTP<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_ktp" maxlength="16" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>No KTP KK<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_ktp_kk" maxlength="16" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>No KK<span class="required_notification">*</span></label>
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
                                            <select id="agama" name="agama" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <option id="agama_deb1" value="ISLAM">ISLAM</option>
                                                <option id="agama_deb2" value="KATHOLIK ">KATHOLIK</option>
                                                <option id="agama_deb3" value="KRISTEN">KRISTEN</option>
                                                <option id="agama_deb4" value="HINDU">HINDU</option>
                                                <option id="agama_deb5" value="BUDHA">BUDHA</option>
                                                <option id="agama_deb6" value="LAIN2 KEPERCAYAAN">LAIN2 KEPERCAYAAN</option>
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
                                            <label>Provinsi<span class="required_notification">*</span></label>
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
                                                <label>Kode POS</label>
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
                                        <div class="row">
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
                                        <div class="row">
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
                                                <input type="text" class="form-control" name="kode_pos_domisili" maxlength="5" onkeypress="return hanyaAngka(event)">
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

                                        <div class="form-row">
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
                                            <label>Email<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInput1">Alamat Korespondensi</label>
                                                <select id="alamat_surat" name="alamat_surat" class="form-control ">
                                                    <option id="alamat_surat_ktp" value="ALAMAT KTP">ALAMAT KTP</option>
                                                    <option id="alamat_surat_domisili" value="ALAMAT DOMISILI">ALAMAT DOMISILI</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInput1">Pekerjaan<span class="required_notification">*</span></label>
                                                <select id="pekerjaan_deb" name="pekerjaan_deb" class="form-control ">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Perusahaan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Posisi<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="posisi" name="posisi" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Jenis Usaha<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="jenis_usaha" name="jenis_usaha" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat Usaha/Kantor<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="alamat_usaha_kantor" name="alamat_usaha_kantor" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RT<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="rt_usaha_kantor" name="rt_usaha_kantor" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>RW<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="rw_usaha_kantor" name="rw_usaha_kantor" maxlength="3" onkeypress="return hanyaAngka(event)">
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
                                                <input type="text" name="kode_pos_kantor" id="kode_pos_kantor" class="form-control">
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
                                                    <input type="text" name="masa_kerja_usaha" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>No Telpon Kantor/Usaha<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="no_telp_kantor_usaha" name="no_telp_kantor_usaha" maxlength="13" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <button type="button" class="btn btn-primary" id="tambah_data_anak" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Data Anak</i></button>
                                        <table class="table table-bordered table-hover table-sm" style="min-width: 50%">
                                            <thead style="font-size: 14px" class="bg-success">
                                                <tr>
                                                    <th>
                                                        Nama Anak
                                                    </th>
                                                    <th>
                                                        Tanggal Lahir
                                                    </th>
                                                    <th>
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_anak" style="font-size: 13px">
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success submit"><i class="fa fa-save"></i>&nbsp;Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-3" id="form_pasangan_debitur">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_3" role="button" aria-expanded="false" aria-controls="collapse_3">
                            <a class="text-light">
                                <b>DATA PASANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_3">
                            <form id="form_pasangan">
                                <input type="hidden" id="id_pasangan" name="id_pasangan" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Lengkap <small><i>(Sesuai KTP)</i></small></label>
                                            <input type="text" name="nama_lengkap_pas" class="form-control " onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Nama Ibu Kandung</label>
                                            <input type="text" name="nama_ibu_kandung_pas" class="form-control " onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Jenis Kelamin</label>
                                            <select name="jenis_kelamin_pas" class="form-control ">
                                                <option value="">Pilih</option>
                                                <option id="L_pas" value="L">Laki-Laki</option>
                                                <option id="P_pas" value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Alamat<small><i>(Sesuai KTP)</i></small></label>
                                            <textarea name="alamat_ktp_pas" class="form-control " rows="5" cols="40" onkeyup="this.value = this.value.toUpperCase()"></textarea>
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
                                            <div class="form-group">
                                                <label for="exampleInput1">No Telpon</label>
                                                <input type="text" name="no_telp_pas" class="form-control " maxlength="13" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir_pas" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
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
                                            <input type="text" name="nama_perusahaan_pas" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label class="bmd-label-floating">Posisi</label>
                                                    <input type="text" class="form-control" name="posisi_pekerjaan_pas" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="bmd-label-floating">Jenis Usaha</label>
                                                    <input type="text" class="form-control" name="jenis_usaha_pas" onkeyup="this.value = this.value.toUpperCase()">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-8">
                                                <label>Alamat Usaha/Kantor</label>
                                                <input type="text" class="form-control" name="alamat_usaha_kantor_pas" onkeyup="this.value = this.value.toUpperCase()">
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
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select name="provinsi_kantor_usaha_pas" id="select_provinsi_kantor_usaha_pas" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                <option value="">--Pilih--</option>
                                            </select>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Kabupaten/Kota</label>
                                                <select id="select_kab_kantor_usaha_pas" name="id_kabupaten_kantor_usaha_pas" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Kecamatan</label>
                                                <select name="kecamatan_kantor_usaha_pas" id="select_kecamatan_kantor_usaha_pas" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Kelurahan</label>
                                                <select name="kelurahan_kantor_usaha_pas" id="select_kelurahan_kantor_usaha_pas" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
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
                                            <button type="submit" class="btn btn-success submit"><i class="fa fa-save"></i>&nbsp;Update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <form id="form_penjamin">
                        <div class="card mb-3" id="formku">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_4" role="button" aria-expanded="false" aria-controls="collapse_4">
                                <a class="text-light">
                                    <b>DATA PENJAMIN</b>
                                </a>
                            </div>
                            <input type="hidden" id="id_trans_so_pen" name="id_trans_so_pen">
                            <div class="card-body collapse" id="collapse_4">
                                <div class="box-body table-responsive no-padding">
                                    <button type="button" class="btn btn-primary" id="tambah_penjamin" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                    <table id="example2" class="table table-bordered table-hover table-sm" style="min-width: 3300px">
                                        <thead style="font-size: 12px">
                                            <tr>
                                                <th width="20px">
                                                    Aksi
                                                </th>
                                                <th>
                                                    Nama KTP
                                                </th>
                                                <th>
                                                    Nama Ibu Kandung
                                                </th>
                                                <th width="75px">
                                                    No KTP
                                                </th>
                                                <th width="75px">
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
                                                <th width="75px">
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
                                        <tbody id="data_penjamin" style="font-size: 12px">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card mb-3" id="lamp_deb">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_5" role="button" aria-expanded="false" aria-controls="collapse_5">
                            <a class="text-light">
                                <b>LAMPIRAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_5">
                            <div class="row">
                                <div class="col-md-4" id="ktp">
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
                                <div class="col-md-4" id="kk">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kartu Keluarga</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_kk"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_kk">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="sertifikat">
                                    <div class="form-group">
                                        <label>Sertifikat</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_sertifikat"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_sertifikat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="pbb">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Lampiran PBB</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_pbb "><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_pbb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="imb">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">IMB</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_imb "><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_imb">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="form_ktp_pasangan">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Lampiran KTP Pasangan</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_ktp_pasangan"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_ktp_pasangan">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="form_buku_nikah">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Lampiran Buku Nikah</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_buku_nikah"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_buku_nikah">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="lampiran_ideb">
                                    <div class="form-group">
                                        <label>Lampiran IDEB</label>
                                        <div id="dataideb">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="lampiran_pefindo">
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
            <textarea name="notes_so" style="width: 100%" rows="5" readonly></textarea>
        </div>
        <div class="col-md-12" id="input_memorandum_ao">
            <form id="form_input_ao">
                <input type="hidden" name="id" value="">
                <!-- AREA CHART -->
                <div class="box box-primary" style="background-color: #ffffff1f">
                    <div class="box-header with-border">
                        <h3 class="box-title font-weight-light ao" style="font-size: 20px; height: 9px;">Input Memorandum AO</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group" id="status_ao">
                            <label>Status<span class="required_notification">*</span></label>
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary2" value="1" name="status_ao1">
                                    <label for="radioPrimary2">Recommend
                                    </label>
                                </div>
                                <div class="icheck-danger d-inline">
                                    <input type="radio" id="radioPrimary3" value="2" name="status_ao2">
                                    <label for="radioPrimary3">Not Recommend
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao form_ao" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_6" role="button" aria-expanded="false" aria-controls="collapse_6">
                                <a class="text-light">
                                    <b>VERIFIKASI DOKUMEN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>KTP Calon Debitur<span class="required_notification">*</span></label>
                                            <select id="ver_ktp_calon_debitur" name="ver_ktp_calon_debitur" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>KTP Pasangan<span class="required_notification">*</span></label>
                                            <select id="ver_ktp_pasangan" name="ver_ktp_pasangan" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Kartu Keluarga<span class="required_notification">*</span></label>
                                            <select id="ver_kk" name="ver_kk" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Surat Akta Nikah<span class="required_notification">*</span></label>
                                            <select id="ver_akta_nikah" name="ver_akta_nikah" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Surat Cerai<span class="required_notification">*</span></label>
                                            <select id="ver_surat_cerai" name="ver_surat_cerai" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Surat Akta Kematian<span class="required_notification">*</span></label>
                                            <select id="ver_akta_kematian" name="ver_akta_kematian" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>SPPT PBB<span class="required_notification">*</span></label>
                                            <select id="ver_sttp_pbb" name="ver_sttp_pbb" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sertifikat<span class="required_notification">*</span></label>
                                            <select id="ver_sertifikat" name="ver_sertifikat" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>IMB<span class="required_notification">*</span></label>
                                            <select id="ver_imb" name="ver_imb" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Slip Gaji/Pembukuan Usaha<span class="required_notification">*</span></label>
                                            <select id="ver_slip_gaji" name="ver_slip_gaji" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Surat Keterangan Kerja/ Usaha<span class="required_notification">*</span></label>
                                            <select id="ver_keterangan_kerja_usaha" name="ver_keterangan_kerja_usaha" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Rekening Tabungan<span class="required_notification">*</span></label>
                                            <select id="ver_rekening_tabungan" name="ver_rekening_tabungan" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Data Penjamin<span class="required_notification">*</span></label>
                                            <select id="ver_data_penjamin" name="ver_data_penjamin" class="form-control">
                                                <option value="">-- Pilih Verifikasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Catatan dan Analisa Sederhana<span class="required_notification">*</span></label>
                                            <textarea id="catatan_verifikasi" name="catatan_verifikasi" class="form-control " rows="3" cols="40" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao form_ao" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_7" role="button" aria-expanded="false" aria-controls="collapse_7">
                                <a class="text-light">
                                    <b>VALIDASI SAAT SURVEI</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Calon Debitur<span class="required_notification">*</span></label>
                                            <select id="val_calon_debitur" name="val_calon_debitur" class="form-control">
                                                <option value="">-- Pilih Validasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pasangan Calon Debitur<span class="required_notification">*</span></label>
                                            <select id="val_pas_calon_debitur" name="val_pas_calon_debitur" class="form-control">
                                                <option value="">-- Pilih Validasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Penjamin<span class="required_notification">*</span></label>
                                            <select id="val_penjamin" name="val_penjamin" class="form-control">
                                                <option value="">-- Pilih Validasi --</option>
                                                <option value="1">ADA</option>
                                                <option value="0">TIDAK ADA</option>
                                                <option value="2">ADA KEJANGGALAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Domisili Tempat Tinggal<span class="required_notification">*</span></label>
                                            <select id="val_domisili_tinggal" name="val_domisili_tinggal" class="form-control">
                                                <option value="">-- Pilih Validasi --</option>
                                                <option value="1">SESUAI</option>
                                                <option value="0">TIDAK SESUAI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Agunan<span class="required_notification">*</span></label>
                                            <select id="val_agunan_tanah" name="val_agunan_tanah" class="form-control">
                                                <option value="">-- Pilih Validasi --</option>
                                                <option value="1">SESUAI</option>
                                                <option value="0">TIDAK SESUAI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pekerjaan / Usaha<span class="required_notification">*</span></label>
                                            <select id="val_pekerjaan" name="val_pekerjaan" class="form-control">
                                                <option value="">-- Pilih Validasi --</option>
                                                <option value="1">SESUAI</option>
                                                <option value="0">TIDAK SESUAI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Cek Lingkungan<span class="required_notification">*</span></label>
                                            <select id="val_cek_lingkungan" name="val_cek_lingkungan" class="form-control">
                                                <option value="">-- Pilih Validasi --</option>
                                                <option value="1">SESUAI</option>
                                                <option value="0">TIDAK SESUAI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Catatan Hasil Cek dan Analisa Sederhana<span class="required_notification">*</span></label>
                                            <textarea id="catatan_val" name="catatan_val" class="form-control " rows="5" cols="40" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao form_ao" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_8" role="button" aria-expanded="false" aria-controls="collapse_8">
                                <a class="text-light">
                                    <b>PEMERIKSAAN TANAH DAN BANGUNAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_8">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Penghuni<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="nama_penghuni_agunan" name="nama_penghuni_agunan[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label>Status Penghuni<span class="required_notification">*</span></label>
                                            <select id="status_penghuni_agunan" name="status_penghuni_agunan[]" class="form-control ">
                                                <option value="">--Pilih Status Penghuni--</option>
                                                <option value="PEMILIK">PEMILIK</option>
                                                <option value="PENYEWA">PENYEWA</option>
                                                <option value="TIDAK DIHUNI">TIDAK DIHUNI</option>
                                                <option value="KELUARGA">KELUARGA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bentuk Agunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="bentuk_bangunan_agunan" name="bentuk_bangunan_agunan[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInput1">Kondisi Agunan<span class="required_notification">*</span></label>
                                            <select id="kondisi_bangunan_agunan" name="kondisi_bangunan_agunan[]" class="form-control ">
                                                <option value="">--Pilih--</option>
                                                <option value="SANGAT TERAWAT">SANGAT TERAWAT</option>
                                                <option value="CUKUP TERAWAT">CUKUP TERAWAT</option>
                                                <option value="KURANG TERAWAT">KURANG TERAWAT</option>
                                                <option value="TIDAK TERAWAT">TIDAK TERAWAT</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Fasilitas<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="fasilitas_agunan" name="fasilitas_agunan[]" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Listrik (Kwh)<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="listrik_agunan" name="listrik_agunan[]" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Taksasi Bangunan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" id="nilai_taksasi_bangunan" name="nilai_taksasi_bangunan[]" value="0">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Taksasi Agunan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" id="nilai_taksasi_agunan" name="nilai_taksasi_agunan[]" value="0">
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
                                                    <input type="text" id="tgl_taksasi_agunan" name="tgl_taksasi_agunan[]" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Likuidasi<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" id="nilai_likuidasi_agunan" name="nilai_likuidasi_agunan[]" value="0">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Perusahaan Penililai Independen</label>
                                                <input type="text" class="form-control" name="perusahaan_penilai_independen[]" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nilai Agunan Independen</label>
                                                <input type="text" class="form-control uang" name="nilai_agunan_independen[]" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao" id="table" hidden>
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_9" role="button" aria-expanded="false" aria-controls="collapse_9">
                                <a class="text-light">
                                    <b>AGUNAN KENDARAAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_9">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No BPKB</label>
                                            <input type="text" class="form-control" name="no_bpkb" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alamat Pemilik</label>
                                            <input type="text" class="form-control" name="alamat_pemilik_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Merk/Type</label>
                                            <input type="text" class="form-control" name="merk/type_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis/Silinder</label>
                                            <input type="text" class="form-control" name="jenis/silinder_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Rangka</label>
                                            <input type="text" class="form-control" name="no_rangka_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No Mesin</label>
                                            <input type="text" class="form-control" name="no_mesin_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Warna</label>
                                            <input type="text" class="form-control" name="warna_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tahun</label>
                                            <input type="text" class="form-control" name="tahun_ken" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No POlisi</label>
                                            <input type="text" class="form-control" name="no_polisi_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">No STNK</label>
                                            <input type="text" class="form-control" name="no_stnk_ken" onkeyup="this.value = this.value.toUpperCase()">
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
                                            <input type="text" class="form-control" name="no_faktur_ken" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>LAMPIRAN</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto Agunan Kendaraan Tampak Depan</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="lamp_agunan_depan_ken[]" class="custom-file-input">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Agunan Kendaraan Tampak Kanan</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="lamp_agunan_kanan_ken[]" class="custom-file-input">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Agunan Kendaraan Tampak Kiri</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="lamp_agunan_kiri_ken[]" class="custom-file-input">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Foto Agunan Kendaraan Tampak Belakang</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="lamp_agunan_belakang_ken[]" class="custom-file-input">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Foto Agunan Kendaraan Tampak Dalam</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="lamp_agunan_dalam_ken[]" class="custom-file-input">
                                                    <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3 ao" id="table" hidden>
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_10" role="button" aria-expanded="false" aria-controls="collapse_10">
                                <a class="text-light">
                                    <b>PEMERIKSAAN KENDARAAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_10">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Pengguna</label>
                                            <input type="text" class="form-control" name="nama_pengguna_ken[]" aria-describedby="" placeholder="" onkeyup="this.value = this.value.toUpperCase()">
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
                                            <input type="text" class="form-control" name="jml_roda_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kondisi Kendaraan</label>
                                            <input type="text" class="form-control" name="kondisi_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keberadaan Kendaraan</label>
                                            <input type="text" class="form-control" name="keberadaan_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Body</label>
                                            <input type="text" class="form-control" name="body_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Interior</label>
                                            <input type="text" class="form-control" name="interior_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">KM</label>
                                            <input type="text" class="form-control" name="km_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Modifikasi</label>
                                            <input type="text" class="form-control" style="margin-bottom: 7px;" name="modifikasi_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelengkapan Aksesoris</label>
                                            <input type="text" class="form-control" name="aksesoris_ken[]" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao form_ao" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_11" role="button" aria-expanded="false" aria-controls="collapse_11">
                                <a class="text-light">
                                    <b>KAPASITAS BULANAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_11">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card-header bg-gradient-danger">
                                            <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                                <b>Pemasukan</b>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Calon Debitur<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_debitur" id="pemasukan_debitur" name="pemasukan_debitur" onkeyup="total_pemasukan_kapasitas_bulanan();" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Pasangan</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_pasangan" id="pemasukan_pasangan" onkeyup="total_pemasukan_kapasitas_bulanan();" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Penjamin</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_penjamin" id="pemasukan_penjamin" onkeyup="total_pemasukan_kapasitas_bulanan();" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Pemasukan</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pemasukan" name="total_pemasukan" style="color: #000; font-weight: 500;" readonly value="0">
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
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_rumah_tangga" id="biaya_rumah_tangga" name="biaya_rumah_tangga" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();" value="0">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Transportasi<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_transportasi" name="biaya_transportasi" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Pendidikan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_pendidikan" name="biaya_pendidikan" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();" value="0">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Telpon, Listrik dan Air<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_telp_listr_air" name="biaya_telp_listr_air" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lain-Lain<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_lain" name="biaya_lain" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan();" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Pengeluaran</label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pengeluaran" name="total_pengeluaran" placeholder="" style="color: #000; font-weight: 500;" value="0" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao form_ao" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_12" role="button" aria-expanded="false" aria-controls="collapse_12">
                                <a class="text-light">
                                    <b>PENDAPATAN & PENGELUARAN USAHA(JIKA PENGUSAHA)</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_12">
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
                                            <input type="text" class="form-control uang" id="biaya_telp_listr_air_usaha" name="biaya_telp_listr_air_usaha" value="0" onkeyup="total_pengeluaran_usaha();">
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
                                            <input type="text" class="form-control auto" data-a-sep="." data-a-dec="," id="keuntungan_usaha" name="keuntungan_usaha" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao form_ao" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_13" role="button" aria-expanded="false" aria-controls="collapse_13">
                                <a class="text-light">
                                    <b>REKOMENDASI AO</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_13">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInput1">Tujuan Pinjaman<span class="required_notification">*</span></label>
                                            <textarea id="tujuan_pinjaman_rekomendasi" name="tujuan_pinjaman_rekomendasi" class="form-control " rows="5" cols="40" onkeyup="this.value = this.value.toUpperCase()" style="height: 126px;"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Jenis Pinjaman<span class="required_notification">*</span></label>
                                            <select id="jenis_pinjaman" name="jenis_pinjaman" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <option value="KONSUMTIF">KONSUMTIF</option>
                                                <option value="MODAL KERJA">MODAL KERJA</option>
                                                <option value="INVESTASI">INVESTASI</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Produk<span class="required_notification">*</span></label>
                                            <select id="produk" name="produk" class="form-control">
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Plafon Kredit<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" id="plafon_kredit" name="plafon_kredit" value="0" onkeyup="angsuran_perbulan();">
                                        </div>

                                        <div class="form-group">
                                            <label>Jangka Waktu<span class="required_notification">*</span></label>
                                            <select id="jangka_waktu" name="jangka_waktu" class="form-control" onchange="angsuran_perbulan();">
                                                <option value="">-- Pilih --</option>
                                                <option value="12">12</option>
                                                <option value="18">18</option>
                                                <option value="24">24</option>
                                                <option value="30">30</option>
                                                <option value="36">36</option>
                                                <option value="48">48</option>
                                                <option value="60">60</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Suku Bunga<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="suku_bunga" name="suku_bunga" value="0" onkeyup="angsuran_perbulan();">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Angsuran / Bln<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pembayaran_bunga" name="pembayaran_bunga" aria-describedby="" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akad Kredit<span class="required_notification">*</span></label>
                                            <select id="akad_kredit" name="akad_kredit" class="form-control">
                                                <option value="">-- Pilih --</option>
                                                <option value="ADENDUM">ADENDUM</option>
                                                <option value="NOTARIS">NOTARIS</option>
                                                <option value="INTERNAL">INTERNAL</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ikatan Agunan<span class="required_notification">*</span></label>
                                            <select id="ikatan_agunan" name="ikatan_agunan" class="form-control">
                                                <option value="">-- Pilih --</option>
                                                <option value="APHT">APHT</option>
                                                <option value="SKMHT">SKMHT</option>
                                                <option value="FIDUSIA">FIDUSIA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Analisa AO<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="analisa_ao" name="analisa_ao" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Biaya Provisi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_provisi" name="biaya_provisi" aria-describedby="" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Biaya Administrasi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_administrasi" name="biaya_administrasi" aria-describedby="" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Biaya Kredit Checking<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_credit_checking" name="biaya_credit_checking" aria-describedby="" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Biaya Tabungan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_tabungan" name="biaya_tabungan" aria-describedby="" value="0">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao" id="form_agunan_sertifikat">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_14" role="button" aria-expanded="false" aria-controls="collapse_14">
                                <a class="text-light">
                                    <b>AGUNAN JAMINAN SERTIFIKAT</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_14">
                                <div class="box-body table-responsive no-padding">
                                    <button type="button" class="btn btn-primary" id="tambah_agunan_sertifikat" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                    <table id="table_agunan_sertifikat" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                        <thead style="font-size: 12px" class="bg-success">
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
                                            </tr>
                                        </thead>
                                        <tbody id="data_agunan" style="font-size: 12px">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 ao" id="form_lampiran">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_15" role="button" aria-expanded="false" aria-controls="collapse_15">
                                <a class="text-light">
                                    <b>LAMPIRAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_15">
                                <div class="row">
                                    <div class="col-md-3" id="form_lamp_sku">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Surat Keterangan Kerja</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_surat_keterangan_kerja"><i class="fa fa-paperclip"></i></button>
                                            <i id="check_skk" class="fa fa-check-circle" style="color: #ffc107"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="form_lamp_slip_gaji">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Slip Gaji<span class="required_notification">*</span></label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_slip_gaji"><i class="fa fa-paperclip"></i></button>
                                            <i id="check_slip_gaji" class="fa fa-check-circle" style="color: #ffc107"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="form_form_persetujuan_ideb">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Form Persetujuan IDEB<span class="required_notification">*</span></label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_form_persetujuan_ideb"><i class="fa fa-paperclip"></i></button>
                                            <i id="check_form_persetujuan_ideb" class="fa fa-check-circle" style="color: #ffc107"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="form_buku_tabungan">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Buku Tabungan</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_buku_tabungan"><i class="fa fa-paperclip"></i></button>
                                            <i id="check_buku_tabungan" class="fa fa-check-circle" style="color: #ffc107"></i>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3" id="form_surat_keterangan_usaha">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Surat Keterangan Usaha</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_surat_keterangan_usaha"><i class="fa fa-paperclip"></i></button>
                                            <i id="check_sku" class="fa fa-check-circle" style="color: #ffc107"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="form_pembukuan_usaha">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Pembukuan Usaha</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_pembukuan_usaha"><i class="fa fa-paperclip"></i></button>
                                            <i id="check_pembukuan_usaha" class="fa fa-check-circle" style="color: #ffc107"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="form_foto_usaha">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Foto Usaha</label>
                                            <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_foto_usaha"><i class="fa fa-paperclip"></i></button>
                                            <i id="check_foto_usaha" class="fa fa-check-circle" style="color: #ffc107"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="submit_ao" class="btn btn-primary submit" style="float: right; margin-right: 7px;margin-top: -25px;">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>

    <div class="col-md-12" id="detail_ao">
        <input type="hidden" name="id" value="">
        <!-- AREA CHART -->
        <div class="box box-primary" style="background-color: #ffffff1f">
            <div class="box-header with-border">
                <h3 class="box-title font-weight-light ao" style="font-size: 20px; height: 9px;">Input Memorandum AO</h3>
            </div>
            <div class="box-body">
                <div class="form-group" id="status_ao">
                    <label>Status<span class="required_notification">*</span></label>
                    <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                            <input type="radio" id="recommend_ao" value="1" name="status_ao_detail">
                            <label for="recommend_ao">Recommend
                            </label>
                        </div>
                        <div class="icheck-danger d-inline">
                            <input type="radio" id="not_recommend_ao" value="2" name="status_ao_detail">
                            <label for="not_recommend_ao">Not Recommend
                            </label>
                        </div>
                    </div>
                </div>
                <form id="form_verifikasi_dokumen">
                    <div class="card mb-3">
                        <input type="hidden" name="id_verifikasi" value="">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_16" role="button" aria-expanded="false" aria-controls="collapse_16">
                            <a class="text-light">
                                <b>VERIFIKASI DOKUMEN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_16">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>KTP Calon Debitur<span class="required_notification">*</span></label>
                                        <select id="ver_ktp_calon_debitur_detail" name="ver_ktp_calon_debitur_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_ktp_cadeb" value="1">ADA</option>
                                            <option id="ver_tidak_ada_ktp_cadeb" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_ktp_cadeb" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>KTP Pasangan<span class="required_notification">*</span></label>
                                        <select name="ver_ktp_pasangan_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_ktp_pas" value="1">ADA</option>
                                            <option id="ver_tidak_ada_ktp_pas" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_ktp_pas" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Kartu Keluarga<span class="required_notification">*</span></label>
                                        <select name="ver_kk_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_kk" value="1">ADA</option>
                                            <option id="ver_tidak_ada_kk" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_kk" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Akta Nikah<span class="required_notification">*</span></label>
                                        <select name="ver_akta_nikah_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_surat_akta_nikah" value="1">ADA</option>
                                            <option id="ver_tidak_ada_surat_akta_nikah" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_surat_akta_nikah" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Cerai<span class="required_notification">*</span></label>
                                        <select name="ver_surat_cerai_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_surat_cerai" value="1">ADA</option>
                                            <option id="ver_tidak_ada_surat_cerai" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_surat_cerai" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Akta Kematian<span class="required_notification">*</span></label>
                                        <select name="ver_akta_kematian_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_surat_kematian" value="1">ADA</option>
                                            <option id="ver_tidak_ada_surat_kematian" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_surat_kematian" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>SPPT PBB<span class="required_notification">*</span></label>
                                        <select name="ver_sttp_pbb_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_sppt" value="1">ADA</option>
                                            <option id="ver_tidak_ada_sppt" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_sppt" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Sertifikat<span class="required_notification">*</span></label>
                                        <select name="ver_sertifikat_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_sertifikat" value="1">ADA</option>
                                            <option id="ver_tidak_ada_sertifikat" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_sertifikat" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>IMB<span class="required_notification">*</span></label>
                                        <select name="ver_imb_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_imb" value="1">ADA</option>
                                            <option id="ver_tidak_ada_imb" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_imb" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Slip Gaji/Pembukuan Usaha<span class="required_notification">*</span></label>
                                        <select name="ver_slip_gaji_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_slip_gaji" value="1">ADA</option>
                                            <option id="ver_tidak_ada_slip_gaji" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_slip_gaji" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Surat Keterangan Kerja/ Usaha<span class="required_notification">*</span></label>
                                        <select name="ver_keterangan_kerja_usaha_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_skk" value="1">ADA</option>
                                            <option id="ver_tidak_ada_skk" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_skk" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Rekening Tabungan<span class="required_notification">*</span></label>
                                        <select name="ver_rekening_tabungan_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_rek_tabungan" value="1">ADA</option>
                                            <option id="ver_tidak_ada_rek_tabungan" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejangggalan_rek_tabungan" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Data Penjamin<span class="required_notification">*</span></label>
                                        <select name="ver_data_penjamin_detail" class="form-control">
                                            <option value="">-- Pilih Verifikasi --</option>
                                            <option id="ver_ada_penjamin" value="1">ADA</option>
                                            <option id="ver_tidak_ada_penjamin" value="0">TIDAK ADA</option>
                                            <option id="ver_ada_kejanggalan_penjamin" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput1">Catatan dan Analisa Sederhana<span class="required_notification">*</span></label>
                                        <textarea id="catatan_verifikasi_detail" name="catatan_verifikasi_detail" class="form-control " rows="3" cols="40" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div style="float: right;">
                                <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                            </div>
                        </div>

                    </div>
                </form>

                <form id="form_validasi">
                    <div class="card mb-3 ">
                        <input type="hidden" name="id_validasi" value="">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_17" role="button" aria-expanded="false" aria-controls="collapse_17">
                            <a class="text-light">
                                <b>VALIDASI SAAT SURVEI</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_17">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Calon Debitur<span class="required_notification">*</span></label>
                                        <select name="val_calon_debitur_detail" class="form-control">
                                            <option value="">-- Pilih Validasi --</option>
                                            <option id="val_ada_debt" value="1">ADA</option>
                                            <option id="val_tidak_ada_debt" value="0">TIDAK ADA</option>
                                            <option id="val_ada_kejanggalan_debt" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pasangan Calon Debitur<span class="required_notification">*</span></label>
                                        <select name="val_pas_calon_debitur_detail" class="form-control">
                                            <option value="">-- Pilih Validasi --</option>
                                            <option id="val_ada_pas" value="1">ADA</option>
                                            <option id="val_tidak_ada_pas" value="0">TIDAK ADA</option>
                                            <option id="val_ada_kejanggalan_pas" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Penjamin<span class="required_notification">*</span></label>
                                        <select name="val_penjamin_detail" class="form-control">
                                            <option value="">-- Pilih Validasi --</option>
                                            <option id="val_ada_penjamin" value="1">ADA</option>
                                            <option id="val_tidak_ada_penjamin" value="0">TIDAK ADA</option>
                                            <option id="val_ada_kejanggalan_penjamin" value="2">ADA KEJANGGALAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Domisili Tempat Tinggal<span class="required_notification">*</span></label>
                                        <select name="val_domisili_tinggal_detail" class="form-control">
                                            <option value="">-- Pilih Validasi --</option>
                                            <option id="val_sesuai_domisili" value="1">SESUAI</option>
                                            <option id="val_tidak_sesuai_domisili" value="0">TIDAK SESUAI</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Agunan<span class="required_notification">*</span></label>
                                        <select name="val_agunan_tanah_detail" class="form-control">
                                            <option value="">-- Pilih Validasi --</option>
                                            <option id="val_sesuai_agunan_tanah" value="1">SESUAI</option>
                                            <option id="val_tidak_sesuai_agunan_tanah" value="0">TIDAK SESUAI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pekerjaan / Usaha<span class="required_notification">*</span></label>
                                        <select name="val_pekerjaan_detail" class="form-control">
                                            <option value="">-- Pilih Validasi --</option>
                                            <option id="val_sesuai_pekerjaan" value="1">SESUAI</option>
                                            <option id="val_tidak_sesuai_pekerjaan" value="0">TIDAK SESUAI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Cek Lingkungan<span class="required_notification">*</span></label>
                                        <select name="val_cek_lingkungan_detail" class="form-control">
                                            <option value="">-- Pilih Validasi --</option>
                                            <option id="val_sesuai_cek_lingkungan" value="1">SESUAI</option>
                                            <option id="val_tidak_sesuai_cek_lingkungan" value="0">TIDAK SESUAI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput1">Catatan Hasil Cek dan Analisa Sederhana<span class="required_notification">*</span></label>
                                        <textarea name="catatan_val_detail" id="catatan_val1" class="form-control " rows="5" cols="40" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div style="float: right;">
                                <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>

                <form id="form_pemeriksaan_tanah_bangunan">
                    <div class="card mb-3">
                        <input type="hidden" name="id_pemeriksaan_tanah_bangunan" value="">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_18" role="button" aria-expanded="false" aria-controls="collapse_18">
                            <a class="text-light">
                                <b>PEMERIKSAAN TANAH DAN BANGUNAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_18">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Penghuni<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" name="nama_penghuni_agunan_detail" id="nama_penghuni_agunan_detail" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group">
                                        <label>Status Penghuni<span class="required_notification">*</span></label>
                                        <select name="status_tanah_bangunan_detail" id="status_tanah_bangunan" class="form-control ">
                                            <option value="">--Pilih Status Penghuni--</option>
                                            <option id="pemilik_agunan_tanah" value="PEMILIK">PEMILIK</option>
                                            <option id="penyewa_agunan_tanah" value="PENYEWA">PENYEWA</option>
                                            <option id="tidak_dihuni_agunan_tanah" value="TIDAK DIHUNI">TIDAK DIHUNI</option>
                                            <option id="keluarga_agunan_tanah" value="KELUARGA">KELUARGA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Bentuk Agunan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" name="bentuk_bangunan_agunan_detail" id="bentuk_bangunan_agunan_detail" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput1">Kondisi Agunan<span class="required_notification">*</span></label>
                                        <select name="kondisi_bangunan_agunan_detail" id="kondisi_bangunan_agunan_detail" class="form-control ">
                                            <option value="">--Pilih--</option>
                                            <option id="sangat_terawat_kondisi_agunan" value="SANGAT TERAWAT">SANGAT TERAWAT</option>
                                            <option id="cukup_terawat_kondisi_agunan" value="CUKUP TERAWAT">CUKUP TERAWAT</option>
                                            <option id="kurang_terawat_kondisi_agunan" value="KURANG TERAWAT">KURANG TERAWAT</option>
                                            <option id="tidak_terawat_kondisi_agunan" value="TIDAK TERAWAT">TIDAK TERAWAT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Fasilitas<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="fasilitas_agunan_detail" id="fasilitas_agunan_detail" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Listrik (Kwh)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="listrik_agunan_detail" id="listrik_agunan_detail" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Nilai Taksasi Bangunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" name="nilai_taksasi_bangunan_detail" id="nilai_taksasi_bangunan_detail" aria-describedby="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Nilai Taksasi Agunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" name="nilai_taksasi_agunan_detail" id="nilai_taksasi_agunan_detail" aria-describedby="" placeholder="">
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
                                                <input type="text" name="tgl_taksasi_agunan_detail" id="tgl_taksasi_agunan_detail" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Nilai Likuidasi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" name="nilai_likuidasi_agunan_detail" id="nilai_likuidasi_agunan_detail" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Perusahaan Penililai Independen</label>
                                            <input type="text" class="form-control" name="perusahaan_penilai_independen_detail" id="perusahaan_penilai_independen_detail" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Nilai Agunan Independen</label>
                                            <input type="text" class="form-control uang" name="nilai_agunan_independen_detail" id="nilai_agunan_independen_detail" aria-describedby="" placeholder="">
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

                <form id="form_kapasitas_bulanan">
                    <div class="card mb-3" id="table">
                        <input type="hidden" name="id_kapasitas_bulanan" value="">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_19" role="button" aria-expanded="false" aria-controls="collapse_19">
                            <a class="text-light">
                                <b>KAPASITAS BULANAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_19">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_1">
                                            <b>Pemasukan</b>
                                        </a>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Calon Debitur<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_debitur_detail" name="pemasukan_debitur_detail" onkeyup="total_pemasukan_kapasitas_bulanan_detail();" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pasangan</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_pasangan_detail" id="pemasukan_pasangan_detail" onkeyup="total_pemasukan_kapasitas_bulanan_detail();" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Penjamin</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_penjamin_detail" id="pemasukan_penjamin_detail" onkeyup="total_pemasukan_kapasitas_bulanan_detail();" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Total Pemasukan</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pemasukan_detail" name="total_pemasukan_detail" style="color: #000; font-weight: 500;" readonly value="0">
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
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_rumah_tangga_detail" name="biaya_rumah_tangga_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_detail();" value="0">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Transportasi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_transportasi_detail" name="biaya_transportasi_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_detail();" value="0">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Pendidikan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_pendidikan_detail" name="biaya_pendidikan_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_detail();" value="0">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Telpon, Listrik dan Air<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_telp_listr_air_detail" name="biaya_telp_listr_air_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_detail();" value="0">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lain-Lain<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_lain_detail" name="biaya_lain_detail" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_detail();" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Total Pengeluaran</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pengeluaran_detail" name="total_pengeluaran_detail" placeholder="" style="color: #000; font-weight: 500;" value="0" readonly>
                                    </div>
                                </div>
                            </div>
                            <div style="float: right;">
                                <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>

                <form id="form_pendapatan_pengeluaran_usaha">
                    <div class="card mb-3">
                        <input type="hidden" name="id_pendapatan_usaha_detail" value="">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_20" role="button" aria-expanded="false" aria-controls="collapse_20">
                            <a class="text-light">
                                <b>PENDAPATAN & PENGELUARAN USAHA(JIKA PENGUSAHA)</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_20">
                            <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pendapatan Usaha</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tunai</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_tunai_detail" name="pemasukan_tunai_detail" value="0" onkeyup="total_pendapatan_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Kredit</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_kredit_detail" name="pemasukan_kredit_detail" value="0" onkeyup="total_pendapatan_usaha_detail();">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Pengeluaran Usaha</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sewa/Kontrak</label>
                                        <input type="text" class="form-control uang" id="biaya_sewa_detail" name="biaya_sewa_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Gaji Pegawai</label>
                                        <input type="text" class="form-control uang" id="biaya_gaji_pegawai_detail" name="biaya_gaji_pegawai_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Belanja Barang</label>
                                        <input type="text" class="form-control uang" id="biaya_belanja_brg_detail" name="biaya_belanja_brg_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Telpon, Listrik dan Air</label>
                                        <input type="text" class="form-control uang" id="biaya_telp_listr_air_usaha_detail" name="biaya_telp_listr_air_usaha_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sampah & Keamanan</label>
                                        <input type="text" class="form-control uang" id="biaya_sampah_keamanan_detail" name="biaya_sampah_keamanan_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Biaya Kirim Barang</label>
                                        <input type="text" class="form-control uang" id="biaya_kirim_barang_detail" name="biaya_kirim_barang_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Pembayaran Hutang Dagang</label>
                                        <input type="text" class="form-control uang" id="biaya_hutang_dagang_detail" name="biaya_hutang_dagang_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Angsuran Lain</label>
                                        <input type="text" class="form-control uang" id="biaya_angsuran_detail" name="biaya_angsuran_detail" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lainnya</label>
                                        <input type="text" class="form-control uang" id="biaya_lain_lain_detail" name="biaya_lain_lain_detail" aria-describedby="" value="0" onkeyup="total_pengeluaran_usaha_detail();">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <label style="font-size: 1.5em;font-weight: 300; margin-top: 23px">Total</label>
                            <div class="row">
                                <div class="col-md-4" style="float: right;">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pendapatan Usaha</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pendapatan_usaha_detail" name="pendapatan_usaha_detail" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                        <input type="hidden" value="0" id="pendapatan_usaha_hide_detail">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pengeluaran Usaha</label>
                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pengeluaran_usaha_detail" name="pengeluaran_usaha_detail" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                        <input type="hidden" value="0" id="pengeluaran_usaha_hide_detail">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Keuntungan Usaha</label>
                                        <input type="text" class="form-control auto" data-a-sep="." data-a-dec="," id="keuntungan_usaha_detail" name="keuntungan_usaha_detail" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" readonly>
                                    </div>
                                </div>
                            </div>
                            <div style="float: right;">
                                <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                            </div>
                        </div>
                    </div>
                </form>

                <form id="form_recom_ao">
                    <div class="card mb-3" id="table">
                        <input type="hidden" name="id_recom_ao_detail" value="">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_21" role="button" aria-expanded="false" aria-controls="collapse_21">
                            <a class="text-light">
                                <b>REKOMENDASI AO</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_21">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInput1">Tujuan Pinjaman<span class="required_notification">*</span></label>
                                        <textarea id="tujuan_pinjaman_rekomendasi_detail" name="tujuan_pinjaman_rekomendasi_detail" class="form-control " rows="5" cols="40" onkeyup="this.value = this.value.toUpperCase()" style="height: 126px;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Jenis Pinjaman<span class="required_notification">*</span></label>
                                        <select id="jenis_pinjaman_detail" name="jenis_pinjaman_detail" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option id="konsumtif_jenis_pinjaman" value="KONSUMTIF">KONSUMTIF</option>
                                            <option id="modal_kerja_pinjaman" value="MODAL KERJA">MODAL KERJA</option>
                                            <option id="investasi_pinjaman" value="INVESTASI">INVESTASI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Produk<span class="required_notification">*</span></label>
                                        <select id="produk_detail" name="produk_detail" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Plafon Kredit<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" id="plafon_kredit_detail" name="plafon_kredit_detail" onkeyup="angsuran_perbulan_detail();">
                                    </div>

                                    <div class="form-group">
                                        <label>Jangka Waktu<span class="required_notification">*</span></label>
                                        <select id="jangka_waktu_detail" name="jangka_waktu_detail" class="form-control" onchange="angsuran_perbulan_detail();">
                                            <option value="">-- Pilih --</option>
                                            <option id="jangka_waktu_12" value="12">12</option>
                                            <option id="jangka_waktu_18" value="18">18</option>
                                            <option id="jangka_waktu_24" value="24">24</option>
                                            <option id="jangka_waktu_30" value="30">30</option>
                                            <option id="jangka_waktu_36" value="36">36</option>
                                            <option id="jangka_waktu_48" value="48">48</option>
                                            <option id="jangka_waktu_60" value="60">60</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Suku Bunga<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="suku_bunga_detail" name="suku_bunga_detail" onkeyup="angsuran_perbulan_detail();">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Angsuran / Bln<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pembayaran_bunga_detail" id="pembayaran_bunga_detail" aria-describedby="" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Akad Kredit<span class="required_notification">*</span></label>
                                        <select name="akad_kredit_detail" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option id="adendum_akad" value="ADENDUM">ADENDUM</option>
                                            <option id="notaris_akad" value="NOTARIS">NOTARIS</option>
                                            <option id="internal_akad" value="INTERNAL">INTERNAL</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Ikatan Agunan<span class="required_notification">*</span></label>
                                        <select name="ikatan_agunan_detail" class="form-control">
                                            <option value="">-- Pilih --</option>
                                            <option id="apht_ikatan" value="APHT">APHT</option>
                                            <option id="skmht_ikatan" value="SKMHT">SKMHT</option>
                                            <option id="fidusia_ikatan" value="FIDUSIA">FIDUSIA</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Analisa AO<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="analisa_ao_detail" name="analisa_ao_detail" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Biaya Provisi<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" id="biaya_provisi_detail" name="biaya_provisi_detail" aria-describedby="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Biaya Administrasi<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" id="biaya_administrasi_detail" name="biaya_administrasi_detail" aria-describedby="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Biaya Kredit Checking<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" id="biaya_credit_checking_detail" name="biaya_credit_checking_detail" aria-describedby="" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Biaya Tabungan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" id="biaya_tabungan_detail" name="biaya_tabungan_detail" aria-describedby="" placeholder="">
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
                    <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_22" role="button" aria-expanded="false" aria-controls="collapse_22">
                        <a class="text-light">
                            <b>AGUNAN JAMINAN SERTIFIKAT</b>
                        </a>
                    </div>
                    <div class="card-body collapse" id="collapse_22">
                        <div class="box-body table-responsive no-padding">
                            <button type="button" class="btn btn-primary " id="tambah_agunan_sertifikat_detail" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="table_agunan_sertifikat" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 12px" class="bg-success">
                                    <tr>
                                        <th id="aksi">
                                            Aksi
                                        </th>
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

                                    </tr>
                                </thead>
                                <tbody id="data_agunan_detail" style="font-size: 12px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" id="lamp_deb">
                    <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_23" role="button" aria-expanded="false" aria-controls="collapse_23">
                        <a class="text-light">
                            <b>LAMPIRAN</b>
                        </a>
                    </div>
                    <div class="card-body collapse" id="collapse_23">
                        <div class="row">
                            <div class="col-md-3" id="ktp">
                                <div class="form-group">
                                    <label class="bmd-label-floating">KTP</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_ktp"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_ktp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="kk">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kartu Keluarga</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_kk"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_kk">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="sertifikat">
                                <div class="form-group">
                                    <label>Sertifikat</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_sertifikat"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_sertifikat">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="pbb">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran PBB</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_pbb "><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_pbb">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="imb">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">IMB</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_imb "><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_imb">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="form_lampiran_pas_detail">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran KTP Pasangan</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_ktp_pasangan"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_ktp_pasangan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="form_buku_nikah_pas_detail">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran Buku Nikah</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_buku_nikah"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_buku_nikah">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran Surat Keterangan Kerja</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_skk_detail"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_skk">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran Slip Gaji</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_slip_gaji_detail"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_slip_gaji">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran Buku Tabungan</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_buku_tabungan_detail"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_buku_tabungan">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran Surat Keterangan Usaha</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_sku_detail"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_sku">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran Foto Usaha</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_foto_usaha_detail1"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_foto_usaha">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Lampiran Form Persetujuan IDEB</label>
                                    <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_form_persetujuan_ideb"><i class="fa fa-pencil-alt"></i></button>
                                    <div id="lamp_form_persetujuan_ideb">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Lampiran IDEB</label>
                                    <div id="lamp_dataideb">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Lampiran PEFINDO</label>
                                    <div id="lamp_datapefindo">
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
<form id="form_edit_ktp_deb">
    <input type="hidden" id="id_debitur_ktp" name="id_debitur_ktp">
    <div class="modal fade in" id="modal_edit_ktp" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran KTP Debitur</label>
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

<form id="form_edit_kk_deb">
    <input type="hidden" id="id_debitur_kk" name="id_debitur_kk">
    <div class="modal fade in" id="modal_edit_kk" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran KK Debitur</label>
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
    <input type="hidden" name="id_debitur_sertifikat">
    <div class="modal fade in" id="modal_edit_sertifikat" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Sertifikat</label>
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
    <input type="hidden" name="id_debitur_pbb">
    <div class="modal fade in" id="modal_edit_pbb" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran PBB</label>
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
    <input type="hidden" name="id_debitur_imb">
    <div class="modal fade in" id="modal_edit_imb" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran IMB</label>
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

<form id="form_edit_buku_tabungan_deb">
    <input type="hidden" name="id_debitur_buku_tabungan">
    <div class="modal fade in" id="modal_edit_buku_tabungan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Lampiran Buku Tabungan</label>
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

<form id="form_edit_ktp_pasangan">
    <input type="hidden" name="id_pasangan_ktp">
    <div class="modal fade in" id="modal_edit_ktp_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran KTP Pasangan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_pas" class="form-control" style="height: 45px">
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

<form id="form_edit_buku_nikah">
    <input type="hidden" name="id_pasangan_buku_nikah">
    <div class="modal fade in" id="modal_edit_buku_nikah" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Buku Nikah</label>
                        <div class="input-group">
                            <input type="file" name="lamp_buku_nikah" class="form-control" style="height: 45px">
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


<form id="form_edit_ktp_deb_detail">
    <input type="hidden" id="id_debitur_ktp_detail" name="id_debitur_ktp">
    <div class="modal fade in" id="modal_edit_lamp_ktp" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran KTP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_deb_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_kk_deb_detail">
    <input type="hidden" id="id_debitur_kk_detail" name="id_debitur_kk">
    <div class="modal fade in" id="modal_edit_lamp_kk" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran KK Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_kk_deb_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_sertifikat_deb_detail">
    <input type="hidden" name="id_debitur_sertifikat">
    <div class="modal fade in" id="modal_edit_lamp_sertifikat" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Sertifikat</label>
                        <div class="input-group">
                            <input type="file" name="lamp_sertifikat_deb_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_pbb_deb_detail">
    <input type="hidden" name="id_debitur_pbb">
    <div class="modal fade in" id="modal_edit_lamp_pbb" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran PBB</label>
                        <div class="input-group">
                            <input type="file" name="lamp_pbb_deb_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_imb_deb_detail">
    <input type="hidden" name="id_debitur_imb">
    <div class="modal fade in" id="modal_edit_lamp_imb" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran IMB</label>
                        <div class="input-group">
                            <input type="file" name="lamp_imb_deb_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_buku_tabungan_deb_detail">
    <input type="hidden" name="id_debitur_buku_tabungan">
    <div class="modal fade in" id="modal_edit_lamp_buku_tabungan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Lampiran Buku Tabungan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_buku_tabungan_deb_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_ktp_pasangan_detail">
    <input type="hidden" name="id_pasangan_ktp">
    <div class="modal fade in" id="modal_edit_lamp_ktp_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran KTP Pasangan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_pas_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_buku_nikah_detail">
    <input type="hidden" name="id_pasangan_buku_nikah">
    <div class="modal fade in" id="modal_edit_lamp_buku_nikah" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Buku Nikah</label>
                        <div class="input-group">
                            <input type="file" name="lamp_buku_nikah_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_skk_detail">
    <input type="hidden" id="id_skk" name="id_skk">
    <div class="modal fade in" id="modal_edit_lamp_skk_detail" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Surat Keterangan Kerja</label>
                        <div class="input-group">
                            <input type="file" name="lamp_skk_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_slip_gaji_detail">
    <input type="hidden" id="id_slip_gaji" name="id_slip_gaji">
    <div class="modal fade in" id="modal_edit_lamp_slip_gaji_detail" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Slip Gaji</label>
                        <div class="input-group">
                            <input type="file" name="lamp_slip_gaji_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_buku_tabungan_detail">
    <input type="hidden" id="id_buku_tabungan" name="id_buku_tabungan">
    <div class="modal fade in" id="modal_edit_lamp_buku_tabungan_detail" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Buku Tabungan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_buku_tabungan_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_sku_detail">
    <input type="hidden" id="id_sku" name="id_sku">
    <div class="modal fade in" id="modal_edit_lamp_sku_detail" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Surat Keterangan Usaha</label>
                        <div class="input-group">
                            <input type="file" name="lamp_sku_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_foto_usaha_detail">
    <input type="hidden" id="id_foto_usaha" name="id_foto_usaha">
    <div class="modal fade in" id="modal_edit_lamp_foto_usaha_detail1" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Foto Usaha</label>
                        <div class="input-group">
                            <input type="file" name="lamp_foto_usaha[]" class="form-control" style="height: 45px">
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
                    <h5 class="modal-title">Input Agunan Sertifikat</h5>
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
                                    <select id="tipe_lokasi_agunan" name="tipe_lokasi_agunan" class="form-control ">
                                        <option value="">-- Pilih --</option>
                                        <option value="PERUM">PERUMAHAN</option>
                                        <option value="BIASA">NON PERUMAHAN</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Alamat Agunan<span class="required_notification">*</span></label>
                                        <input type="text" id="alamat_agunan" name="alamat_agunan" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>RT<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="rt_agunan" name="rt_agunan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>RW<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="rw_agunan" name="rw_agunan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Provinsi<span class="required_notification">*</span></label>
                                    <select name="id_prov_agunan" id="select_provinsi_agunan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">

                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten/Kota<span class="required_notification">*</span></label>
                                        <select id="select_kabupaten_agunan" name="id_kab_agunan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            <option value="">--Pilih--</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kecamatan<span class="required_notification">*</span></label>
                                        <select name="id_kec_agunan" id="select_kecamatan_agunan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            <option value="">--Pilih--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan<span class="required_notification">*</span></label>
                                        <select name="id_kel_agunan" id="select_kelurahan_agunan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
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
                                        <input type="text" class="form-control" id="luas_tanah" name="luas_tanah" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Luas Bangunan (m2)<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInput1">Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" id="nama_pemilik_sertifikat" name="nama_pemilik_sertifikat" class="form-control " onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">Jenis Sertifikat</label>
                                    <select id="jenis_sertifikat" id="jenis_sertifikat" name="jenis_sertifikat" class="form-control " onchange="showshgb()">
                                        <option value="">-- Pilih --</option>
                                        <option value="SHM">SHM</option>
                                        <option value="SHGB">SHGB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" class="form-control" id="no_sertifikat" name="no_sertifikat" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal & Nomor Ukur sertifikat</label>
                                    <input type="text" class="form-control" id="no_ukur_sertifikat" name="no_ukur_sertifikat">
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
                                            <input type="text" id="tgl_berlaku_shgb" name="tgl_berlaku_shgb" class="datepicker-here form-control" data-language="en" data-date-format="dd-mm-yyyy" />
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
                                        <input type="text" class="form-control uang" id="njop" name="njop">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">NOP<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="nop" name="nop">
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
                            <!--   <button type="button" class="btn btn-danger close_deb" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit_ao" class="btn btn-primary submit" style="float: right; margin-right: 7px;">Simpan</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_modal_agunan_sertifikat_detail">
    <input type="hidden" name="id_trans_so_aguanan_detail" id="id_trans_so_aguanan_detail">
    <div class="modal fade in" id="modal_tambah_agunan_sertifikat_detail">
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
                        <input type="hidden" name="id_so_agunan_sertifikat">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInput1">Lokasi Agunan<span class="required_notification">*</span></label>
                                    <select id="tipe_lokasi_agunan_detail" name="tipe_lokasi_agunan_detail" class="form-control ">
                                        <option value="">-- Pilih --</option>
                                        <option value="PERUM">PERUMAHAN</option>
                                        <option value="BIASA">NON PERUMAHAN</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-8">
                                        <label>Alamat Agunan<span class="required_notification">*</span></label>
                                        <input type="text" id="alamat_agunan_detail" name="alamat_agunan_detail" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>RT<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="rt_agunan_detail" name="rt_agunan_detail" maxlength="3" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>RW<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="rw_agunan_detail" name="rw_agunan_detail" maxlength="3" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Provinsi<span class="required_notification">*</span></label>
                                    <select name="id_prov_agunan_detail" id="select_provinsi_agunan_detail" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">

                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten/Kota<span class="required_notification">*</span></label>
                                        <select id="select_kabupaten_agunan_detail" name="id_kab_agunan_detail" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            <option value="">--Pilih--</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kecamatan<span class="required_notification">*</span></label>
                                        <select name="id_kec_agunan_detail" id="select_kecamatan_agunan_detail" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            <option value="">--Pilih--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan<span class="required_notification">*</span></label>
                                        <select name="id_kel_agunan_detail" id="select_kelurahan_agunan_detail" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                            <option value="">--Pilih--</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kode POS<span class="required_notification">*</span></label>
                                        <input type="text" name="kode_pos_agunan_detail" class="form-control" maxlength="5" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Luas Tanah (m2)<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="luas_tanah_detail" name="luas_tanah_detail" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Luas Bangunan (m2)<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="luas_bangunan_detail" name="luas_bangunan_detail" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInput1">Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" id="nama_pemilik_sertifikat_detail" name="nama_pemilik_sertifikat_detail" class="form-control " onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">Jenis Sertifikat</label>
                                    <select id="jenis_sertifikat_detail" name="jenis_sertifikat_detail" class="form-control " onchange="showshgb()">
                                        <option value="">-- Pilih --</option>
                                        <option value="SHM">SHM</option>
                                        <option value="SHGB">SHGB</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" class="form-control" id="no_sertifikat_detail" name="no_sertifikat_detail" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal & Nomor Ukur sertifikat</label>
                                    <input type="text" class="form-control" name="no_ukur_sertifikat">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tanggal Berlaku SHGB<span id="wajib_shgb_detail" class="required_notification">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                            <input type="text" name="tgl_berlaku_shgb_detail" class="datepicker-here form-control" data-language="en" data-date-format="dd-mm-yyyy" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Nomor IMB<small><i>(Jika Ada)</i></small></label>
                                        <input type="text" class="form-control" name="no_imb_detail">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">NJOP<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control uang" id="njop_detail" name="njop_detail">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">NOP<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="nop_detail" name="nop_detail">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="add-lamp-agunan-detail">
                            <h5>LAMPIRAN</h5>
                            <input type="hidden" id="input-id-lamp-agunan-detail" name="input_id_lamp_agunan_detail">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Foto Agunan Tampak Depan<span class="required_notification add-lamp-agunan-depan">*</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="agunan_bag_depan_detail" class="custom-file-input add_lamp_agunan_depan_detail">
                                                <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Agunan Tampak Jalan<span class="required_notification add-lamp-agunan-jalan">*</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="agunan_bag_jalan_detail" class="custom-file-input add_lamp_agunan_jalan_detail">
                                                <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Agunan Tampak Ruang Tamu<span class="required_notification add-lamp-agunan-rtamu">*</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="agunan_bag_ruangtamu_detail" class="custom-file-input add_lamp_agunan_rtamu_detail">
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
                                                <input type="file" name="agunan_bag_dapur_detail" class="custom-file-input add_lamp_agunan_dapur_detail">
                                                <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Foto Agunan Tampak Kamar Mandi<span class="required_notification add-lamp-agunan-rmandi">*</span></label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="agunan_bag_kamarmandi_detail" class="custom-file-input add_lamp_agunan_rmandi_detail">
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
                                <select name="jenis_kelamin_pen" id="select_jenis_kel_pen" class="form-control" style="width: 100%;">
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
                                <select name="pekerjaan_pen" class="form-control ">
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
                        <div class="form-group col-md-6">
                            <label>Provinsi</label>
                            <select name="provinsi_kantor_pen" id="provinsi_kantor_pen" class="form-control">>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kabupaten</label>
                            <select name="kabupaten_kantor_pen" id="kabupaten_kantor_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Kecamatan</label>
                            <select name="kecamatan_kantor_pen" id="kecamatan_kantor_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Kelurahan</label>
                            <select name="kelurahan_kantor_pen" id="kelurahan_kantor_pen" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
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
                                <input type="text" name="masa_kerja_usaha" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy" />
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label>No Telpon Kantor/Usaha</label>
                            <input type="text" class="form-control" name="no_telp_kantor_usaha" maxlength="13" onkeypress="return hanyaAngka(event)">
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4" id="ktp_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">KTP Penjamin</label>
                                    <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_ktp_pen"><i class="fa fa-paperclip"></i></button>
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
                    <button type="submit" class="btn btn-primary submit">Save Changes</button>
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
                        <label>Ubah Lampiran KTP Penjamin</label>
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
                        <input type="hidden" name="id_ktp_pasangan_pen">
                        <label>Ubah KTP Pasangan Penjamin</label>
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
                        <label>Ubah Lampiran Buku Nikah Penjamin</label>
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
                        <label>Ubah Lampiran KK Penjamin</label>
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

<form id="form_surat_keterangan_kerja">
    <input type="hidden" id="id_debitur_surat_keterangan_kerja" name="id_debitur_surat_keterangan_kerja">
    <div class="modal fade in" id="modal_surat_keterangan_kerja">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Surat Keterangan Kerja</label>
                        <div class="input-group">
                            <input type="file" name="lamp_surat_keterangan_kerja" class="form-control" style="height: 45px">
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

<form id="form_slip_gaji">
    <input type="hidden" id="id_debitur_ktp_pasangan" name="id_debitur_slip_gaji">
    <div class="modal fade in" id="modal_slip_gaji">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Slip Gaji</label>
                        <div class="input-group">
                            <input type="file" name="lamp_slip_gaji" class="form-control" style="height: 45px">
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

<form id="form_persetujuan_ideb_ideb">

    <div class="modal fade in" id="modal_form_persetujuan_ideb">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <input type="hidden" id="id_debitur_form_persetujuan_ideb" name="id_debitur_form_persetujuan_ideb">
                        <label>Form Persetujuan IDEB</label>
                        <div class="input-group">
                            <input type="file" name="lamp_form_persetujuan_ideb" class="form-control" style="height: 45px">
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

<form id="form_buku_tabungan">
    <input type="hidden" id="id_debitur_form_buku_tabungan" name="id_debitur_form_buku_tabungan">
    <div class="modal fade in" id="modal_buku_tabungan">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Buku Tabungan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_buku_tabungan" class="form-control" style="height: 45px">
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

<form id="form_surat_keterangan_usaha_usaha">
    <input type="hidden" id="id_debitur_surat_keterangan_usaha" name="id_debitur_surat_keterangan_usaha">
    <div class="modal fade in" id="modal_surat_keterangan_usaha">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Surat Keterangan Usaha</label>
                        <div class="input-group">
                            <input type="file" name="lamp_surat_keterangan_usaha" class="form-control" style="height: 45px">
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

<form id="form_pembukuan_usaha_usaha">
    <input type="hidden" id="id_debitur_pembukuan_usaha" name="id_debitur_pembukuan_usaha">
    <div class="modal fade in" id="modal_pembukuan_usaha">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Pembukuan Usaha</label>
                        <div class="input-group">
                            <input type="file" name="lamp_pembukuan_usaha" class="form-control" style="height: 45px">
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

<form id="form_foto_usaha_usaha">
    <input type="hidden" id="id_debitur_foto_usaha" name="id_debitur_foto_usaha">
    <div class="modal fade in" id="modal_foto_usaha">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Foto Usaha</label>
                        <div class="input-group">
                            <input type="file" name="lamp_foto_usaha" class="form-control" style="height: 45px">
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

<form id="form_tambah_data_anak">
    <input type="hidden" id="id_debitur_anak" name="id_debitur_anak">
    <div class="modal fade in" id="modal_tambah_data_anak" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Tambah Data Anak</label>
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-group form-file-upload form-file-multiple">
                                    <button type="button" class="btn btn-success add-row-anak"><i class="fa fa-plus"></i>&nbsp; Tambah </button>&nbsp;
                                    <button type="button" class="btn btn-danger delete-row-anak"><i class="fa fa-trash"></i>&nbsp; Delete </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="table2" class="table table-hover table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th width="5">#</th>
                                        <th>Nama Anak</th>
                                        <th>Tanggal Lahir</th>
                                    </tr>
                                </thead>
                                <tbody id="result-data-anak">

                                </tbody>
                            </table>
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
                                        <label>Alamat Agunan<span class="required_notification">*</span></label>
                                        <input type="text" name="alamat_agunan" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
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
                                    <select name="id_prov_agunan" id="select_provinsi_agunan1" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">

                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kabupaten/Kota<span class="required_notification">*</span></label>
                                        <select id="select_kabupaten_agunan1" name="id_kab_agunan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Kecamatan<span class="required_notification">*</span></label>
                                        <select name="id_kec_agunan" id="select_kecamatan_agunan1" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Kelurahan<span class="required_notification">*</span></label>
                                        <select name="id_kel_agunan" id="select_kelurahan_agunan1" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
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
                        </div>
                        <div class="form-group">
                            <label>LAMPIRAN<span class="required_notification">*</span></label>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="col-md-4" id="ktp_pen">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Tampak Depan</label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_foto_agunan_tampak_depan"><i class="fa fa-paperclip"></i></button>
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
                        <label>Ubah Foto Agunan Tampak Depan</label>
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
                        <label>Ubah Foto Agunan Tampak Jalan</label>
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
                        <input type="hidden" name="id_agunan_ruang_tamu">
                        <label>Ubah Foto Agunan Tampak Ruang Tamu</label>
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
                        <label>Ubah Foto Agunan Tampak Dapur</label>
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
                        <input type="hidden" name="id_agunan_kamar_mandi">
                        <label>Ubah Foto Agunan Tampak Kamar Mandi</label>
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

<div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="load_data"></div>
    </div>
</div>

<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>
<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
<script src="<?php echo base_url('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script>

<script type="text/javascript">
    $('#check_skk').hide();
    $('#check_slip_gaji').hide();
    $('#check_form_persetujuan_ideb').hide();
    $('#check_buku_tabungan').hide();
    $('#check_foto_usaha').hide();
    $('#check_pembukuan_usaha').hide();
    $('#check_sku').hide();
    $('#form_lampiran').hide();
    $('#form_agunan_sertifikat').hide();
    //INPUT FILE
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
    // =============================================================

    $(function() {
        $("#tambah_data_anak").click(function() {
            // var id_data_anak = $('#form_tambah_data_anak input[type=hidden][name=id_debitur_anak]').val();
            // var url_data_anak = "<?php echo config_item('api_url') ?>api/master/mca/" + id_data_anak;
            // $.ajax({
            //     type: "get",
            //     url: url_data_anak,
            //     headers: {
            //         'Authorization': 'Bearer ' + localStorage.getItem('token')
            //     },
            //     success: function(response) {
            //         var data_anak = response.data.data_debitur.anak;
            //         var html = [];
            //         console.log(data_anak)
            //         var no = 0;
            //         if (response.code === 200) {
            //             for (var i = 0; i < data_anak.length; i++) {
            //                 var datepicker = 'datepicker' + nc++;
            //                 var tr = [
            //                     '<tr>',
            //                     '<td>',
            //                     '<input type="checkbox" name="record_pefindo" width="5">',
            //                     '</td>',
            //                     '<td>',
            //                     '<input type="text" class="form-control" name="nama_anak[]" onkeyup="this.value = this.value.toUpperCase()" value="' + data_anak[i].nama + '">',
            //                     '</td>',
            //                     '<td>',
            //                     '<input type="text" name="tgl_lahir_anak[]" class="datepicker-here form-control" id="' + datepicker + '" value="' + data_anak[i].tgl_lahir + '" data-language="en"  data-date-format="dd-mm-yyyy"/>',
            //                     '</td>',
            //                     '</tr>'
            //                 ].join('\n');
            //                 html.push(tr);
            //             }
            //             $('#result-data-anak').html(html);
            //         }
            //         $(function() {
            //             $("#datepicker0").datepicker();
            //             $("#datepicker1").datepicker();
            //             $("#datepicker2").datepicker();
            //             $("#datepicker3").datepicker();
            //             $("#datepicker4").datepicker();
            //             $("#datepicker5").datepicker();
            //         });
            //     }
            // });
            $('#modal_tambah_data_anak').modal('show');
        })
        var np = 0;
        $(".add-row-anak").click(function() {
            var datepicker = 'datepicker' + np++;

            var markup = '<tr><td><input type="checkbox" name="record_pefindo" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()"></td><td><input type="text" class="form-control" name="nama_anak[]" onkeyup="this.value = this.value.toUpperCase()"></td><td><input type="text" name="tgl_lahir_anak[]" class="datepicker-here form-control" id="' + datepicker + '" data-language="en"  data-date-format="dd-mm-yyyy"/></td></tr>';
            $("#table2 ").append(markup);
            $("#datepicker0").datepicker();
            $("#datepicker1").datepicker();
            $("#datepicker2").datepicker();
            $("#datepicker3").datepicker();
            $("#datepicker4").datepicker();
            $("#datepicker5").datepicker();
            $("#datepicker6").datepicker();
            $("#datepicker7").datepicker();
            $("#datepicker8").datepicker();
            $("#datepicker9").datepicker();
            $("#datepicker10").datepicker();
            $("#datepicker11").datepicker();
        });

        $(".delete-row-anak").click(function() {
            $("table tbody").find('input[name="record_pefindo"]').each(function() {
                if ($(this).is(":checked")) {
                    $(this).parents("tr").remove();
                }
            });
        });
    })

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
                $('#form_modal_agunan_sertifikat  select[id=select_provinsi_agunan]').html(select1 + select);
            })

    })

    $("#tambah_agunan_sertifikat_detail").click(function() {
        $('#modal_tambah_agunan_sertifikat_detail').modal('show');
        $('#form_modal_agunan_sertifikat_detail')[0].reset();
        $('#add-lamp-agunan-detail').hide();
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
                $('#form_modal_agunan_sertifikat_detail select[id=select_provinsi_agunan_detail]').html(select1 + select);
            })

        $('#select_provinsi_agunan_detail').change(function() {
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
                    $('#form_modal_agunan_sertifikat_detail select[id=select_kabupaten_agunan_detail]').html(select1 + select);
                }
            });
        });

        $('#select_kabupaten_agunan_detail').change(function() {
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
                    $('#form_modal_agunan_sertifikat_detail select[id=select_kecamatan_agunan_detail]').html(select1 + select);
                }
            });
        });

        $('#select_kecamatan_agunan_detail').change(function() {
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
                    $('#form_modal_agunan_sertifikat_detail select[id=select_kelurahan_agunan_detail]').html(select1 + select);
                }
            });
        });

        $('#select_kelurahan_agunan_detail').change(function() {
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
                    $('#form_modal_agunan_sertifikat_detail input[name=kode_pos_agunan_detail]').val(data.kode_pos);
                }
            });
        });

    })

    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });

    function rubah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    //HIDE
    hide_all = function() {
        $('#lihat_data_credit').hide();
        $('#lihat_detail').hide();
        $('#lihat_debitur_ao').hide();

    }

    hide_all();
    $('#lihat_data_credit').show();
    $('#wajib_shgb').hide();
    $('.ao').hide();
    // =============================================================

    $('#radioPrimary2').click(function(e) {
        if ($('#radioPrimary2').prop('checked')) {
            $('.form_ao').show();
        }
    })
    $('#radioPrimary3').click(function(e) {
        if ($('#radioPrimary3').prop('checked')) {
            $('.ao').hide();
        }
    })

    //LOAD DATA PENGAJUAN
    get_credit_checking = function(opts, id) {
        var url = '<?php echo config_item('api_url') ?>api/master/mao/';

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
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    //LOAD DETAIL AO
    get_detail = function(opts, id) {
        var url = '<?php echo config_item('api_url') ?>api/master/mca/';

        if (id != undefined) {
            url += id;
        }

        if (opts != undefined) {
            var data = opts;
        }

        return $.ajax({
            url: url,
            data: data,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    //LOAD DATA RECOMMEND
    get_recommend = function(opts, id) {
        var url = '<?php echo config_item('api_url') ?>api/master/mao/status/ao/recommend';

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
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    tampil_data_ao();

    function tampil_data_ao() {
        $('#table_ao').DataTable({

            "processing": true,
            "serverSide": true,
            'destroy': true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Ao_controller/get_data_ao') ?>",
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
                "url": "<?php echo site_url('Ao_controller/get_data_so_approve_hm') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        })
    };

    load_data = function() {
        get_recommend()
            .done(function(response) {
                var data = response.data;
                var html = [];
                var no = 0;
                if (data.length === 0) {
                    var tr = [
                        '<tr valign="midle">',
                        '<td colspan="4">No Data</td>',
                        '</tr>'
                    ].join('\n');
                    $('#data_creditchecking').html(tr);

                    return;
                }
                $.each(data, function(index, item) {
                    no++;

                    var status = item.ao.status;
                    if (status == 'recommend') {
                        var disabled = "disabled";
                    } else {
                        var disabled = "";
                    }

                    var tr = [
                        '<tr>',
                        '<td>' + no + '</td>',
                        '<td>' + item.tgl_transaksi + '</td>',
                        '<td>' + item.nomor_so + '</td>',
                        '<td>' + item.pic + '</td>',
                        '<td>' + item.asal_data + '</td>',
                        '<td>' + item.nama_marketing + '</td>',
                        '<td>' + item.nama_debitur + '</td>',
                        '<td>' + item.cabang + '</td>',
                        '<td style="width: 70px;">',
                        '<form method="post" target="_blank" action="<?php echo base_url() . 'index.php/report/Memo_ao' ?>"> <button type="button" ' + disabled + ' class="btn btn-info btn-sm edit"   data-target="#update" data="' + item.id_trans_so + '"><i class="fas fa-pencil-alt"></i></button>',
                        '<input type="hidden" name ="id" value="' + item.id_trans_so + '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>',
                        '</td>',
                        '</tr>'
                    ].join('\n');
                    html.push(tr);
                });
                $('#data_creditchecking').html(html);
                $('#example2').DataTable({
                    "paging": true,
                    "retrieve": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            })
            .fail(function(response) {
                $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
    }
    // load_data();
    $('#lihat_data_credit').show();
    // =============================================================

    get_credit_checking = function(opts, id) {
        var url = '<?php echo config_item('api_url') ?>api/master/mao/';

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
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    get_pengajuan = function(opts, id) {
        var url = '<?php echo config_item('api_url') ?>api/master/mao/status/ao/waiting';

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
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
        });
    }

    $("#modal_pengajuan").click(function() {
        // load_data_pengajuan = function() {
        //     get_pengajuan()
        //         .done(function(response) {
        //             var data = response.data;
        //             var html = [];
        //             var no = 0;

        //             get_provinsi()
        //                 .done(function(res) {
        //                     var select = [];
        //                     var select1 = '<option value="">--Pilih--</option>';
        //                     $.each(res.data, function(i, e) {
        //                         var option = [
        //                             '<option value="' + e.id + '">' + e.nama + '</option>'
        //                         ].join('\n');
        //                         select.push(option);
        //                     });
        //                     $('#form_modal_agunan_sertifikat select[id=select_provinsi_agunan]').html(select1 + select);
        //                 })
        //             $.each(data, function(index, item) {
        //                 no++;
        //                 var tr = [
        //                     '<tr>',
        //                     '<td>' + no + '</td>',
        //                     '<td>' + item.tgl_transaksi + '</td>',
        //                     '<td>' + item.nomor_so + '</td>',
        //                     '<td>' + item.pic + '</td>',
        //                     '<td>' + item.asal_data + '</td>',
        //                     '<td>' + item.nama_marketing + '</td>',
        //                     '<td>' + item.nama_debitur + '</td>',
        //                     '<td>' + item.cabang + '</td>',
        //                     '<td style="width: 70px;">',
        //                     '<button type="button" class="btn btn-info btn-sm edit" data-target="#update" data="' + item.id_trans_so + '"><i class="fas fa-plus-circle"></i></button>',
        //                     '</td>',
        //                     '</tr>'
        //                 ].join('\n');
        //                 html.push(tr);
        //             });
        //             $('#data_pengajuan').html(html);
        //             $('#tbl_pengajuan').DataTable({
        //                 "paging": true,
        //                 "retrieve": true,
        //                 "lengthChange": true,
        //                 "searching": true,
        //                 "ordering": true,
        //                 "info": true,
        //                 "autoWidth": false,
        //             });
        //         })
        //         .fail(function(response) {
        //             $('#data_pengajuan').html('<tr><td colspan="4">Tidak ada data</td></tr>');
        //         });
        // }
        tampil_data_pengajuan();
        $("#modal_data_pengajuan").modal('show');
    })

    //RUBAH RIBUAN


    function rubah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }
    // =============================================================

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

        var pengeluaran_transportasi = (document.getElementById('biaya_transportasi').value);
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
    // =============================================================

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

        var pengeluaran_tlp_listrik_air_usaha = (document.getElementById('biaya_telp_listr_air_usaha').value);
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

    //TOTAL PEMASUKAN KAPASITAS BULANAN DETAIL
    function total_pemasukan_kapasitas_bulanan_detail() {

        var pemasukan_debitur = (document.getElementById('pemasukan_debitur_detail').value);
        pemasukan_debitur = pemasukan_debitur.replace(/[^\d]/g, "");

        var pemasukan_pasangan = (document.getElementById('pemasukan_pasangan_detail').value);
        pemasukan_pasangan = pemasukan_pasangan.replace(/[^\d]/g, "");

        var pemasukan_penjamin = (document.getElementById('pemasukan_penjamin_detail').value);
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

        document.getElementById('total_pemasukan_detail').value = total_pemasukan;
    }
    // =============================================================

    //TOTAL PENGELUARAN KAPASITAS BULANAN
    function total_pengeluaran_kapasitas_bulanan_detail() {

        var pengeluaran_rumah_tangga = (document.getElementById('biaya_rumah_tangga_detail').value);
        pengeluaran_rumah_tangga = pengeluaran_rumah_tangga.replace(/[^\d]/g, "");

        var pengeluaran_transportasi = (document.getElementById('biaya_transportasi_detail').value);
        pengeluaran_transportasi = pengeluaran_transportasi.replace(/[^\d]/g, "");

        var pengeluaran_pendidikan = (document.getElementById('biaya_pendidikan_detail').value);
        pengeluaran_pendidikan = pengeluaran_pendidikan.replace(/[^\d]/g, "");

        var pengeluaran_telpon_listrik_air = (document.getElementById('biaya_telp_listr_air_detail').value);
        pengeluaran_telpon_listrik_air = pengeluaran_telpon_listrik_air.replace(/[^\d]/g, "");

        var pengeluaran_lain_lain = (document.getElementById('biaya_lain_detail').value);
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

        document.getElementById('total_pengeluaran_detail').value = total_pengeluaran;
    }
    // =============================================================

    //TOTAL PENDAPATAN USAHA
    function total_pendapatan_usaha_detail() {

        var pemasukan_tunai_detail = (document.getElementById('pemasukan_tunai_detail').value);
        pemasukan_tunai_detail = pemasukan_tunai_detail.replace(/[^\d]/g, "");

        var pemasukan_kredit_detail = (document.getElementById('pemasukan_kredit_detail').value);
        pemasukan_kredit_detail = pemasukan_kredit_detail.replace(/[^\d]/g, "");


        var formatter = new Intl.NumberFormat('id-ID', {
            //style: 'decimal', //tanpa decimal, tanpa Rp
            style: 'currency', //dengan 2 decimal, dengan Rp
            currency: 'IDR',

        });

        var tunai_detail = Math.floor(pemasukan_tunai_detail);
        var kredit_detail = Math.floor(pemasukan_kredit_detail);

        var total_detail = tunai_detail + kredit_detail;
        var total_pemasukan_detail = formatter.format(Math.abs(total_detail));

        document.getElementById('pendapatan_usaha_detail').value = total_pemasukan_detail;
        document.getElementById('pendapatan_usaha_hide_detail').value = total_detail;

        var pengeluaran_usaha_detail = (document.getElementById('pengeluaran_usaha_hide_detail').value);
        pengeluaran_usaha_detail = pengeluaran_usaha_detail.replace(/[^\d]/g, "");

        var pengeluaran_detail = Math.floor(pengeluaran_usaha_detail);

        var total_keuntungan_detail = total_detail - pengeluaran_detail;
        total_keuntungan_detail = formatter.format(Math.abs(total_keuntungan_detail));
        document.getElementById('keuntungan_usaha_detail').value = total_keuntungan_detail;
    }
    // ==================================================================

    //TOTAL PENGELUARAN USAHA
    function total_pengeluaran_usaha_detail() {

        var pengeluaran_sewa = (document.getElementById('biaya_sewa_detail').value);
        pengeluaran_sewa = pengeluaran_sewa.replace(/[^\d]/g, "");

        var pengeluaran_gaji_pegawai = (document.getElementById('biaya_gaji_pegawai_detail').value);
        pengeluaran_gaji_pegawai = pengeluaran_gaji_pegawai.replace(/[^\d]/g, "");

        var pengeluaran_belanja_barang = (document.getElementById('biaya_belanja_brg_detail').value);
        pengeluaran_belanja_barang = pengeluaran_belanja_barang.replace(/[^\d]/g, "");

        var pengeluaran_tlp_listrik_air_usaha = (document.getElementById('biaya_telp_listr_air_usaha_detail').value);
        pengeluaran_tlp_listrik_air_usaha = pengeluaran_tlp_listrik_air_usaha.replace(/[^\d]/g, "");

        var pengeluaran_sampah_keamanan = (document.getElementById('biaya_sampah_keamanan_detail').value);
        pengeluaran_sampah_keamanan = pengeluaran_sampah_keamanan.replace(/[^\d]/g, "");

        var pengeluaran_biaya_kirim_barang = (document.getElementById('biaya_kirim_barang_detail').value);
        pengeluaran_biaya_kirim_barang = pengeluaran_biaya_kirim_barang.replace(/[^\d]/g, "");

        var pengeluaran_pembayaran_hutang_dagang = (document.getElementById('biaya_hutang_dagang_detail').value);
        pengeluaran_pembayaran_hutang_dagang = pengeluaran_pembayaran_hutang_dagang.replace(/[^\d]/g, "");

        var pengeluaran_angsuran_lain = (document.getElementById('biaya_angsuran_detail').value);
        pengeluaran_angsuran_lain = pengeluaran_angsuran_lain.replace(/[^\d]/g, "");

        var pengeluaran_lainnya = (document.getElementById('biaya_lain_lain_detail').value);
        pengeluaran_lainnya = pengeluaran_lainnya.replace(/[^\d]/g, "");

        var pendapatan_usaha = (document.getElementById('pendapatan_usaha_detail').value);
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

        document.getElementById('pengeluaran_usaha_detail').value = total_pengeluaran;
        document.getElementById('pengeluaran_usaha_hide_detail').value = total;

        var pendapatan_usaha = (document.getElementById('pendapatan_usaha_hide_detail').value);
        pendapatan_usaha = pendapatan_usaha.replace(/[^\d]/g, "");

        var pendapatan = Math.floor(pendapatan_usaha);

        var total_keuntungan = pendapatan - total;
        total_keuntungan = formatter.format(Math.abs(total_keuntungan));
        document.getElementById('keuntungan_usaha_detail').value = total_keuntungan;
    }
    // =============================================================

    //TOTAL PEMASUKAN KAPASITAS BULANAN
    function angsuran_perbulan() {

        var recom_plafon = (document.getElementById('plafon_kredit').value);
        recom_plafon = recom_plafon.replace(/[^\d]/g, "");

        var t = (document.getElementById('jangka_waktu').value);
        console.log(t)

        var b = (document.getElementById('suku_bunga').value);

        var formatter = new Intl.NumberFormat('id-ID', {
            style: 'decimal', //tanpa decimal, tanpa Rp
            // style: 'currency', //dengan 2 decimal, dengan Rp
            // currency: 'IDR',

        });

        var p = Math.floor(recom_plafon);


        var total = (p + (p * t * (b / 100))) / t;
        var pembulatan = Math.round(total);
        var angsuran = formatter.format(Math.abs(pembulatan));

        // var ratusan = total.substring(total.length - 3, total.length);

        document.getElementById('pembayaran_bunga').value = angsuran;
        // } 

        // if (ratusan > 500){
        //     var akhir = pembulatan + (1000-ratusan);
        //     var angsuran        = formatter.format(Math.abs(akhir));
        //     document.getElementById('pembayaran_bunga').value = angsuran;
        // } 
    }
    // =============================================================

    //TOTAL PEMASUKAN KAPASITAS BULANAN
    function angsuran_perbulan_detail() {

        var recom_plafon = (document.getElementById('plafon_kredit_detail').value);
        recom_plafon = recom_plafon.replace(/[^\d]/g, "");

        var t = (document.getElementById('jangka_waktu_detail').value);
        console.log(t)

        var b = (document.getElementById('suku_bunga_detail').value);

        var formatter = new Intl.NumberFormat('id-ID', {
            style: 'decimal', //tanpa decimal, tanpa Rp
            // style: 'currency', //dengan 2 decimal, dengan Rp
            // currency: 'IDR',

        });

        var p = Math.floor(recom_plafon);


        var total = (p + (p * t * (b / 100))) / t;
        var pembulatan = Math.round(total);
        var angsuran = formatter.format(Math.abs(pembulatan));

        document.getElementById('pembayaran_bunga_detail').value = angsuran;
    }
    // =============================================================

    // BUTTON TAMBAH DAH HAPUS UNTUK UPLOAD BUKU TABUNGAN
    function addElement_tabungan(parent_tabungan_id, element_tabungan_tag, element_tabungan_id, html_tabungan) {
        var p = document.getElementById(parent_tabungan_id);
        var new_tabungan_element = document.createElement(element_tabungan_tag);
        new_tabungan_element.setAttribute('id', element_tabungan_id);
        new_tabungan_element.innerHTML = html_tabungan;
        p.appendChild(new_tabungan_element);
    }

    function removeElement_tabungan(element_tabungan_id) {
        var tabungan_element = document.getElementById(element_tabungan_id);
        tabungan_element.parentNode.removeChild(tabungan_element);
    }
    // =============================================================

    // BUTTON TAMBAH DAH HAPUS UNTUK UPLOAD PEMBUKUAN USAHA
    function addElement_pembukuan_usaha(parent_pembukuan_usaha_id, element_pembukuan_usaha_tag, element_pembukuan_usaha_id, html_pembukuan_usaha) {
        var p = document.getElementById(parent_pembukuan_usaha_id);
        var new_pembukuan_usaha_element = document.createElement(element_pembukuan_usaha_tag);
        new_pembukuan_usaha_element.setAttribute('id', element_pembukuan_usaha_id);
        new_pembukuan_usaha_element.innerHTML = html_pembukuan_usaha;
        p.appendChild(new_pembukuan_usaha_element);
    }

    function removeElement_pembukuan_usaha(element_pembukuan_usaha_id) {
        var pembukuan_usaha_element = document.getElementById(element_pembukuan_usaha_id);
        pembukuan_usaha_element.parentNode.removeChild(pembukuan_usaha_element);
    }

    var pembukuan_usaha_id = 0;

    function addFile_pembukuan_usaha() {
        pembukuan_usaha_id++;
        var html_pembukuan_usaha = '<input id="file_pembukuan_usaha" type="file" name="foto_pembukuan_usaha[]" accept="" style="width: 206px;"/>' +
            ' <a href="javascript:void(0)" onclick="javascript:removeElement_pembukuan_usaha(\'pembukuan_usaha-' + pembukuan_usaha_id + '\'); return false;">' +
            '<i class="far fa-window-close fa-lg text-danger"></i></a>';
        addElement_pembukuan_usaha('set-pembukuan_usaha', 'p', 'pembukuan_usaha-' + pembukuan_usaha_id, html_pembukuan_usaha);
    }
    // =============================================================

    // BUTTON TAMBAH DAH HAPUS UNTUK UPLOAD SURAT KETERANGAN USAHA
    function addElement_surat_keterangan_usaha(parent_surat_keterangan_usaha_id, element_surat_keterangan_usaha_tag, element_surat_keterangan_usaha_id, html_surat_keterangan_usaha) {
        var p = document.getElementById(parent_surat_keterangan_usaha_id);
        var new_surat_keterangan_usaha_element = document.createElement(element_surat_keterangan_usaha_tag);
        new_surat_keterangan_usaha_element.setAttribute('id', element_surat_keterangan_usaha_id);
        new_surat_keterangan_usaha_element.innerHTML = html_surat_keterangan_usaha;
        p.appendChild(new_surat_keterangan_usaha_element);
    }

    function removeElement_surat_keterangan_usaha(element_surat_keterangan_usaha_id) {
        var surat_keterangan_usaha_element = document.getElementById(element_surat_keterangan_usaha_id);
        surat_keterangan_usaha_element.parentNode.removeChild(surat_keterangan_usaha_element);
    }

    var surat_keterangan_usaha_id = 0;

    function addFile_surat_keterangan_usaha() {
        surat_keterangan_usaha_id++;
        var html_surat_keterangan_usaha = '<input id="file_surat_keterangan_usaha" type="file" name="lamp_sku[]" accept="" style="width: 206px;"/>' +
            ' <a href="javascript:void(0)" onclick="javascript:removeElement_surat_keterangan_usaha(\'surat_keterangan_usaha-' + surat_keterangan_usaha_id + '\'); return false;">' +
            '<i class="far fa-window-close fa-lg text-danger"></i></a>';
        addElement_surat_keterangan_usaha('set-surat-keterangan-usaha', 'p', 'surat_keterangan_usaha-' + surat_keterangan_usaha_id, html_surat_keterangan_usaha);
    }
    // =============================================================

    // BUTTON TAMBAH DAH HAPUS UNTUK UPLOAD FOTO USAHA
    function addElement_foto_usaha(parent_foto_usaha_id, element_foto_usaha_tag, element_foto_usaha_id, html_foto_usaha) {
        var p = document.getElementById(parent_foto_usaha_id);
        var new_foto_usaha_element = document.createElement(element_foto_usaha_tag);
        new_foto_usaha_element.setAttribute('id', element_foto_usaha_id);
        new_foto_usaha_element.innerHTML = html_foto_usaha;
        p.appendChild(new_foto_usaha_element);
    }

    function removeElement_foto_usaha(element_foto_usaha_id) {
        var foto_usaha_element = document.getElementById(element_foto_usaha_id);
        foto_usaha_element.parentNode.removeChild(foto_usaha_element);
    }

    var foto_usaha_id = 0;

    function addFile_foto_usaha() {
        foto_usaha_id++;
        var html_foto_usaha = '<input id="file_foto_usaha" type="file" name="lamp_foto_usaha[]" accept="" style="width: 206px;"/>' +
            ' <a href="javascript:void(0)" onclick="javascript:removeElement_foto_usaha(\'foto_usaha-' + foto_usaha_id + '\'); return false;">' +
            '<i class="far fa-window-close fa-lg text-danger"></i></a>';
        addElement_foto_usaha('set-foto-usaha', 'p', 'foto_usaha-' + foto_usaha_id, html_foto_usaha);
    }
    // =============================================================

    // JIKA SERIFIKAT SHGB MAKA REQUIRED SHOW
    function showshgb(select) {
        var select = document.getElementById("jenis_sertifikat");
        if (select.value == 'SHGB') {
            $('#wajib_shgb').show();
        } else {
            $('#wajib_shgb').hide();
        }
    }
    // =============================================================

    //HANYA ANGKA
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }
    // =============================================================

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
            $(".add-lamp-agunan-dapur").html(' <i class="fa fa-check text-success"></i>');
            load_agunan();
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



    // Upload Jaminan Agunan Detail
    $('.add_lamp_agunan_depan_detail').on('change', function(e) {
        e.preventDefault();
        var id = $('#input-id-lamp-agunan-detail').val();
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
            $(".add-lamp-agunan-depan").html(' <i class="fa fa-check text-success"></i>');
            load_agunan();
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

    $('.add_lamp_agunan_jalan_detail').on('change', function(e) {
        e.preventDefault();
        var id = $('#input-id-lamp-agunan-detail').val();
        console.log(id);
        var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

        var formData = new FormData();
        formData.append('agunan_bag_jalan', $('input[name="agunan_bag_jalan_detail"]')[0].files[0]);

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
            $(".add-lamp-agunan-jalan").html(' <i class="fa fa-check text-success"></i>');
            load_agunan();
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

    $('.add_lamp_agunan_rtamu_detail').on('change', function(e) {
        e.preventDefault();
        var id = $('#input-id-lamp-agunan-detail').val();
        var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

        var formData = new FormData();
        formData.append('agunan_bag_ruangtamu', $('input[name="agunan_bag_ruangtamu_detail"]')[0].files[0]);

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
            $(".add-lamp-agunan-rtamu").html(' <i class="fa fa-check text-success"></i>');
            load_agunan();
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

    $('.add_lamp_agunan_dapur_detail').on('change', function(e) {
        e.preventDefault();
        var id = $('#input-id-lamp-agunan-detail').val();
        var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

        var formData = new FormData();
        formData.append('agunan_bag_dapur', $('input[name="agunan_bag_dapur_detail"]')[0].files[0]);

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
            $(".add-lamp-agunan-dapur").html(' <i class="fa fa-check text-success"></i>');
            load_agunan();
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

    $('.add_lamp_agunan_rmandi_detail').on('change', function(e) {
        e.preventDefault();
        var id = $('#input-id-lamp-agunan-detail').val();
        var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id + "/updateTambah";

        var formData = new FormData();
        formData.append('agunan_bag_kamarmandi', $('input[name="agunan_bag_kamarmandi_detail"]')[0].files[0]);

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
            $(".add-lamp-agunan-dapur").html(' <i class="fa fa-check text-success"></i>');
            load_agunan();
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


    $(".close_deb").click(function() {
        $('#form_modal_agunan_sertifikat')[0].reset();
        load_data_agunan();
    });

    $('.add_lamp_agunan_rmandi').on('change', function(e) {
        e.preventDefault();
        var id = $('#input-id-lamp-agunan').val();
        var url = "<?php echo config_item('api_url') ?>api/agunan/tanah/" + id;

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
            $(".add-lamp-agunan-rmandi").html(' <i class="fa fa-check text-success"></i>');
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
    // =============================================================

    //RIBUAN
    $('.uang').mask('0.000.000.000', {
        reverse: true
    });
    // =============================================================

    //TAMBAH AGUNAN
    $(".delete-row").click(function() {
        $("table tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });

    var np = 0;
    var nb = 0;
    var nc = 0;
    var nl = 0;
    var ns = 0;
    $(".add-row").click(function() {
        var iddd = 'select_provinsi_agunan' + np++;
        var idkabb = 'select_kabupaten_agunan' + nb++;
        var idkecc = 'select_kecamatan_agunan' + nc++;
        var idkell = 'select_kelurahan_agunan' + nl++;
        var idkodepos = 'select_kelurahan_agunan' + ns++;

        var markup = '<tr><td><input type="checkbox" name="record" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()"></td><td><div class="row"><div class="col-md-6"><div class="form-group"><label for="exampleInput1">Lokasi Agunan<span class="required_notification">*</span></label><select name="tipe_lokasi_agunan[]" class="form-control "><option value="">-- Pilih --</option><option value="PERUM">PERUMAHAN</option><option value="BIASA">NON PERUMAHAN</option></select></div><div class="form-row"><div class="form-group col-md-8"><label >Alamat Sesuai KTP<span class="required_notification">*</span></label><input type="text" name="alamat_agunan[]" class="form-control"  ></div><div class="form-group col-md-2"><label >RT<span class="required_notification">*</span></label><input type="text" class="form-control" name="rt_agunan[]" maxlength="3" onkeypress="return hanyaAngka(event)"></div><div class="form-group col-md-2"><label >RW<span class="required_notification">*</span></label><input type="text" class="form-control" name="rw_agunan[]" maxlength="3" onkeypress="return hanyaAngka(event)"></div></div><div class="form-group"><label>Provinsi<span class="required_notification">*</span></label><select name="id_prov_agunan[]" id="' + iddd + '" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" ><option value="">--Pilih--</option></select></div><div class="form-row"><div class="form-group col-md-6"><label>Kabupaten/Kota<span class="required_notification">*</span></label><select id="' + idkabb + '" name="id_kab_agunan[]" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" ><option value="">--Pilih--</option></select></div><div class="form-group col-md-6"><label>Kecamatan<span class="required_notification">*</span></label><select name="id_kec_agunan[]" id="' + idkecc + '" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" ><option value="">--Pilih--</option></select></div></div><div class="form-row"><div class="form-group col-md-6"><label>Kelurahan<span class="required_notification">*</span></label><select name="id_kel_agunan[]" id="' + idkell + '" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" ><option value="">--Pilih--</option></select></div><div class="form-group col-md-6"><label>Kode POS<span class="required_notification">*</span></label><input type="text" name="kode_pos_agunan[]" id="' + idkodepos + '" class="form-control" maxlength="5" onkeypress="return hanyaAngka(event)"></div></div><div class="form-row"><div class="form-group col-md-6"><label >Luas Tanah<span class="required_notification">*</span></label><input type="text" class="form-control" name="luas_tanah[]" ></div><div class="form-group col-md-6"><label >Luas Bangunan<span class="required_notification">*</span></label><input type="text" class="form-control"  name="luas_bangunan[]" ></div></div></div><div class="col-md-6"><div class="form-group"><label for="exampleInput1" >Nama Pemilik Sertifikat<span class="required_notification">*</span></label><input type="text" name="nama_pemilik_sertifikat[]" class="form-control "></div><div class="form-group"><label for="exampleInput1" >Jenis Sertifikat</label><select name="jenis_sertifikat[]" class="form-control "><option value="">-- Pilih --</option><option value="SHM">SHM</option><option value="SHGB">SHGB</option></select></div><div class="form-group"><label for="exampleInputEmail1" >Nomor Sertifikat<span class="required_notification">*</span></label><input type="text" class="form-control" name="no_sertifikat[]" aria-describedby=""></div><div class="form-group"> <label for="exampleInputEmail1" >Tanggal & Nomor Ukur sertifikat</label><input type="text" class="form-control" name="no_ukur_sertifikat[]"></div><div class="form-row"><div class="form-group col-md-6"><label>Tanggal Berlaku SHGB<span class="required_notification">*</span></label><div class="input-group"><div class="input-group-prepend"><span class="input-group-text"><i class="far fa-calendar-alt"></i></span></div><input type="text" name="tgl_berlaku_shgb[]" class="datepicker-here form-control" data-language="en"  data-date-format="dd-mm-yyyy"/></div></div><div class="form-group col-md-6"><label for="exampleInputEmail1" >Nomor IMB<small><i>(Jika Ada)</i></small></label><input type="text" class="form-control" name="no_imb[]"></div></div><div class="form-row"><div class="form-group col-md-6"><label for="exampleInputEmail1" >NJOP<span class="required_notification">*</span></label><input type="text" class="form-control uang" name="njop[]"></div><div class="form-group col-md-6"><label for="exampleInputEmail1" >NOP<span class="required_notification">*</span></label><input type="text" class="form-control" name="nop[]"></div></div></div></div><div class="form-group"><label>LAMPIRAN<span class="required_notification">*</span></label></div><div class="row"><div class="col-md-6"><div class="form-group"><label >Foto Agunan Tampak Depan<span class="required_notification">*</span></label><div class="input-group"><div class="custom-file"><input type="file" name="agunan_bag_depan[]" class="custom-file-input" ><label class="custom-file-label" style="font-size: 11px" >Choose file</label></div></div></div><div class="form-group"><label >Foto Agunan Tampak Jalan<span class="required_notification">*</span></label><div class="input-group"><div class="custom-file"><input type="file" name="agunan_bag_jalan[]" class="custom-file-input" ><label class="custom-file-label" style="font-size: 11px" >Choose file</label></div></div></div><div class="form-group"><label >Foto Agunan Tampak Ruang Tamu<span class="required_notification">*</span></label><div class="input-group"><div class="custom-file"><input type="file" name="agunan_bag_ruangtamu[]" class="custom-file-input" ><label class="custom-file-label" style="font-size: 11px" >Choose file</label></div></div></div></div><div class="col-md-6"><div class="form-group"><label >Foto Agunan Tampak Dapur<span class="required_notification">*</span></label><div class="input-group"><div class="custom-file"><input type="file" name="agunan_bag_dapur[]" class="custom-file-input" ><label class="custom-file-label" style="font-size: 11px" >Choose file</label></div></div></div> <div class="form-group"><label >Foto Agunan Tampak Kamar Mandi<span class="required_notification">*</span></label><div class="input-group"><div class="custom-file"><input type="file" name="agunan_bag_kamarmandi[]" class="custom-file-input" ><label class="custom-file-label" style="font-size: 11px" >Choose file</label></div></div></div> </div></div> </td></tr>';
        $("#table tbody").append(markup);

        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });

        //RIBUAN
        $('.uang').mask('0.000.000.000', {
            reverse: true
        });
        // =============================================================

        get_provinsi()
            .done(function(res) {
                var select = [];
                $.each(res.data, function(i, e) {
                    var option = [
                        '<option value="' + e.id + '">' + e.nama + '</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_detail select[id=' + iddd + ']').html(select);
            })

        $('#' + iddd).change(function() {
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
                    $('#form_detail select[id=' + idkabb + ']').html(select1 + select);
                }
            });
        });

        $('#' + idkabb).change(function() {
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
                    $('#form_detail select[id=' + idkecc + ']').html(select1 + select);
                }
            });
        });

        $('#' + idkecc).change(function() {
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
                    $('#form_detail select[id=' + idkell + ']').html(select1 + select);
                }
            });
        });

        $('#' + idkell).change(function() {
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
                    $('#form_detail input[id=' + idkodepos + ']').val(data.kode_pos);
                }
            });
        });
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    });
    // =============================================================

    $(function() {
        var provinsi_ktp = [];
        $('#form_debitur select[id=provinsi_ktp ]').on('click', function(e) {
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

        $('#form_detail select[id=provinsi_domisili ]').on('click', function(e) {
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail  select[id=kabupaten_ktp_dup]').html(select1 + select);
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=kecamatan_ktp_dup]').html(select1 + select);
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=kelurahan_ktp_dup]').html(select1 + select);
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail  select[id=kabupaten_domisili_dup]').html(select1 + select);
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=kecamatan_domisili_dup]').html(select1 + select);
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=kelurahan_domisili_dup]').html(select1 + select);
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

                    $('#form_detail input[name=kode_pos_domisili]').val(data.kode_pos);
                }
            });
        });

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
                    var select_provinsi_kantor = [];
                    var select_provinsi_kantor1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option_provinsi_kantor = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select_provinsi_kantor.push(option_provinsi_kantor);
                    });
                    $('#form_detail select[id=kabupaten_kantor]').html(select_provinsi_kantor1 + select_provinsi_kantor);
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=kecamatan_kantor]').html(select1 + select);
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
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_detail select[id=kelurahan_kantor]').html(select1 + select);
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

                    $('#form_detail input[name=kode_pos_kantor]').val(data.kode_pos);
                }
            });
        });

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

        get_data_debitur = function(opts, id_debitur) {
            var url = '<?php echo config_item('api_url') ?>api/debitur/';

            if (id_debitur != undefined) {
                url += id_debitur;
            }

            if (opts != undefined) {
                var data = opts;
            }

            return $.ajax({
                // type : 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
        }

        get_data_pasangan = function(opts, id_pasangan) {
            var url = '<?php echo config_item('api_url') ?>api/pasangan/';

            if (id_pasangan != undefined) {
                url += id_pasangan;
            }

            if (opts != undefined) {
                var data = opts;
            }

            return $.ajax({
                // type : 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
        }

        get_data_fasilitas = function(opts, id_fasilitas) {
            var url = '<?php echo config_item('api_url') ?>api/faspin/';

            if (id_fasilitas != undefined) {
                url += id_fasilitas;
            }

            if (opts != undefined) {
                var data = opts;
            }

            return $.ajax({
                // type : 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
        }

        update_ao = function(opts, id) {
            var data = opts;
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/mao/' + id;
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


        //UPDATE FASILITAS
        $(function() {

            update_fasilitas = function(opts, id) {
                var data = opts;
                var url = '<?php echo $this->config->item('api_url'); ?>api/master/mcc/' + id;
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

            //SUBMIT FASILITAS PINJAMAN
            $('#form_fasilitas').on('submit', function(e) {
                var id = $('input[name=id_fasilitas_pinjaman]', this).val();
                e.preventDefault();
                var formData = new FormData();
                //     //Data Pasangan
                formData.append('id_asal_data', $('select[name=asal_data]', this).val());
                formData.append('nama_marketing', $('input[name=nama_marketing]', this).val());
                var plafon = $('input[name=plafon]', this).val();
                plafon = plafon.replace(/[^\d]/g, "");
                formData.append('plafon_pinjaman', plafon);

                formData.append('tenor_pinjaman', $('select[name=tenor]', this).val());
                formData.append('jenis_pinjaman', $('select[name=jenis_pinjaman]', this).val());
                formData.append('tujuan_pinjaman', $('textarea[name=tujuan_pinjaman]', this).val());

                update_fasilitas(formData, id)
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
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                },
                beforeSend: function() {
                    let html =
                        "<div width='100%' class='text-center'>" +
                        "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                        "</div>";

                    $('#load_data').html(html);
                    $('#modal_load_data').modal('show');
                }
            });
        }

        update_pasangan = function(opts, id) {
            var data = opts;
            var url = '<?php echo $this->config->item('api_url'); ?>/api/pasangan/' + id;
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
                        "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                        "</div>";

                    $('#load_data').html(html);
                    $('#modal_load_data').modal('show');
                }
            });
        }

        update_penjamin = function(opts, id) {
            var data = opts;
            var url = '<?php echo $this->config->item('api_url'); ?>api/penjamin/' + id;
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


        $('#select_provinsi_kantor_usaha_pas').change(function() {
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
                    $('#form_detail select[id=select_kab_kantor_usaha_pas]').html(select1 + select);
                }
            });
        });


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
                    var select = [];
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_modal_agunan_sertifikat select[id=select_kabupaten_agunan]').html(select1 + select);
                }
            });
        });


        $('#select_kab_kantor_usaha_pas').change(function() {
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
                    $('#form_detail select[id=select_kecamatan_kantor_usaha_pas').html(select1 + select);
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
                    var select = [];
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_modal_agunan_sertifikat select[id=select_kecamatan_agunan]').html(select1 + select);
                }
            });
        });


        $('#select_kecamatan_kantor_usaha_pas').change(function() {
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
                    $('#form_detail select[id=select_kelurahan_kantor_usaha_pas]').html(select1 + select);
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
                    var select = [];
                    var select1 = '<option value="">--Pilih--</option>';
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_modal_agunan_sertifikat select[id=select_kelurahan_agunan]').html(select1 + select);
                }
            });
        });


        $('#select_kelurahan_kantor_usaha_pas').change(function() {
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
                    $('#form_modal_agunan_sertifikat input[name=kode_pos_agunan]').val(data.kode_pos);
                }
            });
        });

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


        $('#select_provinsi_ktp_dup').hide();
        $('#select_kabupaten_ktp_dup').hide();
        $('#select_kecamatan_ktp_dup').hide();
        $('#select_kelurahan_ktp_dup').hide();

        $('#select_provinsi_domisili_dup').hide();
        $('#select_kabupaten_domisili_dup').hide();
        $('#select_kecamatan_domisili_dup').hide();
        $('#select_kelurahan_domisili_dup').hide();

        // Click ubah
        $('#data_pengajuan').on('click', '.edit', function(e) {
            e.preventDefault();
            $("#close_pengajuan").click();
            $("#detail_ao").hide();
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
            var html14 = [];
            var htmlideb = [];
            var htmlpefindo = [];

            get_credit_checking({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);
                    // id = data.id;
                    var id_debitur = data.data_debitur.id;
                    var id_pasangan = data.data_pasangan.id;
                    var id_credit = data.id;
                    var id_fasilitas = data.fasilitas_pinjaman.id;

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
                            $('#form_detail select[id=produk]').html(select);
                        })

                    get_provinsi()
                        .done(function(res) {
                            var select_prov_ktp = [];
                            var select_prov_ktp1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option_prov_ktp = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select_prov_ktp.push(option_prov_ktp);
                            });
                            $('#form_detail select[id=provinsi_ktp_dup]').html(select_prov_ktp1 + select_prov_ktp);
                        })

                    get_provinsi()
                        .done(function(res) {
                            var select_prov_dom = [];
                            var select_prov_dom1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select_prov_dom.push(option);
                            });
                            $('#form_detail select[id=provinsi_domisili_dup]').html(select_prov_dom1 + select_prov_dom);
                        })

                    $('#form_detail input[type=hidden][name=id]').val(data.id);
                    $('#form_modal_tambah_penjamin input[type=hidden][name=add_id_so_penjamin]').val(data.id);
                    $('#form_edit_ktp_pasangan input[type=hidden][name=id_pasangan_ktp]').val(data.data_pasangan.id);
                    $('#form_edit_buku_nikah input[type=hidden][name=id_pasangan_buku_nikah]').val(data.data_pasangan.id);
                    $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val(data.id);
                    $('#form_detail input[type=hidden][name=id_fasilitas_pinjaman]').val(data.id);
                    $('#form_detail input[type=hidden][name=id_debitur]').val(data.data_debitur.id);
                    $('#form_tambah_data_anak input[type=hidden][name=id_debitur_anak]').val(data.data_debitur.id);
                    $('#form_surat_keterangan_kerja input[type=hidden][name=id_debitur_surat_keterangan_kerja]').val(data.data_debitur.id);
                    $('#form_slip_gaji input[type=hidden][name=id_debitur_slip_gaji]').val(data.data_debitur.id);
                    $('#form_persetujuan_ideb_ideb input[type=hidden][name=id_debitur_form_persetujuan_ideb]').val(data.id);
                    $('#form_buku_tabungan input[type=hidden][name=id_debitur_form_buku_tabungan]').val(data.data_debitur.id);
                    $('#form_surat_keterangan_usaha_usaha input[type=hidden][name=id_debitur_surat_keterangan_usaha]').val(data.data_debitur.id);
                    $('#form_pembukuan_usaha_usaha input[type=hidden][name=id_debitur_pembukuan_usaha]').val(data.data_debitur.id);
                    $('#form_foto_usaha_usaha input[type=hidden][name=id_debitur_foto_usaha]').val(data.data_debitur.id);

                    $('#form_edit_ktp_deb input[type=hidden][name=id_debitur_ktp]').val(data.data_debitur.id);
                    $('#form_edit_kk_deb input[type=hidden][name=id_debitur_kk]').val(data.data_debitur.id);
                    $('#form_edit_sertifikat_deb input[type=hidden][name=id_debitur_sertifikat]').val(data.data_debitur.id);
                    $('#form_edit_imb_deb input[type=hidden][name=id_debitur_imb]').val(data.data_debitur.id);
                    $('#form_edit_pbb_deb input[type=hidden][name=id_debitur_pbb]').val(data.data_debitur.id);
                    $('#form_edit_buku_tabungan_deb input[type=hidden][name=id_debitur_buku_tabungan]').val(data.data_debitur.id);

                    // var id_penjamin = data.data_penjamin.id;
                    $('#form_detail input[type=hidden][name=id_pasangan]').val(data.data_pasangan.id);
                    $('#form_detail input[name=nomor_so]').val(data.nomor_so);
                    $('#form_detail input[name=nama_so]').val(data.nama_so);
                    $('#form_detail textarea[name=notes_so]').val(data.notes_so);

                    var id_data_anak = $('#form_tambah_data_anak input[type=hidden][name=id_debitur_anak]').val();
                    var url_data_anak = "<?php echo $this->config->item('api_url'); ?>api/debitur/" + id_data_anak;
                    $.ajax({
                        type: "get",
                        url: url_data_anak,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        success: function(response) {
                            var data_anak = response.data;
                            var html = [];
                            console.log(data_anak)
                            $.each(data_anak.anak, function(index, item) {
                                var tr = [
                                    '<tr>',
                                    '<td>' + item.nama + '</td>',
                                    '<td>' + item.tgl_lahir + '</td>',
                                    '<td style="width:5px"><button type="button" class="btn btn-default bg-gradient-danger btn-sm delete_anak"  title="Hapus Data Anak"  data="' + item.anak_id + '"><i style="color: #fff;" class="fas fa-window-close"></i></button></td>',
                                    '</tr>'
                                ].join('\n');
                                html.push(tr);
                                $('#data_anak').html(html);
                            })
                        }
                    });


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

                    var plafon_deb = (rubah(data.fasilitas_pinjaman[0].plafon));
                    $('#form_detail input[id=plafon_deb]').val(plafon_deb);

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
                    $('#form_detail  select[name=tenor]').html(select_tenor);

                    if (data.fasilitas_pinjaman[0].tenor == "12") {
                        document.getElementById("tenor12").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman[0].tenor == "18") {
                        document.getElementById("tenor18").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman[0].tenor == "24") {
                        document.getElementById("tenor24").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman[0].tenor == "30") {
                        document.getElementById("tenor30").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman[0].tenor == "36") {
                        document.getElementById("tenor36").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman[0].tenor == "48") {
                        document.getElementById("tenor48").selected = "true";
                    }
                    if (data.fasilitas_pinjaman.tenor == "60") {
                        document.getElementById("tenor60").selected = "true";
                    }

                    var select_jenis_pinjaman1 = [];
                    var option_jenis_pinjaman1 = [
                        '<option id="konsumtif" value="KONSUMTIF">KONSUMTIF</option>',
                        '<option id="modal_kerja" value="MODAL KERJA">MODAL KERJA</option>',
                        '<option id="investasi" value="INVESTASI">INVESTASI</option>'
                    ].join('\n');
                    select_jenis_pinjaman1.push(option_jenis_pinjaman1);
                    $('#form_detail  select[id=select_jenis_pinjaman]').html(select_jenis_pinjaman1);

                    if (data.fasilitas_pinjaman[0].jenis_pinjaman == "KONSUMTIF") {
                        document.getElementById("konsumtif").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman[0].jenis_pinjaman == "MODAL KERJA") {
                        document.getElementById("modal_kerja").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman[0].jenis_pinjaman = "INVESTASI") {
                        document.getElementById("investasi").selected = "true";
                    }

                    $('#form_detail input[name=jenis_pinjaman_credit]').val(data.fasilitas_pinjaman[0].jenis_pinjaman);
                    $('#form_detail textarea[name=tujuan_pinjaman]').val(data.fasilitas_pinjaman[0].tujuan_pinjaman);
                    $('#form_detail textarea[name=tujuan_pinjaman_credit]').val(data.fasilitas_pinjaman[0].tujuan_pinjaman);
                    $('#form_detail input[name=nama_debitur]').val(data.data_debitur.nama_lengkap);
                    $('#form_detail input[name=gelar_keagamaan]').val(data.data_debitur.gelar_keagamaan);
                    $('#form_detail input[name=gelar_pendidikan]').val(data.data_debitur.gelar_pendidikan);

                    if (data.data_debitur.jenis_kelamin == "L") {
                        document.getElementById("L").selected = "true";
                    } else {
                        document.getElementById("P").selected = "true";
                    }

                    if (data.data_debitur.status_nikah == "Menikah") {
                        document.getElementById("nikah").selected = "true";
                    } else
                    if (data.data_debitur.status_nikah == "Single") {
                        document.getElementById("single").selected = "true";
                    } else
                    if (data.data_debitur.status_nikah == "Janda/Duda") {
                        document.getElementById("cerai").selected = "true";
                    }

                    $('#form_detail input[name=ibu_kandung]').val(data.data_debitur.ibu_kandung);
                    $('#form_detail input[name=no_ktp]').val(data.data_debitur.no_ktp);
                    $('#form_detail input[name=no_ktp_kk]').val(data.data_debitur.no_ktp_kk);
                    $('#form_detail input[name=no_kk]').val(data.data_debitur.no_kk);
                    $('#form_detail input[name=no_npwp]').val(data.data_debitur.no_npwp);
                    $('#form_detail input[name=tempat_lahir]').val(data.data_debitur.tempat_lahir);
                    $('#form_detail input[name=tgl_lahir_deb]').val(data.data_debitur.tgl_lahir);

                    if (data.data_debitur.agama == "ISLAM") {
                        document.getElementById("agama_deb1").selected = "true";
                    } else
                    if (data.data_debitur.agama == "KATHOLIK") {
                        document.getElementById("agama_deb2").selected = "true";
                    } else
                    if (data.data_debitur.agama == "KRISTEN") {
                        document.getElementById("agama_deb3").selected = "true";
                    } else
                    if (data.data_debitur.agama == "HINDU") {
                        document.getElementById("agama_deb4").selected = "true";
                    } else
                    if (data.data_debitur.agama == "BUDHA") {
                        document.getElementById("agama_deb5").selected = "true";
                    } else
                    if (data.data_debitur.agama == "LAIN2 KEPERCAYAAN") {
                        document.getElementById("agama_deb6").selected = "true";
                    }


                    $('#form_detail input[name=tinggi_badan]').val(data.data_debitur.tinggi_badan);
                    $('#form_detail input[name=berat_badan]').val(data.data_debitur.berat_badan);
                    $('#form_detail input[name=alamat_ktp]').val(data.data_debitur.alamat_ktp.alamat_singkat);
                    $('#form_detail input[name=rt_ktp]').val(data.data_debitur.alamat_ktp.rt);
                    $('#form_detail input[name=rw_ktp]').val(data.data_debitur.alamat_ktp.rw);

                    var select_provinsi_ktp = [];
                    var option_provinsi_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.provinsi.id + '">' + data.data_debitur.alamat_ktp.provinsi.nama + '</option>'
                    ].join('\n');
                    select_provinsi_ktp.push(option_provinsi_ktp);
                    $('#form_detail select[id=provinsi_ktp]').html(select_provinsi_ktp);
                    var select_kabupaten_ktp = [];
                    var option_kabupaten_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.kabupaten.id + '">' + data.data_debitur.alamat_ktp.kabupaten.nama + '</option>'
                    ].join('\n');
                    select_kabupaten_ktp.push(option_kabupaten_ktp);
                    $('#form_detail select[id=kabupaten_ktp]').html(select_kabupaten_ktp);

                    var select_kecamatan_ktp = [];
                    var option_kecamatan_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.kecamatan.id + '">' + data.data_debitur.alamat_ktp.kecamatan.nama + '</option>'
                    ].join('\n');
                    select_kecamatan_ktp.push(option_kecamatan_ktp);
                    $('#form_detail select[id=kecamatan_ktp]').html(select_kecamatan_ktp);

                    var select_kelurahan_ktp = [];
                    var option_kelurahan_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.kelurahan.id + '">' + data.data_debitur.alamat_ktp.kelurahan.nama + '</option>'
                    ].join('\n');
                    select_kelurahan_ktp.push(option_kelurahan_ktp);
                    $('#form_detail select[id=kelurahan_ktp]').html(select_kelurahan_ktp);



                    $('#form_detail input[name=kode_pos_ktp]').val(data.data_debitur.alamat_ktp.kode_pos);
                    $('#form_detail input[name=alamat_domisili]').val(data.data_debitur.alamat_domisili.alamat_singkat);
                    $('#form_detail input[name=rt_domisili]').val(data.data_debitur.alamat_domisili.rt);
                    $('#form_detail input[name=rw_domisili]').val(data.data_debitur.alamat_domisili.rw);

                    var select_provinsi_domisili = [];
                    var option_provinsi_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.provinsi.id + '">' + data.data_debitur.alamat_domisili.provinsi.nama + '</option>'
                    ].join('\n');
                    select_provinsi_domisili.push(option_provinsi_domisili);
                    $('#form_detail select[id=provinsi_domisili]').html(select_provinsi_domisili);

                    var select_kabupaten_domisili = [];
                    var option_kabupaten_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.kabupaten.id + '">' + data.data_debitur.alamat_domisili.kabupaten.nama + '</option>'
                    ].join('\n');
                    select_kabupaten_domisili.push(option_kabupaten_domisili);
                    $('#form_detail select[id=kabupaten_domisili]').html(select_kabupaten_domisili);

                    var select_kecamatan_domisili = [];
                    var option_kecamatan_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.kecamatan.id + '">' + data.data_debitur.alamat_domisili.kecamatan.nama + '</option>'
                    ].join('\n');
                    select_kecamatan_domisili.push(option_kecamatan_domisili);
                    $('#form_detail select[id=kecamatan_domisili]').html(select_kecamatan_domisili);

                    var select_kelurahan_domisili = [];
                    var option_kelurahan_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.kelurahan.id + '">' + data.data_debitur.alamat_domisili.kelurahan.nama + '</option>'
                    ].join('\n');
                    select_kelurahan_domisili.push(option_kelurahan_domisili);
                    $('#form_detail select[id=kelurahan_domisili]').html(select_kelurahan_domisili);

                    $('#form_detail input[name=kode_pos_domisili]').val(data.data_debitur.alamat_domisili.kode_pos);
                    var select_pendidikan_terakhir = [];
                    var option_pendidikan_terakhir = [
                        '<option value="' + data.data_debitur.pendidikan_terakhir + '">' + data.data_debitur.pendidikan_terakhir + '</option>',
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

                    $('#form_detail input[name=jumlah_tanggungan]').val(data.data_debitur.jumlah_tanggungan);
                    $('#form_detail input[name=no_telp]').val(data.data_debitur.no_telp);
                    $('#form_detail input[name=no_hp]').val(data.data_debitur.no_hp);
                    $('#form_detail input[name=email]').val(data.data_debitur.email);

                    if (data.data_debitur.alamat_surat == "ALAMAT DOMISILI") {
                        document.getElementById("alamat_surat_domisili").selected = "true";
                    } else
                    if (data.data_debitur.alamat_surat == "ALAMAT KTP") {
                        document.getElementById("alamat_surat_ktp").selected = "true";
                    }

                    if (data.data_debitur.alamat_surat == "ALAMAT DOMISILI") {
                        document.getElementById("alamat_surat_domisili").selected = "true";
                    } else
                    if (data.data_debitur.alamat_surat == "ALAMAT KTP") {
                        document.getElementById("alamat_surat_ktp").selected = "true";
                    }

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
                            if (data.data_debitur.pekerjaan.nama_pekerjaan = '' + data.data_debitur.pekerjaan.nama_pekerjaan + '') {
                                document.getElementById('' + data.data_debitur.pekerjaan.nama_pekerjaan + 'pekerjaan_deb').selected = "true";
                            }
                        })

                    $('#form_detail input[name=nama_perusahaan]').val(data.data_debitur.pekerjaan.nama_tempat_kerja);
                    $('#form_detail input[name=posisi]').val(data.data_debitur.pekerjaan.posisi_pekerjaan);
                    $('#form_detail input[name=jenis_usaha]').val(data.data_debitur.pekerjaan.jenis_pekerjaan);
                    $('#form_detail input[name=alamat_usaha_kantor]').val(data.data_debitur.pekerjaan.alamat.alamat_singkat);
                    $('#form_detail input[name=rt_usaha_kantor]').val(data.data_debitur.pekerjaan.alamat.rt);
                    $('#form_detail input[name=rw_usaha_kantor]').val(data.data_debitur.pekerjaan.alamat.rw);
                    $('#form_detail input[name=kode_pos_kantor]').val(data.data_debitur.pekerjaan.alamat.kode_pos);
                    $('#form_detail input[name=masa_kerja_usaha]').val(data.data_debitur.pekerjaan.tgl_mulai_kerja);
                    $('#form_detail input[name=no_telp_kantor_usaha]').val(data.data_debitur.pekerjaan.no_telp_tempat_kerja);


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
                            $('#form_detail select[id=provinsi_kantor]').html(select1 + select);
                            if (data.data_debitur.pekerjaan.alamat.provinsi.id = '' + data.data_debitur.pekerjaan.alamat.provinsi.id + '') {
                                document.getElementById('' + data.data_debitur.pekerjaan.alamat.provinsi.id + 'prov_pek_deb').selected = "true";
                            }
                        })

                    if (data.data_debitur.pekerjaan.alamat.kabupaten.id == null) {
                        var select_kabupaten_kantor = [];
                        var option_kabupaten_kantor = [
                            '<option value=""></option>',
                        ].join('\n');
                        select_kabupaten_kantor.push(option_kabupaten_kantor);
                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor);
                    } else {
                        var select_kabupaten_kantor = [];
                        var option_kabupaten_kantor = [
                            '<option value="' + data.data_debitur.pekerjaan.alamat.kabupaten.id + '">' + data.data_debitur.pekerjaan.alamat.kabupaten.nama + '</option>',
                        ].join('\n');
                        select_kabupaten_kantor.push(option_kabupaten_kantor);
                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor);
                    }

                    if (data.data_debitur.pekerjaan.alamat.kecamatan.id == null) {
                        var select_kecamatan_kantor = [];
                        var option_kecamatan_kantor = [
                            '<option value=""></option>',
                        ].join('\n');
                        select_kecamatan_kantor.push(option_kecamatan_kantor);
                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor);
                    } else {
                        var select_kecamatan_kantor = [];
                        var option_kecamatan_kantor = [
                            '<option value="' + data.data_debitur.pekerjaan.alamat.kecamatan.id + '">' + data.data_debitur.pekerjaan.alamat.kecamatan.nama + '</option>',
                        ].join('\n');
                        select_kecamatan_kantor.push(option_kecamatan_kantor);
                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor);
                    }
                    if (data.data_debitur.pekerjaan.alamat.kelurahan.id == null) {
                        var select_kelurahan_kantor = [];
                        var option_kelurahan_kantor = [
                            '<option value=""></option>',
                        ].join('\n');
                        select_kelurahan_kantor.push(option_kelurahan_kantor);
                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor);
                    } else {
                        var select_kelurahan_kantor = [];
                        var option_kelurahan_kantor = [
                            '<option value="' + data.data_debitur.pekerjaan.alamat.kelurahan.id + '">' + data.data_debitur.pekerjaan.alamat.kelurahan.nama + '</option>',
                        ].join('\n');
                        select_kelurahan_kantor.push(option_kelurahan_kantor);
                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor);
                    }

                    if (data.data_debitur.lampiran.lamp_ktp == null) {
                        var a1 = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_ktp').html(html);
                    } else {
                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_ktp').html(html);
                    }

                    if (data.data_debitur.lampiran.lamp_kk == null) {
                        var b = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html1.push(b);
                        $('#gambar_kk').html(html1);
                    } else {
                        var b = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KK Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_kk + '" /> </a>'
                        ].join('\n');
                        html1.push(b);
                        $('#gambar_kk').html(html1);
                    }

                    if (data.data_debitur.lampiran.lamp_sertifikat == null) {
                        var c = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html2.push(c);
                        $('#gambar_sertifikat').html(html2);
                    } else {
                        var c = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Sertifkat Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                        ].join('\n');
                        html2.push(c);
                        $('#gambar_sertifikat').html(html2);
                    }

                    if (data.data_debitur.lampiran.lamp_sttp_pbb == null) {
                        var d = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html3.push(d);
                        $('#gambar_pbb').html(html3);
                    } else {
                        var d = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran PBB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                        ].join('\n');
                        html3.push(d);
                        $('#gambar_pbb').html(html3);
                    }

                    if (data.data_debitur.lampiran.lamp_imb == null) {
                        var e = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html4.push(e);
                        $('#gambar_imb').html(html4);
                    } else {
                        var e = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_imb + '" /> </a>'
                        ].join('\n');
                        html4.push(e);
                        $('#gambar_imb').html(html4);
                    }


                    //PASANGAN
                    if (data.data_pasangan.id == null) {
                        $('#form_ktp_pasangan').hide();
                        $('#form_buku_nikah').hide();
                        $('#form_pasangan_debitur').hide();
                    } else {
                        $('#form_detail input[name=nama_lengkap_pas]').val(data.data_pasangan.nama_lengkap);
                        $('#form_detail input[name=nama_ibu_kandung_pas]').val(data.data_pasangan.nama_ibu_kandung);
                        if (data.data_pasangan.jenis_kelamin == "L") {
                            document.getElementById("L_pas").selected = "true";
                        } else {
                            document.getElementById("P_pas").selected = "true";
                        }

                        $('#form_detail input[name=no_ktp_pas]').val(data.data_pasangan.no_ktp);
                        $('#form_detail input[name=no_ktp_kk_pas]').val(data.data_pasangan.no_ktp_kk);
                        $('#form_detail input[name=no_npwp_pas]').val(data.data_pasangan.no_npwp);
                        $('#form_detail input[name=tempat_lahir_pas]').val(data.data_pasangan.tempat_lahir);
                        $('#form_detail input[name=tgl_lahir_pas]').val(data.data_pasangan.tgl_lahir);
                        $('#form_detail textarea[name=alamat_ktp_pas]').val(data.data_pasangan.alamat_ktp);
                        $('#form_detail input[name=no_telp_pas]').val(data.data_pasangan.no_telp);

                        var f = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Pasangan"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                        ].join('\n');
                        html6.push(f);
                        $('#gambar_ktp_pasangan').html(html6);

                        var g = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                        ].join('\n');
                        html7.push(g);
                        $('#gambar_buku_nikah').html(html7);

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

                        get_provinsi()
                            .done(function(res) {
                                var select_provinsi_kantor_usaha_pas = [];
                                var select_provinsi_kantor_usaha_pas1 = '<option value="">--Pilih--</option>';
                                $.each(res.data, function(i, e) {
                                    var option_provinsi_kantor_usaha_pas = [
                                        '<option id="' + e.id + '" value="' + e.id + '">' + e.nama + '</option>'
                                    ].join('\n');
                                    select_provinsi_kantor_usaha_pas.push(option_provinsi_kantor_usaha_pas);
                                });
                                $('#form_detail select[id=select_provinsi_kantor_usaha_pas]').html(select_provinsi_kantor_usaha_pas1 + select_provinsi_kantor_usaha_pas);
                            })
                    }

                    //PENJAMIN
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

                    //IDEB & PEFINDO
                    $.each(data.lampiran.ideb, function(item) {
                        var a = [
                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data.lampiran.ideb[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data.lampiran.ideb[item] + '</p></a>',
                        ].join('\n');
                        htmlideb.push(a);
                    });
                    $('#dataideb').html(htmlideb);

                    $.each(data.lampiran.pefindo, function(item) {
                        var b = [
                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data.lampiran.pefindo[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data.lampiran.pefindo[item] + '</p></a>',
                        ].join('\n');
                        htmlpefindo.push(b);
                    });
                    $('#datapefindo').html(htmlpefindo);

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                });
            hide_all();
            $('#lihat_detail').show();
        });

        // Click detail
        $('#data_creditchecking').on('click', '.edit', function(e) {
            e.preventDefault();
            $("#input_memorandum_ao").hide();
            $("#detail_ao").show();
            $("#lamp_deb").hide();
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
            var htmlideb = [];
            var htmlpefindo = [];

            get_detail({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    id = data.id;
                    var id_debitur = data.data_debitur.id;
                    var id_pasangan = data.data_pasangan.id;
                    var id_credit = data.id;
                    var id_fasilitas = data.fasilitas_pinjaman.id;

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
                            $('#form_detail select[id=produk]').html(select);
                        })

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
                            $('#form_detail select[id=provinsi_ktp_dup]').html(select1 + select);
                        })

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
                            $('#form_detail select[id=provinsi_domisili_dup]').html(select1 + select);
                        })

                    $('#form_detail input[type=hidden][name=id]').val(data.id_trans_so);
                    $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val(data.id_trans_so);
                    $('#form_modal_tambah_penjamin input[type=hidden][name=add_id_so_penjamin]').val(data.id_trans_so);
                    $('#form_modal_agunan_sertifikat_detail input[type=hidden][name=id_trans_so_aguanan_detail]').val(data.id_trans_so);
                    $('#form_verifikasi_dokumen input[type=hidden][name=id_verifikasi]').val(data.verifikasi.id);
                    $('#form_validasi input[type=hidden][name=id_validasi]').val(data.validasi.id);
                    $('#form_kapasitas_bulanan input[type=hidden][name=id_kapasitas_bulanan]').val(data.kapasitas_bulanan.id);
                    $('#form_pendapatan_pengeluaran_usaha input[type=hidden][name=id_pendapatan_usaha_detail]').val(data.pendapatan_usaha.id);
                    $('#form_pemeriksaan_tanah_bangunan input[type=hidden][name=id_pemeriksaan_tanah_bangunan]').val(data.pemeriksaan.agunan_tanah[0].id);
                    $('#form_recom_ao input[type=hidden][name=id_recom_ao_detail]').val(data.rekomendasi_ao.id);
                    $('#form_detail input[type=hidden][name=id_fasilitas_pinjaman]').val(data.id_trans_so);
                    $('#form_detail input[type=hidden][name=id_debitur]').val(data.data_debitur.id);
                    $('#form_surat_keterangan_kerja input[type=hidden][name=id_debitur_surat_keterangan_kerja]').val(data.data_debitur.id);
                    $('#form_slip_gaji input[type=hidden][name=id_debitur_slip_gaji]').val(data.data_debitur.id);
                    $('#form_persetujuan_ideb_ideb input[type=hidden][name=id_debitur_form_persetujuan_ideb]').val(data.id_trans_so);
                    $('#form_buku_tabungan input[type=hidden][name=id_debitur_form_buku_tabungan]').val(data.data_debitur.id);
                    $('#form_surat_keterangan_usaha_usaha input[type=hidden][name=id_debitur_surat_keterangan_usaha]').val(data.data_debitur.id);
                    $('#form_pembukuan_usaha_usaha input[type=hidden][name=id_debitur_pembukuan_usaha]').val(data.data_debitur.id);
                    $('#form_foto_usaha_usaha input[type=hidden][name=id_debitur_foto_usaha]').val(data.data_debitur.id);

                    $('#form_edit_ktp_deb input[type=hidden][name=id_debitur_ktp]').val(data.data_debitur.id);
                    $('#form_edit_ktp_deb_detail input[type=hidden][name=id_debitur_ktp]').val(data.data_debitur.id);
                    $('#form_edit_kk_deb input[type=hidden][name=id_debitur_kk]').val(data.data_debitur.id);
                    $('#form_edit_kk_deb_detail input[type=hidden][name=id_debitur_kk]').val(data.data_debitur.id);
                    $('#form_edit_sertifikat_deb input[type=hidden][name=id_debitur_sertifikat]').val(data.data_debitur.id);
                    $('#form_edit_sertifikat_deb_detail input[type=hidden][name=id_debitur_sertifikat]').val(data.data_debitur.id);
                    $('#form_edit_imb_deb input[type=hidden][name=id_debitur_imb]').val(data.data_debitur.id);
                    $('#form_edit_imb_deb_detail input[type=hidden][name=id_debitur_imb]').val(data.data_debitur.id);
                    $('#form_edit_pbb_deb input[type=hidden][name=id_debitur_pbb]').val(data.data_debitur.id);
                    $('#form_edit_pbb_deb_detail input[type=hidden][name=id_debitur_pbb]').val(data.data_debitur.id);
                    $('#form_edit_buku_tabungan_deb input[type=hidden][name=id_debitur_buku_tabungan]').val(data.data_debitur.id);
                    $('#form_edit_buku_tabungan_deb_detail input[type=hidden][name=id_debitur_buku_tabungan]').val(data.data_debitur.id);
                    $('#form_edit_skk_detail input[type=hidden][name=id_skk]').val(data.data_debitur.id);
                    $('#form_edit_slip_gaji_detail input[type=hidden][name=id_slip_gaji]').val(data.data_debitur.id);
                    $('#form_edit_buku_tabungan_detail input[type=hidden][name=id_buku_tabungan]').val(data.data_debitur.id);
                    $('#form_edit_sku_detail input[type=hidden][name=id_sku]').val(data.data_debitur.id);
                    $('#form_edit_foto_usaha_detail input[type=hidden][name=id_foto_usaha]').val(data.data_debitur.id);

                    $('#form_tambah_data_anak input[type=hidden][name=id_debitur_anak]').val(data.data_debitur.id);

                    $('#form_detail input[type=hidden][name=id_pasangan]').val(data.data_pasangan.id);
                    $('#form_edit_ktp_pasangan input[type=hidden][name=id_pasangan_ktp]').val(data.data_pasangan.id);
                    $('#form_edit_ktp_pasangan_detail input[type=hidden][name=id_pasangan_ktp]').val(data.data_pasangan.id);
                    $('#form_edit_buku_nikah input[type=hidden][name=id_pasangan_buku_nikah]').val(data.data_pasangan.id);
                    $('#form_edit_buku_nikah_detail input[type=hidden][name=id_pasangan_buku_nikah]').val(data.data_pasangan.id);

                    $('#form_detail input[name=nomor_so]').val(data.nomor_so);
                    $('#form_detail input[name=nama_so]').val(data.nama_so);

                    //FASILITAS
                    var plafon = (rubah(data.fasilitas_pinjaman.plafon));
                    $('#form_detail input[name=plafon]').val(plafon);

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
                    $('#form_detail  select[name=tenor]').html(select_tenor);

                    if (data.fasilitas_pinjaman.tenor == "12") {
                        document.getElementById("tenor12").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman.tenor == "18") {
                        document.getElementById("tenor18").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman.tenor == "24") {
                        document.getElementById("tenor24").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman.tenor == "30") {
                        document.getElementById("tenor30").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman.tenor == "36") {
                        document.getElementById("tenor36").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman.tenor == "48") {
                        document.getElementById("tenor48").selected = "true";
                    }
                    if (data.fasilitas_pinjaman.tenor == "60") {
                        document.getElementById("tenor60").selected = "true";
                    }

                    var select_jenis_pinjaman1 = [];
                    var option_jenis_pinjaman1 = [
                        '<option id="konsumtif" value="KONSUMTIF">KONSUMTIF</option>',
                        '<option id="modal_kerja" value="MODAL KERJA">MODAL KERJA</option>',
                        '<option id="investasi" value="INVESTASI">INVESTASI</option>'
                    ].join('\n');
                    select_jenis_pinjaman1.push(option_jenis_pinjaman1);
                    $('#form_detail  select[id=select_jenis_pinjaman]').html(select_jenis_pinjaman1);

                    if (data.fasilitas_pinjaman.jenis_pinjaman == "KONSUMTIF") {
                        document.getElementById("konsumtif").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman.jenis_pinjaman == "MODAL KERJA") {
                        document.getElementById("modal_kerja").selected = "true";
                    } else
                    if (data.fasilitas_pinjaman.jenis_pinjaman = "INVESTASI") {
                        document.getElementById("investasi").selected = "true";
                    }

                    $('#form_detail input[name=jenis_pinjaman_credit]').val(data.fasilitas_pinjaman.jenis_pinjaman);
                    $('#form_detail textarea[name=tujuan_pinjaman]').val(data.fasilitas_pinjaman.tujuan_pinjaman);
                    $('#form_detail textarea[name=tujuan_pinjaman_credit]').val(data.fasilitas_pinjaman.tujuan_pinjaman);

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

                    //DEBITUR
                    $('#select_provinsi_ktp_dup').hide();
                    $('#select_kabupaten_ktp_dup').hide();
                    $('#select_kecamatan_ktp_dup').hide();
                    $('#select_kelurahan_ktp_dup').hide();
                    $('#select_provinsi_domisili_dup').hide();
                    $('#select_kabupaten_domisili_dup').hide();
                    $('#select_kecamatan_domisili_dup').hide();
                    $('#select_kelurahan_domisili_dup').hide();
                    $('#form_detail input[name=nama_debitur]').val(data.data_debitur.nama_lengkap);
                    $('#form_detail input[name=gelar_keagamaan]').val(data.data_debitur.gelar_keagamaan);
                    $('#form_detail input[name=gelar_pendidikan]').val(data.data_debitur.gelar_pendidikan);
                    $('#form_detail input[name=email]').val(data.data_debitur.email);

                    if (data.data_debitur.jenis_kelamin == "L") {
                        document.getElementById("L").selected = "true";
                    } else {
                        document.getElementById("P").selected = "true";
                    }

                    if (data.data_debitur.status_nikah == "Menikah") {
                        document.getElementById("nikah").selected = "true";
                    } else
                    if (data.data_debitur.status_nikah == "Single") {
                        document.getElementById("single").selected = "true";
                    } else
                    if (data.data_debitur.status_nikah == "Janda/Duda") {
                        document.getElementById("cerai").selected = "true";
                    }

                    $('#form_detail input[name=ibu_kandung]').val(data.data_debitur.ibu_kandung);
                    $('#form_detail input[name=no_ktp]').val(data.data_debitur.no_ktp);
                    $('#form_detail input[name=no_ktp_kk]').val(data.data_debitur.no_ktp_kk);
                    $('#form_detail input[name=no_kk]').val(data.data_debitur.no_kk);
                    $('#form_detail input[name=no_npwp]').val(data.data_debitur.no_npwp);
                    $('#form_detail input[name=tempat_lahir]').val(data.data_debitur.tempat_lahir);
                    $('#form_detail input[name=tgl_lahir_deb]').val(data.data_debitur.tgl_lahir);
                    $('#form_detail input[name=tinggi_badan]').val(data.data_debitur.tinggi_badan);
                    $('#form_detail input[name=berat_badan]').val(data.data_debitur.berat_badan);

                    if (data.data_debitur.agama == "ISLAM") {
                        document.getElementById("agama_deb1").selected = "true";
                    } else
                    if (data.data_debitur.agama == "KATHOLIK") {
                        document.getElementById("agama_deb2").selected = "true";
                    } else
                    if (data.data_debitur.agama == "KRISTEN") {
                        document.getElementById("agama_deb3").selected = "true";
                    } else
                    if (data.data_debitur.agama == "HINDU") {
                        document.getElementById("agama_deb4").selected = "true";
                    } else
                    if (data.data_debitur.agama == "BUDHA") {
                        document.getElementById("agama_deb5").selected = "true";
                    } else
                    if (data.data_debitur.agama == "LAIN2 KEPERCAYAAN") {
                        document.getElementById("agama_deb6").selected = "true";
                    }


                    $('#form_detail input[name=alamat_ktp]').val(data.data_debitur.alamat_ktp.alamat_singkat);
                    $('#form_detail input[name=rt_ktp]').val(data.data_debitur.alamat_ktp.rt);
                    $('#form_detail input[name=rw_ktp]').val(data.data_debitur.alamat_ktp.rw);

                    var select_provinsi_ktp = [];
                    var option_provinsi_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.provinsi.id + '">' + data.data_debitur.alamat_ktp.provinsi.nama + '</option>'
                    ].join('\n');
                    select_provinsi_ktp.push(option_provinsi_ktp);
                    $('#form_detail select[id=provinsi_ktp]').html(select_provinsi_ktp);
                    var select_kabupaten_ktp = [];
                    var option_kabupaten_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.kabupaten.id + '">' + data.data_debitur.alamat_ktp.kabupaten.nama + '</option>'
                    ].join('\n');
                    select_kabupaten_ktp.push(option_kabupaten_ktp);
                    $('#form_detail select[id=kabupaten_ktp]').html(select_kabupaten_ktp);

                    var select_kecamatan_ktp = [];
                    var option_kecamatan_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.kecamatan.id + '">' + data.data_debitur.alamat_ktp.kecamatan.nama + '</option>'
                    ].join('\n');
                    select_kecamatan_ktp.push(option_kecamatan_ktp);
                    $('#form_detail select[id=kecamatan_ktp]').html(select_kecamatan_ktp);

                    var select_kelurahan_ktp = [];
                    var option_kelurahan_ktp = [
                        '<option value="' + data.data_debitur.alamat_ktp.kelurahan.id + '">' + data.data_debitur.alamat_ktp.kelurahan.nama + '</option>'
                    ].join('\n');
                    select_kelurahan_ktp.push(option_kelurahan_ktp);
                    $('#form_detail select[id=kelurahan_ktp]').html(select_kelurahan_ktp);

                    $('#form_detail input[name=kode_pos_ktp]').val(data.data_debitur.alamat_ktp.kode_pos);
                    $('#form_detail input[name=alamat_domisili]').val(data.data_debitur.alamat_domisili.alamat_singkat);
                    $('#form_detail input[name=rt_domisili]').val(data.data_debitur.alamat_domisili.rt);
                    $('#form_detail input[name=rw_domisili]').val(data.data_debitur.alamat_domisili.rw);

                    var select_provinsi_domisili = [];
                    var option_provinsi_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.provinsi.id + '">' + data.data_debitur.alamat_domisili.provinsi.nama + '</option>'
                    ].join('\n');
                    select_provinsi_domisili.push(option_provinsi_domisili);
                    $('#form_detail select[id=provinsi_domisili]').html(select_provinsi_domisili);

                    var select_kabupaten_domisili = [];
                    var option_kabupaten_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.kabupaten.id + '">' + data.data_debitur.alamat_domisili.kabupaten.nama + '</option>'
                    ].join('\n');
                    select_kabupaten_domisili.push(option_kabupaten_domisili);
                    $('#form_detail select[id=kabupaten_domisili]').html(select_kabupaten_domisili);

                    var select_kecamatan_domisili = [];
                    var option_kecamatan_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.kecamatan.id + '">' + data.data_debitur.alamat_domisili.kecamatan.nama + '</option>'
                    ].join('\n');
                    select_kecamatan_domisili.push(option_kecamatan_domisili);
                    $('#form_detail select[id=kecamatan_domisili]').html(select_kecamatan_domisili);

                    var select_kelurahan_domisili = [];
                    var option_kelurahan_domisili = [
                        '<option value="' + data.data_debitur.alamat_domisili.kelurahan.id + '">' + data.data_debitur.alamat_domisili.kelurahan.nama + '</option>'
                    ].join('\n');
                    select_kelurahan_domisili.push(option_kelurahan_domisili);
                    $('#form_detail select[id=kelurahan_domisili]').html(select_kelurahan_domisili);

                    $('#form_detail input[name=kode_pos_domisili]').val(data.data_debitur.alamat_domisili.kode_pos);

                    var select_pendidikan_terakhir = [];
                    var option_pendidikan_terakhir = [
                        '<option value="' + data.data_debitur.pendidikan_terakhir + '">' + data.data_debitur.pendidikan_terakhir + '</option>',
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

                    $('#form_detail input[name=jumlah_tanggungan]').val(data.data_debitur.jumlah_tanggungan);
                    $('#form_detail input[name=no_telp]').val(data.data_debitur.no_telp);
                    $('#form_detail input[name=no_hp]').val(data.data_debitur.no_hp);

                    if (data.data_debitur.alamat_surat == "ALAMAT DOMISILI") {
                        document.getElementById("alamat_surat_domisili").selected = "true";
                    } else
                    if (data.data_debitur.alamat_surat == "ALAMAT KTP") {
                        document.getElementById("alamat_surat_ktp").selected = "true";
                    }

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
                            if (data.data_debitur.pekerjaan.nama_pekerjaan = '' + data.data_debitur.pekerjaan.nama_pekerjaan + '') {
                                document.getElementById('' + data.data_debitur.pekerjaan.nama_pekerjaan + 'pekerjaan_deb_detail').selected = "true";
                            }
                        })


                    $('#form_detail input[name=nama_perusahaan]').val(data.data_debitur.pekerjaan.nama_tempat_kerja);
                    $('#form_detail input[name=posisi]').val(data.data_debitur.pekerjaan.posisi_pekerjaan);
                    $('#form_detail input[name=jenis_usaha]').val(data.data_debitur.pekerjaan.jenis_pekerjaan);
                    $('#form_detail input[name=alamat_usaha_kantor]').val(data.data_debitur.pekerjaan.alamat.alamat_singkat);
                    $('#form_detail input[name=rt_usaha_kantor]').val(data.data_debitur.pekerjaan.alamat.rt);
                    $('#form_detail input[name=rw_usaha_kantor]').val(data.data_debitur.pekerjaan.alamat.rw);
                    $('#form_detail input[name=kode_pos_kantor]').val(data.data_debitur.pekerjaan.alamat.kode_pos);
                    $('#form_detail input[name=masa_kerja_usaha]').val(data.data_debitur.pekerjaan.tgl_mulai_kerja);
                    $('#form_detail input[name=no_telp_kantor_usaha]').val(data.data_debitur.pekerjaan.no_telp_tempat_kerja);

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
                            if (data.data_debitur.pekerjaan.alamat.provinsi.id = '' + data.data_debitur.pekerjaan.alamat.provinsi.id + '') {
                                document.getElementById('' + data.data_debitur.pekerjaan.alamat.provinsi.id + 'prov_pek_deb').selected = "true";
                            }
                        })

                    if (data.data_debitur.pekerjaan.alamat.kabupaten.id == null) {
                        var select_kabupaten_kantor_deb = [];
                        var option_kabupaten_kantor_deb = [
                            '<option value=""></option>'
                        ].join('\n');
                        select_kabupaten_kantor_deb.push(option_kabupaten_kantor_deb);
                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor_deb);
                    } else {
                        var select_kabupaten_kantor_deb = [];
                        var option_kabupaten_kantor_deb = [
                            '<option value="' + data.data_debitur.pekerjaan.alamat.kabupaten.id + '">' + data.data_debitur.pekerjaan.alamat.kabupaten.nama + '</option>'
                        ].join('\n');
                        select_kabupaten_kantor_deb.push(option_kabupaten_kantor_deb);
                        $('#form_detail select[name=kabupaten_kantor]').html(select_kabupaten_kantor_deb);
                    }

                    if (data.data_debitur.pekerjaan.alamat.kecamatan.id == null) {
                        var select_kecamatan_kantor_deb = [];
                        var option_kecamatan_kantor_deb = [
                            '<option value=""></option>'
                        ].join('\n');
                        select_kecamatan_kantor_deb.push(option_kecamatan_kantor_deb);
                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor_deb);
                    } else {
                        var select_kecamatan_kantor_deb = [];
                        var option_kecamatan_kantor_deb = [
                            '<option value="' + data.data_debitur.pekerjaan.alamat.kecamatan.id + '">' + data.data_debitur.pekerjaan.alamat.kecamatan.nama + '</option>'
                        ].join('\n');
                        select_kecamatan_kantor_deb.push(option_kecamatan_kantor_deb);
                        $('#form_detail select[name=kecamatan_kantor]').html(select_kecamatan_kantor_deb);
                    }

                    if (data.data_debitur.pekerjaan.alamat.kelurahan.id == null) {
                        var select_kelurahan_kantor_deb = [];
                        var option_kelurahan_kantor_deb = [
                            '<option value=""></option>'
                        ].join('\n');
                        select_kelurahan_kantor_deb.push(option_kelurahan_kantor_deb);
                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor_deb);
                    } else {
                        var select_kelurahan_kantor_deb = [];
                        var option_kelurahan_kantor_deb = [
                            '<option value="' + data.data_debitur.pekerjaan.alamat.kelurahan.id + '">' + data.data_debitur.pekerjaan.alamat.kelurahan.nama + '</option>'
                        ].join('\n');
                        select_kelurahan_kantor_deb.push(option_kelurahan_kantor_deb);
                        $('#form_detail select[name=kelurahan_kantor]').html(select_kelurahan_kantor_deb);
                    }

                    $('#form_detail input[name=kode_pos_kantor]').val(data.data_debitur.pekerjaan.alamat.kode_pos);

                    var id_data_anak = $('#form_detail input[type=hidden][name=id_debitur]').val();
                    var url_data_anak = "<?php echo $this->config->item('api_url'); ?>api/debitur/" + id_data_anak;
                    $.ajax({
                        type: "get",
                        url: url_data_anak,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        },
                        success: function(response) {
                            var data_anak = response.data;
                            var html = [];
                            console.log(data_anak)
                            $.each(data_anak.anak, function(index, item) {
                                var tr = [
                                    '<tr>',
                                    '<td>' + item.nama + '</td>',
                                    '<td>' + item.tgl_lahir_anak + '</td>',
                                    '<td style="width:5px"><button type="button" class="btn btn-default bg-gradient-danger btn-sm delete_anak"  title="Hapus Data Anak"  data="' + item.anak_id + '"><i style="color: #fff;" class="fas fa-window-close"></i></button></td>',
                                    '</tr>'
                                ].join('\n');
                                html.push(tr);
                                $('#data_anak').html(html);
                            })
                        }
                    });

                    // $.each(data.data_debitur.anak, function(index, item) {
                    //     console.log(item.nama);
                    //     var tr = [
                    //         '<tr>',
                    //         '<td style="width:210px">' + item.nama + '</td>',
                    //         '<td style="width:210px">' + item.tgl_lahir + '</td>',
                    //         '</tr>'
                    //     ].join('\n');
                    //     html14.push(tr);
                    //     $('#data_anak').html(html14);
                    // })
                    $('#form_detail textarea[name=notes_so]').val(data.notes_so);

                    //LAMPIRAN
                    if (data.data_debitur.lampiran.lamp_ktp == null) {
                        var a = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html1.push(a);
                        $('#gambar_lamp_ktp').html(html1);
                    } else {
                        var a = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Pasangan"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" /> </a>'
                        ].join('\n');
                        html1.push(a);
                        $('#gambar_lamp_ktp').html(html1);
                    }

                    if (data.data_debitur.lampiran.lamp_kk == null) {
                        var b = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html2.push(b);
                        $('#gambar_lamp_kk').html(html2);
                    } else {
                        var b = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_kk + '" /> </a>'
                        ].join('\n');
                        html2.push(b);
                        $('#gambar_lamp_kk').html(html2);
                    }

                    if (data.data_debitur.lampiran.lamp_sertifikat == null) {
                        var c = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html3.push(c);
                        $('#gambar_lamp_sertifikat').html(html3);
                    } else {
                        var c = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                        ].join('\n');
                        html3.push(c);
                        $('#gambar_lamp_sertifikat').html(html3);
                    }

                    if (data.data_debitur.lampiran.lamp_sttp_pbb == null) {
                        var d = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html4.push(d);
                        $('#gambar_lamp_pbb').html(html4);
                    } else {
                        var d = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                        ].join('\n');
                        html4.push(d);
                        $('#gambar_lamp_pbb').html(html4);
                    }

                    if (data.data_debitur.lampiran.lamp_imb == null) {
                        var e = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html5.push(e);
                        $('#gambar_lamp_imb').html(html5);
                    } else {
                        var e = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_imb + '" /> </a>'
                        ].join('\n');
                        html5.push(e);
                        $('#gambar_lamp_imb').html(html5);
                    }

                    if (data.data_pasangan.lampiran.lamp_ktp == null) {
                        var f = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html6.push(f);
                        $('#gambar_lamp_ktp_pasangan').html(html6);
                    } else {
                        var f = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                        ].join('\n');
                        html6.push(f);
                        $('#gambar_lamp_ktp_pasangan').html(html6);
                    }

                    if (data.data_pasangan.lampiran.lamp_buku_nikah == null) {
                        var f = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html7.push(g);
                        $('#gambar_lamp_buku_nikah').html(html7);
                    } else {
                        var g = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                        ].join('\n');
                        html7.push(g);
                        $('#gambar_lamp_buku_nikah').html(html7);
                    }

                    $.each(data.lampiran_ao.lamp_ideb, function(item) {
                        var h = [
                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.lamp_ideb[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data.lampiran_ao.lamp_ideb[item] + '</p></a>',
                        ].join('\n');
                        html8.push(h);
                    });
                    $('#lamp_dataideb').html(html8);

                    $.each(data.lampiran_ao.lamp_pefindo, function(item) {
                        var i = [
                            '<a class="example-image-link" target="window.open()" download href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.lamp_pefindo[item] + '"><p style="font-size: 13px; font-weight: 400;">' + data.lampiran_ao.lamp_pefindo[item] + '</p></a>',
                        ].join('\n');
                        html9.push(i);
                    });
                    $('#lamp_datapefindo').html(html9);

                    if (data.data_debitur.lampiran.lamp_skk == null) {
                        var j = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html10.push(j);
                        $('#gambar_lamp_skk').html(html10);
                    } else {
                        var j = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_skk + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_skk + '" /> </a>'
                        ].join('\n');
                        html10.push(j);
                        $('#gambar_lamp_skk').html(html10);
                    }

                    if (data.data_debitur.lampiran.lamp_slip_gaji == null) {
                        var k = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html11.push(k);
                        $('#gambar_lamp_slip_gaji').html(html11);
                    } else {
                        var k = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_slip_gaji + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_slip_gaji + '" /> </a>'
                        ].join('\n');
                        html11.push(k);
                        $('#gambar_lamp_slip_gaji').html(html11);
                    }

                    if (data.data_debitur.lampiran.lamp_buku_tabungan == null) {
                        var l = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html12.push(l);
                        $('#gambar_lamp_buku_tabungan').html(html12);
                    } else {
                        var l = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_buku_tabungan + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_buku_tabungan + '" /> </a>'
                        ].join('\n');
                        html12.push(l);
                        $('#gambar_lamp_buku_tabungan').html(html12);
                    }

                    if (data.data_debitur.lampiran.lamp_sku == null) {
                        var m = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html13.push(m);
                        $('#gambar_lamp_sku').html(html13);
                    } else {
                        var m = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sku + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_sku + '" /> </a>'
                        ].join('\n');
                        html13.push(m);
                        $('#gambar_lamp_sku').html(html13);
                    }

                    if (data.data_debitur.lampiran.lamp_foto_usaha == null) {
                        var n = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html15.push(n);
                        $('#gambar_lamp_foto_usaha').html(html15);
                    } else {
                        var n = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_foto_usaha + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_foto_usaha + '" /> </a>'
                        ].join('\n');
                        html15.push(n);
                        $('#gambar_lamp_foto_usaha').html(html15);
                    }

                    var o = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" /> </a>'
                    ].join('\n');
                    html16.push(o);
                    $('#lamp_form_persetujuan_ideb').html(html16);


                    //PASANGAN
                    if (data.data_pasangan.id == null) {
                        $('#form_pasangan_debitur').hide();
                        $('#form_buku_nikah_pas_detail').hide();
                        $('#form_lampiran_pas_detail').hide();
                    } else {

                        $('#form_detail input[name=nama_lengkap_pas]').val(data.data_pasangan.nama_lengkap);
                        $('#form_detail input[name=nama_ibu_kandung_pas]').val(data.data_pasangan.nama_ibu_kandung);
                        if (data.data_pasangan.jenis_kelamin == "L") {
                            document.getElementById("L_pas").selected = "true";
                        } else {
                            document.getElementById("P_pas").selected = "true";
                        }
                        $('#form_detail input[name=no_ktp_pas]').val(data.data_pasangan.no_ktp);
                        $('#form_detail input[name=no_ktp_kk_pas]').val(data.data_pasangan.no_ktp_kk);
                        $('#form_detail input[name=no_npwp_pas]').val(data.data_pasangan.no_npwp);
                        $('#form_detail input[name=tempat_lahir_pas]').val(data.data_pasangan.tempat_lahir);
                        $('#form_detail input[name=tgl_lahir_pas]').val(data.data_pasangan.tgl_lahir);
                        $('#form_detail textarea[name=alamat_ktp_pas]').val(data.data_pasangan.alamat_ktp);
                        $('#form_detail input[name=no_telp_pas]').val(data.data_pasangan.no_telp);
                        $('#form_detail select[name=pekerjaan_pas]').val(data.data_pasangan.pekerjaan.nama_pekerjaan);
                        $('#form_detail input[name=posisi_pekerjaan_pas]').val(data.data_pasangan.pekerjaan.posisi_pekerjaan);
                        $('#form_detail input[name=nama_perusahaan_pas]').val(data.data_pasangan.pekerjaan.nama_tempat_kerja);
                        $('#form_detail input[name=jenis_usaha_pas]').val(data.data_pasangan.pekerjaan.jenis_pekerjaan);
                        $('#form_detail input[name=tgl_mulai_kerja_pas]').val(data.data_pasangan.tgl_mulai_kerja);
                        $('#form_detail input[name=no_telp_tempat_kerja_pas]').val(data.data_pasangan.no_telp_tempat_kerja);
                        $('#form_detail input[name=masa_kerja_lama_usaha_pas]').val(data.data_pasangan.pekerjaan.tgl_mulai_kerja);

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
                                if (data.data_pasangan.pekerjaan.nama_pekerjaan = '' + data.data_pasangan.pekerjaan.nama_pekerjaan + '') {
                                    document.getElementById('' + data.data_pasangan.pekerjaan.nama_pekerjaan + 'pekerjaan_pas_detail').selected = "true";
                                }
                            })


                        $('#form_detail input[name=jenis_usaha_pas]').val(data.data_pasangan.pekerjaan.jenis_pekerjaan);
                        $('#form_detail input[name=masa_kerja_lama_usaha_pas]').val(data.data_pasangan.pekerjaan.tgl_mulai_kerja);
                        $('#form_detail input[name=no_telp_kantor_usaha_pas]').val(data.data_pasangan.pekerjaan.no_telp_tempat_kerja);
                        $('#form_detail input[name=alamat_usaha_kantor_pas]').val(data.data_pasangan.pekerjaan.alamat.alamat_singkat);
                        $('#form_detail input[name=rt_kantor_usaha_pas]').val(data.data_pasangan.pekerjaan.alamat.rt);
                        $('#form_detail input[name=rw_kantor_usaha_pas]').val(data.data_pasangan.pekerjaan.alamat.rw);



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
                                $('#form_detail select[id=select_provinsi_kantor_usaha_pas]').html(select1 + select);
                                if (data.data_pasangan.pekerjaan.alamat.provinsi.id + 'prov_pek_pas' == '' + data.data_pasangan.pekerjaan.alamat.provinsi.id + 'prov_pek_pas') {
                                    document.getElementById('' + data.data_pasangan.pekerjaan.alamat.provinsi.id + 'prov_pek_pas').selected = "true";
                                }
                            })

                        if (data.data_pasangan.pekerjaan.alamat.kabupaten.id == null) {
                            var select_kabupaten_pekerjaan_pas = [];
                            var option_kabupaten_pekerjaan_pas = [
                                '<option value=""></option>',
                            ].join('\n');
                            select_kabupaten_pekerjaan_pas.push(option_kabupaten_pekerjaan_pas);
                            $('#form_detail select[name=select_kab_kantor_usaha_pas]').html(select_kabupaten_pekerjaan_pas);
                        } else {
                            var select_kabupaten_pekerjaan_pas = [];
                            var option_kabupaten_pekerjaan_pas = [
                                '<option value="' + data.data_pasangan.pekerjaan.alamat.kabupaten.id + '">' + data.data_pasangan.pekerjaan.alamat.kabupaten.nama + '</option>'
                            ].join('\n');
                            select_kabupaten_pekerjaan_pas.push(option_kabupaten_pekerjaan_pas);
                            $('#form_detail select[id=select_kab_kantor_usaha_pas]').html(select_kabupaten_pekerjaan_pas);
                        }

                        if (data.data_pasangan.pekerjaan.alamat.kecamatan.id == null) {
                            var select_kecamatan_pekerjaan_pas = [];
                            var option_kecamatan_pekerjaan_pas = [
                                '<option value=""></option>',
                            ].join('\n');
                            select_kecamatan_pekerjaan_pas.push(option_kecamatan_pekerjaan_pas);
                            $('#form_detail select[name=select_kecamatan_kantor_usaha_pas]').html(select_kecamatan_pekerjaan_pas);
                        } else {
                            var select_kecamatan_pekerjaan_pas = [];
                            var option_kecamatan_pekerjaan_pas = [
                                '<option value="' + data.data_pasangan.pekerjaan.alamat.kecamatan.id + '">' + data.data_pasangan.pekerjaan.alamat.kecamatan.nama + '</option>'
                            ].join('\n');
                            select_kecamatan_pekerjaan_pas.push(option_kecamatan_pekerjaan_pas);
                            $('#form_detail select[id=select_kecamatan_kantor_usaha_pas]').html(select_kecamatan_pekerjaan_pas);
                        }

                        if (data.data_pasangan.pekerjaan.alamat.kelurahan.id == null) {
                            var select_kelurahan_pekerjaan_pas = [];
                            var option_kelurahan_pekerjaan_pas = [
                                '<option value=""></option>',
                            ].join('\n');
                            select_kelurahan_pekerjaan_pas.push(option_kelurahan_pekerjaan_pas);
                            $('#form_detail select[name=select_kelurahan_kantor_usaha_pas]').html(select_kelurahan_pekerjaan_pas);
                        } else {
                            var select_kelurahan_pekerjaan_pas = [];
                            var option_kelurahan_pekerjaan_pas = [
                                '<option value="' + data.data_pasangan.pekerjaan.alamat.kelurahan.id + '">' + data.data_pasangan.pekerjaan.alamat.kelurahan.nama + '</option>'
                            ].join('\n');
                            select_kelurahan_pekerjaan_pas.push(option_kelurahan_pekerjaan_pas);
                            $('#form_detail select[id=select_kelurahan_kantor_usaha_pas]').html(select_kelurahan_pekerjaan_pas);
                        }

                        $('#form_detail input[name=kode_pos_kantor_usaha_pas').val(data.data_pasangan.pekerjaan.alamat.kode_pos);
                    }

                    $('#form_detail input[name=notes_so]').val(data.notes_so);

                    //PENJAMIN
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
                            '<td  style="width:50px"><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_penjamin"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
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


                    //STATUS RECOMEND AO
                    if (data.status_ao == "recommend") {
                        document.getElementById('recommend_ao').checked = true;
                    } else {
                        document.getElementById('not_recommend_ao').checked = true;
                    }
                    //VERIFIKASI
                    if (data.verifikasi.ver_ktp_debt == "1") {
                        document.getElementById("ver_ada_ktp_cadeb").selected = "true";
                    } else
                    if (data.verifikasi.ver_ktp_debt == "0") {
                        document.getElementById("ver_tidak_ada_ktp_cadeb").selected = "true";
                    } else
                    if (data.verifikasi.ver_ktp_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_ktp_cadeb").selected = "true";
                    }

                    if (data.verifikasi.ver_ktp_pasangan == "1") {
                        document.getElementById("ver_ada_ktp_pas").selected = "true";
                    } else
                    if (data.verifikasi.ver_ktp_pasangan == "0") {
                        document.getElementById("ver_tidak_ada_ktp_pas").selected = "true";
                    } else
                    if (data.verifikasi.ver_ktp_pasangan == "2") {
                        document.getElementById("ver_ada_kejanggalan_ktp_pas").selected = "true";
                    }

                    if (data.verifikasi.ver_kk_debt == "1") {
                        document.getElementById("ver_ada_kk").selected = "true";
                    } else
                    if (data.verifikasi.ver_kk_debt == "0") {
                        document.getElementById("ver_tidak_ada_kk").selected = "true";
                    } else
                    if (data.verifikasi.ver_kk_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_kk").selected = "true";
                    }

                    if (data.verifikasi.ver_akta_nikah_pasangan == "1") {
                        document.getElementById("ver_ada_surat_akta_nikah").selected = "true";
                    } else
                    if (data.verifikasi.ver_akta_nikah_pasangan == "0") {
                        document.getElementById("ver_tidak_ada_surat_akta_nikah").selected = "true";
                    } else
                    if (data.verifikasi.ver_akta_nikah_pasangan == "2") {
                        document.getElementById("ver_ada_kejanggalan_surat_akta_nikah").selected = "true";
                    }

                    if (data.verifikasi.ver_akta_cerai_debt == "1") {
                        document.getElementById("ver_ada_surat_cerai").selected = "true";
                    } else
                    if (data.verifikasi.ver_akta_cerai_debt == "0") {
                        document.getElementById("ver_tidak_ada_surat_cerai").selected = "true";
                    } else
                    if (data.verifikasi.ver_akta_cerai_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_surat_cerai").selected = "true";
                    }

                    if (data.verifikasi.ver_akta_kematian_debt == "1") {
                        document.getElementById("ver_ada_surat_kematian").selected = "true";
                    } else
                    if (data.verifikasi.ver_akta_kematian_debt == "0") {
                        document.getElementById("ver_tidak_ada_surat_kematian").selected = "true";
                    } else
                    if (data.verifikasi.ver_akta_kematian_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_surat_kematian").selected = "true";
                    }

                    if (data.verifikasi.ver_sttp_pbb_debt == "1") {
                        document.getElementById("ver_ada_sppt").selected = "true";
                    } else
                    if (data.verifikasi.ver_sttp_pbb_debt == "0") {
                        document.getElementById("ver_tidak_ada_sppt").selected = "true";
                    } else
                    if (data.verifikasi.ver_sttp_pbb_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_sppt").selected = "true";
                    }

                    if (data.verifikasi.ver_sertifikat_debt == "1") {
                        document.getElementById("ver_ada_sertifikat").selected = "true";
                    } else
                    if (data.verifikasi.ver_sertifikat_debt == "0") {
                        document.getElementById("ver_tidak_ada_sertifikat").selected = "true";
                    } else
                    if (data.verifikasi.ver_sertifikat_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_sertifikat").selected = "true";
                    }

                    if (data.verifikasi.ver_imb_debt == "1") {
                        document.getElementById("ver_ada_imb").selected = "true";
                    } else
                    if (data.verifikasi.ver_imb_debt == "0") {
                        document.getElementById("ver_tidak_ada_imb").selected = "true";
                    } else
                    if (data.verifikasi.ver_imb_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_imb").selected = "true";
                    }

                    if (data.verifikasi.ver_pembukuan_usaha_debt == "1") {
                        document.getElementById("ver_ada_slip_gaji").selected = "true";
                    } else
                    if (data.verifikasi.ver_pembukuan_usaha_debt == "0") {
                        document.getElementById("ver_tidak_ada_slip_gaji").selected = "true";
                    } else
                    if (data.verifikasi.ver_pembukuan_usaha_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_slip_gaji").selected = "true";
                    }

                    if (data.verifikasi.ver_sku_debt == "1") {
                        document.getElementById("ver_ada_skk").selected = "true";
                    } else
                    if (data.verifikasi.ver_sku_debt == "0") {
                        document.getElementById("ver_tidak_ada_skk").selected = "true";
                    } else
                    if (data.verifikasi.ver_sku_debt == "2") {
                        document.getElementById("ver_ada_kejanggalan_skk").selected = "true";
                    }

                    if (data.verifikasi.ver_rek_tabungan_debt == "1") {
                        document.getElementById("ver_ada_rek_tabungan").selected = "true";
                    } else
                    if (data.verifikasi.ver_rek_tabungan_debt == "0") {
                        document.getElementById("ver_tidak_ada_rek_tabungan").selected = "true";
                    } else
                    if (data.verifikasi.ver_rek_tabungan_debt == "2") {
                        document.getElementById("ver_ada_kejangggalan_rek_tabungan").selected = "true";
                    }

                    if (data.verifikasi.ver_data_penjamin == "1") {
                        document.getElementById("ver_ada_penjamin").selected = "true";
                    } else
                    if (data.verifikasi.ver_data_penjamin == "0") {
                        document.getElementById("ver_tidak_ada_penjamin").selected = "true";
                    } else
                    if (data.verifikasi.ver_data_penjamin == "2") {
                        document.getElementById("ver_ada_kejanggalan_penjamin").selected = "true";
                    }
                    $('#detail_ao textarea[id=catatan_verifikasi_detail]').val(data.verifikasi.catatan);
                    //VALIDASI
                    if (data.validasi.val_data_debt == "1") {
                        document.getElementById("val_ada_debt").selected = "true";
                    } else
                    if (data.validasi.val_data_debt == "0") {
                        document.getElementById("val_tidak_ada_debt").selected = "true";
                    } else
                    if (data.validasi.val_data_debt == "2") {
                        document.getElementById("val_ada_kejanggalan_debt").selected = "true";
                    }

                    if (data.validasi.val_data_pasangan == "1") {
                        document.getElementById("val_ada_pas").selected = "true";
                    } else
                    if (data.validasi.val_data_pasangan == "0") {
                        document.getElementById("val_tidak_ada_pas").selected = "true";
                    } else
                    if (data.validasi.val_data_pasangan == "2") {
                        document.getElementById("val_ada_kejanggalan_pas").selected = "true";
                    }

                    if (data.validasi.val_data_penjamin == "1") {
                        document.getElementById("val_ada_penjamin").selected = "true";
                    } else
                    if (data.validasi.val_data_penjamin == "0") {
                        document.getElementById("val_tidak_ada_penjamin").selected = "true";
                    } else
                    if (data.validasi.val_data_penjamin == "2") {
                        document.getElementById("val_ada_kejanggalan_penjamin").selected = "true";
                    }

                    if (data.validasi.val_domisili_debt == "1") {
                        document.getElementById("val_sesuai_domisili").selected = "true";
                    } else
                    if (data.validasi.val_domisili_debt == "0") {
                        document.getElementById("val_tidak_sesuai_domisili").selected = "true";
                    }

                    if (data.validasi.val_pekerjaan_debt == "1") {
                        document.getElementById("val_sesuai_pekerjaan").selected = "true";
                    } else
                    if (data.validasi.val_pekerjaan_debt == "0") {
                        document.getElementById("val_tidak_sesuai_pekerjaan").selected = "true";
                    }

                    if (data.validasi.val_agunan == "1") {
                        document.getElementById("val_sesuai_agunan_tanah").selected = "true";
                    } else
                    if (data.validasi.val_agunan == "0") {
                        document.getElementById("val_tidak_sesuai_agunan_tanah").selected = "true";
                    }

                    if (data.validasi.val_lingkungan_debt == "1") {
                        document.getElementById("val_sesuai_cek_lingkungan").selected = "true";
                    } else
                    if (data.validasi.val_lingkungan_debt == "0") {
                        document.getElementById("val_tidak_sesuai_cek_lingkungan").selected = "true";
                    }
                    $('#detail_ao textarea[id=catatan_val1]').val(data.validasi.catatan);

                    //PEMERIKSAAN TANAH DAN BANGUNAN
                    $('#detail_ao input[id=nama_penghuni_agunan_detail]').val(data.pemeriksaan.agunan_tanah[0].nama_penghuni);

                    if (data.pemeriksaan.agunan_tanah[0].status_penghuni == "PEMILIK") {
                        document.getElementById("pemilik_agunan_tanah").selected = "true";
                    } else
                    if (data.pemeriksaan.agunan_tanah[0].status_penghuni == "PENYEWA") {
                        document.getElementById("penyewa_agunan_tanah").selected = "true";
                    } else
                    if (data.pemeriksaan.agunan_tanah[0].status_penghuni = "TIDAK DIHUNI") {
                        document.getElementById("tidak_dihuni_agunan_tanah").selected = "true";
                    } else
                    if (data.pemeriksaan.agunan_tanah[0].status_penghuni = "KELUARGA") {
                        document.getElementById("keluarga_agunan_tanah").selected = "true";
                    }

                    $('#detail_ao input[id=bentuk_bangunan_agunan_detail]').val(data.pemeriksaan.agunan_tanah[0].bentuk_bangunan);

                    if (data.pemeriksaan.agunan_tanah[0].kondisi_bangunan == "SANGAT TERAWAT") {
                        document.getElementById("sangat_terawat_kondisi_agunan").selected = "true";
                    } else
                    if (data.pemeriksaan.agunan_tanah[0].kondisi_bangunan == "CUKUP TERAWAT") {
                        document.getElementById("cukup_terawat_kondisi_agunan").selected = "true";
                    } else
                    if (data.pemeriksaan.agunan_tanah[0].kondisi_bangunan = "KURANG TERAWAT") {
                        document.getElementById("kurang_terawat_kondisi_agunan").selected = "true";
                    } else
                    if (data.pemeriksaan.agunan_tanah[0].kondisi_bangunan = "TIDAK TERAWAT") {
                        document.getElementById("tidak_terawat_kondisi_agunan").selected = "true";
                    }

                    $('#detail_ao input[id=fasilitas_agunan_detail]').val(data.pemeriksaan.agunan_tanah[0].fasilitas);
                    $('#detail_ao input[id=listrik_agunan_detail]').val(data.pemeriksaan.agunan_tanah[0].listrik);

                    var nilai_taksasi_bangunan = (rubah(data.pemeriksaan.agunan_tanah[0].nilai_taksasi_bangunan));
                    $('#detail_ao input[id=nilai_taksasi_bangunan_detail]').val(nilai_taksasi_bangunan);

                    var nilai_taksasi_agunan = (rubah(data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan));
                    $('#detail_ao input[id=nilai_taksasi_agunan_detail]').val(nilai_taksasi_agunan);

                    $('#detail_ao input[id=tgl_taksasi_agunan_detail]').val(data.pemeriksaan.agunan_tanah[0].tgl_taksasi);

                    var nilai_likuidasi_agunan = (rubah(data.pemeriksaan.agunan_tanah[0].nilai_likuidasi));
                    $('#detail_ao input[id=nilai_likuidasi_agunan_detail]').val(nilai_likuidasi_agunan);

                    $('#detail_ao input[id=perusahaan_penilai_independen_detail]').val(data.pemeriksaan.agunan_tanah[0].perusahaan_penilai_independen);

                    var nilai_agunan_independen = (rubah(data.pemeriksaan.agunan_tanah[0].nilai_agunan_independen));
                    $('#detail_ao input[id=nilai_agunan_independen_detail]').val(nilai_agunan_independen);

                    //REKOMENDASI AO
                    $('#detail_ao textarea[id=tujuan_pinjaman_rekomendasi_detail]').val(data.rekomendasi_ao.tujuan_pinjaman);


                    if (data.rekomendasi_ao.jenis_pinjaman == "KONSUMTIF") {
                        document.getElementById("konsumtif_jenis_pinjaman").selected = "true";
                    } else
                    if (data.rekomendasi_ao.jenis_pinjaman == "MODAL KERJA") {
                        document.getElementById("modal_kerja_pinjaman").selected = "true";
                    } else
                    if (data.rekomendasi_ao.jenis_pinjaman == "INVESTASI") {
                        document.getElementById("investasi_pinjaman").selected = "true";
                    }

                    get_produk()
                        .done(function(res) {
                            var select = [];
                            $.each(res.data, function(i, e) {
                                var option = [
                                    '<option id="' + e.nama_produk + '" value="' + e.nama_produk + '">' + e.nama_produk + '</option>'
                                ].join('\n');
                                select.push(option);
                            });
                            $('#detail_ao select[id=produk_detail]').html(select);
                            if (data.rekomendasi_ao.produk == '' + data.rekomendasi_ao.produk + '') {
                                document.getElementById('' + data.rekomendasi_ao.produk + '').selected = "true";
                            }
                        })

                    var plafon_kredit = (rubah(data.rekomendasi_ao.plafon_kredit));
                    $('#detail_ao input[id=plafon_kredit_detail]').val(plafon_kredit);

                    if (data.rekomendasi_ao.jangka_waktu == "12") {
                        document.getElementById("jangka_waktu_12").selected = "true";
                    } else
                    if (data.rekomendasi_ao.jangka_waktu == "18") {
                        document.getElementById("jangka_waktu_18").selected = "true";
                    } else
                    if (data.rekomendasi_ao.jangka_waktu == "24") {
                        document.getElementById("jangka_waktu_24").selected = "true";
                    } else
                    if (data.rekomendasi_ao.jangka_waktu == "30") {
                        document.getElementById("jangka_waktu_30").selected = "true";
                    } else
                    if (data.rekomendasi_ao.jangka_waktu == "36") {
                        document.getElementById("jangka_waktu_36").selected = "true";
                    } else
                    if (data.rekomendasi_ao.jangka_waktu == "48") {
                        document.getElementById("jangka_waktu_48").selected = "true";
                    }
                    if (data.rekomendasi_ao.jangka_waktu == "60") {
                        document.getElementById("jangka_waktu_60").selected = "true";
                    }

                    $('#detail_ao input[id=suku_bunga_detail]').val(data.rekomendasi_ao.suku_bunga);

                    var pembayaran_bunga = (rubah(data.rekomendasi_ao.pembayaran_bunga));
                    $('#detail_ao input[id=pembayaran_bunga_detail]').val(pembayaran_bunga);

                    if (data.rekomendasi_ao.akad_kredit == "ADENDUM") {
                        document.getElementById("adendum_akad").selected = "true";
                    } else
                    if (data.rekomendasi_ao.akad_kredit == "NOTARIS") {
                        document.getElementById("notaris_akad").selected = "true";
                    }
                    if (data.rekomendasi_ao.akad_kredit == "INTERNAL") {
                        document.getElementById("internal_akad").selected = "true";
                    }

                    if (data.rekomendasi_ao.ikatan_agunan == "APHT") {
                        document.getElementById("apht_ikatan").selected = "true";
                    } else
                    if (data.rekomendasi_ao.ikatan_agunan == "SKMHT") {
                        document.getElementById("skmht_ikatan").selected = "true";
                    }
                    if (data.rekomendasi_ao.ikatan_agunan == "FIDUSIA") {
                        document.getElementById("fidusia_ikatan").selected = "true";
                    }

                    $('#detail_ao input[id=analisa_ao_detail]').val(data.rekomendasi_ao.analisa_ao);

                    var biaya_provisi = (rubah(data.rekomendasi_ao.biaya_provisi));
                    $('#detail_ao input[id=biaya_provisi_detail]').val(biaya_provisi);

                    var biaya_administrasi = (rubah(data.rekomendasi_ao.biaya_administrasi));
                    $('#detail_ao input[id=biaya_administrasi_detail]').val(biaya_administrasi);

                    var biaya_credit_checking = (rubah(data.rekomendasi_ao.biaya_credit_checking));
                    $('#detail_ao input[id=biaya_credit_checking_detail]').val(biaya_credit_checking);

                    var biaya_tabungan = (rubah(data.rekomendasi_ao.biaya_tabungan));
                    $('#detail_ao input[id=biaya_tabungan_detail]').val(biaya_tabungan);

                    //KAPASITAS BULANAN
                    var pemasukan_debitur = (rubah(data.kapasitas_bulanan.pemasukan_cadebt));
                    $('#detail_ao input[id=pemasukan_debitur_detail]').val(pemasukan_debitur);

                    var pemasukan_pasangan = (rubah(data.kapasitas_bulanan.pemasukan_pasangan));
                    $('#detail_ao input[id=pemasukan_pasangan_detail]').val(pemasukan_pasangan);

                    var pemasukan_penjamin = (rubah(data.kapasitas_bulanan.pemasukan_penjamin));
                    $('#detail_ao input[id=pemasukan_penjamin_detail]').val(pemasukan_penjamin);

                    var total_pemasukan = (rubah(data.kapasitas_bulanan.total_pemasukan));
                    $('#detail_ao input[id=total_pemasukan_detail]').val(total_pemasukan);

                    var biaya_rumah_tangga = (rubah(data.kapasitas_bulanan.biaya_rumah_tangga));
                    $('#detail_ao input[id=biaya_rumah_tangga_detail]').val(biaya_rumah_tangga);

                    var biaya_transportasi = (rubah(data.kapasitas_bulanan.biaya_transport));
                    $('#detail_ao input[id=biaya_transportasi_detail]').val(biaya_transportasi);

                    var biaya_pendidikan = (rubah(data.kapasitas_bulanan.biaya_pendidikan));
                    $('#detail_ao input[id=biaya_pendidikan_detail]').val(biaya_pendidikan);

                    var biaya_telp_listr_air = (rubah(data.kapasitas_bulanan.telp_listr_air));
                    $('#detail_ao input[id=biaya_telp_listr_air_detail]').val(biaya_telp_listr_air);

                    var biaya_lain = (rubah(data.kapasitas_bulanan.biaya_lain));
                    $('#detail_ao input[id=biaya_lain_detail]').val(biaya_lain);

                    var total_pengeluaran1 = (rubah(data.kapasitas_bulanan.total_pengeluaran));
                    $('#detail_ao input[id=total_pengeluaran_detail]').val(total_pengeluaran1);

                    // var pendapatan_bersih = (rubah(data.kapasitas_bulanan.));
                    // $('#detail_ao input[id=pendapatan_bersih]').val(pendapatan_bersih);

                    //PENDAPATAN USAHA
                    var pemasukan_tunai = (rubah(data.pendapatan_usaha.pemasukan_tunai));
                    $('#detail_ao input[id=pemasukan_tunai_detail]').val(pemasukan_tunai);

                    var pemasukan_kredit = (rubah(data.pendapatan_usaha.pemasukan_kredit));
                    $('#detail_ao input[id=pemasukan_kredit_detail]').val(pemasukan_kredit);

                    var total_pendapatan = (rubah(data.pendapatan_usaha.total_pemasukan));
                    $('#detail_ao input[id=pendapatan_usaha_detail]').val(total_pendapatan);

                    //pengeluaran
                    var biaya_sewa = (rubah(data.pendapatan_usaha.biaya_sewa));
                    $('#detail_ao input[id=biaya_sewa_detail]').val(biaya_sewa);

                    var biaya_gaji_pegawai = (rubah(data.pendapatan_usaha.biaya_gaji_pegawai));
                    $('#detail_ao input[id=biaya_gaji_pegawai_detail]').val(biaya_gaji_pegawai);

                    var tlp_listrik_air = (rubah(data.pendapatan_usaha.biaya_telp_listr_air));
                    $('#detail_ao input[id=biaya_telp_listr_air_usaha_detail]').val(tlp_listrik_air);

                    var biaya_belanja_brg = (rubah(data.pendapatan_usaha.biaya_belanja_brg));
                    $('#detail_ao input[id=biaya_belanja_brg_detail]').val(biaya_belanja_brg);

                    var biaya_kirim_barang1 = (rubah(data.pendapatan_usaha.biaya_kirim_barang));
                    $('#detail_ao input[id=biaya_kirim_barang_detail]').val(biaya_kirim_barang1);

                    var biaya_hutang_dagang = (rubah(data.pendapatan_usaha.biaya_hutang_dagang));
                    $('#detail_ao input[id=biaya_hutang_dagang_detail]').val(biaya_hutang_dagang);

                    var biaya_angsuran = (rubah(data.pendapatan_usaha.biaya_angsuran));
                    $('#detail_ao input[id=biaya_angsuran_detail]').val(biaya_angsuran);

                    var biaya_lain_lain = (rubah(data.pendapatan_usaha.biaya_lain_lain));
                    $('#detail_ao input[id=biaya_lain_lain_detail]').val(biaya_lain_lain);

                    var total_pengeluaran_usaha = (rubah(data.pendapatan_usaha.total_pengeluaran));
                    $('#detail_ao input[id=pengeluaran_usaha_detail]').val(total_pengeluaran_usaha);

                    var keuntungan_usaha = (rubah(data.pendapatan_usaha.laba_usaha));
                    $('#detail_ao input[id=keuntungan_usaha_detail]').val(keuntungan_usaha);

                    var biaya_sampah_keamanan = (rubah(data.pendapatan_usaha.biaya_sampah_kemanan));
                    $('#detail_ao input[id=biaya_sampah_keamanan_detail]').val(biaya_sampah_keamanan);

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
                            '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
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

                            '</tr>'
                        ].join('\n');
                        htmlagunantanah.push(tr);
                    })
                    $('#data_agunan_detail').html(htmlagunantanah);

                })

                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                });
            hide_all();
            $('#lihat_detail').show();

        });


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

        $('#data_agunan_detail').on('click', '.edit', function(e) {
            e.preventDefault();

            var id = $(this).attr('data');
            var html = [];

            get_data_agunan({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

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
                            $('#form_edit_agunan select[id=select_provinsi_agunan1]').html(select);
                            if (data.alamat.provinsi.id == '' + data.alamat.provinsi.id + '') {
                                document.getElementById('' + data.alamat.provinsi.id + 'agunan').selected = "true";
                            }
                        })

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
                        '<option value="' + data.alamat.kelurahan.id + '">' + data.alamat.kelurahan.nama + '</option>'
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

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan');
                });
        });

        $('#select_provinsi_agunan1').change(function() {
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
                    $('#form_edit_agunan  select[id=select_kabupaten_agunan1]').html(select);
                }
            });
        });

        $('#select_kabupaten_agunan1').change(function() {
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
                    $('#form_edit_agunan select[id=select_kecamatan_agunan1]').html(select);
                }
            });
        });

        $('#select_kecamatan_agunan1').change(function() {
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
                    $('#form_edit_agunan select[id=select_kelurahan_agunan1]').html(select);
                }
            });
        });

        $('#select_kelurahan_agunan1').change(function() {
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
            console.log(id);
            e.preventDefault();
            var formData = new FormData();

            formData.append('agunan_bag_depan', $('input[name=lamp_agunan_tampak_depan]', this)[0].files[0]);

            update_agunan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        load_agunan();
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
                        load_agunan();
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
                        load_agunan();
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
                        load_agunan();
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
                        load_agunan();
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
            var id = $('#detail_ao input[type=hidden][name=id]').val();
            get_agunan({}, id)
                .done(function(response) {
                    var data = response.data;

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
                            '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
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
                            '</tr>'
                        ].join('\n');
                        htmlagunantanah.push(tr);
                    })
                    $('#data_agunan_detail').html(htmlagunantanah);
                })
                .fail(function(response) {
                    $('#data_agunan_detail').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                });
        }

        //submit tambah anak
        $('#form_tambah_data_anak ').on('submit', function(e) {
            var id = $('input[name=id_debitur_anak]', this).val();
            e.preventDefault();
            var formData = new FormData();

            $.each($('input[name="nama_anak[]"]'), function(i, e) {
                formData.append('nama_anak[]', e.value);
            });
            $.each($('input[name="tgl_lahir_anak[]"]'), function(i, e) {
                formData.append('tgl_lahir_anak[]', e.value);
            });

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data anak berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        load_data_anak();
                    });
                })
                .fail(function(jqXHR) {
                    var data = jqXHR.responseJSON.message;
                    var error = "";
                    if (typeof data == 'string') {
                        error = '<p>' + data + '</p>';
                    } else {}
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });
        });

        //submit ubah data debitur
        $('#form_debitur ').on('submit', function(e) {
            if (document.getElementById('tinggi_badan').value == "") {
                bootbox.alert("Tinggi Badan Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('berat_badan').value == "") {
                bootbox.alert("Berat Badan Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('pekerjaan_deb').value == "") {
                bootbox.alert("Pekerjaan Debitur Belum Di Pilih !!!");
                return (false);
            }
            if (document.getElementById('nama_perusahaan').value == "") {
                bootbox.alert("Nama Perusahaan Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('posisi').value == "") {
                bootbox.alert("Posisi Pekerjaan Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('jenis_usaha').value == "") {
                bootbox.alert("Jenis Usaha Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('alamat_usaha_kantor').value == "") {
                bootbox.alert("Alamat Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('rt_usaha_kantor').value == "") {
                bootbox.alert("RT Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('rw_usaha_kantor').value == "") {
                bootbox.alert("RW Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('provinsi_kantor').value == "") {
                bootbox.alert("Provinsi Kantor / Usaha Debitur Belum Di Pilih !!!");
                return (false);
            }
            if (document.getElementById('kabupaten_kantor').value == "") {
                bootbox.alert("Kabupaten Kantor / Usaha Debitur Belum Di Pilih !!!");
                return (false);
            }
            if (document.getElementById('kecamatan_kantor').value == "") {
                bootbox.alert("Kecamatan Kantor / Usaha Debitur Belum Di Pilih !!!");
                return (false);
            }
            if (document.getElementById('kelurahan_kantor').value == "") {
                bootbox.alert("Kelurahan Kantor / Usaha Debitur Belum Di Pilih !!!");
                return (false);
            }
            if (document.getElementById('no_telp_kantor_usaha').value == "") {
                bootbox.alert("No Telpon Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                return (false);
            }

            var id = $('input[name=id_debitur]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('nama_lengkap', $('input[name=nama_debitur]', this).val());
            formData.append('gelar_keagamaan', $('input[name=gelar_keagamaan]', this).val());
            formData.append('gelar_pendidikan', $('input[name=gelar_pendidikan]', this).val());
            formData.append('jenis_kelamin', $('select[name=jenis_kelamin]', this).val());
            formData.append('status_nikah', $('select[name=status_nikah]', this).val());
            formData.append('tinggi_badan', $('input[name=tinggi_badan]', this).val());
            formData.append('berat_badan', $('input[name=berat_badan]', this).val());
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
            formData.append('no_telp', $('input[name=no_telp]', this).val());
            formData.append('no_hp', $('input[name=no_hp]', this).val());
            formData.append('email', $('input[id=email]', this).val());
            formData.append('alamat_surat', $('select[name=alamat_surat]', this).val());
            formData.append('pekerjaan', $('select[name=pekerjaan_deb]', this).val());
            formData.append('nama_tempat_kerja', $('input[name=nama_perusahaan]', this).val());
            formData.append('posisi_pekerjaan', $('input[name=posisi]', this).val());
            formData.append('jenis_pekerjaan', $('input[name=jenis_usaha]', this).val());
            formData.append('alamat_tempat_kerja', $('input[name=alamat_usaha_kantor]', this).val());
            formData.append('rt_tempat_kerja', $('input[name=rt_usaha_kantor]', this).val());
            formData.append('rw_tempat_kerja', $('input[name=rw_usaha_kantor]', this).val());
            formData.append('id_prov_tempat_kerja', $('select[id=provinsi_kantor]', this).val());
            formData.append('id_kab_tempat_kerja', $('select[id=kabupaten_kantor]', this).val());
            formData.append('id_kec_tempat_kerja', $('select[id=kecamatan_kantor]', this).val());
            formData.append('id_kel_tempat_kerja', $('select[id=kelurahan_kantor]', this).val());
            formData.append('tgl_mulai_kerja', $('input[name=masa_kerja_usaha]', this).val());
            formData.append('no_telp_tempat_kerja', $('input[name=no_telp_kantor_usaha]', this).val());

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        $("#batal").click();
                        load_data();
                        // load_debitur();
                    });
                })
                .fail(function(jqXHR) {
                    var data = jqXHR.responseJSON.message;
                    var error = "";
                    if (typeof data == 'string') {
                        error = '<p>' + data + '</p>';
                    } else {
                        $.each(data.pekerjaan, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.id_prov_tempat_kerja, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.id_kec_tempat_kerja, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.id_kel_tempat_kerja, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });

                    }
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });
        });

        //submit ubah data pasangan
        $('#form_pasangan').on('submit', function(e) {
            var id = $('input[name=id_pasangan]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Pasangan
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
            formData.append('id_prov_tempat_kerja_pas', $('select[name=provinsi_kantor_usaha_pas]', this).val());
            formData.append('id_kab_tempat_kerja_pas', $('select[name=id_kabupaten_kantor_usaha_pas]', this).val());
            formData.append('id_kec_tempat_kerja_pas', $('select[name=kecamatan_kantor_usaha_pas]', this).val());
            formData.append('id_kel_tempat_kerja_pas', $('select[name=kelurahan_kantor_usaha_pas]', this).val());
            formData.append('tgl_mulai_kerja_pas', $('input[name=masa_kerja_lama_usaha_pas]', this).val());
            formData.append('no_telp_tempat_kerja_pas', $('input[name=no_telp_kantor_usaha_pas]', this).val());

            update_pasangan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        $("#batal").click();
                        // load_pasangan();
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
                    bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                    // bootbox.alert(error);
                });
        });

        // function Reset() {
        //     var dropDownProvPen = document.getElementById("provinsi_kantor_pen");
        //     var dropDownKabPen = document.getElementById("kabupaten_kantor_pen");
        //     var dropDownKecPen = document.getElementById("kecamatan_kantor_pen");
        //     var dropDownKelPen = document.getElementById("kelurahan_kantor_pen");
        //     dropDownProvPen.selectedIndex = 0;
        //     dropDownKabPen.selectedIndex = 0;
        //     dropDownKecPen.selectedIndex = 0;
        //     dropDownKelPen.selectedIndex = 0;
        // }

        //submit ubah data penjamin
        $('#form_edit_penjamin').on('submit', function(e) {
            var id = $('input[name=edit_id_penjamin]', this).val();
            e.preventDefault();
            var formData = new FormData();

            formData.append('nama_ktp_pen', $('input[name=nama_pen]', this).val());
            formData.append('nama_ibu_kandung_pen', $('input[name=nama_ibu_kandung_pen]', this).val());
            formData.append('no_ktp_pen', $('input[name=no_ktp_pen]', this).val());
            formData.append('no_npwp_pen', $('input[name=no_npwp_pen]', this).val());
            formData.append('tempat_lahir_pen', $('input[name=tempat_lahir_pen]', this).val());
            formData.append('tgl_lahir_pen', $('input[name=tgl_lahir_pen]', this).val());
            formData.append('jenis_kelamin_pen', $('select[name=jenis_kelamin_pen]', this).val());
            formData.append('no_telp_pen', $('input[name=notelp_pen]', this).val());
            formData.append('alamat_ktp_pen', $('textarea[name=alamat_ktp_pen]', this).val());
            formData.append('pekerjaan_pen', $('select[name=pekerjaan_pen]', this).val());
            formData.append('nama_tempat_kerja_pen', $('input[name=nama_perusahaan_pen]', this).val());
            formData.append('posisi_pekerjaan_pen', $('input[name=posisi_usaha_pen]', this).val());
            formData.append('jenis_pekerjaan_pen', $('input[name=jenis_usaha_pen]', this).val());
            formData.append('alamat_tempat_kerja_pen', $('input[name=alamat_usaha_kantor_pen]', this).val());
            formData.append('id_prov_tempat_kerja_pen', $('select[name=provinsi_kantor_pen]', this).val());
            formData.append('id_kab_tempat_kerja_pen', $('select[name=kabupaten_kantor_pen]', this).val());
            formData.append('id_kec_tempat_kerja_pen', $('select[name=kecamatan_kantor_pen]', this).val());
            formData.append('id_kel_tempat_kerja_pen', $('select[name=kelurahan_kantor_pen]', this).val());
            formData.append('rt_tempat_kerja_pen', $('input[name=rt_usaha_kantor_pen]', this).val());
            formData.append('rw_tempat_kerja_pen', $('input[name=rw_usaha_kantor_pen]', this).val());
            formData.append('tgl_mulai_kerja_pen', $('input[name=masa_kerja_usaha]', this).val());
            formData.append('no_telp_tempat_kerja_pen', $('input[name=no_telp_kantor_usaha]', this).val());


            update_penjamin(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        $('#batal').click();
                        load_data_penjamin();
                        $('#form_edit_penjamin')[0].reset();
                        $('.close_deb').click();
                        // var dropDownProvPen = document.getElementById("provinsi_kantor_pen");
                        // var dropDownKabPen = document.getElementById("kabupaten_kantor_pen");
                        // var dropDownKecPen = document.getElementById("kecamatan_kantor_pen");
                        // var dropDownKelPen = document.getElementById("kelurahan_kantor_pen");
                        // dropDownProvPen.selectedIndex = 0;
                        // dropDownKabPen.selectedIndex = 0;
                        // dropDownKecPen.selectedIndex = 0;
                        // dropDownKelPen.selectedIndex = 0;
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
                });
        });


        $('#form_edit_ktp_deb ').on('submit', function(e) {
            var id = $('input[name=id_debitur_ktp]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_ktp', $('input[name=lamp_ktp_deb]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran();
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
                        load_data_lampiran();
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
                    })
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
                        load_data_lampiran();
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

        });


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
                        load_data_lampiran();
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
                    })
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
                        load_data_lampiran();
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
                    })
                    // bootbox.alert(error);
                });

        });

        $('#form_edit_ktp_pasangan ').on('submit', function(e) {
            var id = $('input[name=id_pasangan_ktp]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_ktp_pas', $('input[name=lamp_ktp_pas]', this)[0].files[0]);

            update_pasangan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_pasangan_detail();
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
                    })
                    // bootbox.alert(error);
                });
            $(".close_deb").click();
        });

        $('#form_edit_buku_nikah ').on('submit', function(e) {
            var id = $('input[name=id_pasangan_buku_nikah]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_buku_nikah_pas', $('input[name=lamp_buku_nikah]', this)[0].files[0]);

            update_pasangan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_pasangan_detail();
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
                    })
                });
            $(".close_deb").click();
        });

        //EDIT LAMPIRAN DETAIL
        $('#form_edit_ktp_deb_detail ').on('submit', function(e) {
            var id = $('input[name=id_debitur_ktp]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_ktp', $('input[name=lamp_ktp_deb_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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
                    // bootbox.alert(error);
                });
            $(".close_deb").click();
        });

        $('#form_edit_kk_deb_detail ').on('submit', function(e) {
            var id = $('input[name=id_debitur_kk]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_kk', $('input[name=lamp_kk_deb_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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
                    })
                    // bootbox.alert(error);
                });
        });

        $('#form_edit_sertifikat_deb_detail ').on('submit', function(e) {
            var id = $('input[name=id_debitur_sertifikat]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_sertifikat', $('input[name=lamp_sertifikat_deb_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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

        });


        $('#form_edit_pbb_deb_detail').on('submit', function(e) {
            var id = $('input[name=id_debitur_pbb]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_pbb', $('input[name=lamp_pbb_deb_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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
                    })
                    // bootbox.alert(error);
                });

        });

        $('#form_edit_imb_deb_detail').on('submit', function(e) {
            var id = $('input[name=id_debitur_imb]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_imb', $('input[name=lamp_imb_deb_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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
                    })
                    // bootbox.alert(error);
                });

        });

        $('#form_edit_ktp_pasangan_detail ').on('submit', function(e) {
            var id = $('input[name=id_pasangan_ktp]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_ktp_pas', $('input[name=lamp_ktp_pas_detail]', this)[0].files[0]);

            update_pasangan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_pasangan_detail();
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
                    })
                    // bootbox.alert(error);
                });
            $(".close_deb").click();
        });

        $('#form_edit_buku_nikah_detail ').on('submit', function(e) {
            var id = $('input[name=id_pasangan_buku_nikah]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_buku_nikah_pas', $('input[name=lamp_buku_nikah_detail]', this)[0].files[0]);

            update_pasangan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_pasangan_detail();
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
                    })
                });
            $(".close_deb").click();
        });

        $('#form_edit_skk_detail ').on('submit', function(e) {
            var id = $('input[name=id_skk]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_skk', $('input[name=lamp_skk_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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

        });
        $('#form_edit_slip_gaji_detail ').on('submit', function(e) {
            var id = $('input[name=id_slip_gaji]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_slip_gaji', $('input[name=lamp_slip_gaji_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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

        $('#form_edit_buku_tabungan_detail ').on('submit', function(e) {
            var id = $('input[name=id_buku_tabungan]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_buku_tabungan[]', $('input[name=lamp_buku_tabungan_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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


        $('#form_edit_sku_detail ').on('submit', function(e) {
            var id = $('input[name=id_sku]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_sku[]', $('input[name=lamp_sku_detail]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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

        // $('#form_pembukuan_usaha_usaha ').on('submit',function(e){
        //     var id = $('input[name=id_debitur_pembukuan_usaha]', this).val();

        //     e.preventDefault();
        //     var formData = new FormData();
        //     //Data Debitur
        //     formData.append('foto_pembukuan_usaha[]',$('input[name=lamp_pembukuan_usaha]',this)[0].files[0]);

        //     update_debitur(formData, id)
        //     .done(function(res){

        //         var data = res.data;
        //             bootbox.alert('Lampiran berhasil disimpan',function(){
        //             $("#batal").click();
        //             $(".close_deb").click();
        //             $('#check_pembukuan_usaha').show();
        //         });
        //     })
        //     .fail(function(jqXHR){
        //         var data = jqXHR.responseJSON.message;
        //         var error = "";
        //         if(typeof data == 'string') {
        //             error = '<p>'+ data +'</p>';
        //         }
        //         bootbox.alert(error,function(){
        //             $("#batal").click();
        //         });
        //     });

        // });

        $('#form_edit_foto_usaha_detail ').on('submit', function(e) {
            var id = $('input[name=id_foto_usaha]', this).val();

            e.preventDefault();
            var formData = new FormData();

            $.each($('input[name="lamp_foto_usaha[]"]', this), function(i, e) {
                formData.append('lamp_foto_usaha[]', e.files[0]);
            });

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_detail();
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


        $('#form_surat_keterangan_kerja ').on('submit', function(e) {
            var id = $('input[name=id_debitur_surat_keterangan_kerja]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_skk', $('input[name=lamp_surat_keterangan_kerja]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_skk').show();
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

        $('#form_slip_gaji ').on('submit', function(e) {
            var id = $('input[name=id_debitur_slip_gaji]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_slip_gaji', $('input[name=lamp_slip_gaji]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_slip_gaji').show();
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

        $('#form_buku_tabungan ').on('submit', function(e) {
            var id = $('input[name=id_debitur_form_buku_tabungan]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_buku_tabungan[]', $('input[name=lamp_buku_tabungan]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_buku_tabungan').show();
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


        $('#form_surat_keterangan_usaha_usaha ').on('submit', function(e) {
            var id = $('input[name=id_debitur_surat_keterangan_usaha]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_sku[]', $('input[name=lamp_surat_keterangan_usaha]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_sku').show();
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

        $('#form_pembukuan_usaha_usaha ').on('submit', function(e) {
            var id = $('input[name=id_debitur_pembukuan_usaha]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('foto_pembukuan_usaha[]', $('input[name=lamp_pembukuan_usaha]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_pembukuan_usaha').show();
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

        $('#form_foto_usaha_usaha ').on('submit', function(e) {
            var id = $('input[name=id_debitur_foto_usaha]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_foto_usaha[]', $('input[name=lamp_foto_usaha]', this)[0].files[0]);

            update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_foto_usaha').show();
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
        $('#form_persetujuan_ideb_ideb ').on('submit', function(e) {
            var id = $('input[name=id_debitur_form_persetujuan_ideb]', this).val();

            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('form_persetujuan_ideb', $('input[name=lamp_form_persetujuan_ideb]', this)[0].files[0]);

            update_form_persetujuan_ideb(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        // load_form_persetujuan_ideb();
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_form_persetujuan_ideb').show();
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

        // klik submit update
        $('#form_input_ao').on('submit', function(e) {
            e.preventDefault();
            var id = $('input[name=id]', this).val();
            var formData = new FormData();

            if ($('#radioPrimary3').prop('checked')) {
                formData.append('catatan_ao', $('textarea[name=catatan_ao]', this).val());
                formData.append('status_ao', $('input[type=radio][name=status_ao2]', this).val());
            } else {

                if (document.getElementById('tinggi_badan').value == "") {
                    bootbox.alert("Tinggi Badan Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('berat_badan').value == "") {
                    bootbox.alert("Berat Badan Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('pekerjaan_deb').value == "") {
                    bootbox.alert("Pekerjaan Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('nama_perusahaan').value == "") {
                    bootbox.alert("Nama Perusahaan Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('posisi').value == "") {
                    bootbox.alert("Posisi Pekerjaan Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('jenis_usaha').value == "") {
                    bootbox.alert("Jenis Usaha Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('alamat_usaha_kantor').value == "") {
                    bootbox.alert("Alamat Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('rt_usaha_kantor').value == "") {
                    bootbox.alert("RT Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('rw_usaha_kantor').value == "") {
                    bootbox.alert("RW Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }
                if (document.getElementById('provinsi_kantor').value == "") {
                    bootbox.alert("Provinsi Kantor / Usaha Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('kabupaten_kantor').value == "") {
                    bootbox.alert("Kabupaten Kantor / Usaha Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('kecamatan_kantor').value == "") {
                    bootbox.alert("Kecamatan Kantor / Usaha Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('kelurahan_kantor').value == "") {
                    bootbox.alert("Kelurahan Kantor / Usaha Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('no_telp_kantor_usaha').value == "") {
                    bootbox.alert("No Telpon Kantor / Usaha Debitur Tidak Boleh Kosong !!!");
                    return (false);
                }

                if (document.getElementById('ver_ktp_calon_debitur').value == "") {
                    bootbox.alert("Verifikasi KTP Calon Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_ktp_pasangan').value == "") {
                    bootbox.alert("Verifikasi KTP Pasangan Calon Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_kk').value == "") {
                    bootbox.alert("Verifikasi KK Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_akta_nikah').value == "") {
                    bootbox.alert("Verifikasi Akta Nikah Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_surat_cerai').value == "") {
                    bootbox.alert("Verifikasi Surat Cerai Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_akta_kematian').value == "") {
                    bootbox.alert("Verifikasi Akta Kematian Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_sttp_pbb').value == "") {
                    bootbox.alert("Verifikasi SPPT PBB Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_sertifikat').value == "") {
                    bootbox.alert("Verifikasi Sertifikat Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_imb').value == "") {
                    bootbox.alert("Verifikasi IMB Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_slip_gaji').value == "") {
                    bootbox.alert("Verifikasi Slip Gaji Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_keterangan_kerja_usaha').value == "") {
                    bootbox.alert("Verifikasi Surat Keterangan Kerja / Usaha Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_rekening_tabungan').value == "") {
                    bootbox.alert("Verifikasi Rekening Tabungan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ver_data_penjamin').value == "") {
                    bootbox.alert("Verifikasi Data Penjamin Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('catatan_verifikasi').value == "") {
                    bootbox.alert("Catatan Verifikasi Belum Di Isi !!!");
                    return (false);
                }


                if (document.getElementById('val_calon_debitur').value == "") {
                    bootbox.alert("Validasi Calon Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('val_pas_calon_debitur').value == "") {
                    bootbox.alert("Validasi Pasangan Calon Debitur Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('val_penjamin').value == "") {
                    bootbox.alert("Validasi Penjamin Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('val_domisili_tinggal').value == "") {
                    bootbox.alert("Validasi Domisili Tempat Tinggal Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('val_agunan_tanah').value == "") {
                    bootbox.alert("Validasi Agunan Tanah Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('val_pekerjaan').value == "") {
                    bootbox.alert("Validasi Pekerjaan / Usaha Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('val_cek_lingkungan').value == "") {
                    bootbox.alert("Validasi Cek Lingkungan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('catatan_val').value == "") {
                    bootbox.alert("Catatan Validasi Belum Di Isi !!!");
                    return (false);
                }

                if (document.getElementById('nama_penghuni_agunan').value == "") {
                    bootbox.alert("Nama Penghuni Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('status_penghuni_agunan').value == "") {
                    bootbox.alert("Status Penghuni Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('bentuk_bangunan_agunan').value == "") {
                    bootbox.alert("Bentuk Bangunan Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('kondisi_bangunan_agunan').value == "") {
                    bootbox.alert("Kondisi Bangunan Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('fasilitas_agunan').value == "") {
                    bootbox.alert("Fasilitas Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('listrik_agunan').value == "") {
                    bootbox.alert("Listrik Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('nilai_taksasi_bangunan').value == "") {
                    bootbox.alert("Nilai Taksasi Bangunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('nilai_taksasi_agunan').value == "") {
                    bootbox.alert("Nilai Taksasi Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('tgl_taksasi_agunan').value == "") {
                    bootbox.alert("Tanggal Taksasi Agunan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('nilai_likuidasi_agunan').value == "") {
                    bootbox.alert("Nilai Likuidasi Belum Di Isi !!!");
                    return (false);
                }

                if (document.getElementById('pemasukan_debitur').value == "") {
                    bootbox.alert("Pemasukan Calon Debitur Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_rumah_tangga').value == "") {
                    bootbox.alert("Pengeluaran Rumah Tangga Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_transportasi').value == "") {
                    bootbox.alert("Pengeluaran Transportasi Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_pendidikan').value == "") {
                    bootbox.alert("Pengeluaran Pendidikan Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_telp_listr_air').value == "") {
                    bootbox.alert("Pengeluaran Telpon Listrik Air Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_lain').value == "") {
                    bootbox.alert("Pengeluaran Lain - Lain Belum Di Isi !!!");
                    return (false);
                }


                if (document.getElementById('tujuan_pinjaman_rekomendasi').value == "") {
                    bootbox.alert("Tujuan Pinjaman Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('jenis_pinjaman').value == "") {
                    bootbox.alert("Jenis Pinjaman Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('produk').value == "") {
                    bootbox.alert("Produk Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('plafon_kredit').value == "") {
                    bootbox.alert("Rekomendasi Plafon Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('jangka_waktu').value == "") {
                    bootbox.alert("Rekomendasi Tenor Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('suku_bunga').value == "") {
                    bootbox.alert("Rekomendasi Suku Bunga Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('pembayaran_bunga').value == "") {
                    bootbox.alert("Rekomendasi Angsuran Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('akad_kredit').value == "") {
                    bootbox.alert("Akad Kredit Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('ikatan_agunan').value == "") {
                    bootbox.alert("Ikatan Agunan Belum Di Pilih !!!");
                    return (false);
                }
                if (document.getElementById('analisa_ao').value == "") {
                    bootbox.alert("Analisa AO Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_provisi').value == "") {
                    bootbox.alert("Biaya Provisi Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_administrasi').value == "") {
                    bootbox.alert("Biaya Administrasi Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_credit_checking').value == "") {
                    bootbox.alert("Biaya Credit Checking Belum Di Isi !!!");
                    return (false);
                }
                if (document.getElementById('biaya_tabungan').value == "") {
                    bootbox.alert("Biaya Tabungan Belum Di Isi !!!");
                    return (false);
                }

                //verifikasi
                formData.append('ver_ktp_debt', $('select[name=ver_ktp_calon_debitur]', this).val());
                formData.append('ver_kk_debt', $('select[name=ver_kk]', this).val());
                formData.append('ver_akta_cerai_debt', $('select[name=ver_surat_cerai]', this).val());
                formData.append('ver_akta_kematian_debt', $('select[name=ver_akta_kematian]', this).val());
                formData.append('ver_rek_tabungan_debt', $('select[name=ver_rekening_tabungan]', this).val());
                formData.append('ver_sertifikat_debt', $('select[name=ver_sertifikat]', this).val());
                formData.append('ver_sttp_pbb_debt', $('select[name=ver_sttp_pbb]', this).val());
                formData.append('ver_imb_debt', $('select[name=ver_imb]', this).val());
                formData.append('ver_ktp_pasangan', $('select[name=ver_ktp_pasangan]', this).val());
                formData.append('ver_akta_nikah_pasangan', $('select[name=ver_akta_nikah]', this).val());
                formData.append('ver_data_penjamin', $('select[name=ver_data_penjamin]', this).val());
                formData.append('ver_sku_debt', $('select[name=ver_keterangan_kerja_usaha]', this).val());
                formData.append('ver_pembukuan_usaha_debt', $('select[name=ver_slip_gaji]', this).val());
                formData.append('catatan_verifikasi', $('textarea[name=catatan_verifikasi]', this).val());

                //Validasi
                formData.append('val_data_debt', $('select[name=val_calon_debitur]', this).val());
                formData.append('val_lingkungan_debt', $('select[name=val_cek_lingkungan]', this).val());
                formData.append('val_domisili_debt', $('select[name=val_domisili_tinggal]', this).val());
                formData.append('val_pekerjaan_debt', $('select[name=val_pekerjaan]', this).val());
                formData.append('val_data_pasangan', $('select[name=val_pas_calon_debitur]', this).val());
                formData.append('val_data_penjamin', $('select[name=val_penjamin]', this).val());
                formData.append('val_agunan_tanah', $('select[name=val_agunan_tanah]', this).val());
                formData.append('catatan_validasi', $('textarea[name=catatan_val]', this).val());

                //Pemeriksa Tanah & Bangunan
                $.each($('input[name="nama_penghuni_agunan[]"]', this), function(i, e) {
                    formData.append('nama_penghuni_agunan[]', e.value);
                });
                $.each($('select[name="status_penghuni_agunan[]"]', this), function(i, e) {
                    formData.append('status_penghuni_agunan[]', e.value);
                });
                $.each($('input[name="bentuk_bangunan_agunan[]"]', this), function(i, e) {
                    formData.append('bentuk_bangunan_agunan[]', e.value);
                });
                $.each($('select[name="kondisi_bangunan_agunan[]"]', this), function(i, e) {
                    formData.append('kondisi_bangunan_agunan[]', e.value);
                });
                $.each($('input[name="fasilitas_agunan[]"]', this), function(i, e) {
                    formData.append('fasilitas_agunan[]', e.value);
                });
                $.each($('input[name="listrik_agunan[]"]', this), function(i, e) {
                    formData.append('listrik_agunan[]', e.value);
                });

                $.each($('input[name="nilai_taksasi_agunan[]'), function(i, e) {
                    formData.append('nilai_taksasi_agunan[]', e.value.replace(/[^\d]/g, ""));
                });
                $.each($('input[name="nilai_taksasi_bangunan[]'), function(i, e) {
                    formData.append('nilai_taksasi_bangunan[]', e.value.replace(/[^\d]/g, ""));
                });

                $.each($('input[name="tgl_taksasi_agunan[]"]', this), function(i, e) {
                    formData.append('tgl_taksasi_agunan[]', e.value);
                });
                $.each($('input[name="nilai_likuidasi_agunan[]"]', this), function(i, e) {
                    formData.append('nilai_likuidasi_agunan[]', e.value.replace(/[^\d]/g, ""));
                });

                $.each($('input[name="nilai_agunan_independen[]"]', this), function(i, e) {
                    formData.append('nilai_agunan_independen[]', e.value.replace(/[^\d]/g, ""));
                });
                $.each($('input[name="perusahaan_penilai_independen[]"]', this), function(i, e) {
                    formData.append('perusahaan_penilai_independen[]', e.value);
                });

                //Kapasitas Bulanan
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

                var biaya_transportasi = $('input[name=biaya_transportasi]', this).val();
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

                // //Pendapatan Usaha
                var pemasukan_tunai = $('input[name=pemasukan_tunai]', this).val();
                pemasukan_tunai = pemasukan_tunai.replace(/[^\d]/g, "");
                formData.append('pemasukan_tunai', pemasukan_tunai);

                var pemasukan_kredit = $('input[name=pemasukan_kredit]', this).val();
                pemasukan_kredit = pemasukan_kredit.replace(/[^\d]/g, "");
                formData.append('pemasukan_kredit', pemasukan_kredit);
                // pengeluaran sewa 

                var biaya_sewa = $('input[name=biaya_sewa]', this).val();
                biaya_sewa = biaya_sewa.replace(/[^\d]/g, "");
                formData.append('biaya_sewa', biaya_sewa);

                var biaya_gaji_pegawai = $('input[name=biaya_gaji_pegawai]', this).val();
                biaya_gaji_pegawai = biaya_gaji_pegawai.replace(/[^\d]/g, "");
                formData.append('biaya_gaji_pegawai', biaya_gaji_pegawai);

                var biaya_belanja_brg = $('input[name=biaya_belanja_brg]', this).val();
                biaya_belanja_brg = biaya_belanja_brg.replace(/[^\d]/g, "");
                formData.append('biaya_belanja_brg', biaya_belanja_brg);

                var biaya_telp_listr_air_usaha = $('input[name=biaya_telp_listr_air_usaha]', this).val();
                biaya_telp_listr_air_usaha = biaya_telp_listr_air_usaha.replace(/[^\d]/g, "");
                formData.append('biaya_telp_listr_air', biaya_telp_listr_air_usaha);

                var biaya_sampah_keamanan = $('input[name=biaya_sampah_keamanan]', this).val();
                biaya_sampah_keamanan = biaya_sampah_keamanan.replace(/[^\d]/g, "");
                formData.append('biaya_sampah_kemanan', biaya_sampah_keamanan);

                var biaya_kirim_barang = $('input[name=biaya_kirim_barang]', this).val();
                biaya_kirim_barang = biaya_kirim_barang.replace(/[^\d]/g, "");
                formData.append('biaya_kirim_barang', biaya_kirim_barang);

                var biaya_hutang_dagang = $('input[name=biaya_hutang_dagang]', this).val();
                biaya_hutang_dagang = biaya_hutang_dagang.replace(/[^\d]/g, "");
                formData.append('biaya_hutang_dagang', biaya_hutang_dagang);

                var biaya_angsuran = $('input[name=biaya_angsuran]', this).val();
                biaya_angsuran = biaya_angsuran.replace(/[^\d]/g, "");
                formData.append('biaya_angsuran', biaya_angsuran);

                var biaya_lain_lain = $('input[name=biaya_lain_lain]', this).val();
                biaya_lain_lain = biaya_lain_lain.replace(/[^\d]/g, "");
                formData.append('biaya_lain_lain', biaya_lain_lain);

                //Recom AO
                formData.append('produk', $('select[name=produk]', this).val());

                var plafon_kredit = $('input[name=plafon_kredit]', this).val();
                plafon_kredit = plafon_kredit.replace(/[^\d]/g, "");
                formData.append('plafon_kredit', plafon_kredit);

                formData.append('tujuan_pinjaman', $('textarea[name=tujuan_pinjaman_rekomendasi]', this).val());
                formData.append('jenis_pinjaman', $('select[name=jenis_pinjaman]', this).val());
                formData.append('jangka_waktu', $('select[name=jangka_waktu]', this).val());
                formData.append('suku_bunga', $('input[name=suku_bunga]', this).val());
                var pembayaran_bunga = $('input[name=pembayaran_bunga]', this).val();
                pembayaran_bunga = pembayaran_bunga.replace(/[^\d]/g, "");
                formData.append('pembayaran_bunga', pembayaran_bunga);
                formData.append('akad_kredit', $('select[name=akad_kredit]', this).val());
                formData.append('ikatan_agunan', $('select[name=ikatan_agunan]', this).val());
                formData.append('analisa_ao', $('input[name=analisa_ao]', this).val());
                var biaya_provisi = $('input[name=biaya_provisi]', this).val();
                biaya_provisi = biaya_provisi.replace(/[^\d]/g, "");
                formData.append('biaya_provisi', biaya_provisi);
                var biaya_administrasi = $('input[name=biaya_administrasi]', this).val();
                biaya_administrasi = biaya_administrasi.replace(/[^\d]/g, "");
                formData.append('biaya_administrasi', biaya_administrasi);
                var biaya_credit_checking = $('input[name=biaya_credit_checking]', this).val();
                biaya_credit_checking = biaya_credit_checking.replace(/[^\d]/g, "");
                formData.append('biaya_credit_checking', biaya_credit_checking);
                var biaya_tabungan = $('input[name=biaya_tabungan]', this).val();
                biaya_tabungan = biaya_tabungan.replace(/[^\d]/g, "");
                formData.append('biaya_tabungan', biaya_tabungan);
                formData.append('catatan_ao', $('textarea[name=catatan_ao]', this).val());
                formData.append('status_ao', $('input[type=radio][name=status_ao1]', this).val());
            }

            update_ao(formData, id)

                .done(function(res) {
                    var data = res.data;

                    $('#form_modal_agunan_sertifikat input[type=hidden][name=id_trans_so_aguanan]').val(data.trans_ao.id_trans_so);

                    bootbox.alert('Lanjut Isi Agunan & Lampiran', function() {
                        $("#batal").click();
                        tampil_data_ao();
                        var select = document.getElementById("status_nikah");

                        $('#form_lampiran').show();
                        $('#form_agunan_sertifikat').show();
                        $('#submit_ao').hide();


                    });
                })
                .fail(function(jqXHR) {
                    var data = jqXHR.responseJSON.message;
                    var error = "";
                    if (typeof data == 'string') {
                        error = '<p>' + data + '</p>';
                    } else {
                        $.each(data.lamp_slip_gaji, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data['agunan_bag_dapur.0'], function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data['agunan_bag_depan.0'], function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data['agunan_bag_jalan.0'], function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data['agunan_bag_kamarmandi.0'], function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data['agunan_bag_ruangtamu.0'], function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                    }
                    bootbox.alert(error);
                    $("#batal").click();
                });
        });


    });

    function click_detail() {
        $('#form_detail .form-control').prop('disabled', true);
        $('.submit').hide();
        $('#status_ao').hide();
        $('.ao').show();
        $('.submit').hide();
    }

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
    // Click ubah
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
                console.log(data);

                $('#form_edit_penjamin input[type=hidden][name=edit_id_penjamin]').val(data.id);
                $('#form_edit_penjamin input[name=nama_pen]').val(data.nama_ktp);
                $('#form_edit_penjamin input[name=nama_ibu_kandung_pen]').val(data.nama_ibu_kandung);
                $('#form_edit_penjamin input[name=no_ktp_pen]').val(data.no_ktp);
                $('#form_edit_penjamin input[name=no_npwp_pen]').val(data.no_npwp);
                $('#form_edit_penjamin input[name=tempat_lahir_pen]').val(data.tempat_lahir);
                $('#form_edit_penjamin input[name=tgl_lahir_pen]').val(data.tgl_lahir);

                $('#form_edit_ktp_penjamin input[type=hidden][name=id_ktp_pen]').val(data.id);
                $('#form_edit_kk_penjamin input[type=hidden][name=id_kk_pen]').val(data.id);
                $('#form_edit_ktp_pas_penjamin input[type=hidden][name=id_ktp_pasangan_pen]').val(data.id);
                $('#form_edit_buku_nikah_penjamin input[type=hidden][name=id_buku_nikah_pen]').val(data.id);

                console.log(data.hubungan_debitur);

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

                if (data.pekerjaan.nama_pekerjaan == "KARYAWAN") {
                    document.getElementById("pek_pen_karyawan").selected = "true";
                } else
                if (data.pekerjaan.nama_pekerjaan == "PNS") {
                    document.getElementById("pek_pen_pns").selected = "true";
                } else
                if (data.pekerjaan.nama_pekerjaan == "WIRASWASTA") {
                    document.getElementById("pek_pen_wiraswasta").selected = "true";
                }

                $('#form_edit_penjamin input[name=nama_perusahaan_pen]').val(data.pekerjaan.nama_tempat_kerja);
                $('#form_edit_penjamin input[name=posisi_usaha_pen]').val(data.pekerjaan.posisi_pekerjaan);
                $('#form_edit_penjamin input[name=jenis_usaha_pen]').val(data.pekerjaan.jenis_pekerjaan);
                $('#form_edit_penjamin input[name=alamat_usaha_kantor_pen]').val(data.pekerjaan.alamat.alamat_singkat);
                $('#form_edit_penjamin input[name=rt_usaha_kantor_pen]').val(data.pekerjaan.alamat.rt);
                $('#form_edit_penjamin input[name=rw_usaha_kantor_pen]').val(data.pekerjaan.alamat.rw);
                $('#form_edit_penjamin input[name=kode_pos_kantor_pen]').val(data.pekerjaan.alamat.kode_pos);
                $('#form_edit_penjamin input[name=masa_kerja_usaha]').val(data.pekerjaan.tgl_mulai_kerja);
                $('#form_edit_penjamin input[name=no_telp_kantor_usaha]').val(data.pekerjaan.no_telp_tempat_kerja);

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

                var select_kabupaten_pekerjaan_pen = [];
                var option_kabupaten_pekerjaan_pen = [
                    '<option value="' + data.pekerjaan.alamat.kabupaten.id + '">' + data.pekerjaan.alamat.kabupaten.nama + '</option>'
                ].join('\n');
                select_kabupaten_pekerjaan_pen.push(option_kabupaten_pekerjaan_pen);
                $('#form_edit_penjamin select[id=kabupaten_kantor_pen]').html(select_kabupaten_pekerjaan_pen);

                var select_kecamatan_pekerjaan_pen = [];
                var option_kecamatan_pekerjaan_pen = [
                    '<option value="' + data.pekerjaan.alamat.kecamatan.id + '">' + data.pekerjaan.alamat.kecamatan.nama + '</option>'
                ].join('\n');
                select_kecamatan_pekerjaan_pen.push(option_kecamatan_pekerjaan_pen);
                $('#form_edit_penjamin select[id=kecamatan_kantor_pen]').html(select_kecamatan_pekerjaan_pen);

                var select_kelurahan_pekerjaan_pen = [];
                var option_kelurahan_pekerjaan_pen = [
                    '<option value="' + data.pekerjaan.alamat.kelurahan.id + '">' + data.pekerjaan.alamat.kelurahan.nama + '</option>'
                ].join('\n');
                select_kelurahan_pekerjaan_pen.push(option_kelurahan_pekerjaan_pen);
                $('#form_edit_penjamin select[id=kelurahan_kantor_pen]').html(select_kelurahan_pekerjaan_pen);

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
                            var select_kabupaten_kantor_pen = [];
                            var select_kabupaten_kantor_pen1 = '<option value="">--Pilih--</option>';
                            $.each(res.data, function(i, e) {
                                var option_kabupaten_kantor_pen = [
                                    '<option value="' + e.id + '">' + e.nama + '</option>'
                                ].join('\n');
                                select_kabupaten_kantor_pen.push(option_kabupaten_kantor_pen);
                            });
                            $('#form_edit_penjamin  select[id=kabupaten_kantor_pen]').html(select_kabupaten_kantor_pen1 + select_kabupaten_kantor_pen);
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


            })
            .fail(function(jqXHR) {
                bootbox.alert('Data tidak ditemukan');
            });
        // hide_all();
        // $('#lihat_ubah_asaldata').show();
    });

    //SUBMIT EDIT KTP PENJAMIN
    $('#form_edit_ktp_penjamin').on('submit', function(e) {
        var id = $('input[name=id_ktp_pen]', this).val();
        e.preventDefault();
        var formData = new FormData();

        formData.append('lamp_ktp_pen', $('input[name=lamp_ktp_pen]', this)[0].files[0]);

        update_penjamin(formData, id)
            .done(function(res) {
                var data = res.data;
                bootbox.alert('Data berhasil diubah', function() {
                    $('#form_edit_ktp_penjamin')[0].reset();
                    $("#batal").click();
                    $(".close_deb").click();
                    load_data_penjamin();
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


    //SUBMIT EDIT KK PENJAMIN
    $('#form_edit_kk_penjamin').on('submit', function(e) {
        var id = $('input[name=id_kk_pen]', this).val();
        e.preventDefault();
        var formData = new FormData();

        formData.append('lamp_kk_pen', $('input[name=lamp_kk_pen]', this)[0].files[0]);

        update_penjamin(formData, id)
            .done(function(res) {
                var data = res.data;
                bootbox.alert('Data berhasil diubah', function() {
                    $('#form_edit_kk_penjamin')[0].reset();
                    $("#batal").click();
                    $(".close_deb").click();
                    load_data_penjamin();
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

    //SUBMIT EDIT KTP PASANGAN PENJAMIN
    $('#form_edit_ktp_pas_penjamin').on('submit', function(e) {
        var id = $('input[name=id_ktp_pasangan_pen]', this).val();
        e.preventDefault();
        var formData = new FormData();

        formData.append('lamp_ktp_pasangan_pen', $('input[name=lamp_ktp_pasangan_pen]', this)[0].files[0]);

        update_penjamin(formData, id)
            .done(function(res) {
                var data = res.data;
                bootbox.alert('Data berhasil diubah', function() {
                    $('#form_edit_ktp_pas_penjamin')[0].reset();
                    $("#batal").click();
                    $(".close_deb").click();
                    load_data_penjamin();
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

    //SUBMIT EDIT BUKU NIKAH PENJAMIN
    $('#form_edit_buku_nikah_penjamin').on('submit', function(e) {
        var id = $('input[name=id_buku_nikah_pen]', this).val();
        e.preventDefault();
        var formData = new FormData();

        formData.append('lamp_buku_nikah_pen', $('input[name=lamp_buku_nikah_pen]', this)[0].files[0]);

        update_penjamin(formData, id)
            .done(function(res) {
                var data = res.data;
                bootbox.alert('Data berhasil diubah', function() {
                    $('#form_edit_buku_nikah_penjamin')[0].reset();
                    $("#batal").click();
                    $(".close_deb").click();
                    load_data_penjamin();
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


    $('#add-lamp-agunan').hide();
    $('#form_modal_agunan_sertifikat ').on('submit', function(e) {
        var id = $('input[name=id_trans_so_aguanan]', this).val();

        e.preventDefault();
        var formData = new FormData();

        if (document.getElementById('tipe_lokasi_agunan').value == "") {
            bootbox.alert("Tipe Lokasi Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('alamat_agunan').value == "") {
            bootbox.alert("Alamat Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('rt_agunan').value == "") {
            bootbox.alert("RT Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('rw_agunan').value == "") {
            bootbox.alert("RW Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('select_provinsi_agunan').value == "") {
            bootbox.alert("Provinsi Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('select_kabupaten_agunan').value == "") {
            bootbox.alert("Kabupaten Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('select_kecamatan_agunan').value == "") {
            bootbox.alert("Kecamatan Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('select_kelurahan_agunan').value == "") {
            bootbox.alert("Kelurahan Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('luas_tanah').value == "") {
            bootbox.alert("Luas Tanah Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('luas_bangunan').value == "") {
            bootbox.alert("Luas Tanah Bangunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('nama_pemilik_sertifikat').value == "") {
            bootbox.alert("Nama Pemelik Sertifikat Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('jenis_sertifikat').value == "") {
            bootbox.alert("Jenis Sertifikat Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('no_sertifikat').value == "") {
            bootbox.alert("No Sertifikat Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('njop').value == "") {
            bootbox.alert("NJOP Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('nop').value == "") {
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
                $('#add-lamp-agunan').show();
                $('#input-id-lamp-agunan').val(res.data.id);
                $('.add-lamp-agunan-save').attr('disabled', true);
            })
            .fail(function(jqXHR) {
                var data = jqXHR.responseJSON.message;
                var error = "Harap isi semua kolom yg tersedia";
                // if(typeof data == 'string') {
                //     error = '<p>'+ data +'</p>';
                // }else{
                //     $.each(data.agunan_bag_depan, function(index,item){
                //         error+='<p>'+ item +"</p>";
                //     });
                //     $.each(data.agunan_bag_jalan, function(index,item){
                //         error+='<p>'+ item +"</p>";
                //     });
                //     $.each(data.agunan_bag_ruangtamu, function(index,item){
                //         error+='<p>'+ item +"</p>";
                //     });
                //     $.each(data.agunan_bag_kamarmandi, function(index,item){
                //         error+='<p>'+ item +"</p>";
                //     });
                //     $.each(data.agunan_bag_dapur, function(index,item){
                //         error+='<p>'+ item +"</p>";
                //     });
                // }
                bootbox.alert(error, function() {
                    $("#batal").click();
                });

            });

    });

    $('#form_modal_agunan_sertifikat_detail ').on('submit', function(e) {
        var id = $('input[name=id_trans_so_aguanan_detail]', this).val();

        e.preventDefault();
        var formData = new FormData();
        if (document.getElementById('tipe_lokasi_agunan_detail').value == "") {
            bootbox.alert("Tipe Lokasi Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('alamat_agunan_detail').value == "") {
            bootbox.alert("Alamat Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('rt_agunan_detail').value == "") {
            bootbox.alert("RT Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('rw_agunan_detail').value == "") {
            bootbox.alert("RW Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('select_provinsi_agunan_detail').value == "") {
            bootbox.alert("Provinsi Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('select_kabupaten_agunan_detail').value == "") {
            bootbox.alert("Kabupaten Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('select_kecamatan_agunan_detail').value == "") {
            bootbox.alert("Kecamatan Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('select_kelurahan_agunan_detail').value == "") {
            bootbox.alert("Kelurahan Agunan Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('luas_tanah_detail').value == "") {
            bootbox.alert("Luas Tanah Agunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('luas_bangunan_detail').value == "") {
            bootbox.alert("Luas Tanah Bangunan Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('nama_pemilik_sertifikat_detail').value == "") {
            bootbox.alert("Nama Pemelik Sertifikat Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('jenis_sertifikat_detail').value == "") {
            bootbox.alert("Jenis Sertifikat Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById('no_sertifikat_detail').value == "") {
            bootbox.alert("No Sertifikat Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('njop_detail').value == "") {
            bootbox.alert("NJOP Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById('nop_detail').value == "") {
            bootbox.alert("NOP Belum Di Isi !!!");
            return (false);
        }

        formData.append('tipe_lokasi_agunan', $('select[name=tipe_lokasi_agunan_detail]', this).val());
        formData.append('alamat_agunan', $('input[name=alamat_agunan_detail]', this).val());
        formData.append('rt_agunan', $('input[name=rt_agunan_detail]', this).val());
        formData.append('rw_agunan', $('input[name=rw_agunan_detail]', this).val());
        formData.append('id_prov_agunan', $('select[name=id_prov_agunan_detail]', this).val());
        formData.append('id_kab_agunan', $('select[name=id_kab_agunan_detail]', this).val());
        formData.append('id_kec_agunan', $('select[name=id_kec_agunan_detail]', this).val());
        formData.append('id_kel_agunan', $('select[name=id_kel_agunan_detail]', this).val());
        formData.append('luas_tanah', $('input[name=luas_tanah_detail]', this).val());
        formData.append('luas_bangunan', $('input[name=luas_bangunan_detail]', this).val());
        formData.append('nama_pemilik_sertifikat', $('input[name=nama_pemilik_sertifikat_detail]', this).val());
        formData.append('jenis_sertifikat', $('select[name=jenis_sertifikat_detail]', this).val());
        formData.append('no_sertifikat', $('input[name=no_sertifikat_detail]', this).val());
        formData.append('tgl_ukur_sertifikat', $('input[name=no_ukur_sertifikat_detail]', this).val());
        formData.append('tgl_berlaku_shgb', $('input[name=tgl_berlaku_shgb_detail]', this).val());
        formData.append('no_imb', $('input[name=no_imb_detail]', this).val());
        var njop = $('input[name=njop_detail]', this).val();
        njop = njop.replace(/[^\d]/g, "");
        formData.append('njop', njop);
        formData.append('nop', $('input[name=nop_detail]', this).val());


        tambah_agunan_tanah(formData, id)
            .done(function(res) {
                let html = "<div width='100%' class='text-center'>" +
                    "<i class='fa fa-check text-success fa-4x'></i><br><br>" +
                    "<h5>Jaminan agunan sertifikat berhasil disimpan. Lanjut upload lampiran</h5>" +
                    "<a id='batal' href='javascript:void(0)' class='btn btn-primary' data-dismiss='modal'>Ok</a>" +
                    "</div>";
                $('#load_data').html(html);
                $('#add-lamp-agunan-detail').show();
                $('#input-id-lamp-agunan-detail').val(res.data.id);
                $('.add-lamp-agunan-save').attr('disabled', true);
                load_agunan();
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

    get_penjamin = function(opts, id) {
        var url = '<?php echo config_item('api_url') ?>api/master/mao/' + id;
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

    load_data_lampiran = function() {
        var id = $('#form_debitur input[type=hidden][name=id_debitur]').val();
        get_data_debitur({}, id)
            .done(function(response) {
                var data_debitur = response.data;
                var html = [];
                var html1 = [];
                var html2 = [];
                var html3 = [];
                var html4 = [];
                var html5 = [];
                var html6 = [];
                var html7 = [];
                var html8 = [];

                var a1 = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" /> </a>'
                ].join('\n');
                html.push(a1);
                $('#gambar_ktp').html(html);

                var b = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KK Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" /> </a>'
                ].join('\n');
                html1.push(b);
                $('#gambar_kk').html(html1);

                var c = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Sertifkat Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                ].join('\n');
                html2.push(c);
                $('#gambar_sertifikat').html(html2);

                var d = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran PBB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                ].join('\n');
                html3.push(d);
                $('#gambar_pbb').html(html3);


                var e = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" /> </a>'
                ].join('\n');
                html4.push(e);
                $('#gambar_imb').html(html4);

                var p = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" /> </a>'
                ].join('\n');
                html5.push(p);
                $('#gambar_rumah_agunan').html(html5);

            })
            .fail(function(response) {
                $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
    }

    load_data_lampiran_detail = function() {
        var id = $('#form_debitur input[type=hidden][name=id_debitur]').val();
        get_data_debitur({}, id)
            .done(function(response) {
                var data_debitur = response.data;
                console.log(data_debitur)
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

                var a1 = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" /> </a>'
                ].join('\n');
                html.push(a1);
                $('#gambar_lamp_ktp').html(html);

                var b = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KK Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" /> </a>'
                ].join('\n');
                html1.push(b);
                $('#gambar_lamp_kk').html(html1);

                var c = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Sertifkat Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                ].join('\n');
                html2.push(c);
                $('#gambar_lamp_sertifikat').html(html2);

                var d = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran PBB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                ].join('\n');
                html3.push(d);
                $('#gambar_lamp_pbb').html(html3);

                var e = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" /> </a>'
                ].join('\n');
                html4.push(e);
                $('#gambar_lamp_imb').html(html4);

                var f = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_skk + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_skk + '" /> </a>'
                ].join('\n');
                html5.push(f);
                $('#gambar_lamp_skk').html(html5);


                // var p = [
                // '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>'+data_debitur.lampiran.lamp_skk+'" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>'+data_debitur.lampiran.lamp_skk+'" /> </a>'
                // ].join('\n');
                // html5.push(p);
                // $('#gambar_lamp_skk').html(html5);

                var p = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_slip_gaji + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_slip_gaji + '" /> </a>'
                ].join('\n');
                html6.push(p);
                $('#gambar_lamp_slip_gaji').html(html6);

                var q = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_buku_tabungan + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_buku_tabungan + '" /> </a>'
                ].join('\n');
                html7.push(q);
                $('#gambar_lamp_buku_tabungan').html(html7);

                var r = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sku + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sku + '" /> </a>'
                ].join('\n');
                html8.push(r);
                $('#gambar_lamp_sku').html(html8);

                var s = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_foto_usaha + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_foto_usaha + '" /> </a>'
                ].join('\n');
                html9.push(s);
                $('#gambar_lamp_foto_usaha').html(html9);

            })
            .fail(function(response) {
                $('#data_creditchecking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
    }

    load_data_lampiran_pasangan = function() {
        var id = $('#form_pasangan input[type=hidden][name=id_pasangan]').val();
        get_data_pasangan({}, id)
            .done(function(response) {
                var data_pasangan = response.data;
                var html1 = [];
                var html2 = [];

                var f = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Pasangan"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                ].join('\n');
                html1.push(f);
                $('#gambar_ktp_pasangan').html(html1);

                var g = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                ].join('\n');
                html2.push(g);
                $('#gambar_buku_nikah').html(html2);

            })
    }

    load_data_lampiran_pasangan_detail = function() {
        var id = $('#form_pasangan input[type=hidden][name=id_pasangan]').val();
        get_data_pasangan({}, id)
            .done(function(response) {
                var data_pasangan = response.data;
                var html1 = [];
                var html2 = [];

                var f = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Pasangan"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                ].join('\n');
                html1.push(f);
                $('#gambar_lamp_ktp_pasangan').html(html1);

                var g = [
                    '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                ].join('\n');
                html2.push(g);
                $('#gambar_lamp_buku_nikah').html(html2);

            })
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
                        '</tr>'
                    ].join('\n');
                    html.push(tr);
                });
                $('#data_agunan').html(html);
            })
            .fail(function(response) {
                $('#data_agunan').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
    }

    load_data_anak = function() {
        var id = $('#form_tambah_data_anak input[type=hidden][name=id_debitur_anak]').val();
        get_data_debitur({}, id)
            .done(function(response) {
                var data_debitur = response.data;
                var html = [];
                var html14 = [];
                var no = 0;

                $.each(data_debitur.anak, function(index, item) {

                    var tr = [
                        '<tr>',
                        '<td>' + item.nama + '</td>',
                        '<td>' + item.tgl_lahir_anak + '</td>',
                        '<td style="width:5px"><button type="button" class="btn btn-default bg-gradient-danger btn-sm delete_anak"  title="Hapus Data Anak"  data="' + item.anak_id + '"><i style="color: #fff;" class="fas fa-window-close"></i></button></td>',
                        '</tr>'
                    ].join('\n');
                    html14.push(tr);
                    $('#data_anak').html(html14);
                })
            })
            .fail(function(response) {
                $('#data_anak').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
    }

    //SUBMIT EDIT VERIFIKASI
    update_verifikasi = function(opts, id) {
        var data = opts;
        var url = '<?php echo $this->config->item('api_url'); ?>api/verifikasi/' + id;
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
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";

                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            }
        })
    }

    $('#form_verifikasi_dokumen').on('submit', function(e) {
        var id = $('input[name=id_verifikasi]', this).val();
        e.preventDefault();
        var formData = new FormData();

        var data = {
            ver_ktp_debt: $('select[name=ver_ktp_calon_debitur_detail]', this).val(),
            ver_ktp_pasangan: $('select[name=ver_ktp_pasangan_detail]', this).val(),
            ver_kk_debt: $('select[name=ver_kk_detail]', this).val(),
            ver_akta_nikah_pasangan: $('select[name=ver_akta_nikah_detail]', this).val(),
            ver_akta_cerai_debt: $('select[name=ver_surat_cerai_detail]', this).val(),
            ver_akta_kematian_debt: $('select[name=ver_akta_kematian_detail]', this).val(),
            ver_sttp_pbb_debt: $('select[name=ver_sttp_pbb_detail]', this).val(),
            ver_sertifikat_debt: $('select[name=ver_sertifikat_detail]', this).val(),
            ver_imb_debt: $('select[name=ver_imb_detail]', this).val(),
            ver_pembukuan_usaha_debt: $('select[name=ver_slip_gaji_detail]', this).val(),
            ver_sku_debt: $('select[name=ver_keterangan_kerja_usaha_detail]', this).val(),
            ver_rek_tabungan_debt: $('select[name=ver_rekening_tabungan_detail]', this).val(),
            ver_data_penjamin: $('select[name=ver_data_penjamin_detail]', this).val(),
            catatan: $('textarea[name=catatan_verifikasi_detail]', this).val()
        }
        update_verifikasi(data, id)
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

    //SUBMIT EDIT VALIDASI
    update_validasi = function(opts, id) {
        var data = opts;
        var url = '<?php echo $this->config->item('api_url'); ?>api/validasi/' + id;
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
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";

                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            }
        })
    }

    $('#form_validasi').on('submit', function(e) {
        var id = $('input[name=id_validasi]', this).val();
        e.preventDefault();
        var formData = new FormData();

        var data = {
            val_data_debt: $('select[name=val_calon_debitur_detail]', this).val(),
            val_lingkungan_debt: $('select[name=val_cek_lingkungan_detail]', this).val(),
            val_domisili_debt: $('select[name=val_domisili_tinggal_detail]', this).val(),
            val_pekerjaan_debt: $('select[name=val_pekerjaan_detail]', this).val(),
            val_data_pasangan: $('select[name=val_pas_calon_debitur_detail]', this).val(),
            val_data_penjamin: $('select[name=val_penjamin_detail]', this).val(),
            val_agunan: $('select[name=val_agunan_tanah_detail]', this).val(),
            val_usaha_debt: $('select[name=val_pekerjaan_detail]', this).val(),
            catatan: $('textarea[name=catatan_val_detail]', this).val()
        }
        update_validasi(data, id)
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

    update_pemeriksaan_tanah_bangunan = function(opts, id) {
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


    $('#form_pemeriksaan_tanah_bangunan').on('submit', function(e) {
        var id = $('input[name=id_pemeriksaan_tanah_bangunan]', this).val();
        console.log(id)
        e.preventDefault();
        var formData = new FormData();
        formData.append('nama_penghuni_agunan', $('input[name=nama_penghuni_agunan_detail]', this).val());
        formData.append('status_penghuni_agunan', $('select[name=status_tanah_bangunan_detail]', this).val());
        formData.append('bentuk_bangunan_agunan', $('input[name=bentuk_bangunan_agunan_detail]', this).val());
        formData.append('kondisi_bangunan_agunan', $('select[name=kondisi_bangunan_agunan_detail]', this).val());
        formData.append('fasilitas_agunan', $('input[name=fasilitas_agunan_detail]', this).val());
        formData.append('listrik_agunan', $('input[name=listrik_agunan_detail]', this).val());

        var nilai_taksasi_bangunan_detail = $('input[name=nilai_taksasi_bangunan_detail]', this).val();
        nilai_taksasi_bangunan_detail = nilai_taksasi_bangunan_detail.replace(/[^\d]/g, "");
        formData.append('nilai_taksasi_bangunan', nilai_taksasi_bangunan_detail);

        var nilai_taksasi_agunan_detail = $('input[name=nilai_taksasi_agunan_detail]', this).val();
        nilai_taksasi_agunan_detail = nilai_taksasi_agunan_detail.replace(/[^\d]/g, "");
        formData.append('nilai_taksasi_agunan', nilai_taksasi_agunan_detail);

        formData.append('tgl_taksasi_agunan', $('input[name=tgl_taksasi_agunan_detail]', this).val());

        var nilai_likuidasi_agunan_detail = $('input[name=nilai_likuidasi_agunan_detail]', this).val();
        nilai_likuidasi_agunan_detail = nilai_likuidasi_agunan_detail.replace(/[^\d]/g, "");
        formData.append('nilai_likuidasi_agunan', nilai_likuidasi_agunan_detail);

        formData.append('perusahaan_penilai_independen', $('input[name=perusahaan_penilai_independen_detail]', this).val());

        var nilai_agunan_independen_detail = $('input[name=nilai_agunan_independen_detail]', this).val();
        nilai_agunan_independen_detail = nilai_agunan_independen_detail.replace(/[^\d]/g, "");
        formData.append('nilai_agunan_independen', nilai_agunan_independen_detail);

        update_pemeriksaan_tanah_bangunan(formData, id)
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

        var pemasukan_debitur = $('input[name=pemasukan_debitur_detail]', this).val();
        pemasukan_debitur = pemasukan_debitur.replace(/[^\d]/g, "");
        formData.append('pemasukan_debitur', pemasukan_debitur);

        var pemasukan_pasangan = $('input[name=pemasukan_pasangan_detail]', this).val();
        pemasukan_pasangan = pemasukan_pasangan.replace(/[^\d]/g, "");
        formData.append('pemasukan_pasangan', pemasukan_pasangan);

        var pemasukan_penjamin = $('input[name=pemasukan_penjamin_detail]', this).val();
        pemasukan_penjamin = pemasukan_penjamin.replace(/[^\d]/g, "");
        formData.append('pemasukan_penjamin', pemasukan_penjamin);

        var biaya_rumah_tangga = $('input[name=biaya_rumah_tangga_detail]', this).val();
        biaya_rumah_tangga = biaya_rumah_tangga.replace(/[^\d]/g, "");
        formData.append('biaya_rumah_tangga', biaya_rumah_tangga);

        var biaya_transportasi = $('input[name=biaya_transportasi_detail]', this).val();
        biaya_transportasi = biaya_transportasi.replace(/[^\d]/g, "");
        formData.append('biaya_transport', biaya_transportasi);

        var biaya_pendidikan = $('input[name=biaya_pendidikan_detail]', this).val();
        biaya_pendidikan = biaya_pendidikan.replace(/[^\d]/g, "");
        formData.append('biaya_pendidikan', biaya_pendidikan);

        var biaya_telp_listr_air = $('input[name=biaya_telp_listr_air_detail]', this).val();
        biaya_telp_listr_air = biaya_telp_listr_air.replace(/[^\d]/g, "");
        formData.append('telp_listr_air', biaya_telp_listr_air);

        var biaya_lain = $('input[name=biaya_lain_detail]', this).val();
        biaya_lain = biaya_lain.replace(/[^\d]/g, "");
        formData.append('biaya_lain', biaya_lain);

        update_kapasitas_bulanan_ao(formData, id)
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
    $('#form_pendapatan_pengeluaran_usaha').on('submit', function(e) {
        var id = $('input[name=id_pendapatan_usaha_detail]', this).val();
        e.preventDefault();
        var formData = new FormData();

        var pemasukan_tunai = $('input[name=pemasukan_tunai_detail]', this).val();
        pemasukan_tunai = pemasukan_tunai.replace(/[^\d]/g, "");
        formData.append('pemasukan_tunai', pemasukan_tunai);

        var pemasukan_kredit = $('input[name=pemasukan_kredit_detail]', this).val();
        pemasukan_kredit = pemasukan_kredit.replace(/[^\d]/g, "");
        formData.append('pemasukan_kredit', pemasukan_kredit);

        var biaya_sewa = $('input[name=biaya_sewa_detail]', this).val();
        biaya_sewa = biaya_sewa.replace(/[^\d]/g, "");
        formData.append('biaya_sewa', biaya_sewa);

        var biaya_gaji_pegawai = $('input[name=biaya_gaji_pegawai_detail]', this).val();
        biaya_gaji_pegawai = biaya_gaji_pegawai.replace(/[^\d]/g, "");
        formData.append('biaya_gaji_pegawai', biaya_gaji_pegawai);

        var biaya_belanja_brg = $('input[name=biaya_belanja_brg_detail]', this).val();
        biaya_belanja_brg = biaya_belanja_brg.replace(/[^\d]/g, "");
        formData.append('biaya_belanja_brg', biaya_belanja_brg);

        var biaya_telp_listr_air_usaha_detail = $('input[name=biaya_telp_listr_air_usaha_detail]', this).val();
        biaya_telp_listr_air_usaha_detail = biaya_telp_listr_air_usaha_detail.replace(/[^\d]/g, "");
        formData.append('biaya_telp_listr_air', biaya_telp_listr_air_usaha_detail);

        var biaya_sampah_keamanan_detail = $('input[name=biaya_sampah_keamanan_detail]', this).val();
        biaya_sampah_keamanan_detail = biaya_sampah_keamanan_detail.replace(/[^\d]/g, "");
        formData.append('biaya_sampah_kemanan', biaya_sampah_keamanan_detail);

        var biaya_kirim_barang = $('input[name=biaya_kirim_barang_detail]', this).val();
        biaya_kirim_barang = biaya_kirim_barang.replace(/[^\d]/g, "");
        formData.append('biaya_kirim_barang', biaya_kirim_barang);

        var biaya_hutang_dagang = $('input[name=biaya_hutang_dagang_detail]', this).val();
        biaya_hutang_dagang = biaya_hutang_dagang.replace(/[^\d]/g, "");
        formData.append('biaya_hutang_dagang', biaya_hutang_dagang);

        var angsuran = $('input[name=biaya_angsuran_detail]', this).val();
        angsuran = angsuran.replace(/[^\d]/g, "");
        formData.append('biaya_angsuran', angsuran);

        var biaya_lain_lain = $('input[name=biaya_lain_lain_detail]', this).val();
        biaya_lain_lain = biaya_lain_lain.replace(/[^\d]/g, "");
        formData.append('biaya_lain_lain', biaya_lain_lain);

        update_usaha_cadeb(formData, id)
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

    //UPDATE PENDAPATAN USAHA
    update_recom_ao = function(opts, id) {
        var data = opts;
        var url = '<?php echo $this->config->item('api_url'); ?>/api/recomAo/' + id;
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
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";

                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            }
        })
    }

    //UPDATE PENDAPATAN USAHA
    $('#form_recom_ao').on('submit', function(e) {
        var id = $('input[name=id_recom_ao_detail]', this).val();
        e.preventDefault();
        var formData = new FormData();
        var plafon_kredit_detail = $('input[name=plafon_kredit_detail]', this).val();
        plafon_kredit_detail = plafon_kredit_detail.replace(/[^\d]/g, "");
        var pembayaran_bunga_detail = $('input[name=pembayaran_bunga_detail]', this).val();
        pembayaran_bunga_detail = pembayaran_bunga_detail.replace(/[^\d]/g, "");
        var biaya_provisi_detail = $('input[name=biaya_provisi_detail]', this).val();
        biaya_provisi_detail = biaya_provisi_detail.replace(/[^\d]/g, "");
        var biaya_administrasi_detail = $('input[name=biaya_administrasi_detail]', this).val();
        biaya_administrasi_detail = biaya_administrasi_detail.replace(/[^\d]/g, "");
        var biaya_credit_checking_detail = $('input[name=biaya_credit_checking_detail]', this).val();
        biaya_credit_checking_detail = biaya_credit_checking_detail.replace(/[^\d]/g, "");
        var biaya_tabungan_detail = $('input[name=biaya_tabungan_detail]', this).val();
        biaya_tabungan_detail = biaya_tabungan_detail.replace(/[^\d]/g, "");

        var data = {
            produk: $('select[name=produk_detail]', this).val(),
            plafon_kredit: plafon_kredit_detail,
            jangka_waktu: $('select[name=jangka_waktu_detail]', this).val(),
            suku_bunga: $('input[name=suku_bunga_detail]', this).val(),
            pembayaran_bunga: pembayaran_bunga_detail,
            akad_kredit: $('select[name=akad_kredit_detail]', this).val(),
            ikatan_agunan: $('select[name=ikatan_agunan_detail]', this).val(),
            analisa_ao: $('input[name=analisa_ao_detail]', this).val(),
            biaya_provisi: biaya_provisi_detail,
            biaya_administrasi: biaya_administrasi_detail,
            biaya_credit_checking: biaya_credit_checking_detail,
            biaya_tabungan: biaya_tabungan_detail,
            tujuan_pinjaman: $('textarea[name=tujuan_pinjaman_rekomendasi_detail]', this).val(),
            jenis_pinjaman: $('select[name=jenis_pinjaman_detail]', this).val(),
        }

        update_recom_ao(data, id)
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

    //KLIK CANCEL DATA PENGAJUAN LPDK
    $('#data_anak').on('click', '.delete_anak', function(e) {
        var id = $(this).attr('data');
        console.log(id);
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Transaksi/delete_anak') ?>",
            dataType: "JSON",
            data: {
                id: id
            },
            success: function(data) {
                //   $('[name="id_delete"]').val("");
                //   $('#Modal_Delete').modal('hide');
                load_data_anak();
            }
        });
        return false;

    });


    // load_form_persetujuan_ideb = function() {
    //     var id = $('#form_debitur input[type=hidden][name=id]').val();
    //     get_detail({}, id)
    //         .done(function(response) {
    //             var data = response.data;
    //             console.log(data);
    //             html = [];
    //             var o = [
    //                 '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran_ao.form_persetujuan_ideb + '" /> </a>'
    //             ].join('\n');
    //             html.push(o);
    //             $('#lamp_form_persetujuan_ideb').html(html16);
    //         })
    //         .fail(function(response) {
    //             $('#data_agunan_detail').html('<tr><td colspan="4">Tidak ada data</td></tr>');
    //         });
    // }
</script>