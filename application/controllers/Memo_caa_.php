<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo_caa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_auth');
    }

	public function index()
	{
		$id  = $this->input->post('id');
        $url = 'api/master/report/approval/'.$id ;
		$r   = $this->model_auth->get_data($url);
		$code = $r['code'];

		if($code =="200"){
			$data['nama_debitur'] = $r['message']['debitur']['nama'];
			$data['plafon_pengajuan'] = $r['message']['approved']['plafon'];
			$data['tenor'] = $r['message']['approved']['tenor'];
			$data['jaminan'] = $r['message']['approved']['jaminan'];
			$data['list_approver'] = $r['message']['list_approver'];

			$mpdf = new \Mpdf\Mpdf();
	        $html = $this->load->view('report/memo_caa',$data,true);
	        $mpdf->WriteHTML($html);
	        $mpdf->Output();
		}
		
	}
}