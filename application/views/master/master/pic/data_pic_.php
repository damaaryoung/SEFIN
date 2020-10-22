<div id="lihat_pic" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data PIC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data PIC</li>
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
                            <button class="btn btn-primary tambah" id="click-add-pic" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover table-sm">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th style="width: 5">
                                            No
                                        </th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>
                                            Jenis PIC
                                        </th>
                                        <th>
                                            Nama Area
                                        </th>
                                        <th>
                                            Nama Cabang
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_pic" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
</div>

<div id="lihat_tambah_pic" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Credit Checking</h1>
          </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data PIC</li>
                    <li class="breadcrumb-item">Tambah PIC</li>
                </ol>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 16px;">
                    <div class="card card-primary">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Tambah Area</h3> -->
                        </div>

                        <form role="form" id="form_tambah_pic">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <div class="input-group">
                                            <input type="hidden" name="user_id" value="">
                                            <input type="text" class="form-control" name="nama_user">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn" id="klik_user" data-toggle="modal" data-target="#data_user_tambah" style="background-color: #0e8ce4; color: #fff">
                                                     ...
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Select Area</label>
                                        <select name="area" class="form-control">
                                        </select>
                                    </div>    
                                    <div class="form-group">
                                        <label>Select Kantor Cabang</label>
                                        <select name="kantor_cabang" class="form-control">
                                        </select>
                                    </div>              
                                    <div class="form-group">
                                        <label>Jenis PIC</label>
                                        <select name="jenis_pic" class="form-control">
                                        </select>
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

<div id="lihat_ubah_pic" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Credit Checking</h1>
          </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data PIC</li>
                    <li class="breadcrumb-item">Tambah PIC</li>
                </ol>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="margin-bottom: 16px;">
                    <div class="card card-primary">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Tambah Area</h3> -->
                        </div>
                        <form role="form" id="form_ubah_pic">
                            <input type="hidden" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <div class="input-group">
                                            <input type="hidden" name="user_id_ubah" value="">
                                            <input type="text" class="form-control" name="nama_user_ubah">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn" data-toggle="modal" data-target="#data_user_ubah" style="background-color: #0e8ce4; color: #fff">
                                                     ...
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group" id="select_area">
                                        <label>Area</label>
                                        <select name="area_ubah" id="area_ubah" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group" id="select_area_dup">
                                        <label>Area</label>
                                        <select name="area_dup" id="area_dup" class="form-control">
                                        </select>
                                    </div>    
                                    <div class="form-group" id="select_kantor_cabang">
                                        <label>Kantor Cabang</label>
                                        <select name="kantor_cabang_ubah" id="kantor_cabang_ubah" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group" id="select_kantor_cabang_dup">
                                        <label>Kantor Cabang</label>
                                        <select name="kantor_cabang_dup" id="kantor_cabang_dup" class="form-control">
                                        </select>
                                    </div>              
                                    <div class="form-group" id="select_jenis_pic">
                                        <label>Jenis PIC</label>
                                        <select name="jenis_pic_ubah" class="form-control">
                                        </select>
                                    </div>
                                    <div class="form-group" id="select_jenis_pic_dup">
                                        <label>Jenis PIC</label>
                                        <select name="jenis_pic_dup" class="form-control">
                                        </select>
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
<div class="modal fade" id="data_user_tambah">
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
                                <tbody id="data_users_tambah" style="font-size: 13px">
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


