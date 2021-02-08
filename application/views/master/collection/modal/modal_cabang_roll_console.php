
             <div class="modal-header">
                 <h4 class="modal-title title-chart-cabang"></h4>
                 <!-- <div class="card-tools p-3">
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
                            <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_roll_console_cabang_<?php echo $res->nama_area_kerja;?>" onclick="bucket_roll_console_export($('#date_roll_console_cabang_<?php echo $res->nama_area_kerja;?>').val(),'<?php echo $res->nama_area_kerja;?>')">Lihat Data</button>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                      </button>
                    </div> -->
                 <button type="button" class="close" id="close-modal-2" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                <div class="row">
                  <?php
              $a = 0;
              foreach($output_bucket_roll_cabang as $res):?>
                    <input type="hidden" name="kode_cabang" id="kode_cabang" value=""/>
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
                                      <input type="date" class="form-control" name="date_roll_console_cabang_<?php echo str_replace(" ", "", $res->nama_area_kerja);?>">
                                        </div>
                                      <div class="dropdown-item">
                                        <!-- <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_roll_console_area_<?php echo $res->kode_area;?>" onclick="bucket_roll_console_export($('#date_roll_console_area_<?php echo $res->kode_area;?>').val(),'<?php echo $res->kode_area;?>')">Lihat Data</button> -->
                                        <button class="btn btn-success btn-block btn-sm" href="javascript:void(0)" id="preview_list_roll_console_cabang_<?php echo str_replace(" ", "", $res->nama_area_kerja);?>">Lihat Data</button>
                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                  </button>
                                </div>
                                </div>
                                <div class="card-body">
                                    <div id="BUCKET_ROLL_CONSOLE_CABANG_<?php echo str_replace(" ","",$res->nama_area_kerja);?>" style="width:500px;height:500px"></div>
                                </div>
                            </div>
                        </div>
                    <?php $a++; endforeach ?>
                 </div>
             </div>
 <!-- Modal -->

 <script>
  $('#close-modal-2').click(function(){
    $('#modal-2').modal('hide');
  });
<?php $i=0; foreach($output_bucket_roll_cabang as $row):?>
    var loading = '<div class="d-flex justify-content-center"><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div>';
    var kode_area = "<?php echo $row->kode_area ?>";
    var nama_area_kerja = "<?php echo str_replace(" ","",$row->nama_area_kerja) ?>";
    var noa_roll = "<?php echo $row->noa_roll;?>";
    var noa_roll_up = "<?php echo $row->noa_roll_up;?>";
    var noa_roll_back = "<?php echo $row->noa_roll_back;?>";

    var roll = "<?php echo $row->roll;?>";
    var roll_up = "<?php echo $row->roll_up;?>";
    var roll_back = "<?php echo $row->roll_back;?>";

    var urlapi = "http://103.234.254.186/riskcan";
    url = urlapi + "/dashboard/kredit/kreditrisk_controller/roll_console_cabang";

    var chart = new CanvasJS.Chart("BUCKET_ROLL_CONSOLE_CABANG_" + nama_area_kerja, {
        title: {
            text: nama_area_kerja,
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

$('input[name="date_roll_console_cabang_<?php echo $row->nama_area_kerja; ?>"]').change(function(){
    var date = $('input[name="date_roll_console_cabang_<?php echo $row->nama_area_kerja; ?>"]').val();
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

      },
      error    : function(xhr, status, error){

      }
  });
});

$('input[name="date_roll_console_cabang_<?php echo $row->nama_area_kerja ?>"]').change(function(){
      var date = $('input[name="date_roll_console_cabang_<?php echo $row->nama_area_kerja ?>"]').val();
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
          var chart = new CanvasJS.Chart("BUCKET_ROLL_CONSOLE_CABANG_<?php echo $row->nama_area_kerja;?>", {
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

$('#preview_list_roll_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja);?>').click(function(){
  var date = $('input[name="date_roll_console_cabang_<?php echo str_replace(" ","",$row->nama_area_kerja); ?>"]').val();
  var url = "<?php echo base_url();?>modal_bootstrap_controller/modal_list_roll_console_cabang";
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
        $('#date_roll_console_cabang').val(date);
        $('#kode_cabang').val("<?php echo $row->nama_area_kerja;?>");
      },
      error: function(xhr, status, error){
        var errorMessage = xhr.status + ': ' + xhr.statusText
        alert('Error - ' + errorMessage);
      }
    });
  });

function bucket_roll_console_export(tgl,cabang) {
    // var data_tgl = $('input[name="date_roll_console_area_<?php echo $row->kode_area ?>"]').val();
    // var data_kode_area = "<?php echo $row->kode_area ?>";
    var winURL        = "<?php echo base_url('modal_bootstrap_controller/bucket_roll_console_cabang_export') ?>";
    var winName       = "LAPORAN";
    var windowoption  = 'toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,height=350px, width=350px';

    var input=[];
    input.push("<input type='hidden' name='tgl' value='"+tgl+"'><input type='hidden' name='kode_cabang' value='"+cabang+"'>");


    $('<form/>').css({'position':'relative'}).attr({'id':'frmprint','method':'post', 'action':winURL, 'target':winName})
       .html(input.join(''))
       .appendTo($('body'));

    var myWindowPrint = window.open('', winName,windowoption);
    $('body').find('form#frmprint').attr('target',winName).submit().remove();
}
<?php $i++; endforeach;?>
 </script>