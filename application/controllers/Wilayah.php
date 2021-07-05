<?php
class Wilayah extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_wilayah');
    }

    function get_kabupaten()
    {
        $nama = $this->input->post('nama');
        $data = $this->Model_wilayah->get_kabupaten($nama);
        echo json_encode($data);
    }

    function get_kecamatan()
    {
        $nama = $this->input->post('nama');
        $data = $this->Model_wilayah->get_kecamatan($nama);
        echo json_encode($data);
    }

    function get_kelurahan()
    {
        $nama = $this->input->post('nama');
        $data = $this->Model_wilayah->get_kelurahan($nama);
        echo json_encode($data);
    }
}
