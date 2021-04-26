<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
use GuzzleHttp\Client;

class Menu_controller extends MY_Controller
{
    function __construct()
    {   
        parent::__construct();
        $this->load->model('model_menu');
        $this->load->model('model_auth');
        $this->load->model('Model_view_master');
        $this->load->model('Model_target_lending');

    }

    public function index()
    {
        $tb_parameter_access = TB_PARAMETER_ACCESS;
        $outputs   = $this->model_menu->getUser();
        $user_id   = $outputs['data']['user_id'];
        $divisi_id = $outputs['data']['divisi_id'];
        $jabatan   = $outputs['data']['jabatan'];

        if ($divisi_id === 'IT') :
            $query = "SELECT * FROM menu_master WHERE `flg_aktif`='1'";
            $menu = $this->db->query($query)->result();

            $query = "SELECT * FROM menu_sub WHERE `flg_aktif`='1'";
            $menus = $this->db->query($query)->result();
            foreach ($menus as $res) :
                $arr_sub[] = strtoupper($res->id);
            endforeach;
            $arr_unique = array_unique($arr_sub);
            $im_sub = implode(',', $arr_unique);

            foreach ($menu as $res) :
                $query = "SELECT nama AS nama_sub, `url` AS url_sub FROM `menu_sub` WHERE id IN($im_sub) AND id_menu_master='$res->id' ORDER BY id ASC";
                $sub = $this->db->query($query)->result();
                $arrMenu['master_menu'] = strtoupper($res->nama);
                $arrMenu['icon_menu'] = strtoupper($res->icon);
                $arrSub = [];
                foreach ($sub as $ress) :
                    $arrSub[] = array(
                        'menu' => strtoupper($ress->nama_sub),
                        'url' => $ress->url_sub,
                    );
                    $arrMenu['sub_menu'] = $arrSub;
                endforeach;
                $dataArr[] = $arrMenu;
            endforeach;
        else :
            $query_so = "SELECT * FROM $tb_parameter_access WHERE id IN ('USER_AKSES_DPM_SO','USER_AKSES_DPM_SO_1','USER_AKSES_DPM_SO_2')";
            $row_so = $this->db->query($query_so)->result();
            foreach ($row_so as $ROW_so) :
                $ARR_so[] = $ROW_so->value;
            endforeach;

            $query_ao = "SELECT * FROM $tb_parameter_access WHERE id IN ('USER_AKSES_DPM_AO')";
            $row_ao = $this->db->query($query_ao)->result();
            foreach ($row_ao as $ROW_ao) :
                $ARR_ao[] = $ROW_ao->value;
            endforeach;

            $query_das = "SELECT * FROM $tb_parameter_access WHERE id IN ('USER_AKSES_DPM_DAS','USER_AKSES_DPM_DAS_1','USER_AKSES_DPM_DAS_2','USER_AKSES_DPM_DAS_3')";
            $row_das = $this->db->query($query_das)->result();
            foreach ($row_das as $ROW_das) :
                $ARR_das[] = $ROW_das->value;
            endforeach;

            $query_dos = "SELECT * FROM $tb_parameter_access WHERE id='USER_AKSES_DPM_DOS'";
            $row_dos = $this->db->query($query_dos)->row();

            $query_ds_spv = "SELECT * FROM $tb_parameter_access WHERE id IN ('USER_AKSES_DPM_DS_SPV','USER_AKSES_DPM_DS_SPV_1')";
            $row_ds_spv = $this->db->query($query_ds_spv)->result();
            foreach ($row_ds_spv as $ROW_ds_spv) :
                $ARR_ds_spv[] = $ROW_ds_spv->value;
            endforeach;

            $query_ca = "SELECT * FROM $tb_parameter_access WHERE id IN ('USER_AKSES_DPM_CA')";
            $row_ca = $this->db->query($query_ca)->result();
            foreach ($row_ca as $ROW_ca) :
                $ARR_ca[] = $ROW_ca->value;
            endforeach;

            $query_dsh = "SELECT * FROM $tb_parameter_access WHERE id IN ('USER_AKSES_DPM_DSH','USER_AKSES_DPM_DSH_1')";
            $row_dsh = $this->db->query($query_dsh)->result();
            foreach ($row_dsh as $ROW_dsh) :
                $ARR_dsh[] = $ROW_dsh->value;
            endforeach;

            $query_am = "SELECT * FROM $tb_parameter_access WHERE id IN ('USER_AKSES_DPM_AM')";
            $row_am = $this->db->query($query_am)->result();
            foreach ($row_am as $ROW_am) :
                $ARR_am[] = $ROW_am->value;
            endforeach;

            if (in_array($jabatan, $ARR_so)) :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id IN ('USER_AKSES_DEFAULT', 'USER_AKSES_SO', 'USER_AKSES_AO')";
                $SQL_parameter = $this->db->query($query_parameter)->result();
                foreach ($SQL_parameter as $SQL_res) :
                    $value_parameter_master[] = $SQL_res->id_menu_master;
                    $value_parameter_sub[] = $SQL_res->id;
                endforeach;
                $value_parameter_master = implode(',', $value_parameter_master);
                $value_parameter_sub = implode(',', $value_parameter_sub);

            elseif (in_array($jabatan, $ARR_ao)) :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id IN ('USER_AKSES_DEFAULT', 'USER_AKSES_AO', 'USER_AKSES_SO')";
                $SQL_parameter = $this->db->query($query_parameter)->result();
                foreach ($SQL_parameter as $SQL_res) :
                    $value_parameter_master[] = $SQL_res->id_menu_master;
                    $value_parameter_sub[] = $SQL_res->id;
                endforeach;
                $value_parameter_master = implode(',', $value_parameter_master);
                $value_parameter_sub = implode(',', $value_parameter_sub);

            elseif ($jabatan === $row_dos->value) :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id IN ('USER_AKSES_DEFAULT', 'USER_AKSES_DOS')";
                $SQL_parameter = $this->db->query($query_parameter)->result();
                foreach ($SQL_parameter as $SQL_res) :
                    $value_parameter_master[] = $SQL_res->id_menu_master;
                    $value_parameter_sub[] = $SQL_res->id;
                endforeach;
                $value_parameter_master = implode(',', $value_parameter_master);
                $value_parameter_sub = implode(',', $value_parameter_sub);

            elseif (in_array($jabatan, $ARR_das)) :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id IN ('USER_AKSES_DEFAULT', 'USER_AKSES_DAS', 'USER_AKSES_DS_SPV')";
                $SQL_parameter = $this->db->query($query_parameter)->result();
                foreach ($SQL_parameter as $SQL_res) :
                    $value_parameter_master[] = $SQL_res->id_menu_master;
                    $value_parameter_sub[] = $SQL_res->id;
                endforeach;
                $value_parameter_master = implode(',', $value_parameter_master);
                $value_parameter_sub = implode(',', $value_parameter_sub);

            elseif (in_array($jabatan, $ARR_ca)) :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id IN ('USER_AKSES_DEFAULT', 'USER_AKSES_CA', 'USER_AKSES_CAA', 'USER_AKSES_OL')";
                $SQL_parameter = $this->db->query($query_parameter)->result();
                foreach ($SQL_parameter as $SQL_res) :
                    $value_parameter_master[] = $SQL_res->id_menu_master;
                    $value_parameter_sub[] = $SQL_res->id;
                endforeach;
                $value_parameter_master = implode(',', $value_parameter_master);
                $value_parameter_sub = implode(',', $value_parameter_sub);

            elseif (in_array($jabatan, $ARR_dsh)) :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id IN ('USER_AKSES_DEFAULT', 'USER_AKSES_CAA', 'USER_AKSES_OL')";
                $SQL_parameter = $this->db->query($query_parameter)->result();
                foreach ($SQL_parameter as $SQL_res) :
                    $value_parameter_master[] = $SQL_res->id_menu_master;
                    $value_parameter_sub[] = $SQL_res->id;
                endforeach;
                $value_parameter_master = implode(',', $value_parameter_master);
                $value_parameter_sub = implode(',', $value_parameter_sub);

            elseif (in_array($jabatan, $ARR_am)) :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id IN ('USER_AKSES_DEFAULT', 'USER_AKSES_CAA', 'USER_AKSES_OL')";
                $SQL_parameter = $this->db->query($query_parameter)->result();
                foreach ($SQL_parameter as $SQL_res) :
                    $value_parameter_master[] = $SQL_res->id_menu_master;
                    $value_parameter_sub[] = $SQL_res->id;
                endforeach;
                $value_parameter_master = implode(',', $value_parameter_master);
                $value_parameter_sub = implode(',', $value_parameter_sub);

            else :
                $query_parameter = "SELECT ms.* FROM $tb_parameter_access p LEFT JOIN `menu_sub` ms ON ms.id=p.value WHERE p.id = 'USER_AKSES_DEFAULT'";
                $SQL_parameter = $this->db->query($query_parameter);
                $value_parameter_master = $SQL_parameter->row()->id_menu_master;
                $value_parameter_sub = $SQL_parameter->row()->id;
            endif;

            $query = "SELECT * FROM `menu_akses` WHERE `id_user`='$user_id' AND `flg_aktif`='1'";
            $SQL = $this->db->query($query);
            if ($SQL->num_rows() > 0) :
                $menu = $SQL->result();
                foreach ($menu as $res) :
                    $arr_master[] = $res->id_menu_master;
                endforeach;
                $arr_unique = array_unique($arr_master);
                $im_master = implode(',', $arr_unique) . ',' . $value_parameter_master;

                foreach ($menu as $res) :
                    $arr_sub[] = $res->id_menu_sub;
                endforeach;
                $arr_unique = array_unique($arr_sub);
                $im_sub = implode(',', $arr_unique) . ',' . $value_parameter_sub;
            else :
                $im_master = $value_parameter_master;
                $im_sub = $value_parameter_sub;
            endif;

            $query = "SELECT * FROM menu_master WHERE id IN ($im_master) AND `flg_aktif`='1'";
            $menu = $this->db->query($query)->result();
            foreach ($menu as $res) :
                $query = "SELECT nama AS nama_sub, `url` AS url_sub FROM `menu_sub` WHERE id IN($im_sub) AND id_menu_master='$res->id' ORDER BY id ASC";
                $sub = $this->db->query($query)->result();
                // $arrMenu[] = array('master_menu'=>strtoupper($res->nama),'icon_menu'=>strtoupper($res->icon));
                $arrMenu['master_menu'] = strtoupper($res->nama);
                $arrMenu['icon_menu'] = strtoupper($res->icon);
                $arrSub = [];
                foreach ($sub as $ress) :
                    $arrSub[] = array(
                        'menu' => strtoupper($ress->nama_sub),
                        'url' => $ress->url_sub,
                    );
                    $arrMenu['sub_menu'] = $arrSub;
                endforeach;
                $dataArr[] = $arrMenu;
            endforeach;
            if (empty($dataArr)) :
                $json_encode = array(
                    "master_menu" => null,
                    "sub_menu" => array(
                        null
                    )
                );
            endif;
        endif;
        $json_encode = json_encode($dataArr);
        // var_dump($json_encode);
        // die();
        $data['json_menu'] = $json_encode;
        $this->load->view('master/menu_akses_user', $data);
    }

