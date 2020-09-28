  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kelurahan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kelurahan</li>
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
                <!-- <h3 class="card-title">Tambah Kelurahan</h3> -->
              </div>

              <form role="form" id="form_tambah_kelurahan">
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Kecamatan</label>
                    <select name="kecamatan" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kelurahan</label>
                    <input type="text" class="form-control" name="kelurahan" placeholder="Isi Nama Kelurahan">
                  </div>
                  <div class="form-group">
                    <label>Kode POS</label>
                    <input type="text" class="form-control" name="kode_pos" maxlength="5" placeholder="Isi Kode POS">
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
        var tambah_kelurahan
        get_kecamatan = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>wilayah/kecamatan';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

        get_kecamatan()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_kelurahan select[name=kecamatan]').html(select);
        })

       tambah_kelurahan = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>wilayah/kelurahan';
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

        $('#form_tambah_kelurahan').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama',$('input[name=kelurahan]',this).val());
            formData.append('id_kecamatan',$('select[name=kecamatan]',this).val());
            formData.append('kode_pos',$('input[name=kode_pos]',this).val());
            tambah_kelurahan(formData)
            .done(function(res){
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_kelurahan')[0].reset();
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