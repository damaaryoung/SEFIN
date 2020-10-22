<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;


class Model_target_lending extends ci_model
{

  private $_client;

  public function __construct()
  {
      $this->_client = new Client([
        'base_uri' => 'http://103.31.232.146/API_WEBTOOL3/api/master',
        'auth' => ['Bearer ' .$token]
      ]);
  }

   public function tampil_data($page){
    $client = new Client();

    if (isset($_GET['draw'])) {
      $page=$_GET['draw'];
    }

    // $response = $this->_client->request('GET','target',[
    //     'kmi_key' => 'coba'
    // ]);
    // $result = json_decode($response->getBody()->getContents(),true);
    // $rspJson = $result->wait();

    // return $rspJson['data'];

    $url = "http://103.31.232.146/API_WEBTOOL3/api/master/target?page=".$page;
    $token = $this->session->userdata('SESSION_TOKEN');
    $headers = ['headers' => ['Content-Type' => 'application/json',
    'Authorization' => 'Bearer ' .$token]];
    $response = $client->getAsync($url, $headers)->then(
    function ($response) {
            return json_decode($response->getBody()->getContents(), true);
        }, function ($exception) {
           return $exception->getMessage();
           
     });
     $rspJson= $response->wait();

     return $rspJson;

    }

    // public function edit_data($page){
    //   $client = new Client();
  
    //   if (isset($_GET['draw'])) {
    //     $page=$_GET['draw'];
    //   }
    //   $url = "http://103.31.232.146/API_WEBTOOL3/api/master/target?page=".$page;
    //   $token = $this->session->userdata('SESSION_TOKEN');
    //   $headers = ['headers' => ['Content-Type' => 'application/json',
    //   'Authorization' => 'Bearer ' .$token],
    //   'id' => $id];
    //   $response = $client->getAsync($url, $headers)->then(
    //   function ($response) {
    //           return json_decode($response->getBody()->getContents(), true);
    //       }, function ($exception) {
    //          return $exception->getMessage();
             
    //    });
    //    $rspJson= $response->wait();
  
    //    return $rspJson['data'];
    //   }
}
    // public function create(){

    //     function get_area_kerja(){
    //         if (isset($_GET['draw'])) {
    //           $page=$_GET['draw'];
    //         }
    //         $url     = $this->config->item('api_url') . "api/master/area_kerja" ;
    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL, $url);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //             'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    //         ));
    //         $output = curl_exec($ch);
    //         curl_close($ch);
    //         return json_decode($output, true);
    //       }


    //       function get_area(){
    //         if (isset($_GET['draw'])) {
    //           $page=$_GET['draw'];
    //         }
    //         $url     = $this->config->item('api_url') . "/api/master/area_cabang" ;
    //         $ch = curl_init();
    //         curl_setopt($ch, CURLOPT_URL, $url);
    //         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //         curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //             'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    //         ));
    //         $output = curl_exec($ch);
    //         curl_close($ch);
    //         return json_decode($output, true);
    //       }   
    // }    
