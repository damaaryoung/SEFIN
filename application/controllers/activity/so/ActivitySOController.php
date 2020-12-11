<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
class ActivitySOController extends CI_Controller
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
        $filter='formRO';
      }
      if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }

      $data=$this->Model_activity->tampil_data($filter,$page);
      if ($_POST['filter']=="formRO") {
        $view="tabel_data_master_visit_ro";
      }elseif ($_POST['filter']=="formMB") {
        $view="tabel_data_master_maintain_mb";
      }elseif ($_POST['filter']=="formPromosi") {
        $view="tabel_data_master_promosi";
      }
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/sales-officer/table-data/'.$view,$data);
    }
    function dataselect(){
      if (isset($_POST['filter'])) {
        $filter=$_POST['filter'];
      }
      if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }
      if ($_POST['param']=="ro") {
        $data=$this->Model_activity->tampil_data_select_ro($filter,$page);
        $data['pagination']=$data['data']['last_page'];
        $data['page']=$data['data']['current_page'];
        $data['data']=$data['data']['data'];
        $this->load->view('master/activity/sales-officer/table-data/tableDataDebiturVisit',$data);
      }elseif($_POST['param']=="mb"){
        $data=$this->Model_activity->tampil_data_select_mb($filter,$page);
        $data['pagination']=$data['data']['last_page'];
        $data['page']=$data['data']['current_page'];
        $data['data']=$data['data']['data'];
        $this->load->view('master/activity/sales-officer/table-data/tableDataDebiturMaintain',$data);
        // var_dump($data);
      }
    }
    
    function detailKontrak(){
      $data= $this->Model_activity->dataNasabahMikroDetail();
      echo $data;
    }
    
    function detailNamaMB(){
      $data= $this->Model_activity->dataNasabahMikroDetailNamaMB();
      echo $data;
    }

  }
?>
