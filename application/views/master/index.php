<!-- <!DOCTYPE html> -->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SEFIN | BPR Kredit Mandriri</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url('assets/dist/img/favicon1.ico')?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datepicker/css/bootstrap-datepicker.min.css')?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2/css/select2.min.cs')?>s">
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/sweetalert.css')?>">
  <script  src="<?php echo base_url('assets/dist/js/sweetalert-dev.js')?>"></script>
  <!-- Google Font: Source Sans Pro -->

  <style type="text/css">
    .datepicker{z-index:1151 !important;}
    .required_notification{
      color: #f70e39;
    }
    .bg-gradient-danger {
    background: #debbbb linear-gradient(180deg,#b10001,#d20014) repeat-x!important;
    }
    img {
      vertical-align: middle;
    }
    .img-responsive,
    .thumbnail > img,
    .thumbnail a > img,
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      display: block;
      max-width: 100%;
      height: auto;
    }
    .img-rounded {
      border-radius: 6px;
    }
    .img-thumbnail {
      display: inline-block;
      max-width: 100%;
      height: auto;
      padding: 4px;
      line-height: 1.42857143;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 4px;
      -webkit-transition: all .2s ease-in-out;
           -o-transition: all .2s ease-in-out;
              transition: all .2s ease-in-out;
    }
    .img-circle {
      border-radius: 50%;
    }
    .well {
      min-height: 20px;
      padding: 19px;
      margin-bottom: 20px;
      background-color: #f5f5f5;
      border: 1px solid #e3e3e3;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
              box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }
    .well blockquote {
      border-color: #ddd;
      border-color: rgba(0, 0, 0, .15);
    }
    .well-lg {
      padding: 24px;
      border-radius: 6px;
    }
    .well-sm {
      padding: 9px;
      border-radius: 3px;
    }
    textarea {
        white-space: pre-wrap;
        word-wrap: break-word;
        font-family: inherit;
    }
    @media only screen and (max-width: 600px) {
      .brands {
        display: none;
      }
    }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #da1326;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars" style="color: #fff"></i></a>
      </li>
      <li class="nav-item d-non5e d-sm-inline-block brands">
        <a href="javascript:void(0)" class="nav-link" style="color: #fff;">
          <strong>Secure Finance System</strong>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link text-light" data-toggle="dropdown" href="#">
          <?php echo $nama_user['data']['nama'] ?>
          <img src="<?php echo base_url('assets/dist/img/user1.png')?>"
           style="max-width: 42px;  margin-top: -7px">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-envelope mr-2"></i> Ubah Password
          </a>
          <div class="dropdown-divider"></div>
          <a id="logout" href="" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> Keluar
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #B10001">
    <a href="<?php echo base_url() ?>" class="brand-link" style="background-color: #fff">
      <img src="<?php echo base_url('assets/dist/img/sefin-system.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8;">
      <span class="brand-text font-weight-light" style="color: #4a4747"><strong>SEFIN</strong>SYSTEM</span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column load_menu" id="data-menu" data-widget="treeview" role="menu" data-accordion="false">
          <!-- rendered data menu -->
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div id="main-content">
    <div class="content-wrapper">
      <div class="content-header" >
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>
              </div>
              <div class="box-body">
                 <p>Selamat Datang </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form id="form_update_password">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInput1" class="bmd-label-floating">Password Lama</label>
                <input type="password" name="password_lama" class="form-control ">
              </div>
              <div class="form-group">
                <label for="exampleInput1" class="bmd-label-floating">Password Baru</label>
                <input type="password" name="password_baru" class="form-control ">
              </div>
              <div class="form-group">
                <label for="exampleInput1" class="bmd-label-floating">Konfirmasi Password</label>
                <input type="password" name="konfirmasi_password" class="form-control ">
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="">BPR Kredit Mandiri</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.1
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/plugins/moment/moment.min.js')?>"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/plugins/datepicker/js/bootstrap-datepicker.min.js')?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/select2/js/select2.full.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/demo.js')?>"></script>
<script src="<?php echo base_url('assets/dist/nprogress/nprogress.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/jsrsasign.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/bootbox.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')?>"></script>
</body>
</html>
<script>
  $(function(){
    var cancel;
    get_menu = function(opts){
      var url = '<?php echo $this->config->item('api_url');?>api/menu/master';
      return $.ajax({
          type: 'GET',
          url : url,
          headers : {
              'Authorization': 'Bearer '+localStorage.getItem('token')
         }
      });
    }
    update_password = function(opts,id){
      var data = opts;
      var url = '<?php echo $this->config->item('api_url');?>api/user/change_password/';
      return $.ajax({
        url: url,
        data: data,
        type: 'PUT',
        headers : {
                'Authorization': 'Bearer '+localStorage.getItem('token')
        }
      })
    }

    $('#form_update_password').on('submit',function(e){
      e.preventDefault();
      var id = $('input[name=id]', this).val();
      var data = {
          password_lama: $('input[name=password_lama]',this).val(),
          password_baru: $('input[name=password_baru]',this).val(),
          konfirmasi_password : $('input[name=konfirmasi_password]',this).val()
      }
      update_password(data)
      .done(function(response){
          bootbox.alert('Password berhasil diperbarui.',function(){
            $('#form_update_password')[0].reset();
          });
      })
      .fail(function(jqXHR){
          var data = jqXHR.responseJSON;
          var error = "";
          if(typeof data == 'string'){
              error ='<p>'+ data +'</p>';
          }else{
              $.each(data, function(index,item){
                  error += '<p>'+ item +'</p>' +"\n";
              });
          }
          bootbox.alert(error);
      })
    })
  });
