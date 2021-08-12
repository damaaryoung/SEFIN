<?php
class model_status_cuti extends CI_Model{
 
    public function __construct()
    {
        parent::__construct();
        $this->tableMPic = 'm_pic';
        $this->tableMJPic = 'mj_pic';
        $this->tableMKArea = 'mk_area';
        $this->tableMKCabang = 'mk_cabang';
    }

    public function get_data_status_cuti()
    {
        $this->datatables->select('a.nama as nama_approval, a.plafon_caa as plafon, d.nama as nama_cabang,b.nama as nama_area, c.nama_jenis as nama_jabatan, a.flg_cuti as status_cuti');
        $this->datatables->from($this->tableMPic.' a');
        $this->datatables->join($this->tableMKArea.' b', 'a.id_area = b.id');
        $this->datatables->join($this->tableMJPic.' c', 'a.id_mj_pic = c.id');
        $this->datatables->join($this->tableMKCabang.' d', 'a.id_cabang = d.id');
        $this->datatables->where('a.id_mj_pic in (6,8,9,10,11,12,13)');
        // $this->datatables->group_by('a.nama');
        $this->db->order_by('c.id');
        $this->datatables->add_column('action',
            '<a href="javascript:void(0);" title="detail" class="edit_record btn btn-default btn-md" data-nama_approval="$1" data-status_cuti="$2" data-plafon="$3">
            <i class="fa fa-edit" aria-hidden="true"></i>
            </a>', 'nama_approval,status_cuti, plafon');
        $this->datatables->add_column('no',
        '$1', '');
        return $this->datatables->generate();
    }

    public function update($data)
    {
        $this->db->set('flg_cuti', $data['flg_cuti']);
        $this->db->set('plafon_caa', $data['plafon_caa']);
        $this->db->where('nama', $data['nama']);
        $result = $this->db->update($this->tableMPic);
        return $result;
    }
}