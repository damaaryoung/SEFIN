<script>
  $(document).ready(function() {
    tampil_data_caa();

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
  $(function() {
    $.validator.setDefaults({
      submitHandler: function() {
        var awal = $('#datepicker1').val();
        var akhir = $('#datepicker2').val();
        var cabang = $('#nama_cabang').val();
        $('#table_caa').DataTable({
          "processing": true,
          "serverSide": true,
          'destroy': true,
          "order": [],
          "ajax": {
            "url": "<?php echo site_url('Caa_controller/get_data_caa') ?>",
            "type": "POST",
            "data": {
              awal: awal,
              akhir: akhir,
              nama_cabang: cabang
            }
          },

          "columnDefs": [{
            "targets": [0],
            "orderable": false,
          }, ],

        })
      }
    });
    $('.form-filter').validate({
      rules: {
        start: {
          required: true
        },
        end: {
          required: true
        },
        cabang: {
          required: true
        },
      },
      messages: {
        start: "Please select date range started",
        end: "Please select date range ended",
        cabang: "Please selected",
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

  $('#data_table_caa').on('click', '.edit', function(e) {
    e.preventDefault();
    var id = $(this).attr('data');
    // console.log(id);
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