<style>
    .bone{
        margin-left: 260px;
    } margin-top: 6px;
    }
    .b1{
        height: 60px;
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
        <li class="active">Ubah Password</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row" >
        <!-- left column -->
        <div class="col-md-12">
        <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ubah Password Admin</h3>
                </div>
                <form method="post" id="form_update_password">
                    <div class="box-body col-md-6 bone">
                        <input type="hidden" name="id" value=""/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password Lama</label>
                            <input type="password" name="password_lama" class="form-control"  placeholder="Password lama" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password baru</label>
                            <input type="password" name="password_baru" class="form-control" placeholder="Password Baru" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                            <input type="password" name="konfirmasi_password" class="form-control" placeholder=" Konfirmasi Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger cancel">Cancel</button>
                        </div>
                    </div>
                    <div class="box-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $(function(){
        var update_password ;
        var cancel;

        update_password = function(opts,id){
            var data = opts;
            var url = '<?php echo $this->config->item('api_url');?>user/admin_password/';
            return $.ajax({
                url: url,
                data: data,
                type: 'POST',
                headers:{
                    Authorization : token
                }
            })
        }
        $('#form_update_password').on('submit',function(e){
            e.preventDefault();
            var id = $('input[name=id]', this).val();
            var data = {
                password_lama: $('input[name=password_lama]',this).val(),
                password_baru: $('input[name=password_baru]',this).val(),
                password_konfirmasi : $('input[name=konfirmasi_password]',this).val()
            }
            update_password(data)
            .done(function(response){
                bootbox.alert('Password berhasil diperbarui.',function(){
                    $('#form_update_password')[0].reset();
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
    });
</script>
