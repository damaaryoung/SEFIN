<!-- form lihat data -->
<div id="lihat_user_access" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data User Access</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User Access</li>
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
                            <button class="btn btn-primary tambah" id="click-add-user-access" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead style="font-size: 14px">
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Username
                                        </th>
                                        <th>
                                            Divisi
                                        </th>
                                        <th>
                                            Kode Area
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_user_access" style="font-size: 13px">
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
<div id="lihat_tambah_user_access" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah User Access</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data User Access</li>
                        <li class="breadcrumb-item active">Tambah User Access</li>
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
                        <form role="form" id="form_tambah_user_access">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <div class="input-group">
                                            <input type="hidden" name="id_user[]" id="id" value="1330">
                                            <input type="hidden" name="id_menu_sub[]" id="id" value="3">
                                            <input type="hidden" name="print_access[]" id="id" value="Y">
                                            <input type="hidden" name="add_access[]" id="id" value="Y">
                                            <input type="hidden" name="edit_access[]" id="id" value="Y">
                                            <input type="hidden" name="delete_access[]" id="id" value="Y">

                            
                                            <input type="text" class="form-control" name="nama_user">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn" id="klik_user" data-toggle="modal" data-target="#data_user" style="background-color: #0e8ce4; color: #fff">
                                                     ...
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="uk-width-medium-1-1" >
                                        <label>Menu <span class="req">*</span></label>
                                        <div id="item-menu">
<!--                                         <p>
                                            <input type="checkbox" name="menu" value="" id="" data-md-icheck />
                                            <label class="inline-label label-menu"></label>
                                        </p> -->
                                        </div>
                                    </div>
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
<div id="lihat_ubah_user_access" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah User Access</h1>
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
                        <form role="form" id="form_ubah_user_access">
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
<div class="modal fade" id="data_user">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Pilih User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                        <div class="card">
                        <!-- /.card-header -->
                            <div class="card-body">
                                <div class="box-body table-responsive no-padding">
                                    <table id="example3" class="table table-hover">
                                        <thead style="font-size: 14px">
                                            <tr>
                                                <th>
                                                    No
                                                </th>
                                                <th>
                                                    Nama
                                                </th>
                                                <th>
                                                    Username
                                                </th>
                                                <th>
                                                    Area
                                                </th>
                                                <th>
                                                    Divisi
                                                </th>
                                                <th>
                                                    User ID Induk
                                                </th>
                                                <th>
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_users" style="font-size: 13px">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
            </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
        </div>
    </div>
</div>


