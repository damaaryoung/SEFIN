<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		template();
	})
	function template(){
		if($(".template-selected-data").val()==='so'){
			var template="TemplateSO";
			var idShow="so";
			var idHide="ao";
		}else{
			var template="TemplateAO";
			var idShow="ao";
			var idHide="so";
		}
		$.post( "<?= base_url() ?>activity/hm/ActivityHMController/"+template, function( responseTemplate ) {
			$( ".rendered-template" ).html( responseTemplate );
			$("#"+idShow+"-data-filtered-selected").css("display", "block");
			$("#"+idHide+"-data-filtered-selected").css("display", "none");
			filter(idShow);
			$(".btn-ao").click(function(){
				$("#exampleModalLong-ao-form").modal("show");
				$.post( "<?= base_url(); ?>activity/hm/ActivityHMController/form_create_ao", {formpick:$(".data-selected-view-ao").val()}, function( formTemplate ) {
					$( ".modal-ao-form-data" ).html( formTemplate );
					($(".data-selected-view-ao").val()==="SURVEY") ? formValidationSurvey('create','<?php echo config_item("api_url") ?>api/master/hmhb/create') : formValidationVisitRO('create','<?php echo config_item("api_url") ?>api/master/hmhb/create'); 
				});
			})
			$(".btn-so").click(function(){
				$("#exampleModalLong-so-form").modal("show");
				$.post( "<?= base_url(); ?>activity/hm/ActivityHMController/form_create_so", {formpick:$(".data-selected-view-so").val()}, function( formTemplate ) {
					$( ".modal-so-form-data" ).html( formTemplate );
					($(".data-selected-view-so").val()==="VISIT%20RO") ? formValidationVisitROSO('create','<?php echo config_item("api_url") ?>api/master/hmhb/create') : formValidationMaintainMBSO('create','<?php echo config_item("api_url") ?>api/master/hmhb/create'); 
				});
			})
		});
	}
	function findPICSO(){
		$("#exampleModalLong-so-data").modal("show");
		paginationSO(1);
	}
	function paginationSO($page){
		SOData($page);
	}
	function SOData(page=''){
		$.ajax({
			url : "<?= base_url(); ?>activity/hm/ActivityHMController/data_so",
			type: "POST",
			data: { page:page },
			beforeSend: function(){
				$("#loading-pic").show();
				$("#table-pic").hide();
			},
			success:  function (picData) {
				$( ".modal-so-pic-data" ).html( picData );
				$("#loading-pic").hide();
				$("#table-pic").show();
			},
		});
	}
	function pickSO($nama_ao){
		$(".sales_officer").val($nama_ao);
		$("#exampleModalLong-so-data").modal("hide");
	}

	function findAO(){
		$("#exampleModalLong-ao-data").modal("show");
		paginationAO(1);
	}
	function paginationAO($page){
		AOData($page);
	}
	function AOData(page=''){
		$.ajax({
			url : "<?= base_url(); ?>activity/hm/ActivityHMController/data_ao",
			type: "POST",
			data: { page:page },
			beforeSend: function(){
				$("#loading-pic").show();
				$("#table-pic").hide();
			},
			success:  function (picData) {
				$( ".modal-ao-pic-data" ).html( picData );
				$("#loading-pic").hide();
				$("#table-pic").show();
			},
		});
	}
	function pickAo($nama_ao){
		$("#account_officer").val($nama_ao);
		$("#exampleModalLong-ao-data").modal("hide");
	}

	function findCadeb(){
		$("#exampleModalLong-ao-data").modal("show");
		paginationCadeb(1);
	}
	function paginationCadeb($page){
		Cadeb($page);
	}
	function Cadeb(page=''){
		$.ajax({
			url : "<?= base_url(); ?>activity/hm/ActivityHMController/data_cadeb",
			type: "POST",
			data: { page:page },
			beforeSend: function(){
				$("#loading-pic").show();
				$("#table-pic").hide();
			},
			success:  function (picData) {
				$( ".modal-ao-pic-data" ).html( picData );
				$("#loading-pic").hide();
				$("#table-pic").show();
			},
		});
	}
	function pickDeb($nama_debitur,$nomor_so,$alamat){
		$("#cadeb-picker-data").val($nama_debitur);
		$(".no_kontrak").val($nomor_so);
		$(".alamat_debitur").val($alamat);
		$("#exampleModalLong-ao-data").modal("hide");
	}

	function findPICAO(){
		$("#exampleModalLong-ao-data").modal("show");
		paginationpic(1);
	}
	function paginationpic($page){
		pic($page);
	}
	function pic(page=''){
		$.ajax({
			url : "<?= base_url(); ?>activity/hm/ActivityHMController/data_pic",
			type: "POST",
			data: { page:page },
			beforeSend: function(){
				$("#loading-pic").show();
				$("#table-pic").hide();
			},
			success:  function (picData) {
				$( ".modal-ao-pic-data" ).html( picData );
				$("#loading-pic").hide();
				$("#table-pic").show();
			},
		});
	}
	function pickPIC($index){
		$("#pic-picker-data").val($index);
		$("#exampleModalLong-ao-data").modal("hide");
	}
