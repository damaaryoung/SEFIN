<style>
#map {
  height: 100%;
}
</style>
<div class="content-wrapper" id="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Report</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Collection Activity</a>
                        </li>
                        <li class="breadcrumb-item active">Tracker Data Visit Kolektor</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="callout callout-info">
                <h5 class="text-center">
                    <strong>Report Tracker Data Visit Kolektor</strong>
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
                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="btn_refresh">Filter</button>
                                <button type="button" class="btn btn-primary" id="btn_export" onclick="export_data_tracker_visit_kolektor()">Export</button>
                            </div>
                        <div class="table-responsive" id="table-responsive">
                            <table id="listData" width="100%" class="table table-striped table-bordered display" data-turbolinks="false" style="white-space: nowrap; font-size:10px">
                              <thead>
                                <tr>
                                    <th rowspan = 2>Task Code</th>
                                    <th rowspan = 2>Nama Kolektor</th>
                                    <th rowspan = 2>No Rekening</th>
                                    <th rowspan = 2>Nama Nasabah</th>
                                    <th rowspan = 2>Total Tunggakan</th>
                                    <th colspan = 2>Visit tempat tinggal</th>
                                    <th colspan = 2>Visit Jaminan</th>
                                    <th rowspan = 2>Action</th>
                                </tr>
                                <tr>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th>
                                    <th>Longitude</th>
                                </tr>
                              </thead>
                              <tbody>
                              </tbody>  
                            </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-1" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content modal-1">
            <div class="modal-header">
    <h4 class="modal-title title-chart-area">Tracker Visit Kolektor</h4>
    <button type="button" class="close" id="close-modal-1" aria-label="Close" data-dismiss="modal">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <div class="location-map" id="location-map">
                <div style="width: 600px; height: 400px;" id="map_canvas"></div>
</div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
        $('#kode_area').change(function(){
    var kode_area = $("#kode_area option:selected").val();
    var kode_cabang = $("#kode_cabang option:selected").val();
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
                    value: '',
                    text: 'PILIH'
            }));
            for(var i=0;i<data2.length;i++){
                    $('#kode_cabang').append($('<option>',{
                        value: data2[i].nama_area_kerja,
                        text: data2[i].nama_area_kerja
                }));
            }
            // $('#kode_kolektor option').remove();
            // $('#kode_kolektor').prepend($('<option>',{
            //         value: '',
            //         text: 'PILIH'
            // }));  
            $.ajax({
                    url:"<?php echo base_url();?>assignment_collection/get_kode_kolektor",
                    type:"POST",
                    dataType:"JSON",
                    data:{
                        "kode_area": kode_area,
                        "nama_area_kerja": kode_cabang
                    },
                    success: function(dataKolektor){
                        $('#kode_kolektor option').remove();
                        $('#kode_kolektor').prepend($('<option>',{
                            value: '',
                            text: 'PILIH'
                        }));
                        for(var i=0;i<dataKolektor.length;i++){
                            $('#kode_kolektor').append($('<option>',{
                                value: dataKolektor[i].deskripsi_group3,
                                text: dataKolektor[i].deskripsi_group3
                            }));
                        }
                    }
                });
        }
        
    });
  });

$('#kode_cabang').change(function(){
    var kode_area = $("#kode_area option:selected").val();
    var kode_cabang = $("#kode_cabang option:selected").val();
                $.ajax({
                    url:"<?php echo base_url();?>assignment_collection/get_kode_kolektor",
                    type:"POST",
                    dataType:"JSON",
                    data:{
                        "kode_area": kode_area,
                        "nama_area_kerja": kode_cabang
                    },
                    success: function(dataKolektor){
                        $('#kode_kolektor option').remove();
                        for(var i=0;i<dataKolektor.length;i++){
                            $('#kode_kolektor').append($('<option>',{
                                value: dataKolektor[i].deskripsi_group3,
                                text: dataKolektor[i].deskripsi_group3
                            }));
                        }
                    }
                });
            });
$(document).ready(function(){
        $.ajax({
            url:"<?php echo base_url();?>assignment_collection/get_area_kerja_per_pic",
            type:"POST",
            dataType:"JSON",
            beforeSend: function(){
                $('#kode_area option').remove();
                $('#kode_area').prepend($('<option>',{
                    value: '',
                    text: 'KONSOLIDASI'
                }));
                $('#kode_area').prepend($('<option>',{
                    value: 'PILIH',
                    text: 'PILIH'
                }));

                $('#kode_cabang').prepend($('<option>',{
                    value: '',
                    text: 'PILIH'
                }));
                $('#kode_kolektor').prepend($('<option>',{
                    value: '',
                    text: 'PILIH'
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
                    // fixedHeader: true,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "<?php echo base_url();?>assignment_collection/ajax_list_tracker_data_visit_kolektor",
                        "type": "POST",
                        "data":{
                            "kode_area": kode_area,
                            "kode_cabang" : kode_cabang,
                            "kode_kolektor" : kode_kolektor,
                            "pic" : pic,
                            "from" : from,
                            "to" : to
                        },
                        // beforeSend: function(){
                        //     $('#table-responsive').html("<div class='d-flex justify-content-center'><div class='spinner-border' role='status'><span class='sr-only'>Loading...</span></div></div>");
                        // }
                         
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
    }
  
}

function export_data_tracker_visit_kolektor(){
    var kode_area = $("#kode_area option:selected").val();
    var kode_cabang = $("#kode_cabang option:selected").val();
    var kode_kolektor = $("#kode_kolektor option:selected").val();
    var from = $('#from').val();
    var to = $('#to').val();

    var winURL ="<?php echo base_url('export/export_data_tracker_visit_kolektor');?>";
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


// Code goes here

$(document).ready(function() {
  var map = null;
  var myMarker;
  var myLatlng;

  function initializeGMap(lat, lng, info) {
    myLatlng = new google.maps.LatLng(lat, lng);

    var myOptions = {
      zoom: 12,
      zoomControl: true,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    const infoWindow = new google.maps.InfoWindow();
    infoWindow.setContent("<img src='https://tagihbos.com/"+info+"' style='width:100px;height:100px;object-fit: fill'>");
    myMarker = new google.maps.Marker({
      position: myLatlng
    });
    myMarker.addListener("click",()=>{infoWindow.open(map, myMarker)});
    myMarker.setMap(map);
  }

  // Re-init map before show modal
  $('#myModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    initializeGMap(button.data('lat'), button.data('lng'), button.data('info'));
    $("#location-map").css("width", "100%");
    $("#map_canvas").css("width", "100%");
  });

  // Trigger map resize event after modal shown
  $('#myModal').on('shown.bs.modal', function() {
    google.maps.event.trigger(map, "resize");
    map.setCenter(myLatlng);
  });
});
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGDRkiKQyWXhEGK8eD5rFkN2WyIMpSqQs" async defer></script>