    public function get_users()
    {
        $list = $this->model_menu->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) :
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama;
            $row[] = $field->user;
            $row[] = $field->divisi_id;
            $row[] = $field->jabatan;
            $row[] = $field->user_id;
            $data[] = $row;
        endforeach;

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->model_menu->count_all(),
            "recordsFiltered" => $this->model_menu->count_filtered(),
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function get_access()
    {
        $data['idx'] = $this->input->post('idx');
        $query = "SELECT * FROM menu_akses WHERE id_user='$data[idx]'";
        $exec = $this->db->query($query);
        if ($exec->num_rows() > 0) :
            $result = $exec->result();
            foreach ($result as $res) :
                $arr[] = $res->id_menu_sub;
            endforeach;
        else :
            $arr = array();
        endif;
        $data['result_arr'] = $arr;
        $query = "SELECT * FROM menu_sub";
        $data['result'] = $this->db->query($query)->result();
        $data['isValid'] = 0;
        $this->load->view('master/user_access/get_access', $data);
    }

    public function set_access()
    {
        $idx = $this->input->post('idx');
        $menu = $this->input->post('menu');
        if (empty($menu)) $menu = array();
        $query = "SELECT * FROM menu_akses WHERE id_user='$idx'";
        $exec = $this->db->query($query);
        if ($exec->num_rows() > 0) :
            $this->db->where('id_user', $idx);
            $this->db->delete('menu_akses');
            for ($i = 0; $i < count($menu); $i++) :
                $this->db->where('id', $menu[$i]);
                $menu_master = $this->db->get('menu_sub')->row()->id_menu_master;
                $arr = array(
                    'id_user' => $idx,
                    'id_menu_master' => $menu_master,
                    'id_menu_sub' => $menu[$i]
                );
                $this->db->insert('menu_akses', $arr);
            endfor;
        else :
            for ($i = 0; $i < count($menu); $i++) :
                $this->db->where('id', $menu[$i]);
                $menu_master = $this->db->get('menu_sub')->row()->id_menu_master;
                $arr = array(
                    'id_user' => $idx,
                    'id_menu_master' => $menu_master,
                    'id_menu_sub' => $menu[$i]
                );
                $this->db->insert('menu_akses', $arr);
            endfor;
        endif;

        echo json_encode(array('isValid' => 1));
    }

