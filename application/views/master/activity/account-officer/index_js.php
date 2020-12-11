<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		filter();
	})
	function filter(){
		var filter=$('.cari-berdasarkan').val();
		var page='1';
		data(filter,page);
	}
	function pagination($page){
		var filter=$('.cari-berdasarkan').val();
		var page=$page;
		data(filter,page);
	}
	function data(filter='',page=''){
		$.ajax({
			url: "<?= base_url(); ?>activity/ao/activityAOController/data",
			data:{page:page,filter:filter},
			type: "POST",
			beforeSend: function() {
				$('.spinner').css("display", "block");
			},
			success: function(response) {
				$('.tabel-data').html(response);
				$('.spinner').css("display", "none");
			}
		});
	}
	function clickForm(){
		$('.bd-example-modal-lg').modal('show');
		var form = $('.form').val();
		$.ajax({
			url: "<?= base_url(); ?>activity/ao/activityAOController/"+form,
			data:{'id':'x'},
			type: "POST",
			success: function(response) {
				document.getElementById("html-rendered-form-data").innerHTML = response;
				if (form==='survey') {
					formSurvey('','create');
					$('#basic-addon').click(function(){
						$('#modal-default-survey').modal('show');
						filterFormSurvey();
					});
				}else if (form==='visit') {
					formVisit('','create');
					$('#basic-addon').click(function(){
						$('#modal-default').modal('show');
						filterFormVisit();
					});
				}else if (form==='promosi') {
					formPromosi('','create');
					getLocation();
				}
			}
		});
	}

	function edit($id,$param){
		$('.bd-example-modal-lg').modal('show');
		var form = $('.form').val();
		$.ajax({
			url: "<?= base_url(); ?>activity/ao/activityAOController/"+form,
			data:{'id':'x'},
			type: "POST",
			success: function(response) {
				document.getElementById("html-rendered-form-data").innerHTML = response;
				if (form==='survey') {
					$.ajax({
						url: "<?php echo config_item('api_url') ?>api/master/Activity/ao/index/"+$id+"/id",
						type: "GET",
						headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
						success: function(response) {
							formSurvey($id,'edit');
							$('#nama_debitur').val(response.data.nama_debitur);
							$('#alamat_domisili').val(response.data.alamat_domisili);
							$('#plafon_pengajuan').val(response.data.plafon_pengajuan);
							$('#hasil_survey').val(response.data.hasil_survey);
							$('#keterangan_hasil_survey').val(response.data.keterangan_hasil_survey);
							$('#basic-addon').click(function(){
								$('#modal-default-survey').modal('show');
								filterFormSurvey();
							});
						}
					});
				}else if (form==='visit') {
					$.ajax({
						url: "<?php echo config_item('api_url') ?>api/master/Activity/ao/index/"+$id+"/id",
						type: "GET",
						headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
						success: function(response) {
							formVisit($id,'edit');
							$('#no_kontrak').val(response.data.no_kontrak);
							$('#nama_debitur').val(response.data.nama_debitur);
							$('#alamat_domisili').val(response.data.alamat_domisili);
							$('#hasil_visit').val(response.data.hasil_visit);
							$('#basic-addon').click(function(){
								$('#modal-default').modal('show');
								filterFormVisit();
							});
						}
					});
				}else if (form==='promosi') {
					$.ajax({
						url: "<?php echo config_item('api_url') ?>api/master/Activity/ao/index/"+$id+"/id",
						type: "GET",
						headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
						success: function(response) {
							formPromosi($id,'edit');
							$('#latitude').val(response.data.latitude);
							$('#longitude').val(response.data.longitude);
							getLocation();
						}
					});
				}
			}
		});
	}

	function destroy($id,$param){
		var urlDestroy='<?= config_item('api_url'); ?>api/master/Activity/ao/index/'+$id+'/delete';
		Swal.fire({
			title: 'Apakah kamu yakin?',
			text: "Anda tidak akan dapat mengembalikan ini!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ya, hapus!'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: urlDestroy,
					type: "DELETE",
					headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
					success: function(response) {
						filter();
						Swal.fire(
							'Dihapus!',
							'File Anda telah dihapus.',
							'success'
							)
					}
				});
			}
		})
	}

