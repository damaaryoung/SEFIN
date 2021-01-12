<?php defined('BASEPATH') or die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function export()
  {
    $keperluan = $this->input->post('select_keperluan');
    $dari_tgl1 = $this->input->post('dari_tgl');
    $dari_tgl          =   date('Y-m-d', strtotime($dari_tgl1));
    $sampai_tgl1 = $this->input->post('sampai_tgl');
    $sampai_tgl          =   date('Y-m-d', strtotime($sampai_tgl1));
    $area = $this->input->post('select_area');
    $cabang = $this->input->post('select_cabang');
    $status_hm = $this->input->post('select_status_hm');

    if ($keperluan == 'IDEB') {

      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl'  + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE e.nama='$area' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE e.nama='$area' and f.nama='$cabang' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      }


      $data = $this->db->query($query)->result();

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'No')
      ->setCellValue('B1', 'Tanggal Pengajuan')
      ->setCellValue('C1', 'No SO')
      ->setCellValue('D1', 'Nama Debitur')
      ->setCellValue('E1', 'Plafon')
      ->setCellValue('F1', 'Tenor')
      ->setCellValue('G1', 'Nama SO')
      ->setCellValue('H1', 'Nama Marketing')
      ->setCellValue('I1', 'Asal Data')
      ->setCellValue('J1', 'Jenis Pinjamn')
      ->setCellValue('K1', 'Produk')
      ->setCellValue('L1', 'Status HM')
      ->setCellValue('M1', 'Catatan HM')
      ->setCellValue('N1', 'Area')
      ->setCellValue('O1', 'Cabang');

      $kolom = 2;
      $nomor = 1;
      foreach ($data as $hasil) {
        if ($hasil->status_hm === '1') {
          $hasil->status_hm = 'Approved';
        } else if ($hasil->status_hm === '2') {
          $hasil->status_hm = 'Reject';
        } else {
          $hasil->status_hm = 'Waiting';
        }
        $sheet = $spreadsheet->getActiveSheet()
        ->setCellValue('A' . $kolom, $nomor)
        ->setCellValue('B' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pengajuan)))
        ->setCellValue('C' . $kolom, $hasil->nomor_so)
        ->setCellValue('D' . $kolom, $hasil->nama_debitur)
        ->setCellValue('E' . $kolom, $hasil->plafon)
        ->setCellValue('F' . $kolom, $hasil->tenor)
        ->setCellValue('G' . $kolom, $hasil->nama_so)
        ->setCellValue('H' . $kolom, $hasil->nama_marketing)
        ->setCellValue('I' . $kolom, $hasil->asal_data)
        ->setCellValue('J' . $kolom, $hasil->jenis_pinjaman)
        ->setCellValue('K' . $kolom, $hasil->produk)
        ->setCellValue('L' . $kolom, $hasil->status_hm)
        ->setCellValue('M' . $kolom, $hasil->catatan_hm)
        ->setCellValue('N' . $kolom, $hasil->area)
        ->setCellValue('O' . $kolom, $hasil->cabang);

        $kolom++;
        $nomor++;
      }

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data IDEB SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    }else if ($keperluan == 'HM') {
      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl'  + interval 1 day) AND c.status_hm='$status_hm'";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE e.nama='$area' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND c.status_hm='$status_hm'";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE e.nama='$area' and f.nama='$cabang' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND c.status_hm='$status_hm'";
      }


      $data = $this->db->query($query)->result();

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'No')
      ->setCellValue('B1', 'Tanggal Pengajuan')
      ->setCellValue('C1', 'No SO')
      ->setCellValue('D1', 'Nama Debitur')
      ->setCellValue('E1', 'Plafon')
      ->setCellValue('F1', 'Tenor')
      ->setCellValue('G1', 'Nama SO')
      ->setCellValue('H1', 'Nama Marketing')
      ->setCellValue('I1', 'Asal Data')
      ->setCellValue('J1', 'Jenis Pinjamn')
      ->setCellValue('K1', 'Produk')
      ->setCellValue('L1', 'Status HM')
      ->setCellValue('M1', 'Catatan HM')
      ->setCellValue('N1', 'Area')
      ->setCellValue('O1', 'Cabang');

      $kolom = 2;
      $nomor = 1;
      foreach ($data as $hasil) {
        if ($hasil->status_hm === '1') {
          $hasil->status_hm = 'Approved';
        } else if ($hasil->status_hm === '2') {
          $hasil->status_hm = 'Reject';
        } else {
          $hasil->status_hm = 'Waiting';
        }
        $sheet = $spreadsheet->getActiveSheet()
        ->setCellValue('A' . $kolom, $nomor)
        ->setCellValue('B' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pengajuan)))
        ->setCellValue('C' . $kolom, $hasil->nomor_so)
        ->setCellValue('D' . $kolom, $hasil->nama_debitur)
        ->setCellValue('E' . $kolom, $hasil->plafon)
        ->setCellValue('F' . $kolom, $hasil->tenor)
        ->setCellValue('G' . $kolom, $hasil->nama_so)
        ->setCellValue('H' . $kolom, $hasil->nama_marketing)
        ->setCellValue('I' . $kolom, $hasil->asal_data)
        ->setCellValue('J' . $kolom, $hasil->jenis_pinjaman)
        ->setCellValue('K' . $kolom, $hasil->produk)
        ->setCellValue('L' . $kolom, $hasil->status_hm)
        ->setCellValue('M' . $kolom, $hasil->catatan_hm)
        ->setCellValue('N' . $kolom, $hasil->area)
        ->setCellValue('O' . $kolom, $hasil->cabang);

        $kolom++;
        $nomor++;
      }

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data HM SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    }else if ($keperluan == 'AO') {
      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = " SELECT c.nomor_so, c.created_at AS tgl_pengajuan, g.created_at AS tgl_pembuatan_ao, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, r.nama as nama_ao, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, h.plafon_kredit AS plafon_recomend, CONCAT(a.alamat_domisili,' RT.', a.rt_domisili,' RW.', a.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(i.alamat,' RT.', i.rt,' RW.', i.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, g.status_ao, h.analisa_ao AS catatan_ao, e.nama AS area, f.nama AS cabang FROM trans_ao AS g LEFT JOIN trans_so AS c ON c.id=g.id_trans_so LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id  LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id  LEFT JOIN recom_ao AS h ON g.id_recom_ao=h.id LEFT JOIN agunan_tanah AS i ON g.id_agunan_tanah=i.id LEFT JOIN m_pic AS r ON g.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = a.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = a.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = a.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = a.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = i.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = i.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = i.id_kecamatan LEFT JOIN master_kelurahan AS q ON q.id = i.id_kelurahan WHERE (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.nomor_so, c.created_at AS tgl_pengajuan, g.created_at AS tgl_pembuatan_ao, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, r.nama as nama_ao, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, h.plafon_kredit AS plafon_recomend, CONCAT(a.alamat_domisili,' RT.', a.rt_domisili,' RW.', a.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(i.alamat,' RT.', i.rt,' RW.', i.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, g.status_ao, h.analisa_ao AS catatan_ao, e.nama AS area, f.nama AS cabang FROM trans_ao AS g LEFT JOIN trans_so AS c ON c.id=g.id_trans_so LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id  LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id  LEFT JOIN recom_ao AS h ON g.id_recom_ao=h.id LEFT JOIN agunan_tanah AS i ON g.id_agunan_tanah=i.id LEFT JOIN m_pic AS r ON g.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = a.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = a.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = a.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = a.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = i.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = i.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = i.id_kecamatan LEFT JOIN master_kelurahan AS q ON q.id = i.id_kelurahan WHERE e.nama='$area' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.nomor_so, c.created_at AS tgl_pengajuan, g.created_at AS tgl_pembuatan_ao,  a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, r.nama as nama_ao, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, h.plafon_kredit AS plafon_recomend, CONCAT(a.alamat_domisili,' RT.', a.rt_domisili,' RW.', a.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(i.alamat,' RT.', i.rt,' RW.', i.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, g.status_ao, h.analisa_ao AS catatan_ao, e.nama AS area, f.nama AS cabang FROM trans_ao AS g LEFT JOIN trans_so AS c ON c.id=g.id_trans_so LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id  LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id  LEFT JOIN recom_ao AS h ON g.id_recom_ao=h.id LEFT JOIN agunan_tanah AS i ON g.id_agunan_tanah=i.id LEFT JOIN m_pic AS r ON g.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = a.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = a.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = a.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = a.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = i.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = i.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = i.id_kecamatan LEFT JOIN master_kelurahan AS q ON q.id = i.id_kelurahan WHERE e.nama='$area' and f.nama='$cabang' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      }
      $data = $this->db->query($query)->result();

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'No')
      ->setCellValue('B1', 'Tanggal Pengajuan')
      ->setCellValue('C1', 'Tanggal Pembuatan Memo AO')
      ->setCellValue('D1', 'No SO')
      ->setCellValue('E1', 'Nama Debitur')
      ->setCellValue('F1', 'Plafon')
      ->setCellValue('G1', 'Tenor')
      ->setCellValue('H1', 'Nama AO')
      ->setCellValue('I1', 'Nama Marketing')
      ->setCellValue('J1', 'Asal Data')
      ->setCellValue('K1', 'Jenis Pinjamn')
      ->setCellValue('L1', 'Produk')
      ->setCellValue('M1', 'Plafon Recomend')
      ->setCellValue('N1', 'Alamat Tempat Tinggal')
      ->setCellValue('O1', 'Alamat Jaminan')
      ->setCellValue('P1', 'Status AO')
      ->setCellValue('Q1', 'Catatan AO')
      ->setCellValue('R1', 'Area')
      ->setCellValue('S1', 'Cabang');

      $kolom = 2;
      $nomor = 1;
      foreach ($data as $hasil) {
        if ($hasil->status_ao === '1') {
          $hasil->status_ao = 'Approved';
        } else if ($hasil->status_ao === '2') {
          $hasil->status_ao = 'Reject';
        } else {
          $hasil->status_ao = 'Waiting';
        }
        $sheet = $spreadsheet->getActiveSheet()
        ->setCellValue('A' . $kolom, $nomor)
        ->setCellValue('B' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pengajuan)))
        ->setCellValue('C' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pembuatan_ao)))
        ->setCellValue('D' . $kolom, $hasil->nomor_so)
        ->setCellValue('E' . $kolom, $hasil->nama_debitur)
        ->setCellValue('F' . $kolom, $hasil->plafon)
        ->setCellValue('G' . $kolom, $hasil->tenor)
        ->setCellValue('H' . $kolom, $hasil->nama_ao)
        ->setCellValue('I' . $kolom, $hasil->nama_marketing)
        ->setCellValue('J' . $kolom, $hasil->asal_data)
        ->setCellValue('K' . $kolom, $hasil->jenis_pinjaman)
        ->setCellValue('L' . $kolom, $hasil->produk)
        ->setCellValue('M' . $kolom, $hasil->plafon_recomend)
        ->setCellValue('N' . $kolom, $hasil->alamat_domisili)
        ->setCellValue('O' . $kolom, $hasil->alamat_jaminan)
        ->setCellValue('P' . $kolom, $hasil->status_ao)
        ->setCellValue('Q' . $kolom, $hasil->catatan_ao)
        ->setCellValue('R' . $kolom, $hasil->area)
        ->setCellValue('S' . $kolom, $hasil->cabang);

        $kolom++;
        $nomor++;
      }

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data AO SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    } else if ($keperluan == 'CA') {
      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = "SELECT b.nomor_so, s.plafon_kredit AS plafon_recom_ao, s.jangka_waktu AS tenor_recom_ao, b.created_at AS tgl_pengajuan, 
        a.created_at AS tgl_pembuatan_ca, c.nama_lengkap AS nama_debitur, 
        d.plafon, d.tenor, r.nama AS nama_ca, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, 
        i.recom_produk_kredit AS produk, i.recom_nilai_pinjaman AS plafon_recomend, 
        CONCAT(c.alamat_domisili,' RT.', c.rt_domisili,' RW.', c.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(t.alamat,' RT.', t.rt,' RW.', t.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, a.status_ca, 
        i.note_recom AS catatan_ca, f.nama AS AREA, g.nama AS cabang FROM trans_ca AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id  LEFT JOIN fasilitas_pinjaman AS d ON b.id_fasilitas_pinjaman=d.id LEFT JOIN master_asal_data AS e ON b.id_asal_data=e.id LEFT JOIN mk_area AS f ON b.id_area=f.id LEFT JOIN mk_cabang AS g ON b.id_cabang=g.id LEFT JOIN trans_ao AS h ON b.id=h.id_trans_so LEFT JOIN rekomendasi_pinjaman AS i ON a.id_rekomendasi_pinjaman=i.id LEFT JOIN agunan_tanah AS t ON h.id_agunan_tanah=t.id LEFT JOIN m_pic AS r ON a.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = c.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = c.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = c.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = c.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = t.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = t.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = t.id_kecamatan LEFT JOIN 
        master_kelurahan AS q ON q.id = t.id_kelurahan LEFT JOIN recom_ao AS s ON s.id=h.id_recom_ao WHERE (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, s.plafon_kredit AS plafon_recom_ao, s.jangka_waktu AS tenor_recom_ao, b.created_at AS tgl_pengajuan, 
        a.created_at AS tgl_pembuatan_ca, c.nama_lengkap AS nama_debitur, 
        d.plafon, d.tenor, r.nama AS nama_ca, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, 
        i.recom_produk_kredit AS produk, i.recom_nilai_pinjaman AS plafon_recomend, 
        CONCAT(c.alamat_domisili,' RT.', c.rt_domisili,' RW.', c.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(t.alamat,' RT.', t.rt,' RW.', t.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, a.status_ca, 
        i.note_recom AS catatan_ca, f.nama AS AREA, g.nama AS cabang FROM trans_ca AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id  LEFT JOIN fasilitas_pinjaman AS d ON b.id_fasilitas_pinjaman=d.id LEFT JOIN master_asal_data AS e ON b.id_asal_data=e.id LEFT JOIN mk_area AS f ON b.id_area=f.id LEFT JOIN mk_cabang AS g ON b.id_cabang=g.id LEFT JOIN trans_ao AS h ON b.id=h.id_trans_so LEFT JOIN rekomendasi_pinjaman AS i ON a.id_rekomendasi_pinjaman=i.id LEFT JOIN agunan_tanah AS t ON h.id_agunan_tanah=t.id LEFT JOIN m_pic AS r ON a.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = c.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = c.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = c.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = c.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = t.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = t.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = t.id_kecamatan LEFT JOIN 
        master_kelurahan AS q ON q.id = t.id_kelurahan LEFT JOIN recom_ao AS s ON s.id=h.id_recom_ao WHERE f.nama='$area' AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, s.plafon_kredit AS plafon_recom_ao, s.jangka_waktu AS tenor_recom_ao, b.created_at AS tgl_pengajuan, 
        a.created_at AS tgl_pembuatan_ca, c.nama_lengkap AS nama_debitur, 
        d.plafon, d.tenor, r.nama AS nama_ca, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, 
        i.recom_produk_kredit AS produk, i.recom_nilai_pinjaman AS plafon_recomend, 
        CONCAT(c.alamat_domisili,' RT.', c.rt_domisili,' RW.', c.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(t.alamat,' RT.', t.rt,' RW.', t.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, a.status_ca, 
        i.note_recom AS catatan_ca, f.nama AS AREA, g.nama AS cabang FROM trans_ca AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id  LEFT JOIN fasilitas_pinjaman AS d ON b.id_fasilitas_pinjaman=d.id LEFT JOIN master_asal_data AS e ON b.id_asal_data=e.id LEFT JOIN mk_area AS f ON b.id_area=f.id LEFT JOIN mk_cabang AS g ON b.id_cabang=g.id LEFT JOIN trans_ao AS h ON b.id=h.id_trans_so LEFT JOIN rekomendasi_pinjaman AS i ON a.id_rekomendasi_pinjaman=i.id LEFT JOIN agunan_tanah AS t ON h.id_agunan_tanah=t.id LEFT JOIN m_pic AS r ON a.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = c.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = c.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = c.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = c.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = t.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = t.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = t.id_kecamatan LEFT JOIN 
        master_kelurahan AS q ON q.id = t.id_kelurahan LEFT JOIN recom_ao AS s ON s.id=h.id_recom_ao WHERE f.nama='$area' and g.nama='$cabang' AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      }
      $data = $this->db->query($query)->result();

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'No')
      ->setCellValue('B1', 'Tanggal Pengajuan')
      ->setCellValue('C1', 'Tanggal Pembuatan Memo CA')
      ->setCellValue('D1', 'No SO')
      ->setCellValue('E1', 'Nama Debitur')
      ->setCellValue('F1', 'Plafon')
      ->setCellValue('G1', 'Tenor')
      ->setCellValue('H1', 'Nama CA')
      ->setCellValue('I1', 'Nama Marketing')
      ->setCellValue('J1', 'Asal Data')
      ->setCellValue('K1', 'Jenis Pinjamn')
      ->setCellValue('L1', 'Produk')
      ->setCellValue('M1', 'Plafon Recomend')
      ->setCellValue('N1', 'Alamat Tempat Tinggal')
      ->setCellValue('O1', 'Alamat Jaminan')
      ->setCellValue('P1', 'Status AO')
      ->setCellValue('Q1', 'Catatan AO')
      ->setCellValue('R1', 'Area')
      ->setCellValue('S1', 'Cabang')
      ->setCellValue('T1', 'Plafon Recom AO')
      ->setCellValue('U1', 'Tenor Recom AO');

      $kolom = 2;
      $nomor = 1;
      foreach ($data as $hasil) {
        if ($hasil->status_ca === '1') {
          $hasil->status_ca = 'Approved';
        }
        $sheet = $spreadsheet->getActiveSheet()
        ->setCellValue('A' . $kolom, $nomor)
        ->setCellValue('B' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pengajuan)))
        ->setCellValue('C' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pembuatan_ca)))
        ->setCellValue('D' . $kolom, $hasil->nomor_so)
        ->setCellValue('E' . $kolom, $hasil->nama_debitur)
        ->setCellValue('F' . $kolom, $hasil->plafon)
        ->setCellValue('G' . $kolom, $hasil->tenor)
        ->setCellValue('H' . $kolom, $hasil->nama_ca)
        ->setCellValue('I' . $kolom, $hasil->nama_marketing)
        ->setCellValue('J' . $kolom, $hasil->asal_data)
        ->setCellValue('K' . $kolom, $hasil->jenis_pinjaman)
        ->setCellValue('L' . $kolom, $hasil->produk)
        ->setCellValue('M' . $kolom, $hasil->plafon_recomend)
        ->setCellValue('N' . $kolom, $hasil->alamat_domisili)
        ->setCellValue('O' . $kolom, $hasil->alamat_jaminan)
        ->setCellValue('P' . $kolom, $hasil->status_ca)
        ->setCellValue('Q' . $kolom, $hasil->catatan_ca)
        ->setCellValue('R' . $kolom, $hasil->area)
        ->setCellValue('S' . $kolom, $hasil->cabang)
        ->setCellValue('T' . $kolom, $hasil->plafon_recom_ao)
        ->setCellValue('U' . $kolom, $hasil->tenor_recom_ao);


        $kolom++;
        $nomor++;
      }

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data CA SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    } else if ($keperluan == 'CAA') {
      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = "SELECT b.nomor_so, b.created_at AS tgl_pengajuan, a.created_at AS tgl_pembuatan_caa, c.nama_lengkap AS nama_debitur, d.plafon, d.tenor, b.nama_so, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, g.recom_produk_kredit AS produk, g.recom_nilai_pinjaman AS approval_pinjaman,h.nama AS area, i.nama AS cabang, j.nama AS nama_ca, a.status_team_caa, k.plafon AS plafonfinal, k.tenor AS tenorin FROM trans_caa AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id LEFT JOIN fasilitas_pinjaman AS d ON d.id=b.id_fasilitas_pinjaman LEFT JOIN master_asal_data AS e ON e.id=b.id_asal_data LEFT JOIN trans_ca AS f ON f.id_trans_so=b.id LEFT JOIN rekomendasi_pinjaman AS g ON f.id_rekomendasi_pinjaman=g.id LEFT JOIN mk_area AS h ON h.id=a.id_area LEFT JOIN mk_cabang AS i ON i.id=a.id_cabang LEFT JOIN m_pic AS j ON j.id= a.id_pic LEFT JOIN tb_approval AS k ON b.id= k.id_trans_so WHERE a.status_caa = '1' AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND k.status='accept'";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, b.created_at AS tgl_pengajuan, a.created_at AS tgl_pembuatan_caa, c.nama_lengkap AS nama_debitur, d.plafon, d.tenor, b.nama_so, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, g.recom_produk_kredit AS produk, g.recom_nilai_pinjaman AS approval_pinjaman,h.nama AS area, i.nama AS cabang, j.nama AS nama_ca, a.status_team_caa, k.plafon AS plafonfinal, k.tenor AS tenorin FROM trans_caa AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id LEFT JOIN fasilitas_pinjaman AS d ON d.id=b.id_fasilitas_pinjaman LEFT JOIN master_asal_data AS e ON e.id=b.id_asal_data LEFT JOIN trans_ca AS f ON f.id_trans_so=b.id LEFT JOIN rekomendasi_pinjaman AS g ON f.id_rekomendasi_pinjaman=g.id LEFT JOIN mk_area AS h ON h.id=a.id_area LEFT JOIN mk_cabang AS i ON i.id=a.id_cabang LEFT JOIN m_pic AS j ON j.id= a.id_pic LEFT JOIN tb_approval AS k ON b.id= k.id_trans_so WHERE a.status_caa = '1' AND h.nama ='$area'  AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND k.status='accept'";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, b.created_at AS tgl_pengajuan, a.created_at AS tgl_pembuatan_caa, c.nama_lengkap AS nama_debitur, d.plafon, d.tenor, b.nama_so, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, g.recom_produk_kredit AS produk, g.recom_nilai_pinjaman AS approval_pinjaman,h.nama AS area, i.nama AS cabang, j.nama AS nama_ca, a.status_team_caa, k.plafon AS plafonfinal, k.tenor AS tenorin FROM trans_caa AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id LEFT JOIN fasilitas_pinjaman AS d ON d.id=b.id_fasilitas_pinjaman LEFT JOIN master_asal_data AS e ON e.id=b.id_asal_data LEFT JOIN trans_ca AS f ON f.id_trans_so=b.id LEFT JOIN rekomendasi_pinjaman AS g ON f.id_rekomendasi_pinjaman=g.id LEFT JOIN mk_area AS h ON h.id=a.id_area LEFT JOIN mk_cabang AS i ON i.id=a.id_cabang LEFT JOIN m_pic AS j ON j.id= a.id_pic LEFT JOIN tb_approval AS k ON b.id= k.id_trans_so WHERE a.status_caa = '1' AND h.nama ='$area' AND i.nama='$cabang' AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND k.status='accept'";
      }
      $data = $this->db->query($query)->result();

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'No')
      ->setCellValue('B1', 'Tanggal Pengajuan')
      ->setCellValue('C1', 'Tanggal Pembuatan CAA')
      ->setCellValue('D1', 'No SO')
      ->setCellValue('E1', 'Nama Debitur')
      ->setCellValue('F1', 'Plafon')
      ->setCellValue('G1', 'Tenor')
      ->setCellValue('H1', 'Nama SO')
      ->setCellValue('I1', 'Nama CA')
      ->setCellValue('J1', 'Nama Marketing')
      ->setCellValue('K1', 'Asal Data')
      ->setCellValue('L1', 'Jenis Pinjamn')
      ->setCellValue('M1', 'Produk')
      ->setCellValue('N1', 'Recom Nilai Pinjaman CA')
      ->setCellValue('O1', 'Cabang')
      ->setCellValue('P1', 'Status Team CAA')
      ->setCellValue('Q1', 'Note')
      ->setCellValue('Q2', 'Jika status Team CAA On Progress Maka Data suda mencapai LPDK')
      ->setCellValue('R1', 'Plafon Final')
      ->setCellValue('S1', 'Tenor Final');

      $kolom = 2;
      $nomor = 1;
      foreach ($data as $hasil) {
        if (preg_match("/accept/i", $hasil->status_team_caa)) {
          $status_caa='accept';
        }else if (preg_match("/reject/i", $hasil->status_team_caa)) {
          $status_caa='reject';
        }else if (preg_match("/ON-PROGRESS/i", $hasil->status_team_caa)) {
          $status_caa='on progress';
        }else if (preg_match("/forward/i", $hasil->status_team_caa)) {
          $status_caa='forward';
        }else if (preg_match("/ON-QUEUE/i", $hasil->status_team_caa)) {
          $status_caa='on queue';
        }else{
          $status_caa='NULL';
        }

        $sheet = $spreadsheet->getActiveSheet()
        ->setCellValue('A' . $kolom, $nomor)
        ->setCellValue('B' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pengajuan)))
        ->setCellValue('C' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pembuatan_caa)))
        ->setCellValue('D' . $kolom, $hasil->nomor_so)
        ->setCellValue('E' . $kolom, $hasil->nama_debitur)
        ->setCellValue('F' . $kolom, $hasil->plafon)
        ->setCellValue('G' . $kolom, $hasil->tenor)
        ->setCellValue('H' . $kolom, $hasil->nama_so)
        ->setCellValue('I' . $kolom, $hasil->nama_ca)
        ->setCellValue('J' . $kolom, $hasil->nama_marketing)
        ->setCellValue('K' . $kolom, $hasil->asal_data)
        ->setCellValue('L' . $kolom, $hasil->jenis_pinjaman)
        ->setCellValue('M' . $kolom, $hasil->produk)
        ->setCellValue('N' . $kolom, $hasil->approval_pinjaman)
        ->setCellValue('O' . $kolom, $hasil->cabang)
        ->setCellValue('P' . $kolom, $status_caa)
        ->setCellValue('R' . $kolom, $hasil->plafonfinal)
        ->setCellValue('S' . $kolom, $hasil->tenorin);

        $kolom++;
        $nomor++;
      }

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data CAA SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    } else if ($keperluan == 'LPDK') {
      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = "SELECT a.*,c.nama AS area, b.nama AS cabang, d.created_at AS tgl_pembuatan_lpdk, e.nama AS pic_lpdk, g.jenis_pinjaman FROM lpdk AS a LEFT JOIN mk_cabang AS b ON a.id_cabang=b.id LEFT JOIN mk_area AS c ON a.id_area=c.id LEFT JOIN lpdk_hasil AS d ON a.trans_so=d.trans_so LEFT JOIN m_pic AS e ON d.id_pic=.e.id LEFT JOIN trans_so AS f ON a.trans_so=f.id LEFT JOIN fasilitas_pinjaman AS g ON f.id_fasilitas_pinjaman=g.id WHERE (a.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT a.*,c.nama AS area, b.nama AS cabang, d.created_at AS tgl_pembuatan_lpdk, e.nama AS pic_lpdk, g.jenis_pinjaman FROM lpdk AS a LEFT JOIN mk_cabang AS b ON a.id_cabang=b.id LEFT JOIN mk_area AS c ON a.id_area=c.id LEFT JOIN lpdk_hasil AS d ON a.trans_so=d.trans_so LEFT JOIN m_pic AS e ON d.id_pic=.e.id LEFT JOIN trans_so AS f ON a.trans_so=f.id LEFT JOIN fasilitas_pinjaman AS g ON f.id_fasilitas_pinjaman=g.id WHERE c.nama='$area' AND (a.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT a.*,c.nama AS area, b.nama AS cabang, d.created_at AS tgl_pembuatan_lpdk, e.nama AS pic_lpdk, g.jenis_pinjaman FROM lpdk AS a LEFT JOIN mk_cabang AS b ON a.id_cabang=b.id LEFT JOIN mk_area AS c ON a.id_area=c.id LEFT JOIN lpdk_hasil AS d ON a.trans_so=d.trans_so LEFT JOIN m_pic AS e ON d.id_pic=.e.id LEFT JOIN trans_so AS f ON a.trans_so=f.id LEFT JOIN fasilitas_pinjaman AS g ON f.id_fasilitas_pinjaman=g.id WHERE c.nama='$area' AND b.nama='$cabang' AND (a.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      }
      $data = $this->db->query($query)->result();

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'No')
      ->setCellValue('B1', 'Tanggal Pengajuan LPDK')
      ->setCellValue('C1', 'Tanggal Pembuatan LPDK')
      ->setCellValue('D1', 'No SO')
      ->setCellValue('E1', 'Nama Debitur')
      ->setCellValue('F1', 'Plafon Approve')
      ->setCellValue('G1', 'Tenor Approve')
      ->setCellValue('H1', 'Nama SO')
      ->setCellValue('I1', 'Nama Pengajuan LPDK')
      ->setCellValue('J1', 'Nama Pembuat LPDK')
      ->setCellValue('K1', 'Nama Marketing')
      ->setCellValue('L1', 'Asal Data')
      ->setCellValue('M1', 'Jenis Pinjamn')
      ->setCellValue('N1', 'Produk')
      ->setCellValue('O1', 'SLA')
      ->setCellValue('P1', 'Cabang')
      ->setCellValue('Q1', 'Status LPDK')
      ->setCellValue('R1', 'Note Admin')
      ->setCellValue('S1', 'Note Legal');

      $kolom = 2;
      $nomor = 1;
      foreach ($data as $hasil) {

        $sheet = $spreadsheet->getActiveSheet()
        ->setCellValue('A' . $kolom, $nomor)
        ->setCellValue('B' . $kolom, date('j F Y H:i:s', strtotime($hasil->created_at)))
        ->setCellValue('C' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pembuatan_lpdk)))
        ->setCellValue('D' . $kolom, $hasil->nomor_so)
        ->setCellValue('E' . $kolom, $hasil->nama_debitur)
        ->setCellValue('F' . $kolom, $hasil->plafon)
        ->setCellValue('G' . $kolom, $hasil->tenor)
        ->setCellValue('H' . $kolom, $hasil->nama_so)
        ->setCellValue('I' . $kolom, $hasil->request_by)
        ->setCellValue('J' . $kolom, $hasil->pic_lpdk)
        ->setCellValue('K' . $kolom, $hasil->nama_marketing)
        ->setCellValue('L' . $kolom, $hasil->asal_data)
        ->setCellValue('M' . $kolom, $hasil->jenis_pinjaman)
        ->setCellValue('N' . $kolom, $hasil->produk)
        ->setCellValue('O' . $kolom, $hasil->sla)
        ->setCellValue('P' . $kolom, $hasil->cabang)
        ->setCellValue('Q' . $kolom, $hasil->status_kredit)
        ->setCellValue('R' . $kolom, $hasil->notes_counter)
        ->setCellValue('S' . $kolom, $hasil->notes_progress);

        $kolom++;
        $nomor++;
      }




      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data CAA SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    }
  }

  public function export_report()
  {
    $filter =  $this->input->post('data_all');
    if ($filter == 'filter') {
      $tgl_collect_assignment = $this->input->post('tgl_collect_assignment');
      $assignment_task = $this->input->post('assignment_task');
      $assignment_kontrak = $this->input->post('assignment_kontrak');
      $assignment_angsuran = $this->input->post('assignment_angsuran');
      $assignment_os = $this->input->post('assignment_os');

      $visit_task = $this->input->post('visit_task');
      $visit_kontrak = $this->input->post('visit_kontrak');
      $visit_angsuran = $this->input->post('visit_angsuran');
      $visit_os = $this->input->post('visit_os');

      $interaksi_task = $this->input->post('interaksi_task');
      $interaksi_kontrak = $this->input->post('interaksi_kontrak');
      $interaksi_angsuran = $this->input->post('interaksi_angsuran');
      $interaksi_os = $this->input->post('interaksi_os');

      $janji_bayar_task = $this->input->post('janji_bayar_task');
      $janji_bayar_kontrak = $this->input->post('janji_bayar_kontrak');
      $janji_bayar_angsuran = $this->input->post('janji_bayar_angsuran');
      $janji_bayar_os = $this->input->post('janji_bayar_os');

      $bayar_task = $this->input->post('bayar_task');
      $bayar_kontrak = $this->input->post('bayar_kontrak');
      $bayar_angsuran = $this->input->post('bayar_angsuran');
      $bayar_os = $this->input->post('bayar_os');

      $bayar_via_jari_bayar_task = $this->input->post('bayar_via_jari_bayar_task');
      $bayar_via_jari_bayar_kontrak = $this->input->post('bayar_via_jari_bayar_kontrak');
      $bayar_via_jari_bayar_angsuran = $this->input->post('bayar_via_jari_bayar_angsuran');
      $bayar_via_jari_bayar_os = $this->input->post('bayar_via_jari_bayar_os');

      $current = $this->input->post('current');
      $collection_rasio = $this->input->post('collection_rasio');

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Activity')
      ->setCellValue('B1', 'Tanggal Collect')
      ->setCellValue('C1', 'Task')
      ->setCellValue('D1', 'Kontrak')
      ->setCellValue('E1', 'Angsuran/Jml Tunggakan')
      ->setCellValue('F1', 'OS Pokok/Baki Debet');

      // $kolom = 2;
      $nomor = 1;
      $sheet = $spreadsheet->getActiveSheet()
      ->setCellValue('A2',  'ASSIGNMENT')
      ->setCellValue('A3',  'VISIT')
      ->setCellValue('A4',  'INTERAKSI')
      ->setCellValue('A5',  'JANJI BAYAR')
      ->setCellValue('A6',  'BAYAR')
      ->setCellValue('A7',  'BAYAR VIA JARI')
      ->setCellValue('A8',  'CURRENT')
      ->setCellValue('A9',  'COLLECTION RASIO')
      ->setCellValue('B2',  $tgl_collect_assignment)
      ->setCellValue('B3',  $tgl_collect_assignment)
      ->setCellValue('B4',  $tgl_collect_assignment)
      ->setCellValue('B5',  $tgl_collect_assignment)
      ->setCellValue('B6',  $tgl_collect_assignment)
      ->setCellValue('B7',  $tgl_collect_assignment)
      ->setCellValue('C2',  $assignment_task)
      ->setCellValue('D2',  $assignment_kontrak)
      ->setCellValue('E2',  $assignment_angsuran)
      ->setCellValue('F2',  $assignment_os)
      ->setCellValue('C3',  $visit_task)
      ->setCellValue('D3',  $visit_kontrak)
      ->setCellValue('E3',  $visit_angsuran)
      ->setCellValue('F3',  $visit_os)

      ->setCellValue('C4',  $interaksi_task)
      ->setCellValue('D4',  $interaksi_kontrak)
      ->setCellValue('E4',  $interaksi_angsuran)
      ->setCellValue('F4',  $interaksi_os)

      ->setCellValue('C5',  $janji_bayar_task)
      ->setCellValue('D5',  $janji_bayar_kontrak)
      ->setCellValue('E5',  $janji_bayar_angsuran)
      ->setCellValue('F5',  $janji_bayar_os)

      ->setCellValue('C6',  $bayar_task)
      ->setCellValue('D6',  $bayar_kontrak)
      ->setCellValue('E6',  $bayar_angsuran)
      ->setCellValue('F6',  $bayar_os)

      ->setCellValue('C7',  $bayar_via_jari_bayar_task)
      ->setCellValue('D7',  $bayar_via_jari_bayar_kontrak)
      ->setCellValue('E7',  $bayar_via_jari_bayar_angsuran)
      ->setCellValue('F7',  $bayar_via_jari_bayar_os)

      ->setCellValue('B8',  $current)
      ->setCellValue('B9',  $collection_rasio);

      // $kolom++;

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data Report Collection';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    } else {
      $tgl_collect_assignment = $this->input->post('tgl_collect1');
      $assignment_task = $this->input->post('task1');
      $assignment_kontrak = $this->input->post('kontrak1');
      $assignment_angsuran = $this->input->post('jml_tunggakan1');
      $assignment_os = $this->input->post('total_ospokok1');

      $tgl_collect_visit = $this->input->post('tgl_collect2');
      $visit_task = $this->input->post('task2');
      $visit_kontrak = $this->input->post('kontrak2');
      $visit_angsuran = $this->input->post('jml_tunggakan2');
      $visit_os = $this->input->post('total_ospokok2');

      $tgl_collect_interaksi = $this->input->post('tgl_collect3');
      $interaksi_task = $this->input->post('task3');
      $interaksi_kontrak = $this->input->post('kontrak3');
      $interaksi_angsuran = $this->input->post('jml_tunggakan3');
      $interaksi_os = $this->input->post('total_ospokok3');

      $tgl_collect_janji_bayar = $this->input->post('tgl_collect4');
      $janji_bayar_task = $this->input->post('task4');
      $janji_bayar_kontrak = $this->input->post('kontrak4');
      $janji_bayar_angsuran = $this->input->post('jml_tunggakan4');
      $janji_bayar_os = $this->input->post('total_ospokok4');

      $tgl_collect_bayar = $this->input->post('tgl_collect5');
      $bayar_task = $this->input->post('task5');
      $bayar_kontrak = $this->input->post('kontrak5');
      $bayar_angsuran = $this->input->post('jml_tunggakan5');
      $bayar_os = $this->input->post('total_ospokok5');

      $tgl_collect_jari = $this->input->post('tgl_collect6');
      $bayar_via_jari_bayar_task = $this->input->post('task6');
      $bayar_via_jari_bayar_kontrak = $this->input->post('kontrak6');
      $bayar_via_jari_bayar_angsuran = $this->input->post('jml_tunggakan6');
      $bayar_via_jari_bayar_os = $this->input->post('total_ospokok6');

      $current = $this->input->post('current1');
      $collection_rasio = $this->input->post('collection_rasio1');

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Activity')
      ->setCellValue('B1', 'Tanggal Collect')
      ->setCellValue('C1', 'Task')
      ->setCellValue('D1', 'Kontrak')
      ->setCellValue('E1', 'Angsuran/Jml Tunggakan')
      ->setCellValue('F1', 'OS Pokok/Baki Debet');

      // $kolom = 2;
      $nomor = 1;
      $sheet = $spreadsheet->getActiveSheet()
      ->setCellValue('A2',  'ASSIGNMENT')
      ->setCellValue('A3',  'VISIT')
      ->setCellValue('A4',  'INTERAKSI')
      ->setCellValue('A5',  'JANJI BAYAR')
      ->setCellValue('A6',  'BAYAR')
      ->setCellValue('A7',  'BAYAR VIA JARI')
      ->setCellValue('A8',  'CURRENT')
      ->setCellValue('A9',  'COLLECTION RASIO')
      ->setCellValue('B2',  $tgl_collect_assignment)
      ->setCellValue('B3',  $tgl_collect_visit)
      ->setCellValue('B4',  $tgl_collect_interaksi)
      ->setCellValue('B5',  $tgl_collect_janji_bayar)
      ->setCellValue('B6',  $tgl_collect_bayar)
      ->setCellValue('B7',  $tgl_collect_jari)
      ->setCellValue('C2',  $assignment_task)
      ->setCellValue('D2',  $assignment_kontrak)
      ->setCellValue('E2',  $assignment_angsuran)
      ->setCellValue('F2',  $assignment_os)
      ->setCellValue('C3',  $visit_task)
      ->setCellValue('D3',  $visit_kontrak)
      ->setCellValue('E3',  $visit_angsuran)
      ->setCellValue('F3',  $visit_os)

      ->setCellValue('C4',  $interaksi_task)
      ->setCellValue('D4',  $interaksi_kontrak)
      ->setCellValue('E4',  $interaksi_angsuran)
      ->setCellValue('F4',  $interaksi_os)

      ->setCellValue('C5',  $janji_bayar_task)
      ->setCellValue('D5',  $janji_bayar_kontrak)
      ->setCellValue('E5',  $janji_bayar_angsuran)
      ->setCellValue('F5',  $janji_bayar_os)

      ->setCellValue('C6',  $bayar_task)
      ->setCellValue('D6',  $bayar_kontrak)
      ->setCellValue('E6',  $bayar_angsuran)
      ->setCellValue('F6',  $bayar_os)

      ->setCellValue('C7',  $bayar_via_jari_bayar_task)
      ->setCellValue('D7',  $bayar_via_jari_bayar_kontrak)
      ->setCellValue('E7',  $bayar_via_jari_bayar_angsuran)
      ->setCellValue('F7',  $bayar_via_jari_bayar_os)

      ->setCellValue('B8',  $current)
      ->setCellValue('B9',  $collection_rasio);

      // $kolom++;

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data Report Collection';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    }
  }
}
