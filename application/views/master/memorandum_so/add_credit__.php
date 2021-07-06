    <style type="text/css">
        body {
            font-family: Helvetica, sans-serif;
        }

        h2,
        h3 {
            margin-top: 0;
        }

        form {
            margin-top: 15px;
        }

        form>input {
            margin-right: 15px;
        }

        #results {
            float: right;
            margin: 20px;
            padding: 20px;
            border: 1px solid;
            background: #ccc;
        }
    </style>
</style>
<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>

<script type="text/javascript">
    $('#form_tambah_so .form-control').prop('disabled', true);
    $('#submit').prop('disabled', true);
</script>
<div class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 id="klik_ktp">Data Credit Checking</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Credit Checking</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">

        <div class="container-fluid">
            <div>
                <form id="form_check_ktp_deb">
                    <div class="form-group row">
                        <p class="col-md-8 text-right control-label col-form-label">Masukkan No KTP Debitur :</p>
                        <div class="col-md-4 input-group">
                            <input type="text" class="form-control" id="no_ktp_cadeb_cek" name="no_ktp_cadeb_cek" placeholder="Masukkan No KTP Debitur" maxlength="16" minlength="16" onkeypress="return hanyaAngka(event)">
                            <button type="submit" id="check" class="btn btn-info btn-flat float-right check">Cek</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid" id="form_foto_ktp">
            <div>
                <form>
                    <div class="form-group row">
                        <p class="col-md-8 text-right control-label col-form-label">Foto KTP Debitur :</p>
                        <div class="col-md-4 input-group">
                            <button type="button" id="uploadOCRKtpdebitur" data-toggle="modal" data-target="#modal_foto_ktp" class="btn btn-primary float-right check">
                                <i class="fa fa-camera"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="margin-bottom: 16px;">
                <form id="form_tambah_so">
                    <div class="card mb-3" id="table">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" aria-controls="collapseOne" role="button" aria-expanded="true" aria-controls="collapse_1">
                            <a class="text-light">
                                <b>CREDIT CHECKING</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_1">
                            <div class="row" id="data_user">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Asal Data<span class="required_notification">*</span></label>
                                        <select name="asal_data" id="select_asal_data" class="form-control select2 select2-danger" style="width: 100%;">
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Marketing 1/Nama Asal Data<span class="required_notification">*</span></label>
                                        <div class="input-group">
                                            <input type="text" id="nama_marketing" name="nama_marketing" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Plafon<span class="required_notification">*</span></label>
                                            <input type="text" id="plafon_pinjaman" name="plafon_pinjaman" class="form-control uang" aria-describedby="emailHelp" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tenor<span class="required_notification">*</span></label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" id="tenor_pinjaman" name="tenor_pinjaman" tabindex="-1" aria-hidden="true">
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
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Jenis Pinjaman<span class="required_notification">*</span></label>
                                        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" id="jenis_pinjaman" name="jenis_pinjaman" tabindex="-1" aria-hidden="true">
                                            <option value="">--Pilih--</option>
                                            <option value="KONSUMTIF">KONSUMTIF</option>
                                            <option value="MODAL KERJA">MODAL KERJA</option>
                                            <option value="INVESTASI">INVESTASI</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Tujuan Pinjaman<span class="required_notification">*</span></label>
                                        <textarea id="tujuan_pinjaman" name="tujuan_pinjaman" class="form-control " onkeyup="this.value = this.value.toUpperCase()" rows="5" cols="40" style="padding-top: 0px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="table">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" aria-controls="collapse_2">
                            <a class="text-light">
                                <b>DATA CALON DEBITUR</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>No KTP<span class="required_notification">*</span></label>
                                        <input type="text" id="no_ktp" name="no_ktp" class="form-control" minlength="16" maxlength="16" onkeyup="copy_NIK()" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group">
                                        <label>NIK KTP di KK<span class="required_notification">*</span></label>
                                        <input type="text" id="no_ktp_kk" name="no_ktp_kk" class="form-control" minlength="16" maxlength="16" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group">
                                        <label>No Kartu Keluarga<span class="required_notification">*</span></label>
                                        <input type="text" id="no_kk" name="no_kk" class="form-control" minlength="16" maxlength="16" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                        <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                    <div class="form-group">
                                        <label>No NPWP</label>
                                        <input type="text" name="no_npwp" class="form-control" minlength="15" maxlength="15" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Gelar Keagamaan</label>
                                            <input type="text" name="gelar_keagamaan" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Gelar Pendidikan</label>
                                            <input type="text" name="gelar_pendidikan" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Jenis Kelamin<span class="required_notification">*</span></label>
                                            <select name="jenis_kelamin_deb" id="jenis_kelamin_deb" class="form-control select2 select2-danger" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <option id="L_deb" value="L">LAKI-LAKI</option>
                                                <option id="P_deb" value="P">PEREMPUAN</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Status Pernikahan<span class="required_notification">*</span></label>
                                            <select name="status_nikah" id="status_nikah" class="form-control select2 select2-danger" style="width: 100%;" onchange="showDiv()">
                                                <option value="">--Pilih--</option>
                                                <option value="Single">Single</option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Janda/Duda">Janda/Duda</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tempat Lahir<span class="required_notification">*</span></label>
                                            <input type="text" id="tempat_lahir" name="tempat_lahir" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" id="tgl_lahir_deb" name="tgl_lahir_deb" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                        <input type="text" id="ibu_kandung" name="ibu_kandung" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Agama<span class="required_notification">*</span></label>
                                            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" id="agama" name="agama" tabindex="-1" aria-hidden="true">
                                                <option value="">--Pilih--</option>
                                                <option value="ISLAM">ISLAM</option>
                                                <option value="KATHOLIK">KATHOLIK</option>
                                                <option value="KRISTEN">KRISTEN</option>
                                                <option value="HINDU">HINDU</option>
                                                <option value="BUDHA">BUDHA</option>
                                                <option value="LAIN2 KEPERCAYAAN">LAIN2 KEPERCAYAAN</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Pendidikan Terakhir<span class="required_notification">*</span></label>
                                            <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control select2 select2-danger" style="width: 100%;">
                                                <option value="">--Pilih--</option>
                                                <option value="TIDAK TAMAT SD">TIDAK TAMAT SD</option>
                                                <option value="SD">SD</option>
                                                <option value="SMP SEDERAJAT">SMP SEDERAJAT</option>
                                                <option value="SMA SEDERAJAT">SMA SEDERAJAT</option>
                                                <option value="D1">D1</option>
                                                <option value="D2">D2</option>
                                                <option value="D3">D3</option>
                                                <option value="S1 SEDERAJAT">S1 SEDERAJAT</option>
                                                <option value="S2">S2</option>
                                                <option value="S3">S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah Tanggungan<span class="required_notification">*</span></label>
                                        <input type="text" id="jumlah_tanggungan" name="jumlah_tanggungan" class="form-control" maxlength="2" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>No Telpon 1<span class="required_notification">*</span></label>
                                            <input type="text" id="no_telp" name="no_telp" class="form-control" minlength="9" maxlength="13" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No Telpon 2</label>
                                            <input type="text" name="no_hp" class="form-control" minlength="9" maxlength="13" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email<span class="required_notification">*</span></label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Korespondensi<span class="required_notification">*</span></label>
                                        <select name="alamat_surat" id="alamat_surat" class="form-control select2 select2-danger" style="width: 100%;">
                                            <option value="">--Pilih--</option>
                                            <option value="ALAMAT KTP">ALAMAT KTP</option>
                                            <option value="ALAMAT DOMISILI">ALAMAT DOMISILI</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" style="margin-top: 24px">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label>Alamat <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" id="alamat_ktp" name="alamat_ktp">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>RT<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="rt_ktp" name="rt_ktp" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>RW<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="rw_ktp" name="rw_ktp" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Provinsi<span class="required_notification">*</span></label>
                                        <select name="provinsi_ktp" id="select_provinsi_ktp" class="form-control select2 select2-danger" style="width: 100%;">
                                            <option value="">--Pilih--</option>
                                        </select>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Kabupaten/Kota<span class="required_notification">*</span></label>
                                            <select name="kab_ktp" id="select_kabupaten_ktp" class="form-control select2 select2-danger" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kecamatan<span class="required_notification">*</span></label>
                                            <select name="kecamatan_ktp" id="select_kecamatan_ktp" class="form-control select2 select2-danger" style="width: 100%;">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6" id="kelurahan_ktp">
                                            <label>Kelurahan<span class="required_notification">*</span></label>
                                            <select name="kelurahan_ktp" id="select_kelurahan_ktp" class="form-control select2 select2-danger" style="width: 100%;">
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Kode POS<span class="required_notification">*</span></label>
                                            <input type="text" id="kode_pos_ktp" name="kode_pos_ktp" class="form-control " maxlength="5" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkboxSuccess3">
                                            <label class="form-check-label" for="exampleCheck2"> Alamat domisili sesuai dengan KTP</label>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label>Alamat <small><i>(Domisili)</i></small><span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" id="alamat_domisili" name="alamat_domisili">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>RT<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="rt_domisili" name="rt_domisili" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label>RW<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="rw_domisili" name="rw_domisili" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>

                                    <div class="form-group" id="selectprovinsidomisili">
                                        <label>Provinsi<span class="required_notification">*</span></label>
                                        <select name="provinsi_domisli" id="select_provinsi_domisili" class="form-control select2 select2-danger" style="width: 100%;">
                                            <option value="">--Pilih--</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="inputprovinsidomisili">
                                        <label>Provinsi<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="select_provinsi_domisili_dup1" readonly="">
                                        <input type="hidden" class="form-control" id="select_provinsi_domisili_dup" name="provinsi_domisli_dup">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" id="selectkabupatendomisili">
                                                <label>Kabupaten<span class="required_notification">*</span></label>
                                                <select name="kab_domisili" id="select_kabupaten_domisili" class="form-control select2 select2-danger" style="width: 100%;">
                                                </select>
                                            </div>
                                            <div class="form-group" id="inputkabupatendomisili">
                                                <label>Kabupaten<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="select_kabupaten_domisili_dup1" readonly="">
                                                <input type="hidden" class="form-control" id="select_kabupaten_domisili_dup" name="kabupaten_domisili_dup" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group" id="selectkecamatandomisili">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <select name="kecamatan_domisili" id="select_kecamatan_domisili" class="form-control select2 select2-danger" style="width: 100%;">
                                                </select>
                                            </div>
                                            <div class="form-group" id="inputkecamatandomisili">
                                                <label>Kecamatan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="select_kecamatan_domisili_dup1" readonly="">
                                                <input type="hidden" class="form-control" id="select_kecamatan_domisili_dup" name="kecamatan_domisili_dup" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group" id="selectkelurahandomisili">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <select name="kelurahan_domisili" id="select_kelurahan_domisili" class="form-control select2 select2-danger" style="width: 100%;">
                                                </select>
                                            </div>
                                            <div class="form-group" id="inputkelurahandomisili">
                                                <label>Kelurahan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" id="select_kelurahan_domisili_dup1" readonly="">
                                                <input type="hidden" class="form-control" id="select_kelurahan_domisili_dup" name="kelurahan_domisili_dup" readonly="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kode POS<span class="required_notification">*</span></label>
                                                <input type="text" id="kode_pos_domisili" name="kode_pos_domisili" class="form-control" maxlength="5" onkeypress="return hanyaAngka(event)" readonly="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_pasangan">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" aria-controls="collapse_3">
                            <a class="text-light">
                                <b>DATA PASANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                        <input type="text" id="nama_lengkap_pas" name="nama_lengkap_pas" value="-" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                        <input type="text" id="nama_ibu_kandung_pas" name="nama_ibu_kandung_pas" value="-" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin<span class="required_notification">*</span></label>
                                        <select id="jenis_kelamin_pas" name="jenis_kelamin_pas" id="jenis_kelamin_pas" class="form-control select2 select2-danger" style="width: 100%;">
                                            <option value="">--Pilih--</option>
                                            <option value="L">LAKI-LAKI</option>
                                            <option value="P">PEREMPUAN</option>
                                        </select>
                                    </div>
                                    <div class="form-group" style="margin-top: 46px">
                                        <div class="icheck-success d-inline">
                                            <input type="checkbox" id="checkboxSuccess4">
                                            <label for="checkboxSuccess4">
                                                Alamat sesuai dengan debitur
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                        <textarea id="alamat_ktp_pas" id="alamat_ktp_pas" name="alamat_ktp_pas" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="5" cols="40"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>No KTP<span class="required_notification">*</span></label>
                                            <input type="text" id="no_ktp_pas" name="no_ktp_pas" class="form-control" minlength="16" maxlength="16" onkeyup="copy_NIK_Pas()" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>NIK KTP di KK<span class="required_notification">*</span></label>
                                            <input type="text" id="no_ktp_kk_pas" name="no_ktp_kk_pas" class="form-control" minlength="16" maxlength="16" onkeypress="return hanyaAngka(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>NO NPWP</label>
                                        <input type="text" name="no_npwp_pas" class="form-control" minlength="15" maxlength="15" onkeypress="return hanyaAngka(event)">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Tempat Lahir<span class="required_notification">*</span></label>
                                            <input type="text" id="tempat_lahir_pas" name="tempat_lahir_pas" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </span>
                                                </div>
                                                <input type="text" id="tgl_lahir_pas" name="tgl_lahir_pas" class="datepicker-here form-control" data-language='en' value="" data-date-format="dd-mm-yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>No Telpon<span class="required_notification">*</span></label>
                                        <input type="text" id="no_telp_pas" name="no_telp_pas" class="form-control" minlength="9" maxlength="13" onkeypress="return hanyaAngka(event)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="formku">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" aria-controls="collapse_4">
                            <a class="text-light">
                                <b>DATA PENJAMIN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_4">
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
                                                <th width="5">#</th>
                                                <th>Input Data Penjamin</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_lampiran">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" data-target="#collapse_5" aria-expanded="true" aria-controls="collapse_5">
                            <a class="text-light">
                                <b>LAMPIRAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_5">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">KTP Debitur<span class="required_notification">*</span></label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_ktp_debitur1"><i class="fa fa-paperclip"></i></button><i id="check_ktp_deb" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                                <div class="col-md-3" id="kk">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kartu Keluarga Debitur<span class="required_notification">*</span></label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_kk"><i class="fa fa-paperclip"></i></button>
                                        <i id="check_kk_deb" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                                <div class="col-md-3" id="sertifikat">
                                    <div class="form-group">
                                        <label>Sertifikat<span class="required_notification">*</span></label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_sertifikat"><i class="fa fa-paperclip"></i></button>
                                        <i id="check_sertifikat" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                                <div class="col-md-3" id="pbb">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">PBB<span class="required_notification">*</span></label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_pbb"><i class="fa fa-paperclip"></i></button>
                                        <i id="check_pbb" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3" id="imb">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">IMB</label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_imb"><i class="fa fa-paperclip"></i></button>
                                        <i id="check_imb" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                                <div class="col-md-3" id="form_ktp_pasangan">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">KTP Pasangan<span class="required_notification">*</span></label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_ktp_pasangan"><i class="fa fa-paperclip"></i></button>
                                        <i id="check_ktp_pas" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                                <div class="col-md-3" id="form_buku_nikah">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Buku Nikah<span class="required_notification">*</span></label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_buku_nikah"><i class="fa fa-paperclip"></i></button>
                                        <i id="check_buku_nikah" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                                <div class="col-md-3" id="foto_agunan_rumah">
                                    <div class="form-group">
                                        <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Rumah<span class="required_notification">*</span></label>
                                        <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_agunan_rumah"><i class="fa fa-paperclip"></i></button>
                                        <i id="check_foto_agunan" class="fa fa-check-circle" style="color: #ffc107"></i>
                                    </div>
                                </div>
                            </div>
                                <!-- <div class="">
                                <div class="card mb-3" id="formku">
                                    <div class="box-header">
                                        <h5>Lampiran Data Kapasitas</h5>
                                    </div>
                                    <div class="box-body table-responsive no-padding">
                                        <button type="button" class="btn btn-primary" id="tambah_data_kapasitas" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                        <table id="example2" class="table">
                                            <thead style="font-size: 12px">
                                                <tr>
                                                    <th>
                                                        Aksi
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_lampiran_kapasitas" style="font-size: 12px">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 20px;">
                        <label style="font-style: italic; color: #383a3a;">Catatan<span class="required_notification">*</span></label>
                        <textarea name="notes_so" id="notes_so" style="width: 100%" rows="5"></textarea>
                    </div>
                    <button type="submit" id="submit" class="btn btn-primary" style="float: right;">Simpan</button>
                </form>
            </div>
        </div>
    </section>
