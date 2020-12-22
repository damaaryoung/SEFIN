<?php
class Model_dashboard_collection extends CI_Model{
	public function __construction(){
		parent::__construct();
	}

	public function get_dt_npl_console_list($start,$limit,$search,$tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
		$sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
            	FROM
                dpm_online.kre_nominatif kn
            	LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            	LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            	LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            	LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            	LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            	LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            	WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
        	$sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
            	GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        //die($sql);
        return $this->db->query($sql, array($start, $limit));
	}

	public function get_dt_total_npl_console_list($search,$tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
		$sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
            	FROM
                dpm_online.kre_nominatif kn
            	LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            	LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            	LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            	LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            	LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            	LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            	WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
        	$sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
            	GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
	}

    public function get_npl_console_list($tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
            $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND kn.tgl_laporan = $tgl
                GROUP BY kn.no_rekening";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getKodeArea(){
        $this->db->from('dpm_online.app_kode_kantor');
        $this->db->group_by('kode_area');
        return $this->db->get();
    }

    public function get_dt_npl_console_area_list($start,$limit,$search,$tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl' AND akk.kode_area = '$kode_area'
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_npl_console_area_list($search,$tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl' AND akk.kode_area = '$kode_area'
                GROUP BY kn.no_rekening";
        return $this->db->query($sql);
    }

    public function get_npl_console_area_list($tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 
                AND kn.tgl_laporan = '$tgl' AND akk.kode_area = '$kode_area'
                GROUP BY kn.no_rekening";
        return $this->db->query($sql);

    }

    public function get_dt_npl_console_cabang_list($start,$limit,$search,$tgl,$kode_cabang){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl' AND akk.nama_area_kerja = '$kode_cabang'
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
                // die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_npl_console_cabang_list($search,$tgl,$kode_cabang){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl' AND akk.nama_area_kerja = '$kode_cabang'
                GROUP BY kn.no_rekening";
        return $this->db->query($sql);
    }

    public function get_npl_console_cabang_list($tgl,$kode_cabang){
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.ft_hari > 90, 'NPL', 'Non NPL') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 
                AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang'
                GROUP BY kn.no_rekening";
        return $this->db->query($sql);
    }

    public function get_dt_0ns_console_list($start,$limit,$search,$tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    DATE('$tgl'),
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                      DATE('$tgl'),
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = DATE('$tgl')";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_0ns_console_list($search,$tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    DATE('$tgl'),
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                      DATE('$tgl'),
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = DATE('$tgl')";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    function get_0ns_console_list($tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    $tgl,
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                     $tgl,
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = $tgl GROUP BY kn.no_rekening";
                  // die($tgl);
        return $this->db->query($sql);
    }


public function get_dt_0ns_console_area_list($start,$limit,$search,$tgl,$kode_area){
    $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    DATE('$tgl'),
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                      DATE('$tgl'),
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = DATE('$tgl') AND akk.kode_area = '$kode_area'";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        //die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_0ns_console_area_list($search,$tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    DATE('$tgl'),
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                      DATE('$tgl'),
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = DATE('$tgl') AND akk.kode_area = '$kode_area'";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    function get_0ns_console_area_list($tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    $tgl,
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                     $tgl,
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = $tgl AND akk.kode_area = '$kode_area'";

        return $this->db->query($sql);
    }


public function get_dt_0ns_console_cabang_list($start,$limit,$search,$tgl,$kode_cabang){
    $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    DATE('$tgl'),
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                      DATE('$tgl'),
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = DATE('$tgl') AND akk.nama_area_kerja = '$kode_cabang'";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        // die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_0ns_console_cabang_list($search,$tgl,$kode_cabang){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    DATE('$tgl'),
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                      DATE('$tgl'),
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = DATE('$tgl') AND akk.nama_area_kerja = '$kode_cabang'";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                //die($sql);
        return $this->db->query($sql);
    }