    public function so()
    {
        $this->load->view('master/memorandum_so/data_credit_checking');
    }
    public function ao()
    {
        $data['lokasi_jaminan'] = $this->Model_view_master->tampil_lokasi_jaminan();
        $data['data_collateral'] = $this->Model_view_master->data_collateral();
        $data['jenis_sertifikat'] = $this->Model_view_master->jenis_sertifikat();
        $data['pemilik_jaminan'] = $this->Model_view_master->pemilik_jaminan();
        $this->load->view('master/memorandum_ao/data_credit_checking',$data);
    }
    public function ca()
    {
        $data['jenis_kredit'] = $this->Model_view_master->jenis_kredit();
        $data['lokasi_jaminan'] = $this->Model_view_master->tampil_lokasi_jaminan();
        $data['data_collateral'] = $this->Model_view_master->data_collateral();
        $data['jenis_sertifikat'] = $this->Model_view_master->jenis_sertifikat();
        $data['data_sumber_penghasilan'] =  $this->Model_view_master->sumber_penghasilan();
        $data['data_pemasukan_perbulan'] =  $this->Model_view_master->pemasukan_perbulan();
        $data['data_frek_trans_pemasukan'] =  $this->Model_view_master->frek_trans_pemasukan();
        $data['data_sumber_data_untuk_setoran'] =  $this->Model_view_master->sumber_data_untuk_setoran();
        $data['data_pengeluaran_per_bulan'] =  $this->Model_view_master->pengeluaran_per_bulan();
        $data['data_frek_pengeluaran'] =  $this->Model_view_master->frek_pengeluaran();
        $this->load->view('master/memorandum_ca/data_credit_checking', $data);
    }

