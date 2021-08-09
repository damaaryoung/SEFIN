<link rel="stylesheet" type="text/css" href="
  //cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css">
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
        <form class="form-horizontal" id="add_task_assigment">
          <div class="form-group row ml-1 mr-1">
            <label for="norek" class="col-form-label col-3">No Rekening:</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="no_rekening" name="no_rekening" />
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-primary" id="AddAccount">
               <i class="icon-zoom-in"></i> Check </button>
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="collector" class="col-form-label col-3">Nama Kolektor:</label>
            <div class="col-sm-5">
              <select class="form-control" name="kode_kolektor" id="kode_kolektor"></select>
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddCollector">
                <i class="icon-zoom-in"></i> Check </button>
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="cabang" class="col-form-label col-3">Cabang:</label>
            <div class="col-sm-5">
              <select class="form-control" name="kode_kantor" id="kode_kantor"></select>
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="ospokok" class="col-form-label col-3">OS Pokok:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="os_pokok" name="os_pokok" />
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="tgl_jth_tempo" class="col-form-label col-3">Assignment Date:</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="assignment_date" name="assignment_date" data-date-format="d-m-Y" />
            </div>
          </div>
          <!-- <div class="form-group row ml-1 mr-1">
            <label for="tgl_jth_tempo" class="col-form-label col-3">Tanggal Jatuh Tempo:</label>
            <div class="col-sm-5">
              <input type="date" class="form-control" id="tgl_jt_tempo" name="tgl_jt_tempo" data-date-format="d-m-Y" />
            </div>
          </div> -->
          
          <!-- <div class="form-group row ml-1 mr-1">
            <label for="fthari" class="col-form-label col-3">FT Hari:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="ft_hari" name="ft_hari" />
            </div>
          </div> -->
          <!-- <div class="form-group row ml-1 mr-1">
            <label for="jml_angsuran" class="col-form-label col-3">Jumlah Angsuran:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="jumlah_angsuran" name="jumlah_angsuran" />
            </div>
          </div> -->
          <!-- <div class="form-group row ml-1 mr-1">
            <label for="denda" class="col-form-label col-3">Denda:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="denda" name="denda" />
            </div>
          </div> -->
          <div class="form-group row ml-1 mr-1">
            <label for="collectFee" class="col-form-label col-3">Collect Fee:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="collect_fee" name="collect_fee" />
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="collectFee" class="col-form-label col-3">Total Tagihan:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="total_tagihan" name="total_tagihan" />
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="collectFee" class="col-form-label col-3">Total Tunggakan:</label>
            <div class="col-sm-5">
              <input type="number" class="form-control" id="total_tunggakan" name="total_tunggakan" />
            </div>
          </div>
          <hr/>
          <div class="row">
            <div class="form-group">
              <div class="form-group form-file-upload form-file-multiple">
                <button type="button" class="btn btn-success add-row"><i class="fa fa-plus"></i>&nbsp; Tambah </button>&nbsp;
                <button type="button" class="btn btn-danger delete-row"><i class="fa fa-trash"></i>&nbsp; Delete </button>
              </div>
            </div>
          </div>
          <table class = "table table-striped table-bordered display" id="table_detail">
            <tr>
              <td><input type="checkbox" name="record" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()"></td>
              <td>
                <div class="form-group col-md-12 row">
                  <label>Tanggal Jatuh Tempo<span class="required_notification">*</span></label>
                  <input type="date" class="form-control" id="tgl_jt_tempo1" name="tgl_jt_tempo[]" data-date-format="d-m-Y" required/>
                </div>
              
                <div class="form-group col-md-12 row">
                  <label>Angsuran ke-<span class="required_notification">*</span></label>
                  <input type="number" class="form-control" id="ang_ke1" name="ang_ke[]"  required/>
                </div>
              
                <div class="form-group col-md-12 row">
                  <label>FT Hari<span class="required_notification">*</span></label>
                  <input type="number" class="form-control" id="ft_hari1" name="ft_hari[]"  required/>
                </div>
              </td>
              <td>
                <div class="form-group col-md-12 row">
                  <label>jumlah Angsuran<span class="required_notification">*</span></label>
                  <input type="number" class="form-control" id="jumlah_angsuran1" name="jumlah_angsuran[]"  required/>
                </div>
                <div class="form-group col-md-12 row">
                  <label>Denda<span class="required_notification">*</span></label>
                  <input type="number" class="form-control" id="denda1" name="denda[]"  required/>
                </div>
              </td>
            </tr>
          </table>
          <div class="form-group row ml-1 mr-1">
            <button type="submit" id="submit" class="btn btn-primary" style="float: right;">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<div class="modal fade" id="AddCollector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Kolektor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          sadsad
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<!-- <div class="modal fade" id="AddAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih Rekening</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group row ml-1 mr-1">
            <label for="no_rekening" class="col-form-label col-3">No rekening</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="norek" name="norek" readonly/>
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="no_rekening" class="col-form-label col-3">Nama Nasabah</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="nama_nasabah" name="nama_nasabah" readonly/>
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="no_rekening" class="col-form-label col-3">Alamat</label>
            <div class="col-sm-5">
              <textarea id="alamat" name="alamat" class="form-control" readonly></textarea>
            </div>
          </div>
          <div class="form-group row ml-1 mr-1">
            <label for="no_rekening" class="col-form-label col-3">Status</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="status" name="status" readonly/>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div> -->
