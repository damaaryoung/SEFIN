<?php
defined('BASEPATH') or exmaster('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;

class Assignment_collection extends MY_Controller
{
    function __construct()
    {
    	parent::__construct();
    	$this->load->model("Model_collection");
        $this->load->helper('general_helper');
	}


	function import(){
		//echo $_FILES['fileupload']['tmp_name'];
		$validation = "";
		if(!empty($_FILES['fileupload']['name'])) { 
                // get file extension
                $extension = pathinfo($_FILES['fileupload']['name'], PATHINFO_EXTENSION);
 				// echo ($extension); die();
                if($extension == 'csv'){
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                    $reader->setDelimiter(';');
                    $fileContent = $_FILES['fileupload']['tmp_name'];
					$objPHPExcel = $reader->load($fileContent);
			        $worksheet = $objPHPExcel->getActiveSheet();
			        $lastRow = $worksheet->getHighestRow();
			        $lastColumn = $worksheet->getHighestColumn();
					for($i=2;$i<=$lastRow;$i++){
						$kode_kolektor = $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();
						$no_rekening = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
						$ft_angsuran = $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();
						$nasabah_id = $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
						$kode_kantor = $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();						

						$post = array(
							"kode_kolektor" => $kode_kolektor,
							"NO_REKENING" => $no_rekening,
							"ft_angsuran" => $ft_angsuran,
							"NASABAH_ID" => $nasabah_id,
							"kode_kantor" => $kode_kantor,
							// "assignment_1" => $assignment_1,
							// "assignment_2" => $assignment_2
						);
						$get_validation_kolektor = $this->Model_collection->get_collector($kode_kolektor);

						if($get_validation_kolektor->num_rows() > 0){	
							$get_nasabah_id = $this->Model_collection->get_id_nasabah($nasabah_id);
							if($get_nasabah_id->num_rows() > 0){
								$get_kode_kantor = $this->Model_collection->get_kode_kantor($kode_kantor);
								if($get_kode_kantor->num_rows() > 0){
									// $this->db->insert('master_all_assignment_kolektor',$post);
									//$this->Model_collection->duplicate_insert("master_all_assignment_kolektor",$post);
									$get_data_master_all_assignment_collector = $this->Model_collection->get_data_master_all_assigment_collector($no_rekening);
									if($get_data_master_all_assignment_collector->num_rows() > 0){
										$post_update = array(
											'ft_angsuran' => $ft_angsuran,
											// 'assignment_1' => $assignment_1,
											// 'assignment_2' => $assignment_2
										);
										$this->Model_collection->update_data_master_all_assigment_kolektor($no_rekening, $post_update);
									}else{
										$this->Model_collection->insert_data_master_all_assigment_kolektor($post);
									}
								}else{
									$validation .= "Data Kode Kantor ".$kode_kantor." tidak valid (D".$i.")<br/>";
								}
							}else{
								$validation .= "Data ID nasabah ".$nasabah_id." tidak terdaftar di sistem (C".$i.")<br/>";
							}
						}else{
							$validation  .= "Data Kolektor ".$kode_kolektor." tidak valid (A".$i.")<br/>";
						}
					}
					echo " Upload Selesai<br/>".$validation;
                } elseif($extension == 'xlsx') {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                    $fileContent = $_FILES['fileupload']['tmp_name'];
					$objPHPExcel = $reader->load($fileContent);
			        $worksheet = $objPHPExcel->getActiveSheet();
			        $sheetData = $objPHPExcel->getActiveSheet()->toArray();
					for($i=1;$i<count($sheetData);$i++){
						$kode_kolektor = $sheetData[$i]['0'];
						$no_rekening = $sheetData[$i]['1'];
						$ft_angsuran = $sheetData[$i]['2'];
						$nasabah_id = $sheetData[$i]['3'];
						$kode_kantor = $sheetData[$i]['4'];

						$post = array(
							"kode_kolektor" => $kode_kolektor,
							"NO_REKENING" => $no_rekening,
							"ft_angsuran" => $ft_angsuran,
							"NASABAH_ID" => $nasabah_id,
							"kode_kantor" => $kode_kantor,
						);
                        $get_duplicate_assigment = $this->Model_collection->get_duplicate_assigment($no_rekening,$ft_angsuran);

						$get_validation_kolektor = $this->Model_collection->get_collector($kode_kolektor);
                        if($get_duplicate_assigment->num_rows() > 0){
                            $validation .= "Upload gagal karena data duplikat(No Rekening : ".$no_rekening.", ft_angsuran: ".$ft_angsuran.")<br/>";
                        }else{
    						if($get_validation_kolektor->num_rows() > 0){	
    							$get_nasabah_id = $this->Model_collection->get_id_nasabah($nasabah_id);
    							if($get_nasabah_id->num_rows() > 0){
    								$get_kode_kantor = $this->Model_collection->get_kode_kantor($kode_kantor);
    								if($get_kode_kantor->num_rows() > 0){
    									// $this->db->insert('master_all_assignment_kolektor',$post);
    									//$this->Model_collection->duplicate_insert("master_all_assignment_kolektor",$post);
    									$get_data_master_all_assignment_collector = $this->Model_collection->get_data_master_all_assigment_collector($no_rekening);
    									// if($get_data_master_all_assignment_collector->num_rows() > 0){
    									// 	$post_update = array(
    									// 		'ft_angsuran' => $ft_angsuran,
    									// 		// 'assignment_1' => $assignment_1,
    									// 		// 'assignment_2' => $assignment_2
    									// 	);
    									// 	$this->Model_collection->update_data_master_all_assigment_kolektor($no_rekening, $post_update);
    									// }else{
    									// 	$this->Model_collection->insert_data_master_all_assigment_kolektor($post);
    									// }
                                        $table = 'master_all_assigment_kolektor';
                                        $this->Model_collection->duplicate_insert($table,$post);
    								}else{
    									$validation .= "Data Kode Kantor ".$kode_kantor." tidak valid (D".$i.")<br/>";
    								}
    							}else{
    								$validation .= "Data ID nasabah ".$nasabah_id." tidak terdaftar di sistem (C".$i.")<br/>";
    							}
    						}else{
    							$validation  .= "Data Kolektor ".$kode_kolektor." tidak valid (A".$i.")<br/>";
    						}
                        }

					}
					echo " Upload Selesai<br/>".$validation;
                } else {
                    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                }
        }

		// $this->db->insert('master_all_assignment_kolektor',$post);

		
		
		// $fileContent = $_FILES['fileupload']['tmp_name'];
		// $objReader = IOFactory::createReader($fileContent)->setDelimiter(",");
		// $objPHPExcel = $objReader->load($fileContent);
		// $extension = explode(".",$this->input->post("nama_file"));
  //       if(!empty($this->input->post("fileupload"))) { 
  //               // get file extension
  //               if($extension[1] == 'csv'){
  //                   $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
  //               } elseif($extension[1] == 'xlsx') {
  //                   $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
  //               } else {
  //                   $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
  //               }
  //       }
  //       $data1 = $objPHPExcel->getActiveSheet()->getCell("A1")->getValue();
		// $post = array(
		// 	"kode_kolektor" => $data1
		// );
		// $this->db->insert('master_all_assignment_kolektor',$post);

	}

	function ajax_list_header_master_all_assignment_kolektor(){
        $kode_kolektor = $this->input->post('kode_kolektor');
        $nasabah_id = $this->input->post('nasabah_id');
        $kode_area = $this->input->post('kode_area');
        $nama_area_kerja = $this->input->post('kode_cabang');

		$arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');

        $get_data_master = $this->Model_collection->get_datatable_master_all_assigment_collector(intval(@$start),intval(@$length),@$search['value'],$kode_kolektor,$nasabah_id,$kode_area,$nama_area_kerja);

        $get_total_data_master = $this->Model_collection->get_total_datatable_master_all_assigment_collector(@$search['value'],$kode_kolektor,$nasabah_id,$kode_area,$nama_area_kerja);
        if($get_data_master->num_rows() > 0){
        	$i = ($start == 0) ? 1 : $start+1;
        	foreach($get_data_master->result() as $row){
        		$action = '<a><button type="button" class="btn btn-xs btn-success" onclick="modal_detail_master('.$row->kode_kolektor.')" data-toggle="modal">Detail</button><a/>';
        		// $arrData['data'][] = array(
        		// 	$i,
        		// 	$row->kode_area,
        		// 	$row->kode_kantor,
        		// 	$row->kode_kolektor,
        		// 	$row->deskripsi_group3,
        		// 	$row->kecamatan,
        		// 	$row->desa,
        		// 	$row->kodepos,
        		// 	$row->NO_REKENING,
        		// 	$row->nasabah_id,
        		// 	$row->NAMA_NASABAH,
        		// 	$row->ft_angsuran
        		// );
                $arrData['data'][] = array(
                    $i,
                    $row->kode_area."<br/>".$row->nama_area_kerja." (".$row->kode_kantor.")",
                    $row->deskripsi_group3,
                    $row->NO_REKENING,
                    "<a onclick='modal_nasabah(".$row->nasabah_id.")'>".$row->NAMA_NASABAH."</a>",
                    $row->ft_angsuran
                );
        		$i++;
        	}
        }else{
        	$arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_master->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_master->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
	}

	function modal_detail_master_assignment_kolektor($kode_kolektor){
		$this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData2").dataTable({
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
                        "url": "'.base_url().'assignment_collection/ajax_list_detail_master_assignment_kolektor/'.$kode_kolektor.'",
                        "type": "POST",
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[100,200,500,1000],[100,200,500,1000]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
        $data['params'] = $this->params;
        
		$this->load->view('master/collection/collector/modal/modal_detail_assignment_kolektor_view',$data);
	}

	function ajax_list_detail_master_assignment_kolektor($kode_kolektor){
		$arrData = array();
        
        $start  = $this->input->post('start');
        $length = $this->input->post('length');
        $draw   = $this->input->post('draw');
        $search = $this->input->post('search');

        $get_data_detail = $this->Model_collection->get_detail_master_all_assigment_collector(intval(@$start),intval(@$length),@$search['value'],@$kode_kolektor);

        $get_total_data_detail = $this->Model_collection->get_total_detail_master_all_assigment_collector(@$search['value'],@$kode_kolektor);

        if($get_data_detail->num_rows()>0){
        	foreach($get_data_detail->result() as $row){
        		$action = "";
	        	$i = ($start == 0) ? 1 : $start+1;
	        	$arrData['data'][] = array(
					$i,
					$row->kecamatan,
					$row->desa,
					$row->kodepos,
					$row->jumlah_kontrak,
					$action = ""
				);
	        	$i++;
        	}
        }else{
        	$arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_detail->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_detail->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
	}

	function modal_detail_2nd_master_assignment_kolektor($kode_kolektor){
		$this->head_params(' -  List','','','<link rel="stylesheet" type="text/css" href="'.base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">',
        '<script src="'.base_url().'assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="'.base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $.ajaxPrefilter( "json script", function( options ) {
                    options.crossDomain = true;
                });
                $("#listData2").dataTable({
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
                        "url": "'.base_url().'assignment_collection/ajax_list_detail_master_assignment_kolektor/'.$kode_kolektor.'",
                        "type": "POST",
                    },
                    responsive:{details:{type:"column",target:"tr"}},
                    columnDefs:[{className:"control",orderable:1,targets:"_all"}],
                    order:[3,"asc"],
                    lengthMenu:[[100,200,500,1000],[100,200,500,1000]],
                    "pageLength":100,
                    dom:"<\'row\' <\'col-md-12\'B>><\'row\'<\'col-md-6 col-sm-12\'l><\'col-md-6 col-sm-12\'f>r><\'table-scrollable\'t><\'row\'<\'col-md-5 col-sm-12\'i><\'col-md-7 col-sm-12\'p>>",
                });
            });
        </script>
        ');
		$this->load->view('master/collection/collector/modal/modal_detail_assignment_kolektor_view',$data);
	}

   function ajax_list_task_assignment_kolektor(){
        $kode_kolektor = $this->input->post('kode_kolektor');
        // $nasabah_id = $this->input->post('nasabah_id');
        $no_rekening = $this->input->post('no_rekening');
        $kode_area = $this->input->post('kode_area');
        $nama_area_kerja = $this->input->post('kode_cabang');
        $field_order = $this->input->post('field_order');
        $order_by = $this->input->post('order_by');
        $arrData = array();

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');

        $get_data_task = $this->Model_collection->get_data_task_assignment_kolektor(intval(@$start),intval(@$length),@$search['value'],$kode_kolektor,$no_rekening,$kode_area,$nama_area_kerja,$field_order,$order_by);
        $get_total_data_task = $this->Model_collection->get_total_data_task_assignment_kolektor(@$search['value'],$kode_kolektor,$no_rekening,$kode_area,$nama_area_kerja,$field_order,$order_by);

        if($get_data_task->num_rows() > 0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_task->result() as $row){
                if($row->flag_aktif == 1){
                    $status = "Active";
                }else{
                    $status = "Inactive";
                }
                if($row->flag_aktif == 1){
                    $checked = "checked";
                }else{
                    $checked="";
                }
                $arrData['data'][] = array(
                    $i,
                    '<div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary'.$i.'" onchange="flag_checked(\''.$row->task_code.'\')" '.$checked.'>
                        <label for="checkboxPrimary'.$i.'">
                        </label>
                    </div>',
                    "<div id='stts_".$row->task_code."'>".$status."</div>",
                    tgl_indonesia($row->assignment_date),
                    $row->task_code,
                    $row->kode_group3,
                    $row->deskripsi_group3,
                    $row->no_rekening,
                    $row->nama_nasabah,
                    $row->ft_hari,
                    $row->ft_bulan,
                    "Rp. ".number_format($row->os_pokok,2,".",","),
                    "Rp. ".number_format($row->collect_fee,2,".","."),
                    "Rp. ".number_format($row->total_tagihan,2,".","."),
                );
                $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        
        // $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_task->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_task->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function change_status_task_assignment(){
        $task_code = $this->input->post('task_code');
        $this->Model_collection->change_flag_active($task_code);
        $get_status_task_code = $this->Model_collection->get_task_code($task_code);
        echo json_encode($get_status_task_code->result());
    }

    function get_area_kerja(){
        $area = $this->Model_collection->get_area_kerja();
        echo json_encode($area->result());
    }

    function get_kode_cabang(){
        $kode_area = $this->input->post('kode_area');
        $get_cabang = $this->Model_collection->get_kode_cabang($kode_area);
        echo json_encode($get_cabang->result());
    }

    function get_kode_kolektor(){
        $kode_area = $this->input->post('kode_area');
        $nama_area_kerja = $this->input->post('nama_area_kerja');
        $get_kode_kolektor = $this->Model_collection->get_kode_kolektor($kode_area,$nama_area_kerja);
        echo json_encode($get_kode_kolektor->result());
    }

    function get_kode_nasabah(){
        $kode_kolektor = $this->input->post('kode_kolektor');
        $get_nasabah = $this->Model_collection->get_kode_nasabah($kode_kolektor);
        echo json_encode($get_nasabah->result());
    }

    function modal_data_nasabah(){
        $nasabah_id = $this->input->post('nasabah_id');
        $data['get_data_nasabah_id'] = $this->Model_collection->get_data_nasabah_id($nasabah_id)->row();
        $this->load->view('master/collection/collector/modal/modal_data_nasabah_view',$data);
    }

    function ajax_list_collection_activity(){
        $arrData = array();

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');

        $kode_area = $this->input->post('kode_area');
        $kode_cabang = $this->input->post('kode_cabang');
        $kode_kolektor = $this->input->post('kode_kolektor');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $pic = $this->input->post("pic");
        $get_data_detail = $this->Model_collection->get_data_collection_activity(intval(@$start),intval(@$length),$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        $get_total_data_activity = $this->Model_collection->get_total_data_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        if($get_data_detail->num_rows() > 0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_data_detail->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    tgl_indonesia($row->assignment_date),
                    $row->kode_area,
                    $row->kode_cabang,
                    $row->nama_area_kerja,
                    $row->kode_group3,
                    $row->deskripsi_group3,
                    $row->no_rekening,
                    $row->NAMA_NASABAH,
                    $row->visit,
                    $row->not_visit,
                    $row->interaksi,
                    $row->janji_bayar,
                    $row->tgl_janji_byr
                );
                $i++;
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_activity->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_activity ->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function ajax_list_history_collection_activity(){
        $arrData = array();

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');

        $kode_area = $this->input->post('kode_area');
        $kode_cabang = $this->input->post('kode_cabang');
        $kode_kolektor = $this->input->post('kode_kolektor');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $pic = $this->input->post("pic");
        $get_data_detail = $this->Model_collection->get_data_history_collection_activity(intval(@$start),intval(@$length),$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        $get_total_data_activity = $this->Model_collection->get_total_data_history_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        if($get_data_detail->num_rows() > 0){
            $i = ($start == 0) ? 1 : $start+1;
            
            foreach($get_data_detail->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    tgl_indonesia($row->assignment_date),
                    $row->kode_area,
                    $row->kode_kantor,
                    $row->nama_area_kerja,
                    $row->kode_group3,
                    $row->deskripsi_group3,
                    $row->no_rekening,
                    $row->NAMA_NASABAH,
                    intval($row->jml_jaminan) + intval($row->jml_tempattinggal),
                    $row->not_visit,
                    $row->interaksi,
                    $row->janji_bayar,
                    $row->tgl_janji_byr,
                    $row->karakter_debitur,
                    $row->total_penghasilan,
                    $row->kondisi_pekerjaan,
                    $row->asset_debt,
                    $row->case_category,
                    $row->next_action
                );
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_activity->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_activity ->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function ajax_list_summary_collection_activity(){
        $arrData = array();

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');

        $kode_area = $this->input->post('kode_area');
        $kode_cabang = $this->input->post('kode_cabang');
        $kode_kolektor = $this->input->post('kode_kolektor');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $pic = $this->input->post("pic");
        $get_data_detail = $this->Model_collection->get_data_summary_collection_activity(intval(@$start),intval(@$length),$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        $get_total_data_activity = $this->Model_collection->get_total_data_summary_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        if($get_data_detail->num_rows() > 0){
            $i = ($start == 0) ? 1 : $start+1;
            
            foreach($get_data_detail->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    tgl_indonesia($row->assignment_date),
                    $row->kode_area,
                    $row->kode_kantor,
                    $row->nama_area_kerja,
                    $row->kode_group3,
                    $row->deskripsi_group3,
                    $row->assignment,
                    intval($row->jml_jaminan) + intval($row->jml_tempattinggal),
                    $row->not_visit,
                    $row->interaksi,
                    $row->janji_bayar,
                    $row->percentage_visit,
                    $row->percentage_interaksi,
                    $row->success_rate_ptp,
                    
                );
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_activity->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_activity ->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    public function ajax_list_collection_performance(){
        $arrData = array();

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');

        $kode_area = $this->input->post('kode_area');
        $kode_cabang = $this->input->post('kode_cabang');
        $kode_kolektor = $this->input->post('kode_kolektor');
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $pic = $this->input->post("pic");
        $get_data_detail = $this->Model_collection->get_data_perfomance_collection_activity(intval(@$start),intval(@$length),$kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        $get_total_data_activity = $this->Model_collection->get_total_data_performance_collection_activity($kode_area,$kode_cabang,$kode_kolektor,$pic,$from,$to);
        if($get_data_detail->num_rows() > 0){
            $i = ($start == 0) ? 1 : $start+1;
            
            foreach($get_data_detail->result() as $row){
                $arrData['data'][] = array(
                    $i,
                    $row->last_update,
                    tgl_indonesia($row->assignment_date), 
                    $row->kode_area, 
                    $row->kode_kantor,
                    $row->nama_area_kerja,
                    $row->kode_kolektor,
                    $row->kode_group3,
                    $row->deskripsi_group3,
                    $row->bucket_bln_lalu,
                    $row->bucket,
                    $row->NO_REKENING,
                    $row->NAMA_NASABAH,
                    $row->os_pokok, 
                    $row->total_bayar
                    
                );
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data']  = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_data_activity->num_rows();
        $arrData['recordsFiltered'] = $get_total_data_activity ->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    function get_area_kerja_per_pic(){
        $area = $this->Model_collection->get_area_kerja_per_pic();
        echo json_encode($area->result());
    }

    function ajax_list_tracker_data_visit_kolektor(){
        $arrData = array();

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $draw = $this->input->post('draw');
        $search = $this->input->post('search');

        $kode_area = $this->input->post('kode_area');
        $kode_cabang = $this->input->post('kode_cabang');
        $kode_kolektor = $this->input->post('kode_kolektor');

        $from = $this->input->post('from');
        $to = $this->input->post('to');


        $get_track_visit = $this->Model_collection->get_track_data_visit(intval(@$start),intval(@$length),$kode_area,$kode_cabang,$kode_kolektor,$from,$to);
        $get_total_track_visit = $this->Model_collection->get_total_track_data_visit($kode_area,$kode_cabang,$kode_kolektor,$from,$to);
        if($get_track_visit->num_rows() > 0){
            $i = ($start == 0) ? 1 : $start+1;
            foreach($get_track_visit->result() as $row){
                $dis_button_home = $row->lat_a == "" ? "disabled='true'" : "";
                $dis_button_assurance = $row->lat_b == "" ? "disabled='true'" : "";
                $arrData['data'][] = array(
                    $row->task_code,
                    $row->deskripsi_group3,
                    $row->no_rekening,
                    $row->NAMA_NASABAH,
                    $row->total_tunggakan,
                    $row->lat_a,
                    $row->long_a,
                    $row->lat_b,
                    $row->long_b,
                    "<button type='button' class='btn btn-primary mr-1' data-toggle='modal' data-target='#myModal' data-info='".$row->file1_a."' data-lat='".$row->lat_a."' data-lng='".$row->long_a."' ".$dis_button_home."><i class='fas fa-home'></i>
                    </button><button type='button' class='btn btn-success' data-toggle='modal' data-target='#myModal' data-info='".$row->file1_b."' data-lat='".$row->lat_b."' data-lng='".$row->long_b."' ".$dis_button_assurance.">
                      <i class='fas fa-warehouse'></i>
                    </button>"
                );
            }
        }else{
            $arrData['data'] = array();
        }
        $arrData['data'] = $arrData['data'];
        $arrData['draw'] = $draw;
        $arrData['recordsTotal'] = $get_total_track_visit->num_rows();
        $arrData['recordsFiltered'] = $get_total_track_visit->num_rows();
        header('Content-Type: application/json');
        echo json_encode($arrData);
    }

    public function modal_map_tracker_visit_kolektor(){
        $data['test']='test';
        $response = $this->load->view('master/collection/collector/modal/modal_data_tracker_visit_kolektor',$data,TRUE);
        echo $response;
    }

    function ajax_get_coordinate_route_collector(){
        $kode_area = $this->input->post('kode_area');
        $kode_cabang = $this->input->post('kode_cabang');
        $kode_kolektor = $this->input->post('kode_kolektor');
        $from = $this->input->post('from');
        $to = $this->input->post('to');


        $get_track_visit = $this->Model_collection->get_route_data_visit($kode_area,$kode_cabang,$kode_kolektor,$from,$to);

        echo json_encode($get_track_visit->result());
    }

}