    public function das()
    {
        $this->load->view('master/das/data_credit_checking');
    }
    public function ds_spv()
    {
        $this->load->view('master/ds_spv/data_credit_checking');
    }
    public function caa()
    {

        $data['get_user'] = $this->model_menu->getUser();
        $data['cabang'] = $this->model_menu->cabang();
        $this->load->view('master/caa/table', $data);
    }
    public function ol()
    {
        //  $url = 'api/master/mcaa';
        //$result = $this->model_auth->get_data($url);
        //if ($result['code'] == '404') {
        //   $data['result'] = 1;
        //} else {
        //   $data['result'] = $result;
        // }
        //$data['url_table_caa'] = $this->config->item('api_url') . 'api/master/mcaa';

        $data['get_user'] = $this->model_menu->getUser();
        $this->load->view('master/ol/table', $data);
    }
    public function pengajuan_lpdk()
    {
        $this->load->view('master/lpdk/data_pengajuan_lpdk');
    }
    public function lpdk()
    {
        $data['nama_user'] = $this->model_menu->getUser();
        $this->load->view('master/lpdk/data_lpdk', $data);
    }
    public function data_belum_tersedia()
    {
        // $data['nama_user'] = $this->model_menu->getUser();
        $this->load->view('master/ereporting/data_belum_tersedia');
    }
    public function marketing()
    {
        // $data['nama_user'] = $this->model_menu->getUser();
        $this->load->view('master/ereporting/marketing/marketing_reporting');
    }
    public function export()
    {
        $this->load->view('master/export/export_data');
    }
    public function lampiran_debitur()
    {
        $this->load->view('master/lampiran_nasabah/data_lamp_realisasi');
    }
    public function collection()
    {
        // $this->load->view('master/collection/dashboard');
        $this->load->view('master/collection/data_collection');
    }
    public function dashboard_restruktur()
    {
        $data['get_user'] = $this->model_menu->getUser();
        $this->load->view('master/restruktur/dashboard_restruktur', $data);
    }
    public function dashboard_lending()
    {
        $this->load->view('master/lending/dashboard_lending');
    }
    public function dashboard_funnel_lending()
    {
        $this->load->view('master/funnel_lending/dashboard_funnel_lending');
    }
    public function credit_scoring()
    {
        $this->load->view('master/Credit_Scoring/index');
    }
    public function provinsi()
    {
        $this->load->view('master/master/wilayah/provinsi/data_provinsi');
    }
    public function add_provinsi()
    {
        $this->load->view('master/master/wilayah/provinsi/add_provinsi');
    }
    public function kabupaten()
    {
        $this->load->view('master/master/wilayah/kabupaten/data_kabupaten');
    }
    public function add_kabupaten()
    {
        $this->load->view('master/master/wilayah/kabupaten/add_kabupaten');
    }
    public function kecamatan()
    {
        $this->load->view('master/master/wilayah/kecamatan/data_kecamatan');
    }
    public function add_kecamatan()
    {
        $this->load->view('master/master/wilayah/kecamatan/add_kecamatan');
    }
    public function kelurahan()
    {
        $this->load->view('master/master/wilayah/kelurahan/data_kelurahan');
    }
    public function add_kelurahan()
    {
        $this->load->view('master/master/wilayah/kelurahan/add_kelurahan');
    }
    public function asal_data()
    {
        $this->load->view('master/master/asal_data/data_asal_data');
    }
    public function add_asal_data()
    {
        $this->load->view('master/master/asal_data/add_asal_data');
    }
    public function area()
    {
        $this->load->view('master/master/area/data_area');
    }
    public function add_area()
    {
        $this->load->view('master/master/area/add_area');
    }
    public function jenis_pic()
    {
        $this->load->view('master/master/jenis_pic/data_jenis_pic');
    }
    public function add_jenis_pic()
    {
        $this->load->view('master/master/jenis_pic/add_jenis_pic');
    }
    public function pic()
    {
        $this->load->view('master/master/pic/data_pic');
    }
    public function add_pic()
    {
        $this->load->view('master/master/pic/add_pic');
    }
    public function area_pic()
    {
        $this->load->view('master/master/area_pic/data_area_pic');
    }
    public function add_area_pic()
    {
        $this->load->view('master/master/area_pic/add_area_pic');
    }
    public function kantor_cabang()
    {
        $this->load->view('master/master/kantor_cabang/data_kantor_cabang');
    }
    public function add_kantor_cabang()
    {
        $this->load->view('master/master/kantor_cabang/add_kantor_cabang');
    }
    public function menu()
    {
        $this->load->view('master/menu/data_menu');
    }
    public function submenu()
    {
        $this->load->view('master/submenu/data_submenu');
    }
    public function access_user()
    {
        $this->load->view('master/user_access/table_users');
    }
    public function user_access()
    {
        $this->load->view('master/user_access/data_user_access');
    }
    public function dashboard()
    {
        $this->load->view('master/dashboard/dashboard');
    }
    public function add_menu()
    {
        if (isset($_POST['submit'])) {

            $nama            =   $this->input->post('nama');
            $url             =   $this->input->post('url');
            // $icon            =   $this->input->post('icon');
            // $flg_aktif       =   $this->input->post('flg_aktif');
            $data            =   array(
                'nama' => $nama,
                'url' => $url
                // 'icon'=>$icon,
                // 'flg_aktif'=>$flg_aktif
            );
            $this->Model_menu->post($data);
            redirect('menu');
        } else {
            $this->load->view('master');
        }
    }

