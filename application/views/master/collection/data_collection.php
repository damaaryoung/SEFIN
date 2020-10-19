<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Collection</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Collection</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content-body">
        <div class="card">
            <div class="card-body">
                <?php echo form_open_multipart('Export/export_report'); ?>
                <section>

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label>Dari Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="dari_tgl" name="dari_tgl" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Sampai Tanggal</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="far fa-calendar-alt"></i>
                                        </span>
                                    </div>
                                    <input type="text" id="sampai_tgl" name="sampai_tgl" class="datepicker-here form-control" data-language='en' data-date-format="dd-mm-yyyy">
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Area</label>
                                <select name="select_area" id="select_area" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option valu="BDG">BDG</option>
                                    <option value="KRWNG">KRWNG</option>
                                    <option value="BKS">BKS</option>
                                    <option value="BGR">BGR</option>
                                    <option value="TNG">TNG</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Cabang</label>
                                <select name="select_cabang" id="select_cabang" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                    <option value="">--Pilih--</option>
                                    <option value="09">09-KOPO</option>
                                    <option value="10">10-PETA</option>
                                    <option value="11">11-PETA</option>
                                    <option value="34">34-CIKAMPEK</option>
                                    <option value="13">13-CIKAMPEK</option>
                                    <option value="02">02-KARAWANG</option>
                                    <option value="39">39-KOSAMBI</option>
                                    <option value="00">00-BEKASI UTARA</option>
                                    <option value="32">32-BEKASI UTARA</option>
                                    <option value="06">06-TAMBUN SELATAN</option>
                                    <option value="07">07-CIKARANG</option>
                                    <option value="31">31-CIKARANG</option>
                                    <option value="37">37-CIKARANG UTARA</option>
                                    <option value="15">15-CIKARANG UTARA</option>
                                    <option value="08">08-PONDOK GEDE</option>
                                    <option value="35">35-CIBUCIL</option>
                                    <option value="01">01-BOGOR</option>
                                    <option value="38">38-CILEUNGSI</option>
                                    <option value="03">03-CITEUREP</option>
                                    <option value="33">33-SINDANG BARANG</option>
                                    <option value="04">04-BSD</option>
                                    <option value="36">36-PAMULANG</option>
                                    <option value="16">16-PAMULANG</option>
                                    <option value="05">05-TANGERANG</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>PIC / Kolektor</label>
                                <input name="kolektor" id="kolektor" class="form-control">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <a type="submit" id="search" class="btn btn-success" style="color:#fff; width:100%"><i class="fa fa-search" aria-hidden="true" style="color:#fff"></i>Search</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div id="loader" class=" box-body table-responsive no-padding">
                                        <input type="hidden" name="data_all" id="data_all">
                                        <button type="submit" id="submit" class="btn btn-default" style="float: right;"><img src="<?php echo base_url('assets/dist/img/excel.png') ?>" style="width: 26px; "></img>EXPORT</button>
                                        <table id="tbl_collection" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                            <thead style="font-size: 15px" class="bg-danger">
                                                <tr>
                                                    <th>
                                                        Activity
                                                    </th>
                                                    <th>
                                                        Tanggal Collect
                                                    </th>
                                                    <th>
                                                        Task
                                                    </th>
                                                    <th>
                                                        Kontrak
                                                    </th>
                                                    <th>
                                                        Angsuran / Jumlah Tunggakan
                                                    </th>
                                                    <th>
                                                        OS Pokok / Baki Debet
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="data_report" style="font-size: 15px">
                                            </tbody>

                                            <tbody id="assignment" style="font-size: 13px">
                                            </tbody>
                                            <tbody id="visit" style="font-size: 13px">
                                            </tbody>
                                            <tbody id="interaksi" style="font-size: 13px">
                                            </tbody>
                                            <tbody id="janji_bayar" style="font-size: 13px">
                                            </tbody>
                                            <tbody id="bayar" style="font-size: 13px">
                                            </tbody>
                                            <tbody id="bayar_via_jari" style="font-size: 13px">
                                            </tbody>
                                            <tbody id="current" style="font-size: 13px">
                                            </tbody>
                                            <tbody id="collection_rasio" style="font-size: 13px">
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                </form>
            </div>
        </div>
    </section>
