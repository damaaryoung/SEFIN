<script type = "text/javascript" >
    var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var urlapi = "http://103.234.254.186/riskcan";
// NPL
npl_console();

function npl_console() {
    var date = $('input[name="date_npl_console"]').val();
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kredit_controller/npl_console",
        async: false,
        data: {
            'api': 'Y',
            'tgl' : date,
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="NPL"]').html(loading);
        },
        success: function(result) {
            var rasio_npl;
            var noa_npl;
            var bd_npl;
            var rasio_nonnpl;
            var noa_nonnpl;
            var bd_nonnpl;
            if(result.rasio_npl == null || result.noa_npl == null || result.bd_npl == null){
                rasio_npl = 0;
                noa_npl = 0;
                bd_npl = 0;
                rasio_nonnpl = 0;
                noa_nonnpl = 0;
                bd_nonnpl = 0;
            }else{
                rasio_npl = result.rasio_npl;
                noa_npl = result.noa_npl;
                bd_npl = result.bd_npl;
                rasio_nonnpl = result.rasio_nonnpl;
                noa_nonnpl = result.noa_nonnpl;
                bd_nonnpl = result.bd_nonnpl;
            }
            var chart = new CanvasJS.Chart("NPL", {
                theme: "light2",
                animationEnabled: true,
                data: [{
                    type: "pie",
                    toolTipContent: "{label}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                    indexLabelFontSize: 18,
                    showInLegend: true,
                    radius: 100,
                    indexLabel: "{label}: {y}",
                    legendText: "{label}: {y}",
                    yValueFormatString: "###0.0\"%\"",
                    click: explodePie,
                    dataPoints: [{
                            y: parseFloat(rasio_npl),
                            yn: parseFloat(noa_npl),
                            yb: parseFloat(bd_npl),
                            label: "NPL"
                        },
                        {
                            y: parseFloat(rasio_nonnpl),
                            yn: parseFloat(noa_nonnpl),
                            yb: parseFloat(bd_nonnpl),
                            label: "Non NPL"
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
// NPL
// Bucket Zero
Bucket_0();

function Bucket_0() {
    var date = $('input[name="date_0_all_console"]').val();
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kredit_controller/bucket_nol_console",
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
        });
    }
    // fidever
    // fidcompre
    fidcompre();

    function fidcompre() {
        var date = $('input[name="date-fid-compre"]').val();
        $.ajax({
            type: "POST",
            url: urlapi + "/dashboard/kredit/kreditrisk_controller/fid_compre_console",
            async: false,
            data: {
                'api': 'Y',
                'tgl' : date,
            },
            dataType: "JSON",
            indexLabelFontSize: 18,
            radius: 100,
            beforeSend: function() {
                $('[id="fid-compre"]').html(loading);
            },
            success: function(result) {
                var chart = new CanvasJS.Chart("fid-compre", {
                    theme: "light2",
                    data: [{
                        type: "pie",
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                        showInLegend: true,
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
        });
    }
    // fidcompre
    current_ratio_console();
    function current_ratio_console()
    {
        var date = $('input[name="date-current-ratio"]').val();
        $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kredit_controller/current_rasio_console",
        async: false,
        data: {
            'api': 'Y',
            'tgl' : date,
        },
        dataType: "JSON",
        beforeSend: function(result) {
            $('[id="current_rasio"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("current_rasio", {
                theme: "light2",
                animationEnabled: true,
                radius: 100,
                data: [{
                    type: "pie",
                    toolTipContent: "{label} : <strong>{y}</strong><br/>Noa : <strong>{yn}</strong><br/>Baki Debet : <strong>{yb}</strong>",
                    indexLabelFontSize: 18,
                   showInLegend: true,
                    radius: 100,
                    indexLabel: "{label}: {y}",
                    legendText: "{label}: {y}",
                    yValueFormatString: "###0.0\"%\"",
                    click: explodePie,
                    dataPoints: [{
                            y: parseFloat(result.rasio_paid),
                            yn: parseFloat(result.bd_paid),
                            yb: parseFloat(result.noa_paid),
                            label: "Paid"
                        },
                        {
                            y: parseFloat(result.rasio_unpaid),
                            yn: parseFloat(result.bd_unpaid),
                            yb: parseFloat(result.noa_unpaid),
                            label: "Unpaid"
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
    
deliquency_console();
function deliquency_console()
{
    var date = $('input[name="date_deliquency"]').val();
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/delinquensy_console",
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
                    indexLabelFontSize: 18,
                    showInLegend: true,
                    indexLabel: "{label}: {y}",
                    legendText: "{label}: {y}",
                    yValueFormatString: "###0.0\"%\"",
                    click: explodePie,
                    dataPoints: [{
                            y: parseFloat(result.rasio_current),
                            yn: parseFloat(result.noa_current),
                            yb: parseFloat(result.bd_current).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "Current"
                        },
                        {
                            y: parseFloat(result.rasio_0_plus),
                            yn: parseFloat(result.noa_0_plus),
                            yb: parseFloat(result.bd_0_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "0 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_30_plus),
                            yn: parseFloat(result.noa_30_plus),
                            yb: parseFloat(result.bd_30_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "30 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_60_plus),
                            yn: parseFloat(result.noa_60_plus),
                            yb: parseFloat(result.bd_60_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "60 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_90_plus),
                            yn: parseFloat(result.noa_90_plus),
                            yb: parseFloat(result.bd_90_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "90 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_180_plus),
                            yn: parseFloat(result.noa_180_plus),
                            yb: parseFloat(result.bd_180_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                            label: "180 Plus"
                        },
                        {
                            y: parseFloat(result.rasio_360_plus),
                            yn: parseFloat(result.noa_360_plus),
                            yb: parseFloat(result.bd_360_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
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

ns_3month_console()
function ns_3month_console() {
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/ns_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="BucketNS_3month"]').html(loading);
        },
        success: function(result) {
            var finalsPaid = [];
            for(var i = 0;i < result.length;i++){
                finalsPaid.push({
                    y: parseFloat(result[i].rasio_paid),
                    yn: parseFloat(result[i].noa_paid),
                    yb: parseFloat(result[i].bd_paid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }

            var finalsUnpaid = [];
            for(var i = 0;i < result.length;i++){
                finalsUnpaid.push({
                    y: parseFloat(result[i].rasio_unpaid),
                    yn: parseFloat(result[i].noa_unpaid),
                    yb: parseFloat(result[i].bd_unpaid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }

            var chart = new CanvasJS.Chart("BucketNS_3month", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "Paid",
                  titleFontColor: "#4F81BC",
                  lineColor: "#4F81BC",
                  labelFontColor: "#4F81BC",
                  tickColor: "#4F81BC",
                  includeZero: true
                },
                axisY2: {
                  title: "UnPaid",
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
                        name: "Paid",
                        showInLegend: true,
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",      
                        dataPoints: finalsPaid
                    },
                    {
                        type: "column",
                        name: "Unpaid",
                        showInLegend: true,
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                        axisYType: "secondary",      
                        dataPoints: finalsUnpaid
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

fid_compre_3month_console()
function fid_compre_3month_console() {
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/fid_compre_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="FID_Compre_3month"]').html(loading);
        },
        success: function(result) {
            var finalsFid = [];
            for(var i = 0;i < result.length; i++){
                finalsFid.push({
                    y: parseFloat(result[i].rasio_fid),
                    yn: parseFloat(result[i].noa_fid),
                    yb: parseFloat(result[i].bd_fid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }

            var finalsNonfid = [];
            for(var i = 0; i < result.length;i++){
                finalsNonfid.push({
                    y: parseFloat(result[i].rasio_nonfid),
                    yn: parseFloat(result[i].noa_nonfid),
                    yb: parseFloat(result[i].bd_nonfid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }
            var chart = new CanvasJS.Chart("FID_Compre_3month", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "Paid",
                  toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                  titleFontColor: "#4F81BC",
                  lineColor: "#4F81BC",
                  labelFontColor: "#4F81BC",
                  tickColor: "#4F81BC",
                  includeZero: true
                },
                axisY2: {
                  title: "UnPaid",
                  toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
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
                        name: "FID",
                        showInLegend: true,
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",  
                        dataPoints: finalsFid
                    },
                    {
                        type: "column",
                        name: "Non FID",
                        showInLegend: true,
                        axisYType: "secondary",
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>", 
                        dataPoints: finalsNonfid
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

current_rasio_3month_console()
function current_rasio_3month_console() {
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/ns_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="Current_Ratio_3month"]').html(loading);
        },
        success: function(result) {
            var finalsPaid = [];
            for(var i = 0;i < result.length;i++){
                finalsPaid.push({
                    y: parseFloat(result[i].rasio_paid),
                    yn: parseFloat(result[i].noa_paid),
                    yb: parseFloat(result[i].bd_paid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }

            var finalsUnpaid = [];
            for(var i = 0;i < result.length;i++){
                finalsUnpaid.push({
                    y: parseFloat(result[i].rasio_unpaid),
                    yn: parseFloat(result[i].noa_unpaid),
                    yb: parseFloat(result[i].bd_unpaid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }
            var chart = new CanvasJS.Chart("Current_Ratio_3month", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "Paid",
                  titleFontColor: "#C0504E",
                  lineColor: "#C0504E",
                  labelFontColor: "#C0504E",
                  tickColor: "#C0504E",
                  includeZero: true
                },
                axisY2: {
                  title: "UnPaid",
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
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                        name: "Paid",
                        showInLegend: true,
                        axisYType: "secondary",      
                        dataPoints: finalsPaid
                    },
                    {
                        type: "column",
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                        name: "Unpaid",
                        showInLegend: true,
                        dataPoints: finalsUnpaid
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

fid_ever_3month_console()
function fid_ever_3month_console(){
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/fid_ever_06_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="FID_Ever_3month"]').html(loading);
        },
        success: function(result) {
            var finalsFid = [];
            for(var i = 0;i < result.length; i++){
                finalsFid.push({
                    y: parseFloat(result[i].rasio_fid),
                    yn: parseFloat(result[i].noa_fid),
                    yb: parseFloat(result[i].bd_fid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }

            var finalsNonfid = [];
            for(var i = 0; i < result.length;i++){
                finalsNonfid.push({
                    y: parseFloat(result[i].rasio_nonfid),
                    yn: parseFloat(result[i].noa_nonfid),
                    yb: parseFloat(result[i].bd_nonfid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: result[i].tgl,
                });
            }
            var chart = new CanvasJS.Chart("FID_Ever_3month", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "Paid",
                  titleFontColor: "#4F81BC",
                  lineColor: "#4F81BC",
                  labelFontColor: "#4F81BC",
                  tickColor: "#4F81BC",
                  includeZero: true
                },
                axisY2: {
                  title: "UnPaid",
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
                        name: "FID",
                        showInLegend: true,      
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                        dataPoints: finalsFid
                    },
                    {
                        type: "column",
                        name: "Non FID",
                        showInLegend: true,
                        axisYType: "secondary",      
                        toolTipContent: "Percentage : <strong>{y}%</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
                        dataPoints: finalsNonfid
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

roll_3month_console()
function roll_3month_console() {
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/roll_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="Roll_Bucket_3month"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("Roll_Bucket_3month", {
                exportEnabled: true,
                animationEnabled: true,
                axisY: {
                  title: "Unroll",
                  titleFontColor: "#4F81BC",
                  lineColor: "#4F81BC",
                  labelFontColor: "#4F81BC",
                  tickColor: "#4F81BC",
                  includeZero: true
                },
                axisY2: {
                  title: "RollUp",
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
                        name: "Unroll",
                        showInLegend: true,
                        dataPoints:[
                            {
                                y: parseFloat(result[2].noa_roll),
                                yn: parseFloat(result[2].roll),
                                label: result[2].tgl,

                            },
                            {
                               y: parseFloat(result[1].noa_roll),
                                yn: parseFloat(result[1].roll),
                                label: result[1].tgl,
                            },
                            {
                                y: parseFloat(result[0].noa_roll),
                                yn: parseFloat(result[0].roll),
                                label: result[0].tgl,
                            },
                        ]
                    },
                    {
                        type: "column",
                        name: "Roll Up",
                        showInLegend: true, 
                        dataPoints: [
                        {
                                y: parseFloat(result[2].noa_roll_up),
                                yn: parseFloat(result[2].roll_up),
                                label: result[2].tgl,

                            },
                            {
                               y: parseFloat(result[1].noa_roll_up),
                                yn: parseFloat(result[1].roll_up),
                                label: result[1].tgl,
                            },
                            {
                                y: parseFloat(result[0].noa_roll_up),
                                yn: parseFloat(result[0].roll_up),
                                label: result[0].tgl,
                            },
                    ]
                  },
                  {
                        type: "column",
                        name: "Roll Back",
                        showInLegend: true,      
                        dataPoints: [
                        {
                                y: parseFloat(result[2].noa_roll_back),
                                yn: parseFloat(result[2].roll_back),
                                label: result[2].tgl,

                            },
                            {
                               y: parseFloat(result[1].noa_roll_back),
                                yn: parseFloat(result[1].roll_back),
                                label: result[1].tgl,
                            },
                            {
                                y: parseFloat(result[0].noa_roll_back),
                                yn: parseFloat(result[0].roll_back),
                                label: result[0].tgl,
                            },
                    ]
                  },
                  {
                        type: "column",
                        name: "Back to Current",
                        showInLegend: true,      
                        dataPoints: [
                        {
                                y: parseFloat(result[2].noa_back_to_current),
                                yn: parseFloat(result[2].back_to_current),
                                label: result[2].tgl,

                            },
                            {
                               y: parseFloat(result[1].noa_back_to_current),
                                yn: parseFloat(result[1].back_to_current),
                                label: result[1].tgl,
                            },
                            {
                                y: parseFloat(result[0].noa_back_to_current),
                                yn: parseFloat(result[0].back_to_current),
                                label: result[0].tgl,
                            },
                    ]
                  }                    
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

deliquency_3month_console()
function deliquency_3month_console() {
    $.ajax({
        type: "POST",
        url: urlapi + "/dashboard/kredit/kreditrisk_controller/delinquensy_3month_console",
        async: false,
        data: {
            'api': 'Y',
        },
        dataType: "JSON",
        beforeSend: function() {
            $('[id="deliquency_3month"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("deliquency_3month", {
                exportEnabled: true,
                animationEnabled: true,
                legend: {
                      cursor: "pointer",
                      itemclick: toggleDataSeries
                    },
                data: 
                    [
                    {
                        type: "column",
                        name: "Current",
                        showInLegend: true,    
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
                        dataPoints:[
                            {
                                y: parseFloat(result[2].rasio_current),
                                yn: parseFloat(result[2].noa_current),
                                yb: parseFloat(result[2].bd_current).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[2].tgl

                            },
                            {
                                y: parseFloat(result[1].rasio_current),
                                yn: parseFloat(result[1].noa_current),
                                yb: parseFloat(result[1].bd_current).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[1].tgl
                            },
                            {
                                y: parseFloat(result[0].rasio_current),
                                yn: parseFloat(result[0].noa_current),
                                yb: parseFloat(result[0].bd_current).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[0].tgl
                            }],
                    },
                    {
                        type: "column",
                        name: "0 Plus",
                        showInLegend: true,      
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
                        dataPoints: [
                            {
                                y: parseFloat(result[2].rasio_0_plus),
                                yn: parseFloat(result[2].noa_0_plus),
                                yb: parseFloat(result[2].bd_0_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[2].tgl
                            },
                            {
                                y: parseFloat(result[1].rasio_0_plus),
                                yn: parseFloat(result[1].noa_0_plus),
                                yb: parseFloat(result[1].bd_0_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[1].tgl
                            },
                            {
                                y: parseFloat(result[0].rasio_0_plus),
                                yn: parseFloat(result[0].noa_0_plus),
                                yb: parseFloat(result[0].bd_0_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[0].tgl
                            }],
                    
                    },
                    {
                        type: "column",
                        name: "30 Plus",
                        showInLegend: true,      
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
                        dataPoints: [
                            {
                                y: parseFloat(result[2].rasio_30_plus),
                                yn: parseFloat(result[2].noa_30_plus),
                                yb: parseFloat(result[2].bd_30_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[2].tgl
                            },
                            {
                                y: parseFloat(result[1].rasio_30_plus),
                                yn: parseFloat(result[1].noa_30_plus),
                                yb: parseFloat(result[1].bd_30_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[1].tgl
                            },
                            {
                                y: parseFloat(result[0].rasio_30_plus),
                                yn: parseFloat(result[0].noa_30_plus),
                                yb: parseFloat(result[0].bd_30_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[0].tgl
                            }],
                    
                    },{
                        type: "column",
                        name: "60 Plus",
                        showInLegend: true,      
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
                        dataPoints: [
                        
                        {
                                y: parseFloat(result[2].rasio_60_plus),
                                yn: parseFloat(result[2].noa_60_plus),
                                yb: parseFloat(result[2].bd_60_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[2].tgl
                            },
                            {
                                y: parseFloat(result[1].rasio_60_plus),
                                yn: parseFloat(result[1].noa_60_plus),
                                yb: parseFloat(result[1].bd_60_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[1].tgl
                            },
                            {
                                y: parseFloat(result[0].rasio_60_plus),
                                yn: parseFloat(result[0].noa_60_plus),
                                yb: parseFloat(result[0].bd_60_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[0].tgl
                            }],
                    },{
                        type: "column",
                        name: "90 Plus",
                        showInLegend: true,      
                        toolTipContent: "{label}: <strong>{y}%</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
                        dataPoints: [
                        {
                                y: parseFloat(result[2].rasio_90_plus),
                                yn: parseFloat(result[2].noa_90_plus),
                                yb: parseFloat(result[2].bd_90_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[2].tgl
                            },
                            {
                                y: parseFloat(result[1].rasio_90_plus),
                                yn: parseFloat(result[1].noa_90_plus),
                                yb: parseFloat(result[1].bd_90_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[1].tgl
                            },
                            {
                                y: parseFloat(result[0].rasio_90_plus),
                                yn: parseFloat(result[0].noa_90_plus),
                                yb: parseFloat(result[0].bd_90_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                                label: result[0].tgl
                            }
                        ]
                  }                    
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

// Bucket Zero
</script>