    function get_0ns_console_cabang_list($tgl,$kode_cabang){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(
                    kn.jumlah_tunggakan = 0 
                    AND kn.ft_angsuran = 0,
                    'PAID',
                    'UNPAID'
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(
                DATE_ADD(
                    $tgl,
                        INTERVAL - 6 MONTH
                    ),
                    '%Y-%m-01'
                ) 
                AND LAST_DAY(
                    DATE_ADD(
                     $tgl,
                      INTERVAL - 1 MONTH
                    )
                ) 
                  AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang'";
        return $this->db->query($sql);
    }

public function get_dt_0_all_console_list($start,$limit,$search,$tgl){
    $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_0_all_console_list($search,$tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
                GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    public function get_0_all_console_list($tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
            $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND kn.tgl_laporan = $tgl
                GROUP BY kn.no_rekening";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_dt_0_all_console_area_list($start,$limit,$search,$tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND akk.kode_area = '$kode_area'";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_0_all_console_area_list($search,$tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND  akk.kode_area = '$kode_area' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
                GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    public function get_0_all_console_area_list($tgl,$kode_area){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
            $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND kn.tgl_laporan = $tgl AND akk.kode_area = '$kode_area'
                GROUP BY kn.no_rekening";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_dt_0_all_console_cabang_list($start,$limit,$search,$tgl,$kode_cabang){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND akk.nama_area_kerja = '$kode_cabang'";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_0_all_console_cabang_list($search,$tgl,$kode_cabang){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND  akk.nama_area_kerja = '$kode_cabang' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_cabang_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = '$tgl'
                GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    public function get_0_all_console_cabang_list($tgl,$kode_cabang){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
            $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                IF(kn.jumlah_tunggakan = 0, 'Bucket 0', 
                    IF(kn.ft_hari BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 'Bucket 1',
                        IF(kn.ft_hari BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 'Bucket 2',
                            IF(kn.ft_hari BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 'Bucket 3',
                                'NPL'
                            )
                        )
                    )
                ) AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang'
                GROUP BY kn.no_rekening";
        $query = $this->db->query($sql);
        return $query;
    }

    public function get_dt_fid_compre_console_list($start,$limit,$search,$tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH)) 
                AND kn.tgl_laporan = $tgl ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_fid_compre_console_list($search,$tgl){
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50
            AND kn.baki_debet > 0 
            AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH)) 
            AND kn.tgl_laporan = $tgl ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                    // die($sql);
        return $this->db->query($sql);
    }

    public function get_fid_compre_console_list($tgl) {
        $tgl == null ? $tgl = date("Y-m-d") : $tgl;
        $sql = "SELECT
        akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
        FROM
        dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor = kn.kode_kantor
        LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4 = kn.kode_group4
        LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN = kn.bi_jenis_penggunaan
        LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk = kn.kode_produk
        LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7 = kn.kode_group7
        LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5 = kn.kode_group5
        WHERE kn.kode_produk <> 50
        AND kn.baki_debet > 0
        AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
        AND kn.tgl_laporan = $tgl
        GROUP BY kn.no_rekening ";
        $query = $this->db-> query($sql);
        return $query;
    }


    public function get_dt_fid_compre_console_area_list($start,$limit,$search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH)) 
                AND kn.tgl_laporan = $tgl  AND akk.kode_area = '$kode_area' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_fid_compre_console_area_list($search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50
            AND kn.baki_debet > 0 
            AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH)) 
            AND kn.tgl_laporan = $tgl AND akk.kode_area = '$kode_area' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                    // die($sql);
        return $this->db->query($sql);
    }

    public function get_fid_compre_console_area_list($tgl,$kode_area) {
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
        akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
        FROM
        dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor = kn.kode_kantor
        LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4 = kn.kode_group4
        LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN = kn.bi_jenis_penggunaan
        LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk = kn.kode_produk
        LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7 = kn.kode_group7
        LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5 = kn.kode_group5
        WHERE kn.kode_produk <> 50
        AND kn.baki_debet > 0
        AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
        AND kn.tgl_laporan = $tgl AND akk.kode_area = '$kode_area'
        GROUP BY kn.no_rekening ";
        $query = $this->db-> query($sql);
        return $query;
    }
    public function get_dt_fid_compre_console_cabang_list($start,$limit,$search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH)) 
                AND kn.tgl_laporan = $tgl  AND akk.nama_area_kerja = '$kode_cabang' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_fid_compre_console_cabang_list($search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50
            AND kn.baki_debet > 0 
            AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH)) 
            AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                    // die($sql);
        return $this->db->query($sql);
    }

    public function get_fid_compre_console_cabang_list($tgl,$kode_cabang) {
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
        akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari > 30, 'FID', 'NON FID') AS status
        FROM
        dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor = kn.kode_kantor
        LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4 = kn.kode_group4
        LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN = kn.bi_jenis_penggunaan
        LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk = kn.kode_produk
        LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7 = kn.kode_group7
        LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5 = kn.kode_group5
        WHERE kn.kode_produk <> 50
        AND kn.baki_debet > 0
        AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
        AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang'
        GROUP BY kn.no_rekening ";
        $query = $this->db-> query($sql);
        return $query;
    }

