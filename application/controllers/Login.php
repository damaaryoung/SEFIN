<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_menu');
         
    }
    public function index()
    {
        $SESSION_TOKEN = $this->session->userdata('SESSION_TOKEN');
        if($SESSION_TOKEN){
            redirect('master');
        }else{
            $this->load->view('login');
        }
    }

	public function login()
	{
		$token = $this->input->post('token');
		$arr_session = array(
			'SESSION_TOKEN' => $token
		);
		$this->session->set_userdata($arr_session);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect();
	}
}