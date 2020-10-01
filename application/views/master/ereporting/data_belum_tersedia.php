<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<style type="text/css">
    td.details-control {
        background: url('./assets/dist/img/details_open.png') no-repeat center center;
        cursor: pointer;
    }

    tr.shown td.details-control {
        background: url('./assets/dist/img/details_close.png') no-repeat center center;
    }

    .card-primary.card-outline-tabs>.card-header a.active {
        border-top: 3px solid #d93444;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 0.9rem;
    }

    .image-upload>input {
        display: none;
    }

    .image-upload img {
        width: 40px;
        cursor: pointer;
    }
</style>
<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>

<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Yang Belum Tersedia</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Yang Belum Tersedia</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Hari Kerja & Periode</h5>
                    </div>
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <!-- <button class="btn btn-primary tambah" id="modal_pengajuan" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button> -->
                            <table id="table_pengajuan_lpdk" class="table table-bordered table-hover table-sm" style="white-space: nowrap; width: 100%;">
                                <thead style="font-size: 12px" class="bg-danger">
                                    <tr>
                                        <th>
                                            Tabel Periode
                                        </th>
                                        <th>
                                            HK
                                        </th>
                                        <th>
                                            Target HK Lending
                                        </th>
                                        <th>
                                            Periode
                                        </th>
                                        <th>
                                            Target Periode Lending
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 12px" id="data_hari_kerja">
                                    <tr>
                                        <td>
                                            01/07/2020
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            3,3%
                                        </td>
                                        <td>
                                            P1
                                        </td>
                                        <td>Target Periode Lending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01/07/2020
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            3,3%
                                        </td>
                                        <td>
                                            P1
                                        </td>
                                        <td>Target Periode Lending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01/07/2020
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            3,3%
                                        </td>
                                        <td>
                                            P1
                                        </td>
                                        <td>Target Periode Lending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01/07/2020
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            3,3%
                                        </td>
                                        <td>
                                            P1
                                        </td>
                                        <td>Target Periode Lending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01/07/2020
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            3,3%
                                        </td>
                                        <td>
                                            P1
                                        </td>
                                        <td>Target Periode Lending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01/07/2020
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            3,3%
                                        </td>
                                        <td>
                                            P1
                                        </td>
                                        <td>Target Periode Lending</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            01/07/2020
                                        </td>
                                        <td>
                                            1
                                        </td>
                                        <td>
                                            3,3%
                                        </td>
                                        <td>
                                            P1
                                        </td>
                                        <td>Target Periode Lending</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Target (Diisi HO)</h5>
                    </div>
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <button class="btn btn-primary btn-sm tambah" id="tambah_taget" style="margin-bottom: 5  px;"><i class="fa fa-plus">Tambah</i></button>
                            <table id="table_target" class="table table-bordered table-hover table-sm" style="font-size: 12px;white-space: nowrap; width: 100%;">
                                <thead class="bg-danger">
                                    <tr>
                                        <th rowspan="2" style="text-align:center;">Nama Area Kerja</th>
                                        <th rowspan="2" style="text-align:center;">Kategori</th>
                                        <th colspan="2" style="text-align:center;">Marketing</th>
                                        <th rowspan="2">Aksi</th>
                                    <tr>
                                        <th>Target Lending</th>
                                        <th>Target Baki Debet</th>
                                    </tr>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Area Kerja</h5>
                    </div>
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <!-- <button class="btn btn-primary tambah" id="modal_pengajuan" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button> -->
                            <table id="table_area_kerja" class="table table-bordered table-hover table-sm" style="white-space: nowrap; width: 100%;">
                                <thead style="font-size: 12px" class="bg-danger">
                                    <tr>
                                        <th>
                                            Nama Area
                                        </th>
                                        <th>
                                            Area Kerja
                                        </th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 12px" id="data_area_kerja">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Source Of Application</h5>
                    </div>
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <!-- <button class="btn btn-primary tambah" id="modal_pengajuan" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button> -->
                            <table id="table_asal_data" class="table table-bordered table-hover table-sm" style="white-space: nowrap; width: 100%;">
                                <thead style="font-size: 12px" class="bg-danger">
                                    <tr>
                                        <th>SOA</th>
                                        <th>Nama Group 4</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 12px" id="data_asal_data">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade in" id="modal_tambah_target" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Target</h5>
                <button type="button" title="Tutup" class="close" data-dismiss="modal" style="color: #ff0c17" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <input type="hidden" name="id_target" id="id_target">
                <input type="hidden" value="" name="edit_target" id="edit_target">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <small font-weight: 700;>Nama Area Kerja :</small>
                            </div>
                            <div class="col-md-9">
                                <select name="nama_area_kerja" id="nama_area_kerja" class="form-control form-control-sm">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <small font-weight: 700;>Kategori :</small>
                            </div>
                            <div class="col-md-9">
                                <select type="text" name="kategori" id="kategori" class="form-control form-control-sm">
                                    <option id="pilih_kategori" value="">--Pilih--</option>
                                    <option id="A_kategori" value="A">A</option>
                                    <option id="B_kategori" value="B">B</option>
                                    <option id="C_kategori" value="C">C</option>
                                    <option id="D_kategori" value="D">D</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <small font-weight: 700;>Target Lending :</small>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="target_lending" id="target_lending" class="form-control form-control-sm uang">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <div class="col-md-3">
                                <small font-weight: 700;>Target Baki debet:</small>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="target_baki_debet" name="target_baki_debet" class="form-control form-control-sm uang">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn_approve_pengajuan_caa">
                        <button type="submit" id="submit_tambah_target" class="btn btn-primary btn-sm submit" style="float: right;">Simpan</button>
                        <a href="javascript:void(0)" data-dismiss="modal" class="btn btn-danger btn-sm close_deb" style="float: right; margin-right: 4px">Batal</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    function rubah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    show_area_kerja()
    show_asal_data()

    function show_area_kerja() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo site_url('Data_belum_tersedia_controller/get_area_kerja') ?>',
            async: false,
            dataType: 'json',
            success: function(res) {
                var data = res.data_area_kerja;
                console.log(data);
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td>' + data[i].AREA + '</td>' +
                        '<td>' + data[i].cabang + '</td>' +
                        '</tr>';
                }
                $('#data_area_kerja').html(html);
            }

        });
    }

    function show_asal_data() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo site_url('Data_belum_tersedia_controller/get_asal_data') ?>',
            async: false,
            dataType: 'json',
            success: function(res) {
                var data = res.data_asal_data;
                console.log(data);
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                        '<td>' + data[i].nama + '</td>' +
                        '<td>' + data[i].nama + '</td>' +
                        '</tr>';
                }
                $('#data_asal_data').html(html);
            }

        });
    }

    $('#table_area_kerja').dataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
        destroy: true
        // paging: false
        // searching: false
    });

    //UBAH RIBUAN
    $('.uang').mask('0.000.000.000', {
        reverse: true
    });

    $("#tambah_taget").click(function() {
        $('#modal_tambah_target').modal('show');
        $('#edit_target').val('');
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Data_belum_tersedia_controller/get_area_kerja') ?>",
            dataType: "JSON",
            data: {},
            success: function(res) {
                var data = res.data_area_kerja;
                var select11 = [];
                var select1 = '<option value="">--Pilih--</option>';
                $.each(data, function(i, e) {
                    var option1 = [
                        '<option value="' + e.cabang + '">' + e.cabang + '</option>'
                    ].join('\n');
                    select11.push(option1);
                });
                $('#nama_area_kerja').html(select1 + select11);
            }
        });
    });

    $("#submit_tambah_target").click(function() {
        var id = $('#id_target').val();
        var nama_area_kerja = $('#nama_area_kerja').val();
        var kategori = $('#kategori').val();
        var target_lending_ = $('#target_lending').val();
        var target_lending = target_lending_.replace(/[^\d]/g, "");
        var target_baki_debet_ = $('#target_baki_debet').val();
        var target_baki_debet = target_baki_debet_.replace(/[^\d]/g, "");

        if (document.getElementById('nama_area_kerja').value == "") {
            bootbox.alert("Nama Area Kerja Belum Di Pilih !!!");
            return (false);
        } else
        if (document.getElementById('kategori').value == "") {
            bootbox.alert("Kategori Belum Di Pilih !!!");
            return (false);
        } else
        if (document.getElementById('target_lending').value == "") {
            bootbox.alert("Target Lending Belum Di isi !!!");
            return (false);
        } else
        if (document.getElementById('target_baki_debet').value == "") {
            bootbox.alert("Target Baki Debet Belum Di Isi !!!");
            return (false);
        } else if (document.getElementById('edit_target').value == "") {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Data_belum_tersedia_controller/save_target') ?>",
                dataType: "JSON",
                data: {
                    nama_area_kerja: nama_area_kerja,
                    kategori: kategori,
                    target_lending: target_lending,
                    target_baki_debet: target_baki_debet
                },
                success: function() {
                    swal({
                        title: "Data Berhasil Disimpan",
                        // text: "Terimakasih",
                        type: "success"
                    }, function() {
                        tampil_data_target();
                        $('#nama_area_kerja').val("");
                        $('#kategori').val("");
                        $('#target_lending').val("");
                        $('#target_baki_debet').val("");
                    });
                }
            });
        } else if (document.getElementById('edit_target').value == "edit") {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('Data_belum_tersedia_controller/update_target') ?>",
                dataType: "JSON",
                data: {
                    id: id,
                    nama_area_kerja: nama_area_kerja,
                    kategori: kategori,
                    target_lending: target_lending,
                    target_baki_debet: target_baki_debet
                },
                success: function() {
                    swal({
                        title: "Data Berhasil Diubah",
                        // text: "Terimakasih",
                        type: "success"
                    }, function() {
                        tampil_data_target();
                        $('#nama_area_kerja').val("");
                        $('#kategori').val("");
                        $('#target_lending').val("");
                        $('#target_baki_debet').val("");
                        $('#modal_tambah_target').modal("hide");
                    });
                }
            });
        }
    });

    tampil_data_target();

    function tampil_data_target() {
        $('#table_target').DataTable({

            "processing": true,
            "serverSide": true,
            'destroy': true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Data_belum_tersedia_controller/get_data_target') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        })
    };

    $('#table_target').on('click', '.btn_delete', function(e) {
        var id = $(this).attr('data');
        swal({
                title: "Konfirmasi Hapus Data",
                text: "Apakah yakin data ini akan dihapus?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#FF3636",
                confirmButtonText: "Delete",
                closeOnConfirm: false,
                showLoaderOnConfirm: true,
            },
            function() {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Data_belum_tersedia_controller/delete_target') ?>",
                    dataType: "JSON",
                    data: {
                        id: id
                    },
                    success: function() {
                        swal({
                            title: "Data Berhasil Dihapus",
                            // text: "Terimakasih",
                            type: "success"
                        }, function() {
                            tampil_data_target();
                        });

                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        setTimeout(function() {
                            swal("Error", "Tolong Cek Koneksi Lalu Ulangi", "error");
                        }, 2000);
                    }
                });
            });
    });

    $('#table_target').on('click', '.btn_edit', function() {
        var id = $(this).attr('data');

        $.ajax({
            type: "POST",
            url: "<?php echo site_url('Data_belum_tersedia_controller/edit_target') ?>",
            dataType: "JSON",
            data: {
                id: id
            },
            success: function(data) {
                $('[name="id_target"]').val(data[0].id);
                $('[name="target_lending"]').val(rubah(Math.ceil(data[0].target_lending)));
                $('[name="target_baki_debet"]').val(rubah(Math.ceil(data[0].target_baki_debet)));
                $('[name="edit_target"]').val('edit');
                var cabang = data[0].nama_area_kerja;

                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('Data_belum_tersedia_controller/get_area_kerja') ?>",
                    dataType: "JSON",
                    data: {},
                    success: function(res) {
                        var data = res.data_area_kerja;
                        var select11 = [];
                        var select1 = '<option value="">--Pilih--</option>';
                        $.each(data, function(i, e) {
                            var option1 = [
                                '<option id="' + e.cabang + '" value="' + e.cabang + '">' + e.cabang + '</option>'
                            ].join('\n');
                            select11.push(option1);
                        });
                        $('#nama_area_kerja').html(select1 + select11);
                        if (cabang == '' + cabang + '') {
                            document.getElementById('' + cabang + '').selected = "true";
                        }
                        // console.log(a);
                    }
                });

                if (data[0].kategori == "A") {
                    document.getElementById("A_kategori").selected = "true";
                } else
                if (data[0].kategori == "B") {
                    document.getElementById("B_kategori").selected = "true";
                } else
                if (data[0].kategori == "C") {
                    document.getElementById("C_kategori").selected = "true";
                } else
                if (data[0].kategori == "D") {
                    document.getElementById("D_kategori").selected = "true";
                } else {
                    document.getElementById("pilih_kategori").selected = "true";
                }

                $('#modal_tambah_target').modal('show');
            }
        });

    });
</script>