// function data selected survey::started
function filterFormSurvey(){
	var filter=$('.cari-berdasarkan-nama-debitur-survey').val();
	var page='1';
	dataFormSurvey(filter,page);
}
function paginationFormSurvey($page){
	var filter=$('.cari-berdasarkan-nama-debitur-survey').val();
	var page=$page;
	dataFormSurvey(filter,page);
}
function dataFormSurvey(filter='',page=''){
	$.ajax({
		url: "<?= base_url(); ?>activity/ao/activityAOController/daftarNamaFormSurvey",
		data:{page:page,filter:filter},
		type: "POST",
		success: function(response) {
			$('.data-selected').html(response);
		}
	});
}
function clickDaftarNamaFormSurvey($id){
	$.post("<?= base_url(); ?>activity/ao/activityAOController/daftarNamaFormVisitDetail", {id:$id}, function(response){       
		var result=JSON.parse(response);
		$('#nama_debitur').val(result['data']['nama_debitur']);
		$('#alamat_domisili').val(result['data']['alamat_domisili']);
		$('#plafon_pengajuan').val(result['data']['plafon_pengajuan']);
		$('#modal-default-survey').modal('hide');
	});
}
// function data selected survey::ended

// function data selected visit::started
function filterFormVisit(){
	var filter=$('.cari-berdasarkan-nama-debitur-visit').val();
	var page='1';
	dataFormVisit(filter,page);
}
function paginationFormVisit($page){
	var filter=$('.cari-berdasarkan-nama-debitur-visit').val();
	var page=$page;
	dataFormVisit(filter,page);
}
function dataFormVisit(filter='',page=''){
	$.ajax({
		url: "<?= base_url(); ?>activity/ao/activityAOController/daftarNamaFormVisit",
		data:{page:page,filter:filter},
		type: "POST",
		success: function(response) {
			$('.data-selected').html(response);
		}
	});
}
function clickDaftarNamaFormVisit($id){
	$.post("<?= base_url(); ?>activity/ao/activityAOController/daftarNamaFormVisitDetail", {id:$id}, function(response){       
		var result=JSON.parse(response);
		$('#no_kontrak').val(result['data']['nomor_kontrak']);
		$('#nama_debitur').val(result['data']['nama_debitur']);
		$('#alamat_domisili').val(result['data']['alamat_domisili']);
		$('#modal-default').modal('hide');
	});
}
// function data selected visit::ended

