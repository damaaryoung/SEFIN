<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_tracking_order extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();       
    }

    function get_data_tracking_order()
    {
        $bulan = $this->input->post("bulan");
        $tahun = $this->input->post("tahun");
        $pilih_ca = $this->input->post("pilih_ca");
        $kode_cabang = $this->input->post("kode_cabang");

        if ($pilih_ca == "*") {
            $sudah_pengajuan_ca = "SELECT COUNT(b.id_trans_so) as total_sudah_pengajuan_ca FROM trans_ca as a LEFT JOIN trans_caa as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_ao as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so AS d ON a.id_trans_so = d.id WHERE d.flg_cancel_debitur != 2 AND b.id_trans_so IS NOT NULL AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun";
            $data['sudah_pengajuan_ca'] = $this->db->query($sudah_pengajuan_ca)->row()->total_sudah_pengajuan_ca;

            $not_recommend_ca = "SELECT COUNT(a.id_trans_so) as total_not_recommend_ca FROM trans_ca AS a LEFT JOIN recom_ca AS b ON a.id_recom_ca = b.id LEFT JOIN trans_ao AS c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so as d ON a.id_trans_so = d.id WHERE b.plafon_kredit = 0 AND d.flg_cancel_debitur != 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun";
            $data['not_recommend_ca'] = $this->db->query($not_recommend_ca)->row()->total_not_recommend_ca;

            $cancel_ca = "SELECT COUNT(a.id_trans_so) as cancel_ca FROM trans_ao as a LEFT JOIN trans_so as b ON a.id_trans_so = b.id LEFT JOIN trans_ca as c ON a.id_trans_so = c.id_trans_so WHERE b.flg_cancel_debitur = 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun";
            $data['cancel_ca'] = $this->db->query($cancel_ca)->row()->cancel_ca;

            $memorandum_ca = "SELECT COUNT(a.id_trans_so) as memorandum_ca FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_so as c ON a.id_trans_so = c.id WHERE c.flg_cancel_debitur != 2 AND a.status_return IS NULL AND a.tgl_pending IS NULL AND b.id_trans_so IS NULL AND a.assign_to IS NOT NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun";
            $data['memorandum_ca'] = $this->db->query($memorandum_ca)->row()->memorandum_ca;

            $verifikasi_ca = "SELECT COUNT(a.id_trans_so) AS verifikasi_ca FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN trans_so as e ON a.id_trans_so = e.id WHERE b.id_trans_so IS NULL AND a.id_trans_so IS NOT NULL AND e.flg_cancel_debitur != 2 AND c.id_trans_so IS NULL AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun";
            $data['verifikasi_ca'] = $this->db->query($verifikasi_ca)->row()->verifikasi_ca;

            $pengajuan_ca = "SELECT COUNT(a.id_trans_so) as pengajuan_ca FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN recom_ca as e ON a.id_recom_ca = e.id WHERE b.id_trans_so IS NOT NULL AND c.id_trans_so IS NULL AND e.plafon_kredit != 0 AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun";
            $data['pengajuan_ca'] = $this->db->query($pengajuan_ca)->row()->pengajuan_ca;

            $pending_ca = "SELECT COUNT(a.id_trans_so) as pending_ca FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.tgl_pending IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun";
            $data['pending_ca'] = $this->db->query($pending_ca)->row()->pending_ca;
            
            $return_ca = "SELECT COUNT(a.id_trans_so) as return_ca FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.status_return IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun";
            $data['return_ca'] = $this->db->query($return_ca)->row()->return_ca;

            $data['jumlah_ca'] = ($data['sudah_pengajuan_ca'] - $data['not_recommend_ca']) + $data['not_recommend_ca'] + $data['cancel_ca'] + $data['memorandum_ca'] + $data['verifikasi_ca'] + $data['pengajuan_ca'] + $data['pending_ca'] +  $data['return_ca'];

            $data['persen_sudah_pengajuan_ca'] = number_format($data['sudah_pengajuan_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_not_recommend_ca'] = number_format($data['not_recommend_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_cancel_ca'] = number_format($data['cancel_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_memorandum_ca'] = number_format($data['memorandum_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_verifikasi_ca'] = number_format($data['verifikasi_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_pengajuan_ca'] = number_format($data['pengajuan_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_pending_ca'] = number_format($data['pending_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_return_ca'] = number_format($data['return_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
        } else {
            $sudah_pengajuan_ca = "SELECT COUNT(b.id_trans_so) as total_sudah_pengajuan_ca FROM trans_ca as a LEFT JOIN trans_caa as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_ao as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so AS d ON a.id_trans_so = d.id WHERE d.flg_cancel_debitur != 2 AND b.id_trans_so IS NOT NULL AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun AND a.user_id = $pilih_ca";
            $data['sudah_pengajuan_ca'] = $this->db->query($sudah_pengajuan_ca)->row()->total_sudah_pengajuan_ca;

            $not_recommend_ca = "SELECT COUNT(a.id_trans_so) as total_not_recommend_ca FROM trans_ca AS a LEFT JOIN recom_ca AS b ON a.id_recom_ca = b.id LEFT JOIN trans_ao AS c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so as d ON a.id_trans_so = d.id WHERE b.plafon_kredit = 0 AND d.flg_cancel_debitur != 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun AND a.user_id = $pilih_ca";
            $data['not_recommend_ca'] = $this->db->query($not_recommend_ca)->row()->total_not_recommend_ca;

            $cancel_ca = "SELECT COUNT(a.id_trans_so) as cancel_ca FROM trans_ao as a LEFT JOIN trans_so as b ON a.id_trans_so = b.id LEFT JOIN trans_ca as c ON a.id_trans_so = c.id_trans_so WHERE b.flg_cancel_debitur = 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun AND a.assign_to = $pilih_ca";
            $data['cancel_ca'] = $this->db->query($cancel_ca)->row()->cancel_ca;

            $memorandum_ca = "SELECT COUNT(a.id_trans_so) as memorandum_ca FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_so as c ON a.id_trans_so = c.id WHERE c.flg_cancel_debitur != 2 AND a.status_return IS NULL AND a.tgl_pending IS NULL AND b.id_trans_so IS NULL AND a.assign_to IS NOT NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun AND (b.user_id = $pilih_ca OR a.assign_to = $pilih_ca) ";
            $data['memorandum_ca'] = $this->db->query($memorandum_ca)->row()->memorandum_ca;

            $verifikasi_ca = "SELECT COUNT(a.id_trans_so) AS verifikasi_ca FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN trans_so as e ON a.id_trans_so = e.id WHERE b.id_trans_so IS NULL AND a.id_trans_so IS NOT NULL AND e.flg_cancel_debitur != 2 AND c.id_trans_so IS NULL AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun AND a.user_id = $pilih_ca";
            $data['verifikasi_ca'] = $this->db->query($verifikasi_ca)->row()->verifikasi_ca;

            $pengajuan_ca = "SELECT COUNT(a.id_trans_so) as pengajuan_ca FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN recom_ca as e ON a.id_recom_ca = e.id WHERE b.id_trans_so IS NOT NULL AND c.id_trans_so IS NULL AND e.plafon_kredit != 0 AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun AND a.user_id = $pilih_ca";
            $data['pengajuan_ca'] = $this->db->query($pengajuan_ca)->row()->pengajuan_ca;

            $pending_ca = "SELECT COUNT(a.id_trans_so) as pending_ca FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.tgl_pending IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun AND (a.assign_to = $pilih_ca OR b.user_id = $pilih_ca)";
            $data['pending_ca'] = $this->db->query($pending_ca)->row()->pending_ca;
            
            $return_ca = "SELECT COUNT(a.id_trans_so) as return_ca FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.status_return IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun AND (a.assign_to = $pilih_ca OR b.user_id = $pilih_ca)";
            $data['return_ca'] = $this->db->query($return_ca)->row()->return_ca;

            $data['jumlah_ca'] = ($data['sudah_pengajuan_ca'] - $data['not_recommend_ca']) + $data['not_recommend_ca'] + $data['cancel_ca'] + $data['memorandum_ca'] + $data['verifikasi_ca'] + $data['pengajuan_ca'] + $data['pending_ca'] +  $data['return_ca'];

            $data['persen_sudah_pengajuan_ca'] = number_format($data['sudah_pengajuan_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_not_recommend_ca'] = number_format($data['not_recommend_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_cancel_ca'] = number_format($data['cancel_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_memorandum_ca'] = number_format($data['memorandum_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_verifikasi_ca'] = number_format($data['verifikasi_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_pengajuan_ca'] = number_format($data['pengajuan_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_pending_ca'] = number_format($data['pending_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
            $data['persen_return_ca'] = number_format($data['return_ca'] / $data['jumlah_ca'] * 100, 2, '.', '');
        }

        if ($kode_cabang == "*") {
            $sudah_pengajuan_cabang = "SELECT COUNT(b.id_trans_so) as total_sudah_pengajuan_cabang FROM trans_ca as a LEFT JOIN trans_caa as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_ao as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so AS d ON a.id_trans_so = d.id WHERE d.flg_cancel_debitur != 2 AND b.id_trans_so IS NOT NULL AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun";
            $data['sudah_pengajuan_cabang'] = $this->db->query($sudah_pengajuan_cabang)->row()->total_sudah_pengajuan_cabang;

            $not_recommend_cabang = "SELECT COUNT(a.id_trans_so) as total_not_recommend_cabang FROM trans_ca AS a LEFT JOIN recom_ca AS b ON a.id_recom_ca = b.id LEFT JOIN trans_ao AS c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so as d ON a.id_trans_so = d.id WHERE b.plafon_kredit = 0 AND d.flg_cancel_debitur != 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun";
            $data['not_recommend_cabang'] = $this->db->query($not_recommend_cabang)->row()->total_not_recommend_cabang;

            $cancel_cabang = "SELECT COUNT(a.id_trans_so) as cancel_cabang FROM trans_ao as a LEFT JOIN trans_so as b ON a.id_trans_so = b.id LEFT JOIN trans_ca as c ON a.id_trans_so = c.id_trans_so WHERE b.flg_cancel_debitur = 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun";
            $data['cancel_cabang'] = $this->db->query($cancel_cabang)->row()->cancel_cabang;

            $memorandum_cabang = "SELECT COUNT(a.id_trans_so) as memorandum_cabang FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_so as c ON a.id_trans_so = c.id WHERE c.flg_cancel_debitur != 2 AND a.status_return IS NULL AND a.tgl_pending IS NULL AND b.id_trans_so IS NULL AND a.assign_to IS NOT NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun";
            $data['memorandum_cabang'] = $this->db->query($memorandum_cabang)->row()->memorandum_cabang;

            $verifikasi_cabang = "SELECT COUNT(a.id_trans_so) AS verifikasi_cabang FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN trans_so as e ON a.id_trans_so = e.id WHERE b.id_trans_so IS NULL AND a.id_trans_so IS NOT NULL AND e.flg_cancel_debitur != 2 AND c.id_trans_so IS NULL AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun";
            $data['verifikasi_cabang'] = $this->db->query($verifikasi_cabang)->row()->verifikasi_cabang;

            $pengajuan_cabang = "SELECT COUNT(a.id_trans_so) as pengajuan_cabang FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN recom_ca as e ON a.id_recom_ca = e.id WHERE b.id_trans_so IS NOT NULL AND c.id_trans_so IS NULL AND e.plafon_kredit != 0 AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun";
            $data['pengajuan_cabang'] = $this->db->query($pengajuan_cabang)->row()->pengajuan_cabang;

            $pending_cabang = "SELECT COUNT(a.id_trans_so) as pending_cabang FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.tgl_pending IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun";
            $data['pending_cabang'] = $this->db->query($pending_cabang)->row()->pending_cabang;
            
            $return_cabang = "SELECT COUNT(a.id_trans_so) as return_cabang FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.status_return IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun";
            $data['return_cabang'] = $this->db->query($return_cabang)->row()->return_cabang;

            $data['jumlah_cabang'] = ($data['sudah_pengajuan_cabang'] - $data['not_recommend_cabang']) + $data['not_recommend_cabang'] + $data['cancel_cabang'] + $data['memorandum_cabang'] + $data['verifikasi_cabang'] + $data['pengajuan_cabang'] + $data['pending_cabang'] +  $data['return_cabang'];

            $data['persen_sudah_pengajuan_cabang'] = number_format($data['sudah_pengajuan_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_not_recommend_cabang'] = number_format($data['not_recommend_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_cancel_cabang'] = number_format($data['cancel_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_memorandum_cabang'] = number_format($data['memorandum_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_verifikasi_cabang'] = number_format($data['verifikasi_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_pengajuan_cabang'] = number_format($data['pengajuan_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_pending_cabang'] = number_format($data['pending_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_return_cabang'] = number_format($data['return_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
        } else {
            $sudah_pengajuan_cabang = "SELECT COUNT(b.id_trans_so) as total_sudah_pengajuan_cabang FROM trans_ca as a LEFT JOIN trans_caa as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_ao as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so AS d ON a.id_trans_so = d.id WHERE d.flg_cancel_debitur != 2 AND b.id_trans_so IS NOT NULL AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun AND a.id_cabang = $kode_cabang";
            $data['sudah_pengajuan_cabang'] = $this->db->query($sudah_pengajuan_cabang)->row()->total_sudah_pengajuan_cabang;

            $not_recommend_cabang = "SELECT COUNT(a.id_trans_so) as total_not_recommend_cabang FROM trans_ca AS a LEFT JOIN recom_ca AS b ON a.id_recom_ca = b.id LEFT JOIN trans_ao AS c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_so as d ON a.id_trans_so = d.id WHERE b.plafon_kredit = 0 AND d.flg_cancel_debitur != 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun AND a.id_cabang = $kode_cabang";
            $data['not_recommend_cabang'] = $this->db->query($not_recommend_cabang)->row()->total_not_recommend_cabang;

            $cancel_cabang = "SELECT COUNT(a.id_trans_so) as cancel_cabang FROM trans_ao as a LEFT JOIN trans_so as b ON a.id_trans_so = b.id LEFT JOIN trans_ca as c ON a.id_trans_so = c.id_trans_so WHERE b.flg_cancel_debitur = 2 AND MONTH(c.created_at) = $bulan AND YEAR(c.created_at) = $tahun AND c.id_cabang = $kode_cabang";
            $data['cancel_cabang'] = $this->db->query($cancel_cabang)->row()->cancel_cabang;

            $memorandum_cabang = "SELECT COUNT(a.id_trans_so) as memorandum_cabang FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_so as c ON a.id_trans_so = c.id WHERE c.flg_cancel_debitur != 2 AND a.status_return IS NULL AND a.tgl_pending IS NULL AND b.id_trans_so IS NULL AND a.assign_to IS NOT NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun AND b.id_cabang = $kode_cabang";
            $data['memorandum_cabang'] = $this->db->query($memorandum_cabang)->row()->memorandum_cabang;

            $verifikasi_cabang = "SELECT COUNT(a.id_trans_so) AS verifikasi_cabang FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN trans_so as e ON a.id_trans_so = e.id WHERE b.id_trans_so IS NULL AND a.id_trans_so IS NOT NULL AND e.flg_cancel_debitur != 2 AND c.id_trans_so IS NULL AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun AND a.id_cabang = $kode_cabang";
            $data['verifikasi_cabang'] = $this->db->query($verifikasi_cabang)->row()->verifikasi_cabang;

            $pengajuan_cabang = "SELECT COUNT(a.id_trans_so) as pengajuan_cabang FROM trans_ca AS a LEFT JOIN verif_cadebt AS b ON a.id_trans_so = b.id_trans_so LEFT JOIN trans_caa as c ON a.id_trans_so = c.id_trans_so LEFT JOIN trans_ao as d ON a.id_trans_so = d.id_trans_so LEFT JOIN recom_ca as e ON a.id_recom_ca = e.id WHERE b.id_trans_so IS NOT NULL AND c.id_trans_so IS NULL AND e.plafon_kredit != 0 AND MONTH(d.created_at) = $bulan AND YEAR(d.created_at) = $tahun AND a.id_cabang = $kode_cabang";
            $data['pengajuan_cabang'] = $this->db->query($pengajuan_cabang)->row()->pengajuan_cabang;

            $pending_cabang = "SELECT COUNT(a.id_trans_so) as pending_cabang FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.tgl_pending IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun AND b.id_trans_so = $kode_cabang";
            $data['pending_cabang'] = $this->db->query($pending_cabang)->row()->pending_cabang;
            
            $return_cabang = "SELECT COUNT(a.id_trans_so) as return_cabang FROM trans_ao as a LEFT JOIN trans_ca as b ON a.id_trans_so = b.id_trans_so WHERE a.status_return IS NOT NULL AND b.id_trans_so IS NULL AND MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun AND b.id_cabang = $kode_cabang";
            $data['return_cabang'] = $this->db->query($return_cabang)->row()->return_cabang;

            $data['jumlah_cabang'] = ($data['sudah_pengajuan_cabang'] - $data['not_recommend_cabang']) + $data['not_recommend_cabang'] + $data['cancel_cabang'] + $data['memorandum_cabang'] + $data['verifikasi_cabang'] + $data['pengajuan_cabang'] + $data['pending_cabang'] +  $data['return_cabang'];

            $data['persen_sudah_pengajuan_cabang'] = number_format($data['sudah_pengajuan_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_not_recommend_cabang'] = number_format($data['not_recommend_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_cancel_cabang'] = number_format($data['cancel_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_memorandum_cabang'] = number_format($data['memorandum_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_verifikasi_cabang'] = number_format($data['verifikasi_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_pengajuan_cabang'] = number_format($data['pengajuan_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_pending_cabang'] = number_format($data['pending_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
            $data['persen_return_cabang'] = number_format($data['return_cabang'] / $data['jumlah_cabang'] * 100, 2, '.', '');
        }
        
        echo json_encode($data);
    }

    function export_to_excel($bulan='', $tahun='', $kode_area='', $kode_cabang='')
    {   
        if ($kode_area == "KONSOLIDASI" && $kode_cabang == "kosong") {
            $filter = "";
        } else if ($kode_area != "KONSOLIDASI" && $kode_cabang == "kosong") {
            $filter = "AND a.`id_area` = $kode_area";
        } else if ($kode_area == "kosong" && $kode_cabang == "Konsolidasi") {
            $filter = "";
        } else if ($kode_area == "kosong" && $kode_cabang != "Konsolidasi") {
            $filter = "AND a.`id_cabang` = $kode_cabang";
        }
        
        $data_tracking_order = "SELECT b.`id_trans_so` AS id_trans_so,
                f.`nomor_so` AS nomor_so,
                DATE_FORMAT(f.`created_at`, '%d/%m/%Y %H:%i:%s') AS tgl_transaksi,
                g.`nama` AS nama_so,
                k.`nama_lengkap` AS nama_debitur,
                j.`nama` AS nama_cabang,
                c.`plafon_kredit` AS plafon_kredit,
                a.`tgl_pending` AS tgl_pending,
                a.`status_return` AS status_return,
                d.`id` AS id_caa,
                e.`id_trans_so` AS id_verif,
                f.`flg_cancel_debitur` AS cancel_debitur,
                h.`nama` AS nama_assign,
                i.`nama` AS nama_ca
            FROM trans_ao AS a
            LEFT JOIN trans_ca AS b ON a.`id_trans_so` = b.`id_trans_so`
            LEFT JOIN recom_ca AS c ON b.`id_recom_ca` = c.`id`
            LEFT JOIN trans_caa AS d ON a.`id_trans_so` = d.`id_trans_so`
            LEFT JOIN verif_cadebt AS e ON a.`id_trans_so` = e.`id_trans_so`
            LEFT JOIN trans_so AS f ON a.`id_trans_so` = f.`id`
            LEFT JOIN dpm_online.user AS g ON f.`user_id` = g.`user_id`
            LEFT JOIN dpm_online.user AS h ON a.`assign_to` = h.`user_id`
            LEFT JOIN dpm_online.user AS i ON b.`user_id` = i.`user_id`
            LEFT JOIN mk_cabang AS j ON a.`id_cabang` = j.`id`
            LEFT JOIN calon_debitur AS k ON f.`id_calon_debitur` = k.`id`
            WHERE a.assign_to IS NOT NULL AND MONTH(a.`created_at`) = $bulan AND YEAR(a.`created_at`) = $tahun $filter
            ORDER BY a.id_trans_so ASC";
            $data['data_tracking_order'] = $this->db->query($data_tracking_order)->result();

        $this->load->view('master/tracking_order/export_to_excel', $data);

    }

}