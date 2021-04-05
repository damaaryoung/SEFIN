<?php echo $params['custom_css'];?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/plugins/sweetalert2/sweetalert2.min.css">
<div class="content-wrapper" id="content">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Master All Assignment Collection</h1>
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
          <div class="form-group">
            <label>Import File</label>
            <input type="hidden" name="nama_file" id="nama_file"/>
            <div class="custom-file col-md-6">
              <input type="file" class="custom-file-input" id="import_file" name="import_file">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
          </div>
          <button type="button" class="btn btn-primary" id="btn_submit">Submit</button>
        </form>
        <form class="form-horizontal" id="form_filter">
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
                <label for="namaNasabah" class="col-sm-2  offset-sm-1 col-form-label">Nama Nasabah</label>
                <select class="form-control select2 col-sm-3" name="nasabah_id" id="nasabah_id">
                </select>
                <div class="col-sm-3">
                    <button type="button" class="btn btn-success btn-sm" id="btn_refresh">Filter</button>
                </div>
            </div>
        </form>
        <div class="table-responsive">
        <table id="listData" width="100%" class="table table-striped table-bordered display" data-turbolinks="false" style="white-space: nowrap; font-size:10px">
        <thead>
        <!-- <tr>
            <th>No.</th>
            <th>Area</th>
            <th>Kode Kantor</th>
            <th>Kode Kolektor</th>
            <th>Nama Kolektor</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>Kode Pos</th>
            <th>No Rekening</th>
            <th>ID Nasabah</th>
            <th>Nama Nasabah</th>
            <th>FT Angsuran</th>
        </tr> -->
        <tr>
            <th>No.</th>
            <th>Wilayah</th>
            <th>Nama Kolektor</th>
            <th>No Rekening</th>
            <th>Nama Nasabah</th>
            <th>FT Angsuran</th>
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

<div id="modal-1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-1" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content modal-1"></div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
//Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

$('#import_file').change(function(e){
  $('#nama_file').val($('#import_file')[0].files[0]['name']); 
});
$('#btn_submit').click(function(e){
    e.preventDefault();
    const fileupload = $('#import_file')[0].files[0];
      var nama_file = $('#nama_file').val();
 
      if (nama_file!="" && fileupload!="") {
            let formData = new FormData();
            formData.append('fileupload', fileupload);
            formData.append('nama_file', nama_file);
        $.ajax({
                type: 'POST',
                url: "<?php echo base_url();?>assignment_collection/import",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(){
                  
                },
                success: function(data) {
                    // alert(data);
                    swal.fire(
                    {
                      'title' : 'Progress Import',
                      'html'  : data
                    }
                    );
                },
                error: function () {
                    alert("Data Gagal Diupload");
                }
        });
      }
});
$('#kode_kolektor').change(function(){
    $.ajax({
        url:"<?php echo base_url();?>assignment_collection/get_kode_nasabah",
        type:"POST",
        dataType:"JSON",
        data:{
            "kode_kolektor" : $('#kode_kolektor option:selected').val()
        },
        success: function(dataNasabah){
            $('#nasabah_id option').remove();
            $('#nasabah_id').prepend($('<option>',{
                    value: '',
                    text: 'PILIH'
                }));
            for(var i=0;i<dataNasabah.length;i++){
                $('#nasabah_id').append($('<option>',{
                    value: dataNasabah[i].NASABAH_ID,
                    text: dataNasabah[i].NAMA_NASABAH
                }));
            }
        }
    });
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
                        value: data2[i].kode_kantor,
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
                    "kode_cabang": kode_cabang
                },
                success: function(dataKolektor){
                    for(var i=0;i<dataKolektor.length;i++){
                        $('#kode_kolektor').append($('<option>',{
                            value: dataKolektor[i].kode_group3,
                            text: dataKolektor[i].deskripsi_group3
                        }));
                    }
                }
            });
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

</script>
<script src="<?php echo base_url();?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<?php echo $params['custom_js'];?>