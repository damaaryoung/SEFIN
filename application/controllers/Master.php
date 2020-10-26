<?php
defined('BASEPATH') OR exmaster('No direct script access allowed');
class Master extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('Model_menu');
        $this->load->model('Model_memorandum_so');
         
    }

        public function index(){
            $SESSION_TOKEN = $this->session->userdata('SESSION_TOKEN');
            if($SESSION_TOKEN){
                $data['nama_user'] = $this->Model_menu->getUser();
                $this->load->view('master/index', $data);
            }else{
                redirect('login');
            }
        }
        public function dashboard(){
            $this->load->view('master/dashboard');
        }
         public function provinsi()
        {
            // $this->load->view('master/master/provinsi/data_provinsi');
            $this->load->view('master/master/wilayah/provinsi/data_provinsi');
        }
         public function add_provinsi()
        {
            // $this->load->view('master/master/provinsi/data_provinsi');
            $this->load->view('master/master/wilayah/provinsi/add_provinsi');
        }
        public function kabupaten()
        {
            $this->load->view('master/master/wilayah/kabupaten/data_kabupaten');
            // $this->template->load('template','master/master/kabupaten/data_kabupaten');
        }
        public function add_kabupaten()
        {
            $this->load->view('master/master/wilayah/kabupaten/add_kabupaten');
            // $this->template->load('template','master/master/kabupaten/data_kabupaten');
        }
        public function kecamatan()
        {
            $this->load->view('master/master/wilayah/kecamatan/data_kecamatan');
            // $this->template->load('template','master/master/kecamatan/data_kecamatan');
        }
        public function add_kecamatan()
        {
            $this->load->view('master/master/wilayah/kecamatan/add_kecamatan');
            // $this->template->load('template','master/master/kecamatan/data_kecamatan');
        }
        public function kelurahan()
        {
            $this->load->view('master/master/wilayah/kelurahan/data_kelurahan');
            // $this->template->load('template','master/master/kelurahan/data_kelurahan');
        }
        public function add_kelurahan()
        {
            $this->load->view('master/master/wilayah/kelurahan/add_kelurahan');
            // $this->template->load('template','master/master/kelurahan/data_kelurahan');
        }
        public function asal_data()
        {
            $this->load->view('master/master/asal_data/data_asal_data');
            // $this->template->load('template','it/master/jenis_pic/data_jenis_pic');
        }
        public function add_asal_data()
        {
            $this->load->view('master/master/asal_data/add_asal_data');
            // $this->template->load('template','it/master/jenis_pic/data_jenis_pic');
        }
        public function area()
        {
            $this->load->view('master/master/area/data_area');
            // $this->template->load('template','it/master/kantor_area/data_kantor_area');
        }
        public function add_area()
        {
            $this->load->view('master/master/area/add_area');
            // $this->template->load('template','it/master/kantor_area/data_kantor_area');
        }
        public function jenis_pic()
        {
            $this->load->view('master/master/jenis_pic/data_jenis_pic');
            // $this->template->load('template','it/master/jenis_pic/data_jenis_pic');
        }
        public function add_jenis_pic()
        {
            $this->load->view('master/master/jenis_pic/add_jenis_pic');
            // $this->template->load('template','it/master/jenis_pic/data_jenis_pic');
        }
        public function pic()
        {
            $this->load->view('master/master/pic/data_pic');
            // $this->template->load('template','it/master/pic/data_pic');
        }
        public function add_pic()
        {
            $this->load->view('master/master/pic/add_pic');
            // $this->template->load('template','it/master/pic/data_pic');
        }
        public function area_pic()
        {
            $this->load->view('master/master/area_pic/data_area_pic');
            // $this->template->load('template','it/master/pic/data_pic');
        }
        public function add_area_pic()
        {
            $this->load->view('master/master/area_pic/add_area_pic');
            // $this->template->load('template','it/master/pic/data_pic');
        }
        public function kantor_cabang()
        {
            $this->load->view('master/master/kantor_cabang/data_kantor_cabang');
        }
        public function add_kantor_cabang()
        {
            $this->load->view('master/master/kantor_cabang/add_kantor_cabang');
        }
        public function memorandum_so(){
            $this->load->view('master/memorandum_so/data_credit_checking');
        }
        public function add_memorandum_so(){
            $data['pendidikan'] = $this->Model_memorandum_so->tampil_data_pendidikan()->result();
            $data['jml_tanggungan'] = $this->Model_memorandum_so->tampil_data_jml_tanggungan()->result();
            $this->load->view('master/memorandum_so/add_credit', $data);
        }
        public function das(){
            $this->load->view('master/das/data_credit_checking');
        }
        public function ds_spv(){
            $this->load->view('master/ds_spv/data_credit_checking');
        }
        public function memorandum_ao(){
            $this->load->view('master/memorandum_ao/data_credit_checking', $data);
        }
        public function add_memorandum_ao(){
            $this->load->view('master/memorandum_ao/add_ao');
        }
        public function menu(){
            $this->load->view('master/menu/data_menu');
        }
        public function submenu(){
            $this->load->view('master/submenu/data_submenu');
        }
        public function user_access(){
            $this->load->view('master/user_access/data_user_access');
        } 
        public function caa(){
            $this->load->view('master/master/form_caa/data_caa');
        } 
        public function memorandum_ca(){
            $this->load->view('master/ca/data_credit_checking');
        }      
        public function add_menu()
        {
            if(isset($_POST['submit'])){

                $nama            =   $this->input->post('nama');
                $url             =   $this->input->post('url');
                // $icon            =   $this->input->post('icon');
                // $flg_aktif       =   $this->input->post('flg_aktif');
                $data            =   array('nama' =>$nama,
                                    'url'=>$url
                                    // 'icon'=>$icon,
                                    // 'flg_aktif'=>$flg_aktif
                                    );
                $this->Model_menu->post($data);
                redirect('menu');
            }
            else{
                $this->load->view('master');
            }
        }

        public function form_ol()
        {
            $mpdf = new \Mpdf\Mpdf();
            $html = $this->load->view('master/master/form_ol/form_ol',[],true);
            $mpdf->WriteHTML($html);
            $mpdf->Output();
        }

    }