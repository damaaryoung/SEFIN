
             <div class="modal-header">
                 <h4 class="modal-title title-chart-cabang"></h4>
                 <button type="button" class="close" id="close-modal-2" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="kode_area_to_cabang" id="kode_area_to_cabang"/>
                 	<?php foreach($output_bucket0_all_cabang as $res):?>
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
                                      <input type="date" class="form-control" name="date_0_all_console_cabang_<?php echo str_replace(" ","",$res->nama_area_kerja);?>">
                                        </div>
                                      <div class="dropdown-item">
                                        <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_0_all_console_cabang_<?php echo str_replace(" ","",$res->nama_area_kerja);?>">Lihat Data</button>
                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
				              	</div>
				              	<div class="card-body">
                    				<div id="BUCKET0_ALL_CONSOLE_CABANG_<?php echo str_replace(" ","",$res->nama_area_kerja);?>" style="width:500px;height:500px"></div>
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
<?php $i=0; foreach($output_bucket0_all_cabang as $row):?>
var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var kode_area = "<?php echo $row->kode_area; ?>";
var nama_area_kerja = "<?php echo $row->nama_area_kerja;?>";
var noa_bucket_0 = "<?php echo $row->noa_bucket_0;?>";
var noa_bucket_1 = "<?php echo $row->noa_bucket_1;?>";
var noa_bucket_2 = "<?php echo $row->noa_bucket_2;?>";
var noa_bucket_3 = "<?php echo $row->noa_bucket_3;?>";
var npl = "<?php echo $row->noa_npl;?>";


var bd_bucket_0 = "<?php echo $row->bd_bucket_0;?>";
var bd_bucket_1 = "<?php echo $row->bd_bucket_1;?>";
var bd_bucket_2 = "<?php echo $row->bd_bucket_2;?>";
var bd_bucket_3 = "<?php echo $row->bd_bucket_3;?>";
var bd_npl = "<?php echo $row->bd_npl;?>";

var rasio_bucket_0 = "<?php echo $row->rasio_bucket_0;?>";
var rasio_bucket_1 = "<?php echo $row->rasio_bucket_1;?>";
var rasio_bucket_2 = "<?php echo $row->rasio_bucket_2;?>";
var rasio_bucket_3 = "<?php echo $row->rasio_bucket_3;?>";
var rasio_npl = "<?php echo $row->rasio_npl;?>";

var urlapi = "http://103.234.254.186/riskcan";
//url = urlapi + "/dashboard/kredit/kredit_controller/bucket_nol_console_cabang";
url = urlapi + "/dashboard/kredit/kredit_controller/bucket_nol_col_console_cabang";


var chart = new CanvasJS.Chart("BUCKET0_ALL_CONSOLE_CABANG_<?php echo str_replace(" ","",$row->nama_area_kerja);?>", {
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
        toolTipContent: "{label}: <strong>{y}</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
        showInLegend: true,
        indexLabel: "{label} : {y} %",
        legendText: "{label} : {y} %",
        valueFormatSting: "#, ## 0.00",
        radius: 100,
        dataPoints: [{
                y: parseFloat(rasio_bucket_0),
                    yn: parseFloat(noa_bucket_0),
                    yb: parseFloat(bd_bucket_0).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "Bucket 0",
                    indexLabelFontSize: 15
                },
                {
                    y: parseFloat(rasio_bucket_1),
                    yn: parseFloat(noa_bucket_1),
                    yb: parseFloat(bd_bucket_1).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "Bucket 1",
                    indexLabelFontSize: 15
                },
                {
                    y: parseFloat(rasio_bucket_2),
                    yn: parseFloat(noa_bucket_2),
                    yb: parseFloat(bd_bucket_2).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "Bucket 2",
                    indexLabelFontSize: 15
                },
                {
                    y: parseFloat(rasio_bucket_3),
                    yn: parseFloat(noa_bucket_3),
                    yb: parseFloat(bd_bucket_3).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "Bucket 3",
                    indexLabelFontSize: 15
                },
                {
                    y: parseFloat(rasio_npl),
                    yn: parseFloat(noa_npl),
                    yb: parseFloat(bd_npl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "NPL",
                    indexLabelFontSize: 15
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

$('input[name="date_0_all_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja);?>"]').change(function(){
  var date = $('input[name="date_0_all_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja);?>"]').val();
  var data = {
        'api' : 'Y',
        'tgl' : date,
        'kode_area' : "<?php echo $row->kode_area; ?>"
  };
  $.ajax({
    url      : url,
    type     : "POST",
    data     : data,
    dataType : "JSON",
    success: function(result){
      var chart = new CanvasJS.Chart("BUCKET0_ALL_CONSOLE_CABANG_<?php echo str_replace(" ","",$row->nama_area_kerja);?>", {
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
              toolTipContent: "{label}: <strong>{y}</strong><br/>Noa: <strong>{yn}</strong><br/>baki debet: <strong>{yb}</strong>",
              showInLegend: true,
              indexLabel: "{label} : {y} %",
              legendText: "{label} : {y} %",
              valueFormatSting: "#, ## 0.00",
              radius: 100,
              dataPoints: [{
                      y: parseFloat(result[<?php echo $i;?>].rasio_bucket_0),
                          yn: parseFloat(result[<?php echo $i;?>].noa_bucket_0),
                          yb: parseFloat(result[<?php echo $i;?>].bd_bucket_0).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                          label: "Bucket 0",
                          indexLabelFontSize: 15
                      },
                      {
                          y: parseFloat(result[<?php echo $i;?>].rasio_bucket_1),
                          yn: parseFloat(result[<?php echo $i;?>].noa_bucket_1),
                          yb: parseFloat(result[<?php echo $i;?>].bd_bucket_1).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                          label: "Bucket 1",
                          indexLabelFontSize: 15
                      },
                      {
                          y: parseFloat(result[<?php echo $i;?>].rasio_bucket_2),
                          yn: parseFloat(result[<?php echo $i;?>].noa_bucket_2),
                          yb: parseFloat(result[<?php echo $i;?>].bd_bucket_2).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                          label: "Bucket 2",
                          indexLabelFontSize: 15
                      },
                      {
                          y: parseFloat(result[<?php echo $i;?>].rasio_bucket_3),
                          yn: parseFloat(result[<?php echo $i;?>].noa_bucket_3),
                          yb: parseFloat(result[<?php echo $i;?>].bd_bucket_3).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                          label: "Bucket 3",
                          indexLabelFontSize: 15
                      },
                      {
                          y: parseFloat(result[<?php echo $i;?>].rasio_npl),
                          yn: parseFloat(result[<?php echo $i;?>].noa_npl),
                          yb: parseFloat(result[<?php echo $i;?>].bd_npl).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                          label: "NPL",
                          indexLabelFontSize: 15
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
      alert(date);
    }
  });
});

$('#preview_list_0_all_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja);?>').click(function(){
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_0_all_console_cabang";
    var date = $('input[name="date_0_all_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja);?>"]').val();
    var data = {
        'api' : 'Y',
        'tgl' : date,
        'kode_cabang' : "<?php echo $row->nama_area_kerja;?>"
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
            $('#date_0_all_console_cabang').val(date);
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

