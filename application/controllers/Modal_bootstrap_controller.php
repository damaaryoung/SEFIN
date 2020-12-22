<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
// require 'vendor/autoload.php';
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Font;

// require APPPATH .'/vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/Spreadsheet.php';

class Modal_bootstrap_controller extends MY_Controller
{

    public static $url_string = "http://103.234.254.186/riskcan/";
    function __construct()
    {
        parent::__construct();
        $this->load->library('Curl');
        // $this->load->library('PHPExcel');
        // $this->load->library('PHPExcel/IOFactory');
        $this->load->model('model_dashboard_collection');
    }
	function modal_area_npl_console()
    {   $url_npl_area = self::$url_string."dashboard/kredit/kredit_controller/npl_console_area";
        $post_npl_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_npl_area'] = $Curl->get_rest_api($url_npl_area,$post_npl_area);
        $response = $this->load->view('master/collection/modal/modal_area_npl_console',$data,TRUE);
    	echo $response;
    }

    function modal_cabang_npl_console()
    {   $url_npl_cabang = self::$url_string."dashboard/kredit/kredit_controller/npl_console_cabang";
        $post_npl_cabang = array(
        	'api'=>'Y',
        	'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
    		);
        $Curl = new Curl();
        $data['output_npl_cabang'] = $Curl->get_rest_api($url_npl_cabang,$post_npl_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_npl_console',$data,TRUE);
    	echo $response;
    }

    function modal_area_0ns_console()
    {   $url_zero_ns_area = self::$url_string."dashboard/kredit/kreditrisk_controller/ns_console_area";
        $post_zero_ns_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_zero_ns_area'] = $Curl->get_rest_api($url_zero_ns_area,$post_zero_ns_area);
        $response = $this->load->view('master/collection/modal/modal_area_0ns_console',$data,TRUE);
        echo $response;
    }

    function modal_cabang_0ns_console()
    {   $url_0ns_cabang = self::$url_string."dashboard/kredit/kreditrisk_controller/ns_console_cabang";
        $post_0ns_cabang = array(
            'api'=>'Y',
            'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
            );
        $Curl = new Curl();
        $data['output_zero_ns_cabang'] = $Curl->get_rest_api($url_0ns_cabang,$post_0ns_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_0ns_console',$data,TRUE);
        echo $response;
    }

    function modal_area_bucket0_all_console()
    {   $url_bucket_0_all_area = self::$url_string."dashboard/kredit/kredit_controller/bucket_nol_console_area";
        $post_bucket_0_all_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_bucket0_all_area'] = $Curl->get_rest_api($url_bucket_0_all_area,$post_bucket_0_all_area);
        $response = $this->load->view('master/collection/modal/modal_area_bucket0_all_console',$data,TRUE);
        echo $response;
    }

    function modal_cabang_bucket0_all_console()
    {   $url_bucket0_all_cabang = self::$url_string."dashboard/kredit/kredit_controller/bucket_nol_console_cabang";
        $post_bucket0_all_cabang = array(
            'api'=>'Y',
            'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
            );
        $Curl = new Curl();
        $data['output_bucket0_all_cabang'] = $Curl->get_rest_api($url_bucket0_all_cabang,$post_bucket0_all_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_bucket0_all_console',$data,TRUE);
        echo $response;
    }

    function modal_area_fid_compre_console()
    {   $url_fid_compre_area = self::$url_string."dashboard/kredit/kreditrisk_controller/fid_compre_console_area";
        $post_fid_compre_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_fid_compre_area'] = $Curl->get_rest_api($url_fid_compre_area,$post_fid_compre_area);
        $response = $this->load->view('master/collection/modal/modal_area_fid_compre_console',$data,TRUE);
        echo $response;
    }

    function modal_cabang_fid_compre_console()
    {   $url_fid_compre_cabang = self::$url_string."dashboard/kredit/kreditrisk_controller/fid_compre_console_cabang";
        $post_fid_compre_cabang = array(
            'api'=>'Y',
            'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
            );
        $Curl = new Curl();
        $data['output_fid_compre_cabang'] = $Curl->get_rest_api($url_fid_compre_cabang,$post_fid_compre_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_fid_compre_console',$data,TRUE);
        echo $response;
    }

    function modal_area_fid_ever_console()
    {   $url_fid_ever_area = self::$url_string."dashboard/kredit/kreditrisk_controller/fid_ever_06_console_area";
        $post_fid_ever_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_fid_ever_area'] = $Curl->get_rest_api($url_fid_ever_area,$post_fid_ever_area);
        $response = $this->load->view('master/collection/modal/modal_area_fid_ever_console',$data,TRUE);
        echo $response;
    }

    function modal_cabang_fid_ever_console()
    {   $url_fid_ever_cabang = self::$url_string."dashboard/kredit/kreditrisk_controller/fid_ever_06_console_cabang";
        $post_fid_ever_cabang = array(
            'api'=>'Y',
            'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
            );
        $Curl = new Curl();
        $data['output_fid_ever_cabang'] = $Curl->get_rest_api($url_fid_ever_cabang,$post_fid_ever_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_fid_ever_console',$data,TRUE);
        echo $response;
    }

    function modal_area_current_ratio_console()
    {   $url_current_ratio_area = self::$url_string."dashboard/kredit/kredit_controller/current_rasio_console_area";
        $post_current_ratio_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_current_ratio_area'] = $Curl->get_rest_api($url_current_ratio_area,$post_current_ratio_area);
        $response = $this->load->view('master/collection/modal/modal_area_current_ratio_console',$data,TRUE);
        echo $response;
    }

    function modal_cabang_current_ratio_console()
    {   $url_current_ratio_cabang = self::$url_string."dashboard/kredit/kredit_controller/current_rasio_console_cabang";
        $post_current_ratio_cabang = array(
            'api'=>'Y',
            'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
            );
        $Curl = new Curl();
        $data['output_current_ratio_cabang'] = $Curl->get_rest_api($url_current_ratio_cabang,$post_current_ratio_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_current_ratio_console',$data,TRUE);
        echo $response;
    }

    function modal_area_deliquency_console()
    {   $url_deliquency_area = self::$url_string."dashboard/kredit/kreditrisk_controller/delinquensy_console_area";
        $post_deliquency_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_deliquency_area'] = $Curl->get_rest_api($url_deliquency_area,$post_deliquency_area);
        $response = $this->load->view('master/collection/modal/modal_area_deliquency_console',$data,TRUE);
        echo $response;
    }

    function modal_cabang_deliquency_console()
    {   $url_deliquency_cabang = self::$url_string."dashboard/kredit/kreditrisk_controller/delinquensy_console_cabang";
        $post_deliquency_cabang = array(
            'api'=>'Y',
            'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
            );
        $Curl = new Curl();
        $data['output_deliquency_cabang'] = $Curl->get_rest_api($url_deliquency_cabang,$post_deliquency_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_deliquency_console',$data,TRUE);
        echo $response;
    }

    function modal_area_bucket_roll_console()
    {   $url_bucket_roll_area = self::$url_string."dashboard/kredit/kreditrisk_controller/roll_console_area";
        $post_bucket_roll_area = array(
            'api'=>'Y',
            'tgl'=>$this->input->post('tgl'));
        $Curl = new Curl();
        $data['output_bucket_roll_area'] = $Curl->get_rest_api($url_bucket_roll_area,$post_bucket_roll_area);
        $response = $this->load->view('master/collection/modal/modal_area_roll_console',$data,TRUE);
        echo $response;
    }

    function modal_cabang_bucket_roll_console()
    {   
        $url_bucket_roll_cabang = self::$url_string."dashboard/kredit/kreditrisk_controller/roll_console_cabang";
        $post_bucket_roll_cabang = array(
            'api'=>'Y',
            'kode_area'=>$this->input->post('kode_area'),
            'tgl'=>$this->input->post('tgl')
            );
        $Curl = new Curl();
        $data['output_bucket_roll_cabang'] = $Curl->get_rest_api($url_bucket_roll_cabang,$post_bucket_roll_cabang);
        $response = $this->load->view('master/collection/modal/modal_cabang_roll_console',$data,TRUE);
        echo $response;
    }

    function modal_list_npl_console(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_npl_console"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_npl_console",
                        "type": "POST",
                        "data":{
                            "tgl": date
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_npl_console',$data);
        
    }

    function ajax_list_npl_console(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_npl_console_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_npl_console_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function npl_console_export(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['file_export'] = "NPL Konsolidasi ".date('Y-m-d');
        $data['npl_console'] = $this->model_dashboard_collection->get_npl_console_list($tgl);
        $this->load->view('master/collection/export/export_npl_console', $data);
    }

    function modal_list_npl_console_area(){
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');
        // $data['npl_console_area'] = $this->model_dashboard_collection->get_npl_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_area = "'.$kode_area.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_npl_console_area",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_area": kode_area
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_npl_console_area',$data);
        
    }

    function ajax_list_npl_console_area(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_npl_console_area_list(intval($start), intval($length),$search['value'], $tgl,$kode_area);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_npl_console_area_list($search['value'],$tgl,$kode_area);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function npl_console_export_area(){
        $tgl = $this->input->post('data_tgl');
        $kode_area = $this->input->post('data_kode_area');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['npl_console'] = $this->model_dashboard_collection->get_npl_console_area_list($tgl,$kode_area);
        $data['file_export'] = "NPL AREA ".$kode_area." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_npl_console', $data);
    }

    function modal_list_npl_console_cabang(){
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');
        // $data['npl_console_area'] = $this->model_dashboard_collection->get_npl_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_cabang = "'.$kode_cabang.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_npl_console_cabang",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_cabang": kode_cabang
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_npl_console_cabang',$data);
        
    }

    function ajax_list_npl_console_cabang(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_npl_console_cabang_list(intval($start), intval($length),$search['value'], $tgl,$kode_cabang);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_npl_console_cabang_list($search['value'],$tgl,$kode_cabang);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function npl_console_export_cabang(){
        $tgl = $this->input->post('data_tgl');
        $kode_cabang = $this->input->post('data_kode_cabang');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['npl_console'] = $this->model_dashboard_collection->get_npl_console_cabang_list($tgl,$kode_cabang);
        $data['file_export'] = "NPL CABANG ".$kode_cabang." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_npl_console', $data);
    }

    function modal_list_0ns_console(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_bucket0_ns_console"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_0ns_console",
                        "type": "POST",
                        "data":{
                            "tgl": date
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_0ns_console',$data);
        
    }

    function ajax_list_0ns_console(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_0ns_console_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_0ns_console_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_0ns_console_export(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['bucket_0ns_console'] = $this->model_dashboard_collection->get_0ns_console_list($tgl);
        $data['file_export'] = "BUCKET 0 NS KONSOLIDASI ".date('Y-m-d');
        $this->load->view('master/collection/export/export_0ns_console', $data);
    }

    function modal_list_0ns_console_area(){
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');
        // $data['0ns_console_area'] = $this->model_dashboard_collection->get_0ns_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_area = "'.$kode_area.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_0ns_console_area",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_area": kode_area
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_0ns_console_area',$data);
        
    }

    function ajax_list_0ns_console_area(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_0ns_console_area_list(intval($start), intval($length),$search['value'], $tgl,$kode_area);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_0ns_console_area_list($search['value'],$tgl,$kode_area);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_0ns_console_export_area(){
        $tgl = $this->input->post('data_tgl');
        $kode_area = $this->input->post('data_kode_area');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['bucket_0ns_console'] = $this->model_dashboard_collection->get_0ns_console_area_list($tgl,$kode_area);
        $data['file_export'] = "BUCKET 0 NS AREA ".$kode_area." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_0ns_console', $data);
    }

    function modal_list_0ns_console_cabang(){
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');
        // $data['npl_console_area'] = $this->model_dashboard_collection->get_npl_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_cabang = "'.$kode_cabang.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_0ns_console_cabang",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_cabang": kode_cabang
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_0ns_console_cabang',$data);
        
    }

    function ajax_list_0ns_console_cabang(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_0ns_console_cabang_list(intval($start), intval($length),$search['value'], $tgl,$kode_cabang);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_0ns_console_cabang_list($search['value'],$tgl,$kode_cabang);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_0ns_console_export_cabang(){
        $tgl = $this->input->post('data_tgl');
        $kode_cabang = $this->input->post('data_kode_cabang');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['bucket_0ns_console'] = $this->model_dashboard_collection->get_0ns_console_cabang_list($tgl,$kode_cabang);
        $data['file_export'] = "BUCKET 0 NS CABANG ".$kode_cabang." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_0ns_console', $data);
    }

    function modal_list_0_all_console(){
        $tgl = $this->input->post('tgl');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $data['tgl'] = "CURDATE()";
        }else {
            $data['tgl'] = "DATE('$tgl')";
        }
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_0_all_console"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_0_all_console",
                        "type": "POST",
                        "data":{
                            "tgl": date
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $data['result_console'] = $this->model_dashboard_collection->bucket_nol_console($data['tgl']);
        $data['result_area'] = $this->model_dashboard_collection->bucket_nol_console_area($data['tgl']);
        $data['result_cabang'] = $this->model_dashboard_collection->bucket_nol_console_cabang($data['tgl']);
        $this->load->view('master/collection/modal/modal_list_0_all_console',$data);
        
    }

    function ajax_list_0_all_console(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_0_all_console_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_0_all_console_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_0_all_console_export(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $result_console = $this->model_dashboard_collection->bucket_nol_console($tgl);
        $result_area = $this->model_dashboard_collection->bucket_nol_console_area($tgl);
        $result_cabang = $this->model_dashboard_collection->bucket_nol_console_cabang($tgl);
        $bucket_0_all_console = $this->model_dashboard_collection->get_0_all_console_list($tgl);
        
        $spreadsheet = new Spreadsheet();
        $spreadsheet->getProperties()->setCreator('Edwin Budiyanto Sunardi')->setLastModifiedBy('Edwin Budiyanto Sunardi')->setTitle('Microsoft Office 365 XLSX Test Document')->setSubject('IT MAN')->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')->setKeywords('office 365 openxml php')->setCategory('Test result file');
        // Add some data
        $spreadsheet->getActiveSheet(0)->setTitle('List Bucket 0 ALL');
        $spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'PT. BPR Kredit Mandiri Indonesia Pusat')
            ->setCellValue('A2', 'Transaksi Bucket Zero SHM NEW')
            ->setCellValue('A3', 'Area Kerja: * - Konsolidasi')
            ->setCellValue('A5','No')
            ->setCellValue('B5','Area Kerja')
            ->setCellValue('C5','No. Rekening')
            ->setCellValue('D5','Nama Nasabah')
            ->setCellValue('E5','Tanggal Realisasi')
            ->setCellValue('F5','Kolek BI')
            ->setCellValue('G5','FT Hari')
            ->setCellValue('H5','FT Angsuran')
            ->setCellValue('I5','Plafon')
            ->setCellValue('J5','Tenor')
            ->setCellValue('K5','Baki Debet')
            ->setCellValue('L5','Angsuran')
            ->setCellValue('M5','Asal Data')
            ->setCellValue('N5','Tujuan Penggunaan')
            ->setCellValue('O5','Produk')
            ->setCellValue('P5','Segmentasi')
            ->setCellValue('Q5','Status');

        $i = 6;
        $a = 1;

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

        $styleColor1 = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => [
                    'rgb'=> '66B2FF'
                ]
            ]
        ];

        $styleColor2 = [
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'color' => [
                    'rgb'=> 'E0E0E0'
                ]
            ]
        ];
        foreach($bucket_0_all_console->result() as $row){
            $spreadsheet->getActiveSheet()->getStyle('A'.$i.':Q'.$i)->applyFromArray($styleBorder);
            if($i % 2 == 0){
                $spreadsheet->getActiveSheet()->getStyle('A'.$i.':Q'.$i)->applyFromArray($styleColor1);
            }else{
                $spreadsheet->getActiveSheet()->getStyle('A'.$i.':Q'.$i)->applyFromArray($styleColor2);
            }
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('A'. $i, $a);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('B'. $i, $row->nama_area_kerja);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('C'. $i, $row->no_rekening);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('D'. $i, $row->nama_nasabah);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('E'. $i, date('d-m-Y', strtotime($row->tgl_realisasi)));
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('F'. $i, $row->kolek_bi);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('G'. $i, $row->ft_hari);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('H'. $i, $row->ft_angsuran);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('I'. $i, number_format($row->jml_pinjaman,0,',','.'));
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('J'. $i, $row->jml_angsuran);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('K'. $i, number_format($row->baki_debet,0,',','.'));
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('L'. $i, number_format($row->jumlah_angsuran,0,',','.'));
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('M'. $i, $row->asal_data);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('N'. $i,$row->tujuan);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('O'. $i, $row->produk);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('P'. $i, $row->segmentasi);
            $spreadsheet->setActiveSheetIndex(0)->setCellValue('Q'. $i,$row->status);

            $i++;
            $a++;
        }

        $spreadsheet->getActiveSheet(0)->getStyle('A1:A3')->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet(0)->getStyle('A5:Q5')->getFont()->setSize(15);
        $spreadsheet->getActiveSheet(0)->getStyle('A5:Q5')->getFont()->setBold(true);

        $spreadsheet->createSheet();
        $spreadsheet->setActiveSheetIndex(1)->setTitle('Result');
        $spreadsheet->setActiveSheetIndex(1)->setCellValue('A3','Hasil Konsolidasi')
            ->setCellValue('A5','No')
            ->setCellValue('B5','Console')
            ->setCellValue('C5','Total BD')
            ->setCellValue('D5', 'BD Current')
            ->setCellValue('E5', 'BD Lancar')
            ->setCellValue('F5', 'BD DPK')
            ->setCellValue('G5', 'BD DPK+')
            ->setCellValue('H5', 'BD NPL')
            ->setCellValue('I5', '% CRN')
            ->setCellValue('J5', '% LCR')
            ->setCellValue('K5', '% DPK')
            ->setCellValue('L5', '% DPK+')
            ->setCellValue('M5', '% NPL');

        $i_result_console = 6;
        $a_result_console = 1;
        foreach($result_console->result() as $row_console){
            $spreadsheet->getActiveSheet()->getStyle('A5:M'.$i_result_console)->applyFromArray($styleBorder);
            $spreadsheet->getActiveSheet()->getStyle('A'.$i_result_console.':M'.$i_result_console)->applyFromArray($styleColor1);
            $total_bd = $row_console->bd_bucket_0 + $row_console->bd_bucket_1 + $row_console->bd_bucket_2 + $row_console->bd_bucket_3 + $row_console->bd_npl;
            $spreadsheet->setActiveSheetIndex(1)->setCellValue('A'.$i_result_console,$a_result_console)
            ->setCellValue('B'.$i_result_console,"Konsolidasi")
            ->setCellValue('C'.$i_result_console,number_format(intval($total_bd)))
            ->setCellValue('D'.$i_result_console,number_format(intval($row_console->bd_bucket_0)))
            ->setCellValue('E'.$i_result_console,number_format(intval($row_console->bd_bucket_1)))
            ->setCellValue('F'.$i_result_console,number_format(intval($row_console->bd_bucket_2)))
            ->setCellValue('G'.$i_result_console,number_format(intval($row_console->bd_bucket_3)))
            ->setCellValue('H'.$i_result_console,number_format(intval($row_console->bd_npl)))
            ->setCellValue('I'.$i_result_console,$row_console->rasio_bucket_0)
            ->setCellValue('J'.$i_result_console,$row_console->rasio_bucket_1)
            ->setCellValue('K'.$i_result_console,$row_console->rasio_bucket_2)
            ->setCellValue('L'.$i_result_console,$row_console->rasio_bucket_3)
            ->setCellValue('M'.$i_result_console,$row_console->rasio_npl);
            $i_result_console++;
            $a_result_console++;
        }
        $spreadsheet->getActiveSheet(1)->getStyle('A3')->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet(1)->getStyle('A5:Q5')->getFont()->setSize(15);
        $spreadsheet->getActiveSheet(1)->getStyle('A5:Q5')->getFont()->setBold(true);


        $title_area = $i_result_console + 3;
        $i_th_result_area = $i_result_console + 5;
        $i_result_area = $i_result_console + 6;
        $a_result_area = 1;
        $spreadsheet->setActiveSheetIndex(1)->setCellValue('A'.intval($title_area),'Hasil per area')
            ->setCellValue('A'.intval($i_th_result_area), 'No')
            ->setCellValue('B'.intval($i_th_result_area), 'Area')
            ->setCellValue('C'.intval($i_th_result_area),'Total BD')
            ->setCellValue('D'.intval($i_th_result_area), 'BD Current')
            ->setCellValue('E'.intval($i_th_result_area), 'BD Lancar')
            ->setCellValue('F'.intval($i_th_result_area), 'BD DPK')
            ->setCellValue('G'.intval($i_th_result_area), 'BD DPK+')
            ->setCellValue('H'.intval($i_th_result_area), 'BD NPL')
            ->setCellValue('I'.intval($i_th_result_area), '% CRN')
            ->setCellValue('J'.intval($i_th_result_area), '% LCR')
            ->setCellValue('K'.intval($i_th_result_area), '% DPK')
            ->setCellValue('L'.intval($i_th_result_area), '% DPK+')
            ->setCellValue('M'.intval($i_th_result_area), '% NPL');
        foreach($result_area->result() as $row_area){
            $spreadsheet->getActiveSheet()->getStyle('A'.$i_th_result_area.':M'.$i_result_area)->applyFromArray($styleBorder);
            if($i_result_area % 2 == 0){
                $spreadsheet->getActiveSheet()->getStyle('A'.$i_result_area.':M'.$i_result_area)->applyFromArray($styleColor1);
            }else{
                $spreadsheet->getActiveSheet()->getStyle('A'.$i_result_area.':M'.$i_result_area)->applyFromArray($styleColor2);
            }
            $spreadsheet->setActiveSheetIndex(1)->setCellValue('A'.$i_result_area,$a_result_area)
            ->setCellValue('B'.$i_result_area,$row_area->kode_area)
            ->setCellValue('C'.$i_result_area,number_format(intval($total_bd)))
            ->setCellValue('D'.$i_result_area,number_format(intval($row_area->bd_bucket_0)))
            ->setCellValue('E'.$i_result_area,number_format(intval($row_area->bd_bucket_1)))
            ->setCellValue('F'.$i_result_area,number_format(intval($row_area->bd_bucket_2)))
            ->setCellValue('G'.$i_result_area,number_format(intval($row_area->bd_bucket_3)))
            ->setCellValue('H'.$i_result_area,number_format(intval($row_area->bd_npl)))
            ->setCellValue('I'.$i_result_area,$row_area->rasio_bucket_0)
            ->setCellValue('J'.$i_result_area,$row_area->rasio_bucket_1)
            ->setCellValue('K'.$i_result_area,$row_area->rasio_bucket_2)
            ->setCellValue('L'.$i_result_area,$row_area->rasio_bucket_3)
            ->setCellValue('M'.$i_result_area,$row_area->rasio_npl);
            $i_result_area++;
            $a_result_area++;
        }

        $spreadsheet->getActiveSheet(1)->getStyle('A'.intval($title_area))->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet(1)->getStyle('A'.intval($i_th_result_area).':Q'.intval($i_th_result_area))->getFont()->setSize(15);
        $spreadsheet->getActiveSheet(1)->getStyle('A'.intval($i_th_result_area).':Q'.intval($i_th_result_area))->getFont()->setBold(true);

        $title_cabang = $i_result_area + 3;
        $i_th_result_cabang = $i_result_area + 5;
        $i_result_cabang = $i_result_area + 6;
        $a_result_cabang = 1;

        $spreadsheet->setActiveSheetIndex(1)->setCellValue('A'.intval($title_cabang),'Hasil per cabang')
        ->setCellValue('A'.intval($i_th_result_cabang),'No')
        ->setCellValue('B'.intval($i_th_result_cabang),'Kantor')
        ->setCellValue('C'.intval($i_th_result_cabang),'Total BD')
        ->setCellValue('D'.intval($i_th_result_cabang), 'BD Current')
        ->setCellValue('E'.intval($i_th_result_cabang), 'BD Lancar')
        ->setCellValue('F'.intval($i_th_result_cabang), 'BD DPK')
        ->setCellValue('G'.intval($i_th_result_cabang), 'BD DPK+')
        ->setCellValue('H'.intval($i_th_result_cabang), 'BD NPL')
        ->setCellValue('I'.intval($i_th_result_cabang), '% CRN')
        ->setCellValue('J'.intval($i_th_result_cabang), '% LCR')
        ->setCellValue('K'.intval($i_th_result_cabang), '% DPK')
        ->setCellValue('L'.intval($i_th_result_cabang), '% DPK+')
        ->setCellValue('M'.intval($i_th_result_cabang), '% NPL');
        foreach($result_cabang->result() as $row_cabang){
            $spreadsheet->getActiveSheet()->getStyle('A'.$i_th_result_cabang.':M'.$i_result_cabang)->applyFromArray($styleBorder);
            if($i_result_cabang % 2 == 0){
                $spreadsheet->getActiveSheet()->getStyle('A'.$i_result_cabang.':M'.$i_result_cabang)->applyFromArray($styleColor1);
            }else{
                $spreadsheet->getActiveSheet()->getStyle('A'.$i_result_cabang.':M'.$i_result_cabang)->applyFromArray($styleColor2);
            }
            $total_bd = $row_cabang->bd_bucket_0 + $row_cabang->bd_bucket_1 + $row_cabang->bd_bucket_2 + $row_cabang->bd_bucket_3 + $row_cabang->bd_npl;
            $spreadsheet->setActiveSheetIndex(1)->setCellValue('A'.$i_result_cabang,$a_result_cabang)
            ->setCellValue('B'.$i_result_cabang,$row_cabang->nama_area_kerja)
            ->setCellValue('C'.$i_result_cabang,number_format(intval($total_bd)))
            ->setCellValue('D'.$i_result_cabang,number_format(intval($row_cabang->bd_bucket_0)))
            ->setCellValue('E'.$i_result_cabang,number_format(intval($row_cabang->bd_bucket_1)))
            ->setCellValue('F'.$i_result_cabang,number_format(intval($row_cabang->bd_bucket_2)))
            ->setCellValue('G'.$i_result_cabang,number_format(intval($row_cabang->bd_bucket_3)))
            ->setCellValue('H'.$i_result_cabang,number_format(intval($row_cabang->bd_npl)))
            ->setCellValue('I'.$i_result_cabang,$row_cabang->rasio_bucket_0)
            ->setCellValue('J'.$i_result_cabang,$row_cabang->rasio_bucket_1)
            ->setCellValue('K'.$i_result_cabang,$row_cabang->rasio_bucket_2)
            ->setCellValue('L'.$i_result_cabang,$row_cabang->rasio_bucket_3)
            ->setCellValue('M'.$i_result_cabang,$row_cabang->rasio_npl);
            $i_result_cabang++;
            $a_result_cabang++;
        }

        $spreadsheet->getActiveSheet(1)->getStyle('A'.intval($title_cabang))->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet(1)->getStyle('A'.intval($i_th_result_cabang).':Q'.intval($i_th_result_cabang))->getFont()->setSize(15);
        $spreadsheet->getActiveSheet(1)->getStyle('A'.intval($i_th_result_cabang).':Q'.intval($i_th_result_cabang))->getFont()->setBold(true);


        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="data Bucket 0 ALL '.date('Y-m-d').'.xlsx"');
        $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save('php://output');
    }

    function modal_list_0_all_console_area(){
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');
        // $data['0_all_console_area'] = $this->model_dashboard_collection->get_0_all_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_area = "'.$kode_area.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_0_all_console_area",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_area": kode_area
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');

        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_0_all_console_area',$data);
        
    }

    function ajax_list_0_all_console_area(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_0_all_console_area_list(intval($start), intval($length),$search['value'], $tgl,$kode_area);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_0_all_console_area_list($search['value'],$tgl,$kode_area);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_0_all_console_export_area(){
        $tgl = $this->input->post('data_tgl');
        $kode_area = $this->input->post('data_kode_area');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['bucket_0_all_console'] = $this->model_dashboard_collection->get_0_all_console_area_list($tgl,$kode_area);
        $data['file_export'] = "Bucket 0 ALL AREA ".$kode_area." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_0_all_console', $data);
    }

    function modal_list_0_all_console_cabang(){
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');
        // $data['0_all_console_area'] = $this->model_dashboard_collection->get_0_all_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var buttonCommon = {
                    exportOptions: {
                        format: {
                            body: function ( data, row, column, node ) {
                                // Strip $ from salary column to make it numeric
                                return column === 5 ?
                                    data.replace( /[$,]/g, "" ) :
                                    data;
                            }
                        }
                    }
                };
                var date = "'.$tgl.'";
                var kode_cabang = "'.$kode_cabang.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_0_all_console_cabang",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_cabang": kode_cabang
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_0_all_console_cabang',$data);
        
    }

    function ajax_list_0_all_console_cabang(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_0_all_console_cabang_list(intval($start), intval($length),$search['value'], $tgl,$kode_cabang);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_0_all_console_cabang_list($search['value'],$tgl,$kode_cabang);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_0_all_console_export_cabang(){
        $tgl = $this->input->post('data_tgl');
        $kode_cabang = $this->input->post('data_kode_cabang');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['bucket_0_all_console'] = $this->model_dashboard_collection->get_0_all_console_cabang_list($tgl,$kode_cabang);
        $data['file_export'] = "DATA BUCKET 0 ALL ".$kode_cabang." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_0_all_console', $data);
    }

    function modal_list_fid_compre_console(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_fid_compre_console"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_fid_compre_console",
                        "type": "POST",
                        "data":{
                            "tgl": date
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_fid_compre_console',$data);
        
    }

    function ajax_list_fid_compre_console(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_fid_compre_console_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_fid_compre_console_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function fid_compre_console_export(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['fid_compre_console'] = $this->model_dashboard_collection->get_fid_compre_console_list($tgl);
        $data['file_export'] = "FID COMPRE KONSOLIDASI ".date('Y-m-d');
        $this->load->view('master/collection/export/export_fid_compre_console', $data);
    }

    function modal_list_fid_compre_console_area(){
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');
        // $data['fid_compre_console_area'] = $this->model_dashboard_collection->get_fid_compre_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_area = "'.$kode_area.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_fid_compre_console_area",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_area": kode_area
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_fid_compre_console_area',$data);
        
    }

    function ajax_list_fid_compre_console_area(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_fid_compre_console_area_list(intval($start), intval($length),$search['value'], $tgl,$kode_area);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_fid_compre_console_area_list($search['value'],$tgl,$kode_area);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function fid_compre_console_export_area(){
        $tgl = $this->input->post('data_tgl');
        $kode_area = $this->input->post('data_kode_area');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['fid_compre_console'] = $this->model_dashboard_collection->get_fid_compre_console_area_list($tgl,$kode_area);
        $data['file_export'] = "FID COMPRE AREA ".$kode_area." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_fid_compre_console', $data);
    }


    function modal_list_fid_compre_console_cabang(){
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');
        // $data['fid_compre_console_cabang'] = $this->model_dashboard_collection->get_fid_compre_console_cabang_list($tgl,$kode_cabang);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_cabang = "'.$kode_cabang.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_fid_compre_console_cabang",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_cabang": kode_cabang
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_fid_compre_console_cabang',$data);
        
    }

    function ajax_list_fid_compre_console_cabang(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_fid_compre_console_cabang_list(intval($start), intval($length),$search['value'], $tgl,$kode_cabang);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_fid_compre_console_cabang_list($search['value'],$tgl,$kode_cabang);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function fid_compre_console_export_cabang(){
        $tgl = $this->input->post('data_tgl');
        $kode_cabang = $this->input->post('data_kode_cabang');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['fid_compre_console'] = $this->model_dashboard_collection->get_fid_compre_console_cabang_list($tgl,$kode_cabang);
        $data['file_export'] = "FID COMPRE CABANG ".$kode_cabang." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_fid_compre_console', $data);
    }

    function modal_list_fid_ever_console(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_fid_ever_console"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_fid_ever_console",
                        "type": "POST",
                        "data":{
                            "tgl": date
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_fid_ever_console',$data);
        
    }

    function ajax_list_fid_ever_console(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_fid_ever_console_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_fid_ever_console_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function fid_ever_console_export(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['fid_ever_console'] = $this->model_dashboard_collection->get_fid_ever_console_list($tgl);
        $data['file_export'] = "FID EVER KONSOLIDASI ".date('Y-m-d');
        $this->load->view('master/collection/export/export_fid_ever_console', $data);
    }

    function modal_list_fid_ever_console_area(){
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');
        // $data['fid_ever_console_area'] = $this->model_dashboard_collection->get_fid_ever_console_area_list($tgl,$kode_area);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_area = "'.$kode_area.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_fid_ever_console_area",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_area": kode_area
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_fid_ever_console_area',$data);
        
    }

    function ajax_list_fid_ever_console_area(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_fid_ever_console_area_list(intval($start), intval($length),$search['value'], $tgl,$kode_area);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_fid_ever_console_area_list($search['value'],$tgl,$kode_area);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function fid_ever_console_export_area(){
        $tgl = $this->input->post('data_tgl');
        $kode_area = $this->input->post('data_kode_area');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['fid_ever_console'] = $this->model_dashboard_collection->get_fid_ever_console_area_list($tgl,$kode_area);
        $data['file_export'] = "FID EVER AREA ".$kode_area." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_fid_ever_console', $data);
    }

    function modal_list_fid_ever_console_cabang(){
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');
        // $data['fid_ever_console_cabang'] = $this->model_dashboard_collection->get_fid_ever_console_cabang_list($tgl,$kode_cabang);
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_cabang = "'.$kode_cabang.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_fid_ever_console_cabang",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_cabang": kode_cabang
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_fid_ever_console_cabang',$data);
        
    }

    function ajax_list_fid_ever_console_cabang(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_fid_ever_console_cabang_list(intval($start), intval($length),$search['value'], $tgl,$kode_cabang);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_fid_ever_console_cabang_list($search['value'],$tgl,$kode_cabang);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function fid_ever_console_export_cabang(){
        $tgl = $this->input->post('data_tgl');
        $kode_cabang = $this->input->post('data_kode_cabang');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['fid_ever_console'] = $this->model_dashboard_collection->get_fid_ever_console_cabang_list($tgl,$kode_cabang);
        $data['file_export'] = "FID EVER CABANG ".$kode_cabang." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_fid_ever_console', $data);
    }

    function modal_list_current_ratio_console(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date-current-ratio"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_current_ratio_console",
                        "type": "POST",
                        "data":{
                            "tgl": date
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        //$data['result'] = $this->model_dashboard_collection->get_current_ratio_console_list($tgl);
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_current_ratio_console',$data);
        
    }

    function ajax_list_current_ratio_console(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_current_ratio_console_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_current_ratio_console_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function current_ratio_console_export(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['current_ratio_console'] = $this->model_dashboard_collection->get_current_ratio_console_list($tgl);
        $data['file_export'] = "CURRENT RATIO KONSOLIDASI ".date('Y-m-d');
        $this->load->view('master/collection/export/export_current_ratio_console', $data);
    }

    function modal_list_current_ratio_console_area(){
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_area = "'.$kode_area.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_current_ratio_area",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_area": kode_area
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['result'] = $this->model_dashboard_collection->get_current_ratio_console_area_list($tgl,$kode_area);
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_current_ratio_console_area',$data);
    }

    function ajax_list_current_ratio_area(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post("kode_area");

        $get_data_console_list = $this->model_dashboard_collection->get_dt_current_ratio_console_area_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_current_ratio_console_area_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function current_ratio_console_area_export(){
        $tgl = $this->input->post('data_tgl');
        $kode_area = $this->input->post('data_kode_area');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['current_ratio_console'] = $this->model_dashboard_collection->get_current_ratio_console_area_list($tgl,$kode_area);
        $data['file_export'] = "CURRENT RATIO AREA ".$kode_area." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_current_ratio_console', $data);
    }

    function modal_list_current_ratio_console_cabang(){
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = "'.$tgl.'";
                var kode_cabang = "'.$kode_cabang.'";
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_current_ratio_console",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_cabang" : kode_cabang
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_current_ratio_console_cabang',$data);
    }

    function ajax_list_current_ratio_cabang(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post("kode_cabang");

        $get_data_console_list = $this->model_dashboard_collection->get_dt_current_ratio_console_cabang_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_current_ratio_console_cabang_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    date('d-m-Y', strtotime($row->tgl_realisasi)),
                    $row->kolek_bi,
                    $row->ft_hari,
                    $row->ft_angsuran,
                    number_format($row->jml_pinjaman,0,',','.'),
                    $row->jml_angsuran,
                    number_format($row->baki_debet,0,',','.'),
                    number_format($row->jumlah_angsuran,0,',','.'),
                    $row->asal_data,
                    $row->tujuan,
                    $row->produk,
                    $row->segmentasi,
                    $row->status
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function current_ratio_console_cabang_export(){
        $tgl = $this->input->post('data_tgl');
        $kode_cabang = $this->input->post('data_kode_cabang');
        if(empty($tgl)){
            $tgl = "CURDATE()";
        }else {
            $tgl = "DATE('$tgl')";
        }
        $data['current_ratio_console'] = $this->model_dashboard_collection->get_current_ratio_console_cabang_list($tgl,$kode_cabang);
        $data['file_export'] = "CURRENT RATIO CABANG  ".$kode_cabang." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_current_ratio_console', $data);
    }

    function modal_list_deliquency_console(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
            $date_curr = new DateTime();
            $result = $date_curr->format('d F Y');
            $data['tgl'] = $result;
        }else {
            $set_date = new DateTime($tgl);
            $tgl = "DATE('$tgl')";
            $result = $set_date->format('d F Y');
            $data['tgl'] = $result;
        }
        $data['result'] = $this->model_dashboard_collection->get_data_deliquency($tgl);
        $this->load->view('master/collection/modal/modal_list_deliquency_console',$data);
        
    }

    function deliquency_console_export(){
        $tgl = $this->input->post('tgl');
        if(empty($tgl)){
            $tgl = "CURDATE()";
            $date_curr = new DateTime();
            $result = $date_curr->format('d F Y');
            $data['tgl'] = $result;
        }else {
            $set_date = new DateTime($tgl);
            $tgl = "DATE('$tgl')";
            $result = $set_date->format('d F Y');
            $data['tgl'] = $result;
        }
        $data['result'] = $this->model_dashboard_collection->get_data_deliquency($tgl);
        $data['file_export'] = "DELIQUENCY KONSOLIDASI ".date('Y-m-d');
        $this->load->view('master/collection/export/export_deliquency_console', $data);
    }

    function modal_list_deliquency_console_area(){
        $tgl = $this->input->post('tgl');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $tgl = "CURDATE()";
            $date_curr = new DateTime();
            $result = $date_curr->format('d F Y');
            $data['tgl'] = $result;
        }else {
            $set_date = new DateTime($tgl);
            $tgl = "DATE('$tgl')";
            $result = $set_date->format('d F Y');
            $data['tgl'] = $result;
        }
        $data['kode_area'] = $this->input->post('kode_area');
        $data['result'] = $this->model_dashboard_collection->get_data_deliquency_area($tgl,$data['kode_area']);
        $data['file_export'] = "DELIQUENCY KONSOLIDASI ".date('Y-m-d');
        $this->load->view('master/collection/modal/modal_list_deliquency_console_area',$data);        
    }

    function deliquency_console_area_export(){
        $tgl = $this->input->post('data_tgl');
        $data['kode_area'] = $this->input->post('data_kode_area');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $tgl = "CURDATE()";
            $date_curr = new DateTime();
            $result = $date_curr->format('d F Y');
            $data['tgl'] = $result;
        }else {
            $set_date = new DateTime($tgl);
            $tgl = "DATE('$tgl')";
            $result = $set_date->format('d F Y');
            $data['tgl'] = $result;
        }
        $data['result'] = $this->model_dashboard_collection->get_data_deliquency_area($tgl,$data['kode_area']);
        $data['file_export'] = "DELIQUENCY AREA ".$data['kode_area']." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_deliquency_console', $data);
    }

    function modal_list_deliquency_console_cabang(){
        $tgl = $this->input->post('tgl');
        $data['kode_cabang'] = $this->input->post('data_kode_cabang');
       $data['tgl'] = $tgl;
        if(empty($tgl)){
            $tgl = "CURDATE()";
            $date_curr = new DateTime();
            $result = $date_curr->format('d F Y');
            $data['tgl'] = $result;
        }else {
            $set_date = new DateTime($tgl);
            $tgl = "DATE('$tgl')";
            $result = $set_date->format('d F Y');
            $data['tgl'] = $result;
        }
        $data['kode_cabang'] = $this->input->post('kode_cabang');
        $data['result'] = $this->model_dashboard_collection->get_data_deliquency_cabang($tgl,$data['kode_cabang']);
        $data['file_export'] = "DELIQUENCY AREA ".$data['kode_cabang']." ".date('Y-m-d');
        $this->load->view('master/collection/modal/modal_list_deliquency_console_cabang',$data);        
    }

    function deliquency_console_cabang_export(){
        $tgl = $this->input->post('data_tgl');
        $data['kode_cabang'] = $this->input->post('data_kode_cabang');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $tgl = "CURDATE()";
            $date_curr = new DateTime();
            $result = $date_curr->format('d F Y');
            $data['tgl'] = $result;
        }else {
            $set_date = new DateTime($tgl);
            $tgl = "DATE('$tgl')";
            $result = $set_date->format('d F Y');
            $data['tgl'] = $result;
        }
        $data['result'] = $this->model_dashboard_collection->get_data_deliquency_cabang($tgl,$data['kode_cabang']);
        $data['file_export'] = "DELIQUENCY CABANG ".$data['kode_cabang']." ".date('Y-m-d');
        $this->load->view('master/collection/export/export_deliquency_console', $data);
    }

    function modal_list_bucket_roll_console(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_roll_console"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_bucket_roll_console",
                        "type": "POST",
                        "data":{
                            "tgl": date
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $tgl = $this->input->post('tgl');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $data['tgl'] = "CURDATE()";
        }else {
            $data['tgl'] = "DATE('$tgl')";
        }
        //$data['result'] = $this->model_dashboard_collection->get_data_bucket_roll($data['tgl']);
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_bucket_roll_console',$data);
        
    }

    function ajax_list_bucket_roll_console(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_bucket_roll_console_list(intval($start), intval($length),$search['value'], $tgl);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_bucket_roll_console_list($search['value'],$tgl);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    $row->tgl_realisasi,
                    number_format($row->baki_debet, 0, ',', '.'),
                    $row->kolek_bi,
                    $row->ftb_lalu,
                    $row->ftb_now,
                    $row->ftp_lalu,
                    $row->ftp_now,
                    $row->stt,
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_roll_console_export(){
        $tgl = $this->input->post('tgl');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $data['tgl'] = "CURDATE()";
        }else {
            $data['tgl'] = "DATE('$tgl')";
        }
        $data['result'] = $this->model_dashboard_collection->get_data_bucket_roll($data['tgl']);
        $this->load->view('master/collection/export/export_roll_console', $data);



    }

    function modal_list_roll_console_area(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_roll_console_area"]\').val();
               var kode_area = $(\'input[name="kode_area"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_bucket_roll_console_area",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_area": kode_area
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_bucket_roll_console_area',$data);
        
    }

    function ajax_list_bucket_roll_console_area(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_bucket_roll_console_area_list(intval($start), intval($length),$search['value'], $tgl, $kode_area);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_bucket_roll_console_area_list($search['value'],$tgl,$kode_area);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_area_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    $row->tgl_realisasi,
                    number_format($row->baki_debet, 0, ',', '.'),
                    $row->kolek_bi,
                    $row->ftb_lalu,
                    $row->ftb_now,
                    $row->ftp_lalu,
                    $row->ftp_now,
                    $row->stt,
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_roll_console_area_export(){
        $tgl = $this->input->post('tgl');
        $kode_area = $this->input->post('kode_area');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $data['tgl'] = "CURDATE()";
        }else {
            $data['tgl'] = "DATE('$tgl')";
        }
        $data['result'] = $this->model_dashboard_collection->get_data_bucket_roll_area($data['tgl'],$kode_area);
        $this->load->view('master/collection/export/export_roll_console', $data);
    }
    
    function modal_list_roll_console_cabang(){
        $this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var date = $(\'input[name="date_roll_console_cabang"]\').val();
               var kode_cabang = $(\'input[name="kode_cabang"]\').val();
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData").dataTable({
                    stateSave: true,
                    "stateSaveCallback": function (settings, data) {
                        localStorage.setItem("Datatables_" + window.location.pathname, JSON.stringify(data));
                    },
                    "stateLoadCallback": function (settings) {
                        return JSON.parse(localStorage.getItem("Datatables_" + window.location.pathname));
                    },
                    "dom": \'<"bottom"lpf>rt<"top"ip><"clear">\',
                    "oLanguage": {
                        "sProcessing": "<i class=\'fa fa-refresh fa-spin\'><\/i> Loading"
                    },
                    "processing": true,
                    "serverSide": true,
                    "bDestroy": true,
                    "autoWidth": false,
                    "pagingType": "full_numbers",
                    "ajax": {
                        "url": "'.base_url().'modal_bootstrap_controller/ajax_list_bucket_roll_console_cabang",
                        "type": "POST",
                        "data":{
                            "tgl": date,
                            "kode_cabang": kode_cabang
                        }
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[200,500,1000,20000],[20,50,100,200]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                    
                    
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        $this->load->view('master/collection/modal/modal_list_bucket_roll_console_cabang',$data);
        
    }

    function ajax_list_bucket_roll_console_cabang(){
        $arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');

        $get_data_console_list = $this->model_dashboard_collection->get_dt_bucket_roll_console_cabang_list(intval($start), intval($length),$search['value'], $tgl, $kode_cabang);
        $get_total_data_console_list = $this->model_dashboard_collection->get_dt_total_bucket_roll_console_cabang_list($search['value'],$tgl,$kode_cabang);
        if($get_data_console_list->num_rows()>0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_console_list->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->nama_cabang_kerja,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    $row->tgl_realisasi,
                    number_format($row->baki_debet, 0, ',', '.'),
                    $row->kolek_bi,
                    $row->ftb_lalu,
                    $row->ftb_now,
                    $row->ftp_lalu,
                    $row->ftp_now,
                    $row->stt,
                );
            $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_console_list->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_console_list->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function bucket_roll_console_cabang_export(){
        $tgl = $this->input->post('tgl');
        $kode_cabang = $this->input->post('kode_cabang');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $data['tgl'] = "CURDATE()";
        }else {
            $data['tgl'] = "DATE('$tgl')";
        }
        $data['result'] = $this->model_dashboard_collection->get_data_bucket_roll_cabang($data['tgl'],$kode_cabang);
        $this->load->view('master/collection/export/export_roll_console', $data);
    }

    function modal_list_result_bucket_0_all(){
        $tgl = $this->input->post('tgl');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $data['tgl'] = "CURDATE()";
        }else {
            $data['tgl'] = "DATE('$tgl')";
        }
        $data['result_console'] = $this->model_dashboard_collection->bucket_nol_console($data['tgl']);
        $data['result_area'] = $this->model_dashboard_collection->bucket_nol_console_area($data['tgl']);
        $data['result_cabang'] = $this->model_dashboard_collection->bucket_nol_console_cabang($data['tgl']);
        $this->load->view('master/collection/modal/modal_list_result_bucket_0_all', $data);
    }

    function export_list_result_bucket_0_all(){
        $tgl = $this->input->post('tgl');
        $data['tgl'] = $tgl;
        if(empty($tgl)){
            $data['tgl'] = "CURDATE()";
        }else {
            $data['tgl'] = "DATE('$tgl')";
        }
        $data['result_console'] = $this->model_dashboard_collection->bucket_nol_console($data['tgl']);
        $data['result_area'] = $this->model_dashboard_collection->bucket_nol_console_area($data['tgl']);
        $data['result_cabang'] = $this->model_dashboard_collection->bucket_nol_console_cabang($data['tgl']);
        $styleArray = 
        $this->load->view('master/collection/export/export_list_result_bucket_0_all', $data);
    }
}
?>