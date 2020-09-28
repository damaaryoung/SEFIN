<style>
    .bone{
        margin-left: 260px;
    }
    .tambah{
        margin-right: 36px;
        margin-top: 6px;
    }
    .b1{
        height: 60px;
    }
    .bone2{
        width: 100%;
    }
    #petugas{
        text-align : center;
    }
    
    .no{
      text-align: center;
    }

    .np{
        text-align: center;
        line-height: 71px;
    }
    .ak{
        text-align: center;
        line-height: 71px;
    }
    .un{
        text-align: center;
    }
</style>

<!-- DATA USERS -->
<section class="content-header">
    <h1>
    Setting Petugas
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Admin Master</a></li>
        <li class="active">Petugas</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box" id="lihat_petugas">
        <div class="box-header with-border b1">
            <h3 class="box-title">Data Users</h3>
            <div class="box-tools pull-right">
              <button  class="btn btn-primary tambah" id="tambah_petugas"><i class="fa fa-user-plus">Tambah</i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover" id="petugas">
                <thead>
                    <tr>
                        <th class="no">No</th>
                        <th class="un">Username</th>
                        <th class="np">Nama Petugas</th>
                        <th class="ak">Aksi</th>
                    </tr>
                </thead>
                <tbody id="data_petugas" >
                </tbody>
            </table>
            <div class="btn-group pull-right" id="pagination"></div>
        </div>
    </div>
    <div class="row" id="update_petugas">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Update Petugas</h3>
            </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" id="form_update_petugas">
            <div class="box-body col-md-6 bone">
                <!-- <input type="hidden" name="id" value="" /> -->
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Petugas</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="required">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" required="required">
                        <option value="">-Pilih Jenis Kelamin-</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="text" name="nip" class="form-control"  placeholder="NIP"required="required">
                </div>
                <div class="form-group">
                <label for="exampleInputFile">Pelayanan</label>
                    <select class="form-control" name="pelayanan" id="jenis_pelayanan">
                        <option value="">Pilih Pelayanan</option>
                    </select>
               </div>
               <div class="form-group">
                      <label for="exampleInputFile">Loket</label>
                        <select class="form-control" name="loket" id="jenis_loket">
                              <option value="">Pilih Loket</option>
                        </select>
                </div>
                <div id="update_pelayanan"></div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="gambar" >
                    <p class="help-block">Foto untuk petugas.</p>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" name="gambar2" >
                    <p class="help-block">Foto untuk tampilan ratting terima kasih .</p>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger cancel">Cancel</button>
                </div>
            </div>
        <!-- /.box-body -->
            <div class="box-footer">
            </div>
        </form>
        </div>
      <!-- /.box -->
    </div>
