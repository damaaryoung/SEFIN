<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pic_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_pic');
    }

    function get_data_pic()
    {
        $list = $this->Model_pic->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $id =  $field->id;
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama;
            $row[] = $field->nama_jenis;
            $row[] = $field->area;
            $row[] = $field->cabang;
            $row[] = '<a href="#" title="Edit" class="btn btn-info btn-sm edit" data="' . $id . '"><i class="fas fa-pencil-alt"></i></a>
                 <a href="#" class="btn btn-danger mr-1 delete btn-sm" title="Delete" data="' . $id . '"><i style="color: #fff;" class="fas fa-trash-alt"></i></a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_pic->count_all(),
            "recordsFiltered" => $this->Model_pic->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
