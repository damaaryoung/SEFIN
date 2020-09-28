
<div id="lihat_asaldata" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Asal Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Asal Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <button class="btn btn-primary tambah" id="click-add-asaldata" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="5px">
                                            No
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_asaldata" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
</div>


<!-- form tambah -->
<div id="lihat_tambah_asaldata" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Asal Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Asal Data</li>
                        <li class="breadcrumb-item active">Tambah Asal Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <form role="form" id="form_tambah_asaldata">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Asal Data</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Asal Data">
                                </div>
                            </div>
                            <div class="card-footer" style="float: right;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- form ubah -->
<div id="lihat_ubah_asaldata" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Asal Data</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Asal Data</li>
                        <li class="breadcrumb-item active">Ubah Asal Data</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                        </div>
                        <form role="form" id="form_ubah_asaldata">
                            <input type="hidden" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Asal Data</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Asal Data">
                                </div>
                                <div class="form-group">
                                    <label>Flag</label>
                                    <select name="flg_aktif" class="form-control">
                                        <option value="true">Aktif</option>
                                        <option value="false">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer" style="float: right;">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
$(function(){

        // hide all data
        hide_all = function(){
            $('#lihat_asaldata').hide();
            $('#lihat_tambah_asaldata').hide();
            $('#lihat_ubah_asaldata').hide();
        }
        hide_all();
        $('#lihat_asaldata').show();

        $('#click-add-asaldata').click(function(){
            hide_all();
            $('#lihat_tambah_asaldata').show();
        });

        get_asaldata = function(opts, id){
            var url = '<?php echo config_item('api_url') ?>api/master/asal_data/';

            if(id != undefined){
                url+=id;
            }

            if(opts != undefined){
                var data = opts;
            }

            return $.ajax({
                // type : 'GET',
                url: url,
                data: data,
                headers: {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

        tambah_asaldata = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>/api/master/asal_data';
            var data = opts;

            return $.ajax({
                url : url,
                type: 'POST',
                contentType: false,
                processData: false,
                data: data,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

        update_asaldata = function(opts,id){
            var data = opts;
            var url = '<?php echo $this->config->item('api_url');?>api/master/asal_data/'+id;
            return $.ajax({
                url: url,
                data: data,
                type: 'PUT',
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            })
        }

        delete_asaldata = function(id){
            var url = '<?php echo $this->config->item('api_url');?>/api/master/asal_data/'+id;

            return $.ajax({
                url : url,
                type: 'DELETE',
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }
        load_data = function(){
            get_asaldata()
            .done(function(response){
              var data = response.data;
              var html = [];
              var no = 0;

              $.each(data,function(index,item){
                no++;
                var tr = [
                '<tr>',
                '<td>'+no+'</td>',
                '<td>'+item.nama+'</td>',
                '<td style="width: 70px;">',
                '<button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#update_produk" data="'+ item.id +'" ><i class="fas fa-pencil-alt"></i></button>',
                '<button type="button" class="btn btn-danger btn-sm delete" data="'+ item.id +'" ><i class="fas fa-trash-alt"></i></button>',
                '</td>',
                '</tr>'
                ].join('\n');
                html.push(tr);
            });
              $('#data_asaldata').html(html);
              
              //del later
              $('#example2').DataTable({
                  "paging": true,
                  "retrieve": true,
                  "lengthChange": true,
                  "searching": true,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false,
              });
          })
.fail(function(res){
              // console.log(res);
              var data = res.responseJSON;
              var error = "";

              if(typeof data == 'string') {
                  error = '<p>'+ data +'</p>';
              } else {
                  $.each(data, function(index, item){
                    error += '<p>'+ item +'</p>'+"\n";
                });
              }

              
          })
};
hide_all();
$('#lihat_asaldata').show();
load_data();


        //delete
        $('#data_asaldata').on('click','.delete',function(e){
            e.preventDefault();
            var id = $(this).attr('data');
            
            bootbox.confirm({
                message :"Apakah data ini ingin dihapus?",
                bottons : {
                    confirm :{
                        label : 'Ya',
                        className : 'btn-success'
                    },
                    cancel : {
                        label: ' Tidak',
                        bottons : 'btn-danger'
                    }
                },
                callback: function(result){
                    if(result){
                        delete_asaldata(id)
                        .done(function(res){
                            load_data();
                            bootbox.alert('Data berhasil dihapus')
                        })
                        .fail(function(jqXHR){
                            bootbox.alert('Data gagal dihapus, Silahkan cek jaringan anda dan coba lagi !!')
                        })
                    }
                }   
            });
        });

        //Click submit tambah data
        $('#form_tambah_asaldata').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama',$('input[name=nama]',this).val());

            tambah_asaldata(formData)
            .done(function(res){
                var data = res;
                bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_asaldata')[0].reset();
                    hide_all();
                    $('#lihat_asaldata').show();
                    load_data();
                });
                
            })
            .fail(function(jqXHR){
                var data = jqXHR.responseJSON;
                var error = "";

                if(typeof data == 'string') {
                    error = '<p>'+ data +'</p>';
                } else {
                    $.each(data, function(index, item){
                        error += '<p>'+ item +'</p>'+"\n";
                    });
                }
                bootbox.alert(error);
            });
        });

        // Click ubah
        $('#data_asaldata').on('click', '.edit', function(e){
            e.preventDefault();

            var id = $(this).attr('data');

            get_asaldata({}, id)
            .done(function(response){
                var data = response.data;
                console.log(data);
                
                $('#form_ubah_asaldata input[type=hidden][name=id]').val(data.id);
                $('#form_ubah_asaldata input[name=nama]').val(data.nama);
                $('#form_ubah_asaldata select[name=flg_aktif]').val(data.flg_aktif);
            })

            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan');
            });
            hide_all();
            $('#lihat_ubah_asaldata').show();
        });

        // klik submit update
        $('#form_ubah_asaldata').on('submit',function(e){
            var id = $('input[name=id]',this).val();
            e.preventDefault();
            var formData = new FormData();
            var data ={
                nama: $('input[name=nama]',this).val(),
                flg_aktif: $('select[name=flg_aktif]',this).val()
            }
            update_asaldata(data, id)
            .done(function(res){
                console.log(res);
                var data = res.data;
                bootbox.alert('Data berhasil diubah',function(){

                    load_data();
                    $('#form_ubah_asaldata')[0].reset();
                    hide_all();
                    $('#lihat_asaldata').show();
                });
            })
            .fail(function(jqXHR){
                // var data = jqXHR.responseJSON;
                // var error = "";

                // if(typeof data == 'string') {
                //     error = '<p>'+ data +'</p>';
                // } else {
                //     $.each(data, function(index, item){
                //         error += '<p>'+ item +'</p>'+"\n";
                //     });
                // }
                bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                // bootbox.alert(error);
            });
        });

});
</script>