// dataTable Index data::started
function filter(idShow=""){
	var url=$("#data-table").attr("data-url");
	var filter=$('.data-selected-view-'+idShow).val();
	var page='1';
	data(filter,page,url);
}
function pagination($page){
	var url=$("#data-table").attr("data-url");
	var filter=$('.data-selected-view').val();
	var page=$page;
	data(filter,page,url);
}
function data(filter='',page='',url=''){
	$.ajax({
		url : "<?= base_url(); ?>activity/hm/ActivityHMController/"+url,
		type:"POST",
		data: { page:page,filter:filter },
		beforeSend: function(){
			$("#loading").show();
		},
		success:  function (response) {
			$("#loading").hide();
			$('#data-table').html(response);
		},
	});
}
// dataTable Index data::ended

// function update & delete ::started
function edit($id,$param){
	if ($param==="VISIT RO") {
		var modalID="exampleModalLong-so-form";
		var formRendered="modal-so-form-data";
		var keyurl="form_update_so";
	}else if ($param==="MAINTAIN MB") {
		var modalID="exampleModalLong-so-form";
		var formRendered="modal-so-form-data";
		var keyurl="form_update_so";
	}else if ($param==="SURVEY") {
		var modalID="exampleModalLong-ao-form";
		var formRendered="modal-ao-form-data";
		var keyurl="form_update_ao";
	}else if ($param==="VISIT CGC") {
		var modalID="exampleModalLong-ao-form";
		var formRendered="modal-ao-form-data";
		var keyurl="form_update_ao";
	}
	$("#"+modalID).modal("show");
	var url="<?= base_url(); ?>activity/hm/ActivityHMController/"+keyurl;
	$.post( url, {form:$param}, function(formTemplate) {
		$( "."+formRendered ).html( formTemplate );
		if ($param==="VISIT RO") {
			formValidationVisitROSO('update','<?php echo config_item("api_url") ?>api/master/hmhb/update/'+$id);
		}else if ($param==="MAINTAIN MB") {
			formValidationMaintainMBSO('update','<?php echo config_item("api_url") ?>api/master/hmhb/update/'+$id);
		}else if ($param==="SURVEY") {
			formValidationSurvey('update','<?php echo config_item("api_url") ?>api/master/hmhb/update/'+$id);
		}else if ($param==="VISIT CGC") {
			formValidationVisitRO('update','<?php echo config_item("api_url") ?>api/master/hmhb/update/'+$id);
		}
		$.ajax({
			url: "<?php echo config_item("api_url") ?>api/master/hmhb/index/detail/"+$id,
			type: 'GET',
			headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
			success: function(response) {
					// console.log(response.data);
					if ($param==="VISIT RO") {
						$(".no_kontrak").val(response.data.no_kontrak);
						$(".cadeb").val(response.data.nama_debitur);
						$(".alamat_debitur").val(response.data.alamat_debitur);
						$(".sales_officer").val(response.data.nama_pic);
					}else if ($param==="MAINTAIN MB") {
						$(".nama_mb").val(response.data.nama_mb);
						$(".alamat_mb").val(response.data.alamat_mb);
						$(".sales_officer").val(response.data.nama_pic);
					}else if ($param==="SURVEY") {
						$(".no_kontrak").val(response.data.no_kontrak);
						$(".cadeb").val(response.data.nama_debitur);
						$(".alamat_debitur").val(response.data.alamat_debitur);
						$(".account_officer").val(response.data.nama_pic);
					}else if ($param==="VISIT CGC") {
						$(".no_kontrak").val(response.data.no_kontrak);
						$(".cadeb").val(response.data.nama_debitur);
						$(".alamat_debitur").val(response.data.alamat_debitur);
						$(".account_officer").val(response.data.nama_pic);
					}
				}
			});
	});
}

