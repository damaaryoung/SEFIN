<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_belum_tersedia_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_data_belum_tersedia');
    }

    function get_data_target()
    {
        $list = $this->Model_data_belum_tersedia->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $id =  $field->id;
            $no++;
            $row = array();
            // $row[] = $no;
            $row[] = $field->nama_area_kerja;
            $row[] = $field->kategori;
            $row[] = $field->target_lending;
            $row[] = $field->target_baki_debet;
            $row[] = '<a href="#" title="Edit" class="btn btn-info btn-sm btn_edit" data="' . $id . '"><i class="fas fa-pencil-alt"></i></a>
                 <a href="#" class="btn btn-danger mr-1 btn_delete btn-sm" title="Delete" data="' . $id . '"><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_data_belum_tersedia->count_all(),
            "recordsFiltered" => $this->Model_data_belum_tersedia->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function get_area_kerja()
    {
        $data['data_area_kerja'] = $this->Model_data_belum_tersedia->get_area_kerja();
        echo json_encode($data);
    }

    function get_asal_data()
    {
        $data['data_asal_data'] = $this->Model_data_belum_tersedia->get_asal_data();
        echo json_encode($data);
    }

    function save_target()
    {
        $data = $this->Model_data_belum_tersedia->save_target();
        echo json_encode($data);
    }

    function edit_target()
    {
        $data = $this->Model_data_belum_tersedia->edit_target();
        echo json_encode($data);
    }

    function update_target()
    {
        $data = $this->Model_data_belum_tersedia->update_target();
        echo json_encode($data);
    }

    function delete_target()
    {
        $data = $this->Model_data_belum_tersedia->delete_target();
        echo json_encode($data);
    }
}
