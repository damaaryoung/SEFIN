<script type="text/javascript">
var loading='<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var urlapi="http://103.234.254.186/riskcan";
// NPL
NPL();
function NPL(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/kredit/kredit_controller/npl_console",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="NPL"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("NPL", {
          theme: "light2",
          animationEnabled: true,
          data: [{
            type: "pie",
            toolTipContent: "{label}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
            indexLabelFontSize: 18,
            indexLabel: "{label} - {y}",
            yValueFormatString: "###0.0\"%\"",
            click: explodePie,
            dataPoints: [
              { y: parseFloat(result.rasio_npl),yn:parseFloat(result.noa_npl),yb:parseFloat(result.bd_npl), label: "NPL"},
              { y: parseFloat(result.rasio_nonnpl),yn:parseFloat(result.noa_nonnpl),yb:parseFloat(result.bd_nonnpl), label: "Non NPL"}
            ]
          }]
        });
        chart.render();
        function explodePie(e) {
          for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
            if(i !== e.dataPointIndex)
              e.dataSeries.dataPoints[i].exploded = false;
          }
        }
      }
  });
}
// NPL
// Bucket Zero
Bucket_0();
<<<<<<< HEAD

function Bucket_0() {
    var date = $('input[name="date_0_all_console"]').val();
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kredit_controller/bucket_nol_col_console",
        async: false,
        data: {
            'api': 'Y',
            'tgl' : date
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="Bucket_0"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("Bucket_0", {
                theme: "light2",
                data: [{
                    type: "pie",
                    toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
                    showInLegend: true,
                    indexLabel: "{label}: {y}%",
                    legendText: "{label}: {y}%",
                    valueFormatSting: "#, ## 0.00",
                    radius: 100,
                    click: explodePie,
                    dataPoints: [{
                            y: parseFloat(result.rasio_bucket_0),
                            yn: parseFloat(result.noa_bucket_0),
                            yb: parseFloat(result.bd_bucket_0).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "Bucket 0"
                        },
                        {
                            y: parseFloat(result.rasio_bucket_1),
                            yn: parseFloat(result.noa_bucket_1),
                            yb: parseFloat(result.bd_bucket_1).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "Bucket 1"
                        },
                        {
                            y: parseFloat(result.rasio_bucket_2),
                            yn: parseFloat(result.noa_bucket_2),
                            yb: parseFloat(result.bd_bucket_2).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "Bucket 2"
                        },
                        {
                            y: parseFloat(result.rasio_bucket_3),
                            yn: parseFloat(result.noa_bucket_3),
                            yb: parseFloat(result.bd_bucket_3).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "Bucket 3"
                        },
                        {
                            y: parseFloat(result.rasio_npl),
                            yn: parseFloat(result.noa_npl),
                            yb: parseFloat(result.bd_npl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "NPL"
                        }
                    ]
                }]
            });
            chart.render();
            function explodePie(e) {
                for (var i = 0; i < e.dataSeries.dataPoints.length; i++) {
                    if (i !== e.dataPointIndex)
                        e.dataSeries.dataPoints[i].exploded = false;
                }
            }
        }
    });
}

    // 0NS
    ZeroNS();

    function ZeroNS() {
        var date = $('input[name="date_bucket0_ns_console"]').val();
        $.ajax({
            type: "POST",
            url: urlapi + "/dashboard/kredit/kreditrisk_controller/ns_console",
            async: false,
            data: {
                'api': 'Y',
                'tgl': date
            },
            dataType: "JSON",
            beforeSend: function() {
                $('[id="ZeroNS"]').html(loading);
            },
            success: function(result) {
                var chart = new CanvasJS.Chart("ZeroNS", {
                    theme: "light2",
                    data: [{
                        type: "pie",
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                        showInLegend: true,
                        indexLabelFontSize: 18,
                        radius: 100,
                        indexLabel: "{label}: {y}%",
                        legendText: "{label}: {y}%",
                        dataPoints: [{
                                y: parseFloat(result.rasio_paid),
                                yn: parseFloat(result.noa_paid),
                                yb: parseFloat(result.bd_paid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: "Paid"
                            },
                            {
                                y: parseFloat(result.rasio_unpaid),
                                yn: parseFloat(result.noa_unpaid),
                                yb: parseFloat(result.bd_unpaid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: "Unpaid"
                            }
                        ]
                    }]
                });
                chart.render();
            }
        });
    }
    // 0NS
    // fidever
    
    fidever();

    function fidever() {
        var date = $('input[name="date-fid-ever"]').val();
        $.ajax({
            type: "POST",
            url: urlapi + "/dashboard/kredit/kreditrisk_controller/fid_ever_06_console",
            async: false,
            data: {
                'api': 'Y',
                'tgl': date
            },
            dataType: "JSON",
            beforeSend: function() {
                $('[id="fid-ever"]').html(loading);
            },
            success: function(result) {
                var chart = new CanvasJS.Chart("fid-ever", {
                    theme: "light2",
                    data: [{
                        type: "pie",
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                        showInLegend: true,
                        indexLabelFontSize: 18,
                        radius: 100,
                        indexLabel: "{label}: {y}%",
                        legendText: "{label}: {y}%",
                        dataPoints: [{
                                y: parseFloat(result.rasio_fid),
                                yn: parseFloat(result.noa_fid),
                                yb: parseFloat(result.bd_fid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: "FID"
                            },
                            {
                                y: parseFloat(result.rasio_nonfid),
                                yn: parseFloat(result.noa_nonfid),
                                yb: parseFloat(result.bd_nonfid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: "UnFID"
                            }
                        ]
                    }]
                });
                chart.render();
            }
=======
function Bucket_0(){
  $.ajax({
      type: "POST",
      url: urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console",
      async: false,
      data:{'api':'Y'},
      dataType: "JSON",
      beforeSend: function() {
        $('[id="Bucket_0"]').html(loading);
      },
      success: function(result) {
        var chart = new CanvasJS.Chart("Bucket_0",
        {
          theme: "light2",
          data: [
          {
            type: "pie",
            toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
            showInLegend: true,
            legendText: "{indexLabel}",
            dataPoints: [
              {  y: parseFloat(result.rasio_bucket_0),yn: parseFloat(result.noa_bucket_0),yb: parseFloat(result.bd_bucket_0), indexLabel: "Bucket 0" },
              {  y: parseFloat(result.rasio_bucket_1),yn: parseFloat(result.noa_bucket_1),yb: parseFloat(result.bd_bucket_1), indexLabel: "Bucket 1" },
              {  y: parseFloat(result.rasio_bucket_2),yn: parseFloat(result.noa_bucket_2),yb: parseFloat(result.bd_bucket_2), indexLabel: "Bucket 2" },
              {  y: parseFloat(result.rasio_npl),yn: parseFloat(result.noa_npl),yb: parseFloat(result.bd_npl), indexLabel: "NPL"}
            ]
          }
          ]
>>>>>>> db2d513c2dc770139edf33799b0d3a20937ec326
        });
        chart.render();
      }
  });
}

$(function(){
  url = urlapi+"/dashboard/kredit/kredit_controller/npl_console_area";
  $.ajax({
    type: "POST",
    url:url,
    async: false,
    data: {'api': 'Y'},
    dataType: "JSON",
    beforeSend: function(result)
    {
      for(var i = 0; i < result.length; i++)
      {
        $('[id="NPL_AREA_'+i+'"]').html(loading);
      }
    },
     success: function(result) {
      for(var i = 0; i < result.length; i++)
      {
        var chart = new CanvasJS.Chart("NPL_AREA_" + i, 
        {
          title:{
            text:result[i].kode_area,
            fontSize:12
          },
          theme: "light2",
          animationEnabled: true,
          responsive: true,
          maintainAspectRatio: true,
          data: [{
            type: "pie",
            toolTipContent: "Percentage : <strong>{y}</strong><br/>BD NPL : <strong>{yn}</strong><br/>NOA NPL : <strong>{yb}</strong>",
            indexLabelFontSize: 18,
            indexLabel: "{label} - {y}",
            yValueFormatString: "###0.0\"%\"",
            click: explodePie,
            dataPoints: [
              { y:parseFloat(result[i].rasio_npl),yn: parseFloat(result[i].bd_npl), yb: parseFloat(result[i].noa_npl), label: "NPL"},
              { y:parseFloat(result[i].rasio_nonnpl),yn: parseFloat(result[i].bd_nonnpl), yb: parseFloat(result[i].noa_nonnpl), label: "NON NPL"}
            ]
          }]
        });
      
        chart.render();
        function explodePie(e) {
          for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
            if(i !== e.dataPointIndex)
              e.dataSeries.dataPoints[i].exploded = false;
          }
        }

        //CABANG
        url2 = urlapi+"/dashboard/kredit/kredit_controller/npl_console_cabang";
        $.ajax({
          type: "POST",
          url:url2,
          async: false,
          data: {'api': 'Y','kode_area' : result[i].kode_area},
           dataType: "JSON",
          beforeSend: function(result2)
          {
              
                for(var j = 0; j < result2.length; j++)
                {
                    $('[id="NPL_AREA_'+i+'_CABANG_'+j+'"]').html(loading);
                }
<<<<<<< HEAD
            }
        }
    });
    }
    
deliquency_console();
function deliquency_console()
{
    var date = $('input[name="date_deliquency"]').val();
    $.ajax({
        type: "POST",
        // url: urlapi + "/dashboard/kredit/kreditrisk_controller/delinquensy_console",
        url:"<?php echo base_url();?>modal_bootstrap_controller/json_deliquency_console",
        async: false,
        data: {
            'api': 'Y',
            'tgl': date,
        },
        dataType: "JSON",
        beforeSend: function(result) {
            $('[id="deliquency"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("deliquency", {
                theme: "light2",
                animationEnabled: true,
                data: [{
                    type: "funnel",
                    toolTipContent: "{label} : <strong>{y}</strong><br/>Noa : <strong>{yn}</strong><br/>Baki Debet : <strong>{yb}</strong>",
=======
              
          },
           success: function(result2) {
                //$('[id="NPL_AREA_'+i+'"]').html(loading);
              for(var j = 0; j < result2.length; j++)
              {
                  var chart = new CanvasJS.Chart("NPL_AREA_" + i +"_CABANG_"+ j, 
                  {
                    title:{
                      text:result2[j].nama_area_kerja,
                      fontSize:12
                    },
                  theme: "light2",
                  animationEnabled: true,
                  responsive: true,
                  maintainAspectRatio: true,
                  data: [{
                    type: "pie",
                    toolTipContent: "Percentage : <strong>{y}</strong><br/>BD NPL : <strong>{yn}</strong><br/>NOA NPL : <strong>{yb}</strong>",
>>>>>>> db2d513c2dc770139edf33799b0d3a20937ec326
                    indexLabelFontSize: 18,
                    indexLabel: "{label} - {y}",
                    yValueFormatString: "###0.0\"%\"",
                    click: explodePie,
<<<<<<< HEAD
                    dataPoints: [{
                            y: parseFloat(result.rasio_current),
                            yn: parseFloat(result.noa_current),
                            yb: parseFloat(result.bd_current).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            indexLabelFontSize: 12,
                            label: "Current"
                        },
                        {
                            y: parseFloat(result.rasio_0_plus),
                            yn: parseFloat(result.noa_0_plus),
                            yb: parseFloat(result.bd_0_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            indexLabelFontSize: 12,
                            label: "0 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_30_plus),
                            yn: parseFloat(result.noa_30_plus),
                            yb: parseFloat(result.bd_30_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            indexLabelFontSize: 12,
                            label: "30 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_60_plus),
                            yn: parseFloat(result.noa_60_plus),
                            yb: parseFloat(result.bd_60_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            indexLabelFontSize: 12,
                            label: "60 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_90_plus),
                            yn: parseFloat(result.noa_90_plus),
                            yb: parseFloat(result.bd_90_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            indexLabelFontSize: 12,
                            label: "90 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_180_plus),
                            yn: parseFloat(result.noa_180_plus),
                            yb: parseFloat(result.bd_180_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            indexLabelFontSize: 12,
                            label: "180 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_360_plus),
                            yn: parseFloat(result.noa_360_plus),
                            yb: parseFloat(result.bd_360_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            indexLabelFontSize: 12,
                            label: "360 Plus"
                        },
                    ]
                }]
            });
            chart.render();

            function explodePie(e) {
                for (var i = 0; i < e.dataSeries.dataPoints.length; i++) {
                    if (i !== e.dataPointIndex)
                        e.dataSeries.dataPoints[i].exploded = false;
                }
            }


        }
    });
}
    



roll_console()
function roll_console()
{   
    var date = $('input[name="date_roll_console"]').val();
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/roll_console",
        async: false,
        data: {
            'api': 'Y',
            'tgl': date
        },
        dataType: "JSON",
        beforeSend: function(result) {
            $('[id="bucket_roll"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("bucket_roll", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "UnRoll",
                  titleFontColor: "#4F81BC",
                  lineColor: "#4F81BC",
                  labelFontColor: "#4F81BC",
                  tickColor: "#4F81BC",
                  includeZero: true
                },
                axisY2: {
                  title: "Noa Roll",
                  titleFontColor: "#C0504E",
                  lineColor: "#C0504E",
                  labelFontColor: "#C0504E",
                  tickColor: "#C0504E",
                  includeZero: true
                },
                legend: {
                      cursor: "pointer",
                      itemclick: toggleDataSeries
                    },
                data: 
                    [
                    {
                        type: "column",
                        name: "Noa",
                        showInLegend: true,      
                        yValueFormatString: "#,##0.# Rupiah",
                        dataPoints:[
                            {
                                y: parseFloat(result.noa_roll),
                                label: "Noa UnRoll"
                            },
                            {
                                y: parseFloat(result.noa_roll_up),
                                label: "Noa Roll Up"
                            },
                            {
                                y: parseFloat(result.noa_roll_back),
                                label: "Noa Roll Back"
                            }
                        ]
                    },
                    {
                        type: "column",
                        name: "Unroll",
                        showInLegend: true,
                        axisYType: "secondary",      
                        yValueFormatString: "#,##0.# Rupiah",
                        dataPoints: [
                        {
                            y: parseFloat(result.roll),
                            label: "Unroll"
                        },
                        {
                            y: parseFloat(result.roll_up),
                            label: "Unroll Up"
                        },
                        {
                            y: parseFloat(result.roll_back),   
                            label: "Unroll Back"
                        },
                    ]
                  },                    
                ]
            });
            chart.render();

            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                  e.dataSeries.visible = false;
                } else {
                  e.dataSeries.visible = true;
                }
                e.chart.render();
            }
        }
    });
}
    
npl_3month_console();
function npl_3month_console() {
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kredit_controller/npl_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="NPL_3month"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("NPL_3month", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "NPL",
                  titleFontColor: "#C0504E",
                  lineColor: "#C0504E",
                  labelFontColor: "#C0504E",
                  tickColor: "#C0504E",
                  includeZero: true
                },
                axisY2: {
                  title: "Non NPL",
                  titleFontColor: "#4F81BC",
                  lineColor: "#4F81BC",
                  labelFontColor: "#4F81BC",
                  tickColor: "#4F81BC",
                  includeZero: true
                },
                legend: {
                      cursor: "pointer",
                      itemclick: toggleDataSeries
                    },
                data: 
                    [
                    {
                        type: "column",
                        name: "NPL",
                        showInLegend: true,
                        axisYType: "secondary",      
                        yValueFormatString: "#,## %",
                        dataPoints:[
                            {
                                y: parseFloat(result[2].rasio_npl),
                                yn: parseFloat(result[2].bd_npl),
                                yb: parseFloat(result[2].noa_npl),
                                label: result[2].tgl,

                            },
                            {
                               y: parseFloat(result[1].rasio_npl),
                                yn: parseFloat(result[1].bd_npl),
                                yb: parseFloat(result[1].noa_npl),
                                label: result[1].tgl,
                            },
                            {
                                y: parseFloat(result[0].rasio_npl),
                                yn: parseFloat(result[0].bd_npl),
                                yb: parseFloat(result[0].noa_npl),
                                label: result[0].tgl,
                            }
                        ]
                    },
                    {
                        type: "column",
                        name: "Non NPL",
                        showInLegend: true,      
                        yValueFormatString: "#,## %",
                        dataPoints: [
                        {
                            y: parseFloat(result[2].rasio_nonnpl),
                            yn: parseFloat(result[2].bd_nonnpl),
                            yb: parseFloat(result[2].noa_nonnpl),
                            label: result[2].tgl,
                        },
                        {
                            y: parseFloat(result[1].rasio_nonnpl),
                            yn: parseFloat(result[1].bd_nonnpl),
                            yb: parseFloat(result[1].noa_nonnpl),
                            label: result[1].tgl,
                        },
                        {
                            y: parseFloat(result[0].rasio_nonnpl),
                            yn: parseFloat(result[0].bd_nonnpl),
                            yb: parseFloat(result[0].noa_nonnpl),
                            label: result[0].tgl,
                        },
                    ]
                  },                    
                ]
            });
            chart.render();
            function toggleDataSeries(e) {
                if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                  e.dataSeries.visible = false;
                } else {
                  e.dataSeries.visible = true;
                }
                e.chart.render();
            }
            
        }
    });
}

bucket0_all_3month_console()
function bucket0_all_3month_console() {
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kredit_controller/bucket_nol_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="Bucket0_3month"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("Bucket0_3month", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "Bucket 0",
                  titleFontColor: "#4F81BC",
                  lineColor: "#4F81BC",
                  labelFontColor: "#4F81BC",
                  tickColor: "#4F81BC",
                  includeZero: true
                },
                axisY2: {
                  title: "Bucket 1",
                  titleFontColor: "#C0504E",
                  lineColor: "#C0504E",
                  labelFontColor: "#C0504E",
                  tickColor: "#C0504E",
                  includeZero: true
                },
                axisY3: {
                  title: "Bucket 2",
                  titleFontColor: "#66FF66",
                  lineColor: "#66FF66",
                  labelFontColor: "#66FF66",
                  tickColor: "#66FF66",
                  includeZero: true
                },
                axisY4: {
                  title: "Bucket3",
                  titleFontColor: "#FFFF33",
                  lineColor: "#FFFF33",
                  labelFontColor: "#FFFF33",
                  tickColor: "#FFFF33",
                  includeZero: true
                },
                legend: {
                      cursor: "pointer",
                      itemclick: toggleDataSeries
                    },
                data: 
                    [
                    {
                        type: "column",
                        name: "Bucket 0",
                        showInLegend: true,
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                        dataPoints:[
                            {
                                y: parseFloat(result[2].rasio_bucket_0),
                                yn: parseFloat(result[2].noa_bucket_0),
                                yb: parseFloat(result[2].bd_bucket_0).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[2].tgl,

                            },
                            {
                               y: parseFloat(result[1].rasio_bucket_0),
                                yn: parseFloat(result[1].noa_bucket_0),
                                yb: parseFloat(result[1].bd_bucket_0).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[1].tgl,
                            },
                            {
                                y: parseFloat(result[0].rasio_bucket_0),
                                yn: parseFloat(result[0].noa_bucket_0),
                                yb: parseFloat(result[0].bd_bucket_0).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[0].tgl,
                            },
                        ]
                    },
                    {
                        type: "column",
                        name: "Bucket 1",
                        showInLegend: true,
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",      
                        dataPoints: [
                        {
                            y: parseFloat(result[2].rasio_bucket_1),
                            yn: parseFloat(result[2].noa_bucket_1),
                            yb: parseFloat(result[2].bd_bucket_1).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[2].tgl,

                        },
                        {
                            y: parseFloat(result[1].rasio_bucket_1),
                            yn: parseFloat(result[1].noa_bucket_1),
                            yb: parseFloat(result[1].bd_bucket_1).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[1].tgl,
                        },
                        {
                            y: parseFloat(result[0].rasio_bucket_1),
                            yn: parseFloat(result[0].noa_bucket_1),
                            yb: parseFloat(result[0].bd_bucket_1).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[0].tgl,
                        },
                    ]
                  },
                  {
                        type: "column",
                        name: "Bucket 2",
                        showInLegend: true,      
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                        dataPoints: [
                        {
                            y: parseFloat(result[2].rasio_bucket_2),
                            yn: parseFloat(result[2].noa_bucket_2),
                            yb: parseFloat(result[2].bd_bucket_2).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[2].tgl,

                        },
                        {
                            y: parseFloat(result[1].rasio_bucket_2),
                            yn: parseFloat(result[1].noa_bucket_2),
                            yb: parseFloat(result[1].bd_bucket_2).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[1].tgl,
                        },
                        {
                            y: parseFloat(result[0].rasio_bucket_2),
                            yn: parseFloat(result[0].noa_bucket_2),
                            yb: parseFloat(result[0].bd_bucket_2).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[0].tgl,
                        },
                    ]
                  },
                  {
                        type: "column",
                        name: "Bucket 3",
                        showInLegend: true,
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",      
                        dataPoints: [
                        {
                            y: parseFloat(result[2].rasio_bucket_3),
                            yn: parseFloat(result[2].noa_bucket_3),
                            yb: parseFloat(result[2].bd_bucket_3).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[2].tgl,

                        },
                        {
                            y: parseFloat(result[1].rasio_bucket_3),
                            yn: parseFloat(result[1].noa_bucket_3),
                            yb: parseFloat(result[1].bd_bucket_3).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[1].tgl,
                        },
                        {
                            y: parseFloat(result[0].rasio_bucket_3),
                            yn: parseFloat(result[0].noa_bucket_3),
                            yb: parseFloat(result[0].bd_bucket_3).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[0].tgl,
                        },
                    ]
                  },
                  {
                        type: "column",
                        name: "NPL",
                        showInLegend: true,
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",      
                        dataPoints: [
                        {
                            y: parseFloat(result[2].rasio_npl),
                            yn: parseFloat(result[2].noa_npl),
                            yb: parseFloat(result[2].bd_npl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[2].tgl,

                        },
                        {
                            y: parseFloat(result[1].rasio_npl),
                            yn: parseFloat(result[1].noa_npl),
                            yb: parseFloat(result[1].bd_npl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[1].tgl,
                        },
                        {
                            y: parseFloat(result[0].rasio_npl),
                            yn: parseFloat(result[0].noa_npl),
                            yb: parseFloat(result[0].bd_npl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: result[0].tgl,
                        },
=======
                    dataPoints: [
                      { y:parseFloat(result2[j].rasio_npl),yn: parseFloat(result2[j].bd_npl), yb: parseFloat(result2[j].noa_npl), label: "NPL"},
                      { y:parseFloat(result2[j].rasio_nonnpl),yn: parseFloat(result2[j].bd_nonnpl), yb: parseFloat(result2[j].noa_nonnpl), label: "NON NPL"}
>>>>>>> db2d513c2dc770139edf33799b0d3a20937ec326
                    ]
                  }]
                });
                chart.render();
        function explodePie(e) {
          for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
            if(i !== e.dataPointIndex)
              e.dataSeries.dataPoints[i].exploded = false;
          }
        }
              }
            
          }
        });
      }
    }
  });
});

