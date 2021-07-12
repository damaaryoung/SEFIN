<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tanggal_penyimpangan_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_menu'); //getUser()
        $this->load->library('datatables'); //load library ignited-dataTable
        $this->load->model('model_tanggal_penyimpangan'); //load model penyimpangan
        $this->load->library('form_validation');
    }

    function validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('start_date', 'Start date', 'required',
            array('required' => 'Tanggal Mulai tidak boleh kosong')
        );
        $this->form_validation->set_rules('end_date', 'End date', 'required',
            array('required' => 'Tanggal Selesai tidak boleh kosong')
        );
        // $this->form_validation->set_rules('params_penyimpangan', 'Penyimpangan', 'required',
        //     array('required' => 'Parameter Penyimpangan tidak boleh kosong')
        // );
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
                'start_date' => form_error('start_date'),
                'end_date' => form_error('end_date'),
                // 'params_penyimpangan' => form_error('params_penyimpangan'),
            );
        }

        return $array;
    }

    public function get_tanggal_penyimpangan ()
    {
        header('Content-Type: application/json');
        echo $this->model_tanggal_penyimpangan->get_tanggal_penyimpangan();
    }

    public function getParamPenyimpangan ()
    {   
        $data = $this->model_tanggal_penyimpangan->ParamPenyimpangan();
        echo json_encode($data);
    }

    public function detail()
    {
        $id_tanggal_penyimpangan = $this->input->post('id_tanggal_penyimpangan');
        header('Content-Type: application/json');
        echo $this->model_tanggal_penyimpangan->detail($id_tanggal_penyimpangan);
    }

    public function create()
    {
        $params_penyimpangan = $this->input->post('params_penyimpangan');
        if(!$this->input->post('id_tanggal_penyimpangan')) {
            $input     = $this->input->post();
            $validate = $this->validation();
            if($validate['success']) {
                echo json_encode(array('validate' => $validate, 'data' => $input));
                die();
            }
            $start_date = $this->input->post('start_date');
            $end_date = $this->input->post('end_date');
            $dataTanggalPenyimpangan = array('start_date' => $start_date, 'end_date' =>$end_date, 'expired' => 0);

            $id_tanggal = $this->model_tanggal_penyimpangan->AddTanggalPenyimpangan($dataTanggalPenyimpangan);
        } else {
            $id_tanggal = $this->input->post('id_tanggal_penyimpangan');
        }

        $dataPenyimpangan = array();
        foreach($params_penyimpangan as $key => $value) {
            $dataPenyimpangan[] = array('id_penyimpangan' => $value, 'id_tanggal_penyimpangan' => $id_tanggal, 'active' => 1);
        }

        if($params_penyimpangan == '') {
            $sql = 'No List Created';
        } else {
            $sql = $this->model_tanggal_penyimpangan->AddListPenyimpangan(($dataPenyimpangan));
        }
        
        echo json_encode(array('message' => $sql));
    }

    public function is_active()
    {
        $data = $this->input->post();
        $sql = $this->model_tanggal_penyimpangan->is_active($data);
        echo json_encode(array('message' => $sql));
    }

    public function ExpiredDatePenyimpangan()
    {
        $count = $this->model_tanggal_penyimpangan->CountExpired();
        echo json_encode(array('total' => $count->num_rows()));

    }
}