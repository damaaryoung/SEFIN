  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah PIC</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data PIC</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Asal Data</h3> -->
              </div>

              <form role="form" id="form_tambah_pic ">
                <input type="hidden" name="id" value="">
                <div class="card-body">
                    <div class="form-group">
                        <label>User</label>
                        <div class="input-group">
                            <input type="text" name="nama_user" class="form-control inputFileVisible" multiple required>
                            <span class="input-group-btn">
                                <button type="button" class="lihat_user btn" id="klik_user" style="background-color: #0e8ce4;">
                                     ...
                                </button>
                            </span>
                        </div>
                    </div>

                  <div class="form-group">
                    <label>Select Area</label>
                    <select name="provinsi" class="form-control">
                    </select>
                  </div>    
                  <div class="form-group">
                    <label>Select Kantor Cabang</label>
                    <select name="provinsi" class="form-control">
                    </select>
                  </div>              
                  <div class="form-group">
                    <label>Jenis PIC</label>
                    <select name="provinsi" class="form-control">
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
      </div><!-- /.container-fluid -->
    </section>
  </div>
    <div class="modal" id="data_user" tabindex="-1" role="dialog" id="modal-update">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">PIlih User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row " >
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Data User</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                        <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                              <table class="table table-hover">
                                <thead style="font-size: 14px">
                                  <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Nama User
                                        </th>
                                        <th>
                                            Area Kerja
                                        </th>
                                        <th>
                                            Divisi
                                        </th>
                                        <th>
                                            No Induk 
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
            </div>
          </div>
        </div>
      </div>
    </div>
<script>

   $(function(){
        var tambah_jenis_pic


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


        // $('#klik_user').on('click', function(e){
        // // $('#data_users').show();
        // load_data();
        // });
        // Click ubah
        $('#form_tambah_pic').on('click', '.lihat_user', function(e){
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
                      '<button type="button" class="click btn btn-info edit" data-toggle="modal" data-target="#update_produk" data="'+ item.id +'" ><i class="fa fa fa-edit fa-lg"></i></button>',
                      '<button type="button" class="click btn btn-danger delete" data="'+ item.id +'" ><i class="fa fa fa-trash fa-lg"></i></button>',
                    '</td>',
                  '</tr>'
                ].join('\n');
                html.push(tr);
              });
              $('#data_users').html(html);
  
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
        // hide_all();
        // $('#lihat_asaldata').show();
        load_data();
        });



       tambah_jenis_pic = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>api/master/jenis_pic';
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


        $('#form_tambah_pic').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama_jenis',$('input[name=nama_jenis]',this).val());
            formData.append('keterangan',$('input[name=keterangan]',this).val());

            tambah_jenis_pic(formData)
            .done(function(res){
              console.log(res);
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_pic')[0].reset();
                });
                 
            })
            .fail(function(jqXHR){
              console.log(jqXHR);
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
        $('#data_users').on('click', '.edit', function(e){
            e.preventDefault();

            var user_id = $(this).attr('data');
            // $('#form_tambah_pic')[0].reset();
            get_user({}, user_id)
            .done(function(response){
                var data = response.data;
                // console.log(nama);
        
                $('#form_tambah_pic input[type=hidden][name=id]').val(data.user_id);
                $('#form_tambah_pic input[name=nama_user]').val(data.nama);
                })
            $('#IDModal').modal('toggle'); //or  $('#IDModal').modal('hide');
            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan');
            });


        });
    });

</script>