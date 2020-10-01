<?php

class Model_lampiran_debitur extends CI_Model
{

    // var $table = 'trans_so';
    var $column_order = array(null, 'a.status_kredit', 'a.trans_so', 'b.nomor_so', 'd.lamp_slip_gaji', 'd.lamp_ktp', 'd.lamp_kk', 'e.lamp_ktp', ' c.lampiran_npwp', ' c.lampiran_surat_nikah');
    var $column_search = array('a.status_kredit', 'a.trans_so', 'b.nomor_so', 'd.lamp_ktp', 'e.lamp_ktp', ' c.lampiran_npwp', ' c.lampiran_surat_nikah');
    // var $order = array('id' => 'asc');

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('model_menu');
    }

    private function _get_datatables_query()
    {

        $this->sql_so();

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

    function sql_so()
    {
        $this->db->select("a.status_kredit, a.trans_so, d.nama_lengkap AS debitur, b.nomor_so,d.foto_pembukuan_usaha,d.lamp_ktp,d.lamp_slip_gaji,d.lamp_kk,d.lamp_skk,d.lamp_sku,e.lamp_ktp AS lamp_ktp_pasangan, c.lampiran_npwp,c.lampiran_surat_nikah, f.form_persetujuan_ideb", false);
        $this->db->from('lpdk a');
        $this->db->join('trans_so b', 'b.id=a.trans_so', 'left');
        $this->db->join('lpdk_lampiran c', 'c.trans_so=a.trans_so', 'left');
        $this->db->join('calon_debitur d', 'd.id=b.id_calon_debitur', 'left');
        $this->db->join('pasangan_calon_debitur e', 'e.id=b.id_pasangan', 'left');
        $this->db->join('trans_ao f', 'f.id_trans_so=a.trans_so', 'left');
        $this->db->where('a.status_kredit', 'REALISASI');
        $this->db->group_by('trans_so');
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
        $this->sql_so();
        return $this->db->count_all_results();
    }
}
