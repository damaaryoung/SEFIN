    <div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px; min-height: 820.781px;">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Master Penyimpangan CAA</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Master penyimpangan CAA</li>
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
                        <button type="button" class="btn btn-primary mb-3" id="btn_modal_add_kategori">+ ADD</button>
                        <table class="table table-striped" id="table_penyimpangan" style="width: 100%;">
                            <thead style="background-color: #dc3545; color:white">
                                <tr>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php $this->load->view('master/penyimpangan/modal/v_modal_detail'); ?>
    <?php $this->load->view('master/penyimpangan/modal/v_modal_add'); ?>
    <?php $this->load->view('master/penyimpangan/modal/v_modal_edit'); ?>

<script>
    // load table
    tables();
    //end
    function tables (id_name_table ='#table_penyimpangan', parent_penyimpangan=0) {
        $(id_name_table).dataTable({
            initComplete: function() {
            var api = this.api();
            $('#table_penyimpangan_filter input')
                .off('.DT')
                .on('input.DT', function() {
                    api.search(this.value).draw();
                });
            },
            oLanguage: {
                sProcessing: "<img style='width: 50px;' src='<?=  base_url() ?>"+'/assets/dist/img/sefin-system.png'+"'></img><br>Loading ....."
            },
            processing: true,
            serverSide: true,
            destroy: true,
            ajax: {
                "url": "<?php echo base_url('penyimpangan_controller/get_data_penyimpangan')?>",
                "type": "POST",
                "data": {'parent_penyimpangan' : parent_penyimpangan}
            },
            columns: [
                {"data": "nama"},
                {"data": "flg_aktif"},
                {"data": "action"},
            ],
            columnDefs: [{
                    // puts a button in the last column
                    targets: [1],
                    render: function (data, type, row, meta) {
                        if(data == 0) {
                            var result = '<h5><span class="badge badge-pill badge-danger">Non Active</span></h5>';
                        } else {
                            var result = '<h5><span class="badge badge-pill badge-success">Active</span></h5>';
                        }
                        return result;
                    }
                }],
            order: [[1, 'asc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html();
            }
        });
    }

    $('#table_penyimpangan').on('click','.detail_record',function() {
        var id=$(this).data('id');
        var nama=$(this).data('nama');
        var status=$(this).data('status');

        $('#parent_penyimpan').val(id);
        $('#btn_modal_add_sub_kategori').attr('onclick','btn_modal_add_sub_kategori('+id+')');
        tables('#table_detail_penyimpangan', id);
        $('#modal_detail_penyimpangan').modal('show');
    });

    $('#btn_modal_add_kategori').on('click', function() {
        $('#title_modal_add').html('Add Kategori');
        $('#parent_penyimpan').val(0);
        $('#modal_add_sub_kategori').modal('show');
    });

    //proses simpan data
    $('#penyimpangan_form_add').on('submit', function(e) {
        e.preventDefault();
        $('#btn_save_penyimpangan').prop('disabled', true);
        var token = localStorage.getItem('token');
        var url = "<?php echo base_url('penyimpangan_controller/create')?>";
        if(!token) {
            alert('Token Invalid')
            return false;
        }
        
        Swal.fire({
            title: 'Do you want to save ?',
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonText: `Save`,
        }).then((result) => {
            if (result.isConfirmed) {
                ajax_call($(this).serialize(), url, 'POST')
                .done(function(response){
                    $('#btn_save_penyimpangan').prop('disabled', false);
                    if(response.validate.success) {
                        $('#nama_error').html(response.validate.nama_error);
                    } else {
                        $('#nama_error').html('');
                        if(response.data.parent_penyimpan == 0) {
                            tables('#table_penyimpangan', 0);
                        } else {
                            tables('#table_detail_penyimpangan', $('#parent_penyimpan').val());
                        }
                        Swal.fire('Success!', 'Data berhasil disimpan', 'success')
                    }
                })
                .fail(function(jqXHR){
                    $('#btn_save_penyimpangan').prop('disabled', false);
                    swal("Error!", "oops! something wrong", "error");
                })
            } else {
                $('#btn_save_penyimpangan').prop('disabled', false);
            }
        });
    });
    //end proses simpan

    // proses update
    function update_penyimpangan(data, parent_penyimpangan_edit, idTable) {
        var token = localStorage.getItem('token');
        var url = "<?php echo base_url('penyimpangan_controller/update')?>";

        if(!token) {
            alert('Token Invalid')
            return false;
        }
        
        Swal.fire({
            title: 'Do you want to save the changes?',
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonText: `Save`,
        }).then((result) => {
            if (result.isConfirmed) {
                ajax_call(data, url, 'POST')
                .done(function(response){
                    $('#btn_edit_penyimpangan').prop('disabled', false);
                    tables(idTable, parent_penyimpangan_edit);
                    Swal.fire('Success!', 'Data berhasil disimpan', 'success')
                })
                .fail(function(jqXHR){
                    $('#btn_edit_penyimpangan').prop('disabled', false);
                    swal("Error!", "oops! something wrong", "error");
                })
            } else {
                $('#btn_edit_penyimpangan').prop('disabled', false);
            }
        });
    }
    // end proses update    

    // proses hapus penyimpangan
    function delete_penyimpangan(id,parent_penyimpangan,idTable) {
        var url = "<?php echo base_url('penyimpangan_controller/delete')?>";
        var token = localStorage.getItem('token');

        if(!id || id == null && !token) {
            alert('invalid token / id');
            return false;
        }

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return fetch(url+'?id='+id+'&parent_penyimpangan='+parent_penyimpangan)
                .then(response => {
                    if (!response.ok) {
                        if(response.status == 400) {
                            throw new Error('Silahkan menghapus sub kategori terlebih dahulu')
                        } else if(response.status == 404) {
                            throw new Error('Data tidak ditemukan')
                        } else {
                            throw new Error(response.statusText)
                        }
                    }
                    return response.json()
                })
                .catch(error => {
                    Swal.showValidationMessage(
                    `Request failed: ${error}`
                    )
                })
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                tables(idTable, parent_penyimpangan);
                Swal.fire(
                    'Deleted!',
                    'Data berhasil dihapus',
                    'success'
                )
            }
        })
    }
    // end proses hapus child penyimpangan


     // form edit penyimpangan
     $('#table_detail_penyimpangan').on('click','.edit_record',function() {
        var id=$(this).data('id');
        var nama=$(this).data('nama');
        var status=$(this).data('status');
        var parent_penyimpangan=$(this).data('parent_penyimpangan');
        
        $('#nama_edit').val(nama);
        $('#status_edit').val(status);
        $('#id_penyimpangan_edit').val(id);
        $('#parent_penyimpangan_edit').val(parent_penyimpangan);
        $('#modal_edit_sub_kategori').modal('show');
    });

    $('#table_penyimpangan').on('click','.edit_record',function() {
        var id=$(this).data('id');
        var nama=$(this).data('nama');
        var status=$(this).data('status');
        var parent_penyimpangan= 0;
        
        $('#nama_edit').val(nama);
        $('#status_edit').val(status);
        $('#id_penyimpangan_edit').val(id);
        $('#parent_penyimpangan_edit').val(parent_penyimpangan);
        $('#modal_edit_sub_kategori').modal('show');
    });
    // end form edit penyimpangan

    $('#penyimpangan_form_edit').on('submit', function(e) {
        e.preventDefault();
        $('#btn_edit_penyimpangan').prop('disabled', true);
        var parent_penyimpangan= $('#parent_penyimpangan_edit').val();
        var data = $(this).serialize();
        var idTable = (parent_penyimpangan == 0) ? '#table_penyimpangan': '#table_detail_penyimpangan';
        update_penyimpangan(data, parent_penyimpangan, idTable);
    });

    $('#table_detail_penyimpangan').on('click','.hapus_record',function() {
        var id=$(this).data('id');
        var parent_penyimpangan=$(this).data('parent_penyimpangan');
        var idTable = '#table_detail_penyimpangan';
        delete_penyimpangan(id, parent_penyimpangan, idTable);
    });

    $('#table_penyimpangan').on('click','.hapus_record',function() {
        var id=$(this).data('id');
        var parent_penyimpangan=$(this).data('parent_penyimpangan');
        var idTable = '#table_penyimpangan';
        delete_penyimpangan(id, parent_penyimpangan, idTable);
    });

    function btn_modal_add_sub_kategori(id) {
        $('#title_modal_add').html('Add Sub Kategori');
        $('#modal_add_sub_kategori').modal('show');
    }

    $('#modal_detail_penyimpangan').on('hidden.bs.modal', function (e) {
        tables();
    });

    $('#modal_add_sub_kategori').on('hidden.bs.modal', function (e) {
        $('#nama_error').html('');
    });
</script>