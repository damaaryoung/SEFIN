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
        $session = $this->session->userdata('SESSION_TOKEN');
        if(!$session) {
            redirect('/');
        }
    }

    function validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('start_date', 'Start date', 'required',
            array('required' => 'Tanggal Mulai tidak boleh kosong')
        );
        // $this->form_validation->set_rules('end_date', 'End date', 'required',
        //     array('required' => 'Tanggal Selesai tidak boleh kosong')
        // );
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
                // 'end_date' => form_error('end_date'),
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
        if(!$this->input->post('id_tanggal_penyimpangan')) {
            $params_penyimpangan = explode(",",$this->input->post('params_penyimpangan'));
            $input     = $this->input->post();
            $validate = $this->validation();
            if($validate['success']) {
                echo json_encode(array('validate' => $validate, 'data' => $input));
                die();
            }
            $start_date = $this->input->post('start_date') == '' ? null: $this->input->post('start_date');
            $end_date = $this->input->post('end_date') == '' ? null: $this->input->post('end_date');

            $filenameIom = null;
            if(!$this->input->post('file') == 'undefined') {
                $config['upload_path'] = './assets/iom_uploaded';
                $config['allowed_types'] = 'pdf';
                $config['max_size']  = 1000;
                $config['file_name'] = 'iom-'.date("Y-m-d").'-'.time();
                $filenameIom = $config['file_name'].'.pdf';
    
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('file')){
                    $status = "error";
                    $msg = $this->upload->display_errors();
                    echo json_encode(array('status'=>$status,'msg'=>$msg));
                    exit();
                } else {
                    $dataupload = $this->upload->data();
                    // $status = "success";
                    // $msg = $dataupload['file_name']." berhasil diupload";
                }
            }

            $dataTanggalPenyimpangan = array('start_date' => $start_date, 'end_date' =>$end_date, 'expired' => 0, 'filename_iom' => $filenameIom);

            $id_tanggal = $this->model_tanggal_penyimpangan->AddTanggalPenyimpangan($dataTanggalPenyimpangan);
        } else {
            $params_penyimpangan = $this->input->post('params_penyimpangan');
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

    public function update()
    {
        $data = $this->input->post();
        $sql = $this->model_tanggal_penyimpangan->update($data);
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

    public function setExpiredDate()
    {
        $query = $this->model_tanggal_penyimpangan->set_expired_date_iom();
        if($query == true) {
            $message = 'query done';
        } else {
            $message = 'query failed';
        }
        echo json_encode(array('message' => $message));
    }

    public function upload_iom()
    {
        $input = $this->input->post();
        $config['upload_path'] = './assets/iom_uploaded';
        $config['allowed_types'] = 'pdf';
        $config['max_size']  = 1000;
        $config['file_name'] = 'iom-'.date("Y-m-d").'-'.time();
        $filenameIom = $config['file_name'].'.pdf';
        $sql = false;
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('file')){
            $status = "error";
            $msg = $this->upload->display_errors();
        } else {
            $dataupload = $this->upload->data();
            $status = "success";
            $msg = $dataupload['file_name']." berhasil diupload";
        }

        if($status == "success") {
            $sql = $this->model_tanggal_penyimpangan->upload_iom($input['id'],$filenameIom);
        }
        echo json_encode(array('status'=>$status,'msg'=>$msg,'sql'=>$sql));
    }

    public function delete_iom()
    {
        $filename     = $this->input->get('filename');
        if (file_exists('./assets/iom_uploaded/'.$filename)) {
            $this->model_tanggal_penyimpangan->delete_iom($filename);   
            $statusCode = 200;
        } else {
            $statusCode = 404;
        }
        http_response_code($statusCode);
        echo json_encode('ok');
    }
}