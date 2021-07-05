<?php echo $params['custom_css'];?>
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
                        <li class="breadcrumb-item active">Report Data Collection Activity</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="callout callout-info">
                <h5 class="text-center">
                    <strong>Report Data Collection Activity</strong>
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
                        <div class="table-responsive" id="table-responsive">
                            <table id="listData1" width="100%" class="table table-striped table-bordered display" data-turbolinks="false" style="white-space: nowrap; font-size:10px">
                              <thead>
                                <tr>
                                    <th rowspan=2>No.</th>
                                    <th rowspan=2>Tanggal</th>
                                    <th rowspan=2>Area</th>
                                    <th rowspan=2>Kode Cabang</th>
                                    <th rowspan=2>Nama Cabang</th>
                                    <th rowspan=2>Kode Kolektor</th>
                                    <th rowspan=2>Nama Kolektor</th>
                                    <th colspan=2><center>Assignment</center></th>
                                    <th rowspan=2>Visit</th>
                                    <th rowspan=2>Not Visit</th>
                                    <th colspan=2><center>Hasil Visit</center></th>
                                    <th rowspan=2>Tanggal Janji Bayar</th>
                                </tr>
                                <tr>
                                    <th>No Rekening</th>
                                    <th>Nama Nasabah</th>
                                    <th>Interaksi</th>
                                    <th>Janji Bayar</th>
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
            if(kode_cabang == 'ALL'){
                $('#pic option[value=all]').attr('selected','selected');    
            }else{
                $('#pic option[value=per_pic]').attr('selected','selected');
            }
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
   

function report_data_collection_activity(){
    var kode_area = $("#kode_area option:selected").val();
    var kode_cabang = $("#kode_cabang option:selected").val();
    var kode_kolektor = $("#kode_kolektor option:selected").val();
    var pic = $("#get_pic option:selected").val();
    var from = $('#from').val();
    var to = $('#to').val();

    var winURL ="<?php echo base_url('export/export_report_data_collection_activity');?>";
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
<?php echo $params['custom_js'];?>