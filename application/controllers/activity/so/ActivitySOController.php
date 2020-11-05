<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
class ActivitySOController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_master_activity');
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
      $data=$this->Model_master_activity->tampil_data($filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/sales-officer/tabel_data',$data);
    }
    function formRO(){
      $this->load->view('master/activity/sales-officer/formRO');
    }
    function formMB(){
      $this->load->view('master/activity/sales-officer/formMB');
    }
    function formPromosi(){
      $this->load->view('master/activity/sales-officer/formPromosi');
    }

  }
?>
