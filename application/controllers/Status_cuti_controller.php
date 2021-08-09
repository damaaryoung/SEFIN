<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Status_cuti_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_menu'); //getUser()
        $this->load->library('datatables'); //load library ignited-dataTable
        $this->load->model('model_status_cuti'); //load model status cuti
        $session = $this->session->userdata('SESSION_TOKEN');
        if(!$session) {
            redirect('/');
        }
    }

    public function get_status_cuti()
    {
        header('Content-Type: application/json');
        echo $this->model_status_cuti->get_data_status_cuti();
    }

    public function update()
    {
        $input = $this->input->post();
        $update = $this->model_status_cuti->update($input);
        echo json_encode(array('message' => $update));
    }
}