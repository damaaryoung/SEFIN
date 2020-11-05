<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
class Masterdata_activity_controller extends CI_Controller
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
      $this->load->view('master/activity/master-data/table_data',$data);
    }
    function create(){
      $this->load->view('master/activity/master-data/create_form');
    }
    function store(){
      echo $this->Model_master_activity->store();
    }
    function edit(){
      $id=$this->input->post('id',true);
      $data=$this->Model_master_activity->view($id);
      $this->load->view('master/activity/master-data/edit_form',$data);
    }
    function update($id){
      echo $this->Model_master_activity->updated($id);
    }
    function delete(){
      $id=$this->input->post('id',true);
      $data=$this->Model_master_activity->destroy($id);
      echo $data;
    }
  }
?>