</div>


<form id="form_edit_ktp_deb">
    <input type="hidden" id="id_debitur_ktp" name="id_debitur_ktp">
    <div class="modal fade rotate" id="modal_ktp_debitur1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Lampiran KTP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_deb" class="form-control" style="height: 45px">
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

<form id="form_edit_kk_deb">
    <input type="hidden" id="id_debitur_kk" name="id_debitur_kk">
    <div class="modal fade rotate" id="modal_edit_kk">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Lampiran Kartu Keluarga Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_kk_deb1" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <a href="#" data-dismiss="modal" class="btn btn-danger close_deb">Close</a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>


<form id="form_edit_sertifikat_deb">
    <input type="hidden" id="id_debitur_sertifikat" name="id_debitur_sertifikat">
    <div class="modal fade in" id="modal_edit_sertifikat" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Lampiran Sertifikat</label>
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
                        <label for="exampleInputFile">Lampiran PBB</label>
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
                        <label for="exampleInputFile">Lampiran IMB</label>
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

<form id="form_edit_ktp_pas">
    <input type="hidden" id="id_debitur_ktp_pasangan" name="id_debitur_ktp_pasangan">
    <div class="modal fade in" id="modal_edit_ktp_pasangan">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Lampiran KTP Pasangan</label>
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

<form id="form_edit_buku_nikah_pas">
    <input type="hidden" id="id_debitur_buku_nikah" name="id_debitur_buku_nikah">
    <div class="modal fade in" id="modal_edit_buku_nikah" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Lampiran Buku Nikah</label>
                        <div class="input-group">
                            <input type="file" name="lamp_buku_nikah_pas" class="form-control" style="height: 45px">
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

