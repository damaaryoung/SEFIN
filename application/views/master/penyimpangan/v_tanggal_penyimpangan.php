<div id="tanggal_penyimpangan" class="content-wrapper" style="padding-left: 15px; padding-right: 15px; min-height: 820.781px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Tanggal Penyimpangan CAA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Master Tanggal penyimpangan CAA</li>
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
                    <button type="button" class="btn btn-primary mb-3" id="btn_modal_add_tanggal_penyimpangan">+ ADD</button>
                    <div class="col-4 alert alert-info" role="alert" hidden id="message_expired">
                        IOM masih aktif, Tidak dapat menambah IOM!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <table class="table table-striped" id="table_tanggal_penyimpangan" style="width: 100%;">
                        <thead style="background-color: #dc3545; color:white">
                            <tr>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>IOM</th>
                            <th>Keterangan</th>
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

<?php $this->load->view('master/penyimpangan/modal/Tanggal_penyimpangan/v_modal_detail'); ?>
<?php $this->load->view('master/penyimpangan/modal/Tanggal_penyimpangan/v_modal_add'); ?>
<?php $this->load->view('master/penyimpangan/modal/Tanggal_penyimpangan/v_modal_addlist'); ?>
<?php $this->load->view('master/penyimpangan/modal/Tanggal_penyimpangan/v_modal_edit'); ?>