public function get_dt_fid_ever_console_list($start,$limit,$search,$tgl){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
            AND kn.tgl_laporan = $tgl ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_fid_ever_console_list($search,$tgl){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
            AND kn.tgl_laporan = $tgl ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                    // die($sql);
        return $this->db->query($sql);
    }

    public function get_fid_ever_console_list($tgl) {
        $sql = "SELECT
        akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
        FROM
        dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor = kn.kode_kantor
        LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4 = kn.kode_group4
        LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN = kn.bi_jenis_penggunaan
        LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk = kn.kode_produk
        LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7 = kn.kode_group7
        LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5 = kn.kode_group5
        WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
        AND kn.tgl_laporan = $tgl
        GROUP BY kn.no_rekening ";
        $query = $this->db-> query($sql);
        return $query;
    }

    public function get_dt_fid_ever_console_area_list($start,$limit,$search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
            AND kn.tgl_laporan = $tgl AND akk.kode_area = '$kode_area' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_fid_ever_console_area_list($search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
            AND kn.tgl_laporan = $tgl AND akk.kode_area = '$kode_area' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                    // die($sql);
        return $this->db->query($sql);
    }

    public function get_fid_ever_console_area_list($tgl,$kode_area) {
        $sql = "SELECT
        akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
        FROM
        dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor = kn.kode_kantor
        LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4 = kn.kode_group4
        LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN = kn.bi_jenis_penggunaan
        LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk = kn.kode_produk
        LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7 = kn.kode_group7
        LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5 = kn.kode_group5
        WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
        AND kn.tgl_laporan = $tgl AND akk.kode_area = '$kode_area'
        GROUP BY kn.no_rekening ";
        $query = $this->db-> query($sql);
        return $query;
    }


public function get_dt_fid_ever_console_cabang_list($start,$limit,$search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50 
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
            AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_fid_ever_console_cabang_list($search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
            akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
            FROM
            dpm_online.kre_nominatif kn
            LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
            LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
            LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
            LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
            LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
            LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
            WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
            AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang' ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY kn.no_rekening";
                    // die($sql);
        return $this->db->query($sql);
    }

    public function get_fid_ever_console_cabang_list($tgl,$kode_cabang) {
        $sql = "SELECT
        akk.nama_area_kerja,
            kn.nama_nasabah,
            kn.no_rekening,
            kn.tgl_realisasi,
            kn.kolek_bi,
            kn.ft_hari,
            kn.ft_angsuran,
            kn.jml_pinjaman,
            kn.jml_angsuran,
            kn.baki_debet,
            kn.jumlah_angsuran,
            kkg4.deskripsi_group4 AS asal_data,
            IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
            kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
            kp.DESKRIPSI_PRODUK AS produk,
            kkg7.deskripsi_group7 AS segmentasi,
            if(kn.ft_hari_denda > 30, 'FID', 'NON FID') AS status
        FROM
        dpm_online.kre_nominatif kn
        LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor = kn.kode_kantor
        LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4 = kn.kode_group4
        LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN = kn.bi_jenis_penggunaan
        LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk = kn.kode_produk
        LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7 = kn.kode_group7
        LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5 = kn.kode_group5
        WHERE kn.kode_produk <> 50
                AND kn.baki_debet > 0 
                AND kn.tgl_realisasi BETWEEN DATE_FORMAT(DATE_ADD($tgl, INTERVAL - 7 MONTH), '%Y-%m-01') AND LAST_DAY(DATE_ADD($tgl, INTERVAL - 2 MONTH))
        AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '$kode_cabang'
        GROUP BY kn.no_rekening ";
        $query = $this->db-> query($sql);
        return $query;
    }


    public function get_dt_current_ratio_console_list($start,$limit,$search,$tgl){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status 
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                 WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = $tgl
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        //die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_current_ratio_console_list($search,$tgl){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = $tgl
                GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    public function get_current_ratio_console_list($tgl){
            $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND kn.tgl_laporan = '$tgl'
                GROUP BY kn.no_rekening";
                // die($sql);
        $query = $this->db->query($sql);
        return $query;
    }
public function get_dt_current_ratio_console_area_list($start,$limit,$search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status 
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                 WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = $tgl AND akk.kode_area = '".$kode_area."'
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        //die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_current_ratio_console_area_list($search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = $tgl AND akk.kode_area = '".$kode_area."'
                GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    public function get_current_ratio_console_area_list($tgl,$kode_area){
            $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND kn.tgl_laporan = '$tgl' AND akk.kode_area= '$kode_area' 
                GROUP BY kn.no_rekening";
                // die($sql);
        $query = $this->db->query($sql);
        return $query;
    }

public function get_dt_current_ratio_console_cabang_list($start,$limit,$search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status 
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                 WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '".$kode_cabang."'
                GROUP BY kn.no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        //die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_current_ratio_console_cabang_list($search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nnama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .="  AND kn.tgl_laporan = $tgl AND akk.nama_area_kerja = '".$kode_cabang."'
                GROUP BY kn.no_rekening";
                // die($sql);
        return $this->db->query($sql);
    }

    public function get_current_ratio_console_cabang_list($tgl,$kode_cabang){
            $sql = "SELECT
                akk.nama_area_kerja,
                kn.nama_nasabah,
                kn.no_rekening,
                kn.tgl_realisasi,
                kn.kolek_bi,
                kn.ft_hari,
                kn.ft_angsuran,
                kn.jml_pinjaman,
                kn.jml_angsuran,
                kn.baki_debet,
                kn.jumlah_angsuran,
                kkg4.deskripsi_group4 AS asal_data,
                IF(kkg5.deskripsi_group5 IS NULL, kn.kode_group5, kkg5.deskripsi_group5) AS nama_asal_data,
                kjp.DESKRIPSI_JENIS_PENGGUNAAN AS tujuan,
                kp.DESKRIPSI_PRODUK AS produk,
                kkg7.deskripsi_group7 AS segmentasi,
                if(kn.jumlah_tunggakan=0, 'PAID', 'UNPAID') AS status
                FROM
                dpm_online.kre_nominatif kn
                LEFT JOIN dpm_online.app_kode_kantor akk ON akk.kode_kantor=kn.kode_kantor
                LEFT JOIN dpm_online.kre_kode_group4 kkg4 ON kkg4.kode_group4=kn.kode_group4
                LEFT JOIN dpm_online.kre_kode_jenis_penggunaan kjp ON kjp.KODE_JENIS_PENGGUNAAN=kn.bi_jenis_penggunaan
                LEFT JOIN dpm_online.kre_produk kp ON kp.kode_produk=kn.kode_produk
                LEFT JOIN dpm_online.kre_kode_group7 kkg7 ON kkg7.kode_group7=kn.kode_group7
                LEFT JOIN dpm_online.kre_kode_group5 kkg5 ON kkg5.kode_group5=kn.kode_group5
                WHERE kn.baki_debet > 0 AND kn.tgl_laporan = '$tgl' AND akk.nama_area_kerja= '$kode_cabang' 
                GROUP BY kn.no_rekening";
                // die($sql);
        $query = $this->db->query($sql);
        return $query;
    }

    function get_data_deliquency($tgl){
        $sql_set = "SET @pv_tgl = $tgl";
        // die($sql_set);
        $this->db->query($sql_set);
        $sql = "SELECT * FROM dpm_online.vmicro_delinquensi_kantor";
        return $this->db->query($sql);
    }

    function get_data_deliquency_area($tgl,$kode_area){
        $this->db->query("SET @pv_tgl = $tgl");
        $sql = "SELECT * FROM dpm_online.vmicro_delinquensi_kantor a
        INNER JOIN dpm_online.app_kode_kantor b ON a.kode_kantor = b.kode_kantor
        WHERE b.kode_area = '$kode_area'";
        // die($sql);
        return $this->db->query($sql);
    }

    function get_data_deliquency_cabang($tgl,$kode_cabang){
        $this->db->query("SET @pv_tgl = $tgl");
        $sql = "SELECT * FROM dpm_online.vmicro_delinquensi_kantor a
        INNER JOIN dpm_online.app_kode_kantor b ON a.kode_kantor = b.kode_kantor
        WHERE b.nama_area_kerja = '$kode_cabang'";  
        // die($sql);
        return $this->db->query($sql);
    }

public function get_dt_bucket_roll_console_list($start,$limit,$search,$tgl){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            #END BACK TO CURRENT
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl)))
            ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_bucket_roll_console_list($search,$tgl){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl)))
            ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY no_rekening";
        return $this->db->query($sql);
    }

    function get_data_bucket_roll($tgl){
        $sql = "SELECT 
                no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl))
                )
            GROUP BY no_rekening";
            // die($sql);
        return $this->db->query($sql);
    }