<form id="form_edit_agunan_rumah">
    <input type="hidden" id="id_debitur_agunan_rumah" name="id_debitur_agunan_rumah">
    <div class="modal fade in" id="modal_edit_agunan_rumah" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Lampiran Agunan Rumah</label>
                        <div class="input-group">
                            <input type="file" name="lamp_agunan_rumah" class="form-control" style="height: 45px">
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

<form id="form_tambah_lampiran_kapasitas">
    <input type="hidden" id="id_so_lamp_kapasitas" name="id_so_lamp_kapasitas">
    <div class="modal fade rotate" id="modal_lamp_kapasitas">
        <div class="modal-dialog">
            <div class="modal-content sm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: #ff0c17">×</button>
                </div>
                <div class="container"></div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputFile">Upload Lampiran Kapasitas</label>
                        <div class="input-group">
                            <input type="file" name="lamp_kapasitas" class="form-control" style="height: 45px">
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

<div class="modal fade in" id="modal_foto_ktp">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Foto KTP</h4>
                <button type="button" title="Tutup" id="close_modal_data_pengajuan" class="close" data-dismiss="modal" style="color: #ff0c17">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <div id="my_camera">
                        </div>
                        <input type="file" id="inp" name="inp" class="form-control">
                        <textarea id="b64"></textarea> 
                        <img hidden id="img" height="150">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" id="take" onclick="take_snapshot()" class="btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="load_data"></div>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<!-- <script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script> -->
<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>
<!-- <script src="<?php echo base_url('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script> -->