</div>

<div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="load_data"></div>
    </div>
</div>

<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

<script type="text/javascript">
    function rubah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }

    get_dashboard = function(opts) {
        var url = '<?php echo $this->config->item('api_url'); ?>api/master/collectresult ';
        if (opts != undefined) {
            var data = opts;
        }
        return $.ajax({
            type: 'GET',
            url: url,
            data: data,
            dataSrc: "",
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            },
        });
    }

    get_filter_dashboard = function(opts) {
        if (document.getElementById("select_area").value == "" && document.getElementById("select_cabang").value == "") {
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/collectresult/coll';

            var date1 = $("#dari_tgl").val();
            var dd1 = date1.substr(0, 2);
            var mm1 = date1.substr(3, 2);
            var yy1 = date1.substr(6);
            var dari_tgl = yy1 + "-" + mm1 + "-" + dd1;
            console.log(dari_tgl);

            var date = $("#sampai_tgl").val();
            var dd = date.substr(0, 2);
            var mm = date.substr(3, 2);
            var yy = date.substr(6);
            var sampai_tgl = yy + "-" + mm + "-" + dd;
            console.log(sampai_tgl);

            return $.ajax({
                type: 'GET',
                url: url,
                data: {
                    tgl_transaksi_awal: dari_tgl,
                    tgl_transaksi_akhir: sampai_tgl,
                },
                dataSrc: "",
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
        } else if (document.getElementById("select_cabang").value == "" && document.getElementById("kolektor").value == "") {
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/collectresult/coll';
            var date1 = $("#dari_tgl").val();
            var dd1 = date1.substr(0, 2);
            var mm1 = date1.substr(3, 2);
            var yy1 = date1.substr(6);
            var dari_tgl = yy1 + "-" + mm1 + "-" + dd1;
            console.log(dari_tgl);

            var date = $("#sampai_tgl").val();
            var dd = date.substr(0, 2);
            var mm = date.substr(3, 2);
            var yy = date.substr(6);
            var sampai_tgl = yy + "-" + mm + "-" + dd;
            console.log(sampai_tgl)
            var area = document.getElementById("select_area").value;
            return $.ajax({
                type: 'GET',
                url: url,
                data: {
                    tgl_transaksi_awal: dari_tgl,
                    tgl_transaksi_akhir: sampai_tgl,
                    area: area,
                },
                dataSrc: "",
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
        } else if (document.getElementById("kolektor").value == "") {
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/collectresult/coll';
            var date1 = $("#dari_tgl").val();
            var dd1 = date1.substr(0, 2);
            var mm1 = date1.substr(3, 2);
            var yy1 = date1.substr(6);
            var dari_tgl = yy1 + "-" + mm1 + "-" + dd1;
            console.log(dari_tgl);

            var date = $("#sampai_tgl").val();
            var dd = date.substr(0, 2);
            var mm = date.substr(3, 2);
            var yy = date.substr(6);
            var sampai_tgl = yy + "-" + mm + "-" + dd;
            console.log(sampai_tgl);
            var area = document.getElementById("select_area").value;
            var cabang = document.getElementById("select_cabang").value;
            return $.ajax({
                type: 'GET',
                url: url,
                data: {

                    tgl_transaksi_awal: dari_tgl,
                    tgl_transaksi_akhir: sampai_tgl,
                    area: area,
                    cabang: cabang,
                },
                dataSrc: "",
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
        } else {
            var url = '<?php echo $this->config->item('api_url'); ?>api/master/collectresult/coll';
            var date1 = $("#dari_tgl").val();
            var dd1 = date1.substr(0, 2);
            var mm1 = date1.substr(3, 2);
            var yy1 = date1.substr(6);
            var dari_tgl = yy1 + "-" + mm1 + "-" + dd1;
            console.log(dari_tgl);

            var date = $("#sampai_tgl").val();
            var dd = date.substr(0, 2);
            var mm = date.substr(3, 2);
            var yy = date.substr(6);
            var sampai_tgl = yy + "-" + mm + "-" + dd;
            console.log(sampai_tgl)
            var area = document.getElementById("select_area").value;
            var cabang = document.getElementById("select_cabang").value;
            var kolektor = document.getElementById("kolektor").value;
            return $.ajax({
                type: 'GET',
                url: url,
                data: {
                    tgl_transaksi_awal: dari_tgl,
                    tgl_transaksi_akhir: sampai_tgl,
                    area: area,
                    cabang: cabang,
                    kolektor: kolektor,
                },
                dataSrc: "",
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
    }

    load_data = function() {
        get_dashboard()
            .done(function(response) {
                var data = response.data;
                var html = [];
                var html1 = [];
                var html2 = [];

                var no = 0

                console.log(data);

                if (data.length === 0) {
                    var tr = [
                        '<tr valign="midle">',
                        '<td colspan="4">Tidak ada data</td>',
                        '</tr>'
                    ].join('\n');
                    $('#data_report').html(tr);

                    return;
                }
                $.each(data, function(index, item) {
                    no++;
                    var tr = [
                        '<tr>',
                        '<td style="font-size:15px; font-weight:bold;">' + item.activity + '</td>',
                        '<td style="font-size:15px;"><input type="hidden" name="tgl_collect' + no + '" value="' + item.tgl_collect + '">' + item.tgl_collect + '</td>',
                        '<td style="font-size:15px;"><input type="hidden" name="task' + no + '" value="' + rubah(item.task) + '">' + rubah(item.task) + '</td>',
                        '<td style="font-size:15px;"><input type="hidden" name="kontrak' + no + '" value="' + rubah(item.kontrak) + '">' + rubah(item.kontrak) + '</td>',
                        '<td style="font-size:15px;"><input type="hidden" name="jml_tunggakan' + no + '" value="' + rubah(item.jml_tunggakan) + '">' + rubah(item.jml_tunggakan) + '</td>',
                        '<td style="font-size:15px;"><input type="hidden" name="total_ospokok' + no + '" value="' + rubah(item.total_ospokok) + '">' + rubah(item.total_ospokok) + '</td>',
                        '</tr>'
                    ].join('\n');
                    html.push(tr);
                });
                $('#data_report').html(html);

                var tr_current1 = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;" colspan="5">CURRENT</td>',
                    '<td style="font-size:15px;"><input type="hidden" name="current1" value="' + data[4].current + '%">' + data[4].current + '%</td>',
                    '</tr>'
                ].join('\n');
                html1.push(tr_current1);
                $('#current').html(html1);

                var tr_collection_rasio = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;" colspan="5">COLLECTION RASIO</td>',
                    '<td style="font-size:15px;"><input type="hidden" name="collection_rasio1" value="' + data[4].collection_rasio + '%">' + data[4].collection_rasio + '%</td>',
                    '</tr>'
                ].join('\n');
                html2.push(tr_collection_rasio);
                $('#collection_rasio').html(html2);
            })
            .fail(function(response) {
                $('#data_report').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
    }
    load_data();

    $('#search').click(function(e) {
        $('#data_all').val('filter');

        if (document.getElementById('dari_tgl').value == "") {
            bootbox.alert("Dari Tanggal Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById("sampai_tgl").value == "") {
            bootbox.alert("Sampai Tanggal Belum Di Isi !!!");
            return (false);
        }
        if (document.getElementById("select_area").value == "" && document.getElementById("select_cabang").value !== "") {
            bootbox.alert("Area Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById("select_area").value == "" && document.getElementById("select_cabang").value == "" && document.getElementById("kolektor").value !== "") {
            bootbox.alert("Area & Cabang Belum Di Pilih !!!");
            return (false);
        }
        if (document.getElementById("select_cabang").value == "" && document.getElementById("select_area").value !== "" && document.getElementById("kolektor").value !== "") {
            bootbox.alert("Cabang Belum Di Pilih !!!");
            return (false);
        }

        get_filter_dashboard()
            .done(function(response) {
                $('#data_report').hide();
                var data = response.data;
                console.log(data);
                $('#batal').click();

                // $('#tbl_collection').show();
                var data = response.data;
                var html = [];
                var html1 = [];
                var html2 = [];
                var html3 = [];
                var html4 = [];
                var html5 = [];
                var html6 = [];
                var html7 = [];
                var no = 0;
                console.log(data);

                console.log(data.current.percent);
                if (data.length === 0) {
                    var tr = [
                        '<tr valign="midle">',
                        '<td colspan="4">No Data</td>',
                        '</tr>'
                    ].join('\n');
                    $('#assignment').html(tr);
                    return;
                }
                var assignment_task = (rubah(data.assignment[0].jumlah));
                var assignment_kontrak = (rubah(data.assignment[1].jumlah));
                var assignment_angsuran = (rubah(data.assignment[2].jumlah));
                var assignment_os = (rubah(data.assignment[3].jumlah));
                var tr_assignment = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;">ASSIGNMENT</td>',
                    '<td style="font-size:15px"><input type="hidden" id="tgl_collect_assignment" name="tgl_collect_assignment" value="' + data.tanggal_collect.percent + '">' + data.tanggal_collect.percent + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="assignment_task" value="' + assignment_task + '">' + assignment_task + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="assignment_kontrak" value="' + assignment_kontrak + '">' + assignment_kontrak + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="assignment_angsuran" value="' + assignment_angsuran + '">' + assignment_angsuran + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="assignment_os" value="' + assignment_os + '">' + assignment_os + '</td>',
                    '</tr>'
                ].join('\n');
                html.push(tr_assignment);
                $('#assignment').html(html);

                var visit_task = (rubah(data.visit[0].jumlah));
                var visit_kontrak = (rubah(data.visit[1].jumlah));
                var visit_angsuran = (rubah(data.visit[2].jumlah));
                var visit_os = (rubah(data.visit[3].jumlah));
                var tr_visit = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;">VISIT</td>',
                    '<td style="font-size:15px">' + data.tanggal_collect.percent + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="visit_task" value="' + visit_task + '">' + visit_task + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="visit_kontrak" value="' + visit_kontrak + '">' + visit_kontrak + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="visit_angsuran" value="' + visit_angsuran + '">' + visit_angsuran + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="visit_os" value="' + visit_os + '">' + visit_os + '</td>',
                    '</tr>'
                ].join('\n');
                html1.push(tr_visit);
                $('#visit').html(html1);

                var interaksi_task = (rubah(data.interaksi[0].jumlah));
                var interaksi_kontrak = (rubah(data.interaksi[1].jumlah));
                var interaksi_angsuran = (rubah(data.interaksi[2].jumlah));
                var interaksi_os = (rubah(data.interaksi[3].jumlah));
                var tr_interaksi = [
                    '<tr>',
                    '<td style="font-size:15px; font-weight:bold;">INTERAKSI</td>',
                    '<td style="font-size:15px">' + data.tanggal_collect.percent + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="interaksi_task" value="' + interaksi_task + '">' + interaksi_task + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="interaksi_kontrak" value="' + interaksi_kontrak + '">' + interaksi_kontrak + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="interaksi_angsuran" value="' + interaksi_angsuran + '">' + interaksi_angsuran + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="interaksi_os" value="' + interaksi_os + '">' + interaksi_os + '</td>',
                    '</tr>'
                ].join('\n');
                html2.push(tr_interaksi);
                $('#interaksi').html(html2);

                var janji_bayar_task = (rubah(data.janji_bayar[0].jumlah));
                var janji_bayar_kontrak = (rubah(data.janji_bayar[1].jumlah));
                var janji_bayar_angsuran = (rubah(data.janji_bayar[2].jumlah));
                var janji_bayar_os = (rubah(data.janji_bayar[3].jumlah));
                var tr_janji_bayar = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;">JANJI BAYAR</td>',
                    '<td style="font-size:15px">' + data.tanggal_collect.percent + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="janji_bayar_task" value="' + janji_bayar_task + '">' + janji_bayar_task + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="janji_bayar_kontrak" value="' + janji_bayar_kontrak + '">' + janji_bayar_kontrak + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="janji_bayar_angsuran" value="' + janji_bayar_angsuran + '">' + janji_bayar_angsuran + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="janji_bayar_os" value="' + janji_bayar_os + '">' + janji_bayar_os + '</td>',
                    '</tr>'
                ].join('\n');
                html3.push(tr_janji_bayar);
                $('#janji_bayar').html(html3);

                var bayar_task = (rubah(data.bayar[0].jumlah));
                var bayar_kontrak = (rubah(data.bayar[1].jumlah));
                var bayar_angsuran = (rubah(data.bayar[2].jumlah));
                var bayar_os = (rubah(data.bayar[3].jumlah));
                var tr_bayar = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;">BAYAR</td>',
                    '<td style="font-size:15px">' + data.tanggal_collect.percent + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_task" value="' + bayar_task + '">' + bayar_task + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_kontrak" value="' + bayar_kontrak + '">' + bayar_kontrak + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_angsuran" value="' + bayar_angsuran + '">' + bayar_angsuran + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_os" value="' + bayar_os + '">' + bayar_os + '</td>',
                    '</tr>'
                ].join('\n');
                html4.push(tr_bayar);
                $('#bayar').html(html4);

                var bayar_via_jari_bayar_task = (rubah(data.bayar_via_jari[0].jumlah));
                var bayar_via_jari_bayar_kontrak = (rubah(data.bayar_via_jari[1].jumlah));
                var bayar_via_jari_bayar_angsuran = (rubah(data.bayar_via_jari[2].jumlah));
                var bayar_via_jari_bayar_os = (rubah(data.bayar_via_jari[3].jumlah));
                var tr_bayar_via_jari = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;">BAYAR VIA JARI</td>',
                    '<td style="font-size:15px">' + data.tanggal_collect.percent + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_via_jari_bayar_task" value="' + bayar_via_jari_bayar_task + '">' + bayar_via_jari_bayar_task + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_via_jari_bayar_kontrak" value="' + bayar_via_jari_bayar_kontrak + '">' + bayar_via_jari_bayar_kontrak + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_via_jari_bayar_angsuran" value="' + bayar_via_jari_bayar_angsuran + '">' + bayar_via_jari_bayar_angsuran + '</td>',
                    '<td style="font-size:15px"><input type="hidden" name="bayar_via_jari_bayar_os" value="' + bayar_via_jari_bayar_os + '">' + bayar_via_jari_bayar_os + '</td>',
                    '</tr>'
                ].join('\n');
                html7.push(tr_bayar_via_jari);
                $('#bayar_via_jari').html(html7);

                var tr_current = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;" colspan="5">CURRENT</td>',
                    '<td style="font-size:15px"><input type="hidden" name="current" value="' + data.current.percent + '">' + data.current.percent + '</td>',
                    '</tr>'
                ].join('\n');
                html5.push(tr_current);
                $('#current').html(html5);

                var tr_collection_rasio = [
                    '<tr>',
                    '<td style="font-size:15px;font-weight:bold;" colspan="5">COLLECTION RASIO</td>',
                    '<td style="font-size:15px"><input type="hidden" name="collection_rasio" value="' + data.collection_rasio.percent + '">' + data.collection_rasio.percent + '</td>', ,
                    '</tr>'
                ].join('\n');
                html6.push(tr_collection_rasio);
                $('#collection_rasio').html(html6);

                // var papap = document.getElementById("bayar_task_jari").value;
                // console.log(document.getElementById("bayar_task_jari").val);
            })
            .fail(function(response) {
                $('#assignment').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
    });
</script>