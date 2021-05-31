<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo_telepon extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index()
	{  
        $id = $this->input->post('id');
        $query_debitur = "SELECT 
            a.nomor_so AS nomor_so,
            c.nama AS kantor_cabang,
            b.nama_lengkap AS nama_debitur,
            d.plafon AS plafon
                FROM trans_so AS a
                LEFT JOIN calon_debitur AS b ON a.id_calon_debitur = b.`id`
                LEFT JOIN mk_cabang AS c ON a.id_cabang = c.id
                LEFT JOIN fasilitas_pinjaman AS d ON a.id_fasilitas_pinjaman = d.id
                WHERE a.id = $id";

        $result = $this->db->query($query_debitur);

        $x      = $result->row();
        $data['nomor_so'] = $x->nomor_so;
        $data['kantor_cabang'] = $x->kantor_cabang;
        $data['nama_debitur'] = $x->nama_debitur;
        $data['plafon'] = $x->plafon;

        $query_telp = "SELECT 
            a.`id_trans_so`AS id_trans_so,
            c.`nomor_so` AS nomor_so,
            b.`parameter` AS parameter,
            b.`detail` AS detail,
            a.`hasil` AS hasil,
            a.`keterangan` AS keterangan
                FROM verif_telp AS a 
                LEFT JOIN verif_telp_param AS b ON a.`id_param_verif` = b.`id`
                LEFT JOIN trans_so as c on a.`id_trans_so` = c.`id`
                WHERE a.`id_trans_so` = $id";

        $data['result_telp'] = $this->db->query($query_telp)->result();

        $query_params = "SELECT detail FROM verif_telp_param";
        $data['result_params'] = $this->db->query($query_params)->result();
        
        $query_ca = "SELECT DISTINCT
                    b.nama AS nama_ca
                FROM verif_telp AS a 
                LEFT JOIN dpm_online.user AS b ON a.`user_id_ca` = b.user_id
                WHERE a.`id_trans_so` = $id";

        $result_ca = $this->db->query($query_ca);

        $y     = $result_ca->row();
        $data['nama_ca'] = $y->nama_ca;

        $mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('report/memo_telepon', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}