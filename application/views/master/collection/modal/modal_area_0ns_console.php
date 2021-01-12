
             <div class="modal-header">
                 <h4 class="modal-title title-chart-area"></h4>
                 <button type="button" class="close" id="close-modal-1" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="row">
                    <input type="hidden" name="kode_area" id="kode_area" value=""/>
                 	<?php
                            $a = 0;
                            foreach($output_zero_ns_area as $res):?>
                    	<div class="col-md-6">
				            <div class="card">
				              	<div class="card-header d-flex p-0">
				                	<h3 class="card-title p-3"><?php echo $res->kode_area;?></h3>
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
                                      <input type="date" class="form-control" name="date_0ns_console_area_<?php echo $res->kode_area;?>">
                                        </div>
                                      <div class="dropdown-item">
                                        <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_0ns_console_area_<?php echo $res->kode_area;?>">Lihat Data</button>
                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                          </div>
				              	</div>
				              	<div class="card-body">
                    				<div id="0NS_CONSOLE_AREA_<?php echo $res->kode_area;?>" style="width:400px;height:400px"></div>
                                    <button type="button" class="btn btn-md btn-danger col-12" id="0NS_CABANG_<?php echo $res->kode_area;?>" data-toggle="modal" onclick="get_cabang_per_area('<?php echo $res->kode_area;?>')">Tampilkan Cabang</button>
                                    <div id="div_0ns_cabang_<?php echo $res->kode_area;?>"></div>
                    			</div>
                    		</div>
                    	</div>
                    <?php $a++; endforeach ?>
                 </div>
             </div>
 <!-- Modal -->

 <script>
  $('#close-modal-1').click(function(){
    $('#modal-1').modal('hide');
  });
<?php $i = 0; foreach($output_zero_ns_area as $row):?>
    var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
    var kode_area = "<?php echo $row->kode_area ?>";
    var rasio_paid = "<?php echo $row->rasio_paid;?>";
    var bd_paid = "<?php echo $row->bd_paid;?>";
    var noa_paid = "<?php echo $row->noa_paid;?>";

    var rasio_unpaid = "<?php echo $row->rasio_unpaid;?>";
    var bd_unpaid = "<?php echo $row->bd_unpaid;?>";
    var noa_unpaid = "<?php echo $row->noa_unpaid;?>";

    var urlapi = "http://103.234.254.186/riskcan";
    url = urlapi + "/dashboard/kredit/kreditrisk_controller/ns_console_area";

    var chart = new CanvasJS.Chart("0NS_CONSOLE_AREA_<?php echo $row->kode_area;?>", {
        title: {
            text: kode_area,
            fontSize: 12
        },
        theme: "light2",
                    data: [{
                        type: "pie",
                        toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                        showInLegend: true,
                        indexLabelFontSize: 18,
                        radius: 100,
                        indexLabel: "{label}: {y}%",
                        legendText: "{label}: {y}%",
                        dataPoints: [{
                                y: parseFloat(rasio_paid),
                                yn: parseFloat(noa_paid),
                                yb: parseFloat(bd_paid),
                                label: "Paid"
                            },
                            {
                                y: parseFloat(rasio_unpaid),
                                yn: parseFloat(noa_unpaid),
                                yb: parseFloat(bd_unpaid),
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

    $('input[name="date_0ns_console_area_<?php echo $row->kode_area ?>"]').change(function(){
      var date = $('input[name="date_0ns_console_area_<?php echo $row->kode_area ?>"]').val();
      var data = {
        'api' : 'Y',
        'tgl' : date,
        'kode_area' : "<?php echo $row->kode_area ?>"
      };
      $.ajax({
        url      : url,
        type     : "POST",
        data     : data,
        dataType: "JSON",
        success: function(result){
          var chart = new CanvasJS.Chart("0NS_CONSOLE_AREA_<?php echo $row->kode_area ?>", {
              title: {
                  text: kode_area,
                  fontSize: 12
              },
              theme: "light2",
                    data: [{
                        type: "pie",
                        toolTipContent: "{indexLabel}, <strong>{y}</strong><br/>Noa, <strong>{yn}</strong><br/>baki debet, <strong>{yb}</strong>",
                        showInLegend: true,
                        indexLabelFontSize: 18,
                        radius: 100,
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


  $('#preview_list_0ns_console_area_<?php echo $row->kode_area ?>').click(function(){
    var date = $('input[name="date_0ns_console_area_<?php echo $row->kode_area ?>"]').val();
    var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_0ns_console_area";
    var data = {
      'api' : 'Y',
      'tgl' : date,
      'kode_area' : "<?php echo $row->kode_area ?>"
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
        $('#date_0ns_console_area').val(date);
        $('#kode_area').val("<?php echo $row->kode_area;?>");
      },
      error: function(xhr, status, error){
        var errorMessage = xhr.status + ': ' + xhr.statusText
        alert('Error - ' + errorMessage);
      }
    });
  });  
<?php $i++; endforeach;?>
function get_cabang_per_area(area){
  var date = $('input[name="date_bucket0_ns_console"]').val();
    var data = {
        'api': 'Y',
        'kode_area': area,
        'tgl': date
    }
    //alert(data);
    $.ajax({  
      url: "<?php echo base_url();?>modal_bootstrap_controller/modal_cabang_0ns_console",
      data: data,
      type: "POST",
      beforeSend: function(){
        $('#modal-2').modal('show');
        $('.modal-2').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
      },
      success: function(response)
      {
        $('.modal-2').html(response);
        $('.title-chart-cabang').text('Daftar Bucket 0 NS Cabang ' + area);
        $('#kode_area_to_cabang').val(area);
      },
      error: function()
      {
        alert('gagal');
      }
    });
}
 </script>