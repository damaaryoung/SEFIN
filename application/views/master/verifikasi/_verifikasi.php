<style>
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }
</style>

<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Verifikasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Verifikasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-5">
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <?php
                                $this->db->group_by('view_kode_kantor.kode_area');
                                $kode_area = $this->db->get('view_kode_kantor')->result();
                            ?>
                            <select id="kode_area" class="form-control" name="kode_area">
                                <option value="" selected="selected">- Pilih Area -</option>
                                <option value="KONSOLIDASI">KONSOLIDASI</option>
                                <?php foreach($kode_area as $r): ?>
                                    <option value="<?php echo $r->kode_area; ?>"><?php echo $r->kode_area; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <?php
                                $kode_kantor = $this->db->get('view_kode_kantor')->result();
                            ?>
                            <select id="kode_kantor" class="form-control" name="kode_kantor">
                                <option value="" selected="selected">- Pilih Cabang -</option>
                                <option value="Konsolidasi">Konsolidasi</option>
                                <?php foreach($kode_kantor as $r): ?>
                                    <option value="<?php echo $r->kode_kantor; ?>"><?php echo $r->nama_kantor; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a style="width: 100%" href="javascript:void(0)" title="" class="btn btn-primary btn-sm mr-3" onclick="filter_data_verifikasi()">
                            Cari
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <table id="table_verifikasi" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 15px" class="bg-danger">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Tanggal Transaksi
                                        </th>
                                        <th>
                                            No. SO
                                        </th>
                                        <th>
                                            Nama Debitur
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_verifikasi" style="font-size: 13px">
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
                    <h1>Data Verifikasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Verifikasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div id="form_detail" method="GET">
        <div class="col-md-12">
            <div class="box box-primary" style="background-color: #ffffff1f">
                <div class="box-body">
                    <div class="px-2 bg-light running_text">
                        <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" style=" color:#ff0018">
                            *Silahkan Lengkapi Data-Data Lampiran Terlebih Dahulu Sebelum Verifikasi*
                        </marquee>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" id="ktp" data-toggle="collapse" href="#collapse_ktp" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA DEBITUR</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Debitur</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_debitur" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiDebitur" id="verifikasi_debitur"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama debitur sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" id="ktp_pasangan" data-toggle="collapse" href="#collapse_ktp_pasangan" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PASANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp_pasangan">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Pasangan</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_pasangan" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiPasangan" id="verifikasi_pasangan"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama pasangan sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" id="ktp_penjamin" data-toggle="collapse" href="#collapse_ktp_penjamin" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PENJAMIN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp_penjamin">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_penjamin" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiPenjamin" id="verifikasi_penjamin"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama penjamin sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_penjamin_2">
                        <div class="card-header bg-gradient-danger" id="ktp_penjamin_2" data-toggle="collapse" href="#collapse_ktp_penjamin_2" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PENJAMIN 2</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp_penjamin_2">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 2</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_penjamin_2" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiPenjamin" id="verifikasi_penjamin_2"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama penjamin sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_penjamin_3">
                        <div class="card-header bg-gradient-danger" id="ktp_penjamin_3" data-toggle="collapse" href="#collapse_ktp_penjamin_3" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PENJAMIN 3</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp_penjamin_3">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 3</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_penjamin_3" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiPenjamin" id="verifikasi_penjamin_3"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama penjamin sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_penjamin_4">
                        <div class="card-header bg-gradient-danger" id="ktp_penjamin_4" data-toggle="collapse" href="#collapse_ktp_penjamin_4" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PENJAMIN 4</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp_penjamin_4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 4</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_penjamin_4" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiPenjamin" id="verifikasi_penjamin_4"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama penjamin sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_penjamin_5">
                        <div class="card-header bg-gradient-danger" id="ktp_penjamin_5" data-toggle="collapse" href="#collapse_ktp_penjamin_5" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PENJAMIN 5</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp_penjamin_5">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 5</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_penjamin_5" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiPenjamin" id="verifikasi_penjamin_5"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama penjamin sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" id="npwp" data-toggle="collapse" href="#collapse_npwp" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP DEBITUR</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Debitur</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_npwp" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiNpwp" id="verifikasi_npwp"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" id="npwp_pasangan" data-toggle="collapse" href="#collapse_npwp_pasangan" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP PASANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp_pasangan">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Pasangan</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_npwp_pasangan" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiNpwpPasangan" id="verifikasi_npwp_pasangan"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_properti_1">
                        <div class="card-header bg-gradient-danger" id="properti_1" data-toggle="collapse" href="#collapse_properti_1" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>PROPERTI AGUNAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_properti_1">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Properti</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_properti_1" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiProperti" id="verifikasi_properti_1"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_properti_2">
                        <div class="card-header bg-gradient-danger" id="properti_2" data-toggle="collapse" href="#collapse_properti_2" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>PROPERTI AGUNAN 2</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_properti_2">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Properti</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_properti_2" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiProperti" id="verifikasi_properti_2"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_properti_3">
                        <div class="card-header bg-gradient-danger" id="properti_3" data-toggle="collapse" href="#collapse_properti_3" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>PROPERTI AGUNAN 3</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_properti_3">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Properti</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_properti_3" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiProperti" id="verifikasi_properti_3"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_properti_4">
                        <div class="card-header bg-gradient-danger" id="properti_4" data-toggle="collapse" href="#collapse_properti_4" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>PROPERTI AGUNAN 4</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_properti_4">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Properti</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_properti_4" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiProperti" id="verifikasi_properti_4"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_properti_5">
                        <div class="card-header bg-gradient-danger" id="properti_5" data-toggle="collapse" href="#collapse_properti_5" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>PROPERTI AGUNAN 5</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_properti_5">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Properti</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_properti_5" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiProperti" id="verifikasi_properti_5"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_report">
                        <div class="card-header bg-gradient-danger" id="report" data-toggle="collapse" href="#collapse_report" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>REPORT VERIFIKASI</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_report">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_report" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
    </div>
</div>

<div id="edit_detail" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Verifikasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Verifikasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div id="form_edit" method="GET">
        <div class="col-md-12">
            <div class="box box-primary" style="background-color: #ffffff1f">
                <div class="box-body">
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_edit" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA DEBITUR</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_edit">
                            <form id="form_debitur">
                                <input type="hidden" id="id_debitur" name="id_debitur" value="">
                                <input type="hidden" id="id_trans_so" name="id_trans_so" value="">        
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No KTP<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_ktp_deb" id="no_ktp_deb" maxlength="16" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>No NPWP<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_npwp_deb" id="no_npwp_deb" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap <small><i>(Sesuai KTP Tanpa Gelar)</i></small><span class="required_notification">*</span></label>
                                            <input type="text" name="nama_deb" id="nama_deb" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Tempat Lahir<span class="required_notification">*</span></label>
                                                <input type="text" name="tempat_lahir_deb" id="tempat_lahir_deb" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <input type="date" id="tgl_lahir_deb" name="tgl_lahir_deb" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alamat <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                            <textarea name="alamat_deb" id="alamat_deb" onkeyup="this.value = this.value.toUpperCase()" class="form-control " rows="4"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Photo Selfie</label>
                                                <a type="button"class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_photo_deb"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                                                <div class="form-group form-file-upload form-file-multiple">
                                                    <div class="well" id="gambar_photo_deb"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Photo KTP</label>
                                                <a type="button" class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_ktp_deb"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                                                <div class="form-group form-file-upload form-file-multiple">
                                                    <div class="well" id="gambar_ktp_deb"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Photo NPWP</label>
                                                <a type="button" class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_npwp_deb"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                                                <div class="form-group form-file-upload form-file-multiple">
                                                    <div class="well" id="gambar_npwp_deb"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success submit"><i class="fa fa-save"></i>Update</button>
                                </div>
                            </form>
                        </div>  
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_edit_pasangan" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PASANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_edit_pasangan">
                            <form id="form_pasangan">
                                <input type="hidden" id="id_pasangan" name="id_pasangan" value="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No KTP<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_ktp_pas" id="no_ktp_pas" maxlength="16" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>No NPWP<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_npwp_pas" id="no_npwp_pas" onkeypress="return hanyaAngka(event)">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap <small><i>(Sesuai KTP Tanpa Gelar)</i></small><span class="required_notification">*</span></label>
                                            <input type="text" name="nama_pas" id="nama_pas" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label>Tempat Lahir<span class="required_notification">*</span></label>
                                                <input type="text" name="tempat_lahir_pas" id="tempat_lahir_pas" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Lahir<span class="required_notification">*</span></label>
                                                <div class="input-group">
                                                    <input type="date" id="tgl_lahir_pas" name="tgl_lahir_pas" class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Alamat <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                            <textarea name="alamat_pas" id="alamat_pas" onkeyup="this.value = this.value.toUpperCase()" class="form-control " rows="3"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Photo Selfie</label>
                                                <a type="button"class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_photo_pas"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                                                <div class="form-group form-file-upload form-file-multiple">
                                                    <div class="well" id="gambar_photo_pas"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Photo KTP</label>
                                                <a type="button" class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_ktp_pas"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                                                <div class="form-group form-file-upload form-file-multiple">
                                                    <div class="well" id="gambar_ktp_pas"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Photo NPWP</label>
                                                <a type="button" class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_npwp_pas"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                                                <div class="form-group form-file-upload form-file-multiple">
                                                    <div class="well" id="gambar_npwp_pas"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-success submit"><i class="fa fa-save"></i>Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_edit_penjamin" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PENJAMIN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_edit_penjamin">
                            <form id="form_penjamin">
                                <input type="hidden" id="id_trans_so_pen" name="id_trans_so_pen">
                                <div class="box-body table-responsive no-padding">
                                    <table id="table_penjamin" class="table table-bordered table-hover table-sm" style="min-width: 1500px">
                                        <thead style="font-size: 12px">
                                            <tr>
                                                <th width="20px">
                                                    Aksi
                                                </th>
                                                <th>
                                                    Nama KTP
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
                                                    Alamat KTP
                                                </th>
                                                <th>
                                                    Pemasukan Bulanan
                                                </th>
                                                <th>
                                                    Lampiran Foto Selfie
                                                </th>
                                                <th>
                                                    Lampiran KTP
                                                </th>
                                                <th>
                                                    Lampiran NPWP
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

                    <div class="card mb-3">
                            <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_edit_agunan" role="button" aria-expanded="false">
                                <a class="text-light">
                                    <b>AGUNAN JAMINAN SERTIFIKAT</b>
                                </a>
                            </div>
                            <div class="card-body collapse" id="collapse_edit_agunan">
                                <div class="box-body table-responsive no-padding">
                                    <table id="table_agunan_sertifikat" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                        <thead style="font-size: 12px" class="bg-success">
                                            <tr>
                                                <th>
                                                    Aksi
                                                </th>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    NOP
                                                </th>
                                                <th>
                                                    Luas Bangunan
                                                </th>
                                                <th>
                                                    Luas Tanah
                                                </th>
                                                <th>
                                                    No. Sertifikat
                                                </th>
                                                <th>
                                                    Nama Pemilik Sertifikat
                                                </th>
                                                <th>
                                                    Jenis Sertifikat
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_agunan" style="font-size: 12px">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>

<form id="form_edit_penjamin">
    <div class="modal fade in" id="modal_penjamin" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Data Penjamin</h5>
                    <button type="button" class="close close_pen" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="height:500px; overflow-y:scroll">
                    <div class="row">
                        <input type="hidden" id="edit_id_penjamin" name="edit_id_penjamin">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>No KTP<span class="required_notification">*</span></label>
                                <input type="text" name="no_ktp_pen" id="no_ktp_pen" onkeypress="return hanyaAngka(event)" class="form-control " maxlength="16">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama Lengkap <small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                                <input type="text" name="nama_pen" id="nama_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tempat Lahir<span class="required_notification">*</span></label>
                                <input type="text" name="tempat_lahir_pen" id="tempat_lahir_pen" onkeyup="this.value = this.value.toUpperCase()" class="form-control ">
                            </div>
                        </div>
                        <div class="col-md-6">
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
                    <div class="form-group">
                        <label>Alamat<small><i>(Sesuai KTP)</i></small><span class="required_notification">*</span></label>
                        <textarea id="alamat_pen" name="alamat_pen" id="alamat_pen" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="4"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>No NPWP<span class="required_notification">*</span></label>
                            <input type="text" class="form-control" name="no_npwp_pen" id="no_npwp_pen" onkeypress="return hanyaAngka(event)">
                        </div>
                        <div class="col-md-6">
                            <label>Pemasukan Bulanan<span class="required_notification">*</span></label>
                            <input type="text" class="form-control" name="pemasukan_pen" id="pemasukan_pen" onkeypress="return hanyaAngka(event)">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Photo Selfie</label>
                            <a type="button"class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_photo_pen"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                            <div class="form-group form-file-upload form-file-multiple">
                                <div class="well" id="gambar_photo_pen"></div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Photo KTP</label>
                            <a type="button" class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_ktp_pen"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                            <div class="form-group form-file-upload form-file-multiple">
                                <div class="well" id="gambar_ktp_pen"></div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Photo NPWP</label>
                            <a type="button" class="btn btn-info submit" data-toggle="modal" data-target="#modal_edit_npwp_pen"><i class="fa fa-pencil-alt" style="color: #fff"></i></a>
                            <div class="form-group form-file-upload form-file-multiple">
                                <div class="well" id="gambar_npwp_pen"></div>
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