<div class="modal fade" id="data_user_ubah">
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
                    <div class="card-body">
                        <div class="box-body table-responsive no-padding">
                            <table id="example4" class="table table-hover">
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
                                <tbody id="data_users_ubah" style="font-size: 13px">
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
<script type="text/javascript">
   $(function(){
        hide_all = function(){
            $('#lihat_pic').hide();
            $('#lihat_tambah_pic').hide();
            $('#lihat_ubah_pic').hide();
            // $(".close").click();
        }

        hide_all();
        $('#lihat_pic').show();

        $('#click-add-pic').click(function(){
            hide_all();
            $('#lihat_tambah_pic').show();
        });


        // //Click submit tambah data
        $('#form_tambah_pic').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('user_id',$('input[name=user_id]',this).val());
            formData.append('id_mk_area',$('select[name=area]',this).val());
            formData.append('id_mk_cabang',$('select[name=kantor_cabang]',this).val());
            formData.append('id_mj_pic',$('select[name=jenis_pic]',this).val());
            formData.append('nama',$('input[name=nama_user]',this).val());

            tambah_pic(formData)
            .done(function(res){
                var data = res;
                bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_pic')[0].reset();
                    hide_all();
                    load_data();
                    $('#lihat_pic').show();
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


        get_pic = function(opts, id){
            var url = '<?php echo config_item('api_url') ?>api/master/pic/';

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

        get_area = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>api/master/area_kerja';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }
        get_area()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama_area+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_pic select[name=area]').html(select);
        })

        get_area()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama_area+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_ubah_pic select[name=area_dup]').html(select);
        })

        get_cabang = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>api/master/area_cabang';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }
        get_cabang()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama_cabang+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_pic select[name=kantor_cabang]').html(select);
        })

        get_cabang()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama_cabang+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_ubah_pic select[name=kantor_cabang_dup]').html(select);
        })

        get_jenis_pic = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>api/master/jenis_pic';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }
        get_jenis_pic()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama_jenis+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_pic select[name=jenis_pic]').html(select);
        })

        get_jenis_pic()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama_jenis+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_ubah_pic select[name=jenis_pic_dup]').html(select);
        })

        delete_pic = function(id){
            var url = '<?php echo $this->config->item('api_url');?>/api/master/pic/'+id;

            return $.ajax({
                url : url,
                type: 'DELETE',
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

        tambah_pic = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>/api/master/pic';
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

        $('#form_ubah_pic select[name=area_ubah]').on('click', function(e){
            $('#select_area').hide();
            $('#select_area_dup').show();
            document.getElementById("area_ubah").options.length = 0;
        })

        $('#form_ubah_pic select[name=kantor_cabang_ubah]').on('click', function(e){
            $('#select_kantor_cabang').hide();
            $('#select_kantor_cabang_dup').show();
            document.getElementById("kantor_cabang_ubah").options.length = 0;
        })

        $('#form_ubah_pic select[name=jenis_pic_ubah]').on('click', function(e){
            $('#select_jenis_pic').hide();
            $('#select_jenis_pic_dup').show();
            document.getElementById("jenis_pic_ubah").options.length = 0;
        })


         load_data= function(){     
                get_pic()
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
                        $('#data_pic').html(tr);

                        return;
                    }
                    $.each(data,function(index,item){
                        no++;
                        var tr = [
                          '<tr>',
                            '<td>'+no+'</td>',
                            '<td>'+item.nama+'</td>',
                            '<td>'+item.jenis_pic+'</td>',
                            '<td>'+item.nama_area+'</td>',
                            '<td>'+item.nama_cabang+'</td>',
                            '<td>',
                              '<button type="button" class="btn btn-info btn-sm edit" data-toggle="modal" data-target="#update_produk" data="'+ item.id +'" ><i class="fas fa-pencil-alt"></i></button>',
                              '<button type="button" class="btn btn-danger btn-sm delete" data="'+ item.id +'" ><i class="fas fa-trash-alt"></i></button>',
                            '</td>',
                          '</tr>'
                        ].join('\n');
                        html.push(tr);
                    });
                    $('#data_pic').html(html);
                    $('#example2').DataTable({
                      "paging": true,
                      "retrieve": true,
                      "lengthChange": true,
                      "searching": true,
                      "ordering": true,
                      "info": true,
                      "autoWidth": true,
                  });
                })
        .fail(function(response){
            $('#data_pic').html('<tr><td colspan="4">Tidak ada data</td></tr>');
        });
        }
        hide_all();
        $('#lihat_pic').show();
        load_data();


        $('#data_pic').on('click', '.edit', function(e){
            e.preventDefault();

            var id = $(this).attr('data');
            $('#select_area_dup').hide();
            $('#select_kantor_cabang_dup').hide();
            $('#select_jenis_pic_dup').hide();
            get_pic({}, id)
            .done(function(response){
                var data = response.data;
                console.log(data);


                $('#form_ubah_pic input[type=hidden][name=id]').val(data.id);
                $('#form_ubah_pic input[name=user_id_ubah]').val(data.user_id);

                var select_area = [];
                    var option_area= [
                        '<option value="'+data.id_area+'">'+data.nama_area+'</option>'
                    ].join('\n');
                    select_area.push(option_area);
                $('#form_ubah_pic select[name=area_ubah]').html(select_area);


                $('#form_ubah_pic input[name=nama_user_ubah]').val(data.nama);

                var select_cabang = [];
                    var option_cabang= [
                        '<option value="'+data.id_cabang+'">'+data.nama_cabang+'</option>'
                    ].join('\n');
                    select_cabang.push(option_cabang);
                $('#form_ubah_pic select[name=kantor_cabang_ubah]').html(select_cabang);

                var select_jenis = [];
                    var option_jenis= [
                        '<option value="'+data.id_jenis_pic+'">'+data.nama_jenis_pic+'</option>'
                    ].join('\n');
                    select_jenis.push(option_jenis);
                $('#form_ubah_pic select[name=jenis_pic_ubah]').html(select_jenis);

            })
            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan, Coba cek jaringan anda dan refresh kembali !!');
            });
            hide_all();
            $('#lihat_ubah_pic').show();
        });

        // $('#form_tambah_pic').on('click', '.lihat_user', function(e){
        load = function(){
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
              $('#data_users_tambah').html(html);

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

        load_user_ubah = function(){
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
              $('#data_users_ubah').html(html);

               $('#example4').DataTable({
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
        load_user_ubah();

        //detail users ke form tambah
        $('#data_users_tambah').on('click', '.edit', function(e){
            e.preventDefault();
            var id = $(this).attr('data');

            get_user({}, id)
            .done(function(response){
                var data = response.data;
                $('#form_tambah_pic input[name=user_id]').val(data.user_id);
                $('#form_tambah_pic input[name=nama_user]').val(data.nama);
            })
            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan, Coba cek jaringan anda dan refresh kembali !!');
            });
            // hide_all();
            // $('#lihat_tambah_pic').show();
            $(".close").click();
        });

        //detail users ke form ubah
        $('#data_users_ubah').on('click', '.edit', function(e){
            e.preventDefault();
            var id = $(this).attr('data');

            get_user({}, id)
            .done(function(response){
                var data = response.data;
                $('#form_ubah_pic input[name=user_id_ubah]').val(data.user_id);
                $('#form_ubah_pic input[name=nama_user_ubah]').val(data.nama);
            })
            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan, Coba cek jaringan anda dan refresh kembali !!');
            });
            // hide_all();
            // $('#lihat_tambah_pic').show();
            $(".close").click();
        });


        update_pic = function(opts,id){
            var data = opts;
            var url = '<?php echo $this->config->item('api_url');?>api/master/pic/'+id;
            return $.ajax({
                url: url,
                data: data,
                type: 'PUT',
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            })
        }

        // klik submit update
        $('#form_ubah_pic').on('submit',function(e){
            var id = $('input[name=id]',this).val();
            e.preventDefault();
            var formData = new FormData();
            var data ={
                user_id: $('input[name=user_id_ubah]',this).val(),
                nama: $('input[name=nama_user_ubah]',this).val(),
                id_mk_area: $('select[name=area_dup]',this).val(),
                id_mk_cabang: $('select[name=kantor_cabang_dup]',this).val(),
                id_mj_pic: $('select[name=jenis_pic_dup]',this).val(),
                flg_aktif: $('select[name=flg_aktif]',this).val()
            }
            update_pic(data, id)
            .done(function(res){
                var data = res.data;
                    bootbox.alert('Data berhasil diubah',function(){

                    load_data();
                    $('#form_ubah_pic')[0].reset();
                    hide_all();
                    $('#lihat_pic').show();
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
        $('#data_pic').on('click','.delete',function(e){
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
                        delete_pic(id)
                        .done(function(res){
                           
                            load_data();
                        })
                        .fail(function(jqXHR){
                         
                        })
                    }
                }   
            });
        });
    });
</script>