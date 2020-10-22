<link href="<?php echo base_url('assets/dist/css/datepicker.min.css') ?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('assets/dist/js/datepicker.js') ?>"></script>
<script type="text/javascript">
    $('#catatan_das').hide();
    $('#catatan_dsspv').hide();
    $('#form_pasangan_debitur').hide();
    $('#form_gambar_ktp_pasangan').hide();
    $('#form_gambar_buku_nikah').hide();
</script>
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Lampiran Debitur Realisasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Lampiran Debitur Realisasi</li>
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
                            <table id="table_so" class="table table-bordered table-hover table-sm" style="white-space: nowrap;">
                                <thead style="font-size: 12px" class="bg-danger">
                                    <tr>
                                        <th>
                                            No SO
                                        </th>
                                        <th>
                                            Nama Debitur
                                        </th>
                                        <th style="width: 22px;">
                                            1
                                        </th>
                                        <th style="width: 22px;">
                                            2
                                        </th>
                                        <th style="width: 22px;">
                                            3
                                        </th>
                                        <th style="width: 22px;">
                                            4
                                        </th>
                                        <th style="width: 22px;">
                                            5
                                        </th>
                                        <th style="width: 22px;">
                                            6
                                        </th>
                                        <th style="width: 22px;">
                                            7
                                        </th>
                                        <th style="width: 22px;">
                                            8
                                        </th>
                                        <th style="width: 22px;">
                                            9
                                        </th>
                                        <th style="width: 22px;">
                                            10
                                        </th>
                                        <th style="width: 22px;">
                                            11
                                        </th>
                                        <th style="width: 22px;">
                                            12
                                        </th>
                                        <th style="width: 22px;">
                                            13
                                        </th>
                                        <th style="width: 22px;">
                                            14
                                        </th>
                                        <th style="width: 22px;">
                                            15
                                        </th>
                                        <th style="width: 22px;">
                                            16
                                        </th>
                                        <th style="width: 22px;">
                                            17
                                        </th>
                                        <th style="width: 22px;">
                                            18
                                        </th>
                                        <th style="width: 22px;">
                                            19
                                        </th>
                                        <th style="width: 22px;">
                                            20
                                        </th>
                                        <th style="width: 22px;">
                                            21
                                        </th>
                                        <th style="width: 22px;">
                                            22
                                        </th>
                                        <th style="width: 22px;">
                                            23
                                        </th>
                                        <th style="width: 22px;">
                                            24
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="data_credit_checking" style="font-size: 12px">
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer" style="height:297px;">
                        <div class="row">
                            <div class="col-md-1 text-left">
                                <b>Catatan:</b>
                            </div>
                            <div class="col-md-6">
                                <span><a type="button" class="btn btn-default bg-gradient-danger btn-sm cancel" title="Lampiran Tidak Ada"><i style="color: #fff;" class="fas fa-window-close"></i> </a> Lampiran Tidak Ada</span>
                                <span><a type="button" class="btn btn-default bg-gradient-success btn-sm cancel" title="Lampiran Ada"><i style="color: #fff;" class="fas fa-check"></i> </a> Lampiran Ada</span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        1. KTP Debitur
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        2. KK Debitur
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        3. NPWP Debitur
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        4. KTP Pasangan
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        5. Buku Nikah
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        6. KTP Penjamin 1
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        7. KTP Penjamin 2
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        8. KTP Penjamin 3
                                    </b>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6 mt-4" style="height:4px">
                                        <b>
                                            9. KTP Penjamin 4
                                        </b>
                                    </div>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        10. Buku Nikah Penjamin 1
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        11. Buku Nikah Penjamin 2
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        12. Buku Nikah Penjamin 3
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        13. Buku Nikah Penjamin 4
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        14. Slip Gaji
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        15. Surat Keterangan Kerja
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        16. Surat Keterangan Usaha
                                    </b>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        17. Pembukuan Usaha
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        18. Sertifikat 1
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        19. Sertifikat 2
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        20. IMB 1
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        21. IMB 2
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        22. PBB 1
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        23. PBB 2
                                    </b>
                                </div>
                                <div class="mt-4" style="height:4px">
                                    <b>
                                        24. Form Persetujuan IDEB
                                    </b>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- 
<div id="lihat_data_credit" class="content-wrapper" style="padding-left: 15px; padding-right: 15px;">

    <div class="card">
        <div class="card-body">
            
        </div>
    </div>

</div> -->



<div class="modal fade in" id="modal_load_data" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="load_data"></div>
    </div>
</div>

<script src="<?php echo base_url('assets/dist/js/datepicker.en.js') ?>"></script>

<script type="text/javascript">
    tampil_data_so();

    function tampil_data_so() {
        $('#table_so').DataTable({

            "processing": true,
            "serverSide": true,
            'destroy': true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Lampiran_debitur_controller/get_data_so') ?>",
                "type": "POST"
            },

            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],

        })
    };
</script>