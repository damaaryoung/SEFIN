<?php
class Model_collection extends CI_Model{
	public function __construction(){
		parent::__construct();
	}

	function data_collection_daily($tgl){
		$this->db->query("SET @pv_tgl='';");
		$this->db->query("SET @hk='';");
		$this->db->query("SET @max_tgl='';");
		$this->db->query("SET @tgl_awal='';");
		$this->db->query("SET @tgl_akhir='';");
		$this->db->query("SET @pv_tgl_awal='';");
		$this->db->query("SET @pv_tgl_akhir='';");
		$this->db->query("SELECT ".$tgl." INTO @pv_tgl;"); //tgl hari kerja hari ini
		$this->db->query("SELECT hk FROM master_hk_coll WHERE tgl=@pv_tgl INTO @hk;");
		$this->db->query("SELECT tgl FROM master_hk_coll WHERE hk=@hk
		AND bulan=MONTH(@pv_tgl - INTERVAL 1 MONTH)
		AND tahun=YEAR(@pv_tgl  - INTERVAL 1 MONTH) INTO @tgl_awal;");
		$this->db->query("SELECT IF((@tgl_awal='') OR (@tgl_awal IS NULL),@max_tgl,@tgl_awal) INTO @pv_tgl_awal;");
		$this->db->query("SELECT MAX(tgl) FROM master_hk_coll WHERE
		bulan=MONTH(@pv_tgl - INTERVAL 1 MONTH)
		AND tahun=YEAR(@pv_tgl  - INTERVAL 1 MONTH) INTO @max_tgl;");
        $this->db->query("SELECT tgl FROM master_hk_coll WHERE hk=@hk+1 
		AND bulan=MONTH(@pv_tgl - INTERVAL 1 MONTH)
		AND tahun=YEAR(@pv_tgl  - INTERVAL 1 MONTH) INTO @tgl_akhir;");
		$this->db->query("SELECT IF((@tgl_akhir='') OR (@tgl_akhir IS NULL),@max_tgl,@tgl_akhir) INTO @pv_tgl_akhir;");
		$query = $this->db->query("SELECT @pv_tgl AS tgl_hi, @pv_tgl_awal AS tgl_hl, @pv_tgl_akhir AS tgl_hln,
		vbz.kode_area, vbz.nama_area_kerja,
		vbz.ang_current,vbz.ang_lancar,vbz.ang_dpk,vbz.ang_dpk_dpk,vbz.ang_npl,
		vbz.rasio_bucket_0 AS rasio_bucket_0_hi,
		vbz.rasio_bucket_1 AS rasio_bucket_1_hi, vbz.rasio_bucket_2 AS rasio_bucket_2_hi,
		vbz.rasio_bucket_3 AS rasio_bucket_3_hi, vbz.rasio_npl AS rasio_bucket_npl_hi,
		vbzl.rasio_bucket_0 AS rasio_bucket_0_hl,
		vbzl.rasio_bucket_1 AS rasio_bucket_1_hl, vbzl.rasio_bucket_2 AS rasio_bucket_2_hl,
		vbzl.rasio_bucket_3 AS rasio_bucket_3_hl, vbzl.rasio_npl AS rasio_bucket_npl_hl,
		vbz.rasio_bucket_0 - vbzl.rasio_bucket_0 AS gap_current_hihl,
		vbzl.rasio_bucket_1 - vbz.rasio_bucket_1 AS gap_lancar_hihl,
		vbzl.rasio_bucket_2 - vbz.rasio_bucket_2 AS gap_dpk_hihl,
		vbzl.rasio_bucket_3 - vbz.rasio_bucket_3 AS gap_dpk_dpk_hihl,
		vbzl.rasio_npl - vbz.rasio_npl AS gap_npl_hihl,
		vbzln.rasio_bucket_0 AS rasio_bucket_0_hln,
		vbzln.rasio_bucket_1 AS rasio_bucket_1_hln, vbzln.rasio_bucket_2 AS rasio_bucket_2_hln,
		vbzln.rasio_bucket_3 AS rasio_bucket_3_hln, vbzln.rasio_npl AS rasio_bucket_npl_hln,
		vbz.rasio_bucket_0 - vbzln.rasio_bucket_0 AS gap_current_hihln,
		vbzln.rasio_bucket_1 - vbz.rasio_bucket_1 AS gap_lancar_hihln,
		vbzln.rasio_bucket_2 - vbz.rasio_bucket_2 AS gap_dpk_hihln,
		vbzln.rasio_bucket_3 - vbz.rasio_bucket_3 AS gap_dpk_dpk_hihln,
		vbzln.rasio_npl - vbz.rasio_npl AS gap_npl_hihln
		 FROM dpm_online.`view_bucket_zero` vbz
		LEFT JOIN dpm_online.`view_bucket_zero_lalu` vbzl ON vbzl.nama_area_kerja=vbz.nama_area_kerja
		LEFT JOIN dpm_online.`view_bucket_zero_lalu_next` vbzln ON vbzln.nama_area_kerja=vbz.nama_area_kerja
		UNION ALL
		SELECT @pv_tgl AS tgl_hi, @pv_tgl_awal AS tgl_hl, @pv_tgl_akhir AS tgl_hln,
		vbz.kode_area, vbz.nama_area_kerja,
		vbz.ang_current,vbz.ang_lancar,vbz.ang_dpk,vbz.ang_dpk_dpk,vbz.ang_npl,
		vbz.rasio_bucket_0 AS rasio_bucket_0_hi,
		vbz.rasio_bucket_1 AS rasio_bucket_1_hi, vbz.rasio_bucket_2 AS rasio_bucket_2_hi,
		vbz.rasio_bucket_3 AS rasio_bucket_3_hi, vbz.rasio_npl AS rasio_bucket_npl_hi,
		vbzl.rasio_bucket_0 AS rasio_bucket_0_hl,
		vbzl.rasio_bucket_1 AS rasio_bucket_1_hl, vbzl.rasio_bucket_2 AS rasio_bucket_2_hl,
		vbzl.rasio_bucket_3 AS rasio_bucket_3_hl, vbzl.rasio_npl AS rasio_bucket_npl_hl,
		vbz.rasio_bucket_0 - vbzl.rasio_bucket_0 AS gap_current_hihl,
		vbzl.rasio_bucket_1 - vbz.rasio_bucket_1 AS gap_lancar_hihl,
		vbzl.rasio_bucket_2 - vbz.rasio_bucket_2 AS gap_dpk_hihl,
		vbzl.rasio_bucket_3 - vbz.rasio_bucket_3 AS gap_dpk_dpk_hihl,
		vbzl.rasio_npl - vbz.rasio_npl AS gap_npl_hihl,
		vbzln.rasio_bucket_0 AS rasio_bucket_0_hln,
		vbzln.rasio_bucket_1 AS rasio_bucket_1_hln, vbzln.rasio_bucket_2 AS rasio_bucket_2_hln,
		vbzln.rasio_bucket_3 AS rasio_bucket_3_hln, vbzln.rasio_npl AS rasio_bucket_npl_hln,
		vbz.rasio_bucket_0 - vbzln.rasio_bucket_0 AS gap_current_hihln,
		vbzln.rasio_bucket_1 - vbz.rasio_bucket_1 AS gap_lancar_hihln,
		vbzln.rasio_bucket_2 - vbz.rasio_bucket_2 AS gap_dpk_hihln,
		vbzln.rasio_bucket_3 - vbz.rasio_bucket_3 AS gap_dpk_dpk_hihln,
		vbzln.rasio_npl - vbz.rasio_npl AS gap_npl_hihln
		 FROM dpm_online.`view_bucket_zero_konsol` vbz
		LEFT JOIN dpm_online.`view_bucket_zero_lalu_konsol` vbzl ON vbzl.nama_area_kerja=vbz.nama_area_kerja
		LEFT JOIN dpm_online.`view_bucket_zero_lalu_next_konsol` vbzln ON vbzln.nama_area_kerja=vbz.nama_area_kerja;");
		return $query;
	}
}