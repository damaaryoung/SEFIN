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
			url: "<?= base_url(); ?>dashboard/Dashboard_SO_AO_Controller/data",
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
</script>