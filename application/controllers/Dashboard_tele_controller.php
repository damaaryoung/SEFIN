<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_tele_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dashboard_tele');        
    }

    function get_data_tele()
    {
        $kode_area = $this->input->post("kode_area");
        $kode_kantor = $this->input->post("kode_kantor");
        $bulan = $this->input->post("bulan");
        $tahun = $this->input->post("tahun");

        if (!empty($kode_area)) {
			if ($kode_area == '*') {
                $title = "KONSOLIDASI";
                $data['title'] = $title;
			} if ($kode_area == 'PUSAT') {
                $title = "PUSAT";
                $data['title'] = $title;
            } else {
                $all_cabang_by_area = $this->db->where('kode_area', $kode_area)->get('view_kode_kantor')->result();
                $data['all_cabang_by_area'] = $all_cabang_by_area;
			}
        } else {
			if ($kode_kantor == '*') {
				$title = "Konsolidasi";
			} else {
				$title = $this->db->where('kode_kantor', $kode_kantor)->get('view_kode_kantor')->row()->nama_kantor;
            }
            $data['title'] = $title;
        }        

        $Q = "SELECT * FROM activity_tele WHERE MONTH(`tanggal_telpon`) >= $bulan AND YEAR(`tanggal_telpon`) >= $tahun";
        $data['teleDataColl'] = $this->db->query($Q)->result();
        
        $Q = "SELECT * FROM activity_telesales WHERE MONTH(`tgl_telp`) >= $bulan AND YEAR(`tgl_telp`) >= $tahun";
        $data['teleDataSales'] = $this->db->query($Q)->result();
        
        echo json_encode($data);
    }

    function get_data_single_tele() {

        $kode_kantor = $this->input->post("kode_kantor");
        $bulan = $this->input->post("bulan");
        $tahun = $this->input->post("tahun");

        $title = $this->db->where('kode_kantor', $kode_kantor)->get('view_kode_kantor')->row()->nama_kantor;
        $Q = "SELECT * FROM activity_tele WHERE kode_kantor=$kode_kantor AND MONTH(`tanggal_telpon`) >= $bulan AND YEAR(`tanggal_telpon`) >= $tahun";
        $data['tele_coll_data_kantor'] = $this->db->query($Q)->result();

        $Q = "SELECT * FROM activity_telesales WHERE kode_kantor=$kode_kantor AND MONTH(`tgl_telp`) >= $bulan AND YEAR(`tgl_telp`) >= $tahun";
        $data['tele_sales_data_kantor'] = $this->db->query($Q)->result();

        $data['title_kantor'] = $title;

        echo json_encode($data);
    }
}