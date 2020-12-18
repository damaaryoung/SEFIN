<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_lending_periodik_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_target_lending_periodik');        
    }

    public function submit() {
        $periode = $this->input->post('periode');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $date_now = "$tahun-$bulan-01";
        $target_persen = $this->input->post('target_persen');
    
        $hari_pertama = $this->db->query("SELECT dpm_online.get_som('$date_now') as som")->row();
        $hari_terakhir = $this->db->query("SELECT dpm_online.get_eom('$date_now') as eom")->row();
        
        // Ini isinya angka jumlah total hari kerja dalam satu bulan
        $total_kerja = $this->db->query("SELECT dpm_online.get_jumlah_kerja ('$hari_pertama->som','$hari_terakhir->eom') as total")->row()->total;
        
        $hk_tanggal = array();
        // Looping total_kerja
        if ($periode == 1) {
            $data['detail_hk'] = $this->looping_get_tanggal(1, 5, $date_now);
        } else if ($periode == 2) {
            $start = 6;
            $end = 10;
            $data['detail_hk'] = $this->looping_get_tanggal(6, 10, $date_now);
        } else if ($periode == 3) {
            $start = 11;
            $end = 15;
            $data['detail_hk'] = $this->looping_get_tanggal(11, 15, $date_now);
        } else if ($periode == 4) {
            $data['detail_hk'] = $this->looping_get_tanggal(15, $total_kerja, $date_now);
        }

        $data['periode'] = $periode;
        $data['bulan'] = $bulan;
        $data['tahun'] = $tahun;
        $data['target_persen'] = $target_persen;

        echo json_encode($data);

    }

    private function looping_get_tanggal($start, $end, $date_now) {
        $data = array();
        for ($i=$start; $i <= intval($end); $i++) { 
            $detail_hk['hk'] = $i;
            $detail_hk['tanggal'] = $this->db->query("SELECT dpm_online.`get_tgl_hari_kerja_fid`($i, '$date_now') as tanggal")->row()->tanggal;
            $data["$i"] = $detail_hk;
        }
        return $data;
    }
}