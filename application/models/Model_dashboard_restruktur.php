<?php
class Model_dashboard_restruktur extends ci_model
{
    function get_data()
    {
        $query = "SELECT SUM(baki_debet) AS baki_debet, SUM(baki_debet) - SUM(IF(kode_produk IN ('52', '53','54') OR no_rekening IN ('01-39-00001-19','04-53-00001-20'),baki_debet,0)) AS baki_normal_komulatif, SUM(IF(kode_produk IN ('52', '53','54') OR no_rekening IN ('01-39-00001-19','04-53-00001-20'),baki_debet,0)) AS baki_rest_kumulatif FROM dpm_online.kre_nominatif WHERE tgl_laporan=CURDATE() AND baki_debet > 0 AND (SUBSTRING(no_rekening,4,2)<>'50' OR (no_rekening IN ('01-39-00001-19','04-53-00001-20')))";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_data_komposisi_normal_restr()
    {
        $query = "SELECT SUM(baki_debet) AS baki_debet,
		SUM(IF(tgl_realisasi <= CURDATE() AND baki_debet > 0,1,0)) - SUM(IF(tgl_realisasi <= CURDATE() AND baki_debet > 0 AND (kode_produk IN ('52', '53', '54') OR (no_rekening IN ('01-39-00001-19','04-53-00001-20'))),1,0)) AS noa_normal_kumulatif,
		SUM(baki_debet) - SUM(IF(kode_produk IN ('52', '53','54'),baki_debet,0)) AS baki_normal_kumulatif,
		ROUND(((SUM(baki_debet) - SUM(IF(kode_produk IN ('52', '53','54') OR (no_rekening IN ('01-39-00001-19','04-53-00001-20')),baki_debet,0))) / SUM(baki_debet) ) * 100, 2) AS rasio_normal_kumulatif,
		SUM(IF((kode_produk IN ('52', '53', '54') OR (no_rekening IN ('01-39-00001-19','04-53-00001-20'))),baki_debet,0)) AS baki_rest_kumulatif,
		SUM(IF(tgl_realisasi <= CURDATE() AND baki_debet > 0 AND (kode_produk IN ('52', '53', '54') OR (no_rekening IN ('01-39-00001-19','04-53-00001-20'))),1,0)) AS noa_rest_kumulatif,
		ROUND((SUM(IF((kode_produk IN ('52', '53', '54') OR (no_rekening IN ('01-39-00001-19','04-53-00001-20'))),baki_debet,0)) / SUM(baki_debet) ) * 100, 2) AS rasio_rest_kumulatif
		FROM dpm_online.kre_nominatif WHERE tgl_laporan=CURDATE() AND baki_debet > 0 AND (SUBSTRING(no_rekening,4,2)<>'50' OR (no_rekening IN ('01-39-00001-19','04-53-00001-20')))";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_data_komposisi_normal_restr_area()
    {
        $query = "SELECT akk.kode_area AS kode_area, SUM(kn.baki_debet) AS baki_debet,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0,1,0)) AS noa_normal_kumulatif,
        SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_normal_kumulatif,
        ROUND(((SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0))) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_normal_kumulatif,
        SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_rest_kumulatif,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0 AND kn.kode_produk IN ('52', '53','54'),1,0)) AS noa_rest_kumulatif,
        ROUND((SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_rest_kumulatif
        FROM dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
        WHERE kn.tgl_laporan=CURDATE()
        AND kn.baki_debet > 0
        AND (SUBSTRING(kn.no_rekening,4,2)<>'50'
        OR (kn.no_rekening IN ('01-39-00001-19','04-53-00001-20')))
        GROUP BY akk.kode_area";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_data5_cabang_by_amount()
    {
        $query = "SELECT kode_kantor,nama_area_kerja,total_os, persen 
        FROM simar.`view_kre_nominatif_restruktur`
        WHERE kode_kantor <> '' ORDER BY persen DESC LIMIT 5";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_data5_cabang_by_noa()
    {
        $query = "SELECT a.kode_kantor,
        b.`nama_area_kerja`,
        COUNT(no_rekening) AS jumlah_noa
 FROM dpm_online.kre_nominatif a LEFT JOIN dpm_online.`app_kode_kantor` b
 ON a.`kode_kantor` = b.`kode_kantor`
 WHERE (kode_produk IN ('53','54') OR no_rekening ='01-39-00001-19' )   
 AND a.kode_kantor IN (09,04,00,11,01) AND tgl_laporan = CURDATE()
 GROUP BY a.`kode_kantor` ORDER BY jumlah_noa DESC";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_data_area_cabang_by_amount()
    {
        $query = "SELECT kode_kantor,nama_area_kerja,total_os, persen 
        FROM simar.`view_kre_nominatif_restruktur`
        WHERE kode_kantor <> '' ORDER BY persen DESC LIMIT 5";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }
    
    function get_data_area_cabang_by_noa()
    {
        $query = "SELECT kode_kantor,nama_area_kerja,total_os, persen 
        FROM simar.`view_kre_nominatif_restruktur`
        WHERE kode_kantor <> '' ORDER BY persen DESC LIMIT 5";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_noa_restruktur_kredit_by_plafon()
    {
        $query = "SELECT kode_kantor,nama_area_kerja,total_os, persen 
        FROM simar.`view_kre_nominatif_restruktur`
        WHERE kode_kantor <> '' ORDER BY persen DESC LIMIT 5";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_model_restruktur_kredit_by_noa()
    {
        $query = "SELECT
        (SELECT  COUNT(no_rekening)
        FROM dpm_online.`kre_nominatif` a LEFT JOIN dpm_online.kre_kode_type b
        ON a.`type_kredit` =  b.`KODE_TYPE_KREDIT`
        WHERE a.`type_kredit` ='700' AND no_rekening ='01-39-00001-19' AND tgl_laporan=CURDATE()) satu,
        (SELECT  COUNT(no_rekening)
        FROM dpm_online.`kre_nominatif` a LEFT JOIN dpm_online.kre_kode_type b
        ON a.`type_kredit` =  b.`KODE_TYPE_KREDIT`
        WHERE a.`type_kredit` ='740' AND no_rekening <>'01-39-00001-19' AND kode_produk IN ('53','54') AND tgl_laporan=CURDATE()) AS dua,
        (SELECT  COUNT(no_rekening)
        FROM dpm_online.`kre_nominatif` a LEFT JOIN dpm_online.kre_kode_type b
        ON a.`type_kredit` =  b.`KODE_TYPE_KREDIT`
        WHERE a.`type_kredit` ='730' AND no_rekening <>'01-39-00001-19' AND kode_produk IN ('53','54') AND tgl_laporan=CURDATE()) AS tiga,
        (SELECT  COUNT(no_rekening)
        FROM dpm_online.`kre_nominatif` a LEFT JOIN dpm_online.kre_kode_type b
        ON a.`type_kredit` =  b.`KODE_TYPE_KREDIT`
        WHERE a.`type_kredit` ='700' AND no_rekening <>'01-39-00001-19' AND kode_produk IN ('53','54') AND tgl_laporan=CURDATE()) AS empat";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }

    function get_restruktur_segmentasi()
    {
        $query = "SELECT akk.kode_area AS kode_area, SUM(kn.baki_debet) AS baki_debet,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0,1,0)) AS noa_normal_kumulatif,
        SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_normal_kumulatif,
        ROUND(((SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0))) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_normal_kumulatif,
        SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_rest_kumulatif,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0 AND kn.kode_produk IN ('52', '53','54'),1,0)) AS noa_rest_kumulatif,
        ROUND((SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_rest_kumulatif
        FROM dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
        WHERE kn.tgl_laporan=CURDATE()
        AND kn.baki_debet > 0
        AND (SUBSTRING(kn.no_rekening,4,2)<>'50'
        OR (kn.no_rekening IN ('01-39-00001-19','04-53-00001-20')))
        GROUP BY akk.kode_area";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }
    
    function get_collection_rasio()
    {
        $query = "SELECT akk.kode_area AS kode_area, SUM(kn.baki_debet) AS baki_debet,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0,1,0)) AS noa_normal_kumulatif,
        SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_normal_kumulatif,
        ROUND(((SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0))) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_normal_kumulatif,
        SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_rest_kumulatif,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0 AND kn.kode_produk IN ('52', '53','54'),1,0)) AS noa_rest_kumulatif,
        ROUND((SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_rest_kumulatif
        FROM dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
        WHERE kn.tgl_laporan=CURDATE()
        AND kn.baki_debet > 0
        AND (SUBSTRING(kn.no_rekening,4,2)<>'50'
        OR (kn.no_rekening IN ('01-39-00001-19','04-53-00001-20')))
        GROUP BY akk.kode_area";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }
    
    function get_current_rasio()
    {
        $query = "SELECT akk.kode_area AS kode_area, SUM(kn.baki_debet) AS baki_debet,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0,1,0)) AS noa_normal_kumulatif,
        SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_normal_kumulatif,
        ROUND(((SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0))) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_normal_kumulatif,
        SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_rest_kumulatif,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0 AND kn.kode_produk IN ('52', '53','54'),1,0)) AS noa_rest_kumulatif,
        ROUND((SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_rest_kumulatif
        FROM dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
        WHERE kn.tgl_laporan=CURDATE()
        AND kn.baki_debet > 0
        AND (SUBSTRING(kn.no_rekening,4,2)<>'50'
        OR (kn.no_rekening IN ('01-39-00001-19','04-53-00001-20')))
        GROUP BY akk.kode_area";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }
    
    function get_ns_restruktur()
    {
        $query = "SELECT akk.kode_area AS kode_area, SUM(kn.baki_debet) AS baki_debet,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0,1,0)) AS noa_normal_kumulatif,
        SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_normal_kumulatif,
        ROUND(((SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0))) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_normal_kumulatif,
        SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_rest_kumulatif,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0 AND kn.kode_produk IN ('52', '53','54'),1,0)) AS noa_rest_kumulatif,
        ROUND((SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_rest_kumulatif
        FROM dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
        WHERE kn.tgl_laporan=CURDATE()
        AND kn.baki_debet > 0
        AND (SUBSTRING(kn.no_rekening,4,2)<>'50'
        OR (kn.no_rekening IN ('01-39-00001-19','04-53-00001-20')))
        GROUP BY akk.kode_area";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }
    
    function get_tujuan_pinjaman_restruktur()
    {
        $query = "SELECT akk.kode_area AS kode_area, SUM(kn.baki_debet) AS baki_debet,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0,1,0)) AS noa_normal_kumulatif,
        SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_normal_kumulatif,
        ROUND(((SUM(kn.baki_debet) - SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0))) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_normal_kumulatif,
        SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) AS baki_rest_kumulatif,
        SUM(IF(kn.tgl_realisasi <= CURDATE() AND kn.baki_debet > 0 AND kn.kode_produk IN ('52', '53','54'),1,0)) AS noa_rest_kumulatif,
        ROUND((SUM(IF(kn.kode_produk IN ('52', '53','54'),kn.baki_debet,0)) / SUM(kn.baki_debet) ) * 100, 2) AS rasio_rest_kumulatif
        FROM dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
        WHERE kn.tgl_laporan=CURDATE()
        AND kn.baki_debet > 0
        AND (SUBSTRING(kn.no_rekening,4,2)<>'50'
        OR (kn.no_rekening IN ('01-39-00001-19','04-53-00001-20')))
        GROUP BY akk.kode_area";
        $hasil = $this->db->query($query);
        return $hasil->result();
    }
    
}
