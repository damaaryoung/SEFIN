  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Jenis PIC</h1>
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

              <form role="form" id="form_tambah_jenis_pic ">
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
      </div><!-- /.container-fluid -->
    </section>
  </div>

<script>

   $(function(){
        var tambah_jenis_pic

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


        $('#form_tambah_jenis_pic').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama_jenis',$('input[name=nama_jenis]',this).val());
            formData.append('keterangan',$('input[name=keterangan]',this).val());

            tambah_jenis_pic(formData)
            .done(function(res){
              console.log(res);
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_jenis_pic')[0].reset();
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

    });

</script>