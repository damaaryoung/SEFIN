<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Collection Activity</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Collection Activity</a>
                        </li>
                        <li class="breadcrumb-item active">Report Data History Collection Activity</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="callout callout-info">
                <h5 class="text-center">
                    <strong>Report Data History Collection Activity</strong>
                </h5>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                            <div class="form-group row">
                                <label for="inputArea" class="col-sm-1 col-form-label">Area</label>
                                <select class="form-control col-sm-2" name="kode_area" id="kode_area">
                                    
                                </select>
                                <label for="inputPeriode" class="col-sm-1 offset-sm-1 col-form-label">Periode</label>
                                <input type="date" class="form-control col-sm-2" name="from" id="from"/>
                                <label class="col-sm-1 col-form-label">
                                    <center>-</center>
                                </label>
                                <input type="date" class="form-control col-sm-2" name="to" id="to"/>
                            </div>
                            <div class="form-group row">
                                <label for="inputCabang" class="col-sm-1 col-form-label">Cabang</label>
                                <select class="form-control col-sm-2" name="kode_cabang" id="kode_cabang">
                                </select>
                                <label for="inputKolektor" class="col-sm-1  offset-sm-1 col-form-label">Kolektor</label>
                                <select class="form-control col-sm-2" name="kode_kolektor" id="kode_kolektor">
                                    
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="inputPIC" class="col-sm-1  offset-sm-4 col-form-label">PIC</label>
                                <select class="form-control col-sm-2" name="get_pic" id="get_pic">
                                    <option value="all">ALL</option>
                                    <option value="per_pic">PER PIC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="btn_refresh">Filter</button>
                                <button type="button" class="btn btn-primary" id="btn_export" onclick="report_data_collection_activity()">Export</button>
                            </div>
                        
                    </div>
                    
                </div>

            </div>
        </div>
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="report_history-tab" data-toggle="pill" href="#custom-tabs-report_history" role="tab" aria-controls="custom-tabs-Report_history" aria-selected="true">History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-summary-tab" data-toggle="pill" href="#custom-tabs-summary" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Summary</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                 <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-report_history" role="tabpanel" aria-labelledby="custom-tabs-report_history-tab">
                     <div class="table-responsive">
                            <table id="listData" width="100%" class="table table-striped table-bordered display" data-turbolinks="false" style="white-space: nowrap; font-size:10px">
                              <thead>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Area</th>
                                    <th rowspan="2">Kode Cabang</th>
                                    <th rowspan="2">Nama Cabang</th>
                                    <th rowspan="2">Kode Kolektor</th>
                                    <th rowspan="2">Nama Kolektor</th>
                                    <th colspan="2">Assignment</th>
                                    <th rowspan="2">Visit</th>
                                    <th rowspan="2">Not Visit</th>
                                    <th colspan="2">Hasil Visit</th>
                                    <th rowspan="2">Tanggal Janji Bayar</th>
                                    <th rowspan="2">Karakter Debitur</th>
                                    <th rowspan="2">Total Penghasilan</th>
                                    <th rowspan="2">Kondisi Pekerjaan</th>
                                    <th rowspan="2">Aset Debitur</th>
                                    <th rowspan="2">Case Debitur</th>
                                    <th rowspan="2">Next Action</th>
                                </tr>
                                <tr>
                                    <th>No Rekening</th>
                                    <th>Nama Nasabah</th>
                                    <th>Interaksi</th>
                                    <th>Janji bayar</th>
                                    
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>  
                            </table>
                            </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-summary" role="tabpanel" aria-labelledby="custom-tabs-summary-tab">
                     <div class="table-responsive">
                            <table id="listData2" width="100%" class="table table-striped table-bordered display" data-turbolinks="false" style="white-space: nowrap; font-size:10px">
                              <thead>
                                <tr>
                                    <th rowspan="2">No.</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Area</th>
                                    <th rowspan="2">Kode Cabang</th>
                                    <th rowspan="2">Nama Cabang</th>
                                    <th rowspan="2">Kode Kolektor</th>
                                    <th rowspan="2">Nama Kolektor</th>
                                    <th rowspan="2">Assignment</th>
                                    <th rowspan="2">Visit</th>
                                    <th rowspan="2">Not Visit</th>
                                    <th colspan="2">Hasil Visit</th>
                                    <th colspan="2">Success Rate</th>
                                    <th rowspan="2">Success Rate PTP</th>
                                </tr>
                                <tr>
                                    <th>Interaksi</th>
                                    <th>Janji bayar</th>
                                    <th>Visit</th>
                                    <th>Interaksi</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>  
                            </table>
                            </div>
                  </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>
    </section>
</div>
<script>
$(document).ready(function(){
        $.ajax({
            url:"<?php echo base_url();?>assignment_collection/get_area_kerja",
            type:"POST",
            dataType:"JSON",
            beforeSend: function(){
                $('#kode_area option').remove();
                $('#kode_area').prepend($('<option>',{
                    value: 'konsolidasi',
                    text: 'Konsolidasi'
                }));
                $('#kode_cabang').prepend($('<option>',{
                    value: 'ALL',
                    text: 'ALL'
                }));
                $('#kode_kolektor').prepend($('<option>',{
                    value: 'ALL',
                    text: 'ALL'
                }));
            },
            success: function(data1){
                for(var i=0;i<data1.length;i++){
                    $('#kode_area').append($('<option>',{
                        value: data1[i].kode_area,
                        text: data1[i].kode_area
                    }));
                }
            }
        });
    });    

    $.ajax({
        url:"<?php echo base_url();?>assignment_collection/get_kode_kolektor",
        type:"POST",
        dataType:"JSON",
        data:{
            "kode_cabang":$("#kode_cabang option:selected").val()
        },
        success: function(data3){
            $('#kode_kolektor option').remove();
            $('#kode_kolektor').prepend($('<option>',{
                    value: 'ALL',
                    text: 'ALL'
            }));
            for(var i=0;i<data3.length;i++){
                $('#kode_kolektor').append($('<option>',{
                    value: data3[i].deskripsi_group3,
                    text: data3[i].deskripsi_group3
                }));
            }

        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
        }
    });

