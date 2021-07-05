<?php
class Model_wilayah extends ci_model
{
    function get_kabupaten($nama)
    {
        $hasil = $this->db->query("SELECT id,nama FROM master_kabupaten WHERE nama LIKE  '%$nama%' GROUP BY nama");
        return $hasil->result();
    }

    function get_kecamatan($nama)
    {
        $hasil = $this->db->query("SELECT id,nama FROM master_kecamatan WHERE nama LIKE  '%$nama%' GROUP BY nama");
        return $hasil->result();
    }

    function get_kelurahan($nama)
    {
        $hasil = $this->db->query("SELECT id,nama,kode_pos FROM master_kelurahan WHERE nama LIKE  '%$nama%' GROUP BY nama");
        return $hasil->result();
    }
}
