
             <div class="modal-header">
                 <h4 class="modal-title title-chart-cabang"></h4>
                 <button type="button" class="close" id="close-modal-2" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="kode_area_to_cabang" id="kode_area_to_cabang"/>
                 	<?php foreach($output_deliquency_cabang as $res):?>
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
                                              <input type="date" class="form-control" name="date_deliquency_console_cabang_<?php echo $res->nama_area_kerja;?>" value="">
                                            </div>
                                            <div class="dropdown-item">
                                              <button class="btn btn-success btn-block btn-sm" id="preview_list_deliquency_console_cabang_<?php echo $res->nama_area_kerja;?>" href="javascript:void(0)" >Lihat Data</button>
                                            </div>
                                          </div>
                                        </div>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                          <i class="fas fa-times"></i>
                                        </button>
                                      </div>
				              	</div>
				              	<div class="card-body">
                    				<div id="DELIQUENCY_CONSOLE_CABANG_<?php echo $res->nama_area_kerja;?>" style="width:400px;height:400px"></div>
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
<?php $i=0; foreach($output_deliquency_cabang as $row):?>
var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
var kode_area = "<?php echo $row->kode_area; ?>";
var nama_area_kerja = "<?php echo $row->nama_area_kerja;?>";
var rasio_current = "<?php echo $row->rasio_current;?>";
var bd_current = "<?php echo $row->bd_current;?>";
var noa_current = "<?php echo $row->noa_current;?>";

var rasio_0_plus = "<?php echo $row->rasio_0_plus;?>";
var bd_0_plus = "<?php echo $row->bd_0_plus;?>";
var noa_0_plus = "<?php echo $row->noa_0_plus;?>";

var rasio_30_plus = "<?php echo $row->rasio_30_plus;?>";
var bd_30_plus = "<?php echo $row->bd_30_plus;?>";
var noa_30_plus = "<?php echo $row->noa_30_plus;?>";

var rasio_60_plus = "<?php echo $row->rasio_60_plus;?>";
var bd_60_plus = "<?php echo $row->bd_60_plus;?>";
var noa_60_plus = "<?php echo $row->noa_60_plus;?>";

var rasio_90_plus = "<?php echo $row->rasio_90_plus;?>";
var bd_90_plus = "<?php echo $row->bd_90_plus;?>";
var noa_90_plus = "<?php echo $row->noa_90_plus;?>";

var rasio_180_plus = "<?php echo $row->rasio_180_plus;?>";
var bd_180_plus = "<?php echo $row->bd_180_plus;?>";
var noa_180_plus = "<?php echo $row->noa_180_plus;?>";

var rasio_360_plus = "<?php echo $row->rasio_360_plus;?>";
var bd_360_plus = "<?php echo $row->bd_360_plus;?>";
var noa_360_plus = "<?php echo $row->noa_360_plus;?>";

