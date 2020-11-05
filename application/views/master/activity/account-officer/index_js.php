<script type="text/javascript">
	$(function(){
		data();
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
					formSurvey();
				}else if (form==='visit') {
					formVisit();
				}else if (form==='promosi') {
					formPromosi();
				}
			}
		});
	}

	function formSurvey(){
		$.validator.setDefaults({
			submitHandler: function () {
				alert( "Form successful submitted!" );
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

	function formVisit(){
		$.validator.setDefaults({
			submitHandler: function () {
				alert( "Form successful submitted!" );
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

	function formPromosi(){
		$.validator.setDefaults({
			submitHandler: function () {
				alert( "Form successful submitted!" );
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
</script>