function destroy($id,$param){
	var urlDestroy='<?= config_item('api_url'); ?>api/master/hmhb/delete/'+$id;
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
					filter($param);
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
// function update & delete ::ended

// function form data::started
function formValidationVisitRO($param,$url){
	$.validator.setDefaults({
		submitHandler: function () {
			var dataPost={
				'pic':'AO',
				'activity':'VISIT CGC',
				'no_kontrak':$(".no_kontrak").val(),
				'nama_mb':'',
				'nama_debitur':$(".nama_debitur").val(),
				'alamat_mb':'',
				'alamat_debitur':$(".alamat_debitur").val(),
				'nama_pic':$(".pic").val(),
			};
			// alert("param:"+$param+" url:"+$url);
			$.ajax({
				url: $url,
				type: 'POST',
				headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
				data: dataPost,
				success: function(response) {
					if (response.status='success') {
						Swal.fire(
							'success',
							'Data berhasil ditambahkan',
							'success'
							)
						$("#exampleModalLong-ao-form").modal("hide");
						filter('ao');
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
	});
	$('#form-visit-cgc').validate({
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
			pic: {
				required: true
			},
		},
		messages: {
			no_kontrak: "Please accept our no kontrak !!",
			nama_debitur: "Please accept our nama debitur !!",
			alamat_debitur: "Please accept our alamat debitur !!",
			pic: "Please accept our PIC !!",
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

function formValidationSurvey($param,$url){
	$.validator.setDefaults({
		submitHandler: function () {
			var dataPost={
				'pic':'AO',
				'activity':'SURVEY',
				'no_kontrak':$(".no_kontrak").val(),
				'nama_mb':'',
				'nama_debitur':$(".cadeb").val(),
				'alamat_mb':'',
				'alamat_debitur':$(".alamat_debitur").val(),
				'nama_pic':$(".account_officer").val(),
			};
			$.ajax({
				url: $url,
				type: 'POST',
				headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
				data: dataPost,
				success: function(response) {
					if (response.status='success') {
						Swal.fire(
							'success',
							'Data berhasil ditambahkan',
							'success'
							)
						$("#exampleModalLong-ao-form").modal("hide");
						filter('ao');
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
	});
	$('#form-submit-data-survey-45345234234234234543534').validate({
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
			account_officer: {
				required: true
			},
		},
		messages: {
			no_kontrak: "Please accept our no kontrak !!",
			nama_debitur: "Please accept our nama debitur !!",
			alamat_debitur: "Please accept our alamat debitur !!",
			account_officer: "Please accept our account officer !!",
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
function formValidationVisitROSO($param,$url){
	$.validator.setDefaults({
		submitHandler: function () {
			var dataPost={
				'pic':'SO',
				'activity':'VISIT RO',
				'no_kontrak':$(".no_kontrak").val(),
				'nama_mb':'',
				'nama_debitur':$(".cadeb").val(),
				'alamat_mb':'',
				'alamat_debitur':$(".alamat_debitur").val(),
				'nama_pic':$(".sales_officer").val(),
			};
			$.ajax({
				url: $url,
				type: 'POST',
				headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
				data: dataPost,
				success: function(response) {
					if (response.status='success') {
						Swal.fire(
							'success',
							'Data berhasil ditambahkan',
							'success'
							)
						$("#exampleModalLong-so-form").modal("hide");
						filter('so');
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
	});
	$('#form-visit-ro-so').validate({
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
			pic: {
				required: true
			},
		},
		messages: {
			no_kontrak: "Please accept our no kontrak !!",
			nama_debitur: "Please accept our nama debitur !!",
			alamat_debitur: "Please accept our alamat debitur !!",
			pic: "Please accept our sales officer PIC !!",
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
function formValidationMaintainMBSO($param,$url){
	$.validator.setDefaults({
		submitHandler: function () {
			var dataPost={
				'pic':'SO',
				'activity':'MAINTAIN MB',
				'no_kontrak':'',
				'nama_mb':$(".nama_mb").val(),
				'nama_debitur':'',
				'alamat_mb':$(".alamat_mb").val(),
				'alamat_debitur':'',
				'nama_pic':$(".sales_officer").val(),
			};
			$.ajax({
				url: $url,
				type: 'POST',
				headers: {'Authorization': 'Bearer ' + localStorage.getItem('token')},
				data: dataPost,
				success: function(response) {
					if (response.status='success') {
						Swal.fire(
							'success',
							'Data berhasil ditambahkan',
							'success'
							)
						$("#exampleModalLong-so-form").modal("hide");
						filter('so');
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
	});
	$('#form-maintain-mb-so').validate({
		rules: {
			nama_mb: {
				required: true
			},
			alamat_mb: {
				required: true
			},
			pic: {
				required: true
			},
		},
		messages: {
			nama_mb: "Please accept our nama mb !!",
			alamat_mb: "Please accept our alamat mb !!",
			pic: "Please accept our sales officer PIC !!",
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
// function form data::ended
</script>