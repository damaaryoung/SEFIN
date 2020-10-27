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

        /*fileinput*/
        .upload-btn-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .btn_file {
            border: 2px solid gray;
            color: gray;
            background-color: white;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }
        @media only screen and (max-width: 769px) {
            .upload-btn-wrapper input[type=file] {
                font-size: 100px;
                position: absolute;
                left: 0;
                top: 0;
                opacity: 0;
            }
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
                                <button type="submit" id="check" class="btn btn-info btn-flat float-right check">Cek...</button>
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
                                <div class="upload-btn-wrapper">
                                    <button class="btn_file"><i class="fa fa-camera"></i></button>
                                    <input type="file" name="inp1" id="inp1" accept="image/*" capture />
                                </div>
                                <textarea id="b64" hidden></textarea>
                                <button type="button" id="take" onclick="take_snapshot()" class="btn btn-success" style="width: 256px;margin-left: 12px;">Cek</button>
                                <img hidden id="img" height="150">
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
                                                <select name="jenis_kelamin_deb" id="jenis_kelamin_deb" class="form-control" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <option id="L_deb" value="L">LAKI-LAKI</option>
                                                    <option id="P_deb" value="P">PEREMPUAN</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Status Pernikahan<span class="required_notification">*</span></label>
                                                <select name="status_nikah" id="status_nikah" class="form-control" style="width: 100%;" onchange="showDiv()">
                                                    <option value="">--Pilih--</option>
                                                    <option id="single" value="Single">Single</option>
                                                    <option id="menikah" value="Menikah">Menikah</option>
                                                    <option id="janda_duda" value="Janda/Duda">Janda/Duda</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col-md-5">
                                                <label>Tempat Lahir<span class="required_notification">*</span></label>
                                                <input type="text" id="tempat_lahir" name="tempat_lahir" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                            </div>
                                            <div class="form-group col-md-5">
                                                <label for="exampleInputEmail1">Tanggal Lahir<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <input type="date" id="tgl_lahir_deb" onchange="changeBirthDate()" name="tgl_lahir_deb" class="form-control" data-date-format="d-m-Y"/>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Umur<span class="required_notification">*</span></label>
                                                <input type="text" id="umur" name="umur" class="form-control" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                            <input type="text" id="ibu_kandung" name="ibu_kandung" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Agama<span class="required_notification">*</span></label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option value="">--Pilih--</option>
                                                    <option id="islam" value="ISLAM">ISLAM</option>
                                                    <option id="katholik" value="KATHOLIK">KATHOLIK</option>
                                                    <option id="kristen" value="KRISTEN">KRISTEN</option>
                                                    <option id="hindu" value="HINDU">HINDU</option>
                                                    <option id="budha" value="BUDHA">BUDHA</option>
                                                    <option id="lain2_kepercayaan" value="LAIN2 KEPERCAYAAN">LAIN2 KEPERCAYAAN</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Pendidikan Terakhir<span class="required_notification">*</span></label>
                                                <select name="pendidikan_terakhir" id="pendidikan_terakhir" class="form-control select2 select2-danger" style="width: 100%;">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($pendidikan as $key) {?>
                                                        <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Tanggungan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="jumlah_tanggungan" maxlength="3" onkeypress="return hanyaAngka(event)">
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
                                <div class="form-group row" id="form_foto_ktp_pas">
                                    <p class="col-md-2 text-left control-label col-form-label">Foto KTP Pasangan :</p>
                                    <div class="col-md-6 input-group">
                                        <div class="upload-btn-wrapper">
                                            <button class="btn_file"><i class="fa fa-camera"></i></button>
                                            <input type="file" name="inp_ktp_pas" id="inp_ktp_pas" accept="image/*" capture />
                                        </div>
                                        <textarea id="b64_pas" hidden></textarea>
                                        <button type="button" onclick="take_snapshot_ktp_pas()" class="btn btn-success" style="width: 256px;margin-left: 12px;">Cek</button>
                                        <img hidden id="img" height="150">
                                    </div>
                                </div>
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
                                            <select id="jenis_kelamin_pas" name="jenis_kelamin_pas" id="jenis_kelamin_pas" class="form-control">
                                                <option value="">--Pilih--</option>
                                                <option id="L_pas" value="L">LAKI-LAKI</option>
                                                <option id="P_pas" value="P">PEREMPUAN</option>
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
                                    <div class="form-group row" id="form_foto_ktp_penjamin">
                                        <p class="col-md-2 text-left control-label col-form-label">Foto KTP Penjamin :</p>
                                        <div class="col-md-6 input-group">
                                            <div class="upload-btn-wrapper">
                                                <button class="btn_file"><i class="fa fa-camera"></i></button>
                                                <input type="file" name="inp_ktp_penjamin" id="inp_ktp_penjamin" accept="image/*" capture />
                                            </div>
                                            <textarea id="b64_penjamin" hidden></textarea>
                                            <button type="button" onclick="take_snapshot_ktp_penjamin()" class="btn btn-success" style="width: 256px;margin-left: 12px;">Cek</button>
                                            <img hidden id="img" height="150">
                                        </div>
                                    </div>
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

    <div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="load_data"></div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <form>
            <div class="modal-body">
                <section class="modal-title">
                  <div class="text-center">
                      <img src="<?= base_url(); ?>/assets/dist/img/warning.svg" class="rounded" alt="..." width="50%">
                  </div>
              </section>
                <section>
                    <h5 class="text-center"><strong>Oops...</strong></h5>
                    <p class="text-center" style="font-size: 0.9rem !important;font-family: 'montserrat';"><i>NIK belum terdaftar, silahkan Foto KTP Debitur & Input Credit Checking !</i></p>
                    <div class="form-group row">
                        <p class="col-md-8 text-right control-label col-form-label">Foto KTP Debitur :</p>
                        <div class="col-md-4 input-group">
                            <div class="upload-btn-wrapper">
                                <button class="btn_file"><i class="fa fa-camera"></i></button>
                                <input type="file" name="inp1" id="inp1modals" accept="image/*" capture />
                            </div>
                            <textarea id="b64modals" hidden></textarea>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" id="take" onclick="take_snapshot_modals()" class="btn btn-success" style="width: 256px;margin-left: 12px;">Cek</button>
                <img hidden id="img" height="150">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
    <!-- <script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script> -->
    <script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/compressor.js') ?>"></script>
    <!-- <script src="<?php echo base_url('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') ?>"></script> -->
    <?php $this->view('master/memorandum_so/add_credit_js.php'); ?>
    
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

    </script>
