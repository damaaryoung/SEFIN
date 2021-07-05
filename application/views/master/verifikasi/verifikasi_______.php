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
                    <button type="submit" class=