<script>
    // load table
    tables();
    // end
    getExpiredDate();
    // get value param penyimpangan
    ajax_call('', "<?php echo base_url('tanggal_penyimpangan_controller/getParamPenyimpangan')?>", 'GET')
        .done(function(response){
            var html = `<select class="selectpicker" id="params_penyimpangan" name="params_penyimpangan" multiple data-live-search="true">`;
            var html2 = `<select class="selectpicker" id="params_penyimpangan2" name="params_penyimpangan2" multiple data-live-search="true">`;
            for(var i = 0; i < response.length; i++) {
                html +=`<option value="${response[i].id}" parent="${response[i].parent_penyimpan}">${response[i].nama}</option>`;
                html2 +=`<option value="${response[i].id}" parent="${response[i].parent_penyimpan}">${response[i].nama}</option>`;
            }
            html += `</select>`;
            html2 += `</select>`;
            $('#result_param_penyimpangan').html(html);
            $('#result_param_penyimpangan2').html(html2);
            $('.selectpicker').selectpicker();
        })
        .fail(function(jqXHR){
            swal("Error!", "oops! something wrong", "error");
        });
    // end

    // get expired tanggal penyimpangan
    function getExpiredDate() {
        ajax_call('', "<?php echo base_url('tanggal_penyimpangan_controller/ExpiredDatePenyimpangan')?>", 'GET')
        .done(function(response){
            if(response.total > 0) {
                $('#btn_modal_add_tanggal_penyimpangan').prop('disabled', true);
                $('#message_expired').removeAttr('hidden');
            }
        })
        .fail(function(jqXHR){
            swal("Error!", "oops! something wrong", "error");
        });
    }
    // end

    function params_load_table(id_tanggal_penyimpangan) {
        var id_name_table = "#table_detail_tanggal_penyimpangan";
        var url = "<?php echo base_url('tanggal_penyimpangan_controller/detail')?>";
        var columns = [
                {"data": "nama"},
                {"data": "active"},
                // {"data": "action"},
            ];
        var columnsDefs = [{
                    // puts a button in the last column
                    targets: [1],
                    render: function (data, type, row, meta) {
                        if(row.active == 0) {
                            var result = `<label class="switch">
                                            <input type="checkbox" data-id="`+row.id+`" data-active="`+row.active+`" data-id_tanggal_penyimpangan="`+row.id_tanggal_penyimpangan+`" id="togBtn">
                                            <div class="slider"></div>
                                    </label>`;
                        } else {
                            var result = `<label class="switch">
                                            <input type="checkbox" checked data-id="`+row.id+`" data-active="`+row.active+`" data-id_tanggal_penyimpangan="`+row.id_tanggal_penyimpangan+`" id="togBtn">
                                            <div class="slider"></div>
                                    </label>`;
                        }
                        return result;
                    },
                }];
        tables(id_tanggal_penyimpangan, id_name_table, url, columns, columnsDefs);
    }

    function tables (id_tanggal_penyimpangan=null,id_name_table ="#table_tanggal_penyimpangan", url="<?php echo base_url('tanggal_penyimpangan_controller/get_tanggal_penyimpangan')?>", columns = [
                {"data": "start_date"},
                {"data": "end_date"},
                {"data": "filename_iom",
                    "render": function ( data, type, row ) {
                        var btn_upload = `<input type="file" id="iom_`+row.id+`" accept="application/pdf"/><button type="button" class="btn btn-primary btn-sm" id="btn_upload_`+row.id+`"  onclick="upload_iom(`+row.id+`)">Upload</button>`;
                        if(row.filename_iom == null || row.filename_iom == '') {
                            var fileIom = btn_upload;
                        } else {
                            var fileIom = "<a href=<?=  base_url() ?>assets/iom_uploaded/"+row.filename_iom+" target='_blank'>"+row.filename_iom+"</a> <i class='fa fa-trash' aria-hidden='true' style='cursor:pointer;' onclick='delete_iom(\""+row.filename_iom+"\")'></i>";
                        }
                        return fileIom;
                    }
                },
                {"data": "keterangan"},
                {"data": "action"},
            ], columnsDefs = [{
                    // puts a button in the last column
                    targets: [3],
                    render: function (data, type, row, meta) {
                        var today = new Date();
                        var dd = String(today.getDate()).padStart(2, '0');
                        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                        var yyyy = today.getFullYear();

                        today = yyyy + '-' + mm + '-' + dd;
                        var date1 = new Date(today);
                        var date2 = new Date(row.end_date);
                        var date3 = date1 - new Date(row.start_date);
                        // get internal minus date;
                        var Difference_In_Days = date3 / (1000 * 3600 * 24);
                        //Get 1 day in milliseconds
                        var one_day=1000*60*60*24;

                        // Calculate the difference in milliseconds
                        var difference_ms = date2 - date1;
                        //take out milliseconds
                        difference_ms = difference_ms/1000;
                        var seconds = Math.floor(difference_ms % 60);
                        difference_ms = difference_ms/60; 
                        var minutes = Math.floor(difference_ms % 60);
                        difference_ms = difference_ms/60; 
                        var hours = Math.floor(difference_ms % 24);  
                        var days = Math.floor(difference_ms/24);
                        if(row.end_date == null) {
                            return '<h5><span class="badge badge-warning">Tanggal selesai IOM belum ditentukan</span></h5>';
                        } else {
                            if(date3 < 0) {
                                return '<h5><span class="badge badge-warning">Not yet started</span></h5>';
                            } else {
                                if(row.expired == 0) {
                                    return days + " days left";
                                } else {
                                    return `<h5><span class="badge badge-danger">Expired</span></h5>`;
                                }
                            }
                        }
                        
                    },
                }]) {
        $(id_name_table).dataTable({
            initComplete: function() {
            var api = this.api();
            $('#table_tanggal_penyimpangan_filter input')
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
                "url": url,
                "type": "POST",
                "data" : { 'id_tanggal_penyimpangan': id_tanggal_penyimpangan }
            },
            columns: columns,
            columnDefs: columnsDefs,
            order: [[0, 'asc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html();
            }
        });
    }

    $('#table_tanggal_penyimpangan').on('click','.detail_record',function() {
        var id_tanggal_penyimpangan = $(this).data('id');
        var id_name_table = "#table_detail_tanggal_penyimpangan";
        var url = "<?php echo base_url('tanggal_penyimpangan_controller/detail')?>";
        $('#btn_modal_add_list_penyimpangan').attr('onclick','btn_modal_add_list('+id_tanggal_penyimpangan+')');
        var columns = [
                {"data": "nama"},
                {"data": "active"},
                // {"data": "action"},
            ];
        var columnsDefs = [{
                    // puts a button in the last column
                    targets: [1],
                    render: function (data, type, row, meta) {
                        if(row.active == 0) {
                            var result = `<label class="switch">
                                            <input type="checkbox" data-id="`+row.id+`" data-active="`+row.active+`" data-id_tanggal_penyimpangan="`+row.id_tanggal_penyimpangan+`" id="togBtn">
                                            <div class="slider"></div>
                                    </label>`;
                        } else {
                            var result = `<label class="switch">
                                            <input type="checkbox" checked data-id="`+row.id+`" data-active="`+row.active+`" data-id_tanggal_penyimpangan="`+row.id_tanggal_penyimpangan+`" id="togBtn">
                                            <div class="slider"></div>
                                    </label>`;
                        }
                        return result;
                    },
                }];
        tables(id_tanggal_penyimpangan, id_name_table, url, columns, columnsDefs);
        $('#modal_detail_tanggal_penyimpangan').modal('show');
    });

    // proses simpan data
    function simpan_data(data)
    {
        var url_create = "<?php echo base_url('tanggal_penyimpangan_controller/create')?>";
        ajax_call(data, url_create, 'POST')
        .done(function(response){
            $('.invalid-feedback').remove();
            $('.form-control').removeClass('is-invalid');
            if(response.validate){
                if(response.validate.success) {
                    $.each(response.validate, (key, val) => {
                            el = $('[id="' + key + '"]');
                            el.html(val);
                            let errinfo =
                                `<span class="text-danger invalid-feedback d-block">${val}</span>`;
                            el.addClass(val.length > 0 ? 'is-invalid' : '');
                            el.after(errinfo);
                        });
                    return false;
                }
            }
            getExpiredDate();
            
            Swal.fire('Success!', 'Data berhasil disimpan', 'success');
            if(data.id_tanggal_penyimpangan) {
                params_load_table(data.id_tanggal_penyimpangan);
            } else {
                $('#tanggal_penyimpangan_form_add')[0].reset();
                tables();
            }
        })
        .fail(function(jqXHR){
            console.log(jqXHR)
            Swal.fire('Error!', 'oops! something wrong', 'error')
        });
    }

    // end proses
    $('#btn_save_tanggal_penyimpangan').on('click', function(e) {
        e.preventDefault();
        // Create a test FormData object
        var file_data = $('#file_iom').prop('files')[0];
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();
        var params_penyimpangan = $('#params_penyimpangan').val();
        var formData = new FormData();
        formData.append('file', file_data);
        formData.append('start_date', start_date);
        formData.append('end_date', end_date);
        formData.append('params_penyimpangan', params_penyimpangan);
        var url = "<?php echo base_url('tanggal_penyimpangan_controller/create')?>";

        $.ajax({
            url: url, // point to server-side PHP script
            dataType: 'json',  // what to expect back from the PHP script, if anything
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            type: 'post',
            success: function(response){
                console.log(response);
                $('.invalid-feedback').remove();
                $('.form-control').removeClass('is-invalid');
                if(response.validate){
                    if(response.validate.success) {
                        $.each(response.validate, (key, val) => {
                                el = $('[id="' + key + '"]');
                                el.html(val);
                                let errinfo =
                                    `<span class="text-danger invalid-feedback d-block">${val}</span>`;
                                el.addClass(val.length > 0 ? 'is-invalid' : '');
                                el.after(errinfo);
                            });
                        return false;
                    }
                }
                if(response.status) {
                    if (response.status == 'error') {
                        $('#file_iom').val('');
                        Swal.fire('Error!', response.msg, 'error');
                        return false;
                    }
                }
                
                getExpiredDate();
                
                Swal.fire('Success', 'Data berhasil disimpan', 'success');
                $('#tanggal_penyimpangan_form_add')[0].reset();
                tables();
            }
        });

        // Display the key/value pairs
        // for (var pair of formData.entries()) {
        //     console.log(pair[0]+ ', ' + pair[1]); 
        // }
        // return false;
        // var start_date = $('#start_date').val();
        // var end_date = $('#end_date').val();
        // var params_penyimpangan = $('#params_penyimpangan').val();
        
        // var data = {
        //     'start_date' : start_date,
        //     'end_date' : end_date,
        //     'params_penyimpangan' : params_penyimpangan.length > 0 ? params_penyimpangan: null
        // }
        // simpan_data(data);
    });

    $('#btn_save_list_penyimpangan').on('click', function() {
        var params_penyimpangan = $('#params_penyimpangan2').val();
        var id_tanggal_penyimpangan = $('#id_tanggal_penyimpangan').val();
        var id_parent_penyimpangan = $("select :selected").map((i, el) => $(el).attr("parent")).toArray();
        var data = {
            'id_tanggal_penyimpangan' : id_tanggal_penyimpangan,
            'params_penyimpangan' : params_penyimpangan.length > 0 ? params_penyimpangan: null
        }
        simpan_data(data);
    });

    $('#table_tanggal_penyimpangan').on('click','.edit_record',function() {
        var id_tanggal_penyimpangan = $(this).data('id');
        var start_date = $(this).data('start_date');
        var end_date = $(this).data('end_date');
        $('#id_tanggal_penyimpangan_edit').val(id_tanggal_penyimpangan);
        $('#start_date_edit').val(start_date);
        $('#end_date_edit').val(end_date);
        $('#modal_edit_tanggal_penyimpangan').modal('show');
    });

    $('#tanggal_penyimpangan_form_edit').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        ajax_call(data , "<?php echo base_url('tanggal_penyimpangan_controller/update')?>", 'POST')
            .done(function(response){
                if(response.message == true) {
                    Swal.fire('Success!', 'Data berhasil diubah', 'success');
                    tables();
                } else {
                    Swal.fire('Error!', 'Data gagal diubah, silakan hubungi ITMAN', 'error');
                }
            })
            .fail(function(jqXHR){
                swal("Error!", "oops! something wrong", "error");
            });
    })

    $('#table_detail_tanggal_penyimpangan').on('change','#togBtn',function(e) {
        e.preventDefault();
        var isChecked;
        var id = $(this).data('id');
        var id_tanggal_penyimpangan = $(this).data('id_tanggal_penyimpangan');
        if(this.checked) {
            isChecked = 1;
        } else {
            isChecked = 0;
        }

        var data = {
            'id' : id,
            'active' : isChecked
        };

        ajax_call(data , "<?php echo base_url('tanggal_penyimpangan_controller/is_active')?>", 'POST')
            .done(function(response){
                if(response.message == true) {
                    params_load_table(id_tanggal_penyimpangan);
                } else {
                    alert('Gagal Mengubah data, Silakan menghubungi ITMAN');
                }
            })
            .fail(function(jqXHR){
                swal("Error!", "oops! something wrong", "error");
            });
    });

    function btn_modal_add_list(id)
    {
        var id_tanggal_penyimpangan = $('#id_tanggal_penyimpangan').val(id);
        $('#modal_add_list_penyimpangan').modal('show');
    }

    // upload iom
    function upload_iom(id) {
        if(id) {
            var form_iom = $('#iom_'+id).prop('files')[0];
            var formData = new FormData();
            var url = "<?php echo base_url('tanggal_penyimpangan_controller/upload_iom')?>";

            formData.append('file', form_iom);
            formData.append('id', id);

            $.ajax({
                url: url, // point to server-side PHP script
                dataType: 'json',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                type: 'post',
                beforeSend: function() {
                    $('#btn_upload_'+id).text('uploading...');
                },
                success: function(response){
                    if(response.status) {
                        if(response.status == 'success') {
                            Swal.fire('Success!', response.msg, 'success');
                        } else {
                            Swal.fire('Error!', response.msg, 'error');
                        }
                    }
                    tables();
                    $('#btn_upload_'+id).text('upload');
                }
            });
        }
    }
    // end upload iom

    // delete_iom
    function delete_iom(filename) {
        var url = "<?php echo base_url('tanggal_penyimpangan_controller/delete_iom')?>";
        if(filename) {
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
                    return fetch(url+'?filename='+filename)
                    .then(response => {
                        if (!response.ok) {
                            if(response.status == 404) {
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
                    tables();
                    Swal.fire(
                        'Deleted!',
                        'Iom berhasil dihapus',
                        'success'
                    )
                }
            });
        }
    }
    // end delete iom
    
    $('#btn_modal_add_tanggal_penyimpangan').on('click', function(e) {
        e.preventDefault();
        $('#modal_add_tanggal_penyimpangan').modal('show');
    });

    $('#modal_add_tanggal_penyimpangan').on('hidden.bs.modal', function(e) {
        $('.invalid-feedback').remove();
        $('.form-control').removeClass('is-invalid');
    })

    $('#modal_detail_tanggal_penyimpangan').on('hidden.bs.modal', function (e) {
        tables();
    });
</script>