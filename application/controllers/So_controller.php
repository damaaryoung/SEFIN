<?php
defined('BASEPATH') or exit('No direct script access allowed');

class So_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_so');
    }

    function get_data_so()
    {
        $akses   = $this->model_menu->getUserAkses(3);
        $list = $this->Model_so->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $status_das1 = $field->status_das;
            $status_hm1 = $field->status_hm;
            $status_das = [];
            $status_hm = [];

            $id =  $field->id;
            if ($status_das1 == 1) {
                $status_das = 'complete';
            } else if ($status_das1 == 0) {
                $status_das = 'waiting';
            } else if ($status_das1 == 2) {
                $status_das = 'reject';
            };

            if ($akses['data']['edit_access'] == 'N') {
                $btndisable = "disabled";
            } else {

                $btndisable = "";
            }

            // if ($akses['data']['add_access'] == 'N') {
            //     $btndisableadd = "disabled";
            // } else {

            //     $btndisableadd = "";
            // }
            $url = "report/memo_so";
            if ($status_hm1 == 1) {
                $status_hm = 'complete';
            } else if ($status_hm1 == 0) {
                $status_hm = 'waiting';
            } else if ($status_hm1 == 2) {
                $status_hm = 'reject';
            };
            $row = array();
            $row[] = $no;
            $row[] = $field->tanggal;
            $row[] = $field->nomor_so;
            $row[] = $field->nama_so;
            $row[] = $field->asal_data;
            $row[] = $field->nama_debitur;
            $row[] = $field->cabang;
            $row[] =  $status_das;
            $row[] = $status_hm;
            $row[] = '<form method="post" target="_blank" action="' . $url . '"> <button type="button"  class="btn btn-info btn-sm edit" ' . $btndisable . '  data-target="#update" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-warning btn-sm edit" onclick="click_detail()" data-target="#update" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
            <input type="hidden" name ="id" value="' . $id . '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_so->count_all(),
            "recordsFiltered" => $this->Model_so->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
