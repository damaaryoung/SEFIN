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
                    <div id="compare_npl" style="width:400px;height:400px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
            $('[id="compare_npl"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("compare_npl", {
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