  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Area</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Area</li>
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
                <!-- <h3 class="card-title">Tambah Area</h3> -->
              </div>

              <form role="form" id="form_tambah_area">
                <div class="card-body">
                  <div class="form-group">
                    <label>Area</label>
                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Area">
                  </div>
                  <div class="form-group">
                    <label>Provinsi</label>
                    <select name="provinsi" id="provinsi" class="provinsi form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kabupaten</label>
                    <select name="kabupaten" id="kabupaten" class="kabupaten form-control">
                      <option value="0">-PILIH-</option>
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

<script>

   $(function(){
        var tambah_area

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

        get_provinsi()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_area select[name=provinsi]').html(select);
        })


        $('#form_tambah_area').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('nama',$('input[name=nama]',this).val());
            formData.append('id_provinsi',$('select[name=provinsi]',this).val());
            formData.append('id_kabupaten',$('select[name=kabupaten]',this).val());
            // formData.append('flg_aktif',$('select[name=flg_aktif]',this).val());

            tambah_area(formData)
            .done(function(res){
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_area')[0].reset();
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

      $('#provinsi').change(function(){
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
            $('#form_tambah_area select[name=kabupaten]').html(select);      
            }
        });
      });
    });


</script>