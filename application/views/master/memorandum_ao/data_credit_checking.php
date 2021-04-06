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
                                                <input type="text" class="form-control" name="no_npwp" id="no_npwp" maxlength="15" onkeypress="return hanyaAngka(event)">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label>Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" onkeyup="this.value = this.value.toUpperCase()">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="exampleInputEmail1">Tanggal Lahir<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <input type="date" id="tgl_lahir_deb" onchange="changeBirthDate()" name="tgl_lahir_deb" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Umur</label>
                                                <input type="text" id="umur" name="umur" class="form-control" readonly>
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
                                                <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control select2 select2-danger" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($pendidikan as $key) {?>
                                                        <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Jumlah Tanggungan</label>
                                                <input type="text" class="form-control" name="jumlah_tanggungan"  id="jumlah_tanggungan" maxlength="3" onkeypress="return hanyaAngka(event)">
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
                                            <div class="form-group col-md-4">
                                                <label>Mulai Bekerja<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <input type="date" id="tgl_mulai_kerja" onchange="changeWorkDate()" name="tgl_mulai_kerja" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Lama Bekerja (bln)<span class="required_notification">*</span></label>
                                                <input type="text" id="lama_kerja" name="lama_kerja" class="form-control" readonly>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>No Telp Kantor<span class="required_notification">*</span></label>
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
                                                    Pemasukan Bulanan
                                                </th>
                                                <th>
                                                    Lampiran Photo Selfie
                                                </th>
                                                <th>
                                                    Lampiran KTP
                                                </th>
                                                <th>
                                                    Lampiran NPWP
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
                                <div class="col-md-4" id="photo_debitur">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Photo Debitur</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_photo"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_photo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="ktp">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">KTP Debitur</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_ktp"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_ktp">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" id="npwp">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">NPWP</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_npwp"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_npwp">
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
                                <div class="col-md-4" id="form_photo_pasangan">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Lampiran Photo Pasangan</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_photo_pasangan"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_photo_pasangan">
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
                                <div class="col-md-4" id="form_npwp_pasangan">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Lampiran KTP Pasangan</label>
                                        <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_npwp_pasangan"><i class="fa fa-pencil-alt"></i></button>
                                        <div class="form-group form-file-upload form-file-multiple">
                                            <div class="col-md-6">
                                                <div class="well" id="gambar_npwp_pasangan">
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
                                            <label>Pemilik Jaminan<span class="required_notification">*</span></label>
                                            <select id="status_penghuni_agunan" name="status_penghuni_agunan[]" class="form-control ">
                                                <option value="">--Pilih Pemilik Jaminan--</option>
                                                <?php foreach ($pemilik_jaminan as $key) {?>
                                                    <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                                <?php } ?>
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
                        <div class="card mb-3 aol" id="form_agunan_sertifikat">
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
                                                    Lokasi Jaminan
                                                </th>
                                                <th>
                                                    Collateral
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
                                        <label>Pemilik Jaminan<span class="required_notification">*</span></label>
                                        <select name="status_penghuni_agunan_detail" id="status_penghuni_agunan_detail" class="form-control ">
                                            <option value="">--Pilih Pemilik Jaminan--</option>
                                            <?php foreach ($pemilik_jaminan as $key) {?>
                                                <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                            <?php } ?>
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
                                            Lokasi Jaminan
                                        </th>
                                        <th>
                                            Collateral
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
                            <div class="col-md-3" id="photo_debitur">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Photo Debitur</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_photo"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_photo_debitur">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="ktp">
                                <div class="form-group">
                                    <label class="bmd-label-floating">KTP Debitur</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_ktp"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_ktp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3" id="npwp">
                                <div class="form-group">
                                    <label class="bmd-label-floating">NPWP Debitur</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_npwp"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_npwp_debitur">
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
                            <div class="col-md-3" id="form_photo_pasangan_detail">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran Photo Pasangan</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_photo_pasangan"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_photo_pasangan_debitur">
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
                            <div class="col-md-3" id="form_lampiran_npwp_pas_detail">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Lampiran NPWP Pasangan</label>
                                    <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_lamp_npwp_pasangan"><i class="fa fa-pencil-alt"></i></button>
                                    <div class="form-group form-file-upload form-file-multiple">
                                        <div class="col-md-6">
                                            <div class="well" id="gambar_lamp_npwp_pasangan">
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

<form id="form_edit_photo_deb">
    <input type="hidden" id="id_debitur_photo" name="id_debitur_photo">
    <div class="modal fade in" id="modal_edit_photo" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Photo Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_photo_deb" class="form-control" style="height: 45px">
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

