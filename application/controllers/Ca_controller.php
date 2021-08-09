<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ca_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_ca');
        $this->load->model('Model_ao_to_ca');
    }

    function get_data_ca()
    {
        $akses   = $this->model_menu->getUserAkses(5);
        $list = $this->Model_ca->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $id =  $field->id_trans_so;

            $url = "report/memo_ca";
            if ($akses['data']['edit_access'] == 'N') {
                $btndisable = "disabled";
            } else {

                $btndisable = "";
            }
            $row = array();
            $row[] = $no;
            $row[] = $field->tanggal;
            $row[] = $field->nomor_so;
            $row[] = $field->revisi;
            $row[] = $field->nama_marketing;
            $row[] = $field->nama_debitur;
            $row[] = $field->cabang;
            $row[] = '<form method="post" target="_blank" action="' . $url . '"> <button type="button"  class="btn btn-info btn-sm edit" ' . $btndisable . '  data-target="#update" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
            <input type="hidden" name ="id" value="' . $id . '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_ca->count_all(),
            "recordsFiltered" => $this->Model_ca->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function get_data_pengajuan()
    {
        $list = $this->Model_ao_to_ca->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $id =  $field->id_trans_so;

            $row = array();
            $row[] = $no;
            $row[] = $field->tanggal;
            $row[] = $field->nomor_so;
            $row[] = $field->asal_data;
            $row[] = $field->nama_so;
            $row[] = $field->nama_debitur;
            $row[] = $field->cabang;
            $row[] = '<button type="button" class="btn btn-info btn-sm edit"   data-target="#update" data="' . $id . '"><i class="fas fa-plus-circle"></i></button>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_ao_to_ca->count_all(),
            "recordsFiltered" => $this->Model_ao_to_ca->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
