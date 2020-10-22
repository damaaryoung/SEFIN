<?php
class Model_data_belum_tersedia extends CI_Model
{

    var $table = 'm01_target_cabang';
    var $column_order = array(null, 'nama_area_kerja', 'kategori', 'target_lending', 'target_baki_debet');
    var $column_search = array('nama_area_kerja', 'kategori', 'target_lending', 'target_baki_debet');
    var $order = array('id' => 'asc');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    private function _get_datatables_query()
    {

        $this->db->from($this->table);

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
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    function get_area_kerja()
    {
        $hasil = $this->db->query("SELECT b.nama AS AREA,a.nama AS cabang FROM mk_cabang AS a LEFT JOIN mk_area AS b ON a.id_area=b.id");
        return $hasil->result();
    }

    function get_asal_data()
    {
        $hasil = $this->db->query("SELECT * FROM view_kode_group4");
        return $hasil->result();
    }

    function save_target()
    {
        // $this->load->database('db3', TRUE);
        $data = array(
            'nama_area_kerja'  => $this->input->post('nama_area_kerja'),
            'kategori'  => $this->input->post('kategori'),
            'target_lending'  => $this->input->post('target_lending'),
            'target_baki_debet'  => $this->input->post('target_baki_debet'),
        );
        $result = $this->db->insert('m01_target_cabang', $data);
        return $result;
    }

    function delete_target()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $result = $this->db->delete('m01_target_cabang');
        return $result;
    }

    function edit_target()
    {
        $id = $this->input->post('id');
        $hasil = $this->db->query("SELECT * FROM m01_target_cabang WHERE id=" . $id . " ");
        return $hasil->result();
    }

    function update_target()
    {
        $id = $this->input->post('id');
        $nama_area_kerja = $this->input->post('nama_area_kerja');
        $kategori = $this->input->post('kategori');
        $target_lending = $this->input->post('target_lending');
        $target_baki_debet = $this->input->post('target_baki_debet');

        $this->db->set('nama_area_kerja', $nama_area_kerja);
        $this->db->set('kategori', $kategori);
        $this->db->set('target_lending', $target_lending);
        $this->db->set('target_baki_debet', $target_baki_debet);

        $this->db->where('id', $id);
        $result = $this->db->update('m01_target_cabang');
        return $result;
    }
}
