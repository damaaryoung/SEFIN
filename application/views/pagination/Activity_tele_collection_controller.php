<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Activity_tele_collection_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_activity_tele_collection');        
    }

    function data(){
        if (isset($_POST['filter'])) {
          $filter=$_POST['filter'];
        } else {
            $filter="";
        } 
        
        if (isset($_POST['page'])) {
          $page=$_POST['page'];
        } else {
          $page="1";
        }
  
        $data=$this->Model_activity_tele_collection->tampil_data($filter,$page);
        $data['pagination']=$data['data']['last_page'];
        $data['page']=$data['data']['current_page'];
        $data['data']=$data['data']['data'];
        $this->load->view('master/activity/table_data', $data);
      }
}