<script>
   $(function(){

        // hide all data
        hide_all = function(){
            $('#lihat_user_access').hide();
            $('#lihat_tambah_user_access').hide();
            $('#lihat_ubah_user_access').hide();
        }
        hide_all();
        $('#lihat_user_access').show();

        $('#click-add-user-access').click(function(){
            hide_all();
            $('#lihat_tambah_user_access').show();

        });

        get_user_access = function(opts, id){
            var url = '<?php echo config_item('api_url') ?>api/users/';

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

        get_menu = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>api/menu/master';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
               }
            });
        }
          load = function(){
            get_menu()
            .done(function(response){
              console.log(response);
              var data = response.data;
              var html = [];

              $.each(data,function(index,item){
                   var li = [
                        '<p>',
                            '<input type="checkbox" name="menu[]" value="'+ item.id +'" id="'+ item.nama +'" data-md-icheck />',
                            '<label class="inline-label label-menu">'+ item.nama +'</label>',
                        '</p>'
                ].join('\n');
                html.push(li);
              });
              $('#item-menu').html(html);
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
            load();

       tambah_user_access = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>/api/menu/akses';
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

        get_user = function(opts, user_id){
            var url = '<?php echo config_item('api_url') ?>api/users/';

            if(user_id != undefined){
                url+=user_id;
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


        // $('#form_tambah_pic').on('click', '.lihat_user', function(e){
        load_data = function(){
            get_user()
            .done(function(response){
              var data = response.data;
              var html = [];
              var no = 0;

              $.each(data,function(index,item){
                no++;
                var tr = [
                  '<tr>',
                    '<td>'+ no+'</td>',
                    '<td>'+ item.nama +'</td>',
                    '<td>'+ item.username +'</td>',
                    '<td>'+ item.kode_area +'</td>',
                    '<td>'+ item.divisi_id +'</td>',
                    '<td>'+ item.user_id_induk +'</td>',
                    '<td>',
                      '<button type="button" class="click btn btn-info edit" data-toggle="modal" data-target="#update_produk" data="'+ item.user_id +'" ><i class="fa fa fa-edit fa-lg"></i></button>',
                    '</td>',
                  '</tr>'
                ].join('\n');
                html.push(tr);
              });
              $('#data_users').html(html);
  
              //del later
                $('#example3').DataTable({
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
        // hide_all();
        // $('#lihat_asaldata').show();
        load_data();
        // });

        update_user_access = function(opts,id){
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

        delete_user_access = function(id){
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
            get_user_access()
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
                    '<td>'+item.username+'</td>',
                    '<td>'+item.divisi_id+'</td>',
                    '<td>'+item.kode_area+'</td>',

                    '<td>',
                      '<button type="button" class="click btn btn-info edit" data-toggle="modal" data-target="#update_produk" data="'+ item.id +'" ><i class="fa fa fa-edit fa-lg"></i></button>',
                      '<button type="button" class="click btn btn-danger delete" data="'+ item.id +'" ><i class="fa fa fa-trash fa-lg"></i></button>',
                    '</td>',
                  '</tr>'
                ].join('\n');
                html.push(tr);
              });
              $('#data_user_access').html(html);
  
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
            $('#lihat_user_access').show();
            load_data();

            $('#data_users').on('click', '.edit', function(e){
                e.preventDefault();

                var id = $(this).attr('data');

                get_user({}, id)
                .done(function(response){
                    var data = response.data;
                    $('#form_tambah_user_access input[name=nama_user]').val(data.user);
                })
                .fail(function(jqXHR){
                    bootbox.alert('Data tidak ditemukan, Coba cek jaringan anda dan refresh kembali !!');
                });
                hide_all();
                $('#lihat_tambah_user_access').show();
                 $(".close").click();
            });


        // $('#data_users').on('click', '.edit', function(e){
        //     var id = $(this).attr('data');
        //     $.ajax({
        //         url : "<?php echo $this->config->item('api_url');?>api/users/"+id,
        //         method : "GET",
        //         data : {user_id: id},
        //         async : false,
        //         dataType : 'json',
        //         headers : {
        //         'Authorization': 'Bearer '+localStorage.getItem('token')},
                
        //         success: function(response){
        //         var data = response.data;    
        //         console.log(data.nama);
        //         $('#form_tambah_pic input[name=nama_user]').val(data.nama);   
                
        //         // hide_all();
        //         // $('#lihat_tambah_pic').show();
                
        //         }
        //     });
        // }); 

        //delete
        $('#data_user_access').on('click','.delete',function(e){
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
                        delete_user_access(id)
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
        $('#form_tambah_user_access').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            // formData.append('id_user',$('input[name="id_user[]"]',this).val());
            $.each($('input[name="id_user[]"]', this), function(i, e){
                formData.append('id_user', e.value);
            });
            $.each($('input[name="id_menu_sub[]"]', this), function(i, e){
                formData.append('id_menu_sub', e.value);
            });
            $.each($('input[name="menu[]"]', this), function(i, e){
                formData.append('id_menu_master', e.value);
            });
            $.each($('input[name="print_access[]"]', this), function(i, e){
                formData.append('print_access', e.value);
            });
            $.each($('input[name="add_access[]"]', this), function(i, e){
                formData.append('add_access', e.value);
            });
            $.each($('input[name="edit_access[]"]', this), function(i, e){
                formData.append('edit_access', e.value);
            });
            $.each($('input[name="delete_access[]"]', this), function(i, e){
                formData.append('delete_access', e.value);
            });

            // formData.append('id_menu_sub',$('input[name="id_menu_sub[]"]',this).val());
            // formData.append('print_access',$('input[name="print_access[]"]',this).val());
            // formData.append('add_access',$('input[name="add_access[]"]',this).val());
            // formData.append('edit_access',$('input[name="edit_access[]"]',this).val());
            // formData.append('delete_access',$('input[name="delete_access[]"]',this).val());

            tambah_user_access(formData)
            .done(function(res){
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_user_access')[0].reset();
                    hide_all();
                    $('#lihat_user_access').show();
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
        $('#data_user_access').on('click', '.edit', function(e){
            e.preventDefault();

            var id = $(this).attr('data');

            get_user_access({}, id)
            .done(function(response){
                var data = response.data;
                console.log(data);
        
                $('#form_ubah_user_access input[type=hidden][name=id]').val(data.id);
                $('#form_ubah_user_access input[name=nama]').val(data.nama);
                $('#form_ubah_user_access select[name=flg_aktif]').val(data.flg_aktif);
                })

            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan');
            });
            hide_all();
            $('#lihat_ubah_user_access').show();
        });

        // klik submit update
        $('#form_ubah_user_access').on('submit',function(e){
            var id = $('input[name=id]',this).val();
            e.preventDefault();
            var formData = new FormData();
            var data ={
                nama: $('input[name=nama]',this).val(),
                flg_aktif: $('select[name=flg_aktif]',this).val()
            }
            update_user_access(data, id)
            .done(function(res){
                console.log(res);
                var data = res.data;
                    bootbox.alert('Data berhasil diubah',function(){

                    load_data();
                    $('#form_ubah_user_access')[0].reset();
                    hide_all();
                    $('#lihat_user_access').show();
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