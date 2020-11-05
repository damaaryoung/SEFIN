<?php
class Model_activity extends CI_Model{

  function tampil_data($filter,$page){
    $url     = $this->config->item('api_url') . "api/master/sertifikat/filter/cari?nomor_so=".$filter."&page=".$page."";
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

  // function view(){
  //   $url     = $this->config->item('api_url') . "/api/master/sertifikat/".$this->input->post('id', TRUE)."" ;
  //   $ch = curl_init();
  //   curl_setopt($ch, CURLOPT_URL, $url);
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  //       'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
  //   ));
  //   $output = curl_exec($ch);
  //   curl_close($ch);
  //   return json_decode($output, true);
  // }

  // function print($id){
  //   $url     = $this->config->item('api_url') . "/api/master/sertifikat/".$this->input->post('id', TRUE)."" ;
  //   $ch = curl_init();
  //   curl_setopt($ch, CURLOPT_URL, $url);
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  //       'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
  //   ));
  //   $output = curl_exec($ch);
  //   curl_close($ch);
  //   return json_decode($output, true);
  // }

  // function updated(){
  //   $arrayData = array(
  //     'id_data' =>$this->input->post('id_data',TRUE),
  //     'nama' =>$this->input->post('nama',TRUE),
  //     'alamat' =>$this->input->post('alamat',TRUE),
  //     'no_shm' =>$this->input->post('no_shm',TRUE),
  //     'nomor_surat_ukur' =>$this->input->post('nomor_surat_ukur',TRUE),
  //     'tgl_sertifikat' =>$this->input->post('tgl_sertifikat',TRUE),
  //     'luas_tanah' =>$this->input->post('luas_tanah',TRUE),
  //     'ajb_flag' =>$this->input->post('ajb_flag',TRUE),
  //   );
  //   $url="/api/master/sertifikat/update/".$this->input->post('id_data', TRUE)."";
  //   $curl     = $this->config->item('api_url') . $url ;
  //   $ch = curl_init();
  //   curl_setopt($ch, CURLOPT_URL, $curl);
  //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  //   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  //       'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
  //   ));
  //   curl_setopt($ch, CURLOPT_POST, 1);
  //   curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayData);
  //   $output = curl_exec($ch);
  //   curl_close($ch);
  //   return json_encode($output, true);
  // }

}
