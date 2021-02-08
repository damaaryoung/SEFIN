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
                    <div id="compare_deliquency" style="width:400px;height:400px"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
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
            $('[id="compare_deliquency"]').html(loading);
        },
        success: function(result) {
            var chart = new CanvasJS.Chart("compare_deliquency", {
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