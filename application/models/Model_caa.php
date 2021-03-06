<?php

class Model_caa extends CI_Model
{

    // var $table = 'trans_so';
    var $column_order = array(null, 'b.nomor_so', 'c.nama', 'd.nama_lengkap', 'e.plafon');
    var $column_search = array('b.nomor_so', 'c.nama', 'd.nama_lengkap', 'e.plafon');
    // var $order = array('id' => 'asc');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $this->sql_caa();

        $i = 0;

        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {

                if ($i === 0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }

        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function sql_caa()
    {
        $outputs   = $this->model_menu->getUser();
        $user_id   = $outputs['data']['user_id'];
        $get_cabang = "SELECT id_cabang FROM m_pic WHERE user_id='$user_id' AND flg_aktif=1";
        $data = $this->db->query($get_cabang)->result();
        foreach ($data as $data2) {
            $cabang[] = $data2->id_cabang;
        }
        // $awal = $this->input->post('awal');
        $awal          =   date('Y-m-d', strtotime($this->input->post('awal')));
        $akhir          =   date('Y-m-d', strtotime($this->input->post('akhir')));

        $fillcabang = $this->input->post('nama_cabang');
        if ($_POST['awal'] && $_POST['akhir'] && $_POST['nama_cabang'] && $fillcabang !== 'SEMUA CABANG') {

            $this->db->select('a.id,a.status_caa,a.id_trans_so, b.nomor_so,c.nama AS cabang, d.nama_lengkap AS nama_debitur, FORMAT(e.plafon,0) AS plafon, e.tenor, 
            FORMAT(g.plafon_kredit,0) AS plafon_recom_ao, FORMAT(i.recom_nilai_pinjaman,0) AS plafon_recom_ca', false);
            $this->db->from('trans_caa a');
            $this->db->join('trans_so b', 'b.id=a.id_trans_so', 'left');
            $this->db->join('mk_cabang c', 'c.id=b.id_cabang', 'left');
            $this->db->join('calon_debitur d', 'd.id=b.id_calon_debitur', 'left');
            $this->db->join('fasilitas_pinjaman e', 'e.id=b.id_fasilitas_pinjaman', 'left');
            $this->db->join('trans_ao f', 'f.id_trans_so=a.id_trans_so', 'left');
            $this->db->join('recom_ao g', 'g.id=f.id_recom_ao', 'left');
            $this->db->join('trans_ca h', 'h.id_trans_so=a.id_trans_so', 'left');
            $this->db->join('rekomendasi_pinjaman i', 'i.id=h.id_rekomendasi_pinjaman', 'left');
            $this->db->where('a.status_caa', 1);
            $this->db->where('date(a.created_at) >=', $awal);
            $this->db->where('date(a.created_at) <=',  $akhir);
            $this->db->where_in('b.id_cabang', $fillcabang);
            // $this->db->where_in('b.id_cabang', $cabang);
            $this->db->order_by('a.id', 'desc');
        } else if ($_POST['awal'] && $_POST['akhir'] && $_POST['nama_cabang'] && $fillcabang == 'SEMUA CABANG') {

            $this->db->select('a.id,a.status_caa,a.id_trans_so, b.nomor_so,c.nama AS cabang, d.nama_lengkap AS nama_debitur, FORMAT(e.plafon,0) AS plafon, e.tenor, 
            FORMAT(g.plafon_kredit,0) AS plafon_recom_ao, FORMAT(i.recom_nilai_pinjaman,0) AS plafon_recom_ca', false);
            $this->db->from('trans_caa a');
            $this->db->join('trans_so b', 'b.id=a.id_trans_so', 'left');
            $this->db->join('mk_cabang c', 'c.id=b.id_cabang', 'left');
            $this->db->join('calon_debitur d', 'd.id=b.id_calon_debitur', 'left');
            $this->db->join('fasilitas_pinjaman e', 'e.id=b.id_fasilitas_pinjaman', 'left');
            $this->db->join('trans_ao f', 'f.id_trans_so=a.id_trans_so', 'left');
            $this->db->join('recom_ao g', 'g.id=f.id_recom_ao', 'left');
            $this->db->join('trans_ca h', 'h.id_trans_so=a.id_trans_so', 'left');
            $this->db->join('rekomendasi_pinjaman i', 'i.id=h.id_rekomendasi_pinjaman', 'left');
            $this->db->where('a.status_caa', 1);
            $this->db->where('date(a.created_at) >=', $awal);
            $this->db->where('date(a.created_at) <=',  $akhir);
            $this->db->where_in('b.id_cabang', $cabang);
            // $this->db->where_in('b.id_cabang', $cabang);
            $this->db->order_by('a.id', 'desc');
        } else {
            $this->db->select('a.id,a.status_caa,a.id_trans_so, b.nomor_so,c.nama AS cabang, d.nama_lengkap AS nama_debitur, FORMAT(e.plafon,0) AS plafon, e.tenor, 
            FORMAT(g.plafon_kredit,0) AS plafon_recom_ao, FORMAT(i.recom_nilai_pinjaman,0) AS plafon_recom_ca', false);
            $this->db->from('trans_caa a');
            $this->db->join('trans_so b', 'b.id=a.id_trans_so', 'left');
            $this->db->join('mk_cabang c', 'c.id=b.id_cabang', 'left');
            $this->db->join('calon_debitur d', 'd.id=b.id_calon_debitur', 'left');
            $this->db->join('fasilitas_pinjaman e', 'e.id=b.id_fasilitas_pinjaman', 'left');
            $this->db->join('trans_ao f', 'f.id_trans_so=a.id_trans_so', 'left');
            $this->db->join('recom_ao g', 'g.id=f.id_recom_ao', 'left');
            $this->db->join('trans_ca h', 'h.id_trans_so=a.id_trans_so', 'left');
            $this->db->join('rekomendasi_pinjaman i', 'i.id=h.id_rekomendasi_pinjaman', 'left');
            $this->db->where('a.status_caa', 1);
            // $this->db->where_in('b.id_cabang', $fillcabang);
            $this->db->where_in('b.id_cabang', $cabang);
            $this->db->order_by('a.id', 'desc');
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->sql_caa();
        return $this->db->count_all_results();
    }

    public function CatPenyimpangan()
    {
        $this->db->select("b.nama, a.id_penyimpangan, b.parent_penyimpan, b.id");
        $this->db->from("master_list_penyimpangan a");
        $this->db->join("params_master_penyimpangan b", "a.id_penyimpangan = b.id");
        $this->db->join("master_tanggal_penyimpangan c", "c.id = a.id_tanggal_penyimpangan");
        $this->db->where("c.expired", 0);
        $this->db->where("a.active", 1);
        $this->db->group_by("b.parent_penyimpan");
        return $this->db->get();
    }

    public function get_category($data)
    {
        $this->db->select("nama,id ");
        $this->db->from("params_master_penyimpangan");
        $this->db->where("id", $data);
        return $this->db->get();
    }

    public function ChildPenyimpangan($id_parent)
    {
        $this->db->select("b.nama, b.id_mj_pic");
        $this->db->from("master_list_penyimpangan a");
        $this->db->join("params_master_penyimpangan b", "a.id_penyimpangan = b.id");
        $this->db->join("master_tanggal_penyimpangan c", "c.id = a.id_tanggal_penyimpangan");
        $this->db->where("c.expired", 0);
        $this->db->where("a.active", 1);
        $this->db->where("b.parent_penyimpan", $id_parent);
        // $this->db->group_by("a.id_parent_penyimpangan");
        return $this->db->get();
    }

    public function get_mj_pic($data)
    {
        $this->db->select('nama_jenis');
        $this->db->from('mj_pic');
        $this->db->where('id IN('.$data.')');
        return $this->db->get();
    }

    public function get_team_caa($data)
    {
        $this->db->select('a.id as id, a.user_id as user_id, a.plafon_caa as plafon_caa, a.nama as nama, a.flg_aktif as flg_aktif, c.nama as cabang, b.nama_jenis as nama_jenis');
        $this->db->from('m_pic a');
        $this->db->join('mj_pic b', 'a.id_mj_pic = b.id');
        $this->db->join('mk_cabang c', 'a.id_cabang = c.id');
        $this->db->where('c.nama', $data);
        $this->db->where('a.plafon_caa is not null');
        $this->db->where('a.flg_aktif', 1);
        $this->db->order_by('b.id asc');
        return $this->db->get();
    }
}