<script src="
  //cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js">
</script>
<script>
$('#AddAccount').click(function(){
  $.ajax({
    url:"<?php echo base_url();?>assignment_collection/getAccount",
    type:"POST",
    dataType:"JSON",
    data:$("#no_rekening"),
    success: function(data){
      // alert(data.length);
      if(data.length == 0){
        Swal.fire({
        title:"Perhatian!", 
        html:"Tidak ada no rekening di sistem mikro",
        icon:'error'
      });
      }else{
        Swal.fire({
        title:"Perhatian!", 
        html:"<p><b>" + data[0].no_rekening + "</b></p><p><b>" + data[0].nama_nasabah+"</b></p><p>" + data[0].alamat+ "</b></p>",
        icon:'success'
      });
         $('#kode_kantor option[value='+data[0].kode_kantor+']').prop("selected", true);
      $.ajax({
        url:"<?php echo base_url();?>assignment_collection/getCollectorByKodeKantor",
        type:"POST",
         dataType:"JSON",
         data: {"kode_kantor":data[0].kode_kantor},
         success: function(data2){
          for(var i = 0; i < data2.length; i++){
          $('#kode_kolektor').append($('<option>',{
            value: data2[i].kode_group3,
            text: data2[i].deskripsi_group3
          }));  
        }
         }
      });
      }
      
     
      
    },
     error: function (request, status, error) {
        alert(request.responseText);
    }
  });
});


  // $.post("<?php echo base_url();?>assignment_collection/getAllCabang", function(data){alert(data.length)});
  $.ajax({
    url:"<?php echo base_url();?>assignment_collection/getAllCabang",
    type:"POST",
    cache: false,
    dataType:"JSON",
    success: function(data){
      for(var i = 0; i < data.length; i++){
        $('#kode_kantor').append($('<option>',{
          value: data[i].kode_kantor,
          text: data[i].nama_kantor
        }));
      }
    },
     error: function (request, status, error) {
        alert(request.responseText);
    }
  });


