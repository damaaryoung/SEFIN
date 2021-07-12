<?php
class model_penyimpangan extends CI_Model{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->table = 'newwebtool.params_master_penyimpangan';
    }

    function get_all_penyimpangan($parent_penyimpangan) {
        $this->datatables->select('id, nama, flg_aktif, parent_penyimpan,id_mj_pic');
        $this->datatables->from('params_master_penyimpangan');
        $this->datatables->where('parent_penyimpan', $parent_penyimpangan);
        if($parent_penyimpangan == 0) {
            $this->datatables->add_column('action',
            '<a href="javascript:void(0);" title="detail" class="detail_record btn btn-default btn-md" data-id="$1" data-nama="$2" data-status="$3">
            <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <a href="javascript:void(0);" title="edit" class="edit_record btn btn-info btn-md" data-id="$1" data-nama="$2" data-status="$3"><i class="fa fa-edit" aria-hidden="true"></i>
            </a>
            <a href="javascript:void(0);" title="delete" class="hapus_record btn btn-danger btn-md" data-id="$1" data-parent_penyimpangan="$4"><i class="fa fa-trash" aria-hidden="true"></i>
            </a>',
            'id, nama, flg_aktif, '.$parent_penyimpangan);
        } else {
            $this->datatables->add_column('action',
            '<a href="javascript:void(0);" title="detail" class="detail_approval btn btn-default btn-md" data-id="$1" data-nama="$2" data-status="$3" data-approval="$4">
            <i class="fa fa-eye" aria-hidden="true"></i>
            </a>
            <a href="javascript:void(0);" title="edit" class="edit_record btn btn-info btn-md" data-id="$1" data-nama="$2" data-status="$3" data-approval="$4" data-parent_penyimpangan="$5">
            <i class="fa fa-edit" aria-hidden="true"></i>
            </a>
            <a href="javascript:void(0);" title="delete" class="hapus_record btn btn-danger btn-md" data-id="$1" data-parent_penyimpangan="$5"><i class="fa fa-trash" aria-hidden="true"></i>
            </a>',
            'id, nama, flg_aktif, id_mj_pic,'.$parent_penyimpangan);
        }
        return $this->datatables->generate();
    }

    function detail_approval($data)
    {
        $this->datatables->select('nama_jenis');
        $this->datatables->from('mj_pic');
        $this->datatables->where('id IN ('.$data.')');
        return $this->datatables->generate();
    }

    function insert($data)
    {
        $this->db->insert($this->table,$data);
    }

    function getByid($data)
    {
        $query ="SELECT * from $this->table WHERE id = $data";
		return $this->db->query($query);
    }

    function getChild($data)
    {
        $query ="SELECT * from $this->table WHERE parent_penyimpan = $data";
		return $this->db->query($query);
    }

    function update($data)
    {
        $this->db->set('flg_aktif', $data['flg_aktif']);
        $this->db->set('nama', $data['nama']);
        $this->db->set('id_mj_pic', $data['id_mj_pic']);
        $this->db->where('id', $data['id']);
        $result = $this->db->update($this->table);
        return $result;
    }

    function destroy($data)
    {
        $this->db->where('id', $data);
        $this->db->delete($this->table);
    }

    function mj_pic()
    {
        $query ="SELECT * from mj_pic WHERE urutan_jabatan IS NOT NULL AND nama_jenis NOT LIKE '%mgr%'";
		return $this->db->query($query);
    }
}