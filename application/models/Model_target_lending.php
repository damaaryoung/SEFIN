<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Model_target_lending extends ci_model
{
    public function tampil_data($page)
    {
        $url     = "http://103.31.232.146/API_WEBTOOL3/api/master/target?page=".$page;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
        ));
        $output = curl_exec($ch);
        curl_close($ch);
        return json_decode($output, true);
    }

    public function view($id)
    {
        $url     = "http://103.31.232.146/API_WEBTOOL3/api/master/target/".$id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
        ));
        $output = curl_exec($ch);
        curl_close($ch);
        return json_decode($output, true);
    }

    public function store()
    {
        $dataPost=array(
            'kode_kantor'=>$this->input->post('kode_kantor', true),
            'area_kerja'=>$this->input->post('area_kerja', true),
            'area'=>$this->input->post('area', true),
            'target'=>$this->input->post('target', true),
            'bulan'=>$this->input->post('bulan', true),
            'tahun'=>$this->input->post('tahun', true)
        );
        $url="/api/master/target/tambah";
        $curl     = $this->config->item('api_url') . $url ;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $curl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
        $output = curl_exec($ch);
        curl_close($ch);
        return json_encode(['status'=>'success']);
    }

    public function update()
    {
        $dataPost=array(
            'kode_kantor'=>$this->input->post('kode_kantor', true),
            'area_kerja'=>$this->input->post('area_kerja', true),
            'area'=>$this->input->post('area', true),
            'target'=>$this->input->post('target', true),
            'bulan'=>$this->input->post('bulan', true),
            'tahun'=>$this->input->post('tahun', true)
        );
        $url="/api/master/target/update/".$this->input->post('id', true)."";
        $curl     = $this->config->item('api_url') . $url ;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $curl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
        ));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
        $output = curl_exec($ch);
        curl_close($ch);
        return json_encode(['status'=>'success']);
    }

    public function destroy($id)
    {
        $url     = "http://103.31.232.146/API_WEBTOOL3/api/master/target/delete/".$id;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer '.$this->session->userdata('SESSION_TOKEN')
        ));
        $output = curl_exec($ch);
        curl_close($ch);
        return json_encode($output, true);
    }

    public function get_area_kerja()
    {
        $this->db->select('nama_area_kerja');
        $this->db->group_by('nama_area_kerja'); 
        $this->db->get('view_kode_kantor');
        $data=$this->db->get('view_kode_kantor')->result();
        return $data;
    }

    public function get_area()
    {
        $query=$this->db->query('SELECT DISTINCT kode_area FROM view_kode_kantor')->result_array();
        return $query;
    }

    public function getAreaData(){
        $name_area=$this->input->post('name_area');
        $query=$this->db->query("SELECT * FROM view_kode_kantor WHERE nama_area_kerja='$name_area'")->row();
        return $query;
    }
}
