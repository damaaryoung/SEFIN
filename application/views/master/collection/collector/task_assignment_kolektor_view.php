<?php echo $params['custom_css'];?>
<script src="<?php echo base_url();?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/sweetalert2/sweetalert2.min.css">
<div class="content-wrapper" id="content">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Task Assignment Collector</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
              <a href="#">Collection</a>
            </li>
            <li class="breadcrumb-item active">Assignment</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="callout callout-info">
        <!-- <h5 class="text-center">
          <strong>Assigment</strong>
        </h5> -->
        <form id="import_assignment_collection" method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="form-group row">
              <label for="inputArea" class="col-sm-2 col-form-label">Area</label>
              <select class="form-control select2 col-sm-3" name="kode_area" id="kode_area">
              </select>
              <label for="inputCabang" class="col-sm-2  offset-sm-1 col-form-label">Cabang</label>
                <select class="form-control select2 col-sm-3" name="kode_cabang" id="kode_cabang">
                </select>
            </div>
            <div class="form-group row">
                <label for="namaKolektor" class="col-sm-2 col-form-label">Nama Kolektor</label>
                <!-- <input type="text" class="form-control col-sm-2" id="nama_kolektor" name="nama_kolektor" placeholder="Nama Kolektor"> -->
                <select class="form-control select2 col-sm-3" name="kode_kolektor" id="kode_kolektor">
                </select>
                <label for="nomorRekening" class="col-sm-2  offset-sm-1 col-form-label">Nomor rekening</label>
                <input type="text" name="no_rekening" id="no_rekening" class="form-control col-sm-3"/>
            </div>
            <hr/>
            <div class="form-group row">
                <label for="inputArea" class="col-sm-2 col-form-label">Kolom</label>
                <select class="form-control col-sm-3" name="field_order" id="field_order">
                    <option value="a.task_code">Task Code</option>
                    <option value="d.deskripsi_group3">Nama Kolektor</option>
                    <option value="c.NO_REKENING">No Rekening</option>
                    <option value="NAMA_NASABAH">Nama Nasabah</option>
                    <option value="os_pokok">OS Pokok</option>
                    <option valie="total_tagihan">Total Tagihan</option>
                </select>
                <label for="inputArea" class="col-sm-2  offset-sm-1 col-form-label">Order By</label>
                <select class="form-control col-sm-3" name="order_by" id="order_by">
                    <option value="ASC">Ascending</option>
                    <option value="DESC">Descending</option>
                </select>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-success btn-md" id="btn_refresh">Filter</button>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
<section class="content">
    <div class="container-fluid">
      <div class="callout callout-info">
        <!-- <h5 class="text-center">
          <strong>Assigment</strong>
        </h5> -->
        <div class="table-responsive">
        <table id="listData1" width="100%" class="table table-striped table-bordered display" data-turbolinks="false" style="white-space: nowrap; font-size:10px">
          <thead>
            <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Status</th>
            <th>Assignment Date</th>
            <th>Task Code</th>
            <th>Kode Kolektor</th>
            <th>Nama Kolektor</th>
            <th>No Rekening</th>
            <th>Nama Nasabah</th>
            <th>FT Hari</th>
            <th>FT Bulan</th>
            <th>OS Pokok</th>
            <th>Collect Fee</th>
            <th>Total Tagihan</th>
            </tr>
          </thead>
          <tbody>
          </tbody>  
        </table>
        </div>
      </div>
    </div>
  </section>
</div>
<script>
$('#kode_area').change(function(){
    // $.ajax({
    //     url:"<?php echo base_url();?>assignment_collection/get_kode_nasabah",
    //     type:"POST",
    //     dataType:"JSON",
    //     data:{
    //         "kode_kolektor" : $('#kode_kolektor option:selected').val()
    //     },
    //     success: function(dataNasabah){
    //         $('#nasabah_id option').remove();
    //         $('#nasabah_id').prepend($('<option>',{
    //                 value: '',
    //                 text: 'PILIH'
    //             }));
    //         for(var i=0;i<dataNasabah.length;i++){
    //             $('#nasabah_id').append($('<option>',{
    //                 value: dataNasabah[i].NASABAH_ID,
    //                 text: dataNasabah[i].NAMA_NASABAH
    //             }));
    //         }
    //     }
    // });
    // $.ajax({
    //     url:"<?php echo base_url();?>assignment_collection/get_no_rekening",
    //     type:"POST",
    //     dataType:"JSON",
    //     data:{
    //         "kode_area" : $('#kode_area option:selected').val(),
    //         "kode_cabang" : $('#kode_cabang option:selected').val(),
    //         "kode_kolektor" : $('#kode_kolektor option:selected').val(),
    //     },
    //     success: function(dataNoRekening){
    //         $('#no_rekening option').remove();
    //         $('#no_rekening').prepend($('<option>',{
    //             value: '',
    //             text:'PILIH'
    //         }));
    //         for(var i = 0;i<dataNoRekening.length;i++){
    //             $('#no_rekening').append($('<option>',{
    //                 value: dataNoRekening[i].NO_REKENING,
    //                 text: dataNoRekening[i].NO_REKENING
    //             }));
    //         }
    //     }
    // });
});
    

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
            $('#kode_kolektor option').remove();
            $('#kode_kolektor').prepend($('<option>',{
                    value: '',
                    text: 'PILIH'
            }));  
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


    function modal_nasabah(nasabah_id){
        $.ajax({
            url: "<?php echo base_url();?>assignment_collection/modal_data_nasabah",
            type: "POST",
            data:{
                "nasabah_id": nasabah_id
            },
            beforeSend: function() {
                $('#modal-1').modal('show');
                $('.modal-1').html('<center><p><i class="fa fa-spinner fa-spin fa-3x"></i></p>Loading..</center>');
            },
            success: function(response)
            {
                $('.modal-1').html(response);
                $('#nama_nasabah_mod').html(response[0].NAMA_NASABAH);
            },
            error: function()
            {
                alert('gagal');
            }
        });
    }    

    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

</script>
<?php echo $params['custom_js'];?>