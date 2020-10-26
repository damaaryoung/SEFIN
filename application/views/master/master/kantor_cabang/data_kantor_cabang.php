<!-- form lihat data -->
<div id="lihat_kantor_cabang" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Kantor Cabang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Kantor Cabang</li>
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
                            <button class="btn btn-primary tambah" id="click-add-kantor-cabang" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover table-sm">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th style="width: 5px">
                                            No
                                        </th>
                                        <th>
                                            Nama Cabang
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_cabang" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- form tambah -->
<div id="lihat_tambah_kantor_cabang" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Kantor Cabang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Kantor cabang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Tambah Kantor Cabang</h3> -->
                        </div>
                        <form role="form" id="form_tambah_cabang">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kantor Cabang</label>
                                    <input type="text" class="form-control" name="nama_cabang" placeholder="Isi Nama Kantor Cabang">
                                </div>
                                <div class="form-group">
                                    <label>Select Area</label>
                                    <select name="area" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Provinsi</label>
                                    <select name="provinsi" id="provinsi2" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kabupaten</label>
                                    <select name="kabupaten" id="kabupaten2" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan2" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kelurahan</label>
                                    <select name="kelurahan" id="kelurahan2" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer" style="float: right;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- form ubah -->
<div id="lihat_ubah_kantor_cabang" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Kantor Cabang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Kantor cabang</li>
                        <li class="breadcrumb-item active">Ubah Kantor cabang</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Tambah Kantor Cabang</h3> -->
                        </div>
                        <form role="form" id="form_ubah_cabang">
                            <input type="hidden" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nama Kantor Cabang</label>
                                    <input type="text" class="form-control" name="nama_cabang_1">
                                </div>
                                <div class="form-group" id="select_area_1">
                                    <label>Select Area</label>
                                    <select name="area_1" id="area_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_area_dup">
                                    <label>Select Area</label>
                                    <select name="area_1" id="area_dup" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_provinsi_1">
                                    <label>Select Provinsi</label>
                                    <select name="provinsi_1" id="provinsi_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_provinsi_dup">
                                    <label>Select Provinsi</label>
                                    <select name="provinsi_1" id="provinsi_dup" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kabupaten_1">
                                    <label>Select Kabupaten</label>
                                    <select name="kabupaten_1" id="kabupaten_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kabupaten_dup">
                                    <label>Select Kabupaten</label>
                                    <select name="kabupaten_1" id="kabupaten_dup" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kecamatan_1">
                                    <label>Select Kecamatan</label>
                                    <select name="kecamatan_1" id="kecamatan_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kecamatan_dup">
                                    <label>Select Kecamatan</label>
                                    <select name="kecamatan_1" id="kecamatan_dup" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kelurahan_1">
                                    <label>Select Kelurahan</label>
                                    <select name="kelurahan_1" id="kelurahan_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kelurahan_dup">
                                    <label>Select Kelurahan</label>
                                    <select name="kelurahan_1" id="kelurahan_dup" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Flag</label>
                                    <select name="flg_aktif" class="form-control">
                                        <option value="true">Aktif</option>
                                        <option value="false">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer" style="float: right;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(function() {
        hide_all = function() {
            $('#lihat_kantor_cabang').hide();
            $('#lihat_tambah_kantor_cabang').hide();
            $('#lihat_ubah_kantor_cabang').hide();
        }
        hide_all();
        $('#lihat_kantor_cabang').show();

        $('#click-add-kantor-cabang').click(function() {
            hide_all();
            $('#lihat_tambah_kantor_cabang').show();
        });

        get_area = function(opts) {
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/area_kerja';
            return $.ajax({
                type: 'GET',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
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
        get_cabang = function(opts, id) {
            var url = '<?php echo config_item('api_url') ?>api/master/area_cabang/';

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


        load_data = function() {
            get_cabang()
                .done(function(response) {
                    var data = response.data;
                    var html = [];
                    var no = 0;
                    console.log(data);


                    if (data.length === 0) {
                        var tr = [
                            '<tr valign="midle">',
                            '<td colspan="4">No Data</td>',
                            '</tr>'
                        ].join('\n');
                        $('#data_cabang').html(tr);

                        return;
                    }
                    $.each(data, function(index, item) {
                        no++;
                        var tr = [
                            '<tr>',
                            '<td>' + no + '</td>',
                            '<td>' + item.nama_cabang + '</td>',
                            '<td style="width: 70px;">',
                            '<button type="button" class="btn btn-info btn-sm edit"  data-target="#update" data="' + item.id + '"><i class="fas fa-pencil-alt"></i></button>',
                            '<button type="button" class="btn btn-danger btn-sm delete" data="' + item.id + '"><i class="fas fa-trash-alt"></i></button>',
                            '</td>',
                            '</tr>'
                        ].join('\n');
                        html.push(tr);
                    });
                    $('#data_cabang').html(html);
                    $('#example2').DataTable({
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
                    $('#data_cabang').html('<tr><td colspan="4">Tidak ada data</td></tr>');
                });
        }
        hide_all();
        $('#lihat_kantor_cabang').show();
        load_data();
        // server response

        delete_cabang = function(id) {
            var url = '<?php echo $this->config->item('api_url'); ?>/api/master/area_cabang/' + id;

            return $.ajax({
                url: url,
                type: 'DELETE',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
        }

        tambah_kantorcabang = function(opts) {
            var url = '<?php echo $this->config->item('api_url'); ?>/api/master/area_cabang';
            var data = opts;

            return $.ajax({
                url: url,
                type: 'POST',
                contentType: false,
                processData: false,
                data: data,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            });
        }

        update_kantorcabang = function(opts, id) {
            var data = opts;
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/area_cabang/' + id;
            return $.ajax({
                url: url,
                data: data,
                type: 'PUT',
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('token')
                }
            })
        }


        get_area()
            .done(function(res) {
                var select = [];
                $.each(res.data, function(i, e) {
                    var option = [
                        '<option value="' + e.id + '">' + e.nama_area + '</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_tambah_cabang select[name=area]').html(select);
            })

        get_area()
            .done(function(res) {
                var select = [];
                $.each(res.data, function(i, e) {
                    var option = [
                        '<option value="' + e.id + '">' + e.nama_area + '</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_ubah_cabang select[id=area_dup]').html(select);
            })

        get_provinsi()
            .done(function(res) {
                var select = [];
                $.each(res.data, function(i, e) {
                    var option = [
                        '<option value="' + e.id + '">' + e.nama + '</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_tambah_cabang select[name=provinsi]').html(select);
            })

        get_provinsi()
            .done(function(res) {
                var select = [];
                $.each(res.data, function(i, e) {
                    var option = [
                        '<option value="' + e.id + '">' + e.nama + '</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_ubah_cabang select[id=provinsi_dup]').html(select);
            })

        $('#provinsi2').change(function() {
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
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_tambah_cabang select[name=kabupaten]').html(select);
                }
            });
        });

        $('#provinsi_dup').change(function() {
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
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_ubah_cabang select[id=kabupaten_dup]').html(select);
                }
            });
        });

        $('#kabupaten2').change(function() {
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
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_tambah_cabang select[name=kecamatan]').html(select);
                }
            });
        });

        $('#kabupaten_dup').change(function() {
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
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_ubah_cabang select[id=kecamatan_dup]').html(select);
                }
            });
        });

        $('#kecamatan2').change(function() {
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
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_tambah_cabang select[name=kelurahan]').html(select);
                }
            });
        });

        $('#kecamatan_dup').change(function() {
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
                    $.each(res.data, function(i, e) {
                        var option = [
                            '<option value="' + e.id + '">' + e.nama + '</option>'
                        ].join('\n');
                        select.push(option);
                    });
                    $('#form_ubah_cabang select[id=kelurahan_dup]').html(select);
                }
            });
        });

        //Click submit tambah data
        $('#form_tambah_cabang').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama', $('input[name=nama_cabang]', this).val());
            formData.append('id_mk_area', $('select[name=area]', this).val());
            formData.append('id_provinsi', $('select[name=provinsi]', this).val());
            formData.append('id_kabupaten', $('select[name=kabupaten]', this).val());
            formData.append('id_kecamatan', $('select[name=kecamatan]', this).val());
            formData.append('id_kelurahan', $('select[name=kelurahan]', this).val());

            tambah_kantorcabang(formData)
                .done(function(res) {
                    var data = res;
                    bootbox.alert('Data berhasil ditambah', function() {
                        $('#form_tambah_cabang')[0].reset();
                        hide_all();
                        $('#lihat_kantor_cabang').show();
                        load_data();
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
                    bootbox.alert(error);
                });
        });

        $('#form_ubah_cabang  select[id=provinsi_1 ]').on('click', function(e) {
            $('#select_provinsi_1').remove();
            $('#select_provinsi_dup').show();
            $('#select_kabupaten_1').remove();
            $('#select_kabupaten_dup').show();
            $('#select_kecamatan_1').remove();
            $('#select_kecamatan_dup').show();
            $('#select_kelurahan_1').remove();
            $('#select_kelurahan_dup').show();
        })

        $('#form_ubah_cabang  select[id=kabupaten_1 ]').on('click', function(e) {
            $('#select_kabupaten_1').remove();
            $('#select_kabupaten_dup').show();
            $('#select_kecamatan_1').remove();
            $('#select_kecamatan_dup').show();
            $('#select_kelurahan_1').remove();
            $('#select_kelurahan_dup').show();
        })

        $('#form_ubah_cabang  select[id=kecamatan_1 ]').on('click', function(e) {
            $('#select_kecamatan_1').remove();
            $('#select_kecamatan_dup').show();
            $('#select_kelurahan_1').remove();
            $('#select_kelurahan_dup').show();
        })

        $('#form_ubah_cabang  select[id=kelurahan_1 ]').on('click', function(e) {
            $('#select_kelurahan_1').remove();
            $('#select_kelurahan_dup').show();
        })

        $('#form_ubah_cabang  select[id=area_1 ]').on('click', function(e) {
            $('#select_area_1').remove();
            $('#select_area_dup').show();
        })

        // Click ubah
        $('#data_cabang').on('click', '.edit', function(e) {
            e.preventDefault();
            $('#select_provinsi_dup').hide();
            $('#select_kabupaten_dup').hide();
            $('#select_kecamatan_dup').hide();
            $('#select_kelurahan_dup').hide();
            $('#select_area_dup').hide();
            var id = $(this).attr('data');

            get_cabang({}, id)
                .done(function(response) {
                    var data = response.data;
                    console.log(data);

                    $('#form_ubah_cabang input[type=hidden][name=id]').val(data.id);
                    $('#form_ubah_cabang input[name=nama_cabang_1]').val(data.nama_cabang);

                    var select_area = [];
                    var option_area = [
                        '<option value="' + data.id_area + '">' + data.nama_area + '</option>'
                    ].join('\n');
                    select_area.push(option_area);
                    $('#form_ubah_cabang select[id=area_1]').html(select_area);

                    var select_provinsi = [];
                    var option_provinsi = [
                        '<option value="' + data.id_provinsi + '">' + data.nama_provinsi + '</option>'
                    ].join('\n');
                    select_provinsi.push(option_provinsi);
                    $('#form_ubah_cabang select[id=provinsi_1]').html(select_provinsi);

                    var select_kabupaten = [];
                    var option_kabupaten = [
                        '<option value="' + data.id_kabupaten + '">' + data.nama_kabupaten + '</option>'
                    ].join('\n');
                    select_kabupaten.push(option_kabupaten);
                    $('#form_ubah_cabang select[id=kabupaten_1]').html(select_kabupaten);

                    var select_kecamatan = [];
                    var option_kecamatan = [
                        '<option value="' + data.id_kecamatan + '">' + data.nama_kecamatan + '</option>'
                    ].join('\n');
                    select_kecamatan.push(option_kecamatan);
                    $('#form_ubah_cabang select[id=kecamatan_1]').html(select_kecamatan);

                    var select_kelurahan = [];
                    var option_kelurahan = [
                        '<option value="' + data.id_kelurahan + '">' + data.nama_kelurahan + '</option>'
                    ].join('\n');
                    select_kelurahan.push(option_kelurahan);
                    $('#form_ubah_cabang select[id=kelurahan_1]').html(select_kelurahan);

                    $('#form_ubah_cabang select[name=flg_aktif]').val(data.flg_aktif);
                })

                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan');
                });
            hide_all();
            $('#lihat_ubah_kantor_cabang').show();
        });

        // klik submit update
        $('#form_ubah_cabang').on('submit', function(e) {
            var id = $('input[name=id]', this).val();
            e.preventDefault();
            var formData = new FormData();
            var data = {
                id_mk_area: $('select[name=area_1]', this).val(),
                nama: $('input[name=nama_cabang_1]', this).val(),
                id_provinsi: $('select[name=provinsi_1]', this).val(),
                id_kabupaten: $('select[name=kabupaten_1]', this).val(),
                id_kecamatan: $('select[name=kecamatan_1]', this).val(),
                id_kelurahan: $('select[name=kelurahan_1]', this).val(),
                flg_aktif: $('select[name=flg_aktif]', this).val()
            }
            update_kantorcabang(data, id)
                .done(function(res) {
                    console.log(res);
                    var data = res.data;
                    bootbox.alert('Data berhasil diubah', function() {

                        load_data();
                        $('#form_ubah_cabang')[0].reset();
                        hide_all();
                        $('#lihat_kantor_cabang').show();
                    });
                })
                .fail(function(jqXHR) {
                    // var data = jqXHR.responseJSON;
                    // var error = "";

                    // if(typeof data == 'string') {
                    //     error = '<p>'+ data +'</p>';
                    // } else {
                    //     $.each(data, function(index, item){
                    //         error += '<p>'+ item +'</p>'+"\n";
                    //     });
                    // }
                    bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                    // bootbox.alert(error);
                });
        });

        //delete
        $('#data_cabang').on('click', '.delete', function(e) {
            e.preventDefault();
            var id = $(this).attr('data');

            bootbox.confirm({
                message: "Apakah data ini ingin dihapus?",
                bottons: {
                    confirm: {
                        label: 'Ya',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: ' Tidak',
                        bottons: 'btn-danger'
                    }
                },
                callback: function(result) {
                    if (result) {
                        delete_cabang(id)
                            .done(function(res) {
                                load_data();
                                bootbox.alert('Data berhasil dihapus')
                            })
                            .fail(function(jqXHR) {
                                bootbox.alert('Data gagal dihapus, Silahkan cek jaringan anda dan coba lagi !!')
                            })
                    }
                }
            });
        });
    });
</script>