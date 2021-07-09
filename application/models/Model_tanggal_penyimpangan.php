<?php
class model_tanggal_penyimpangan extends CI_Model{
 
    public function __construct()
    {
        parent::__construct();
        $this->tableTanggal = 'master_tanggal_penyimpangan';
        $this->tablePenyimpangan = 'params_master_penyimpangan';
        $this->tableList = 'master_list_penyimpangan';
    }

    public function ParamPenyimpangan()
    {
        $query ="SELECT * from $this->tablePenyimpangan WHERE parent_penyimpan != 0 AND flg_aktif = 1";
		return $this->db->query($query)->result();
    }

    function get_tanggal_penyimpangan() {
        $this->datatables->select('id, start_date, end_date');
        $this->datatables->from($this->tableTanggal);
        $this->datatables->add_column('action',
            '<a href="javascript:void(0);" title="detail" class="detail_record btn btn-default btn-md" data-id="$1" data-start_date="$2" data-end_date="$3">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </a>',
            'id, start_date, end_date');
        $this->datatables->add_column('keterangan','$1', '');
        return $this->datatables->generate();
    }

    public function detail($id_tanggal_penyimpangan)
    {
        $this->datatables->select('a.id as id , c.nama as nama, a.active as active, a.id_tanggal_penyimpangan as id_tanggal_penyimpangan');       
        $this->datatables->from($this->tableList.' a');
        $this->datatables->join($this->tableTanggal.' b', 'a.id_tanggal_penyimpangan = b.id');
        $this->datatables->join($this->tablePenyimpangan.' c', 'a.id_penyimpangan = c.id');
        $this->datatables->where('a.id_tanggal_penyimpangan = '.$id_tanggal_penyimpangan);
        return $this->datatables->generate();
    }

    public function AddTanggalPenyimpangan($data)
    {
        $this->db->insert($this->tableTanggal, $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    public function AddListPenyimpangan($data)
    {
        $save = $this->db->insert_batch($this->tableList, $data);
        return $save;
    }

    public function is_active($data)
    {
        $this->db->set('active', $data['active']);
        $this->db->where('id', $data['id']);
        $result = $this->db->update($this->tableList);
        return $result;
    }

}