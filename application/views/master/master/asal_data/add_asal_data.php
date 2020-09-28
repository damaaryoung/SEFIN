  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Asal Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Asal Data</li>
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

              <form role="form" id="form_tambah_asal_data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Asal Data</label>
                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Asal Data">
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
        var tambah_asaldata

       tambah_asaldata = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>/api/master/asal_data';
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

        $('#form_tambah_asal_data').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama',$('input[name=nama]',this).val());

            tambah_asaldata(formData)
            .done(function(res){
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_asal_data')[0].reset();
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

    });

</script>