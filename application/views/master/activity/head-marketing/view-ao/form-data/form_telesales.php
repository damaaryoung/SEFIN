<form id="form-submit-data-telesales">
  <div class="modal-body">
    <div class="container-fluid">
      <div class="card card-default color-palette-box">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-tag"></i>
            Telesales - Account Officer
          </h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control no_kontrak" placeholder="Nomor Kontrak.." name="no_kontrak">
                <div class="input-group-append">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-no_kontrak"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control cadeb" placeholder="Pilih Debitur.." name="nama_debitur" id="cadeb-picker-data">
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control produk" placeholder="Produk.." name="produk">
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control baki_debet" placeholder="Baki Debet.." name="baki_debet">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control new_plafond" placeholder="Plafon Baru.." name="new_plafond">
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control new_tenor" placeholder="Tenor Baru .." name="new_tenor">
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control new_angsuran" placeholder="Angsuran Baru .." name="new_angsuran">
              </div>
            </div>
            <div class="col-md">
              <div class="input-group mb-3">
                <input type="text" class="form-control account_officer" placeholder="Pilih Account Officers.." name="account_officer" id="account_officer">
                <div class="input-group-append">
                  <button type="button" class="btn btn-primary find-ao" onclick="findAO();"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Save <i class="fas fa-save"></i></button>
  </div>
</form>

<div class="modal fade" id="modal-no_kontrak" tabindex="-1" role="dialog" aria-labelledby="modal-no_kontrakLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-no_kontrakLabel">Pilih No. Kontrak</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="box-body table-responsive no-padding">
                                    <table id="table_no_kontrak" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                        <thead style="font-size: 14px" class="bg-danger">
                                            <tr>
                                                <th width="5px">
                                                    No
                                                </th>
                                                <th>
                                                    Nama Telesales
                                                </th>
                                                <th>
                                                    No. Kontrak
                                                </th>
                                                <th>
                                                    Nama Debitur
                                                </th>
                                                <th width="10px">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="data_no_kontrak" style="font-size: 13px">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    get_no_kontrak = function(opts, id){
        var url = '<?php echo config_item('api_url') ?>api/master/telesales/assign/index/all';

        if(id != undefined){
            url+=id;
        }

        if(opts != undefined){
            var data = opts;
        }

        return $.ajax({
            type : 'GET',
            url: url,
            data: data,
            headers: {
                'Authorization': 'Bearer '+localStorage.getItem('token')
            }
        });
    }

    load_data_no_kontrak = function(pagin){
        get_no_kontrak()
        .done(function(response){
            var data = response.data;
            var html = [];
            var no   = 0;
            
            if(data.length === 0 ){
                var tr =[
                '<tr valign="middle">',
                '<td colspan="4" style="text-align: center">Tidak ada data</td>',
                '</tr>'
                ].join('\n');
                $('#data_no_kontrak').html(tr);

                return;
            }

            $.each(data,function(index,item){
                no++;
                var tr = [
                '<tr>',
                    '<td style="text-align: center">'+ no +'</td>',
                    '<td>'+ item.nama_user +'</td>',
                    '<td>'+ item.no_rekening +'</td>',
                    '<td>'+ item.nama_debitur +'</td>',
                    '<td style="text-align: center">',
                        '<button type="button" class="btn btn-info btn-sm edit" data-target="#update" data="' + item.id + '"><i class="fas fa-plus-circle"></i></button>',
                    '</td>',
                '</tr>'
                ].join('\n');
                html.push(tr);
            });

            $('#data_no_kontrak').html(html);
            $('#table_no_kontrak').DataTable({
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
            $('#data_no_kontrak').html('<tr><td colspan="4" style="text-align: center">Tidak ada data</td></tr>');
        });
    }

    $('#data_no_kontrak').show();
    load_data_no_kontrak();

    get_data_telesales = function(opts, id) {
      var url = '<?php echo config_item('api_url') ?>api/master/telesales/detail/show/';

      if (id != undefined) {
          url += id;
      }

      if (opts != undefined) {
          var data = opts;
      }

      return $.ajax({
          // type : 'GET',
          url: url,
          data: data,
          headers: {
              'Authorization': 'Bearer ' + localStorage.getItem('token')
          }
      });
    }

    $('#data_no_kontrak').on('click', '.edit', function(e) {
            e.preventDefault();
            var id = $(this).attr('data');
            var html = [];

            get_data_telesales({}, id)
                .done(function(response) {
                  var data = response.data;
                  console.log(data);

                    $('#form-submit-data-telesales input[name=no_kontrak]').val(data.no_rekening);
                    $('#form-submit-data-telesales input[name=nama_debitur]').val(data.nama_debitur);
                    $('#form-submit-data-telesales input[name=produk]').val(data.produk);
                    $('#form-submit-data-telesales input[name=baki_debet]').val(data.baki_debet);
                    $('#form-submit-data-telesales input[name=new_plafond]').val(data.new_plafond);
                    $('#form-submit-data-telesales input[name=new_tenor]').val(data.new_tenor);
                    $('#form-submit-data-telesales input[name=new_angsuran]').val(data.new_angsuran);

                })
                .fail(function(jqXHR) {
                    bootbox.alert('Data tidak ditemukan, coba refresh kembali!!');

                });

            $("#modal-no_kontrak").modal('hide');
        });
</script>
