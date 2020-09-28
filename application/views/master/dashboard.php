<section class="content-header">
    <h1>
    Dashboard
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Index</a></li>
        <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-title">Dashboard</h3>
    </div>
    <form id="form-print-laporan" method="POST">
    <div class="box-body">
        <!-- Date -->
        <div class="form-group col-sm-1"></div>
        <div class="form-group col-sm-5">
            <label>Tanggal Awal</label>

            <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="tanggal_awal" name="tanggal_awal" data-date-format="dd-mm-yyyy">
            </div>
            <!-- /.input group -->
        </div>
        <!-- /.form group -->
        <!-- Date -->
        <div class="form-group col-sm-5">
            <label>Tanggal Akhir</label>

            <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right" id="tanggal_akhir" name="tanggal_akhir" data-date-format="dd-mm-yyyy">
            </div>
            <!-- /.input group -->
        </div>
        <!-- /.form group -->
        <div class="form-group col-sm-1"><button type="submit" class ="btn btn-primary go" style="margin-top:25px;"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> </button></div>
        
    </div>
    </form>
    <!-- /.box-body -->
</div>
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header">
         Total
        </div>
        <div class="box-body">
          <div id="canvas-holder">
            <div id="container" ></div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col (left) -->
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header">
        Total
        </div>
        <div class="box-body">
          <div class="chart">
            <div id="container2" ></div>
          </div>
        </div>
        <!-- /.box-body -->

      </div>
      <!-- /.box -->
    </div>
    <!-- /.col (right) -->
  </div>
  <!-- /.row -->

  <div class="row bawah">
    <div class="col-xs-12">
      <!-- interactive chart -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <i class="fa fa-bar-chart-o"></i>

          <h3 class="box-title">Interactive Area Chart</h3>
        </div>
        <div class="box-body">
          <div id="chart"></div>
        </div>
        <!-- /.box-body-->
      </div>
      <!-- /.box -->

    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</section>
<script type="text/javascript">
$(document).ready(function() {
    var get_poll;
    var get_poll_all;
    var load_poll;
    var load_data;
    var token = localStorage.getItem('token');

    var data = $('#tanggal_awal').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'DD-MM-YYYY'
            }
        
    }).val();

    var data2 = $('#tanggal_akhir').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        locale: {
            format: 'DD-MM-YYYY'
            }
    }).val();

    get_poll = function(opts){
        var url = '<?php echo $this->config->item('api_url') ?>polling/allpoll';
        var data;

        if(opts !== undefined){
            data = opts;
        }

        return $.ajax({
            url: url,
            data: data,
            headers: {
                'Authorization': token
            }
        });
    }

    get_poll_all = function(){
        var url = '<?php echo $this->config->item('api_url') ?>polling/realtime';

        return $.ajax({
            url: url,
            headers: {
                'Authorization': token
            }
        }); 
    }

    load_data = function(){
        var data = undefined;

        if($('#tanggal_awal').val() !== '' && $('#tanggal_akhir').val() !== ''){
            data = {
                tanggal_awal: moment($('input[name=tanggal_awal]').val(), 'DD-MM-YYYY').format('YYYY-MM-DD'),
                tanggal_akhir: moment($('input[name=tanggal_akhir]').val(), 'DD-MM-YYYY').format('YYYY-MM-DD')
            }
        } 

        get_poll(data)
        .done(function(res){
            var data = res.data;
            var data_chart = [];
    
            $.each(data, function(index, item){
                data_chart.push({
                    name: item.text,
                    y: parseInt(item.jumlah)
                });
            });

            Highcharts.chart('container', {
                colors: ['#3db71f','#c9bf45','#ad1414'],
                chart: {
                    backgroundColor: {
                        linearGradient: [0, 0, 500, 500],
                        stops: [
                            [0, 'rgb(255, 255, 255)'],
                            [1, 'rgb(240, 240, 255)']
                        ]
                    },
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Total Polling Kepuasan Masyarakat<br>' + moment($('input[name=tanggal_awal]').val(), 'DD-MM-YYYY').format('D MMM YYYY') +' s/d '+ moment($('input[name=tanggal_akhir]').val(), 'DD-MM-YYYY').format('D MMM YYYY')
                },
                credits: {
                    enabled: false
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                            style: {
                                color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                            }
                        }
                    }
                },
                series: [{
                    name: 'Rating',
                    colorByPoint: true,
                    data: data_chart
                }]
            });

            Highcharts.chart('container2', {
                colors: ['#3db71f','#c9bf45','#ad1414'],
                chart: {
                    backgroundColor: {
                        linearGradient: [0, 0, 500, 500],
                        stops: [
                            [0, 'rgb(255, 255, 255)'],
                            [1, 'rgb(240, 240, 255)']
                        ]
                    },
                    type: 'column'
                },
                title: {
                    text: 'Total Polling Kepuasan Masyarakat<br>' + moment($('input[name=tanggal_awal]').val(), 'DD-MM-YYYY').format('D MMM YYYY') +' s/d '+ moment($('input[name=tanggal_awal]').val(), 'DD-MM-YYYY').format('D MMM YYYY')
                },
                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Jumlah'
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
                            format: '{point.y}'
                        }
                    }
                },
                series: [{
                    name: 'Rating',
                    colorByPoint: true,
                    data: data_chart
                }]
            });
        });
    }

    load_poll = function(){
        get_poll_all()
        .done(function(res){
            var data = res.data;
            var kategori = [];
            var sangat_puas = [];
            var puas = [];
            var tidak_puas = [];

            $.each(data, function(index, item){
                kategori.push(item.nama_petugas);
                sangat_puas.push(parseInt(item.sp));
                puas.push(parseInt(item.p));
                tidak_puas.push(parseInt(item.tp));
            });

            Highcharts.chart('chart', {
                colors: ['#3db71f','#c9bf45','#ad1414'],
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Total Polling Kepuasan Masyarakat <br>' + moment().format('D MMM YYYY')
                },
                xAxis: {
                    categories: kategori
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Total'
                    },
                    stackLabels: {
                        enabled: true,
                        style: {
                            fontWeight: 'bold',
                            color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                        }
                    }
                },
                credits: {
                    enabled: false
                },
                legend: {
                    align: 'right',
                    x: -30,
                    verticalAlign: 'top',
                    y: 25,
                    floating: true,
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                    borderColor: '#CCC',
                    borderWidth: 1,
                    shadow: false
                },
                tooltip: {
                    headerFormat: '<b>{point.x}</b><br/>',
                    pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
                },
                plotOptions: {
                    column: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true,
                            color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
                        }
                    }
                },
                series: [{
                    name: 'Sangat Puas',
                    data: sangat_puas
                }, {
                    name: 'Puas',
                    data: puas
                }, {
                    name: 'Tidak Puas',
                    data: tidak_puas
                }]
            });
        });
    }

    load_data();
    load_poll();

    $('#form-print-laporan').on('submit', function(e){
        e.preventDefault();

        if($('#tanggal_awal').val() === ''){
            bootbox.alert('Tanggal awal wajib diisi');
            return;
        }

        if($('#tanggal_akhir').val() === ''){
            bootbox.alert('Tanggal akhir wajib diisi');
            return;
        }

        load_data();
    });

    setInterval(function () { 
        load_poll();
    }, 10000);
});
</script>