<form id="form_edit_npwp">
    <input type="hidden" id="id_debitur_npwp" name="id_debitur_npwp">
    <div class="modal fade in" id="modal_edit_npwp" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran NPWP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_npwp" class="form-control" style="height: 45px">
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

<form id="form_edit_photo_pasangan">
    <input type="hidden" name="id_pasangan_photo">
    <div class="modal fade in" id="modal_edit_photo_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Photo Pasangan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_photo_pas" class="form-control" style="height: 45px">
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

<form id="form_edit_npwp_pasangan">
<input type="hidden" name="id_pasangan_npwp">>
    <div class="modal fade in" id="modal_edit_npwp_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran NPWP Pasangan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_npwp_pas" class="form-control" style="height: 45px">
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

<form id="form_edit_photo_deb_detail">
    <input type="hidden" id="id_debitur_photo_detail" name="id_debitur_photo">
    <div class="modal fade in" id="modal_edit_lamp_photo" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Photo Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_photo_deb_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_npwp_detail">
    <input type="hidden" id="id_debitur_npwp_detail" name="id_debitur_npwp">
    <div class="modal fade in" id="modal_edit_lamp_npwp" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran NPWP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_npwp_detail" class="form-control" style="height: 45px">
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

<form id="form_edit_photo_pasangan_detail">
    <input type="hidden" name="id_pasangan_photo">
    <div class="modal fade in" id="modal_edit_lamp_photo_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Photo Pasangan</label>
                        <div class="input-group">
                            <input type="file" name="lamp_photo_pas_detail" class="form-control" style="height: 45px">
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
    <input type="hidden" name="id_pasangan_npwp">
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

