
<div id="lihat_data_area" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Area</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Area</li>
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
                            <button class="btn btn-primary tambah" id="click-add-area" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="table_area" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="5px">
                                            No
                                        </th>
                                        <th>
                                            Nama Area
                                        </th>
                                        <th>
                                            Provinsi
                                        </th>
                                        <th>
                                            Kabupaten
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_area" style="font-size: 13px">
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
<div class="content-wrapper" id="lihat_tambah_area">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Area</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Area</li>
                        <li class="breadcrumb-item active">Tambah Area</li>
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
                            <!-- <h3 class="card-title">Tambah Area</h3> -->
                        </div>
                        <form role="form" id="form_tambah_area">
                            <input type="hidden" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Area</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Area">
                                </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select name="provinsi_1" id="provinsi_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kabupaten</label>
                                    <select name="kabupaten_1" id="kabupaten_1" class="form-control">
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

<!-- form ubah -->
<div class="content-wrapper" id="lihat_ubah_area">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Area</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Area</li>
                        <li class="breadcrumb-item active">Ubah Area</li>
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
                            <!-- <h3 class="card-title">Tambah Area</h3> -->
                        </div>
                        <form role="form" id="form_ubah_area">
                            <input type="hidden" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Area</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Area">
                                </div>
                                <div class="form-group" id="select_provinsi">
                                    <label>Provinsi</label>
                                    <select name="provinsi_dup" id="provinsi2" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_provinsi_dup">
                                    <label>Provinsi</label>
                                    <select name="provinsi_dup" id="provinsi_dup" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kabupaten">
                                    <label>Kabupaten</label>
                                    <select name="kabupaten_dup" id="kabupaten" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group" id="select_kabupaten_dup">
                                    <label>Kabupaten</label>
                                    <select name="kabupaten_dup" id="kabupaten_dup" class="form-control">
                                    </select>
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
    var get_area;
    var load_data;
    var delete_area;
    var id;

    hide_all = function(){
        $('#lihat_data_area').hide();
        $('#lihat_tambah_area').hide();
        $('#lihat_ubah_area').hide();
    }

    hide_all();
    $('#lihat_data_area').show();

    $('#click-tambah-area').click(function(){
        hide_all();
        $('#lihat_tambah_area').show();
    });

    get_area = function(opts, id){
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_kerja/';

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

    get_provinsi = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>wilayah/provinsi';
        return $.ajax({
            type: 'GET',
            url : url,
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
    }

    delete_area = function(id){
        var url = '<?php echo $this->config->item('api_url');?>/api/master/area_kerja/'+id;

        return $.ajax({
            url : url,
            type: 'DELETE',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
    }

    tambah_area = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_kerja';
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

    update_area = function(opts,id){
        var data = opts;
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_kerja/'+id;
        return $.ajax({
            url: url,
            data: data,
            type: 'PUT',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        })
    }

    $('#table_area').dataTable();
    function load_data(){
      $.ajax({
        type    : 'GET',
        url     : '<?php echo $this->config->item('api_url');?>api/master/area_kerja/',
        async   : false,
        headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                },
        success : function(response){
            data = response.data;
            console.log(data);
            var html = '';
            var no   = 0;
            var i;
            for(i=0; i<data.length; i++){
                no++;
                html += '<tr>'+
                '<td>'+no+'</td>'+
                '<td>'+data[i].nama_area+'</td>'+
                '<td>'+data[i].nama_provinsi+'</td>'+
                '<td>'+data[i].nama_kabupaten+'</td>'+
                '<td style="text-align:left;">'+
                '<button type="button" class="btn btn-info btn-sm edit"  data-target="#update" data="'+data[i].id+'"><i class="fas fa-pencil-alt"></i></button>'+ 
                '<button type="button" class="btn btn-danger btn-sm delete" data="'+data[i].id+'"><i class="fas fa-trash-alt"></i></button>'+
                '</td>'+
                '</tr>';
            }
            $('#data_area').html(html);
        }

      });
    }
    load_data();


//     load_data= function(){     
//         get_area()
//         .done(function(response){
//             var data = response.data;
//             var html = [];
//             var no   = 0;
            

//             if(data.length === 0 ){
//                 var tr =[
//                 '<tr valign="midle">',
//                 '<td colspan="4">No Data</td>',
//                 '</tr>'
//                 ].join('\n');
//                 $('#data_area').html(tr);

//                 return;
//             }
//             $.each(data,function(index,item){
//                 no++;
//                 var tr = [
//                 '<tr>',
//                 '<td>'+ no+'</td>',
//                 '<td>'+ item.nama_area +'</td>',
//                 '<td>'+ item.nama_provinsi +'</td>',
//                 '<td>'+ item.nama_kabupaten +'</td>',
//                 '<td style="width: 70px;">',
//                 '<button type="button" class="btn btn-info btn-sm edit"  data-target="#update" data="'+item.id+'"><i class="fas fa-pencil-alt"></i></button>',
//                 '<button type="button" class="btn btn-danger btn-sm delete" data="'+item.id+'"><i class="fas fa-trash-alt"></i></button>',
//                 '</td>',
//                 '</tr>'
//                 ].join('\n');
//                 html.push(tr);
//             });
//             $('#data_area').html(html);
//             $('#example2').DataTable({
//               "paging": true,
//               "retrieve": true,
//               "lengthChange": false,
//               "searching": true,
//               "ordering": true,
//               "info": false,
//               "autoWidth": false
//           });
//      })
// .fail(function(response){
//     $('#data_area').html('<tr><td colspan="4">Tidak ada data</td></tr>');
// });
// }
// hide_all();
// $('#lihat_data_area').show();
// load_data();
    // server response

    // submit tambah
    $('#form_tambah_area').on('submit',function(e){
        e.preventDefault();
        var formData = new FormData();
        formData.append('nama',$('input[name=nama]',this).val());
        formData.append('id_provinsi',$('select[name=provinsi_1]',this).val());
        formData.append('id_kabupaten',$('select[name=kabupaten_1]',this).val());
            // formData.append('flg_aktif',$('select[name=flg_aktif]',this).val());

            tambah_area(formData)
            .done(function(res){
                var data = res;
                bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_area')[0].reset();
                    hide_all();
                    $('#lihat_data_area').show();
                    load_data(); 
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
                bootbox.alert('Data gagal ditambah, Silahkan coba lagi dan cek jaringan anda !!')
                // bootbox.alert(error);
            });
        });

    // get provinsi form ubah
    get_provinsi()
    .done(function(res){
        var select = [];
        $.each(res.data, function(i,e){
            var option = [
            '<option value="'+e.id+'">'+e.nama+'</option>'
            ].join('\n');
            select.push(option);
        });
        $('#form_ubah_area  select[id=provinsi_dup]').html(select);
    })

    // get provinsi form tambah
    get_provinsi()
    .done(function(res){
        var select = [];
        $.each(res.data, function(i,e){
            var option = [
            '<option value="'+e.id+'">'+e.nama+'</option>'
            ].join('\n');
            select.push(option);
        });
        $('#form_tambah_area  select[name=provinsi_1').html(select);
    })

    // get kabupaten form tambah
    $('#provinsi_1').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo $this->config->item('api_url');?>wilayah/provinsi/"+id+"/kabupaten",
            method : "GET",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(res){
                console.log(res);
                var select = [];
                $.each(res.data, function(i,e){
                    var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_tambah_area select[name=kabupaten_1]').html(select);      
            }
        });
    });

    $('#provinsi_dup').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo $this->config->item('api_url');?>wilayah/provinsi/"+id+"/kabupaten",
            method : "GET",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(res){
                var select = [];
                $.each(res.data, function(i,e){
                    var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_ubah_area select[id=kabupaten_dup]').html(select);      
            }
        });
    });


    $('#form_ubah_area select[id=provinsi2]').on('click', function(e){
        $('#select_provinsi').remove();
        $('#select_provinsi_dup').show();
        $('#select_kabupaten').remove();
        $('#select_kabupaten_dup').show();

    })

    // Click ubah
    $('#data_area').on('click', '.edit', function(e){
        e.preventDefault();
        $('#select_provinsi_dup').hide();
        $('#select_kabupaten_dup').hide();
        var id = $(this).attr('data');

        get_area({}, id)
        .done(function(response){
            var data = response.data;
            
            $('#form_ubah_area input[type=hidden][name=id]').val(data.id);
            $('#form_ubah_area input[name=nama]').val(data.nama_area);

            var select_provinsi = [];
                    var option_provinsi= [
                        '<option value="'+data.id_provinsi+'">'+data.nama_provinsi+'</option>'
                ].join('\n');
                select_provinsi.push(option_provinsi);
            $('#form_ubah_area select[id=provinsi2]').html(select_provinsi);

            var select_kabupaten = [];
                    var option_kabupaten= [
                        '<option value="'+data.id_kabupaten+'">'+data.nama_kabupaten+'</option>'
                ].join('\n');
                select_kabupaten.push(option_kabupaten);
            $('#form_ubah_area select[id=kabupaten]').html(select_kabupaten);

            $('#form_ubah_area select[name=flg_aktif]').val(data.flg_aktif);
        })
        .fail(function(jqXHR){
            bootbox.alert('Data tidak ditemukan, Coba cek jaringan anda dan refresh kembali !!');
        });
        hide_all();
        $('#lihat_ubah_area').show();
    });

    // klik submit update
    $('#form_ubah_area').on('submit',function(e){
        var id = $('input[name=id]',this).val();
        e.preventDefault();
        var formData = new FormData();
        var data ={
            nama: $('input[name=nama]',this).val(),
            id_provinsi: $('select[name=provinsi_dup]',this).val(),
            id_kabupaten: $('select[name=kabupaten_dup]',this).val(),
            flg_aktif: $('select[name=flg_aktif]',this).val()
        }
        update_area(data, id)
        .done(function(res){
            var data = res.data;
            bootbox.alert('Data berhasil diubah',function(){

                load_data();
                $('#form_ubah_area')[0].reset();
                hide_all();
                $('#lihat_data_area').show();
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
    $('#data_area').on('click','.delete',function(e){
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
                    delete_area(id)
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


    $('#click-add-area').on('click', function(e){
        e.preventDefault();
        NProgress.start();

        $.ajax({
            url : '<?php echo base_url('Master/add_area') ?>',
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

    // Click ubah
    $('#data_kantor_area').on('click', '.edit', function(e){
        e.preventDefault();

        var id = $(this).attr('data');

        get_asaldata({}, id)
        .done(function(response){
            var data = response.data;
            
            $('#form_update_asaldata input[type=hidden][name=id]').val(data.id);
            $('#form_update_asaldata input[name=nama_asaldata]').val(data.nama);
        })

        .fail(function(jqXHR){
            bootbox.alert('Data tidak ditemukan');
        });
        hide_all();
        $('#lihat_edit_asaldata').show();
    });

    $('#provinsi2').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo $this->config->item('api_url');?>wilayah/provinsi/"+id+"/kabupaten",
            method : "GET",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(res){
                var select = [];
                $.each(res.data, function(i,e){
                    var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                    ].join('\n');
                    select.push(option);
                });
                $('#form_ubah_area select[name=kabupaten]').html(select);      
            }
        });
    });


});
</script>