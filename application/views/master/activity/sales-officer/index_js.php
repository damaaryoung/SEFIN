<script type="text/javascript">
  $(function(){
    // validation();
    data();
  })
  function filter(){
    var filter=$('.cari-berdasarkan').val();
    var page='1';
    data(filter,page);
  }
  function pagination($page){
    var filter=$('.cari-berdasarkan').val();
    var page=$page;
    data(filter,page);
  }
  function data(filter='',page=''){
    $.ajax({
      url: "<?= base_url(); ?>activity/so/activitySOController/data",
      data:{page:page,filter:filter},
      type: "POST",
      beforeSend: function() {
        $('.spinner').css("display", "block");
      },
      success: function(response) {
        $('.tabel-data').html(response);
        $('.spinner').css("display", "none");
      }
    });
  }

  function edit($id){
    $('.bd-example-modal-lg').modal('show');
    var form = $('.form').val();
    $.ajax({
      url: "<?= base_url(); ?>activity/so/activitySOController/"+form,
      data:{'id':$id},
      type: "POST",
      success: function(response) {
        document.getElementById("html-rendered-form-data").innerHTML = response;
        if (form==='formRO') {
          formRO();
        }else if (form==='formMB') {
          formMB();
        }else if (form==='formPromosi') {
          formPromosi();
        }
      }
    });
  }

  function clickForm(){
    $('.bd-example-modal-lg').modal('show');
    var form = $('.form').val();
    $.ajax({
      url: "<?= base_url(); ?>activity/so/activitySOController/"+form,
      data:{'id':'x'},
      type: "POST",
      success: function(response) {
        document.getElementById("html-rendered-form-data").innerHTML = response;
        if (form==='formRO') {
          formRO();
        }else if (form==='formMB') {
          formMB();
        }else if (form==='formPromosi') {
          formPromosi();
        }
      }
    });
  }

  function formRO(){
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#form-ro').validate({
      rules: {
        tanggal_visit: {
          required: true
        },
        no_kontak: {
          required: true
        },
        nama_debitur: {
          required: true
        },
        alamat_domisili: {
          required: true
        },
        hasil_visit: {
          required: true
        },
        swafoto: {
          required: true
        },
      },
      messages: {
        tanggal_visit: "Please accept our tanggal visit",
        no_kontak: "Please accept our no_kontak",
        nama_debitur: "Please accept our nama debitur",
        alamat_domisili: "Please accept our alamat domisili",
        hasil_visit: "Please accept our hasil visit",
        swafoto: "Please accept our swafoto",
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  }
  function formMB(){
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#form-mb').validate({
      rules: {
        tangga_maintain: {
          required: true
        },
        nama_mb: {
          required: true
        },
        alamat_domisili: {
          required: true
        },
        hasil_maintain: {
          required: true
        },
        swafoto: {
          required: true
        },
      },
      messages: {
        tangga_maintain: "Please accept our tangga maintain",
        nama_mb: "Please accept our nama mb",
        alamat_domisili: "Please accept our alamat domisili",
        hasil_maintain: "Please accept our hasil maintain",
        swafoto: "Please accept our swafoto",
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  }
  function formPromosi(){
    $.validator.setDefaults({
      submitHandler: function () {
        alert( "Form successful submitted!" );
      }
    });
    $('#form-promosi').validate({
      rules: {
        tanggal_promosi: {
          required: true
        },
        tanggal_promosi: {
          required: true
        },
        swafoto: {
          required: true
        },
      },
      messages: {
        tangga_maintain: "Please accept our tanggal promosi",
        nama_mb: "Please accept our tanggal promosi",
        alamat_domisili: "Please accept our swafoto",
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  }
</script>