<form id="form_edit_npwp_pasangan_detail">
    <input type="hidden" id="id_debitur_npwp_detail" name="id_debitur_npwp">
    <div class="modal fade in" id="modal_edit_lamp_npwp_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran NPWP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_npwp_pas_detail" class="form-control" style="height: 45px">
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
                                    <label for="exampleInput1">Lokasi Jaminan<span class="required_notification">*</span></label>
                                    <select id="tipe_lokasi_agunan" name="tipe_lokasi_agunan" class="form-control ">
                                        <option value="">--Pilih--</option>
                                        <?php foreach ($lokasi_jaminan as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">Collateral<span class="required_notification">*</span></label>
                                    <select id="tipe_lokasi_agunan_collateral" name="tipe_lokasi_agunan_collateral" class="form-control ">
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($data_collateral as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
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
                                    <select id="jenis_sertifikat" name="jenis_sertifikat" class="form-control " onchange="showshgb()">
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($jenis_sertifikat as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
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
                                        <label>Tgl Berlaku SHGB<span id="wajib_shgb" class="required_notification">*</span></label>
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
                                    <label for="exampleInput1">Lokasi Jaminan<span class="required_notification">*</span></label>
                                    <select id="tipe_lokasi_agunan_detail" name="tipe_lokasi_agunan_detail" class="form-control ">
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($lokasi_jaminan as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">Collateral<span class="required_notification">*</span></label>
                                    <select id="tipe_lokasi_agunan_collateral_detail" name="tipe_lokasi_agunan_collateral_detail" class="form-control ">
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($data_collateral as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
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
                                        <?php foreach ($jenis_sertifikat as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" class="form-control" id="no_sertifikat_detail" name="no_sertifikat_detail" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal & Nomor Ukur sertifikat</label>
                                    <input type="text" class="form-control" id="no_ukur_sertifikat_detail" name="no_ukur_sertifikat_detail">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tgl Berlaku SHGB<span id="wajib_shgb_detail" class="required_notification">*</span></label>
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
                    <input type="hidden" id="edit_id_penjamin" name="edit_id_penjamin">
                    <div class="form-group">
                        <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                        <input type="text" name="nama_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                <input type="text" name="nama_ibu_kandung_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No KTP<span class="required_notification">*</span></label>
                                <input type="text" name="no_ktp_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control " maxlength="16">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No NPWP</label>
                                <input type="text" name="no_npwp_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control " maxlength="15">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pemasukan Bulanan</label>
                                <input type="text" name="pemasukan_pen" onkeypress="return hanyaAngka(event)" class="form-control">
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
                            <label>No Telpon Kantor</label>
                            <input type="text" class="form-control" name="no_telp_kantor_usaha" maxlength="13" onkeypress="return hanyaAngka(event)">
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-4" id="photo_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">Photo Penjamin</label>
                                    <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_photo_pen"><i class="fa fa-paperclip"></i></button>
                                </div>
                            </div>
                            <div class="col-md-4" id="ktp_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">KTP Penjamin</label>
                                    <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_ktp_pen"><i class="fa fa-paperclip"></i></button>
                                </div>
                            </div>
                            <div class="col-md-4" id="npwp_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">NPWP Penjamin</label>
                                    <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_npwp_pen"><i class="fa fa-paperclip"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-4" id="kk_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">KK Penjamin</label>
                                    <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_kk_pen"><i class="fa fa-paperclip"></i></button>
                                </div>
                            </div>
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

<form id="form_edit_photo_penjamin">
    <div class="modal fade in" id="modal_edit_photo_pen" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Photo Penjamin</label>
                        <input type="hidden" id="id_photo_pen" name="id_photo_pen">
                        <div class="input-group">
                            <input type="file" name="lamp_photo_pen" class="form-control" style="height: 45px">
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

<form id="form_edit_npwp_penjamin">
    <div class="modal fade in" id="modal_edit_npwp_pen" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran NPWP Penjamin</label>
                        <input type="hidden" id="id_npwp_pen" name="id_npwp_pen">
                        <div class="input-group">
                            <input type="file" name="lamp_npwp_pen" class="form-control" style="height: 45px">
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
                                    <label for="exampleInput1">Lokasi Jaminan<span class="required_notification">*</span></label>
                                    <select id="tipe_lokasi_agunan" name="tipe_lokasi_agunan" class="form-control ">
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($lokasi_jaminan as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">Collateral<span class="required_notification">*</span></label>
                                    <select id="tipe_lokasi_agunan_collateral" name="tipe_lokasi_agunan_collateral" class="form-control ">
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($data_collateral as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
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
                                        <?php foreach ($jenis_sertifikat as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" class="form-control" name="no_sertifikat" aria-describedby="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal & Nomor Ukur sertifikat</label>
                                    <input type="text" class="form-control" id="no_ukur_sertifikat" name="no_ukur_sertifikat">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Tgl Berlaku SHGB<span id="wajib_shgb" class="required_notification">*</span></label>
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
                    <input type="hidden" id="add_id_so_penjamin" name="add_id_so_penjamin">
                    <input type="hidden" id="add_id_penjamin" name="add_id_penjamin">
                        <div class="form-group">
                            <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                            <input type="text" name="add_nama_penjamin" id="add_nama_penjamin" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                    <input type="text" name="add_nama_ibu_kandung_penjamin" id="add_nama_ibu_kandung_penjamin" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No KTP<span class="required_notification">*</span></label>
                                    <input type="text" name="add_no_ktp_penjamin" id="add_no_ktp_penjamin" onkeypress="return hanyaAngka(event)" class="form-control " maxlength="16">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>No NPWP</label>
                                    <input type="text" name="add_no_npwp_penjamin" id="add_no_npwp_penjamin" onkeypress="return hanyaAngka(event)" class="form-control " maxlength="15">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pemasukan Bulanan</label>
                                    <input type="text" name="add_pemasukan_penjamin" id="add_pemasukan_penjamin" onkeypress="return hanyaAngka(event)" class="form-control">
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
                                <label>No Telpon Kantor</label>
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
                                    <label>Photo Penjamin<span class="required_notification add-lamp-photo-penjamin">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="add_lamp_photo_penjamin" class="custom-file-input add_lamp_photo_penjamin">
                                            <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                        </div>
                                    </div>
                                </div>
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
                                    <label>NPWP Penjamin<span class="required_notification add-lamp-npwp-penjamin">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="add_lamp_npwp_penjamin" class="custom-file-input add_lamp_npwp_penjamin">
                                            <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>KK Penjamin<span class="required_notification add-lamp-kk-penjamin">*</span></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="add_lamp_kk_penjamin" class="custom-file-input add_lamp_kk_penjamin">
                                            <label class="custom-file-label" style="font-size: 11px">Choose file</label>
                                        </div>
                                    </div>
                                </div>
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

<?php $this->view('master/memorandum_ao/data_credit_checking_js.php'); ?>

<script>
    function changeBirthDate() {
        var date = $("#tgl_lahir_deb").val();
        var today = new Date();
        var birthDate = new Date(date);
        var umur = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            umur--;
        }

        $("#umur").val(umur);
        
    }

    function changeWorkDate() {
        var date = $("#tgl_mulai_kerja").val();
        var today = new Date();
        var workDate = new Date(date);
        var lama_kerja = (today.getFullYear() - workDate.getFullYear()) * 12;
        lama_kerja -= workDate.getMonth();
        lama_kerja += today.getMonth();
        if (today.getDate() < workDate.getDate()) {
            lama_kerja -= 1;
        }

        $("#lama_kerja").val(lama_kerja < 0 ? 0 : lama_kerja);
        
    }
</script>
