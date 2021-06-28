<?php

class Model_tracking_order extends CI_Model
{

    var $column_order = array(null, 'b.nomor_so', 'f.nama_lengkap');
    var $column_search = array('b.nomor_so', 'f.nama_lengkap');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_menu');
    }

    private function _get_datatables_query()
    {

        $this->sql_to();

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
        }
    }

    function sql_to()
    {

        $this->db->select("c.id_trans_so AS id_trans_so, b.nomor_so AS nomor_so, DATE_FORMAT(b.created_at, '%d/%m/%Y %H:%i:%s') AS tgl_transaksi, e.nama AS nama_so, f.nama_lengkap AS nama_debitur, g.nama AS nama_cabang, a.status_ao as status_ao, d.plafon_kredit as plafon_kredit, a.tgl_pending as tgl_pending, a.status_return as status_return, h.id AS id_caa, i.id_trans_so AS id_verif, b.flg_cancel_debitur as cancel_debitur", false);
        $this->db->from('trans_ao a');
        $this->db->join('trans_so b', 'a.id_trans_so = b.id', 'left');
        $this->db->join('trans_ca c', 'a.id_trans_so = c.id_trans_so', 'left');
        $this->db->join('recom_ca d', 'd.id = c.id_recom_ca', 'left');
        $this->db->join('dpm_online.user e', 'a.user_id = e.user_id', 'left');
        $this->db->join('calon_debitur f', 'b.id_calon_debitur = f.id', 'left');
        $this->db->join('mk_cabang g', 'b.id_cabang = g.id', 'left');
        $this->db->join('trans_caa h', 'a.id_trans_so = h.id_trans_so', 'left');
        $this->db->join('verif_cadebt i', 'a.id_trans_so = i.id_trans_so', 'left');
        $this->db->order_by('a.id_trans_so', 'desc');
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
        $this->sql_to();
        return $this->db->count_all_results();
    }
    
    
}
