<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_restruktur_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dashboard_restruktur');
    }

    function get_data_dashboard()
    {
        $data = $this->Model_dashboard_restruktur->get_data();
        echo json_encode($data);
    }

    function get_data_komp_normal_rest()
    {
        $data = $this->Model_dashboard_restruktur->get_data_komposisi_normal_restr();
        echo json_encode($data);
    }

    function get_data_komp_normal_rest_area()
    {
        $data = $this->Model_dashboard_restruktur->get_data_komposisi_normal_restr_area();
        echo json_encode($data);
    }

    function get_data5_cabang_by_amount()
    {
        $data = $this->Model_dashboard_restruktur->get_data5_cabang_by_amount();
        echo json_encode($data);
    }

    function get_data5_cabang_by_noa()
    {
        $data = $this->Model_dashboard_restruktur->get_data5_cabang_by_noa();
        echo json_encode($data);
    }

    function get_data_area_cabang_by_amount()
    {
        $data = $this->Model_dashboard_restruktur->get_data_area_cabang_by_amount();
        echo json_encode($data);
    }
    
    function get_data_area_cabang_by_noa()
    {
        $data = $this->Model_dashboard_restruktur->get_data_area_cabang_by_noa();
        echo json_encode($data);
    }

    function get_noa_restruktur_kredit_by_plafon()
    {
        $data = $this->Model_dashboard_restruktur->get_noa_restruktur_kredit_by_plafon();
        echo json_encode($data);
    }

    function get_model_restruktur_kredit_by_noa()
    {
        $data = $this->Model_dashboard_restruktur->get_model_restruktur_kredit_by_noa();
        echo json_encode($data);
    }

    function get_tujuan_pinjaman_restruktur()
    {
        $data = $this->Model_dashboard_restruktur->get_tujuan_pinjaman_restruktur();
        echo json_encode($data);
    }

    function get_restruktur_segmentasi()
    {
        $data = $this->Model_dashboard_restruktur->get_restruktur_segmentasi();
        echo json_encode($data);
    }

    function get_collection_rasio()
    {
        $data = $this->Model_dashboard_restruktur->get_collection_rasio();
        echo json_encode($data);
    }

    function get_current_rasio()
    {
        $data = $this->Model_dashboard_restruktur->get_current_rasio();
        echo json_encode($data);
    }

    function get_ns_restruktur()
    {
        $data = $this->Model_dashboard_restruktur->get_ns_restruktur();
        echo json_encode($data);
    }

    function master_data_restruktur_lima_cabang_terbesar()
    {
        $q1 = "SELECT kode_kantor,nama_area_kerja,total_os, persen 
				FROM simar.`view_kre_nominatif_restruktur`
				WHERE kode_kantor <> '' ORDER BY persen DESC LIMIT 5   ";
        // print_r($q1);


        $exe = $this->db->query($q1);
        foreach ($exe->result_array() as $a) {
            $nama_area_kerja[] = $a['nama_area_kerja'];
            $total_os[] = $a['total_os'];
            $persen[] = $a['persen'];
            $kantor[] = $a['kode_kantor'];
        }

        $inkantor = '';

        for ($i = 0; $i < count($kantor); $i++) {
            $inkantor .= $kantor[$i] . ",";
        }

        $inkantor = substr($inkantor, 0, strlen($inkantor) - 1);

        $q2 = "SELECT a.kode_kantor,
                        b.`nama_area_kerja`,
                        COUNT(no_rekening) AS jumlah_noa
                    FROM dpm_online.kre_nominatif a LEFT JOIN dpm_online.`app_kode_kantor` b
                    ON a.`kode_kantor` = b.`kode_kantor`
                    WHERE (kode_produk IN ('53','54') OR no_rekening ='01-39-00001-19' )   
                    AND a.kode_kantor IN (09,04,00,11,01) AND tgl_laporan = CURDATE()
                    GROUP BY a.`kode_kantor` ORDER BY jumlah_noa DESC ";

        $exe = $this->db->query($q2);
        foreach ($exe->result_array() as $a) {
            $nama_area_kerja_noa[] = $a['nama_area_kerja'];
            $jumlah_noa[] = $a['jumlah_noa'];
        }

        $json[] = array(
            "nama_area_kerja" => $nama_area_kerja,
            "nama_area_kerja_noa" => $nama_area_kerja_noa,
            "jumlah_noa" => $jumlah_noa,
            "total_os" => $total_os,
            "persen" => $persen,
        );

        print_r($json);
        die;

        echo json_encode($json);
    }
}
