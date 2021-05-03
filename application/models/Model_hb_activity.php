<?php
class Model_hb_activity extends CI_Model{

  function tampil_data($pic,$filter,$page){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://103.31.232.146/API_WEBTOOL3/api/master/hmhb/index?jenis_pic='.$pic.'&jenis_aktivitas='.$filter.'&page='.$page,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
      ),
    ));

    $response = curl_exec($curl);
    // print_r($response);

    curl_close($curl);
    return json_decode($response, true);
  }
  function tampil_data_pic($page, $nama){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://103.31.232.146/API_WEBTOOL3/api/master/hmhb/index/kodepic?jenis_pic=AO&nama='.$nama.'&page='.$page,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
      ),
    ));

    $response = curl_exec($curl);
    // print_r($response);

    curl_close($curl);
    return json_decode($response, true);
  }
  function tampil_data_cadeb($page){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://103.31.232.146/API_WEBTOOL3/api/master/hmhb/index/approvehm?page='.$page,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
  }
  function tampil_data_ao($page, $nama){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://103.31.232.146/API_WEBTOOL3/api/master/hmhb/index/kodepic?jenis_pic=AO&nama='.$nama.'&page='.$page,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
      ),
    ));

    $response = curl_exec($curl);
    // print_r($response);

    curl_close($curl);
    return json_decode($response, true);
  }
  function tampil_data_so($page, $nama){
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://103.31.232.146/API_WEBTOOL3/api/master/hmhb/index/kodepic?jenis_pic=SO&nama='.$nama.'&page='.$page,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
      ),
    ));

    $response = curl_exec($curl);
    // print_r($response);

    curl_close($curl);
    return json_decode($response, true);
  }

}