$(function(){
  var url=urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console_area";
  $.ajax({
    type: "POST",
    url: url,
    async: false,
    data:{'api':'Y'},
    dataType: "JSON",
    beforeSend: function(result) {
      for(var i = 0; i < result.length; i++)
      {
        $('[id="BUCKET_0_AREA_'+i+'"]').html(loading);
      }
    },
      success: function(result) {
        for(var i = 0; i < result.length; i++)
        {
          var chart = new CanvasJS.Chart("BUCKET_0_AREA_"+i,
          {
            theme: "light2",
            data: [{
              type: "pie",
              toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
              showInLegend: true,
              legendText: "{indexLabel}",
              dataPoints: [
                {  y: parseFloat(result[i].rasio_bucket_0),yn: parseFloat(result[i].noa_bucket_0),yb: parseFloat(result[i].bd_bucket_0), indexLabel: "Bucket 0" },
                {  y: parseFloat(result[i].rasio_bucket_1),yn: parseFloat(result[i].noa_bucket_1),yb: parseFloat(result[i].bd_bucket_1), indexLabel: "Bucket 1" },
                {  y: parseFloat(result[i].rasio_bucket_2),yn: parseFloat(result[i].noa_bucket_2),yb: parseFloat(result[i].bd_bucket_2), indexLabel: "Bucket 2" },
                {  y: parseFloat(result[i].rasio_npl),yn: parseFloat(result[i].noa_npl),yb: parseFloat(result[i].bd_npl), indexLabel: "NPL"}
              ]
            }]
          });
          chart.render();
          function explodePie(e) {
            for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
            if(i !== e.dataPointIndex)
              e.dataSeries.dataPoints[i].exploded = false;
            }
          }
          //CABANG
          url2 = urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console_cabang";
          $.ajax({
            type: "POST",
            url:url2,
            async: false,
            data: {'api': 'Y','kode_area' : result[i].kode_area},
             dataType: "JSON",
            beforeSend: function(result2)
            {
                
                  for(var j = 0; j < result2.length; j++)
                  {
                      $('[id="BUCKET0_AREA_'+i+'_CABANG_'+j+'"]').html(loading);
                  }
                
            },
             success: function(result2) {
                  //$('[id="NPL_AREA_'+i+'"]').html(loading);
                for(var j = 0; j < result2.length; j++)
                {
                    var chart = new CanvasJS.Chart("BUCKET0_AREA_" + i +"_CABANG_"+ j, 
                    {
                      title:{
                        text:result2[j].nama_area_kerja,
                        fontSize:12
                      },
                    theme: "light2",
                    animationEnabled: true,
                    responsive: true,
                    maintainAspectRatio: true,
                    data: [{
                      type: "pie",
                      toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                      indexLabelFontSize: 18,
                      indexLabel: "{label} - {y}",
                      yValueFormatString: "###0.0\"%\"",
                      click: explodePie,
                      dataPoints: [
                        {  y: parseFloat(result[j].rasio_bucket_0),yn: parseFloat(result[j].noa_bucket_0),yb: parseFloat(result[j].bd_bucket_0), indexLabel: "Bucket 0" },
                        {  y: parseFloat(result[j].rasio_bucket_1),yn: parseFloat(result[j].noa_bucket_1),yb: parseFloat(result[j].bd_bucket_1), indexLabel: "Bucket 1" },
                        {  y: parseFloat(result[j].rasio_bucket_2),yn: parseFloat(result[j].noa_bucket_2),yb: parseFloat(result[j].bd_bucket_2), indexLabel: "Bucket 2" },
                        {  y: parseFloat(result[j].rasio_npl),yn: parseFloat(result[j].noa_npl),yb: parseFloat(result[j].bd_npl), indexLabel: "NPL"}
                      ]
                    }]
                  });
                  chart.render();
                  function explodePie(e) {
                    for(var i = 0; i < e.dataSeries.dataPoints.length; i++) {
                      if(i !== e.dataPointIndex)
                        e.dataSeries.dataPoints[i].exploded = false;
                    }
                  }
                }
            }
          });
        }
      }
    });
  });

  url4 = urlapi+"/dashboard/kredit/kredit_controller/bucket_nol_console_cabang";
  




// Bucket Zero
</script>