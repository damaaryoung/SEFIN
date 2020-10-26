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
                <div class="col-md-4">
                    <label for="kode_area">Pilih Area :</label>
                    <div class="form-group">
                        <?php
                            $kode_area = $this->db->get('mk_area')->result(); 
                        ?>
                        <select id="kode_area" class="form-control" name="kode_area">
                            <option disabled value="" selected="selected">- Pilih Area -</option>
                            <option value="">KONSOLIDASI</option>
                            <?php foreach($kode_area as $r): ?>
                                <option value="<?php echo $r->id; ?>"><?php echo $r->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <a style="width: 100%; margin-top: 35px" href="javascript:void(0)" title="" class="btn btn-primary btn-sm mr-3" onclick="filter_data_funnel_lending()">
                        Cari
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
            kode_area    : $("#kode_area option:selected").val(),
            m            : $("#m option:selected").val(),
            y            : $("#y option:selected").val(),
        }

        function getDataArray(leadsDataCabang, leadsResponse, prospekApproveDataCabang, prospekWaitingDataCabang, prospekRejectDataCabang, prospekApproveResponse, prospekWaitingResponse, prospekRejectResponse, aoApproveDataCabang, aoRejectDataCabang, status_aoDataCabang, aoApproveResponse, aoRejectResponse, status_aoResponse, caApproveDataCabang, caRejectDataCabang, caApproveResponse, caRejectResponse, caaApproveDataCabang, caaWaitingDataCabang, caaRejectDataCabang, caaApproveResponse, caaWaitingResponse, caaRejectResponse, ceksertipikatApproveDataCabang, ceksertipikatWaitingDataCabang, ceksertipikatApproveResponse, ceksertipikatWaitingResponse, lendingApproveDataCabang, lendingWaitingDataCabang, lendingApproveResponse, lendingWaitingResponse) {
            var arrayDataCabang = [];

            if (leadsDataCabang.length > 0) {
                var flag = true;

                for (let i = 0; i < leadsDataCabang.length; i++) {

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
                    var aoRejectDataCabangTemp = {};
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
					};

                    flag = false;
                    var status_aoDataCabangTemp = {};
                    status_aoDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            status_aoDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
						status_aoDataCabangTemp = {
							total_per_cabang: 0,
							nama_cabang: leadsDataCabang[i].nama_cabang
						}
					};

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
                    var caRejectDataCabangTemp = {};
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
					};

                    // flag = false;
                    // var caWaitingDataCabangTemp = {};
                    // caWaitingDataCabang.forEach(dataCabang => {
                    //     if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                    //         caWaitingDataCabangTemp = dataCabang;
                    //         flag = true;
                    //     }
                    // });
                    // if (!flag) {
					// 	caWaitingDataCabangTemp = {
					// 		total_per_cabang: 0,
					// 		nama_cabang: leadsDataCabang[i].nama_cabang
					// 	}
					// };

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
                    var caaRejectDataCabangTemp = {};
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
					};

                    flag = false;
                    var caaWaitingDataCabangTemp = {};
                    caaWaitingDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            caaWaitingDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
						caaWaitingDataCabangTemp = {
							total_per_cabang: 0,
							nama_cabang: leadsDataCabang[i].nama_cabang
						}
					};

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
                    var ceksertipikatWaitingDataCabangTemp = {};
                    ceksertipikatWaitingDataCabang.forEach(dataCabang => {
                        if (dataCabang.nama_cabang == leadsDataCabang[i].nama_cabang) {
                            ceksertipikatWaitingDataCabangTemp = dataCabang;
                            flag = true;
                        }
                    });
                    if (!flag) {
						ceksertipikatWaitingDataCabangTemp = {
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
                        name: leadsDataCabang[i].nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [Number(leadsDataCabang[i].total_per_cabang), 0, 0, 0, 0, 0, 0]
                        
                    };
					
					var barProspekRejectDataCabang = {
                        stack: prospekRejectDataCabangTemp.nama_cabang,
                        name: prospekRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject Cek CC',
                        color: "#e03f33",
                        data: [0, Number(prospekRejectDataCabangTemp.total_per_cabang), 0, 0, 0, 0, 0]
                    };
					
					var barProspekWaitingDataCabang = {
                        stack: prospekWaitingDataCabangTemp.nama_cabang,
                        name: prospekWaitingDataCabangTemp.nama_cabang,
                        linkedTo: 'Waiting Cek CC',
                        color: "#f7de7d",
                        data: [0, Number(prospekWaitingDataCabangTemp.total_per_cabang), 0, 0, 0, 0, 0]
                    };
					
					var barProspekApproveDataCabang = {
                        stack: prospekApproveDataCabangTemp.nama_cabang,
                        name: prospekApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, Number(prospekApproveDataCabangTemp.total_per_cabang), 0, 0, 0, 0, 0]
                    };

                    var barAoRejectDataCabang = {
                        stack: aoRejectDataCabangTemp.nama_cabang,
                        name: aoRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject AO',
                        color: "#e03f33",
                        data: [0, 0, Number(aoRejectDataCabangTemp.total_per_cabang), 0, 0, 0, 0]
                    };
					
					var barStatus_aoDataCabang = {
                        stack: status_aoDataCabangTemp.nama_cabang,
                        name: status_aoDataCabangTemp.nama_cabang,
                        linkedTo: 'No Status AO',
                        color: "#f7de7d",
                        data: [0, 0, Number(status_aoDataCabangTemp.total_per_cabang), 0, 0, 0, 0]
                    };
					
					var barAoApproveDataCabang = {
                        stack: aoApproveDataCabangTemp.nama_cabang,
                        name: aoApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, Number(aoApproveDataCabangTemp.total_per_cabang), 0, 0, 0, 0]
                    };

                    var barCaRejectDataCabang = {
                        stack: caRejectDataCabangTemp.nama_cabang,
                        name: caRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject',
                        color: "#e03f33",
                        data: [0, 0, 0, Number(caRejectDataCabangTemp.total_per_cabang), 0, 0, 0]
                    };
					
					// var barCaWaitingDataCabang = {
                    //     stack: caWaitingDataCabangTemp.nama_cabang,
                    //     name: caWaitingDataCabangTemp.nama_cabang,
                    //     linkedTo: 'Waiting',
                    //     color: "#f7de7d",
                    //     data: [0, 0, 0, Number(caWaitingDataCabangTemp.total_per_cabang),0, 0, 0]
                    // };
					
					var barCaApproveDataCabang = {
                        stack: caApproveDataCabangTemp.nama_cabang,
                        name: caApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, Number(caApproveDataCabangTemp.total_per_cabang), 0, 0, 0]
                    };

                    var barCaaRejectDataCabang = {
                        stack: caaRejectDataCabangTemp.nama_cabang,
                        name: caaRejectDataCabangTemp.nama_cabang,
                        linkedTo: 'Reject',
                        color: "#e03f33",
                        data: [0, 0, 0, 0, Number(caaRejectDataCabangTemp.total_per_cabang), 0, 0]
                    };
					
					var barCaaWaitingDataCabang = {
                        stack: caaWaitingDataCabangTemp.nama_cabang,
                        name: caaWaitingDataCabangTemp.nama_cabang,
                        linkedTo: 'Waiting',
                        color: "#f7de7d",
                        data: [0, 0, 0, 0,Number(caaWaitingDataCabangTemp.total_per_cabang), 0, 0]
                    };
					
					var barCaaApproveDataCabang = {
                        stack: caaApproveDataCabangTemp.nama_cabang,
                        name: caaApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, 0, Number(caaApproveDataCabangTemp.total_per_cabang), 0, 0]
                    };

                    var barCekSertipikatWaitingDataCabang = {
                        stack: ceksertipikatWaitingDataCabangTemp.nama_cabang,
                        name: ceksertipikatWaitingDataCabangTemp.nama_cabang,
                        linkedTo: 'Waiting',
                        color: "#f7de7d",
                        data: [0, 0, 0, 0, 0, Number(ceksertipikatWaitingDataCabangTemp.total_per_cabang), 0]
                    };
					
					var barCekSertipikatApproveDataCabang = {
                        stack: ceksertipikatApproveDataCabangTemp.nama_cabang,
                        name: ceksertipikatApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, 0, 0, Number(ceksertipikatApproveDataCabangTemp.total_per_cabang), 0]
                    };

                    var barLendingWaitingDataCabang = {
                        stack: lendingWaitingDataCabangTemp.nama_cabang,
                        name: lendingWaitingDataCabangTemp.nama_cabang,
                        linkedTo: 'Waiting',
                        color: "#f7de7d",
                        data: [0, 0, 0, 0, 0, 0, Number(lendingWaitingDataCabangTemp.total_per_cabang)]
                    };
					
					var barLendingApproveDataCabang = {
                        stack: lendingApproveDataCabangTemp.nama_cabang,
                        name: lendingApproveDataCabangTemp.nama_cabang,
                        linkedTo: 'Approved',
                        color: "#007bff",
                        data: [0, 0, 0, 0, 0, 0, Number(lendingApproveDataCabangTemp.total_per_cabang)]
                    };
					
                    arrayDataCabang.push(barLeadsDataCabang);
					arrayDataCabang.push(barProspekRejectDataCabang);
					arrayDataCabang.push(barProspekWaitingDataCabang);
					arrayDataCabang.push(barProspekApproveDataCabang);
                    arrayDataCabang.push(barAoRejectDataCabang);
					arrayDataCabang.push(barAoApproveDataCabang);
                    arrayDaraCabang.push(barStatus_aoDataCabang);
                    arrayDataCabang.push(barCaRejectDataCabang);
					// arrayDataCabang.push(barCaWaitingDataCabang);
					arrayDataCabang.push(barCaApproveDataCabang);
                    arrayDataCabang.push(barCaaRejectDataCabang);
					arrayDataCabang.push(barCaaWaitingDataCabang);
					arrayDataCabang.push(barCaaApproveDataCabang);
                    arrayDataCabang.push(barLendingWaitingDataCabang);
					arrayDataCabang.push(barLendingApproveDataCabang);
                    arrayDataCabang.push(barCekSertipikatWaitingDataCabang);
					arrayDataCabang.push(barCekSertipikatApproveDataCabang);
                }
            } else {
                arrayDataCabang.push(
                {
                    name: 'Konsolidasi',
                    linkedTo: 'Reject',
                    color: "#e03f33",
                    data: [0, Number(prospekRejectResponse), Number(aoRejectResponse), Number(caRejectResponse), Number(caaRejectResponse), 0, 0]
                    
                },
                {
                    name: 'Konsolidasi',
                    linkedTo: 'Waiting',
                    color: "#f7de7d",
                    data: [0, Number(prospekWaitingResponse), Number(status_aoResponse), 0, Number(caaWaitingResponse), Number(ceksertipikatWaitingResponse), Number(lendingWaitingResponse)]  
                },
                {   
                    name: 'Konsolidasi',
                    linkedTo: 'Approved',
                    color: "#007bff",
                    data: [Number(leadsResponse), Number(prospekApproveResponse), Number(aoApproveResponse), Number(caApproveResponse), Number(caaApproveResponse), Number(ceksertipikatApproveResponse), Number(lendingApproveResponse)]
                })
            }

            return arrayDataCabang;

        }

        $.ajax({ 
            type : 'post',
            url : 'Dashboard_funnel_lending_controller/get_data_lending_for_chart',
            data :  requestBody,
            cache: false,
            success : function(res) {
                var leadsResponse = JSON.parse(res).leadsData["COUNT(id)"];
                var prospekApproveResponse = JSON.parse(res).prospekApprove["COUNT(id)"];
                var prospekWaitingResponse = JSON.parse(res).prospekWaiting["COUNT(id)"];
                var prospekRejectResponse = JSON.parse(res).prospekReject["COUNT(id)"];
                var aoApproveResponse = JSON.parse(res).aoApprove["COUNT(a.id)"];
                var aoRejectResponse = JSON.parse(res).aoReject["COUNT(a.id)"];
                var status_aoResponse = JSON.parse(res).status_ao;
                var caApproveResponse = JSON.parse(res).caApprove["COUNT(a.id_trans_so)"];
                // var caWaitingResponse = JSON.parse(res).caWaiting["COUNT(a.id_trans_so)"];
                var caRejectResponse = JSON.parse(res).caReject["COUNT(a.id_trans_so)"];
                var caaApproveResponse = JSON.parse(res).caaApprove["COUNT(id_trans_so)"];
                var caaWaitingResponse = JSON.parse(res).caaWaiting["COUNT(id_trans_so)"];
                var caaRejectResponse = JSON.parse(res).caaReject["COUNT(id_trans_so)"];
                var ceksertipikatApproveResponse = JSON.parse(res).ceksertipikatApprove["COUNT(a.id)"];
                var ceksertipikatWaitingResponse = JSON.parse(res).ceksertipikatWaiting["COUNT(a.id)"];
                var lendingApproveResponse = JSON.parse(res).lendingApprove["COUNT(trans_so)"];
                var lendingWaitingResponse = JSON.parse(res).lendingWaiting["COUNT(trans_so)"];

                //===============================================================================================

                var leadsDataCabang = JSON.parse(res).leadsDataCabang;
                var prospekApproveDataCabang = JSON.parse(res).prospekApproveDataCabang;
                var prospekWaitingDataCabang = JSON.parse(res).prospekWaitingDataCabang;
                var prospekRejectDataCabang = JSON.parse(res).prospekRejectDataCabang;
                var aoApproveDataCabang = JSON.parse(res).aoApproveDataCabang;
                var aoRejectDataCabang = JSON.parse(res).aoRejectDataCabang;
                var status_aoDataCabang = JSON.parse(res).status_aoDataCabang;
                var caApproveDataCabang = JSON.parse(res).caApproveDataCabang;
                // var caWaitingDataCabang = JSON.parse(res).caWaitingDataCabang;
                var caRejectDataCabang = JSON.parse(res).caRejectDataCabang;
                var caaApproveDataCabang = JSON.parse(res).caaApproveDataCabang;
                var caaWaitingDataCabang = JSON.parse(res).caaWaitingDataCabang;
                var caaRejectDataCabang = JSON.parse(res).caaRejectDataCabang;
                var ceksertipikatApproveDataCabang = JSON.parse(res).ceksertipikatApproveDataCabang;
                var ceksertipikatWaitingDataCabang = JSON.parse(res).ceksertipikatWaitingDataCabang;
                var lendingApproveDataCabang = JSON.parse(res).lendingApproveDataCabang;
                var lendingWaitingDataCabang = JSON.parse(res).lendingWaitingDataCabang;
                               
                Highcharts.chart('funnellendingChart', {
                    chart: {
                        type: 'bar',
                        height: '80%'
                    },
                    title: {
                        text: 'Funnel Lending'
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
                            stacking: 'normal'
                        }
                    },
                    series: [{
                        name: 'Approved',
                        id: 'Approved',
                        color: "#007bff",
                    }, {
                        name: 'Waiting',
                        id: 'Waiting',
                        color: "#f7de7d",
                    }, {
                        name: 'Waiting Cek CC',
                        id: 'Waiting Cek CC',
                        color: "#f7de7d",
                    }, {
                        name: 'Reject CC',
                        id: 'Reject CC',
                        color: "#e03f33",
                    }, {
                        name: 'Reject AO',
                        id: 'Reject AO',
                        color: "#e03f33",
                    }, {
                        name: 'No Status AO',
                        id: 'No Status AO',
                        color: "#f7de7d",
                    }, {
                        name: 'Proses Verif CA',
                        id: 'Proses Verif CA',
                        color: "#f7de7d",
                    }, {
                        name: 'Reject CA',
                        id: 'Reject CA',
                        color: "#e03f33",
                    }, {
                        name: 'Waiting Approve',
                        id: 'Waiting Approve',
                        color: "#f7de7d",
                    }, {
                        name: 'Reject CAA',
                        id: 'Reject CAA',
                        color: "#e03f33",
                    }, {
                        name: 'Waiting SHM in',
                        id: 'Waiting SHM in',
                        color: "#f7de7d",
                    }, {
                        name: 'Waiting Hasil Cek',
                        id: 'Waiting Hasil Cek',
                        color: "#f7de7d",
                    }, {
                        name: 'Reject',
                        id: 'Reject',
                        color: "#e03f33",
                    }, ...getDataArray(leadsDataCabang, leadsResponse, prospekApproveDataCabang, prospekWaitingDataCabang, prospekRejectDataCabang, prospekApproveResponse, prospekWaitingResponse, prospekRejectResponse, aoApproveDataCabang, aoRejectDataCabang, status_aoDataCabang, aoApproveResponse, aoWaitingResponse, aoRejectResponse, caApproveDataCabang, caRejectDataCabang, caApproveResponse, caRejectResponse, caaApproveDataCabang, caaWaitingDataCabang, caaRejectDataCabang, caaApproveResponse, caaWaitingResponse, caaRejectResponse, ceksertipikatApproveDataCabang, ceksertipikatWaitingDataCabang, ceksertipikatApproveResponse, ceksertipikatWaitingResponse, lendingApproveDataCabang, lendingWaitingDataCabang, lendingApproveResponse, lendingWaitingResponse)
                    ]
                });
            }
        });

    };
</script>