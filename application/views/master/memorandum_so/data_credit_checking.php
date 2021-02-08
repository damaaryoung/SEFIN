<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<script type="text/javascript">
    $('#catatan_das').hide();
    $('#catatan_dsspv').hide();
    $('#form_pasangan_debitur').hide();
    $('#form_gambar_ktp_pasangan').hide();
    $('#form_gambar_buku_nikah').hide();
</script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pengajuan Sales Officer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengajuan Sales Officer</li>
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
                            <button class="btn btn-primary tambah" id="click-add-memorandum-so" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="table_so" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
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
                                            Nama Debitur
                                        </th>
                                        <th>
                                            Cabang
                                        </th>
                                        <th>
                                            Status DAS
                                        </th>
                                        <th>
                                            Status DS SPV
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_credit_checking" style="font-size: 12px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="lihat_detail" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pengajuan Sales Officer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengajuan Sales Officer</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 16px;">
                    <div id="form_detail" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="">
                        <div class="card mb-3" id="table">

                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_1" role="button">
                                <a class="text-light" aria-expanded="false" aria-controls="collapse_1">
                                    <b>CREDIT CHECKING</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_1">
                                <form id="form_fasilitas">
                                    <input type="hidden" name="id_fasilitas_pinjaman" value="">
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
                                                <select name="asal_data" id="select_asal_data" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" readonly>
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
                                                <input type="text" name="plafon" class="form-control uang">
                                            </div>
                                            <div class="form-group">
                                                <label>Tenor<span class="required_notification">*</span></label>
                                                <select name="tenor" id="tenor" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Pinjaman<span class="required_notification">*</span></label>
                                                <select name="jenis_pinjaman" id="select_jenis_pinjaman" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
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
                                </form>
                            </div>
                        </div>
                        <div class="card mb-3" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_2" role="button">
                                <a class="text-light" aria-expanded="false" aria-controls="collapse_1">
                                    <b>DATA CALON DEBITUR</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_2">
                                <form id="form_debitur">
                                    <input type="hidden" id="id_debitur" name="id_debitur" value="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No KTP<span class="required_notification">*</span></label>
                                                <input type="text" id="no_ktp" name="no_ktp" onkeyup="copy_NIK()" onkeypress="return hanyaAngka(event)" class="form-control" minlength="16" maxlength="16">
                                            </div>
                                            <div class="form-group">
                                                <label>NIK KTP di KK<span class="required_notification">*</span></label>
                                                <input type="text" id="no_ktp_kk" name="no_ktp_kk" onkeypress="return hanyaAngka(event)" class="form-control" minlength="16" maxlength="16">
                                            </div>
                                            <div class="form-group">
                                                <label>No Kartu Keluarga<span class="required_notification">*</span></label>
                                                <input type="text" name="no_kk" class="form-control" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                                <input type="text" name="nama_debitur" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>No NPWP</label>
                                                <input type="text" name="no_npwp" class="form-control" onkeypress="return hanyaAngka(event)" minlength="15" maxlength="15">
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
                                                    <select name="jenis_kelamin1" id="jenis_kelamin" class="form-control" onchange="showDiv()">
                                                        <option value="">-- Pilih Status Pernikahan --</option>
                                                        <option id="L" value="L">LAKI-LAKI</option>
                                                        <option id="P" value="P">PEREMPUAN</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Status Pernikahan<span class="required_notification">*</span></label>
                                                    <select name="status_nikah" id="status_nikah" class="form-control" onchange="showDiv()">
                                                        <option value="">--Plih--</option>
                                                        <option id="status_menikah" value="Menikah">Menikah</option>
                                                        <option id="status_single" value="Single">Single</option>
                                                        <option id="status_janda_duda" value="Janda/Duda">Janda/Duda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <div class="form-group col-md-5">
                                                    <label>Tempat Lahir<span class="required_notification">*</span></label>
                                                    <input type="text" name="tempat_lahir" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                                </div>
                                                <div class="form-group col-md-5">
                                                    <label for="exampleInputEmail1">Tanggal Lahir<span class="required_notification">*</span></label>
                                                    <div class="input-group">
                                                        <input type="date" id="tgl_lahir_deb" onchange="changeBirthDate()" name="tgl_lahir_deb" class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <label>Umur<span class="required_notification">*</span></label>
                                                    <input type="text" id="umur" name="umur" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ibu Kandung<span class="required_notification">*</span></label>
                                                <input type="text" name="ibu_kandung" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>Agama<span class="required_notification">*</span></label>
                                                    <select name="agama_deb" id="select_agama" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" readonly>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Pendidikan Terakhir<span class="required_notification">*</span></label>
                                                    <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                                    <option value="">--Pilih--</option>
                                                    <?php foreach ($pendidikan as $key) {?>
                                                        <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah Tanggungan<span class="required_notification">*</span></label>
                                                <input type="text" class="form-control" name="jumlah_tanggungan"  id="jumlah_tanggungan" maxlength="3" onkeypress="return hanyaAngka(event)">
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>No Telpon 1<span class="required_notification">*</span></label>
                                                    <input type="text" name="no_telp" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="13">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>No Telpon 2</label>
                                                    <input type="text" name="no_hp" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="13">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" id="email" name="email" class="form-control">
                                            </div>
                                            <div class=" form-group">
                                                <label>Alamat Korespondensi<span class="required_notification">*</span></label>
                                                <select name="alamat_surat" class="form-control">
                                                    <option id="alamat_kor_ktp" value="ALAMAT KTP">ALAMAT KTP</option>
                                                    <option id="alamat_kor_domisili" value="ALAMAT DOMISILI">ALAMAT DOMISILI</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6" style="margin-top: 24px">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>Alamat <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                                        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="alamat_ktp">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label>RT<span class="required_notification">*</span></label>
                                                        <input type="text" class="form-control" name="rt_ktp" onkeypress="return hanyaAngka(event)">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label>RW<span class="required_notification">*</span></label>
                                                        <input type="text" class="form-control" name="rw_ktp" onkeypress="return hanyaAngka(event)">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="select_provinsi_ktp">
                                                    <label>Provinsi<span class="required_notification">*</span></label>
                                                    <select name="provinsi_ktp" id="provinsi_ktp" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                    </select>
                                                </div>
                                                <div class=" form-row">
                                                    <div class="form-group col-md-6" id="select_kabupaten_ktp">
                                                        <label>Kabupaten<span class="required_notification">*</span></label>
                                                        <select name="kabupaten_ktp" id="kabupaten_ktp" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                        </select>
                                                    </div>
                                                    <div class=" form-group col-md-6" id="select_kecamatan_ktp">
                                                        <label>Kecamatan<span class="required_notification">*</span></label>
                                                        <select name="kecamatan_ktp" id="kecamatan_ktp" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class=" form-row">
                                                    <div class="form-group col-md-6" id="select_kelurahan_ktp">
                                                        <label>Kelurahan<span class="required_notification">*</span></label>
                                                        <select name="kelurahan_ktp" id="kelurahan_ktp" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger"">
                                                        </select>
                                                    </div>
                                                    <div class=" form-group col-md-6">
                                                            <label>Kode POS<span class="required_notification">*</span></label>
                                                            <input type="text" name="kode_pos_ktp" id="kode_pos_ktp" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6" style="margin-top: 24px">
                                                <div class="form-row">
                                                    <div class="form-group col-md-8">
                                                        <label>Alamat <small><i>(Domisili)</i></small><span class="required_notification">*</span></label>
                                                        <input type="text" class="form-control" onkeyup="this.value = this.value.toUpperCase()" name="alamat_domisili">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label>RT<span class="required_notification">*</span></label>
                                                        <input type="text" class="form-control" name="rt_domisili" onkeypress="return hanyaAngka(event)">
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label>RW<span class="required_notification">*</span></label>
                                                        <input type="text" class="form-control" name="rw_domisili" onkeypress="return hanyaAngka(event)">
                                                    </div>
                                                </div>
                                                <div class="form-group" id="select_provinsi_domisili">
                                                    <label>Provinsi<span class="required_notification">*</span></label>
                                                    <select name="provinsi_domisili" id="provinsi_domisili" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" id="select_kabupaten_domisili">
                                                            <label>Kabupaten<span class="required_notification">*</span></label>
                                                            <select name="kabupaten_domisili" id="kabupaten_domisili" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group" id="select_kecamatan_domisili">
                                                            <label>Kecamatan<span class="required_notification">*</span></label>
                                                            <select name="kecamatan_domisili" id="kecamatan_domisili" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group" id="select_kelurahan_domisili">
                                                            <label>Kelurahan<span class="required_notification">*</span></label>
                                                            <select name="kelurahan_domisili" id="kelurahan_domisili" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger">
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Kode POS<span class="required_notification">*</span></label>
                                                            <input type="text" id="kode_pos_domisili" name="kode_pos_domisili" class="form-control">
                                                        </div>
                                                    </div>
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

                        <div class="card mb-3" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_12" role="button">
                                <a class="text-light" aria-expanded="false" aria-controls="collapse_1">
                                    <b>DATA PASANGAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_12">
                                <form id="form_pasangan">
                                    <input type="hidden" id="id_pasangan" name="id_pasangan" value="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small></label>
                                                <input type="text" name="nama_lengkap_pas" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ibu Kandung</label>
                                                <input type="text" name="nama_ibu_kandung_pas" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Jenis Kelamin</label>
                                                <select id="jenis_kelamin_pas" name="jenis_kelamin_pas" class="form-control ">
                                                    <option value="">Pilih</option>
                                                    <option id="L_pas" value="L">LAKI-LAKI</option>
                                                    <option id="P_pas" value="P">PEREMPUAN</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat<small><i>(Sesuai KTP)</i></small></label>
                                                <textarea name="alamat_ktp_pas" class="form-control " rows="5" cols="40" onkeyup="this.value = this.value.toUpperCase()"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>No KTP</label>
                                                    <input type="text" id="no_ktp_pas" name="no_ktp_pas" class="form-control" onkeypress="return hanyaAngka(event)" onkeyup="copy_NIK_pas()" minlength="16" maxlength="16">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>NIK KTP di KK</label>
                                                    <input type="text" id="no_ktp_kk_pas" name="no_ktp_kk_pas" class="form-control" onkeypress="return hanyaAngka(event)" minlength="16" maxlength="16">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>NO NPWP</label>
                                                <input type="text" name="no_npwp_pas" class="form-control" onkeypress="return hanyaAngka(event)" minlength="15" maxlength="15">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label>Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir_pas" onkeyup="this.value = this.value.toUpperCase()" class="form-control">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Tanggal Lahir</label>
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
                                            <div class="form-group">
                                                <label>No Telpon</label>
                                                <input type="text" name="no_telp_pas" class="form-control" onkeypress="return hanyaAngka(event)" maxlength="13">
                                            </div>
                                        </div>
                                    </div>
                                    <div style="float: right;">
                                        <button type="submit" class="btn btn-success far fa-save submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card mb-3" id="formku">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_4" role="button">
                                <a class="text-light" aria-expanded="false" aria-controls="collapse_3">
                                    <b>DATA PENJAMIN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_4">
                                <form id="form_penjamin">
                                    <input type="hidden" id="id_trans_so_pen" name="id_trans_so_pen">
                                    <div class="box-body table-responsive no-padding">
                                        <button type="button" class="btn btn-primary" id="tambah_penjamin" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                                        <table id="example2" class="table table-bordered table-hover" style="min-width: 2300px">
                                            <thead style="font-size: 12px">
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
                                            <tbody id="data_penjamin" style="font-size: 12px">
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card mb-3" id="table">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_6" role="button">
                                <a class="text-light" aria-expanded="false" aria-controls="collapse_5">
                                    <b>LAMPIRAN</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_6">
                                <div class="row">
                                    <div class="col-md-4" id="photo_deb">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Photo Debitur</label>
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_photo_deb" data-id="65"><i class="fa fa-pencil-alt"></i></button>
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
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_ktp" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <div class="col-md-6">
                                                    <!--   <input type="file" name="ktp_deb" multiple value="kjefiej"> -->
                                                    <div class="well" id="gambar_ktp">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="npwp">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">NPWP</label>
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_npwp" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <div class="col-md-6">
                                                    <!--   <input type="file" name="ktp_deb" multiple value="kjefiej"> -->
                                                    <div class="well" id="gambar_npwp">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="kk">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Kartu Keluarga Debitur</label>
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_kk " data-id="65"><i class="fa fa-pencil-alt"></i></button>
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
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_sertifikat " data-id="65"><i class="fa fa-pencil-alt"></i></button>
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
                                            <label for="exampleInput1" class="bmd-label-floating">PBB</label>
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_pbb" data-id="65"><i class="fa fa-pencil-alt"></i></button>
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
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_imb" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <div class="col-md-6">
                                                    <div class="well" id="gambar_imb">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="form_gambar_photo_pasangan">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Photo Pasangan</label>
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_photo_pasangan" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <div class="col-md-6">
                                                    <div class="well" id="gambar_photo_pasangan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="form_gambar_ktp_pasangan">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">KTP Pasangan</label>
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_ktp_pasangan" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <div class="col-md-6">
                                                    <div class="well" id="gambar_ktp_pasangan">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4" id="form_gambar_buku_nikah">
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
                                    <div class="col-md-4" id="foto_agunan_rumah">
                                        <div class="form-group">
                                            <label for="exampleInput1" class="bmd-label-floating">Foto Agunan Rumah</label>
                                            <button class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan_rumah" data-id="65"><i class="fa fa-pencil-alt"></i></button>
                                            <div class="form-group form-file-upload form-file-multiple">
                                                <div class="col-md-6">
                                                    <div class="well" id="gambar_rumah_agunan">
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
                            <textarea name="notes_so" id="notes_so" style="width: 100%" rows="5"></textarea>
                        </div>
                        <div class="form-group" style="margin-top: 20px;" id="catatan_das">
                            <label style="font-style: italic; color: #383a3a;">Catatan DAS</label>
                            <textarea name="catatan_das" style="width: 100%" rows="5" readonly=""></textarea>
                        </div>
                        <div class="form-group" style="margin-top: 20px;" id="catatan_dsspv">
                            <label style="font-style: italic; color: #383a3a;">Catatan DS SPV</label>
                            <textarea name="catatan_dsspv" style="width: 100%" rows="5" readonly=""></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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

<form id="form_edit_photo_deb">
    <input type="hidden" id="id_debitur_photo" name="id_debitur_photo">
    <div class="modal fade in" id="modal_edit_photo_deb" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Ubah Lampiran Photo Debitur</label>
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

<form id="form_edit_npwp">
    <input type="hidden" id="id_debitur_npwp" name="id_debitur_npwp">
    <div class="modal fade in" id="modal_edit_npwp" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Ubah Lampiran NPWP</label>
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
                        <label for="exampleInputFile">Ubah Lampiran Kartu Keluarga Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_kk_deb1" class="form-control" style="height: 45px">
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

<form id="form_edit_ktp_pas">
    <input type="hidden" id="id_debitur_ktp_pasangan" name="id_debitur_ktp_pasangan">
    <div class="modal fade in" id="modal_edit_ktp_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Ubah KTP Pasangan</label>
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

<form id="form_edit_photo_pas">
    <input type="hidden" id="id_debitur_photo_pasangan" name="id_debitur_photo_pasangan">
    <div class="modal fade in" id="modal_edit_photo_pasangan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Ubah KTP Pasangan</label>
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

<form id="form_edit_buku_nikah_pas">
    <input type="hidden" id="id_debitur_buku_nikah" name="id_debitur_buku_nikah">
    <div class="modal fade in" id="modal_edit_buku_nikah" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label for="exampleInputFile">Ubah Lampiran Buku Nikah</label>
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
                        <label for="exampleInputFile">Ubah Lampiran Agunan Rumah</label>
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

<form id="form_edit_penjamin">
    <div class="modal fade in" id="modal_penjamin" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Penjamin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir<span class="required_notification">*</span></label>
                                <input type="text" name="tempat_lahir_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                            </div>
                        </div>
                        <div class="col-md-6">
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
                        <textarea id="alamat_ktp_pas" name="alamat_ktp_pen" class="form-control" onkeyup="this.value = this.value.toUpperCase()" style="height: 125px;"></textarea>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div id="ktp_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">KTP Penjamin</label>
                                    <button type="button" id="lamp-ktp-pen" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_ktp_pen" data-id="65"><i class="fa fa-paperclip"></i></button>
                                    <i id="check_ktp_penjamin" class="fa fa-check-circle" style="color: #ffc107"></i>
                                </div>
                            </div>
                            <div id="kk_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">KK Penjamin</label>
                                    <button type="button" id="" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_kk_pen" data-id="65"><i class="fa fa-paperclip"></i></button>
                                    <i id="check_kk_penjamin" class="fa fa-check-circle" style="color: #ffc107"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="ktp_pas_pen">
                                <div class="form-group">
                                    <label for="exampleInput1" class="bmd-label-floating">KTP Pasangan Penjamin</label>
                                    <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_ktp_pasangan_pen" data-id="65"><i class="fa fa-paperclip"></i></button>
                                    <i id="check_ktp_pas_penjamin" class="fa fa-check-circle" style="color: #ffc107"></i>
                                </div>
                            </div>
                            <!--                             <div class="col-md-6" id="bukunikah_pen"> -->
                            <div class="form-group">
                                <label for="exampleInput1" class="bmd-label-floating">Buku Nikah Penjamin</label>
                                <button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#modal_edit_buku_nikah_pen" data-id="65"><i class="fa fa-paperclip"></i></button>
                                <i id="check_buku_nikah_penjamin" class="fa fa-check-circle" style="color: #ffc107"></i>
                            </div>
                            <!-- </div> -->
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

<div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="load_data"></div>
    </div>
</div>

<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

<script type="text/javascript">
    $('.uang').mask('0.000.000.000', {
        reverse: true
    });

    $(function() {
        $('.select2').select2()
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });

    function copy_NIK() {
        document.getElementById('no_ktp_kk').value = document.getElementById('no_ktp').value;
    }

    function copy_NIK_pas() {
        document.getElementById('no_ktp_kk_pas').value = document.getElementById('no_ktp_pas').value;
    }

    $("#check_ktp_penjamin").hide();
    $("#check_kk_penjamin").hide();
    $("#check_ktp_pas_penjamin").hide();
    $("#check_buku_nikah_penjamin").hide();


    hide_all = function() {
        $('#lihat_data_credit').hide();
        $('#lihat_detail').hide();
    }
    hide_all();
    $('#lihat_data_credit').show();

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
    })

    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    $('#click-add-memorandum-so').on('click', function(e) {
        e.preventDefault();
        NProgress.start();
        $.ajax({
                url: '<?php echo base_url('index.php/Master/add_memorandum_so') ?>',
                dataType: 'html'
            })
            .done(function(response) {
                $('#main-content').html(response);
                NProgress.done();
            })
            .fail(function(jqXHR) {
                $('#main-content').load('<?php echo base_url('Rusak') ?>');
                NProgress.done();
            });
    });
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
    tampil_data_so();

    function tampil_data_so() {
        $('#table_so').DataTable({

            "processing": true,
            "serverSide": true,
            'destroy': true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('So_controller/get_data_so') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        })
    };

    // LOAD DATA
    $(function() {

        get_credit_checking = function(opts, id) {
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/mcc';
            return $.ajax({
                url: url,
                data: opts,
                dataSrc: "",
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
        }

        load_data = function() {
            get_credit_checking()
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
                        $('#data_credit_checking').html(tr);

                        return;
                    }
                    $.each(data, function(index, item) {
                        no++;

                        var status = item.hm.status;
                        if (status == 'complete') {
                            var disabled = "disabled";
                        } else {
                            var disabled = "";
                        }

                        var tr = [
                            '<tr>',
                            '<td>' + no + '</td>',
                            '<td>' + item.tgl_transaksi + '</td>',
                            '<td>' + item.nomor_so + '</td>',
                            '<td>' + item.nama_so + '</td>',
                            '<td>' + item.asal_data + '</td>',
                            '<td>' + item.nama_calon_debt + '</td>',
                            '<td>' + item.das.status + '</td>',
                            '<td>' + item.hm.status + '</td>',
                            '<td style="width: 108px;">',
                            '<form method="post" target="_blank" action="<?php echo base_url() . 'index.php/report/memo_so' ?>"> <button type="button" ' + disabled + ' class="btn btn-info btn-sm edit"   data-target="#update" data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button>',
                            '<button type="button" class="btn btn-warning btn-sm edit" onclick="click_detail()" data-target="#update" data="' + item.id + '"><i style="color: #fff;" class="fas fa-eye"></i></button>',
                            '<input type="hidden" name ="id" value="' + item.id + '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>',
                            '</td>',
                            '</tr>'
                        ].join('\n');
                        html.push(tr);
                    });
                    $('#data_credit_checking').html(html);

                    $('#example2').DataTable({
                        "pageLength": 10,
                        "order": [
                            [0, "asc"]
                        ],
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
                    $('#data_credit_checking').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                });
        }
        $('#data_credit_checking').show();
        // load_data();
    });
    //=========================================================================================================

    //DETAIL DATA
    $(function() {
        function rubah(angka) {
            var reverse = angka.toString().split('').reverse().join(''),
                ribuan = reverse.match(/\d{1,3}/g);
            ribuan = ribuan.join('.').split('').reverse().join('');
            return ribuan;
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

        get_data_penjamin = function(opts, id_penjamin) {
            var url = '<?php echo config_item('api_url') ?>api/penjamin/' + id_penjamin;
            var data = opts;
            return $.ajax({
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
        }


        $('#provinsi_ktp').change(function() {
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
                    $('#form_detail  select[id=kabupaten_ktp]').html(select1 + select);
                }
            });
        });

        $('#kabupaten_ktp').change(function() {
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
                    $('#form_detail select[id=kecamatan_ktp]').html(select1 + select);
                }
            });
        });

        $('#kecamatan_ktp').change(function() {
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
                    $('#form_detail select[id=kelurahan_ktp]').html(select1 + select);
                }
            });
        });

        $('#kelurahan_ktp').change(function() {
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

        $('#provinsi_domisili').change(function() {
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
                    $('#form_detail  select[id=kabupaten_domisili]').html(select1 + select);
                }
            });
        });

        $('#kabupaten_domisili').change(function() {
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
                    $('#form_detail select[id=kecamatan_domisili]').html(select1 + select);
                }
            });
        });

        $('#kecamatan_domisili').change(function() {
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
                    $('#form_detail select[id=kelurahan_domisili]').html(select1 + select);
                }
            });
        });

        $('#kelurahan_domisili').change(function() {
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

        // Click ubah
        $('#data_credit_checking').on('click', '.edit', function(e) {
            e.preventDefault();
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
            var id = $(this).attr('data');

            get_detail_credit_checking = function(opts, id) {
                var url = '<?php echo $this->config->item('api_url'); ?>api/master/mcc/';

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

            get_detail_credit_checking({}, id)
                .done(function(response) {
                    var data = response.data;
                    var id_debitur = data.calon_debitur.id;
                    var id_fasilitas = data.fasilitas_pinjaman.id;
                    var id_pasangan = data.pasangan.id
                    console.log(data);

                    $('#form_detail input[type=hidden][name=id]').val(data.id);
                    $('#form_modal_tambah_penjamin input[type=hidden][name=add_id_so_penjamin]').val(data.id);
                    $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val(data.id);
                    $('#form_detail input[type=hidden][name=id_fasilitas_pinjaman]').val(data.id);
                    $('#form_detail input[type=hidden][name=id_debitur]').val(data.calon_debitur.id);
                    $('#form_edit_photo_deb input[type=hidden][name=id_debitur_photo]').val(data.calon_debitur.id);
                    $('#form_edit_ktp_deb input[type=hidden][name=id_debitur_ktp]').val(data.calon_debitur.id);
                    $('#form_edit_npwp input[type=hidden][name=id_debitur_npwp]').val(data.calon_debitur.id);
                    $('#form_edit_kk_deb input[type=hidden][name=id_debitur_kk]').val(data.calon_debitur.id);
                    $('#form_edit_sertifikat_deb input[type=hidden][name=id_debitur_sertifikat]').val(data.calon_debitur.id);
                    $('#form_edit_imb_deb input[type=hidden][name=id_debitur_imb]').val(data.calon_debitur.id);
                    $('#form_edit_pbb_deb input[type=hidden][name=id_debitur_pbb]').val(data.calon_debitur.id);
                    $('#form_edit_agunan_rumah input[type=hidden][name=id_debitur_agunan_rumah]').val(data.calon_debitur.id);
                    $('#form_detail input[type=hidden][id=id_pasangan]').val(data.pasangan.id);
                    $('#form_edit_photo_pas input[type=hidden][name=id_debitur_photo_pasangan]').val(data.pasangan.id);
                    $('#form_edit_ktp_pas input[type=hidden][name=id_debitur_ktp_pasangan]').val(data.pasangan.id);
                    $('#form_edit_buku_nikah_pas input[type=hidden][name=id_debitur_buku_nikah]').val(data.pasangan.id);
                    $('#form_detail input[name=nomor_so]').val(data.nomor_so);
                    $('#form_detail input[name=nama_so]').val(data.nama_so);
                    $('#form_detail textarea[name=notes_so]').val(data.notes_so);
                    if (data.catatan_DAS !== null) {
                        $('#catatan_das').show()
                        $('#form_detail textarea[name=catatan_das]').val(data.catatan_DAS);
                    }

                    if (data.catatan_DSSPV !== null) {
                        $('#catatan_dsspv').show()
                        $('#form_detail textarea[name=catatan_dsspv]').val(data.catatan_DSSPV);
                    }

                    var htmlpenjamin = [];
                    var id_penjamin = {};
                    $.each(data.penjamin, function(index, item) {
                        console.log(data.penjamin)
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
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp + '" /> </a> </td>',
                            '<td style="width:200px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp_pasangan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp_pasangan + '" /> </a> </td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px"style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_kk + '" /> </a> </td>',
                            '<td style="width:180px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_buku_nikah + '" /> </a> </td>',


                            '</tr>'
                        ].join('\n');
                        htmlpenjamin.push(tr);
                    })
                    $('#data_penjamin').html(htmlpenjamin);

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
                            if (data.asal_data.id == '' + data.asal_data.id + '') {
                                document.getElementById('' + data.asal_data.id + '').selected = "true";
                            }
                        })

                    $('#form_detail input[name=nama_marketing]').val(data.nama_marketing);

                    load_fasilitas = function() {
                        get_data_fasilitas({}, id_fasilitas)
                            .done(function(response) {
                                var data_fasilitas = response.data;
                                //calon debitur
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
                                if (data_fasilitas.jenis_pinjaman = "INVESTASI") {
                                    document.getElementById("investasi").selected = "true";
                                }
                                $('#form_detail input[name=jenis_pinjaman]').val(data_fasilitas.jenis_pinjaman);
                                $('#form_detail textarea[name=tujuan_pinjaman]').val(data_fasilitas.tujuan_pinjaman);
                            })
                    }

                    load_debitur = function() {
                        get_data_debitur({}, id_debitur)
                            .done(function(response) {
                                var data_debitur = response.data;
                                console.log(data_debitur);

                                //calon debitur
                                $('#form_detail input[name=nama_debitur]').val(data_debitur.nama_lengkap);
                                $('#form_detail input[name=gelar_keagamaan]').val(data_debitur.gelar_keagamaan);
                                $('#form_detail input[name=gelar_pendidikan]').val(data_debitur.gelar_pendidikan);
                                if (data_debitur.jenis_kelamin == "L") {
                                    document.getElementById("L").selected = "true";
                                } else {
                                    document.getElementById("P").selected = "true";
                                }

                                if (data_debitur.status_nikah == "Menikah") {
                                    document.getElementById("status_menikah").selected = "true";
                                } else
                                if (data_debitur.status_nikah == "Single") {
                                    document.getElementById("status_single").selected = "true";
                                } else
                                if (data_debitur.status_nikah = "Janda/Duda") {
                                    document.getElementById("status_janda_duda").selected = "true";
                                }

                                $('#form_detail input[name=ibu_kandung]').val(data_debitur.ibu_kandung);
                                $('#form_detail input[name=no_ktp]').val(data_debitur.no_ktp);
                                $('#form_detail input[name=no_ktp_kk]').val(data_debitur.no_ktp_kk);
                                $('#form_detail input[name=no_kk]').val(data_debitur.no_kk);
                                $('#form_detail input[name=no_npwp]').val(data_debitur.no_npwp);
                                $('#form_detail input[name=tempat_lahir]').val(data_debitur.tempat_lahir);
                                $('#form_detail input[name=tgl_lahir_deb]').val(data_debitur.tgl_lahir);
                                $('#form_detail input[name=umur]').val(data_debitur.umur);

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

                                $('#form_detail input[name=alamat_ktp]').val(data_debitur.alamat_ktp.alamat_singkat);
                                $('#form_detail input[name=rt_ktp]').val(data_debitur.alamat_ktp.rt);
                                $('#form_detail input[name=rw_ktp]').val(data_debitur.alamat_ktp.rw);

                                get_provinsi()
                                    .done(function(res) {
                                        var select = [];
                                        $.each(res.data, function(i, e) {
                                            var option = [
                                                '<option id="' + e.id + 'ktp" value="' + e.id + '">' + e.nama + '</option>'
                                            ].join('\n');
                                            select.push(option);
                                        });
                                        $('#form_detail  select[id=provinsi_ktp]').html(select);
                                        if (data_debitur.alamat_ktp.provinsi.id == '' + data_debitur.alamat_ktp.provinsi.id + '') {
                                            document.getElementById('' + data_debitur.alamat_ktp.provinsi.id + 'ktp').selected = "true";
                                        }
                                    })

                                var select_kabupaten = [];
                                var option_kabupaten = [
                                    '<option value="' + data_debitur.alamat_ktp.kabupaten.id + '">' + data_debitur.alamat_ktp.kabupaten.nama + '</option>'
                                ].join('\n');
                                select_kabupaten.push(option_kabupaten);
                                $('#form_detail  select[id=kabupaten_ktp]').html(select_kabupaten);

                                var select_kecamatan = [];
                                var option_kecamatan = [
                                    '<option value="' + data_debitur.alamat_ktp.kecamatan.id + '">' + data_debitur.alamat_ktp.kecamatan.nama + '</option>'
                                ].join('\n');
                                select_kecamatan.push(option_kecamatan);
                                $('#form_detail select[id=kecamatan_ktp]').html(select_kecamatan);

                                var select_kelurahan = [];
                                var option_kelurahan = [
                                    '<option value="' + data_debitur.alamat_ktp.kelurahan.id + '">' + data_debitur.alamat_ktp.kelurahan.nama + '</option>'
                                ].join('\n');
                                select_kelurahan.push(option_kelurahan);
                                $('#form_detail select[id=kelurahan_ktp]').html(select_kelurahan);
                                $('#form_detail input[name=kode_pos_ktp]').val(data_debitur.alamat_ktp.kode_pos);
                                $('#form_detail input[name=alamat_domisili]').val(data_debitur.alamat_domisili.alamat_singkat);
                                $('#form_detail input[name=rt_domisili]').val(data_debitur.alamat_domisili.rt);
                                $('#form_detail input[name=rw_domisili]').val(data_debitur.alamat_domisili.rw);

                                get_provinsi()
                                    .done(function(res) {
                                        var select = [];
                                        $.each(res.data, function(i, e) {
                                            var option = [
                                                '<option id="' + e.id + 'dom" value="' + e.id + '">' + e.nama + '</option>'
                                            ].join('\n');
                                            select.push(option);
                                        });
                                        $('#form_detail  select[id=provinsi_domisili]').html(select);
                                        if (data_debitur.alamat_domisili.provinsi.id == '' + data_debitur.alamat_domisili.provinsi.id + '') {
                                            document.getElementById('' + data_debitur.alamat_domisili.provinsi.id + 'dom').selected = "true";
                                        }
                                    })

                                // var select_provinsi_domisili = [];
                                // var option_provinsi_domisili = [
                                //     '<option value="' + data_debitur.alamat_domisili.provinsi.id + '">' + data_debitur.alamat_domisili.provinsi.nama + '</option>'
                                // ].join('\n');
                                // select_provinsi_domisili.push(option_provinsi_domisili);
                                // $('#form_detail  select[id=provinsi_domisili]').html(select_provinsi_domisili);

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
                                    '<option value="Tidak Sekolah/SD">Tidak Sekolah/SD</option>',
                                    '<option value="SMP">SMP</option>',
                                    '<option value="SMA">SMA</option>',
                                    '<option value="D3/S1">D3/S1</option>',
                                    '<option value="S2/S3">S2/S3</option>'
                                ].join('\n');
                                select_pendidikan_terakhir.push(option_pendidikan_terakhir);
                                $('#form_detail select[id=pendidikan_terakhir]').html(select_pendidikan_terakhir);
                                $('#form_detail input[name=jumlah_tanggungan]').val(data_debitur.jumlah_tanggungan);
                                $('#form_detail input[name=no_telp]').val(data_debitur.no_telp);
                                $('#form_detail input[name=no_hp]').val(data_debitur.no_hp);
                                $('#form_detail input[name=email]').val(data_debitur.email);

                                if (data_debitur.alamat_surat == "ALAMAT KTP") {
                                    document.getElementById("alamat_kor_ktp").selected = "true";
                                } else {
                                    document.getElementById("alamat_kor_domisili").selected = "true";
                                }

                                if (data_debitur.lampiran.lamp_ktp == null) {
                                    var a = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html.push(a);
                                    $('#gambar_ktp').html(html);
                                } else {
                                    var a = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" /> </a>'
                                    ].join('\n');
                                    html.push(a);
                                    $('#gambar_ktp').html(html);
                                }

                                if (data_debitur.lampiran.foto_cadeb == null) {
                                    var b = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html1.push(b);
                                    $('#gambar_photo').html(html1);
                                } else {
                                    var b = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_cadeb + '" data-lightbox="example-set" data-title="Lampiran Photo Debitur"><img id="img_photo_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_cadeb + '" /> </a>'
                                    ].join('\n');
                                    html1.push(b);
                                    $('#gambar_photo').html(html1);
                                }

                                if (data_debitur.lampiran.lamp_npwp== null) {
                                    var c = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html2.push(c);
                                    $('#gambar_npwp').html(html2);
                                } else {
                                    var c = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_npwp + '" data-lightbox="example-set" data-title="Lampiran NPWP"><img id="img_npwp" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_npwp + '" /> </a>'
                                    ].join('\n');
                                    html2.push(c);
                                    $('#gambar_npwp').html(html2);
                                }

                                if (data_debitur.lampiran.lamp_kk == null) {
                                    var d = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html3.push(d);
                                    $('#gambar_kk').html(html3);
                                } else {
                                    var d = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KK Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" /> </a>'
                                    ].join('\n');
                                    html3.push(d);
                                    $('#gambar_kk').html(html3);
                                }

                                if (data_debitur.lampiran.lamp_sertifikat == null) {
                                    var e = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html4.push(e);
                                    $('#gambar_sertifikat').html(html4);
                                } else {
                                    var e = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Sertifkat Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
                                    ].join('\n');
                                    html4.push(e);
                                    $('#gambar_sertifikat').html(html4);
                                }

                                if (data_debitur.lampiran.lamp_sttp_pbb == null) {
                                    var f = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html5.push(f);
                                    $('#gambar_pbb').html(html5);
                                } else {
                                    var f = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran PBB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
                                    ].join('\n');
                                    html5.push(f);
                                    $('#gambar_pbb').html(html5);
                                }

                                if (data_debitur.lampiran.lamp_imb == null) {
                                    var g = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html6.push(g);
                                    $('#gambar_imb').html(html6);
                                } else {
                                    var g = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" /> </a>'
                                    ].join('\n');
                                    html6.push(g);
                                    $('#gambar_imb').html(html6);
                                }

                                if (data_debitur.lampiran.foto_agunan_rumah == null) {
                                    var h = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html7.push(h);
                                    $('#gambar_rumah_agunan').html(html7);
                                } else {
                                    var h = [
                                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" /> </a>'
                                    ].join('\n');
                                    html7.push(h);
                                    $('#gambar_rumah_agunan').html(html7);
                                }

                            })
                    }
                    if (data.pasangan.id !== null) {
                        $('#form_pasangan_debitur').show();
                        $('#form_gambar_photo_pasangan').show();
                        $('#form_gambar_ktp_pasangan').show();
                        $('#form_gambar_buku_nikah').show();
                        load_pasangan = function() {
                            get_data_pasangan({}, id_pasangan)
                                .done(function(response) {
                                    var data_pasangan = response.data;
                                    $('#form_detail input[name=nama_lengkap_pas]').val(data_pasangan.nama_lengkap);
                                    $('#form_detail input[name=nama_ibu_kandung_pas]').val(data_pasangan.nama_ibu_kandung);

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

                                    if (data_pasangan.lampiran.lamp_ktp == null) {
                                        var i = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html8.push(i);
                                        $('#gambar_ktp_pasangan').html(html8);
                                    } else {
                                        var i = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Pasangan"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                                        ].join('\n');
                                        html8.push(i);
                                        $('#gambar_ktp_pasangan').html(html8);
                                    }

                                    if (data_pasangan.lampiran.foto_pasangan == null) {
                                    var j = [
                                        '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                    ].join('\n');
                                    html9.push(j);
                                    $('#gambar_photo_pasangan').html(html9);
                                    } else {
                                        var j = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.foto_pasangan + '" data-lightbox="example-set" data-title="Lampiran Photo Pasangan"><img id="img_photo_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.foto_pasangan + '" /> </a>'
                                        ].join('\n');
                                        html9.push(j);
                                        $('#gambar_photo_pasangan').html(html9);
                                    }

                                    if (data_pasangan.lampiran.lamp_buku_nikah == null) {
                                        var k = [
                                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                                        ].join('\n');
                                        html10.push(k);
                                        $('#gambar_buku_nikah').html(html10);
                                    } else {
                                        var k = [
                                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                                        ].join('\n');
                                        html10.push(k);
                                        $('#gambar_buku_nikah').html(html10);
                                    }
                                })
                        }
                        load_pasangan();
                    }
                    load_fasilitas();
                    load_debitur();
                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');
                });
            hide_all();
            $('#lihat_detail').show();
        });

    })
    //==============================================================================================



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
            //Data Pasangan
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
                        load_fasilitas();
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


    //update_debitur
    $(function() {
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
            formData.append('jenis_kelamin', $('select[name=jenis_kelamin1]', this).val());
            formData.append('status_nikah', $('select[name=status_nikah]', this).val());
            formData.append('ibu_kandung', $('input[name=ibu_kandung]', this).val());
            formData.append('no_ktp', $('input[name=no_ktp]', this).val());
            formData.append('no_ktp_kk', $('input[name=no_ktp_kk]', this).val());
            formData.append('no_kk', $('input[name=no_kk]', this).val());
            formData.append('no_npwp', $('input[name=no_npwp]', this).val());
            formData.append('tempat_lahir', $('input[name=tempat_lahir]', this).val());
            formData.append('tgl_lahir', $('input[name=tgl_lahir_deb]', this).val());
            formData.append('umur', $('input[name=umur]', this).val());
            formData.append('agama', $('select[name=agama_deb]', this).val());
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
            formData.append('email', $('input[name=email]', this).val());
            formData.append('alamat_surat', $('select[name=alamat_surat]', this).val());

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
                    });
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
                        $(".close_deb").click();
                    });
                })
                .fail(function(jqXHR) {
                    var data = jqXHR.responseJSON;
                    var error = "";

                    if (typeof data == 'string') {
                        error = '<p>' + data + '</p>';
                    }
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });
            $(".close_deb").click();
        });

        $('#form_edit_photo_deb ').on('submit', function(e) {
            var id = $('input[name=id_debitur_photo]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('foto_cadeb', $('input[name=lamp_photo_deb]', this)[0].files[0]);

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
                    }
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });
            $(".close_deb").click();
        });

        $('#form_edit_npwp ').on('submit', function(e) {
            var id = $('input[name=id_debitur_npwp]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('lamp_npwp', $('input[name=lamp_npwp]', this)[0].files[0]);

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
                    }
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });
            $(".close_deb").click();
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
                    });
                });

        });

    });

    //update_pasangan
    $(function() {
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

            update_pasangan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        $("#batal").click();
                        tampil_data_so();
                        load_pasangan();
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
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_pasangan();
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

        $('#form_edit_photo_pas').on('submit', function(e) {
            var id = $('input[name=id_debitur_photo_pasangan]', this).val();
            e.preventDefault();
            var formData = new FormData();
            //Data Debitur
            formData.append('foto_pasangan', $('input[name=lamp_photo_pas]', this)[0].files[0]);

            update_pasangan(formData, id)
                .done(function(res) {

                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_pasangan();
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
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_lampiran_pasangan();
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

    //update_penjamin
    $(function() {

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
        });

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

        //SUBMIT EDIT PENJAMIN
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

            update_penjamin(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_penjamin();
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
                        $("#check_ktp_penjamin").show()
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
                        $('#form_edit_ktp_penjamin')[0].reset();
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
                        $("#check_kk_penjamin").show();
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
                        $('#form_edit_kk_penjamin')[0].reset();
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
                        $("#check_ktp_pas_penjamin").show();
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
                        $('#form_edit_ktp_pas_penjamin')[0].reset();
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
                        $("#check_buku_nikah_penjamin").show();
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

        get_penjamin = function(opts, id) {
            var url = '<?php echo config_item('api_url') ?>api/master/mcc/' + id;
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
                    console.log(data)
                    var htmlpenjamin1 = [];
                    var id_penjamin = {};
                    $.each(data.penjamin, function(index, item) {
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
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp + '" /> </a> </td>',
                            '<td style="width:200px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp_pasangan + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_ktp_pasangan + '" /> </a> </td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px"style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_kk + '" /> </a> </td>',
                            '<td style="width:180px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:45px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lamp_buku_nikah + '" /> </a> </td>',


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

                    if (data_debitur.lampiran.lamp_ktp == null) {
                        var a1 = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_ktp').html(html);
                    } else {
                        var a1 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_ktp + '" /> </a>'
                        ].join('\n');
                        html.push(a1);
                        $('#gambar_ktp').html(html);
                    }

                    if (data_debitur.lampiran.foto_cadeb == null) {
                        var a2 = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html6.push(a2);
                        $('#gambar_photo').html(html6);
                    } else {
                        var a2 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_cadeb + '" data-lightbox="example-set" data-title="Lampiran Photo Debitur"><img id="img_photo_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_cadeb + '" /> </a>'
                        ].join('\n');
                        html6.push(a2);
                        $('#gambar_photo').html(html6);
                    }

                    if (data_debitur.lampiran.lamp_npwp == null) {
                        var a3 = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html7.push(a3);
                        $('#gambar_npwp').html(html7);
                    } else {
                        var a3 = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_npwp+ '" data-lightbox="example-set" data-title="Lampiran NPWPr"><img id="img_npwp" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_npwp + '" /> </a>'
                        ].join('\n');
                        html7.push(a3);
                        $('#gambar_npwp').html(html7);
                    }

                    if (data_debitur.lampiran.lamp_kk == null) {
                        var b = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html1.push(b);
                        $('#gambar_kk').html(html1);
                    } else {
                        var b = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" data-lightbox="example-set" data-title="Lampiran KK Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_kk + '" /> </a>'
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
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" data-lightbox="example-set" data-title="Lampiran Sertifkat Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sertifikat + '" /> </a>'
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
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" data-lightbox="example-set" data-title="Lampiran PBB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_sttp_pbb + '" /> </a>'
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
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.lamp_imb + '" /> </a>'
                        ].join('\n');
                        html4.push(e);
                        $('#gambar_imb').html(html4);
                    }

                    if (data_debitur.lampiran.foto_agunan_rumah == null) {
                        var p = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html5.push(p);
                        $('#gambar_rumah_agunan').html(html5);
                    } else {
                        var p = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" data-lightbox="example-set" data-title="Lampiran IMB Debitur"><img class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_debitur.lampiran.foto_agunan_rumah + '" /> </a>'
                        ].join('\n');
                        html5.push(p);
                        $('#gambar_rumah_agunan').html(html5);
                    }

                })
        }

        load_data_lampiran_pasangan = function() {
            var id = $('#form_pasangan input[type=hidden][name=id_pasangan]').val();
            get_data_pasangan({}, id)
                .done(function(response) {
                    var data_pasangan = response.data;
                    var html = [];
                    var html1 = [];
                    var html2 = [];

                    if (data_pasangan.lampiran.lamp_ktp == null) {
                        var f = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html1.push(f);
                        $('#gambar_ktp_pasangan').html(html1);
                    } else {
                        var f = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Pasangan"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                        ].join('\n');
                        html1.push(f);
                        $('#gambar_ktp_pasangan').html(html1);
                    }

                    if (data_pasangan.lampiran.foto_pasangan == null) {
                        var aa = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html.push(aa);
                        $('#gambar_photo_pasangan').html(html);
                    } else {
                        var aa = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.foto_pasangan + '" data-lightbox="example-set" data-title="Lampiran Photo Pasangan"><img id="img_photo_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.foto_pasangan + '" /> </a>'
                        ].join('\n');
                        html.push(aa);
                        $('#gambar_photo_pasangan').html(html);
                    }

                    if (data_pasangan.lampiran.lamp_buku_nikah == null) {
                        var g = [
                            '<img class="thumbnail img-responsive img" alt="" src="<?php echo base_url('assets/dist/img/no-image.png') ?>" />'
                        ].join('\n');
                        html2.push(g);
                        $('#gambar_buku_nikah').html(html2);
                    } else {
                        var g = [
                            '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" data-lightbox="example-set" data-title="Lampiran Buku Nikah"><img class="thumbnail img-responsive" alt="" src="<?php echo $this->config->item('img_url') ?>' + data_pasangan.lampiran.lamp_buku_nikah + '" /> </a>'
                        ].join('\n');
                        html2.push(g);
                        $('#gambar_buku_nikah').html(html2);
                    }
                })
        }
    });
    
    function click_detail() {
        $('#form_detail .form-control').prop('disabled', true);
        $('.submit').hide();
    }

</script>
