<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Penyimpangan_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_menu'); //getUser()
        $this->load->library('datatables'); //load library ignited-dataTable
        $this->load->model('model_penyimpangan'); //load model penyimpangan
        $this->load->library('form_validation');
        $session = $this->session->userdata('SESSION_TOKEN');
        if(!$session) {
            redirect('/');
        }
    }

    function validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        if($this->form_validation->run())
        {
            $array = array(
                'success' => false
            );
        }
        else
        {
            $array = array(
                'success'   => true,
                'nama_error' => form_error('nama'),
            );
        }

        return $array;
    }

    public function get_data_penyimpangan()
    {
        $parent_penyimpangan = $this->input->post('parent_penyimpangan');
        header('Content-Type: application/json');
        echo $this->model_penyimpangan->get_all_penyimpangan($parent_penyimpangan);
    }

    public function get_detail_approval()
    {
        $id_mj_pic = $this->input->post('id_mj_pic');
        header('Content-Type: application/json');
        echo $this->model_penyimpangan->detail_approval($id_mj_pic);
    }

    public function create()
    {
        $input     = $this->input->post();
        // echo json_encode($input);
        // die();
        $validate = $this->validation();
        if(!$validate['success']) {
            $sql = $this->model_penyimpangan->insert($input);
        }
        
        echo json_encode(array('validate' => $validate, 'data' => $input));
    }

    public function update()
    {
        $input     = $this->input->post();
        $this->model_penyimpangan->update($input);
        echo json_encode($input);
    }

    public function delete()
    {
        $id     = $this->input->get('id');
        $parent_penyimpangan = $this->input->get('parent_penyimpangan');
        $count = $this->model_penyimpangan->getByid($id);
        $count_child = $this->model_penyimpangan->getChild($id);
        
        if($count->num_rows() > 0) {
            if($parent_penyimpangan == 0 && $count_child->num_rows() == 0) { 
                $this->model_penyimpangan->destroy($id);
                $statusCode = 200;
            } else if($parent_penyimpangan != 0) {
                $this->model_penyimpangan->destroy($id);
                $statusCode = 200;
            } else {
                $statusCode = 400;
            }
        } else {
            $statusCode = 404;
        }
        
        http_response_code($statusCode);
        echo json_encode('ok');
    }

    public function get_mj_pic()
    {
        $mj_pic = $this->model_penyimpangan->mj_pic()->result();
        echo json_encode(array('data' => $mj_pic));
    }
}