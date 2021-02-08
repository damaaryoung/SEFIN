<div id="lihat_activity" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Activity Tele Sales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Activity Tele Sales</li>
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
                            <button class="btn btn-primary tambah" id="click_tambah_activity" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="table_activity" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="5px">
                                            No
                                        </th>
                                        <th>
                                            Waktu Telepon
                                        </th>
                                        <th>
                                            No. Kontrak
                                        </th>
                                        <th>
                                            Nama Debitur
                                        </th>
                                        <th>
                                            Contacted
                                        </th>
                                        <th>
                                            Uncontacted
                                        </th>
                                        <th>
                                            Unconnected
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_activity" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
</div>

<div id="tambah_activity" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 style="margin-top: 20px">Activity Tele Sales</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right" style="background-color: #f4f6f9">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Activity Tele Sales</li>
                </ol>
            </div>
        </div>
    </div>

    <form id="form_detail">
        <div class="col-md-12">
            <div class="box box-primary" style="background-color: #ffffff1f">
                <div class="box-header with-border"></div>
                <div class="box-body">
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_1" role="button" aria-expanded="false" aria-controls="collapse_1">
                            <a class="text-light">
                                <b>ACTIVITY</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_1">
                            <div class="row">
                                <div class="form-group text-primary" style="margin-left: 10px">
                                    <i class="far fa-clock"></i> <?php echo date(' d-m-Y') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <label>No. Kontrak<span class="required_notification">*</span></label>
                                    <div class="input-group" style="margin-bottom: 16px">
                                        <input type="text" id="no_kontrak" name="no_kontrak" class="form-control">
                                            <span class="input-group-append">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-no_kontrak">Pilih No Kontrak</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Debitur<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" name="nama_deb" id="nama_deb">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>No. Telepon 1<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_telp_1" id="no_telp_1" onkeypress=" return keyCode(event)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No. Telepon 2<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_telp_2" id="no_telp_2" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="required_notification">*</span></label>
                                        <textarea name="alamat" id="alamat" class="form-control " rows="5" cols="40"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Plafon Awal<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="plafon_awal" id="plafon_awal">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Angsuran ke-<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="angsuran_ke" id="angsuran_ke" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Nominal Angsuran<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="nominal_angsuran" id="nominal_angsuran">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Taksasi Agunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="taksasi_agunan" id="taksasi_agunan">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Jenis Agunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="jenis_agunan" name="jenis_agunan";>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal SHGB Expired<span class="required_notification">*</span></label>
                                            <input type="date" class="form-control" name="shgb_expired" id="shgb_expired">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir Debitur<span class="required_notification">*</span></label>
                                            <input type="date" class="form-control" name="tgl_lahir_deb" id="tgl_lahir_deb"  onchange="changeBirthDate()">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Umur<span class="required_notification">*</span></label>
                                            <input type="text" id="umur" name="umur" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Update No. Telepon (jika ada)</label>
                                        <input type="text" class="form-control" name="update_telp" id="update_telp" onkeypress=" return keyCode(event)">
                                    </div>
                                    <div class="form-group">
                                        <label>Update Pekerjaan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="update_pekerjaan" name="update_pekerjaan";>
                                    </div>
                                    <div class="form-group">
                                        <label>Update Penghasilan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="update_penghasilan" name="update_penghasilan";>
                                    </div>
                                    <div class="row" style="margin-top: 25px">
                                        <div class="form-group col-md-6">
                                            <label>Sisa Angsuran<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="sisa_angsuran" name="sisa_angsuran" onkeypress=" return keyCode(event)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Max. Pastdue<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="max_pastdue" id="max_pastdue" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Baki Debet<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="baki_debet" name="baki_debet";>
                                    </div>
                                    <div class="form-group">
                                        <label>Total Pelunasan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="total_pelunasan" name="total_pelunasan";>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_2" role="button" aria-expanded="false" aria-controls="collapse_2">
                            <a class="text-light">
                                <b>CREDIT CHECKING</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Pengajuan RO<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="pengajuan_ro" name="pengajuan_ro">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tenor<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="tenor" name="tenor" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Angsuran<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="angsuran" name="angsuran">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Biaya Provisi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="biaya_provisi" name="biaya_provisi">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>DSR (35%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="dsr" name="dsr" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>IDIR (80%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="idir" name="idir" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Produk Kredit<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="produk_kredit" name="produk_kredit">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Rate/Bln (%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="rate" name="rate" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Biaya Administrasi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="biaya_admin" name="biaya_admin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Biaya Kredit Checking<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="biaya_cc" name="biaya_cc">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>LTV (70%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="ltv" name="ltv"  >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Total Pencairan (Estimasi)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="total_pencairan" name="total_pencairan">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_3" role="button" aria-expanded="false" aria-controls="collapse_3">
                            <a class="text-light">
                                <b>RESULT CALL</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_3">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Contacted</label>
                                    <select name="contacted" id="contacted" class="form-control">
                                        <option value="" selected="selected" disabled>--Pilih--</option>
                                        <option value="Prospek">Prospek</option>
                                        <option value="Interest">Interest</option>
                                        <option value="Call Back">Call Back</option>
                                        <option value="Hang Up">Hang Up</option>
                                        <option value="UnProspek">UnProspek</option>
                                        <option value="Miss Customer">Miss Customer</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>UnContacted</label>
                                    <select name="uncontacted" id="uncontacted" class="form-control">
                                        <option value="" selected="selected" disabled>--Pilih--</option>
                                        <option value="Nobody Pick Up">Nobody Pick Up</option>
                                        <option value="Busy Line">Busy Line</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>UnConnected</label>
                                    <select name="unconnected" id="unconnected" class="form-control">
                                        <option value="" selected="selected" disabled>--Pilih--</option>
                                        <option value="Invalid Number">Invalid Number</option>
                                        <option value="No Dial Tone">No Dial Tone</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 20px;">
                        <label style="font-style: bold; color: #383a3a;">Note Tele Sales</label>
                        <textarea name="note_tele_sales" id="note_tele_sales" style="width: 100%" rows="5"></textarea>
                    </div>

                    <button type="submit" id="submit" class="btn btn-success submit"><i class="fa fa-save"></i> Submit</button>

                </div>
            </div>
        </div>
    </form>  
</div>

<div id="detail_activity" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 style="margin-top: 20px">Activity Tele Sales</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right" style="background-color: #f4f6f9">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Activity Tele Sales</li>
                </ol>
            </div>
        </div>
    </div>

    <form id="form_show">
        <div class="col-md-12">
            <div class="box box-primary" style="background-color: #ffffff1f">
                <div class="box-header with-border"></div>
                <div class="box-body">
                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_1" role="button" aria-expanded="false" aria-controls="collapse_1">
                            <a class="text-light">
                                <b>ACTIVITY</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_1">
                            <div class="row">
                                <div class="col-md-6">
                                <label>No. Kontrak<span class="required_notification">*</span></label>
                                    <div class="input-group" style="margin-bottom: 16px">
                                        <input type="text" id="no_kontrak_detail" name="no_kontrak_detail" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Debitur<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" name="nama_deb_detail" id="nama_deb_detail">
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>No. Telepon 1<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_telp_1_detail" id="no_telp_1_detail" onkeypress=" return keyCode(event)">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No. Telepon 2<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="no_telp_2_detail" id="no_telp_2_detail" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat<span class="required_notification">*</span></label>
                                        <textarea name="alamat_detail" id="alamat_detail" class="form-control " rows="5" cols="40"></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Plafon Awal<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="plafon_awal_detail" id="plafon_awal_detail">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Angsuran ke-<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="angsuran_ke_detail" id="angsuran_ke_detail" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Nominal Angsuran<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="nominal_angsuran_detail" id="nominal_angsuran_detail">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Taksasi Agunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="taksasi_agunan_detail" id="taksasi_agunan_detail">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Jenis Agunan<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="jenis_agunan_detail" name="jenis_agunan_detail";>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal SHGB Expired<span class="required_notification">*</span></label>
                                            <input type="date" class="form-control" name="shgb_expired_detail" id="shgb_expired_detail">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir Debitur<span class="required_notification">*</span></label>
                                            <input type="date" class="form-control" name="tgl_lahir_deb_detail" id="tgl_lahir_deb_detail"  onchange="changeBirthDate()">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Umur<span class="required_notification">*</span></label>
                                            <input type="text" id="umur_detail" name="umur_detail" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Update No. Telepon (jika ada)</label>
                                        <input type="text" class="form-control" name="update_telp_detail" id="update_telp_detail" onkeypress=" return keyCode(event)">
                                    </div>
                                    <div class="form-group">
                                        <label>Update Pekerjaan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="update_pekerjaan_detail" name="update_pekerjaan_detail";>
                                    </div>
                                    <div class="form-group">
                                        <label>Update Penghasilan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="update_penghasilan_detail" name="update_penghasilan_detail";>
                                    </div>
                                    <div class="row" style="margin-top: 25px">
                                        <div class="form-group col-md-6">
                                            <label>Sisa Angsuran<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="sisa_angsuran_detail" name="sisa_angsuran_detail";>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Max. Pastdue<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" name="max_pastdue_detail" id="max_pastdue_detail" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Baki Debet<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="baki_debet_detail" name="baki_debet_detail";>
                                    </div>
                                    <div class="form-group">
                                        <label>Total Pelunasan<span class="required_notification">*</span></label>
                                        <input type="text" class="form-control" id="total_pelunasan_detail" name="total_pelunasan_detail";>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_2" role="button" aria-expanded="false" aria-controls="collapse_2">
                            <a class="text-light">
                                <b>CREDIT CHECKING</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Pengajuan RO<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="pengajuan_ro_detail" name="pengajuan_ro_detail">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tenor<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="tenor_detail" name="tenor_detail" onkeypress=" return keyCode(event)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Angsuran<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="angsuran_detail" name="angsuran_detail">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Biaya Provisi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="biaya_provisi_detail" name="biaya_provisi_detail">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>DSR (35%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="dsr_detail" name="dsr_detail" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>IDIR (80%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="idir_detail" name="idir_detail" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Produk Kredit<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="produk_kredit_detail" name="produk_kredit_detail">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Rate/Bln (%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="rate_detail" name="rate_detail" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Biaya Administrasi<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="biaya_admin_detail" name="biaya_admin_detail">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Biaya Kredit Checking<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="biaya_cc_detail" name="biaya_cc_detail">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>LTV (70%)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="ltv_detail" name="ltv_detail"  >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Total Pencairan (Estimasi)<span class="required_notification">*</span></label>
                                            <input type="text" class="form-control" id="total_pencairan_detail" name="total_pencairan_detail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header bg-gradient-danger" data-toggle="collapse" href="#collapse_3" role="button" aria-expanded="false" aria-controls="collapse_3">
                            <a class="text-light">
                                <b>RESULT CALL</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_3">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Contacted</label>
                                    <select name="contacted_detail" id="contacted_detail" class="form-control">
                                        <option value="" selected="selected" disabled>--Pilih--</option>
                                        <option value="Prospek">Prospek</option>
                                        <option value="Interest">Interest</option>
                                        <option value="Call Back">Call Back</option>
                                        <option value="Hang Up">Hang Up</option>
                                        <option value="UnProspek">UnProspek</option>
                                        <option value="Miss Customer">Miss Customer</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>UnContacted</label>
                                    <select name="uncontacted_detail" id="uncontacted_detail" class="form-control">
                                        <option value="" selected="selected" disabled>--Pilih--</option>
                                        <option value="Nobody Pick Up">Nobody Pick Up</option>
                                        <option value="Busy Line">Busy Line</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>UnConnected</label>
                                    <select name="unconnected_detail" id="unconnected_detail" class="form-control">
                                        <option value="" selected="selected" disabled>--Pilih--</option>
                                        <option value="Invalid Number">Invalid Number</option>
                                        <option value="No Dial Tone">No Dial Tone</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="margin-top: 20px;">
                        <label style="font-style: bold; color: #383a3a;">Note Tele Sales</label>
                        <textarea readonly name="note_tele_sales_detail" id="note_tele_sales_detail" style="width: 100%" rows="5"></textarea>
                    </div>

                    <button type="button" class="btn btn-danger btn-sm back" id="click_back"><i class="fa fa-caret-left"> Kembali</i></button>

                </div>
            </div>
        </div>
    </form>  
</div>

<div class="modal fade" id="modal-no_kontrak" tabindex="-1" role="dialog" aria-labelledby="modal-no_kontrakLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-no_kontrakLabel">Pilih No. Kontrak</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="box-body table-responsive no-padding">
                                    <table id="table_no_kontrak" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                        <thead style="font-size: 14px" class="bg-danger">
                                            <tr>
                                                <th width="5px">
                                                    No
                                                </th>
                                                <th>
                                                    No. Rekening
                                                </th>
                                                <th>
                                                    Nama Debitur
                                                </th>
                                                <th width="10px">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_no_kontrak" style="font-size: 13px">
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
</div>

<script>

    function keyCode(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (evt.which > 47 && evt.which < 58) {  
            return true;
        } else {
            return false;
        }
    }

    var update_penghasilan = document.getElementById('update_penghasilan');
	update_penghasilan.addEventListener('keyup', function(e)
	{
		update_penghasilan.value = formatRupiah(this.value);
	});
	
	update_penghasilan.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var plafon_awal = document.getElementById('plafon_awal');
	plafon_awal.addEventListener('keyup', function(e)
	{
		plafon_awal.value = formatRupiah(this.value);
	});
	
	plafon_awal.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var nominal_angsuran = document.getElementById('nominal_angsuran');
	nominal_angsuran.addEventListener('keyup', function(e)
	{
		nominal_angsuran.value = formatRupiah(this.value);
	});
	
	nominal_angsuran.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var taksasi_agunan = document.getElementById('taksasi_agunan');
	taksasi_agunan.addEventListener('keyup', function(e)
	{
		taksasi_agunan.value = formatRupiah(this.value);
	});
	
	taksasi_agunan.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var baki_debet = document.getElementById('baki_debet');
	baki_debet.addEventListener('keyup', function(e)
	{
		baki_debet.value = formatRupiah(this.value);
	});
	
	baki_debet.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var total_pelunasan = document.getElementById('total_pelunasan');
	total_pelunasan.addEventListener('keyup', function(e)
	{
		total_pelunasan.value = formatRupiah(this.value);
	});
	
	total_pelunasan.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var pengajuan_ro = document.getElementById('pengajuan_ro');
	pengajuan_ro.addEventListener('keyup', function(e)
	{
		pengajuan_ro.value = formatRupiah(this.value);
	});
	
	pengajuan_ro.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var angsuran = document.getElementById('angsuran');
	angsuran.addEventListener('keyup', function(e)
	{
		angsuran.value = formatRupiah(this.value);
	});
	
	angsuran.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var biaya_provisi = document.getElementById('biaya_provisi');
	biaya_provisi.addEventListener('keyup', function(e)
	{
		biaya_provisi.value = formatRupiah(this.value);
	});
	
	biaya_provisi.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var biaya_admin = document.getElementById('biaya_admin');
	biaya_admin.addEventListener('keyup', function(e)
	{
		biaya_admin.value = formatRupiah(this.value);
	});
	
	biaya_admin.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });
    
    var biaya_cc = document.getElementById('biaya_cc');
	biaya_cc.addEventListener('keyup', function(e)
	{
		biaya_cc.value = formatRupiah(this.value);
	});
	
	biaya_cc.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var total_pencairan = document.getElementById('total_pencairan');
	total_pencairan.addEventListener('keyup', function(e)
	{
		total_pencairan.value = formatRupiah(this.value);
	});
	
	total_pencairan.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var rate = document.getElementById('rate');
	rate.addEventListener('keyup', function(e)
	{
		rate.value = formatRupiah(this.value);
	});
	
	rate.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var dsr = document.getElementById('dsr');
	dsr.addEventListener('keyup', function(e)
	{
		dsr.value = formatRupiah(this.value);
	});
	
	dsr.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var idir = document.getElementById('idir');
	idir.addEventListener('keyup', function(e)
	{
		idir.value = formatRupiah(this.value);
	});
	
	idir.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

    var ltv = document.getElementById('ltv');
	ltv.addEventListener('keyup', function(e)
	{
		ltv.value = formatRupiah(this.value);
	});
	
	ltv.addEventListener('keydown', function(event)
	{
		limitCharacter(event);
    });

	function formatRupiah(bilangan, prefix)
	{
		var number_string = bilangan.replace(/[^,\d]/g, '').toString(),
			split	= number_string.split(','),
			sisa 	= split[0].length % 3,
			rupiah 	= split[0].substr(0, sisa),
			ribuan 	= split[0].substr(sisa).match(/\d{1,3}/gi);
			
		if (ribuan) {
			separator = sisa ? '.' : '';
			rupiah += separator + ribuan.join('.');
		}
		
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
		return prefix == undefined ? rupiah : (rupiah ? rupiah : '');
	}

    function removePoint(stringBilangan) {
        var formattedBilangan = stringBilangan;
        formattedBilangan = stringBilangan.replaceAll(".", "");
        formattedBilangan = formattedBilangan.replace(",", ".");
        return formattedBilangan;
    }
	
	function limitCharacter(event)
	{
		key = event.which || event.keyCode;
		if ( key != 188 // Comma
			 && key != 8 // Backspace
			 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
			 && (key < 48 || key > 57) // Non digit
			) 
		{
			event.preventDefault();
			return false;
		}
    }
    
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

    function click_detail() {
        $('#form_show .form-control').prop('disabled', true);
    }

    $(function(){

        hide_all = function(){
            $('#lihat_activity').hide();
            $('#tambah_activity').hide();
            $('#detail_activity').hide();
        }

        hide_all();

        $('#lihat_activity').show();

        $('#click_tambah_activity').click(function(){
            hide_all();
            $('#tambah_activity').show();
        });

        $('#click_detail_activity').click(function(){
            hide_all();
            $('#detail_activity').show();
        });

        $('#click_back').click(function(){
            hide_all();
            $('#detail_activity').hide();
            $('#lihat_activity').show();
        });

        tambah_activity = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>/api/master/telesales/create';
            var data = opts;

            return $.ajax({
                url : url,
                type: 'POST',
                contentType: false,
                processData: false,
                data: data,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }   

        $('#form_detail').on('submit',function(e){

            if (document.getElementById('no_kontrak').value == "") {
                bootbox.alert("No. Kontrak Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('nama_deb').value == "") {
                bootbox.alert("Nama Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('tgl_lahir_deb').value == "") {
                bootbox.alert("Tanggal Lahir Debitur Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('no_telp_1').value == "") {
                bootbox.alert("No. Telepon 1 Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('alamat').value == "") {
                bootbox.alert("Alamat Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('plafon_awal').value == "") {
                bootbox.alert("Plafon Awal Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('angsuran_ke').value == "") {
                bootbox.alert("Angsuran ke- Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('sisa_angsuran').value == "") {
                bootbox.alert("Sisa Angsuran Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('max_pastdue').value == "") {
                bootbox.alert("Max. Pastdue Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('nominal_angsuran').value == "") {
                bootbox.alert("Nominal Angsuran Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('taksasi_agunan').value == "") {
                bootbox.alert("Taksasi Agunan Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('baki_debet').value == "") {
                bootbox.alert("Baki Debet Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('jenis_agunan').value == "") {
                bootbox.alert("Jenis Agunan Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('shgb_expired').value == "") {
                bootbox.alert("Tanggal SHGB Expired Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('total_pelunasan').value == "") {
                bootbox.alert("Total Pelunasan Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('pengajuan_ro').value == "") {
                bootbox.alert("Pengajuan RO Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('tenor').value == "") {
                bootbox.alert("Tenor Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('produk_kredit').value == "") {
                bootbox.alert("Produk Kredit Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('rate').value == "") {
                bootbox.alert("Rate Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('angsuran').value == "") {
                bootbox.alert("Angsuran Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('biaya_provisi').value == "") {
                bootbox.alert("Biaya Provisi Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('biaya_admin').value == "") {
                bootbox.alert("Biaya Admin Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('biaya_cc').value == "") {
                bootbox.alert("Biaya Credit Checking Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('dsr').value == "") {
                bootbox.alert("DSR Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('idir').value == "") {
                bootbox.alert("IDIR Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('ltv').value == "") {
                bootbox.alert("LTV Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('total_pencairan').value == "") {
                bootbox.alert("Total Pencairan (Estimasi) Tidak Boleh Kosong !!!");
                return (false);
            }
            if (document.getElementById('contacted').value == "" && document.getElementById('uncontacted').value == "" && document.getElementById('unconnected').value == "") {
                bootbox.alert("Harap Pilih Salah Satu Result Call !!!");
                return (false);
            }
            if ((document.getElementById('contacted').value != "" && document.getElementById('uncontacted').value != "") || (document.getElementById('uncontacted').value != "" && document.getElementById('unconnected').value != "") || (document.getElementById('contacted').value != "" && document.getElementById('unconnected').value != "")) {
                bootbox.alert("Hanya Boleh Pilih Salah Satu Result Call !!!");
                return (false);
            }
            if (document.getElementById('note_tele_sales').value == "") {
                bootbox.alert("Notes Tele Tidak Boleh Kosong !!!");
                return (false);
            }
            e.preventDefault();
            var formData = new FormData();
            formData.append('no_kontrak',$('input[name=no_kontrak]',this).val());
            formData.append('nama_deb',$('input[name=nama_deb]',this).val());
            formData.append('tgl_lahir_deb',$('input[name=tgl_lahir_deb]',this).val());
            formData.append('umur',$('input[name=umur]',this).val());
            formData.append('no_telp_1',$('input[name=no_telp_1]',this).val());
            formData.append('no_telp_2',$('input[name=no_telp_2]',this).val());
            formData.append('update_telp',$('input[name=update_telp]',this).val());
            formData.append('alamat',$('textarea[name=alamat]',this).val());
            formData.append('update_pekerjaan',$('input[name=update_pekerjaan]',this).val());
            formData.append('update_penghasilan', removePoint($('input[name=update_penghasilan]',this).val()));
            formData.append('plafon_awal',removePoint($('input[name=plafon_awal]',this).val()));
            formData.append('angsuran_ke',$('input[name=angsuran_ke]',this).val());
            formData.append('sisa_angsuran',removePoint($('input[name=sisa_angsuran]',this).val()));
            formData.append('max_pastdue',$('input[name=max_pastdue]',this).val());
            formData.append('nominal_angsuran', removePoint($('input[name=nominal_angsuran]',this).val()));
            formData.append('taksasi_agunan', removePoint($('input[name=taksasi_agunan]',this).val()));
            formData.append('baki_debet', removePoint($('input[name=baki_debet]',this).val()));
            formData.append('jenis_agunan', $('input[name=jenis_agunan]',this).val());
            formData.append('shgb_expired',$('input[name=shgb_expired]',this).val());
            formData.append('total_pelunasan', removePoint($('input[name=total_pelunasan]',this).val()));
            
            formData.append('pengajuan_ro', removePoint($('input[name=total_pelunasan]',this).val()));
            formData.append('tenor', $('input[name=tenor]',this).val());
            formData.append('produk_kredit', $('input[name=produk_kredit]',this).val());
            formData.append('rate', removePoint($('input[name=rate]',this).val()));
            formData.append('angsuran', removePoint($('input[name=angsuran]',this).val()));
            formData.append('biaya_provisi', removePoint($('input[name=biaya_provisi]',this).val()));
            formData.append('biaya_admin', removePoint($('input[name=biaya_admin]',this).val()));
            formData.append('biaya_cc', removePoint($('input[name=biaya_cc]',this).val()));
            formData.append('dsr', removePoint($('input[name=dsr]',this).val()));
            formData.append('idir', removePoint($('input[name=idir]',this).val()));
            formData.append('ltv', removePoint($('input[name=ltv]',this).val()));
            formData.append('total_pencairan', removePoint($('input[name=total_pencairan]',this).val()));
            
            formData.append('result_contacted',$('select[name=contacted]',this).val());
            formData.append('result_uncontacted',$('select[name=uncontacted]',this).val());
            formData.append('result_unconnected',$('select[name=unconnected]',this).val());
            formData.append('note_tele_sales',$('textarea[name=note_tele_sales]',this).val());


            tambah_activity(formData)
            .done(function(res){
                var data = res;
                bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_detail')[0].reset();
                });
                
            })
            .fail(function(jqXHR){
                var data = jqXHR.responseJSON;
                var error = "";

                if(typeof data == 'string') {
                    error = '<p>'+ data +'</p>';
                } else {
                    $.each(data, function(index, item){
                        error += '<p>'+ item +'</p>'+"\n";
                    });
                }
                bootbox.alert(error);
            });
        });

        get_activity = function(opts, id){
            var url = '<?php echo config_item('api_url') ?>api/master/telesales/index/all';

            if(id != undefined){
                url+=id;
            }

            if(opts != undefined){
                var data = opts;
            }

            return $.ajax({
                type : 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

        get_no_kontrak = function(opts, id){
            var url = '<?php echo config_item('api_url') ?>api/master/telecoll/index';

            if(id != undefined){
                url+=id;
            }

            if(opts != undefined){
                var data = opts;
            }

            return $.ajax({
                type : 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

        get_data_nasabah = function(opts, nasabah_id) {
            var url = '<?php echo config_item('api_url') ?>api/master/telecoll/detail/';

            if (nasabah_id != undefined) {
                url += nasabah_id;
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

        get_detail = function(opts, id){
            var url = '<?php echo config_item('api_url') ?>api/master/telesales/detail/by/';

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

        load_data_activity = function(pagin){
            get_activity()
            .done(function(response){
                var data = response.data;
                var html = [];
                var no   = 0;
                
                if(data.length === 0 ){
                    var tr =[
                    '<tr valign="midle">',
                    '<td colspan="9" style="text-align: center">Tidak ada data</td>',
                    '</tr>'
                    ].join('\n');
                    $('#data_activity').html(tr);

                    return;
                }

                $.each(data,function(index,item){
                    no++;
                    var tr = [
                    '<tr>',
                        '<td style="text-align: center">'+ no +'</td>',
                        '<td>'+ formatTanggalTelepon(item.tgl_telp) +'</td>',
                        '<td>'+ item.no_kontrak +'</td>',
                        '<td>'+ item.nama_debitur +'</td>',
                        '<td>'+ nullChecker(item.result_contacted) +'</td>',
                        '<td>'+ nullChecker(item.result_uncontacted) +'</td>',
                        '<td>'+ nullChecker(item.result_unconnected) +'</td>',
                        '<td style="text-align: center">',
                            '<button type="button" class="btn btn-warning btn-sm detail" onclick="click_detail()" id="click_detail_activity" data="' + item.id + '"><i style="color: #fff;" class="fas fa-eye"></i></button>',
                        '</td>',
                    '</tr>'
                    ].join('\n');
                    html.push(tr);
                });

                $('#data_activity').html(html);
                $('#table_activity').DataTable({
                    "paging": true,
                    "retrieve": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            })

            .fail(function(response){
                $('#data_activity').html('<tr><td colspan="9" style="text-align: center">Tidak ada data</td></tr>');
            });
        }

        $('#data_activity').show();
        load_data_activity();

        load_data_no_kontrak = function(pagin){
            get_no_kontrak()
            .done(function(response){
                var data = response.data;
                var html = [];
                var no   = 0;
                
                if(data.length === 0 ){
                    var tr =[
                    '<tr valign="midle">',
                    '<td colspan="4" style="text-align: center">Tidak ada data</td>',
                    '</tr>'
                    ].join('\n');
                    $('#data_no_kontrak').html(tr);

                    return;
                }

                $.each(data,function(index,item){
                    no++;
                    var tr = [
                    '<tr>',
                        '<td style="text-align: center">'+ no +'</td>',
                        '<td>'+ item.no_kontrak +'</td>',
                        '<td>'+ item.nama_debitur +'</td>',
                        '<td style="text-align: center">',
                            '<button type="button" class="btn btn-info btn-sm edit" data-target="#update" data="' + item.nasabah_id + '"><i class="fas fa-plus-circle"></i></button>',
                        '</td>',
                    '</tr>'
                    ].join('\n');
                    html.push(tr);
                });

                $('#data_no_kontrak').html(html);
                $('#table_no_kontrak').DataTable({
                    "paging": true,
                    "retrieve": true,
                    "lengthChange": true,
                    "searching": true,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            })

            .fail(function(response){
                $('#data_no_kontrak').html('<tr><td colspan="4" style="text-align: center">Tidak ada data</td></tr>');
            });
        }

        $('#data_no_kontrak').show();
        load_data_no_kontrak();

        $('#data_no_kontrak').on('click', '.edit', function(e) {
            e.preventDefault();
            var nasabah_id = $(this).attr('data');
            var html = [];

            get_data_nasabah({}, nasabah_id)
                .done(function(response) {
                    var data = response.data[0];
                    console.log(data);

                    $('#form_detail input[name=no_kontrak]').val(data.no_kontrak);
                    $('#form_detail input[name=nama_deb]').val(data.nama_debitur);
                    $('#form_detail input[name=tgl_lahir_deb]').val(data.tgl_lahir);
                    $('#form_detail input[name=umur]').val(data.umur);
                    $('#form_detail input[name=no_telp_1]').val(data.no_telp);
                    $('#form_detail textarea[name=alamat]').val(data.alamat);
                    $('#form_detail input[name=plafon_awal]').val(formatNumber(data.plafon_awal));
                    $('#form_detail input[name=angsuran_ke]').val(data.angsuran_ke);
                    $('#form_detail input[name=max_pastdue]').val(data.max_pastdue);
                    $('#form_detail input[name=nominal_angsuran]').val(formatNumber(data.nominal_angsuran));
                    $('#form_detail input[name=baki_debet]').val(formatNumber(data.baki_debet));
                    $('#form_detail input[name=total_pelunasan]').val(formatNumber(data.total_pelunasan));
                    $('#form_detail input[name=jenis_agunan]').val(data.jenis_agunan);
                    $('#form_detail input[name=shgb_expired]').val(data.shgb_expired);

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                });

            $("#modal-no_kontrak").modal('hide');
            $('#tambah_activity').show();
        });

        $('#data_activity').on('click', '.detail', function(e) {
            e.preventDefault();
            var id = $(this).attr('data');
            var html = [];

            get_detail({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    $('#form_show input[name=no_kontrak_detail]').val(data.no_kontrak);
                    $('#form_show input[name=nama_deb_detail]').val(data.nama_debitur);
                    $('#form_show input[name=tgl_lahir_deb_detail]').val(data.tanggal_lahir);
                    $('#form_show input[name=umur_detail]').val(data.usia_debitur);
                    $('#form_show textarea[name=alamat_detail]').val(data.alamat_domisili);
                    $('#form_show input[name=no_telp_1_detail]').val(data.no_telp_1);
                    $('#form_show input[name=no_telp_2_detail]').val(data.no_telp_2);
                    $('#form_show input[name=update_telp_detail]').val(data.no_telp_3);
                    $('#form_show input[name=plafon_awal_detail]').val(formatNumber(data.plafon_awal));
                    $('#form_show input[name=angsuran_ke_detail]').val(data.angsuran_ke);
                    $('#form_show input[name=sisa_angsuran_detail]').val(formatNumber(data.sisa_angsuran));
                    $('#form_show input[name=max_pastdue_detail]').val(data.max_pastdue);
                    $('#form_show input[name=nominal_angsuran_detail]').val(formatNumber(data.nominal_angsuran));
                    $('#form_show input[name=taksasi_agunan_detail]').val(formatNumber(data.taksasi_agunan));
                    $('#form_show input[name=baki_debet_detail]').val(formatNumber(data.baki_debet));
                    $('#form_show input[name=total_pelunasan_detail]').val(formatNumber(data.total_pelunasan));
                    $('#form_show input[name=jenis_agunan_detail]').val(data.jenis_agunan);
                    $('#form_show input[name=shgb_expired_detail]').val(data.shgb_expired);

                    $('#form_show input[name=pengajuan_ro_detail]').val(formatNumber(data.pengajuan_ro));
                    $('#form_show input[name=tenor_detail]').val(data.tenor);
                    $('#form_show input[name=produk_kredit_detail]').val(data.produk_kredit);
                    $('#form_show input[name=rate_detail]').val(formatNumber(data.rate_bulan));
                    $('#form_show input[name=angsuran_detail]').val(formatNumber(data.angsuran));
                    $('#form_show input[name=biaya_provisi_detail]').val(formatNumber(data.biaya_provisi));
                    $('#form_show input[name=biaya_admin_detail]').val(formatNumber(data.biaya_adm));
                    $('#form_show input[name=biaya_cc_detail]').val(formatNumber(data.biaya_cc));
                    $('#form_show input[name=dsr_detail]').val(formatNumber(data.dsr));
                    $('#form_show input[name=idir_detail]').val(formatNumber(data.idir));
                    $('#form_show input[name=ltv_detail]').val(formatNumber(data.ltv));
                    $('#form_show input[name=total_pencairan_detail]').val(formatNumber(data.total_pencairan));
                    
                    $('#form_show select[name=contacted_detail]').val(data.result_contacted);
                    $('#form_show select[name=uncontacted_detail]').val(data.result_uncontacted);
                    $('#form_show select[name=unconnected_detail]').val(data.result_unconnected);
                    $('#form_show textarea[name=note_tele_sales_detail]').val(data.note_tele_sales);

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                });
            
            $('#lihat_activity').hide();
            $('#detail_activity').show();
        });

        nullChecker = function(paramsToCheck) {
            if (paramsToCheck == "" || paramsToCheck == undefined || paramsToCheck == null) {
                return "-";
            } else {
                return paramsToCheck;
            }
        }

        formatTanggalTelepon = function(tanggalTelepon) {
            var splittedTanggalTelepon = tanggalTelepon.split(" ");

            var objTanggalTelepon = {
                tanggal : splittedTanggalTelepon[0],
                waktu   : splittedTanggalTelepon[1]
            }

            var formattedTanggal = objTanggalTelepon.tanggal.split("-").reverse().join("-");

            return `${formattedTanggal} | ${objTanggalTelepon.waktu}`
        }

        formatNumber = function(number) {

            var number = number.split(".");
            var firstNumber = number[0];
            var secondNumber = number[1];

            if (firstNumber == 0) {
                firstNumber = "0";
            } else {
                firstNumber = firstNumber.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            return `${firstNumber},${secondNumber}`;
        }

    });
</script>