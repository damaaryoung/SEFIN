
<div id="lihat_area_pic" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Area PIC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Area PIC</li>
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
                            <button class="btn btn-primary tambah" id="click-add-area-pic" style="margin-bottom: 9px;"><i class="fa fa-user-plus">Tambah</i></button>
                            <table id="example2" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="5px">
                                            No
                                        </th>
                                        <th>
                                            Area PIC
                                        </th>
                                        <th>
                                            Area Kerja
                                        </th>
                                        <th>
                                            Kantor Cabang
                                        </th>
                                        <th>
                                            Kelurahan
                                        </th>
                                        <th>
                                            Kode POS
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_area_pic" style="font-size: 13px">
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
<div id="lihat_tambah_area_pic" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Area PIC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Area PIC</li>
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
                        <form role="form" id="form_tambah_area_pic">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Area</label>
                                    <select name="area" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Area Cabang</label>
                                    <select name="cabang" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Area PIC</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Area PIC">
                                </div>
                                <div class="form-group">
                                    <label>Select Provinsi</label>
                                    <select name="provinsi" id="provinsi2" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kabupaten</label>
                                    <select name="kabupaten" id="kabupaten2" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kecamatan</label>
                                    <select name="kecamatan" id="kecamatan2" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kelurahan</label>
                                    <select name="kelurahan" id="kelurahan2" class="form-control">
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
<div id="lihat_ubah_area_pic" class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ubah Area PIC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Area PIC</li>
                        <li class="breadcrumb-item active">Ubah Area PIC</li>
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
                        <form role="form" id="form_ubah_area_pic">
                            <input type="hidden" name="id" value="">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Area</label>
                                    <select name="area_1" id="area_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Area Cabang</label>
                                    <select name="cabang_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Area PIC</label>
                                    <input type="text" class="form-control" name="nama_1" placeholder="Isi Nama Area PIC">
                                </div>
                                <div class="form-group">
                                    <label>Select Provinsi</label>
                                    <select name="provinsi_1" id="provinsi_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kabupaten</label>
                                    <select name="kabupaten_1" id="kabupaten_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kecamatan</label>
                                    <select name="kecamatan_1" id="kecamatan_1" class="form-control">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Select Kelurahan</label>
                                    <select name="kelurahan_1" id="kelurahan_1" class="form-control">
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
    hide_all = function(){
        $('#lihat_area_pic').hide();
        $('#lihat_tambah_area_pic').hide();
        $('#lihat_ubah_area_pic').hide();
        
    }
    hide_all();
    $('#lihat_area_pic').show();
    $('#click-add-area-pic').click(function(){
        hide_all();
        $('#lihat_tambah_area_pic').show();
    });
    get_area_pic = function(opts, id){
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_pic/';

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
    get_area_cabang = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_cabang';
        return $.ajax({
            type: 'GET',
            url : url,
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
    }

    delete_area = function(id){
        var url = '<?php echo $this->config->item('api_url');?>/api/master/area_pic/'+id;

        return $.ajax({
            url : url,
            type: 'DELETE',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
    }

    tambah_area_pic = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_pic';
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

    update_area_pic = function(opts,id){
        var data = opts;
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_pic/'+id;
        return $.ajax({
            url: url,
            data: data,
            contentType: false,
            processData: false,
            cache: false,
            type: 'PUT',
            headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        })
    }

    load_data= function(){
        
        get_area_pic()
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
                $('#data_area_pic').html(tr);

                return;
            }
            $.each(data,function(index,item){
                no++;
                var tr = [
                '<tr>',
                '<td>'+ no+'</td>',
                '<td>'+ item.nama_area_pic +'</td>',
                '<td>'+ item.nama_area_kerja +'</td>',
                '<td>'+ item.nama_kantor_cabang +'</td>',
                '<td>'+ item.nama_kelurahan +'</td>',
                '<td>'+ item.kode_pos +'</td>',
                '<td style="width: 70px;">',
                '<button type="button" class="btn btn-info btn-sm edit"  data-target="#update" data="'+item.id+'"><i class="fas fa-pencil-alt"></i></button>',
                '<button type="button"  class="btn btn-danger btn-sm delete" data="'+item.id+'"><i class="fas fa-trash-alt"></i></button>', 
                '</td>',
                '</tr>'
                ].join('\n');
                html.push(tr);
            });
            $('#data_area_pic').html(html);
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
    $('#data_area_pic').html('<tr><td colspan="4">Tidak ada data</td></tr>');
});
}
hide_all();
$('#lihat_area_pic').show();
load_data();
    // server response

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
                $('#form_tambah_area_pic select[name=kabupaten]').html(select);      
            }
        });
    });

    $('#provinsi_1').change(function(){
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
                $('#form_ubah_area_pic select[name=kabupaten_1]').html(select);      
            }
        });
    });

    $('#kabupaten2').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo $this->config->item('api_url');?>wilayah/kabupaten/"+id+"/kecamatan",
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
                $('#form_tambah_area_pic select[name=kecamatan]').html(select);      
            }
        });
    });

    $('#kabupaten_1').change(function(){
        var id=$(this).val();
        $.ajax({
            url : "<?php echo $this->config->item('api_url');?>wilayah/kabupaten/"+id+"/kecamatan",
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
                $('#form_ubah_area_pic select[name=kecamatan_1]').html(select);      
            }
        });
    });

    $('#kecamatan2').change(function(){
       var id=$(this).val();
       $.ajax({
           url : "<?php echo $this->config->item('api_url');?>wilayah/kecamatan/"+id+"/kelurahan",
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
               $('#form_tambah_area_pic select[name=kelurahan]').html(select);      
           }
       });
   });

    $('#kecamatan_1').change(function(){
       var id=$(this).val();
       $.ajax({
           url : "<?php echo $this->config->item('api_url');?>wilayah/kecamatan/"+id+"/kelurahan",
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
               $('#form_ubah_area_pic select[name=kelurahan_1]').html(select);      
           }
       });
   });

    get_area()
    .done(function(res){
        var select = [];
        $.each(res.data, function(i,e){
            var option = [
            '<option value="'+e.id+'">'+e.nama_area+'</option>'
            ].join('\n');
            select.push(option);
        });
        $('#form_tambah_area_pic select[name=area]').html(select);
    })
    get_area_cabang ()
    .done(function(res){
        var select = [];
        $.each(res.data, function(i,e){
            var option = [
            '<option value="'+e.id+'">'+e.nama_cabang+'</option>'
            ].join('\n');
            select.push(option);
        });
        $('#form_tambah_area_pic select[name=cabang]').html(select);
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
        $('#form_ubah_area_pic select[name=area_1]').html(select);
    })
    get_area_cabang ()
    .done(function(res){
        var select = [];
        $.each(res.data, function(i,e){
            var option = [
            '<option value="'+e.id+'">'+e.nama_cabang+'</option>'
            ].join('\n');
            select.push(option);
        });
        $('#form_ubah_area_pic select[name=cabang_1]').html(select);
    })

    get_provinsi()
    .done(function(res){
        var select = [];
        $.each(res.data, function(i,e){
            var option = [
            '<option value="'+e.id+'">'+e.nama+'</option>'
            ].join('\n');
            select.push(option);
        });
        $('#form_tambah_area_pic select[name=provinsi]').html(select);
    })

    get_provinsi()
    .done(function(res){
        var select = [];
        $.each(res.data, function(i,e){
            var option = [
            '<option value="'+e.id+'">'+e.nama+'</option>'
            ].join('\n');
            select.push(option);
        });
        $('#form_ubah_area_pic select[name=provinsi_1]').html(select);
    })

    //Click submit tambah data
    $('#form_tambah_area_pic').on('submit',function(e){
        e.preventDefault();
        var formData = new FormData();
        formData.append('id_mk_area',$('select[name=area]',this).val());
        formData.append('id_mk_cabang',$('select[name=cabang]',this).val());
        formData.append('nama_area_pic',$('input[name=nama]',this).val());
        formData.append('id_provinsi',$('select[name=provinsi]',this).val());
        formData.append('id_kabupaten',$('select[name=kabupaten]',this).val());
        formData.append('id_kecamatan',$('select[name=kecamatan]',this).val());
        formData.append('id_kelurahan',$('select[name=kelurahan]',this).val());

        tambah_area_pic(formData)
        .done(function(res){
            console.log(res);
            var data = res;
            bootbox.alert('Data berhasil ditambah',function(){
                $('#form_tambah_area_pic')[0].reset();
                hide_all();
                $('#lihat_area_pic').show();
                load_data();
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
    $('#data_area_pic').on('click', '.edit', function(e){
        e.preventDefault();

        var id = $(this).attr('data');

        get_area_pic({}, id)
        .done(function(response){
            var data = response.data;
            
            $('#form_ubah_area_pic input[type=hidden][name=id]').val(data.id);
            $('#form_ubah_area_pic input[name=nama_1]').val(data.nama_area_pic);
            $('#form_ubah_area_pic select[name=area_1]').val(data.id_area);
            $('#form_ubah_area_pic select[name=cabang_1]').val(data.id_cabang);
            $('#form_ubah_area_pic select[name=provinsi_1]').val(data.id_provinsi);
            $('#form_ubah_area_pic select[name=kabupaten_1]').val(data.id_kabupaten);
            $('#form_ubah_area_pic select[name=kecamatan_1]').val(data.id_kecamatan);
            $('#form_ubah_area_pic select[name=kelurahan_1]').val(data.id_kelurahan);
            $('#form_ubah_area_pic select[name=flg_aktif]').val(data.flg_aktif);
        })
        .fail(function(jqXHR){
            bootbox.alert('Data tidak ditemukan, Coba cek jaringan anda dan refresh kembali !!');
        });
        hide_all();
        $('#lihat_ubah_area_pic').show();
    });

    //delete
    $('#data_area_pic').on('click','.delete',function(e){
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

    // klik submit update
    $('#form_ubah_area_pic').on('submit',function(e){
        var id = $('input[name=id]',this).val();
        console.log(id);
        e.preventDefault();
        var formData = new FormData();
        var data ={
            id_area_kerja: $('select[name=area_1]',this).val(),
            id_area_cabang: $('select[name=cabang_1]',this).val(),
            id_prov: $('select[name=provinsi_1]',this).val(),
            id_kab: $('select[name=kabupaten_1]',this).val(),
            id_kec: $('select[name=kecamatan_1]',this).val(),
            id_kel: $('select[name=kelurahan_1]',this).val(),
            flg_aktif: $('select[name=flg_aktif]',this).val(),
            nama_area_pic: $('input[name=nama_1]',this).val()
        }
        console.log(data);
        update_area_pic(data, id)
        .done(function(res){
            console.log(res);
            var data = res.data;
            bootbox.alert('Data berhasil diubah',function(){

                load_data();
                $('#form_ubah_area_pic')[0].reset();
                hide_all();
                $('#lihat_area_pic').show();
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