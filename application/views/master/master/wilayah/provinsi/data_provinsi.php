
<div id="lihat_data" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Provinsi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Provinsi</li>
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
                            <button class="btn btn-primary tambah" id="click-add-provinsi" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                      <th style="width: 5px">
                                          No
                                      </th>
                                      <th>
                                          Provinsi
                                      </th>
                                      <th>
                                          Aksi
                                      </th>
                                    </tr>
                                </thead>
                                <tbody id="data_provinsi" style="font-size: 13px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </section> 
</div>

  <!-- Content Wrapper. Contains page content -->
  <div id="lihat_ubah" class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ubah Provinsi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item">Data Provinsi</li>
              <li class="breadcrumb-item active">Ubah Provinsi</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
              </div>

              <form role="form"  id="form_ubah_provinsi">
                <input type="hidden" name="id" value="">
                <div class="card-body">
                  <div class="form-group">
                    <label>Provinsi</label>
                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Provinsi">
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
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script>

   $(function(){
        var get_provinsi;
        var load_data;
        var delete_provinsi;

        hide_all = function(){
            $('#lihat_data').hide();
            $('#lihat_ubah').hide();
        }
        hide_all();
        $('#lihat_data').show();

        get_provinsi= function(opts, id){
            var url = '<?php echo config_item('api_url') ?>wilayah/provinsi/';

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

        delete_provinsi = function(id){
            var url = '<?php echo $this->config->item('api_url');?>wilayah/provinsi/'+id;

            return $.ajax({
                url : url,
                type: 'DELETE',
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }


        load_data= function(pagin){
            get_provinsi()
            .done(function(response){
                console.log();
                var data = response.data;
                var html = [];
                var no   = 0;
                

                    if(data.length === 0 ){
                        var tr =[
                            '<tr valign="midle">',
                                '<td colspan="4">No Data</td>',
                            '</tr>'
                        ].join('\n');
                        $('#data_provinsi').html(tr);

                        return;
                    }
                    $.each(data,function(index,item){
                        no++;
                        var tr = [
                            '<tr>',
                                '<td>'+ no+'</td>',
                                '<td>'+ item.nama +'</td>',
                                '<td style="width: 70px;">',
                                    '<button type="button" class="btn btn-info btn-sm edit"  data-target="#update" data="'+item.id+'"><i class="fas fa-pencil-alt"></i></button>',
                                    '<button type="button" class="btn btn-danger btn-sm delete" data="'+item.id+'"><i class="fas fa-trash-alt"></i></button>',
                                '</td>',
                            '</tr>'
                        ].join('\n');
                        html.push(tr);
                    });
                    $('#data_provinsi').html(html);
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
                $('#data_provinsi').html('<tr><td colspan="4">Tidak ada data</td></tr>');
            });
        }
        $('#data_provinsi').show();
        load_data();
        // server response

        update_provinsi = function(opts,id){
            var data = opts;
            var url = '<?php echo $this->config->item('api_url');?>wilayah/provinsi/'+id;
            return $.ajax({
                url: url,
                data: data,
                type: 'PUT',
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            })
        }

        // Click ubah
        $('#data_provinsi').on('click', '.edit', function(e){
            e.preventDefault();

            var id = $(this).attr('data');

            get_provinsi({}, id)
            .done(function(response){
                var data = response.data;
                console.log(data);
        
                $('#form_ubah_provinsi input[type=hidden][name=id]').val(data.id);
                $('#form_ubah_provinsi input[name=nama]').val(data.nama_provinsi);
                $('#form_ubah_provinsi select[name=flg_aktif]').val(data.flg_aktif);
                })

            .fail(function(jqXHR){
                bootbox.alert('Data tidak ditemukan');
            });
            hide_all();
            $('#lihat_ubah').show();
        });

        // klik submit update
        $('#form_ubah_provinsi').on('submit',function(e){
            var id = $('input[name=id]',this).val();
            e.preventDefault();
            var formData = new FormData();
            var data ={
                nama: $('input[name=nama]',this).val(),
                flg_aktif: $('select[name=flg_aktif]',this).val()
            }
            update_provinsi(data, id)
            .done(function(res){
                console.log(res);
                var data = res.data;
                    bootbox.alert('Data berhasil diubah',function(){

                    load_data();
                    $('#form_ubah_provinsi')[0].reset();
                    hide_all();
                    $('#lihat_data').show();
                });
            })
            .fail(function(jqXHR){
                bootbox.alert('Data gagal diubah, Silahkan coba lagi dan cek jaringan anda !!')
                // bootbox.alert(error);
            });
        });

        //delete
        $('#data_provinsi').on('click','.delete',function(e){
        e.preventDefault();
        var id = $(this).attr('data');
        
        bootbox.confirm({
            message :"Yakin hapus?",
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
                    delete_provinsi(id)
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
    $('#click-add-provinsi').on('click', function(e){
        e.preventDefault();
        NProgress.start();

        $.ajax({
            url : '<?php echo base_url('Master/add_provinsi') ?>',
            dataType: 'html'
        })
        .done(function(response){
            $('#main-content').html(response);
            NProgress.done();
        })
        .fail(function(jqXHR){
            $('#main-content').load('<?php echo base_url('Rusak') ?>');
           NProgress.done();
        });
    });
    });

</script>