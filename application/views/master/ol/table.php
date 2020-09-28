<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>OL</h1>
                    <label>Offering Letter</label>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Offering Letter</li>
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
                            <table id="table_caa" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="10px"></th>
                                        <th>Nomor SO</th>
                                        <th>Cabang</th>
                                        <th>Nama Cadeb</th>
                                        <th>Plafon</th>
                                        <th>Tenor</th>
                                        <th>Rekomendasi AO</th>
                                        <th>Rekomendasi CA</th>
                                        <th>DSH</th>
                                        <!-- <th>DOO MGR</th> -->
                                        <th>AM</th>
                                        <th>CRM</th>
                                        <!-- <th>KEPATUHAN</th> -->
                                        <th>DIR BIS</th>
                                        <th>DIR RISK</th>
                                        <th>DIRUT</th>
                                    </tr>
                                </thead>
                                <tbody id="data_table_caa" style="font-size: 13px" style="cursor:pointer">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<form id="form_edit_ol">
    <div class="modal fade in" id="modal_edit_ol" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit OL</h5>
                    <button type="button" class="close close_deb" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="height:500px; overflow-y:scroll">
                    <div class="col-md-12">
                        <input type="hidden" id="id_trans_so" name="id_trans_so" value="">
                        <div class="box box-primary" style="background-color: #ffffff1f">
                            <div class="box-body">
                                <div class="card mb-3">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_14" role="button" aria-expanded="false" aria-controls="collapse_14">
                                            <b>MUTASI BANK</b>
                                        </a>
                                    </div>
                                    <div class="card-body collapse form_disable" id="collapse_14">
                                        <div class="row">
                                            <input type="hidden" name="urutan_mutasi[]" value="1">
                                            <div class="form-group col-md-4">
                                                <label>Bank</label>
                                                <input type="text" class="form-control" id="nama_bank_mutasi_ca_1" name="nama_bank_mutasi_ca_1" onkeyup="this.value = this.value.toUpperCase()" readonly>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>No Rekerning</label>
                                                <input type="text" class="form-control" id="no_rekening_mutasi_ca_1" name="no_rekening_mutasi_ca_1" onkeypress="return hanyaAngka(event)" readonly>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Nama Pemilik Mutasi</label>
                                                <input type="text" class="form-control" id="nama_pemilik_mutasi_ca_1" name="nama_pemilik_mutasi_ca_1" onkeyup="this.value = this.value.toUpperCase()" readonly>
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
                                                            <input class="form-control" type="text" id="periode1_ca" name="periode1_ca" onkeyup="this.value = this.value.toUpperCase()" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_1deb_ca" name="frekuensi_1deb_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_1deb_ca" name="nominal_1deb_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_1kred_ca" name="frekuensi_1kred_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_1kred_ca" name="nominal_1kred_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control uang" type="text" id="saldo1_ca" name="saldo1_ca" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="190px">
                                                            <input class="form-control" type="text" id="periode2_ca" name="periode2_ca" onkeyup="this.value = this.value.toUpperCase()" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_2deb_ca" name="frekuensi_2deb_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_2deb_ca" name="nominal_2deb_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_2kred_ca" name="frekuensi_2kred_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_2kred_ca" name="nominal_2kred_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control uang" type="text" id="saldo2_ca" name="saldo2_ca" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="190px">
                                                            <input class="form-control" type="text" id="periode3_ca" name="periode3_ca" onkeyup="this.value = this.value.toUpperCase()" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_3deb_ca" name="frekuensi_3deb_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_3deb_ca" name="nominal_3deb_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_3kred_ca" name="frekuensi_3kred_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_3kred_ca" name="nominal_3kred_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control uang" type="text" id="saldo3_ca" name="saldo3_ca" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="190px">
                                                            <button type="button" class="btn btn-primary" onclick="rata_rata_mutasi_bank1()">Rata-Rata</button>
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="total_frekuensi_1deb_ca" name="total_frekuensi_1deb_ca" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control" type="text" id="total_nominal_1deb_ca" name="total_nominal_1deb_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="total_frekuensi_1kred_ca" name="total_frekuensi_1kred_ca" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control" type="text" id="total_nominal_1kred_ca" name="total_nominal_1kred_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control" type="text" id="total_saldo1_ca" name="total_saldo1_ca" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Bank</label>
                                                <input type="text" class="form-control" id="nama_bank_mutasi_ca_2" name="nama_bank_mutasi_ca_2" onkeyup="this.value = this.value.toUpperCase()" readonly>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>No Rekerning</label>
                                                <input type="text" class="form-control" id="no_rekening_mutasi_ca_2" name="no_rekening_mutasi_ca_2" onkeypress="return hanyaAngka(event)" readonly>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Nama Pemilik Mutasi</label>
                                                <input type="text" class="form-control" id="nama_pemilik_mutasi_ca_2" name="nama_pemilik_mutasi_ca_2" onkeyup="this.value = this.value.toUpperCase()" readonly>
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
                                                            <input class="form-control" type="text" id="periode1_b2_ca" name="periode1_b2_ca" onkeyup="this.value = this.value.toUpperCase()" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_1deb_b2_ca" name="frekuensi_1deb_b2_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_1deb_b2_ca" name="nominal_1deb_b2_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_1kred_b2_ca" name="frekuensi_1kred_b2_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_1kred_b2_ca" name="nominal_1kred_b2_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control uang" type="text" id="saldo1_b2_ca" name="saldo1_b2_ca" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="190px">
                                                            <input class="form-control" type="text" id="periode2_b2_ca" name="periode2_b2_ca" onkeyup="this.value = this.value.toUpperCase()" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_2deb_b2_ca" name="frekuensi_2deb_b2_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_2deb_b2_ca" name="nominal_2deb_b2_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_2kred_b2_ca" name="frekuensi_2kred_b2_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_2kred_b2_ca" name="nominal_2kred_b2_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control uang" type="text" id="saldo2_b2_ca" name="saldo2_b2_ca" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="190px">
                                                            <input class="form-control" type="text" id="periode3_b2_ca" name="periode3_b2_ca" onkeyup="this.value = this.value.toUpperCase()" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_3deb_b2_ca" name="frekuensi_3deb_b2_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_3deb_b2_ca" name="nominal_3deb_b2_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="frekuensi_3kred_b2_ca" name="frekuensi_3kred_b2_ca" onkeypress="return hanyaAngka(event)" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control uang" type="text" id="nominal_3kred_b2_ca" name="nominal_3kred_b2_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control uang" type="text" id="saldo3_b2_ca" name="saldo3_b2_ca" readonly />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="190px">
                                                            <button type="button" class="btn btn-primary" onclick="rata_rata_mutasi_bank2()">Rata-Rata</button>
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="total_frekuensi_1deb_b2_ca" name="total_frekuensi_1deb_b2_ca" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control" type="text" id="total_nominal_1deb_b2_ca" name="total_nominal_1deb_b2_ca" readonly />
                                                        </td>
                                                        <td width="100px">
                                                            <input class="form-control" type="text" id="total_frekuensi_1kred_b2_ca" name="total_frekuensi_1kred_b2_ca" readonly />
                                                        </td>
                                                        <td width="300px">
                                                            <input class="form-control" type="text" id="total_nominal_1kred_b2_ca" name="total_nominal_1kred_b2_ca" readonly />
                                                        </td>
                                                        <td width="400px">
                                                            <input class="form-control" type="text" id="total_saldo2_ca" name="total_saldo2_ca" readonly />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_15" role="button" aria-expanded="false" aria-controls="collapse_15">
                                            <b>DATA KEUANGAN</b>
                                        </a>
                                    </div>
                                    <div class="card-body collapse form_disable" id="collapse_15">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Tujuan Pembukaan Rekening</label>
                                                    <input type="text" class="form-control" name="tujuan_pembukaan_rek" value="" onkeyup="this.value = this.value.toUpperCase()" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Penghasilan Per Tahun</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input type="text" class="form-control uang" id="penghasilan_per_tahun" name="penghasilan_per_tahun" value="0" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Sumber Penghasilan<span class="required_notification">*</span></label>
                                                    <select name="sumber_penghasilan" id="sumber_penghasilan" class="form-control" style="width: 100%;" disabled>
                                                        <option value="">--Pilih--</option>
                                                        <option id="pengh_gaji" value="GAJI">GAJI</option>
                                                        <option id="pengh_bisnis" value="BISNIS">BISNIS / USAHA</option>
                                                        <option id="pengh_lainnya" value="LAINNYA">LAINNYA</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-7">
                                                        <label>Pemasukan Per Bulan<span class="required_notification">*</span></label>
                                                        <select name="pemasukan_per_bulan" id="pemasukan_per_bulan" class="form-control" style="width: 100%;" disabled>
                                                            <option value="">--Pilih--</option>
                                                            <option id="pemasukan_A" value="A">
                                                                < RP.1.000.000</option> <option id="pemasukan_B" value="B">RP.1.000.000,- s/d RP.2.000.000,-
                                                            </option>
                                                            <option id="pemasukan_C" value="C"> > RP.2.000.000,- s/d RP.5.000.000,-</option>
                                                            <option id="pemasukan_D" value="D"> > RP.5.000.000,- s/d RP.10.000.000,-</option>
                                                            <option id="pemasukan_E" value="E"> > RP.10.000.000,-</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="exampleInput1" class="bmd-label-floating">Frek. Trans Pemasukan</label>
                                                        <select name="frek_trans_pemasukan" class="form-control" disabled>
                                                            <option value="">Pilih</option>
                                                            <option id="frek_pem_A" value="A">0-5 Kali</option>
                                                            <option id="frek_pem_B" value="B">6-10 Kali</option>
                                                            <option id="frek_pem_C" value="C">>10 Kali</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-7">
                                                        <label>Pengeluaran Per Bulan<span class="required_notification">*</span></label>
                                                        <select name="pengeluaran_per_bulan" id="pengeluaran_per_bulan" class="form-control select2 select2-danger" style="width: 100%;" disabled>
                                                            <option value="">--Pilih--</option>
                                                            <option id="pengeluaran_A" value="A">
                                                                < RP.1.000.000</option> <option id="pengeluaran_B" value="B">RP.1.000.000,- s/d RP.2.000.000,-
                                                            </option>
                                                            <option id="pengeluaran_C" value="C"> > RP.2.000.000,- s/d RP.5.000.000,-</option>
                                                            <option id="pengeluaran_D" value="D"> > RP.5.000.000,- s/d RP.10.000.000,-</option>
                                                            <option id="pengeluaran_E" value="E"> > RP.10.000.000,-</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-5">
                                                        <label for="exampleInput1" class="bmd-label-floating">Frek. Trans Pengeluaran</label>
                                                        <select name="frek_trans_pengeluaran" class="form-control " disabled>
                                                            <option value="">Pilih</option>
                                                            <option id="frek_peng_A" value="A">0-5 Kali</option>
                                                            <option id="frek_peng_B" value="B">6-10 Kali</option>
                                                            <option id="frek_peng_C" value="C">11-15 Kali</option>
                                                            <option id="frek_peng_D" value="D">>15 Kali</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInput1" class="bmd-label-floating">Sumber Dana Setoran</label>
                                                    <select name="sumber_dana_setoran" class="form-control " disabled>
                                                        <option value="">Pilih</option>
                                                        <option id="set_gaji" value="GAJI">GAJI</option>
                                                        <option id="set_bisnis_usaha" value="BISNIS USAHA">BISNIS / USAHA</option>
                                                        <option id="set_lainnya" value="LAINNYA">LAINNYA</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInput1" class="bmd-label-floating">Tujuan Pengeluaran Dana</label>
                                                    <select name="tujuan_pengeluaran_dana" class="form-control " disabled>
                                                        <option value="">Pilih</option>
                                                        <option id="tuj_peng_konsumtif" value="KONSUMTIF">KONSUMTIF</option>
                                                        <option id="tuj_peng_modal_kerja" value="MODAL KERJA">MODAL KERJA</option>
                                                        <option id="tuj_peng_investasi" value="INVESTASI">INVESTASI</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">No Rek Bank</label>
                                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening" aria-describedby="emailHelp" onkeypress="return hanyaAngka(event)" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_16" role="button" aria-expanded="false" aria-controls="collapse_16">
                                            <b>INFORMASI DAN ANALISA CREDIT CHECKING</b>
                                        </a>
                                    </div>
                                    <div class="card-body collapse" id="collapse_16">
                                        <div class="col-md-12" id="">
                                            <div class="box-body table-responsive no-padding">
                                                <table id="example4" class="table table-bordered table-hover table-sm">
                                                    <thead style="font-size: 11px" class="bg-success">
                                                        <tr>
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
                                                    <tbody id="data_informasi_analisa_credit" style="font-size: 11px">
                                                    </tbody>
                                                    <tfoot id="data_informasi_analisa_credit_tot" style="font-size: 12px; font-weight: 600">
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3 ao">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_23" role="button" aria-expanded="false" aria-controls="collapse_23">
                                            <b>KAPASITAS BULANAN</b>
                                        </a>
                                    </div>
                                    <div class="card-body collapse" id="collapse_23">
                                        <div class="row form_disable">
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
                                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_debitur_ca" name="pemasukan_debitur_ca" onkeyup="total_pemasukan_kapasitas_bulanan_ca();" value="0" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Pasangan</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_pasangan_ca" id="pemasukan_pasangan_ca" onkeyup="total_pemasukan_kapasitas_bulanan_ca();" value="0" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Penjamin</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," name="pemasukan_penjamin_ca" id="pemasukan_penjamin_ca" onkeyup="total_pemasukan_kapasitas_bulanan_ca();" value="0" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Total Pemasukan</label>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="total_pemasukan_ca" name="total_pemasukan_ca" style="color: #000; font-weight: 500;" readonly value="0" readonly>
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
                                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_rumah_tangga_ca" name="biaya_rumah_tangga_ca" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1" class="bmd-label-floating">Transportasi<span class="required_notification">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_transportasi_ca" name="biaya_transportasi_ca" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();" readonly>
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
                                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_pendidikan_ca" name="biaya_pendidikan_ca" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1" class="bmd-label-floating">Telpon, Listrik dan Air<span class="required_notification">*</span></label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_telp_listr_air_ca" name="biaya_telp_listr_air_ca" aria-describedby="" placeholder="" value="0" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();" readonly>
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
                                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="angsuran_lain_ca" value="0" name="angsuran_lain_ca" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6" style="margin-top: -17px;">
                                                        <label for="exampleInputEmail1" class="bmd-label-floating">Lain-Lain</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="biaya_lain_ca" value="0" name="biaya_lain_ca" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_kapasitas_bulanan_ca();" readonly>
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
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_30" role="button" aria-expanded="false" aria-controls="collapse_30">
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
                                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_tunai_ca" name="pemasukan_tunai_ca" value="0" aria-describedby="" onkeyup="total_pendapatan_usaha_ca();" readonly>
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
                                                        <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pemasukan_kredit_ca" name="pemasukan_kredit_ca" value="0" aria-describedby="" onkeyup="total_pendapatan_usaha_ca();" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_sewa_ca" name="biaya_sewa_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_gaji_pegawai_ca" name="biaya_gaji_pegawai_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_belanja_brg_ca" name="biaya_belanja_brg_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_telp_listr_air_usaha_ca" name="biaya_telp_listr_air_usaha_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_sampah_keamanan_ca" name="biaya_sampah_keamanan_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_kirim_barang_ca" name="biaya_kirim_barang_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_hutang_dagang_ca" name="biaya_hutang_dagang_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_angsuran_ca" name="biaya_angsuran_ca" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                        <input type="text" class="form-control uang" id="biaya_lain_lain_ca" name="biaya_lain_lain_ca" aria-describedby="" placeholder="" onkeyup="total_pengeluaran_usaha_ca();" value="0" readonly>
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
                                                    <input type="hidden" value="0" id="pendapatan_usaha_ca_hide" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Pengeluaran Usaha</label>
                                                    <input type="text" class="form-control uang" data-a-sep="." data-a-dec="," id="pengeluaran_usaha_ca" name="pengeluaran_usaha_ca" aria-describedby="" placeholder="" style="color: #000; font-weight: 500;" value="0" readonly>
                                                    <input type="hidden" value="0" id="pengeluaran_usaha_ca_hide" readonly>
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
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_18" role="button" aria-expanded="false" aria-controls="collapse_18">
                                            <b>RINGKASAN ANALISA ASPEK KUALITATIF</b>
                                        </a>
                                    </div>
                                    <div class="card-body collapse" id="collapse_18">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Analisa Kualitatif(1P+5C)</label>
                                                    <textarea id="kualitatif_analisa" name="kualitatif_analisa" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40" readonly></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Strength</label>
                                                    <textarea id="kualitatif_strenght" name="kualitatif_strenght" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40" readonly></textarea>

                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Weakness</label>
                                                    <textarea id="kualitatif_weakness" name="kualitatif_weakness" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40" readonly></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Opportunity</label>
                                                    <textarea id="kualitatif_opportunity" name="kualitatif_opportunity" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40" readonly></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Threatness</label>
                                                    <textarea id="kualitatif_threatness" name="kualitatif_threatness" class="form-control" onkeyup="this.value = this.value.toUpperCase()" rows="8" cols="40" readonly></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_19" role="button" aria-expanded="false" aria-controls="collapse_19">
                                            <b>PENYIMPANGAN</b>
                                        </a>
                                    </div>
                                    <div class="card-body collapse" id="collapse_19">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="bmd-label-floating">Penyimpangan Struktur Dan Resiko</label>
                                            <textarea type="text" class="form-control" name="penyimpangan_struktur" onkeyup="this.value = this.value.toUpperCase()" readonly></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_21" role="button" aria-expanded="false" aria-controls="collapse_21">
                                            <b>STRUKTUR PINJAMAN</b>
                                        </a>
                                    </div>
                                    <div class="card-body collapse" id="collapse_21">
                                        <input type="hidden" id="nilai_taksasi_agunan" name="nilai_taksasi_agunan" value="">
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
                                                            <input type="text" class="form-control uang" name="plafon_kredit" id="plafon_kredit" value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Jangka Waktu<span class="required_notification">*</span></label>
                                                        <select name="jangka_waktu1" id="jangka_waktu" class="form-control select2 select2-danger" style="width: 100%;">
                                                            <option id="tenor12" value="12">12</option>
                                                            <option id="tenor18" value="18">18</option>
                                                            <option id="tenor24" value="24">24</option>
                                                            <option id="tenor30" value="30">30</option>
                                                            <option id="tenor36" value="36">36</option>
                                                            <option id="tenor48" value="48">48</option>
                                                            <option id="tenor60" value="60">60</option>
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
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Pembayaran Angsuran/ Bulan</label>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">Rp.</span>
                                                        </div>
                                                        <input type="text" class="form-control uang" name="pembayaran_bunga" id="pembayaran_bunga" value="0">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Akad Kredit<span class="required_notification">*</span></label>
                                                    <select name="akad_kredit" id="akad_kredit" class="form-control select2 select2-danger" style="width: 100%;">
                                                        <option value="">--Pilih--</option>
                                                        <option id="adendum" value="ADENDUM">ADENDUM</option>
                                                        <option id="notaris" value="NOTARIS">NOTARIS</option>
                                                        <option id="internal" value="INTERNAL">INTERNAL</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Ikatan Agunan<span class="required_notification">*</span></label>
                                                    <select name="ikatan_agunan" id="ikatan_agunan" class="form-control select2 select2-danger" style="width: 100%;">
                                                        <option value="">--Pilih--</option>
                                                        <option id="apht" value="APHT">APHT</option>
                                                        <option id="skmht" value="SKMHT">SKMHT</option>
                                                        <option id="fidusia" value="FIDUSIA">FIDUSIA</option>
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
                                                    <div class="form-group col-md-6">
                                                        <label class="bmd-label-floating">Nama Asuransi</label>
                                                        <select name="nama_asuransi_jiwa" id="nama_asuransi_jiwa" class="form-control" style="width: 100%;">
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
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
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_20" role="button" aria-expanded="false" aria-controls="collapse_20">
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
                                                            <input type="text" class="form-control uang" id="recom_nilai_pinjaman" name="recom_nilai_pinjaman" value="0" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Rekomendasi Tenor<span class="required_notification">*</span></label>
                                                        <select name="recom_tenor" id="recom_tenor" class="form-control select2 select2-danger" style="width: 100%;" disabled>
                                                            <option id="rectenor12" value="12">12</option>
                                                            <option id="rectenor18" value="18">18</option>
                                                            <option id="rectenor24" value="24">24</option>
                                                            <option id="rectenor30" value="30">30</option>
                                                            <option id="rectenor36" value="36">36</option>
                                                            <option id="rectenor48" value="48">48</option>
                                                            <option id="rectenor60" value="60">60</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1" class="bmd-label-floating">Rekomendasi Angsuran</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control uang" id="recom_angsuran" name="recom_angsuran" aria-describedby="emailHelp" placeholder="" value="0" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Rekomendasi Produk Kredit<span class="required_notification">*</span></label>
                                                        <select id="recom_produk_kredit" name="recom_produk_kredit" class="form-control" disabled>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Bunga Pinjaman<span class="required_notification">*</span></label>
                                                    <div class="input-group ">
                                                        <input type="text" class="form-control" name="recom_bunga_pinjaman" readonly>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1" class="bmd-label-floating">Note Rekomendasi</label>
                                                    <textarea type="text" class="form-control" name="note_recom" onkeyup="this.value = this.value.toUpperCase()" readonly> </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header bg-gradient-danger">
                                        <a class="text-light" data-toggle="collapse" href="#collapse_17" role="button" aria-expanded="false" aria-controls="collapse_17">
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

