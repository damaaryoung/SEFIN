  <!-- Content Wrapper. Contains page content -->
  <div id="lihat_jenis_pic" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Jenis PIC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Jenis PIC</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <button class="btn btn-primary tambah" id="click-add-jenis-pic" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover table-sm">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th style="width: 5px">
                                            No
                                        </th>
                                        <th>
                                            Nama Jenis
                                        </th>
                                        <th>
                                            Keterangan
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_jenis_pic" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section>  
</div>

<!-- form tambah jenis pic -->
<div id="lihat_tambah_jenis_pic" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Jenis PIC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Jenis PIC</li>
                        <li class="breadcrumb-item active">Ubah Jenis PIC</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Tambah Asal Data</h3> -->
                        </div>
                        <form role="form" id="form_tambah_jenis_pic">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Jenis PIC</label>
                                    <input type="text" class="form-control" name="nama_jenis" placeholder="Isi Nama Jenis">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" placeholder="Isi Keterangan">
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

<!-- form ubah jenis pic -->
<div id="lihat_ubah_jenis_pic" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Jenis PIC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Jenis PIC</li>
                        <li class="breadcrumb-item active">Ubah Jenis PIC</li>
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
                            <!-- <h3 class="card-title">Tambah Asal Data</h3> -->
                        </div>
                        <form role="form" id="form_ubah_jenis_pic">
                            <input type="hidden" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Jenis PIC</label>
                                    <input type="text" class="form-control" name="nama_jenis_1" placeholder="Isi Nama Jenis">
                                </div>
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan_1" placeholder="Isi Keterangan">
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

    hide_all = function(){
        $('#lihat_jenis_pic').hide();
        $('#lihat_tambah_jenis_pic').hide();
        $('#lihat_ubah_jenis_pic').hide();
    }
    hide_all();
    $('#lihat_jenis_pic').show();

    $('#click-add-jenis-pic').click(function(){
        hide_all();
        $('#lihat_tambah_jenis_pic').show();
    });

    tambah_jenis_pic = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>/api/master/jenis_pic';
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

    update_jenis_pic = function(opts,id){
        var data = opts;
        var url = '<?php echo $this->config->item('api_url');?>api/master/jenis_pic/'+id;
        return $.ajax({
            url: url,
            data: data,
            type: 'PUT',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        })
    }

    get_jenis_pic = function(opts, id){
        var url = '<?php echo config_item('api_url') ?>api/master/jenis_pic/';

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
    delete_jenis_pic = function(id){
        var url = '<?php echo $this->config->item('api_url');?>api/master/jenis_pic/'+id;

        return $.ajax({
            url : url,
            type: 'DELETE',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
    }

    load_data= function(pagin){
        
        get_jenis_pic()
        .done(function(response){
            var data = response.data;
            var html = [];
            var no   = 0;
            

            if(data.length === 0 ){
                var tr =[
                '<tr valign="midle">',
                '<td colspan="4">No Data</td>',
                '</tr>'
                ].join('\n');
                $('#data_jenis_pic').html(tr);

                return;
            }
            $.each(data,function(index,item){
                no++;
                var tr = [
                '<tr>',
                '<td>'+ no+'</td>',
                '<td>'+ item.nama_jenis +'</td>',
                '<td>'+ item.keterangan +'</td>',
                '<td style="width: 70px;">',
                '<button type="button" class="btn btn-info btn-sm edit"  data-target="#update" data="'+item.id+'"><i class="fas fa-pencil-alt"></i></button>',
                '<button type="button" class="btn btn-danger btn-sm delete" data="'+item.id+'"><i class="fas fa-trash-alt"></i></button>',
                '</td>',
                '</tr>'
                ].join('\n');
                html.push(tr);
            });
            $('#data_jenis_pic').html(html);
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
  .fail(function(response){
    $('#data_jenis_pic').html('<tr><td colspan="4">Tidak ada data</td></tr>');
});
}
$('#data_jenis_pic').show();
load_data();
        // server response

        // Click ubah
        $('#data_jenis_pic').on('click', '.edit', function(e){
            e.preventDefault();

            var id = $(this).attr('data');

            get_jenis_pic({}, id)
            .done(function(response){
                var data = response.data;
                // console.log(data);
                
                $('#form_ubah_jenis_pic input[type=hidden][name=id]').val(data.id);
                $('#form_ubah_jenis_pic input[name=nama_jenis_1]').val(data.nama_jenis);
                $('#form_ubah_jenis_pic input[name=keterangan_1]').val(data.keterangan);
            })

            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan');
            });
            hide_all();
            $('#lihat_ubah_jenis_pic').show();
        });

        //Click submit tambah data
        $('#form_tambah_jenis_pic').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama_jenis',$('input[name=nama_jenis]',this).val());
            formData.append('keterangan',$('input[name=keterangan]',this).val());

            tambah_jenis_pic(formData)
            .done(function(res){
                var data = res;
                bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_jenis_pic')[0].reset();
                    hide_all();
                    $('#lihat_jenis_pic').show();
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

        // klik submit update
        $('#form_ubah_jenis_pic').on('submit',function(e){
            var id = $('input[name=id]',this).val();
            e.preventDefault();
            var formData = new FormData();
            var data ={
                nama_jenis: $('input[name=nama_jenis_1]',this).val(),
                keterangan: $('input[name=keterangan_1]',this).val(),
            }
            update_jenis_pic(data, id)
            .done(function(res){
                // console.log(res);
                var data = res.data;
                bootbox.alert('Data berhasil diubah',function(){

                    load_data();
                    $('#form_ubah_jenis_pic')[0].reset();
                    hide_all();
                    $('#lihat_jenis_pic').show();
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

        //delete
        $('#data_jenis_pic').on('click','.delete',function(e){
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
                        delete_jenis_pic(id)
                        .done(function(res){
                            // console.log(res);
                            load_data();
                        })
                        .fail(function(jqXHR){
                            console.log(jqXHR);
                        })
                    }
                }   
            });
        });
});
  </script>