$('#kode_area').click(function(){
    var kode_area = $("#kode_area option:selected").val();
    $.ajax({
        url:"<?php echo base_url();?>assignment_collection/get_kode_cabang",
        type:"POST",
        dataType:"JSON",
        data:{
            "kode_area":kode_area
        },
        success: function(data2){
            $('#kode_cabang option').remove();
            $('#kode_cabang').prepend($('<option>',{
                    value: 'ALL',
                    text: 'ALL'
            }));
            var kode_cabang = $("#kode_cabang option:selected").val();
            if(kode_cabang == 'ALL'){
                $('#pic option[value=all]').attr('selected','selected');    
            }else{
                $('#pic option[value=per_pic]').attr('selected','selected');
            }
            for(var i=0;i<data2.length;i++){
                    $('#kode_cabang').append($('<option>',{
                        value: data2[i].kode_kantor,
                        text: data2[i].nama_area_kerja
                    }));
                }
        }
    });
    //alert(kode_area);

$('#kode_area,#kode_cabang').click(function(){
    var kode_area = $("#kode_area option:selected").val();
    var kode_cabang = $("#kode_cabang option:selected").val();
    if(kode_cabang == 'ALL'){
        $('#pic option[value=all]').attr('selected','selected');    
    }else{
        $('#pic option[value=per_pic]').attr('selected','selected');
    }
    $.ajax({
        url:"<?php echo base_url();?>assignment_collection/get_kode_kolektor",
        type:"POST",
        dataType:"JSON",
        data:{
            "kode_cabang":kode_cabang,
            "kode_area":kode_area
        },
        success: function(data3){
            $('#kode_kolektor option').remove();
            $('#kode_kolektor').prepend($('<option>',{
                    value: 'ALL',
                    text: 'ALL'
            }));
            for(var i=0;i<data3.length;i++){
                $('#kode_kolektor').append($('<option>',{
                    value: data3[i].deskripsi_group3,
                    text: data3[i].deskripsi_group3
                }));
            }

        },
        error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
        }
    });
});



});

  
  // get_dataTable(nama_kolektor,nama_kolektor);
   $('#btn_refresh').click(function(){
    get_dataTable(1);
            });
function get_dataTable(draw){
  
  var kode_area = $("#kode_area option:selected").val();
  var kode_cabang = $("#kode_cabang option:selected").val();
  var kode_kolektor = $("#kode_kolektor option:selected").val();
  var pic = $("#get_pic option:selected").val();
  var from = $("#from").val();
  var to = $("#to").val();
  var table = $("#listData").DataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": '<"bottom"lpf>rt<"top"ip><"clear">',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    fixedHeader: true,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "<?php echo base_url();?>assignment_collection/ajax_list_history_collection_activity",
                        "type": "POST",
                        "data":{
                            "kode_area": kode_area,
                            "kode_cabang" : kode_cabang,
                            "kode_kolektor" : kode_kolektor,
                            "pic" : pic,
                            "from" : from,
                            "to" : to
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[100,200,500,1000],[100,200,500,1000]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });



    var table2 = $("#listData2").DataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": '<"bottom"lpf>rt<"top"ip><"clear">',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    fixedHeader: true,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "<?php echo base_url();?>assignment_collection/ajax_list_summary_collection_activity",
                        "type": "POST",
                        "data":{
                            "kode_area": kode_area,
                            "kode_cabang" : kode_cabang,
                            "kode_kolektor" : kode_kolektor,
                            "pic" : pic,
                            "from" : from,
                            "to" : to
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[100,200,500,1000],[100,200,500,1000]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });



  
    if (draw == 1) {
        table.destroy();
        table2.destroy();
    }
}

function report_data_collection_activity(){
    var kode_area = $("#kode_area option:selected").val();
    var kode_cabang = $("#kode_cabang option:selected").val();
    var kode_kolektor = $("#kode_kolektor option:selected").val();
    var pic = $("#get_pic option:selected").val();
    var from = $('#from').val();
    var to = $('#to').val();

    var winURL ="<?php echo base_url('export/export_report_data_history_collection_activity');?>";
    var winName = "LAPORAN";
    var windowoption = 'toolbar=no,location=no,status=yes,menubar=no,scrollbars=yes,height=350px, width=350px';
    var input=[];
    input.push("<input type='hidden' name='kode_area' value='"+kode_area+"'><input type='hidden' name='kode_cabang' value='"+kode_cabang+"'><input type='hidden' name='kode_kolektor' value='"+kode_kolektor+"'><input type='hidden' name='pic' value='"+pic+"'><input type='hidden' name='from' value='"+from+"'><input type='hidden' name='to' value='"+to+"'>");
    $('<form/>').css({'position':'relative'}).attr({'id':'frmprint','method':'post', 'action':winURL, 'target':winName})
       .html(input.join(''))
       .appendTo($('body'));

    var myWindowPrint = window.open('', winName,windowoption);
    $('body').find('form#frmprint').attr('target',winName).submit().remove();
}
</script>