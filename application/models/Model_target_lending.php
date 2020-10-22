<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use GuzzleHttp\Client;


class Model_target_lending extends CI_Model
{

  // private $_client;

  // public function __construct()
  // {
  //     // $this->_client = new Client([
  //     //   'base_uri' => 'http://103.31.232.146/API_WEBTOOL3/api/master',
  //     //   'auth' => ['Bearer ' .$token]
  //     // ]);
  // }

   public function tampil_data($page){
    $client = new Client();

    if (isset($_GET['draw'])) {
      $page=$_GET['draw'];
    }

   
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
  }