<script>

 $("#uploadOCRKtpdebitur").click(function() {
    Webcam.set({
        width: 320,
        height: 240,
        dest_width: 640,
        dest_height: 480,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    // Webcam.attach('#my_camera');
});

//  function get_image() {
//     Webcam.set({
//         width: 320,
//         height: 240,
//         dest_width: 640,
//         dest_height: 480,
//         image_format: 'jpeg',
//         jpeg_quality: 90
//     });
//     Webcam.attach('#my_camera');
// }


get_check_ktp_deb = function(opts, id) {
    var url = '<?php echo $this->config->item('api_url'); ?>api/debitur/ktpcadebt/';

    if (id != undefined) {
        url += id;
    }

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

$('#form_check_ktp_deb').on('click', '#check', function(e) {
    if (document.getElementById('no_ktp_cadeb_cek').value == "") {
        bootbox.alert("Silahkan masukkan No KTP Debitur  !!!");
        return (false);
    }
    if (document.getElementById('no_ktp_cadeb_cek').value.length < 16) {
        bootbox.alert("No KTP Debitur harus 16 Digit !!!");
        return (false);
    }
    e.preventDefault();

    var id = document.getElementById('no_ktp_cadeb_cek').value;

    get_check_ktp_deb({}, id)
    .done(function(response) {
        data = response;
        console.log(data);

        if (data.code == 200) {
            swal({
                title: "Sukses!",
                text: "NIK sudah terdaftar!",
                type: "success"
            },
            function() {
                $('#form_tambah_so .form-control').prop('disabled', false);
                $('#submit').prop('disabled', false);
                $('#form_tambah_so input[name=no_ktp]').val(data.data.NO_ID);
                $('#form_tambah_so input[name=no_ktp_kk]').val(data.data.NO_ID);
                $('#form_tambah_so input[name=nama_lengkap]').val(data.data.NAMA_NASABAH);
                if (data.data.JENIS_KELAMIN == "L") {
                    document.getElementById("L_deb").selected = "true";
                } else {
                    document.getElementById("P_deb").selected = "true";
                }
                $('#form_tambah_so input[name=tempat_lahir]').val(data.data.TEMPATLAHIR);
                $('#form_tambah_so input[id=tgl_lahir_deb]').val(data.data.TGLLAHIR);
                $('#form_tambah_so input[name=ibu_kandung]').val(data.data.NAMA_IBU_KANDUNG);
                $('#form_tambah_so input[name=no_telp]').val(data.data.HP);
            }
            );
        } else {
            swal({
                title: "Oops...",
                text: "NIK belum terdaftar, silahkan Input Credit Checking !",
                type: "error"
            },
            function() {
                $('#form_tambah_so .form-control').prop('disabled', false);
                $('#submit').prop('disabled', false);
                document.getElementById('no_ktp').value = document.getElementById('no_ktp_cadeb_cek').value;
                document.getElementById('no_ktp_kk').value = document.getElementById('no_ktp_cadeb_cek').value;
            }
            );
        }


    })
})

$('#form_lampiran').hide();
$('#check_ktp_deb').hide();
$('#check_kk_deb').hide();
$('#check_sertifikat').hide();
$('#check_pbb').hide();
$('#check_imb').hide();
$('#check_ktp_pas').hide();
$('#check_buku_nikah').hide();
$('#check_foto_agunan').hide();

$(function() {
    $('.select2').select2()
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
});

$('.uang').mask('0.000.000.000', {
    reverse: true
});

        // $(document).ready(function() {
        //     bsCustomFileInput.init();
        // });

        function copy_NIK() {
            document.getElementById('no_ktp_kk').value = document.getElementById('no_ktp').value;
        }

        function copy_NIK_Pas() {
            document.getElementById('no_ktp_kk_pas').value = document.getElementById('no_ktp_pas').value;
        }

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        $('#klik_ktp').click(function(e) {
            $('#form_foto_ktp').show();
        })
        $('#form_foto_ktp').hide();


        $('#checkboxSuccess3').click(function(e) {
            if ($('#checkboxSuccess3').prop('checked')) {
                document.getElementById('alamat_domisili').value = document.getElementById('alamat_ktp').value;
                document.getElementById('rt_domisili').value = document.getElementById('rt_ktp').value;
                document.getElementById('rw_domisili').value = document.getElementById('rw_ktp').value;
                $('#selectprovinsidomisili').hide();
                $('#inputprovinsidomisili').show();
                $('#selectkabupatendomisili').hide();
                $('#inputkabupatendomisili').show();
                $('#selectkecamatandomisili').hide();
                $('#inputkecamatandomisili').show();
                $('#selectkelurahandomisili').hide();
                $('#inputkelurahandomisili').show();
                document.getElementById('alamat_domisili').disabled = true;
                document.getElementById('rt_domisili').disabled = true;
                document.getElementById('rw_domisili').disabled = true;

                var a = document.getElementById('select_provinsi_ktp');
                document.getElementById('select_provinsi_domisili_dup1').value = a.options[a.selectedIndex].text;

                var b = document.getElementById('select_kabupaten_ktp');
                document.getElementById('select_kabupaten_domisili_dup1').value = b.options[b.selectedIndex].text;

                var c = document.getElementById('select_kecamatan_ktp');
                document.getElementById('select_kecamatan_domisili_dup1').value = c.options[c.selectedIndex].text;

                var d = document.getElementById('select_kelurahan_ktp');
                document.getElementById('select_kelurahan_domisili_dup1').value = d.options[d.selectedIndex].text;


                var e = document.getElementById('select_provinsi_ktp');
                document.getElementById('select_provinsi_domisili_dup').value = e.options[e.selectedIndex].value;

                var f = document.getElementById('select_kabupaten_ktp');
                document.getElementById('select_kabupaten_domisili_dup').value = f.options[f.selectedIndex].value;

                var g = document.getElementById('select_kecamatan_ktp');
                document.getElementById('select_kecamatan_domisili_dup').value = g.options[g.selectedIndex].value;

                var h = document.getElementById('select_kelurahan_ktp');
                document.getElementById('select_kelurahan_domisili_dup').value = h.options[h.selectedIndex].value;

                document.getElementById('kode_pos_domisili').disabled = true;
                document.getElementById('kode_pos_domisili').value = document.getElementById('kode_pos_ktp').value;

            } else
            if ($('#checkboxSuccess3').prop('checked', false)) {
                document.getElementById('alamat_domisili').value = "";
                document.getElementById('rt_domisili').value = "";
                document.getElementById('rw_domisili').value = "";
                document.getElementById('kode_pos_domisili').value = "";
                document.getElementById('kode_pos_domisili').disabled = false;
                $('#selectprovinsidomisili').show();
                $('#inputprovinsidomisili').hide();
                $('#selectkabupatendomisili').show();
                $('#inputkabupatendomisili').hide();
                $('#selectkecamatandomisili').show();
                $('#inputkecamatandomisili').hide();
                $('#selectkelurahandomisili').show();
                $('#inputkelurahandomisili').hide();
                document.getElementById('alamat_domisili').disabled = false;
                document.getElementById('rt_domisili').disabled = false;
                document.getElementById('rw_domisili').disabled = false;
            }
        });
        $('#selectprovinsidomisili').show();
        $('#inputprovinsidomisili').hide();
        $('#selectkabupatendomisili').show();
        $('#inputkabupatendomisili').hide();
        $('#selectkecamatandomisili').show();
        $('#inputkecamatandomisili').hide();
        $('#selectkelurahandomisili').show();
        $('#inputkelurahandomisili').hide();

        $('#checkboxSuccess4').click(function(e) {
            if ($('#checkboxSuccess4').prop('checked')) {
                document.getElementById('alamat_ktp_pas').value = document.getElementById('alamat_ktp').value + ' RT.' + document.getElementById('rt_ktp').value + ' RW.' + document.getElementById('rw_ktp').value + ' Provinsi: ' + document.getElementById('select_provinsi_ktp').options[document.getElementById('select_provinsi_ktp').selectedIndex].text + ' Kota/Kabupaten: ' + document.getElementById('select_kabupaten_ktp').options[document.getElementById('select_kabupaten_ktp').selectedIndex].text + ' Kecamatan: ' + document.getElementById('select_kecamatan_ktp').options[document.getElementById('select_kecamatan_ktp').selectedIndex].text + ' Kelurahan: ' + document.getElementById('select_kelurahan_ktp').options[document.getElementById('select_kelurahan_ktp').selectedIndex].text + ' Kode Pos: ' + document.getElementById('kode_pos_ktp').value;
                document.getElementById('kode_pos_domisili').value = document.getElementById('kode_pos_ktp').value;

            } else
            if ($('#checkboxSuccess4').prop('checked', false)) {
                document.getElementById('alamat_domisili').value = "";
                document.getElementById('rt_domisili').value = "";
                document.getElementById('rw_domisili').value = "";
                document.getElementById('kode_pos_domisili').value = "";
            }
        });

        $('#form_pasangan').hide();

        var np = 0;
        $(".add-row").click(function() {
            var datepicker = 'datepicker' + np++;
            var markup = '<tr><td><input type="checkbox" name="record" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()"></td><td><div class="row"><div class="col-md-6"><div class="form-group"><label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label><input type="text" name="nama_ktp_pen[]" onkeyup="this.value = this.value.toUpperCase()" class="form-control "></div><div class="form-group"><label>Nama Ibu Kandung<span class="required_notification">*</span></label><input type="text" name="nama_ibu_kandung_pen[]" onkeyup="this.value = this.value.toUpperCase()" class="form-control "></div><div class="form-row"><div class="form-group col-md-6"><label>Tempat Lahir<span class="required_notification">*</span></label><input type="text" onkeyup="this.value = this.value.toUpperCase()" name="tempat_lahir_pen[]" class="form-control"></div><div class="form-group col-md-6"><label>Tanggal Lahir<span class="required_notification">*</span></label><input type="text" name="tgl_lahir_pen[]" class="datepicker-here form-control" id="' + datepicker + '" data-language="en"  data-date-format="dd-mm-yyyy"/></div></div><div class="form-group"><label>Jenis Kelamin<span class="required_notification">*</span></label><select name="jenis_kelamin_pen[]" id="jenis_kelamin_pen[]" class="form-control select2 select2-danger" style="width: 100%;"><option value="">--Pilih--</option><option value="L">LAKI-LAKI</option><option value="P">PEREMPUAN</option></select></div><div class="form-row"><div class="form-group col-md-6"><label>No KTP<span class="required_notification">*</span></label><input type="text" name="no_ktp_pen[]" class="form-control" minlength="16" maxlength="16" onkeypress="return hanyaAngka(event)"></div><div class="form-group col-md-6"><label>No NPWP</label><input type="text"  name="no_npwp_pen[]" class="form-control" minlength="15" maxlength="15" onkeypress="return hanyaAngka(event)"></div></div></div><div class="col-md-6"><div class="form-group"><label>No Telpon<span class="required_notification">*</span></label><input type="text" name="no_telp_pen[]" class="form-control" minlength="9" maxlength="13" onkeypress="return hanyaAngka(event)"></div><div class="form-group"><label>Hubungan<span class="required_notification">*</span></label><select name="hubungan_debitur_pen[]" id="hubungan_debitur_pen[]" class="form-control select2 select2-danger" style="width: 100%;" onchange="showDiv()"><option value="">-- Pilih --</option><option value="ORANG TUA">ORANG TUA</option><option value="KAKAK">KAKAK</option><option value="ADIK">ADIK</option><option value="MERTUA">MERTUA</option><option value="ANAK">ANAK</option></select></div><div class="form-group"><label>Alamat<small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label><textarea name="alamat_ktp_pen[]" class="form-control " onkeyup="this.value = this.value.toUpperCase()" rows="5" cols="40" style="height: 213px;"></textarea></div></div></div></div></div></td></tr></tbody></table></div></td></tr>';
            $("#table tbody").append(markup);

            $(function() {
                $("#datepicker0").datepicker();
                $("#datepicker1").datepicker();
                $("#datepicker2").datepicker();
                $("#datepicker3").datepicker();
                $("#datepicker4").datepicker();
                $("#datepicker5").datepicker();
            });
            $(function() {
                $('.select2').select2()
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            });
            $(document).ready(function() {
                bsCustomFileInput.init();
            });
        });

        $(".delete-row").click(function() {
            $("table tbody").find('input[name="record"]').each(function() {
                if ($(this).is(":checked")) {
                    $(this).parents("tr").remove();
                }
            });
        });

        function showDiv(select) {
            var select = document.getElementById("status_nikah");
            if (select.value == 'Menikah') {
                $('#form_pasangan').show();
            } else {
                $('#form_pasangan').hide();
            }
        }

        $(function() {
            //GET ASAL DATA
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
                var select1 = '<option value="">--Pilih--</option>';
                $.each(res.data, function(i, e) {
                    var option = [
                    '<option value="' + e.id + '">' + e.nama + '</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_tambah_so select[id=select_asal_data]').html(select1 + select);
            })
            //===================================================================================

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

            //GET PROVINSI, KABUPATEN, KECAMATAN, KELURAHAN KTP
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
                $('#form_tambah_so select[id=select_provinsi_ktp]').html(select1 + select);
            })

            $('#select_provinsi_ktp').change(function() {
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
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kabupaten_ktp]').html(select1 + select);
                    }
                });
            });

            $('#select_kabupaten_ktp').change(function() {
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
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kecamatan_ktp]').html(select1 + select);
                    }
                });
            });

            $('#select_kecamatan_ktp').change(function() {
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
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kelurahan_ktp]').html(select1 + select);
                    }
                });
            });

            $('#select_kelurahan_ktp').change(function() {
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
                        console.log(response);
                        var data = response.data;

                        $('#form_tambah_so input[id=kode_pos_ktp]').val(data.kode_pos);
                    }
                });
            });
            //==========================================================================

            // GET PROVINSI, KABUPATEN, KECAMATAN, KELURAHAN DOMISILI
            get_provinsi()
            .done(function(res) {
                var select = [];
                var select1 = '<option value="">--Pilih--</option>'
                $.each(res.data, function(i, e) {
                    var option = [
                    '<option value="' + e.id + '">' + e.nama + '</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_tambah_so select[id=select_provinsi_domisili]').html(select1 + select);
            })

            $('#select_provinsi_domisili').change(function() {
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
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kabupaten_domisili]').html(select1 + select);
                    }
                });
            });

            $('#select_kabupaten_domisili').change(function() {
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
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kecamatan_domisili]').html(select1 + select);
                    }
                });
            });

            $('#select_kecamatan_domisili').change(function() {
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
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kelurahan_domisili]').html(select1 + select);
                    }
                });
            });

            $('#select_kelurahan_domisili').change(function() {
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
                        console.log(response);
                        var data = response.data;

                        $('#form_tambah_so input[id=kode_pos_domisili]').val(data.kode_pos);
                    }
                });
            });
            //======================================================================================

            //SUBMIT TAMBAH DEBITUR        
            tambah_debitur = function(opts) {
                var url = '<?php echo $this->config->item('api_url'); ?>api/master/mcc';
                var data = opts;
                return $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
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

            $('#form_tambah_so').on('submit', function(e) {
                if (document.getElementById('status_nikah').value == "Menikah") {

                    if (document.getElementById('select_asal_data').value == "") {
                        bootbox.alert("Asal Data Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('nama_marketing').value == "") {
                        bootbox.alert("Nama Marketing Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('plafon_pinjaman').value == "") {
                        bootbox.alert("Plafon Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('tenor_pinjaman').value == "") {
                        bootbox.alert("Tenor Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('jenis_pinjaman').value == "") {
                        bootbox.alert("Jenis Pinjaman Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('tujuan_pinjaman').value == "") {
                        bootbox.alert("Tujuan Pinjaman Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('nama_lengkap').value == "") {
                        bootbox.alert("Nama Lengkap Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('jenis_kelamin_deb').value == "") {
                        bootbox.alert("Jenis Kelamin Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('ibu_kandung').value == "") {
                        bootbox.alert("Nama Ibu Kandung Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp').value == "") {
                        bootbox.alert("No KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp').value.length < 16) {
                        bootbox.alert("No KTP Debitur 16 Digit !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp_kk').value == "") {
                        bootbox.alert("No KTP Di KK Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp_kk').value.length < 16) {
                        bootbox.alert("No KTP Di KK Debitur 16 Digit !!!");
                        return (false);
                    }
                    if (document.getElementById('no_kk').value == "") {
                        bootbox.alert("No KK Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_kk').value.length < 16) {
                        bootbox.alert("No KTP Debitur 16 Digit !!!");
                        return (false);
                    }
                    if (document.getElementById('tempat_lahir').value == "") {
                        bootbox.alert("Tempat Lahir Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('tgl_lahir_deb').value == "") {
                        bootbox.alert("Tanggal Lahir Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('agama').value == "") {
                        bootbox.alert("Agama Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('alamat_ktp').value == "") {
                        bootbox.alert("Alamat KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('rt_ktp').value == "") {
                        bootbox.alert("RT KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('rw_ktp').value == "") {
                        bootbox.alert("RW KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('select_provinsi_ktp').value == "") {
                        bootbox.alert("Provinsi KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('select_kabupaten_ktp').value == "") {
                        bootbox.alert("Kabupaten/Kota KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('select_kecamatan_ktp').value == "") {
                        bootbox.alert("Kecamatan KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('select_kelurahan_ktp').value == "") {
                        bootbox.alert("Kelurahan KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('kode_pos_ktp').value == "") {
                        bootbox.alert("Kode POS KTP Debitur Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('pendidikan_terakhir').value == "") {
                        bootbox.alert("Pendidikan Terakhir Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('jumlah_tanggungan').value == "") {
                        bootbox.alert("Jumlah Tanggungan Debitur Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('email').value == "") {
                        bootbox.alert("Email Debitur Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('alamat_surat').value == "") {
                        bootbox.alert("Alamat Korespondensi Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('nama_lengkap_pas').value == "") {
                        bootbox.alert("Nama Lengkap Pasangan Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('nama_ibu_kandung_pas').value == "") {
                        bootbox.alert("Nama Ibu Kandung Pasangan Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('jenis_kelamin_pas').value == "") {
                        bootbox.alert("Jenis Kelamin Pasangan Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('alamat_ktp_pas').value == "") {
                        bootbox.alert("Alamat KTP Pasangan Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp_kk_pas').value == "") {
                        bootbox.alert("No KTP Di KK Pasangan Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('tempat_lahir_pas').value == "") {
                        bootbox.alert("Tempat Lahir Pasangan Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('tgl_lahir_pas').value == "") {
                        bootbox.alert("Tanggal Lahir Pasangan Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('no_telp_pas').value == "") {
                        bootbox.alert("No Telpon Pasangan Belum Di Isi !!!");
                        return (false);
                    }
                } else {
                    if (document.getElementById('nama_marketing').value == "") {
                        bootbox.alert("Nama Marketing Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('plafon_pinjaman').value == "") {
                        bootbox.alert("Plafon Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('tenor_pinjaman').value == "") {
                        bootbox.alert("Tenor Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('jenis_pinjaman').value == "") {
                        bootbox.alert("Jenis Pinjaman Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('tujuan_pinjaman').value == "") {
                        bootbox.alert("Tujuan Pinjaman Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('nama_lengkap').value == "") {
                        bootbox.alert("Nama Lengkap Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('jenis_kelamin_deb').value == "") {
                        bootbox.alert("Jenis Kelamin Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('ibu_kandung').value == "") {
                        bootbox.alert("Nama Ibu Kandung Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp').value == "") {
                        bootbox.alert("No KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp').value.length < 16) {
                        bootbox.alert("No KTP Debitur 16 Digit !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp_kk').value == "") {
                        bootbox.alert("No KTP Di KK Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_ktp_kk').value.length < 16) {
                        bootbox.alert("No KTP Di KK Debitur 16 Digit !!!");
                        return (false);
                    }
                    if (document.getElementById('no_kk').value == "") {
                        bootbox.alert("No KK Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('no_kk').value.length < 16) {
                        bootbox.alert("No KTP Debitur 16 Digit !!!");
                        return (false);
                    }
                    if (document.getElementById('status_nikah').value == "") {
                        bootbox.alert("Status Nikah Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('tempat_lahir').value == "") {
                        bootbox.alert("Tempat Lahir Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('tgl_lahir_deb').value == "") {
                        bootbox.alert("Tanggal Lahir Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('agama').value == "") {
                        bootbox.alert("Agama Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('alamat_ktp').value == "") {
                        bootbox.alert("Alamat KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('rt_ktp').value == "") {
                        bootbox.alert("RT KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('rw_ktp').value == "") {
                        bootbox.alert("RW KTP Debitur Tidak Boleh Kosong !!!");
                        return (false);
                    }
                    if (document.getElementById('select_provinsi_ktp').value == "") {
                        bootbox.alert("Provinsi KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('select_kabupaten_ktp').value == "") {
                        bootbox.alert("Kabupaten/Kota KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('select_kecamatan_ktp').value == "") {
                        bootbox.alert("Kecamatan KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('select_kelurahan_ktp').value == "") {
                        bootbox.alert("Kelurahan KTP Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('kode_pos_ktp').value == "") {
                        bootbox.alert("Kode POS KTP Debitur Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('pendidikan_terakhir').value == "") {
                        bootbox.alert("Pendidikan Terakhir Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('jumlah_tanggungan').value == "") {
                        bootbox.alert("Jumlah Tanggungan Debitur Belum Di Isi !!!");
                        return (false);
                    }
                    if (document.getElementById('alamat_surat').value == "") {
                        bootbox.alert("Alamat Korespondensi Debitur Belum Di Pilih !!!");
                        return (false);
                    }
                    if (document.getElementById('notes_so').value == "") {
                        bootbox.alert("Catatan Belum Di Isi !!!");
                        return (false);
                    }
                }
                e.preventDefault();
                var formData = new FormData();
                var select = document.getElementById("status_nikah");
                if (select.value == 'Menikah') {
                    //data so
                    formData.append('id_asal_data', $('select[name=asal_data]', this).val());
                    formData.append('nama_marketing', $('input[name=nama_marketing]', this).val());

                    //fasilitas pinjaman
                    formData.append('jenis_pinjaman', $('select[name=jenis_pinjaman]', this).val());
                    formData.append('tujuan_pinjaman', $('textarea[name=tujuan_pinjaman]', this).val());

                    var plafon = $('input[name=plafon_pinjaman]', this).val();
                    plafon = plafon.replace(/[^\d]/g, "");
                    formData.append('plafon_pinjaman', plafon);

                    formData.append('tenor_pinjaman', $('select[name=tenor_pinjaman]', this).val());

                    //calon debitur
                    formData.append('nama_lengkap', $('input[name=nama_lengkap]', this).val());
                    formData.append('gelar_keagamaan', $('input[name=gelar_keagamaan]', this).val());
                    formData.append('gelar_pendidikan', $('input[name=gelar_pendidikan]', this).val());
                    formData.append('jenis_kelamin', $('select[name=jenis_kelamin_deb]', this).val());
                    formData.append('status_nikah', $('select[name=status_nikah]', this).val());
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
                    formData.append('id_provinsi_ktp', $('select[name=provinsi_ktp]', this).val());
                    formData.append('id_kabupaten_ktp', $('select[name=kab_ktp]', this).val());
                    formData.append('id_kecamatan_ktp', $('select[name=kecamatan_ktp]', this).val());
                    formData.append('id_kelurahan_ktp', $('select[name=kelurahan_ktp]', this).val());
                    formData.append('alamat_domisili', $('input[name=alamat_domisili]', this).val());
                    formData.append('rt_domisili', $('input[name=rt_domisili]', this).val());
                    formData.append('rw_domisili', $('input[name=rw_domisili]', this).val());
                    formData.append('email', $('input[name=email]', this).val());
                    formData.append('textarea', $('input[name=notes_so]', this).val());

                    if ($('#checkboxSuccess3').prop('checked')) {
                        formData.append('id_provinsi_domisili', $('input[name=provinsi_domisli_dup]', this).val());
                        formData.append('id_kabupaten_domisili', $('input[name=kabupaten_domisili_dup]', this).val());
                        formData.append('id_kecamatan_domisili', $('input[name=kecamatan_domisili_dup]', this).val());
                        formData.append('id_kelurahan_domisili', $('input[name=kelurahan_domisili_dup]', this).val());
                    } else
                    if ($('#checkboxSuccess3').prop('checked', false)) {
                        formData.append('id_provinsi_domisili', $('select[name=provinsi_domisli]', this).val());
                        formData.append('id_kabupaten_domisili', $('select[name=kab_domisili]', this).val());
                        formData.append('id_kecamatan_domisili', $('select[name=kecamatan_domisili]', this).val());
                        formData.append('id_kelurahan_domisili', $('select[name=kelurahan_domisili]', this).val());
                    }

                    formData.append('pendidikan_terakhir', $('select[name=pendidikan_terakhir]', this).val());
                    formData.append('jumlah_tanggungan', $('input[name=jumlah_tanggungan]', this).val());
                    formData.append('no_telp', $('input[name=no_telp]', this).val());
                    formData.append('no_hp', $('input[name=no_hp]', this).val());
                    formData.append('alamat_surat', $('select[name=alamat_surat]', this).val());

                    //pasangan
                    formData.append('nama_lengkap_pas', $('input[name=nama_lengkap_pas]', this).val());
                    formData.append('nama_ibu_kandung_pas', $('input[name=nama_ibu_kandung_pas]', this).val());
                    // formData.append('jenis_kelamin_pas',$('input[type=radio][name=jenis_kelamin_pas]:checked',this).val());
                    formData.append('jenis_kelamin_pas', $('select[name=jenis_kelamin_pas]', this).val());
                    formData.append('alamat_ktp_pas', $('textarea[name=alamat_ktp_pas]', this).val());
                    formData.append('no_ktp_pas', $('input[name=no_ktp_pas]', this).val());
                    formData.append('no_ktp_kk_pas', $('input[name=no_ktp_kk_pas]', this).val());
                    formData.append('no_npwp_pas', $('input[name=no_npwp_pas]', this).val());
                    formData.append('tempat_lahir_pas', $('input[name=tempat_lahir_pas]', this).val());
                    formData.append('tgl_lahir_pas', $('input[name=tgl_lahir_pas]', this).val());
                    formData.append('no_telp_pas', $('input[name=no_telp_pas]', this).val());

                    //penjamin
                    $.each($('input[name="nama_ktp_pen[]"]'), function(i, e) {
                        formData.append('nama_ktp_pen[]', e.value);
                    });
                    $.each($('input[name="nama_ibu_kandung_pen[]"]'), function(i, e) {
                        formData.append('nama_ibu_kandung_pen[]', e.value);
                    });
                    $.each($('input[name="tempat_lahir_pen[]"]'), function(i, e) {
                        formData.append('tempat_lahir_pen[]', e.value);
                    });
                    $.each($('input[name="tgl_lahir_pen[]"]'), function(i, e) {
                        formData.append('tgl_lahir_pen[]', e.value);
                    });
                    $.each($('select[name="jenis_kelamin_pen[]"]'), function(i, e) {
                        formData.append('jenis_kelamin_pen[]', e.value);
                    });
                    $.each($('input[name="no_ktp_pen[]"]'), function(i, e) {
                        formData.append('no_ktp_pen[]', e.value);
                    });
                    $.each($('input[name="no_npwp_pen[]"]'), function(i, e) {
                        formData.append('no_npwp_pen[]', e.value);
                    });
                    $.each($('textarea[name="alamat_ktp_pen[]"]'), function(i, e) {
                        formData.append('alamat_ktp_pen[]', e.value);
                    });
                    $.each($('input[name="no_telp_pen[]"]'), function(i, e) {
                        formData.append('no_telp_pen[]', e.value);
                    });
                    $.each($('select[name="hubungan_debitur_pen[]"]'), function(i, e) {
                        formData.append('hubungan_debitur_pen[]', e.value);
                    });

                    $.each($('input[name="lamp_ktp_pen[]"]', this), function(i, e) {
                        formData.append('lamp_ktp_pen[]', e.files[0]);
                    });
                    $.each($('input[name="lamp_ktp_pas_pen[]"]', this), function(i, e) {
                        formData.append('lamp_ktp_pasangan_pen[]', e.files[0]);
                    });
                    $.each($('input[name="lamp_kk_pen[]"]', this), function(i, e) {
                        formData.append('lamp_kk_pen[]', e.files[0]);
                    });
                    $.each($('input[name="lamp_buku_nikah_pen[]"]', this), function(i, e) {
                        formData.append('lamp_buku_nikah_pen[]', e.files[0]);
                    });

                } else {
                    //data so
                    formData.append('id_asal_data', $('select[name=asal_data]', this).val());
                    formData.append('nama_marketing', $('input[name=nama_marketing]', this).val());

                    //fasilitas pinjaman
                    formData.append('jenis_pinjaman', $('select[name=jenis_pinjaman]', this).val());
                    formData.append('tujuan_pinjaman', $('textarea[name=tujuan_pinjaman]', this).val());

                    var plafon = $('input[name=plafon_pinjaman]', this).val();
                    plafon = plafon.replace(/[^\d]/g, "");
                    formData.append('plafon_pinjaman', plafon);

                    formData.append('tenor_pinjaman', $('select[name=tenor_pinjaman]', this).val());

                    //calon debitur
                    formData.append('nama_lengkap', $('input[name=nama_lengkap]', this).val());
                    formData.append('gelar_keagamaan', $('input[name=gelar_keagamaan]', this).val());
                    formData.append('gelar_pendidikan', $('input[name=gelar_pendidikan]', this).val());
                    formData.append('jenis_kelamin', $('select[name=jenis_kelamin_deb]', this).val());
                    formData.append('status_nikah', $('select[name=status_nikah]', this).val());
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
                    formData.append('id_provinsi_ktp', $('select[name=provinsi_ktp]', this).val());
                    formData.append('id_kabupaten_ktp', $('select[name=kab_ktp]', this).val());
                    formData.append('id_kecamatan_ktp', $('select[name=kecamatan_ktp]', this).val());
                    formData.append('id_kelurahan_ktp', $('select[name=kelurahan_ktp]', this).val());
                    formData.append('alamat_domisili', $('input[name=alamat_domisili]', this).val());
                    formData.append('rt_domisili', $('input[name=rt_domisili]', this).val());
                    formData.append('rw_domisili', $('input[name=rw_domisili]', this).val());
                    formData.append('email', $('input[name=email]', this).val());
                    formData.append('notes_so', $('textarea[name=notes_so]', this).val());

                    if ($('#checkboxSuccess3').prop('checked')) {
                        formData.append('id_provinsi_domisili', $('input[name=provinsi_domisli_dup]', this).val());
                        formData.append('id_kabupaten_domisili', $('input[name=kabupaten_domisili_dup]', this).val());
                        formData.append('id_kecamatan_domisili', $('input[name=kecamatan_domisili_dup]', this).val());
                        formData.append('id_kelurahan_domisili', $('input[name=kelurahan_domisili_dup]', this).val());
                    } else if ($('#checkboxSuccess3').prop('checked', false)) {
                        formData.append('id_provinsi_domisili', $('select[name=provinsi_domisli]', this).val());
                        formData.append('id_kabupaten_domisili', $('select[name=kab_domisili]', this).val());
                        formData.append('id_kecamatan_domisili', $('select[name=kecamatan_domisili]', this).val());
                        formData.append('id_kelurahan_domisili', $('select[name=kelurahan_domisili]', this).val());
                    }

                    formData.append('pendidikan_terakhir', $('select[name=pendidikan_terakhir]', this).val());
                    formData.append('jumlah_tanggungan', $('input[name=jumlah_tanggungan]', this).val());
                    formData.append('no_telp', $('input[name=no_telp]', this).val());
                    formData.append('no_hp', $('input[name=no_hp]', this).val());
                    formData.append('alamat_surat', $('select[name=alamat_surat]', this).val());

                    //penjamin
                    $.each($('input[name="nama_ktp_pen[]"]'), function(i, e) {
                        formData.append('nama_ktp_pen[]', e.value);
                    });
                    $.each($('input[name="nama_ibu_kandung_pen[]"]'), function(i, e) {
                        formData.append('nama_ibu_kandung_pen[]', e.value);
                    });
                    $.each($('input[name="tempat_lahir_pen[]"]'), function(i, e) {
                        formData.append('tempat_lahir_pen[]', e.value);
                    });
                    $.each($('input[name="tgl_lahir_pen[]"]'), function(i, e) {
                        formData.append('tgl_lahir_pen[]', e.value);
                    });
                    $.each($('select[name="jenis_kelamin_pen[]"]'), function(i, e) {
                        formData.append('jenis_kelamin_pen[]', e.value);
                    });
                    $.each($('input[name="no_ktp_pen[]"]'), function(i, e) {
                        formData.append('no_ktp_pen[]', e.value);
                    });
                    $.each($('input[name="no_npwp_pen[]"]'), function(i, e) {
                        formData.append('no_npwp_pen[]', e.value);
                    });
                    $.each($('textarea[name="alamat_ktp_pen[]"]'), function(i, e) {
                        formData.append('alamat_ktp_pen[]', e.value);
                    });
                    $.each($('input[name="no_telp_pen[]"]'), function(i, e) {
                        formData.append('no_telp_pen[]', e.value);
                    });
                    $.each($('select[name="hubungan_debitur_pen[]"]'), function(i, e) {
                        formData.append('hubungan_debitur_pen[]', e.value);
                    });
                }

                tambah_debitur(formData)
                .done(function(res) {

                    var data = res.data;
                    console.log(data);
                    $('#form_edit_ktp_deb input[type=hidden][name=id_debitur_ktp]').val(data.id_calon_debitur);
                    $('#form_edit_kk_deb input[type=hidden][name=id_debitur_kk]').val(data.id_calon_debitur);
                    $('#form_edit_sertifikat_deb input[type=hidden][name=id_debitur_sertifikat]').val(data.id_calon_debitur);
                    $('#form_edit_imb_deb input[type=hidden][name=id_debitur_imb]').val(data.id_calon_debitur);
                    $('#form_edit_pbb_deb input[type=hidden][name=id_debitur_pbb]').val(data.id_calon_debitur);
                    $('#form_edit_agunan_rumah input[type=hidden][name=id_debitur_agunan_rumah]').val(data.id_calon_debitur);


                    $('#form_edit_ktp_pas input[type=hidden][name=id_debitur_ktp_pasangan]').val(data.id_pasangan);
                    $('#form_edit_buku_nikah_pas input[type=hidden][name=id_debitur_buku_nikah]').val(data.id_pasangan);
                    bootbox.alert('Lanjut Upload Lampiran', function() {
                        $("#batal").click();
                        load_data();
                        var select = document.getElementById("status_nikah");
                        if (select.value == 'Menikah') {
                            $('#form_lampiran').show();
                            $('#submit').hide();
                        } else {
                            $('#form_ktp_pasangan').hide();
                            $('#form_buku_nikah').hide();
                            $('#form_lampiran').show();
                            $('#submit').hide();
                        }
                    });
                })

                .fail(function(jqXHR) {
                    var data = jqXHR.responseJSON.message;
                    var error = "";
                    if (typeof data == 'string') {
                        error = '<p>' + data + '</p>';
                    } else {
                        $.each(data.jenis_pinjaman, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.plafon_pinjaman, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.tenor_pinjaman, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.nama_lengkap, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.ibu_kandung, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.no_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.no_ktp_kk, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.no_kk, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.no_npwp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.tempat_lahir, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.tgl_lahir, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.jenis_kelamin, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.agama, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.alamat_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.rt_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.rw_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.rw_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.id_provinsi_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.id_kabupaten_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.id_kecamatan_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.id_kelurahan_ktp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.pendidikan_terakhir, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.no_telp, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.alamat_surat, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });

                        $.each(data.no_ktp_pas, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.no_ktp_kk_pas, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                        $.each(data.no_npwp_pas, function(index, item) {
                            error += '<p>' + item + "</p>";
                        });
                    }
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });
});

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
                $('#modal_load_data').modal('show');
            },
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }


    $('#form_edit_ktp_deb ').on('submit', function(e) {
        var id = $('input[name=id_debitur_ktp]', this).val();
        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('lamp_ktp', $('input[name=lamp_ktp_deb]', this)[0].files[0]);
                update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_ktp_deb').show();
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

    $('#form_edit_kk_deb ').on('submit', function(e) {
        var id = $('input[name=id_debitur_kk]', this).val();
        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('lamp_kk', $('input[name=lamp_kk_deb1]', this)[0].files[0]);

                update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $("#batal").click();
                        $(".close_deb").click();
                        $('#check_kk_deb').show();
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

    $('#form_edit_sertifikat_deb ').on('submit', function(e) {
        var id = $('input[name=id_debitur_sertifikat]', this).val();

        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('lamp_sertifikat', $('input[name=lamp_sertifikat_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $('#check_sertifikat').show();
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

    $('#form_edit_pbb_deb').on('submit', function(e) {
        var id = $('input[name=id_debitur_pbb]', this).val();
        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('lamp_pbb', $('input[name=lamp_pbb_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $('#check_pbb').show();
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

    $('#form_edit_imb_deb').on('submit', function(e) {
        var id = $('input[name=id_debitur_imb]', this).val();
        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('lamp_imb', $('input[name=lamp_imb_deb]', this)[0].files[0]);

                update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $('#check_imb').show();
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

    $('#form_edit_agunan_rumah').on('submit', function(e) {
        var id = $('input[name=id_debitur_agunan_rumah]', this).val();
        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('foto_agunan_rumah', $('input[name=lamp_agunan_rumah]', this)[0].files[0]);

                update_debitur(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $('#check_foto_agunan').show();
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

    $('#form_edit_ktp_pas').on('submit', function(e) {
        var id = $('input[name=id_debitur_ktp_pasangan]', this).val();
        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('lamp_ktp_pas', $('input[name=lamp_ktp_pas]', this)[0].files[0]);

                update_pasangan(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $('#check_ktp_pas').show();
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

    $('#form_edit_buku_nikah_pas').on('submit', function(e) {
        var id = $('input[name=id_debitur_buku_nikah]', this).val();
        e.preventDefault();
        var formData = new FormData();
                //Data Debitur
                formData.append('lamp_buku_nikah_pas', $('input[name=lamp_buku_nikah_pas]', this)[0].files[0]);

                update_pasangan(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Lampiran berhasil disimpan', function() {
                        $('#check_buku_nikah').show();
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
});

    function validasiEmail(email, allowEmail = "") {

            // filter_depan adalah regular expression sebelum @ 
            // filter_belakang adalah regular expression setelah @
            console.log(allowEmail);

            var filter_depan = "^([A-z.a-z])(\\w+[\\.-]?\\w+)*",
            filter_belakang = "@\\w+([\\.-]?\\w+)((\\.\\w{2,3}){1})$";

            if (allowEmail != "") {
                // ganti filter_belakang dengan regular expression yang baru
                filter_belakang = "@(\\b(" + allowEmail + ")\\b)*((\\.\\w{2,3}){1,2})$";
            }

            // buat konstruktor RegExp
            var filter = new RegExp(filter_depan + filter_belakang, 'g');
            var found = filter.test(email);
            console.log(filter.source);

            if (!found) {

                alert("Email Salah");
            } else {
                alert("Email Benar");
            }

        }

        function take_snapshot() {
            // Webcam.snap(function(data_uri) {
                var base_64 = $('#b64').val();
                var key = "21594885e26346e668dedda0c13a1b4fafbf3c095305911ca10aca0f81d4727f3bdab34febfbdf21dedf620c6e4bdb4c01a7199f2e206e1667110cef4546d1ff";
                console.log(base_64);

                $.ajax({
                    type: "POST",
                    url: "http://ai.inergi.id:8001/document_classifier",
                    contentType: "application/json",
                    dataType: "json",
                    data: JSON.stringify({
                        "key": key,
                        "image": base_64,
                        "return_segmented": true,
                        "return_photo": true,
                        "return_signature_photo": true
                    }),
                    success: function(res) {
                        console.log(res);
                        var tempat_lahir = "Tempat Lahir"
                        var data = res.data;
                        $('[id="no_ktp_cadeb_cek"]').val(data.NIK.value);
                        $('[id="no_ktp"]').val(data.NIK.value);
                        $('[id="nama_lengkap"]').val(data.Nama.value);
                        swal({
                            title: "Data Berhasil Diambil",
                            // text: "Terimakasih",
                            type: "success"
                        });

                        // $('[id="tempat_lahir"]').val(data.Tempat Lahir.value);
                        // $('[id="tempat_lahir"]').val(data.Tempat Lahir.value);
                    }
                });

            // });
        }
        // function take_snapshot() {
        //     var key = '21594885e26346e668dedda0c13a1b4fafbf3c095305911ca10aca0f81d4727f3bdab34febfbdf21dedf620c6e4bdb4c01a7199f2e206e1667110cef4546d1ff';
        //     var image = "";

        //     $.ajax({
        //         type: "POST",
        //         url: 'http://ai.inergi.id:8001/document_classifier',
        //         dataType: "JSON",
        //         data: {
        //             key: key,
        //             image: image,
        //             return_segmented: false,
        //             return_photo: false,
        //             return_signature_photo: false
        //         },
        //         success: function(res) {
        //             console.log(res);
        //             var data = res.data;
        //             $('[id="no_ktp"]').val(data.KTP.value);

        //             // swal({
        //             //     title: "Data Berhasil Diubah",
        //             //     // text: "Terimakasih",
        //             //     type: "success"
        //             // }, function() {
        //             //     $('[name="id_satuan"]').val("");
        //             //     $('[name="satuan"]').val("");
        //             //     $('#modal_tambah_satuan').modal('hide');
        //             //     tampil_data_satuan();
        //             // });

        //         }
        //     });
        // }


        function readFile() {

            var file = $(this).get(0).files;
            var reader = new FileReader();
            reader.readAsDataURL(file[0]);
            reader.addEventListener("load", function(e) {
             document.getElementById("b64").value = e.target.result.substr(23);
               // var image = e.target.result;

                // if (this.files && this.files[0]) {

                //     var FR= new FileReader();

                //     FR.addEventListener("load", function(e) {
                //       document.getElementById("img").src       = e.target.result;
                //       document.getElementById("b64").value = e.target.result.substr(23);
                //   }); 
                //     FR.readAsDataURL( this.files[0] );
            });
        }

        document.getElementById("inp").addEventListener("change", readFile);

    </script>
    <script>
        $(function() {
            $('#only-number').on('keydown', '#number', function(e) {
                -1 !== $
                .inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/
                .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey) ||
                35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey || 48 > e.keyCode || 57 < e.keyCode) &&
                (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
            });
        })
    </script>