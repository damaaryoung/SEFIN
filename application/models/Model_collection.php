<?php
class Model_collection extends CI_Model{
	public function __construction(){
		parent::__construct();
	}

	function get_hari_kerja($tgl){
		$this->db->query("SET @pv_tgl='';");
		$this->db->query("SELECT ".$tgl." INTO @pv_tgl;");
		$sql = "SELECT hk FROM master_hk_coll WHERE tgl=@pv_tgl";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_hk_bulan_lalu($tgl){
		$this->db->query("SET @tgl_awal='';");
		$this->db->query("SET @pv_tgl_awal='';");
		$this->db->query("SET @max_tgl='';");
		$this->db->query("SELECT ".$tgl." INTO @pv_tgl;");
		$this->db->query("SELECT hk FROM master_hk_coll WHERE tgl=@pv_tgl INTO @hk;");
		$this->db->query("SELECT tgl FROM master_hk_coll WHERE hk=@hk
		AND bulan=MONTH(@pv_tgl - INTERVAL 1 MONTH)
		AND tahun=YEAR(@pv_tgl  - INTERVAL 1 MONTH) INTO @tgl_awal;");
		$this->db->query("SELECT IF((@tgl_awal='') OR (@tgl_awal IS NULL),@max_tgl,@tgl_awal) INTO @pv_tgl_awal;");
		$sql = "SELECT hk FROM master_hk_coll WHERE tgl=@pv_tgl_awal";
		$query = $this->db->query($sql);
		return $query;
	}


	function get_next_hk_bulan_lalu($tgl){
		$this->db->query("SET @tgl_awal='';");
		$this->db->query("SET @pv_tgl_awal='';");
		$this->db->query("SET @max_tgl='';");
		$this->db->query("SELECT ".$tgl." INTO @pv_tgl;");
		$this->db->query("SELECT hk FROM master_hk_coll WHERE tgl=@pv_tgl INTO @hk;");
		$this->db->query("SELECT MAX(tgl) FROM master_hk_coll WHERE
		bulan=MONTH(@pv_tgl - INTERVAL 1 MONTH)
		AND tahun=YEAR(@pv_tgl  - INTERVAL 1 MONTH) INTO @max_tgl;");
        $this->db->query("SELECT tgl FROM master_hk_coll WHERE hk=@hk+1 
		AND bulan=MONTH(@pv_tgl - INTERVAL 1 MONTH)
		AND tahun=YEAR(@pv_tgl  - INTERVAL 1 MONTH) INTO @tgl_akhir;");
		$this->db->query("SELECT IF((@tgl_akhir='') OR (@tgl_akhir IS NULL),@max_tgl,@tgl_akhir) INTO @pv_tgl_akhir;");
		$sql = "SELECT hk FROM master_hk_coll WHERE tgl=@pv_tgl_akhir";
		$query = $this->db->query($sql);
		return $query;
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
		vbz.ang_bd_current,vbz.ang_bd_lancar,vbz.ang_bd_dpk,vbz.ang_bd_dpk_dpk,vbz.ang_bd_npl, #ini update 15/04/2021
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
		vbz.ang_bd_current,vbz.ang_bd_lancar,vbz.ang_bd_dpk,vbz.ang_bd_dpk_dpk,vbz.ang_bd_npl, #ini update 15/04/2021
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

	function get_collector($kode_kolektor){
		return $this->db->get_where('dpm_online.kre_kode_group3',array('kode_group3'=>$kode_kolektor));
	}

	function get_id_nasabah($nasabah_id){
		return $this->db->get_where('dpm_online.nasabah',array('NASABAH_ID'=>$nasabah_id));
	}

	function get_kode_kantor($kode_kantor){
		return $this->db->get_where('dpm_online.app_kode_kantor', array('kode_kantor'=>$kode_kantor));
	}

	function get_data_master_all_assigment_collector($no_rekening){
		return $this->db->get_where('master_all_assigment_kolektor',array('NO_REKENING'=>$no_rekening));
	}

	function insert_data_master_all_assigment_kolektor($post){
		$this->db->insert("master_all_assigment_kolektor" ,$post);
		return $this->db->affected_rows();
	}

	function update_data_master_all_assigment_kolektor($no_rekening, $post){
		$this->db->update("master_all_assigment_kolektor", $post, array('NO_REKENING'=>$no_rekening));
		return $this->db->affected_rows();
	}

	function duplicate_insert($table, $values){
		$updatestr = array();
		$keystr = array();
		$valstr = array();

		foreach($values as $key => $val){
			$updatestr[] = $key." = '".$val."'";
			$keystr[] = $key;
			$valstr[] = "'".$val."'";
		}

		$sql = "INSERT INTO ".$table." (".implode(',', $keystr).")";
		$sql .= " VALUES(".implode(',', $valstr).")";
		$sql .= " ON DUPLICATE KEY UPDATE ".implode(', ',$updatestr);
		// die($sql);
		$query = $this->db->query($sql);
	}

	function get_duplicate_assigment($no_rekening,$ft_angsuran){
		$sql = 'SELECT * FROM master_all_assigment_kolektor WHERE NO_REKENING = "'.$no_rekening.'" AND ft_angsuran = "'.$ft_angsuran.'"';
		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function get_datatable_master_all_assigment_collector($start,$limit,$search,$kode_kolektor,$nasabah_id,$kode_area,$nama_area_kerja){
		$this->load->model('model_menu');
		$outputs   = $this->model_menu->getUser();
		$user_id   = $outputs['data']['user_id'];
        
        $get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
        WHERE user_id='$user_id'";

        $get_pic = "SELECT b.kode_kantor,c.kode_cabang, d.kd_cabang FROM m_pic a
		INNER JOIN mk_cabang b ON LPAD(a.id_cabang,2,0) = b.kode_kantor
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = b.kode_kantor 
		INNER JOIN dpm_online.user d ON d.user_id = a.user_id
		WHERE a.user_id = '$user_id'";
        $data_pic = $this->db->query($get_pic);
		$data_cabang = $this->db->query($get_cabang);
        
		foreach($data_pic->result() as $data1){
        	$kode_kantor1[] = $data1->kode_kantor;
        }

        foreach ($data_cabang->result() as $data2) {
            $kode_kantor2[] = $data2->kode_kantor;
        }

       	if($kode_kolektor ==""){
        	$filter1 = "";
        }else{
        	$filter1 = " AND c.kode_group3 LIKE '%".$kode_kolektor."%'";
        }

        if($nasabah_id==""){
        	$filter2 = "";
        }else{
        	$filter2 = " AND d.NASABAH_ID LIKE '%".$nasabah_id."%'";
        }

        if($kode_area != ""){
        	if($nama_area_kerja !=""){
        		$filter3 = " AND b.kode_area = '".$kode_area."' AND b.nama_area_kerja = '".$nama_area_kerja."'";
        	}else{
        		$filter3 = " AND b.kode_area = '".$kode_area."'";
        	}
        	
        }else{
        	if($data_pic->num_rows() > 0){
        		$filter3 = " AND a.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor1)) . ")";
	        }else{
	        	$filter3 = " AND a.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor2)) . ")";
	        }
        }

		$sql = "SELECT b.kode_area,dpm_online.get_area_kerja(a.NO_REKENING) AS nama_area_kerja,a.kode_kantor, a.kode_kolektor, c.deskripsi_group3, kecamatan, desa, kodepos, a.NO_REKENING,a.ft_angsuran,d.nasabah_id, d.NAMA_NASABAH,d.ALAMAT
			FROM master_all_assigment_kolektor a
			INNER JOIN dpm_online.app_kode_kantor b ON a.kode_kantor = b.kode_kantor
			INNER JOIN dpm_online.kre_kode_group3 c ON c.kode_group3 = a.kode_kolektor
			INNER JOIN dpm_online.nasabah d ON a.NASABAH_ID = d.NASABAH_ID 
			WHERE 1=1 ".$filter1."".$filter2."".$filter3;
		if(!empty($search)){
            $sql .= "AND (nama_area_kerja LIKE '%".$search."%' OR a.kode_kantor LIKE '%".$search."%' OR a.kode_kolektor LIKE '%".$search."%' OR c.deskripsi_group3 LIKE '%".$search."%')";
        }
        $sql .=" ORDER BY a.kode_kolektor ASC LIMIT ?,?";
        $query = $this->db->query($sql, array($start, $limit));
        return $query;
	}

	function get_total_datatable_master_all_assigment_collector($search,$kode_kolektor,$nasabah_id,$kode_area,$nama_area_kerja){
		$this->load->model('model_menu');
		$outputs   = $this->model_menu->getUser();
		$user_id   = $outputs['data']['user_id'];
        
        $get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
        WHERE user_id='$user_id'";

        $get_pic = "SELECT b.kode_kantor,c.kode_cabang, d.kd_cabang FROM m_pic a
		INNER JOIN mk_cabang b ON a.id_cabang = b.id
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = b.kode_kantor 
		INNER JOIN dpm_online.user d ON d.user_id = a.user_id
		WHERE a.user_id = '$user_id'";
        $data_pic = $this->db->query($get_pic);
		$data_cabang = $this->db->query($get_cabang);
        
		foreach($data_pic->result() as $data1){
        	$kode_kantor1[] = $data1->kode_kantor;
        }

        foreach ($data_cabang->result() as $data2) {
            $kode_kantor2[] = $data2->kode_kantor;
        }

        

        if($kode_kolektor ==""){
        	$filter1 = "";
        }else{
        	$filter1 = " AND c.kode_group3 LIKE '%".$kode_kolektor."%'";
        }

        if($nasabah_id==""){
        	$filter2 = "";
        }else{
        	$filter2 = " AND d.NASABAH_ID LIKE '%".$nasabah_id."%'";
        }

        if($kode_area != ""){
        	if($nama_area_kerja !=""){
        		$filter3 = " AND b.kode_area = '".$kode_area."' AND b.nama_area_kerja = '".$nama_area_kerja."'";
        	}else{
        		$filter3 = " AND b.kode_area = '".$kode_area."'";
        	}
        	
        }else{
        	if($data_pic->num_rows() > 0){
        		$filter3 = " AND a.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor1)) . ")";
	        }else{
	        	$filter3 = " AND a.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor2)) . ")";
	        }
        }

		$sql = "SELECT b.kode_area,dpm_online.get_area_kerja(a.NO_REKENING) AS nama_area_kerja,a.kode_kantor, a.kode_kolektor, c.deskripsi_group3, kecamatan, desa, kodepos, a.NO_REKENING,a.ft_angsuran,d.nasabah_id, d.NAMA_NASABAH,d.ALAMAT
		FROM master_all_assigment_kolektor a
		INNER JOIN dpm_online.app_kode_kantor b ON a.kode_kantor = b.kode_kantor
		INNER JOIN dpm_online.kre_kode_group3 c ON c.kode_group3 = a.kode_kolektor
		INNER JOIN dpm_online.nasabah d ON a.NASABAH_ID = d.NASABAH_ID WHERE 1=1 ".$filter1."".$filter2."".$filter3;
		if(!empty($search)){
            $sql .= "AND (nama_area_kerja LIKE '%".$search."%' OR a.kode_kantor LIKE '%".$search."%' OR a.kode_kolektor LIKE '%".$search."%' OR c.deskripsi_group3 LIKE '%".$search."%')";
        }
        $query = $this->db->query($sql);
        return $query;
	}

	function get_detail_master_all_assigment_collector($start,$limit,$search,$kode_kolektor){
		$sql = "SELECT kecamatan, desa, kodepos, kode_kolektor, COUNT(no_rekening) AS jumlah_kontrak  FROM master_all_assigment_kolektor a
		INNER JOIN dpm_online.nasabah b ON a.NASABAH_ID = b.NASABAH_ID WHERE kode_kolektor = '".$kode_kolektor."'";
		if(!empty($search)){
			$sql .= " WHERE kecamatan LIKE '%".$search."%' OR desa LIKE '%".$search."%' OR kodepost kode_kolektor LIKE '%".$search."%'";
		}
		$sql .= " ORDER BY kecamatan DESC LIMIT ?,?";
		//die($sql);
		$query = $this->db->query($sql, array($start, $limit));
		return $query;
	}

	function get_total_detail_master_all_assigment_collector($search,$kode_kolektor){
		$sql = "SELECT kecamatan, desa, kodepos, kode_kolektor, COUNT(no_rekening) AS jumlah_kontrak  FROM master_all_assigment_kolektor a
		INNER JOIN dpm_online.nasabah b ON a.NASABAH_ID = b.NASABAH_ID WHERE kode_kolektor = '".$kode_kolektor."'";
		if(!empty($search)){
			$sql .= " WHERE kecamatan LIKE '%".$search."%' OR desa LIKE '%".$search."%' OR kodepost kode_kolektor LIKE '%".$search."%'";
		}
		$query = $this->db->query($sql);
        return $query;
	}

	function get_data_task_assignment_kolektor($start,$limit,$search,$kode_kolektor,$no_rekening,$kode_area,$nama_area_kerja,$field_order,$order_by){
		//die($sql);
		$this->load->model('model_menu');
		$outputs   = $this->model_menu->getUser();
		$user_id   = $outputs['data']['user_id'];
         
        $get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
        WHERE user_id='$user_id'";

        $get_pic = "SELECT b.kode_kantor,c.kode_cabang, d.kd_cabang FROM m_pic a
		INNER JOIN mk_cabang b ON a.id_cabang = b.id
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = b.kode_kantor 
		INNER JOIN dpm_online.user d ON d.user_id = a.user_id
		WHERE a.user_id = '$user_id'";
        $data_pic = $this->db->query($get_pic);
		$data_cabang = $this->db->query($get_cabang);
        
		foreach($data_pic->result() as $data1){
        	$kode_kantor1[] = $data1->kode_kantor;
        }

        foreach ($data_cabang->result() as $data2) {
            $kode_kantor2[] = $data2->kode_kantor;
        }

		if($kode_kolektor =="" || $kode_kolektor =="PILIH"){
        	$filter1 = "";
        }else{
        	$filter1 = " AND d.deskripsi_group3 = '".$kode_kolektor."'";
        }

        // if($nasabah_id==""){
        // 	$filter2 = "";
        // }else{
        // 	$filter2 = " AND e.NASABAH_ID LIKE '%".$nasabah_id."%'";
        // }

        if($no_rekening == ""){
        	$filter2 = "";
        }else{
        	$filter2 = " AND c.no_rekening LIKE '".$no_rekening."%'";
        }

        if($kode_area != ""){
        	if($nama_area_kerja !=""){
        		$filter3 = " AND f.kode_area = '".$kode_area."' AND f.nama_area_kerja = '".$nama_area_kerja."'";
        	}else{
        		$filter3 = " AND f.kode_area = '".$kode_area."'";
        	}
        	
        }else{
        	if($data_pic->num_rows() > 0){
        		$filter3 = " AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor1)) . ") ";
	        }else{
	        	$filter3 = " AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor2)) . ") ";
	        }
        }

        if($field_order != ""){
        	$urutan = " ORDER BY ".$field_order." ".$order_by;
        }else{
        	$urutan = "";
        }
		$sql = "SELECT a.task_code, a.no_rekening, nama_nasabah, os_pokok, flg_aktif_date, (SELECT created_at FROM task_assigment WHERE flag_aktif = 1 AND no_rekening = a.no_rekening ORDER BY id DESC LIMIT 1) AS updated_at,a.total_tagihan, a.assignment_date, a.kode_group3, d.deskripsi_group3, a.flag_aktif,ft_hari,COUNT(*) AS ft_bulan
		FROM task_assigment a
		INNER JOIN task_assigment_detail b ON a.task_code = b.task_code
		INNER JOIN (SELECT * FROM master_all_assigment_kolektor GROUP BY no_rekening) c ON a.no_rekening = c.NO_REKENING
		INNER JOIN dpm_online.kre_kode_group3 d ON d.kode_group3 = a.kode_group3
		INNER JOIN dpm_online.nasabah e ON c.NASABAH_ID = e.nasabah_id 
		INNER JOIN dpm_online.app_kode_kantor f ON f.kode_kantor = a.kode_kantor
		WHERE 1=1 ".$filter1.$filter2.$filter3." AND a.assignment_date = CURDATE() ";

		if(!empty($search)){
			$sql .= "AND (a.task_code LIKE '%".$search."%' OR a.no_rekening LIKE '%".$search."%' OR d.kode_group3 LIKE '%".$search."%' OR f.kode_kantor LIKE '%".$search."%' OR nama_nasabah LIKE '%".$search."%' OR TEMPATLAHIR LIKE '%".$search."%' OR deskripsi_group3 LIKE '%".$search."%')";
		}

			$sql.=" GROUP BY a.task_code ".$urutan." LIMIT ?,?";
		$query = $this->db->query($sql, array($start, $limit));
		return $query;
	}

