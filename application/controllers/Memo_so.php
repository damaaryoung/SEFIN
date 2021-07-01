<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memo_so extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library('Curl');
    }

	public function index()
	{
		$id = $this->input->post('id');
		$query = "SELECT * from view_report_so WHERE id_so ='$id'";

		$result = $this->db->query($query);

		$x      = $result->row();
		$id_calon_debitur = $x->id_calon_debitur;
		$data['nomor_so'] = $x->nomor_so;
		$data['tanggal']  = date('d/m/Y',strtotime($x->tgl_buat));
		$data['asal_data'] = $x->asal_data;
		$data['nama_so'] = $x->nama_so;
		$data['nama_marketing'] = $x->nama_marketing;
		$data['plafon_pinjaman'] = $x->plafon_pinjaman;
		$data['tenor']= $x->tenor;
		$data['jenis_pinjaman'] = $x->jenis_pinjaman;
		$data['tujuan_pinjaman'] = $x->tujuan_pinjaman;
		$data['nama_lengkap'] = $x->nama_lengkap;
		$data['jenis_kelamin'] = $x->jenis_kelamin;
		$data['gelar_keagamaan'] = $x->gelar_keagamaan;
		$data['status_nikah'] = $x->status_nikah;
		$data['gelar_pendidikan'] = $x->gelar_pendidikan;
		$data['no_ktp'] = $x->no_ktp;
		$data['no_kk'] = $x->no_kk;
		$data['ibu_kandung'] = $x->ibu_kandung;
		$data['no_ktp_kk'] = $x->no_ktp_kk;
		$data['no_npwp'] = $x->no_npwp;
		$data['tempat_lahir'] = $x->tempat_lahir;
		$data['agama'] = $x->agama;
		$data['tgl_lahir'] = $x->tgl_lahir;
		$data['alamat_ktp'] =$x->alamat_ktp;
		$data['kecamatan_ktp'] = $x->kecamatan_ktp;
		$data['provinsi_ktp'] = $x->provinsi_ktp;
		$data['kelurahan_ktp'] = $x->kelurahan_ktp;
		$data['kabupaten_ktp'] = $x->kabupaten_ktp;
		$data['rt_ktp'] = $x->rt_ktp;
		$data['rw_ktp'] = $x->rw_ktp;
		$data['kode_pos_ktp'] = $x->kode_pos_ktp;
		$data['alamat_domisili'] = $x->alamat_domisili;
		$data['kecamatan_domisili'] = $x->kecamatan_domisili;
		$data['provinsi_domisili'] = $x->kecamatan_domisili;
		$data['kabupaten_domisili'] = $x->kabupaten_domisili;
		$data['kelurahan_domisili'] = $x->kelurahan_domisili;
		$data['rt_domisili'] = $x->rt_domisili;
		$data['rw_domisili'] = $x->rw_domisili;
		$data['jumlah_tanggungan'] = $x->jumlah_tanggungan;
		$data['kode_pos_domisili'] = $x->kode_pos_domisili;
		$data['no_hp'] = $x->no_hp;
		$data['no_telp'] = $x->no_telp;
		$data['pendidikan_terakhir'] = $x->pendidikan_terakhir;
		$data['nama_lengkap_pasangan'] = $x->nama_pasangan;
		$data['jenis_kelamin_pasangan'] = $x->jk_pasangan;
		$data['ibu_kandung_pasangan'] = $x->ibu_kandung_pasangan;
		$data['no_kk_pasangan'] = $x->no_kk_pasangan;
		$data['no_ktp_pasangan'] = $x->no_ktp_pasangan;
		$data['no_npwp_pasangan'] = $x->no_npwp_pasangan;
		$data['no_ktp_kk_pasangan'] = $x->no_ktp_kk_pasangan;
		$data['agama_pasangan'] = "";
		$data['tempat_lahir_pasangan'] = $x->tempat_lahir_pasangan;
		$data['tgl_lahir_pasangan'] =$x->tgl_lahir_pasangan;
		$data['alamat_pasangan'] = $x->alamat_pasangan;
		$data['no_telp_pasangan'] = $x->no_telp_pasangan;

		$x = $this->db->query("SELECT id_penjamin FROM `trans_so` WHERE id ='$id'");
		$result = $x->row();
		$id_jaminan = isset($result->id_penjamin) ? $result->id_penjamin :"0";

		if($id_jaminan !== '0'){
			$query = "SELECT * FROM `view_penjamin_debitur` 
								  WHERE id IN ($id_jaminan) ";
			$rows = $this->db->query($query);
			$data['row'] = $rows;
		}else{
			$rows = 0;
			$data['row'] = $rows;
		}

		

		// $this->load->view('report/memo_ao',$data);

		$mpdf = new \Mpdf\Mpdf();
        $html = $this->load->view('report/memo_so',$data,true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
	}

	// function take_snapshot_identity(){
	// 	$this->load->library('curl');
	// 	$fp = $this->input->post('foto_debt');
	// 	$target_dir = "/upload";
	// 	$target_file = $target_dir. basename(fp);
	//     $post = array(
	//     	'X-ADVAI-KEY' => 'c3609576a2f72065',
	//     	'Content-Type'=> 'multipart/form-data'
	//     );
	//     $url_file = "Users/lby/Desktop/ocrImage.jpg";
	//     echo $this->curl->get_rest_api_file($post,$url_file,$fp);
	// }

	// function take_snapshot_identity(){
	// 	$this->load->library('curl');
	// 	$name_file = $_FILES['foto_debt']['name'];
	// 	$tmp_file = $_FILES['foto_debt']['tmp_name'];
	// 	$size_file = $_FILES['foto_debt']['size'];
	// 	$target_dir = "/uploads";
	// 	$target_file = $target_dir. basename($name_file);
	// 	$uploadOk = 1;
	// 	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	// 	$check  = getimagesize($tmp_file);
	// 	if($check !=false){
	// 		echo "File is an image - ".$check['mime'].".";
	// 		$uploadOk = 1;
	// 	}else{
	// 		echo "file is not an image.";
	// 		$uploadOk = 0;
	// 	}

	// 	if(file_exists($target_file)){
	// 		echo "Sorry, file already exists.";
	// 		$uploadOk = 0;
	// 	}

	// 	if($size_file > 500000){
	// 		echo "sorry, your file is too large";
	// 		$uploadOk = 0;
	// 	}

	// 	if($imageFileType !="jpg" && $imageFileType !="png" && $imageFileType !="gif"){
	// 		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	// 		$uploadOk = 0;
	// 	}

	// 	if ($uploadOk == 0) {
	// 	  echo "Sorry, your file was not uploaded.";
	// 	// if everything is ok, try to upload file
	// 	} else {
	// 	  if (move_uploaded_file($tmp_file, $target_file)) {
	// 	    echo "The file ". htmlspecialchars( basename( $name_file)). " has been uploaded.";
	// 	  } else {
	// 	    echo "Sorry, there was an error uploading your file.";
	// 	  }
	// 	}
	// }

	public function take_snapshot_identity_debitur(){
		$config = array(
			'upload_path'   => './uploads/debitur',
			'allowed_types' => 'gif|jpg|png',
			'max_size'      => '2000',
			'min_width'		=> 256,
			'min_height'    => 256,
			'max_width'		=> 4096,
			'max_height'	=> 4096,
			'file_name'		=> date("Y-m-d").'_'.time()."_ektp"
		);

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('inp1'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo json_encode($error);
		}else{
			$data = array('upload_data'=> $this->upload->data());


			require('./application/third_party/ocr/CurlClient.php');
	        $api_host = 'https://api.advance.ai';
	        $api_name = '/openapi/face-recognition/v1/ocr-ktp-check';
	        $access_key = 'c3609576a2f72065'; // your access key
	        $secret_key = '5fe5320ef5712301'; // your secret key

	        $ocrImage = array(
	            'ocrImage' => base_url()."uploads/debitur/".$config['file_name'].".jpg"
	        );

	        $client = new ai\advance\CurlClient($api_host, $access_key, $secret_key);

	        $result = $client -> request($api_name, null, $ocrImage);
	        echo $result;
		}
	}

	public function take_snapshot_identity_pasangan(){
		$config = array(
			'upload_path'   => './uploads/pasangan',
			'allowed_types' => 'gif|jpg|png',
			'max_size'      => '2000',
			'min_width'		=> 256,
			'min_height'    => 256,
			'max_width'		=> 4096,
			'max_height'	=> 4096,
			'file_name'		=> date("Y-m-d").'_'.time()."_ektp"
		);

		$this->load->library('upload',$config);

		if(!$this->upload->do_upload('inp_pasangan'))
		{
			$error = array('error' => $this->upload->display_errors());
			echo json_encode($error);
		}else{
			$data = array('upload_data'=> $this->upload->data());


			require('./application/third_party/ocr/CurlClient.php');
	        $api_host = 'https://api.advance.ai';
	        $api_name = '/openapi/face-recognition/v1/ocr-ktp-check';
	        $access_key = 'c3609576a2f72065'; // your access key
	        $secret_key = '5fe5320ef5712301'; // your secret key

	        $ocrImage = array(
	            'ocrImage' => base_url()."uploads/pasangan/".$config['file_name'].".jpg"
	        );

	        $client = new ai\advance\CurlClient($api_host, $access_key, $secret_key);

	        $result = $client -> request($api_name, null, $ocrImage);
	        echo $result;
		}
	}

	public function get_kelurahan(){
		$this->load->model('Model_so');
		$kecamatan = $this->input->post('nama_kecamatan');
		$get_kelurahan = $this->Model_so->get_kelurahan($kecamatan);
		echo json_encode($get_kelurahan->result());

	}

	public function take_snapshot_identity_penjamin(){
		$config = array(
			'upload_path'   => './uploads/penjamin',
			'allowed_types' => 'gif|jpg|png',
			'max_size'      => '2000',
			'min_width'		=> 256,
			'min_height'    => 256,
			'max_width'		=> 4096,
			'max_height'	=> 4096,
			'file_name'		=> date("Y-m-d").'_'.time()."_ektp"
		);
		$this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file')){
            $status = "error";
            $msg = $this->upload->display_errors();
        }
        else{
            $dataupload = $this->upload->data();
            $status = "success";
            $msg = $dataupload['file_name']." berhasil diupload";
        }
        $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>$status,'msg'=>$msg)));
	}
}
