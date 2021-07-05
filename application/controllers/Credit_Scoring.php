<?php
defined('BASEPATH') or exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Credit_Scoring extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_credit_scoring');
    }
    function get_data()
    {
        $list = $this->Model_credit_scoring->get_datatables();
        // var_dump($list);
        // die;
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            if ($field->rekomendasi == 'RISIKO RENDAH/LAYAK') {
                $rekomendasi = '<div class="btn btn-outline-primary btn-sm">RISIKO RENDAH/LAYAK</div>';
            } elseif ($field->rekomendasi == 'RISIKO TINGGI/KURANG LAYAK') {
                $rekomendasi = '<div class="btn btn-outline-warning btn-sm">RISIKO TINGGI/KURANG LAYAK</div>';
            } elseif ($field->rekomendasi == 'RISIKO MODERAT/CUKUP LAYAK') {
                $rekomendasi = '<div class="btn btn-outline-success btn-sm">RISIKO MODERAT/CUKUP LAYAK</div>';
            } elseif ($field->rekomendasi == 'RISIKO TINGGI/TIDAK LAYAK') {
                $rekomendasi = '<div class="btn btn-outline-danger btn-sm">RISIKO SANGAT TINGGI/TIDAK LAYAK</div>';
            } else {
                $rekomendasi = '<div class="btn btn-outline-info btn-sm"><i class="fas fa-info"></i> Menunggu scoring</div>';
            }
            $no++;
            $row = array();
            $row[] = $field->tgl_transaksi;
            $row[] = $field->nomor_aplikasi;
            $row[] = $field->nama_debitur;
            $row[] = $field->id_area;
            $row[] = $field->id_cabang;
            $row[] = $field->nama_so;
            $row[] = $field->nama_ao;
            $row[] = $field->kolektabilitas;
            $row[] = $rekomendasi;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Model_credit_scoring->count_all(),
            "recordsFiltered" => $this->Model_credit_scoring->count_filtered(),
            "data" => $data,
        );
        // var_dump($output);
        // die;
        echo json_encode($output);
    }

    public function export()
    {
        // $dari_tgl1 = $this->input->post('awal');
        // $dari_tgl          =   date('Y-m-d', strtotime($dari_tgl1));
        // $sampai_tgl1 = $this->input->post('akhir');
        // $sampai_tgl          =   date('Y-m-d', strtotime($sampai_tgl1));
        $area = $this->input->post('select_area');
        $cabang = $this->input->post('select_cabang');
        $awal          =  date('Y-m-d', strtotime($this->input->post('awal')));
        $akhir          = date('Y-m-d', strtotime($this->input->post('akhir')));

        $query = "SELECT * FROM view_cs_scoring WHERE tgl_transaksi BETWEEN '$awal' AND '$akhir' ";
        $data = $this->db->query($query)->result();

        var_dump($data);
        die;
        $spreadsheet = new Spreadsheet();
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'No')
            ->setCellValue('B1', 'TGL TRANSAKSI')
            ->setCellValue('C1', 'NAMA DEBITUR');
        // ->setCellValue('D1', 'KANTOR')
        // ->setCellValue('E1', 'KREDIT CHECKING')
        // ->setCellValue('F1', 'PENDIDIKAN')
        // ->setCellValue('G1', 'USIA')
        // ->setCellValue('H1', 'JUMLAH TANGGUNGAN')
        // ->setCellValue('I1', 'JUMLAH PINJAMAN BANK LAIN')
        // ->setCellValue('J1', 'JUMLAH PENDAPATAN')
        // ->setCellValue('K1', 'JUMLAH BAKI DEBET TEMPAT LAIN')
        // ->setCellValue('L1', 'ANGSURAN TEMPAT LAIN')
        // ->setCellValue('M1', 'IDIR')
        // ->setCellValue('N1', 'DSR')
        // ->setCellValue('O1', 'COLLATERAL')
        // ->setCellValue('P1', 'LTV')
        // ->setCellValue('Q1', 'PEMILIK JAMINAN')
        // ->setCellValue('R1', 'TENOR PENGAJUAN')
        // ->setCellValue('S1', 'LAMA USAHA')
        // ->setCellValue('T1', 'LOKASI JAMINAN')
        // ->setCellValue('U1', 'JENIS SERTIFIKAT')
        // ->setCellValue('V1', 'BUKTI KAPASITAS')
        // ->setCellValue('W1', 'RASIO KAPASITAS')
        // ->setCellValue('X1', 'HASIL')
        // ->setCellValue('W1', 'REKOMENDASI CA')
        // ->setCellValue('Z1', 'REKOMENDASI PC')
        // ->setCellValue('AA1', 'CAA TERAKHIR')
        // ->setCellValue('AB1', 'STATUS')
        // ->setCellValue('AC1', 'TGL PENCAIRAN');
        $kolom = 2;
        $nomor = 1;
        foreach ($data as $hasil) {
            // if ($hasil->status_hm === '1') {
            //     $hasil->status_hm = 'Approved';
            // } else if ($hasil->status_hm === '2') {
            //     $hasil->status_hm = 'Reject';
            // } else {
            //     $hasil->status_hm = 'Waiting';
            // }
            $sheet = $spreadsheet->getActiveSheet()
                ->setCellValue('A' . $kolom, $nomor)
                ->setCellValue('B' . $kolom, $hasil->tgl_transaksi)
                ->setCellValue('C' . $kolom, $hasil->nama_debitur);
            // ->setCellValue('D', $kolom, 'KANTOR')
            // ->setCellValue('E', $kolom, 'KREDIT CHECKING')
            // ->setCellValue('F', $kolom, 'PENDIDIKAN')
            // ->setCellValue('G', $kolom, 'USIA')
            // ->setCellValue('H', $kolom, 'JUMLAH TANGGUNGAN')
            // ->setCellValue('I', $kolom, 'JUMLAH PINJAMAN BANK LAIN')
            // ->setCellValue('J', $kolom, 'JUMLAH PENDAPATAN')
            // ->setCellValue('K', $kolom, 'JUMLAH BAKI DEBET TEMPAT LAIN')
            // ->setCellValue('L', $kolom, 'ANGSURAN TEMPAT LAIN')
            // ->setCellValue('M', $kolom, 'IDIR')
            // ->setCellValue('N', $kolom, 'DSR')
            // ->setCellValue('O', $kolom, 'COLLATERAL')
            // ->setCellValue('P', $kolom, 'LTV')
            // ->setCellValue('Q', $kolom, 'PEMILIK JAMINAN')
            // ->setCellValue('R', $kolom, 'TENOR PENGAJUAN')
            // ->setCellValue('S', $kolom, 'LAMA USAHA')
            // ->setCellValue('T', $kolom, 'LOKASI JAMINAN')
            // ->setCellValue('U', $kolom, 'JENIS SERTIFIKAT')
            // ->setCellValue('V', $kolom, 'BUKTI KAPASITAS')
            // ->setCellValue('W', $kolom, 'RASIO KAPASITAS')
            // ->setCellValue('X', $kolom, 'HASIL')
            // ->setCellValue('W', $kolom, 'REKOMENDASI CA')
            // ->setCellValue('Z', $kolom, 'REKOMENDASI PC')
            // ->setCellValue('AA', $kolom, 'CAA TERAKHIR')
            // ->setCellValue('AB', $kolom, 'STATUS')
            // ->setCellValue('AC', $kolom, 'TGL PENCAIRAN');
            // ->setCellValue('A' . $kolom, $nomor)
            // ->setCellValue('B' . $kolom, date('j F Y H:i:s', strtotime($hasil->tgl_pengajuan)))
            // ->setCellValue('C' . $kolom, $hasil->nomor_so)
            // ->setCellValue('D' . $kolom, $hasil->nama_debitur)
            // ->setCellValue('E' . $kolom, $hasil->plafon)
            // ->setCellValue('F' . $kolom, $hasil->tenor)
            // ->setCellValue('G' . $kolom, $hasil->nama_so)
            // ->setCellValue('H' . $kolom, $hasil->nama_marketing)
            // ->setCellValue('I' . $kolom, $hasil->asal_data)
            // ->setCellValue('J' . $kolom, $hasil->jenis_pinjaman)
            // ->setCellValue('K' . $kolom, $hasil->produk)
            // ->setCellValue('L' . $kolom, $hasil->status_hm)
            // ->setCellValue('M' . $kolom, $hasil->catatan_hm)
            // ->setCellValue('N' . $kolom, $hasil->area)
            // ->setCellValue('O' . $kolom, $hasil->cabang);

            $kolom++;
            $nomor++;
        }

        $writer = new Xlsx($spreadsheet);

        $filename = 'Export Data CREDIT SCORING SEFIN';

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }
}