	function get_total_data_task_assignment_kolektor($search,$kode_kolektor,$no_rekening,$kode_area,$nama_area_kerja,$field_order,$order_by){
		$this->load->model('model_menu');
		$outputs   = $this->model_menu->getUser();
		$user_id   = $outputs['data']['user_id'];
        
        $get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
        WHERE user_id='$user_id'";

        $get_pic = "SELECT b.kode_kantor,c.kode_cabang, d.kd_cabang FROM m_pic a
		INNER JOIN mk_cabang b ON a.id_cabang = b.id
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = b.kode_kantor 
		INNER JOIN dpm_online.user d ON d.user_id = a.user_id
		WHERE a.user_id = '$user_id'";
        $data_pic = $this->db->query($get_pic);
		$data_cabang = $this->db->query($get_cabang);
        
		foreach($data_pic->result() as $data1){
        	$kode_kantor1[] = $data1->kode_kantor;
        }

        foreach ($data_cabang->result() as $data2) {
            $kode_kantor2[] = $data2->kode_kantor;
        }

		if($kode_kolektor =="" || $kode_kolektor =="PILIH"){
        	$filter1 = "";
        }else{
        	$filter1 = " AND d.deskripsi_group3 = '".$kode_kolektor."'";
        }


        if($no_rekening == ""){
        	$filter2 = "";
        }else{
        	$filter2 = " AND c.no_rekening LIKE '".$no_rekening."%'";
        }

        if($kode_area != ""){
        	if($nama_area_kerja !=""){
        		$filter3 = " AND f.kode_area = '".$kode_area."' AND f.nama_area_kerja = '".$nama_area_kerja."'";
        	}else{
        		$filter3 = " AND f.kode_area = '".$kode_area."'";
        	}
        	
        }else{
        	if($data_pic->num_rows() > 0){
        		$filter3 = " AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor1)) . ")";
	        }else{
	        	$filter3 = " AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor2)) . ")";
	        }
        }

        if($field_order != ""){
        	$urutan = " ORDER BY ".$field_order." ".$order_by;
        }else{
        	$urutan = "";
        }

		$sql = "SELECT a.task_code, a.no_rekening, nama_nasabah, os_pokok, flg_aktif_date, (SELECT created_at FROM task_assigment WHERE flag_aktif = 1 AND task_code = a.task_code ORDER BY id ASC LIMIT 1) AS updated_at,a.total_tagihan, a.assignment_date, a.kode_group3, d.deskripsi_group3, a.flag_aktif,ft_hari,COUNT(*) AS ft_bulan
			FROM task_assigment a
			INNER JOIN task_assigment_detail b ON a.task_code = b.task_code
			INNER JOIN (SELECT * FROM master_all_assigment_kolektor GROUP BY no_rekening) c ON a.no_rekening = c.NO_REKENING
			INNER JOIN dpm_online.kre_kode_group3 d on d.kode_group3 = a.kode_group3
			INNER JOIN dpm_online.nasabah e ON c.NASABAH_ID = e.nasabah_id 
			INNER JOIN dpm_online.app_kode_kantor f ON f.kode_kantor = a.kode_kantor
			WHERE 1=1 ".$filter1.$filter2.$filter3." AND a.assignment_date = CURDATE() ";
			
		if(!empty($search)){
			$sql .= "AND (a.task_code LIKE '%".$search."%' OR a.no_rekening LIKE '%".$search."%' OR d.kode_group3 LIKE '%".$search."%' OR f.kode_kantor LIKE '%".$search."%' OR nama_nasabah LIKE '%".$search."%' OR TEMPATLAHIR LIKE '%".$search."%' OR deskripsi_group3 LIKE '%".$search."%')";
		}
		$sql.=" GROUP BY a.task_code ".$urutan;
		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function change_flag_active($task_code){
		$sql = "SELECT task_code,flag_aktif FROM task_assigment WHERE task_code = '".$task_code."'";
		$query = $this->db->query($sql)->row();
		$flag_status = $query->flag_aktif == 1 ? 0 : 1;
		$flag_aktif_date = $query->flg_aktif_date;
		$post = array(
			'flg_aktif_date'=> $flag_aktif_date == "" ? date('Y-m-d') : $query->flg_aktif_date,
			'flag_aktif'=>$flag_status 
		);
		$this->db->update('task_assigment',$post,array('task_code'=>$task_code));
		return $this->db->affected_rows();
	}

	function get_task_code($task_code){
		$sql = "SELECT task_code,flag_aktif FROM task_assigment WHERE task_code = '".$task_code."'";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_area_kerja(){
		$sql = "SELECT kode_area FROM dpm_online.mk_area
		GROUP BY kode_area";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_kode_cabang($kode_area){
		// $sql = "SELECT kode_kantor,nama_kantor,nama_area_kerja,kode_area FROM dpm_online.app_kode_kantor 
		// WHERE kode_area = '".$kode_area."' GROUP BY nama_area_kerja";

		$this->load->model('model_menu');
		$outputs   = $this->model_menu->getUser();
		$user_id   = $outputs['data']['user_id'];

		$sql = "SELECT a.kode_kantor,nama_area_kerja,kode_area FROM mk_cabang a
		INNER JOIN mk_area b ON a.id_area = b.id
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = a.kode_kantor
		INNER JOIN m_pic d ON d.id_cabang = a.id 
		WHERE c.kode_area = '$kode_area' AND d.user_id = '$user_id'";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_kode_nasabah($kode_kolektor){
		$sql = "SELECT a.NASABAH_ID,b.NAMA_NASABAH FROM master_all_assigment_kolektor a
		INNER JOIN dpm_online.nasabah b ON a.NASABAH_ID = b.nasabah_id
		INNER JOIN dpm_online.kre_kode_group3 c ON c.kode_group3 = kode_kolektor
		WHERE deskripsi_group3 = '".$kode_kolektor."'
		GROUP BY b.NAMA_NASABAH";
		$query = $this->db->query($sql);
		return $query;
	}


	function get_kode_kolektor($kode_area,$nama_area_kerja){
		if(!empty($kode_area)){
			if(!empty($nama_area_kerja)){
				$where = "c.nama_area_kerja = '".$nama_area_kerja."'";
			}else{
				$where = "kode_area = '".$kode_area."'";
			}
		}else{
			$where = "";
		}
		$sql = "SELECT b.kode_group3, b.deskripsi_group3 FROM master_all_assigment_kolektor a 
			INNER JOIN dpm_online.kre_kode_group3 b ON a.kode_kolektor = b.kode_group3
			INNER JOIN dpm_online.app_kode_kantor c ON a.kode_kantor = c.kode_kantor
			WHERE $where
			GROUP BY b.deskripsi_group3";
		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function get_data_collection_activity($start,$limit,$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT assignment_date,c.kode_area,c.kode_cabang,nama_area_kerja,a.kode_group3,deskripsi_group3,a.no_rekening,f.NAMA_NASABAH,
			CASE WHEN g.kondisi_tempat  IS NOT NULL OR h.kondisi_tempat IS NOT NULL THEN 1 ELSE 0 END AS visit,
			CASE WHEN b.task_code IS NOT NULL AND g.kondisi_tempat IS NULL AND h.kondisi_tempat IS NULL THEN 1 ELSE 0 END AS not_visit,
			CASE WHEN b.bertemu = 'debitur/pasangan' AND (g.kondisi_tempat  IS NOT NULL OR h.kondisi_tempat IS NOT NULL) THEN 1 ELSE 0 END AS interaksi,
			CASE WHEN b.janji_byr = 'Y' AND (g.kondisi_tempat  IS NOT NULL OR h.kondisi_tempat IS NOT NULL) THEN 1 ELSE 0 END AS janji_bayar,
			b.tgl_janji_byr,
			b.total_penghasilan,
			b.kondisi_pekerjaan,
			b.asset_debt,
			b.case_category,
			b.next_action,
			b.invalid_no
			FROM task_assigment a
			LEFT JOIN collections_activity_task_assignment b ON a.task_code = b.task_code
			INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = a.kode_kantor
			INNER JOIN dpm_online.kre_kode_group3 d ON a.kode_group3 = d.kode_group3
			INNER JOIN master_all_assigment_kolektor e ON a.no_rekening = e.NO_REKENING
			INNER JOIN dpm_online.nasabah f ON f.NASABAH_ID = e.NASABAH_ID
			LEFT JOIN visit_jaminan_task_assigment g ON g.task_code = a.task_code
			LEFT JOIN visit_tempattinggal_task_assigment h ON a.task_code = h.task_code ";
			// $where = empty(!$search) ? "" : " WHERE";
			
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == ''){
				$sql .= " WHERE ".$filter_date." AND flag_aktif = 1 ";
			}else{
				$sql.=" WHERE ".$filter_date." AND flag_aktif = 1 AND c.kode_area = '".$kode_area."' ";
				if($kode_cabang == ''){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == ''){
						$sql .= "AND c.nama_area_kerja = '".$kode_cabang."'";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date."  AND flag_aktif = 1 AND a.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ")";
		}

		// if(!empty($search)){
		// 	$sql.= " WHERE a.created_at LIKE '%".$search."%' OR c.kode_area LIKE '%".$search."%' OR b.kode_kantor LIKE '%".$search."%' OR nama_area_kerja  LIKE '%".$search."%' OR kode_group3 LIKE '%".$search."%' OR deskripsi_group3 LIKE '%".$search."%' OR b.no_rekening LIKE '%".$search."%' OR f.nama_nasabah LIKE '%".$search."%' OR f.alamat LIKE '%".$search."%' OR os_pokok LIKE '%".$search."%' ".$condition;
		// }else{
		// 	$sql.= $condition."".$filter;
		// }
		$sql.= " GROUP BY a.task_code ORDER BY a.task_code DESC LIMIT ?,?";
		// die($sql);
		$query = $this->db->query($sql, array($start, $limit));
		return $query;
	}

	function get_total_data_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT assignment_date,c.kode_area,c.kode_cabang,nama_area_kerja,a.kode_group3,deskripsi_group3,a.no_rekening,f.NAMA_NASABAH,
		CASE WHEN g.kondisi_tempat  IS NOT NULL OR h.kondisi_tempat IS NOT NULL THEN 1 ELSE 0 END AS visit,
		CASE WHEN b.task_code IS NOT NULL AND g.kondisi_tempat IS NULL AND h.kondisi_tempat IS NULL THEN 1 ELSE 0 END AS not_visit,
		CASE WHEN b.bertemu = 'debitur/pasangan' AND (g.kondisi_tempat  IS NOT NULL OR h.kondisi_tempat IS NOT NULL) THEN 1 ELSE 0 END AS interaksi,
		CASE WHEN b.janji_byr = 'Y' AND (g.kondisi_tempat  IS NOT NULL OR h.kondisi_tempat IS NOT NULL) THEN 1 ELSE 0 END AS janji_bayar,
		b.tgl_janji_byr,
		b.total_penghasilan,
		b.kondisi_pekerjaan,
		b.asset_debt,
		b.case_category,
		b.next_action,
		b.invalid_no
		FROM task_assigment a
		LEFT JOIN collections_activity_task_assignment b ON a.task_code = b.task_code
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = a.kode_kantor
		INNER JOIN dpm_online.kre_kode_group3 d ON a.kode_group3 = d.kode_group3
		INNER JOIN master_all_assigment_kolektor e ON a.no_rekening = e.NO_REKENING
		INNER JOIN dpm_online.nasabah f ON f.NASABAH_ID = e.NASABAH_ID
		LEFT JOIN visit_jaminan_task_assigment g ON g.task_code = a.task_code
		LEFT JOIN visit_tempattinggal_task_assigment h ON a.task_code = h.task_code ";
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == ''){
				$sql .= " WHERE ".$filter_date." AND flag_aktif = 1 ";
			}else{
				$sql.=" WHERE ".$filter_date." AND flag_aktif = 1 AND c.kode_area = '".$kode_area."' ";
				if($kode_cabang == ''){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == ''){
						$sql .= "AND c.nama_area_kerja = '".$kode_cabang."'";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date."  AND flag_aktif = 1 AND a.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ")";
		}
		// if(!empty($search)){
		// 	$sql.= " WHERE (a.created_at LIKE '%".$search."%' OR c.kode_area LIKE '%".$search."%' OR b.kode_kantor LIKE '%".$search."%' OR nama_area_kerja  LIKE '%".$search."%' OR kode_group3 LIKE '%".$search."%' OR deskripsi_group3 LIKE '%".$search."%' OR b.no_rekening LIKE '%".$search."%' OR f.nama_nasabah LIKE '%".$search."%' OR f.alamat LIKE '%".$search."%' OR os_pokok LIKE '%".$search."%') AND ".$condition;
		// }else{
		// 	$sql.= $condition."".$filter;
		// }

		$sql.= " GROUP BY a.task_code";
		$query = $this->db->query($sql);
		return $query;
	}

