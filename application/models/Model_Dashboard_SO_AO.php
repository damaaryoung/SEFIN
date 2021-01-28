<?php
class Model_Dashboard_SO_AO extends CI_Model{
  function prospek($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT 
      COUNT(trans_so.`id`) AS prospek,
      (SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(created_at)) GROUP BY(DATE(created_at))) AS hk
      FROM
      trans_so
      WHERE 
      status_hm = 1
      AND id_area=".$area." AND id_cabang=".$cabang." 
      AND  DATE(created_at) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(tgl))
      AND YEAR(created_at) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.")
      GROUP BY (DAY(created_at))");
    return $data;
  }
  function visitro($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT 
COUNT(activity_so.`id` ) AS visit,
(SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(tanggal)) GROUP BY((tanggal))) AS hk
FROM
  activity_so
WHERE 
     activity = 'VISIT RO'
     AND id_area=".$area."
   AND id_cabang=".$cabang."
 AND  DATE(tanggal) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(DATE(tgl)))
 AND YEAR(tanggal) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.") 
 GROUP BY (DAY(tanggal))");
    return $data;
  }
  function maintainmb($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT 
      COUNT(activity_so.`id` ) AS maintain_mb,
      (SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(tanggal)) GROUP BY((tanggal))) AS hk
      FROM
      activity_so
      WHERE 
      activity = 'MAINTAIN MB' AND id_area=".$area." AND id_cabang=".$cabang."
      AND  DATE(tanggal) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(DATE(tgl)))
      AND YEAR(tanggal) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.") 
      GROUP BY (DAY(tanggal))");
    return $data;
  }
  function leads($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT 
      COUNT(trans_so.`id` ) AS leads,(SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(created_at)) GROUP BY((created_at))) AS hk
      FROM
      trans_so
      WHERE 
      id_area=".$area."
      AND id_cabang=".$cabang."
      AND  DATE(created_at) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(DATE(tgl)))
      AND YEAR(created_at) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.") 
      GROUP BY (DAY(created_at))");
    return $data;
  }
  function promosi($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT COUNT(activity_so.`id` ) AS promosi, (SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(tanggal)) GROUP BY((tanggal))) AS hk FROM activity_so WHERE activity = 'PROMOSI' AND id_area=".$area." AND id_cabang=".$cabang."
     AND  DATE(tanggal) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(DATE(tgl)))
     AND YEAR(tanggal) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.") 
     GROUP BY (DAY(tanggal))");
    return $data;
  }
  function survey($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT 
      COUNT(activity_ao.`id` ) AS survey,
      (SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(tanggal)) GROUP BY((tanggal))) AS hk
      FROM
      activity_ao
      WHERE 
      activity = 'SURVEY'
      AND id_area=".$area."
      AND id_cabang=".$cabang."
      AND  DATE(tanggal) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(DATE(tgl)))
      AND YEAR(tanggal) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.") 
      GROUP BY (DAY(tanggal))");
    return $data;
  }
  function visitcgc($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT 
      COUNT(activity_ao.`id` ) AS visit_cgc,
      (SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(tanggal)) GROUP BY((tanggal))) AS hk
      FROM
      activity_ao
      WHERE 
      activity = 'VISIT CGC'
      AND id_area=".$area."
      AND id_cabang=".$cabang."
      AND  DATE(tanggal) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(DATE(tgl)))
      AND YEAR(tanggal) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.") 
      GROUP BY (DAY(tanggal))");
    return $data;
  }
  function promosiao($bulan,$tahun,$area,$cabang){
    $data=$this->db->query("SELECT 
      COUNT(activity_ao.`id` ) AS promosi,
      (SELECT hk FROM master_periodik WHERE DATE(tgl) IN (DATE(tanggal)) GROUP BY((tanggal))) AS hk
      FROM
      activity_ao
      WHERE 
      activity = 'PROMOSI'
      AND id_area=".$area."
      AND id_cabang=".$cabang."
      AND  DATE(tanggal) IN (SELECT DATE(tgl) FROM master_periodik WHERE bulan=".$bulan." ORDER BY(DATE(tgl)))
      AND YEAR(tanggal) IN  (SELECT YEAR(tgl) FROM master_periodik WHERE YEAR(tgl)=".$tahun.") 
      GROUP BY (DAY(tanggal))");
    return $data;
  }
  function get_cabang($id){
    return $this->db->query("SELECT mc.id,mc.nama FROM mk_cabang mc WHERE id_area =".$id);
  }
}
