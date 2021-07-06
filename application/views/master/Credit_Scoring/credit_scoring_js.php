<script type="text/javascript">
    var table;
    $(document).ready(function() {
        //datatables
        table = $('#table_proses').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],

            "ajax": {
                "url": "<?php echo site_url('Credit_Scoring/get_data') ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [0],
                "orderable": false,
            }, ],
        });
    });

    $(function() {
        $.validator.setDefaults({
            submitHandler: function() {
                var awal = $('#datepicker1').val();
                var akhir = $('#datepicker2').val();
                $('#table_proses').DataTable({
                    "processing": true,
                    "serverSide": true,
                    'destroy': true,
                    "order": [],
                    "ajax": {
                        "url": "<?php echo site_url('Credit_Scoring/get_data') ?>",
                        "type": "POST",
                        "data": {
                            awal: awal,
                            akhir: akhir

                        }
                    },

                    "columnDefs": [{
                        "targets": [0],
                        "orderable": false,
                    }, ],

                })
            }
        });
        //   console.log(awal);
        $('.form-filter').validate({
            rules: {
                start: {
                    required: true
                },
                end: {
                    required: true
                },
                // cabang: {
                //     required: true
                // },
            },
            messages: {
                start: "Please select date range started",
                end: "Please select date range ended",
                // cabang: "Please selected",
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.text-alert').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
    $(function() {
        $("#datepicker1").datepicker();
        $("#datepicker2").datepicker();
    });
    $(function() {
        $('.select2').select2()
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>