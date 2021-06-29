<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_memo_ca extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();       
    }

    function get_data_memo_ca()
    {
        $bulan = $this->input->post("bulan");
        $tahun = $this->input->post("tahun");

        $date_now = "$tahun-$bulan-01";
    
        $hari_pertama = $this->db->query("SELECT dpm_online.get_som('$date_now') as som")->row();
        $hari_terakhir = $this->db->query("SELECT dpm_online.get_eom('$date_now') as eom")->row();
        
        $total_kerja = $this->db->query("SELECT dpm_online.get_jumlah_kerja ('$hari_pertama->som','$hari_terakhir->eom') as total")->row()->total;

        $list_user_id_ca = $this->db->query("SELECT user_id as id FROM pic_ca WHERE flg_aktif = 1 AND jenis_pic = 'CREDIT ANALYST' ")->result();

        foreach ($list_user_id_ca as $user) {
            $total_memo = $this->db->query("SELECT COUNT(id_trans_so) as total FROM trans_ca WHERE MONTH(created_at) = $bulan AND YEAR(created_at) = $tahun AND user_id = $user->id")->row()->total;
            
            $user->total_memo = $total_memo; 

            $list_hk = $this->looping_get_hk(1, $total_kerja, $date_now);

            $memo = array();
            foreach ($list_hk as $hari_kerja) {
                $day = substr($hari_kerja['tanggal'], -2);
                $hk = $hari_kerja['hk'];
                $memo_ca = $this->db->query("SELECT COUNT(id_trans_so) as total_memo FROM trans_ca WHERE user_id = $user->id AND YEAR(created_at) = $tahun AND MONTH(created_at) = $bulan AND DAY(created_at) = $day")->row()->total_memo;
                $memo["$hk"] = $memo_ca;
            }

            $user->memo_pertanggal = $memo;

        }

        $list_region = $this->db->query("SELECT region as regional FROM pic_ca WHERE region IS NOT NULL GROUP BY region")->result();

        foreach ($list_region as $reg) {

            $total_region = $this->db->query("SELECT COUNT(a.id_trans_so) as total_memo_region FROM trans_ca as a LEFT JOIN pic_ca as b ON a.user_id = b.user_id WHERE MONTH(a.created_at) = $bulan AND YEAR(a.created_at) = $tahun AND b.region = $reg->regional")->row()->total_memo_region;

            $reg->memo_region = $total_region;

            $list_hk_reg = $this->looping_get_hk(1, $total_kerja, $date_now);

            $memo_reg = array();
            foreach ($list_hk_reg as $hari_kerja_reg) {
                $day = substr($hari_kerja_reg['tanggal'], -2);
                $hk_reg = $hari_kerja_reg['hk'];
                $memo_ca_reg = $this->db->query("SELECT COUNT(a.id_trans_so) as total_memo FROM trans_ca AS a LEFT JOIN pic_ca as b ON a.user_id = b.user_id WHERE YEAR(created_at) = $tahun AND MONTH(created_at) = $bulan AND DAY(created_at) = $day AND b.region = $reg->regional")->row()->total_memo;

                $memo_reg["$hk_reg"] = $memo_ca_reg;
            }

            $reg->memo_pertanggal = $memo_reg;

        }

        $data['region'] = $list_region; 

        $data['hk'] = $this->looping_get_hk(1, $total_kerja, $date_now);
        $data['total_kerja'] = $total_kerja;
        $data['user_id_ca'] = $list_user_id_ca;
        $data['memo'] = $memo;
        
        echo json_encode($data);
    }

    private function looping_get_hk($start, $end, $date_now) {
        $data = array();
        for ($i=$start; $i <= intval($end); $i++) { 
            $detail_hk['hk'] = $i;
            $detail_hk['tanggal'] = $this->db->query("SELECT dpm_online.`get_tgl_hari_kerja_fid`($i, '$date_now') as tanggal")->row()->tanggal;
            $data["$i"] = $detail_hk;
        }
        return $data;
    }

}