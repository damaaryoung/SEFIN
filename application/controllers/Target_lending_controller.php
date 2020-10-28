<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_lending_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_target_lending');
    }

    // view function::STARTED
    public function tampil_data()
    {
        if (isset($_POST['page'])) {
            $page=$_POST['page'];
        } else {
            $page="1";
        }
        $data=$this->Model_target_lending->tampil_data($page);
        $data['pagination']=$data['data']['last_page'];
        $data['page']=$data['data']['current_page'];
        $data['data']=$data['data']['data'];
        $this->load->view('master/target_lending/table_data', $data);
    }

    public function create()
    {   
        $id = $this->input->post('id');
        $data['data_edit']=$this->Model_target_lending->view($id);
        $data['data_area']=$this->Model_target_lending->get_area();
        $this->load->view('master/target_lending/add_target', $data);
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $data['data_edit']=$this->Model_target_lending->view($id);
        $data['data_area']=$this->Model_target_lending->get_area();
        $this->load->view('master/target_lending/edit_target', $data);
    }

    public function get_area_kerja()
    {
        $area_kerja = $this->model_auth->get_data('api/master/area_kerja');
        echo json_encode($area_kerja);
    }
    // view function::ENDED

    // action function::STARTED
    public function store()
    {
        echo $this->Model_target_lending->store();
    }

    public function update()
    {
        echo $this->Model_target_lending->update();
    }

    public function destroy()
    {
        $id = $this->input->post('id');
        echo $this->Model_target_lending->destroy($id);
    }
    // action function::ENDED
}
