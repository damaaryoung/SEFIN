<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo_telecoll extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$id = $this->input->post('id');
		$query = "SELECT * FROM activity_tele as a LEFT JOIN dpm_online.user as b ON (a.id_pic = b.user_id) WHERE a.id ='$id' ";

		$result = $this->db->query($query);

		$x      = $result->row();
        $data['total_call'] = $x->total_call;
		$data['tanggal_telpon']  = date('d/m/Y - H:i:s',strtotime($x->tanggal_telpon));
        $data['nomor_kontrak'] = $x->nomor_kontrak;
        $data['nama_debitur'] = $x->nama_debitur;
        $data['usia_debitur'] = $x->usia_debitur;
        $data['no_telp_1'] = $x->no_telp_1;
        $data['no_telp_2'] = $x->no_telp_2;
        $data['no_telp_3'] = $x->no_telp_3;
        $data['tanggal_lahir'] = date('d/m/Y',strtotime($x->tanggal_lahir));
        $data['sisa_angsuran'] = $x->sisa_angsuran;
        $data['total_call'] = $x->total_call;
        $data['tgl_kredit_tabungan'] = date('d/m/Y',strtotime($x->tgl_kredit_tabungan));
        $data['total_denda'] = $x->total_denda;
        $data['angsuran_ke'] = $x->angsuran_ke;
        $data['tgl_jatuh_tempo'] = date('d/m/Y',strtotime($x->tgl_jatuh_tempo));
        $data['pastdue'] = $x->pastdue;
        $data['nominal_angsuran'] = $x->nominal_angsuran;
        $data['baki_debet'] = $x->baki_debet;
        $data['total_pelunasan'] = $x->total_pelunasan;
        $data['karakter_debitur'] = $x->karakter_debitur;
        $data['kondisi_pekerjaan'] = $x->kondisi_pekerjaan;
        $data['update_pekerjaan'] = $x->update_pekerjaan;
        $data['update_penghasilan'] = $x->update_penghasilan;
        if ($x->contacted != "") {
            $data['result'] = $x->contacted;
        } else if ($x->uncontacted != "") {
            $data['result'] = $x->uncontacted;
        } else if ($x->unconnected != "") {
            $data['result'] = $x->unconnected;
        } else {
            $data['result'] = "-";
        }
        if ($x->tgl_janji_bayar == "0000-00-00") {
            $data['tgl_janji_bayar'] = "-";
        } else {
            $data['tgl_janji_bayar'] = date('d/m/Y',strtotime($x->tgl_janji_bayar));
        }
        $data['metode_pembayaran'] = $x->metode_pembayaran;
        $data['note_tele'] = $x->note_tele;
        $data['pic'] = $x->nama;

		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('report/memo_telecoll', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();       
	}
}
