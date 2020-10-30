<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_lending_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dashboard_lending');        
    }

    function get_data_lending_for_chart()
    {
        $kode_area = $this->input->post("kode_area");
        $kode_kantor = $this->input->post("kode_kantor");
        $m = $this->input->post("m");
        $y = $this->input->post("y");

        $secondParameter = $m;
        $thirdParameter = $y;

        if (!empty($kode_area)) {
            $firstParameter = $kode_area;
            
			if ($kode_area == '*') {
                $chart_title = "KONSOLIDASI";
                $data['chart_title'] = $chart_title;
			} else {
                $all_cabang_by_area = $this->db->where('kode_area', $kode_area)->get('view_kode_kantor')->result();
                $data['all_cabang_by_area'] = $all_cabang_by_area;
			}
        } else {
            $firstParameter = $kode_kantor;
			if ($kode_kantor == '*') {
				$chart_title = "Konsolidasi";
			} else {
				$chart_title = $this->db->where('kode_kantor', $kode_kantor)->get('view_kode_kantor')->row()->nama_kantor;
            }
            $data['chart_title'] = $chart_title;
        }        

        $Q = "CALL newwebtool.`sp_dashboard_lending`('$firstParameter', $secondParameter, $thirdParameter)";
        $data['lendingData'] = $this->db->query($Q)->result();
        
        echo json_encode($data);
    }

    function get_data_lending_for_single_chart() {

        $kode_kantor = $this->input->post("kode_kantor");
        $secondParameter = $this->input->post("m");
        $thirdParameter = $this->input->post("y");

        $chart_title = $this->db->where('kode_kantor', $kode_kantor)->get('view_kode_kantor')->row()->nama_kantor;
        $Q = "CALL newwebtool.`sp_dashboard_lending`('$kode_kantor', $secondParameter, $thirdParameter)";
        $data['lending_data_kantor'] = $this->db->query($Q)->row();
        $data['chart_title_kantor'] = $chart_title;

        echo json_encode($data);
    }
    
}