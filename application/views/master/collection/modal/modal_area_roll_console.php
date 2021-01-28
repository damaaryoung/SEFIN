
             <div class="modal-header">
                 <h4 class="modal-title title-chart-area"></h4>
                 <button type="button" class="close" id="close-modal-1" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="row">
                    <!-- <input type="hidden" name="kode_area" id="kode_area" value=""/> -->
                 	<?php
                    $a = 0;
                    foreach($output_bucket_roll_area as $res):?>
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
                                      <input type="date" class="form-control" name="date_roll_console_area_<?php echo $res->kode_area;?>">
                                        </div>
                                      <div class="dropdown-item">
                                        <!-- <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_roll_console_area_<?php echo $res->kode_area;?>" onclick="bucket_roll_console_export($('#date_roll_console_area_<?php echo $res->kode_area;?>').val(),'<?php echo $res->kode_area;?>')">Lihat Data</button> -->
                                        <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_roll_console_area_<?php echo $res->kode_area;?>">Lihat Data</button>
                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
				              	</div>
				              	<div class="card-body">
                    				<div id="BUCKET_ROLL_CONSOLE_AREA_<?php echo $res->kode_area;?>" style="width:500px;height:500px"></div>
                                    <button type="button" class="btn btn-md btn-danger col-12" id="BUCKET_ROLL_CABANG_<?php echo $res->kode_area;?>" data-toggle="modal" onclick="get_cabang_per_area('<?php echo $res->kode_area;?>')">Tampilkan Cabang</button>
                                    <div id="div_bucket_roll_cabang_<?php echo $res->kode_area;?>"></div>
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
<?php $i=0; foreach($output_bucket_roll_area as $row):?>
    var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
    var kode_area = "<?php echo $row->kode_area ?>";
    var noa_roll = "<?php echo $row->noa_roll;?>";
    var noa_roll_up = "<?php echo $row->noa_roll_up;?>";
    var noa_roll_back = "<?php echo $row->noa_roll_back;?>";

    var roll = "<?php echo $row->roll;?>";
    var roll_up = "<?php echo $row->roll_up;?>";
    var roll_back = "<?php echo $row->roll_back;?>";

    var urlapi = "http://103.234.254.186/riskcan";
    url = urlapi + "/dashboard/kredit/kreditrisk_controller/roll_console_area";

    var chart = new CanvasJS.Chart("BUCKET_ROLL_CONSOLE_AREA_" + kode_area, {
        title: {
            text: kode_area,
            fontSize: 12
        },
        exportEnabled: true,
        animationEnabled: true,
        axisY: {
          title: "UnRoll",
          titleFontColor: "#4F81BC",
          lineColor: "#4F81BC",
          labelFontColor: "#4F81BC",
          tickColor: "#4F81BC",
          includeZero: true
        },
        axisY2: {
          title: "Noa Roll",
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
        data: [{
            type: "column",
            name: "Noa",
            showInLegend: true,     
            yValueFormatString: "#,##0.# Rupiah",
            dataPoints: [
            {
              y: parseFloat(noa_roll),
              label: "Noa UnRoll"
            },
            {
              y: parseFloat(noa_roll_up),
              label: "Noa Roll Up"
            },
            {
              y: parseFloat(noa_roll_back),
              label: "Noa Roll Back"
            }
            ]
        },
        {
          type: "column",
          name: "Unroll",
          showInLegend: true,
          axisYType: "secondary",       
          yValueFormatString: "#,##0.# Rupiah",
          dataPoints: [
            {
                y: parseFloat(roll),
                label: "UnRoll"
            },
            {
                y: parseFloat(roll_up),
                label: "Roll Up"
            },
            {
                y: parseFloat(roll_back),   
                label: "Roll Back"
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
    $('input[name="date_roll_console_area_<?php echo $row->kode_area ?>"]').change(function(){
      var date = $('input[name="date_roll_console_area_<?php echo $row->kode_area ?>"]').val();
      var data = {
         'api' : 'Y',
         'tgl' : date,
         'kode_area' : "<?php echo $row->kode_area ?>"
       };
      $.ajax({
        url      : url,
        type     : "POST",
        data     : data,
        dataType : "JSON",
        success  : function(result){
          var chart = new CanvasJS.Chart("BUCKET_ROLL_CONSOLE_AREA_<?php echo $row->kode_area;?>", {
            title: {
                text: kode_area,
                fontSize: 12
            },
            exportEnabled: true,
            animationEnabled: true,
            axisY: {
              title: "UnRoll",
              titleFontColor: "#4F81BC",
              lineColor: "#4F81BC",
              labelFontColor: "#4F81BC",
              tickColor: "#4F81BC",
              includeZero: true
            },
            axisY2: {
              title: "Noa Roll",
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
            data: [{
                type: "column",
                name: "Noa",
                showInLegend: true,      
                yValueFormatString: "#,##0.# Rupiah",
                dataPoints: [
                {
                  y: parseFloat(result[<?php echo $i;?>].noa_roll),
                  label: "Noa UnRoll"
                },
                {
                  y: parseFloat(result[<?php echo $i;?>].noa_roll_up),
                  label: "Noa Roll Up"
                },
                {
                  y: parseFloat(result[<?php echo $i;?>].noa_roll_back),
                  label: "Noa Roll Back"
                }
                ]
            },
            {
              type: "column",
              name: "Unroll",
              showInLegend: true,      
              axisYType: "secondary",
              yValueFormatString: "#,##0.# Rupiah",
              dataPoints: [
                {
                    y: parseFloat(result[<?php echo $i;?>].roll),
                    label: "UnRoll"
                },
                {
                    y: parseFloat(result[<?php echo $i;?>].roll_up),
                    label: "Roll Up"
                },
                {
                    y: parseFloat(result[<?php echo $i;?>].roll_back),   
                    label: "Roll Back"
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
        },
        error    : function(xhr, status, error){
          var errorMessage = xhr.status + ': ' + xhr.statusText
          alert('Error - ' + errorMessage);
        }
      });
    });
    $('#preview_list_roll_console_area_<?php echo $row->kode_area ?>').click(function(){
      var date = $('input[name="date_roll_console_area_<?php echo $row->kode_area ?>"]').val();
      var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_roll_console_area";
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
            $('#date_roll_console_area').val(date);
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
  var date = $('input[name="date_roll_console"]').val();
    var data = {
        'api': 'Y',
        'kode_area': area,
        'tgl': date
    }
    //alert(data);
    $.ajax({  
      url: "<?php echo base_url();?>modal_bootstrap_controller/modal_cabang_bucket_roll_console",
      data: data,
      type: "POST",
      beforeSend: function(){
        $('#modal-2').modal('show');
        $('.modal-2').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
      },
      success: function(response)
      {
        $('.modal-2').html(response);
        $('.title-chart-cabang').text('Daftar Bucket Roll Cabang ' + area);
        $('#kode_area_to_cabang').val(area);
      },
      error: function()
      {
        alert('gagal');
      }
    });
}
 </script>