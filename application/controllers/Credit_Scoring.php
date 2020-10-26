<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Credit_Scoring extends CI_Controller
{
	 function __construct()
    {
        parent::__construct();
        $this->load->model('Model_credit_scoring');
    }
	function get_data(){
		$list = $this->Model_credit_scoring->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
        	if ($field->rekomendasi=='RENDAH/LAYAK') {
        		$rekomendasi='<div class="btn btn-outline-primary btn-sm">RENDAH/LAYAK</div>';
        	}elseif ($field->rekomendasi=='TINGGI/KURANG LAYAK') {
        		$rekomendasi='<div class="btn btn-outline-warning btn-sm">TINGGI/KURANG LAYAK</div>';
        	}elseif ($field->rekomendasi=='MODERAT/CUKUP LAYAK') {
        		$rekomendasi='<div class="btn btn-outline-success btn-sm">MODERAT/CUKUP LAYAK</div>';
        	}elseif ($field->rekomendasi=='TINGGI/TIDAK LAYAK') {
        		$rekomendasi='<div class="btn btn-outline-danger btn-sm">SANGAT TINGGI/TIDAK LAYAK</div>';
        	}else{
        		$rekomendasi='<div class="btn btn-outline-info btn-sm"><i class="fas fa-info"></i> Menunggu scoring</div>';
        	}
            $no++;
            $row = array();
            $row[] = $field->nomor_aplikasi;
            $row[] = $field->tgl_transaksi;
            $row[] = $field->nama_debitur;
            $row[] = $field->id_area;
            $row[] = $field->id_cabang;
            $row[] = $field->nama_so;
            $row[] = $field->nama_ao;
            $row[] = $rekomendasi;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_credit_scoring->count_all(),
            "recordsFiltered" => $this->Model_credit_scoring->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
	}
}
