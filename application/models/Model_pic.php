<?php

class Model_pic extends CI_Model
{

    // var $table = 'trans_so';
    var $column_order = array(null, 'a.nama', 'b.nama', 'c.nama', 'd.nama_jenis');
    var $column_search = array('a.nama', 'b.nama', 'c.nama', 'd.nama_jenis');
    var $order = array('id' => 'asc');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {

        $this->sql_pic();

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

    function sql_pic()
    {
        $this->db->select('a.id, a.nama, b.nama as area, c.nama as cabang, d.nama_jenis', false);
        $this->db->from('m_pic a');
        $this->db->join('mk_area b', 'b.id=a.id_area', 'left');
        $this->db->join('mk_cabang c', 'c.id=a.id_cabang', 'left');
        $this->db->join('mj_pic d', 'd.id=a.id_mj_pic', 'left');
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
        $this->sql_pic();
        return $this->db->count_all_results();
    }
}
