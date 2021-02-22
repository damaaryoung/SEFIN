<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo_telesales extends CI_Controller {

	function __construct(){
        parent::__construct();
    }

	public function index()
	{
		$id = $this->input->post('id');
		$query = "SELECT * FROM activity_telesales as a LEFT JOIN dpm_online.user as b ON (a.id_pic = b.user_id) WHERE a.id ='$id' ";

		$result = $this->db->query($query);

		$x      = $result->row();
		$data['tgl_telp']  = date('d/m/Y - H:i:s',strtotime($x->tgl_telp));
        $data['no_kontrak'] = $x->no_kontrak;
        $data['nama_debitur'] = $x->nama_debitur;
        $data['usia_debitur'] = $x->usia_debitur;
        $data['no_telp_1'] = $x->no_telp_1;
        $data['no_telp_2'] = $x->no_telp_2;
        $data['no_telp_3'] = $x->no_telp_3;
        $data['tanggal_lahir'] = date('d/m/Y',strtotime($x->tanggal_lahir));
        $data['alamat_domisili'] = $x->alamat_domisili;
        $data['update_pekerjaan'] = $x->update_pekerjaan;
        $data['update_penghasilan'] = $x->update_penghasilan;
        $data['plafon_awal'] = $x->plafon_awal;
        $data['angsuran_ke'] = $x->angsuran_ke;
        $data['sisa_angsuran'] = $x->sisa_angsuran;
        $data['max_pastdue'] = $x->max_pastdue;
        $data['nominal_angsuran'] = $x->nominal_angsuran;
        $data['taksasi_agunan'] = $x->taksasi_agunan;
        $data['baki_debet'] = $x->baki_debet;
        $data['total_denda'] = $x->total_denda;
        $data['total_pelunasan'] = $x->total_pelunasan;
        $data['jenis_agunan'] = $x->jenis_agunan;
        $data['shgb_expired'] = $x->shgb_expired;

        $data['pengajuan_ro'] = $x->pengajuan_ro;
        $data['tenor'] = $x->tenor;
        $data['produk_kredit'] = $x->produk_kredit;
        $data['rate_bulan'] = $x->rate_bulan;
        $data['angsuran'] = $x->angsuran;
        $data['biaya_provisi'] = $x->biaya_provisi;
        $data['biaya_adm'] = $x->biaya_adm;
        $data['biaya_cc'] = $x->biaya_cc;
        $data['dsr'] = $x->dsr;
        $data['idir'] = $x->idir;
        $data['ltv'] = $x->ltv;
        $data['total_pencairan'] = $x->total_pencairan;
        
        if ($x->result_contacted != "") {
            $data['result'] = $x->result_contacted;
        } else if ($x->result_uncontacted != "") {
            $data['result'] = $x->result_uncontacted;
        } else if ($x->result_unconnected != "") {
            $data['result'] = $x->result_unconnected;
        } else {
            $data['result'] = "-";
        }
        $data['note_tele'] = $x->note_tele_sales;
        $data['pic'] = $x->nama;

		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('report/memo_telesales', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();       
	}
}