</script>

<script type="text/javascript">
  $.ajax({
    type: "post",
    url: "menu_controller",
    data: "data",
    success: function (response) {
      $('.load_menu').html(response);
    }
  });

  $('#logout').on('click', function(e){
    e.preventDefault();
    localStorage.clear();
    window.location.replace('<?php echo base_url('index.php/login/logout') ?>');
  });
  //wilayah
  $('#click-provinsi').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/provinsi') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
      $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
    $('#click-kabupaten').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/kabupaten') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  $('#click-kecamatan').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/kecamatan') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  $('#click-kelurahan').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/kelurahan') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //master
  $('#click-asal-data').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/asal_data') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  $('#click-area').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/area') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  $('#click-kantor-cabang').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/kantor_cabang') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });

  $('#click-jenis-pic').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/jenis_pic') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });

  $('#click-pic').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/pic') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });

  $('#click-area-pic').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/area_pic') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //credit checking
  $('#click-memorandum-so').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/memorandum_so') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //tracking
  $('#click-tracking').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('IT/track_creditchecking') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //das
  $('#click-das').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/das') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //hm
  $('#click-ds-spv').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/ds_spv') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //ao
  $('#click-memorandum-ao').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/memorandum_ao') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //ca
  $('#click-memorandum-ca').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/memorandum_ca') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //caa
  $('#click-form-caa').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('IT/form_caa') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //menu
  $('#click-menu').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/menu') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //sub menu
  $('#click-submenu').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('master/submenu') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //user
  $('#click-user-access').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/user_access') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //caa
  $('#click-caa').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Master/caa') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
  //form ol
  $('#click-form-ol').on('click', function(e){
    e.preventDefault();
    NProgress.start();
    window.location.replace('<?php echo $this->config->base_url('Master/form_ol');?>');
    NProgress.done();
  });
  //dashboard target lending
  $('#dashboard_target_lending').on('click', function(e){
    e.preventDefault();
    NProgress.start();

    $.ajax({
        url : '<?php echo base_url('Target_lending_controller/tampil_data') ?>',
        dataType: 'html'
    })
    .done(function(response){
        $('#main-content').html(response);
        NProgress.done();
    })
    .fail(function(jqXHR){
        $('#main-content').load('<?php echo base_url('Rusak') ?>');
       NProgress.done();
    });
  });
</script>
</body>
</html>
