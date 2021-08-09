<div id="tanggal_penyimpangan" class="content-wrapper" style="padding-left: 15px; padding-right: 15px; min-height: 820.781px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Status Cuti Approval CAA</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Master Status Cuti Approval CAA</li>
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
                    <table class="table table-striped" id="table_status_cuti" style="width: 100%;">
                        <thead style="background-color: #dc3545; color:white">
                            <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Cabang</th>
                            <th>Area</th>
                            <th>Jabatan</th>
                            <th>Plafon</th>
                            <th>Status Cuti</th>
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

<?php $this->load->view('master/penyimpangan/modal/status_cuti/v_modal_edit'); ?>

<script>
    tables();
    function tables() {
        $('#table_status_cuti').dataTable({
            initComplete: function() {
            var api = this.api();
            $('#table_status_cuti_filter input')
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
                "url": "<?php echo base_url('status_cuti_controller/get_status_cuti')?>",
                "type": "POST"
            },
            columns: [
                {"data": "no"},
                {"data": "nama_approval"},
                {"data": "nama_cabang"},
                {"data": "nama_area"},
                {"data": "nama_jabatan"},
                {"data": "plafon",
                    "render": function ( data, type, row ) {
                        var plafon_caa = row.plafon == null ? 0:row.plafon;
                        if(plafon_caa != null || plafon_caa != '') {
                            return convertToRupiah(plafon_caa);
                        }
                    }
                },
                {"data": "status_cuti"},
                {"data": "action"},
            ],
            columnDefs: [{
                    // puts a button in the last column
                    targets: [6],
                    render: function (data, type, row, meta) {
                        if(row.status_cuti == 1) {
                            return '<h5><span class="badge badge-warning">Ya</span></h5>';
                        } else {
                            return '<h5><span class="badge badge-info">Tidak</span></h5>';
                        }
                    }
                }],
            order: [[1, 'asc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var index = iDisplayIndex +1;
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                $('td:eq(0)', row).html(index);
            }
        });
    }

    function convertToRupiah(angka)
    {
        var rupiah = '';		
        var angkarev = angka.toString().split('').reverse().join('');
        for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
        return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
    }

    $('#table_status_cuti').on('click','.edit_record',function() {
        var nama = $(this).data('nama_approval');
        var flg_cuti = $(this).data('status_cuti');
        var plafon_caa = $(this).data('plafon');
        $('#text_nama_approval').text(nama);
        $('#nama').val(nama);
        $('#plafon_caa').val(plafon_caa);
        $('#flg_cuti').val(flg_cuti);
        $('#modal_edit_status_cuti').modal('show');
    });

    $('#status_cuti_form_edit').on('submit', function(e) {
        e.preventDefault();
        var data = $(this).serialize();
        $('#btn_edit_status_cuti').prop('disabled', true);
        ajax_call(data, "<?php echo base_url('status_cuti_controller/update')?>", 'POST')
        .done(function(response){
            if(response.message == true) {
                Swal.fire('Success', 'Data berhasil diubah', 'success')
                tables();
            } else {
                Swal.fire("Warning!", "Data gagal diubah, silakan hubungi ITMAN", "warning");
            }
            $('#btn_edit_status_cuti').prop('disabled', false);
        })
        .fail(function(jqXHR){
            Swal.fire("Error!", "oops! something wrong", "error");
        });
    });
</script>