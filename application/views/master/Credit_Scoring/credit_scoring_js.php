<script type="text/javascript">
    var table;
    $(document).ready(function() {
        //datatables
        table = $('#table_proses').DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],

                "ajax": {
                    "url": "<?php echo site_url('Credit-Scoring/get_data')?>",
                    "type": "POST"
                },
                "columnDefs": [
                {
                    "targets": [ 0 ],
                    "orderable": false,
                },
            ],
        });
    });
</script>
