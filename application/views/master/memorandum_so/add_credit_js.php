<script>
    $("#uploadOCRKtpdebitur").click(function() {
        $('#ModalCamera').modal('show');
    });
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
                            // $('#form_tambah_so .form-control').prop('readonly', false);
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
                    $('.bd-example-modal-sm').modal('show');
                    $('#form_foto_ktp').show();
                    $('#form_foto_ktp_pas').show();
                    $('#form_tambah_so .form-control').prop('disabled', false);
                    $('#submit').prop('disabled', false);
                    document.getElementById('no_ktp').value = document.getElementById('no_ktp_cadeb_cek').value;
                    document.getElementById('no_ktp_kk').value = document.getElementById('no_ktp_cadeb_cek').value;
                    // swal({
                    //         title: "Oops...",
                    //         text: "<i>NIK belum terdaftar, silahkan Foto KTP Debitur & Input Credit Checking !</i>",
                    //         html:true,
                    //         type: "error"
                    //     },
                    //     function() {
                    //         $('#form_foto_ktp').show();
                    //         $('#form_foto_ktp_pas').show();
                    //         $('#form_tambah_so .form-control').prop('disabled', false);
                    //         $('#submit').prop('disabled', false);
                    //         document.getElementById('no_ktp').value = document.getElementById('no_ktp_cadeb_cek').value;
                    //         document.getElementById('no_ktp_kk').value = document.getElementById('no_ktp_cadeb_cek').value;
                    //     }
                    // );
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

    $('#form_foto_ktp').hide();
    $('#form_foto_ktp_pas').hide();


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

    var np = 1;
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
        // $(document).ready(function() {
        //     bsCustomFileInput.init();
        // });
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
                formData.append('umur', $('input[name=umur]', this).val());
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
                formData.append('umur', $('input[name=umur]', this).val());
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
                        $.each(data.age, function(index, item) {
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
            })
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
    function take_snapshot_modals() {
        var base_64 = $('#b64modals').val();
        var key = "21594885e26346e668dedda0c13a1b4fafbf3c095305911ca10aca0f81d4727f3bdab34febfbdf21dedf620c6e4bdb4c01a7199f2e206e1667110cef4546d1ff";
        // console.log(base_64);
        $('.bd-example-modal-sm').modal('hide');
        $.ajax({
            type: "POST",
            url: "http://ai.inergi.id:8001/document_classifier",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                "key": key,
                "image": base_64,
                "return_segmented": false,
                "return_photo": false,
                "return_signature_photo": false
            }),
            beforeSend: function() {
                let html =
                    "<div width='100%' class='text-center'>" +
                    "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";
                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            },

            success: function(res) {
                // console.log(res);
                $('#batal').click();
                var data = res.data;

                $('[id="no_ktp_cadeb_cek"]').val(data.NIK.value);
                $('[id="no_ktp"]').val(data.NIK.value);
                $('[id="nama_lengkap"]').val(data.Nama.value);
                $('[name="alamat_ktp"]').val(data.Alamat.value);
                $('[name="tempat_lahir"]').val(data['Tempat Lahir'].value);
                $('[name="tgl_lahir_deb"]').val(data['Tgl Lahir'].value);
                $('[name="umur"]').val(data['Umur'].value);
                $('[name="rt_ktp"]').val(data['RT/RW'].value.substr(0, 3));
                $('[name="rw_ktp"]').val(data['RT/RW'].value.substr(4));

                if (data.Agama.value == "ISLAM") {
                    document.getElementById("islam").selected = "true";
                } else if (data.Agama.value == "KATHOLIK") {
                    document.getElementById("katholik").selected = "true";
                } else if (data.Agama.value == "KRISTEN") {
                    document.getElementById("kristen").selected = "true";
                } else if (data.Agama.value == "KATHOLIK") {
                    document.getElementById("katholik").selected = "true";
                } else if (data.Agama.value == "HINDU") {
                    document.getElementById("hindu").selected = "true";
                } else if (data.Agama.value == "BUDHA") {
                    document.getElementById("budha").selected = "true";
                } else {
                    document.getElementById("lain2_kepercayaan").selected = "true";
                }

                if (data['Status Perkawinan'].value == "BELUM KAWIN") {
                    document.getElementById("single").selected = "true";
                } else if (data['Status Perkawinan'].value == "KAWIN") {
                    document.getElementById("menikah").selected = "true";
                } else {
                    document.getElementById("janda_duda").selected = "true";
                }

                if (data['Jenis Kelamin'].value == "LAKI-LAKI") {
                    document.getElementById("L_deb").selected = "true";
                } else if (data['Jenis Kelamin'].value == "PEREMPUAN") {
                    document.getElementById("P_deb").selected = "true";
                }
                get_provinsi()
                    .done(function(res) {
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.nama + '" value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_provinsi_ktp]').html(select);
                        document.getElementById('' + data.Provinsi.value + '').selected = "true";
                    })
                swal({
                    title: "Data Berhasil Diambil",
                    type: "success"
                });

                get_kecamatan = function(opts, id) {
                    var url = '<?php echo config_item('api_url') ?>wilayah/kecamatan/';
                    var data = opts;

                    return $.ajax({
                        url: url,
                        data: data,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        }
                    });
                }
                get_kecamatan()
                    .done(function(res) {
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.nama + '" value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kecamatan_ktp]').html(select);
                        document.getElementById('' + data.Kecamatan.value + '').selected = "true";
                    })
                $('#select_kecamatan_ktp').change(function() {
                    var nama = document.getElementById('select_kecamatan_ktp').value;
                    console.log(nama);
                    $.ajax({
                        url: "<?php echo base_url(); ?>Kelurahan/get_kelurahan",
                        method: "POST",
                        data: {
                            nama: nama
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            var i;
                            for (i = 0; i < data.length; i++) {
                                html += '<option id="' + data[i].nama + '" value="' + data[i].id + '">' + data[i].nama + '</option>';
                            }
                            $('#form_tambah_so select[id=select_kelurahan_ktp').html(html);
                        }

                    });
                    document.getElementById('' + data['Kel/Desa'].value + '').selected = "true";
                });
                // console.log(data['Kel/Desa'].value);
            }
        });
    }

    function take_snapshot() {
        var base_64 = $('#b64').val();
        var key = "21594885e26346e668dedda0c13a1b4fafbf3c095305911ca10aca0f81d4727f3bdab34febfbdf21dedf620c6e4bdb4c01a7199f2e206e1667110cef4546d1ff";
        // console.log(base_64);

        $.ajax({
            type: "POST",
            url: "http://ai.inergi.id:8001/document_classifier",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                "key": key,
                "image": base_64,
                "return_segmented": false,
                "return_photo": false,
                "return_signature_photo": false
            }),
            beforeSend: function() {
                let html =
                    "<div width='100%' class='text-center'>" +
                    "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";
                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            },

            success: function(res) {
                console.log(res);
                $('#batal').click();
                var data = res.data;

                $('[id="no_ktp_cadeb_cek"]').val(data.NIK.value);
                $('[id="no_ktp"]').val(data.NIK.value);
                $('[id="nama_lengkap"]').val(data.Nama.value);
                $('[name="alamat_ktp"]').val(data.Alamat.value);
                $('[name="tempat_lahir"]').val(data['Tempat Lahir'].value);
                $('[name="tgl_lahir_deb"]').val(data['Tgl Lahir'].value);
                $('[name="umur"]').val(data['Umur'].value);
                $('[name="rt_ktp"]').val(data['RT/RW'].value.substr(0, 3));
                $('[name="rw_ktp"]').val(data['RT/RW'].value.substr(4));

                if (data.Agama.value == "ISLAM") {
                    document.getElementById("islam").selected = "true";
                } else if (data.Agama.value == "KATHOLIK") {
                    document.getElementById("katholik").selected = "true";
                } else if (data.Agama.value == "KRISTEN") {
                    document.getElementById("kristen").selected = "true";
                } else if (data.Agama.value == "KATHOLIK") {
                    document.getElementById("katholik").selected = "true";
                } else if (data.Agama.value == "HINDU") {
                    document.getElementById("hindu").selected = "true";
                } else if (data.Agama.value == "BUDHA") {
                    document.getElementById("budha").selected = "true";
                } else {
                    document.getElementById("lain2_kepercayaan").selected = "true";
                }

                if (data['Status Perkawinan'].value == "BELUM KAWIN") {
                    document.getElementById("single").selected = "true";
                } else if (data['Status Perkawinan'].value == "KAWIN") {
                    document.getElementById("menikah").selected = "true";
                } else {
                    document.getElementById("janda_duda").selected = "true";
                }

                if (data['Jenis Kelamin'].value == "LAKI-LAKI") {
                    document.getElementById("L_deb").selected = "true";
                } else if (data['Jenis Kelamin'].value == "PEREMPUAN") {
                    document.getElementById("P_deb").selected = "true";
                }
                get_provinsi()
                    .done(function(res) {
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.nama + '" value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_provinsi_ktp]').html(select);
                        document.getElementById('' + data.Provinsi.value + '').selected = "true";
                    })
                swal({
                    title: "Data Berhasil Diambil",
                    type: "success"
                });

                get_kecamatan = function(opts, id) {
                    var url = '<?php echo config_item('api_url') ?>wilayah/kecamatan/';
                    var data = opts;

                    return $.ajax({
                        url: url,
                        data: data,
                        headers: {
                            'Authorization': 'Bearer ' + localStorage.getItem('token')
                        }
                    });
                }
                get_kecamatan()
                    .done(function(res) {
                        console.log(res);
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            var option = [
                                '<option id="' + e.nama + '" value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_kecamatan_ktp]').html(select);
                        document.getElementById('' + data.Kecamatan.value + '').selected = "true";
                    })
                $('#select_kecamatan_ktp').change(function() {
                    var nama = document.getElementById('select_kecamatan_ktp').value;
                    console.log(nama);
                    $.ajax({
                        url: "<?php echo base_url(); ?>Kelurahan/get_kelurahan",
                        method: "POST",
                        data: {
                            nama: nama
                        },
                        async: false,
                        dataType: 'json',
                        success: function(data) {
                            var html = '';
                            var i;
                            for (i = 0; i < data.length; i++) {
                                html += '<option id="' + data[i].nama + '" value="' + data[i].id + '">' + data[i].nama + '</option>';
                            }
                            $('#form_tambah_so select[id=select_kelurahan_ktp').html(html);
                        }

                    });
                    document.getElementById('' + data['Kel/Desa'].value + '').selected = "true";
                });
                console.log(data['Kel/Desa'].value);
            }
        });
    }

    function take_snapshot() {
        var base_64 = $('#b64').val();
        var key = "21594885e26346e668dedda0c13a1b4fafbf3c095305911ca10aca0f81d4727f3bdab34febfbdf21dedf620c6e4bdb4c01a7199f2e206e1667110cef4546d1ff";
        // console.log(base_64);
        $.ajax({
            type: "POST",
            url: "http://ai.inergi.id:8001/document_classifier",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                "key": key,
                "image": base_64,
                "return_segmented": false,
                "return_photo": false,
                "return_signature_photo": false
            }),
            beforeSend: function() {
                let html =
                    "<div width='100%' class='text-center'>" +
                    "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";
                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            },

            success: function(res) {
                console.log(res);
                $('#batal').click();
                var data = res.data;
                var kabupaten = data['Kabupaten/Kota'].value;
                var kecamatan = data.Kecamatan.value;
                var kelurahan = data['Kel/Desa'].value;

                $('[id="no_ktp"]').val(data.NIK.value);
                $('[id="nama_lengkap"]').val(data.Nama.value);
                $('[name="alamat_ktp"]').val(data.Alamat.value);
                $('[name="tempat_lahir"]').val(data['Tempat Lahir'].value);
                $('[name="tgl_lahir_deb"]').val(data['Tgl Lahir'].value);
                $('[name="umur"]').val(data['Umur'].value);
                $('[name="rt_ktp"]').val(data['RT/RW'].value.substr(0, 3));
                $('[name="rw_ktp"]').val(data['RT/RW'].value.substr(4));

                if (data.Agama.value == "ISLAM") {
                    document.getElementById("islam").selected = "true";
                } else if (data.Agama.value == "KATHOLIK") {
                    document.getElementById("katholik").selected = "true";
                } else if (data.Agama.value == "KRISTEN") {
                    document.getElementById("kristen").selected = "true";
                } else if (data.Agama.value == "KATHOLIK") {
                    document.getElementById("katholik").selected = "true";
                } else if (data.Agama.value == "HINDU") {
                    document.getElementById("hindu").selected = "true";
                } else if (data.Agama.value == "BUDHA") {
                    document.getElementById("budha").selected = "true";
                } else {
                    document.getElementById("lain2_kepercayaan").selected = "true";
                }

                if (data['Status Perkawinan'].value == "BELUM KAWIN") {
                    document.getElementById("single").selected = "true";
                } else if (data['Status Perkawinan'].value == "KAWIN") {
                    document.getElementById("menikah").selected = "true";
                } else {
                    document.getElementById("janda_duda").selected = "true";
                }

                if (data['Jenis Kelamin'].value == "LAKI-LAKI") {
                    document.getElementById("L_deb").selected = "true";
                } else if (data['Jenis Kelamin'].value == "PEREMPUAN") {
                    document.getElementById("P_deb").selected = "true";
                }

                get_provinsi()
                    .done(function(res) {
                        var select = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(res.data, function(i, e) {
                            // console.log(e.id);
                            var option = [
                                '<option id="' + e.nama + '" value="' + e.id + '">' + e.nama + '</option>'
                            ].join('\n');
                            select.push(option);
                        });
                        $('#form_tambah_so select[id=select_provinsi_ktp]').html(select);
                        document.getElementById('' + data.Provinsi.value + '').selected = "true";

                        $.ajax({
                            url: "<?php echo base_url(); ?>Wilayah/get_kabupaten",
                            method: "POST",
                            data: {
                                nama: kabupaten
                            },
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                var html = '';
                                var i;
                                for (i = 0; i < data.length; i++) {

                                    html += '<option value="' + data[i].id + '">' + data[i].nama + '</option>';
                                }
                                $('#form_tambah_so select[id=select_kabupaten_ktp]').html(html);
                            }
                        });

                        $.ajax({
                            url: "<?php echo base_url(); ?>Wilayah/get_kecamatan",
                            method: "POST",
                            data: {
                                nama: kecamatan
                            },
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                var html = '';
                                var i;
                                for (i = 0; i < data.length; i++) {

                                    html += '<option value="' + data[i].id + '">' + data[i].nama + '</option>';
                                }
                                $('#form_tambah_so select[id=select_kecamatan_ktp]').html(html);
                            }
                        });

                        $.ajax({
                            url: "<?php echo base_url(); ?>Wilayah/get_kelurahan",
                            method: "POST",
                            data: {
                                nama: kelurahan
                            },
                            async: false,
                            dataType: 'json',
                            success: function(data) {
                                console.log(data);
                                var html1 = '';
                                var kode_pos = '';
                                var i;
                                for (i = 0; i < data.length; i++) {

                                    html1 += '<option value="' + data[i].id + '">' + data[i].nama + '</option>';
                                }
                                $('#form_tambah_so select[id=select_kelurahan_ktp]').html(html1);
                                $('#form_tambah_so input[id=kode_pos_ktp]').val(data[0].kode_pos);
                            }
                        });
                    })

                swal({
                    title: "Data Berhasil Diambil",
                    // text: "Terimakasih",
                    type: "success"
                });

            }
        });
    }

    // SNAPSHOT KTP PASANGAN
    function take_snapshot_ktp_pas() {
        var base_64 = $('#b64_pas').val();
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
                "return_segmented": false,
                "return_photo": false,
                "return_signature_photo": false
            }),
            beforeSend: function() {
                let html =
                    "<div width='100%' class='text-center'>" +
                    "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";
                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            },

            success: function(res) {
                console.log(res);
                $('#batal').click();
                // var tempat_lahir = "Tempat Lahir"
                var data = res.data;
                // var tempat_lahir = 'data.Tempat Lahir.value'

                $('[id="no_ktp_pas"]').val(data.NIK.value);
                $('[id="no_ktp_kk_pas"]').val(data.NIK.value);
                $('[id="nama_lengkap_pas"]').val(data.Nama.value);
                $('[name="alamat_ktp_pas"]').val(data.Alamat.value + ' RT: ' + data['RT/RW'].value.substr(0, 3) + ' RW: ' + data['RT/RW'].value.substr(4) + ' PROVINSI: ' + data.Provinsi.value + ' KABUPATEN/KOTA: ' + data['Kabupaten/Kota'].value + ' KECAMATAN: ' + data.Kecamatan.value + ' KELURAHAN: ' + data['Kel/Desa'].value);
                $('[name="tempat_lahir_pas"]').val(data['Tempat Lahir'].value);
                $('[name="tgl_lahir_pas"]').val(data['Tgl Lahir'].value);


                if (data['Jenis Kelamin'].value == "LAKI-LAKI") {
                    document.getElementById("L_pas").selected = "true";
                } else if (data['Jenis Kelamin'].value == "PEREMPUAN") {
                    document.getElementById("P_pas").selected = "true";
                }

                swal({
                    title: "Data Berhasil Diambil",
                    // text: "Terimakasih",
                    type: "success"
                });

            }
        });
    }

    // snapshoot penjamin started
    function take_snapshot_ktp_penjamin (){
        var base_64 = $('#b64_penjamin').val();
        var key = "21594885e26346e668dedda0c13a1b4fafbf3c095305911ca10aca0f81d4727f3bdab34febfbdf21dedf620c6e4bdb4c01a7199f2e206e1667110cef4546d1ff";
        // console.log(base_64);
        $.ajax({
            type: "POST",
            url: "http://ai.inergi.id:8001/document_classifier",
            contentType: "application/json",
            dataType: "json",
            data: JSON.stringify({
                "key": key,
                "image": base_64,
                "return_segmented": false,
                "return_photo": false,
                "return_signature_photo": false
            }),
            beforeSend: function() {
                let html =
                    "<div width='100%' class='text-center'>" +
                    "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                    "<a id='batal' href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";
                $('#load_data').html(html);
                $('#modal_load_data').modal('show');
            },

            success: function(res) {
                console.log(res);
                $('#batal').click();
                var data = res.data;
                console.log(data);
                // $('[id="no_ktp_pas"]').val(data.NIK.value);
                swal({
                    title: "Data Berhasil Diambil",
                    type: "success"
                });
            }
        });
    }
    // snapshoot penjamin ended
    // KTP MODALS ALERT
    document.getElementById("inp1modals").addEventListener("change", next_upload_foto_ktp_deb_modals);
    function next_upload_foto_ktp_deb_modals(inp1modals) {
        const file = document.getElementById("inp1modals").files[0];
        var typeFile = file.type;
        new Compressor(file, {
            quality: 0.8, // turunkan kualitas gambar sampai 80%
            maxWidth: 500, // set maksimal elbar gambar menjadi 500px
            success(result) {
                var reader = new FileReader()
                reader.readAsDataURL(result);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    document.getElementById("b64modals").value = base64data.substr(23);
                    // console.log(base64data)
                }
            }
        });
    }
    // KTP MODALS ALERT
    //KTP DEBITUR BASE_64 
    document.getElementById("inp1").addEventListener("change", next_upload_foto_ktp_deb);
    function next_upload_foto_ktp_deb(inp1) {
        const file = document.getElementById("inp1").files[0];
        var typeFile = file.type;
        new Compressor(file, {
            quality: 0.8, // turunkan kualitas gambar sampai 80%
            maxWidth: 500, // set maksimal elbar gambar menjadi 500px
            success(result) {
                var reader = new FileReader()
                reader.readAsDataURL(result);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    document.getElementById("b64").value = base64data.substr(23);
                    // console.log(base64data)
                }
            }
        });
    }
    //KTP PENJAMIN BASE_64 
    document.getElementById("inp_ktp_penjamin").addEventListener("change", next_upload_foto_ktp_penjamin);
    function next_upload_foto_ktp_penjamin(inp_ktp_penjamin) {
        const file = document.getElementById("inp_ktp_penjamin").files[0];
        var typeFile = file.type;
        new Compressor(file, {
            quality: 0.8, // turunkan kualitas gambar sampai 80%
            maxWidth: 500, // set maksimal elbar gambar menjadi 500px
            success(result) {
                var reader = new FileReader()
                reader.readAsDataURL(result);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    document.getElementById("b64_penjamin").value = base64data.substr(23);
                }
            }
        });
    }
    //KTP PASANGAN BASE_64
    document.getElementById("inp_ktp_pas").addEventListener("change", next_upload_foto_ktp_pas);

    function next_upload_foto_ktp_pas(inp_ktp_pas) {
        const file = document.getElementById("inp_ktp_pas").files[0];
        var typeFile = file.type;


        new Compressor(file, {
            quality: 0.8, // turunkan kualitas gambar sampai 80%
            maxWidth: 500, // set maksimal elbar gambar menjadi 500px
            success(result) {
                var reader = new FileReader()
                reader.readAsDataURL(result);
                reader.onloadend = function() {
                    var base64data = reader.result;
                    document.getElementById("b64_pas").value = base64data.substr(23);
                    // console.log(base64data)
                }
            }
        });
    }
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