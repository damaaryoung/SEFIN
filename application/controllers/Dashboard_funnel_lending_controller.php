<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_funnel_lending_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_dashboard_funnel_lending');        
    }

    function get_data_lending_for_chart()
    {
        $m = $this->input->post("m");
        $y = $this->input->post("y");
        $kode_area = $this->input->post("kode_area");

        if (!empty($kode_area)) {
            $chart_title = $this->db->where('id', $kode_area)->get('mk_area')->row()->nama;
        } else {
            $chart_title = "KONSOLIDASI";
        }
        $data['chart_title'] = $chart_title;

        $Q = "SELECT COUNT(id) FROM trans_so WHERE MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['leadsData'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['leadsDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['leadsDataCabang'] = [];
        }

        //=============================================================================================================

        $Q = "SELECT COUNT(id) FROM trans_so WHERE status_hm='1' AND MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['prospekApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE trans_so.status_hm='1' AND MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['prospekApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['prospekApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(id) FROM trans_so WHERE status_hm='0' AND MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['prospekWaiting'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE trans_so.status_hm='0' AND MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['prospekWaitingDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['prospekWaitingDataCabang'] = [];
        }

        $Q = "SELECT COUNT(id) FROM trans_so WHERE status_hm='2' AND MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['prospekReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE trans_so.status_hm='2' AND MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['prospekRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['prospekRejectDataCabang'] = [];
        }

        //=============================================================================================================

        $Q = "SELECT COUNT(a.id) FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y";
        $data['aoApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['aoApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['aoApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(a.id) FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit='0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y";
        $data['aoReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['aoRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['aoRejectDataCabang'] = [];
        }

        $prospekApprove = $this->db->query("SELECT COUNT(id) as prospekApprove FROM trans_so WHERE status_hm='1' AND MONTH(created_at) = $m AND YEAR(created_at) = $y")->row();
        $aoApprove = $this->db->query("SELECT COUNT(a.id) as aoApprove FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y")->row();
        $aoReject = $this->db->query("SELECT COUNT(a.id) as aoReject FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y")->row();
        
        $data['status_ao'] = $prospekApprove->prospekApprove - ( $aoApprove->aoApprove + $aoReject->aoReject );

        //=============================================================================================================

        $Q = "SELECT COUNT(a.id_trans_so) FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y";
        $data['caApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(a.id_trans_so) FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y";
        $data['caReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caRejectDataCabang'] = [];
        }

        $aoApprove = $this->db->query("SELECT COUNT(a.id) as aoApprove FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y")->row();
        $caApprove = $this->db->query("SELECT COUNT(a.id_trans_so) as caApprove FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y")->row();
        $caReject = $this->db->query("SELECT COUNT(a.id_trans_so) as caReject FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y")->row();

        $data['verif_ca'] = $aoApprove->aoApprove - ( $caApprove->caApprove + $caReject->caReject );

        //=============================================================================================================

        $Q = "SELECT COUNT(id_trans_so) FROM tb_approval WHERE status = 'accept' AND MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['caaApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM tb_approval AS a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status = 'accept' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caaApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caaApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(id_trans_so) FROM tb_approval WHERE status = 'reject' AND MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['caaReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM tb_approval AS a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status = 'reject' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caaRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caaRejectDataCabang'] = [];
        }

        $caApprove = $this->db->query("SELECT COUNT(a.id_trans_so) as caApprove FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y")->row();
        $caReject = $this->db->query("SELECT COUNT(a.id_trans_so) as caReject FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y")->row();
        $caaApprove = $this->db->query("SELECT COUNT(id_trans_so) as caaApprove FROM tb_approval WHERE status = 'accept' AND MONTH(created_at) = $m AND YEAR(created_at) = $y")->row();
        $caaReject = $this->db->query("SELECT COUNT(id_trans_so) as caaReject FROM tb_approval WHERE status = 'reject' AND MONTH(created_at) = $m AND YEAR(created_at) = $y")->row();

        $data['caaWaiting'] = (($caApprove->caApprove + $caReject->caReject) - ( $caaApprove->caaApprove + $caaReject->caaReject ));

        // =============================================================================================================

        $Q = "SELECT COUNT(a.id) FROM agunan_tanah AS a LEFT JOIN trans_so AS b ON (a.id_trans_so=b.id) WHERE a.STATUS='MASUK' AND MONTH(b.created_at)= $m AND YEAR(b.created_at) = $y";
        $data['ceksertipikatApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id) AS total_per_cabang, c.nama AS nama_cabang FROM agunan_tanah AS a LEFT JOIN trans_so AS b ON (a.id_trans_so=b.id) JOIN mk_cabang AS c ON (b.id_cabang = c.id) WHERE a.STATUS='MASUK' AND MONTH(b.created_at) = $m AND YEAR(b.created_at) = $y AND b.id_area = $kode_area GROUP BY b.id_cabang";

        if (!empty($kode_area)) {
            $data['ceksertipikatApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['ceksertipikatApproveDataCabang'] = [];
        }

        $caaApprove = $this->db->query("SELECT COUNT(id_trans_so) as caaApprove FROM tb_approval WHERE status = 'accept' AND MONTH(created_at) = $m AND YEAR(created_at) = $y")->row();
        $ceksertipikatApprove = $this->db->query("SELECT COUNT(a.id) as ceksertipikatApprove FROM agunan_tanah AS a LEFT JOIN trans_so AS b ON (a.id_trans_so=b.id) WHERE a.STATUS='MASUK' AND MONTH(b.created_at)= $m AND YEAR(b.created_at) = $y")->row();

        $data['ceksertipikatWaiting'] = ($caaApprove->caaApprove - $ceksertipikatApprove->ceksertipikatApprove);

        // =============================================================================================================

        $Q = "SELECT COUNT(trans_so) FROM lpdk WHERE status_kredit='REALISASI' AND MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['lendingApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM lpdk as a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status_kredit='REALISASI' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['lendingApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['lendingApproveDataCabang'] = [];
        }

        // $ceksertipikatApprove = $this->db->query("SELECT COUNT(a.id) as ceksertipikatApprove FROM agunan_tanah AS a LEFT JOIN trans_so AS b ON (a.id_trans_so=b.id) WHERE a.STATUS='MASUK' AND MONTH(b.created_at)= $m AND YEAR(b.created_at) = $y")->row();
        // $lendingApprove = $this->db->query("SELECT COUNT(trans_so) as lendingApprove FROM lpdk WHERE status_kredit='REALISASI' AND MONTH(created_at) = $m AND YEAR(created_at) = $y")->row();
        // $data['lendingWaiting'] = $ceksertipikatApprove->ceksertipikatApprove - $lendingApprove->lendingApprove;

        $Q = "SELECT COUNT(trans_so) FROM lpdk WHERE status_kredit='ON-PROGRESS' AND MONTH(created_at) = $m AND YEAR(created_at) = $y";
        $data['lendingWaiting'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM lpdk as a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status_kredit='WAITING' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['lendingWaitingDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['lendingWaitingDataCabang'] = [];
        }

        echo json_encode($data);
    }

    function export_to_excel($m='', $y='', $kode_area='')
    {
        
        if (!empty($kode_area)) {
            $kondisi_kode_area = "AND id_area = $kode_area";
            $isKonsolidasi = false;
        } else {
            $kondisi_kode_area = "";
            $isKonsolidasi = true;
        }

        $Q = "SELECT COUNT(id) as `id` FROM trans_so WHERE MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['leadsData'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['leadsDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['leadsDataCabang'] = [];
        }

        //=============================================================================================================

        $Q = "SELECT COUNT(id) as `id` FROM trans_so WHERE status_hm='1' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['prospekApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE trans_so.status_hm='1' AND MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['prospekApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['prospekApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(id) as `id` FROM trans_so WHERE status_hm='0' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['prospekWaiting'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE trans_so.status_hm='0' AND MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['prospekWaitingDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['prospekWaitingDataCabang'] = [];
        }

        $Q = "SELECT COUNT(id) as `id` FROM trans_so WHERE status_hm='2' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['prospekReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(trans_so.id) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM trans_so JOIN mk_cabang ON (mk_cabang.id = trans_so.id_cabang) WHERE trans_so.status_hm='2' AND MONTH(trans_so.created_at) = $m AND YEAR(trans_so.created_at) = $y AND trans_so.id_area = $kode_area GROUP BY trans_so.id_cabang";

        if (!empty($kode_area)) {
            $data['prospekRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['prospekRejectDataCabang'] = [];
        }

        //=============================================================================================================

        $Q = "SELECT COUNT(a.id) as `id` FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area";
        $data['aoApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['aoApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['aoApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(a.id) as `id` FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit='0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area";
        $data['aoReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['aoRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['aoRejectDataCabang'] = [];
        }

        $prospekApprove = $this->db->query("SELECT COUNT(id) as prospekApprove FROM trans_so WHERE status_hm='1' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area")->row();
        $aoApprove = $this->db->query("SELECT COUNT(a.id) as aoApprove FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area")->row();
        $aoReject = $this->db->query("SELECT COUNT(a.id) as aoReject FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area")->row();
        
        $data['status_ao'] = $prospekApprove->prospekApprove - ( $aoApprove->aoApprove + $aoReject->aoReject );

        //=============================================================================================================

        $Q = "SELECT COUNT(a.id_trans_so) as `id` FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area";
        $data['caApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(a.id_trans_so) as `id` FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area";
        $data['caReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, c.nama AS nama_cabang FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) JOIN mk_cabang AS c ON (a.id_cabang=c.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caRejectDataCabang'] = [];
        }

        $aoApprove = $this->db->query("SELECT COUNT(a.id) as aoApprove FROM trans_ao AS a LEFT JOIN recom_ao AS b ON (a.id_recom_ao=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area")->row();
        $caApprove = $this->db->query("SELECT COUNT(a.id_trans_so) as caApprove FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area")->row();
        $caReject = $this->db->query("SELECT COUNT(a.id_trans_so) as caReject FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area")->row();

        $data['verif_ca'] = $aoApprove->aoApprove - ( $caApprove->caApprove + $caReject->caReject );

        //=============================================================================================================

        $Q = "SELECT COUNT(id_trans_so) as `id` FROM tb_approval WHERE status = 'accept' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['caaApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM tb_approval AS a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status = 'accept' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caaApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caaApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(id_trans_so) as `id` FROM tb_approval WHERE status = 'reject' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['caaReject'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id_trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM tb_approval AS a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status = 'reject' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['caaRejectDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['caaRejectDataCabang'] = [];
        }

        $caApprove = $this->db->query("SELECT COUNT(a.id_trans_so) as caApprove FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit > '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area")->row();
        $caReject = $this->db->query("SELECT COUNT(a.id_trans_so) as caReject FROM trans_ca AS a LEFT JOIN recom_ca AS b ON (a.id_recom_ca=b.id) WHERE b.plafon_kredit = '0' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y $kondisi_kode_area")->row();
        $caaApprove = $this->db->query("SELECT COUNT(id_trans_so) as caaApprove FROM tb_approval WHERE status = 'accept' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area")->row();
        $caaReject = $this->db->query("SELECT COUNT(id_trans_so) as caaReject FROM tb_approval WHERE status = 'reject' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area")->row();

        $data['caaWaiting'] = (($caApprove->caApprove + $caReject->caReject) - ( $caaApprove->caaApprove + $caaReject->caaReject ));

        // =============================================================================================================

        $Q = "SELECT COUNT(a.id) as `id` FROM agunan_tanah AS a LEFT JOIN trans_so AS b ON (a.id_trans_so=b.id) WHERE a.STATUS='MASUK' AND MONTH(b.created_at)= $m AND YEAR(b.created_at) = $y $kondisi_kode_area";
        $data['ceksertipikatApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.id) AS total_per_cabang, c.nama AS nama_cabang FROM agunan_tanah AS a LEFT JOIN trans_so AS b ON (a.id_trans_so=b.id) JOIN mk_cabang AS c ON (b.id_cabang = c.id) WHERE a.STATUS='MASUK' AND MONTH(b.created_at) = $m AND YEAR(b.created_at) = $y AND b.id_area = $kode_area GROUP BY b.id_cabang";

        if (!empty($kode_area)) {
            $data['ceksertipikatApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['ceksertipikatApproveDataCabang'] = [];
        }

        $caaApprove = $this->db->query("SELECT COUNT(id_trans_so) as caaApprove FROM tb_approval WHERE status = 'accept' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area")->row();
        $ceksertipikatApprove = $this->db->query("SELECT COUNT(a.id) as ceksertipikatApprove FROM agunan_tanah AS a LEFT JOIN trans_so AS b ON (a.id_trans_so=b.id) WHERE a.STATUS='MASUK' AND MONTH(b.created_at)= $m AND YEAR(b.created_at) = $y $kondisi_kode_area")->row();

        $data['ceksertipikatWaiting'] = ($caaApprove->caaApprove - $ceksertipikatApprove->ceksertipikatApprove);

        // =============================================================================================================

        $Q = "SELECT COUNT(trans_so) as `id` FROM lpdk WHERE status_kredit='REALISASI' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['lendingApprove'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM lpdk as a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status_kredit='REALISASI' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['lendingApproveDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['lendingApproveDataCabang'] = [];
        }

        $Q = "SELECT COUNT(trans_so) as `id` FROM lpdk WHERE status_kredit='ON-PROGRESS' AND MONTH(created_at) = $m AND YEAR(created_at) = $y $kondisi_kode_area";
        $data['lendingWaiting'] = $this->db->query($Q)->row();

        $Q = "SELECT COUNT(a.trans_so) AS total_per_cabang, mk_cabang.nama AS nama_cabang FROM lpdk as a JOIN mk_cabang ON (mk_cabang.id = a.id_cabang) WHERE a.status_kredit='WAITING' AND MONTH(a.created_at) = $m AND YEAR(a.created_at) = $y AND a.id_area = $kode_area GROUP BY a.id_cabang";

        if (!empty($kode_area)) {
            $data['lendingWaitingDataCabang'] = $this->db->query($Q)->result();
        } else {
            $data['lendingWaitingDataCabang'] = [];
        }
                
        $data['kode_area'] = $this->db->where('id', $kode_area)->get('mk_area')->row()->nama;
        $data['isKonsolidasi'] = $isKonsolidasi;

        $this->load->view('master/funnel_lending/export_to_excel', $data);
    }
    
}