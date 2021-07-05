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

    function get_data_verifikasi_filter() {

        $url = $this->config->item('api_url').'api/master/verif/filter?page='.$_POST['draw'];
        $token = $this->session->userdata('SESSION_TOKEN');
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$token,
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            "cabang" => $_POST['cabang'],
            "area" => $_POST['area']
        ]));

        $res = json_decode(curl_exec($ch));
        curl_close($ch);

        $data = array();
        $no = $res->data->from;
        foreach($res->data->data as $datum) {
            $id = $datum->id_trans_so;
            $row = array();
            $row["no"] = $no;
            $row["tgl_transaksi"] = $datum->tgl_transaksi;
            $row["nomor_so"] = $datum->nomor_so;
            $row["nama_debitur"] = $datum->nama_debitur;
            $row["action"] = '<form method="post" style="text-align: center" target="_blank" action="report/memo_verifikasi"> 
                <button type="button"  class="btn btn-primary btn-sm change" data-target="#update" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
                <button type="button" class="btn btn-warning btn-sm detail" onclick="click_detail()" data-target="#update" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
                <button type="button"  class="btn btn-info btn-sm edit" onclick="click_edit()" data-target="#update" data="' . $id . '"><i class="fas fa-check"></i></button>
                <input type="hidden" name ="id" value="' . $id . '">
                <button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $data[] = $row;
            $no++;
        }

        $output = array(
            "recordsTotal" => $res->data->total, // ganti dengan total dari $res
            "recordsFiltered" => $res->data->per_page,
            "data" => $data,
            "current_page" => $res->data->current_page,
            "first_page_url" => $res->data->first_page_url,
            "from" => $res->data->from,
            "to" => $res->data->to,
            "last_page" => $res->data->last_page,
            "last_page_url" => $res->data->last_page_url,
            "prev_page_url" => $res->data->prev_page_url
        );

        echo json_encode($output);
    }
}
