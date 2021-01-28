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
                    <div id="compare_current_ratio" style="width:400px;height:400px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
            $('[id="compare_current_ratio"]').html(loading);
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
            var chart = new CanvasJS.Chart("compare_current_ratio", {
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
</script>