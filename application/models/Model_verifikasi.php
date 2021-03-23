<?php
class Model_verifikasi extends ci_model{
    
    function __construct() {
        parent::__construct();
    }

    function tampil_data($filter, $page){
        // $url     = $this->config->item('api_url') . "api/master/verif/filter?page=1";
        $url = $this->config->item('api_url') . "api/master/verif/filter?page=$page";
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
    
}