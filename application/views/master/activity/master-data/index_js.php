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
			url: "<?= base_url(); ?>master-data/activity/Masterdata_activity_controller/data",
			data:{page:page,filter:filter},
			type: "POST",
			beforeSend: function() {
				$('.spinner').css("display", "block");
			},
			success: function(response) {
				$('.tabel-data-activity').html(response);
				$('.spinner').css("display", "none");
			}
		});
	}
	function create(){
		$('.bd-example-modal-lg').modal('show')
		$.ajax({
			url: "<?= base_url(); ?>master-data/activity/Masterdata_activity_controller/create",
			type: "GET",
			success: function(response) {
				$('.modal-body').html(response);
				var urlCreate="<?= base_url(); ?>master-data/activity/Masterdata_activity_controller/store";
				validation(urlCreate);
			}
		});
	}
	function edit($id){
		$('.bd-example-modal-lg').modal('show')
		$.ajax({
			url: "<?= base_url(); ?>master-data/activity/masterdata-activity-controller/edit",
			data:{'id':$id},
			type: "POST",
			success: function(response) {
				$('.modal-body').html(response);
				var urlUpdate="<?= base_url(); ?>master-data/activity/masterdata-activity-controller/update/"+$id;
				validation(urlUpdate);
			}
		});
	}
	function destroy($id){
		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.isConfirmed) {
				$.ajax({
					url: "<?= base_url(); ?>master-data/activity/masterdata-activity-controller/delete",
					data:{'id':$id},
					type: "POST",
					success: function(response) {
						data();
						Swal.fire(
							'Deleted!',
							'Your file has been deleted.',
							'success'
							)
					}
				});
			}
		})
	}
	function validation($url){
		$.validator.setDefaults({
			submitHandler: function () {
				var data=$('#form-masters-activity').serialize();
			// var stateAction='store';
			$.ajax({
				url: $url,
				data:data,
				type: "POST",
					beforeSend: function() {
						$('.spinner').css("display", "block");
						$('.save').css("display", "none");
					},
					success: function(response) {
						Swal.fire(
							'Berhasil Tersimpan.',
							'Perubahan Data Tersimpan.',
							'success'
							)
						$('.spinner').css("display", "none");
						$('.save').css("display", "block");
						var page='';
						var filter='';
						$.ajax({
							url: "<?= base_url(); ?>master-data/activity/Masterdata_activity_controller/data",
							data:{page:page,filter:filter},
							type: "POST",
							beforeSend: function() {
								$('.spinner').css("display", "block");
							},
							success: function(response) {
								$('.tabel-data-activity').html(response);
								$('.spinner').css("display", "none");
							}
						});
						$('.bd-example-modal-lg').modal('hide');
					}
				});
			}
		});
		$('#form-masters-activity').validate({
			rules: {
				nama_aktivitas: {
					required: true,
				},
				target_aktivitas: {
					required: true,
				},
				durasi_aktivitas: {
					required: true,
				},
			},
			messages: {
				nama_aktivitas: "Please accept our nama aktivitas",
				target_aktivitas: "Please accept our target aktivitas",
				durasi_aktivitas: "Please accept our durasi aktivitas",
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