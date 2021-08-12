<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Caa_controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('model_menu'); //getUser()
        $this->load->model('model_auth');
        $this->load->model('Model_caa');
    }

    public function index()
    {
        echo "
        <div class='modal-body text-center'>
        <b style='font-size:20pt'>404</b> <small class='text-secondary'>Halaman tidak ditemukan</small>.<br>
        <a href='javascript:void(0)' class='text-primary' data-dismiss='modal'>Tutup</a>
        </div>
        ";
    }

    function get_data_caa()
    {
        $list = $this->Model_caa->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;

            $id =  $field->id_trans_so;
            $no_so =  $field->nomor_so;
            
            $tb_app = $this->db->query("SELECT tba.user_id, mp.`nama`, mj.`nama_jenis`, tba.`id_trans_so`, tba.status, CASE WHEN tba.`plafon` IS NULL THEN 0 ELSE FORMAT (tba.plafon,0) END AS plafon 
            FROM tb_approval tba
            LEFT JOIN m_pic mp ON mp.`id`=tba.`id_pic`
            LEFT JOIN mj_pic mj ON mj.`id`=mp.`id_mj_pic`
            WHERE tba.`id_trans_so`=$id
            ORDER BY FIELD(mj.`nama_jenis`, 'DSH', 'AM', 'CRM', 'DIR BIS', 'DIR RISK','KEPATUHAN', 'DIR UT')")->result();

            if ($tb_app[0]->status === 'accept' || $tb_app[1]->status === 'accept' || $tb_app[2]->status === 'accept' || $tb_app[3]->status === 'accept' || $tb_app[4]->status === 'accept' || $tb_app[5]->status === 'accept') {
                $nomor_so = '<p style="background-color: #00d807;">' . $no_so . '</p>';
            } else if ($tb_app[0]->status === 'reject' || $tb_app[1]->status === 'reject' || $tb_app[2]->status === 'reject' || $tb_app[3]->status === 'reject' || $tb_app[4]->status === 'reject' || $tb_app[5]->status === 'reject') {
                $nomor_so = '<p style="background-color: #ff3a3b;">' . $no_so . '</p>';
            } else {
                $nomor_so = $no_so;
            }

            if ($tb_app[0]->nama_jenis === 'DSH') {
                if ($tb_app[0]->status === 'accept') {
                    $dsh = '<b class="text-success">' . $tb_app[0]->plafon . '</b>';
                } else {
                    $dsh = $tb_app[0]->plafon;
                }
            } else {
                $dsh = '-';
            }

            if ($tb_app[1]->nama_jenis === 'AM') {
                if ($tb_app[1]->status === 'accept') {
                    $am = '<b class="text-success">' . $tb_app[1]->plafon . '</b>';
                } else if ($tb_app[1]->status === 'reject') {
                    $am = '<b class="text-danger">' . $tb_app[1]->plafon . '</b>';
                } else {
                    $am = $tb_app[1]->plafon;
                }
            } else {
                $am = '-';
            }

            if ($tb_app[2]->nama_jenis === 'CRM') {
                if ($tb_app[2]->status === 'accept') {
                    $crm = '<b class="text-success">' . $tb_app[2]->plafon . '</b>';
                } else if ($tb_app[2]->status === 'reject') {
                    $crm = '<b class="text-danger">' . $tb_app[2]->plafon . '</b>';
                } else {
                    $crm = $tb_app[2]->plafon;
                }
            } else {
                $crm = '-';
            }

            if ($tb_app[3]->nama_jenis === 'DIR BIS') {
                if ($tb_app[3]->status === 'accept') {
                    $dir_bis = '<b class="text-success">' . $tb_app[3]->plafon . '</b>';
                } else if ($tb_app[3]->status === 'reject') {
                    $dir_bis = '<b class="text-danger">' . $tb_app[3]->plafon . '</b>';
                } else {
                    $dir_bis = $tb_app[3]->plafon;
                }
            } else {
                $dir_bis = '-';
            }

            if ($tb_app[4]->nama_jenis === 'DIR RISK') {
                if ($tb_app[4]->status === 'accept') {
                    $dir_risk = '<b class="text-success">' . $tb_app[4]->plafon . '</b>';
                } else if ($tb_app[4]->status === 'reject') {
                    $dir_risk = '<b class="text-danger">' . $tb_app[4]->plafon . '</b>';
                } else {
                    $dir_risk = $tb_app[4]->plafon;
                }
            } else {
                $dir_risk = '-';
            }

 if ($tb_app[5]->nama_jenis === 'KEPATUHAN') {
                if ($tb_app[5]->status === 'accept') {
                    $kepatuhan = '<b class="text-success">' . $tb_app[5]->plafon . '</b>';
                } else if ($tb_app[5]->status === 'reject') {
                    $kepatuhan = '<b class="text-danger">' . $tb_app[5]->plafon . '</b>';
                } else {
                    $kepatuhan = $tb_app[5]->plafon;
                }
            } else {
                $kepatuhan = '-';
            }

            if ($tb_app[6]->nama_jenis === 'DIR UT') {
                if ($tb_app[6]->status === 'accept') {
                    $dir_ut = '<b class="text-success">' . $tb_app[6]->plafon . '</b>';
                } else if ($tb_app[6]->status === 'reject') {
                    $dir_ut = '<b class="text-danger">' . $tb_app[6]->plafon . '</b>';
                } else {
                    $dir_ut = $tb_app[6]->plafon;
                }
            } else {
                $dir_ut = '-';
            }

            $url = "index.php/report/Memo_caa";

            $row = array();

            $row[] = '<form method="post" target="_blank" action="' . $url . '"> <button type="button"  class="btn btn-info btn-sm edit"   data-target="#update" data="' . $id . '"><i class="fas fa-check"></i></button>
            <input type="hidden" name ="id" value="' . $id . '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $row[] = $nomor_so;
            $row[] = $field->cabang;
            $row[] = $field->nama_debitur;
            $row[] = $field->plafon;
            $row[] = $field->tenor;
            $row[] = $field->plafon_recom_ao;
            $row[] = $field->plafon_recom_ca;
            $row[] = $dsh;
            $row[] = $am;
            $row[] = $crm;
            $row[] = $dir_bis;
            $row[] = $dir_risk;
 $row[] = $kepatuhan;
            $row[] = $dir_ut;
            // $row[] = '<form method="post" target="_blank" action="' . $url . '"> <button type="button"  class="btn btn-info btn-sm edit"   data-target="#update" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
            // <button type="button" class="btn btn-warning btn-sm edit" onclick="click_detail()" data-target="#update" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
            // <input type="hidden" name ="id" value="' . $id . '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $data[] = $row;
            // print_r($tb_app);
        }
        // die;

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_caa->count_all(),
            "recordsFiltered" => $this->Model_caa->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

    public function pengajuan_caa()
    {
        $url = 'api/master/mcaa';
        $result = $this->model_auth->get_data($url);
        $data['result'] = $result;
        // print_r($result);
        $this->load->view('master/caa/table_pengajuan', $data);
    }

    public function pengajuan_caa_ca()
    {
        $id     = $this->input->post('idx');
        $url    = "api/master/mcaa/$id";
        $auth   = $this->model_auth;
        $result = $auth->get_data($url);
        if ($result['code'] == 200) :

            $data['url_api'] = $this->config->item('api_url');
            $data['url_img'] = $this->config->item('img_url');
            $data['id']      = $result['data']['id_trans_so'];
            $data['cabang']      = $result['data']['cabang']['nama'];

            $data['pengajuan_nama']     = $result['data']['data_debitur']['nama_lengkap'];
            $data['pengajuan_lamp']     = '';
            $data['pengajuan_tenor']    = $result['data']['pengajuan']['tenor'];
            $data['pengajuan_plafon']   = $result['data']['pengajuan']['plafon'];

            $data['agunan_tanah']       = $result['data']['data_agunan']['agunan_tanah'];
            $data['agunan_kendaraan']   = $result['data']['data_agunan']['agunan_kendaraan'];

            $data['rekomendasi_ao_nama']    = $result['data']['transaksi']['ao']['nama'];
            $data['rekomendasi_ao_plafon']  = $result['data']['rekomendasi_ao']['plafon_kredit'];
            $data['rekomendasi_ao_tenor']   = $result['data']['rekomendasi_ao']['jangka_waktu'];
            $data['rekomendasi_ao_notes']   = $result['data']['rekomendasi_ao']['analisa_ao'];

            $data['rekomendasi_ca_nama']    = $result['data']['transaksi']['ca']['nama'];
            $data['rekomendasi_ca_plafon']  = $result['data']['rekomendasi_pinjaman']['recom_nilai_pinjaman'];
            $data['rekomendasi_ca_tenor']   = $result['data']['rekomendasi_pinjaman']['recom_tenor'];
            $data['rekomendasi_ca_notes']   = $result['data']['rekomendasi_pinjaman']['note_recom'];

            $data['info_analisa_cc'] = $result['data']['info_analisa_cc'];

            // $data['biaya_pemasukan']    = $result['data']['pendapatan_usaha']['pemasukan']['total'];
            // $data['biaya_angsuran']     = $result['data']['pendapatan_usaha']['pengeluaran']['angsuran'];
            // $data['biaya_pengeluaran']  = $result['data']['pendapatan_usaha']['pengeluaran']['total'];
            // $data['biaya_penghasilan']  = $result['data']['pendapatan_usaha']['penghasilan_bersih'];

            $data['kuantitatif_ttl_pendapatan']     = $result['data']['ringkasan_analisa']['kuantitatif_ttl_pendapatan'];
            $data['kuantitatif_ttl_pengeluaran']    = $result['data']['ringkasan_analisa']['kuantitatif_ttl_pengeluaran'];
            $data['kuantitatif_pendapatan_bersih']  = $result['data']['ringkasan_analisa']['kuantitatif_pendapatan_bersih'];
            $data['kuantitatif_angsuran']   = $result['data']['ringkasan_analisa']['kuantitatif_angsuran'];
            $data['kuantitatif_ltv']        = $result['data']['ringkasan_analisa']['kuantitatif_ltv'];
            $data['kuantitatif_dsr']        = $result['data']['ringkasan_analisa']['kuantitatif_dsr'];
            $data['kuantitatif_idir']       = $result['data']['ringkasan_analisa']['kuantitatif_idir'];
            $data['kuantitatif_hasil']      = $result['data']['ringkasan_analisa']['kuantitatif_hasil'];

            $this->load->view('master/caa/pengajuan_caa', $data);
        else :
            // <script>alert('$result[message]');</script>
            echo "
            <div class='modal-header'>
            <h5 class='modal-title'>$result[message]</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>
            ";
        endif;
    }

    public function get_teamCAA()
    {
        $cabang = $this->input->post('cabang');
        $plafon_rekomen_ca = $this->input->post('plafon_rekomendasi_ca');
        $plafon_pengajuan = $this->input->post('plafon');
        $nst = $this->input->post('nst');
        $get_teamCAA = $this->model_auth->get_data('/api/master/team_caa');
        $teamCAA = $get_teamCAA['data'];
        $res = [];
        $arr_dsh = [];
        $arr_am = [];
        $dirbis_cuti = false;
        $dirrisk_cuti = false;
        $am_cuti = false;
        $dsh_cuti = false;
        $dsh_tgl_sk = false;
        if($nst == 'TIDAK') {
            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DSH' && $teamCAA[$i]['flg_aktif'] == true) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($arr_dsh, $teamCAA[$i]['plafon_max']);
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'], 'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                    }
                }

                // get status cuti DSH dan DSH approval naik 1 tingkat ke AM
                if ($teamCAA[$i]['jabatan'] == 'DSH') {
                    if($teamCAA[$i]['cabang'] == $cabang) {
                        if($teamCAA[$i]['flg_cuti'] == 1 ) {
                            $dsh_cuti = true;
                        } else if($teamCAA[$i]['tgl_sk'] == null) {
                            $dsh_tgl_sk = true;
                        }
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'AM') {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        if($dsh_cuti) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'], 'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                        } else if($dsh_tgl_sk) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'], 'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                        }
                    }
                }
                // end get cuti dsh
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'AM') {
                    if ($plafon_pengajuan <= $teamCAA[$i]['plafon_max'] || $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if($plafon_pengajuan >= $arr_dsh[0]) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($arr_am, $teamCAA[$i]['plafon_max']);
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                            }
                        } else if($plafon_rekomen_ca == 0) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                            }
                        }
                    } else if ($plafon_rekomen_ca == 0) {
                        // if($plafon_pengajuan <= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                        }
                    }
                }

                // get status cuti AM dan AM approval naik 1 tingkat ke dir bis
                if ($teamCAA[$i]['jabatan'] == 'AM') {
                        if($teamCAA[$i]['cabang'] == $cabang) {
                            if($teamCAA[$i]['flg_cuti'] == 1 ) {
                                $am_cuti = true;
                            } else if($teamCAA[$i]['tgl_sk'] == null) {
                                $am_cuti = true;
                            }
                        }
                }

                if($teamCAA[$i]['jabatan'] == 'CRM' && $am_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'DIR BIS' && $am_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                    }
                }
                // end get status cuti AM
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'CRM') {
                    if($arr_am) {
                        if ($plafon_pengajuan >= $arr_am[0]  || $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                            }
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'KEPATUHAN') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang && $teamCAA[$i]['user_id'] != 207) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                    if($arr_am) {
                        if ($plafon_pengajuan > $arr_am[0]  || $plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                            }
                        }
                    }
                }

                // get status cuti DIR BIS dan AM approval naik 1 tingkat ke dir risk
                if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                    if($teamCAA[$i]['cabang'] == $cabang) {
                        if($teamCAA[$i]['flg_cuti'] == 1 ) {
                            $dirbis_cuti = true;
                        } else if($teamCAA[$i]['tgl_sk'] == null) {
                            $dirbis_cuti = true;
                        }
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'DIR RISK' && $dirbis_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                    }
                }
                // end get status cuti dir bis
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti'],'tgl_sk' => $teamCAA[$i]['tgl_sk']));
                        }
                    }
                }

                // get status cuti dir risk dan AM approval naik 1 tingkat ke dir ut
                if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                    if($teamCAA[$i]['cabang'] == $cabang) {
                        if($teamCAA[$i]['flg_cuti'] == 1 ) {
                            $dirrisk_cuti = true;
                        }
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'DIR UT' && $dirrisk_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                    }
                }
                // end get status cuti dir risk
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR UT') {
                    if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                        }
                    }
                }
            }

        } else {
            $nst_struktur = $this->input->post('child');
            $data = implode(',', $nst_struktur);
            $query = $this->Model_caa->get_mj_pic($data);
            for($i = 0; $i < count($teamCAA); $i++) {
                foreach($query->result() as $row) {
                    if ($teamCAA[$i]['jabatan'] == $row->nama_jenis && $teamCAA[$i]['flg_aktif'] == true) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            // array_push($arr_dsh, $teamCAA[$i]['plafon_max']);
                            // $res[] = $teamCAA[$i]['id'];
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                        }

                        // get status cuti AM dan AM approval naik 1 tingkat ke dir bis
                        if ($row->nama_jenis == 'AM') {
                            if($teamCAA[$i]['cabang'] == $cabang) {
                                if($teamCAA[$i]['flg_cuti'] == 1 ) {
                                    $am_cuti = true;
                                }
                            }
                        }

                        if($teamCAA[$i]['jabatan'] == 'CRM' && $am_cuti) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }

                        if($teamCAA[$i]['jabatan'] == 'DIR BIS' && $am_cuti) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }
                        // get status cuti AM

                        // get status cuti dir bis dan naik 1 tingkat ke dir risk
                        if ($row->nama_jenis == 'DIR BIS') {
                            if($teamCAA[$i]['cabang'] == $cabang) {
                                if($teamCAA[$i]['flg_cuti'] == 1 ) {
                                    $dirbis_cuti = true;
                                }
                            }
                        }
        
                        if($teamCAA[$i]['jabatan'] == 'DIR RISK' && $dirbis_cuti) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }
                        // end get status cuti dir bis
                    }
                }
            }
        }
        
        echo json_encode($res);
    }

    public function get_teamCAA_bkp2()
    {
        $cabang = $this->input->post('cabang');
        $plafon_rekomen_ca = $this->input->post('plafon_rekomendasi_ca');
        $plafon_pengajuan = $this->input->post('plafon');
        $nst = $this->input->post('nst');
        $get_teamCAA = $this->model_auth->get_data('/api/master/team_caa');
        $teamCAA = $get_teamCAA['data'];
        $res = [];
        $arr_dsh = [];
        $arr_am = [];
        if($nst == 'TIDAK') {
            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DSH' && $teamCAA[$i]['flg_aktif'] == true) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($arr_dsh, $teamCAA[$i]['plafon_max']);
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                    }
                }

                // get status cuti DSH dan DSH approval naik 1 tingkat ke AM
                if ($teamCAA[$i]['jabatan'] == 'DSH') {
                    if($teamCAA[$i]['cabang'] == $cabang) {
                        if($teamCAA[$i]['flg_cuti'] == 1 ) {
                            $dsh_cuti = true;
                        }
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'AM' && $dsh_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                    }
                }
                // end get cuti dsh
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'AM') {
                    if ($plafon_pengajuan <= $teamCAA[$i]['plafon_max'] || $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if($plafon_pengajuan >= $arr_dsh[0]) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($arr_am, $teamCAA[$i]['plafon_max']);
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        } else if($plafon_rekomen_ca == 0) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }
                    } else if ($plafon_rekomen_ca == 0) {
                        // if($plafon_pengajuan <= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                        }
                    }
                }

                // get status cuti AM dan AM approval naik 1 tingkat ke dir bis
                if ($teamCAA[$i]['jabatan'] == 'AM') {
                        if($teamCAA[$i]['cabang'] == $cabang) {
                            if($teamCAA[$i]['flg_cuti'] == 1 ) {
                                $am_cuti = true;
                            }
                        }
                }

                if($teamCAA[$i]['jabatan'] == 'CRM' && $am_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'DIR BIS' && $am_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                    }
                }
                // end get status cuti AM
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'CRM') {
                    if($arr_am[0] != null) {
                        if ($plafon_pengajuan >= $arr_am[0]  || $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'KEPATUHAN') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang && $teamCAA[$i]['user_id'] != 207) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                    if($arr_am[0] != null) {
                        if ($plafon_pengajuan > $arr_am[0]  || $plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }
                    }
                }

                // get status cuti DIR BIS dan AM approval naik 1 tingkat ke dir risk
                if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                    if($teamCAA[$i]['cabang'] == $cabang) {
                        if($teamCAA[$i]['flg_cuti'] == 1 ) {
                            $dirbis_cuti = true;
                        }
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'DIR RISK' && $dirbis_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                    }
                }
                // end get status cuti dir bis
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                        }
                    }
                }

                // get status cuti dir risk dan AM approval naik 1 tingkat ke dir ut
                if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                    if($teamCAA[$i]['cabang'] == $cabang) {
                        if($teamCAA[$i]['flg_cuti'] == 1 ) {
                            $dirrisk_cuti = true;
                        }
                    }
                }

                if($teamCAA[$i]['jabatan'] == 'DIR UT' && $dirrisk_cuti) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                    }
                }
                // end get status cuti dir risk
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR UT') {
                    if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                        }
                    }
                }
            }

        } else {
            $nst_struktur = $this->input->post('child');
            $data = implode(',', $nst_struktur);
            $query = $this->Model_caa->get_mj_pic($data);
            for($i = 0; $i < count($teamCAA); $i++) {
                foreach($query->result() as $row) {
                    if ($teamCAA[$i]['jabatan'] == $row->nama_jenis && $teamCAA[$i]['flg_aktif'] == true) {
                        if($teamCAA[$i]['jabatan'] == 'DSH') {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($arr_dsh, $teamCAA[$i]['plafon_max']);
                                // $res[] = $teamCAA[$i]['id'];
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }

                        } else if ($teamCAA[$i]['jabatan'] == 'AM') {
                            if ($plafon_pengajuan <= $teamCAA[$i]['plafon_max'] || $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                                if($plafon_pengajuan >= $arr_dsh[0]) {
                                    array_push($arr_am, $teamCAA[$i]['plafon_max']);
                                    if ($teamCAA[$i]['cabang'] == $cabang) {
                                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                    }
                                } else if($plafon_rekomen_ca == 0) {
                                    if ($teamCAA[$i]['cabang'] == $cabang) {
                                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                    }
                                }
                            } else if ($plafon_rekomen_ca == 0) {
                                if ($teamCAA[$i]['cabang'] == $cabang) {
                                    array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                }
                            }
                        } else {
                            if ($teamCAA[$i]['jabatan'] == 'CRM') {
                                if($arr_am[0] != null) {
                                    if ($plafon_pengajuan >= $arr_am[0]  || $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                                        if ($teamCAA[$i]['cabang'] == $cabang) {
                                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                        }
                                    }
                                }
                            }

                            if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                                if($arr_am[0] != null) {
                                    if ($plafon_pengajuan >= $arr_am[0]  || $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                                        if ($teamCAA[$i]['cabang'] == $cabang) {
                                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                        }
                                    }
                                }
                            }

                            if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                                if($arr_am[0] != null) {
                                    if ($plafon_pengajuan >= $arr_am[0] && $plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                                        if ($teamCAA[$i]['cabang'] == $cabang) {
                                            array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                        }
                                    }
                                }
                            }

                            if ($teamCAA[$i]['jabatan'] == 'DIR UT') {
                                if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                                    if ($teamCAA[$i]['cabang'] == $cabang) {
                                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                    }
                                }
                            }

                            if ($teamCAA[$i]['jabatan'] == 'KEPATUHAN') {
                                if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                                    if ($teamCAA[$i]['cabang'] == $cabang) {
                                        array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' =>$teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                                    }
                                }
                            }
                        }

                        // get status cuti AM dan AM approval naik 1 tingkat ke dir bis
                        if ($row->nama_jenis == 'AM') {
                            if($teamCAA[$i]['cabang'] == $cabang) {
                                if($teamCAA[$i]['flg_cuti'] == 1 ) {
                                    $am_cuti = true;
                                }
                            }
                        }

                        if($teamCAA[$i]['jabatan'] == 'CRM' && $am_cuti) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }

                        if($teamCAA[$i]['jabatan'] == 'DIR BIS' && $am_cuti) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }
                        // get status cuti AM

                        // get status cuti dir bis dan naik 1 tingkat ke dir risk
                        if ($row->nama_jenis == 'DIR BIS') {
                            if($teamCAA[$i]['cabang'] == $cabang) {
                                if($teamCAA[$i]['flg_cuti'] == 1 ) {
                                    $dirbis_cuti = true;
                                }
                            }
                        }
        
                        if($teamCAA[$i]['jabatan'] == 'DIR RISK' && $dirbis_cuti) {
                            if ($teamCAA[$i]['cabang'] == $cabang) {
                                array_push($res,array('id' => $teamCAA[$i]['id'], 'jabatan' => $teamCAA[$i]['jabatan'], 'flg_cuti' => $teamCAA[$i]['flg_cuti']));
                            }
                        }
                        // end get status cuti dir bis
                    }
                }
            }
        }
        
        echo json_encode($res);
    }

    public function get_teamCAA_bkp()
    {
        $nst_struktur = $this->input->post('child');
        $plafon_rekomen_ca = $this->input->post('plafon_rekomendasi_ca');
        $plafon_pengajuan = $this->input->post('plafon');
        $nst = $this->input->post('nst');
        $cabang = $this->input->post('cabang');

        $get_teamCAA = $this->model_auth->get_data('/api/master/team_caa');
        $teamCAA = $get_teamCAA['data'];
        echo "<div class='row'>";
        if ($nst == 'TIDAK') :

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DSH' && $teamCAA[$i]['flg_aktif'] == true) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        echo "
                        <div class='col-md-4'>
                        <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                        <small>" . $teamCAA[$i]['jabatan'] . "</small>
                        </div>
                        ";
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DOO MGR') {
                    if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'AM') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        // if($plafon_pengajuan <= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    } else if ($plafon_rekomen_ca == 0) {
                        // if($plafon_pengajuan <= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'CRM') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'KEPATUHAN') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR UT') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

        else :
            $ya_dsh = 0;
            $ya_doo_mgr = 0;
            $ya_am = 0;
            $ya_crm = 0;
            $ya_kepatuhan = 0;
            $ya_dir_bis = 0;
            $ya_dir_risk = 0;
            $ya_dir_ut = 0;

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DSH') {
                    // if($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                    if ($teamCAA[$i]['cabang'] == $cabang) {
                        $ya_dsh = 1;
                    }
                    // }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DOO MGR') {
                    if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            $ya_doo_mgr = 1;
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'AM') {
                    if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            $ya_am = 1;
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'CRM') {
                    if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            $ya_crm = 1;
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'KEPATUHAN') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            $ya_kepatuhan = 1;
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                    if ($plafon_pengajuan >= $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            $ya_dir_bis = 1;
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            $ya_dir_risk = 1;
                        }
                    }
                }
            }

            for ($i = 0; $i < count($teamCAA); $i++) {
                if ($teamCAA[$i]['jabatan'] == 'DIR UT') {
                    if ($plafon_pengajuan > $teamCAA[$i]['plafon_max']) {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            $ya_dir_ut = 1;
                        }
                    }
                }
            }

            $getParent = $this->db->query("SELECT * FROM params_master_penyimpangan
            WHERE flg_aktif = 1 AND parent_penyimpan != 0")->result();
            $arr_nst_bis = array();
            $arr_nst_risk = array();
            foreach($getParent as $getParents) {
                array_push($arr_nst_bis,$getParents->nama);
                array_push($arr_nst_risk,$getParents->nama);
            }

            $nst_struktur = $this->input->post('nst_struktur');
            $arr_nst_am = array('');
            $arr_nst_crm = array();
            // $arr_nst_bis = array('STRUKTUR KREDIT', 'LTV', 'TENOR', 'BD150', 'KTA', 'PASTDUE RO', 'BIAYA PROVISI', 'BIAYA KREDIT', 'BIAYA ADMIN', 'BD50', 'PROFESI BERESIKO', 'JAMINAN DI PERKAMPUNGAN');
            // $arr_nst_risk = array('LTV', 'TENOR', 'BD150', 'KTA', 'PASTDUE RO', 'BIAYA PROVISI', 'BIAYA KREDIT', 'BIAYA ADMIN', 'BD50', 'PROFESI BERESIKO', 'JAMINAN DI PERKAMPUNGAN', 'STRUKTUR KREDIT');

            if ($nst_struktur) {
                foreach ($nst_struktur as $nst) {
                    if (in_array($nst, $arr_nst_am)) {
                        $ya_dsh = 1;
                        $ya_doo_mgr = 1;
                        $ya_am = 1;
                    }
                }

                foreach ($nst_struktur as $nst) {
                    if (in_array($nst, $arr_nst_crm)) {
                        $ya_dsh = 1;
                        $ya_doo_mgr = 1;
                        $ya_am = 1;
                        $ya_crm = 1;
                    }
                }

                foreach ($nst_struktur as $nst) {
                    if (in_array($nst, $arr_nst_bis)) {
                        $ya_dsh = 1;
                        $ya_doo_mgr = 1;
                        $ya_am = 1;
                        $ya_crm = 1;
                        $ya_dir_bis = 1;
                    }
                }

                foreach ($nst_struktur as $nst) {
                    if (in_array($nst, $arr_nst_risk)) {
                        $ya_dsh = 1;
                        $ya_doo_mgr = 1;
                        $ya_am = 1;
                        $ya_crm = 1;
                        $ya_dir_risk = 1;
                    }
                }
            }

            if ($ya_dsh == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'DSH') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            if ($ya_doo_mgr == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'DOO MGR') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }
            // if($teamCAA[$i]['cabang'] == $cabang) {
            //     echo "
            //         <div class='col-md-4'>
            //             <input type='checkbox' value='".$teamCAA[$i]['id']."' name='team_caa[]' checked disabled>
            //             <small>".$teamCAA[$i]['jabatan']."</small>
            //         </div>
            //     ";
            // }
            if ($ya_am == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'AM') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            if ($ya_crm == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'CRM') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            if ($ya_kepatuhan == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'KEPATUHAN') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            if ($ya_dir_bis == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'DIR BIS') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            if ($ya_dir_risk == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'DIR RISK') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }

            if ($ya_dir_ut == 1) {
                for ($i = 0; $i < count($teamCAA); $i++) {
                    if ($teamCAA[$i]['jabatan'] == 'DIR UT') {
                        if ($teamCAA[$i]['cabang'] == $cabang) {
                            echo "
                            <div class='col-md-4'>
                            <input type='checkbox' value='" . $teamCAA[$i]['id'] . "' name='team_caa[]' checked disabled>
                            <small>" . $teamCAA[$i]['jabatan'] . "</small>
                            </div>
                            ";
                        }
                    }
                }
            }
        endif;
        echo "</div>";
    }

    public function trans_caa_detail()
    {

        $data['nama_user'] = $this->model_menu->getUser();

        $id = $this->input->post('idx');
        $outputs = $this->model_menu->getUser();
        $user_id = $outputs['data']['user_id'];
        $status_crm = [];

        if ($user_id === 2186589) {
            $status_crm = $this->db->query("SELECT status_crm FROM tb_approval WHERE id_trans_so = $id AND user_id = 1034207")->result();
        }

        if(count($status_crm) > 0) {
            $data['status_crm'] = $status_crm[0]->status_crm;
        }        
        $pic_id = "SELECT * FROM m_pic where user_id = '$user_id' ";
        $data_pic = $this->db->query($pic_id)->result();
        foreach ($data_pic as $data1) {
            $data['id_mj_pic'] = $data1->id_mj_pic;
            $data['tgl_sk'] = $data1->tgl_sk;
            if (empty($data['tgl_sk'] = $data1->tgl_sk)) {
                $data['tgl_sk'] = null;
            }
        }

        $query_cabang = "SELECT b.nama as cabang FROM trans_so as a LEFT JOIN mk_cabang as b on a.id_cabang=b.id WHERE a.id='$id'";
        $cabang = $this->db->query($query_cabang)->result();
        foreach ($cabang as $data1) {
            $data['cabang'] = $data1->cabang;
        }

        $url = 'api/master/mcaa/' . $id . '/detail';
        $auth = $this->model_auth;
        $result = $this->model_auth->get_data($url);
        if ($result['code'] == 200) :
            $data['nama_debitur'] = $result['data']['data_debitur']['nama_lengkap'];
            $penyimpangan = $result['data']['penyimpangan'];
            $data['penyimpangan_caa'] = $result['data']['data_penyimpangan'];

            if (isset($penyimpangan['biaya_provisi']) === null && isset($penyimpangan['biaya_admin']) === null && isset($penyimpangan['biaya_kredit']) === null && isset($penyimpangan['ltv']) === null && isset($penyimpangan['tenor']) === null && isset($penyimpangan['past_due_ro']) === null && isset($penyimpangan['struktur_kredit']) === null && isset($penyimpangan['kartu_pinjaman']) === null && isset($penyimpangan['sertifikat_diatas_50']) === null && isset($penyimpangan['sertifikat_diatas_150']) === null && isset($penyimpangan['profesi_beresiko']) === null && isset($penyimpangan['jaminan_kp_tenor_48']) === null) {
                $data['penyimpangan'] = 'TIDAK';
            } else {
                $data['penyimpangan'] = 'ADA';
                if($penyimpangan['param_penyimpangan'] === null) {
                    if ($penyimpangan['biaya_provisi'] === '1') {
                        $biaya_provisi = 'BIAYA PROVISI | ';
                    } else {
                        $biaya_provisi = '';
                    }
    
                    if ($penyimpangan['biaya_admin'] === '1') {
                        $biaya_admin = 'BIAYA ADMIN | ';
                    } else {
                        $biaya_admin = '';
                    }
    
                    if ($penyimpangan['biaya_kredit'] === '1') {
                        $biaya_kredit = 'BIAYA KREDIT | ';
                    } else {
                        $biaya_kredit = '';
                    }
    
                    if ($penyimpangan['ltv'] === '1') {
                        $ltv = 'LTV | ';
                    } else {
                        $ltv = '';
                    }
    
                    if ($penyimpangan['tenor'] === '1') {
                        $tenor = 'TENOR | ';
                    } else {
                        $tenor = '';
                    }
    
                    if ($penyimpangan['kartu_pinjaman'] === '1') {
                        $kartu_pinjaman = 'KTA / Kartu Kredit / (Sertifikat/BPKB, Coll >=2, BD <50 Jt) | ';
                    } else {
                        $kartu_pinjaman = '';
                    }
    
                    if ($penyimpangan['sertifikat_diatas_50'] === 1) {
                        $sertifikat_diatas_50 = 'Sertifikat/BPKB, Coll >=2, BD 50 s/d 150 Jt | ';
                    } else {
                        $sertifikat_diatas_50 = '';
                    }
    
                    if ($penyimpangan['sertifikat_diatas_150'] === '1') {
                        $sertifikat_diatas_150 = 'Sertifikat/BPKB, Coll >=2, BD >150 Jt | ';
                    } else {
                        $sertifikat_diatas_150 = '';
                    }
    
                    if ($penyimpangan['profesi_beresiko'] === '1') {
                        $profesi_beresiko = 'Profesi Beresiko | ';
                    } else {
                        $profesi_beresiko = '';
                    }
    
                    if ($penyimpangan['jaminan_kp_tenor_48'] === '1') {
                        $jaminan_kp_tenor_48 = 'Jaminan Di Perkampungan Tenor 48 Bulan | ';
                    } else {
                        $jaminan_kp_tenor_48 = '';
                    }
    
                    if ($penyimpangan['struktur_kredit'] === '1') {
                        $struktur_kredit = 'STRUKTUR KREDIT | ';
                    } else {
                        $struktur_kredit = '';
                    }
    
                    if ($penyimpangan['past_due_ro'] === '1') {
                        $pastdue_ro = 'PASTDUE RO | ';
                    } else {
                        $pastdue_ro = '';
                    }
                } else {
                    $param_penyimpangan = $penyimpangan['param_penyimpangan'];
                    $params_penyimpangan_caa = str_replace(',',' | ', $param_penyimpangan);
                }
                
            }
            $data['hasil_nst'] = $biaya_provisi . $biaya_admin . $biaya_kredit . $ltv . $tenor . $kartu_pinjaman . $sertifikat_diatas_50 . $sertifikat_diatas_150 . $profesi_beresiko . $jaminan_kp_tenor_48 . $struktur_kredit . $pastdue_ro .$params_penyimpangan_caa;


            for ($i = 0; $i < count($result['data']['team_caa']); $i++) {
                $sort_urutan_jabatan = [
                    'urutan_jabatan' => $result['data']['team_caa'][$i]['urutan_jabatan'],
                    'jabatan' => $result['data']['team_caa'][$i]['jabatan'],
                    'user_id' => $result['data']['team_caa'][$i]['user_id'],
                    'id_pic' => $result['data']['team_caa'][$i]['id_pic'],
                ];
                $arr_sort_urutan_jabatan[] = $sort_urutan_jabatan;
            }
            if (!empty($arr_sort_urutan_jabatan)) {
                rsort($arr_sort_urutan_jabatan);

                for ($i = 0; $i < count($arr_sort_urutan_jabatan); $i++) {
                    $arr_tcaa[] = $arr_sort_urutan_jabatan[$i]['jabatan'];
                    $arr_tcaa_id[] = $arr_sort_urutan_jabatan[$i]['user_id'];
                    $arr_tcaa_pic[] = $arr_sort_urutan_jabatan[$i]['id_pic'];
                }

                $data['team_caa'] = implode(',', $arr_tcaa);
            } else {
                $arr_sort_urutan_jabatan = null;
                $arr_tcaa = null;
                $arr_tcaa_id = null;
                $arr_tcaa_pic = null;
                $data['team_caa'] = null;
            }


            // print_r($arr_tcaa);die();
            $data['rekomendasi_ao'] = number_format($result['data']['rekomendasi_ao']['plafon'], 0, '', '.') . "-" . $result['data']['rekomendasi_ao']['tenor'] . " Bulan";
            $data['catatan_ao'] = $result['data']['rekomendasi_ao']['catatan']['analisa_ao'];
            $data['rekomendasi_ca'] = number_format($result['data']['rekomendasi_pinjaman']['recom_nilai_pinjaman'], 0, '', '.') . "-" . $result['data']['rekomendasi_pinjaman']['recom_tenor'] . " Bulan";
            $data['catatan_ca'] = $result['data']['rekomendasi_pinjaman']['note_recom'];
            $data['jenis_pinjaman'] = $result['data']['pengajuan']['jenis_pinjaman'];
            $data['plafon'] = $result['data']['pengajuan']['plafon'];
            $data['tenor'] = $result['data']['pengajuan']['tenor'];
            $data['suku_bunga'] = $result['data']['rekomendasi_ca']['suku_bunga'];
            $data['pembayaran_bunga'] = $result['data']['rekomendasi_ca']['pembayaran_bunga'];
            $data['rekomendasi_angsuran'] = $result['data']['rekomendasi_ca']['rekomendasi_angsuran'];

            $data['agunan_tanah'] = $result['data']['data_agunan']['agunan_tanah'];
            $data['agunan_kendaraan'] = $result['data']['data_agunan']['agunan_kendaraan'];
            //approval
            $plafon_ca = $result['data']['rekomendasi_ca']['plafon'];
            $tenor_ca = $result['data']['rekomendasi_ca']['tenor'];
            if (!empty($plafon_ca)) {
                $data['plafon_ca'] = $plafon_ca;
                $data['tenor_ca'] = $tenor_ca;
            } else {
                $data['plafon_ca'] = 0;
                $data['tenor_ca'] = 0;
            }

            if (!empty($arr_tcaa_id)) {
                $jumlah_team_caa = count($arr_tcaa_id);
                $posisi_user_id = array_search($user_id, $arr_tcaa_id);
                $posisi_tambah_satu = $posisi_user_id + 1;
            } else {
                $jumlah_team_caa = null;
                $posisi_user_id = null;
                $posisi_tambah_satu = null;
            }

            if ($result['data']['data_penyimpangan'] === 'ADA') {
                if (end($arr_tcaa_id) === $user_id) {
                    $data['status_app'] = 'accept';
                    $data['forward_to'] = null;
                    $data['tujuan_forward'] = null;
                } else {
                    $data['status_app'] = 'forward';
                    $data['forward_to'] = " To " . $arr_tcaa[$posisi_tambah_satu];
                    $data['tujuan_forward'] = $arr_tcaa_id[$posisi_tambah_satu];
                    $tujuan_pic =  $arr_tcaa_id[$posisi_tambah_satu];

                    $this->load->database('db2', TRUE);
                    $user_data = "SELECT a.email, a.nama FROM dpm_online.user AS a WHERE a.user_id= '$tujuan_pic'";
                    $data_pic_forward = $this->db->query($user_data)->result();
                    foreach ($data_pic_forward as $data2) {
                        $data['email'] = $data2->email;
                        $data['nama'] = $data2->nama;
                    }
                }
            } else {
                if ($jumlah_team_caa === $posisi_tambah_satu) {
                    $data['status_app'] = 'accept';
                    $data['forward_to'] = null;
                    $data['tujuan_forward'] = null;
                } else {
                    $data['status_app'] = 'forward';
                    $data['forward_to'] = " To " . $arr_tcaa[$posisi_tambah_satu];
                    $data['tujuan_forward'] = $arr_tcaa_id[$posisi_tambah_satu];
                    $tujuan_pic =  $arr_tcaa_id[$posisi_tambah_satu];

                    $this->load->database('db2', TRUE);
                    $user_data = "SELECT a.email, a.nama FROM dpm_online.user AS a WHERE a.user_id= '$tujuan_pic'";
                    $data_pic_forward = $this->db->query($user_data)->result();
                    foreach ($data_pic_forward as $data2) {
                        $data['email'] = $data2->email;
                        $data['nama'] = $data2->nama;
                    }
                }
            }

            $url_team_caa = "api/master/mcaa/" . $id . "/approval";
            $result_team_caa = $this->model_auth->get_data($url_team_caa);
            for ($i = 0; $i < count($result_team_caa['data']); $i++) {
                $arr_rtc_id[] = $result_team_caa['data'][$i]['id_approval'];
                $arr_rtc_status[] = $result_team_caa['data'][$i]['status_approval'];
                $arr_rtc_pic[] = $result_team_caa['data'][$i]['id_pic'];
            }

            $user_waiting = array_search("waiting", $arr_rtc_status);
            $id_approval = $arr_rtc_id[$user_waiting];
            $pic_approval = $arr_rtc_pic[$user_waiting];
            $status_approval = $arr_rtc_status[$user_waiting];

            $url_pic = "api/master/pic/" . $pic_approval;
            $result_pic = $this->model_auth->get_data($url_pic);

            if (!empty($arr_tcaa_id)) {
                if (in_array($user_id, $arr_tcaa_id)) {
                    if ($status_approval == 'waiting' and $result_pic['data']['user_id'] == $user_id) {
                        $data['btn_app'] = 'Y';
                    } else {
                        $data['btn_app'] = 'N';
                    }
                } else {
                    $data['btn_app'] = 'N';
                }
            } else {
                $data['btn_app'] = 'N';
            }

            $data['plafon_max'] = isset($result_pic['data']['plafon_max']) ? $result_pic['data']['plafon_max'] : '';
            $data['url_api'] = $this->config->item('api_url') . "api/master/mcaa/$id/approval/$id_approval";
            $data['url'] = $this->config->item('img_url');
            $data['result_team_caa'] = $result_team_caa;
            $data['resul_team_caa'] =

                $data['token'] = $this->session->userdata('SESSION_TOKEN');

            // ======================
            $url    = "api/master/mcaa/$id";
            $auth   = $this->model_auth;
            $result = $auth->get_data($url);
            $data['info_analisa_cc'] = $result['data']['info_analisa_cc'];

            $data['kualitatif_analisa']     = $result['data']['ringkasan_analisa']['kualitatif_analisa'];
            $data['kuantitatif_ttl_pendapatan']     = $result['data']['ringkasan_analisa']['kuantitatif_ttl_pendapatan'];
            $data['kuantitatif_ttl_pengeluaran']    = $result['data']['ringkasan_analisa']['kuantitatif_ttl_pengeluaran'];
            $data['kuantitatif_pendapatan_bersih']  = $result['data']['ringkasan_analisa']['kuantitatif_pendapatan_bersih'];
            $data['kuantitatif_angsuran']   = $result['data']['ringkasan_analisa']['kuantitatif_angsuran'];
            $data['kuantitatif_ltv']        = $result['data']['ringkasan_analisa']['kuantitatif_ltv'];
            $data['kuantitatif_dsr']        = $result['data']['ringkasan_analisa']['kuantitatif_dsr'];
            $data['kuantitatif_idir']       = $result['data']['ringkasan_analisa']['kuantitatif_idir'];
            $data['kuantitatif_hasil']      = $result['data']['ringkasan_analisa']['kuantitatif_hasil'];
            // ======================
            $this->load->view('master/caa/trans_caa_detail', $data);
        else :
            echo "<script>alert('$result[message]');</script>
            <div class='modal-header'>
            <h5 class='modal-title'>Form Credit Analyst Approval</h5>
            <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
            </div>
            ";
        endif;
    }

    public function getPenyimpangan()
    {
        // $id_parent = $this->input->post('parent');
        $query = $this->Model_caa->CatPenyimpangan();
        $res = [];
        foreach($query->result() as $value) {
            $query_cat = $this->Model_caa->get_category($value->parent_penyimpan);
            foreach($query_cat->result() as $val) {
                array_push($res, array('nama' => $val->nama, 'id' => $val->id));
            }
        }
        echo json_encode($res);
    }

    public function getChildPenyimpangan()
    {
        $id_parent = $this->input->post('parent');
        $query = $this->Model_caa->ChildPenyimpangan($id_parent);
        echo json_encode($query->result());
    }
}
