  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kantor Cabang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kantor cabang</li>
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
                <!-- <h3 class="card-title">Tambah Kantor Cabang</h3> -->
              </div>

              <form role="form" id="form_tambah_cabang">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Kantor Cabang</label>
                    <input type="text" class="form-control" name="nama_cabang" placeholder="Isi Nama Kantor Cabang">
                  </div>
                  <div class="form-group">
                    <label>Select Area</label>
                    <select name="area" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Provinsi</label>
                    <select name="provinsi" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Kabupaten</label>
                    <select name="kabupaten" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Kecamatan</label>
                    <select name="kecamatan" class="form-control">
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Select Kelurahan</label>
                    <select name="kelurahan" class="form-control">
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
        var tambah_cabang
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
        get_kelurahan = function(opts){
            var url = '<?php echo $this->config->item('api_url');?>wilayah/kelurahan';
            return $.ajax({
                type: 'GET',
                url : url,
                headers : {
                    'Authorization': 'Bearer '+localStorage.getItem('token')
                }
            });
        }

       tambah_cabang = function(opts){
        var url = '<?php echo $this->config->item('api_url');?>api/master/area_cabang';
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
        get_area()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id_area+'">'+e.nama_area+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_cabang select[name=area]').html(select);
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
            $('#form_tambah_cabang select[name=provinsi]').html(select);
        })
        get_kabupaten()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_cabang select[name=kabupaten]').html(select);
        })
        get_kecamatan()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_cabang select[name=kecamatan]').html(select);
        })
        get_kelurahan()
        .done(function(res){
            var select = [];
            $.each(res.data, function(i,e){
                var option = [
                    '<option value="'+e.id+'">'+e.nama+'</option>'
                ].join('\n');
                select.push(option);
            });
            $('#form_tambah_cabang select[name=kelurahan]').html(select);
        })
        $('#form_tambah_cabang').on('submit',function(e){
            e.preventDefault();
            var formData = new FormData();
            formData.append('id_mk_area',$('select[name=area]',this).val());
            formData.append('nama',$('input[name=nama_cabang]',this).val());
            formData.append('id_provinsi',$('select[name=provinsi]',this).val());
            formData.append('id_kabupaten',$('select[name=kabupaten]',this).val());
            formData.append('id_kecamatan',$('select[name=kecamatan]',this).val());
            formData.append('id_kelurahan',$('select[name=kelurahan]',this).val());

            tambah_cabang(formData)
            .done(function(res){
                console.log(res);
                var data = res;
                    bootbox.alert('Data berhasil ditambah',function(){
                    $('#form_tambah_cabang')[0].reset();
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