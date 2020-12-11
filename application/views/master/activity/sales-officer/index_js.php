<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		filter();
	});	
// dataTable Index data::started
function filter(){
	var filter=$('.cari-berdasarkan-data').val();
	var page='1';
	data(filter,page);
}
function pagination($page){
	var filter=$('.cari-berdasarkan-data').val();
	var page=$page;
	data(filter,page);
}
function data(filter='',page=''){
	$.post( "<?= base_url(); ?>activity/so/activitySOController/data", { page:page,filter:filter })
	.done(function( response ) {
		$('.tabel-data').html(response);
	});
}
function destroy($id){
	Swal.fire({
		title: 'Kamu yakin akan menghapus data ini?',
		text: "Anda tidak akan dapat mengembalikan ini!",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Ya, hapus!'
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: "http://103.31.232.146/API_WEBTOOL3/api/master/Activity/so/index/"+$id+"/delete",
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
function edit($id,$param){
	Webcam.reset();
	$.ajax({
		url: "http://103.31.232.146/API_WEBTOOL3/api/master/Activity/so/index/"+$id+"/id",
		type: "GET",
		headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
		success: function(response) {
			console.log(response);
			var url="http://103.31.232.146/API_WEBTOOL3/api/master/Activity/so/update/"+$id;
			if ($param === 'visitEdit') {
				visit(url);
				$('#no_kontrak').val(response.data.nomor_so);
				$('#nama_debitur').val(response.data.nama_debitur);
				$('#alamat_debitur').val(response.data.alamat_domisili);
				$('#hasil_visit').val(response.data.hasil_visit);
			}else if ($param ==='maintain') {
	  			maintain(url);
		  		$("#kode_mb").val(response.data.kode_mb);
		  		$("#nama_mb").val(response.data.nama_mb);
		  		$("#alamat_domisili").val(response.data.alamat_domisili);
		  	}else if ($param ==='promosi') {
		  		promosi(url);
		  	}
	  }
	});
}
// dataTable Index data::ended

// dataTable custom started serverside
function filterModals($param){
	var filter=$('#search-data-debitur').val();
	var page='1';
	var param=$param;
	dataModals(filter,page,param);
}
function paginationModals($page,$param){
	var filter=$('#search-data-debitur').val();
	var page=$page;
	var param=$param;
	dataModals(filter,page,param);
}
function dataModals(filter='',page='',param=''){
	$.post( "<?= base_url(); ?>activity/so/activitySOController/dataselect", {page:page,filter:filter,param:param}, function( response ) {
		$('#content-modal-data-selected').html(response);
	});
}
// dataTable custom started serverside

// create data started
function clickForm(){
	Webcam.reset();
	var form = $('.form').val();
	var url="http://103.31.232.146/API_WEBTOOL3/api/master/Activity/so";
	if (form==='formRO') {
		visit(url);
	}else if (form==='formMB') {
		maintain(url);
	}else if (form==='formPromosi') {
		promosi(url);
	}
}
// create data ended

// utility form validation::started
function visit($url){
	$('.form-visit').modal('show');
	$.validator.setDefaults({
		submitHandler: function () {
			getLocation();
			$("#swafoto-visit-ro").modal("show");
			Webcam.set({
				width: 290,
				height: 180,
				image_format: 'jpeg',
				jpeg_quality: 90
			});
			Webcam.attach( '#camera-swafoto-form-visit-ro' );
			$("#shoot-camera-swafoto-form-visit-ro").click(function(){
				Webcam.snap( function(data_uri) {
					image = data_uri;
				});
				var dataPost={
					activity:'VISIT RO',
					nomor_kontrak:$("#no_kontrak").val(),
					nama_mb:'',
					hasil_maintain:'',
					nama_debitur:$("#nama_debitur").val(),
					alamat_domisili:$("#alamat_debitur").val(),
					hasil_visit:$("#hasil_visit").val(),
					latitude:$("#latitude-form-visit-ro").val(),
					longitude:$("#longitude-form-visit-ro").val(),
					swafoto:image,
				};
				$.ajax({
					url: $url,
					data:dataPost,
					type: "POST",
					headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
					success: function(response) {
						if (response.code===200) {
							Webcam.reset();
							$("#swafoto-visit-ro").modal("hide");
							$('.form-visit').modal('hide');
							Swal.fire(
								'Data Visit RO Ditambahkan',
								'success'
								)
							filter();
							location.reload();
						}
					}
				});
			})
		}
	});
	$('#form-visit').validate({
		rules: {
			no_kontrak: {
				required: true
			},
			nama_debitur: {
				required: true
			},
			alamat_debitur: {
				required: true
			},
			hasil_visit: {
				required: true
			},
		},
		messages: {
			no_kontrak: "Please accept our no kontrak",
			nama_debitur: "Please accept our nama debitur",
			alamat_debitur: "Please accept our alamat debitur",
			hasil_visit: "Please accept our hasil visit",
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.input-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
}

function maintain($url){
	$('.form-maintain').modal('show');
	$.validator.setDefaults({
		submitHandler: function () {
			getLocation();
			$("#swafoto-maintain-mb").modal("show");
			Webcam.set({
				width: 290,
				height: 180,
				image_format: 'jpeg',
				jpeg_quality: 90
			});
			Webcam.attach( '#camera-swafoto-form-maintain-mb' );
			$("#shoot-camera-swafoto-form-maintain-mb").click(function(){
				Webcam.snap( function(data_uri) {
					image = data_uri;
				});
				var dataPost={
					activity:'MAINTAIN MB',
					nomor_kontrak:'',
					nama_mb:$("#nama_mb").val(),
					hasil_maintain:$("#hasil_maintain").val(),
					nama_debitur:'',
					alamat_domisili:$("#alamat_domisili").val(),
					hasil_visit:'',
					latitude:$("#latitude-form-maintain-mb").val(),
					longitude:$("#longitude-form-maintain-mb").val(),
					swafoto:image,
				};
				$.ajax({
					url: $url,
					data:dataPost,
					type: "POST",
					headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
					success: function(response) {
						if (response.code===200) {
							Webcam.reset();
							$("#swafoto-maintain-mb").modal("hide");
							$('.form-maintain').modal('hide');
							Swal.fire(
								'Data Maintain MB Ditambahkan',
								'success'
								)
							filter();
								location.reload();
							}
						}
					});
			})
		}
	});
	$('#form-maintain').validate({
		rules: {
			nama_mb: {
				required: true
			},
			alamat_domisili: {
				required: true
			},
			hasil_maintain: {
				required: true
			},
		},
		messages: {
			nama_mb: "Please accept our no kontrak",
			alamat_domisili: "Please accept our nama debitur",
			hasil_maintain: "Please accept our alamat debitur",
		},
		errorElement: 'span',
		errorPlacement: function (error, element) {
			error.addClass('invalid-feedback');
			element.closest('.input-group').append(error);
		},
		highlight: function (element, errorClass, validClass) {
			$(element).addClass('is-invalid');
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass('is-invalid');
		}
	});
}

function promosi($url){
	getLocation();
	$('.form-promosi').modal('show');
	Webcam.set({
		width: 290,
		height: 180,
		image_format: 'jpeg',
		jpeg_quality: 90
	});
	Webcam.attach( '#camera-swafoto-form-promosi' );
	$("#shoot-camera-swafoto-form-promosi").click(function(){
		Webcam.snap( function(data_uri) {
			image = data_uri;
		});
		var dataPost={
			activity:'PROMOSI',
			nomor_kontrak:'',
			nama_mb:'',
			hasil_maintain:'',
			nama_debitur:'',
			alamat_domisili:'',
			hasil_visit:'',
			latitude:$("#latitude-form-promosi").val(),
			longitude:$("#longitude-form-promosi").val(),
			swafoto:image,
		};
		$.ajax({
			url: $url,
			data:dataPost,
			type: "POST",
			headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
			success: function(response) {
				if (response.code===200) {
					Webcam.reset();
					$('.form-promosi').modal('hide');
					Swal.fire(
						'Data Promosi Ditambahkan',
						'success'
						)
					filter();
						location.reload();
					}
				}
			});
	})
}
// utility form validation::ended

$(".btn-find-debitur-visit-ro").click(function(){
	$("#staticBackdrop-modal-debitur").modal('show');
	filterModals('ro');
});
$(".btn-find-debitur-maintain-mb").click(function(){
	$("#staticBackdrop-modal-debitur").modal('show');
	filterModals('mb');
});
function pickData($nomor_kontrak,$param){
	if ($param==='ro') {
		$.post( "<?= base_url(); ?>activity/so/activitySOController/detailKontrak", { nomor_kontrak:$nomor_kontrak }, function( response ) {
			var res=JSON.parse(response);
			$("#no_kontrak").val(res['data']['nomor_kontrak']);
			$("#nama_debitur").val(res['data']['nama_debitur']);
			$("#alamat_debitur").val(res['data']['alamat_domisili']);
			$("#staticBackdrop-modal-debitur").modal('hide');
		});
	}else if ($param==='mb') {
		$.post( "<?= base_url(); ?>activity/so/activitySOController/detailNamaMB", { kode_mb:$nomor_kontrak }, function( response ) {
			var res=JSON.parse(response);
			$("#kode_mb").val(res['data']['kode_mb']);
			$("#nama_mb").val(res['data']['nama_mb']);
			$("#alamat_domisili").val(res['data']['alamat_domisili']);
			$("#staticBackdrop-modal-debitur").modal('hide');
		});
	}
}
function getLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(showPosition, showError);
	} else {
		view.innerHTML = "Yah browsernya ngga support Geolocation bro!";
	}
}
function showPosition(position) {
	$('.latitude').val(position.coords.latitude);
	$('.longitude').val(position.coords.longitude);
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