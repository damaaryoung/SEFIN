<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
class Dashboard_SO_AO_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Dashboard_SO_AO');
    }
    function data(){
      if (isset($_POST)) {
        $template = ($_POST['datafilter']=="so") ? "tabel_data_so" : "tabel_data_ao" ;
        if ($_POST['datafilter']=="so") {
          $data['prospek']=$this->Model_Dashboard_SO_AO->prospek($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
          $data['visitro']=$this->Model_Dashboard_SO_AO->visitro($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
          $data['maintainmb']=$this->Model_Dashboard_SO_AO->maintainmb($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
          $data['leads']=$this->Model_Dashboard_SO_AO->leads($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
          $data['promosi']=$this->Model_Dashboard_SO_AO->promosi($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
        }else{
          $data['survey']=$this->Model_Dashboard_SO_AO->survey($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
          $data['visitcgc']=$this->Model_Dashboard_SO_AO->visitcgc($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
          $data['promosi']=$this->Model_Dashboard_SO_AO->promosiao($_POST['bulan'],$_POST['tahun'],$_POST['area'],$_POST['cabang'])->result();
        }
        $this->load->view('master/dashboard-activity-so-dan-ao/'.$template,$data);
      }
    }
    function get_cabang(){
      $q=$this->Model_Dashboard_SO_AO->get_cabang($_POST['id'])->result();
      echo json_encode($q);
    }
  }
?>