    public function cek_sertifikat()
    {
        $this->load->view('master/cek_sertifikat/index');
    }

    public function dashboard_target_lending()
    {
        $this->load->view('master/target_lending/target_lending_template');
    }

    public function activity_tele_collection()
    {
        $this->load->view('master/activity/activity_tele_collection');
    }

    public function activity_tele_sales()
    {
        $this->load->view('master/activity/activity_tele_sales');
    }

    public function dashboard_tele()
    {
        $this->load->view('master/tele_center/dashboard_tele');
    }

    public function pipeline_lending()
    {
        $this->load->view('master/cek_sertifikat/pipeline_lending');
    }

    public function activity_sales_officer()
    {
        $this->load->view('master/activity/sales-officer/index');
    }
    public function activity_account_officer()
    {
        $this->load->view('master/activity/account-officer/index');
    }
    public function activity_master()
    {
        $this->load->view('master/activity/master-data/index');
    }
    public function master_target_lending_periodik()
    {
        $this->load->view('master/target-lending-periodik/master-data/index');
    }
    public function dashboard_activity_so_dan_ao()
    {
        $data['get_area'] = $this->model_menu->getArea()->result();
        $this->load->view('master/dashboard-activity-so-dan-ao/index',$data);
    }
    public function activity_head_marketing()
    {
        $this->load->view('master/activity/head-marketing/index');
    }
    public function activity_head_bussiness()
    {
        $this->load->view('master/activity/head-bussines/index');
    }

