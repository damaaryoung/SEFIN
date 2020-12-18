<div class="card-header">
	<h3 class="card-title">Tambah Data</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form id="form-masters-activity" novalidate="novalidate">
	<div class="card-body">
		<div class="form-group">
			<label>Jenis Aktivitas</label>
			<select class="form-control cari-berdasarkan" name="pic">
				<option value="SO">SO</option>
				<option value="AO">AO</option>
				<option value="Teller">Teller</option>
				<option value="Admin">Admin</option>
				<option value="Head Opr">Head Opr</option>
				<option value="Centro Staff">Centro Staff</option>
			</select>
		</div>
		<div class="form-group">
			<label>Nama Aktivitas</label>
			<input type="text" name="nama_aktivitas" class="form-control" placeholder="Enter Nama Aktivitas"></input>
		</div>
		<div class="form-group">
			<label>Target Aktivitas</label>
			<input type="text" name="target_aktivitas" class="form-control" placeholder="Enter Target Aktivitas"></input>
		</div>
		<div class="form-group">
			<label>Durasi Aktivitas</label>
			<input type="number" name="durasi_aktivitas" class="form-control" placeholder="Enter Durasi Aktivitas"></input>
		</div>
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>