function get_data_history_collection_activity($start,$limit,$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT a.task_code,a.assignment_date,c.kode_area,c.kode_cabang,nama_area_kerja, d.kode_group3,d.deskripsi_group3,a.no_rekening,f.NAMA_NASABAH,
			(SELECT COUNT(*) FROM visit_jaminan_task_assigment WHERE a.task_code = task_code) AS jml_jaminan,
			(SELECT COUNT(*) FROM visit_tempattinggal_task_assigment WHERE a.task_code = task_code) AS jml_tempattinggal,
			COUNT(CASE WHEN a.task_code NOT IN(b.task_code) THEN a.task_code END) AS not_visit,
			COUNT(CASE WHEN janji_byr = 'Y' THEN a.task_code END) AS janji_bayar,
			COUNT(CASE WHEN bertemu != '' THEN a.task_code END) AS interaksi,
			tgl_janji_byr,karakter_debitur,total_penghasilan,kondisi_pekerjaan,asset_debt,case_category,next_action
			FROM task_assigment a
			INNER JOIN collections_activity_task_assignment b ON a.task_code = b.task_code
			INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = a.kode_kantor
			INNER JOIN dpm_online.kre_kode_group3 d ON d.kode_group3 = a.kode_group3
			INNER JOIN master_all_assigment_kolektor e ON e.NO_REKENING = a.no_rekening
			INNER JOIN dpm_online.nasabah f ON f.NASABAH_ID = e.NASABAH_ID";
			// $where = empty(!$search) ? "" : " WHERE";
			
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == 'konsolidasi'){
				$sql .= " WHERE ".$filter_date;
			}else{
				$sql.=" WHERE ".$filter_date." AND c.kode_area = '".$kode_area."' ";
				if($kode_cabang == 'ALL'){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == 'ALL'){
						$sql .= "AND c.kode_kantor = '".$kode_cabang."'";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date." AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ")";
		}


		$sql.= " GROUP BY f.nasabah_id ORDER BY b.created_at DESC LIMIT ?,?";

		$query = $this->db->query($sql, array($start, $limit));
		return $query;
	}

	function get_total_data_history_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT a.task_code,a.assignment_date,c.kode_area,c.kode_kantor,nama_area_kerja, d.kode_group3,d.deskripsi_group3,a.no_rekening,f.NAMA_NASABAH,
			(SELECT COUNT(*) FROM visit_jaminan_task_assigment WHERE a.task_code = task_code) AS jml_jaminan,
			(SELECT COUNT(*) FROM visit_tempattinggal_task_assigment WHERE a.task_code = task_code) AS jml_tempattinggal,
			COUNT(CASE WHEN a.task_code NOT IN(b.task_code) THEN a.task_code END) AS not_visit,
			COUNT(CASE WHEN janji_byr = 'Y' THEN a.task_code END) AS janji_bayar,
			COUNT(CASE WHEN bertemu != '' THEN a.task_code END) AS interaksi,
			tgl_janji_byr,karakter_debitur,total_penghasilan,kondisi_pekerjaan,asset_debt,case_category,next_action
			FROM task_assigment a
			INNER JOIN collections_activity_task_assignment b ON a.task_code = b.task_code
			INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = a.kode_kantor
			INNER JOIN dpm_online.kre_kode_group3 d ON d.kode_group3 = a.kode_group3
			INNER JOIN master_all_assigment_kolektor e ON e.NO_REKENING = a.no_rekening
			INNER JOIN dpm_online.nasabah f ON f.NASABAH_ID = e.NASABAH_ID";
			// $where = empty(!$search) ? "" : " WHERE";
			
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == 'konsolidasi'){
				$sql .= " WHERE ".$filter_date;
			}else{
				$sql.=" WHERE ".$filter_date." AND c.kode_area = '".$kode_area."' ";
				if($kode_cabang == 'ALL'){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == 'ALL'){
						$sql .= "AND c.kode_kantor = '".$kode_cabang."'";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date." AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ")";
		}

		$sql.= " GROUP BY f.nasabah_id ORDER BY b.created_at DESC";

		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function get_track_data_visit($start,$limit,$kode_area,$nama_area_kerja,$deskripsi_group3,$from,$to){
		$where1 = $kode_area != "" ? " AND f.kode_area = '$kode_area' " : "";
		$where2 = $nama_area_kerja != "" ? " AND nama_area_kerja = '$nama_area_kerja' ":"";
		$where3 = $deskripsi_group3 != "" ? " AND deskripsi_group3 = '$deskripsi_group3'" : "";
		$where4 = $from !="" ? " AND assignment_date BETWEEN '$from' AND '$to'" :"";
		$sql = "SELECT a.task_code,a.no_rekening,e.deskripsi_group3,f.kode_area,f.nama_area_kerja,g.NAMA_NASABAH,total_tunggakan,c.latitude AS lat_a, c.longitude AS long_a,'' AS lat_b,'' AS long_b, c.file1 AS file1_a, c.file2 AS file2_a,'' AS file1_b,'' AS file2_b, a.assignment_date FROM task_assigment a
			INNER JOIN collections_activity_task_assignment b ON a.`task_code` = b.`task_code`
			INNER JOIN visit_tempattinggal_task_assigment c ON c.task_code = a.`task_code`
			INNER JOIN master_all_assigment_kolektor d ON a.`no_rekening` = d.`NO_REKENING`
			INNER JOIN dpm_online.kre_kode_group3 e ON a.`kode_group3` = e.`kode_group3`
			INNER JOIN dpm_online.`app_kode_kantor` f ON a.`kode_kantor` = f.kode_kantor
			INNER JOIN dpm_online.`nasabah` g ON d.`NASABAH_ID` = g.`NASABAH_ID`
			WHERE 1=1 $where1 $where2 $where3 $where4
			GROUP BY a.task_code
			UNION ALL
			SELECT a.task_code,a.no_rekening,e.deskripsi_group3,f.kode_area,f.nama_area_kerja,g.NAMA_NASABAH,total_tunggakan,c.latitude AS lat_a, c.longitude AS long_a,'' AS lat_b,'' AS long_b, c.file1 AS file1_a, c.file2 AS file2_a,'' AS file1_b,'' AS file2_b, a.assignment_date FROM task_assigment a
			INNER JOIN collections_activity_task_assignment b ON a.`task_code` = b.`task_code`
			INNER JOIN visit_jaminan_task_assigment c ON c.task_code = a.`task_code`
			INNER JOIN master_all_assigment_kolektor d ON a.`no_rekening` = d.`NO_REKENING`
			INNER JOIN dpm_online.kre_kode_group3 e ON a.`kode_group3` = e.`kode_group3`
			INNER JOIN dpm_online.`app_kode_kantor` f ON a.`kode_kantor` = f.kode_kantor 
			INNER JOIN dpm_online.`nasabah` g ON d.`NASABAH_ID` = g.`NASABAH_ID`
			WHERE 1=1 $where1 $where2 $where3 $where4
			GROUP BY a.task_code
			ORDER BY nama_nasabah ASC LIMIT ?,?";
			// die($sql);
		$query = $this->db->query($sql,array($start,$limit));
		return $query;
	}

	function get_total_track_data_visit($kode_area,$nama_area_kerja,$deskripsi_group3,$from,$to){
		$where1 = $kode_area != "" ? "AND f.kode_area = '$kode_area'" : "";
		$where2 = $nama_area_kerja != "" ? " AND nama_area_kerja = '$nama_area_kerja' " :"";
		$where3 = $deskripsi_group3 != "" ? " AND deskripsi_group3 = '$deskripsi_group3'" : "";
		$where4 = $from !="" ? " AND assignment_date BETWEEN '$from' AND '$to'" : "";
		$sql = "SELECT a.task_code,a.no_rekening,e.deskripsi_group3,f.kode_area,f.nama_area_kerja,g.NAMA_NASABAH,total_tunggakan,c.latitude AS lat_a, c.longitude AS long_a,'' AS lat_b,'' AS long_b, c.file1 AS file1_a, c.file2 AS file2_a,'' AS file1_b,'' AS file2_b, a.assignment_date FROM task_assigment a
			INNER JOIN collections_activity_task_assignment b ON a.`task_code` = b.`task_code`
			INNER JOIN visit_tempattinggal_task_assigment c ON c.task_code = a.`task_code`
			INNER JOIN master_all_assigment_kolektor d ON a.`no_rekening` = d.`NO_REKENING`
			INNER JOIN dpm_online.kre_kode_group3 e ON a.`kode_group3` = e.`kode_group3`
			INNER JOIN dpm_online.`app_kode_kantor` f ON a.`kode_kantor` = f.kode_kantor
			INNER JOIN dpm_online.`nasabah` g ON d.`NASABAH_ID` = g.`NASABAH_ID`
			WHERE 1=1 $where1 $where2 $where3 $where4
			GROUP BY a.task_code
			UNION ALL
			SELECT a.task_code,a.no_rekening,e.deskripsi_group3,f.kode_area,f.nama_area_kerja,g.NAMA_NASABAH,total_tunggakan,c.latitude AS lat_a, c.longitude AS long_a,'' AS lat_b,'' AS long_b, c.file1 AS file1_a, c.file2 AS file2_a,'' AS file1_b,'' AS file2_b, a.assignment_date FROM task_assigment a
			INNER JOIN collections_activity_task_assignment b ON a.`task_code` = b.`task_code`
			INNER JOIN visit_jaminan_task_assigment c ON c.task_code = a.`task_code`
			INNER JOIN master_all_assigment_kolektor d ON a.`no_rekening` = d.`NO_REKENING`
			INNER JOIN dpm_online.kre_kode_group3 e ON a.`kode_group3` = e.`kode_group3`
			INNER JOIN dpm_online.`app_kode_kantor` f ON a.`kode_kantor` = f.kode_kantor 
			INNER JOIN dpm_online.`nasabah` g ON d.`NASABAH_ID` = g.`NASABAH_ID`
			WHERE 1=1 $where1 $where2 $where3 $where4
			GROUP BY a.task_code
			";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_data_summary_collection_activity($start,$limit,$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT a.task_code,a.assignment_date,c.kode_area,c.kode_kantor,nama_area_kerja, d.kode_group3,d.deskripsi_group3,
		COUNT(CASE WHEN a.flag_aktif = 1 THEN a.task_code END) AS assignment,
		(SELECT COUNT(*) FROM visit_jaminan_task_assigment WHERE a.task_code = task_code) AS jml_jaminan,
		(SELECT COUNT(*) FROM visit_tempattinggal_task_assigment WHERE a.task_code = task_code) AS jml_tempattinggal,
		COUNT(CASE WHEN a.task_code NOT IN(b.task_code) THEN a.task_code END) AS not_visit,
		COUNT(CASE WHEN janji_byr = 'Y' THEN a.task_code END) AS janji_bayar,
		COUNT(CASE WHEN bertemu != '' THEN a.task_code END) AS interaksi,
		COUNT(CASE WHEN bertemu != '' THEN a.task_code END)/(4*17) AS percentage_visit,
		COUNT(CASE WHEN janji_byr = 'Y' THEN a.task_code END) / (2*17) AS percentage_interaksi,
		'' AS success_rate_ptp 
		FROM task_assigment a
		INNER JOIN collections_activity_task_assignment b ON a.task_code = b.task_code
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = a.kode_kantor
		INNER JOIN dpm_online.kre_kode_group3 d ON d.kode_group3 = a.kode_group3
		INNER JOIN master_all_assigment_kolektor e ON e.NO_REKENING = a.no_rekening
		INNER JOIN dpm_online.nasabah f ON f.NASABAH_ID = e.NASABAH_ID";
			// $where = empty(!$search) ? "" : " WHERE";
			
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == 'konsolidasi'){
				$sql .= " WHERE ".$filter_date;
			}else{
				$sql.=" WHERE ".$filter_date." AND c.kode_area = '".$kode_area."' ";
				if($kode_cabang == 'ALL'){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == 'ALL'){
						$sql .= "AND c.kode_kantor = '".$kode_cabang."'";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date." AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ") AND a.flag_aktif = 1";
		}


		$sql.= " GROUP BY a.kode_group3 ORDER BY b.created_at DESC LIMIT ?,?";

		$query = $this->db->query($sql, array($start, $limit));
		return $query;
	}

	function get_total_data_summary_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT a.task_code,a.assignment_date,c.kode_area,c.kode_kantor,nama_area_kerja, d.kode_group3,d.deskripsi_group3,
		COUNT(CASE WHEN a.flag_aktif = 1 THEN a.task_code END) AS assignment,
		(SELECT COUNT(*) FROM visit_jaminan_task_assigment WHERE a.task_code = task_code) AS jml_jaminan,
		(SELECT COUNT(*) FROM visit_tempattinggal_task_assigment WHERE a.task_code = task_code) AS jml_tempattinggal,
		COUNT(CASE WHEN a.task_code NOT IN(b.task_code) THEN a.task_code END) AS not_visit,
		COUNT(CASE WHEN janji_byr = 'Y' THEN a.task_code END) AS janji_bayar,
		COUNT(CASE WHEN bertemu != '' THEN a.task_code END) AS interaksi,
		COUNT(CASE WHEN bertemu != '' THEN a.task_code END)/(4*17) AS percentage_visit,
		COUNT(CASE WHEN janji_byr = 'Y' THEN a.task_code END) / (2*17) AS percentage_interaksi,
		'' AS success_rate_ptp 
		FROM task_assigment a
		INNER JOIN collections_activity_task_assignment b ON a.task_code = b.task_code
		INNER JOIN dpm_online.app_kode_kantor c ON c.kode_kantor = a.kode_kantor
		INNER JOIN dpm_online.kre_kode_group3 d ON d.kode_group3 = a.kode_group3
		INNER JOIN master_all_assigment_kolektor e ON e.NO_REKENING = a.no_rekening
		INNER JOIN dpm_online.nasabah f ON f.NASABAH_ID = e.NASABAH_ID";
			// $where = empty(!$search) ? "" : " WHERE";
			
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == 'konsolidasi'){
				$sql .= " WHERE ".$filter_date;
			}else{
				$sql.=" WHERE ".$filter_date." AND c.kode_area = '".$kode_area."' ";
				if($kode_cabang == 'ALL'){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == 'ALL'){
						$sql .= "AND c.kode_kantor = '".$kode_cabang."'";
					}else{
						$sql .= "AND d.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date." AND c.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ")";
		}

		$sql.= " GROUP BY a.kode_group3 ORDER BY b.created_at DESC";

		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

function get_data_perfomance_collection_activity($start,$limit,$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT b.last_update,a.assignment_date, e.kode_area, b.kode_kantor,nama_area_kerja,b.kode_kolektor,c.kode_group3,c.deskripsi_group3,'' AS bucket_bln_lalu, '' AS bucket,b.NO_REKENING,d.NAMA_NASABAH,a.os_pokok total_bayar FROM task_assigment a
			INNER JOIN master_all_assigment_kolektor b ON a.no_rekening = b.NO_REKENING
			INNER JOIN dpm_online.kre_kode_group3 c ON a.kode_group3 = c.kode_group3
			INNER JOIN dpm_online.nasabah d ON b.NASABAH_ID = d.NASABAH_ID
			INNER JOIN dpm_online.app_kode_kantor e ON e.kode_kantor = b.kode_kantor
			INNER JOIN bayar_task_assigment f ON f.task_code = a.task_code";
			// $where = empty(!$search) ? "" : " WHERE";
			
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == 'konsolidasi'){
				$sql .= " WHERE ".$filter_date;
			}else{
				$sql.=" WHERE ".$filter_date." AND e.kode_area = '".$kode_area."' ";
				if($kode_cabang == 'ALL'){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND c.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == 'ALL'){
						$sql .= "AND e.kode_kantor = '".$kode_cabang."'";
					}else{
						$sql .= "AND c.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date." AND e.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ")";
		}


		$sql.= " GROUP BY a.kode_group3 ORDER BY a.created_at DESC LIMIT ?,?";

		$query = $this->db->query($sql, array($start, $limit));
		return $query;
	}

	function get_total_data_performance_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to){
		$sql = "SELECT b.last_update,a.assignment_date, e.kode_area, b.kode_kantor,nama_area_kerja,b.kode_kolektor,c.kode_group3,c.deskripsi_group3,'' AS bucket_bln_lalu, '' AS bucket,b.NO_REKENING,d.NAMA_NASABAH,a.os_pokok total_bayar FROM task_assigment a
			INNER JOIN master_all_assigment_kolektor b ON a.no_rekening = b.NO_REKENING
			INNER JOIN dpm_online.kre_kode_group3 c ON a.kode_group3 = c.kode_group3
			INNER JOIN dpm_online.nasabah d ON b.NASABAH_ID = d.NASABAH_ID
			INNER JOIN dpm_online.app_kode_kantor e ON e.kode_kantor = b.kode_kantor
			INNER JOIN bayar_task_assigment f ON f.task_code = a.task_code";
			// $where = empty(!$search) ? "" : " WHERE";
			
		if($pic == 'all'){
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}

			if($kode_area == 'konsolidasi'){
				$sql .= " WHERE ".$filter_date;
			}else{
				$sql.=" WHERE ".$filter_date." AND e.kode_area = '".$kode_area."' ";
				if($kode_cabang == 'ALL'){
					if($kode_kolektor == 'ALL'){
						$sql .= "";
					}else{
						$sql .= "AND c.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}else{
					if($kode_kolektor == 'ALL'){
						$sql .= "AND e.kode_kantor = '".$kode_cabang."'";
					}else{
						$sql .= "AND c.deskripsi_group3 = '".$kode_kolektor."'";
					}
				}
			}		
		}else{
			if($from == "" || $to == ""){
				$filter_date = "1";
			}else{
				$filter_date = "a.assignment_date BETWEEN '".$from."' AND '".$to."'";
			}
			$this->load->model('model_menu');
			$outputs   = $this->model_menu->getUser();
			$user_id   = $outputs['data']['user_id'];

			$get_cabang = "SELECT kd_cabang,b.kode_kantor FROM dpm_online.user a
	        INNER JOIN dpm_online.app_kode_kantor b ON kd_cabang = b.kode_cabang 
	        WHERE user_id='$user_id'";

	        $data = $this->db->query($get_cabang)->result();
	        foreach ($data as $data2) {
	            $kode_kantor[] = $data2->kode_kantor;
	        }
	       	
	        $imp_kode_kantor = implode("','",$kode_kantor);
	        $sql .= " WHERE ".$filter_date." AND e.kode_kantor IN (" . implode(',', array_map('intval', $kode_kantor)) . ")";
		}

		$sql.= " GROUP BY a.kode_group3 ORDER BY a.created_at DESC";

		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function get_area_kerja_per_pic(){
		$this->load->model('model_menu');
		$outputs   = $this->model_menu->getUser();
		$user_id   = $outputs['data']['user_id'];
        
        // $get_cabang = "SELECT b.id FROM m_pic a
        // INNER JOIN mk_area b ON a.id_area = b.id
        // INNER JOIN mk_cabang c ON a.id_cabang = c.id
        // INNER JOIN dpm_online.app_kode_kantor d ON c.kode_kantor = d
        // WHERE a.user_id='$user_id'
        // GROUP BY a.id_area
        // ";
		$get_cabang = "SELECT b.kode_kantor, d.kode_area FROM dpm_online.user a
		INNER JOIN mk_cabang b ON a.kd_cabang = b.kode_kantor
		INNER JOIN mk_area c ON b.id_area = c.id
		INNER JOIN dpm_online.app_kode_kantor d ON b.kode_kantor = d.kode_kantor
		WHERE a.user_id = '$user_id'
		GROUP BY d.kode_area";
        $get_pic = "SELECT c.kode_kantor, d.kode_area,nama_area_kerja FROM m_pic a
        INNER JOIN mk_area b ON a.id_area = b.id
		INNER JOIN mk_cabang c ON a.id_cabang = c.id
		INNER JOIN dpm_online.app_kode_kantor d ON c.kode_kantor = d.kode_kantor
		INNER JOIN dpm_online.user e ON e.user_id = a.user_id
		WHERE a.user_id =  '$user_id'
		group by d.kode_area";
		// die($get_pic);
        $data_pic = $this->db->query($get_pic);
		$data_cabang = $this->db->query($get_cabang);
        
		if($data_pic->num_rows() > 0){
			$query = $data_pic;
		}else{
			$query = $data_cabang;
		}
		return $query;
	}

	function get_data_nasabah_id($nasabah_id){
		$sql = "SELECT NAMA_NASABAH, ALAMAT, TELPON, KECAMATAN, DESA, kodepos FROM dpm_online.nasabah WHERE NASABAH_ID = LPAD('".$nasabah_id."',7,0)";
		//die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function get_route_data_visit($kode_area,$nama_area_kerja,$deskripsi_group3,$from,$to){
		$where1 = $kode_area != "" ? " AND kode_area = '$kode_area' " : "";
		$where2 = $nama_area_kerja != "" ? " AND nama_area_kerja = '$nama_area_kerja' ":"";
		$where3 = $deskripsi_group3 != "" ? " AND deskripsi_group3 = '$deskripsi_group3'" : "";
		$where4 = $from !="" ? " AND assignment_date BETWEEN '$from' AND '$to'" :"";
		$sql = "SELECT task_code,no_rekening,deskripsi_group3,kode_area,nama_area_kerja,NAMA_NASABAH,total_tunggakan,latitude,longitude,assignment_date,updated_at
			FROM
			(
			SELECT a.task_code,a.no_rekening,e.deskripsi_group3,f.kode_area,f.nama_area_kerja,c.NAMA_NASABAH,total_tunggakan,
			d.latitude,d.longitude,  
			a.assignment_date,d.updated_at FROM task_assigment a
			INNER JOIN dpm_online.master_all_assigment_kolektor b ON a.no_rekening = b.NO_REKENING
			INNER JOIN dpm_online.nasabah c ON b.NASABAH_ID = c.NASABAH_ID
			INNER JOIN visit_tempattinggal_task_assigment d ON d.task_code = a.task_code
			INNER JOIN dpm_online.kre_kode_group3 e ON e.kode_group3 = a.kode_group3
			INNER JOIN dpm_online.app_kode_kantor f ON f.kode_kantor = b.kode_kantor
			GROUP BY a.task_code
			UNION ALL
			SELECT a.task_code,a.no_rekening,e.deskripsi_group3,f.kode_area,f.nama_area_kerja,c.NAMA_NASABAH,total_tunggakan, 
			d.latitude,d.longitude,
			a.assignment_date,d.updated_at FROM task_assigment a
			INNER JOIN dpm_online.master_all_assigment_kolektor b ON a.no_rekening = b.NO_REKENING
			INNER JOIN dpm_online.nasabah c ON b.NASABAH_ID = c.NASABAH_ID
			INNER JOIN visit_jaminan_task_assigment d ON d.task_code = a.task_code
			INNER JOIN dpm_online.kre_kode_group3 e ON e.kode_group3 = a.kode_group3
			INNER JOIN dpm_online.app_kode_kantor f ON f.kode_kantor = b.kode_kantor
			GROUP BY a.task_code
			) results
			WHERE 1=1 $where1 $where2 $where3 $where4 ORDER BY updated_at ASC
 			";
			//die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function getAccount($no_rekening){
		$sql ="SELECT a.`no_rekening`, a.`nama_nasabah`, a.`alamat`, b.STATUS_MARITAL, a.kode_kantor FROM dpm_online.kre_nominatif a INNER JOIN dpm_online.nasabah b ON a.nasabah_id = b.NASABAH_ID WHERE no_rekening = '$no_rekening' GROUP BY a.no_rekening";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_all_cabang(){
		$sql = "SELECT kode_kantor,kode_cabang, nama_kantor FROM dpm_online.app_kode_kantor";
		$query = $this->db->query($sql);
		return $query;
	}

	function get_collector_by_kode_kantor($kode_kantor){
		$sql = "SELECT d.kode_group3, d.deskripsi_group3 FROM m_pic a
		INNER JOIN mk_cabang b ON a.id_cabang = b.id
		INNER JOIN dpm_online.app_kode_kantor c ON b.kode_kantor = c.kode_kantor 
		RIGHT JOIN dpm_online.kre_kode_group3 d ON a.`user_id` = d.`user_id`
		WHERE c.kode_kantor = '$kode_kantor' GROUP BY a.user_id";
		$query = $this->db->query($sql);
		return $query;
	}

	function generate_task_code(){
		$sql = "SELECT UNIX_TIMESTAMP(CONCAT(CURDATE() ,' ', CURTIME())) AS task_code";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function checkNoRekeningperAssigment_date($no_rekening,$kode_group3,$assignment_date){
		$sql = "SELECT * FROM task_assigment WHERE no_rekening = '$no_rekening' AND assignment_date = '$assignment_date' AND  kode_group3 = '$kode_group3' AND assignment_date = '$assignment_date'";

		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	}

	function add_task_assigment($post1){
		$this->db->insert('task_assigment',$post1);
		return $this->db->affected_rows();
	}

	function add_task_assigment_detail($post2){
		$this->db->insert('task_assigment_detail',$post2);
		return $this->db->affected_rows();
	}

	function delete_task_assigment($task_code){
		$this->db->delete('task_assigment',array('task_code'=>$task_code));
		return $this->db->affected_rows();
	}

	function delete_task_assigment_detail($task_code){
		$this->db->delete('task_assigment_detail',array('task_code'=>$task_code));
		return $this->db->affected_rows();
	}

	function update_task_assigment($task_code,$post1){
		$this->db->update('task_assigment',$post1,array('task_code'=>$task_code));
		return $this->db->affected_rows();
	}

	function update_task_assigment_detail($task_code,$post2){
		$this->db->update('task_assigment_detail',$post2,array('task_code'=>$task_code));
		return $this->db->affected_rows();
	}

	function get_task_assigment_detail($task_code){
		$sql = "SELECT * FROM task_assigment a
		INNER JOIN task_assigment_detail b ON a.`task_code` = b.`task_code`
		INNER JOIN dpm_online.kre_kode_group3 c ON a.`kode_group3` = c.`kode_group3`
		INNER JOIN dpm_online.`app_kode_kantor` d ON a.`kode_kantor` = d.`kode_kantor`
		WHERE a.task_code = '$task_code'";
		// die($sql);
		$query = $this->db->query($sql);
		return $query;
	} 

}