    public function verifikasi()
    {
        $data['nama_user'] = $this->model_menu->getUser();
        // $tb_parameter_access = TB_PARAMETER_ACCESS;
        $outputs   = $this->model_menu->getUser();
        $user_id   = $outputs['data']['user_id'];
        // $divisi_id = $outputs['data']['divisi_id'];
        // $jabatan   = $outputs['data']['jabatan'];
        $data['user_id'] = $user_id;
        // $data['lokasi_jaminan'] = $this->Model_view_master->tampil_lokasi_jaminan();
        // $data['data_collateral'] = $this->Model_view_master->data_collateral();
        $data['jenis_sertifikat'] = $this->Model_view_master->jenis_sertifikat();
        // $data['data_sumber_penghasilan'] =  $this->Model_view_master->sumber_penghasilan();
        // $data['data_pemasukan_perbulan'] =  $this->Model_view_master->pemasukan_perbulan();
        // $data['data_frek_trans_pemasukan'] =  $this->Model_view_master->frek_trans_pemasukan();
        // $data['data_sumber_data_untuk_setoran'] =  $this->Model_view_master->sumber_data_untuk_setoran();
        // $data['data_pengeluaran_per_bulan'] =  $this->Model_view_master->pengeluaran_per_bulan();
        // $data['data_frek_pengeluaran'] =  $this->Model_view_master->frek_pengeluaran();
        // $data['pendidikan'] = $this->Model_view_master->tampil_data_pendidikan();
        
        $this->load->view('master/verifikasi/verifikasi', $data);
    }

    public function report_verifikasi()
    {
        $this->load->view('master/verifikasi/report_verifikasi');
    }
    

    public function dashboard_collection()
    {
       
        $this->load->view('master/collection/dashboard_collection');
    }

    public function report_data_collection_daily(){
    	$this->load->helper("General_helper"); 
        $this->load->model('model_collection');
        $this->load->view('master/collection/report_data_collection_daily');
    }

    function json_get_hari_kerja(){
        $this->load->model('model_collection');
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $hk = $this->model_collection->get_hari_kerja($tgl)->result();
        header('Content-Type: application/json');
        echo json_encode($hk);
    }

    function json_get_hk_bulan_lalu(){
        $this->load->model('model_collection');
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $hk = $this->model_collection->get_hk_bulan_lalu($tgl)->result();
        header('Content-Type: application/json');
        echo json_encode($hk);
    }

    function json_get_next_hk_bulan_lalu(){
        $this->load->model('model_collection');
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $hk = $this->model_collection->get_next_hk_bulan_lalu($tgl)->result();
        header('Content-Type: application/json');
        echo json_encode($hk);
    }

