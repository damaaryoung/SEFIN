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
                    <div id="compare_fid_compre" style="width:400px;height:400px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
            $('[id="compare_fid_compre"]').html(loading);
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
            var chart = new CanvasJS.Chart("compare_fid_compre", {
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
</script>