function formSurvey($id,$param){
	$.validator.setDefaults({
		submitHandler: function () {
			$('#modal-camera-swafoto').modal('show');
			camera();
			$('#take-shoots').click(function(){
				shoot('form-survey',$id,$param);
			});
		}
	});
	$('#form-survey').validate({
		rules: {
			tanggal_survey: {
				required: true
			},
			nama_debitur: {
				required: true
			},
			alamat_domisili: {
				required: true
			},
			plafon_pengajuan: {
				required: true
			},
			hasil_survey: {
				required: true
			},
			keterangan_hasil_survey: {
				required: true
			},
			swafoto: {
				required: true
			},

		},
		messages: {
			tanggal_survey: "Please accept our tanggal survey",
			nama_debitur: "Please accept our nama debitur",
			alamat_domisili: "Please accept our alamat domisili",
			plafon_pengajuan: "Please accept our plafon pengajuan",
			hasil_survey: "Please accept our hasil survey",
			keterangan_hasil_survey: "Please accept our keterangan hasil survey",
			swafoto: "Please accept our swafoto",
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
}

function formVisit($id,$param){
	$.validator.setDefaults({
		submitHandler: function () {
			$('#modal-camera-swafoto').modal('show');
			camera();
			$('#take-shoots').click(function(){
				shoot('form-visit',$id,$param);
			});
		}
	});
	$('#form-visit').validate({
		rules: {
			tanggal_visit: {
				required: true
			},
			no_kontrak: {
				required: true
			},
			nama_debitur: {
				required: true
			},
			alamat_domisili: {
				required: true
			},
			hasil_visit: {
				required: true
			},
			swafoto: {
				required: true
			},
		},
		messages: {
			tanggal_visit: "Please accept our tanggal visit",
			no_kontrak: "Please accept our no kontrak",
			nama_debitur: "Please accept our nama debitur",
			alamat_domisili: "Please accept our alamat domisili",
			hasil_visit: "Please accept our hasil visit",
			swafoto: "Please accept our swafoto",
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
}

function formPromosi($id,$param){
	$.validator.setDefaults({
		submitHandler: function () {
			$('#modal-camera-swafoto').modal('show');
			camera();
			$('#take-shoots').click(function(){
				shoot('form-promosi',$id,$param);
			});
		}
	});
	$('#form-promosi').validate({
		rules: {
			tanggal_promosi: {
				required: true
			},
			lokasi_promosi: {
				required: true
			},
			swafoto: {
				required: true
			},
		},
		messages: {
			tanggal_promosi: "Please accept our tanggal promosi",
			lokasi_promosi: "Please accept our lokasi promosi",
			swafoto: "Please accept our swafoto",
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.form-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
}
// shoot('form-survey',$id,$param);
function shoot(data='',id='',param=''){
	if (data==='form-promosi') {
		var image = '';
		var tanggal_visit = $('#tanggal_promosi').val();
		var latitude = $('#latitude').val();
		var longitude = $('#longitude').val();
		Webcam.snap( function(data_uri) {
			image = data_uri;
		});
		var datas={
			'activity':'PROMOSI',
			'tanggal_visit': tanggal_visit,
			'latitude': latitude,
			'longitude': longitude,
			'swafoto':image
		};
	}else if (data==='form-visit') {
		Webcam.snap( function(data_uri) {
			image = data_uri;
		});
		var datas={
			'activity':'VISIT CGC',
			'tanggal_visit':$('#tanggal_visit').val(),
			'nomor_kontrak':$('#no_kontrak').val(),
			'nama_debitur':$('#nama_debitur').val(),
			'alamat_domisili':$('#alamat_domisili').val(),
			'hasil_visit':$('#hasil_visit').val(),
			'swafoto':image
		};
	}else if (data==='form-survey') {
		Webcam.snap( function(data_uri) {
			image = data_uri;
		});
		var datas={
			'activity':'SURVEY',
			'tanggal_survey':$('#tanggal_survey').val(),
			'nama_debitur':$('#nama_debitur').val(),
			'alamat_domisili':$('#alamat_domisili').val(),
			'plafon_pengajuan':$('#plafon_pengajuan').val(),
			'hasil_survey':$('#hasil_survey').val(),
			'keterangan_survey':$('#keterangan_hasil_survey').val(),
			'swafoto':image
		};
	}

	if (param === 'edit') {
		$.ajax({
			url: "<?= config_item('api_url'); ?>api/master/Activity/ao/update/"+id,
			type: 'POST',
			headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
			data: datas,
			success: function(response) {

				if (response.status='success') {
					Webcam.reset();
					location.reload();
					Swal.fire(
						'success',
						'Data berhasil ditambahkan',
						'success'
						)
					$('.bd-example-modal-lg').modal('hide');
					filter();
				}else{
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Something went wrong!',
						footer: '<a href>Why do I have this issue?</a>'
					})
				}
			}
		});
	}else{
		$.ajax({
			url: "<?= config_item('api_url'); ?>api/master/Activity/ao",
			type: 'POST',
			headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
			data: datas,
			success: function(response) {
				if (response.status='success') {
					Webcam.reset();
					location.reload();
					Swal.fire(
						'success',
						'Data berhasil ditambahkan',
						'success'
						)
					$('.bd-example-modal-lg').modal('hide');
					filter();
				}else{
					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Something went wrong!',
						footer: '<a href>Why do I have this issue?</a>'
					})
				}
			}
		});
	}
	// console.log(urlPost);
	
}

function camera(){
	$('.btn-camera').css("display", "none");
	Webcam.set({
		width: 290,
		height: 180,
		image_format: 'jpeg',
		jpeg_quality: 90
	});
	Webcam.attach( '#my_camera' );
}

function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else {
		view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
	}
}
function showPosition(position) {
	$('#latitude').val(position.coords.latitude);
	$('#longitude').val(position.coords.longitude);
}

function showError(error) {
	switch(error.code) {
		case error.PERMISSION_DENIED:
		view.innerHTML = "Yah, mau deteksi lokasi tapi ga boleh :("
		break;
		case error.POSITION_UNAVAILABLE:
		view.innerHTML = "Yah, Info lokasimu nggak bisa ditemukan nih"
		break;
		case error.TIMEOUT:
		view.innerHTML = "Requestnya timeout bro"
		break;
		case error.UNKNOWN_ERROR:
		view.innerHTML = "An unknown error occurred."
		break;
	}
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	infoWindow.setPosition(pos);
	infoWindow.setContent(
		browserHasGeolocation
		? "Error: The Geolocation service failed."
		: "Error: Your browser doesn't support geolocation."
		);
	infoWindow.open(map);
}
</script>