    function json_data_collection_daily(){
        $this->load->model('model_collection');
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $hk = $this->model_collection->data_collection_daily($tgl)->result();
        header('Content-Type: application/json');
        echo json_encode($hk);
    }

    function master_all_assignment_kolektor(){
        $this->head_params(' -  List','','',
        '<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="'.base_url().'assets/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="'.base_url().'assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="'.base_url().'assets/plugins/select2/js/select2.full.min.js"></script>
        <script type="text/javascript">
            $(function () {
              bsCustomFileInput.init();
            });

              get_dataTable(0);
              
              // get_dataTable(nama_kolektor,nama_kolektor);
               $("#btn_refresh").click(function(){
                get_dataTable(1);
            });
            function get_dataTable(draw){
              
              var kode_kolektor = $("#kode_kolektor option:selected").val();
              var nasabah_id = $("#nasabah_id option:selected").val();
              var kode_area = $("#kode_area option:selected").val();
              var kode_cabang = $("#kode_cabang option:selected").val();

              var table = $("#listData").DataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    // fixedHeader: true,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'assignment_collection/ajax_list_header_master_all_assignment_kolektor",
                        "type": "POST",
                        "data":{
                            "kode_kolektor": kode_kolektor,
                            "nasabah_id" : nasabah_id,
                            "kode_area"    : kode_area,
                            "kode_cabang"  : kode_cabang,
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[100,200,500,1000],[100,200,500,1000]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });



  
    if (draw == 1) {
     table.ajax.reload();
    }
  
}
        </script>
        ');
         $data['params'] = $this->params;
        $this->load->view('master/collection/collector/master_all_assignment_kolektor_view',$data);
    }

    function task_assignment_kolektor(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="'.base_url().'assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="'.base_url().'assets/plugins/select2/js/select2.full.min.js"></script>
        <script type="text/javascript">
            get_dataTable(0);
          $("#btn_refresh").click(function(){
            get_dataTable(1);
          });
        function get_dataTable(draw){
          
            var kode_kolektor = $("#kode_kolektor option:selected").val();
            //var nasabah_id = $("#nasabah_id option:selected").val();
            var no_rekening = $("#no_rekening").val();
            var kode_area = $("#kode_area option:selected").val();
            var kode_cabang = $("#kode_cabang option:selected").val();
            var field_order = $("#field_order option:selected").val();
            var order_by = $("#order_by option:selected").val();
            var table = $("#listData1").DataTable({
                    "searching": true,
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'assignment_collection/ajax_list_task_assignment_kolektor",
                        "type": "POST",
                        "data":{
                            "kode_kolektor": kode_kolektor,
                            "no_rekening"  : no_rekening,
                            "kode_area"    : kode_area,
                            "kode_cabang"  : kode_cabang,
                            "no_rekening"  : no_rekening,
                            "field_order"  : field_order,
                            "order_by"     : order_by
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[100,200,500,1000],[100,200,500,1000]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });



  
                    if (draw == 1) {
                     table.clear().draw();
                     // table.ajax.reload();
                    }
                }
                    function flag_checked(task_code){
                  var url = "'.base_url().'assignment_collection/change_status_task_assignment";
                  $.ajax({
                    url:url,
                    type:"POST",
                    data:{
                      "task_code":task_code
                    },
                    dataType:"JSON",
                    success: function(data){
                      if(data[0].flag_aktif == 0){
                        $(\'#stts_\'+data[0].task_code).text(\'Inactive\');
                      }else{
                        $(\'#stts_\'+data[0].task_code).text(\'Active\');
                      }
                      // alert(data[0].flag_aktif);
                    }
                  });
                }
  

            
        </script>
        ');
         $data['params'] = $this->params;
       $this->load->view('master/collection/collector/task_assignment_kolektor_view',$data); 
    }

    function report_collection_activity(){
        $this->load->view('master/collection/collector/report/report_collection_activity_view');
    }

    function report_history_collection_activity(){
         $this->load->view('master/collection/collector/report/report_history_collection_activity_view');
    }

    function report_performance_collection_activity(){
        $this->load->view('master/collection/collector/report/report_performance_collection_activity_view');
    }
}
