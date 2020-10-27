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
                var lendingWaitingResponse = JSON.parse(res).lendingWaiting["COUNT(trans_so)"];
                var chart_titleResponse = JSON.parse(res).chart_title;

                //===============================================================================================

                Highcharts.chart('funnellendingChart', {
                    chart: {
                        type: 'bar',
                        height: '45%'
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
                        data: [Number(leadsResponse), 3, 4, 7, 2]
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
                    }]
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