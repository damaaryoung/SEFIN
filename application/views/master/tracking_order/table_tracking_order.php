<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Tracking Order</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Tracking Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <select name="bulan" id="bulan" class="form-control">
                        <?php
                        $bulan = $this->input->post('bulan');
                        $tahun = $this->input->post('tahun');

                        if(empty($bulan && $tahun)) {
                            $bulan = date('m');
                            $tahun = date('Y');
                        }
                            if($bulan=='1'):
                                $month = 'Januari';
                            elseif($bulan=='2'):
                                $month = 'Februari';
                            elseif($bulan=='3'):
                                $month = 'Maret';
                            elseif($bulan=='4'):
                                $month = 'April';
                            elseif($bulan=='5'):
                                $month = 'Mei';
                            elseif($bulan=='6'):
                                $month = 'Juni';
                            elseif($bulan=='7'):
                                $month = 'Juli';
                            elseif($bulan=='8'):
                                $month = 'Agustus';
                            elseif($bulan=='9'):
                                $month = 'September';
                            elseif($bulan=='10'):
                                $month = 'Oktober';
                            elseif($bulan=='11'):
                                $month = 'November';
                            elseif($bulan=='12'):
                                $month = 'Desember';
                            endif;

                            if($bulan):
                                echo "<option value='$bulan'>$month</option>";
                            endif;
                        ?>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="tahun" id="tahun" class="form-control">
                        <option value="2020">2020</option>
                        <option value="2021" selected="selected">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <?php
                            $kode_area = $this->db->get('mk_area')->result();
                        ?>
                        <select id="kode_area" class="form-control" name="kode_area">
                            <option value="" selected="selected">- Pilih Area -</option>
                            <option value="*">KONSOLIDASI</option>
                            <?php foreach($kode_area as $r): ?>
                                <option value="<?php echo $r->id; ?>"><?php echo $r->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?php
                            $kode_cabang = $this->db->get('mk_cabang')->result();
                        ?>
                        <select id="kode_cabang" class="form-control" name="kode_cabang">
                            <option value="" selected="selected">- Pilih Cabang -</option>
                            <option value="*">Konsolidasi</option>
                            <?php foreach($kode_cabang as $r): ?>
                                <option value="<?php echo $r->id; ?>"><?php echo $r->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="btn-group" style="width: 100%">
                        <button class="btn btn-primary buttonCari" onclick="filter_tracking_order()"><i class="fa fa-user-check"> Cari</i></button>
                        <button class="btn btn-secondary buttonProses" disabled><i class="fas fa-spinner fa-pulse" ></i></button>
                    </div>
                </div>
                <div class="col-md-2">
                    <a style="width: 100%" href="javascript:void(0)" title="Export To Excel" class="btn btn-success btn-sm mr-3" onclick="export_to_excel()">
                        <i class="fa fa-print"></i> Export to Excel
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="box-body table-responsive no-padding">
                                <table id="table_tracking" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                    <thead style="font-size: 15px" class="bg-danger">
                                        <tr>
                                            <th>
                                                No
                                            </th>
                                            <th>
                                                Tanggal Transaksi
                                            </th>
                                            <th>
                                                No SO
                                            </th>
                                            <th>
                                                Nama Debitur
                                            </th>
                                            <th>
                                                Cabang
                                            </th>
                                            <th>
                                               Nama CA
                                            </th>
                                            <th>
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="data_tracking" style="font-size: 13px">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>

    $('.buttonProses').hide();

    var areaSelect = document.getElementById("kode_area");
    areaSelect.addEventListener("change", function(e) {
        var selectedArea = $("#kode_area option:selected").val();

        if (selectedArea !== "") {
            $('#kode_cabang').prop('disabled', 'disabled');
        } else {
            $('#kode_cabang').prop('disabled', false);
        }

    });

    var cabangSelect = document.getElementById("kode_cabang");
    cabangSelect.addEventListener("change", (e) => {
        var selectedCabang = $("#kode_cabang option:selected").val();

        if (selectedCabang !== "") {
            $('#kode_area').prop('disabled', 'disabled');
        } else {
            $('#kode_area').prop('disabled', false);
        }

    });

    function filter_tracking_order() {
        $('.buttonCari').hide();
        $('.buttonProses').show();

        var requestBody = {
            bulan    : $("#bulan option:selected").val(),
            tahun    : $("#tahun option:selected").val(),
            kode_cabang   : $("#kode_cabang option:selected").val(),
            kode_area     : $("#kode_area option:selected").val()
        }
        
        if (requestBody.kode_area == "" && requestBody.kode_cabang == "") {
            bootbox.alert("Salah satu dari Area atau Cabang tidak boleh kosong!");
            $('.buttonCari').show();
            $('.buttonProses').hide();
        } else {
            $.ajax({ 
                type : 'post',
                url : 'Ao_controller/get_data_tracking_order',
                data :  requestBody,
                cache: false,
                    success : function(res) {

                        $('.buttonCari').show();
                        $('.buttonProses').hide();

                        var response = JSON.parse(res);
                        var data = response.data_tracking_order;
                        console.log(data);

                        var html = [];
                        var no   = 0;
                        
                        if(data.length === 0 ){
                            var tr =[
                            '<tr valign="midle">',
                            '<td colspan="8" style="text-align: center">Tidak ada data</td>',
                            '</tr>'
                            ].join('\n');
                            $('#data_tracking').html(tr);

                            return;
                        }

                        $.each(data,function(index,item){
                            no++;

                            if (item.nama_ca == null) {
                                var nama_ca = '<td>-</td>';
                            } else {
                                var nama_ca = '<td>'+ item.nama_ca +'</td>';
                            }

                            if (item.cancel_debitur == 2) {
                                var status = '<td style="background-color: #dc4836; text-align: center; vertical-align: middle">Cancel By Debitur</td>';
                            } else {
                                if (item.id_trans_so != null && item.id_verif != null && item.id_caa == null) {
                                    var status = '<td style="text-align: center; vertical-align: middle">Proses Pengajuan CAA</td>';
                                } else if (item.id_trans_so == null) {
                                    var status = '<td style="text-align: center; vertical-align: middle">Proses Memorandum CA</td>';
                                } else if (item.plafon_kredit == 0) {
                                    var status = '<td style="background-color: #dc4836; text-align: center; vertical-align: middle">Not Recommend CA</td>';
                                } else if (item.id_trans_so != null && item.id_verif == null) {
                                    var status = '<td style="text-align: center; vertical-align: middle">Proses Verifikasi</td>';
                                } else if (item.id_caa != null) {
                                    var status = '<td style="background-color: #00d807; text-align: center; vertical-align: middle">Sudah Pengajuan CAA</td>';
                                } else if (item.status_pending != null && item.id_trans_so == null) {
                                    var status = '<td style="background-color: #f1f1f1; text-align: center; vertical-align: middle">Pending</td>';
                                } else if (item.status_return != null && item.id_trans_so == null) {
                                    var status = '<td style="background-color: #f1f1f1; text-align: center; vertical-align: middle">Return</td>';
                                } else {
                                    var status = '<td style="text-align: center; vertical-align: middle">Status Lain</td>';
                                }
                            }

                            var tr = [
                            '<tr>',
                                '<td style="text-align: center">'+ no +'</td>',
                                '<td>'+ item.tgl_transaksi +'</td>',
                                '<td>'+ item.nomor_so +'</td>',
                                '<td>'+ item.nama_debitur +'</td>',
                                '<td>'+ item.nama_cabang +'</td>',
                                nama_ca,
                                status,
                            '</tr>'
                            ].join('\n');
                            html.push(tr);
                        });

                        $('#data_tracking').html(html);
                        $('#table_tracking').DataTable({
                            "processing": true,
                            "destroy": true,
                            "order": [],

                            "paging": true,
                            "retrieve": true,
                            "lengthChange": true,
                            "searching": true,
                            "ordering": true,
                            "info": true,
                            "autoWidth": false,
                            "processing": true,

                        });
                    }
            });
        }
    }

    function export_to_excel() {
        var bulan = $("#bulan").val();
        var tahun = $("#tahun").val();
        var kode_cabang = $("#kode_cabang").val();
        var kode_area = $("#kode_area").val();

        if (kode_area == "" && kode_cabang == "") {
            bootbox.alert("Salah satu dari Area atau Cabang tidak boleh kosong!");
        } else {
            window.open('dashboard_tracking_order/export_to_excel/'+bulan+'/'+tahun+'/'+kode_area+'/'+kode_cabang);
        }

    }
</script>