<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
class ActivityHMController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('Model_hm_activity');
  }
  function TemplateSO(){
    $this->load->view('master/activity/head-marketing/view-so/index');
  }
  function TemplateAO(){
    $this->load->view('master/activity/head-marketing/view-ao/index');
  }
  function TemplateTeleSales(){
    $this->load->view('master/activity/head-marketing/view-tele-sales/index');
  }
  function dataTableAO(){
      if (isset($_POST['filter'])) {
        $filter=$_POST['filter'];
        $view=$filter.'_datatable_view';
      }
      if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $pic='AO';
      $data=$this->Model_hm_activity->tampil_data($pic,$filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-ao/datatable/'.$view,$data);
  }
  function dataTableSO(){
      if (isset($_POST['filter'])) {
        $filter=$_POST['filter'];
        $view=$filter.'_datatable_view';
      }
      if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $pic='SO';
      $data=$this->Model_hm_activity->tampil_data($pic,$filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-so/datatable/'.$view,$data);
  }
  function dataTableTeleSales(){
    $this->load->view('master/activity/head-bussines/view-tele-sales/datatable/index');
  } 
  function form_create_ao(){
    if ($this->input->post('formpick')=="SURVEY") {
      $view="form_survey";
    }else if($this->input->post('formpick')=="VISIT%20CGC"){
      $view="form_visit_cgc";
    }else {
      $view="form_telesales";
    }
    $this->load->view('master/activity/head-marketing/view-ao/form-data/'.$view);
  }
  function form_create_so(){
    if ($this->input->post('formpick')=="VISIT%20RO") {
      $view="form_VISIT%20RO";
    }else{
      $view="form_MAINTAIN%20MB";
    }
    $this->load->view('master/activity/head-marketing/view-so/form-data/'.$view);
  }
  
  function form_update_so(){
    if ($this->input->post('form')=="VISIT RO") {
      $view="form_VISIT%20RO";
    }else{
      $view="form_MAINTAIN%20MB";
    }
    $this->load->view('master/activity/head-marketing/view-so/form-data/'.$view);
  }
  function form_update_ao(){
    if ($this->input->post('form')=="SURVEY") {
      $view="form_survey";
    }else if($this->input->post('formpick')=="VISIT%20CGC"){
      $view="form_visit_cgc";
    }else {
      $view="form_telesales";
    }
    $this->load->view('master/activity/head-marketing/view-ao/form-data/'.$view);
  }
  function data_pic(){
    if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_hm_activity->tampil_data_pic($page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-ao/datatable/data_pic',$data);
  }
  function data_cadeb(){
    if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_hm_activity->tampil_data_cadeb($page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-ao/datatable/data_cadeb',$data);
  }
  function data_ao(){
    if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_hm_activity->tampil_data_ao($page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-ao/datatable/data_ao',$data);
  }
  function data_so(){
    if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_hm_activity->tampil_data_so($page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-so/datatable/data_so',$data);
  }
  function data_no_kontrak(){
    if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_hm_activity->tampil_data_cadeb($page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-so/datatable/data_no_kontrak',$data);
  }
  function data_nama_mb(){
    if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_hm_activity->tampil_data_cadeb($page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-so/datatable/data_nama_mb',$data);
  }

  function data_visit(){
    if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_hm_activity->tampil_data_cadeb($page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/head-marketing/view-ao/datatable/data_visit',$data);
  }
  
}
?>
