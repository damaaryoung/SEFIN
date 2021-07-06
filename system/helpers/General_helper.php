<?php
function tgl_indonesia($tanggal)
{
    $bln = array('01'=>"Januari",'02'=>"Februari",'03'=>"Maret",'04'=>"April",'05'=>"Mei",'06'=>"Juni",'07'=>"Juli",'08'=>"Agustus",'09'=>"September",'10'=>"Oktober",'11'=>"November",'12'=>"Desember");
    $exp_tanggal = explode("-",$tanggal);

    return $exp_tanggal[2]." ".$bln[$exp_tanggal[1]]." ".$exp_tanggal[0];
}
?>