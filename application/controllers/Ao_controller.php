<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ao_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_ao');
        $this->load->model('Model_so_approve_hm');
    }

    function get_data_ao()
    {
        $list = $this->Model_ao->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $id =  $field->id_trans_so;

            $url = "report/memo_ao";

            $row = array();
            $row[] = $no;
            $row[] = $field->tanggal;
            $row[] = $field->nomor_so;
            $row[] = $field->nama_so;
            $row[] = $field->asal_data;
            $row[] = $field->nama_marketing;
            $row[] = $field->nama_debitur;
            $row[] = $field->cabang;
            $row[] = '<form method="post" target="_blank" action="' . $url . '"> <button type="button"  class="btn btn-info btn-sm edit"   data-target="#update" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-warning btn-sm edit" onclick="click_detail()" data-target="#update" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
            <input type="hidden" name ="id" value="' . $id . '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_ao->count_all(),
            "recordsFiltered" => $this->Model_ao->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    function get_data_verifikasi()
    {
        $list = $this->Model_ao->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $id =  $field->id_trans_so;
            $nama_debitur = $field->nama_debitur;

            $check_verif = $this->db->query(
                "SELECT a.id AS id
                FROM verif_cadebt AS a
                LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
                WHERE a.id_trans_so = $id
            ")->row();
            
            if($check_verif == null ) {
                $nama_deb = $nama_debitur;
            } else {
                $nama_deb = '<p style="background-color: #00d807;">' . $nama_debitur . '</p>';
            }

            $url = "report/memo_verifikasi";

            $row = array();
            $row[] = $no;
            $row[] = $field->tanggal;
            $row[] = $field->nomor_so;
            $row[] = $nama_deb;
            $row[] = '<form method="post" style="text-align: center" target="_blank" action="' . $url . '"> 
            <button type="button"  class="btn btn-primary btn-sm change" data-target="#update" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-warning btn-sm detail" onclick="click_detail()" data-target="#update" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
            <button type="button"  class="btn btn-info btn-sm edit" onclick="click_edit()" data-target="#update" data="' . $id . '"><i class="fas fa-check"></i></button>
            <input type="hidden" name ="id" value="' . $id . '">
            <button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_ao->count_all(),
            "recordsFiltered" => $this->Model_ao->count_filtered(),
            "data" => $data,
        );

        //output dalam format JSON
        echo json_encode($output);
        
    }

    function get_data_so_approve_hm()
    {
        $list = $this->Model_so_approve_hm->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;


            $id =  $field->id_trans_so;
            $row = array();
            $row[] = $no;
            $row[] = $field->tanggal;
            $row[] = $field->nomor_so;
            $row[] = $field->nama_so;
            $row[] = $field->asal_data;
            $row[] = $field->nama_marketing;
            $row[] = $field->nama_debitur;
            $row[] = $field->cabang;
            $row[] = '<button type="button" class="btn btn-info btn-sm edit" data-target="#update" data="' . $id . '"><i class="fas fa-plus-circle"></i></button>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_so_approve_hm->count_all(),
            "recordsFiltered" => $this->Model_so_approve_hm->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
}
