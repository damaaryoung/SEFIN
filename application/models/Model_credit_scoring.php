<?php

class Model_credit_scoring extends CI_Model
{

    var $table = 'view_cs_scoring'; //nama tabel dari database
    var $column_order = array(null, 'nomor_aplikasi', 'tgl_transaksi', 'nama_debitur', 'id_area', 'id_cabang', 'nama_so', 'nama_ao', 'risiko', 'kolektabilitas', 'rekomendasi'); //field yang ada di table user
    var $column_search = array('nomor_aplikasi', 'tgl_transaksi', 'nama_debitur', 'id_area', 'id_cabang', 'nama_so', 'nama_ao', 'risiko', 'kolektabilitas', 'rekomendasi'); //field yang diizin untuk pencarian 
    //  var $order = array('id' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_menu');
        $this->load->database();
    }

    private function _get_datatables_query()
    {
        $this->sql_cs();
        // var_dump($j->result_row);
        // die;
        //$this->db->from($this->table);

        // $this->sql_caa();

        $i = 0;

        foreach ($this->column_search as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
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

    function sql_cs()
    {

        $outputs   = $this->model_menu->getUser();
        $user_id   = $outputs['data']['user_id'];
        $get_cabang = "SELECT id_cabang FROM m_pic WHERE user_id='$user_id'";

        $data = $this->db->query($get_cabang)->result();
        foreach ($data as $data2) {
            $cabang[] = $data2->id_cabang;
        }

        // $awal = $this->input->post('awal');
        $awal          =  date('Y-m-d', strtotime($this->input->post('awal')));
        $akhir          = date('Y-m-d', strtotime($this->input->post('akhir')));
        // var_dump($akhir);
        // die;
        // $query = "SELECT nomor_aplikasi,tgl_transaksi,nama_debitur FROM view_cs_scoring WHERE IN id_cabang=$cabang";
        // var_dump($this->db->query($query)->result());
        // die;
        // $fillcabang = $this->input->post('nama_cabang');
        if ($awal !== '1970-01-01') {

            $q =    $this->db->select(
                //  '*'
                'cs.tgl_transaksi,
                cs.kolektabilitas,
                cs.nomor_aplikasi,
                cs.nama_debitur,
                (SELECT nama FROM mk_area WHERE id=cs.id_area) AS id_area,
                (SELECT nama FROM mk_cabang WHERE id=cs.id_cabang) AS id_cabang,
                cs.nama_so,
                cs.nama_ao,
                cs.risiko,
                cs.rekomendasi'
            );
            $this->db->from('view_cs_scoring cs');
            $this->db->join('mk_area area', 'cs.id_area=area.id', 'left');
            $this->db->join('mk_cabang mk', 'cs.id_cabang=mk.id', 'left');
            $this->db->where_in('cs.id_cabang', $cabang);
            $this->db->where('cs.tgl_transaksi >=', $awal);
            $this->db->where('cs.tgl_transaksi <=',  $akhir);
            $this->db->order_by('cs.id', 'desc');
        } else {
            $q =   $this->db->select(
                //  '*' 
                'cs.tgl_transaksi,
                cs.kolektabilitas,
                cs.nomor_aplikasi,
                cs.nama_debitur,
                (SELECT nama FROM mk_area WHERE id=cs.id_area) AS id_area,
                (SELECT nama FROM mk_cabang WHERE id=cs.id_cabang) AS id_cabang,
                cs.nama_so,
                cs.nama_ao,
                cs.risiko,
                cs.rekomendasi'
            );
            $this->db->from('view_cs_scoring AS cs');
            $this->db->join('mk_area area', 'cs.id_area=area.id', 'left');
            $this->db->join('mk_cabang mk', 'cs.id_cabang=mk.id', 'left');
            $this->db->where_in('cs.id_cabang', $cabang);
            $this->db->order_by('cs.id', 'desc');
            // $query = $this->db->get();

            // $query = $this->db->get();
            // $row = $query->result_array();
            // var_dump($query);
            // die;
        }
        // foreach ($query->result_array() as $row) {
        //     echo $row['nomor apolikasi'];
        // }

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
        // $this->_get_datatables_query();
        // $query = $this->db->get();
        // return $query->num_rows();
    }

    public function count_all()
    {
        $this->sql_cs();
        return $this->db->count_all_results();
        // $this->db->from($this->table);
        // return $this->db->count_all_results();
    }
}
