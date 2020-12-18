<?php
class Model_activity_ao extends CI_Model{

  function tampil_data($filter,$page){
    $link="api/master/Activity/ao/filter?activity=".$filter."&page=".$page."";
    $url= $this->config->item('api_url').$link;
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

  function tampil_data_FormSurvey($filter,$page){
    $link="/api/master/Activity/ao/viewNasabahMikro/detail?no_kontrak=".$filter."&page=".$page."";
    $url= $this->config->item('api_url').$link;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    ));
    $output = curl_exec($ch);
    curl_close($ch);
    $data= json_decode($output, true);
    return $data;
  }

  function tampil_data_FormSurveyDetail(){
      $link="api/master/Activity/ao/detail/".$this->input->post('id',true)."";
      $url= $this->config->item('api_url').$link;
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
