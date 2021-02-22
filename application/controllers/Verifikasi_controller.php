<?php

use function Matrix\identity;

defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();       
    }

    function verifikasi_id() {

        $url = 'https://api.verijelas.com/bprkm_poc/completeid' ;
        $ch = curl_init();

        $data = [
            "trx_id" => $this->input->post('trx_id', true),
            "nik" => $this->input->post('nik', true),
            "name" => $this->input->post('name', true),
            "birthdate" => $this->input->post('birthdate', true),
            "birthplace" => $this->input->post('birthplace', true),
            "identity_photo" => "",
            "selfie_photo" => $this->input->post('selfie_photo', true) 
        ];
        
        $postdata = json_encode($data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Token: c2a6ac14-14b9-44d5-98db-c8a3631d676c',
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        
        $output = curl_exec($ch);
        curl_close($ch);
        print_r ($output);
        // print_r( $postdata);
        // echo json_encode($output);
        // return json_encode(['status'=>'success']);
    }

    function verifikasi_npwp() {

        $url = 'https://api.verijelas.com/bprkm_poc/pendapatan' ;
        $ch = curl_init();

        $data = [
            "trx_id" => $this->input->post('trx_id', true),
            "npwp" => $this->input->post('npwp', true),
            "nik" => $this->input->post('nik', true),
            "income" => intval($this->input->post('income', true)),
            "name" => $this->input->post('name', true),
            "birthdate" => $this->input->post('birthdate', true),
            "birthplace" => $this->input->post('birthplace', true),
        ];
        
        $postdata = json_encode($data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Token: c2a6ac14-14b9-44d5-98db-c8a3631d676c',
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        
        $output = curl_exec($ch);
        curl_close($ch);
        print_r ($output);
        // print_r( $postdata);
        // echo json_encode($output);
        // return json_encode(['status'=>'success']);
    }

    function verifikasi_properti() {

        $url = 'https://api.verijelas.com/bprkm_poc/properti' ;
        $ch = curl_init();

        $data = [
            "trx_id" => $this->input->post('trx_id', true),
            "nop" => $this->input->post('nop', true),
            "property_name" => $this->input->post('property_name', true),
            "property_building_area" => intval($this->input->post('property_building_area', true)),
            "property_surface_area" => intval($this->input->post('property_surface_area', true)),
            "property_estimation" => intval($this->input->post('property_estimation', true)),
            "nik" => $this->input->post('nik', true),
            "certificate_id" => $this->input->post('certificate_id', true),
            "certificate_name" => $this->input->post('certificate_name', true),
            "certificate_type" => $this->input->post('certificate_type', true),
            "certificare_date" => $this->input->post('certificate_date', true)
        ];
        
        $postdata = json_encode($data);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Token: c2a6ac14-14b9-44d5-98db-c8a3631d676c',
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        
        $output = curl_exec($ch);
        curl_close($ch);
        print_r ($output);
        // print_r( $postdata);
        // echo json_encode($output);
        // return json_encode(['status'=>'success']);
    }

    function get_quota() {
        $url = 'https://api.verijelas.com/bprkm_poc/sisa_kuota' ;
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Token: c2a6ac14-14b9-44d5-98db-c8a3631d676c',
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        $output = curl_exec($ch);
        curl_close($ch);
        print_r($output);
    }

}