</div>
  <!-- /.row -->
    
    <div class="row" id="form_petugas">
        <!-- left column -->
        <div class="col-md-12">
        <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form Petugas</h3>
                </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" id="form_tambah_petugas">
                <div class="box-body col-md-6 bone">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required="required">
                            <option value="">-Pilih Jenis Kelamin-</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Petugas</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required="required">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">NIP</label>
                        <input type="text" name="nip" class="form-control"  placeholder="NIP" required="required">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Pelayanan</label>
                          <select class="form-control" name="pelayanan[]" id="jenis_pelayanan">
                              <option value="">Pilih Pelayanan</option>
                          </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Loket</label>
                          <select class="form-control" name="loket[]" id="jenis_loket">
                              <option value="">Pilih Loket</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                            <input type="file" name="gambar" required="required">
                        <p class="help-block">Foto untuk petugas.</p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" name="gambar2" required="required">
                        <p class="help-block">Foto untuk tampilan ratting terima kasih .</p>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger cancel">Cancel</button>
                    </div>
                </div>
                <!-- /.box-body -->
                    <div class="box-footer">
                    </div>
                </form>
            </div>
          <!-- /.box -->
        </div>
    </div>
      <!-- /.row -->
      <!-- Change password petugas -->
    <div class="row" id="ubah_password">
        <!-- left column -->
        <div class="col-md-12">
        <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ubah Password Petugas</h3>
                </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" id="form_update_password">
                <div class="box-body col-md-6 bone">
                    <input type="hidden" name="id" value="">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password baru</label>
                        <input type="password" name="password_baru" class="form-control" placeholder="Password Baru" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger cancel">Cancel</button>
                    </div>
                </div>
                <!-- /.box-body -->
                    <div class="box-footer">
                    </div>
                </form>
            </div>
          <!-- /.box -->
        </div>
    </div>
      <!-- /.row -->

    <!-- Detail Modal -->  
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Lihat Petugas</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="detail_petugas">
                    <div class="box-body col-md-6 bone2">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" name="username" class="form-control"  placeholder="Username" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Petugas</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" disabled>
                    </div>
                    <!-- <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"  disabled>
                    </div> -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" disabled>
                            <option value="">-Pilih Jenis Kelamin-</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">NIP</label>
                        <input type="text" name="nip" class="form-control"  placeholder="NIP" disabled>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Pelayanan</label>
                        <select class="form-control" name="pelayanan" id="jenis_pelayanan" disabled>
                            <option value="">Pilih Pelayanan</option>
                        </select>
                   </div>
                   <div class="form-group">
                        <label for="exampleInputFile">Loket</label>
                        <select class="form-control" name="loket" id="jenis_loket" disabled>
                                <option value="">Pilih Loket</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Awal</label>
                        <div id="data-gambar"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Terimakasih</label>
                        <div id="data-gambar2"></div>
                    </div>
            <!-- /.box-body -->
                    <div class="box-footer">
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal --> 
</section>
<script>
  $(function () {
    var get_petugas;
    var tambah_petugas;
    var update_password_petugas;
    var hide_all;
    var delete_petugas;
    var update_petugas;
    var load_data;
    var data_user;
    var get_pelayanan;
    var nama_pelayanan = [];
    var get_loket;
    var nama_loket = [];
    var id_user;

   
    // sembunyikan semua element
    hide_all = function(){
        $('#lihat_petugas').hide();
        $('#form_petugas').hide();
        $('#update_petugas').hide();
        $('#ubah_password').hide()
    }
    hide_all();

    $('#lihat_petugas').show();

    // klik tambah
    $('#tambah_petugas').click(function(){
        hide_all();
        $('#form_petugas').show();
    });

    // klik cancel form
    $('#form_petugas').on('click','.cancel',function(){
        hide_all();
        $('#lihat_petugas').show();
    });

    // klik cancel update
    $('#update_petugas').on('click','.cancel',function(){
        hide_all();
        $('#lihat_petugas').show();
    });

    $('#form_update_password').on('click','.cancel',function(){
        hide_all();
        $('#lihat_petugas').show();
    });

    // Data  user
    data_user = function(opts,id){
        var data = {};
        var url ='<?php echo $this->config->item('api_url');?>user/';

        if(id != undefined){
            url+=id;
        }

        if(opts != undefined){
            var data = opts;
        }

        
        return $.ajax({
            url : url,
            data :data,
            headers : {
                Authorization:token
            }
        });
    }
    // GET Petugas
    get_petugas = function(opts,id){
        var data = {};
        var url ='<?php echo $this->config->item('api_url');?>petugas/';

        if(id != undefined){
            url+=id;
        }

        if(opts != undefined){
            var data = opts;
        }

        
        return $.ajax({
            url : url,
            data :data,
            headers : {
                Authorization:token
            }
        });
    }

    // tambah
    tambah_petugas = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>petugas/';
        var data = opts;

        return $.ajax({
            url : url,
            type: 'POST',
            contentType: false,
            processData: false,
            data: data,
            headers : {
                Authorization:token
            }
        });
    }

    // update user
    update_petugas = function(opts,id){
        var url = '<?php echo $this->config->item('api_url');?>petugas/update/'+id;
        var data= opts;

        return $.ajax({
            url: url,
            data: data,
            contentType: false,
            processData: false,
            cache: false,
            type: 'POST',
            headers : {
                Authorization:token
            }
        });
    }

    // hapus user
    delete_petugas = function(id){
        var url = '<?php echo $this->config->item('api_url');?>user/hapus/'+id;

        return $.ajax({
            url : url,
            type: 'POST',
            headers : {
                Authorization:token
            }
        });
    }

    //get pelayanan
    get_pelayanan = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>pelayanan/';
        return $.ajax({
            url : url,
            headers : {
                Authorization : token
            }
        });
    }

    //get loket
    get_loket = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>loket/';
        return $.ajax({
            url : url,
            headers : {
                Authorization : token
            }
        });
    }
    // update password petugas
    update_password_petugas = function(opts,id){
        var data = opts;
        var url = '<?php echo $this->config->item('api_url');?>user/update_password/'+id;

        return $.ajax({
            url: url,
            data: data,
            type: 'POST',
            headers :{
                Authorization : token
            }
        });
    }
    // update_petugas = function(opts,id){
    //     var url = '<?php echo $this->config->item('api_url');?>petugas/update/'+id;
    //     var data= opts;

    //     return $.ajax({
    //         url: url,
    //         data: data,
    //         contentType: false,
    //         processData: false,
    //         cache: false,
    //         type: 'POST',
    //         headers : {
    //             Authorization:token
    //         }
    //     });
    // }
    // load data petugas
    load_data= function(pagin){
        var data = {};
            data.page = pagin;
        
        get_petugas(data)
        .done(function(response){
            var data = response.data;
            var html = [];
            var paging = response;
            var page = '';
            var no = paging.current_page*10-10;
            

                if(data.length === 0 ){
                    var tr =[
                        '<tr valign="midle">',
                            '<td colspan="4">No Data</td>',
                        '</tr>'
                    ].join('\n');
                    $('#data_petugas').html(tr);

                    return;
                }
                $.each(data,function(index,item){
                    no++;
                    var tr = [
                        '<tr>',
                            '<td>'+ no +'</td>',
                            '<td>'+ item.username +'</td>',
                            '<td>'+ item.nama_petugas +'</td>',
                            '<td>',
                                '<button type="button" class="btn btn-primary md-btn-wave-light waves-effect waves-button waves-light update" data="'+item.id_user+'"><i class="fa fa-pencil-square-o fa-lg"></i></button>',
                                '<button type="button" class="btn btn-success md-btn-wave-light waves-effect waves-button waves-light lihat" data-toggle="modal" data-target="#modal-default" data="'+item.id_user+'"><i class="fa fa-eye fa-lg"></i></button>',
                                '<button type="button" class="btn btn-danger md-btn-wave-light waves-effect waves-button waves-light delete" data="'+item.id_user+'"><i class="fa fa-trash fa-lg"></i></button>',
                                '<button type="button" class="btn btn-info md-btn-wave-light waves-effect waves-button waves-light pasword" data="'+item.id_user+'"><i class="fa fa-key fa-lg"></i></button>',
                            '</td>',
                        '</tr>'
                    ].join('\n');
                    html.push(tr);
                });

                // PAGINATION
                if(paging.current_page != 1){
                    page += '<a class="btn btn-default pagin" data="1" href="#"><i class="ace-icon fa fa-angle-double-left"></i></a>';
                }else{
                    page += '<a class="btn btn-default disabled" href="#"><i class="ace-icon fa fa-angle-double-left"></i></a>';
                }

               if (paging.total_page <= 5) {
                    for(var i=1; i <= paging.total_page; i++){
                        if (i==paging.current_page) {
                            page += '<a class="btn btn-danger pagin" data="'+i+'" href="#">'+i+'</a>';
                        }else{
                            page += '<a class="btn btn-default pagin" data="'+i+'" href="#">'+i+'</a>';
                        }
                    }
                } else {
                    for(var i=1; i <= paging.total_page; i++){

                        if (((i >= paging.current_page - 2) && (i <= paging.current_page + 2)) || (i == 1) || (i == paging.total_page)){
                            if((showpage == 1) && (i != 2)){
                                page += '<a class="btn btn-default disable" href="#">...</a>';
                            }
                            if((showpage != (paging.total_page - 1)) && (i == paging.total_page)){
                                page += '<a class="btn btn-default disable" href="#">...</a>';
                            }
                            if (i==paging.current_page) {
                                page += '<a class="btn btn-danger pagin" data="'+i+'" href="#">'+i+'</a>';
                            }else{
                                page += '<a class="btn btn-default pagin" data="'+i+'" href="#">'+i+'</a>';
                            }
                            var showpage = i;
                          }
                    }
                }

                if(paging.current_page != paging.total_page){
                    page += '<a class="btn btn-default pagin" data="'+paging.total_page+'" href="#"><i class="ace-icon fa fa-angle-double-right"></i></a>';
                }else{
                    page += '<a class="btn btn-default disabled" href="#"><i class="ace-icon fa fa-angle-double-right"></i></a>';
                }

                $('#pagination').html(page);
                $('#data_petugas').html(html);
        })
        .fail(function(response){
            $('#data_petugas').html('<tr><td colspan="4">Tidak ada data</td></tr>');
        });
    }
    hide_all();
    $('#lihat_petugas').show();
    load_data();
    
    // get loket
    get_loket()
    .done(function(response){
        var data = response.data;

        $.each(data, function(index, item){
            $('#jenis_loket').append('<option value="'+ item.id_loket +'">'+ item.nama_loket +'</option>');
            $('#form_tambah_petugas #jenis_loket').append('<option value="'+ item.id_loket +'">'+ item.nama_loket +'</option>')
            $('#detail_petugas select[name=loket]').append('<option value="'+ item.id_loket +'">'+ item.nama_loket +'</option>');
            nama_loket.push('<option value="'+ item.id_loket +'">'+ item.nama_loket +'</option>');
        })
    })
    // get pelayanan
    get_pelayanan()
    .done(function(response){
        var data = response.data;

        $.each(data, function(index, item){
            $('#jenis_pelayanan').append('<option value="'+ item.id_pelayanan +'">'+ item.nama_pelayanan +'</option>');
            $('#form_tambah_petugas #jenis_pelayanan').append('<option value="'+ item.id_pelayanan +'">'+ item.nama_pelayanan +'</option>')
            $('#detail_petugas select[name=pelayanan]').append('<option value="'+ item.id_pelayanan +'">'+ item.nama_pelayanan +'</option>');
            nama_pelayanan.push('<option value="'+ item.id_pelayanan +'">'+ item.nama_pelayanan +'</option>');
        })
    });
    
    //submit  form tambah petugas
    $('#form_tambah_petugas').on('submit',function(e){
        e.preventDefault();
        var formData = new FormData();
        formData.append('username',$('input[name=username]',this).val());
        formData.append('password',$('input[name=password]',this).val());
        formData.append('jenkel',$('select[name=jenis_kelamin]',this).val());
        formData.append('nama_petugas',$('input[name=nama]',this).val());
        formData.append('nip',$('input[name=nip]',this).val());

        $.each($('select[name="pelayanan[]"]'),function(i,e){
            formData.append('id_pelayanan',e.value);
        });

        $.each($('select[name="loket[]"]'),function(i,e){
            formData.append('id_loket',e.value);
        });
            
        if($('input[name=gambar]',this)[0].files[0] !== undefined){
            formData.append('gambar',$('input[name=gambar]',this)[0].files[0]);
        }

        if($('input[name=gambar2]',this)[0].files[0] !== undefined){
            formData.append('gambar2',$('input[name=gambar2]',this)[0].files[0]);
        }
        tambah_petugas(formData)
        .done(function(res){
            var data = res.data;
                bootbox.alert('Data berhasil ditambah',function(){

                load_data();
                $('#form_tambah_petugas')[0].reset();
                hide_all();
                $('#lihat_petugas').show();
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
    
    $('#data_petugas').on('click', '.lihat', function(e){
        e.preventDefault();
        var id = $(this).attr('data');

        get_petugas({}, id)
        // get_pelayanan()
        .done(function(response){
            var data = response;
            var pelayanan = data.pelayanan;
            var html = [];
            var html2 = [];
            var id_pelayanan = [];
            id_user = data.id_user;

            $('#detail_petugas input[type=text][name=nama]').val(data.nama_petugas);
            $('#detail_petugas input[type=text][name=username]').val(data.username);
            $('#detail_petugas select[name=jenis_kelamin]').val(data.jenkel);
            $('#detail_petugas select[name=pelayanan]').val(data.id_pelayanan);
            $('#detail_petugas select[name=loket]').val(data.id_loket);
            $('#detail_petugas input[type=text][name=nip]').val(data.nip);

            var a = [
                '<img class="img-circle" style="width: 300px;height: 300px;" id="imagetampil" src="<?php echo $this->config->item('img_url') ?>'+data.gambar+'" alt="<?php echo $this->config->item('img_url') ?>'+data.gambar+'">'
            ].join('\n');

            html.push(a);

            $('#data-gambar').html(html);

            var b = [
                '<img class="img-circle" style="width: 300px;height: 300px;" id="imagetampil2" src="<?php echo $this->config->item('img_url') ?>'+data.gambar2+'" alt="">'
            ].join('\n');

            html2.push(b);

            $('#data-gambar2').html(html2);

            

            // $.each($('select[name="pelayanan"]'),function(i,e){
            //     formData.append('id_pelayanan',e.value);
            // });

            // $.each($('select[name="loket"]'),function(i,e){
            //     formData.append('id_loket',e.value);
            // });


            // $.each($('#form_update_petugas [name="pelayanan[]"]'), function(i, e){
            //     e.value = id_pelayanan[i];
            // });

            
        })
        .fail(function(jqXHR){
            NProgress.done();
            bootbox.alert('Data tidak ditemukan');
        });
    });
    
    //  klik update user
    $('#data_petugas').on('click', '.update', function(e){
        e.preventDefault();
        hide_all();
        $('#update_petugas').show();
        var id = $(this).attr('data');

        get_petugas({}, id)
        .done(function(response){
            var data = response;
            var pelayanan = data.pelayanan;
            var html = [];
            var id_pelayanan = [];
            id_user = data.id_user;

            $('#form_update_petugas input[type=text][name=nama]').val(data.nama_petugas);
            $('#form_update_petugas select[name=jenis_kelamin]').val(data.jenkel);
            $('#form_update_petugas select[name=pelayanan]').val(data.id_pelayanan);
            $('#form_update_petugas select[name=loket]').val(data.id_loket);
            $('#form_update_petugas input[type=text][name=nip]').val(data.nip);
            $('#form_update_petugas input[type=file][name=gambar]').val(data.gambar);
            $('#form_update_petugas input[type=file][name=gambar2]').val(data.gambar2);

            // $.each($('select[name="pelayanan"]'),function(i,e){
            //     formData.append('id_pelayanan',e.value);
            // });

            // $.each($('select[name="loket"]'),function(i,e){
            //     formData.append('id_loket',e.value);
            // });


            // $.each($('#form_update_petugas [name="pelayanan[]"]'), function(i, e){
            //     e.value = id_pelayanan[i];
            // });

            
        })
        .fail(function(jqXHR){
            NProgress.done();
            bootbox.alert('Data tidak ditemukan');
        });
    });

    // klik submit update
    $('#form_update_petugas').on('submit',function(e){
        e.preventDefault();

        var formData = new FormData();

        formData.append('nama_petugas',$('input[name=nama]',this).val());
        formData.append('jenkel',$('select[name=jenis_kelamin]',this).val());
        formData.append('nip',$('input[name=nip]',this).val());
        formData.append('id_loket', $('[name=loket]', this).val());
        formData.append('id_pelayanan', $('[name=pelayanan]', this).val());


        // $.each($('[name="pelayanan[]"]'),function(i,e){
        //     formData.append('id_pelayanan',e.value);
        // });
            
        if($('input[name=gambar]',this)[0].files[0] !== undefined){
            formData.append('gambar',$('input[name=gambar]',this)[0].files[0]);
        }

        if($('input[name=gambar2]',this)[0].files[0] !== undefined){
            formData.append('gambar2',$('input[name=gambar2]',this)[0].files[0]);
        }
        update_petugas(formData,id_user)
        .done(function(res){
            var data = res.data;
                bootbox.alert('Data berhasil diupdate',function(){

                load_data();
                $('#form_update_petugas')[0].reset();
                hide_all();
                $('#lihat_petugas').show();
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
    $('#pagination').on('click', '.pagin', function(e){
        e.preventDefault();

        var pagin = $(this).attr('data');

        load_data(pagin);
     });

    //  delete petugas
    $('#data_petugas').on('click','.delete',function(e){
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
                    delete_petugas(id)
                    .done(function(res){
                        load_data();
                    })
                    .fail(function(jqXHR){
                        console.log(jqXHR);
                    })
                }
            }   
        });
    });

    // change password petugas
    $('#data_petugas').on('click', '.pasword', function(e){
        e.preventDefault();
        var id = $(this).attr('data');

        get_petugas({}, id)
        .done(function(response){
            var data = response;
            $('input[name=id]', '#form_update_password').val(data.id_user);
            
        hide_all();
        $('#ubah_password').show();
        })
        .fail(function(jqXHR){
            NProgress.done();
            bootbox.alert('Data tidak ditemukan');
        });
    });
    // update pasword
    $('#form_update_password').on('submit',function(e){
            e.preventDefault();
            var id = $('input[name=id]', this).val();

            var data = {
                password_baru: $('input[name=password_baru]', this).val()
            }

            update_password_petugas(data, id)
            .done(function(response){
                bootbox.alert('Password berhasil diperbarui.',function(){
                    $('#form_update_password')[0].reset();
                    hide_all();
                    $('#lihat_petugas').show();
                });
            })
            .fail(function(jqXHR){
                var data = jqXHR.responseJSON;
                var error = "";

                    if(typeof data == 'string'){
                        error ='<p>'+ data +'</p>';
                    }else{
                        $.each(data, function(index,item){
                            error += '<p>'+ item +'</p>' +"\n";
                        });
                    }

                    bootbox.alert(error);
            })
        })
    // $('#example1').DataTable()
    // $('#example2').DataTable({
    //   'paging'      : true,
    //   'lengthChange': false,
    //   'searching'   : false,
    //   'ordering'    : true,
    //   'info'        : true,
    //   'autoWidth'   : false
    // })
  });
</script>