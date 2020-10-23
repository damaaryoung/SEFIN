<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_target_lending extends ci_model
{
   public function tampil_data($page){
   
    $url     = "http://103.31.232.146/API_WEBTOOL3/api/master/target?page=".$page;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
    }

    // public function updated(){
    //     $arrayData = array(
    //       'area_cabang' =>$this->input->post('area_cabang',TRUE),
    //       'area_kerja' =>$this->input->post('area_kerja',TRUE),
    //       'kode_kantor' =>$this->input->post('kode_kantor',TRUE),
    //       'target' =>$this->input->post('target',TRUE),
    //       'bulan' =>$this->input->post('bulan',TRUE),
    //       'tahun' =>$this->input->post('tahun',TRUE),
         
    //     );
    //     $url="/api/master/target/update/".$this->input->post('id_data', TRUE)."";
    //     $curl     = $this->config->item('api_url') . $url ;
    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL, $curl);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //         'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    //     ));
    //     curl_setopt($ch, CURLOPT_POST, 1);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayData);
    //     $output = curl_exec($ch);
    //     curl_close($ch);
    //     return json_encode($output, true);
    //   }
}
 // $response = $this->_client->request('GET','target',[
    //     'kmi_key' => 'coba'
    // ]);
    // $result = json_decode($response->getBody()->getContents(),true);
    // $rspJson = $result->wait();

    // return $rspJson['data'];

    // $url = "http://103.31.232.146/API_WEBTOOL3/api/master/target?page=".$page;
    // $token = $this->session->userdata('SESSION_TOKEN');
    // $headers = ['headers' => ['Content-Type' => 'application/json',
    // 'Authorization' => 'Bearer ' .$token]];
    // $response = $client->getAsync($url, $headers)->then(
    // function ($response) {
    //         return json_decode($response->getBody()->getContents(), true);
    //     }, function ($exception) {
    //        return $exception->getMessage();
           
    //  });
    //  $rspJson= $response->wait();

    //  return $rspJson;

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


    