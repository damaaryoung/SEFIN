<?php 
defined('BASEPATH') or exit('No direct script access allowed');
use GuzzleHttp\Client;

class Target_lending_controller extends CI_Controller {
    // var $API ="";

    function __construct() {
        parent::__construct();
    }
    // menampilkan data kontak
    function index(){
      

        $client = new Client();
        $headers = ['headers' => ['Content-Type' => 'application/json', 
        'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJCUFIgS3JlZGl0IE1hbmRpcmkgSW5kb25lc2lhIiwiaWQiOjE1MTEsIm5payI6IjAyMjAxMDE0NyIsInVzZW5hbWUiOiJhcnlvIiwia2RfY2FiYW5nIjpudWxsLCJkaXZpc2lfaWQiOiJJVCIsImphYmF0YW4iOiJJVCBTVEFGRiIsImVtYWlsIjoiaXRAa3JlZGl0bWFuZGlyaS5jby5pZCIsIm5hbWEiOiJIQVJZTyBGQUpBUiBCSEFHQVNLT1JPIiwiaWF0IjoxNjAxOTQ4ODQwLCJleHAiOjE2MDMxNTg0NDB9.EUR-bBVEea1hSk0R-VW5ibvGajX1qkeDdvxtkQ3FKhc']];
        $response = $client->getAsync('http://103.31.232.146/API_WEBTOOL3/api/master/target', $headers)->then(
	    function ($response) {
                return json_decode($response->getBody()->getContents(), true);
            }, function ($exception) {
               return $exception->getMessage();
               
      });
    $rspJson= $response->wait();

    $data_array = array(
        'target' => $rspJson['data']);
    //   var_dump($data_array);
       
        $this->load->view('master/target_lending/template',$data_array);
        $this->load->view('master/target_lending/table_target',$data_array);
    }
    }
