<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo_verifikasi extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$id = $this->input->post('id');
		$query_debitur = "SELECT 
            a.`id` AS id_trans_so,
            a.`nomor_so` AS nomor_so,
            b.`foto_cadeb` AS photo_debitur,
            b.`nama_lengkap` AS nama_debitur,
            b.`no_ktp` AS no_ktp_debitur,
            b.`tempat_lahir` AS tempat_lahir_debitur,
            b.`tgl_lahir` AS tgl_lahir_debitur,
            b.`alamat_ktp` AS alamat_debitur, 
            b.`no_npwp` AS no_npwp_debitur,
            d.`pemasukan_cadebt` AS pemasukan_debitur,
            e.`nama` AS nama_debitur_result,
            e.`tempat_lahir` AS tempat_lahir_debitur_result,
            e.`tgl_lahir` AS tgl_lahir_debitur_result,
            e.`alamat` AS alamat_debitur_result,
            e.`selfie_foto` AS photo_debitur_result,
            f.`income` AS pemasukan_debitur_result
        FROM trans_so AS a 
        LEFT JOIN calon_debitur AS b ON a.`id_calon_debitur` = b.`id`
        LEFT JOIN trans_ao AS c ON a.`id` = c.`id_trans_so`
        LEFT JOIN kapasitas_bulanan AS d ON c.`id_kapasitas_bulanan` = d.`id`
        LEFT JOIN verif_cadebt AS e ON a.`id` = e.`id_trans_so`
        LEFT JOIN verif_npwp AS f ON a.`id` = f.`id_trans_so`
        WHERE a.`id` = $id ";

		$result = $this->db->query($query_debitur);

		$x      = $result->row();
        $data['nomor_so'] = $x->nomor_so;
        $data['photo_debitur'] = $x->photo_debitur;
        $data['nama_debitur'] = $x->nama_debitur;
        $data['no_ktp_debitur'] = $x->no_ktp_debitur;
        $data['tempat_lahir_debitur'] = $x->tempat_lahir_debitur;
        $data['tgl_lahir_debitur'] = date('d-m-Y',strtotime($x->tgl_lahir_debitur));
        $data['alamat_debitur'] = $x->alamat_debitur;
        $data['no_npwp_debitur'] = $x->no_npwp_debitur;
        $data['pemasukan_debitur'] = $x->pemasukan_debitur;
        $data['nama_debitur_result'] = $x->nama_debitur_result;
        $data['tempat_lahir_debitur_result'] = $x->tempat_lahir_debitur_result;
        $data['tgl_lahir_debitur_result'] = $x->tgl_lahir_debitur_result;
        $data['alamat_debitur_result'] = $x->alamat_debitur_result;
        $data['photo_debitur_result'] = $x->photo_debitur_result;
        $data['pemasukan_debitur_result'] = $x->pemasukan_debitur_result;

        $query_pasangan = "SELECT 
            a.`id` AS id_trans_so,
            a.`nomor_so` AS nomor_so,
            b.`foto_pasangan` AS photo_pasangan,
            b.`nama_lengkap` AS nama_pasangan,
            b.`no_ktp` AS no_ktp_pasangan,
            b.`tempat_lahir` AS tempat_lahir_pasangan,
            b.`tgl_lahir` AS tgl_lahir_pasangan,
            b.`alamat_ktp` AS alamat_pasangan, 
            b.`no_npwp` AS no_npwp_pasangan,
            d.`pemasukan_pasangan` AS pemasukan_pasangan,
            e.`nama` AS nama_pasangan_result,
            e.`tempat_lahir` AS tempat_lahir_pasangan_result,
            e.`tgl_lahir` AS tgl_lahir_pasangan_result,
            e.`alamat` AS alamat_pasangan_result,
            e.`selfie_foto` AS photo_pasangan_result,
            f.`income` AS pemasukan_result,
            g.`nama` AS nama
        FROM trans_so AS a 
        LEFT JOIN pasangan_calon_debitur AS b ON a.`id_pasangan` = b.`id`
        LEFT JOIN trans_ao AS c ON a.`id` = c.`id_trans_so`
        LEFT JOIN kapasitas_bulanan AS d ON c.`id_kapasitas_bulanan` = d.`id`
        LEFT JOIN verif_pasangan AS e ON a.`id` = e.`id_trans_so`
        LEFT JOIN verif_npwp AS f ON a.`id_pasangan` = f.`id_pasangan`
        LEFT JOIN dpm_online.user AS g ON g.`user_id` = e.`user_id`
        WHERE a.`id` = $id ";

		$result = $this->db->query($query_pasangan);

        $y      = $result->row();
        $data['nomor_so'] = $y->nomor_so;
        $data['photo_pasangan'] = $y->photo_pasangan;
        $data['nama_pasangan'] = $y->nama_pasangan;
        $data['no_ktp_pasangan'] = $y->no_ktp_pasangan;
        $data['tempat_lahir_pasangan'] = $y->tempat_lahir_pasangan;
        if($y->tgl_lahir_pasangan != null){
            $data['tgl_lahir_pasangan'] = date('d-m-Y',strtotime($y->tgl_lahir_pasangan));
        } else {
            $data['tgl_lahir_pasangan'] = "";
        }
        $data['alamat_pasangan'] = $y->alamat_pasangan;
        $data['no_npwp_pasangan'] = $y->no_npwp_pasangan;
        if($y->pemasukan_pasangan == null || $y->pemasukan_pasangan == 0) {
            $data['pemasukan_pasangan'] = "";
        } else {
            $data['pemasukan_pasangan'] = $y->pemasukan_pasangan;
        }
        $data['nama_pasangan_result'] = $y->nama_pasangan_result;
        $data['tempat_lahir_pasangan_result'] = $y->tempat_lahir_pasangan_result;
        $data['tgl_lahir_pasangan_result'] = $y->tgl_lahir_pasangan_result;
        $data['alamat_pasangan_result'] = $y->alamat_pasangan_result;
        $data['photo_pasangan_result'] = $y->photo_pasangan_result;
        $data['pemasukan_pasangan_result'] = $y->pemasukan_pasangan_result;
        
		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('report/memo_verifikasi', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();       
	}
}
