<script src="<?php echo base_url('assets/plugins/code/highcharts.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/highcharts-3d.js') ?>"></script>

<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard Lending</h1>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard Lending</li>
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
                <div class="col-md-2">
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
                            $this->db->group_by('view_kode_kantor.kode_area');
                            $kode_area = $this->db->get('view_kode_kantor')->result(); 
                        ?>
                        <select id="kode_area" class="form-control" name="kode_area">
                            <option value="" selected="selected">- Pilih Area -</option>
                            <option value="*">KONSOLIDASI</option>
                            <?php foreach($kode_area as $r): ?>
                                <option value="<?php echo $r->kode_area; ?>"><?php echo $r->kode_area; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="kode_kantor">Pilih Cabang :</label>
                    <div class="form-group">
                        <?php
                            $kode_kantor = $this->db->get('view_kode_kantor')->result(); 
                        ?>
                        <select id="kode_kantor" class="form-control" name="kode_kantor">
                            <option value="" selected="selected">- Pilih Cabang -</option>
                            <option value="*">Konsolidasi</option>
                            <?php foreach($kode_kantor as $r): ?>
                                <option value="<?php echo $r->kode_kantor; ?>"><?php echo $r->nama_kantor; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-1">
                    <a style="width: 100%; margin-top: 35px" href="javascript:void(0)" title="" class="btn btn-primary btn-sm mr-3" onclick="filter_data_lending()">
                        Cari
                    </a>
                </div>
            </div>
            <div class="row justify-content-center" id="chartLending">
            </div>
        </div>
    </section>
</div>

<script>
    var areaSelect = document.getElementById("kode_area");
    areaSelect.addEventListener("change", function(e) {
        var selectedArea = $("#kode_area option:selected").val();

        if (selectedArea !== "") {
            $('#kode_kantor').prop('disabled', 'disabled');
        } else {
            $('#kode_kantor').prop('disabled', false);
        }
        
    });

    var cabangSelect = document.getElementById("kode_kantor");
    cabangSelect.addEventListener("change", (e) => {
        var selectedCabang = $("#kode_kantor option:selected").val();

        if (selectedCabang !== "") {
            $('#kode_area').prop('disabled', 'disabled');
        } else {
            $('#kode_area').prop('disabled', false);
        }
        
    });

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function filter_data_lending() {

        $("#chartLending").empty();

        var requestBody = {
            kode_kantor  : $("#kode_kantor option:selected").val(),
            kode_area    : $("#kode_area option:selected").val(),
            m            : $("#m option:selected").val(),
            y            : $("#y option:selected").val(),
        }

        if (requestBody.kode_area == "" && requestBody.kode_kantor == "") {
             alert("Salah satu dari Area atau Cabang tidak boleh kosong!");
        } else {
            $.ajax({ 
                type : 'post',
                url : 'Dashboard_lending_controller/get_data_lending_for_chart',
                data :  requestBody,
                cache: false,
                success : function(res) {
                    var lendingResponse = JSON.parse(res).lendingData[0];
                    var chart_titleResponse = JSON.parse(res).chart_title;
                    var allcabangResponse = JSON.parse(res).all_cabang_by_area;

                    if (allcabangResponse !== undefined) {
                        allcabangResponse.forEach(cabang => {
                            var requestBodyForLoop = {
                                kode_kantor  : cabang.kode_kantor,
                                m            : $("#m option:selected").val(),
                                y            : $("#y option:selected").val(),
                            }

                            $.ajax({ 
                                type : 'post',
                                url : 'Dashboard_lending_controller/get_data_lending_for_single_chart',
                                data :  requestBodyForLoop,
                                cache: false,
                                success : function(res) {
                                    var { lending_data_kantor, chart_title_kantor } = JSON.parse(res);

                                    $("#chartLending").append(`
                                        <div class="col-md-4">                
                                            <div id="kantor${cabang.kode_kantor}"></div><br>
                                        </div>
                                    `);

                                    Highcharts.chart(`kantor${cabang.kode_kantor}`, {
                                        chart: {
                                            plotBackgroundColor: null,
                                            plotBorderWidth: null,
                                            plotShadow: false,
                                            type: 'pie'
                                        },
                                        title: {
                                            text: chart_title_kantor
                                        },
                                        subtitle : {
                                            text: `Total NoA: ${Number(lending_data_kantor.jml_nasabah)} | Achieve: ${(Number(lending_data_kantor.realisasi) / Number(lending_data_kantor.target) * 100).toFixed(2)} % 
                                            Amount : Rp ${( numberWithCommas(Number(lending_data_kantor.realisasi)) )}`
                                        },
                                        accessibility: {
                                            point: {
                                                valueSuffix: '%'
                                            }
                                        },
                                        plotOptions: {
                                            pie: {
                                                allowPointSelect: true,
                                                cursor: 'pointer',
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                showInLegend: true
                                            }
                                        },
                                        series: [{
                                            name: 'Amount',
                                            colorByPoint: true,
                                            data: [{
                                                name: 'Lending',
                                                y: Number(lending_data_kantor.realisasi),
                                                sliced: true,
                                                selected: true,
                                            }, {
                                                name: 'Target',
                                                y: Number(lending_data_kantor.target)
                                            }]
                                        }]
                                    });
                                }
                            });
                        });           
                    } else {
                        $("#chartLending").append(`
                            <div class="col-md-4">                
                                <div id="lendingChart"></div><br>
                            </div>
                        `);
                        Highcharts.chart('lendingChart', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: chart_titleResponse
                            },
                            subtitle : {
                                text: `Total NoA: ${Number(lendingResponse.jml_nasabah)} | Achieve: ${(Number(lendingResponse.realisasi) / Number(lendingResponse.target) * 100).toFixed(2)} % 
                                Amount : Rp ${( numberWithCommas(Number(lendingResponse.realisasi)) )}`
                            },
                            accessibility: {
                                point: {
                                    valueSuffix: '%'
                                }
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: false
                                    },
                                    showInLegend: true
                                }
                            },
                            series: [{
                                name: 'Amount',
                                colorByPoint: true,
                                data: [{
                                    name: 'Lending',
                                    y: Number(lendingResponse.realisasi),
                                    sliced: true,
                                    selected: true,
                                }, {
                                    name: 'Target',
                                    y: Number(lendingResponse.target)
                                }]
                            }]
                        });
                    }

                }
            });
        }

    };
</script>
