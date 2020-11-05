<?php
class Model_master_activity extends CI_Model{

  function tampil_data($filter,$page){
    $url     = $this->config->item('api_url') . "/api/master/MasterActivity/filterpic?pic=".$filter."&page=".$page."";
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

  function store(){
    $arrayData = array(
      'pic' =>$this->input->post('pic',TRUE),
      'nama_aktivitas' =>$this->input->post('nama_aktivitas',TRUE),
      'target_aktivitas' =>$this->input->post('target_aktivitas',TRUE),
      'durasi_aktivitas' =>$this->input->post('durasi_aktivitas',TRUE),
    );
    $url="/api/master/MasterActivity/pic";
    $curl     = $this->config->item('api_url') . $url ;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $curl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    ));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayData);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_encode($output, true);
  }

  function view($id){
    $url     = $this->config->item('api_url') . "api/master/MasterActivity/detailpic/".$id."" ;
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

  function updated($id){
    $arrayData = array(
      'id'=>$id,
      'nama_jenis' =>$this->input->post('nama_jenis',TRUE),
      'nama_aktivitas' =>$this->input->post('nama_aktivitas',TRUE),
      'target_aktivitas' =>$this->input->post('target_aktivitas',TRUE),
      'durasi_aktivitas' =>$this->input->post('durasi_aktivitas',TRUE),
    );
    $url="/api/master/MasterActivity/putpic/".$id."";
    $curl     = $this->config->item('api_url') . $url ;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $curl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
    ));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayData);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_encode($output, true);
  }

  public function destroy($id)
    {
        $url     = "http://103.31.232.146/API_WEBTOOL3/api/master/MasterActivity/deletepic/".$id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
        ));
        $output = curl_exec($ch);
        curl_close($ch);
        return json_encode($output, true);
    }
}
