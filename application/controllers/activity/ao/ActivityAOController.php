<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
class ActivityAOController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_activity');
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
      $data=$this->Model_activity->tampil_data($filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/sales-officer/tabel_data',$data);
    }
    function survey(){
      $this->load->view('master/activity/account-officer/formSurvey');
    }
    function visit(){
      $this->load->view('master/activity/account-officer/formVisit');
    }
    function promosi(){
      $this->load->view('master/activity/account-officer/formPromosi');
    }

  }
?>