public function get_dt_bucket_roll_console_area_list($start,$limit,$search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                                #END UNROLL
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                            #END ROLLUP
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                                    #END ROLL BACK
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            #END BACK TO CURRENT
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl))) AND akk.kode_area = '".$kode_area."'
            ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        // die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_bucket_roll_console_area_list($search,$tgl,$kode_area){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                                #END UNROLL
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                            #END ROLLUP
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                                    #END ROLL BACK
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            #END BACK TO CURRENT
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl))) AND akk.kode_area = '".$kode_area."'
            ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY no_rekening";
        // die($sql);
        return $this->db->query($sql);
    }

    public function get_dt_bucket_roll_console_cabang_list($start,$limit,$search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                                #END UNROLL
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                            #END ROLLUP
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                                    #END ROLL BACK
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            #END BACK TO CURRENT
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl))) AND akk.nama_area_kerja = '".$kode_cabang."'
            ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY no_rekening ORDER BY akk.nama_area_kerja DESC LIMIT ?,?";
        // die($sql);
        return $this->db->query($sql, array($start, $limit));
    }

    public function get_dt_total_bucket_roll_console_cabang_list($search,$tgl,$kode_cabang){
        $tgl = $this->input->post('tgl');
            if(empty($tgl)){
                $tgl = "CURDATE()";
            }else {
                $tgl = "DATE('$tgl')";
            }
        $sql = "SELECT no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                                #END UNROLL
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                            #END ROLLUP
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                                    #END ROLL BACK
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            #END BACK TO CURRENT
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl))) AND akk.nama_area_kerja = '".$kode_cabang."'
            ";
        if(!empty($search)){
            $sql .= "AND (akk.nama_area_kerja LIKE '%".$search."%')";
        }
        $sql .=" GROUP BY no_rekening";
        return $this->db->query($sql);
    }

    function get_data_bucket_roll_area($tgl,$kode_area){
        $sql = "SELECT 
                no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl)) AND akk.kode_area = '".$kode_area."'
                )
            GROUP BY no_rekening";
            // die($sql);
        return $this->db->query($sql);
    }

    function get_data_bucket_roll_cabang($tgl,$kode_cabang){
        $sql = "SELECT 
                no_rekening,
                k3.nasabah_id,
                k3.kode_kantor,
                akk.nama_area_kerja,
                akk.kode_area,
                ns.nama_nasabah,
                ns.alamat,
                k3.tgl_realisasi,
                SUM(IF(k3.bulan = MONTH($tgl), k3.baki_debet, 0)) AS baki_debet,
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) AS ftb_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) AS ftb_now,
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'UN ROLL',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'UN ROLL',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'UN ROLL',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'UN ROLL',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'UN ROLL',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=0 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL UP',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL UP',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL UP',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))>3, 'ROLL UP',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=1, 'ROLL BACK',
                                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=2, 'ROLL BACK',
                                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=3, 'ROLL BACK',
                IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=1 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                    IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=2 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                        IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))=3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            IF(MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0))>3 AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))=0, 'BACK TO CURRENT',
                            '-'
                            )
                        )
                    )
                )
                                    )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                )
                                )
                            )
                        )
                    )
                    
                ) AS stt,
                
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) AS ftp_lalu,
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) AS ftp_now,
                CONCAT(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                ', ',
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)),
                ' - ',
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0))
                ) AS flow,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_pokok, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_pokok,
                IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) < MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)),
                'Roll Rate',
                IF(
                    MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) > MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                    AND (
                MAX(IF(k3.bulan = MONTH($tgl), k3.ft_pokok, 0)) > 0
                    ),
                    'Roll Back',
                    IF(
                MAX(IF(k3.bulan = MONTH($tgl - INTERVAL 1 MONTH), k3.ft_bunga, 0)) = MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) 
                AND MAX(IF(k3.bulan = MONTH($tgl), k3.ft_bunga, 0)) > 0,
                'UnRoll',
                'Current'
                    )
                )
                ) AS keterangan_flow_bunga,
                k3.kolek_bi,
                last_update 
            FROM
                webtool.bucket_nol k3 
                LEFT JOIN dpm_online.nasabah ns ON ns.nasabah_id = k3.nasabah_id 
                LEFT JOIN dpm_online.kre_kode_group3 g3 ON g3.kode_group3 = k3.kode_group3 
                LEFT JOIN dpm_online.app_kode_kantor akk  ON akk.kode_kantor = k3.kode_kantor 
            WHERE
                IF(YEAR(CURDATE())=YEAR($tgl),
                    (k3.bulan IN (MONTH($tgl - INTERVAL 1 MONTH), MONTH($tgl))) AND (k3.tahun = YEAR($tgl)),
                    (k3.bulan = MONTH($tgl - INTERVAL 1 MONTH) AND k3.tahun = YEAR($tgl)-1) OR (k3.bulan = MONTH($tgl) AND k3.tahun = YEAR($tgl)) AND akk.nama_area_kerja = '".$nama_area_kerj."'
                )
            GROUP BY no_rekening";
            // die($sql);
        return $this->db->query($sql);
    }

    function bucket_nol_console($tgl) {
        $sql = "SELECT 
                akk.`kode_area`,
                akk.`kode_kantor`,
                akk.`nama_area_kerja`,
                SUM(IF(kn.jumlah_tunggakan = 0, 1, 0)) AS noa_bucket_0,
                SUM(IF(kn.jumlah_tunggakan = 0, kn.`baki_debet`, 0)) AS bd_bucket_0,
                ROUND((SUM(IF(kn.jumlah_tunggakan = 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_0,
                SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_1,
                SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_1,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_1,
                SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_2,
                SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_2,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_2,
                SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_3,
                SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_3,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_3,
                SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_npl,
                SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_npl,
                ROUND((SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_npl
            FROM
                dpm_online.`kre_nominatif` kn 
                    LEFT JOIN dpm_online.`app_kode_kantor` akk 
                    ON akk.`kode_kantor` = kn.`kode_kantor`
            WHERE kn.baki_debet > 0 
                AND kn.tgl_laporan = $tgl";

        $query = $this->db->query($sql);
        return $query;
    }

    function bucket_nol_console_area($tgl) {
        $sql = "SELECT 
                akk.`kode_area`,
                akk.`kode_kantor`,
                akk.`nama_area_kerja`,
                SUM(IF(kn.jumlah_tunggakan = 0, 1, 0)) AS noa_bucket_0,
                SUM(IF(kn.jumlah_tunggakan = 0, kn.`baki_debet`, 0)) AS bd_bucket_0,
                ROUND((SUM(IF(kn.jumlah_tunggakan = 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_0,
                SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_1,
                SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_1,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_1,
                SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_2,
                SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_2,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_2,
                SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_3,
                SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_3,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_3,
                SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_npl,
                SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_npl,
                ROUND((SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_npl
            FROM
                dpm_online.`kre_nominatif` kn 
                    LEFT JOIN dpm_online.`app_kode_kantor` akk 
                    ON akk.`kode_kantor` = kn.`kode_kantor`
            WHERE kn.baki_debet > 0 
                AND kn.tgl_laporan = $tgl
                GROUP BY akk.`kode_area`";
        $query = $this->db->query($sql);
        return $query;
    }

    function bucket_nol_console_cabang($tgl) {
        $sql = "SELECT 
                akk.`kode_area`,
                akk.`kode_kantor`,
                akk.`nama_area_kerja`,
                SUM(IF(kn.jumlah_tunggakan = 0, 1, 0)) AS noa_bucket_0,
                SUM(IF(kn.jumlah_tunggakan = 0, kn.`baki_debet`, 0)) AS bd_bucket_0,
                ROUND((SUM(IF(kn.jumlah_tunggakan = 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_0,
                SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_1,
                SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_1,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 0 AND 30 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_1,
                SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_2,
                SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_2,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 31 AND 60 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_2,
                SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_bucket_3,
                SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_bucket_3,
                ROUND((SUM(IF(kn.`ft_hari` BETWEEN 61 AND 90 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_bucket_3,
                SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, 1, 0)) AS noa_npl,
                SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, kn.`baki_debet`, 0)) AS bd_npl,
                ROUND((SUM(IF(kn.`ft_hari` >90 AND kn.jumlah_tunggakan > 0, kn.baki_debet, 0)) / SUM(kn.baki_debet)) * 100, 2) AS rasio_npl
            FROM
                dpm_online.`kre_nominatif` kn 
                    LEFT JOIN dpm_online.`app_kode_kantor` akk 
                    ON akk.`kode_kantor` = kn.`kode_kantor`
            WHERE kn.baki_debet > 0 
                AND kn.tgl_laporan = $tgl
                GROUP BY akk.nama_area_kerja";

        $query = $this->db->query($sql);
        return $query;
    }

}
?>