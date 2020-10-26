<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lampiran_debitur_controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_lampiran_debitur');
    }

    function get_data_so()
    {
        $list = $this->Model_lampiran_debitur->get_datatables();
        $data = array();
        foreach ($list as $field) {
            $id = $field->trans_so;

            $tb_app = $this->db->query("SELECT trans_so, lampiran_ktp_penjamin, buku_nikah_penjamin FROM lpdk_penjamin 
            WHERE trans_so=$id GROUP BY lampiran_ktp_penjamin ")->result();

            $tb_sertif = $this->db->query("SELECT * FROM lpdk_sertifikat  
            WHERE trans_so=$id GROUP BY no_sertifikat")->result();

            $lamp_ktp = $field->lamp_ktp;
            $lamp_kk = $field->lamp_kk;
            $lamp_npwp = $field->lampiran_npwp;
            $lamp_ktp_pas = $field->lamp_ktp_pasangan;
            $lamp_buku_nikah = $field->lampiran_surat_nikah;
            $lamp_slip_gaji = $field->lamp_slip_gaji;
            $lamp_skk = $field->lamp_skk;
            $lamp_sku = $field->lamp_sku;
            $lamp_pembukuan_usaha = $field->foto_pembukuan_usaha;
            $lamp_form_persetujuan_ideb = $field->form_persetujuan_ideb;

            $lamp_ktp_penjamin_1 = $tb_app[0]->lampiran_ktp_penjamin;
            $lamp_ktp_penjamin_2 = $tb_app[1]->lampiran_ktp_penjamin;
            $lamp_ktp_penjamin_3 = $tb_app[2]->lampiran_ktp_penjamin;
            $lamp_ktp_penjamin_4 = $tb_app[3]->lampiran_ktp_penjamin;

            $lamp_buku_nikah_penjamin_1 = $tb_app[0]->buku_nikah_penjamin;
            $lamp_buku_nikah_penjamin_2 = $tb_app[1]->buku_nikah_penjamin;
            $lamp_buku_nikah_penjamin_3 = $tb_app[2]->buku_nikah_penjamin;
            $lamp_buku_nikah_penjamin_4 = $tb_app[3]->buku_nikah_penjamin;

            $lamp_sertifikat_1 = $tb_sertif[0]->lampiran_sertifikat;
            $lamp_sertifikat_2 = $tb_sertif[1]->lampiran_sertifikat;
            $lamp_imb_1 = $tb_sertif[0]->lampiran_imb;
            $lamp_imb_2 = $tb_sertif[1]->lampiran_imb;
            $lamp_pbb_1 = $tb_sertif[0]->lampiran_pbb;
            $lamp_pbb_2 = $tb_sertif[1]->lampiran_pbb;

            $url_lamp_ktp = '<?php echo $this->config->item("img_url") ?>' + $field->lamp_ktp + '';


            // print_r($id);
            // die;

            if ($lamp_ktp == null || $lamp_ktp == '') {
                $lamp_ktp = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_ktp = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_ktp . '"  title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_kk == null || $lamp_kk == '') {
                $lamp_kk = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_kk = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_kk . '"  title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_npwp == null || $lamp_npwp == '') {
                $lamp_npwp = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_npwp = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_npwp . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_ktp_pas == null || $lamp_ktp_pas == '') {
                $lamp_ktp_pas = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_ktp_pas = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_ktp_pas . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_buku_nikah == null || $lamp_buku_nikah == '') {
                $lamp_buku_nikah = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_buku_nikah = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_buku_nikah . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_slip_gaji == null || $lamp_slip_gaji == '') {
                $lamp_slip_gaji = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_slip_gaji = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_slip_gaji . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_skk == null || $lamp_skk == '') {
                $lamp_skk = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_skk = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_skk . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_sku == null || $lamp_sku == '') {
                $lamp_sku = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_sku = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_sku . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_pembukuan_usaha == null || $lamp_pembukuan_usaha == '') {
                $lamp_pembukuan_usaha = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_pembukuan_usaha = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_pembukuan_usaha . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_form_persetujuan_ideb == null || $lamp_form_persetujuan_ideb == '') {
                $lamp_form_persetujuan_ideb = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_form_persetujuan_ideb = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_form_persetujuan_ideb . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };


            if ($lamp_ktp_penjamin_1 == null || $lamp_ktp_penjamin_1 == '') {
                $lamp_ktp_penjamin_1 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_ktp_penjamin_1 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_ktp_penjamin_1 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_ktp_penjamin_2 == null || $lamp_ktp_penjamin_2 == '') {
                $lamp_ktp_penjamin_2 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_ktp_penjamin_2 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_ktp_penjamin_2 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_ktp_penjamin_3 == null || $lamp_ktp_penjamin_3 == '') {
                $lamp_ktp_penjamin_3 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_ktp_penjamin_3 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_ktp_penjamin_3 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_ktp_penjamin_4 == null || $lamp_ktp_penjamin_4 == '') {
                $lamp_ktp_penjamin_4 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_ktp_penjamin_4 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_ktp_penjamin_4 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_buku_nikah_penjamin_1 == null || $lamp_buku_nikah_penjamin_1 == '') {
                $lamp_buku_nikah_penjamin_1 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_buku_nikah_penjamin_1 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_buku_nikah_penjamin_1 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_buku_nikah_penjamin_2 == null || $lamp_buku_nikah_penjamin_2 == '') {
                $lamp_buku_nikah_penjamin_2 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_buku_nikah_penjamin_2 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_buku_nikah_penjamin_2 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_buku_nikah_penjamin_3 == null || $lamp_buku_nikah_penjamin_3 == '') {
                $lamp_buku_nikah_penjamin_3 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_buku_nikah_penjamin_3 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_buku_nikah_penjamin_3 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_buku_nikah_penjamin_4 == null || $lamp_buku_nikah_penjamin_4 == '') {
                $lamp_buku_nikah_penjamin_4 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_buku_nikah_penjamin_4 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_buku_nikah_penjamin_4 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_sertifikat_1 == null || $lamp_sertifikat_1 == '') {
                $lamp_sertifikat_1 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_sertifikat_1 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_sertifikat_1 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_sertifikat_2 == null || $lamp_sertifikat_2 == '') {
                $lamp_sertifikat_2 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_sertifikat_2 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_sertifikat_2 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_imb_1 == null || $lamp_imb_1 == '') {
                $lamp_imb_1 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_imb_1 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_imb_1 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_imb_2 == null || $lamp_imb_2 == '') {
                $lamp_imb_2 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_imb_2 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_imb_2 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_pbb_1 == null || $lamp_pbb_1 == '') {
                $lamp_pbb_1 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_pbb_1 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_pbb_1 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };

            if ($lamp_pbb_2 == null || $lamp_pbb_2 == '') {
                $lamp_pbb_2 = '<a type="button" class="btn btn-default bg-gradient-danger btn-sm"  title="Lampiran Tidak Ada" ><i style="color: #fff;" class="fas fa-window-close"></i></a>';
            } else {
                $lamp_pbb_2 = '<a type="button" class="btn btn-default bg-gradient-success btn-sm" target="window.open()" href="' . $this->config->item('img_url') . '' . $lamp_pbb_2 . '" title="Lampiran Ada" ><i style="color: #fff;" class="fas fa-check"></i></a>';
            };
            // $id =  $field->id;

            $url = "report/memo_so";

            $row = array();
            $row[] = $field->nomor_so;
            $row[] = $field->debitur;
            $row[] = $lamp_ktp;
            $row[] = $lamp_kk;
            $row[] = $lamp_npwp;
            $row[] = $lamp_ktp_pas;
            $row[] = $lamp_buku_nikah;
            $row[] = $lamp_ktp_penjamin_1;
            $row[] = $lamp_ktp_penjamin_2;
            $row[] = $lamp_ktp_penjamin_3;
            $row[] = $lamp_ktp_penjamin_4;
            $row[] = $lamp_buku_nikah_penjamin_1;
            $row[] = $lamp_buku_nikah_penjamin_2;
            $row[] = $lamp_buku_nikah_penjamin_3;
            $row[] = $lamp_buku_nikah_penjamin_4;
            $row[] = $lamp_slip_gaji;
            $row[] = $lamp_skk;
            $row[] = $lamp_sku;
            $row[] = $lamp_pembukuan_usaha;
            $row[] = $lamp_sertifikat_1;
            $row[] = $lamp_sertifikat_2;
            $row[] = $lamp_imb_1;
            $row[] = $lamp_imb_2;
            $row[] = $lamp_pbb_1;
            $row[] = $lamp_pbb_2;
            $row[] = $lamp_form_persetujuan_ideb;

            // $row[] = '<form method="post" target="_blank" action="' . $url . '"> <button type="button"  class="btn btn-info btn-sm edit" data="' . $id . '"><i class="fas fa-pencil-alt"></i></button>
            // <button type="button" class="btn btn-warning btn-sm edit" onclick="click_detail()" data="' . $id . '"><i style="color: #fff;" class="fas fa-eye"></i></button>
            // <input type="hidden" name ="id" value="' . $id . '"><button type="submit" class="btn btn-success btn-sm" ><i class="far fa-file-pdf"></i></a></form>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_lampiran_debitur->count_all(),
            "recordsFiltered" => $this->Model_lampiran_debitur->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
    function detail()
    {
        $id_so = $this->input->post('id_so');
        $data['id_so'] = $id_so;
        $this->load->view('master/memorandum_so/edit_so_credit', $data);
        // echo json_encode($data);
    }
}