var urlapi = "http://103.234.254.186/riskcan";
url = urlapi + "/dashboard/kredit/kreditrisk_controller/delinquensy_console_cabang";
var chart = new CanvasJS.Chart("DELIQUENCY_CONSOLE_CABANG_" + nama_area_kerja, {
    title: {
        text: nama_area_kerja,
        fontSize: 12
    },
    theme: "light2",
    animationEnabled: true,
    responsive: true,
    maintainAspectRatio: true,
    data: [{
        type: "funnel",
        toolTipContent: "Percentage : <strong>{y}</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
        indexLabelFontSize: 18,
        indexLabel: "{label} - {y}",
        yValueFormatString: "###0.0\"%\"",
        click: explodePie,
        dataPoints: [{
                y: parseFloat(rasio_current),
                yn: parseFloat(noa_current),
                yb: parseFloat(bd_current).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                label: "Current"
                },
                {
                    y: parseFloat(rasio_0_plus),
                    yn: parseFloat(noa_0_plus),
                    yb: parseFloat(bd_0_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "0 Plus"
                },
                {
                    y: parseFloat(rasio_30_plus),
                    yn: parseFloat(noa_30_plus),
                    yb: parseFloat(bd_30_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "30 Plus"
                },
                {
                    y: parseFloat(rasio_60_plus),
                    yn: parseFloat(noa_60_plus),
                    yb: parseFloat(bd_60_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "60 Plus"
                },
                {
                    y: parseFloat(rasio_90_plus),
                    yn: parseFloat(noa_90_plus),
                    yb: parseFloat(bd_90_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "90 Plus"
                },
                {
                    y: parseFloat(rasio_180_plus),
                    yn: parseFloat(noa_180_plus),
                    yb: parseFloat(bd_180_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "180 Plus"
                },
                {
                    y: parseFloat(rasio_360_plus),
                    yn: parseFloat(noa_360_plus),
                    yb: parseFloat(bd_360_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
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

$('input[name="date_deliquency_console_cabang_<?php echo $row->nama_area_kerja ?>"]').change(function(){
  var date = $('input[name="date_deliquency_console_cabang_<?php echo $row->nama_area_kerja ?>"]').val();
  var data = {
    'api' : 'Y',
    'tgl' : date,
    'kode_area' : "<?php echo $row->kode_area;?>"
  };

  $.ajax({
    url      : url,
    type     : "POST",
    data     : data,
    dataType : "JSON",
    success  : function(result){
      var chart = new CanvasJS.Chart("DELIQUENCY_CONSOLE_CABANG_<?php echo $row->nama_area_kerja;?>", {
        title: {
            text: "<?php echo $row->nama_area_kerja;?>",
            fontSize: 12
        },
        theme: "light2",
        animationEnabled: true,
        responsive: true,
        maintainAspectRatio: true,
        data: [{
            type: "funnel",
            toolTipContent: "Percentage : <strong>{y}</strong><br/>NOA : <strong>{yn}</strong><br/>BD : <strong>{yb}</strong>",
            indexLabelFontSize: 18,
            indexLabel: "{label} - {y}",
            yValueFormatString: "###0.0\"%\"",
            click: explodePie,
            dataPoints: [{
                    y: parseFloat(result[<?php echo $i;?>].rasio_current),
                    yn: parseFloat(result[<?php echo $i;?>].noa_current),
                    yb: parseFloat(result[<?php echo $i;?>].bd_current).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                    label: "Current"
                    },
                    {
                        y: parseFloat(result[<?php echo $i;?>].rasio_0_plus),
                        yn: parseFloat(result[<?php echo $i;?>].noa_0_plus),
                        yb: parseFloat(result[<?php echo $i;?>].bd_0_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                        label: "0 Plus"
                    },
                    {
                        y: parseFloat(result[<?php echo $i;?>].rasio_30_plus),
                        yn: parseFloat(result[<?php echo $i;?>].noa_30_plus),
                        yb: parseFloat(result[<?php echo $i;?>].bd_30_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                        label: "30 Plus"
                    },
                    {
                        y: parseFloat(result[<?php echo $i;?>].rasio_60_plus),
                        yn: parseFloat(result[<?php echo $i;?>].noa_60_plus),
                        yb: parseFloat(result[<?php echo $i;?>].bd_60_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                        label: "60 Plus"
                    },
                    {
                        y: parseFloat(result[<?php echo $i;?>].rasio_90_plus),
                        yn: parseFloat(result[<?php echo $i;?>].noa_90_plus),
                        yb: parseFloat(result[<?php echo $i;?>].bd_90_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                        label: "90 Plus"
                    },
                    {
                        y: parseFloat(result[<?php echo $i;?>].rasio_180_plus),
                        yn: parseFloat(result[<?php echo $i;?>].noa_180_plus),
                        yb: parseFloat(result[<?php echo $i;?>].bd_180_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                        label: "180 Plus"
                    },
                    {
                        y: parseFloat(result[<?php echo $i;?>].rasio_360_plus),
                        yn: parseFloat(result[<?php echo $i;?>].noa_360_plus),
                        yb: parseFloat(result[<?php echo $i;?>].bd_360_plus).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,'),
                        label: "360 Plus"
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
    error : function(xhr, status, error){
              var errorMessage  = xhr.status + ': ' + xhr.statusText;
              alert('Error - ' + errorMessage);
    }
  });
});

$('#preview_list_deliquency_console_cabang_<?php echo $row->nama_area_kerja ?>').click(function(){
  var date = $('input[name="date_deliquency_console_cabang_<?php echo $row->nama_area_kerja ?>"]').val();
  var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_deliquency_console_cabang";
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
      $('#kode_cabang').val("<?php echo $row->nama_area_kerja;?>");
      $('#date_deliquency_cabang').val(date);
    },
    error: function(xhr, status, error){
      var errorMessage = xhr.status + ': ' + xhr.statusText
      alert('Error - ' + errorMessage);
    }
  });
});   
<?php $i++; endforeach;?>
</script>

