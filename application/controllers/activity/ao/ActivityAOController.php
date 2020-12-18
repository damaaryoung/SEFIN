<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
class ActivityAOController extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_activity_ao');
    }
    function data(){
      if (isset($_POST['filter'])) {
        $filter=$_POST['filter'];
        $view='tabel_data_'.$_POST['filter'];
      }else {
        $filter="survey";
        $view='tabel_data_survey';

      }
      if (isset($_POST['page'])) {
        $page=$_POST['page'];
      }else {
        $page="1";
      }
      $data=$this->Model_activity_ao->tampil_data($filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];

      $this->load->view('master/activity/account-officer/tabel-data/'.$view, $data);
    }

    function daftarNamaFormSurvey(){
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
      $data=$this->Model_activity_ao->tampil_data_FormSurvey($filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/account-officer/tabel-data/daftar_nama_form_survey', $data);
    }

    function daftarNamaFormVisit(){
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
      $data=$this->Model_activity_ao->tampil_data_FormSurvey($filter,$page);
      $data['pagination']=$data['data']['last_page'];
      $data['page']=$data['data']['current_page'];
      $data['data']=$data['data']['data'];
      $this->load->view('master/activity/account-officer/tabel-data/daftar_nama_form_visit', $data);
    }

    function daftarNamaFormVisitDetail(){
      echo $this->Model_activity_ao->tampil_data_FormSurveyDetail();
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
