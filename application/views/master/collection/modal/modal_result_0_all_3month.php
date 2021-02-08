<div class="modal-header">
    <h4 class="modal-title title-chart-area"></h4>
    <button type="button" class="close" id="close-modal-3" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex p-0">
                    <h3 class="card-title p-3"></h3>
                </div>
                <div class="card-body">
                    <div id="compare_0_all" style="width:400px;height:400px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
bucket0_all_3month_console();
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
            $('[id="compare_0_all"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("compare_0_all", {
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
</script>