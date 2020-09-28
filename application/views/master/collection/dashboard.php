<style type="text/css">
    #container {
        height: 400px;
    }

    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
</style>

<script src="<?php echo base_url('assets/plugins/code/highcharts.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/highcharts-3d.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/modules/exporting.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/modules/drilldown.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/modules/export-data.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/code/modules/accessibility.js') ?>"></script>
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
                <form id="form_search_dashboard">
                    <div class="row">
                        <div class="form-group col-md-2">
                            <label>Bulan</label>
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
                            <label>Tahun</label>
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
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Cabang</label>
                            <select name="select_cabang" id="select_cabang" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>PIC / Kolektor</label>
                            <select name="select_pic" id="select_pic" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                            </select>
                        </div>
                        <div class="form-group" style="float:right;">
                            <a type="submit" id="submit" class="btn btn-success" style="color:#fff"><i class="fa fa-search" aria-hidden="true" style="color:#fff"></i>Search</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <div id="container">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <div id="container1">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <div id="container2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <div id="container3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <div id="container4">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <div id="container5">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

<script type="text/javascript">
    function rubah(angka) {
        var reverse = angka.toString().split('').reverse().join(''),
            ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }
    get_area = function(opts, id) {
        var url = '<?php echo $this->config->item('api_url'); ?>api/master/area_kerja';
        var data = opts;

        return $.ajax({
            type: 'GET',
            url: url,
            data: data,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    get_cabang = function(opts, id) {
        var url = '<?php echo $this->config->item('api_url'); ?>api/master/area_cabang';
        var data = opts;

        return $.ajax({
            type: 'GET',
            url: url,
            data: data,
            headers: {
                'Authorization': 'Bearer ' + localStorage.getItem('token')
            }
        });
    }

    get_area()
        .done(function(res) {
            var select = [];
            var select1 = '<option value="" >--Pilih--</option>';
            var select2 = '<option value="SEMUA AREA">SEMUA AREA</option>';
            $.each(res.data, function(i, e) {
                var option = [
                    '<option value="' + e.nama_area + '">' + e.nama_area + '</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_search_dashboard select[id=select_area]').html(select1 + select2 + select);
        })

    get_cabang()
        .done(function(res) {
            var select = [];
            var select1 = '<option value="">--Pilih--</option>';
            var select2 = '<option value="SEMUA CABANG">SEMUA CABANG</option>';
            $.each(res.data, function(i, e) {
                var option = [
                    '<option value="' + e.nama_cabang + '">' + e.nama_cabang + '</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_search_dashboard select[id=select_cabang]').html(select1 + select2 + select);
        })

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

    var assignment = Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'ASSIGNMENT'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Nilai'
            }

        },
        legend: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
        },

        series: [{
            name: "Assignment",
            colorByPoint: true,
            data: []
        }],

    });
    get_dashboard()
        .done(function(res) {
            console.log(res)
            // console.log(res);
            var data_assignment = [];
            var data_visit = [];

            $.each(res.data.assignment, function(i, e) {
                var jumlah = (rubah(e.jumlah));

                data_assignment.push({
                    name: e.nama + '  ' + jumlah,
                    y: parseInt(e.jumlah)
                });
            });
            assignment.series[0].setData(data_assignment);

            $.each(res.data.visit, function(i, e) {
                var jumlah = (rubah(e.jumlah));
                data_visit.push({
                    name: e.nama + '  ' + jumlah,
                    y: parseInt(e.jumlah)
                });
            });
            visit.series[0].setData(data_visit);
        })
        .fail(function(xhr) {
            console.log(xhr);
        })
</script>
<script type="text/javascript">
    var visit = Highcharts.chart('container1', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'VISIT'
        },

        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Nilai'
            }

        },
        legend: {
            enabled: false
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
        },

        series: [{
            name: "Assignment",
            colorByPoint: true,
            data: []
        }],

    });
</script>
<script type="text/javascript">
    Highcharts.chart('container2', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'INTERAKSI'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Firefox', 45.0],
                ['IE', 26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Safari', 8.5],
                ['Opera', 6.2],
                ['Others', 0.7]
            ]
        }]
    });
</script>
<script type="text/javascript">
    Highcharts.chart('container3', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'JANJI BAYAR'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Firefox', 45.0],
                ['IE', 26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Safari', 8.5],
                ['Opera', 6.2],
                ['Others', 0.7]
            ]
        }]
    });
</script>
<script type="text/javascript">
    Highcharts.chart('container4', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'BAYAR SESUAI JB'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Firefox', 45.0],
                ['IE', 26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Safari', 8.5],
                ['Opera', 6.2],
                ['Others', 0.7]
            ]
        }]
    });
</script>
<script type="text/javascript">
    Highcharts.chart('container5', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'BAYAR'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        credits: {
            enabled: false
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Firefox', 45.0],
                ['IE', 26.8],
                {
                    name: 'Chrome',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Safari', 8.5],
                ['Opera', 6.2],
                ['Others', 0.7]
            ]
        }]
    });
</script>