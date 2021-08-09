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
         <button type="button" class="btn btn-primary" id="AddAssigment"><i class="fa fa-plus-square" aria-hidden="true"></i> TAMBAH</button>
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddAssigment"><i class="fa fa-plus-square" aria-hidden="true"></i> TAMBAH</button> -->

        <!-- <div class="modal fade" id="AddAssigment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group row ml-1 mr-1">
                                <label for="norek" class="col-form-label col-3">No Rekening:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="no_rekening" name="no_rekening" />
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddRekening"><i class="fa fa-plus-square"></i> PILIH</button>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                 <label for="collector" class="col-form-label col-3">Nama Kolektor:</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="nama_kolektor" name="nama_kolektor" />
                                    <input type="hidden" name="kode_group3" id="kode_group3"/>
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#AddColektor"><i class="fa fa-plus-square"></i> PILIH</button>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="cabang" class="col-form-label col-3">Cabang:</label>
                                <div class="col-sm-5">
                                    <select class="form-control select2" name="cabang" id="cabang"></select>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="ospokok" class="col-form-label col-3">OS Pokok:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="os_pokok" name="os_pokok" />
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="tgl_jth_tempo" class="col-form-label col-3">Tanggal Jatuh Tempo:</label>
                                <div class="col-sm-5">
                                   <input type="date" class="form-control" id="tgl_jt_tempo" name="tgl_jt_tempo"  data-date-format="d-m-Y"/>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="ftangsuran" class="col-form-label col-3">FT Angsuran:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="ft_angsuran" name="ft_angsuran"/>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="fthari" class="col-form-label col-3">FT Hari:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="ft_hari" name="ft_hari"/>
                                </div>
                            </div>
                            <div class="form-group row ml-1 mr-1">
                                <label for="jml_angsuran" class="col-form-label col-3">Jumlah Angsuran:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="jumlah_angsuran" name="jumlah_angsuran" />
                                </div>
                            </div>
                             <div class="form-group row ml-1 mr-1">
                                <label for="denda" class="col-form-label col-3">Denda:</label>
                                <div class="col-sm-5">
                                   <input type="number" class="form-control" id="denda" name="denda" />
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
                    <option value="total_tagihan">Total Tagihan</option>
                    <option value="ft_hari">FT Hari</option>
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
            <th>Last Update Date Assigment</th>
            <th>Total Tagihan</th>
            <th>Action</th>
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

    $('#AddAssigment').on('click', function(e) {
        e.preventDefault();
        NProgress.start();
        $.ajax({
                url: '<?php echo base_url('index.php/assignment_collection/add_task_assigment') ?>',
                dataType: 'html'
            })
            .done(function(response) {
                $('#main-content').html(response);
                NProgress.done();
            })
            .fail(function(jqXHR) {
                $('#main-content').load('<?php echo base_url('Rusak') ?>');
                NProgress.done();
            });
    });


    function delete_assignment(task_code){
        $.ajax({
            url:'<?php echo base_url();?>assignment_collection/deleteTaskAssigment',
            dataType:"JSON",
            type:"POST",
            data:{
                "task_code" : task_code
            },
            success: function(data){
                Swal.fire({
                title: 'Perhatian',
                html: data.message,
                icon: data.icon,
                });
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
    }
    function edit_assignment(task_code){
        NProgress.start();
        $.ajax({
                url: '<?php echo base_url('index.php/assignment_collection/update_task_assigment') ?>',
                dataType: 'html',
                type:"POST",
            })
            .done(function(response) {
                $('#main-content').html(response);
                NProgress.done();

                $.ajax({
                    url:'<?php echo base_url();?>assignment_collection/getDataDetailTaskAssigment',
                    dataType:"JSON",
                    type:"POST",
                    data:{
                        "task_code" : task_code
                    },
                    success: function(data){
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
                        $('#task_code').val(data[0].task_code);
                        $('#no_rekening').val(data[0].no_rekening);
                        $('#kode_kolektor option[value='+data[0].kode_group3+']').attr('selected','selected');
                        $('#kode_kantor option[value='+data[0].kode_kantor+']').attr('selected','selected');
                        $('#os_pokok').val(data[0].os_pokok);
                        $('#assignment_date').val(data[0].assignment_date);
                        $('#collect_fee').val(data[0].collect_fee);
                        $('#total_tagihan').val(data[0].total_tagihan);
                        $('#total_tunggakan').val(data[0].total_tunggakan);

                        var markup ="";
                        //alert(data.length);
                        for(var a = 0; a < data.length; a++){
                            var markup = markup + '<tr>'+
                              '<td><input type="checkbox" name="record" width="5" onkeyup="javascript:this.value=this.value.toUpperCase()"></td>'+
                              '<td>'+
                                '<div class="form-group col-md-12 row">'+
                                  '<label>Tanggal Jatuh Tempo<span class="required_notification">*</span></label>'+
                                  '<input type="date" class="form-control" id="tgl_jt_tempo' + a + '" name="tgl_jt_tempo[]" data-date-format="d-m-Y" value="'+ data[a].tgl_jt_tempo +'" required/>'+
                                '</div>'+
                              
                                '<div class="form-group col-md-12 row">'+
                                  '<label>Angsuran ke-<span class="required_notification">*</span></label>'+
                                  '<input type="number" class="form-control" id="ang_ke' + a + '" name="ang_ke[]" value="'+ data[a].ang_ke +'" required/>'+
                                '</div>'+
                              
                                '<div class="form-group col-md-12 row">'+
                                  '<label>FT Hari<span class="required_notification">*</span></label>'+
                                  '<input type="number" class="form-control" id="ft_hari' + a + '" name="ft_hari[]" value="'+ data[a].ft_hari +'" required/>'+
                                '</div>'+
                              '</td>'+
                              '<td>'+
                                '<div class="form-group col-md-12 row">'+
                                  '<label>jumlah Angsuran<span class="required_notification">*</span></label>'+
                                  '<input type="number" class="form-control" id="jumlah_angsuran' + a + '" name="jumlah_angsuran[]" value="'+ data[a].angsuran +'" required/>'+
                                '</div>'+
                                '<div class="form-group col-md-12 row">'+
                                  '<label>Denda<span class="required_notification">*</span></label>'+
                                  '<input type="number" class="form-control" id="denda' + a + '" name="denda[]" value="'+ data[a].denda +'" required/>'+
                                '</div>'+
                              '</td>'+
                            '</tr>';
                        }
                        $("#table_detail tbody").append(markup);
                    },
                    error: function (request, status, error) {
                        alert(request.responseText);
                    }
                });
            })
            .fail(function(jqXHR) {
                $('#main-content').load('<?php echo base_url('Rusak') ?>');
                NProgress.done();
            });
    }
</script>
<?php echo $params['custom_js'];?>