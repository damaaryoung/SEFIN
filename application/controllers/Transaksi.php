<?php
class Transaksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_view_master');
    }

    function delete_anak()
    {
        $data = $this->Model_view_master->delete_anak();
        echo json_encode($data);
    }

    function update_penyimpangan()
    {
        $data = $this->Model_view_master->update_penyimpangan();
        echo json_encode($data);
    }

    function update_rekomendasi_pinjaman()
    {
        $data = $this->Model_view_master->update_rekomendasi_pinjaman();
        echo json_encode($data);
    }
}
