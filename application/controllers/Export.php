<?php defined('BASEPATH') or die('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Font;

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
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur,i.nama_lengkap AS nama_pasangan, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN view_kode_group4 AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id LEFT JOIN pasangan_calon_debitur AS i ON c.id_pasangan=i.id WHERE (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl'  + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur,i.nama_lengkap AS nama_pasangan, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN view_kode_group4 AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id LEFT JOIN pasangan_calon_debitur AS i ON c.id_pasangan=i.id WHERE e.nama='$area' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur,i.nama_lengkap AS nama_pasangan, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN view_kode_group4 AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id LEFT JOIN pasangan_calon_debitur AS i ON c.id_pasangan=i.id WHERE e.nama='$area' and f.nama='$cabang' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      }


      $data = $this->db->query($query)->result();

      $spreadsheet = new Spreadsheet();
      $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A1', 'No')
        ->setCellValue('B1', 'Tanggal Pengajuan')
        ->setCellValue('C1', 'No SO')
        ->setCellValue('D1', 'Nama Debitur')
        ->setCellValue('E1', 'Nama Pasangan')
        ->setCellValue('F1', 'Plafon')
        ->setCellValue('G1', 'Tenor')
        ->setCellValue('H1', 'Nama SO')
        ->setCellValue('I1', 'Nama Marketing')
        ->setCellValue('J1', 'Asal Data')
        ->setCellValue('K1', 'Jenis Pinjamn')
        ->setCellValue('L1', 'Produk')
        ->setCellValue('M1', 'Status HM')
        ->setCellValue('N1', 'Catatan HM')
        ->setCellValue('O1', 'Area')
        ->setCellValue('P1', 'Cabang')
        ->setCellValue('Q1', 'Nomor Telpon');

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
          ->setCellValue('E' . $kolom, $hasil->nama_pasangan)
          ->setCellValue('F' . $kolom, $hasil->plafon)
          ->setCellValue('G' . $kolom, $hasil->tenor)
          ->setCellValue('H' . $kolom, $hasil->nama_so)
          ->setCellValue('I' . $kolom, $hasil->nama_marketing)
          ->setCellValue('J' . $kolom, $hasil->asal_data)
          ->setCellValue('K' . $kolom, $hasil->jenis_pinjaman)
          ->setCellValue('L' . $kolom, $hasil->produk)
          ->setCellValue('M' . $kolom, $hasil->status_hm)
          ->setCellValue('N' . $kolom, $hasil->catatan_hm)
          ->setCellValue('O' . $kolom, $hasil->area)
          ->setCellValue('P' . $kolom, $hasil->cabang)
          ->setCellValue('Q' . $kolom, $hasil->nomor_telpon);

        $kolom++;
        $nomor++;
      }

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data IDEB SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    } else if ($keperluan == 'HM') {
      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl'  + interval 1 day) AND c.status_hm='$status_hm'";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE e.nama='$area' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND c.status_hm='$status_hm'";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.created_at AS tgl_pengajuan, c.nomor_so, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, c.nama_so, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, c.status_hm, c.catatan_hm, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_so AS c LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id LEFT JOIN trans_ca AS g ON c.id=g.id_trans_so LEFT JOIN recom_ca AS h ON g.id_recom_ca=h.id WHERE e.nama='$area' and f.nama='$cabang' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND c.status_hm='$status_hm'";
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
        ->setCellValue('O1', 'Cabang')
        ->setCellValue('P1', 'Nomor Telpon');

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
          ->setCellValue('O' . $kolom, $hasil->cabang)
          ->setCellValue('P' . $kolom, $hasil->nomor_telpon);

        $kolom++;
        $nomor++;
      }

      $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data HM SEFIN';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
    } else if ($keperluan == 'AO') {
      if ($area == 'SEMUA AREA' and $cabang == 'SEMUA CABANG') {
        $query = " SELECT c.nomor_so, c.created_at AS tgl_pengajuan, g.created_at AS tgl_pembuatan_ao, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, r.nama as nama_ao, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, h.plafon_kredit AS plafon_recomend, CONCAT(a.alamat_domisili,' RT.', a.rt_domisili,' RW.', a.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(i.alamat,' RT.', i.rt,' RW.', i.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, g.status_ao, h.analisa_ao AS catatan_ao, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_ao AS g LEFT JOIN trans_so AS c ON c.id=g.id_trans_so LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id  LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id  LEFT JOIN recom_ao AS h ON g.id_recom_ao=h.id LEFT JOIN agunan_tanah AS i ON g.id_agunan_tanah=i.id LEFT JOIN m_pic AS r ON g.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = a.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = a.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = a.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = a.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = i.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = i.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = i.id_kecamatan LEFT JOIN master_kelurahan AS q ON q.id = i.id_kelurahan WHERE (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.nomor_so, c.created_at AS tgl_pengajuan, g.created_at AS tgl_pembuatan_ao, a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, r.nama as nama_ao, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, h.plafon_kredit AS plafon_recomend, CONCAT(a.alamat_domisili,' RT.', a.rt_domisili,' RW.', a.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(i.alamat,' RT.', i.rt,' RW.', i.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, g.status_ao, h.analisa_ao AS catatan_ao, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_ao AS g LEFT JOIN trans_so AS c ON c.id=g.id_trans_so LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id  LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id  LEFT JOIN recom_ao AS h ON g.id_recom_ao=h.id LEFT JOIN agunan_tanah AS i ON g.id_agunan_tanah=i.id LEFT JOIN m_pic AS r ON g.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = a.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = a.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = a.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = a.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = i.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = i.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = i.id_kecamatan LEFT JOIN master_kelurahan AS q ON q.id = i.id_kelurahan WHERE e.nama='$area' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT c.nomor_so, c.created_at AS tgl_pengajuan, g.created_at AS tgl_pembuatan_ao,  a.nama_lengkap AS nama_debitur, b.plafon, b.tenor, r.nama as nama_ao, c.nama_marketing, d.nama AS asal_data, b.jenis_pinjaman, h.produk, h.plafon_kredit AS plafon_recomend, CONCAT(a.alamat_domisili,' RT.', a.rt_domisili,' RW.', a.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(i.alamat,' RT.', i.rt,' RW.', i.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, g.status_ao, h.analisa_ao AS catatan_ao, e.nama AS area, f.nama AS cabang, a.no_telp AS nomor_telpon FROM trans_ao AS g LEFT JOIN trans_so AS c ON c.id=g.id_trans_so LEFT JOIN calon_debitur AS a ON c.id_calon_debitur=a.id LEFT JOIN fasilitas_pinjaman AS b ON c.id_fasilitas_pinjaman=b.id  LEFT JOIN master_asal_data AS d ON c.id_asal_data=d.id LEFT JOIN mk_area AS e ON c.id_area=e.id LEFT JOIN mk_cabang AS f ON c.id_cabang=f.id  LEFT JOIN recom_ao AS h ON g.id_recom_ao=h.id LEFT JOIN agunan_tanah AS i ON g.id_agunan_tanah=i.id LEFT JOIN m_pic AS r ON g.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = a.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = a.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = a.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = a.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = i.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = i.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = i.id_kecamatan LEFT JOIN master_kelurahan AS q ON q.id = i.id_kelurahan WHERE e.nama='$area' and f.nama='$cabang' AND (c.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
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
        ->setCellValue('S1', 'Cabang')
        ->setCellValue('T1', 'Nomor Telpon');

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
          ->setCellValue('S' . $kolom, $hasil->cabang)
          ->setCellValue('T' . $kolom, $hasil->nomor_telpon);

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
        i.note_recom AS catatan_ca, f.nama AS AREA, g.nama AS cabang, c.no_telp AS nomor_telpon FROM trans_ca AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id  LEFT JOIN fasilitas_pinjaman AS d ON b.id_fasilitas_pinjaman=d.id LEFT JOIN master_asal_data AS e ON b.id_asal_data=e.id LEFT JOIN mk_area AS f ON b.id_area=f.id LEFT JOIN mk_cabang AS g ON b.id_cabang=g.id LEFT JOIN trans_ao AS h ON b.id=h.id_trans_so LEFT JOIN rekomendasi_pinjaman AS i ON a.id_rekomendasi_pinjaman=i.id LEFT JOIN agunan_tanah AS t ON h.id_agunan_tanah=t.id LEFT JOIN m_pic AS r ON a.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = c.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = c.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = c.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = c.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = t.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = t.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = t.id_kecamatan LEFT JOIN 
        master_kelurahan AS q ON q.id = t.id_kelurahan LEFT JOIN recom_ao AS s ON s.id=h.id_recom_ao WHERE (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, s.plafon_kredit AS plafon_recom_ao, s.jangka_waktu AS tenor_recom_ao, b.created_at AS tgl_pengajuan, 
        a.created_at AS tgl_pembuatan_ca, c.nama_lengkap AS nama_debitur, 
        d.plafon, d.tenor, r.nama AS nama_ca, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, 
        i.recom_produk_kredit AS produk, i.recom_nilai_pinjaman AS plafon_recomend, 
        CONCAT(c.alamat_domisili,' RT.', c.rt_domisili,' RW.', c.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(t.alamat,' RT.', t.rt,' RW.', t.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, a.status_ca, 
        i.note_recom AS catatan_ca, f.nama AS AREA, g.nama AS cabang, c.no_telp AS nomor_telpon FROM trans_ca AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id  LEFT JOIN fasilitas_pinjaman AS d ON b.id_fasilitas_pinjaman=d.id LEFT JOIN master_asal_data AS e ON b.id_asal_data=e.id LEFT JOIN mk_area AS f ON b.id_area=f.id LEFT JOIN mk_cabang AS g ON b.id_cabang=g.id LEFT JOIN trans_ao AS h ON b.id=h.id_trans_so LEFT JOIN rekomendasi_pinjaman AS i ON a.id_rekomendasi_pinjaman=i.id LEFT JOIN agunan_tanah AS t ON h.id_agunan_tanah=t.id LEFT JOIN m_pic AS r ON a.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = c.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = c.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = c.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = c.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = t.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = t.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = t.id_kecamatan LEFT JOIN 
        master_kelurahan AS q ON q.id = t.id_kelurahan LEFT JOIN recom_ao AS s ON s.id=h.id_recom_ao WHERE f.nama='$area' AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day)";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, s.plafon_kredit AS plafon_recom_ao, s.jangka_waktu AS tenor_recom_ao, b.created_at AS tgl_pengajuan, 
        a.created_at AS tgl_pembuatan_ca, c.nama_lengkap AS nama_debitur, 
        d.plafon, d.tenor, r.nama AS nama_ca, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, 
        i.recom_produk_kredit AS produk, i.recom_nilai_pinjaman AS plafon_recomend, 
        CONCAT(c.alamat_domisili,' RT.', c.rt_domisili,' RW.', c.rw_domisili,' Provinsi:',j.nama,' Kabupaten:', k.nama,' Kecamatan:',l.nama,' Kelurahan:',m.nama,' Kode Pos:',m.kode_pos) AS alamat_domisili, CONCAT(t.alamat,' RT.', t.rt,' RW.', t.rw,' Provinsi:',n.nama,' Kabupaten:', o.nama,' Kecamatan:',p.nama,' Kelurahan:',q.nama,' Kode Pos:',q.kode_pos) AS alamat_jaminan, a.status_ca, 
        i.note_recom AS catatan_ca, f.nama AS AREA, g.nama AS cabang, c.no_telp AS nomor_telpon FROM trans_ca AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id  LEFT JOIN fasilitas_pinjaman AS d ON b.id_fasilitas_pinjaman=d.id LEFT JOIN master_asal_data AS e ON b.id_asal_data=e.id LEFT JOIN mk_area AS f ON b.id_area=f.id LEFT JOIN mk_cabang AS g ON b.id_cabang=g.id LEFT JOIN trans_ao AS h ON b.id=h.id_trans_so LEFT JOIN rekomendasi_pinjaman AS i ON a.id_rekomendasi_pinjaman=i.id LEFT JOIN agunan_tanah AS t ON h.id_agunan_tanah=t.id LEFT JOIN m_pic AS r ON a.id_pic=r.id LEFT JOIN master_provinsi AS j ON j.id = c.id_prov_domisili LEFT JOIN master_kabupaten AS k ON k.id = c.id_kab_domisili LEFT JOIN master_kecamatan AS l ON l.id = c.id_kec_ktp LEFT JOIN master_kelurahan AS m ON m.id = c.id_kel_domisili LEFT JOIN master_provinsi AS n ON n.id = t.id_provinsi LEFT JOIN master_kabupaten AS o ON o.id = t.id_kabupaten LEFT JOIN master_kecamatan AS p ON p.id = t.id_kecamatan LEFT JOIN 
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
        ->setCellValue('U1', 'Tenor Recom AO')
        ->setCellValue('V1', 'Nomor Telpon');

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
          ->setCellValue('U' . $kolom, $hasil->tenor_recom_ao)
          ->setCellValue('V' . $kolom, $hasil->nomor_telpon);


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
        $query = "SELECT b.nomor_so, b.created_at AS tgl_pengajuan, a.created_at AS tgl_pembuatan_caa, c.nama_lengkap AS nama_debitur, d.plafon, d.tenor, b.nama_so, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, g.recom_produk_kredit AS produk, g.recom_nilai_pinjaman AS approval_pinjaman,h.nama AS area, i.nama AS cabang, j.nama AS nama_ca, a.status_team_caa, k.plafon AS plafonfinal, k.tenor AS tenorin, c.no_telp AS nomor_telpon FROM trans_caa AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id LEFT JOIN fasilitas_pinjaman AS d ON d.id=b.id_fasilitas_pinjaman LEFT JOIN master_asal_data AS e ON e.id=b.id_asal_data LEFT JOIN trans_ca AS f ON f.id_trans_so=b.id LEFT JOIN rekomendasi_pinjaman AS g ON f.id_rekomendasi_pinjaman=g.id LEFT JOIN mk_area AS h ON h.id=a.id_area LEFT JOIN mk_cabang AS i ON i.id=a.id_cabang LEFT JOIN m_pic AS j ON j.id= a.id_pic LEFT JOIN tb_approval AS k ON b.id= k.id_trans_so WHERE a.status_caa = '1' AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND k.status='accept' ORDER BY k.created_at DESC";
      } else if ($area != 'SEMUA AREA' and $cabang == 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, b.created_at AS tgl_pengajuan, a.created_at AS tgl_pembuatan_caa, c.nama_lengkap AS nama_debitur, d.plafon, d.tenor, b.nama_so, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, g.recom_produk_kredit AS produk, g.recom_nilai_pinjaman AS approval_pinjaman,h.nama AS area, i.nama AS cabang, j.nama AS nama_ca, a.status_team_caa, k.plafon AS plafonfinal, k.tenor AS tenorin, c.no_telp AS nomor_telpon FROM trans_caa AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id LEFT JOIN fasilitas_pinjaman AS d ON d.id=b.id_fasilitas_pinjaman LEFT JOIN master_asal_data AS e ON e.id=b.id_asal_data LEFT JOIN trans_ca AS f ON f.id_trans_so=b.id LEFT JOIN rekomendasi_pinjaman AS g ON f.id_rekomendasi_pinjaman=g.id LEFT JOIN mk_area AS h ON h.id=a.id_area LEFT JOIN mk_cabang AS i ON i.id=a.id_cabang LEFT JOIN m_pic AS j ON j.id= a.id_pic LEFT JOIN tb_approval AS k ON b.id= k.id_trans_so WHERE a.status_caa = '1' AND h.nama ='$area'  AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND k.status='accept' ORDER BY k.created_at DESC";
      } else if ($area != 'SEMUA AREA' and $cabang != 'SEMUA CABANG' and $dari_tgl1 != '' and $sampai_tgl != '') {
        $query = "SELECT b.nomor_so, b.created_at AS tgl_pengajuan, a.created_at AS tgl_pembuatan_caa, c.nama_lengkap AS nama_debitur, d.plafon, d.tenor, b.nama_so, b.nama_marketing, e.nama AS asal_data, d.jenis_pinjaman, g.recom_produk_kredit AS produk, g.recom_nilai_pinjaman AS approval_pinjaman,h.nama AS area, i.nama AS cabang, j.nama AS nama_ca, a.status_team_caa, k.plafon AS plafonfinal, k.tenor AS tenorin, c.no_telp AS nomor_telpon FROM trans_caa AS a LEFT JOIN trans_so AS b ON b.id=a.id_trans_so LEFT JOIN calon_debitur AS c ON b.id_calon_debitur=c.id LEFT JOIN fasilitas_pinjaman AS d ON d.id=b.id_fasilitas_pinjaman LEFT JOIN master_asal_data AS e ON e.id=b.id_asal_data LEFT JOIN trans_ca AS f ON f.id_trans_so=b.id LEFT JOIN rekomendasi_pinjaman AS g ON f.id_rekomendasi_pinjaman=g.id LEFT JOIN mk_area AS h ON h.id=a.id_area LEFT JOIN mk_cabang AS i ON i.id=a.id_cabang LEFT JOIN m_pic AS j ON j.id= a.id_pic LEFT JOIN tb_approval AS k ON b.id= k.id_trans_so WHERE a.status_caa = '1' AND h.nama ='$area' AND i.nama='$cabang' AND (b.created_at BETWEEN '$dari_tgl' AND '$sampai_tgl' + interval 1 day) AND k.status='accept' ORDER BY k.created_at DESC";
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
        ->setCellValue('S1', 'Tenor Final')
        ->setCellValue('T1', 'Nomor Telpon');

      $kolom = 2;
      $nomor = 1;
      foreach ($data as $hasil) {
        if (preg_match("/accept/i", $hasil->status_team_caa)) {
          $status_caa = 'accept';
        } else if (preg_match("/reject/i", $hasil->status_team_caa)) {
          $status_caa = 'reject';
        } else if (preg_match("/ON-PROGRESS/i", $hasil->status_team_caa)) {
          $status_caa = 'on progress';
        } else if (preg_match("/forward/i", $hasil->status_team_caa)) {
          $status_caa = 'forward';
        } else if (preg_match("/ON-QUEUE/i", $hasil->status_team_caa)) {
          $status_caa = 'on queue';
        } else {
          $status_caa = 'NULL';
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
          ->setCellValue('S' . $kolom, $hasil->tenorin)
          ->setCellValue('T' . $kolom, $hasil->nomor_telpon);

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
function export_report_data_collection_activity(){
    $this->load->model('Model_collection');
    $kode_area = $this->input->post('kode_area');
    $kode_cabang = $this->input->post('kode_cabang');
    $kode_kolektor = $this->input->post('kode_kolektor');
    $pic = $this->input->post('pic');
    $from = $this->input->post('from');
    $to = $this->input->post('to');

    if($from == '' || $to == ''){
      $periode = "";
    }else{
      $periode = "Periode: ".$from." - ".$to;
    }

    $styleColor1 = [
      'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
          'color' => [
            'rgb'=> '66B2FF'
        ]
      ]
    ];

    $styleBorder = [
      'alignment' => [
          'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
      ],
      'borders' => [
      'allBorders' => [
          'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
          'color' => ['argb' => '00000000'],
        ],
      ],
    ];
    $styleArray = [
           'font'=>[
                'name'=>'Arial',
                'bold'=> true,
                'italic'=> true,
                'size'  =>17,
                'color' => [
                  'rgb' => 'FF3333'
                ]
           ]
        ];

    $styleArray1 = [
          'font'=>[
          'name'=>'Arial',
          'bold'=> true,
          'italic'=> true,
          'size'  =>13,
          'color' => [
          'rgb' => '000000'
        ]
      ]
    ];

    $styleFontColor1 = [
            'font'=>[
            'color' => [
                  'rgb' => 'EF3E36'
          ]
        ]
    ];


    $spreadsheet = new Spreadsheet();
        $spreadsheet->getProperties()->setCreator('PT. KREDIT MANDIRI INDONESIA')->setLastModifiedBy('PT. KREDIT MANDIRI INDONESIA')->setTitle('Microsoft Office 365 XLSX Test Document')->setSubject('IT MAN')->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')->setKeywords('office 365 openxml php')->setCategory('Test result file');
    $spreadsheet->getActiveSheet(0)->getStyle('A1:A2')->applyFromArray($styleArray);
    $spreadsheet->getActiveSheet(0)->getStyle('A5:A7')->applyFromArray($styleArray1);
    $spreadsheet->getActiveSheet(0)->setTitle('Report Collection Activity');
    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'PT. BPR Kredit Mandiri Indonesia Pusat')
    ->setCellValue('A2', 'Report Data Collection Activity')
    ->setCellValue('A4', $periode)
    ->setCellValue('A5','Area :'.$kode_area)
    ->setCellValue('A6','Cabang :'.$kode_cabang)
    ->setCellValue('A7','Kolektor :'.$kode_kolektor)
    ->setCellValue('A9','No')
    ->setCellValue('B9','Tanggal')
    ->setCellValue('C9','Area')
    ->setCellValue('D9','Kode Cabang')
    ->setCellValue('E9','Nama Cabang')
    ->setCellValue('F9','Kode Kolektor')
    ->setCellValue('G9','Nama Kolektor')
    ->setCellValue('H9','Assignment')
    ->setCellValue('H10','No Rekening')
    ->setCellValue('I10','Nama Nasabah')
    ->setCellValue('J9','Visit')
    ->setCellValue('K9','Not Visit')
    ->setCellValue('L9','Hasil Visit')
    ->setCellValue('L10','Interaksi')
    ->setCellValue('M10','Janji Bayar')
    ->setCellValue('N9','Tanggal Janji Bayar')
    ->setCellValue('O9','Total Penghasilan')
    ->setCellValue('P9','Kondisi Pekerjaan')
    ->setCellValue('Q9','Aset Debitur')
    ->setCellValue('R9','Case Category')
    ->setCellValue('S9','Next Action')
    ->setCellValue('T9','Invalid No')
    ;

    $spreadsheet->getActiveSheet()->mergeCells('A9:A10');
    $spreadsheet->getActiveSheet()->mergeCells('B9:B10');
    $spreadsheet->getActiveSheet()->mergeCells('C9:C10');
    $spreadsheet->getActiveSheet()->mergeCells('D9:D10');
    $spreadsheet->getActiveSheet()->mergeCells('E9:E10');
    $spreadsheet->getActiveSheet()->mergeCells('F9:F10');
    $spreadsheet->getActiveSheet()->mergeCells('F9:F10');
    $spreadsheet->getActiveSheet()->mergeCells('G9:G10');
    $spreadsheet->getActiveSheet()->mergeCells('H9:I9');
    $spreadsheet->getActiveSheet()->mergeCells('J9:J10');
    $spreadsheet->getActiveSheet()->mergeCells('K9:K10');
    $spreadsheet->getActiveSheet()->mergeCells('L9:M9');
    $spreadsheet->getActiveSheet()->mergeCells('N9:N10');
    $spreadsheet->getActiveSheet()->mergeCells('O9:O10');
    $spreadsheet->getActiveSheet()->mergeCells('P9:P10');
    $spreadsheet->getActiveSheet()->mergeCells('Q9:Q10');
    $spreadsheet->getActiveSheet()->mergeCells('R9:R10');
    $spreadsheet->getActiveSheet()->mergeCells('S9:S10');
    $spreadsheet->getActiveSheet()->mergeCells('T9:T10');


    $get_data_collection_activity = $this->Model_collection->get_total_data_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);

    $i = 11;
    $a = 1;
    foreach($get_data_collection_activity->result() as $row){
      $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A'.$i, $a)
      ->setCellValue('B'.$i, $row->assignment_date)
      ->setCellValue('C'.$i, $row->kode_area)
      ->setCellValue('D'.$i, $row->kode_cabang)
      ->setCellValue('E'.$i, $row->nama_area_kerja)  
      ->setCellValue('F'.$i, $row->kode_group3)
      ->setCellValue('G'.$i, $row->deskripsi_group3)
      ->setCellValue('H'.$i, $row->no_rekening)
      ->setCellValue('I'.$i, $row->NAMA_NASABAH)
      ->setCellValue('J'.$i, $row->visit)
      ->setCellValue('K'.$i, $row->not_visit)
      ->setCellValue('L'.$i, $row->interaksi)
      ->setCellValue('M'.$i, $row->janji_bayar)
      ->setCellValue('N'.$i, $row->tgl_janji_byr)
      ->setCellValue('O'.$i, $row->total_penghasilan)
      ->setCellValue('P'.$i, $row->kondisi_pekerjaan)
      ->setCellValue('Q'.$i, $row->asset_debt)
      ->setCellValue('R'.$i, $row->case_category)
      ->setCellValue('S'.$i, $row->next_action)
      ->setCellValue('T'.$i, $row->invalid_no);
      $i++;
      $a++;
    }
    $spreadsheet->getActiveSheet(0)->getStyle('A9'.':T'.intval($i-1))->applyFromArray($styleBorder);
    $writer = new Xlsx($spreadsheet);

      $filename = 'Export Data Report Collection Activity';

      header('Content-Type: application/vnd.ms-excel');
      header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
      header('Cache-Control: max-age=0');

      $writer->save('php://output');
  }
  function export_report_collection_daily()
  {
    $this->load->helper('General_helper');
    $tgl = $this->input->post('data_tgl');
    $data_tgl = tgl_indonesia($tgl);
    if (empty($tgl)) {
      $tgl = "CURDATE()";
    } else {
      $tgl = "DATE('$tgl')";
    }
    $this->load->model('model_collection');
    $spreadsheet = new Spreadsheet();
    $spreadsheet->getProperties()->setCreator('PT. KREDIT MANDIRI INDONESIA')->setLastModifiedBy('PT. KREDIT MANDIRI INDONESIA')->setTitle('Microsoft Office 365 XLSX Test Document')->setSubject('IT MAN')->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')->setKeywords('office 365 openxml php')->setCategory('Test result file');
    $spreadsheet->getActiveSheet(0)->setTitle('List Bucket 0 ALL');
    $header_hk = $this->model_collection->data_collection_daily($tgl)->row();
    $hk_ke = $this->model_collection->get_hari_kerja($tgl)->row();
    $hk_lalu_ke = $this->model_collection->get_hk_bulan_lalu($tgl)->row();
    $hk_next_lalu_ke = $this->model_collection->get_next_hk_bulan_lalu($tgl)->row();
    // die($hk_ke->hk);
    $spreadsheet->setActiveSheetIndex(0)
      ->setCellValue('A1', 'PT. BPR Kredit Mandiri Indonesia Pusat')
      ->setCellValue('A2', 'Report Data Collection Daily')
      ->setCellValue('A4', 'Tanggal: ' . $data_tgl)
      ->setCellValue('A5', 'Cabang')
      ->setCellValue('B5', 'Angsuran Hari Ini')
      ->setCellValue('B7', 'CURRENT (Rp)')
      ->setCellValue('C7', 'lancar+ (Rp)')
      ->setCellValue('D7', 'DPK (Rp)')
      ->setCellValue('E7', 'DPK+ (Rp)')
      ->setCellValue('F7', 'NPL (Rp)')
      ->setCellValue('G5', 'Baki Debet Hari Ini')
      ->setCellValue('G7', 'CURRENT (Rp)')
      ->setCellValue('H7', 'lancar+ (Rp)')
      ->setCellValue('I7', 'DPK (Rp)')
      ->setCellValue('J7', 'DPK+ (Rp)')
      ->setCellValue('K7', 'NPL (Rp)')
      ->setCellValue('L5', 'HK Hari ini (' . $hk_ke->hk . ')')
      ->setCellValue('L6', tgl_indonesia($header_hk->tgl_hi))
      ->setCellValue('L7', 'CURRENT(%)')
      ->setCellValue('M7', 'lancar+(%)')
      ->setCellValue('N7', 'DPK(%)')
      ->setCellValue('O7', 'DPK+(%)')
      ->setCellValue('P7', 'NPL(%)')
      ->setCellValue('Q5', 'HK Bulan Lalu(' . $hk_lalu_ke->hk . ')')
      ->setCellValue('Q6', tgl_indonesia($header_hk->tgl_hl))
      ->setCellValue('Q7', 'CURRENT(%)')
      ->setCellValue('R7', 'lancar+(%)')
      ->setCellValue('S7', 'DPK(%)')
      ->setCellValue('T7', 'DPK+(%)')
      ->setCellValue('U7', 'NPL(%)')
      ->setCellValue('V5', 'GAP (Hari ini VS Bulan Lalu)')
      ->setCellValue('V7', 'CURRENT(%)')
      ->setCellValue('W7', 'lancar+(%)')
      ->setCellValue('X7', 'DPK(%)')
      ->setCellValue('Y7', 'DPK+(%)')
      ->setCellValue('Z7', 'NPL(%)')
      ->setCellValue('AA5', 'HK Next Bulan Lalu(' . $hk_next_lalu_ke->hk . ')')
      ->setCellValue('AA6', tgl_indonesia($header_hk->tgl_hln))
      ->setCellValue('AA7', 'CURRENT(%)')
      ->setCellValue('AB7', 'lancar+(%)')
      ->setCellValue('AC7', 'DPK(%)')
      ->setCellValue('AD7', 'DPK+(%)')
      ->setCellValue('AE7', 'NPL(%)')
      ->setCellValue('AF5', 'GAP (Hari ini VS HK Next bulan lalu)')
      ->setCellValue('AF7', 'CURRENT(%)')
      ->setCellValue('AG7', 'lancar+(%)')
      ->setCellValue('AH7', 'DPK(%)')
      ->setCellValue('AI7', 'DPK+(%)')
      ->setCellValue('AJ7', 'NPL(%)');
    $spreadsheet->getActiveSheet()->mergeCells('B5:F6');
    $spreadsheet->getActiveSheet()->mergeCells('G5:K6');
    $spreadsheet->getActiveSheet()->mergeCells('L5:P5');
    $spreadsheet->getActiveSheet()->mergeCells('L6:P6');
    $spreadsheet->getActiveSheet()->mergeCells('Q5:U5');
    $spreadsheet->getActiveSheet()->mergeCells('Q6:U6');
    $spreadsheet->getActiveSheet()->mergeCells('V5:Z6');
    $spreadsheet->getActiveSheet()->mergeCells('AA5:AE5');
    $spreadsheet->getActiveSheet()->mergeCells('AA6:AE6');
    $spreadsheet->getActiveSheet()->mergeCells('AF5:AJ6');
    $spreadsheet->getActiveSheet()->mergeCells('A5:A7');

    $styleColor1 = [
      'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'color' => [
          'rgb' => '66B2FF'
        ]
      ]
    ];

    $styleBorder = [
      'alignment' => [
        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
      ],
      'borders' => [
        'allBorders' => [
          'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
          'color' => ['argb' => '00000000'],
        ],
      ],
    ];
    $styleArray = [
      'font' => [
        'name' => 'Arial',
        'bold' => true,
        'italic' => true,
        'size'  => 17,
        'color' => [
          'rgb' => 'FF3333'
        ]
      ]
    ];

    $styleArray1 = [
      'font' => [
        'name' => 'Arial',
        'bold' => true,
        'italic' => true,
        'size'  => 15,
        'color' => [
          'rgb' => '000000'
        ]
      ]
    ];

    $styleFontColor1 = [
      'font' => [
        'color' => [
          'rgb' => 'EF3E36'
        ]
      ]
    ];

    $spreadsheet->getActiveSheet(0)->getStyle('A1:A3')->applyFromArray($styleArray);

    $hk = $this->model_collection->data_collection_daily($tgl);

    $i = 8;
    $tot_ang_current = 0;
    $tot_ang_lancar = 0;
    $tot_ang_dpk = 0;
    $tot_ang_dpk_dpk = 0;
    $tot_ang_npl = 0;
    $a = 1;
    foreach ($hk->result() as $row) {
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("A" . $i, $row->nama_area_kerja);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("B" . $i, number_format($row->ang_current, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("C" . $i, number_format($row->ang_lancar, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("D" . $i, number_format($row->ang_dpk, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("E" . $i, number_format($row->ang_dpk_dpk, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("F" . $i, number_format($row->ang_npl, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("G" . $i, number_format($row->ang_bd_current, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("H" . $i, number_format($row->ang_bd_lancar, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("I" . $i, number_format($row->ang_bd_dpk, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("J" . $i, number_format($row->ang_bd_dpk_dpk, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("K" . $i, number_format($row->ang_bd_npl, 0));
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("L" . $i, $row->rasio_bucket_0_hi);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("M" . $i, $row->rasio_bucket_1_hi);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("N" . $i, $row->rasio_bucket_2_hi);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("O" . $i, $row->rasio_bucket_3_hi);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("P" . $i, $row->rasio_bucket_npl_hi);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("Q" . $i, $row->rasio_bucket_0_hl);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("R" . $i, $row->rasio_bucket_1_hl);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("S" . $i, $row->rasio_bucket_2_hl);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("T" . $i, $row->rasio_bucket_3_hl);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("U" . $i, $row->rasio_bucket_npl_hl);
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("V" . $i, $row->gap_current_hihl);
      if (negative_check($row->gap_current_hihl) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("V" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("W" . $i, $row->gap_lancar_hihl);
      if (negative_check($row->gap_lancar_hihl) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("W" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("X" . $i, $row->gap_dpk_hihl);
      if (negative_check($row->gap_dpk_hihl) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("X" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("Y" . $i, $row->gap_dpk_dpk_hihl);
      if (negative_check($row->gap_dpk_dpk_hihl) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("Y" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("Z" . $i, $row->gap_npl_hihl);
      if (negative_check($row->gap_npl_hihl) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("Z" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AA" . $i, $row->rasio_bucket_0_hln);
      if (negative_check($row->rasio_bucket_0_hln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AA" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AB" . $i, $row->rasio_bucket_1_hln);
      if (negative_check($row->rasio_bucket_1_hln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AB" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AC" . $i, $row->rasio_bucket_2_hln);
      if (negative_check($row->rasio_bucket_2_hln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AC" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AD" . $i, $row->rasio_bucket_3_hln);
      if (negative_check($row->rasio_bucket_3_hln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AD" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AE" . $i, $row->rasio_bucket_npl_hln);
      if (negative_check($row->rasio_bucket_npl_hln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AE" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AF" . $i, $row->gap_current_hihln);
      if (negative_check($row->gap_current_hihln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AF" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AG" . $i, $row->gap_lancar_hihln);
      if (negative_check($row->gap_lancar_hihln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AG" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AH" . $i, $row->gap_dpk_hihln);
      if (negative_check($row->gap_dpk_hihln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AH" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AI" . $i, $row->gap_dpk_dpk_hihln);
      if (negative_check($row->gap_dpk_dpk_hihln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AI" . $i)->applyFromArray($styleFontColor1);
      }
      $spreadsheet->setActiveSheetIndex(0)->setCellValue("AJ" . $i, $row->gap_npl_hihln);
      if (negative_check($row->gap_npl_hihln) == -1) {
        $spreadsheet->getActiveSheet(0)->getStyle("AJ" . $i)->applyFromArray($styleFontColor1);
      }
      $i++;
      $a++;
    }
    $last = $i - 1;
    $last_a = $a - 1;
    if ($last_a == intval($hk->num_rows())) {
      $spreadsheet->getActiveSheet(0)->getStyle("A" . $last . ":" . "AJ" . $last)->applyFromArray($styleArray1);
    }
    if (negative_check($row->gap_current_hihl) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("V" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("W" . $last, $row->gap_lancar_hihl);
    if (negative_check($row->gap_lancar_hihl) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("W" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("X" . $last, $row->gap_dpk_hihl);
    if (negative_check($row->gap_dpk_hihl) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("X" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("Y" . $last, $row->gap_dpk_dpk_hihl);
    if (negative_check($row->gap_dpk_dpk_hihl) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("Y" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("Z" . $last, $row->gap_npl_hihl);
    if (negative_check($row->gap_npl_hihl) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("Z" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AA" . $last, $row->rasio_bucket_0_hln);
    if (negative_check($row->rasio_bucket_0_hln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AA" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AB" . $last, $row->rasio_bucket_1_hln);
    if (negative_check($row->rasio_bucket_1_hln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AB" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AC" . $last, $row->rasio_bucket_2_hln);
    if (negative_check($row->rasio_bucket_2_hln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AC" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AD" . $last, $row->rasio_bucket_3_hln);
    if (negative_check($row->rasio_bucket_3_hln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AD" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AE" . $last, $row->rasio_bucket_npl_hln);
    if (negative_check($row->rasio_bucket_npl_hln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AE" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AF" . $last, $row->gap_current_hihln);
    if (negative_check($row->gap_current_hihln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AF" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AG" . $last, $row->gap_lancar_hihln);
    if (negative_check($row->gap_lancar_hihln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AG" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AH" . $last, $row->gap_dpk_hihln);
    if (negative_check($row->gap_dpk_hihln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AH" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AI" . $last, $row->gap_dpk_dpk_hihln);
    if (negative_check($row->gap_dpk_dpk_hihln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AI" . $last)->applyFromArray($styleFontColor1);
    }
    $spreadsheet->setActiveSheetIndex(0)->setCellValue("AJ" . $last, $row->gap_npl_hihln);
    if (negative_check($row->gap_npl_hihln) == -1) {
      $spreadsheet->getActiveSheet(0)->getStyle("AJ" . $last)->applyFromArray($styleFontColor1);
    }

    $spreadsheet->getActiveSheet(0)->getStyle('A5:AJ7')->applyFromArray($styleColor1);
    $spreadsheet->getActiveSheet(0)->getStyle('A5:AJ' . $i)->applyFromArray($styleBorder);
    $spreadsheet->getActiveSheet(0)->getStyle('A1:AJ' . $last)->getAlignment()->setHorizontal('center');
    $writer = new Xlsx($spreadsheet);

    $filename = 'Export Data Report Collection Daily';

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
  }
}
