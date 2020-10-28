<script type="text/javascript">
	$(function(){
		tampil_data();
	});
	function pagination($page){
		var page=$page;
		tampil_data(page);
	}
	function tampil_data(page=''){
		$.ajax({
			url: "<?= base_url(); ?>Target_lending_controller/tampil_data",
			data:{page:page},
			type: "POST",
			beforeSend: function(){
				$("#loading").css("display", "block");
			},
			success: function(response) {
				$("#loading").css("display", "none");
				$('#data-target-lending').html(response);
			}
		});
	}
	function create(){
		$('#modal-xl').modal('show')
		$.ajax({
			url: "<?= base_url(); ?>Target_lending_controller/create",
			data:{id:'x'},
			type: "POST",
			success: function(response) {
		    	$('.modal-content').html(response);
		    	var dataUrl="<?= base_url(); ?>Target_lending_controller/store";
		    	validation(dataUrl);
				$('#exampleInputAreaKerja').change(function(){
					$.ajax({
						url: "<?= base_url(); ?>Target_lending_controller/get_area",
						data:{name_area:$(this).val()},
						type: "POST",
						success: function(response) {
							var data=JSON.parse(response);
							$('#exampleInputCode').val(data['kode_kantor']);
							$('#exampleInputArea').val(data['kode_area']);
						}
					});
				});
			}
		});
	}
	function edit($id){
		$.ajax({
			url: "<?= base_url(); ?>Target_lending_controller/edit",
			data:{id:$id},
			type: "POST",
			success: function(response) {
		    	$('.modal-content').html(response);
		    	var dataUrl="<?= base_url(); ?>Target_lending_controller/update";
		    	validation(dataUrl);
				$('#exampleInputAreaKerja').change(function(){
					$.ajax({
						url: "<?= base_url(); ?>Target_lending_controller/get_area",
						data:{name_area:$(this).val()},
						type: "POST",
						success: function(response) {
							var data=JSON.parse(response);
							$('#exampleInputCode').val(data['kode_kantor']);
							$('#exampleInputArea').val(data['kode_area']);
						}
					});
				});
			}
		});
	}
	function hapus($id){
		Swal.fire({
			title: 'Apakah anda yakin?',
			text: 'Anda tidak akan dapat memulihkan file ini kembali!',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Ya, hapus sekarang!',
			cancelButtonText: 'Tidak, mungkin lain kali.'
		}).then((result) => {
			if (result.value) {
				$.ajax({
					url: "<?= base_url(); ?>Target_lending_controller/destroy",
					data:{id:$id},
					type: "POST",
					success: function(response) {
				    	Swal.fire(
						'Dihapus!',
						'File anda berhasil dihapus.',
						'success'
						)
						tampil_data();
					},
					error: function(jqXHR,error, errorThrown) {
						if(jqXHR.status&&jqXHR.status==400){
							alert(jqXHR.responseText);
						}else{
							alert("Something went wrong");
						}
					}
				});
			} else if (result.dismiss === Swal.DismissReason.cancel) {
				Swal.fire(
					'Dibatalkan',
					'File kamu masih tersimpan. :)',
					'error'
					)
			}
		})
	}
	function validation($url){
		$.validator.setDefaults({
			submitHandler: function () {
				var dataPost=$('#edit-master').serialize();
				$.ajax({
					url: $url,
					data:dataPost,
					type: "POST",
					success: function(response) {
						var res = JSON.parse(response);
						if (res['status']==='success') {
							Swal.fire(
								'Berhasil Tersimpan.',
								'Perubahan Data Tersimpan.',
								'success'
								)
							tampil_data();
						}else{
							Swal.fire(
								'Gagal Tersimpan.',
								'Terjadi kesalahan.',
								'danger'
								)
							tampil_data();
						}
						$('#modal-xl').modal('hide');
					}
				});
			}
		});
		$('#edit-master').validate({
			rules: {
				kode_kantor: {
					required: true
				},
				area_kerja: {
					required: true
				},
				area: {
					required: true
				},
				target: {
					required: true
				},
				bulan: {
					required: true
				},
				tahun: {
					required: true
				}
			},
			messages: {
				kode_kantor: "Please accept our kode kantor",
				area_kerja: "Please accept our area kerja",
				area: "Please accept our area",
				target: "Please accept our target",
				bulan: "Please accept our bulan",
				tahun: "Please accept our tahun"
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
