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
                                $kode_area = $this->db->get('mk_area')->result();
                            ?>
                            <select id="kode_area" class="form-control" name="kode_area">
                                <option value="" selected="selected">- Pilih Area -</option>
                                <?php foreach($kode_area as $r): ?>
                                    <option value="<?php echo $r->id; ?>"><?php echo $r->nama; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <?php
                                $kode_kantor = $this->db->get('mk_cabang')->result();
                            ?>
                            <select id="kode_kantor" class="form-control" name="kode_kantor">
                                <option value="" selected="selected">- Pilih Cabang -</option>
                                <?php foreach($kode_kantor as $r): ?>
                                    <option value="<?php echo $r->id; ?>"><?php echo $r->nama; ?></option>
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
                        <div class="box-body table-responsive no-padding" id="table_not_filter">
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
                        <div class="box-body table-responsive no-padding" id="table_filter">
                            <table id="table_verifikasi_filter" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
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
                                <tbody id="data_verifikasi_filter" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div id="paginationBar">
                            </div>
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
                                <button class="btn btn-secondary prosesVerifikasiDebitur" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                                <button class="btn btn-secondary prosesVerifikasiPasangan" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama pasangan sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_penjamin_1">
                        <div class="card-header bg-gradient-danger" id="ktp_penjamin_1" data-toggle="collapse" href="#collapse_ktp_penjamin_1" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>DATA PENJAMIN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_ktp_penjamin_1">
                            <input type="hidden" id="id_penjamin_1" name="id_penjamin_1" value="">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 1</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_penjamin_1" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiPenjamin_1" id="verifikasi_penjamin_1"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiPenjamin_1" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_penjamin_2" name="id_penjamin_2" value="">
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
                                <button class="btn btn-primary verifikasiPenjamin_2" id="verifikasi_penjamin_2"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiPenjamin_2" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_penjamin_3" name="id_penjamin_3" value="">
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
                                <button class="btn btn-primary verifikasiPenjamin_3" id="verifikasi_penjamin_3"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiPenjamin_3" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_penjamin_4" name="id_penjamin_4" value="">
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
                                <button class="btn btn-primary verifikasiPenjamin_4" id="verifikasi_penjamin_4"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiPenjamin_4" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_penjamin_5" name="id_penjamin_5" value="">
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
                                <button class="btn btn-primary verifikasiPenjamin_5" id="verifikasi_penjamin_5"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiPenjamin_5" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                            <div class="alert alert-warning warning_nama" style="margin-top: 50px">
                                <strong>Info!</strong> Pastikan nama penjamin sesuai dengan nama di KTP termasuk simbol sebelum verifikasi.
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_npwp_debitur">
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
                                <button class="btn btn-secondary prosesVerifikasiNpwp" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_npwp_pasangan">
                        <div class="card-header bg-gradient-danger" id="npwp_pasangan" data-toggle="collapse" href="#collapse_npwp_pasangan" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP PASANGAN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp_pasangan">
                            <input type="hidden" id="id_pasangan" name="id_pasangan" value="">
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
                                <button class="btn btn-secondary prosesVerifikasiNpwpPasangan" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_npwp_pen_1">
                        <div class="card-header bg-gradient-danger" id="npwp_pen_1" data-toggle="collapse" href="#collapse_npwp_pen_1" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP PENJAMIN</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp_pen_1">
                            <input type="hidden" id="id_npwp_penjamin_1" name="id_npwp_penjamin_1" value="">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_npwp_pen_1" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiNpwpPenjamin_1" id="verifikasi_npwp_pen_1"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiNpwpPenjamin_1" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_npwp_pen_2">
                        <div class="card-header bg-gradient-danger" id="npwp_pen_2" data-toggle="collapse" href="#collapse_npwp_pen_2" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP PENJAMIN 2</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp_pen_2">
                            <input type="hidden" id="id_npwp_penjamin_2" name="id_npwp_penjamin_2" value="">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 2</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_npwp_pen_2" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiNpwpPenjamin_2" id="verifikasi_npwp_pen_2"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiNpwpPenjamin_2" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_npwp_pen_3">
                        <div class="card-header bg-gradient-danger" id="npwp_pen_3" data-toggle="collapse" href="#collapse_npwp_pen_3" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP PENJAMIN 3</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp_pen_3">
                            <input type="hidden" id="id_npwp_penjamin_3" name="id_npwp_penjamin_3" value="">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 3</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_npwp_pen_3" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiNpwpPenjamin_3" id="verifikasi_npwp_pen_3"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiNpwpPenjamin_3" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_npwp_pen_4">
                        <div class="card-header bg-gradient-danger" id="npwp_pen_4" data-toggle="collapse" href="#collapse_npwp_pen_4" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP PENJAMIN 4</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp_pen_4">
                            <input type="hidden" id="id_npwp_penjamin_4" name="id_npwp_penjamin_4" value="">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin 4</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_npwp_pen_4" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiNpwpPenjamin_4" id="verifikasi_npwp_pen_4"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiNpwpPenjamin_4" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3" id="form_npwp_pen_5">
                        <div class="card-header bg-gradient-danger" id="npwp_pen_5" data-toggle="collapse" href="#collapse_npwp_pen_5" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP PENJAMIN 5</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_npwp_pen_5">
                            <input type="hidden" id="id_npwp_penjamin_5" name="id_npwp_penjamin_5" value="">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Penjamin</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_npwp_pen_5" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiNpwpPenjamin_5" id="verifikasi_npwp_pen_5"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiNpwpPenjamin_5" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_properti_1" name="id_properti_1" value="">
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
                                <button class="btn btn-primary verifikasiProperti_1" id="verifikasi_properti_1"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiProperti_1" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_properti_2" name="id_properti_2" value="">
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
                                <button class="btn btn-primary verifikasiProperti_2" id="verifikasi_properti_2"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiProperti_2" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_properti_3" name="id_properti_3" value="">
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
                                <button class="btn btn-primary verifikasiProperti_3" id="verifikasi_properti_3"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiProperti_3" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_properti_4" name="id_properti_4" value="">
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
                                <button class="btn btn-primary verifikasiProperti_4" id="verifikasi_properti_4"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiProperti_4" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
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
                            <input type="hidden" id="id_properti_5" name="id_properti_5" value="">
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
                                <button class="btn btn-primary verifikasiProperti_5" id="verifikasi_properti_5"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-secondary prosesVerifikasiProperti_5" disabled><i class="fas fa-spinner fa-pulse" ></i> Proses</button>
                            </div>
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
                                            <input type="text" name="nama_deb" id="nama_deb" class="form-control ">
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
                                            <input type="text" name="nama_pas" id="nama_pas"  class="form-control ">
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
                                <input type="text" name="nama_pen" id="nama_pen" class="form-control ">
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
                                <input type="date" id="tgl_lahir_pen" name="tgl_lahir_pen" class="form-control"/>
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
                                    <input type="text" name="nama_pemilik_sertifikat" class="form-control">
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

        $("#table_not_filter").hide();
        $("#table_filter").show();

        var requestBody = {
            cabang : $("#kode_kantor option:selected").val(),
            area    : $("#kode_area option:selected").val(),
            draw: 1
        }


        if (requestBody.kode_area == "" && requestBody.kode_kantor == "") {
            bootbox.alert("Salah satu dari Area atau Cabang tidak boleh kosong!");
        } else {
                // call AJAX data verifikasi yang sudah di filter berdasarkan area dan kantor
                hit_filter_data_pagination(requestBody)
                
        }
    }

    function hit_filter_data_pagination(requestBody) {
        $.ajax({
            url: "<?php echo site_url('Ao_controller/get_data_verifikasi_filter') ?>",
            type: 'POST',
            data: requestBody,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
        })
        .done(function(res) {
            res = JSON.parse(res);
            var html = [];
            if(res.data.length == 0){
                var tr =[
                '<tr align="middle">',
                    '<td colspan="5" style="text-align: center">Tidak ada data</td>',
                '</tr>'
                ].join('\n');
                $('#data_verifikasi_filter').html(tr);
                return;
            } else {
                $.each(res.data, function(index,item){
                    var tr = [
                    '<tr>',
                        '<td style="text-align: center">'+ item.no +'</td>',
                        '<td>'+ formatUpdated(item.tgl_transaksi) +'</td>',
                        '<td>'+ item.nomor_so+'</td>',
                        '<td>'+ item.nama_debitur +'</td>',
                        '<td style="text-align: center">' + item.action + '</td>',
                    '</tr>'
                    ].join('\n');
                    html.push(tr);
                });

                $('#data_verifikasi_filter').html(html);

                $("#paginationBar").html(`
                    <nav aria-label="Page navigation example">
                        <ul class="pagination" id="paginationList">
                        </ul>
                    </nav>
                `);

                for (var i=1; i<=res.last_page; i++) {
                    if (i == requestBody.draw) {
                        $("#paginationList").append(`<li class="page-item active"><a class="page-link" id="${i}id" data-value="${i}">${i}</a></li>`);
                    } else {
                        $("#paginationList").append(`<li class="page-item"><a class="page-link" id="${i}id" data-value="${i}">${i}</a></li>`);
                    }
                    
                    document.getElementById(`${i}id`).addEventListener("click", (e) => {
                        requestBody.draw = e.target.getAttribute("data-value");
                        hit_filter_data_pagination(requestBody);
                        $("#paginationList").empty();
                    })
                }

            }

        });
    }

    function tampil_data_verifikasi() {
        $("#table_not_filter").show();
        $("#table_filter").hide();
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
        var user_id = '<?php echo $user_id ?>';
        if(user_id == 1107) {
            $('#form_npwp_debitur').show();
            $('#form_npwp_pasangan').show();
            $('#form_npwp_pen_1').show();
            $('#form_npwp_pen_2').show();
            $('#form_npwp_pen_3').show();
            $('#form_npwp_pen_4').show();
            $('#form_npwp_pen_5').show();
        } else {
            $('#form_npwp_debitur').hide();
            $('#form_npwp_pasangan').hide();
            $('#form_npwp_pen_1').hide();
            $('#form_npwp_pen_2').hide();
            $('#form_npwp_pen_3').hide();
            $('#form_npwp_pen_4').hide();
            $('#form_npwp_pen_5').hide();
        }
        $('.prosesVerifikasiDebitur').hide();
        $('.prosesVerifikasiPasangan').hide();
        $('.prosesVerifikasiPenjamin_1').hide();
        $('.prosesVerifikasiPenjamin_2').hide();
        $('.prosesVerifikasiPenjamin_3').hide();
        $('.prosesVerifikasiPenjamin_4').hide();
        $('.prosesVerifikasiPenjamin_5').hide();
        $('.prosesVerifikasiNpwp').hide();
        $('.prosesVerifikasiNpwpPasangan').hide();
        $('.prosesVerifikasiNpwpPenjamin_1').hide();
        $('.prosesVerifikasiNpwpPenjamin_2').hide();
        $('.prosesVerifikasiNpwpPenjamin_3').hide();
        $('.prosesVerifikasiNpwpPenjamin_4').hide();
        $('.prosesVerifikasiNpwpPenjamin_5').hide();
        $('.prosesVerifikasiProperti_1').hide();
        $('.prosesVerifikasiProperti_2').hide();
        $('.prosesVerifikasiProperti_3').hide();
        $('.prosesVerifikasiProperti_4').hide();
        $('.prosesVerifikasiProperti_5').hide();
    }

    function click_detail() {
        $('.verifikasiDebitur').hide();
        $('.verifikasiPasangan').hide();
        $('.verifikasiPenjamin_1').hide();
        $('.verifikasiPenjamin_2').hide();
        $('.verifikasiPenjamin_3').hide();
        $('.verifikasiPenjamin_4').hide();
        $('.verifikasiPenjamin_5').hide();
        $('.verifikasiNpwp').hide();
        $('.verifikasiNpwpPasangan').hide();
        $('.verifikasiNpwpPenjamin_1').hide();
        $('.verifikasiNpwpPenjamin_2').hide();
        $('.verifikasiNpwpPenjamin_3').hide();
        $('.verifikasiNpwpPenjamin_4').hide();
        $('.verifikasiNpwpPenjamin_5').hide();
        $('.verifikasiProperti_1').hide();
        $('.verifikasiProperti_2').hide();
        $('.verifikasiProperti_3').hide();
        $('.verifikasiProperti_4').hide();
        $('.verifikasiProperti_5').hide();
        $('.prosesVerifikasiDebitur').hide();
        $('.prosesVerifikasiPasangan').hide();
        $('.prosesVerifikasiPenjamin_1').hide();
        $('.prosesVerifikasiPenjamin_2').hide();
        $('.prosesVerifikasiPenjamin_3').hide();
        $('.prosesVerifikasiPenjamin_4').hide();
        $('.prosesVerifikasiPenjamin_5').hide();
        $('.prosesVerifikasiNpwp').hide();
        $('.prosesVerifikasiNpwpPasangan').hide();
        $('.prosesVerifikasiNpwpPenjamin_1').hide();
        $('.prosesVerifikasiNpwpPenjamin_2').hide();
        $('.prosesVerifikasiNpwpPenjamin_3').hide();
        $('.prosesVerifikasiNpwpPenjamin_4').hide();
        $('.prosesVerifikasiNpwpPenjamin_5').hide();
        $('.prosesVerifikasiProperti_1').hide();
        $('.prosesVerifikasiProperti_2').hide();
        $('.prosesVerifikasiProperti_3').hide();
        $('.prosesVerifikasiProperti_4').hide();
        $('.prosesVerifikasiProperti_5').hide();
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
        $('.verifikasiDebitur').hide();

        document.getElementById("verifikasi_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_pasangan").disabled = false;},300000);
        document.getElementById("verifikasi_npwp").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pasangan").disabled = false;},300000);

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

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
                    "trx_id" : "KMI" + $("#nik").text() + "01",
                    "nik" : $("#nik").text(),
                    "name" : $("#name").text(),
                    "birthdate" : $(formatTanggal("#birthdate")).text(),
                    "birthplace" : $("#birthplace").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);
                
                if (isTesting) {
                    
                    responseBody = responseCompleteID(requestBody);
                    console.log(responseBody);
                    
                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "nik" : $("#nik").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url_2') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiDebitur').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiDebitur').hide();
                        })

                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "nik" : $("#nik").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiDebitur').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiDebitur').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "nik" : $("#nik").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiDebitur').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiDebitur').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if(responseBody.errors.selfie_photo == "no face detected") {
                                var requestBodyError = {
                                    "nik" : $("#nik").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiDebitur').show();
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiDebitur').hide();
                                })
                            } else if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "nik" : $("#nik").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiDebitur').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storecadeb/";
                                    httpRequestBuilder(requestMapperForStoreCadebDataNotFound(), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseDebiturDataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiDebitur').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storecadeb/";
        
                            httpRequestBuilder(requestMapperForStoreCadeb(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseDebitur(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data Debitur!!");
                            })
                        }
                    }

                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiDebitur').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiDebitur').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiDebitur').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiDebitur').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiDebitur').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storecadeb/";
                                        httpRequestBuilder(requestMapperForStoreCadebDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseDebiturDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiDebitur').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storecadeb/";
        
                                httpRequestBuilder(requestMapperForStoreCadeb(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseDebitur(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data Debitur!!");
                                    $('.prosesVerifikasiDebitur').hide();
                                })

                            }
                        }
                
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
        $('.verifikasiDebitur').hide();

        document.getElementById("verifikasi_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_pasangan").disabled = false;},300000);
        document.getElementById("verifikasi_npwp").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pasangan").disabled = false;},300000);

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

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
                    "trx_id" : "KMI" + $("#nik").text() + "02",
                    "nik" : $("#nik").text(),
                    "name" : $("#name").text(),
                    "birthdate" : $(formatTanggal("#birthdate")).text(),
                    "birthplace" : $("#birthplace").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);

                if(limitCallDebitur == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Debitur!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseDataNotFound(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiDebitur').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiDebitur').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiDebitur').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiDebitur').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiDebitur').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiDebitur').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiDebitur').show();
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiDebitur').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiDebitur').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updateVerifCadebt/";
                                        httpRequestBuilder(requestMapperForUpdateCadebDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseDebiturDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiDebitur').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updateVerifCadebt/";
        
                                httpRequestBuilder(requestMapperForUpdateCadeb(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseDebitur(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data Debitur!!");
                                })

                            }
                        }

                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiDebitur').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "nik" : $("#nik").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiDebitur').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "nik" : $("#nik").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiDebitur').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "nik" : $("#nik").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiDebitur').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if (responseBody.errors.selfie_photo == "no face detected") {
                                        var requestBodyError = {
                                            "nik" : $("#nik").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.selfie_photo,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            bootbox.alert(responseBody.errors.selfie_photo);
                                            $('.prosesVerifikasiDebitur').hide();
                                        })
                                    } else if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "nik" : $("#nik").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updateVerifCadebt/";
                                            httpRequestBuilder(requestMapperForUpdateCadebDataNotFound(), url, id_trans_so, "POST")
                                            .done( (response) => {
                                                mappingResponseDebiturDataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiDebitur').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updateVerifCadebt/";
        
                                    httpRequestBuilder(requestMapperForUpdateCadeb(responseBody), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseDebitur(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data Debitur!!");
                                        $('.prosesVerifikasiDebitur').hide();
                                    })

                                }
                            }

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
        $('.verifikasiPasangan').hide();

        document.getElementById("verifikasi_npwp_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pasangan").disabled = false;},300000);

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                     
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                     
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                     
                } 
            })
                
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
                    "trx_id" : "KMI" + $("#nik_pasangan").text() + "01",
                    "nik" : $("#nik_pasangan").text(),
                    "name" : $("#name_pasangan").text(),
                    "birthdate" : $("#birthdate_pasangan").text(),
                    "birthplace" : $("#birthplace_pasangan").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);
                
                if (isTesting) {
                    responseBody = responseCompleteID(requestBody);
                    console.log(responseBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "nik" : $("#nik_pasangan").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPasangan').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPasangan').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "nik" : $("#nik_pasangan").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPasangan').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiPasangan').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "nik" : $("#nik_pasangan").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPasangan').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPasangan').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if(responseBody.errors.selfie_photo == "no face detected") {
                                var requestBodyError = {
                                    "nik" : $("#nik_pasangan").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPasangan').show();
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiPasangan').hide();
                                })
                            } else if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "nik" : $("#nik_pasangan").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPasangan').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storepasangan/";
        
                                    httpRequestBuilder(requestMapperForStorePasanganDataNotFound(), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponsePasanganDataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiPasangan').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storepasangan/";
        
                            httpRequestBuilder(requestMapperForStorePasangan(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePasangan(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data Pasangan!!");
                            })

                        }
                    }
                   
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiPasangan').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_pasangan").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPasangan').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_pasangan").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPasangan').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_pasangan").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPasangan').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_pasangan").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPasangan').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_pasangan").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storepasangan/";
        
                                        httpRequestBuilder(requestMapperForStorePasanganDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponsePasanganDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPasangan').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storepasangan/";
        
                                httpRequestBuilder(requestMapperForStorePasangan(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponsePasangan(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data Pasangan!!");
                                    $('.prosesVerifikasiPasangan').hide();
                                })

                            }
                        }

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
        $('.verifikasiPasangan').hide();

        document.getElementById("verifikasi_npwp_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pasangan").disabled = false;},300000);

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_1").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

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
                    "trx_id" : "KMI" + $("#nik_pasangan").text() + "02",
                    "nik" : $("#nik_pasangan").text(),
                    "name" : $("#name_pasangan").text(),
                    "birthdate" : $("#birthdate_pasangan").text(),
                    "birthplace" : $("#birthplace_pasangan").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);

                if(limitCallPasangan == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Pasangan!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseCompletePasangan(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_pasangan").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPasangan').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPasangan').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_pasangan").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPasangan').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPasangan').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_pasangan").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPasangan').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPasangan').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_pasangan").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPasangan').show();
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPasangan').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_pasangan").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPasangan').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updateVerifPasangan/";
        
                                        httpRequestBuilder(requestMapperForUpdatePasanganDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponsePasanganDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPasangan').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updateVerifPasangan/";
        
                                httpRequestBuilder(requestMapperForUpdatePasangan(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponsePasangan(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data Pasangan!!");
                                })

                            }
                        }
                    
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiPasangan').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "nik" : $("#nik_pasangan").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPasangan').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "nik" : $("#nik_pasangan").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiPasangan').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "nik" : $("#nik_pasangan").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPasangan').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if(responseBody.errors.selfie_photo == "no face detected") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_pasangan").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.selfie_photo,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            bootbox.alert(responseBody.errors.selfie_photo);
                                            $('.prosesVerifikasiPasangan').hide();
                                        })
                                    } else if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_pasangan").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updateVerifPasangan/";
        
                                            httpRequestBuilder(requestMapperForUpdatePasanganDataNotFound(), url, id_trans_so, "POST")
                                            .done( (response) => {
                                                mappingResponsePasanganDataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiPasangan').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updateVerifPasangan/";
        
                                    httpRequestBuilder(requestMapperForUpdatePasangan(responseBody), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponsePasangan(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data Pasangan!!");
                                        $('.prosesVerifikasiPasangan').hide();
                                    })

                                }
                            }

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

    function verifikasiSimpanPenjamin_1(isTesting, id_trans_so) {
        $('.verifikasiPenjamin_1').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_1').val();
        var photo_penjamin_1 = document.getElementById("photo_selfie_penjamin_1");
        var base64_selfiePenjamin_1 = "";
        var responseBody;

        if (photo_penjamin_1.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_1.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_1").text() + "01",
                    "nik" : $("#nik_penjamin_1").text(),
                    "name" : $("#name_penjamin_1").text(),
                    "birthdate" : $("#birthdate_penjamin_1").text(),
                    "birthplace" : $("#birthplace_penjamin_1").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);
                
                if (isTesting) {
                    responseBody = responseCompleteID(requestBody);
                    console.log(responseBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_1").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_1').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_1').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_1").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_1').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiPenjamin_1').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_1").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_1').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_1').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if(responseBody.errors.selfie_photo == "no face detected") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_1").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_1').show();
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiPenjamin_1').hide();
                                })
                            } else if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_1").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_1').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storepenjamin/";

                                    httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_1DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiPenjamin_1').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storepenjamin/";

                            httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePenjamin_1(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                            })

                        }
                    }
                
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiPenjamin_1').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_1").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_1').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_1").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_1').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_1").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_1').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_1").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_1').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_1").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storepenjamin/";

                                        httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_1DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_1').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storepenjamin/";

                                httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_1(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                                    $('.prosesVerifikasiPenjamin_1').hide();
                                })

                            }
                        }

                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                    
                }
                
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Penjamin!!");
            });
        }
    }

    function verifikasiSimpanPenjamin_2(isTesting, id_trans_so) {
        $('.verifikasiPenjamin_2').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_2').val();
        var photo_penjamin_2 = document.getElementById("photo_selfie_penjamin_2");
        var base64_selfiePenjamin_2 = "";
        var responseBody;

        if (photo_penjamin_2.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_2.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_2").text() + "01",
                    "nik" : $("#nik_penjamin_2").text(),
                    "name" : $("#name_penjamin_2").text(),
                    "birthdate" : $("#birthdate_penjamin_2").text(),
                    "birthplace" : $("#birthplace_penjamin_2").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                
                if (isTesting) {
                    responseBody = responseCompleteID(requestBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_2").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_2').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_2').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_2").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_2').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiPenjamin_2').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_2").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_2').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_2').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if(responseBody.errors.selfie_photo == "no face detected") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_2").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_2').show();
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiPenjamin_2').hide();
                                })
                            } else if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_2").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_2').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storepenjamin/";

                                    httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_2DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiPenjamin_2').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storepenjamin/";

                            httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePenjamin_2(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                            })

                        }
                    }
                
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiPenjamin_2').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_2").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_2').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_2").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_2').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_2").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_2').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_2").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_2').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_2").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errorsmessage,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storepenjamin/";

                                        httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_2DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_2').hide();
                                        })
                                    })
                                }
                            } else {
                                var requestBody = requestMapperForStorePenjamin(responseBody, id_pen);
                                var url = "api/master/verif/storepenjamin/";

                                httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_2(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                                    $('.prosesVerifikasiPenjamin_2').hide();
                                })

                            }
                        }

                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                    
                }
                
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Penjamin!!");
            });
        }
    }

    function verifikasiSimpanPenjamin_3(isTesting, id_trans_so) {
        $('.verifikasiPenjamin_3').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_3').val();
        var photo_penjamin_3 = document.getElementById("photo_selfie_penjamin_3");
        var base64_selfiePenjamin_3 = "";
        var responseBody;

        if (photo_penjamin_3.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_3.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_3").text() + "01",
                    "nik" : $("#nik_penjamin_3").text(),
                    "name" : $("#name_penjamin_3").text(),
                    "birthdate" : $("#birthdate_penjamin_3").text(),
                    "birthplace" : $("#birthplace_penjamin_3").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                
                if (isTesting) {
                    responseBody = responseCompleteID(requestBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_3").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_3').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_3').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_3").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_3').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiPenjamin_3').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_3").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_3').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_3').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if(responseBody.errors.selfie_photo == "no face detected") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_3").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_3').show();
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiPenjamin_3').hide();
                                })
                            } else if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_3").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_3').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storepenjamin/";

                                    httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_3DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiPenjamin_3').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storepenjamin/";

                            httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePenjamin_3(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                            })

                        }
                    }
                
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiPenjamin_3').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_3").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_3').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_3").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_3').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_3").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_3').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_3").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_3').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_3").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storepenjamin/";

                                        httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_3DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_3').hide();
                                        })
                                    })
                                }
                            } else {
                                var requestBody = requestMapperForStorePenjamin(responseBody, id_pen);
                                var url = "api/master/verif/storepenjamin/";

                                httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_3(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                                    $('.prosesVerifikasiPenjamin_3').hide();
                                })

                            }
                        }

                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                    
                }
                
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Penjamin!!");
            });
        }
    }

    function verifikasiSimpanPenjamin_4(isTesting, id_trans_so) {
        $('.verifikasiPenjamin_4').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_4').val();
        var photo_penjamin_4 = document.getElementById("photo_selfie_penjamin_4");
        var base64_selfiePenjamin_4 = "";
        var responseBody;

        if (photo_penjamin_4.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_4.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_4").text() + "01",
                    "nik" : $("#nik_penjamin_4").text(),
                    "name" : $("#name_penjamin_4").text(),
                    "birthdate" : $("#birthdate_penjamin_4").text(),
                    "birthplace" : $("#birthplace_penjamin_4").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                
                if (isTesting) {
                    responseBody = responseCompleteID(requestBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_4").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_4').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_4').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_4").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_4').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiPenjamin_4').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_4").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_4').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_4').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if(responseBody.errors.selfie_photo == "no face detected") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_4").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_4').show();
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiPenjamin_4').hide();
                                })
                            } else if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_4").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_4').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storepenjamin/";

                                    httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_4DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiPenjamin_4').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storepenjamin/";

                            httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePenjamin_4(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                            })

                        }
                    }
                
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiPenjamin_4').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                            "nik" : $("#nik_penjamin_4").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_4').hide();
                        })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                            "nik" : $("#nik_penjamin_4").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiPenjamin_4').hide();
                        })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                            "nik" : $("#nik_penjamin_4").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_4').hide();
                        })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                    "nik" : $("#nik_penjamin_4").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiPenjamin_4').hide();
                                })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_4").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                       var url = "api/master/verif/storepenjamin/";

                                        httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_4DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_4').hide();
                                        })
                                    })
                                }
                            } else {
                                var requestBody = requestMapperForStorePenjamin(responseBody, id_pen);
                                var url = "api/master/verif/storepenjamin/";

                                httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_4(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                                    $('.prosesVerifikasiPenjamin_4').hide();
                                })

                            }
                        }

                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                    
                }
                
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Penjamin!!");
            });
        }
    }

    function verifikasiSimpanPenjamin_5(isTesting, id_trans_so) {
        $('.verifikasiPenjamin_5').hide();

        document.getElementById("verifikasi_npwp_pen_1").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_2").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_3").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_4").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_5").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);

        var id_pen = $('#id_penjamin_5').val();
        var photo_penjamin_5 = document.getElementById("photo_selfie_penjamin_5");
        var base64_selfiePenjamin_5 = "";
        var responseBody;

        if (photo_penjamin_5.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_5.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_5").text() + "01",
                    "nik" : $("#nik_penjamin_5").text(),
                    "name" : $("#name_penjamin_5").text(),
                    "birthdate" : $("#birthdate_penjamin_5").text(),
                    "birthplace" : $("#birthplace_penjamin_5").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                
                if (isTesting) {
                    responseBody = responseCompleteID(requestBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_5").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_5').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_5').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_5").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_5').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiPenjamin_5').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "nik" : $("#nik_penjamin_5").text(),
                            "jenis_call" : "COMPLETE ID",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_5').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiPenjamin_5').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if(responseBody.errors.selfie_photo == "no face detected") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_5").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.selfie_photo,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_5').show();
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.selfie_photo);
                                    $('.prosesVerifikasiPenjamin_5').hide();
                                })
                            } else if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_5").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiPenjamin_5').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storepenjamin/";

                                    httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_5DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiPenjamin_5').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storepenjamin/";

                            httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePenjamin_5(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                            })

                        }
                    }
                
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_id',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiPenjamin_5').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_5").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_5').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_5").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_5').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_5").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_5').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_5").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_5').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_5").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storepenjamin/";

                                        httpRequestBuilder(requestMapperForStorePenjaminDataNotFound(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_5DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_5').hide();
                                        })
                                    })
                                }
                            } else {
                                var requestBody = requestMapperForStorePenjamin(responseBody, id_pen);
                                var url = "api/master/verif/storepenjamin/";

                                httpRequestBuilder(requestMapperForStorePenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_5(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data Penjamin!!");
                                    $('.prosesVerifikasiPenjamin_5').hide();
                                })

                            }
                        }

                    })
                    .fail(function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    })
                    
                }
                
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Penjamin!!");
            });
        }
    }

    function verifikasiUpdatePenjamin_1(isTesting, limitCallPenjamin_1, id_trans_so) {
        $('.verifikasiPenjamin_1').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_2").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_1').val();
        var photo_penjamin_1 = document.getElementById("photo_selfie_penjamin_1");
        var base64_selfiePenjamin_1 = "";
        var responseBody;

        if (photo_penjamin_1.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_1.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_1").text() + "02",
                    "nik" : $("#nik_penjamin_1").text(),
                    "name" : $("#name_penjamin_1").text(),
                    "birthdate" : $("#birthdate_penjamin_1").text(),
                    "birthplace" : $("#birthplace_penjamin_1").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);

                if(limitCallPenjamin_1 == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Penjamin!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseCompleteID(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_1").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_1').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_1').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_1").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_1').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_1').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_1").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_1').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_1').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_1").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_1').show();
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_1').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_1").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_1').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updatePenjamin/";
        
                                        httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_1DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_1').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updatePenjamin/";
        
                                httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_1(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!");
                                })

                            }
                        }
                    
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_1').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_1").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_1').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_1").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiPenjamin_1').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_1").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_1').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if(responseBody.errors.selfie_photo == "no face detected") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_1").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.selfie_photo,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            bootbox.alert(responseBody.errors.selfie_photo);
                                            $('.prosesVerifikasiPenjamin_1').hide();
                                        })
                                    } else if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_1").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updatePenjamin/";
        
                                            httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                            .done( (response) => {
                                                mappingResponsePenjamin_1DataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiPenjamin_1').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updatePenjamin/";
        
                                    httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_1(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!");
                                        $('.prosesVerifikasiPenjamin_1').hide();
                                    })

                                }
                            }

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

    function verifikasiUpdatePenjamin_2(isTesting, limitCallPenjamin_2, id_trans_so) {
        $('.verifikasiPenjamin_2').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_3").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_2').val();
        var photo_penjamin_2 = document.getElementById("photo_selfie_penjamin_2");
        var base64_selfiePenjamin_2 = "";
        var responseBody;

        if (photo_penjamin_2.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_2.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_2").text() + "02",
                    "nik" : $("#nik_penjamin_2").text(),
                    "name" : $("#name_penjamin_2").text(),
                    "birthdate" : $("#birthdate_penjamin_2").text(),
                    "birthplace" : $("#birthplace_penjamin_2").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);

                if(limitCallPenjamin_2 == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Penjamin!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseCompleteID(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_2").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_2').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_2').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_2").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_2').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_2').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_2").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_2').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_2').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_2").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_2').show();
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_2').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_2").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_2').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updatePenjamin/";
        
                                        httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_2DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_2').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updatePenjamin/";
        
                                httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_2(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!"); 
                                })

                            }
                        }
                    
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_2').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_2").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_2').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_2").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiPenjamin_2').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_2").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_2').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if(responseBody.errors.selfie_photo == "no face detected") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_2").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.selfie_photo,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            bootbox.alert(responseBody.errors.selfie_photo);
                                            $('.prosesVerifikasiPenjamin_2').hide();
                                        })
                                    } else if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_2").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updatePenjamin/";
        
                                            httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                            .done( (response) => {
                                                mappingResponsePenjamin_2DataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiPenjamin_2').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updatePenjamin/";
        
                                    httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_2(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!");
                                        $('.prosesVerifikasiPenjamin_2').hide();
                                    })

                                }
                            }

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

    function verifikasiUpdatePenjamin_3(isTesting, limitCallPenjamin_3, id_trans_so) {
        $('.verifikasiPenjamin_3').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_4").disabled = false;},300000);
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_3').val();
        var photo_penjamin_3 = document.getElementById("photo_selfie_penjamin_1");
        var base64_selfiePenjamin_3 = "";
        var responseBody;

        if (photo_penjamin_3.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_3.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_3").text() + "02",
                    "nik" : $("#nik_penjamin_3").text(),
                    "name" : $("#name_penjamin_3").text(),
                    "birthdate" : $("#birthdate_penjamin_3").text(),
                    "birthplace" : $("#birthplace_penjamin_3").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);

                if(limitCallPenjamin_3 == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Penjamin!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseCompleteID(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_3").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_3').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_3').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_3").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_3').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_3').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_3").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_3').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_3').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_3").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_3').show();
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_3').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_3").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_3').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updatePenjamin/";
        
                                        httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_3DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_3').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updatePenjamin/";
        
                                httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_3(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!"); 
                                })

                            }
                        }
                    
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_3').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_3").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_3').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_3").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiPenjamin_3').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_3").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_3').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if(responseBody.errors.selfie_photo == "no face detected") {
                                        var requestBodyError = {
                                "nik" : $("#nik_penjamin_3").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.selfie_photo,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            bootbox.alert(responseBody.errors.selfie_photo);
                                            $('.prosesVerifikasiPenjamin_3').hide();
                                        })
                                    } else if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_3").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updatePenjamin/";
        
                                            httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                            .done( (response) => {
                                                mappingResponsePenjamin_3DataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiPenjamin_3').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updatePenjamin/";
        
                                    httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_3(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!");
                                        $('.prosesVerifikasiPenjamin_3').hide();
                                    })

                                }
                            }

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

    function verifikasiUpdatePenjamin_4(isTesting, limitCallPenjamin_4, id_trans_so) {
        $('.verifikasiPenjamin_4').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_penjamin_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_penjamin_5").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var id_pen = $('#id_penjamin_4').val();
        var photo_penjamin_4 = document.getElementById("photo_selfie_penjamin_1");
        var base64_selfiePenjamin_4 = "";
        var responseBody;

        if (photo_penjamin_4.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_4.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_4").text() + "02",
                    "nik" : $("#nik_penjamin_4").text(),
                    "name" : $("#name_penjamin_4").text(),
                    "birthdate" : $("#birthdate_penjamin_4").text(),
                    "birthplace" : $("#birthplace_penjamin_4").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);

                if(limitCallPenjamin_4 == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Penjamin!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseCompleteID(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_4").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_4').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_4').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_4").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_4').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_4').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_4").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_4').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_4').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_4").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_4').show();
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_4').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_4").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_4').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updatePenjamin/";
        
                                        httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_4DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_4').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updatePenjamin/";
        
                                httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_4(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!"); 
                                })

                            }
                        }
                        
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_4').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_4").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_4').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_4").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiPenjamin_4').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_4").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_4').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if(responseBody.errors.selfie_photo == "no face detected") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_4").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.selfie_photo,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            bootbox.alert(responseBody.errors.selfie_photo);
                                            $('.prosesVerifikasiPenjamin_4').hide();
                                        })
                                    } else if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_4").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updatePenjamin/";
        
                                            httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                            .done( (response) => {
                                                mappingResponsePenjamin_4DataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiPenjamin_4').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updatePenjamin/";
        
                                    httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_4(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!");
                                        $('.prosesVerifikasiPenjamin_4').hide();
                                    })

                                }
                            }

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

    function verifikasiUpdatePenjamin_5(isTesting, limitCallPenjamin_5, id_trans_so) {
        $('.verifikasiPenjamin_5').hide();

        var user_id = '<?php echo $user_id ?>';
        document.getElementById("verifikasi_npwp_pen_1").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_2").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_3").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_4").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
        document.getElementById("verifikasi_npwp_pen_5").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);

        var id_pen = $('#id_penjamin_5').val();
        var photo_penjamin_5 = document.getElementById("photo_selfie_penjamin_1");
        var base64_selfiePenjamin_5 = "";
        var responseBody;

        if (photo_penjamin_5.src== "http://103.31.232.146/API_WEBTOOL3/null") {
            bootbox.alert("Photo Penjamin Kosong!! Harap Upload Terlebih Dahulu");
        } else {
            $.ajax({
                url: photo_penjamin_5.src,
                type: 'GET',
                beforeSend: function( xhr ) {
                    xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                    xhr.responseType = 'blob';
                }
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#nik_penjamin_5").text() + "02",
                    "nik" : $("#nik_penjamin_5").text(),
                    "name" : $("#name_penjamin_5").text(),
                    "birthdate" : $("#birthdate_penjamin_5").text(),
                    "birthplace" : $("#birthplace_penjamin_5").text(),
                    "identity_photo" : "",
                    "selfie_photo" : base64Encode(data),
                }
                console.log(requestBody);

                if(limitCallPenjamin_5 == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Penjamin!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseCompleteID(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_5").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_5').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_5').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_5").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_5').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiPenjamin_5').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "nik" : $("#nik_penjamin_5").text(),
                                "jenis_call" : "COMPLETE ID",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiPenjamin_5').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiPenjamin_5').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if(responseBody.errors.selfie_photo == "no face detected") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_5").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.selfie_photo,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_5').show();
                                        },
                                    })
                                    .done(function(res) {
                                        bootbox.alert(responseBody.errors.selfie_photo);
                                        $('.prosesVerifikasiPenjamin_5').hide();
                                    })
                                } else if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "nik" : $("#nik_penjamin_5").text(),
                                        "jenis_call" : "COMPLETE ID",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiPenjamin_5').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updatePenjamin/";
        
                                        httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                        .done( (response) => {
                                            mappingResponsePenjamin_5DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiPenjamin_5').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updatePenjamin/";
        
                                httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                .done( (response) => {
                                    mappingResponsePenjamin_5(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!"); 
                                })

                            }
                        }
                    
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_id',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiPenjamin_5').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log(responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_5").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_5').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_5").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiPenjamin_5').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "nik" : $("#nik_penjamin_5").text(),
                                    "jenis_call" : "COMPLETE ID",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiPenjamin_5').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if(responseBody.errors.selfie_photo == "no face detected") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_5").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.selfie_photo,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            bootbox.alert(responseBody.errors.selfie_photo);
                                            $('.prosesVerifikasiPenjamin_5').hide();
                                        })
                                    } else if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "nik" : $("#nik_penjamin_5").text(),
                                            "jenis_call" : "COMPLETE ID",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updatePenjamin/";
        
                                            httpRequestBuilderPenjamin(requestMapperForUpdatePenjaminDataNotFound(id_pen), url, id_trans_so, id_pen, "POST")
                                            .done( (response) => {
                                                mappingResponsePenjamin_5DataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiPenjamin_5').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updatePenjamin/";
        
                                    httpRequestBuilderPenjamin(requestMapperForUpdatePenjamin(responseBody, id_pen), url, id_trans_so, id_pen, "POST")
                                    .done( (response) => {
                                        mappingResponsePenjamin_5(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data Penjamin!!");
                                        $('.prosesVerifikasiPenjamin_5').hide();
                                    })

                                }
                            }

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
        $('.verifikasiNpwp').hide();

        document.getElementById("verifikasi_npwp_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pasangan").disabled = false;},300000);

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp").text();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Debitur Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp").text() + "01",
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
                    console.log(responseBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwp').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwp').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwp').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiNpwp').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwp').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwp').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiNpwp').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storenpwp/";
        
                                    httpRequestBuilder(requestMapperForStoreNpwpDataNotFound(), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseNpwpDataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiNpwp').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storenpwp/";
        
                            httpRequestBuilder(requestMapperForStoreNpwp(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseNpwp(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!"); 
                            })

                        }
                    }
                    
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_npwp',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiNpwp').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log( responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwp').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiNpwp').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwp').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "npwp" : $("#no_npwp").text(),
                                        "jenis_call" : "PENDAPATAN",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storenpwp/";
        
                                        httpRequestBuilder(requestMapperForStoreNpwpDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseNpwpDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiNpwp').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storenpwp/";
        
                                httpRequestBuilder(requestMapperForStoreNpwp(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseNpwp(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                                    $('.prosesVerifikasiNpwp').hide();
                                })

                            }
                        }

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
        $('.verifikasiNpwp').hide();

        document.getElementById("verifikasi_npwp_pasangan").disabled = true;
        setTimeout(function(){document.getElementById("verifikasi_npwp_pasangan").disabled = false;},300000);

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp").text();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Debitur Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp").text() + "02",
                    "nik" : $("#nik").text(),
                    "npwp" : $("#no_npwp").text(),
                    "name" : $("#name_npwp").text(),
                    "birthdate" : $("#birthdate_npwp").text(),
                    "birthplace" : $("#birthplace_npwp").text(),
                    // "income" : $("#income_npwp").text(),
                    "income" : Number($("#income_npwp").text())
                }
                console.log(requestBody);

                if(limitCallNpwp == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi NPWP!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseNpwp(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiNpwp').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwp').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiNpwp').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiNpwp').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiNpwp').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwp').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "npwp" : $("#no_npwp").text(),
                                        "jenis_call" : "PENDAPATAN",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiNpwp').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updateNpwp/";
        
                                        httpRequestBuilderNpwp(requestMapperForUpdateNpwpDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseNpwpDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiNpwp').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updateNpwp/";
        
                                httpRequestBuilderNpwp(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseNpwp(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data NPWP!!");
                                })

                            }
                        }
                        
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_npwp',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwp').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log( responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiNpwp').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiNpwp').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiNpwp').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "npwp" : $("#no_npwp").text(),
                                            "jenis_call" : "PENDAPATAN",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updateNpwp/";
        
                                            httpRequestBuilderNpwp(requestMapperForUpdateNpwpDataNotFound(), url, id_trans_so, "POST")
                                            .done( (response) => {
                                                mappingResponseNpwpDataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiNpwp').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updateNpwp/";
        
                                    httpRequestBuilderNpwp(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseNpwp(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data NPWP!!");
                                        $('.prosesVerifikasiNpwp').hide();
                                    })

                                }
                            }

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

    function verifikasiSimpanNpwpPasangan(isTesting, id_trans_so) {
        $('.verifikasiNpwpPasangan').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp_pas").text();
        var id_pas = $('#id_pasangan').val();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Pasangan Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp_pas").text() + "01",
                    "npwp" : $("#no_npwp_pas").text(),
                    "nik" : $("#nik_pas").text(),
                    "income" : Number($("#income_npwp_pas").text()),
                    "name" : $("#name_npwp_pas").text(),
                    "birthdate" : $("#birthdate_npwp_pas").text(),
                    "birthplace" : $("#birthplace_npwp_pas").text()
                    // "income" : $("#income_npwp_pas").text(),
                }
                console.log(requestBody);

                if (isTesting) {
                    responseBody = responseNpwp(requestBody);
                    console.log(responseBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pas").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPasangan').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPasangan').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pas").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPasangan').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiNpwpPasangan').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pas").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPasangan').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPasangan').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp_pas").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiNpwpPasangan').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storenpwppasangan/";
                                    
                                    httpRequestBuilder(requestMapperForStoreNpwpPasanganDataNotFound(), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseNpwpPasanganDataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiNpwpPasangan').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storenpwppasangan/";
        
                            httpRequestBuilder(requestMapperForStoreNpwpPasangan(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseNpwpPasangan(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                            })

                        }
                    }
                    
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_npwp',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiNpwpPasangan').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log( responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pas").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPasangan').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pas").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiNpwpPasangan').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pas").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPasangan').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "npwp" : $("#no_npwp_pas").text(),
                                        "jenis_call" : "PENDAPATAN",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storenpwppasangan/";
                                    
                                        httpRequestBuilder(requestMapperForStoreNpwpPasanganDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseNpwpPasanganDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiNpwpPasangan').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storenpwppasangan/";
        
                                httpRequestBuilder(requestMapperForStoreNpwpPasangan(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseNpwpPasangan(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                                    $('.prosesVerifikasiNpwpPasangan').hide();
                                })

                            }
                        }

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

    function verifikasiUpdateNpwpPasangan(isTesting, limitCallNpwpPasangan, id_trans_so, id_pasangan) {
        $('.verifikasiNpwpPasangan').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if(data.data_penjamin.length == 1) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                } else if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_1").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_1").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp").text();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Pasangan Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp_pas").text() + "02",
                    "nik" : $("#nik_pas").text(),
                    "npwp" : $("#no_npwp_pas").text(),
                    "name" : $("#name_npwp_pas").text(),
                    "birthdate" : $("#birthdate_npwp_pas").text(),
                    "birthplace" : $("#birthplace_npwp_pas").text(),
                    // "income" : $("#income_npwp_pas").text(),
                    "income" : Number($("#income_npwp_pas").text())
                }
                console.log(requestBody);

                if(limitCallNpwpPasangan == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi NPWP!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseNpwp(requestBody);
                        console.log(responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pas").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiNpwpPasangan').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPasangan').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pas").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiNpwpPasangan').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiNpwpPasangan').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pas").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                                beforeSend: function() {
                                    $('.prosesVerifikasiNpwpPasangan').show();
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPasangan').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "npwp" : $("#no_npwp_pas").text(),
                                        "jenis_call" : "PENDAPATAN",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                        beforeSend: function() {
                                            $('.prosesVerifikasiNpwpPasangan').show();
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/updateNpwppasangan/";
        
                                        httpRequestBuilderNpwpPasangan(requestMapperForUpdateNpwpDataNotFound(), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseNpwpPasanganDataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiNpwpPasangan').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/updateNpwppasangan/";
        
                                httpRequestBuilderNpwpPasangan(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseNpwpPasangan(responseBody);
                                    bootbox.alert("Berhasil Update Verifikasi Data NPWP!!"); 
                                })

                            }
                        }
                        
                    } else {
                        $.ajax({
                            url: 'Verifikasi_controller/verifikasi_npwp',
                            type: 'POST',
                            data: requestBody,
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPasangan').show();
                            },
                        })
                        .done(function(res) {
                            responseBody = JSON.parse(res);
                            console.log( responseBody);

                            if(responseBody.status == 401) {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp_pas").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiNpwpPasangan').hide();
                                })
                            } else if(responseBody.status == 500) {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp_pas").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.errors.message);
                                    $('.prosesVerifikasiNpwpPasangan').hide();
                                })
                            } else if(responseBody.status == 502) {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp_pas").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                })
                                .done(function(res) {
                                    bootbox.alert(responseBody.message);
                                    $('.prosesVerifikasiNpwpPasangan').hide();
                                })
                            } else if (responseBody.status == 200) {
                                if (responseBody.data == null) {
                                    if (responseBody.errors.message == "Data not found") {
                                        var requestBodyError = {
                                            "npwp" : $("#no_npwp_pas").text(),
                                            "jenis_call" : "PENDAPATAN",
                                            "rc" : responseBody.status,
                                            "messages" : responseBody.errors.message,
                                        }

                                        $.ajax({
                                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                            type: 'POST',
                                            data: requestBodyError,
                                            headers: {
                                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                                            },
                                        })
                                        .done(function(res) {
                                            var url = "api/master/verif/updateNpwppasangan/";
        
                                            httpRequestBuilderNpwpPasangan(requestMapperForUpdateNpwpDataNotFound(), url, id_trans_so, "POST")
                                            .done( (response) => {
                                                mappingResponseNpwpPasanganDataNotFound();
                                                bootbox.alert(responseBody.errors.message);
                                                $('.prosesVerifikasiNpwpPasangan').hide();
                                            })
                                        })
                                    }
                                } else {
                                    var url = "api/master/verif/updateNpwppasangan/";
        
                                    httpRequestBuilderNpwpPasangan(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseNpwpPasangan(responseBody);
                                        bootbox.alert("Berhasil Update Verifikasi Data NPWP!!");
                                        $('.prosesVerifikasiNpwpPasangan').hide();
                                    })

                                }
                            }

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

    function verifikasiSimpanNpwpPen_1(isTesting, id_trans_so) {
        $('.verifikasiNpwpPenjamin_1').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 2) {
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                } else if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_2").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_2").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp_pen_1").text();
        var id_pen = $('#id_npwp_penjamin_1').val();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Penjamin Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp_pen_1").text() + "01",
                    "npwp" : $("#no_npwp_pen_1").text(),
                    "nik" : $("#nik_pen_1").text(),
                    "income" : Number($("#income_npwp_pen_1").text()),
                    "name" : $("#name_npwp_pen_1").text(),
                    "birthdate" : $("#birthdate_npwp_pen_1").text(),
                    "birthplace" : $("#birthplace_npwp_pen_1").text()
                    // "income" : $("#income_npwp_pen_1").text(),
                }
                console.log(requestBody);

                if (isTesting) {
                    responseBody = responseNpwp(requestBody);
                    console.log(responseBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_1").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_1').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPenjamin_1').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_1").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_1').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiNpwpPenjamin_1').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_1").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_1').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPenjamin_1').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp_pen_1").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiNpwpPenjamin_1').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storenpwppenjamin/";
        
                                    httpRequestBuilder(requestMapperForStoreNpwpPenjamin(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseNpwpPenjamin_1DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiNpwpPenjamin_1').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storenpwppenjamin/";
        
                            httpRequestBuilder(requestMapperForStoreNpwpPenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseNpwpPenjamin_1(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!"); 
                            })

                        }
                    }
                    
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_npwp',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiNpwpPenjamin_1').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log( responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_1").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPenjamin_1').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_1").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiNpwpPenjamin_1').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_1").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPenjamin_1').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "npwp" : $("#no_npwp_pen_1").text(),
                                        "jenis_call" : "PENDAPATAN",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storenpwppenjamin/";
        
                                        httpRequestBuilder(requestMapperForStoreNpwpPenjamin(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseNpwpPenjamin_1DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiNpwpPenjamin_1').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storenpwppenjamin/";
        
                                httpRequestBuilder(requestMapperForStoreNpwpPenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseNpwpPenjamin_1(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                                    $('.prosesVerifikasiNpwpPenjamin_1').hide();
                                })

                            }
                        }

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

    function verifikasiSimpanNpwpPen_2(isTesting, id_trans_so) {
        $('.verifikasiNpwpPenjamin_2').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 3) {
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                } else if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_3").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_3").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp_pen_2").text();
        var id_pen = $('#id_npwp_penjamin_2').val();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Penjamin Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp_pen_2").text() + "01",
                    "npwp" : $("#no_npwp_pen_2").text(),
                    "nik" : $("#nik_pen_2").text(),
                    "income" : Number($("#income_npwp_pen_2").text()),
                    "name" : $("#name_npwp_pen_2").text(),
                    "birthdate" : $("#birthdate_npwp_pen_2").text(),
                    "birthplace" : $("#birthplace_npwp_pen_2").text()
                    // "income" : $("#income_npwp_pen_2").text(),
                }

                console.log(requestBody);

                if (isTesting) {
                    responseBody = responseNpwp(requestBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_2").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_2').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPenjamin_2').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_2").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_2').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiNpwpPenjamin_2').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_2").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_2').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPenjamin_2').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp_pen_2").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiNpwpPenjamin_2').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storenpwppenjamin/";
        
                                    httpRequestBuilder(requestMapperForStoreNpwpPenjamin(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseNpwpPenjamin_2DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiNpwpPenjamin_2').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storenpwppenjamin/";
        
                            httpRequestBuilder(requestMapperForStoreNpwpPenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseNpwpPenjamin_2(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!"); 
                            })

                        }
                    }
                    
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_npwp',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiNpwpPenjamin_2').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log( responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_2").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPenjamin_2').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_2").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiNpwpPenjamin_2').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_2").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPenjamin_2').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "npwp" : $("#no_npwp_pen_2").text(),
                                        "jenis_call" : "PENDAPATAN",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                        var url = "api/master/verif/storenpwppenjamin/";
        
                                        httpRequestBuilder(requestMapperForStoreNpwpPenjamin(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseNpwpPenjamin_2DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiNpwpPenjamin_2').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storenpwppenjamin/";
        
                                httpRequestBuilder(requestMapperForStoreNpwpPenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseNpwpPenjamin_2(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                                    $('.prosesVerifikasiNpwpPenjamin_2').hide();
                                })

                            }
                        }

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

    function verifikasiSimpanNpwpPen_3(isTesting, id_trans_so) {
        $('.verifikasiNpwpPenjamin_3').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 4) {
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                } else if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_4").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_4").disabled = false;},300000);
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp_pen_3").text();
        var id_pen = $('#id_npwp_penjamin_3').val();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Penjamin Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp_pen_3").text() + "01",
                    "npwp" : $("#no_npwp_pen_3").text(),
                    "nik" : $("#nik_pen_3").text(),
                    "income" : Number($("#income_npwp_pen_3").text()),
                    "name" : $("#name_npwp_pen_3").text(),
                    "birthdate" : $("#birthdate_npwp_pen_3").text(),
                    "birthplace" : $("#birthplace_npwp_pen_3").text()
                    // "income" : $("#income_npwp_pen_3").text(),
                }

                console.log(requestBody);

                if (isTesting) {
                    responseBody = responseNpwp(requestBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_3").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_3').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPenjamin_3').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_3").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_3').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiNpwpPenjamin_3').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_3").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_3').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPenjamin_3').hide();
                        })
                    } else if (responseBody.status == 200) {
                        if (responseBody.data == null) {
                            if (responseBody.errors.message == "Data not found") {
                                var requestBodyError = {
                                    "npwp" : $("#no_npwp_pen_3").text(),
                                    "jenis_call" : "PENDAPATAN",
                                    "rc" : responseBody.status,
                                    "messages" : responseBody.errors.message,
                                }

                                $.ajax({
                                    url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                    type: 'POST',
                                    data: requestBodyError,
                                    headers: {
                                        'Authorization': 'Bearer ' + localStorage.getItem('token')
                                    },
                                    beforeSend: function() {
                                        $('.prosesVerifikasiNpwpPenjamin_3').show();
                                    },
                                })
                                .done(function(res) {
                                    var url = "api/master/verif/storenpwppenjamin/";
        
                                    httpRequestBuilder(requestMapperForStoreNpwpPenjamin(id_pen), url, id_trans_so, "POST")
                                    .done( (response) => {
                                        mappingResponseNpwpPenjamin_3DataNotFound();
                                        bootbox.alert(responseBody.errors.message);
                                        $('.prosesVerifikasiNpwpPenjamin_3').hide();
                                    })
                                })
                            }
                        } else {
                            var url = "api/master/verif/storenpwppenjamin/";
        
                            httpRequestBuilder(requestMapperForStoreNpwpPenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseNpwpPenjamin_3(responseBody);
                                bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!"); 
                            })

                        }
                    }
                    
                } else {
                    $.ajax({
                        url: 'Verifikasi_controller/verifikasi_npwp',
                        type: 'POST',
                        data: requestBody,
                        beforeSend: function() {
                            $('.prosesVerifikasiNpwpPenjamin_3').show();
                        },
                    })
                    .done(function(res) {
                        responseBody = JSON.parse(res);
                        console.log( responseBody);

                        if(responseBody.status == 401) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_3").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPenjamin_3').hide();
                            })
                        } else if(responseBody.status == 500) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_3").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.errors.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.errors.message);
                                $('.prosesVerifikasiNpwpPenjamin_3').hide();
                            })
                        } else if(responseBody.status == 502) {
                            var requestBodyError = {
                                "npwp" : $("#no_npwp_pen_3").text(),
                                "jenis_call" : "PENDAPATAN",
                                "rc" : responseBody.status,
                                "messages" : responseBody.message,
                            }

                            $.ajax({
                                url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                type: 'POST',
                                data: requestBodyError,
                                headers: {
                                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                                },
                            })
                            .done(function(res) {
                                bootbox.alert(responseBody.message);
                                $('.prosesVerifikasiNpwpPenjamin_3').hide();
                            })
                        } else if (responseBody.status == 200) {
                            if (responseBody.data == null) {
                                if (responseBody.errors.message == "Data not found") {
                                    var requestBodyError = {
                                        "npwp" : $("#no_npwp_pen_3").text(),
                                        "jenis_call" : "PENDAPATAN",
                                        "rc" : responseBody.status,
                                        "messages" : responseBody.errors.message,
                                    }

                                    $.ajax({
                                        url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                                        type: 'POST',
                                        data: requestBodyError,
                                        headers: {
                                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                                        },
                                    })
                                    .done(function(res) {
                                       var url = "api/master/verif/storenpwppenjamin/";
        
                                        httpRequestBuilder(requestMapperForStoreNpwpPenjamin(id_pen), url, id_trans_so, "POST")
                                        .done( (response) => {
                                            mappingResponseNpwpPenjamin_3DataNotFound();
                                            bootbox.alert(responseBody.errors.message);
                                            $('.prosesVerifikasiNpwpPenjamin_3').hide();
                                        })
                                    })
                                }
                            } else {
                                var url = "api/master/verif/storenpwppenjamin/";
        
                                httpRequestBuilder(requestMapperForStoreNpwpPenjamin(responseBody, id_pen), url, id_trans_so, "POST")
                                .done( (response) => {
                                    mappingResponseNpwpPenjamin_3(responseBody);
                                    bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                                    $('.prosesVerifikasiNpwpPenjamin_3').hide();
                                })

                            }
                        }

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

    function verifikasiSimpanNpwpPen_4(isTesting, id_trans_so) {
        $('.verifikasiNpwpPenjamin_4').hide();

        get_data({}, id_trans_so)
            .done(function(response) {
                var data = response.data;
                var user_id = '<?php echo $user_id ?>';

                if (data.data_penjamin.length == 5) {
                    document.getElementById("verifikasi_npwp_pen_5").disabled = true;
                    setTimeout(function(){document.getElementById("verifikasi_npwp_pen_5").disabled = false;},300000);
                } 
            })

        var responseBody;
        var no_npwp = $("#no_npwp_pen_4").text();
        var id_pen = $('#id_npwp_penjamin_4').val();

        if (no_npwp == "0" || no_npwp == "" || no_npwp == null) {
            bootbox. alert("Penjamin Tidak Memiliki No. NPWP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',
            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    "trx_id" : "KMI" + $("#no_npwp_pen_4").text() + "01",
                    "npwp" : $("#no_npwp_pen_4").text(),
                    "nik" : $("#nik_pen_4").text(),
                    "income" : Number($("#income_npwp_pen_4").text()),
                    "name" : $("#name_npwp_pen_4").text(),
                    "birthdate" : $("#birthdate_npwp_pen_4").text(),
                    "birthplace" : $("#birthplace_npwp_pen_4").text()
                    // "income" : $("#income_npwp_pen_4").text(),
                }

                console.log(requestBody);

                if (isTesting) {
                    responseBody = responseNpwp(requestBody);

                    if(responseBody.status == 401) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_4").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_4').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.message);
                            $('.prosesVerifikasiNpwpPenjamin_4').hide();
                        })
                    } else if(responseBody.status == 500) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_4").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.errors.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/error_log',
                            type: 'POST',
                            data: requestBodyError,
                            headers: {
                                'Authorization': 'Bearer ' + localStorage.getItem('token')
                            },
                            beforeSend: function() {
                                $('.prosesVerifikasiNpwpPenjamin_4').show();
                            },
                        })
                        .done(function(res) {
                            bootbox.alert(responseBody.errors.message);
                            $('.prosesVerifikasiNpwpPenjamin_4').hide();
                        })
                    } else if(responseBody.status == 502) {
                        var requestBodyError = {
                            "npwp" : $("#no_npwp_pen_4").text(),
                            "jenis_call" : "PENDAPATAN",
                            "rc" : responseBody.status,
                            "messages" : responseBody.message,
                        }

                        $.ajax({
                            url: '<?php echo config_item('api_url') ?>api/master/verif/er