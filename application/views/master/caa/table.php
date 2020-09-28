<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>CAA</h1>
                    <label>Credit Authority Approval</label>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Credit Authority Approval</li>
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
                        <div class="box-body table-responsive no-padding">
                            <?php if ($get_user['data']['divisi_id'] == 'CA' || $get_user['data']['divisi_id'] == 'IT') : ?>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-id="00" data-target="#modal_caa">Pengajuan CAA</button>
                            <?php endif ?>
                            <table id="table_caa" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 14px" class="bg-danger">
                                    <tr>
                                        <th width="10px"></th>
                                        <th>Nomor SO</th>
                                        <th>Cabang</th>
                                        <th>Nama Cadeb</th>
                                        <th>Plafon</th>
                                        <th>Tenor</th>
                                        <th>Rekomendasi AO</th>
                                        <th>Rekomendasi CA</th>
                                        <th>DSH</th>
                                        <!-- <th>DOO MGR</th> -->
                                        <th>AM</th>
                                        <th>CRM</th>
                                        <!-- <th>KEPATUHAN</th> -->
                                        <th>DIR BIS</th>
                                        <th>DIR RISK</th>
                                        <th>DIRUT</th>
                                    </tr>
                                </thead>
                                <tbody id="data_table_caa" style="font-size: 13px" style="cursor:pointer">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade in" id="modal_caa" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl" style="max-width: 1285px;">
        <div class="modal-content" id="view_modal_caa"></div>
    </div>
</div>

<div class="modal fade in" id="modal_caa_add" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl" style="max-width: 1285px;">
        <div class="modal-content" id="view_modal_caa_add"></div>
    </div>
</div>

<div class="modal fade in" id="modal_trans_caa" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl" style="max-width: 1285px;">
        <div class="modal-content" id="view_modal_trans_caa"></div>
    </div>
</div>

<script>
    function formatRupiah(bilangan) {
        var number_string = bilangan.toString(),
            sisa = number_string.length % 3,
            rupiah = number_string.substr(0, sisa),
            ribuan = number_string.substr(sisa).match(/\d{3}/g);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        return rupiah;
    }

    $(document).ready(function() {
        tampil_data_caa();

        function tampil_data_caa() {
            $('#table_caa').DataTable({
                "processing": true,
                "serverSide": true,
                'destroy': true,
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('Caa_controller/get_data_caa') ?>",
                    "type": "POST"
                },

                "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                }, ],

            })
        };

        // $('#table_caa').on('dblclick', 'td', function(e) {
        //     let idx = $(e.relatedTarget).data('id');
        //     console.log(idx);
        //     // alert('You clicked on ' + data[0] + '\'s row');
        // });


        $('#modal_caa').on('show.bs.modal', function(e) {
            let idx = $(e.relatedTarget).data('id');
            $.ajax({
                type: 'post',
                url: 'caa_controller/pengajuan_caa',
                data: 'kode_cabang=' + idx,
                beforeSend: function() {
                    let html = "<div class='modal-body text-center'>" +
                        "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                        "<a href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                        "</div>";
                    $('#view_modal_caa').html(html);
                },
                success: function(data) {
                    $('#view_modal_caa').html(data);
                }
            })
        });

    });

    $('#data_table_caa').on('click', '.edit', function(e) {
        e.preventDefault();
        var id = $(this).attr('data');
        console.log(id);
        $('#modal_trans_caa').modal('show');
        $.ajax({
            type: 'post',
            url: 'caa_controller/trans_caa_detail',
            data: 'idx=' + id,
            beforeSend: function() {
                let html = "<div class='modal-body text-center'>" +
                    "<i class='fa fa-spinner fa-spin fa-4x text-danger'></i><br><br>" +
                    "<a href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Batal</a>" +
                    "</div>";
                $('#view_modal_trans_caa').html(html);
            },
            success: function(data) {
                $('#view_modal_trans_caa').html(data);
            }
        })
    })
</script>