$('#add_task_assigment').submit(function(e){
  e.preventDefault();
  // alert('test');
  if($('#no_rekening').val() == ""){
    bootbox.alert("<center><b>Nomor rekening tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#kode_kolektor').val() == ""){
    bootbox.alert("<center><b>Kode kolektor tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#kode_kantor').val() == ""){
    bootbox.alert("<center><b>Kode kantor tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#os_pokok').val() == ""){
    bootbox.alert("<center><b>OS Pokok tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#tgl_jt_tempo').val() == ""){
    bootbox.alert("<center><b>Tanggal jatuh tempo tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#ft_hari').val() == ""){
    bootbox.alert("<center><b>FT hari tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#jumlah_angsuran').val() == ""){
    bootbox.alert("<center><b>Jumlah angsuran tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#denda').val() == ""){
    bootbox.alert("<center><b>Denda tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#collect_fee').val() == ""){
    bootbox.alert("<center><b>Collect fee tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#total_tagihan').val() == ""){
    bootbox.alert("<center><b>Total tagihan tidak boleh kosong</b></center>");
    return (false);
  }

  if($('#total_tunggakan').val() == ""){
    bootbox.alert("<center><b>Total tunggakan tidak boleh kosong</b></center>");
    return (false);
  }

  var tgl_jt_tempo = $('input[name="tgl_jt_tempo[]"]').map(function(){
    return this.value;
  }).get();

  var ang_ke = $('input[name="ang_ke[]"]').map(function(){
    return this.value;
  }).get();

  var ft_hari = $('input[name="ft_hari[]"]').map(function(){
    return this.value;
  }).get();

  var jumlah_angsuran = $('input[name="jumlah_angsuran[]"]').map(function(){
    return this.value;
  }).get();

  var denda = $('input[name="denda[]"]').map(function(){
    return this.value;
  }).get();

  $.ajax({
    url:"<?php echo base_url();?>assignment_collection/addTaskAssigment",
    type: "POST",
    dataType:"JSON",
    data:{
      "nomor_rekening"  : $('#no_rekening').val(),
      "kode_kolektor"   : $('#kode_kolektor').val(),
      "kode_kantor"     : $('#kode_kantor').val(),
      "os_pokok"        : $('#os_pokok').val(),
      "tgl_jt_tempo"    : tgl_jt_tempo,
      "ang_ke"          : ang_ke,
      "ft_hari"         : ft_hari,
      "jumlah_angsuran" : jumlah_angsuran,
      "assignment_date" : $('#assignment_date').val(),
      "collect_fee"     : $('#collect_fee').val(),
      "total_tunggakan" : $('#total_tunggakan').val(),
      "total_tagihan"   : $('#total_tagihan').val(),
      "denda"           : denda
    },
    success: function(data){
      Swal.fire({
                title: 'Perhatian',
                html: data.check_validation,
                icon: data.insert,
      });
    },
    error: function (request, status, error) {
        alert(request.responseText);
    }
  });
});

var np = 2;
$(".add-row").click(function() {
  var markup = '<tr>'+
              '<td><input type="checkbox" name="record" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()"></td>'+
              '<td>'+
                '<div class="form-group col-md-12 row">'+
                  '<label>Tanggal Jatuh Tempo<span class="required_notification">*</span></label>'+
                  '<input type="date" class="form-control" id="tgl_jt_tempo' + np + '" name="tgl_jt_tempo[]" data-date-format="d-m-Y" required/>'+
                '</div>'+
              
                '<div class="form-group col-md-12 row">'+
                  '<label>Angsuran ke-<span class="required_notification">*</span></label>'+
                  '<input type="number" class="form-control" id="ang_ke' + np + '" name="ang_ke[]" required/>'+
                '</div>'+
              
                '<div class="form-group col-md-12 row">'+
                  '<label>FT Hari<span class="required_notification">*</span></label>'+
                  '<input type="number" class="form-control" id="ft_hari' + np + '" name="ft_hari[]" required/>'+
                '</div>'+
              '</td>'+
              '<td>'+
                '<div class="form-group col-md-12 row">'+
                  '<label>jumlah Angsuran<span class="required_notification">*</span></label>'+
                  '<input type="number" class="form-control" id="jumlah_angsuran' + np + '" name="jumlah_angsuran[]" required/>'+
                '</div>'+
                '<div class="form-group col-md-12 row">'+
                  '<label>Denda<span class="required_notification">*</span></label>'+
                  '<input type="number" class="form-control" id="denda' + np + '" name="denda[]" required/>'+
                '</div>'+
              '</td>'+
            '</tr>';

$("#table_detail tbody").append(markup);
});

$(".delete-row").click(function() {
        $("#table_detail tbody").find('input[name="record"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("tr").remove();
            }
        });
    });
</script>