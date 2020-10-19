<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report Juara</title>

    <link href="<?php echo base_url('assets/');?>css/bootstrap.min.css " rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/bootstrap-theme.min.css " rel="stylesheet">
    <link href="<?php echo base_url('assets/');?>css/freelancer.min.css" rel="stylesheet">
    <style>
      header.masthead{
              background: url('<?php echo $this->config->base_url('assets/');?>img/background.jpg');
          }
      header.masthead .intro-text .name{
            font-size: 2.75em;
        }
      #mainNav {
          height : 70px;
          background: rgba(20, 127, 203, 0.75);
      }
      header.masthead .intro-text .name .skills{
        font-size: 2.75em;
        font-weight: bold;
      }
    </style>
  </head>

  <body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="padding-top:40px;padding-bottom:100px; margin-bottom:0;height:100%;">
  <div class="container" align="center" style>
        <a class="navbar-brand js-scroll-trigger" ><h1>PETUGAS LOKET TERBAIK BULAN INI <?php print_r (date("F Y",strtotime($_GET['tanggal_akhir'])))?></h1></a>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>

    <header class="masthead" style="height:100%;padding-bottom:180px;">
      <div class="container">
        <img class="img-circle" src="<?php echo base_url('assets/uploads/').$data['gambar'];?>" alt="" style="width: 350px;height: 350px;">
        <div class="intro-text" style="padding-top:77px;">
          <span class="name" style="text-shadow: 1px 1px #000000;color : #ff8100;font-weight: 1.75em;font-size: 40px;"><?php print_r ($data['nama_petugas'])?></span>
          <hr style="border-width:5px">
          <i class="glyphicon glyphicon-star" style="font-size:40px; color:#d7da28;"></i>
          <i class="glyphicon glyphicon-star" style="font-size:40px;color:#d7da28;"></i>
          <i class="glyphicon glyphicon-star" style="font-size:40px;color:#d7da28;"></i><br>
          <span class="skills" style="text-shadow: 1px 1px #000000;color : #ff8100;font-weight: 1.75em;font-size: 40px;">Score : <?php print_r ($data['total'])?></span>
          <br>
          
        </div>
        <div class="footer">            
            <img src = "<?php echo $this->config->base_url('assets/');?>img/logo.png" style="margin-top:45px;margin-left:40px;width: 100px;height: 98px;position: absolute;"/>
            <span class="skills" style="padding-top:50px;margin-left:180px;position:absolute;margin-bottom:0;padding-bottom: 0;color : #ff8100;font-weight: 2.60em;font-size: 23px; text-shadow: 1px 1px #000;">DINAS KEPENDUDUKAN & PENCATATAN SIPIL<br>KOTA TANGERANG SELATAN</span>
        </div>
      </div>
    </header>
    <script src="js/freelancer.min.js"></script>
	</body>

</html>