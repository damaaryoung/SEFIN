<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ao_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_ao');
        $this->load->model('Model_tracking_order');
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

    function get_data_telepon()
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
                FROM verif_telp AS a
                LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
                WHERE a.id_trans_so = $id
            ")->row();
            
            if($check_verif == null ) {
                $nama_deb = $nama_debitur;
            } else {
                $nama_deb = '<p style="background-color: #00d807;">' . $nama_debitur . '</p>';
            }

            $url = "report/memo_telepon";

            $row = array();
            $row[] = $no;
            $row[] = $field->tanggal;
            $row[] = $field->nomor_so;
            $row[] = $nama_deb;
            $row[] = '<form method="post" style="text-align: center" target="_blank" action="' . $url . '"> 
            <button type="button"  class="btn btn-primary btn-sm edit" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
            <button type="button" class="btn btn-warning btn-sm detail" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
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
            "cabang" => $_POST['kode_kantor'],
            "area" => $_POST['kode_area']
        ]));

        $res = json_decode(curl_exec($ch));
        curl_close($ch);

        $data = array();
        $no = $res->data->from;
        foreach($res->data->data as $datum) {

            $check_verif = $this->db->query(
                "SELECT a.id AS id
                FROM verif_cadebt AS a
                LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
                WHERE a.id_trans_so = $datum->id_trans_so
            ")->row();
            
            if($check_verif == null ) {
                $nama_deb = $datum->nama_debitur;
            } else {
                $nama_deb = '<p style="background-color: #00d807;">' . $datum->nama_debitur . '</p>';
            }


            $id = $datum->id_trans_so;
            $row = array();
            $row["no"] = $no;
            $row["tgl_transaksi"] = $datum->tgl_transaksi;
            $row["nomor_so"] = $datum->nomor_so;
            $row["nama_debitur"] = $nama_deb;
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

    function get_data_telepon_filter() {

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
            "cabang" => $_POST['kode_kantor'],
            "area" => $_POST['kode_area']
        ]));

        $res = json_decode(curl_exec($ch));
        curl_close($ch);

        $data = array();
        $no = $res->data->from;
        foreach($res->data->data as $datum) {

            $check_verif = $this->db->query(
                "SELECT a.id AS id
                FROM verif_telp AS a
                LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
                WHERE a.id_trans_so = $datum->id_trans_so
            ")->row();
            
            if($check_verif == null ) {
               $nama_deb = $datum->nama_debitur;
            } else {
                $nama_deb = '<p style="background-color: #00d807;">' . $datum->nama_debitur . '</p>';
            }

            $id = $datum->id_trans_so;
            $row = array();
            $row["no"] = $no;
            $row["tgl_transaksi"] = $datum->tgl_transaksi;
            $row["nomor_so"] = $datum->nomor_so;
            $row["nama_debitur"] = $nama_deb;
            $row["action"] = '<form method="post" style="text-align: center" target="_blank" action="report/memo_verifikasi"> 
                <button type="button"  class="btn btn-primary btn-sm change" data-target="#update" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
                <button type="button" class="btn btn-warning btn-sm detail" data-target="#update" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
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

    function get_data_tracking_order()
    {   
        $bulan = $this->input->post("bulan");
        $tahun = $this->input->post("tahun");
        $kode_cabang = $this->input->post("kode_cabang");
        $kode_area = $this->input->post("kode_area");

        if ($kode_cabang == "*" && $kode_area == "") {
            $data_tracking_order = "SELECT c.id_trans_so AS id_trans_so,
                b.nomor_so AS nomor_so,
                DATE_FORMAT(b.created_at, '%d/%m/%Y %H:%i:%s') AS tgl_transaksi,
                e.nama AS nama_so,
                f.nama_lengkap AS nama_debitur,
                g.nama AS nama_cabang,
                d.plafon_kredit AS plafon_kredit,
                a.tgl_pending AS tgl_pending,
                a.status_return AS status_return,
                h.id AS id_caa,
                i.id_trans_so AS id_verif,
                b.flg_cancel_debitur AS cancel_debitur,
                j.nama AS nama_ca
            FROM trans_ao AS a
            LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
            LEFT JOIN trans_ca AS c ON a.id_trans_so = c.id_trans_so
            LEFT JOIN recom_ca AS d ON d.id = c.id_recom_ca
            LEFT JOIN dpm_online.user AS e ON a.user_id = e.user_id
            LEFT JOIN calon_debitur AS f ON b.id_calon_debitur = f.id
            LEFT JOIN mk_cabang AS g ON b.id_cabang = g.id
            LEFT JOIN trans_caa AS h ON a.id_trans_so = h.id_trans_so
            LEFT JOIN verif_cadebt AS i ON a.id_trans_so = i.id_trans_so
            LEFT JOIN dpm_online.user AS j ON c.user_id = j.user_id
            WHERE MONTH(b.created_at) = $bulan AND YEAR(b.created_at) = $tahun 
            ORDER BY a.id_trans_so DESC";
            $data['data_tracking_order'] = $this->db->query($data_tracking_order)->result();
        } else if ($kode_cabang != "*" && $kode_area == "") {
            $data_tracking_order = "SELECT c.id_trans_so AS id_trans_so,
                b.nomor_so AS nomor_so,
                DATE_FORMAT(b.created_at, '%d/%m/%Y %H:%i:%s') AS tgl_transaksi,
                e.nama AS nama_so,
                f.nama_lengkap AS nama_debitur,
                g.nama AS nama_cabang,
                d.plafon_kredit AS plafon_kredit,
                a.tgl_pending AS tgl_pending,
                a.status_return AS status_return,
                h.id AS id_caa,
                i.id_trans_so AS id_verif,
                b.flg_cancel_debitur AS cancel_debitur,
                j.nama AS nama_ca
            FROM trans_ao AS a
            LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
            LEFT JOIN trans_ca AS c ON a.id_trans_so = c.id_trans_so
            LEFT JOIN recom_ca AS d ON d.id = c.id_recom_ca
            LEFT JOIN dpm_online.user AS e ON a.user_id = e.user_id
            LEFT JOIN calon_debitur AS f ON b.id_calon_debitur = f.id
            LEFT JOIN mk_cabang AS g ON b.id_cabang = g.id
            LEFT JOIN trans_caa AS h ON a.id_trans_so = h.id_trans_so
            LEFT JOIN verif_cadebt AS i ON a.id_trans_so = i.id_trans_so
            LEFT JOIN dpm_online.user AS j ON c.user_id = j.user_id
            WHERE MONTH(b.created_at) = $bulan AND YEAR(b.created_at) = $tahun AND b.id_cabang = $kode_cabang
            ORDER BY a.id_trans_so DESC";
            $data['data_tracking_order'] = $this->db->query($data_tracking_order)->result();
        }

        if ($kode_area == "*" && $kode_cabang == "") {
            $data_tracking_order = "SELECT c.id_trans_so AS id_trans_so,
                b.nomor_so AS nomor_so,
                DATE_FORMAT(b.created_at, '%d/%m/%Y %H:%i:%s') AS tgl_transaksi,
                e.nama AS nama_so,
                f.nama_lengkap AS nama_debitur,
                g.nama AS nama_cabang,
                d.plafon_kredit AS plafon_kredit,
                a.tgl_pending AS tgl_pending,
                a.status_return AS status_return,
                h.id AS id_caa,
                i.id_trans_so AS id_verif,
                b.flg_cancel_debitur AS cancel_debitur,
                j.nama AS nama_ca
            FROM trans_ao AS a
            LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
            LEFT JOIN trans_ca AS c ON a.id_trans_so = c.id_trans_so
            LEFT JOIN recom_ca AS d ON d.id = c.id_recom_ca
            LEFT JOIN dpm_online.user AS e ON a.user_id = e.user_id
            LEFT JOIN calon_debitur AS f ON b.id_calon_debitur = f.id
            LEFT JOIN mk_cabang AS g ON b.id_cabang = g.id
            LEFT JOIN trans_caa AS h ON a.id_trans_so = h.id_trans_so
            LEFT JOIN verif_cadebt AS i ON a.id_trans_so = i.id_trans_so
            LEFT JOIN dpm_online.user AS j ON c.user_id = j.user_id
            WHERE MONTH(b.created_at) = $bulan AND YEAR(b.created_at) = $tahun 
            ORDER BY a.id_trans_so DESC";
            $data['data_tracking_order'] = $this->db->query($data_tracking_order)->result();
        } else if ($kode_area != "*" && $kode_cabang == ""){
            $data_tracking_order = "SELECT c.id_trans_so AS id_trans_so,
                b.nomor_so AS nomor_so,
                DATE_FORMAT(b.created_at, '%d/%m/%Y %H:%i:%s') AS tgl_transaksi,
                e.nama AS nama_so,
                f.nama_lengkap AS nama_debitur,
                g.nama AS nama_cabang,
                d.plafon_kredit AS plafon_kredit,
                a.tgl_pending AS tgl_pending,
                a.status_return AS status_return,
                h.id AS id_caa,
                i.id_trans_so AS id_verif,
                b.flg_cancel_debitur AS cancel_debitur,
                j.nama AS nama_ca
            FROM trans_ao AS a
            LEFT JOIN trans_so AS b ON a.id_trans_so = b.id
            LEFT JOIN trans_ca AS c ON a.id_trans_so = c.id_trans_so
            LEFT JOIN recom_ca AS d ON d.id = c.id_recom_ca
            LEFT JOIN dpm_online.user AS e ON b.user_id = e.user_id
            LEFT JOIN calon_debitur AS f ON b.id_calon_debitur = f.id
            LEFT JOIN mk_cabang AS g ON b.id_cabang = g.id
            LEFT JOIN trans_caa AS h ON a.id_trans_so = h.id_trans_so
            LEFT JOIN verif_cadebt AS i ON a.id_trans_so = i.id_trans_so
            LEFT JOIN dpm_online.user AS j ON c.user_id = j.user_id
            WHERE MONTH(b.created_at) = $bulan AND YEAR(b.created_at) = $tahun AND b.id_area = $kode_area
            ORDER BY a.id_trans_so DESC";
            $data['data_tracking_order'] = $this->db->query($data_tracking_order)->result();
        }

        // $list = $this->Model_tracking_order->get_datatables();
        // $data = array();
        // $no = $_POST['start'];
        // foreach ($list as $field) {
        //     $no++;

        //     $id_trans_so = $field->id_trans_so;
        //     $plafon_kredit = $field->plafon_kredit;
        //     $status_pending = $field->tgl_pending;
        //     $status_return = $field->status_return;
        //     $id_caa = $field->id_caa;
        //     $id_verif = $field->id_verif;
        //     $id_cancel = $field->cancel_debitur;

        //     if ($id_cancel == 2) {
        //         $status_tracking = '<p style="background-color: #dc4836; text-align: center; vertical-align: middle">Cancel By Debitur</p>';
        //     } else {
        //         if ($id_trans_so != NULL && $id_verif != NULL && $id_caa == NULL){
        //             $status_tracking = '<p style="text-align: center; vertical-align: middle">Proses Pengajuan CAA</p>';
        //         } else if($id_trans_so == NULL) {
        //             $status_tracking = '<p style="text-align: center; vertical-align: middle">Proses Memorandum CA</p>';
        //         } else if ($plafon_kredit == 0) {
        //             $status_tracking = '<p style="background-color: #dc4836; text-align: center; vertical-align: middle">Not Recommend CA</p>';
        //         } else if ($id_trans_so != NULL && $id_verif == NULL) {
        //             $status_tracking = '<p style="text-align: center; vertical-align: middle">Proses Verifikasi</p>';
        //         } else if ($id_caa != NULL) {
        //             $status_tracking = '<p style="background-color: #00d807; text-align: center; vertical-align: middle">Sudah Pengajuan CAA</p>';
        //         } else if ($status_pending != NULL && $id_trans_so == NULL) {
        //             $status_tracking = '<p style="background-color: #f1f1f1; text-align: center; vertical-align: middle">Pending</p>';
        //         } else if ($status_return != NULL && $id_trans_so == NULL) {
        //             $status_tracking = '<p style="background-color: #f1f1f1; text-align: center; vertical-align: middle">Return</p>';
        //         } else {
        //             $status_tracking = '<p style="text-align: center; vertical-align: middle">Status Lain</p>';
        //         }
        //     }

        //     $row = array();
        //     $row[] = $no;
        //     $row[] = $field->tgl_transaksi;
        //     $row[] = $field->nomor_so;
        //     $row[] = $field->nama_so;
        //     $row[] = $field->nama_debitur;
        //     $row[] = $field->nama_cabang;
        //     $row[] = $status_tracking;
        //     $data[] = $row;
        // }

        // $output = array(
        //     "draw" => $_POST['draw'],
        //     "recordsTotal" => $this->Model_tracking_order->count_all(),
        //     "recordsFiltered" => $this->Model_tracking_order->count_filtered(),
        //     "data" => $data,
        // );

        echo json_encode($data);
    }
}
