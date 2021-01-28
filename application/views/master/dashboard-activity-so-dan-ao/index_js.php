<script type="text/javascript">
	jQuery(function ($){
		$(document).ajaxStop(function(){
			$("#ajax_loader").hide();
		});
		$(document).ajaxStart(function(){
			$("#ajax_loader").show();
		});    
	});   
	$(function () {
		$("#area-picker").change(function(){
			$.ajax({
				url : "<?= base_url(); ?>dashboard/Dashboard_SO_AO_Controller/get_cabang",
				method : "POST",
				data : {id: $(this).val()},
				async : true,
				dataType : 'json',
				success: function(data){

					var html = '';
					var i;
					for(i=0; i<data.length; i++){
						html += '<option value='+data[i].id+'>'+data[i].nama+'</option>';
					}
					$('#cabang-picker').html(html);

				}
			});
			return false;
		})
		$.validator.setDefaults({
			submitHandler: function () {
				var datapost=$('#dashboard-filter-data-activity-so-ao').serialize();
				$.post( "<?= base_url(); ?>dashboard/Dashboard_SO_AO_Controller/data", datapost, function(response) {
					$( ".tabel-data" ).html( response );
				});
			}
		});
		$('#dashboard-filter-data-activity-so-ao').validate({
			rules: {
				datafilter: {
					required: true
				},
				bulan: {
					required: true
				},
				tahun: {
					required: true
				},
				area: {
					required: true
				},
				cabang: {
					required: true
				},
			},
			messages: {
				datafilter: "Please accept our data filter",
				bulan: "Please accept our bulan",
				tahun: "Please accept our tahun",
				area: "Please accept our area",
				cabang: "Please accept our cabang",
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
	});
</script>