<form id="form_edit_agunan">
    <input type="hidden" name="id_agunan" id="id_agunan">
    <div class="modal fade in" id="modal_edit_agunan" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Agunan Sertifikat</h5>
                    <button type="button" class="close close_agu" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12" id="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NOP<span class="required_notification">*</span></label>
                                    <input type="text" class="form-control" name="nop">
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
                                <div class="form-group">
                                    <label>Nomor Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" class="form-control" name="no_sertifikat" onkeypress="return hanyaAngka(event)">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Pemilik Sertifikat<span class="required_notification">*</span></label>
                                    <input type="text" name="nama_pemilik_sertifikat" class="form-control " onkeyup="this.value = this.value.toUpperCase()">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Sertifikat</label>
                                    <select id="jenis_sertifikat" name="jenis_sertifikat" class="form-control">
                                        <option value="">-- Pilih --</option>
                                        <?php foreach ($jenis_sertifikat as $key) {?>
                                            <option value="<?= $key->nama_detail; ?>"><?= $key->nama_detail; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div style="float: right; margin-right: 7px;">
                            <button type="button" class="btn btn-danger close_agu" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
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
    <div class="modal fade in" id="modal_edit_ktp_deb" data-keyboard="false" data-backdrop="static">
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

<form id="form_edit_npwp_deb">
    <input type="hidden" id="id_debitur_npwp" name="id_debitur_npwp">
    <div class="modal fade in" id="modal_edit_npwp_deb" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran NPWP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_npwp_deb" class="form-control" style="height: 45px">
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
    <input type="hidden" id="id_pasangan_photo" name="id_pasangan_photo">
    <div class="modal fade in" id="modal_edit_photo_pas" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran Photo Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_photo_pas" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close_pas" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_edit_ktp_pas">
    <input type="hidden" id="id_pasangan_ktp" name="id_pasangan_ktp">
    <div class="modal fade in" id="modal_edit_ktp_pas" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran KTP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_ktp_pas" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close_pas" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_edit_npwp_pas">
    <input type="hidden" id="id_pasangan_npwp" name="id_pasangan_npwp">
    <div class="modal fade in" id="modal_edit_npwp_pas" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class='modal-body text-center'>
                    <div class="form-group">
                        <label>Ubah Lampiran NPWP Debitur</label>
                        <div class="input-group">
                            <input type="file" name="lamp_npwp_pas" class="form-control" style="height: 45px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger close_pas" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_edit_photo_pen">
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
                    <button type="button" class="btn btn-danger close_pen" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_edit_ktp_pen">
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
                    <button type="button" class="btn btn-danger close_pen" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="form_edit_npwp_pen">
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
                    <button type="button" class="btn btn-danger close_pen" data-dismiss="modal">Close</button>
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

<script>

    tampil_data_verifikasi();

    var areaSelect = document.getElementById("kode_area");
    areaSelect.addEventListener("change", function(e) {
        var selectedArea = $("#kode_area option:selected").val();

        if (selectedArea !== "") {
            $('#kode_kantor').prop('disabled', 'disabled');
        } else {
            $('#kode_kantor').prop('disabled', false);
        }

    });

    var cabangSelect = document.getElementById("kode_kantor");
    cabangSelect.addEventListener("change", (e) => {
        var selectedCabang = $("#kode_kantor option:selected").val();

        if (selectedCabang !== "") {
            $('#kode_area').prop('disabled', 'disabled');
        } else {
            $('#kode_area').prop('disabled', false);
        }

    });

    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

            return false;
        return true;
    }

    function filter_data_verifikasi() {
        var requestBody = {
            kode_kantor  : $("#kode_kantor option:selected").val(),
            kode_area    : $("#kode_area option:selected").val(),
        }

        if (requestBody.kode_area == "" && requestBody.kode_kantor == "") {
            bootbox.alert("Salah satu dari Area atau Cabang tidak boleh kosong!");
        } else if (requestBody.kode_area == "KONSOLIDASI" || requestBody.kode_kantor == "Konsolidasi") {
            tampil_data_verifikasi();
        } else {
            // call AJAX data verifikasi yang sudah di filter berdasarkan area dan kantor
        }
    }

    function tampil_data_verifikasi() {
        $('#table_verifikasi').DataTable({

            "processing": true,
            "serverSide": true,
            'destroy': true,
            "order": [],

            "paging": true,
            "retrieve": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,

            "ajax": {
                "url": "<?php echo site_url('Ao_controller/get_data_verifikasi') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        })
    }

    function click_edit() {
        $('.verifikasiDebitur').show();
        $('.verifikasiPasangan').show();
        $('.verifikasiNpwp').show();
        $('.verifikasiNpwpPasangan').show();
        $('.verifikasiProperti').show();
        $('.running_text').show();
        $('.warning_nama').show();
    }

    function click_detail() {
        $('.verifikasiDebitur').hide();
        $('.verifikasiPasangan').hide();
        $('.verifikasiPenjamin').hide();
        $('.verifikasiNpwp').hide();
        $('.verifikasiNpwpPasangan').hide();
        $('.verifikasiProperti').hide();
        $('.running_text').hide();
        $('.warning_nama').hide();
    }

    function base64Encode(str) {
        var CHARS = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
        var out = "", i = 0, len = str.length, c1, c2, c3;
        while (i < len) {
            c1 = str.charCodeAt(i++) & 0xff;
            if (i == len) {
                out += CHARS.charAt(c1 >> 2);
                out += CHARS.charAt((c1 & 0x3) << 4);
                out += "==";
                break;
            }
            c2 = str.charCodeAt(i++);
            if (i == len) {
                out += CHARS.charAt(c1 >> 2);
                out += CHARS.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
                out += CHARS.charAt((c2 & 0xF) << 2);
                out += "=";
                break;
            }
            c3 = str.charCodeAt(i++);
            out += CHARS.charAt(c1 >> 2);
            out += CHARS.charAt(((c1 & 0x3) << 4) | ((c2 & 0xF0) >> 4));
            out += CHARS.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >> 6));
            out += CHARS.charAt(c3 & 0x3F);
        }
        return out;
    }

    function verifikasiSimpanDebitur(isTesting, id_trans_so) {

        var photo_debitur = document.getElementById("photo_selfie_debitur");
        var base64_selfieDebitur = "";
        var responseBody;

        if (photo_debitur.src == "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Debitur Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
            url: photo_debitur.src,
            type: 'GET',
            beforeSend: function( xhr ) {
                xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                xhr.responseType = 'blob';
                }
            })
            .done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "VeriJelas-BPR-KMI-" + $("#nik").text(),
                    "nik" : $("#nik").text(),
                    "name" : $("#name").text(),
                    "birthdate" : $(formatTanggal("#birthdate")).text(),
                    "birthplace" : $("#birthplace").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);
                
                if (isTesting) {
                    
                    responseBody = responseDebiturPasangan(requestBody);
                    console.log(responseBody);
                    
                    if (responseBody.data == null) {
                        bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Debitur!!!");
                    }

                    var requestBody = requestMapperForStoreCadeb(responseBody);
                    var url = "api/master/verif/storecadeb/";

                    httpRequestBuilder(requestMapperForStoreCadeb(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponseDebitur(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data Debitur!!");
                        $('.verifikasiDebitur').hide();
                    })
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.verifikasiDebitur').html('<button class="btn btn-primary" ><i class="fas fa-spinner fa-pulse" ></i> Proses</button>');
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if (responseBody.data == null) {
                            bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Debitur!!!");
                            $('.verifikasiDebitur').hide();
                        }
                
                        var url = "api/master/verif/storecadeb/";

                        httpRequestBuilder(requestMapperForStoreCadeb(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseDebitur(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data Debitur!!");
                            $('.verifikasiDebitur').hide();
                        })
                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        bootbox.alert("Status: " + textStatus, "Error: " + errorThrown);
                    })
                }
                
            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Debitur!!");
            });
        }        
    }

    function verifikasiUpdateDebitur(isTesting, limitCallDebitur, id_trans_so) {

        var photo_debitur = document.getElementById("photo_selfie_debitur");
        var base64_selfieDebitur = "";
        var responseBody;

        if (photo_debitur.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Debitur Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
            url: photo_debitur.src,
            type: 'GET',
            beforeSend: function( xhr ) {
                xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                xhr.responseType = 'blob';
                }
            })
            .done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "VeriJelas-BPR-KMI-" + $("#nik").text() + "-update",
                    "nik" : $("#nik").text(),
                    "name" : $("#name").text(),
                    "birthdate" : $(formatTanggal("#birthdate")).text(),
                    "birthplace" : $("#birthplace").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }

                if(limitCallDebitur > 1) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Debitur!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseDebiturPasangan(requestBody);

                        if (responseBody.data == null) {
                            bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Debitur!!!");
                            $('.verifikasiDebitur').hide();
                        }

                        var requestBody = requestMapperForUpdate(responseBody, true);
                        var url = "api/master/verif/updateVerif/";

                        httpRequestBuilder(requestMapperForUpdateCadeb(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseDebitur(responseBody);
                            bootbox.alert("Berhasil Update Verifikasi Data Debitur!!");
                            $('.verifikasiDebitur').hide();
                        })
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.verifikasiDebitur').html('<button class="btn btn-primary"><i class="fas fa-spinner fa-pulse"></i> Proses</button>');
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if (responseBody.data == null) {
                                bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Debitur!!!");
                                $('.verifikasiDebitur').hide();
                            }

                            var requestBody = requestMapperForUpdateCadeb(responseBody);
                            var url = "api/master/verif/updateVerif/";

                            httpRequestBuilder(requestMapperForUpdateCadeb(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseDebitur(responseBody);
                                bootbox.alert("Berhasil Update Verifikasi Data Debitur!!");
                                $('.verifikasiDebitur').hide();
                            })
                        })
                        .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        })
        
                    } 
                    
                }

            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Debitur!!");
            });
        }        
    }

    function verifikasiSimpanPasangan(isTesting, id_trans_so) {

        var photo_pasangan = document.getElementById("photo_selfie_pasangan");
        var base64_selfiePasangan = "";
        var responseBody;

        if (photo_pasangan.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Pasangan Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_pasangan.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "VeriJelas-BPR-KMI-" + $("#nik").text(),
                    "nik" : $("#nik_pasangan").text(),
                    "name" : $("#name_pasangan").text(),
                    "birthdate" : $("#birthdate_pasangan").text(),
                    "birthplace" : $("#birthplace_pasangan").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                
                if (isTesting) {
                    responseBody = responseDebiturPasangan(requestBody);

                    if (responseBody.data == null) {
                        bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Pasangan!!!");
                        $('.verifikasiPasangan').hide();
                    }

                    var url = "api/master/verif/storepasangan/";

                    httpRequestBuilder(requestMapperForStorePasangan(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponsePasangan(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data Pasangan!!");
                        $('.verifikasiPasangan').hide();
                    })
                   
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.verifikasiPasangan').html('<button class="btn btn-primary"><i class="fas fa-spinner fa-pulse"></i> Proses</button>');
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if (responseBody.data == null) {
                            bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Pasangan!!!");
                            $('.verifikasiPasangan').hide();
                        }

                        var requestBody = requestMapperForStorePasangan(responseBody);
                        var url = "api/master/verif/storepasangan/";

                        httpRequestBuilder(requestMapperForStorePasangan(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponsePasangan(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data Pasangan!!");
                            $('.verifikasiPasangan').hide();
                        })
                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                    
                }
                
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Pasangan!!");
            });
        }
    }

    function verifikasiUpdatePasangan(isTesting, limitCallPasangan, id_trans_so) {

        var photo_pasangan = document.getElementById("photo_selfie_pasangan");
        var base64_selfiePasangan = "";
        var responseBody;

        if (photo_pasangan.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Pasangan Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_pasangan.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "VeriJelas-BPR-KMI-" + $("#nik").text() + "-update",
                    "nik" : $("#nik_pasangan").text(),
                    "name" : $("#name_pasangan").text(),
                    "birthdate" : $("#birthdate_pasangan").text(),
                    "birthplace" : $("#birthplace_pasangan").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }

                if(limitCallPasangan == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Pasangan!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseDebiturPasangan(requestBody);

                        if (responseBody.data == null) {
                            bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Pasangan!!!");
                            $('.verifikasiPasangan').hide();
                        }

                        var url = "api/master/verif/updateVerif/";

                        httpRequestBuilder(requestMapperForUpdatePasangan(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponsePasangan(responseBody);
                            bootbox.alert("Berhasil Update Verifikasi Data Pasangan!!");
                            $('.verifikasiPasangan').hide();
                        })
                    
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.verifikasiPasangan').html('<button class="btn btn-primary"><i class="fas fa-spinner fa-pulse"></i> Proses</button>');
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if (responseBody.data == null) {
                                bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Pasangan!!!");
                                $('.verifikasiPasangan').hide();
                            }

                            var requestBody = requestMapperForUpdatePasangan(responseBody);
                            var url = "api/master/verif/updateVerif/";

                            httpRequestBuilder(requestMapperForUpdatePasangan(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePasangan(responseBody);
                                bootbox.alert("Berhasil Update Verifikasi Data Pasangan!!");
                                $('.verifikasiPasangan').hide();
                            })
                        })
                        .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        })
                        
                    }

                }
                
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Pasangan!!");
            });
        }
    }

    function verifikasiSimpanNpwp(isTesting, id_trans_so) {
        var responseBody;
        var no_npwp = $("#no_npwp").text();

        if (no_npwp == "0") {
            bootbox. alert("Debitur Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "VeriJelas-BPR-KMI-" + $("#no_npwp").text(),
                    "npwp" : $("#no_npwp").text(),
                    "nik" : $("#nik").text(),
                    "income" : Number($("#income_npwp").text()),
                    "name" : $("#name_npwp").text(),
                    "birthdate" : $("#birthdate_npwp").text(),
                    "birthplace" : $("#birthplace_npwp").text()
                    // "income" : $("#income_npwp").text(),
                }

                console.log(requestBody);

                if (isTesting) {
                    responseBody = responseNpwp(requestBody);

                    if (responseBody.data == null) {
                        bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data NPWP Debitur!!!");
                        $('.verifikasiNpwp').hide();
                    }
                    
                    var url = "api/master/verif/storenpwp/";

                    httpRequestBuilder(requestMapperForStoreNpwp(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponseNpwp(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                        $('.verifikasiNpwp').hide();
                    })
                    
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_npwp',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.verifikasiNpwp').html('<button class="btn btn-primary"><i class="fas fa-spinner fa-pulse"></i> Proses</button>');
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log( responseBody);

                        if (responseBody.data == null) {
                            bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data NPWP Debitur!!!");
                            $('.verifikasiNpwp').hide();
                        }

                        var url = "api/master/verif/storenpwp/";

                        httpRequestBuilder(requestMapperForStoreNpwp(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseNpwp(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                            $('.verifikasiNpwp').hide();
                        })
                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                    
                }

            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data NPWP!!");
            });
        }
    }

    function verifikasiUpdateNpwp(isTesting, limitCallNpwp, id_trans_so) {
        var responseBody;
        var no_npwp = $("#no_npwp").text();

        if (no_npwp == "0") {
            bootbox. alert("Debitur Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "VeriJelas-BPR-KMI-" + $("#no_npwp").text() + "-update",
                    "nik" : $("#nik").text(),
                    "npwp" : $("#no_npwp").text(),
                    "name" : $("#name_npwp").text(),
                    "birthdate" : $("#birthdate_npwp").text(),
                    "birthplace" : $("#birthplace_npwp").text(),
                    // "income" : $("#income_npwp").text(),
                    "income" : Number($("#income_npwp").text())
                }

                if(limitCallNpwp == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi NPWP!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseNpwp(requestBody);

                        if (responseBody.data == null) {
                            bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data NPWP Debitur!!!");
                            $('.verifikasiNpwp').hide();
                        }
            
                        var url = "api/master/verif/updateVerif/";

                        httpRequestBuilder(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseNpwp(responseBody);
                            bootbox.alert("Berhasil Update Verifikasi Data NPWP!!");
                            $('.verifikasiNpwp').hide();
                        })
                        
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_npwp',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.verifikasiNpwp').html('<button class="btn btn-primary"><i class="fas fa-spinner fa-pulse"></i> Proses</button>');
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log( responseBody);

                            if (responseBody.data == null) {
                                bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data NPWP Debitur!!!");
                                $('.verifikasiNpwp').hide();
                            }

                            var url = "api/master/verif/updateVerif/";

                            httpRequestBuilder(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseNpwp(responseBody);
                                bootbox.alert("Berhasil Update Verifikasi Data NPWP!!");
                                $('.verifikasiNpwp').hide();
                            })
                        })
                        .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                        })
                        
                    }

                }
                   
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data NPWP!!");
            });
        }
    }

    function verifikasiSimpanProperti(isTesting, id_trans_so) {
        var responseBody;
        var nop = $("#nop").text();

        if (nop== "0" || nop == "" || nop == null) {
            bootbox. alert("Debitur Tidak Memiliki NOP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "VeriJelas-BPR-KMI-" + $("#nop").text(),
                    "nop" : $(removePoint("#nop")).text(),
                    "property_name" : $("#property_name").text(),
                    // "property_building_area" : $("#property_building_area").text(),
                    // "property_surface_area" : $("#property_surface_area").text(),
                    // "property_estimation" : $("#property_estimation").text(),
                    "property_building_area" : Number($("#property_building_area").text()),
                    "property_surface_area" : Number($("#property_surface_area").text()),
                    "property_estimation" : Number($("#property_estimation").text()),
                    "nik" : $("#nik").text(),
                    "certificate_id" : $("#certificate_id").text(),
                    "certificate_name" : $("#certificate_name").text(),
                    "certificate_type" : $("#certificate_type").text(),
                    "certificate_date" : $(formatTanggal("#certificate_date")).text()
                }
                console.log(requestBody);

                if (isTesting) {
                    responseBody = responseProperti(requestBody);
                    console.log(responseBody);

                    if (responseBody.data == null) {
                        bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Properti!!!");
                        $('.verifikasiProperti').hide();
                    }
        
                    var url = "api/master/verif/storeproperti/";

                    httpRequestBuilder(requestMapperForStoreProperti(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponseProperti(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data Properti!!");
                        $('.verifikasiProperti').hide();
                    })
                    
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_properti',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.verifikasiProperti').html('<button class="btn btn-primary"><i class="fas fa-spinner fa-pulse"></i> Proses</button>');
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if (responseBody.data == null) {
                            bootbox.alert("Gagal Verifikasi!! Silahkan Cek Kembali Data Properti!!!");
                        }

                        var url = "api/master/verif/storeproperti/";

                        httpRequestBuilder(requestMapperForStoreProperti(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseProperti(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data Properti!!");
                            $('.verifikasiProperti').hide();
                        })
                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                }
                   
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Properti!!");
            });
        }
    }

    function verifikasiUpdateProperti() {
        bootbox.alert("Data Verifikasi Properti Sudah Ada, Tidak Dapat Update Verifikasi!!");
    }

    function checkVerified(elementId, isVerified) {
        if (isVerified) {
            $(`#${elementId}`).html("<button class='btn btn-success' style='width: 100%'>Verified</button>")
        } else {
            $(`#${elementId}`).html("<button class='btn btn-danger' style='width: 100%'>Not Verified</button>")
        }
    }

    function checkResult(elementId, isResult) {
        if (isResult == '1') {
            $(`#${elementId}`).html("<button class='btn btn-success' style='width: 100%'>Verified</button>")
        } else if (isResult == '2') {
            $(`#${elementId}`).html("<button class='btn btn-danger' style='width: 100%'>Not Verified</button>")
        } else {
            $(`#${elementId}`).html("<button class='btn' style='width: 100%'>Null</button>")
        }
    }

    function checkIncome(elementId, value) {
        if (value == "above" || value == "ABOVE") {
            $(`#${elementId}`).html("<button class='btn btn-success' style='width: 100%'>Above</button>")
        } else if (value == "amidst" || value == "AMIDST") {
            $(`#${elementId}`).html("<button class='btn btn-primary' style='width: 100%'>Amidst</button>")
        } else if (value == "below" || value == "BELOW") {
            $(`#${elementId}`).html("<button class='btn btn-danger' style='width: 100%'>Below</button>")
        } else if (value == null || value == "") {
            $(`#${elementId}`).html("<button class='btn' style='width: 100%'>Null</button>")
        }
    }

    function formatTanggal (tanggal) {
        if (tanggal != null) {
            var formattedTanggal = tanggal.split("-").reverse().join("-");

            return `${formattedTanggal}`
        } else {
            return tanggal
        }
        
    }

    function removePoint(stringBilangan) {
        var formattedBilangan = stringBilangan;
        formattedBilangan = stringBilangan.replaceAll(".", "");
        formattedBilangan = formattedBilangan.replace("-", ".");
        return formattedBilangan;
    }

    function mappingResponseDebitur(responseBody) {
        // $("#selfie_photo_result").html(responseBody.data.selfie_photo + "%");
        $("#selfie_photo_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${responseBody.data.selfie_photo}' aria-valuemin='0' aria-valuemax='100' style='width: ${responseBody.data.selfie_photo}%'>${responseBody.data.selfie_photo}%</div></div>`);
        responseBody.data != null ? checkVerified("nik_result", true) : checkVerified("nik_result", false);
        checkVerified("name_result", responseBody.data.name);
        checkVerified("birthplace_result", responseBody.data.birthplace);
        checkVerified("birthdate_result", responseBody.data.birthdate);
        $("#address_result").html(`${responseBody.data.address}`);
    }

    function mappingResponsePasangan(responseBody) {
        // $("#selfie_photo_pasangan_result").html(responseBody.data.selfie_photo + "%");
        $("#selfie_photo_pasangan_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${responseBody.data.selfie_photo}' aria-valuemin='0' aria-valuemax='100' style='width: ${responseBody.data.selfie_photo}%'>${responseBody.data.selfie_photo}%</div></div>`);
        responseBody.data != null ? checkVerified("nik_pasangan_result", true) : checkVerified("nik_result", false);
        checkVerified("name_pasangan_result", responseBody.data.name);
        checkVerified("birthplace_pasangan_result", responseBody.data.birthplace);
        checkVerified("birthdate_pasangan_result", responseBody.data.birthdate);
        $("#address_pasangan_result").html(`${responseBody.data.address}`);
        
    }

    function mappingResponseNpwp(responseBody) {
        responseBody.data != null ? checkVerified("nik_npwp_result", true) : checkVerified("nik_npwp_result", false);
        responseBody.data != null ? checkVerified("npwp_result", true) : checkVerified("npwp_result", false);
        checkVerified("name_npwp_result", responseBody.data.name);
        checkVerified("birthplace_npwp_result", responseBody.data.birthplace);
        checkVerified("birthdate_npwp_result", responseBody.data.birthdate);
        checkIncome("income_npwp_result", responseBody.data.income);
        checkVerified("match_result", responseBody.data.match_result);
    }

    function mappingResponseProperti(responseBody) {
        checkVerified("property_name_result", responseBody.data.property_name);
        checkVerified("property_building_area_result", responseBody.data.property_building_area);
        checkVerified("property_surface_area_result", responseBody.data.property_surface_area);
        checkIncome("property_estimation_result", responseBody.data.property_estimation);
        checkVerified("certificate_id_result", responseBody.data.certificate_id);
        checkVerified("certificate_name_result", responseBody.data.certificate_name);
        checkVerified("certificate_type_result", responseBody.data.certificate_type);
        checkVerified("certificate_date_result", responseBody.data.certificate_date);
    }

    function responseDebiturPasangan(requestBody) {
        return {
            timestamp: new Date()*1,
            status: 200,
            errors: {},
            data:  {
                "name": true,
                "birthdate": true,
                "birthplace": true,
                "address": "JL C*M*R *ND*H 7 N*.32",
                "selfie_photo": 98.0
                },
            trx_id: "VeriJelas2204200002",
            ref_id: "aW50ZxJuYWw=-120389080017203"
        }
        
    }

    function responseNpwp (requestBody) {
        return {
            timestamp: 1579516628,
            status: 200,
            errors: {},
            data: {
                npwp: true,
                nik: true,
                match_result: true,
                income: null,
                name: true,
                birthdate: true,
                birthplace: true
            },
            trx_id: "verijelas2204200006",
            ref_id: "aW50ZxJuYWw=-120389080017203"
            } 
    }

    function responseProperti(requestBody) {
        return {
            timestamp: new Date()*1,
            status: 200,
            errors: {
                certificate_date: "invalid",
                message: "Data not found",
                nop: "invalid",
            },
            data: {
                property_address: "K* C*P*N*NG *ND*H **10 RW 00 RT 000",
                property_name: true,
                property_building_area: true,
                property_surface_area: true,
                property_estimation: "BELOW",
                certificate_address: "JL.P*G*RS*H GG.M*SK*RD* N*.4",
                certificate_id: true,
                certificate_name: true,
                certificate_type: true,
                certificate_date: false
                },
            trx_id: requestBody.trx_id,
            ref_id: "amVsYXM=-1590491183046"
        }
                    
    }

    function requestMapperForStoreCadeb(responseBody) {
        return {
            nama: responseBody.data.name ? 1 : 2,
            tempat_lahir: responseBody.data.birthplace ? 1 : 2,
            tgl_lahir: responseBody.data.birthdate ? 1 : 2,
            alamat: responseBody.data.address,
            selfie_foto: responseBody.data.selfie_photo,
            trx_id: responseBody.trx_id,
            ref_id: responseBody.ref_id,
            limit_call: 1,
        }
    }

    function requestMapperForStorePasangan(responseBody) {
        return {
            nama: responseBody.data.name ? 1 : 2,
            tempat_lahir: responseBody.data.birthplace ? 1 : 2,
            tgl_lahir: responseBody.data.birthdate ? 1 : 2,
            alamat: responseBody.data.address,
            selfie_foto: responseBody.data.selfie_photo,
            trx_id: responseBody.trx_id,
            ref_id: responseBody.ref_id,
            limit_call: 1,
        }
    }

    function requestMapperForStoreNpwp(responseBody) {
        return {
            npwp: responseBody.data.npwp  ? 1 : 2,
            nik: responseBody.data.nik  ? 1 : 2,
            match_result: responseBody.data.match_result  ? 1 : 2,
            income: responseBody.data.income,
            nama: responseBody.data.name ? 1 : 2,
            tmp_lahir: responseBody.data.birthplace ? 1 : 2,
            tgl_lahir: responseBody.data.birthdate ? 1 : 2,
            trx_id: responseBody.trx_id,
            ref_id: responseBody.ref_id,
            limit_call: 1,
        }
    }

    function requestMapperForStoreProperti(responseBody) {
        return {
            property_address: responseBody.data.property_address,
            property_name: responseBody.data.property_name ? 1 : 2,
            property_building_area: responseBody.data.property_building_area ? 1 : 2,
            property_surface_area: responseBody.data.property_surface_area ? 1 : 2,
            property_estimation: responseBody.data.property_estimation,
            certificate_address: responseBody.data.certificate_address,
            certificate_id: responseBody.data.certificate_id ? 1 : 2,
            certificate_name: responseBody.data.certificate_name ? 1 : 2,
            certificate_type: responseBody.data.certificate_type ? 1 : 2,
            certificate_date: responseBody.data.certificate_date ? 1 : 2,
            trx_id: responseBody.trx_id,
            ref_id: responseBody.ref_id,
        }
    }

    function requestMapperForUpdateCadeb(responseBody) {
        return {
            nama_cadeb: responseBody.data.name ? 1 : 2,
            tempat_lahir_cadeb: responseBody.data.birthplace ? 1 : 2,
            tgl_lahir_cadeb: responseBody.data.birthdate ? 1 : 2,
            alamat_cadeb: responseBody.data.address,
            selfie_foto_cadeb: responseBody.data.selfie_photo,
            trx_id_cadeb: responseBody.trx_id,
            ref_id_cadeb: responseBody.ref_id,
            limit_call_cadeb: 2
        }
    }

    function requestMapperForUpdatePasangan(responseBody) {
        return {
            nama_pasangan: responseBody.data.name ? 1 : 2,
            tempat_lahir_pasangan: responseBody.data.birthplace ? 1 : 2,
            tgl_lahir_pasangan: responseBody.data.birthdate ? 1 : 2,
            alamat_pasangan: responseBody.data.address,
            selfie_foto_pasangan: responseBody.data.selfie_photo,
            trx_id_pasangan: responseBody.trx_id,
            ref_id_pasangan: responseBody.ref_id,
            limit_call_pasangan: 2
        }
    }

    function requestMapperForUpdateNpwp(responseBody) {
        return {
            npwp_pendapatan: responseBody.data.npwp ? 1 : 2,
            nik_pendapatan: responseBody.data.nik ? 1 : 2,
            match_result_pendapatan: responseBody.data.match_result ? 1 : 2,
            nama_pendapatan: responseBody.data.name ? 1 : 2,
            tmp_lahir_pendapatan: responseBody.data.birthplace ? 1 : 2,
            tgl_lahir_pendapatan: responseBody.data.birthdate ? 1 : 2,
            trx_id_pendapatan: responseBody.trx_id,
            ref_id_pendapatan: responseBody.ref_id,
            limit_call_npwp: 2
        }
    }

    $(function(){
        
        hide_all = function(){
            $('#lihat_data_credit').hide();
            $('#lihat_detail').hide();
            $('#edit_detail').hide();
        };

        hide_all();

        $('#lihat_data_credit').show();

        get_data = function(opts, id) {
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
            })
        }

        get_detail = function(opts, id) {
            var url = '<?php echo config_item('api_url') ?>api/master/verif/showVerif/';

            if (id != undefined) {
                url += id;
            }

            if (opts != undefined) {
                var data = opts;
            }

            return $.ajax({
                type: 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            })
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

        load_data_penjamin = function() {
            var id = $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val();
            get_data({}, id)
                .done(function(response) {
                    var data = response.data;
                    var htmlpenjamin1 = [];
                    var id_penjamin = {};
                    $.each(data.data_penjamin, function(index, item) {
                        var id_penjamin = [];
                        id_penjamin = item.id;

                        var tr = [

                            '<tr>',
                            '<td style="width:50px"><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_penjamin"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                            '<td style="width:210px">' + item.nama_ktp + '</td>',
                            '<td>' + item.no_ktp + '</td>',
                            '<td>' + item.no_npwp + '</td>',
                            '<td style="width:135px">' + item.tempat_lahir + '</td>',
                            '<td style="width:137px">' + item.tgl_lahir + '</td>',
                            '<td style="width:285px">' + item.alamat_ktp + '</td>',
                            '<td style="width:135px">' + item.pemasukan_penjamin + '</td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.foto_selfie_penjamin + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:100px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.foto_selfie_penjamin + '" /> </a> </td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:100px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" /> </a> </td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lampiran_npwp + '" data-lightbox="example-set" data-title="Lampiran KTP Debitur"><img class="thumbnail img-responsive" style="width:100px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lampiran_npwp + '" /> </a> </td>',
                            '</tr>'
                        ].join('\n');
                        htmlpenjamin1.push(tr);
                    })
                    $('#data_penjamin').html(htmlpenjamin1);
                })
        }

        load_data_lampiran = function() {
            var id = $('#form_debitur input[type=hidden][name=id_trans_so]').val();
            
            get_data({}, id)
                .done(function(response) {
                    var data = response.data;

                    var photo_selfie_deb = [];
                    var photo_ktp_deb = [];
                    var photo_npwp_deb = [];
                    var photo_selfie_pas = [];
                    var photo_ktp_pas = [];
                    var photo_npwp_pas = [];

                    var selfie_deb = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '" data-lightbox="example-set" data-title="Photo Debitur"><img id="img_photo_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '" /> </a>'
                    ].join('\n');
                    photo_selfie_deb.push(selfie_deb);
                    $('#gambar_photo_deb').html(photo_selfie_deb);

                    var ktp_deb = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" /> </a>'
                    ].join('\n');
                    photo_ktp_deb.push(ktp_deb);
                    $('#gambar_ktp_deb').html(photo_ktp_deb);

                    var npwp_deb = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" data-lightbox="example-set" data-title="NPWP Debitur"><img id="img_npwp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" /> </a>'
                    ].join('\n');
                    photo_npwp_deb.push(npwp_deb);
                    $('#gambar_npwp_deb').html(photo_npwp_deb);

                    var selfie_pas = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" data-lightbox="example-set" data-title="Photo Pasangan"><img id="img_photo_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" /> </a>'
                    ].join('\n');
                    photo_selfie_pas.push(selfie_pas);
                    $('#gambar_photo_pas').html(photo_selfie_pas);

                    var ktp_pas = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="KTP Pasangan"><img id="img_ktp_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                    ].join('\n');
                    photo_ktp_pas.push(ktp_pas);
                    $('#gambar_ktp_pas').html(photo_ktp_pas);

                    var npwp_pas = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lampiran_npwp + '" data-lightbox="example-set" data-title="NPWP Pasangan"><img id="img_npwp_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lampiran_npwp + '" /> </a>'
                    ].join('\n');
                    photo_npwp_pas.push(npwp_pas);
                    $('#gambar_npwp_pas').html(photo_npwp_pas);

                })
            .fail(function(response) {
               bootbox.alert("Gagal Menampilkan Lampiran!!!");
            });
        }

        load_data_agunan = function() {
            var id = $('#form_debitur input[type=hidden][name=id_trans_so]').val();

            get_data({}, id)
                .done(function(response) {
                    var data = response.data.data_agunan.agunan_tanah;
                    console.log(data);
                    var html = [];
                    var no = 0;

                    $.each(data, function(index, item) {
                        no++;
                        var tr = [
                            '<tr>',
                                '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                                '<td>' + no + '</td>',
                                '<td>' + item.nop + '</td>',
                                '<td>' + item.luas_bangunan + '</td>',
                                '<td>' + item.luas_tanah + '</td>',
                                '<td>' + item.no_sertifikat + '</td>',
                                '<td>' + item.nama_pemilik_sertifikat + '</td>',
                                '<td>' + item.jenis_sertifikat + '</td>',
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

        httpRequestBuilder = function(data, url, id, httpMethod) {
            var baseUrl = '<?php echo config_item('api_url') ?>';
            baseUrl += url;

            if (id != undefined) {
                baseUrl += id;
            }

            return $.ajax({
                type: httpMethod,
                url: baseUrl,
                data: data,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            })
        }

        $('#data_verifikasi').on('click', '.edit', function(e) {
            e.preventDefault();
            
            var id = $(this).attr('data');
            var html_deb = [];
            var html_pas = [];
            var html_npwp = [];
            var html_npwp_pas = [];
            var html_pen_1 = [];
            var html_pen_2 = [];
            var html_pen_3 = [];
            var html_pen_4 = [];
            var html_pen_5 = [];
            var html_properti_1 = [];
            var html_properti_2 = [];
            var html_properti_3 = [];
            var html_properti_4 = [];
            var html_properti_5 = [];
            var html_report = [];

            var jabatan = '<?php echo $nama_user['data']['jabatan'] ?>';
            if (jabatan == 'ADMIN LEGAL') {
                click_detail();
                $('#form_properti_1').show();
                $('#form_properti_2').show();
                $('#form_properti_3').show();
                $('#form_properti_4').show();
                $('#form_properti_5').show();
                $('.verifikasiProperti').show();
            } else if (jabatan == 'IT STAFF' || jabatan == 'SUPERVISOR IT' || jabatan == 'HEAD IT') {
                $('#form_properti_1').show();
                $('#form_properti_2').show();
                $('#form_properti_3').show();
                $('#form_properti_4').show();
                $('#form_properti_5').show();
                $('.verifikasiProperti').show();
            } else {
                $('#form_properti_1').hide();
                $('#form_properti_2').hide();
                $('#form_properti_3').hide();
                $('#form_properti_4').hide();
                $('#form_properti_5').hide();
            }

            get_data({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    var data_debitur = [
                        '<tr>',
                            '<td>Foto KTP Debitur</td>',
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '"><img style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Debitur</td>',
                            '<td name="selfie_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"><img id="photo_selfie_debitur" style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"</img></a></td>',
                            '<td id="selfie_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id="nik">' + data.data_debitur.no_ktp + '</td>',
                            '<td id="nik_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap</td>',
                            '<td name="name" id="name">' + data.data_debitur.nama_lengkap + '</td>',
                            '<td id="name_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir</td>',
                            '<td name="birthplace" id="birthplace">' + data.data_debitur.tempat_lahir + '</td>',
                            '<td id=birthplace_result></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tanggal Lahir</td>',
                            '<td name="birthdate" id="birthdate">' + formatTanggal(data.data_debitur.tgl_lahir) + '</td>',
                            '<td id="birthdate_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Alamat</td>',
                            '<td name="address" id="address">' + data.data_debitur.alamat_ktp.alamat_singkat + '</td>',
                            '<td id="address_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_deb.push(data_debitur);
                    $("#data_debitur").html(html_deb);

                    var data_pasangan = [
                        '<tr>',
                            '<td>Foto KTP Pasangan</td>',
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '"><img style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Pasangan</td>',
                            '<td name="selfie_photo"  id="selfie_photo_pasangan"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '"><img id="photo_selfie_pasangan" style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" </img></a></td>',
                            '<td id="selfie_photo_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id="nik_pasangan">' + data.data_pasangan.no_ktp + '</td>',
                            '<td id="nik_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap</td>',
                            '<td name="name" id="name_pasangan">' + data.data_pasangan.nama_lengkap + '</td>',
                            '<td id="name_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir</td>',
                            '<td name="birthplace" id="birthplace_pasangan">' + data.data_pasangan.tempat_lahir + '</td>',
                            '<td id=birthplace_pasangan_result></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tanggal Lahir</td>',
                            '<td name="birthdate" id="birthdate_pasangan">' + data.data_pasangan.tgl_lahir + '</td>',
                            '<td id="birthdate_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Alamat</td>',
                            '<td name="address_pasangan" id="address_pasangan">' + data.data_pasangan.alamat_ktp + '</td>',
                            '<td id="address_pasangan_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_pas.push(data_pasangan);
                    $("#data_pasangan").html(html_pas);

                    if(data.data_penjamin.length == 1){
                        $('#form_penjamin_2').hide();
                        $('#form_penjamin_3').hide();
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            '<tr>',
                                '<td>Foto KTP Penjamin</td>',
                                '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_penjamin[0].lampiran.lamp_ktp + '"><img style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_penjamin[0].lampiran.lamp_ktp + '" </img></a></td>',
                                '<td id="ktp_photo_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Foto Selfie Penjamin</td>',
                                '<td name="selfie_photo_penjamin"  id="selfie_photo_penjamin"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_penjamin[0].lampiran.foto_selfie_penjamin + '"><img id="photo_selfie_penjamin" style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_penjamin.lampiran[0].foto_selfie_penjamin + '" </img></a></td>',
                                '<td id="selfie_photo_penjamin_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);
                    } else if (data.data_penjamin.length == 2) {
                        $('#form_penjamin_3').hide();
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);
                    } else if (data.data_penjamin.length == 3) {
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);

                        var data_penjamin_3 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_3">' + data.data_penjamin[2].no_ktp + '</td>',
                                '<td id="nik_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_3">' + data.data_penjamin[2].nama_ktp + '</td>',
                                '<td id="name_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_3">' + data.data_penjamin[2].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_3">' + data.data_penjamin[2].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_3" id="address_penjamin_3">' + data.data_penjamin[2].alamat_ktp + '</td>',
                                '<td id="address_penjamin_3_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_3.push(data_penjamin_3);
                        $("#data_penjamin_3").html(html_pen_3);
                    } else if (data.data_penjamin.length == 4) {
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);

                        var data_penjamin_3 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_3">' + data.data_penjamin[2].no_ktp + '</td>',
                                '<td id="nik_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_3">' + data.data_penjamin[2].nama_ktp + '</td>',
                                '<td id="name_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_3">' + data.data_penjamin[2].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_3">' + data.data_penjamin[2].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_3" id="address_penjamin_3">' + data.data_penjamin[2].alamat_ktp + '</td>',
                                '<td id="address_penjamin_3_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_3.push(data_penjamin_3);
                        $("#data_penjamin_3").html(html_pen_3);

                        var data_penjamin_4 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_4">' + data.data_penjamin[3].no_ktp + '</td>',
                                '<td id="nik_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_4">' + data.data_penjamin[3].nama_ktp + '</td>',
                                '<td id="name_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_4">' + data.data_penjamin[3].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_4">' + data.data_penjamin[3].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_4" id="address_penjamin_4">' + data.data_penjamin[3].alamat_ktp + '</td>',
                                '<td id="address_penjamin_4_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_4.push(data_penjamin_4);
                        $("#data_penjamin_4").html(html_pen_4);
                    } else if (data.data_penjamin.length == 5) {
                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);

                        var data_penjamin_3 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_3">' + data.data_penjamin[2].no_ktp + '</td>',
                                '<td id="nik_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_3">' + data.data_penjamin[2].nama_ktp + '</td>',
                                '<td id="name_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_3">' + data.data_penjamin[2].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_3">' + data.data_penjamin[2].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_3" id="address_penjamin_3">' + data.data_penjamin[2].alamat_ktp + '</td>',
                                '<td id="address_penjamin_3_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_3.push(data_penjamin_3);
                        $("#data_penjamin_3").html(html_pen_3);

                        var data_penjamin_4 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_4">' + data.data_penjamin[3].no_ktp + '</td>',
                                '<td id="nik_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_4">' + data.data_penjamin[3].nama_ktp + '</td>',
                                '<td id="name_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_4">' + data.data_penjamin[3].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_4">' + data.data_penjamin[3].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_4" id="address_penjamin_4">' + data.data_penjamin[3].alamat_ktp + '</td>',
                                '<td id="address_penjamin_4_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_4.push(data_penjamin_4);
                        $("#data_penjamin_4").html(html_pen_4);

                        var data_penjamin_5 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_5">' + data.data_penjamin[4].no_ktp + '</td>',
                                '<td id="nik_penjamin_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_5">' + data.data_penjamin[4].nama_ktp + '</td>',
                                '<td id="name_penjamin_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_5">' + data.data_penjamin[4].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_5">' + data.data_penjamin[4].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_5" id="address_penjamin_5">' + data.data_penjamin[4].alamat_ktp + '</td>',
                                '<td id="address_penjamin_5_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_5.push(data_penjamin_5);
                        $("#data_penjamin_5").html(html_pen_5);
                    } else {
                        $('#form_penjamin_1').hide();
                        $('#form_penjamin_2').hide();
                        $('#form_penjamin_3').hide();
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();
                    }

                    var data_npwp = [
                        '<tr>',
                            '<td>Foto NPWP</td>',
                            '<td name="npwp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '"><img style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" </img></a></td>',
                            '<td id="npwp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>No. NPWP</td>',
                            '<td name="npwp" id="no_npwp">' + data.data_debitur.no_npwp + '</td>',
                            '<td id="npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id="nik">' + data.data_debitur.no_ktp + '</td>',
                            '<td id="nik_npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td colspan="2">Match Result</td>',
                            '<td id="match_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap berdasarkan NPWP</td>',
                            '<td name="name_npwp" id="name_npwp">' + data.data_debitur.nama_lengkap + '</td>',
                            '<td id="name_npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir berdasarkan NPWP</td>',
                            '<td name="birthplace_npwp" id="birthplace_npwp">' + data.data_debitur.tempat_lahir + '</td>',
                            '<td id=birthplace_npwp_result></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tanggal Lahir berdasarkan NPWP</td>',
                            '<td name="birthdate_npwp" id="birthdate_npwp"> ' + formatTanggal(data.data_debitur.tgl_lahir) + '</td>',
                            '<td id="birthdate_npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Pendapatan Bulanan</td>',
                            '<td name="income_npwp" id="income_npwp">' + data.kapasitas_bulanan.pemasukan_cadebt + '</td>',
                            '<td id="income_npwp_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_npwp.push(data_npwp);
                    $("#data_npwp").html(html_npwp);

                    var data_npwp_pas = [

                        '<tr>',
                            '<td>No. NPWP</td>',
                            '<td name="npwp_pas" id="no_npwp_pas">' + data.data_pasangan.no_npwp + '</td>',
                            '<td id="npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik_pas" id="nik_pas">' + data.data_pasangan.no_ktp + '</td>',
                            '<td id="nik_npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td colspan="2">Match Result</td>',
                            '<td id="match_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap berdasarkan NPWP</td>',
                            '<td name="name_npwp_pas" id="name_npwp_pas">' + data.data_pasangan.nama_lengkap + '</td>',
                            '<td id="name_npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir berdasarkan NPWP</td>',
                            '<td name="birthplace_npwp_pas" id="birthplace_npwp_pas">' + data.data_pasangan.tempat_lahir + '</td>',
                            '<td id=birthplace_npwp_pas_result></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tanggal Lahir berdasarkan NPWP</td>',
                            '<td name="birthdate_npwp_pas" id="birthdate_npwp_pas"> ' + data.data_pasangan.tgl_lahir + '</td>',
                            '<td id="birthdate_npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Pendapatan Bulanan</td>',
                            '<td name="income_npwp_pas" id="income_npwp_pas">' + data.kapasitas_bulanan.pemasukan_pasangan + '</td>',
                            '<td id="income_npwp_pas_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_npwp_pas.push(data_npwp_pas);
                    $("#data_npwp_pasangan").html(html_npwp_pas);
                        
                    if(data.data_agunan.agunan_tanah.length == 1) {
                        $('#form_properti_2').hide();
                        $('#form_properti_3').hide();
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);
                    } else if(data.data_agunan.agunan_tanah.length == 2) {
                        $('#form_properti_3').hide();
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);
                        
                    } else if (data.data_agunan.agunan_tanah.length == 3) {
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);

                        var data_properti_3 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_3" id="nop_3">' + data.data_agunan.agunan_tanah[2].nop + '</td>',
                                '<td id="nop_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_3" id="property_name_3">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_3" id="property_building_area_3">' + data.data_agunan.agunan_tanah[2].luas_bangunan + '</td>',
                                '<td id="property_building_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_3" id="property_surface_area_3">' + data.data_agunan.agunan_tanah[2].luas_tanah + '</td>',
                                '<td id="property_surface_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_3" id="property_estimation_3">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_3" id="certificate_id_3">' + data.data_agunan.agunan_tanah[2].no_sertifikat + '</td>',
                                '<td id=certificate_id_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_3" id="certificate_name_3">' + data.data_agunan.agunan_tanah[2].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_3" id="certificate_type_3">' + data.data_agunan.agunan_tanah[2].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_3" id="certificate_date_3">' + formatTanggal(data.data_agunan.agunan_tanah[2].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_3_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_3.push(data_properti_3);
                        $("#data_properti_3").html(html_properti_3);
                    } else if (data.data_agunan.agunan_tanah.length == 4) {
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);

                        var data_properti_3 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_3" id="nop_3">' + data.data_agunan.agunan_tanah[2].nop + '</td>',
                                '<td id="nop_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_3" id="property_name_3">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_3" id="property_building_area_3">' + data.data_agunan.agunan_tanah[2].luas_bangunan + '</td>',
                                '<td id="property_building_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_3" id="property_surface_area_3">' + data.data_agunan.agunan_tanah[2].luas_tanah + '</td>',
                                '<td id="property_surface_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_3" id="property_estimation_3">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_3" id="certificate_id_3">' + data.data_agunan.agunan_tanah[2].no_sertifikat + '</td>',
                                '<td id=certificate_id_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_3" id="certificate_name_3">' + data.data_agunan.agunan_tanah[2].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_3" id="certificate_type_3">' + data.data_agunan.agunan_tanah[2].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_3" id="certificate_date_3">' + formatTanggal(data.data_agunan.agunan_tanah[2].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_3_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_3.push(data_properti_3);
                        $("#data_properti_3").html(html_properti_3);

                        var data_properti_4 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_4" id="nop_4">' + data.data_agunan.agunan_tanah[3].nop + '</td>',
                                '<td id="nop_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_4" id="property_name_4">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_4" id="property_building_area_4">' + data.data_agunan.agunan_tanah[3].luas_bangunan + '</td>',
                                '<td id="property_building_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_4" id="property_surface_area_4">' + data.data_agunan.agunan_tanah[3].luas_tanah + '</td>',
                                '<td id="property_surface_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_4" id="property_estimation_4">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_4" id="certificate_id_4">' + data.data_agunan.agunan_tanah[3].no_sertifikat + '</td>',
                                '<td id=certificate_id_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_4" id="certificate_name_4">' + data.data_agunan.agunan_tanah[3].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_4" id="certificate_type_4">' + data.data_agunan.agunan_tanah[3].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_4" id="certificate_date_4">' + formatTanggal(data.data_agunan.agunan_tanah[3].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_4_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_4.push(data_properti_4);
                        $("#data_properti_4").html(html_properti_4);
                    } else if (data.data_agunan.agunan_tanah.length == 5) {
                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);

                        var data_properti_3 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_3" id="nop_3">' + data.data_agunan.agunan_tanah[2].nop + '</td>',
                                '<td id="nop_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_3" id="property_name_3">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_3" id="property_building_area_3">' + data.data_agunan.agunan_tanah[2].luas_bangunan + '</td>',
                                '<td id="property_building_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_3" id="property_surface_area_3">' + data.data_agunan.agunan_tanah[2].luas_tanah + '</td>',
                                '<td id="property_surface_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_3" id="property_estimation_3">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_3" id="certificate_id_3">' + data.data_agunan.agunan_tanah[2].no_sertifikat + '</td>',
                                '<td id=certificate_id_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_3" id="certificate_name_3">' + data.data_agunan.agunan_tanah[2].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_3" id="certificate_type_3">' + data.data_agunan.agunan_tanah[2].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_3" id="certificate_date_3">' + formatTanggal(data.data_agunan.agunan_tanah[2].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_3_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_3.push(data_properti_3);
                        $("#data_properti_3").html(html_properti_3);

                        var data_properti_4 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_4" id="nop_4">' + data.data_agunan.agunan_tanah[3].nop + '</td>',
                                '<td id="nop_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_4" id="property_name_4">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_4" id="property_building_area_4">' + data.data_agunan.agunan_tanah[3].luas_bangunan + '</td>',
                                '<td id="property_building_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_4" id="property_surface_area_4">' + data.data_agunan.agunan_tanah[3].luas_tanah + '</td>',
                                '<td id="property_surface_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_4" id="property_estimation_4">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_4" id="certificate_id_4">' + data.data_agunan.agunan_tanah[3].no_sertifikat + '</td>',
                                '<td id=certificate_id_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_4" id="certificate_name_4">' + data.data_agunan.agunan_tanah[3].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_4" id="certificate_type_4">' + data.data_agunan.agunan_tanah[3].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_4" id="certificate_date_4">' + formatTanggal(data.data_agunan.agunan_tanah[3].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_4_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_4.push(data_properti_4);
                        $("#data_properti_4").html(html_properti_4);

                        var data_properti_5 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_5" id="nop_5">' + data.data_agunan.agunan_tanah[4].nop + '</td>',
                                '<td id="nop_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_5" id="property_name_5">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_5" id="property_building_area_5">' + data.data_agunan.agunan_tanah[4].luas_bangunan + '</td>',
                                '<td id="property_building_area_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_5" id="property_surface_area_5">' + data.data_agunan.agunan_tanah[4].luas_tanah + '</td>',
                                '<td id="property_surface_area_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_5" id="property_estimation_5">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_5" id="certificate_id_5">' + data.data_agunan.agunan_tanah[4].no_sertifikat + '</td>',
                                '<td id=certificate_id_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_5" id="certificate_name_5">' + data.data_agunan.agunan_tanah[4].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_5" id="certificate_type_5">' + data.data_agunan.agunan_tanah[4].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_5" id="certificate_date_5">' + formatTanggal(data.data_agunan.agunan_tanah[4].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_5_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_5.push(data_properti_5);
                        $("#data_properti_5").html(html_properti_5);
                    } else {
                        $('#form_properti_2').hide();
                        $('#form_properti_3').hide();
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td colspan="3" style="text-align: center">Tidak ada agunan!</td>',
                            '</tr>',
                            ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);
                    }
                    
                    var data_report = [
                        '<tr>',
                            '<td>No. SO</td>',
                            '<td name="no_so" id="no_so">' + data.nomor_so + '</td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama SO</td>',
                            '<td name="nama_so" id="nama_so">' + data.nama_so + '</td>',
                        '</tr>',
                        '<tr>',
                            '<td>PIC</td>',
                            '<td name="pic" id="pic">' + data.pic.nama + '</td>',
                        '</tr>',
                        '<tr>',
                            '<td>Sisa Verifikasi Debitur</td>',
                            '<td name="sisa_deb" id="sisa_deb"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Sisa Verifikasi Pasangan</td>',
                            '<td name="sisa_pas" id="sisa_pas"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Sisa Verifikasi NPWP Debitur</td>',
                            '<td name="sisa_npwp" id="sisa_npwp"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Sisa Verifikasi NPWP Pasangan</td>',
                            '<td name="sisa_npwp_pas" id="sisa_npwp_pas"></td>',
                        '</tr>',
                    ].join('\n');
                    html_report.push(data_report);
                    $("#data_report").html(html_report);
                        
                get_detail({}, id)
                    .done(function(response) {
                        var data = response.data;
                        console.log(data);

                        if (jabatan == 'ADMIN LEGAL') {
                            if (data[3] == null) {
                                $("#verifikasi_properti").on('click', function() {
                                    verifikasiSimpanProperti(true, id);
                                });
                            } else {
                                if (data[3].limit_call == 1) {
                                    $("#verifikasi_properti").on('click', function() {
                                        verifikasiUpdateProperti();
                                    });
                                } else {
                                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Properti!!");
                                }
                            }

                        } else {
                            if(jabatan == 'IT STAFF' || jabatan == 'SUPERVISOR IT' || jabatan == 'HEAD IT') {
                                if (data[3] == null) {
                                    $("#verifikasi_properti").on('click', function() {
                                        verifikasiSimpanProperti(true, id);
                                    });
                                } else {
                                    if (data[3].limit_call == 1) {
                                        $("#verifikasi_properti").on('click', function() {
                                            verifikasiUpdateProperti();
                                        });
                                    } else {
                                        bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Properti!!");
                                    }
                                }
                            }

                            if (data[0] == null) {
                                $("#verifikasi_debitur").on('click', function() {
                                    verifikasiSimpanDebitur(true, id);
                                });
                                $("#sisa_deb").html("2");
                            } else {
                                if (data[0].limit_call == 1) {
                                    $("#verifikasi_debitur").on('click', function() {
                                        verifikasiUpdateDebitur(true, data[0].limit_call, id);
                                    });
                                    $("#sisa_deb").html(`${data[0].limit_call}`);
                                } else {
                                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Debitur!!"); 
                                    $("#sisa_deb").html("0");
                                }
                            }
                            
                            if (data[1] == null) {
                                $("#verifikasi_pasangan").on('click', function() {
                                    verifikasiSimpanPasangan(true, id);
                                });
                                $("#sisa_pas").html("2");
                            } else {
                                if (data[1].limit_call == 1) {
                                    $("#verifikasi_pasangan").on('click', function() {
                                        verifikasiUpdatePasangan(true, data[1].limit_call, id);
                                    });
                                    $("#sisa_pas").html(`${data[1].limit_call}`);
                                } else {
                                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Pasangan!!"); 
                                    $("#sisa_pas").html("0");
                                }
                            }
        
                            if (data[2] == null) {
                                $("#verifikasi_npwp").on('click', function() {
                                    verifikasiSimpanNpwp(true, id);
                                });
                                $("#sisa_npwp").html("2");
                            } else {
                                if (data[2].limit_call == 1) {
                                    $("#verifikasi_npwp").on('click', function() {
                                        verifikasiUpdateNpwp(true, data[2].limit_call, id);
                                    });
                                    $("#sisa_npwp").html(`${data[2].limit_call}`);
                                } else {
                                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi NPWP!!"); 
                                    $("#sisa_npwp").html("0");
                                }
                            }
                        }      
                    })

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                })

            $('#lihat_data_credit').hide();
            $('#lihat_detail').show();
        }); 

        $('#data_verifikasi').on('click', '.detail', function(e) {
            e.preventDefault();

            var id = $(this).attr('data');
            var html_deb = [];
            var html_pas = [];
            var html_npwp = [];
            var html_npwp_pas = [];
            var html_pen_1 = [];
            var html_pen_2 = [];
            var html_pen_3 = [];
            var html_pen_4 = [];
            var html_pen_5 = [];
            var html_properti_1 = [];
            var html_properti_2 = [];
            var html_properti_3 = [];
            var html_properti_4 = [];
            var html_properti_5 = [];
            
            get_data({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    $('#form_report').hide();

                    var data_debitur = [
                        '<tr>',
                            '<td>Foto KTP Debitur</td>',
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '"><img style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Debitur</td>',
                            '<td name="selfie_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"><img id="photo_selfie_debitur" style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"</img></a></td>',
                            '<td id="selfie_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id="nik">' + data.data_debitur.no_ktp + '</td>',
                            '<td id="nik_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap</td>',
                            '<td name="name" id="name">' + data.data_debitur.nama_lengkap + '</td>',
                            '<td id="name_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir</td>',
                            '<td name="birthplace" id="birthplace">' + data.data_debitur.tempat_lahir + '</td>',
                            '<td id=birthplace_result></td>',
                        '</tr>',
                        '<tr>',
                             '<td>Tanggal Lahir</td>',
                            '<td name="birthdate" id="birthdate">' + formatTanggal(data.data_debitur.tgl_lahir) + '</td>',
                            '<td id="birthdate_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Alamat</td>',
                            '<td name="address" id="address">' + data.data_debitur.alamat_ktp.alamat_singkat + '</td>',
                            '<td id="address_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_deb.push(data_debitur);
                    $("#data_debitur").html(html_deb);

                    var data_pasangan = [
                        '<tr>',
                            '<td>Foto KTP Pasangan</td>',
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '"><img style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Pasangan</td>',
                            '<td name="selfie_photo"  id="selfie_photo_pasangan"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '"><img id="photo_selfie_pasangan" style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" </img></a></td>',
                            '<td id="selfie_photo_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id="nik_pasangan">' + data.data_pasangan.no_ktp + '</td>',
                            '<td id="nik_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap</td>',
                            '<td name="name" id="name_pasangan">' + data.data_pasangan.nama_lengkap + '</td>',
                            '<td id="name_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir</td>',
                            '<td name="birthplace" id="birthplace_pasangan">' + data.data_pasangan.tempat_lahir + '</td>',
                            '<td id=birthplace_pasangan_result></td>',
                        '</tr>',
                        '<tr>',
                             '<td>Tanggal Lahir</td>',
                            '<td name="birthdate" id="birthdate_pasangan">' + data.data_pasangan.tgl_lahir + '</td>',
                            '<td id="birthdate_pasangan_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Alamat</td>',
                            '<td name="address_pasangan" id="address_pasangan">' + data.data_pasangan.alamat_ktp + '</td>',
                            '<td id="address_pasangan_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_pas.push(data_pasangan);
                    $("#data_pasangan").html(html_pas);

                    if(data.data_penjamin.length == 1){
                        $('#form_penjamin_2').hide();
                        $('#form_penjamin_3').hide();
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);
                    } else if (data.data_penjamin.length == 2) {
                        $('#form_penjamin_3').hide();
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);
                    } else if (data.data_penjamin.length == 3) {
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);

                        var data_penjamin_3 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_3">' + data.data_penjamin[2].no_ktp + '</td>',
                                '<td id="nik_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_3">' + data.data_penjamin[2].nama_ktp + '</td>',
                                '<td id="name_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_3">' + data.data_penjamin[2].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_3">' + data.data_penjamin[2].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_3" id="address_penjamin_3">' + data.data_penjamin[2].alamat_ktp + '</td>',
                                '<td id="address_penjamin_3_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_3.push(data_penjamin_3);
                        $("#data_penjamin_3").html(html_pen_3);
                    } else if (data.data_penjamin.length == 4) {
                        $('#form_penjamin_5').hide();

                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);

                        var data_penjamin_3 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_3">' + data.data_penjamin[2].no_ktp + '</td>',
                                '<td id="nik_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_3">' + data.data_penjamin[2].nama_ktp + '</td>',
                                '<td id="name_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_3">' + data.data_penjamin[2].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_3">' + data.data_penjamin[2].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_3" id="address_penjamin_3">' + data.data_penjamin[2].alamat_ktp + '</td>',
                                '<td id="address_penjamin_3_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_3.push(data_penjamin_3);
                        $("#data_penjamin_3").html(html_pen_3);

                        var data_penjamin_4 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_4">' + data.data_penjamin[3].no_ktp + '</td>',
                                '<td id="nik_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_4">' + data.data_penjamin[3].nama_ktp + '</td>',
                                '<td id="name_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_4">' + data.data_penjamin[3].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_4">' + data.data_penjamin[3].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_4" id="address_penjamin_4">' + data.data_penjamin[3].alamat_ktp + '</td>',
                                '<td id="address_penjamin_4_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_4.push(data_penjamin_4);
                        $("#data_penjamin_4").html(html_pen_4);
                    } else if (data.data_penjamin.length == 5) {
                        var data_penjamin_1 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_1">' + data.data_penjamin[0].no_ktp + '</td>',
                                '<td id="nik_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_1">' + data.data_penjamin[0].nama_ktp + '</td>',
                                '<td id="name_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_1">' + data.data_penjamin[0].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_1">' + data.data_penjamin[0].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_1" id="address_penjamin_1">' + data.data_penjamin[0].alamat_ktp + '</td>',
                                '<td id="address_penjamin_1_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_1.push(data_penjamin_1);
                        $("#data_penjamin_1").html(html_pen_1);

                        var data_penjamin_2 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_2">' + data.data_penjamin[1].no_ktp + '</td>',
                                '<td id="nik_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_2">' + data.data_penjamin[1].nama_ktp + '</td>',
                                '<td id="name_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_2">' + data.data_penjamin[1].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_2">' + data.data_penjamin[1].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_2" id="address_penjamin_2">' + data.data_penjamin[1].alamat_ktp + '</td>',
                                '<td id="address_penjamin_2_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_2.push(data_penjamin_2);
                        $("#data_penjamin_2").html(html_pen_2);

                        var data_penjamin_3 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_3">' + data.data_penjamin[2].no_ktp + '</td>',
                                '<td id="nik_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_3">' + data.data_penjamin[2].nama_ktp + '</td>',
                                '<td id="name_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_3">' + data.data_penjamin[2].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_3">' + data.data_penjamin[2].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_3" id="address_penjamin_3">' + data.data_penjamin[2].alamat_ktp + '</td>',
                                '<td id="address_penjamin_3_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_3.push(data_penjamin_3);
                        $("#data_penjamin_3").html(html_pen_3);

                        var data_penjamin_4 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_4">' + data.data_penjamin[3].no_ktp + '</td>',
                                '<td id="nik_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_4">' + data.data_penjamin[3].nama_ktp + '</td>',
                                '<td id="name_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_4">' + data.data_penjamin[3].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_4">' + data.data_penjamin[3].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_4" id="address_penjamin_4">' + data.data_penjamin[3].alamat_ktp + '</td>',
                                '<td id="address_penjamin_4_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_4.push(data_penjamin_4);
                        $("#data_penjamin_4").html(html_pen_4);

                        var data_penjamin_5 = [
                            
                            '<tr>',
                                '<td>NIK</td>',
                                '<td name="nik" id="nik_penjamin_5">' + data.data_penjamin[4].no_ktp + '</td>',
                                '<td id="nik_penjamin_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Lengkap</td>',
                                '<td name="name" id="name_penjamin_5">' + data.data_penjamin[4].nama_ktp + '</td>',
                                '<td id="name_penjamin_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tempat Lahir</td>',
                                '<td name="birthplace" id="birthplace_penjamin_5">' + data.data_penjamin[4].tempat_lahir + '</td>',
                                '<td id=birthplace_penjamin_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Lahir</td>',
                                '<td name="birthdate" id="birthdate_penjamin_5">' + data.data_penjamin[4].tgl_lahir + '</td>',
                                '<td id="birthdate_penjamin_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Alamat</td>',
                                '<td name="address_penjamin_5" id="address_penjamin_5">' + data.data_penjamin[4].alamat_ktp + '</td>',
                                '<td id="address_penjamin_5_result"></td>',
                            '</tr>'
                        ].join('\n');
                        html_pen_5.push(data_penjamin_5);
                        $("#data_penjamin_5").html(html_pen_5);
                    } else {
                        $('#form_penjamin_1').hide();
                        $('#form_penjamin_2').hide();
                        $('#form_penjamin_3').hide();
                        $('#form_penjamin_4').hide();
                        $('#form_penjamin_5').hide();
                    }

                    var data_npwp = [
                        '<tr>',
                            '<td>Foto NPWP</td>',
                            '<td name="npwp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '"><img style="width: 30%" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" </img></a></td>',
                            '<td id="npwp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>No. NPWP</td>',
                            '<td name="npwp" id="no_npwp">' + data.data_debitur.no_npwp + '</td>',
                            '<td id="npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id="nik">' + data.data_debitur.no_ktp + '</td>',
                            '<td id="nik_npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td colspan="2">Match Result</td>',
                            '<td id="match_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap berdasarkan NPWP</td>',
                            '<td name="name_npwp" id="name_npwp">' + data.data_debitur.nama_lengkap + '</td>',
                            '<td id="name_npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir berdasarkan NPWP</td>',
                            '<td name="birthplace_npwp" id="birthplace_npwp">' + data.data_debitur.tempat_lahir + '</td>',
                            '<td id=birthplace_npwp_result></td>',
                        '</tr>',
                        '<tr>',
                             '<td>Tanggal Lahir berdasarkan NPWP</td>',
                            '<td name="birthdate_npwp" id="birthdate_npwp"> ' + formatTanggal(data.data_debitur.tgl_lahir) + '</td>',
                            '<td id="birthdate_npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                             '<td>Pendapatan Bulanan</td>',
                            '<td name="income_npwp" id="income_npwp">' + data.kapasitas_bulanan.pemasukan_cadebt + '</td>',
                            '<td id="income_npwp_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_npwp.push(data_npwp);
                    $("#data_npwp").html(html_npwp);

                    var data_npwp_pas = [

                        '<tr>',
                            '<td>No. NPWP</td>',
                            '<td name="npwp_pas" id="no_npwp_pas">' + data.data_pasangan.no_npwp + '</td>',
                            '<td id="npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik_pas" id="nik_pas">' + data.data_pasangan.no_ktp + '</td>',
                            '<td id="nik_npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td colspan="2">Match Result</td>',
                            '<td id="match_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Nama Lengkap berdasarkan NPWP</td>',
                            '<td name="name_npwp_pas" id="name_npwp_pas">' + data.data_pasangan.nama_lengkap + '</td>',
                            '<td id="name_npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tempat Lahir berdasarkan NPWP</td>',
                            '<td name="birthplace_npwp_pas" id="birthplace_npwp_pas">' + data.data_pasangan.tempat_lahir + '</td>',
                            '<td id=birthplace_npwp_pas_result></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Tanggal Lahir berdasarkan NPWP</td>',
                            '<td name="birthdate_npwp_pas" id="birthdate_npwp_pas"> ' + data.data_pasangan.tgl_lahir + '</td>',
                            '<td id="birthdate_npwp_pas_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Pendapatan Bulanan</td>',
                            '<td name="income_npwp_pas" id="income_npwp_pas">' + data.kapasitas_bulanan.pemasukan_pasangan + '</td>',
                            '<td id="income_npwp_pas_result"></td>',
                        '</tr>'
                    ].join('\n');
                    html_npwp_pas.push(data_npwp_pas);
                    $("#data_npwp_pasangan").html(html_npwp_pas);

                    if(data.data_agunan.agunan_tanah.length == 1) {
                        $('#form_properti_2').hide();
                        $('#form_properti_3').hide();
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);
                    } else if(data.data_agunan.agunan_tanah.length == 2) {
                        $('#form_properti_3').hide();
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);
                        
                    } else if (data.data_agunan.agunan_tanah.length == 3) {
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);

                        var data_properti_3 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_3" id="nop_3">' + data.data_agunan.agunan_tanah[2].nop + '</td>',
                                '<td id="nop_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_3" id="property_name_3">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_3" id="property_building_area_3">' + data.data_agunan.agunan_tanah[2].luas_bangunan + '</td>',
                                '<td id="property_building_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_3" id="property_surface_area_3">' + data.data_agunan.agunan_tanah[2].luas_tanah + '</td>',
                                '<td id="property_surface_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_3" id="property_estimation_3">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_3" id="certificate_id_3">' + data.data_agunan.agunan_tanah[2].no_sertifikat + '</td>',
                                '<td id=certificate_id_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_3" id="certificate_name_3">' + data.data_agunan.agunan_tanah[2].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_3" id="certificate_type_3">' + data.data_agunan.agunan_tanah[2].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_3" id="certificate_date_3">' + formatTanggal(data.data_agunan.agunan_tanah[2].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_3_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_3.push(data_properti_3);
                        $("#data_properti_3").html(html_properti_3);
                    } else if (data.data_agunan.agunan_tanah.length == 4) {
                        $('#form_properti_5').hide();

                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);

                        var data_properti_3 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_3" id="nop_3">' + data.data_agunan.agunan_tanah[2].nop + '</td>',
                                '<td id="nop_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_3" id="property_name_3">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_3" id="property_building_area_3">' + data.data_agunan.agunan_tanah[2].luas_bangunan + '</td>',
                                '<td id="property_building_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_3" id="property_surface_area_3">' + data.data_agunan.agunan_tanah[2].luas_tanah + '</td>',
                                '<td id="property_surface_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_3" id="property_estimation_3">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_3" id="certificate_id_3">' + data.data_agunan.agunan_tanah[2].no_sertifikat + '</td>',
                                '<td id=certificate_id_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_3" id="certificate_name_3">' + data.data_agunan.agunan_tanah[2].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_3" id="certificate_type_3">' + data.data_agunan.agunan_tanah[2].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_3" id="certificate_date_3">' + formatTanggal(data.data_agunan.agunan_tanah[2].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_3_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_3.push(data_properti_3);
                        $("#data_properti_3").html(html_properti_3);

                        var data_properti_4 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_4" id="nop_4">' + data.data_agunan.agunan_tanah[3].nop + '</td>',
                                '<td id="nop_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_4" id="property_name_4">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_4" id="property_building_area_4">' + data.data_agunan.agunan_tanah[3].luas_bangunan + '</td>',
                                '<td id="property_building_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_4" id="property_surface_area_4">' + data.data_agunan.agunan_tanah[3].luas_tanah + '</td>',
                                '<td id="property_surface_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_4" id="property_estimation_4">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_4" id="certificate_id_4">' + data.data_agunan.agunan_tanah[3].no_sertifikat + '</td>',
                                '<td id=certificate_id_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_4" id="certificate_name_4">' + data.data_agunan.agunan_tanah[3].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_4" id="certificate_type_4">' + data.data_agunan.agunan_tanah[3].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_4" id="certificate_date_4">' + formatTanggal(data.data_agunan.agunan_tanah[3].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_4_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_4.push(data_properti_4);
                        $("#data_properti_4").html(html_properti_4);
                    } else if (data.data_agunan.agunan_tanah.length == 5) {
                        var data_properti_1 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_1" id="nop_1">' + data.data_agunan.agunan_tanah[0].nop + '</td>',
                                '<td id="nop_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_1" id="property_name_1">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_1" id="property_building_area_1">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_1" id="property_surface_area_1">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_1" id="property_estimation_1">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_1_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_1" id="certificate_id_1">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_1" id="certificate_name_1">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_1" id="certificate_type_1">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_1_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_1" id="certificate_date_1">' + formatTanggal(data.data_agunan.agunan_tanah[0].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_1_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);

                        var data_properti_2 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_2" id="nop_2">' + data.data_agunan.agunan_tanah[1].nop + '</td>',
                                '<td id="nop_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_2" id="property_name_2">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_2" id="property_building_area_2">' + data.data_agunan.agunan_tanah[1].luas_bangunan + '</td>',
                                '<td id="property_building_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_2" id="property_surface_area_2">' + data.data_agunan.agunan_tanah[1].luas_tanah + '</td>',
                                '<td id="property_surface_area_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_2" id="property_estimation_2">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_2_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_2" id="certificate_id_2">' + data.data_agunan.agunan_tanah[1].no_sertifikat + '</td>',
                                '<td id=certificate_id_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_2" id="certificate_name_2">' + data.data_agunan.agunan_tanah[1].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_2" id="certificate_type_2">' + data.data_agunan.agunan_tanah[1].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_2_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_2" id="certificate_date_2">' + formatTanggal(data.data_agunan.agunan_tanah[1].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_2_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_2.push(data_properti_2);
                        $("#data_properti_2").html(html_properti_2);

                        var data_properti_3 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_3" id="nop_3">' + data.data_agunan.agunan_tanah[2].nop + '</td>',
                                '<td id="nop_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_3" id="property_name_3">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_3" id="property_building_area_3">' + data.data_agunan.agunan_tanah[2].luas_bangunan + '</td>',
                                '<td id="property_building_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_3" id="property_surface_area_3">' + data.data_agunan.agunan_tanah[2].luas_tanah + '</td>',
                                '<td id="property_surface_area_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_3" id="property_estimation_3">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_3_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_3" id="certificate_id_3">' + data.data_agunan.agunan_tanah[2].no_sertifikat + '</td>',
                                '<td id=certificate_id_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_3" id="certificate_name_3">' + data.data_agunan.agunan_tanah[2].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_3" id="certificate_type_3">' + data.data_agunan.agunan_tanah[2].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_3_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_3" id="certificate_date_3">' + formatTanggal(data.data_agunan.agunan_tanah[2].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_3_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_3.push(data_properti_3);
                        $("#data_properti_3").html(html_properti_3);

                        var data_properti_4 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_4" id="nop_4">' + data.data_agunan.agunan_tanah[3].nop + '</td>',
                                '<td id="nop_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_4" id="property_name_4">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_4" id="property_building_area_4">' + data.data_agunan.agunan_tanah[3].luas_bangunan + '</td>',
                                '<td id="property_building_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_4" id="property_surface_area_4">' + data.data_agunan.agunan_tanah[3].luas_tanah + '</td>',
                                '<td id="property_surface_area_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_4" id="property_estimation_4">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_4_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_4" id="certificate_id_4">' + data.data_agunan.agunan_tanah[3].no_sertifikat + '</td>',
                                '<td id=certificate_id_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_4" id="certificate_name_4">' + data.data_agunan.agunan_tanah[3].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_4" id="certificate_type_4">' + data.data_agunan.agunan_tanah[3].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_4_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_4" id="certificate_date_4">' + formatTanggal(data.data_agunan.agunan_tanah[3].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_4_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_4.push(data_properti_4);
                        $("#data_properti_4").html(html_properti_4);

                        var data_properti_5 = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop_5" id="nop_5">' + data.data_agunan.agunan_tanah[4].nop + '</td>',
                                '<td id="nop_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name_5" id="property_name_5">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area_5" id="property_building_area_5">' + data.data_agunan.agunan_tanah[4].luas_bangunan + '</td>',
                                '<td id="property_building_area_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area_5" id="property_surface_area_5">' + data.data_agunan.agunan_tanah[4].luas_tanah + '</td>',
                                '<td id="property_surface_area_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation_5" id="property_estimation_5">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_5_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id_5" id="certificate_id_5">' + data.data_agunan.agunan_tanah[4].no_sertifikat + '</td>',
                                '<td id=certificate_id_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name_5" id="certificate_name_5">' + data.data_agunan.agunan_tanah[4].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type_5" id="certificate_type_5">' + data.data_agunan.agunan_tanah[4].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_5_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date_5" id="certificate_date_5">' + formatTanggal(data.data_agunan.agunan_tanah[4].tgl_sertifikat) + '</td>',
                                '<td id=certificate_date_5_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti_5.push(data_properti_5);
                        $("#data_properti_5").html(html_properti_5);
                    } else {
                        $('#form_properti_2').hide();
                        $('#form_properti_3').hide();
                        $('#form_properti_4').hide();
                        $('#form_properti_5').hide();
                        
                        var data_properti_1 = [
                            '<tr>',
                                '<td colspan="3" style="text-align: center">Tidak ada agunan!</td>',
                            '</tr>',
                            ].join('\n');
                        html_properti_1.push(data_properti_1);
                        $("#data_properti_1").html(html_properti_1);
                    } 

                    get_detail({}, id)
                    .done(function(response) {
                        var data = response.data;
                        console.log(data);

                        if(data[0] != null) {
                            $("#selfie_photo_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${data[0].selfie_foto}' aria-valuemin='0' aria-valuemax='100' style='width: ${data[0].selfie_foto}%'>${data[0].selfie_foto}%</div></div>`);
                            checkResult("nik_result", data[0].nama);
                            checkResult("name_result", data[0].nama);
                            checkResult("birthdate_result", data[0].tgl_lahir);
                            checkResult("birthplace_result", data[0].tempat_lahir);
                            $("#address_result").html(`${data[0].alamat}`);
                        }
                        
                        if (data[1] != null) {
                            $("#selfie_photo_pasangan_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${data[1].selfie_foto}' aria-valuemin='0' aria-valuemax='100' style='width: ${data[1].selfie_foto}%'>${data[1].selfie_foto}%</div></div>`);
                            checkResult("nik_pasangan_result", data[1].nama);
                            checkResult("name_pasangan_result", data[1].nama);
                            checkResult("birthdate_pasangan_result", data[1].tgl_lahir);
                            checkResult("birthplace_pasangan_result", data[1].tempat_lahir);
                            $("#address_pasangan_result").html(`${data[1].alamat}`);
                        }
                        
                        if (data[2] != null) {
                            checkResult("npwp_result", data[2].npwp);
                            checkResult("nik_npwp_result", data[2].nik);
                            checkResult("name_npwp_result", data[2].nama);
                            checkResult("birthdate_npwp_result", data[2].tgl_lahir);
                            checkResult("birthplace_npwp_result", data[2].tmp_lahir);
                            checkIncome("income_npwp_result", data[2].income);
                            checkResult("match_result", data[2].match_result);
                        }

                        if (data[3] != null) {
                            checkResult("property_name_result", data[3].property_name);
                            checkResult("property_building_area_result", data[3].property_building_area);
                            checkResult("property_surface_area_result", data[3].property_surface_area);
                            checkIncome("property_estimation_result", data[3].property_estimation);
                            checkResult("certificate_id_result", data[3].certificate_id);
                            checkResult("certificate_name_result", data[3].certificate_name);
                            checkResult("certificate_type_result", data[3].certificate_type);
                            checkResult("certificate_date_result", data[3].certificate_date);
                            
                        }
                    })
                    .fail(function(jqXHR) {
                        bootbox.alert('Data Belum Pernah Di Verifikasi!!');
                    })
                    
                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                })
            
            $('#lihat_data_credit').hide();
            $('#lihat_detail').show();
        }); 

        $('#data_verifikasi').on('click', '.change', function(e) {
                e.preventDefault();
                
                var id = $(this).attr('data');

                get_data({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    $('#form_edit_photo_deb input[type=hidden][name=id_debitur_photo]').val(data.data_debitur.id);
                    $('#form_edit_ktp_deb input[type=hidden][name=id_debitur_ktp]').val(data.data_debitur.id);
                    $('#form_edit_npwp_deb input[type=hidden][name=id_debitur_npwp]').val(data.data_debitur.id);

                    $('#form_edit_photo_pas input[type=hidden][name=id_pasangan_photo]').val(data.data_pasangan.id);
                    $('#form_edit_ktp_pas input[type=hidden][name=id_pasangan_ktp]').val(data.data_pasangan.id);
                    $('#form_edit_npwp_pas input[type=hidden][name=id_pasangan_npwp]').val(data.data_pasangan.id);

                    $('#form_debitur input[type=hidden][name=id_trans_so]').val(data.id_trans_so);
                    $('#form_debitur input[type=hidden][name=id_debitur]').val(data.data_debitur.id);
                    $('#form_debitur input[name=no_ktp_deb]').val(data.data_debitur.no_ktp);
                    $('#form_debitur input[name=no_npwp_deb]').val(data.data_debitur.no_npwp);
                    $('#form_debitur input[name=nama_deb]').val(data.data_debitur.nama_lengkap);
                    $('#form_debitur input[name=tempat_lahir_deb]').val(data.data_debitur.tempat_lahir);
                    $('#form_debitur input[name=tgl_lahir_deb]').val(data.data_debitur.tgl_lahir);
                    $('#form_debitur textarea[name=alamat_deb]').val(data.data_debitur.alamat_ktp.alamat_singkat);
                    
                    $('#form_pasangan input[type=hidden][name=id_pasangan]').val(data.data_pasangan.id);
                    $('#form_pasangan input[name=no_ktp_pas]').val(data.data_pasangan.no_ktp);
                    $('#form_pasangan input[name=no_npwp_pas]').val(data.data_pasangan.no_npwp);
                    $('#form_pasangan input[name=nama_pas]').val(data.data_pasangan.nama_lengkap);
                    $('#form_pasangan input[name=tempat_lahir_pas]').val(data.data_pasangan.tempat_lahir);
                    $('#form_pasangan input[name=tgl_lahir_pas]').val(formatTanggal(data.data_pasangan.tgl_lahir));
                    $('#form_pasangan textarea[name=alamat_pas]').val(data.data_pasangan.alamat_ktp);

                    $('#form_penjamin input[type=hidden][name=id_trans_so_pen]').val(data.id_trans_so);

                    var photo_selfie_deb = [];
                    var photo_ktp_deb = [];
                    var photo_npwp_deb = [];
                    var photo_selfie_pas = [];
                    var photo_ktp_pas = [];
                    var photo_npwp_pas = [];

                    var selfie_deb = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '" data-lightbox="example-set" data-title="Photo Debitur"><img id="img_photo_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '" /> </a>'
                    ].join('\n');
                    photo_selfie_deb.push(selfie_deb);
                    $('#gambar_photo_deb').html(photo_selfie_deb);

                    var ktp_deb = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="KTP Debitur"><img id="img_ktp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" /> </a>'
                    ].join('\n');
                    photo_ktp_deb.push(ktp_deb);
                    $('#gambar_ktp_deb').html(photo_ktp_deb);

                    var npwp_deb = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" data-lightbox="example-set" data-title="NPWP Debitur"><img id="img_npwp_deb" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" /> </a>'
                    ].join('\n');
                    photo_npwp_deb.push(npwp_deb);
                    $('#gambar_npwp_deb').html(photo_npwp_deb);

                    var selfie_pas = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" data-lightbox="example-set" data-title="Photo Pasangan"><img id="img_photo_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" /> </a>'
                    ].join('\n');
                    photo_selfie_pas.push(selfie_pas);
                    $('#gambar_photo_pas').html(photo_selfie_pas);

                    var ktp_pas = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="KTP Pasangan"><img id="img_ktp_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" /> </a>'
                    ].join('\n');
                    photo_ktp_pas.push(ktp_pas);
                    $('#gambar_ktp_pas').html(photo_ktp_pas);

                    var npwp_pas = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lampiran_npwp + '" data-lightbox="example-set" data-title="NPWP Pasangan"><img id="img_npwp_pas" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lampiran_npwp + '" /> </a>'
                    ].join('\n');
                    photo_npwp_pas.push(npwp_pas);
                    $('#gambar_npwp_pas').html(photo_npwp_pas);

                    var htmlpenjamin = [];
                    var id_penjamin = {};
                    $.each(data.data_penjamin, function(index, item) {

                        var id_penjamin = [];
                        id_penjamin = item.id;

                        var tr = [
                            '<tr>',
                            '<td style="width:50px"><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_penjamin "data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                            '<td style="width:210px">' + item.nama_ktp + '</td>',
                            '<td>' + item.no_ktp + '</td>',
                            '<td>' + item.no_npwp + '</td>',
                            '<td style="width:135px">' + item.tempat_lahir + '</td>',
                            '<td style="width:137px">' + item.tgl_lahir + '</td>',
                            '<td style="width:285px">' + item.alamat_ktp + '</td>',
                            '<td style="width:135px">' + item.pemasukan_penjamin + '</td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.foto_selfie_penjamin + '" data-lightbox="example-set" data-title="Lampiran Photo Penjamin"><img class="thumbnail img-responsive" style="width:100px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.foto_selfie_penjamin + '" /> </a> </td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="Lampiran KTP Penjamin"><img class="thumbnail img-responsive" style="width:100px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lamp_ktp + '" /> </a> </td>',
                            '<td style="width:160px"><a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lampiran_npwp + '" data-lightbox="example-set" data-title="Lampiran NPWP Penjamin"><img class="thumbnail img-responsive" style="width:100px" alt="" src="<?php echo $this->config->item('img_url') ?>' + item.lampiran.lampiran_npwp + '" /> </a> </td>',
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

                        no++;

                        var tr = [
                            '<tr>',
                            '<td><button type="button" class="btn btn-info btn-sm edit submit" data-toggle="modal" data-target="#modal_edit_agunan"data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button></td>',
                            '<td>' + no + '</td>',
                            '<td>' + item.nop + '</td>',
                            '<td>' + item.luas_bangunan + '</td>',
                            '<td>' + item.luas_tanah + '</td>',
                            '<td>' + item.no_sertifikat + '</td>',
                            '<td>' + item.nama_pemilik_sertifikat + '</td>',
                            '<td>' + item.jenis_sertifikat + '</td>',
                            '</tr>'
                        ].join('\n');
                        htmlagunantanah.push(tr);
                    })
                    $('#data_agunan').html(htmlagunantanah);

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                })
            $('#lihat_data_credit').hide();
            $('#edit_detail').show();
        });

        $('#form_edit_photo_deb').on('submit', function(e) {
            e.preventDefault();
            var id = $('input[name=id_debitur_photo]', this).val();
            var formData = new FormData();
            formData.append('foto_cadeb', $('input[name=lamp_photo_deb]', this)[0].files[0]);

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
                    bootbox.alert('Data Gagal Diubah!!!', function() {
                        $("#batal").click();
                    })
                });
            $(".close_deb").click();
        });

        $('#form_edit_ktp_deb').on('submit', function(e) {
            e.preventDefault();
            var id = $('input[name=id_debitur_ktp]', this).val();
            var formData = new FormData();
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
                    bootbox.alert('Data Gagal Diubah!!!', function() {
                        $("#batal").click();
                    })
                });
            $(".close_deb").click();
        });

        $('#form_edit_npwp_deb').on('submit', function(e) {
            e.preventDefault();
            var id = $('input[name=id_debitur_npwp]', this).val();
            var formData = new FormData();
            formData.append('lamp_npwp', $('input[name=lamp_npwp_deb]', this)[0].files[0]);

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
                    bootbox.alert('Data Gagal Diubah!!!', function() {
                        $("#batal").click();
                    })
                });
            $(".close_deb").click();
        });

        $('#form_debitur').on('submit', function(e) {

            var id = $('input[name=id_debitur]', this).val();
            e.preventDefault();
            var formData = new FormData();

            formData.append('no_ktp', $('input[name=no_ktp_deb]', this).val());
            formData.append('no_npwp', $('input[name=no_npwp_deb]', this).val());
            formData.append('nama_lengkap', $('input[name=nama_deb]', this).val());
            formData.append('tempat_lahir', $('input[name=tempat_lahir_deb]', this).val());
            formData.append('tgl_lahir', $('input[name=tgl_lahir_deb]', this).val());
            formData.append('alamat_ktp', $('textarea[name=alamat_deb]', this).val());

            update_debitur(formData, id)
                .done(function(res) {
                    var data = res.data;
                    console.log(data);
                    
                    bootbox.alert('Data berhasil diubah', function() {
                        $("#batal").click();
                    });
                })
                .fail(function(jqXHR) {
                    var data = jqXHR.responseJSON.message;
                    var error = "";
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });

        });

        $('#form_edit_photo_pas').on('submit', function(e) {
            e.preventDefault();
            var id = $('input[name=id_pasangan_photo]', this).val();
            var formData = new FormData();
            formData.append('foto_pasangan', $('input[name=lamp_photo_pas]', this)[0].files[0]);

            update_pasangan(formData, id)
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
                    bootbox.alert('Data Gagal Diubah!!!', function() {
                        $("#batal").click();
                    })
                });
            $(".close_pas").click();
        });

        $('#form_edit_ktp_pas').on('submit', function(e) {
            e.preventDefault();
            var id = $('input[name=id_pasangan_ktp]', this).val();
            var formData = new FormData();
            formData.append('lamp_ktp_pas', $('input[name=lamp_ktp_pas]', this)[0].files[0]);

            update_pasangan(formData, id)
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
                    bootbox.alert('Data Gagal Diubah!!!', function() {
                        $("#batal").click();
                    })
                });
            $(".close_pas").click();
        });

        $('#form_edit_npwp_pas').on('submit', function(e) {
            e.preventDefault();
            var id = $('input[name=id_pasangan_npwp]', this).val();
            var formData = new FormData();
            formData.append('lampiran_npwp', $('input[name=lamp_npwp_pas]', this)[0].files[0]);

            update_pasangan(formData, id)
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
                    bootbox.alert('Data Gagal Diubah!!!', function() {
                        $("#batal").click();
                    })
                });
            $(".close_pas").click();
        });

        $('#form_pasangan').on('submit', function(e) {

            var id = $('input[name=id_pasangan]', this).val();
            e.preventDefault();
            var formData = new FormData();

            formData.append('no_ktp_pas', $('input[name=no_ktp_pas]', this).val());
            formData.append('no_npwp_pas', $('input[name=no_npwp_pas]', this).val());
            formData.append('nama_lengkap_pas', $('input[name=nama_pas]', this).val());
            formData.append('tempat_lahir_pas', $('input[name=tempat_lahir_pas]', this).val());
            formData.append('tgl_lahir_pas', $('input[name=tgl_lahir_pas]', this).val());
            formData.append('alamat_ktp_pas', $('textarea[name=alamat_pas]', this).val());

            update_pasangan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    console.log(data);
                    
                    bootbox.alert('Data berhasil diubah', function() {
                        $("#batal").click();
                    });
                })
                .fail(function(jqXHR) {
                    var data = jqXHR.responseJSON.message;
                    var error = "";
                    bootbox.alert(error, function() {
                        $("#batal").click();
                    });
                });

        });

        $('#data_penjamin').on('click', '.edit', function(e) {
            e.preventDefault();

            var id_penjamin = $(this).attr('data');

            get_data_penjamin({}, id_penjamin)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    $('#form_edit_photo_pen input[type=hidden][name=id_photo_pen]').val(data.id);
                    $('#form_edit_ktp_pen input[type=hidden][name=id_ktp_pen]').val(data.id);
                    $('#form_edit_npwp_pen input[type=hidden][name=id_npwp_pen]').val(data.id);

                    $('#form_edit_penjamin input[type=hidden][name=edit_id_penjamin]').val(data.id);
                    $('#form_edit_penjamin input[name=nama_pen]').val(data.nama_ktp);
                    $('#form_edit_penjamin input[name=no_ktp_pen]').val(data.no_ktp);
                    $('#form_edit_penjamin input[name=no_npwp_pen]').val(data.no_npwp);
                    $('#form_edit_penjamin input[name=tempat_lahir_pen]').val(data.tempat_lahir);
                    $('#form_edit_penjamin input[name=tgl_lahir_pen]').val(data.tgl_lahir);
                    $('#form_edit_penjamin textarea[name=alamat_pen]').val(data.alamat_ktp);
                    $('#form_edit_penjamin input[name=pemasukan_pen]').val(data.lampiran.pemasukan_penjamin);


                    var photo_selfie_pen = [];
                    var photo_ktp_pen = [];
                    var photo_npwp_pen = [];

                    var selfie_pen = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran.foto_selfie_penjamin + '" data-lightbox="example-set" data-title="Photo Penjamin"><img id="img_photo_pen" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran.foto_selfie_penjamin + '" /> </a>'
                    ].join('\n');
                    photo_selfie_pen.push(selfie_pen);
                    $('#gambar_photo_pen').html(photo_selfie_pen);

                    var ktp_pen = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran.lamp_ktp + '" data-lightbox="example-set" data-title="KTP Debitur"><img id="img_ktp_pen" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran.lamp_ktp + '" /> </a>'
                    ].join('\n');
                    photo_ktp_pen.push(ktp_pen);
                    $('#gambar_ktp_pen').html(photo_ktp_pen);

                    var npwp_pen = [
                        '<a class="example-image-link" target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.lampiran.lampiran_npwp + '" data-lightbox="example-set" data-title="NPWP Debitur"><img id="img_npwp_pen" class="thumbnail img-responsive img" alt="" src="<?php echo $this->config->item('img_url') ?>' + data.lampiran.lampiran_npwp + '" /> </a>'
                    ].join('\n');
                    photo_npwp_pen.push(npwp_pen);
                    $('#gambar_npwp_pen').html(photo_npwp_pen);

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan');
                });
        });

        $('#form_edit_photo_pen').on('submit', function(e) {
            var id = $('input[name=id_photo_pen]', this).val();
            e.preventDefault();
            var formData = new FormData();

            formData.append('foto_selfie_penjamin', $('input[name=lamp_photo_pen]', this)[0].files[0]);

            update_penjamin(formData, id)
                .done(function(res) {
                    var data = res.data;
                    console.log(data);
                    bootbox.alert('Data berhasil diubah', function() {
                        $('#form_edit_photo_pen')[0].reset();
                        $("#batal").click();
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
                    bootbox.alert('Data gagal diubah!!', function() {
                        $("#batal").click();
                    });
                });
            $(".close_pen").click();
        });

        $('#form_edit_ktp_pen').on('submit', function(e) {
            var id = $('input[name=id_ktp_pen]', this).val();
            e.preventDefault();
            var formData = new FormData();

            formData.append('lamp_ktp_pen', $('input[name=lamp_ktp_pen]', this)[0].files[0]);

            update_penjamin(formData, id)
                .done(function(res) {
                    var data = res.data;
                    console.log(data);
                    bootbox.alert('Data berhasil diubah', function() {
                        $('#form_edit_ktp_pen')[0].reset();
                        $("#batal").click();
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
                    bootbox.alert('Data gagal diubah!!', function() {
                        $("#batal").click();
                    });
                });
            $(".close_pen").click();
        });

        $('#form_edit_npwp_pen').on('submit', function(e) {
            var id = $('input[name=id_npwp_pen]', this).val();
            e.preventDefault();
            var formData = new FormData();

            formData.append('lampiran_npwp', $('input[name=lamp_npwp_pen]', this)[0].files[0]);

            update_penjamin(formData, id)
                .done(function(res) {
                    var data = res.data;
                    console.log(data);
                    bootbox.alert('Data berhasil diubah', function() {
                        $('#form_edit_npwp_pen')[0].reset();
                        $("#batal").click();
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
                    bootbox.alert('Data gagal diubah!!', function() {
                        $("#batal").click();
                    });
                });
            $(".close_pen").click();
        });

        $('#form_edit_penjamin').on('submit', function(e) {
            var id = $('input[name=edit_id_penjamin]', this).val();
            e.preventDefault();
            var formData = new FormData();

            formData.append('nama_ktp_pen', $('input[name=nama_pen]', this).val());
            formData.append('no_ktp_pen', $('input[name=no_ktp_pen]', this).val());
            formData.append('no_npwp_pen', $('input[name=no_npwp_pen]', this).val());
            formData.append('tempat_lahir_pen', $('input[name=tempat_lahir_pen]', this).val());
            formData.append('tgl_lahir_pen', $('input[name=tgl_lahir_pen]', this).val());
            formData.append('pemasukan_penjamin', $('input[name=pemasukan_pen]', this).val());
            formData.append('alamat_ktp_pen', $('textarea[name=alamat_pen]', this).val());

            update_penjamin(formData, id)
                .done(function(res) {
                    var data = res.data;
                    console.log(data);

                    bootbox.alert('Data berhasil diubah', function() {
                        $('#form_edit_penjamin')[0].reset();
                        $('#batal').click();
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
                    bootbox.alert('Data gagal diubah!!')
                });
            $('.close_pen').click();
        });

        $('#data_agunan').on('click', '.edit', function(e) {
            e.preventDefault();

            var id = $(this).attr('data');
            var html = [];

            get_data_agunan({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    $('#form_edit_agunan input[type=hidden][name=id_agunan]').val(data.id);
                    $('#form_edit_agunan input[name=nop]').val(data.nop);
                    $('#form_edit_agunan input[name=luas_bangunan]').val(data.luas_bangunan);
                    $('#form_edit_agunan input[name=luas_tanah]').val(data.luas_tanah);
                    $('#form_edit_agunan input[name=no_sertifikat]').val(data.no_sertifikat);
                    $('#form_edit_agunan input[name=nama_pemilik_sertifikat]').val(data.nama_pemilik_sertifikat);

                    var select_jenis_sertifikat = [];
                    var option_jenis_sertifikat = [
                        '<option value="' + data.jenis_sertifikat + '">' + data.jenis_sertifikat + '</option>',
                        '<option value="SHM">SHM</option>',
                        '<option value="SHGB AKTIF">SHGB AKTIF</option>',
                        '<option value="SHGB Akan Expired < 5 Tahun">SHGB Akan Expired < 5 Tahun</option>',
                        '<option value="SHM PTSL">SHM PTSL</option>',
                        '<option value="LAINNYA">LAINNYA</option>'
                    ].join('\n');
                    select_jenis_sertifikat.push(option_jenis_sertifikat);
                    $('#form_edit_agunan select[name=jenis_sertifikat]').html(select_jenis_sertifikat);

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan');
                });
        });

        $('#form_edit_agunan').on('submit', function(e) {
            var id = $('input[name=id_agunan]', this).val();
            e.preventDefault();

            var formData = new FormData();
            
            formData.append('nop', $('input[name=nop]', this).val());
            formData.append('luas_tanah', $('input[name=luas_tanah]', this).val());
            formData.append('luas_bangunan', $('input[name=luas_bangunan]', this).val());
            formData.append('no_sertifikat', $('input[name=no_sertifikat]', this).val());
            formData.append('nama_pemilik_sertifikat', $('input[name=nama_pemilik_sertifikat]', this).val());
            formData.append('jenis_sertifikat', $('select[name=jenis_sertifikat]', this).val());
            
            update_agunan(formData, id)
                .done(function(res) {
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {
                        load_data_agunan();
                        $("#batal").click();
                        $(".close_agu").click();
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
                    bootbox.alert('Data gagal diubah!!', function() {
                        $("#batal").click();
                    });
                });
        });

    })

</script>

