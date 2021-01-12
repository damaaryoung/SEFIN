
             <div class="modal-header">
                 <h4 class="modal-title title-chart-cabang"></h4>
                 <button type="button" class="close" id="close-modal-2" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="kode_area_to_cabang" id="kode_area_to_cabang"/>
                 	<?php foreach($output_fid_ever_cabang as $res):?>
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
                                                  <input type="date" class="form-control" name="date_fid_ever_console_cabang_<?php echo $res->nama_area_kerja;?>">
                                                    </div>
                                                  <div class="dropdown-item">
                                                    <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_fid_ever_console_cabang_<?php echo $res->nama_area_kerja;?>">Lihat Data</button>
                                                  </div>
                                                </div>
                                              </div>
                                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                              </button>
                                            </div>
				              	</div>
				              	<div class="card-body">
                    				<div id="FID_EVER_CONSOLE_CABANG_<?php echo $res->nama_area_kerja;?>" style="width:400px;height:400px"></div>
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
<?php $i=0; foreach($output_fid_ever_cabang as $row):?>
var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var kode_area = "<?php echo $row->kode_area; ?>";
var nama_area_kerja = "<?php echo $row->nama_area_kerja;?>";
var rasio_fid = "<?php echo $row->rasio_fid;?>";
var bd_fid = "<?php echo $row->bd_fid;?>";
var noa_fid = "<?php echo $row->noa_fid;?>";

var rasio_nonfid = "<?php echo $row->rasio_nonfid;?>";
var bd_nonfid = "<?php echo $row->bd_nonfid;?>";
var noa_nonfid = "<?php echo $row->noa_nonfid;?>";


var urlapi = "http://103.234.254.186/riskcan";
url = urlapi + "/dashboard/kredit/kreditrisk_controller/fid_ever_06_console_cabang";

var chart = new CanvasJS.Chart("FID_EVER_CONSOLE_CABANG_" + nama_area_kerja, {
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
        toolTipContent: "Percentage : <strong>{y}%</strong><br/>BD FID EVER : <strong>{yn}</strong><br/>NOA FID EVER : <strong>{yb}</strong>",
        indexLabelFontSize: 18,
        indexLabel: "{label}: {y}%",
        legendText: "{label}: {y}%",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [{
            y: parseFloat(rasio_fid),
            yn: parseFloat(noa_fid),
            yb: parseFloat(bd_fid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
            label: "FID"
        },
        {
            y: parseFloat(rasio_nonfid),
            yn: parseFloat(noa_nonfid),
            yb: parseFloat(bd_nonfid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
            label: "NON FID"
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

$('input[name="date_fid_ever_console_cabang_<?php echo $row->nama_area_kerja ?>"]').change(function(){
  var date = $('input[name="date_fid_ever_console_cabang_<?php echo $row->nama_area_kerja ?>"]').val();
  var data = {
    'api' : 'Y',
    'tgl' : date,
    'kode_area' : "<?php echo $row->kode_area ?>"
  };
  $.ajax({
    url      : url,
    type     : "POST",
    data     : data,
    success: function(result){
      var chart = new CanvasJS.Chart("FID_EVER_CONSOLE_CABANG_<?php echo $row->nama_area_kerja;?>", {
          title: {
              text: "<?php echo $row->nama_area_kerja;?>",
              fontSize: 12
          },
          theme: "light2",
          animationEnabled: true,
          responsive: true,
          maintainAspectRatio: true,
          data: [{
              type: "pie",
              toolTipContent: "Percentage : <strong>{y}%</strong><br/>BD FID EVER : <strong>{yn}</strong><br/>NOA FID EVER : <strong>{yb}</strong>",
              indexLabelFontSize: 18,
              indexLabel: "{label}: {y}%",
              legendText: "{label}: {y}%",
              yValueFormatString: "###0.0\"%\"",
              click: explodePie,
              dataPoints: [{
                  y: parseFloat(result[<?php echo $i;?>].rasio_fid),
                  yn: parseFloat(result[<?php echo $i;?>].noa_fid),
                  yb: parseFloat(result[<?php echo $i;?>].bd_fid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                  label: "FID"
              },
              {
                  y: parseFloat(result[<?php echo $i;?>].rasio_nonfid),
                  yn: parseFloat(result[<?php echo $i;?>].noa_nonfid),
                  yb: parseFloat(result[<?php echo $i;?>].bd_nonfid).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                  label: "NON FID"
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
  });
});

$('#preview_list_fid_ever_console_cabang_<?php echo $row->nama_area_kerja ?>').click(function(){
  var date = $('input[name="date_fid_ever_console_cabang_<?php echo $row->nama_area_kerja ?>"]').val();
  var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_fid_ever_console_cabang";
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
      $('#modal-1-list').modal('show');
      $('.modal-1-list').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
    },
    success: function(response){
      $('.modal-1-list').html(response);
      $('#date_fid-ever_console_cabang').val(date);
      $('#kode_cabang').val("<?php echo $row->nama_area_kerja;?>");
    },
    error: function(xhr, status, error){
      var errorMessage = xhr.status + ': ' + xhr.statusText
      alert('Error - ' + errorMessage);
    }
  });
});
<?php $i++; endforeach;?>
</script>

