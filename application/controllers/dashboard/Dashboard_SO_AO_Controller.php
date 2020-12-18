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
      if (isset($_POST['filter'])) {
        $filter=$_POST['filter'];
      }else {
        $filter="";
      }
      if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_Dashboard_SO_AO->tampil_data($filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/dashboard-activity-so-dan-ao/tabel_data',$data);
    }

  }
?>
