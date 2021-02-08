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
                    <div id="compare_roll" style="width:400px;height:400px"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
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
            $('[id="compare_roll"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("compare_roll", {
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
</script>