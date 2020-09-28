<?php

class Model_ca extends CI_Model
{

    // var $table = 'trans_so';
    var $column_order = array(null, "DATE_FORMAT(a.created_at,'%d/%m/%Y %H:%i:%s')", 'b.nomor_so', 'a.revisi', 'b.nama_marketing', 'd.nama_lengkap', 'e.nama');
    var $column_search = array("DATE_FORMAT(a.created_at,'%d/%m/%Y %H:%i:%s')", 'b.nomor_so', 'a.revisi', 'b.nama_marketing', 'd.nama_lengkap', 'e.nama');
    // var $order = array('a.id' => 'asc');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_menu');
    }

    private function _get_datatables_query()
    {

        $this->sql_ca();

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
        // else if (isset($this->order)) {
        //     $order = $this->order;
        //     $this->db->order_by(key($order), $order[key($order)]);
        // }
    }

    function sql_ca()
    {

        $outputs   = $this->model_menu->getUser();
        $user_id   = $outputs['data']['user_id'];

        $get_cabang = "SELECT id_cabang FROM m_pic WHERE user_id='$user_id'";
        $data = $this->db->query($get_cabang)->result();
        foreach ($data as $data2) {
            $cabang[] = $data2->id_cabang;
        }
        $this->db->select("a.id,a.id_trans_so, DATE_FORMAT(a.created_at, '%d/%m/%Y %H:%i:%s') AS tanggal , b.nomor_so, a.revisi, b.nama_marketing, d.nama_lengkap AS nama_debitur, e.nama AS cabang", false);
        $this->db->from('trans_ca a');
        $this->db->join('trans_so b', 'b.id=a.id_trans_so', 'left');
        $this->db->join('calon_debitur d', 'd.id=b.id_calon_debitur', 'left');
        $this->db->join('mk_cabang e', 'e.id=b.id_cabang', 'left');
        $this->db->where_in('b.id_cabang', $cabang);
        $this->db->order_by('a.id', 'desc');
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
        $this->sql_ca();
        return $this->db->count_all_results();
    }
}
