<script src="<?php echo base_url('assets/plugins/code/highcharts.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/highcharts-3d.js') ?>"></script>

<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Funnel Lending</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Funnel Lending</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <label for="m">Pilih Bulan :</label>
                    <select name="m" id="m" class="form-control">
                        <?php
                        $m = $this->input->post('m');
                        $y = $this->input->post('y');

                        if(empty($m && $y)) {
                            $m = date('m');
                            $y = date('Y');
                        }
                            if($m=='1'):
                                $mm = 'Januari';
                            elseif($m=='2'):
                                $mm = 'Februari';
                            elseif($m=='3'):
                                $mm = 'Maret';
                            elseif($m=='4'):
                                $mm = 'April';
                            elseif($m=='5'):
                                $mm = 'Mei';
                            elseif($m=='6'):
                                $mm = 'Juni';
                            elseif($m=='7'):
                                $mm = 'Juli';
                            elseif($m=='8'):
                                $mm = 'Agustus';
                            elseif($m=='9'):
                                $mm = 'September';
                            elseif($m=='10'):
                                $mm = 'Oktober';
                            elseif($m=='11'):
                                $mm = 'November';
                            elseif($m=='12'):
                                $mm = 'Desember';
                            endif;

                            if($m):
                                echo "<option value='$m'>$mm</option>";
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
                <div class="col-md-3">
                    <label for="y">Pilih Tahun :</label>
                    <select name="y" id="y" class="form-control">
                        <?php
                            if($y):
                                echo "<option value='$y'>$y</option>";
                            endif;
                        ?>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="kode_area">Pilih Area :</label>
                    <div class="form-group">
                        <?php
                            $kode_area = $this->db->get('mk_area')->result(); 
                        ?>
                        <select id="kode_area" class="form-control" name="kode_area">
                            <option value="">KONSOLIDASI</option>
                            <?php foreach($kode_area as $r): ?>
                                <option value="<?php echo $r->id; ?>"><?php echo $r->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <a style="width: 100%; margin-top: 35px" href="javascript:void(0)" title="" class="btn btn-primary btn-sm mr-3" onclick="filter_data_funnel_lending()">
                        Cari
                    </a>
                </div>
                <div class="col-md-2">
                    <a style="width: 100%; margin-top: 35px" href="javascript:void(0)" title="Export To Excel" class="btn btn-primary btn-sm mr-3" onclick="export_to_excel()">
                        <i class="fa fa-print"></i> Export to Excel
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">                
                    <div id="funnellendingChart">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    function filter_data_funnel_lending() {
        var requestBody = {
            kode_area   : $("#kode_area option:selected").val(),
            m           : $("#m option:selected").val(),
            y           : $("#y option:selected").val(),
        }

        function getDataArray(leadsDataCabang, leadsResponse, prospekApproveDataCabang, prospekApproveResponse, prospekWaitingDataCabang, prospekWaitingResponse, prospekRejectDataCabang, prospekRejectResponse, aoApproveDataCabang, aoApproveResponse, aoRejectDataCabang, aoRejectResponse, status_aoResponse, caApproveDataCabang, caApproveResponse, verif_caResponse, caRejectDataCabang, caRejectResponse, caaApproveDataCabang, caaApproveResponse, caaWaitingResponse, caaRejectDataCabang, caaRejectResponse, ceksertipikatApproveDataCabang, ceksertipikatApproveResponse, ceksertipikatWaitingResponse, lendingApproveDataCabang, lendingApproveResponse, lendingWaitingDataCabang, lendingWaitingResponse) {
            var arrayDataCabang = [];

            if(leadsDataCabang.length > 0) {
                var flag = true;
                for (let i=0; i<leadsDataCabang.length; i++) {
                    
                    if (leadsDataCabang[i] == null) {
                        leadsDataCabang[i] = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };

                    flag = false;
                    var prospekRejectDataCabangTemp = {}
                    prospekRejectDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            prospekRejectDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        prospekRejectDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    }

                    flag = false;
                    var prospekWaitingDataCabangTemp = {};
                    prospekWaitingDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            prospekWaitingDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        prospekWaitingDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };
                    
                    flag = false;
                    var prospekApproveDataCabangTemp = {};
                    prospekApproveDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            prospekApproveDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        prospekApproveDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };

                    flag = false;
                    var aoRejectDataCabangTemp = {}
                    aoRejectDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            aoRejectDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        aoRejectDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    }

                    flag = false;
                    var aoApproveDataCabangTemp = {};
                    aoApproveDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            aoApproveDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        aoApproveDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };

                    flag = false;
                    var caRejectDataCabangTemp = {}
                    caRejectDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            caRejectDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        caRejectDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    }

                    flag = false;
                    var caApproveDataCabangTemp = {};
                    caApproveDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            caApproveDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        caApproveDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };

                    flag = false;
                    var caaRejectDataCabangTemp = {}
                    caaRejectDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            caaRejectDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        caaRejectDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    }

                    flag = false;
                    var caaApproveDataCabangTemp = {};
                    caaApproveDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            caaApproveDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        caaApproveDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };

                    flag = false;
                    var ceksertipikatApproveDataCabangTemp = {};
                    ceksertipikatApproveDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            ceksertipikatApproveDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        ceksertipikatApproveDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };

                    flag = false;
                    var lendingWaitingDataCabangTemp = {};
                    lendingWaitingDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            lendingWaitingDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        lendingWaitingDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };

                    flag = false;
                    var lendingApproveDataCabangTemp = {};
                    lendingApproveDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            lendingApproveDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
                        lendingApproveDataCabangTemp = {
                            total_per_cabang: 0,
                            nama_cabang: leadsDataCabang[i].nama_cabang
                        }
                    };
                    
                    var barLeadsDataCabang = {
                        stack: leadsDataCabang[i].nama_cabang,
                        name: 'Approved - ' + leadsDataCabang[i].nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [Number(leadsDataCabang[i].total_per_cabang), 0, 0, 0, 0, 0, 0]
                        
                    };

                    var barProspekRejectDataCabang = {
                        stack: prospekRejectDataCabangTemp.nama_cabang,
                        name: 'Reject CC - ' + prospekRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject CC',
                        color: "#f33a3a",
                        data: [0, Number(prospekRejectDataCabangTemp.total_per_cabang), 0, 0, 0, 0, 0]
                    };
                    
                    var barProspekWaitingDataCabang = {
                        stack: prospekWaitingDataCabangTemp.nama_cabang,
                        name: 'Waiting Cek CC - ' + prospekWaitingDataCabangTemp.nama_cabang,
                        linkedTo: 'Waiting Cek CC',
                        color: "#fff199",
                        data: [0, Number(prospekWaitingDataCabangTemp.total_per_cabang), 0, 0, 0, 0, 0]
                    };
                    
                    var barProspekApproveDataCabang = {
                        stack: prospekApproveDataCabangTemp.nama_cabang,
                        name: 'Approved - ' + prospekApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, Number(prospekApproveDataCabangTemp.total_per_cabang), 0, 0, 0, 0, 0]
                    };

                    var barStatus_aoDataCabang = {
                        stack: leadsDataCabang[i].nama_cabang,
                        name: 'No Status AO - ' + leadsDataCabang[i].nama_cabang,
                        linkedTo: 'No Status AO',
                        color: "#f0e68c",
                        data: [0, 0, Number(prospekApproveDataCabangTemp.total_per_cabang)-(Number(aoApproveDataCabangTemp.total_per_cabang)+Number(aoRejectDataCabangTemp.total_per_cabang)), 0, 0, 0, 0]
                    };
                    
                    var barAoRejectDataCabang = {
                        stack: aoRejectDataCabangTemp.nama_cabang,
                        name: 'Reject AO - ' + aoRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject AO',
                        color: "#ff6666",
                        data: [0, 0, Number(aoRejectDataCabangTemp.total_per_cabang), 0, 0, 0, 0]
                    };

                    var barAoApproveDataCabang = {
                        stack: aoApproveDataCabangTemp.nama_cabang,
                        name: 'Approved - ' + aoApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, Number(aoApproveDataCabangTemp.total_per_cabang), 0, 0, 0, 0]
                    };

                    var barCaRejectDataCabang = {
                        stack: caRejectDataCabangTemp.nama_cabang,
                        name: 'Reject CA - ' + caRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject CA',
                        color: "#cd4c4c",
                        data: [0, 0, 0, Number(caRejectDataCabangTemp.total_per_cabang), 0, 0, 0]
                    };

                    var barVerif_caDataCabang = {
                        stack: leadsDataCabang[i].nama_cabang,
                        name: 'Proses Verif CA - ' + leadsDataCabang[i].nama_cabang,
                        linkedTo: 'Proses Verif CA',
                        color: "#ffe4b5",
                        data: [0, 0, 0, Number(aoApproveDataCabangTemp.total_per_cabang)-(Number(caApproveDataCabangTemp.total_per_cabang)+Number(caRejectDataCabangTemp.total_per_cabang)), 0, 0, 0]
                    };

                    var barCaApproveDataCabang = {
                        stack: caApproveDataCabangTemp.nama_cabang,
                        name: 'Approved - ' + caApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, Number(caApproveDataCabangTemp.total_per_cabang), 0, 0, 0]
                    };

                    var barCaaRejectDataCabang = {
                        stack: caaRejectDataCabangTemp.nama_cabang,
                        name: 'Reject CAA - ' + caaRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject CAA',
                        color: "#e47272",
                        data: [0, 0, 0, 0, Number(caaRejectDataCabangTemp.total_per_cabang), 0, 0]
                    };

                    var barCaaWaitingDataCabang = {
                        stack: leadsDataCabang[i].nama_cabang,
                        name: 'Waiting Approve CAA - ' + leadsDataCabang[i].nama_cabang,
                        linkedTo: 'Waiting Approve CAA',
                        color: "#eedc82",
                        data: [0, 0, 0, 0, (Number(caApproveDataCabangTemp.total_per_cabang)+Number(caRejectDataCabangTemp.total_per_cabang))-(Number(caaApproveDataCabangTemp.total_per_cabang)+Number(caaRejectDataCabangTemp.total_per_cabang)), 0, 0]
                    };

                    var barCaaApproveDataCabang = {
                        stack: caaApproveDataCabangTemp.nama_cabang,
                        name: 'Approved - ' + caaApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, 0, Number(caaApproveDataCabangTemp.total_per_cabang), 0, 0]
                    };

                    var barCeksertipikatWaitingDataCabang = {
                        stack: leadsDataCabang[i].nama_cabang,
                        name: 'Waiting SHM in - ' + leadsDataCabang[i].nama_cabang,
                        linkedTo: 'Waiting SHM in',
                        color: "#fff3a7",
                        data: [0, 0, 0, 0, 0, Number(caaApproveDataCabangTemp.total_per_cabang) - Number(ceksertipikatApproveDataCabangTemp.total_per_cabang), 0]
                    };

                    var barCeksertipikatApproveDataCabang = {
                        stack: ceksertipikatApproveDataCabangTemp.nama_cabang,
                        name: 'Approved - ' + ceksertipikatApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, 0, 0, Number(ceksertipikatApproveDataCabangTemp.total_per_cabang), 0]
                    };

                    var barLendingWaitingDataCabang = {
                        stack: leadsDataCabang[i].nama_cabang,
                        name: 'Waiting Hasil Cek - ' + leadsDataCabang[i].nama_cabang,
                        linkedTo: 'Waiting Hasil Cek',
                        color: "#f9ea8c",
                        data: [0, 0, 0, 0, 0, 0, Number(lendingWaitingDataCabangTemp.total_per_cabang)]
                    };

                    var barLendingApproveDataCabang = {
                        stack: lendingApproveDataCabangTemp.nama_cabang,
                        name: 'Approved - ' + lendingApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, 0, 0, 0, Number(lendingApproveDataCabangTemp.total_per_cabang)]
                    };

                    arrayDataCabang.push(barLeadsDataCabang);
                    arrayDataCabang.push(barProspekRejectDataCabang);
                    arrayDataCabang.push(barProspekWaitingDataCabang);
                    arrayDataCabang.push(barProspekApproveDataCabang);
                    arrayDataCabang.push(barStatus_aoDataCabang);
                    arrayDataCabang.push(barAoRejectDataCabang);
                    arrayDataCabang.push(barAoApproveDataCabang);
                    arrayDataCabang.push(barCaRejectDataCabang);
                    arrayDataCabang.push(barVerif_caDataCabang);
                    arrayDataCabang.push(barCaApproveDataCabang);
                    arrayDataCabang.push(barCaaRejectDataCabang);
                    arrayDataCabang.push(barCaaWaitingDataCabang);
                    arrayDataCabang.push(barCaaApproveDataCabang);
                    arrayDataCabang.push(barCeksertipikatWaitingDataCabang);
                    arrayDataCabang.push(barCeksertipikatApproveDataCabang);
                    arrayDataCabang.push(barLendingWaitingDataCabang);
                    arrayDataCabang.push(barLendingApproveDataCabang);
                }
            } else {
                arrayDataCabang.push(
                {
                    name: 'Reject CC - KONSOLIDASI',
                    linkedTo: 'Reject CC',
                    color: "#f33a3a",
                    data: [0, Number(prospekRejectResponse), 0, 0, 0, 0, 0]
                },
                {
                    name: 'Waiting Cek CC - KONSOLIDASI',
                    linkedTo: 'Waiting Cek CC',
                    color: "#fff199",
                    data: [0, Number(prospekWaitingResponse), 0, 0, 0, 0, 0]
                },
                {
                    name: 'No Status AO - KONSOLIDASI',
                    linkedTo: 'No Status AO',
                    color: "#f0e68c",
                    data: [0, 0, Number(status_aoResponse), 0, 0, 0, 0]
                },
                {
                    name: 'Reject AO - KONSOLIDASI',
                    linkedTo: 'Reject AO',
                    color: "#ff6666",
                    data: [0, 0, Number(aoRejectResponse), 0, 0, 0, 0]
                },
                {
                    name: 'Reject CA - KONSOLIDASI',
                    linkedTo: 'Reject CA',
                    color: "#cd4c4c",
                    data: [0, 0, 0, Number(caRejectResponse), 0, 0, 0]
                },
                {
                    name: 'Proses Verif CA - KONSOLIDASI',
                    linkedTo: 'Proses Verif CA',
                    color: "#ffe4b5",
                    data: [0, 0, 0, Number(verif_caResponse), 0, 0, 0]
                },
                {
                    name: 'Reject CAA - KONSOLIDASI',
                    linkedTo: 'Reject CAA',
                    color: "#e47272",
                    data: [0, 0, 0, 0,  Number(caaRejectResponse), 0, 0]
                },
                {
                    name: 'Waiting Approve CAA - KONSOLIDASI',
                    linkedTo: 'Waiting Approve CAA',
                    color: "#eedc82",
                    data: [0, 0, 0, 0, ((Number(caApproveResponse) + Number(caRejectResponse)) - (Number(caaApproveResponse) + Number(caaRejectResponse))), 0, 0]
                },
                {
                    name: 'Waiting SHM in - KONSOLIDASI',
                    linkedTo: 'Waiting SHM in',
                    color: "#fff3a7",
                    data: [0, 0, 0, 0, 0, Number(caaApproveResponse) - Number(ceksertipikatApproveResponse), 0]
                },
                {
                    name: 'Waiting Hasil Cek - KONSOLIDASI',
                    linkedTo: 'Waiting Hasil Cek',
                    color: "#f9ea8c",
                    data: [0, 0, 0, 0, 0, 0, Number(lendingWaitingResponse)]
                },
                {
                    name: 'Approved - KONSOLIDASI',
                    linkedTo: 'Approved',
                    color: "#007bff",
                    data: [Number(leadsResponse), Number(prospekApproveResponse), Number(aoApproveResponse), Number(caApproveResponse), Number(caaApproveResponse), Number(ceksertipikatApproveResponse), Number(lendingApproveResponse)]
                })
            }
            return arrayDataCabang;
        }

        $.ajax({
            type: 'post',
            url: 'Dashboard_funnel_lending_controller/get_data_lending_for_chart',
            data: requestBody,
            cache: false,
            success: function(res) {
                var leadsResponse = JSON.parse(res).leadsData["COUNT(id)"];
                var prospekApproveResponse = JSON.parse(res).prospekApprove["COUNT(id)"];
                var prospekWaitingResponse = JSON.parse(res).prospekWaiting["COUNT(id)"];
                var prospekRejectResponse = JSON.parse(res).prospekReject["COUNT(id)"];
                var aoApproveResponse = JSON.parse(res).aoApprove["COUNT(a.id)"];
                var aoRejectResponse = JSON.parse(res).aoReject["COUNT(a.id)"];
                var status_aoResponse = JSON.parse(res).status_ao;
                var caApproveResponse = JSON.parse(res).caApprove["COUNT(a.id_trans_so)"];
                var verif_caResponse = JSON.parse(res).verif_ca;
                var caRejectResponse = JSON.parse(res).caReject["COUNT(a.id_trans_so)"];
                var caaApproveResponse = JSON.parse(res).caaApprove["COUNT(id_trans_so)"];
                var caaWaitingResponse = JSON.parse(res).caaWaiting;
                var caaRejectResponse = JSON.parse(res).caaReject["COUNT(id_trans_so)"];
                var ceksertipikatApproveResponse = JSON.parse(res).ceksertipikatApprove["COUNT(a.id)"];
                var ceksertipikatWaitingResponse = JSON.parse(res).ceksertipikatWaiting;
                var lendingApproveResponse = JSON.parse(res).lendingApprove["COUNT(trans_so)"];
                var lendingWaitingResponse = JSON.parse(res).lendingWaiting;
                var chart_titleResponse = JSON.parse(res).chart_title;

                //===============================================================================================

                var leadsDataCabang = JSON.parse(res).leadsDataCabang;
                var prospekApproveDataCabang = JSON.parse(res).prospekApproveDataCabang;
                var prospekWaitingDataCabang = JSON.parse(res).prospekWaitingDataCabang;
                var prospekRejectDataCabang = JSON.parse(res).prospekRejectDataCabang;
                var aoApproveDataCabang = JSON.parse(res).aoApproveDataCabang;
                var aoRejectDataCabang = JSON.parse(res).aoRejectDataCabang;
                var caApproveDataCabang = JSON.parse(res).caApproveDataCabang;
                var caRejectDataCabang = JSON.parse(res).caRejectDataCabang;
                var caaApproveDataCabang = JSON.parse(res).caaApproveDataCabang;
                var caaRejectDataCabang = JSON.parse(res).caaRejectDataCabang;
                var ceksertipikatApproveDataCabang = JSON.parse(res).ceksertipikatApproveDataCabang;
                var lendingApproveDataCabang = JSON.parse(res).lendingApproveDataCabang;
                var lendingWaitingDataCabang = JSON.parse(res).lendingWaitingDataCabang;

                Highcharts.chart('funnellendingChart', {
                    chart: {
                        type: 'bar',
                        height: '45%',
                    },
                    title: {
                        text: chart_titleResponse
                    },
                    xAxis: {
                        categories: ['Leads', 'Prospek', 'Rekomendasi AO', 'Rekomendasi CA', 'Commite CAA', 'Cek Sertipikat', 'Lending']
                    },
                    yAxis: {
                        title: {
                            text: 'Total NoA'
                        }
                    },
                    plotOptions: {
                        series: {
                            stacking: 'normal',
                            dataLabels: {
                                enabled: true
                            }
                        }
                    },
                    series: [{
                        name: 'Approved',
                        id: 'Approved',
                        color: "#007bff",
                    }, {
                        name: 'Waiting Cek CC',
                        id: 'Waiting Cek CC',
                        color: "#fff199",
                    }, {
                        name: 'Reject CC',
                        id: 'Reject CC',
                        color: "#f33a3a",
                    }, {
                        name: 'Reject AO',
                        id: 'Reject AO',
                        color: "#ff6666",
                    }, 
                    {
                        name: 'No Status AO',
                        id: 'No Status AO',
                        color: "#f0e68c",
                    }, {
                        name: 'Proses Verif CA',
                        id: 'Proses Verif CA',
                        color: "#ffe4b5",
                    }, {
                        name: 'Reject CA',
                        id: 'Reject CA',
                        color: "#cd4c4c",
                    },
                    {
                        name: 'Waiting Approve CAA',
                        id: 'Waiting Approve CAA',
                        color: "#eedc82",
                    }, {
                        name: 'Reject CAA',
                        id: 'Reject CAA',
                        color: "#e47272",
                    }, {
                        name: 'Waiting SHM in',
                        id: 'Waiting SHM in',
                        color: "#fff3a7",
                    }, {
                        name: 'Waiting Hasil Cek',
                        id: 'Waiting Hasil Cek',
                        color: "#f9ea8c",
                    }, ...getDataArray(leadsDataCabang, leadsResponse, prospekApproveDataCabang, prospekApproveResponse, prospekWaitingDataCabang, prospekWaitingResponse, prospekRejectDataCabang, prospekRejectResponse, aoApproveDataCabang, aoApproveResponse, aoRejectDataCabang, aoRejectResponse, status_aoResponse, caApproveDataCabang, caApproveResponse, verif_caResponse, caRejectDataCabang, caRejectResponse, caaApproveDataCabang, caaApproveResponse, caaWaitingResponse, caaRejectDataCabang, caaRejectResponse, ceksertipikatApproveDataCabang, ceksertipikatApproveResponse, ceksertipikatWaitingResponse, lendingApproveDataCabang, lendingApproveResponse, lendingWaitingDataCabang, lendingWaitingResponse)]
                });
            }
        }); 
    };

    function export_to_excel() {
        var kode_area = $("#kode_area").val();
        var m = $("#m").val();
        var y = $("#y").val();

        window.open('dashboard_funnel_lending_controller/export_to_excel/'+m+'/'+y+'/'+kode_area);
    };

</script>