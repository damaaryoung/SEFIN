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

    img {
        width: 30%;
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
                                <button class="btn btn-primary verifikasiDebitur" id="verifikasi_debitur" onclick="verifikasiDebitur(true)"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-success simpanDebitur" id="simpan_debitur" onclick="simpanDebitur()"><i class="fa fa-save"> Simpan</i></button>
                            </div>
                            
                            <div class="alert alert-warning warning_simpan" style="margin-top: 50px">
                                <strong>Info!</strong> Jangan lupa "Simpan" setelah verifikasi.
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
                                <button class="btn btn-primary verifikasiPasangan" id="verifikasi_pasangan" onclick="verifikasiPasangan(true)"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-success simpanPasangan" id="simpan_pasangan"><i class="fa fa-save"> Simpan</i></button>
                            </div>
                            <div class="alert alert-warning warning_simpan" style="margin-top: 50px">
                                <strong>Info!</strong> Jangan lupa "Simpan" setelah verifikasi.
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
                                <button class="btn btn-primary verifikasiNpwp" id="verifikasi_npwp" onclick="verifikasiNPWP(true)"><i class="fa fa-user-check"> Verifikasi</i></button>
                                <button class="btn btn-success simpanNpwp" id="simpan_npwp"><i class="fa fa-save"> Simpan</i></button>
                            </div>
                            <div class="alert alert-warning warning_simpan" style="margin-top: 50px">
                                <strong>Info!</strong> Jangan lupa "Simpan" setelah verifikasi.
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
        $('.simpanDebitur').hide();
        $('.simpanPasangan').hide();
        $('.simpanNpwp').hide();
    }

    function click_detail() {
        $('.verifikasiDebitur').hide();
        $('.verifikasiPasangan').hide();
        $('.verifikasiNpwp').hide();
        $('.simpanDebitur').hide();
        $('.simpanPasangan').hide();
        $('.simpanNpwp').hide();
        $('.warning_simpan').hide();
        $('.running_text').hide();
    }

    function verifikasiDebitur(isTesting) {

        
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
                    name : $(removeSymbol("#name")).text(),
                    birthdate : $(formatTanggal("#birthdate")).text(),
                    birthplace : $("#birthplace").text(),
                    identity_photo : "",
                    selfie_photo : base64Encode(data),
                }
            
                if (isTesting) {
                    responseBody = mockResponse(requestBody);
                    bootbox.alert("Berhasil Verifikasi");
                    $('.verifikasiDebitur').hide();
                    $('.simpanDebitur').show();
                } else {
                    // Call ajax, kirim request body ke API
                    $.ajax({
                    url: '<?php echo config_item('api_verijelas')?>bprkm_poc/completeid',
                    type: 'POST',
                    data: requestBody,
                    })
                    .success(function(res) {
                        bootbox.alert("Berhasil Verifikasi");
                        $('.verifikasiDebitur').hide();
                        $('.simpanDebitur').show();
                        if (res) {
                            // balikin response
                        } else {
                            // call verijelas
                        }
                    });
                }

                console.log( requestBody);
                console.log( responseBody);

                if (responseBody.data.name) {

                    // $("#selfie_photo_result").html(responseBody.data.selfie_photo + "%");
                    $("#selfie_photo_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${responseBody.data.selfie_photo}' aria-valuemin='0' aria-valuemax='100' style='width: ${responseBody.data.selfie_photo}%'>${responseBody.data.selfie_photo}%</div></div>`);
                    responseBody.data != null ? checkVerified("nik_result", true) : checkVerified("nik_result", false);
                    checkVerified("name_result", responseBody.data.name);
                    checkVerified("birthplace_result", responseBody.data.birthplace);
                    checkVerified("birthdate_result", responseBody.data.birthdate);
                }

            })
            .fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("fail: " + errorThrown);
            });
        }        
    }

    function verifikasiPasangan(isTesting) {
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
                    name : $(removeSymbol("#name_pasangan")).text(),
                    birthdate : $("#birthdate_pasangan").text(),
                    birthplace : $("#birthplace_pasangan").text(),
                    identity_photo : "",
                    selfie_photo : base64Encode(data),
                }

                if (isTesting) {
                    responseBody = mockResponse(requestBody);
                    bootbox.alert("Berhasil Verifikasi");
                    $('.verifikasiPasangan').hide();
                    $('.simpanPasangan').show();
                } else {
                    // Call ajax, kirim request body ke API
                }

                console.log( requestBody);
                console.log( responseBody);

                if (responseBody.data.name)

                    // $("#selfie_photo_pasangan_result").html(responseBody.data.selfie_photo + "%");
                    $("#selfie_photo_pasangan_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${responseBody.data.selfie_photo}' aria-valuemin='0' aria-valuemax='100' style='width: ${responseBody.data.selfie_photo}%'>${responseBody.data.selfie_photo}%</div></div>`);
                    responseBody.data != null ? checkVerified("nik_pasangan_result", true) : checkVerified("nik_pasangan_result", false);
                    checkVerified("name_pasangan_result", responseBody.data.name);
                    checkVerified("birthplace_pasangan_result", responseBody.data.birthplace);
                    checkVerified("birthdate_pasangan_result", responseBody.data.birthdate);
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox. alert("fail: " + errorThrown);
            });
        }
    }

    function verifikasiNPWP(isTesting) {
        var responseBody;
        var no_npwp = $("#no_npwp").text();

        if (no_npwp == "0") {
            bootbox. alert("Debitur Tidak Memiliki No. NPWP, Tidak Bisa Verifikasi!!");
        } else {
            $.ajax({
            type: 'GET',

            }).done(function( data, textStatus, jqXHR ) {
                var requestBody = {
                    trx_id : "VeriJelas" + $("#no_npwp").text(),
                    nik : $("#nik").text(),
                    npwp : $("#no_npwp").text(),
                    name : $(removeSymbol("#name_npwp")).text(),
                    birthdate : $("#birthdate_npwp").text(),
                    birthplace : $("#birthplace_npwp").text(),
                    income : $("#income_npwp").text(),
                }

                if (isTesting) {
                    responseBody = mockResponse(requestBody);
                    bootbox.alert("Berhasil Verifikasi");
                    $('.verifikasiNpwp').hide();
                    $('.simpanNpwp').show();
                } else {
                    // Call ajax, kirim request body ke API
                }

                console.log( requestBody);
                console.log( responseBody);

                if (responseBody.data.name)

                    responseBody.data != null ? checkVerified("nik_npwp_result", true) : checkVerified("nik_npwp_result", false);
                    responseBody.data != null ? checkVerified("npwp_result", true) : checkVerified("npwp_result", false);
                    checkVerified("name_npwp_result", responseBody.data.name);
                    checkVerified("birthplace_npwp_result", responseBody.data.birthplace);
                    checkVerified("birthdate_npwp_result", responseBody.data.birthdate);
                    checkIncome("income_npwp_result", responseBody.data.income);
                    checkVerified("match_result", responseBody.data.match_result);
            }).fail(function( jqXHR, textStatus, errorThrown ) {
                bootbox.alert("fail: " + errorThrown);
            });
        }
    }

    function simpanDebitur() {
        
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
        } else if (value == null) {
            $(`#${elementId}`).html("<button class='btn' style='width: 100%'>Null</button>")
        }
    }

    function mockResponse(request) {
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
                income : null,
                match_result: true,
                address: "JL C*M*R *ND*H 7 N*.32",
                trx_id: request.trx_id,
                ref_id: "aW50ZxJuYWw=-120389080017203"
            }
        }
        
    }

    function formatTanggal (tanggal) {
        var formattedTanggal = tanggal.split("-").reverse().join("-");

        return `${formattedTanggal}`
    }

    function removeSymbol(stringNama) {
        var formattedNama = stringNama;
        formattedNama = stringNama.replaceAll("'", "");
        return formattedNama;
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
            var url = '<?php echo config_item('api_url_2') ?>api/master/verif/showVerif/';

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

        $('#data_verifikasi').on('click', '.edit', function(e) {
            e.preventDefault();

            var id = $(this).attr('data');
            var html_deb = [];
            var html_pas = [];
            var html_npwp = [];

            get_data({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    id = data.id;
                    var id_debitur = data.data_debitur.id;
                    var id_pasangan = data.data_pasangan.id;

                    var data_debitur = [
                        '<tr>',
                            '<td>Foto KTP Debitur</td>',
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '"><img src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Debitur</td>',
                            '<td name="selfie_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"><img id="photo_selfie_debitur" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"</img></a></td>',
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
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '"><img src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Pasangan</td>',
                            '<td name="selfie_photo"  id="selfie_photo_pasangan"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '"><img id="photo_selfie_pasangan" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" </img></a></td>',
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
                            '<td name="npwp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '"><img src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" </img></a></td>',
                            '<td id="npwp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>No. NPWP</td>',
                            '<td name="npwp" id="no_npwp">' + data.data_debitur.no_npwp + '</td>',
                            '<td id="npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id=""nik>' + data.data_debitur.no_ktp + '</td>',
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

            get_data({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    id = data.id;
                    
                    var id_debitur = data.data_debitur.id;
                    var id_pasangan = data.data_pasangan.id;

                    var data_debitur = [
                        '<tr>',
                            '<td>Foto KTP Debitur</td>',
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '"><img src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Debitur</td>',
                            '<td name="selfie_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"><img id="photo_selfie_debitur" src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.foto_cadeb + '"</img></a></td>',
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
                            '<td name="ktp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '"><img src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.lamp_ktp + '" </img></a></td>',
                            '<td id="ktp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>Foto Selfie Pasangan</td>',
                            '<td name="selfie_photo"  id="selfie_photo_pasangan"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '"><img id="photo_selfie_pasangan" src="<?php echo $this->config->item('img_url') ?>' + data.data_pasangan.lampiran.foto_pasangan + '" </img></a></td>',
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
                            '<td name="npwp_photo"><a target="window.open()" href="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '"><img src="<?php echo $this->config->item('img_url') ?>' + data.data_debitur.lampiran.lamp_npwp + '" </img></a></td>',
                            '<td id="npwp_photo_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>No. NPWP</td>',
                            '<td name="npwp" id="no_npwp">' + data.data_debitur.no_npwp + '</td>',
                            '<td id="npwp_result"></td>',
                        '</tr>',
                        '<tr>',
                            '<td>NIK</td>',
                            '<td name="nik" id=""nik>' + data.data_debitur.no_ktp + '</td>',
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
                    
                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                })

            get_detail({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    $("#selfie_photo_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${data[0].selfie_foto}' aria-valuemin='0' aria-valuemax='100' style='width: ${data[0].selfie_foto}%'>${data[0].selfie_foto}%</div></div>`);
                    checkResult("nik_result", data[0].nama);
                    checkResult("name_result", data[0].nama);
                    checkResult("birthdate_result", data[0].tgl_lahir);
                    checkResult("birthplace_result", data[0].tempat_lahir);

                    $("#selfie_photo_pasangan_result").html(`<div class='progress'><div class='progress-bar' role='progressbar' aria-valuenow='${data[1].selfie_foto}' aria-valuemin='0' aria-valuemax='100' style='width: ${data[1].selfie_foto}%'>${data[1].selfie_foto}%</div></div>`);
                    checkResult("nik_pasangan_result", data[1].nama);
                    checkResult("name_pasangan_result", data[1].nama);
                    checkResult("birthdate_pasangan_result", data[1].tgl_lahir);
                    checkResult("birthplace_pasangan_result", data[1].tempat_lahir);

                    checkResult("npwp_result", data[2].npwp);
                    checkResult("nik_npwp_result", data[2].nik);
                    checkResult("name_npwp_result", data[2].nama);
                    checkResult("birthdate_npwp_result", data[2].tgl_lahir);
                    checkResult("birthplace_npwp_result", data[2].tmp_lahir);
                    checkIncome("income_npwp_result", data[2].income);
                    checkResult("match_result", data[2].match_result);
                })
                .fail(function(jqXHR) {
                    bootbox.alert('Hasil Verifikasi tidak ditemukan, coba refresh kembali!!');

                })
            $('#lihat_data_credit').hide();
            $('#lihat_detail').show();
        }); 

    })
</script>

