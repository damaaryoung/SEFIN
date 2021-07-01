<?php
function tgl_indonesia($tanggal)
{
	if($tanggal !="0000-00-00"){
    	$bln = array('01'=>"Januari",'02'=>"Februari",'03'=>"Maret",'04'=>"April",'05'=>"Mei",'06'=>"Juni",'07'=>"Juli",'08'=>"Agustus",'09'=>"September",'10'=>"Oktober",'11'=>"November",'12'=>"Desember");
    	$exp_tanggal = explode("-",$tanggal);

    	return @$exp_tanggal[2]." ".@$bln[$exp_tanggal[1]]." ".@$exp_tanggal[0];
	}else{
		return NULL;
	}
}

function tgl_indonesia_datetime($tanggal){
	if($tanggal !="0000-00-00 00:00:00"){
		$sub_str_tgl = substr($tanggal,0,10);
    	$bln = array('01'=>"Januari",'02'=>"Februari",'03'=>"Maret",'04'=>"April",'05'=>"Mei",'06'=>"Juni",'07'=>"Juli",'08'=>"Agustus",'09'=>"September",'10'=>"Oktober",'11'=>"November",'12'=>"Desember");
    	$exp_tanggal = explode("-",$sub_str_tgl);
    	$fm_date = @$exp_tanggal[2]." ".@$bln[$exp_tanggal[1]]." ".@$exp_tanggal[0];
    	return $fm_date;
	}else{
		return NULL;
	}
	
}

function negative_check($value){
	if (isset($value)){
	    if (substr(strval($value), 0, 1) == "-"){
	    return -1;
	} else {
	    return 1;
	}
	    }
}

function get_umur($tahun,$bulan,$hari){
    $year_now = date('Y');
    $month_now = date('m');
    $day_now = date('d');
    $month = intval($month_now)-intval($bulan);
    $umur = $year_now-$tahun;
    if($month < 0){
    	$umur = $umur - 1;
    }elseif($month == 0){
    	$day = $day_now-$hari;
    	if($day < 0){
        	$umur = $umur-1;
        }
    }
    return $umur;
}
?>