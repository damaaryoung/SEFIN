
             <div class="modal-header">
                 <h4 class="modal-title title-chart-cabang"></h4>
                 <button type="button" class="close" id="close-modal-2" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="kode_area_to_cabang" id="kode_area_to_cabang"/>
                 	<?php foreach($output_zero_ns_cabang as $res):?>
                    	<div class="col-md-6">
				            <div class="card">
				              	<div class="card-header d-flex p-0">
				                	<h3 class="card-title p-3"><?php echo $res->nama_area_kerja;?></h3>
                                    <div class="card-tools p-3">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                                <i class="fas fa-wrench"></i>
                                              </button>
                                              <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <div class="dropdown-item">
                                                  <input type="date" class="form-control" name="date_0ns_console_cabang_<?php echo str_replace(" ","",$res->nama_area_kerja);?>">
                                                    </div>
                                                  <div class="dropdown-item">
                                                    <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_0ns_console_cabang_<?php echo str_replace(" ","",$res->nama_area_kerja);?>">Lihat Data</button>
                                                  </div>
                                                </div>
                                              </div>
                                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                              </button>
                                            </div>
				              	</div>
				              	<div class="card-body">
                    				<div id="0NS_CONSOLE_CABANG_<?php echo str_replace(" ","",$res->nama_area_kerja);?>" style="width:400px;height:400px"></div>
                    			</div>
                    		</div>
                    	</div>
                    <?php endforeach ?>
                 </div>
             </div>

 <!-- Modal -->
<script type="text/javascript">
	$('#close-modal-2').click(function(){
    $('#modal-2').modal('hide');
  });
	//CABANG
<?php $i=0; foreach($output_zero_ns_cabang as $row):?>
var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var kode_area = "<?php echo $row->kode_area; ?>";
var nama_area_kerja = "<?php echo $row->nama_area_kerja;?>";
var rasio_paid = "<?php echo $row->rasio_paid;?>";
var bd_paid = "<?php echo $row->bd_paid;?>";
var noa_paid = "<?php echo $row->noa_paid;?>";

var rasio_unpaid = "<?php echo $row->rasio_unpaid;?>";
var bd_unpaid = "<?php echo $row->bd_unpaid;?>";
var noa_unpaid = "<?php echo $row->noa_unpaid;?>";

var urlapi = "http://103.234.254.186/riskcan";
url = urlapi + "/dashboard/kredit/kreditrisk_controller/ns_console_cabang";

var chart = new CanvasJS.Chart("0NS_CONSOLE_CABANG_<?php echo str_replace(" ","",$row->nama_area_kerja);?>", {
    title: {
        text: nama_area_kerja,
        fontSize: 12
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
        dataPoints: [{
                y: parseFloat(rasio_paid),
                yn: parseFloat(bd_paid),
                yb: parseFloat(noa_paid),
                label: "Paid"
            },
            {
                y: parseFloat(rasio_unpaid),
                yn: parseFloat(bd_unpaid),
                yb: parseFloat(noa_unpaid),
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

$('input[name="date_0ns_console_cabang_<?php echo str_replace(" ","",$res->nama_area_kerja);?>"]').change(function(){
      var date = $('input[name="date_0ns_console_cabang_<?php echo str_replace(" ","",$res->nama_area_kerja);?>"]').val();
      var data = {
        'api' : 'Y',
        'tgl' : date,
        'kode_area' : "<?php echo $row->kode_area; ?>"
      };
      $.ajax({
        url      : url,
        type     : "POST",
        data     : data,
        dataType: "JSON",
        success: function(result){
          var chart = new CanvasJS.Chart("0NS_CONSOLE_CABANG_<?php echo str_replace(" ","",$row->nama_area_kerja);?>", {
              title: {
                  text: kode_area,
                  fontSize: 12
              },
              theme: "light2",
              animationEnabled: true,
              responsive: true,
              maintainAspectRatio: true,
                    data: [{
                        type: "pie",
                        toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                        showInLegend: true,
                        indexLabelFontSize: 18,
                        indexLabel: "{label}: {y}%",
                        legendText: "{label}: {y}%",
                        dataPoints: [{
                                y: parseFloat(result[<?php echo $i;?>].rasio_paid),
                                yn: parseFloat(result[<?php echo $i;?>].noa_paid),
                                yb: parseFloat(result[<?php echo $i;?>].bd_paid),
                                label: "Paid"
                            },
                            {
                                y: parseFloat(result[<?php echo $i;?>].rasio_unpaid),
                                yn: parseFloat(result[<?php echo $i;?>].noa_unpaid),
                                yb: parseFloat(result[<?php echo $i;?>].bd_unpaid),
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
        },
        error: function(xhr, status, error){
          var errorMessage = xhr.status + ': ' + xhr.statusText
          alert(errorMessage);
        }
      });
    });

$('#preview_list_0ns_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja);?>').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_0ns_console_cabang";
    var date = $('input[name="date_0ns_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja);?>"]').val();
    var data = {
        'api' : 'Y',
        'tgl' : date,
        'kode_cabang' : "<?php echo $row->nama_area_kerja ?>"
    };
    $.ajax({
        url      : url,
        type     : "POST",
        data     : data,
        beforeSend: function(){
            $('#modal-2-list').modal('show');
            $('.modal-2-list').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
        },
        success: function(response){
            $('.modal-2-list').html(response);
            $('#date_bucket_0ns_console_cabang').val(date);
            $('#kode_cabang').val("<?php echo $row->nama_area_kerja;?>");
            //alert('test');
        },
        error: function(xhr, status, error){
         var errorMessage = xhr.status + ': ' + xhr.statusText
         alert('Error - ' + errorMessage);
        }
    });
});
<?php $i++; endforeach;?>
</script>

