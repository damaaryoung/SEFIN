<?php
class Model_activity extends CI_Model{

  function tampil_data($filter,$page){
    $url     = $this->config->item('api_url') . "api/master/Activity/so/filter?activity=".$filter."&page=".$page."";
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

  function tampil_data_select_mb($filter,$page){
    $url     = $this->config->item('api_url') . "api/master/Activity/so/viewNasabahMikro/id?no_kontrak=&kode_mb=".$filter."&param=mb&page=".$page;
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

  function tampil_data_select_ro($filter,$page){
    // $url     = $this->config->item('api_url') . "api/master/Activity/so/viewNasabahMikro/id?no_kontrak=".$filter."&kode_mb=&param=ro&page=".$page."";
    $url= $this->config->item('api_url')."api/master/Activity/so/viewNasabahMikro/id?no_kontrak=".$filter."&kode_mb=&param=ro&page=".$page;
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

  function dataNasabahMikro(){
    $url     = $this->config->item('api_url') . "api/master/Activity/so/viewNasabahMikro";
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
  function dataNasabahMikroMB(){
    $url     = $this->config->item('api_url') . "api/master/Activity/so/viewMB";
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
  function dataNasabahMikroDetail(){
    $url     = $this->config->item('api_url') . "api/master/Activity/so/detail/".$this->input->post('nomor_kontrak', TRUE)."" ;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
  }
  function dataNasabahMikroDetailNamaMB(){
    $url     = $this->config->item('api_url') . "/api/master/Activity/so/viewMB/id?kode_mb=".$this->input->post('kode_mb', TRUE) ;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
  }

}
