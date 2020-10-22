<?php 
defined('BASEPATH') or exit('No direct script access allowed');
use GuzzleHttp\Client;

class Target_lending_controller extends CI_Controller {
    // var $API ="";

    function __construct() {
        parent::__construct();
		$this->load->model('Model_target_lending');
    }
    // menampilkan data kontak
    function index(){
            // $data =$this->Model_target_lending->tampil_data()
        // ;
        // var_dump($data['data']['data']);

        $this->load->view('master/target_lending/template',$data);
        $this->load->view('master/target_lending/table_target',$data);
    }

    function tampil_data()
    {
      $data=$this->Model_target_lending->tampil_data($page);
        // var_dump($data['data']);
        // die();

          // var_dump('d')
      foreach ($data['data']['data'] as $key) {
        // code...
          $datas[]=array(
          "kode_kantor"=>$key['kode_kantor'],
          "area_kerja"=>$key['area_kerja'],
          "area"=>$key['area'],
          "target"=>$key['target'],
          "bulan"=>$key['bulan'],
          "tahun"=>$key['tahun'],
          "edit"=>'<button class="btn btn-info view" onclick="edit('.$key['id'].');">Edit</button>',
          "delete"=>'<button class="btn btn-info delete" name="delete" onclick="view('.$key['id'].')";>Delete</button>',
        
          
        );
      }
      // var_dump($data);
      $arrayName = array(
        "draw"=>$data['data']['current_page'],
        "recordsTotal"=> $data['data']['total'],
        "recordsFiltered"=> $data['data']['total'],
        "data"=>$datas,
      );
      echo json_encode($arrayName);
      // var_dump($arrayName);
    }
    
  

     function create(){

      $this->load->view('master/target_lending/add_target');
      // $this->load->view('master/target_lending/add_target_js.php');

    }

    function edit(){
      $id = $this->input->post('id');
      $this->load->model('model_auth');
      $data['get_data'] = $this->model_auth->get_data('api/master/target/'.$id);
      $this->load->view('master/target_lending/edit_target', $data);
    }
    
    function get_area_kerja() {
      $area_kerja = $this->model_auth->get_data('api/master/area_kerja');
      echo json_encode($area_kerja);
  }
  
  }