<div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="load_data"></div>
    </div>
</div>

<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

<script>
    $('#form_detail .form_disable').prop('disabled', true);

    $('#table_ol').DataTable({
        "bSort": false,
    });

    tampil_data_caa();

    function tampil_data_caa() {
        $('#table_caa').DataTable({
            "processing": true,
            "serverSide": true,
            'destroy': true,
            "order": [],
            "ajax": {
                "url": "<?php echo site_url('Ol_controller/get_data_caa') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        })
    };

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

    function hitung_kuantitatif() {

        document.getElementById("kuantitatif_ttl_pendapatan").value = document.getElementById("total_pemasukan_ca").value;

        document.getElementById("kuantitatif_ttl_pengeluaran").value = document.getElementById("total_pengeluaran_ca").value;

        var kuantitatif_ttl_pendapatan = document.getElementById("kuantitatif_ttl_pendapatan").value;
        a = kuantitatif_ttl_pendapatan.replace(/[^\d]/g, "");
        var kuantitatif_ttl_pengeluaran = document.getElementById("kuantitatif_ttl_pengeluaran").value;
        b = kuantitatif_ttl_pengeluaran.replace(/[^\d]/g, "");
        var recom_angsuran = document.getElementById("pembayaran_bunga").value;
        c = recom_angsuran.replace(/[^\d]/g, "");
        var recom_pinjaman = document.getElementById("plafon_kredit").value;
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

    get_data_ca = function(opts, id) {
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

    get_produk = function(opts) {
        var url = '<?php echo $this->config->item('api_url'); ?>produk';
        return $.ajax({
            type: 'GET',
            url: url
        });
    }

    update_ol = function(opts, id) {
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

    function rata_rata_mutasi_bank1() {

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

    //RIBUAN
    $('.uang').mask('0.000.000.000', {
        reverse: true
    });

    function rubah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    $('#data_table_caa').on('click', '.edit', function(e) {
        e.preventDefault();
        var id = $(this).attr('data');
        $('#form_edit_ol')[0].reset();
        $('#modal_edit_ol').modal('show');

        get_data_ca({}, id)
            .done(function(response) {
                var data = response.data;
                console.log(data);
                $('#form_edit_ol input[type=hidden][name=id_trans_so]').val(data.id_trans_so);

                //INFORMASI & ANALISA CREDIT CHECKING
                var htmlinformasi_analisa_credit = [];
                var htmlinformasi_analisa_credit_tot = [];
                $.each(data.informasi_analisa_cc.table, function(index, item) {
                    var plafon = (rubah(item.plafon));
                    var baki_debet = (rubah(item.baki_debet));
                    var angsuran = (rubah(item.angsuran));
                    var tr = [

                        '<tr>',
                        '<td>' + item.nama_bank + '</td>',
                        '<td>' + plafon + '</td>',
                        '<td>' + baki_debet + '</td>',
                        '<td>' + angsuran + '</td>',
                        '<td>' + item.collectabilitas + '</td>',
                        '<td>' + item.jenis_kredit + '</td>',
                        '</tr>',
                    ].join('\n');
                    htmlinformasi_analisa_credit.push(tr);
                })

                var total_plafon = (rubah(data.informasi_analisa_cc.total_plafon));
                var total_baki_debet = (rubah(data.informasi_analisa_cc.total_baki_debet));
                var total_angsuran = (rubah(data.informasi_analisa_cc.angsuran));
                var tr = [

                    '<tr>',
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

                //DATA KEUANGAN
                $('#form_edit_ol input[name=tujuan_pembukaan_rek]').val(data.data_keuangan.tujuan_pembukaan_rek);

                var penghasilan_per_tahun = (rubah(data.data_keuangan.penghasilan_per_tahun));
                $('#form_edit_ol input[name=penghasilan_per_tahun]').val(penghasilan_per_tahun);

                if (data.data_keuangan.sumber_penghasilan == "GAJI") {
                    document.getElementById("pengh_gaji").selected = "true";
                } else
                if (data.data_keuangan.sumber_penghasilan == "BISNIS") {
                    document.getElementById("pengh_bisnis").selected = "true";
                } else
                if (data.data_keuangan.sumber_penghasilan == "LAINNYA") {
                    document.getElementById("pengh_lainnya").selected = "true";
                }

                if (data.data_keuangan.pemasukan_per_bulan == "A") {
                    document.getElementById("pemasukan_A").selected = "true";
                } else
                if (data.data_keuangan.pemasukan_per_bulan == "B") {
                    document.getElementById("pemasukan_B").selected = "true";
                } else
                if (data.data_keuangan.pemasukan_per_bulan == "C") {
                    document.getElementById("pemasukan_C").selected = "true";
                } else
                if (data.data_keuangan.pemasukan_per_bulan == "D") {
                    document.getElementById("pemasukan_D").selected = "true";
                } else
                if (data.data_keuangan.pemasukan_per_bulan == "E") {
                    document.getElementById("pemasukan_E").selected = "true";
                }

                if (data.data_keuangan.frek_trans_pemasukan == "A") {
                    document.getElementById("frek_pem_A").selected = "true";
                } else
                if (data.data_keuangan.frek_trans_pemasukan == "B") {
                    document.getElementById("frek_pem_B").selected = "true";
                }
                if (data.data_keuangan.frek_trans_pemasukan == "C") {
                    document.getElementById("frek_pem_C").selected = "true";
                }

                if (data.data_keuangan.pengeluaran_per_bulan == "A") {
                    document.getElementById("pengeluaran_A").selected = "true";
                } else
                if (data.data_keuangan.pengeluaran_per_bulan == "B") {
                    document.getElementById("pengeluaran_B").selected = "true";
                } else
                if (data.data_keuangan.pengeluaran_per_bulan == "C") {
                    document.getElementById("pengeluaran_C").selected = "true";
                } else
                if (data.data_keuangan.pengeluaran_per_bulan == "D") {
                    document.getElementById("pengeluaran_D").selected = "true";
                } else
                if (data.data_keuangan.pengeluaran_per_bulan == "E") {
                    document.getElementById("pengeluaran_E").selected = "true";
                }

                if (data.data_keuangan.frek_trans_pengeluaran == "A") {
                    document.getElementById("frek_peng_A").selected = "true";
                } else
                if (data.data_keuangan.frek_trans_pengeluaran == "B") {
                    document.getElementById("frek_peng_B").selected = "true";
                }
                if (data.data_keuangan.frek_trans_pengeluaran == "C") {
                    document.getElementById("frek_peng_C").selected = "true";
                }

                if (data.data_keuangan.sumber_dana_setoran == "GAJI") {
                    document.getElementById("set_gaji").selected = "true";
                } else
                if (data.data_keuangan.sumber_dana_setoran == "BISNIS USAHA") {
                    document.getElementById("set_bisnis_usaha").selected = "true";
                }
                if (data.data_keuangan.sumber_dana_setoran == "LAINNYA") {
                    document.getElementById("set_lainnya").selected = "true";
                }

                if (data.data_keuangan.tujuan_pengeluaran_dana == "KONSUMTIF") {
                    document.getElementById("tuj_peng_konsumtif").selected = "true";
                } else
                if (data.data_keuangan.tujuan_pengeluaran_dana == "MODAL KERJA") {
                    document.getElementById("tuj_peng_modal_kerja").selected = "true";
                }
                if (data.data_keuangan.tujuan_pengeluaran_dana == "INVESTASI") {
                    document.getElementById("tuj_peng_investasi").selected = "true";
                }

                $('#form_edit_ol input[name=no_rekening]').val(data.data_keuangan.no_rekening);

                //KAPASITAS BULANAN
                var pemasukan_debitur_ca = (rubah(data.kapasitas_bulanan.pemasukan_cadebt));
                $('#form_edit_ol input[name=pemasukan_debitur_ca]').val(pemasukan_debitur_ca);

                var pemasukan_pasangan_ca = (rubah(data.kapasitas_bulanan.pemasukan_pasangan));
                $('#form_edit_ol input[name=pemasukan_pasangan_ca]').val(pemasukan_pasangan_ca);

                var pemasukan_penjamin_ca = (rubah(data.kapasitas_bulanan.pemasukan_penjamin));
                $('#form_edit_ol input[name=pemasukan_penjamin_ca]').val(pemasukan_penjamin_ca);

                var total_pemasukan_ca = (rubah(data.kapasitas_bulanan.total_pemasukan));
                $('#form_edit_ol input[name=total_pemasukan_ca]').val(total_pemasukan_ca);

                var biaya_rumah_tangga_ca = (rubah(data.kapasitas_bulanan.biaya_rumah_tangga));
                $('#form_edit_ol input[name=biaya_rumah_tangga_ca]').val(biaya_rumah_tangga_ca);

                var biaya_transportasi_ca = (rubah(data.kapasitas_bulanan.biaya_transport));
                $('#form_edit_ol input[name=biaya_transportasi_ca]').val(biaya_transportasi_ca);

                var biaya_pendidikan_ca = (rubah(data.kapasitas_bulanan.biaya_pendidikan));
                $('#form_edit_ol input[name=biaya_pendidikan_ca]').val(biaya_pendidikan_ca);

                var biaya_telp_listr_air_ca = (rubah(data.kapasitas_bulanan.telp_listr_air));
                $('#form_edit_ol input[name=biaya_telp_listr_air_ca]').val(biaya_telp_listr_air_ca);

                var angsuran_lain_ca = (rubah(data.kapasitas_bulanan.angsuran));
                $('#form_edit_ol input[name=angsuran_lain_ca]').val(angsuran_lain_ca);

                var biaya_lain_ca = (rubah(data.kapasitas_bulanan.biaya_lain));
                $('#form_edit_ol input[name=biaya_lain_ca]').val(biaya_lain_ca);

                var total_pengeluaran_ca = (rubah(data.kapasitas_bulanan.total_pengeluaran));
                $('#form_edit_ol input[name=total_pengeluaran_ca]').val(total_pengeluaran_ca);


                //PENDAPATAN & PENGELUARAN USAHA
                var pemasukan_tunai_ca = (rubah(data.pendapatan_usaha.pemasukan_tunai));
                $('#form_edit_ol input[name=pemasukan_tunai_ca]').val(pemasukan_tunai_ca);

                var pemasukan_kredit_ca = (rubah(data.pendapatan_usaha.pemasukan_kredit));
                $('#form_edit_ol input[name=pemasukan_kredit_ca]').val(pemasukan_kredit_ca);

                var biaya_sewa_ca = (rubah(data.pendapatan_usaha.biaya_sewa));
                $('#form_edit_ol input[name=biaya_sewa_ca]').val(biaya_sewa_ca);

                var biaya_gaji_pegawai_ca = (rubah(data.pendapatan_usaha.biaya_gaji_pegawai));
                $('#form_edit_ol input[name=biaya_gaji_pegawai_ca]').val(biaya_gaji_pegawai_ca);

                var biaya_belanja_brg_ca = (rubah(data.pendapatan_usaha.biaya_belanja_brg));
                $('#form_edit_ol input[name=biaya_belanja_brg_ca]').val(biaya_belanja_brg_ca);

                var biaya_telp_listr_air_usaha_ca = (rubah(data.pendapatan_usaha.biaya_telp_listr_air));
                $('#form_edit_ol input[name=biaya_telp_listr_air_usaha_ca]').val(biaya_telp_listr_air_usaha_ca);

                var biaya_sampah_keamanan_ca = (rubah(data.pendapatan_usaha.biaya_sampah_kemanan));
                $('#form_edit_ol input[name=biaya_sampah_keamanan_ca]').val(biaya_sampah_keamanan_ca);

                var biaya_kirim_barang_ca = (rubah(data.pendapatan_usaha.biaya_kirim_barang));
                $('#form_edit_ol input[name=biaya_kirim_barang_ca]').val(biaya_kirim_barang_ca);

                var biaya_hutang_dagang_ca = (rubah(data.pendapatan_usaha.biaya_hutang_dagang));
                $('#form_edit_ol input[name=biaya_hutang_dagang_ca]').val(biaya_hutang_dagang_ca);

                var biaya_angsuran_ca = (rubah(data.pendapatan_usaha.biaya_angsuran));
                $('#form_edit_ol input[name=biaya_angsuran_ca]').val(biaya_angsuran_ca);

                var biaya_lain_lain_ca = (rubah(data.pendapatan_usaha.biaya_lain_lain));
                $('#form_edit_ol input[name=biaya_lain_lain_ca]').val(biaya_lain_lain_ca);

                var pendapatan_usaha_ca = (rubah(data.pendapatan_usaha.total_pemasukan));
                $('#form_edit_ol input[name=pendapatan_usaha_ca]').val(pendapatan_usaha_ca);

                var pengeluaran_usaha_ca_hide = (rubah(data.pendapatan_usaha.total_pengeluaran));
                $('#form_edit_ol input[name=pengeluaran_usaha_ca_hide]').val(pengeluaran_usaha_ca_hide);

                var keuntungan_usaha_ca = (rubah(data.pendapatan_usaha.laba_usaha));
                $('#form_edit_ol input[name=keuntungan_usaha_ca]').val(keuntungan_usaha_ca);

                //RINGKASAN ANALISA KUALITATIF
                $('#form_edit_ol textarea[name=kualitatif_analisa]').val(data.ringkasan_analisa.kualitatif_analisa);
                $('#form_edit_ol textarea[name=kualitatif_strenght]').val(data.ringkasan_analisa.kualitatif_strenght);
                $('#form_edit_ol textarea[name=kualitatif_weakness]').val(data.ringkasan_analisa.kualitatif_weakness);
                $('#form_edit_ol textarea[name=kualitatif_opportunity]').val(data.ringkasan_analisa.kualitatif_opportunity);
                $('#form_edit_ol textarea[name=kualitatif_threatness]').val(data.ringkasan_analisa.kualitatif_threatness);

                //PENYIMPANGAN STRUKTUR DAN RESIKO
                $('#form_edit_ol textarea[name=penyimpangan_struktur]').val(data.rekomendasi_pinjaman.penyimpangan_struktur);

                //STRUKTUR PINJAMAN
                get_produk()
                    .done(function(res) {
                        var select = [];
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.nama_produk + '" value="' + e.nama_produk + '">' + e.nama_produk + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_edit_ol select[id=produk]').html(select);
                        if (data.rekomendasi_ca.produk == '' + data.rekomendasi_ca.produk + '') {
                            document.getElementById('' + data.rekomendasi_ca.produk + '').selected = "true";
                        }
                    })

                var plafon_kredit = (rubah(data.rekomendasi_ca.plafon_kredit));
                $('#form_edit_ol input[name=plafon_kredit]').val(plafon_kredit);


                if (data.rekomendasi_ca.jangka_waktu == "12") {
                    document.getElementById("tenor12").selected = "true";
                } else
                if (data.rekomendasi_ca.jangka_waktu == "18") {
                    document.getElementById("tenor18").selected = "true";
                } else
                if (data.rekomendasi_ca.jangka_waktu == "24") {
                    document.getElementById("tenor24").selected = "true";
                } else
                if (data.rekomendasi_ca.jangka_waktu == "30") {
                    document.getElementById("tenor30").selected = "true";
                } else
                if (data.rekomendasi_ca.jangka_waktu == "36") {
                    document.getElementById("tenor36").selected = "true";
                } else
                if (data.rekomendasi_ca.jangka_waktu == "48") {
                    document.getElementById("tenor48").selected = "true";
                }
                if (data.rekomendasi_ca.jangka_waktu == "60") {
                    document.getElementById("tenor60").selected = "true";
                }

                $('#form_edit_ol input[name=suku_bunga]').val(data.rekomendasi_ca.suku_bunga);

                var pembayaran_bunga = (rubah(data.rekomendasi_ca.pembayaran_bunga));
                $('#form_edit_ol input[name=pembayaran_bunga]').val(pembayaran_bunga);

                if (data.rekomendasi_ca.akad_kredit == "ADENDUM") {
                    document.getElementById("adendum").selected = "true";
                } else
                if (data.rekomendasi_ca.akad_kredit == "NOTARIS") {
                    document.getElementById("notaris").selected = "true";
                } else
                if (data.rekomendasi_ca.akad_kredit = "INTERNAL") {
                    document.getElementById("internal").selected = "true";
                }

                if (data.rekomendasi_ca.ikatan_agunan == "APHT") {
                    document.getElementById("apht").selected = "true";
                } else
                if (data.rekomendasi_ca.ikatan_agunan == "SKMHT") {
                    document.getElementById("skmht").selected = "true";
                } else
                if (data.rekomendasi_ca.ikatan_agunan = "FIDUSIA") {
                    document.getElementById("fidusia").selected = "true";
                }

                var biaya_provisi = (rubah(data.rekomendasi_ca.biaya_provisi));
                $('#form_edit_ol input[name=biaya_provisi]').val(biaya_provisi);

                var biaya_administrasi = (rubah(data.rekomendasi_ca.biaya_administrasi));
                $('#form_edit_ol input[name=biaya_administrasi]').val(biaya_administrasi);

                var biaya_credit_checking = (rubah(data.rekomendasi_ca.biaya_credit_checking));
                $('#form_edit_ol input[name=biaya_credit_checking]').val(biaya_credit_checking);

                var notaris = (rubah(data.rekomendasi_ca.notaris));
                $('#form_edit_ol input[name=notaris]').val(notaris);

                var biaya_tabungan = (rubah(data.rekomendasi_ca.biaya_tabungan));
                $('#form_edit_ol input[name=biaya_tabungan]').val(biaya_tabungan);

                //ASURANSI JIWA


                get_nama_asuransi()
                    .done(function(res) {
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.kode_asuransi + '1" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_edit_ol select[id=nama_asuransi_jiwa]').html(select1 + select);
                        if (data.asuransi_jiwa.nama_asuransi == '' + data.asuransi_jiwa.nama_asuransi + '') {
                            document.getElementById('' + data.asuransi_jiwa.nama_asuransi + '1').selected = "true";
                        }
                    })
                // $('#form_edit_ol input[name=nama_asuransi_jiwa]').val(data.asuransi_jiwa.nama_asuransi);
                $('#form_edit_ol input[name=jangka_waktu_as_jiwa]').val(data.asuransi_jiwa.jangka_waktu);

                var nilai_pertanggungan_as_jiwa = (rubah(data.asuransi_jiwa.nilai_pertanggungan));
                $('#form_edit_ol input[name=nilai_pertanggungan_as_jiwa]').val(nilai_pertanggungan_as_jiwa);
                console.log(data.rekomendasi_ca.biaya_asuransi_jiwa);
                var premi_asuransi_jiwa = (rubah(data.rekomendasi_ca.biaya_asuransi_jiwa));
                $('#form_edit_ol input[name=premi_asuransi_jiwa]').val(premi_asuransi_jiwa);

                $('#form_edit_ol input[name=jatuh_tempo_as_jiwa]').val(data.asuransi_jiwa.jatuh_tempo);
                $('#form_edit_ol input[name=umur_nasabah_as_jiwa]').val(data.asuransi_jiwa.umur_nasabah);
                $('#form_edit_ol input[name=berat_badan_as_jiwa]').val(data.asuransi_jiwa.berat_badan);
                $('#form_edit_ol input[name=tinggi_badan_as_jiwa]').val(data.asuransi_jiwa.tinggi_badan);

                //ASURANSI KEBAKARAN
                get_nama_asuransi()
                    .done(function(res) {

                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.kode_asuransi + '2" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_edit_ol select[id=nama_asuransi_keb]').html(select1 + select);
                        if (data.asuransi_jaminan_kebakaran[0].nama_asuransi == '' + data.asuransi_jaminan_kebakaran[0].nama_asuransi + '') {
                            document.getElementById('' + data.asuransi_jaminan_kebakaran[0].nama_asuransi + '2').selected = "true";
                        }
                    })

                $('#form_edit_ol input[name=jangka_waktu_asuransi_keb]').val(data.asuransi_jaminan_kebakaran[0].jangka_waktu);

                var nilai_pertanggungan_as_kebakaran = (rubah(data.asuransi_jaminan_kebakaran[0].nilai_pertanggungan));
                $('#form_edit_ol input[name=nilai_pertanggungan_keb]').val(nilai_pertanggungan_as_kebakaran);

                var premi_asuransi_kebakaran = (rubah(data.rekomendasi_ca.biaya_asuransi_jaminan_kebakaran));
                $('#form_edit_ol input[name=premi_asuransi_kebakaran]').val(premi_asuransi_kebakaran);

                $('#form_edit_ol input[name=jatuh_tempo_keb]').val(data.asuransi_jaminan_kebakaran[0].jatuh_tempo);

                //ASURANSI KENDARAAN
                get_nama_asuransi()
                    .done(function(res) {
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.kode_asuransi + '3" value="' + e.kode_asuransi + '">' + e.nm_asuransi + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_edit_ol select[id=nama_asuransi_ken]').html(select1 + select);
                        if (data.asuransi_jaminan_kendaraan[0].nama_asuransi == '' + data.asuransi_jaminan_kendaraan[0].nama_asuransi + '') {
                            document.getElementById('' + data.asuransi_jaminan_kendaraan[0].nama_asuransi + '3').selected = "true";
                        }
                    })

                $('#form_edit_ol input[name=jangka_waktu_asuransi_ken]').val(data.asuransi_jaminan_kendaraan[0].jangka_waktu);

                var nilai_pertanggungan_as_kendaraan = (rubah(data.asuransi_jaminan_kendaraan[0].nilai_pertanggungan));
                $('#form_edit_ol input[name=nilai_pertanggungan_ken]').val(nilai_pertanggungan_as_kendaraan);

                var premi_asuransi_kendaraan = (rubah(data.rekomendasi_ca.biaya_asuransi_jaminan_kendaraan));
                $('#form_edit_ol input[name=premi_asuransi_kendaraan]').val(premi_asuransi_kendaraan);

                $('#form_edit_ol input[name=jatuh_tempo_ken]').val(data.asuransi_jaminan_kendaraan[0].jatuh_tempo);

                var nilai_taksasi_agunan = (rubah(data.nilai_taksasi_agunan[0].nilai_taksasi_agunan));
                $('#form_edit_ol input[name=nilai_taksasi_agunan]').val(nilai_taksasi_agunan);

                //REKOMENDASI PINJAMAN
                var recom_nilai_pinjaman = (rubah(data.rekomendasi_pinjaman.recom_nilai_pinjaman));
                $('#form_edit_ol input[name=recom_nilai_pinjaman]').val(recom_nilai_pinjaman);

                if (data.rekomendasi_pinjaman.recom_tenor == "12") {
                    document.getElementById("rectenor12").selected = "true";
                } else
                if (data.rekomendasi_pinjaman.recom_tenor == "18") {
                    document.getElementById("rectenor18").selected = "true";
                } else
                if (data.rekomendasi_pinjaman.recom_tenor == "24") {
                    document.getElementById("rectenor24").selected = "true";
                } else
                if (data.rekomendasi_pinjaman.recom_tenor == "30") {
                    document.getElementById("rectenor30").selected = "true";
                } else
                if (data.rekomendasi_pinjaman.recom_tenor == "36") {
                    document.getElementById("rectenor36").selected = "true";
                } else
                if (data.rekomendasi_pinjaman.recom_tenor == "48") {
                    document.getElementById("rectenor48").selected = "true";
                }
                if (data.rekomendasi_pinjaman.recom_tenor == "60") {
                    document.getElementById("rectenor60").selected = "true";
                }

                get_produk()
                    .done(function(res) {
                        var select = [];
                        var option = [
                            '<option value="' + data.rekomendasi_pinjaman.recom_produk_kredit + '">' + data.rekomendasi_pinjaman.recom_produk_kredit + '</option>'
                        ].join('\n');
                        select.push(option);
                        $('#form_edit_ol select[id=recom_produk_kredit]').html(select);
                    })

                var recom_angsuran = (rubah(data.rekomendasi_pinjaman.recom_angsuran));
                $('#form_edit_ol input[name=recom_angsuran]').val(recom_angsuran);

                $('#form_edit_ol input[name=recom_bunga_pinjaman]').val(data.rekomendasi_pinjaman.bunga_pinjaman);
                $('#form_edit_ol textarea[name=note_recom]').val(data.rekomendasi_pinjaman.note_recom);

                //RINGKASAN ANALISA KUANTITATIF
                var kuantitatif_ttl_pendapatan = (rubah(data.ringkasan_analisa.kuantitatif_ttl_pendapatan));
                $('#form_edit_ol input[name=kuantitatif_ttl_pendapatan]').val(kuantitatif_ttl_pendapatan);

                var kuantitatif_ttl_pengeluaran = (rubah(data.ringkasan_analisa.kuantitatif_ttl_pengeluaran));
                $('#form_edit_ol input[name=kuantitatif_ttl_pengeluaran]').val(kuantitatif_ttl_pengeluaran);

                var kuantitatif_pendapatan = (rubah(data.ringkasan_analisa.kuantitatif_pendapatan_bersih));
                $('#form_edit_ol input[name=kuantitatif_pendapatan]').val(kuantitatif_pendapatan);

                var kuantitatif_angsuran = (rubah(data.ringkasan_analisa.kuantitatif_angsuran));
                $('#form_edit_ol input[name=kuantitatif_angsuran]').val(kuantitatif_angsuran);

                $('#form_edit_ol input[name=kuantitatif_ltv]').val(data.ringkasan_analisa.kuantitatif_ltv);
                $('#form_edit_ol input[name=kuantitatif_dsr]').val(data.ringkasan_analisa.kuantitatif_dsr);
                $('#form_edit_ol input[name=kuantitatif_idir]').val(data.ringkasan_analisa.kuantitatif_idir);
                $('#form_edit_ol input[name=kuantitatif_hasil]').val(data.ringkasan_analisa.kuantitatif_hasil);

                //MUTASI BANK
                //BANK 1
                $('#form_edit_ol input[id=nama_bank_mutasi_ca_1]').val(data.mutasi_bank[0].nama_bank);
                $('#form_edit_ol input[id=no_rekening_mutasi_ca_1]').val(data.mutasi_bank[0].no_rekening);
                $('#form_edit_ol input[id=nama_pemilik_mutasi_ca_1]').val(data.mutasi_bank[0].nama_pemilik);

                $('#form_edit_ol input[id=periode1_ca]').val(data.mutasi_bank[0].table[0].periode);
                $('#form_edit_ol input[id=frekuensi_1deb_ca]').val(data.mutasi_bank[0].table[0].frek_debet);
                $('#form_edit_ol input[id=nominal_1deb_ca]').val(data.mutasi_bank[0].table[0].nominal_debet);
                $('#form_edit_ol input[id=frekuensi_1kred_ca]').val(data.mutasi_bank[0].table[0].frek_kredit);
                $('#form_edit_ol input[id=nominal_1kred_ca]').val(data.mutasi_bank[0].table[0].nominal_kredit);
                $('#form_edit_ol input[id=saldo1_ca]').val(data.mutasi_bank[0].table[0].saldo);
                $('#form_edit_ol input[id=periode2_ca]').val(data.mutasi_bank[0].table[1].periode);
                $('#form_edit_ol input[id=frekuensi_2deb_ca]').val(data.mutasi_bank[0].table[1].frek_debet);
                $('#form_edit_ol input[id=nominal_2deb_ca]').val(data.mutasi_bank[0].table[1].nominal_debet);
                $('#form_edit_ol input[id=frekuensi_2kred_ca]').val(data.mutasi_bank[0].table[1].frek_kredit);
                $('#form_edit_ol input[id=nominal_2kred_ca]').val(data.mutasi_bank[0].table[1].nominal_kredit);
                $('#form_edit_ol input[id=saldo2_ca]').val(data.mutasi_bank[0].table[1].saldo);
                $('#form_edit_ol input[id=periode3_ca]').val(data.mutasi_bank[0].table[2].periode);
                $('#form_edit_ol input[id=frekuensi_3deb_ca]').val(data.mutasi_bank[0].table[2].frek_debet);
                $('#form_edit_ol input[id=nominal_3deb_ca]').val(data.mutasi_bank[0].table[2].nominal_debet);
                $('#form_edit_ol input[id=frekuensi_3kred_ca]').val(data.mutasi_bank[0].table[2].frek_kredit);
                $('#form_edit_ol input[id=nominal_3kred_ca]').val(data.mutasi_bank[0].table[2].nominal_kredit);
                $('#form_edit_ol input[id=saldo3_ca]').val(data.mutasi_bank[0].table[2].saldo);
                rata_rata_mutasi_bank1();

                // //BANK 2
                $('#form_edit_ol input[id=nama_bank_mutasi_ca_2]').val(data.mutasi_bank[1].nama_bank);
                $('#form_edit_ol input[id=no_rekening_mutasi_ca_2]').val(data.mutasi_bank[1].no_rekening);
                $('#form_edit_ol input[id=nama_pemilik_mutasi_ca_2]').val(data.mutasi_bank[1].nama_pemilik);
                $('#form_edit_ol input[id=periode1_b2_ca]').val(data.mutasi_bank[1].table[0].periode);
                $('#form_edit_ol input[id=frekuensi_1deb_b2_ca]').val(data.mutasi_bank[1].table[0].frek_debet);
                $('#form_edit_ol input[id=nominal_1deb_b2_ca]').val(data.mutasi_bank[1].table[0].nominal_debet);
                $('#form_edit_ol input[id=frekuensi_1kred_b2_ca]').val(data.mutasi_bank[1].table[0].frek_kredit);
                $('#form_edit_ol input[id=nominal_1kred_b2_ca]').val(data.mutasi_bank[1].table[0].nominal_kredit);
                $('#form_edit_ol input[id=saldo1_b2_ca').val(data.mutasi_bank[1].table[0].saldo);
                $('#form_edit_ol input[id=periode2_b2_ca]').val(data.mutasi_bank[1].table[1].periode);
                $('#form_edit_ol input[id=frekuensi_2deb_b2_ca]').val(data.mutasi_bank[1].table[1].frek_debet);
                $('#form_edit_ol input[id=nominal_2deb_b2_ca]').val(data.mutasi_bank[1].table[1].nominal_debet);
                $('#form_edit_ol input[id=frekuensi_2kred_b2_ca]').val(data.mutasi_bank[1].table[1].frek_kredit);
                $('#form_edit_ol input[id=nominal_2kred_b2_ca]').val(data.mutasi_bank[1].table[1].nominal_kredit);
                $('#form_edit_ol input[id=saldo2_b2_ca]').val(data.mutasi_bank[1].table[1].saldo);
                $('#form_edit_ol input[id=periode3_b2_ca]').val(data.mutasi_bank[1].table[2].periode);
                $('#form_edit_ol input[id=frekuensi_3deb_b2_ca]').val(data.mutasi_bank[1].table[2].frek_debet);
                $('#form_edit_ol input[id=nominal_3deb_b2_ca]').val(data.mutasi_bank[1].table[2].nominal_debet);
                $('#form_edit_ol input[id=frekuensi_3kred_b2_ca]').val(data.mutasi_bank[1].table[2].frek_kredit);
                $('#form_edit_ol input[id=nominal_3kred_b2_ca]').val(data.mutasi_bank[1].table[2].nominal_kredit);
                $('#form_edit_ol input[id=saldo3_b2_ca]').val(data.mutasi_bank[1].table[2].saldo);
                rata_rata_mutasi_bank2();

            })
            .fail(function(jqXHR) {
                bootbox.alert('Data tidak ditemukan');
            });

    });

    // klik submit update
    $('#form_edit_ol').on('submit', function(e) {
        var id = $('input[name=id_trans_so]', this).val();
        e.preventDefault();
        var formData = new FormData();
        //STRUKTUR PINJAMAN
        formData.append('produk', $('select[name=produk]', this).val());

        var plafon_kredit = $('input[name=plafon_kredit]', this).val();
        plafon_kredit = plafon_kredit.replace(/[^\d]/g, "");
        formData.append('plafon_kredit', plafon_kredit);

        formData.append('jangka_waktu', $('#jangka_waktu').val());

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

        //ASURANSI JIWA
        formData.append('nama_asuransi', $('#nama_asuransi_jiwa').val());
        formData.append('jangka_waktu_jiwa', $('input[name=jangka_waktu_as_jiwa]', this).val());

        var nilai_pertanggungan_as_jiwa = $('input[name=nilai_pertanggungan_as_jiwa]', this).val();
        nilai_pertanggungan_as_jiwa = nilai_pertanggungan_as_jiwa.replace(/[^\d]/g, "");
        formData.append('nilai_pertanggungan', nilai_pertanggungan_as_jiwa);

        var premi_asuransi_jiwa = $('input[name=premi_asuransi_jiwa]', this).val();
        premi_asuransi_jiwa = premi_asuransi_jiwa.replace(/[^\d]/g, "");
        formData.append('biaya_asuransi_jiwa', premi_asuransi_jiwa);

        formData.append('jatuh_tempo', $('input[name=jatuh_tempo_as_jiwa]', this).val());
        formData.append('berat_badan', $('input[name=berat_badan_as_jiwa]', this).val());
        formData.append('tinggi_badan', $('input[name=tinggi_badan_as_jiwa]', this).val());
        formData.append('umur_nasabah', $('input[name=umur_nasabah_as_jiwa]', this).val());
        //asuransi jaminan kebakaran
        formData.append('nama_asuransi_keb', $('#nama_asuransi_keb').val());
        formData.append('jangka_waktu_asuransi_keb', $('input[name=jangka_waktu_asuransi_keb]', this).val());

        var nilai_pertanggungan_keb = $('input[name=nilai_pertanggungan_keb]', this).val();
        nilai_pertanggungan_keb = nilai_pertanggungan_keb.replace(/[^\d]/g, "");
        formData.append('nilai_pertanggungan_keb', nilai_pertanggungan_keb);

        var premi_asuransi_kebakaran = $('input[name=premi_asuransi_kebakaran]', this).val();
        premi_asuransi_kebakaran = premi_asuransi_kebakaran.replace(/[^\d]/g, "");
        formData.append('biaya_asuransi_jaminan_kebakaran', premi_asuransi_kebakaran);

        formData.append('jatuh_tempo_keb', $('input[name=jatuh_tempo_keb]', this).val());
        //asuransi jaminan kendaraan
        formData.append('nama_asuransi_ken', $('#nama_asuransi_ken').val());
        formData.append('jangka_waktu_asuransi_ken', $('input[name=jangka_waktu_asuransi_ken]', this).val());

        var nilai_pertanggungan_ken = $('input[name=nilai_pertanggungan_ken]', this).val();
        nilai_pertanggungan_ken = nilai_pertanggungan_ken.replace(/[^\d]/g, "");
        formData.append('nilai_pertanggungan_ken', nilai_pertanggungan_ken);

        var premi_asuransi_kendaraan = $('input[name=premi_asuransi_kendaraan]', this).val();
        premi_asuransi_kendaraan = premi_asuransi_kendaraan.replace(/[^\d]/g, "");
        formData.append('biaya_asuransi_jaminan_kendaraan', premi_asuransi_kendaraan)

        formData.append('jatuh_tempo_ken', $('input[name=jatuh_tempo_ken]', this).val());

        // RINGKASAN ANALISA KUANTITATIF
        var kuantitatif_ttl_pendapatan = $('input[name=kuantitatif_ttl_pendapatan]', this).val();
        kuantitatif_ttl_pendapatan = kuantitatif_ttl_pendapatan.replace(/[^\d]/g, "");
        formData.append('kuantitatif_ttl_pendapatan', kuantitatif_ttl_pendapatan);

        var kuantitatif_ttl_pengeluaran = $('input[name=kuantitatif_ttl_pengeluaran]', this).val();
        kuantitatif_ttl_pengeluaran = kuantitatif_ttl_pengeluaran.replace(/[^\d]/g, "");
        formData.append('kuantitatif_ttl_pengeluaran', kuantitatif_ttl_pengeluaran);

        var kuantitatif_pendapatan = $('input[name=kuantitatif_pendapatan]', this).val();
        kuantitatif_pendapatan = kuantitatif_pendapatan.replace(/[^\d]/g, "");
        formData.append('kuantitatif_pendapatan_bersih', kuantitatif_pendapatan);

        var kuantitatif_angsuran = $('input[name=kuantitatif_angsuran]', this).val();
        kuantitatif_angsuran = kuantitatif_angsuran.replace(/[^\d]/g, "");
        formData.append('kuantitatif_angsuran', kuantitatif_angsuran);

        formData.append('kuantitatif_ltv', $('input[name=kuantitatif_ltv]', this).val());
        formData.append('kuantitatif_dsr', $('input[name=kuantitatif_dsr]', this).val());
        formData.append('kuantitatif_idir', $('input[name=kuantitatif_idir]', this).val());
        formData.append('kuantitatif_hasil', $('input[name=kuantitatif_hasil]', this).val());


        update_ol(formData, id)
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
                // bootbox.alert(error);
            });
    });
</script>