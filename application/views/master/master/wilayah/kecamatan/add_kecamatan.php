  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kecamatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kecamatan</li>
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
              </div>

              <form role="form" id="form_tambah_kecamatan">
                <div class="card-body">
                  <div class="form-group">
                    <label>Select Kabupaten</label>
                    <select name="kabupaten" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" placeholder="Isi Nama Kecamatan">
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
      var tambah_kecamatan

      get_kabupaten = function(opts){
          var url = '<?php echo $this->config->item('api_url');?>wilayah/kabupaten';
          return $.ajax({
              type: 'GET',
              url : url,
              headers : {
                  'Authorization': 'Bearer '+localStorage.getItem('token')
              }
          });
      }

       tambah_kecamatan = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>wilayah/kecamatan';
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

        get_kabupaten()
        .done(function(res){
          console.log(res);
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_kecamatan select[name=kabupaten]').html(select);
        })

        $('#form_tambah_kecamatan').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama',$('input[name=kecamatan]',this).val());
            formData.append('id_kabupaten',$('select[name=kabupaten]',this).val());

            tambah_kecamatan(formData)
            .done(function(res){
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_kecamatan')[0].reset();
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