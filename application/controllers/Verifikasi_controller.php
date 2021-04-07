<?php

use function Matrix\identity;

defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_verifikasi');        
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

    function export_verifikasi($bulan='', $tahun='') {

            $query_debitur = "SELECT 
                    a.`id` AS id_trans_so,
                    a.`id_pasangan` AS id_pasangan,
                    a.`id_penjamin` AS id_penjamin,
                    g.`nama` AS nama_kantor,
                    a.`created_at` AS tanggal_so,
                    a.`nomor_so` AS nomor_so,
                    b.`no_ktp` AS no_ktp_debitur,
                    b.`nama_lengkap` AS nama_debitur,
                    b.`tempat_lahir` AS tempat_lahir_debitur,
                    b.`tgl_lahir` AS tgl_lahir_debitur,
                    b.`alamat_ktp` AS alamat_debitur,
                    b.`rt_ktp` AS rt_debitur,
                    b.`rw_ktp` AS rw_debitur,
                    h.`nama` AS kecamatan_debitur,
                    i.`nama` AS kelurahan_debitur,
                    j.`nama` AS kabupaten_debitur,
                    k.`nama` AS provinsi_debitur,
                    c.`limit_call` AS jml_verif_debitur,
                    e.`nama` AS verif_debitur,
                    c.`updated_at` AS update_verif_debitur,
                    b.`no_npwp` AS no_npwp_debitur,
                    d.`limit_call` AS jml_verif_npwp_debitur, 
                    f.`nama` AS verif_npwp_debitur,
                    d.`updated_at` AS update_verif_npwp_debitur
                FROM trans_so AS a 
                LEFT JOIN calon_debitur AS b ON a.`id_calon_debitur` = b.`id`
                LEFT JOIN verif_cadebt AS c ON a.`id` = c.`id_trans_so`
                LEFT JOIN verif_npwp AS d ON a.`id` = d.`id_trans_so`
                LEFT JOIN dpm_online.user AS e ON c.`user_id` = e.`user_id`
                LEFT JOIN dpm_online.user AS f ON d.`user_id` = f.`user_id`
                LEFT JOIN mk_cabang AS g ON a.`id_cabang` = g.`id`
                LEFT JOIN master_kecamatan AS h ON b.`id_kec_ktp` = h.`id`
                LEFT JOIN master_kelurahan AS i ON b.`id_kel_ktp` = i.`id`
                LEFT JOIN master_kabupaten AS j ON b.`id_kab_ktp` = j.`id`
                LEFT JOIN master_provinsi AS k ON b.`id_prov_ktp` = k.`id`
                WHERE d.`id_pasangan` IS NULL 
                    AND d.`id_penjamin` IS NULL 
                    AND MONTH(c.`updated_at`) = $bulan
                    AND YEAR(c.`updated_at`) = $tahun
                ORDER BY c.`updated_at`";
    
            $query_pasangan = "SELECT 
                a.`id` AS id_trans_so,
                c.`no_ktp` AS no_ktp_pasangan,
                c.`nama_lengkap` AS nama_pasangan,
                c.`tempat_lahir` AS tempat_lahir_pasangan,
                c.`tgl_lahir` AS tgl_lahir_pasangan,
                c.`alamat_ktp` AS alamat_pasangan,
                d.`limit_call` AS jml_verif_pasangan,
                f.`nama` AS verif_pasangan,
                d.`updated_at` AS update_verif_pasangan,
                c.`no_npwp` AS no_npwp_pasangan,
                e.`limit_call` AS jml_verif_npwp_pasangan, 
                g.`nama` AS verif_npwp_pasangan,
                e.`updated_at` AS update_verif_npwp_pasangan
            FROM trans_so AS a 
            LEFT JOIN pasangan_calon_debitur AS c ON a.`id_pasangan` = c.`id`
            LEFT JOIN verif_pasangan AS d ON a.`id` = d.`id_trans_so`
            LEFT JOIN verif_npwp AS e ON c.`id` = e.`id_pasangan`
            LEFT JOIN dpm_online.user AS f ON d.`user_id` = f.`user_id`
            LEFT JOIN dpm_online.user AS g ON e.`user_id` = g.`user_id`
            WHERE MONTH(d.`updated_at`) = $bulan
                AND YEAR(d.`updated_at`) = $tahun
            ORDER BY d.`updated_at`";

            $query_penjamin = "SELECT 
                    a.`id` AS id_trans_so,
                    c. `no_ktp` AS no_ktp_penjamin,	
                    c.`nama_ktp` AS nama_penjamin,
                    c.`tempat_lahir` AS tempat_lahir_penjamin,
                    c.`tgl_lahir` AS tgl_lahir_penjamin,
                    c.`alamat_ktp` AS alamat_penjamin,
                    d.`limit_call` AS jml_verif_penjamin,
                    f.`nama` AS verif_penjamin,
                    d.`updated_at` AS update_verif_penjamin,
                    c.`no_npwp` AS no_npwp_penjamin,
                    e.`limit_call` AS jml_verif_npwp_penjamin, 
                    g.`nama` AS verif_npwp_penjamin,
                    e.`updated_at` AS update_verif_npwp_penjamin
                FROM trans_so AS a 
                LEFT JOIN penjamin_calon_debitur AS c ON a.`id` = c.`id_trans_so`
                LEFT JOIN verif_penjamin AS d ON c.`id` = d.`id_penjamin`
                LEFT JOIN verif_npwp AS e ON c.`id` = e.`id_penjamin`
                LEFT JOIN dpm_online.user AS f ON d.`user_id` = f.`user_id`
                LEFT JOIN dpm_online.user AS g ON e.`user_id` = g.`user_id`
                WHERE MONTH(d.`updated_at`) = $bulan
                    AND YEAR(d.`updated_at`) = $tahun
                ORDER BY d.`updated_at`";

        
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['result_debitur'] = $this->db->query($query_debitur)->result();
        $data['result_pasangan'] = $this->db->query($query_pasangan)->result();
        $data['result_penjamin'] = $this->db->query($query_penjamin)->result();
        
        $this->load->view('master/verifikasi/export', $data);
    }


}

