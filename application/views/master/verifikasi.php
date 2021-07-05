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
                        <div class="card-header bg-gradient-danger" id="npwp" data-toggle="collapse" href="#collapse_npwp" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>NPWP</b>
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
                        <div class="card-header bg-gradient-danger" id="properti" data-toggle="collapse" href="#collapse_properti" role="button" aria-expanded="false">
                            <a class="text-light">
                                <b>PROPERTI</b>
                            </a>
                        </div>
                        <div class="card-body collapse" id="collapse_properti">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Parameter</th>
                                        <th>Data Properti</th>
                                        <th>Verifikasi Result</th>
                                    </tr>
                                </thead>
                                <tbody id="data_properti" style="font-size: 13px">
                                </tbody>
                            </table>
                            <div class="btn-group" style="float: right; margin-top: 10px">
                                <button class="btn btn-primary verifikasiProperti" id="verifikasi_properti"><i class="fa fa-user-check"> Verifikasi</i></button>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-danger btn-sm back" id="click_back"><i class="fa fa-caret-left"> Kembali</i></button>
        
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    tampil_data_verifikasi();

    var jabatan = '<?php echo $nama_user['data']['jabatan'] ?>';
    if (jabatan == 'ADMIN LEGAL' || jabatan == 'IT STAFF' || jabatan == 'SUPERVISOR IT' || jabatan == 'HEAD IT') {
        $('#properti').show();
        $('.verifikasiDebitur').hide();
        $('.verifikasiPasangan').hide();
        $('.verifikasiNpwp').hide();
        $('.running_text').hide();
        $('.warning_nama').hide();
    } else {
        $('#properti').hide();
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
        $('.verifikasiProperti').show();
        $('.running_text').show();
        $('.warning_nama').show();
    }

    function click_detail() {
        $('.verifikasiDebitur').hide();
        $('.verifikasiPasangan').hide();
        $('.verifikasiNpwp').hide();
        $('.verifikasiProperti').hide();
        $('.running_text').hide();
        $('.warning_nama').hide();
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
                    trx_id : "VeriJelas" + $("#nik").text(),
                    nik : $("#nik").text(),
                    name : $("#name").text(),
                    birthdate : $(formatTanggal("#birthdate")).text(),
                    birthplace : $("#birthplace").text(),
                    identity_photo : "",
                    selfie_photo : base64Encode(data),
                }
                
                if (isTesting) {
                    responseBody = responseDebiturPasangan(requestBody);
                    var url = "api/master/verif/storecadeb/";

                    httpRequestBuilder(requestMapperForStoreCadeb(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponseDebitur(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data Debitur!!");
                        $('.verifikasiDebitur').hide();
                    })
                } else {
                    $.ajax({
                        url: '<?php echo config_item('api_verijelas')?>bprkm_poc/completeid',
                        type: 'POST',
                        data: requestBody,
                        headers: {
                            'token': 'c2a6ac14-14b9-44d5-98db-c8a3631d676c'
                        }
                    })
                    .beforeSend(function() {
                        $('.verifikasiDebitur').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
                    })
                    .success(function(res) {
                        responseBody = res;
                
                        var url = "api/master/verif/storecadeb/";

                        httpRequestBuilder(requestMapperForStoreCadeb(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseDebitur(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data Debitur!!");
                            $('.verifikasiDebitur').hide();
                        })
                    });
                }

                console.log( requestBody);
                console.log( responseBody);
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
                    trx_id : "VeriJelas" + $("#nik").text(),
                    nik : $("#nik").text(),
                    name : $("#name").text(),
                    birthdate : $(formatTanggal("#birthdate")).text(),
                    birthplace : $("#birthplace").text(),
                    identity_photo : "",
                    selfie_photo : base64Encode(data),
                }
                
                if(limitCallDebitur > 1) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Debitur!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseDebiturPasangan(requestBody);

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
                            url: '<?php echo config_item('api_verijelas')?>bprkm_poc/completeid',
                            type: 'POST',
                            data: requestBody,
                            headers: {
                                'token': 'c2a6ac14-14b9-44d5-98db-c8a3631d676c'
                            }
                        })
                        .beforeSend(function() {
                            $('.verifikasiDebitur').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
                        })
                        .success(function(res) {
                            responseBody = res;

                            var requestBody = requestMapperForUpdateCadeb(responseBody);
                            var url = "api/master/verif/updateVerif/";

                            httpRequestBuilder(requestMapperForUpdateCadeb(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseDebitur(responseBody);
                                bootbox.alert("Berhasil Update Verifikasi Data Debitur!!");
                                $('.verifikasiDebitur').hide();
                            })
                            
                        });
                    }

                    console.log( requestBody);
                    console.log( responseBody);
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
                    trx_id : "VeriJelas" + $("#nik").text(),
                    nik : $("#nik_pasangan").text(),
                    name : $("#name_pasangan").text(),
                    birthdate : $("#birthdate_pasangan").text(),
                    birthplace : $("#birthplace_pasangan").text(),
                    identity_photo : "",
                    selfie_photo : base64Encode(data),
                }
                if (isTesting) {
                    responseBody = responseDebiturPasangan(requestBody);

                    var url = "api/master/verif/storepasangan/";

                    httpRequestBuilder(requestMapperForStorePasangan(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponsePasangan(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data Pasangan!!");
                        $('.verifikasiPasangan').hide();
                    })
                   
                } else {
                    $.ajax({
                        url: '<?php echo config_item('api_verijelas')?>bprkm_poc/completeid',
                        type: 'POST',
                        data: requestBody,
                        headers: {
                            'token': 'c2a6ac14-14b9-44d5-98db-c8a3631d676c'
                        }
                    })
                    .beforeSend(function() {
                            $('.verifikasiPasangan').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
                        })
                    .success(function(res) {
                        responseBody = res;

                        var requestBody = requestMapperForSimpanPasangan(responseBody);
                        var url = "api/master/verif/storepasangan/";

                        httpRequestBuilder(requestMapperForSimpanPasangan(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponsePasangan(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data Pasangan!!");
                            $('.verifikasiPasangan').hide();
                        })
                        
                    });
                }

                console.log( requestBody);
                console.log( responseBody);
                
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
                    trx_id : "VeriJelas" + $("#nik").text(),
                    nik : $("#nik_pasangan").text(),
                    name : $("#name_pasangan").text(),
                    birthdate : $("#birthdate_pasangan").text(),
                    birthplace : $("#birthplace_pasangan").text(),
                    identity_photo : "",
                    selfie_photo : base64Encode(data),
                }

                if(limitCallPasangan == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi Data Pasangan!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseDebiturPasangan(requestBody);

                        var url = "api/master/verif/updateVerif/";

                        httpRequestBuilder(requestMapperForUpdatePasangan(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponsePasangan(responseBody);
                            bootbox.alert("Berhasil Update Verifikasi Data Pasangan!!");
                            $('.verifikasiPasangan').hide();
                        })
                    
                    } else {
                        $.ajax({
                            url: '<?php echo config_item('api_verijelas')?>bprkm_poc/completeid',
                            type: 'POST',
                            data: requestBody,
                            headers: {
                                'token': 'c2a6ac14-14b9-44d5-98db-c8a3631d676c'
                            }
                        })
                        .beforeSend(function() {
                            $('.verifikasiPasangan').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
                        })
                        .success(function(res) {
                            responseBody = res;

                            var requestBody = requestMapperForUpdatePasangan(responseBody);
                            var url = "api/master/verif/updateVerif/";

                            httpRequestBuilder(requestMapperForUpdatePasangan(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponsePasangan(responseBody);
                                bootbox.alert("Berhasil Update Verifikasi Data Pasangan!!");
                                $('.verifikasiPasangan').hide();
                            })
                            
                        });
                    }

                    console.log( requestBody);
                    console.log( responseBody);

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
                    trx_id : "VeriJelas" + $("#no_npwp").text(),
                    nik : $("#nik").text(),
                    npwp : $("#no_npwp").text(),
                    name : $("#name_npwp").text(),
                    birthdate : $("#birthdate_npwp").text(),
                    birthplace : $("#birthplace_npwp").text(),
                    income : $("#income_npwp").text(),
                }

                if (isTesting) {
                    responseBody = responseNpwp(requestBody);
        
                    var url = "api/master/verif/storenpwp/";

                    httpRequestBuilder(requestMapperForStoreNpwp(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponseNpwp(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                        $('.verifikasiNpwp').hide();
                    })
                    
                } else {
                    $.ajax({
                        url: '<?php echo config_item('api_verijelas')?>bprkm_poc/pendapatan',
                        type: 'POST',
                        data: requestBody,
                        headers: {
                            'token': 'c2a6ac14-14b9-44d5-98db-c8a3631d676c'
                        }
                    })
                    .beforeSend(function() {
                        $('.verifikasiNpwp').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
                    })
                    .success(function(res) {
                        responseBody = res;

                        var url = "api/master/verif/storenpwp/";

                        httpRequestBuilder(requestMapperForStoreNpwp(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseNpwp(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data NPWP!!");
                            $('.verifikasiNpwp').hide();
                        })

                    });

                }

                console.log( requestBody);
                console.log( responseBody);
                   
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
                    trx_id : "VeriJelas" + $("#no_npwp").text(),
                    nik : $("#nik").text(),
                    npwp : $("#no_npwp").text(),
                    name : $("#name_npwp").text(),
                    birthdate : $("#birthdate_npwp").text(),
                    birthplace : $("#birthplace_npwp").text(),
                    income : $("#income_npwp").text(),
                }

                if(limitCallNpwp == 2) {
                    bootbox.alert("Anda Sudah Mencapai Limit Verifikasi NPWP!!"); 
                } else {
                    if (isTesting) {
                        responseBody = responseNpwp(requestBody);
            
                        var url = "api/master/verif/updateVerif/";

                        httpRequestBuilder(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseNpwp(responseBody);
                            bootbox.alert("Berhasil Update Verifikasi Data NPWP!!");
                            $('.verifikasiNpwp').hide();
                        })
                        
                    } else {
                        $.ajax({
                            url: '<?php echo config_item('api_verijelas')?>bprkm_poc/pendapatan',
                            type: 'POST',
                            data: requestBody,
                            headers: {
                                'token': 'c2a6ac14-14b9-44d5-98db-c8a3631d676c'
                            }
                        })
                        .beforeSend(function() {
                            $('.verifikasiNpwp').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
                        })
                        .success(function(res) {
                            responseBody = res;

                            var url = "api/master/verif/updateVerif/";

                            httpRequestBuilder(requestMapperForUpdateNpwp(responseBody), url, id_trans_so, "POST")
                            .done( (response) => {
                                mappingResponseNpwp(responseBody);
                                bootbox.alert("Berhasil Update Verifikasi Data NPWP!!");
                                $('.verifikasiNpwp').hide();
                            })

                        });

                    }

                    console.log( requestBody);
                    console.log( responseBody);

                }
                   
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data NPWP!!");
            });
        }
    }

    function verifikasiSimpanProperti(isTesting, id_trans_so) {
        var responseBody;
        var nop = $("#nop").text();

        if (nop== "0") {
            bootbox. alert("Debitur Tidak Memiliki NOP, Tidak Dapat Melakukan Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',

            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    trx_id : "VeriJelas" + $("#nop").text(),
                    nop : $("#nop").text(),
                    property_name : $("#property_name").text(),
                    property_building_area : $("#property_building_area").text(),
                    property_surface_area : $("#property_surface_area").text(),
                    property_estimation : $("#property_estimation").text(),
                    nik : $("#nik").text(),
                    certificate_id : $("#certificate_id").text(),
                    certificate_name : $("#certificate_name").text(),
                    certificate_type : $("#certificate_type").text(),
                    certificate_date : $("#certificate_date").text(), 
                   
                }

                if (isTesting) {
                    responseBody = responseProperti(requestBody);
        
                    var url = "api/master/verif/storeproperti/";

                    httpRequestBuilder(requestMapperForStoreProperti(responseBody), url, id_trans_so, "POST")
                    .done( (response) => {
                        mappingResponseProperti(responseBody);
                        bootbox.alert("Berhasil Simpan Verifikasi Data Properti!!");
                        $('.verifikasiProperti').hide();
                    })
                    
                } else {
                    $.ajax({
                        url: '<?php echo config_item('api_verijelas')?>bprkm_poc/properti',
                        type: 'POST',
                        data: requestBody,
                        headers: {
                            'token': 'c2a6ac14-14b9-44d5-98db-c8a3631d676c'
                        }
                    })
                    .beforeSend(function() {
                        $('.verifikasiProperti').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
                    })
                    .success(function(res) {
                        responseBody = res;

                        var url = "api/master/verif/storeproperti/";

                        httpRequestBuilder(requestMapperForStoreProperti(responseBody), url, id_trans_so, "POST")
                        .done( (response) => {
                            mappingResponseProperti(responseBody);
                            bootbox.alert("Berhasil Simpan Verifikasi Data Properti!!");
                            $('.verifikasiProperti').hide();
                        })
                    });
                }

                console.log( requestBody);
                console.log( responseBody);
                   
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("Gagal Verifikasi Data Properti!!");
            });
        }
    }

    function verifikasiUpdateProperti() {
        bootbox.alert("Data Verifikasi Properti Sudah Ada, Tidak Dapat Update Verifikasi!!");
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
        var formattedTanggal = tanggal.split("-").reverse().join("-");

        return `${formattedTanggal}`
    }

    function mappingResponseDebitur(responseBody) {
        // $("#selfie_photo_result").html(responseBody.data.selfie_photo + "%");
        $("#selfie_photo_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${responseBody.data.selfie_photo}' aria-valuemin='0' aria-valuemax='100' style='width: ${responseBody.data.selfie_photo}%'>${responseBody.data.selfie_photo}%</div></div>`);
        responseBody.data != null ? checkVerified("nik_result", true) : checkVerified("nik_result", false);
        checkVerified("name_result", responseBody.data.name);
        checkVerified("birthplace_result", responseBody.data.birthplace);
        checkVerified("birthdate_result", responseBody.data.birthdate);
    }

    function mappingResponsePasangan(responseBody) {
        // $("#selfie_photo_pasangan_result").html(responseBody.data.selfie_photo + "%");
        $("#selfie_photo_pasangan_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${responseBody.data.selfie_photo}' aria-valuemin='0' aria-valuemax='100' style='width: ${responseBody.data.selfie_photo}%'>${responseBody.data.selfie_photo}%</div></div>`);
        responseBody.data != null ? checkVerified("nik_pasangan_result", true) : checkVerified("nik_result", false);
        checkVerified("name_pasangan_result", responseBody.data.name);
        checkVerified("birthplace_pasangan_result", responseBody.data.birthplace);
        checkVerified("birthdate_pasangan_result", responseBody.data.birthdate);
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
            errors: {
                identity_photo: "invalid"
            },
            data: {
                name: true,
                birthdate: false,
                birthplace: true,
                selfie_photo: 98.0,
                address: "JL C*M*R *ND*H 7 N*.32"  
            },
            trx_id: requestBody.trx_id,
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
            errors: {},
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
        };

        hide_all();

        $('#lihat_data_credit').show();

        $('#click_back').click(function(){
            hide_all();
            $('#lihat_detail').hide();
            $('#lihat_data_credit').show();
        });

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
            var html_properti = [];

            get_detail({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);
                    
                    if (data[0] == null) {
                        $("#verifikasi_debitur").on('click', function() {
                            verifikasiSimpanDebitur(false, id);
                        });
                    } else {
                        $("#verifikasi_debitur").on('click', function() {
                            verifikasiUpdateDebitur(false, data[0].limit_call, id);
                        });
                    }
                    
                    if (data[1] == null) {
                        $("#verifikasi_pasangan").on('click', function() {
                            verifikasiSimpanPasangan(false, id);
                        });
                    } else {
                        $("#verifikasi_pasangan").on('click', function() {
                            verifikasiUpdatePasangan(false, data[1].limit_call, id);
                        });
                    }

                    if (data[2] == null) {
                        $("#verifikasi_npwp").on('click', function() {
                            verifikasiSimpanNpwp(false, id);
                        });
                    } else {
                        $("#verifikasi_npwp").on('click', function() {
                            verifikasiUpdateNpwp(false, data[2].limit_call, id);
                        });
                    }

                    if (data[3] == null) {
                        $("#verifikasi_properti").on('click', function() {
                            verifikasiSimpanProperti(false, id);
                        });
                    } else {
                        $("#verifikasi_properti").on('click', function() {
                            verifikasiUpdateProperti();
                        });
                    }
                    
                })

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
                        '</tr>'
                    ].join('\n');
                    html_pas.push(data_pasangan);
                    $("#data_pasangan").html(html_pas);

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
                        
                    if (data.data_agunan.agunan_tanah.length != 0) {
                        var data_properti = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop" id="nop">' + data.data_agunan.agunan_tanah[0].njop + '</td>',
                                '<td id="nop_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name" id="property_name">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area" id="property_building_area">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area" id="property_surface_area">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation" id="property_estimation">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id" id="certificate_id">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name" id="certificate_name">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type" id="certificate_type">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date" id="certificate_date">' + data.data_agunan.agunan_tanah[0].tgl_sertifikat + '</td>',
                                '<td id=certificate_date_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti.push(data_properti);
                        $("#data_properti").html(html_properti);
                    } else {
                        var data_properti = [
                            '<tr>',
                                '<td colspan="3" style="text-align: center">Tidak ada agunan!</td>',
                            '</tr>',
                            ].join('\n');
                        html_properti.push(data_properti);
                        $("#data_properti").html(html_properti);
                    } 
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
            var html_properti = [];

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
                    }
                    
                    if (data[1] != null) {
                        $("#selfie_photo_pasangan_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${data[1].selfie_foto}' aria-valuemin='0' aria-valuemax='100' style='width: ${data[1].selfie_foto}%'>${data[1].selfie_foto}%</div></div>`);
                        checkResult("nik_pasangan_result", data[1].nama);
                        checkResult("name_pasangan_result", data[1].nama);
                        checkResult("birthdate_pasangan_result", data[1].tgl_lahir);
                        checkResult("birthplace_pasangan_result", data[1].tempat_lahir);
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
                        '</tr>'
                    ].join('\n');
                    html_pas.push(data_pasangan);
                    $("#data_pasangan").html(html_pas);

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

                    if (data.data_agunan.agunan_tanah.length != 0) {
                        var data_properti = [
                            '<tr>',
                                '<td>NOP</td>',
                                '<td name="nop" id="nop">' + data.data_agunan.agunan_tanah[0].njop + '</td>',
                                '<td id="nop_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Properti</td>',
                                '<td name="property_name" id="property_name">' + data.data_debitur.nama_lengkap + '</td>',
                                '<td id="property_name_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Bangunan Properti</td>',
                                '<td name="property_building_area" id="property_building_area">' + data.data_agunan.agunan_tanah[0].luas_bangunan + '</td>',
                                '<td id="property_building_area_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Luas Tanah Properti</td>',
                                '<td name="property_surface_area" id="property_surface_area">' + data.data_agunan.agunan_tanah[0].luas_tanah + '</td>',
                                '<td id="property_surface_area_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Estimasi Properti</td>',
                                '<td name="property_estimation" id="property_estimation">' + data.pemeriksaan.agunan_tanah[0].nilai_taksasi_agunan + '</td>',
                                '<td id="property_estimation_result"></td>',
                            '</tr>',
                            '<tr>',
                                '<td>No. Sertifikat</td>',
                                '<td name="certificate_id" id="certificate_id">' + data.data_agunan.agunan_tanah[0].no_sertifikat + '</td>',
                                '<td id=certificate_id_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Nama Pemilik Sertifikat</td>',
                                '<td name="certificate_name" id="certificate_name">' + data.data_agunan.agunan_tanah[0].nama_pemilik_sertifikat + '</td>',
                                '<td id=certificate_name_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tipe Sertifikat</td>',
                                '<td name="certificate_type" id="certificate_type">' + data.data_agunan.agunan_tanah[0].jenis_sertifikat + '</td>',
                                '<td id=certificate_type_result></td>',
                            '</tr>',
                            '<tr>',
                                '<td>Tanggal Sertifikat</td>',
                                '<td name="certificate_date" id="certificate_date">' + data.data_agunan.agunan_tanah[0].tgl_sertifikat + '</td>',
                                '<td id=certificate_date_result></td>',
                            '</tr>',
                        ].join('\n');
                        html_properti.push(data_properti);
                        $("#data_properti").html(html_properti);
                    } else {
                        var data_properti = [
                            '<tr>',
                                '<td colspan="3" style="text-align: center">Tidak ada agunan!</td>',
                            '</tr>',
                            ].join('\n');
                        html_properti.push(data_properti);
                        $("#data_properti").html(html_properti);
                    }
                    
                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                })

            $('#lihat_data_credit').hide();
            $('#lihat_detail').show();
        }); 

    })
</script>

